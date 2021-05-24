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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Search</span> - Users</h4>
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
							<a href="search_users" class="breadcrumb-item">Search</a>
							<span class="breadcrumb-item active">Users</span>
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


				<!-- Vertical cards view -->
				<div class="pt-2 mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Vertical cards view
					</h6>
					<span class="text-muted d-block">User cards with vertical stack of components</span>
				</div>

				<div class="row">
					<div class="col-xl-3 col-sm-6">
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

					    		<h6 class="font-weight-semibold mb-0">James Alexander</h6>
					    		<span class="d-block text-muted">Lead developer</span>

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>

					<div class="col-xl-3 col-sm-6">
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

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>

					<div class="col-xl-3 col-sm-6">
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

					    		<h6 class="font-weight-semibold mb-0">Margo Baker</h6>
					    		<span class="d-block text-muted">Sales manager</span>

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>

					<div class="col-xl-3 col-sm-6">
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

					    		<h6 class="font-weight-semibold mb-0">Barbara Walden</h6>
					    		<span class="d-block text-muted">SEO specialist</span>

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-sm-6">
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

					    		<h6 class="font-weight-semibold mb-0">Hanna Dorman</h6>
					    		<span class="d-block text-muted">UX/UI designer</span>

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>

					<div class="col-xl-3 col-sm-6">
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

					    		<h6 class="font-weight-semibold mb-0">Benjamin Loretti</h6>
					    		<span class="d-block text-muted">Network engineer</span>

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>

					<div class="col-xl-3 col-sm-6">
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

					    		<h6 class="font-weight-semibold mb-0">Vanessa Aurelius</h6>
					    		<span class="d-block text-muted">Front end guru</span>

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>

					<div class="col-xl-3 col-sm-6">
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

					    		<h6 class="font-weight-semibold mb-0">William Brenson</h6>
					    		<span class="d-block text-muted">Chief officer</span>

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-sm-6">
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

					    		<h6 class="font-weight-semibold mb-0">Lucy North</h6>
					    		<span class="d-block text-muted">PHP developer</span>

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>

					<div class="col-xl-3 col-sm-6">
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

					    		<h6 class="font-weight-semibold mb-0">Vicky Barna</h6>
					    		<span class="d-block text-muted">UI designer</span>

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>

					<div class="col-xl-3 col-sm-6">
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

					    		<h6 class="font-weight-semibold mb-0">Hugo Bills</h6>
					    		<span class="d-block text-muted">Sales manager</span>

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>

					<div class="col-xl-3 col-sm-6">
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

					    		<h6 class="font-weight-semibold mb-0">Tony Gurrano</h6>
					    		<span class="d-block text-muted">CEO and founder</span>

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>
				</div>
				<!-- /vertical cards view -->


				<!-- Horizontal cards view -->
				<div class="pt-2 mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Horizontal cards view
					</h6>
					<span class="text-muted d-block">User cards with horizontal components</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="mb-0">Hanna Dorman</h6>
									<span class="text-muted">UX/UI designer</span>
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
					</div>

					<div class="col-md-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="mb-0">Benjamin Loretti</h6>
									<span class="text-muted">Network engineer</span>
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
					</div>

					<div class="col-md-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="mb-0">Vanessa Aurelius</h6>
									<span class="text-muted">Front end guru</span>
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
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="mb-0">James Alexander</h6>
									<span class="text-muted">Lead developer</span>
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
					</div>

					<div class="col-md-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="mb-0">Nathan Jacobson</h6>
									<span class="text-muted">Lead UX designer</span>
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
					</div>

					<div class="col-md-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="mb-0">Margo Baker</h6>
									<span class="text-muted">Sales manager</span>
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
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="mb-0">Barbara Walden</h6>
									<span class="text-muted">SEO specialist</span>
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
					</div>

					<div class="col-md-4">
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
					</div>

					<div class="col-md-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="mb-0">Lucy North</h6>
									<span class="text-muted">PHP developer</span>
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
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="mb-0">Vicky Barna</h6>
									<span class="text-muted">UI designer</span>
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
					</div>

					<div class="col-md-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="mb-0">Hugo Bills</h6>
									<span class="text-muted">Sales manager</span>
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
					</div>

					<div class="col-md-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="mb-0">Tony Gurrano</h6>
									<span class="text-muted">CEO and founder</span>
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
					</div>
				</div>
				<!-- /horizontal cards view -->


				<!-- List view -->
				<div class="pt-2 mb-3">
					<h6 class="mb-0 font-weight-semibold">
						List view
					</h6>
					<span class="text-muted d-block">Single card with rows</span>
				</div>

				<div class="card">
					<div class="card-body">
						<ul class="media-list">
							<li class="media font-weight-semibold py-1">Team leaders</li>

							<li class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">James Alexander</div>
									<span class="text-muted">Development</span>
								</div>

								<div class="align-self-center ml-3">
									<div class="list-icons list-icons-extended">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Video" data-toggle="modal" data-trigger="hover" data-target="#video"><i class="icon-video-camera"></i></a>
			                    	</div>
								</div>
							</li>

							<li class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">Jeremy Victorino</div>
									<span class="text-muted">Finances</span>
								</div>

								<div class="align-self-center ml-3">
									<div class="list-icons list-icons-extended">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Video" data-toggle="modal" data-trigger="hover" data-target="#video"><i class="icon-video-camera"></i></a>
			                    	</div>
								</div>
							</li>

							<li class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">Margo Baker</div>
									<span class="text-muted">Marketing</span>
								</div>

								<div class="align-self-center ml-3">
									<div class="list-icons list-icons-extended">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Video" data-toggle="modal" data-trigger="hover" data-target="#video"><i class="icon-video-camera"></i></a>
			                    	</div>
								</div>
							</li>

							<li class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">Monica Smith</div>
									<span class="text-muted">Design</span>
								</div>

								<div class="align-self-center ml-3">
									<div class="list-icons list-icons-extended">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Video" data-toggle="modal" data-trigger="hover" data-target="#video"><i class="icon-video-camera"></i></a>
			                    	</div>
								</div>
							</li>

							<li class="media font-weight-semibold py-1">Office staff</li>

							<li class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">Bastian Miller</div>
									<span class="text-muted">Web dev</span>
								</div>

								<div class="align-self-center ml-3">
									<div class="list-icons list-icons-extended">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Video" data-toggle="modal" data-trigger="hover" data-target="#video"><i class="icon-video-camera"></i></a>
			                    	</div>
								</div>
							</li>

							<li class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">Jordana Mills</div>
									<span class="text-muted">Sales consultant</span>
								</div>

								<div class="align-self-center ml-3">
									<div class="list-icons list-icons-extended">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Video" data-toggle="modal" data-trigger="hover" data-target="#video"><i class="icon-video-camera"></i></a>
			                    	</div>
								</div>
							</li>

							<li class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">Buzz Brenson</div>
									<span class="text-muted">UX expert</span>
								</div>

								<div class="align-self-center ml-3">
									<div class="list-icons list-icons-extended">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Video" data-toggle="modal" data-trigger="hover" data-target="#video"><i class="icon-video-camera"></i></a>
			                    	</div>
								</div>
							</li>

							<li class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">Zachary Willson</div>
									<span class="text-muted">Illustrator</span>
								</div>

								<div class="align-self-center ml-3">
									<div class="list-icons list-icons-extended">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Video" data-toggle="modal" data-trigger="hover" data-target="#video"><i class="icon-video-camera"></i></a>
			                    	</div>
								</div>
							</li>

							<li class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">William Miles</div>
									<span class="text-muted">SEO expert</span>
								</div>

								<div class="align-self-center ml-3">
									<div class="list-icons list-icons-extended">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Video" data-toggle="modal" data-trigger="hover" data-target="#video"><i class="icon-video-camera"></i></a>
			                    	</div>
								</div>
							</li>

							<li class="media font-weight-semibold py-1">Partners</li>

							<li class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">Freddy Walden</div>
									<span class="text-muted">Microsoft</span>
								</div>

								<div class="align-self-center ml-3">
									<div class="list-icons list-icons-extended">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Video" data-toggle="modal" data-trigger="hover" data-target="#video"><i class="icon-video-camera"></i></a>
			                    	</div>
								</div>
							</li>

							<li class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">Dori Laperriere</div>
									<span class="text-muted">Google</span>
								</div>

								<div class="align-self-center ml-3">
									<div class="list-icons list-icons-extended">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Video" data-toggle="modal" data-trigger="hover" data-target="#video"><i class="icon-video-camera"></i></a>
			                    	</div>
								</div>
							</li>

							<li class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">Vanessa Aurelius</div>
									<span class="text-muted">Facebook</span>
								</div>

								<div class="align-self-center ml-3">
									<div class="list-icons list-icons-extended">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Call" data-toggle="modal" data-trigger="hover" data-target="#call"><i class="icon-phone2"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Chat" data-toggle="modal" data-trigger="hover" data-target="#chat"><i class="icon-comment"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Video" data-toggle="modal" data-trigger="hover" data-target="#video"><i class="icon-video-camera"></i></a>
			                    	</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- /list view -->


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
