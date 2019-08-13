<?php
class DB{
	//Khai báo đối tượng CSDL
	private static $conn = NULL;

	//Phương thức khởi tạo CSDL cần làm việc
	public static function getConnection(){
		self::$conn = new PDO("mysql:host=localhost;dbname=QL_SV","root","");
		self::$conn->exec("SET NAMES 'utf8'");
		return self::$conn;
	}
}
?>