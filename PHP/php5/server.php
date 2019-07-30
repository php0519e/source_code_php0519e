<?php
//Khởi động SESSION CỦA SERVER
session_start();

//Kiểm tra hành động gửi dữ liệu có phải được gửi từ 'client.html' hay không
if(isset($_REQUEST['btnLogin'])){
	//Nhận dữ liệu được gửi từ 'client.html' lên
	$user = $_REQUEST['txtUser'];
	$pass = $_REQUEST['txtPass'];

	// echo "Tên đăng nhập: ". $user. "; Mật khẩu: ".$pass;
	//Kiểm tra sự tồn tại của của tài khoản trong CSDL
	$account = array(
		'admin'		=>	'123456',
		'customer'	=>	'123',
		'manager'	=>	'1234'
	);

	$status = 0;
	foreach ($account as $key => $value) {
		if($user == $key && $pass == $value){
			$status = 1;
			break;
		}else{
			$status = 0;
		}
	}

	if($status == 1){
		//Tạo phiên làm việc cho tài khoản hiện tại
		$_SESSION['account'] = $user;
		$_SESSION['logged'] = true;
		header("location:profile.php");

	}else{
		$_SESSION['logged'] = false;

		header("location:client.html");
	}

}else{
	//Điều hướng request quay trở về 'client.html'
	header("location:client.html");
}
?>



