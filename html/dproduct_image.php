<?php 
include_once 'api/config/database.php';
$image_id = $_POST['image_id'];

$query = "DELETE FROM `product_image` WHERE `product_image`.`product_image_id` = $image_id ";
    if(!mysqli_query($connection,$query))
    {

echo "0";
    }
    else{
    	echo "1";
    }