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
	<script src="../../../../global_assets/js/plugins/notifications/sweet_alert.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	
	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/extra_sweetalert.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Extra</span> - SweetAlert</h4>
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
							<a href="extra_sweetalert" class="breadcrumb-item">Extra</a>
							<span class="breadcrumb-item active">SweetAlert</span>
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

				<!-- Info alert -->
				<div class="alert alert-info bg-white alert-styled-left alert-arrow-left alert-dismissible">
					<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
					<h6 class="alert-heading font-weight-semibold mb-1">IE11 support</h6>
					Sweet Alert library doesn't support IE11 by default. In order to enable IE11 support, you need to include 2 additional files: <code>promise.min.js</code> and <code>fetch.min.js</code> polyfills located in <code>/js/polyfills/</code> folder.
			    </div>
			    <!-- /info alert -->


				<!-- Sweetalert examples -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">SweetAlert Notifications</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						SweetAlert is a simple yet powerful replacement for JS popup boxes. With this extension you can easily replace boring browser alerts with beautiful animated popups that look like a modal dialog. Supports form controls (input fields, checkboxes, selects, radios etc) with validation, various notification types with animated icons and bunch of options for deeper customization. 
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr class="table-border-double table-active">
									<th colspan="3">Notification types</th>
								</tr>
								<tr>
									<td>Success type</td>
									<td><button type="button" class="btn btn-light" id="sweet_success">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Success notification type using <code>type: success</code> option</td>
								</tr>
								<tr>
									<td>Error type</td>
									<td><button type="button" class="btn btn-light" id="sweet_error">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Error notification type using <code>type: error</code> option</td>
								</tr>
								<tr>
									<td>Warning type</td>
									<td><button type="button" class="btn btn-light" id="sweet_warning">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Warning notification type using <code>type: warning</code> option</td>
								</tr>
								<tr>
									<td>Info type</td>
									<td><button type="button" class="btn btn-light" id="sweet_info">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Info notification type using <code>type: info</code> option</td>
								</tr>
								<tr>
									<td>Question type</td>
									<td><button type="button" class="btn btn-light" id="sweet_question">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Question notification type using <code>type: question</code> option</td>
								</tr>
								<tr>
									<td>Combine messages</td>
									<td><button type="button" class="btn btn-light" id="sweet_combine">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Message with a function attached to the "Confirm" and "Cancel" buttons</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">Basic examples</th>
								</tr>
								<tr>
									<td>Basic alert</td>
									<td><button type="button" class="btn btn-light" id="sweet_basic">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Basic sweet alert example with title only</td>
								</tr>
								<tr>
									<td>Title with text</td>
									<td><button type="button" class="btn btn-light" id="sweet_title_text">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Display additional text below the title</td>
								</tr>
								<tr>
									<td>Close button</td>
									<td><button type="button" class="btn btn-light" id="sweet_close">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Show close button in top right corner of the modal</td>
								</tr>
								<tr>
									<td>Custom padding</td>
									<td><button type="button" class="btn btn-light" id="sweet_padding">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal window padding in pixels. Default padding value is 20px</td>
								</tr>
								<tr>
									<td>Custom width</td>
									<td><button type="button" class="btn btn-light" id="sweet_width">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Modal window width, including paddings (box-sizing: border-box). Can be in px or %</td>
								</tr>
								<tr>
									<td>Auto closer</td>
									<td><button type="button" class="btn btn-light" id="sweet_auto_closer">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Close the alert after specified amount of time using <code>timer</code> option</td>
								</tr>
								<tr>
									<td>Dynamic queue</td>
									<td><button type="button" class="btn btn-light" id="sweet_queue">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Display a loading animation while working on request</td>
								</tr>
								<tr>
									<td>AJAX requests</td>
									<td><button type="button" class="btn btn-light" id="sweet_ajax">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example with AJAX request, validation and callback</td>
								</tr>
								<tr>
									<td>With HTML message</td>
									<td><button type="button" class="btn btn-light" id="sweet_html">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Add support of HTML in alert message</td>
								</tr>
								<tr>
									<td>With custom image</td>
									<td><button type="button" class="btn btn-light" id="sweet_image">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Notification message with a custom image. Image size is specified in config</td>
								</tr>
								<tr>
									<td>With custom background image</td>
									<td><button type="button" class="btn btn-light" id="sweet_bg">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Notification message with a custom background image. Image source is specified in config</td>
								</tr>
								<tr>
									<td>Chaining notifications</td>
									<td><button type="button" class="btn btn-light" id="sweet_chain">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Display multiple chaining modals with steps progress</td>
								</tr>
								<tr>
									<td>Reversed buttons</td>
									<td><button type="button" class="btn btn-light" id="sweet_reverse_buttons">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Set to <code>true</code> if you want to invert default buttons positions ("Confirm"-button on the right side)</td>
								</tr>
								<tr class="table-border-solid">
									<td>Fullscreen</td>
									<td><button type="button" class="btn btn-light" id="sweet_fullscreen">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Use <code>grow: 'fullscreen'</code> option to show notification in <strong>fullscreen</strong> mode</td>
								</tr>
								<tr>
									<td>Stretched vertically</td>
									<td><button type="button" class="btn btn-light" id="sweet_column">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Use <code>grow: 'column'</code> option to show notification in <strong>column</strong> mode</td>
								</tr>
								<tr>
									<td>Stretched horizontally</td>
									<td><button type="button" class="btn btn-light" id="sweet_row">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Use <code>grow: 'row'</code> to show notification in <strong>row</strong> mode</td>
								</tr>
								<tr class="table-border-solid">
									<td>Disabled keyboard interaction</td>
									<td><button type="button" class="btn btn-light" id="sweet_disabled_keyboard">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>This example can't be dismissed by pressing the <kbd>Escape</kbd> , <kbd>Space</kbd> or <kbd>Enter</kbd> keys</td>
								</tr>
								<tr>
									<td>Disabled animation</td>
									<td><button type="button" class="btn btn-light" id="sweet_disabled_animation">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>If <code>animation</code> option is set to <code>false</code>, modal CSS animation will be disabled</td>
								</tr>
								<tr>
									<td>Disabled backdrop</td>
									<td><button type="button" class="btn btn-light" id="sweet_disabled_backdrop">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Set <code>backdrop</code> option to <code>false</code> to disable a full screen click-to-dismiss backdrop</td>
								</tr>
								<tr>
									<td>Disabled outside click</td>
									<td><button type="button" class="btn btn-light" id="sweet_disabled_outside_click">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Set <code>allowOutsideClick</code> option to <code>false</code> to disable modal dismiss by clicking outside it</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">Input types</th>
								</tr>
								<tr>
									<td>Text input type</td>
									<td><button type="button" class="btn btn-light" id="sweet_text">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of <code>text</code> input type</td>
								</tr>
								<tr>
									<td>Email input type</td>
									<td><button type="button" class="btn btn-light" id="sweet_email">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of <code>email</code> input type</td>
								</tr>
								<tr>
									<td>URL input type</td>
									<td><button type="button" class="btn btn-light" id="sweet_url">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of <code>url</code> input type</td>
								</tr>
								<tr>
									<td>Password input type</td>
									<td><button type="button" class="btn btn-light" id="sweet_password">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of <code>password</code> input type</td>
								</tr>
								<tr>
									<td>Textarea input type</td>
									<td><button type="button" class="btn btn-light" id="sweet_textarea">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of <code>textarea</code> input type</td>
								</tr>
								<tr>
									<td>Select input type</td>
									<td><button type="button" class="btn btn-light" id="sweet_select">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of <code>select</code> input type</td>
								</tr>
								<tr>
									<td>Select2 single</td>
									<td><button type="button" class="btn btn-light" id="sweet_select2_single">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of a <strong>single</strong> <code>select2</code> select</td>
								</tr>
								<tr>
									<td>Select2 multiple</td>
									<td><button type="button" class="btn btn-light" id="sweet_select2_multiple">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of <strong>multiple</strong> <code>select2</code> select</td>
								</tr>
								<tr>
									<td>Multiselect</td>
									<td><button type="button" class="btn btn-light" id="sweet_multiselect">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of SweetAlert modal with Bootstrap Multiselect and validation</td>
								</tr>
								<tr>
									<td>Radio input type</td>
									<td><button type="button" class="btn btn-light" id="sweet_radio">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of SweetAlert popup with default <code>radio</code> input type</td>
								</tr>
								<tr>
									<td>Radio custom</td>
									<td><button type="button" class="btn btn-light" id="sweet_radio_custom">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of SweetAlert popup with custom <code>radio</code> input type</td>
								</tr>
								<tr>
									<td>Checkbox input type</td>
									<td><button type="button" class="btn btn-light" id="sweet_checkbox">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of SweetAlert popup with default <code>checkbox</code> input type</td>
								</tr>
								<tr>
									<td>Checkbox custom</td>
									<td><button type="button" class="btn btn-light" id="sweet_checkbox_custom">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of SweetAlert popup with custom <code>checkbox</code> input type</td>
								</tr>
								<tr>
									<td>Switchery</td>
									<td><button type="button" class="btn btn-light" id="sweet_switchery">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of SweetAlert popup with custom <code>switchery</code> checkbox type</td>
								</tr>
								<tr>
									<td>File input type</td>
									<td><button type="button" class="btn btn-light" id="sweet_file">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of SweetAlert popup with default <code>file</code> input type</td>
								</tr>
								<tr>
									<td>Range input type</td>
									<td><button type="button" class="btn btn-light" id="sweet_range">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Example of <code>range</code> input type</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">Positions</th>
								</tr>
								<tr>
									<td>Top</td>
									<td><button type="button" class="btn btn-light" id="sweet_top">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Add <code>position: 'top'</code> to change notification position to <strong>top</strong></td>
								</tr>
								<tr>
									<td>Top left</td>
									<td><button type="button" class="btn btn-light" id="sweet_top_left">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Add <code>position: 'top-left'</code> to change notification position to <strong>top left</strong></td>
								</tr>
								<tr>
									<td>Top right</td>
									<td><button type="button" class="btn btn-light" id="sweet_top_right">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Add <code>position: 'top-right'</code> to change notification position to <strong>top right</strong></td>
								</tr>
								<tr>
									<td>Center left</td>
									<td><button type="button" class="btn btn-light" id="sweet_center_left">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Add <code>position: 'center-left'</code> to change notification position to <strong>center left</strong></td>
								</tr>
								<tr>
									<td>Center right</td>
									<td><button type="button" class="btn btn-light" id="sweet_center_right">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Add <code>position: 'center-right'</code> to change notification position to <strong>center right</strong></td>
								</tr>
								<tr>
									<td>Bottom</td>
									<td><button type="button" class="btn btn-light" id="sweet_bottom">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Add <code>position: 'bottom'</code> to change notification position to <strong>bottom</strong></td>
								</tr>
								<tr>
									<td>Bottom left</td>
									<td><button type="button" class="btn btn-light" id="sweet_bottom_left">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Add <code>position: 'bottom-left'</code> to change notification position to <strong>bottom left</strong></td>
								</tr>
								<tr>
									<td>Bottom right</td>
									<td><button type="button" class="btn btn-light" id="sweet_bottom_right">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Add <code>position: 'bottom-right'</code> to change notification position to <strong>bottom right</strong></td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">Callbacks</th>
								</tr>
								<tr>
									<td>onOpen</td>
									<td><button type="button" class="btn btn-light" id="sweet_onopen">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Function to run when modal <code>opens</code>, provides modal DOM element as the first argument</td>
								</tr>
								<tr>
									<td>onClose</td>
									<td><button type="button" class="btn btn-light" id="sweet_onclose">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Function to run when modal <code>closes</code>, provides modal DOM element as the first argument</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /sweetalert examples -->

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
