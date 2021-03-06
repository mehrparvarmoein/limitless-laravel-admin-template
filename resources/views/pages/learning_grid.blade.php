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
	<script src="../../../../global_assets/js/demo_pages/learning.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Learning</span> - Grid Layout</h4>
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
							<a href="learning_grid" class="breadcrumb-item">Learning</a>
							<span class="breadcrumb-item active">Grid layout</span>
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
					<div class="w-100 overflow-auto order-2 order-md-1">

						<!-- Vertical cards -->
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-img-actions mx-1 mt-1">
										<a href="#course_preview" data-toggle="modal">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
										</a>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
												<a href="#" class="text-default mr-2">Data Governance</a>
												<span class="text-success ml-auto">$49.99</span>
											</h6>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Eugene Kopyov</a></li>
												<li class="list-inline-item">Nov 1st, 2016</li>
											</ul>
										</div>

										One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 382</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 60 hours</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(49)</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="card">
									<div class="card-img-actions mx-1 mt-1">
										<a href="#course_preview" data-toggle="modal">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
										</a>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
												<a href="#" class="text-default mr-2">Java language</a>
												<span class="text-success ml-auto">$54.90</span>
											</h6>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Malcolm Davis</a></li>
												<li class="list-inline-item">Oct 25th, 2016</li>
											</ul>
										</div>

										However hard he threw himself onto his right, he always rolled back to where he was. He must <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 544</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 90 hours</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-half font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(53)</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="card">
									<div class="card-img-actions mx-1 mt-1">
										<a href="#course_preview" data-toggle="modal">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
										</a>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
												<a href="#" class="text-default mr-2">Python language</a>
												<span class="text-success ml-auto">$99.90</span>
											</h6>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Mark Staters</a></li>
												<li class="list-inline-item">Oct 26th, 2016</li>
											</ul>
										</div>

										Headboard so that he could lift his head better; found where the itch was, and saw that it <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 64</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 60 hours</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(654)</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-img-actions mx-1 mt-1">
										<a href="#course_preview" data-toggle="modal">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
										</a>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
												<a href="#" class="text-default mr-2">LESS language</a>
												<span class="text-danger-400 ml-auto">Free</span>
											</h6>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">James Alexander</a></li>
												<li class="list-inline-item"> Nov 3rd, 2016</li>
											</ul>
										</div>

										I am alone, and feel the charm of existence in this spot, which was created for the bliss <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 272</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 15 hours</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-half font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(12)</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="card">
									<div class="card-img-actions mx-1 mt-1">
										<a href="#course_preview" data-toggle="modal">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
										</a>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
												<a href="#" class="text-default mr-2">Data Management</a>
												<span class="text-success ml-auto">$79.99</span>
											</h6>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Jeremy Victorino</a></li>
												<li class="list-inline-item">Nov 4th, 2016</li>
											</ul>
										</div>

										When, while the lovely valley teems with vapour around me, and the meridian sun strikes upper <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 34</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 80 hours</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-empty3 font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(8)</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="card">
									<div class="card-img-actions mx-1 mt-1">
										<a href="#course_preview" data-toggle="modal">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
										</a>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
												<a href="#" class="text-default mr-2">Web Development</a>
												<span class="text-success ml-auto">$39.99</span>
											</h6>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Margo Baker</a></li>
												<li class="list-inline-item">Nov 5th, 2016</li>
											</ul>
										</div>

										Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 84</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 60 hours</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-half font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(36)</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-img-actions mx-1 mt-1">
										<a href="#course_preview" data-toggle="modal">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
										</a>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
												<a href="#" class="text-default mr-2">SASS language</a>
												<span class="text-success ml-auto">$44.90</span>
											</h6>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Monica Smith</a></li>
												<li class="list-inline-item">Nov 6th, 2016</li>
											</ul>
										</div>

										When darkness overspreads my eyes, and heaven and earth seem to dwell in my soul and absorb its <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 183</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 30 hours</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(96)</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="card">
									<div class="card-img-actions mx-1 mt-1">
										<a href="#course_preview" data-toggle="modal">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
										</a>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
												<a href="#" class="text-default mr-2">Office Management</a>
												<span class="text-danger-400 ml-auto">Free</span>
											</h6>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Bastian Miller</a></li>
												<li class="list-inline-item">Nov 7th, 2016</li>
											</ul>
										</div>

										Oh my friend -- but it is too much for my strength -- I sink under the weight of the splendour <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 93</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 40 hours</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-half font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(57)</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="card">
									<div class="card-img-actions mx-1 mt-1">
										<a href="#course_preview" data-toggle="modal">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
										</a>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
												<a href="#" class="text-default mr-2">PHP language</a>
												<span class="text-danger-400 ml-auto">Free</span>
											</h6>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Jordana Mills</a></li>
												<li class="list-inline-item">Nov 8th, 2016</li>
											</ul>
										</div>

										When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 301</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 20 hours</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-half font-size-base text-warning-300"></i>
											<i class="icon-star-empty3 font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(19)</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-img-actions mx-1 mt-1">
										<a href="#course_preview" data-toggle="modal">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
										</a>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
												<a href="#" class="text-default mr-2">Software testing</a>
												<span class="text-danger-400 ml-auto">Free</span>
											</h6>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Buzz Brenson</a></li>
												<li class="list-inline-item">Nov 9th, 2016</li>
											</ul>
										</div>

										"What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 48</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 90 hours</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(4)</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="card">
									<div class="card-img-actions mx-1 mt-1">
										<a href="#course_preview" data-toggle="modal">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
										</a>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
												<a href="#" class="text-default mr-2">Server management</a>
												<span class="text-success ml-auto">$84.90</span>
											</h6>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Zachary Willson</a></li>
												<li class="list-inline-item">Nov 10th, 2016</li>
											</ul>
										</div>

										And above it there hung a picture that he had recently cut out of an illustrated magazine and <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 43</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 100 hours</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-half font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(64)</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="card">
									<div class="card-img-actions mx-1 mt-1">
										<a href="#course_preview" data-toggle="modal">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
										</a>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
												<a href="#" class="text-default mr-2">Database management</a>
												<span class="text-success ml-auto">$112.50</span>
											</h6>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">William Miles</a></li>
												<li class="list-inline-item">Nov 11th, 2016</li>
											</ul>
										</div>

										Travelling day in and day out. Doing business like this takes much more effort than doing <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 293</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 120 hours</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-half font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(86)</span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-img-actions mx-1 mt-1">
										<a href="#course_preview" data-toggle="modal">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
										</a>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
												<a href="#" class="text-default mr-2">Graphic design</a>
												<span class="text-success ml-auto">$76.00</span>
											</h6>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Freddy Walden</a></li>
												<li class="list-inline-item">Nov 12th, 2016</li>
											</ul>
										</div>

										"How about if I sleep a little bit longer and forget all this nonsense", he thought, but that <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 419</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 160 hours</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(38)</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="card">
									<div class="card-img-actions mx-1 mt-1">
										<a href="#course_preview" data-toggle="modal">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
										</a>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
												<a href="#" class="text-default mr-2">User experience</a>
												<span class="text-danger-400 ml-auto">Free</span>
											</h6>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Dori Laperriere</a></li>
												<li class="list-inline-item">Nov 13th, 2016</li>
											</ul>
										</div>

										So that he could lift his head better; found where the itch was, and saw that it was covered <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 190</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 200 hours</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-half font-size-base text-warning-300"></i>
											<i class="icon-star-empty3 font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(193)</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="card">
									<div class="card-img-actions mx-1 mt-1">
										<a href="#course_preview" data-toggle="modal">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3 icon-2x"></i></span>
										</a>
									</div>

									<div class="card-body">
										<div class="mb-3">
											<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
												<a href="#" class="text-default mr-2">Human relationships</a>
												<span class="text-danger-400 ml-auto">Free</span>
											</h6>

											<ul class="list-inline list-inline-dotted text-muted mb-0">
												<li class="list-inline-item">By <a href="#" class="text-muted">Vanessa Aurelius</a></li>
												<li class="list-inline-item">Nov 14th, 2016</li>
											</ul>
										</div>

										It quickly back because as soon as he touched it he was overcome by a cold shudder. He slid <a href="#">[...]</a>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<ul class="list-inline list-inline-dotted mb-0">
											<li class="list-inline-item"><i class="icon-users mr-2"></i> 205</li>
											<li class="list-inline-item"><i class="icon-alarm mr-2"></i> 80 hours</li>
										</ul>

										<div class="mt-2 mt-sm-0">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-half font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(128)</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /vertical cards -->


						<!-- Pagination -->
						<div class="d-flex justify-content-center mt-3 mb-3">
							<ul class="pagination shadow-1">
								<li class="page-item"><a href="#" class="page-link page-link-white"><i class="icon-arrow-small-right"></i></a></li>
								<li class="page-item active"><a href="#" class="page-link page-link-white">1</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white">2</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white">3</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white">4</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white">5</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white"><i class="icon-arrow-small-left"></i></a></li>
							</ul>
						</div>
						<!-- /pagination -->

					</div>
					<!-- /left content -->


					<!-- Right sidebar component -->
					<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

						<!-- Sidebar content -->
						<div class="sidebar-content">

							<!-- Find course -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Find course</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form class="mb-3" action="#">
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="search" class="form-control" placeholder="Type and hit Enter">
											<div class="form-control-feedback">
												<i class="icon-search4 font-size-base text-muted"></i>
											</div>
										</div>
									</form>

									<form action="#">
										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Categories</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Development
													<span class="text-muted ml-1">(83)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Design
													<span class="text-muted ml-1">(92)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Management
													<span class="text-muted ml-1">(36)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Finances
													<span class="text-muted ml-1">(50)</span>
												</label>
											</div>
										</div>

										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Price</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" checked data-fouc>
													All courses
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" data-fouc>
													Free courses
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" data-fouc>
													Paid courses
												</label>	
											</div>
										</div>

										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Status</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Registration
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Progress
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Completed
												</label>
											</div>
										</div>

										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Duration</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													0 - 50 hours
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													51 - 100 hours
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													101+ hours
												</label>
											</div>
										</div>

										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Trainer</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Eugene Kopyov
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													James Alexander
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Jeremy Victorino
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Bastian Miller
												</label>
											</div>
										</div>

										<button type="submit" class="btn bg-blue btn-block">
											<i class="icon-filter4 mr-2"></i>
											Filter
										</button>
									</form>
								</div>
							</div>
							<!-- /find course -->


							<!-- Categories -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Categories</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body p-0">
									<div class="nav nav-sidebar mb-2">
										<li class="nav-item-header font-size-xs text-uppercase">Development</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												Frontend development
												<span class="badge badge-secondary badge-pill ml-auto">37</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												Backend development
												<span class="badge badge-secondary badge-pill ml-auto">58</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												Engineering
												<span class="badge badge-secondary badge-pill ml-auto">39</span>
											</a>
										</li>

										<li class="nav-item-header font-size-xs text-uppercase">Design</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												Interface design
												<span class="badge badge-secondary badge-pill ml-auto">21</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												User experience
												<span class="badge badge-secondary badge-pill ml-auto">10</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												Web design
												<span class="badge badge-secondary badge-pill ml-auto">26</span>
											</a>
										</li>
									</div>
								</div>
							</div>
							<!-- /categories -->


							<!-- Assigned users -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Assigned users</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="media-list">
										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Rebecca Jameson</div>
												<span class="font-size-sm text-muted">Web developer</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Walter Sommers</div>
												<span class="font-size-sm text-muted">Lead developer</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Otto Gerwald</div>
												<span class="font-size-sm text-muted">Front end developer</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Vince Satmann</div>
												<span class="font-size-sm text-muted">UX expert</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Jason Leroy</div>
												<span class="font-size-sm text-muted">SEO specialist</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /assigned users -->


							<!-- Upcoming courses -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Upcoming courses</span>
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
												<h5 class="text-center text-success mb-0">02</h5>
												<div class="font-size-sm text-muted line-height-1">Nov</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">Web development strategy</span> course by <a href="#">James Franko</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">120 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-half font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">15</h5>
												<div class="font-size-sm text-muted line-height-1">Nov</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">Business development</span> course by <a href="#">Jeremy Victorino</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">40 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-half font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">01</h5>
												<div class="font-size-sm text-muted line-height-1">Dec</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">Digital marketing</span> course by <a href="#">Monica Smith</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">100 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">15</h5>
												<div class="font-size-sm text-muted line-height-1">Dec</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">User experience design</span> course by <a href="#">Buzz Brenson</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">90 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-empty3 font-size-base text-warning-300"></i>
														<i class="icon-star-half font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">20</h5>
												<div class="font-size-sm text-muted line-height-1">Dec</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">Digital painting</span> course by <a href="#">Zachary Willson</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">120 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">04</h5>
												<div class="font-size-sm text-muted line-height-1">Jan</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">Financial analysis</span> course by <a href="#">Dori Laperriere</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">60 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /upcoming courses -->

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


	<!-- Course preview modal -->
	<div class="modal fade" id="course_preview" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title">Course preview</h6>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Take this course</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /course preview modal -->

</body>
</html>
