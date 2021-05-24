<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<script src="../../../../global_assets/js/plugins/pagination/bs_pagination.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/components_pagination.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Components</span> - Pagination</h4>
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
							<a href="components_pagination" class="breadcrumb-item">Components</a>
							<span class="breadcrumb-item active">Pagination</span>
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

				<!-- Pagination layouts title -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Pagination layouts
					</h6>
					<span class="text-muted d-block">Basic pagination layout examples</span>
				</div>
				<!-- /pagination layouts title -->


				<!-- Basic pagination -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Bordered pagination</h6>
							<p class="mb-3 text-muted">Default bordered pagination</p>

							<ul class="pagination align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Flat pagination</h6>
							<p class="mb-3 text-muted">Using <code>pagination-flat</code> class</p>

							<ul class="pagination pagination-flat align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Separated pagination</h6>
							<p class="mb-3 text-muted">Using <code>pagination-separated</code> class</p>

							<ul class="pagination pagination-separated align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /basic pagination -->


				<!-- Rounded pagination -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Bordered rounded</h6>
							<p class="mb-3 text-muted">Using <code>.pagination-rounded</code> class</p>

							<ul class="pagination pagination-rounded align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Flat rounded</h6>
							<p class="mb-3 text-muted">Using <code>.pagination-rounded-all</code> class</p>

							<ul class="pagination pagination-flat pagination-rounded align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Separated rounded</h6>
							<p class="mb-3 text-muted">Using <code>.pagination-rounded-all</code> class</p>

							<ul class="pagination pagination-separated pagination-rounded align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /rounded pagination -->



				<!-- Pagination options title -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Pagination options
					</h6>
					<span class="text-muted d-block">Pagination sizes and positions</span>
				</div>
				<!-- /pagination options title -->


				<!-- Previous and next buttons styling -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Bordered pagination</h6>
							<p class="mb-3 text-muted">Default bordered pagination</p>

							<ul class="pagination align-self-center">
								<li class="page-item"><a href="#" class="page-link">Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Flat pagination</h6>
							<p class="mb-3 text-muted">Using <code>pagination-flat</code> class</p>

							<ul class="pagination pagination-flat align-self-center">
								<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left12"></i></a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right13"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Separated pagination</h6>
							<p class="mb-3 text-muted">Using <code>pagination-separated</code> class</p>

							<ul class="pagination pagination-separated align-self-center">
								<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right13 mr-2"></i> Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next <i class="icon-arrow-left12 ml-2"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /previous and next buttons styling -->


				<!-- Pagination sizes -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Bordered pagination</h6>
							<p class="mb-3 text-muted">Sizes of a <code>default</code> pagination</p>

							<ul class="pagination pagination-lg mb-3 align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>

							<ul class="pagination mb-3 align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>

							<ul class="pagination pagination-sm mb-3 align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Flat pagination</h6>
							<p class="mb-3 text-muted">Sizes of a <code>flat</code> pagination</p>

							<ul class="pagination pagination-flat pagination-lg mb-3 align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>

							<ul class="pagination pagination-flat mb-3 align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>

							<ul class="pagination pagination-flat pagination-sm mb-3 align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Separated pagination</h6>
							<p class="mb-3 text-muted">Sizes of a <code>separated</code> pagination</p>

							<ul class="pagination pagination-separated pagination-lg mb-3 align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>

							<ul class="pagination pagination-separated mb-3 align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>

							<ul class="pagination pagination-separated pagination-sm mb-3 align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /pagination sizes -->


				<!-- Pagination position -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Left position</h6>
								<p class="mb-3 text-muted">Default left pagination position</p>
							</div>

							<ul class="pagination align-self-start">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Center position</h6>
								<p class="mb-3 text-muted">Centered pagination position</p>
							</div>

							<ul class="pagination align-self-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Right position</h6>
								<p class="mb-3 text-muted">Right pagination position</p>
							</div>

							<ul class="pagination align-self-end">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Prev</a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item disabled"><a href="#" class="page-link">3</a></li>
								<li class="page-item"><a href="#" class="page-link">4</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /pagination position -->



				<!-- Pager title -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Pager component
					</h6>
					<span class="text-muted d-block">Simple pager component</span>
				</div>
				<!-- /pager title -->


				<!-- Pager -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Default pager</h6>
							<p class="mb-3 text-muted">Basic pager example</p>

							<ul class="pagination pagination-pager justify-content-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Aligned pager links</h6>
							<p class="mb-3 text-muted">Links aligned to the sides</p>

							<ul class="pagination pagination-pager justify-content-between">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Older</a></li>
								<li class="page-item"><a href="#" class="page-link">Newer &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Disabled state</h6>
							<p class="mb-3 text-muted">Pager with <code>disabled</code> utility class</p>

							<ul class="pagination pagination-pager justify-content-center">
								<li class="page-item disabled"><a href="#" class="page-link">&rarr; &nbsp; Older</a></li>
								<li class="page-item"><a href="#" class="page-link">Newer &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /pager -->


				<!-- Rounded pager -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Rounded pager</h6>
							<p class="mb-3 text-muted">Example of a <code>rounded</code> pager</p>

							<ul class="pagination pagination-pager pagination-rounded justify-content-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Aligned pager links</h6>
							<p class="mb-3 text-muted">Aligned <code>rounded</code> links</p>

							<ul class="pagination pagination-pager pagination-rounded justify-content-between">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Older</a></li>
								<li class="page-item"><a href="#" class="page-link">Newer &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Disabled state</h6>
							<p class="mb-3 text-muted">Disabled state of <code>rounded</code> link</p>

							<ul class="pagination pagination-pager pagination-rounded justify-content-center">
								<li class="page-item disabled"><a href="#" class="page-link">&rarr; &nbsp; Older</a></li>
								<li class="page-item"><a href="#" class="page-link">Newer &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /rounded pager -->


				<!-- Linked pager -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Linked pager</h6>
							<p class="mb-3 text-muted">Pager buttons as grouped links</p>

							<ul class="pagination pagination-pager pagination-pager-linked justify-content-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Aligned pager links</h6>
							<p class="mb-3 text-muted">Aligned <code>linked</code> buttons</p>

							<ul class="pagination pagination-pager pagination-pager-linked justify-content-between">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Older</a></li>
								<li class="page-item"><a href="#" class="page-link">Newer &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Disabled state</h6>
							<p class="mb-3 text-muted">Disabled state of <code>linked</code> pager</p>

							<ul class="pagination pagination-pager pagination-pager-linked justify-content-center">
								<li class="page-item disabled"><a href="#" class="page-link">&rarr; &nbsp; Older</a></li>
								<li class="page-item"><a href="#" class="page-link">Newer &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /linked pager -->



				<!-- Pager options title -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Pager options
					</h6>
					<span class="text-muted d-block">Pager sizes and positions</span>
				</div>
				<!-- /pager options title -->


				<!-- Pager sizing -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Default pager sizes</h6>
							<p class="mb-3 text-muted">Large, default and small sizes</p>

							<ul class="pagination pagination-pager pagination-lg justify-content-center mb-3">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>

							<ul class="pagination pagination-pager justify-content-center mb-3">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>

							<ul class="pagination pagination-pager pagination-sm justify-content-center mb-3">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Rounded pager sizes</h6>
							<p class="mb-3 text-muted">Large, default and small sizes</p>

							<ul class="pagination pagination-pager pagination-rounded pagination-lg justify-content-center mb-3">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>

							<ul class="pagination pagination-pager pagination-rounded justify-content-center mb-3">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>

							<ul class="pagination pagination-pager pagination-rounded pagination-sm justify-content-center mb-3">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Linked pager sizes</h6>
							<p class="mb-3 text-muted">Large, default and small sizes</p>

							<ul class="pagination pagination-pager pagination-pager-linked pagination-lg justify-content-center mb-3">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>

							<ul class="pagination pagination-pager pagination-pager-linked justify-content-center mb-3">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>

							<ul class="pagination pagination-pager pagination-pager-linked pagination-sm justify-content-center mb-3">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /pager sizing -->


				<!-- Pager positioning -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Left position</h6>
							<p class="mb-3 text-muted">Optional <code>left</code> pager position</p>

							<ul class="pagination pagination-pager">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Centered position</h6>
							<p class="mb-3 text-muted">Default <code>centered</code> pager position</p>

							<ul class="pagination pagination-pager justify-content-center">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Right position</h6>
							<p class="mb-3 text-muted">Optional <code>right</code> pager position</p>

							<ul class="pagination pagination-pager justify-content-end">
								<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
								<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /pager positioning -->



				<!-- Dynamic pagination title -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						<span class="font-weight-semibold">TWBS</span> Pagination
					</h6>
					<span class="text-muted d-block">Another dynamic pagination for Bootstrap</span>
				</div>
				<!-- /dynamic pagination title -->


				<!-- Dynamic pagination layouts -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Basic example</h6>
							<p class="mb-3 text-muted">Basic example with default options</p>

							<div class="card card-body bg-light mb-3 twbs-content-default">Dynamic content here.</div>
							<ul class="justify-content-center twbs-default"></ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Flat pagination layout</h6>
							<p class="mb-3 text-muted">Example with <code>flat</code> pagination</p>

							<div class="card card-body bg-light mb-3 twbs-content-flat">Dynamic content here.</div>
							<ul class="pagination-flat justify-content-center twbs-flat"></ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Separated pagination</h6>
							<p class="mb-3 text-muted">Example with <code>separated</code> pagination</p>

							<div class="card card-body bg-light mb-3 twbs-content-separated">Dynamic content here.</div>
							<ul class="pagination-separated justify-content-center twbs-separated"></ul>
						</div>
					</div>
				</div>
				<!-- /dynamic pagination layouts -->


				<!-- Dynamic pagination options -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Prev/Next buttons</h6>
							<p class="mb-3 text-muted">Configurable buttons text</p>

							<div class="card card-body bg-light mb-3 twbs-content-prev-next">Dynamic content here.</div>
							<ul class="pagination-flat justify-content-center twbs-prev-next"></ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Set starting page</h6>
							<p class="mb-3 text-muted">Specify page to show on start</p>

							<div class="card card-body bg-light mb-3 twbs-content-page-start">Dynamic content here.</div>
							<ul class="pagination-flat justify-content-center twbs-page-start"></ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink text-center">
							<h6 class="m-0 font-weight-semibold">Visible pages</h6>
							<p class="mb-3 text-muted">Display visible amount of pages</p>

							<div class="card card-body bg-light mb-3 twbs-content-visible-pages">Dynamic content here.</div>
							<ul class="pagination-flat justify-content-center twbs-visible-pages"></ul>
						</div>
					</div>
				</div>
				<!-- /dynamic pagination options -->

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
