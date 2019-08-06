<?php
include("hanghoa.php");

//Khởi tạo đối tượng có kiểu 'HangHoa'
$sanpham = new HangHoa("MAP-001", "Macbook Pro 2015", 1, 32000000, "AP");

//Truy xuất vào phương thức
// $sanpham->nhapHangHoa("MAP-001", "Macbook Pro 2015", 1, 32000000, "AP");

$sanpham->hienThiHangHoa();

?>