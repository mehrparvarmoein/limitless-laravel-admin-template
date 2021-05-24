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
	<script src="../../../../global_assets/js/demo_pages/components_popups.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Components</span> - Popups</h4>
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
							<a href="components_popups" class="breadcrumb-item">Components</a>
							<span class="breadcrumb-item active">Popups</span>
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

				<!-- Tooltip overview -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Tooltip component</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Tooltip is a small text block with information about the item being hovered, clicked or focused on. Bootstrap tooltip extensions supports four alignment options: <code>top</code>, <code>right</code>, <code>bottom</code> and <code>left</code>. The tooltip plugin generates content and markup on demand, and by default places tooltips <code>after</code> their trigger element. The required markup for a tooltip is only a <code>data</code> attribute and <code>title</code> on the HTML element you wish to have a tooltip.</p>

						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="mb-3">
				            		<p><span class="font-weight-semibold">Top tooltip</span> <span class="d-block text-muted">data-placement="top"</span></p>
				            		<div class="card card-body bg-light">
					                    <div class="tooltip bs-tooltip-top show" style="display: block; position: relative; margin: 0; padding: 0; z-index: 100;">
											<div class="arrow" style="bottom: -4px; left: 50%; margin-left: -4px;"></div>
											<div class="tooltip-inner" style="max-width: none;">
												Some tooltip text!
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="mb-3">
				            		<p><span class="font-weight-semibold">Right tooltip</span> <span class="d-block text-muted">data-placement="right"</span></p>
				            		<div class="card card-body bg-light">
					                    <div class="tooltip bs-tooltip-right show" style="display: block; position: relative; margin: 0; padding: 0; z-index: 100;">
											<div class="arrow" style="left: -4px; top: 50%; margin-top: -4px;"></div>
											<div class="tooltip-inner" style="max-width: none;">
												Some tooltip text!
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="mb-3">
				            		<p><span class="font-weight-semibold">Bottom tooltip</span> <span class="d-block text-muted">data-placement="bottom"</span></p>
				            		<div class="card card-body bg-light">
					                    <div class="tooltip bs-tooltip-bottom show" style="display: block; position: relative; margin: 0; padding: 0; z-index: 100;">
											<div class="arrow" style="top: -4px; left: 50%; margin-left: -4px;"></div>
											<div class="tooltip-inner" style="max-width: none;">
												Some tooltip text!
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="mb-3">
				            		<p><span class="font-weight-semibold">Left tooltip</span> <span class="d-block text-muted">data-placement="left"</span></p>
				            		<div class="card card-body bg-light">
					                    <div class="tooltip bs-tooltip-left show" style="display: block; position: relative; margin: 0; padding: 0; z-index: 100;">
											<div class="arrow" style="right: -4px; top: 50%; margin-top: -4px;"></div>
											<div class="tooltip-inner" style="max-width: none;">
												Some tooltip text!
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /tooltip overview -->


				<!-- Tooltip examples -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Tooltip examples</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<th colspan="3" class="active">Tooltip positions</th>
								</tr>
								<tr>
									<td style="width: 20%;">Left tooltip position</td>
									<td style="width: 20%;"><button type="button" class="btn btn-primary" data-popup="tooltip" title="Left tooltip" data-placement="left" id="left">Tooltip <i class="icon-play3 ml-2"></i></button></td>
									<td>Tooltip in <code>left</code> direction. To use, add <code>data-placement="left"</code> to the tooltip element</td>
								</tr>
								<tr>
									<td>Top tooltip position</td>
									<td><button type="button" class="btn btn-primary" data-popup="tooltip" title="Top tooltip">Tooltip <i class="icon-play3 ml-2"></i></button></td>
									<td>Tooltip in <code>left</code> direction. To use, add <code>data-placement="left"</code> to the tooltip element</td>
								</tr>
								<tr>
									<td>Right tooltip position</td>
									<td><button type="button" class="btn btn-primary" data-popup="tooltip" title="Right tooltip" data-placement="right">Tooltip <i class="icon-play3 ml-2"></i></button></td>
									<td>Tooltip in default <code>top</code> direction, <code>data-placement="top"</code> is optional</td>
								</tr>
								<tr>
									<td>Bottom tooltip position</td>
									<td><button type="button" class="btn btn-primary" data-popup="tooltip" title="Bottom tooltip" data-placement="bottom">Tooltip <i class="icon-play3 ml-2"></i></button></td>
									<td>Tooltip in <code>bottom</code> direction. To use, add <code>data-placement="bottom"</code> to the tooltip element</td>
								</tr>

								<tr class="table-border-double">
									<th colspan="3" class="active">Tooltip options</th>
								</tr>
								<tr>
									<td>Click trigger</td>
									<td><button type="button" class="btn btn-light" data-popup="tooltip" title="I'm a tooltip" data-trigger="click">Tooltip <i class="icon-play3 ml-2"></i></button></td>
									<td>Tooltip triggered on <code>click</code>. To use, add <code>data-trigger="click"</code> to the tooltip element. To hide tooltip, click the same button again</td>
								</tr>
								<tr>
									<td>Focus trigger</td>
									<td><button type="button" class="btn btn-light" data-popup="tooltip" title="I'm a tooltip" data-trigger="focus">Tooltip <i class="icon-play3 ml-2"></i></button></td>
									<td>Tooltip triggered on <code>focus</code>. To use, add <code>data-trigger="focus"</code> to the tooltip element. To hide tooltip, click outside the button</td>
								</tr>
								<tr>
									<td>HTML support</td>
									<td><button type="button" class="btn btn-light" data-popup="tooltip" title="<strong>Tooltip</strong> <i>with</i> <u>HTML</u>" data-html="true">Tooltip <i class="icon-play3 ml-2"></i></button></td>
									<td>Tooltip with <code>HTML</code> support enabled. If <code>false</code>, jQuery's text method will be used to insert content into the DOM</td>
								</tr>
								<tr>
									<td>Disabled animation</td>
									<td><button type="button" class="btn btn-light" data-popup="tooltip" title="I'm a tooltip" data-animation="false">Tooltip <i class="icon-play3 ml-2"></i></button></td>
									<td>Add or remove a CSS <code>fade</code> transition to the tooltip by setting <code>data-animation</code> to <code>true</code>(default) or <code>false</code></td>
								</tr>
								<tr>
									<td>Delayed tooltip</td>
									<td><button type="button" class="btn btn-light" data-popup="tooltip" title="I'm a tooltip" data-delay="600">Tooltip <i class="icon-play3 ml-2"></i></button></td>
									<td>Delay showing and hiding the tooltip in <code>ms</code>. If a number is supplied, delay is applied to both hide/show</td>
								</tr>
								<tr>
									<td>Custom color</td>
									<td><button type="button" class="btn btn-light" data-popup="tooltip-custom" title="I'm a teal tooltip">Tooltip <i class="icon-play3 ml-2"></i></button></td>
									<td>Tooltips support custom color styling through <code>template</code> option. To use, wrap <code>.tooltip-arrow</code> and <code>.tooltip-inner</code> in the div with a custom color class</td>
								</tr>

								<tr class="table-border-double">
									<th colspan="3" class="active">Tooltip events</th>
								</tr>
								<tr>
									<td>Show event</td>
									<td><button type="button" class="btn btn-light" id="tooltip-show">Tooltip <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a <code>show</code> event. This event fires immediately when the <code>show</code> instance method is called</td>
								</tr>
								<tr>
									<td>Shown event</td>
									<td><button type="button" class="btn btn-light" id="tooltip-shown">Tooltip <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a <code>shown</code> event. This event is fired when the tooltip has been made visible to the user</td>
								</tr>
								<tr>
									<td>Hide event</td>
									<td><button type="button" class="btn btn-light" id="tooltip-hide">Tooltip <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a <code>hide</code> event. This event is fired immediately when the <code>hide</code> instance method has been called</td>
								</tr>
								<tr>
									<td>Hidden event</td>
									<td><button type="button" class="btn btn-light" id="tooltip-hidden">Tooltip <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a <code>hidden</code> event. This event is fired when the tooltip has finished being hidden from the user</td>
								</tr>

								<tr class="table-border-double">
									<th colspan="3" class="active">Tooltip methods</th>
								</tr>
								<tr>
									<td>Show method</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-dark" id="show-tooltip-method-target" data-popup="tooltip" title="I'm a tooltip" data-trigger="manual" data-container="body">Target</button>
											<button type="button" class="btn bg-danger-400 btn-icon" id="show-tooltip-method"><i class="icon-play3"></i></button>
										</div>
									</td>
									<td>Example of a <code>show</code> method. This method reveals an element's tooltip. Tooltips with zero-length titles are never displayed</td>
								</tr>
								<tr>
									<td>Hide method</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-dark" id="hide-tooltip-method-target" data-popup="tooltip" title="I'm a tooltip" data-trigger="manual" data-container="body">Target</button>
											<button type="button" class="btn bg-danger-400 btn-icon" id="hide-tooltip-method"><i class="icon-play3"></i></button>
										</div>
									</td>
									<td>Example of a <code>hide</code> method. This method hides an element's tooltip. Hover on <code>Target</code> button and then click <code>play</code> button to hide a tooltip</td>
								</tr>
								<tr>
									<td>Toggle method</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-dark" id="toggle-tooltip-method-target" data-popup="tooltip" title="I'm a tooltip" data-trigger="manual" data-container="body">Target</button>
											<button type="button" class="btn bg-danger-400 btn-icon" id="toggle-tooltip-method"><i class="icon-play3"></i></button>
										</div>
									</td>
									<td>Example of a <code>toggle</code> method. This method toggles an element's tooltip. Click on <code>play</code> button to toggle <code>Target</code> button tooltip</td>
								</tr>
								<tr>
									<td>Dispose method</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-dark" id="destroy-tooltip-method-target" data-popup="tooltip" title="I'm a tooltip" data-trigger="click" data-container="body">Target</button>
											<button type="button" class="btn bg-danger-400 btn-icon" id="destroy-tooltip-method"><i class="icon-play3"></i></button>
										</div>
									</td>
									<td>Example of a <code>dispose</code> method. This method hides and destroys an element's tooltip. Click on <code>Target</code> button and then <code>play</code> button to destroy a tooltip</td>
								</tr>
								<tr>
									<td>Enable/Disable methods</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-dark" id="toggle-enabled-tooltip-method-target" data-popup="tooltip" title="I'm a tooltip" data-container="body">Target</button>
											<button type="button" class="btn bg-danger-400 btn-icon" id="toggle-enabled-tooltip-method" data-toggle="button"><i class="icon-play3"></i></button>
										</div>
									</td>
									<td>Example of a <code>toggleEnabled</code> method. Toggles the ability for an element’s tooltip to be shown or hidden. Hover on <code>Target</code> button and then <code>play</code> button to disable and enable a tooltip</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /tooltip examples -->


				<!-- Popover overview -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Popover component</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Popover is a small container with content that hovers over its parent element. Since popovers are built on top of tooltip plugin, it is required to include both of them. Popover supports all availbale tooltip options, but has a different template - title, content and arrow. Bootstrap popover extension supports four alignment options: <code>top</code>, <code>right</code>, <code>bottom</code> and <code>left</code>. The popover plugin generates content and markup on demand, and by default places tooltips <code>after</code> their trigger element.</p>

						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="mb-3">
				            		<p><span class="font-weight-semibold">Top popover</span> <span class="d-block text-muted">data-placement="top"</span></p>
				            		<div class="card bg-light card-body">
					                    <div class="popover bs-popover-top" style="position: relative; display: block; margin: 0; width: 100%; max-width: none; z-index: 101">
					                        <div class="arrow" style="left: 50%; margin-left: -2.5px;"></div>
					                        <h3 class="popover-header">Popover top</h3>
					                        <div class="popover-body">
					                            Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare lacinia.
					                        </div>
					                    </div>
				                    </div>
					            </div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="mb-3">
				            		<p><span class="font-weight-semibold">Right popover</span> <span class="d-block text-muted">data-placement="right"</span></p>
				            		<div class="card bg-light card-body">
					                    <div class="popover bs-popover-right" style="position: relative; display: block; margin: 0; width: 100%; max-width: none; z-index: 101">
					                        <div class="arrow" style="top: 50%; margin-top: -2.5px;"></div>
					                        <h3 class="popover-header">Popover right</h3>
					                        <div class="popover-body">
					                            Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare lacinia.
					                        </div>
					                    </div>
				                    </div>
					            </div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="mb-3">
				            		<p><span class="font-weight-semibold">Bottom popover</span> <span class="d-block text-muted">data-placement="bottom"</span></p>
				            		<div class="card bg-light card-body">
					                    <div class="popover bs-popover-bottom" style="position: relative; display: block; margin: 0; width: 100%; max-width: none; z-index: 101">
					                        <div class="arrow" style="left: 50%; margin-left: -2.5px;"></div>
					                        <h3 class="popover-header">Popover bottom</h3>
					                        <div class="popover-body">
					                            Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare lacinia.
					                        </div>
					                    </div>
				                    </div>
					            </div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="mb-3">
				            		<p><span class="font-weight-semibold">Left popover</span> <span class="d-block text-muted">data-placement="left"</span></p>
				            		<div class="card bg-light card-body">
					                    <div class="popover bs-popover-left" style="position: relative; display: block; margin: 0; width: 100%; max-width: none; z-index: 101">
					                        <div class="arrow" style="top: 50%; margin-top: -2.5px;"></div>
					                        <h3 class="popover-header">Popover left</h3>
					                        <div class="popover-body">
					                            Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare lacinia.
					                        </div>
					                    </div>
				                    </div>
					            </div>
							</div>
						</div>
					</div>
				</div>
				<!-- /popover overview -->


				<!-- Popover examples -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Popover examples</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<th colspan="3" class="active">Popover positions</th>
								</tr>
								<tr>
									<td style="width: 20%;">Left popover position</td>
									<td style="width: 20%;"><button type="button" class="btn btn-primary" data-popup="popover" data-placement="left" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Popover <i class="icon-play3 ml-2"></i></button></td>
									<td>Popover in <code>left</code> direction. To use, add <code>data-placement="left"</code> to the popover element.</td>
								</tr>
								<tr>
									<td>Top popover position</td>
									<td><button type="button" class="btn btn-primary" data-popup="popover" data-placement="top" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Popover <i class="icon-play3 ml-2"></i></button></td>
									<td>Popover in <code>top</code> direction. To use, add <code>data-placement="top"</code> to the popover element.</td>
								</tr>
								<tr>
									<td>Right popover position</td>
									<td><button type="button" class="btn btn-primary" data-popup="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Popover <i class="icon-play3 ml-2"></i></button></td>
									<td>Popover in default <code>right</code> direction, <code>data-placement="right"</code> is optional.</td>
								</tr>
								<tr>
									<td>Bottom popover position</td>
									<td><button type="button" class="btn btn-primary" data-popup="popover" data-placement="bottom" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Popover <i class="icon-play3 ml-2"></i></button></td>
									<td>Popover in <code>bottom</code> direction. To use, add <code>data-placement="bottom"</code> to the popover element.</td>
								</tr>

								<tr>
									<th colspan="3" class="active">Popover options</th>
								</tr>
								<tr>
									<td>Hover trigger</td>
									<td><button type="button" class="btn btn-light" data-popup="popover" title="Popover title" data-trigger="hover" data-content="And here's some amazing content. It's very engaging. Right?">Popover <i class="icon-play3 ml-2"></i></button></td>
									<td>Popover triggered on <code>hover</code>. To use, add <code>data-trigger="hover"</code> to the popover element.</td>
								</tr>
								<tr>
									<td>Focus trigger</td>
									<td><button type="button" class="btn btn-light" data-popup="popover" title="Popover title" data-trigger="focus" data-content="And here's some amazing content. It's very engaging. Right?">Popover <i class="icon-play3 ml-2"></i></button></td>
									<td>Popover triggered on <code>focus</code>. To use, add <code>data-trigger="focus"</code> to the popover element. To hide popover, click outside the button.</td>
								</tr>
								<tr>
									<td>HTML support</td>
									<td><button type="button" class="btn btn-light" data-popup="popover" title="Popover <span class='text-danger'>title</span>" data-html="true" data-content="Add <u>some</u> <i>HTML</i> <strong>stuff</strong>.">Popover <i class="icon-play3 ml-2"></i></button></td>
									<td>Popover with <code>HTML</code> support enabled. If <code>false</code>, jQuery's text method will be used to insert content into the DOM.</td>
								</tr>
								<tr>
									<td>Disabled animation</td>
									<td><button type="button" class="btn btn-light" data-popup="popover" title="Popover title" data-animation="false" data-content="And here's some amazing content. It's very engaging. Right?">Popover <i class="icon-play3 ml-2"></i></button></td>
									<td>Add or remove a CSS <code>fade</code> transition to the popover by setting <code>data-animation</code> to <code>true</code> (default) or <code>false</code>.</td>
								</tr>
								<tr>
									<td>Delayed popover</td>
									<td><button type="button" class="btn btn-light" data-popup="popover" title="Popover title" data-delay="600" data-content="And here's some amazing content. It's very engaging. Right?">Popover <i class="icon-play3 ml-2"></i></button></td>
									<td>Delay showing and hiding the popover in <code>ms</code>. If a number is supplied, delay is applied to both hide/show.</td>
								</tr>
								<tr>
									<td>Custom header color</td>
									<td><button type="button" class="btn btn-light" data-popup="popover-custom" data-placement="bottom" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Popover <i class="icon-play3 ml-2"></i></button></td>
									<td>Popovers support custom <code>title</code> color styling through <code>template</code> option. To use, add custom color class to <code>.popover-title</code> element.</td>
								</tr>
								<tr>
									<td>Custom solid color</td>
									<td><button type="button" class="btn btn-light" data-popup="popover-solid" data-placement="bottom" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Popover <i class="icon-play3 ml-2"></i></button></td>
									<td>Besides title, popovers also support a <code>solid</code> color fill option. To use, add custom color class to <code>.popover-title</code> and <code>.popover-content</code> elements.</td>
								</tr>

								<tr>
									<th colspan="3" class="active">Popover events</th>
								</tr>
								<tr>
									<td>Show event</td>
									<td><button type="button" class="btn btn-light" id="popover-show">Popover <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a <code>show</code> event. This event fires immediately when the <code>show</code> instance method is called.</td>
								</tr>
								<tr>
									<td>Shown event</td>
									<td><button type="button" class="btn btn-light" id="popover-shown">Popover <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a <code>shown</code> event. This event is fired when the popover has been made visible to the user.</td>
								</tr>
								<tr>
									<td>Hide event</td>
									<td><button type="button" class="btn btn-light" id="popover-hide">Popover <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a <code>hide</code> event. This event is fired immediately when the <code>hide</code> instance method has been called.</td>
								</tr>
								<tr>
									<td>Hidden event</td>
									<td><button type="button" class="btn btn-light" id="popover-hidden">Popover <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a <code>hidden</code> event. This event is fired when the popover has finished being hidden from the user.</td>
								</tr>

								<tr>
									<th colspan="3" class="active">Popover methods</th>
								</tr>
								<tr>
									<td>Show method</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-dark" id="show-popover-method-target" data-popup="popover" data-placement="top" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" data-trigger="manual" data-container="body">Target</button>
											<button type="button" class="btn bg-danger-400 btn-icon" id="show-popover-method"><i class="icon-play3"></i></button>
										</div>
									</td>
									<td>Example of a <code>show</code> method. This method reveals an element's popover. Popovers whose both title and content are zero-length are never displayed.</td>
								</tr>
								<tr>
									<td>Hide method</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-dark" id="hide-popover-method-target" data-popup="popover" data-placement="top" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" data-trigger="manual" data-container="body">Target</button>
											<button type="button" class="btn bg-danger-400 btn-icon" id="hide-popover-method"><i class="icon-play3"></i></button>
										</div>
									</td>
									<td>Example of a <code>hide</code> method. This method hides an element's popover. Hover on <code>Target</code> button and then click <code>play</code> button to hide a popover.</td>
								</tr>
								<tr>
									<td>Toggle method</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-dark" id="toggle-popover-method-target" data-popup="popover" data-placement="top" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" data-trigger="manual" data-container="body">Target</button>
											<button type="button" class="btn bg-danger-400 btn-icon" id="toggle-popover-method"><i class="icon-play3"></i></button>
										</div>
									</td>
									<td>Example of a <code>toggle</code> method. This method toggles an element's popover. Click on <code>play</code> button to toggle <code>Target</code> button popover.</td>
								</tr>
								<tr>
									<td>Dispose method</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-dark" id="dispose-popover-method-target" data-popup="popover" data-placement="top" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" data-container="body">Target</button>
											<button type="button" class="btn bg-danger-400 btn-icon" id="dispose-popover-method"><i class="icon-play3"></i></button>
										</div>
									</td>
									<td>Example of a <code>dispose</code> method. This method hides and disposes an element's popover. Click on <code>Target</code> button and then <code>play</code> button to dispose a popover.</td>
								</tr>
								<tr>
									<td>Enable/Disable methods</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-dark" id="toggle-enabled-popover-method-target" data-popup="popover" data-placement="top" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?" data-container="body">Target</button>
											<button type="button" class="btn bg-danger-400 btn-icon" id="toggle-enabled-popover-method" data-toggle="button"><i class="icon-play3"></i></button>
										</div>
									</td>
									<td>Example of a <code>toggleEnabled</code> method. Toggles the ability for an element’s popover to be shown or hidden. Hover on <code>Target</code> button and then <code>play</code> button to disable and enable a popover</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /popover examples -->

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
