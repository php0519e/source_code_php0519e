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
	<link rel="stylesheet" type="text/css" href="<?php echo PATH.'assests/style/main.css';?>">
</head>
<body>
	<div id="header">
		<a href="<?php echo PATH; ?>">
			<img src="<?php echo PATH.'assests/images/logo.png'; ?>" width="200px">
		</a>
		
		<a href="<?php echo PATH.'?controller=customer&action=signup'?>">Đăng ký</a> | 
		<a href="<?php echo PATH.'?controller=customer&action=signin'?>">Đăng nhập</a>
	</div>


	<div id="menu">
		<ul>
			<?php
			//Khai bao model 'Category'
			require_once("models/category.php");
			$cat = Category::getCategoryParent();
			// echo "<pre>";
			// print_r($cat);
			foreach ($cat as $key => $value) {
			?>
				<li><a href=""><?php echo $value['categoryName'];?></a></li>
			<?php
			}
			?>
		</ul>
	</div>

	<div id="content">
		<?= @$content ?>
	</div>
	<div style="clear: both;"></div>
	<div id="footer">Footer</div>
</body>
</html>






