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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Navbars</span> - Colors</h4>
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
							<a href="navbar_colors" class="breadcrumb-item">Navbars</a>
							<span class="breadcrumb-item active">Colors</span>
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

				<!-- Light navbar -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Light navbar</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Light navbar is a basic Bootstrap navbar with <strong>white</strong> background color defined in <code>$navbar-light-bg</code> variable. Light navbar is the only navbar style that has light color scheme. By default, basic Bootstrap styling has only 2 color presets: <code>light</code> and <code>dark</code>. To use light navbar styling, add <code>.navbar-light</code> class to the base <code>.navbar</code> container, styles of all navbar components will be adjusted to the light background theme automatically.</p>

						<p class="font-weight-semibold">Light navbar example:</p>
						<div class="navbar navbar-light navbar-component navbar-expand-xl rounded">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_dark.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo1-mobile">
									<i class="icon-grid3"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-demo1-mobile">
								<ul class="navbar-nav">
									<li class="nav-item"><a href="#" class="navbar-nav-link">Active</a></li>
									<li class="nav-item"><a href="#" class="navbar-nav-link">Link</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item">Action</a>
											<a href="#" class="dropdown-item">Another action</a>
											<a href="#" class="dropdown-item">Something else here</a>
											<a href="#" class="dropdown-item">One more line</a>
										</div>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto">
									<li class="nav-item">
										<a href="#" class="navbar-nav-link">
											<i class="icon-pin-alt mr-2"></i>
											Link
										</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-cog7"></i>
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

						<p class="font-weight-semibold">Light navbar markup:</p>
						<pre class="language-markup" data-line="2"><code>&lt;!-- Light navbar -->
&lt;div class="navbar navbar-light navbar-expand-md">

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
	&lt;div class="collapse navbar-collapse" id="navbar-main">
		...
	&lt;/div>
	&lt;!-- /navbar content -->

&lt;/div>
&lt;!-- /light navbar -->
</code></pre>
					</div>
				</div>
				<!-- /light navbar -->


				<!-- Dark navbar -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Dark navbar</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Dark navbar is one of the default Bootstrap navbar styles with <code>dark</code> blue/grey background color defined in <code>$navbar-dark-bg</code> variable. Default BS styling requires color helper class added to <code>.navbar-dark</code> container. This behaviour was improved and all <code>.bg-[color]</code> classes are now optional, but still require <code>.navbar-dark</code> class for proper content styling. Some elements require minor color adjustments (link and border colors), so use utility classes to make them pixel perfect.</p>

						<p class="font-weight-semibold">Dark navbar example:</p>
						<div class="navbar navbar-dark navbar-component navbar-expand-xl rounded">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo2-mobile">
									<i class="icon-grid3"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-demo2-mobile">
								<ul class="navbar-nav">
									<li class="nav-item"><a href="#" class="navbar-nav-link">Active</a></li>
									<li class="nav-item"><a href="#" class="navbar-nav-link">Link</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item">Action</a>
											<a href="#" class="dropdown-item">Another action</a>
											<a href="#" class="dropdown-item">Something else here</a>
											<a href="#" class="dropdown-item">One more line</a>
										</div>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto">
									<li class="nav-item">
										<a href="#" class="navbar-nav-link">
											<i class="icon-pin-alt mr-2"></i>
											Link
										</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-cog7"></i>
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

						<p class="font-weight-semibold">Dark navbar markup:</p>
						<pre class="language-markup" data-line="2"><code>&lt;!-- Dark navbar -->
&lt;div class="navbar navbar-dark navbar-expand-md">

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
	&lt;div class="collapse navbar-collapse" id="navbar-main">
		...
	&lt;/div>
	&lt;!-- /navbar content -->

&lt;/div>
&lt;!-- /dark navbar -->
</code></pre>
					</div>
				</div>
				<!-- /dark navbar -->


				<!-- Custom navbar color -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Custom navbar color</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Both light and dark navbars support custom background colors from template's <a href="colors_primary">color system</a> and default BS color options. For <strong>dark</strong> colors use <code>.bg-[color]</code> and/or <code>.bg-[color]-[tone]</code> classes, for <strong>light</strong> colors use <code>.bg-light</code> and <code>.alpha-[color]</code> classes. All components inside navbar automatically adjust text, placeholder and background colors according to the specified color theme.</p>

						<div class="mb-4">
							<p class="font-weight-semibold">Custom light color example:</p>
							<div class="navbar navbar-light alpha-info border-info navbar-component navbar-expand-xl rounded">
								<div class="navbar-brand">
									<a href="index" class="d-inline-block">
										<img src="../../../../global_assets/images/logo_dark.png" alt="">
									</a>
								</div>

								<div class="d-xl-none">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo3-mobile">
										<i class="icon-grid3"></i>
									</button>
								</div>

								<div class="navbar-collapse collapse" id="navbar-demo3-mobile">
									<ul class="navbar-nav">
										<li class="nav-item"><a href="#" class="navbar-nav-link">Active</a></li>
										<li class="nav-item"><a href="#" class="navbar-nav-link">Link</a></li>
										<li class="nav-item dropdown">
											<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</li>
									</ul>

									<ul class="navbar-nav ml-xl-auto">
										<li class="nav-item">
											<a href="#" class="navbar-nav-link">
												<i class="icon-pin-alt mr-2"></i>
												Link
											</a>
										</li>
										<li class="nav-item dropdown">
											<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
												<i class="icon-cog7"></i>
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
							<p class="font-weight-semibold">Custom dark color example:</p>
							<div class="navbar navbar-dark bg-blue navbar-component navbar-expand-xl rounded">
								<div class="navbar-brand">
									<a href="index" class="d-inline-block">
										<img src="../../../../global_assets/images/logo_light.png" alt="">
									</a>
								</div>

								<div class="d-xl-none">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo4-mobile">
										<i class="icon-grid3"></i>
									</button>
								</div>

								<div class="navbar-collapse collapse" id="navbar-demo4-mobile">
									<ul class="navbar-nav">
										<li class="nav-item"><a href="#" class="navbar-nav-link">Active</a></li>
										<li class="nav-item"><a href="#" class="navbar-nav-link">Link</a></li>
										<li class="nav-item dropdown">
											<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</li>
									</ul>

									<ul class="navbar-nav ml-xl-auto">
										<li class="nav-item">
											<a href="#" class="navbar-nav-link">
												<i class="icon-pin-alt mr-2"></i>
												Link
											</a>
										</li>
										<li class="nav-item dropdown">
											<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
												<i class="icon-cog7"></i>
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

						<div class="row">
							<div class="col-md-6">
								<p class="font-weight-semibold">Custom light color markup:</p>
								<pre class="language-markup mb-3" data-line="2"><code>&lt;!-- Custom light color -->
&lt;div class="navbar navbar-light alpha-info border-info navbar-expand-md">

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
	&lt;div class="collapse navbar-collapse" id="navbar-main">
		...
	&lt;/div>
	&lt;!-- /navbar content -->

&lt;/div>
&lt;!-- /custom light color -->
</code></pre>
							</div>

							<div class="col-md-6">
								<p class="font-weight-semibold">Custom dark color markup:</p>
								<pre class="language-markup mb-3" data-line="2"><code>&lt;!-- Custom dark color -->
&lt;div class="navbar navbar-dark bg-blue navbar-expand-md">

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
	&lt;div class="collapse navbar-collapse" id="navbar-main">
		...
	&lt;/div>
	&lt;!-- /navbar content -->

&lt;/div>
&lt;!-- /custom dark color -->
</code></pre>
							</div>
						</div>
					</div>
				</div>
				<!-- /custom navbar color -->


				<!-- Color combinations -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Color combinations</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Background colors in multiple navbars can be mixed: you can specify custom background colors for <code>main</code> and <code>secondary</code> navbars or make them look identical. All navbars have top and bottom borders, so in some color combinations you might need to use <code>border</code> utility classes to remove some borders, change border color or make them transparent (prefered for correct padding calculations in SASS). </p>

						<p class="font-weight-semibold">Example of mixing dark colors:</p>
						<div class="navbar navbar-dark bg-teal-400 navbar-component navbar-expand-xl rounded-top mb-0">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-xl-none">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-demo5-mobile">
									<i class="icon-grid3"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-demo5-mobile">
								<ul class="navbar-nav">
									<li class="nav-item"><a href="#" class="navbar-nav-link">Active</a></li>
									<li class="nav-item"><a href="#" class="navbar-nav-link">Link</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item">Action</a>
											<a href="#" class="dropdown-item">Another action</a>
											<a href="#" class="dropdown-item">Something else here</a>
											<a href="#" class="dropdown-item">One more line</a>
										</div>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto">
									<li class="nav-item">
										<a href="#" class="navbar-nav-link">
											<i class="icon-pin-alt mr-2"></i>
											Link
										</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-cog7"></i>
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

						<div class="navbar navbar-dark bg-slate-700 navbar-component navbar-expand-xl rounded-bottom">
							<div class="text-center d-xl-none w-100">
								<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-demo6-mobile">
									<i class="icon-unfold mr-2"></i>
									Light navbar component
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-demo6-mobile">
								<ul class="nav navbar-nav">
									<li class="nav-item">
										<a href="#" class="navbar-nav-link"><i class="icon-git-branch mr-2"></i> Branches</a>
									</li>
									<li class="nav-item">
										<a href="#" class="navbar-nav-link">
											<i class="icon-git-merge mr-2"></i>
											Merges
											<span class="badge badge-pill bg-info position-static  ml-auto ml-xl-2">81</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#" class="navbar-nav-link"><i class="icon-git-pull-request mr-2"></i> Requests</a>
									</li>
								</ul>

								<ul class="navbar-nav ml-xl-auto">
									<li class="nav-item">
										<a href="#" class="navbar-nav-link">
											<i class="icon-upload10 mr-2"></i>
											Upload files
										</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-share4"></i>
											<span class="d-xl-none ml-2">Share</span>
										</a>

										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><i class="icon-dribbble3"></i> Dribbble</a>
											<a href="#" class="dropdown-item"><i class="icon-pinterest2"></i> Pinterest</a>
											<a href="#" class="dropdown-item"><i class="icon-github"></i> Github</a>
											<a href="#" class="dropdown-item"><i class="icon-stackoverflow"></i> Stack Overflow</a>
										</div>
									</li>
								</ul>
							</div>
						</div>



						<p class="font-weight-semibold">Multiple navbars markup:</p>
						<pre class="language-markup" data-line="2, 21"><code>&lt;!-- First navbar -->
&lt;div class="navbar navbar-dark bg-teal-400 navbar-expand-md">

	&lt;!-- Navbar content -->
	&lt;div class="navbar-brand">
		...
	&lt;/div>
	&lt;div class="d-md-none">
		...
	&lt;/div>
	&lt;div class="collapse navbar-collapse" id="navbar-first">
		...
	&lt;/div>
	&lt;!-- /navbar content -->

&lt;/div>
&lt;!-- /first navbar -->


&lt;!-- Second navbar -->
&lt;div class="navbar navbar-dark bg-slate-700 navbar-expand-md">

	&lt;!-- Navbar content -->
	&lt;div class="navbar-brand">
		...
	&lt;/div>
	&lt;div class="d-md-none">
		...
	&lt;/div>
	&lt;div class="collapse navbar-collapse" id="navbar-second">
		...
	&lt;/div>
	&lt;!-- /navbar content -->

&lt;/div>
&lt;!-- /second navbar -->

</code></pre>
					</div>
				</div>
				<!-- /color combinations -->


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
