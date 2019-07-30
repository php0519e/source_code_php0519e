<?php
//Khởi động SESSION CỦA SERVER
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if(isset($_SESSION['account']) && isset($_SESSION['logged']) && $_SESSION['logged']==true){
	?>

	<h2>Thay đổi thông tin tài khoản  |  <a href="logout.php">Đăng xuất</a></h2>
	<hr>
	<form action="profile.php" method="post">
		<table>
			<tr>
				<td>Tên đăng nhập</td>
				<td>
					<input type="text" name="txtUser" value="<?php echo $_SESSION['account'];?>">
				</td>
			</tr>
			<tr>
				<td>Mật khẩu hiện tại</td>
				<td>
					<input type="password" name="txtPass">
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