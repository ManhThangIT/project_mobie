<?php 
// require_once('kiem_tra_khach_hang.php');
session_start();

$email = $_SESSION['customer']['email'];

include 'connect_database.php';
$querya="select * from khach_hang where email ='$email'";
$resulta=mysqli_query($connect,$querya);
$rowa=mysqli_fetch_array($resulta);
$_SESSION['ma_khach_hang']=$rowa['ma_khach_hang'];


if(isset($_GET['sua_thong_tin']) && !empty($_GET['ten_khach_hang']) && !empty($_GET['sdt']) && !empty($_GET['dia_chi'])){
	
	$ten_khach_hang = $_GET['ten_khach_hang'];
	$sdt            = $_GET['sdt'];
	$dia_chi        = $_GET['dia_chi'];
	
	$ma_khach_hang = $_SESSION['ma_khach_hang'];

	
	$query = "update khach_hang set ten_khach_hang = '$ten_khach_hang', sdt = '$sdt', dia_chi = '$dia_chi' where ma_khach_hang = '$ma_khach_hang'";
	mysqli_query($connect,$query);
	$error = mysqli_error($connect);
	if(empty($error)){
		echo "<script>alert('Cập nhập thông tin thành công!'); window.location='xem_thong_tin.php';</script>"; 
	}
	else{
		echo "<script>alert('Cập nhập thông tin thất bại!'); window.location='xem_thong_tin.php';</script>"; 
	}
}
else{
	echo "<script>alert('Cập nhập thông tin thất bại!'); window.location='xem_thong_tin.php';</script>"; 
}