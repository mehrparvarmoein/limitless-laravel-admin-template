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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Navbars</span> - Sizes</h4>
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
							<a href="navbar_sizes" class="breadcrumb-item">Navbars</a>
							<span class="breadcrumb-item active">Sizes</span>
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

				<!-- Large navbar -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Large navbar</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Increase height of the navbar by adding <code>.navbar-lg</code> class to the main <code>.navbar</code> container. Large navbar height is ~54px including borders, all navbar components are adjusted to the large navbar height automatically. If navbar type is fixed, add <code>.navbar-lg-top</code> class to the <code>&lt;body></code> container to set <strong>top</strong> padding and/or <code>.navbar-lg-bottom</code> class if navbar placement is bottom to set <strong>bottom</strong> padding.</p>

						<div class="mb-4">
							<p class="font-weight-semibold">Large navbar example:</p>
							<div class="navbar navbar-dark bg-info-700 navbar-lg navbar-component navbar-expand-xl rounded">
								<div class="navbar-brand">
									<a href="index" class="d-inline-block">
										<img src="../../../../global_assets/images/logo_light.png" alt="">
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
						</div>

						<div class="row">
							<div class="col-md-6">
								<p class="font-weight-semibold">Large static navbar markup:</p>
								<pre class="language-markup mb-3" data-line="2, 5"><code>&lt;!-- Document body -->
&lt;body>

	&lt;!-- Large static navbar -->
	&lt;div class="navbar navbar-dark navbar-lg navbar-expand-md">

		&lt;!-- Brand and toggler -->
		&lt;div class="navbar-brand">...&lt;/div>
		&lt;div class="d-md-none">...&lt;/div>
		&lt;!-- /brand and toggler -->

		&lt;!-- Navbar content -->
		&lt;div class="collapse navbar-collapse" id="navbar-main">
			...
		&lt;/div>
		&lt;!-- /navbar content -->

	&lt;/div>
	&lt;!-- /large static navbar -->

&lt;/body>
&lt;!-- /document body -->
</code></pre>
							</div>

							<div class="col-md-6">
								<p class="font-weight-semibold">Large fixed navbar markup:</p>
								<pre class="language-markup mb-3" data-line="2, 5"><code>&lt;!-- Document body -->
&lt;body class="navbar-lg-top">

	&lt;!-- Large fixed navbar -->
	&lt;div class="navbar navbar-dark navbar-lg navbar-expand-md fixed-top">

		&lt;!-- Brand and toggler -->
		&lt;div class="navbar-brand">...&lt;/div>
		&lt;div class="d-md-none">...&lt;/div>
		&lt;!-- /brand and toggler -->

		&lt;!-- Navbar content -->
		&lt;div class="collapse navbar-collapse" id="navbar-main">
			...
		&lt;/div>
		&lt;!-- /navbar content -->

	&lt;/div>
	&lt;!-- /large fixed navbar -->

&lt;/body>
&lt;!-- /document body -->
</code></pre>
							</div>
						</div>
					</div>
				</div>
				<!-- /large navbar -->


				<!-- Default navbar -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Default navbar</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Default navbar height is ~50px including borders. Navbar container doesn't have any <code>height</code> properties in CSS, so if you change vertical padding of navbar navigation items or brand height, computed navbar height will be adjusted automatically thanks to power of SASS. If navbar type is fixed, add <code>.navbar-top</code> class to the <code>&lt;body></code> container to set <strong>top</strong> padding and/or <code>.navbar-bottom</code> class if navbar placement is bottom to set <strong>bottom</strong> padding.</p>

						<div class="mb-4">
							<p class="font-weight-semibold">Default navbar example:</p>
							<div class="navbar navbar-dark bg-info-700 navbar-component navbar-expand-xl rounded">
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
						</div>

						<div class="row">
							<div class="col-md-6">
								<p class="font-weight-semibold">Default static navbar markup:</p>
								<pre class="language-markup mb-3" data-line="2, 5"><code>&lt;!-- Document body -->
&lt;body>

	&lt;!-- Default static navbar -->
	&lt;div class="navbar navbar-dark navbar-expand-md">

		&lt;!-- Brand and toggler -->
		&lt;div class="navbar-brand">...&lt;/div>
		&lt;div class="d-md-none">...&lt;/div>
		&lt;!-- /brand and toggler -->

		&lt;!-- Navbar content -->
		&lt;div class="collapse navbar-collapse" id="navbar-main">
			...
		&lt;/div>
		&lt;!-- /navbar content -->

	&lt;/div>
	&lt;!-- /default static navbar -->

&lt;/body>
&lt;!-- /document body -->
</code></pre>
							</div>

							<div class="col-md-6">
								<p class="font-weight-semibold">Default fixed navbar markup:</p>
								<pre class="language-markup mb-3" data-line="2, 5"><code>&lt;!-- Document body -->
&lt;body class="navbar-top">

	&lt;!-- Default fixed navbar -->
	&lt;div class="navbar navbar-dark navbar-expand-md fixed-top">

		&lt;!-- Brand and toggler -->
		&lt;div class="navbar-brand">...&lt;/div>
		&lt;div class="d-md-none">...&lt;/div>
		&lt;!-- /brand and toggler -->

		&lt;!-- Navbar content -->
		&lt;div class="collapse navbar-collapse" id="navbar-main">
			...
		&lt;/div>
		&lt;!-- /navbar content -->

	&lt;/div>
	&lt;!-- /default fixed navbar -->

&lt;/body>
&lt;!-- /document body -->
</code></pre>
							</div>
						</div>
					</div>
				</div>
				<!-- /default navbar -->


				<!-- Small navbar -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Small navbar</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Decrease height of the navbar by adding <code>.navbar-sm</code> class to the main <code>.navbar</code> container. Small navbar height is ~46px including borders, all navbar components are adjusted to the large navbar height automatically. If navbar type is fixed, add <code>.navbar-sm-top</code> class to the <code>&lt;body></code> container to set <strong>top</strong> padding and/or <code>.navbar-sm-bottom</code> class if navbar placement is bottom to set <strong>bottom</strong> padding.</p>

						<div class="mb-4">
							<p class="font-weight-semibold">Small navbar example:</p>
							<div class="navbar navbar-dark bg-info-700 navbar-sm navbar-component navbar-expand-xl rounded">
								<div class="navbar-brand">
									<a href="index" class="d-inline-block">
										<img src="../../../../global_assets/images/logo_light.png" alt="">
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

						<div class="row">
							<div class="col-md-6">
								<p class="font-weight-semibold">Small static navbar markup:</p>
								<pre class="language-markup mb-3" data-line="2, 5"><code>&lt;!-- Document body -->
&lt;body>

	&lt;!-- Small static navbar -->
	&lt;div class="navbar navbar-dark navbar-sm navbar-expand-md">

		&lt;!-- Brand and toggler -->
		&lt;div class="navbar-brand">...&lt;/div>
		&lt;div class="d-md-none">...&lt;/div>
		&lt;!-- /brand and toggler -->

		&lt;!-- Navbar content -->
		&lt;div class="collapse navbar-collapse" id="navbar-main">
			...
		&lt;/div>
		&lt;!-- /navbar content -->

	&lt;/div>
	&lt;!-- /small static navbar -->

&lt;/body>
&lt;!-- /document body -->
</code></pre>
							</div>

							<div class="col-md-6">
								<p class="font-weight-semibold">Small fixed navbar markup:</p>
								<pre class="language-markup mb-3" data-line="2, 5"><code>&lt;!-- Document body -->
&lt;body class="navbar-sm-top">

	&lt;!-- Small fixed navbar -->
	&lt;div class="navbar navbar-dark navbar-sm navbar-expand-md fixed-top">

		&lt;!-- Brand and toggler -->
		&lt;div class="navbar-brand">...&lt;/div>
		&lt;div class="d-md-none">...&lt;/div>
		&lt;!-- /brand and toggler -->

		&lt;!-- Navbar content -->
		&lt;div class="collapse navbar-collapse" id="navbar-main">
			...
		&lt;/div>
		&lt;!-- /navbar content -->

	&lt;/div>
	&lt;!-- /small fixed navbar -->

&lt;/body>
&lt;!-- /document body -->
</code></pre>
							</div>
						</div>
					</div>
				</div>
				<!-- /small navbar -->


				<!-- Size combinations -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Size combinations</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Multiple navbars support different heights as well, just add optional height classes to both navbars. If navbar type is <code>fixed</code>, add <code>.navbar-[size]-[size]-top</code> to the <code>&lt;body></code> container to set <strong>top</strong> padding and/or <code>.navbar-[size]-[size]-bottom</code> class if navbar placement is bottom to set <strong>bottom</strong> padding. Example: add <code>.navbar-md-sm-top</code> class to <code>&lt;body></code> if first navbar has default height and second has small.</p>

						<div class="mb-4">
							<p class="font-weight-semibold">Sizes of static multiple navbars:</p>
							<div class="navbar navbar-dark bg-teal-400 navbar-component navbar-expand-xl rounded-top mb-0">
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

							<div class="navbar navbar-light navbar-component navbar-sm navbar-expand-xl rounded-bottom border-top-transparent">
								<div class="text-center d-xl-none w-100">
									<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-demo5-mobile">
										<i class="icon-unfold mr-2"></i>
										Light navbar component
									</button>
								</div>

								<div class="navbar-collapse collapse" id="navbar-demo5-mobile">
									<ul class="nav navbar-nav">
										<li class="nav-item">
											<a href="#" class="navbar-nav-link"><i class="icon-git-branch mr-2"></i> Branches</a>
										</li>
										<li class="nav-item">
											<a href="#" class="navbar-nav-link">
												<i class="icon-git-merge mr-2"></i>
												Merges
												<span class="badge badge-pill bg-info position-static ml-auto ml-xl-2">81</span>
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
						</div>


						<div class="row">
							<div class="col-md-6">
								<p class="font-weight-semibold">Markup of static multiple navbars:</p>
								<pre class="language-markup mb-3" data-line="2, 5, 24"><code>&lt;!-- Document body -->
&lt;body>

	&lt;!-- First navbar -->
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
	&lt;div class="navbar navbar-dark bg-slate-700 navbar-sm navbar-expand-md">

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

&lt;/body>
&lt;!-- /document body -->
</code></pre>
							</div>

							<div class="col-md-6">
								<p class="font-weight-semibold">Markup of fixed multiple navbars:</p>
								<pre class="language-markup mb-3" data-line="2, 5, 24"><code>&lt;!-- Document body -->
&lt;body class="navbar-md-sm-top">

	&lt;!-- First navbar -->
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
	&lt;div class="navbar navbar-dark bg-slate-700 navbar-sm navbar-expand-md">

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

&lt;/body>
&lt;!-- /document body -->
</code></pre>
							</div>
						</div>
					</div>
				</div>
				<!-- /size combinations -->

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
