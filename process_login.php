<?php
	include('./connect_database.php');
	$email=strip_tags(addslashes($_POST['email']));
	$mat_khau=strip_tags(addslashes($_POST['mat_khau']));
	// $mat_khau = md5($mat_khau);
	session_start();
	// Không nên đổ trực tiếp vào session tổng, nên đổ tất cả thông tin khách hàng vào $_SESSION['customer']
	// Khi kiểm tra login hay chưa, kiểm tra xem $_SESSION['customer'] có tồn tại, isset hay ko
	$_SESSION['customer']['email']=$email;
	$_SESSION['customer']['mat_khau']=$mat_khau;
	// $_SESSION['customer']['ten_khach_hang']=$ten_khach_hang;
	//Nên đổ thêm tên khách hàng vào session, không nên đổ mật khẩu
	 if (!$email||!$mat_khau) {
	 	echo "<script> alert('Tài khoản hoặc mật khẩu không được để trống !') ;window.location='index.php'; </script>";
	 }
	 $query="select email from khach_hang where email ='$email'";
	 $result=mysqli_query($connect,$query);
	 $row=mysqli_num_rows($result);
	 if ($row==0) {
	 	echo "<script> alert('Tài khoản này không tồn tại !');window.location='index.php'; </script>";
	 	session_unset();
	 }
	 $query1="select mat_khau from khach_hang where mat_khau='$mat_khau'";
	 $result1=mysqli_query($connect,$query1);
	 $row1=mysqli_num_rows($result1);
	 if ($row1==0) {
	 		echo "<script> alert('Mật khẩu không chính xác !') ; window.location='index.php';</script>";
	 		session_unset();
	 }
	 $query2="select * from khach_hang where email='$email' and mat_khau='$mat_khau'";

	 $result2=mysqli_query($connect,$query2);
	 $rw = mysqli_fetch_array($result2);
	 $row2=mysqli_num_rows($result2);
	 $_SESSION['ten_khach_hang'] = $rw['ten_khach_hang'];
	 // if ($row2=='1') {
	 // 	echo "<script> alert('admin !') ;window.location='http://localhost:8090/khachhang/dashboard/login.php';</script>";
	 // }
	 if($row2==1) {
	 	
	 	echo "<script> alert('Xin chào ".$_SESSION['ten_khach_hang']."') ; window.location='index.php';</script>";
	 }
mysqli_close($connect);
?>
	<?php
	$email = $_GET['email'];
	if(isset($_GET['ghinho'])){
	
			setcookie('email',$email,time()+36000);
	
	}

?>