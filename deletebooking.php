<?php 

$last_id=$_REQUEST['id'];

$connect = mysqli_connect('localhost','root','','travelo');

if (!$connect) 
	{  echo "not connected"; }

	$query = "DELETE FROM `booking` WHERE `id` = '$last_id'" ;
	$obj = mysqli_query($connect,$query);
	if(!$obj)
		echo "error";
	header('location:http://localhost/web/booking.php');

?>