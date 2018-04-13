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



<object width="1300px" height="800px" >

<param name="movie" value="Flash.swf"/>

<embed src="Flash.swf" width="1300px" height="800px">

</embed>

</object>






<br/>

<div class="center" >

<h1>Maersk Line Container Management System</h1>
<h3>Allowing you to dream big</h3>
<p>Every day, we help companies large and small – companies like yours – connect with key markets around the globe. 
Using our expertise in logistics and global trade, we make shipping simple and ensure that your deliveries run like clockwork.
Our industry and commodity experts work with you to design solutions that improve your efficiency, speed up your deliveries and lower your costs. 
And, to make your shipping even easier, we give you access to a range of e-business tools that allow you to manage the process online, 
from checking rates and booking shipments to tracking cargo and submitting documentation.</p>
<br/>
<h3>Wherever you need to be</h3>
<p>With the world’s largest shipping fleet and a comprehensive inland network, we provide regular and fast connections to almost anywhere on the globe. 
The result? You can connect to more customers than ever before – wherever in the world they happen to be.</p>
<br/><br/><br/>


<div class="whitebg" >
<h1>Latest News</h1>
<table style="font-size: large ;font-style: italic;font-weight: bold ">
	<tr><td><a href="" class="dropbtn" style= "color:black">&loz;&nbsp;Maersk Line launches new service between Asia and Latin America</a></td></tr>
	
	<tr><td><a href="" class="dropbtn" style= "color:black">&loz;&nbsp;Maersk Line obtains final regulatory approval and closes the acquisition of Hamburg Sud</a></td></tr>
	
	<tr><td><a href="" class="dropbtn" style= "color:black">&loz;&nbsp;Photography &amp; Maersk welcomes Hamburg Sud as deal closes</a></td></tr>
</table>
</div><!--center-->




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








