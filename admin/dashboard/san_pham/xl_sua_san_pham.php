<?php session_start();?>
<?php include 'kt_login.php';?>

<?php 
        $ma_san_pham       = strip_tags(addslashes($_POST['ma_san_pham']));
        $ten_san_pham      = strip_tags(addslashes($_POST['ten_san_pham']));
        $gia               = strip_tags(addslashes($_POST['gia']));
        $thong_so_ki_thuat = strip_tags(addslashes($_POST['thong_so_ki_thuat']));
        $mo_ta             =strip_tags(addslashes($_POST['mo_ta']));
        $so_luong_da_nhap  =strip_tags(addslashes($_POST['so_luong_da_nhap']));
        $ma_nha_san_xuat   =strip_tags(addslashes($_POST['ma_nha_san_xuat']));
    include('../connect_database.php');
    
       $query = " 
    UPDATE san_pham SET
    ten_san_pham = '$ten_san_pham',
    gia = $gia,
    thong_so_ki_thuat ='$thong_so_ki_thuat', 
    mo_ta ='$mo_ta',
    so_luong_da_nhap ='$so_luong_da_nhap',
    ma_nha_san_xuat =' $ma_nha_san_xuat'
    WHERE ma_san_pham = '$ma_san_pham'
    ";

    mysqli_query($connect,$query);
    if ($query == TRUE) {
       echo "<script> alert('Sửa sản phẩm thành công !') ;window.location='xem_san_pham.php'; </script>";
    } else {
       echo "<script> alert('Sửa sản phẩm thất bại !') ;window.location='sua_san_pham.php'; </script>";
    }

    mysqli_close($connect);

 ?>