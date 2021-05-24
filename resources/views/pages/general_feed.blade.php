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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">General Pages</span> - Feed</h4>
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
							<a href="general_feed" class="breadcrumb-item">General pages</a>
							<span class="breadcrumb-item active">Feed</span>
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

				<!-- List styles -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Feed list styles
					</h6>
					<span class="text-muted d-block">Circle, square and rhombus. Empty and filled</span>
				</div>

				<div class="row">
					<div class="col-sm-6">
						
						<!-- Circle empty -->
						<div class="card card-body border-top-1 border-top-warning">
							<div class="list-feed">
								<div class="list-feed-item">
									<a href="#">David Linner</a> requested refund for a double bank card charge
								</div>

								<div class="list-feed-item">
									User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
								</div>

								<div class="list-feed-item">
									Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
								</div>

								<div class="list-feed-item">
									<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
								</div>

								<div class="list-feed-item">
									All sellers have received payouts for December, 2016!
								</div>

								<div class="list-feed-item">
									<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
								</div>
							</div>
						</div>
						<!-- /circle empty -->


						<!-- Square empty -->
						<div class="card card-body border-top-1 border-top-warning">
							<div class="list-feed list-feed-square">
								<div class="list-feed-item">
									<a href="#">David Linner</a> requested refund for a double bank card charge
								</div>

								<div class="list-feed-item">
									User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
								</div>

								<div class="list-feed-item">
									Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
								</div>

								<div class="list-feed-item">
									<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
								</div>

								<div class="list-feed-item">
									All sellers have received payouts for December, 2016!
								</div>

								<div class="list-feed-item">
									<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
								</div>
							</div>
						</div>
						<!-- /square empty -->


						<!-- Rhombus empty -->
						<div class="card card-body border-top-1 border-top-warning">
							<div class="list-feed list-feed-rhombus">
								<div class="list-feed-item">
									<a href="#">David Linner</a> requested refund for a double bank card charge
								</div>

								<div class="list-feed-item">
									User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
								</div>

								<div class="list-feed-item">
									Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
								</div>

								<div class="list-feed-item">
									<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
								</div>

								<div class="list-feed-item">
									All sellers have received payouts for December, 2016!
								</div>

								<div class="list-feed-item">
									<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
								</div>
							</div>
						</div>
						<!-- /rhombus empty -->

					</div>

					<div class="col-sm-6">
						
						<!-- Circle filled -->
						<div class="card card-body border-top-1 border-top-warning">
							<div class="list-feed list-feed-solid">
								<div class="list-feed-item">
									<a href="#">David Linner</a> requested refund for a double bank card charge
								</div>

								<div class="list-feed-item">
									User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
								</div>

								<div class="list-feed-item">
									Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
								</div>

								<div class="list-feed-item">
									<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
								</div>

								<div class="list-feed-item">
									All sellers have received payouts for December, 2016!
								</div>

								<div class="list-feed-item">
									<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
								</div>
							</div>
						</div>
						<!-- /circle filled -->


						<!-- Square filled -->
						<div class="card card-body border-top-1 border-top-warning">
							<div class="list-feed list-feed-square list-feed-solid">
								<div class="list-feed-item">
									<a href="#">David Linner</a> requested refund for a double bank card charge
								</div>

								<div class="list-feed-item">
									User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
								</div>

								<div class="list-feed-item">
									Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
								</div>

								<div class="list-feed-item">
									<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
								</div>

								<div class="list-feed-item">
									All sellers have received payouts for December, 2016!
								</div>

								<div class="list-feed-item">
									<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
								</div>
							</div>
						</div>
						<!-- /square filled -->


						<!-- Rhombus filled -->
						<div class="card card-body border-top-1 border-top-warning">
							<div class="list-feed list-feed-rhombus list-feed-solid">
								<div class="list-feed-item">
									<a href="#">David Linner</a> requested refund for a double bank card charge
								</div>

								<div class="list-feed-item">
									User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
								</div>

								<div class="list-feed-item">
									Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
								</div>

								<div class="list-feed-item">
									<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
								</div>

								<div class="list-feed-item">
									All sellers have received payouts for December, 2016!
								</div>

								<div class="list-feed-item">
									<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
								</div>
							</div>
						</div>
						<!-- /rhombus filled -->

					</div>
				</div>
				<!-- /list styles -->


				<!-- Color options -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Color options
					</h6>
					<span class="text-muted d-block">Background, border and line colors</span>
				</div>

				<div class="row">
					<div class="col-sm-6">
						
						<!-- Line and border. Solid, empty -->
						<div class="card card-body border-top-1 border-top-blue">
							<div class="list-feed">
								<div class="list-feed-item border-success-400">
									<a href="#">David Linner</a> requested refund for a double bank card charge
								</div>

								<div class="list-feed-item border-success-400">
									User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
								</div>

								<div class="list-feed-item border-success-400">
									Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
								</div>

								<div class="list-feed-item border-success-400">
									<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
								</div>

								<div class="list-feed-item border-success-400">
									All sellers have received payouts for December, 2016!
								</div>

								<div class="list-feed-item border-success-400">
									<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
								</div>
							</div>
						</div>
						<!-- /line and border. Solid, empty -->


						<!-- Line and border. Partial, empty -->
						<div class="card card-body border-top-1 border-top-blue">
							<div class="list-feed">
								<div class="list-feed-item border-warning-400">
									<a href="#">David Linner</a> requested refund for a double bank card charge
								</div>

								<div class="list-feed-item border-info-400">
									User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
								</div>

								<div class="list-feed-item border-pink-400">
									Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
								</div>

								<div class="list-feed-item border-slate-600">
									<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
								</div>

								<div class="list-feed-item border-teal-400">
									All sellers have received payouts for December, 2016!
								</div>

								<div class="list-feed-item border-danger-400">
									<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
								</div>
							</div>
						</div>
						<!-- /line and border. Partial, empty -->

					</div>

					<div class="col-sm-6">
						
						<!-- Line and border. Solid, filled -->
						<div class="card card-body border-top-1 border-top-blue">
							<div class="list-feed list-feed-solid">
								<div class="list-feed-item border-warning-400">
									<a href="#">David Linner</a> requested refund for a double bank card charge
								</div>

								<div class="list-feed-item border-warning-400">
									User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
								</div>

								<div class="list-feed-item border-warning-400">
									Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
								</div>

								<div class="list-feed-item border-warning-400">
									<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
								</div>

								<div class="list-feed-item border-warning-400">
									All sellers have received payouts for December, 2016!
								</div>

								<div class="list-feed-item border-warning-400">
									<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
								</div>
							</div>
						</div>
						<!-- /line and border. Solid, filled -->


						<!-- Line and border. Partial, filled -->
						<div class="card card-body border-top-1 border-top-blue">
							<div class="list-feed list-feed-solid">
								<div class="list-feed-item border-warning-400">
									<a href="#">David Linner</a> requested refund for a double bank card charge
								</div>

								<div class="list-feed-item border-info-400">
									User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
								</div>

								<div class="list-feed-item border-pink-400">
									Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
								</div>

								<div class="list-feed-item border-slate-600">
									<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
								</div>

								<div class="list-feed-item border-teal-400">
									All sellers have received payouts for December, 2016!
								</div>

								<div class="list-feed-item border-danger-400">
									<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
								</div>
							</div>
						</div>
						<!-- /line and border. Partial, filled -->

					</div>
				</div>
				<!-- /color options -->


				<!-- Time and date -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Time and date
					</h6>
					<span class="text-muted d-block">Various date and time options</span>
				</div>

				<div class="row">
					<div class="col-sm-6">

						<!-- Left aligned -->
						<div class="card card-body border-top-1 border-top-teal">
							<div class="list-feed list-feed-time">
								<div class="list-feed-item">
									<span class="feed-time text-muted font-size-sm">12:47</span>
									<a href="#">David Linner</a> requested refund for a double bank card charge
								</div>

								<div class="list-feed-item">
									<span class="feed-time text-muted font-size-sm">10:25</span>
									User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
								</div>

								<div class="list-feed-item">
									<span class="feed-time text-muted font-size-sm">09:37</span>
									Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
								</div>

								<div class="list-feed-item">
									<span class="feed-time text-muted font-size-sm">08:28</span>
									<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
								</div>

								<div class="list-feed-item">
									<span class="feed-time text-muted font-size-sm">07:58</span>
									All sellers have received payouts for December, 2016!
								</div>

								<div class="list-feed-item">
									<span class="feed-time text-muted font-size-sm">06:32</span>
									<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
								</div>
							</div>
						</div>
						<!-- /left aligned -->


						<!-- Top aligned -->
						<div class="card card-body border-top-1 border-top-teal">
							<div class="list-feed">
								<div class="list-feed-item">
									<div class="text-muted">Jan 12, 12:47</div>
									<a href="#">David Linner</a> requested refund for a double bank card charge
								</div>

								<div class="list-feed-item">
									<div class="text-muted">Jan 11, 10:25</div>
									User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
								</div>

								<div class="list-feed-item">
									<div class="text-muted">Jan 10, 09:37</div>
									Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
								</div>

								<div class="list-feed-item">
									<div class="text-muted">Jan 9, 08:28</div>
									<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
								</div>

								<div class="list-feed-item">
									<div class="text-muted">Jan 8, 07:58</div>
									All sellers have received payouts for December, 2016!
								</div>

								<div class="list-feed-item">
									<div class="text-muted">Jan 7, 06:32</div>
									<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
								</div>
							</div>
						</div>
						<!-- /top aligned -->

					</div>

					<div class="col-sm-6">

						<!-- Right aligned -->
						<div class="card card-body border-top-1 border-top-teal">
							<div class="list-feed">
								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										<a href="#">David Linner</a> requested refund for a double bank card charge
									</span>
									<div class="ml-auto text-muted font-size-sm">12:47</div>
								</div>

								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
									</span>
									<div class="ml-auto text-muted font-size-sm">10:25</div>
								</div>

								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
									</span>
									<div class="ml-auto text-muted font-size-sm">09:37</div>
								</div>

								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
									</span>
									<div class="ml-auto text-muted font-size-sm">08:28</div>
								</div>

								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										All sellers have received payouts for December, 2016!
									</span>
									<div class="ml-auto text-muted font-size-sm">07:58</div>
								</div>

								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
									</span>
									<div class="ml-auto text-muted font-size-sm">06:32</div>
								</div>
							</div>
						</div>
						<!-- /right aligned -->


						<!-- Bottom aligned -->
						<div class="card card-body border-top-1 border-top-teal">
							<div class="list-feed">
								<div class="list-feed-item">
									<a href="#">David Linner</a> requested refund for a double bank card charge
									<div class="text-muted">Jan 12, 12:47</div>
								</div>

								<div class="list-feed-item">
									User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
									<div class="text-muted">Jan 11, 10:25</div>
								</div>

								<div class="list-feed-item">
									Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
									<div class="text-muted">Jan 10, 09:37</div>
								</div>

								<div class="list-feed-item">
									<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
									<div class="text-muted">Jan 9, 08:28</div>
								</div>

								<div class="list-feed-item">
									All sellers have received payouts for December, 2016!
									<div class="text-muted">Jan 8, 07:58</div>
								</div>

								<div class="list-feed-item">
									<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
									<div class="text-muted">Jan 7, 06:32</div>
								</div>
							</div>
						</div>
						<!-- /bottom aligned -->

					</div>
				</div>
				<!-- /time and date -->


				<!-- Other options -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Other options
					</h6>
					<span class="text-muted d-block">Icon list and dropdown menu</span>
				</div>

				<div class="row">
					<div class="col-sm-6">

						<!-- Icon list -->
						<div class="card card-body border-top-1 border-top-danger">
							<div class="list-feed">
								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										<a href="#">David Linner</a> requested refund for a double bank card charge
									</span>

									<div class="ml-auto">
										<div class="list-icons">
											<a href="#" class="list-icons-item"><i class="icon-bubble-dots4"></i></a>
											<a href="#" class="list-icons-item ml-1"><i class="icon-circle-right2"></i></a>
										</div>
									</div>
								</div>

								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
									</span>

									<div class="ml-auto">
										<div class="list-icons">
											<a href="#" class="list-icons-item"><i class="icon-bubble-dots4"></i></a>
											<a href="#" class="list-icons-item ml-1"><i class="icon-circle-right2"></i></a>
										</div>
									</div>
								</div>

								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
									</span>

									<div class="ml-auto">
										<div class="list-icons">
											<a href="#" class="list-icons-item"><i class="icon-bubble-dots4"></i></a>
											<a href="#" class="list-icons-item ml-1"><i class="icon-circle-right2"></i></a>
										</div>
									</div>
								</div>

								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
									</span>

									<div class="ml-auto">
										<div class="list-icons">
											<a href="#" class="list-icons-item"><i class="icon-bubble-dots4"></i></a>
											<a href="#" class="list-icons-item ml-1"><i class="icon-circle-right2"></i></a>
										</div>
									</div>
								</div>

								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										All sellers have received payouts for December, 2016!
									</span>

									<div class="ml-auto">
										<div class="list-icons">
											<a href="#" class="list-icons-item"><i class="icon-bubble-dots4"></i></a>
											<a href="#" class="list-icons-item ml-1"><i class="icon-circle-right2"></i></a>
										</div>
									</div>
								</div>

								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
									</span>

									<div class="ml-auto">
										<div class="list-icons">
											<a href="#" class="list-icons-item"><i class="icon-bubble-dots4"></i></a>
											<a href="#" class="list-icons-item ml-1"><i class="icon-circle-right2"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /icon list -->

					</div>

					<div class="col-sm-6">

						<!-- Icon dropdown -->
						<div class="card card-body border-top-1 border-top-danger">
							<div class="list-feed">
								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										<a href="#">David Linner</a> requested refund for a double bank card charge
									</span>

									<div class="ml-auto">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Start chat <i class="icon-comment-discussion ml-auto mr-0"></i></a>
													<a href="#" class="dropdown-item">Make a call <i class="icon-phone2 ml-auto mr-0"></i></a>
													<a href="#" class="dropdown-item">Send mail <i class="icon-mail5 ml-auto mr-0"></i></a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Statistics <i class="icon-statistics ml-auto mr-0"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										User <a href="#">Christopher Wallace</a> from Google is awaiting for staff reply
									</span>

									<div class="ml-auto">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Start chat <i class="icon-comment-discussion ml-auto mr-0"></i></a>
													<a href="#" class="dropdown-item">Make a call <i class="icon-phone2 ml-auto mr-0"></i></a>
													<a href="#" class="dropdown-item">Send mail <i class="icon-mail5 ml-auto mr-0"></i></a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Statistics <i class="icon-statistics ml-auto mr-0"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										Ticket <strong>#43683</strong> has been resolved by <a href="#">Victoria Wilson</a>
									</span>

									<div class="ml-auto">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Start chat <i class="icon-comment-discussion ml-auto mr-0"></i></a>
													<a href="#" class="dropdown-item">Make a call <i class="icon-phone2 ml-auto mr-0"></i></a>
													<a href="#" class="dropdown-item">Send mail <i class="icon-mail5 ml-auto mr-0"></i></a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Statistics <i class="icon-statistics ml-auto mr-0"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										<a href="#">Eugene Kopyov</a> merged <strong>Master</strong>, <strong>Demo</strong> and <strong>Dev</strong> branches
									</span>

									<div class="ml-auto">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Start chat <i class="icon-comment-discussion ml-auto mr-0"></i></a>
													<a href="#" class="dropdown-item">Make a call <i class="icon-phone2 ml-auto mr-0"></i></a>
													<a href="#" class="dropdown-item">Send mail <i class="icon-mail5 ml-auto mr-0"></i></a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Statistics <i class="icon-statistics ml-auto mr-0"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										All sellers have received payouts for December, 2016!
									</span>

									<div class="ml-auto">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Start chat <i class="icon-comment-discussion ml-auto mr-0"></i></a>
													<a href="#" class="dropdown-item">Make a call <i class="icon-phone2 ml-auto mr-0"></i></a>
													<a href="#" class="dropdown-item">Send mail <i class="icon-mail5 ml-auto mr-0"></i></a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Statistics <i class="icon-statistics ml-auto mr-0"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="list-feed-item d-flex flex-nowrap">
									<span class="mr-3">
										<a href="#">Chris Arney</a> created a new ticket <strong>#43136</strong> and assigned to <a href="#">John Nod</a>
									</span>

									<div class="ml-auto">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Start chat <i class="icon-comment-discussion ml-auto mr-0"></i></a>
													<a href="#" class="dropdown-item">Make a call <i class="icon-phone2 ml-auto mr-0"></i></a>
													<a href="#" class="dropdown-item">Send mail <i class="icon-mail5 ml-auto mr-0"></i></a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Statistics <i class="icon-statistics ml-auto mr-0"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /icon dropdown -->

					</div>
				</div>
				<!-- /other options -->

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
