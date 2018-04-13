<?php

if (isset($_POST['submit'])){
	
	include_once 'dbh.php';
	$bid = mysqli_real_escape_string($conn, $_POST['bid']);
	$iid = mysqli_real_escape_string($conn, $_POST['iid']);
	$iname = mysqli_real_escape_string($conn, $_POST['iname']);
	$idesc = mysqli_real_escape_string($conn, $_POST['idesc']);
	$iweight = mysqli_real_escape_string($conn, $_POST['iweight']);
	$iremarks = mysqli_real_escape_string($conn, $_POST['iremarks']);

	
	//Error handlers
	//Check for empty fields
	if (empty($iname || $idesc || $iweight)){
		header("Location: ../itemedit.php?edit=empty");
		exit();
	}else{
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z0-9\s]*$/", $iname) || !preg_match("/^[a-zA-Z0-9\s]*$/", $idesc) || !preg_match("/^(0|[1-9]\d*)(\.\d+)?$/", $iweight) || !preg_match("/^[a-zA-Z0-9\s]*$/", $iremarks)){
			header("Location: ../itemedit.php?edit=invalid");
			exit();
		}else {
			
				$sql = "UPDATE items SET item_name= '$iname', item_desc= '$idesc', item_weight= '$iweight', item_remarks= '$iremarks' WHERE item_id = '$iid';";
				mysqli_query($conn, $sql);
					header("Location: ../itemedit.php?edit=success");
					exit();
					
				}
			
		}
		
	}
	

else {
	header("Location: ../itemedit.php");
	exit();
}