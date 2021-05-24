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
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/slinky.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/navigation_horizontal_mega.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Horizontal Nav</span> - Mega Menu</h4>
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
							<a href="navigation_horizontal_mega" class="breadcrumb-item">Horizontal nav</a>
							<span class="breadcrumb-item active">Mega menu</span>
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

				<!-- Nav lists -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Nav lists</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Dropdown menu markup can be used in 12 columns grid, aligned to the left and right, and have single or multiple levels. Nested levels in multi column nav list use custom extension that saves currently opened level in cookies and shows a link to parent level. Inner dropdowns support all available elements: badges, checkboxes, radios, headers, dividers etc. Please note - mega dropdown menu uses custom class names along with default ones and all these classes are required for a correct functioning.</p>

						<p class="font-weight-semibold">Examples:</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded mb-1">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-nav-lists">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-nav-lists">
								<ul class="navbar-nav">
									<li class="nav-item mega-menu-left">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Multi columns menu</a>

										<div class="dropdown-menu dropdown-content w-xl-50">
											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-xl-4">
														<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Form components</div>
														<div class="dropdown-divider mb-2"></div>
														<div class="mb-3 mb-xl-0">
															<a href="form_inputs" class="dropdown-item rounded">Basic inputs</a>
															<a href="form_controls_extended" class="dropdown-item rounded">Extended controls</a>
															<a href="form_select2" class="dropdown-item rounded">Select2 selects</a>
															<a href="form_validation" class="dropdown-item rounded">Validation</a>
														</div>
													</div>
													<div class="col-xl-4">
														<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">UI components</div>
														<div class="dropdown-divider mb-2"></div>
														<div class="mb-3 mb-xl-0">
															<a href="components_modals" class="dropdown-item rounded">Modals <span class="badge badge-pill bg-grey ml-auto">10+</span></a>
															<a href="components_dropdowns" class="dropdown-item rounded">Dropdown menus</a>
															<a href="components_buttons" class="dropdown-item rounded">Buttons</a>
															<a href="components_tabs" class="dropdown-item rounded">Tabs component</a>
														</div>
													</div>
													<div class="col-xl-4">
														<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Navigation</div>
														<div class="dropdown-divider mb-2"></div>
														<div class="mb-3 mb-xl-0">
															<a href="navigation_horizontal_hover" class="dropdown-item rounded">Submenu on hover</a>
															<a href="navigation_horizontal_elements" class="dropdown-item rounded">With custom elements</a>
															<a href="navigation_horizontal_tabs" class="dropdown-item rounded">Tabbed navigation</a>
															<a href="navigation_horizontal_mega" class="dropdown-item rounded active">Horizontal mega menu</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item mega-menu-full">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Grid list</a>

										<div class="dropdown-menu dropdown-content">
											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-xl-2">
														<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Form components</div>
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
														<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">UI components</div>
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
														<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Sidebars</div>
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
														<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Navigation</div>
														<div class="dropdown-divider mb-2"></div>
														<div class="mb-3 mb-xl-0">
															<a href="navigation_horizontal_click" class="dropdown-item rounded">Submenu on click</a>
															<a href="navigation_horizontal_hover" class="dropdown-item rounded">Submenu on hover</a>
															<a href="navigation_horizontal_elements" class="dropdown-item rounded">With custom elements</a>
															<a href="navigation_horizontal_tabs" class="dropdown-item rounded">Tabbed navigation</a>
															<a href="navigation_horizontal_mega" class="dropdown-item rounded active">Horizontal mega menu</a>
														</div>
													</div>
													<div class="col-xl-2">
														<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Navbars</div>
														<div class="dropdown-divider mb-2"></div>
														<div class="mb-3 mb-xl-0">
															<a href="navbar_single_top_static" class="dropdown-item rounded">Single navbar</a>
															<a href="navbar_multiple_top_static" class="dropdown-item rounded">Multiple navbars</a>
															<a href="navbar_colors" class="dropdown-item rounded">Color options</a>
															<a href="navbar_hideable" class="dropdown-item rounded">Hide on scroll</a>
															<a href="navbar_components" class="dropdown-item rounded">Navbar components</a>
														</div>
													</div>
													<div class="col-xl-2">
														<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Extensions</div>
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

									<li class="nav-item nav-item-multi mega-menu-full">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Multi level grid list</a>

										<div class="dropdown-menu dropdown-content">
											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-xl-3">
														<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Components</div>
														<div class="dropdown-divider mb-2"></div>
														<div class="dropdown-item-group mb-3 mb-xl-0">
															<ul class="list-unstyled">
																<li>
																	<a href="#" class="dropdown-item rounded"><i class="icon-pencil7"></i> Form components</a>
																	<ul class="list-unstyled">
																		<li><a href="form_inputs" class="dropdown-item rounded">Basic inputs</a></li>
																		<li><a href="form_checkboxes_radios" class="dropdown-item rounded">Checkboxes &amp; radios</a></li>
																		<li><a href="form_select2" class="dropdown-item rounded">Select2 selects</a></li>
																		<li><a href="form_bootstrap_select" class="dropdown-item rounded">Bootstrap select</a></li>
																		<li><a href="form_multiselect" class="dropdown-item rounded">Bootstrap multiselect</a></li>
																		<li><a href="form_input_groups" class="dropdown-item rounded">Input groups</a></li>
																		<li><a href="form_controls_extended" class="dropdown-item rounded">Extended controls</a></li>
																		<li><a href="form_floating_labels" class="dropdown-item rounded">Floating labels</a></li>
																		<li><a href="form_tag_inputs" class="dropdown-item rounded">Tag inputs</a></li>
																		<li><a href="form_dual_listboxes" class="dropdown-item rounded">Dual Listboxes</a></li>
																		<li><a href="form_validation" class="dropdown-item rounded">Validation</a></li>
																		<li><a href="form_wizard" class="dropdown-item rounded">Form wizard</a></li>
																		<li><a href="form_actions" class="dropdown-item rounded">Form actions</a></li>
																		<li><a href="form_inputs_grid" class="dropdown-item rounded">Inputs grid</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#" class="dropdown-item rounded"><i class="icon-grid"></i> UI components</a>
																	<ul class="list-unstyled">
																		<li><a href="components_modals" class="dropdown-item rounded">Modals</a></li>
																		<li><a href="components_dropdowns" class="dropdown-item rounded">Dropdown menus</a></li>
																		<li><a href="components_tabs" class="dropdown-item rounded">Tabs component</a></li>
																		<li><a href="components_pills" class="dropdown-item rounded">Pills component</a></li>
																		<li><a href="components_collapsible" class="dropdown-item rounded">Collapsible</a></li>
																		<li><a href="components_navs" class="dropdown-item rounded">Navs</a></li>
																		<li><a href="components_buttons" class="dropdown-item rounded">Buttons</a></li>
																		<li><a href="components_popups" class="dropdown-item rounded">Tooltips and popovers</a></li>
																		<li><a href="components_alerts" class="dropdown-item rounded">Alerts</a></li>
																		<li><a href="components_pagination" class="dropdown-item rounded">Pagination</a></li>
																		<li><a href="components_badges" class="dropdown-item rounded">Badges</a></li>
																		<li><a href="components_progress" class="dropdown-item rounded">Progress</a></li>
																		<li><a href="components_breadcrumbs" class="dropdown-item rounded">Breadcrumbs</a></li>
																		<li><a href="components_media" class="dropdown-item rounded">Media objects</a></li>
																		<li><a href="components_scrollspy" class="dropdown-item rounded">Scrollspy</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#" class="dropdown-item rounded"><i class="icon-gift"></i> Extra components</a>
																	<ul class="list-unstyled">
																		<li><a href="extra_pnotify" class="dropdown-item rounded">PNotify notifications</a></li>
																		<li><a href="extra_jgrowl_noty" class="dropdown-item rounded">jGrowl and Noty notifications</a></li>
																		<li><a href="extra_sweetalert" class="dropdown-item rounded">SweetAlert notifications</a></li>
																		<li><a href="extra_sliders_ion" class="dropdown-item rounded">Ion range sliders</a></li>
																		<li><a href="extra_trees" class="dropdown-item rounded">Dynamic tree views</a></li>
																		<li><a href="extra_context_menu" class="dropdown-item rounded">Context menu</a></li>
																		<li><a href="extra_fab" class="dropdown-item rounded">Floating action buttons</a></li>
																		<li><a href="extra_session_timeout" class="dropdown-item rounded">Session timeout</a></li>
																		<li><a href="extra_idle_timeout" class="dropdown-item rounded">Idle timeout</a></li>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
													<div class="col-xl-3">
														<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Layout</div>
														<div class="dropdown-divider mb-2"></div>
														<div class="dropdown-item-group mb-3 mb-xl-0">
															<ul class="list-unstyled">
																<li>
																	<a href="#" class="dropdown-item rounded"><i class="icon-indent-decrease2"></i> Sidebars</a>
																	<ul class="list-unstyled">
																		<li>
																			<a href="#" class="dropdown-item rounded">Main sidebar</a>
																			<ul class="list-unstyled">
																				<li><a href="sidebar_default_collapse" class="dropdown-item rounded">Default collapsible</a></li>
																				<li><a href="sidebar_default_hide" class="dropdown-item rounded">Default hideable</a></li>
																				<li><a href="sidebar_default_hidden" class="dropdown-item rounded">Default hidden</a></li>
																				<li><a href="sidebar_mini_collapse" class="dropdown-item rounded">Mini collapsible</a></li>
																				<li><a href="sidebar_mini_hide" class="dropdown-item rounded">Mini hideable</a></li>
																				<li><a href="sidebar_mini_hidden" class="dropdown-item rounded">Mini hidden</a></li>
																			</ul>
																		</li>
																		<li>
																			<a href="#" class="dropdown-item rounded">Secondary sidebar</a>
																			<ul class="list-unstyled">
																				<li><a href="sidebar_secondary_after" class="dropdown-item rounded">After default</a></li>
																				<li><a href="sidebar_secondary_before" class="dropdown-item rounded">Before default</a></li>
																				<li><a href="sidebar_secondary_hidden" class="dropdown-item rounded">Hidden by default</a></li>
																			</ul>
																		</li>
																		<li>
																			<a href="#" class="dropdown-item rounded">Right sidebar</a>
																			<ul class="list-unstyled">
																				<li><a href="sidebar_right_default_collapse" class="dropdown-item rounded">Show - collapse main</a></li>
																				<li><a href="sidebar_right_default_hide" class="dropdown-item rounded">Show - hide main</a></li>
																				<li><a href="sidebar_right_default_toggle" class="dropdown-item rounded">Show - fix default width</a></li>
																				<li><a href="sidebar_right_mini_toggle" class="dropdown-item rounded">Show - fix mini width</a></li>
																				<li><a href="sidebar_right_secondary_hide" class="dropdown-item rounded">Show - hide secondary</a></li>
																				<li><a href="sidebar_right_visible" class="dropdown-item rounded">Visible by default</a></li>
																			</ul>
																		</li>
																		<li>
																			<a href="#" class="dropdown-item rounded">Content sidebar</a>
																			<ul class="list-unstyled">
																				<li><a href="sidebar_content_left" class="dropdown-item rounded">Left position</a></li>
																				<li><a href="sidebar_content_left_stretch" class="dropdown-item rounded">Left stretched</a></li>
																				<li><a href="sidebar_content_left_hidden" class="dropdown-item rounded">Left hidden</a></li>
																				<li><a href="sidebar_content_right" class="dropdown-item rounded">Right position</a></li>
																				<li><a href="sidebar_content_right_stretch" class="dropdown-item rounded">Right stretched</a></li>
																				<li><a href="sidebar_content_right_hidden" class="dropdown-item rounded">Right hidden</a></li>
																				<li><a href="sidebar_content_sections" class="dropdown-item rounded">Sectioned sidebar</a></li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>
																	<a href="#" class="dropdown-item rounded"><i class="icon-sort"></i> Vertical navigation</a>
																	<ul class="list-unstyled">
																		<li><a href="navigation_vertical_collapsible" class="dropdown-item rounded">Collapsible menu</a></li>
																		<li><a href="navigation_vertical_accordion" class="dropdown-item rounded">Accordion menu</a></li>
																		<li><a href="navigation_vertical_bordered" class="dropdown-item rounded">Bordered navigation</a></li>
																		<li><a href="navigation_vertical_right_icons" class="dropdown-item rounded">Right icons</a></li>
																		<li><a href="navigation_vertical_badges" class="dropdown-item rounded">Badges</a></li>
																		<li><a href="navigation_vertical_disabled" class="dropdown-item rounded">Disabled items</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#" class="dropdown-item rounded"><i class="icon-transmission"></i> Horizontal navigation</a>
																	<ul class="list-unstyled">
																		<li><a href="navigation_horizontal_hover" class="dropdown-item rounded">Submenu on hover</a></li>
																		<li><a href="navigation_horizontal_elements" class="dropdown-item rounded">With custom elements</a></li>
																		<li><a href="navigation_horizontal_mega" class="dropdown-item rounded active">Horizontal mega menu</a></li>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
													<div class="col-xl-3">
														<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Data visualization</div>
														<div class="dropdown-divider mb-2"></div>
														<div class="dropdown-item-group mb-3 mb-xl-0">
															<ul class="list-unstyled">
																<li>
																	<a href="#" class="dropdown-item rounded"><i class="icon-graph"></i> ECharts library</a>
																	<ul class="list-unstyled">
																		<li><a href="echarts_lines_areas" class="dropdown-item rounded">Lines and areas</a></li>
																		<li><a href="echarts_columns_waterfalls" class="dropdown-item rounded">Columns and waterfalls</a></li>
																		<li><a href="echarts_bars_tornados" class="dropdown-item rounded">Bars and tornados</a></li>
																		<li><a href="echarts_scatter" class="dropdown-item rounded">Scatter charts</a></li>
																		<li><a href="echarts_pies_donuts" class="dropdown-item rounded">Pies and donuts</a></li>
																		<li><a href="echarts_funnels_calendars" class="dropdown-item rounded">Funnels and calendars</a></li>
																		<li><a href="echarts_candlesticks_others" class="dropdown-item rounded">Candlesticks and others</a></li>
																		<li><a href="echarts_combinations" class="dropdown-item rounded">Chart combinations</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#" class="dropdown-item rounded"><i class="icon-statistics"></i> D3 library</a>
																	<ul class="list-unstyled">
																		<li><a href="d3_lines_basic" class="dropdown-item rounded">Simple lines</a></li>
																		<li><a href="d3_lines_advanced" class="dropdown-item rounded">Advanced lines</a></li>
																		<li><a href="d3_bars_basic" class="dropdown-item rounded">Simple bars</a></li>
																		<li><a href="d3_bars_advanced" class="dropdown-item rounded">Advanced bars</a></li>
																		<li><a href="d3_pies" class="dropdown-item rounded">Pie charts</a></li>
																		<li><a href="d3_circle_diagrams" class="dropdown-item rounded">Circle diagrams</a></li>
																		<li><a href="d3_tree" class="dropdown-item rounded">Tree layout</a></li>
																		<li><a href="d3_other" class="dropdown-item rounded">Other charts</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#" class="dropdown-item rounded"><i class="icon-google"></i> Google charts</a>
																	<ul class="list-unstyled">
																		<li><a href="google_lines" class="dropdown-item rounded">Line charts</a></li>
																		<li><a href="google_bars" class="dropdown-item rounded">Bar charts</a></li>
																		<li><a href="google_pies" class="dropdown-item rounded">Pie charts</a></li>
																		<li><a href="google_scatter_bubble" class="dropdown-item rounded">Bubble &amp; scatter charts</a></li>
																		<li><a href="google_other" class="dropdown-item rounded">Other charts</a></li>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
													<div class="col-xl-3">
														<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Extras</div>
														<div class="dropdown-divider mb-2"></div>
														<div class="dropdown-item-group mb-3 mb-xl-0">
															<ul class="list-unstyled">
																<li>
																	<a href="#" class="dropdown-item rounded"><i class="icon-puzzle4"></i> Extensions</a>
																	<ul class="list-unstyled">
																		<li><a href="extension_image_cropper" class="dropdown-item rounded">Image cropper</a></li>
																		<li><a href="extension_blockui" class="dropdown-item rounded">Block UI</a></li>
																		<li><a href="extension_dnd" class="dropdown-item rounded">Drag and drop</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#" class="dropdown-item rounded"><i class="icon-popout"></i> jQuery UI</a>
																	<ul class="list-unstyled">
																		<li><a href="jqueryui_interactions" class="dropdown-item rounded">Interactions</a></li>
																		<li><a href="jqueryui_forms" class="dropdown-item rounded">Forms</a></li>
																		<li><a href="jqueryui_components" class="dropdown-item rounded">Components</a></li>
																		<li><a href="jqueryui_sliders" class="dropdown-item rounded">Sliders</a></li>
																		<li><a href="jqueryui_navigation" class="dropdown-item rounded">Navigation</a></li>
																	</ul>
																</li>
																<li>
																	<a href="#" class="dropdown-item rounded"><i class="icon-calendar3"></i> Event calendars</a>
																	<ul class="list-unstyled">
																		<li><a href="fullcalendar_views" class="dropdown-item rounded">Basic views</a></li>
																		<li><a href="fullcalendar_styling" class="dropdown-item rounded">Event styling</a></li>
																		<li><a href="fullcalendar_formats" class="dropdown-item rounded">Language and time</a></li>
																		<li><a href="fullcalendar_advanced" class="dropdown-item rounded">Advanced usage</a></li>
																	</ul>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Right multi level menu</a>

										<div class="dropdown-menu">
											<a href="#" class="dropdown-item"><i class="icon-IE"></i> Second level</a>
											<div class="dropdown-submenu">
												<a href="#" class="dropdown-item dropdown-toggle"><i class="icon-firefox"></i> Has child</a>
												<div class="dropdown-menu">
													<a href="#" class="dropdown-item"><i class="icon-android"></i> Third level</a>
													<div class="dropdown-submenu">
														<a href="#" class="dropdown-item dropdown-toggle"><i class="icon-apple2"></i> Has child</a>
														<div class="dropdown-menu">
															<a href="#" class="dropdown-item"><i class="icon-html5"></i> Fourth level</a>
															<a href="#" class="dropdown-item"><i class="icon-css3"></i> Fourth level</a>
														</div>
													</div>
													<a href="#" class="dropdown-item"><i class="icon-windows"></i> Third level</a>
												</div>
											</div>
											<a href="#" class="dropdown-item"><i class="icon-chrome"></i> Second level</a>
										</div>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Left multi level menu</a>

										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><i class="icon-firefox"></i> Second level</a>
											<div class="dropdown-submenu dropdown-submenu-left">
												<a href="#" class="dropdown-item dropdown-toggle"><i class="icon-chrome"></i> Has child</a>
												<div class="dropdown-menu">
													<a href="#" class="dropdown-item"><i class="icon-android"></i> Third level</a>
													<div class="dropdown-submenu dropdown-submenu-left">
														<a href="#" class="dropdown-item dropdown-toggle"><i class="icon-apple2"></i> Has child</a>
														<div class="dropdown-menu">
															<a href="#" class="dropdown-item"><i class="icon-html5"></i> Fourth level</a>
															<a href="#" class="dropdown-item"><i class="icon-css3"></i> Fourth level</a>
														</div>
													</div>
													<a href="#" class="dropdown-item"><i class="icon-windows"></i> Third level</a>
												</div>
											</div>
											<a href="#" class="dropdown-item"><i class="icon-IE"></i> Second level</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /nav lists -->


				<!-- Content lists -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Content lists</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Besides simple navigation lists, dropdown menu can contain more complex lists of content: horizontal and vertical buttons list, all types of media lists, progresses, language selection etc etc. Just use standard content lists markup, custom mega menu markup and adjust menu width accordingly. For long lists, add <code>.dropdown-scrollable</code> class to <code>.dropdown-body</code> container to limit height to <code>340px</code> and make the content scrollable. You can also use color utility classes to change menu color, but bear in mind that some elements require color adjustments in this case.</p>

						<p class="font-weight-semibold">Examples:</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded mb-1">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-content-lists">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-content-lists">
								<ul class="navbar-nav">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Media list</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-300">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Media list</span>
												<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
											</div>

											<div class="dropdown-content-body dropdown-scrollable">
												<ul class="media-list">
													<li class="media">
														<div class="mr-3">
															<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
														</div>
														<div class="media-body">
															<a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
															<span class="d-block text-muted font-size-sm">Lead web developer</span>
														</div>
														<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
													</li>

													<li class="media">
														<div class="mr-3">
															<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
														</div>
														<div class="media-body">
															<a href="#" class="media-title font-weight-semibold">Will Brason</a>
															<span class="d-block text-muted font-size-sm">Marketing manager</span>
														</div>
														<div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
													</li>

													<li class="media">
														<div class="mr-3">
															<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
														</div>
														<div class="media-body">
															<a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
															<span class="d-block text-muted font-size-sm">Project manager</span>
														</div>
														<div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
													</li>

													<li class="media">
														<div class="mr-3">
															<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
														</div>
														<div class="media-body">
															<a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
															<span class="d-block text-muted font-size-sm">Business developer</span>
														</div>
														<div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
													</li>

													<li class="media">
														<div class="mr-3">
															<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
														</div>
														<div class="media-body">
															<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
															<span class="d-block text-muted font-size-sm">UX expert</span>
														</div>
														<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
													</li>
												</ul>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Linked media list</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-350">
											<div class="dropdown-content-header bg-transparent">
												<span class="font-weight-semibold">Linked list</span>
												<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
											</div>

											<div class="dropdown-divider m-0"></div>

											<div class="dropdown-content-body dropdown-scrollable p-0">
												<ul class="media-list media-list-linked">
													<li>
														<a href="#" class="media">
															<div class="mr-3">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
															</div>

															<div class="media-body">
																<div class="media-title d-flex">
																	<span class="font-weight-semibold">James Alexander</span>
																	<span class="ml-auto text-muted font-size-sm line-height-sm">04:58</span>
																</div>

																Who knows, maybe that would be the best thing for me...
															</div>
														</a>
													</li>

													<li>
														<a href="#" class="media">
															<div class="mr-3">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
															</div>

															<div class="media-body">
																<div class="media-title d-flex">
																	<span class="font-weight-semibold">Margo Baker</span>
																	<span class="ml-auto text-muted font-size-sm line-height-sm">12:16</span>
																</div>

																That was something he was unable to do because...
															</div>
														</a>
													</li>

													<li>
														<a href="#" class="media">
															<div class="mr-3">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
															</div>

															<div class="media-body">
																<div class="media-title d-flex">
																	<span class="font-weight-semibold">Jeremy Victorino</span>
																	<span class="ml-auto text-muted font-size-sm line-height-sm">22:48</span>
																</div>

																But that would be extremely strained and suspicious...
															</div>
														</a>
													</li>

													<li>
														<a href="#" class="media">
															<div class="mr-3">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
															</div>

															<div class="media-body">
																<div class="media-title d-flex">
																	<span class="font-weight-semibold">Beatrix Diaz</span>
																	<span class="ml-auto text-muted font-size-sm line-height-sm">Tue</span>
																</div>

																What a strenuous career it is that I've chosen...
															</div>
														</a>
													</li>

													<li>
														<a href="#" class="media">
															<div class="mr-3">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
															</div>

															<div class="media-body">
																<div class="media-title d-flex">
																	<span class="font-weight-semibold">Richard Vango</span>
																	<span class="ml-auto text-muted font-size-sm line-height-sm">Mon</span>
																</div>

																Other travelling salesmen live a life of luxury...
															</div>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Progress list</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-300">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Progress bars</span>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<div class="dropdown-content-body dropdown-scrollable">
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
									</li>

									<li class="nav-item mega-menu-left">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Link tiles</a>

										<div class="dropdown-menu dropdown-content wmin-xl-400">
											<div class="dropdown-content-header bg-dark">
												<span class="font-weight-semibold">Link tiles</span>
												<a href="#" class="text-white"><i class="icon-gear"></i></a>
											</div>

											<div class="dropdown-divider m-0"></div>

											<div class="dropdown-content-body p-1">
												<div class="row no-gutters">
													<div class="col-12 col-sm-4">
														<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
															<i class="icon-github4 icon-2x"></i>
															<div class="mt-2">Github</div>
														</a>

														<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
															<i class="icon-dropbox text-blue-400 icon-2x"></i>
															<div class="mt-2">Dropbox</div>
														</a>
													</div>
													
													<div class="col-12 col-sm-4">
														<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
															<i class="icon-dribbble3 text-pink-400 icon-2x"></i>
															<div class="mt-2">Dribbble</div>
														</a>

														<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
															<i class="icon-google-drive text-success-400 icon-2x"></i>
															<div class="mt-2">Drive</div>
														</a>
													</div>

													<div class="col-12 col-sm-4">
														<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
															<i class="icon-twitter text-info-400 icon-2x"></i>
															<div class="mt-2">Twitter</div>
														</a>

														<a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
															<i class="icon-youtube text-danger icon-2x"></i>
															<div class="mt-2">Youtube</div>
														</a>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<img src="../../../../global_assets/images/lang/es.png" class="img-flag mr-2" alt="">
											Languages
										</a>

										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item english"><img src="../../../../global_assets/images/lang/gb.png" class="img-flag" alt=""> English</a>
											<a href="#" class="dropdown-item ukrainian"><img src="../../../../global_assets/images/lang/ua.png" class="img-flag" alt=""> Українська</a>
											<a href="#" class="dropdown-item deutsch"><img src="../../../../global_assets/images/lang/de.png" class="img-flag" alt=""> Deutsch</a>
											<a href="#" class="dropdown-item active espana"><img src="../../../../global_assets/images/lang/es.png" class="img-flag" alt=""> España</a>
											<a href="#" class="dropdown-item russian"><img src="../../../../global_assets/images/lang/ru.png" class="img-flag" alt=""> Русский</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /content lists -->


				<!-- Content component -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Content components</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Besides navigation, mega dropdown menu can also contain <strong>all</strong> available components: forms, buttons, cards, 3rd party extensions, tables, images, videos etc. The only one exception is nested dropdowns with <code>data-toggle="dropdown"</code> attibute due to default BS limitation. If menu doesn't have 100% width, in some cases you would need to set minimum width by using <code>sizing</code> utility classes, because most of the components are fluid by default and their width depends on parent container width. All components are adapted for mobile browsers.</p>

						<p class="font-weight-semibold">Examples:</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded mb-1">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-content-components">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-content-components">
								<ul class="navbar-nav">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Table</a>
										<div class="dropdown-menu dropdown-content">
											<div class="dropdown-content-header">
												<div class="dropdown-header font-weight-semibold text-uppercase text-default p-0 m-0">Table example</div>
												<a href="#" class="text-default"><i class="icon-menu6"></i></a>
											</div>

											<div class="table-responsive wmin-600">
												<table class="table table-sm">
													<thead>
														<tr>
															<th>Description</th>
															<th>Category</th>
															<th>Assigned to</th>
															<th class="text-center">Progress</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><a href="#">Frontpage fixes</a></td>
															<td>Bugs</td>
															<td>
																<a href="#">
																	<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
																</a>
															</td>
															<td class="text-center"><span class="badge badge-pill bg-success">87%</span></td>
														</tr>
														<tr>
															<td><a href="#">CSS compilation</a></td>
															<td>Bugs</td>
															<td>
																<a href="#">
																	<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
																</a>
																<a href="#">
																	<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
																</a>
															</td>
															<td class="text-center"><span class="badge badge-pill bg-danger">18%</span></td>
														</tr>
														<tr>
															<td><a href="#">Responsive layout changes</a></td>
															<td>Layout</td>
															<td>
																<a href="#">
																	<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
																</a>
															</td>
															<td class="text-center"><span class="badge badge-pill bg-dark">52%</span></td>
														</tr>
														<tr>
															<td><a href="#">Add categories filter</a></td>
															<td>Content</td>
															<td>
																<a href="#">
																	<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
																</a>
																<a href="#">
																	<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
																</a>
																<a href="#">
																	<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
																</a>
															</td>
															<td class="text-center"><span class="badge badge-pill bg-success">100%</span></td>
														</tr>
														<tr>
															<td><a href="#">Media grid padding issue</a></td>
															<td>Bugs</td>
															<td>
																<a href="#">
																	<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
																</a>
															</td>
															<td class="text-center"><span class="badge badge-pill bg-success">100%</span></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</li>

									<li class="nav-item mega-menu-full">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Images</a>
										<div class="dropdown-menu dropdown-content">
											<div class="dropdown-content-header">
												<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase">Grid with images</div>
												<div class="list-icons">
							                		<a href="#" class="list-icons-item"><i class="icon-circle-left2"></i></a>
							                		<a href="#" class="list-icons-item ml-1"><i class="icon-circle-right2"></i></a>
							                	</div>
											</div>

											<div class="dropdown-content-body pb-0">
												<div class="row">
													<div class="col-md-6 col-lg-4 col-xl-2">
														<div class="card">
															<div class="card-img-actions">
																<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
																	<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
																	<span class="card-img-actions-overlay card-img-top">
																		<i class="icon-plus3"></i>
																	</span>
																</a>
															</div>
														</div>
													</div>

													<div class="col-md-6 col-lg-4 col-xl-2">
														<div class="card">
															<div class="card-img-actions">
																<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
																	<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
																	<span class="card-img-actions-overlay card-img-top">
																		<i class="icon-plus3"></i>
																	</span>
																</a>
															</div>
														</div>
													</div>

													<div class="col-md-6 col-lg-4 col-xl-2">
														<div class="card">
															<div class="card-img-actions">
																<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
																	<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
																	<span class="card-img-actions-overlay card-img-top">
																		<i class="icon-plus3"></i>
																	</span>
																</a>
															</div>
														</div>
													</div>

													<div class="col-md-6 col-lg-4 col-xl-2">
														<div class="card">
															<div class="card-img-actions">
																<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
																	<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
																	<span class="card-img-actions-overlay card-img-top">
																		<i class="icon-plus3"></i>
																	</span>
																</a>
															</div>
														</div>
													</div>

													<div class="col-md-6 col-lg-4 col-xl-2">
														<div class="card">
															<div class="card-img-actions">
																<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
																	<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
																	<span class="card-img-actions-overlay card-img-top">
																		<i class="icon-plus3"></i>
																	</span>
																</a>
															</div>
														</div>
													</div>

													<div class="col-md-6 col-lg-4 col-xl-2">
														<div class="card">
															<div class="card-img-actions">
																<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
																	<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
																	<span class="card-img-actions-overlay card-img-top">
																		<i class="icon-plus3"></i>
																	</span>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item mega-menu-full">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Videos</a>
										<div class="dropdown-menu dropdown-content">
											<div class="dropdown-content-header">
												<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase">Grid with videos</div>
												<div class="list-icons">
							                		<a href="#" class="list-icons-item"><i class="icon-circle-left2"></i></a>
							                		<a href="#" class="list-icons-item ml-1"><i class="icon-circle-right2"></i></a>
							                	</div>
											</div>

											<div class="dropdown-content-body pb-0">
												<div class="row">
													<div class="col-xl-3">
														<div class="card">
															<div class="embed-responsive embed-responsive-16by9 card-img-top">
																<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/173541384?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
															</div>
														</div>
													</div>

													<div class="col-xl-3">
														<div class="card">
															<div class="embed-responsive embed-responsive-16by9 card-img-top">
																<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/173652088?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
															</div>
														</div>
													</div>

													<div class="col-xl-3">
														<div class="card">
															<div class="embed-responsive embed-responsive-16by9 card-img-top">
																<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/127423845?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
															</div>
														</div>
													</div>

													<div class="col-xl-3">
														<div class="card">
															<div class="embed-responsive embed-responsive-16by9 card-img-top">
																<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/246294149?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item mega-menu-full">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Cards</a>
										
										<div class="dropdown-menu dropdown-content">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Cards and card groups</span>
												<a href="#">View all tasks</a>
											</div>

											<div class="dropdown-content-body pb-0">
												<div class="row">
													<div class="col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="d-flex flex-wrap justify-content-between mb-2">
																	<span class="font-size-xs line-height-xs text-uppercase text-muted font-weight-semibold">Nov 12, 11:25am</span>
																	<span class="font-size-xs line-height-xs text-uppercase text-success font-weight-semibold">Due in 12 days</span>
																</div>

																<h6 class="pt-1">
																	<a href="#">[#462] - Inaccurate small pagination height</a>
																</h6>

																<p class="mb-3">Ouch found swore much dear conductively hid submissively hatchet vexed far inanimately alongside candidly much and jeez</p>

																<div class="d-flex flex-wrap align-items-center">
																	<a href="#" class="mr-1"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="36" height="36" alt=""></a>
																	<a href="#" class="mr-1"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="36" height="36" alt=""></a>
																	<a href="#" class="mr-1"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="36" height="36" alt=""></a>
																	<a href="#" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2"><i class="icon-plus2"></i></a>
																</div>
															</div>
														</div>
													</div>

													<div class="col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="d-flex flex-wrap justify-content-between mb-2">
																	<span class="font-size-xs line-height-xs text-uppercase text-muted font-weight-semibold">Dec 25, 09:05am</span>
																	<span class="font-size-xs line-height-xs text-uppercase text-warning-300 font-weight-semibold">Due in 2 days</span>
																</div>

																<h6 class="pt-1">
																	<a href="#">[#548] - Avoid some unnecessary HTML string</a>
																</h6>

																<p class="mb-3">Dear spryly growled much far jeepers vigilantly less and far hideous and some mannishly less jeepers less and and crud</p>

																<div class="d-flex flex-wrap align-items-center">
																	<a href="#" class="mr-1"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="36" height="36" alt=""></a>
																	<a href="#" class="mr-1"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="36" height="36" alt=""></a>
																	<a href="#" class="mr-1"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="36" height="36" alt=""></a>
																	<a href="#" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2"><i class="icon-plus2"></i></a>
																</div>
															</div>
														</div>
													</div>

													<div class="col-xl-4">
														<div class="card">
															<div class="card-body">
																<div class="d-flex flex-wrap justify-content-between mb-2">
																	<span class="font-size-xs line-height-xs text-uppercase text-muted font-weight-semibold">Jan 02, 11:25pm</span>
																	<span class="font-size-xs line-height-xs text-uppercase text-danger font-weight-semibold">Overdue</span>
																</div>

																<h6 class="pt-1">
																	<a href="#">[#764] - Update json configuration</a>
																</h6>

																<p class="mb-3">Diabolically somberly astride crass one endearingly blatant depending peculiar antelope piquantly popularly adept much</p>

																<div class="d-flex flex-wrap align-items-center">
																	<a href="#" class="mr-1"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="36" height="36" alt=""></a>
																	<a href="#" class="mr-1"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="36" height="36" alt=""></a>
																	<a href="#" class="mr-1"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-round" width="36" height="36" alt=""></a>
																	<a href="#" class="btn btn-outline bg-grey border-grey text-grey-600 btn-icon rounded-round border-2"><i class="icon-plus2"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item mega-menu-full">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Collapsible</a>
										<div class="dropdown-menu dropdown-content">
											<div class="dropdown-content-header">
												<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase">Collapsible cards</div>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<div class="dropdown-content-body pb-0">
												<div class="row">
													<div class="col-xl-6">
														<div id="accordion-group">
															<div class="card mb-0 rounded-bottom-0">
																<div class="card-header">
																	<div class="card-title font-weight-semibold">
																		<a data-toggle="collapse" class="text-default" href="#accordion-item-group1">Accordion Item #1</a>
																	</div>
																</div>

																<div id="accordion-item-group1" class="collapse show" data-parent="#accordion-group">
																	<div class="card-body">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
																	</div>
																</div>
															</div>

															<div class="card mb-0 rounded-0 border-y-0">
																<div class="card-header">
																	<div class="card-title font-weight-semibold">
																		<a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-group2">Accordion Item #2</a>
																	</div>
																</div>

																<div id="accordion-item-group2" class="collapse" data-parent="#accordion-group">
																	<div class="card-body">
																		Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
																	</div>
																</div>
															</div>

															<div class="card rounded-top-0">
																<div class="card-header">
																	<div class="card-title font-weight-semibold">
																		<a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-group3">Accordion Item #3</a>
																	</div>
																</div>

																<div id="accordion-item-group3" class="collapse" data-parent="#accordion-group">
																	<div class="card-body">
																		3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="col-xl-6">
														<div>
															<div class="card mb-0 rounded-bottom-0">
																<div class="card-header">
																	<div class="card-title font-weight-semibold">
																		<a data-toggle="collapse" class="text-default" href="#collapsible-item-group1">Collapsible Item #1</a>
																	</div>
																</div>

																<div id="collapsible-item-group1" class="collapse show">
																	<div class="card-body">
																		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
																	</div>
																</div>
															</div>

															<div class="card mb-0 rounded-0 border-y-0">
																<div class="card-header">
																	<div class="card-title font-weight-semibold">
																		<a class="collapsed text-default" data-toggle="collapse" href="#collapsible-item-group2">Collapsible Item #2</a>
																	</div>
																</div>

																<div id="collapsible-item-group2" class="collapse">
																	<div class="card-body">
																		Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
																	</div>
																</div>
															</div>

															<div class="card rounded-top-0">
																<div class="card-header">
																	<div class="card-title font-weight-semibold">
																		<a class="collapsed text-default" data-toggle="collapse" href="#collapsible-item-group3">Collapsible Item #3</a>
																	</div>
																</div>

																<div id="collapsible-item-group3" class="collapse">
																	<div class="card-body">
																		3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto">
									<li class="nav-item mega-menu-full">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Mixed content</a>
										<div class="dropdown-menu dropdown-content">
											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-xl-8">
														<div class="row">
															<div class="col-xl-3">
																<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Form components</div>
																<div class="dropdown-divider mb-2"></div>
																<div class="mb-3 mb-xl-0">
																	<a href="form_inputs" class="dropdown-item rounded">Basic inputs</a>
																	<a href="form_controls_extended" class="dropdown-item rounded">Extended controls</a>
																	<a href="form_select2" class="dropdown-item rounded">Select2 selects</a>
																	<a href="form_floating_labels" class="dropdown-item rounded">Floating labels</a>
																	<a href="form_validation" class="dropdown-item rounded">Validation</a>
																</div>
															</div>
															<div class="col-xl-3">
																<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">UI components</div>
																<div class="dropdown-divider mb-2"></div>
																<div class="mb-3 mb-xl-0">
																	<a href="components_modals" class="dropdown-item rounded">Modals <span class="badge badge-pill bg-grey ml-auto">10+</span></a>
																	<a href="components_dropdowns" class="dropdown-item rounded">Dropdown menus</a>
																	<a href="components_buttons" class="dropdown-item rounded">Buttons</a>
																	<a href="components_tabs" class="dropdown-item rounded">Tabs component</a>
																	<a href="components_breadcrumbs" class="dropdown-item rounded">Breadcrumbs</a>
																</div>
															</div>
															<div class="col-xl-3">
																<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Sidebars</div>
																<div class="dropdown-divider mb-2"></div>
																<div class="mb-3 mb-xl-0">
																	<a href="sidebar_default_collapse" class="dropdown-item rounded">Main sidebar</a>
																	<a href="sidebar_secondary_after" class="dropdown-item rounded">Secondary sidebar</a>
																	<a href="sidebar_right_default_collapse" class="dropdown-item rounded">Right sidebar</a>
																	<a href="sidebar_content_left" class="dropdown-item rounded">Content sidebar</a>
																	<a href="sidebar_components" class="dropdown-item rounded">Sidebar components</a>
																</div>
															</div>
															<div class="col-xl-3">
																<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase mt-1">Navigation</div>
																<div class="dropdown-divider mb-2"></div>
																<div class="mb-3 mb-xl-0">
																	<a href="navigation_horizontal_click" class="dropdown-item rounded">Submenu on click</a>
																	<a href="navigation_horizontal_hover" class="dropdown-item rounded">Submenu on hover</a>
																	<a href="navigation_horizontal_elements" class="dropdown-item rounded">With custom elements</a>
																	<a href="navigation_horizontal_tabs" class="dropdown-item rounded">Tabbed navigation</a>
																	<a href="navigation_horizontal_mega" class="dropdown-item rounded active">Horizontal mega menu</a>
																</div>
															</div>
														</div>
													</div>

													<div class="col-xl-4">
														<div class="card-img">
															<iframe src="https://player.vimeo.com/video/173541384?title=0&byline=0&portrait=0" height="230" width="100%" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /content components -->


				<!-- Content nav -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Content nav</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This option is completely custom - Bootstrap doesn't support content nav components in dropdown menu by default, because of the class name conflicts and <code>dropdown.js</code> component limitation. This has been improved and both tabs and pills components can be used in dropdowns. There is a requirement - dropdown menu container should have <code>.dropdown-content</code> class to keep menu opened when links inside are clicked. Tabs and pills can be placed anywhere in the dropdown - top, center, bottom, left, right, can be nested and can have any type of content.</p>

						<p class="font-weight-semibold">Examples:</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded mb-1">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-content-nav">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-content-nav">
								<ul class="navbar-nav">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Basic tabs</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-350">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Highlighted tabs</span>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<ul class="nav nav-tabs nav-tabs-highlight nav-justified text-nowrap flex-nowrap mb-0">
												<li class="nav-item">
													<a href="#basic-tab1" class="nav-link border-left-0 active" data-toggle="tab">
														<i class="icon-menu7 mr-2"></i>
														Active
													</a>
												</li>
												<li class="nav-item">
													<a href="#basic-tab2" class="nav-link" data-toggle="tab">
														<i class="icon-mention mr-2"></i>
														Inactive
													</a>
												</li>
												<li class="nav-item">
													<a href="#basic-tab3" class="nav-link disabled border-right-0" data-toggle="tab">
														<i class="icon-comment-discussion mr-2"></i>
														Disabled
													</a>
												</li>
											</ul>

											<div class="tab-content">
												<div class="tab-pane fade active show" id="basic-tab1">
													<div class="dropdown-content-body">
														<div class="row">
															<div class="col-12">
																<div class="alpha-slate p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-danger p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-teal p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-blue p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-purple p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-pink p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-success p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-green p-1 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-info p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-orange p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-7">
																<div class="alpha-slate p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-warning p-2 mb-2"></div>
															</div>
															<div class="col-2">
																<div class="alpha-green p-2 mb-2"></div>
															</div>
														</div>
													</div>
												</div>

												<div class="tab-pane fade" id="basic-tab2">
													<div class="dropdown-content-body">
														<div class="row">
															<div class="col-7">
																<div class="alpha-slate p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-warning p-2 mb-2"></div>
															</div>
															<div class="col-2">
																<div class="alpha-green p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-info p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-orange p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-green p-1 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-purple p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-pink p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-success p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-blue p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-12">
																<div class="alpha-slate p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-danger p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-teal p-2 mb-2"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Underline tabs</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-350">
											<div class="dropdown-content-header pb-2">
												<span class="font-weight-semibold">Underline tabs</span>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<ul class="nav nav-tabs nav-tabs-bottom nav-justified text-nowrap flex-nowrap mb-0">
												<li class="nav-item">
													<a href="#underline-tab1" class="nav-link" data-toggle="tab">
														<i class="icon-menu7 mr-2"></i>
														Active
													</a>
												</li>
												<li class="nav-item">
													<a href="#underline-tab2" class="nav-link" data-toggle="tab">
														<i class="icon-mention mr-2"></i>
														Inactive
													</a>
												</li>
												<li class="nav-item">
													<a href="#underline-tab3" class="nav-link disabled" data-toggle="tab">
														<i class="icon-comment-discussion mr-2"></i>
														Disabled
													</a>
												</li>
											</ul>

											<div class="tab-content">
												<div class="tab-pane fade active show" id="underline-tab1">
													<div class="dropdown-content-body">
														<div class="row">
															<div class="col-12">
																<div class="alpha-slate p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-danger p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-teal p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-blue p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-purple p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-pink p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-success p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-green p-1 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-info p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-orange p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-7">
																<div class="alpha-slate p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-warning p-2 mb-2"></div>
															</div>
															<div class="col-2">
																<div class="alpha-green p-2 mb-2"></div>
															</div>
														</div>
													</div>
												</div>

												<div class="tab-pane fade" id="underline-tab2">
													<div class="dropdown-content-body">
														<div class="row">
															<div class="col-7">
																<div class="alpha-slate p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-warning p-2 mb-2"></div>
															</div>
															<div class="col-2">
																<div class="alpha-green p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-info p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-orange p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-green p-1 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-purple p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-pink p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-success p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-blue p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-12">
																<div class="alpha-slate p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-danger p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-teal p-2 mb-2"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Toolbar tabs</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-350">
											<div class="dropdown-content-header bg-transparent">
												<span class="font-weight-semibold">Tabs as a toolbar</span>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<ul class="nav nav-tabs nav-tabs-bottom border-top-1 bg-light nav-justified text-nowrap flex-nowrap mb-0">
												<li class="nav-item">
													<a href="#toolbar-tab1" class="nav-link" data-toggle="tab">
														<i class="icon-menu7 mr-2"></i>
														Active
													</a>
												</li>
												<li class="nav-item">
													<a href="#toolbar-tab2" class="nav-link" data-toggle="tab">
														<i class="icon-mention mr-2"></i>
														Inactive
													</a>
												</li>
												<li class="nav-item">
													<a href="#toolbar-tab3" class="nav-link disabled" data-toggle="tab">
														<i class="icon-comment-discussion mr-2"></i>
														Disabled
													</a>
												</li>
											</ul>

											<div class="tab-content">
												<div class="tab-pane fade active show" id="toolbar-tab1">
													<div class="dropdown-content-body">
														<div class="row">
															<div class="col-12">
																<div class="alpha-slate p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-danger p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-teal p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-blue p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-purple p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-pink p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-success p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-green p-1 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-info p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-orange p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-7">
																<div class="alpha-slate p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-warning p-2 mb-2"></div>
															</div>
															<div class="col-2">
																<div class="alpha-green p-2 mb-2"></div>
															</div>
														</div>
													</div>
												</div>

												<div class="tab-pane fade" id="toolbar-tab2">
													<div class="dropdown-content-body">
														<div class="row">
															<div class="col-7">
																<div class="alpha-slate p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-warning p-2 mb-2"></div>
															</div>
															<div class="col-2">
																<div class="alpha-green p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-info p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-orange p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-green p-1 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-purple p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-pink p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-success p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-blue p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-12">
																<div class="alpha-slate p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-danger p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-teal p-2 mb-2"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Bottom tabs</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-350">
											<div class="dropdown-content-header pb-0">
												<span class="font-weight-semibold">Bottom tabs</span>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<div class="tab-content">
												<div class="tab-pane fade active show" id="top-tab1">
													<div class="dropdown-content-body">
														<div class="row">
															<div class="col-12">
																<div class="alpha-slate p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-danger p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-teal p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-blue p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-purple p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-pink p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-success p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-green p-1 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-info p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-orange p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-7">
																<div class="alpha-slate p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-warning p-2 mb-2"></div>
															</div>
															<div class="col-2">
																<div class="alpha-green p-2 mb-2"></div>
															</div>
														</div>
													</div>
												</div>

												<div class="tab-pane fade" id="top-tab2">
													<div class="dropdown-content-body">
														<div class="row">
															<div class="col-7">
																<div class="alpha-slate p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-warning p-2 mb-2"></div>
															</div>
															<div class="col-2">
																<div class="alpha-green p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-info p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-orange p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-green p-1 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-purple p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-pink p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-success p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-blue p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-12">
																<div class="alpha-slate p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-danger p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-teal p-2 mb-2"></div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<ul class="nav nav-tabs nav-tabs-top nav-justified bg-light border-top-1 border-bottom-0 rounded-bottom text-nowrap flex-nowrap mb-0">
												<li class="nav-item">
													<a href="#top-tab1" class="nav-link" data-toggle="tab">
														<i class="icon-menu7 mr-2"></i>
														Active
													</a>
												</li>
												<li class="nav-item">
													<a href="#top-tab2" class="nav-link" data-toggle="tab">
														<i class="icon-mention mr-2"></i>
														Inactive
													</a>
												</li>
												<li class="nav-item">
													<a href="#top-tab3" class="nav-link disabled" data-toggle="tab">
														<i class="icon-comment-discussion mr-2"></i>
														Disabled
													</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Pills</a>
										
										<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-xl-400">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Basic pills</span>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<div class="dropdown-content-body pb-0">
												<ul class="nav nav-pills nav-justified text-nowrap flex-nowrap mb-0">
													<li class="nav-item">
														<a href="#basic-pill1" class="nav-link" data-toggle="tab">
															<i class="icon-menu7 mr-2"></i>
															Active
														</a>
													</li>
													<li class="nav-item">
														<a href="#basic-pill2" class="nav-link" data-toggle="tab">
															<i class="icon-mention mr-2"></i>
															Inactive
														</a>
													</li>
													<li class="nav-item">
														<a href="#basic-pill3" class="nav-link disabled" data-toggle="tab">
															<i class="icon-comment-discussion mr-2"></i>
															Disabled
														</a>
													</li>
												</ul>
											</div>

											<div class="tab-content">
												<div class="tab-pane fade active show" id="basic-pill1">
													<div class="dropdown-content-body">
														<div class="row">
															<div class="col-12">
																<div class="alpha-slate p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-danger p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-teal p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-blue p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-purple p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-pink p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-success p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-green p-1 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-info p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-orange p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-7">
																<div class="alpha-slate p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-warning p-2 mb-2"></div>
															</div>
															<div class="col-2">
																<div class="alpha-green p-2 mb-2"></div>
															</div>
														</div>
													</div>
												</div>

												<div class="tab-pane fade" id="basic-pill2">
													<div class="dropdown-content-body">
														<div class="row">
															<div class="col-7">
																<div class="alpha-slate p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-warning p-2 mb-2"></div>
															</div>
															<div class="col-2">
																<div class="alpha-green p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-info p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-orange p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-green p-1 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-purple p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-pink p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-success p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-blue p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-12">
																<div class="alpha-slate p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-danger p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-teal p-2 mb-2"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Pills toolbar</a>
										
										<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-xl-450">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Pills toolbar</span>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<div class="dropdown-content-body pb-0">
												<ul class="nav nav-pills nav-pills-bordered nav-pills-toolbar nav-justified text-nowrap flex-nowrap mb-0">
													<li class="nav-item">
														<a href="#toolbar-pill1" class="nav-link" data-toggle="tab">
															<i class="icon-menu7 mr-2"></i>
															Active
														</a>
													</li>
													<li class="nav-item">
														<a href="#toolbar-pill2" class="nav-link" data-toggle="tab">
															<i class="icon-mention mr-2"></i>
															Inactive
														</a>
													</li>
													<li class="nav-item">
														<a href="#toolbar-pill3" class="nav-link disabled" data-toggle="tab">
															<i class="icon-comment-discussion mr-2"></i>
															Disabled
														</a>
													</li>
												</ul>
											</div>

											<div class="tab-content">
												<div class="tab-pane fade active show" id="toolbar-pill1">
													<div class="dropdown-content-body">
														<div class="row">
															<div class="col-12">
																<div class="alpha-slate p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-danger p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-teal p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-blue p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-purple p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-pink p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-success p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-green p-1 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-info p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-orange p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-7">
																<div class="alpha-slate p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-warning p-2 mb-2"></div>
															</div>
															<div class="col-2">
																<div class="alpha-green p-2 mb-2"></div>
															</div>
														</div>
													</div>
												</div>

												<div class="tab-pane fade" id="toolbar-pill2">
													<div class="dropdown-content-body">
														<div class="row">
															<div class="col-7">
																<div class="alpha-slate p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-warning p-2 mb-2"></div>
															</div>
															<div class="col-2">
																<div class="alpha-green p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-info p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-orange p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-green p-1 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-primary p-1 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-purple p-2 mb-2"></div>
															</div>
															<div class="col-6">
																<div class="alpha-pink p-2 mb-2"></div>
															</div>
															<div class="col-3">
																<div class="alpha-success p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-blue p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-brown p-1 mb-2"></div>
															</div>
															<div class="col-12">
																<div class="alpha-slate p-1 mb-2"></div>
															</div>
															<div class="col-4">
																<div class="alpha-danger p-2 mb-2"></div>
															</div>
															<div class="col-8">
																<div class="alpha-teal p-2 mb-2"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /content nav -->


				<!-- Menu header styles -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Menu header styles</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">All dropdown menus support custom <strong>header</strong> with a number of elements - plain text, text links, buttons, single icons and icon groups, small images, badges and badge pills. Thanks to the power of flex model, all elements can be easily aligned vertically and horizontally. Vertical and horizontal spacing of dropdown header is equal to menu body spacing for better content alignment, but you can easily change it in <code>$dropdown-content-header-padding-y</code> variable or using spacing utility classes. Horizontal spacing of menu header depends on menu body spacing.</p>

						<p class="font-weight-semibold">Examples:</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded mb-1">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mega-menu-headers">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="mega-menu-headers">
								<ul class="navbar-nav">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Basic</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-300">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Menu header</span>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Text styles</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-300">
											<div class="dropdown-content-header">
												<span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Uppercase header</span>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Divider</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-300">
											<div class="dropdown-content-header bg-transparent">
												<span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Divided header</span>
											</div>

											<div class="dropdown-divider m-0"></div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Heading</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-300">
											<div class="dropdown-content-header">
												<h6 class="m-0">H6 heading title</h6>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Single icon</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-300">
											<div class="dropdown-content-header">
												<span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Menu header</span>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Icon group</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-300">
											<div class="dropdown-content-header">
												<span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Menu header</span>
												<div class="list-icons">
							                		<a href="#" class="list-icons-item"><i class="icon-mention"></i></a>
							                		<a href="#" class="list-icons-item"><i class="icon-comment-discussion"></i></a>
							                		<a href="#" class="list-icons-item"><i class="icon-gear"></i></a>
							                	</div>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Custom color</a>
										
										<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-xl-300">
											<div class="dropdown-content-header bg-dark">
												<span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Custom header color</span>
												<a href="#" class="text-white"><i class="icon-gear"></i></a>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /menu header styles -->


				<!-- Menu footer styles -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Menu footer styles</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">All dropdown menus support custom <strong>footers</strong> with a number of elements - plain text, text links, buttons, single icons and icon groups, small images, badges and badge pills. Thanks to the power of flex model, all elements can be easily aligned vertically and horizontally. Menu footer has top border and light grey background color by default, but also support custom colors by adding color utility classes (some elements require minor color adjustments as well). You can also control vertical spacing and other options with our set of utility classes.</p>

						<p class="font-weight-semibold">Examples:</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded mb-1">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mega-menu-footers">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="mega-menu-footers">
								<ul class="navbar-nav">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Text</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-300">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Menu header</span>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>

											<div class="dropdown-content-footer bg-light">
												<span>Left text</span>
												<span class="ml-auto">Right text</span>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Links</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-300">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Menu header</span>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>

											<div class="dropdown-content-footer bg-light">
												<a href="#">Left link</a>
												<a href="#" class="ml-auto">Right link</a>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Icons</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-300">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Menu header</span>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>

											<div class="dropdown-content-footer bg-light">
												<div>
													<a href="#" class="text-grey"><i class="icon-graph"></i></a>
													<a href="#" class="text-grey ml-2"><i class="icon-bug2"></i></a>
												</div>

												<div class="ml-auto">
													<a href="#" class="text-grey"><i class="icon-git-compare"></i></a>
													<a href="#" class="text-grey ml-2"><i class="icon-gear"></i></a>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Combo</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-300">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Menu header</span>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>

											<div class="dropdown-content-footer bg-light">
												<a href="#" class="d-inline-block text-grey">All updates</a>
												<div class="ml-auto">
													<a href="#" class="text-grey"><i class="icon-comment-discussion"></i></a>
													<a href="#" class="text-grey ml-2"><i class="icon-gear"></i></a>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Full width link</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-300">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Menu header</span>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>

											<div class="dropdown-content-footer justify-content-center p-0">
												<a href="#" class="d-block bg-light text-grey w-100 py-2"><i class="icon-menu7 d-block top-0"></i></a>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Buttons</a>
										
										<div class="dropdown-menu dropdown-content wmin-xl-300">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Menu header</span>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>

											<div class="dropdown-content-footer bg-light">
												<a href="#" class="btn btn-light bg-white border"><i class="icon-cross2 font-size-base mr-2"></i> Cancel</a>
												<a href="#" class="btn btn-primary ml-auto"><i class="icon-paperplane font-size-base mr-2"></i> Submit</a>
											</div>
										</div>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Custom color</a>
										
										<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-xl-300">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Menu header</span>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>

											<div class="dropdown-content-footer bg-dark border-top-0">
												<a href="#" class="d-inline-block text-white">All updates</a>
												<div class="ml-auto">
													<a href="#" class="text-white"><i class="icon-comment-discussion"></i></a>
													<a href="#" class="text-white ml-2"><i class="icon-gear"></i></a>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /menu footer styles -->


				<!-- Form layouts -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Form layouts</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Dropdown menu supports all available form layouts - inline, vertical and horizontal. You can use the forms just like anywhere else, they don't require any additional classes or styling. But you need to control dropdown width in order to fit the form rows correctly, because all forms are fluid by default. You can also control form layouts on small screens with grid classes, in case if you need to display complex forms with multiple columns. Examples below demonstrate form layouts, complex multi column form and separate group of form controls.</p>

						<p class="font-weight-semibold">Examples:</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded mb-1">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mega-menu-forms">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="mega-menu-forms">
								<ul class="navbar-nav">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Vertical form</a>
										<div class="dropdown-menu dropdown-content wmin-xl-300">
											<div class="dropdown-content-header">
												<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase">Vertical form</div>
												<a href="#" class="text-default"><i class="icon-menu7"></i></a>
											</div>

											<form class="dropdown-content-body" action="#">
												<div class="form-group">
													<div class="form-group-feedback form-group-feedback-right">
														<input type="text" class="form-control" placeholder="Your email">
														<div class="form-control-feedback">
															<i class="icon-mention text-muted"></i>
														</div>
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

												<div class="row">
													<div class="col-6 align-self-center">
														<div class="form-check">
															<label class="form-check-label">
																<input type="checkbox" class="form-input-styled" checked data-fouc>
																Remember
															</label>
														</div>
													</div>

													<div class="col-6 text-right">
														<button type="submit" class="btn btn-info">Submit <i class="icon-paperplane ml-2"></i></button>
													</div>
												</div>
											</form>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Horizontal form</a>
										<div class="dropdown-menu dropdown-content wmin-xl-500">
											<div class="dropdown-content-header">
												<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase">Horizontal form</div>
												<a href="#" class="text-default"><i class="icon-menu7"></i></a>
											</div>

											<form class="dropdown-content-body" action="#">
												<div class="form-group row">
													<label class="col-form-label col-xl-4">Your email:</label>
													<div class="col-xl-8">
														<div class="form-group-feedback form-group-feedback-right">
															<input type="text" class="form-control" placeholder="email@example.com">
															<div class="form-control-feedback">
																<i class="icon-mention text-muted"></i>
															</div>
														</div>
													</div>
												</div>

												<div class="form-group row">
													<label class="col-form-label col-xl-4">Password:</label>
													<div class="col-xl-8">
														<div class="form-group-feedback form-group-feedback-right">
															<input type="password" class="form-control" placeholder="Your password">
															<div class="form-control-feedback">
																<i class="icon-lock2 text-muted"></i>
															</div>
														</div>
													</div>
												</div>

												<div class="form-group row">
													<label class="col-form-label col-xl-4">Auto save:</label>
													<div class="col-xl-8">
														<div class="form-check">
															<label class="form-check-label">
																<input type="checkbox" class="form-input-styled" checked data-fouc>
																Enable
															</label>
														</div>
													</div>
												</div>

												<div class="form-group row mb-0">
													<div class="col-xl-8 ml-xl-auto">
														<button type="submit" class="btn btn-light">Cancel</button>
														<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
													</div>
												</div>
											</form>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Switch list</a>
										<div class="dropdown-menu dropdown-content wmin-xl-350">
											<div class="dropdown-content-header">
												<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase">Stacked switches</div>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<form class="dropdown-content-body" action="#">
												<div class="form-check form-check-right form-check-switchery">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-switchery" checked data-fouc>
														Allow direct changes
													</label>
												</div>

												<div class="form-check form-check-right form-check-switchery">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-switchery" checked data-fouc>
														Allow new registrations
													</label>
												</div>

												<div class="form-check form-check-right form-check-switchery">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-switchery" data-fouc>
														Navbar is visible to users
													</label>
												</div>

												<div class="form-check form-check-right form-check-switchery">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-switchery" data-fouc>
														Enable sessions
													</label>
												</div>

												<div class="form-check form-check-right form-check-switchery">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-switchery" checked data-fouc>
														Allow layout changes
													</label>
												</div>
											</form>

											<div class="dropdown-content-footer d-flex bg-light py-1">
												<a href="#" class="d-inline-block py-2 text-grey"><i class="icon-cross2 font-size-base mr-1"></i> Cancel</a>
												<a href="#" class="d-inline-block py-2 ml-auto"><i class="icon-checkmark3 font-size-base mr-1"></i> Save changes</a>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Checkers list</a>
										<div class="dropdown-menu dropdown-content wmin-xl-350">
											<div class="dropdown-content-header">
												<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase">Stacked checkers</div>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<form class="dropdown-content-body" action="#">
												<div class="form-check form-check-right">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" checked data-fouc>
														Allow direct changes
													</label>
												</div>

												<div class="form-check form-check-right">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" checked data-fouc>
														Allow new registrations
													</label>
												</div>

												<div class="form-check form-check-right">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Navbar is visible to users
													</label>
												</div>

												<hr>

												<div class="form-check form-check-right">
													<label class="form-check-label">
														<input type="radio" name="radio-group" class="form-input-styled" checked data-fouc>
														Grant permissions
													</label>
												</div>

												<div class="form-check form-check-right">
													<label class="form-check-label">
														<input type="radio" name="radio-group" class="form-input-styled" data-fouc>
														Revoke permissions
													</label>
												</div>
											</form>

											<div class="dropdown-content-footer d-flex bg-light py-1">
												<a href="#" class="d-inline-block py-2 text-grey"><i class="icon-cross2 font-size-base mr-1"></i> Cancel</a>
												<a href="#" class="d-inline-block py-2 ml-auto"><i class="icon-checkmark3 font-size-base mr-1"></i> Save changes</a>
											</div>
										</div>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto">
									<li class="nav-item mega-menu-right">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Multiple columns</a>
										<div class="dropdown-menu dropdown-content w-75">
											<div class="dropdown-content-header">
												<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase">Multi column form</div>
												<a href="#" class="text-default"><i class="icon-menu7"></i></a>
											</div>

											<form class="dropdown-content-body" action="#">
												<div class="row">
													<div class="col-xl-6">
														<div class="form-group">
															<label>First name:</label>
															<input type="text" placeholder="Eugene" class="form-control">
														</div>
													</div>

													<div class="col-xl-6">
														<div class="form-group">
															<label>Last name:</label>
															<input type="text" placeholder="Kopyov" class="form-control">
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-xl-6">
														<div class="form-group">
								                            <label>Country:</label>
								                            <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc>
								                            	<option></option>
								                                <option value="Cambodia">Cambodia</option> 
								                                <option value="Cameroon">Cameroon</option> 
								                                <option value="Canada">Canada</option> 
								                                <option value="Cape Verde">Cape Verde</option> 
								                            </select>
							                            </div>
													</div>

													<div class="col-xl-6">
														<div class="form-group">
															<label>State/Province:</label>
															<input type="text" placeholder="Bayern" class="form-control">
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-xl-3">
														<div class="form-group">
															<label>ZIP code:</label>
															<input type="text" placeholder="1031" class="form-control">
														</div>
													</div>

													<div class="col-xl-3">
														<div class="form-group">
															<label>City:</label>
															<input type="text" placeholder="Munich" class="form-control">
														</div>
													</div>

													<div class="col-xl-6">
														<div class="form-group">
															<label>Address line:</label>
															<input type="text" placeholder="Ring street 12" class="form-control">
														</div>
													</div>
												</div>

												<div class="text-xl-right">
													<button type="submit" class="btn btn-link">Cancel</button>
													<button type="submit" class="btn bg-blue ml-2">Submit <i class="icon-paperplane ml-2"></i></button>
												</div>
											</form>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /form layouts -->


				<!-- Menu sizing -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Menu sizing</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Dropdown menu has several width options: default dropdown width defined in <code>$dropdown-min-width</code> variable, responsive <code>width</code> and <code>min-width</code> utility classes (in pixels and percents), auto width that depends on child content width and full width. <strong>Auto</strong> width option requires <code>.mega-menu-left</code> or <code>.mega-menu-right</code> classes added to <code>.nav-item</code>; <strong>full</strong> width option requires <code>.mega-menu-full</code> class added to <code>.nav-item</code>. These 2 options should <strong>not</strong> have <code>.dropdown</code> or <code>.dropup</code> classes since position of parent container should be default (static).</p>

						<p class="font-weight-semibold">Examples:</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded mb-1">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mega-menu-size">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="mega-menu-size">
								<ul class="navbar-nav">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Auto</a>
										<div class="dropdown-menu dropdown-content">
											<div class="dropdown-content-header">
												<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase">Auto width</div>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-5">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Pixel width</a>
										<div class="dropdown-menu dropdown-content wmin-xl-500">
											<div class="dropdown-content-header">
												<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase">Custom pixel width</div>
												<a href="#" class="text-default"><i class="icon-menu7"></i></a>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item mega-menu-left">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Percent width</a>
										<div class="dropdown-menu dropdown-content w-xl-50">
											<div class="dropdown-content-header">
												<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase">Custom percent width</div>
												<a href="#" class="text-default"><i class="icon-menu7"></i></a>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item mega-menu-full">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Full width</a>
										<div class="dropdown-menu dropdown-content">
											<div class="dropdown-content-header">
												<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase">Full width menu</div>
												<a href="#" class="text-default"><i class="icon-menu7"></i></a>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Right (auto)</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-content">
											<div class="dropdown-content-header">
												<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase">Auto width</div>
												<a href="#" class="text-default"><i class="icon-menu7"></i></a>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-5">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Right (px)</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-xl-500">
											<div class="dropdown-content-header">
												<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase">Vertical form</div>
												<a href="#" class="text-default"><i class="icon-menu7"></i></a>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item mega-menu-right">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Right (%)</a>
										<div class="dropdown-menu dropdown-content w-xl-50">
											<div class="dropdown-content-header">
												<div class="font-size-sm line-height-sm font-weight-semibold text-uppercase">Vertical form</div>
												<a href="#" class="text-default"><i class="icon-menu7"></i></a>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-12">
														<div class="alpha-slate p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-danger p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-teal p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-blue p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-purple p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-pink p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-success p-2 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-green p-1 mb-2"></div>
													</div>
													<div class="col-6">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-info p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-orange p-2 mb-2"></div>
													</div>
													<div class="col-8">
														<div class="alpha-brown p-1 mb-2"></div>
													</div>
													<div class="col-4">
														<div class="alpha-primary p-1 mb-2"></div>
													</div>
													<div class="col-7">
														<div class="alpha-slate p-2 mb-2"></div>
													</div>
													<div class="col-3">
														<div class="alpha-warning p-2 mb-2"></div>
													</div>
													<div class="col-2">
														<div class="alpha-green p-2 mb-2"></div>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /menu sizing -->


				<!-- Content grid -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Content grid</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Mega menu component supports a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. Using a single set of <code>.col-[breakpoint]-[count]</code> grid classes, you can create a basic grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code> inside mega menu dropdown to make them stackable on mobile or <code>.col-[count]</code> classes to avoid stacking.</p>

						<p class="font-weight-semibold">Examples:</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-info-700 navbar-component rounded mb-1">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-menu-grid">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-menu-grid">
								<ul class="navbar-nav">
									<li class="nav-item mega-menu-full">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Content grid</a>
										
										<div class="dropdown-menu dropdown-content">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">12 columns grid</span>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-xl-6">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-xl-6
														</div>
													</div>
													<div class="col-xl-6">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-xl-6
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-xl-4">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-xl-4
														</div>
													</div>
													<div class="col-xl-4">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-xl-4
														</div>
													</div>
													<div class="col-xl-4">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-xl-4
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-xl-8">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-xl-8
														</div>
													</div>
													<div class="col-xl-4">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-xl-4
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item mega-menu-full">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Columns offset</a>
										
										<div class="dropdown-menu dropdown-content">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">Columns offset</span>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col-xl-4">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-xl-4
														</div>
													</div>
													<div class="col-xl-4 offset-xl-4">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-xl-4 .offset-xl-4
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-xl-4">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-xl-4
														</div>
													</div>
													<div class="col-xl-4 offset-xl-4">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-xl-4 .offset-xl-4
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-xl-6 offset-xl-3">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-xl-6 .offset-xl-3
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="nav-item mega-menu-full">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">No gutters</a>
										
										<div class="dropdown-menu dropdown-content">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">No gutters</span>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<div class="dropdown-content-body">
												<div class="row no-gutters">
													<div class="col-4">
														<div class="bg-slate rounded-left py-2 px-3 mb-3">
															.col-4
														</div>
													</div>
													<div class="col-4">
														<div class="bg-slate border-left-1 border-white py-2 px-3 mb-3">
															.col-4
														</div>
													</div>
													<div class="col-4">
														<div class="bg-slate rounded-right border-left-1 border-white py-2 px-3 mb-3">
															.col-4
														</div>
													</div>
												</div>

												<div class="row no-gutters">
													<div class="col-6">
														<div class="bg-slate rounded-left py-2 px-3 mb-3">
															.col-6
														</div>
													</div>
													<div class="col-6">
														<div class="bg-slate rounded-right border-left-1 border-white py-2 px-3 mb-3">
															.col-6
														</div>
													</div>
												</div>

												<div class="row no-gutters">
													<div class="col-8">
														<div class="bg-slate rounded-left py-2 px-3 mb-3">
															.col-8
														</div>
													</div>
													<div class="col-4">
														<div class="bg-slate rounded-right border-left-1 border-white py-2 px-3 mb-3">
															.col-4
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto">
									<li class="nav-item mega-menu-full">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Non-responsive</a>
										
										<div class="dropdown-menu dropdown-content">
											<div class="dropdown-content-header">
												<span class="font-weight-semibold">All breakpoints</span>
												<a href="#" class="text-default"><i class="icon-gear"></i></a>
											</div>

											<div class="dropdown-content-body">
												<div class="row">
													<div class="col">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col
														</div>
													</div>
													<div class="col">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col
														</div>
													</div>
													<div class="col">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col
														</div>
													</div>
													<div class="col">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-4">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-4
														</div>
													</div>
													<div class="col-4">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-4
														</div>
													</div>
													<div class="col-4">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-4
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-6">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-6
														</div>
													</div>
													<div class="col-6">
														<div class="bg-slate rounded py-2 px-3 mb-3">
															.col-6
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /content grid -->


				<!-- Navigation classes -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Navigation classes</h5>

						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						This table contains all classes related to the horizontal navbar navigation. Navbar navigation links build on default <code>.nav</code> options with their own modifier class and require the use of toggler classes for proper responsive styling. Navigation in navbars will also grow to occupy as much horizontal space as possible to keep your navbar contents securely aligned. Dropdown menus require a wrapping element for positioning, so be sure to use separate and nested elements for <code>.nav-item</code> and <code>.nav-link</code>.
					</div>

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th style="width: 20%;">Class</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th colspan="3" class="table-active">Navigation elements</th>
								</tr>
								<tr>
									<td><code>.nav</code></td>
									<td>Global wrapper for navigation list. It uses default Bootstrap's styles of <code>.nav</code> component and similar markup options.</td>
								</tr>
								<tr>
									<td><code>.navbar-nav</code></td>
									<td>for a full-height and lightweight navigation (including support for dropdowns).</td>
								</tr>
								<tr>
									<td><code>.nav-item</code></td>
									<td>This class is required in an immediate nav link parent element in any <code>.nav</code> container: sidebar, navbar, nav groups, tabs, pills etc.</td>
								</tr>
								<tr>
									<td><code>.nav-item.dropdown</code></td>
									<td>Combination of these classes is required for items with dropdown menu - nav item with <code>.dropdown</code> class is a dropdown toggle and menu wrapper that declares <code>position: relative;</code>.</td>
								</tr>
								<tr>
									<td><code>.nav-item.dropup</code></td>
									<td>Same as <code>.dropdown</code>, but this class is required in bottom navbars, because it triggers dropdown menus above elements in navbar. Dropdown caret direction in bottom navbar also depends on this class.</td>
								</tr>
								<tr>
									<td><code>.navbar-nav-link</code></td>
									<td>A custom class, unlike Bootstrap's default <code>.nav-link</code> class it doesn't affect navs in dropdowns. This class is responsible for navigation link styling and is also required as a part of nav list element structure. It's also a target for <code>.active</code> and <code>.disabled</code> classes.</td>
								</tr>

								<tr class="table-border-double">
									<th colspan="3" class="table-active">Dropdowns</th>
								</tr>
								<tr>
									<td><code>.dropdown-user</code></td>
									<td>This class is used in menu with user pic - image size is calculated dynamically in SASS and <code>.dropdown-user</code> is needed to target the container where these calculations need to run.</td>
								</tr>
								<tr>
									<td><code>.dropdown-content</code></td>
									<td>If you need to prevent dropdown from closing when you interact with it, add <code>.dropdown-content</code> to default <code>.dropdown-menu</code> container. This doesn't disable click event outside the dropdown though.</td>
								</tr>
								<tr>
									<td><code>.dropdown-content-header</code></td>
									<td>Class for the <strong>header</strong> within <code>.dropdown-content</code> - custom element with padding that mathches custom dropdown body and footer padding. Can contain multiple components on both sides.</td>
								</tr>
								<tr>
									<td><code>.dropdown-content-body</code></td>
									<td>Class for the <strong>body</strong> within <code>.dropdown-content</code> - element with custom padding, by default is similar to <code>.card-body</code>, but can be changed in SASS variables if you want to increase or decrease custom dropdown spacing.</td>
								</tr>
								<tr>
									<td><code>.dropdown-content-footer</code></td>
									<td>Class for the <strong>footer</strong> within <code>.dropdown-content</code> - custom element with padding that mathches custom dropdown body and header padding. Can contain multiple components on both sides.</td>
								</tr>
								<tr>
									<td><code>.dropdown-scrollable</code></td>
									<td>This class sets <code>max-height</code> to the dropdown body and adds vertical scrollbar. Can be added to <code>.dropdown-content-body</code> container to make only body scrollable or to the entire <code>.dropdown-menu</code>. Default max-height value is <code>340px</code>.</td>
								</tr>
								<tr>
									<td><code>.mega-menu-[alignment]</code></td>
									<td>These classes control the percent-based width of the menu. Options for <strong>[alignment]</strong>: <strong>full</strong> - sets 100% width, <strong>left</strong> - aligns menu to the left, <strong>right</strong> - aligns menu to the right. Note - make sure you don't use <code>.dropdown</code> and <code>.dropup</code> classes in <code>.nav-item</code> container.</td>
								</tr>
								<tr>
									<td><code>.w-[breakpoint]-[value]</code></td>
									<td>Set of responsive utility classes that set <code>min-width</code> property to the <code>.dropdown-menu</code> container. Very useful in dropdowns with long content. Available options for <strong>[value]</strong> (in pixels): 200, 250, 300, 350, 400, 450, 500, 550, 600.</td>
								</tr>

								<tr class="table-border-double">
									<th colspan="3" class="table-active">Misc</th>
								</tr>
								<tr>
									<td><code>.caret-0</code></td>
									<td>Add this class to any <code>.navbar-nav-link.dropdown-toggle</code> if you want to hide caret (directional arrow). Useful in nav links with single icon, without text and badge.</td>
								</tr>
								<tr>
									<td><code>[data-hover="dropdown"]</code></td>
									<td>Data attribute that triggers dropdown toggling on <code>hover</code> <strong>and</strong> <code>click</code>. It also affects all submenus within this menu, so needs to be added to <code>[data-toggle="dropdown"]</code> only on top level.</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /navigation classes -->

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
