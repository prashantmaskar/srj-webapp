<?php 
include_once 'api/config/database.php';

$region_created_on = date('Y-m-d H:i:s');
 $region_name = $_POST['region_name'];
 $region_id = $_POST['region_id'];



 $query = "UPDATE region SET region_name ='$region_name',region_created_on = '$region_created_on' WHERE region_id =  $region_id  ";

    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());

       echo "Not OK";
    }else{
     echo "OK";
    }

