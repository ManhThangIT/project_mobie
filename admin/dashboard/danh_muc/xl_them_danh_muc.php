<?php session_start();?>
<?php include 'kt_login.php';?>

<?php

$ten_danh_muc      = strip_tags(addslashes($_POST['ten_danh_muc']));
    include('../connect_database.php');
    $query = "insert into danh_muc(
    ten_danh_muc
    ) 
    values (
    '$ten_danh_muc')";
mysqli_query($connect,$query);
$error = mysqli_error($connect);

if(!$error){
    echo "<script> alert('Thêm danh mục thành công !') ;window.location='xem_danh_muc.php'; </script>";
}
else{
    echo "<script> alert('Thêm danh mục thất bại !') ;window.location='them_danh_muc.php'; </script>";
} 
mysqli_close($connect);
?>


