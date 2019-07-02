<?php session_start();?>
<?php include 'kt_login.php';?>

<?php 
  $ma_san_pham = $_GET['ma_san_pham'];
    include('../connect_database.php');
    $query = "DELETE FROM san_pham WHERE ma_san_pham= '$ma_san_pham'";
mysqli_query($connect,$query);

if ($query == TRUE) {
    echo "<script> alert('Xóa sản phẩm thành công !') ;window.location='xem_san_pham.php'; </script>";
} else {
    echo "<script> alert('Xóa sản phẩm thất bại !') ;window.location='xem_san_pham.php'; </script>";
}

 ?>