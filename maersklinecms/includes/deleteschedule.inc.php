<?php

if (isset($_POST['submit'])){
	
	include_once 'dbh.php';
	$ss_id = mysqli_real_escape_string($conn, $_POST['ssid']);
	
	
	$sql = "DELETE FROM shippingschedule WHERE ss_id = '$ss_id';";
	mysqli_query($conn, $sql);
	$sql2 = "DELETE FROM bookings WHERE ss_id = '$ss_id';";
	mysqli_query($conn, $sql2);
	header("Location: ../deleteschedule.php?delete=success");
	exit();	
		
	}

else {
	header("Location: ../deleteschedule.php");
	exit();
}
