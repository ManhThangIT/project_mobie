<?php
    // var_dump($_POST);
    // die();
    $ten_nha_san_xuat        = $_POST['ten_nha_san_xuat'];
    include('../../connect_database.php');
    $query = "insert into nha_san_xuat(
        ten_nha_san_xuat
       
    ) 
    values (
        '$ten_nha_san_xuat'
    )";
mysqli_query($connect,$query);

if( $query==true){
    header("location:  xem_nha_san_xuat.php");
}
else{
    header("location: add_nha_san_xuat.php");
}


