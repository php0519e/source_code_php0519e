<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#header, #footer{
			line-height: 50px;
			border: 1px solid blue;
			margin-bottom: 10px;
		}
		#content{
			margin-bottom: 10px;
			border: 1px solid red;
		}

	</style>
</head>
<body>
	<div id="header">
		<a href="<?php echo PATH; ?>">
			<img src="<?php echo PATH.'assests/images/logo.png'; ?>" width="200px">
		</a>
		
		<a href="<?php echo PATH.'?controller=customer&action=signup'?>">Đăng ký</a> | 
		<a href="<?php echo PATH.'?controller=customer&action=signin'?>">Đăng nhập</a>
	</div>
	<div id="content">
		<?= @$content ?>
	</div>
	<div id="footer">Footer</div>
</body>
</html>






