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
	<script src="assets/js/app.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Tables</span> - Styling</h4>
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
							<a href="table_styling" class="breadcrumb-item">Tables</a>
							<span class="breadcrumb-item active">Styling</span>
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

				<!-- Default styling -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Default styling</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Example of a table with default styling. By default any table with <code>.table</code> class has <code>transparent</code> background color and grey border color. Table header and table footer have the same styling: transparent background, semibold font weight, darker horizontal border and the same height as table body cells.
					</div>

					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Eugene</td>
									<td>Kopyov</td>
									<td>@Kopyov</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Victoria</td>
									<td>Baker</td>
									<td>@Vicky</td>
								</tr>
								<tr>
									<td>3</td>
									<td>James</td>
									<td>Alexander</td>
									<td>@Alex</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Franklin</td>
									<td>Morrison</td>
									<td>@Frank</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
				<!-- /default styling -->


				<!-- Table header styling -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Table header styling</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Example of a custom table <code>header</code> styling. Table header supports default contextual and custom background colors available in <a href="colors_primary">custom color system</a>. To use custom color in the table header, add <code>.bg-*</code> class to the header row. All border and text colors will be automatically adjusted.
					</div>

					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="bg-blue">
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Eugene</td>
									<td>Kopyov</td>
									<td>@Kopyov</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Victoria</td>
									<td>Baker</td>
									<td>@Vicky</td>
								</tr>
								<tr>
									<td>3</td>
									<td>James</td>
									<td>Alexander</td>
									<td>@Alex</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Franklin</td>
									<td>Morrison</td>
									<td>@Frank</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /table header styling -->


				<!-- Table footer styling -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Table footer styling</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Example of a custom table <code>footer</code> styling. Table footer supports custom background colors available in <a href="colors_primary">custom color system</a>. To use custom color in the table footer, add <code>.bg-*</code> class to the footer row. All border and text colors will be autocatically adjusted.
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>1</td>
									<td>Eugene</td>
									<td>Kopyov</td>
									<td>@Kopyov</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Victoria</td>
									<td>Baker</td>
									<td>@Vicky</td>
								</tr>
								<tr>
									<td>3</td>
									<td>James</td>
									<td>Alexander</td>
									<td>@Alex</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Franklin</td>
									<td>Morrison</td>
									<td>@Frank</td>
								</tr>
							</tbody>
							<tfoot>
								<tr class="bg-teal-400">
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
				<!-- /table footer styling -->


				<!-- Contextual classes -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Contextual classes</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Example of contextual classes for table <code>rows</code>. Contextual classes are used to color table rows or individual cells. These classes come with Bootstrap by default and have much lighter colors than in custom template colors.
					</div>

					<div class="table-responsive">
						<table class="table">
		                    <thead>
		                        <tr>
		                            <th>#</th>
		                            <th>Product</th>
		                            <th>Payment Taken</th>
		                            <th>Status</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr class="table-success">
		                            <td>1</td>
		                            <td>TB - Monthly</td>
		                            <td>01/04/2012</td>
		                            <td>Approved</td>
		                        </tr>
		                        <tr>
		                            <td>1</td>
		                            <td>TB - Monthly</td>
		                            <td>01/04/2012</td>
		                            <td>Approved</td>
		                        </tr>
		                        <tr class="table-danger">
		                            <td>2</td>
		                            <td>TB - Monthly</td>
		                            <td>02/04/2012</td>
		                            <td>Declined</td>
		                        </tr>
		                        <tr>
		                            <td>2</td>
		                            <td>TB - Monthly</td>
		                            <td>02/04/2012</td>
		                            <td>Declined</td>
		                        </tr>
		                        <tr class="table-warning">
		                            <td>3</td>
		                            <td>TB - Monthly</td>
		                            <td>03/04/2012</td>
		                            <td>Pending</td>
		                        </tr>
		                        <tr>
		                            <td>3</td>
		                            <td>TB - Monthly</td>
		                            <td>03/04/2012</td>
		                            <td>Pending</td>
		                        </tr>
		                        <tr class="table-active">
		                            <td>4</td>
		                            <td>TB - Monthly</td>
		                            <td>04/04/2012</td>
		                            <td>Call in to confirm</td>
		                        </tr>
		                        <tr>
		                            <td>4</td>
		                            <td>TB - Monthly</td>
		                            <td>04/04/2012</td>
		                            <td>Call in to confirm</td>
		                        </tr>
		                        <tr class="table-info">
		                            <td>4</td>
		                            <td>TB - Monthly</td>
		                            <td>05/04/2012</td>
		                            <td>Information</td>
		                        </tr>
		                        <tr>
		                            <td>4</td>
		                            <td>TB - Monthly</td>
		                            <td>05/04/2012</td>
		                            <td>Information</td>
		                        </tr>
		                    </tbody>
		                </table>
					</div>
				</div>
				<!-- /contextual classes -->
				

				<!-- Custom row colors -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Custom row colors</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Example of <code>custom colors</code> for table rows. Add one of the custom colors from the template color system to any table row for additional highlighting. Unlike contextual classes, these colors are much stronger. View all <a href="colors_primary">available colors here &rarr;</a>.
					</div>

					<div class="table-responsive">
						<table class="table">
		                    <thead>
		                        <tr>
		                            <th>#</th>
		                            <th>Product</th>
		                            <th>Payment Taken</th>
		                            <th>Status</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr class="bg-primary">
		                            <td>1</td>
		                            <td>TB - Monthly</td>
		                            <td>01/04/2012</td>
		                            <td>Approved</td>
		                        </tr>
		                        <tr>
		                            <td>1</td>
		                            <td>TB - Monthly</td>
		                            <td>01/04/2012</td>
		                            <td>Approved</td>
		                        </tr>
		                        <tr class="bg-danger">
		                            <td>2</td>
		                            <td>TB - Monthly</td>
		                            <td>02/04/2012</td>
		                            <td>Declined</td>
		                        </tr>
		                        <tr>
		                            <td>2</td>
		                            <td>TB - Monthly</td>
		                            <td>02/04/2012</td>
		                            <td>Declined</td>
		                        </tr>
		                        <tr class="bg-success">
		                            <td>3</td>
		                            <td>TB - Monthly</td>
		                            <td>03/04/2012</td>
		                            <td>Pending</td>
		                        </tr>
		                        <tr>
		                            <td>3</td>
		                            <td>TB - Monthly</td>
		                            <td>03/04/2012</td>
		                            <td>Pending</td>
		                        </tr>
		                        <tr class="bg-warning">
		                            <td>4</td>
		                            <td>TB - Monthly</td>
		                            <td>04/04/2012</td>
		                            <td>Call in to confirm</td>
		                        </tr>
		                        <tr>
		                            <td>4</td>
		                            <td>TB - Monthly</td>
		                            <td>04/04/2012</td>
		                            <td>Call in to confirm</td>
		                        </tr>
		                        <tr class="bg-info">
		                            <td>4</td>
		                            <td>TB - Monthly</td>
		                            <td>05/04/2012</td>
		                            <td>Information</td>
		                        </tr>
		                        <tr>
		                            <td>4</td>
		                            <td>TB - Monthly</td>
		                            <td>05/04/2012</td>
		                            <td>Information</td>
		                        </tr>
		                    </tbody>
		                </table>
					</div>
				</div>
				<!-- /custom row colors -->


				<!-- Custom table color -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Custom table color</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Example of a table with custom <code>background</code> color. Any table could have different background colors available in <a href="colors_primary">custom color system</a>. To use one of these colors add <code>.bg-*</code> color class to the table with <code>.table</code> class.
					</div>

					<div class="table-responsive">
						<table class="table table-dark bg-slate-600">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Eugene</td>
									<td>Kopyov</td>
									<td>@Kopyov</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Victoria</td>
									<td>Baker</td>
									<td>@Vicky</td>
								</tr>
								<tr>
									<td>3</td>
									<td>James</td>
									<td>Alexander</td>
									<td>@Alex</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Franklin</td>
									<td>Morrison</td>
									<td>@Frank</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /custom table color -->


				<!-- Colored table options -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Colored table options</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Table with custom background color supports all default table layouts and options. In this example our table displays all possible borders, striped rows and changes background color on row hover. All border, row and text colors are adjusted automatically.
					</div>

					<div class="table-responsive">
						<table class="table table-dark table-bordered table-striped table-hover bg-info-700">
							<thead>
								<tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Eugene</td>
									<td>Kopyov</td>
									<td>@Kopyov</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Victoria</td>
									<td>Baker</td>
									<td>@Vicky</td>
								</tr>
								<tr>
									<td>3</td>
									<td>James</td>
									<td>Alexander</td>
									<td>@Alex</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Franklin</td>
									<td>Morrison</td>
									<td>@Frank</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /colored table options -->


				<!-- Color combination -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Color combination</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						This example demonstrates <code>combination</code> of colors, added to the table and table header. Here we have one general color added to the <code>&lt;table></code> and highlighted table header with another color added to the header <code>row</code>. Body and footer rows are also support this option.
					</div>

					<div class="table-responsive">
						<table class="table table-dark bg-teal">
							<thead>
								<tr class="bg-teal-700">
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Eugene</td>
									<td>Kopyov</td>
									<td>@Kopyov</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Victoria</td>
									<td>Baker</td>
									<td>@Vicky</td>
								</tr>
								<tr>
									<td>3</td>
									<td>James</td>
									<td>Alexander</td>
									<td>@Alex</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Franklin</td>
									<td>Morrison</td>
									<td>@Frank</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /color combination -->


				<!-- Inside colored panel -->
				<div class="card bg-indigo-400">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Inside colored panel</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Example of a basic table placed inside the panel with custom background color. This panel doesn't have any color classes and automatically inherits border and text colors from the colored panel styles. Color combination are also supported.
					</div>

					<div class="table-responsive">
						<table class="table table-dark bg-indigo-400">
							<thead>
								<tr class="bg-indigo-600">
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Eugene</td>
									<td>Kopyov</td>
									<td>@Kopyov</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Victoria</td>
									<td>Baker</td>
									<td>@Vicky</td>
								</tr>
								<tr>
									<td>3</td>
									<td>James</td>
									<td>Alexander</td>
									<td>@Alex</td>
								</tr>
								<tr>
									<td>4</td>
									<td>Franklin</td>
									<td>Morrison</td>
									<td>@Frank</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /inside colored panel -->

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
