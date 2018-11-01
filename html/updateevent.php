<?php 
include_once 'api/config/database.php';

  $event_id = $_POST['event_id'];
  $event_name = $_POST['event_name'];
  $event_place = $_POST['event_place'];
  $event_booth_no = $_POST['event_booth_no'];
  $event_date = $_POST['event_date'];
  $image = $_FILES['event_banner']['name'];
  if(!empty($image)){
  $folder = "../../asset/images/events/";
  $folderdb = "images/";
  $target_file = $folder.basename($_FILES['event_banner']['name']);
  move_uploaded_file($_FILES['event_banner']['tmp_name'], $target_file);
  $target_filedb = $folderdb.basename($_FILES['event_banner']['name']);
}
  $event_created_on = date('Y-m-d H:i:s');

if (!empty($image)) {
 $query = "UPDATE event SET event_name = '$event_name',event_place = '$event_place',event_booth_no= '$event_booth_no',event_image ='$target_filedb',event_date = '$event_date', event_created_on = '$event_created_on' WHERE event_id = $event_id";
}
else{
   $query = "UPDATE event SET event_name = '$event_name',event_place = '$event_place',event_booth_no= '$event_booth_no',event_date = '$event_date', event_created_on = '$event_created_on' WHERE event_id = $event_id";
}




   if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
        echo 'Not ok';
    }else{
      echo "OK";
    }