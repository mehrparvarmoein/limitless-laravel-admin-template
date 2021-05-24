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
	<script src="../../../../global_assets/js/demo_pages/charts/d3/bars/bars_advanced_simple_interaction.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/bars/bars_advanced_sortable_horizontal.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/bars/bars_advanced_sortable_vertical.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/bars/bars_advanced_stacked_multiple.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/bars/bars_advanced_histogram.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/bars/bars_advanced_hierarchical.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">D3</span> - Advanced Bars</h4>
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
							<a href="d3_bars_advanced" class="breadcrumb-item">D3</a>
							<span class="breadcrumb-item active">Advanced bars</span>
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

				<!-- Simple interaction -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Simple interaction</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This <code>interactive</code> bar chart demonstrates basic interactivity: tooltips that display bar value; multiple data sets with smooth animation between them; color range option; bar value position and appearance. "Change data set" checkbox changes data sets and launches smooth transition between them, uncheck this checkbox to change data set to the first one. <code>Tooltip</code> is a D3 plugin that is called directly in chart settings.</p>

						<div class="form-check mb-3">
							<label class="form-check-label">
								<input type="checkbox" class="toggle-dataset" data-fouc>
								Change data set
							</label>
						</div>

						<div class="chart-container">
							<div class="chart" id="d3-simple-interaction"></div>
						</div>
					</div>
				</div>
				<!-- /simple interaction -->


				<!-- Sortable vertical bar chart -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Sortable vertical bar chart</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This variation of a simple bar chart adds <code>sorting</code> with staggered delay and translucency to improve readability during the transition. Use the checkbox in the top right to turn sorting on or off. During the sort, bars keep their default colors for better visibility. There's an additional side padding added to the chart area, distance between bars as well as their size are fully customizable.</p>

						<div class="form-check mb-3">
							<label class="form-check-label">
								<input type="checkbox" class="toggle-sort" data-fouc>
								Sort values
							</label>
						</div>

						<div class="chart-container">
							<div class="chart" id="d3-bar-sortable-vertical"></div>
						</div>
					</div>
				</div>
				<!-- /sortable vertical bar chart -->


				<!-- Sortable horizontal bar chart -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Sortable horizontal bar chart</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Another example demonstrating how to <code>sort</code> a horizontal bar chart and animate the reordering. The staggered delay makes it easier to follow individual bars. As in horizontal bar chart example, bars keep their original colors. Optional value text can be placed on the left and right sides or centered. Bar height depend on chart container height and bar number displayed.</p>

						<div class="chart-container">
							<div class="chart" id="d3-bar-sortable-horizontal"></div>
						</div>
					</div>
				</div>
				<!-- /sortable horizontal bar chart -->


				<!-- Stacked to multiples -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Stacked to multiples</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This variation of a stacked bar chart adds an option to change <code>stacked</code> bar chart <code>to multiple</code> on the fly by selecting the radio button. Chart labels move according to the bar group position. This type of layout and transitions are available for both bar directions - vertical and horizontal. It uses one data set for both chart types. Vertical axes labels are optional and hidden by default.</p>
						
						<p class="mb-3">
							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input type="radio" name="stacked-multiple" class="stacked-multiple" value="multiples" checked data-fouc>
									Multiples
								</label>
							</div>

							<div class="form-check form-check-inline">
								<label class="form-check-label">
									<input type="radio" name="stacked-multiple" class="stacked-multiple" value="stacked" data-fouc>
									Stacked
								</label>
							</div>
						</p>
						
						<div class="chart-container">
							<div class="chart" id="d3-bar-stacked-multiples"></div>
						</div>
					</div>
				</div>
				<!-- /stacked to multiples -->


				<!-- Histogram with tooltip -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Histogram with tooltip</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This example shows basic <code>histogram</code> with optional tooltip. The data is randomly generated. The values are then binned at regular intervals using D3’s histogram layout. The x-axis uses a linear scale, such that the tick values appear between bars; this provides better indication that each bar represents the count of values between its surrounding tick values.</p>

						<div class="chart-container">
							<div class="chart" id="d3-histogram"></div>
						</div>
					</div>
				</div>
				<!-- /histogram with tooltip -->


				<!-- Path transitions -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Hierarchical bar chart</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This bar chart visualizes hierarchical data using D3. Each blue bar represents a folder, whose length encodes the total size of all files in that folder (and all subfolders). Clicking on a bar dives into that folder, while clicking on the background bubbles back up to the parent folder. Data stored in JSON file.</p>

						<div class="chart-container">
							<div class="chart" id="d3-hierarchical-bars"></div>
						</div>
					</div>
				</div>
				<!-- /path transitions -->

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
