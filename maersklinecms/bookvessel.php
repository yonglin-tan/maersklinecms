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
	<li><a href="Agenthomepage.php" target="_blank" ><img alt="" src="maersklogo.png" style="float: left; " width="60%" height="60%"/></a></li>
</ul>

		<div class="nav-login">
			<?php
				if (isset($_SESSION['u_id'])) {
					echo '<form action="includes/logout.inc.php" method="POST">
					<button class="button button1" type="submit" name="submit">Logout</button>
				    </form>';
				} else {
					echo '<form action= "includes/login.inc.php" method="POST">
				<input type="text" name="uid" placeholder="username/e-mail">
				<input type="password" name="pwd" placeholder="password">
				<button class="button button1" type="submit" name="submit">Login</button>
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
  
  <li><a class="active" href="Agenthomepage.php">Home</a></li>
  <li><a class="active" href="register.php">Register Customer</a></li>   
  <li><a class="active" href="bookvessel.php">Book Vessel</a></li>
  <li><a class="active" href="itemmaintainance.php">Item Maintainance</a></li>  
</ul>
	
</div><!--Navrouter-->
</div><!--innerwrapper-->
</div><!--Navifont-->




<br/>

<div class="whitebg" >
<h1>Current Vessels Available based on Schedule</h1>
	
	<?php
	
		$currentagent = $_SESSION['u_id'];
		$sql = "SELECT ss_id, ss_route, ss_departure, ss_arrival, ss_vesselid, vessel_name, vessel_spaceavailable FROM shippingschedule INNER JOIN vessel ON 
		shippingschedule.ss_vesselid = vessel.vessel_id where vessel.vessel_spaceavailable > 0 AND vessel.vessel_status = 'Available';";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			echo "<table width=80%; align=center>";
			echo "<tr><th >Schedule ID</th><th>Vessel ID</th><th>Departure</th><th>Arrival</th><th>Space Available</th><th>Booking Space</th><th>Customer ID</th></tr>";
			while($row = mysqli_fetch_assoc($result)) {
				echo'
				<form action="includes/bookvessel.inc.php" method="POST">
				<tr>
				<input type="hidden" name="booked_by" value='.$currentagent.'>
				<td><input type="text" name="ssid" value="'.$row['ss_id'].'" readonly>  </td>
				<td><input type="text" name="ssvid" value="'.$row['ss_vesselid'].'" readonly></td>
				<td><input type="text" name="ssdept" value="'.$row['ss_departure'].'" readonly></td>
				<td><input type="text" name="ssarrival" value="'.$row['ss_arrival'].'" readonly></td>
				<td><input type="text" name="vspace" value="'.$row['vessel_spaceavailable'].'" readonly></td>
				<td><input type="text" name="booked_space" placeholder="Num of days to book" ></td>
				<td><select type="text" name="user_id" required>
				<option value="" disabled selected>Select Customer ID</option>';

					$sql = "SELECT user_id FROM users where user_type='Customer';";
					$result = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($result)) {
					echo '<option value="'.$row['user_id'].'">'.$row['user_id'].'</option>';
					}

				echo'</select></td><br><br>
				<td><button class="button button2" type="submit" name="submit">Book</button></td>
				</tr>
				</form>';
				
			}
		}
?>
<table></table>

</div><!--whitebg-->
<br/><br/><br/><br/><br/><br/>

<div class="whitebg" >
<h1>Current Bookings</h1>
<table>	
	<?php
		$currentagent = $_SESSION['u_id'];
		$sql = "SELECT * FROM bookings where booked_by = '$currentagent';";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			echo "<table width=50%; align=center; cellpadding=15>";
			echo "<tr><th>Booking ID</th><th>Vessel ID</th><th>Booked Space</th><th>Customer ID</th></tr>";
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>
				<td>  {$row['booking_id']}</td>
				<td>  {$row['vessel_id']}</td>
				<td>  {$row['booked_space']}</td>
				<td>  {$row['user_id']}</td>
				</tr>";
				
			
			}
		}else
			echo "No bookings made yet!";
?>
</table><br>

<table align="center"; cellpadding=5>
	<tr>
	<td><a class="active" href="itemregistration.php"><button class="button button2" type="submit" name="submit">Add Item</button></a><td>
	<td><a class="active" href="itemedit.php"><button class="button button2" type="submit" name="submit">Edit Item</button><td>
	<td><a class="active" href="itemdelete.php"><button class="button button2" type="submit" name="submit">Delete Item</button><td>
	</tr>
	
</table>
</div><!--whitebg-->
<br/><br/><br/><br/><br/>



</div><!--wrapper-->

</div><!--grad-->

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








