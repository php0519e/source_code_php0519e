<!DOCTYPE html>
<html>
<head>
	<title>PHP-1</title>
</head>
<body>
	<?php
		//Khai báo biến và gán giá trị cho biến trong PHP
		// $firstname = "Thọ";
		// $lastname = "Phạm Ngọc";
		// $age = 33;
		// $gender = true;
		// $account = 1.1111111;

		//Định nghĩa một "hằng"
		// define("ADDRESS", "199 Hồ Tùng Mậu");
		// echo "Địa chỉ hiện tại: ". ADDRESS;

		// Hiển thị giá trị của 2 biến trên
		// echo 'Họ và tên: '.$lastname. $firstname;
		// echo "Kiểu dữ liệu của firstname: ". gettype($firstname);

		// if(isset($firstname)){
		// 	echo "Biến firstname có tồn tại.";
		// }else{
		// 	echo "Biến firstname không tồn tại.";
		// }

		// if(empty($lastname)){
		// 	echo "Biến lastname có giá trị rỗng.";
		// }else{
		// 	echo "Biến lastname đã có giá trị.";
		// }


		$x = 50;
		$y = 20;
		$z = 10;
		
		$max = ($x>$y) ? $x : $y;
		$max = ($max>$z) ? $max : $z;

		echo $max;


	?>
</body>
</html>



