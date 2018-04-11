<?php

if (isset($_POST['submit'])){
	
	include_once 'dbh.php';
	$ss_id = mysqli_real_escape_string($conn, $_POST['ssid']);
	$ss_route = mysqli_real_escape_string($conn, $_POST['ssroute']);
	$ss_departure = mysqli_real_escape_string($conn, $_POST['ssdeparture']);
	$ss_arrival = mysqli_real_escape_string($conn, $_POST['ssarrival']);

	
	//Error handlers
	//Check for empty fields
	if (empty($ss_route || $ss_departure || $ss_arrival)){
		header("Location: ../editschedule.php?edit=empty");
		exit();
	}else{
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z\s]*$/", $ss_route)|| !preg_match("/^[0-9-]*$/", $ss_departure) || !preg_match("/^[0-9-]*$/", $ss_arrival)){
			header("Location: ../editschedule.php?edit=invalid");
			exit();
		}else {
			
				$sql = "UPDATE shippingschedule SET ss_route= '$ss_route', ss_departure= '$ss_departure', ss_arrival= '$ss_arrival' WHERE ss_id = '$ss_id';";
				mysqli_query($conn, $sql);
					header("Location: ../editschedule.php?edit=success");
					exit();
					
				}
			
		}
		
	}
	

else {
	header("Location: ../editschedule.php");
	exit();
}