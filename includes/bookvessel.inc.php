<?php

if (isset($_POST['submit'])){
	
	include_once 'dbh.php';
	$ssid = mysqli_real_escape_string($conn, $_POST['ssid']);
	$ssvid = mysqli_real_escape_string($conn, $_POST['ssvid']);
	$vspace = mysqli_real_escape_string($conn, $_POST['vspace']);
	$spacebooked = mysqli_real_escape_string($conn, $_POST['booked_space']);
	$customerid = mysqli_real_escape_string($conn, $_POST['user_id']);
	$currentagent = mysqli_real_escape_string($conn, $_POST['booked_by']);
	//Error handlers
	//Check for empty fields
if (empty($vid || $spacebooked || $customerid)){
		header("Location: ../bookvessel.php?add=empty");
		exit();
	}else{
		//Check if input characters are valid
		if (!preg_match("/^[0-9]*$/", $spacebooked)){
			header("Location: ../bookvessel.php?add=invalid+space+entered");
			exit();
		}else {
			if ($spacebooked > $vspace) {
				header("Location: ../bookvessel.php?add=invalid+space+booked");
				exit();
			}else{
				$vspace = $vspace - $spacebooked;
				$sql = "UPDATE vessel SET vessel_spaceavailable= '$vspace' WHERE vessel_id = '$ssvid';";
				$sql2 = "INSERT INTO bookings (ss_id, vessel_id, booked_space, user_id, booked_by) VALUES ('$ssid', '$ssvid', '$spacebooked', '$customerid', '$currentagent');";
				mysqli_query($conn, $sql);
				mysqli_query($conn, $sql2);
					header("Location: ../bookvessel.php?edit=success");
					exit();
					
				}
			}
		}
		
	}
	

else {
	header("Location: ../bookvessel.php");
	exit();
}
