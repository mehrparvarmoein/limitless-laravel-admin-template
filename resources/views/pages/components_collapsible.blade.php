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
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/touch.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/components_collapsible.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Components</span> - Collapsible</h4>
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
							<a href="components_collapsible" class="breadcrumb-item">Components</a>
							<span class="breadcrumb-item active">Collapsible</span>
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

				<!-- Collapsible options -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Collapsible options
					</h6>
					<span class="text-muted d-block">Examples of elements and states</span>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Inline or block element</h6>
								<p class="mb-3 text-muted">Example of inline text toggler</p>

								<span class="font-weight-semibold cursor-pointer" data-toggle="collapse" data-target="#collapse-text">
									Toggle content
								</span>
							</div>

							<div class="collapse" id="collapse-text">
								<div class="mt-3">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Text and other links</h6>
								<p class="mb-3 text-muted">Example of a simple <code>&lt;a></code> element</p>

								<a href="#collapse-link" class="font-weight-semibold" data-toggle="collapse">
									Toggle content
								</a>
							</div>

							<div class="collapse" id="collapse-link">
								<div class="mt-3">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Simgle or multiple icons</h6>
								<p class="mb-3 text-muted">Icons in block or inline elements</p>

								<a href="#collapse-icon" class="text-default" data-toggle="collapse">
									<i class="icon-circle-down2"></i>
								</a>
							</div>

							<div class="collapse" id="collapse-icon">
								<div class="mt-3">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Link with href</h6>
								<p class="mb-3 text-muted">Specify target in <code>href</code> attribute</p>

								<a class="btn btn-primary" data-toggle="collapse" href="#collapse-link-collapsed">
									Toggle content
								</a>
							</div>

							<div class="collapse" id="collapse-link-collapsed">
								<div class="mt-3">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Button with data attribute</h6>
								<p class="mb-3 text-muted">Specify target in <code>data-target</code> attribute</p>

								<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapse-button-collapsed">
									Toggle content
								</button>
							</div>

							<div class="collapse" id="collapse-button-collapsed">
								<div class="mt-3">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Input with data attribute</h6>
								<p class="mb-3 text-muted">Specify target in <code>data-target</code> attribute</p>

								<input type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapse-input-collapsed" value="Toggle content">
							</div>

							<div class="collapse" id="collapse-input-collapsed">
								<div class="mt-3">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Link with href</h6>
								<p class="mb-3 text-muted">Expand content by default</p>

								<a class="btn btn-primary" data-toggle="collapse" href="#collapse-link-expanded">
									Toggle content
								</a>
							</div>

							<div class="collapse show" id="collapse-link-expanded">
								<div class="mt-3">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Button with data attribute</h6>
								<p class="mb-3 text-muted">Expand content by default</p>

								<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapse-button-expanded">
									Toggle content
								</button>
							</div>

							<div class="collapse show" id="collapse-button-expanded">
								<div class="mt-3">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body border-top-1 border-top-pink">
							<div class="text-center">
								<h6 class="font-weight-semibold mb-0">Input with data attribute</h6>
								<p class="mb-3 text-muted">Expand content by default</p>

								<input type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapse-input-expanded" value="Toggle content">
							</div>

							<div class="collapse show" id="collapse-input-expanded">
								<div class="mt-3">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /collapsible options -->


				<!-- Accordion and collapsible -->
				<div class="row">
					<div class="col-lg-6">

						<!-- Basic accordion -->
						<div class="mb-3 pt-2">
							<h6 class="mb-0 font-weight-semibold">
								Basic accordion
							</h6>
							<span class="text-muted d-block">Basic accordion functionality</span>
						</div>

						<div id="accordion-default">
							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a data-toggle="collapse" class="text-default" href="#accordion-item-default1">Accordion Item #1</a>
									</h6>
								</div>

								<div id="accordion-item-default1" class="collapse show" data-parent="#accordion-default">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-default2">Accordion Item #2</a>
									</h6>
								</div>

								<div id="accordion-item-default2" class="collapse" data-parent="#accordion-default">
									<div class="card-body">
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-default3">Accordion Item #3</a>
									</h6>
								</div>

								<div id="accordion-item-default3" class="collapse" data-parent="#accordion-default">
									<div class="card-body">
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>
						<!-- /basic accordion -->


						<!-- Accordion group -->
						<div class="mb-3 pt-2">
							<h6 class="mb-0 font-weight-semibold">
								Accordion group
							</h6>
							<span class="text-muted d-block">Display cards as card group</span>
						</div>

						<div id="accordion-group">
							<div class="card mb-0 rounded-bottom-0">
								<div class="card-header">
									<h6 class="card-title">
										<a data-toggle="collapse" class="text-default" href="#accordion-item-group1">Accordion Item #1</a>
									</h6>
								</div>

								<div id="accordion-item-group1" class="collapse show" data-parent="#accordion-group">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								</div>
							</div>

							<div class="card mb-0 rounded-0 border-y-0">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-group2">Accordion Item #2</a>
									</h6>
								</div>

								<div id="accordion-item-group2" class="collapse" data-parent="#accordion-group">
									<div class="card-body">
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>
								</div>
							</div>

							<div class="card rounded-top-0">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-group3">Accordion Item #3</a>
									</h6>
								</div>

								<div id="accordion-item-group3" class="collapse" data-parent="#accordion-group">
									<div class="card-body">
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>
						<!-- /accordion group -->


						<!-- Accordion with controls -->
						<div class="mb-3 pt-2">
							<h6 class="mb-0 font-weight-semibold">
								Accordion with controls
							</h6>
							<span class="text-muted d-block">Using card controls, except <code>collapse</code></span>
						</div>

						<div class="accordion-sortable" id="accordion-controls">
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">
										<a data-toggle="collapse" class="text-default" href="#accordion-controls-group1">Accordion Item #1</a>
									</h6>

									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="move"></a>
					                		<a class="list-icons-item" data-action="fullscreen"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div id="accordion-controls-group1" class="collapse show" data-parent="#accordion-controls">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#accordion-controls-group2">Accordion Item #2</a>
									</h6>

									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="move"></a>
					                		<a class="list-icons-item" data-action="fullscreen"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div id="accordion-controls-group2" class="collapse" data-parent="#accordion-controls">
									<div class="card-body">
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#accordion-controls-group3">Accordion Item #3</a>
									</h6>

									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="move"></a>
					                		<a class="list-icons-item" data-action="fullscreen"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div id="accordion-controls-group3" class="collapse" data-parent="#accordion-controls">
									<div class="card-body">
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>
						<!-- /accordion with controls -->


						<!-- Accordion with left control button -->
						<div class="mb-3 pt-2">
							<h6 class="mb-0 font-weight-semibold">
								Left control icon
							</h6>
							<span class="text-muted d-block">Using <code>left</code> aligned control icon</span>
						</div>

						<div class="card-group-control card-group-control-left" id="accordion-control">
							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a data-toggle="collapse" class="text-default" href="#accordion-control-group1">Accordion Item #1</a>
									</h6>
								</div>

								<div id="accordion-control-group1" class="collapse show" data-parent="#accordion-control">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#accordion-control-group2">Accordion Item #2</a>
									</h6>
								</div>

								<div id="accordion-control-group2" class="collapse" data-parent="#accordion-control">
									<div class="card-body">
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#accordion-control-group3">Accordion Item #3</a>
									</h6>
								</div>

								<div id="accordion-control-group3" class="collapse" data-parent="#accordion-control">
									<div class="card-body">
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>
						<!-- /accordion with left control button -->


						<!-- Accordion with right control button -->
						<div class="mb-3 pt-2">
							<h6 class="mb-0 font-weight-semibold">
								Right control icon
							</h6>
							<span class="text-muted d-block">Using <code>right</code> aligned control icon</span>
						</div>

						<div class="card-group-control card-group-control-right" id="accordion-control-right">
							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a data-toggle="collapse" class="text-default" href="#accordion-control-right-group1">Accordion Item #1</a>
									</h6>
								</div>

								<div id="accordion-control-right-group1" class="collapse show" data-parent="#accordion-control-right">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#accordion-control-right-group2">Accordion Item #2</a>
									</h6>
								</div>

								<div id="accordion-control-right-group2" class="collapse" data-parent="#accordion-control-right">
									<div class="card-body">
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#accordion-control-right-group3">Accordion Item #3</a>
									</h6>
								</div>

								<div id="accordion-control-right-group3" class="collapse" data-parent="#accordion-control-right">
									<div class="card-body">
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>
						<!-- /accordion with right control button -->


						<!-- Nested accordions -->
						<div class="mb-3 pt-2">
							<h6 class="mb-0 font-weight-semibold">
								Nested accordions
							</h6>
							<span class="text-muted d-block">Multiple accordion levels</span>
						</div>

						<div id="accordion-parent">
							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a data-toggle="collapse" class="text-default" href="#accordion-item-nested-parent1">Parent accordion item #1</a>
									</h6>
								</div>

								<div id="accordion-item-nested-parent1" class="collapse show" data-parent="#accordion-parent">
									<div class="card-body">

										<!-- Child level -->
										<div id="accordion-child1">
											<div class="card">
												<div class="card-header bg-dark">
													<h6 class="card-title">
														<a data-toggle="collapse" class="text-white" href="#accordion-item-nested-child1">Child accordion item #1</a>
													</h6>
												</div>

												<div id="accordion-item-nested-child1" class="collapse show" data-parent="#accordion-child1">
													<div class="card-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
													</div>
												</div>
											</div>

											<div class="card mb-0">
												<div class="card-header bg-dark">
													<h6 class="card-title">
														<a class="collapsed text-white" data-toggle="collapse" href="#accordion-item-nested-child2">Child accordion item #2</a>
													</h6>
												</div>

												<div id="accordion-item-nested-child2" class="collapse" data-parent="#accordion-child1">
													<div class="card-body">
														Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
													</div>
												</div>
											</div>
										</div>
										<!-- /child level -->

									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-nested-parent2">Parent accordion item #2</a>
									</h6>
								</div>

								<div id="accordion-item-nested-parent2" class="collapse" data-parent="#accordion-parent">
									<div class="card-body">

										<!-- Child level -->
										<div id="accordion-child2">
											<div class="card">
												<div class="card-header bg-dark">
													<h6 class="card-title">
														<a data-toggle="collapse" class="text-white" href="#accordion-item-nested-child3">Child accordion item #1</a>
													</h6>
												</div>

												<div id="accordion-item-nested-child3" class="collapse show" data-parent="#accordion-child2">
													<div class="card-body">
														Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
													</div>
												</div>
											</div>

											<div class="card mb-0">
												<div class="card-header bg-dark">
													<h6 class="card-title">
														<a class="collapsed text-white" data-toggle="collapse" href="#accordion-item-nested-child4">Child accordion item #2</a>
													</h6>
												</div>

												<div id="accordion-item-nested-child4" class="collapse" data-parent="#accordion-child2">
													<div class="card-body">
														Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
													</div>
												</div>
											</div>
										</div>
										<!-- /child level -->

									</div>
								</div>
							</div>
						</div>
						<!-- /nested accordions -->


						<!-- Accordion with different card styling -->
						<div class="mb-3 pt-2">
							<h6 class="mb-0 font-weight-semibold">
								Cards styling
							</h6>
							<span class="text-muted d-block">Using different card styles</span>
						</div>

						<div id="accordion-styled">
							<div class="card">
								<div class="card-header bg-danger">
									<h6 class="card-title">
										<a data-toggle="collapse" class="text-white" href="#accordion-styled-group1">Accordion Item #1</a>
									</h6>
								</div>

								<div id="accordion-styled-group1" class="collapse show" data-parent="#accordion-styled">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header bg-teal">
									<h6 class="card-title">
										<a class="collapsed text-white" data-toggle="collapse" href="#accordion-styled-group2">Accordion Item #2</a>
									</h6>
								</div>

								<div id="accordion-styled-group2" class="collapse" data-parent="#accordion-styled">
									<div class="card-body">
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header bg-primary">
									<h6 class="card-title">
										<a class="collapsed text-white" data-toggle="collapse" href="#accordion-styled-group3">Accordion Item #3</a>
									</h6>
								</div>

								<div id="accordion-styled-group3" class="collapse" data-parent="#accordion-styled">
									<div class="card-body">
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>
						<!-- /accordion with different card styling -->

					</div>

					<div class="col-lg-6">

						<!-- Basic collapsible -->
						<div class="mb-3 pt-2">
							<h6 class="mb-0 font-weight-semibold">
								Basic collapsible
							</h6>
							<span class="text-muted d-block">Basic collapsible functionality</span>
						</div>

						<div>
							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a data-toggle="collapse" class="text-default" href="#collapse-item-default1">Collapsible Item #1</a>
									</h6>
								</div>

								<div id="collapse-item-default1" class="collapse show">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#collapse-item-default2">Collapsible Item #2</a>
									</h6>
								</div>

								<div id="collapse-item-default2" class="collapse">
									<div class="card-body">
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#collapse-item-default3">Collapsible Item #3</a>
									</h6>
								</div>

								<div id="collapse-item-default3" class="collapse">
									<div class="card-body">
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>
						<!-- /basic collapsible -->


						<!-- Collapsible group -->
						<div class="mb-3 pt-2">
							<h6 class="mb-0 font-weight-semibold">
								Collapsible group
							</h6>
							<span class="text-muted d-block">Display cards as card group</span>
						</div>

						<div>
							<div class="card mb-0 rounded-bottom-0">
								<div class="card-header">
									<h6 class="card-title">
										<a data-toggle="collapse" class="text-default" href="#collapsible-item-group1">Collapsible Item #1</a>
									</h6>
								</div>

								<div id="collapsible-item-group1" class="collapse show">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								</div>
							</div>

							<div class="card mb-0 rounded-0 border-y-0">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#collapsible-item-group2">Collapsible Item #2</a>
									</h6>
								</div>

								<div id="collapsible-item-group2" class="collapse">
									<div class="card-body">
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>
								</div>
							</div>

							<div class="card rounded-top-0">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#collapsible-item-group3">Collapsible Item #3</a>
									</h6>
								</div>

								<div id="collapsible-item-group3" class="collapse">
									<div class="card-body">
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>
						<!-- /collapsible group -->


						<!-- Collapsible with controls -->
						<div class="mb-3 pt-2">
							<h6 class="mb-0 font-weight-semibold">
								Collapsible with controls
							</h6>
							<span class="text-muted d-block">Using all card controls, except <code>collapse</code></span>
						</div>

						<div class="collapsible-sortable">
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">
										<a data-toggle="collapse" class="text-default" href="#collapsible-controls-group1">Collapsible Item #1</a>
									</h6>

									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="move"></a>
					                		<a class="list-icons-item" data-action="fullscreen"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div id="collapsible-controls-group1" class="collapse show">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#collapsible-controls-group2">Collapsible Item #2</a>
									</h6>

									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="move"></a>
					                		<a class="list-icons-item" data-action="fullscreen"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div id="collapsible-controls-group2" class="collapse">
									<div class="card-body">
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#collapsible-controls-group3">Collapsible Item #3</a>
									</h6>

									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="move"></a>
					                		<a class="list-icons-item" data-action="fullscreen"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div id="collapsible-controls-group3" class="collapse">
									<div class="card-body">
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>
						<!-- /collapsible with controls -->


						<!-- Collapsible with left control button -->
						<div class="mb-3 pt-2">
							<h6 class="mb-0 font-weight-semibold">
								Left control icon
							</h6>
							<span class="text-muted d-block">Using <code>left</code> aligned control icon</span>
						</div>

						<div class="card-group-control card-group-control-left">
							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a data-toggle="collapse" class="text-default" href="#collapsible-control-group1">Collapsible Item #1</a>
									</h6>
								</div>

								<div id="collapsible-control-group1" class="collapse show">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#collapsible-control-group2">Collapsible Item #2</a>
									</h6>
								</div>

								<div id="collapsible-control-group2" class="collapse">
									<div class="card-body">
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#collapsible-control-group3">Collapsible Item #3</a>
									</h6>
								</div>

								<div id="collapsible-control-group3" class="collapse">
									<div class="card-body">
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>
						<!-- /collapsible with left control button -->


						<!-- Collapsible with right control button -->
						<div class="mb-3 pt-2">
							<h6 class="mb-0 font-weight-semibold">
								Right control icon
							</h6>
							<span class="text-muted d-block">Using <code>right</code> aligned control icon</span>
						</div>

						<div class="card-group-control card-group-control-right">
							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a data-toggle="collapse" class="text-default" href="#collapsible-control-right-group1">Collapsible Item #1</a>
									</h6>
								</div>

								<div id="collapsible-control-right-group1" class="collapse show">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#collapsible-control-right-group2">Collapsible Item #2</a>
									</h6>
								</div>

								<div id="collapsible-control-right-group2" class="collapse">
									<div class="card-body">
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#collapsible-control-right-group3">Collapsible Item #3</a>
									</h6>
								</div>

								<div id="collapsible-control-right-group3" class="collapse">
									<div class="card-body">
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>
						<!-- /collapsible with right control button -->


						<!-- Nested collapsibles -->
						<div class="mb-3 pt-2">
							<h6 class="mb-0 font-weight-semibold">
								Nested collapsibles
							</h6>
							<span class="text-muted d-block">Multiple collapsible levels</span>
						</div>

						<div>
							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a data-toggle="collapse" class="text-default" href="#collapsible-item-nested-parent1">Parent collapsible item #1</a>
									</h6>
								</div>

								<div id="collapsible-item-nested-parent1" class="collapse show">
									<div class="card-body">

										<!-- Child level -->
										<div class="card">
											<div class="card-header bg-dark">
												<h6 class="card-title">
													<a data-toggle="collapse" class="text-white" href="#collapsible-item-nested-child1">Child collapsible item #1</a>
												</h6>
											</div>

											<div id="collapsible-item-nested-child1" class="collapse show">
												<div class="card-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
												</div>
											</div>
										</div>

										<div class="card mb-0">
											<div class="card-header bg-dark">
												<h6 class="card-title">
													<a class="collapsed text-white" data-toggle="collapse" href="#collapsible-item-nested-child2">Child collapsible item #2</a>
												</h6>
											</div>

											<div id="collapsible-item-nested-child2" class="collapse">
												<div class="card-body">
													Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
												</div>
											</div>
										</div>
										<!-- /child level -->

									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h6 class="card-title">
										<a class="collapsed text-default" data-toggle="collapse" href="#collapsible-item-nested-parent2">Parent collapsible item #2</a>
									</h6>
								</div>

								<div id="collapsible-item-nested-parent2" class="collapse">
									<div class="card-body">

										<!-- Child level -->
										<div class="card">
											<div class="card-header bg-dark">
												<h6 class="card-title">
													<a data-toggle="collapse" class="text-white" href="#collapsible-item-nested-child3">Child collapsible item #1</a>
												</h6>
											</div>

											<div id="collapsible-item-nested-child3" class="collapse show">
												<div class="card-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
												</div>
											</div>
										</div>

										<div class="card mb-0">
											<div class="card-header bg-dark">
												<h6 class="card-title">
													<a class="collapsed text-white" data-toggle="collapse" href="#collapsible-item-nested-child4">Child collapsible item #2</a>
												</h6>
											</div>

											<div id="collapsible-item-nested-child4" class="collapse">
												<div class="card-body">
													Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
												</div>
											</div>
										</div>
										<!-- /child level -->

									</div>
								</div>
							</div>
						</div>
						<!-- /nested collapsibles -->


						<!-- Collapsible with different card styling -->
						<div class="mb-3 pt-2">
							<h6 class="mb-0 font-weight-semibold">
								Cards styling
							</h6>
							<span class="text-muted d-block">Using different card styles</span>
						</div>

						<div>
							<div class="card">
								<div class="card-header bg-info">
									<h6 class="card-title">
										<a data-toggle="collapse" class="text-white" href="#collapsible-styled-group1">Collapsible Item #1</a>
									</h6>
								</div>
								<div id="collapsible-styled-group1" class="collapse show">
									<div class="card-body">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header bg-slate">
									<h6 class="card-title">
										<a class="collapsed text-white" data-toggle="collapse" href="#collapsible-styled-group2">Collapsible Item #2</a>
									</h6>
								</div>
								<div id="collapsible-styled-group2" class="collapse">
									<div class="card-body">
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header bg-purple">
									<h6 class="card-title">
										<a class="collapsed text-white" data-toggle="collapse" href="#collapsible-styled-group3">Collapsible Item #3</a>
									</h6>
								</div>
								<div id="collapsible-styled-group3" class="collapse">
									<div class="card-body">
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>
						<!-- /collapsible with different card styling -->

					</div>
				</div>
				<!-- /accordion and collapsible -->

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
