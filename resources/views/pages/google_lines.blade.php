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
	<script src="https://www.gstatic.com/charts/loader.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/lines/lines.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/lines/area.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/lines/area_stacked.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/lines/line_intervals.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/lines/area_intervals.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/lines/area_stepped.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Google</span> - Line Charts</h4>
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
							<a href="google_lines" class="breadcrumb-item">Google</a>
							<span class="breadcrumb-item active">Line charts</span>
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

				<!-- Simple line chart -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Simple line chart</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of simple <code>line</code> chart based on Google visualization library. A line chart or line graph is a type of chart which displays information as a series of data points called 'markers' connected by straight line segments. Line Charts show how a particular data changes at equal intervals of time. A line chart is rendered within the browser using <code>SVG</code> or <code>VML</code>. Displays tips when hovering over points.</p>

						<div class="chart-container">
							<div class="chart" id="google-line"></div>
						</div>
					</div>
				</div>
				<!-- /simple line chart -->


				<!-- Simple area chart -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Simple area chart</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of <code>area</code> chart. An area chart or area graph displays graphically quantitive data. It is based on the line chart. The area between axis and line are commonly emphasized with colors, textures and hatchings. Commonly one compares with an area chart two or more quantities. An area chart that is rendered within the browser using <code>SVG</code> or <code>VML</code>. Displays tips when hovering over points.</p>

						<div class="chart-container">
							<div class="chart" id="google-area"></div>
						</div>
					</div>
				</div>
				<!-- /simple area chart -->


				<!-- Stacked area chart -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Stacked area chart</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of <code>stacked area</code> chart. By default, the area chart draws the series on top of one another. You can stack them atop one another instead, so that the data values at each x-value are summed. The order of the legend entries in stacked chart is different - it is reversed, placing series 0 at the bottom, to better correspond with the stacking of the series elements, making the legend correspond to the data.</p>

						<div class="chart-container">
							<div class="chart" id="google-area-stacked"></div>
						</div>
					</div>
				</div>
				<!-- /stacked area chart -->


				<!-- Line intervals -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Line intervals</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of <code>line intervals</code> in charts. Intervals around a series might be used to portray confidence intervals, minimum and maximum values around a value, percentile sampling, or anything else that requires a varying margin around a series. Line intervals are sometimes used to show the raw data from which a trendline was extracted. To draw a trendline on a chart, use the trendlines option and specify which data series to use.</p>

						<div class="chart-container">
							<div class="chart" id="google-line-intervals"></div>
						</div>
					</div>
				</div>
				<!-- /line intervals -->


				<!-- Area intervals -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Area intervals</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of <code>area intervals</code>in charts. An area interval renders interval data as a set of nested shaded areas. Nesting of pairs of columns is similar to that of box intervals, except that an even number of columns is required. This is accomplished by setting style to <code>'area'</code>. There are six styles of interval: <code>line</code>, <code>bar</code>, <code>box</code>, <code>stick</code>, <code>point</code>, and <code>area</code>. For even greater customization, intervals styles can be combined inside one chart.</p>

						<div class="chart-container">
							<div class="chart" id="google-area-intervals"></div>
						</div>
					</div>
				</div>
				<!-- /area intervals -->


				<!-- Stepped area chart -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Stepped area chart</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of <code>stepped area</code> chart. A stepped area chart is rendered within the browser using <code>SVG</code> or <code>VML</code>. Displays tips when hovering over steps. The Step Line chart type is similar to the Line chart type, but it does not use the shortest distance to connect two data points. Instead, this chart type uses vertical and horizontal lines to connect the data points in a series forming a step-like progression.</p>

						<div class="chart-container">
							<div class="chart" id="google-area-stepped"></div>
						</div>
					</div>
				</div>
				<!-- /stepped area chart -->

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
