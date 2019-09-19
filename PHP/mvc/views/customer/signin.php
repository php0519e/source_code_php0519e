<label>
	<?php
	echo isset($_SESSION['message']) ? $_SESSION['message'] : "";
	?>
</label>
<form action="<?php echo PATH.'?controller=customer&action=proccess_signin';?>" method="post">
	Tên đăng nhập 
	<input type="text" name="user"><br>
	Mật khẩu
	<input type="password" name="pass"><br>
	<input type="submit" name="signin" value="Đăng nhập">
</form>