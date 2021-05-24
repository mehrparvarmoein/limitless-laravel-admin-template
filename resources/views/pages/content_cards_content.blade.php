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
	<script src="../../../../global_assets/js/plugins/media/fancybox.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/content_cards_content.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Content</span> - Card Content</h4>
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
							<a href="content_cards_content" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Card content</span>
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

				<!-- Card image placement -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Card image placement
					</h6>
					<span class="text-muted d-block">Top, middle and bottom placements</span>
				</div>

				<div class="row">
					<div class="col-md-4">

						<!-- Top placement -->
						<div class="card">
							<div class="card-img-actions">
								<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img-top">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
										Preview
									</a>
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
										Details
									</a>
								</div>
							</div>

							<div class="card-body">
								<h5 class="card-title">Top placement</h5>
								<p class="card-text">Default <code>top</code> placement - image always comes first in the card with text or other content below. Use <code>.card-img-top</code> image class to round top image corners.</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between">
								<span class="text-muted">Last updated 3 mins ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-half font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(12)</span>
								</span>
							</div>
						</div>
						<!-- /top placement -->


						<!-- Below card header -->
						<div class="card">
							<div class="card-header bg-transparent header-elements-inline">
								<h6 class="card-title">Below card header</h6>
								<div class="header-elements">
									<span class="badge bg-danger">Paid</span>
			                	</div>
							</div>

							<div class="card-img-actions">
								<img class="img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
										Preview
									</a>
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
										Details
									</a>
								</div>
							</div>

							<div class="card-body">
								<p class="card-text">Example of the card image, placed right after card header and before card content body. Image requires <code>.img-fluid</code> class for proper sizing.</p>
							</div>

							<div class="card-footer">
								<div class="input-group">
									<input type="text" class="form-control border-right-0" placeholder="Add comment...">

									<span class="input-group-append">
										<button class="btn bg-blue" type="button"><i class="icon-paperplane"></i></button>
									</span>
								</div>
							</div>
						</div>
						<!-- /below card header -->

					</div>

					<div class="col-md-4">

						<!-- Middle placement -->
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Middle placement</h5>
								<p class="card-text">Example of <code>middle</code> placement - image placed between card content containers (card header, card body and card footer). Image requires <code>.img-fluid</code> class for proper sizing.</p>
							</div>

							<div class="card-img-actions">
								<img class="img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
										Preview
									</a>
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
										Details
									</a>
								</div>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="font-size-sm text-uppercase font-weight-semibold">Nov 12, 11:25 am</span>
								<span class="font-size-sm text-uppercase text-success font-weight-semibold">Due in 12 days</span>
							</div>
						</div>
						<!-- /middle placement -->


						<!-- Multiple titles -->
						<div class="card">
							<div class="card-header bg-light d-flex justify-content-between">
								<span><i class="icon-user-check mr-2"></i> <a href="#">Eugene Kopyov</a></span>
								<span class="text-muted">Added 2 hours ago</span>
							</div>

							<div class="card-img-actions">
								<img class="img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
										Preview
									</a>
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
										Details
									</a>
								</div>
							</div>

							<div class="card-body">
								<h6 class="card-title font-weight-semibold">Multiple titles</h6>
								<p class="card-text">Another example of middle image placement - after header, before body that includes card title. Image also requires <code>.img-fluid</code> class.</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pt-0">
								<ul class="list-inline mb-0 mr-2">
									<li class="list-inline-item">
										<a href="#" class="text-pink-400"><i class="icon-heart5"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="#" class="text-default"><i class="icon-bubble2"></i></a>
									</li>
								</ul>

								<ul class="list-inline mb-0">
									<li class="list-inline-item"><a href="#">Edit</a></li>
									<li class="list-inline-item"><a href="#">Delete</a></li>
								</ul>
							</div>
						</div>
						<!-- /multiple titles -->

					</div>

					<div class="col-md-4">

						<!-- Bottom placement -->
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Bottom placement</h5>
								<p class="card-text">Example of <code>bottom</code> placement - image always comes last in the card with text or other content above. Use <code>.card-img-bottom</code> image class to round bottom image corners.</p>
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="text-muted"><i class="icon-spinner2 spinner mr-2"></i> Processing...</div>

								<div class="progress w-100 w-sm-auto wmin-sm-200 mt-2 mt-sm-0" style="height: 0.375rem;">
									<div class="progress-bar bg-indigo-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>

							<div class="card-img-actions">
								<img class="img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
										Preview
									</a>
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
										Details
									</a>
								</div>
							</div>
						</div>
						<!-- /bottom placement -->


						<!-- Multiple footers -->
						<div class="card">
							<div class="card-img-actions">
								<img class="img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
										Preview
									</a>
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
										Details
									</a>
								</div>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pb-0">
								<span class="text-muted">23 430 followers</span>

								<ul class="list-inline list-inline-condensed mb-0">
									<li class="list-inline-item">
										<a href="#" class="text-indigo-400"><i class="icon-thumbs-up2"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="#" class="text-danger"><i class="icon-thumbs-down2"></i></a>
									</li>
									<li class="list-inline-item ml-3">
										<a href="#" class="text-muted"><i class="icon-flag4"></i></a>
									</li>
								</ul>
							</div>

							<div class="card-body">
								<h6 class="card-title font-weight-semibold">Multiple footers</h6>
								<p class="card-text">In this example card image is on top, but content has multiple containers - use spacing utility classes to control vertical spacing of card content.</p>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<a href="#" class="text-default"><i class="icon-bubble2 mr-2"></i> Comment</a>
								<span class="text-muted"><i class="icon-eye mr-2"></i> 673</span>
							</div>
						</div>
						<!-- /multiple footers -->

					</div>
				</div>
				<!-- /card image placement -->


				<!-- Card image overlays -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card image overlays
					</h6>
					<span class="text-muted d-block">Link, zoom and overlay with actions</span>
				</div>

				<div class="row">
					<div class="col-md-4">

						<!-- Linked image -->
						<div class="card">
							<a href="#">
								<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
							</a>

							<div class="card-body">
								<h5 class="card-title">Linked image</h5>
								<p class="card-text">By default, cards are designed to showcase linked images with minimal required markup, including default class for rounded corners.</p>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Last updated 3 mins ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-half font-size-base text-warning"></i>
									<i class="icon-star-empty3 font-size-base text-warning"></i>
									<span class="text-muted ml-2">(43)</span>
								</span>
							</div>
						</div>
						<!-- /linked image -->

					</div>

					<div class="col-md-4">

						<!-- Zooming -->
						<div class="card">
							<div class="card-img-actions">
								<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
									<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
									<span class="card-img-actions-overlay card-img-top">
										<i class="icon-plus3 icon-2x"></i>
									</span>
								</a>
							</div>

							<div class="card-body">
								<h5 class="card-title">Zooming</h5>
								<p class="card-text">Extend card image with simple zoomable lightbox. The icon is inserted directly in HTML and can be easily changed.</p>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Last updated 2 hours ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-empty3 font-size-base text-warning"></i>
									<span class="text-muted ml-2">(86)</span>
								</span>
							</div>
						</div>
						<!-- /zooming -->

					</div>

					<div class="col-md-4">

						<!-- Overlay buttons -->
						<div class="card">
							<div class="card-img-actions">
								<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img-top">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2" data-popup="lightbox">
										Preview
									</a>
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 ml-2">
										Details
									</a>
								</div>
							</div>

							<div class="card-body">
								<h5 class="card-title">Overlay buttons</h5>
								<p class="card-text">Add as many buttons or links as you want, all of them will be vertically and horizontally centered. Supports all available styles.</p>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Last updated yesterday</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<span class="text-muted ml-2">(79)</span>
								</span>
							</div>
						</div>
						<!-- /overlay buttons -->

					</div>
				</div>
				<!-- /card image overlays -->


				<!-- Card video placement -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card video options
					</h6>
					<span class="text-muted d-block">Video container placements</span>
				</div>

				<div class="row">
					<div class="col-md-4">

						<!-- Top placement -->
						<div class="card">
							<div class="embed-responsive embed-responsive-16by9 card-img-top">
								<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/173541384?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
							</div>

							<div class="card-body">
								<h5 class="card-title">Top placement</h5>
								<p class="card-text">Default <code>top</code> placement - video always comes first in the card with text or other content below. Use <code>.card-img-top</code> helper class to round top video container corners.</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between">
								<span class="text-muted">Last updated 3 mins ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-half font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(12)</span>
								</span>
							</div>
						</div>
						<!-- /top placement -->

					</div>

					<div class="col-md-4">

						<!-- Middle placement -->
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Middle placement</h5>
								<p class="card-text">Example of <code>middle</code> placement - video placed between card content containers (header, body and footer). Middle option doesn't require any additional video container classes.</p>
							</div>

							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/173652088?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="font-size-sm text-uppercase font-weight-semibold">Nov 12, 11:25 am</span>
								<span class="font-size-sm text-uppercase text-success font-weight-semibold">Due in 12 days</span>
							</div>
						</div>
						<!-- /middle placement -->

					</div>

					<div class="col-md-4">

						<!-- Bottom placement -->
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Bottom placement</h5>
								<p class="card-text">Example of <code>bottom</code> placement - video always comes last in the card with text or other content above. Use <code>.card-img-bottom</code> helper class to round bottom video container corners.</p>
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="text-muted"><i class="icon-spinner2 spinner mr-2"></i> Uploading...</div>

								<div class="progress w-100 w-sm-auto wmin-sm-200 mt-2 mt-sm-0" style="height: 0.375rem;">
									<div class="progress-bar bg-success-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>

							<div class="embed-responsive embed-responsive-16by9 card-img-bottom">
								<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/127423845?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
							</div>
						</div>
						<!-- /bottom placement -->

					</div>
				</div>
				<!-- /card video placement -->


				<!-- Card text options -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card text options
					</h6>
					<span class="text-muted d-block">Various text placement variations</span>
				</div>

				<div class="row">
					<div class="col-md-4">

						<!-- White header and footer -->
						<div class="card">
							<div class="card-header bg-white d-flex justify-content-between">
								<span class="font-size-sm text-uppercase font-weight-semibold">Invoice <a href="#">#4323</a></span>
								<span class="font-size-sm text-uppercase text-success font-weight-semibold">Due in 4 days</span>
							</div>
							<div class="card-body">
								<h6 class="card-title">White header and footer</h6>
								<p class="card-text">This example demonstrates how header and footer can handle multiple text containers. Both containers have white background color.</p>
							</div>

							<div class="card-footer bg-white d-flex justify-content-between">
								<span class="text-muted">Issued 23.12.2017</span>

								<ul class="list-inline mb-0">
									<li class="list-inline-item"><a href="#">Edit</a></li>
									<li class="list-inline-item"><a href="#">Delete</a></li>
								</ul>
							</div>
						</div>
						<!-- /white header and footer -->


						<!-- Dark header, transparent footer -->
						<div class="card">
							<div class="card-header bg-dark text-white d-flex justify-content-between">
								<span class="font-size-sm text-uppercase font-weight-semibold">Nov 12, 11:25am</span>
								<span class="font-size-sm text-uppercase font-weight-semibold">Due in 12 days</span>
							</div>
							<div class="card-body">
								<h6 class="card-title">Dark header, transparent footer</h6>
								<p class="card-text">You can easily mix header and footer styles on the fly just by adding utility classes to the footer and header containers.</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pt-0">
								<span class="text-muted">Last updated 3 mins ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-half font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(12)</span>
								</span>
							</div>
						</div>
						<!-- /dark header, transparent footer -->


						<!-- Transparent header, white footer -->
						<div class="card">
							<div class="card-header d-sm-flex justify-content-sm-between align-items-sm-center">
								<div>
									<i class="icon-reading mr-2"></i> Hi, <strong>Eugene</strong>
								</div>
								<div class="mt-1 mt-sm-0">You have <a href="#">3 new messages</a></div>
							</div>

							<div class="card-body">
								<h6 class="card-title">Transparent header, white footer</h6>
								<p class="card-text">This combination can be useful when your main content and actions need to be separated, but visually be a part of the card.</p>
							</div>

							<div class="card-footer bg-white d-flex justify-content-between">
								<div class="input-group">
									<input type="text" class="form-control border-right-0" placeholder="What's new?">

									<span class="input-group-append">
										<button class="btn bg-blue" type="button"><i class="icon-paperplane"></i></button>
									</span>
								</div>
							</div>
						</div>
						<!-- /transparent header, white footer -->

					</div>

					<div class="col-md-4">

						<!-- Grey header and footer -->
						<div class="card">
							<div class="card-header bg-light d-flex justify-content-between">
								<span class="font-size-sm text-uppercase font-weight-semibold">Invoice <a href="#">#5490</a></span>
								<span class="font-size-sm text-uppercase text-success font-weight-semibold">Due in 3 days</span>
							</div>

							<div class="card-body">
								<h6 class="card-title">Grey header and footer</h6>
								<p class="card-text">In this example header and footer have light grey background color. Grey color is default for the footer, but header requires <code>.bg-light</code> class.</p>
							</div>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Issued 26.12.2017</span>

								<ul class="list-inline mb-0">
									<li class="list-inline-item"><a href="#">Edit</a></li>
									<li class="list-inline-item"><a href="#">Delete</a></li>
								</ul>
							</div>
						</div>
						<!-- /grey header and footer -->


						<!-- Transparent header, dark footer -->
						<div class="card">
							<div class="card-header d-flex justify-content-between">
								<span class="font-size-sm text-uppercase text-muted">Dec 28, 03:49am</span>
								<span class="font-size-sm text-uppercase text-danger font-weight-semibold">Overdue</span>
							</div>
							<div class="card-body">
								<h6 class="card-title">Transparent header, dark footer</h6>
								<p class="card-text">This example demonstrates transparent card header and dark card footer. Card title is placed inside card body content.</p>
							</div>

							<div class="card-footer bg-dark text-white d-flex justify-content-between">
								<span>Last updated 3 mins ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-empty3 font-size-base text-orange-300"></i>
									<span class="opacity-75 ml-2">(53)</span>
								</span>
							</div>
						</div>
						<!-- /transparent header, dark footer -->


						<!-- Transparent header and footer -->
						<div class="card">
							<div class="card-header d-sm-flex justify-content-sm-between align-items-sm-center">
								<div>
									<i class="icon-reading mr-2"></i> Hi, <strong>Eugene</strong>
								</div>
								<div class="mt-1 mt-sm-0">You have <a href="#">3 new messages</a></div>
							</div>

							<div class="card-body">
								<h6 class="card-title">Transparent header and footer</h6>
								<p class="card-text">If you need to extend the card with 2 extra areas with context info without separation, this combination might be very useful.</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pt-0">
								<div class="input-group">
									<input type="text" class="form-control border-right-0" placeholder="What's new?">

									<span class="input-group-append">
										<button class="btn bg-blue" type="button"><i class="icon-paperplane"></i></button>
									</span>
								</div>
							</div>
						</div>
						<!-- /transparent header and footer -->

					</div>

					<div class="col-md-4">

						<!-- Custom header and footer colors -->
						<div class="card">
							<div class="card-header bg-dark d-flex justify-content-between">
								<span class="font-size-sm text-uppercase font-weight-semibold">Invoice <a href="#" class="text-white">#2490</a></span>
								<span class="font-size-sm text-uppercase font-weight-semibold">Due in 2 days</span>
							</div>

							<div class="card-body">
								<h6 class="card-title">Custom header and footer color</h6>
								<p class="card-text">You can easily mix footer and header colors - just add color helper class to both containers and optional <code>.text-white</code> class to links.</p>
							</div>

							<div class="card-footer bg-dark d-flex justify-content-between">
								<span class="opacity-75">Issued 26.12.2017</span>

								<ul class="list-inline mb-0">
									<li class="list-inline-item"><a href="#" class="text-white">Edit</a></li>
									<li class="list-inline-item"><a href="#" class="text-white">Delete</a></li>
								</ul>
							</div>
						</div>
						<!-- /custom header and footer colors -->


						<!-- Custom border color -->
						<div class="card border-1 border-success">
							<div class="card-header alpha-success border-success d-flex justify-content-between">
								<span class="font-size-sm text-uppercase font-weight-semibold">Jan 3, 02:50am</span>
								<span class="font-size-sm text-uppercase text-success-700 font-weight-semibold">Due in 5 days</span>
							</div>
							<div class="card-body">
								<h6 class="card-title">Custom border color</h6>
								<p class="card-text">If you want to highlight cards or content areas, add color helper classes to the card and/or card footer and header.</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pt-0">
								<span class="text-muted">Uploaded 4 days ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(452)</span>
								</span>
							</div>
						</div>
						<!-- /custom border class -->


						<!-- Grey header, transparent footer -->
						<div class="card">
							<div class="card-header bg-light d-sm-flex justify-content-sm-between align-items-sm-center">
								<div>
									<i class="icon-reading mr-2"></i> Hi, <strong>Eugene</strong>
								</div>
								<div class="mt-1 mt-sm-0">You have <a href="#">3 new messages</a></div>
							</div>

							<div class="card-body">
								<h6 class="card-title">Grey header, transparent footer</h6>
								<p class="card-text">And this combination is a perfect solution for displaying header with alternate content that is not really important, but nice to have.</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pt-0">
								<div class="input-group">
									<input type="text" class="form-control border-right-0" placeholder="What's new?">

									<span class="input-group-append">
										<button class="btn bg-blue" type="button"><i class="icon-paperplane"></i></button>
									</span>
								</div>
							</div>
						</div>
						<!-- /grey header, transparent footer -->

					</div>
				</div>
				<!-- /card text options -->


				<!-- Card content alignment -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card content alignment
					</h6>
					<span class="text-muted d-block">Horizontal and vertical content alignment</span>
				</div>

				<div class="row">
					<div class="col-md-4">

						<!-- Left alignment -->
						<div class="card">
							<div class="card-body">
								<i class="icon-checkmark3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3"></i>
								<h5 class="card-title">Left alignment</h5>
								<p class="mb-3">Left content alignment is the default option in left-to-right direction that doesn't require any extra utility classes.</p>

								<a href="#" class="btn bg-success">Read more <i class="icon-arrow-right14 ml-2"></i></a>
							</div>
						</div>
						<!-- /left alignment -->


						<!-- Top alignment -->
						<div class="card text-center" style="min-height: 350px;">
							<div class="card-body">
								<i class="icon-checkmark3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3"></i>
								<h5 class="card-title">Top alignment</h5>
								<p class="mb-3">Top content alignment is also the default option in LTR layout. Other vertical alignment options require flex utility classes.</p>

								<a href="#" class="btn bg-success">Read more <i class="icon-arrow-right14 ml-2"></i></a>
							</div>
						</div>
						<!-- /top alignment -->

					</div>

					<div class="col-md-4">

						<!-- Center alignment -->
						<div class="card text-center">
							<div class="card-body">
								<i class="icon-cross2 icon-2x text-danger border-danger border-3 rounded-round p-3 mb-3"></i>
								<h5 class="card-title">Center alignment</h5>
								<p class="mb-3">Use <code>.text-center</code> alignment utility class to center content horizontally. Responsive options are also available</p>

								<a href="#" class="btn bg-danger-400">Read more <i class="icon-arrow-right14 ml-2"></i></a>
							</div>
						</div>
						<!-- /center alignment -->


						<!-- Middle alignment -->
						<div class="card card-body justify-content-center text-center" style="min-height: 350px;">
							<div>
								<i class="icon-cross2 icon-2x text-danger border-danger border-3 rounded-round p-3 mb-3"></i>
								<h5 class="card-title">Middle alignment</h5>
								<p class="mb-3">Use <code>.justify-content-center</code> class to center content vertically. Add optional breakpoints to enable responsiveness</p>

								<a href="#" class="btn bg-danger-400">Read more <i class="icon-arrow-right14 ml-2"></i></a>
							</div>
						</div>
						<!-- /middle alignment -->

					</div>

					<div class="col-md-4">

						<!-- Right alignment -->
						<div class="card text-right">
							<div class="card-body">
								<i class="icon-question7 icon-2x text-blue border-blue border-3 rounded-round p-3 mb-3"></i>
								<h5 class="card-title">Right alignment</h5>
								<p class="mb-3">Use <code>.text-right</code> alignment utility class to center content horizontally. Add optional breakpoints to enable responsiveness</p>

								<a href="#" class="btn bg-blue">Read more <i class="icon-arrow-right14 ml-2"></i></a>
							</div>
						</div>
						<!-- /right alignment -->


						<!-- Bottom alignment -->
						<div class="card card-body justify-content-end text-center" style="min-height: 350px;">
							<div>
								<i class="icon-question7 icon-2x text-blue border-blue border-3 rounded-round p-3 mb-3"></i>
								<h5 class="card-title">Bottom alignment</h5>
								<p class="mb-3">Use <code>.justify-content-end</code> class to stick content to the bottom. Add optional breakpoints to enable responsiveness</p>

								<a href="#" class="btn bg-blue">Read more <i class="icon-arrow-right14 ml-2"></i></a>
							</div>
						</div>
						<!-- /bottom alignment -->

					</div>
				</div>
				<!-- /card content alignment -->


				<!-- Card table options -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card table options
					</h6>
					<span class="text-muted d-block">Various table placement options</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Card body + table -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Card body + table</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Simple example of the table that comes right after card body container (default placement). Doesn't require any additional classes since default table style doesn't include horizontal borders.
							</div>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Eugene</td>
											<td>Kopyov</td>
											<td>@Kopyov</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Victoria</td>
											<td>Baker</td>
											<td>@Vicky</td>
										</tr>
										<tr>
											<td>3</td>
											<td>James</td>
											<td>Alexander</td>
											<td>@Alex</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Franklin</td>
											<td>Morrison</td>
											<td>@Frank</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="card-footer bg-light d-flex justify-content-between">
								<div>
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-file-eye"></i></a>
				                		<a href="#" class="list-icons-item ml-1"><i class="icon-file-pdf"></i></a>
				                		<a href="#" class="list-icons-item ml-1"><i class="icon-file-excel"></i></a>
				                	</div>
			                	</div>

								<ul class="list-inline list-inline-dotted mb-0 mt-1 mt-sm-0">
									<li class="list-inline-item"><a href="#">Download</a></li>
									<li class="list-inline-item"><a href="#">Upload</a></li>
								</ul>
							</div>
						</div>
						<!-- /card body + table -->


						<!-- Table + card body -->
						<div class="card">
							<div class="card-header bg-transparent header-elements-inline">
								<h5 class="card-title">Table + card body</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Eugene</td>
											<td>Kopyov</td>
											<td>@Kopyov</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Victoria</td>
											<td>Baker</td>
											<td>@Vicky</td>
										</tr>
										<tr>
											<td>3</td>
											<td>James</td>
											<td>Alexander</td>
											<td>@Alex</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Franklin</td>
											<td>Morrison</td>
											<td>@Frank</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="card-body">
								In this example card body container comes after table - by default all table cells have top border, in this specific case card body includes top border for better visual content separation.
							</div>

							<div class="card-footer bg-light d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-left py-sm-2">
								<div>3290 entries found</div>

								<ul class="pagination pagination-sm pagination-pager pagination-pager-linked justify-content-between mt-2 mt-sm-0">
									<li class="page-item disabled"><a href="#" class="page-link">← Older</a></li>
									<li class="page-item"><a href="#" class="page-link">Newer →</a></li>
								</ul>
							</div>
						</div>
						<!-- /table + card body -->

					</div>

					<div class="col-md-6">

						<!-- Combined table styles -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Combined table styles</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								In this example table combines all default table styles: stripes, borders and row highlight. As always, all tables require base <code>.table</code> class for proper styling that matches Limitless theme.
							</div>

							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Eugene</td>
											<td>Kopyov</td>
											<td>@Kopyov</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Victoria</td>
											<td>Baker</td>
											<td>@Vicky</td>
										</tr>
										<tr>
											<td>3</td>
											<td>James</td>
											<td>Alexander</td>
											<td>@Alex</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Franklin</td>
											<td>Morrison</td>
											<td>@Frank</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="card-footer bg-white d-flex justify-content-between">
								<div>
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-file-eye"></i></a>
				                		<a href="#" class="list-icons-item ml-1"><i class="icon-file-pdf"></i></a>
				                		<a href="#" class="list-icons-item ml-1"><i class="icon-file-excel"></i></a>
				                	</div>
			                	</div>

								<ul class="list-inline list-inline-dotted mb-0 mt-1 mt-sm-0">
									<li class="list-inline-item"><a href="#">Download</a></li>
									<li class="list-inline-item"><a href="#">Upload</a></li>
								</ul>
							</div>
						</div>
						<!-- /combined table styles -->


						<!-- Table at the bottom -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Table at the bottom</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								This element's order can be handy if you need to show the table at the very bottom of the card, below all other content containers - header, body and footer. You can of course add other content below.
							</div>

							<div class="card-footer bg-light d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-left py-sm-2">
								<div>5332 entries found</div>

								<ul class="pagination pagination-sm pagination-pager pagination-pager-linked justify-content-between mt-2 mt-sm-0">
									<li class="page-item disabled"><a href="#" class="page-link">← Older</a></li>
									<li class="page-item"><a href="#" class="page-link">Newer →</a></li>
								</ul>
							</div>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Eugene</td>
											<td>Kopyov</td>
											<td>@Kopyov</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Victoria</td>
											<td>Baker</td>
											<td>@Vicky</td>
										</tr>
										<tr>
											<td>3</td>
											<td>James</td>
											<td>Alexander</td>
											<td>@Alex</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Franklin</td>
											<td>Morrison</td>
											<td>@Frank</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- /table at the bottom -->

					</div>
				</div>
				<!-- /card table options -->


				<!-- Card navigation options -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card navigation options
					</h6>
					<span class="text-muted d-block">Adapted navigation list for cards</span>
				</div>

				<div class="row">
					<div class="col-md-4">

						<!-- Text list group -->
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Text list group</h5>
								<p class="card-text">Create lists of content in a card with a flush list group. Use <code>.list-group-flush</code> class to remove borders and rounded corners.</p>
							</div>

							<ul class="list-group list-group-flush border-top">
								<li class="list-group-item">
									Sheared coasted so concurrent
									<span class="badge badge-dark ml-auto">New</span>
								</li>
								<li class="list-group-item">
									Goodness instead gull vulture
									<span class="badge bg-pink-400 badge-pill ml-auto">38</span>
								</li>
								<li class="list-group-item">
									Devilish yellow unsafe jerkily
									<span class="badge bg-indigo-400 ml-auto">Fixed</span>
								</li>
								<li class="list-group-item">
									Relentless ouch essentially
									<span class="badge bg-success badge-pill ml-auto">40</span>
								</li>
							</ul>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Updated 3 mins ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-half font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(12)</span>
								</span>
							</div>
						</div>
						<!-- /text list group -->

					</div>

					<div class="col-md-4">

						<!-- Linked list group -->
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Linked list group</h5>
								<p class="card-text">Actionable list group items with hover, disabled, and active states. Use flex utility classes if your list items contain badges, text etc.</p>
							</div>

							<ul class="list-group list-group-flush border-top">
								<a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-grid mr-2"></i>
										Basic components
									</span>
									<span class="badge bg-success ml-auto">New</span>
								</a>
								<a href="#" class="list-group-item list-group-item-action active">
									<span class="font-weight-semibold">
										<i class="icon-alignment-unalign mr-2"></i>
										Data tables extensions
									</span>
									<span class="badge bg-indigo-400 badge-pill ml-auto">38</span>
								</a>
								<a href="#" class="list-group-item list-group-item-action">
									<span class="font-weight-semibold">
										<i class="icon-cube3 mr-2"></i>
										Application pages
									</span>
									<span class="badge bg-pink-400 ml-auto">Fixed</span>
								</a>
								<a href="#" class="list-group-item list-group-item-action disabled">
									<span class="font-weight-semibold">
										<i class="icon-transmission mr-2"></i>
										Horizontal navigation
									</span>
									<span class="badge bg-dark badge-pill ml-auto">40</span>
								</a>
							</ul>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Updated 2 hours ago</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-empty3 font-size-base text-warning"></i>
									<span class="text-muted ml-2">(86)</span>
								</span>
							</div>
						</div>
						<!-- /linked list group -->

					</div>

					<div class="col-md-4">

						<!-- Multi column -->
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Multi column</h5>
								<p class="card-text">Simple example of list nav with multiple columns. Use a set of responsive flex and spacing utility classes for proper positioning and spacing.</p>
							</div>

							<ul class="list-group list-group-flush border-top">
								<li class="list-group-item">
									<span class="font-weight-semibold">Full name:</span>
									<div class="ml-auto">Victoria Anna Davidson</div>
								</li>
								<li class="list-group-item">
									<span class="font-weight-semibold">Phone number:</span>
									<div class="ml-auto">+31 641 266545</div>
								</li>
								<li class="list-group-item">
									<span class="font-weight-semibold">Corporate email:</span>
									<div class="ml-auto"><a href="#">corporate@domain.com</a></div>
								</li>
								<li class="list-group-item">
									<span class="font-weight-semibold">Personal email:</span>
									<div class="ml-auto"><a href="#">personal@domain.com</a></div>
								</li>
							</ul>

							<div class="card-footer d-flex justify-content-between">
								<span class="text-muted">Updated yesterday</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<i class="icon-star-full2 font-size-base text-warning"></i>
									<span class="text-muted ml-2">(79)</span>
								</span>
							</div>
						</div>
						<!-- /multi column -->

					</div>
				</div>
				<!-- /card navigation options -->

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
