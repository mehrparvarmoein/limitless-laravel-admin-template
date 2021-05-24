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
	<script src="../../../../global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="../../../../global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/bars/bars_basic_vertical.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/bars/bars_basic_horizontal.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/bars/bars_basic_tooltip.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/bars/bars_basic_grouped.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/bars/bars_basic_stacked.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/bars/bars_basic_stacked_normalized.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">D3</span> - Basic Bars</h4>
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
							<a href="d3_bars_basic" class="breadcrumb-item">D3</a>
							<span class="breadcrumb-item active">Basic bars</span>
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

				<!-- Vertical bar chart -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Vertical bar chart</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of simple <code>vertical</code> bar chart based on <code>D3.js</code> library. This simple bar chart is constructed from a TSV file storing the demo data. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.format</code> - format percentages; <code>d3.scale.ordinal</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.max</code> - compute domains; <code>d3.svg.axis</code> - display axes.</p>

						<div class="chart-container">
							<div class="chart" id="d3-bar-vertical"></div>
						</div>
					</div>
				</div>
				<!-- /vertical bar chart -->


				<!-- Horizontal bar chart -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Horizontal bar chart</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of simple <code>horizontal</code> bar chart based on <code>D3.js</code> library. This simple bar chart is constructed from a TSV file storing the demo data. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.format</code> - format percentages; <code>d3.scale.ordinal</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.max</code> - compute domains; <code>d3.svg.axis</code> - display axes.</p>

						<div class="chart-container">
							<div class="chart" id="d3-bar-horizontal"></div>
						</div>
					</div>
				</div>
				<!-- /horizontal bar chart -->


				<!-- Tooltip implementation -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Tooltip implementation</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of bar chart with implemented data tooltip. Tooltip functionality is based on <code>D3.tip</code> addition to the <code>D3.js</code> library. For initialization create and return a configurable function for a tooltip. The tip must be called on the context of the target visualization. Tooltips support: styling via CSS, offsets and directions. Direction can be <code>n</code>, <code>s</code>, <code>e</code>, <code>w</code>, <code>nw</code>, <code>ne</code>, <code>sw</code> or <code>se</code>.</p>

						<div class="chart-container">
							<div class="chart" id="d3-bar-tooltip"></div>
						</div>
					</div>
				</div>
				<!-- /tooltip implementation -->


				<!-- Grouped bar chart -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Grouped bar chart</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This <code>grouped</code> bar chart is constructed from a CSV file storing the demo data. The chart employs conventional margins and a number of D3 features: <code>d3.csv</code> - load and parse data; <code>d3.scale.ordinal</code> - x-position encoding and color encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.format</code> - SI prefix formatting (e.g., “10M” for 10,000,000); <code>d3.max</code> - compute domains; <code>d3.keys</code> - compute column names; <code>d3.svg.axis</code> - display axes.</p>

						<div class="chart-container">
							<div class="chart" id="d3-bar-grouped"></div>
						</div>
					</div>
				</div>
				<!-- /grouped bar chart -->


				<!-- Stacked bar chart -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Stacked bar chart</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This <code>stacked</code> bar chart is constructed from a CSV file storing the demo data. The chart employs conventional margins and a number of D3 features: <code>d3.csv</code> - load and parse data; <code>d3.scale.ordinal</code> - x-position encoding and color encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.format</code> - SI prefix formatting (e.g., “10M” for 10,000,000); <code>d3.max</code> - compute domains; <code>d3.keys</code> - compute column names; <code>d3.svg.axis</code> - display axes.</p>

						<div class="chart-container">
							<div class="chart" id="d3-bar-stacked"></div>
						</div>
					</div>
				</div>
				<!-- /stacked bar chart -->


				<!-- Normalized stacked bar chart -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Normalized stacked bar chart</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of <code>normalized</code> stacked bar chart. This variation of a bar chart shows percentages rather than absolute numbers and fills the whole chart area. <code>D3.js</code> library allows us to add transitions between different types of charts. The most common transition is from <code>stacked</code> to <code>grouped</code> chart. Also this type of normalized bar charts can have additional labels for better readability.</p>

						<div class="chart-container">
							<div class="chart" id="d3-bar-normalized"></div>
						</div>
					</div>
				</div>
				<!-- /normalized stacked bar chart -->

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
