<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Management System</title>
	<img src="images/150.png" class="logo">
	<div class="banner-text">
		<h1>Blood Bank</h1>
		<p>Give Blood to Save a Life</p>
		<br><br><br>
		<h1>Contact us</h1>
	<link rel="stylesheet" type="text/css" href="css/h2.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<body>

	<div class="banner-btn">
		<br><br>

	<div id="sideNav">
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="abt.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="hospital1.php">Hospitals</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</nav>
	</div>
</div>
	<div id="menuBtn">
		<img src="images/menu.png" id="menu">
	</div>

	<!--Contact-->
	<section id="about">
		<div class="title-text">
  <div class=""align="center">
    <img src="images/1.jpg" ALT="some text" WIDTH=90 HEIGHT=100>
    <br><br>
<h2>Name: Shamim Ali Mullick</h2>
<h2>Email: shamim.mullick@northsouth.edu</h2>
<h2>Facebook ID: Shamim Ali</h2>
  </div>
  <br><br><br>
  <div class=""align="center">
    <img src="images/51.jpg" ALT="some text" WIDTH=90 HEIGHT=100>
    <br><br>
<h2>Name: Mohammad Mahabub A Mostafa Badhan</h2>
<h2>Email: mohammad.badhan@northsouth.edu</h2>
<h2>Facebook ID: Badhan Mostofa</h2>
  </div>
  <br><br><br>
  <div class=""align="center">
    <img src="images/50.jpg" ALT="some text" WIDTH=120 HEIGHT=100>
    <br><br>
<h2>Name: Nafeez Fuad Niladri</h2>
<h2>Email: nafeez.fuad@northsouth.edu</h2>
<h2>Facebook ID: Mohammad Neil</h2>
  </div>

      <br><br>
</div>
	</section>

	
	<script>
		var menuBtn=document.getElementById("menuBtn")
		var sideNav=document.getElementById("sideNav")
		var menu=document.getElementById("menu")

				menuBtn.onclick=function(){
					if(sideNav.style.right=="-250px"){
						sideNav.style.right="0";
						}
					else{
						sideNav.style.right="-250px";
						
					}
}
	</script>

</body>
</html>
