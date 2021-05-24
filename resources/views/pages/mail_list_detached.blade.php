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
	<script src="../../../../global_assets/js/plugins/extensions/rowlink.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/mail_list.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Mailbox</span> - List Detached</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<form action="#">
							<div class="form-group form-group-feedback form-group-feedback-right">
								<input type="search" class="form-control wmin-200" placeholder="Search messages">
								<div class="form-control-feedback">
									<i class="icon-search4 font-size-base text-muted"></i>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="mail_list_detached" class="breadcrumb-item">Mailbox</a>
							<span class="breadcrumb-item active">List detached</span>
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
				<div class="d-md-flex align-items-md-start">

					<!-- Left sidebar component -->
					<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left border-0 shadow-0 sidebar-expand-md">

						<!-- Sidebar content -->
						<div class="sidebar-content">

							<!-- Actions -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Actions</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<a href="#" class="btn bg-indigo-400 btn-block">Compose mail</a>
								</div>
							</div>
							<!-- /actions -->


							<!-- Sub navigation -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Navigation</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body p-0">
									<ul class="nav nav-sidebar mb-2" data-nav-type="accordion">
										<li class="nav-item-header">Folders</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-drawer-in"></i>
												Inbox
												<span class="badge bg-success badge-pill ml-auto">32</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link"><i class="icon-drawer3"></i> Drafts</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link"><i class="icon-drawer-out"></i> Sent mail</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link"><i class="icon-stars"></i> Starred</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-spam"></i>
												Spam
												<span class="badge bg-danger badge-pill ml-auto">99+</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link"><i class="icon-bin"></i> Trash</a>
										</li>
										<li class="nav-item-header">Labels</li>
										<li class="nav-item">
											<a href="#" class="nav-link"><span class="badge badge-mark border-primary align-self-center mr-3"></span> Facebook</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link"><span class="badge badge-mark border-success align-self-center mr-3"></span> Spotify</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link"><span class="badge badge-mark border-indigo-400 align-self-center mr-3"></span> Twitter</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link"><span class="badge badge-mark border-pink-400 align-self-center mr-3"></span> Dribbble</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- /sub navigation -->


							<!-- Start chat -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Start chat</span>
									<div class="header-elements">
										<span class="badge bg-success badge-pill">+32</span>
			                		</div>
								</div>

								<ul class="media-list media-list-linked my-2">
									<li class="media text-muted border-0 py-2">Office staff</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>
											<div class="media-body">
												<div class="media-title font-weight-semibold">James Alexander</div>
												<span class="text-muted font-size-sm">UI/UX expert</span>
											</div>
											<div class="align-self-center ml-3">
												<span class="badge badge-mark bg-success border-success"></span>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>
											<div class="media-body">
												<div class="media-title font-weight-semibold">Jeremy Victorino</div>
												<span class="text-muted font-size-sm">Senior designer</span>
											</div>
											<div class="align-self-center ml-3">
												<span class="badge badge-mark bg-danger border-danger"></span>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>
											<div class="media-body">
												<div class="media-title"><span class="font-weight-semibold">Jordana Mills</span></div>
												<span class="text-muted">Sales consultant</span>
											</div>
											<div class="align-self-center ml-3">
												<span class="badge badge-mark bg-grey-300 border-grey-300"></span>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>
											<div class="media-body">
												<div class="media-title"><span class="font-weight-semibold">William Miles</span></div>
												<span class="text-muted">SEO expert</span>
											</div>
											<div class="align-self-center ml-3">
												<span class="badge badge-mark bg-success border-success"></span>
											</div>
										</a>
									</li>

									<li class="media text-muted border-0 py-2">Partners</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>
											<div class="media-body">
												<div class="media-title font-weight-semibold">Margo Baker</div>
												<span class="text-muted font-size-sm">Google</span>
											</div>
											<div class="align-self-center ml-3">
												<span class="badge badge-mark bg-success border-success"></span>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>
											<div class="media-body">
												<div class="media-title font-weight-semibold">Beatrix Diaz</div>
												<span class="text-muted font-size-sm">Facebook</span>
											</div>
											<div class="align-self-center ml-3">
												<span class="badge badge-mark bg-warning-400 border-warning-400"></span>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</div>
											<div class="media-body">
												<div class="media-title font-weight-semibold">Richard Vango</div>
												<span class="text-muted font-size-sm">Microsoft</span>
											</div>
											<div class="align-self-center ml-3">
												<span class="badge badge-mark bg-grey-300 border-grey-300"></span>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<!-- /start chat -->


							<!-- Latest messages -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Latest messages</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<ul class="media-list media-list-linked my-2">
									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</div>
											<div class="media-body">
												<div class="media-title font-weight-semibold">Will Samuel</div>
												<span class="text-muted">And he looked over at the alarm clock, ticking..</span>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</div>
											<div class="media-body">
												<div class="media-title font-weight-semibold">Margo Baker</div>
												<span class="text-muted">However hard he threw himself onto..</span>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</div>
											<div class="media-body">
												<div class="media-title font-weight-semibold">Monica Smith</div>
												<span class="text-muted">Yes, but was it possible to quietly sleep through..</span>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</div>
											<div class="media-body">
												<div class="media-title font-weight-semibold">Jordana Mills</div>
												<span class="text-muted">What should he do now? The next train went at..</span>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</div>
											<div class="media-body">
												<div class="media-title font-weight-semibold">John Craving</div>
												<span class="text-muted">Gregor then turned to look out the window..</span>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<!-- /latest messages -->


							<!-- Contacts -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Contacts</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="media-list">
										<li class="media">
											<a href="#" class="mr-3 position-relative">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
												<span class="badge badge-info badge-pill badge-float border-2 border-white">6</span>
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Rebecca Jameson</div>
												<span class="font-size-sm text-muted">Web developer</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown" aria-expanded="false"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-164px, 17px, 0px); top: 0px; left: 0px; will-change: transform;">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3 position-relative">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
												<span class="badge badge-info badge-pill badge-float border-2 border-white">9</span>
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
														<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
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
														<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
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
														<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
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
														<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /contacts -->

						</div>
						<!-- /sidebar content -->

					</div>
					<!-- /left sidebar component -->


					<!-- Right content -->
					<div class="flex-fill overflow-auto">

						<!-- Single line -->
						<div class="card">
							<div class="card-header bg-transparent header-elements-inline">
								<h6 class="card-title">My Inbox (single line)</h6>

								<div class="header-elements">
									<span class="badge bg-blue">259 new today</span>
			                	</div>
							</div>

							<!-- Action toolbar -->
							<div class="navbar navbar-light navbar-expand-lg shadow-0 py-lg-2">
								<div class="text-center d-lg-none w-100">
									<button type="button" class="navbar-toggler w-100" data-toggle="collapse" data-target="#inbox-toolbar-toggle-single">
										<i class="icon-circle-down2"></i>
									</button>
								</div>

								<div class="navbar-collapse text-center text-lg-left flex-wrap collapse" id="inbox-toolbar-toggle-single">
									<div class="mt-3 mt-lg-0">
										<div class="btn-group">
											<button type="button" class="btn btn-light btn-icon btn-checkbox-all">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</button>

											<button type="button" class="btn btn-light btn-icon dropdown-toggle" data-toggle="dropdown"></button>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Select all</a>
												<a href="#" class="dropdown-item">Select read</a>
												<a href="#" class="dropdown-item">Select unread</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">Clear selection</a>
											</div>
										</div>

										<div class="btn-group ml-3 mr-lg-3">
											<button type="button" class="btn btn-light"><i class="icon-pencil7"></i> <span class="d-none d-lg-inline-block ml-2">Compose</span></button>
											<button type="button" class="btn btn-light"><i class="icon-bin"></i> <span class="d-none d-lg-inline-block ml-2">Delete</span></button>
					                    	<button type="button" class="btn btn-light"><i class="icon-spam"></i> <span class="d-none d-lg-inline-block ml-2">Spam</span></button>
										</div>
									</div>

									<div class="navbar-text ml-lg-auto"><span class="font-weight-semibold">1-50</span> of <span class="font-weight-semibold">528</span></div>

									<div class="ml-lg-3 mb-3 mb-lg-0">
										<div class="btn-group">
											<button type="button" class="btn btn-light btn-icon disabled"><i class="icon-arrow-right13"></i></button>
					                    	<button type="button" class="btn btn-light btn-icon"><i class="icon-arrow-left12"></i></button>
										</div>

										<div class="btn-group ml-3">
											<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></button>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /action toolbar -->


							<!-- Table -->
							<div class="table-responsive">
								<table class="table table-inbox">
									<tbody data-link="row" class="rowlink">
										<tr class="unread">
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/brands/spotify.png" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Spotify</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<span class="table-inbox-subject">On Tower-hill, as you go down &nbsp;-&nbsp;</span>
												<span class="text-muted font-weight-normal">To the London docks, you may have seen a crippled beggar (or KEDGER, as the sailors say) holding a painted board before him, representing the tragic scene in which he lost his leg</span>
											</td>
											<td class="table-inbox-attachment">
												<i class="icon-attachment text-muted"></i>
											</td>
											<td class="table-inbox-time">
												11:09 pm
											</td>
										</tr>

										<tr class="unread">
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<span class="btn bg-warning-400 rounded-circle btn-icon btn-sm">
													<span class="letter-icon"></span>
												</span>
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">James Alexander</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<span class="table-inbox-subject"><span class="badge bg-success mr-2">Promo</span> There are three whales and three boats &nbsp;-&nbsp;</span>
												<span class="text-muted font-weight-normal">And one of the boats (presumed to contain the missing leg in all its original integrity) is being crunched by the jaws of the foremost whale</span>
											</td>
											<td class="table-inbox-attachment">
												<i class="icon-attachment text-muted"></i>
											</td>
											<td class="table-inbox-time">
												10:21 pm
											</td>
										</tr>

										<tr class="unread">
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-full2 text-warning-300"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Nathan Jacobson</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<span class="table-inbox-subject">Any time these ten years, they tell me, has that man held up &nbsp;-&nbsp;</span>
												<span class="text-muted font-weight-normal">That picture, and exhibited that stump to an incredulous world. But the time of his justification has now come. His three whales are as good whales as were ever published in Wapping, at any rate; and his stump</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												8:37 pm
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-full2 text-warning-300"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<span class="btn bg-indigo-400 rounded-circle btn-icon btn-sm">
													<span class="letter-icon"></span>
												</span>
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Margo Baker</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<span class="table-inbox-subject">Throughout the Pacific, and also in Nantucket, and New Bedford &nbsp;-&nbsp;</span>
												<span class="text-muted font-weight-normal">and Sag Harbor, you will come across lively sketches of whales and whaling-scenes, graven by the fishermen themselves on Sperm Whale-teeth, or ladies' busks wrought out of the Right Whale-bone</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												4:28 am
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/brands/dribbble.png" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Dribbble</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<span class="table-inbox-subject">The whalemen call the numerous little ingenious contrivances &nbsp;-&nbsp;</span>
												<span class="text-muted font-weight-normal">They elaborately carve out of the rough material, in their hours of ocean leisure. Some of them have little boxes of dentistical-looking implements</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												Dec 5
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<span class="btn bg-brown-400 rounded-circle btn-icon btn-sm">
													<span class="letter-icon"></span>
												</span>
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Hanna Dorman</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<span class="table-inbox-subject">Some of them have little boxes of dentistical-looking implements &nbsp;-&nbsp;</span>
												<span class="text-muted font-weight-normal">Specially intended for the skrimshandering business. But, in general, they toil with their jack-knives alone; and, with that almost omnipotent tool of the sailor</span>
											</td>
											<td class="table-inbox-attachment">
												<i class="icon-attachment text-muted"></i>
											</td>
											<td class="table-inbox-time">
												Dec 5
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/brands/twitter.png" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Twitter</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<span class="table-inbox-subject"><span class="badge bg-indigo-400 mr-2">Order</span> Long exile from Christendom &nbsp;-&nbsp;</span>
												<span class="text-muted font-weight-normal">And civilization inevitably restores a man to that condition in which God placed him, i.e. what is called savagery</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												Dec 4
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-full2 text-warning-300"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<span class="btn bg-pink-400 rounded-circle btn-icon btn-sm">
													<span class="letter-icon"></span>
												</span>
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Vanessa Aurelius</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<span class="table-inbox-subject">Your true whale-hunter is as much a savage as an Iroquois &nbsp;-&nbsp;</span>
												<span class="text-muted font-weight-normal">I myself am a savage, owning no allegiance but to the King of the Cannibals; and ready at any moment to rebel against him. Now, one of the peculiar characteristics of the savage in his domestic hours</span>
											</td>
											<td class="table-inbox-attachment">
												<i class="icon-attachment text-muted"></i>
											</td>
											<td class="table-inbox-time">
												Dec 4
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">William Brenson</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<span class="table-inbox-subject">An ancient Hawaiian war-club or spear-paddle &nbsp;-&nbsp;</span>
												<span class="text-muted font-weight-normal">In its full multiplicity and elaboration of carving, is as great a trophy of human perseverance as a Latin lexicon. For, with but a bit of broken sea-shell or a shark's tooth</span>
											</td>
											<td class="table-inbox-attachment">
												<i class="icon-attachment text-muted"></i>
											</td>
											<td class="table-inbox-time">
												Dec 4
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/brands/facebook.png" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Facebook</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<span class="table-inbox-subject">As with the Hawaiian savage, so with the white sailor-savage &nbsp;-&nbsp;</span>
												<span class="text-muted font-weight-normal">With the same marvellous patience, and with the same single shark's tooth, of his one poor jack-knife, he will carve you a bit of bone sculpture, not quite as workmanlike</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												Dec 3
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-full2 text-warning-300"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Vicky Barna</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<span class="table-inbox-subject"><span class="badge bg-pink-400 mr-2">Track</span> Achilles's shield &nbsp;-&nbsp;</span>
												<span class="text-muted font-weight-normal">Wooden whales, or whales cut in profile out of the small dark slabs of the noble South Sea war-wood, are frequently met with in the forecastles of American whalers. Some of them are done with much accuracy</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												Dec 2
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/brands/youtube.png" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Youtube</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<span class="table-inbox-subject">At some old gable-roofed country houses &nbsp;-&nbsp;</span>
												<span class="text-muted font-weight-normal">You will see brass whales hung by the tail for knockers to the road-side door. When the porter is sleepy, the anvil-headed whale would be best. But these knocking whales are seldom remarkable as faithful essays</span>
											</td>
											<td class="table-inbox-attachment">
												<i class="icon-attachment text-muted"></i>
											</td>
											<td class="table-inbox-time">
												Nov 30
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Tony Gurrano</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<span class="table-inbox-subject">On the spires of some old-fashioned churches &nbsp;-&nbsp;</span>
												<span class="text-muted font-weight-normal">You will see sheet-iron whales placed there for weather-cocks; but they are so elevated, and besides that are to all intents and purposes so labelled with "HANDS OFF!" you cannot examine them</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												Nov 28
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<span class="btn bg-danger-400 rounded-circle btn-icon btn-sm">
													<span class="letter-icon"></span>
												</span>
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Barbara Walden</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<span class="table-inbox-subject">In bony, ribby regions of the earth &nbsp;-&nbsp;</span>
												<span class="text-muted font-weight-normal">Where at the base of high broken cliffs masses of rock lie strewn in fantastic groupings upon the plain, you will often discover images as of the petrified forms</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												Nov 28
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-full2 text-warning-300"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/brands/amazon.png" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Amazon</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<span class="table-inbox-subject">Here and there from some lucky point of view &nbsp;-&nbsp;</span>
												<span class="text-muted font-weight-normal">You will catch passing glimpses of the profiles of whales defined along the undulating ridges. But you must be a thorough whaleman, to see these sights; and not only that, but if you wish to return to such a sight again</span>
											</td>
											<td class="table-inbox-attachment">
												<i class="icon-attachment text-muted"></i>
											</td>
											<td class="table-inbox-time">
												Nov 27
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- /table -->

						</div>
						<!-- /single line -->


						<!-- Multiple lines -->
						<div class="card">
							<div class="card-header bg-transparent header-elements-inline">
								<h6 class="card-title">My Inbox (multiple lines)</h6>

								<div class="header-elements">
									<span class="badge bg-blue">259 new today</span>
			                	</div>
							</div>

							<!-- Action toolbar -->
							<div class="bg-light">
								<div class="navbar navbar-light bg-light navbar-expand-lg py-lg-2">
									<div class="text-center d-lg-none w-100">
										<button type="button" class="navbar-toggler w-100" data-toggle="collapse" data-target="#inbox-toolbar-toggle-multiple">
											<i class="icon-circle-down2"></i>
										</button>
									</div>

									<div class="navbar-collapse text-center text-lg-left flex-wrap collapse" id="inbox-toolbar-toggle-multiple">
										<div class="mt-3 mt-lg-0">
											<div class="btn-group">
												<button type="button" class="btn btn-light btn-icon btn-checkbox-all">
													<input type="checkbox" class="form-input-styled" data-fouc>
												</button>

												<button type="button" class="btn btn-light btn-icon dropdown-toggle" data-toggle="dropdown"></button>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Select all</a>
													<a href="#" class="dropdown-item">Select read</a>
													<a href="#" class="dropdown-item">Select unread</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Clear selection</a>
												</div>
											</div>

											<div class="btn-group ml-3 mr-lg-3">
												<button type="button" class="btn btn-light"><i class="icon-pencil7"></i> <span class="d-none d-lg-inline-block ml-2">Compose</span></button>
												<button type="button" class="btn btn-light"><i class="icon-bin"></i> <span class="d-none d-lg-inline-block ml-2">Delete</span></button>
						                    	<button type="button" class="btn btn-light"><i class="icon-spam"></i> <span class="d-none d-lg-inline-block ml-2">Spam</span></button>
											</div>
										</div>

										<div class="navbar-text ml-lg-auto"><span class="font-weight-semibold">1-50</span> of <span class="font-weight-semibold">528</span></div>

										<div class="ml-lg-3 mb-3 mb-lg-0">
											<div class="btn-group">
												<button type="button" class="btn btn-light btn-icon disabled"><i class="icon-arrow-left12"></i></button>
						                    	<button type="button" class="btn btn-light btn-icon"><i class="icon-arrow-right13"></i></button>
											</div>

											<div class="btn-group ml-3">
												<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></button>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /action toolbar -->


							<!-- Table -->
							<div class="table-responsive">
								<table class="table table-inbox">
									<tbody data-link="row" class="rowlink">
										<tr class="unread">
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/brands/spotify.png" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Spotify</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<div class="table-inbox-subject">On Tower-hill, as you go down &nbsp;-&nbsp;</div>
												<span class="text-muted font-weight-normal">To the London docks, you may have seen a crippled beggar (or KEDGER, as the sailors say) holding a painted board before him, representing the tragic scene in which he lost his leg</span>
											</td>
											<td class="table-inbox-attachment">
												<i class="icon-attachment text-muted"></i>
											</td>
											<td class="table-inbox-time">
												11:09 pm
											</td>
										</tr>

										<tr class="unread">
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<span class="btn bg-warning-400 rounded-circle btn-icon btn-sm">
													<span class="letter-icon"></span>
												</span>
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">James Alexander</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<div class="table-inbox-subject"><span class="badge bg-success mr-2">Promo</span> There are three whales and three boats &nbsp;-&nbsp;</div>
												<span class="text-muted font-weight-normal">And one of the boats (presumed to contain the missing leg in all its original integrity) is being crunched by the jaws of the foremost whale</span>
											</td>
											<td class="table-inbox-attachment">
												<i class="icon-attachment text-muted"></i>
											</td>
											<td class="table-inbox-time">
												10:21 pm
											</td>
										</tr>

										<tr class="unread">
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-full2 text-warning-300"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Nathan Jacobson</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<div class="table-inbox-subject">Any time these ten years, they tell me, has that man held up &nbsp;-&nbsp;</div>
												<span class="text-muted font-weight-normal">That picture, and exhibited that stump to an incredulous world. But the time of his justification has now come. His three whales are as good whales as were ever published in Wapping, at any rate; and his stump</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												8:37 pm
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-full2 text-warning-300"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<span class="btn bg-indigo-400 rounded-circle btn-icon btn-sm">
													<span class="letter-icon"></span>
												</span>
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Margo Baker</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<div class="table-inbox-subject">Throughout the Pacific, and also in Nantucket, and New Bedford &nbsp;-&nbsp;</div>
												<span class="text-muted font-weight-normal">and Sag Harbor, you will come across lively sketches of whales and whaling-scenes, graven by the fishermen themselves on Sperm Whale-teeth, or ladies' busks wrought out of the Right Whale-bone</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												4:28 am
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/brands/dribbble.png" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Dribbble</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<div class="table-inbox-subject">The whalemen call the numerous little ingenious contrivances &nbsp;-&nbsp;</div>
												<span class="text-muted font-weight-normal">They elaborately carve out of the rough material, in their hours of ocean leisure. Some of them have little boxes of dentistical-looking implements</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												Dec 5
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<span class="btn bg-brown-400 rounded-circle btn-icon btn-sm">
													<span class="letter-icon"></span>
												</span>
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Hanna Dorman</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<div class="table-inbox-subject">Some of them have little boxes of dentistical-looking implements &nbsp;-&nbsp;</div>
												<span class="text-muted font-weight-normal">Specially intended for the skrimshandering business. But, in general, they toil with their jack-knives alone; and, with that almost omnipotent tool of the sailor</span>
											</td>
											<td class="table-inbox-attachment">
												<i class="icon-attachment text-muted"></i>
											</td>
											<td class="table-inbox-time">
												Dec 5
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/brands/twitter.png" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Twitter</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<div class="table-inbox-subject"><span class="badge bg-indigo-400 mr-2">Order</span> Long exile from Christendom &nbsp;-&nbsp;</div>
												<span class="text-muted font-weight-normal">And civilization inevitably restores a man to that condition in which God placed him, i.e. what is called savagery</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												Dec 4
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-full2 text-warning-300"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<span class="btn bg-pink-400 rounded-circle btn-icon btn-sm">
													<span class="letter-icon"></span>
												</span>
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Vanessa Aurelius</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<div class="table-inbox-subject">Your true whale-hunter is as much a savage as an Iroquois &nbsp;-&nbsp;</div>
												<span class="text-muted font-weight-normal">I myself am a savage, owning no allegiance but to the King of the Cannibals; and ready at any moment to rebel against him. Now, one of the peculiar characteristics of the savage in his domestic hours</span>
											</td>
											<td class="table-inbox-attachment">
												<i class="icon-attachment text-muted"></i>
											</td>
											<td class="table-inbox-time">
												Dec 4
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">William Brenson</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<div class="table-inbox-subject">An ancient Hawaiian war-club or spear-paddle &nbsp;-&nbsp;</div>
												<span class="text-muted font-weight-normal">In its full multiplicity and elaboration of carving, is as great a trophy of human perseverance as a Latin lexicon. For, with but a bit of broken sea-shell or a shark's tooth</span>
											</td>
											<td class="table-inbox-attachment">
												<i class="icon-attachment text-muted"></i>
											</td>
											<td class="table-inbox-time">
												Dec 4
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/brands/facebook.png" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Facebook</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<div class="table-inbox-subject">As with the Hawaiian savage, so with the white sailor-savage &nbsp;-&nbsp;</div>
												<span class="text-muted font-weight-normal">With the same marvellous patience, and with the same single shark's tooth, of his one poor jack-knife, he will carve you a bit of bone sculpture, not quite as workmanlike</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												Dec 3
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-full2 text-warning-300"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Vicky Barna</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<div class="table-inbox-subject"><span class="badge bg-pink-400 mr-2">Track</span> Achilles's shield &nbsp;-&nbsp;</div>
												<span class="text-muted font-weight-normal">Wooden whales, or whales cut in profile out of the small dark slabs of the noble South Sea war-wood, are frequently met with in the forecastles of American whalers. Some of them are done with much accuracy</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												Dec 2
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/brands/youtube.png" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Youtube</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<div class="table-inbox-subject">At some old gable-roofed country houses &nbsp;-&nbsp;</div>
												<span class="text-muted font-weight-normal">You will see brass whales hung by the tail for knockers to the road-side door. When the porter is sleepy, the anvil-headed whale would be best. But these knocking whales are seldom remarkable as faithful essays</span>
											</td>
											<td class="table-inbox-attachment">
												<i class="icon-attachment text-muted"></i>
											</td>
											<td class="table-inbox-time">
												Nov 30
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Tony Gurrano</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<div class="table-inbox-subject">On the spires of some old-fashioned churches &nbsp;-&nbsp;</div>
												<span class="text-muted font-weight-normal">You will see sheet-iron whales placed there for weather-cocks; but they are so elevated, and besides that are to all intents and purposes so labelled with "HANDS OFF!" you cannot examine them</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												Nov 28
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-empty3 text-muted"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<span class="btn bg-danger-400 rounded-circle btn-icon btn-sm">
													<span class="letter-icon"></span>
												</span>
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Barbara Walden</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<div class="table-inbox-subject">In bony, ribby regions of the earth &nbsp;-&nbsp;</div>
												<span class="text-muted font-weight-normal">Where at the base of high broken cliffs masses of rock lie strewn in fantastic groupings upon the plain, you will often discover images as of the petrified forms</span>
											</td>
											<td class="table-inbox-attachment"></td>
											<td class="table-inbox-time">
												Nov 28
											</td>
										</tr>

										<tr>
											<td class="table-inbox-checkbox rowlink-skip">
												<input type="checkbox" class="form-input-styled" data-fouc>
											</td>
											<td class="table-inbox-star rowlink-skip">
												<a href="#">
													<i class="icon-star-full2 text-warning-300"></i>
												</a>
											</td>
											<td class="table-inbox-image">
												<img src="../../../../global_assets/images/brands/amazon.png" class="rounded-circle" width="32" height="32" alt="">
											</td>
											<td class="table-inbox-name">
												<a href="mail_read">
													<div class="letter-icon-title text-default">Amazon</div>
												</a>
											</td>
											<td class="table-inbox-message">
												<div class="table-inbox-subject">Here and there from some lucky point of view &nbsp;-&nbsp;</div>
												<span class="text-muted font-weight-normal">You will catch passing glimpses of the profiles of whales defined along the undulating ridges. But you must be a thorough whaleman, to see these sights; and not only that, but if you wish to return to such a sight again</span>
											</td>
											<td class="table-inbox-attachment">
												<i class="icon-attachment text-muted"></i>
											</td>
											<td class="table-inbox-time">
												Nov 27
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- /table -->

						</div>
						<!-- /multiple lines -->

					</div>
					<!-- /right content -->

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

</body>
</html>
