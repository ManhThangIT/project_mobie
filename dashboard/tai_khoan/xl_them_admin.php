<?php
include '../connect_database.php';
$ten_admin = $_POST['ten_admin'];
$sdt       = $_POST['sdt'];
$email     = $_POST['email'];
$dia_chi   = $_POST['dia_chi'];
$gioi_tinh = $_POST['gioi_tinh'];
$mat_khau  = $_POST['mat_khau'];
$cap_do    = $_POST['cap_do'];

$query = "INSERT INTO admin(
ten_admin,
sdt,
email,
mat_khau,
dia_chi,
gioi_tinh,
cap_do
) 
values (
'$ten_admin',
'$sdt',
'$email',
'$mat_khau',
'$dia_chi',
'$gioi_tinh',
'$cap_do'
)";

// echo $query;
// die();
$reslut = mysqli_query($connect,$query);

if($reslut == true ){

    echo "<script> alert('Thêm thành công !') ;window.location='xem_admin.php'; </script>";
}
else{

    echo "<script> alert('Thêm thất bại !') ;window.location='them_admin.php'; </script>";
}
?>

