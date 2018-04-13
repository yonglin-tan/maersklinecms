<?php

if (isset($_POST['submit'])){
	
	include_once 'dbh.php';
	$vid = mysqli_real_escape_string($conn, $_POST['vid']);
	$name = mysqli_real_escape_string($conn, $_POST['vname']);
	$space = mysqli_real_escape_string($conn, $_POST['vspace']);
	$status = mysqli_real_escape_string($conn, $_POST['vstatus']);

	
	//Error handlers
	//Check for empty fields
	if (empty($name || $space)){
		header("Location: ../editvessel.php?edit=empty");
		exit();
	}else{
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[0-9]*$/", $last)){
			header("Location: ../editvessel.php?edit=invalid");
			exit();
		}else {
			
				$sql = "UPDATE vessel SET vessel_name= '$name', vessel_spaceavailable= '$space', vessel_status= '$status' WHERE vessel_id = '$vid';";
				mysqli_query($conn, $sql);
					header("Location: ../editvessel.php?edit=success");
					exit();
					
				}
			
		}
		
	}
	

else {
	header("Location: ../editvessel.php");
	exit();
}