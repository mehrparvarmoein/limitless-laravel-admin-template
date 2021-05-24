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
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/sticky.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/components_scrollspy.js"></script>
	<!-- /Page JS files -->

</head>

<body data-spy="scroll" data-target=".sidebar-component-right">

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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Home</span> - Changelog</h4>
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
							<span class="breadcrumb-item active">Changelog</span>
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
				<div class="d-flex align-items-start flex-column flex-md-row">

					<!-- Left content -->
					<div class="w-100 order-2 order-md-1">

						<!-- Version 2.2 -->
						<div class="card" id="v2_2">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Version 2.2</h5>
								<div class="header-elements">
									<span class="text-muted">April 2, 2019</span>

									<div class="list-icons ml-3">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Version 2.2 is a quick update that includes mostly bug fixes reported by active users and updates of all components to the most recent version. Initial plan was to deliver a big update with lots of new things, but creating of those things take time and users asked to split it up into 2 separate updates. This is the first part. Although it's the first part, it includes some critical changes in SCSS files related to icon sets. Follow the list of changed files for more info.</p>

<pre class="language-javascript mb-4"><code>// # List of updates
// ------------------------------

[updated]  Bootstrap to 4.3.1
[updated]  NoUI slider (nouislider.min.js) - to 13.1.3
[updated]  ION range slider (ion_rangeslider.min.js) - to 2.3.0
[updated]  ECharts (charts.min.js) - to 4.1.0
[updated]  Image cropper (cropper.min.js) - to 4.0.0
[updated]  Bootstrap file input (fileinput.min.js and related) - to 4.5.2
[updated]  Fullcalendar files - to 4.0.1
[updated]  Trumbowyg editor (trumbowyg.min.js and related) - to 2.14.0
[updated]  SweetAlert2 (sweet_alert.min.js) - to 7.29.1
[updated]  Font Awesome - to 5.5.0
[updated]  AnimateCSS - to 3.7.0
[updated]  Bootstrap file input (fileinput) - to 4.5.2


// # List of fixes
// ------------------------------

[fixed]  Form wizard - Current/completed step icon in IE 11
[fixed]  IE placeholder broken
[fixed]  Inline form in jQuery UI dialog is broken
[fixed]  SweetAlert - multiple issues popped up during library upgrade
[fixed]  Trumbowyg - checkboxes in modals are misaligned
[fixed]  IE11 - SweetAlert2 - Promise library is required
[fixed]  IE11 - layouts 2 and 4 have extra scrollbar in content area
[fixed]  IE11 - Datatable footer has extra whitespace
[fixed]  Boxed layout - Timelines - vertical lines are not visible
[fixed]  Wrong path to panel_bg.png file
[fixed]  RTL layout - wrong icons in pagination
[fixed]  RTL layout - newer Fullcalendar version breaks the layout
[fixed]  NoUI slider pips styling
[fixed]  Pickadate picker width
[fixed]  ECharts library throws JS errors if DOM element doesn't exist 
[fixed]  Fullcalendar throws JS errors if DOM element doesn't exist
[fixed]  AJAX and Dynamic Queue examples of Sweet Alert
[fixed]  BlockUI in sidebar doesn't show up



// # List of improvements
// ------------------------------

[improved]  Converted all icon sets to SCSS
[improved]  Users now can replace default icon sets in SCSS
[improved]  Replaced all hardcoded icon codes with a set of variables
[improved]  Refactored bunch of JS and SCSS files
[improved]  Removed unused mixin overrides
[improved]  Now all icons include unicode
</code></pre>
							</div>
						</div>
						<!-- /version 2.2 -->


						<!-- Version 2.1 -->
						<div class="card" id="v2_1">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Version 2.1</h5>
								<div class="header-elements">
									<span class="text-muted">September 26, 2018</span>

									<div class="list-icons ml-3">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">This version includes fixes for all bugs reported by fellow users - IE/Edge browsers issues, missing rules in various components and a bunch of improvements. This is the last update that is focused only on bug fixing, starting from the next one the main focus will be new layouts, themes and functionality. This means that migration from BS3 to BS4 is finally over.</p>

<pre class="language-javascript"><code>// # List of updates
// ------------------------------

[updated]	 Bootstrap to 4.1.3



// # List of fixes
// ------------------------------

[fixed]	 IE11/Edge - userpic in navbar increases navbar height
[fixed]  IE11/Edge - badges in navbar are misaligned
[fixed]	 IE11/Edge - sidebar content is hidden in fixed layout
[fixed]	 IE11/Edge - native scrollbar is visible in container with custom scrollbar
[fixed]	 Layouts 3/4/5 - Fixed sidebar styles still exist in _sidebar.scss
[fixed]	 Reversed rotation animation has incorrect animation name
[fixed]	 Pick-a-Date: Missing min-width CSS rule
[fixed]	 Pick-a-Date: Month/year drop-down
[fixed]	 Select2: in multiple select results text doesn't wrap
[fixed]	 Select2: custom light background applies incorrect shadow and placeholder color
[fixed]	 Replace input type="datetime" with input type="datetime-local"
[fixed]	 Pricing tables - text color in corner ribbon is incorrect
[fixed]	 RTL - Mail list page - dropdowns in mail selection appear behind sidebar
[fixed]	 RTL - In navbar button dropdowns don't support .dropdown-menu-right class
[fixed]  Set of border utility classes mentioned in helpers has incorrect side names
[fixed]  Documentation: Badge class still shows "badge-block" instead of "d-block"


// # List of improvements
// ------------------------------

[improved]  Removed file extensions in components.scss
</code></pre>
							</div>
						</div>
						<!-- /version 2.1 -->


						<!-- Version 2.0.1 -->
						<div class="card" id="v2_0_1">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Version 2.0.1</h5>
								<div class="header-elements">
									<span class="text-muted">June 20, 2018</span>

									<div class="list-icons ml-3">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Quick update that includes bug fixes for version 2.0, the most important one is IE10/11 browser support - now all layouts work fine in IE10+. Here is a list of changes:</p>

<pre class="language-javascript"><code>// # List of fixed
// ------------------------------

[fixed]  Flexbox layout is broken in IE10 and IE11
[fixed]  Right aligned custom checkers are misaligned
[fixed]  Multiselect menu should have 100% width by default
[fixed]  Sectioned sidebar with custom background color has wrong background in collapsed mode
</code></pre>
							</div>
						</div>
						<!-- /version 2.0.1 -->


						<!-- Initial release -->
						<div class="card" id="v2_0">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Version 2.0</h5>
								<div class="header-elements">
									<span class="text-muted">June 20, 2018</span>

									<div class="list-icons ml-3">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Bootstrap 4 version has its own changelog, because 2 Bootstrap version are completely different. Major part of components have been customized in order to support BS4 and flexbox layout, so components from BS3 can be used in this version. Since all components are the same in all layouts, the template now supports 1 main layout and 4 child layouts - this means only 1st layout includes all components, child layouts include only layout-related files. This makes maintenance easy and fast. Main highlights:</p>

								<div class="row mb-3">
									<div class="col-sm-4">
										<ul class="list">
											<li>Adapted 3rd party components</li>
											<li>Latest versions of all main libraries</li>
											<li>Built with SCSS</li>
											<li>Improved gulp tasks</li>
											<li>Based on flexbox model</li>
											<li>Single set of assets for all layouts</li>
											<li>Moved to modular JS pattern</li>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="list">
											<li>All bugfixes and improvements from BS3 are included</li>
											<li>Updated all examples</li>
											<li>High attention to details</li>
											<li>Improved file structure</li>
											<li>Improved starter kit</li>
											<li>Improved vertical navigation</li>
											<li>Improved multi level navigation in navbar</li>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="list">
											<li>Mega menu has been extended</li>
											<li>Improved performance</li>
											<li>Removed old and unmaintained libraries</li>
											<li>Single SCSS configuration file with all components</li>
											<li>Improved theming support</li>
											<li>Simple style editing</li>
											<li>... and much more</li>
										</ul>
									</div>
								</div>

								<div><strong>Important note:</strong> since every single line of code is completely different from Bootstrap 3 version, there's no any migration guide: markup, class names, source files, pre-processors and logic are different. But both versions have their own extensive documentation. Bootstrap 3 is officially in maintenance mode since 2017 and from now on I am mainly focused on extending and improving BS4 version.</div>
							</div>
						</div>
						<!-- /initial release -->

					</div>
					<!-- /left content -->


					<!-- Right sidebar component -->
					<div class="sidebar-sticky w-100 w-md-auto order-1 order-md-2">
						<div class="sidebar sidebar-light sidebar-component sidebar-component-right sidebar-expand-md">
							<div class="sidebar-content">
			        			
			        			<!-- Navigation -->
								<div class="card">
									<div class="card-header bg-transparent header-elements-inline">
										<span class="text-uppercase font-size-sm font-weight-semibold">Changelog</span>
										<div class="header-elements">
											<div class="list-icons">
						                		<a class="list-icons-item" data-action="collapse"></a>
					                		</div>
				                		</div>
									</div>

									<div class="card-body">
										<a href="http://kopyov.ticksy.com" class="btn bg-danger-400 btn-block" target="_blank"><i class="icon-lifebuoy mr-2"></i> Item support</a>
									</div>

									<ul class="nav nav-sidebar nav-scrollspy">
										<li class="nav-item-header font-size-xs line-height-xs text-uppercase pt-0">Version history</li>
										<li class="nav-item"><a href="#v2_2" class="nav-link">Version 2.2  <span class="text-muted font-weight-normal ml-auto">03.04.2019</span></a></li>
										<li class="nav-item"><a href="#v2_1" class="nav-link">Version 2.1  <span class="text-muted font-weight-normal ml-auto">26.09.2018</span></a></li>
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link">Version 2.0 <span class="text-muted font-weight-normal ml-auto">28.06.2018</span></a>
											<ul class="nav nav-group-sub d-block">
												<li class="nav-item"><a href="#v2_0_1" class="nav-link">Version 2.0.1  <span class="text-muted font-weight-normal ml-auto">28.06.2018</span></a></li>
												<li class="nav-item"><a href="#v2_0" class="nav-link">Initial release  <span class="text-muted font-weight-normal ml-auto">20.06.2018</span></a></li>
											</ul>
										</li>
						            </ul>
					            </div>
					            <!-- /navigation -->

				            </div>
			            </div>
		            </div>
					<!-- /right sidebar component -->

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
