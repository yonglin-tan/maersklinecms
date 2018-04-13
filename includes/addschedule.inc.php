<?php

if (isset($_POST['submit'])){
	
	include_once 'dbh.php';
	$ssroute = mysqli_real_escape_string($conn, $_POST['ss_route']);
	$ssdeparture = mysqli_real_escape_string($conn, $_POST['ss_departure']);
	$ssarrival = mysqli_real_escape_string($conn, $_POST['ss_arrival']);
    $ssvessel = mysqli_real_escape_string($conn, $_POST['ss_selectedvessel']);


	//Error handlers
	//Check for empty fields
	if (empty($ssroute || $ssdeparture || $ssarrival || $ssvessel )){
		header("Location: ../addschedule.php?add=empty");
		exit();
	}else{
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z\s]*$/", $ssroute)|| !preg_match("/^[0-9-]*$/", $ssdeparture) || !preg_match("/^[0-9-]*$/", $ssarrival)){
			header("Location: ../addschedule.php?add=invalid");
			exit();
		}else {
			//Check for used vessel ID
				$sql = "SELECT * FROM shippingschedule WHERE ss_vesselid = '$ssvessel'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if($resultCheck > 0){
					header("Location: ../addschedule.php?add=vesseltaken");
					exit();		
		
				}else {
					//Insert schedule into database
					$sql = "INSERT INTO shippingschedule (ss_route, ss_departure, ss_arrival, ss_vesselid) VALUES ('$ssroute', '$ssdeparture', '$ssarrival', '$ssvessel');";
					mysqli_query($conn, $sql);
					header("Location: ../addschedule.php?add=success");
					exit();
					
				}
			
		}
		
	}
	
}
else {
	header("Location: ../addschedule.php");
	exit();
}