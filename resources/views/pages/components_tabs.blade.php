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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Components</span> - Tabs</h4>
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
							<a href="components_tabs" class="breadcrumb-item">Components</a>
							<span class="breadcrumb-item active">Tabs</span>
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

				<!-- Basic tabs title -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Basic tabs layout
					</h6>
					<span class="text-muted d-block">Default tabs layout options</span>
				</div>
				<!-- /basic tabs title -->


				<!-- Basic tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs">
									<li class="nav-item"><a href="#basic-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#basic-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#basic-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#basic-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="basic-tab1">
										Basic tabs example using <code>.nav-tabs</code> class. Also requires base <code>.nav</code> class.
									</div>

									<div class="tab-pane fade" id="basic-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="basic-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="basic-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-justified">
									<li class="nav-item"><a href="#basic-justified-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#basic-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#basic-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#basic-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="basic-justified-tab1">
										Easily make tabs equal widths of their parent with <code>.nav-justified</code> class.
									</div>

									<div class="tab-pane fade" id="basic-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="basic-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="basic-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /basic tabs -->


				<!-- Rounded basic tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic rounded</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs">
									<li class="nav-item"><a href="#basic-rounded-tab1" class="nav-link rounded-top active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#basic-rounded-tab2" class="nav-link rounded-top" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link rounded-top dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#basic-rounded-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#basic-rounded-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="basic-rounded-tab1">
										Use <code>.rounded-top</code> class in <code>.nav-link</code> container to round top corners.
									</div>

									<div class="tab-pane fade" id="basic-rounded-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="basic-rounded-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="basic-rounded-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified rounded</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-justified">
									<li class="nav-item"><a href="#basic-rounded-justified-tab1" class="nav-link rounded-top active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#basic-rounded-justified-tab2" class="nav-link rounded-top" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link rounded-top dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#basic-rounded-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#basic-rounded-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="basic-rounded-justified-tab1">
										For justified tabs use <code>.nav-justified</code> added to <code>.nav</code> container.
									</div>

									<div class="tab-pane fade" id="basic-rounded-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="basic-rounded-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="basic-rounded-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /rounded basic tabs -->


				<!-- Highlighted tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Highlighted tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight">
									<li class="nav-item"><a href="#highlight-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#highlighted-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#highlighted-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#highlighted-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="highlighted-tab1">
										Highlight top border of the active tab by adding <code>.nav-tabs-highlight</code> class.
									</div>

									<div class="tab-pane fade" id="highlighted-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="highlighted-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="highlighted-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Highlighted justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
									<li class="nav-item"><a href="#highlighted-justified-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#highlighted-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#highlighted-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#highlighted-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="highlighted-justified-tab1">
										To use in tabs with equal widths add <code>.nav-justified .nav-tabs-highlight</code> classes.
									</div>

									<div class="tab-pane fade" id="highlighted-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="highlighted-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="highlighted-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /highlighted tabs -->



				<!-- Tabs with top line -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Top line tabs
					</h6>
					<span class="text-muted d-block">Display only <code>top</code> border in active tab</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Top line tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-top">
									<li class="nav-item"><a href="#top-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#top-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#top-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#top-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="top-tab1">
										Add <code>top</code> border to the active tab with <code>.nav-tabs-top</code> class.
									</div>

									<div class="tab-pane fade" id="top-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="top-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="top-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Top line divided</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-top border-bottom-0">
									<li class="nav-item"><a href="#top-divided-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#top-divided-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#top-divided-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#top-divided-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="top-divided-tab1">
										Hide bottom border in top line layout by adding <code>.border-bottom-0</code> class.
									</div>

									<div class="tab-pane fade" id="top-divided-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="top-divided-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="top-divided-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Top line justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-top nav-justified">
									<li class="nav-item"><a href="#top-justified-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#top-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#top-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#top-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="top-justified-tab1">
										To use in tabs with equal widths add <code>.nav-justified .nav-tabs-top</code> classes.
									</div>

									<div class="tab-pane fade" id="top-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="top-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="top-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Top line divided/justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-top border-bottom-0 nav-justified">
									<li class="nav-item"><a href="#top-justified-divided-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#top-justified-divided-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#top-justified-divided-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#top-justified-divided-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="top-justified-divided-tab1">
										To use in tabs with equal widths add <code>.nav-justified .nav-tabs-top .border-bottom-0</code> classes.
									</div>

									<div class="tab-pane fade" id="top-justified-divided-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="top-justified-divided-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="top-justified-divided-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /tabs with top line -->



				<!-- Tabs with bottom line -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Bottom line tabs
					</h6>
					<span class="text-muted d-block">Display only <code>bottom</code> border in active tab</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bottom line tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item"><a href="#bottom-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bottom-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bottom-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#bottom-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="bottom-tab1">
										Add <code>bottom</code> border to the active tab with <code>.nav-tabs-bottom</code> class.
									</div>

									<div class="tab-pane fade" id="bottom-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bottom-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bottom-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bottom line divided</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom border-bottom-0">
									<li class="nav-item"><a href="#bottom-divided-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bottom-divided-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bottom-divided-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#bottom-divided-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="bottom-divided-tab1">
										Hide bottom border in bottom line layout by adding <code>.border-bottom-0</code> class.
									</div>

									<div class="tab-pane fade" id="bottom-divided-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bottom-divided-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bottom-divided-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bottom line justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item"><a href="#bottom-justified-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bottom-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bottom-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#bottom-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="bottom-justified-tab1">
										To use in tabs with equal widths add <code>.nav-justified .nav-tabs-bottom</code> classes.
									</div>

									<div class="tab-pane fade" id="bottom-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bottom-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bottom-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bottom line divided/justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom border-bottom-0 nav-justified">
									<li class="nav-item"><a href="#bottom-justified-divided-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bottom-justified-divided-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bottom-justified-divided-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#bottom-justified-divided-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="bottom-justified-divided-tab1">
										To use in tabs with equal widths add <code>.nav-justified .nav-tabs-bottom .border-bottom-0</code> classes.
									</div>

									<div class="tab-pane fade" id="bottom-justified-divided-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bottom-justified-divided-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bottom-justified-divided-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /tabs with bottom line -->



				<!-- Vertical tabs -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Vertical tabs
					</h6>
					<span class="text-muted d-block">Display tabs nav on left or right side</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Left side placement</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="d-md-flex">
									<ul class="nav nav-tabs nav-tabs-vertical flex-column mr-md-3 wmin-md-200 mb-md-0 border-bottom-0">
										<li class="nav-item"><a href="#vertical-left-tab1" class="nav-link" data-toggle="tab"><i class="icon-menu7 mr-2"></i> Active</a></li>
										<li class="nav-item"><a href="#vertical-left-tab2" class="nav-link" data-toggle="tab"><i class="icon-mention mr-2"></i> Inactive</a></li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5 mr-2"></i> Dropdown</a>
											<div class="dropdown-menu">
												<a href="#vertical-left-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
												<a href="#vertical-left-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
											</div>
										</li>
									</ul>

									<div class="tab-content">
										<div class="tab-pane fade show active" id="vertical-left-tab1">
											Basic vertical tabs with left nav using <code>.nav-tabs-vertical</code> class.
										</div>

										<div class="tab-pane fade" id="vertical-left-tab2">
											Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
										</div>

										<div class="tab-pane fade" id="vertical-left-tab3">
											DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
										</div>

										<div class="tab-pane fade" id="vertical-left-tab4">
											Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Right side placement</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="d-md-flex">
									<div class="tab-content">
										<div class="tab-pane fade show active" id="vertical-right-tab1">
											Basic vertical tabs with right nav using <code>.nav-tabs-vertical nav-tabs-vertical-right</code> class.
										</div>

										<div class="tab-pane fade" id="vertical-right-tab2">
											Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
										</div>

										<div class="tab-pane fade" id="vertical-right-tab3">
											DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
										</div>

										<div class="tab-pane fade" id="vertical-right-tab4">
											Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
										</div>
									</div>

									<ul class="nav nav-tabs nav-tabs-vertical nav-tabs-vertical-right flex-column ml-md-3 wmin-md-200 mb-0 mt-3 mt-md-0 border-bottom-0">
										<li class="nav-item"><a href="#vertical-right-tab1" class="nav-link" data-toggle="tab">Active</a></li>
										<li class="nav-item"><a href="#vertical-right-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
											<div class="dropdown-menu">
												<a href="#vertical-right-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
												<a href="#vertical-right-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /vertical tabs -->



				<!-- Solid tabs title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Solid tabs
					</h6>
					<span class="text-muted d-block">Add visual difference to the tabs</span>
				</div>
				<!-- /solid tabs title -->


				<!-- Solid tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Solid tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid border-0">
									<li class="nav-item"><a href="#solid-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#solid-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#solid-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#solid-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="solid-tab1">
										Add solid background color to the tabs with <code>.nav-tabs-solid .border-0</code> classes.
									</div>

									<div class="tab-pane fade" id="solid-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="solid-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="solid-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Solid justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid nav-justified border-0">
									<li class="nav-item"><a href="#solid-justified-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#solid-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#solid-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#solid-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="solid-justified-tab1">
										To use in tabs with equal widths add <code>.nav-justified .nav-tabs-solid .border-0</code> classes.
									</div>

									<div class="tab-pane fade" id="solid-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="solid-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="solid-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /solid tabs -->


				<!-- Rounded solid tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Solid rounded</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid rounded border-0">
									<li class="nav-item"><a href="#solid-rounded-tab1" class="nav-link rounded-left active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#solid-rounded-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#solid-rounded-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#solid-rounded-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="solid-rounded-tab1">
										In solid tabs <code>.rounded</code> class rounds tabs container and <code>.rounded-left</code> first tab corners, <code>.border-0</code> class removes border.
									</div>

									<div class="tab-pane fade" id="solid-rounded-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="solid-rounded-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="solid-rounded-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Rounded justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid nav-justified rounded border-0">
									<li class="nav-item"><a href="#solid-rounded-justified-tab1" class="nav-link rounded-left active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#solid-rounded-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link rounded-right dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#solid-rounded-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#solid-rounded-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="solid-rounded-justified-tab1">
										For justified tabs use <code>.nav-justified .nav-tabs-solid .border-0</code> classes and <code>.rounded-left/.rounded-right</code> classes in the first/last items.
									</div>

									<div class="tab-pane fade" id="solid-rounded-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="solid-rounded-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="solid-rounded-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /rounded solid tabs -->


				<!-- Colored tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Colored tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid bg-teal-400 border-0">
									<li class="nav-item"><a href="#colored-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#colored-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#colored-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#colored-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="colored-tab1">
										Add <code>custom</code> background color to the tabs using <code>.bg-* .border-0</code> classes.
									</div>

									<div class="tab-pane fade" id="colored-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="colored-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="colored-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Colored justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid bg-teal-400 border-0 nav-justified">
									<li class="nav-item"><a href="#colored-justified-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#colored-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#colored-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#colored-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="colored-justified-tab1">
										To use in tabs with equal widths add <code>.nav-justified .bg-* .border-0</code> classes.
									</div>

									<div class="tab-pane fade" id="colored-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="colored-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="colored-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /colored tabs -->


				<!-- Rounded colored tabs -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Colored rounded</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid bg-slate border-0 nav-tabs-component rounded">
									<li class="nav-item"><a href="#colored-rounded-tab1" class="nav-link rounded-left" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#colored-rounded-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#colored-rounded-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#colored-rounded-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="colored-rounded-tab1">
										In solid tabs <code>.rounded</code> class rounds tabs container and <code>.rounded-left</code> first tab corners, <code>.border-0</code> class removes border.
									</div>

									<div class="tab-pane fade" id="colored-rounded-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="colored-rounded-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="colored-rounded-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Rounded justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid bg-slate border-0 nav-justified rounded">
									<li class="nav-item"><a href="#colored-rounded-justified-tab1" class="nav-link rounded-left active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#colored-rounded-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link rounded-right dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#colored-rounded-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#colored-rounded-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="colored-rounded-justified-tab1">
										For justified tabs use <code>.nav-justified .nav-tabs-solid .bg-*</code> classes and <code>.rounded-left/.rounded-right</code> classes in the first/last items.
									</div>

									<div class="tab-pane fade" id="colored-rounded-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="colored-rounded-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="colored-rounded-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /rounded colored tabs -->



				<!-- Tab options title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Other tab options
					</h6>
					<span class="text-muted d-block">Animations, position, borders, content</span>
				</div>
				<!-- /tab options title -->


				<!-- Tabs position -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Centered position</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight justify-content-center">
									<li class="nav-item"><a href="#centered-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#centered-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#centered-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#centered-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="centered-tab1">
										To use centered tabs, add <code>.justify-content-center</code> to the <code>.nav-tabs</code> class.
									</div>

									<div class="tab-pane fade" id="centered-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="centered-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="centered-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Right position</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight justify-content-end">
									<li class="nav-item"><a href="#right-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#right-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#right-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#right-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="right-tab1">
										To use right aligned tabs, add <code>.justify-content-end</code> to the <code>.nav-tabs</code> class.
									</div>

									<div class="tab-pane fade" id="right-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="right-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="right-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /tabs position -->


				<!-- Bordered tab content -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bordered tab content</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight mb-0">
									<li class="nav-item"><a href="#bordered-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bordered-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bordered-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#bordered-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content card card-body border border-top-0 rounded-top-0 shadow-0 mb-0">
									<div class="tab-pane fade show active" id="bordered-tab1">
										To add border and padding to the tab content, add <code>.card</code> classes to the <code>.tab-content</code> container.
									</div>

									<div class="tab-pane fade" id="bordered-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bordered-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bordered-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bordered justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight nav-justified mb-0">
									<li class="nav-item"><a href="#bordered-justified-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bordered-justified-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bordered-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#bordered-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content card card-body border border-top-0 rounded-top-0 shadow-0 mb-0">
									<div class="tab-pane fade show active" id="bordered-justified-tab1">
										To use in tabs with equal widths add <code>.nav-justified</code> and <code>.card</code> classes to <code>.tab-content</code> container.
									</div>

									<div class="tab-pane fade" id="bordered-justified-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bordered-justified-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bordered-justified-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /bordered tab content -->



				<!-- Tab icons -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Tabs with icons
					</h6>
					<span class="text-muted d-block">Show icons in different positions</span>
				</div>
				<!-- /tab icons title -->


				<!-- Left icons -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Tabs with left icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight">
									<li class="nav-item"><a href="#left-icon-tab1" class="nav-link" data-toggle="tab"><i class="icon-menu7 mr-2"></i> Active</a></li>
									<li class="nav-item"><a href="#left-icon-tab2" class="nav-link" data-toggle="tab"><i class="icon-mention mr-2"></i> Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-gear mr-2"></i> Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#left-icon-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#left-icon-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="left-icon-tab1">
										Add icon markup <code>before</code> tab nav text to display icons on the left side.
									</div>

									<div class="tab-pane fade" id="left-icon-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="left-icon-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="left-icon-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified tabs. Left icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
									<li class="nav-item"><a href="#justified-left-icon-tab1" class="nav-link" data-toggle="tab"><i class="icon-menu7 mr-2"></i> Active</a></li>
									<li class="nav-item"><a href="#justified-left-tab2" class="nav-link" data-toggle="tab"><i class="icon-mention mr-2"></i> Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-gear mr-2"></i> Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-left-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#justified-left-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-left-tab1">
										To use in tabs with equal widths add <code>.nav-justified</code> and icon markup to the tab nav.
									</div>

									<div class="tab-pane fade" id="justified-left-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-left-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-left-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /left icons -->


				<!-- Right icons -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Tabs with right icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight">
									<li class="nav-item"><a href="#right-icon-tab1" class="nav-link" data-toggle="tab">Active <i class="icon-menu7 ml-2"></i></a></li>
									<li class="nav-item"><a href="#right-icon-tab2" class="nav-link" data-toggle="tab">Inactive <i class="icon-mention ml-2"></i></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown <i class="icon-gear ml-2"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#right-icon-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#right-icon-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="right-icon-tab1">
										Add icon markup <code>after</code> tab nav text to display icons on the right side.
									</div>

									<div class="tab-pane fade" id="right-icon-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="right-icon-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="right-icon-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified tabs. Right icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item"><a href="#justified-right-icon-tab1" class="nav-link" data-toggle="tab">Active <i class="icon-menu7 ml-2"></i></a></li>
									<li class="nav-item"><a href="#justified-right-icon-tab2" class="nav-link" data-toggle="tab">Inactive <i class="icon-mention ml-2"></i></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown <i class="icon-gear ml-2"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-right-icon-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#justified-right-icon-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-right-icon-tab1">
										To use in tabs with equal widths add <code>.nav-justified</code> and icon markup to the tab nav.
									</div>

									<div class="tab-pane fade" id="justified-right-icon-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-right-icon-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-right-icon-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /right icons -->


				<!-- Top icons -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Tabs with top icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight">
									<li class="nav-item">
										<a href="#top-icon-tab1" class="nav-link" data-toggle="tab">
											<div>
												<i class="icon-menu7 d-block mb-1 mt-1"></i>
												Active
											</div>
										</a>
									</li>
									<li class="nav-item">
										<a href="#top-icon-tab2" class="nav-link" data-toggle="tab">
											<div>
												<i class="icon-mention d-block mb-1 mt-1"></i>
												Inactive
											</div>
										</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown">
											<div>
												<i class="icon-gear d-block mb-1 mt-1"></i>
												Dropdown
											</div>
										</a>

										<div class="dropdown-menu dropdown-menu-right">
											<a href="#top-icon-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#top-icon-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="top-icon-tab1">
										To display icon on top, add icon code and <code>.d-block .mb-1 .mt-1</code> classes to icons.
									</div>

									<div class="tab-pane fade" id="top-icon-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="top-icon-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="top-icon-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified tabs. Top icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
									<li class="nav-item">
										<a href="#justified-top-icon-tab1" class="nav-link" data-toggle="tab">
											<div>
												<i class="icon-menu7 d-block mb-1 mt-1"></i>
												Active
											</div>
										</a>
									</li>
									<li class="nav-item">
										<a href="#justified-top-icon-tab2" class="nav-link" data-toggle="tab">
											<div>
												<i class="icon-mention d-block mb-1 mt-1"></i>
												Inactive
											</div>
										</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link" data-toggle="dropdown">
											<div>
												<i class="icon-gear d-block mb-1 mt-1"></i>
												Dropdown
											</div>
										</a>

										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-top-icon-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#justified-top-icon-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-top-icon-tab1">
										To use in tabs with equal widths add <code>.nav-justified</code> and icon markup to the tab nav.
									</div>

									<div class="tab-pane fade" id="justified-top-icon-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-top-icon-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-top-icon-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /top icons -->


				<!-- Icons only -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Tabs with icons only</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item">
										<a href="#icon-only-tab1" class="nav-link" data-toggle="tab">
											<i class="icon-menu7"></i>
											<span class="d-md-none ml-2">Active</span>
										</a>
									</li>

									<li class="nav-item">
										<a href="#icon-only-tab2" class="nav-link" data-toggle="tab">
											<i class="icon-mention"></i>
											<span class="d-md-none ml-2">Inactive</span>
										</a>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-gear"></i>
											<span class="d-md-none ml-2">Dropdown</span>
										</a>

										<div class="dropdown-menu dropdown-menu-right">
											<a href="#icon-only-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#icon-only-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="icon-only-tab1">
										If tab nav doesn't have a text, add icon markup to display icon only.
									</div>

									<div class="tab-pane fade" id="icon-only-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="icon-only-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="icon-only-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified tabs. Icons only</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a href="#justified-icon-only-tab1" class="nav-link" data-toggle="tab">
											<i class="icon-menu7"></i>
											<span class="d-md-none ml-2">Active</span>
										</a>
									</li>

									<li class="nav-item">
										<a href="#justified-icon-only-tab2" class="nav-link" data-toggle="tab">
											<i class="icon-mention"></i>
											<span class="d-md-none ml-2">Inactive</span>
										</a>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-gear"></i>
											<span class="d-md-none ml-2">Dropdown</span>
										</a>

										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-icon-only-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#justified-icon-only-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-icon-only-tab1">
										To use in tabs with equal widths add <code>.nav-justified</code> and icon markup to the tab nav.
									</div>

									<div class="tab-pane fade" id="justified-icon-only-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-icon-only-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-icon-only-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /icons only -->



				<!-- Tab badges title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Tabs with badges
					</h6>
					<span class="text-muted d-block">Display badges and pills</span>
				</div>
				<!-- /tab badges title -->


				<!-- Badges -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Tabs with badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight">
									<li class="nav-item"><a href="#badge-tab1" class="nav-link" data-toggle="tab"><span class="badge badge-danger mr-2">Bug</span> Active</a></li>
									<li class="nav-item"><a href="#badge-tab2" class="nav-link" data-toggle="tab">Inactive <span class="badge bg-slate ml-2">Fixed</span></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="badge badge-info">Priority</span></a>
										<dic class="dropdown-menu dropdown-menu-right">
											<a href="#badge-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#badge-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</dic>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="badge-tab1">
										Display <code>badges</code> on the left/right sides and in empty tab nav. Empty badges are hidden.
									</div>

									<div class="tab-pane fade" id="badge-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="badge-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="badge-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified tabs with badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
									<li class="nav-item"><a href="#justified-badge-tab1" class="nav-link" data-toggle="tab"><span class="badge badge-danger mr-2">Bug</span> Active</a></li>
									<li class="nav-item"><a href="#justified-badge-tab2" class="nav-link" data-toggle="tab">Inactive <span class="badge badge-info ml-2">Fixed</span></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="badge badge-success">Priority</span></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-badge-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#justified-badge-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-badge-tab1">
										To use in tabs with equal widths add <code>.nav-justified</code> and badge markup to the tab nav.
									</div>

									<div class="tab-pane fade" id="justified-badge-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-badge-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-badge-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /badges -->


				<!-- Pill badges -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Tabs with pill badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight">
									<li class="nav-item"><a href="#pill-badges-tab1" class="nav-link" data-toggle="tab"><span class="badge badge-success badge-pill mr-2">78</span> Active</a></li>
									<li class="nav-item"><a href="#pill-badges-tab2" class="nav-link" data-toggle="tab">Inactive <span class="badge badge-danger badge-pill ml-2">23</span></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="badge bg-slate badge-pill">34</span></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#pill-badges-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#pill-badges-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="pill-badges-tab1">
										Display <code>pill badges</code> on the left/right sides and in empty tab nav. Empty badges are hidden.
									</div>

									<div class="tab-pane fade" id="pill-badges-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="pill-badges-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="pill-badges-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified tabs with pill badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
									<li class="nav-item"><a href="#justified-badges-tab1" class="nav-link" data-toggle="tab"><span class="badge badge-danger badge-pill mr-2">87</span> Active</a></li>
									<li class="nav-item"><a href="#justified-badges-tab2" class="nav-link" data-toggle="tab">Inactive <span class="badge bg-slate badge-pill ml-2">23</span></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="badge badge-info badge-pill">34</span></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-badges-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#justified-badges-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-badges-tab1">
										To use in tabs with equal widths add <code>.nav-justified</code> and badge markup to the tab nav.
									</div>

									<div class="tab-pane fade" id="justified-badges-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-badges-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-badges-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /badges -->

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
