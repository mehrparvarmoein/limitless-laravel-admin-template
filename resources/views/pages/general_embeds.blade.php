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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">General Pages</span> - Responsive Embeds</h4>
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
							<a href="general_embeds" class="breadcrumb-item">General pages</a>
							<span class="breadcrumb-item active">Responsive embeds</span>
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

				<!-- Video options -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Video options
					</h6>
					<span class="text-muted d-block">Sources and aspect ratios</span>
				</div>

				<div class="row">
					<div class="col-sm-6">

						<!-- Youtube -->
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Youtube video</h5>
							</div>

							<div class="card-body">
								<div class="mb-4">
									<h6 class="font-weight-semibold">16:9 ratio</h6>
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>

								<h6 class="font-weight-semibold">4:3 ratio</h6>

								<div class="embed-responsive embed-responsive-4by3">
									<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IyTv_SR2uUo" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
						<!-- /youtube -->


						<!-- IMDB -->
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">IMDB video</h5>
							</div>

							<div class="card-body">
								<div class="mb-4">
									<h6 class="font-weight-semibold">16:9 ratio</h6>
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" src="http://www.imdb.com/videoembed/vi1942205977" frameborder="0"></iframe>
									</div>
								</div>

								<h6 class="font-weight-semibold">4:3 ratio</h6>
								<div class="embed-responsive embed-responsive-4by3">
									<iframe class="embed-responsive-item" src="http://www.imdb.com/videoembed/vi338798873" frameborder="0"></iframe>
								</div>
							</div>
						</div>
						<!-- /IMDB -->

					</div>

					<div class="col-sm-6">

						<!-- Vimeo -->
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Vimeo video</h5>
							</div>

							<div class="card-body">
								<div class="mb-4">
									<h6 class="font-weight-semibold">16:9 ratio</h6>
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/195944915" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
									</div>
								</div>

								<h6 class="font-weight-semibold">4:3 ratio</h6>
								<div class="embed-responsive embed-responsive-4by3">
									<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/195444476" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								</div>
							</div>
						</div>
						<!-- /vimeo -->


						<!-- Ustream -->
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">UStream video</h5>
							</div>

							<div class="card-body">
								<div class="mb-4">
									<h6 class="font-weight-semibold">16:9 ratio</h6>
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" src="http://www.ustream.tv/embed/10414700?html5ui" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
									</div>
								</div>

								<h6 class="font-weight-semibold">4:3 ratio</h6>
								<div class="embed-responsive embed-responsive-4by3">
									<iframe class="embed-responsive-item" src="http://www.ustream.tv/embed/6540154?html5ui" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								</div>
							</div>
						</div>
						<!-- /ustream -->
					
					</div>
				</div>
				<!-- /video options -->


				<!-- Embedding options -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Embedding options
					</h6>
					<span class="text-muted d-block">Iframe, embed or object elements</span>
				</div>

				<div class="row">
					<div class="col-sm-6">

						<!-- Embed element -->
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Using "embed" element</h5>
							</div>

							<div class="card-body">
								<div class="embed-responsive embed-responsive-16by9">
									<embed class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM">
								</div>
							</div>
						</div>
						<!-- /embed element -->

					</div>

					<div class="col-sm-6">

						<!-- Object element -->
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Using "object" element</h5>
							</div>

							<div class="card-body">
								<div class="embed-responsive embed-responsive-16by9">
									<object class="embed-responsive-item" data="https://www.youtube.com/embed/IyTv_SR2uUo"></object>
								</div>
							</div>
						</div>
						<!-- /object element -->

					</div>
				</div>
				<!-- /embedding options -->

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
