<?php
include_once 'html/api/config/database.php';
session_start();
if(isset($_SESSION['username']))
{
	header('location:html/dashboard.php');
}

if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['user_pass'];

	$qry="SELECT password FROM `admin_account` WHERE `email`='$username';";
	$run=mysqli_query($connection,$qry);
	if(mysqli_num_rows($run) > 0)  
           {  
                while($row = mysqli_fetch_array($run))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          //return true;  
                          $_SESSION["username"] = $username;  
                          header("location:html/dashboard.php");  
                     }  
                     else  
                     {  
                          //return false;  
                          echo '<script>alert("Wrong User Details")</script>';  
                     }  
                }  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
}

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
  <link rel="stylesheet" href="assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="assets/styles/font.css" type="text/css" />
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->
  <div class="center-block w-xxl w-auto-xs p-y-md">
    <div class="navbar">
      <div class="pull-center">
        <div ui-include="'../views/blocks/navbar.brand.html'"></div>
      </div>
    </div>
    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
      <div class="m-b text-sm text-center">
        Sign in with your SRJ Account
      </div>
      <form name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="md-form-group float-label">
          <input type="text" class="md-input" name="username"  required>
          <label>Username</label>
        </div>
        <div class="md-form-group float-label">
          <input type="password" class="md-input" name="user_pass"  required>
          <label>Password</label>
        </div>      
        <div class="m-b-md">        
          <label class="md-check">
            <input type="checkbox"><i class="primary"></i> Keep me signed in
          </label>
        </div>
        <button type="submit" name="login" class="btn primary btn-block p-x-md">Sign in</button>
      </form>
    </div>

    <div class="p-v-lg text-center">
      <div class="m-b"><a ui-sref="access.forgot-password" href="forgot-password.html" class="text-primary _600">Forgot password?</a></div>
      <div>Do not have an account? <a ui-sref="access.signup" href="signup.html" class="text-primary _600">Sign up</a></div>
    </div>
  </div>

<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="../libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="../libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
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
<!-- endbuild -->
</body>
</html>
