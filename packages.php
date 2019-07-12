
<?php $connect = mysqli_connect('localhost','root','','travelo');
	$query = "SELECT * FROM `packages`";

	$object = mysqli_query($connect,$query); 
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Packages</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="TourArticles.css">

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



<div class="article-head">
		<div class="color-overlay"><h1>Our Best Tour Packages</h1></div>
	</div>

		<div class="article-head2">
			<h2>Travelo's Tour Packages for Families / Couples / Students / Corporate Groups</h2>
		</div>


	<!-- ==========================Tour pakages k articles====================================== -->
<div id="tour">		

                <!-- >>>>>>>>>>>>>>>>> Article 1 <<<<<<<<<<<<<<<<<<<<<<<<< -->
<?php 
		while($data=mysqli_fetch_assoc($object)) 

		{ 	
			$name = $data['Package_name'];
			$province = $data['Province'];
			$price = $data['Price'];
			$info = $data['Info'];
			$overview = $data['Overview'];
			$main_image = $data['Main_image'];
			$id= $data['Package_id'];
 ?>
                
		<div class="frontend">			
			<div class="touritem">	
				<div class="article_image"> <img src="images/<?php echo $data['Main_image'] ?>"> </div>
				<div class="article-info">
					<div class="article_heading" style="float: left;"> <h1> <?php echo "$name" ?> </h1> <span>For Four Persons Only</span> </div>
				<div class="article_price" style="float: right;"> <h1> Rs. <?php echo "$price"?></h1> <p>For each person</p></div>
				</div>
				
			</div>

			<div class="peche_wala_kaam">				
				<div class="article_description"> 
					<h1>Inclusions</h1>
					<p style="margin-bottom: 0px; font-size: 14px; padding-left: 15px;">
					 
				</div>
				<div class="article_checklist"> 
				
					<ul>
						<div style="float: left;">
							<li> <i class="fas fa-check-circle"></i> Incl. transport</li>						
							<li> <i class="fas fa-check-circle"></i> Incl. sightseeing</li>
							<li> <i class="fas fa-check-circle"></i> Incl. fuel</li>
						</div>
						<div style="float: right; margin-right:30px;">
							<li> <i class="fas fa-check-circle"></i> Incl. accomodation</li>
							<li> <i class="fas fa-check-circle"></i> Incl. guide</li>	
						</div>
						
					</ul>
				</div>
				
				
					<div class="article_Readmore_button">
					<input type="submit" name="id" value="Read More" style="margin-top: 40px;" onclick="window.location.href='packagedetails.php?id=<?php echo "$id"; ?>'">
				</div>
				
			</div>


		</div>


<?php } ?>


	</div> <!-- -------------------main div tour wala ------------------------------  -->
<?php  include("Footer.php"); ?>


	<script type="text/javascript" src="projectjs.js"></script>

</body>
</html>