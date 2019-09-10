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
		$sql = "SELECT id,productId, productName,unitPrice,image FROM products";
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

	public static function getProductById($id){
		//Khởi tạo đối tượng CSDL
		$db = DB::getConnection();
		//Tạo truy vấn cho chức năng lấy toàn bộ dữ liệu
		$sql = "SELECT * FROM products WHERE id = $id";
		//Tạo đối tượng prepare
		$stmt = $db->prepare($sql);
		//Thực thi câu truy vấn
		$stmt->execute();
		$count = $stmt->rowCount();//Tra ve so ban ghi duoc lay ra
		if($count>0){
			$item = $stmt->fetch(PDO::FETCH_ASSOC);
			return $item;
		}else{
			return null;
		}
	}
	
}
?>