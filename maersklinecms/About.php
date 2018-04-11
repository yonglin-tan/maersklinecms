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

<h1>Maersk Line Container Management System</h1>
<h3>Allowing you to dream big</h3>
<p>You have important promises to deliver to your customers. Our mission is to allow your business to thrive 
by providing reliable and stable services that link you to your key markets. We believe that shipping should 
be simple and the least of your worries. On these pages you can read how we help propel the ambition 
of customers all over the world – and connect people with opportunities.</p>
<br/>
<h3>Why Maersk Line</h3>
<p>At Maersk Line, we move more than cargo. We propel ambitions. This means that, whether you run a 
corner shop or a conglomerate, we have the expertise, global network and stability you need to drive 
your business forward.</p>
<br/>
<h3>You can ship worldwide with our global network</h3>
<p>As the world’s largest container shipping company, we move 12 million containers every year and deliver 
to every corner of the globe. Our international presence and knowledge of global trade have made us the carrier 
of choice for the world’s biggest brands and those aspiring to be. We provide end-to-end transportation to almost 
anywhere in the world. And, with 30,000 employees in 114 countries, we combine our global network with 
local expertise to increase the reliability of your deliveries, whether they travel by sea or over land.</p>
<br/>
<h3>You improve your sustainability performance</h3>
<p>As the world leader in sustainable shipping, we help reduce the environmental impact of your supply chain 
to improve your overall environmental sustainability. We have an ambitious target to reduce CO2 emissions from 
our ocean shipping by 60 percent by 2020 – we have already achieved a 43 percent reduction, so we are over halfway 
there – and are always looking for new ways to improve our, and your, environmental performance.</p>
<br/><br/><br/>







</div><!--wrapper-->
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








