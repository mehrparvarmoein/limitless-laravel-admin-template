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
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/invoice_archive.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Invoices</span> - Archive</h4>
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
							<a href="invoice_archive" class="breadcrumb-item">Invoices</a>
							<span class="breadcrumb-item active">Archive</span>
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

				<!-- Invoice archive -->
				<div class="card">
					<div class="card-header bg-transparent header-elements-inline">
						<h6 class="card-title">Invoice archive</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<table class="table table-lg invoice-archive">
						<thead>
							<tr>
								<th>#</th>
								<th>Period</th>
				                <th>Issued to</th>
				                <th>Status</th>
				                <th>Issue date</th>
				                <th>Due date</th>
				                <th>Amount</th>
				                <th class="text-center">Actions</th>
				            </tr>
						</thead>
						<tbody>
							<tr>
								<td>#0025</td>
								<td>February 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Rebecca Manes</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Skrill</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold" selected>On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	April 18, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-success">Paid on Mar 16, 2015</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$17,890 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $4,890</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0024</td>
								<td>February 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">James Alexander</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Wire transfer</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid" selected>Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	April 17, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-warning">5 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$2,769 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $2,839</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0023</td>
								<td>February 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Jeremy Victorino</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Payoneer</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid" selected>Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	April 17, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-primary">27 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$1,500 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $1,984</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0022</td>
								<td>January 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Margo Baker</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel" selected>Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	January 15, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-primary">12 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$4,580 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $992</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0021</td>
								<td>January 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Beatrix Diaz</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue" selected>Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	January 10, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-danger">- 3 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$7,990 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $1,294</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0020</td>
								<td>January 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Richard Vango</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Wire transfer</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid" selected>Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	January 10, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-secondary">On hold</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$12,120 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $3,278</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0019</td>
								<td>January 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Will Baker</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold" selected>On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	December 26, 2014
			                	</td>
				                <td>
				                	<span class="badge badge-success">Paid on Feb 25, 2015</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$5,390 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $2,880</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0018</td>
								<td>January 2015</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Joseph Mills</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Skrill</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending" selected>Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	June 17, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-secondary">On hold</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$10,280 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $2,190</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0017</td>
								<td>December 2014</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Buzz Brenson</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Wire transfer</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending" selected>Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	May 6, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-warning">2 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$43,320 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $1,299</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0016</td>
								<td>December 2014</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Zachary Willson</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue" selected>Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	March 7, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-primary">15 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$7,100 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $1,450</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0015</td>
								<td>December 2014</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Bastian Miller</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Payoneer</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid" selected>Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	March 23, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-warning">6 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$1,030 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $229</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0014</td>
								<td>December 2014</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">William Samuel</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel" selected>Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	March 2, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-secondary">On hold</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$800 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $189</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0013</td>
								<td>November 2014</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Monica Smith</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Wire transfer</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending" selected>Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	February 25, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-success">Paid on Feb 15, 2015</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$6,300 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $1,200</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0012</td>
								<td>November 2014</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Jordana Miles</a>
				                		<span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid" selected>Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	February 26, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-primary">12 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$2,200 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $689</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0011</td>
								<td>November 2014</td>
				                <td>
				                	<h6 class="mb-0">
					                	<a href="#">John Craving</a>
					                	<span class="d-block font-size-sm text-muted">Payment method: Payoneer</span>
				                	</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid" selected>Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	May 9, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-success">Paid on Jan 28, 2015</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$2,600 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $370</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0010</td>
								<td>November 2014</td>
				                <td>
				                	<h6 class="mb-0">
					                	<a href="#">James Basel</a>
					                	<span class="d-block font-size-sm text-muted">Payment method: Wire transfer</span>
				                	</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue" selected>Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	June 1, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-warning">5 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$6,800 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $2,118</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0009</td>
								<td>November 2014</td>
				                <td>
				                	<h6 class="mb-0">
					                	<a href="#">Lucy Johnson</a>
					                	<span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
				                	</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid" selected>Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	April 10, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-success">Paid on Jan 17, 2015</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$900 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $199</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0008</td>
								<td>October 2014</td>
				                <td>
				                	<h6 class="mb-0">
					                	<a href="#">Kinga Wallace</a>
					                	<span class="d-block font-size-sm text-muted">Payment method: Skrill</span>
				                	</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending" selected>Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	April 12, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-primary">12 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$1,200 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $298</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0007</td>
								<td>October 2014</td>
				                <td>
				                	<h6 class="mb-0">
					                	<a href="#">Anna Zuniga</a>
					                	<span class="d-block font-size-sm text-muted">Payment method: Payoneer</span>
				                	</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid" selected>Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	March 29, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-success">Paid on Jan 14, 2015</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$13,000 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $4,290</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0006</td>
								<td>October 2014</td>
				                <td>
				                	<h6 class="mb-0">
					                	<a href="#">Nicolette Grey</a>
					                	<span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
				                	</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending" selected>Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	February 23, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-secondary">On hold</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$5,200 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $1,300</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0005</td>
								<td>October 2014</td>
				                <td>
				                	<h6 class="mb-0">
					                	<a href="#">Vanessa Aurelius</a>
					                	<span class="d-block font-size-sm text-muted">Payment method: Wire transfer</span>
				                	</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid" selected>Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	January 10, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-warning">9 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$3,000 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $789</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0004</td>
								<td>October 2014</td>
				                <td>
				                	<h6 class="mb-0">
					                	<a href="#">Hanna Walden</a>
					                	<span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
				                	</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid" selected>Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	May 2, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-primary">20 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$2,830 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $600</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0003</td>
								<td>September 2014</td>
				                <td>
				                	<h6 class="mb-0">
					                	<a href="#">Dori Laperriere</a>
					                	<span class="d-block font-size-sm text-muted">Payment method: Skrill</span>
				                	</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold" selected>On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	May 1, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-success">Paid on Jan 10, 2015</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$12,850 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $3,590</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0002</td>
								<td>September 2014</td>
				                <td>
				                	<h6 class="mb-0">
					                	<a href="#">Jordano Diressimo</a>
					                	<span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
				                	</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue">Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid" selected>Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	June 22, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-success">Paid on Jan 9, 2015</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$10,900 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $3,690</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#0001</td>
								<td>September 2014</td>
				                <td>
				                	<h6 class="mb-0">
					                	<a href="#">Patrick Muller</a>
					                	<span class="d-block font-size-sm text-muted">Payment method: Paypal</span>
				                	</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="overdue" selected>Overdue</option>
				                		<option value="hold">On hold</option>
				                		<option value="pending">Pending</option>
				                		<option value="paid">Paid</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="cancel">Canceled</option>
				                	</select>
			                	</td>
				                <td>
				                	April 4, 2015
			                	</td>
				                <td>
				                	<span class="badge badge-warning">5 days</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">$9,390 <span class="d-block font-size-sm text-muted font-weight-normal">VAT $2,548</span></h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download</a>
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</div>
									</div>
								</td>
				            </tr>
			            </tbody>
		            </table>
				</div>
				<!-- /invoice archive -->

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
