<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		img{
			width: 100px;
			height: 100px;
		}
		td{
			text-align: center;
		}
		.tieude{
			font-size: 22px;
			font-weight: bold;
			color: #00FF25;
		}
	</style>
</head>
<body>
	<?php
		$connect = mysqli_connect('localhost','root','','project_dt');
		mysqli_set_charset($connect,'utf8');
		$query = 'select * from san_pham';
		$result = mysqli_query($connect,$query);

	?>
	<table border="1" width="100%">
		<tr>
			<td class="tieude">Ảnh</td>
			<td class="tieude">Mã SP</td>
			<td class="tieude">Tên SP</td>
			<td class="tieude">Giá</td>
			<td class="tieude">Thông số kỹ thuật</td>
			<td class="tieude">Mô tả</td>
			<td class="tieude">Thời gian nhập hàng</td>
			<td class="tieude">Số lượng đã nhập</td>
			<td class="tieude">Mã nhà sản xuất</td>
			<td class="tieude">Action</td>
		</tr>
		<?php
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td><img src='".$row['anh']."'></td>";
				echo "<td>".$row['ma_san_pham']."</td>";
				echo "<td>".$row['ten_san_pham']."</td>";
				echo "<td>".$row['gia']."</td>";
				echo "<td>".$row['thong_so_ki_thuat']."</td>";
				echo "<td>".$row['mo_ta']."</td>"; 	
				echo "<td>".$row['thoi_gian_nhap_hang']."</td>";
				echo "<td>".$row['so_luong_da_nhap']."</td>";
				echo "<td>".$row['ma_nha_san_xuat']."</td>";
				echo "<td><a href ='add_san_pham.php'><button>Thêm</button></a>  <a href ='sua_san_pham.php?ma_san_pham=".$row['ma_san_pham']."'><button>Sửa</button></a>  <a href ='xoa_san_pham.php?ma_san_pham=".$row['ma_san_pham']."'><button>Xóa</button></a></td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>