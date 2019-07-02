<?php session_start();?>
<?php include 'kt_login.php';?>
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
    // var_dump($_POST);
    // die();
$ten_san_pham      = strip_tags(addslashes($_POST['ten_san_pham']));
$gia               = strip_tags(addslashes($_POST['gia']));
$anh               = strip_tags(addslashes($target_file));
$thong_so_ki_thuat = strip_tags(addslashes($_POST['thong_so_ki_thuat']));
$mo_ta             =strip_tags(addslashes($_POST['mo_ta']));
$so_luong_da_nhap  =strip_tags(addslashes($_POST['so_luong_da_nhap']));
$ton_kho           =strip_tags(addslashes($_POST['ton_kho']));
$ma_nha_san_xuat   =strip_tags(addslashes($_POST['ma_nha_san_xuat']));
if ($so_luong_da_nhap==$ton_kho ) {
    include('../connect_database.php');
    $query = "insert into san_pham(
    ten_san_pham,
    gia,
    anh,
    thong_so_ki_thuat,
    mo_ta,
    so_luong_da_nhap,
    ton_kho,
    ma_nha_san_xuat
    ) 
    values (
    '$ten_san_pham',
    '$gia',
    '$anh',
    '$thong_so_ki_thuat',
    '$mo_ta',
    '$so_luong_da_nhap',
    '$ton_kho',
    '$ma_nha_san_xuat'
)";
mysqli_query($connect,$query);
$error = mysqli_error($connect);

if(!$error || $uploadOk==0){
    echo "<script> alert('Thêm sản phẩm thành công !') ;window.location='xem_san_pham.php'; </script>";
}
else{
    echo "<script> alert('Thêm sản phẩm thất bại !') ;window.location='them_san_pham.php'; </script>";
} 
}else{
    echo "<script> alert('Số lượng đã nhập phải bằng số lượng tồn kho !') ;window.location='them_san_pham.php'; </script>";
}
mysqli_close($connect);
?>


