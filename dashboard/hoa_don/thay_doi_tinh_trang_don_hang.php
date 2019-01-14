<?php 
include '../kt_login.php';
require_once('../connect_database.php');
$ma_hoa_don = $_GET['ma_hoa_don'];
$kieu = $_GET['kieu'];
if($kieu=='duyet'){
	$tinh_trang = 'Đã Duyệt';
	echo "<script> alert('Duyệt Thành Công !') ;window.location='xem_hoa_don.php'; </script>";
}
else{
	$tinh_trang = 'Đã Hủy';
	echo "<script> alert('Duyệt Thành Công !') ;window.location='xem_hoa_don.php'; </script>";
}
$query = "update hoa_don set tinh_trang = '$tinh_trang'
where ma_hoa_don = '$ma_hoa_don' and tinh_trang = 1";
mysqli_query($connect,$query);
