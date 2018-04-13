<?php
	session_start();
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
	<li><a href="index.php" target="_blank" ><img alt="" src="maersklogo.png" style="float: left; " width="60%" height="60%"/></a></li>
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
  
  <li><a class="active" href="index.php">Home</a></li>

    
  <li><a class="active" href="About.php">About</a></li>
  <li class="dropdown">
      <a href="Solutions.php" class="dropbtn">Solutions</a>
    	<div class="dropdown-content">
      		<a href="Drycargo.php">Dry Cargo</a>
      		<a href="Refrigeratedcargo.php">Refrigerated Cargo</a>
      		<a href="Specialcargo.php">Special Cargo</a>
   		</div>
  </li>
  <li><a href="Contactus.php">Contact Us</a></li>
</ul>
	
</div><!--Navrouter-->
</div><!--innerwrapper-->
</div><!--Navifont-->




<br/>

<div class="center" >

<h1>Email your local office</h1>
<br/>


<p>f you want to speak to a sales person about a new shipment or if you have a question about your 
existing shipment, you can email us and we will respond within the next two days. If you have a more 
immediate question, you can search for help online.</p>
<br/><br/>

<h2>Our offices are located at:</h2>
<h3>Subang Jaya, Selangor (Main Office)</h3>
<h3>Kuching, Sarawak</h3>
<h3>Kuantan</h3>
<h3>Penang</h3>
<h3>Bintulu, Sarawak</h3>
<h3>Kota Kinabalu, Sabah</h3>
<h3>Johor Bahru</h3>


<br/><br/><br/><br/><br/><br/><br/>



</div><!--wrapper-->
</div><!--grad-->
<br/>
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








