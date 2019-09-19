<?php
require_once("controllers/base_controller.php");
require_once("models/customer.php");

class CustomerController extends BaseController
{
	
	public function __construct()
	{
		$this->folder = "customer";
		unset($_SESSION['admin_status']);
	}

	public function signup(){
		$this->render('signup');
	}

	public function proccess_signup(){
		if(isset($_POST['btnSignup'])){
			//Tạo ra các biến để nhận dữ liệu từ form gửi lên
			$full = $_POST['txtFullname'];
			$email = $_POST['txtEmail'];
			$pass = $_POST['txtPass'];

			$data = array(
				'f'	=>	$full,
				'e'	=>	$email,
				'p'	=>	$pass
			);
			//Hiển thị dữ liệu lấy được trên form
			$this->render('show',$data);
		}
	}

	public function signin(){
		$this->render("signin");
	}

	public function proccess_signin(){
		if(isset($_POST['signin'])){
			$u = $_POST['user'];
			$p = $_POST['pass'];

			//Kiểm tra sự tồn tại của tài khoản dưới CSDL
			if(Customer::checkSignin($u, $p)==1){
				$_SESSION['customer'] = $u;
				$_SESSION['logged_in'] = true;
				header("location:".PATH);
			}else{
				$_SESSION['message'] = "Đăng nhập thất bại";
				header("location:".PATH."?controller=customer&action=signin");
			}
		}
	}

	public function signout(){
		unset($_SESSION['customer']);
		$_SESSION['logged_in'] = false;
		header("location:".PATH);
	}

	public function profile(){}

	public function ordermanagement(){}
}
?>



