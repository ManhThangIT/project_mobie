<?php 
  $ma_san_pham = $_GET['ma_san_pham'];
    include('../../connect_database.php');
    $query = "DELETE FROM san_pham WHERE ma_san_pham= '$ma_san_pham'";
mysqli_query($connect,$query);

if ($query == TRUE) {
    header("location:  xem_san_pham.php");
} else {
    header("location: add_san_pham.php");
}

 ?>