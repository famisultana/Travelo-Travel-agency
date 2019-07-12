<?php

$connect = mysqli_connect('localhost','root','','travelo');

if (!$connect) 
	{  echo "not connected"; }


	if(isset($_POST['search']))
	{
		$searchinput = $_POST['ValueToSearch'];
		$query = "SELECT * FROM `packages` WHERE `Package_name` LIKE '%".$searchinput."%'";
		unset($_POST['search']);
	}

	else{

		$query = "SELECT * FROM `packages`";
	}

$object = mysqli_query($connect,$query); 

if (!$object) 
{
	 echo "Error: ";
}

?>


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
				<li><a href="gallery.php"  class="active">Gallery</a></li>
				<li><a href="contact.php">Contact Us</a></li>
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

<div class="gallery-nav">
	
</div>

<h1 class="gallery-head" >EXPLORE THE BEAUTY OF PAK</h1>
	
<form method="post" action="gallery.php">

<div class="search-option">
	<input type="text" name="ValueToSearch" id="search" placeholder="Search by PackageName">
	<span><i class="fas fa-search"></i></span>
</div>
<input type="submit" id="search-button" name="search" style="display: none;">
</form>


	<div class="imagesDiv">
<?php 
	while($data=mysqli_fetch_assoc($object)) {

		$img1 = $data['Main_image'];
		$img2 = $data['Side_image'];
		$img3 = $data['Cover_image'];
?>
	<div class="images">
		<div>
			<img src="images/<?php echo $img1 ?>" name="imageblock" onclick="showImage(this)">
		</div>
		
		<center>
			<div id="imageblock" class="animate-zoom">
			<center>
				<img id="blockimage"> 
			</center>
			<span onclick="document.getElementById('imageblock').style.display='none'" class="close" style="right: 20px; top:8px;">&times;</span>
			</div>
		</center>
	</div>	

	<div class="images">
		<div>
			<img src="images/<?php echo $img2 ?>" name="imageblock" onclick="showImage(this)">
		</div>
		
		<center>
			<div id="imageblock" class="animate-zoom">
			<center>
				<img id="blockimage"> 
			</center>
			<span onclick="document.getElementById('imageblock').style.display='none'" class="close" style="right: 20px; top:8px;">&times;</span>
			</div>
		</center>
	</div>	

	<div class="images">
		<div>
			<img src="images/<?php echo $img3 ?>" name="imageblock" onclick="showImage(this)">
		</div>
		
		<center>
			<div id="imageblock" class="animate-zoom">
			<center>
				<img id="blockimage"> 
			</center>
			<span onclick="document.getElementById('imageblock').style.display='none'" class="close" style="right: 20px; top:8px;">&times;</span>
			</div>
		</center>
	</div>	


	<?php

}

?>
	</div>

			

	<!--Footer-->

	<?php  include("Footer.php"); ?>

	<script type="text/javascript">
	var input = document.getElementById("search");
input.addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode === 13) {
        document.getElementById("search-button").click();
    }
});

	function showImage(id){
		var image=document.getElementById(id.name);
		image.style.display="block";
		document.getElementById("blockimage").src = id.src;
}


	</script>
</body>
</html>