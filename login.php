<?php

if(isset($_POST['signin'])){
	
	$email =$_POST['email'];
	$password =$_POST['password'];
	
	if(empty($email) || empty($password)){
		echo '<h1 align="center">Email and Password can not be empty!!</h1>';
	}else{
		# Database Connection
		include('connection.php');
		$db_connt = $connect;
		
		$sql_query="SELECT email,password FROM user WHERE email='$email' && password='$password'";
		
		$result = mysqli_query($db_connt,$sql_query);
		if($result == true){
			if(mysqli_num_rows($result) == 1){
				echo 'Logged In';
			}else{
				echo '<h1 align="center">Invalid Email or Password</h1>';
			}
		}else{
			echo 'Error: '.mysqli_error($db_connt);
		}
	}
	
}else{
	echo '<h1 align="center">Page Not Found</h1>';
}
	
?>







