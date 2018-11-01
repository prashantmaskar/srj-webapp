<?php 
include_once 'api/config/database.php';

 
  $event_name = $_POST['event_name'];
  $event_place = $_POST['event_place'];
  $event_booth_no = $_POST['event_booth_no'];
  $event_date = $_POST['event_date'];
  $image = $_FILES['event_banner']['name'];
  $folder = "../../asset/images/";
  $folderdb = "images/";
  $target_file = $folder.basename($_FILES['event_banner']['name']);
  move_uploaded_file($_FILES['event_banner']['tmp_name'], $target_file);
  $target_filedb = $folderdb.basename($_FILES['event_banner']['name']);

  $event_created_on = date('Y-m-d H:i:s');

$query = "INSERT INTO event(event_name,event_place,event_booth_no,event_image,event_date,event_created_on)VALUES('".$event_name ."','". $event_place ."',
    '".$event_booth_no."','".$target_filedb."','".$event_date."','".$event_created_on."');";

  if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
        echo 'Not ok';
    }else{
      echo "OK";
    }



?>