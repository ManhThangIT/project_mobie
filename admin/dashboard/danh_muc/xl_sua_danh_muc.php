<?php session_start();?>
<?php include 'kt_login.php';?>

<?php 
    $ma_danh_muc           =  strip_tags(addslashes($_POST['ma_danh_muc']));
    $ten_danh_muc           =  strip_tags(addslashes($_POST['ten_danh_muc']));
    include('../connect_database.php');
    $query = " 
    UPDATE danh_muc SET
    ten_danh_muc = '$ten_danh_muc'
    WHERE ma_danh_muc = '$ma_danh_muc'
    ";

    mysqli_query($connect,$query);
    if ($query == TRUE) {
       echo "<script> alert('Sửa danh mục thành công !') ;window.location='xem_danh_muc.php'; </script>";
    } else {
        echo "<script> alert('Sửa danh mục thất bại !') ;window.location='sua_danh_muc.php'; </script>";
    }

    mysqli_close($connect);

 ?>