<?php
class Base
{
	public static $x;
	public static $y;

	public static function Input($_x, $_y){
		self::$x = $_x;
		self::$y = $_y;
	}

	public static function Add(){
		return self::$x + self::$y;
	}
}

// $b = new Base();
// $b->Input(10,20);
// echo "Result: ". $b->Add();

Base::Input(10,20);
echo "Result: ". Base::Add();

//Lưu ý:
// - Lớp kiểu này thường dùng tạo ra cấu trúc lớp thư viện cho các lớp khác sử dụng mà không cần khởi tạo đối tượng
// - Phương thức truy cập tới thuộc tính static phải khai báo kiểu static
// - Truy xuất tới các thuộc tính static trong phương thức phải sử dụng từ khóa 'self'
?>













