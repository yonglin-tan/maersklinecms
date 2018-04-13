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

<h1>Refrigerated Cargo</h1>
<br/>


<p>Efficient shipping of perishable commodities is vital to the growth of your business. Reliable, 
safe passage via an unbroken cold chain is essential to ensure that your goods arrive in the exact 
condition intended. That is what we do for you.</p>
<br/><br/>

<p>Having pioneered refrigerated transport since 1936, we have the knowledge, equipment and expertise 
to streamline your logistics and supply chain with optimal refrigerated transport solutions. Whether you are 
shipping fruits and vegetables, bananas, fish and seafood, meat or pharmaceuticals, we safely transport your 
goods from door to door in a sealed remote-controlled environment to ensure it arrives in perfect condition.</p>
<br/><br/>
<h2>Reasons to ship your cool cargo with us</h2>
<p>You work with a partner who understands your business</p>
<p>You get a team of reefer specialists dedicated to making your logistics flow smoothly and more efficiently</p>
<p>Our teams of specialists may not know your business as well as you do, but they understand the requirements of 
your industry’s supply chain better than anyone</p>
<p>Your cargo arrives in perfect condition</p>
<p>With our containers, your goods are boxed in from origin to destination, minimising the risk of damage and 
preventing exposure to contaminants</p>
<p>With an average age of 7.9 years – well below industry average – we give you access to the most-modern 
equipment available</p>
<p>Our more than 270,000 reefer containers feature Remote Container Management (RCM), allowing us to 
monitor temperature, humidity and ventilation settings throughout the entire journey, so 
you get better quality cargo upon arrival</p>
<p>You get unique visibility across your cold chain</p>
<p>Thanks to Remote Container Management (RCM), you get full access to reefer performance data on a single platform</p>
<p>You can better predict the quality of your cargo at destination, which means less time spent on claims and 
no ‘surprises’ when opening a container</p>
<p>You get full transparency of your cargo’s location, helping to prevent theft</p>
<p>Comprehensive data helps you to optimise your supply chain</p>
<p>Greater transparency means a better overview of deliveries for you and your customers</p>
<p>You can reach new markets, anywhere on the globe</p>

<p>Our unparalleled global network gives you fast and seamless access to markets anywhere on the globe, 
via land and sea.If your goods require it – such as bananas and avocados – we transport them in controlled 
atmosphere containers, which means they can travel farther than ever before and still arrive in perfect condition.
You can take advantage of unexpected business opportunities at short notice</p>

<p>Because your goods travel in a self-contained environment for their entire journey, you have greater 
flexibility in where you transport them to and from.You can easily change the destination of your shipment 
- even while your goods are in transit – to react to sudden changes in global markets.You take care of the environment</p>

<p>Containerised shipping reduces food wastage by keeping cargo fresh until arrival
Our new, larger fuel-efficient vessels and Quest II refrigeration technology means we offer the 
most energy-efficient transportation solutions available, reducing the carbon footprint of your supply chain</p>





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








