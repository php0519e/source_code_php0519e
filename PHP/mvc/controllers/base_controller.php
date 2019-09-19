<?php
class BaseController
{
	protected $folder;

	protected function render($file, $data = array()){
		$view_file = 'views/'. $this->folder. '/'. $file. '.php';
		//Kiem tra su ton tai cua file hay khong
		if(is_file($view_file)){
			extract($data);
			ob_start();
			require_once($view_file);
			$content = ob_get_clean();

			if(isset($_SESSION['admin_status'])){
				require_once('views/layout/template_admin.php');
			}else{
				unset($_SESSION['admin_status']);
				require_once('views/layout/template_user.php');
				
			}
			
		}else{
			header("location:?controller=page&action=error");
		}
	}
}
?>