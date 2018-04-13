<?php
	session_start();
	include_once  'includes/dbh.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="unorderedlist.css"/>
<link rel="stylesheet" type="text/css" href="font&position.css"/> 
<link rel="stylesheet" type="text/css" href="style.css"/> 
<title >Maersk Line Container Management System</title>
</head>




<body>

<header>
<div id="header">
<nav>
<div class="main-wrapper">
<ul>
	<li><a href="Adminhomepage.php" target="_blank" ><img alt="" src="maersklogo.png" style="float: left; " width="60%" height="60%"/></a></li>
</ul>

		<div class="nav-login">
			<?php
				if (isset($_SESSION['u_id'])) {
					echo '<form action="includes/logout.inc.php" method="POST">
					<button class="button button1" type="submit" name="submit">Logout</button>
				    </form>';
				}
				?>


		</div>
	</div>
</nav>
</div><!--Header-->
</header>

<div class="grad" >
<div id="wrapper">
<div class="navifont" >



<div id="innerwrapper" >
<div id="navouter" >
<ul>
  
  <li><a class="active" href="Adminhomepage.php">Home</a></li>
  <li><a class="active" href="shippingschedule.php">Shipping Schedule</a></li>
  <li><a class="active" href="vesselmaintainance.php">Vessel Maintainence</a></li>  
  <li><a class="active" href="partnerregister.php">Partner Registration</a></li>

</ul>
	
</div><!--Navrouter-->
</div><!--innerwrapper-->
</div><!--Navifont-->




<div class="whitebg" >
<h1>Current Vessels</h1>
	
	<?php

		$sql = "SELECT * FROM vessel;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			echo "<table width=80%; align=center; cellpadding=15>";
			echo "<tr><th>Vessel ID</th><th>Vessel Name</th><th>Vessel Space Available</th><th>Vessel Status</th></tr>";
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>
				<td>  {$row['vessel_id']}</td>
				<td>  {$row['vessel_name']}</td>
				<td>  {$row['vessel_spaceavailable']}</td>
				<td>  {$row['vessel_status']}</td>
				</tr>";
			}
		}
?>

<table align="center"; cellpadding=5>
	<tr>
	<td><a class="active" href="addvessel.php"><button class="button button2" type="submit" name="submit">Add Vessel</button></a><td>
	<td><a class="active" href="editvessel.php"><button class="button button2" type="submit" name="submit">Edit Vessel</button><td>
	<td><a class="active" href="deletevessel.php"><button class="button button2" type="submit" name="submit">Delete Vessel</button><td>
	</tr>
	
</table>
</div><!--whitebg-->




</div><!--grad-->
<br/><br/><br/><br/><br/><br/><br/><br/>
<!--Footer-->
<h5>
<span class="left">
<ul style="text-align: center; display: inline-block; height: 45px;margin-top: 0px ">
	<li>
	<a href="Contactus.php"><img alt="" src="Icons/locationicon.png" style="width: 25px;height: 25px"/><br/></a>
	</li>
	    
	<li><a href="Contactus.php"><img alt="" src="Icons/calendaricon.png" style="width: 25px;height: 25px"/><br/></a>
	 </li>
	  
	<li><a href="Contactus.php"><img alt="" src="Icons/contactusicon.png" style="width: 25px;height:25px"/><br/></a>
	</li>
</ul>
<br/>
&nbsp;&copy;&nbsp;2018 by The Maersk Group. All rights reserved.
</span> 



<span class="right">
<ul style="text-align: center; display: inline-block; height: 45px; margin-top: 0px  ">
	<li>
	<a href="https://www.instagram.com/maerskline/"><img alt="" src="Icons/insta logo.png" style="width: 25px;height: 25px"/><br/></a>
	</li>
	    
	<li><a href="https://www.facebook.com/MaerskLine/"><img alt="" src="Icons/fb logo.png" style="width: 25px;height: 25px"/><br/></a>
	 </li>
	  
	<li><a href="https://twitter.com/MaerskLine"><img alt="" src="Icons/twitter logo.png" style="width: 25px;height:25px"/><br/></a>
	</li>
</ul>
<br/>
www.maersk.com | my.maerskline.com</span>
</h5>




</div>



</body>
</html>