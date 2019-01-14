<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		input{
			width: 50%; 
			height: 30px;
		}
		td{
			text-align: center;
		}
		button{
			height: 30px;
		}
		th{
			font-size: 18px;
		}
		input{
			font-weight: bold;
			font-size: 15px;
		}
		button:hover{
			background: red;
		}
	</style>
</head>
<body>
	<?php 
		$ma_san_pham = $_GET['ma_san_pham'];
		include('../../connect_database.php');
		$query = "select * from san_pham WHERE ma_san_pham= '$ma_san_pham'";
		$result = mysqli_query($connect, $query);
		$rs = mysqli_fetch_array($result);
		print_r($rs);

	?>
	<form action="xl_sua_san_pham.php" method="POST" enctype="multipart/form-data">
		<table border="1" width="100%">
			<tr>
				<td><input type="hidden" name="ma_san_pham" value="<?php echo $ma_san_pham; ?>"></td>
			</tr>
			<tr>
				<th>Tên Sản Phẩm</th>
				<td><input type="text" name="ten_san_pham" value="<?php echo $rs['ten_san_pham']; ?>"></td>
			</tr>
			<tr>
				<th>Giá</th>
				<td><input type="number" name="gia" value="<?php echo $rs['gia']; ?>"></td>
			</tr>
			<!-- <tr>
				<th>Ảnh</th>
				<td><input type="file" name="file"  accept="image/*"></td>
			</tr> -->
			<tr>
				<th>Thông số kỹ thuật</th>
				<td><input type="text" name="thong_so_ki_thuat" value="<?php echo $rs['thong_so_ki_thuat']; ?>"></td>
			</tr>
			<tr>
				<th>Mô tả</th>
				<td><input type="text" name="mo_ta" value="<?php echo $rs['mo_ta']; ?>"></td>
			</tr>
			<tr>
				<th>Thời gian nhập hàng</th>
				<td><input type="date" name="thoi_gian_nhap_hang" value="<?php echo $rs['thoi_gian_nhap_hang']; ?>"></td>
			</tr>
			<tr>
				<th>Số lượng đã nhập</th>
				<td><input type="number" name="so_luong_da_nhap" value="<?php echo $rs['so_luong_da_nhap']; ?>">
			</tr>
			<tr>
				<th>Mã nhà sản xuất</th>
				<td><input type="number" name="ma_nha_san_xuat" value="<?php echo $rs['ma_nha_san_xuat']; ?>"></td>
			</tr>
			<tr>
				<td colspan="2"><button>Sửa sản phẩm</button></td>
			</tr>
		</table>	
	</form>
</body>
</html>