<form action="<?php echo PATH.'?controller=customer&action=proccess_signup';?>" method="post">
	<label>Họ và tên</label>
	<input type="text" name="txtFullname"><br>
	<label>Địa chỉ Email</label>
	<input type="text" name="txtEmail"><br>
	<label>Mật khẩu</label>
	<input type="text" name="txtPass"><br>
	<input type="submit" name="btnSignup" value="Đăng ký">
</form>