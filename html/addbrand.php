<?php

include_once 'api/config/database.php';

// if the form was submitted - PHP OOP CRUD Tutorial

 
    // set product property values
    $brand = $_POST['brand_name'];
    $folder1 = "../assets/images/";
    $folder2 = "../assets/images/";
    $folderdb1 = "images/";
    $folderdb2 = "images/";
    $image1 = $_FILES['brand_img_sq']['name'];
    $image2 = $_FILES['brand_img_rc']['name'];
    $path1 = $folder1 . $image1;
    $path2 = $folder2 . $image2;
    $target_file1 = $folder1.basename($_FILES['brand_img_sq']['name']);
    $target_file2 = $folder2.basename($_FILES['brand_img_rc']['name']);
    move_uploaded_file($_FILES['brand_img_sq']['tmp_name'], $target_file1);
    move_uploaded_file($_FILES['brand_img_rc']['tmp_name'], $target_file2);
    $target_filedb1 = $folderdb1.basename($_FILES['brand_img_sq']['name']);
    $target_filedb2 = $folderdb2.basename($_FILES['brand_img_rc']['name']);
    $brand_created_on = date('Y-m-d H:i:s');
    $query = "INSERT INTO brand(brand_name,brand_image_sq,brand_image_rc,brand_created_on)VALUES('".$brand ."','". $target_filedb1 ."',
    '".$target_filedb2."','".$brand_created_on."')";

    if(!mysqli_query($connection,$query))
    {
        die('Error : ' . mysqli_error());
        echo 'Not ok';
    }else{
      echo "OK";
    }
