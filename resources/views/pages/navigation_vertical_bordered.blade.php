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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Vertical Nav</span> - Bordered</h4>
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
							<a href="navigation_vertical_accordion" class="breadcrumb-item">Vertical nav</a>
							<span class="breadcrumb-item active">Bordered</span>
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

				<!-- Bordered navigation -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Bordered navigation</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">By default, vertical sidebar navigation doesn't have clear visual separation between nav items, it has its own advantages and disadvantages - thanks to bigger vertical padding, nav items are readable enough and match general design theme. But in some cases you might want to highlight them by adding horizontal lines to them. This is where this nav style preset might be handy. To use, simply add <code>.nav-sidebar-bordered</code> class to main sidebar nav container.</p>

						<div class="row">
							<div class="col-md-6">
								<p class="font-weight-semibold">In light sidebar:</p>
								<div class="sidebar sidebar-light sidebar-component position-static w-100 d-block">
									<div class="sidebar-content position-static">

										<!-- User menu -->
										<div class="card sidebar-user">
											<div class="card-body">
												<div class="media">
													<a href="#" class="mr-3">
														<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt="">
													</a>

													<div class="media-body">
														<div class="media-title font-weight-semibold">Victoria Baker</div>
														<div class="font-size-xs opacity-50">
															<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
														</div>
													</div>

													<div class="ml-3 align-self-center">
														<a href="#" class="text-default"><i class="icon-cog3"></i></a>
													</div>
												</div>
											</div>
										</div>
										<!-- /user menu -->


										<!-- Navigation -->
										<div class="card">
											<ul class="nav nav-sidebar nav-sidebar-bordered" data-nav-type="accordion">
												<li class="nav-item-header">
													<div class="text-uppercase font-size-sm line-height-sm">Sidebar header</div>
												</li>

												<li class="nav-item">
													<a href="#" class="nav-link">
														<i class="icon-strategy"></i>
														Top level link
													</a>
												</li>

												<li class="nav-item">
													<a href="#" class="nav-link">
														<i class="icon-puzzle4"></i>
														Active link
													</a>
												</li>

												<li class="nav-item nav-item-submenu">
													<a href="#" class="nav-link"><i class="icon-stack2"></i> With children</a>

													<ul class="nav nav-group-sub">
														<li class="nav-item"><a href="#" class="nav-link">Second level link</a></li>
														<li class="nav-item"><a href="#" class="nav-link">Second level link</a></li>
													</ul>
												</li>

												<li class="nav-item-header">
													<div class="text-uppercase font-size-sm line-height-sm">Sidebar header</div>
												</li>

												<li class="nav-item nav-item-submenu">
													<a href="#" class="nav-link"><i class="icon-cube3"></i> Multiple levels</a>

													<ul class="nav nav-group-sub">
														<li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
														<li class="nav-item nav-item-submenu">
															<a href="#" class="nav-link">Second level with child</a>
															<ul class="nav nav-group-sub">
																<li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
																<li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
															</ul>
														</li>
														<li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
													</ul>
												</li>

												<li class="nav-item">
													<a href="#" class="nav-link disabled">
														<i class="icon-make-group"></i>
														Disabled link
													</a>
												</li>
											</ul>
										</div>
										<!-- /navigation -->

									</div>
								</div>
							</div>

							<div class="col-md-6">
								<p class="font-weight-semibold">In dark sidebar:</p>
								<div class="sidebar sidebar-dark sidebar-component position-static w-100 d-block">
									<div class="sidebar-content position-static">

										<!-- User menu -->
										<div class="card sidebar-user">
											<div class="card-body">
												<div class="media">
													<a href="#" class="mr-3">
														<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt="">
													</a>

													<div class="media-body">
														<div class="media-title font-weight-semibold">Victoria Baker</div>
														<div class="font-size-xs opacity-50">
															<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
														</div>
													</div>

													<div class="ml-3 align-self-center">
														<a href="#" class="text-white"><i class="icon-cog3"></i></a>
													</div>
												</div>
											</div>
										</div>
										<!-- /user menu -->


										<!-- Navigation -->
										<div class="card">
											<ul class="nav nav-sidebar nav-sidebar-bordered" data-nav-type="accordion">
												<li class="nav-item-header">
													<div class="text-uppercase font-size-sm line-height-sm">Sidebar header</div>
												</li>

												<li class="nav-item">
													<a href="#" class="nav-link">
														<i class="icon-strategy"></i>
														Top level link
													</a>
												</li>

												<li class="nav-item">
													<a href="#" class="nav-link">
														<i class="icon-puzzle4"></i>
														Active link
													</a>
												</li>

												<li class="nav-item nav-item-submenu">
													<a href="#" class="nav-link"><i class="icon-stack2"></i> With children</a>

													<ul class="nav nav-group-sub">
														<li class="nav-item"><a href="#" class="nav-link">Second level link</a></li>
														<li class="nav-item"><a href="#" class="nav-link">Second level link</a></li>
													</ul>
												</li>

												<li class="nav-item-header">
													<div class="text-uppercase font-size-sm line-height-sm">Sidebar header</div>
												</li>

												<li class="nav-item nav-item-submenu">
													<a href="#" class="nav-link"><i class="icon-cube3"></i> Multiple levels</a>

													<ul class="nav nav-group-sub">
														<li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
														<li class="nav-item nav-item-submenu">
															<a href="#" class="nav-link">Second level with child</a>
															<ul class="nav nav-group-sub">
																<li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
																<li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
															</ul>
														</li>
														<li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
													</ul>
												</li>

												<li class="nav-item">
													<a href="#" class="nav-link disabled">
														<i class="icon-make-group"></i>
														Disabled link
													</a>
												</li>
											</ul>
										</div>
										<!-- /navigation -->

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /bordered navigation -->


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
						This table contains all classes related to the vertical sidebar navigation. Vertical navigation is a custom layout element that uses global <code>nav</code> component classes and adapted for main navigation purposes. Depending on the needs, it supports different options such as collapsing type, icons, badges, combination with other sidebar components etc. This list explains the logic and purpose:
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
									<td><code>.nav</code></td>
									<td>Global wrapper for navigation list. It uses default Bootstrap's styles of <code>.nav</code> component and similar markup options.</td>
								</tr>
								<tr>
									<td><code>.nav-sidebar</code></td>
									<td>Default navigation class, must be used with any navigation type and color. Responsible for targeting specific style changes and basic styling of item colors, borders and icons.</td>
								</tr>
								<tr>
									<td><code>.nav-item-header</code></td>
									<td>Targets optional <code>header</code> element for separating group of nav items. In main sidebar this class is responsible for toggling text in folded sidebar mode. Use text utility classes to style inner content.</td>
								</tr>
								<tr>
									<td><code>.nav-item-divider</code></td>
									<td>Navigation item with this class separates groups of related menu items - it adds thick light (dark in light sidebar) line with extra vertical spacing. Useful in long lists.</td>
								</tr>
								<tr>
									<td><code>.nav-item</code></td>
									<td>This class is required as an immediate nav link parent in any <code>.nav</code> container. Since active link color is different from hover and initial states color, <code>.nav-item</code> has 1px vertical spacing to separate items that have same background color. Dropdown menu items have same logic.</td>
								</tr>
								<tr>
									<td><code>.nav-link</code></td>
									<td>This class is responsible for navigation link styling and is also required as a part of nav list class structure. It's also a target for <code>.active</code> and <code>disabled</code> states. Please note - this class doesn't reset <code>&lt;button></code> styles, so make sure you use <code>&lt;a></code> instead.</td>
								</tr>
								<tr>
									<td><code>.nav-link.active</code></td>
									<td>Combination of these classes in a single <code>&lt;a></code> element highlights nav item link and indicates the current page. By default, expanded submenu and <code>active</code> item state color is the same in each level.</td>
								</tr>
								<tr>
									<td><code>.nav-link.disabled</code></td>
									<td>Combination of these classes in a single <code>&lt;a></code> element disables all pointer and click events and mutes out nav link text and background colors.</td>
								</tr>


								<tr>
									<td><code>.nav-item-submenu</code></td>
									<td>This class indicates nav list item with children menu levels and needs to be added to <code>.nav-item</code> container.</td>
								</tr>
								<tr>
									<td><code>.nav-item-expanded</code></td>
									<td>Responsible for <strong>expanding</strong> submenu on page load - this class should be added to <code>.nav-item</code> container in all levels.</td>
								</tr>
								<tr>
									<td><code>.nav-item-open</code></td>
									<td>This class also should be used in combination with <code>.nav-item</code> and/or <code>.nav-item-expanded</code> classes, since it's responsible for some styling and toggles dynamically.</td>
								</tr>
								<tr>
									<td><code>.nav-group-sub</code></td>
									<td>Navigation submenu class - should be used with <code>.nav</code> class in <code>&lt;ul></code> element in all menu levels.</td>
								</tr>

								<tr>
									<td><code>.nav-sidebar-icons-reverse</code></td>
									<td>Add this class to <code>.nav-sidebar</code> container to change icons alignment from <code>left</code> to <code>right</code>.</td>
								</tr>
								<tr>
									<td><code>.nav-sidebar-bordered</code></td>
									<td>Add this class to <code>.nav-sidebar</code> container if you want to add horizontal borders to all navigation links on the first level.</td>
								</tr>


								<tr>
									<td><code>[data-nav-type="collapsible"]</code></td>
									<td>Default navigation behaviour - when new item is expanded, current level remains opened. Actually navigation container doesn't require this, but is used for the sake of semantic naming.</td>
								</tr>
								<tr>
									<td><code>[data-nav-type="accordion"]</code></td>
									<td>Changes default <code>collapsible</code> navigation type to <code>accordion</code> type - when new item is expanded, current level is collapsed.</td>
								</tr>
								<tr>
									<td><code>[data-submenu-title="..."]</code></td>
									<td>This data attribute adds the title to the second menu level in <strong>main</strong> sidebar in <strong>folded</strong> mode. Use it in <code>.nav-group-sub</code> container.</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /navigation classes -->


				<!-- Navigation markup -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Navigation markup</h5>

						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<h6 class="font-weight-semibold">Collapsible and accordion types</h6>
						<p class="mb-3">Flexible template functionality offers 2 different kinds of navigation: collapsible and accordion. Both have custom JS code and provide extended control over the child nav items. Default type is <code>collapsible</code> navigation: open as many child levels as you want, they all will be visible all the time. Second type is <code>accordion</code> navigation: allows to display only 1 parent level, collapsing all others. Both navigation types have hidden 2nd level in mini sidebar that opens on hover/focus.</p>

						<div class="row">
							<div class="col-lg-6">
								<p class="font-weight-semibold">Collapsible navigation markup</p>
								<pre class="language-markup mb-3 mb-lg-4" data-line="2"><code>&lt;!-- Collapsible navigation markup -->
&lt;ul class="nav nav-sidebar" data-nav-type="collapsible">
	&lt;li class="nav-item-header">
		&lt;div>Navigation title&lt;/div>
		&lt;i class="icon-menu" title="Tooltip title">&lt;/i>
	&lt;/li>

	&lt;li class="nav-item">
		&lt;a href="#" class="nav-link">
			&lt;i class="icon-home4">&lt;/i>
			Top level link
		&lt;/a>
	&lt;/li>

	&lt;li class="nav-item nav-item-submenu">
		&lt;a href="#" class="nav-link">
			&lt;i class="icon-copy">&lt;/i>
			&lt;span>Top level with subnav&lt;/span>
		&lt;/a>

		&lt;ul class="nav nav-group-sub" data-submenu-title="Folded nav title">
			&lt;li class="nav-item">
				&lt;a href="#" class="nav-link">2nd level item&lt;/a>
			&lt;/li>
			...
		&lt;/ul>
	&lt;/li>
	...
&lt;/ul>
&lt;!-- /collapsible navigation markup -->										
</code></pre>
							</div>

							<div class="col-lg-6">
								<p class="font-weight-semibold">Accordion navigation markup</p>
								<pre class="language-markup mb-3 mb-lg-4" data-line="2"><code>&lt;!-- Accordion navigation markup -->
&lt;ul class="nav nav-sidebar" data-nav-type="accordion">
	&lt;li class="nav-item-header">
		&lt;div>Navigation title&lt;/div>
		&lt;i class="icon-menu" title="Tooltip title">&lt;/i>
	&lt;/li>

	&lt;li class="nav-item">
		&lt;a href="#" class="nav-link">
			&lt;i class="icon-home4">&lt;/i>
			Top level link
		&lt;/a>
	&lt;/li>

	&lt;li class="nav-item nav-item-submenu">
		&lt;a href="#" class="nav-link">
			&lt;i class="icon-copy">&lt;/i>
			&lt;span>Top level with subnav&lt;/span>
		&lt;/a>

		&lt;ul class="nav nav-group-sub" data-submenu-title="Folded nav title">
			&lt;li class="nav-item">
				&lt;a href="#" class="nav-link">2nd level item&lt;/a>
			&lt;/li>
			...
		&lt;/ul>
	&lt;/li>
	...
&lt;/ul>
&lt;!-- /accordion navigation markup -->										
</code></pre>
							</div>
						</div>


						<h6 class="font-weight-semibold">Icons alignment</h6>
						<p class="mb-3">Sidebar navigation supports icons in all menu levels. Default icons alignment is left, default visual hierarchy is: icon > text > arrow, adding <code>.nav-sidebar-icons-reverse</code> class to <code>.nav-sidebar</code> container changes it to text > icon > arrow. But despite the default layout, icons are completely optional, so feel free to remove icons markup from the nav links if for some reason you don't need them.</p>

						<div class="row">
							<div class="col-lg-6">
								<p class="font-weight-semibold">Default left icons position</p>
								<pre class="language-markup mb-3 mb-lg-4" data-line="2, 6, 13"><code>&lt;!-- Left icons -->
&lt;ul class="nav nav-sidebar" data-nav-type="accordion">
	...
	&lt;li class="nav-item">
		&lt;a href="#" class="nav-link">
			&lt;i class="icon-home4">&lt;/i>
			Navigation link #1
		&lt;/a>
	&lt;/li>

	&lt;li class="nav-item">
		&lt;a href="#" class="nav-link">
			&lt;i class="icon-make-group">&lt;/i>
			Navigation link #2
		&lt;/a>
	&lt;/li>
	...
&lt;/ul>
&lt;!-- /left icons -->										
</code></pre>
							</div>

							<div class="col-lg-6">
								<p class="font-weight-semibold">Optional right icons position</p>
								<pre class="language-markup mb-3 mb-lg-4" data-line="2, 6, 13"><code>&lt;!-- Right icons -->
&lt;ul class="nav nav-sidebar nav-sidebar-icons-reverse" data-nav-type="accordion">
	...
	&lt;li class="nav-item">
		&lt;a href="#" class="nav-link">
			&lt;i class="icon-home4">&lt;/i>
			Navigation link #1
		&lt;/a>
	&lt;/li>

	&lt;li class="nav-item">
		&lt;a href="#" class="nav-link">
			&lt;i class="icon-make-group">&lt;/i>
			Navigation link #2
		&lt;/a>
	&lt;/li>
	...
&lt;/ul>
&lt;!-- /right icons -->										
</code></pre>
							</div>
						</div>


						<h6 class="font-weight-semibold">Other options</h6>
						<p class="mb-3">Default navigation menu doesn't have any horizontal borders. But you can easily change this behaviour just by adding <code>.nav-sidebar-bordered</code> class to the main <code>.nav-sidebar</code> container. You can also use additional components - such as badges, badge pills, extra text or icons - within <code>.nav-link</code>. But for proper vertical and horizontal alignment you need to use flexbox utility classes and extra containers. See the example with badges.</p>

						<div class="row">
							<div class="col-lg-6">
								<p class="font-weight-semibold">Bordered navigation markup</p>
								<pre class="language-markup mb-3 mb-lg-0" data-line="2"><code>&lt;!-- Bordered navigation -->
&lt;ul class="nav nav-sidebar nav-sidebar-bordered" data-nav-type="accordion">
	&lt;li class="nav-item-header">
		&lt;div>Navigation title&lt;/div>
		&lt;i class="icon-menu" title="Tooltip title">&lt;/i>
	&lt;/li>

	&lt;li class="nav-item">
		&lt;a href="#" class="nav-link">
			&lt;i class="icon-home4">&lt;/i>
			Navigation link #1
		&lt;/a>
	&lt;/li>

	&lt;li class="nav-item">
		&lt;a href="#" class="nav-link">
			&lt;i class="icon-make-group">&lt;/i>
			Navigation link #2
		&lt;/a>
	&lt;/li>
	...
&lt;/ul>
&lt;!-- /bordered navigation -->										
</code></pre>
							</div>

							<div class="col-lg-6">
								<p class="font-weight-semibold">Navigation with badges</p>
								<pre class="language-markup mb-3 mb-lg-0" data-line="6-9, 16-19"><code>&lt;!-- Badges -->
&lt;ul class="nav nav-sidebar" data-nav-type="accordion">
	&lt;li class="nav-item">
		&lt;a href="#" class="nav-link">
			&lt;i class="icon-home4">&lt;/i>
			&lt;span class="d-flex align-items-center">
				Nav link with badge
				&lt;span class="badge bg-danger ml-auto">New&lt;/span>
			&lt;/span>
		&lt;/a>
	&lt;/li>

	&lt;li class="nav-item">
		&lt;a href="#" class="nav-link">
			&lt;i class="icon-make-group">&lt;/i>
			&lt;span class="d-flex align-items-center">
				Nav link with badge pill
				&lt;span class="badge badge-pill bg-blue ml-auto">32&lt;/span>
			&lt;/span>
		&lt;/a>
	&lt;/li>
&lt;/ul>
&lt;!-- /badges -->										
</code></pre>
							</div>
						</div>
					</div>
				</div>
				<!-- /navigation markup -->

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
