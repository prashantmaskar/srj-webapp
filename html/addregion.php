<?php 
include_once 'api/config/database.php';

$region_created_on = date('Y-m-d H:i:s');
 $region_name = $_POST['region_name'];


 $query = "INSERT INTO region(region_name,region_created_on)VALUES('".$region_name ."',
 '".$region_created_on."');";

    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());

       echo "Not OK";
    }else{
     echo "OK";
    }

