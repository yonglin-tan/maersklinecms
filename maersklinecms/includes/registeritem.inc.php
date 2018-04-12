<?php

if (isset($_POST['submit'])){
	
	include_once 'dbh.php';
	
	$bookingid = mysqli_real_escape_string($conn, $_POST['booking_id']);
	$itemname = mysqli_real_escape_string($conn, $_POST['item_name']);
	$itemdesc = mysqli_real_escape_string($conn, $_POST['item_desc']);
	$itemweight = mysqli_real_escape_string($conn, $_POST['item_weight']);
	$itemremarks = mysqli_real_escape_string($conn, $_POST['item_remarks']);
	$currentagent = mysqli_real_escape_string($conn, $_POST['registered_by']);
	$ss_id = mysqli_real_escape_string($conn, $_POST['ss_id']);
	
	//Error handlers
	//Check for empty fields
	if (empty($itemname || $itemdesc || $itemweight)){
		header("Location: ../itemregistration.php?register=empty");
		exit();
	}else{
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z0-9\s]*$/", $itemname) || !preg_match("/^[a-zA-Z0-9\s]*$/", $itemdesc) || !preg_match("/^(0|[1-9]\d*)(\.\d+)?$/", $itemweight) || !preg_match("/^[a-zA-Z0-9\s]*$/", $itemremarks)){
			header("Location: ../itemregistration.php?register=invalid");
			exit();
		}else {
			$sql = "INSERT INTO items (booking_id, item_name, item_desc, item_weight, item_remarks, registered_by, ss_id) VALUES ('$bookingid', '$itemname', '$itemdesc', '$itemweight', '$itemremarks', '$currentagent', '$ss_id');";
			mysqli_query($conn, $sql);
			header("Location: ../itemregistration.php?register=success");
			exit();
		}
	}
	
	
	
}else {
	header("Location: ../itemregistration.php");
	exit();
}
