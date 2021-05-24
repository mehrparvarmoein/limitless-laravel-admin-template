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
	<script src="../../../../global_assets/js/plugins/tables/handsontable/handsontable.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/handsontable_search.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Handsontable</span> - Search</h4>
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
							<a href="handsontable_search" class="breadcrumb-item">Handsontable</a>
							<span class="breadcrumb-item active">Search</span>
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

				<!-- Info alert -->
				<div class="alert alert-info bg-white alert-styled-left alert-arrow-left alert-dismissible">
					<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
					<h6 class="font-weight-semibold mb-1">RTL support</h6>
					Handsontable library doesn't support RTL direction at the moment. The library will be updated once dev team adds it.
			    </div>
			    <!-- /info alert -->


				<!-- Basic functionality -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Basic functionality</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Search plugin provides an easy interface to perform data search across Handsontable. First thing you should do, is enabling the plugin by setting the <code>search</code> option to <code>true</code>. When enabled, <strong>searchPlugin</strong> exposes a new method <strong>query(queryStr)</strong>, where <code>queryStr</code> is a string to find within the table. By default, the search is case insensitive.</p>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" id="hot_search_basic_input" class="form-control" placeholder="Search">
							<div class="form-control-feedback">
								<i class="icon-search4 font-size-base"></i>
							</div>
						</div>

						<div class="hot-container">
							<div id="hot_search_basic"></div>
						</div>
					</div>
				</div>
				<!-- /basic functionality -->


				<!-- Custom search result class -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Custom search result class</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">By default <code>searchPlugin</code> adds <code>htSearchResult</code> class to every cell which <code>isSearchResult</code> property is <code>true</code>. You can change this class using <code>searchResultClass</code> option. If you wish to change the result class globally (for all Handsontable instances on the page), you can use <code>Handsontable.Search.global.setDefaultSearchResultClass(className)</code> method.</p>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" id="hot_search_class_input" class="form-control" placeholder="Search">
							<div class="form-control-feedback">
								<i class="icon-search4 font-size-base"></i>
							</div>
						</div>

						<div class="hot-container">
							<div id="hot_search_class"></div>
						</div>
					</div>
				</div>
				<!-- /custom search result class -->


				<!-- Custom query method -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Custom query method</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The <code>queryMethod</code> is responsible for determining whether a <code>queryStr</code> matches the value stored in a cell. It takes 2 arguments: <code>queryStr</code> and <code>cellData</code>. The first is a string passed to <code>query()</code> method. The second is a value returned by <code>getDataAtCell()</code>. The <code>queryMethod</code> function should return true if there is a match.</p>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" id="hot_search_query_input" class="form-control" placeholder="Search">
							<div class="form-control-feedback">
								<i class="icon-search4 font-size-base"></i>
							</div>
						</div>

						<div class="hot-container">
							<div id="hot_search_query"></div>
						</div>
					</div>
				</div>
				<!-- /custom query method -->


				<!-- Custom callback -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Custom callback</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">After calling <code>queryMethod</code>, <code>searchPlugin</code> <code>calls callback(instance, rowIndex, colIndex, cellData, testResult)</code> for every cell. The default callback is responsible for setting the <code>isSearchResult</code> property, so if you want to preserve this functionality, be sure to invoke <code>Handsontable.Search.DEFAULT_CALLBACK</code> inside your custom callback.</p>

						<div class="form-group form-group-feedback form-group-feedback-left">
							<input type="text" id="hot_search_callback_input" class="form-control" placeholder="Search">
							<div class="form-control-feedback">
								<i class="icon-search4 font-size-base"></i>
							</div>
						</div>

						<p class="mb-3"><span class="font-weight-semibold" id="result-count">0</span> results found</p>

						<div class="hot-container">
							<div id="hot_search_callback"></div>
						</div>
					</div>
				</div>
				<!-- /custom callback -->

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
