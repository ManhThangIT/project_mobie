<?php 
session_start();
$ma_san_pham = $_GET['ma_san_pham'];
include 'connect_database.php';
$query = "select so_luong_da_nhap from san_pham where ma_san_pham ='$ma_san_pham'";
$reslut = mysqli_query($connect,$query);
$row =mysqli_fetch_array($reslut);
$so_luong_da_nhap = $row['so_luong_da_nhap'];
if($_GET['kieu']=="cong"){
	if($_SESSION['gio_hang'][$ma_san_pham]['so_luong']==5){
		echo "<script>alert('BẠN HÃY LIÊN HỆ VỚI CHÚNG TÔI ĐỂ XÁC NHẬN ĐƠN HÀNG.'); window.location='xem_gio_hang.php'; </script>"; 
	}
	else if ($_SESSION['gio_hang'][$ma_san_pham]['so_luong']>=$so_luong_da_nhap) {
		echo "<script>alert('SẢN PHẨM ĐÃ HẾT'); window.location='xem_gio_hang.php'; </script>"; 
	}
	else{
		$_SESSION['gio_hang'][$ma_san_pham]['so_luong']++;
		header("location: xem_gio_hang.php");
	}
}
else{
	if($_SESSION['gio_hang'][$ma_san_pham]['so_luong']==1){
		unset($_SESSION['gio_hang'][$ma_san_pham]);
		header("location: xem_gio_hang.php");
	}
	else{
		$_SESSION['gio_hang'][$ma_san_pham]['so_luong']--;
		header("location: xem_gio_hang.php");
	}
}