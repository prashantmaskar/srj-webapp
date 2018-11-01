<?php
include("dbconnect.php");
  
        $sql1 = "SELECT product_image_path as productImage FROM product_image WHERE product_id=".$_GET["id"].";";
        $result1 = mysqli_query($connection, $sql1) or die("Error in Selecting" . mysqli_error($connection));
        $image = array();
        while($row0 = mysqli_fetch_assoc($result1)){
            $image[] = $row0; 
        }
  
        $sql2 = "SELECT b.product_gold_color_desc as goldColor FROM product_to_gold_color a, product_gold_color b WHERE a.product_id=".$_GET["id"]." and a.product_gold_color_id=b.product_gold_color_id;";
        $result2 = mysqli_query($connection, $sql2) or die("Error in Selecting" . mysqli_error($connection));
        $goldColour = array();
        while($row1 = mysqli_fetch_assoc($result2)){
            $goldColour[] = $row1; 
        }
        
        $sql3 = "SELECT b.product_diamond_color_desc as diamondColor FROM product_to_diamond_color a, product_diamond_color b WHERE a.product_id=".$_GET["id"]." and a.product_diamond_color_id=b.product_diamond_color_id;";
        $result3 = mysqli_query($connection, $sql3) or die("Error in Selecting" . mysqli_error($connection));
        $diamondColour = array();
        while($row2 = mysqli_fetch_assoc($result3)){
            $diamondColour[] = $row2; 
        }
        
        $sql4 = "SELECT b.product_diamond_quality_desc as diamondQuality FROM product_to_diamond_quality a, product_diamond_quality b WHERE a.product_id=".$_GET["id"]." and a.product_diamond_quality_id=b.product_diamond_quality_id;";
        $result4 = mysqli_query($connection, $sql4) or die("Error in Selecting" . mysqli_error($connection));
        $diamondQuality = array();
        while($row3 = mysqli_fetch_assoc($result4)){
            $diamondQuality[] = $row3; 
        }
        
        $sql5 = "SELECT b.product_purity_desc as purity FROM product_to_purity a, product_purity b WHERE a.product_id=".$_GET["id"]." and a.product_purity_id=b.product_purity_id;";
        $result5 = mysqli_query($connection, $sql5) or die("Error in Selecting" . mysqli_error($connection));
        $purity = array();
        while($row4 = mysqli_fetch_assoc($result5)){
            $purity[] = $row4; 
        }
        
        
        $sql6 = "SELECT product_diamond_weight as diamondWeight FROM product_to_diamond_weight WHERE product_id=".$_GET["id"].";";
        $result6 = mysqli_query($connection, $sql6) or die("Error in Selecting" . mysqli_error($connection));
        while($row5 = mysqli_fetch_assoc($result6)){
            $diamondWeight = $row5["diamondWeight"]; 
        }
        
        $sql7 = "SELECT product_gold_weight as goldWeight FROM product_to_gold_weight WHERE product_id=".$_GET["id"].";";
        $result7 = mysqli_query($connection, $sql7) or die("Error in Selecting" . mysqli_error($connection));
        while($row6 = mysqli_fetch_assoc($result7)){
            $goldWeight = $row6["goldWeight"]; 
        }
        
        $sql8='SELECT a.product_review_id as reviewID, a.product_id as productID, b.user_name as userName, a.brand_id as brandID, a.product_rating as rating, a.product_review_comment as review, a.product_review_helpful_count as helpfulCount, a.product_review_created_on as reviewTime FROM product_review a, user_account b WHERE a.product_id='.$_GET["id"].' and b.user_id=a.user_id';
        $result8 = mysqli_query($connection, $sql8) or die("Error in Selecting" . mysqli_error($connection));
        $allReviews = array();
        $reviews = array();
        while($row7 = mysqli_fetch_assoc($result8)){
            $reviews = $row7; 
           // $allReviews.add($reviews);
            array_push($allReviews,$reviews);
        }
        $combined[] = array(
          "productImage" => $image,
          "goldColour" => $goldColour,
          "diamondColour" => $diamondColour,
          "diamondQuality" => $diamondQuality,
          "purity" => $purity,
          "diamondWeight" => $diamondWeight,
          "goldWeight" => $goldWeight,
          "reviews" => $allReviews
        );
        
      
            echo json_encode($combined);

  
    

?>