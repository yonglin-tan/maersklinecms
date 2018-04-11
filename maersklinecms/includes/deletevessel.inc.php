<?php

if (isset($_POST['submit'])){
	
	include_once 'dbh.php';
	$vid = mysqli_real_escape_string($conn, $_POST['vid']);
	
	
	$sql = "DELETE FROM vessel WHERE vessel_id = '$vid';";
	mysqli_query($conn, $sql);
	header("Location: ../deletevessel.php?delete=success");
	exit();	
		
	}

else {
	header("Location: ../deletevessel.php");
	exit();
}