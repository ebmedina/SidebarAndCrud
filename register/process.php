<?php
require_once('db.php');



if(isset($_POST)){

	$name 			= $_POST['name'];  
    $phonenumber	= $_POST['phonenumber'];
    $email 			= $_POST['email']; 
	$password 		= $_POST['password'];

		$sql = "INSERT INTO tbluseracc (name, phonenumber, email, password ) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name, $phonenumber, $email, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}

?>

