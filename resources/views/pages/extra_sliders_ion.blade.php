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
	<script src="../../../../global_assets/js/plugins/sliders/ion_rangeslider.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/moment/moment_locales.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/extra_sliders_ion.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Extra</span> - Ion Range Sliders</h4>
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
							<a href="extra_sliders_ion" class="breadcrumb-item">Extra</a>
							<span class="breadcrumb-item active">Ion range sliders</span>
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

				<!-- Notice -->
			    <div class="alert alert-info bg-white alert-styled-left alert-arrow-left alert-dismissible">
					<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
					<h6 class="font-weight-semibold mb-1">RTL support</h6>
					At the moment ION range slider library doesn't support RTL direction. Please use jQuery UI sliders or NoUI sliders as an alternative.
			    </div>
			    <!-- /notice -->


				<!-- Basic examples -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Basic examples
					</h6>
					<span class="text-muted d-block">Sliders with basic functionality</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Basic slider example</h6>
								<p class="mb-3 text-muted">Default setup without parameters</p>
							</div>

							<input type="text" class="form-control ion-height-helper" id="ion-basic" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Set up range and step</h6>
								<p class="mb-3 text-muted">Set up range with negative values</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-negative" data-fouc>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Set start point</h6>
								<p class="mb-3 text-muted">Set min value, max value and start point</p>
							</div>

							<input type="text" class="form-control ion-height-helper" id="ion-start" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Custom stepping</h6>
								<p class="mb-3 text-muted">Set slider step using <code>step</code> option</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-step" data-fouc>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Basic range slider</h6>
								<p class="mb-3 text-muted">Set type to double and specify range</p>
							</div>

							<input type="text" class="form-control ion-height-helper" id="ion-range" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Fractional step</h6>
								<p class="mb-3 text-muted">Set up range with fractional values</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-fractional" data-fouc>
						</div>
					</div>
				</div>
				<!-- /basic examples -->


				<!-- Customizing values -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Customizing values
					</h6>
					<span class="text-muted d-block">Prettify visual look of numbers</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Custom number values</h6>
								<p class="mb-3 text-muted">Set up custom numbers in the grid</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-custom-numbers" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Disable prettify</h6>
								<p class="mb-3 text-muted">Big numbers are ugly and unreadable</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-numbers-no-prettify" data-fouc>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Custom value names</h6>
								<p class="mb-3 text-muted">Using any strings as your values</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-custom-strings" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Enable prettify</h6>
								<p class="mb-3 text-muted">Looks much better with spacing</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-numbers-prettify" data-fouc>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Months values</h6>
								<p class="mb-3 text-muted">Another example of using strings</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-custom-months" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Custom separator</h6>
								<p class="mb-3 text-muted">Don't like spacing? Add your own separator</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-custom-separator" data-fouc>
						</div>
					</div>
				</div>
				<!-- /customizing values -->


				<!-- Decorating numbers -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Decorating numbers
					</h6>
					<span class="text-muted d-block">Add prefixes, postfixes, symbols etc.</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Numbers with prefix</h6>
								<p class="mb-3 text-muted">Adding custom prefix to the numbers</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-custom-prefix" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Decorate both values</h6>
								<p class="mb-3 text-muted">Using <code>decorate_both</code> config option</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-decorate-both" data-fouc>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Numbers with postfix</h6>
								<p class="mb-3 text-muted">Adding custom postfix to the numbers</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-custom-postfix" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Decoration separator</h6>
								<p class="mb-3 text-muted">Change default separator to your own</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-decorate-both-custom" data-fouc>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Number with no limit</h6>
								<p class="mb-3 text-muted">If max number is not the biggest one</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-max-no-limit" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Remove decoration</h6>
								<p class="mb-3 text-muted">No decoration in the second value</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-decorate-both-remove" data-fouc>
						</div>
					</div>
				</div>
				<!-- /decorating numbers -->


				<!-- Advanced examples -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Advanced examples
					</h6>
					<span class="text-muted d-block">More complex slider examples</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Values inside container</h6>
								<p class="mb-3 text-muted">Prevent numbers from overflowing</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-force-edges" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Grid values density</h6>
								<p class="mb-3 text-muted">Control number of grid values</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-grid-values" data-fouc>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Disabled slider</h6>
								<p class="mb-3 text-muted">Lock the slider using <code>disable</code> option</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-disabled" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Attach values to steps</h6>
								<p class="mb-3 text-muted">Have predifined step? You can snap grid to it</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-grid-snap" data-fouc>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Keyboard controls</h6>
								<p class="mb-3 text-muted">Arrow keys and WSAD slider control</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-keyboard" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Fractional step</h6>
								<p class="mb-3 text-muted">Attach values to fractional steps</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-grid-snap-fractional" data-fouc>
						</div>
					</div>
				</div>
				<!-- /advanced examples -->


				<!-- Manipulations -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Manipulations
					</h6>
					<span class="text-muted d-block">Manipulation intervals, handles etc.</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Minimum interval size</h6>
								<p class="mb-3 text-muted">Set min interval using <code>min_interval</code> option</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-interval-min" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Lock left handle</h6>
								<p class="mb-3 text-muted">Fix <strong>from</strong> handle with <code>from_fixed</code> option</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-lock-from" data-fouc>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Maximum interval size</h6>
								<p class="mb-3 text-muted">Set max interval using <code>max_interval</code> option</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-interval-max" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Lock right handle</h6>
								<p class="mb-3 text-muted">Fix <strong>to</strong> handle with <code>to_fixed</code> option</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-lock-to" data-fouc>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Dragging interval</h6>
								<p class="mb-3 text-muted">Enable dragging with <code>drag_interval</code> option</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-interval-drag" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Lock both handles</h6>
								<p class="mb-3 text-muted">You can even lock both slider handles</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-lock-both" data-fouc>
						</div>
					</div>
				</div>
				<!-- /manipulations -->


				<!-- Slider colors title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Other examples
					</h6>
					<span class="text-muted d-block">Format date and time, setting limits etc.</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Movement limit</h6>
								<p class="mb-3 text-muted">Set limits for slider movement</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-movement-limit" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Moment.js format</h6>
								<p class="mb-3 text-muted">Format date using moment.js</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-moment-basic" data-fouc>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Highlight limited zone</h6>
								<p class="mb-3 text-muted">Highlight the zone using <code>from_shadow</code> option</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-highlight-limit" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Time format</h6>
								<p class="mb-3 text-muted">12 or 24 hours time format</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-moment-time" data-fouc>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Highlight in range</h6>
								<p class="mb-3 text-muted">More complex example of zone highlight</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-highlight-range" data-fouc>
						</div>

						<div class="card card-body border-top-1 border-top-danger">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Localization</h6>
								<p class="mb-3 text-muted">Moment.js date and time localization</p>
							</div>

							<input type="text" class="form-control ion-pips-height-helper" id="ion-moment-local" data-fouc>
						</div>
					</div>
				</div>
				<!-- /slider colors -->

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
