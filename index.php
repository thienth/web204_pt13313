<?php 
// // tao ket noi den csdl
require_once './commons/utils.php';
// lay du lieu tu csdl bang products cho sp moi
$newProductsQuery = "	select * 
						from ".TABLE_PRODUCT." 
						order by id desc 
						limit 6";
$stmt = $conn->prepare($newProductsQuery);
$stmt->execute();

$newProducts = $stmt->fetchAll();

// lay du lieu tu csdl bang products cho sp xem nhieu nhat
$mostViewsQuery = "	select * 
						from ".TABLE_PRODUCT."  
						order by views desc
						limit 6";
$stmt = $conn->prepare($mostViewsQuery);
$stmt->execute();

$mostViewsProducts = $stmt->fetchAll();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php 
	include './_share/client_assets.php';
	 ?>

	<title>Trang chủ</title>
</head>

<body>
	<?php 
	include './_share/header.php';
	 ?>
	<?php 

	include './_share/slider.php';
	 ?>
	<div id="product">
		<div class="container">
			<div class="tittle-product">
				<h2>Sản phẩm mới</h2>
			</div>
			<?php foreach ($newProducts as $np): ?>
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
	<div id="hot-product">
		<div class="container">
			<div class="tittle-product">
				<h2>Sản phẩm bán chạy</h2>
			</div>

			<?php foreach ($mostViewsProducts as $np): ?>
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