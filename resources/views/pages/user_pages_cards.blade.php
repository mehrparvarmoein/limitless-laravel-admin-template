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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">User Pages</span> - Cards</h4>
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
							<a href="user_pages_cards" class="breadcrumb-item">User pages</a>
							<span class="breadcrumb-item active">Cards</span>
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

				<!-- Square thumbs -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Square thumbs
					</h6>
					<span class="text-muted d-block">Basic style using <code>card</code> component</span>
				</div>

				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions">
								<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img-top">
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
										<i class="icon-plus3"></i>
									</a>
									<a href="user_pages_profile" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

					    	<div class="card-body text-center">
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
							<div class="card-img-actions">
								<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img-top">
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
										<i class="icon-plus3"></i>
									</a>
									<a href="user_pages_profile" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

					    	<div class="card-body text-center">
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
							<div class="card-img-actions">
								<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img-top">
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
										<i class="icon-plus3"></i>
									</a>
									<a href="user_pages_profile" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

					    	<div class="card-body text-center">
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
							<div class="card-img-actions">
								<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img-top">
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
										<i class="icon-plus3"></i>
									</a>
									<a href="user_pages_profile" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

					    	<div class="card-body text-center">
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
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
										<i class="icon-plus3"></i>
									</a>
									<a href="user_pages_profile" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

					    	<div class="card-body text-center">
					    		<h6 class="font-weight-semibold mb-0">Hanna Dorman</h6>
					    		<span class="d-block text-muted">UX/UI designer</span>

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
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
										<i class="icon-plus3"></i>
									</a>
									<a href="user_pages_profile" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

					    	<div class="card-body text-center">
					    		<h6 class="font-weight-semibold mb-0">Benjamin Loretti</h6>
					    		<span class="d-block text-muted">Network engineer</span>

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
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
										<i class="icon-plus3"></i>
									</a>
									<a href="user_pages_profile" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

					    	<div class="card-body text-center">
					    		<h6 class="font-weight-semibold mb-0">Vanessa Aurelius</h6>
					    		<span class="d-block text-muted">Front end guru</span>

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
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
										<i class="icon-plus3"></i>
									</a>
									<a href="user_pages_profile" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

					    	<div class="card-body text-center">
					    		<h6 class="font-weight-semibold mb-0">William Brenson</h6>
					    		<span class="d-block text-muted">Chief officer</span>

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
					</div>
				</div>
				<!-- /square thumbs -->


				<!-- Rounded thumbs -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Rounded thumbs
					</h6>
					<span class="text-muted d-block">Responsive rounded thumbs</span>
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
				    	<div class="card card-body text-center">
							<div class="mb-3">
								<h6 class="font-weight-semibold mb-0 mt-1">Hanna Dorman</h6>
								<span class="d-block text-muted">UX/UI designer</span>
							</div>

							<a href="#" class="d-inline-block mb-3">
								<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="150" height="150" alt="">
							</a>

							<ul class="list-inline list-inline-condensed mb-0">
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

					<div class="col-xl-3 col-sm-6">
				    	<div class="card card-body text-center">
							<div class="mb-3">
								<h6 class="font-weight-semibold mb-0 mt-1">Benjamin Loretti</h6>
								<span class="d-block text-muted">Network engineer</span>
							</div>

							<a href="#" class="d-inline-block mb-3">
								<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="150" height="150" alt="">
							</a>

							<ul class="list-inline list-inline-condensed mb-0">
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

					<div class="col-xl-3 col-sm-6">
				    	<div class="card card-body text-center">
							<div class="mb-3">
								<h6 class="font-weight-semibold mb-0 mt-1">Vanessa Aurelius</h6>
								<span class="d-block text-muted">Front end guru</span>
							</div>

							<a href="#" class="d-inline-block mb-3">
								<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="150" height="150" alt="">
							</a>

							<ul class="list-inline list-inline-condensed mb-0">
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

					<div class="col-xl-3 col-sm-6">
				    	<div class="card card-body text-center">
							<div class="mb-3">
								<h6 class="font-weight-semibold mb-0 mt-1">William Brenson</h6>
								<span class="d-block text-muted">Chief officer</span>
							</div>

							<a href="#" class="d-inline-block mb-3">
								<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="150" height="150" alt="">
							</a>

							<ul class="list-inline list-inline-condensed mb-0">
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
				</div>

				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card bg-slate-600" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
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
					    		<span class="d-block opacity-75">Lead developer</span>

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card bg-pink-400" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
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
					    		<span class="d-block opacity-75">Lead UX designer</span>

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card bg-indigo-400" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
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
					    		<span class="d-block opacity-75">Sales manager</span>

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>

					<div class="col-xl-3 col-sm-6">
						<div class="card bg-teal-400" style="background-image: url(../../../../global_assets/images/backgrounds/panel_bg.png); background-size: contain;">
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
					    		<span class="d-block opacity-75">SEO specialist</span>

				    			<div class="list-icons list-icons-extended mt-3">
			                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
			                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
			                    	<a href="#" class="list-icons-item text-white" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>
				</div>
				<!-- /rounded thumbs-->


				<!-- Horizontal cards -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Horizontal cards
					</h6>
					<span class="text-muted d-block">User cards in horizontal direction</span>
				</div>

				<div class="row">
					<div class="col-xl-3 col-md-6">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="38" height="38" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="font-weight-semibold">James Alexander</div>
									<span class="text-muted">Lead developer</span>
								</div>

								<div class="ml-3 align-self-center">
									<span class="badge badge-mark bg-success border-success"></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="38" height="38" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">Nathan Jacobson</div>
									<span class="text-muted">Lead UX designer</span>
								</div>

								<div class="ml-3 align-self-center">
									<span class="badge badge-mark bg-warning border-warning"></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="38" height="38" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">Margo Baker</div>
									<span class="text-muted">Sales manager</span>
								</div>

								<div class="ml-3 align-self-center">
									<span class="badge badge-mark bg-grey-400 border-grey-400"></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="38" height="38" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-title font-weight-semibold">Barbara Walden</div>
									<span class="text-muted">SEO specialist</span>
								</div>

								<div class="ml-3 align-self-center">
									<span class="badge badge-mark bg-primary border-primary"></span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-md-6">
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

					<div class="col-xl-3 col-md-6">
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

					<div class="col-xl-3 col-md-6">
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

					<div class="col-xl-3 col-md-6">
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
				</div>

				<div class="row">
					<div class="col-xl-3 col-md-6">
						<div class="card card-body">
							<div class="media">
								<div class="media-body">
									<div class="media-title font-weight-semibold">James Alexander</div>
									<span class="text-muted">Lead developer</span>
								</div>

								<div class="ml-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6">
						<div class="card card-body">
							<div class="media">
								<div class="media-body">
									<div class="media-title font-weight-semibold">Nathan Jacobson</div>
									<span class="text-muted">Lead UX designer</span>
								</div>

								<div class="ml-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6">
						<div class="card card-body">
							<div class="media">
								<div class="media-body">
									<div class="media-title font-weight-semibold">Margo Baker</div>
									<span class="text-muted">Sales manager</span>
								</div>

								<div class="ml-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6">
						<div class="card card-body">
							<div class="media">
								<div class="media-body">
									<div class="media-title font-weight-semibold">Barbara Walden</div>
									<span class="text-muted">SEO specialist</span>
								</div>

								<div class="ml-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-md-6">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title">Hanna Dorman</h6>
					    			<div class="list-icons">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
			                    	</div>
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

					<div class="col-xl-3 col-md-6">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title">Benjamin Loretti</h6>
					    			<div class="list-icons">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
			                    	</div>
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

					<div class="col-xl-3 col-md-6">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title">Vanessa Aurelius</h6>
					    			<div class="list-icons">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
			                    	</div>
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

					<div class="col-xl-3 col-md-6">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title">William Brenson</h6>
					    			<div class="list-icons">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Google Drive" data-container="body"><i class="icon-google-drive"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Twitter" data-container="body"><i class="icon-twitter"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" title="Github" data-container="body"><i class="icon-github"></i></a>
			                    	</div>
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
				<!-- /horizontal cards -->

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
