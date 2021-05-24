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
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/touch.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/slider.rtl.min.js"></script>
	<script src="../../../../global_assets/js/plugins/sliders/slider_pips.rtl.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/jqueryui_sliders.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">jQuery UI</span> - Sliders</h4>
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
							<a href="jqueryui_sliders" class="breadcrumb-item">jQuery UI</a>
							<span class="breadcrumb-item active">Sliders</span>
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

				<!-- jQuery UI basic sliders -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Basic sliders
					</h6>
					<span class="text-muted d-block">Basic jQuery UI sliders</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Basic slider example</h6>
								<p class="mb-3 text-muted">Example of basic jQuery UI slider</p>
							</div>

							<div class="mb-1">
								<div class="ui-slider-horizontal jui-slider" data-fouc></div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Values range slider</h6>
								<p class="mb-3 text-muted">Use <code>range: true</code> to show ranges</p>
							</div>

							<div class="mb-1">
								<div class="ui-slider-horizontal jui-slider-range" data-fouc></div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Animated slider</h6>
								<p class="mb-3 text-muted">Use <code>animate: true</code> to animate slider</p>
							</div>

							<div class="mb-1">
								<div class="ui-slider-horizontal jui-slider-animated" data-fouc></div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Custom start value</h6>
								<p class="mb-3 text-muted">Set start value using <code>value</code> option</p>
							</div>

							<div class="mb-1">
								<div class="ui-slider-horizontal jui-slider-value" data-fouc></div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Fixed minimum range</h6>
								<p class="mb-3 text-muted">Set min value with <code>range: 'min'</code> option</p>
							</div>

							<div class="mb-1">
								<div class="ui-slider-horizontal jui-slider-range-min" data-fouc></div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-1 font-weight-semibold">Slider methods</h6>
								<div class="mb-3 text-muted">
									<div class="form-check form-check-switchery form-check-switchery-double">
										<label class="form-check-label">
											Disable slider
											<input type="checkbox" class="switchery" checked data-fouc>
											Enable slider
										</label>
									</div>
								</div>
							</div>

							<div class="mb-1">
								<div class="ui-slider-horizontal jui-slider-methods" data-fouc></div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Snap to increments</h6>
								<p class="mb-3 text-muted">Increment values with the <code>step</code> option</p>
							</div>

							<div class="mb-1">
								<div class="ui-slider-horizontal jui-slider-increments" data-fouc></div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Fixed maximum range</h6>
								<p class="mb-3 text-muted">Set max value with <code>range: 'max'</code> option</p>
							</div>

							<div class="mb-1">
								<div class="ui-slider-horizontal jui-slider-range-max" data-fouc></div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Disabled slider</h6>
								<p class="mb-3 text-muted">Use <code>disabled: true</code> to disable slider</p>
							</div>

							<div class="mb-1">
								<div class="ui-slider-horizontal jui-slider-disabled" data-fouc></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /jQuery UI basic sliders -->


				<!-- jQuery UI advanced sliders -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Advanced sliders
					</h6>
					<span class="text-muted d-block">Advanced jQuery UI sliders</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Slider with pips</h6>
								<p class="mb-3 text-muted">Using <code>.slider("pips")</code> method</p>
							</div>

							<div class="ui-slider-horizontal ui-slider-pips jui-slider-pips" data-fouc></div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Display handle tooltip</h6>
								<p class="mb-3 text-muted">Using <code>.slider("float")</code> method</p>
							</div>

							<div class="ui-slider-horizontal ui-slider-pips jui-slider-floats" data-fouc></div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Display months</h6>
								<p class="mb-3 text-muted">Custom output: <span class="font-weight-semibold" id="ui-slider-labels-custom-output">You selected</span></p>
							</div>

							<div class="ui-slider-horizontal ui-slider-pips jui-slider-labels-custom" data-fouc></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Display labels with pips</h6>
								<p class="mb-3 text-muted">Using <code>rest: 'label'</code> option</p>
							</div>

							<div class="ui-slider-horizontal ui-slider-pips jui-slider-labels" data-fouc></div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Hide rest of the points</h6>
								<p class="mb-3 text-muted">Hide pips using <code>rest: false</code> option</p>
							</div>

							<div class="ui-slider-horizontal ui-slider-pips jui-slider-limits ui-slider-danger" data-fouc></div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Label localization</h6>
								<p class="mb-3 text-muted">Display non-roman numbers/letters</p>
							</div>

							<div class="ui-slider-horizontal ui-slider-pips jui-slider-local" data-fouc></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Display pips only</h6>
								<p class="mb-3 text-muted">Add <code>'pips'</code> to the first/last points</p>
							</div>

							<div class="ui-slider-horizontal ui-slider-pips jui-slider-pips-only" data-fouc></div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Display prefix and suffix</h6>
								<p class="mb-3 text-muted">Using <code>prefix</code> and <code>suffix</code> options</p>
							</div>

							<div class="ui-slider-horizontal ui-slider-pips jui-slider-suffix-prefix" data-fouc></div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Display pips and float</h6>
								<p class="mb-3 text-muted">Using both <code>pips</code> and <code>float</code> methods</p>
							</div>

							<div class="ui-slider-horizontal ui-slider-pips jui-slider-floats-labels" data-fouc></div>
						</div>
					</div>
				</div>
				<!-- /jQuery UI advanced sliders -->


				<!-- jQuery UI vertical sliders -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Vertical sliders
					</h6>
					<span class="text-muted d-block">Vertical slider orientation</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Basic vertical sliders</h6>
							<p class="mb-3 text-muted">Using <code>orientation: 'vertical'</code> option</p>

							<div class="d-flex justify-content-center jui-slider-vertical-default">
								<span class="ui-slider-vertical" data-fouc>70</span>
								<span class="ui-slider-vertical" data-fouc>52</span>
								<span class="ui-slider-vertical" data-fouc>80</span>
								<span class="ui-slider-vertical" data-fouc>34</span>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Vertical slider with pips</h6>
							<p class="mb-3 text-muted">Using <code>.slider("pips")</code> method</p>

							<div class="d-flex justify-content-center jui-slider-vertical-pips">
								<span class="ui-slider-vertical ui-slider-success" data-fouc>2</span>
								<span class="ui-slider-vertical ui-slider-danger" data-fouc>5</span>
								<span class="ui-slider-vertical ui-slider-info" data-fouc>8</span>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Sizes. Default handle</h6>
							<p class="mb-3 text-muted">Using <code>ui-slider-lg (sm)</code> classes</p>

							<div class="d-flex justify-content-center jui-slider-vertical-handle-default">
								<span class="ui-slider-vertical ui-slider-primary ui-slider-lg" data-fouc>70</span>
								<span class="ui-slider-vertical ui-slider-danger" data-fouc>52</span>
								<span class="ui-slider-vertical ui-slider-success ui-slider-sm" data-fouc>80</span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Range with fixed minimum</h6>
							<p class="mb-3 text-muted">Set min value with <code>range: 'min'</code> option</p>

							<div class="d-flex justify-content-center jui-slider-vertical-range-min">
								<span class="ui-slider-vertical ui-slider-primary" data-fouc>70</span>
								<span class="ui-slider-vertical ui-slider-success" data-fouc>52</span>
								<span class="ui-slider-vertical ui-slider-warning" data-fouc>80</span>
								<span class="ui-slider-vertical ui-slider-info" data-fouc>34</span>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Vertical slider with labels</h6>
							<p class="mb-3 text-muted">Using <code>rest: 'label'</code> option</p>

							<div class="d-flex justify-content-center jui-slider-vertical-labels">
								<span class="ui-slider-vertical ui-slider-success" data-fouc>1</span>
								<span class="ui-slider-vertical ui-slider-danger" data-fouc>2</span>
								<span class="ui-slider-vertical ui-slider-info" data-fouc>3</span>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Sizes. Circle handle</h6>
							<p class="mb-3 text-muted">Using <code>ui-slider-circle</code> class</p>

							<div class="d-flex justify-content-center jui-slider-vertical-handle-default">
								<span class="ui-slider-vertical ui-slider-primary ui-slider-circle ui-slider-lg" data-fouc>70</span>
								<span class="ui-slider-vertical ui-slider-danger ui-slider-circle" data-fouc>52</span>
								<span class="ui-slider-vertical ui-slider-success ui-slider-circle ui-slider-sm" data-fouc>80</span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Range with fixed maximum</h6>
							<p class="mb-3 text-muted">Set max value with <code>range: 'max'</code> option</p>

							<div class="d-flex justify-content-center jui-slider-vertical-range-max">
								<span class="ui-slider-vertical ui-slider-primary" data-fouc>70</span>
								<span class="ui-slider-vertical ui-slider-success" data-fouc>52</span>
								<span class="ui-slider-vertical ui-slider-warning" data-fouc>80</span>
								<span class="ui-slider-vertical ui-slider-info" data-fouc>34</span>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">With handle tooltips</h6>
							<p class="mb-3 text-muted">Using both <code>float</code> and <code>pips</code> methods</p>

							<div class="d-flex justify-content-center jui-slider-vertical-minmax">
								<span class="ui-slider-vertical ui-slider-success" data-fouc>2</span>
								<span class="ui-slider-vertical ui-slider-danger" data-fouc>5</span>
								<span class="ui-slider-vertical ui-slider-info" data-fouc>8</span>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Sizes. White handle</h6>
							<p class="mb-3 text-muted">Using <code>ui-handle-white</code> class</p>

							<div class="d-flex justify-content-center jui-slider-vertical-handle-default">
								<span class="ui-slider-vertical ui-slider-primary ui-handle-white ui-slider-lg" data-fouc>70</span>
								<span class="ui-slider-vertical ui-slider-danger ui-handle-white" data-fouc>52</span>
								<span class="ui-slider-vertical ui-slider-success ui-handle-white ui-slider-sm" data-fouc>80</span>
							</div>
						</div>
					</div>
				</div>
				<!-- /jQuery UI vertical sliders -->


				<!-- jQuery UI slider colors -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Slider colors
					</h6>
					<span class="text-muted d-block">jQuery UI contextual slider colors</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Default slider</h6>
								<p class="mb-3 text-muted">Default <code>dark grey</code> slider color</p>
							</div>

							<div class="mb-1">
								<div class="ui-slider-horizontal jui-slider-range" data-fouc></div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Success slider style</h6>
								<p class="mb-3 text-muted">Using <code>ui-slider-success</code> class</p>
							</div>

							<div class="mb-1">
								<div class="ui-slider-horizontal jui-slider-range ui-slider-success" data-fouc></div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Primary slider style</h6>
								<p class="mb-3 text-muted">Using <code>ui-slider-primary</code> class</p>
							</div>

							<div class="mb-1">
								<div class="ui-slider-horizontal jui-slider-range ui-slider-primary" data-fouc></div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Warning slider style</h6>
								<p class="mb-3 text-muted">Using <code>ui-slider-warning</code> class</p>
							</div>

							<div class="mb-1">
								<div class="ui-slider-horizontal jui-slider-range ui-slider-warning" data-fouc></div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Danger slider style</h6>
								<p class="mb-3 text-muted">Using <code>ui-slider-danger</code> class</p>
							</div>

							<div class="mb-1">
								<div class="ui-slider-horizontal jui-slider-range ui-slider-danger" data-fouc></div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Info slider style</h6>
								<p class="mb-3 text-muted">Using <code>ui-slider-info</code> class</p>
							</div>

							<div class="mb-1">
								<div class="ui-slider-horizontal jui-slider-range ui-slider-info" data-fouc></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /jQuery UI slider colors -->


				<!-- jQuery UI slider options -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Other slider options
					</h6>
					<span class="text-muted d-block">Options of jQuery UI sliders</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Sizes. Default handle</h6>
								<p class="mb-3 text-muted">Using <code>ui-slider-lg (sm)</code> classes</p>
							</div>

							<div class="ui-slider-horizontal jui-slider-range ui-slider-primary ui-slider-lg mb-4" data-fouc></div>
							<div class="ui-slider-horizontal jui-slider-range ui-slider-danger mb-4" data-fouc></div>
							<div class="ui-slider-horizontal jui-slider-range ui-slider-success ui-slider-sm mb-1" data-fouc></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Sizes. Circle handle</h6>
								<p class="mb-3 text-muted">Using <code>ui-slider-circle</code> class</p>
							</div>

							<div class="ui-slider-horizontal jui-slider-range ui-slider-primary ui-slider-circle ui-slider-lg mb-4" data-fouc></div>
							<div class="ui-slider-horizontal jui-slider-range ui-slider-danger ui-slider-circle mb-4" data-fouc></div>
							<div class="ui-slider-horizontal jui-slider-range ui-slider-success ui-slider-circle ui-slider-sm mb-1" data-fouc></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Sizes. White handle</h6>
								<p class="mb-3 text-muted">Using <code>ui-handle-white</code> class</p>
							</div>

							<div class="ui-slider-horizontal jui-slider-range ui-slider-primary ui-handle-white ui-slider-lg mb-4" data-fouc></div>
							<div class="ui-slider-horizontal jui-slider-range ui-slider-danger ui-handle-white mb-4" data-fouc></div>
							<div class="ui-slider-horizontal jui-slider-range ui-slider-success ui-handle-white ui-slider-sm mb-1" data-fouc></div>
						</div>
					</div>
				</div>
				<!-- /jQuery UI slider sizes -->

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
