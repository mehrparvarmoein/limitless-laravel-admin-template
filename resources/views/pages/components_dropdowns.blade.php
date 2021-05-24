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

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/components_dropdowns.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Components</span> - Dropdowns</h4>
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
							<a href="components_dropdowns" class="breadcrumb-item">Components</a>
							<span class="breadcrumb-item active">Dropdowns</span>
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

				<!-- Basic dropdowns -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Dropdown menus
					</h6>
					<span class="text-muted d-block">Dropdown component states</span>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Basic dropdown</h6>
								<p class="mb-3 text-muted">Default dropdown menu styling</p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item">Another action</a>
								<a href="#" class="dropdown-item">Something else here</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">One more separated line</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Disabled items</h6>
								<p class="mb-3 text-muted">Disable the link with <code>.disabled</code> class</p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item">Another action</a>
								<a href="#" class="dropdown-item disabled">Disabled item</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">One more separated line</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Active menu item</h6>
								<p class="mb-3 text-muted">Make the link active with <code>.active</code> class</p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item active">Active item</a>
								<a href="#" class="dropdown-item">Something else here</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">One more separated line</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /basic dropdowns -->


				<!-- Dropdown headers -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Dropdown headers
					</h6>
					<span class="text-muted d-block">Dropdown header with options</span>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Default header</h6>
								<p class="mb-3 text-muted">Basic <code>header</code> styling of label sections</p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<div class="dropdown-header">Header first</div>
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item">Another action</a>
								<div class="dropdown-header">Header second</div>
								<a href="#" class="dropdown-item">Something else here</a>
								<a href="#" class="dropdown-item">One more line</a>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Header with underline</h6>
								<p class="mb-3 text-muted">Basic <code>header</code> styling of label sections</p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<div class="dropdown-header font-weight-semibold py-0 text-default text-uppercase font-size-xs line-height-xs mt-1">Header first</div>
								<div class="dropdown-divider opacity-75"></div>
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item">Another action</a>
								<div class="dropdown-header font-weight-semibold py-0 text-default text-uppercase font-size-xs line-height-xs mt-3">Header Second</div>
								<div class="dropdown-divider opacity-75"></div>
								<a href="#" class="dropdown-item">Something else here</a>
								<a href="#" class="dropdown-item">One more line</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Uppercase headers</h6>
								<p class="mb-3 text-muted">Basic <code>header</code> styling of label sections</p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<div class="dropdown-header text-uppercase font-size-xs line-height-xs">Header first</div>
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item">Another action</a>
								<div class="dropdown-header text-uppercase font-size-xs line-height-xs">Header second</div>
								<a href="#" class="dropdown-item">Something else here</a>
								<a href="#" class="dropdown-item">One more line</a>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Highlighted header</h6>
								<p class="mb-3 text-muted">Highlight header using <code>.dropdown-header-highlight</code> class</p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<div class="dropdown-header dropdown-header-highlight">Header first</div>
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item">Another action</a>
								<div class="dropdown-header dropdown-header-highlight">Header second</div>
								<a href="#" class="dropdown-item">Something else here</a>
								<a href="#" class="dropdown-item">One more line</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Heading elements</h6>
								<p class="mb-3 text-muted">Basic <code>header</code> styling of label sections</p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<div class="dropdown-header"><h6 class="text-default mb-0">Header first</h6></div>
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item">Another action</a>
								<div class="dropdown-header"><h6 class="text-default mb-0">Header Second</h6></div>
								<a href="#" class="dropdown-item">Something else here</a>
								<a href="#" class="dropdown-item">One more line</a>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Menu header icons</h6>
								<p class="mb-3 text-muted">Display left/right positioned <code>icons</code></p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<div class="dropdown-header"><i class="icon-menu7"></i> Header first <i class="icon-gear mr-0 ml-auto"></i></div>
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item">Another action</a>
								<div class="dropdown-header dropdown-header-highlight"><i class="icon-menu7"></i> Header second <i class="icon-gear mr-0 ml-auto"></i></div>
								<a href="#" class="dropdown-item">Something else here</a>
								<a href="#" class="dropdown-item">One more line</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /dropdown headers -->


				<!-- Dropdowns with submenu -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Dropdown submenu
					</h6>
					<span class="text-muted d-block">Multilevel submenu with options</span>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-info">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Basic submenu (on click)</h6>
								<p class="mb-3 text-muted">Basic <code>multi</code> level menu example</p>

								<div class="btn-group justify-content-center">
									<a href="#" class="btn bg-indigo-400 dropdown-toggle" data-toggle="dropdown">Submenu on click</a>

									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<div class="dropdown-submenu">
											<a href="#" class="dropdown-item dropdown-toggle">More options</a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Second level link</a>
												<div class="dropdown-submenu">
													<a href="#" class="dropdown-item dropdown-toggle">Second level link</a>
													<div class="dropdown-menu">
														<a href="#" class="dropdown-item">Third level link</a>
														<a href="#" class="dropdown-item">Third level link</a>
														<a href="#" class="dropdown-item">Third level link</a>
													</div>
												</div>
												<a href="#" class="dropdown-item">Second level link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-info">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Basic submenu (on hover)</h6>
								<p class="mb-3 text-muted">Doesn't work well on mobile devices</p>

								<div class="btn-group justify-content-center">
									<a href="#" class="btn bg-teal-400 dropdown-toggle" data-toggle="dropdown">Submenu on hover</a>

									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<div class="dropdown-submenu">
											<a href="#" class="dropdown-item">More options</a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Second level link</a>
												<div class="dropdown-submenu">
													<a href="#" class="dropdown-item">Second level link</a>
													<div class="dropdown-menu">
														<a href="#" class="dropdown-item">Third level link</a>
														<a href="#" class="dropdown-item">Third level link</a>
														<a href="#" class="dropdown-item">Third level link</a>
													</div>
												</div>
												<a href="#" class="dropdown-item">Second level link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-info">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Dropup menu (on click)</h6>
								<p class="mb-3 text-muted">Change <code>vertical</code> orientation to <code>top</code></p>

								<div class="btn-group justify-content-center">
									<a href="#" class="btn bg-indigo-400 dropdown-toggle" data-toggle="dropdown">Submenu on click</a>

									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<div class="dropdown-submenu dropup">
											<a href="#" class="dropdown-item dropdown-toggle">More options</a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Second level link</a>
												<div class="dropdown-submenu dropup">
													<a href="#" class="dropdown-item dropdown-toggle">Second level link</a>
													<div class="dropdown-menu">
														<a href="#" class="dropdown-item">Third level link</a>
														<a href="#" class="dropdown-item">Third level link</a>
														<a href="#" class="dropdown-item">Third level link</a>
													</div>
												</div>
												<a href="#" class="dropdown-item">Second level link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-info">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Dropup menu (on hover)</h6>
								<p class="mb-3 text-muted">Doesn't work well on mobile devices</p>

								<div class="btn-group justify-content-center">
									<a href="#" class="btn bg-teal-400 dropdown-toggle" data-toggle="dropdown">Submenu on hover</a>

									<div class="dropdown-menu dropup">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<div class="dropdown-submenu dropup">
											<a href="#" class="dropdown-item">More options</a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Second level link</a>
												<div class="dropdown-submenu dropup">
													<a href="#" class="dropdown-item">Second level link</a>
													<div class="dropdown-menu">
														<a href="#" class="dropdown-item">Third level link</a>
														<a href="#" class="dropdown-item">Third level link</a>
														<a href="#" class="dropdown-item">Third level link</a>
													</div>
												</div>
												<a href="#" class="dropdown-item">Second level link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-info">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Left orientation (on click)</h6>
								<p class="mb-3 text-muted">Change <code>horizontal</code> orientation to <code>left</code></p>

								<div class="btn-group justify-content-center">
									<a href="#" class="btn bg-indigo-400 dropdown-toggle" data-toggle="dropdown">Submenu on click</a>

									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<div class="dropdown-submenu dropdown-submenu-left">
											<a href="#" class="dropdown-item dropdown-toggle">More options</a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Second level link</a>
												<div class="dropdown-submenu dropdown-submenu-left">
													<a href="#" class="dropdown-item dropdown-toggle">Second level link</a>
													<div class="dropdown-menu">
														<a href="#" class="dropdown-item">Third level link</a>
														<a href="#" class="dropdown-item">Third level link</a>
														<a href="#" class="dropdown-item">Third level link</a>
													</div>
												</div>
												<a href="#" class="dropdown-item">Second level link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-info">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Left orientation (on hover)</h6>
								<p class="mb-3 text-muted">Change <code>horizontal</code> orientation to <code>left</code></p>

								<div class="btn-group justify-content-center">
									<a href="#" class="btn bg-teal-400 dropdown-toggle" data-toggle="dropdown">Submenu on hover</a>

									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<div class="dropdown-submenu dropdown-submenu-left">
											<a href="#" class="dropdown-item">More options</a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Second level link</a>
												<div class="dropdown-submenu dropdown-submenu-left">
													<a href="#" class="dropdown-item">Second level link</a>
													<div class="dropdown-menu">
														<a href="#" class="dropdown-item">Third level link</a>
														<a href="#" class="dropdown-item">Third level link</a>
														<a href="#" class="dropdown-item">Third level link</a>
													</div>
												</div>
												<a href="#" class="dropdown-item">Second level link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /dropdowns with submenu -->


				<!-- Dropdown sizing -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Additional sizes
					</h6>
					<span class="text-muted d-block">Dropdown sizes with elements</span>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Large menu size</h6>
								<p class="mb-3 text-muted">Using <code>.dropdown-menu-lg</code> class</p>
							</div>

							<div class="dropdown-menu dropdown-menu-lg" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">
									<i class="icon-menu7"></i>
									Action
									<span class="badge bg-primary ml-auto">Added</span>
								</a>
								<a href="#" class="dropdown-item">
									<i class="icon-screen-full"></i>
									Another action
									<span class="badge badge-pill bg-danger ml-auto">98</span>
								</a>
								<a href="#" class="dropdown-item">
									<i class="icon-mail5"></i>
									Something else here
									<span class="ml-auto font-size-lg"><i class="icon-command"></i>F</span>
								</a>
								<div class="dropdown-divider"></div>
								<div class="dropdown-submenu">
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> More options</a>
									<div class="dropdown-menu dropdown-menu-lg">
										<a href="#" class="dropdown-item">Second level link</a>
										<div class="dropdown-submenu">
											<a href="#" class="dropdown-item">Second level link</a>
											<div class="dropdown-menu dropdown-menu-lg">
												<a href="#" class="dropdown-item">Third level link</a>
												<a href="#" class="dropdown-item">Third level link</a>
												<a href="#" class="dropdown-item">Third level link</a>
											</div>
										</div>
										<a href="#" class="dropdown-item">Second level link</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Small menu size</h6>
								<p class="mb-3 text-muted">Using <code>.dropdown-menu-sm</code> class</p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">
									<i class="icon-menu7"></i>
									Action
									<span class="badge bg-primary ml-auto">Added</span>
								</a>
								<a href="#" class="dropdown-item">
									<i class="icon-screen-full"></i>
									Another action
									<span class="badge badge-pill bg-danger ml-auto">98</span>
								</a>
								<a href="#" class="dropdown-item">
									<i class="icon-mail5"></i>
									Something else here
									<span class="ml-auto font-size-lg"><i class="icon-command"></i>F</span>
								</a>
								<div class="dropdown-divider"></div>
								<div class="dropdown-submenu">
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> More options</a>
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Second level link</a>
										<div class="dropdown-submenu">
											<a href="#" class="dropdown-item">Second level link</a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Third level link</a>
												<a href="#" class="dropdown-item">Third level link</a>
												<a href="#" class="dropdown-item">Third level link</a>
											</div>
										</div>
										<a href="#" class="dropdown-item">Second level link</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Mini menu size</h6>
								<p class="mb-3 text-muted">Using <code>.dropdown-menu-xs</code> class</p>
							</div>

							<div class="dropdown-menu dropdown-menu-sm" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">
									<i class="icon-menu7"></i>
									Action
									<span class="badge bg-primary ml-auto">Added</span>
								</a>
								<a href="#" class="dropdown-item">
									<i class="icon-screen-full"></i>
									Another action
									<span class="badge badge-pill bg-danger ml-auto">98</span>
								</a>
								<a href="#" class="dropdown-item">
									<i class="icon-mail5"></i>
									Something else here
									<span class="ml-auto font-size-lg"><i class="icon-command"></i>F</span>
								</a>
								<div class="dropdown-divider"></div>
								<div class="dropdown-submenu dropdown-submenu-left">
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> More options</a>
									<div class="dropdown-menu dropdown-menu-sm">
										<a href="#" class="dropdown-item">Second level link</a>
										<div class="dropdown-submenu dropdown-submenu-left">
											<a href="#" class="dropdown-item">Second level link</a>
											<div class="dropdown-menu dropdown-menu-sm">
												<a href="#" class="dropdown-item">Third level link</a>
												<a href="#" class="dropdown-item">Third level link</a>
												<a href="#" class="dropdown-item">Third level link</a>
											</div>
										</div>
										<a href="#" class="dropdown-item">Second level link</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /dropdown sizing -->


				<!-- Dropdowns with icons -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Dropdown components
					</h6>
					<span class="text-muted d-block">Icons, checkboxes, radios, switches etc.</span>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Left menu item icons</h6>
								<p class="mb-3 text-muted">Dropdown icons in <code>left</code> position</p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
								<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
								<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Something else here</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item"><i class="icon-gear"></i> One more separated line</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Right menu item icons</h6>
								<p class="mb-3 text-muted">Dropdown icons in <code>right</code> position</p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">Action <i class="icon-git-commit mr-0 ml-auto"></i></a>
								<a href="#" class="dropdown-item">Another action <i class="icon-git-branch mr-0 ml-auto"></i></a>
								<a href="#" class="dropdown-item">Something else here <i class="icon-git-compare mr-0 ml-auto"></i></a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">One more separated line <i class="icon-git-merge mr-0 ml-auto"></i></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Icons and text combo</h6>
								<p class="mb-3 text-muted">Combine text and icons for annotations</p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">
									Find
									<span class="ml-auto font-size-lg"><i class="icon-command"></i>F</span>
								</a>
								<a href="#" class="dropdown-item">
									Find Next
									<span class="ml-auto font-size-lg"><i class="icon-command"></i>G</span>
								</a>
								<a href="#" class="dropdown-item">
									Find Previous
									<span class="ml-auto font-size-lg"><i class="icon-shift"></i><i class="icon-command"></i>G</span>
								</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">
									Incremental Find
									<span class="ml-auto font-size-lg"><i class="icon-command"></i>I</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /dropdowns with icons -->


				<!-- Dropdowns with badges -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Dropdown with badges</h6>
								<p class="mb-3 text-muted">Dropdown menu items with <code>badges</code></p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">Action <span class="badge bg-primary ml-auto">Added</span></a>
								<a href="#" class="dropdown-item">Another action <span class="badge bg-danger ml-auto">Bugs</span></a>
								<a href="#" class="dropdown-item">Something else here <span class="badge bg-success ml-auto">Done</span></a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">One more separated line <span class="badge bg-info ml-auto">New</span></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Dropdown with pill badges</h6>
								<p class="mb-3 text-muted">Dropdown menu items with <code>pill badges</code></p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">Action <span class="badge badge-pill bg-success ml-auto">65</span></a>
								<a href="#" class="dropdown-item">Another action <span class="badge badge-pill bg-warning ml-auto">23</span></a>
								<a href="#" class="dropdown-item">Something else here <span class="badge badge-pill bg-primary ml-auto">83</span></a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">One more separated line <span class="badge badge-pill bg-danger ml-auto">98</span></a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Left positioned</h6>
								<p class="mb-3 text-muted">Additional left side placement</p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item"><span class="badge bg-info mr-2">New</span> Action</a>
								<a href="#" class="dropdown-item"><span class="badge bg-success mr-2">Done</span> Another action</a>
								<a href="#" class="dropdown-item"><span class="badge badge-pill bg-primary mr-2">32</span> Something else here</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item"><span class="badge badge-pill bg-warning mr-2">54</span> One more separated line</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /dropdowns with badges -->


				<!-- Dropdowns with checkboxes and radios -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Menu with checkboxes</h6>
								<p class="mb-3 text-muted">Left and right positioned <code>checkboxes</code></p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<div class="dropdown-item form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-input-styled" data-fouc>
										Some action
									</label>
								</div>
								<div class="dropdown-item form-check active">
									<label class="form-check-label">
										<input type="checkbox" class="form-input-styled" checked data-fouc>
										Active action
									</label>
								</div>
								<div class="dropdown-divider"></div>
								<div class="dropdown-item form-check form-check-right disabled">
									<label class="form-check-label">
										<input type="checkbox" class="form-input-styled" checked disabled data-fouc>
										Disabled action
									</label>
								</div>
								<div class="dropdown-item form-check form-check-right">
									<label class="form-check-label">
										<input type="checkbox" class="form-input-styled" data-fouc>
										One more action
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Menu with radios</h6>
								<p class="mb-3 text-muted">Left and right positioned <code>radios</code></p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<div class="dropdown-item form-check">
									<label class="form-check-label">
										<input type="radio" name="dropdown-radio" class="form-input-styled" data-fouc>
										Some action
									</label>
								</div>
								<div class="dropdown-item form-check active">
									<label class="form-check-label">
										<input type="radio" name="dropdown-radio" class="form-input-styled" checked data-fouc>
										Active action
									</label>
								</div>
								<div class="dropdown-divider"></div>
								<div class="dropdown-item form-check form-check-right disabled">
									<label class="form-check-label">
										<input type="radio" class="form-input-styled" checked disabled data-fouc>
										Disabled action
									</label>
								</div>
								<div class="dropdown-item form-check form-check-right">
									<label class="form-check-label">
										<input type="radio" name="dropdown-radio" class="form-input-styled" data-fouc>
										One more action
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Menu with switches</h6>
								<p class="mb-3 text-muted">Left and right positioned <code>switches</code></p>
							</div>

							<div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<div class="dropdown-item form-check form-check-switchery">
									<label class="form-check-label">
										<input type="checkbox" class="form-input-switchery" checked data-fouc>
										Some action
									</label>
								</div>
								<div class="dropdown-item form-check form-check-switchery active">
									<label class="form-check-label">
										<input type="checkbox" class="form-input-switchery" data-fouc>
										Active action
									</label>
								</div>
								<div class="dropdown-divider"></div>
								<div class="dropdown-item form-check form-check-switchery form-check-right disabled">
									<label class="form-check-label">
										<input type="checkbox" class="form-input-switchery" checked disabled data-fouc>
										Disabled action
									</label>
								</div>
								<div class="dropdown-item form-check form-check-switchery form-check-right">
									<label class="form-check-label">
										<input type="checkbox" class="form-input-switchery" data-fouc>
										One more action
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /dropdowns with checkboxes and radios -->


				<!-- Additional styling title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Custom menu colors
					</h6>
					<span class="text-muted d-block">Custom background and state colors</span>
				</div>
				<!-- /additional styling title -->


				<!-- Solid dropdowns -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Solid dropdown menu</h6>
								<p class="mb-3 text-muted">Example of a <code>solid</code> dropdown menu</p>
							</div>

							<div class="dropdown-menu bg-teal-400" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item">Another action</a>
								<a href="#" class="dropdown-item">Something else here</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">One more separated line</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Disabled menu items</h6>
								<p class="mb-3 text-muted">Disable menu items with <code>disabled</code> class</p>
							</div>

							<div class="dropdown-menu bg-teal-400" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item">Another action</a>
								<a href="#" class="dropdown-item disabled">Disabled item</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">One more separated line</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Active menu item</h6>
								<p class="mb-3 text-muted">Set active menu item with <code>active</code> class</p>
							</div>

							<div class="dropdown-menu bg-teal-400" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item active">Active item</a>
								<a href="#" class="dropdown-item">Something else here</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">One more separated line</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /solid dropdowns -->


				<!-- Solid dropdown elements -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Menu item icons</h6>
								<p class="mb-3 text-muted">Left and right positioned icons</p>
							</div>

							<div class="dropdown-menu bg-slate-600" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
								<a href="#" class="dropdown-item active"><i class="icon-screen-full"></i> Active action</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item disabled"><i class="icon-mail5 float-right"></i> Disabled action</a>
								<a href="#" class="dropdown-item"><i class="icon-gear float-right"></i> Separated line</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Checkboxes and radios</h6>
								<p class="mb-3 text-muted">Checkboxes and radios in <code>solid</code> menus</p>
							</div>

							<div class="dropdown-menu bg-slate-600" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<div class="dropdown-item form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-input-styled" data-fouc>
										Action
									</label>
								</div>
								<div class="dropdown-item form-check active">
									<label class="form-check-label">
										<input type="checkbox" class="form-input-styled" checked data-fouc>
										Active action
									</label>
								</div>
								<div class="dropdown-divider"></div>
								<div class="dropdown-item form-check form-check-right disabled">
									<label class="form-check-label">
										<input type="radio" name="radio-solid" class="form-input-styled" checked disabled data-fouc>
										Disabled action
									</label>
								</div>
								<div class="dropdown-item form-check form-check-right">
									<label class="form-check-label">
										<input type="radio" name="radio-solid" class="form-input-styled" data-fouc>
										One more action
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Labels and switches</h6>
								<p class="mb-3 text-muted">Labels, badges and switch toggles</p>
							</div>

							<div class="dropdown-menu bg-slate-600" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">Some badge <span class="badge bg-danger-400 ml-auto">New</span></a>
								<a href="#" class="dropdown-item">And badge pill <span class="badge badge-pill bg-success-400 ml-auto">98</span></a>
								<div class="dropdown-divider"></div>
								<div class="dropdown-item form-check form-check-switchery active">
									<label class="form-check-label">
										<input type="checkbox" class="form-input-switchery" checked data-fouc>
										Active action
									</label>
								</div>
								<div class="dropdown-item form-check form-check-right form-check-switchery">
									<label class="form-check-label">
										<input type="checkbox" class="form-input-switchery" data-fouc>
										One more action
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /solid dropdown elements -->


				<!-- Border options -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Border options
					</h6>
					<span class="text-muted d-block">Optional border customizations</span>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Menu without shadow</h6>
								<p class="mb-3 text-muted">Hide border using <code>.shadow-0</code> class</p>
							</div>

							<div class="dropdown-menu border-1 border-slate-300 shadow-0" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item active">Active menu item</a>
								<a href="#" class="dropdown-item disabled">Something else here</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">One more separated line</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Border color</h6>
								<p class="mb-3 text-muted">Using <code>.border-*</code> class</p>
							</div>

							<div class="dropdown-menu border-1 border-teal-400" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">Action</a></li>
								<a href="#" class="dropdown-item active">Active menu item</a>
								<a href="#" class="dropdown-item disabled">Something else here</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">One more separated line</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Stronger border</h6>
								<p class="mb-3 text-muted">Using <code>.border-2</code> class</p>
							</div>

							<div class="dropdown-menu border-2 border-primary" style="display: block; position: static; width: 100%; margin-top: 0; float: none; z-index: auto;">
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item active">Active menu item</a>
								<a href="#" class="dropdown-item disabled">Something else here</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">One more separated line</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /border options -->

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
