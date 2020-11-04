<?php /* Template Name: Dashboard Template */ 
session_start();
wp_head();

include get_template_directory().'/API/Employer.php';
include get_template_directory().'/API/Utility.php';

// user object which holds all the user info
$current_user = wp_get_current_user();
$username = $current_user->user_login;
$employer_id = $current_user->id;



//database connection
$mysqli = new mysqli("localhost", "finalpeo_wp763", "Sp)s7o5J1.", "finalpeo_wp763");
$checkuserSql = "SELECT * FROM `ps_users` WHERE user_login='$username' AND user_pass='$password'";



?>

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="utf-8" />
	<title>People Count</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="apple-touch-icon" href="/wp-content/themes/dashboard-child/pages/ico/60.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/dashboard-child/pages/ico/76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/dashboard-child/pages/ico/120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/dashboard-child/pages/ico/152.png">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	
	
	
	
	


	

</head>

<body class="fixed-header menu-pin menu-behind">
	<!-- BEGIN SIDEBAR -->
	<!-- BEGIN SIDEBPANEL-->
	<nav class="page-sidebar" data-pages="sidebar">
		<!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
		<div class="sidebar-overlay-slide from-top" id="appMenu"> </div>
		<!-- END SIDEBAR MENU TOP TRAY CONTENT-->
		<!-- BEGIN SIDEBAR MENU HEADER-->
		<div class="sidebar-header"> <img src="/wp-content/themes/dashboard-child/assets/img/logo_white.png" alt="logo" class="brand" data-src="/wp-content/themes/dashboard-child/assets/img/logo_white.png" data-src-retina="/wp-content/themes/dashboard-child/assets/img/logo_white_2x.png" width="78" height="22">
			<div class="sidebar-header-controls">
				<button aria-label="Toggle Drawer" type="button" class="btn btn-icon-link invert sidebar-slide-toggle m-l-20 m-r-10" data-pages-toggle="#appMenu"> <i class="pg-icon">chevron_down</i> </button>
				<button aria-label="Pin Menu" type="button" class="btn btn-icon-link invert d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar"> <i class="pg-icon"></i> </button>
			</div>
		</div>
		<!-- END SIDEBAR MENU HEADER-->
		<!-- START SIDEBAR MENU -->
		<div class="sidebar-menu">
			<!-- BEGIN SIDEBAR MENU ITEMS-->
			<ul class="menu-items">
				<li class="m-t-30">
					<a href="#" class="detailed"> <span class="title">Page 1</span> <span class="details">234 notifications</span> </a> <span class="icon-thumbnail "><i class="pg-icon">inbox</i></span> </li>
				<li class="">
					<a href="#"> <span class="title">Page 2</span> </a> <span class="icon-thumbnail "><i class="pg-icon">social</i></span> </li>
				<li class="">
					<a href="javascript:;"> <span class="title">Page 3</span> <span class=" arrow"></span> </a> <span class="icon-thumbnail"><i class="pg-icon">brush</i></span>
					<ul class="sub-menu">
						<li class=""> <a href="#">Sub Page 1</a> <span class="icon-thumbnail">sp</span> </li>
						<li class=""> <a href="#">Sub Page 2</a> <span class="icon-thumbnail">sp</span> </li>
						<li class=""> <a href="#">Sub Page 3</a> <span class="icon-thumbnail">sp</span> </li>
					</ul>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<!-- END SIDEBAR MENU -->
	</nav>
	<!-- END SIDEBAR -->
	<!-- END SIDEBAR -->
	<!-- START PAGE-CONTAINER -->
	<div class="page-container">
		<!-- START PAGE HEADER WRAPPER -->
		<!-- START MODAL -->
		<div id="myModal" class="modal" >

				  <!-- Modal content -->
				  <div class="modal-content">
				    <span class="close" id="close">×</span>
				    <p>Some text in the Modal..</p>
				  </div>

				</div>
		<!-- END MODAL -->	
		<!-- START HEADER -->
		<div class="header ">
			<!-- START MOBILE SIDEBAR TOGGLE --><a href="#" class="btn-link toggle-sidebar d-lg-none pg-icon btn-icon-link" data-toggle="sidebar">
				menu</a>
			<!-- END MOBILE SIDEBAR TOGGLE -->
			<div class="">
				<div class="brand inline  m-l-10 "> <img src="/wp-content/themes/dashboard-child/images/peoplecount.png" style="width: 120px; height: 50px;"> </div>
				<!-- START NOTIFICATION LIST -->
				<ul class="d-lg-inline-block d-none notification-list no-margin d-lg-inline-block b-grey b-l b-r no-style p-l-20 p-r-20">
					<li class="p-r-5 inline">
						<div class="dropdown">
							<a href="javascript:;" id="notification-center" class="header-icon  btn-icon-link" data-toggle="dropdown"> <i class="pg-icon">world</i> <span class="bubble"></span> </a>
							<!-- START Notification Dropdown -->
							<div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
								<!-- START Notification -->
								<div class="notification-panel">
									<!-- START Notification Body-->
									<div class="notification-body scrollable">
										<!-- START Notification Item-->
										<div class="notification-item unread clearfix">
											<!-- START Notification Item-->
											<div class="heading open">
												<a href="#" class="text-complete pull-left d-flex align-items-center"> <i class="pg-icon m-r-10">map</i> <span class="bold">Carrot Design</span> <span class="fs-12 m-l-10">David Nester</span> </a>
												<div class="pull-right">
													<div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
														<div><i class="pg-icon">chevron_down</i> </div>
													</div> <span class=" time">few sec ago</span> </div>
												<div class="more-details">
													<div class="more-details-inner">
														<h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br>
															distinguishes between <br>
															A leader and a follower.”</h5>
														<p class="small hint-text"> Commented on john Smiths wall.
															<br> via pages framework. </p>
													</div>
												</div>
											</div>
											<!-- END Notification Item-->
											<!-- START Notification Item Right Side-->
											<div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
												<a href="#" class="mark"></a>
											</div>
											<!-- END Notification Item Right Side-->
										</div>
										<!-- START Notification Body-->
										<!-- START Notification Item-->
										<div class="notification-item  clearfix">
											<div class="heading">
												<a href="#" class="text-danger pull-left"> <i class="pg-icon m-r-10">alert_warning</i> <span class="bold">98% Server Load</span> <span class="fs-12 m-l-10">Take Action</span> </a> <span class="pull-right time">2 mins ago</span> </div>
											<!-- START Notification Item Right Side-->
											<div class="option">
												<a href="#" class="mark"></a>
											</div>
											<!-- END Notification Item Right Side-->
										</div>
										<!-- END Notification Item-->
										<!-- START Notification Item-->
										<div class="notification-item  clearfix">
											<div class="heading">
												<a href="#" class="text-warning pull-left"> <i class="pg-icon m-r-10">alert_warning</i> <span class="bold">Warning Notification</span> <span class="fs-12 m-l-10">Buy Now</span> </a> <span class="pull-right time">yesterday</span> </div>
											<!-- START Notification Item Right Side-->
											<div class="option">
												<a href="#" class="mark"></a>
											</div>
											<!-- END Notification Item Right Side-->
										</div>
										<!-- END Notification Item-->
										<!-- START Notification Item-->
										<div class="notification-item unread clearfix">
											<div class="heading">
												<div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10"> <img width="30" height="30" data-src-retina="/wp-content/themes/dashboard-child/assets/img/profiles/1x.jpg" data-src="/wp-content/themes/dashboard-child/assets/img/profiles/1.jpg" alt="" src="/wp-content/themes/dashboard-child/assets/img/profiles/1.jpg"> </div>
												<a href="#" class="text-complete pull-left"> <span class="bold">Revox Design Labs</span> <span class="fs-12 m-l-10">Owners</span> </a> <span class="pull-right time">11:00pm</span> </div>
											<!-- START Notification Item Right Side-->
											<div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
												<a href="#" class="mark"></a>
											</div>
											<!-- END Notification Item Right Side-->
										</div>
										<!-- END Notification Item-->
									</div>
									<!-- END Notification Body-->
									<!-- START Notification Footer-->
									<div class="notification-footer text-center"> <a href="#" class="">Read all notifications</a>
										<a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#"> <i class="pg-refresh_new"></i> </a>
									</div>
									<!-- START Notification Footer-->
								</div>
								<!-- END Notification -->
							</div>
							<!-- END Notification Dropdown -->
						</div>
					</li>
					<li class="p-r-5 inline">
						<a href="#" class="header-icon  btn-icon-link"> <i class="pg-icon">link_alt</i> </a>
					</li>
					<li class="p-r-5 inline">
						<a href="#" class="header-icon  btn-icon-link"> <i class="pg-icon">grid_alt</i> </a>
					</li>
				</ul>
				<!-- END NOTIFICATIONS LIST --><a href="#" class="search-link d-lg-inline-block d-none" data-toggle="search"><i class="pg-icon">search</i>Type
					anywhere to <span class="bold">search</span></a> </div>
			<div class="d-flex align-items-center">
				<!-- START User Info-->
				<div class="dropdown pull-right d-lg-block d-none">
					<button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="profile dropdown"> <span class="thumbnail-wrapper d32 circular inline">
							<img src="/wp-content/themes/dashboard-child/assets/img/profiles/avatar.jpg" alt="" data-src="/wp-content/themes/dashboard-child/assets/img/profiles/avatar.jpg"
								data-src-retina="/wp-content/themes/dashboard-child/assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
						</span> </button>
					<div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu"> <a href="#" class="dropdown-item"><span>Signed in as <br /><b>David Aunsberg</b></span></a>
						<div class="dropdown-divider"></div> <a href="#" class="dropdown-item">Your Profile</a> <a href="#" class="dropdown-item">Your Activity</a> <a href="#" class="dropdown-item">Your Archive</a>
						<div class="dropdown-divider"></div> <a href="#" class="dropdown-item">Features</a> <a href="#" class="dropdown-item">Help</a> <a href="#" class="dropdown-item">Settings</a> <a href="#" class="dropdown-item">Logout</a>
						<div class="dropdown-divider"></div> <span class="dropdown-item fs-12 hint-text">Last edited by David<br />on Friday at 5:27PM</span> </div>
				</div>
				<!-- END User Info-->
				<a href="#" class="header-icon m-l-5 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"> <i class="pg-icon btn-icon-link">menu_add</i> </a>
			</div>
		</div>
		<!-- END HEADER -->
		<!-- END PAGE HEADER WRAPPER -->
		<!-- START PAGE CONTENT WRAPPER -->
		<div class="page-content-wrapper">
			<!-- START PAGE CONTENT -->
			<div class="content">
				
				<!-- START JUMBOTRON -->
				<div style="padding: 2rem 1rem;">
					<?php

						echo "Welcome, ".$current_user->display_name. "!";
					?>
				</div>
				<!-- END JUMBOTRON -->
				<!-- START CONTAINER FLUID -->
				<div class="container-fluid container-fixed-lg">
					<!-- BEGIN PlACE PAGE CONTENT HERE -->
					<!--start first row of widgets-->
					
					<div class="row">
						<!--first column of cards-->
						<div class="col-lg-4 col-xl-3 col-xlg-2 margins">
							<!--Start Card-->
							<div class="row">
								<div class="col-md-12 m-b-10">
									<div class="widget-8 card  bg-warning no-margin widget-loader-bar">
										<div class="container-xs-height full-height" id="companiescontainer">
											<div class="row-xs-height">
												<div class="col-xs-height col-top">
													<div class="card-header  top-left top-right">
														<div class="card-title"> <span class="font-montserrat fs-11 all-caps">Companies</span> </div>
														<div class="card-controls">
															<ul>
																<li> <button id="companiesButton" class="companiesButton">View</button>
																 </li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="row-xs-height ">
												<div class="col-xs-height col-top relative">
													<div class="row full-height">
														<div class="col-sm-6">
															<div class="p-l-20 full-height d-flex flex-column justify-content-between" id="checkboxdiv">
																<h3 class="no-margin p-b-5">

																	<?php 
																		

																		if($companies = $mysqli->query("SELECT DISTINCT company_name FROM ps_wpjb_company")) {
																			 $count = $companies->num_rows; 
																			 echo $count;
																		}
																		
																		?>
																	
																</h3>
																<p class="small m-t-5 m-b-20"> <span class="label label-white hint-text font-montserrat m-r-5">60%</span><span class="fs-12">Higher</span> </p>
															</div>
														</div>
														<div class="col-sm-6"></div>
													</div>
													<div class="widget-8-chart line-chart" data-line-color="white" data-points="true" data-point-color="warning" data-stroke-width="2"> </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--End Card Here-->

							<!--Start Card Here-->
							<div class="row">
								<div class="col-lg-12 m-b-10">
									<div class="widget-9 card  bg-success no-margin widget-loader-bar">
										<div class="full-height d-flex flex-column">
											<div class="card-header ">
												<div class="card-title"> <span class="font-montserrat fs-11 all-caps">Job Orders </span> </div>
												<div class="card-controls">
													<ul>
														<li> <button id="jobOrderButton" class="companiesButton" >View</button></li>
													</ul>
												</div>
											</div>
											<div class="p-l-20">
												<h3 class="no-margin p-b-5">5</h3> <span class="d-flex align-items-center">
							<i class="pg-icon m-r-5">arrow_down</i>
							<span class="small hint-text">65% lower than last month</span> </span>
											</div>
											<div class="mt-auto">
												<div class="progress progress-small m-b-20">
													<div class="progress-bar progress-bar-white" style="width:45%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--End Card Here -->
							<div class="row">
								<div class="col-lg-12 md-m-b-10 sm-p-b-10">
									<div class="widget-10 card  bg-white no-margin widget-loader-bar">
										<div class="card-header  top-left top-right ">
											<div class="card-title text-black hint-text"> <span class="font-montserrat fs-11 all-caps">Inactive Associates </span> </div>
											<div class="card-controls">
												<ul>
													<li><button id="inactiveButton" class="companiesButton" >View</button></li>
												</ul>
											</div>
										</div>
										<div class="card-body p-t-40">
											<div class="row">
												<div class="col-sm-12">
													<h4 class="no-margin p-b-5 text-danger semi-bold">50</h4>
													<div class="d-flex align-items-center pull-left small"> <span>WMHC</span> <span class=" text-success"> <i class="pg-icon m-l-10">arrow_up</i> </span> <span class="text-success font-montserrat"> 21% </span> </div>
													<div class="d-flex align-items-center pull-left m-l-20 small"> <span>HCRS</span> <span class="text-danger"><i class="pg-icon m-l-10">arrow_down</i> </span> <span class="text-danger font-montserrat"> 21% </span> </div>
													<div class="clearfix"></div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
							<!--End First Column-->

							<!-- Second Column --> 

						    <!-- End Second Column --> 

						
						<div class="col-lg-4 col-xl-3 col-xlg-2">
							<div class="row">
								<div class="col-md-12 m-b-10">
									<div class="widget-8 card  bg-warning no-margin widget-loader-bar">
										<div class="container-xs-height full-height">
											<div class="row-xs-height">
												<div class="col-xs-height col-top">
													<div class="card-header  top-left top-right">
														<div class="card-title"> <span class="font-montserrat fs-11 all-caps">Active Associates </span> </div>
														<div class="card-controls">
															<ul>
																<li> <button id="activeButton" class="companiesButton" >View</button></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="row-xs-height ">
												<div class="col-xs-height col-top relative">
													<div class="row full-height">
														<div class="col-sm-6">
															<div class="p-l-20 full-height d-flex flex-column justify-content-between">
																<h3 class="no-margin p-b-5">300</h3>
																<p class="small m-t-5 m-b-20"> <span class="label label-white hint-text font-montserrat m-r-5">60%</span><span class="fs-12">Higher</span> </p>
															</div>
														</div>
														<div class="col-sm-6"></div>
													</div>
													<div class="widget-8-chart line-chart" data-line-color="white" data-points="true" data-point-color="warning" data-stroke-width="2"> </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--End Card Here-->

							<!--Start Card Here-->
							<div class="row">
								<div class="col-lg-12 m-b-10">
									<div class="widget-9 card  bg-success no-margin widget-loader-bar">
										<div class="full-height d-flex flex-column">
											<div class="card-header ">
												<div class="card-title"> <span class="font-montserrat fs-11 all-caps">Placed Associates</span> </div>
												<div class="card-controls">
													<ul>
														<li> <button id="placedButton" class="companiesButton">View</button></li>
													</ul>
												</div>
											</div>
											<div class="p-l-20">
												<h3 class="no-margin p-b-5">300</h3> <span class="d-flex align-items-center">
							<i class="pg-icon m-r-5">arrow_down</i>
							<span class="small hint-text">65% lower than last month</span> </span>
											</div>
											<div class="mt-auto">
												<div class="progress progress-small m-b-20">
													<div class="progress-bar progress-bar-white" style="width:45%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--End Card Here -->
							<div class="row">
								<div class="col-lg-12 md-m-b-10 sm-p-b-10">
									<div class="widget-10 card  bg-white no-margin widget-loader-bar">
										<div class="card-header  top-left top-right ">
											<div class="card-title text-black hint-text"> <span class="font-montserrat fs-11 all-caps">Terminated Associates </span> </div>
											<div class="card-controls">
												<ul>
													<li><button id="terminatedButton" class="companiesButton">View</button> </li>
												</ul>
											</div>
										</div>
										<div class="card-body p-t-40">
											<div class="row">
												<div class="col-sm-12">
													<h4 class="no-margin p-b-5 text-danger semi-bold">50</h4>
													<div class="d-flex align-items-center pull-left small"> <span>WMHC</span> <span class=" text-success"> <i class="pg-icon m-l-10">arrow_up</i> </span> <span class="text-success font-montserrat"> 21% </span> </div>
													<div class="d-flex align-items-center pull-left m-l-20 small"> <span>HCRS</span> <span class="text-danger"><i class="pg-icon m-l-10">arrow_down</i> </span> <span class="text-danger font-montserrat"> 21% </span> </div>
													<div class="clearfix"></div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						
						</div>

						<!-- Start Widget -->
						<div class="col-lg-6 hidden-lg  col-xlg-4 m-b-10" >

							<div class="widget-15 card no-margin  widget-loader-circle" style="height: 400px; overflow-y: auto;">
								All Applicants

								
								

								?>
								<div class="card-header top-right">
									<div class="card-controls">
										<ul>
											<li>
												<a href="#" class="card-refresh" data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="card-body no-padding">

									<div class="tab-content p-l-10 p-r-10">
										<div class="tab-pane no-padding active" id="widget-15-tab-1">
											<div class="full-width">
												<div class="full-width">

												</div>
											</div>
										</div>
										<div class="tab-pane no-padding" id="widget-15-tab-2">
										</div>
										<div class="tab-pane" id="widget-15-tab-3">
										</div>
									</div>
									<div class="p-t-20 p-l-20 p-r-20 p-b-20">
										<div class="row">
											
										</div>
									</div>
								</div>
							</div>

						</div>
						
					</div>
					<!-- end first row of widgets-->
					<div class="row m-b-10">
						<!-- Start Search Widget -->
						<div class="col-sm-5 col-lg-4 col-xlg-3 col-sm-height col-top no-padding card">
<div class="card-header  ">
<div class="card-title">Search Available Jobs By:
</div>
</div>
<div class="card-body">
<ul class="nav nav-pills m-t-10 m-b-15" role="tablist">
<li class="active">
<a href="#tab1" data-toggle="tab" role="tab" class="b-a b-grey text-color">
Job
</a>
</li>
<li>
<a href="#tab2" data-toggle="tab" role="tab" class="b-a b-grey text-color">
City
</a>
</li>
<li>
<a href="#tab3" data-toggle="tab" role="tab" class="b-a b-grey text-color">
Company
</a>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="tab1">
<i class="fa fa-search"></i>
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for a job.." title="Type in a name">
<div class ="searchLabels">
	<?php  ?>
<p class="hint-text all-caps font-montserrat small no-margin ">Jobs Posted</p>
<p class="all-caps font-montserrat  no-margin text-success "><?php echo $jobs->num_rows; ?></p>
<br>
<p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
<p class="all-caps font-montserrat  no-margin text-warning ">24</p>
<br>
<p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
<p class="all-caps font-montserrat  no-margin text-success ">56</p>
</div>
</div>
<div class="tab-pane " id="tab2">
<h3 class="m-t-5 m-b-20">Google</h3>
<p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
<p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
<br>
<p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
<p class="all-caps font-montserrat  no-margin text-warning ">24</p>
<br>
<p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
<p class="all-caps font-montserrat  no-margin text-success ">56</p>
</div>
<div class="tab-pane" id="tab3">
<h3 class="m-t-5 m-b-20">Amazon</h3>
<p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
<p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
<br>
<p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
<p class="all-caps font-montserrat  no-margin text-warning ">24</p>
<br>
<p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
<p class="all-caps font-montserrat  no-margin text-success ">56</p>
</div>
</div>
</div>
<div class="p-l-20 p-r-20 p-t-10 p-b-10 pull-bottom full-width hidden-xs">
<p class="no-margin">
<a href="#" class="btn-circle-arrow b-grey"><i class="pg-icon">chevron_down</i></a>
<span class="hint-text">Super secret options</span>
</p>
</div>
</div>
<!-- End Search Widget --> 

					<!-- Start Available Jobs Widget -->

					<div class="col-sm-7 col-lg-8 col-xlg-9 col-sm-height col-top no-padding relative">
						<div class=" widget-13-map card mapplic-element scrollneeded" style=" overflow-y: auto;">
							<div>
								<?php
							

						

						/* Create table doesn't return a resultset */


						/* Select queries return a resultset */
						if(isset($_SESSION["employer_id"])){
							$id = $employer->getEmployerId();
					}
						
						if ($jobs = $mysqli->query("SELECT job_title, job_city, company_name  FROM ps_wpjb_job WHERE `employer_id`='$id' ORDER BY job_title ASC")) {
							echo "<h1> Job Listings </h1>";
							echo "<div class='tbl-header'>";
							echo "<table  cellpadding='0' cellspacing='0' border='0'>";
							echo "<thead> <tr> <th>Job Title</th> <th>City</th> <th>Company</th></tr> </thead>";
							echo "</table></div>";
							echo "<div class ='tbl-content'><table id='myTable' cellpadding='0' cellspacing='0' border='0'><tbody>";
							$array = array();
							while($row = $jobs->fetch_assoc() ){
							echo "<tr id=queryrows>";
								if(strpos($row["job_title"], '(') || strpos($row["job_title"], ')') ){
									$newstring = substr($row["job_title"], 0, strpos($row["job_title"], '('));
									echo "<td>". "<a href='#'>" . $newstring . "</a>" ."</td>" ;
								}
								else{
								echo "<td>". "<a href='#'>" . $row["job_title"] . " </a>" . "</td>" ;
								}

								echo "<td>". "<a href='#'>" . $row["job_city"] . " </a>" . "</td>" ; 
								echo "<td>". "<a href='#'>" . $row["company_name"] . " </a>" . "</td>" ;
								echo "</tr>";
								$array[] = $row;
							
							}
							$employer->setJobsPosted($jobs->num_rows);
							$employer->setlistings($array);
							// listings is a mulit-dimensional associative array of sql objects
							$listings = $employer->getlistings();
							

							echo "</tbody></table></div>";
						    /* free result set */
						    $jobs->close();
						}
							?>
									<div>
										<div class="mapplic-container" style="height: 100%;"></div>
										<div> </div>
									</div>
							</div>
						</div>
					</div>
					<!-- End Available Jobs Widget -->
				</div>
					<!-- END PLACE PAGE CONTENT BELOW -->
				</div>
				<!-- END CONTAINER FLUID -->
			</div>
			<!-- END PAGE CONTENT -->
			<!-- START FOOTER -->
			<div class="container-fluid container-fixed-lg footer">
				<div class="copyright sm-text-center">
					<p class="small no-margin pull-left sm-pull-reset"> <span class="hint-text">Copyright © 2014</span> <span class="font-montserrat">REVOX</span>. <span class="hint-text">All rights reserved.</span> <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#"
								class="m-l-10">Privacy Policy</a>
						</span> </p>
					<p class="small no-margin pull-right sm-pull-reset"> <a href="#">Hand-crafted</a> <span class="hint-text">&amp; Made with Love ®</span> </p>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- END FOOTER -->
		</div>
		
	
		<!-- END PAGE CONTENT WRAPPER -->
	</div>
	<!-- END PAGE CONTAINER -->
	<!--START QUICKVIEW -->
	<div id="quickview" class="quickview-wrapper" data-pages="quickview">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li class=""> <a href="#quickview-notes" data-target="#quickview-notes" data-toggle="tab" role="tab">Notes</a> </li>
			<li> <a href="#quickview-alerts" data-target="#quickview-alerts" data-toggle="tab" role="tab">Alerts</a> </li>
			<li class=""> <a class="active" href="#quickview-chat" data-toggle="tab" role="tab">Chat</a> </li>
		</ul> <a class="btn-icon-link invert quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-icon">close</i></a>
		<!-- Tab panes -->
		<div class="tab-content">
			<!-- BEGIN Notes !-->
			<div class="tab-pane no-padding" id="quickview-notes">
				<div class="view-port clearfix quickview-notes" id="note-views">
					<!-- BEGIN Note List !-->
					<div class="view list" id="quick-note-list">
						<div class="toolbar clearfix">
							<ul class="pull-right ">
								<li> <a href="#" class="delete-note-link"><i class="pg-icon">trash_alt</i></a> </li>
								<li> <a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="pg-icon">add</i></a> </li>
							</ul>
							<button aria-label="" class="btn-remove-notes btn btn-xs btn-block hide"><i class="pg-icon">close</i>Delete</button>
						</div>
						<ul>
							<!-- BEGIN Note Item !-->
							<li data-noteid="1" class="d-flex justify-space-between">
								<div class="left">
									<!-- BEGIN Note Action !-->
									<div class="form-check warning no-margin">
										<input id="qncheckbox1" type="checkbox" value="1">
										<label for="qncheckbox1"></label>
									</div>
									<!-- END Note Action !-->
									<!-- BEGIN Note Preview Text !-->
									<p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
									<!-- BEGIN Note Preview Text !-->
								</div>
								<!-- BEGIN Note Details !-->
								<div class="d-flex right justify-content-end">
									<!-- BEGIN Note Date !--><span class="date">12/12/20</span>
									<a href="#" class="d-flex align-items-center" data-navigate="view" data-view-port="#note-views" data-view-animation="push"> <i class="pg-icon">chevron_right</i> </a>
									<!-- END Note Date !-->
								</div>
								<!-- END Note Details !-->
							</li>
							<!-- END Note Item !-->
						</ul>
					</div>
					<!-- END Note List !-->
					<div class="view note" id="quick-note">
						<div>
							<ul class="toolbar">
								<li><a href="#" class="close-note-link"><i class="pg-icon">chevron_left</i></a> </li>
								<li><a href="#" data-action="Bold" class="fs-12"><i class="pg-icon">format_bold</i></a> </li>
								<li><a href="#" data-action="Italic" class="fs-12"><i class="pg-icon">format_italics</i></a> </li>
								<li><a href="#" class="fs-12"><i class="pg-icon">link</i></a> </li>
							</ul>
							<div class="body">
								<div>
									<div class="top"> <span>21st april 2020 2:13am</span> </div>
									<div class="content">
										<div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END Notes !-->
			<!-- BEGIN Alerts !-->
			<div class="tab-pane no-padding" id="quickview-alerts">
				<div class="view-port clearfix" id="alerts">
					<!-- BEGIN Alerts View !-->
					<div class="view bg-white">
						<!-- BEGIN View Header !-->
						<div class="navbar navbar-default navbar-sm">
							<div class="navbar-inner">
								<!-- BEGIN Header Controler !-->
								<a href="javascript:;" class="action p-l-10 link text-color" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax"> <i class="pg-icon">more_horizontal</i> </a>
								<!-- END Header Controler !-->
								<div class="view-heading"> Notications </div>
								<!-- BEGIN Header Controler !-->
								<a href="#" class="action p-r-10 pull-right link text-color"> <i class="pg-icon">search</i> </a>
								<!-- END Header Controler !-->
							</div>
						</div>
						<!-- END View Header !-->
						<!-- BEGIN Alert List !-->
						<div data-init-list-view="ioslist" class="list-view boreded no-top-border">
							<!-- BEGIN List Group !-->
							<div class="list-view-group-container">
								<!-- BEGIN List Group Header!-->
								<div class="list-view-group-header text-uppercase"> Calendar </div>
								<!-- END List Group Header!-->
								<ul>
									<!-- BEGIN List Group Item!-->
									<li class="alert-list">
										<!-- BEGIN Alert Item Set Animation using data-view-animation !-->
										<a href="javascript:;" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
											<p class=""> <span class="text-warning fs-10"><i class="pg-icon">circle_fill</i></span> </p>
											<p class="p-l-10 overflow-ellipsis fs-12"> <span class="text-color">David Nester Birthday</span> </p>
											<p class="p-r-10 ml-auto fs-12 text-right"> <span class="text-warning">Today <br></span> <span class="text-color">All Day</span> </p>
										</a>
										<!-- END Alert Item!-->
										<!-- BEGIN List Group Item!-->
									</li>
									<!-- END List Group Item!-->
								</ul>
							</div>
							<!-- END List Group !-->
							<div class="list-view-group-container">
								<!-- BEGIN List Group Header!-->
								<div class="list-view-group-header text-uppercase"> Social </div>
								<!-- END List Group Header!-->
								<ul>
									<!-- BEGIN List Group Item!-->
									<li class="alert-list">
										<!-- BEGIN Alert Item Set Animation using data-view-animation !-->
										<a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
											<p class=""> <span class="text-complete fs-10"><i class="pg-icon">circle_fill</i></span> </p>
											<p class="col overflow-ellipsis fs-12 p-l-10"> <span class="text-color link">Jame Smith commented on your status<br></span> <span class="text-color">“Perfection Simplified - Company Revox"</span> </p>
										</a>
										<!-- END Alert Item!-->
									</li>
									<!-- END List Group Item!-->
								</ul>
							</div>
							<div class="list-view-group-container">
								<!-- BEGIN List Group Header!-->
								<div class="list-view-group-header text-uppercase"> Sever Status </div>
								<!-- END List Group Header!-->
								<ul>
									<!-- BEGIN List Group Item!-->
									<li class="alert-list">
										<!-- BEGIN Alert Item Set Animation using data-view-animation !-->
										<a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
											<p class=""> <span class="text-danger fs-10"><i class="pg-icon">circle_fill</i></span> </p>
											<p class="col overflow-ellipsis fs-12 p-l-10"> <span class="text-color link">12:13AM GTM, 10230, ID:WR174s<br></span> <span class="text-color">Server Load Exceeted. Take action</span> </p>
										</a>
										<!-- END Alert Item!-->
									</li>
									<!-- END List Group Item!-->
								</ul>
							</div>
						</div>
						<!-- END Alert List !-->
					</div>
					<!-- EEND Alerts View !-->
				</div>
			</div>
			<!-- END Alerts !-->
			<div class="tab-pane active no-padding" id="quickview-chat">
				<div class="view-port clearfix" id="chat">
					<div class="view bg-white">
						<!-- BEGIN View Header !-->
						<div class="navbar navbar-default">
							<div class="navbar-inner">
								<!-- BEGIN Header Controler !-->
								<a href="javascript:;" class="action p-l-10 link text-color" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax"> <i class="pg-icon">add</i> </a>
								<!-- END Header Controler !-->
								<div class="view-heading"> Chat List
									<div class="fs-11">Show All</div>
								</div>
								<!-- BEGIN Header Controler !-->
								<a href="#" class="action p-r-10 pull-right link text-color"> <i class="pg-icon">more_horizontal</i> </a>
								<!-- END Header Controler !-->
							</div>
						</div>
						<!-- END View Header !-->
						<div data-init-list-view="ioslist" class="list-view boreded no-top-border">
							<div class="list-view-group-container">
								<div class="list-view-group-header text-uppercase"> a</div>
								<ul>
									<!-- BEGIN Chat User List Item  !-->
									<li class="chat-user-list clearfix">
										<a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#"> <span class="thumbnail-wrapper d32 circular bg-success">
												<img width="34" height="34" alt="" data-src-retina="/wp-content/themes/dashboard-child/assets/img/profiles/1x.jpg" data-src="/wp-content/themes/dashboard-child/assets/img/profiles/1.jpg" src="/wp-content/themes/dashboard-child/assets/img/profiles/1x.jpg" class="col-top">
										</span>
											<p class="p-l-10 "> <span class="text-color">ava flores</span> <span class="block text-color hint-text fs-12">Hello there</span> </p>
										</a>
									</li>
									<!-- END Chat User List Item  !-->
								</ul>
							</div>
						</div>
					</div>
					<!-- BEGIN Conversation View  !-->
					<div class="view chat-view bg-white clearfix">
						<!-- BEGIN Header  !-->
						<div class="navbar navbar-default">
							<div class="navbar-inner">
								<a href="javascript:;" class="link text-color action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax"> <i class="pg-icon">chevron_left</i> </a>
								<div class="view-heading"> John Smith
									<div class="fs-11 hint-text">Online</div>
								</div>
								<a href="#" class="link text-color action p-r-10 pull-right "> <i class="pg-icon">more_horizontal</i> </a>
							</div>
						</div>
						<!-- END Header  !-->
						<!-- BEGIN Conversation  !-->
						<div class="chat-inner" id="my-conversation">
							<!-- BEGIN From Me Message  !-->
							<div class="message clearfix">
								<div class="chat-bubble from-me"> Hello there </div>
							</div>
							<!-- END From Me Message  !-->
							<!-- BEGIN From Them Message  !-->
							<div class="message clearfix">
								<div class="profile-img-wrapper m-t-5 inline"> <img class="col-top" width="30" height="30" src="/wp-content/themes/dashboard-child/assets/img/profiles/avatar_small.jpg" alt="" data-src="/wp-content/themes/dashboard-child/assets/img/profiles/avatar_small.jpg" data-src-retina="/wp-content/themes/dashboard-child/assets/img/profiles/avatar_small2x.jpg"> </div>
								<div class="chat-bubble from-them"> Hey </div>
							</div>
							<!-- END From Them Message  !-->
							<!-- BEGIN From Me Message  !-->
							<div class="message clearfix">
								<div class="chat-bubble from-me"> Did you check out Pages framework ? </div>
							</div>
							<!-- END From Me Message  !-->
							<!-- BEGIN From Me Message  !-->
							<div class="message clearfix">
								<div class="chat-bubble from-me"> Its an awesome chat </div>
							</div>
							<!-- END From Me Message  !-->
							<!-- BEGIN From Them Message  !-->
							<div class="message clearfix">
								<div class="profile-img-wrapper m-t-5 inline"> <img class="col-top" width="30" height="30" src="/wp-content/themes/dashboard-child/assets/img/profiles/avatar_small.jpg" alt="" data-src="/wp-content/themes/dashboard-child/assets/img/profiles/avatar_small.jpg" data-src-retina="/wp-content/themes/dashboard-child/assets/img/profiles/avatar_small2x.jpg"> </div>
								<div class="chat-bubble from-them"> Yea </div>
							</div>
							<!-- END From Them Message  !-->
						</div>
						<!-- BEGIN Conversation  !-->
						<!-- BEGIN Chat Input  !-->
						<div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
							<div class="row">
								<div class="col-1 p-t-15"> <a href="#" class="link text-color"><i class="pg-icon">add</i></a> </div>
								<div class="col-8 no-padding">
									<label class="d-none">Reply</label>
									<input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something"> </div>
								<div class="col-2 link text-color m-l-10 m-t-15 p-l-10 b-l b-grey col-top"> <a href="#" class="link text-color"><i class="pg-icon">camera</i></a> </div>
							</div>
						</div>
						<!-- END Chat Input  !-->
					</div>
					<!-- END Conversation View  !-->
				</div>
			</div>
		</div>
	</div>
	<!-- END QUICKVIEW-->
	<!-- START OVERLAY -->
	<div class="overlay hide" data-pages="search">
		<!-- BEGIN Overlay Content !-->
		<div class="overlay-content has-results m-t-20">
			<!-- BEGIN Overlay Header !-->
			<div class="container-fluid">
				<!-- BEGIN Overlay Logo !--><img class="overlay-brand" src="/wp-content/themes/dashboard-child/assets/img/logo.png" alt="logo" data-src="/wp-content/themes/dashboard-child/assets/img/logo.png" data-src-retina="/wp-content/themes/dashboard-child/assets/img/logo_2x.png" width="78" height="22">
				<!-- END Overlay Logo !-->
				<!-- BEGIN Overlay Close !-->
				<a href="#" class="close-icon-light btn-link btn-rounded  overlay-close text-black"> <i class="pg-icon">close</i> </a>
				<!-- END Overlay Close !-->
			</div>
			<!-- END Overlay Header !-->
			<div class="container-fluid">
				<!-- BEGIN Overlay Controls !-->
				<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
				<br>
				<div class="d-flex align-items-center">
					<div class="form-check form-check-inline right m-b-0">
						<input id="checkboxn" type="checkbox" value="1">
						<label for="checkboxn">Search within page</label>
					</div>
					<p class="fs-13 hint-text m-l-10 m-b-0">Press enter to search</p>
				</div>
				<!-- END Overlay Controls !-->
			</div>
			<!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
			<div class="container-fluid p-t-20"> <span class="hint-text">
						suggestions :
				</span> <span class="overlay-suggestions"></span>
				<br>
				<div class="search-results m-t-30">
					<p class="bold">Pages Search Results: <span class="overlay-suggestions"></span></p>
					<div class="row">
						<div class="col-md-6">
							<!-- BEGIN Search Result Item !-->
							<div class="d-flex m-t-15">
								<!-- BEGIN Search Result Item Thumbnail !-->
								<div class="thumbnail-wrapper d48 circular bg-success text-white "> <img width="36" height="36" src="/wp-content/themes/dashboard-child/assets/img/profiles/avatar.jpg" data-src="/wp-content/themes/dashboard-child/assets/img/profiles/avatar.jpg" data-src-retina="/wp-content/themes/dashboard-child/assets/img/profiles/avatar2x.jpg" alt=""> </div>
								<!-- END Search Result Item Thumbnail !-->
								<div class="p-l-10">
									<h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> on pages</h5>
									<p class="small-text hint-text">via john smith</p>
								</div>
							</div>
							<!-- END Search Result Item !-->
							<!-- BEGIN Search Result Item !-->
							<div class="d-flex m-t-15">
								<!-- BEGIN Search Result Item Thumbnail !-->
								<div class="thumbnail-wrapper d48 circular bg-success text-white ">
									<div>T</div>
								</div>
								<!-- END Search Result Item Thumbnail !-->
								<div class="p-l-10">
									<h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> related topics</h5>
									<p class="small-text hint-text">via pages</p>
								</div>
							</div>
							<!-- END Search Result Item !-->
							<!-- BEGIN Search Result Item !-->
							<div class="d-flex m-t-15">
								<!-- BEGIN Search Result Item Thumbnail !-->
								<div class="thumbnail-wrapper d48 circular bg-success text-white ">
									<div>M </div>
								</div>
								<!-- END Search Result Item Thumbnail !-->
								<div class="p-l-10">
									<h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> music</h5>
									<p class="small-text hint-text">via pagesmix</p>
								</div>
							</div>
							<!-- END Search Result Item !-->
						</div>
						<div class="col-md-6">
							<!-- BEGIN Search Result Item !-->
							<div class="d-flex m-t-15">
								<!-- BEGIN Search Result Item Thumbnail !-->
								<div class="thumbnail-wrapper d48 circular bg-info text-white d-flex align-items-center"> <i class="pg-icon">facebook</i> </div>
								<!-- END Search Result Item Thumbnail !-->
								<div class="p-l-10">
									<h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> on facebook</h5>
									<p class="small-text hint-text">via facebook</p>
								</div>
							</div>
							<!-- END Search Result Item !-->
							<!-- BEGIN Search Result Item !-->
							<div class="d-flex m-t-15">
								<!-- BEGIN Search Result Item Thumbnail !-->
								<div class="thumbnail-wrapper d48 circular bg-complete text-white d-flex align-items-center"> <i class="pg-icon">twitter</i> </div>
								<!-- END Search Result Item Thumbnail !-->
								<div class="p-l-10">
									<h5 class="no-margin ">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
									<p class="small-text hint-text">via twitter</p>
								</div>
							</div>
							<!-- END Search Result Item !-->
							<!-- BEGIN Search Result Item !-->
							<div class="d-flex m-t-15">
								<!-- BEGIN Search Result Item Thumbnail !-->
								<div class="thumbnail-wrapper d48 circular text-white bg-danger d-flex align-items-center"> <i class="pg-icon">google_plus</i> </div>
								<!-- END Search Result Item Thumbnail !-->
								<div class="p-l-10">
									<h5 class="no-margin ">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
									<p class="small-text hint-text">via google plus</p>
								</div>
							</div>
							<!-- END Search Result Item !-->
						</div>
					</div>
				</div>
			</div>
			<!-- END Overlay Search Results !-->
		</div>
		<!-- END Overlay Content !-->
	</div>
	<!-- END OVERLAY -->

	
	<!-- BEGIN VENDOR JS -->
	<!-- BEGIN VENDOR JS -->
	<script src="/wp-content/themes/dashboard-child/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
	<script src="/wp-content/themes/dashboard-child/assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="/wp-content/themes/dashboard-child/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
	<script src="/wp-content/themes/dashboard-child/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
	<script src="/wp-content/themes/dashboard-child/assets/plugins/popper/umd/popper.min.js" type="text/javascript"></script>
	<script src="/wp-content/themes/dashboard-child/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/wp-content/themes/dashboard-child/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
	<script src="/wp-content/themes/dashboard-child/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
	<script src="/wp-content/themes/dashboard-child/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
	<script src="/wp-content/themes/dashboard-child/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
	<script src="/wp-content/themes/dashboard-child/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- END VENDOR JS -->
	<!-- BEGIN CORE TEMPLATE JS -->
	<script src="/wp-content/themes/dashboard-child/pages/js/pages.min.js" type="text/javascript"></script>
	<!-- END CORE TEMPLATE JS -->
	<!-- BEGIN PAGE LEVEL JS -->
	<script src="/wp-content/themes/dashboard-child/assets/js/scripts.js" type="text/javascript"></script>
	<script type="text/javascript">
		
		function myFunction() {
  		// Declare variables
  			var input, filter, table, tr, td, i, txtValue;
  			input = document.getElementById("myInput");
  			filter = input.value.toUpperCase();
 			table = document.getElementById("myTable");
  			tr = table.getElementsByTagName("tr");

  			// Loop through all table rows, and hide those who don't match the search query
  			for (i = 0; i < tr.length; i++) {
    			td = tr[i].getElementsByTagName("td")[0];
    			if (td) {
      				txtValue = td.textContent || td.innerText;
      				if (txtValue.toUpperCase().indexOf(filter) > -1) {
        				tr[i].style.display = "";
     				} 
     				else {
        				tr[i].style.display = "none";
     				}
    			}
  			}
		}
		
		function displayCompanies(){ 
			var checkbox = document.getElementById("companycheckbox"); 
			var container  = document.getElementById("companiescontainer");
			//select dropdown variable needed
			if(checkbox.checked = true) {
				//set the display of the attributes in the div to none and set the display of the select to visible
				
			}
			else { 
				//do the opposite
			}

		}

		// start operations on companies widget 
		jQuery(document).ready(function(){
  		jQuery(".companiesButton").click(function(){
    		jQuery("#myModal").css("display", "block");
    		
  		});
  		jQuery("#close").click(function(){
    		jQuery("#myModal").css("display", "none");
    		
  		});

			});
		// when the user clicks outside of the modal then close it
		/*
		window.onclick = function(event) {
  		if (event.target == modal) {
    	modal.style.display = "none";
  		}
		*/

	</script>



	<!-- END PAGE LEVEL JS -->
</body>

</html>