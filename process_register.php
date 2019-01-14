<?php
                         include './connect_database.php';
                         if(isset($_POST['xu_ly'])){
                         	$email = $_POST['email'];
                         	$ten_khach_hang = $_POST['ten_khach_hang'];
                         	$query1 = "SELECT * FROM khach_hang WHERE email = '$email'";
                         	$result1 = mysqli_query($connect,$query1);
                         	$count = mysqli_num_rows($result1);
                         	if($count==1){
                         		echo "<script>alert('Tài Khoản Đã Tồn Tại!'); window.location='index.php';</script>";
                         	}
                         	else{
									$ten_khach_hang = mysqli_real_escape_string($connect,$_POST['ten_khach_hang']);
									$mat_khau       = mysqli_real_escape_string($connect,$_POST['mat_khau']);
									$sdt            = mysqli_real_escape_string($connect,$_POST['sdt']);
									$email          = mysqli_real_escape_string($connect,$_POST['email']);
									$ngay_sinh      = mysqli_real_escape_string($connect,$_POST['ngay_sinh']);
									$dia_chi        = mysqli_real_escape_string($connect,$_POST['dia_chi']);
									$gioi_tinh      = mysqli_real_escape_string($connect,$_POST['gioi_tinh']);
									$mat_khau       = md5($mat_khau);
                         		$sql = "INSERT INTO khach_hang(
	                         		email,
	                         		mat_khau,
	                         		ten_khach_hang,
	                         		sdt,
	                         		ngay_sinh,
	                         		dia_chi,
	                         		gioi_tinh
	                         		) VALUES (
	                         		'$email',
	                         		'$mat_khau',
	                         		'$ten_khach_hang',
	                         		'$sdt',
	                         		'$ngay_sinh',
	                         		'$dia_chi',
	                         		'$gioi_tinh'
                         			)";
                         		mysqli_query($connect,$sql);
                         		$error1 = mysqli_error($connect);
                         		if(empty($error1)){
                         			
                         			$_SESSION['customer']['email'] = $email;
                         			$_SESSION['customer']['ten_khach_hang'] = $ten_khach_hang;
                         			
                         			echo "<script>alert('Đăng Ký Thành Công! Bạn hãy đăng nhập lại để đảm bảo an toàn'); window.location='index.php';</script>";
                         		}
                         		else{
                         			echo "<script>alert('Tài Khoản Đã Tồn Tại!'); window.location='index.php';</script>";
                         		}
                         	}
                         }
                         else{
                         	echo "<script>alert('Bạn Chưa Đăng Nhập!');window.location='index.php';</script>";
                         }

?>
