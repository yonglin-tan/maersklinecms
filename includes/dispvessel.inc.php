<?php

session_start();

include 'dbh.php';
	
	
		$sql = "SELECT * FROM vessel;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo $row['vessel_id']. "<br>";
			}
		}