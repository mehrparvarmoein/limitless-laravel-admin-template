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
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/touch.min.js"></script>


	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/content_cards_draggable.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Content</span> - Draggable Cards</h4>
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
							<a href="content_cards_draggable" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Draggable cards</span>
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

				<!-- Basic sorting -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Basic sorting
					</h6>
					<span class="text-muted d-block">Sort cards using <code>move</code> button</span>
				</div>

				<div class="row row-sortable">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Multiple columns card 1</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Multiple columns card 2</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Multiple columns card 3</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Multiple columns card 4</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /basic sorting -->


				<!-- Define column with sorting cards -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Specify sorting area
					</h6>
					<span class="text-muted d-block">Specify column where to sort cards</span>
				</div>

				<div class="row">
					<div class="col-md-6 column-card-sortable">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">This is a sortable card</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Another sortable card</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Here sorting is disabled</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Here is also disabled</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="table-responsive">
								<table class="table table-bordered">
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /define column with sorting cards -->


				<!-- Exclude specified cards from sorting -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Exclude cards from sort
					</h6>
					<span class="text-muted d-block">Exclude specified cards from sorting</span>
				</div>

				<div class="row sortable-exclude">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Sortable card 1</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Sortable card 2</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card skip-sort">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Non-sortable card</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Sortable card 3</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /exclude specified cards from sorting -->


				<!-- Custom sorting handle -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Sorting handles
					</h6>
					<span class="text-muted d-block">Handles are <code>card title</code> and <code>move icon</code></span>
				</div>

				<div class="row sortable-heading">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Title handle 1</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Title handle 2</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Title handle 3</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Title handle 1</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /custom sorting handle -->


				<!-- Full card sorting -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card as a handle
					</h6>
					<span class="text-muted d-block">The whole card is a sorting handle</span>
				</div>

				<div class="row sortable-card">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Sortable card 1</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Sortable card 2</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Sortable card 3</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Sortable card 4</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
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
											<td rowspan="2">1</td>
											<td>Mark</td>
											<td>Otto</td>
											<td>@mdo</td>
										</tr>
										<tr>
											<td>Mark</td>
											<td>Otto</td>
											<td>@TwBootstrap</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Jacob</td>
											<td>Thornton</td>
											<td>@fat</td>
										</tr>
										<tr>
											<td>3</td>
											<td colspan="2">Larry the Bird</td>
											<td>@twitter</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /full card sorting -->

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
