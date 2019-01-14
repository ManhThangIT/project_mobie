<?php
session_start();
include '../connect_database.php';
if (empty($_SESSION['ten_admin'])) {
	header('location: login.php');
}
?>