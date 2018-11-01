<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.php?action=login");  
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
               <div class="dropdown-menu dropdown-menu-overlay pull-right">
                 <a class="dropdown-item" ui-sref="app.inbox.list">
                  <span>Inbox</span>
                  <span class="label warn m-l-xs">3</span>
                </a>
                <a class="dropdown-item" ui-sref="app.page.profile">
               <span>Profile</span>
               </a>
             <a class="dropdown-item" ui-sref="app.page.setting">
             <span>Settings</span>
             <span class="label primary m-l-xs">3/9bb</span>
            </a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" ui-sref="app.docs">
    Need help?
  </a>
  <a href="logout.php" class="dropdown-item" ui-sref="access.signin">Sign out</a>
</div>

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
          &copy; Copyright <strong>SRJ</strong> <span class="hidden-xs-down">- Built with Love v1.1.3</span>
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
        <div class="nav">
          <a class="nav-link" href="../">About</a>
        </div>
      </div>
    </div>
    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->
<div class="p-a white lt box-shadow">
	<div class="row">
		<div class="col-sm-6">
			<h4 class="mb-0 _300">Welcome to SRJ</h4>
			<small class="text-muted">Su-Raj Inter Gold</small>
		</div>
		<div class="col-sm-6 text-sm-right">
			<div class="m-y-sm">
				<span class="m-r-sm">Start manage:</span>
				<div class="btn-group dropdown">
		          <button class="btn white btn-sm ">Projects</button>
		          <button class="btn white btn-sm dropdown-toggle" data-toggle="dropdown"></button>
		          <div class="dropdown-menu dropdown-menu-scale pull-right">
		            <a class="dropdown-item" href>Members</a>
		            <a class="dropdown-item" href>Tasks</a>
		            <a class="dropdown-item" href>Inbox</a>
		            <div class="dropdown-divider"></div>
		            <a class="dropdown-item">Profile</a>
		          </div>
		        </div>
	        </div>
		</div>
	</div>
</div>
<div class="padding">
	<div class="row">
		<div class="col-xs-12 col-sm-4">
	        <div class="box p-a">
	          <div class="pull-left m-r">
	            <span class="w-48 rounded  accent">
	              <i class="material-icons">&#xe151;</i>
	            </span>
	          </div>
	          <div class="clear">
	            <h4 class="m-0 text-lg _300"><a href>125 <span class="text-sm">Emails</span></a></h4>
	            <small class="text-muted">6 new arrivals.</small>
	          </div>
	        </div>
	    </div>
	    <div class="col-xs-6 col-sm-4">
	        <div class="box p-a">
	          <div class="pull-left m-r">
	            <span class="w-48 rounded primary">
	              <i class="material-icons">&#xe54f;</i>
	            </span>
	          </div>
	          <div class="clear">
	            <h4 class="m-0 text-lg _300"><a href>40 <span class="text-sm">Quotations</span></a></h4>
	            <small class="text-muted">38 open.</small>
	          </div>
	        </div>
	    </div>
	    <div class="col-xs-6 col-sm-4">
	        <div class="box p-a">
	          <div class="pull-left m-r">
	            <span class="w-48 rounded warn">
	              <i class="material-icons">&#xe8d3;</i>
	            </span>
	          </div>
	          <div class="clear">
	            <h4 class="m-0 text-lg _300"><a href>600 <span class="text-sm">Users</span></a></h4>
	            <small class="text-muted">632 vips.</small>
	          </div>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-4">
	        <div class="box">
	          <div class="box-header">
	            <h3>Quotations monitor</h3>
	            <small>Calculated in last 30 days</small>
	          </div>
	          <div class="box-tool">
		        <ul class="nav">
		          <li class="nav-item inline">
		            <a class="nav-link">
		              <i class="material-icons md-18">&#xe863;</i>
		            </a>
		          </li>
		          <li class="nav-item inline dropdown">
		            <a class="nav-link" data-toggle="dropdown">
		              <i class="material-icons md-18">&#xe5d4;</i>
		            </a>
		            <div class="dropdown-menu dropdown-menu-scale pull-right">
		              <a class="dropdown-item" href>This week</a>
		              <a class="dropdown-item" href>This month</a>
		              <a class="dropdown-item" href>This week</a>
		              <div class="dropdown-divider"></div>
		              <a class="dropdown-item">Today</a>
		            </div>
		          </li>
		        </ul>
		      </div>
	          <div class="box-body">
	          	<div class="text-center m-b">
	          		<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-sm white">
					    <input type="radio" name="options" autocomplete="off"> Month
					  </label>
					  <label class="btn btn-sm white">
					    <input type="radio" name="options" autocomplete="off"> Day
					  </label>
					</div>
	          	</div>
	            <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { data: [[1, 3.6], [2, 3.5], [3, 6], [4, 4], [5, 4.3], [6, 3.5], [7, 3.6]], 
	                  points: { show: true, radius: 0}, 
                  	  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 1 }
	                },
	                { data: [[1, 3], [2, 2.6], [3, 3.2], [4, 3], [5, 3.5], [6, 3], [7, 3.5]], 
	                  points: { show: true, radius: 0}, 
                  	  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 1 } 
	                },
	                { data: [[1, 2], [2, 1.6], [3, 2.4], [4, 2.1], [5, 1.7], [6, 1.5], [7, 1.7]], 
	                  points: { show: true, radius: 0}, 
                  	  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 1 } 
	                }
	              ], 
	              {
	                colors: ['#a88add','#0cc2aa','#fcc100'],
	                series: { shadowSize: 3 },
	                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: true, font: { color: '#ccc' }},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height:188px" >
	            </div>
	          </div>
	        </div>
	    </div>
	    <div class="col-sm-6 col-md-4">
	        <div class="box">
	          <div class="box-header">
	            <h3>Tasks</h3>
	            <small>Calculated in last 7 days</small>
	          </div>
	          <div class="box-tool">
		        <ul class="nav">
		          <li class="nav-item inline">
		            <a class="nav-link">
		              <i class="material-icons md-18">&#xe863;</i>
		            </a>
		          </li>
		          <li class="nav-item inline dropdown">
		            <a class="nav-link" data-toggle="dropdown">
		              <i class="material-icons md-18">&#xe5d4;</i>
		            </a>
		            <div class="dropdown-menu dropdown-menu-scale pull-right">
		              <a class="dropdown-item" href>This week</a>
		              <a class="dropdown-item" href>This month</a>
		              <a class="dropdown-item" href>This week</a>
		              <div class="dropdown-divider"></div>
		              <a class="dropdown-item">Today</a>
		            </div>
		          </li>
		        </ul>
		      </div>
	          <div class="box-body">
	          	<div class="text-center m-b">
	          		<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-sm rounded white">
					    <input type="radio" name="options" autocomplete="off"> This Month
					  </label>
					  <label class="btn btn-sm rounded white">
					    <input type="radio" name="options" autocomplete="off"> This Week
					  </label>
					</div>
	          	</div>
	            <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { data: [[1, 2], [2, 4], [3, 5], [4, 7], [5, 6], [6, 4], [7, 5], [8, 4]] }
	              ], 
	              {
	                bars: { show: true, fill: true,  barWidth: 0.25, lineWidth: 1, fillColor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, align: 'center' },
	                colors: ['#a88add'],
	                series: { shadowSize: 3 },
	                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: true, font: { color: '#ccc' }},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height:188px" >
	            </div>
	          </div>
	        </div>
	    </div>
	    <div class="col-sm-12 col-md-4">
	    	<div class="box">
	          <div class="box-header">
	            <h3>Sales</h3>
	            <small>Calculated in last 7 days</small>
	          </div>
	          <div class="box-tool">
		        <ul class="nav">
		          <li class="nav-item inline">
		            <a class="nav-link">
		              <i class="material-icons md-18">&#xe863;</i>
		            </a>
		          </li>
		          <li class="nav-item inline dropdown">
		            <a class="nav-link" data-toggle="dropdown">
		              <i class="material-icons md-18">&#xe5d4;</i>
		            </a>
		            <div class="dropdown-menu dropdown-menu-scale pull-right">
		              <a class="dropdown-item" href>This week</a>
		              <a class="dropdown-item" href>This month</a>
		              <a class="dropdown-item" href>This week</a>
		              <div class="dropdown-divider"></div>
		              <a class="dropdown-item">Today</a>
		            </div>
		          </li>
		        </ul>
		      </div>
	          <div class="box-body">
	          	<div class="text-center m-b">
	          		<div class="btn-group" data-toggle="buttons">
					  <label class="btn btn-sm rounded white">
					    <input type="radio" name="options" autocomplete="off"> Market
					  </label>
					  <label class="btn btn-sm rounded white">
					    <input type="radio" name="options" autocomplete="off"> Referral
					  </label>
					</div>
	          	</div>
		    	<div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { data: [[3, 1], [2, 2], [6, 3], [5, 4], [7, 5]] }
	              ], 
	              {
	                bars: { horizontal: true, show: true, fill: true,  barWidth: 0.3, lineWidth: 1, fillColor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, align: 'center' },
	                colors: ['#0cc2aa'],
	                series: { shadowSize: 3 },
	                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: true, font: { color: '#ccc' }},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height:188px" >
	            </div>
	          </div>
	        </div>
	    </div>
	</div>

	<div class="row">
	    <div class="col-sm-6 col-md-4">
	        <div class="box">
	            <div class="box-header">
	              <h3>Members</h3>
	            </div>
	            <ul class="list no-border p-b">
	              <li class="list-item">
	                <a herf class="list-left">
	                	<span class="w-40 avatar">
		                  <img src="../assets/images/a4.jpg" alt="...">
		                  <i class="on b-white bottom"></i>
	                    </span>
	                </a>
	                <div class="list-body">
	                  <div><a href>Chris Fox</a></div>
	                  <small class="text-muted text-ellipsis">Designer, Blogger</small>
	                </div>
	              </li>
	              <li class="list-item">
	                <a herf class="list-left">
	                  <span class="w-40 avatar">
		                  <img src="../assets/images/a5.jpg" alt="...">
		                  <i class="on b-white bottom"></i>
	                  </span>
	                </a>
	                <div class="list-body">
	                  <div><a href>Mogen Polish</a></div>
	                  <small class="text-muted text-ellipsis">Writter, Mag Editor</small>
	                </div>
	              </li>
	              <li class="list-item">
	                <a herf class="list-left">
	                  <span class="w-40 avatar">
		                  <img src="../assets/images/a6.jpg" alt="...">
		                  <i class="away b-white bottom"></i>
	                  </span>
	                </a>
	                <div class="list-body">
	                  <div><a href>Joge Lucky</a></div>
	                  <small class="text-muted text-ellipsis">Art director, Movie Cut</small>
	                </div>
	              </li>
	              <li class="list-item">
	                <a herf class="list-left">
	                  <span class="w-40 avatar">
		                  <img src="../assets/images/a7.jpg" alt="...">
		                  <i class="busy b-white bottom"></i>
	                  </span>
	                </a>
	                <div class="list-body">
	                  <div><a href>Folisise Chosielie</a></div>
	                  <small class="text-muted text-ellipsis">Musician, Player</small>
	                </div>
	              </li>
	              <li class="list-item">
	                <a herf class="list-left">
	                	<span class="w-40 avatar success">
		                  <span>P</span>
		                  <i class="away b-white bottom"></i>
		                </span>
	                </a>
	                <div class="list-body">
	                  <div><a href>Peter</a></div>
	                  <small class="text-muted text-ellipsis">Musician, Player</small>
	                </div>
	              </li>
	            </ul>
	        </div>
	    </div>
	    <div class="col-sm-6 col-md-4">
			<div class="box">
				<div class="box-header">
					<h3>Tasks</h3>
					<small>20 finished, 5 remaining</small>
				</div>
				<div class="box-tool">
			        <ul class="nav">
			          <li class="nav-item inline dropdown">
			            <a class="nav-link text-muted p-x-xs" data-toggle="dropdown">
			              <i class="fa fa-ellipsis-v"></i>
			            </a>
			            <div class="dropdown-menu dropdown-menu-scale pull-right">
			              <a class="dropdown-item" href>New task</a>
			              <a class="dropdown-item" href>Make all finished</a>
			              <a class="dropdown-item" href>Make all unfinished</a>
			              <div class="dropdown-divider"></div>
			              <a class="dropdown-item">Settings</a>
			            </div>
			          </li>
			        </ul>
			    </div>
				<div class="box-body">
				  	<div class="streamline b-l m-l">
				        <div class="sl-item b-success">
				          <div class="sl-icon">
				            <i class="fa fa-check"></i>
				          </div>
				          <div class="sl-content">
				            <div class="sl-date text-muted">8:30</div>
				            <div>Call to customer <a href class="text-info">Jacob</a> and discuss the detail about the AP project.</div>
				          </div>
				        </div>
				        <div class="sl-item b-info">
				          <div class="sl-content">
				            <div class="sl-date text-muted">Sat, 5 Mar</div>
				            <div>Prepare for presentation</div>
				          </div>
				        </div>
				        <div class="sl-item b-warning">
				          <div class="sl-content">
				            <div class="sl-date text-muted">Sun, 11 Feb</div>
				            <div><a href class="text-info">Jessi</a> assign you a task <a href class="text-info">Mockup Design</a>.</div>
				          </div>
				        </div>
				    </div>
				</div>
			  	<div class="box-footer">
			  		<a href class="btn btn-sm warn text-u-c pull-right">Add one</a>
			  		<a href class="btn btn-sm white text-u-c">More</a>
			  	</div>
		  	</div>
		</div>
	    <div class="col-sm-12 col-md-4">
	    	<div class="box">
				<div class="box-header">
					<span class="label success pull-right">5</span>
					<h3>Activity</h3>
					<small>10 members update their activies.</small>
				</div>
				<div class="box-body">
				  	<div class="streamline b-l m-b m-l">
		              <div class="sl-item">
		                <div class="sl-left">
		                  <img src="../assets/images/a2.jpg" class="img-circle">
		                </div>
		                <div class="sl-content">
		                  <a href class="text-info">Louis Elliott</a><span class="m-l-sm sl-date">5 min ago</span>
		                  <div>assign you a task <a href class="text-info">Mockup Design</a>.</div>
		                </div>
		              </div>
		              <div class="sl-item">
		                <div class="sl-left">
		                  <img src="../assets/images/a5.jpg" class="img-circle">
		                </div>
		                <div class="sl-content">
		                  <a href class="text-info">Terry Moore</a><span class="m-l-sm sl-date">10 min ago</span>
		                  <div>Follow up to close deal</div>
		                </div>
		              </div>
		              <div class="sl-item">
		                <div class="sl-left">
		                  <img src="../assets/images/a8.jpg" class="img-circle">
		                </div>
		                <div class="sl-content">
		                  <a href class="text-info">Walter Paler</a><span class="m-l-sm sl-date">1 hour ago</span>
		                  <div>was added to Repo</div>
		                </div>
		              </div>
		            </div>
		            <a href class="btn btn-sm white text-u-c m-y-xs">Load More</a>
		  		</div>
			</div>
	    </div>
	</div>
</div>

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
