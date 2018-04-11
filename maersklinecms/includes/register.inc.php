<?php

if (isset($_POST['submit'])){
	
	include_once 'dbh.php';
	
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	
	//Error handlers
	//Check for empty fields
	if (empty($first || $last || $email)){
		header("Location: ../register.php?register=empty");
		exit();
	}else{
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
			header("Location: ../register.php?register=invalid");
			exit();
		}else {
			//Check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../register.php?register=email");
				exit();				
			}else {

					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd, user_type) VALUES ('$first', '$last', '$email', 'null', 'null', 'Customer');";
					mysqli_query($conn, $sql);
					header("Location: ../register.php?register=success");
					exit();
					
				}
			}
		}
		
	
	
}else {
	header("Location: ../register.php");
	exit();
}