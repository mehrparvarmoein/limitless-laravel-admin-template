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
	<script src="../../../../global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="../../../../global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/widgets_stats.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Widgets</span> - Statistics</h4>
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
							<a href="widgets_stats" class="breadcrumb-item">Widgets</a>
							<span class="breadcrumb-item active">Statistics</span>
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

				<!-- Simple statistics -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Simple stats
					</h6>
					<span class="text-muted d-block">Boxes with icons</span>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3 align-self-center">
									<i class="icon-pointer icon-3x text-success-400"></i>
								</div>

								<div class="media-body text-right">
									<h3 class="font-weight-semibold mb-0">652,549</h3>
									<span class="text-uppercase font-size-sm text-muted">total clicks</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3 align-self-center">
									<i class="icon-enter6 icon-3x text-indigo-400"></i>
								</div>

								<div class="media-body text-right">
									<h3 class="font-weight-semibold mb-0">245,382</h3>
									<span class="text-uppercase font-size-sm text-muted">total visits</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card card-body">
							<div class="media">
								<div class="media-body">
									<h3 class="font-weight-semibold mb-0">54,390</h3>
									<span class="text-uppercase font-size-sm text-muted">total comments</span>
								</div>

								<div class="ml-3 align-self-center">
									<i class="icon-bubbles4 icon-3x text-blue-400"></i>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card card-body">
							<div class="media">
								<div class="media-body">
									<h3 class="font-weight-semibold mb-0">389,438</h3>
									<span class="text-uppercase font-size-sm text-muted">total orders</span>
								</div>

								<div class="ml-3 align-self-center">
									<i class="icon-bag icon-3x text-danger-400"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">
						<div class="card card-body bg-blue-400 has-bg-image">
							<div class="media">
								<div class="media-body">
									<h3 class="mb-0">54,390</h3>
									<span class="text-uppercase font-size-xs">total comments</span>
								</div>

								<div class="ml-3 align-self-center">
									<i class="icon-bubbles4 icon-3x opacity-75"></i>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card card-body bg-danger-400 has-bg-image">
							<div class="media">
								<div class="media-body">
									<h3 class="mb-0">389,438</h3>
									<span class="text-uppercase font-size-xs">total orders</span>
								</div>

								<div class="ml-3 align-self-center">
									<i class="icon-bag icon-3x opacity-75"></i>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card card-body bg-success-400 has-bg-image">
							<div class="media">
								<div class="mr-3 align-self-center">
									<i class="icon-pointer icon-3x opacity-75"></i>
								</div>

								<div class="media-body text-right">
									<h3 class="mb-0">652,549</h3>
									<span class="text-uppercase font-size-xs">total clicks</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card card-body bg-indigo-400 has-bg-image">
							<div class="media">
								<div class="mr-3 align-self-center">
									<i class="icon-enter6 icon-3x opacity-75"></i>
								</div>

								<div class="media-body text-right">
									<h3 class="mb-0">245,382</h3>
									<span class="text-uppercase font-size-xs">total visits</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /simple statistics -->


				<!-- Statistics with progress bar -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Progress stats
					</h6>
					<span class="text-muted d-block">Boxes with progress bars</span>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">
						<div class="card card-body">
							<div class="media mb-3">
								<div class="media-body">
									<h6 class="font-weight-semibold mb-0">Server maintenance</h6>
									<span class="text-muted">Until 1st of June</span>
								</div>

								<div class="ml-3 align-self-center">
									<i class="icon-cog3 icon-2x text-indigo-400 opacity-75"></i>
								</div>
							</div>

							<div class="progress mb-2" style="height: 0.125rem;">
								<div class="progress-bar bg-indigo-400" style="width: 67%">
									<span class="sr-only">67% Complete</span>
								</div>
							</div>

							<div>
				                <span class="float-right">67%</span>
				                Re-indexing
			                </div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card card-body">
							<div class="media mb-3">
								<div class="media-body">
									<h6 class="font-weight-semibold mb-0">Services status</h6>
									<span class="text-muted">April, 19th</span>
								</div>

								<div class="ml-3 align-self-center">
									<i class="icon-pulse2 icon-2x text-danger-400 opacity-75"></i>
								</div>
							</div>

							<div class="progress mb-2" style="height: 0.125rem;">
								<div class="progress-bar bg-danger-400" style="width: 80%">
									<span class="sr-only">80% Complete</span>
								</div>
							</div>
			                
			                <div>
			                	<span class="float-right">80%</span>
			                	Partly operational
			                </div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card card-body">
							<div class="media mb-3">
								<div class="mr-3 align-self-center">
									<i class="icon-cog3 icon-2x text-blue-400 opacity-75"></i>
								</div>

								<div class="media-body">
									<h6 class="font-weight-semibold mb-0">Server maintenance</h6>
									<span class="text-muted">Until 1st of June</span>
								</div>
							</div>

							<div class="progress mb-2" style="height: 0.125rem;">
								<div class="progress-bar bg-blue" style="width: 67%">
									<span class="sr-only">67% Complete</span>
								</div>
							</div>
			                
			                <div>
			                	<span class="float-right">67%</span>
			                	Re-indexing
			                </div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card card-body">
							<div class="media mb-3">
								<div class="mr-3 align-self-center">
									<i class="icon-pulse2 icon-2x text-success-400 opacity-75"></i>
								</div>

								<div class="media-body">
									<h6 class="font-weight-semibold mb-0">Services status</h6>
									<span class="text-muted">April, 19th</span>
								</div>
							</div>

							<div class="progress mb-2" style="height: 0.125rem;">
								<div class="progress-bar bg-success-400" style="width: 80%">
									<span class="sr-only">80% Complete</span>
								</div>
							</div>
			                
			                <div>
			                	<span class="float-right">80%</span>
			                	Partly operational
			                </div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">
						<div class="card card-body bg-blue-400 has-bg-image">
							<div class="media mb-3">
								<div class="media-body">
									<h6 class="font-weight-semibold mb-0">Server maintenance</h6>
									<span class="opacity-75">Until 1st of June</span>
								</div>

								<div class="ml-3 align-self-center">
									<i class="icon-cog3 icon-2x"></i>
								</div>
							</div>

							<div class="progress bg-blue mb-2" style="height: 0.125rem;">
								<div class="progress-bar bg-white" style="width: 67%">
									<span class="sr-only">67% Complete</span>
								</div>
							</div>
			                
			                <div>
			                	<span class="float-right">67%</span>
			                	Re-indexing
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card card-body bg-danger-400 has-bg-image">
							<div class="media mb-3">
								<div class="media-body">
									<h6 class="font-weight-semibold mb-0">Services status</h6>
									<span class="opacity-75">April, 19th</span>
								</div>

								<div class="ml-3 align-self-center">
									<i class="icon-pulse2 icon-2x"></i>
								</div>
							</div>

							<div class="progress bg-danger-600 mb-2" style="height: 0.125rem;">
								<div class="progress-bar bg-white" style="width: 80%">
									<span class="sr-only">80% Complete</span>
								</div>
							</div>
			                
			                <div>
			                	<span class="float-right">80%</span>
			                	Partly operational
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card card-body bg-success-400 has-bg-image">
							<div class="media mb-3">
								<div class="mr-3 align-self-center">
									<i class="icon-cog3 icon-2x"></i>
								</div>

								<div class="media-body">
									<h6 class="font-weight-semibold mb-0">Server maintenance</h6>
									<span class="opacity-75">Until 1st of June</span>
								</div>
							</div>

							<div class="progress bg-success mb-2" style="height: 0.125rem;">
								<div class="progress-bar bg-white" style="width: 67%">
									<span class="sr-only">67% Complete</span>
								</div>
							</div>
			                
			                <div>
			                	<span class="float-right">67%</span>
			                	Re-indexing
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card card-body bg-indigo-400 has-bg-image">
							<div class="media mb-3">
								<div class="mr-3 align-self-center">
									<i class="icon-pulse2 icon-2x"></i>
								</div>

								<div class="media-body">
									<h6 class="font-weight-semibold mb-0">Services status</h6>
									<span class="opacity-75">April, 19th</span>
								</div>
							</div>

							<div class="progress bg-indigo mb-2" style="height: 0.125rem;">
								<div class="progress-bar bg-white" style="width: 80%">
									<span class="sr-only">80% Complete</span>
								</div>
							</div>
			                
			                <div>
			                	<span class="float-right">80%</span>
			                	Partly operational
							</div>
						</div>
					</div>
				</div>
				<!-- /statistics with progress bar -->


				<!-- Widgets with charts -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Stats with charts
					</h6>
					<span class="text-muted d-block">Boxes with charts</span>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">

						<!-- Basic area chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">$18,390</h3>
									<div class="list-icons ml-auto">
				                		<a class="list-icons-item" data-action="reload"></a>
				                	</div>
			                	</div>

			                	<div>
									Today's revenue
									<div class="text-muted font-size-sm">$37,578 avg</div>
								</div>
							</div>

							<div id="chart_area_basic"></div>
						</div>
						<!-- /basic area chart -->

					</div>

					<div class="col-sm-6 col-xl-3">

						<!-- Basic bar chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">3,450</h3>
									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
			                	</div>
			                	
			                	<div>
									Members online
									<div class="text-muted font-size-sm">489 avg</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="chart_bar_basic"></div>
							</div>
						</div>
						<!-- /basic bar chart -->

					</div>

					<div class="col-sm-6 col-xl-3">

						<!-- Basic line chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">4,389</h3>
									<div class="list-icons ml-auto">
				                		<a class="list-icons-item" data-action="reload"></a>
				                	</div>
			                	</div>
			                	
			                	<div>
									Orders weekly
									<div class="text-muted font-size-sm">4,728 avg</div>
								</div>
							</div>

							<div id="line_chart_simple"></div>
						</div>
						<!-- /basic line chart -->

					</div>

					<div class="col-sm-6 col-xl-3">

						<!-- Basic sparklines -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">49.4%</h3>
									<div class="list-icons ml-auto">
				                		<div class="list-icons-item dropdown">
				                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
												<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
												<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
												<a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
											</div>
				                		</div>
			                		</div>
			                	</div>
			                	
			                	<div>
									Current server load
									<div class="text-muted font-size-sm">34.6% avg</div>
								</div>
							</div>

							<div id="sparklines_basic"></div>
						</div>
						<!-- /basic sparklines -->

					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">

						<!-- Area chart in colored card -->
						<div class="card bg-indigo-400 has-bg-image">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">$18,390</h3>
									<div class="list-icons ml-auto">
				                		<a class="list-icons-item" data-action="reload"></a>
				                	</div>
			                	</div>

			                	<div>
									Today's revenue
									<div class="font-size-sm opacity-75">$37,578 avg</div>
								</div>
							</div>

							<div id="chart_area_color"></div>
						</div>
						<!-- /area chart in colored card -->

					</div>

					<div class="col-sm-6 col-xl-3">

						<!-- Bar chart in colored card -->
						<div class="card bg-danger-400 has-bg-image">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">3,450</h3>
									<span class="badge bg-danger-800 badge-pill align-self-center ml-auto">+53,6%</span>
			                	</div>
			                	
			                	<div>
									Members online
									<div class="font-size-sm opacity-75">489 avg</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="chart_bar_color"></div>
							</div>
						</div>
						<!-- /bar chart in colored card -->

					</div>

					<div class="col-sm-6 col-xl-3">

						<!-- Line chart in colored card -->
						<div class="card bg-blue-400 has-bg-image">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">4,389</h3>
									<div class="list-icons ml-auto">
				                		<a class="list-icons-item" data-action="reload"></a>
				                	</div>
			                	</div>
			                	
			                	<div>
									Orders weekly
									<div class="font-size-sm opacity-75">4,728 avg</div>
								</div>
							</div>

							<div id="line_chart_color"></div>
						</div>
						<!-- /line chart in colored card -->

					</div>

					<div class="col-sm-6 col-xl-3">

						<!-- Sparklines in colored card -->
						<div class="card bg-success-400 has-bg-image">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">49.4%</h3>
									<div class="list-icons ml-auto">
				                		<div class="list-icons-item dropdown">
				                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-sync"></i> Update data</a>
												<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Detailed log</a>
												<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Statistics</a>
												<a href="#" class="dropdown-item"><i class="icon-cross3"></i> Clear list</a>
											</div>
				                		</div>
			                		</div>
			                	</div>
			                	
			                	<div>
									Current server load
									<div class="font-size-sm opacity-75">34.6% avg</div>
								</div>
							</div>

							<div id="sparklines_color"></div>
						</div>
						<!-- /sparklines in colored card -->

					</div>
				</div>
				<!-- /widgets with charts -->


				<!-- Stats with progress -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Stats with progress
					</h6>
					<span class="text-muted d-block">Rounded progress bars</span>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">

						<!-- Satisfaction rate -->
						<div class="card card-body text-center">
							<div class="svg-center position-relative" id="progress_icon_one"></div>
							<h2 class="progress-percentage mt-2 mb-1 font-weight-semibold">0%</h2>

							Satisfaction rate
							<div class="font-size-sm text-muted">54% average</div>
						</div>
						<!-- /satisfaction rate -->

					</div>

					<div class="col-sm-6 col-xl-3">

						<!-- Productivity goal  -->
						<div class="card card-body text-center">
							<div class="svg-center position-relative" id="progress_icon_two"></div>
							<h2 class="progress-percentage mt-2 mb-1 font-weight-semibold">0%</h2>

							Productivity goal
							<div class="font-size-sm text-muted">87% average</div>
						</div>
						<!-- /productivity goal -->

					</div>

					<div class="col-sm-6 col-xl-3">

						<!-- Orders processed -->
						<div class="card card-body text-center bg-teal-400 has-bg-image">
							<div class="svg-center position-relative" id="progress_icon_three"></div>
							<h2 class="progress-percentage mt-2 mb-1 font-weight-semibold">0%</h2>

							Orders processed
							<div class="font-size-sm opacity-75">83 orders pending</div>
						</div>
						<!-- /orders processed -->

					</div>

					<div class="col-sm-6 col-xl-3">

						<!-- Order shipped -->
						<div class="card card-body text-center bg-purple-400 has-bg-image">
							<div class="svg-center position-relative" id="progress_icon_four"></div>
							<h2 class="progress-percentage mt-2 mb-1 font-weight-semibold">0%</h2>

							Orders shipped
							<div class="font-size-sm opacity-75">92 orders pending</div>
						</div>
						<!-- /orders shipped -->

					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">

						<!-- Invitation stats white -->
						<div class="card text-center">
							<div class="card-body">
								<h6 class="font-weight-semibold mb-0 mt-1">Invitation statistics</h6>
								<div class="text-muted mb-3">539 invites sent</div>
								<div class="svg-center position-relative mb-1" id="progress_percentage_one"></div>
							</div>

							<div class="card-body border-top-0 pt-0">
								<div class="row">
									<div class="col-4">
										<div class="text-uppercase font-size-xs text-muted">Accepted</div>
										<h5 class="font-weight-semibold line-height-1 mt-1 mb-0">2,483</h5>
									</div>

									<div class="col-4">
										<div class="text-uppercase font-size-xs text-muted">Declined</div>
										<h5 class="font-weight-semibold line-height-1 mt-1 mb-0">1,257</h5>
									</div>

									<div class="col-4">
										<div class="text-uppercase font-size-xs text-muted">Pending</div>
										<h5 class="font-weight-semibold line-height-1 mt-1 mb-0">8,472</h5>
									</div>
								</div>
							</div>
						</div>
						<!-- /invitation stats white -->

					</div>

					<div class="col-sm-6 col-xl-3">

						<!-- Tickets stats white -->
						<div class="card text-center">
							<div class="card-body">
								<h6 class="font-weight-semibold mb-0 mt-1">Tickets statistics</h6>
								<div class="text-muted mb-3">893 tickets in total</div>
								<div class="svg-center position-relative mb-1" id="progress_percentage_two"></div>
							</div>

							<div class="card-body border-top-0 pt-0">
								<div class="row">
									<div class="col-4">
										<div class="text-uppercase font-size-xs text-muted">Raised</div>
										<h5 class="font-weight-semibold line-height-1 mt-1 mb-0">5,328</h5>
									</div>

									<div class="col-4">
										<div class="text-uppercase font-size-xs text-muted">Pending</div>
										<h5 class="font-weight-semibold line-height-1 mt-1 mb-0">2,348</h5>
									</div>

									<div class="col-4">
										<div class="text-uppercase font-size-xs text-muted">Closed</div>
										<h5 class="font-weight-semibold line-height-1 mt-1 mb-0">4,357</h5>
									</div>
								</div>
							</div>
						</div>
						<!-- /tickets stats white -->

					</div>

					<div class="col-sm-6 col-xl-3">

						<!-- Invitation stats colored -->
						<div class="card text-center bg-blue-400 has-bg-image">
							<div class="card-body">
								<h6 class="font-weight-semibold mb-0 mt-1">Invitation statistics</h6>
								<div class="opacity-75 mb-3">539 invites sent</div>
								<div class="svg-center position-relative mb-1" id="progress_percentage_three"></div>
							</div>

							<div class="card-body border-top-0 pt-0">
								<div class="row">
									<div class="col-4">
										<div class="text-uppercase font-size-xs">Accepted</div>
										<h5 class="font-weight-semibold line-height-1 mt-1 mb-0">2,483</h5>
									</div>

									<div class="col-4">
										<div class="text-uppercase font-size-xs">Declined</div>
										<h5 class="font-weight-semibold line-height-1 mt-1 mb-0">1,257</h5>
									</div>

									<div class="col-4">
										<div class="text-uppercase font-size-xs">Pending</div>
										<h5 class="font-weight-semibold line-height-1 mt-1 mb-0">8,472</h5>
									</div>
								</div>
							</div>
						</div>
						<!-- /invitation stats colored -->

					</div>

					<div class="col-sm-6 col-xl-3">

						<!-- Tickets stats colored -->
						<div class="card text-center bg-danger-400 has-bg-image">
							<div class="card-body">
								<h6 class="font-weight-semibold mb-0 mt-1">Tickets statistics</h6>
								<div class="opacity-75 mb-3">893 tickets in total</div>
								<div class="svg-center position-relative mb-1" id="progress_percentage_four"></div>
							</div>

							<div class="card-body border-top-0 pt-0">
								<div class="row">
									<div class="col-4">
										<div class="text-uppercase font-size-xs">Raised</div>
										<h5 class="font-weight-semibold line-height-1 mt-1 mb-0">5,328</h5>
									</div>

									<div class="col-4">
										<div class="text-uppercase font-size-xs">Pending</div>
										<h5 class="font-weight-semibold line-height-1 mt-1 mb-0">2,348</h5>
									</div>

									<div class="col-4">
										<div class="text-uppercase font-size-xs">Closed</div>
										<h5 class="font-weight-semibold line-height-1 mt-1 mb-0">4,357</h5>
									</div>
								</div>
							</div>
						</div>
						<!-- /tickets stats colored -->

					</div>
				</div>
				<!-- /stats with progress -->


				<!-- Other chart types -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Other chart types
					</h6>
					<span class="text-muted d-block">Donuts, pies, gauges</span>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">

						<!-- Pie with progress -->
						<div class="card card-body text-center">
							<h6 class="font-weight-semibold mb-0 mt-1">Order statistics</h6>
							<div class="font-size-sm text-muted mb-3">April 23rd, 2017</div>

							<div class="svg-center" id="pie_progress_bar"></div>
						</div>
						<!-- /pie with progress -->


						<!-- Progress arc - multiple colors -->
						<div class="card card-body text-center">
							<h6 class="font-weight-semibold mb-0 mt-1">Current CPU usage</h6>
							<div class="font-size-sm text-muted mb-3">37% average</div>

							<div class="svg-center" id="arc_multi"></div>
						</div>
						<!-- /progress arc - multiple colors -->


						<!-- Simple donut -->
						<div class="card card-body text-center">
							<h6 class="font-weight-semibold mb-0 mt-1">Orders in April</h6>
							<div class="font-size-sm text-muted mb-3">+24% since 2016</div>

							<div class="svg-center" id="donut_basic_stats"></div>

							<div class="row text-center">
								<div class="col-6">
									<div class="mt-3">
										<h5 class="font-weight-semibold mb-0">23,568</h5>
										<span class="text-muted font-size-sm">this month</span>
									</div>
								</div>

								<div class="col-6">
									<div class="mt-3">
										<h5 class="font-weight-semibold mb-0">$9,464</h5>
										<span class="text-muted font-size-sm">revenue</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /simple donut -->

					</div>

					<div class="col-sm-6 col-xl-3">

						<!-- Rounded progress - multiple -->
						<div class="card card-body text-center">
							<h6 class="font-weight-semibold mb-0 mt-1">Server usage</h6>
							<div class="font-size-sm text-muted mb-3">April 25th, 2017</div>

							<div class="svg-center" id="rounded_progress_multiple"></div>
						</div>
						<!-- /rounded progress - multiple -->


						<!-- Pie arc with legend -->
						<div class="card card-body text-center">
							<h6 class="font-weight-semibold mb-0 mt-1">Orders in August</h6>
							<div class="font-size-sm text-muted mb-3">+53% since 2016</div>

							<div class="svg-center" id="pie_arc_legend"></div>
						</div>
						<!-- /pie arc with legend -->


						<!-- Basic donut with legend -->
						<div class="card card-body text-center">
							<h6 class="font-weight-semibold mb-0 mt-1">Orders in May</h6>
							<div class="font-size-sm text-muted mb-3">+19% since 2016</div>

							<div class="svg-center" id="donut_basic_legend"></div>
						</div>
						<!-- /basic donut with legend -->

					</div>

					<div class="col-sm-6 col-xl-3">

						<!-- Segmented gauge -->
						<div class="card card-body text-center">
							<h6 class="font-weight-semibold mb-0 mt-1">Current RAM usage</h6>
							<div class="font-size-sm text-muted mb-3">49% average</div>

							<div class="svg-center" id="segmented_gauge"></div>
						</div>
						<!-- /segmented gauge -->


						<!-- Donut with details -->
						<div class="card card-body text-center">
							<h6 class="font-weight-semibold mb-0 mt-1">Support tickets</h6>
							<div class="font-size-sm text-muted mb-3">April 21st, 2017</div>

							<div class="svg-center" id="donut_basic_details"></div>
						</div>
						<!-- /donut with details -->


						<!-- Basic animated pie -->
						<div class="card card-body text-center">
							<div class="svg-center" id="pie_basic"></div>

							<span class="font-weight-semibold">Orders in June</span>
							<div class="font-size-sm text-muted">+38% since 2016</div>
						</div>
						<!-- /basic animated pie -->

					</div>

					<div class="col-sm-6 col-xl-3">

						<!-- Rounded progress -->
						<div class="card card-body text-center">
							<h6 class="font-weight-semibold mb-0 mt-1">Calories burned</h6>
							<div class="font-size-sm text-muted mb-3">April 20th, 2017</div>

							<div class="svg-center" id="rounded_progress_single"></div>
						</div>
						<!-- /rounded progress -->


						<!-- Progress arc - single color -->
						<div class="card card-body text-center">
							<h6 class="font-weight-semibold mb-0 mt-1">Current RAM usage</h6>
							<div class="font-size-sm text-muted mb-3">49% average</div>

							<div class="svg-center" id="arc_single"></div>
						</div>
						<!-- /progress arc - single color -->


						<!-- Pie with legend -->
						<div class="card card-body text-center">
							<h6 class="font-weight-semibold mb-0 mt-1">Orders in July</h6>
							<div class="font-size-sm text-muted mb-3">+19% since 2016</div>

							<div class="svg-center" id="pie_basic_legend"></div>									
						</div>
						<!-- /pie with legend -->

					</div>
				</div>
				<!-- /other chart types -->

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
