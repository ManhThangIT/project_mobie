<?php 
	$ma_hoa_don = $_GET['ma_hoa_don'];
	include 'connect_database.php';
	// lấy số lượng sản phẩm trong chi tiết hóa đơn đã đăt
	$query_x = "SELECT * FROM hoa_don
				JOIN chitiet_hoadon 
				ON hoa_don.ma_hoa_don = chitiet_hoadon.ma_hoa_don
				WHERE chitiet_hoadon.ma_hoa_don = '$ma_hoa_don'";
	$reslut_x = mysqli_query($connect,$query_x);
	$row_x = mysqli_fetch_array($reslut_x);
	$so_luong_huy = $row_x['so_luong'];
	$ma_san_pham = $row_x['ma_san_pham'];

	// Lấy số lượng tồn kho trong bảng sản phẩm
	$query_tk = "SELECT * from san_pham where ma_san_pham='$ma_san_pham'";
	$reslut_tk = mysqli_query($connect,$query_tk);
	$row_tk = mysqli_fetch_array($reslut_tk);
	$ton_kho = $row_tk['ton_kho'];

	$ton_kho_moi = $ton_kho + $so_luong_huy;
	// UPDATE lại cột tồn kho khi hủy đươn hàng
	$query_update = "UPDATE san_pham set ton_kho= '$ton_kho_moi' where ma_san_pham = '$ma_san_pham'";
	mysqli_query($connect,$query_update);
	// sau khi update xóa hóa đơn
	$query = "DELETE FROM chitiet_hoadon WHERE ma_hoa_don='$ma_hoa_don'";
	$reslut = mysqli_query($connect,$query);
	if ($query == TRUE) {

		$querya = "DELETE FROM hoa_don WHERE ma_hoa_don='$ma_hoa_don'";
		$resluta = mysqli_query($connect,$querya);
		echo "<script> alert('Hủy đơn hàng thành công !');window.location='xem_thong_tin.php'; </script>";
} else {
	echo "<script> alert('Hủy đơn hàng thất bại !');window.location='xem_thong_tin.php'; </script>";
}
?>