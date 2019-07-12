<?php 

	session_start();

	if(isset($_SESSION['uid']))
	{

header('location:dashboard.php');

	}


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div id="register">
	<img class="admin-icon" src="admin.png">
	<form id="signin" class="form-display" method="post" action="login.php">
		<h1 style="margin-top:50px;">Admin Dashboard</h1>
		<p style="font-family: Arial; font-size: 20px; font-variant: small-caps; font-weight: bold;">Log in to get access</p>
		<hr style="border: 1px solid #f1f1f1;">

		<div class="inputs">
			<br>
			<label for="name"><b>Username</b></label><br>
			<input type="text" placeholder="Username" name="name" required> <br>

			<label for="psw"><b>Password</b></label><br>
			<input type="password" placeholder="Enter Password" name="psw" required> <br>

		</div>
		<label>
			<center><input class="check-box" type="checkbox" checked="checked" name="remember" style="margin: 0px; transform: scale(1.5);"> Remember me</center>
		</label>
			<div>
				<input style="background-color: green; opacity: 0.8;" type="submit" class="signupbtn buttons" name="submit" value="Sign In">
			</div>
	</form>
</div>
</body>
</html>


<?php 

						if(isset($_POST['submit']))
						{
							$username = $_POST['name'];
							$password = $_POST['psw'];

							$connect = mysqli_connect('localhost','root','','travelo');

							$query = "SELECT * FROM `admin_login` WHERE `username` = '$username' AND `password` = '$password'";

							$object = mysqli_query($connect,$query);

							$row = mysqli_num_rows($object);

							if($row < 1)
							{
								?>
									<script type="text/javascript"> alert("Username password did not match");</script>

								<?php
							}
							else{

									$data = mysqli_fetch_assoc($object);
									$id = $data['id'];

									
									$_SESSION['uid'] = $id;

										header('location:dashboard.php');

							}



						}


						 ?>