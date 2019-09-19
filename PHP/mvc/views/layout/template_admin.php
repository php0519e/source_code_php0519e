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

		#left-content{
			float: left;
			width: 250px;
			border: 1px solid blue;
		}
		#main-content{
			margin-left: 255px;
			border: 1px solid red;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="<?php echo PATH.'assests/style/main.css';?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div id="header">
		<a href="<?php echo PATH; ?>">
			<img src="<?php echo PATH.'assests/images/logo.png'; ?>" width="200px">
		</a>
	</div>

	<div id="content">
		<?php if(isset($_SESSION['admin'])){
			
		?>
		<script type="text/javascript">
			document.getElementById("left-content").style.display="none";
		</script>
		<div id="left-content">
			<h3>Dashboard</h3>
			<h3>Quan ly san pham</h3>
			<h3>Quan ly danh muc</h3>
			<h3>Quan ly don hang</h3>
			<h3>Quan ly khach hang</h3>
			<h3>Quan ly doanh thu</h3>
			<h3>Quan ly SlideShow</h3>
		</div>
		<?php
		}
		?>
		<div id="main-content">
			<?= @$content ?>
		</div>
	</div>

	<div style="clear: both;"></div>
	<div id="footer">Footer</div>
</body>
</html>






