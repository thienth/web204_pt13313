<?php 
require_once './commons/utils.php';

$sql = "select * from " . TABLE_WEBSETTING;
$stmt = $conn->prepare($sql);
$stmt->execute();

$data = $stmt->fetch();

 ?>

 <div id="footer">
	<div class="container">

		<div class="col-md-8">
			<?= $data['map']?>
		</div>
		<div class="col-md-4 footer-main">
			<div>
				<label>Gmail:</label>
				<a href="#"><?= $data['email']?></a>
			</div>
			<div>
				<label>Số điện thoại:</label>
				<a href="#"><?= $data['hotline']?></a>
			</div>
			<div>
				<label>Giờ làm việc:</label>
				<a href="#">8h30-17h</a>
			</div>
			<div>
				<label>Facebook:</label>
				<a href="#"><?= $data['fb']?></a>
			</div>
		</div>
	</div>
</div>