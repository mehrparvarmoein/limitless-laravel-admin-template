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
	<script src="../../../../global_assets/js/plugins/tables/datatables/extensions/select.min.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/datatables_extension_select.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Datatables</span> - Select</h4>
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
							<a href="datatable_extension_select" class="breadcrumb-item">Datatables</a>
							<span class="breadcrumb-item active">Select</span>
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

				<!-- Basic initialization -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Basic initialization</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Select is an extension for DataTables that provides table item selection capabilities. In its most simple form it can be enabled on a DataTable by setting the <code>select</code> option to be <code>true</code>. This will enable Select with all of its default options - row selection which is performed using the <code>os</code> method (click to select a single item, <kbd>cmd/ctrl</kbd> to add and remove items or <kbd>shift</kbd> to select a range of items).
					</div>

					<table class="table datatable-select-basic">
						<thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Job Title</th>
								<th>DOB</th>
								<th>Status</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marth</td>
								<td><a href="#">Enright</a></td>
								<td>Traffic Court Referee</td>
								<td>22 Jun 1972</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Jackelyn</td>
								<td>Weible</td>
								<td><a href="#">Airline Transport Pilot</a></td>
								<td>3 Oct 1981</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Aura</td>
								<td>Hard</td>
								<td>Business Services Sales Representative</td>
								<td>19 Apr 1969</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Nathalie</td>
								<td><a href="#">Pretty</a></td>
								<td>Drywall Stripper</td>
								<td>13 Dec 1977</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Sharan</td>
								<td>Leland</td>
								<td>Aviation Tactical Readiness Officer</td>
								<td>30 Dec 1991</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Maxine</td>
								<td><a href="#">Woldt</a></td>
								<td><a href="#">Business Services Sales Representative</a></td>
								<td>17 Oct 1987</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Sylvia</td>
								<td><a href="#">Mcgaughy</a></td>
								<td>Hemodialysis Technician</td>
								<td>11 Nov 1983</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Lizzee</td>
								<td><a href="#">Goodlow</a></td>
								<td>Technical Services Librarian</td>
								<td>1 Nov 1961</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Kennedy</td>
								<td>Haley</td>
								<td>Senior Marketing Designer</td>
								<td>18 Dec 1960</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Chantal</td>
								<td><a href="#">Nailor</a></td>
								<td>Technical Services Librarian</td>
								<td>10 Jan 1980</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Delma</td>
								<td>Bonds</td>
								<td>Lead Brand Manager</td>
								<td>21 Dec 1968</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Roland</td>
								<td>Salmos</td>
								<td><a href="#">Senior Program Developer</a></td>
								<td>5 Jun 1986</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Coy</td>
								<td>Wollard</td>
								<td>Customer Service Operator</td>
								<td>12 Oct 1982</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Maxwell</td>
								<td>Maben</td>
								<td>Regional Representative</td>
								<td>25 Feb 1988</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Cicely</td>
								<td>Sigler</td>
								<td><a href="#">Senior Research Officer</a></td>
								<td>15 Mar 1960</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /Basic initialization -->


				<!-- Single item selection -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Single item selection</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						This example shows the <strong>single</strong> item selection option. Here only a single item can be selected, any other selected items will be automatically deselected when a new item is selected. The <code>select.style</code> option provides the ability to control how items are selected in the table. It is a <code>string</code> that can be used with one of the following options: <code>single</code> - single item selection, <code>multi</code> - multiple items selection, <code>os</code> - OS style selection.
					</div>

					<table class="table datatable-select-single">
						<thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Job Title</th>
								<th>DOB</th>
								<th>Status</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marth</td>
								<td><a href="#">Enright</a></td>
								<td>Traffic Court Referee</td>
								<td>22 Jun 1972</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Jackelyn</td>
								<td>Weible</td>
								<td><a href="#">Airline Transport Pilot</a></td>
								<td>3 Oct 1981</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Aura</td>
								<td>Hard</td>
								<td>Business Services Sales Representative</td>
								<td>19 Apr 1969</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Nathalie</td>
								<td><a href="#">Pretty</a></td>
								<td>Drywall Stripper</td>
								<td>13 Dec 1977</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Sharan</td>
								<td>Leland</td>
								<td>Aviation Tactical Readiness Officer</td>
								<td>30 Dec 1991</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Maxine</td>
								<td><a href="#">Woldt</a></td>
								<td><a href="#">Business Services Sales Representative</a></td>
								<td>17 Oct 1987</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Sylvia</td>
								<td><a href="#">Mcgaughy</a></td>
								<td>Hemodialysis Technician</td>
								<td>11 Nov 1983</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Lizzee</td>
								<td><a href="#">Goodlow</a></td>
								<td>Technical Services Librarian</td>
								<td>1 Nov 1961</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Kennedy</td>
								<td>Haley</td>
								<td>Senior Marketing Designer</td>
								<td>18 Dec 1960</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Chantal</td>
								<td><a href="#">Nailor</a></td>
								<td>Technical Services Librarian</td>
								<td>10 Jan 1980</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Delma</td>
								<td>Bonds</td>
								<td>Lead Brand Manager</td>
								<td>21 Dec 1968</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Roland</td>
								<td>Salmos</td>
								<td><a href="#">Senior Program Developer</a></td>
								<td>5 Jun 1986</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Coy</td>
								<td>Wollard</td>
								<td>Customer Service Operator</td>
								<td>12 Oct 1982</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Maxwell</td>
								<td>Maben</td>
								<td>Regional Representative</td>
								<td>25 Feb 1988</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Cicely</td>
								<td>Sigler</td>
								<td><a href="#">Senior Research Officer</a></td>
								<td>15 Mar 1960</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /single item selection -->


				<!-- Multiple items selection -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Multiple items selection</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						This example shows the <strong>multi</strong> option. The <code>select.style</code> option provides the ability to control how items are selected in the table. It is a <code>string</code> that can be used with one of the following options: <code>single</code> - single item selection, <code>multi</code> - multiple items selection, <code>os</code> - OS style selection. Note how a click on a row will toggle its selected state without effecting other rows, unlike the os and single options shown in other examples.
					</div>

					<table class="table datatable-select-multiple">
						<thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Job Title</th>
								<th>DOB</th>
								<th>Status</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marth</td>
								<td><a href="#">Enright</a></td>
								<td>Traffic Court Referee</td>
								<td>22 Jun 1972</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Jackelyn</td>
								<td>Weible</td>
								<td><a href="#">Airline Transport Pilot</a></td>
								<td>3 Oct 1981</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Aura</td>
								<td>Hard</td>
								<td>Business Services Sales Representative</td>
								<td>19 Apr 1969</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Nathalie</td>
								<td><a href="#">Pretty</a></td>
								<td>Drywall Stripper</td>
								<td>13 Dec 1977</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Sharan</td>
								<td>Leland</td>
								<td>Aviation Tactical Readiness Officer</td>
								<td>30 Dec 1991</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Maxine</td>
								<td><a href="#">Woldt</a></td>
								<td><a href="#">Business Services Sales Representative</a></td>
								<td>17 Oct 1987</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Sylvia</td>
								<td><a href="#">Mcgaughy</a></td>
								<td>Hemodialysis Technician</td>
								<td>11 Nov 1983</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Lizzee</td>
								<td><a href="#">Goodlow</a></td>
								<td>Technical Services Librarian</td>
								<td>1 Nov 1961</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Kennedy</td>
								<td>Haley</td>
								<td>Senior Marketing Designer</td>
								<td>18 Dec 1960</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Chantal</td>
								<td><a href="#">Nailor</a></td>
								<td>Technical Services Librarian</td>
								<td>10 Jan 1980</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Delma</td>
								<td>Bonds</td>
								<td>Lead Brand Manager</td>
								<td>21 Dec 1968</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Roland</td>
								<td>Salmos</td>
								<td><a href="#">Senior Program Developer</a></td>
								<td>5 Jun 1986</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Coy</td>
								<td>Wollard</td>
								<td>Customer Service Operator</td>
								<td>12 Oct 1982</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Maxwell</td>
								<td>Maben</td>
								<td>Regional Representative</td>
								<td>25 Feb 1988</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Cicely</td>
								<td>Sigler</td>
								<td><a href="#">Senior Research Officer</a></td>
								<td>15 Mar 1960</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /multiple items selection -->


				<!-- Checkbox selection -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Checkbox selection</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						A selected row is typically shown in a DataTable by using a highlight background colour - however, it can also be useful to use other styling options to convey the selected state of items in a table to the end user. The checkbox is not an <code>&lt;input type="checkbox"></code> element, but rather a CSS that uses the <code>:before</code> and <code>:after</code> pseudo elements of the cell to draw a box and the tick. This can therefore be easily modified to suit the style of your site/app.
					</div>

					<table class="table datatable-select-checkbox">
						<thead>
							<tr>
								<th></th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Job Title</th>
								<th>DOB</th>
								<th>Status</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td>Marth</td>
								<td><a href="#">Enright</a></td>
								<td>Traffic Court Referee</td>
								<td>22 Jun 1972</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>Jackelyn</td>
								<td>Weible</td>
								<td><a href="#">Airline Transport Pilot</a></td>
								<td>3 Oct 1981</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>Aura</td>
								<td>Hard</td>
								<td>Business Services Sales Representative</td>
								<td>19 Apr 1969</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>Nathalie</td>
								<td><a href="#">Pretty</a></td>
								<td>Drywall Stripper</td>
								<td>13 Dec 1977</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>Sharan</td>
								<td>Leland</td>
								<td>Aviation Tactical Readiness Officer</td>
								<td>30 Dec 1991</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>Maxine</td>
								<td><a href="#">Woldt</a></td>
								<td><a href="#">Business Services Sales Representative</a></td>
								<td>17 Oct 1987</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>Sylvia</td>
								<td><a href="#">Mcgaughy</a></td>
								<td>Hemodialysis Technician</td>
								<td>11 Nov 1983</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>Lizzee</td>
								<td><a href="#">Goodlow</a></td>
								<td>Technical Services Librarian</td>
								<td>1 Nov 1961</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>Kennedy</td>
								<td>Haley</td>
								<td>Senior Marketing Designer</td>
								<td>18 Dec 1960</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>Chantal</td>
								<td><a href="#">Nailor</a></td>
								<td>Technical Services Librarian</td>
								<td>10 Jan 1980</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>Delma</td>
								<td>Bonds</td>
								<td>Lead Brand Manager</td>
								<td>21 Dec 1968</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>Roland</td>
								<td>Salmos</td>
								<td><a href="#">Senior Program Developer</a></td>
								<td>5 Jun 1986</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>Coy</td>
								<td>Wollard</td>
								<td>Customer Service Operator</td>
								<td>12 Oct 1982</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>Maxwell</td>
								<td>Maben</td>
								<td>Regional Representative</td>
								<td>25 Feb 1988</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>Cicely</td>
								<td>Sigler</td>
								<td><a href="#">Senior Research Officer</a></td>
								<td>15 Mar 1960</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /checkbox selection -->


				<!-- Control buttons -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Control buttons</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Buttons that can be used with the <strong>Buttons</strong> extension. Buttons is a framework providing common options, styling and API methods for buttons that can control a DataTable. Available buttons: <code>selected</code> - enabled only when one or more items are selected, <code>selectedSingle</code> - enabled only when a single item is selected, <code>selectAll</code> - select all, <code>selectNone</code> - deselect all, <code>selectRows</code> - select rows, <code>selectColumns</code> - select columns and <code>selectCells</code> - select cells.
					</div>

					<table class="table datatable-select-buttons">
						<thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Job Title</th>
								<th>DOB</th>
								<th>Status</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Marth</td>
								<td><a href="#">Enright</a></td>
								<td>Traffic Court Referee</td>
								<td>22 Jun 1972</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Jackelyn</td>
								<td>Weible</td>
								<td><a href="#">Airline Transport Pilot</a></td>
								<td>3 Oct 1981</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Aura</td>
								<td>Hard</td>
								<td>Business Services Sales Representative</td>
								<td>19 Apr 1969</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Nathalie</td>
								<td><a href="#">Pretty</a></td>
								<td>Drywall Stripper</td>
								<td>13 Dec 1977</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Sharan</td>
								<td>Leland</td>
								<td>Aviation Tactical Readiness Officer</td>
								<td>30 Dec 1991</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Maxine</td>
								<td><a href="#">Woldt</a></td>
								<td><a href="#">Business Services Sales Representative</a></td>
								<td>17 Oct 1987</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Sylvia</td>
								<td><a href="#">Mcgaughy</a></td>
								<td>Hemodialysis Technician</td>
								<td>11 Nov 1983</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Lizzee</td>
								<td><a href="#">Goodlow</a></td>
								<td>Technical Services Librarian</td>
								<td>1 Nov 1961</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Kennedy</td>
								<td>Haley</td>
								<td>Senior Marketing Designer</td>
								<td>18 Dec 1960</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Chantal</td>
								<td><a href="#">Nailor</a></td>
								<td>Technical Services Librarian</td>
								<td>10 Jan 1980</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Delma</td>
								<td>Bonds</td>
								<td>Lead Brand Manager</td>
								<td>21 Dec 1968</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Roland</td>
								<td>Salmos</td>
								<td><a href="#">Senior Program Developer</a></td>
								<td>5 Jun 1986</td>
								<td><span class="badge badge-secondary">Inactive</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Coy</td>
								<td>Wollard</td>
								<td>Customer Service Operator</td>
								<td>12 Oct 1982</td>
								<td><span class="badge badge-success">Active</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Maxwell</td>
								<td>Maben</td>
								<td>Regional Representative</td>
								<td>25 Feb 1988</td>
								<td><span class="badge badge-danger">Suspended</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Cicely</td>
								<td>Sigler</td>
								<td><a href="#">Senior Research Officer</a></td>
								<td>15 Mar 1960</td>
								<td><span class="badge badge-info">Pending</span></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /control buttons -->

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
