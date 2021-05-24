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
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/widgets.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/effects.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/jqueryui_components.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">jQuery UI</span> - Components</h4>
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
							<a href="jqueryui_components" class="breadcrumb-item">jQuery UI</a>
							<span class="breadcrumb-item active">Components</span>
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

				<!-- Button types -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Button types
					</h6>
					<span class="text-muted d-block">Button, input and link types</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Button element</h6>
							<p class="mb-3 text-muted">Basic style of <code>&lt;button></code> element</p>

							<div>
								<button class="ui-button jui-button" data-fouc>A button element</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Input element</h6>
							<p class="mb-3 text-muted">Basic style of <code>&lt;input></code> element</p>

							<div>
								<input type="submit" class="ui-button jui-button" value="A submit button" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Anchor element</h6>
							<p class="mb-3 text-muted">Basic style of <code>&lt;a></code> element</p>

							<div>
								<a href="#" class="ui-button jui-button" data-fouc>An anchor</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /button types -->


				<!-- Button styles -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Button styles
					</h6>
					<span class="text-muted d-block">Default and custom button styles</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Default style</h6>
							<p class="mb-3 text-muted">Default button element styling</p>

							<div>
								<button class="ui-button jui-button" data-fouc>Default color</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Custom colors</h6>
							<p class="mb-3 text-muted">Using <code>.bg-*</code> color helper classes</p>

							<div>
								<button class="ui-button jui-button bg-blue border-blue" data-fouc>Custom color</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Transparent button</h6>
							<p class="mb-3 text-muted">Using <code>.ui-button-link</code> class</p>

							<div>
								<button class="ui-button jui-button ui-button-link" data-fouc>Transparent color</button>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Left icon position</h6>
							<p class="mb-3 text-muted">Left position using <code>primary</code> option</p>

							<div>
								<button type="button" class="ui-button jui-button-icon-left" data-fouc>Left icon</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Checkbox control</h6>
							<p class="mb-3 text-muted">Checkbox control as a single button</p>

							<div>
								<div class="jui-controlgroup">
									<label for="transmission-standard" class="ui-button mb-0">Single checkbox control</label>
									<input type="checkbox" class="d-none" name="transmission-standard" id="transmission-standard">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Right icon position</h6>
							<p class="mb-3 text-muted">Right position using <code>secondary</code> option</p>

							<div>
								<button type="button" class="ui-button jui-button-icon-right" data-fouc>Right icon</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Radio control</h6>
							<p class="mb-3 text-muted">Radio control as a single button</p>

							<div>
								<div class="jui-controlgroup">
									<label for="transmission-custom" class="ui-button mb-0">Single radio control</label>
									<input type="radio" class="d-none" name="transmission-custom" id="transmission-custom">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Icon without text</h6>
							<p class="mb-3 text-muted">Display icon only without text</p>

							<div>
								<button type="button" class="ui-button jui-button-icon-only" data-fouc>
									Button with icon only
								</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Segmented buttons</h6>
							<p class="mb-3 text-muted">Split buttons with dropdown menu</p>

							<div>
								<div class="ui-controlgroup">
									<button class="ui-button jui-button-split" data-fouc>Run last action</button>
									<select class="form-group jui-combo d-none">
										<option>Open...</option>
										<option>Save</option>
										<option>Delete</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /button styles -->


				<!-- Button sets -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Button sets
					</h6>
					<span class="text-muted d-block">Grouped button sets</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Button group</h6>
							<p class="mb-3 text-muted">Display buttons in a group</p>

							<div>
								<div class="jui-button-set">
									<button type="button" class="ui-button" data-fouc>Button 1</button>
									<button type="button" class="ui-button" data-fouc>Button 2</button>
									<button type="button" class="ui-button" data-fouc>Button 3</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Button checkboxes</h6>
							<p class="mb-3 text-muted">Display checkboxes as a button set</p>

							<div>
								<div class="jui-button-set">
									<label for="check1" class="ui-button mb-0" data-fouc>Toggle 1</label>
									<input type="checkbox" id="check1" class="d-none">

									<label for="check2" class="ui-button mb-0" data-fouc>Toggle 2</label>
									<input type="checkbox" id="check2" class="d-none" checked>

									<label for="check3" class="ui-button mb-0" data-fouc>Toggle 3</label>
									<input type="checkbox" id="check3" class="d-none">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Button radios</h6>
							<p class="mb-3 text-muted">Display radios as a button set</p>

							<div>
								<div class="jui-button-set">
									<label for="radio1" class="ui-button mb-0" data-fouc>Choice 1</label>
									<input type="radio" class="d-none" id="radio1" name="radio">

									<label for="radio2" class="ui-button mb-0" data-fouc>Choice 2</label>
									<input type="radio" class="d-none" id="radio2" name="radio" checked>

									<label for="radio3" class="ui-button mb-0" data-fouc>Choice 3</label>
									<input type="radio" class="d-none" id="radio3" name="radio">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /button sets -->


				<!-- Progress bars -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Progress bars</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">A progress bar is a graphical control element used to visualize the progression of an extended computer operation, such as a download, file transfer, or installation. Sometimes, the graphic is accompanied by a textual representation of the progress in a percent format. Typically, progress bars use a linear function, such that the advancement of a progress bar is directly proportional to the amount of work that has been completed.</p>

						<div class="row">
							<div class="col-md-4">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Basic example</h6>
									<p class="mb-3">This example demonstrates default determinate progress bar. The value is specified in plugin's configuration using <code>value</code> option.</p>

									<div class="ui-progressbar jui-progressbar" data-fouc></div>
								</div>

								<div class="mb-4 mb-md-2">
									<h6 class="font-weight-semibold">Maximum value</h6>
									<p class="mb-3">Here progress bar is initialized with maximum value of <code>1000</code> and value is set to <code>400</code>, so progress width is calculated accordingly.</p>
									
									<div class="ui-progressbar jui-progressbar-max" data-fouc></div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Striped progress bar</h6>
									<p class="mb-3">This example shows progress bar with progress stripes. To add stripes, use <code>.ui-progressbar-striped</code> class to the bar container</p>

									<div class="ui-progressbar ui-progressbar-striped jui-progressbar" data-fouc></div>
								</div>

								<div class="mb-4 mb-md-2">
									<h6 class="font-weight-semibold">Indeterminate progress</h6>
									<p class="mb-3">This bar uses motion indicator to show that progress is taking place instead of the filled portion to show the total amount of progress</p>

									<div class="ui-progressbar jui-progressbar-indeterminate" data-fouc></div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Animated stripes</h6>
									<p class="mb-3">In this example progress bar uses animated stripes, that add a motion to the progress along with animated filled amount of progress</p>
									
									<div class="ui-progressbar ui-progressbar-striped ui-progressbar-active jui-progressbar" data-fouc></div>
								</div>

								<div class="mb-4 mb-md-2">
									<h6 class="font-weight-semibold">Custom label</h6>
									<p class="mb-3">In this example the progress amount is visually represented with animated percentage values and success message - <strong>progress: <span class="ui-progress-label"></span></strong></p>
									
									<div class="ui-progressbar jui-progressbar-custom" data-fouc></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /progress bars -->


				<!-- Dialogs -->
				<div class="card" id="modal-append-target">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Modal dialogs</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						The basic dialog window is an overlay positioned within the viewport and is protected from page content (like select elements) shining through with an iframe. It has a title bar and a content area, and can be moved, resized and closed with the 'x' icon by default. Table below contains basic jQuery UI dialog examples. Click <code>Launch</code> button to run dialog examples. 
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<th colspan="3" class="table-active">Basic examples</th>
								</tr>
								<tr>
									<td style="width: 20%;">Default modal dialog</td>
									<td style="width: 20%;"><button type="button" class="btn btn-light" id="jui-dialog-basic-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Basic modal dialog with <code>title</code> and <code>content</code> areas. Default examples displays: header - contains a title and a close button and body contains static or dynamic content</td>
								</tr>
								<tr>
									<td>Dialog with overlay</td>
									<td><button type="button" class="btn btn-light" id="jui-dialog-overlay-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Display dialog as a modal using <code>modal</code> option. Modal dialogs create an overlay below the dialog but above other page elements</td>
								</tr>
								<tr>
									<td>Animated dialog</td>
									<td><button type="button" class="btn btn-light" id="jui-dialog-animated-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Animate dialog using <code>show</code> and <code>hide</code> options and specify optional animation duration and animation effect</td>
								</tr>
								<tr>
									<td>Dialog with buttons</td>
									<td><button type="button" class="btn btn-light" id="jui-dialog-buttons-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Specify which buttons should be displayed on the dialog. The context of the callback is the dialog element; if you need access to the button, it is available as the target of the event object</td>
								</tr>
								<tr>
									<td>Buttons with icons</td>
									<td><button type="button" class="btn btn-light" id="jui-dialog-buttons-icons-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Dialog buttons support icons with the following options - before and after content, both or icon only. To use, add icon class to <code>icon</code> option</td>
								</tr>
								<tr>
									<td>Disable resize</td>
									<td><button type="button" class="btn btn-light" id="jui-dialog-resize-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal dialogs are resizable by default. To turn off resizable feature, set <code>resizable</code> option to <code>false</code></td>
								</tr>
								<tr>
									<td>Disable close on escape</td>
									<td><button type="button" class="btn btn-light" id="jui-dialog-close-escape-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Specify whether the dialog should close when it has focus and the user presses the escape (ESC) key by setting <code>closeOnEscape</code> option to <code>false</code></td>
								</tr>
								<tr>
									<td>Disable drag</td>
									<td><button type="button" class="btn btn-light" id="jui-dialog-drag-disabled-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>By default, the dialog is draggable by the title bar. To disable draggins functionality, set <code>draggable</code> option to <code>false</code></td>
								</tr>
								<tr>
									<td>Append to element</td>
									<td><button type="button" class="btn btn-light" id="jui-dialog-append-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Specify which element the dialog (and overlay, if modal) should be appended to. Here dialog is appended to the panel</td>
								</tr>

								<tr>
									<th colspan="3" class="table-active">With forms</th>
								</tr>
								<tr>
									<td>Vertical form</td>
									<td><button type="button" class="btn btn-light" id="jui-dialog-form-vertical-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a dialog with default <strong>vertical</strong> form layout. For better appearance set desired width in the dialog configuration</td>
								</tr>
								<tr>
									<td>Horizontal form</td>
									<td><button type="button" class="btn btn-light" id="jui-dialog-form-horizontal-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a dialog with default <strong>horizontal</strong> form layout. For better appearance set desired width in the dialog configuration</td>
								</tr>
								<tr>
									<td>Inline form</td>
									<td><button type="button" class="btn btn-light" id="jui-dialog-form-inline-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a dialog with default <strong>inline</strong> form layout. Requires custom width depending on the form width</td>
								</tr>

								<tr>
									<th colspan="3" class="table-active">Dialog widths</th>
								</tr>
								<tr>
									<td>Default width</td>
									<td><button type="button" class="btn btn-light" id="jui-dialog-width-default-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>By default dialog has <code>300px</code> width, if width is not specified in configuration via <code>width</code> option</td>
								</tr>
								<tr>
									<td>Custom pixel width</td>
									<td><button type="button" class="btn btn-light" id="jui-dialog-width-pixel-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Specify a custom dialog width in <strong>pixels</strong> using <code>width</code> option</td>
								</tr>
								<tr>
									<td>Custom percentage width</td>
									<td><button type="button" class="btn btn-light" id="jui-dialog-width-percentage-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Specify a custom dialog width in <strong>percentages</strong> using <code>width</code> option</td>
								</tr>
								<tr>
									<td>Full width dialog</td>
									<td><button type="button" class="btn btn-light" id="jui-dialog-width-full-opener">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>To display dialog in a full width, set <code>96%</code> in <code>width</code> option, let's keep <code>2%</code> spacing in both sides</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /dialogs -->


				<!-- Basic dialog -->
				<div id="jui-dialog-basic" title="Basic dialog">
					<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
				<!-- /basic dialog -->


				<!-- Dialog with overlay -->
				<div id="jui-dialog-overlay" title="Dialog with overlay">
					<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
				<!-- /Dialog with overlay -->


				<!-- Animated dialog -->
				<div id="jui-dialog-animated" title="Animated dialog">
					<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
				<!-- /animated dialog -->


				<!-- Dialog with buttons -->
				<div id="jui-dialog-buttons" title="Dialog with buttons">
					<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
				<!-- /dialog with buttons -->


				<!-- Buttons with icons -->
				<div id="jui-dialog-buttons-icons" title="Buttons with icons">
					<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
				<!-- /buttons with icons -->


				<!-- Disable resize -->
				<div id="jui-dialog-resize" title="Disable resize">
					<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
				<!-- /disable resize -->


				<!-- Disable close on escape -->
				<div id="jui-dialog-close-escape" title="Disable close on escape">
					<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
				<!-- /disable close on escape -->


				<!-- Disable drag -->
				<div id="jui-dialog-drag-disabled" title="Disable drag">
					<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
				<!-- /disable drag -->


				<!-- Append to element -->
				<div id="jui-dialog-append" title="Append to element">
					<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
				<!-- /append to element -->



				<!-- Vertical form -->
				<div id="jui-dialog-form-vertical" title="Vertical form">
					<form action="#">
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>First name</label>
									<input type="text" placeholder="Eugene" class="form-control">
								</div>

								<div class="col-md-6">
									<label>Last name</label>
									<input type="text" placeholder="Kopyov" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>Address line 1</label>
									<input type="text" placeholder="Ring street 12" class="form-control">
								</div>

								<div class="col-md-6">
									<label>Address line 2</label>
									<input type="text" placeholder="building D, flat #67" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>City</label>
									<input type="text" placeholder="Munich" class="form-control">
								</div>

								<div class="col-md-4">
									<label>State/Province</label>
									<input type="text" placeholder="Bayern" class="form-control">
								</div>

								<div class="col-md-4">
									<label>ZIP code</label>
									<input type="text" placeholder="1031" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<label>Email</label>
									<input type="text" placeholder="eugene@kopyov.com" class="form-control">
									<span class="form-text text-muted">name@domain.com</span>
								</div>

								<div class="col-md-6">
									<label>Phone #</label>
									<input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control">
									<span class="form-text text-muted">+99-99-9999-9999</span>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- /vertical form -->


				<!-- Horizontal form -->
				<div id="jui-dialog-form-horizontal" title="Horizontal form">
					<form action="#">
						<div class="form-group row">
							<label class="col-form-label col-md-3">First name</label>
							<div class="col-md-9">
								<input type="text" placeholder="Eugene" class="form-control">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3">Last name</label>
							<div class="col-md-9">
								<input type="text" placeholder="Kopyov" class="form-control">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3">Email</label>
							<div class="col-md-9">
								<input type="text" placeholder="eugene@kopyov.com" class="form-control">
								<span class="form-text text-muted">name@domain.com</span>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3">Phone #</label>
							<div class="col-md-9">
								<input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control">
								<span class="form-text text-muted">+99-99-9999-9999</span>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3">Address line 1</label>
							<div class="col-md-9">
								<input type="text" placeholder="Ring street 12, building D, flat #67" class="form-control">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3">City</label>
							<div class="col-md-9">
								<input type="text" placeholder="Munich" class="form-control">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3">State/Province</label>
							<div class="col-md-9">
								<input type="text" placeholder="Bayern" class="form-control">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3">ZIP code</label>
							<div class="col-md-9">
								<input type="text" placeholder="1031" class="form-control">
							</div>
						</div>
					</form>
				</div>
				<!-- /horizontal form -->


				<!-- Inline form -->
				<div id="jui-dialog-form-inline" title="Inline form">
					<form action="#" class="form-inline text-center">
						<div class="form-group form-group-feedback form-group-feedback-right">
							<label class="mr-sm-2">Email:</label>
							<input type="text" placeholder="Your email" class="form-control">
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>
							</div>
						</div>

						<div class="form-group form-group-feedback form-group-feedback-right">
							<label class="mx-0 mr-sm-2 ml-sm-4">Password:</label>
							<input type="password" placeholder="Your password" class="form-control">
							<div class="form-control-feedback">
								<i class="icon-lock text-muted"></i>
							</div>
						</div>
					</form>
				</div>
				<!-- /inline form -->



				<!-- Default width dialog -->
				<div id="jui-dialog-width-default" title="Default width">
					<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
				<!-- /default width dialog -->


				<!-- Pixel width dialog -->
				<div id="jui-dialog-width-pixel" title="Pixel width">
					<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
				<!-- /pixel width dialog -->


				<!-- Percentage width dialog -->
				<div id="jui-dialog-width-percentage" title="Percentage width">
					<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
				<!-- /percentage width dialog -->


				<!-- Full width dialog -->
				<div id="jui-dialog-width-full" title="Full width">
					<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
				<!-- /full width dialog -->

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
