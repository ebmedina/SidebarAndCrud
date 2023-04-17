<?php
session_start();
require_once('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM tbluseracc WHERE email = ? AND password = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$email, $password]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		$_SESSION['login'] = $email;
		echo 'Login Successfully';
	}else{
		echo 'There no user for that combo';		
	}
}else{
	echo 'There were errors while connecting to database.';
}
?>