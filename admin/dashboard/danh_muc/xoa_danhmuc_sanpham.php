<?php session_start();?>
<?php include 'kt_login.php';?>

<?php 
$ma_san_pham = $_GET['ma_san_pham'];
include('../connect_database.php');

$qr = "SELECT * FROM chitiet_hoadon
JOIN hoa_don
ON chitiet_hoadon.ma_hoa_don = hoa_don.ma_hoa_don
JOIN san_pham
ON chitiet_hoadon.ma_san_pham = san_pham.ma_san_pham
WHERE chitiet_hoadon.ma_san_pham = '$ma_san_pham'";
$reslut = mysqli_query($connect,$qr);
$rw = mysqli_fetch_array($reslut);
$tinh_trang = $rw['tinh_trang'];

if ($tinh_trang == 'Đã Duyệt') {
	echo "<script> alert('Sản phẩm đang hiện có trong hóa đơn !') ;window.location='xem_danhmuc_sanpham.php'; </script>";
}else{

	$query = "DELETE FROM danhmuc_sanpham WHERE ma_san_pham= '$ma_san_pham'";
	mysqli_query($connect,$query);

	if ($query == TRUE) {
    echo "<script> alert('Xóa danh mục sản phẩm thành công !') ;window.location='xem_danhmuc_sanpham.php'; </script>";
	} else {
    echo "<script> alert('Sản phẩm đang hiện có trong hóa đơn !') ;window.location='xem_danhmuc_sanpham.php'; </script>";
	}
}

mysqli_close($connect);



?>