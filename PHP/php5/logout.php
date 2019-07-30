<?php
session_start();

if(isset($_SESSION['account']) && isset($_SESSION['logged']) && $_SESSION['logged']==true){

	//Huỷ SESSION 'account'
	unset($_SESSION['account']);
	header("location:client.html");

}else{
	header("location:client.html");
}
?>