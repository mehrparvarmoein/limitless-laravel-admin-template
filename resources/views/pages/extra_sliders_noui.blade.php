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
	<script src="../../../../global_assets/js/plugins/sliders/nouislider.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/extra_sliders_noui.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Extra</span> - NoUI Sliders</h4>
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
							<a href="extra_sliders_noui" class="breadcrumb-item">Extra</a>
							<span class="breadcrumb-item active">NoUI sliders</span>
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

				<!-- Basic examples -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						NoUI sliders
					</h6>
					<span class="text-muted d-block">Basic NoUI slider examples</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Slider handles</h6>
								<p class="mb-3 text-muted">Set handles using <code>start</code> option</p>
							</div>

							<div class="noui-height-helper" id="noui-slider-handles" data-fouc></div>

							<div class="clearfix">
								<span class="mt-3 float-left">Value: <span class="font-weight-semibold" id="noui-handles-lower-val"></span></span>
								<span class="mt-3 float-right">Value: <span class="font-weight-semibold" id="noui-handles-upper-val"></span></span>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Non-linear slider</h6>
								<p class="mb-3 text-muted">Displays non-linear slider example</p>
							</div>

							<div class="noui-height-helper" id="noui-slider-nonlinear" data-fouc></div>

							<span class="mt-3">Value: <span class="font-weight-semibold" id="noui-nonlinear-val"></span></span>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Values range</h6>
								<p class="mb-3 text-muted">Slider values are part of a range</p>
							</div>

							<div class="noui-height-helper" id="noui-slider-range" data-fouc></div>

							<span class="mt-3">Value: <span class="font-weight-semibold" id="noui-range-val"></span></span>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Non-linear stepping</h6>
								<p class="mb-3 text-muted">Displays steps in non-linear slider</p>
							</div>

							<div class="noui-height-helper" id="noui-slider-nonlinear-stepping" data-fouc></div>

							<div class="clearfix">
								<span class="mt-3 float-left">Value: <span class="font-weight-semibold" id="noui-nonlinear-stepping-lower-val"></span></span>
								<span class="mt-3 float-right">Value: <span class="font-weight-semibold" id="noui-nonlinear-stepping-upper-val"></span></span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Stepping and snapping</h6>
								<p class="mb-3 text-muted">Set slider steps with <code>step</code> option</p>
							</div>

							<div class="noui-height-helper" id="noui-slider-stepping" data-fouc></div>

							<span class="mt-3">Value: <span class="font-weight-semibold" id="noui-stepping-val"></span></span>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Snapping between steps</h6>
								<p class="mb-3 text-muted">Force slider to jump between values</p>
							</div>

							<div class="noui-height-helper" id="noui-slider-snapping" data-fouc></div>

							<div class="clearfix">
								<span class="mt-3 float-left">Value: <span class="font-weight-semibold" id="noui-slider-snapping-lower-val"></span></span>
								<span class="mt-3 float-right">Value: <span class="font-weight-semibold" id="noui-slider-snapping-upper-val"></span></span>
							</div>
						</div>
					</div>
				</div>
				<!-- /basic examples -->


				<!-- Slider behaviour -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Slider Behaviour
					</h6>
					<span class="text-muted d-block">Tapping, dragging, snapping etc.</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Slider behaviour</h6>
								<p class="mb-3 text-muted">Add behaviour to the slider</p>
							</div>

							<div class="noui-height-helper" id="noui-slider-behaviour" data-fouc></div>

							<div class="clearfix">
								<span class="mt-3 float-left">Value: <span class="font-weight-semibold" id="noui-slider-behaviour-lower-val"></span></span>
								<span class="mt-3 float-right">Value: <span class="font-weight-semibold" id="noui-slider-behaviour-upper-val"></span></span>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Fixed dragging</h6>
								<p class="mb-3 text-muted">Distance between handles is fixed</p>
							</div>

							<div class="noui-height-helper" id="noui-slider-drag-fixed" data-fouc></div>

							<div class="clearfix">
								<span class="mt-3 float-left">Value: <span class="font-weight-semibold" id="noui-slider-fixed-lower-val"></span></span>
								<span class="mt-3 float-right">Value: <span class="font-weight-semibold" id="noui-slider-fixed-upper-val"></span></span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Tap behaviour</h6>
								<p class="mb-3 text-muted">A handle slides to a clicked location</p>
							</div>

							<div class="noui-height-helper" id="noui-slider-tap" data-fouc></div>

							<span class="mt-3">Value: <span class="font-weight-semibold" id="noui-slider-tap-val"></span></span>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Snap behaviour</h6>
								<p class="mb-3 text-muted">A handle snaps to a clicked location</p>
							</div>

							<div class="noui-height-helper" id="noui-slider-snap" data-fouc></div>

							<span class="mt-3">Value: <span class="font-weight-semibold" id="noui-slider-snap-val"></span></span>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Drag behaviour</h6>
								<p class="mb-3 text-muted">Makes the range dragable</p>
							</div>

							<div class="noui-height-helper" id="noui-slider-drag" data-fouc></div>

							<div class="clearfix">
								<span class="mt-3 float-left">Value: <span class="font-weight-semibold" id="noui-slider-drag-lower-val"></span></span>
								<span class="mt-3 float-right">Value: <span class="font-weight-semibold" id="noui-slider-drag-upper-val"></span></span>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Combined options</h6>
								<p class="mb-3 text-muted">Behaviour flags can be combined</p>
							</div>

							<div class="noui-height-helper" id="noui-slider-combined" data-fouc></div>

							<div class="clearfix">
								<span class="mt-3 float-left">Value: <span class="font-weight-semibold" id="noui-slider-combined-lower-val"></span></span>
								<span class="mt-3 float-right">Value: <span class="font-weight-semibold" id="noui-slider-combined-upper-val"></span></span>
							</div>
						</div>
					</div>
				</div>
				<!-- /slider behaviour -->


				<!-- Pips and scales -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Pips and scales
					</h6>
					<span class="text-muted d-block">Adding a scale/pips to a slider</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Slider with pips</h6>
								<p class="mb-3 text-muted">Slider pips in <code>range</code> mode</p>
							</div>

							<div class="noui-slider-info has-pips noui-pips-height-helper" id="noui-slider-pips-range" data-fouc></div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Count mode</h6>
								<p class="mb-3 text-muted">Slider pips in <code>count</code> mode</p>
							</div>

							<div class="noui-slider-info has-pips noui-pips-height-helper" id="noui-slider-pips-count" data-fouc></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Filtered steps</h6>
								<p class="mb-3 text-muted">Slider with filtered pip labels</p>
							</div>

							<div class="noui-slider-info has-pips noui-pips-height-helper" id="noui-slider-pips-filter" data-fouc></div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Values mode</h6>
								<p class="mb-3 text-muted">Slider pips in <code>values</code> mode</p>
							</div>

							<div class="noui-slider-info has-pips noui-pips-height-helper" id="noui-slider-pips-values" data-fouc></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">RTL direction</h6>
								<p class="mb-3 text-muted">Slider pips in <code>RTL</code> direction</p>
							</div>

							<div class="noui-slider-info has-pips noui-pips-height-helper" id="noui-slider-pips-rtl" data-fouc></div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Positions mode</h6>
								<p class="mb-3 text-muted">Slider pips in <code>positions</code> mode</p>
							</div>

							<div class="noui-slider-info has-pips noui-pips-height-helper" id="noui-slider-pips-positions" data-fouc></div>
						</div>
					</div>
				</div>
				<!-- /pips and scales -->


				<!-- Advanced examples -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Advanced examples
					</h6>
					<span class="text-muted d-block">More complex NoUI slider examples</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Slider with tooltips</h6>
								<p class="mb-3 text-muted">Add tooltips with <code>serialization</code> feature</p>
							</div>

							<div class="noui-slider-danger noui-height-helper" id="noui-slider-tooltip" data-fouc></div>

							<div class="clearfix">
								<span class="mt-3 float-left">Value: <span class="font-weight-semibold" id="noui-slider-tooltip-lower-val"></span></span>
								<span class="mt-3 float-right">Value: <span class="font-weight-semibold" id="noui-slider-tooltip-upper-val"></span></span>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Connect to lower side</h6>
								<p class="mb-3 text-muted">Connect handle to the <code>lower</code> side</p>
							</div>

							<div class="noui-slider-primary noui-height-helper" id="noui-slider-connect-lower" data-fouc></div>

							<span class="mt-3">Value: <span class="font-weight-semibold" id="noui-slider-connect-lower-val"></span></span>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Min handles distance</h6>
								<p class="mb-3 text-muted">Set minimum distance between handles</p>
							</div>

							<div class="noui-slider-danger noui-height-helper" id="noui-slider-margin" data-fouc></div>

							<div class="clearfix">
								<span class="mt-3 float-left">Value: <span class="font-weight-semibold" id="noui-slider-margin-lower-val"></span></span>
								<span class="mt-3 float-right">Value: <span class="font-weight-semibold" id="noui-slider-margin-upper-val"></span></span>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Skipping steps</h6>
								<p class="mb-3 text-muted">Skip certain steps with <code>snap</code> option</p>
							</div>

							<div class="noui-slider-primary noui-height-helper" id="noui-slider-skip-steps" data-fouc></div>

							<div class="clearfix">
								<span class="mt-3 float-left">Value: <span class="font-weight-semibold" id="noui-slider-skip-lower-val"></span></span>
								<span class="mt-3 float-right">Value: <span class="font-weight-semibold" id="noui-slider-skip-upper-val"></span></span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">RTL slider direction</h6>
								<p class="mb-3 text-muted">Change direction with <code>direction</code> option</p>
							</div>

							<div class="noui-slider-danger noui-height-helper" id="noui-slider-direction" data-fouc></div>

							<span class="mt-3">Value: <span class="font-weight-semibold" id="noui-slider-direction-val"></span></span>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Connect to upper side</h6>
								<p class="mb-3 text-muted">Connect handle to the <code>upper</code> side</p>
							</div>

							<div class="noui-slider-primary noui-height-helper" id="noui-slider-connect-upper" data-fouc></div>

							<span class="mt-3">Value: <span class="font-weight-semibold" id="noui-slider-connect-upper-val"></span></span>
						</div>
					</div>
				</div>
				<!-- /advanced examples -->


				<!-- Vertical sliders -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Vertical sliders
					</h6>
					<span class="text-muted d-block">NoUI vertical slider orientation</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Default vertical slider</h6>
							<p class="mb-3 text-muted">Vertical direction slider example</p>

							<div>
								<div class="noui-vertical-height-helper" id="noui-slider-values1" data-fouc></div>
								<div class="noui-vertical-height-helper" id="noui-slider-values2" data-fouc></div>
								<div class="noui-vertical-height-helper" id="noui-slider-values3" data-fouc></div>
								<div class="noui-vertical-height-helper" id="noui-slider-values4" data-fouc></div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Vertical ranges</h6>
							<p class="mb-3 text-muted">Add ranges to vertical slider</p>

							<div>
								<div class="noui-slider-primary noui-vertical-height-helper" id="noui-slider-range1" data-fouc></div>
								<div class="noui-slider-primary noui-vertical-height-helper" id="noui-slider-range2" data-fouc></div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Connect to lower side</h6>
							<p class="mb-3 text-muted">Connect handle to the <code>lower</code> side</p>

							<div>
								<div class="noui-slider-primary noui-vertical-height-helper" id="noui-slider-upper1" data-fouc></div>
								<div class="noui-slider-success noui-vertical-height-helper" id="noui-slider-upper2" data-fouc></div>
								<div class="noui-slider-danger noui-vertical-height-helper" id="noui-slider-upper3" data-fouc></div>
								<div class="noui-slider-info noui-vertical-height-helper" id="noui-slider-upper4" data-fouc></div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Top to bottom pips</h6>
							<p class="mb-3 text-muted">Scale pips from top to bottom</p>

							<div>
								<div class="noui-slider-primary has-pips noui-vertical-height-helper" id="noui-slider-top1" data-fouc></div>
								<div class="noui-slider-primary has-pips noui-vertical-height-helper" id="noui-slider-top2" data-fouc></div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Connect to upper side</h6>
							<p class="mb-3 text-muted">Connect handle to the <code>upper</code> side</p>

							<div>
								<div class="noui-slider-primary noui-vertical-height-helper" id="noui-slider-lower1" data-fouc></div>
								<div class="noui-slider-success noui-vertical-height-helper" id="noui-slider-lower2" data-fouc></div>
								<div class="noui-slider-danger noui-vertical-height-helper" id="noui-slider-lower3" data-fouc></div>
								<div class="noui-slider-info noui-vertical-height-helper" id="noui-slider-lower4" data-fouc></div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Bottom to top pips</h6>
							<p class="mb-3 text-muted">Scale pips from bottom to top</p>

							<div>
								<div class="noui-slider-primary has-pips noui-vertical-height-helper" id="noui-slider-bottom1" data-fouc></div>
								<div class="noui-slider-primary has-pips noui-vertical-height-helper" id="noui-slider-bottom2" data-fouc></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /vertical sliders -->


				<!-- Slider colors title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Slider colors
					</h6>
					<span class="text-muted d-block">Contextual NoUI slider alternatives</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Default slider</h6>
								<p class="mb-3 text-muted">Default <code>dark grey</code> slider color</p>
							</div>

							<div class="mb-1 noui-height-helper" id="noui-slider-color-demo1" data-fouc></div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Success slider style</h6>
								<p class="mb-3 text-muted">Using <code>noui-slider-success</code> class</p>
							</div>

							<div class="noui-slider-success mb-1 noui-height-helper" id="noui-slider-color-demo2" data-fouc></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Primary slider style</h6>
								<p class="mb-3 text-muted">Using <code>noui-slider-primary</code> class</p>
							</div>

							<div class="noui-slider-primary mb-1 noui-height-helper" id="noui-slider-color-demo3" data-fouc></div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Warning slider style</h6>
								<p class="mb-3 text-muted">Using <code>noui-slider-warning</code> class</p>
							</div>

							<div class="noui-slider-warning mb-1 noui-height-helper" id="noui-slider-color-demo4" data-fouc></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Danger slider style</h6>
								<p class="mb-3 text-muted">Using <code>noui-slider-danger</code> class</p>
							</div>

							<div class="noui-slider-danger mb-1 noui-height-helper" id="noui-slider-color-demo5" data-fouc></div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Info slider style</h6>
								<p class="mb-3 text-muted">Using <code>noui-slider-info</code> class</p>
							</div>

							<div class="noui-slider-info mb-1 noui-height-helper" id="noui-slider-color-demo6" data-fouc></div>
						</div>
					</div>
				</div>
				<!-- /slider colors -->


				<!-- Sizes and styles -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Other slider options
					</h6>
					<span class="text-muted d-block">Optional slider settings</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Sizes. Default handle</h6>
								<p class="mb-3 text-muted">Using <code>noui-slider-lg (sm)</code> classes</p>
							</div>

							<div class="noui-slider-primary noui-slider-lg noui-height-helper" id="slider-default-lg" style="margin-bottom: 30px;" data-fouc></div>
							<div class="noui-slider-danger noui-height-helper" id="slider-default-md" style="margin-bottom: 30px;" data-fouc></div>
							<div class="noui-slider-success noui-slider-sm mb-1 noui-height-helper" id="slider-default-sm" data-fouc></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Sizes. Circle handle</h6>
								<p class="mb-3 text-muted">Using <code>noui-slider-circle</code> class</p>
							</div>

							<div class="noui-slider-primary noui-slider-circle noui-slider-lg noui-height-helper" id="slider-solid-lg" style="margin-bottom: 30px;" data-fouc></div>
							<div class="noui-slider-danger noui-slider-circle noui-height-helper" id="slider-solid-md" style="margin-bottom: 30px;" data-fouc></div>
							<div class="noui-slider-success noui-slider-circle noui-slider-sm mb-1 noui-height-helper" id="slider-solid-sm" data-fouc></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Sizes. White handle</h6>
								<p class="mb-3 text-muted">Using <code>noui-slider-white</code> class</p>
							</div>

							<div class="noui-slider-primary noui-slider-white noui-slider-lg noui-height-helper" id="slider-white-lg" style="margin-bottom: 30px;" data-fouc></div>
							<div class="noui-slider-danger noui-slider-white noui-height-helper" id="slider-white-md" style="margin-bottom: 30px;" data-fouc></div>
							<div class="noui-slider-success noui-slider-white noui-slider-sm mb-1 noui-height-helper" id="slider-white-sm" data-fouc></div>
						</div>
					</div>
				</div>
				<!-- /sizes and styles -->

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
