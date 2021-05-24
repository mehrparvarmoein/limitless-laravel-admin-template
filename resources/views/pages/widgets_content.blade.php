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
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/widgets.min.js"></script>
	<script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /core JS files -->

	<!-- Page JS files -->
	<script src="../../../../global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="../../../../global_assets/js/plugins/uploaders/dropzone.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/widgets_content.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Widgets</span> - Content</h4>
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
							<a href="widgets_content" class="breadcrumb-item">Widgets</a>
							<span class="breadcrumb-item active">Content</span>
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

				<!-- Widgets list -->
				<div class="row">
					<div class="col-md-6 col-xl-3">

						<!-- User details (with sample pattern) -->
						<div class="card">
							<div class="card-body bg-blue text-center card-img-top" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
								<div class="card-img-actions d-inline-block mb-3">
									<img class="img-fluid rounded-circle" src="../../../../global_assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
									<div class="card-img-actions-overlay card-img rounded-circle">
										<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
											<i class="icon-plus3"></i>
										</a>
										<a href="user_pages_profile" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>

								<h6 class="font-weight-semibold mb-0">Victoria Davidson</h6>
								<span class="d-block opacity-75">Head of UX</span>

								<ul class="list-inline list-inline-condensed mt-3 mb-0">
									<li class="list-inline-item">
										<a href="#" class="btn btn-outline bg-white btn-icon text-white border-white border-2 rounded-round">
											<i class="icon-google-drive"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="#" class="btn btn-outline bg-white btn-icon text-white border-white border-2 rounded-round">
											<i class="icon-twitter"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a href="#" class="btn btn-outline bg-white btn-icon text-white border-white border-2 rounded-round">
											<i class="icon-github"></i>
										</a>
									</li>
								</ul>
							</div>

							<div class="card-body border-top-0">
								<div class="d-sm-flex flex-sm-wrap mb-3">
									<div class="font-weight-semibold">Full name:</div>
									<div class="ml-sm-auto mt-2 mt-sm-0">Victoria Anna Davidson</div>
								</div>

								<div class="d-sm-flex flex-sm-wrap mb-3">
									<div class="font-weight-semibold">Phone number:</div>
									<div class="ml-sm-auto mt-2 mt-sm-0">+3630 8911837</div>
								</div>

								<div class="d-sm-flex flex-sm-wrap mb-3">
									<div class="font-weight-semibold">Corporate Email:</div>
									<div class="ml-sm-auto mt-2 mt-sm-0"><a href="#">corporate@domain.com</a></div>
								</div>

								<div class="d-sm-flex flex-sm-wrap">
									<div class="font-weight-semibold">Personal Email:</div>
									<div class="ml-sm-auto mt-2 mt-sm-0"><a href="#">personal@domain.com</a></div>
								</div>
							</div>
						</div>
						<!-- /user details (with sample pattern) -->


						<!-- My messages -->
						<div class="card">

							<!-- Card heading -->
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Today's stats</h6>

								<div class="header-elements">
									<span><i class="icon-arrow-down22 text-danger"></i> <span class="font-weight-semibold">- 29.4%</span></span>
			                	</div>
							</div>
							<!-- /card heading -->


							<!-- Area chart -->
							<div id="messages-stats"></div>
							<!-- /area chart -->


							<!-- Tabs nav -->
		                	<ul class="nav nav-tabs nav-tabs-solid nav-justified bg-teal-400 border-x-0 border-bottom-0 border-top-teal-300 mb-0">
								<li class="nav-item">
									<a href="#today" class="nav-link font-size-sm text-uppercase font-weight-semibold active" data-toggle="tab">
										Today
									</a>
								</li>

								<li class="nav-item">
									<a href="#yesterday" class="nav-link font-size-sm text-uppercase font-weight-semibold" data-toggle="tab">
										Yesterday
									</a>
								</li>
							</ul>
							<!-- /tabs nav -->


							<!-- Tabs content -->
							<div class="tab-content card-body">
								<div class="tab-pane fade show active" id="today">
									<ul class="media-list">
										<li class="media">
											<div class="mr-3 position-relative">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" jeight="36" alt="">
												<span class="badge bg-danger-400 badge-pill badge-float border-2 border-white">8</span>
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">James Alexander</a>
													<span class="font-size-sm text-muted">14:58</span>
												</div>

												The constitutionally inventoried precariously...
											</div>
										</li>

										<li class="media">
											<div class="mr-3 position-relative">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" jeight="36" alt="">
												<span class="badge bg-danger-400 badge-pill badge-float border-2 border-white">6</span>
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Margo Baker</a>
													<span class="font-size-sm text-muted">12:16</span>
												</div>

												Pinched a well more moral chose goodness...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" jeight="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Jeremy Victorino</a>
													<span class="font-size-sm text-muted">09:48</span>
												</div>

												Pert thickly mischievous clung frowned well...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" jeight="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Beatrix Diaz</a>
													<span class="font-size-sm text-muted">05:54</span>
												</div>

												Nightingale taped hello bucolic fussily cardinal...
											</div>
										</li>
									</ul>
								</div>

								<div class="tab-pane fade" id="yesterday">
									<ul class="media-list">
										<li class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Isak Temes</a>
													<span class="font-size-sm text-muted">19:58</span>
												</div>

												Reasonable palpably rankly expressly grimy...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Vittorio Cosgrove</a>
													<span class="font-size-sm text-muted">16:35</span>
												</div>

												Arguably therefore more unexplainable fumed...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Hilary Talaugon</a>
													<span class="font-size-sm text-muted">12:16</span>
												</div>

												Nicely unlike porpoise a kookaburra past more...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Bobbie Seber</a>
													<span class="font-size-sm text-muted">09:20</span>
												</div>

												Before visual vigilantly fortuitous tortoise...
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /tabs content -->

						</div>
						<!-- /my messages -->


						<!-- Course widget -->
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
										<i class="icon-play"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="mb-3">
									<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
										<a href="#" class="text-default mr-2">Data Governance</a>
										<span class="text-success ml-auto">$49.99</span>
									</h6>

									<span>By <a href="#">Eugene Kopyov</a></span>
								</div>

								One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed <a href="#">[...]</a>
							</div>

							<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
								<span><i class="icon-comment mr-2"></i> 382</span>

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
						<!-- /course widget -->


						<!-- List of latest updates -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Latest updates</h6>

								<div class="header-elements">
									<a href="#">All updates</a>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon">
												<i class="icon-spinner11"></i>
											</a>
										</div>

										<div class="media-body">
											<a href="#">David Linner</a> requested refund for a double card charge
											<div class="text-muted font-size-sm">12 minutes ago</div>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-danger text-danger rounded-round border-2 btn-icon">
												<i class="icon-infinite"></i>
											</a>
										</div>
										
										<div class="media-body">
											User <a href="#">Christopher Wallace</a> is awaiting for staff reply
											<div class="text-muted font-size-sm">16 minutes ago</div>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-slate text-slate rounded-round border-2 btn-icon">
												<i class="icon-cash3"></i>
											</a>
										</div>

										<div class="media-body">
											All sellers have received monthly payouts
											<div class="text-muted font-size-sm">4 hours ago</div>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon">
												<i class="icon-checkmark3"></i>
											</a>
										</div>
										
										<div class="media-body">
											Ticket #43683 has been closed by <a href="#">Victoria Wilson</a>
											<div class="text-muted font-size-sm">Apr 28, 21:39</div>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
												<i class="icon-comment"></i>
											</a>
										</div>
										
										<div class="media-body">
											<a href="#">Beatrix Diaz</a> left a new feedback for Camo backpack
											<div class="text-muted font-size-sm">Mar 30, 05:46</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- /list of latest updates -->


						<!-- Card with image and button -->
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
										<i class="icon-user"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-comment"></i>
									</a>
								</div>
							</div>

							<div class="card-body text-center">
								<h6 class="font-weight-semibold">Monica Richardson</h6>
								<p class="text-muted">In on my jointure horrible margaret suitable he followed speedily</p>
								<a href="#" class="btn bg-indigo-400"><i class="icon-link mr-2"></i> Find out more</a>
							</div>
						</div>
						<!-- /card with image and button -->


						<!-- Messages widget -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Messages</h6>

								<div class="header-elements">
									<a href="#" class="text-default"><i class="icon-cog3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3 position-relative">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" jeight="36" alt="">
											<span class="badge bg-danger-400 badge-pill badge-float border-2 border-white">5</span>
										</div>

										<div class="media-body">
											<div class="d-flex justify-content-between">
												<div class="media-title"><a href="#">James Alexander</a></div>
												<span class="font-size-sm text-muted">14:58</span>
											</div>

											Who knows, maybe that would be the best thing for me...
										</div>
									</li>

									<li class="media">
										<div class="mr-3 position-relative">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" jeight="36" alt="">
											<span class="badge bg-danger-400 badge-pill badge-float border-2 border-white">4</span>
										</div>

										<div class="media-body">
											<div class="d-flex justify-content-between">
												<div class="media-title"><a href="#">Margo Baker</a></div>
												<span class="font-size-sm text-muted">12:16</span>
											</div>

											That was something he was unable to do because...
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" jeight="36" alt="">
										</div>

										<div class="media-body">
											<div class="d-flex justify-content-between">
												<div class="media-title"><a href="#">Jeremy Victorino</a></div>
												<span class="font-size-sm text-muted">22:48</span>
											</div>

											But that would be extremely strained and suspicious...
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" jeight="36" alt="">
										</div>

										<div class="media-body">
											<div class="d-flex justify-content-between">
												<div class="media-title"><a href="#">Beatrix Diaz</a></div>
												<span class="font-size-sm text-muted">Tue</span>
											</div>

											What a strenuous career it is that I've chosen...
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- /messages widget -->


						<!-- Simple thumbnail with image -->
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<a href="#">
									<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
									<span class="card-img-actions-overlay card-img-top">
										<i class="icon-play3 icon-2x"></i>
									</span>
								</a>
							</div>

							<div class="card-body">
								Delivered is to ye belonging enjoyment preferred. Astonished and acceptance men two discretion...
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Updated: Apr 25th</span>

								<ul class="list-inline mb-0">
									<li class="list-inline-item"><a href="#">Edit</a></li>
									<li class="list-inline-item"><a href="#">Delete</a></li>
								</ul>
							</div>
						</div>
						<!-- /simple thumbnail with image -->

					</div>

					<div class="col-md-6 col-xl-3">

						<!-- Dropzone -->
						<div class="mb-3">
							<form action="#" class="dropzone" id="dropzone_multiple"></form>
						</div>
						<!-- /dropzone -->


						<!-- Simple inline block with icon and button -->
						<div class="card card-body">
							<div class="media align-items-center align-items-md-start flex-column flex-md-row">
								<a href="#" class="text-teal mr-md-3 mb-3 mb-md-0">
									<i class="icon-question7 text-success-400 border-success-400 border-2 rounded-round p-2"></i>
								</a>

								<div class="media-body text-center text-md-left">
									<h6 class="media-title font-weight-semibold">Got a question request?</h6>
									Contact us directly anytime
								</div>

								<a href="#" class="btn bg-warning-400 ml-md-3 mt-3 mt-md-0">Contact</a>
							</div>
						</div>
						<!-- /simple inline block with icon and button -->


						<!-- Support ticket widget -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex flex-wrap justify-content-between mb-2">
									<span class="font-size-xs line-height-xs text-uppercase text-muted font-weight-semibold">Nov 12, 11:25am</span>
									<span class="font-size-xs line-height-xs text-uppercase text-success font-weight-semibold">Due in 12 days</span>
								</div>

								<h6 class="pt-1">
									<a href="#">Ticket #462 - Application design and development</a>
								</h6>

								<p class="mb-3">The constitutionally inventoried precariously. Pinched a well more moral chose goodness...</p>

								<div class="d-flex flex-wrap align-items-center">
									<a href="#" class="mr-1"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="36" height="36" alt=""></a>
									<a href="#" class="mr-1"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="36" height="36" alt=""></a>
									<a href="#" class="mr-1"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="36" height="36" alt=""></a>
									<a href="#" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2"><i class="icon-plus2"></i></a>
								</div>
							</div>
						</div>
						<!-- /support ticket widget -->


						<!-- Thumbnail with social icons -->
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
										<i class="icon-user"></i>
									</a>
									<a href="user_pages_profile" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

					    	<div class="card-body text-center">
					    		<h6 class="font-weight-semibold">Vanessa Aurelius</h6>
					    		<span class="d-block text-muted">In on my jointure horrible margaret suitable he followed speedily on videos</span>

								<ul class="list-inline list-inline-condensed mt-3 mb-0">
									<li class="list-inline-item"><a href="#" class="btn btn-outline bg-success btn-icon text-success border-success border-2 rounded-round">
										<i class="icon-google-drive"></i></a>
									</li>
									<li class="list-inline-item"><a href="#" class="btn btn-outline bg-info btn-icon text-info border-info border-2 rounded-round">
										<i class="icon-twitter"></i></a>
									</li>
									<li class="list-inline-item"><a href="#" class="btn btn-outline bg-grey-800 btn-icon text-grey-800 border-grey-800 border-2 rounded-round">
										<i class="icon-github"></i></a>
									</li>
								</ul>
					    	</div>
				    	</div>
						<!-- /thumbnail with social icons -->


						<!-- Share your thoughts -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Share your thoughts</h6>

								<div class="header-elements">
									<div class="list-icons">
				                    	<div class="list-icons-item dropdown">
					                    	<a href="#" class="list-icons-item" data-toggle="dropdown">
					                    		<i class="icon-arrow-down12"></i>
				                    		</a>

					                    	<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-popout"></i> Notifications</a>
												<a href="#" class="dropdown-item"><i class="icon-embed"></i> Embed video</a>
												<a href="#" class="dropdown-item"><i class="icon-pin-alt"></i> Show location</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-cog3"></i> Settings</a>
											</div>
				                    	</div>
			                    	</div>
								</div>
							</div>

							<div class="card-body">
								<form action="#">
			                    	<textarea name="enter-message" class="form-control mb-3" rows="3" cols="1" placeholder="Enter your message..."></textarea>

			                    	<div class="d-flex align-items-center">
			                    		<div class="list-icons list-icons-extended">
			                                <a href="#" class="list-icons-item" data-popup="tooltip" title="" data-container="body" data-original-title="Add photo"><i class="icon-images2"></i></a>
			                            	<a href="#" class="list-icons-item" data-popup="tooltip" title="" data-container="body" data-original-title="Add video"><i class="icon-film2"></i></a>
			                                <a href="#" class="list-icons-item" data-popup="tooltip" title="" data-container="body" data-original-title="Add event"><i class="icon-calendar2"></i></a>
			                    		</div>

			                    		<button type="button" class="btn bg-blue btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> Share</button>
			                    	</div>
								</form>
							</div>
						</div>
						<!-- /share your thoughts -->


						<!-- Inline user card -->
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="mb-0">William Brenson</h6>
									<span class="text-muted">Chief officer</span>
								</div>

								<div class="ml-3 align-self-center">
									<div class="list-icons">
				                    	<div class="list-icons-item dropdown">
					                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
					                    	<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
												<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
												<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
											</div>
				                    	</div>
			                    	</div>
								</div>
							</div>
						</div>
						<!-- /inline user card -->


						<!-- Icon and text -->
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#"><i class="icon-file-play text-warning-400 icon-2x mt-1"></i></a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold"><a href="#" class="text-default">Nutria and rewound</a></h6>
									Strove the darn hey as far oh alas and yikes and gosh knitted this slept via gerbil baneful
								</div>
							</div>
						</div>
						<!-- /icon and text -->


						<!-- My tasks -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">My Tasks</h6>

								<div class="header-elements">
									<span class="badge bg-indigo-400">43 new</span>
								</div>
							</div>

							<div class="card-body">
								<ul class="media-list mb-3">
									<li class="media">
										<div class="mr-3">
											<input type="checkbox" class="form-input-styled" id="task1" checked data-fouc>
										</div>

										<div class="media-body">
											<h6 class="media-title">
												<label for="task1" class="font-weight-semibold cursor-pointer mb-0">Resplendent much during</label>
											</h6>

											Urchin that understood yikes special ladybug that
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<input type="checkbox" class="form-input-styled" id="task2" data-fouc>
										</div>

										<div class="media-body">
											<h6 class="media-title">
												<label for="task2" class="font-weight-semibold cursor-pointer mb-0">Insect far hound</label>
											</h6>
											
											Hey where more that much meanly shivered salamander
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<input type="checkbox" class="form-input-styled" id="task3" data-fouc>
										</div>

										<div class="media-body">
											<h6 class="media-title">
												<label for="task3" class="font-weight-semibold cursor-pointer mb-0">The him father parish</label>
											</h6>

											Reran sincere said monkey one slapped jeepers
										</div>
									</li>

									<li class="media">
										<div class="media-body text-center">
											<a href="#" class="text-muted">View completed tasks (16)</a>
										</div>
									</li>
								</ul>

		                    	<textarea name="enter-message" class="form-control mb-3" rows="1" cols="1" placeholder="New task..."></textarea>

		                    	<div class="d-flex align-items-center">
		                    		<div class="list-icons list-icons-extended">
		                                <a href="#" class="list-icons-item"><i class="icon-mic2"></i></a>
		                            	<a href="#" class="list-icons-item"><i class="icon-file-picture"></i></a>
		                                <a href="#" class="list-icons-item"><i class="icon-file-plus"></i></a>
		                    		</div>

		                    		<button type="button" class="btn bg-pink-400 ml-auto">Create task</button>
		                    	</div>
							</div>
						</div>
						<!-- /my tasks -->


						<!-- Application status -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">App Status</h6>

								<div class="header-elements">
									<div><span class="badge badge-mark border-success mr-2"></span> Operational</div>
								</div>
							</div>

							<div class="card-body">
						        <ul class="list-unstyled mb-0">
						            <li class="mb-3">
						                <div class="d-flex align-items-center mb-1">CPU usage <span class="text-muted ml-auto">50%</span></div>
										<div class="progress" style="height: 0.375rem;">
											<div class="progress-bar bg-info" style="width: 50%">
												<span class="sr-only">50% Complete</span>
											</div>
										</div>
						            </li>

						            <li class="mb-3">
						                <div class="d-flex align-items-center mb-1">RAM usage <span class="text-muted ml-auto">70%</span></div>
										<div class="progress" style="height: 0.375rem;">
											<div class="progress-bar bg-danger" style="width: 70%">
												<span class="sr-only">70% Complete</span>
											</div>
										</div>
						            </li>

						            <li class="mb-3">
						                <div class="d-flex align-items-center mb-1">Disc space <span class="text-muted ml-auto">80%</span></div>
										<div class="progress" style="height: 0.375rem;">
											<div class="progress-bar bg-success" style="width: 80%">
												<span class="sr-only">80% Complete</span>
											</div>
										</div>
						            </li>

						            <li>
						                <div class="d-flex align-items-center mb-1">Bandwidth <span class="text-muted ml-auto">60%</span></div>
										<div class="progress" style="height: 0.375rem;">
											<div class="progress-bar bg-primary" style="width: 60%">
												<span class="sr-only">60% Complete</span>
											</div>
										</div>
						            </li>
						        </ul>
							</div>
						</div>
						<!-- /application status -->


						<!-- Simple stats with thumbnail -->
						<div class="card">
							<a href="#">
								<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid card-img-top" alt="">
							</a>

							<div class="card-body">
								<div class="row text-center">
									<div class="col-4">
										<h5 class="font-weight-semibold mb-0">2,345</h5>
										<span class="text-muted font-size-sm">today</span>
									</div>

									<div class="col-4">
										<h5 class="font-weight-semibold mb-0">3,568</h5>
										<span class="text-muted font-size-sm">this week</span>
									</div>

									<div class="col-4">
										<h5 class="font-weight-semibold mb-0">32,693</h5>
										<span class="text-muted font-size-sm">overall</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /simple stats with thumbnail -->


						<!-- Accordion widget -->
						<div id="accordion-group">
							<div class="card mb-0 rounded-bottom-0">
								<div class="card-header">
									<h6 class="card-title">
										<a data-toggle="collapse" class="text-default" href="#accordion-item-group1">Accordion Item #1</a>
									</h6>
								</div>

								<div id="accordion-item-group1" class="collapse show" data-parent="#accordion-group">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								</div>
							</div>

							<div class="card mb-0 rounded-0 border-y-0">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-group2">Accordion Item #2</a>
									</h6>
								</div>

								<div id="accordion-item-group2" class="collapse" data-parent="#accordion-group">
									<div class="card-body">
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>
								</div>
							</div>

							<div class="card rounded-top-0">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-group3">Accordion Item #3</a>
									</h6>
								</div>

								<div id="accordion-item-group3" class="collapse" data-parent="#accordion-group">
									<div class="card-body">
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>
						<!-- /accordion widget -->

					</div>

					<div class="col-md-6 col-xl-3">

						<!-- Thumbnail with feed -->
						<div class="card">
							<a href="#">
								<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid" alt="">
							</a>

							<div class="card-body">
								<div class="list-feed">
									<div class="list-feed-item border-warning-400">
										<div class="text-muted font-size-sm mb-1">12 minutes ago</div>
										<a href="#">David Linner</a> requested refund for a double card charge 
									</div>

									<div class="list-feed-item border-warning-400">
										<div class="text-muted font-size-sm mb-1">12 minutes ago</div>
										User <a href="#">Christopher Wallace</a> is awaiting for staff reply
									</div>

									<div class="list-feed-item border-warning-400">
										<div class="text-muted font-size-sm mb-1">12 minutes ago</div>
										Ticket <strong>#43683</strong> has been closed by <a href="#">Victoria Wilson</a>
									</div>

									<div class="list-feed-item border-warning-400">
										<div class="text-muted font-size-sm mb-1">12 minutes ago</div>
										All sellers have received payouts for December!
									</div>
								</div>
							</div>
						</div>
						<!-- /thumbnail with feed -->


						<!-- Widget with rounded icon -->
						<div class="card">
							<div class="card-body text-center">
							<i class="icon-book icon-2x text-success-400 border-success-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="card-title">Knowledge Base</h5>
								<p class="mb-3">Ouch found swore much dear conductively hid submissively hatchet vexed far</p>
								<a href="#" class="btn bg-success-400">Browse articles</a>
							</div>
						</div>
						<!-- /widget with rounded icon -->


						<!-- Testimonials -->
						<div class="card bg-pink-400 text-white text-center p-3" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
							<div>
								<a href="#" class="btn btn-lg btn-icon mb-3 mt-1 btn-outline text-white border-white bg-white rounded-round border-2">
									<i class="icon-quotes-right"></i>
								</a>
							</div>

							<blockquote class="blockquote mb-0">
								<p>"Delivered is to ye belonging enjoyment preferred. Astonished and acceptance men two discretion"</p>
								<footer class="blockquote-footer text-white">
									<span>
										Someone famous in <cite title="Source Title">Source Title</cite>
									</span>
								</footer>
							</blockquote>
						</div>
						<!-- /testimonials -->


						<!-- Widget with inline medium sized thumbnail -->
						<div class="card card-body">
							<div class="media flex-column flex-sm-row">
	        					<div class="mr-sm-3 mb-2 mb-sm-0">
									<div class="card-img-actions">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
											<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
										</a>
									</div>
								</div>

	        					<div class="media-body">
									<h6 class="media-title"><a href="#">Up unpacked friendly</a></h6>
		                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
		                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
		                    		</ul>
									The him father parish looked has sooner. Attachment frequently son
								</div>
							</div>
						</div>
						<!-- /widget with inline medium sized thumbnail -->


						<!-- Subscription form -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Subscribe</h6>

								<div class="header-elements">
									<form action="#">
										<div class="form-check form-check-inline form-check-right form-check-switchery form-check-switchery-sm">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-switchery" checked data-fouc>
												Auto updates
											</label>
										</div>
									</form>
								</div>
							</div>

							<form class="card-body" action="#">
								<div class="form-group form-group-feedback form-group-feedback-right">
									<input type="text" class="form-control" placeholder="Your email">
									<div class="form-control-feedback">
										<i class="icon-mention text-muted"></i>
									</div>
								</div>

								<div class="form-group">
									<select data-placeholder="Subscription plan" class="form-control-select2" data-fouc>
										<option value="updates">Website updates</option>
										<option value="discounts">Discount offers</option>
										<option value="catalog">Catalog</option>
										<option value="prints">Prints</option>
										<option value="promo">Promotions</option>
									</select>
								</div>

								<div class="form-group">
									<textarea class="form-control" cols="3" rows="3" placeholder="Your message"></textarea>
								</div>

								<div class="d-flex align-items-center">
		                    		<div class="form-check mb-0">
										<label class="form-check-label">
											<input type="checkbox" class="form-input-styled" checked data-fouc>
											Accept terms
										</label>
									</div>

		                    		<button type="button" class="btn bg-blue ml-auto">Subscribe</button>
		                    	</div>
							</form>
						</div>
						<!-- /subscription form -->


						<!-- Tabs widget -->
						<div class="card">
							<ul class="nav nav-tabs nav-tabs-bottom nav-justified mb-0">
								<li class="nav-item"><a href="#tab-desc" class="nav-link" data-toggle="tab">Overview</a></li>
								<li class="nav-item"><a href="#tab-spec" class="nav-link" data-toggle="tab">Specs</a></li>
								<li class="nav-item"><a href="#tab-shipping" class="nav-link" data-toggle="tab">Shipping</a></li>
							</ul>

							<div class="tab-content card-body border-top-0 rounded-top-0 mb-0">
								<div class="tab-pane fade show active" id="tab-desc">
									Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
								</div>

								<div class="tab-pane fade" id="tab-spec">
									Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
								</div>

								<div class="tab-pane fade" id="tab-shipping">
									DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
								</div>
							</div>
						</div>
						<!-- /tabs widget -->


						<!-- User card with thumb and social icons at the bottom -->
						<div class="card">
							<div class="card-body text-center">
								<div class="card-img-actions d-inline-block mb-3">
									<img class="img-fluid rounded-circle" src="../../../../global_assets/images/placeholders/placeholder.jpg" width="170" height="170" alt="">
									<div class="card-img-actions-overlay card-img rounded-circle">
										<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
											<i class="icon-plus3"></i>
										</a>
										<a href="user_pages_profile" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>

					    		<h6 class="font-weight-semibold mb-0">Nathan Jacobson</h6>
					    		<span class="d-block text-muted">Lead UX designer</span>
					    	</div>

					    	<div class="card-footer d-flex justify-content-around text-center p-0">
		                    	<a href="#" class="list-icons-item flex-fill p-2" data-popup="tooltip" data-container="body" title="Google Drive">
		                    		<i class="icon-google-drive top-0"></i>
	                    		</a>
		                    	<a href="#" class="list-icons-item flex-fill p-2" data-popup="tooltip" data-container="body" title="Twitter">
		                    		<i class="icon-twitter top-0"></i>
	                    		</a>
		                    	<a href="#" class="list-icons-item flex-fill p-2" data-popup="tooltip" data-container="body" title="Github">
		                    		<i class="icon-github top-0"></i>
	                    		</a>
		                    	<a href="#" class="list-icons-item flex-fill p-2" data-popup="tooltip" data-container="body" title="Dribbble">
		                    		<i class="icon-dribbble top-0"></i>
	                    		</a>
							</div>
				    	</div>
						<!-- /user card with thumb and social icons at the bottom -->


						<!-- Thumbnail with linked title -->
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<h6 class="font-weight-semibold mr-2"><a href="#" class="text-default">So come must</a></h6>
								<span>Delivered is to ye belonging enjoyment preferred. Astonished and acceptance men two discretion...</span>
							</div>
						</div>
						<!-- /thumbnail with linked title -->


						<!-- List of files -->
						<div class="card">
							<div class="card-header bg-transparent header-elements-inline">
								<h6 class="card-title font-weight-semibold">
									<i class="icon-folder6 mr-2"></i>
									Downloaded files
								</h6>

								<div class="header-elements">
									<span class="text-muted">(93)</span>
								</div>
							</div>

							<div class="list-group list-group-flush">
								<a href="#" class="list-group-item list-group-item-action">
									<i class="icon-file-pdf mr-3"></i>
									Hello_exotic_staunch.pdf <span class="badge bg-success-400 ml-auto">New</span>
								</a>

								<a href="#" class="list-group-item list-group-item-action">
									<i class="icon-file-word mr-3"></i>
									That_well_ecstatically.docx
								</a>

								<a href="#" class="list-group-item list-group-item-action">
									<i class="icon-file-excel mr-3"></i>
									Shared_coast_concurrent.csv
									<span class="badge bg-slate ml-auto">Draft</span>
								</a>

								<a href="#" class="list-group-item list-group-item-action">
									<i class="icon-file-word mr-3"></i>
									Into_intrepid_belated.docx
								</a>

								<a href="#" class="list-group-item list-group-item-action">
									<i class="icon-arrow-right22 mr-3"></i>
									Show all files (93)
								</a>
							</div>
						</div>
						<!-- /list of files -->


						<!-- Simple card with a list and button -->
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">
									<a href="#" class="text-default">
										<i class="icon-statistics mr-2"></i>
										Data Visualization
									</a>
								</h5>

								<p class="mb-3">The constitutionally inventoried precariously. Pinched a well more moral chose goodness...</p>

								<ul class="list list-unstyled mb-0">
									<li>
										<i class="icon-checkmark-circle text-success mr-2"></i>
										But that would be extremely strained
									</li>
									<li>
										<i class="icon-checkmark-circle text-success mr-2"></i>
										Who knows, maybe that would be the best
									</li>
									<li>
										<i class="icon-checkmark-circle text-success mr-2"></i>
										That was something he was unable to do
									</li>
									<li>
										<i class="icon-checkmark-circle text-success mr-2"></i>
										Way extensive and dejection get delivered
									</li>
								</ul>
							</div>

							<div class="card-footer text-center">
								<a href="#" class="btn bg-pink-400">
									<i class="icon-bubbles8 mr-2"></i>
									Request demo
								</a>
							</div>
						</div>
						<!-- /simple card with a list and button -->

					</div>

					<div class="col-md-6 col-xl-3">

						<!-- Seamless button group -->
						<div class="mb-3">
							<div class="row row-tile no-gutters">
								<div class="col-6">
									<button type="button" class="btn bg-white btn-block btn-float m-0">
										<i class="icon-github4 icon-2x"></i>
										<span>Github</span>
									</button>

									<button type="button" class="btn bg-white btn-block btn-float m-0">
										<i class="icon-dropbox text-blue-400 icon-2x"></i>
										<span>Dropbox</span>
									</button>
								</div>
								
								<div class="col-6">
									<button type="button" class="btn bg-white btn-block btn-float m-0">
										<i class="icon-dribbble3 text-pink-400 icon-2x"></i>
										<span>Dribbble</span>
									</button>

									<button type="button" class="btn bg-white btn-block btn-float m-0">
										<i class="icon-google-drive text-success-400 icon-2x"></i>
										<span>Google Drive</span>
									</button>
								</div>
							</div>
						</div>
						<!-- /seamless button group -->


						<!-- Widget with centered text and colored icon -->
						<div class="card">
							<div class="card-body text-center">
								<i class="icon-html5 icon-3x text-warning mt-1 mb-3"></i>
								<h6 class="font-weight-semibold">Knowledge Base</h6>
								<p class="mb-3">Inanimately alongside candidly much and jeez conductively hid submissively hatchet</p>
								<a href="#">Read more &rarr;</a>
							</div>
						</div>
						<!-- /widget with centered text and colored icon -->


						<!-- Colored info widget -->
						<div class="card card-body bg-pink-400" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png);">
							<div class="media">
								<div class="mr-3 align-self-center">
									<i class="icon-wave icon-2x"></i>
								</div>

								<div class="media-body text-right">
									<h6 class="media-title font-weight-semibold">Search Engine Optimization</h6>
									<span class="opacity-75">Grow visibility in organic search results</span>
								</div>
							</div>
						</div>
						<!-- /colored info widget -->


						<!-- Chat widget -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Chatting with James</h6>
							</div>

							<div class="card-body">
								<ul class="media-list media-chat media-chat-scrollable mb-3">
									<li class="media media-chat-item-reverse">
										<div class="media-body">
											<div class="media-chat-item">Satisfactorily strenuously while sleazily</div>
											<div class="font-size-sm text-muted mt-2">2 hours ago</div>
										</div>

										<div class="ml-3">
											<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-chat-item">Grunted smirked and grew.</div>
											<div class="font-size-sm text-muted mt-2">13 minutes ago</div>
										</div>
									</li>

									<li class="media media-chat-item-reverse">
										<div class="media-body">
											<div class="media-chat-item"><i class="icon-menu"></i></div>
										</div>

										<div class="ml-3">
											<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>
									</li>
								</ul>

		                    	<textarea name="enter-message" class="form-control mb-3" rows="3" cols="1" placeholder="Enter your message..."></textarea>

		                    	<div class="d-flex align-items-center">
		                    		<div class="list-icons list-icons-extended">
		                                <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send photo"><i class="icon-file-picture"></i></a>
		                            	<a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send video"><i class="icon-file-video"></i></a>
		                                <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send file"><i class="icon-file-plus"></i></a>
		                    		</div>

		                    		<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> Send</button>
		                    	</div>
							</div>
						</div>
						<!-- /chat widget -->


						<!-- Thumbnail with comments and form -->
						<div class="card">
							<div class="card-img-actions">
								<a href="#">
									<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
									<span class="card-img-actions-overlay card-img-top">
										<i class="icon-plus3 icon-2x"></i>
									</span>
								</a>
							</div>

							<div class="card-body">
								<ul class="media-list mb-3">
									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-title font-weight-semibold"><a href="#">Eugene Kopyov</a></div>
											Delivered is to ye belonging enjoyment preferred. Astonished and acceptance men...
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-title font-weight-semibold"><a href="#">Amanda Baker</a></div>
											Delivered is to ye belonging enjoyment preferred. Astonished and acceptance men...
										</div>
									</li>
								</ul>

		                    	<textarea name="enter-message" class="form-control mb-3" rows="2" cols="1" placeholder="Add comment"></textarea>

								<div class="d-flex align-items-center">
		                    		<div class="list-icons list-icons-extended">
		                                <a href="#" class="list-icons-item"><i class="icon-mic2"></i></a>
		                            	<a href="#" class="list-icons-item"><i class="icon-file-picture"></i></a>
		                                <a href="#" class="list-icons-item"><i class="icon-file-plus"></i></a>
		                    		</div>

		                    		<button type="button" class="btn bg-blue btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> Submit</button>
		                    	</div>
							</div>
						</div>
						<!-- /thumbnail with comments and form -->


						<!-- Upload file widget -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Upload image</h6>

								<div class="header-elements">
									<div class="list-icons">
										<a href="#" class="list-icons-item"><i class="icon-gear"></i></a>
									</div>
			                	</div>
							</div>

							<div class="card-body">
								<input type="file" class="form-input-styled" data-fouc>
								<span class="form-text text-muted">Accepted formats: gif, png, jpg</span>
							</div>
						</div>
						<!-- /upload widget -->


						<!-- Login form -->
						<div class="card card-body">
							<div class="text-center mb-3">
								<a href="#" class="d-inline-block mt-1 mb-3">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle img-fluid" width="120" height="120" alt="">
								</a>

								<h5 class="mb-0">Login to your account</h5>
								<div class="text-muted">Enter your credentials below</div>
							</div>

							<form action="index">
								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control" placeholder="Username">
									<div class="form-control-feedback">
										<i class="icon-user text-muted"></i>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="password" class="form-control" placeholder="Password">
									<div class="form-control-feedback">
										<i class="icon-lock2 text-muted"></i>
									</div>
								</div>

								<div class="d-flex align-items-center">
		                    		<a href="login_password_recover">Forgot password?</a>

		                    		<button type="submit" class="btn btn-primary ml-auto">Sign in <i class="icon-user-plus ml-2"></i></button>
		                    	</div>
							</form>
						</div>
						<!-- /login form -->


						<!-- Simple info widget with icon -->
						<div class="card card-body">
							<div class="media">
								<div class="media-body">
									<h6 class="media-title font-weight-semibold">Mortgage and private loan</h6>
									<span class="text-muted">Standard rate is up to 4.5%</span>
								</div>

								<div class="ml-3 align-self-center">
									<i class="icon-home2 icon-2x text-purple-300"></i>
								</div>
							</div>
						</div>
						<!-- /simplw info widget with icon -->


						<!-- Navigation widget -->
						<div class="card">
							<div class="card-header header-elements-inline pb-0">
								<h6 class="card-title">Navigation</h6>

								<div class="header-elements">
									<div class="list-icons">
										<a href="#" class="list-icons-item"><i class="icon-wrench3"></i></a>
									</div>
			                	</div>
							</div>

							<div class="list-group list-group-flush">
								<a href="#" class="list-group-item list-group-item-action">
									<i class="icon-user mr-3"></i>
									My profile
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									<i class="icon-cash3 mr-3"></i>
									Balance
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									<i class="icon-tree7 mr-3"></i>
									Connections
									<span class="badge bg-danger badge-pill ml-auto">29</span>
								</a>
								<div class="list-group-item list-group-divider"></div>
								<a href="#" class="list-group-item list-group-item-action">
									<i class="icon-calendar3 mr-3"></i>
									Events
									<span class="badge bg-teal-400 badge-pill ml-auto">48</span>
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									<i class="icon-cog3 mr-3"></i>
									Account settings
								</a>
							</div>
						</div>
						<!-- /navigation widget -->


						<!-- Simple text stats with icons -->
						<div class="card card-body">
							<div class="row text-center">
								<div class="col-4">
									<p><i class="icon-users2 icon-2x d-inline-block text-info"></i></p>
									<h5 class="font-weight-semibold mb-0">2,345</h5>
									<span class="text-muted font-size-sm">users</span>
								</div>

								<div class="col-4">
									<p><i class="icon-point-up icon-2x d-inline-block text-warning"></i></p>
									<h5 class="font-weight-semibold mb-0">3,568</h5>
									<span class="text-muted font-size-sm">clicks</span>
								</div>

								<div class="col-4">
									<p><i class="icon-cash3 icon-2x d-inline-block text-success"></i></p>
									<h5 class="font-weight-semibold mb-0">$9,693</h5>
									<span class="text-muted font-size-sm">revenue</span>
								</div>
							</div>
						</div>
						<!-- /simple text stats with icons -->


						<!-- Calendar widget -->
						<div class="card">
							<div class="form-control-datepicker border-0"></div>
						</div>
						<!-- /calendar widget -->

					</div>
				</div>
				<!-- /widgets list -->

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
