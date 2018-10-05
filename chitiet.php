<?php 
require_once './commons/utils.php';
$id = $_GET['id'];

echo "$id";
$commentSql = "select * from " . TABLE_COMMENT
				. " where product_id = $id order by id desc";

$stmt = $conn->prepare($commentSql);
$stmt->execute();
$comments = $stmt->fetchAll();

 ?>

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
	<div id="product">
		<div class="container">
			<div class="tittle-product">
				<h2>Thông tin sản phẩm</h2>

			</div>
			
		</div>
	</div>
	<div id="hot-product">
		<div class="container">
			<div class="row">
				<h2>Phản hồi</h2>
				<div class="col-md-6">
					<form action="submit_comment.php" method="post">
						<input type="hidden" name="id" value="<?= $id?>">
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Nội dung</label>
							<textarea class="form-control" rows="5" name="content"></textarea>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-sm btn-primary">Gửi phản hồi</button>
						</div>
					</form>
				</div>
				<div class="col-md-6">
				<?php foreach ($comments as $c): ?>
					<div>
						<b><?= $c['email']?></b>
						<br>
						<p><?= $c['content']?></p>	
					</div>	
				<?php endforeach ?>
				</div>	
			</div>
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