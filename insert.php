<?php 

	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$message = $_POST['message'];
	

	$connect = mysqli_connect('localhost','root','','travelo');

	if (!$connect) 
		{  echo "not connected"; }


	$query = "INSERT INTO `contact-us` VALUES (NULL, '$name', '$email', '$contact', '$address', '$message')";

	if (mysqli_query($connect, $query)) {
		header("location:contact.php");
	}
	else{
		echo mysqli_error($connect);
		echo "error";
	}

?>
