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
	<script src="../../../../global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
	<script src="../../../../global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
	<script src="../../../../global_assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/uploader_bootstrap.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Uploaders</span> - BS File Input</h4>
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
							<a href="uploader_bootstrap" class="breadcrumb-item">Uploaders</a>
							<span class="breadcrumb-item active">BS file input</span>
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

				<!-- Bootstrap file input -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="panel-title">Bootstrap file input</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Bootstrap <code>file input</code> plugin enhances the HTML 5 file input for Bootstrap 3.x into an advanced widget with file preview for various files, multiple selection and more. The plugin enhances these concepts and simplifies the widget initialization with simple HTML markup on a file input. It offers support for previewing a wide variety of files i.e. images, text, html, video, audio, flash, and objects.</p>

						<form action="#">
							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Single file upload:</label>
								<div class="col-lg-10">
									<input type="file" class="file-input" data-fouc>
									<span class="form-text text-muted">Automatically convert a file input to a bootstrap file input widget by setting its class as <code>file-input</code>.</span>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Multiple file upload:</label>
								<div class="col-lg-10">
									<input type="file" class="file-input" multiple="multiple" data-fouc>
									<span class="form-text text-muted">Automatically convert a file input to a bootstrap file input widget by setting its class as <code>file-input</code>.</span>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Hidden preview:</label>
								<div class="col-lg-10">
									<input type="file" class="file-input" data-show-preview="false" data-fouc>
									<span class="form-text text-muted">Hide file preview thumbnails.</span>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Using data-attributes:</label>
								<div class="col-lg-10">
									<input type="file" class="file-input" multiple="multiple" data-show-upload="false" data-show-caption="true" data-show-preview="true" data-fouc>
									<span class="form-text text-muted">Use file input attributes (e.g. multiple upload) for setting input behavior and data attributes to control plugin options. For example, hide/show display of upload button and caption.</span>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Disabled input:</label>
								<div class="col-lg-10">
									<input type="file" class="file-input" disabled data-fouc>
									<span class="form-text text-muted">Set the file input widget to be <code>readonly</code> or <code>disabled</code>.</span>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Hidden caption:</label>
								<div class="col-lg-10">
									<input type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-fouc>
									<span class="form-text text-muted">Hide the caption and display widget with only buttons.</span>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Input group sizing:</label>
								<div class="col-lg-10">
									<div class="form-group">
										<input type="file" class="file-input form-control-lg" data-main-class="input-group-lg" data-fouc>
										<span class="form-text text-muted">Large file input</span>
									</div>

									<div class="form-group">
										<input type="file" class="file-input" data-fouc>
										<span class="form-text text-muted">Default file input</span>
									</div>

									<div class="form-group">
										<input type="file" class="file-input form-control-sm" data-main-class="input-group-sm" data-fouc>
										<span class="form-text text-muted">Small file input</span>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Input button sizing:</label>
								<div class="col-lg-10">
									<div class="form-group">
										<input type="file" class="file-input form-control-lg" data-show-caption="false" data-show-upload="false" data-browse-class="btn btn-primary btn-lg" data-remove-class="btn btn-light btn-lg" data-fouc>
										<span class="form-text text-muted">Large file input button</span>
									</div>

									<div class="form-group">
										<input type="file" class="file-input" data-show-caption="false" data-show-upload="false" data-browse-class="btn btn-primary" data-remove-class="btn btn-light" data-fouc>
										<span class="form-text text-muted">Default file input button</span>
									</div>

									<div class="form-group">
										<input type="file" class="file-input form-control-sm" data-show-caption="false" data-show-upload="false" data-browse-class="btn btn-primary btn-sm" data-remove-class="btn btn-light btn-sm" data-fouc>
										<span class="form-text text-muted">Small file input button</span>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Overwrite styles:</label>
								<div class="col-lg-10">
									<input type="file" class="file-input-custom" data-show-caption="true" data-show-upload="true" accept="image/*" data-fouc>
									<span class="form-text text-muted">Show only image files for selection &amp; preview. Control button labels, styles, and icons for the browse, upload, and remove buttons.</span>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Templates modification:</label>
								<div class="col-lg-10">
									<input type="file" class="file-input-advanced" multiple="multiple" data-fouc>
									<span class="form-text text-muted">Advanced customization using templates. For example, change position of buttons from right to left.</span>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Specify file extensions:</label>
								<div class="col-lg-10">
									<input type="file" class="file-input-extensions" data-fouc>
									<span class="form-text text-muted">Allow only specific file extensions. In this example only <code>jpg</code>, <code>gif</code>, <code>png</code> and <code>txt</code> extensions are allowed.</span>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Specify file types:</label>
								<div class="col-lg-10">
									<input type="file" class="file-input" accept="image/*, video/*" data-fouc>
									<span class="form-text text-muted">Allow only <code>image</code> and <code>video</code> file types to be uploaded. You can configure the condition for validating the file types using <code>`fileTypeSettings`</code>.</span>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Always display preview:</label>
								<div class="col-lg-10">
									<input type="file" class="file-input-preview" data-show-remove="true" data-fouc>
									<span class="form-text text-muted">Set maximum file upload size to 100 KB. Display preview on load with preset files/images and captions with <code>overwriteInitial</code> set to <code>false</code>. So the initial preview is always displayed when additional files are overwritten (useful for multiple upload) scenario.</span>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Overwrite preview:</label>
								<div class="col-lg-10">
									<input type="file" class="file-input-overwrite" data-fouc>
									<span class="form-text text-muted">Display preview on load with preset files/images and captions with <code>overwriteInitial</code> set to <code>true</code>.</span>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Block button:</label>
								<div class="col-lg-10">
									<input type="file" class="file-input" data-browse-class="btn btn-primary btn-block" data-show-remove="false" data-show-caption="false" data-show-upload="false" data-fouc>
									<span class="form-text text-muted">Display the widget as a single block button.</span>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">Using plugin methods:</label>
								<div class="col-lg-10">
									<p><input type="file" class="file-input" id="file-input-methods" data-browse-class="btn btn-primary" data-main-class="input-group" data-show-remove="true" data-show-caption="true" data-show-upload="true" data-fouc></p>
									<button type="button" class="btn btn-success" id="btn-modify">Disable file input</button>
									<span class="form-text text-muted">Using plugin methods to alter input at runtime. For example, click the <code>Modify</code> button to disable the plugin and change plugin options..</span>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label font-weight-semibold">AJAX upload:</label>
								<div class="col-lg-10">
									<input type="file" class="file-input-ajax" multiple="multiple" data-fouc>
									<span class="form-text text-muted">This scenario uses asynchronous/parallel uploads. Uploading itself is turned off in live preview.</span>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- /bootstrap file input -->

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
