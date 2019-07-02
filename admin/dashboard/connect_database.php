<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'project_dt';
$connect = mysqli_connect($server,$user,$pass,$database);
mysqli_set_charset($connect,'utf8');