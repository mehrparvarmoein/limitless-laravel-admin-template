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
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/handsontable_cells.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Handsontable</span> - Cells</h4>
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
							<a href="handsontable_cells" class="breadcrumb-item">Handsontable</a>
							<span class="breadcrumb-item active">Cells</span>
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


				<!-- Data validation -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Data validation</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The following example demonstrates cell validation. Use the <code>validator</code> method to easily validate synchronous or asynchronous changes to a cell. If you need more control, <code>beforeValidate</code> and <code>afterValidate</code> plugin hooks are available. In the below example, <code>email_validator_fn</code> is an async validator that resolves after <code>1000 ms</code>.</p>

						<div class="hot-container mb-3">
							<div id="hot_validation"></div>
						</div>

						<p>Edit the above grid to see callback:</p>
						<pre class="language-javascript"><code id="hot_validation_console">// Validation callback</code></pre>
					</div>
				</div>
				<!-- /data validation -->


				<!-- Drag down -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Drag down</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Drag down example. Notice the little square (<strong>fill</strong> handle) in the corner of the selected cell. You can drag it (drag-down) to repeat the values from the cell. Double click the fill handle in cell <strong>B8</strong> (value "47382") to fill the selection down to the last value in neighbouring column, just like it would in LibreOffice or Google Docs.</p>

						<div class="hot-container">
							<div id="hot_drag"></div>
						</div>
					</div>
				</div>
				<!-- /drag down -->


				<!-- Merge cells -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Merge cells</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The following example demonstrates an ability to merge table cells. To enable the merge cells feature, set the <code>mergeCells</code> option to be <code>true</code> or an <code>array</code>. To initialize Handsontable with predefined merged cells, provide merged cells details in form of an array: <code>mergeCells: [{row: 1, col: 1, rowspan: 2, colspan: 2}]</code>. Context menu provides an option to merge/unmerge the cells.</p>

						<div class="hot-container">
							<div id="hot_merge"></div>
						</div>
					</div>
				</div>
				<!-- /merge cells -->


				<!-- Alignment -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Alignment</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">To initialize Handsontable with predefined horizontal and vertical alignment, provide className cells details in form of a grid, columns or cell setting. Available classNames: <strong>Horizontal</strong> - <code>htLeft</code>, <code>htCenter</code>, <code>htRight</code>, <code>htJustify</code>; <strong>Vertical</strong> - <code>htTop</code>, <code>htMiddle</code>, <code>htBottom</code>. Context menu also includes alignment option for both horizontal and vertical orientations.</p>

						<div class="hot-container">
							<div id="hot_alignment"></div>
						</div>
					</div>
				</div>
				<!-- /alignment -->


				<!-- Read only -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Read only</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The following example demonstrates how to configure columns or cells to be read only. Here cells that contain the word <strong>"Nissan"</strong> are read only. It forces all cells to be rendered by <code>myReadonlyRenderer</code>, which will decide whether a cell is really read only by checking its <code>readOnly</code> property. To make a full column read only, declare it in the <code>columns</code> setting. You can also define a special renderer function that will dim the read-only values.</p>

						<div class="hot-container">
							<div id="hot_readonly"></div>
						</div>
					</div>
				</div>
				<!-- /read only -->


				<!-- Disable cell editing -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Disable cell editing</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The following example demonstrates how to configure columns or cells to be not editable. Here the table with non-editable cells containing the word <strong>“Nissan”</strong>. This property of the cell is optional and can be easily set in the configuration of Handsontable. To make a full column non-editable, declare it in the <code>columns</code> setting. You can also define a special renderer function that will dim the editor value.</p>

						<div class="hot-container">
							<div id="hot_non_editable"></div>
						</div>
					</div>
				</div>
				<!-- /disable cell editing -->

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
