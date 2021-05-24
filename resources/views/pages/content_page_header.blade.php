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
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="../../../../global_assets/js/plugins/pickers/daterangepicker.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/content_page_header.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Content</span> - Page Header</h4>
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
							<a href="content_page_header" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Page header</span>
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

				<!-- Page header styling -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Header styling
					</h6>
					<span class="text-muted d-block">Basic styling options</span>
				</div>

				<div class="row">
					<div class="col-xl-6">
						<div class="mb-3">
							<div class="page-header" style="border: 1px solid #ccc; border-bottom: 0;">
								<div class="page-header-content header-elements-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Page Header</span> - Transparent
											<small class="d-block text-muted">Transparent background color</small>
										</h5>
									</div>

									<div class="header-elements">
		                                <button class="btn bg-primary btn-icon btn-sm"><i class="icon-gear"></i></button>
									</div>
								</div>
								
								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												Actions
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

						<div class="mb-3">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Page Header</span> - Default
											<small class="d-block text-muted">White background color</small>
										</h5>
									</div>

									<div class="header-elements d-flex align-items-center">
		                                <button class="btn bg-teal-400 btn-icon btn-sm"><i class="icon-gear"></i></button>
									</div>
								</div>
								
								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												Actions
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

						<div class="mb-3">
							<div class="page-header page-header-light has-cover">
								<div class="page-header-content header-elements-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Page Header</span> - Image
											<small class="d-block text-muted">With light image</small>
										</h5>
									</div>

									<div class="header-elements d-flex align-items-center">
		                                <button class="btn bg-pink-400 btn-icon btn-sm"><i class="icon-gear"></i></button>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												Actions
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
					</div>

					<div class="col-xl-6">							
						<div class="mb-3">
							<div class="page-header page-header-dark">
								<div class="page-header-content header-elements-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Page Header</span> - Dark
											<small class="d-block opacity-75">Dark background color</small>
										</h5>
									</div>

									<div class="header-elements d-flex align-items-center">
		                                <button class="btn btn-link text-white btn-icon btn-sm ripple-light"><i class="icon-gear"></i></button>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												Actions
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
						
						<div class="mb-3">
							<div class="page-header page-header-dark">
								<div class="page-header-content bg-indigo-400 header-elements-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Page Header</span> - Custom Color
											<small class="d-block opacity-75">Custom background color</small>
										</h5>
									</div>

									<div class="header-elements d-flex align-items-center">
		                                <button class="btn btn-link text-white btn-icon btn-sm ripple-light"><i class="icon-gear"></i></button>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												Actions
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
						
						<div class="mb-3">
							<div class="page-header page-header-dark has-cover">
								<div class="page-header-content header-elements-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Page Header</span> - Image
											<small class="d-block opacity-75">With dark image</small>
										</h5>
									</div>

									<div class="header-elements d-flex align-items-center">
		                                <button class="btn btn-link text-white btn-icon btn-sm ripple-light"><i class="icon-gear"></i></button>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												Actions
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
					</div>
				</div>
				<!-- /page header styling -->



				<!-- Page header subtitles title -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Header subtitles
					</h6>
					<span class="text-muted d-block">Page header subtitle options</span>
				</div>
				<!-- /page header subtitles title -->


				<!-- Page header subtitles -->
				<div class="row">
					<div class="col-xl-6">
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Header</span> - Styled
											<small class="text-muted">Default inline subtitle</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												<i class="icon-cog3"></i>
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

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Header</span> - Styled
											<small class="d-block text-muted">Custom block subtitle</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												<i class="icon-cog3"></i>
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
					</div>

					<div class="col-xl-6">
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											Default page header
											<small class="text-muted">Default inline subtitle</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												<i class="icon-cog3"></i>
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

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											Default page header
											<small class="d-block text-muted ml-0">Custom block subtitle</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												<i class="icon-cog3"></i>
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
					</div>
				</div>
				<!-- /page header subtitles -->



				<!-- Optional borders title -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Optional borders
					</h6>
					<span class="text-muted d-block">Custom styled horizontal borders</span>
				</div>
				<!-- /optional borders title -->


				<!-- Page header borders -->
				<div class="row">
					<div class="col-xl-6">
						<div class="mb-3">
							<div class="page-header page-header-light border-bottom-1 border-bottom-primary">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Basic <code>bottom</code> border with custom color</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu7"></i>
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

						<div class="mb-3">
							<div class="page-header page-header-light border-bottom-2 border-bottom-teal">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Large <code>bottom</code> border with custom color</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu7"></i>
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
					</div>

					<div class="col-xl-6">
						<div class="mb-3">
							<div class="page-header page-header-light">
								<div class="page-header-content border-bottom-1 border-bottom-success">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Basic <code>top</code> border with custom color</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu7"></i>
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

						<div class="mb-3">
							<div class="page-header page-header-light">
								<div class="page-header-content border-bottom-2 border-bottom-danger">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Large <code>top</code> border with custom color</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu7"></i>
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
					</div>
				</div>
				<!-- /page header borders -->



				<!-- Title sizing title -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Page title sizing
					</h6>
					<span class="text-muted d-block">Usage of <code>headings</code> in page title</span>
				</div>
				<!-- /title sizing title -->


				<!-- Page title sizing -->
				<div class="row">
					<div class="col-xl-6">
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content">
									<div class="page-title">
										<h1>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">H1</span> - Heading
											<small class="text-muted">H1 subtitle</small>
										</h1>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												<i class="icon-grid3"></i>
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

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content">
									<div class="page-title">
										<h3>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">H3</span> - Heading
											<small class="text-muted">H3 subtitle</small>
										</h3>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												<i class="icon-grid3"></i>
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

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">H5</span> - Heading
											<small class="text-muted">H5 subtitle</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												<i class="icon-grid3"></i>
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
					</div>

					<div class="col-xl-6">
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content">
									<div class="page-title">
										<h2>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">H2</span> - Heading
											<small class="text-muted">H2 subtitle</small>
										</h2>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												<i class="icon-grid3"></i>
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

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content">
									<div class="page-title">
										<h4>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">H4</span> - Heading
											<small class="text-muted">H4 subtitle</small>
										</h4>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												<i class="icon-grid3"></i>
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

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content">
									<div class="page-title">
										<h6>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">H6</span> - Heading
											<small class="text-muted">H6 subtitle</small>
										</h6>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="components_page_header" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
												<i class="icon-grid3"></i>
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
					</div>
				</div>
				<!-- /page title sizing -->



				<!-- Page header elements -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Header elements
					</h6>
					<span class="text-muted d-block">Components adjusted for page header</span>
				</div>

				<div class="row">
					<div class="col-xl-6">

						<!-- Basic button -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Basic button, available in 3 sizes</small>
										</h5>
									</div>

									<div class="header-elements">
										<button type="button" class="btn btn-primary">Button</button>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /basic button -->


						<!-- Icon button -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Icon button, available in 3 sizes</small>
										</h5>
									</div>

									<div class="header-elements">
										<button type="button" class="btn bg-teal-400 btn-icon"><i class="icon-download7"></i></button>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /icon button -->


						<!-- Button with dropdown -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Icon button with dropdown</small>
										</h5>
									</div>

									<div class="header-elements">
										<div class="btn-group">
			                                <button class="btn btn-danger btn-icon dropdown-toggle" data-toggle="dropdown"><i class="icon-pin-alt"></i></button>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<div class="divider"></div>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
			                            </div>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /button with dropdown -->


						<!-- Float buttons -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Floating icon buttons</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="d-flex justify-content-center">
											<a href="#" class="btn btn-primary btn-float rounded-round"><i class="icon-facebook"></i></a>
											<a href="#" class="btn btn-success btn-float rounded-round mx-2"><i class="icon-google-drive"></i></a>
											<a href="#" class="btn btn-info btn-float rounded-round"><i class="icon-twitter"></i></a>
										</div>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /float buttons -->


						<!-- Text input -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Simple text input field</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<form action="#">
											<div class="form-group">
												<input type="text" class="form-control wmin-md-200" placeholder="Input field">
											</div>
										</form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /text input -->


						<!-- Input with left icon -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Input field with left icon</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<form action="#">
											<div class="form-group form-group-feedback form-group-feedback-left">
												<input type="text" class="form-control wmin-md-200" placeholder="Left icon">
												<div class="form-control-feedback">
													<i class="icon-gear"></i>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /input with left icon -->


						<!-- Basic select -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Basic select, available in all sizes</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<form action="#">
											<div class="form-group">
												<select name="select" class="form-control wmin-md-200">
				                                    <option value="opt1">Basic select box</option>
				                                    <option value="opt2">Option 2</option>
				                                    <option value="opt3">Option 3</option>
				                                    <option value="opt4">Option 4</option>
				                                    <option value="opt5">Option 5</option>
				                                    <option value="opt6">Option 6</option>
				                                    <option value="opt7">Option 7</option>
				                                    <option value="opt8">Option 8</option>
				                                </select>
			                                </div>
		                                </form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /basic select -->


						<!-- Input group -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Input group with icon</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<form action="#">
											<div class="form-group">
												<div class="input-group wmin-md-200">
													<span class="input-group-prepend">
														<span class="input-group-text"><i class="icon-lock"></i></span>
													</span>
													<input type="text" class="form-control" placeholder="Enter your password">
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /input group -->


						<!-- Multiselect -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Multiple select component</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<form action="#">
											<div class="form-group wmin-md-200">
												<select class="form-control form-control-multiselect" multiple="multiple" data-fouc>
													<option value="cheese">Cheese</option>
													<option value="tomatoes">Tomatoes</option>
													<option value="mozarella">Mozzarella</option>
													<option value="mushrooms">Mushrooms</option>
													<option value="pepperoni">Pepperoni</option>
													<option value="onions">Onions</option>
												</select>
											</div>
										</form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /multiselect -->


						<!-- Right toggle -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Right positioned toggle</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none text-center text-md-left">
										<form action="#">
											<div class="form-group">
												<div class="form-check form-check-inline form-check-right form-check-switchery">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-switchery" checked data-fouc>
														Right toggle
													</label>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /right toggle -->


						<!-- Right checkboxes -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Right positioned checkboxes</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none text-center text-md-left">
										<form action="#">
											<div class="form-group">
												<div class="form-check form-check-inline form-check-right">
													<label class="form-check-label">
														Checked
														<input type="checkbox" class="form-input-styled" checked data-fouc>
													</label>
												</div>

												<div class="form-check form-check-inline form-check-right">
													<label class="form-check-label">
														Unchecked
														<input type="checkbox" class="form-input-styled" data-fouc>
													</label>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /right checkboxes -->


						<!-- Right radios  -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Right positioned radios</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none text-center text-md-left">
										<form action="#">
											<div class="form-group">
												<div class="form-check form-check-inline form-check-right">
													<label class="form-check-label">
														Selected
														<input type="radio" name="header-radio-right" class="form-input-styled" checked data-fouc>
													</label>
												</div>

												<div class="form-check form-check-inline form-check-right">
													<label class="form-check-label">
														Unselected
														<input type="radio" name="header-radio-right" class="form-input-styled" data-fouc>
													</label>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /right radios -->


						<!-- Custom daterange picker -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Custom daterange picker layout</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none text-center text-md-left">
										<form action="#">
											<div class="form-group">
												<div class="daterange-custom d-flex align-items-center justify-content-center" id="reportrange">
													<div class="daterange-custom-display"></div>
													<span class="badge badge-success badge-pill ml-2">59</span>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /custom daterange picker -->


						<!-- Progress bar -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Progress bar, available in any size</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="progress wmin-md-200">
											<div class="progress-bar progress-bar-warning progress-bar-striped progress-bar-animated" style="width: 55%">
												<span class="sr-only">55% Complete (success)</span>
											</div>
										</div>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /progress bar -->


						<!-- Inline elements -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Simple text, link and badge</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none text-center text-md-left">
										<span>Plain text, <a href="#">link</a>, <span class="badge badge-danger">Badge</span> or <span class="badge bg-primary badge-pill">89</span> pill</span>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /inline elements -->

					</div>

					<div class="col-xl-6">

						<!-- Button with dropdown -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Button with dropdown menu</small>
										</h5>
									</div>

									<div class="header-elements">
										<div class="btn-group">
			                                <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Menu</button>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<div class="divider"></div>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
			                            </div>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /button with dropdown -->


						<!-- Segmented button -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Segmented button</small>
										</h5>
									</div>

									<div class="header-elements">
										<div class="btn-group">
											<button class="btn bg-indigo-400">Button</button>

			                                <button class="btn bg-indigo-400 dropdown-toggle" data-toggle="dropdown"></button>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
			                            </div>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /segmented button -->


						<!-- Labeled button -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Labeled button</small>
										</h5>
									</div>

									<div class="header-elements">
										<button class="btn bg-slate btn-labeled btn-labeled-left" type="button"><b><i class="icon-three-bars"></i></b> Button</button>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /labeled button -->


						<!-- Float buttons with text -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Floating buttons with text</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="d-flex justify-content-center">
											<a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
												<i class="icon-bars-alt text-primary"></i>
												<span>Statistics</span>
											</a>
											<a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
												<i class="icon-calculator text-primary"></i>
												<span>Invoices</span>
											</a>
											<a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
												<i class="icon-calendar5 text-primary"></i>
												<span>Schedule</span>
											</a>
										</div>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /float buttons with text -->


						<!-- Search input -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Search input with icon</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<form action="#">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="search" class="form-control wmin-md-200" placeholder="Search">
												<div class="form-control-feedback">
													<i class="icon-search4 font-size-sm text-muted"></i>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /search input -->


						<!-- Input with right icon -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Input field with right icon</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<form action="#">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="text" class="form-control wmin-md-200" placeholder="Right icon">
												<div class="form-control-feedback">
													<i class="icon-gear"></i>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /input with right icon -->


						<!-- Select2 select -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Select2 select, available in all sizes</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<form action="#">
											<div class="form-group wmin-md-200">
												<select name="select" class="form-control-select2" data-fouc>
				                                    <option value="opt1">Select an option</option>
				                                    <option value="opt2">Option 2</option>
				                                    <option value="opt3">Option 3</option>
				                                    <option value="opt4">Option 4</option>
				                                    <option value="opt5">Option 5</option>
				                                    <option value="opt6">Option 6</option>
				                                    <option value="opt7">Option 7</option>
				                                    <option value="opt8">Option 8</option>
				                                </select>
			                                </div>
		                                </form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /select2 select -->


						<!-- Input group with dropdown -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Input group with button dropdown</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<form action="#">
											<div class="form-group">
												<div class="input-group wmin-md-200">
													<input type="text" class="form-control" placeholder="Input dropdown">

													<div class="input-group-append">
														<button type="button" class="btn bg-slate dropdown-toggle btn-icon" data-toggle="dropdown">
															<i class="icon-menu7"></i>
														</button>

														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item">Action</a>
															<a href="#" class="dropdown-item">Another action</a>
															<a href="#" class="dropdown-item">Something else here</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item">One more line</a>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /input group with dropdown -->


						<!-- Styled file input -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Styled single file input</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<form action="#">
											<div class="form-group wmin-md-200">
												<input type="file" class="form-input-styled" data-fouc>
											</div>
										</form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /styled file input -->


						<!-- Left toggle -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Left positioned toggle</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none text-center text-md-left">
										<form action="#">
											<div class="form-group">
												<div class="form-check form-check-inline form-check-switchery">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-switchery" checked data-fouc>
														Left toggle
													</label>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /left toggle -->


						<!-- Left checkboxes -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Left positioned checkboxes</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none text-center text-md-left">
										<form action="#">
											<div class="form-group">
												<div class="form-check form-check-inline">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" checked data-fouc>
														Checked
													</label>
												</div>

												<div class="form-check form-check-inline">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Unchecked
													</label>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /left checkboxes -->


						<!-- Left radios -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Left positioned radios</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none text-center text-md-left">
										<form action="#">
											<div class="form-group">
												<div class="form-check form-check-inline">
													<label class="form-check-label">
														<input type="radio" name="header-radio-left" class="form-input-styled" checked data-fouc>
														Selected
													</label>
												</div>

												<div class="form-check form-check-inline">
													<label class="form-check-label">
														<input type="radio" name="header-radio-left" class="form-input-styled" data-fouc>
														Unselected
													</label>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /left radios -->


						<!-- Basic daterange picker -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Basic daterange picker</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none text-center text-md-left">
										<button type="button" class="btn btn-info daterange-ranges dropdown-toggle">
											<i class="icon-calendar5 mr-2"></i>
											<span></span>
										</button>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /basic daterange picker -->


						<!-- Icon list with dropdown -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Icon list with dropdown</small>
										</h5>
									</div>

									<div class="header-elements">
										<div class="list-icons">
					                		<a href="#" class="list-icons-item mr-2"><i class="icon-calendar22"></i></a>
					                		<a href="#" class="list-icons-item mr-2"><i class="icon-inbox"></i></a>
					                		<div class="list-icons-item dropdown">
						                		<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-trash"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
					                		</div>
					                	</div>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /icon list with dropdown -->


						<!-- Simple content with icon -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Simple content with icon</small>
										</h5>
									</div>

									<div class="header-elements">
										<span>
											<i class="icon-spinner2 spinner mr-2"></i>
											Processing...
										</span>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /simple content with icon -->

					</div>
				</div>
				<!-- /page header elements -->
				

				<!-- Mobile view options -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Mobile view options
					</h6>
					<span class="text-muted d-block">Header elements display options</span>
				</div>

				<div class="row">
					<div class="col-xl-6">

						<!-- No header elements -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">No header elements</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /no header elements -->


						<!-- Stackable on mobile -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Stackable on mobile</small>
										</h5>
									</div>

									<div class="header-elements text-center text-md-left">
										<span>
											<i class="icon-mobile2 mr-2"></i>
											I'm stacked on mobile
										</span>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /stackable on mobile -->

					</div>

					<div class="col-xl-6">
						
						<!-- Inline on mobile -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-inline">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Inline on mobile</small>
										</h5>
									</div>

									<div class="header-elements">
										<span>
											<i class="icon-mobile2 mr-2"></i>
											I'm not stackable
										</span>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /inline on mobile -->


						<!-- Collapsible on mobile -->
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light">
								<div class="page-header-content header-elements-md-inline">
									<div class="page-title d-flex">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Page</span> - Header
											<small class="d-block text-muted">Collapsible on mobile</small>
										</h5>
										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none text-center text-md-left">
										<span>
											<i class="icon-mobile2 mr-2"></i>
											I'm stacked and collapsed
										</span>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="components_page_header" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /collapsible on mobile -->

					</div>
				</div>
				<!-- /mobile view options -->

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
