<?php 
session_start();
$ma_san_pham = $_GET['ma_san_pham'];
unset($_SESSION['gio_hang'][$ma_san_pham]);
header('location:xem_gio_hang.php');