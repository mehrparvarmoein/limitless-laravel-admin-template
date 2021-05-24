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
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/effects.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/widgets.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/touch.min.js"></script>
	<script src="../../../../global_assets/js/plugins/sliders/slider_pips.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/duallistbox/duallistbox_rtl.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="../../../../global_assets/js/plugins/pickers/daterangepicker.js"></script>
	<script src="../../../../global_assets/js/plugins/media/fancybox.min.js"></script>
	<script src="../../../../global_assets/js/plugins/trees/fancytree_all.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>
	<script src="../../../../global_assets/js/plugins/pickers/color/spectrum.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/sidebar_components.js"></script>
	<!-- /Page JS files -->

</head>

<body class="sidebar-xs">

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
		<div class="navbar-brand">
			<a href="index" class="d-inline-block">
				<img src="../../../../global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-secondary-toggle" type="button">
				<i class="icon-more"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-secondary-toggle d-none d-md-block">
						<i class="icon-transmission"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-git-compare"></i>
						<span class="d-md-none ml-2">Git updates</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
					</a>

					<div class="dropdown-menu dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Git updates</span>
							<a href="#" class="text-default"><i class="icon-sync"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon">
											<i class="icon-git-pull-request"></i>
										</a>
									</div>

									<div class="media-body">
										Drop the IE <a href="#">specific hacks</a> for temporal inputs
										<div class="text-muted font-size-sm">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon">
											<i class="icon-git-commit"></i>
										</a>
									</div>
									
									<div class="media-body">
										Add full font overrides for popovers and tooltips
										<div class="text-muted font-size-sm">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon">
											<i class="icon-git-branch"></i>
										</a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
										<div class="text-muted font-size-sm">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon">
											<i class="icon-git-merge"></i>
										</a>
									</div>
									
									<div class="media-body">
										<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
										<div class="text-muted font-size-sm">Dec 18, 18:36</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon">
											<i class="icon-git-pull-request"></i>
										</a>
									</div>
									
									<div class="media-body">
										Have Carousel ignore keyboard events
										<div class="text-muted font-size-sm">Dec 12, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All updates</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
							</div>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<i class="icon-make-group mr-2"></i>
						Connect
					</a>

					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-body p-2">
							<div class="row no-gutters">
								<div class="col-12 col-sm-4">
									<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
										<i class="icon-github4 icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Github</div>
									</a>

									<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
										<i class="icon-dropbox text-blue-400 icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dropbox</div>
									</a>
								</div>
								
								<div class="col-12 col-sm-4">
									<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
										<i class="icon-dribbble3 text-pink-400 icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dribbble</div>
									</a>

									<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
										<i class="icon-google-drive text-success-400 icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Drive</div>
									</a>
								</div>

								<div class="col-12 col-sm-4">
									<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
										<i class="icon-twitter text-info-400 icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Twitter</div>
									</a>

									<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
										<i class="icon-youtube text-danger icon-2x"></i>
										<div class="font-size-sm font-weight-semibold text-uppercase mt-2">Youtube</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<i class="icon-pulse2 mr-2"></i>
						Activity
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Latest activity</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-success-400 rounded-round btn-icon"><i class="icon-mention"></i></a>
									</div>

									<div class="media-body">
										<a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
										<div class="font-size-sm text-muted mt-1">4 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-pink-400 rounded-round btn-icon"><i class="icon-paperplane"></i></a>
									</div>
									
									<div class="media-body">
										Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
										<div class="font-size-sm text-muted mt-1">36 minutes ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-blue rounded-round btn-icon"><i class="icon-plus3"></i></a>
									</div>
									
									<div class="media-body">
										<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch in <span class="font-weight-semibold">Limitless</span> repository
										<div class="font-size-sm text-muted mt-1">2 hours ago</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-purple-300 rounded-round btn-icon"><i class="icon-truck"></i></a>
									</div>
									
									<div class="media-body">
										Shipping cost to the Netherlands has been reduced, database updated
										<div class="font-size-sm text-muted mt-1">Feb 8, 11:30</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-warning-400 rounded-round btn-icon"><i class="icon-comment"></i></a>
									</div>
									
									<div class="media-body">
										New review received on <a href="#">Server side integration</a> services
										<div class="font-size-sm text-muted mt-1">Feb 2, 10:20</div>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#" class="btn bg-teal-400 rounded-round btn-icon"><i class="icon-spinner11"></i></a>
									</div>
									
									<div class="media-body">
										<strong>January, 2018</strong> - 1320 new users, 3284 orders, $49,390 revenue
										<div class="font-size-sm text-muted mt-1">Feb 1, 05:46</div>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="font-size-sm line-height-sm text-uppercase font-weight-semibold text-grey mr-auto">All activity</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Clear list"><i class="icon-checkmark3"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-gear"></i></a>
							</div>
						</div>
					</div>
				</li>

				<li class="nav-item">
					<a href="#" class="navbar-nav-link">
						<i class="icon-switch2"></i>
						<span class="d-md-none ml-2">Logout</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		@include('layouts.sidebar')
		<!-- /main sidebar -->


		<!-- Secondary sidebar -->
		<div class="sidebar sidebar-light sidebar-secondary sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler bg-slate-800 text-center">
				<a href="#" class="sidebar-mobile-secondary-toggle">
					<i class="icon-arrow-right8"></i>
				</a>
				<span class="font-weight-semibold">Secondary sidebar</span>
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- Sidebar tabs -->
				<div class="sortable">
					<ul class="nav nav-tabs nav-justified">
						<li class="nav-item">
							<a href="#components-tab" class="nav-link" data-toggle="tab">
								<i class="icon-grid-alt"></i>
							</a>
						</li>

						<li class="nav-item">
							<a href="#forms-tab" class="nav-link" data-toggle="tab">
								<i class="icon-menu6"></i>
							</a>
						</li>

						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
								<i class="icon-grid5"></i>
							</a>

							<div class="dropdown-menu dropdown-menu-right">
								<a href="#other-tab" class="dropdown-item" data-toggle="tab"><i class="icon-task"></i> Other elements</a>
								<a href="#custom-tab" class="dropdown-item" data-toggle="tab"><i class="icon-googleplus5"></i> Custom content</a>
							</div>
						</li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane fade active show" id="components-tab">

							<!-- Block buttons -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Block buttons</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<div class="row">
										<div class="col">
											<button type="button" class="btn bg-teal-400 btn-block btn-float">
												<i class="icon-git-branch icon-2x"></i>
												<span>Branch</span>
											</button>

											<button type="button" class="btn bg-purple-300 btn-block btn-float">
												<i class="icon-mail-read icon-2x"></i>
												<span>Messages</span>
											</button>
										</div>
										
										<div class="col">
											<button type="button" class="btn bg-warning-400 btn-block btn-float">
												<i class="icon-stats-bars icon-2x"></i>
												<span>Statistics</span>
											</button>

											<button type="button" class="btn bg-blue btn-block btn-float">
												<i class="icon-people icon-2x"></i>
												<span>Users</span>
											</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /block buttons -->


							<!-- Light buttons tile -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Light buttons tile</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<div class="row row-tile no-gutters shadow-0 border">
										<div class="col-6">
											<button type="button" class="btn btn-light btn-block btn-float m-0">
												<i class="icon-github4 icon-2x"></i>
												<span>Github</span>
											</button>

											<button type="button" class="btn btn-light btn-block btn-float m-0">
												<i class="icon-dropbox text-blue-400 icon-2x"></i>
												<span>Dropbox</span>
											</button>
										</div>
										
										<div class="col-6">
											<button type="button" class="btn btn-light btn-block btn-float m-0">
												<i class="icon-dribbble3 text-pink-400 icon-2x"></i>
												<span>Dribbble</span>
											</button>

											<button type="button" class="btn btn-light btn-block btn-float m-0">
												<i class="icon-google-drive text-success-400 icon-2x"></i>
												<span>Google Drive</span>
											</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /light buttons tile -->


							<!-- Dark buttons tile -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Dark buttons tile</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<div class="row row-tile no-gutters">
										<div class="col-6">
											<button type="button" class="btn btn-dark border-light-alpha btn-block btn-float border-top-0 border-left-0 m-0">
												<i class="icon-firefox text-warning-600 icon-2x"></i>
												<span>Firefox</span>
											</button>

											<button type="button" class="btn btn-dark border-light-alpha btn-block btn-float m-0 border-bottom-0 border-left-0">
												<i class="icon-chrome text-success-400 icon-2x"></i>
												<span>Chrome</span>
											</button>
										</div>
										
										<div class="col-6">
											<button type="button" class="btn btn-dark border-light-alpha btn-block btn-float m-0 border-top-0 border-right-0">
												<i class="icon-IE text-blue icon-2x"></i>
												<span>Edge</span>
											</button>

											<button type="button" class="btn btn-dark border-light-alpha btn-block btn-float m-0 border-bottom-0 border-right-0">
												<i class="icon-opera text-danger-400 icon-2x"></i>
												<span>Opera</span>
											</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /dark buttons tile -->


							<!-- Daterange picker -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Daterange picker</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body text-center">
									<div class="daterange-custom d-flex align-items-center justify-content-center" id="reportrange">
										<div class="daterange-custom-display"></div>
										<span class="badge badge-danger badge-pill ml-2">36</span>
									</div>
								</div>
							</div>
							<!-- /daterange picker -->


							<!-- Sub navigation -->
							<div class="card mb-2">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Navigation</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body p-0">
									<ul class="nav nav-sidebar" data-nav-type="accordion">
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link">
												<i class="icon-menu3"></i>
												Navbars
												<span class="badge bg-blue-400 ml-auto">New</span>
											</a>
											<ul class="nav nav-group-sub" data-submenu-title="Navbars">
												<li class="nav-item"><a href="navbar_single" class="nav-link">Single navbar</a></li>
												<li class="nav-item"><a href="navbar_multiple_navbar_navbar" class="nav-link">Navbar + navbar</a></li>
												<li class="nav-item"><a href="navbar_multiple_navbar_header" class="nav-link">Navbar + header</a></li>
												<li class="nav-item"><a href="navbar_multiple_header_navbar" class="nav-link">Header + navbar</a></li>
												<li class="nav-item"><a href="navbar_multiple_top_bottom" class="nav-link">Top + bottom</a></li>
											</ul>
										</li>
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
											<ul class="nav nav-group-sub" data-submenu-title="Vertical navigation">
												<li class="nav-item"><a href="navigation_vertical_collapsible" class="nav-link">Collapsible menu</a></li>
												<li class="nav-item"><a href="navigation_vertical_accordion" class="nav-link">Accordion menu</a></li>
												<li class="nav-item"><a href="navigation_vertical_bordered" class="nav-link">Bordered navigation</a></li>
												<li class="nav-item"><a href="navigation_vertical_right_icons" class="nav-link">Right icons</a></li>
												<li class="nav-item"><a href="navigation_vertical_badges" class="nav-link">Badges</a></li>
												<li class="nav-item"><a href="navigation_vertical_disabled" class="nav-link">Disabled items</a></li>
											</ul>
										</li>
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link">
												<i class="icon-transmission"></i>
												Horizontal navigation
												<span class="badge bg-pink-400 badge-pill ml-auto">5</span>
											</a>
											<ul class="nav nav-group-sub" data-submenu-title="Horizontal navigation">
												<li class="nav-item"><a href="navigation_horizontal_click" class="nav-link">Submenu on click</a></li>
												<li class="nav-item"><a href="navigation_horizontal_hover" class="nav-link">Submenu on hover</a></li>
												<li class="nav-item"><a href="navigation_horizontal_elements" class="nav-link">With custom elements</a></li>
												<li class="nav-item"><a href="navigation_horizontal_tabs" class="nav-link">Tabbed navigation</a></li>
												<li class="nav-item"><a href="navigation_horizontal_disabled" class="nav-link">Disabled navigation links</a></li>
												<li class="nav-item"><a href="navigation_horizontal_mega" class="nav-link">Horizontal mega menu</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<!-- /sub navigation -->


							<!-- Thumbnails -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Thumbnails</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<div class="mb-2">
										<div class="card-img-actions">
											<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
												<img class="card-img img-thumbnail img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
												<span class="card-img-actions-overlay card-img">
													<i class="icon-plus3"></i>
												</span>
											</a>
										</div>
									</div>

									<div class="row">
										<div class="col">
											<div class="mb-2">
												<div class="card-img-actions">
													<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
														<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
														<span class="card-img-actions-overlay card-img">
															<i class="icon-plus3"></i>
														</span>
													</a>
												</div>
											</div>

											<div class="mb-2">
												<div class="card-img-actions">
													<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
														<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
														<span class="card-img-actions-overlay card-img">
															<i class="icon-plus3"></i>
														</span>
													</a>
												</div>
											</div>
										</div>

										<div class="col">
											<div class="mb-2">
												<div class="card-img-actions">
													<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
														<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
														<span class="card-img-actions-overlay card-img">
															<i class="icon-plus3"></i>
														</span>
													</a>
												</div>
											</div>

											<div class="mb-2">
												<div class="card-img-actions">
													<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
														<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
														<span class="card-img-actions-overlay card-img">
															<i class="icon-plus3"></i>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /thumbnails -->


							<!-- Pickers -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Pickers</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<label>Color picker:</label>
											<input type="text" class="form-control colorpicker-flat-full" data-preferred-format="hex" value="#45818e" data-fouc>
										</div>

										<div class="form-group">
											<label>Date picker:</label>
											<div class="input-group">
												<span class="input-group-prepend">
													<span class="input-group-text"><i class="icon-calendar"></i></span>
												</span>
												<input type="text" class="form-control datepicker" placeholder="Pick a date&hellip;">
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /pickers -->


							<!-- Rounded buttons -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Rounded buttons</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body text-center">
									<ul class="list-inline list-inline-condensed m-0">
										<li class="list-inline-item">
											<a href="#" class="btn btn-primary btn-float rounded-round">
												<i class="icon-facebook"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a href="#" class="btn btn-success btn-float rounded-round">
												<i class="icon-google-drive"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a href="#" class="btn btn-warning btn-float rounded-round">
												<i class="icon-feed2"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- /rounded buttons -->


							<!-- Progress bars -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Progress bars</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<div class="mb-3">
										<div class="progress">
											<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 15%">
												<span class="sr-only">15% Complete</span>
											</div>
										</div>
									</div>

									<div class="mb-3">
										<div class="progress" style="height: 0.875rem;">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 30%">
												<span class="sr-only">30% Complete</span>
											</div>
										</div>
									</div>

									<div class="mb-3">
										<div class="progress" style="height: 0.625rem;">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 45%">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
									</div>

									<div class="mb-3">
										<div class="progress" style="height: 0.375rem;">
											<div class="progress-bar bg-info" style="width: 60%">
												<span class="sr-only">60% Complete</span>
											</div>
										</div>
									</div>

									<div class="progress" style="height: 0.125rem;">
										<div class="progress-bar bg-teal-300" style="width: 75%">
											<span class="sr-only">75% Complete</span>
										</div>
									</div>
								</div>
							</div>
							<!-- /progress bars -->


							<!-- Collapsible -->
							<div class="card mb-3">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Collapsible</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

									<div class="card mb-0 rounded-0 border-x-0 border-top-0">
										<div class="card-header">
											<div class="card-title">
												<a class="text-default font-weight-semibold" data-toggle="collapse" href="#collapsible-item-group1">Collapsible Item #1</a>
											</div>
										</div>

										<div id="collapsible-item-group1" class="collapse show">
											<div class="card-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
											</div>
										</div>
									</div>

									<div class="card mb-0 rounded-0 border-0">
										<div class="card-header">
											<div class="card-title">
												<a class="collapsed text-default font-weight-semibold" data-toggle="collapse" href="#collapsible-item-group2">Collapsible Item #2</a>
											</div>
										</div>

										<div id="collapsible-item-group2" class="collapse">
											<div class="card-body">
												Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod 3 wolf moon.
											</div>
										</div>
									</div>

									<div class="card mb-0 rounded-0 border-x-0">
										<div class="card-header">
											<div class="card-title">
												<a class="collapsed text-default font-weight-semibold" data-toggle="collapse" href="#collapsible-item-group3">Collapsible Item #3</a>
											</div>
										</div>

										<div id="collapsible-item-group3" class="collapse">
											<div class="card-body">
												3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck.
											</div>
										</div>
									</div>
							</div>
							<!-- /collapsible -->


							<!-- Buttons -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Buttons</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body text-center">
									<div class="mb-2">
										<button type="button" class="btn bg-slate-700 btn-block">Block button</button>
									</div>

									<div class="mb-2">
										<button type="button" class="btn btn-danger btn-labeled btn-labeled-left">
											<b><i class="icon-task"></i></b>
											Labeled button
										</button>
									</div>

									<div class="mb-2">
										<button class="btn bg-info" type="button">
											With icon <i class="icon-menu7 ml-2"></i>
										</button>
									</div>

									<div class="mb-2">
										<div class="btn-group">
											<button type="button" class="btn bg-success-400 dropdown-toggle" data-toggle="dropdown">Button dropdown</button>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">One more separated line</a>
											</div>
										</div>
									</div>

									<div class="mb-2">
										<div class="btn-group">
				                        	<button class="btn bg-primary btn-icon"><i class="icon-pin-alt"></i></button>
			                                <button class="btn bg-primary dropdown-toggle" data-toggle="dropdown"></button>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">One more separated line</a>
											</div>
			                            </div>
		                            </div>

		                            <div class="mb-2">
			                            <button class="btn bg-warning-400 rounded-round" type="button">
				                            Rounded button <i class="icon-arrow-right8 ml-2"></i>
			                            </button>
		                            </div>

									<div class="row">
										<div class="col"><button type="button" class="btn bg-teal btn-block">Grid</button></div>
										<div class="col"><button type="button" class="btn bg-purple btn-block">Buttons</button></div>
									</div>
								</div>
							</div>
							<!-- /buttons -->


							<!-- Accordion -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Accordion</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div id="accordion-group">
									<div class="card mb-0 rounded-0 border-x-0 border-top-0">
										<div class="card-header">
											<div class="card-title">
												<a class="text-default font-weight-semibold" data-toggle="collapse" href="#accordion-item-group1">Accordion Item #1</a>
											</div>
										</div>

										<div id="accordion-item-group1" class="collapse show" data-parent="#accordion-group">
											<div class="card-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
											</div>
										</div>
									</div>

									<div class="card mb-0 rounded-0 border-0">
										<div class="card-header">
											<div class="card-title">
												<a class="collapsed text-default font-weight-semibold" data-toggle="collapse" href="#accordion-item-group2">Accordion Item #2</a>
											</div>
										</div>

										<div id="accordion-item-group2" class="collapse" data-parent="#accordion-group">
											<div class="card-body">
												Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod 3 wolf moon.
											</div>
										</div>
									</div>

									<div class="card mb-0 rounded-0 border-x-0">
										<div class="card-header">
											<div class="card-title">
												<a class="collapsed text-default font-weight-semibold" data-toggle="collapse" href="#accordion-item-group3">Accordion Item #3</a>
											</div>
										</div>

										<div id="accordion-item-group3" class="collapse" data-parent="#accordion-group">
											<div class="card-body">
												3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck.
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /accordion -->

						</div>

						<div class="tab-pane fade" id="forms-tab">

							<!-- Sidebar search -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Sidebar search</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group-feedback form-group-feedback-right">
											<input type="search" class="form-control" placeholder="Search">
											<div class="form-control-feedback">
												<i class="icon-search4 font-size-base text-muted"></i>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /sidebar search -->


							<!-- Default selects -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Default selects</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<label>Single select:</label>
											<select class="form-control">
				                                <option value="opt1">Usual select box</option>
				                                <option value="opt2">Option 2</option>
				                                <option value="opt3">Option 3</option>
				                                <option value="opt4">Option 4</option>
				                                <option value="opt5">Option 5</option>
				                                <option value="opt6">Option 6</option>
				                                <option value="opt7">Option 7</option>
				                                <option value="opt8">Option 8</option>
				                            </select>
										</div>

										<div class="form-group">
											<label>Multiple select:</label>
											<select multiple="multiple" class="form-control">
				                                <option selected>Amsterdam</option>      
				                                <option selected>Atlanta</option>
				                                <option>Baltimore</option>
				                                <option>Boston</option>
				                                <option>Buenos Aires</option>
				                                <option>Calgary</option>
				                                <option selected>Chicago</option>
				                                <option>Denver</option>
				                                <option>Dubai</option>
				                                <option>Frankfurt</option>
				                                <option>Hong Kong</option>
				                                <option>Honolulu</option>
				                            </select>
										</div>
									</form>
								</div>
							</div>
							<!-- /default selects -->


							<!-- Select2 selects -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Select2 selects</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<label>Single Select:</label>
											<select class="form-control form-control-select2" data-fouc>
												<optgroup label="Alaskan/Hawaiian Time Zone">
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="NV">Nevada</option>
													<option value="OR">Oregon</option>
													<option value="WA">Washington</option>
												</optgroup>
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
													<option value="WY">Wyoming</option>
												</optgroup>
											</select>
										</div>

										<div class="form-group">
											<label>Multiple Select:</label>
											<select class="form-control form-control-select2" multiple="multiple" data-fouc>
												<optgroup label="Alaskan/Hawaiian Time Zone">
													<option value="AK">Alaska</option>
													<option value="HI" selected>Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="NV" selected>Nevada</option>
													<option value="OR">Oregon</option>
													<option value="WA">Washington</option>
												</optgroup>
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
													<option value="WY">Wyoming</option>
												</optgroup>
											</select>
										</div>
									</form>
								</div>
							</div>
							<!-- /select2 selects -->


							<!-- Multiselect -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Multiselect</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<label>Single select:</label>
											<select class="form-control form-control-multiselect" data-fouc>
												<option value="cheese">Cheese</option>
												<option value="tomatoes">Tomatoes</option>
												<option value="mozarella">Mozzarella</option>
												<option value="mushrooms">Mushrooms</option>
												<option value="pepperoni">Pepperoni</option>
												<option value="onions">Onions</option>
											</select>
										</div>

										<div class="form-group">
											<label>Multiple select:</label>
											<select class="form-control form-control-multiselect" multiple="multiple" data-fouc>
												<option value="cheese">Cheese</option>
												<option value="tomatoes">Tomatoes</option>
												<option value="mozarella" selected>Mozzarella</option>
												<option value="mushrooms">Mushrooms</option>
												<option value="pepperoni">Pepperoni</option>
												<option value="onions" selected>Onions</option>
											</select>
										</div>
									</form>
								</div>
							</div>
							<!-- /multiselect -->


							<!-- Other selects -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Other selects</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<label>Custom select:</label>
											<select class="custom-select">
												<option value="branch" data-icon="icon-git-branch">Branch</option>
												<option value="commit" data-icon="icon-git-commit">Commit</option>
												<option value="compare" data-icon="icon-git-compare">Compare</option>
												<option value="merge" data-icon="icon-git-merge">Merge</option>
												<option value="request" data-icon="icon-git-pull-request">Pull request</option>
												<option value="forked" data-icon="icon-repo-forked" selected>Repo forked</option>
											</select>
										</div>

										<div class="form-group">
											<label>Uniform select:</label>
											<select class="form-control form-input-styled" data-fouc>
												<option value="branch" data-icon="icon-git-branch">Branch</option>
												<option value="commit" data-icon="icon-git-commit">Commit</option>
												<option value="compare" data-icon="icon-git-compare">Compare</option>
												<option value="merge" data-icon="icon-git-merge">Merge</option>
												<option value="request" data-icon="icon-git-pull-request">Pull request</option>
												<option value="forked" data-icon="icon-repo-forked">Repo forked</option>
											</select>
										</div>
									</form>
								</div>
							</div>
							<!-- /other selects -->


							<!-- Left checkbox group -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Left checkbox group</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Janet Cook
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													Michelle Brown
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Lauren Wood
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													Michael Johnson
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													Joseph Dixon
												</label>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /left checkbox group -->


							<!-- Left radio group -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Left radio group</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" name="radio-group" class="form-input-styled" data-fouc>
													Elise Parkes
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" name="radio-group" class="form-input-styled" data-fouc>
													Sofia Fuller
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" name="radio-group" class="form-input-styled" checked data-fouc>
													Nicholas Blackburn
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" name="radio-group" class="form-input-styled" data-fouc>
													Max Brennan
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" name="radio-group" class="form-input-styled" data-fouc>
													Cameron Allan
												</label>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /left radio group -->


							<!-- Right checkbox group -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Right checkbox group</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<div class="form-check form-check-right">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													Chris Wallace
												</label>
											</div>

											<div class="form-check form-check-right">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													Brittany Clark
												</label>
											</div>

											<div class="form-check form-check-right">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Michael Langer
												</label>
											</div>

											<div class="form-check form-check-right">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													Jennifer Garcia
												</label>
											</div>

											<div class="form-check form-check-right">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Daniel Andersen
												</label>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /right checkbox group -->


							<!-- Right radio group -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Right radio group</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<div class="form-check form-check-right">
												<label class="form-check-label">
													<input type="radio" name="radio-group" class="form-input-styled" data-fouc>
													Daisy Moods
												</label>
											</div>

											<div class="form-check form-check-right">
												<label class="form-check-label">
													<input type="radio" name="radio-group" class="form-input-styled" data-fouc>
													Madeleine Bruce
												</label>
											</div>

											<div class="form-check form-check-right">
												<label class="form-check-label">
													<input type="radio" name="radio-group" class="form-input-styled" checked data-fouc>
													David Patterson
												</label>
											</div>

											<div class="form-check form-check-right">
												<label class="form-check-label">
													<input type="radio" name="radio-group" class="form-input-styled" data-fouc>
													Bethany Hold
												</label>
											</div>

											<div class="form-check form-check-right">
												<label class="form-check-label">
													<input type="radio" name="radio-group" class="form-input-styled" data-fouc>
													Eleanor Charltons
												</label>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /right radio group -->


							<!-- File inputs -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">File inputs</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<label>Styled file input:</label>
											<input type="file" class="form-input-styled" data-fouc>
										</div>

										<div class="form-group">
											<label>Default file input:</label>
											<input type="file" class="form-control h-auto">
										</div>
									</form>
								</div>
							</div>
							<!-- /file inputs -->


							<!-- Input groups -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Input groups</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<label>Input group example:</label>
											<div class="input-group">
												<span class="input-group-prepend">
													<span class="input-group-text"><i class="icon-spinner3 spinner"></i></span>
												</span>
												<input type="text" class="form-control" placeholder="Input group">
												<div class="input-group-append">
													<button type="button" class="btn btn-light btn-icon dropdown-toggle" data-toggle="dropdown"></button>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item">Action</a>
														<a href="#" class="dropdown-item">Another action</a>
														<a href="#" class="dropdown-item">Something else here</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item">One more separated line</a>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /input groups -->


							<!-- Switchery group -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Switchery group</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<div class="form-check form-check-right form-check-switchery">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-switchery" checked data-fouc>
													Free People
												</label>	
											</div>

											<div class="form-check form-check-right form-check-switchery">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-switchery" data-fouc>
													GAP
												</label>
											</div>

											<div class="form-check form-check-right form-check-switchery">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-switchery" checked data-fouc>
													Lane Bryant
												</label>
											</div>

											<div class="form-check form-check-right form-check-switchery">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-switchery" checked data-fouc>
													Ralph Lauren
												</label>
											</div>

											<div class="form-check form-check-right form-check-switchery">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-switchery" data-fouc>
													Liz Claiborne
												</label>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /switchery group -->


							<!-- Form sample -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Form example</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<label>Your name:</label>
											<input type="text" class="form-control" placeholder="Username">
										</div>

										<div class="form-group">
											<label>Your password:</label>
											<input type="password" class="form-control" placeholder="Password">
										</div>

										<div class="form-group">
											<label>Your message:</label>
											<textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
										</div>

										<div class="row">
											<div class="col-6">
												<button type="reset" class="btn btn-danger btn-block">Reset</button>
											</div>
											<div class="col-6">
												<button type="submit" class="btn btn-info btn-block">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /form sample -->

						</div>

						<div class="tab-pane fade" id="other-tab">

							<!-- Closable section -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Closable section</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="remove"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="list mb-0 pl-3">
										<li>It wasn't actually a dream</li>
										<li>A collection of textile samples</li>
										<li>I've got the money together</li>
									</ul>
								</div>
							</div>
							<!-- /closable section -->


							<!-- Sortable section -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Sortable section</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="move"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="list mb-0 pl-3">
										<li>I've got the money together</li>
										<li>That's definitely what I'll do</li>
										<li>What should he do now?</li>
									</ul>
								</div>
							</div>
							<!-- /sortable section -->


							<!-- Updatable section -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Updatable section</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="reload"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="list mb-0 pl-3">
										<li>A collection of textile samples</li>
										<li>I've got the money together</li>
										<li>That's definitely what I'll do</li>
									</ul>
								</div>
							</div>
							<!-- /updatable section -->


							<!-- Combined controls -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Combined controls</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="list mb-0 pl-3">
										<li>That's definitely what I'll do</li>
										<li>What should he do now?</li>
										<li>A collection of textile samples</li>
									</ul>
								</div>
							</div>
							<!-- /combined controls -->


							<!-- Dual listbox -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Dual listbox</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<select multiple="multiple" class="form-control form-control-listbox" data-fouc>
											<option value="option1">Option 1</option>
											<option value="option2">Option 2</option>
											<option value="option4">Option 4</option>
											<option value="option5">Option 5</option>
											<option value="option7">Option 7</option>
											<option value="option8" selected>Option 8</option>
											<option value="option9">Option 9</option>
											<option value="option10">Option 10</option>
											<option value="option11">Option 11</option>
											<option value="option12">Option 12</option>
											<option value="option13">Option 13</option>
											<option value="option14" selected>Option 14</option>
											<option value="option15">Option 15</option>
											<option value="option16" selected>Option 16</option>
											<option value="option17">Option 17</option>
											<option value="option18" selected>Option 18</option>
											<option value="option19">Option 19</option>
											<option value="option20">Option 20</option>
										</select>
									</form>
								</div>
							</div>
							<!-- /dual listbox -->


							<!-- Progress list -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Progress list</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="list-unstyled mb-0">
							            <li class="mb-3">
							                <div class="d-flex align-items-center mb-1">CPU usage <span class="text-muted ml-auto">50%</span></div>
											<div class="progress" style="height: 0.125rem;">
												<div class="progress-bar bg-info" style="width: 50%">
													<span class="sr-only">50% Complete</span>
												</div>
											</div>
							            </li>

							            <li class="mb-3">
							                <div class="d-flex align-items-center mb-1">RAM usage <span class="text-muted ml-auto">70%</span></div>
											<div class="progress" style="height: 0.125rem;">
												<div class="progress-bar bg-danger" style="width: 70%">
													<span class="sr-only">70% Complete</span>
												</div>
											</div>
							            </li>

							            <li class="mb-3">
							                <div class="d-flex align-items-center mb-1">Disc space <span class="text-muted ml-auto">80%</span></div>
											<div class="progress" style="height: 0.125rem;">
												<div class="progress-bar bg-success" style="width: 80%">
													<span class="sr-only">80% Complete</span>
												</div>
											</div>
							            </li>

							            <li>
							                <div class="d-flex align-items-center mb-1">Bandwidth <span class="text-muted ml-auto">60%</span></div>
											<div class="progress" style="height: 0.125rem;">
												<div class="progress-bar bg-primary" style="width: 60%">
													<span class="sr-only">60% Complete</span>
												</div>
											</div>
							            </li>
							        </ul>
								</div>
							</div>
							<!-- /progress list -->


							<!-- Horizontal sliders -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Horizontal sliders</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<label class="mb-2">Default slider</label>
											<div class="ui-slider-range ui-slider-danger ui-slider-sm" data-fouc></div>
										</div>

										<div class="form-group">
											<label class="mb-2">Slider with pips</label>
											<div class="ui-slider-labels ui-slider-info ui-slider-sm" data-fouc></div>
										</div>
									</form>
								</div>
							</div>
							<!-- /horizontal sliders -->


							<!-- Vertical sliders -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Vertical sliders</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body text-center">
									<div class="ui-slider-vertical-pips vertical-pips">
										<span class="ui-slider-success ui-slider-sm" data-fouc>2</span>
										<span class="ui-slider-danger ui-slider-sm" data-fouc>4</span>
										<span class="ui-slider-info ui-slider-sm" data-fouc>6</span>
									</div>
								</div>
							</div>
							<!-- /vertical sliders -->


							<!-- Dynamic tree -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Dynamic tree</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body tree-default">
									<ul class="d-none mb-0">
										<li class="folder expanded">Expanded folder
											<ul>
												<li class="expanded">Expanded sub-item
													<ul>
														<li class="active focused">Active sub-item</li>
														<li>Basicmenu item</li>
													</ul>
												</li>
												<li>Collapsed sub-item
													<ul>
														<li>Sub-item 2.2.1</li>
														<li>Sub-item 2.2.2</li>
													</ul>
												</li>
											</ul>
										</li>
										<li>Menu item</li>
										<li class="folder">Collapsed folder
											<ul>
												<li>Sub-item 1.1</li>
												<li>Sub-item 1.2</li>
											</ul>
										</li>
										<li class="selected">This is a selected item</li>
										<li class="expanded">Document with children
											<ul>
												<li>Document sub-item</li>
												<li>Another sub-item
													<ul>
														<li>Sub-item 2.1.1</li>
														<li>Sub-item 2.1.2</li>
													</ul>
												</li>
											</ul>
										</li>	
									</ul>
								</div>
							</div>
							<!-- /dynamic tree -->

						</div>

						<div class="tab-pane fade" id="custom-tab">

							<!-- User list -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Media list</span>
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
												<a href="#" class="media-title font-weight-semibold">James Alexander</a>
												<div class="font-size-sm text-muted">Santa Ana, CA.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-success"></span>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">Jeremy Victorino</a>
												<div class="font-size-sm text-muted">Dowagiac, MI.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-danger"></span>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">Margo Baker</a>
												<div class="font-size-sm text-muted">Kasaan, AK.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-success"></span>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">Beatrix Diaz</a>
												<div class="font-size-sm text-muted">Neenah, WI.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-warning"></span>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">Richard Vango</a>
												<div class="font-size-sm text-muted">Grapevine, TX.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-grey-400"></span>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /user list -->


							<!-- Linked user list -->
							<div class="card mb-2">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Linked user list</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<ul class="media-list media-list-linked">
									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</div>
											<div class="media-body">
												<span class="media-title font-weight-semibold">Will Baker</span>
												<div class="font-size-sm text-muted">Santa Ana, CA.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark bg-success border-success"></span>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</div>
											<div class="media-body">
												<span class="media-title font-weight-semibold">Joseph Mills</span>
												<div class="font-size-sm text-muted">Dowagiac, MI.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark bg-danger border-danger"></span>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</div>
											<div class="media-body">
												<span class="media-title font-weight-semibold">Buzz Brenson</span>
												<div class="font-size-sm text-muted">Kasaan, AK.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark bg-success border-success"></span>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</div>
											<div class="media-body">
												<span class="media-title font-weight-semibold">Zachary Willson</span>
												<div class="font-size-sm text-muted">Neenah, WI.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark bg-warning border-warning"></span>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</div>
											<div class="media-body">
												<span class="media-title font-weight-semibold">Bastian Miller</span>
												<div class="font-size-sm text-muted">Grapevine, TX.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark bg-grey-400 border-grey-400"></span>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<!-- /linked user list -->


							<!-- Conversation -->
							<div class="card mb-2">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Conversation</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<ul class="media-list media-list-linked">
									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</div>
											<div class="media-body">
												<span class="media-title font-weight-semibold">Will Samuel</span>
												<div class="text-muted">And he looked over at the alarm clock, ticking..</div>
												<div class="font-size-sm text-muted mt-1"><i class="icon-checkmark2"></i>&nbsp; Just now</div>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</div>
											<div class="media-body">
												<span class="media-title font-weight-semibold">Margo Baker</span>
												<div class="text-muted">However hard he threw himself onto..</div>
												<div class="font-size-sm text-muted mt-1"><i class="icon-checkmark2"></i>&nbsp; 6 minutes ago</div>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</div>
											<div class="media-body">
												<span class="media-title font-weight-semibold">Monica Smith</span>
												<div class="text-muted">Yes, but was it possible to quietly sleep through..</div>
												<div class="font-size-sm text-muted mt-1"><i class="icon-checkmark2"></i>&nbsp; Yesterday</div>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</div>
											<div class="media-body">
												<span class="media-title font-weight-semibold">Jordana Mills</span>
												<div class="text-muted">What should he do now? The next train went at..</div>
												<div class="font-size-sm text-muted mt-1"><i class="icon-checkmark2"></i>&nbsp; Monday</div>
											</div>
										</a>
									</li>

									<li>
										<a href="#" class="media">
											<div class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</div>
											<div class="media-body">
												<span class="media-title font-weight-semibold">John Craving</span>
												<div class="text-muted">Gregor then turned to look out the window..</div>
												<div class="font-size-sm text-muted mt-1"><i class="icon-checkmark2"></i>&nbsp; Jan 24, 14:50</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<!-- /conversation -->


							<!-- Action link -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Action links</span>
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

											<div class="media-body align-self-center">
												Victoria Mongerini
											</div>

											<div class="ml-3 align-self-center">
												<a href="#" class="text-default"><i class="icon-comment-discussion"></i></a>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3 position-relative">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
												<span class="badge bg-warning badge-pill badge-float border-2 border-white">8</span>
											</a>

											<div class="media-body align-self-center">
												Sarah Clifferson
											</div>

											<div class="ml-3 align-self-center">
												<a href="#" class="text-default"><i class="icon-comment-discussion"></i></a>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body align-self-center">
												Shane Brigger
											</div>

											<div class="ml-3 align-self-center">
												<a href="#" class="text-default"><i class="icon-comment-discussion"></i></a>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body align-self-center">
												Aaron Statement
											</div>

											<div class="ml-3 align-self-center">
												<a href="#" class="text-default"><i class="icon-comment-discussion"></i></a>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body align-self-center">
												Jeff Stickson
											</div>

											<div class="ml-3 align-self-center">
												<a href="#" class="text-default"><i class="icon-comment-discussion"></i></a>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /action link -->


							<!-- Action dropdown -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Action dropdown</span>
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

											<div class="media-body align-self-center">
												Rebecca Jameson
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu">
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

											<div class="media-body align-self-center">
												Walter Sommers
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu">
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

											<div class="media-body align-self-center">
												Otto Gerwald
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu">
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

											<div class="media-body align-self-center">
												Vince Satmann
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu">
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

											<div class="media-body align-self-center">
												Jason Leroy
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu">
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
							<!-- /action dropdown -->


							<!-- List with outline buttons -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Outline buttons list</span>
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
												<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon">
													<i class="icon-git-pull-request"></i>
												</a>
											</div>

											<div class="media-body">
												Drop the IE <a href="#">specific hacks</a> for temporal inputs
												<div class="text-muted font-size-sm">4 minutes ago</div>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon">
													<i class="icon-git-commit"></i>
												</a>
											</div>
											
											<div class="media-body">
												Add full font overrides for popovers and tooltips
												<div class="text-muted font-size-sm">36 minutes ago</div>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon">
													<i class="icon-git-branch"></i>
												</a>
											</div>
											
											<div class="media-body">
												<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
												<div class="text-muted font-size-sm">2 hours ago</div>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon">
													<i class="icon-git-merge"></i>
												</a>
											</div>
											
											<div class="media-body">
												<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
												<div class="text-muted font-size-sm">Dec 18, 18:36</div>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon">
													<i class="icon-git-pull-request"></i>
												</a>
											</div>
											
											<div class="media-body">
												Have Carousel ignore keyboard events
												<div class="text-muted font-size-sm">Dec 12, 05:46</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /list with outline -->

						</div>
					</div>
				</div>
			</div>
			<!-- /sidebar content -->

		</div>
		<!-- /secondary sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Sidebars</span> - Components</h4>
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
							<a href="sidebar_components" class="breadcrumb-item">Sidebars</a>
							<span class="breadcrumb-item active">Components</span>
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

				<!-- Info alert -->
				<div class="alert alert-info bg-white alert-styled-left alert-arrow-left alert-dismissible">
					<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
					<h6 class="alert-heading font-weight-semibold mb-1">Sidebar components</h6>
					This page contains a major part of components, adapted for usage in the sidebar: form components, navigation, UI components, plugins and custom widgets.
			    </div>
			    <!-- /info alert -->


				<!-- Sidebars overview -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Sidebars overview</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Sidebar - vertical area that displays onscreen and presents widget components and website navigation menu in a text-based hierarchical form. All sidebars are css-driven - just add one of css classes to the <code>body</code> tag and/or <code>.sidebar</code> container, and sidebar will change its width and color. No js, css only. Although sidebar type is based on css, buttons do their job with JS - they switch necessary classes in <code>&lt;body></code> tag. Below you'll find summarized tables with all available <code>button</code> and <code>sidebar</code> container classes. By default, the template includes 6 different sidebar types and combinations:</p>

						<div class="mb-3">
							<h6 class="font-weight-semibold">1. Default sidebar</h6>
							<p>Default template sidebar has <code>270px</code> (~16.88rem) width, aligned to the left (to the right in RTL version) and has dark blue background color. All navigation levels are based on accordion <strong>or</strong> collapsible functionality, open on click. Supports 2 versions: static and fixed. Fixed version can be used with native or custom scrollbars.</p>
						</div>

						<div class="mb-3">
							<h6 class="font-weight-semibold">2. Mini sidebar</h6>
							<p>Mini sidebar has <code>56px</code> width, which is calculated dynamically. No text in parent level of menu items, aligned to the left (to the right in RTL version) and has dark blue background color. Second navigation level opens on parent level hover, absolute positioned, other children levels are based on accordion or collapsible functionality, open on click. It is <strong>required</strong> to add <code>.sidebar-xs</code> class to the <code>&lt;body></code> tag. This class is responsible for sidebar width and main navigation. By default all components except main navigation are hidden in mini sidebar. Can be used with main sidebar only.</p>
						</div>

						<div class="mb-3">
							<h6 class="font-weight-semibold">3. Secondary sidebar</h6>
							<p>Main sidebar has <code>270px</code> width or <code>56px</code> (if <code>.sidebar-xs</code> class added). Secondary sidebar has fixed width of <code>270px</code>, which is similar to default and right sidebars, so different sidebar components can be placed to all sidebar types. Main and secondary sidebars can contain any content - menu, navigation, buttons, lists, tabs etc. Only main sidebar is collapsible.</p>
						</div>

						<div class="mb-3">
							<h6 class="font-weight-semibold">4. Right sidebar</h6>
							<p>Right sidebar includes additional sidebar displayed on the right (left in RTL direction) side. It has a static position, appears as an additional component with 100% height and pushes content left/right. There are 2 different ways of displaying alternative sidebar: first - when it collapses main sidebar from default to mini width and second - when it hides the main sidebar. For these actions are responsible 2 different buttons - <code>.sidebar-right-main-toggle</code> and <code>.sidebar-right-main-hide</code>.</p>
						</div>

						<div class="mb-3">
							<h6 class="font-weight-semibold">5. Right/Secondary sidebars</h6>
							<p>Secondary and Right sidebars can be used together, so basically it is a 4 column layout. When right sidebar is shown, additional options are available: hide main sidebar, hide secondary sidebar or collapse main sidebar width. Since right sidebar is hidden by default, you can display all 4 sidebars at once by manipulating classes. Options are accessible via proper button and/or body classes.</p>
						</div>

						<div class="mb-3">
							<h6 class="font-weight-semibold">6. Content (component) sidebar</h6>
							<p>Usually sidebar is not a part of content and mainly used for navigation. Limitless allows you to use sidebar outside and inside content area. Content sidebar isn't based on grid and has the same width as other sidebars, this means all sidebar components can be placed inside content sidebar. Supports left and right positioning and can be either stretched to fill all available height or height that depends on sidbar content height.</p>
						</div>
					</div>
				</div>
				<!-- /sidebars overview -->


				<!-- Button classes -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Button classes</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<h6 class="font-weight-semibold">Overview</h6>
						<p class="mb-3">This table displays all optional <code>button</code> classes, responsible for the sidebar appearance. Depending on the sidebar type, add one of these classes to any button or link and this element will handle sidebar control. Multiple controls are also available - add as many sidebar controls as you wish. Please note: these classes don't change sidebar markup, only CSS rules.</p>
						<div class="table-responsive mb-4">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th style="width: 300px;">Button class</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><code>.sidebar-main-toggle</code></td>
										<td>Collapsible sidebar. Changes main sidebar width from default to mini. This button is added to all pages by default.</td>
									</tr>
									<tr>
										<td><code>.sidebar-main-hide</code></td>
										<td>Hides and shows <code>main</code> sidebar. Used mostly in dual sidebar type to hide main sidebar. In other layouts this button does the same job as <code>.sidebar-hide-all</code> button.</td>
									</tr>
									<tr>
										<td><code>.sidebar-right-toggle</code></td>
										<td>Toggles right sidebar - if right sidebar is shown, main sidebar width remains the same, whether it's in default or mini mode.</td>
									</tr>
									<tr>
										<td><code>.sidebar-right-main-toggle</code></td>
										<td>Toggles right sidebar - if right sidebar is shown, main sidebar changes its width from default to mini and vice versa. Works with all sidebar layouts - main and main/secondary.</td>
									</tr>
									<tr>
										<td><code>.sidebar-right-main-hide</code></td>
										<td>Hides and shows <code>main</code> sidebar in layout with right sidebar. If right sidebar is shown, main sidebar is hidden despite current width.</td>
									</tr>
									<tr>
										<td><code>.sidebar-secondary-toggle</code></td>
										<td>Hides/shows <code>secondary</code> sidebar. Secondary sidebar supports only toggle functionality and always has fixed width of <code>270px</code>.</td>
									</tr>
									<tr>
										<td><code>.sidebar-right-secondary-hide</code></td>
										<td>Hides/shows <code>secondary</code> sidebar - if right sidebar is shown, secondary sidebar is hidden. This works only in the layout with right sidebar.</td>
									</tr>
									<tr>
										<td><code>.sidebar-component-toggle</code></td>
										<td>Hides/shows <code>content</code> sidebars. Content sidebars aren't connected with other sidebars, so this is the only button that controls their visibility.</td>
									</tr>
									<tr class="table-border-solid">
										<td><code>.sidebar-mobile-main-toggle</code></td>
										<td>Toggles <code>main</code> sidebar on mobile - slides from left to right.</td>
									</tr>
									<tr>
										<td><code>.sidebar-mobile-secondary-toggle</code></td>
										<td>Toggles <code>secondary</code> sidebar on mobile - slides from left to right.</td>
									</tr>
									<tr>
										<td><code>.sidebar-mobile-right-toggle</code></td>
										<td>Toggles <code>right</code> sidebar on mobile - slides from right to left.</td>
									</tr>
									<tr>
										<td><code>.sidebar-mobile-component-toggle</code></td>
										<td>Toggles <code>content</code> sidebar on mobile - has full width by default, has no animation.</td>
									</tr>
									<tr>
										<td><code>.sidebar-mobile-expand</code></td>
										<td>Expands sidebar to full width. Works only with main, secondary and right sidebars.</td>
									</tr>
								</tbody>
							</table>
						</div>

						<h6 class="font-weight-semibold">Example Markup</h6>
						<div class="row">
							<div class="col-md-6">
								<p>Default placement of sidebar control buttons is top navbar:</p>
								<pre class="language-markup mb-3" data-line="7-9"><code>&lt;!-- Navbar placement -->
&lt;div class="navbar navbar-expand navbar-dark">
	&lt;div class="navbar-brand">...&lt;/div>

	&lt;ul class="navbar-nav">
		&lt;li class="nav-item">
			&lt;a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle">
				&lt;i class="icon-menu">&lt;/i>
			&lt;/a>
		&lt;/li>
		...
	&lt;/ul>
&lt;/div>
&lt;!-- /navbar placement -->
</code></pre>
							</div>

							<div class="col-md-6">
								<p>Here is an example of button inside card header:</p>
								<pre class="language-markup mb-3" data-line="6-9"><code>&lt;!-- Card header placement -->
&lt;div class="card">
	&lt;div class="card-header header-element-inline">
		&lt;h5 class="card-title">Card title&lt;/h5>
		&lt;div class="header-elements">
			&lt;button type="button" class="sidebar-main-toggle">
				&lt;i class="icon-menu">&lt;/i>
				Collapse sidebar
			&lt;/button>
		&lt;/div>
	&lt;/div>
	&lt;div class="card-body">...&lt;/div>
&lt;/div>
&lt;!-- /card header placement -->
</code></pre>
							</div>
						</div>


					</div>
				</div>
				<!-- /button classes -->


				<!-- Sidebar classes -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Sidebar classes</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<h6 class="font-weight-semibold">Overview</h6>
						<p class="mb-3">This table demonstrates all classes for <code>sidebar</code> container, responsible for the sidebar width and color. Almost all of these classes are mandatory, some of them are responsible for proper styling or have a specific code attached to this class (like <code>.sidebar-main</code> class, which has collapsible functionality). All classes can be combined depending on the type of sidebar:</p>
						<div class="table-responsive mb-4">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th style="width: 300px">Body class</th>
										<th>Description</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><code>.sidebar</code></td>
										<td>Default sidebar class, should be added in all layout types.</td>
									</tr>
									<tr>
										<td><code>.sidebar-main</code></td>
										<td>Defines <strong>main</strong> sidebar. Mini sidebar (<code>.sidebar-xs</code> class) takes effect only if sidebar has <code>.sidebar-main</code> class. By default, all components except main navigation are hidden in mini sidebar.</td>
									</tr>
									<tr>
										<td><code>.sidebar-secondary</code></td>
										<td>Defines <strong>secondary</strong> sidebar. Has fixed <code>270px</code> width and usually comes after main sidebar.</td>
									</tr>
									<tr>
										<td><code>.sidebar-right</code></td>
										<td>Defines <strong>right</strong> sidebar. Has fixed <code>270px</code> width and appears on the right side from the main sidebar.</td>
									</tr>
									<tr>
										<td><code>.sidebar-light</code></td>
										<td>Defines <strong>light</strong> sidebar. This class can be applied to all sidebar types and positions.</td>
									</tr>
									<tr>
										<td><code>.sidebar-dark</code></td>
										<td>Defines <strong>dark</strong> sidebar. This class can be applied to all sidebar types and positions. This class is also required for custom colors (see below).</td>
									</tr>
									<tr>
										<td><code>.sidebar-dark.bg-*</code></td>
										<td>Defines sidebar background color. According to the custom color system, sidebar background color can be changed to one of the available colors by adding a proper class to the main sidebar container.</td>
									</tr>
									<tr>
										<td><code>.sidebar-component</code></td>
										<td>This class is required in <strong>content</strong> (or component) sidebar. Also requires <code>.sidebar-component-left</code> or <code>.sidebar-component-right</code> classes for proper spacing.</td>
									</tr>
									<tr>
										<td><code>.sidebar-expand-[breakpoint]</code></td>
										<td>This class specifies when sidebar needs to be collapsed, basically when sidebar switches to mobile mode. Breakpoint should always be similar to <strong>navbar</strong> breakpoint for proper matching. Available breakpoints are: xl, lg, md and sm. This class is required.</td>
									</tr>
								</tbody>
							</table>
						</div>

						<h6 class="font-weight-semibold">Example Markup</h6>
						<div class="row">
							<div class="col-md-6">
								<p>Default left aligned sidebar markup:</p>
								<pre class="language-markup mb-3" data-line="2"><code>&lt;!-- Default sidebar layout -->
&lt;body>

	&lt;!-- Navbar -->
	&lt;div class="navbar navbar-dark navbar-expand-md">
		...
	&lt;/div>
	&lt;!-- /navbar -->


	&lt;!-- Page container -->
	&lt;div class="page-content">

		&lt;!-- Main sidebar -->
		&lt;div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
			&lt;div class="sidebar-content">
				...
			&lt;/div>
		&lt;/div>
		&lt;!-- /main sidebar -->

		&lt;!-- Main content -->
		&lt;div class="content-wrapper">
			...
		&lt;/div>
		&lt;!-- /main content -->

	&lt;/div>
	&lt;!-- /page content -->

&lt;/body>
&lt;!-- /default sidebar layout -->
</code></pre>
							</div>

							<div class="col-md-6">
								<p>Mini sidebar markup. The only difference is <code>&lt;body></code> class:</p>
								<pre class="language-markup mb-3" data-line="2"><code>&lt;!-- Mini sidebar layout -->
&lt;body class="sidebar-xs">

	&lt;!-- Navbar -->
	&lt;div class="navbar navbar-dark navbar-expand-md">
		...
	&lt;/div>
	&lt;!-- /navbar -->


	&lt;!-- Page container -->
	&lt;div class="page-content">

		&lt;!-- Main sidebar -->
		&lt;div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
			&lt;div class="sidebar-content">
				...
			&lt;/div>
		&lt;/div>
		&lt;!-- /main sidebar -->

		&lt;!-- Main content -->
		&lt;div class="content-wrapper">
			...
		&lt;/div>
		&lt;!-- /main content -->

	&lt;/div>
	&lt;!-- /page content -->

&lt;/body>
&lt;!-- /mini sidebar layout -->
</code></pre>
							</div>
						</div>
					</div>
				</div>
				<!-- /sidebar classes -->

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
