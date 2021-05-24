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

	<link href="../../../../global_assets/css/extras/animate.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /core JS files -->

	<!-- Page JS files -->
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/extension_blockui.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Extensions</span> - BlockUI</h4>
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
							<a href="extension_blockui" class="breadcrumb-item">Extensions</a>
							<span class="breadcrumb-item active">BlockUI</span>
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

				<!-- Plugin overview -->
				<div class="card mb-4">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">BlockUI extension</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="mb-3">
							<h6 class="font-weight-semibold">BlockUI overview</h6>
							<p>The jQuery <code>BlockUI</code> Plugin lets you simulate synchronous behavior when using AJAX, without locking the browser (Using the <code>XMLHttpRequest</code> object in synchronous mode causes the entire browser to lock until the remote call completes. This is usually not a desirable behavior). When activated, it will prevent user activity with the page (or part of the page) until it is deactivated. BlockUI adds elements to the DOM to give it both the appearance and behavior of blocking user interaction. By default blockUI message displays text inside a bordered frame. In this template default style is rotating spinner icon. Other message, overlay and plugin options you can find in demos below.</p>
						</div>

						<h6 class="font-weight-semibold">Sample markup</h6>
						<p class="mb-3">Sample examples of blocking user activity with the entire page and with content card on button click. In both examples <code>auto unblock</code> is enabled for demonstration purposes and unblock specified containers in 2 seconds. In real final working version all containers can be unblocked when ajax activity stops. All styles for overlay and message are custom, default message displays text only.</p>
						<div class="row">
							<div class="col-md-6">
								<p class="font-weight-semibold">Block the card</p>
								<pre class="language-javascript mb-3"><code>/* Block the card on button click */
$('#block-card').on('click', function() {
	var block = $(this).parent().parent();
	$(block).block({ 
	    message: '&lt;i class="icon-spinner4 spinner">&lt;/i>',
	    timeout: 2000, //unblock after 2 seconds
	    overlayCSS: {
	        backgroundColor: '#fff',
	        opacity: 0.8,
	        cursor: 'wait'
	    },
	    css: {
	        border: 0,
	        padding: 0,
	        backgroundColor: 'transparent'
	    }
	});
});</code></pre>
							</div>

							<div class="col-md-6">
								<p class="font-weight-semibold">Block current page</p>
								<pre class="language-javascript mb-3"><code>/* Block current page on button click */
$('#block-page').on('click', function() {
	$.blockUI({ 
	    message: '&lt;i class="icon-spinner4 spinner">&lt;/i>',
	    timeout: 2000, //unblock after 2 seconds
	    overlayCSS: {
	        backgroundColor: '#1b2024',
	        opacity: 0.8,
	        cursor: 'wait'
	    },
	    css: {
	        border: 0,
	        color: '#fff',
	        padding: 0,
	        backgroundColor: 'transparent'
	    }
	});
});</code></pre>
							</div>
						</div>
					</div>
				</div>
				<!-- /plugin overview -->


				<!-- Blocking areas -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Blocking areas
					</h6>
					<span class="text-muted d-block">Block layout areas, content components or entire page</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Whole page blocking</h6>
							<p class="mb-3 text-muted">Block entire page using default options</p>

							<div>
								<button type="button" class="btn btn-primary" id="block-page">Block the whole page</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Layout area blocking</h6>
							<p class="mb-3 text-muted">Block layout areas using default options</p>

							<div>
								<button type="button" class="btn btn-primary" id="block-sidebar">Block left sidebar</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Content component blocking</h6>
							<p class="mb-3 text-muted">Block content components using default options</p>

							<div>
								<button type="button" class="btn btn-primary" id="block-card">Block this card</button>
							</div>
						</div>
					</div>
				</div>
				<!-- blocking areas -->


				<!-- Overlay options -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Overlay options
					</h6>
					<span class="text-muted d-block">Default and custom overlay options</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Basic light overlay</h6>
							<p class="mb-3 text-muted">Displays basic overlay with opacity</p>
							
							<div>
								<button type="button" class="btn btn-danger" id="basic-overlay">Basic overlay</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Custom overlay color</h6>
							<p class="mb-3 text-muted">Displays custom background color in overlay</p>
							
							<div>
								<button type="button" class="btn btn-danger" id="overlay-custom">Custom overlay color</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Full overlay cover</h6>
							<p class="mb-3 text-muted">Displays fully opaque overlay</p>
							
							<div>
								<button type="button" class="btn btn-danger" id="overlay-cover">Full overlay cover</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /overlay options -->


				<!-- Display options -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Display options
					</h6>
					<span class="text-muted d-block">Variations of message and overlay appearance</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Block without message</h6>
							<p class="mb-3 text-muted">Displays overlay only, message is empty</p>
							
							<div>
								<button type="button" class="btn btn-success" id="no-message">No message</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Block without overlay</h6>
							<p class="mb-3 text-muted">Displays message only, overlay is hidden</p>
							
							<div>
								<button type="button" class="btn btn-success" id="no-overlay">No overlay</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Basic Growl example</h6>
							<p class="mb-3 text-muted">Displays message and overlay as a Growl</p>
							
							<div>
								<button type="button" class="btn btn-success" id="growl">Growl example</button>
							</div>

							<div class="blockui-growl bg-grey-800 text-white text-left p-3 rounded" style="display: none;">
					            <i class="icon-exclamation"></i>&nbsp; BlockUI Growl Notification
					        </div>
						</div>
					</div>
				</div>
				<!-- /display options -->


				<!-- Messsage options -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Message options
					</h6>
					<span class="text-muted d-block">Default and custom options for messages</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Block with spinner only</h6>
							<p class="mb-3 text-muted">Displays animated spinner icon only, no text</p>
							
							<div>
								<button type="button" class="btn btn-info" id="spinner-only">With spinner only</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Block with DOM element</h6>
							<p class="mb-3 text-muted">Displays DOM element as a message</p>
							
							<div>
								<button type="button" class="btn btn-info" id="dom-message">DOM element as a message</button>
							</div>

							<div class="blockui-message bg-slate-700 text-white rounded px-3 py-2" style="display: none;">
								<i class="icon-spinner10 spinner mt-1"></i>
					            <span class="font-weight-semibold d-block mt-2">Loading</span>
					        </div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Block with default message</h6>
							<p class="mb-3 text-muted">Displays default text message, no spinner</p>
							
							<div>
								<button type="button" class="btn btn-info" id="default-message">With default message</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Multiple messages</h6>
							<p class="mb-3 text-muted">Multiple messages with different styles</p>
							
							<div>
								<button type="button" class="btn btn-info" id="multiple-messages">Multiple messages</button>
							</div>

							<div class="blockui-message bg-slate-700 text-white rounded p-2" style="display: none;">
								<i class="icon-spinner10 spinner mt-1"></i>
					            <span class="font-weight-semibold d-block mt-2">Loading</span>
					        </div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Block with custom message</h6>
							<p class="mb-3 text-muted">Custom message with overlay and spinner</p>
							
							<div>
								<button type="button" class="btn btn-info" id="custom-message">With custom message</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Message animation</h6>
							<p class="mb-3 text-muted">Message animation using <code>animate.css</code></p>
							
							<div>
								<button type="button" class="btn btn-info" id="custom-message-animation" data-animation="fadeInDown">Custom message animation</button>
							</div>

							<div class="blockui-animation-container bg-grey-700 line-height-1 p-2 rounded" style="display: none;">
								<span class="font-weight-semibold"><i class="icon-spinner10 spinner top-0"></i></span>
							</div>
						</div>
					</div>
				</div>
				<!-- /messsage options -->


				<!-- Other options -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Other options
					</h6>
					<span class="text-muted d-block">Message position and unblocking options</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Message position</h6>
							<p class="mb-3 text-muted">Displays custom message position</p>
							
							<div>
								<button type="button" class="btn btn-warning" id="custom-position">Custom message position</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Auto unblocking</h6>
							<p class="mb-3 text-muted">Demonstrates auto unblocking feature</p>
							
							<div>
								<button type="button" class="btn btn-warning" id="auto-unblock">Auto unblock</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Click to unblock</h6>
							<p class="mb-3 text-muted">Click overlay to unblock the element</p>
							
							<div>
								<button type="button" class="btn btn-warning" id="click-unblock">Click overlay to unblock</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /other options -->


				<!-- Callback methods -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Callback methods
					</h6>
					<span class="text-muted d-block">On block, on unblock and on overlay click</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">onBlock callback</h6>
							<p class="mb-3 text-muted">Invoked when blocking message is visible</p>
							
							<div>
								<button type="button" class="btn bg-teal" id="block-callback">onBlock callback</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">onUnblock callback</h6>
							<p class="mb-3 text-muted">Invoked when unblocking has completed</p>
							
							<div>
								<button type="button" class="btn bg-teal" id="unblock-callback">onUnblock callback</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">onOverlayClick callback</h6>
							<p class="mb-3 text-muted">Invoked when blocking overlay is clicked</p>
							
							<div>
								<button type="button" class="btn bg-teal" id="overlay-callback">onOverlayClick callback</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /callback methods -->

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
