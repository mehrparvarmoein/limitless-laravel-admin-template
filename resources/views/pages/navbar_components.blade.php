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
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="../../../../global_assets/js/plugins/pickers/daterangepicker.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/navbar_components.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Navbars</span> - Components</h4>
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
							<a href="navbar_components" class="breadcrumb-item">Navbars</a>
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

				<!-- Custom components -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Custom components</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Besides navigation, navbar component supports custom content such as: dropdowns with submenu, dropdown menus with custom content, full width dropdowns, language selection, forms, tabs, multi level menus, date pickers etc. Everything is adapted to use in different navbar color schemes and sizes. Examples below demonstrate some of these components, other examples related to <code>mega menu</code> can be found <a href="navigation_horizontal_mega">on this page</a>.</p>

						<p>Mixed components</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-teal navbar-component rounded" style="z-index: 30;">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-mixed">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-mixed">
								<ul class="navbar-nav">
									<li class="nav-item mega-menu-full">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">List</a>

										<div class="dropdown-menu dropdown-content">
											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-xl-2">
														<div class="dropdown-header font-weight-semibold text-uppercase text-default p-0">Form components</div>
														<div class="dropdown-divider mb-2"></div>
														<div class="mb-3 mb-xl-0">
															<a href="form_inputs" class="dropdown-item rounded">Basic inputs</a>
															<a href="form_controls_extended" class="dropdown-item rounded">Extended controls</a>
															<a href="form_select2" class="dropdown-item rounded">Select2 selects</a>
															<a href="form_floating_labels" class="dropdown-item rounded">Floating labels</a>
															<a href="form_validation" class="dropdown-item rounded">Validation</a>
														</div>
													</div>
													<div class="col-xl-2">
														<div class="dropdown-header font-weight-semibold text-uppercase text-default p-0">UI components</div>
														<div class="dropdown-divider mb-2"></div>
														<div class="mb-3 mb-xl-0">
															<a href="components_modals" class="dropdown-item rounded">Modals <span class="badge badge-pill bg-grey ml-auto">10+</span></a>
															<a href="components_dropdowns" class="dropdown-item rounded">Dropdown menus</a>
															<a href="components_buttons" class="dropdown-item rounded">Buttons</a>
															<a href="components_tabs" class="dropdown-item rounded">Tabs component</a>
															<a href="components_breadcrumbs" class="dropdown-item rounded">Breadcrumbs</a>
														</div>
													</div>
													<div class="col-xl-2">
														<div class="dropdown-header font-weight-semibold text-uppercase text-default p-0">Sidebars</div>
														<div class="dropdown-divider mb-2"></div>
														<div class="mb-3 mb-xl-0">
															<a href="sidebar_default_collapse" class="dropdown-item rounded">Main sidebar</a>
															<a href="sidebar_secondary_after" class="dropdown-item rounded">Secondary sidebar</a>
															<a href="sidebar_right_default_collapse" class="dropdown-item rounded">Right sidebar</a>
															<a href="sidebar_content_left" class="dropdown-item rounded">Content sidebar</a>
															<a href="sidebar_components" class="dropdown-item rounded">Sidebar components</a>
														</div>
													</div>
													<div class="col-xl-2">
														<div class="dropdown-header font-weight-semibold text-uppercase text-default p-0">Navigation</div>
														<div class="dropdown-divider mb-2"></div>
														<div class="mb-3 mb-xl-0">
															<a href="navigation_horizontal_click" class="dropdown-item rounded">Submenu on click</a>
															<a href="navigation_horizontal_hover" class="dropdown-item rounded">Submenu on hover</a>
															<a href="navigation_horizontal_elements" class="dropdown-item rounded">With custom elements</a>
															<a href="navigation_horizontal_tabs" class="dropdown-item rounded">Tabbed navigation</a>
															<a href="navigation_horizontal_mega" class="dropdown-item rounded">Horizontal mega menu</a>
														</div>
													</div>
													<div class="col-xl-2">
														<div class="dropdown-header font-weight-semibold text-uppercase text-default p-0">Navbars</div>
														<div class="dropdown-divider mb-2"></div>
														<div class="mb-3 mb-xl-0">
															<a href="navbar_single_top_static" class="dropdown-item rounded">Single navbar</a>
															<a href="navbar_multiple_top_static" class="dropdown-item rounded">Multiple navbars</a>
															<a href="navbar_colors" class="dropdown-item rounded">Color options</a>
															<a href="navbar_hideable" class="dropdown-item rounded">Hide on scroll</a>
															<a href="navbar_components" class="dropdown-item rounded active">Navbar components</a>
														</div>
													</div>
													<div class="col-xl-2">
														<div class="dropdown-header font-weight-semibold text-uppercase text-default p-0">Extensions</div>
														<div class="dropdown-divider mb-2"></div>
														<div class="mb-0">
															<a href="jqueryui_interactions" class="dropdown-item rounded">jQuery UI</a>
															<a href="animations_velocity_basic" class="dropdown-item rounded">Animations <span class="badge badge-pill badge-info ml-auto">14</span></a>
															<a href="uploader_plupload" class="dropdown-item rounded">File uploaders</a>
															<a href="extension_image_cropper" class="dropdown-item rounded">Image cropper</a>
															<a href="fullcalendar_views" class="dropdown-item rounded">Calendars</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Tabs</a>

										<div class="dropdown-menu dropdown-content wmin-xl-350">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Tabs example</span>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<ul class="nav nav-tabs nav-justified mb-0">
												<li class="nav-item"><a href="#tab1" class="nav-link border-left-0 active" data-toggle="tab"><i class="icon-compose mr-2"></i> Form example</a></li>
												<li class="nav-item"><a href="#tab2" class="nav-link border-right-0" data-toggle="tab"><i class="icon-list3 mr-2"></i> List example</a></li>
											</ul>

											<div class="tab-content">
												<div class="tab-pane active p-0" id="tab1">
													<form class="dropdown-content-body" action="#">
														<div class="form-group form-group-feedback form-group-feedback-right">
															<input type="text" class="form-control" placeholder="Your email">
															<div class="form-control-feedback text-muted">
																<i class="icon-mention"></i>
															</div>
														</div>

														<div class="form-group">
															<select data-placeholder="Subscription plan" class="form-control form-control-select2" data-fouc>
																<option></option>
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

														<div class="d-flex align-items-center justify-content-between">
															<div class="form-check mb-0">
																<label class="form-check-label">
																	<input type="checkbox" class="form-check-control form-input-styled" checked>
																	Remember me
																</label>
															</div>

															<button type="submit" class="btn btn-danger btn-labeled btn-labeled-right"><b><i class="icon-paperplane"></i></b> Submit</button>
														</div>
													</form>
												</div>

												<div class="tab-pane p-0" id="tab2">
													<div class="dropdown-content-body">
														<ul class="media-list">
															<li class="media">
																<div class="mr-3">
																	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt=""></a>
																</div>

																<div class="media-body">
																	<a href="#" class="media-title font-weight-semibold">James Alexander</a>
																	<div class="font-size-sm text-muted">Santa Ana, CA.</div>
																</div>

																<div class="d-flex align-self-center ml-3">
																	<span class="badge badge-mark bg-success border-success"></span>
																</div>
															</li>

															<li class="media">
																<div class="mr-3">
																	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt=""></a>
																</div>

																<div class="media-body">
																	<a href="#" class="media-title font-weight-semibold">Jeremy Victorino</a>
																	<div class="font-size-sm text-muted">Dowagiac, MI.</div>
																</div>

																<div class="d-flex align-self-center ml-3">
																	<span class="badge badge-mark bg-danger border-danger"></span>
																</div>
															</li>

															<li class="media">
																<div class="mr-3">
																	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt=""></a>
																</div>

																<div class="media-body">
																	<a href="#" class="media-title font-weight-semibold">Margo Baker</a>
																	<div class="font-size-sm text-muted">Kasaan, AK.</div>
																</div>

																<div class="d-flex align-self-center ml-3">
																	<span class="badge badge-mark bg-success border-success"></span>
																</div>
															</li>

															<li class="media">
																<div class="mr-3">
																	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt=""></a>
																</div>

																<div class="media-body">
																	<a href="#" class="media-title font-weight-semibold">Beatrix Diaz</a>
																	<div class="font-size-sm text-muted">Neenah, WI.</div>
																</div>

																<div class="d-flex align-self-center ml-3">
																	<span class="badge badge-mark bg-warning border-warning"></span>
																</div>
															</li>

															<li class="media">
																<div class="mr-3">
																	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt=""></a>
																</div>

																<div class="media-body">
																	<a href="#" class="media-title font-weight-semibold">Richard Vango</a>
																	<div class="font-size-sm text-muted">Grapevine, TX.</div>
																</div>

																<div class="d-flex align-self-center ml-3">
																	<span class="badge badge-mark bg-grey-400 border-grey-400"></span>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Classic</a>

										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item">Second level</a>
											<div class="dropdown-submenu">
												<a href="#" class="dropdown-item dropdown-toggle">Second level with child</a>
												<div class="dropdown-menu">
													<a href="#" class="dropdown-item">Third level</a>
													<div class="dropdown-submenu">
														<a href="#" class="dropdown-item dropdown-toggle">Third level with child</a>
														<div class="dropdown-menu">
															<a href="#" class="dropdown-item">Fourth level</a>
															<a href="#" class="dropdown-item">Fourth level</a>
															<a href="#" class="dropdown-item">Fourth level</a>
														</div>
													</div>
													<a href="#" class="dropdown-item">Third level</a>
												</div>
											</div>
											<a href="#" class="dropdown-item">Second level</a>
										</div>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto">
									<li class="nav-item dropdown dropdown-user">
										<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
											<span>Victoria</span>
										</a>

										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
											<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
											<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
											<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<p>Date range picker</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-teal navbar-component rounded" style="z-index: 29;">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-daterange">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-daterange">
								<ul class="navbar-nav mb-3 mb-xl-0">
									<li class="nav-item daterange-ranges">
										<a class="navbar-nav-link dropdown-toggle">
											<i class="icon-calendar3 mr-2"></i>
											<span></span>
										</a>
									</li>
								</ul>

								<div class="mb-3 mb-xl-0 ml-xl-auto">
									<button type="button" class="btn bg-teal-700 text-white daterange-ranges-button dropdown-toggle">
										<i class="icon-calendar3 mr-2"></i>
										<span></span>
									</button>
								</div>
							</div>
						</div>

						<p>Language selector</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-teal navbar-component rounded" style="z-index: 28;">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-language">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-language">
								<ul class="navbar-nav">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<img src="../../../../global_assets/images/lang/es.png" class="img-flag mr-2" alt="">
											España
										</a>

										<div class="dropdown-menu">
											<a href="#" class="dropdown-item english"><img src="../../../../global_assets/images/lang/gb.png" class="img-flag" alt=""> English</a>
											<a href="#" class="dropdown-item ukrainian"><img src="../../../../global_assets/images/lang/ua.png" class="img-flag" alt=""> Українська</a>
											<a href="#" class="dropdown-item deutsch"><img src="../../../../global_assets/images/lang/de.png" class="img-flag" alt=""> Deutsch</a>
											<a href="#" class="dropdown-item active espana"><img src="../../../../global_assets/images/lang/es.png" class="img-flag" alt=""> España</a>
											<a href="#" class="dropdown-item russian"><img src="../../../../global_assets/images/lang/ru.png" class="img-flag" alt=""> Русский</a>
										</div>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto">
									<li class="nav-item">
										<a href="#" class="navbar-nav-link english">
											<img src="../../../../global_assets/images/lang/gb.png" class="img-flag mr-2" alt="">
											EN
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="navbar-nav-link deutsch">
											<img src="../../../../global_assets/images/lang/de.png" class="img-flag mr-2" alt="">
											DE
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="navbar-nav-link italian">
											<img src="../../../../global_assets/images/lang/it.png" class="img-flag mr-2" alt="">
											IT
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /custom components -->


				<!-- Navbar navigation -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Navbar navigation</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="mb-4">
							<h6 class="font-weight-semibold">Basic navigation</h6>
							<p class="mb-3">Navbar navigation links build on our <code>.nav</code> options with their own modifier class and require the use of toggler classes for proper responsive styling. Navigation in navbars will also grow to occupy as much horizontal space as possible to keep your navbar contents securely aligned. Dropdown menus require a wrapping element for positioning, so be sure to use separate and nested elements for <code>.nav-item</code> and <code>.nav-link</code>.</p>

							<div class="navbar navbar-expand-xl navbar-dark bg-slate-700 navbar-component rounded" style="z-index: 27;">
								<div class="navbar-brand">
									<a href="index" class="d-inline-block">
										<img src="../../../../global_assets/images/logo_light.png" alt="">
									</a>
								</div>

								<div class="d-xl-none">
									<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-navigation">
										<i class="icon-menu"></i>
									</button>
								</div>

								<div class="navbar-collapse collapse" id="navbar-navigation">
									<ul class="navbar-nav">
										<li class="nav-item"><a href="#" class="navbar-nav-link">Active link</a></li>
										<li class="nav-item"><a href="#" class="navbar-nav-link">Link</a></li>
										<li class="nav-item dropdown">
											<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</li>
									</ul>

									<ul class="nav navbar-nav ml-xl-auto">
										<li class="nav-item"><a href="#" class="navbar-nav-link">Link</a></li>
										<li class="nav-item dropdown">
											<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="mb-4">
							<h6 class="font-weight-semibold">Navigation icons</h6>
							<p class="mb-3">Navbar navigation supports icons: text with left and right positioned icons, multiple icons within 1 item, icons only and carets for items with dropdown menu. By default, sidebar control buttons are placed in the left navigation. To add icons, place <code>&lt;i></code> element with icon class to the navigation link element. To use with text, depending on the position place icon before or after item text. Use <code>.ml-2</code> or <code>.mr-2</code> to add left/right spacer between the icon and nav link text.</p>

							<div class="navbar navbar-expand-xl navbar-dark bg-slate-700 navbar-component rounded" style="z-index: 26;">
								<div class="navbar-brand">
									<a href="index" class="d-inline-block">
										<img src="../../../../global_assets/images/logo_light.png" alt="">
									</a>
								</div>

								<div class="d-xl-none">
									<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-navigation-icons">
										<i class="icon-menu"></i>
									</button>
								</div>

								<div class="navbar-collapse collapse" id="navbar-navigation-icons">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a href="#" class="navbar-nav-link">
												<i class="icon-cloud-download2"></i>
												<span class="d-xl-none ml-2">Downloads</span>
											</a>
										</li>

										<li class="nav-item">
											<a href="#" class="navbar-nav-link">
												<i class="icon-stats-bars"></i>
												<span class="d-xl-none ml-2">My statistics</span>
											</a>
										</li>
									</ul>

									<ul class="navbar-nav ml-xl-auto">
										<li class="nav-item"><a href="#" class="navbar-nav-link"><i class="icon-file-stats mr-2"></i> Stats</a></li>
										<li class="nav-item"><a href="#" class="navbar-nav-link"><i class="icon-file-locked mr-2"></i> Logout</a></li>
										<li class="nav-item dropdown">
											<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
												<i class="icon-gear"></i>
												<span class="d-xl-none ml-2">Settings</span>
											</a>
											
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="mb-4">
							<h6 class="font-weight-semibold">Badges</h6>
							<p class="mb-3">Flexibility of the navbar navigation also allows you to use 2 kinds of badges - <code>inline</code> and <code>floating</code>. Both types can have left and right positions. To use inline badge, add <code>.position-static</code> class to the element, default placement is absolute with top-right position. To use left positioned elements, place it before text in inline version and add <code>.right-auto.left-0</code> to the absolute positioned element.</p>

							<div class="navbar navbar-expand-xl navbar-dark bg-slate-700 navbar-component rounded" style="z-index: 25;">
								<div class="navbar-brand">
									<a href="index" class="d-inline-block">
										<img src="../../../../global_assets/images/logo_light.png" alt="">
									</a>
								</div>

								<div class="d-xl-none">
									<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-badges">
										<i class="icon-menu"></i>
									</button>
								</div>

								<div class="navbar-collapse collapse" id="navbar-badges">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a href="#" class="navbar-nav-link">
												<i class="icon-grid-alt"></i>
												<span class="d-xl-none ml-2">Components</span>
												<span class="badge bg-warning-400 position-static ml-auto ml-xl-2">New</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="navbar-nav-link">
												<i class="icon-menu6"></i>
												<span class="d-xl-none ml-2">Entries</span>
												<span class="badge badge-pill bg-info position-static ml-auto ml-xl-2">89</span>
											</a>
										</li>
									</ul>

									<ul class="navbar-nav ml-xl-auto">
										<li class="nav-item position-relative">
											<a href="#" class="navbar-nav-link">
												<i class="icon-inbox"></i>
												<span class="d-xl-none ml-2">Inbox</span>
												<span class="badge bg-warning-400 ml-auto ml-xl-2">2</span>
											</a>
										</li>
										<li class="nav-item position-relative">
											<a href="#" class="navbar-nav-link">
												<i class="icon-task"></i>
												<span class="d-xl-none ml-2">Tasks</span>
												<span class="badge badge-pill bg-info ml-auto ml-xl-2">4</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						
						<div class="mb-3">
							<h6 class="font-weight-semibold">Badge marks</h6>
							<p class="mb-3">Instead badges, which should contain text by default, navbar component supports badge marks - small rounded indicators. These indicators support all available colors and can have 2 different styles - circle and ring. To use ring, add <code>.border-[color]</code> classes. To use circle, add <code>.bg-[color]</code> and <code>.border-[color]</code> classes. Both variations require <code>.badge-mark</code> class by default. Also these indicators support left/right alignment and static/absolute positioning.</p>

							<div class="navbar navbar-expand-xl navbar-dark bg-slate-700 navbar-component rounded" style="z-index: 24;">
								<div class="navbar-brand">
									<a href="index" class="d-inline-block">
										<img src="../../../../global_assets/images/logo_light.png" alt="">
									</a>
								</div>

								<div class="d-xl-none">
									<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-badges-mark">
										<i class="icon-menu"></i>
									</button>
								</div>

								<div class="navbar-collapse collapse" id="navbar-badges-mark">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a href="#" class="navbar-nav-link">
												<i class="icon-grid-alt"></i>
												<span class="d-xl-none ml-2 mr-auto mr-xl-0">Components</span>
												<span class="badge badge-mark bg-warning-300 border-warning-300 position-static ml-auto ml-xl-2"></span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="navbar-nav-link">
												<i class="icon-menu6"></i>
												<span class="d-xl-none ml-2">Entries</span>
												<span class="badge badge-mark border-info-300 position-static ml-auto ml-xl-2"></span>
											</a>
										</li>
									</ul>

									<ul class="navbar-nav ml-xl-auto">
										<li class="nav-item position-relative">
											<a href="#" class="navbar-nav-link">
												<i class="icon-inbox"></i>
												<span class="d-xl-none ml-2">Inbox</span>
												<span class="badge badge-mark bg-warning-300 border-warning-300 ml-auto ml-xl-2"></span>
											</a>
										</li>
										<li class="nav-item position-relative">
											<a href="#" class="navbar-nav-link">
												<i class="icon-task"></i>
												<span class="d-xl-none ml-2">Tasks</span>
												<span class="badge badge-mark border-info-300 ml-auto ml-xl-2"></span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /navbar navigation -->


				<!-- Basic components -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Basic components</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="mb-4">
							<h6 class="font-weight-semibold">Navbar buttons</h6>
							<p class="mb-3">Various buttons are supported as part of navbar components. This is also a great reminder that vertical alignment utilities can be used to align different sized elements. Button groups and button dropdowns in different colors, sizes and styles are also supported. For multiple buttons, use reponsive <code>spacing</code> utility classes for proper vertical and horizontal alignment.

							<div class="navbar navbar-expand-xl navbar-dark bg-indigo-400 navbar-component rounded" style="z-index: 24;">
								<div class="navbar-brand">
									<a href="index" class="d-inline-block">
										<img src="../../../../global_assets/images/logo_light.png" alt="">
									</a>
								</div>

								<div class="d-xl-none">
									<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-buttons">
										<i class="icon-menu"></i>
									</button>
								</div>

								<div class="navbar-collapse collapse" id="navbar-buttons">
									<div class="my-3 my-xl-0">
										<button type="button" class="btn btn-light mr-2">Button</button>

										<div class="btn-group">
											<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Menu</button>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</div>
									</div>

									<div class="mb-3 mb-xl-0 ml-xl-auto">
										<button type="button" class="btn btn-light"><i class="icon-cog3 mr-2"></i> Settings</button>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-4">
							<h6 class="font-weight-semibold">Navbar text</h6>
							<p class="mb-3">Wrap strings of text in an element with <code>.navbar-text</code>, usually on a <code>&lt;span&gt;</code> tag for proper leading and color. This class adjusts vertical alignment and horizontal spacing for strings of text. In some cases links within <code>.navbar-text</code> may need color adjustments, use <code>color</code> utility classes to style links properly.

							<div class="navbar navbar-expand-xl navbar-dark bg-indigo-400 navbar-component rounded" style="z-index: 23;">
								<div class="navbar-brand">
									<a href="index" class="d-inline-block">
										<img src="../../../../global_assets/images/logo_light.png" alt="">
									</a>
								</div>

								<div class="d-xl-none">
									<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-text">
										<i class="icon-menu"></i>
									</button>
								</div>

								<div class="navbar-collapse collapse" id="navbar-text">
									<span class="navbar-text d-block d-xl-inline-block"><i class="icon-user-check mr-2"></i> Signed in as <a href="#">Eugene</a></span>

									<span class="navbar-text ml-xl-auto"><i class="icon-bell3 mr-2"></i> 12 new messages</span>

									<ul class="nav navbar-nav ml-xl-3">
										<li class="nav-item"><a href="#" class="navbar-nav-link">Link</a></li>
										<li class="nav-item dropdown">
											<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="mb-3">
							<h6 class="font-weight-semibold">Progress bars</h6>
							<p class="mb-3">Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars. Progress bars inside navbar support all possible styling options: colors, animations, labels, appearance, sizes etc. Also you can add text and icon labels to display current action, it's also available in both left and right positions.</p>

							<div class="navbar navbar-expand-xl navbar-dark bg-indigo-400 navbar-component rounded" style="z-index: 22;">
								<div class="navbar-brand">
									<a href="index" class="d-inline-block">
										<img src="../../../../global_assets/images/logo_light.png" alt="">
									</a>
								</div>

								<div class="d-xl-none">
									<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-progress">
										<i class="icon-menu"></i>
									</button>
								</div>

								<div class="navbar-collapse collapse" id="navbar-progress">
									<div class="progress mt-3 mt-xl-0 mb-1 mb-xl-0 wmin-xl-200">
										<div class="progress-bar bg-warning-300 progress-bar-striped progress-bar-animated" style="width: 60%;">
											<span class="sr-only">60% Complete</span>
										</div>
									</div>

									<span class="navbar-text ml-xl-auto"><i class="icon-spinner2 spinner mr-2"></i> Loading data</span>

									<div class="progress ml-xl-3 w-xl-25 mb-3 mb-xl-0 wmin-xl-200">
										<div class="progress-bar bg-teal-300 progress-bar-striped progress-bar-animated" style="width: 60%;">
											<span class="sr-only">60% Complete</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /basic components -->


				<!-- Navbar forms -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Form components</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Place form content within container with <code>spacing</code> utility classes for proper vertical alignment and collapsed behavior in narrow viewports. Use the <code>alignment</code> options to decide where it resides within the navbar content. Navbar supports all form components: checkboxes, radios, default and custom selects, file inputs etc. Some form controls, like input groups, may require <code>width</code> utility classes to be show up properly within a navbar.</p>

						<p>Basic form controls</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded" style="z-index: 21;">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-form-basic">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-form-basic">
								<form class="my-3 my-xl-0">
									<input type="text" class="form-control wmin-xl-200 text-white border-bottom-1" placeholder="Text field">
								</form>

								<form class="d-flex align-items-center flex-nowrap flex-xl-nowrap mb-3 mb-xl-0 ml-xl-auto">
									<input type="text" class="form-control text-white flex-1 wmin-xl-200 border-bottom-1" placeholder="Text field with button">
									<button type="submit" class="btn btn-outline bg-transparent border-white text-white ml-3 ml-xl-2">Submit</button>
								</form>
							</div>
						</div>


						<p>Default and custom selects</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded" style="z-index: 20;">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-form-selects">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-form-selects">
								<form class="my-3 my-xl-0">
									<div class="wmin-xl-200">
										<select class="form-control form-input-styled-material wmin-xl-200" data-fouc>
											<option value="">Select your state</option>
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="OR">Oregon</option>
											<option value="WA">Washington</option>
											<option value="AZ">Arizona</option>
										</select>
									</div>
								</form>

								<form class="mb-3 mb-xl-0 ml-xl-auto">
									<select class="form-control text-white wmin-xl-200 border-bottom-1">
										<option value="">Select your state</option>
										<option value="AK">Alaska</option>
										<option value="HI">Hawaii</option>
										<option value="CA">California</option>
										<option value="NV">Nevada</option>
										<option value="OR">Oregon</option>
										<option value="WA">Washington</option>
										<option value="AZ">Arizona</option>
									</select>
								</form>
							</div>
						</div>


						<p>Input group, file select</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded" style="z-index: 19;">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-form-inputs">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-form-inputs">
								<form class="my-3 my-xl-0">
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text text-white"><i class="icon-spinner2 spinner"></i></span>
										</span>
										<input type="text" class="form-control wmin-xl-200 text-white border-bottom-1" placeholder="Input group">
										<div class="input-group-append dropdown">
											<button type="button" class="btn bg-white btn-icon dropdown-toggle" data-toggle="dropdown">
												<i class="icon-cog3"></i>
											</button>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</div>
									</div>
								</form>

								<form class="mb-3 mb-xl-0 ml-xl-auto">
									<div class="wmin-xl-200">
										<input type="file" class="form-input-styled-material text-white" data-fouc>
									</div>
								</form>
							</div>
						</div>


						<p>Input with icons</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded" style="z-index: 18;">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-form-icons">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-form-icons">
								<form class="my-3 my-xl-0">
									<div class="form-group-feedback form-group-feedback-left mb-3 mb-xl-0">
										<input type="search" class="form-control wmin-xl-200 text-white border-bottom-1" placeholder="Search field">
										<div class="form-control-feedback text-white">
											<i class="icon-search4 font-size-base opacity-75"></i>
										</div>
									</div>
								</form>

								<form class="mb-3 mb-xl-0 ml-xl-auto">
									<div class="form-group-feedback form-group-feedback-right">
										<input type="text" class="form-control wmin-xl-200 text-white border-bottom-1" placeholder="Text field">
										<div class="form-control-feedback text-white">
											<i class="icon-spinner2 spinner"></i>
										</div>
									</div>
								</form>
							</div>
						</div>


						<p>Select2 select</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded" style="z-index: 17;">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-form-select2">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-form-select2">
								<form class="my-3 my-xl-0" action="#">
									<div class="wmin-xl-200">
										<select class="form-control form-control-select2" data-container-css-class="text-white" data-fouc>
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="OR">Oregon</option>
											<option value="WA">Washington</option>
											<option value="AZ">Arizona</option>
										</select>
									</div>
								</form>

								<form class="mb-3 mb-xl-0 ml-xl-auto" action="#">
									<div class="wmin-xl-250">
										<select class="form-control form-control-select2" data-container-css-class="text-white" multiple="multiple" data-fouc>
											<option value="AK" selected>Alaska</option>
											<option value="HI">Hawaii</option>
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="OR" selected>Oregon</option>
											<option value="WA">Washington</option>
											<option value="AZ">Arizona</option>
										</select>
									</div>
								</form>
							</div>
						</div>


						<p>Multiselect select</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded" style="z-index: 16;">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-form-multiselect">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-form-multiselect">
								<form class="my-3 my-xl-0" action="#">
									<div class="wmin-xl-200">
										<select class="form-control form-control-multiselect-material" data-fouc>
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="OR">Oregon</option>
											<option value="WA">Washington</option>
											<option value="AZ">Arizona</option>
										</select>
									</div>
								</form>

								<form class="mb-3 mb-xl-0 ml-xl-auto" action="#">
									<div class="wmin-xl-200">
										<select class="form-control form-control-multiselect-material" multiple="multiple" data-fouc>
											<option value="AK" selected>Alaska</option>
											<option value="HI">Hawaii</option>
											<option value="CA">California</option>
											<option value="NV" selected>Nevada</option>
											<option value="OR">Oregon</option>
											<option value="WA">Washington</option>
											<option value="AZ">Arizona</option>
										</select>
									</div>
								</form>
							</div>
						</div>


						<p>Checkboxes - both alignment</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded" style="z-index: 15;">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-form-checks">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-form-checks">
								<form class="d-inline-flex my-3 my-xl-0" action="#">
									<div class="form-check form-check-inline form-check-light mb-0">
										<label class="form-check-label">
											<input type="checkbox" class="form-input-styled" checked data-fouc>
											Checked
										</label>
									</div>

									<div class="form-check form-check-inline form-check-light mb-0">
										<label class="form-check-label">
											<input type="checkbox" id="navbar-checkbox2" class="form-input-styled" data-fouc>
											Unchecked
										</label>
									</div>
								</form>

								<form class="mb-3 mb-xl-0 ml-xl-auto" action="#">
									<div class="form-check form-check-right form-check-inline form-check-light mb-0">
										<label class="form-check-label">
											Checked
											<input type="checkbox" class="form-input-styled" checked data-fouc>
										</label>
									</div>

									<div class="form-check form-check-right form-check-inline form-check-light mb-0">
										<label class="form-check-label">
											Unchecked
											<input type="checkbox" id="navbar-checkbox2" class="form-input-styled" data-fouc>
										</label>
									</div>
								</form>
							</div>
						</div>


						<p>Radios - both alignment</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded" style="z-index: 14;">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-form-radios">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-form-radios">
								<form class="d-inline-flex my-3 my-xl-0" action="#">
									<div class="form-check form-check-inline mb-0">
										<label class="form-check-label form-check-light">
											<input type="radio" name="navbar-radio-left" id="navbar-radio1" class="form-input-styled" checked data-fouc>
											Selected
										</label>
									</div>

									<div class="form-check form-check-inline mb-0">
										<label class="form-check-label form-check-light">
											<input type="radio" name="navbar-radio-left" id="navbar-radio2" class="form-input-styled" data-fouc>
											Unselected
										</label>
									</div>
								</form>

								<form class="mb-3 mb-xl-0 ml-xl-auto" action="#">
									<div class="form-check form-check-right form-check-inline mb-0">
										<label class="form-check-label form-check-light">
											Selected
											<input type="radio" name="navbar-radio-right" id="navbar-radio1" class="form-input-styled" checked data-fouc>
										</label>
									</div>

									<div class="form-check form-check-right form-check-inline mb-0">
										<label class="form-check-label form-check-light">
											Unselected
											<input type="radio" name="navbar-radio-right" id="navbar-radio2" class="form-input-styled" data-fouc>
										</label>
									</div>
								</form>
							</div>
						</div>


						<p>Switchery toggles</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded" style="z-index: 13;">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-form-toggles">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-form-toggles">
								<form class="my-3 my-xl-0" action="">
									<div class="form-check form-check-inline form-check-switchery-double mb-0">
										<label class="form-check-label">
											Auto
											<input type="checkbox" class="form-input-switchery" checked data-fouc>
											Manually
										</label>
									</div>
								</form>

								<form class="mb-3 mb-xl-0 ml-xl-auto" action="">
									<div class="form-check form-check-right form-check-inline form-check-switchery mb-0">
										<label class="form-check-label">
											<input type="checkbox" class="form-input-switchery" checked data-fouc>
											Checked
										</label>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /navbar forms -->

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
