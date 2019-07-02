<?php session_start();?>
<?php include 'kt_login.php';?>
<?php
$ten_nha_san_xuat   =strip_tags(addslashes($_POST['ten_nha_san_xuat']));

    include('../connect_database.php');
    $query = "insert into nha_san_xuat(
    ten_nha_san_xuat
    ) 
    values (
    '$ten_nha_san_xuat'
)";
mysqli_query($connect,$query);
$error = mysqli_error($connect);

if(!$error){
    echo "<script> alert('Thêm nhà sản xuất thành công !') ;window.location='xem_nha_san_xuat.php'; </script>";
}
else{
    echo "<script> alert('Thêm nhà sản xuất thất bại !') ;window.location='them_nha_san_xuat.php'; </script>";
} 
mysqli_close($connect);
?>


