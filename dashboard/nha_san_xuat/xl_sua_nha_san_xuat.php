<?php 
    $ma_nha_san_xuat           = $_POST['ma_nha_san_xuat'];
    $ten_nha_san_xuat           = $_POST['ten_nha_san_xuat'];
    // $gia                    = $_POST['gia'];
    // // $anh                    = $target_file;
    // $thong_so_ki_thuat      = $_POST['thong_so_ki_thuat'];
    // $mo_ta                  =$_POST['mo_ta'];
    // $thoi_gian_nhap_hang    =$_POST['thoi_gian_nhap_hang'];
    // $so_luong_da_nhap       =$_POST['so_luong_da_nhap'];
    // $ma_nha_san_xuat        =$_POST['ma_nha_san_xuat'];
    include('../../connect_database.php');
    $query = " 
    UPDATE nha_san_xuat SET
    ten_nha_san_xuat = '$ten_nha_san_xuat'
    WHERE ma_nha_san_xuat = '$ma_nha_san_xuat'
    ";

    mysqli_query($connect,$query);
    if ($query == TRUE) {
       header("location:  xem_nha_san_xuat.php");
    } else {
        header("location: add_nha_san_xuat.php");
    }

    mysqli_close($connect);

 ?>