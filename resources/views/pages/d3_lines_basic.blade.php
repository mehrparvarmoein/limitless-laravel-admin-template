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
	<script src="../../../../global_assets/js/demo_pages/charts/d3/lines/lines_basic.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/lines/lines_basic_bivariate.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/lines/lines_basic_area.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/lines/lines_basic_multi_series.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/lines/lines_basic_stacked.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/lines/lines_basic_stacked_nest.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/lines/lines_basic_gradient.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">D3</span> - Basic Lines</h4>
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
							<a href="d3_lines_basic" class="breadcrumb-item">D3</a>
							<span class="breadcrumb-item active">Basic lines</span>
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
						<p class="mb-3">Example of simple <code>line chart</code>. Data stores in <code>.tsv</code> file. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.time.format</code> - parse dates; <code>d3.time.scale</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.extent</code> - compute domains; <code>d3.svg.axis</code> - display axes; <code>d3.svg.line</code> - display line shape.</p>

						<div class="chart-container">
							<div class="chart" id="d3-line-basic"></div>
						</div>
					</div>
				</div>
				<!-- /simple line chart -->


				<!-- Area chart -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Area chart</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of <code>area chart</code>. Lines are hidden by default, but can be easily added in chart options. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.time.format</code> - parse dates; <code>d3.time.scale</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.extent</code> and <code>d3.max</code> - compute domains; <code>d3.svg.axis</code> - display axes; <code>d3.svg.area</code> - display area shape.</p>

						<div class="chart-container">
							<div class="chart" id="d3-area-basic"></div>
						</div>
					</div>
				</div>
				<!-- /area chart -->


				<!-- Bivariate area chart -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Bivariate Area Chart</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of <code>two-value</code> area chart. Lines as in previous example are optional. Data stored in <code>.tsv</code> file. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.time.format</code> - parse dates; <code>d3.time.scale</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.extent</code>, <code>d3.min</code> and <code>d3.max</code> - compute domains; <code>d3.svg.axis</code> - display axes; <code>d3.svg.area</code> - display area shape.</p>

						<div class="chart-container">
							<div class="chart" id="d3-area-bivariate"></div>
						</div>
					</div>
				</div>
				<!-- /bivariate area chart -->


				<!-- Multiple series -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Multiple series</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of <code>multiple series</code> line chart. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.time.format</code> - parse dates; <code>d3.time.scale</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.scale.category10</code>, <code>d3.scale.ordinal </code>- color encoding; <code>d3.extent</code>, <code>d3.min</code> and <code>d3.max</code> - compute domains; <code>d3.keys</code> - compute column names; <code>d3.svg.axis</code> - display axes; <code>d3.svg.line</code> - display line shape.</p>

						<div class="chart-container">
							<div class="chart" id="d3-line-multi-series"></div>
						</div>
					</div>
				</div>
				<!-- /multiple series -->


				<!-- Stacked areas -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Stacked areas</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of <code>stacked area</code> chart. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.time.format</code> - parse dates; <code>d3.format</code> - format percentages; <code>d3.time.scale</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.scale.category20</code>, <code>d3.scale.ordinal</code> - color encoding; <code>d3.extent</code> and <code>d3.max</code> - compute domains; <code>d3.layout.stack</code> - compute stacked y-positions; <code>d3.keys</code> - compute column names; <code>d3.svg.axis</code> - display axes; <code>d3.svg.area</code> - display area shape.</p>

						<div class="chart-container">
							<div class="chart" id="d3-area-stacked"></div>
						</div>
					</div>
				</div>
				<!-- /stacked areas -->


				<!-- Stacked areas via nest -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Stacked areas via nest</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of stacked areas via nest, constructed from a CSV file. The chart employs conventional margins and a number of D3 features: <code>d3.tsv</code> - load and parse data; <code>d3.time.format</code> - parse dates; <code>d3.format</code> - format percentages; <code>d3.time.scale</code> - x-position encoding; <code>d3.scale.linear</code> - y-position encoding; <code>d3.scale.category20</code>, <code>d3.scale.ordinal</code> - color encoding; <code>d3.extent</code> and <code>d3.max</code> - compute domains; <code>d3.layout.stack</code> - compute stacked y-positions; <code>d3.keys</code> - compute column names; <code>d3.svg.axis</code> - display axes; <code>d3.svg.area</code> - display area shape.</p>

						<div class="chart-container">
							<div class="chart" id="d3-area-stacked-nest"></div>
						</div>
					</div>
				</div>
				<!-- /stacked areas via nest -->


				<!-- Gradient encoding -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Gradient encoding</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This variation of a line chart demonstrates how to use a <code>linear gradient</code> as a quantitative color encoding redundant with <code>y-position</code>. The gradient units are defined as userSpaceOnUse, such that the gradient stops can be positioned explicitly rather than based on the line’s bounding box.</p>

						<div class="chart-container">
							<div class="chart" id="d3-line-gradient"></div>
						</div>
					</div>
				</div>
				<!-- /gradient encoding -->

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
