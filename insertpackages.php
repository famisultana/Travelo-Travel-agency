
<?php 
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$province = $_POST['province'];
	$main_image = $_FILES['main_img']['name'];
	$cover_image = $_FILES['cover_img']['name'];
	$side_image = $_FILES['side_img']['name'];
	$overview = $_POST['overview'];
	$itinerary = $_POST['itinerary'];
	$note = $_POST['note'];
	$info = $_POST['info'];
	$price = $_POST['price'];
	$price2 = $_POST['price2'];
	$price3 = $_POST['price3'];
	$op_img1 = $_FILES['op_img1']['name'];
	$op_img2 = $_FILES['op_img2']['name'];
	$op_img3 = $_FILES['op_img3']['name'];

	$connect = mysqli_connect('localhost','root','','travelo');

	if (!$connect) 
		{  echo "not connected"; }

	$target1 = "images/".basename($main_image);
	$target2 = "images/".basename($cover_image);
	$target3 = "images/".basename($side_image);
	$target4 = "images/".basename($op_img1);
	$target5 = "images/".basename($op_img2);
	$target6 = "images/".basename($op_img3);

	move_uploaded_file($_FILES['main_img']['tmp_name'], $target1);
	move_uploaded_file($_FILES['cover_img']['tmp_name'], $target2);
	move_uploaded_file($_FILES['side_img']['tmp_name'], $target3);
	move_uploaded_file($_FILES['op_img1']['tmp_name'], $target4);
	move_uploaded_file($_FILES['op_img2']['tmp_name'], $target5);
	move_uploaded_file($_FILES['op_img3']['tmp_name'], $target6);

	$query = "INSERT INTO `packages` VALUES (NULL, '$name', '$main_image', '$side_image', '$cover_image', '$province', '$price', '$info', '$overview','$itinerary', '$note')";

	if (mysqli_query($connect, $query)) {

		$last_id = mysqli_insert_id($connect);
	}
	else{
		echo mysqli_error($connect);
		echo "error";
	}

	$sql1= "INSERT INTO `options` VALUES (null,'$last_id', '$op_img1', '$price','economy')";
	$sql2= "INSERT INTO `options` VALUES (null,'$last_id', '$op_img2', '$price2','standard')";
	$sql3= "INSERT INTO `options` VALUES (null,'$last_id', '$op_img3', '$price3','delux')";

if (mysqli_query($connect, $sql1) && mysqli_query($connect, $sql2) && mysqli_query($connect, $sql3)) {
    echo "New records created successfully";
} else {
    echo "Error: "  . mysqli_error($connect);
}

}

?>
