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
	<script src="../../../../global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/echarts/pies_donuts.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">ECharts</span> - Pies &amp; Donuts</h4>
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
							<a href="echarts_pies_donuts" class="breadcrumb-item">ECharts</a>
							<span class="breadcrumb-item active">Pies &amp; donuts</span>
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

				<!-- Pie and donut -->
				<div class="row">
					<div class="col-xl-6">

						<!-- Basic pie -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Basic pie chart</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart has-fixed-height" id="pie_basic"></div>
								</div>
							</div>
						</div>
						<!-- /basic pie -->

					</div>

					<div class="col-xl-6">

						<!-- Basic donut -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Basic donut chart</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart has-fixed-height" id="pie_donut"></div>
								</div>
							</div>
						</div>
						<!-- /basic donut -->

					</div>
				</div>	
				<!-- /pie and donut -->


				<!-- Nested and infographic -->
				<div class="row">
					<div class="col-xl-6">

						<!-- Nested pie chart -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Nested pie chart</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart has-fixed-height" id="pie_nested"></div>
								</div>
							</div>
						</div>
						<!-- /nested pie chart -->

					</div>

					<div class="col-xl-6">

						<!-- Infographic style -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Infographic style</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart has-fixed-height" id="pie_infographic"></div>
								</div>
							</div>
						</div>
						<!-- /infographic style -->

					</div>
				</div>	
				<!-- /nested and infographic -->


				<!-- Nightingale roses -->
				<div class="row">
					<div class="col-xl-6">

						<!-- Nightingale roses (hidden labels) -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Nightingale roses (hidden labels)</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart has-fixed-height" id="pie_rose"></div>
								</div>
							</div>
						</div>
						<!-- /nightingale roses (hidden labels) -->

					</div>

					<div class="col-xl-6">

						<!-- Nightingale roses (visible labels) -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Nightingale roses (visible labels)</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart has-fixed-height" id="pie_rose_labels"></div>
								</div>
							</div>
						</div>
						<!-- /nightingale roses (visible labels) -->

					</div>
				</div>
				<!-- /nightingale roses -->


				<!-- Multi levels and timeline -->
				<div class="row">
					<div class="col-xl-6">

						<!-- Multi level donut chart -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Multi level donut chart</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart has-fixed-height" id="pie_levels"></div>
								</div>
							</div>
						</div>
						<!-- /multi level donut chart -->

					</div>

					<div class="col-xl-6">

						<!-- Pie chart timeline -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Pie chart timeline</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart has-fixed-height" id="pie_timeline"></div>
								</div>
							</div>
						</div>
						<!-- /pie chart timeline -->

					</div>
				</div>
				<!-- /multi levels and timeline -->


				<!-- Donut multiples -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Donut multiples</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="chart-container">
							<div class="chart has-fixed-height" id="pie_multiples"></div>
						</div>
					</div>
				</div>
				<!-- /donut multiples -->

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
