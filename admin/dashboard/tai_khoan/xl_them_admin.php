<?php session_start();?>
<?php include 'kt_login.php';?>


<?php
$ten_admin = strip_tags(addslashes($_POST['ten_admin']));
$sdt       = strip_tags(addslashes($_POST['sdt']));
$email     = strip_tags(addslashes($_POST['email']));
$mat_khau  =strip_tags(addslashes($_POST['mat_khau']));
$dia_chi   =strip_tags(addslashes($_POST['dia_chi']));
$gioi_tinh =strip_tags(addslashes($_POST['gioi_tinh']));
$cap_do    =strip_tags(addslashes($_POST['cap_do']));

    include('../connect_database.php');
    $query = "insert into san_pham(
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
mysqli_query($connect,$query);
$error = mysqli_error($connect);

if(!$error){
    echo "<script> alert('Thêm admin thành công !') ;window.location='xem_admin.php'; </script>";
}
else{
    echo "<script> alert('Thêm admin thất bại !') ;window.location='them_admin.php'; </script>";
} 
    
mysqli_close($connect);
?>


