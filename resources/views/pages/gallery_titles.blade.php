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
	<script src="../../../../global_assets/js/demo_pages/gallery.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Gallery</span> - With Titles</h4>
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
							<a href="gallery_titles" class="breadcrumb-item">Gallery</a>
							<span class="breadcrumb-item active">With titles</span>
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

				<!-- Image grid -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Image grid
					</h6>
					<span class="text-muted d-block">Image grid with 4 - 2 - 1 columns</span>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">For ostrich much</div>
										<span class="font-size-sm text-muted">Size: 432kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">An so vulgar</div>
										<span class="font-size-sm text-muted">Size: 543kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Not rapturous</div>
										<span class="font-size-sm text-muted">Size: 219kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">He it otherwise</div>
										<span class="font-size-sm text-muted">Size: 329kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Unfeeling agreeable</div>
										<span class="font-size-sm text-muted">Size: 329kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">So come must</div>
										<span class="font-size-sm text-muted">Size: 329kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Do on unpleasing</div>
										<span class="font-size-sm text-muted">Size: 938kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Yet joy exquisite</div>
										<span class="font-size-sm text-muted">Size: 493kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Behind lovers</div>
										<span class="font-size-sm text-muted">Size: 378kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Whole every miles</div>
										<span class="font-size-sm text-muted">Size: 983kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Wished he entire</div>
										<span class="font-size-sm text-muted">Size: 763kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">He prevent request</div>
										<span class="font-size-sm text-muted">Size: 348kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Picture too and</div>
										<span class="font-size-sm text-muted">Size: 328kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Ten difficult resembled</div>
										<span class="font-size-sm text-muted">Size: 473kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Same park bore</div>
										<span class="font-size-sm text-muted">Size: 573kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Warmth his law</div>
										<span class="font-size-sm text-muted">Size: 893kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /image grid -->


				<!-- Video grid -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Video grid
					</h6>
					<span class="text-muted d-block">Video grid with 4 - 2 - 1 columns</span>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126945693?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">For ostrich much</div>
										<span class="font-size-sm text-muted">Size: 432kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/89546048?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">An so vulgar</div>
										<span class="font-size-sm text-muted">Size: 543kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126580704?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Not rapturous</div>
										<span class="font-size-sm text-muted">Size: 219kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/127790272?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">He it otherwise</div>
										<span class="font-size-sm text-muted">Size: 329kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/127628756?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Unfeeling agreeable</div>
										<span class="font-size-sm text-muted">Size: 329kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/164841921?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">So come must</div>
										<span class="font-size-sm text-muted">Size: 329kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/125791075?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Do on unpleasing</div>
										<span class="font-size-sm text-muted">Size: 938kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126545288?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Yet joy exquisite</div>
										<span class="font-size-sm text-muted">Size: 493kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/127051771?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Behind lovers</div>
										<span class="font-size-sm text-muted">Size: 378kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126833748?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Whole every miles</div>
										<span class="font-size-sm text-muted">Size: 983kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/127295085?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Wished he entire</div>
										<span class="font-size-sm text-muted">Size: 763kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126177413?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">He prevent request</div>
										<span class="font-size-sm text-muted">Size: 348kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/127423845?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Picture too and</div>
										<span class="font-size-sm text-muted">Size: 328kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/124024544?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Ten difficult resembled</div>
										<span class="font-size-sm text-muted">Size: 473kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126897736?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Same park bore</div>
										<span class="font-size-sm text-muted">Size: 573kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-3">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<div class="card-img embed-responsive embed-responsive-16by9">
									<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/173541384?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
								</div>
							</div>

							<div class="card-body">
								<div class="d-flex align-items-start flex-nowrap">
									<div>
										<div class="font-weight-semibold mr-2">Warmth his law</div>
										<span class="font-size-sm text-muted">Size: 893kb</span>
									</div>

									<div class="list-icons list-icons-extended ml-auto">
										<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>
										<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /video grid -->

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
