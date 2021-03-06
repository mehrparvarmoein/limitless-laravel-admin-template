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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Components</span> - Breadcrumbs</h4>
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
							<a href="components_breadcrumbs" class="breadcrumb-item">Components</a>
							<span class="breadcrumb-item active">Breadcrumbs</span>
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

				<!-- Breadcrumb placement title -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Breadcrumb placement
					</h6>
					<span class="text-muted d-block">Page header, top, bottom etc.</span>
				</div>
				<!-- /breadcrumb placement title -->


				<!-- Inside page title -->
				<div class="mb-3 border-top-1 border-top-primary">
					<div class="page-header page-header-light" style="margin-bottom: 0;">
						<div class="page-header-content header-elements-md-inline">
							<div class="page-title">
								<h5>
									<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Header</span> - Breadcrumb
									<small class="d-block text-muted">Basic breadcrumb inside page header</small>
								</h5>
							</div>

							<div class="header-elements py-0">
								<div class="breadcrumb">
									<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<a href="components_breadcrumbs" class="breadcrumb-item">Components</a>
									<span class="breadcrumb-item active">Breadcrumbs</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /inside page title -->


				<!-- Top full width position -->
				<div class="mb-3 border-top-1 border-top-primary">
					<div class="page-header page-header-light" style="margin-bottom: 0;">
						<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
							<div class="d-flex">
								<div class="breadcrumb">
									<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<a href="components_breadcrumbs" class="breadcrumb-item">Components</a>
									<span class="breadcrumb-item active">Breadcrumbs</span>
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

						<div class="page-header-content header-elements-md-inline">
							<div class="page-title">
								<h5>
									<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Breadcrumb</span> - Top Full Width
									<small class="d-block text-muted">Top position - placed before page header content</small>
								</h5>
							</div>

							<div class="header-elements">
								<form action="#">
									<div class="form-group form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control" placeholder="Search">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-sm text-muted"></i>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /top full width position -->


				<!-- Top transparent -->
				<div class="mb-3 border-top-1 border-top-primary">
					<div class="page-header page-header-light" style="margin-bottom: 0;">
						<div class="page-header-content header-elements-md-inline">
							<div class="pt-3">
								<div class="breadcrumb">
									<a href="index" class="breadcrumb-item py-0">Home</a>
									<a href="components_breadcrumbs" class="breadcrumb-item py-0">Components</a>
									<span class="breadcrumb-item py-0 active">Breadcrumb</span>
								</div>

								<div class="page-title">
									<h5>
										<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Breadcrumb</span> - Top Transparent 
										<small class="d-block text-muted">No border, background color and bigger padding</small>
									</h5>
								</div>
							</div>

							<div class="header-elements">
								<form action="#">
									<div class="form-group form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control" placeholder="Search">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-sm text-muted"></i>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /top transparent -->


				<!-- Top component -->
				<div class="mb-3 border-top-1 border-top-primary">
					<div class="page-header page-header-light pt-3" style="margin-bottom: 0;">
						<div class="breadcrumb-line breadcrumb-line-light breadcrumb-line-component header-elements-md-inline">
							<div class="d-flex">
								<div class="breadcrumb">
									<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<a href="components_breadcrumbs" class="breadcrumb-item">Components</a>
									<span class="breadcrumb-item active">Breadcrumbs</span>
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

						<div class="page-header-content header-elements-md-inline">
							<div class="page-title">
								<h5>
									<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Breadcrumb</span> - Top Component 
									<small class="d-block text-muted">Breadcrumb as a component</small>
								</h5>
							</div>

							<div class="header-elements">
								<form action="#">
									<div class="form-group form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control" placeholder="Search">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-sm text-muted"></i>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /top component -->


				<!-- Bottom full width position -->
				<div class="mb-3 border-top-1 border-top-primary">
					<div class="page-header page-header-light" style="margin-bottom: 0;">
						<div class="page-header-content header-elements-md-inline">
							<div class="page-title">
								<h5>
									<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Breadcrumb</span> - Bottom Full Width 
									<small class="d-block text-muted">Default bottom position</small>
								</h5>
							</div>

							<div class="header-elements">
								<form action="#">
									<div class="form-group form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control" placeholder="Search">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-sm text-muted"></i>
										</div>
									</div>
								</form>
							</div>
						</div>

						<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
							<div class="d-flex">
								<div class="breadcrumb">
									<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<a href="components_breadcrumbs" class="breadcrumb-item">Components</a>
									<span class="breadcrumb-item active">Breadcrumbs</span>
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
				</div>
				<!-- /bottom full width position -->


				<!-- Bottom transparent -->
				<div class="mb-3 border-top-1 border-top-primary">
					<div class="page-header page-header-light" style="margin-bottom: 0;">
						<div class="page-header-content header-elements-md-inline">
							<div class="pb-3">
								<div class="page-title">
									<h5>
										<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Breadcrumb</span> - Bottom Transparent 
										<small class="d-block text-muted">No border, background color and bigger padding</small>
									</h5>
								</div>

								<div class="breadcrumb">
									<a href="index" class="breadcrumb-item py-0">Home</a>
									<a href="components_breadcrumbs" class="breadcrumb-item py-0">Components</a>
									<span class="breadcrumb-item py-0 active">Breadcrumb</span>
								</div>
							</div>

							<div class="header-elements">
								<form action="#">
									<div class="form-group form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control" placeholder="Search">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-sm text-muted"></i>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /bottom transparent -->


				<!-- Bottom component -->
				<div class="mb-3 border-top-1 border-top-primary">
					<div class="page-header page-header-light pb-3" style="margin-bottom: 0;">
						<div class="page-header-content header-elements-md-inline">
							<div class="page-title">
								<h5>
									<i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Breadcrumb</span> - Bottom Component 
									<small class="d-block text-muted">Breadcrumb as a component</small>
								</h5>
							</div>

							<div class="header-elements bg-color-none">
								<form action="#">
									<div class="form-group form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control" placeholder="Search">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-sm text-muted"></i>
										</div>
									</div>
								</form>
							</div>
						</div>

						<div class="breadcrumb-line breadcrumb-line-light breadcrumb-line-component header-elements-md-inline">
							<div class="d-flex">
								<div class="breadcrumb">
									<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
									<a href="components_breadcrumbs" class="breadcrumb-item">Components</a>
									<span class="breadcrumb-item active">Breadcrumbs</span>
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
				</div>
				<!-- /bottom component -->



				<!-- Breadcrumb inside title -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Inside page title
					</h6>
					<span class="text-muted d-block">Above or below page title</span>
				</div>
				<!-- /breadcrumb inside title -->


				<!-- Above page title -->
				<div class="mb-3 border-top-1 border-top-primary">
					<div class="page-header page-header-light" style="margin-bottom: 0;">
						<div class="page-header-content header-elements-md-inline">
							<div class="page-title">
								<div class="breadcrumb ml-0 mb-1">
									<a href="index" class="breadcrumb-item py-0">Home</a>
									<a href="components_breadcrumbs" class="breadcrumb-item py-0">Components</a>
									<span class="breadcrumb-item py-0 active">Breadcrumbs</span>
								</div>

								<h5><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Breadcrumb</span> - Top Condensed</h5>
							</div>

							<div class="header-elements">
								<form action="#">
									<div class="form-group form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control" placeholder="Search">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-sm text-muted"></i>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /above page title -->


				<!-- Above page title with spacing -->
				<div class="mb-3 border-top-1 border-top-primary">
					<div class="page-header page-header-light" style="margin-bottom: 0;">
						<div class="page-header-content header-elements-md-inline">
							<div class="page-title">
								<div class="breadcrumb mb-1">
									<a href="index" class="breadcrumb-item py-0">Home</a>
									<a href="components_breadcrumbs" class="breadcrumb-item py-0">Components</a>
									<span class="breadcrumb-item py-0 active">Breadcrumbs</span>
								</div>

								<h5><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Breadcrumb</span> - Top Condensed Spaced</h5>
							</div>

							<div class="header-elements">
								<form action="#">
									<div class="form-group form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control" placeholder="Search">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-sm text-muted"></i>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /above page title with spacing -->


				<!-- Below page title -->
				<div class="mb-3 border-top-1 border-top-primary">
					<div class="page-header page-header-light" style="margin-bottom: 0;">
						<div class="page-header-content header-elements-md-inline">
							<div class="page-title">
								<h5><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Breadcrumb</span> - Bottom Condensed</h5>

								<div class="breadcrumb ml-0 mt-1">
									<a href="index" class="breadcrumb-item py-0">Home</a>
									<a href="components_breadcrumbs" class="breadcrumb-item py-0">Components</a>
									<span class="breadcrumb-item py-0 active">Breadcrumbs</span>
								</div>
							</div>

							<div class="header-elements">
								<form action="#">
									<div class="form-group form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control" placeholder="Search">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-sm text-muted"></i>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /below page title -->


				<!-- Below page title with spacing -->
				<div class="mb-3 border-top-1 border-top-primary">
					<div class="page-header page-header-light" style="margin-bottom: 0;">
						<div class="page-header-content header-elements-md-inline">
							<div class="page-title">
								<h5><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Breadcrumb</span> - Bottom Condensed Spaced</h5>

								<div class="breadcrumb mt-1">
									<a href="index" class="breadcrumb-item py-0">Home</a>
									<a href="components_breadcrumbs" class="breadcrumb-item py-0">Components</a>
									<span class="breadcrumb-item py-0 active">Breadcrumbs</span>
								</div>
							</div>

							<div class="header-elements">
								<form action="#">
									<div class="form-group form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control" placeholder="Search">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-sm text-muted"></i>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /below page title with spacing -->



				<!-- Breacrumb component -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Breadcrumb component
					</h6>
					<span class="text-muted d-block">Use breadcrumb as a component</span>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light bg-white breadcrumb-line-component header-elements-md-inline mb-4">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="components_breadcrumbs" class="breadcrumb-item">Components</a>
							<span class="breadcrumb-item active">Breadcrumbs</span>
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
				<!-- /breacrumb component -->


				<!-- Breadcrumb options -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Breadcrumb options
					</h6>
					<span class="text-muted d-block">Custom breadcrumb styling options</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Default breadcrumb styling</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="#" class="breadcrumb-item">Home</a>
										<a href="#" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Add text using <code>.location-text</code> class</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<span class="font-size-sm text-uppercase text-muted mr-2 align-self-center">You are here:</span>
										<a href="#" class="breadcrumb-item">Home</a>
										<a href="#" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Breadcrumb list with <code>home</code> icon only</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="#" class="breadcrumb-item"><i class="icon-home2"></i></a>
										<a href="#" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Breadcrumb list with icons</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="#" class="breadcrumb-item"><i class="icon-menu7 mr-2"></i> Current</a>
										<span class="breadcrumb-item active"><i class="icon-pin-alt mr-2"></i> Location</span>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Breadcrumb with icons only and a <code>tooltip</code></small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<span class="font-size-sm text-uppercase text-muted mr-2 align-self-center">You are here:</span>
										<a href="#" class="breadcrumb-item"><i class="icon-home2" data-popup="tooltip" title="Home"></i></a>
										<a href="#" class="breadcrumb-item"><i class="icon-hash" data-popup="tooltip" title="Main"></i></a>
										<a href="#" class="breadcrumb-item"><i class="icon-menu7" data-popup="tooltip" title="Current"></i></a>
										<span class="breadcrumb-item active"><i class="icon-pin" data-popup="tooltip" title="Location"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Dash divider using <code>ul.breadcrumb-dash</code></small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb breadcrumb-dash">
										<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="#" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Arrows divider using <code>ul.breadcrumb-arrows</code></small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb breadcrumb-arrows">
										<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="#" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Caret divider using <code>ul.breadcrumb-caret</code></small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb breadcrumb-caret">
										<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="#" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Arrow divider using <code>ul.breadcrumb-arrow</code></small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb breadcrumb-arrow">
										<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="#" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Links with dropdown menu</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<div class="breadcrumb-item py-0 dropdown">
											<a href="#" class="breadcrumb-item dropdown-toggle" data-toggle="dropdown"><i class="icon-home2 mr-2"></i> Home</a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Default dashboard</a>
												<a href="#" class="dropdown-item">Statistics dashboard</a>
												<a href="#" class="dropdown-item">Ecommerce dashboard</a>
											</div>
										</div>
										<div class="breadcrumb-item py-0">
											<a href="#" class="breadcrumb-item dropdown-toggle" data-toggle="dropdown">Forms</a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">General components</a>
												<div class="dropdown-submenu">
													<a href="#" class="dropdown-item">Selects</a>
													<div class="dropdown-menu">
														<a href="#" class="dropdown-item">Select2 selects</a>
														<a href="#" class="dropdown-item">Bootstrap multiselect</a>
														<a href="#" class="dropdown-item">SelectBoxIt selects</a>
													</div>
												</div>
												<a href="#" class="dropdown-item">Advanced components</a>
											</div>
										</div>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /breadcrumb options -->


				<!-- Breacrumb elements -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Breadcrumb elements
					</h6>
					<span class="text-muted d-block">Basic breadcrumb line elements</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block text-muted">Breadcrumb line with single button</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="#" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item">Single button</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Single button with icon</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="#" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item">
												<i class="icon-screen-full mr-2"></i>
												Left icon
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Single button with icon</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="#" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item">
												Right icon
												<i class="icon-three-bars ml-2"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Single button with icon only</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="#" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item">
												<i class="icon-sphere"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Breadcrumb line with button group</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="#" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item">First</a>
											<a href="#" class="breadcrumb-elements-item">Second</a>
											<div class="breadcrumb-elements-item dropdown p-0">
												<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">Third</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">One more separated line</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Breadcrumb line with button dropdown</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="#" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<div class="breadcrumb-elements-item dropdown p-0">
												<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">Menu</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">One more separated line</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Button dropdown with icon and caret</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="#" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<div class="breadcrumb-elements-item dropdown p-0">
												<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
													<i class="icon-bubbles3 mr-2"></i>
													Menu
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">One more separated line</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">With single icon button dropdown</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="#" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<div class="breadcrumb-elements-item dropdown p-0">
												<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
													<i class="icon-cog3"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">One more separated line</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Button group with icons only</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="#" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item"><i class="icon-three-bars"></i></a>
											<a href="#" class="breadcrumb-elements-item"><i class="icon-mail5"></i></a>
											<div class="breadcrumb-elements-item dropdown p-0">
												<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
													<i class="icon-cog3"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">One more separated line</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Breadcrumb line buttons with badge</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="#" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<a href="#" class="breadcrumb-elements-item">
												Messages
												<span class="badge bg-indigo-400 badge-pill ml-2">23</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /breacrumb elements -->


				<!-- Breacrumb colors -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Breadcrumb colors
					</h6>
					<span class="text-muted d-block">Custom breadcrumb <a href="colors_primary">color options</a></span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="mb-3 border-top-1 border-top-danger">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="breadcrumb-line breadcrumb-line-light alpha-slate header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="#" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<div class="breadcrumb-elements-item dropdown p-0">
												<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">Menu</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">One more separated line</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Primary <a href="colors_primary">color theme</a> with single button</small>
										</h5>
									</div>
								</div>
							</div>
						</div>
					
						<div class="mb-3">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="breadcrumb-line breadcrumb-line-dark bg-teal-400 header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="#" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-white d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<div class="breadcrumb-elements-item dropdown p-0">
												<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">Menu</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">One more separated line</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Primary <a href="colors_primary">color theme</a> with single button</small>
										</h5>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Primary <a href="colors_primary">color theme</a> with single button</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light alpha-success border-top-success header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="#" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<div class="breadcrumb-elements-item dropdown p-0">
												<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">Menu</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">One more separated line</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block">Teal <a href="colors_teal">color theme</a> with button dropdown</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-dark bg-slate-600 header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="#" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
										</div>

										<a href="#" class="header-elements-toggle text-white d-md-none"><i class="icon-more"></i></a>
									</div>

									<div class="header-elements d-none">
										<div class="breadcrumb justify-content-center">
											<div class="breadcrumb-elements-item dropdown p-0">
												<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">Menu</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">One more separated line</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /breacrumb colors -->


				<!-- Responsive options -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Responsive options
					</h6>
					<span class="text-muted d-block">Breadcrumb elements options. On mobile only</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block text-muted">No elements</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="#" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block text-muted">Collapsible elements</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="d-flex">
										<div class="breadcrumb">
											<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
											<a href="#" class="breadcrumb-item">Current</a>
											<span class="breadcrumb-item active">Location</span>
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
						</div>
					</div>

					<div class="col-md-6">
						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block text-muted">Inline elements</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-inline">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="#" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>

									<div class="header-elements">
										<div class="breadcrumb">
											<div class="breadcrumb-elements-item dropdown p-0">
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

						<div class="mb-3 border-top-1 border-top-primary">
							<div class="page-header page-header-light" style="margin-bottom: 0;">
								<div class="page-header-content">
									<div class="page-title">
										<h5>
											<i class="icon-arrow-right6 mr-2"></i>
											<span class="font-weight-semibold">Components</span> - Breadcrumb
											<small class="d-block text-muted">Stackable elements</small>
										</h5>
									</div>
								</div>

								<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
									<div class="breadcrumb">
										<a href="index" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
										<a href="#" class="breadcrumb-item">Current</a>
										<span class="breadcrumb-item active">Location</span>
									</div>

									<div class="header-elements">
										<div class="breadcrumb">
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
						</div>
					</div>
				</div>
				<!-- /responsive options -->

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
