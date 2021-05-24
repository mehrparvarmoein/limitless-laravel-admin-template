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
	<script src="../../../../global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/extensions/scroller.min.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/datatables_extension_scroller.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Datatables</span> - Scroller</h4>
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
							<a href="datatable_extension_scroller" class="breadcrumb-item">Datatables</a>
							<span class="breadcrumb-item active">Scroller</span>
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

				<!-- Basic Scroller example -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Basic example</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<code>Scroller</code> is a plug-in for DataTables which enhances built-in scrolling features to allow large amounts of data to be rendered on page very quickly. This is done by <code>Scroller</code> through the use of a virtual rendering technique that will render <strong>only</strong> the part of the table that is actually required for the current view. Scroller assumes that all rows are of the <strong>same height</strong> (in order to preform the required calculations). Demo data in this example has 2,500 rows.
					</div>

					<table class="table datatable-scroller" width="100%">
						<thead>
							<tr>
					            <th>ID</th>
					            <th>First name</th>
					            <th>Last name</th>
					            <th>ZIP / Post code</th>
					            <th>Country</th>
					        </tr>
						</thead>
					</table>
				</div>
				<!-- /basic Scroller example -->


				<!-- With Buttons extension -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">With Buttons extension</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Scroller also supports DataTable's <code>Buttons</code> extension. Buttons can be initialised very easily though the <code>buttons</code> object which can be given as an array of the buttons that you wish to display. The <code>B</code> option in the dom parameter will instruct DataTables where the buttons should be placed in the document - in this case, at the top right. This example shows the <code>copy</code>, <code>csv</code>, <code>excel</code>, <code>pdf</code> and <code>print</code> buttons being used to display data export options for the DataTable.
					</div>

					<table class="table datatable-scroller-buttons" width="100%">
						<thead>
							<tr>
					            <th>ID</th>
					            <th>First name</th>
					            <th>Last name</th>
					            <th>ZIP / Post code</th>
					            <th>Country</th>
					        </tr>
						</thead>
					</table>
				</div>
				<!-- /with Buttons extension -->


				<!-- State saving -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">State saving</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Scroller will automatically integrate with DataTables in order to <code>save</code> the scrolling position of the table, if state saving is enabled in the DataTable (<code>stateSave</code>). This example shows that in practice - to demonstrate, scroll the table and then reload the page. When the page is reloaded, the table's state will be altered to match what they had previously set up.
					</div>

					<table class="table datatable-scroller-state" width="100%">
						<thead>
							<tr>
					            <th>ID</th>
					            <th>First name</th>
					            <th>Last name</th>
					            <th>ZIP / Post code</th>
					            <th>Country</th>
					        </tr>
						</thead>
					</table>
				</div>
				<!-- /state saving -->


				<!-- Using API -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Using API</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						This example shows a trivial use of the <code>API</code> methods that Scroller adds to the DataTables API to scroll to a row once the table's data has been loaded. In this case <code>scroller().scrollToRow()</code> is used to jump to row 1000. DataTables' <code>info</code> control element is automatically updated and shows the current visible row. Table height is configurable through <code>scrollY</code> string.
					</div>

					<table class="table datatable-scroller-api" width="100%">
						<thead>
							<tr>
					            <th>ID</th>
					            <th>First name</th>
					            <th>Last name</th>
					            <th>ZIP / Post code</th>
					            <th>Country</th>
					        </tr>
						</thead>
					</table>
				</div>
				<!-- /using API -->

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
