<?php 
require_once './commons/utils.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?= $siteUrl ?>post-login.php" method="post">
		<div style="color:red;">
			<?php if (isset($_GET['msg'])): ?>
			<span><?= $_GET['msg'] ?></span>		
			<?php endif ?>	
		</div>
		<div>
			<label>Email</label>
			<input type="email" name="email">
		</div>
		<div>
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div>
			<button type="submit">Login</button>
		</div>
	</form>
</body>
</html>