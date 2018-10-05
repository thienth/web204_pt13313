<?php 
require_once './commons/utils.php';

$sql = "select * from " . TABLE_WEBSETTING;
$stmt = $conn->prepare($sql);
$stmt->execute();

$data = $stmt->fetch();

// var_dump($data);
$sqlCates = "select * from " . TABLE_CATEGORY;

$stmt = $conn->prepare($sqlCates);
$stmt->execute();

$dataCate = $stmt->fetchAll();


 ?>
<div id="header">
	<div class="container">
		<div class="col-md-2 col-xs-12 col-sm-4">
			<a href="index.html">
				<img src="<?= $siteUrl . $data['logo'] ?>" alt="logo">
			</a>
		</div>
		<div class="col-md-10 col-xs-12 col-sm-8">
			<div class="header-time col-md-12 col-xs-12 col-sm-12">
				<a href="#" class="col-xs-12 col-md-4">Thời gian làm việc:8h30-17h</a>
				<a href="#" class="col-xs-12 col-md-3">Hotline: <?= $data['hotline'] ?></a>
			</div>
			<div class="clear-fix"></div>
			<div class="header-menu col-md-12">
				<ul class="nav navbar-nav">
					<li>
						<a href="<?= $siteUrl?>">Trang chủ</a>
					</li>
					<li>
						<a href="<?= $siteUrl?>gioithieu.php">Giới thiệu</a>
					</li>
					<!-- Danh sach danh muc -->
					<?php foreach ($dataCate as $c): ?>
						<li>
							<a href="danhmuc.php?id=<?= $c['id']?>"><?= $c['name']?></a>
						</li>
					<?php endforeach ?>
						<li>
							<a href="<?= $siteUrl?>lienhe.php">Liên hệ</a>
						</li>
					</ul>
					<!-- <form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control search" placeholder="Từ khóa">
						</div>
						<button type="submit" class="btn btn-info">Tìm kiếm</button>
					</form> -->
				</div>
			</div>
		</div>
	</div>