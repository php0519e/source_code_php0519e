<?php
	//---- MẢNG SỐ ---------
	//Cú pháp khai báo và gán giá trị cho mảng
	$monhoc = array('CSDL','CTDL_GT','CNPM');
	//Cú pháp khai báo mảng
	$sotinchi = array();
	$sotinchi[] = 3;
	$sotinchi[] = 4;
	$sotinchi[] = 5;

	//Truy xuất tới phần tử được chỉ định trong mảng
	echo "Môn học thứ 2 là: ". $monhoc[1];
	echo "<br>Có ". $sotinchi[1]. " tín chỉ"; 
?>

<table border="1">
	<tr>
		<td>Tên môn học</td>
		<td>Số tín chỉ</td>
	</tr>
	<?php
	for($i=0; $i<count($monhoc); $i++){
	?>
	<tr>
		<td><?php echo $monhoc[$i]; ?></td>
		<td><?php echo $sotinchi[$i]; ?></td>
	</tr>
	<?php
	}
	?>
</table>

<?php
	//---- MẢNG KẾT HỢP ------
	$product = array(
		'id'		=>	'P001',
		'name'		=>	'Miru',
		'quantity'	=>	'10',
		'price'		=>	'5000'
	);

	//Thêm phần tử 'supplier' cho mảng 'product' với giá trị 'Vạn Xuân'
	$product['supplier'] = 'Vạn Xuân';

	echo $product['quantity']. " sản phẩm ". $product['name']. " có mã là ". $product['id']. ", có đơn giá ". $product['price']. "/ 1 chai. Được SX bởi: ". $product['supplier']; 
	echo "<br><hr>";

	//----- MẢNG CỦA MẢNG -------
	$products = array(
		array('P002','Lavie', 20, 6000),
		array('P003','Aquafina', 30, 7000),
		array('P002','Aqua T32', 20, 4000)
	);

	// echo "<pre>";
	// print_r($products);
	?>
	<table border="1">
		<tr><td>Mã SP</td><td>Tên SP</td><td>Giá</td><td>Số lượng</td></tr>
	<?php
	foreach($products as $key => $value){
		echo "<tr>";
		echo "<td>". $value[0]. "</td>";
		echo "<td>". $value[1]. "</td>";
		echo "<td>". $value[3]. "</td>";
		echo "<td>". $value[2]. "</td>";
		echo "</tr>";
	}
	?>
	</table>


	<?php
	//Mảng của mảng có số phần tử khác nhau
	$fluit = array(
		'mit'	=>	array('Mật', 'Giai'),
		'cam'	=>	array('Cam Vinh', 'Cam Sanh', 'Cam Cao Phong'),
		2
	);

	//Các loại cam bao gồm: Cam Cao Phong, Cam sành, Cam Vinh
	//Sắp xếp mảng $fluit['cam'] theo chiều tăng dần
	sort($fluit['cam']);
	echo "Các loại cam gồm: ". $fluit['cam'][0]. ", ". $fluit['cam'][1]. ", ". $fluit['cam'][2];

	krsort($fluit);

	echo "<pre>";
	print_r($fluit);
	?>












