<?php

require_once 'config.php';

session_start();
if(isset($_SESSION['userlogin'])) {
	echo "<script>location.replace('mainpage.php')</script>";
	die();
}

if(isset($_POST['login'])){

   
   $result = $conn->query("SELECT *, COUNT(id) AS num FROM tbluseracc WHERE email = '{$_POST['email']}' LIMIT 1")->fetch_assoc();

   if($result['num'] > 0 ){
		if(password_verify($_POST['password'], $result['password'])) {
			echo "<script>alert('Successfull Login');</script>";
			$_SESSION['userlogin'] = $result;
			echo "<script>location.replace('mainpage.php')</script>";
			die();
		}
		else {
			echo "<script>alert('Incorrect email or password');</script>";
		}
   }else{
      echo "<script>alert('Incorrect email or password');</script>";
   }
} else if(isset($_POST['sign-up'])){
	
	$result = $conn->query("SELECT COUNT(id) FROM user_form WHERE useremail = '{$_POST['email']}'")->fetch_row()[0];
 
 
	if($result > 0){
	   echo "<script>alert('User already exist');</script>";
 
	}else{
		
	  $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
	  $conn->query("INSERT INTO user_form(useremail, userpassword, username) 
	  VALUES('{$_POST['email']}','{$_POST['password']}','{$_POST['name']}')") ;
	  
	  echo "<script>alert('Successfully Registered. You can now Log in');</script>";
	}
 
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg py-2 sticky-top navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            
            <span>SweeetBee</span>
          </a>
          
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">       
          </div>
        </div>
	</nav>

    <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field">
                <input type="email" id="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password" required>
                <span></span>
                <label>Password</label>
            </div>
            
            <input type="submit" id="login" value="Login">
            <div class="signup_link">
                Don't have account? <a href="http://webtechact2.infinityfreeapp.com/Activity2/register/register.php">Sign up</a> <br>
				<a href="http://webtechact2.infinityfreeapp.com/Activity2/firstpage/firstpage.php">Home</a>
            </div>
        </form>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
	$(function(){
		$('#login').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
				var email = $('#email').val();
				var password = $('#password').val();
			}

			e.preventDefault();

			$.ajax({
				type: 'POST',
				url: 'jslogin.php',
				data:  {email: email, password: password},
				success: function(data){
					alert(data);
					if($.trim(data) === "Login Successfully"){
						setTimeout(' window.location.href =  "http://webtechact2.infinityfreeapp.com/Activity2/mainpage/mainpage.php"', 1000);
					}
				},
				error: function(data){
					alert('there were erros while doing the operation.');
				}
			});

		});
	});
</script>
</body>
</html>

<style>
	html {scroll-behavior: smooth;}

body{
    font-family: var(--sm-font);
    line-height: 1.7;
    background-color: var(--body);
}


h1,h2,h3,h4,h5,h6,
.display-4 {
    color: var(--light);
    font-weight: 700;
}


a{
    color: var(--light);
    text-decoration: none;
}

.navbar{
  box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.2);
}
.navbar .nav-link{
  font-size: 17px;
  font-weight: 700;
}

.navbar-brand{
  font-weight: 600;
  font-size: 23px;
  margin: 0px;
}
</style>