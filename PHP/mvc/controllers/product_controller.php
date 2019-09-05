<?php
require_once("controllers/base_controller.php");
require_once("models/product.php");

class ProductController extends BaseController{

	public function __construct(){
		$this->folder = "product";
	}

	public function index(){
		$pro = Product::getAllProduct();
		$data = array('p'=>$pro);
		$this->render("all",$data);
	}

	public function detail(){
		$this->render("get-one");
	}
}

?>