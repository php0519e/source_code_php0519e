<?php
require("database.php");
class SinhVien{
	private $masv;
	private $hodem;
	private $ten;
	private $gioitinh;
	private $ngaysinh;
	private $noisinh;
	private $hocbong;
	private $makhoa;

	public function getAll(){
		$db = DB::getConnection();
		$sql = "SELECT * FROM tbl_SinhVien";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$rows = array();
		while($item = $stmt->fetch(PDO::FETCH_ASSOC)){
			$rows[] = $item;
		}
		return $rows;
	}

	public function addSinhVien($_ma,$_hodem,$_ten,$_makh){
		$db = DB::getConnection();
		$sql = "INSERT INTO tbl_SinhVien SET MaSV='".$_ma."',Hodem='".$_hodem."',Ten='".$_ten."',MaKH='".$_makh."'";
		
		$stmt = $db->prepare($sql);
		if($stmt->execute()==true){
			return true;
		}else{
			return false;
		}
	}

	public function updateSinhVien($_ma, $_hodem, $_ten, $_gioitinh, $_ngaysinh, $_noisinh, $_hocbong, $_makh){
		$db = DB::getConnection();

		$sql = "UPDATE tbl_SinhVien SET Hodem='".$_hodem."', Ten='".$_ten."',Gioitinh=".$_gioitinh.",Ngaysinh='".$_ngaysinh."',Noisinh='".$_noisinh."',Hocbong=$_hocbong, MaKH='".$_makh."' WHERE MaSV=$_ma";

		$stmt = $db->prepare($sql);
		if($stmt->execute()==true){
			return true;
		}else{
			return false;
		}
	}

	public function deleteSinhVien($_ma){
		$db = DB::getConnection();
		$sql = "DELETE FROM tbl_SinhVien WHERE MaSV = $_ma";
		$stmt = $db->prepare($sql);
		if($stmt->execute()==true){
			return true;
		}else{
			return false;
		}
	}
}
?>