<?php
$product = $data['p'];
// echo "<pre>";
// print_r($product);
foreach ($product as $key => $value) {
?>
<div class="product">
	<div class="img">
		<a href="<?php echo PATH.'?controller=product&action=detail&id='.$value['id'];?>">
		<img src="<?php echo PATH.'assests/images/'.$value['image'];?>" width="100px" height="150px">
		</a>
	</div>

	<div class="name">
		<a href="<?php echo PATH.'?controller=product&action=detail&id='.$value['id'];?>">
		<?php echo $value['productName'];?>
		</a>
	</div>

	<div class="price">
		<?php echo $value['unitPrice'];?>
	</div>
</div>
<?php
}
?>