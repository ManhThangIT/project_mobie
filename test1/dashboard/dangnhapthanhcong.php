<!DOCTYPE html>
<html>
<head>
	<title>Thông tin</title>
	<style>
		table{
			margin: auto;
		}
		td{
			font-size: 25px;
		}
		th{
			font-size: 25px;
		}
		button{
			height: 30px;
			width: 100px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<?php
		session_start();
		// kiểm tra xem đăng nhập hay chưa,cấp độ ntn
		if(empty($_SESSION)){
			header('location: login.php');
		}
		$ten_admin = $_SESSION['ten_admin'];
		$dia_chi = $_SESSION['dia_chi'];
		$mat_khau = $_SESSION['mat_khau'];
		$cap_do = $_SESSION['cap_do'];
	?>
	<?php 	
			echo 
			"<table border='1px' width='100%'>
				<tr>
					<th colspan='2'>THÔNG TIN QUẢN TRỊ VIÊN</th>
	
				</tr>
				<tr>
					<td>Tên Đăng Nhập</td>
					<td>$ten_admin</td>
				</tr>
				<tr>
					<td>Địa Chỉ</td>
					<td>$dia_chi</td>
				</tr>
								<tr>
					<td>Mật Khẩu</td>
					<td>$mat_khau</td>
				</tr>
				<tr>
					<td>Cấp Độ</td>
					<td>$cap_do</td>
				</tr>
			</table>";
	 	?>
	<!-- <a href="http://localhost:8090/khachhang/dashboard/dashboard.php"><button type="">Quay Lại</button></a> -->
<!-- 	<a href=" logout.php"><button type="">Đăng xuất</button></a> -->
	
</body>
</html>