<?php
$email    = addslashes($_POST['email']);
$mat_khau = addslashes($_POST['mat_khau']);
$connect  = mysqli_connect('localhost','root','','project_dt');
$query    = "select * from admin where email='$email' and mat_khau = '$mat_khau'";
mysqli_set_charset($connect,'utf8');
$result        = mysqli_query($connect,$query);
$dem         = mysqli_num_rows($result);
if($dem==0){
	echo 
	// "<script>
	// 	alert('Bạn nhập sai E-mail hoặc mật khẩu <a href='login.php'>Quay Lại</a>');
	// </script>";
	// echo "Nhập sai E-mail hoặc mật khẩu"."<a href='login.php'>Quay Lại</a>";
	header('location: login.php?error_login');
}
else{
	session_start();
	$row = mysqli_fetch_array($result);
	$_SESSION['ten_admin'] = $row['ten_admin'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['dia_chi'] = $row['dia_chi'];
	$_SESSION['mat_khau'] = $row['mat_khau'];
	$_SESSION['cap_do']   = $row['cap_do'];
	header('location: http://localhost:8090/khachhang/dashboard/dashboard.php');
}