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

	<script src="assets/js/app.js"></script>
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
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-hide d-none d-md-block" data-popup="tooltip-demo" title="Hide mini" data-placement="bottom" data-container="body" data-trigger="hover">
						<i class="icon-lan3"></i>
					</a>
				</li>
			</ul>

			<span class="navbar-text ml-md-3">
				<span class="badge badge-mark border-orange-300 mr-2"></span>
				Morning, Victoria!
			</span>

			<ul class="navbar-nav ml-md-auto">
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


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Sidebars</span> - Mini Hideable</h4>
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
							<a href="sidebar_mini_hide" class="breadcrumb-item">Sidebars</a>
							<span class="breadcrumb-item active">Mini hideable</span>
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
					<h6 class="alert-heading font-weight-semibold mb-1">Hideable mini sidebar</h6>
					If <code>&lt;body></code> container has <code>.sidebar-xs</code> class, use <code>.sidebar-main-hide</code> sidebar control button class to hide/show mini sidebar. Make sure you use only 1 class per button.
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
