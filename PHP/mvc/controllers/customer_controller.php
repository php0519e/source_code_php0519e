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

	public function signin(){}

	public function profile(){}

	public function ordermanagement(){}
}
?>