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

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/tree/tree_basic.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/tree/tree_collapsible.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/tree/tree_bracket.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/tree/tree_radial.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/tree/tree_dendrogram.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/tree/tree_dendrogram_radial.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">D3</span> - Tree Layouts</h4>
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
							<a href="d3_tree" class="breadcrumb-item">D3</a>
							<span class="breadcrumb-item active">Tree layouts</span>
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

				<!-- Basic tree -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Basic tree layout</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of basic <code>tree</code> layout in <code>cartesian</code> orientation. The tree layout implements the <code>Reingold-Tilford</code> algorithm for efficient, tidy arrangement of layered nodes. The depth of nodes is computed by distance from the root, leading to a ragged appearance. Demo data is stored in <code>json</code> file format. By default, the tree isn't scalable and has fixed width for better readability, all levels are visible. The layout supports custom styling via CSS.</p>

						<div class="chart-container has-scroll">
							<div class="chart has-minimum-width" id="d3-tree-basic"></div>
						</div>
					</div>
				</div>
				<!-- /basic tree -->


				<!-- Collapsible tree -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Collapsible tree</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">An example of basic tree layout with collapsible nodes. Current example has fixed width of <code>1280px</code>. The object returned by <code>d3.layout.tree</code> is both an object and a function. That is: you can call the layout like any other function, and the layout has additional methods that change its behavior. Like other classes in D3, layouts follow the method chaining pattern where setter methods return the layout itself, allowing multiple setters to be invoked in a concise statement.</p>

						<div class="chart-container has-scroll">
							<div class="chart has-minimum-width" id="d3-tree-collapsible"></div>
						</div>
					</div>
				</div>
				<!-- /collapsible tree -->


				<!-- Cluster dendrogram -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Cluster dendrogram</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p>Basic example of <code>tree dendrogram</code> in <code>cartesian</code> orientation. A dendrogram is a node-link diagram that places leaf nodes of the tree at the same depth. In this example, the classes (leaf nodes) are aligned on the right edge, with the packages (internal nodes) to the left. Data shows the Flare class hierarchy. Demo data is stored in <code>json</code> file format. By default, the tree isn't scalable and has fixed width for better readability, all levels are visible.</p>

						<div class="chart-container has-scroll">
							<div class="chart has-minimum-width" id="d3-tree-dendrogram"></div>
						</div>
					</div>
				</div>
				<!-- /cluster dendrogram -->


				<!-- Bracket layout -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Bracket tree</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p>Example of <code>tree</code> layout with typical <code>bracket</code> style. Demo data is stored in <code>json</code> file format and demonstrates demo set of winners and challengers. All nodes are <code>collapsible</code>. Basic usage demonstrates 2 different data trees that appears on two sides of the bracket. One data set is on one side, while the other is on the opposite side. Mid elbow connections are used to create the links and you can click on a node to collapse/expand it. Instead of resizing, drag and zoom features enabled.</p>

						<div class="chart-container">
							<div class="chart" id="d3-tree-bracket"></div>
						</div>
					</div>
				</div>
				<!-- /bracket layout -->


				<!-- Radial tree layout -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Radial tree layout</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p>Example of basic <code>tree</code> layout in <code>radial</code> orientation. The tree layout implements the <code>Reingold-Tilford</code> algorithm for efficient, tidy arrangement of layered nodes. The depth of nodes is computed by distance from the root, leading to a ragged appearance. Demo data is stored in <code>json</code> file format. By default, the tree isn't scalable and has fixed width for better readability, all levels are visible. The layout supports custom styling via CSS.</p>

						<div class="chart-container has-scroll">
							<div class="chart svg-center" id="d3-tree-radial"></div>
						</div>
					</div>
				</div>
				<!-- /radial tree layout -->


				<!-- Radial cluster dendrogram -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Radial dendrogram</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Basic example of <code>tree dendrogram</code> in <code>radial</code> orientation. A dendrogram is a node-link diagram that places leaf nodes of the tree at the same depth. In this example, the classes (leaf nodes) are aligned on the right edge, with the packages (internal nodes) to the left. Data shows the Flare class hierarchy. Demo data is stored in <code>json</code> file format. By default, the tree isn't scalable and has fixed width for better readability, all levels are visible.</p>

						<div class="chart-container has-scroll">
							<div class="chart svg-center" id="d3-dendrogram-radial"></div>
						</div>
					</div>
				</div>
				<!-- /radial cluster dendrogram -->

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
