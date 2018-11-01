<?php 
include_once 'api/config/database.php';

    $branch_name = $_POST['branch_name'];
    $branch_email = $_POST['branch_email'];
    $branch_tele = $_POST['branch_tele'];
    $branch_fax = $_POST['branch_fax'];
    $branch_loc = $_POST['branch_loc'];
    $branch_created_on = date('Y-m-d H:i:s');

    $query = "INSERT INTO `branch`(`branch_name`, `branch_address`, `branch_email`, `branch_telephone`, `branch_fax`, `branch_account_created_on`) VALUES('".$branch_name ."','". $branch_loc ."',
    '".$branch_email."','".$branch_tele."','".$branch_fax."','".$branch_created_on."')";
    

  if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
        echo 'Not ok';
    }else{
      echo "OK";
    }


 