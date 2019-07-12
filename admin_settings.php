<?php 

	session_start();

	if(!isset($_SESSION['uid']))
	{

header('location:login.php');

	}

$connect = mysqli_connect('localhost','root','','travelo');
	$query = "SELECT * FROM `admin_login`";

	$object = mysqli_query($connect,$query); 

	$data=mysqli_fetch_assoc($object);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="dashboard.css">

	</style>
</head>

<body>

	<div id="dashboard_navbar" style="position: fixed;top: 0px; z-index: 2;">   

		
		<div class="dashboard_navbar_items"><a class="back" href="dashboard.php"><span class="fas fa-long-arrow-alt-left"></span>  Back to Dashboard</a><h1>Dashboard</h1></div>
		<div class="dashboard_navbar_items">
			<img src="images/<?php echo $data['dp'] ?>" style="width: 40px;height: 40px;border-radius: 50%;margin:5px;float: left;"> 
			<h3 style="color: white; padding: 12px 0px 0px 10px;font-family: Arial; font-size: 17px;"><?php echo $data['fname'];  ?><i style="margin-left: 40px;" class="down" onclick="myFunction();" ></i></h3>
		</div>


		<div id="dropdown" class="show">
			<ul>
				<li> <a href="home.php">View Website<i class="fas fa-eye"></i></a></li>
				<li> <a href="admin_settings.php">Settings<i class="fas fa-cog"></i></a></li>
				<li> <a href="logout.php">Log Out<i class="fas fa-power-off"></i></a></li>
			</ul>
		</div>
		
	</div>


	<form action="admin_settings.php" method="post" enctype="multipart/form-data">
		<div class="set_head">
			<center><h1 class="settingsDiv " align="center" style="margin-top: 90px;">Update Your Profile</h1></center>
		</div>
		<div class="admin_settings">
			<div class="set_image settingsDiv">
			<label>
				<input style="display: none;" type="file" name="DP" accept="image/*" required="required" onchange="loadFile(event, this)">
				<center><img class="dp" src="images/<?php echo $data['dp'] ?>" id="DP"></center>
			</label>

			<center>
				<h2><?php echo $data['fname'] ?> <?php echo $data['lname'] ?></h2>
				<h3><?php echo $data['email'] ?></h3>
			</center>

		</div>

		<div class="set_form settingsDiv">
			<label>First Name</label><br>
			<input type="text" name="FirstName" required="required"><br>
			<label>Last Name</label><br>
			<input type="text" name="LastName" required="required"><br>
			<label>Email</label><br>
			<input type="email" name="Email" required="required"><br>
			<label>Old Password</label>
			<input type="password" name="OldPassword" required="required"><br>
			<label>New Password</label>
			<input type="password" name="NewPassword" required="required"><br>
			<center><input class="sub" type="submit" name="submit" value="Update"></center>
		</div>
		</div>

	</form>
	





</body>
</html>

<script type="text/javascript">



		var loadFile = function(event,id) {
			var output = document.getElementById(id.name);
			output.src = URL.createObjectURL(event.target.files[0]);
		};


		function myFunction() {
    document.getElementById("dropdown").classList.toggle('show');
}
 </script>

 
<?php 


	$connect = mysqli_connect('localhost','root','','travelo');

	if (!$connect) 
		{  echo "not connected"; }

	$id = $_SESSION['uid']; 
	$query1 = "SELECT * FROM `admin_login` WHERE `id`='$id'";
	$object = mysqli_query($connect,$query1); 
	$data=mysqli_fetch_assoc($object);

	$pass = $data['password'];



if(isset($_POST['submit']))
{
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Email = $_POST['Email'];
	$OldPassword = $_POST['OldPassword'];
	$NewPassword = $_POST['NewPassword'];
	$DP = $_FILES['DP']['name'];
	$DP_tmp = $_FILES['DP']['tmp_name'];
	

	if($OldPassword == $pass )
	{

	move_uploaded_file($DP_tmp, "images/$DP");

	$query = "UPDATE admin_login SET Password='$NewPassword', fname='$FirstName', lname='$LastName', email='$Email', dp='$DP'";

		if (mysqli_query($connect, $query)) {
			header('location:dashboard.php');
	}
	else{
		echo mysqli_error($connect);
		echo "error";
	}

	}
	else
	{

?>
		<script type="text/javascript">
			alert("Password not matched");
		</script>
<?php
	}

	

}

unset($_POST['sumbit']); 
unset($_POST['OldPassword']); 
unset($_POST['NewPassword']);  
?>
