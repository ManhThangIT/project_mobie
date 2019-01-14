
<?php 
session_start();

                //lấy mã khách hàng đang đăng nhập
$email = $_SESSION['customer']['email'];

include 'connect_database.php';
$querya="select * from khach_hang where email ='$email'";
$resulta=mysqli_query($connect,$querya);
$rowa=mysqli_fetch_array($resulta);
$_SESSION['ma_khach_hang']=$rowa['ma_khach_hang'];


if(!empty($_SESSION['gio_hang'])){

	if(isset($_GET['dat_hang']) && !empty($_GET['nguoi_nhan']) && !empty($_GET['sdt_nguoi_nhan']) && !empty($_GET['dia_chi'])){
		//lấy thông tin người nhận
		

		include 'connect_database.php';
		//lấy mã hóa đơn lớn nhất và tăng lên 1 (tránh trùng)
		$query  = "select max(ma_hoa_don) from hoa_don";
		$result = mysqli_query($connect,$query);
		$row    = mysqli_fetch_array($result);

		//kiểm tra xem đã có hóa đơn chưa, nếu chưa thì mã hóa đơn mặc định là 1
		if(isset($row['max(ma_hoa_don)'])){
			$ma_hoa_don = $row['max(ma_hoa_don)']+1;

		}
		else{
			$ma_hoa_don = 1;
		}

		$ma_khach_hang = $_SESSION['ma_khach_hang'];
		
		$nguoi_nhan     = $_GET['nguoi_nhan'];
		$sdt_nguoi_nhan     = $_GET['sdt_nguoi_nhan'];
		$dia_chi = $_GET['dia_chi'];


		$tong_tien = 0;
		foreach ($_SESSION['gio_hang'] as $ma_san_pham => $tung_san_pham) { 
			
			$tong_tien = $tong_tien + ($tung_san_pham['gia']*$tung_san_pham['so_luong']);
		}

		
		$query = "INSERT INTO hoa_don(
		ma_hoa_don,
		ma_khach_hang,
		nguoi_nhan,
		dia_chi,
		sdt_nguoi_nhan,
		tinh_trang,
		thanh_tien)
		VALUES(
		'$ma_hoa_don',
		'$ma_khach_hang',
		'$nguoi_nhan',
		'$dia_chi',
		'$sdt_nguoi_nhan',
		1,
		'$tong_tien')";

		mysqli_query($connect,$query);


		
		


		foreach ($_SESSION['gio_hang'] as $ma_san_pham => $tung_san_pham) { 
			$so_luong = $tung_san_pham['so_luong'];
			$query = "INSERT INTO chitiet_hoadon
			(ma_hoa_don,
			ma_san_pham,
			so_luong)
			VALUES
			('$ma_hoa_don',
			'$ma_san_pham',
			'$so_luong')";
			mysqli_query($connect,$query);
		}
		
		header('location: thongtin_thanhtoan.php');
	}
	else{
		echo "<scrip>alert('Dat Hang That Bai');</scrip>";
	}
}
else{
	echo "<scrip>alert('Dat Hang That Bai');</scrip>";
	}
