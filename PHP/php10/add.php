<!DOCTYPE html>
<html>
<head>
	<title>Thêm mới Sinh viên</title>
</head>
<body>
	<h1 align="center">THÊM MỚI SINH VIÊN</h1>
	<hr>

	<?php
	require("sinhvien.php");
	if(isset($_POST['btnAdd'])){
		$ma = $_POST['txtMa'];
		$hodem = $_POST['txtHodem'];
		$ten = $_POST['txtTen'];
		$makh = $_POST['txtMakh'];

		//Khởi tạo đối tượng 'SinhVien'
		$sv = new SinhVien();
		if($sv->addSinhVien($ma,$hodem,$ten,$makh)==true){
			echo "<p style='color:green'>Thêm mới thành công.</p>";
		}else{
			echo "<p style='color:red'>Thêm mới thất bại.</p>";
		}
	}
	?>

	<form action="add.php" method="post">
		<table>
			<tr>
				<td>Mã Sinh viên</td>
				<td><input type="text" name="txtMa"></td>
			</tr>
			<tr>
				<td>Họ đệm</td>
				<td><input type="text" name="txtHodem"></td>
			</tr>
			<tr>
				<td>Ten</td>
				<td><input type="text" name="txtTen"></td>
			</tr>
			<tr>
				<td>Mã khoa</td>
				<td><input type="text" name="txtMakh"></td>
			</tr><tr>
				<td></td>
				<td><input type="submit" name="btnAdd" value="Thêm mới"></td>
			</tr>
		</table>
	</form>

</body>
</html>