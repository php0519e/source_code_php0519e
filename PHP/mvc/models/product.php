<?php
class Product{
	public $id;
	public $proId;
	public $proName;
	public $unitPrice;
	public $desc;
	public $image;
	public $catId;

	public static function getAllProduct(){
		//Khởi tạo đối tượng CSDL
		$db = DB::getConnection();
		//Tạo truy vấn cho chức năng lấy toàn bộ dữ liệu
		$sql = "SELECT * FROM products";
		//Tạo đối tượng prepare
		$stmt = $db->prepare($sql);
		//Thực thi câu truy vấn
		$stmt->execute();
		$items = array();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			$items[] = $row;
		}
		return $items;
	}

	
}
?>