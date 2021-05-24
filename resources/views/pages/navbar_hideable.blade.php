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
	<script src="../../../../global_assets/js/plugins/ui/headroom.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/navbar_hideable.js"></script>
	<!-- /Page JS files -->

</head>

<body class="navbar-top navbar-bottom">

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-slide-top fixed-top">
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
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Navbars</span> - Hide on Scroll</h4>
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
							<a href="navbar_hideable" class="breadcrumb-item">Navbars</a>
							<span class="breadcrumb-item active">Hide on scroll</span>
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

				<!-- Hideable navbar -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Hide navbar on scroll</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="mb-3">
							Fixed navbar that slides out of view when scrolling down and slides back in when scrolling up. Based on a lightweight, high-performance <code>headroom.js</code> extension that allows you to react to the user's scroll. This is a perfect solution, if you alqays want to access your navbar, but bring elements into view when appropriate, and give focus to your content the rest of the time. Supports <code>top</code> and <code>bottom</code> placements. Table below contains all plugin options available and can be applied to both top and bottom fixed navbars.
						</div>

						<div class="mb-3">
							<h6 class="font-weight-semibold">Configuration options</h6>
							<p class="mb-3">At it's most basic <code>headroom.js</code> simply adds and removes CSS classes from an element in response to a scroll event. Headroom.js can also accept an options object to alter the way it behaves. You can see the default options by inspecting <code>Headroom.options</code>. Relying on CSS classes affords headroom.js incredible flexibility. The choice of what to do when scrolling up or down is now entirely yours - anything you can do with CSS you can do in response to the user's scroll. The structure of an options object is as follows:</p>

							<div class="card card-table table-responsive shadow-0 mb-0">
								<table class="table">
									<thead>
										<tr>
											<th style="width: 20%;">Option</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code>offset</code></td>
											<td>Vertical offset in px before element is first unpinned. Value for default navbar is <code>48px</code> or <code>element.offsetHeight</code> for dynamic calculation.</td>
										</tr>
										<tr>
											<td><code>tolerance</code></td>
											<td>Scroll tolerance in px before state changes. Or you can specify tolerance individually for up/down scroll: <strong>up</strong> and <strong>down</strong>.</td>
										</tr>
										<tr>
											<td><code>classes</code></td>
											<td>CSS classes to apply: <strong>initial</strong> - when element is initialised, <strong>pinned</strong> - when scrolling up, <strong>unpinned</strong> - when scrolling down, <strong>top</strong> - when above offset, <strong>notTop</strong> - when below offset, <code>bottom</code> - when at bottom of scoll area, <code>notBottom</code> - when not at bottom of scroll area</td>
										</tr>
										<tr>
											<td><code>scroller</code></td>
											<td>Element to listen to scroll events on, defaults to <code>`window`</code></td>
										</tr>
										<tr>
											<td><code>onPin : function() {}</code></td>
											<td>Callback when pinned, <code>'this'</code> is headroom object</td>
										</tr>
										<tr>
											<td><code>onUnpin : function() {}</code></td>
											<td>Callback when unpinned, <code>'this'</code> is headroom object</td>
										</tr>
										<tr>
											<td><code>onTop : function() {}</code></td>
											<td>Callback when above offset, <code>'this'</code> is headroom object</td>
										</tr>
										<tr>
											<td><code>onNotTop : function() {}</code></td>
											<td>Callback when below offset, <code>'this'</code> is headroom object</td>
										</tr>
										<tr>
											<td><code>onBottom : function() {}</code></td>
											<td>Callback at bottom of page, <code>'this'</code> is headroom object</td>
										</tr>
										<tr>
											<td><code>onNotBottom : function() {}</code></td>
											<td>Callback when moving away from bottom of page, <code>'this'</code> is headroom object</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<h6 class="font-weight-semibold">Configuration examples</h6>
						<p class="mb-3">Headroom.js allows you to bring navbars into view when appropriate and give focus to your content the rest of the time. Configuration is very simple and is similar to fixed navbars: add <code>.fixed-top</code> to top navbar and/or <code>.fixed-bottom</code> to bottom navbar and initialize headroom.js on these classes with options. Note - if your navbar has dropdowns, use code from <code>onUnpin</code> event to close all dropdowns when navbar gets hidden.</p>

						<div class="row">
							<div class="col-md-6">
								<p class="font-weight-semibold">Top hideable navbar markup:</p>
								<pre class="language-markup mb-3" data-line="2, 5"><code>&lt;!-- Document body -->
&lt;body class="navbar-top">

	&lt;!-- Main navbar -->
	&lt;div class="navbar navbar-dark navbar-expand-md fixed-top">

		&lt;!-- Navbar brand -->
		&lt;div class="navbar-brand">
			...
		&lt;/div>
		&lt;!-- /navbar brand -->


		&lt;!-- Mobile toggler -->
		&lt;div class="d-md-none">
			...
		&lt;/div>
		&lt;!-- /mobile toggler -->


		&lt;!-- Navbar content -->
		&lt;div class="collapse navbar-collapse" id="navbar-top">
			...
		&lt;/div>
		&lt;!-- /navbar content -->

	&lt;/div>
	&lt;!-- /main navbar -->

&lt;/body>
&lt;!-- /document body -->
</code></pre>

								<p class="font-weight-semibold">Top hideable navbar config:</p>
								<pre class="language-js mb-3"><code>// Grab an element
var navbarTop = document.querySelector('.fixed-top');

// Construct an instance of Headroom, passing the element
var headroomTop  = new Headroom(navbarTop, {
    offset: navbarTop.offsetHeight,
    tolerance: {
        up: 10,
        down: 0
    },
    onUnpin : function() {
        $('.navbar').find('.show').removeClass('show');
    }
});

// Initialise
headroomTop.init(); 
</code></pre>
							</div>

							<div class="col-md-6">
								<p class="font-weight-semibold">Bottom hideable navbar markup:</p>
								<pre class="language-markup mb-3" data-line="2, 5"><code>&lt;!-- Document body -->
&lt;body class="navbar-bottom">

	&lt;!-- Main navbar -->
	&lt;div class="navbar navbar-dark navbar-expand-md fixed-bottom">

		&lt;!-- Navbar brand -->
		&lt;div class="navbar-brand">
			...
		&lt;/div>
		&lt;!-- /navbar brand -->


		&lt;!-- Mobile toggler -->
		&lt;div class="d-md-none">
			...
		&lt;/div>
		&lt;!-- /mobile toggler -->


		&lt;!-- Navbar content -->
		&lt;div class="collapse navbar-collapse" id="navbar-bottom">
			...
		&lt;/div>
		&lt;!-- /navbar content -->

	&lt;/div>
	&lt;!-- /main navbar -->

&lt;/body>
&lt;!-- /document body -->
</code></pre>

								<p class="font-weight-semibold">Bottom hideable navbar config:</p>
								<pre class="language-js mb-3"><code>// Grab an element
var navbarBottom = document.querySelector('.fixed-bottom');

// Construct an instance of Headroom, passing the element
var headroomBottom  = new Headroom(navbarBottom, {
    offset: navbarBottom.offsetHeight,
    tolerance: {
        up: 0,
        down: 10
    },
    onUnpin : function() {
        $('.navbar').find('.show').removeClass('show');
    }
});

// Initialise
headroomBottom.init(); 
</code></pre>
							</div>
						</div>
					</div>
				</div>
				<!-- /hideable navbar -->


				<!-- Navbar classes -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Navbar classes</h5>

						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Navbar is a complex, but very flexible component. It supports different types of content, responsive utilities manage content appearance and spacing on various screen sizes, supports multiple sizing and color options etc. And everything can be changed on-the-fly directly in HTML markup. If you can't find an option you need, you can always extend default SCSS code. Table below demonstrates all available classes that can be used within the navbar:
					</div>

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th style="width: 20%;">Class</th>
									<th style="width: 20%;">Type</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.navbar</code></td>
									<td><span class="text-muted">Required</span></td>
									<td>Default navbar class, must be used with any navbar type and color. Responsible for basic navbar and navbar components styling as a parent container.</td>
								</tr>
								<tr>
									<td><code>.navbar-light</code></td>
									<td><span class="text-muted">Required</span></td>
									<td>This class is used for <code>dark</code> background colors - default dark color is set in <code>$navbar-light-bg</code> variable, feel free to adjust the color according to your needs.</td>
								</tr>
								<tr>
									<td><code>.navbar-light.alpha-*</code></td>
									<td><span class="text-muted">Optional</span></td>
									<td>Combination of these classes allows you to set custom <strong>light</strong> color to the <code>light</code> navbar. Note - <code>.navbar-light</code> is required, it's responsible for correct content styling.</td>
								</tr>
								<tr>
									<td><code>.navbar-dark</code></td>
									<td><span class="text-muted">Required</span></td>
									<td>This class is used for <code>dark</code> background colors - default dark color is set in <code>$navbar-dark-bg</code> variable, feel free to adjust the color according to your needs.</td>
								</tr>
								<tr>
									<td><code>.navbar-dark.bg-*</code></td>
									<td><span class="text-muted">Optional</span></td>
									<td>Combination of these classes allows you to set custom <strong>dark</strong> color to the <code>dark</code> navbar. Note - <code>.navbar-dark</code> is required, it's responsible for correct content styling.</td>
								</tr>
								<tr>
									<td><code>.navbar-expand-[breakpoint]</code></td>
									<td><span class="text-muted">Optional</span></td>
									<td>For navbars that never collapse, add the <code>.navbar-expand</code> class on the navbar. For navbars that always collapse, don’t add any <code>.navbar-expand</code> class. Otherwise use this class to change when navbar content collapses behind a button.</td>
								</tr>
								<tr>
									<td><code>.navbar-brand</code></td>
									<td><span class="text-muted">Required</span></td>
									<td>Class for logo container. It can be applied to most elements, but an anchor works best as some elements might require utility classes or custom styles</td>
								</tr>
								<tr>
									<td><code>.navbar-toggler</code></td>
									<td><span class="text-muted">Required</span></td>
									<td>This class needs to be added to the navbar toggle button that toggles navbar content on small screens. Always used with visibility utility classes.</td>
								</tr>
								<tr>
									<td><code>.navbar-collapse</code></td>
									<td><span class="text-muted">Required</span></td>
									<td>Groups and hides navbar contents by a parent breakpoint. Requires an ID for targeting collapsible container when sidebar content is collapsed.</td>
								</tr>
								<tr>
									<td><code>.navbar-nav</code></td>
									<td><span class="text-muted">Required</span></td>
									<td>Responsive navigation container class that adds default styling for navbar navigation.</td>
								</tr>
								<tr>
									<td><code>.nav-item</code></td>
									<td><span class="text-muted">Required</span></td>
									<td>Wrapper class for immediate parents of all navigation links. Responsible for correct styling of nav items</td>
								</tr>
								<tr>
									<td><code>.navbar-nav-link</code></td>
									<td><span class="text-muted">Required</span></td>
									<td>Custom class for links within <code>.navbar-nav</code> list, it sets proper styling for links in light and dark navbars.</td>
								</tr>
								<tr>
									<td><code>.navbar-text</code></td>
									<td><span class="text-muted">Required</span></td>
									<td>This class adjusts vertical alignment and horizontal spacing for strings of text</td>
								</tr>
								<tr>
									<td><code>.navbar-component</code></td>
									<td><span class="text-muted">Optional</span></td>
									<td>Display navbar as a stand alone component, with border and rounded corners.</td>
								</tr>
								<tr>
									<td><code>.fixed-top</code></td>
									<td><span class="text-muted">Optional</span></td>
									<td>Makes navbar sticked to the <code>top</code> of the page. Requires proper class for <code>&lt;body></code> container, see the table below.</td>
								</tr>
								<tr>
									<td><code>.fixed-bottom</code></td>
									<td><span class="text-muted">Optional</span></td>
									<td>Makes navbar sticked to the <code>bottom</code> of the page. Requires proper class for <code>&lt;body></code> container, see the table below.</td>
								</tr>
								<tr>
									<td><code>.sticky-top</code></td>
									<td><span class="text-muted">Optional</span></td>
									<td>Adds <code>position: sticky;</code> to the navbar - it's treated as relatively positioned until its containing block crosses a specified threshold, at which point it is treated as fixed. Support is limited.</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /navbar classes -->


				<!-- Body classes -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Body classes</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						If you want to place navbar in non-static positions, you can choose from fixed to the top, fixed to the bottom, or stickied to the top (scrolls with the page until it reaches the top, then stays there). Fixed navbars use <code>position: fixed</code>, meaning they’re pulled from the normal flow of the DOM and require custom classes added to the <code>&lt;body></code> container to prevent overlap with other elements. The following table demonstrates the list of classes for <code>&lt;body></code> container if navbar has non-static position:
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
									<td><code>.navbar-top</code></td>
									<td>This class adds <code>top</code> padding to the <code>&lt;body></code> container. Works only with default navbar height. If another height is specified, apply another class (see the line below).</td>
								</tr>
								<tr>
									<td><code>.navbar-bottom</code></td>
									<td>This class adds <code>bottom</code> padding to the <code>&lt;body></code> container. Works only with default navbar height. If another height is specified, apply another class (see the line below).</td>
								</tr>
								<tr>
									<td><code>.navbar-top-[size]</code></td>
									<td>Controls <code>top</code> spacing of <code>&lt;body></code> container, if navbar has optional height. Available sizes: small (<code>*-sm</code>) and large (<code>*-lg</code>). Default navbar requires <code>.navbar-top</code> class only.</td>
								</tr>
								<tr>
									<td><code>.navbar-bottom-[size]</code></td>
									<td>Controls <code>bottom</code> spacing of <code>&lt;body></code> container, if navbar has optional height. Available sizes: small (<code>*-sm</code>) and large (<code>*-lg</code>). Default navbar requires <code>.navbar-bottom</code> class only.</td>
								</tr>
								<tr>
									<td><code>.navbar-top-[size]-[size]</code></td>
									<td>Use these classes if the layout has multiple <code>top</code> navbars, where first <code>[size]</code> is the size of the first navbar, second <code>[size]</code> - height of the second navbar. In this particular use case, <code>[size]</code> can be: <code>lg</code> if large height, <code>md</code> is default height <code>sm</code> is small height.  
								</tr>
								<tr>
									<td><code>.navbar-bottom-[size]-[size]</code></td>
									<td>Use these classes if the layout has multiple <code>bottom</code> navbars, where first <code>[size]</code> is the size of the first navbar, second <code>[size]</code> - height of the second navbar. In this particular use case, <code>[size]</code> can be: <code>lg</code> if large height, <code>md</code> is default height <code>sm</code> is small height.  
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /body classes -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<!-- Bottom navbar -->
	<div class="navbar navbar-expand-md navbar-light navbar-slide-bottom fixed-bottom">
		<div class="text-center d-md-none w-100">
			<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
				<i class="icon-menu mr-2"></i>
				Footer
			</button>
		</div>

		<div class="navbar-collapse collapse" id="navbar-footer">
			<span class="navbar-text">
				&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
			</span>

			<ul class="navbar-nav ml-md-auto">
				<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
				<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
				<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
			</ul>
		</div>
	</div>
	<!-- /bottom navbar -->

</body>
</html>
