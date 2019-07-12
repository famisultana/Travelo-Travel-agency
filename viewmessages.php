<!DOCTYPE html>
<html>
<head>
	<title>View Messages</title>
	<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
<?php include("adminNavbar.php"); ?>
<div style="min-height: 94vh;">
	
<?php  ?>

<center>
	<h1 style="text-align: center; margin-top: 60px;font-variant: small-caps;font-family: Arial; width: 40%; border-bottom: 4px double black;"> Clients's Messages </h1>

</center>
<table class="msg-table">
<tr > <th >No.</th> <th>Client Name</th> <th>Email Adress</th> <th>Contact</th>  <th>Adress</th>  <th>Message</th> </tr>

<?php 

	$connect = mysqli_connect('localhost','root','','travelo');
	$query = "SELECT * FROM `contact-us`";

	$object = mysqli_query($connect,$query); 

 		$no = 0;
		while($data=mysqli_fetch_assoc($object)) 
		{ 	
			$no++;
			$name = $data['Name'];
			$email = $data['Email'];
			$contact = $data['contact'];
			$address = $data['adress'];
			$message = $data['Message'];

 ?>
<tr> <td><?php echo $no ?></td> <td><?php echo $name ?></td> <td><?php echo $email ?></td> <td><?php echo $contact ?></td>  <td><?php echo $address ?></td>  <td><?php echo $message ?></td> </tr>

<?php   } ?>

</table>


</div>


</body>
</html>