
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
		'Chờ Duyệt',
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

		// kiểm tra hàng tồn kho

		foreach ($_SESSION['gio_hang'] as $ma_san_pham => $tung_san_pham) {

			$query_sp = "SELECT 
			sum(so_luong),so_luong_da_nhap,ten_san_pham 
			from chitiet_hoadon
			join hoa_don 
			on chitiet_hoadon.ma_hoa_don = hoa_don.ma_hoa_don
			join san_pham 
			on san_pham.ma_san_pham = chitiet_hoadon.ma_san_pham
			where san_pham.ma_san_pham = '$ma_san_pham'";
			$result_sp = mysqli_query($connect,$query_sp);
			$row_sp = mysqli_fetch_array($result_sp);
			$so_luong_da_mua = $row_sp['sum(so_luong)'];

			$so_luong_da_nhap = $row_sp['so_luong_da_nhap'];

			$so_luong_dat_hang = $tung_san_pham['so_luong'];

			$so_con_lai = $so_luong_da_nhap - $so_luong_da_mua;

			if ($so_con_lai > $so_luong_dat_hang) {
				$query_hd = "UPDATE san_pham SET ton_kho = '$so_con_lai' WHERE ma_san_pham = '$ma_san_pham'";
				mysqli_query($connect,$query_hd);
				// unset($_SESSION['gio_hang']);
				echo "<script>window.location='thongtin_thanhtoan.php'; </script>";
			} else {
				echo "<script> alert('Sản phẩm của chúng tôi đã hết!') ;window.location='dat_hang.php'; </script>";
				
				
			}
		}


		
		// header('location: thongtin_thanhtoan.php');
	}
	else{
		echo "<scrip>alert('Đặt hàng thất bại');</scrip>";
	}
}
else{
	echo "<scrip>alert('Đặt hàng thất bại');</scrip>";
}
