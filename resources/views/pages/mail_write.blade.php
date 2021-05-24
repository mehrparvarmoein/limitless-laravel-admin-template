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
	<script src="../../../../global_assets/js/plugins/editors/summernote/summernote.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/mail_list_write.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Mailbox</span> - Write Mail</h4>
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
							<a href="mail_write" class="breadcrumb-item">Mailbox</a>
							<span class="breadcrumb-item active">Write mail</span>
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

							<!-- Single mail -->
							<div class="card">

								<!-- Action toolbar -->
								<div class="navbar navbar-light navbar-expand-lg shadow-0 py-lg-2 rounded-top">
									<div class="text-center d-lg-none w-100">
										<button type="button" class="navbar-toggler w-100 h-100" data-toggle="collapse" data-target="#inbox-toolbar-toggle-write">
											<i class="icon-circle-down2"></i>
										</button>
									</div>

									<div class="navbar-collapse text-center text-lg-left flex-wrap collapse" id="inbox-toolbar-toggle-write">

										<div class="mt-3 mt-lg-0 mr-lg-3">
											<button type="button" class="btn bg-blue"><i class="icon-paperplane mr-2"></i> Send mail</button>
										</div>


										<div class="mt-3 mt-lg-0 mr-lg-3">
											<div class="btn-group">
												<button type="button" class="btn btn-light">
													<i class="icon-checkmark3"></i>
													<span class="d-none d-lg-inline-block ml-2">Save</span>
												</button>
												<button type="button" class="btn btn-light">
													<i class="icon-cross2"></i>
													<span class="d-none d-lg-inline-block ml-2">Cancel</span>
												</button>
					                    		<div class="btn-group">
													<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></button>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item">Select all</a>
														<a href="#" class="dropdown-item">Select read</a>
														<a href="#" class="dropdown-item">Select unread</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item">Clear selection</a>
													</div>
												</div>
											</div>
										</div>

										<div class="navbar-text ml-lg-auto">12:49 pm</div>

										<div class="ml-lg-3 mb-3 mb-lg-0">
											<div class="btn-group">
												<button type="button" class="btn btn-light">
													<i class="icon-printer"></i>
													<span class="d-none d-lg-inline-block ml-2">Print</span>
												</button>
						                    	<button type="button" class="btn btn-light">
						                    		<i class="icon-new-tab2"></i>
						                    		<span class="d-none d-lg-inline-block ml-2">Share</span>
					                    		</button>
											</div>
										</div>
									</div>
								</div>
								<!-- /action toolbar -->


								<!-- Mail details -->
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<td class="align-top py-0" style="width: 1%">
													<div class="py-2 mr-sm-3">To:</div>
												</td>
												<td class="align-top py-0">
													<div class="d-sm-flex flex-sm-wrap">
														<input type="text" class="form-control flex-fill w-auto py-2 px-0 border-0 rounded-0" placeholder="Add recipients">
														<ul class="list-inline list-inline-dotted text-nowrap pt-sm-2 pb-2 mb-0 ml-sm-3">
															<li class="list-inline-item"><a href="#">Copy</a></li>
															<li class="list-inline-item"><a href="#">Hidden copy</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td class="align-top py-0">
													<div class="py-2 mr-sm-3">Subject:</div>
												</td>
												<td class="align-top py-0">
													<input type="text" class="form-control py-2 px-0 border-0 rounded-0" placeholder="Add subject">
												</td>
											</tr>
											<tr>
												<td colspan="3">
													<ul class="list-inline d-sm-flex flex-sm-wrap mb-0">
														<li class="list-inline-item"><a href="#"><i class="icon-attachment mr-2"></i> Attach files</a></li>
														<li class="list-inline-item"><a href="#"><i class="icon-google-drive mr-2"></i> Google Drive</a></li>
														<li class="list-inline-item"><a href="#"><i class="icon-dropbox mr-2"></i> Dropbox</a></li>
														<li class="list-inline-item ml-sm-auto"><a href="#"><i class="icon-cloud-upload2 mr-2"></i> Cloud drive</a></li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- /mail details -->


								<!-- Mail container -->
								<div class="card-body p-0">
									<div class="overflow-auto mw-100">
										<div class="summernote summernote-borderless">

											<!-- Email sample (demo) -->
											<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
												<tr>
													<td>

														<!-- Hero -->
														<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
															<tr>
																<td align="center" bgcolor="#f67b7c" style="background-image: url('http://demo.interface.club/limitless/assets/images/bg.png'); background-repeat: repeat;">
																	<table width="640" border="0" cellpadding="0" cellspacing="0" align="center">
																		<tr>
																			<td width="100%" height="15"></td>
																		</tr>
																		<tr>
																			<td align="center">
																			
																				<!-- Nav -->
																				<table width="600" border="0" cellpadding="0" cellspacing="0">
																					<tr>
																						<td width="100%" valign="middle">

																							<!-- Logo -->
																							<table width="280" border="0" cellpadding="0" cellspacing="0" align="left">
																								<tr>
																									<td height="60" valign="middle" width="100%" align="left">
																										<a href="#"><img width="125" src="../../../../global_assets/images/logo_light.png" alt=""></a>
																									</td>
																								</tr>
																							</table>
																							<!-- /logo -->


																							<!-- View Online --> 
																							<table width="280" border="0" cellpadding="0" cellspacing="0" align="right">	
																								<tr>
																									<td height="60" valign="middle" width="100%" align="right">
																										<a href="#" style="color: #ffffff;">Check the online version</a>
																									</td>
																								</tr>
																							</table>
																							<!-- /view Online --> 

																						</td>
																					</tr>
																					<tr>
																						<td width="100%" height="30"></td>
																					</tr>
																				</table>
																				<!-- /nav -->


																				<!-- Title -->
																				<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
																					<tr>
																						<td valign="middle" align="center" style="font-size: 40px; color: #ffffff; line-height: 50px; font-weight: 300;">
																							We Create <span style="font-weight: 400;">Magic.</span>
																						</td>
																					</tr>
																				</table>
																				<!-- /title -->


																				<!-- Subtitle -->
																				<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
																					<tr>
																						<td width="100%" height="30"></td>
																					</tr>
																					<tr>
																						<td valign="middle" width="100%">
																							<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
																								<tr>
																									<td width="30"></td>
																									<td width="540" align="center" style="font-size: 14px; color: #ffffff; line-height: 24px;">
																										This is a demo of email template, please do not use it as a fully functional template. Sunt in culpa qui officia deserunt mollit anim id est laborum.
																									</td>
																									<td width="30"></td>
																								</tr>
																							</table>
																						</td>
																					</tr>
																				</table>
																				<!-- /subtitle -->


																				<!-- Button -->
																				<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
																					<tr>
																						<td height="40"></td>
																					</tr>
																					<tr>
																						<td width="auto" align="center">
																							<table border="0" cellpadding="0" cellspacing="0" align="center">
																								<tr>
																									<td width="auto" align="center" height="40" bgcolor="#344b61" style="border-radius: 20px; padding-left: 40px; padding-right: 40px; font-weight: 500;">
																										<a href="#" style="color: #ffffff; font-size: 12px; text-decoration: none; text-transform: uppercase; line-height: 34px;">More Information</a>
																									</td>
																								</tr>
																							</table>
																						</td>
																					</tr>
																				</table>
																				<!-- /button -->
																				
																			</td>
																		</tr>
																		<tr>
																			<td width="100%" height="50"></td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
														<!-- /hero -->


														<!-- We have a Great Workspace -->
														<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
															<tr>
																<td width="100%" valign="top" bgcolor="#ffffff" align="center">
																	<table width="640" border="0" cellpadding="0" cellspacing="0" align="center">
																		<tr>
																			<td width="100%" height="50"></td>
																		</tr>
																		<tr>
																			<td align="center">

																				<!-- Post -->
																				<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
																					<tr>
																						<td width="100%" align="center">									
																							<table width="600" border="0" cellpadding="0" cellspacing="0" align="left">
																								<tr>
																									<td width="100%">
																										<a href="#">
																											<img src="../../../../global_assets/images/placeholders/cover.jpg" alt="" border="0" width="600" height="auto" style="border-radius: 4px;">
																										</a>
																									</td>
																								</tr>
																								<tr>
																									<td width="100%" height="25"></td>
																								</tr>
																								<tr>
																									<td height="35" width="100%" align="center" style="font-size: 24px; color: #444444; line-height: 32px; font-weight: 500;">
																										We have a Great Workspace
																									</td>
																								</tr>
																								<tr>
																									<td width="100%" height="15"></td>
																								</tr>
																								<tr>
																									<td valign="middle" width="100%" align="center" style="font-size: 14px; color: #808080; line-height: 22px;">
																										Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
																									</td>
																								</tr>
																								<tr>
																									<td width="100%" height="30"></td>
																								</tr>
																								<tr>
																									<td width="auto" align="center">
																										<table border="0" cellpadding="0" cellspacing="0" align="center">
																											<tr>
																												<td width="auto" align="center" height="38" bgcolor="#fa6f6f" style="border-radius: 20px; padding-left: 22px; padding-right: 22px;">
																													<a href="#" style="color: #ffffff; font-size: 12px; text-decoration: none; text-transform: uppercase; font-weight: 500; line-height: 32px; width: 100%;">Read more</a>
																												</td>
																											</tr>
																										</table>																								
																									</td>
																								</tr>
																							</table>
																						</td>
																					</tr>
																				</table>
																				<!-- /post -->

																			</td>
																		</tr>
																		<tr>
																			<td width="100%" height="50"></td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
														<!-- /we have a Great Workspace -->


														<!-- The Best Prices for You -->
														<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
															<tr>
																<td width="100%" height="1" bgcolor="#dddddd" style="font-size: 1px; line-height: 1px;">&nbsp;</td> 
															</tr>
															<tr>
																<td align="center" width="100%" valign="top" bgcolor="#fafafa" style="background-color: #fafafa;">
																	<table width="640" border="0" cellpadding="0" cellspacing="0" align="center">
																		<tr>
																			<td width="100%" height="50"></td>
																		</tr>
																		<tr>
																			<td align="center">

																				<!-- Header -->
																				<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
																					<tr>
																						<td align="center">									
																							<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
																								<tr>
																									<td align="center" valign="middle" style="font-size: 24px; color: #444444; line-height: 32px; font-weight: 500;">
																										The Best Prices for You
																									</td>
																								</tr>
																								<tr>
																									<td width="100%" height="30"></td>
																								</tr>
																								<tr>
																									<td width="100%">
																										<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
																											<tr>
																												<td height="1" bgcolor="#f67b7c" style="font-size: 1px; line-height: 1px;">&nbsp;</td> 
																											</tr>
																										</table>
																									</td>
																								</tr>
																								<tr>
																									<td width="100%" height="30"></td>
																								</tr>
																								<tr>
																									<td align="center" valign="middle" width="100%" style="font-size: 14px; color: #808080; line-height: 22px; font-weight: 400;">
																										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore...
																									</td>
																								</tr>
																								<tr>
																									<td width="100%" height="30"></td>
																								</tr>
																							</table>
																						</td>
																					</tr>
																				</table>
																				<!-- /header -->
																				

																				<!-- Prices -->
																				<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
																					<tr>
																						<td width="100%" valign="top" align="center">
																							
																							<!-- Basic license -->
																							<table width="290" border="0" cellpadding="0" cellspacing="0" align="left" bgcolor="#ffffff" style="border: 1px solid #dddddd; background-color: #ffffff;">
																								<tr>
																									<td width="290" valign="top" align="center">
																										<table width="294" border="0" cellpadding="0" cellspacing="0" align="center">
																											<tr>
																												<td height="15">									
																												</td>
																											</tr>
																											<tr>
																												<td align="center" style="color: #444444; font-size: 17px; line-height: 24px; padding: 0px 5px; font-weight: 500;">
																													Regular License
																												</td>
																											</tr>
																											<tr>
																												<td height="15">									
																												</td>
																											</tr>
																											<tr>
																												<td width="100" height="1" bgcolor="#e9e9e9" style="font-size: 1px; line-height: 1px;">&nbsp;</td> 
																											</tr>
																											<tr>
																												<td height="20">									
																												</td>
																											</tr>
																											<tr>
																												<td align="center" style="color: #808080; font-size: 14px; line-height: 22px; padding: 2px 5px; font-weight: 400;">
																													Non-Responsive layout
																												</td>
																											</tr>
																											<tr>
																												<td height="10">									
																												</td>
																											</tr>
																											<tr>
																												<td style="text-align: center; color: #808080; font-size: 14px; line-height: 22px; padding: 2px 5px;">
																													Builder excluded
																												</td>
																											</tr>
																											<tr>
																												<td height="10">									
																												</td>
																											</tr>
																											<tr>
																												<td style="text-align: center; color: #808080; font-size: 14px; line-height: 22px; padding: 2px 5px;">
																													Instant Access
																												</td>
																											</tr>
																											<tr>
																												<td height="25">									
																												</td>
																											</tr>
																											<tr>
																												<td height="24" style="text-align: center; color: #444444; font-size: 38px; line-height: 15px; padding: 6px 5px 6px 5px; font-weight: 700;">
																													<span style="font-size: 18px; position: relative; bottom: 12px;">$ </span>49<span style="font-size: 14px; color: #808080; font-style: italic;"> / month</span>
																												</td>
																											</tr>
																											<tr>
																												<td height="25">									
																												</td>
																											</tr>
																											<tr>
																												<td width="auto" align="center">
																													<table border="0" cellpadding="0" cellspacing="0" align="center">
																														<tr>
																															<td width="auto" align="center" height="38" bgcolor="#fa6f6f" style="border-radius: 20px; padding-left: 22px; padding-right: 22px; font-weight: 500;">
																																<a href="#" style="color: #ffffff; font-size: 12px; text-decoration: none; text-transform: uppercase; line-height: 32px;">Sign Up</a>
																															</td>
																														</tr>
																													</table>
																												</td>
																											</tr>
																											<tr>
																												<td height="30">									
																												</td>
																											</tr>
																										</table>
																									</td>
																								</tr>
																							</table>
																							<!-- /basic license -->
																							

																							<!-- Space -->
																							<table width="1" border="0" cellpadding="0" cellspacing="0" align="left">
																								<tr>
																									<td width="100%" height="30"></td>
																								</tr>
																							</table>
																							<!-- /space -->
																							

																							<!-- OEM license -->
																							<table width="290" border="0" cellpadding="0" cellspacing="0" align="right" bgcolor="#ffffff" style="border: 1px solid #dddddd; background-color: #ffffff;">
																								<tr>
																									<td width="294" valign="top">
																										<table width="290" border="0" cellpadding="0" cellspacing="0" align="center">
																											<tr>
																												<td height="15">									
																												</td>
																											</tr>
																											<tr>
																												<td align="center" style="color: #444444; font-size: 17px; line-height: 26px; padding: 0px 5px; font-weight: 500;">
																													OEM License
																												</td>
																											</tr>
																											<tr>
																												<td height="15">									
																												</td>
																											</tr>
																											<tr>
																												<td width="100" height="1" bgcolor="#e9e9e9" style="font-size: 1px; line-height: 1px;">&nbsp;</td> 
																											</tr>
																											<tr>
																												<td height="20">									
																												</td>
																											</tr>
																											<tr>
																												<td align="center" style="color: #808080; font-size: 14px; line-height: 22px; padding: 2px 5px;">
																													Responsive layout
																												</td>
																											</tr>
																											<tr>
																												<td height="10">									
																												</td>
																											</tr>
																											<tr>
																												<td align="center" style="color: #808080; font-size: 14px; line-height: 22px; padding: 2px 5px;">
																													Builder included
																												</td>
																											</tr>
																											<tr>
																												<td height="10">									
																												</td>
																											</tr>
																											<tr>
																												<td align="center" style="color: #808080; font-size: 14px; line-height: 22px; padding: 2px 5px;">
																													Instant Access
																												</td>
																											</tr>
																											<tr>
																												<td height="25">									
																												</td>
																											</tr>
																											<tr>
																												<td align="center" height="24" style="color: #444444; font-size: 38px; line-height: 15px; padding: 6px 5px 6px 5px; font-weight: 700;">
																													<span style="font-size: 18px; position: relative; bottom: 12px;">$ </span>80<span style="font-size: 14px; color: #808080; font-style: italic;"> / month</span>
																												</td>
																											</tr>
																											<tr>
																												<td height="25">									
																												</td>
																											</tr>
																											<tr>
																												<td width="auto" align="center">
																													<table border="0" cellpadding="0" cellspacing="0" align="center">
																														<tr>
																															<td width="auto" align="center" height="38" bgcolor="#fa6f6f" style="border-radius: 20px; padding-left: 22px; padding-right: 22px; font-weight: 500;">
																																<a href="#" style="color: #ffffff; font-size: 12px; text-decoration: none; text-transform: uppercase; line-height: 32px;">Sign Up</a>
																															</td>
																														</tr>
																													</table>
																												</td>
																											</tr>
																											<tr>
																												<td height="30">									
																												</td>
																											</tr>
																										</table>
																									</td>
																								</tr>
																							</table>
																							<!-- /OEM license -->
																							
																						</td>
																					</tr>
																				</table>
																				<!-- /prices -->

																			</td>
																		</tr>
																		<tr>
																			<td height="60"></td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
														<!-- /the Best Prices for You -->


														<!-- Let our Clients Convince you -->
														<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
															<tr>
																<td align="center" width="100%" valign="top" bgcolor="#4f97e2" style="background-image: url('http://demo.interface.club/limitless/assets/images/bg.png'); background-color: #4f97e2; background-repeat: repeat;">
																	<table width="640" border="0" cellpadding="0" cellspacing="0" align="center">
																		<tr>
																			<td width="100%" height="50"></td>
																		</tr>
																		<tr>
																			<td align="center">

																				<!-- Header -->
																				<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
																					<tr>
																						<td valign="middle" align="center" width="100%" style="font-size: 24px; color: #ffffff; line-height: 32px; font-weight: 500;">
																							Let our Clients Convince you
																						</td>
																					</tr>
																					<tr>
																						<td width="100%" height="30"></td>
																					</tr>
																					<tr>
																						<td width="100%">
																							<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
																								<tr>
																									<td width="100" height="1" bgcolor="#ffffff" style="font-size: 1px; line-height: 1px;">&nbsp;</td> 
																								</tr>
																							</table>
																						</td>
																					</tr>
																					<tr>
																						<td width="100%" height="30"></td>
																					</tr>
																					<tr>
																						<td align="center" valign="middle" width="100%" style="font-size: 14px; color: #ffffff; line-height: 22px;">
																							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt <b>mollit anim id est laborum</b>. Sed ut perspiciatis unde omnis iste...
																						</td>
																					</tr>
																					<tr>
																						<td width="100%" height="30"></td>
																					</tr>
																				</table>
																				<!-- /header -->
																				

																				<!-- Testimonials -->
																				<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
																					<tr>
																						<td width="100%">

																							<!-- Left table -->
																							<table width="275" border="0" cellpadding="0" cellspacing="0" align="left" style="border-radius: 4px;">
																								<tr>
																									<td width="100%" align="center">
																										<a href="#">
																											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" border="0" width="83" height="auto" style="border-radius: 100px;">
																										</a>
																									</td>
																								</tr>
																								<tr>
																									<td height="30"></td>
																								</tr>
																								<tr>
																									<td valign="middle" align="center" style="font-size: 14px; color: #ffffff; line-height: 22px;">
																										Excepteur sint occaecat cupidatat non proident id est laborum.
																									</td>
																								</tr>
																								<tr>
																									<td height="20"></td>
																								</tr>
																								<tr>
																									<td align="center" style="font-size: 15px; color: #ffffff; line-height: 22px;">
																										<span style="font-weight: 700; font-size: 12px; text-transform: uppercase; color: #fff;">Cris Costo</span>
																									</td>
																								</tr>
																							</table>
																							<!-- /left table -->
																							

																							<!-- Space -->
																							<table width="1" border="0" cellpadding="0" cellspacing="0" align="left">
																								<tr>
																									<td width="100%" height="40"></td>
																								</tr>
																							</table>
																							<!-- /space -->
																							

																							<!-- Right table -->
																							<table width="275" border="0" cellpadding="0" cellspacing="0" align="right" style="border-radius: 4px;">
																								<tr>
																									<td width="100%" align="center">
																										<a href="#">
																											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" border="0" width="83" height="auto" style="border-radius: 100px;">
																										</a>
																									</td>
																								</tr>
																								<tr>
																									<td height="30"></td>
																								</tr>
																								<tr>
																									<td valign="middle" align="center" style="font-size: 14px; color: #ffffff; line-height: 22px;">
																										Sunt in culpa qui officia deserunt mollit anim id est laborum.
																									</td>
																								</tr>
																								<tr>
																									<td height="20"></td>
																								</tr>
																								<tr>
																									<td align="center" style="font-size: 15px; line-height: 22px;">
																										<span style="font-weight: 700; font-size: 12px; text-transform: uppercase; color: #ffffff;">Jason Kenny</span>
																									</td>
																								</tr>
																							</table>
																							<!-- /right table -->

																						</td>
																					</tr>
																				</table>
																				<!-- /testimonials -->

																			</td>
																		</tr>
																		<tr>
																			<td width="100%" height="50"></td>
																		</tr>
																	</table>
																</td>
															</tr>
														</table>
														<!-- /let our Clients Convince you -->


														<!-- Footer -->
														<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
															<tr>
																<td align="center" width="100%" valign="top" bgcolor="#344b61">	
																	
																	<!-- Wrapper -->
																	<table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
																		<tr>
																			<td width="100%" height="40" align="center" valign="middle" style="font-size: 12px; color: #aebecd;">
																				<a href="#" style="color: #ffffff;">Unsubscribe</a>
																				
																				<span style="color: #ffffff;">&nbsp;/&nbsp;</span>
																				
																				<a href="#" style="color: #ffffff;">Send to a friend</a>
																			</td>
																		</tr>
																	</table>
																	<!-- /wrapper -->

																</td>
															</tr>
														</table>
														<!-- /footer -->

													</td>
												</tr>
											</table>
											<!-- /email sample (demo) -->

										</div>
									</div>
								</div>
								<!-- /mail container -->


								<!-- Attachments -->
								<div class="card-body border-top">
									<h6 class="mb-0">2 Attachments</h6>

									<ul class="list-inline mb-0">
										<li class="list-inline-item">
											<div class="card bg-light py-2 px-3 mt-3 mb-0">
												<div class="media my-1">
													<div class="mr-3 align-self-center"><i class="icon-file-pdf icon-2x text-danger-400 top-0"></i></div>
													<div class="media-body">
														<div class="font-weight-semibold">new_december_offers.pdf</div>

														<ul class="list-inline list-inline-condensed mb-0">
															<li class="list-inline-item text-muted">174 KB</li>
															<li class="list-inline-item"><a href="#">View</a></li>
															<li class="list-inline-item"><a href="#">Download</a></li>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li class="list-inline-item">
											<div class="card bg-light py-2 px-3 mt-3 mb-0">
												<div class="media my-1">
													<div class="mr-3 align-self-center"><i class="icon-file-pdf icon-2x text-danger-400 top-0"></i></div>
													<div class="media-body">
														<div class="font-weight-semibold">assignment_letter.pdf</div>

														<ul class="list-inline list-inline-condensed mb-0">
															<li class="list-inline-item text-muted">736 KB</li>
															<li class="list-inline-item"><a href="#">View</a></li>
															<li class="list-inline-item"><a href="#">Download</a></li>
														</ul>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- /attachments -->

							</div>
							<!-- /single mail -->

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
