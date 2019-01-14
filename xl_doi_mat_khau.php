<?php 
session_start();
$email = $_SESSION['customer']['email'];

include 'connect_database.php';
$querya="select * from khach_hang where email ='$email'";
$resulta=mysqli_query($connect,$querya);
$rowa=mysqli_fetch_array($resulta);
$_SESSION['ma_khach_hang']=$rowa['ma_khach_hang'];

if(isset($_GET['cap_nhap']) && !empty($_GET['mat_khau_cu']) && !empty($_GET['mat_khau_moi']) && !empty($_GET['re_mat_khau_moi'])){

	$mat_khau_cu = $_GET['mat_khau_cu'];
	$mat_khau_cu = md5($mat_khau_cu);
	
	$ma_khach_hang = $_SESSION['ma_khach_hang'];
	$query = "select mat_khau from khach_hang where ma_khach_hang = '$ma_khach_hang'";
	$result = mysqli_query($connect,$query);
	$row = mysqli_fetch_array($result);
	$mat_khau_cu_cu = $row['mat_khau'];
	$mat_khau_cu_cu = md5($mat_khau_cu_cu);
	
	if($mat_khau_cu==$mat_khau_cu_cu){

		$mat_khau_moi    = $_GET['mat_khau_moi'];
		$re_mat_khau_moi = $_GET['re_mat_khau_moi'];

		if($mat_khau_moi==$re_mat_khau_moi){

			$query = "update khach_hang set mat_khau = '$mat_khau_moi' where ma_khach_hang = '$ma_khach_hang'";
			mysqli_query($connect,$query);
			// mysqli_close($connect);
			echo "<script> alert('Đổi mật khẩu thành công !') ; window.location='form_doi_mat_khau.php'; </script>";
			//header thành công 
		}
		else{
			echo "<script> alert('Mật khẩu mới không khớp !') ; window.location='form_doi_mat_khau.php'; </script>";

			// mysqli_close($connect);
			//header thất bại 
		}
	}
	else{
		echo "<script> alert('Mật khẩu cũ không khớp !') ; window.location='form_doi_mat_khau.php'; </script>";

		
		// mysqli_close($connect);
		//header thất bại 
	}
}
else{
	echo "<script> alert('Không được để trống !') ; window.location='form_doi_mat_khau.php'; </script>";
	//header thất bại 
}