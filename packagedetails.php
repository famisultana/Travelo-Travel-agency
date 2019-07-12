<?php

$connect = mysqli_connect('localhost','root','','travelo');

if (!$connect) 
	{  echo "not connected"; }



	$idofpackage=$_GET['id'];


$query = "SELECT * FROM `packages` where Package_id='$idofpackage'";
$query2 = "SELECT * FROM `options` where Package_id='$idofpackage'";

$object = mysqli_query($connect,$query); 

$object2 = mysqli_query($connect,$query2); 

if (!$object && !$object2) 
{
	 echo "Error: ";
}

$data=mysqli_fetch_assoc($object);
$data2=mysqli_fetch_assoc($object2);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Travelo</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
	<div class="navbar">
		<div class="logo">
			<img src="icon.png"/>
		</div>
		<div class="nav">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="packages.php"  class="active">Packages</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="contact.php" >Contact Us</a></li>
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


	<h2 class="packageheading"><?php echo $data['Package_name'] ?></h2>
	<div class="packagedetails">
		<div class="item1">
			<div class="packageitem image">
				<img width="100%;" src="images/<?php echo $data['Cover_image'] ?>" >
			</div>

			<div class="item3">
				<div class="item4">
					<div class="packageitem sidenav">
						<ul>
							<li class="navoptions"><button class="buttons options activeButton" name="packageoption" onclick="currentDiv(1)"><i class="fas fa-thumbs-up"></i> Package Options</button></li>
							<li class="navoptions"><button class="buttons " name="packageoverview" onclick="currentDiv(2)"><i class="fas fa-search"></i> Package Overview</button></li>
							<li class="navoptions"><button class="buttons " name="packageinclusion" onclick="currentDiv(3)"><i class="fas fa-star"></i> Inclusions</button></li>
							<li class="navoptions"><button class="buttons " name="packageitrinerary" onclick="currentDiv(4)"><i class="fas fa-clipboard-list"></i> Itinerary</button></li>
							<li class="navoptions"><button class="buttons " name="packagemap" onclick="currentDiv(5)"><i class="fas fa-map-marker-alt"></i> Map</button></li>							
						</ul>
					</div>

					<div class="packageitem maketrip">
						<div class="sidebar">
							<h3>Why Book with Us?</h3>
							<h4>Low Rates</h4>
							<p>Get the best rates, or get a refund.
							No booking fees. Save money!</p>

							<h4>Largest Selection</h4>
							<p>150,000+ hotels worldwide
								100+ Pakistani Hotels
							Online booking in 13 cities & 6 summer destinations</p>

							<h4>We're Always Here</h4>
							<p>Call us from 9 AM to 5 PM
								Get 24-hour support before, during, and after your trip through email
								<br>
							E: info@tourplanner.pk</p>
						</div>
					</div>
				</div>

				<div class="item5">
					<?php  include("option.php"); ?>
					<?php  include("overview.php"); ?>
					<?php  include("inclusions.php"); ?>
					<?php  include("itrinerary.php"); ?>
					<?php  include("map.php"); ?>
				</div>
			

			</div>
		</div>

		<div class="item2">
			<div class="packageitem information">
				<h3>Did you know?</h3>
				<p  class="info"><?php echo $data['Info'] ?>
				<img style="width: 100%; height: 160px; margin-top: 10px;" src="images/<?php echo $data['Side_image'] ?>">
				<br>
				<a href="booking.php"><button class="infobutton book">Book Now</button></a>
				<a href="contact.php"><button class="infobutton query">Contact Us</button></a>

			</div>
			<div class="packageitem reviews">
				<h3>Facebook Reviews</h3>
				<div class="review review1">
					<h4>Muhammad Faraz</h4>
					<div class="rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
					<p>
						I had a fair experience for a trip to Naran & Kaghan, they need a coordination of client with the hotel management. A part from this, rest of the trip was ok.
					</p>
				</div>

				<div class="review review1">
					<h4>Hassan Raza</h4>
					<div class="rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
					</div>
					<p>
					Excellent skilful driver/tour guide and car. Very nice hotels with kind and well-mannered staff, hot water availability and wifi where possible. It was a nice trip. </p>
				</div>

				<div class="review review1">
					<h4>Fatima Sultana</h4>
					<div class="rating">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
					</div>
					<p>It was such an amazing experience. Travelo provided us great services and accommodations in a reasonable prices. Inshallah we will plan a next tour with them soon. Thanks.
					</p>
				</div>
			</div>
			<div class="packageitem contact">
				<h3>Need help Booking?</h3>
				<p>Call our customer services team on the number below and speak to one of our advisors who will help you with your holiday needs.</p>
				<div><i class="fas fa-phone"></i>  +92-334-1234567
					<br><br>
					<i class="fas fa-at"></i> info@travelo.com
				</div>
			</div>
		</div>
		
	</div>
	<?php  include("Footer.php"); ?>
	<script type="text/javascript" src="projectjs.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
	
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
</body>
</html>