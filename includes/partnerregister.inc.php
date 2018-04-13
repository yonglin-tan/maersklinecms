<?php

if (isset($_POST['submit'])){
	
	include_once 'dbh.php';
	
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	//Error handlers
	//Check for empty fields
	if (empty($first || $last || $email || $uid || $pwd)){
		header("Location: ../partnerregister.php?register=empty");
		exit();
	}else{
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
			header("Location: ../partnerregister.php?register=invalid");
			exit();
		}else {
			//Check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				header("Location: ../partnerregister.php?register=email");
				exit();				
			}else {
				$sql = "SELECT * FROM users WHERE user_uid = '$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if($resultCheck > 0){
					header("Location: ../partnerregister.php?register=usernametaken");
					exit();		
				}else {
					//Hashing password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert user into database
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd, user_type) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd', 'Agent');";
					mysqli_query($conn, $sql);
					header("Location: ../partnerregister.php?register=success");
					exit();
					
				}
			}
		}
		
	}
	
}else {
	header("Location: ../partnerregister.php");
	exit();
}
