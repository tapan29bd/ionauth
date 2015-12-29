<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<base href="<?php echo base_url(); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
	<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
	<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
	<link href="assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css">
	<link href="assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
	<!-- END PAGE LEVEL PLUGIN STYLES -->
	<!-- BEGIN PAGE STYLES -->
	<link href="assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE STYLES -->
	<!-- BEGIN THEME STYLES -->
	<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
	<link href="assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
	<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css">
	<link href="assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
	<link href="assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
	<link href="assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
	<!-- BEGIN HEADER -->
	<div class="page-header">
		<!-- BEGIN HEADER TOP -->
		<div class="page-header-top">
			<div class="container">
				<!-- BEGIN LOGO -->
				<div class="page-logo">
					<a href="dashboard"><img src="assets/images/logo_green.png" alt="logo" class="logo-default"></a>
				</div>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="menu-toggler"></a>
				<!-- END RESPONSIVE MENU TOGGLER -->
				<!-- BEGIN TOP NAVIGATION MENU -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">

						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown dropdown-user dropdown-dark">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<img alt="" class="img-circle" src="assets/admin/layout3/img/avatar9.jpg">
								<span class="username username-hide-mobile">Nick</span>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="extra_profile.html"><i class="icon-user"></i> My Profile </a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="auth/logout"><i class="icon-key"></i> Log Out </a>
								</li>
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
				</div>
				<!-- END TOP NAVIGATION MENU -->
			</div>
		</div>
		<!-- END HEADER TOP -->
		<!-- BEGIN HEADER MENU -->
		<div class="page-header-menu">
			<div class="container">
				<!-- BEGIN MEGA MENU -->
				<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
				<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
				<div class="hor-menu ">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="index.html">Dashboard</a>
						</li>
						<li class="menu-dropdown mega-menu-dropdown ">
							<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
								Features <i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu" style="min-width: 710px">
								<li>
									<div class="mega-menu-content">
										<div class="row">
											<div class="col-md-4">
												<ul class="mega-menu-submenu">
													<li>
														<h3>eCommerce</h3>
													</li>
													<li>
														<a href="ecommerce_index.html" class="iconify"><i class="icon-home"></i>eCommerce </a>
													</li>
													<li>
														<a href="ecommerce_orders.html" class="iconify"><i class="icon-basket"></i>Manage Orders </a>
													</li>
													<li>
														<a href="ecommerce_orders_view.html" class="iconify"><i class="icon-tag"></i>Order View </a>
													</li>
													<li>
														<a href="ecommerce_products.html" class="iconify"><i class="icon-handbag"></i>Manage Products </a>
													</li>
													<li>
														<a href="ecommerce_products_edit.html" class="iconify"><i class="icon-pencil"></i>Product Edit </a>
													</li>
												</ul>
											</div>
											<div class="col-md-4">
												<ul class="mega-menu-submenu">
													<li>
														<h3>Layouts</h3>
													</li>
													<li>
														<a href="layout_fluid.html" class="iconify"><i class="icon-cursor-move"></i>Fluid Layout </a>
													</li>
													<li>
														<a href="layout_mega_menu_fixed.html" class="iconify"><i class="icon-pin"></i>Fixed Mega Menu </a>
													</li>
													<li>
														<a href="layout_top_bar_fixed.html" class="iconify"><i class="icon-bar-chart"></i>Fixed Top Bar </a>
													</li>
													<li>
														<a href="layout_light_header.html" class="iconify"><i class="icon-paper-plane"></i>Light Header Dropdowns </a>
													</li>
													<li>
														<a href="layout_blank_page.html" class="iconify"><i class="icon-doc"></i>Blank Page Layout </a>
													</li>
												</ul>
											</div>
											<div class="col-md-4">
												<ul class="mega-menu-submenu">
													<li>
														<h3>More Layouts</h3>
													</li>
													<li>
														<a href="layout_click_dropdowns.html" class="iconify"><i class="icon-speech"></i>Click vs. Hover Dropdowns </a>
													</li>
													<li>
														<a href="layout_fontawesome_icons.html" class="iconify"><i class="icon-link"></i>Layout with Fontawesome </a>
													</li>
													<li>
														<a href="layout_glyphicons.html" class="iconify"><i class="icon-settings"></i>Layout with Glyphicon </a>
													</li>
													<li>
														<a href="layout_language_bar.html" class="iconify"><i class="icon-globe"></i>Language Switch Bar </a>
													</li>
													<li>
														<a href="layout_disabled_menu.html" class="iconify"><i class=" icon-lock"></i>Disabled Menu Links </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="menu-dropdown classic-menu-dropdown ">
							<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">Extra <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu pull-left">
								<li class=" dropdown-submenu">
									<a href=":;"><i class="icon-briefcase"></i>Data Tables </a>
									<ul class="dropdown-menu">
										<li class=" "><a href="table_basic.html">Basic Datatables </a></li>
										<li class=" ">
											<a href="table_tree.html">Tree Datatables </a>
										</li>
										<li class=" ">
											<a href="table_responsive.html">Responsive Datatables </a>
										</li>
										<li class=" ">
											<a href="table_managed.html">Managed Datatables </a>
										</li>
										<li class=" ">
											<a href="table_editable.html">Editable Datatables </a>
										</li>
										<li class=" ">
											<a href="table_advanced.html">Advanced Datatables </a>
										</li>
										<li class=" ">
											<a href="table_ajax.html">Ajax Datatables </a>
										</li>
									</ul>
								</li>
								<li class=" dropdown-submenu">
									<a href=":;"><i class="icon-wallet"></i>Portlets </a>
									<ul class="dropdown-menu">
										<li class=" ">
											<a href="portlet_general.html">General Portlets </a>
										</li>
										<li class=" ">
											<a href="portlet_general2.html">New Portlets #1 <span class="badge badge-roundless badge-danger">new</span></a>
										</li>
										<li class=" ">
											<a href="portlet_general3.html">
												New Portlets #2 <span class="badge badge-roundless badge-danger">new</span>
											</a>
										</li>
										<li class=" ">
											<a href="portlet_ajax.html">Ajax Portlets </a>
										</li>
										<li class=" ">
											<a href="portlet_draggable.html">Draggable Portlets </a>
										</li>
									</ul>
								</li>
								<li class=" dropdown-submenu">
									<a href=":;">
										<i class="icon-bar-chart"></i>Charts </a>
										<ul class="dropdown-menu">
											<li class=" ">
												<a href="charts_amcharts.html">amChart </a>
											</li>
											<li class=" ">
												<a href="charts_flotcharts.html">Flotchart </a>
											</li>
										</ul>
									</li>
									<li class=" dropdown-submenu">
										<a href=":;"><i class="icon-pointer"></i>Maps </a>
										<ul class="dropdown-menu">
											<li class=" ">
												<a href="maps_google.html">Google Maps </a>
											</li>
											<li class=" ">
												<a href="maps_vector.html">Vector Maps </a>
											</li>
										</ul>
									</li>
									<li class=" dropdown-submenu">
										<a href=":;"><i class="icon-puzzle"></i>Multi Level </a>
										<ul class="dropdown-menu">
											<li class=" ">
												<a href="javascript:;"><i class="icon-settings"></i>Item 1 </a>
											</li>
											<li class=" ">
												<a href="javascript:;"><i class="icon-user"></i>Item 2 </a>
											</li>
											<li class=" ">
												<a href="javascript:;"><i class="icon-globe"></i>Item 3 </a>
											</li>
											<li class=" dropdown-submenu">
												<a href="#"><i class="icon-folder"></i>Sub Items </a>
												<ul class="dropdown-menu">
													<li class=" ">
														<a href="javascript:;">Item 1 </a>
													</li>
													<li class=" ">
														<a href="javascript:;">Item 2 </a>
													</li>
													<li class=" ">
														<a href="javascript:;">Item 3 </a>
													</li>
													<li class=" ">
														<a href="javascript:;">Item 4 </a>
													</li>
												</ul>
											</li>
											<li class=" ">
												<a href="javascript:;"><i class="icon-share"></i>Item 4 </a>
											</li>
											<li class=" ">
												<a href="javascript:;"><i class="icon-bar-chart"></i>Item 5 </a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- END MEGA MENU -->
				</div>
			</div>
			<!-- END HEADER MENU -->
		</div>
		<!-- END HEADER -->
		<!-- BEGIN PAGE CONTAINER -->
		<div class="page-container">
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
				<div class="container">
					<!-- BEGIN PAGE BREADCRUMB -->
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<a href="#">Home</a><i class="fa fa-circle"></i>
						</li>
						<li class="active">
							Dashboard
						</li>
					</ul>
					<!-- END PAGE BREADCRUMB -->
					<!-- BEGIN PAGE CONTENT INNER -->
					<div class="row margin-top-10">
						<div class="col-md-6 col-sm-12">
							<!-- BEGIN PORTLET-->
							<div class="portlet light ">
								<div class="portlet-title">
									<div class="caption caption-md">
										<i class="icon-bar-chart theme-font hide"></i>
										<span class="caption-subject theme-font bold uppercase">Sales Summary</span>
										<span class="caption-helper hide">weekly stats...</span>
									</div>
									<div class="actions">
										<div class="btn-group btn-group-devided" data-toggle="buttons">
											<label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
												<input type="radio" name="options" class="toggle" id="option1">Today
											</label>
											<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
												<input type="radio" name="options" class="toggle" id="option2">Week
											</label>
											<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
												<input type="radio" name="options" class="toggle" id="option2">Month
											</label>
										</div>
									</div>
								</div>
								<div class="portlet-body">
									<div class="row list-separated">
										<div class="col-md-3 col-sm-3 col-xs-6">
											<div class="font-grey-mint font-sm">
												Total Sales
											</div>
											<div class="uppercase font-hg font-red-flamingo">
												13,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-6">
											<div class="font-grey-mint font-sm">
												Revenue
											</div>
											<div class="uppercase font-hg theme-font">
												4,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-6">
											<div class="font-grey-mint font-sm">
												Expenses
											</div>
											<div class="uppercase font-hg font-purple">
												11,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-6">
											<div class="font-grey-mint font-sm">
												Growth
											</div>
											<div class="uppercase font-hg font-blue-sharp">
												9,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</div>
									</div>
									<ul class="list-separated list-inline-xs hide">
										<li>
											<div class="font-grey-mint font-sm">
												Total Sales
											</div>
											<div class="uppercase font-hg font-red-flamingo">
												13,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</li>
										<li>
										</li>
										<li class="border">
											<div class="font-grey-mint font-sm">
												Revenue
											</div>
											<div class="uppercase font-hg theme-font">
												4,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</li>
										<li class="divider">
										</li>
										<li>
											<div class="font-grey-mint font-sm">
												Expenses
											</div>
											<div class="uppercase font-hg font-purple">
												11,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</li>
										<li class="divider">
										</li>
										<li>
											<div class="font-grey-mint font-sm">
												Growth
											</div>
											<div class="uppercase font-hg font-blue-sharp">
												9,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</li>
									</ul>
									<div id="sales_statistics" class="portlet-body-morris-fit morris-chart" style="height: 260px">
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
						<div class="col-md-6 col-sm-12">
							<!-- BEGIN PORTLET-->
							<div class="portlet light ">
								<div class="portlet-title">
									<div class="caption caption-md">
										<i class="icon-bar-chart theme-font hide"></i>
										<span class="caption-subject theme-font bold uppercase">Member Activity</span>
										<span class="caption-helper hide">weekly stats...</span>
									</div>
									<div class="actions">
										<div class="btn-group btn-group-devided" data-toggle="buttons">
											<label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
												<input type="radio" name="options" class="toggle" id="option1">Today
											</label>
											<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
												<input type="radio" name="options" class="toggle" id="option2">Week
											</label>
											<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
												<input type="radio" name="options" class="toggle" id="option2">Month
											</label>
										</div>
									</div>
								</div>
								<div class="portlet-body">
									<div class="row number-stats margin-bottom-30">
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="stat-left">
												<div class="stat-chart">
													<!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
													<div id="sparkline_bar"></div>
												</div>
												<div class="stat-number">
													<div class="title">
														Total
													</div>
													<div class="number">
														2460
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="stat-right">
												<div class="stat-chart">
													<!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
													<div id="sparkline_bar2"></div>
												</div>
												<div class="stat-number">
													<div class="title">
														New
													</div>
													<div class="number">
														719
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="table-scrollable table-scrollable-borderless">
										<table class="table table-hover table-light">
											<thead>
												<tr class="uppercase">
													<th colspan="2">
														MEMBER
													</th>
													<th>
														Earnings
													</th>
													<th>
														CASES
													</th>
													<th>
														CLOSED
													</th>
													<th>
														RATE
													</th>
												</tr>
											</thead>
											<tr>
												<td class="fit">
													<img class="user-pic" src="assets/admin/layout3/img/avatar4.jpg">
												</td>
												<td>
													<a href="javascript:;" class="primary-link">Brain</a>
												</td>
												<td>
													$345
												</td>
												<td>
													45
												</td>
												<td>
													124
												</td>
												<td>
													<span class="bold theme-font">80%</span>
												</td>
											</tr>
											<tr>
												<td class="fit">
													<img class="user-pic" src="assets/admin/layout3/img/avatar5.jpg">
												</td>
												<td>
													<a href="javascript:;" class="primary-link">Nick</a>
												</td>
												<td>
													$560
												</td>
												<td>
													12
												</td>
												<td>
													24
												</td>
												<td>
													<span class="bold theme-font">67%</span>
												</td>
											</tr>
											<tr>
												<td class="fit">
													<img class="user-pic" src="assets/admin/layout3/img/avatar6.jpg">
												</td>
												<td>
													<a href="javascript:;" class="primary-link">Tim</a>
												</td>
												<td>
													$1,345
												</td>
												<td>
													450
												</td>
												<td>
													46
												</td>
												<td>
													<span class="bold theme-font">98%</span>
												</td>
											</tr>
											<tr>
												<td class="fit">
													<img class="user-pic" src="assets/admin/layout3/img/avatar7.jpg">
												</td>
												<td>
													<a href="javascript:;" class="primary-link">Tom</a>
												</td>
												<td>
													$645
												</td>
												<td>
													50
												</td>
												<td>
													89
												</td>
												<td>
													<span class="bold theme-font">58%</span>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
					</div>
					<!-- END PAGE CONTENT INNER -->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
		</div>
		<!-- END PAGE CONTAINER -->
		<!-- BEGIN FOOTER -->
		<div class="page-footer">
			<div class="container">
				2015 &copy; InnovativeBD
			</div>
		</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
		<!-- END FOOTER -->
		<!-- BEGIN JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
		<!-- BEGIN CORE PLUGINS -->
	<!--[if lt IE 9]>
	<script src="assets/global/plugins/respond.min.js"></script>
	<script src="assets/global/plugins/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
	<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
	<script src="assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
	<script src="assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
	<script src="assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
	<script src="assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
	<script src="assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {
			Metronic.init(); // init metronic core componets
	   		Layout.init(); // init layout
	   		Demo.init(); // init demo(theme settings page)
	   		Index.init(); // init index page
	   		Tasks.initDashboardWidget(); // init tash dashboard widget
	   	});
	   </script>
	   <!-- END JAVASCRIPTS -->
	</body>
	<!-- END BODY -->
	</html>