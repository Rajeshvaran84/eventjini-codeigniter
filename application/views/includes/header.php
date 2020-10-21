<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Management</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="<?php echo base_url(); ?>" class="logo">
				<span class="logo-lg">User Management</span>
			</a>
			
			<nav class="navbar navbar-static-top" role="navigation">
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/>
								<span class="hidden-xs"><?php echo $name; ?></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
									<p><?php echo $name; ?></p>
								</li>
								
								<li class="user-footer">
									<div class="pull-right">
										<a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu" data-widget="tree">
				<li class="header">MAIN NAVIGATION</li>
				<li>
				<a href="<?php echo base_url(); ?>dashboard">
				<i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
				</a>
				</li>
				<?php
				if($role == 1)
				{
				?>
				<li>
					<a href="<?php echo base_url(); ?>addSettings" >
						<i class="fa fa-thumb-tack"></i>
						<span>User Role Settings</span>
					</a>
				</li>
				<li class="header">Customers</li>
				<li>
					<a href="#" >
						<i class="fa fa-thumb-tack"></i>
						<span>Define Customers</span>
					</a>
				</li>
				<li>
					<a href="#" >
						<i class="fa fa-thumb-tack"></i>
						<span>Modify Customers</span>
					</a>
				</li>
				<li>
					<a href="#" >
						<i class="fa fa-thumb-tack"></i>
						<span>Delete Customers</span>
					</a>
				</li>
				<li class="header">Suppliers</li>
				<li>
					<a href="#" >
						<i class="fa fa-thumb-tack"></i>
						<span>Define Suppliers</span>
					</a>
				</li>
				<li>
					<a href="#" >
						<i class="fa fa-thumb-tack"></i>
						<span>Modify Suppliers</span>
					</a>
				</li>
				<li>
					<a href="#" >
						<i class="fa fa-thumb-tack"></i>
						<span>Delete Suppliers</span>
					</a>
				</li>
				<?php
				}
				if($role != 1)
				{
					foreach ($menudata as $key => $value) 
					{
				?>
				<li>
					<a href="#" >
						<i class="fa fa-thumb-tack"></i>
						<span><?php echo $value->menuname; ?></span>
					</a>
				</li>
				<?php 
					}
				}
				?>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>