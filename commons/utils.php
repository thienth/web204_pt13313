<?php 
// Database config
$host = "127.0.0.1";
$dbname = "web204";
$dbusername ="root";
$dbpwd = "123456";
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
	$dbusername, $dbpwd);

// website base url
$siteUrl = 'http://localhost/pt13313/';

// admin site
$adminUrl = 'http://localhost/pt13313/admin/';
$adminAssetUrl = 'http://localhost/pt13313/admin/adminlte/';

define('TABLE_CATEGORY', 'categories');
define('TABLE_SLIDESHOW', 'slideshows');
define('TABLE_PRODUCT', 'products');
define('TABLE_WEBSETTING', 'web_settings');
define('TABLE_COMMENT', 'comments');

const USER_ROLES = [
	'admin' => 500,
	'member' => 1
];

function dd($var){
	echo "<pre>";
	var_dump($var);
	die;
}

function checkLogin(){
	global $siteUrl;
	if(!isset($_SESSION['login']) || $_SESSION['login'] == null){
	  header('location: '.$siteUrl . 'login.php');
	  die;
	}
}


 ?>