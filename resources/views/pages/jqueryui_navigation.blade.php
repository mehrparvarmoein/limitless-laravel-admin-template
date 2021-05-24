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
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/widgets.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/effects.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/jqueryui_navigation.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">jQuery UI</span> - Navigation</h4>
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
							<a href="jqueryui_navigation" class="breadcrumb-item">jQuery UI</a>
							<span class="breadcrumb-item active">Navigation</span>
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

				<!-- Accordion -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Accordion component
					</h6>
					<span class="text-muted d-block">jQuery UI accordion widget with options</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Default functionality</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Click headers to expand/collapse content that is broken into logical sections, much like tabs. The underlying HTML markup is a series of headers (<code>span</code> tags) and content divs so the content is usable without JavaScript.</p>

								<div id="jui-accordion-basic" data-fouc>
									<span class="font-weight-semibold">Section 1</span>
									<div>
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>

									<span class="font-weight-semibold">Section 2</span>
									<div>
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>

									<span class="font-weight-semibold">Section 3</span>
									<div>
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Fill space</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">To fill the vertical space allocated by its container, set the <code>heightStyle</code> option to <code>"fill"</code>, and the script will automatically set the dimensions of the accordion to the height of its parent container.</p>

								<div id="jui-accordion-fill" data-fouc>
									<span class="font-weight-semibold">Section 1</span>
									<div>
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>

									<span class="font-weight-semibold">Section 2</span>
									<div>
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>

									<span class="font-weight-semibold">Section 3</span>
									<div>
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Animation</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Control animation easing and duration using <code>animate</code> option. Accepts <code>true</code> or <code>false</code> values; <strong>number</strong> - duration in milliseconds; <strong>string</strong> - name of easing; <strong>object</strong> - containing <code>easing</code> and <code>duration</code> properties.</p>

								<div id="jui-accordion-animate" data-fouc>
									<span class="font-weight-semibold">Section 1</span>
									<div>
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>

									<span class="font-weight-semibold">Section 2</span>
									<div>
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>

									<span class="font-weight-semibold">Section 3</span>
									<div>
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Collapse content</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">By default, accordions always keep one section open. To allow for all sections to be be collapsible, set the <code>collapsible</code> option to <code>true</code> in widget configuration. Click on the currently open section to collapse its content pane.</p>

								<div id="jui-accordion-collapsible" data-fouc>
									<span class="font-weight-semibold">Section 1</span>
									<div>
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>

									<span class="font-weight-semibold">Section 2</span>
									<div>
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>

									<span class="font-weight-semibold">Section 3</span>
									<div>
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Open on hover</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">By default, accordion uses <code>click</code> event to collapse/expand content. It can be changed using <code>event</code> option, that is responsible for activating the associated card. Multiple events can be specified, separated by a space.</p>

								<div id="jui-accordion-hover" data-fouc>
									<span class="font-weight-semibold">Section 1</span>
									<div>
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
									</div>

									<span class="font-weight-semibold">Section 2</span>
									<div>
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
									</div>

									<span class="font-weight-semibold">Section 3</span>
									<div>
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Sortable panels</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Accordion widget supports <strong>sortable</strong> functionality for panels re-ordering. To use, specify dragging <code>handle</code> and vertical <code>axis</code> in sortable accordion configuration and add accordion <code>refresh</code> when sorting is stopped.</p>

								<div id="jui-accordion-sortable" data-fouc>
									<div class="accordion-sortable-group">
										<span class="font-weight-semibold">Section 1</span>
										<div>
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
										</div>
									</div>

									<div class="accordion-sortable-group">
										<span class="font-weight-semibold">Section 2</span>
										<div>
										Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
										</div>
									</div>

									<div class="accordion-sortable-group">
										<span class="font-weight-semibold">Section 3</span>
										<div>
										3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /accordion -->


				<!-- Menu -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Menu component
					</h6>
					<span class="text-muted d-block">jQuery UI menu widget with options</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Disabled items</h6>
								<p class="mb-3 text-muted">Using <code>.ui-state-disabled</code> class</p>
							</div>

							<ul class="jui-menu-basic" data-fouc style="z-index: auto;">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li class="ui-state-disabled"><a href="#">Disabled item</a></li>
								<li class="ui-menu-divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Left menu item icons</h6>
								<p class="mb-3 text-muted">Dropdown icons in <code>left</code> position</p>
							</div>

							<ul class="jui-menu-basic" data-fouc style="z-index: auto;">
								<li><a href="#"><i class="icon-menu7"></i> Action</a></li>
								<li><a href="#"><i class="icon-screen-full"></i> Another action</a></li>
								<li><a href="#"><i class="icon-mail5"></i> Something else here</a></li>
								<li class="ui-menu-divider"></li>
								<li><a href="#"><i class="icon-gear"></i> One more separated link</a></li>
							</ul>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Highlighted header</h6>
								<p class="mb-3 text-muted">Highlight header using <code>.highlight</code> class</p>
							</div>

							<ul class="jui-menu-header" data-fouc style="z-index: auto;">
								<li class="ui-menu-header highlight">Header first</li>
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li class="ui-menu-header highlight">Header second</li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Another line</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Disabled menu</h6>
								<p class="mb-3 text-muted">Disable menu using <code>disabled</code> option</p>
							</div>

							<ul class="jui-menu-disabled" data-fouc style="z-index: auto;">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li class="ui-state-disabled"><a href="#">Disabled item</a></li>
								<li class="ui-menu-divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Element positions</h6>
								<p class="mb-3 text-muted">Components and their positions</p>
							</div>

							<ul class="jui-menu-basic" data-fouc style="z-index: auto;">
								<li>
									<a href="#">
										<i class="icon-menu7"></i>
										Action
										<i class="icon-gear ml-auto mr-0"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-screen-full"></i>
										Another action
										<span class="badge badge-primary ml-auto mr-0">Added</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-mail5"></i>
										Something else here
										<span class="badge badge-danger badge-pill ml-auto mr-0">98</span>
									</a>
								</li>
								<li class="ui-menu-divider"></li>
								<li>
									<a href="#">
										<i class="icon-gear"></i>
										One more separated link
										<span class="ml-auto"><i class="icon-command"></i>F</span>
									</a>
								</li>
							</ul>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Menu header icons</h6>
								<p class="mb-3 text-muted">Display left/right positioned icons</p>
							</div>

							<ul class="jui-menu-header" data-fouc style="z-index: auto;">
								<li class="ui-menu-header">
									<i class="icon-menu7"></i>
									Header first
									<i class="icon-gear ml-auto mr-0"></i>
								</li>
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li class="ui-menu-header highlight">
									<i class="icon-menu7"></i>
									Header second
									<i class="icon-gear ml-auto mr-0"></i>
								</li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Another line</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Basic configuration</h6>
								<p class="mb-3 text-muted">Basic menu with default functionality</p>
							</div>

							<ul class="jui-menu-basic" data-fouc style="z-index: auto;">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="ui-menu-divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Multiple levels</h6>
								<p class="mb-3 text-muted">Example of multi level sub menus</p>
							</div>

							<ul class="jui-menu-basic" data-fouc style="z-index: auto;">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="ui-menu-divider"></li>
								<li>
									<a href="#">More options</a>
									<ul>
										<li><a href="#">Second level link</a></li>
										<li>
											<a href="#">Second level link</a>
											<ul>
												<li><a href="#">Third level link</a></li>
												<li><a href="#">Third level link</a></li>
												<li><a href="#">Third level link</a></li>
											</ul>
										</li>
										<li><a href="#">Second level link</a></li>
									</ul>
								</li>
							</ul>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Default header</h6>
								<p class="mb-3 text-muted">Basic header styling of label sections</p>
							</div>

							<ul class="jui-menu-header" data-fouc style="z-index: auto;">
								<li class="ui-menu-header">Header first</li>
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li class="ui-menu-header">Header second</li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Another line</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /menu -->


				<!-- Tabs -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Tabs component
					</h6>
					<span class="text-muted d-block">jQuery UI tabs widget with options</span>
				</div>

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
								<div class="jui-tabs-basic" data-fouc>
									<ul>
										<li><a href="#tabs-basic-1">Active tab</a></li>
										<li><a href="#tabs-basic-2">Inactive tab</a></li>
										<li><a href="#tabs-basic-3" class="ui-state-disabled">Disabled tab</a></li>
									</ul>
									<div id="tabs-basic-1">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>
									<div id="tabs-basic-2">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>
									<div id="tabs-basic-3">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Open on hover</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="jui-tabs-hover" data-fouc>
									<ul>
										<li><a href="#tabs-hover-1">Active tab</a></li>
										<li><a href="#tabs-hover-2">Inactive tab</a></li>
										<li><a href="#tabs-hover-3" class="ui-state-disabled">Disabled tab</a></li>
									</ul>
									<div id="tabs-hover-1">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>
									<div id="tabs-hover-2">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>
									<div id="tabs-hover-3">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Tabs with icons</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="jui-tabs-basic" data-fouc>
									<ul>
										<li><a href="#tabs-basic-1"><i class="icon-menu7 mr-2"></i> Active tab</a></li>
										<li><a href="#tabs-basic-2">Inactive tab <i class="icon-mention ml-2"></i></a></li>
										<li><a href="#tabs-basic-3"><i class="icon-gear"></i></a></li>
									</ul>
									<div id="tabs-basic-1">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>
									<div id="tabs-basic-2">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>
									<div id="tabs-basic-3">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Collapsible tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="jui-tabs-collapsible" data-fouc>
									<ul>
										<li><a href="#tabs-collapsible-1">Active tab</a></li>
										<li><a href="#tabs-collapsible-2">Inactive tab</a></li>
										<li><a href="#tabs-collapsible-3" class="ui-state-disabled">Disabled tab</a></li>
									</ul>
									<div id="tabs-collapsible-1">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>
									<div id="tabs-collapsible-2">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>
									<div id="tabs-collapsible-3">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Sortable tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="jui-tabs-sortable" id="ui-tabs-sortable-container" data-fouc>
									<ul>
										<li><a href="#tabs-sortable-1">Active tab</a></li>
										<li><a href="#tabs-sortable-2">Inactive tab</a></li>
										<li><a href="#tabs-sortable-3" class="ui-state-disabled">Disabled tab</a></li>
									</ul>
									<div id="tabs-sortable-1">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>
									<div id="tabs-sortable-2">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>
									<div id="tabs-sortable-3">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="jui-tabs-basic" data-fouc>
									<ul>
										<li><a href="#tabs-basic-1"><span class="badge badge-danger mr-2">Bug</span> Active tab</a></li>
										<li><a href="#tabs-basic-2">Inactive tab <span class="badge badge-pill bg-slate ml-2">23</span></a></li>
										<li><a href="#tabs-basic-3"><span class="badge bg-blue">Fixed</span></a></li>
									</ul>
									<div id="tabs-basic-1">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
									</div>
									<div id="tabs-basic-2">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
									</div>
									<div id="tabs-basic-3">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /tabs -->

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
