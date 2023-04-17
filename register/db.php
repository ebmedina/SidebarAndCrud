<?php 

$db_server = "sql104.epizy.com";
$db_user = "epiz_33834484";
$db_pass = "SZ1i9OztOR";
$db_name = "epiz_33834484_user";  

$db = new PDO('mysql:host=sql104.epizy.com;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);?>