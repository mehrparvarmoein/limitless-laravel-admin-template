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
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/invoice_grid.js"></script>
	<!-- /Page JS files -->

</head>

<body class="sidebar-xs">

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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Invoices</span> - Grid</h4>
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
							<a href="invoice_grid" class="breadcrumb-item">Invoices</a>
							<span class="breadcrumb-item active">Grid</span>
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

				<!-- Inner container -->
				<div class="d-flex align-items-start flex-column flex-md-row">

					<!-- Left content -->
					<div class="w-100 order-2 order-md-1">

						<!-- Filter toolbar -->
						<div class="navbar navbar-expand-lg navbar-light navbar-component rounded">
							<div class="text-center d-lg-none w-100">
								<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-filter">
									<i class="icon-unfold mr-2"></i>
									Filters
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-filter">
								<span class="navbar-text mr-3">
									Filter:
								</span>

								<ul class="navbar-nav flex-wrap">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-sort-time-asc mr-2"></i>
											By date
										</a>

										<div class="dropdown-menu">
											<a href="#" class="dropdown-item">Show all</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">Today</a>
											<a href="#" class="dropdown-item">Yesterday</a>
											<a href="#" class="dropdown-item">This week</a>
											<a href="#" class="dropdown-item">This month</a>
											<a href="#" class="dropdown-item">This year</a>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-sort-amount-desc mr-2"></i>
											By status
										</a>

										<div class="dropdown-menu">
											<a href="#" class="dropdown-item">Show all</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">Open</a>
											<a href="#" class="dropdown-item">On hold</a>
											<a href="#" class="dropdown-item">Resolved</a>
											<a href="#" class="dropdown-item">Closed</a>
											<a href="#" class="dropdown-item">Duplicate</a>
											<a href="#" class="dropdown-item">Invalid</a>
											<a href="#" class="dropdown-item">Wontfix</a>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-sort-numeric-asc mr-2"></i>
											By priority
										</a>

										<div class="dropdown-menu">
											<a href="#" class="dropdown-item">Show all</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">Highest</a>
											<a href="#" class="dropdown-item">High</a>
											<a href="#" class="dropdown-item">Normal</a>
											<a href="#" class="dropdown-item">Low</a>
										</div>
									</li>
								</ul>

								<span class="navbar-text mr-3 ml-lg-auto">
									Sorting:
								</span>

								<ul class="navbar-nav flex-wrap">
									<li class="nav-item">
										<a href="#" class="navbar-nav-link">
											<i class="icon-sort-alpha-asc"></i>
											<span class="d-lg-none ml-2">Ascending</span>
										</a>
									</li>

									<li class="nav-item">
										<a href="#" class="navbar-nav-link">
											<i class="icon-sort-alpha-desc"></i>
											<span class="d-lg-none ml-2">Descending</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /filter toolbar -->


						<!-- Invoice grid -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card border-left-3 border-left-danger rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Leonardo Fellini</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0028</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/01/25</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$8,750</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">SWIFT</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-danger-400 align-top dropdown-toggle" data-toggle="dropdown">Overdue</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item active"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-danger mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/02/25</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="card border-left-3 border-left-success rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Rebecca Manes</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0027</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/24</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$5,100</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">Paypal</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Paid</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item active"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-success mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/24</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="card border-left-3 border-left-blue rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">James Alexander</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0026</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/23</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$12,500</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">SWIFT</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-blue-400 align-top dropdown-toggle" data-toggle="dropdown">Pending</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item active"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-blue mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/23</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="card border-left-3 border-left-grey rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Jeremy Victorino</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0025</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/22</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$1,950</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">Skrill</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-grey-300 align-top dropdown-toggle" data-toggle="dropdown">On hold</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item active"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-grey mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/22</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="card border-left-3 border-left-slate rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Margo Baker</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0024</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/21</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$2,000</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">Paypal</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-slate-400 align-top dropdown-toggle" data-toggle="dropdown">Canceled</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item active"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-slate mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/21</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="card border-left-3 border-left-danger rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Beatrix Diaz</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0023</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/20</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$750</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">Payoneer</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-danger-400 align-top dropdown-toggle" data-toggle="dropdown">Overdue</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item active"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-danger mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/20</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>


						<div class="text-center text-muted content-divider mb-3">
							<span class="p-2">Yesterday</span>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="card border-left-3 border-left-success rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Richard Vango</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0022</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/19</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$6,120</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">Paypal</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Paid</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item active"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-success mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/19</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="card border-left-3 border-left-success rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Will Baker</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0021</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/18</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$3,500</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">SWIFT</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Paid</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item active"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-success mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/18</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="card border-left-3 border-left-danger rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Joseph Mills</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0020</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/17</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$4,950</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">SWIFT</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-danger-400 align-top dropdown-toggle" data-toggle="dropdown">Overdue</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item active"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-danger mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/17</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="card border-left-3 border-left-blue rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Buzz Brenson</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0019</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/16</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$900</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">Skrill</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-blue-400 align-top dropdown-toggle" data-toggle="dropdown">Pending</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item active"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-blue mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/16</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="card border-left-3 border-left-grey rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Zachary Willson</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0018</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/15</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$1,140</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">SWIFT</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-grey-300 align-top dropdown-toggle" data-toggle="dropdown">On hold</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item active"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-grey mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/15</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="card border-left-3 border-left-slate rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Bastian Miller</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0017</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/14</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$7,500</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">Paypal</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-slate-400 align-top dropdown-toggle" data-toggle="dropdown">Canceled</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item active"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-slate mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/14</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="card border-left-3 border-left-blue rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">William Samuel</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0016</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/13</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$2,300</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">SWIFT</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-blue-400 align-top dropdown-toggle" data-toggle="dropdown">Pending</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item active"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-blue mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/13</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="card border-left-3 border-left-blue rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Monica Smith</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0015</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/12</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$3,700</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">Payoneer</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-blue-400 align-top dropdown-toggle" data-toggle="dropdown">Pending</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item active"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-blue mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/12</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>


						<div class="text-center text-muted content-divider mb-3">
							<span class="p-2">March 15, 2018</span>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="card border-left-3 border-left-danger rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Jordana Miles</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0014</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/11</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$5,000</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">Payoneer</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-danger-400 align-top dropdown-toggle" data-toggle="dropdown">Overdue</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item active"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-danger mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/11</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="card border-left-3 border-left-success rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">John Craving</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0013</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/10</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$12,000</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">SWIFT</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Paid</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item active"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-success mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/10</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="card border-left-3 border-left-grey rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">James Basel</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0012</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/09</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$9,000</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">Paypal</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-grey-300 align-top dropdown-toggle" data-toggle="dropdown">On hold</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item active"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-grey mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/09</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="card border-left-3 border-left-success rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Lucy Johnson</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0011</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/08</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$21,000</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">Skrill</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Paid</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item active"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-success mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/08</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="card border-left-3 border-left-danger rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Kinga Wallace</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0010</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/07</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$1,900</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">Payoneer</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-danger-400 align-top dropdown-toggle" data-toggle="dropdown">Overdue</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item active"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-danger mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/07</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="card border-left-3 border-left-blue rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Anna Zuniga</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0009</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/06</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$18,200</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">SWIFT</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-blue-400 align-top dropdown-toggle" data-toggle="dropdown">Pending</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item active"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-blue mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/06</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="card border-left-3 border-left-slate rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Nicolette Grey</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0008</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/05</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$2,600</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">SWIFT</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-slate-400 align-top dropdown-toggle" data-toggle="dropdown">Canceled</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item active"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-slate mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/05</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="card border-left-3 border-left-grey rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Vanessa Aurelius</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0007</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/04</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$10,800</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">SWIFT</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-grey-300 align-top dropdown-toggle" data-toggle="dropdown">On hold</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item active"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-grey mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/04</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>


						<div class="text-center text-muted content-divider mb-3">
							<span class="p-2">March 14, 2018</span>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="card border-left-3 border-left-success rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Jordano Diressimo</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0004</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/02/01</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$6,500</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">SWIFT</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Paid</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item active"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-success mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/03/01</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="card border-left-3 border-left-danger rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Patrick Muller</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0003</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/01/28</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$12,700</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">Paypal</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-danger-400 align-top dropdown-toggle" data-toggle="dropdown">Overdue</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item active"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-danger mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/02/28</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<div class="card border-left-3 border-left-success rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Marta Stewings</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0002</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/01/27</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$900</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">Skrill</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Paid</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item active"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-success mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/02/27</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="card border-left-3 border-left-grey rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Marko Bastic</h6>
												<ul class="list list-unstyled mb-0">
													<li>Invoice #: <a href="#">0001</a></li>
													<li>Issued on: <span class="font-weight-semibold">2018/01/26</span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">$10,000</h6>
												<ul class="list list-unstyled mb-0">
													<li>Method: <span class="font-weight-semibold">Paypal</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-grey-300 align-top dropdown-toggle" data-toggle="dropdown">On hold</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item active"><i class="icon-spinner2 spinner"></i> On hold</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-grey mr-2"></span>
											Due:
											<span class="font-weight-semibold">2018/02/26</span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /invoice grid -->


						<!-- Pagination -->
						<div class="d-flex justify-content-center mt-3 mb-3">
							<ul class="pagination">
								<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-right"></i></a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">5</a></li>
								<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-left"></i></a></li>
							</ul>
						</div>
						<!-- /pagination -->

					</div>
					<!-- /left content -->


					<!-- Right sidebar component -->
					<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

						<!-- Sidebar content -->
						<div class="sidebar-content">

							<!-- Invoice actions -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Actions</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<div class="row">
										<div class="col">
											<button type="button" class="btn bg-teal-400 btn-block btn-float">
												<i class="icon-file-plus icon-2x"></i>
												<span>New invoice</span>
											</button>

											<button type="button" class="btn bg-purple-300 btn-block btn-float">
												<i class="icon-archive icon-2x"></i>
												<span>Archive</span>
											</button>
										</div>
										
										<div class="col">
											<button type="button" class="btn bg-warning-400 btn-block btn-float">
												<i class="icon-stats-bars icon-2x"></i>
												<span>Statistics</span>
											</button>

											<button type="button" class="btn bg-blue btn-block btn-float">
												<i class="icon-cog3 icon-2x"></i>
												<span>Settings</span>
											</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /invoice actions -->


							<!-- Navigation -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="card-title font-weight-semibold">Navigation</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body p-0">
									<div class="nav nav-sidebar mb-2">
										<li class="nav-item-header">
											<div class="text-uppercase font-size-xs line-height-xs">Main</div>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-googleplus5"></i>
												Create invoice
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-compose"></i>
												Edit invoice
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-archive"></i>
												Acrhive
												<span class="badge badge-pill badge-secondary ml-auto">190</span>
											</a>
										</li>

										<li class="nav-item-header">
											<div class="text-uppercase font-size-xs line-height-xs">Invoices</div>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-files-empty"></i>
												All invoices
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-file-plus"></i>
												Pending invoices
												<span class="badge badge-pill bg-blue ml-auto">16</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-file-check"></i>
												Paid invoices
												<span class="badge badge-pill bg-success ml-auto">50</span>
											</a>
										</li>
										<li class="nav-item-divider"></li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-cog3"></i>
												Settings
											</a>
										</li>
									</div>
								</div>
							</div>
							<!-- /navigation -->


							<!-- Filter -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Left checkbox group</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<div class="font-weight-semibold mb-3">Amount range:</div>
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													$0 - $999
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													$1,000 - $1,999
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													$2,000 - $4,999
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													$5,000 - $9,999
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													$10,000 +
												</label>
											</div>
										</div>

										<div class="form-group">
											<div class="font-weight-semibold mb-3">Payment method:</div>
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Wire transfer
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													Paypal
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Payoneer
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													Skrill
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													Cash
												</label>
											</div>
										</div>

										<div class="form-group">
											<div class="font-weight-semibold mb-3">Invoice status:</div>
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Overdue
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													On hold
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Pending
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													Paid
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													Canceled
												</label>
											</div>
										</div>

										<div class="row">
											<div class="col">
												<button type="reset" class="btn btn-light btn-block btn-sm">Reset</button>
											</div>
											<div class="col">
												<button type="submit" class="btn btn-info btn-block btn-sm">Filter</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /filter -->


							<!-- Latest updates -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Latest updates</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="media-list">
										<li class="media">
											<div class="mr-3">
												<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon">
													<i class="icon-checkmark3"></i>
												</a>
											</div>

											<div class="media-body">
												<a href="#">Richard Vango</a> paid invoice #0020
												<div class="text-muted font-size-sm">4 minutes ago</div>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#" class="btn bg-transparent border-slate text-slate rounded-round border-2 btn-icon">
													<i class="icon-infinite"></i>
												</a>
											</div>
											
											<div class="media-body">
												Status of invoice <a href="#">#0029</a> has been changed to "On hold"
												<div class="text-muted font-size-sm">36 minutes ago</div>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon">
													<i class="icon-checkmark3"></i>
												</a>
											</div>

											<div class="media-body">
												<a href="#">Chris Arney</a> paid invoice #0031 with Paypal
												<div class="text-muted font-size-sm">2 hours ago</div>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#" class="btn bg-transparent border-danger text-danger rounded-round border-2 btn-icon">
													<i class="icon-cross2"></i>
												</a>
											</div>
											
											<div class="media-body">
												Invoice <a href="#">#0041</a> has been canceled
												<div class="text-muted font-size-sm">Mar 18, 18:36</div>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon">
													<i class="icon-plus3"></i>
												</a>
											</div>
											
											<div class="media-body">
												New invoice #0029 has been sent to <a href="#">Beatrix Diaz</a>
												<div class="text-muted font-size-sm">Dec 12, 05:46</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /latest updates -->

						</div>
						<!-- /sidebar content -->

					</div>
					<!-- /right sidebar component -->

				</div>
				<!-- /inner container -->

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


    <!-- Modal with invoice -->
	<div id="invoice" class="modal fade">
		<div class="modal-dialog modal-full">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Invoice #49029</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<div class="mb-4">
								<img src="../../../../global_assets/images/logo_demo.png" class="mb-3 mt-2" alt="" style="width: 120px;">
	 							<ul class="list list-unstyled mb-0">
									<li>2269 Elba Lane</li>
									<li>Paris, France</li>
									<li>888-555-2311</li>
								</ul>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="mb-4">
								<div class="text-sm-right">
									<h4 class="text-primary mb-2 mt-md-2">Invoice #49029</h4>
									<ul class="list list-unstyled mb-0">
										<li>Date: <span class="font-weight-semibold">January 12, 2015</span></li>
										<li>Due date: <span class="font-weight-semibold">May 12, 2015</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="d-md-flex flex-md-wrap">
						<div class="mb-4 mb-md-2">
							<span class="text-muted">Invoice To:</span>
 							<ul class="list list-unstyled mb-0">
								<li><h5 class="my-2">Rebecca Manes</h5></li>
								<li><span class="font-weight-semibold">Normand axis LTD</span></li>
								<li>3 Goodman Street</li>
								<li>London E1 8BF</li>
								<li>United Kingdom</li>
								<li>888-555-2311</li>
								<li><a href="#">rebecca@normandaxis.ltd</a></li>
							</ul>
						</div>

						<div class="mb-2 ml-auto">
							<span class="text-muted">Payment Details:</span>
							<div class="d-flex flex-wrap wmin-md-400">
								<ul class="list list-unstyled mb-0">
									<li><h5 class="my-2">Total Due:</h5></li>
									<li>Bank name:</li>
									<li>Country:</li>
									<li>City:</li>
									<li>Address:</li>
									<li>IBAN:</li>
									<li>SWIFT code:</li>
								</ul>

								<ul class="list list-unstyled text-right mb-0 ml-auto">
									<li><h5 class="font-weight-semibold my-2">$8,750</h5></li>
									<li><span class="font-weight-semibold">Profit Bank Europe</span></li>
									<li>United Kingdom</li>
									<li>London E1 8BF</li>
									<li>3 Goodman Street</li>
									<li><span class="font-weight-semibold">KFH37784028476740</span></li>
									<li><span class="font-weight-semibold">BPT4E</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="table-responsive">
				    <table class="table table-lg">
				        <thead>
				            <tr>
				                <th>Description</th>
				                <th>Rate</th>
				                <th>Hours</th>
				                <th>Total</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td>
				                	<h6 class="mb-0">Create UI design model</h6>
				                	<span class="text-muted">One morning, when Gregor Samsa woke from troubled.</span>
			                	</td>
				                <td>$70</td>
				                <td>57</td>
				                <td><span class="font-weight-semibold">$3,990</span></td>
				            </tr>
				            <tr>
				                <td>
				                	<h6 class="mb-0">Support tickets list doesn't support commas</h6>
				                	<span class="text-muted">I'd have gone up to the boss and told him just what i think.</span>
			                	</td>
				                <td>$70</td>
				                <td>12</td>
				                <td><span class="font-weight-semibold">$840</span></td>
				            </tr>
				            <tr>
				                <td>
				                	<h6 class="mb-0">Fix website issues on mobile</h6>
				                	<span class="text-muted">I am so happy, my dear friend, so absorbed in the exquisite.</span>
			                	</td>
				                <td>$70</td>
				                <td>31</td>
				                <td><span class="font-weight-semibold">$2,170</span></td>
				            </tr>
				        </tbody>
				    </table>
				</div>

				<div class="card-body">
					<div class="d-md-flex flex-md-wrap">
						<div class="pt-2 mb-3">
							<h6 class="mb-3">Authorized person</h6>
							<div class="mb-3">
								<img src="../../../../global_assets/images/signature.png" width="150" alt="">
							</div>

							<ul class="list-unstyled text-muted">
								<li>Eugene Kopyov</li>
								<li>2269 Elba Lane</li>
								<li>Paris, France</li>
								<li>888-555-2311</li>
							</ul>
						</div>

						<div class="pt-2 mb-3 wmin-md-400 ml-auto">
							<h6 class="mb-3">Total due</h6>
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<th>Subtotal:</th>
											<td class="text-right">$7,000</td>
										</tr>
										<tr>
											<th>Tax: <span class="font-weight-normal">(25%)</span></th>
											<td class="text-right">$1,750</td>
										</tr>
										<tr>
											<th>Total:</th>
											<td class="text-right text-primary"><h5 class="font-weight-semibold">$8,750</h5></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="text-right mt-3">
								<button type="button" class="btn btn-primary btn-labeled btn-labeled-left"><b><i class="icon-paperplane"></i></b> Send invoice</button>
							</div>
						</div>
					</div>
				</div>

				<div class="card-footer">
					<span class="text-muted">Thank you for using Limitless. This invoice can be paid via PayPal, Bank transfer, Skrill or Payoneer. Payment is due within 30 days from the date of delivery. Late payment is possible, but with with a fee of 10% per month. Company registered in England and Wales #6893003, registered office: 3 Goodman Street, London E1 8BF, United Kingdom. Phone number: 888-555-2311</span>
				</div>

				<div class="modal-footer bg-transparent">
					<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /modal with invoice -->

</body>
</html>
