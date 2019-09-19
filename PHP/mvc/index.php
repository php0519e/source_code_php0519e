<?php
session_start();
require_once "database.php";
define('PATH', 'http://localhost/itplus/php0519E/mvc/');

//Xử lý và phân tích yêu cầu của người dùng trên URL
if(isset($_GET['controller'])){
	$controller = $_GET['controller'];
	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}else{
		$action = "index";
	}
}else{
	$controller = "product";
	$action = "index";
}

// echo "Controller: ". $controller. "; Action: ".$action;

require_once "route.php";
?>