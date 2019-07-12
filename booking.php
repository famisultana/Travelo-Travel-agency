<?php

$connect = mysqli_connect('localhost','root','','travelo');

if (!$connect) 
	{  echo "not connected"; }	


$query = "SELECT * FROM `packages`";



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
	<div class="booking" style="">

		<form class="custom-form" method="post" action="bookingdetails.php" >

			<center>
				<div style="width: 100%;">
					<img src="island.png">
					<h2>Book your perfect trip!</h2>
				</div>

				<div class="f-item">
					<input name="full_name" required="required" type="text" placeholder="Name" />
				</div>

				<div class="f-item">
					<input name="email" required="required" type="email" placeholder="Email" />
				</div> 

				<div class="f-item">
					<input name="phone" required="required" type="text" placeholder="Contact No." />
				</div>

				<div class="f-item">
					<input name="people" required="required" type="number" placeholder="No. of People" />
				</div> 

				<div style="display: grid; grid-template-columns: 50% 50%;">

					<div class="f-item">
						<select name="departure_city" required="required" >
							<option  value="">Departure City</option>
							<option  value="Abbottabad">Abbottabad</option>
							<option  value="Islamabad">Islamabad</option>
							<option  value="Lahore">Lahore</option>
							<option  value="Multan">Multan</option>
							<option  value="Muzaffarabad">Muzaffarabad</option>
							<option  value="Peshawar">Peshawar</option>
							<option  value="Rawalpindi">Rawalpindi</option>
							<option  value="Sialkot">Sialkot</option>
						</select>
					</div>
					<div class="f-item">
						<input name="check_out_date" required="required" type="date" placeholder="Departure Date" style="width: 79%; padding: 6px;">   
					</div>
					

				</div>

				<div class="f-item">
					<select name="package" required="required" style="width: 94%;"><option value="">Select Package</option>
						<?php while ($data=mysqli_fetch_assoc($object)) {
							$packagename = $data['Package_name'];
							$pkgid = $data['Package_id'];
						?>
						<option value="<?php echo "$pkgid"; ?>"><?php echo "$packagename"; ?></option>

						
					

					<?php } ?>
					</select>
				</div>

				<div class="radiogroup">
					<h3 style="margin: 5px;">Package Type</h3>
					<input type="radio" name="type" value="economy">
					<span>Economy</span><br>
					<input type="radio" name="type" value="standard">
					<span>Standard</span><br>
					<input type="radio" name="type" value="delux">
					<span>Delux</span><br>
					
				</div>


				<div class="form-buttons">
					<input type="submit" name="submit" value="Submit Query" style="background-color: #009e12">
					<input type="button" value="Cancel" onclick="window.location.href='home.php';" style="background-color: red">
				</div>

			</center>

		</form>
	</div>
</div>


<script type="text/javascript" src="projectjs.js"></script>

</body>
</html>

