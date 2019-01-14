<?php session_start();?>
<h3> Chào <?php echo $_SESSION['ten_khach_hang'];?></h3>
<a href="logout.php"><button>Thoát</button></a>