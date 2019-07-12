
<?php 

$connect = mysqli_connect('localhost','root','','travelo');

if (!$connect) 
	{  echo "not connected"; }

if(isset($_POST['submit']))
{
	$name = $_POST['full_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$people = $_POST['people'];
	$departure_city = $_POST['departure_city'];
	$check_out_date = $_POST['check_out_date'];
	$package = $_POST['package'];
	$type = $_POST['type'];
	echo $type;
	

	$querypkg = "SELECT * FROM `packages` WHERE `Package_id` = '$package'" ;
	$obj = mysqli_query($connect,$querypkg);
	$pkgdetails = mysqli_fetch_assoc($obj);
	
	

	$query2 = "SELECT * FROM `options` WHERE `Package_id`='$package' AND `Type`='$type'";

	$object2 = mysqli_query($connect,$query2);

	if(!$object2)
		echo mysqli_error($object2);

	$data2 =mysqli_fetch_assoc($object2);

	$estimatePrice = $data2['Price'] * $people; 
	echo  $estimatePrice;
	if (!$connect) 
		{  echo "not connected"; }

	

	$query = "INSERT INTO `booking`(`Name`,`email`, `contact`, `person`, `DepartureCity`, `DepartureDate`, `PackageName`, `PackageType`) VALUES ('$name','$email','$phone','$people','$departure_city','$check_out_date','$package','$type')";

	if (mysqli_query($connect, $query)) {
		$last_id = mysqli_insert_id($connect);
	}
	else{
		echo mysqli_error($connect);
		echo "error";
	}

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

<div style="width: 100%; height: 100vh; position: absolute; top:0px;background-image: url(wallpaper.jpg);background-size: cover; ">
	<center>
	<table class="booking-table">
		<h1 class="booking-head">Booking Details</h1>
		<tr>
			<td class="column1">Name</td>
			<td><?php echo $name; ?></td>
		</tr>
		<tr>
			<td class="column1">Email</td>
			<td><?php echo $email; ?></td>
		</tr>
		<tr>
			<td class="column1">Contact No.</td>
			<td><?php echo "$phone"; ?></td>
		</tr>
		<tr>
			<td class="column1">No. of people</td>
			<td><?php echo "$people";?></td>
		</tr>
		<tr>
			<td class="column1">Departure City</td>
			<td><?php echo $departure_city; ?></td>
		</tr>
		<tr>
			<td class="column1">Departure Date</td>
			<td><?php echo "$check_out_date"; ?></td>
		</tr>
		<tr>
			<td class="column1">Package Name</td>
			<td><?php 
				$pkgname =$pkgdetails['Package_name'];
			echo "$pkgname"; ?></td>
		</tr>
		<tr>
			<td class="column1">Package Type</td>
			<td><?php echo "$type"; ?></td>
		</tr>
		<tr>
			<td class="column1"><?php echo $data2['Type'] ?> Price</td>
			<td><?php echo $data2['Price']; ?></td>
		</tr>
		<tr>
			<td class="column1">Estimated Price</td>
			<td>Rs.<?php echo $estimatePrice; ?></td>
		</tr>
		<tr>
			<center><td style="text-align: center; margin-right: 20px;" colspan="2">
				<button onclick="getElementById('message').style.display='block';" style="margin-right: 20px;">Confirm Booking</button>
				<a href="deletebooking.php?id=<?php echo $last_id?>"><button style="margin-left: 20px;">Cancel</button></a>
			</td>
			</center>
		</tr>
	</table>
	<div id="message" style="display: none;">
		<h3 style="color: white;">Thank You for contacting us! We will be in touch with you shortly.</h3>
		<a href="home.php"><button>Back to Home</button></a>
	</div>
</center>
</div>

</body>
</html>