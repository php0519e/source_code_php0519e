<?php
require_once("controllers/base_controller.php");
/**
 * 
 */
class CustomerController extends BaseController
{
	
	public function __construct()
	{
		$this->folder = "customer";
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

	public function signin(){}

	public function profile(){}

	public function ordermanagement(){}
}
?>