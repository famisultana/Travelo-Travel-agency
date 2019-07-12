
<!DOCTYPE html>
<html>
<head>
	<title>Travelo</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>


	<!--Navbar-->
	<div class="navbar">
		<div class="logo">
			<img src="icon.png"/>
		</div>
		<div class="nav">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="packages.php">Packages</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="contact.php" class="active">Contact Us</a></li>
			</ul>
		</div>
	</div>

<div class="side-nav">
	<ul>
		<li><a href="login.php" class="sidenav-links" >DASHBOARD</a></li>
		<li><a href="contact.php" class="sidenav-links" >SUBMIT QUERY</a></li>
		<li><a href="booking.php" class="sidenav-links" >BOOK NOW</a></li>			
	</ul>
	<div class="triangle-down"></div>
</div>

	<div>
		<img src="contact.png" style="width: 100%; height: 220px;">
	</div>



	<div class="contact-us">
		<div class="contactItem">
			<center>
				<form id="contact" class="contactForm" action="insert.php" method="post">
								<h2 style="text-align: left; margin: 5px;">Get in Touch</h2>
								<hr style="border: 1px solid #f1f1f1;">

								<div class="inputs">
									<br>

									<label for="name"><b>Name</b></label>
									<input type="text" placeholder="Your Name" name="name" required> <br>
									<label for="email"><b>Email</b></label>
									<input type="email" placeholder="Enter Email" name="email" required> <br>
									<label for="contact"><b>Contact No.</b></label>
									<input type="text" placeholder="Your personal no." name="contact" required> <br>
									<label for="address"><b>Address</b></label>
									<input type="text" placeholder="Your Address" name="address" required> <br>
									<label for="message"><b>Your Message</b></label>
									<textarea style="padding: 5px;" name="message" placeholder="Your Message here" required></textarea>
									
								</div>

								<div>
									<button type="reset" class="cancelbtn buttons">Reset</button>
									<button type="submit" class="signupbtn buttons">Submit</button>
								</div>
							
	</form>
			</center>
		</div>

		<div class="contactItem contactItem2">
			<div style="height: 285px; padding: 10px; box-shadow: -2px -2px 20px 5px #a4a4a473;">
				<h2>Location</h2>
				<hr style="border: 1px solid #f1f1f1;">
				<center><img src="map.png"></center>
			</div>
			<div class="address">
				<h2>Address</h2>
				<hr style="border: 1px solid #f1f1f1;">

				<table>
					<tr>
						<td><i class="fas fa-phone"></i> Telephone:</td>
						<td>+92-334-1234567</td>
					</tr>
					<tr>
						<td><i class="fas fa-at"></i> Email:</td>
						<td>info@travelo.com</td>
					</tr>
					<tr>
						<td><i class="fas fa-globe-asia"></i> Website: </td>
						<td>www.travelopak.com</td>
					</tr>
					<tr>
						<td><i class="fas fa-map-marker-alt"></i> Address: </td>
						<td>DHA Phase 4, Karachi</td>
					</tr>
				</table>
			</div>
		</div>

	</div>
	

	<!--Footer-->

	<?php  include("Footer.php"); ?>

	<script type="text/javascript" src="projectjs.js"></script>
</body>
</html>
