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
	<script src="../../../../global_assets/js/demo_pages/handsontable_ac_password.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Handsontable</span> - Autocomplete &amp; Password</h4>
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
							<a href="handsontable_ac_password" class="breadcrumb-item">Handsontable</a>
							<span class="breadcrumb-item active">Autocomplete &amp; password</span>
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


				<!-- Autocomplete type -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Autocomplete type</h5>
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
							<h6 class="font-weight-semibold">Autocomplete lazy mode</h6>
							<p class="mb-3">This example shows the usage of the Autocomplete feature in the default <code>lazy</code> mode. In this mode, user can choose one of the suggested options while typing or enter a custom value that is not included in the suggestions. In this mode, the mouse and keyboard bindings are identical as in <code>Handsontable</code> cell type. The options are rendered from the source property which can be an array, or a function that returns an array.</p>

							<div class="hot-container">
								<div id="hot_ac_lazy"></div>
							</div>
						</div>

						<div class="mb-4">
							<h6 class="font-weight-semibold">Autocomplete strict mode</h6>
							<p class="mb-3">This is the same example as above with a difference that autocomplete now runs in <code>strict</code> mode. In this mode, the autocomplete cells will only accept values that are defined in the source array. The mouse and keyboard bindings are identical as in Handsontable cell type with some differences. In strict mode, the <code>allowInvalid</code> option determines the behaviour in case of manual user input.</p>

							<div class="hot-container">
								<div id="hot_ac_strict"></div>
							</div>
						</div>

						<div>
							<h6 class="font-weight-semibold">Autocomplete strict mode (Ajax)</h6>
							<p class="mb-3">Autocomplete can be also used with <code>ajax</code> data source. In the below example, suggestions for the "Car" column are loaded from server. To load data from remote (asynchronous) source, assign a function to the <code>source</code> property. Function should perform the server side request and call the callback function when the result is available.</p>

							<div class="hot-container">
								<div id="hot_ac_ajax"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /autocomplete type -->


				<!-- Password type -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Password type</h5>
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
							<h6 class="font-weight-semibold">Password cell type</h6>
							<p class="mb-3">The following examples show how to configure Handsontable with <code>password</code> cell type. This kind of cell behaves like a text cell with a difference that it masks its value using asterisk in cell renderer. For the cell editor, a <code>&lt;input type="password"></code> field is used. Data is stored in the data source as plain text. Additionally you can specify hash length and custom hash symbols.</p>

							<div class="hot-container">
								<div id="hot_password"></div>
							</div>
						</div>

						<div class="mb-4">
							<h6 class="font-weight-semibold">Fixed hash length</h6>
							<p class="mb-3">The following examples show how to configure Handsontable with <code>password</code> cell type with <strong>limited hash length</strong>. By default every hash has length equal to the length of value that it corresponds with. Use option <code>hashLength</code> added to column configuration to set fixed hash length. Here hash length is set to <code>8</code>, so if password is longer, other symbols are hidden.</p>

							<div class="hot-container">
								<div id="hot_password_fixed"></div>
							</div>
						</div>

						<div>
							<h6 class="font-weight-semibold">Custom hash symbol</h6>
							<p class="mb-3">The following examples show how to configure Handsontable with <code>password</code> cell type with <strong>custom hash symbol</strong>. By default every hash consists of asterisks <code>*</code>. Use option <code>hashSymbol</code> to set custom hash symbol. You can use any character, entity or event HTML. Note that you can't change symbol used by the input field due to browsers limitations.</p>

							<div class="hot-container">
								<div id="hot_password_custom"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /password type -->

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
