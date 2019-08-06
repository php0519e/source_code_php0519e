<?php
class HangHoa{
	//Khai báo các thuộc tính cho thực thể 'HangHoa'
	private $ma_hanghoa;
	private $ten;
	private $soluong;
	private $gia;
	private $ma_danhmuc;

	public function __construct($ma_h="P1", $t="A", $s=1, $g=10, $ma_d=1){
		$this->ma_hanghoa = $ma_h;
		$this->ten = $t;
		$this->soluong = $s;
		$this->gia = $g;
		$this->ma_danhmuc = $ma_d;
	}

	public function hienThiHangHoa(){
		echo "<br>-- THÔNG TIN HÀNG HOÁ -- <br>";
		echo "Mã hàng hoá: ". $this->ma_hanghoa;
		echo "<br>Tên hàng hoá: ". $this->ten;
		echo "<br>Số lượng hàng hoá: ". $this->soluong;
		echo "<br>Giá trị hàng hoá: ". $this->gia;
		echo "<br>Có mã danh mục: ". $this->ma_danhmuc;
	}
	
	//Tạo ra các phương thức đại diện cho các hành vi trên thực thể 'HangHoa'
	
	// public function nhapHangHoa($ma_h, $t, $s, $g, $ma_d){
	// 	$this->ma_hanghoa = $ma_h;
	// 	$this->ten = $t;
	// 	$this->soluong = $s;
	// 	$this->gia = $g;
	// 	$this->ma_danhmuc = $ma_d;
	// }

}
?>