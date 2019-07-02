<?php 
    $ma_danh_muc           = $_POST['ma_danh_muc'];
    $ten_danh_muc           = $_POST['ten_danh_muc'];
    // $gia                    = $_POST['gia'];
    // // $anh                    = $target_file;
    // $thong_so_ki_thuat      = $_POST['thong_so_ki_thuat'];
    // $mo_ta                  =$_POST['mo_ta'];
    // $thoi_gian_nhap_hang    =$_POST['thoi_gian_nhap_hang'];
    // $so_luong_da_nhap       =$_POST['so_luong_da_nhap'];
    // $ma_nha_san_xuat        =$_POST['ma_nha_san_xuat'];
    include('../../connect_database.php');
    $query = " 
    UPDATE danh_muc SET
    ten_danh_muc = '$ten_danh_muc'
    WHERE ma_danh_muc = '$ma_danh_muc'
    ";

    mysqli_query($connect,$query);
    if ($query == TRUE) {
       header("location:  xem_danh_muc.php");
    } else {
        header("location: add_danh_muc.php");
    }

    mysqli_close($connect);

 ?>