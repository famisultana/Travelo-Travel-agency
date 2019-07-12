<?php 

	session_start();

	if(!isset($_SESSION['uid']))
	{

header('location:login.php');

	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>DashBoard</title>
	<link rel="stylesheet" type="text/css" href="dashboard.css">

</head>
<body>

	
		<?php include("adminNavbar.php"); ?>

<div style="min-height: 94vh;">
		
<?php $connect = mysqli_connect('localhost','root','','travelo');
	$query = "SELECT * FROM `packages`";

	$object = mysqli_query($connect,$query); 
 ?>

<center>
	<h1 style="text-align: center; margin-top: 60px;font-variant: small-caps;font-family: Arial; width: 40%; border-bottom: 4px double black;">Packages Details </h1>
</center>
 
 <table class="view-table">
 	<th>No. </th> <th>Package Name</th> <th>Province</th>	<th>Price</th> <th colspan="3">Action</th>
 	<?php 
 		$no = 0;
		while($data=mysqli_fetch_assoc($object)) 
		{ 	
			$no++;
			$id = $data['Package_id'];
			$name = $data['Package_name'];
			$province = $data['Province'];
			$price = $data['Price'];
		
 ?>

	<tr>
		<td><?php echo $no;?>		</td>  
		<td><?php echo "$name" ?>	</td>
		<td><?php echo $province ?>	</td> 
		<td>Rs. <?php echo $price ?></td>

		<td> <input type="submit" class="buttons view" " value="View" onclick="window.location.href='packagedetails.php?id=<?php echo "$id"; ?>'"></td> 
		<td><input type="submit" class="buttons update"  value="Update" onclick="window.location.href='admin_update.php?id=<?php echo "$id" ?>'"></td> 
		<td><input type="submit" class="buttons delete" value="Delete" onclick="window.location.href='deleteForm_admin.php?id=<?php echo "$id" ?>'"></td>		
	</tr>

	<?php } ?>
	
 </table>
			
</div>

</body>
</html>

