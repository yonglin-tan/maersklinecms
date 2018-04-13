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

<h2>Regardless of your industry, your commodity, or your key markets, Maersk Line has solutions that 
offer both small and large businesses the opportunity to grow. We serve our customers 
with frequent departures on all major trade lanes and inland services for a true end-to-end experience.</h2>
<br/>

<h3>Dry cargo</h3>
<p>Dry cargo commodities - be it retail, auto or electronics parts, paper, and much more - are what we ship 
most of. But our true strength doesn't lie in our global fleet of 630 vessels or millions of containers.</p>

<h3>Refrigerated cargo</h3>
<p>Efficient shipping of perishable commodities is vital to the growth of your business. Reliable, 
safe passage via an unbroken cold chain is essential to ensure that your goods arrive in the exact 
condition intended. That is what we do for you.</p>

<h3>Special cargo</h3>
<p>At Maersk Line, we recognise that handling special cargo is different from traditional container shipping. </p>
<br/>







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








