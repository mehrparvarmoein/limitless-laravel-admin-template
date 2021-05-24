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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Content</span> - Card Layouts</h4>
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
							<a href="content_cards_layouts" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Card layouts</span>
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

				<!-- Cards in grid columns -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Card grid
					</h6>
					<span class="text-muted d-block">Render cards in grid columns</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">

							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">It prepare is ye nothing blushes up brought. Or as gravity pasture limited evening on. Wicket around beauty say she. Frankness resembled say not new smallness.</p>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Last updated 3 mins ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-half font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(12)</span>
								</span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">

							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Conveying or northward offending admitting perfectly my. Colonel gravity get thought fat smiling add but. Wonder twenty hunted and put income set desire expect.</p>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Last updated 12 mins ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(24)</span>
								</span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">

							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Or kind rest bred with am shed then. In raptures building an bringing be. Elderly is detract tedious assured private so to visited. Do travelling companions contrasted.</p>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Last updated 5 hours ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-empty3 font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(63)</span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<!-- /cards in grid columns -->


				<!-- Card group -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card group
					</h6>
					<span class="text-muted d-block">Single element with equal size columns</span>
				</div>

				<div class="card-group mb-sm-3">
					<div class="card shadow-0">
						<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">

						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>

						<div class="card-footer d-flex justify-content-between">
							<span class="text-muted">Last updated 3 mins ago</span>
							<span>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-half font-size-base text-warning-300"></i>
								<span class="text-muted ml-2">(12)</span>
							</span>
						</div>
					</div>

					<div class="card shadow-0">
						<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">

						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
						</div>

						<div class="card-footer d-flex justify-content-between">
							<span class="text-muted">Last updated 3 mins ago</span>
							<span>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<span class="text-muted ml-2">(24)</span>
							</span>
						</div>
					</div>

					<div class="card shadow-0">
						<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">

						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
						</div>

						<div class="card-footer d-flex justify-content-between">
							<span class="text-muted">Last updated 3 mins ago</span>
							<span>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-empty3 font-size-base text-warning-300"></i>
								<span class="text-muted ml-2">(63)</span>
							</span>
						</div>
					</div>
				</div>
				<!-- /card group -->


				<!-- Seamless card group -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Seamless card group
					</h6>
					<span class="text-muted d-block">Card group without borders</span>
				</div>

				<div class="card-group mb-sm-3">
					<div class="card shadow-0 border-0">
						<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">

						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>

						<div class="card-footer d-flex justify-content-between">
							<span class="text-muted">Last updated 3 mins ago</span>
							<span>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-half font-size-base text-warning-300"></i>
								<span class="text-muted ml-2">(12)</span>
							</span>
						</div>
					</div>

					<div class="card shadow-0 border-0">
						<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">

						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
						</div>

						<div class="card-footer d-flex justify-content-between">
							<span class="text-muted">Last updated 3 mins ago</span>
							<span>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<span class="text-muted ml-2">(24)</span>
							</span>
						</div>
					</div>

					<div class="card shadow-0 border-0">
						<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">

						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
						</div>

						<div class="card-footer d-flex justify-content-between">
							<span class="text-muted">Last updated 3 mins ago</span>
							<span>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-empty3 font-size-base text-warning-300"></i>
								<span class="text-muted ml-2">(63)</span>
							</span>
						</div>
					</div>
				</div>
				<!-- /seamless card group -->


				<!-- Card deck -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card deck
					</h6>
					<span class="text-muted d-block">Cards with equal width and height</span>
				</div>

				<div class="card-deck mb-sm-3">
					<div class="card">
						<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">

						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						</div>

						<div class="card-footer d-flex justify-content-between">
							<span class="text-muted">Last updated 3 mins ago</span>
							<span>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-half font-size-base text-warning-300"></i>
								<span class="text-muted ml-2">(12)</span>
							</span>
						</div>
					</div>

					<div class="card">
						<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">

						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
						</div>

						<div class="card-footer d-flex justify-content-between">
							<span class="text-muted">Last updated 3 mins ago</span>
							<span>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<span class="text-muted ml-2">(24)</span>
							</span>
						</div>
					</div>

					<div class="card">
						<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">

						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
						</div>

						<div class="card-footer d-flex justify-content-between">
							<span class="text-muted">Last updated 3 mins ago</span>
							<span>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-full2 font-size-base text-warning-300"></i>
								<i class="icon-star-empty3 font-size-base text-warning-300"></i>
								<span class="text-muted ml-2">(63)</span>
							</span>
						</div>
					</div>
				</div>
				<!-- /card deck -->


				<!-- Card columns -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card columns
					</h6>
					<span class="text-muted d-block">Cards in Masonry-like layout</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body bg-blue text-center" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
							<div class="mb-3">
								<h5 class="font-weight-semibold mb-0 mt-1">
									Victoria Davidson
								</h5>

								<span class="d-block">Head of UX</span>
							</div>

							<a href="#" class="d-inline-block mb-3">
								<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="110" height="110" alt="">
							</a>

							<ul class="list-inline mb-0">
								<li class="list-inline-item"><a href="#" class="btn btn-outline btn-icon text-white btn-lg border-white rounded-round">
									<i class="icon-phone"></i></a>
								</li>
								<li class="list-inline-item"><a href="#" class="btn btn-outline btn-icon text-white btn-lg border-white rounded-round">
									<i class="icon-bubbles4"></i></a>
								</li>
								<li class="list-inline-item"><a href="#" class="btn btn-outline btn-icon text-white btn-lg border-white rounded-round">
									<i class="icon-envelop4"></i></a>
								</li>
							</ul>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="d-flex flex-wrap justify-content-between mb-2">
									<span class="font-size-xs line-height-xs text-uppercase text-muted font-weight-semibold">Nov 12, 11:25am</span>
									<span class="font-size-xs line-height-xs text-uppercase text-success font-weight-semibold">Due in 12 days</span>
								</div>

								<h6 class="pt-1">
									<a href="#">Ticket #462 - Application design and development</a>
								</h6>

								<p class="mb-3">Contrasted unreserved as mr particular collecting it everything as indulgence. Seems ask meant merry could put. Age old begin had boy noisy.</p>

								<div class="d-flex flex-wrap align-items-center">
									<a href="#" class="mr-1"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="36" height="36" alt=""></a>
									<a href="#" class="mr-1"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="36" height="36" alt=""></a>
									<a href="#" class="mr-1"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="36" height="36" alt=""></a>
									<a href="#" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2"><i class="icon-plus2"></i></a>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
										</a>
									</div>

									<div class="media-body">
										<a href="#" class="font-weight-semibold text-default d-block">Eugene Kopyov</a>
										<span class="text-muted">Amsterdam, Netherlands</span>
									</div>
								</div>
							</div>

							<img class="card-img" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="Card image cap">

							<div class="card-body">
								<h5 class="card-title">Card title that wraps to a new line</h5>
								<p class="card-text">By impossible of in difficulty discovered celebrated ye. Justice joy manners boy met resolve produce. Bed head loud next plan.</p>
							</div>

							<div class="card-footer d-flex justify-content-between bg-transparent border-top-0 pt-0">
								<span class="text-muted">Last updated 3 mins ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-half font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(12)</span>
								</span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<img class="card-img" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="Card image cap">
						</div>

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
					</div>

					<div class="col-md-4">
						<div class="card card-body">
							<div class="media mb-3">
								<div class="media-body">
									<h6 class="mb-0 font-weight-semibold">Server maintenance</h6>
									<span class="text-muted">Until 1st of June</span>
								</div>

								<div class="ml-3 align-self-center">
									<i class="icon-cog3 icon-2x text-success"></i>
								</div>
							</div>

							<div class="progress mb-2" style="height: 0.125rem;">
								<div class="progress-bar bg-success" style="width: 67%">
									<span class="sr-only">67% Complete</span>
								</div>
							</div>
							<div>
				                <span class="float-right">67%</span>
				                Re-indexing
			                </div>
						</div>

						<div class="card">
							<img class="card-img-top" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="Card image cap">

							<div class="card-footer d-flex justify-content-between border-0 pb-0 bg-transparent">
								<ul class="list-inline mb-0 mr-2">
									<li class="list-inline-item">
										<a href="#" class="text-pink-400"><i class="icon-heart5"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="#" class="text-default"><i class="icon-bubble2"></i></a>
									</li>
								</ul>

								<span class="text-muted">2 hours ago</span>
							</div>

							<div class="card-body">
								<p class="card-text">Debating all she mistaken indulged believed provided declared. He many kept on draw lain song as same. Whether at dearest certain spirits is entered in to. Rich fine bred real use.</p>
								<p class="card-text">
									<a href="#" class="mr-1">#limitless</a>
									<a href="#" class="mr-1">#template</a>
									<a href="#" class="mr-1">#is</a>
									<a href="#" class="mr-1">#awesome</a>
								</p>
							</div>

							<div class="card-footer">
								<div class="input-group">
									<input type="text" class="form-control border-right-0" placeholder="Add comment...">

									<span class="input-group-append">
										<button class="btn bg-blue" type="button"><i class="icon-paperplane"></i></button>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /card columns -->

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
