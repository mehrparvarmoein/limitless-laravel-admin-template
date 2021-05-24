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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Components</span> - Pills</h4>
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
							<a href="components_pills" class="breadcrumb-item">Components</a>
							<span class="breadcrumb-item active">Pills</span>
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

				<!-- Pills layouts title -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Pill layouts
					</h6>
					<span class="text-muted d-block">Default, bordered, toolbar layouts</span>
				</div>
				<!-- /pills layouts title -->


				<!-- Basic pills -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic pills</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills">
									<li class="nav-item"><a href="#basic-pill1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#basic-pill2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#basic-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#basic-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="basic-pill1">
										Basic pills example using <code>.nav-pills</code> class. Also requires base <code>.nav</code> class.
									</div>

									<div class="tab-pane fade" id="basic-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="basic-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="basic-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

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
								<ul class="nav nav-pills">
									<li class="nav-item"><a href="#basic-rounded-pill1" class="nav-link rounded-round active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#basic-rounded-pill2" class="nav-link rounded-round" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link rounded-round dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#basic-rounded-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#basic-rounded-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="basic-rounded-pill1">
										To make pills rounded, add <code>.rounded-round</code> class to all <code>.nav-link</code> elements.
									</div>

									<div class="tab-pane fade" id="basic-rounded-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="basic-rounded-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="basic-rounded-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified pills</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills nav-justified">
									<li class="nav-item"><a href="#justified-pill1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#justified-pill2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#justified-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-pill1">
										Easily make pills equal widths of their parent with <code>.nav-justified</code> class.
									</div>

									<div class="tab-pane fade" id="justified-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

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
								<ul class="nav nav-pills nav-justified">
									<li class="nav-item"><a href="#justified-rounded-pill1" class="nav-link rounded-round active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#justified-rounded-pill2" class="nav-link rounded-round" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link rounded-round dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-rounded-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#justified-rounded-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-rounded-pill1">
										Easily make pills equal widths of their parent with <code>.nav-justified</code> class.
									</div>

									<div class="tab-pane fade" id="justified-rounded-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-rounded-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-rounded-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /basic pills -->


				<!-- Bordered pills -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bordered pills</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills nav-pills-bordered">
									<li class="nav-item"><a href="#bordered-pill1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bordered-pill2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bordered-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#bordered-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="bordered-pill1">
										Add border and background color to the pills with <code>.nav-pills-bordered</code> class.
									</div>

									<div class="tab-pane fade" id="bordered-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bordered-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bordered-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bordered rounded</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills nav-pills-bordered">
									<li class="nav-item"><a href="#bordered-rounded-pill1" class="nav-link rounded-round active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bordered-rounded-pill2" class="nav-link rounded-round" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link rounded-round dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bordered-rounded-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#bordered-rounded-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="bordered-rounded-pill1">
										To make pills rounded, add <code>.rounded-round</code> class to all <code>.nav-link</code> elements.
									</div>

									<div class="tab-pane fade" id="bordered-rounded-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bordered-rounded-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bordered-rounded-pill4">
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
								<ul class="nav nav-pills nav-pills-bordered nav-justified">
									<li class="nav-item"><a href="#bordered-justified-pill1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bordered-justified-pill2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bordered-justified-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#bordered-justified-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="bordered-justified-pill1">
										To use in pills with equal widths add <code>.nav-justified .nav-pills-bordered</code> classes.
									</div>

									<div class="tab-pane fade" id="bordered-justified-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bordered-justified-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bordered-justified-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bordered rounded justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills nav-pills-bordered nav-justified">
									<li class="nav-item"><a href="#bordered-rounded-justified-pill1" class="nav-link rounded-round active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#bordered-rounded-justified-pill2" class="nav-link rounded-round" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link rounded-round dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#bordered-rounded-justified-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#bordered-rounded-justified-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="bordered-rounded-justified-pill1">
										To use in pills with equal widths add <code>.nav-justified .nav-pills-bordered</code> classes.
									</div>

									<div class="tab-pane fade" id="bordered-rounded-justified-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="bordered-rounded-justified-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="bordered-rounded-justified-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /bordered pills -->


				<!-- Toolbar pills -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Pills toolbar</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills nav-pills-bordered nav-pills-toolbar">
									<li class="nav-item"><a href="#toolbar-pill1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#toolbar-pill2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#toolbar-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#toolbar-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="toolbar-pill1">
										Display pills as a toolbar with <code>.nav-pills-toolbar</code> class.
									</div>

									<div class="tab-pane fade" id="toolbar-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="toolbar-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="toolbar-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Rounded toolbar</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills nav-pills-bordered nav-pills-toolbar">
									<li class="nav-item"><a href="#toolbar-rounded-pill1" class="nav-link rounded-left-round active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#toolbar-rounded-pill2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link rounded-right-round dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#toolbar-rounded-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#toolbar-rounded-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="toolbar-rounded-pill1">
										To make pills toolbar rounded, add <code>.rounded-left-round</code> and <code>.rounded-right-round</code> classes to the first/last <code>.nav-link</code> elements.
									</div>

									<div class="tab-pane fade" id="toolbar-rounded-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="toolbar-rounded-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="toolbar-rounded-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Toolbar justified</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills nav-pills-bordered nav-pills-toolbar nav-justified">
									<li class="nav-item"><a href="#toolbar-justified-pill1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#toolbar-justified-pill2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#toolbar-justified-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#toolbar-justified-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="toolbar-justified-pill1">
										To use in pills with equal widths add <code>.nav-justified .nav-pills-toolbar</code> classes.
									</div>

									<div class="tab-pane fade" id="toolbar-justified-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="toolbar-justified-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="toolbar-justified-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Rounded justified toolbar</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills nav-pills-bordered nav-pills-toolbar nav-justified">
									<li class="nav-item"><a href="#toolbar-rounded-justified-pill1" class="nav-link rounded-left-round active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#toolbar-rounded-justified-pill2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link rounded-right-round dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#toolbar-rounded-justified-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#toolbar-rounded-justified-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="toolbar-rounded-justified-pill1">
										To make pills toolbar rounded, add <code>.rounded-left-round</code> and <code>.rounded-right-round</code> classes to the first/last <code>.nav-link</code> elements.
									</div>

									<div class="tab-pane fade" id="toolbar-rounded-justified-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="toolbar-rounded-justified-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="toolbar-rounded-justified-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /toolbar pills -->



				<!-- Pills options title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Pill options
					</h6>
					<span class="text-muted d-block">Positioning, stacked options</span>
				</div>
				<!-- /pills options title -->


				<!-- Pills position -->
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
								<ul class="nav nav-pills justify-content-center">
									<li class="nav-item"><a href="#centered-pill1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#centered-pill2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#centered-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#centered-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="centered-pill1">
										To use centered pills, add <code>.justify-content-center</code> to the <code>.nav-pills</code> class.
									</div>

									<div class="tab-pane fade" id="centered-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="centered-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="centered-pill4">
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
								<ul class="nav nav-pills justify-content-end">
									<li class="nav-item"><a href="#right-pill1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#right-pill2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#right-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#right-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="right-pill1">
										To use right aligned pills, add <code>.justify-content-end</code> to the <code>.nav-pills</code> class.
									</div>

									<div class="tab-pane fade" id="right-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="right-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="right-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /pills position -->


				<!-- Stacked pills -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Stacked pills</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills flex-column">
									<li class="nav-item"><a href="#stacked-icons-pill1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#stacked-icons-pill2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu">
											<a href="#stacked-icons-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#stacked-icons-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="stacked-icons-pill1">
										Pills are also vertically stackable. Just add <code>.flex-column</code> to the <code>.nav-pills</code> class.
									</div>

									<div class="tab-pane fade" id="stacked-icons-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="stacked-icons-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="stacked-icons-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Stacked with icons/badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills flex-column">
									<li class="nav-item">
										<a href="#stacked-badges-pill1" class="nav-link" data-toggle="tab">
											<i class="icon-menu7 mr-2"></i>
											Active
										</a>
									</li>
									<li class="nav-item">
										<a href="#stacked-badges-pill2" class="nav-link" data-toggle="tab">
											<i class="icon-make-group mr-2"></i>
											Inactive
											<span class="badge badge-danger float-right">Bug</span>

										</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-share4 mr-2"></i>
											Dropdown
											<span class="badge badge-primary badge-pill float-right">95</span>
										</a>

										<div class="dropdown-menu">
											<a href="#stacked-badges-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#stacked-badges-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="stacked-badges-pill1">
										Examples of stackable pills with icons, badges, pill badges and dropdown menu.
									</div>

									<div class="tab-pane fade" id="stacked-badges-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="stacked-badges-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="stacked-badges-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /stacked pills -->


				<!-- Staked pills options -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Stacked bordered</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills nav-pills-bordered flex-column">
									<li class="nav-item">
										<a href="#stacked-bordered-pill1" class="nav-link" data-toggle="tab">
											<i class="icon-menu7 mr-2"></i>
											Active
										</a>
									</li>
									<li class="nav-item">
										<a href="#stacked-bordered-pill2" class="nav-link" data-toggle="tab">
											<i class="icon-make-group mr-2"></i>
											Inactive
											<span class="badge badge-danger float-right">Bug</span>
										</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-share4 mr-2"></i>
											Dropdown
											<span class="badge badge-primary badge-pill float-right">95</span>
										</a>

										<div class="dropdown-menu">
											<a href="#stacked-bordered-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#stacked-bordered-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="stacked-bordered-pill1">
										To make bordered pills stackable, add <code>.nav-pills-bordered .flex-column</code> classes to the <code>.nav-pills</code> container.
									</div>

									<div class="tab-pane fade" id="stacked-bordered-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="stacked-bordered-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="stacked-bordered-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Stacked bordered/toolbar</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills nav-pills-bordered nav-pills-toolbar flex-column">
									<li class="nav-item">
										<a href="#stacked-bordered-toolbar-badges-pill1" class="nav-link" data-toggle="tab">
											<i class="icon-menu7 mr-2"></i>
											Active
										</a>
									</li>
									<li class="nav-item">
										<a href="#stacked-bordered-toolbar-badges-pill2" class="nav-link" data-toggle="tab">
											<i class="icon-make-group mr-2"></i>
											Inactive
											<span class="badge badge-danger float-right">Bug</span>
										</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-share4 mr-2"></i>
											Dropdown
											<span class="badge badge-primary badge-pill float-right">95</span>
										</a>

										<div class="dropdown-menu">
											<a href="#stacked-bordered-toolbar-badges-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#stacked-bordered-toolbar-badges-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="stacked-bordered-toolbar-badges-pill1">
										To make bordered pills stackable and remove spacings, add <code>.nav-pills-bordered .nav-pills-toolbar .flex-column</code> classes to the <code>.nav-pills</code> container.
									</div>

									<div class="tab-pane fade" id="stacked-bordered-toolbar-badges-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="stacked-bordered-toolbar-badges-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="stacked-bordered-toolbar-badges-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /stacked pills options -->


				<!-- Stacked nav position -->
				<div class="row">
					<div class="col-lg-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Left position</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="d-lg-flex justify-content-lg-between">
									<ul class="nav nav-pills flex-column mr-lg-3 wmin-lg-250 mb-lg-0">
										<li class="nav-item">
											<a href="#stacked-left-pill1" class="nav-link" data-toggle="tab">
												<i class="icon-menu7 mr-2"></i>
												Active
											</a>
										</li>
										<li class="nav-item">
											<a href="#stacked-left-pill2" class="nav-link" data-toggle="tab">
												<i class="icon-make-group mr-2"></i>
												Inactive
												<span class="badge badge-danger float-right">Bug</span>
											</a>
										</li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
												<i class="icon-share4 mr-2"></i>
												Dropdown
												<span class="badge badge-primary badge-pill float-right">95</span>
											</a>

											<div class="dropdown-menu">
												<a href="#stacked-left-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
												<a href="#stacked-left-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
											</div>
										</li>
									</ul>

									<div class="tab-content">
										<div class="tab-pane fade show active" id="stacked-left-pill1">
											Stacked pills with <code>left</code> nav using set of flexbox and margin utility classes.
										</div>

										<div class="tab-pane fade" id="stacked-left-pill2">
											Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
										</div>

										<div class="tab-pane fade" id="stacked-left-pill3">
											DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
										</div>

										<div class="tab-pane fade" id="stacked-left-pill4">
											Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
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
								<div class="d-lg-flex justify-content-lg-between">
									<div class="tab-content">
										<div class="tab-pane fade show active" id="stacked-right-pill1">
											Stacked pills with <code>right</code> nav using set of flexbox and margin utility classes.
										</div>

										<div class="tab-pane fade" id="stacked-right-pill2">
											Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
										</div>

										<div class="tab-pane fade" id="stacked-right-pill3">
											DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
										</div>

										<div class="tab-pane fade" id="stacked-right-pill4">
											Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
										</div>
									</div>

									<ul class="nav nav-pills flex-column ml-lg-3 wmin-lg-250 mt-3 mt-lg-0 mb-0">
										<li class="nav-item">
											<a href="#stacked-right-pill1" class="nav-link" data-toggle="tab">
												<i class="icon-menu7 mr-2"></i>
												Active
											</a>
										</li>
										<li class="nav-item">
											<a href="#stacked-right-pill2" class="nav-link" data-toggle="tab">
												<i class="icon-make-group mr-2"></i>
												Inactive
												<span class="badge badge-danger float-right">Bug</span>
											</a>
										</li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
												<i class="icon-share4 mr-2"></i>
												Dropdown
												<span class="badge badge-primary badge-pill float-right">95</span>
											</a>

											<div class="dropdown-menu">
												<a href="#stacked-right-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
												<a href="#stacked-right-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /stacked nav position -->



				<!-- Pills styling title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Pill elements
					</h6>
					<span class="text-muted d-block">Icons and badges</span>
				</div>
				<!-- /pills styling title -->


				<!-- Left icons -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Pills with left icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills">
									<li class="nav-item"><a href="#left-icon-pill1" class="nav-link" data-toggle="tab"><i class="icon-menu7 mr-2"></i> Active</a></li>
									<li class="nav-item"><a href="#left-icon-pill2" class="nav-link" data-toggle="tab"><i class="icon-mention mr-2"></i> Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-gear mr-2"></i> Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#left-icon-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#left-icon-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="left-icon-pill1">
										Add icon markup <code>before</code> pill nav text to display icons on the left side.
									</div>

									<div class="tab-pane fade" id="left-icon-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="left-icon-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="left-icon-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified pills. Left icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills nav-justified">
									<li class="nav-item"><a href="#justified-left-icon-pill1" class="nav-link" data-toggle="tab"><i class="icon-menu7 mr-2"></i> Active</a></li>
									<li class="nav-item"><a href="#justified-left-pill2" class="nav-link" data-toggle="tab"><i class="icon-mention mr-2"></i> Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-gear mr-2"></i> Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-left-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#justified-left-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-left-pill1">
										To use in pills with equal widths add <code>.nav-justified</code> and icon markup to the pill nav.
									</div>

									<div class="tab-pane fade" id="justified-left-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-left-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-left-pill4">
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
								<h6 class="card-title">Pills with right icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills">
									<li class="nav-item"><a href="#right-icon-pill1" class="nav-link" data-toggle="tab">Active <i class="icon-menu7 ml-2"></i></a></li>
									<li class="nav-item"><a href="#right-icon-pill2" class="nav-link" data-toggle="tab">Inactive <i class="icon-mention ml-2"></i></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown <i class="icon-gear ml-2"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#right-icon-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#right-icon-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="right-icon-pill1">
										Add icon markup <code>after</code> pill nav text to display icons on the right side.
									</div>

									<div class="tab-pane fade" id="right-icon-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="right-icon-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="right-icon-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified pills. Right icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills nav-justified">
									<li class="nav-item"><a href="#justified-right-icon-pill1" class="nav-link" data-toggle="tab">Active <i class="icon-menu7 ml-2"></i></a></li>
									<li class="nav-item"><a href="#justified-right-icon-pill2" class="nav-link" data-toggle="tab">Inactive <i class="icon-mention ml-2"></i></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown <i class="icon-gear ml-2"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-right-icon-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#justified-right-icon-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-right-icon-pill1">
										To use in pills with equal widths add <code>.nav-justified</code> and icon markup to the pill nav.
									</div>

									<div class="tab-pane fade" id="justified-right-icon-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-right-icon-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-right-icon-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /right icons -->


				<!-- Icons only -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Pills with icons only</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills">
									<li class="nav-item">
										<a href="#icon-only-pill1" class="nav-link" data-toggle="tab">
											<i class="icon-menu7"></i>
											<span class="d-md-none ml-2">Active</span>
										</a>
									</li>

									<li class="nav-item">
										<a href="#icon-only-pill2" class="nav-link" data-toggle="tab">
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
											<a href="#icon-only-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#icon-only-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="icon-only-pill1">
										If pill nav doesn't have a text, add icon markup to display icon only.
									</div>

									<div class="tab-pane fade" id="icon-only-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="icon-only-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="icon-only-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified pills. Icons only</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills nav-justified">
									<li class="nav-item">
										<a href="#justified-icon-only-pill1" class="nav-link" data-toggle="tab">
											<i class="icon-menu7"></i>
											<span class="d-md-none ml-2">Active</span>
										</a>
									</li>

									<li class="nav-item">
										<a href="#justified-icon-only-pill2" class="nav-link" data-toggle="tab">
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
											<a href="#justified-icon-only-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#justified-icon-only-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-icon-only-pill1">
										To use in pills with equal widths add <code>.nav-justified</code> and icon markup to the pill nav.
									</div>

									<div class="tab-pane fade" id="justified-icon-only-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-icon-only-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-icon-only-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /icons only -->


				<!-- Badges -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Pills with badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills">
									<li class="nav-item"><a href="#badge-pill1" class="nav-link" data-toggle="tab"><span class="badge bg-grey-700 mr-2">Bug</span> Active</a></li>
									<li class="nav-item"><a href="#badge-pill2" class="nav-link" data-toggle="tab">Inactive <span class="badge bg-warning-400 ml-2">Fixed</span></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="badge bg-success-400">Priority</span></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#badge-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#badge-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="badge-pill1">
										Display <code>badges</code> on the left/right sides and in empty pill nav. Empty badges are hidden.
									</div>

									<div class="tab-pane fade" id="badge-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="badge-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="badge-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified pills with badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills nav-justified">
									<li class="nav-item"><a href="#justified-badge-pill1" class="nav-link" data-toggle="tab"><span class="badge bg-grey-700 mr-2">Bug</span> Active</a></li>
									<li class="nav-item"><a href="#justified-badge-pill2" class="nav-link" data-toggle="tab">Inactive <span class="badge bg-warning-400 ml-2">Fixed</span></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="badge bg-success-400">Priority</span></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-badge-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#justified-badge-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-badge-pill1">
										To use in pills with equal widths add <code>.nav-justified</code> and badge markup to the pill nav.
									</div>

									<div class="tab-pane fade" id="justified-badge-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-badge-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-badge-pill4">
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
								<h6 class="card-title">Pills with pill badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills">
									<li class="nav-item"><a href="#pill-badges-pill1" class="nav-link" data-toggle="tab"><span class="badge bg-purple-400 mr-2">62</span> Active</a></li>
									<li class="nav-item"><a href="#pill-badges-pill2" class="nav-link" data-toggle="tab">Inactive <span class="badge bg-teal-400 ml-2">23</span></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="badge bg-pink-400">34</span></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#pill-badges-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#pill-badges-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="pill-badges-pill1">
										Display <code>badges</code> on the left/right sides and in empty pill nav. Empty badges are hidden.
									</div>

									<div class="tab-pane fade" id="pill-badges-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="pill-badges-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="pill-badges-pill4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Justified pills with badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-pills nav-justified">
									<li class="nav-item"><a href="#justified-badges-pill1" class="nav-link" data-toggle="tab"><span class="badge bg-purple-400 mr-2">62</span> Active</a></li>
									<li class="nav-item"><a href="#justified-badges-pill2" class="nav-link" data-toggle="tab">Inactive <span class="badge bg-teal-400 ml-2">23</span></a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="badge bg-pink-400">34</span></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#justified-badges-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
											<a href="#justified-badges-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
										</div>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane fade show active" id="justified-badges-pill1">
										To use in pills with equal widths add <code>.nav-justified</code> and badge markup to the pill nav.
									</div>

									<div class="tab-pane fade" id="justified-badges-pill2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>

									<div class="tab-pane fade" id="justified-badges-pill3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>

									<div class="tab-pane fade" id="justified-badges-pill4">
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
