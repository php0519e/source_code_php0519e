<?php
require("sinhvien.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<meta charset="utf-8">
</head>
<body>
	<p align="right">
		<a href="add.php">Thêm mới sinh viên</a>
	</p>
	<h1 align="center">QUẢN LÝ SINH VIÊN</h1>
	<hr>
	<?php
	$sv = new SinhVien();
	$s = $sv->getAll();
	?>
	<table border="1" style="width:100%;">
		<tr>
			<th>Mã</th>
			<th>Họ và tên</th>
			<th>Giới tính</th>
			<th>Ngày sinh</th>
			<th>Nơi sinh</th>
			<th>Học bổng</th>
			<th colspan="2">Chức năng</th>
		</tr>
		<?php
		foreach($s as $k=>$v){
		?>
		<tr>
			<td><?php echo $v['MaSV'];?></td>
			<td><?php echo $v['Hodem']. ' '. $v['Ten'];?></td>
			<td><?php echo $v['Gioitinh'];?></td>
			<td><?php echo $v['Ngaysinh'];?></td>
			<td><?php echo $v['Noisinh'];?></td>
			<td><?php echo $v['Hocbong'];?></td>
			<td><a href="update.php?masv=<?php echo $v['MaSV'];?>">Cập nhật</a></td>
			<td><a href="delete.php?masv=<?php echo $v['MaSV'];?>">Xóa</a></td>
		</tr>
		<?php
		}
		?>
	</table>

</body>
</html>