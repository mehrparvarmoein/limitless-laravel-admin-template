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
	<script src="../../../../global_assets/js/plugins/pickers/color/spectrum.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/picker_color.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Pickers</span> - Color</h4>
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
							<a href="picker_color" class="breadcrumb-item">Pickers</a>
							<span class="breadcrumb-item active">Color</span>
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

				<!-- Basic options -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Basic options
					</h6>
					<span class="text-muted d-block">Examples with basic picker options</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="m-0 font-weight-semibold">Basic color picker</h6>
							<p class="mb-3 text-muted">Color picker with default options</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-basic" value="#20BF7E" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="m-0 font-weight-semibold">Custom button text</h6>
							<p class="mb-3 text-muted">Specify custom text for each button</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-basic" data-cancel-text="No way" data-choose-text="Yes baby" value="#20BF7E" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="m-0 font-weight-semibold">Hide picker buttons</h6>
							<p class="mb-3 text-muted">Display only color picker area</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-basic" data-show-buttons="false" value="#20BF7E" data-fouc>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="m-0 font-weight-semibold">Disable color picker</h6>
							<div class="mb-3 text-muted form-check form-check-switchery form-check-switchery-double">
								<label class="form-check-label">
									Enable
									<input type="checkbox" class="form-input-switchery">
									Disable
								</label>
							</div>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-disabled" value="#20BF7E" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="m-0 font-weight-semibold">Container color</h6>
							<p class="mb-3 text-muted">Custom container color class</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-container-class" value="#20BF7E" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="m-0 font-weight-semibold">Replacer color</h6>
							<p class="mb-3 text-muted">Custom replacer color class</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-replacer-class" value="#20BF7E" data-fouc>
							</div>
						</div>
					</div>
				</div>
				<!-- /basic options -->


				<!-- Picker additions -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Picker additions
					</h6>
					<span class="text-muted d-block">Show additional picker elements</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Show initial color</h6>
							<p class="mb-3 text-muted">Show color that was initially set</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-show-initial" value="#E63E3E" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Show input field</h6>
							<p class="mb-3 text-muted">Add input for free form typing</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-show-input" value="#E63E3E" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Show alpha channel</h6>
							<p class="mb-3 text-muted">Allow alpha transparency selection</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-show-alpha" value="#E63E3E" data-fouc>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Clear selection</h6>
							<p class="mb-3 text-muted">Reset current color selection</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-clear" value="#E63E3E" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Input and initial</h6>
							<p class="mb-3 text-muted">Combining different elements</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-input-initial" value="#E63E3E" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="m-0 font-weight-semibold">Full leatured</h6>
							<p class="mb-3 text-muted">Full featured picker example</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-full" value="#E63E3E" data-fouc>
							</div>
						</div>
					</div>
				</div>
				<!-- /picker additions -->


				<!-- Color palettes -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Color palettes
					</h6>
					<span class="text-muted d-block">Add a color palette to the picker</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-success text-center">
							<h6 class="m-0 font-weight-semibold">Show color palette</h6>
							<p class="mb-3 text-muted">Display recently used colors</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-palette" value="#27ADCA" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-success text-center">
							<h6 class="m-0 font-weight-semibold">Show palette only</h6>
							<p class="mb-3 text-muted">Show palette and nothing else</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-palette-only" value="#27ADCA" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-success text-center">
							<h6 class="m-0 font-weight-semibold">Toggle palette only</h6>
							<p class="mb-3 text-muted">Toggle picker next to the palette</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-palette-toggle" value="#27ADCA" data-fouc>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-success text-center">
							<h6 class="m-0 font-weight-semibold">Selection palette</h6>
							<p class="mb-3 text-muted">Keep track of selected colors</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-palette-selection" value="#27ADCA" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-success text-center">
							<h6 class="m-0 font-weight-semibold">Limit selections</h6>
							<p class="mb-3 text-muted">Palette colors are limited to 3</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-palette-limit" value="#27ADCA" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-success text-center">
							<h6 class="m-0 font-weight-semibold">Hide after select</h6>
							<p class="mb-3 text-muted">Hide picker after color select</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-palette-hide" value="#27ADCA" data-fouc>
							</div>
						</div>
					</div>
				</div>
				<!-- /color palettes -->


				<!-- Color formats -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Color formats
					</h6>
					<span class="text-muted d-block">Display different color formats</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-warning text-center">
							<h6 class="m-0 font-weight-semibold">HEX color format</h6>
							<p class="mb-3 text-muted">Display colors in HEX format</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-show-input" data-preferred-format="hex" value="#f75d1c" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-warning text-center">
							<h6 class="m-0 font-weight-semibold">HEX3 color format</h6>
							<p class="mb-3 text-muted">Display colors in HEX3 format</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-show-input" data-preferred-format="hex3" value="#f75d1c" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-warning text-center">
							<h6 class="m-0 font-weight-semibold">HSL color format</h6>
							<p class="mb-3 text-muted">Display colors in HSL format</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-show-input" data-preferred-format="HSL" value="#f75d1c" data-fouc>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-warning text-center">
							<h6 class="m-0 font-weight-semibold">RGB color format</h6>
							<p class="mb-3 text-muted">Display colors in RGB format</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-show-input" data-preferred-format="rgb" value="#f75d1c" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-warning text-center">
							<h6 class="m-0 font-weight-semibold">HTML color names</h6>
							<p class="mb-3 text-muted">HTML color names support</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-show-input" data-preferred-format="name" value="orangered" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-warning text-center">
							<h6 class="m-0 font-weight-semibold">Mix color formats</h6>
							<p class="mb-3 text-muted">Change formats in the input</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-show-input" data-preferred-format="name" value="#f75d1c" data-fouc>
							</div>
						</div>
					</div>
				</div>
				<!-- /color formats -->


				<!-- Picker events -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Picker events
					</h6>
					<span class="text-muted d-block">Basic usage of the picker events</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-info text-center">
							<h6 class="m-0 font-weight-semibold">Change event</h6>
							<p class="mb-3 text-muted">Called as the input changes</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-event-change" value="#45818e" data-fouc>
								<div class="mt-3 hidden" id="change-result"></div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-info text-center">
							<h6 class="m-0 font-weight-semibold">Move event</h6>
							<p class="mb-3 text-muted">Called as the user moves around</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-event-move" value="#45818e" data-fouc>
								<div class="mt-3 hidden" id="move-result"></div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-info text-center">
							<h6 class="m-0 font-weight-semibold">Hide event</h6>
							<p class="mb-3 text-muted">Called after the picker is hidden</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-event-hide" value="#45818e" data-fouc>
								<div class="mt-3 hidden" id="hide-result"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-info text-center">
							<h6 class="m-0 font-weight-semibold">Show event</h6>
							<p class="mb-3 text-muted">Called after the picker is opened</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-event-show" value="#45818e" data-fouc>
								<div class="mt-3 hidden" id="show-result"></div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-info text-center">
							<h6 class="m-0 font-weight-semibold">Dragstart event</h6>
							<p class="mb-3 text-muted">Called as the drag event starts</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-event-dragstart" value="#45818e" data-fouc>
								<div class="mt-3 hidden" id="dragstart-result"></div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-info text-center">
							<h6 class="m-0 font-weight-semibold">Dragstop event</h6>
							<p class="mb-3 text-muted">Called as the drag event stops</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-event-dragstop" value="#45818e" data-fouc>
								<div class="mt-3 hidden" id="dragstop-result"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /picker events -->


				<!-- Flat pickers -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Flat pickers
					</h6>
					<span class="text-muted d-block">Display a full size color picker</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-teal text-center">
							<h6 class="m-0 font-weight-semibold">Basic flat picker</h6>
							<p class="mb-3 text-muted">Basic full size color picker</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-flat" value="#45818e" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-teal text-center">
							<h6 class="m-0 font-weight-semibold">Flat color palette</h6>
							<p class="mb-3 text-muted">Display both palette and picker</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-flat-palette" value="#45818e" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-teal text-center">
							<h6 class="m-0 font-weight-semibold">Set picker color</h6>
							<p class="mb-3 text-muted">Custom flat color picker color</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-flat-custom" value="#45818e" data-fouc>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-teal text-center">
							<h6 class="m-0 font-weight-semibold">Show input field</h6>
							<p class="mb-3 text-muted">Add input for free form typing</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-flat-input" data-preferred-format="hex" value="#45818e" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-teal text-center">
							<h6 class="m-0 font-weight-semibold">Full featured</h6>
							<p class="mb-3 text-muted">Full featured flat picker</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-flat-full" data-preferred-format="hex" value="#45818e" data-fouc>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-teal text-center">
							<h6 class="m-0 font-weight-semibold">Show initial color</h6>
							<p class="mb-3 text-muted">Show color that was initially set</p>

							<div class="d-inline-block">
								<input type="text" class="form-control colorpicker-flat-initial" value="#45818e" data-fouc>
							</div>
						</div>
					</div>
				</div>
				<!-- /flat pickers -->

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
