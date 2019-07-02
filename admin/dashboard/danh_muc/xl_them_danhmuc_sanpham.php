<?php session_start();?>
<?php include 'kt_login.php';?>


<?php
include '../connect_database.php';
$ma_san_pham = $_POST['ma_san_pham'];
$ma_danh_muc = $_POST['ma_danh_muc'];
$query = "INSERT INTO danhmuc_sanpham(ma_san_pham,ma_danh_muc) values ('$ma_san_pham','$ma_danh_muc')";
mysqli_query($connect,$query);
$error = mysqli_error($connect);
if(!$error){
    echo "<script> alert('Thêm sản phẩm vào danh mục thành công !') ;window.location='xem_danh_muc.php'; </script>";
}
else{
    echo "<script> alert('Thêm sản phẩm  vào danh mục thất bại !') ;window.location='them_danhmuc_sanpham.php'; </script>";
} 
?>