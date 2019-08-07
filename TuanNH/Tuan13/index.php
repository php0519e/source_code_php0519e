<!DOCTYPE html>
<html>
<head>
	<title>Tuan 13 - PHP</title>
</head>
<body>
	<?php 
		$name = "Nguyen Hoang Tuan";
		$number1 = 2.1;
		$number2 = 2356;
		$check = true;

		echo "Ho ten: " . $name . " - type: " . gettype($name) . "<br>";
		echo "So 1: " . $number1 . " - type: " . gettype($number1) . "<br>";
		echo "So 2: " . $number2 . " - type: " . gettype($number2) . "<br>";
		echo "Kiem tra bien Check - type: " . gettype($check) . "<br>";
		
		settype($number1, "integer");
		echo "Settype: " . $number1;
	?>
</body>
</html>