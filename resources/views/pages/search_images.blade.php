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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Search</span> - Images</h4>
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
							<a href="search_images" class="breadcrumb-item">Search</a>
							<span class="breadcrumb-item active">Images</span>
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

				<!-- Search field -->
				<div class="card">
					<div class="card-body">
						<h5 class="mb-3">Website search results</h5>

						<form action="#">
							<div class="input-group mb-3">
								<div class="form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control form-control-lg" value="Limitless interface kit" placeholder="Search">
									<div class="form-control-feedback form-control-feedback-lg">
										<i class="icon-search4 text-muted"></i>
									</div>
								</div>

								<div class="input-group-append">
									<button type="submit" class="btn btn-primary btn-lg">Search</button>
								</div>
							</div>

							<div class="d-md-flex align-items-md-center flex-md-wrap text-center text-md-left">
								<ul class="list-inline list-inline-condensed mb-0">
									<li class="list-inline-item dropdown">
										<a href="#" class="btn btn-link text-default dropdown-toggle" data-toggle="dropdown">
											<i class="icon-stack2 mr-2"></i>
											All categories
										</a>

										<div class="dropdown-menu">
											<a href="#" class="dropdown-item"><i class="icon-question7"></i> Getting started</a>
											<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Registration</a>
											<a href="#" class="dropdown-item"><i class="icon-reading"></i> General info</a>
											<a href="#" class="dropdown-item"><i class="icon-gear"></i> Your settings</a>
											<a href="#" class="dropdown-item"><i class="icon-graduation"></i> Copyrights</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item"><i class="icon-mail-read"></i> Contacting authors</a>
										</div>
									</li>
									<li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-reload-alt mr-2"></i> Refine your search</a></li>
								</ul>

								<ul class="list-inline mb-0 ml-md-auto">
									<li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-make-group mr-2"></i> Browse articles</a></li>
									<li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-menu7 mr-2"></i> Advanced search</a></li>
								</ul>
							</div>
						</form>
					</div>
				</div>
				<!-- /search field -->


				<!-- Tabs -->
				<div class="nav-tabs-responsive mb-3">
					<ul class="nav nav-tabs nav-tabs-bottom flex-nowrap mb-0">
						<li class="nav-item"><a href="search_basic" class="nav-link"><i class="icon-display4 mr-2"></i> Website</a></li>
						<li class="nav-item"><a href="search_users" class="nav-link"><i class="icon-people mr-2"></i> Users</a></li>
						<li class="nav-item"><a href="search_images" class="nav-link"><i class="icon-image2 mr-2"></i> Images</a></li>
						<li class="nav-item"><a href="search_videos" class="nav-link"><i class="icon-file-play mr-2"></i> Videos</a></li>
						<li class="nav-item dropdown ml-md-auto">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-boundary="window">
								<i class="icon-cog3 mr-2"></i>
								Options
							</a>

							<div class="dropdown-menu dropdown-menu-right">
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item">Another action</a>
								<a href="#" class="dropdown-item">Something else</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">One more line</a>
							</div>
						</li>
					</ul>
				</div>
				<!-- /tabs -->


				<!-- Images grid -->
				<div class="text-muted font-size-sm mb-3">About 827,000 results (0.34 seconds)</div>

				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">For ostrich much</h6>
								Some various less crept gecko the jeepers dear forewent far the ouch far a incompetent
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">An so vulgar</h6>
								Delightful unreserved impossible few estimating men favourable see entreaties propriety
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Not rapturous</h6>
								He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">He it otherwise</h6>
								Chapter too parties its letters nor. Cheerful but whatever ladyship disposed judgment us
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Unfeeling agreeable</h6>
								Branched is on an ecstatic directly it. Put off continue you denoting returned juvenile
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">So come must</h6>
								Replied demands charmed do viewing ye colonel to so. Decisively inquietude he advantages
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Do on unpleasing</h6>
								Demesne far hearted suppose venture excited see had has. Dependent extremely delivered by
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Yet joy exquisite</h6>
								Bed one supposing breakfast day fulfilled off depending questions. Whatever boy exertion
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Behind lovers</h6>
								Building mr concerns servants in he outlived am breeding. He so lain good miss when sell
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Whole every miles</h6>
								How doubt yet again see son smart. While mirth large of on front. Ye he greater related yes
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Wished he entire</h6>
								Death weeks early had their and folly timed put. Hearted forbade on an village ye fifteen
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">He prevent request</h6>
								Instrument terminated of as astonished literature motionless admiration. The affection are
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Picture too and</h6>
								On merits on so valley indeed assure of. Has add particular boisterous uncommonly are match
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Ten difficult resembled</h6>
								Post no so what deal evil rent by real in. But her ready least set lived spite solid how men
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Same park bore</h6>
								She offices for highest and replied one venture pasture. Applauded no in newspaper allowance
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Warmth his law</h6>
								She offices for highest and replied venture pasture. Applauded discovery northward frequently
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Unwilling sportsmen</h6>
								Attention he extremity unwilling on otherwise. Conviction up partiality as delightful
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Attacks may set</h6>
								Left did fond drew fat head poor. So if he into shot half many long. China fully
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Missed he engage</h6>
								One the what walk then she. Demesne mention promise you justice arrived inquietude
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Still tried means</h6>
								Outweigh it families distance wandered ye an. Mr unsatiable literature connection
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Up is opinion</h6>
								Finished her are its honoured drawings nor. Pretty see mutual thrown all not
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Disposing commanded</h6>
								Several any had enjoyed shewing studied two. Up intention remainder sportsmen
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Be an as cordially</h6>
								Few again any alone style added abode ask. Nay projecting unpleasing boisterous
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions px-1 pt-1">
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
								<h6 class="font-weight-semibold">Northward affection</h6>
								Own six moments produce elderly pasture far arrival. Hold our year they ten upon
							</div>
						</div>
					</div>
				</div>
				<!-- /images grid -->


				<!-- Pagination -->
				<div class="d-flex justify-content-center pt-3 mb-3">
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
