<?/* Template Name: Calendar Template */ 
wp_head();
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		html, body{
			min-height: 100%;
		}
		body{

			justify-content: center;
		}
		
		.header-grid{
			list-style: none;
		}
		.table-container{
			display:flex;
			flex-direction: row;
		}
		.table-container > div{
			width: 100px;
		}
	</style>
	<title></title>
</head>
<body class="fixed-header menu-pin menu-behind customize-support">
<nav class="page-sidebar" data-pages="sidebar">
		<!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
		<div class="sidebar-overlay-slide from-top" id="appMenu"> </div>
		<!-- END SIDEBAR MENU TOP TRAY CONTENT-->
		<!-- BEGIN SIDEBAR MENU HEADER-->
		<div class="sidebar-header"> <img src="<?php echo get_template_directory_uri().'/assets/img/logo_white.png'?>" alt="logo" class="brand" data-src="<?php echo get_template_directory_uri().'/assets/img/logo_white.png'?>" data-src-retina="https://final.peoplecount.work/public_html/wp-content/themes/peopleCount/img/logo_white_2x.png" width="78" height="22">
			<div class="sidebar-header-controls">
				<button aria-label="Toggle Drawer" type="button" class="btn btn-icon-link invert sidebar-slide-toggle m-l-20 m-r-10" data-pages-toggle="#appMenu"> <i class="pg-icon">chevron_down</i> </button>
				<button aria-label="Pin Menu" type="button" class="btn btn-icon-link invert d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar"> <i class="pg-icon"></i> </button>
			</div>
		</div>
		<!-- END SIDEBAR MENU HEADER-->
		<!-- START SIDEBAR MENU -->
		<div class="sidebar-menu">
			<!-- BEGIN SIDEBAR MENU ITEMS-->
			<? 

			wp_nav_menu(
				array(
					'theme_location' => 'site-menu',
					'menu_class' => 'menu-items'
				)
			);

			?>
			<div class="clearfix"></div>
		</div>
		<!-- END SIDEBAR MENU -->
	</nav>
	<!-- END SIDEBAR -->

	<!-- START HEADER -->
		<div class="header ">
			<!-- START MOBILE SIDEBAR TOGGLE --><a href="#" class="btn-link toggle-sidebar d-lg-none pg-icon btn-icon-link" data-toggle="sidebar">
				menu</a>
			<!-- END MOBILE SIDEBAR TOGGLE -->
			<div class="">
				<div class="brand inline  m-l-10 "> <img src="<?php echo get_template_directory_uri().'/images/peoplecount.png'?>" style="width: 120px; height: 50px;"> </div>
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
												<div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10"> <img width="30" height="30" data-src-retina="<?php echo get_template_directory_uri().'/assets/img/profiles/1x.jpg'?>" data-src="<?php echo get_template_directory_uri().'/assets/img/profiles/1.jpg'?>" alt="" src="<?php echo get_template_directory_uri().'/assets/img/profiles/1.jpg'?>"> </div>
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
							<img src="<?php echo get_template_directory_uri().'/assets/img/profiles/avatar.jpg'?>" alt="" data-src="<?php echo get_template_directory_uri().'/assets/img/profiles/avatar.jpg'?>"
								data-src-retina="<?php echo get_template_directory_uri().'/assets/img/profiles/avatar_small2x.jpg'?>" width="32" height="32">
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

				<div class="table-container">
					<div class="row">
						1
					</div>
					<div class="row">
						2
					</div>
					<div class="row">
						3
					</div>
				</div>



			</div>
		</div>


<script type="text/javascript">
	
	function getDOW( day, month, year){
		//if true a 1 if not then 0
		var isleapYear = (year % 4)== 0 ? true : false;
		var leapFlag = isleapYear && month < 3 ? 1:0;

		// gets the last two digits of the year
		var twoDigYear = year % 100;
		yearCode = (twoDigYear + (twoDigYear/4) ) % 7;
		var monthsArr = [0,3,3,6,1,4,6,2,5,0,3,5];
		// centry codes from 1700s to 2000s
		var centuryObj ={
			1700:4,
			1800:2,
			1900:0,
			2000:6,
			2100:4,
			2200:2,
			2300:0
		};

		var dayofwk = (yearCode + monthsArr[month-1] + centuryObj[year-twoDigYear]  
		+ day - leapFlag ) % 7;

		return dayofwk;
	}
	// get the 

</script>
</body>
</html>