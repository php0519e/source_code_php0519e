<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if(isset($_GET['u']) && isset($_GET['p'])){
	?>

	<h2>Thay đổi thông tin tài khoản</h2>
	<hr>
	<form action="profile.php" method="post">
		<table>
			<tr>
				<td>Tên đăng nhập</td>
				<td>
					<input type="text" name="txtUser" value="<?php echo $_GET['u'];?>">
				</td>
			</tr>
			<tr>
				<td>Mật khẩu hiện tại</td>
				<td>
					<input type="password" name="txtPass" value="<?php echo $_GET['p'];?>">
				</td>
			</tr>
			<tr>
				<td>Mật khẩu mới</td>
				<td>
					<input type="password" name="txtNewPass">
				</td>
			</tr>
			<tr>
				<td>Địa chỉ liên hệ</td>
				<td>
					<input type="text" name="txtAddress">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="btnChange" value="Cập nhật">
				</td>
			</tr>
		</table>
	</form>
	<?php
		}else{
			header("location:client.html");
	}
	?>
</body>
</html>