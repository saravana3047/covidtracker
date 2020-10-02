<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html-templates.multipurposethemes.com/bootstrap-4/admin/minimaladmin-light/pages/forms/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Dec 2017 04:53:06 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?=base_url();?>frontend_assets/img/favicon.png">

    <title>Covid19Tracker - Admin</title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?=base_url();?>admin_assets/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?=base_url();?>admin_assets/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url();?>admin_assets/assets/vendor_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="<?=base_url();?>admin_assets/assets/vendor_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?=base_url();?>admin_assets/plugin/validateengine/validationEngine.jquery.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url();?>admin_assets/css/master_style.css">

	<!-- minimal_admin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?=base_url();?>admin_assets/css/skins/_all-skins.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugin/jquery-ui/jquery-ui.css"> 
</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url();?>admin" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Covid19Tracker</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Covid19Tracker</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php echo $_SESSION['adminData']['admin_firstname'].' '.$_SESSION['adminData']['admin_lastname'];?>
            </a>
            <ul class="dropdown-menu scale-up"> 
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters"> 
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer"> 
                <div class="pull-right">
                  <a href="<?=base_url();?>admin/logout" class="btn btn-block btn-danger"><i class="ion ion-power"></i> Log Out</a>
                </div>
			  </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>