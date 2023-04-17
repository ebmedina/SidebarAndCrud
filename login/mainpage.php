<?php 

session_start();

	if(!isset($_SESSION['login'])){
		header("http://localhost/Final-Act2/mainpage/mainpage.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("http://localhost/Final-Act2/login/login.php");
	}

?>
<p>Welcome to index</p>
<a href="index.php?logout=true">Logout</a>