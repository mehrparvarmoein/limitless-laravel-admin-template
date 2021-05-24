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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">User Pages</span> - User List</h4>
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
							<a href="user_pages_list" class="breadcrumb-item">User pages</a>
							<span class="breadcrumb-item active">User list</span>
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

				<!-- Simple lists -->
				<div class="row">
					<div class="col-md-6">

						<!-- Simple list -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Simple user list</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

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
						<!-- /simple list -->

					</div>

					<div class="col-md-6">

						<!-- Dropdown list -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Dropdown list</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

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
											<div class="list-icons">
						                    	<div class="list-icons-item dropdown">
						                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>

						                    		<div class="dropdown-menu dropdown-menu-right">
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a>
						                    		</div>
						                    	</div>
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
											<div class="list-icons">
						                    	<div class="list-icons-item dropdown">
						                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>

						                    		<div class="dropdown-menu dropdown-menu-right">
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a>
						                    		</div>
						                    	</div>
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
											<div class="list-icons">
						                    	<div class="list-icons-item dropdown">
						                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>

						                    		<div class="dropdown-menu dropdown-menu-right">
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a>
						                    		</div>
						                    	</div>
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
											<div class="list-icons">
						                    	<div class="list-icons-item dropdown">
						                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>

						                    		<div class="dropdown-menu dropdown-menu-right">
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a>
						                    		</div>
						                    	</div>
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
											<div class="list-icons">
						                    	<div class="list-icons-item dropdown">
						                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>

						                    		<div class="dropdown-menu dropdown-menu-right">
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a>
						                    		</div>
						                    	</div>
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
											<div class="list-icons">
						                    	<div class="list-icons-item dropdown">
						                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>

						                    		<div class="dropdown-menu dropdown-menu-right">
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a>
						                    		</div>
						                    	</div>
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
											<div class="list-icons">
						                    	<div class="list-icons-item dropdown">
						                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>

						                    		<div class="dropdown-menu dropdown-menu-right">
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a>
						                    		</div>
						                    	</div>
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
											<div class="list-icons">
						                    	<div class="list-icons-item dropdown">
						                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>

						                    		<div class="dropdown-menu dropdown-menu-right">
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a>
						                    		</div>
						                    	</div>
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
											<div class="list-icons">
						                    	<div class="list-icons-item dropdown">
						                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>

						                    		<div class="dropdown-menu dropdown-menu-right">
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a>
						                    		</div>
						                    	</div>
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
											<div class="list-icons">
						                    	<div class="list-icons-item dropdown">
						                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>

						                    		<div class="dropdown-menu dropdown-menu-right">
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a>
						                    		</div>
						                    	</div>
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
											<div class="list-icons">
						                    	<div class="list-icons-item dropdown">
						                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>

						                    		<div class="dropdown-menu dropdown-menu-right">
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a>
						                    		</div>
						                    	</div>
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
											<div class="list-icons">
						                    	<div class="list-icons-item dropdown">
						                    		<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>

						                    		<div class="dropdown-menu dropdown-menu-right">
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a>
								                    	<a href="#" class="dropdown-item" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a>
						                    		</div>
						                    	</div>
					                    	</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!-- /dropdown list -->
					
					</div>
				</div>
				<!-- /simple lists -->


				<!-- Linked lists -->
				<div class="row">
					<div class="col-md-6">

						<!-- List with text -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Linked list (text)</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<ul class="media-list media-list-linked">
								<li class="media bg-light font-weight-semibold py-2">Team leaders</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">James Alexander</div>
											<span class="text-muted">Development</span>
										</div>
										<div class="align-self-center ml-3 text-nowrap">
											<span class="text-muted">
												<i class="icon-pin-alt font-size-base mr-1"></i>
												Vienna
											</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Jeremy Victorino</div>
											<span class="text-muted">Finances</span>
										</div>
										<div class="align-self-center ml-3 text-nowrap">
											<span class="text-muted">
												<i class="icon-pin-alt font-size-base mr-1"></i>
												Mexico
											</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Margo Baker</div>
											<span class="text-muted">Marketing</span>
										</div>
										<div class="align-self-center ml-3 text-nowrap">
											<span class="text-muted">
												<i class="icon-pin-alt font-size-base mr-1"></i>
												Tokyo
											</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Monica Smith</div>
											<span class="text-muted">Design</span>
										</div>
										<div class="align-self-center ml-3 text-nowrap">
											<span class="text-muted">
												<i class="icon-pin-alt font-size-base mr-1"></i>
												New York
											</span>
										</div>
									</a>
								</li>

								<li class="media bg-light font-weight-semibold py-2">Office staff</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Bastian Miller</div>
											<span class="text-muted">Web dev</span>
										</div>
										<div class="align-self-center ml-3 text-nowrap">
											<span class="text-muted">
												<i class="icon-pin-alt font-size-base mr-1"></i>
												Hamburg
											</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Jordana Mills</div>
											<span class="text-muted">Sales consultant</span>
										</div>
										<div class="align-self-center ml-3 text-nowrap">
											<span class="text-muted">
												<i class="icon-pin-alt font-size-base mr-1"></i>
												Amsterdam
											</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Buzz Brenson</div>
											<span class="text-muted">UX expert</span>
										</div>
										<div class="align-self-center ml-3 text-nowrap">
											<span class="text-muted">
												<i class="icon-pin-alt font-size-base mr-1"></i>
												Madrid
											</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Zachary Willson</div>
											<span class="text-muted">Illustrator</span>
										</div>
										<div class="align-self-center ml-3 text-nowrap">
											<span class="text-muted">
												<i class="icon-pin-alt font-size-base mr-1"></i>
												Paris
											</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">William Miles</div>
											<span class="text-muted">SEO expert</span>
										</div>
										<div class="align-self-center ml-3 text-nowrap">
											<span class="text-muted">
												<i class="icon-pin-alt font-size-base mr-1"></i>
												Berlin
											</span>
										</div>
									</a>
								</li>

								<li class="media bg-light font-weight-semibold py-2">Partners</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Freddy Walden</div>
											<span class="text-muted">Microsoft</span>
										</div>
										<div class="align-self-center ml-3 text-nowrap">
											<span class="text-muted">
												<i class="icon-pin-alt font-size-base mr-1"></i>
												Palo Alto
											</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Dori Laperriere</div>
											<span class="text-muted">Google</span>
										</div>
										<div class="align-self-center ml-3 text-nowrap">
											<span class="text-muted">
												<i class="icon-pin-alt font-size-base mr-1"></i>
												Dublin
											</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Vanessa Aurelius</div>
											<span class="text-muted">Facebook</span>
										</div>
										<div class="align-self-center ml-3 text-nowrap">
											<span class="text-muted">
												<i class="icon-pin-alt font-size-base mr-1"></i>
												London
											</span>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<!-- /list with text -->

					</div>

					<div class="col-md-6">

						<!-- List with badges -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Linked list (badges)</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<ul class="media-list media-list-linked">
								<li class="media bg-light font-weight-semibold py-2">Team leaders</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">James Alexander</div>
											<span class="text-muted">Development</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-primary">Berlin</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Jeremy Victorino</div>
											<span class="text-muted">Finances</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-danger">Hague</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Margo Baker</div>
											<span class="text-muted">Marketing</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-success">Munich</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Monica Smith</div>
											<span class="text-muted">Design</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge bg-indigo-400">Zurich</span>
										</div>
									</a>
								</li>

								<li class="media bg-light font-weight-semibold py-2">Office staff</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Bastian Miller</div>
											<span class="text-muted">Web dev</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-primary">Berlin</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Jordana Mills</div>
											<span class="text-muted">Sales consultant</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-success">Munich</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Buzz Brenson</div>
											<span class="text-muted">UX expert</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge bg-indigo-400">Zurich</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Zachary Willson</div>
											<span class="text-muted">Illustrator</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge bg-indigo-400">Zurich</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">William Miles</div>
											<span class="text-muted">SEO expert</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-success">Munich</span>
										</div>
									</a>
								</li>

								<li class="media bg-light font-weight-semibold py-2">Partners</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Freddy Walden</div>
											<span class="text-muted">Microsoft</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-primary">Berlin</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Dori Laperriere</div>
											<span class="text-muted">Google</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-danger">Hague</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Vanessa Aurelius</div>
											<span class="text-muted">Facebook</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-primary">Berlin</span>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<!-- /list with badges -->

					</div>
				</div>
				<!-- /linked lists -->


				<!-- Collapsible lists -->
				<div class="row">
					<div class="col-md-6">

						<!-- Collapsible list -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Collapsible list</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<ul class="media-list media-list-linked">
								<li class="media font-weight-semibold border-0 py-1">Team leaders</li>

								<li>
									<a href="#" class="media" data-toggle="collapse" data-target="#james">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">James Alexander</div>
											<span class="text-muted">Last.fm</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-mark border-success"></span>
										</div>
									</a>

									<div class="collapse" id="james">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Amsterdam</li>
												<li><i class="icon-user-tie mr-2"></i> Senior Designer</li>
												<li><i class="icon-phone mr-2"></i> +1(800)431 8996</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">james@alexander.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<a href="#" class="media" data-toggle="collapse" data-target="#jeremy">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Jeremy Victorino</div>
											<span class="text-muted">Spotify</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-mark border-danger"></span>
										</div>
									</a>

									<div class="collapse" id="jeremy">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Hague</li>
												<li><i class="icon-user-tie mr-2"></i> Network engineer</li>
												<li><i class="icon-phone mr-2"></i> +1(389)384 9039</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">jeremy@victorino.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<a href="#" class="media" data-toggle="collapse" data-target="#margo">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Margo Baker</div>
											<span class="text-muted">eBay</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-mark border-primary"></span>
										</div>
									</a>

									<div class="collapse" id="margo">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Dublin</li>
												<li><i class="icon-user-tie mr-2"></i> Marketing expert</li>
												<li><i class="icon-phone mr-2"></i> +3(431)589 3889</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">margo@baker.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<a href="#" class="media" data-toggle="collapse" data-target="#monica">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Monica Smith</div>
											<span class="text-muted">Amazon</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-mark border-danger"></span>
										</div>
									</a>

									<div class="collapse" id="monica">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Paris</li>
												<li><i class="icon-user-tie mr-2"></i> Web master</li>
												<li><i class="icon-phone mr-2"></i> +5(342)543 2367</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">monica@smith.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li class="media font-weight-semibold border-0 py-1">Office staff</li>

								<li>
									<a href="#" class="media" data-toggle="collapse" data-target="#bastian">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Bastian Miller</div>
											<span class="text-muted">Yahoo</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-mark border-grey-400"></span>
										</div>
									</a>

									<div class="collapse" id="bastian">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> New York</li>
												<li><i class="icon-user-tie mr-2"></i> Lead developer</li>
												<li><i class="icon-phone mr-2"></i> +1(234)675 3904</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">bastian@miller.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<a href="#" class="media" data-toggle="collapse" data-target="#jordana">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Jordana Mills</div>
											<span class="text-muted">Paypal</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-mark border-primary"></span>
										</div>
									</a>

									<div class="collapse" id="jordana">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Madrid</li>
												<li><i class="icon-user-tie mr-2"></i> UI/UX expert</li>
												<li><i class="icon-phone mr-2"></i> +2(564)234 9002</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">jordana@mills.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<a href="#" class="media" data-toggle="collapse" data-target="#buzz">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Buzz Brenson</div>
											<span class="text-muted">Oracle</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-mark border-danger"></span>
										</div>
									</a>

									<div class="collapse" id="buzz">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Hamburg</li>
												<li><i class="icon-user-tie mr-2"></i> Engineer</li>
												<li><i class="icon-phone mr-2"></i> +4(234)543 2388</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">buzz@brenson.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<a href="#" class="media" data-toggle="collapse" data-target="#zachary">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Zachary Willson</div>
											<span class="text-muted">Salesforce</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-mark border-grey-400"></span>
										</div>
									</a>

									<div class="collapse" id="zachary">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Berlin</li>
												<li><i class="icon-user-tie mr-2"></i> Accountant</li>
												<li><i class="icon-phone mr-2"></i> +4(231)653 3892</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">zachary@willson.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<a href="#" class="media" data-toggle="collapse" data-target="#william">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">William Miles</div>
											<span class="text-muted">Bing</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-mark border-grey-400"></span>
										</div>
									</a>

									<div class="collapse" id="william">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Oslo</li>
												<li><i class="icon-user-tie mr-2"></i> Senior engineer</li>
												<li><i class="icon-phone mr-2"></i> +6(324)236 3689</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">william@miles.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li class="media font-weight-semibold border-0 py-1">Partners</li>

								<li>
									<a href="#" class="media" data-toggle="collapse" data-target="#freddy">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Freddy Walden</div>
											<span class="text-muted">Microsoft</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-mark border-success"></span>
										</div>
									</a>

									<div class="collapse" id="freddy">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Amsterdam</li>
												<li><i class="icon-user-tie mr-2"></i> Accountant</li>
												<li><i class="icon-phone mr-2"></i> +3(234)653 5432</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">freddy@walden.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<a href="#" class="media" data-toggle="collapse" data-target="#dori">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Dori Laperriere</div>
											<span class="text-muted">Google</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-mark border-orange-400"></span>
										</div>
									</a>

									<div class="collapse" id="dori">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> New York</li>
												<li><i class="icon-user-tie mr-2"></i> Usability expert</li>
												<li><i class="icon-phone mr-2"></i> +1(455)234 8994</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">dori@laperriere.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<a href="#" class="media" data-toggle="collapse" data-target="#vanessa">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Vanessa Aurelius</div>
											<span class="text-muted">Facebook</span>
										</div>
										<div class="align-self-center ml-3">
											<span class="badge badge-mark border-grey-400"></span>
										</div>
									</a>

									<div class="collapse" id="vanessa">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Rome</li>
												<li><i class="icon-user-tie mr-2"></i> Web developer</li>
												<li><i class="icon-phone mr-2"></i> +8(344)658 4598</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">vanessa@aurelius.com</a></li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<!-- /collapsible list -->

					</div>

					<div class="col-md-6">

						<!-- Custom handle -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Custom handle</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<ul class="media-list media-list-linked">
								<li class="media font-weight-semibold border-0 py-1">Team leaders</li>

								<li>
									<div class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">James Alexander</div>
											<span class="text-muted">Last.fm</span>
										</div>
										<div class="align-self-center ml-3">
											<a href="#" class="text-default" data-toggle="collapse" data-target="#james2">
												<i class="icon-menu7"></i>
											</a>
										</div>
									</div>

									<div class="collapse" id="james2">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Amsterdam</li>
												<li><i class="icon-user-tie mr-2"></i> Senior Designer</li>
												<li><i class="icon-phone mr-2"></i> +1(800)431 8996</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">james@alexander.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Jeremy Victorino</div>
											<span class="text-muted">Spotify</span>
										</div>
										<div class="align-self-center ml-3">
											<a href="#" class="text-default" data-toggle="collapse" data-target="#jeremy2">
												<i class="icon-menu7"></i>
											</a>
										</div>
									</div>

									<div class="collapse" id="jeremy2">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Hague</li>
												<li><i class="icon-user-tie mr-2"></i> Network engineer</li>
												<li><i class="icon-phone mr-2"></i> +1(389)384 9039</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">jeremy@victorino.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Margo Baker</div>
											<span class="text-muted">eBay</span>
										</div>
										<div class="align-self-center ml-3">
											<a href="#" class="text-default" data-toggle="collapse" data-target="#margo2">
												<i class="icon-menu7"></i>
											</a>
										</div>
									</div>

									<div class="collapse" id="margo2">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Dublin</li>
												<li><i class="icon-user-tie mr-2"></i> Marketing expert</li>
												<li><i class="icon-phone mr-2"></i> +3(431)589 3889</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">margo@baker.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Monica Smith</div>
											<span class="text-muted">Amazon</span>
										</div>
										<div class="align-self-center ml-3">
											<a href="#" class="text-default" data-toggle="collapse" data-target="#monica2">
												<i class="icon-menu7"></i>
											</a>
										</div>
									</div>

									<div class="collapse" id="monica2">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Paris</li>
												<li><i class="icon-user-tie mr-2"></i> Web master</li>
												<li><i class="icon-phone mr-2"></i> +5(342)543 2367</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">monica@smith.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li class="media font-weight-semibold border-0 py-1">Office staff</li>

								<li>
									<div class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Bastian Miller</div>
											<span class="text-muted">Yahoo</span>
										</div>
										<div class="align-self-center ml-3">
											<a href="#" class="text-default" data-toggle="collapse" data-target="#bastian2">
												<i class="icon-menu7"></i>
											</a>
										</div>
									</div>

									<div class="collapse" id="bastian2">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> New York</li>
												<li><i class="icon-user-tie mr-2"></i> Lead developer</li>
												<li><i class="icon-phone mr-2"></i> +1(234)675 3904</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">bastian@miller.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Jordana Mills</div>
											<span class="text-muted">Paypal</span>
										</div>
										<div class="align-self-center ml-3">
											<a href="#" class="text-default" data-toggle="collapse" data-target="#jordana2">
												<i class="icon-menu7"></i>
											</a>
										</div>
									</div>

									<div class="collapse" id="jordana2">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Madrid</li>
												<li><i class="icon-user-tie mr-2"></i> UI/UX expert</li>
												<li><i class="icon-phone mr-2"></i> +2(564)234 9002</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">jordana@mills.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Buzz Brenson</div>
											<span class="text-muted">Oracle</span>
										</div>
										<div class="align-self-center ml-3">
											<a href="#" class="text-default" data-toggle="collapse" data-target="#buzz2">
												<i class="icon-menu7"></i>
											</a>
										</div>
									</div>

									<div class="collapse" id="buzz2">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Hamburg</li>
												<li><i class="icon-user-tie mr-2"></i> Engineer</li>
												<li><i class="icon-phone mr-2"></i> +4(234)543 2388</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">buzz@brenson.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Zachary Willson</div>
											<span class="text-muted">Salesforce</span>
										</div>
										<div class="align-self-center ml-3">
											<a href="#" class="text-default" data-toggle="collapse" data-target="#zachary2">
												<i class="icon-menu7"></i>
											</a>
										</div>
									</div>

									<div class="collapse" id="zachary2">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Berlin</li>
												<li><i class="icon-user-tie mr-2"></i> Accountant</li>
												<li><i class="icon-phone mr-2"></i> +4(231)653 3892</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">zachary@willson.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">William Miles</div>
											<span class="text-muted">Bing</span>
										</div>
										<div class="align-self-center ml-3">
											<a href="#" class="text-default" data-toggle="collapse" data-target="#william2">
												<i class="icon-menu7"></i>
											</a>
										</div>
									</div>

									<div class="collapse" id="william2">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Oslo</li>
												<li><i class="icon-user-tie mr-2"></i> Senior engineer</li>
												<li><i class="icon-phone mr-2"></i> +6(324)236 3689</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">william@miles.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li class="media font-weight-semibold border-0 py-1">Partners</li>

								<li>
									<div class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Freddy Walden</div>
											<span class="text-muted">Microsoft</span>
										</div>
										<div class="align-self-center ml-3">
											<a href="#" class="text-default" data-toggle="collapse" data-target="#freddy2">
												<i class="icon-menu7"></i>
											</a>
										</div>
									</div>

									<div class="collapse" id="freddy2">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Amsterdam</li>
												<li><i class="icon-user-tie mr-2"></i> Accountant</li>
												<li><i class="icon-phone mr-2"></i> +3(234)653 5432</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">freddy@walden.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Dori Laperriere</div>
											<span class="text-muted">Google</span>
										</div>
										<div class="align-self-center ml-3">
											<a href="#" class="text-default" data-toggle="collapse" data-target="#dori2">
												<i class="icon-menu7"></i>
											</a>
										</div>
									</div>

									<div class="collapse" id="dori2">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> New York</li>
												<li><i class="icon-user-tie mr-2"></i> Usability expert</li>
												<li><i class="icon-phone mr-2"></i> +1(455)234 8994</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">dori@laperriere.com</a></li>
											</ul>
										</div>
									</div>
								</li>

								<li>
									<div class="media">
										<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
										<div class="media-body">
											<div class="media-title font-weight-semibold">Vanessa Aurelius</div>
											<span class="text-muted">Facebook</span>
										</div>
										<div class="align-self-center ml-3">
											<a href="#" class="text-default" data-toggle="collapse" data-target="#vanessa2">
												<i class="icon-menu7"></i>
											</a>
										</div>
									</div>

									<div class="collapse" id="vanessa2">
										<div class="card-body bg-light border-top border-bottom">
											<ul class="list list-unstyled mb-0">
												<li><i class="icon-pin mr-2"></i> Rome</li>
												<li><i class="icon-user-tie mr-2"></i> Web developer</li>
												<li><i class="icon-phone mr-2"></i> +8(344)658 4598</li>
												<li><i class="icon-mail5 mr-2"></i> <a href="#">vanessa@aurelius.com</a></li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<!-- /custom handle -->
						
					</div>
				</div>
				<!-- /collapsible lists -->


	            <!-- Phone call modal -->
				<div id="call" class="modal fade">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-body text-center">
								<div class="card-img-actions d-inline-block mb-3">
									<img class="rounded-circle" src="../../../../global_assets/images/placeholders/placeholder.jpg" width="160" height="160" alt="">
									<div class="card-img-actions-overlay card-img rounded-circle">
										<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
											<i class="icon-question7"></i>
										</a>
									</div>
								</div>

					    		<div class="mb-3">
						    		<h6 class="font-weight-semibold mb-0">Nathan Jacobson</h6>
						    		<span class="d-block text-muted">Lead UX designer</span>
					    		</div>

					    		<ul class="list-inline mb-0">
			                    	<li class="list-inline-item"><a href="#" class="btn btn-success btn-float rounded-round"><i class="icon-phone2"></i></a></li>
			                    	<li class="list-inline-item"><a href="#" class="btn btn-danger btn-float rounded-round" data-dismiss="modal"><i class="icon-phone-slash"></i></a></li>
		                    	</ul>
					    	</div>
						</div>
					</div>
				</div>
				<!-- /phone call modal -->


				<!-- Chat modal -->
				<div id="chat" class="modal fade">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h6 class="modal-title"><span class="status-mark bg-success mr-2"></span> James Alexander</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<ul class="media-list media-chat media-chat-scrollable mb-3">
									<li class="media content-divider justify-content-center text-muted mx-0">Today</li>

									<li class="media media-chat-item-reverse">
										<div class="media-body">
											<div class="media-chat-item">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
											<div class="font-size-sm text-muted mt-2">Tue, 8:12 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
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
											<div class="media-chat-item">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
											<div class="font-size-sm text-muted mt-2">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>
									</li>

									<li class="media media-chat-item-reverse">
										<div class="media-body">
											<div class="media-chat-item">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
											<div class="font-size-sm text-muted mt-2">2 hours ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
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
											<div class="media-chat-item">Grunted smirked and grew less but rewound much despite and impressive via alongside out and gosh easy manatee dear ineffective yikes.</div>
											<div class="font-size-sm text-muted mt-2">13 minutes ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
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
					</div>
				</div>
				<!-- /chat modal -->


				<!-- Video call modal -->
				<div id="video" class="modal fade">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-body">
								<div class="row">
									<div class="col-md-6">
										<div class="card-img-actions mb-3">
											<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
											<div class="d-flex position-absolute bottom-0 w-100 py-2 px-3 bg-dark">
												<a href="#" class="text-white"><i class="icon-screen-full"></i></a>

												<div class="dropdown ml-auto">
													<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-inbox"></i> Action</a>
														<a href="#" class="dropdown-item"><i class="icon-googleplus5"></i> Another action</a>
														<a href="#" class="dropdown-item"><i class="icon-grid-alt"></i> Something else</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> One more line</a>
													</div>
												</div>
											</div>
										</div>

								    	<div class="text-center mb-3">
								    		<h6 class="font-weight-semibold mb-0">Adriana Linders</h6>
								    		<span class="d-block text-muted">Chief accountant</span>
								    	</div>
							    	</div>

							    	<div class="col-md-6">
										<div class="card-img-actions mb-3">
											<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
											<div class="d-flex position-absolute bottom-0 w-100 py-2 px-3 bg-dark">
												<a href="#" class="text-white"><i class="icon-screen-full"></i></a>

												<div class="dropdown ml-auto">
													<a href="#" class="text-white dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-inbox"></i> Action</a>
														<a href="#" class="dropdown-item"><i class="icon-googleplus5"></i> Another action</a>
														<a href="#" class="dropdown-item"><i class="icon-grid-alt"></i> Something else</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> One more line</a>
													</div>
												</div>
											</div>
										</div>

								    	<div class="text-center mb-3">
								    		<h6 class="font-weight-semibold mb-0">Victoria Ansley</h6>
								    		<span class="d-block text-muted">Lead UX designer</span>
								    	</div>
							    	</div>
						    	</div>

						    	<ul class="list-inline list-inline-condensed text-center mb-0">
									<li class="list-inline-item"><a href="#" class="btn bg-purple-300 btn-float rounded-round"><i class="icon-mic2"></i></a></li>
									<li class="list-inline-item"><a href="#" class="btn bg-success-400 btn-float rounded-round"><i class="icon-video-camera2"></i></a></li>
									<li class="list-inline-item"><a href="#" class="btn bg-blue btn-float rounded-round"><i class="icon-comment"></i></a></li>
									<li class="list-inline-item"><a href="#" class="btn bg-danger btn-float rounded-round" data-dismiss="modal"><i class="icon-phone-slash"></i></a></li>
								</ul>
					    	</div>
						</div>
					</div>
				</div>
				<!-- /video call modal -->

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
