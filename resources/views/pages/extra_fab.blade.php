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
	<script src="../../../../global_assets/js/plugins/ui/fab.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/sticky.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/extra_fab.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Extra</span> - FAB Menu</h4>
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
							<a href="extra_fab" class="breadcrumb-item">Extra</a>
							<span class="breadcrumb-item active">FAB menu</span>
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

				<!-- Bottom right menu -->
				<ul class="fab-menu fab-menu-fixed fab-menu-bottom-right" data-fab-toggle="click">
					<li>
						<a class="fab-menu-btn btn bg-teal-400 btn-float rounded-round btn-icon">
							<i class="fab-icon-open icon-paragraph-justify3"></i>
							<i class="fab-icon-close icon-cross2"></i>
						</a>

						<ul class="fab-menu-inner">
							<li>
								<div data-fab-label="Compose email">
									<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
										<i class="icon-pencil"></i>
									</a>
								</div>
							</li>
							<li>
								<div data-fab-label="Conversations">
									<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
										<i class="icon-bubbles3"></i>
									</a>
									<span class="badge bg-primary-400">5</span>
								</div>
							</li>
							<li>
								<div data-fab-label="Chat with Jack">
									<a href="#" class="btn bg-pink-400 rounded-round btn-icon btn-float">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded-circle" alt="">
									</a>
									<span class="badge badge-mark border-pink-400"></span>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				<!-- /bottom right menu -->


				<!-- Bottom left menu -->
				<ul class="fab-menu fab-menu-fixed fab-menu-bottom-left" data-fab-toggle="click">
					<li>
						<a class="fab-menu-btn btn bg-danger-400 btn-float rounded-round btn-icon">
							<i class="fab-icon-open icon-cog52"></i>
							<i class="fab-icon-close icon-cross2"></i>
						</a>

						<ul class="fab-menu-inner">
							<li>
								<div data-fab-label="Compose email">
									<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
										<i class="icon-pencil"></i>
									</a>
								</div>
							</li>
							<li>
								<div data-fab-label="Conversations">
									<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
										<i class="icon-bubbles3"></i>
									</a>
									<span class="badge bg-primary-400">5</span>
								</div>
							</li>
							<li>
								<div data-fab-label="Chat with Jack">
									<a href="#" class="btn bg-pink-400 rounded-round btn-icon btn-float">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded-circle" alt="">
									</a>
									<span class="badge badge-mark border-pink-400"></span>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				<!-- /bottom left menu -->


				<!-- Top left menu -->
				<ul class="fab-menu fab-menu-absolute fab-menu-top-left" data-fab-toggle="hover" id="fab-menu-affixed-demo-left">
					<li>
						<a class="fab-menu-btn btn bg-indigo-400 btn-float rounded-round btn-icon">
							<i class="fab-icon-open icon-checkmark3"></i>
							<i class="fab-icon-close icon-cross2"></i>
						</a>

						<ul class="fab-menu-inner">
							<li>
								<div data-fab-label="Compose email">
									<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
										<i class="icon-pencil"></i>
									</a>
								</div>
							</li>
							<li>
								<div data-fab-label="Conversations">
									<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
										<i class="icon-bubbles3"></i>
									</a>
									<span class="badge bg-primary-400">5</span>
								</div>
							</li>
							<li>
								<div data-fab-label="Chat with Jack">
									<a href="#" class="btn bg-pink-400 rounded-round btn-icon btn-float">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded-circle" alt="">
									</a>
									<span class="badge badge-mark border-pink-400"></span>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				<!-- /top left menu -->


				<!-- Top right menu -->
				<ul class="fab-menu fab-menu-absolute fab-menu-top-right" data-fab-toggle="hover" id="fab-menu-affixed-demo-right">
					<li>
						<a class="fab-menu-btn btn bg-pink-300 btn-float rounded-round btn-icon">
							<i class="fab-icon-open icon-grid3"></i>
							<i class="fab-icon-close icon-cross2"></i>
						</a>

						<ul class="fab-menu-inner">
							<li>
								<div data-fab-label="Compose email">
									<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
										<i class="icon-pencil"></i>
									</a>
								</div>
							</li>
							<li>
								<div data-fab-label="Conversations">
									<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
										<i class="icon-bubbles3"></i>
									</a>
									<span class="badge bg-primary-400">5</span>
								</div>
							</li>
							<li>
								<div data-fab-label="Chat with Jack">
									<a href="#" class="btn bg-pink-400 rounded-round btn-icon btn-float">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded-circle" alt="">
									</a>
									<span class="badge badge-mark border-pink-400"></span>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				<!-- /top right menu -->


				<!-- Floating action button overview -->
				<div class="card mb-4">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Floating action button</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>
				
					<div class="card-body" data-toggle="context" data-target=".context-data-menu">
						<p class="mb-3">Floating action button (FAB) menu - very useful component to display a single floating button with or without nested menu. Supports plenty of different styling, interaction and direction options and can be added nearly to any container within page layout or to page itself. By default, it supports top and bottom menu direction, but can be easily extended to left and right directions with simple CSS additions. Inner elements can be either buttons with single icon or image thumbnails.</p>
						<p class="font-weight-semibold">Default FAB menu markup:</p>
					<pre class="language-markup mb-3"><code>&lt;!-- Clickable menu -->
&lt;ul class="fab-menu" data-fab-toggle="click">
	&lt;li>
		&lt;a class="fab-menu-btn btn bg-blue btn-float rounded-round btn-icon">
			&lt;i class="fab-icon-open icon-plus3">&lt;/i>
			&lt;i class="fab-icon-close icon-cross2">&lt;/i>
		&lt;/a>

		&lt;ul class="fab-menu-inner">
			&lt;li>
				&lt;div data-fab-label="Compose email">
					&lt;a href="#" class="btn btn-light rounded-round btn-icon btn-float">
						&lt;i class="icon-pencil">&lt;/i>
					&lt;/a>
				&lt;/div>
			&lt;/li>
			&lt;li>
				&lt;div data-fab-label="Conversations">
					&lt;a href="#" class="btn btn-light rounded-round btn-icon btn-float">
						&lt;i class="icon-bubbles3">&lt;/i>
					&lt;/a>
					&lt;span class="badge bg-primary-400">5&lt;/span>
				&lt;/div>
			&lt;/li>
		&lt;/ul>
	&lt;/li>
&lt;/ul>
&lt;!-- /clickable menu -->
</code></pre>
					</div>
				</div>
				<!-- /floating action button overview -->


				<!-- Basic examples -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Basic examples
					</h6>
					<span class="text-muted d-block">Default FAB menu usage</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Single floating button</h6>
							<p class="mb-3 text-muted">Single clickable button without menu</p>

							<div>
								<ul class="fab-menu">
									<li>
										<a href="#" class="fab-menu-btn btn bg-blue btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Open menu on hover</h6>
							<p class="mb-3 text-muted">Example of hoverable FAB menu</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="hover">
									<li>
										<button type="button" class="fab-menu-btn btn bg-blue btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div>
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
												</div>
											</li>
											<li>
												<div>
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Open menu on click</h6>
							<p class="mb-3 text-muted">Example of clickable FAB menu</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn bg-blue btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div>
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
												</div>
											</li>
											<li>
												<div>
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /basic examples -->


				<!-- Menu elements -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						FAB menu elements
					</h6>
					<span class="text-muted d-block">Buttons, dropdowns and images</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Simple buttons</h6>
							<p class="mb-3 text-muted">Rounded buttons with icons</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn bg-blue btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div>
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
												</div>
											</li>
											<li>
												<div>
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Button with dropdowns</h6>
							<p class="mb-3 text-muted">Buttons with left/right dropdowns</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn bg-blue btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div class="dropleft">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float dropdown-toggle caret-0" data-toggle="dropdown">
														<i class="icon-menu7"></i>
													</a>
													<div class="dropdown-menu">
														<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
														<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
														<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
													</div>
												</div>
											</li>
											<li>
												<div class="dropright">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float dropdown-toggle caret-0" data-toggle="dropdown">
														<i class="icon-menu"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
														<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
														<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
													</div>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Button with images</h6>
							<p class="mb-3 text-muted">Display thumbs instead of buttons</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn bg-blue btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div>
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded-circle" alt="">
													</a>
												</div>
											</li>
											<li>
												<div>
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded-circle" alt="">
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /menu elements -->


				<!-- Inner button elements -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Inner button elements
					</h6>
					<span class="text-muted d-block">Badges, labels and status marks</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Badges with number</h6>
							<p class="mb-3 text-muted">Badge elements on top right corner</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn bg-blue btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div>
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
													<span class="badge bg-pink-300">5</span>
												</div>
											</li>
											<li>
												<div>
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
													<span class="badge bg-success-400 badge-pill">8</span>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Badge mark</h6>
							<p class="mb-3 text-muted">Rounded badge mark sign</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn bg-blue btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div>
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
													<span class="badge badge-mark bg-pink-400 border-pink-400"></span>
												</div>
											</li>
											<li>
												<div>
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
													<span class="badge badge-mark bg-pink-400 border-pink-400"></span>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Circle badge mark</h6>
							<p class="mb-3 text-muted">Circle mark on top right corner</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn bg-blue btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div>
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
													<span class="badge badge-mark border-pink-400"></span>
												</div>
											</li>
											<li>
												<div>
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
													<span class="badge badge-mark border-pink-400"></span>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /inner button elements -->


				<!-- Inner button labels -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Inner button labels
					</h6>
					<span class="text-muted d-block">Display tooltips on left/right sides</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Label positions</h6>
							<p class="mb-3 text-muted">Left and right label positions</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn bg-blue btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div data-fab-label="Compose email">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
												</div>
											</li>
											<li>
												<div class="fab-label-right" data-fab-label="Conversations">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Light labels</h6>
							<p class="mb-3 text-muted">Change label color from dark to light</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn bg-blue btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div class="fab-label-light" data-fab-label="Compose email">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
												</div>
											</li>
											<li>
												<div class="fab-label-light" data-fab-label="Conversations">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Visible labels</h6>
							<p class="mb-3 text-muted">Always display button labels</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn bg-blue btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div class="fab-label-visible" data-fab-label="Compose email">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
												</div>
											</li>
											<li>
												<div class="fab-label-visible fab-label-light" data-fab-label="Conversations">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /inner button labels -->


				<!-- Default button colors -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Default button colors
					</h6>
					<span class="text-muted d-block">Pre-defined contextual colors</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Default button color</h6>
							<p class="mb-3 text-muted">Default color using <code>.btn-light</code> class</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click" style="z-index: 1002;">
									<li>
										<button type="button" class="fab-menu-btn btn btn-light btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div data-fab-label="Compose email">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
												</div>
											</li>
											<li>
												<div data-fab-label="Conversations">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Success button color</h6>
							<p class="mb-3 text-muted">Success color using <code>.btn-success</code> class</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn btn-success btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div data-fab-label="Compose email">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
												</div>
											</li>
											<li>
												<div data-fab-label="Conversations">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Primary button color</h6>
							<p class="mb-3 text-muted">Primary color using <code>.btn-primary</code> class</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click" style="z-index: 1002;">
									<li>
										<button type="button" class="fab-menu-btn btn btn-primary btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div data-fab-label="Compose email">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
												</div>
											</li>
											<li>
												<div data-fab-label="Conversations">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Warning button color</h6>
							<p class="mb-3 text-muted">Warning color using <code>.btn-warning</code> class</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn btn-warning btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div data-fab-label="Compose email">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
												</div>
											</li>
											<li>
												<div data-fab-label="Conversations">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Danger button color</h6>
							<p class="mb-3 text-muted">Danger color using <code>.btn-danger</code> class</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click" style="z-index: 1002;">
									<li>
										<button type="button" class="fab-menu-btn btn btn-danger btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div data-fab-label="Compose email">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
												</div>
											</li>
											<li>
												<div data-fab-label="Conversations">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Info button color</h6>
							<p class="mb-3 text-muted">Info color using <code>.btn-info</code> class</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn btn-info btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div data-fab-label="Compose email">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
												</div>
											</li>
											<li>
												<div data-fab-label="Conversations">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /default button colors -->


				<!-- Custom color options -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Custom color options
					</h6>
					<span class="text-muted d-block">Use custom color in main and inner buttons</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Custom main button color</h6>
							<p class="mb-3 text-muted">Use color helper classes for custom colors</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn bg-teal-400 btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div data-fab-label="Compose email">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
												</div>
											</li>
											<li>
												<div data-fab-label="Conversations">
													<a href="#" class="btn btn-light rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Custom inner button color</h6>
							<p class="mb-3 text-muted">Use color helper classes for custom colors</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn btn-light btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div>
													<a href="#" class="btn bg-indigo-400 rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
												</div>
											</li>
											<li>
												<div>
													<a href="#" class="btn bg-indigo-400 rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Mixing button colors</h6>
							<p class="mb-3 text-muted">Feel free to mix all button colors</p>

							<div>
								<ul class="fab-menu fab-menu-top" data-fab-toggle="click">
									<li>
										<button type="button" class="fab-menu-btn btn bg-brown btn-float rounded-round btn-icon">
											<i class="fab-icon-open icon-plus3"></i>
											<i class="fab-icon-close icon-cross2"></i>
										</button>

										<ul class="fab-menu-inner">
											<li>
												<div>
													<a href="#" class="btn bg-teal-400 rounded-round btn-icon btn-float">
														<i class="icon-pencil"></i>
													</a>
												</div>
											</li>
											<li>
												<div>
													<a href="#" class="btn bg-warning-400 rounded-round btn-icon btn-float">
														<i class="icon-bubbles3"></i>
													</a>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /custom color options -->


				<!-- FAB menu classes -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">FAB menu classes</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						FAB menu styling is fully controlled by CSS. you can apply different color and button styling options directly in markup. Direction and display options are also can be changed on the fly just by replacing data attributes or class names in main container. Please note: clickable menu requires <code>material.min.js</code> file. Table below demonstrates all available classes that can be used with the FAB menu:
					</div>

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th style="width: 20%;">Class</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-active">
									<th colspan="2">Basic classes</th>
								</tr>
								<tr>
									<td><code>.fab-menu</code></td>
									<td>Default menu class name, added to <code>&lt;ul></code> element</td>
								</tr>
								<tr>
									<td><code>.fab-menu-inner</code></td>
									<td>Container class for inner menu list, added to inner <code>&lt;ul></code> element</td>
								</tr>
								<tr>
									<td><code>.fab-icon-open</code></td>
									<td>Icon visible by default, hidden when menu opened</td>
								</tr>
								<tr>
									<td><code>.fab-icon-close</code></td>
									<td>Icon that appears when menu is opened, hidden when menu closed</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="2">Positions and directions</th>
								</tr>
								<tr>
									<td><code>.fab-menu-top</code></td>
									<td>Static button, menu opens <strong>below</strong> the button</td>
								</tr>
								<tr>
									<td><code>.fab-menu-bottom</code></td>
									<td>Static button, menu opens <strong>above</strong> the button</td>
								</tr>
								<tr>
									<td><code>.fab-menu-top-left</code></td>
									<td>Top left position. Can have absolute and fixed positions, also can be sticked to top on page scroll</td>
								</tr>
								<tr>
									<td><code>.fab-menu-top-right</code></td>
									<td>Top right position. Can have absolute and fixed positions, also can be sticked to top on page scroll</td>
								</tr>
								<tr>
									<td><code>.fab-menu-bottom-left</code></td>
									<td>Bottom left position. Can have absolute and fixed positions</td>
								</tr>
								<tr>
									<td><code>.fab-menu-bottom-right</code></td>
									<td>Bottom right position. Can have absolute and fixed positions</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="2">Menu positioning</th>
								</tr>
								<tr>
									<td><code>.fab-menu-absolute</code></td>
									<td>Absolute positioning. Can be used in any container</td>
								</tr>
								<tr>
									<td><code>.fab-menu-fixed</code></td>
									<td>Fixed positioning. Can be used in main container only, relative to page layout</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="2">Menu visibility</th>
								</tr>
								<tr>
									<td><code>data-fab-toggle="click"</code></td>
									<td>Open menu on <strong>click</strong>. Applies to main menu container that has <code>.fab-menu</code> class</td>
								</tr>
								<tr>
									<td><code>data-fab-toggle="hover"</code></td>
									<td>Open menu on <strong>hover</strong>. Applies to main menu container that has <code>.fab-menu</code> class</td>
								</tr>
								<tr>
									<td><code>data-fab-state="opened"</code></td>
									<td>Display menu on page load. Works only with <code>data-fab-toggle="click"</code> option</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="2">Inner button labels</th>
								</tr>
								<tr>
									<td><code>data-fab-label="..."</code></td>
									<td>Text label to display on inner button hover. Must be added to <code>&lt;div></code> element inside inner menu item</td>
								</tr>
								<tr>
									<td><code>.fab-label-right</code></td>
									<td>Display labels on the right side. Default position is left. Must be added to <code>&lt;div></code> element inside inner menu item</td>
								</tr>
								<tr>
									<td><code>.fab-label-light</code></td>
									<td>Use this class if you want to display light labels instead of default dark. Must be added to <code>&lt;div></code> element inside inner menu item</td>
								</tr>
								<tr>
									<td><code>.fab-label-visible</code></td>
									<td>By default, all labels appear on hover. To make them always visible, add this class to <code>&lt;div></code> element inside inner menu item</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /FAB menu classes -->

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
