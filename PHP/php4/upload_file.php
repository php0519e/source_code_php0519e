<?php
	if(isset($_POST['submit'])){
		echo "<pre>";
		print_r($_FILES['imagefile']);
		exit();

		$images =  implode(";", $_FILES['imagefile']['name']);
		
		$tmp_name = $_FILES['imagefile']['tmp_name'];
		$name = $_FILES['imagefile']['name'];

		for($i=0 ; $i<count($name); $i++){
			move_uploaded_file($tmp_name[$i], 'images/'. $name[$i]);
		}


		//==== SINGLE FILE UPLOAD =====================
		// $name = $_FILES['imagefile']['name'];
		// $type = $_FILES['imagefile']['type'];
		// $tmp_name = $_FILES['imagefile']['tmp_name'];
		// $error = $_FILES['imagefile']['error'];
		// $size = $_FILES['imagefile']['size'];


		// $limit = 2*1024*1000;
		
		// if(($size <= $limit) && ($error==0)){
		// 	if($type == 'image/png' || $type=='image/jpeg' || $type=='image/gif'){
		// 		if(move_uploaded_file($tmp_name, 'images/'.$name)){
		// 			echo "Upload ảnh thành công.";
		// 		}else{
		// 			echo "Quá trình upload thất bại.";
		// 		}
		// 	}else{
		// 		echo "Không đúng định dạng ảnh.";
		// 	}
		// }



	}
?>