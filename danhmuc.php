<?php 
require_once './commons/utils.php';
$id = $_GET['id'];

// 1. Kiem tra xem id danh muc co thuc su ton tai khong
$sql = "select * from " . TABLE_CATEGORY . " 
		where id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$cate = $stmt->fetch();
if(!$cate){
	header("location: $siteUrl" . "index.php");
	die;
}

// 2. lay danh sach san pham thuoc danh muc
$sql = "select * from " . TABLE_PRODUCT 
		. " where cate_id = $id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll();	

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php 
	include './_share/client_assets.php';
	 ?>

	<title>Danh mục <?= $cate['name']?></title>
</head>

<body>
	<?php 
	include './_share/header.php';
	 ?>
	<div id="product">
		<div class="container">
			<div class="tittle-product">
				<h2><?= $cate['name']?></h2>
			</div>
			<?php foreach ($products as $np): ?>
				<div class="col-sm-4 col-xs-12">
					<div class="img-height">
						<img src="<?= $siteUrl . $np['image']?>" alt="">
					</div>
					<a class="title-name"><?= $np['product_name']?></a>
					<div class="text-center">
						Giá bán <a class="">
							<strike>
								<?= $np['list_price']?>Đ
							</strike>
							</a>
						<br>
						Giá khuyến mại <a class=""><?= $np['sell_price']?>Đ</a>
					</div>

					<div class="footer-product">
						<a href="#" class="details">Xem chi tiết</a>
						<a href="#" class="buying">Mua hàng</a>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<div id="partner">
		<div class="container">
			<h2 class="title-product">Các đối tác</h2>
			<div class="partner-img col-md-3 col-xs-6">
				<img src="img/partner1.jpg" alt="">
			</div>
			<div class="partner-img col-md-3 col-xs-6">
				<img src="img/partner2.jpg" alt="">
			</div>
			<div class="partner-img col-md-3 col-xs-6">
				<img src="img/partner3.jpg" alt="">
			</div>
			<div class="partner-img col-md-3 col-xs-6">
				<img src="img/partner4.jpg" alt="">
			</div>
		</div>
	</div>
	<?php 
	include './_share/footer.php';
	 ?>
</body>

</html>
