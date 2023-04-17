<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="registerstyle.css">

  </head>
  <div>
    <?php
        if(isset($_POST['create'])){
            $name=$_POST['name'];
            $phonenumber=$_POST['phonenumber'];
            $email=$_POST['email'];
            $password=$_POST['password'];

            $sql = "INSERT INTO tbluseracc (name, phonenumber, email, password) values(?,?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$name, $phonenumber, $email, $password]);
            if($result){
                echo "Successfully Saved";
            }else{
                echo "There were errors while saving the data";
            }
        }
    ?>
</div>
  <body>
    
<div class="center">
      <h1>Sign Up</h1>
      <form method="post">

      <div class="txt_field">
          <input class="form-control" type="text" id="name" name="name" required>
          <span></span>
          <label for="name">Name</label>
      </div>

      <div class="txt_field">
          <input class="form-control" type="text" id="phonenumber" name="phonenumber" required>
          <span></span>
          <label for="phonenumber">Phone Number</label>
      </div>

      <div class="txt_field">
          <input class="form-control" type="email" id="email" name="email" required>
          <span></span>
          <label for="email">Email</label>
      </div>

      <div class="txt_field">
          <input class="form-control" type="password" id="password" name="password" required>
          <span></span>
          <label for="password">Password</label>
      </div>

        
        <input type="submit" name="submit" id="register" value="Sign up">
        <div class="signup_link">
          Already have an account? <a href="http://webtechact2.infinityfreeapp.com/Activity2/login/login.php">Log in</a>
        </div>
      </form>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){
        
			var name 	= $('#name').val();
			var phonenumber	= $('#phonenumber').val();
			var email 		= $('#email').val();
			var password 	= $('#password').val();
			
				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {name: name,phonenumber: phonenumber,email: email,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success',
								})
                                
							
					},
					error: function(data){
						Swal.fire({
								'title':'Errors',
								'text' : 'There were errors while saving the data.',
								'type' : 'error'
								})
					}

				});

			}else{	

			}

		});		
        	
	});
	
</script>
</body>
</html>