<?php  
include_once 'api/config/database.php';
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.php?action=login");  
 }  
            $sql1 = "SELECT  brand_id FROM product WHERE product_id=".$_GET["id"].";";
            $result1 = mysqli_query($connection,$sql1);
            $branch_id = mysqli_fetch_array($result1, MYSQLI_ASSOC);
            $sel_brand_id = $branch_id['brand_id'];

            $sql1 = "SELECT product_name FROM product WHERE product_id=".$_GET["id"].";";
            $result1 = mysqli_query($connection,$sql1);
            $product_name = mysqli_fetch_array($result1, MYSQLI_ASSOC);
            $sel_product_name = $product_name['product_name'];

    
        
        
        $sql6 = "SELECT product_diamond_weight as diamondWeight FROM product_to_diamond_weight WHERE product_id=".$_GET["id"].";";
        $result6 = mysqli_query($connection, $sql6) or die("Error in Selecting" . mysqli_error($connection));
            $product_dweight = mysqli_fetch_array($result6, MYSQLI_ASSOC);
            $sel_product_dweight = $product_dweight['diamondWeight'];
      
        
        $sql7 = "SELECT product_gold_weight as goldWeight FROM product_to_gold_weight WHERE product_id=".$_GET["id"].";";
        $result7 = mysqli_query($connection, $sql7) or die("Error in Selecting" . mysqli_error($connection));
        $product_gweight = mysqli_fetch_array($result7, MYSQLI_ASSOC);
            $sel_product_gweight = $product_gweight['goldWeight'];

     
     


 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>SRJ</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="../assets/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="../assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="../assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="../assets/styles/font.css" type="text/css" />

</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside modal nav-dropdown">
  	<!-- fluid app aside -->
    <div class="left navside dark dk" data-layout="column">
  	  <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand">
        	<div ui-include="'../assets/images/logo.svg'"></div>
        	<img src="../assets/images/logo.png" alt="." class="hide">
        	<span class="hidden-folded inline">SRJ</span>
        </a>
        <!-- / brand -->
      </div>
      <div class="hide-scroll" data-flex>
          <nav class="scroll nav-light">
            
              <ul class="nav" ui-nav>
                <li class="nav-header hidden-folded">
                  <small class="text-muted"><?php echo $_SESSION["username"];?></small>
                </li>
                
                <li>
                  <a href="dashboard.php" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'../assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Dashboard</span>
                  </a>
                </li>
            <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label">
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe853;
                        <span ui-include="'../assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Sales Pesron</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="Add_manager.php" >
                        <span class="nav-text">Add Sales Pesron</span>
                      </a>
                    </li>
                   <li>
                      <a href="view_salesperson.php" >
                        <span class="nav-text">View Sales Pesron</span>
                      </a>
                    </li>
                  </ul>
                </li>
            
                
                 <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8f0;
                        <span ui-include="'../assets/images/i_2.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Region</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="Add_region.php" >
                        <span class="nav-text">Add Region</span>
                      </a>
                    </li>
                     <li>
                      <a href="view_region.php" >
                        <span class="nav-text">View Region</span>
                      </a>
                    </li>
                  
                  </ul>
                </li>
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8f0;
                        <span ui-include="'../assets/images/i_2.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Country</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="Add_country.php" >
                        <span class="nav-text">Add Country</span>
                      </a>
                    </li>
                     <li>
                      <a href="view_country.php" >
                        <span class="nav-text">View Country</span>
                      </a>
                    </li>
                  
                  </ul>
                </li>
                  <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8f0;
                        <span ui-include="'../assets/images/i_2.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Branch</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="Add_branch.php" >
                        <span class="nav-text">Add Branch</span>
                      </a>
                    </li>
                     <li>
                      <a href="view_branch.php" >
                        <span class="nav-text">View Branch</span>
                      </a>
                    </li>
                  
                  </ul>
                </li>
                <li>
                  <a>
                     <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Brands</span>
                  </a>
                   <ul class="nav-sub">
                    <li>
                      <a href="Add_brand.php" >
                        <span class="nav-text">Add Brand</span>
                      </a>
                    </li>
                    <li>
                      <a href="view_brand.php" >
                        <span class="nav-text">View Brand</span>
                      </a>
                    </li>
                   
                  </ul>
                </li>
                <li>
                  <a>
                     <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Product</span>
                  </a>
                   <ul class="nav-sub">
                    <li>
                      <a href="Add_product.php" >
                        <span class="nav-text">Add Produuct</span>
                      </a>
                    </li>
                    <li>
                      <a href="view_product.php" >
                        <span class="nav-text">View Product</span>
                      </a>
                    </li>
                   
                  </ul>
                </li>
                 <li>
                  <a>
                     <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe153;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Events</span>
                  </a>
                   <ul class="nav-sub">
                    <li>
                      <a href="Add_event.php" >
                        <span class="nav-text">Add Event</span>
                      </a>
                    </li>
                    <li>
                      <a href="view_event.php" >
                        <span class="nav-text">View Event</span>
                      </a>
                    </li>
                   
                  </ul>
                </li>
                <li>
                  <a>
                     <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe153;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Quotaions</span>
                  </a>
                   <ul class="nav-sub">
                    <li>
                      <a href="view_quotation.html" >
                        <span class="nav-text">View Quotaions</span>
                      </a>
                    </li>
                   
                  </ul>
                </li>
                <li>
                  <a>
                     <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe153;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Pages</span>
                  </a>
                   <ul class="nav-sub">
                    <li>
                      <a href="Add_aboutus.html" >
                        <span class="nav-text">Add About Us</span>
                      </a>
                    </li>
                     <li>
                      <a href="Add_privacypolicy.html" >
                        <span class="nav-text">Add Policy</span>
                      </a>
                    </li>
                   
                  </ul>
                </li>
            
              </ul>
          </nav>
      </div>
      <div class="b-t">
        <div class="nav-fold">
        	<a href="profile.html">
        	    <span class="pull-left">
        	      <img src="../assets/images/a0.jpg" alt="..." class="w-40 img-circle">
        	    </span>
        	    <span class="clear hidden-folded p-x">
        	      <span class="block _500">Jean Reyes</span>
        	      <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
        	    </span>
        	</a>
        </div>
      </div>
    </div>
  </div>
  <!-- / -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
    <div class="app-header white box-shadow">
        <div class="navbar navbar-toggleable-sm flex-row align-items-center">
            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
              <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->
        
            <!-- Page title - Bind to $state's title -->
            <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>
        
            <!-- navbar collapse -->
            <div class="collapse navbar-collapse" id="collapse">
              <!-- link and dropdown -->
              <ul class="nav navbar-nav mr-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link" href data-toggle="dropdown">
                    <i class="fa fa-fw fa-plus text-muted"></i>
                    <span>New</span>
                  </a>
                  <div ui-include="'../views/blocks/dropdown.new.html'"></div>
                </li>
              </ul>
        
              <div ui-include="'../views/blocks/navbar.form.html'"></div>
              <!-- / -->
            </div>
            <!-- / navbar collapse -->
        
            <!-- navbar right -->
            <ul class="nav navbar-nav ml-auto flex-row">
              <li class="nav-item dropdown pos-stc-xs">
                <a class="nav-link mr-2" href data-toggle="dropdown">
                  <i class="material-icons">&#xe7f5;</i>
                  <span class="label label-sm up warn">3</span>
                </a>
                <div ui-include="'../views/blocks/dropdown.notification.html'"></div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="../assets/images/a0.jpg" alt="...">
                    <i class="on b-white bottom"></i>
                  </span>
                </a>
                <div ui-include="'../views/blocks/dropdown.user.html'"></div>
              </li>
              <li class="nav-item hidden-md-up">
                <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                  <i class="material-icons">&#xe5d4;</i>
                </a>
              </li>
            </ul>
            <!-- / navbar right -->
        </div>
    </div>
    <div class="app-footer">
      <div class="p-2 text-xs">
        <div class="pull-right text-muted py-1">
          &copy; Copyright <strong>Flatkit</strong> <span class="hidden-xs-down">- Built with Love v1.1.3</span>
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
        <div class="nav">
          <a class="nav-link" href="../">About</a>
        </div>
      </div>
    </div>
    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->
<div class="padding">
  
  <div class="row">
    <div class="col-sm-12">
      <form ui-jp="parsley" id="editproduct" method="post" enctype="multipart/form-data">
        <div class="box">
          <div class="box-header">
            <h2>Add Product</h2>
          </div>
          <div class="box-body">
            <div id="formstatus" class="text-muted"></div>

            <p class="text-muted">Please fill the information to continue</p>
            <div class="row m-b">
              <div class="col-sm-6">
              <label>Brand Name</label>
            <select  class="form-control c-select " name="brand">
             <option value="">Please choose Brand</option>
              <?php 
                $bqry="SELECT * FROM `brand`;";
                $brun=mysqli_query($connection,$bqry);
                   while( $brand = mysqli_fetch_assoc($brun) ):
                     ?>
                    
                    <option <?php if ($brand['brand_id'] == $sel_brand_id) echo 'selected' ; ?> value="<?php echo $brand['brand_id']; ?>"><?php echo $brand['brand_name']; ?></option>
                    <?php endwhile; ?>
                </select>
              </div>
            <div class="col-sm-6">
              <label>Product Name</label>
              <input type="hidden" name="product_id" value="<?php echo $_GET["id"]; ?>" class="form-control" >                        

              <input type="text" name="product" value="<?php echo $sel_product_name; ?>" class="form-control" >                        
            </div>
          </div>
             <div class="form-group row">
              <label class="col-sm-1 form-control-label">Diamond Color:</label>
                <?php 
                $qry="SELECT * FROM `product_diamond_color`;";
                $run=mysqli_query($connection,$qry);
                   while( $diamond_color = mysqli_fetch_assoc($run) ):
                    $quer1 = "SELECT b.product_diamond_color_desc as diamondColor,b.product_diamond_color_id as diamondColorid FROM product_to_diamond_color a, product_diamond_color b WHERE a.product_id=".$_GET["id"]." and a.product_diamond_color_id=b.product_diamond_color_id;";
                     $result1 = mysqli_query($connection,$quer1);
                     $product_gd_desc = mysqli_fetch_array($result1, MYSQLI_ASSOC);
                    
                     $sel_product_gddecid = $product_gd_desc['diamondColorid'];
                     ?>
               <div class="col-sm-2">

    <label class="checkbox-inline">
    <input type="checkbox" <?php if ($diamond_color['product_diamond_color_id'] == $sel_product_gddecid) echo 'checked' ; ?> name="diamond_color[]" value="<?php echo $diamond_color['product_diamond_color_id']; ?>" >
    <?php echo $diamond_color['product_diamond_color_desc']; ?>
</label>
</div>
              
<?php endwhile; ?>
     </div> 

              
              <div class="form-group row">
              <label class="col-sm-1 form-control-label">Gold Color:</label>
              
               <?php 
                $qry1="SELECT * FROM `product_gold_color`;";
                $run1=mysqli_query($connection,$qry1);

               	$quer1 = "SELECT b.product_gold_color_id as goldColorid FROM product_to_gold_color a, product_gold_color b WHERE a.product_id=".$_GET["id"]." and a.product_gold_color_id=b.product_gold_color_id;";
                $result1 = mysqli_query($connection,$quer1);
                    $i = 0;
                     $qcolor = array();
                     while( $gold_color = mysqli_fetch_assoc($result1) ):
                     
                     
                      $qcolor[$i] = $gold_color['goldColorid'] ;
                      
                      $i++;
                        endwhile; 
                     $j = 0;
                   while( $gold_color = mysqli_fetch_assoc($run1) ):

                    
                     ?>
 <div class="col-sm-2">
    <label class="checkbox-inline">

    <input type="checkbox" <?php foreach ($qcolor as &$gcolor) {echo ($gcolor == $gold_color['product_gold_color_id'] ? 'checked="checked"': '') ;} ?>   name="gold_color[]" value="<?php echo $gold_color['product_gold_color_id']; ?>" >
    <?php echo $gold_color['product_gold_color_desc']; ?>
</label>
</div>
              
<?php $j++; endwhile; ?>
</div>
              <div class="form-group row">
              <label class="col-sm-1 form-control-label">Diamond Quality:</label>
              
               <?php 
                $qry2="SELECT * FROM `product_diamond_quality`;";
                $run2=mysqli_query($connection,$qry2);
                	$quer1 = "SELECT b.product_diamond_quality_id  FROM product_to_diamond_quality a, product_diamond_quality b WHERE a.product_id=".$_GET["id"]." and a.product_diamond_quality_id=b.product_diamond_quality_id ;";
                     $result1 = mysqli_query($connection,$quer1);
                    $i = 0;
                     $quality = array();
                     while( $diamond_qualityt = mysqli_fetch_assoc($result1) ):
                     
                      $quality[$i] = $diamond_qualityt['product_diamond_quality_id'] ;
                      
                      $i++;
                        endwhile; 
                       $asize = sizeof($quality);
                     $j = 0;
                   while( $diamond_quality = mysqli_fetch_assoc($run2) ):
                      
                     ?>
 <div class="col-sm-1">
    <label class="checkbox-inline">

    <input type="checkbox" <?php foreach ($quality as &$dquality) {echo ($dquality == $diamond_quality['product_diamond_quality_id'] ? 'checked="checked"': '') ;} ?> name="diamond_quality[]" value="<?php echo $diamond_quality['product_diamond_quality_id']; ?>" >
    <?php echo $diamond_quality['product_diamond_quality_desc']; ?>
</label>
</div>
              
<?php $j++; endwhile; ?>
</div> 
    <div class="form-group row">
              <label class="col-sm-1 form-control-label">Purity:</label>
              
               <?php 
                $qry3="SELECT * FROM `product_purity`;";
                $run3=mysqli_query($connection,$qry3);
                $quer1 = "SELECT b.product_purity_id  FROM product_to_purity a, product_purity b WHERE a.product_id=".$_GET["id"]." and a.product_purity_id=b.product_purity_id ";
                     $result1 = mysqli_query($connection,$quer1);
                    $i = 0;
                     $purity = array();
                     while( $diamond_purityt = mysqli_fetch_assoc($result1) ):
                     
                     
                      $purity[$i] = $diamond_purityt['product_purity_id'] ;
                      $i++;
                        endwhile;
                        $tpuer = sizeof($purity); 
                     $j = 0;
                   while( $product_purity = mysqli_fetch_assoc($run3) ):
                     ?>
 <div class="col-sm-1">
    <label class="checkbox-inline">
    
    <input type="checkbox" <?php foreach ($purity as &$ppurity) {echo ($ppurity == $product_purity['product_purity_id'] ? 'checked="checked"': '') ;}  ?> name="product_purity[]" value="<?php echo $product_purity['product_purity_id']; ?>" >
    <?php echo $product_purity['product_purity_desc']; ?>
</label>
</div>
              
<?php $j++; endwhile; ?>
</div> 
           <div class="row m-b">
           <div class="col-sm-6">
              <label>Gold weight</label>
              <input type="text" name="g_weight" value="<?php echo $sel_product_gweight; ?>" class="form-control" >                        
            </div>
            <div class="col-sm-6">
              <label>Diamond weight</label>
              <input type="text" name="d_weight" value="<?php echo $sel_product_dweight; ?>" class="form-control" >                        
            </div>
          </div>
          <div class="row m-b">
          <?php 
        $sql1 = "SELECT product_image_path as productImage, product_image_id as pimageid FROM product_image WHERE product_id=".$_GET["id"].";";
        $result1 = mysqli_query($connection, $sql1) or die("Error in Selecting" . mysqli_error($connection));

               while( $product_image = mysqli_fetch_assoc($result1) ):

                     ?>

          <div class="image_banner text-center col-md-3 m-b">
              <img class="w-100 avatar" src="http://srjcreations.com/asset/<?php echo $product_image['productImage']; ?>">
              <input type="hidden" name="product_oimage_rc" value="<?php echo $product_image['productImage']; ?>">
              <span class="btn danger"  onclick="delete_id(<?php echo $product_image['pimageid']; ?>);">Delete</span> 

            </div>
        <?php  endwhile; ?>

        <div class="form-group col-md-12 ">
              <label for="inputPassword3" class="col-sm-3 form-control-label">Product Image</label>
              <div class="col-sm-12">
                <input type="file" name="pimage[]" class="form-control" multiple >
              </div>
            </div>
        </div>
          </div>
          <div class="dker p-a text-right">
            <input type="submit"  class="btn info" name="submit" value="Upadte">
          </div>
        </div>
      </form>
    </div>
  </div>


</div>

<div id="myModal" class="modal black-overlay" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Loding...</h5>
      </div>
      <div class="modal-body text-center p-lg">
        <p>Loding Data To server</p>
      </div>

    </div><!-- /.modal-content -->
  </div>
</div>
<!-- / .modal -->
<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

  <!-- theme switcher -->
  <div id="switcher">
    <div class="switcher box-color dark-white text-color" id="sw-theme">
      <a href ui-toggle-class="active" target="#sw-theme" class="box-color dark-white text-color sw-btn">
        <i class="fa fa-gear"></i>
      </a>
      <div class="box-header">
        <a href="https://themeforest.net/item/flatkit-app-ui-kit/13231484?ref=flatfull" class="btn btn-xs rounded danger pull-right">BUY</a>
        <h2>Theme Switcher</h2>
      </div>
      <div class="box-divider"></div>
      <div class="box-body">
        <p class="hidden-md-down">
          <label class="md-check m-y-xs"  data-target="folded">
            <input type="checkbox">
            <i class="green"></i>
            <span class="hidden-folded">Folded Aside</span>
          </label>
          <label class="md-check m-y-xs" data-target="boxed">
            <input type="checkbox">
            <i class="green"></i>
            <span class="hidden-folded">Boxed Layout</span>
          </label>
          <label class="m-y-xs pointer" ui-fullscreen>
            <span class="fa fa-expand fa-fw m-r-xs"></span>
            <span>Fullscreen Mode</span>
          </label>
        </p>
        <p>Colors:</p>
        <p data-target="themeID">
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'primary', accent:'accent', warn:'warn'}">
            <input type="radio" name="color" value="1">
            <i class="primary"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'accent', accent:'cyan', warn:'warn'}">
            <input type="radio" name="color" value="2">
            <i class="accent"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'warn', accent:'light-blue', warn:'warning'}">
            <input type="radio" name="color" value="3">
            <i class="warn"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'success', accent:'teal', warn:'lime'}">
            <input type="radio" name="color" value="4">
            <i class="success"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'info', accent:'light-blue', warn:'success'}">
            <input type="radio" name="color" value="5">
            <i class="info"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'blue', accent:'indigo', warn:'primary'}">
            <input type="radio" name="color" value="6">
            <i class="blue"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'warning', accent:'grey-100', warn:'success'}">
            <input type="radio" name="color" value="7">
            <i class="warning"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'danger', accent:'grey-100', warn:'grey-300'}">
            <input type="radio" name="color" value="8">
            <i class="danger"></i>
          </label>
        </p>
        <p>Themes:</p>
        <div data-target="bg" class="row no-gutter text-u-c text-center _600 clearfix">
          <label class="p-a col-sm-6 light pointer m-0">
            <input type="radio" name="theme" value="" hidden>
            Light
          </label>
          <label class="p-a col-sm-6 grey pointer m-0">
            <input type="radio" name="theme" value="grey" hidden>
            Grey
          </label>
          <label class="p-a col-sm-6 dark pointer m-0">
            <input type="radio" name="theme" value="dark" hidden>
            Dark
          </label>
          <label class="p-a col-sm-6 black pointer m-0">
            <input type="radio" name="theme" value="black" hidden>
            Black
          </label>
        </div>
      </div>
    </div>
    
    <div class="switcher box-color black lt" id="sw-demo">
      <a href ui-toggle-class="active" target="#sw-demo" class="box-color black lt text-color sw-btn">
        <i class="fa fa-list text-white"></i>
      </a>
      <div class="box-header">
        <h2>Demos</h2>
      </div>
      <div class="box-divider"></div>
      <div class="box-body">
        <div class="row no-gutter text-u-c text-center _600 clearfix">
          <a href="dashboard.html"
            class="p-a col-sm-6 primary">
            <span class="text-white">Default</span>
          </a>
          <a href="dashboard.0.html"
            class="p-a col-sm-6 success">
            <span class="text-white">Zero</span>
          </a>
          <a href="dashboard.1.html"
            class="p-a col-sm-6 blue">
            <span class="text-white">One</span>
          </a>
          <a href="dashboard.2.html"
            class="p-a col-sm-6 warn">
            <span class="text-white">Two</span>
          </a>
          <a href="dashboard.3.html"
            class="p-a col-sm-6 danger">
            <span class="text-white">Three</span>
          </a>
          <a href="dashboard.4.html"
            class="p-a col-sm-6 green">
            <span class="text-white">Four</span>
          </a>
          <a href="dashboard.5.html"
            class="p-a col-sm-6 info">
            <span class="text-white">Five</span>
          </a>
          <div 
            class="p-a col-sm-6 lter">
            <span class="text">...</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / -->

<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="../libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="../libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>

     <script src="../libs/js/validation/jquery.validate.min.js"></script>
  <script src="../libs/js/validation/additional-methods.min.js"></script>
  <script src="../libs/js/validation/valdation.js"></script>
  <script src="../libs/js/validation/jquery.form.min.js"></script>
<!-- core -->
  <script src="../libs/jquery/underscore/underscore-min.js"></script>
  <script src="../libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="../libs/jquery/PACE/pace.min.js"></script>

  <script src="scripts/config.lazyload.js"></script>

  <script src="scripts/palette.js"></script>
  <script src="scripts/ui-load.js"></script>
  <script src="scripts/ui-jp.js"></script>
  <script src="scripts/ui-include.js"></script>
  <script src="scripts/ui-device.js"></script>
  <script src="scripts/ui-form.js"></script>
  <script src="scripts/ui-nav.js"></script>
  <script src="scripts/ui-screenfull.js"></script>
  <script src="scripts/ui-scroll-to.js"></script>
  <script src="scripts/ui-toggle-class.js"></script>

  <script src="scripts/app.js"></script>

  <!-- ajax -->
  <script src="../libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="scripts/ajax.js"></script>

 <script type="text/javascript">

function delete_id(id)
{
 if(confirm('Sure To Remove This image from Product ?'))
 {
   $.ajax({
  type: "POST",
  url: "dproduct_image.php",
  data: "image_id="+id,
success: function(msg) {

                    if (msg === '1') {
                        alert("image deleted from this product");
 // location.reload();
                    } else {
                       alert("image  Not deleted from this product");
                        // location.reload();
                    }
                    


                },
                error: function(msg) {
                    alert(msg);

                }
});
 }
}
</script>
<!-- endbuild -->
</body>
</html>
