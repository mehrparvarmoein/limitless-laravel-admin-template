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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Content Navbar</span> - Single</h4>
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
							<a href="navbar_content_single" class="breadcrumb-item">Content navbar</a>
							<span class="breadcrumb-item active">Single</span>
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

				<!-- Single navbar component -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Single navbar component</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-4">Standard use case for navbar is main top or optional bottom navigation with various components. But in some cases, such as toolbars with form components (filters, content navigation, tabs etc), navbar as a stand alone component can be very useful. For such cases use standard navbar markup with <code>.navbar-component</code> class added to the <code>.navbar</code> container and optional <code>.rounded</code> class for rounded corners. And now you can use navbar wherever you want within <code>.page-content</code> container. Please note - nested navbars are not supported.</p>

						<!-- Dark navbar demo -->
						<div class="mb-4">
							<h6 class="font-weight-semibold">Dark navbar component</h6>
							<p class="mb-3">Unlike Bootstrap's default navbar color option, where all navbars require background helper class, default background colors are set in SASS and defined in <code>$navbar-dark-bg</code> and <code>$navbar-light-bg</code> variables. So <strong>dark</strong> navbar component requires only default container classes along with optinal <code>.rounded</code> class to make all corners rounded. Additionally you can add <code>.bg-[color]</code> helper class to apply custom background color.</p>

							<div class="navbar navbar-expand-xl navbar-dark navbar-component rounded">
								<div class="text-center d-xl-none w-100">
									<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-demo1-mobile">
										<i class="icon-unfold mr-2"></i>
										Dark navbar component
									</button>
								</div>

								<div class="navbar-collapse collapse" id="navbar-demo1-mobile">
									<ul class="nav navbar-nav">
										<li class="nav-item">
											<a href="#" class="navbar-nav-link"><i class="icon-git-branch mr-2"></i> Branches</a>
										</li>
										<li class="nav-item">
											<a href="#" class="navbar-nav-link">
												<i class="icon-git-merge mr-2"></i>
												Merges
												<span class="badge badge-pill badge-info position-static ml-auto ml-xl-2">81</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="navbar-nav-link"><i class="icon-git-pull-request mr-2"></i> Requests</a>
										</li>
									</ul>

									<span class="navbar-text ml-xl-auto">
										<i class="icon-user-check mr-2"></i>
										Signed in as <a href="#">Victoria Baker</a>
									</span>

									<ul class="navbar-nav ml-xl-3">
										<li class="nav-item dropdown dropdown-user">
											<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
												<span>Victoria</span>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
												<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
												<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
												<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /dark navbar demo -->


						<!-- Light navbar demo -->
						<div class="mb-4">
							<h6 class="font-weight-semibold">Light navbar component</h6>
							<p class="mb-3">Light content navbar has dark border color with alpha transparency by default. You can also use additional <code>.alpha-[color]</code> color classes along with <code>.border-[color]</code> border classes if you want to highlight the navbar with custom light color. All colors within light navbar depend on main body color, keep that in mind if you want to change main text color in SASS variables.</p>
							
							<div class="navbar navbar-expand-xl navbar-light bg-light navbar-component rounded">
								<div class="text-center d-xl-none w-100">
									<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-demo2-mobile">
										<i class="icon-unfold mr-2"></i>
										Light navbar component
									</button>
								</div>

								<div class="navbar-collapse collapse" id="navbar-demo2-mobile">
									<ul class="nav navbar-nav">
										<li class="nav-item">
											<a href="#" class="navbar-nav-link"><i class="icon-git-branch mr-2"></i> Branches</a>
										</li>
										<li class="nav-item">
											<a href="#" class="navbar-nav-link">
												<i class="icon-git-merge mr-2"></i>
												Merges
												<span class="badge badge-pill badge-info position-static ml-auto ml-xl-2">81</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="navbar-nav-link"><i class="icon-git-pull-request mr-2"></i> Requests</a>
										</li>
									</ul>

									<span class="navbar-text ml-xl-auto">
										<i class="icon-user-check mr-2"></i>
										Signed in as <a href="#">Victoria Baker</a>
									</span>

									<ul class="navbar-nav ml-xl-3">
										<li class="nav-item dropdown dropdown-user">
											<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
												<span>Victoria</span>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
												<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
												<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
												<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /light navbar demo -->

						<h6 class="font-weight-semibold">Navbar component markup</h6>
						<p class="mb-3">Navbar component markup is similar to default navbar markup. But in most cases navbar component doesn't use <code>.navbar-brand</code> container that occupies left navbar side, since content navbar has slightly different purpose and doesn't need brand logo. Use <code>.navbar-component</code> class to add bottom spacing and borders, and <code>.rounded</code> class to make it rounded. Navbar component supports all available navbar styling and sizing options, including all navbar components.</p>

						<div class="row">
							<div class="col-md-6">
								<p class="font-weight-semibold">Light navbar markup:</p>
								<pre class="language-markup mb-3" data-line="2"><code>&lt;!-- Light navbar component -->
&lt;div class="navbar navbar-light navbar-expand-md navbar-component">

	&lt;!-- Mobile toggler -->
	&lt;div class="d-md-none">
		...
	&lt;/div>
	&lt;!-- /mobile toggler -->


	&lt;!-- Navbar content -->
	&lt;div class="collapse navbar-collapse" id="navbar-component">

		&lt;!-- Left content -->
		&lt;ul class="navbar-nav">
			&lt;li class="nav-item">
				&lt;a href="#" class="navbar-nav-link">Link&lt;/a>
			&lt;/li>
			...
		&lt;/ul>
		&lt;!-- /left content -->


		&lt;!-- Right content -->
		&lt;ul class="navbar-nav ml-md-auto">
			&lt;li class="nav-item">
				&lt;a href="#" class="navbar-nav-link">Link&lt;/a>
			&lt;/li>
			...&lt;!-- Navbar content -->
		&lt;/ul>
		&lt;!-- /right content -->

	&lt;/div>
	&lt;!-- /navbar content -->

&lt;/div>
&lt;!-- /light navbar component -->
</code></pre>
							</div>

							<div class="col-md-6">
								<p class="font-weight-semibold">Dark navbar markup:</p>
								<pre class="language-markup mb-3" data-line="2"><code>&lt;!-- Dark navbar component -->
&lt;div class="navbar navbar-dark navbar-expand-md navbar-component">

	&lt;!-- Mobile toggler -->
	&lt;div class="d-md-none">
		...
	&lt;/div>
	&lt;!-- /mobile toggler -->


	&lt;!-- Navbar content -->
	&lt;div class="collapse navbar-collapse" id="navbar-component">

		&lt;!-- Left content -->
		&lt;ul class="navbar-nav">
			&lt;li class="nav-item">
				&lt;a href="#" class="navbar-nav-link">Link&lt;/a>
			&lt;/li>
			...
		&lt;/ul>
		&lt;!-- /left content -->


		&lt;!-- Right content -->
		&lt;ul class="navbar-nav ml-md-auto">
			&lt;li class="nav-item">
				&lt;a href="#" class="navbar-nav-link">Link&lt;/a>
			&lt;/li>
			...&lt;!-- Navbar content -->
		&lt;/ul>
		&lt;!-- /right content -->

	&lt;/div>
	&lt;!-- /navbar content -->

&lt;/div>
&lt;!-- /dark navbar component -->
</code></pre>
							</div>
						</div>
					</div>
				</div>
				<!-- /single navbar component -->


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
