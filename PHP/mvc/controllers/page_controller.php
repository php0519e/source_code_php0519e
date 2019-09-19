<?
require_once("controllers/base_controller.php");
class PageController extends BaseController{
	public function __construct(){
		$this->folder = "page";
		unset($_SESSION['admin_status']);
	}
	
	public function error(){
		$this->render("error");
	}
}
?>