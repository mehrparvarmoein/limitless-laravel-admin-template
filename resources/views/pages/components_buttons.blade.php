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
	<script src="../../../../global_assets/js/plugins/buttons/spin.min.js"></script>
	<script src="../../../../global_assets/js/plugins/buttons/ladda.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/components_buttons.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Components</span> - Buttons</h4>
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
							<a href="components_buttons" class="breadcrumb-item">Components</a>
							<span class="breadcrumb-item active">Buttons</span>
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

				<!-- Basic button layouts title -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Default button layouts
					</h6>
					<span class="text-muted d-block">Basic button layout options</span>
				</div>
				<!-- /basic button layouts title -->


				<!-- Default button -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Default button</h6>
								<p class="text-muted mb-3">Default light button example</p>

		                    	<button type="button" class="btn btn-light">Default button</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Default with icon</h6>
								<p class="text-muted mb-3">Available in both directions</p>

		                    	<button type="button" class="btn btn-light"><i class="icon-make-group mr-2"></i> With icon</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Default with menu</h6>
								<p class="text-muted mb-3">Default button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Dropdown</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /default button -->


				<!-- Colored button -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Colored button</h6>
								<p class="text-muted mb-3">Default 8 contextual colors</p>

		                    	<button type="button" class="btn btn-primary">Default button</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Colored with icon</h6>
								<p class="text-muted mb-3">Available in both directions</p>

		                    	<button type="button" class="btn btn-primary"><i class="icon-cog3 mr-2"></i> With icon</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Colored with menu</h6>
								<p class="text-muted mb-3">Colored button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /colored button -->


				<!-- Rounded button -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Rounded button</h6>
								<p class="text-muted mb-3">Works with all button types</p>

		                    	<button type="button" class="btn btn-danger rounded-round">Rounded button</button>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Rounded with icon</h6>
								<p class="text-muted mb-3">Available in both directions</p>

		                    	<button type="button" class="btn btn-danger rounded-round"><i class="icon-help mr-2"></i> With icon</button>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Rounded with menu</h6>
								<p class="text-muted mb-3">Rounded button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-danger rounded-round dropdown-toggle" data-toggle="dropdown">Dropdown</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /rounded button -->


				<!-- Labeled button -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Labeled button</h6>
								<p class="text-muted mb-3">Works with all button colors</p>

		                    	<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left"><b><i class="icon-reading"></i></b> Labeled</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Rounded with label</h6>
								<p class="text-muted mb-3">Available in both directions</p>

		                    	<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round"><b><i class="icon-reading"></i></b> Rounded</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Labeled with menu</h6>
								<p class="text-muted mb-3">Labeled button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left dropdown-toggle" data-toggle="dropdown"><b><i class="icon-reading"></i></b> Dropdown</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /labeled button -->


				<!-- Linked button -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Linked button</h6>
								<p class="text-muted mb-3">Transparent button example</p>

		                    	<button type="button" class="btn btn-link">Linked button</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Linked with icon</h6>
								<p class="text-muted mb-3">Available in both directions</p>

		                    	<button type="button" class="btn btn-link"><i class="icon-comment-discussion mr-2"></i> With icon</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Linked with menu</h6>
								<p class="text-muted mb-3">Linked button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">Dropdown </button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /linked button -->



				<!-- Basic button layouts title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Outline buttons
					</h6>
					<span class="text-muted d-block">Outline button layout and options</span>
				</div>
				<!-- /basic button layouts title -->


				<!-- Outline button (default colors) -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Default colors</h6>
								<p class="text-muted mb-3">Default 8 contextual colors</p>

		                    	<button type="button" class="btn btn-outline-primary">Hoverable</button>
		                    	<button type="button" class="btn bg-transparent text-primary border-primary ml-1">Static</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Default colors with icon</h6>
								<p class="text-muted mb-3">Available in both directions</p>

		                    	<button type="button" class="btn btn-outline-danger"><i class="icon-cog3 mr-2"></i> Hoverable</button>
		                    	<button type="button" class="btn bg-transparent text-danger border-danger ml-1"><i class="icon-cog3 mr-2"></i> Static</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Default colors with menu</h6>
								<p class="text-muted mb-3">Outline button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">Hoverable</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>

								<div class="btn-group ml-1">
			                    	<button type="button" class="btn bg-transparent text-success border-success dropdown-toggle" data-toggle="dropdown">Static</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /outline button (default colors) -->


				<!-- Outline button (custom colors) -->
				<div class="font-size-sm text-uppercase font-weight-semibold mb-2 mt-1">Custom colors</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Custom colors</h6>
								<p class="text-muted mb-3">Available in all custom colors</p>

		                    	<button type="button" class="btn btn-outline bg-indigo-400 text-indigo-400 border-indigo-400">Hoverable</button>
		                    	<button type="button" class="btn bg-transparent text-indigo-400 border-indigo-400 ml-1">Static</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Custom colors with icon</h6>
								<p class="text-muted mb-3">Available in both directions</p>

		                    	<button type="button" class="btn btn-outline bg-pink-400 text-pink-400 border-pink-400"><i class="icon-cog3 mr-2"></i> Hoverable</button>
		                    	<button type="button" class="btn bg-transparent text-pink-400 border-pink-400 ml-1"><i class="icon-cog3 mr-2"></i> Static</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Custom colors with menu</h6>
								<p class="text-muted mb-3">Outline button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-outline bg-slate-600 text-slate-600 border-slate dropdown-toggle" data-toggle="dropdown">Hoverable</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>

								<div class="btn-group ml-1">
			                    	<button type="button" class="btn bg-transparent text-slate-600 border-slate dropdown-toggle" data-toggle="dropdown">Static</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
	                    	</div>
						</div>
					</div>
				</div>
				<!-- /outline button (custom colors) -->


				<!-- Border options -->
				<div class="font-size-sm text-uppercase font-weight-semibold mb-2 mt-1">Border options</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Transparent border</h6>
								<p class="text-muted mb-3">Using <code>.border-transparent</code> class</p>

		                    	<button type="button" class="btn btn-outline-primary border-transparent">Transparent border</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Thin border</h6>
								<p class="text-muted mb-3">Default <code>1px</code> border width</p>

		                    	<button type="button" class="btn btn-outline bg-slate-600 text-slate-600 border-slate-600">Thin border</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Thick border</h6>
								<p class="text-muted mb-3">Using <code>.border-2</code> class</p>

		                    	<button type="button" class="btn btn-outline bg-teal-400 text-teal-400 border-teal-400 border-2">Thick border</button>
	                    	</div>
						</div>
					</div>
				</div>
				<!-- /border options -->


				<!-- Alpha backgrounds -->
				<div class="font-size-sm text-uppercase font-weight-semibold mb-2 mt-1">Alpha backgrounds</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Transparent border</h6>
								<p class="text-muted mb-3">Default option without border color</p>

		                    	<button type="button" class="btn btn-outline alpha-purple text-purple-800">Transparent border</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Alpha with border</h6>
								<p class="text-muted mb-3">Both <code>thin</code> and <code>thick</code> borders</p>

		                    	<button type="button" class="btn btn-outline alpha-success text-success-800 border-success-600">Alpha bordered</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Alpha static</h6>
								<p class="text-muted mb-3">No hover/active state changes</p>

		                    	<button type="button" class="btn alpha-blue text-blue-800 border-blue-600">Alpha static</button>
	                    	</div>
						</div>
					</div>
				</div>
				<!-- /alpha backgrounds -->



				<!-- Icon buttons title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Icon buttons
					</h6>
					<span class="text-muted d-block">Buttons with icon only</span>
				</div>
				<!-- /icon buttons title -->


				<!-- Icon button -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Single icon button</h6>
								<p class="text-muted mb-3">Button with a single icon only</p>

		                    	<button type="button" class="btn btn-primary btn-icon"><i class="icon-link"></i></button>
		                    	<button type="button" class="btn alpha-primary text-primary-800 btn-icon ml-2"><i class="icon-link"></i></button>
		                    	<button type="button" class="btn btn-outline bg-primary text-primary-800 btn-icon ml-2"><i class="icon-link"></i></button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Rounded icon button</h6>
								<p class="text-muted mb-3">Works with <code>all</code> button types</p>

		                    	<button type="button" class="btn bg-pink-400 btn-icon rounded-round"><i class="icon-link"></i></button>
		                    	<button type="button" class="btn alpha-pink text-pink-800 btn-icon rounded-round ml-2"><i class="icon-link"></i></button>
		                    	<button type="button" class="btn btn-outline bg-pink-400 text-pink-800 btn-icon rounded-round ml-2"><i class="icon-link"></i></button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Icon with menu</h6>
								<p class="text-muted mb-3">Icon button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn bg-purple-300 btn-icon dropdown-toggle" data-toggle="dropdown">
				                    	<i class="icon-link"></i>
			                    	</button>

			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>

								<div class="btn-group ml-1">
			                    	<button type="button" class="btn alpha-purple text-purple-800 btn-icon dropdown-toggle" data-toggle="dropdown">
				                    	<i class="icon-link"></i>
			                    	</button>

			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>

								<div class="btn-group ml-1">
			                    	<button type="button" class="btn btn-outline bg-purple-300 text-purple-800 btn-icon dropdown-toggle" data-toggle="dropdown">
				                    	<i class="icon-link"></i>
			                    	</button>

			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /icon button -->


				<!-- Outline icon button -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Single icon button</h6>
								<p class="text-muted mb-3">Button with a single icon only</p>

		                    	<button type="button" class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon"><i class="icon-pin-alt"></i></button>
		                    	<button type="button" class="btn alpha-primary border-primary text-primary-800 btn-icon ml-2"><i class="icon-pin-alt"></i></button>
		                    	<button type="button" class="btn btn-outline bg-primary border-primary text-primary-800 btn-icon border-2 ml-2"><i class="icon-pin-alt"></i></button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Rounded icon button</h6>
								<p class="text-muted mb-3">Works with <code>all</code> button types</p>

		                    	<button type="button" class="btn btn-outline bg-pink-400 border-pink-400 text-pink-800 btn-icon rounded-round"><i class="icon-pin-alt"></i></button>
		                    	<button type="button" class="btn alpha-pink border-pink-400 text-pink-800 btn-icon rounded-round ml-2"><i class="icon-pin-alt"></i></button>
		                    	<button type="button" class="btn btn-outline bg-pink-400 border-pink-400 text-pink-800 btn-icon rounded-round border-2 ml-2"><i class="icon-pin-alt"></i></button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Icon with menu</h6>
								<p class="text-muted mb-3">Icon button with dropdown</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-outline bg-purple-300 border-purple-300 text-purple-800 btn-icon dropdown-toggle" data-toggle="dropdown">
				                    	<i class="icon-link"></i>
			                    	</button>

			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>

								<div class="btn-group ml-1">
			                    	<button type="button" class="btn alpha-purple border-purple-300 text-purple-800 btn-icon dropdown-toggle" data-toggle="dropdown">
				                    	<i class="icon-link"></i>
			                    	</button>

			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>

								<div class="btn-group ml-1">
			                    	<button type="button" class="btn btn-outline bg-purple-300 border-purple-300 text-purple-800 btn-icon border-2 dropdown-toggle" data-toggle="dropdown">
				                    	<i class="icon-link"></i>
			                    	</button>

			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /outline icon button -->


				<!-- Floating buttons -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Floating button</h6>
								<p class="text-muted mb-3">Floating action button example</p>

		                        <button type="button" class="btn bg-success-400 btn-float"><i class="icon-search4"></i></button>
		                        <button type="button" class="btn btn-danger btn-float"><i class="icon-air icon-2x"></i></button>
		                        <button type="button" class="btn bg-indigo-400 btn-float"><i class="icon-spinner4 spinner"></i></button>
	                        </div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Floating with text</h6>
								<p class="text-muted mb-3">Float buttons with text and icons</p>

		                        <button type="button" class="btn bg-success-400 btn-float"><i class="icon-search4"></i> <span>Search</span></button>
		                        <button type="button" class="btn btn-danger btn-float"><i class="icon-html52 icon-2x"></i> <span>Download</span></button>
		                        <button type="button" class="btn bg-indigo-400 btn-float"><i class="icon-spinner4 spinner"></i> <span>Update</span></button>
	                        </div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Rounded floating buttons</h6>
								<p class="text-muted mb-3">Rounded floating buttons with icons</p>

		                        <button type="button" class="btn bg-success-400 btn-float rounded-round"><i class="icon-search4"></i></button>
		                        <button type="button" class="btn btn-danger btn-float rounded-round"><i class="icon-pin-alt icon-2x"></i></button>
		                        <button type="button" class="btn bg-indigo-400 btn-float rounded-round"><i class="icon-spinner4 spinner"></i></button>
	                        </div>
						</div>
					</div>
				</div>
				<!-- /floating buttons -->



				<!-- Button sizes and colors title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Button styling
					</h6>
					<span class="text-muted d-block">Predefined button colors and sizing</span>
				</div>
				<!-- /button sizes and colors title -->


				<!-- Button sizes -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Default button sizes</h6>
								<p class="text-muted mb-3">Available sizes of <code>default</code> buttons</p>

		                    	<p><button type="button" class="btn btn-primary btn-lg"><i class="icon-comment-discussion mr-2"></i> Large size</button></p>
		                    	<p><button type="button" class="btn btn-danger"><i class="icon-comment-discussion mr-2"></i> Default size</button></p>
		                    	<p><button type="button" class="btn btn-success btn-sm"><i class="icon-comment-discussion mr-2"></i> Small size</button></p>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Labeled button sizes</h6>
								<p class="text-muted mb-3">Available sizes of <code>labeled</code> buttons</p>

		                    	<p><button type="button" class="btn btn-primary btn-labeled btn-labeled-left btn-lg"><b><i class="icon-pin-alt"></i></b> Large size</button></p>
		                    	<p><button type="button" class="btn btn-danger btn-labeled btn-labeled-left"><b><i class="icon-pin-alt"></i></b> Default size</button></p>
		                    	<p><button type="button" class="btn btn-success btn-labeled btn-labeled-left btn-sm"><b><i class="icon-pin-alt"></i></b> Small size</button></p>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Outline button sizes</h6>
								<p class="text-muted mb-3">Available sizes of <code>outline</code> buttons</p>

		                    	<p><button type="button" class="btn btn-outline-primary btn-lg"><i class="icon-mention mr-2"></i> Large size</button></p>
		                    	<p><button type="button" class="btn btn-outline-danger"><i class="icon-mention mr-2"></i> Default size</button></p>
		                    	<p><button type="button" class="btn btn-outline-success btn-sm"><i class="icon-mention mr-2"></i> Small size</button></p>
	                    	</div>
						</div>
					</div>
				</div>
				<!-- /button sizes -->


				<!-- Icon positions -->
				<div class="font-size-sm text-uppercase font-weight-semibold mb-2 mt-1">Icon positions</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Left icon position</h6>
								<p class="text-muted mb-3">Display icon on the left side</p>

		                    	<button type="button" class="btn bg-brown"><i class="icon-menu7 mr-2"></i> Left position</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Right icon position</h6>
								<p class="text-muted mb-3">Display icon on the right side</p>

		                    	<button type="button" class="btn bg-brown">Right position <i class="icon-menu7 ml-2"></i></button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Right in dropdown</h6>
								<p class="text-muted mb-3">Additional option for right icon</p>

								<div class="btn-group">
			                    	<button type="button" class="btn bg-brown dropdown-toggle" data-toggle="dropdown">Dropdown <i class="icon-menu7 ml-2"></i></button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /icon positions -->


				<!-- Label positions -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Left label position</h6>
								<p class="text-muted mb-3">Display label on the left side</p>

		                    	<button type="button" class="btn btn-danger btn-labeled btn-labeled-left"><b><i class="icon-menu7"></i></b> Left position</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Right label position</h6>
								<p class="text-muted mb-3">Display label on the right side</p>

		                    	<button type="button" class="btn btn-danger btn-labeled btn-labeled-right"><b><i class="icon-menu7"></i></b> Right position</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Right in dropdown</h6>
								<p class="text-muted mb-3">Additional option for right label</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-danger btn-labeled btn-labeled-right dropdown-toggle" data-toggle="dropdown"><b><i class="icon-menu7"></i></b> Dropdown</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /label positions -->


				<!-- Custom button colors -->
				<div class="font-size-sm text-uppercase font-weight-semibold mb-2 mt-1">Custom colors</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Custom brown color</h6>
								<p class="text-muted mb-3">Custom color from <a href="colors_brown">brown palette</a></p>

		                    	<button type="button" class="btn bg-brown">Custom brown color</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Custom pink color</h6>
								<p class="text-muted mb-3">Custom color from <a href="colors_pink">pink palette</a></p>

		                    	<button type="button" class="btn bg-pink">Custom pink color</button>
	                    	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Custom teal color</h6>
								<p class="text-muted mb-3">Custom color from <a href="colors_teal">teal palette</a></p>

		                    	<button type="button" class="btn bg-teal">Custom teal color</button>
	                    	</div>
						</div>
					</div>
				</div>
				<!-- /custom button colors -->



				<!-- Button dropdowns title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Button dropdowns
					</h6>
					<span class="text-muted d-block">Dropdown menus attached to buttons</span>
				</div>
				<!-- /button dropdowns title -->


				<!-- Button dropdown types -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Button dropdown</h6>
								<p class="text-muted mb-3">Basic button dropdown example</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Menu with icon</h6>
								<p class="text-muted mb-3">Dropdown button with icon</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 mr-2"></i> Dropdown</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Segmented button</h6>
								<p class="text-muted mb-3">Segmented button dropdown</p>

								<div class="btn-group">
									<button type="button" class="btn btn-primary"><i class="icon-cog5 mr-2"></i> Segmented</button>
			                    	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"></button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /button dropdown types -->


				<!-- Additional dropdown alignment -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Button dropup</h6>
								<p class="text-muted mb-3">Basic button dropup example</p>

								<div class="btn-group dropup">
			                    	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropup</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Drop right</h6>
								<p class="text-muted mb-3">Right aligned dropdown menu</p>

								<div class="btn-group dropright">
			                    	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropright menu</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Drop left</h6>
								<p class="text-muted mb-3">Left aligned dropdown menu</p>

								<div class="btn-group dropleft">
			                    	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropleft menu</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /additional dropdown alignment -->


				<!-- Rounded button menus -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Rounded button dropup</h6>
								<p class="text-muted mb-3">Dropup attached to <code>rounded</code> button</p>

								<div class="btn-group dropup">
			                    	<button type="button" class="btn btn-danger rounded-round dropdown-toggle" data-toggle="dropdown">Dropdown</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Rounded button menu</h6>
								<p class="text-muted mb-3">Rouned button menu with icon</p>

								<div class="btn-group">
			                    	<button type="button" class="btn btn-danger rounded-round dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 mr-2"></i> Dropdown</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Rounded segmented</h6>
								<p class="text-muted mb-3">Rounded button with segments</p>

								<div class="btn-group">
									<button type="button" class="btn btn-danger rounded-round rounded-right-0"><i class="icon-cog5 mr-2"></i> Segmented</button>
			                    	<button type="button" class="btn btn-danger rounded-round rounded-left-0 dropdown-toggle" data-toggle="dropdown"></button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /rounded button menus -->


				<!-- Labeled button menus -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Labeled button dropup</h6>
								<p class="text-muted mb-3">Dropup attached to <code>labeled</code> button</p>

								<div class="btn-group dropup">
			                    	<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left dropdown-toggle" data-toggle="dropdown"><b><i class="icon-law"></i></b> Dropup</button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Labeled segment</h6>
								<p class="text-muted mb-3">Segmented labeled button</p>

								<div class="btn-group">
									<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left"><b><i class="icon-law"></i></b> Segmented</button>
			                    	<button type="button" class="btn bg-teal-400 dropdown-toggle" data-toggle="dropdown"></button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Segmented dropup</h6>
								<p class="text-muted mb-3">Labeled button dropup</p>

								<div class="btn-group dropup">
									<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left"><b><i class="icon-law"></i></b> Segmented</button>
			                    	<button type="button" class="btn bg-teal-400 dropdown-toggle" data-toggle="dropdown"></button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /labeled button menus -->


				<!-- Icon button menus -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Icon button dropup</h6>
								<p class="text-muted mb-3">Dropup attached to <code>icon</code> button</p>

								<div class="btn-group dropup">
			                    	<button type="button" class="btn bg-slate btn-icon dropdown-toggle" data-toggle="dropdown">
				                    	<i class="icon-grid-alt"></i>
			                    	</button>

			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
								<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Segmented dropdown icon</h6>
								<p class="text-muted mb-3">Dropdown in segmented icon button</p>

								<div class="btn-group">
									<button type="button" class="btn bg-slate btn-icon"><i class="icon-grid-alt"></i></button>
			                    	<button type="button" class="btn bg-slate dropdown-toggle" data-toggle="dropdown"></button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Segmented dropup button</h6>
								<p class="text-muted mb-3">Dropup in segmented icon button</p>

								<div class="btn-group dropup">
									<button type="button" class="btn bg-slate btn-icon"><i class="icon-grid-alt"></i></button>
			                    	<button type="button" class="btn bg-slate dropdown-toggle" data-toggle="dropdown"></button>
			                    	<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
										<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
										<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /icon button menus -->



				<!-- Button options title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Additional options
					</h6>
					<span class="text-muted d-block">Button toolbars, groups and controls</span>
				</div>
				<!-- /button options title -->


				<!-- Button options -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Loading button</h6>
								<p class="text-muted mb-3">Custom loading state</p>

		                    	<button type="button" data-initial-text="<i class='icon-spinner4 mr-2'></i> Loading state" data-loading-text="<i class='icon-spinner4 spinner mr-2'></i> Loading..." class="btn btn-light btn-loading">
		                    		<i class="icon-spinner4 mr-2"></i>
		                    		Loading state
	                    		</button>
	                    	</div>
						</div>

						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Radio button group</h6>
								<p class="text-muted mb-3">Bootstrap <code>radio</code> button group</p>

		                    	<div class="btn-group btn-group-toggle" data-toggle="buttons">
									<label class="btn btn-primary active">
										<input type="radio" name="options" id="option1" autocomplete="off" checked>
										Option 1
									</label>

									<label class="btn btn-primary">
										<input type="radio" name="options" id="option2" autocomplete="off">
										Option 2
									</label>

									<label class="btn btn-primary">
										<input type="radio" name="options" id="option3" autocomplete="off">
										Option 3
									</label>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Justified link group</h6>
								<p class="text-muted mb-3">Justified <code>links</code> in button group</p>

			                    <div class="btn-group btn-group-justified">
									<a href="#" class="btn bg-slate-700">Left</a>
									<a href="#" class="btn bg-slate-700">Middle</a>
									<a href="#" class="btn bg-slate-700">Right</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Button group</h6>
								<p class="text-muted mb-3">Group of buttons in <code>btn-group</code></p>

								<div class="btn-group">
									<button type="button" class="btn btn-primary">Left</button>
									<button type="button" class="btn btn-primary">Middle</button>
									<button type="button" class="btn btn-primary">Right</button>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Single toggle button</h6>
								<p class="text-muted mb-3">Using <code>data-toggle="button"</code></p>

		                    	<button type="button" class="btn btn-danger" data-toggle="button">Single toggle</button>
	                    	</div>
						</div>

						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Button group nesting</h6>
								<p class="text-muted mb-3">Example of nested button groups</p>

		                    	<div class="btn-group">
									<button type="button" class="btn bg-teal-400">1</button>
									<button type="button" class="btn bg-teal-400">2</button>

									<div class="btn-group">
										<button type="button" class="btn bg-teal-400 dropdown-toggle" data-toggle="dropdown">Dropdown</button>
				                    	<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
											<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
											<a href="#" class="dropdown-item"><i class="icon-mail5"></i> One more action</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item"><i class="icon-gear"></i> Separated line</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Button toolbar</h6>
								<p class="text-muted mb-3">Complex <code>btn-group</code> components</p>

								<div class="btn-toolbar justify-content-center">
		                            <div class="btn-group mr-2">
										<button type="button" class="btn btn-light">1</button>
										<button type="button" class="btn btn-light">2</button>
										<button type="button" class="btn btn-light">3</button>
									</div>

		                            <div class="btn-group">
										<button type="button" class="btn btn-light">4</button>
										<button type="button" class="btn btn-light">5</button>
									</div>
		                        </div>
	                        </div>
						</div>

						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Checkbox button group</h6>
								<p class="text-muted mb-3">Bootstrap <code>checkbox</code> button group</p>

			                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
									<label class="btn btn-primary active">
										<input type="checkbox" checked>
										Option 1
									</label>

									<label class="btn btn-primary">
										<input type="checkbox">
										Option 2
									</label>

									<label class="btn btn-primary">
										<input type="checkbox">
										Option 3
									</label>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Justified button group</h6>
								<p class="text-muted mb-3">Justified <code>buttons</code> in button group</p>

								<div class="btn-group btn-group-justified">
									<div class="btn-group">
										<button type="button" class="btn bg-slate-700">Left</button>
									</div>

									<div class="btn-group">
										<button type="button" class="btn bg-slate-700">Middle</button>
									</div>

									<div class="btn-group">
										<button type="button" class="btn bg-slate-700">Right</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /button options -->



				<!-- Progress buttons title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Progress animation
					</h6>
					<span class="text-muted d-block">Button loading spinner with progress</span>
				</div>
				<!-- /progress buttons title -->


				<!-- Progress buttons -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Expand Left</h6>
								<p class="text-muted mb-3">Spinner appears on left</p>

		                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-style="expand-left" data-spinner-color="#333" data-spinner-size="20">
		                        	<span class="ladda-label">Spinner</span>
	                        	</button>
		                        <button type="button" class="btn bg-teal btn-ladda btn-ladda-progress" data-style="expand-left" data-spinner-size="20">
		                        	<span class="ladda-label">Spinner + Progress</span>
	                        	</button>
	                        </div>
						</div>

						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Expand Right</h6>
								<p class="text-muted mb-3">Spinner appears on right</p>

		                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-style="expand-right" data-spinner-color="#333" data-spinner-size="20">
		                        	<span class="ladda-label">Spinner</span>
	                        	</button>
		                        <button type="button" class="btn bg-teal btn-ladda btn-ladda-progress" data-style="expand-right" data-spinner-size="20">
		                        	<span class="ladda-label">Spinner + Progress</span>
	                        	</button>
	                        </div>
						</div>

						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Expand Up</h6>
								<p class="text-muted mb-3">Spinner appears on top</p>

		                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="expand-up">
		                        	<span class="ladda-label">Spinner</span>
	                        	</button>
		                        <button type="button" class="btn bg-brown btn-ladda btn-ladda-progress" data-style="expand-up">
		                        	<span class="ladda-label">Spinner + Progress</span>
	                        	</button>
	                        </div>
						</div>

						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Expand Down</h6>
								<p class="text-muted mb-3">Spinner appears on bottom</p>

		                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="expand-down">
		                        	<span class="ladda-label">Spinner</span>
	                        	</button>
		                        <button type="button" class="btn bg-brown btn-ladda btn-ladda-progress" data-style="expand-down">
		                        	<span class="ladda-label">Spinner + Progress</span>
	                        	</button>
	                        </div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Slide Left</h6>
								<p class="text-muted mb-3">Spinner slides from right</p>

		                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="slide-left">
		                        	<span class="ladda-label">Spinner</span>
	                        	</button>
		                        <button type="button" class="btn bg-purple-400 btn-ladda btn-ladda-progress" data-style="slide-left">
		                        	<span class="ladda-label">Spinner + Progress</span>
	                        	</button>
                        	</div>
						</div>

						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Slide Right</h6>
								<p class="text-muted mb-3">Spinner slides from left</p>

		                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="slide-right">
		                        	<span class="ladda-label">Spinner</span>
	                        	</button>
		                        <button type="button" class="btn bg-purple-400 btn-ladda btn-ladda-progress" data-style="slide-right">
		                        	<span class="ladda-label">Spinner + Progress</span>
	                        	</button>
                        	</div>
						</div>

						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Slide Up</h6>
								<p class="text-muted mb-3">Spinner slides from bottom</p>

		                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="slide-up">
		                        	<span class="ladda-label">Spinner</span>
	                        	</button>
		                        <button type="button" class="btn bg-slate-600 btn-ladda btn-ladda-progress" data-style="slide-up">
		                        	<span class="ladda-label">Spinner + Progress</span>
	                        	</button>
                        	</div>
						</div>

						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Slide Down</h6>
								<p class="text-muted mb-3">Spinner slides from top</p>

		                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="slide-down">
		                        	<span class="ladda-label">Spinner</span>
	                        	</button>
		                        <button type="button" class="btn bg-slate-600 btn-ladda btn-ladda-progress" data-style="slide-down">
		                        	<span class="ladda-label">Spinner + Progress</span>
	                        	</button>
                        	</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Zoom In</h6>
								<p class="text-muted mb-3">Spinner appears after zoom in</p>

		                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="zoom-in">
		                        	<span class="ladda-label">Spinner</span>
	                        	</button>
		                        <button type="button" class="btn btn-primary btn-ladda btn-ladda-progress" data-style="zoom-in">
		                        	<span class="ladda-label">Spinner + Progress</span>
	                        	</button>
                        	</div>
						</div>

						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Zoom Out</h6>
								<p class="text-muted mb-3">Spinner appears after zoom out</p>

		                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="zoom-out">
		                        	<span class="ladda-label">Spinner</span>
	                        	</button>
		                        <button type="button" class="btn btn-primary btn-ladda btn-ladda-progress" data-style="zoom-out">
		                        	<span class="ladda-label">Spinner + Progress</span>
	                        	</button>
                        	</div>
						</div>

						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Fixed Position</h6>
								<p class="text-muted mb-3">Spinner appears instead of text</p>

		                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="fade">
		                        	<span class="ladda-label">Spinner</span>
	                        	</button>
		                        <button type="button" class="btn btn-danger btn-ladda btn-ladda-progress" data-style="fade">
		                        	<span class="ladda-label">Spinner + Progress</span>
	                        	</button>
                        	</div>
						</div>

						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Border radius</h6>
								<p class="text-muted mb-3">Border radius animation</p>

		                        <button type="button" class="btn btn-light btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="radius">
		                        	<span class="ladda-label">Spinner</span>
	                        	</button>
		                        <button type="button" class="btn btn-danger btn-ladda btn-ladda-progress" data-style="radius">
		                        	<span class="ladda-label">Spinner + Progress</span>
	                        	</button>
                        	</div>
						</div>
					</div>
				</div>
				<!-- /progress buttons -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="footer text-muted">
				&copy; 2015 - 2017. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
