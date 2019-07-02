<?php 
    $ma_san_pham            = $_POST['ma_san_pham'];
    $ten_san_pham           = $_POST['ten_san_pham'];
    $gia                    = $_POST['gia'];
    // $anh                    = $target_file;
    $thong_so_ki_thuat      = $_POST['thong_so_ki_thuat'];
    $mo_ta                  =$_POST['mo_ta'];
    $thoi_gian_nhap_hang    =$_POST['thoi_gian_nhap_hang'];
    $so_luong_da_nhap       =$_POST['so_luong_da_nhap'];
    $ma_nha_san_xuat        =$_POST['ma_nha_san_xuat'];
    include('../../connect_database.php');
    $query = " 
    UPDATE san_pham SET
    ten_san_pham = '$ten_san_pham',
    gia = $gia,
    thong_so_ki_thuat ='$thong_so_ki_thuat', 
    mo_ta ='$mo_ta',  
    thoi_gian_nhap_hang ='$thoi_gian_nhap_hang',
    so_luong_da_nhap ='$so_luong_da_nhap',
    ma_nha_san_xuat =' $ma_nha_san_xuat'
    WHERE ma_san_pham = '$ma_san_pham'
    ";

    mysqli_query($connect,$query);
    if ($query == TRUE) {
       header("location:  xem_san_pham.php");
    } else {
        header("location: add_san_pham.php");
    }

    mysqli_close($connect);

 ?>