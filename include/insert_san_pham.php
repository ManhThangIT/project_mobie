<?php
$imageFileType = strtolower(pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION));
$target_dir = "image/";
$target_file = $target_dir . time(). ".$imageFileType";
$uploadOk = 1;
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 500000) {
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    	$uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

$ten_san_pham = $_POST['ten_san_pham'];
$gia          = $_POST['gia'];
$so_luong     = $_POST['so_luong'];
$anh          = $target_file;
include('connect_database.php');
$query = "insert into san_pham(ten_san_pham,gia,so_luong,anh) values ('$ten_san_pham',$gia,$so_luong,'$anh')";
mysqli_query($connect,$query);
$error = mysqli_error($connect);
if(!empty($error) || $uploadOk==0){
	header("location:insert_form_san_pham.php?error");
}
else{
	header("location:insert_form_san_pham.php?success");
}