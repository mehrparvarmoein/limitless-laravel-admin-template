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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Horizontal Nav</span> - Tabs</h4>
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
							<a href="navigation_horizontal_tabs" class="breadcrumb-item">Horizontal nav</a>
							<span class="breadcrumb-item active">Tabs</span>
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

				<!-- Tabbed nav -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Tabbed nav</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Sometimes the layout can be quite complex and part of your content can be hidden by default, but still be present on the same page. In such cases you can convert static navigation links to tabbed navigation that basically switches between containers without page reloading. Just add <code>.nav</code> class to <code>.navbar-nav</code> container and add <code>data-toggle="tab"</code> to your <code>&lt;a></code> elements. You can also add tabbed links to your dropdown items. Since it's default <a href="components_tabs">Tabs component</a>, tabbed navbar links support all styling and config options of the component.</p>

						<div class="pb-1">
							<p class="font-weight-semibold">Light navbar tabs:</p>

							<div class="navbar navbar-expand-xl navbar-light navbar-component rounded-top mb-0">
								<div class="navbar-brand">
									<a href="index" class="d-inline-block">
										<img src="../../../../global_assets/images/logo_dark.png" alt="">
									</a>
								</div>

								<div class="d-xl-none">
									<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-demo-light">
										<i class="icon-menu"></i>
									</button>
								</div>

								<div class="navbar-collapse collapse" id="navbar-demo-light">
									<ul class="nav navbar-nav">
										<li class="nav-item dropdown">
											<a href="#tab-light-1" class="navbar-nav-link" data-toggle="tab">
												<i class="icon-cube3 mr-2"></i>
												Active tab
											</a>
										</li>

										<li class="nav-item dropdown">
											<a href="#tab-light-2" class="navbar-nav-link" data-toggle="tab">
												<i class="icon-puzzle4 mr-2"></i>
												Inactive tab
											</a>
										</li>

										<li class="nav-item dropdown">
											<a href="#tab-light-3" class="navbar-nav-link disabled" data-toggle="tab">
												<i class="icon-strategy mr-2"></i>
												Disabled tab
											</a>
										</li>

										<li class="nav-item dropdown">
											<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
												<i class="icon-make-group mr-2"></i>
												Menu with tabs
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#tab-light-4" class="dropdown-item" data-toggle="tab"><i class="icon-train2"></i> Train tickets</a>
												<a href="#tab-light-5" class="dropdown-item" data-toggle="tab"><i class="icon-bus"></i> Bus tickets</a>
												<a href="#tab-light-6" class="dropdown-item" data-toggle="tab"><i class="icon-car"></i> Car rental</a>
											</div>
										</li>
									</ul>

									<ul class="nav navbar-nav ml-xl-auto">
										<li class="nav-item dropdown">
											<a href="#" class="navbar-nav-link">
												<i class="icon-bell2"></i>
												<span class="d-xl-none ml-2">Notifications</span>
												<span class="badge badge-mark border-pink ml-auto ml-xl-0"></span>
											</a>
										</li>

										<li class="nav-item dropdown dropdown-user">
											<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
												<span>Victoria</span>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
												<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
												<a href="#" class="dropdown-item">
													<i class="icon-comment-discussion"></i>
													Messages
													<span class="badge badge-pill bg-blue ml-auto">58</span>
												</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
												<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<div class="card card-body border-top-0 rounded-0 rounded-bottom tab-content">
								<div class="tab-pane fade active show" id="tab-light-1">
									Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
								</div>
								<div class="tab-pane fade" id="tab-light-2">
									DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
								</div>
								<div class="tab-pane fade" id="tab-light-3">
									Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
								</div>
								<div class="tab-pane fade" id="tab-light-4">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</div>
								<div class="tab-pane fade" id="tab-light-5">
									Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor sunt.
								</div>
								<div class="tab-pane fade" id="tab-light-6">
									Me smallness is existence attending he enjoyment favourite affection. Feebly do engage of narrow.
								</div>
							</div>
						</div>

						<p class="font-weight-semibold">Dark navbar tabs:</p>
						<div class="navbar navbar-expand-xl navbar-dark bg-indigo-400 navbar-component rounded-top mb-0">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-demo-dark">
									<i class="icon-menu"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-demo-dark">
								<ul class="nav navbar-nav">
									<li class="nav-item dropdown">
										<a href="#tab-dark-1" class="navbar-nav-link" data-toggle="tab">
											<i class="icon-cube3 mr-2"></i>
											Active tab
										</a>
									</li>

									<li class="nav-item dropdown">
										<a href="#tab-dark-2" class="navbar-nav-link" data-toggle="tab">
											<i class="icon-puzzle4 mr-2"></i>
											Inactive tab
										</a>
									</li>

									<li class="nav-item dropdown">
										<a href="#tab-dark-3" class="navbar-nav-link disabled" data-toggle="tab">
											<i class="icon-strategy mr-2"></i>
											Disabled tab
										</a>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-make-group mr-2"></i>
											Menu with tabs
										</a>

										<div class="dropdown-menu dropdown-menu-right">
											<a href="#tab-dark-4" class="dropdown-item" data-toggle="tab"><i class="icon-train2"></i> Train tickets</a>
											<a href="#tab-dark-5" class="dropdown-item" data-toggle="tab"><i class="icon-bus"></i> Bus tickets</a>
											<a href="#tab-dark-6" class="dropdown-item" data-toggle="tab"><i class="icon-car"></i> Car rental</a>
										</div>
									</li>
								</ul>

								<ul class="nav navbar-nav ml-xl-auto">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link">
											<i class="icon-bell2"></i>
											<span class="d-xl-none ml-2">Notifications</span>
											<span class="badge badge-mark border-white ml-auto ml-xl-0"></span>
										</a>
									</li>

									<li class="nav-item dropdown dropdown-user">
										<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
											<span>Victoria</span>
										</a>

										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
											<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
											<a href="#" class="dropdown-item">
												<i class="icon-comment-discussion"></i>
												Messages
												<span class="badge badge-pill bg-blue ml-auto">58</span>
											</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
											<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="card card-body border-top-0 rounded-0 rounded-bottom tab-content mb-0">
							<div class="tab-pane fade active show" id="tab-dark-1">
								Me smallness is existence attending he enjoyment favourite affection. Feebly do engage of narrow.
							</div>
							<div class="tab-pane fade" id="tab-dark-2">
								Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor sunt.
							</div>
							<div class="tab-pane fade" id="tab-dark-3">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
							</div>
							<div class="tab-pane fade" id="tab-dark-4">
								Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
							</div>
							<div class="tab-pane fade" id="tab-dark-5">
								DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
							</div>
							<div class="tab-pane fade" id="tab-dark-6">
								Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
							</div>
						</div>
					</div>
				</div>
				<!-- /tabbed nav -->


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
						<h6 class="font-weight-semibold">Navigation alignment</h6>
						<p class="mb-3">Navigation in the navbar can be aligned to the <strong>left</strong>, <strong>right</strong> or <strong>center</strong>. By default it's aligned to the left (right in RTL direction). Since parent container is flexible, you need to use <a href="content_helpers_flex">flex utility classes</a> to change default alignment: add <code>.justify-content-[breakpoint]-[property]</code> to <code>.navbar-collapse</code> container and/or responsive <code>spacing</code> utilities to push content to the right and horizontal spacing between navigation containers. On mobiles all navigation items are stackable by default. Make sure you use same breakpoint in all navbar elements. Examples below demonstrate <strong>left</strong> (default) and <strong>right</strong> nav container alignments.</p>

						<div class="row">
							<div class="col-lg-6">
								<p class="font-weight-semibold">Left navigation alignment:</p>
								<pre class="language-markup mb-3 mb-lg-4" data-line="5"><code>&lt;!-- Navbar collapse container -->
&lt;div class="collapse navbar-collapse" id="navbar-mobile">

	&lt;!-- Left aligned navigation -->
	&lt;ul class="navbar-nav">
		&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
		&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
		&lt;li class="nav-item dropdown">
			&lt;a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
				Dropdown
			&lt;/a>

			&lt;div class="dropdown-menu">
				&lt;a href="#" class="dropdown-item">Action&lt;/a>
				&lt;a href="#" class="dropdown-item">Another action&lt;/a>
				&lt;a href="#" class="dropdown-item">One more action&lt;/a>
			&lt;/div>
		&lt;/li>
	&lt;/ul>
	&lt;!-- /left aligned navigation -->

	[...]

&lt;/div>
&lt;!-- /navbar collapse container -->
</code></pre>
							</div>

							<div class="col-lg-6">
								<p class="font-weight-semibold">Right navigation alignment:</p>
								<pre class="language-markup mb-3 mb-lg-4" data-line="7"><code>&lt;!-- Navbar collapse container -->
&lt;div class="collapse navbar-collapse" id="navbar-mobile">

	[...]

	&lt;!-- Right aligned navigation -->
	&lt;ul class="navbar-nav ml-auto">
		&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
		&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
		&lt;li class="nav-item dropdown">
			&lt;a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
				Dropdown
			&lt;/a>

			&lt;div class="dropdown-menu">
				&lt;a href="#" class="dropdown-item">Action&lt;/a>
				&lt;a href="#" class="dropdown-item">Another action&lt;/a>
				&lt;a href="#" class="dropdown-item">One more action&lt;/a>
			&lt;/div>
		&lt;/li>
	&lt;/ul>
	&lt;!-- /right aligned navigation -->

&lt;/div>
&lt;!-- /navbar collapse container -->
</code></pre>
							</div>
						</div>


						<h6 class="font-weight-semibold">Navigation dropdown trigger</h6>
						<p class="mb-3">By default, all dropdown menus are toggled by clicking, this is an <a href="http://markdotto.com/2012/02/27/bootstrap-explained-dropdowns/">intentional design decision</a>. Another reason - browsers on mobile devices don't fully support hover/focus states, so if dropdown menu appearance is controlled by toggling <code>display: none;</code> on hover/focus, they won't be triggered on touch devices. However, there's a solution - toggle <code>.show</code> class on hover AND click. Limitless includes custom <code>dropdown_hover.js</code> extension that allows you to enable this behaviour on all dropdown levels and disable hover/focus triggering on mobiles. To use, just add <code>data-hover="dropdown"</code> to the dropdown link. Note - this enables hover trigger on <strong>all</strong> dropdown levels.</p>

						<div class="row">
							<div class="col-lg-6">
								<p class="font-weight-semibold">Trigger on click:</p>
								<pre class="language-markup mb-3 mb-lg-4" data-line="6,7"><code>&lt;!-- Trigger on click -->
&lt;ul class="navbar-nav">
	&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
	&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
	&lt;li class="nav-item dropdown">
		&lt;a href="#" class="navbar-nav-link dropdown-toggle"
			data-toggle="dropdown">
			Dropdown
		&lt;/a>

		&lt;div class="dropdown-menu">
			&lt;a href="#" class="dropdown-item">Action&lt;/a>
			&lt;a href="#" class="dropdown-item">Another action&lt;/a>
			&lt;div class="dropdown-divider">&lt;/div>
			&lt;a href="#" class="dropdown-item">One more action&lt;/a>
		&lt;/div>
	&lt;/li>
&lt;/ul>
&lt;!-- /trigger on click -->
</code></pre>
							</div>

							<div class="col-lg-6">
								<p class="font-weight-semibold">Trigger on hover:</p>
								<pre class="language-markup mb-3 mb-lg-4" data-line="6-8"><code>&lt;!-- Trigger on hover -->
&lt;ul class="navbar-nav">
	&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
	&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
	&lt;li class="nav-item dropdown">
		&lt;a href="#" class="navbar-nav-link dropdown-toggle"
			data-toggle="dropdown"
			data-hover="dropdown">
			Dropdown
		&lt;/a>

		&lt;div class="dropdown-menu">
			&lt;a href="#" class="dropdown-item">Action&lt;/a>
			&lt;a href="#" class="dropdown-item">Another action&lt;/a>
			&lt;a href="#" class="dropdown-item">One more action&lt;/a>
		&lt;/div>
	&lt;/li>
&lt;/ul>
&lt;!-- /trigger on hover -->
</code></pre>
							</div>
						</div>


						<h6 class="font-weight-semibold">Navigation item states</h6>
						<p class="mb-3">Navbar navigation items support 2 states: <code>active</code> and <code>disabled</code>. In <code>active</code> state nav links appear pressed, with a darker background and stronger text. Please note: <code>.active</code> class doesn't open dropdown menu, it just highlights links. If navigation link has class <code>.disabled</code>, JS blocks user interaction (basically disabled click event) and CSS mutes the link down. If this class is added to the <code>.dropdown-toggle</code> navigation element, dropdown menu won't be toggled. Examples below demonstrate active/disabled states markup.</p>

						<div class="row">
							<div class="col-lg-6">
								<p class="font-weight-semibold">Active item/dropdown state:</p>
								<pre class="language-markup mb-3 mb-lg-0" data-line="3, 6, 11"><code>&lt;!-- Active state -->
&lt;ul class="navbar-nav">
	&lt;li>&lt;a href="#" class="navbar-nav-link">Active link&lt;/a>&lt;/li>
	&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
	&lt;li class="nav-item dropdown">
		&lt;a href="#" class="navbar-nav-link dropdown-toggle active" data-toggle="dropdown">
			Active dropdown
		&lt;/a>

		&lt;div class="dropdown-menu">
			&lt;a href="#" class="dropdown-item active">Active action&lt;/a>
			&lt;a href="#" class="dropdown-item">Another action&lt;/a>
			&lt;div class="dropdown-divider">&lt;/div>
			&lt;a href="#" class="dropdown-item">One more action&lt;/a>
		&lt;/div>
	&lt;/li>
&lt;/ul>
&lt;!-- /active state -->
</code></pre>
							</div>

							<div class="col-lg-6">
								<p class="font-weight-semibold">Disabled item/dropdown state:</p>
								<pre class="language-markup mb-3 mb-lg-0" data-line="3, 6, 11"><code>&lt;!-- Disabled state -->
&lt;ul class="navbar-nav">
	&lt;li>&lt;a href="#" class="navbar-nav-link disabled">Disabled link&lt;/a>&lt;/li>
	&lt;li class="nav-item">&lt;a href="#" class="navbar-nav-link">Link&lt;/a>&lt;/li>
	&lt;li class="nav-item dropdown">
		&lt;a href="#" class="navbar-nav-link dropdown-toggle disabled" data-toggle="dropdown">
			Disabled dropdown
		&lt;/a>

		&lt;div class="dropdown-menu">
			&lt;a href="#" class="dropdown-item disabled">Disabled action&lt;/a>
			&lt;a href="#" class="dropdown-item">Another action&lt;/a>
			&lt;div class="dropdown-divider">&lt;/div>
			&lt;a href="#" class="dropdown-item">One more action&lt;/a>
		&lt;/div>
	&lt;/li>
&lt;/ul>
&lt;!-- /disabled state -->
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
