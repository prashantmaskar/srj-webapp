<?php 
include_once 'api/config/database.php';

  $product_id = $_POST['product_id'];
  $brand_id = $_POST['brand'];
  $product_name = $_POST['product'];
  $diamond_color = $_POST['diamond_color'];
  $product_created_on = date('Y-m-d H:i:s');
  $product_gweight = $_POST['g_weight'];
  $product_dweight = $_POST['d_weight'];
  $product_gcolor = $_POST['gold_color'];
  $product_dpurity = $_POST['diamond_quality'];
  $product_purity = $_POST['product_purity'];
  $product_created_on = date('Y-m-d H:i:s');

$cnt = count($_FILES['pimage']['name']);
$imgs = [];
  

for($i=0; $i < $cnt; $i++)
{

  $folder = "../../asset/images/";
  $folderdb = "images/";
  $target_file = $folder.basename($_FILES['pimage']['name'][$i]);
  $target_filedb = $folderdb.basename($_FILES['pimage']['name'][$i]);
  $tmp_name = $_FILES['pimage']['tmp_name'][$i];
  move_uploaded_file($tmp_name, $target_file);

        $imgs[] = $target_filedb;

}

 mysqli_autocommit($connection, false);

$flag = true;

$query1 = "UPDATE product SET brand_id = '$brand_id',product_name = '$product_name' ,product_created_on ='$product_created_on' WHERE product_id = $product_id";

$result = mysqli_query($connection,$query1);

if (!$result) {
  $flag = false;
    echo "Error details: " . mysqli_error($connection) . ".";
}

$gwquery ="UPDATE product_to_gold_weight SET product_gold_weight = '$product_gweight',product_gold_weight_created_on = '$product_created_on'WHERE product_id = $product_id";

$gwresult = mysqli_query($connection,$gwquery);

if (!$gwresult) {
  $flag = false;
    echo "Error details: " . mysqli_error($connection) . ".";
}

$dwquery ="UPDATE product_to_diamond_weight SET product_diamond_weight = '$product_dweight',product_diamond_weight_created_on = '$product_created_on' WHERE product_id = $product_id";

$dwresult = mysqli_query($connection,$dwquery);

if (!$dwresult) {
  $flag = false;
    echo "Error details: " . mysqli_error($connection) . ".";
}

foreach($imgs as $images)  
   { 

$pimquery = "INSERT INTO product_image(product_id,product_image_path,product_image_created_on)
VALUES('".$product_id."','".$images."','".$product_created_on."');";
$pimgresult = mysqli_query($connection,$pimquery);

    }

$dquery = "DELETE FROM product_to_diamond_color WHERE product_id = $product_id ;";
$dresult = mysqli_query($connection,$dquery);
if (!$dresult) {
  $flag = false;
    echo "Error details: " . mysqli_error($connection) . ".";
}
foreach($diamond_color as $dcolor)  
   {  
$dcquery = "INSERT INTO product_to_diamond_color(product_id,product_diamond_color_id,product_to_diamond_color_created_on)
VALUES('".$product_id."','".$dcolor."','".$product_created_on."');";
    $dcresult = mysqli_query($connection,$dcquery);


   }  
$dquery = "DELETE FROM product_to_gold_color WHERE product_id = $product_id ;";
$dresult = mysqli_query($connection,$dquery);
if (!$dresult) {
  $flag = false;
    echo "Error details: " . mysqli_error($connection) . ".";
}

   foreach($product_gcolor as $gcolor)  
   {  
$dcquery = "INSERT INTO product_to_gold_color(product_id,product_gold_color_id,product_to_gold_color_created_on)
VALUES('".$product_id."','".$gcolor."','".$product_created_on."');";
    $dcresult = mysqli_query($connection,$dcquery);


   }

   $dquery = "DELETE FROM product_to_diamond_quality WHERE product_id = $product_id ;";
$dresult = mysqli_query($connection,$dquery);
if (!$dresult) {
  $flag = false;
    echo "Error details: " . mysqli_error($connection) . ".";
}

   foreach($product_dpurity as $dquality)  
   {  
$dqquery = "INSERT INTO product_to_diamond_quality(product_id,product_diamond_quality_id,product_to_diamond_quality_created_on)
VALUES('".$product_id."','".$dquality."','".$product_created_on."');";
    $dcresult = mysqli_query($connection,$dqquery);


   }
   $dquery = "DELETE FROM product_to_purity WHERE product_id = $product_id ;";
$dresult = mysqli_query($connection,$dquery);
if (!$dresult) {
  $flag = false;
    echo "Error details: " . mysqli_error($connection) . ".";
}

    foreach($product_purity as $ppurity)  
   {  
$pqquery = "INSERT INTO product_to_purity(product_id,product_purity_id,product_to_purity_created_on)
VALUES('".$product_id."','".$ppurity."','".$product_created_on."');";
    $pqresult = mysqli_query($connection,$pqquery);


   }


   if ($flag) {
    mysqli_commit($connection);
     echo 'OK';

} else {
  mysqli_rollback($connection);
      echo " Not OK";

} 
