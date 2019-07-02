<?php session_start();?>
<?php include 'kt_login.php';?>

<?php 
$ma_admin  = strip_tags(addslashes($_POST['ma_admin']));
$ten_admin = strip_tags(addslashes($_POST['ten_admin']));
$sdt       = strip_tags(addslashes($_POST['sdt']));
$email     = strip_tags(addslashes($_POST['email']));
$mat_khau  =strip_tags(addslashes($_POST['mat_khau']));
$dia_chi   =strip_tags(addslashes($_POST['dia_chi']));
$gioi_tinh =strip_tags(addslashes($_POST['gioi_tinh']));
include('../connect_database.php');

$query = " 
UPDATE admin SET
ten_admin = '$ten_admin',
sdt = $sdt,
email ='$email', 
mat_khau ='$mat_khau',
dia_chi ='$dia_chi',
gioi_tinh =' $gioi_tinh'
WHERE ma_admin = '$ma_admin'
";

mysqli_query($connect,$query);
if ($query == TRUE) {
 echo "<script> alert('Sửa thành công !') ;window.location='xem_thong_tin.php'; </script>";
} else {
 echo "<script> alert('Sửa thất bại !') ;window.location='sua_thong_tin.php'; </script>";
}

mysqli_close($connect);

?>