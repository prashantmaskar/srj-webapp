<?php 
include_once 'api/config/database.php';

    $branch_id = $_POST['branch_id'];
    $branch_name = $_POST['branch_name'];
    $branch_email = $_POST['branch_email'];
    $branch_tele = $_POST['branch_tele'];
    $branch_fax = $_POST['branch_fax'];
    $branch_loc = $_POST['branch_loc'];
    $branch_created_on = date('Y-m-d H:i:s');

    $query = "UPDATE branch SET branch_name = '$branch_name',branch_email = '$branch_email',branch_telephone= '$branch_tele',branch_fax ='$branch_fax',branch_address = '$branch_loc',branch_account_created_on = '$branch_created_on' WHERE branch_id = $branch_id";
    

  if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
        echo 'Not ok';
    }else{
      echo "OK";
    }


 