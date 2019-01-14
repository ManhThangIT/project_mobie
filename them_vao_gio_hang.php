<?php 
include 'kiem_tra_khach_hang.php';
$ma_san_pham = $_GET['ma_san_pham'];
if(isset($_SESSION['gio_hang'][$ma_san_pham])){
	$_SESSION['gio_hang'][$ma_san_pham]['so_luong']++;
}
else{
	include 'connect_database.php';
	$query = "select * from san_pham where ma_san_pham = '$ma_san_pham'";
	$result = mysqli_query($connect,$query);
	$row    = mysqli_fetch_array($result);


	$_SESSION['gio_hang'][$ma_san_pham]['ten_san_pham'] = $row['ten_san_pham'];
	$_SESSION['gio_hang'][$ma_san_pham]['anh']          = $row['anh'];
	$_SESSION['gio_hang'][$ma_san_pham]['gia']          = $row['gia'];
	$_SESSION['gio_hang'][$ma_san_pham]['so_luong']     = 1;
}
// $history = $_SERVER['HTTP_REFERER'];
// header("location:$history");
echo "<script>
alert('Bạn đã thêm thành công!');
window.history.back()
</script>";

