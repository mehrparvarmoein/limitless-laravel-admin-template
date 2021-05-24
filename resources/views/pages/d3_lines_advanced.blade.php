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
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="../../../../global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>

	<script src="assets/js/app.js"></script>		
	<script src="../../../../global_assets/js/demo_pages/charts/d3/lines/lines_advanced_difference.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/lines/lines_advanced_missing.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/lines/lines_advanced_small_multiples.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/lines/lines_advanced_transitions.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/lines/lines_advanced_zoom.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/lines/lines_advanced_spline_transition.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">D3</span> - Advanced Lines</h4>
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
							<a href="d3_lines_advanced" class="breadcrumb-item">D3</a>
							<span class="breadcrumb-item active">Advanced lines</span>
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

				<!-- Chained transitions -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Chained transitions</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This variation of a line chart demonstrates a sequence of <code>chained transitions</code>. Clicking on the radio buttons changes the displayed metric. First, the line transitions to the new values. Then, the axes rescale to fit the new data. X-axes remain the same. Transitions may have per-element delays and durations, computed using functions of data similar to other operators. This makes it easy to stagger a transition for different elements, either based on data or index.</p>
						<p>
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input type="radio" name="city" class="chained" value="New York" checked data-fouc>
									New York
								</label>
							</div>
							
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input type="radio" name="city" class="chained" value="San Francisco" data-fouc>
									San Francisco
								</label>
							</div>
						</p>

						<div class="chart-container">
							<div class="chart" id="d3-chained-transitions"></div>
						</div>
					</div>
				</div>
				<!-- /chained transitions -->


				<!-- Difference area chart -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Difference area chart</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of bivariate area chart that uses <code>clipping</code> to alternate colors. This example demonstrates the difference in temperatures of 2 cities: When New York is warmer than San Francisco, the difference between the two is filled in green. When San Francisco is warmer, the difference is filled in orange. Colors can be set directly in JS code or in CSS. Demo data is stored in <code>TSV</code> file.</p>

						<div class="chart-container">
							<div class="chart" id="d3-difference"></div>
						</div>
					</div>
				</div>
				<!-- /difference area chart -->


				<!-- Pan and zoom -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Pan and zoom</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">An example of <code>d3.behavior.zoom</code> applied using <code>x-</code> and <code>y-scales</code>. This behavior automatically creates event listeners to handle zooming and panning gestures on a container element. Both mouse and touch events are supported. Scale extent from 1 to 10, try to move the graph inside area and use mouse wheel for zoom in/zoom out.</p>

						<div class="chart-container">
							<div class="chart" id="d3-pan-zoom"></div>
						</div>
					</div>
				</div>
				<!-- /pan and zoom -->


				<!-- Small multiples -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Small multiples</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Multiple clarts within 1 container. This example shows a few interesting techniques with D3.js: 1. Stock prices in <code>CSV format</code> are loaded asynchronously; 2. Stock prices are <code>nested</code> by symbol; 3. The <code>x-scale</code> is the minimum and maximum across symbols; 4. The <code>y-scale</code> is local to each symbol; the domain is set per multiple; 5. Area and line shapes are used to fill and stroke separately.</p>

						<div class="chart-container">
							<div class="chart" id="d3-small-multiples"></div>
						</div>
					</div>
				</div>
				<!-- /small multiples -->


				<!-- Path transitions -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Path transitions</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of <code>path transitions</code>. When implementing realtime displays of time-series data, we often use the x-axis to encode time as position: as time progresses, new data comes in from the right, and old data slides out to the left. D3 has many built-in interpolators to simplify the transitioning of arbitrary values; an interpolator is a function that maps a parametric value t in the <code>domain [0,1]</code> to a color, number or arbitrary value.</p>
						<div class="chart-container">
							<div class="chart" id="d3-spline-transition"></div>
						</div>
					</div>
				</div>
				<!-- /path transitions -->


				<!-- Missing data with tooltips -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Missing data with tooltips</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of chart with <code>missed data</code> and <code>d3-tip</code> tooltip extension. Regions with missed data remain unfilled and reserve the space, so the whole chart looks like a full chart with empty areas. D3 tooltips are added to the <code>dots</code>, appended to the <code>body</code> and positioned on <code>top</code>.Tooltips support: styling via CSS, offsets and directions. Direction can be <code>n</code>, <code>s</code>, <code>e</code>, <code>w</code>, <code>nw</code>, <code>ne</code>, <code>sw</code> or <code>se</code>. The direction will also automatically be included as a classname on the tooltip element which allows for different style hooks based on the direction.</p>
						<div class="chart-container">
							<div class="chart" id="d3-missing-data"></div>
						</div>
					</div>
				</div>
				<!-- /missing data with tooltips -->

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
