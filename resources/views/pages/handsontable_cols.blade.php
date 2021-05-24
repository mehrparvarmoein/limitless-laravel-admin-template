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
	<script src="../../../../global_assets/js/demo_pages/handsontable_cols.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Handsontable</span> - Columns</h4>
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
							<a href="handsontable_cols" class="breadcrumb-item">Handsontable</a>
							<span class="breadcrumb-item active">Columns</span>
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


				<!-- Fixed columns and rows -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Fixed columns and rows</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The following example demonstrates how to make certain columns and rows fixed when scrolling is enabled. To enable this functionality, specify amount of fixed rows with <code>fixedRowsTop</code> and amount of fixed columns with <code>fixedColumnsLeft</code> options. <strong>Note:</strong> You'll need horizontal scrollbars, so just set a container <code>width</code> and <code>overflow: auto</code> in CSS or simply add pre-defined <code>hot-scrollable</code> class to the parent container.</p>

						<div class="hot-container hot-scrollable">
							<div id="hot_fixed"></div>
						</div>
					</div>
				</div>
				<!-- /fixed columns and rows -->


				<!-- Scrolling enabled -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Scrolling enabled</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The following example demonstrates vertical and horizontal scrolling of the table. If you want scrollbars, just set container <code>width</code>, <code>height</code> and <code>overflow: auto</code> in CSS. Or simply add <code>hot-scrollable</code> class to the parent container. This demo shows table of 250 rows and columns. Only visible part is rendered. Native div scrollbar is used to scroll through the table.</p>

						<div class="hot-container hot-scrollable">
							<div id="hot_scroll"></div>
						</div>
					</div>
				</div>
				<!-- /scrolling enabled -->


				<!-- Columns frezing -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Columns freezing</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">In order to manually freeze a column (in another words - make it fixed), you need to set the <code>manualColumnFreeze</code> config item to <code>true</code> in Handsontable initialization. When the <strong>Manual Column Freeze</strong> plugin is enabled, you can freeze <strong>any</strong> non-fixed column and unfreeze any fixed column in your Handsontable instance using the Context Menu. <strong>Note:</strong> to properly use this plugin, you need to have the Context Menu plugin enabled.</p>

						<div class="hot-container hot-scrollable">
							<div id="hot_freezing"></div>
						</div>
					</div>
				</div>
				<!-- /columns frezing -->


				<!-- Columns moving -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Columns moving</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The following example demonstrates an ability to move rows and columns, some kind of drag sorting. To enable these features, use settings <code>manualColumnMove: true</code> and <code>manualRowMove: true</code>. The draggable move handle appears: in the right part of the column header; in the top part of the row header. Handler styling can be customized in less files.</p>

						<div class="hot-container">
							<div id="hot_moving"></div>
						</div>
					</div>
				</div>
				<!-- /columns moving -->


				<!-- Column stretching -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Column stretching</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The following example demonstrates how columns can be stretched using <code>stretchH</code> option. Possible mode values are: <code>none</code> - default value, disables stretching, column width depends on the content width; <code>last</code> - stretch only the last column; <code>all</code> - stretch all the columns evenly. Example below uses <code>stretchH: 'last'</code> to stretch only last column.</p>

						<div class="hot-container">
							<div id="hot_stretch"></div>
						</div>
					</div>
				</div>
				<!-- /column stretching -->


				<!-- Resizable -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Resizable rows and columns</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The following example demonstrates manual row and column resizing feature using <code>manualRowResize</code> and <code>manualColumnResize</code> options. Can be either set to a boolean or define initial column and row resized widths. In addition, columns width and row heights have custom values defined in an arrays of numbers added to <code>colWidths</code> and <code>rowHeights</code> options.</p>

						<div class="hot-container">
							<div id="hot_resize"></div>
						</div>
					</div>
				</div>
				<!-- /resizable -->

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
