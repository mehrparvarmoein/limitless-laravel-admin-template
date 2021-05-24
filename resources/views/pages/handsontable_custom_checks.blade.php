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
	<script src="../../../../global_assets/js/demo_pages/handsontable_custom_checks.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Handsontable</span> - Custom &amp; Checkboxes</h4>
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
							<a href="handsontable_custom_checks" class="breadcrumb-item">Handsontable</a>
							<span class="breadcrumb-item active">Custom &amp; checkboxes</span>
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


				<!-- Custom renderers -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Custom renderers</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="mb-4">
							<h6 class="font-weight-semibold">Rendering custom HTML in cells</h6>
							<p class="mb-3">This example shows how to use custom cell renderers to display HTML content in a cell. This is a very powerful feature. Just remember to escape any HTML code that could be used for XSS attacks. In the below configuration all columns except the first one use built-in HTML renderer that allows any HTML. Icon column accepts image URL as a string and converts it to a <code>&lt;img></code> in the renderer.</p>

							<div class="hot-container">
								<div id="hot_html_cells"></div>
							</div>
						</div>

						<div class="mb-4">
							<h6 class="font-weight-semibold">Rendering custom HTML in header</h6>
							<p class="mb-3">You can also put HTML into row and column headers. If you need to attach events to DOM elements like the checkbox below, just remember to identify the element by class name, not by id. This is because row and column headers are duplicated in the DOM tree and id attribute must be unique. Checking checkbox adds background color to the whole column.</p>

							<div class="hot-container">
								<div id="hot_html_header"></div>
							</div>
						</div>

						<div>
							<h6 class="font-weight-semibold">Changing cell type</h6>
							<p class="mb-3">This example makes use of a plugin hook to add a custom dropdown menu to the cell header. It adds a customizable button to columns headers and attaches dropdown menu to each button with list of cell types. If column already has a type, active menu item is highlighted with checkmark icon. Cell formatting is also supported in all cell types.</p>

							<div class="hot-container">
								<div id="hot_change_type"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /custom renderers -->


				<!-- Checkboxes -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Checkboxes</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="mb-4">
							<h6 class="font-weight-semibold">Checkbox true/false values</h6>
							<p class="mb-3">The following examples show how to configure Handsontable with Checkbox cell type, which can be helpfull when you have cells that contains only 2 possible values. Data in such cells will be rendered as checkbox and can be easily changed by checking/unchecking the checkbox. Checking and unchecking can be performed using mouse or by pressing <kbd>SPACE</kbd>. You can also change the state of multiple cells at once. Here columns data have <code>true</code> or <code>false</code> value and we want to display ony checkboxes.</p>

							<div class="hot-container">
								<div id="hot_checks_values"></div>
							</div>
						</div>

						<div class="mb-4">
							<h6 class="font-weight-semibold">Checkbox labels</h6>
							<p class="mb-3">The following example demonstrates an ability to use a cell as a text label. If you want to add label to the checkbox you can use <code>label</code> option. With this option you can declare where label will be injected (before or after checkbox element) and from what data source label text will be updated. Here checkbox labels are taken from <strong>"Model"</strong> data source.</p>

							<div class="hot-container">
								<div id="hot_checks_labels"></div>
							</div>
						</div>

						<div class="mb-4">
							<h6 class="font-weight-semibold">Checkbox template</h6>
							<p class="mb-3">The following example demonstrates how to use checkbox templates. If you want use other values than <code>true</code> and <code>false</code>, you have to provide this information using <code>checkedTemplate</code> and <code>uncheckedTemplate</code> added to <code>columns: []</code> configuration. Handsontable will then update your data using appropriate template. </p>

							<div class="hot-container">
								<div id="hot_checks_template"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /checkboxes -->

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
