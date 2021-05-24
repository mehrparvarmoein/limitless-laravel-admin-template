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
	<script src="../../../../global_assets/js/plugins/notifications/pnotify.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/extra_pnotify.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Extra</span> - PNotify</h4>
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
							<a href="extra_pnotify" class="breadcrumb-item">Extra</a>
							<span class="breadcrumb-item active">PNotify</span>
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

				<!-- PNotify notifications -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">PNotify notifications</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						PNotify is a JavaScript <code>notification</code> library, formerly known as Pines Notify. It is designed to provide an unparalleled level of flexibility, while still being very easy to implement and use. PNotify supports desktop notifications, modulues, stacks and flexible theming. Desktop notifications are based on the <code>web notifications</code> draft. If desktop notifications are not available or not allowed, PNotify will fall back to displaying the notice as a regular, in-browser notice.
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr class="table-active">
									<th colspan="3">Solid color notifications</th>
								</tr>
								<tr>
									<td>Primary notice</td>
									<td><button type="button" class="btn btn-primary" id="pnotify-solid-primary">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Primary notice. To use, add <code>.bg-primary</code> color class to the plugin configuration options</td>
								</tr>
								<tr>
									<td>Danger notice</td>
									<td><button type="button" class="btn btn-danger" id="pnotify-solid-danger">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Danger notice. To use, add <code>.bg-danger</code> color class to the plugin configuration options</td>
								</tr>
								<tr>
									<td>Success notice</td>
									<td><button type="button" class="btn btn-success" id="pnotify-solid-success">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Success notice. To use, add <code>.bg-success</code> color class to the plugin configuration options</td>
								</tr>
								<tr>
									<td>Warning notice</td>
									<td><button type="button" class="btn btn-warning" id="pnotify-solid-warning">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Warning notice. To use, add <code>.bg-warning</code> color class to the plugin configuration options</td>
								</tr>
								<tr>
									<td>Info notice</td>
									<td><button type="button" class="btn btn-info" id="pnotify-solid-info">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Info notice. To use, add <code>.bg-info</code> color class to the plugin configuration options</td>
								</tr>
								<tr class="table-border-solid">
									<td>Custom color notice</td>
									<td><button type="button" class="btn btn-light" id="pnotify-solid-custom">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Notice with custom background color. To use, add custom <code>.bg-*</code> color class to the plugin configuration options</td>
								</tr>
								<tr>
									<td>Left icon</td>
									<td><button type="button" class="btn btn-light" id="pnotify-solid-styled-left">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Solid color notification with left icon. To use, add <code>'bg-* alert-styled-left'</code> to the <code>addclass: '...'</code> option</td>
								</tr>
								<tr>
									<td>Right icon</td>
									<td><button type="button" class="btn btn-light" id="pnotify-solid-styled-right">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Solid color notification with right icon. To use, add <code>'bg-* alert-styled-right'</code> to the <code>addclass: '...'</code> option</td>
								</tr>

								<tr class="table-active">
									<th colspan="3">Basic notifications</th>
								</tr>
								<tr>
									<td style="width: 20%;">Default notice</td>
									<td style="width: 20%;"><button type="button" class="btn btn-warning" id="pnotify-default">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Basic pnotify notification. All notification color styles correspond to the Boostrap's <code>alert</code> component</td>
								</tr>
								<tr>
									<td>Success notice</td>
									<td><button type="button" class="btn btn-success" id="pnotify-success">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Success notice. To use, add <code>type: 'success'</code> to the plugin configuration</td>
								</tr>
								<tr>
									<td>Danger notice</td>
									<td><button type="button" class="btn btn-danger" id="pnotify-danger">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Danger notice. To use, add <code>type: 'error'</code> to the plugin configuration</td>
								</tr>
								<tr>
									<td>Info notice</td>
									<td><button type="button" class="btn btn-primary" id="pnotify-info">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Info notice. To use, add <code>type: 'info'</code> to the plugin configuration</td>
								</tr>
								<tr class="table-border-solid">
									<td>Left positioned icon</td>
									<td><button type="button" class="btn btn-light" id="pnotify-styled-left">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Notification with left positioned icon. To use, add <code>'alert-styled-left'</code> to the <code>addclass: '...'</code> option</td>
								</tr>
								<tr>
									<td>Right positioned icon</td>
									<td><button type="button" class="btn btn-light" id="pnotify-styled-right">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Notification with right positioned icon. To use, add <code>'alert-styled-right'</code> to the <code>addclass: '...'</code> option</td>
								</tr>
								<tr>
									<td>Display arrow</td>
									<td><button type="button" class="btn btn-light" id="pnotify-styled-arrow">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Display arrow in styled notifications. To use, add <code>'alert-arrow-left'</code> or <code>'*-right'</code> to the <code>addclass: '...'</code> option</td>
								</tr>
								<tr>
									<td>Notice with custom color</td>
									<td><button type="button" class="btn btn-light" id="pnotify-custom-styled">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Notification with custom background/border/text color. Text, background and border color can be changed by adding proper classes to the plugin configuration</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">Desktop notifications</th>
								</tr>
								<tr>
									<td>Default notice</td>
									<td><button type="button" class="btn btn-primary" id="pnotify-desktop-default">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>The first time you click one of these buttons, you will be asked to grant permission for this site to show notices. Then you can click them again to see the desktop notification</td>
								</tr>
								<tr>
									<td>Danger notice</td>
									<td><button type="button" class="btn btn-danger" id="pnotify-desktop-danger">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Danger desktop notification using a custom contextual icon. If permission denied, this icon will be hidden</td>
								</tr>
								<tr>
									<td>Success notice</td>
									<td><button type="button" class="btn btn-success" id="pnotify-desktop-success">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Success desktop notification using a custom contextual icon. If permission denied, this icon will be hidden</td>
								</tr>
								<tr>
									<td>Warning notice</td>
									<td><button type="button" class="btn btn-warning" id="pnotify-desktop-warning">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Warning desktop notification using a custom contextual icon. If permission denied, this icon will be hidden</td>
								</tr>
								<tr>
									<td>Info notice</td>
									<td><button type="button" class="btn btn-info" id="pnotify-desktop-info">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Info desktop notification using a custom contextual icon. If permission denied, this icon will be hidden</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">Notification options</th>
								</tr>
								<tr>
									<td>No title</td>
									<td><button type="button" class="btn btn-light" id="pnotify-no-title">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Notification without <code>title</code>. This is a default option, the title won't be shown if it isn't specified in notification configuration</td>
								</tr>
								<tr>
									<td>Rich notice</td>
									<td><button type="button" class="btn btn-light" id="pnotify-rich">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>By default notification supports <code>rich</code> content, including typography components, links, icons, buttons etc</td>
								</tr>
								<tr>
									<td>Click to close</td>
									<td><button type="button" class="btn btn-light" id="pnotify-click">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Notification can be closed on a <code>closer</code> button click or on a notification itself via <code>click()</code> event</td>
								</tr>
								<tr>
									<td>Form notice</td>
									<td><button type="button" class="btn btn-light" id="pnotify-form">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Notification with <code>form</code> components. Form is inserted as a DOM object</td>
								</tr>
								<tr>
									<td>Sticky notice</td>
									<td><button type="button" class="btn btn-light" id="pnotify-sticky">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Sticky notification. To use, add <code>hide: false</code> to the notification configuration</td>
								</tr>
								<tr>
									<td>No sticky button</td>
									<td><button type="button" class="btn btn-light" id="pnotify-sticky-buttons">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Notification with hidden <code>sticky</code> button. To use, add <code>button.sticker: false</code> to the notification config</td>
								</tr>
								<tr>
									<td>Permanent buttons</td>
									<td><button type="button" class="btn btn-light" id="pnotify-permanent-buttons">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>By default, notification control buttons appear on hover. To make them always visible, add <code>buttons.closer_hover: false</code></td>
								</tr>
								<tr>
									<td>Permanotice</td>
									<td><button type="button" class="btn btn-light" id="pnotify-permanotice">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>To show <code>permanent</code> notification, make it sticky and hide control buttons</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">PNotify modules</th>
								</tr>
								<tr>
									<td>Confirmation</td>
									<td><button type="button" class="btn btn-light" id="pnotify-confirm">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Confirmation dialog with callbacks. To use, add <code>confirm.confirm: true</code> to the notice config</td>
								</tr>
								<tr>
									<td>Prompt</td>
									<td><button type="button" class="btn btn-light" id="pnotify-prompt">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Prompt dialog with callbacks. To use, add <code>confirm.prompt: true</code> to the notice config</td>
								</tr>
								<tr>
									<td>Multi line</td>
									<td><button type="button" class="btn btn-light" id="pnotify-multiline">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Multi line prompt dialog with textarea. To use, add <code>prompt_multi_line: true</code> to the notice config</td>
								</tr>
								<tr>
									<td>Custom buttons</td>
									<td><button type="button" class="btn btn-light" id="pnotify-buttons">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Notification with <code>custom</code> buttons and callbacks</td>
								</tr>
								<tr>
									<td>With callbacks</td>
									<td><button type="button" class="btn btn-light" id="pnotify-callbacks">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Notification <code>callbacks</code>. Available callbacks: before and after <code>init</code>, before and after <code>open</code>, before and after <code>close</code></td>
								</tr>
								<tr>
									<td>Switching notices</td>
									<td><button type="button" class="btn btn-light" id="pnotify-switching">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>PNotify supports dynamic notification change. Here notifications are switching using <code>before_close</code> callback</td>
								</tr>
								<tr>
									<td>Progress loader</td>
									<td><button type="button" class="btn btn-light" id="pnotify-progress">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Notification with dynamic <code>progress</code>bar. Here <code>before_open</code> callback is used</td>
								</tr>
								<tr>
									<td>Dynamic loader</td>
									<td><button type="button" class="btn btn-light" id="pnotify-dynamic">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Notification with <code>dynamic</code> content. The content changes in a given time interval using <code>update()</code> function</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">PNotify stacks</th>
								</tr>
								<tr>
									<td>Top left</td>
									<td><button type="button" class="btn btn-light" id="pnotify-stack-top-left">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Top left stack. Moves down, then right. Pushes to stack top</td>
								</tr>
								<tr>
									<td>Bottom left</td>
									<td><button type="button" class="btn btn-light" id="pnotify-stack-bottom-left">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Bottom left stack. Moves right, then up. Pushes to stack top</td>
								</tr>
								<tr>
									<td>Bottom right</td>
									<td><button type="button" class="btn btn-light" id="pnotify-stack-bottom-right">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Bottom right stack. Moves up, then left. Pushes to stack bottom</td>
								</tr>
								<tr>
									<td>Custom left</td>
									<td><button type="button" class="btn btn-light" id="pnotify-stack-custom-left">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Left stack with custom position. Moves right, then down. Pushes to stack bottom</td>
								</tr>
								<tr>
									<td>Custom right</td>
									<td><button type="button" class="btn btn-light" id="pnotify-stack-custom-right">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Right stack with custom position. Moves left, then up. Pushes to stack top</td>
								</tr>
								<tr>
									<td>Top bar</td>
									<td><button type="button" class="btn btn-light" id="pnotify-stack-custom-top">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Top bar stack style. Moves down, then right. Pushes to stack top</td>
								</tr>
								<tr>
									<td>Bottom bar</td>
									<td><button type="button" class="btn btn-light" id="pnotify-stack-custom-bottom">Launch <i class="icon-play3 ml-2"></i></button></td>
									<td>Bottom bar> stack style. Moves up, then right. Pushes to stack bottom</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /PNotify notifications -->


				<!-- Sample form -->
				<div id="form_notice" class="d-none">
					<form action="#">
						<h6 class="mb-3">Login to Continue</h6>
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control border-transparent" name="username" placeholder="Your username...">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control border-transparent" name="password" placeholder="Your password...">
						</div>
						<div class="row">
							<div class="col-md-6">
								<button type="submit" name="submit" class="btn btn-info btn-block">Submit</button>
							</div>

							<div class="col-md-6">
								<button type="button" name="cancel" class="btn btn-danger btn-block mt-2 mt-md-0">Cancel</button>
							</div>
						</div>
					</form>
				</div>
				<!-- /sample form -->

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
