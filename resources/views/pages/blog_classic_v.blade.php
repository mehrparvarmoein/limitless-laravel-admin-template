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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Blog</span> - Vertical Layout</h4>
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
							<a href="blog_classic_v" class="breadcrumb-item">Blog</a>
							<span class="breadcrumb-item active">Vertical layout</span>
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

				<!-- Layout 1 -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Layout #1
					</h6>
					<span class="text-muted d-block">Card with transparent footer</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Blog layout #1 with image -->
						<div class="card">
							<div class="card-header">
								<h5 class="card-title font-weight-semibold"><a href="#" class="text-default">Blog post layout #1 with image</a></h5>
							</div>

							<div class="card-body">
								<div class="card-img-actions mb-3">
									<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
									<div class="card-img-actions-overlay card-img">
										<a href="blog_single" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>

								When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.
							</div>

							<div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
								<ul class="list-inline list-inline-dotted text-muted mb-3 mb-sm-0">
									<li class="list-inline-item">By <a href="#" class="text-muted">Eugene</a></li>
									<li class="list-inline-item">July 5th, 2016</li>
									<li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
								</ul>

								<a href="#" class="text-muted"><i class="icon-heart6 text-pink mr-2"></i> 281</a>
							</div>
						</div>
						<!-- /blog layout #1 with image -->
					
					</div>

					<div class="col-md-6">

						<!-- Blog layout #1 with video -->
						<div class="card">
							<div class="card-header">
								<h5 class="card-title font-weight-semibold"><a href="#" class="text-default">Blog post layout #1 with video</a></h5>
							</div>

							<div class="card-body">
								<div class="card-img embed-responsive embed-responsive-16by9 mb-3">
									<iframe class="embed-responsive-item" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/164841921?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>

								Pernicious drooled tryingly over crud peaceful gosh yet much following brightly mallard hey gregariously far gosh until earthworm python some impala belched darn a sighed unicorn much changed and astride cat and burned grizzly when jeez wonderful the outside tedious.
							</div>

							<div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
								<ul class="list-inline list-inline-dotted text-muted mb-3 mb-sm-0">
									<li class="list-inline-item">By <a href="#" class="text-muted">Eugene</a></li>
									<li class="list-inline-item">July 5th, 2016</li>
									<li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
								</ul>

								<a href="#" class="text-muted"><i class="icon-heart6 text-pink mr-2"></i> 281</a>
							</div>
						</div>
						<!-- /blog layout #1 with video -->

					</div>
				</div>
				<!-- /layout 1 -->


				<!-- Layout 2 -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Layout #2
					</h6>
					<span class="text-muted d-block">Card with default footer</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Blog layout #2 with image -->
						<div class="card">
							<div class="card-body">
								<div class="card-img-actions mb-3">
									<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
									<div class="card-img-actions-overlay card-img">
										<a href="blog_single" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>

								<h5 class="mb-3">
									<a href="#" class="font-weight-semibold text-default">Blog post layout #2 with image</a>
								</h5>

								When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.
							</div>

							<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="list-inline list-inline-dotted text-muted mb-3 mb-sm-0">
									<li class="list-inline-item">By <a href="#" class="text-muted">Eugene</a></li>
									<li class="list-inline-item">July 5th, 2016</li>
									<li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
								</ul>

								<a href="#" class="text-muted"><i class="icon-heart6 text-pink mr-2"></i> 281</a>
							</div>
						</div>
						<!-- /blog layout #2 with image -->
					
					</div>

					<div class="col-md-6">

						<!-- Blog layout #2 with video -->
						<div class="card">
							<div class="card-body">
								<div class="embed-responsive embed-responsive-16by9 mb-3">
									<iframe class="embed-responsive-item" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/173541384?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>

								<h5 class="mb-3">
									<a href="#" class="font-weight-semibold text-default">Blog post layout #2 with video</a>
								</h5>

								Pernicious drooled tryingly over crud peaceful gosh yet much following brightly mallard hey gregariously far gosh until earthworm python some impala belched darn a sighed unicorn much changed and astride cat and burned grizzly when jeez wonderful the outside tedious.
							</div>

							<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="list-inline list-inline-dotted text-muted mb-3 mb-sm-0">
									<li class="list-inline-item">By <a href="#" class="text-muted">Eugene</a></li>
									<li class="list-inline-item">July 5th, 2016</li>
									<li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
								</ul>

								<a href="#" class="text-muted"><i class="icon-heart6 text-pink mr-2"></i> 281</a>
							</div>
						</div>
						<!-- /blog layout #2 with video -->

					</div>
				</div>
				<!-- /layout 2 -->


				<!-- Layout 3 -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Layout #3
					</h6>
					<span class="text-muted d-block">Layout with labeled tags</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Blog layout #3 with image -->
						<div class="card">
							<div class="card-body">
								<div class="card-img-actions mb-3">
									<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
									<div class="card-img-actions-overlay card-img">
										<a href="blog_single" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>

								<h5 class="font-weight-semibold mb-1">
									<a href="#" class="text-default">Blog post layout #3 with image</a>
								</h5>

								<ul class="list-inline list-inline-dotted text-muted mb-3">
									<li class="list-inline-item">By <a href="#" class="text-muted">Eugene</a></li>
									<li class="list-inline-item">July 5th, 2016</li>
									<li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
									<li class="list-inline-item"><a href="#" class="text-muted"><i class="icon-heart6 font-size-base text-pink mr-2"></i> 281</a></li>
								</ul>

								When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.
							</div>

							<div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
								<ul class="list-inline list-inline-condensed mb-3 mb-sm-0">
									<li class="list-inline-item"><a href="#"><span class="badge bg-teal-300">Image</span></a></li>
									<li class="list-inline-item"><a href="#"><span class="badge bg-teal-300">Blog</span></a></li>
									<li class="list-inline-item"><a href="#"><span class="badge bg-teal-300">Post</span></a></li>
								</ul>

								<a href="#" class="btn bg-teal">Read more <i class="icon-arrow-left13 ml-2"></i></a>
							</div>
						</div>
						<!-- /blog layout #3 with image -->
					
					</div>

					<div class="col-md-6">

						<!-- Blog layout #3 with video -->
						<div class="card">
							<div class="card-body">
								<div class="embed-responsive embed-responsive-16by9 mb-3">
									<iframe class="embed-responsive-item" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/175738725?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>

								<h5 class="font-weight-semibold mb-1">
									<a href="#" class="text-default">Blog post layout #3 with video</a>
								</h5>

								<ul class="list-inline list-inline-dotted text-muted mb-3">
									<li class="list-inline-item">By <a href="#" class="text-muted">Eugene</a></li>
									<li class="list-inline-item">July 5th, 2016</li>
									<li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
									<li class="list-inline-item"><a href="#" class="text-muted"><i class="icon-heart6 font-size-base text-pink mr-2"></i> 281</a></li>
								</ul>

								Pernicious drooled tryingly over crud peaceful gosh yet much following brightly mallard hey gregariously far gosh until earthworm python some impala belched darn a sighed unicorn much changed and astride cat and burned grizzly when jeez wonderful the outside tedious.
							</div>

							<div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
								<ul class="list-inline list-inline-condensed mb-3 mb-sm-0">
									<li class="list-inline-item"><a href="#"><span class="badge bg-blue-300">Video</span></a></li>
									<li class="list-inline-item"><a href="#"><span class="badge bg-blue-300">Blog</span></a></li>
									<li class="list-inline-item"><a href="#"><span class="badge bg-blue-300">Post</span></a></li>
								</ul>

								<a href="#" class="btn bg-blue">Read more <i class="icon-arrow-left13 ml-2"></i></a>
							</div>
						</div>
						<!-- /blog layout #3 with video -->

					</div>
				</div>
				<!-- /layout 3 -->


				<!-- Layout 4 -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Layout #4
					</h6>
					<span class="text-muted d-block">Display details as icons</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Blog layout #4 with image -->
						<div class="card">
							<div class="card-body">
								<div class="card-img-actions mb-3">
									<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
									<div class="card-img-actions-overlay card-img">
										<a href="blog_single" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>

								<h5 class="font-weight-semibold mb-1">
									<a href="#" class="text-default">Blog post layout #4 with image</a>
								</h5>

								<ul class="list-inline list-inline-dotted text-muted mb-3">
									<li class="list-inline-item">By <a href="#" class="text-muted">Eugene</a></li>
									<li class="list-inline-item">July 5th, 2016</li>
									<li class="list-inline-item">
										<a href="#" class="text-muted">image</a>,
										<a href="#" class="text-muted">blog</a>,
										<a href="#" class="text-muted">post</a>
									</li>
								</ul>

								When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.
							</div>

							<div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
								<ul class="list-inline mb-3 mb-sm-0">
									<li class="list-inline-item"><a href="#" class="text-default"><i class="icon-comment mr-2"></i>12</a></li>
									<li class="list-inline-item"><a href="#" class="text-default"><i class="icon-twitter text-info mr-2"></i> 1,489</a></li>
									<li class="list-inline-item"><a href="#" class="text-default"><i class="icon-heart6 text-pink mr-2"></i> 281</a></li>
								</ul>

								<a href="#">Full article <i class="icon-circle-right2 ml-2"></i></a>
							</div>
						</div>
						<!-- /blog layout #4 with image -->
					
					</div>

					<div class="col-md-6">

						<!-- Blog layout #4 with video -->
						<div class="card">
							<div class="card-body">
								<div class="embed-responsive embed-responsive-16by9 mb-3">
									<iframe class="embed-responsive-item" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/173652088?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>

								<h5 class="font-weight-semibold mb-1">
									<a href="#" class="text-default">Blog post layout #4 with video</a>
								</h5>

								<ul class="list-inline list-inline-dotted text-muted mb-3">
									<li class="list-inline-item">By <a href="#" class="text-muted">Eugene</a></li>
									<li class="list-inline-item">July 5th, 2016</li>
									<li class="list-inline-item">
										<a href="#" class="text-muted">image</a>,
										<a href="#" class="text-muted">blog</a>,
										<a href="#" class="text-muted">post</a>
									</li>
								</ul>

								Pernicious drooled tryingly over crud peaceful gosh yet much following brightly mallard hey gregariously far gosh until earthworm python some impala belched darn a sighed unicorn much changed and astride cat and burned grizzly when jeez wonderful the outside tedious.
							</div>

							<div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
								<ul class="list-inline mb-3 mb-sm-0">
									<li class="list-inline-item"><a href="#" class="text-default"><i class="icon-comment mr-2"></i>12</a></li>
									<li class="list-inline-item"><a href="#" class="text-default"><i class="icon-twitter text-info mr-2"></i> 1,489</a></li>
									<li class="list-inline-item"><a href="#" class="text-default"><i class="icon-heart6 text-pink mr-2"></i> 281</a></li>
								</ul>

								<a href="#">Full article <i class="icon-circle-right2 ml-2"></i></a>
							</div>
						</div>
						<!-- /blog layout #4 with video -->

					</div>
				</div>
				<!-- /layout 4 -->


				<!-- Layout 5 -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Layout #5
					</h6>
					<span class="text-muted d-block">Centered blog post</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Blog layout #5 with image -->
						<div class="card">
							<div class="card-body">
								<div class="card-img-actions mb-3">
									<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
									<div class="card-img-actions-overlay card-img">
										<a href="blog_single" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
											<i class="icon-link"></i>
										</a>
									</div>
								</div>

								<div class="text-center">
									<h5 class="font-weight-semibold mb-1">
										<a href="#" class="text-default">Blog post layout #5 with image</a>
									</h5>

									<ul class="list-inline list-inline-dotted text-muted mb-3">
										<li class="list-inline-item">By <a href="#" class="text-muted">Eugene</a></li>
										<li class="list-inline-item">July 5th, 2016</li>
										<li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted"><i class="icon-heart6 font-size-base text-pink mr-2"></i> 281</a></li>
									</ul>

									<p class="mb-3">When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.</p>

									<a href="#" class="btn btn-primary">Read more <i class="icon-arrow-left13 ml-2"></i></a>
								</div>
							</div>
						</div>
						<!-- /blog layout #5 with image -->
					
					</div>

					<div class="col-md-6">

						<!-- Blog layout #5 with video -->
						<div class="card">
							<div class="card-body">
								<div class="embed-responsive embed-responsive-16by9 mb-3">
									<iframe class="embed-responsive-item" allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/256987201?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>

								<div class="text-center">
									<h5 class="font-weight-semibold mb-1">
										<a href="#" class="text-default">Blog post layout #5 with video</a>
									</h5>

									<ul class="list-inline list-inline-dotted text-muted mb-3">
										<li class="list-inline-item">By <a href="#" class="text-muted">Eugene</a></li>
										<li class="list-inline-item">July 5th, 2016</li>
										<li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted"><i class="icon-heart6 font-size-base text-pink mr-2"></i> 281</a></li>
									</ul>

									<p class="mb-3">Pernicious drooled tryingly over crud peaceful gosh yet much following brightly mallard hey gregariously far gosh until earthworm python some impala belched darn a sighed unicorn much changed and astride cat and burned grizzly when jeez wonderful the outside tedious.</p>

									<a href="#" class="btn btn-primary">Read more <i class="icon-arrow-left13 ml-2"></i></a>
								</div>
							</div>
						</div>
						<!-- /blog layout #5 with video -->

					</div>
				</div>
				<!-- /layout 5 -->


				<!-- Pagination -->
				<div class="d-flex justify-content-center mt-3 mb-3">
					<ul class="pagination shadow-1">
						<li class="page-item"><a href="#" class="page-link page-link-white"><i class="icon-arrow-small-right"></i></a></li>
						<li class="page-item active"><a href="#" class="page-link page-link-white">1</a></li>
						<li class="page-item"><a href="#" class="page-link page-link-white">2</a></li>
						<li class="page-item"><a href="#" class="page-link page-link-white">3</a></li>
						<li class="page-item"><a href="#" class="page-link page-link-white">4</a></li>
						<li class="page-item"><a href="#" class="page-link page-link-white">5</a></li>
						<li class="page-item"><a href="#" class="page-link page-link-white"><i class="icon-arrow-small-left"></i></a></li>
					</ul>
				</div>
				<!-- /pagination -->

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
