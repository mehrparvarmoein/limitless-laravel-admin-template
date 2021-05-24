<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../../../../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /core JS files -->

	<!-- Page JS files -->
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/fullcalendar/core/main.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/fullcalendar/daygrid/main.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/fullcalendar/timegrid/main.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/fullcalendar/list/main.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/fullcalendar/interaction/main.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/fullcalendar/core/locales/ar.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/fullcalendar_advanced.js"></script>
	<!-- /Page JS files -->

</head>

<body>

	<!-- Main navbar -->
	@include('layouts.navbar')
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		@include('layouts.sidebar')
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Fullcalendar</span> - Advanced</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
								<i class="icon-bars-alt text-pink-300"></i>
								<span>Statistics</span>
							</a>
							<a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
								<i class="icon-calculator text-pink-300"></i>
								<span>Invoices</span>
							</a>
							<a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
								<i class="icon-calendar5 text-pink-300"></i>
								<span>Schedule</span>
							</a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="fullcalendar_advanced" class="breadcrumb-item">Fullcalendar</a>
							<span class="breadcrumb-item active">Advanced</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Support
							</a>

							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- External events -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">External events</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>
					
					<div class="card-body">
						<p class="mb-3">It’s possible to take elements that live outside of a calendar and make them drag-and-droppable. When they are dropped on a specific date of a calendar, a new event might be created and certain callbacks might fire. It is possible to achieve this using FullCalendar alone, without any third party libraries. In the most basic case, you can create a draggable element by instantiating a <code>Draggable</code>. You must also set the calendar’s <code>droppable</code> setting to true and import the <code>interaction</code> plugin.</p>

						<div class="row">
							<div class="col-md-3">
								<div class="mb-3" id="external-events">
									<h6>Draggable Events</h6>
									<div class="fc-events-container mb-3">
										<div class="fc-event" data-color="#546E7A">Sauna and stuff</div>
										<div class="fc-event" data-color="#26A69A">Lunch time</div>
										<div class="fc-event" data-color="#546E7A">Meeting with Fred</div>
										<div class="fc-event" data-color="#FF7043">Shopping</div>
										<div class="fc-event" data-color="#5C6BC0">Restaurant</div>
										<div class="fc-event">Basketball</div>
										<div class="fc-event">Daily routine</div>
									</div>

									<div class="form-check form-check-right form-check-switchery">
										<label class="form-check-label">
											<input type="checkbox" class="form-check-input-switchery" checked id="drop-remove" data-fouc>
											Remove after drop
										</label>
									</div>
								</div>
							</div>

							<div class="col-md-9">
								<div class="fullcalendar-external"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /external events -->


				<!-- RTL layout -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">RTL support</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>
					
					<div class="card-body">
						<p class="mb-3">FullCalendar library also supports RTL text direction, useful for right-to-left languages such as Arabic and Hebrew. To display the calendar in right-to-left mode, set <code>dir</code> plugin option to <code>true</code>. This option switches class in calendar container to <code>.fc-rtl</code> and changes the layout accordingly to the specific css styles. RTL version supports all features and options available in LTR mode.</p>

						<div class="fullcalendar-rtl"></div>
					</div>
				</div>
				<!-- /RTL layout -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
