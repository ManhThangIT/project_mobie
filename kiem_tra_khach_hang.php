<?php 
session_start();
if(empty($_SESSION['customer']['email'])){
	header('location: form_dangnhap.php');
}