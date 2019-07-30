<?php
	// setcookie("user", "ITPlus Academy", time()+60*60);
	$cart = array(
		'P001'	=> array("SP1", "1.jpg", 10, 12),
		'P002'	=> array("SP2", "2.jpg", 15, 17),
		'P003'	=> array("SP3", "3.jpg", 20, 22)
	);

	$strCart =  serialize($cart);

	setcookie("giohang", $strCart, time()+60*60);
?>