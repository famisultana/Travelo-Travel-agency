<!DOCTYPE html>
<html>
<head>
	<title>Travelo</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="icon" href="icon2.png" sizes="16x16">
</head>
<body>

	<!--Navbar-->
	<div class="navbar">
		<div class="logo">
			<img src="icon.png"/>
		</div>
		<div class="nav">
			<ul>
				<li><a href="home.php" class="active">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="packages.php">Packages</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</div>
	</div>

<div class="side-nav">
	<ul>
		<li><a href="login.php" id="log-in" class="sidenav-links" name="singin" >DASHBOARD</a></li>
		<li><a href="contact.php" id="sign-up" class="sidenav-links" name="signup">SUBMIT QUERY</a></li>
		<li><a href="booking.php" id="contact" class="sidenav-links" name="contact-us">BOOK NOW</a></li>			
	</ul>

	<div class="triangle-down"></div>
</div>

	<!--Slideshow-->
	<?php  include("slideshow.php"); ?>

	<h1 class="famousplaces"> Our Famous Places </h1>


<div class="homepackages">
	<div class="homeitems">
		<h2>Azad Kashmir</h2>
		<img src="azad-kashmir.jpg">
		<div>
			<ul>
				<li><a href="">Neelum village</a></li>
				<li><a href="">Ralwa port</a></li>
				<li><a href="">Jhelum Village</a></li>
				<li><a href="">Leepa Valley</a></li>

			</ul>
		</div>
	</div>

	<div class="homeitems">
		<h2>Balochistan</h2>
		<img src="balochistan.jpg">
		<div>
			<ul>
				<li><a href="">Hannah Lake</a></li>
				<li><a href="">Ziarat</a></li>
				<li><a href="">Wadi-e-Bolan</a></li>
				<li><a href="">Kund Malir</a></li>
			</ul>
		</div>
	</div>

	<div class="homeitems">
		<h2>Gilgit Baltistan</h2>
		<img src="gilgit.jpg">
		<div>
			<ul>
				<li><a href="">K-2</a></li>
				<li><a href="">Kargah Valley</a></li>
				<li><a href="">Naltar Valley</a></li>
			</ul>
		</div>
	</div>

	<div class="homeitems">
		<h2>KPK</h2>
		<img src="kpk.jpeg">
		<div>
			<ul>
				<li><a href="">Saif-ul-Malook</a></li>
				<li><a href="">Khansu Lake</a></li>
				<li><a href="">Nathia Gali</a></li>
				<li><a href="">Sawat valley</a></li>
			</ul>
		</div>
	</div>

	<div class="homeitems">
		<h2>Punjab</h2>
		<img src="punjab.jpeg">
		<div>
			<ul>
				<li><a href="">Badshahi Mosque</a></li>
				<li><a href="">Minaar-e-Pakistan</a></li>
				<li><a href="">Tomb of Jahangir</a></li>
				<li><a href="">Shalimar Garden</a></li>
			</ul>
		</div>
	</div>

	<div class="homeitems">
		<h2>Sindh</h2>
		<img src="sindh.jpg">
		<div>
			<ul>
				<li><a href="">Clifton</a></li>
				<li><a href="">Moen-jo-Daro</a></li>
				<li><a href="">Gorakh Hills</a></li>
				<li><a href="">Khenjar Lake</a></li>
			</ul>
		</div>
	</div>
</div>

<!--About section-->

	<div class="about">
		<h1>WHY TRAVELO</h1>
		<div class="aboutus">
			<div class="aboutItem">
				<img src="cash.png">
				<h2>Best Prices Offered</h2>
				<p>Travelo offers its customers the best packages at the best prices. We ensure that you should be getting the quality services throughout your whole trip!</p>
			</div>
			<div class="aboutItem">
				<img src="quality.png">
				<h2>Quality Accomodation</h2>
				<p>In our packages, we offer our customers with the hygienic and quality accommodation facilities well-equipped with all the necessities so that they could enjoy their trip.</p>
			</div>
			<div class="aboutItem">
				<img src="transport.png">
				<h2>Transport Facility</h2>
				<p>You are not needed to worry about the transport as our packages include the best transportation facilities for providing you with the comfortable journey during the whole trip.</p>
			</div>
			<div class="aboutItem">
				<img src="guide.jpg">
				<h2>Local Travel Guides</h2>
				<p>Enjoy the services of the local travel guide and know more about the history, culture and the importance of the different places you visit.</p>
			</div>
		</div>

	</div>



	<?php  include("Footer.php"); ?>

	<script type="text/javascript" src="projectjs.js"></script>

</body>
</html>