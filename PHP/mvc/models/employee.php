<?php
class Employee
{
	public static function checkLogin($u, $p){
		$db = DB::getConnection();
		$sql = "SELECT email, password FROM employees WHERE email=? AND password=?";
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