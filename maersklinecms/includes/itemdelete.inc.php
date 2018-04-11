<?php

if (isset($_POST['submit'])){
	
	include_once 'dbh.php';
	$iid = mysqli_real_escape_string($conn, $_POST['iid']);

	
	$sql = "DELETE FROM items WHERE item_id = '$iid';";
	mysqli_query($conn, $sql);
	header("Location: ../itemdelete.php?edit=success");
	exit();			
	}
	

else {
	header("Location: ../itemdelete.php");
	exit();
}