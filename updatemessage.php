
<?php

	$idofpackage=$_REQUEST['id']; 
	$name = $_POST['name'];
	$province = $_POST['province'];
	$main_image = $_FILES['main_img']['name'];
	$cover_image = $_FILES['cover_img']['name'];
	$side_image = $_FILES['side_img']['name'];
	$overview = $_POST['overview'];
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

	

	$query = "UPDATE `packages` SET `Package_name`='$name',`Main_image`='$main_image',`Side_image`='$side_image',`Cover_image`='$cover_image',`Province`='$province',`Price`='$price',`Info`='$info',`Overview`='$overview',`Note`='$note' WHERE `Package_id`='$idofpackage'";

	$sql1= "UPDATE `options` SET `Img`='$op_img1',`Price`='$price' WHERE `Package_id`='$idofpackage' AND `Type`='economy'";
	$sql2= "UPDATE `options` SET `Img`='$op_img2',`Price`='$price2' WHERE `Package_id`='$idofpackage' AND `Type`='standard'";
	$sql3= "UPDATE `options` SET `Img`='$op_img3',`Price`='$price3' WHERE `Package_id`='$idofpackage' AND `Type`='delux'";

if (mysqli_query($connect, $sql1) && mysqli_query($connect, $sql2) && mysqli_query($connect, $sql3)  && mysqli_query($connect, $query)) {
    echo "New records created successfully";
} else {
    echo "Error: "  . mysqli_error($connect);
}


?>





