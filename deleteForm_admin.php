<?php 
     $idofpackage=$_GET['id'];

     $connect = mysqli_connect('localhost','root','','travelo');
     $query="DELETE FROM `packages` WHERE `packages`.`Package_id` = $idofpackage";
     $query2="DELETE FROM `options` WHERE `options`.`Package_id` = $idofpackage";
     $object = mysqli_query($connect,$query); 
     $object2 = mysqli_query($connect,$query2); 

     if($object && $object2)
         header('location:http://localhost/web/view.php');
    else
     echo "not deleted";
 ?>



