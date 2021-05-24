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
	<script src="../../../../global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/ecommerce_customers.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">ECommerce</span> - Customers</h4>
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
							<a href="ecommerce_orders_history" class="breadcrumb-item">ECommerce</a>
							<span class="breadcrumb-item active">Customers</span>
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

				<!-- Customers -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Customers</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="chart-container">
							<div class="chart has-fixed-height" id="customers_chart"></div>
						</div>
					</div>

					<table class="table text-nowrap table-customers">
						<thead>
							<tr>
								<th>Customer</th>
								<th>Registered</th>
								<th>Email</th>
								<th>Payment method</th>
								<th>Orders history</th>
								<th>Value</th>
								<th>Actions</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">James Alexander</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.12.30
											</div>
										</div>
									</div>
								</td>
								<td>July 12, 2016</td>
								<td><a href="#">james@interface.club</a></td>
								<td>MasterCard</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">25 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">34 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 322.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Jeremy Victorino</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.03.05
											</div>
										</div>
									</div>
								</td>
								<td>September 4, 2016</td>
								<td><a href="#">jeremy@interface.club</a></td>
								<td>Cash on delivery</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">43 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">65 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 1,432.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Margo Baker</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.03.27
											</div>
										</div>
									</div>
								</td>
								<td>July 10, 2016</td>
								<td><a href="#">margo@interface.club</a></td>
								<td>Paypal</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">38 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">53 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 489.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Monica Smith</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.10.03
											</div>
										</div>
									</div>
								</td>
								<td>June 27, 2016</td>
								<td><a href="#">monica@interface.club</a></td>
								<td>Cash on delivery</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">15 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">235 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 940.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Jemmy Royle</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.11.25
											</div>
										</div>
									</div>
								</td>
								<td>January 2, 2016</td>
								<td><a href="#">jemmy@interface.club</a></td>
								<td>MasterCard</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">23 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">65 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 772.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Ashlynn Ben</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.04.14
											</div>
										</div>
									</div>
								</td>
								<td>February 25, 2016</td>
								<td><a href="#">ashlynn@interface.club</a></td>
								<td>MasterCard</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">23 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">75 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 662.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Ray Sammy</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.02.20
											</div>
										</div>
									</div>
								</td>
								<td>March 20, 2016</td>
								<td><a href="#">ray@interface.club</a></td>
								<td>Visa</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">42 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">542 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 499.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Brian Leslie</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.12.24
											</div>
										</div>
									</div>
								</td>
								<td>July 12, 2016</td>
								<td><a href="#">brian@interface.club</a></td>
								<td>Paypal</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">14 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">45 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 946.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Patrick Marilynn</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.09.28
											</div>
										</div>
									</div>
								</td>
								<td>October 4, 2016</td>
								<td><a href="#">patrick@interface.club</a></td>
								<td>Wire transfer</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">24 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">76 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 538.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Roland Cydney</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.02.12
											</div>
										</div>
									</div>
								</td>
								<td>August 1, 2016</td>
								<td><a href="#">roland@interface.club</a></td>
								<td>Paypal</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">27 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">236 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 432.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Deanna Joss</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.05.20
											</div>
										</div>
									</div>
								</td>
								<td>May 17, 2016</td>
								<td><a href="#">deanna@interface.club</a></td>
								<td>Visa</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">53 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">236 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 472.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Dawn Justin</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.06.17
											</div>
										</div>
									</div>
								</td>
								<td>May 12, 2016</td>
								<td><a href="#">dawn@interface.club</a></td>
								<td>Wire transfer</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">63 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">75 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 402.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Blondie Madison</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.01.26
											</div>
										</div>
									</div>
								</td>
								<td>March 26, 2016</td>
								<td><a href="#">blondie@interface.club</a></td>
								<td>MasterCard</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">12 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">53 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 839.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Derryl Carrie</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.09.15
											</div>
										</div>
									</div>
								</td>
								<td>July 26, 2016</td>
								<td><a href="#">derryl@interface.club</a></td>
								<td>Visa</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">43 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">90 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 471.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Vincent Doris</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.02.23
											</div>
										</div>
									</div>
								</td>
								<td>June 25, 2016</td>
								<td><a href="#">vincent@interface.club</a></td>
								<td>MasterCard</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">41 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">76 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 902.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Diantha Royston</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.02.04
											</div>
										</div>
									</div>
								</td>
								<td>September 25, 2016</td>
								<td><a href="#">diantha@interface.club</a></td>
								<td>Paypal</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">7 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">234 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 543.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Lilian Knox</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.05.18
											</div>
										</div>
									</div>
								</td>
								<td>March 5, 2016</td>
								<td><a href="#">lilian@interface.club</a></td>
								<td>Visa</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">8 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">34 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 2,472.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Toria Eveline</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.03.28
											</div>
										</div>
									</div>
								</td>
								<td>August 26, 2016</td>
								<td><a href="#">toria@interface.club</a></td>
								<td>MasterCard</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">53 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">90 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 2,372.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Tiffany Willemina</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.07.29
											</div>
										</div>
									</div>
								</td>
								<td>November 19, 2016</td>
								<td><a href="#">tiffany@interface.club</a></td>
								<td>Paypal</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">21 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">42 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 1,930.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Trenton Alison</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.09.16
											</div>
										</div>
									</div>
								</td>
								<td>July 25, 2016</td>
								<td><a href="#">trenton@interface.club</a></td>
								<td>Wire transfer</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">5 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">29 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 830.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Brandon Gilbert</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.11.25
											</div>
										</div>
									</div>
								</td>
								<td>December 26, 2016</td>
								<td><a href="#">brandon@interface.club</a></td>
								<td>Paypal</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">15 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">89 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 903.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Troy Webster</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.10.24
											</div>
										</div>
									</div>
								</td>
								<td>May 29, 2016</td>
								<td><a href="#">troy@interface.club</a></td>
								<td>MasterCard</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">12 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">53 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 394.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Elbert Cailyn</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.08.20
											</div>
										</div>
									</div>
								</td>
								<td>February 28, 2016</td>
								<td><a href="#">elbert@interface.club</a></td>
								<td>Visa</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">10 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">93 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 192.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Coen Grant</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.12.24
											</div>
										</div>
									</div>
								</td>
								<td>June 17, 2016</td>
								<td><a href="#">coen@interface.club</a></td>
								<td>MasterCard</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">19 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">75 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 252.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>

							<tr>
								<td>
									<div class="media">
										<div class="mr-3">
											<a href="user_pages_profile_tabbed">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="40" height="40" class="rounded-circle" alt="">
											</a>
										</div>

										<div class="media-body align-self-center">
											<a href="user_pages_profile_tabbed" class="font-weight-semibold">Charles Elian</a>
											<div class="text-muted font-size-sm">
												Latest order: 2016.01.28
											</div>
										</div>
									</div>
								</td>
								<td>September 21, 2016</td>
								<td><a href="#">charles@interface.club</a></td>
								<td>MasterCard</td>
								<td>
									<ul class="list-unstyled mb-0">
										<li>
											<i class="icon-infinite font-size-base text-warning mr-2"></i>
											Pending:
											<a href="#">3 orders</a>
										</li>

										<li>
											<i class="icon-checkmark3 font-size-base text-success mr-2"></i>
											Processed:
											<a href="#">19 orders</a>
										</li>
									</ul>
								</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">&euro; 2,345.00</h6>
								</td>
								<td class="text-right">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu7"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>
												<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>
												<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>
											</div>
										</div>
									</div>
								</td>
								<td class="pl-0"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /customers -->

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
