<?php
	# Database Connection
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'db_ussl';
    
    $connect= mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    
    if(mysqli_connect_error($connect)){
        die('ami Sesh...'.mysqli_connect_error($connect));
    }else{
        return $connect;
        //echo 'ami parsi';
    }
	
	mysqli_close($connect);
?>
