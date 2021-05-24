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
	<script src="../../../../global_assets/js/plugins/extensions/session_timeout.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/extra_idle_timeout.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Extra</span> - Idle Timeout</h4>
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
							<a href="extra_idle_timeout" class="breadcrumb-item">Extra</a>
							<span class="breadcrumb-item active">Idle timeout</span>
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
				<div class="alert alert-info alert-styled-left alert-arrow-left bg-white">
					<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
					<h6 class="alert-heading mb-1 font-weight-semibold">Idle timeout</h6>
					Current settings allow you to track user inactivity and launch a warning dialog in a fixed amount of time after latest user activity. In this demo warning dialog appears <strong>after 5 seconds</strong> of latest user activity.
			    </div>
			    <!-- /info alert -->


				<!-- Idle timeout overview -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Idle Timeout</h5>
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
							<h6 class="font-weight-semibold">Plugin overview</h6>
							<p>After a set amount of idle time, a <span class="font-weight-semibold">Bootstrap warning dialog</span> is shown to the user with the option to either log out, or stay connected. If <span class="font-weight-semibold">"Logout"</span> button is selected, the page is redirected to a logout URL. If <span class="font-weight-semibold">"Stay Connected"</span> is selected, the dialog closes and the session is kept alive. If <span class="font-weight-semibold">no option</span> is selected after another set amount of idle time, the page is automatically redirected to a set timeout URL.</p>

							<p>Idle time is defined as no mouse, keyboard or touch event activity registered by the browser.</p>

							<p>As long as the user is active, the (optional) keep-alive URL keeps getting pinged and the session stays alive. If you have no need to keep the server-side session alive via the keep-alive URL, you can also use this plugin as a simple lock mechanism that redirects to your lock-session or log-out URL after a set amount of idle time.</p>
						</div>

						<h6 class="font-weight-semibold">Plugin usage</h6>
						<ol>
							<li>Include <code>jQuery</code> library</li>
							<li>Include <code>bootstrap.js</code> and <code>bootstrap.css</code> (to support the modal dialog, unless you plan on using your own callback)</li>
							<li>Include the minified <code>session_timeout.min.js</code> plugin file</li>
							<li>Call <code>$.sessionTimeout();</code> after document ready and set necessary options</li>
						</ol>
					</div>

					<div class="table-responsive">
						<table class="table table-lg">
							<thead>
								<tr>
									<th style="width: 20%">Option</th>
									<th style="width: 20%">Default</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><span class="font-weight-semibold">heading</span></td>
									<td><code>'h6'</code></td>
									<td>This is the HTML heading for <code>.modal-title</code> class shown in Bootstrap modal heading.</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">title</span></td>
									<td><code>'Session timeout notification'</code></td>
									<td>If you need to specify custom Bootstrap warning dialog title, you can use this option.</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">message</span></td>
									<td><code>'Your session is about to expire.'</code></td>
									<td>This is the text shown to user via Bootstrap warning dialog after warning period.</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">keepAliveUrl</span></td>
									<td><code>'/keep-alive'</code></td>
									<td>URL to ping via AJAX POST to keep the session alive. This resource should do something innocuous that would keep the session alive, which will depend on your server-side platform.</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">keepAlive</span></td>
									<td><code>'true'</code></td>
									<td>If <code>true</code>, the plugin keeps pinging the <code>keepAliveUrl</code> for as long as the user is active. The time between two pings is set by the <code>keepAliveInterval</code> option. If you have no server-side session timeout to worry about, feel free to set this one to <code>false</code> to prevent unnecessary network activity.</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">keepAliveInterval</span></td>
									<td><code>5000</code> (5 seconds)</td>
									<td>Time in milliseconds between two keep-alive pings.</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">ajaxData</span></td>
									<td><code>''</code></td>
									<td>If you need to send some data via AJAX POST to your <code>keepAliveUrl</code>, you can use this option.</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">redirUrl</span></td>
									<td><code>'/timed-out'</code></td>
									<td>URL to take browser to if no action is take after the warning.</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">logoutUrl</span></td>
									<td><code>'/log-out'</code></td>
									<td>URL to take browser to if user clicks "Logout" on the Bootstrap warning dialog.</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">warnAfter</span></td>
									<td><code>900000</code> (15 minutes)</td>
									<td>Time in milliseconds after page is opened until warning dialog is opened.</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">redirAfter</span></td>
									<td><code>1200000</code> (20 minutes)</td>
									<td>Time in milliseconds after page is opened until browser is redirected to <code>redirUrl</code>.</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">keepBtnClass</span></td>
									<td><code>'btn btn-primary'</code></td>
									<td>This is the default <code>"Stay connected!"</code> button style, use this option if you need to change the button color by changing button classes.</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">keepBtnText</span></td>
									<td><code>'Stay connected'</code></td>
									<td>If you need to change default <code>Stay connected</code>button text to the custom one or translate to different language, use this option</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">logoutBtnClass</span></td>
									<td><code>'btn btn-danger'</code></td>
									<td>This is the default <code>"Logout"</code> button style, use this option if you need to change the button color by changing button classes.</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">logoutBtnText</span></td>
									<td><code>'Logout'</code></td>
									<td>If you need to change default <code>Logout</code>button text to the custom one or translate to different language, use this option</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">ignoreUserActivity</span></td>
									<td><code>false</code></td>
									<td>If <code>true</code>, this will launch the Bootstrap warning dialog / redirect (or callback functions) in a set amounts of time regardless of user activity.</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">onWarn</span></td>
									<td><code>false</code></td>
									<td>Custom callback you can use instead of showing the Bootstrap warning dialog. Redirect action will still occur unless you also add the <code>onRedir</code> callback.</td>
								</tr>
								<tr>
									<td><span class="font-weight-semibold">onRedir</span></td>
									<td><code>false</code></td>
									<td>Custom callback you can use instead of redirectiong the user to <code>redirUrl</code>.</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /idle timeout overview -->


				<!-- Plugin examples -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Timeout examples</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>
					
					<div class="card-body">
						<div class="mb-4">
							<h6 class="font-weight-semibold">Basic usage</h6>
							<p>Shows the warning dialog after one minute. The dialog is visible for another minute. If user takes no action (interacts with the page in any way), browser is redirected to <code>redirUrl</code>. On any user action (mouse, keyboard or touch) the timeout timer is reset. Of course, you will still need to close the dialog.</p>

<pre class="language-javascript"><code>$.sessionTimeout({
	message: 'Your session will be locked in one minute.',
	keepAliveUrl: 'keep-alive',
	logoutUrl: 'login',
	redirUrl: 'locked',
	warnAfter: 60000,
	redirAfter: 120000
});</code></pre>
						</div>

						<div class="mb-4">
							<h6 class="font-weight-semibold">With onWarn Callback</h6>
							<p>Shows the "Warning!" alert after one minute. If user takes no action (interacts with the page in any way), after one more minute the browser is redirected to <code>redirUrl</code>. On any user action (mouse, keyboard or touch) the timeout timer is reset.</p>

<pre class="language-javascript"><code>$.sessionTimeout({
	redirUrl: 'locked',
	warnAfter: 60000,
	redirAfter: 120000,
	onWarn: function{
	    alert('Warning!');
	}
});</code></pre>
						</div>

						<div class="mb-4">
							<h6 class="font-weight-semibold">With both onWarn and onRedir Callback</h6>
							<p>Console logs the "Your session will soon expire!" text after one minute. If user takes no action (interacts with the page in any way), after two more minutes the "Your session has expired!" alert gets shown. No redirection occurs. On any user action (mouse, keyboard or touch) the timeout timer is reset.</p>

<pre class="language-javascript"><code>$.sessionTimeout({
	warnAfter: 60000,
	redirAfter: 180000,
	onWarn: function{
	    console.log('Your session will soon expire!');
	},
	onRedir: function{
	    alert('Your session has expired!');
	}
});</code></pre>
						</div>

						<div class="mb-3">
							<h6 class="font-weight-semibold">Full featured example</h6>
							<p>Demonstrates advanced example with all possible options. The plugin can be used as a session timeout warning or as a user idle timeout, <code>ignoreUserActivity</code> options makes the difference. If option is set to <code>true</code>, as long as the user is doing something on the page, he will never get a timeout. Otherwise he'll get a warning message without user interaction dependency.</p>

<pre class="language-javascript"><code>$.sessionTimeout({
	heading: 'h5',
	title: 'Session expiration',
	message: 'Your session is about to expire. Do you want to stay connected and extend your session?',
	keepAliveUrl: '/',
	keepAlive: true,
	keepAliveInterval: 5000,
	redirUrl: 'logoff',
	logoutUrl: 'login',
	warnAfter: 600000, //10 minutes
	redirAfter: 900000, //15 minutes
	keepBtnClass: 'btn btn-success',
	keepBtnText: 'Extend session',
	logoutBtnClass: 'btn btn-light',
	logoutBtnText: 'Log me out',
	ignoreUserActivity: false,
	onWarn: function{
	    console.log('Your session will soon expire!');
	},
	onRedir: function{
	    alert('Your session has expired!');
	}
});</code></pre>
						</div>
					</div>
				</div>
				<!-- /plugin examples -->

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
