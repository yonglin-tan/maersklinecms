<?php

if (isset($_POST['submit'])){
	
	include_once 'dbh.php';
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$space = mysqli_real_escape_string($conn, $_POST['space']);

	
	//Error handlers
	//Check for empty fields
	if (empty($name || $space)){
		header("Location: ../addvessel.php?add=empty");
		exit();
	}else{
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z0-9\s]*$/", $name) || !preg_match("/^[0-9]*$/", $space)){
			header("Location: ../addvessel.php?add=invalid");
			exit();
		}else {
			
				$sql = "SELECT * FROM vessel WHERE vessel_name = '$name'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if($resultCheck > 0){
					header("Location: ../addvessel.php?add=usernametaken");
					exit();		
				}else {
					//Insert user into database
					$sql = "INSERT INTO vessel (vessel_name, vessel_spaceavailable, vessel_status) VALUES ('$name', '$space', 'Available');";
					mysqli_query($conn, $sql);
					header("Location: ../addvessel.php?add=success");
					exit();
					
				}
			
		}
		
	}
	
}
else {
	header("Location: ../addvessel.php");
	exit();
}