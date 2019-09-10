<?php
class DB{
	public static $db = NULL;

	public static function getConnection(){
		try{
			self::$db = new PDO("mysql:host=localhost;dbname=EcommerceDB","root","");
			self::$db->exec("SET NAMES 'utf8'");
		}catch(PDOException $e){
			echo "Quá trình kết nối CSDL có lỗi: ". $e->getMessage();
		}
		return self::$db;
	}
}
?>