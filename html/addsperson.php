<?php 
include_once 'api/config/database.php';

    $s_name = $_POST['s_user'];
    $s_email = $_POST['s_email'];
    $s_cpass = $_POST['s_cpass'];
    $s_contact = $_POST['s_contact'];
    $s_region = $_POST['s_region'];
    $sperson_created_on = date('Y-m-d H:i:s');
    $pass = password_hash($s_cpass, PASSWORD_DEFAULT);
    $admin_type = "1";

    $query = "INSERT INTO `admin_account`(`admin_type`, `name`, `email`, `mobile_no`, `password`, `account_created_on`) VALUES('".$admin_type ."','". $s_name ."',
    '".$s_email."','".$s_contact."','".$pass."','".$sperson_created_on."')";
    

  if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
        echo 'Not ok';
    }else{
      echo "OK";
    }


 