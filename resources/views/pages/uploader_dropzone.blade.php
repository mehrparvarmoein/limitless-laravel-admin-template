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
	<script src="../../../../global_assets/js/plugins/uploaders/dropzone.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/uploader_dropzone.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Uploaders</span> - Dropzone</h4>
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
							<a href="uploader_dropzone" class="breadcrumb-item">Uploaders</a>
							<span class="breadcrumb-item active">Dropzone</span>
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

				<!-- Multiple file upload -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Multiple files</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of a <code>multiple</code> file uploader based on <code>Dropzone.js</code> library. Dropzone.js is a light weight JavaScript library that turns an HTML element into a dropzone. This means that a user can drag and drop a file onto it, and the file gets uploaded to the server via AJAX. By default Dropzone is a multiple file uploader, so this example is a basic setup. Uploading process runs automatically and image thumbnail previews are shown right after file selection.</p>

						<p class="font-weight-semibold">Multiple file upload example:</p>
						<form action="#" class="dropzone" id="dropzone_multiple"></form>
					</div>
				</div>
				<!-- /multiple file upload -->


				<!-- Single file upload -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Single file</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of a <code>single</code> file uploader based on <code>Dropzone.js</code> library. By default, dropzone is a multiple file uploader and does not have specific option allowing us to switch to single file uploading mode, but this functionality can be achieved by adding more options to the plugin settings, such as <code>addedfile</code> callback and <code>maxFiles</code> option set to <code>1</code>. Now only 1 file can be selected and it will be replaced with another one instead of adding it to the preview.</p>

						<p class="font-weight-semibold">Single file upload example:</p>
						<form action="#" class="dropzone" id="dropzone_single"></form>
					</div>
				</div>
				<!-- /single file upload -->


				<!-- Accepted file formats -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">File formats</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of dropzone file uploader with specified <code>file formats</code>. The default implementation of <code>accept</code> checks the file's mime type or extension against this list. This is a comma separated list of mime types or file extensions. Eg.: <code>image/*</code>, <code>application/pdf</code>, <code>.psd</code>. If the Dropzone is clickable, this option will be used as <code>accept</code> parameter on the hidden file input as well. Thsi example accepts <code>images</code> only with maximum size of <code>1Mb</code>.</p>

						<p class="font-weight-semibold">File formats example:</p>
						<form action="#" class="dropzone" id="dropzone_accepted_files"></form>
					</div>
				</div>
				<!-- /accepted file formats -->


				<!-- Removable thumbnails -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Removable thumbnails</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of dropzone file uploader with <code>remove</code> thumbnail option applied to every thumbnail in the preview by setting <code>addRemoveLinks</code> option to <code>true</code>. This will add a link to every file preview to remove or cancel (if already uploading) the file. The <code>dictCancelUpload</code>, <code>dictCancelUploadConfirmation</code> and <code>dictRemoveFile</code> options are used for the wording.</p>

						<p class="font-weight-semibold">Removable thumbnails example:</p>
						<form action="#" class="dropzone" id="dropzone_remove"></form>
					</div>
				</div>
				<!-- /removable thumbnails -->


				<!-- File limits -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">File limitations</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of dropzone uploader with different <code>limits</code>: <code>maxFilesize</code> - maximum size of files allowed, in Mb; <code>maxFiles</code> - if not <code>null</code> defines how many files this Dropzone handles, if it exceeds, the event <code>maxfilesexceeded</code> will be called. The dropzone element gets the class <code>dz-max-files-reached accordingly</code> so you can provided visual feedback; <code>maxThumbnailFilesize</code> - in MB. When the filename exceeds this limit, the thumbnail will not be generated.</p>

						<p class="font-weight-semibold">File limits example:</p>
						<form action="#" class="dropzone" id="dropzone_file_limits"></form>
					</div>
				</div>
				<!-- /file limits -->

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
