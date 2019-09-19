<?php
class Customer
{
	public static function checkSignin($u, $p){
		$db = DB::getConnection();
		$sql = "SELECT username, password FROM customers WHERE username=? AND password=?";
		$stmt = $db->prepare($sql);

		$stmt->bindParam(1,$u);
		$stmt->bindParam(2,$p);
		
		$stmt->execute();
		
		if($stmt->rowCount()>0){
			return 1;
		}else{
			return 0;
		}
	}

}
?>