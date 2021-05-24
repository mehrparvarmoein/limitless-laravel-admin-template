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
	<script src="../../../../global_assets/js/plugins/uploaders/plupload/plupload.full.min.js"></script>
	<script src="../../../../global_assets/js/plugins/uploaders/plupload/plupload.queue.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/uploader_plupload.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Uploaders</span> - Plupload</h4>
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
							<a href="uploader_plupload" class="breadcrumb-item">Uploaders</a>
							<span class="breadcrumb-item active">Plupload</span>
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

				<!-- All runtimes -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">All runtimes</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Plupload is a cross-browser <code>multi-runtime</code> file uploading API. Basically, a set of tools that will help you to build a reliable and visually appealing file uploader in minutes. This example replaced a specific div with a the jQuery uploader <code>queue</code> widget. It will automatically check for different runtimes in the configured order, if it fails it will not convert the specified element.</p>

						<p class="font-weight-semibold">Queue widget example:</p>
						<div class="file-uploader"><span>Your browser doesn't have Flash installed.</span></div>
					</div>
				</div>
				<!-- /all runtimes -->


				<!-- Flash runtime -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Flash runtime</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of multiple file uploader with <code>flash</code> runtime. Flash runtime executes and displays content from a provided <code>SWF</code> file, although it has no in-built features to modify the <code>SWF</code> file at runtime. It can execute software written in the ActionScript programming language which enables the runtime manipulation of text, data, vector graphics, raster graphics, sound and video.</p>

						<p class="font-weight-semibold">Flash runtime example:</p>
						<div class="flash-uploader"><span>Your browser doesn't have Flash installed.</span></div>
					</div>
				</div>
				<!-- /flash runtime -->


				<!-- HTML4 runtime -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">HTML4 runtime</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of multiple fime uploader with <code>HTML4</code> runtime. This kind of runtime doesn't support <code>drag and drop</code> functionality. This is the most standard runtime which supports older versions of all modern browsers. Currently, Plupload may be considered as consisting of three parts: low-level <code>pollyfills</code>, <code>Plupload API</code> and <code>Widgets</code>.</p>

						<p class="font-weight-semibold">HTML4 runtime example:</p>
						<div class="html4-uploader"><span>Your browser doesn't have HTML 4 support.</span></div>
					</div>
				</div>
				<!-- /HTML4 runtime -->


				<!-- HTML5 runtime -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">HTML5 runtime</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of <code>HTML5</code> runtime. The main benefit of HTML5 runtime is that files not only can be picked from browse dialog, but also can be dropped directly from the desktop. In some browsers, mostly in those based on WebKit, it is possible to drag and drop whole folders. Please note:  drag and drop feature will not work in some legacy browsers.</p>

						<p class="font-weight-semibold">HTML5 runtime example:</p>
						<div class="html5-uploader"><span>Your browser doesn't support native upload.</span></div>
					</div>
				</div>
				<!-- /HTML5 runtime -->


				<!-- Events -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Uploader events</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This example shows you how to bind various <code>events</code> to your plupload instance. Current example demonstrates 2 <code>preInit</code> events: <code>Init</code> - fires when the current RunTime has been initialized and <code>UploadFile</code> - fires when a file is to be uploaded by the runtime. All 15 <code>post init</code> events attached to the uploader you can see in the block below in upload process.</p>

						<p class="font-weight-semibold">Uploader events example:</p>
						<div class="uploader-events mb-3"><span>Your browser doesn't support native upload.</span></div>

						<p class="font-weight-semibold">Uploader events:</p>
						<div class="card card-body pre-scrollable" id="log"></div>
					</div>
				</div>
				<!-- /events -->

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
