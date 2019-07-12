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

			$name = $data['Package_name'];
			$province = $data['Province'];
			$price = $data['Price'];
			$dyk = $data['Info'];
			$note = $data['Note'];
			$overview = $data['Overview'];
			$main_image = $data['Main_image'];
			$cover_image = $data['Cover_image'];
			$dyk_image = $data['Side_image'];
			$itinerary = $data['itinerary'];
			$id= $data['Package_id'];

$data2=mysqli_fetch_assoc($object2);


?>



	<!DOCTYPE html>
<html>
<head>
	<title>DashBoard</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>

		<?php include("adminNavbar.php"); ?>

		<form class="dashboard_items dashboard2 insert" action="updatemessage.php?id=<?php echo "$id" ?>" method="post" enctype="multipart/form-data" style="width: 100% !important;">
			<div>
				<center><h1 style="mtext-align: center; margin-top: 60px;font-variant: small-caps;font-family: Arial;">UPDATE PACKAGE</h1>	</center>
				<center>
					<label for="name">Package Name</label>
					<input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter Package Name" style="width: 78%; margin: 10px; padding: 5px;">
				</center>
			</div>
			<div class="item1 mainItems">
				<div class="divItems">
					<h2 style="text-align: center;">Cover Image</h2>
					<label>
						<input style="display: none;" type="file" name="main_img" accept="image/*" onchange="loadFile(event, this)">
						<img src="images/<?php echo $cover_image ?>" id="main_img" style="width: 100%; height: 270px;">
					</label> 
				</div>
				<div class="divItems">
					<h2>Featured Image</h2>
					<label>
						<input style="display: none;" type="file" name="cover_img" accept="image/*" onchange="loadFile(event, this)">
						<img src="images/<?php echo $main_image ?>" id="cover_img" style="width: 100%; height: 200px;">
					</label> 
					<center>
						<label for="province"><h2>Province</h2></label>
						<select name="province" style="width: 80%; padding: 5px; margin: 5px;">
							<option>Azad Kashmir</option>
							<option>Balochistan</option>
							<option>Gilgit Baltistan</option>
							<option>KPK</option>
							<option>Punjab</option>
							<option>Sindh</option>
						</select>
					</center>
				</div>

			</div>
			<div class="mainItems item2">
				<center><h2 style="width: 96%; margin: 0px;" class="divItems">Package Option</h2>	</center>
				<div class="item3 options">
					<div class="divItems">
						<input type="text" name="economy" value="Economy" disabled="disabled">
						<center>
							<label><input style="display: none;" type="file" name="op_img1" accept="image/*" onchange="loadFile(event, this)">
								<img src=images/<?php echo $data2['Img'] ?> id="op_img1">
							</label> 
							<br>
							<div style="margin-top: 10px;">
								<label for="name">Price</label>
								<input class="price" type="number" name="price" value="<?php echo $data2['Price']; ?>">
								<p style=" margin: 5px;">*Per Person</p>
							</div>
						</center>
					</div>
					<?php $data2=mysqli_fetch_assoc($object2); ?>
					<div class="divItems">
						<input type="text" name="economy" value="Standard" disabled="disabled">
						<center>
							<label>
								<input style="display: none;" type="file" name="op_img2" accept="image/*" onchange="loadFile(event, this)">
								<img src="images/<?php echo $data2['Img'] ?>" id="op_img2">
							</label> 
							<br>
							<div style="margin-top: 10px;">
								<label for="name">Price</label>
								<input class="price" type="number" name="price2" value="<?php echo $data2['Price']; ?>">
								<p style=" margin: 5px;">*Per Person</p>
							</div>
						</center>
					</div>
					<?php $data2=mysqli_fetch_assoc($object2); ?>
					<div class="divItems">
						<input type="text" name="economy" value="Delux" disabled="disabled">
						<center>
							<label>
								<input style="display: none;" type="file" name="op_img3" accept="image/*" onchange="loadFile(event, this)">
								<img src="images/<?php echo $data2['Img'] ?>" id="op_img3">
							</label> 
							<br>
							<div style="margin-top: 10px;">
								<label for="name">Price</label>
								<input class="price" type="number" name="price3" value="<?php echo $data2['Price']; ?>">
								<p style=" margin: 5px;">*Per Person</p>
							</div>
						</center>
					</div>
				</div>
			</div>

			<div class="item4 mainItems">
				<div>
					<div class="divItems" style="height: 220px;">
						<h2>Overview</h2>
						<textarea name="overview" style="height: 160px;"><?php echo $overview; ?></textarea>
					</div>
					<div class="divItems" style="margin-top: 10px; height: 160px;">
						<h2>Note</h2>
						<textarea name="note" style="height: 90px;"><?php echo $note; ?></textarea>
					</div>
				</div>
				<div class="divItems">
					<h2>Did u know?</h2>
					<textarea name="info" placeholder="Interesting facts..." style="width: 91%; height: 150px;"><?php echo $dyk; ?></textarea>
					<label>
						<input style="display: none;" type="file" name="side_img" accept="image/*" onchange="loadFile(event, this)">
						<img src="images/<?php echo $dyk_image ?>" id="side_img" name="side_img" style="height: 180px; margin: 5px; width: 96%;">
					</label> 
				</div>
			</div>

			<div class="item6 divItems mainItems" style="margin: 0px 30px 0px 30px;">
				<h2>Itinerary</h2>
				<textarea name="itinerary" style="height: 160px;"><?php echo $itinerary ?></textarea>
			</div>

			<center>
				<div>
					<input type="submit" name="submit" value="Update Package" class="submitButton">
				</div>
			</center>
		</form>


	</div> 



	<script type="text/javascript">

		var loadFile = function(event,id) {
			var output = document.getElementById(id.name);
			output.src = URL.createObjectURL(event.target.files[0]);
		};

	</script>


</body>
</html>
