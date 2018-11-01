<?php 
include_once 'api/config/database.php';

    $s_id = $_POST['s_id'];
    $s_name = $_POST['s_user'];
    $s_email = $_POST['s_email'];
    $s_cpass = $_POST['s_cpass'];
    $s_contact = $_POST['s_contact'];
    $s_region = $_POST['s_region'];
    $sperson_created_on = date('Y-m-d H:i:s');
    $admin_type = "1";

if(empty($pass))
{ 
    $query = "UPDATE`admin_account` SET admin_type = '$admin_type', name='$s_name', email='$s_email', mobile_no='$s_contact', account_created_on= '$sperson_created_on' WHERE admin_id = $s_id ";
    }
    else{
    $pass = password_hash($s_cpass, PASSWORD_DEFAULT);

        $query = "UPDATE`admin_account` SET admin_type = '$admin_type', name='$s_name', email='$s_email', mobile_no='$s_contact',password = '$pass', account_created_on= '$sperson_created_on' WHERE admin_id = $s_id ";
    }

  if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
        echo 'Not ok';
    }else{
      echo "OK";
    }


 