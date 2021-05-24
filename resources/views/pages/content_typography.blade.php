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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Content</span> - Typography</h4>
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
							<a href="content_typography" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Typography</span>
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

				<!-- Default headings -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Heading styles
					</h6>
					<span class="text-muted d-block">Default heading sizes and font weights</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title font-weight-thin">Thin headings</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
			                	<div class="mb-3">
				                    <h1 class="mb-0 font-weight-thin">H1 Heading <small class="font-weight-thin ml-1">Thin 25px</small></h1>
			                    </div>

			                    <div class="mb-3">
				                    <h2 class="mb-0 font-weight-thin">H2 Heading <small class="font-weight-thin ml-1">Thin 23px</small></h2>
			                    </div>

			                    <div class="mb-3">
				                    <h3 class="mb-0 font-weight-thin">H3 Heading <small class="font-weight-thin ml-1">Thin 21px</small></h3>
			                    </div>

			                    <div class="mb-3">
				                    <h4 class="mb-0 font-weight-thin">H4 Heading  <small class="font-weight-thin ml-1">Thin 19px</small></h4>
			                    </div>

			                    <div class="mb-3">
				                    <h5 class="mb-0 font-weight-thin">H5 Heading <small class="font-weight-thin ml-1">Thin 17px</small></h5>
			                    </div>

			                    <div class="mb-1">
				                    <h6 class="mb-0 font-weight-thin">H6 Heading <small class="font-weight-thin ml-1">Thin 15px</small></h6>
			                    </div>
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title font-weight-semibold">Semibold headings</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
			                	<div class="mb-3">
				                    <h1 class="mb-0 font-weight-semibold">H1 Heading <small class="font-weight-semibold ml-1">Semibold 25px</small></h1>
			                    </div>

			                    <div class="mb-3">
				                    <h2 class="mb-0 font-weight-semibold">H2 Heading <small class="font-weight-semibold ml-1">Semibold 23px</small></h2>
			                    </div>

			                    <div class="mb-3">
				                    <h3 class="mb-0 font-weight-semibold">H3 Heading <small class="font-weight-semibold ml-1">Semibold 21px</small></h3>
			                    </div>

			                    <div class="mb-3">
				                    <h4 class="mb-0 font-weight-semibold">H4 Heading  <small class="font-weight-semibold ml-1">Semibold 19px</small></h4>
			                    </div>

			                    <div class="mb-3">
				                    <h5 class="mb-0 font-weight-semibold">H5 Heading <small class="font-weight-semibold ml-1">Semibold 17px</small></h5>
			                    </div>

			                    <div class="mb-1">
				                    <h6 class="mb-0 font-weight-semibold">H6 Heading <small class="font-weight-semibold ml-1">Semibold 15px</small></h6>
			                    </div>
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title font-weight-light">Light headings</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
			                	<div class="mb-3">
				                    <h1 class="mb-0 font-weight-light">H1 Heading <small class="font-weight-light ml-1">Light 25px</small></h1>
			                    </div>

			                    <div class="mb-3">
				                    <h2 class="mb-0 font-weight-light">H2 Heading <small class="font-weight-light ml-1">Light 23px</small></h2>
			                    </div>

			                    <div class="mb-3">
				                    <h3 class="mb-0 font-weight-light">H3 Heading <small class="font-weight-light ml-1">Light 21px</small></h3>
			                    </div>

			                    <div class="mb-3">
				                    <h4 class="mb-0 font-weight-light">H4 Heading  <small class="font-weight-light ml-1">Light 19px</small></h4>
			                    </div>

			                    <div class="mb-3">
				                    <h5 class="mb-0 font-weight-light">H5 Heading <small class="font-weight-light ml-1">Light 17px</small></h5>
			                    </div>

			                    <div class="mb-1">
				                    <h6 class="mb-0 font-weight-light">H6 Heading <small class="font-weight-light ml-1">Light 15px</small></h6>
			                    </div>
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title font-weight-bold">Semibold headings</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
			                	<div class="mb-3">
				                    <h1 class="mb-0 font-weight-bold">H1 Heading <small class="font-weight-bold ml-1">Bold 25px</small></h1>
			                    </div>

			                    <div class="mb-3">
				                    <h2 class="mb-0 font-weight-bold">H2 Heading <small class="font-weight-bold ml-1">Bold 23px</small></h2>
			                    </div>

			                    <div class="mb-3">
				                    <h3 class="mb-0 font-weight-bold">H3 Heading <small class="font-weight-bold ml-1">Bold 21px</small></h3>
			                    </div>

			                    <div class="mb-3">
				                    <h4 class="mb-0 font-weight-bold">H4 Heading  <small class="font-weight-bold ml-1">Bold 19px</small></h4>
			                    </div>

			                    <div class="mb-3">
				                    <h5 class="mb-0 font-weight-bold">H5 Heading <small class="font-weight-bold ml-1">Bold 17px</small></h5>
			                    </div>

			                    <div class="mb-1">
				                    <h6 class="mb-0 font-weight-bold">H6 Heading <small class="font-weight-bold ml-1">Bold 15px</small></h6>
			                    </div>
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Regular headings</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
			                	<div class="mb-3">
				                    <h1 class="mb-0">H1 Heading <small class="ml-1">Regular 25px</small></h1>
			                    </div>

			                    <div class="mb-3">
				                    <h2 class="mb-0">H2 Heading <small class="ml-1">Regular 23px</small></h2>
			                    </div>

			                    <div class="mb-3">
				                    <h3 class="mb-0">H3 Heading <small class="ml-1">Regular 21px</small></h3>
			                    </div>

			                    <div class="mb-3">
				                    <h4 class="mb-0">H4 Heading  <small class="ml-1">Regular 19px</small></h4>
			                    </div>

			                    <div class="mb-3">
				                    <h5 class="mb-0">H5 Heading <small class="ml-1">Regular 17px</small></h5>
			                    </div>

			                    <div class="mb-1">
				                    <h6 class="mb-0">H6 Heading <small class="ml-1">Regular 15px</small></h6>
			                    </div>
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title font-weight-black">Black headings</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
			                	<div class="mb-3">
				                    <h1 class="mb-0 font-weight-black">H1 Heading <small class="font-weight-black ml-1">Black 25px</small></h1>
			                    </div>

			                    <div class="mb-3">
				                    <h2 class="mb-0 font-weight-black">H2 Heading <small class="font-weight-black ml-1">Black 23px</small></h2>
			                    </div>

			                    <div class="mb-3">
				                    <h3 class="mb-0 font-weight-black">H3 Heading <small class="font-weight-black ml-1">Black 21px</small></h3>
			                    </div>

			                    <div class="mb-3">
				                    <h4 class="mb-0 font-weight-black">H4 Heading  <small class="font-weight-black ml-1">Black 19px</small></h4>
			                    </div>

			                    <div class="mb-3">
				                    <h5 class="mb-0 font-weight-black">H5 Heading <small class="font-weight-black ml-1">Black 17px</small></h5>
			                    </div>

			                    <div class="mb-1">
				                    <h6 class="mb-0 font-weight-black">H6 Heading <small class="font-weight-black ml-1">Black 15px</small></h6>
			                    </div>
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /default headings -->


				<!-- Heading icons -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Heading elements
					</h6>
					<span class="text-muted d-block">Optional icons, labels and badges</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header header-elements-inline bg-white">
								<h6 class="card-title">Left heading icon</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
			                    <h6 class="mb-0">
				                    <i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Left</span> icon
				                    <span class="font-size-base text-muted d-block">Left positioned heading icon</span>
			                    </h6>
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header header-elements-inline bg-white">
								<h6 class="card-title">Right inline icon</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
			                    <h6 class="mb-0">
				                    <span class="font-weight-semibold">Right</span> inline icon <i class="icon-arrow-right6 ml-2"></i> 
				                    <span class="font-size-base text-muted d-block">Right inline icon position</span>
			                    </h6>
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header header-elements-inline bg-white">
								<h6 class="card-title">Right floating icon</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
			                    <h6 class="mb-0">
				                    <span class="font-weight-semibold">Right</span> floating icon <i class="icon-cog3 float-right"></i> 
				                    <span class="font-size-base text-muted d-block">Right floating icon</span>
			                    </h6>
		                    </div>
			            </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header header-elements-inline bg-white">
								<h6 class="card-title">Left heading label</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
			                    <h6 class="mb-0">
				                    <span class="badge badge-info mr-2">New</span> <span class="font-weight-semibold">Left</span> badge
				                    <span class="font-size-base text-muted d-block">Left positioned heading label</span>
			                    </h6>
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header header-elements-inline bg-white">
								<h6 class="card-title">Right inline badge</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
			                    <h6 class="mb-0">
				                    <span class="font-weight-semibold">Right</span> badge <span class="badge badge-danger ml-2">Bug</span>
				                    <span class="font-size-base text-muted d-block">Right inline heading badge</span>
			                    </h6>
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header header-elements-inline bg-white">
								<h6 class="card-title">Right floating badge</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
			                    <h6 class="mb-0">
				                    <span class="font-weight-semibold">Right</span> floating badge <span class="badge badge-success float-right">Fixed</span>
				                    <span class="font-size-base text-muted d-block">Right floating heading badge</span>
			                    </h6>
		                    </div>
			            </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header header-elements-inline bg-white">
								<h6 class="card-title">Left heading pill badge</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
			                    <h6 class="mb-0">
				                    <span class="badge badge-warning badge-pill mr-2">48</span> <span class="font-weight-semibold">Left</span> pill badge
				                    <span class="font-size-base text-muted d-block">Left positioned heading badge</span>
			                    </h6>
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header header-elements-inline bg-white">
								<h6 class="card-title">Right inline pill badge</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
			                    <h6 class="mb-0">
				                    <span class="font-weight-semibold">Right</span> pill badge <span class="badge badge-success badge-pill ml-2">93</span>
				                    <span class="font-size-base text-muted d-block">Right inline heading pill badge</span>
			                    </h6>
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header header-elements-inline bg-white">
								<h6 class="card-title">Right floating pill badge</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
			                    <h6 class="mb-0">
				                    <span class="font-weight-semibold">Right</span> floating pill badge <span class="badge badge-primary badge-pill float-right">37</span>
				                    <span class="font-size-base text-muted d-block">Right floating heading pill badge</span>
			                    </h6>
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /heading icons -->


				<!-- List options -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						List options
					</h6>
					<span class="text-muted d-block">Basic list examples with optional classes</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Default unordered list</h6>
								<p class="mb-3 text-muted">Default unordered list using <code>.list</code> class</p>
							</div>
							
							<div class="card card-body bg-light mb-0">
			                    <ul class="list mb-0">
									<li>Lorem ipsum dolor sit amet</li>
									<li>Nulla volutpat aliquam velit
										<ul class="list">
											<li>Phasellus iaculis neque</li>
											<li>Purus sodales ultricies</li>
										</ul>
									</li>
									<li>Faucibus porta lacus fringilla vel</li>
									<li>Aenean sit amet erat nunc</li>
								</ul>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Unstyled list</h6>
								<p class="mb-3 text-muted">Unstyled list using <code>.list-unstyled</code> class</p>
							</div>
							
							<div class="card card-body bg-light mb-0">
			                    <ul class="list list-unstyled mb-0">
									<li>Lorem ipsum dolor sit amet</li>
									<li>Nulla volutpat aliquam velit
										<ul class="list">
											<li>Phasellus iaculis neque</li>
											<li>Purus sodales ultricies</li>
										</ul>
									</li>
									<li>Faucibus porta lacus fringilla vel</li>
									<li>Aenean sit amet erat nunc</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Square list type</h6>
								<p class="mb-3 text-muted">Square list style using <code>.list-square</code> class</p>
							</div>
							
							<div class="card card-body bg-light mb-0">
			                    <ul class="list list-square mb-0">
									<li>Lorem ipsum dolor sit amet</li>
									<li>Nulla volutpat aliquam velit
										<ul class="list list-square">
											<li>Phasellus iaculis neque</li>
											<li>Purus sodales ultricies</li>
										</ul>
									</li>
									<li>Faucibus porta lacus fringilla vel</li>
									<li>Aenean sit amet erat nunc</li>
								</ul>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Default ordered list</h6>
								<p class="mb-3 text-muted">Default ordered list using <code>.list</code> class</p>
							</div>
							
							<div class="card card-body bg-light mb-0">
			                    <ol class="list mb-0">
									<li>Lorem ipsum dolor sit amet</li>
									<li>Nulla volutpat aliquam velit
										<ol class="list">
											<li>Phasellus iaculis neque</li>
											<li>Purus sodales ultricies</li>
										</ol>
									</li>
									<li>Faucibus porta lacus fringilla vel</li>
									<li>Aenean sit amet erat nunc</li>
								</ol>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Circle list type</h6>
								<p class="mb-3 text-muted">Circle list style using <code>.list-circle</code> class</p>
							</div>
							
							<div class="card card-body bg-light mb-0">
			                    <ul class="list list-circle mb-0">
									<li>Lorem ipsum dolor sit amet</li>
									<li>Nulla volutpat aliquam velit
										<ul class="list">
											<li>Phasellus iaculis neque</li>
											<li>Purus sodales ultricies</li>
										</ul>
									</li>
									<li>Faucibus porta lacus fringilla vel</li>
									<li>Aenean sit amet erat nunc</li>
								</ul>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">List with icons</h6>
								<p class="mb-3 text-muted">List with icons using <code>.list-unstyled</code> class</p>
							</div>
							
							<div class="card card-body bg-light mb-0">
			                    <ul class="list list-unstyled mb-0">
									<li><i class="icon-screen-full mr-2"></i> Lorem ipsum dolor sit amet</li>
									<li><i class="icon-screen-normal mr-2"></i> Nulla volutpat aliquam velit
										<ul class="list list-unstyled pl-4">
											<li><i class="icon-cog5 mr-2"></i> Phasellus iaculis neque</li>
											<li><i class="icon-mention mr-2"></i> Purus sodales ultricies</li>
										</ul>
									</li>
									<li><i class="icon-law mr-2"></i> Faucibus porta lacus fringilla vel</li>
									<li><i class="icon-plus22 mr-2"></i> Aenean sit amet erat nunc</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /list options -->


				<!-- List sizing -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						List vertical sizing
					</h6>
					<span class="text-muted d-block">List item vertical sizing options</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Default list size</h6>
								<p class="mb-3 text-muted">Default list doesn't have item spacing</p>
							</div>
							
							<div class="card card-body bg-light mb-0">
			                    <ul class="mb-0">
									<li>Lorem ipsum dolor sit amet</li>
									<li>Nulla volutpat aliquam velit
										<ul>
											<li>Phasellus iaculis neque</li>
											<li>Purus sodales ultricies</li>
										</ul>
									</li>
									<li>Faucibus porta lacus fringilla vel</li>
									<li>Aenean sit amet erat nunc</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Custom list spacing</h6>
								<p class="mb-3 text-muted">Add some spacing using <code>.list</code> class</p>
							</div>
							
							<div class="card card-body bg-light mb-0">
			                    <ul class="list mb-0">
									<li>Lorem ipsum dolor sit amet</li>
									<li>Nulla volutpat aliquam velit
										<ul class="list">
											<li>Phasellus iaculis neque</li>
											<li>Purus sodales ultricies</li>
										</ul>
									</li>
									<li>Faucibus porta lacus fringilla vel</li>
									<li>Aenean sit amet erat nunc</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Extended list</h6>
								<p class="mb-3 text-muted">Extended list using <code>.list-extended</code> class</p>
							</div>
							
							<div class="card card-body bg-light mb-0">
			                    <ul class="list list-extended mb-0">
									<li>Lorem ipsum dolor sit amet</li>
									<li>Nulla volutpat aliquam velit
										<ul class="list list-extended">
											<li>Phasellus iaculis neque</li>
											<li>Purus sodales ultricies</li>
										</ul>
									</li>
									<li>Faucibus porta lacus fringilla vel</li>
									<li>Aenean sit amet erat nunc</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /list sizing -->


				<!-- Inline lists -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Inline lists
					</h6>
					<span class="text-muted d-block">Inline list style options</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Default inline list</h6>
								<p class="mb-3 text-muted">Inline list using <code>.list-inline</code> class</p>
							</div>
							
							<div class="card card-body bg-light mb-0 text-center">
			                    <ul class="list-inline mb-0">
									<li class="list-inline-item">1. First item</li>
									<li class="list-inline-item">2. Second item</li>
									<li class="list-inline-item">3. Third item</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Condensed inline list</h6>
								<p class="mb-3 text-muted">Using <code>.list-inline-condensed</code> class</p>
							</div>
							
							<div class="card card-body bg-light mb-0 text-center">
			                    <ul class="list-inline list-inline-condensed mb-0">
									<li class="list-inline-item">1. First item</li>
									<li class="list-inline-item">2. Second item</li>
									<li class="list-inline-item">3. Third item</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Separated inline list</h6>
								<p class="mb-3 text-muted">Using <code>.list-inline-separate</code> class</p>
							</div>
							
							<div class="card card-body bg-light mb-0 text-center">
			                    <ul class="list-inline list-inline-dotted mb-0">
									<li class="list-inline-item">First item</li>
									<li class="list-inline-item">Second item</li>
									<li class="list-inline-item">Third item</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /inline lists -->


				<!-- Description lists -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Description lists
					</h6>
					<span class="text-muted d-block">Vertical and horizontal description lists</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card card-body border-top-1 border-top-primary">
							<h6 class="mb-0 font-weight-semibold">Vertical description list</h6>
							<p class="mb-3 text-muted">Vertical list of terms with their associated descriptions.</p>
							
							<div class="card card-body bg-light mb-0">
			                    <dl class="mb-0">
									<dt>Description lists</dt>
									<dd>A description list is perfect for defining terms.</dd>

									<dt>Euismod</dt>
									<dd>
										Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
										<br>
										Donec id elit non mi porta gravida at eget metus.
									</dd>

									<dt>Malesuada porta</dt>
									<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
								</dl>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card card-body border-top-1 border-top-primary">
							<h6 class="mb-0 font-weight-semibold">Horizontal description list</h6>
							<p class="mb-3 text-muted">Horizontal list of terms with their associated descriptions.</p>
							
							<div class="card card-body bg-light mb-0">
								<dl class="row mb-0">
									<dt class="col-sm-3">Description lists</dt>
									<dd class="col-sm-9">A description list is perfect for defining terms.</dd>

									<dt class="col-sm-3">Euismod</dt>
									<dd class="col-sm-9">
										Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
									</dd>

									<dt class="col-sm-3">Malesuada porta</dt>
									<dd class="col-sm-9">
										Etiam porta sem malesuada magna mollis euismod.
									</dd>

									<dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
									<dd class="col-sm-9">
										Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
									</dd>

									<dt class="col-sm-3">Nesting</dt>
									<dd class="col-sm-9">
										<dl class="row">
											<dt class="col-sm-4">Nested definition list</dt>
											<dd class="col-sm-8">Aenean posuere tortor</dd>
										</dl>
									</dd>
								</dl>
							</div>
						</div>
					</div>
				</div>
				<!-- /description lists -->


				<!-- Blockquotes -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Blockquote styling
					</h6>
					<span class="text-muted d-block">Borders, icons and images</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card card-body border-top-1 border-top-danger">
							<h6 class="mb-0 font-weight-semibold">Left border</h6>
							<p class="mb-3 text-muted">Display optional left border</p>
							
							<hr class="mt-0">

		                    <blockquote class="blockquote blockquote-bordered py-2 pl-3 mb-0">
								<p class="mb-1">Paid a cobra along or the sloth dear much eagle gosh from disagreeably lethargic before.</p>
								<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<h6 class="mb-0 font-weight-semibold">Left aligned image</h6>
							<p class="mb-3 text-muted">Blockquote with optional left image</p>
							
							<hr class="mt-0">

		                    <blockquote class="blockquote d-flex py-2 mb-0">
		                    	<div class="mr-3">
			                    	<img class="rounded-circle" src="../../../../global_assets/images/placeholders/placeholder.jpg" width="46" height="46" alt="">
		                    	</div>

		                    	<div>
									<p class="mb-1">Dear far dove lynx inaudibly between after under after on some far warthog.</p>
									<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
								</div>
							</blockquote>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<h6 class="mb-0 font-weight-semibold">Left aligned icon</h6>
							<p class="mb-3 text-muted">Add optional left icon using flex utilities</p>
							
							<hr class="mt-0">

		                    <blockquote class="blockquote d-flex py-2 mb-0">
		                    	<div class="mr-3 align-self-start">
			                    	<i class="icon-comment-discussion icon-3x text-muted opacity-25"></i>
		                    	</div>

		                    	<div>
									<p class="mb-1">Paid a cobra along or the sloth dear much eagle gosh from disagreeably lethargic before.</p>
									<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
								</div>
							</blockquote>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
		                    <blockquote class="blockquote text-center py-2 mb-0">
		                    	<div class="mb-3">
			                    	<img class="rounded-circle" src="../../../../global_assets/images/placeholders/placeholder.jpg" width="46" height="46" alt="">
		                    	</div>

								<p class="mb-1">Well hey as seagull more and staunchly uniquely much less alas delicate much checked.</p>
								<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card card-body border-top-1 border-top-danger">
							<h6 class="mb-0 font-weight-semibold">Right border</h6>
							<p class="mb-3 text-muted">Display optional right border</p>
							
							<hr class="mt-0">

		                    <blockquote class="blockquote blockquote-bordered blockquote-bordered-reverse py-2 pr-3 mb-0">
								<p class="mb-1">Or a more far thought close mammoth that so one bee more fidgeted checked and written.</p>
								<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<h6 class="mb-0 font-weight-semibold">Right aligned image</h6>
							<p class="mb-3 text-muted">Blockquote with optional right image</p>
							
							<hr class="mt-0">

		                    <blockquote class="blockquote d-flex py-2 mb-0">
		                    	<div class="mr-auto">
									<p class="mb-1">Well hey as seagull more and staunchly uniquely much less alas delicate much checked.</p>
									<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
								</div>

		                    	<div class="ml-3">
			                    	<img class="rounded-circle" src="../../../../global_assets/images/placeholders/placeholder.jpg" width="46" height="46" alt="">
		                    	</div>
							</blockquote>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<h6 class="mb-0 font-weight-semibold">Right aligned image</h6>
							<p class="mb-3 text-muted">Add optional right icon using flex utilities</p>
							
							<hr class="mt-0">

		                    <blockquote class="blockquote d-flex py-2 mb-0">
		                    	<div class="mr-auto">
									<p class="mb-1">Or a more far thought close mammoth that so one bee more fidgeted checked and written.</p>
									<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
								</div>

		                    	<div class="ml-3 align-self-start">
			                    	<i class="icon-comment-discussion icon-3x text-muted opacity-25"></i>
		                    	</div>
							</blockquote>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
		                    <blockquote class="blockquote text-center py-2 mb-0">
		                    	<div class="mb-3">
			                    	<i class="icon-comment-discussion icon-3x text-muted opacity-25"></i>
		                    	</div>

								<p class="mb-1">Well hey as seagull more and staunchly uniquely much less alas delicate much checked.</p>
								<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
						</div>
					</div>
				</div>
				<!-- /blockquotes -->

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
