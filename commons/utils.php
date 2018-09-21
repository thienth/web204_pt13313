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

define('TABLE_CATEGORY', 'categories');
define('TABLE_SLIDESHOW', 'slideshows');
define('TABLE_PRODUCT', 'products');
define('TABLE_WEBSETTING', 'web_settings');
define('TABLE_COMMENT', 'comments');



 ?>