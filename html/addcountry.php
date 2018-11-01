<?php 
include_once 'api/config/database.php';

$region_created_on = date('Y-m-d H:i:s');
 $region_name = $_POST['region'];
 $country_name = $_POST['country_name'];


 $query = "INSERT INTO region_to_country(region_id,country_name,region_to_country_created_on)VALUES('".$region_name ."','".$country_name ."', '".$region_created_on."');";

    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());

       echo "Not OK";
    }else{
     echo "OK";
    }

