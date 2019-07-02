<?php
    // var_dump($_POST);
    // die();
    $ten_danh_muc        = $_POST['ten_danh_muc'];
    include('../../connect_database.php');
    $query = "insert into danh_muc(
        ten_danh_muc
       
    ) 
    values (
        '$ten_danh_muc'
    )";
mysqli_query($connect,$query);

if( $query==true){
    header("location:  xem_danh_muc.php");
}
else{
    header("location: add_danh_muc.php");
}


