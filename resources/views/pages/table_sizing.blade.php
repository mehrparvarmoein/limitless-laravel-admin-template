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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Tables</span> - Sizing</h4>
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
							<a href="table_sizing" class="breadcrumb-item">Tables</a>
							<span class="breadcrumb-item active">Sizing</span>
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

				<!-- Extra large table -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Extra large table</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Example of <code>extra large</code> table sizing using <code>.table-xl</code> class added to the <code>.table</code>. All table rows have <code>60px</code> height in REM units.
					</div>

					<div class="table-responsive">
						<table class="table table-xl">
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
								<tr>
									<td>5</td>
									<td>Winnie</td>
									<td>the Pooh</td>
									<td>@Winnie</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Garry</td>
									<td>Smith</td>
									<td>@Garry</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Ian</td>
									<td>Berg</td>
									<td>@Ian</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /extra large table -->


				<!-- Large table -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Large table</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Example of <code>large</code> table sizing using <code>.table-lg</code> class added to the <code>.table</code>. All table rows have <code>53px</code> height in REM units.
					</div>

					<div class="table-responsive">
						<table class="table table-lg">
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
								<tr>
									<td>5</td>
									<td>Winnie</td>
									<td>the Pooh</td>
									<td>@Winnie</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Garry</td>
									<td>Smith</td>
									<td>@Garry</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Ian</td>
									<td>Berg</td>
									<td>@Ian</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /large table -->


				<!-- Default table -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Default table</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Example of <code>default</code> table sizing. This table doesn't require any additional classes in <code>.table</code> container. All table rows have <code>44px</code> height in REM units.
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
								<tr>
									<td>5</td>
									<td>Winnie</td>
									<td>the Pooh</td>
									<td>@Winnie</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Garry</td>
									<td>Smith</td>
									<td>@Garry</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Ian</td>
									<td>Berg</td>
									<td>@Ian</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /default table -->


				<!-- Small table -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Small table</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Example of <code>small</code> table sizing using <code>.table-sm</code> class added to the <code>.table</code>. All table rows have <code>40px</code> height in REM units.
					</div>

					<div class="table-responsive">
						<table class="table table-sm">
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
								<tr>
									<td>5</td>
									<td>Winnie</td>
									<td>the Pooh</td>
									<td>@Winnie</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Garry</td>
									<td>Smith</td>
									<td>@Garry</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Ian</td>
									<td>Berg</td>
									<td>@Ian</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /small table -->


				<!-- Mini table -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Mini table</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Example of <code>mini</code> table sizing using <code>.table-xs</code> class added to the <code>.table</code>. All table rows have <code>36px</code> height in REM units.
					</div>

					<div class="table-responsive">
						<table class="table table-xs">
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
								<tr>
									<td>5</td>
									<td>Winnie</td>
									<td>the Pooh</td>
									<td>@Winnie</td>
								</tr>
								<tr>
									<td>6</td>
									<td>Garry</td>
									<td>Smith</td>
									<td>@Garry</td>
								</tr>
								<tr>
									<td>7</td>
									<td>Ian</td>
									<td>Berg</td>
									<td>@Ian</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /mini table -->

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
