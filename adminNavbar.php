
<?php $connect = mysqli_connect('localhost','root','','travelo');
	$query = "SELECT * FROM `admin_login`";

	$object = mysqli_query($connect,$query); 

	$data=mysqli_fetch_assoc($object);
 ?>




<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<div id="dashboard_navbar" style="position: fixed;top: 0px; z-index: 2;">   

		
		<div class="dashboard_navbar_items"><h1 class="dashboard-head">Admin Dashboard</h1></div>
		<div class="dashboard_navbar_items">
			<img src="images/<?php echo $data['dp'] ?>" style="width: 40px;height: 40px;border-radius: 50%;margin:5px;float: left;"> 
			<h3 style="color: white; padding: 12px 0px 0px 10px;font-family: Arial; font-size: 17px;"><?php echo $data['fname'] ?><i style="margin-left: 40px;" class="down" onclick="myFunction();" ></i></h3>
		</div>


		<div id="dropdown" class="show">
			<ul>
				<li> <a href="home.php">View Website<i class="fas fa-eye"></i></a></li>
				<li> <a href="admin_settings.php">Settings<i class="fas fa-cog"></i></a></li>
				<li> <a href="logout.php">Log Out<i class="fas fa-power-off"></i></a></li>
			</ul>
		</div>
		
	</div>



	<div id="dashboard_container">

			<!-- ye side items hain -->
		<div class="dashboard_items navbar">

			<div style="position: fixed; margin-top: 25px;">
				<center><img class="admin_img" src="images/<?php echo $data['dp'] ?>">
					<h3 style="margin-top: 0px;margin-bottom: 10px;color: white; font-family: Trebuchet MS;"><?php echo $data['fname'] ?> <?php echo $data['lname'] ?></h3>
					<span style="color:#35f1c7; font-weight:bold; font-family: Arial;">Admin</span>


				</center>
				<ul style="padding-left: 0px; width: 100%;">
					<a href="dashboard.php"><li style="border-top: 1px solid #9c9c9c4d;" name="insert" onclick="showDiv('insert')"> Insert New Package </li></a>
					<a href="view.php"><li class="side_items" name="view"   onclick="showDiv('view')"> View All Packages</li></a>
					<a href="viewbookingdetails.php"><li class="side_items" name="booking" onclick="showDiv('delete')" > Booking Details </li>
					</a>
					<a href="viewmessages.php"><li class="side_items" name="messages" onclick="showDiv('delete')" > Messages </li>
					</a>
				</ul>

			</div>

			<script type="text/javascript">
				function myFunction() {
    document.getElementById("dropdown").classList.toggle('show');
}
			</script>
		</div> 
