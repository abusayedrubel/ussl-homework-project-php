<?php

if(isset($_POST['registration'])){
	
    # Get data from form
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$blood = $_POST['blood'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$accept = $_POST['accept'];
    $error = '';
    
	# First Name Validation
	if(strlen($fname) < 3 || str_word_count($fname) < 1 || !preg_match('/^[-a-zA-Z. ]*$/',$fname)){
		$error .= 'First Name Must have contain one word with 3 letters <br>';
    }

    # Last Name Validation
    if(strlen($lname) < 3 || str_word_count($lname) < 1 || !preg_match('/^[-a-zA-Z. ]*$/',$lname)){
		$error .= 'Last Name Must have contain one word with 3 letters <br>';
    }
    
	# Email Address Validation
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$error .= 'Invalid Email <br>';
	}
    
    # Phone Number Validation
	if(strlen($phone) < 11 || strlen($phone) > 14 || !preg_match('/^[0-9 ]*$/',$phone)){
		$error .= 'Invalid Phone <br>';
	}
    
    # Blood Group Validation
	$bloodCollection = array('apv','anv','bpv','bnv','opv','onv','abpv','abnv');
	if(!in_array($blood,$bloodCollection)){
		$error .= 'it is not a blood group any way <br>';
	}
    
    # Gender Validation
	$genderCollection = array('m','f');
	if(!in_array($gender,$genderCollection)){
		$error .= 'We did not identify your health <br>';
	}
    
    # Password Validation
	if(strlen($password) > 5 && strlen($password) < 50){
		if($password != $cpassword ){
			$error .= 'Password & Confirm Password Does not Match <br>';
		}
		
	}else{
		$error .= 'Password Length will be in 6-50 character <br>';
	}
	
	if($error != ''){
		echo $error;
		
	}else{
		# Database Connection - it is better practise
		include('connection.php');
		$db_connt = $connect;
		
		$sql_query = "INSERT INTO user(fname, lname, email, phone, blood, gender, password) VALUES ('$fname', '$lname', '$email', '$phone', '$blood', '$gender', '$password')";
		
		if(mysqli_query($db_connt,$sql_query)){
			echo '<h3 align="center"> Data Submitted Successfully</h3>';
			header("Refresh:1; url=index.php"); # rederect to index page
		}else{
			echo '<h3 align="center">Inserting Problem '.mysqli_error($db_connt).'</h3>';
			header("Refresh:1; url=index.php"); # rederect to index page
		}
		
		mysqli_close($db_connt);
	}
}else{
	echo '<h1 align="center">Page Not Found</h1>';
}

?>







