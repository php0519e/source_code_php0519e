<?php
require_once("controllers/base_controller.php");
require_once("models/employee.php");

class AdminController extends BaseController{

	public function __construct(){
		$this->folder = "admin";
		$_SESSION['admin_status'] = 'admin page';
	}

	public function index(){
		if(isset($_SESSION['admin']) && $_SESSION['login_admin']==true){
			$this->render("index");
		}else{
			$this->render("login");
		}	
	}

	public function login(){
		if(isset($_POST['login'])){
			$u = $_POST['user'];
			$p = $_POST['pass'];

			if(Employee::checkLogin($u,$p)==1){
				$_SESSION['admin'] = $u;
				$_SESSION['login_admin'] = true;
				$this->render('index');
			}else{
				header("location:".PATH.'?controller=admin');
			}
		}
	}

}

?>