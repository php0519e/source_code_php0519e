<?php
//Khai báo 1 mảng chứa các controller và action tương ứng hoạt động trong mô hình
$controllers = array(
	'product'	=> ['index','detail'],
	'page'		=> ['index', 'error'],
	'customer'	=> ['signup','signin','profile','ordermanagement','proccess_signup','proccess_signin','signout'],
	'admin'		=> ['index','login']
);

// echo "<pre>";
// print_r($controllers);

//Kiểm tra sự tồn tại của $controller trong mảng $controllers
if(!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])){

	$controller = "page";
	$action = "error";
}

//Gọi file tương ứng trong thư mục Controllers
include_once('controllers/'.$controller. '_controller.php');

//Đưa ra quy định đặt tên class trong file vừa gọi
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';

//Khởi tạo đối tượng có kiểu class tương ứng
$controller = new $klass;
//Gọi tới action (phương thức) trong lớp
$controller->$action();

?>








