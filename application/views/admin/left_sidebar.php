<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar"> 
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree"> 
				<li class="<?php if($_FunctionName=='dashboard') echo "active";?>"><a href="<?=base_url();?>admin/dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li> 
		<div class="sidebar-footer">
		<!-- item-->
		<a href="<?=base_url();?>admin/myprofile" class="link" data-toggle="tooltip" title="My Profile" data-original-title="Settings"><i class="fa fa-user"></i></a> 
		<a href="<?=base_url();?>admin/logout" class="link" data-toggle="tooltip" title="Logout" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
	</div>
</aside>
<!-- END LEFT SIDEBAR -->