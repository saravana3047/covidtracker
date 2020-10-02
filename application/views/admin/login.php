<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Political Analysis Admin Panel</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="icon" href="<?=base_url();?>frontend_assets/img/favicon.png">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?=base_url();?>admin_assets/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?=base_url();?>admin_assets/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url();?>admin_assets/assets/vendor_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="<?=base_url();?>admin_assets/assets/vendor_components/Ionicons/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url();?>admin_assets/css/master_style.css">
	<link rel="stylesheet" href="<?=base_url();?>admin_assets/plugin/validateengine/validationEngine.jquery.css">

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
</head>

<body class="hold-transition login-page">
	<!-- WRAPPER -->
	<div class="login-box">
		<div class="login-logo">
			<a href="<?=base_url();?>admin"><img src="<?=base_url();?>frontend_assets/img/demo/logo.png"/></a>
		</div>
			<!--<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center" style="    background: #e8eff9;"><a style="    font-size: 30px;    color: #fff;" href="<?php echo base_url();?>admin">
									<img src="http://avportal.testersweb.com/matabbooks/frontend_assets/images/logo.png" /></a></div>-->
									 <!-- /.login-logo -->
									<div class="login-box-body">
									<p class="login-box-msg">Login to your account</p>
									
							<?php if(isset($Error) && $Error !=''){?>
							<div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<i class="fa fa-check"></i> <?php echo $Error;?>
							</div>
							<?php } ?><!--otpProcess-->
							<form class="form-element" method="post" name="adminLogin" id="adminLogin" action="<?php echo base_url();?>admin/login">
								<div class="form-group has-feedback">
									<input name="admin_email" maxlength="100" type="text" class="form-control validate[required,custom[email]]" id="signin-email" 
									value="" placeholder="Email" data-errormessage-value-missing="Please Enter Email ID" />
									<span class="ion ion-email form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">								
									<input type="password" maxlength="50" name="admin_password" class="form-control validate[required]" id="signin-password" 
									value="" placeholder="Password" data-errormessage-value-missing="Please Enter Password" />
									<span class="ion ion-locked form-control-feedback"></span>
								</div>
								<div class="row"> 
								<!-- /.col -->
								<div class="col-12 text-center">
								<button type="submit" class="btn btn-info btn-block btn-flat margin-top-10">LOGIN</button> 
								 </div>
								<!-- /.col -->
								</div>
							</form>
						</div>
					</div>
					<!--<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Matab Books</h1>
							<p>E-Book Shop</p>
						</div>
					</div>-->
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>
	<script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?=base_url();?>assets/plugin/validateengine/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?=base_url();?>assets/plugin/validateengine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
	<script>
		jQuery(document).ready(function(){  
			jQuery("#adminLogin").validationEngine({ promptPosition: "topLeft" });
		});
	</script>
	<script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/scripts/klorofil-common.js"></script>
</html>
