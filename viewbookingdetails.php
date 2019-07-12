<!DOCTYPE html>
<html>
<head>
	<title>Booking Details</title>
	<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
<?php include("adminNavbar.php"); ?>
<div style="min-height: 94vh;">
	
<?php  ?>

<h1 style="text-align: center; margin-top: 60px;font-variant: small-caps;font-family: Arial;border-bottom: 4px double black;margin-left: 350px; margin-right: 350px;"> Booking Details </h1>
<form method="post" action="viewbookingdetails.php">

<div class="search-option">
	<input type="text" name="ValueToSearch" id="search" placeholder="Search by PackageName">
	<span><i class="fas fa-search"></i></span>
</div>

<input type="submit" id="search-button" name="search" style="display: none;">
</form>

<h3 style="margin-left: 25px; margin-bottom: 10px; color: #444444; font-family: Arial;">Following Clients have Booked the Packages Offered by Travelo </h3>
<table class="viwbookingdetails-table">
<tr > <th >No.</th> <th>Client Name</th> <th>Email Adress</th> <th>Contact</th>  <th>Persons</th>  <th>Departure City </th>  <th> Departure Date</th> <th> Package Name </th> <th> Class</th> </tr>

<?php 

	$connect = mysqli_connect('localhost','root','','travelo');

	if(isset($_POST['search']))
	{
		$searchinput = $_POST['ValueToSearch'];
		$query = "SELECT * FROM `booking` WHERE `PackageName` LIKE '%".$searchinput."%'";
		unset($_POST['search']);
	}

	else{

		$query = "SELECT * FROM `booking`";
	}
	

	$object = mysqli_query($connect,$query); 

 		$no = 0;
		while($data=mysqli_fetch_assoc($object)) 
		{ 	
			$no++;
			$name = $data['Name'];
			$email = $data['email'];
			$contact = $data['contact'];
			$person = $data['person'];
			$DepartureCity = $data['DepartureCity'];
			$DepartureDate = $data['DepartureDate'];
			$PackageName = $data['PackageName'];
			$PackageType = $data['PackageType'];

 ?>
<tr> 
	<td><?php echo $no ?></td> 
	<td><?php echo $name ?></td> 
	<td><?php echo $email ?></td> 
	<td><?php echo $contact ?></td>  
	<td><?php echo $person ?></td>  
	<td><?php echo $DepartureCity ?></td> 
	<td><?php echo $DepartureDate ?></td> 
	<td><?php echo $PackageName ?></td> 
	<td><?php echo $PackageType ?></td> 
</tr>

<?php   } ?>

</table>


</div>

<script type="text/javascript">
	var input = document.getElementById("search");
input.addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode === 13) {
        document.getElementById("search-button").click();
    }
});
</script>

</body>
</html>