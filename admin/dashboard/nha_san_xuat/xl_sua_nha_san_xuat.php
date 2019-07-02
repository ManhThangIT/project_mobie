<?php session_start();?>
<?php include 'kt_login.php';?>
<?php 
$ma_nha_san_xuat       = strip_tags(addslashes($_POST['ma_nha_san_xuat']));
$ten_nha_san_xuat      = strip_tags(addslashes($_POST['ten_nha_san_xuat']));
include('../connect_database.php');

$query = " 
UPDATE nha_san_xuat SET
ten_nha_san_xuat = '$ten_nha_san_xuat'
WHERE ma_nha_san_xuat = '$ma_nha_san_xuat'
";

mysqli_query($connect,$query);
if ($query == TRUE) {
 echo "<script> alert('Sửa nhà sản xuất thành công !') ;window.location='xem_nha_san_xuat.php'; </script>";
} else {
 echo "<script> alert('Sửa nhà sản xuất thất bại !') ;window.location='sua_nha_san_xuat.php'; </script>";
}

mysqli_close($connect);

?>