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
	<script src="../../../../global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="../../../../global_assets/js/plugins/pickers/daterangepicker.js"></script>
	<script src="../../../../global_assets/js/plugins/pickers/anytime.min.js"></script>
	<script src="../../../../global_assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script src="../../../../global_assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script src="../../../../global_assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script src="../../../../global_assets/js/plugins/pickers/pickadate/legacy.js"></script>
	<script src="../../../../global_assets/js/plugins/notifications/jgrowl.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/picker_date_rtl.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Pickers</span> - Date &amp; Time</h4>
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
							<a href="picker_date" class="breadcrumb-item">Pickers</a>
							<span class="breadcrumb-item active">Date &amp; time</span>
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

				<!-- Daterange picker -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Daterange picker</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This date range picker component for <code>Bootstrap</code> creates a dropdown menu from which a user can select a range of dates. If invoked with no options, it will present two calendars to choose a start and end date from. Optionally, you can provide a list of date ranges the user can select from instead of choosing dates from the calendars.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Basic date range picker:</label>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
										<input type="text" class="form-control daterange-basic" value="01/01/2015 - 01/31/2015"> 
									</div>
								</div>

								<div class="form-group">
									<label>Display week numbers:</label>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
										<input type="text" class="form-control daterange-weeknumbers" value="03/18/2013 - 03/23/2013"> 
									</div>
								</div>

								<div class="form-group">
									<label>Display time picker:</label>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
										<input type="text" class="form-control daterange-time" value="03/18/2013 - 03/23/2013"> 
									</div>
								</div>

								<div class="form-group">
									<label>Basic single date picker:</label>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
										<input type="text" class="form-control daterange-single" value="03/18/2013">
									</div>
								</div>

								<div class="form-group">
									<label>Simple text field attachment:</label>
									<input type="text" class="form-control daterange-basic" value="03/18/2013 - 03/23/2013"> 
								</div>

								<div class="form-group">
									<label>Button class options:</label>
									<input type="text" class="form-control daterange-buttons" value="03/18/2013 - 03/23/2013"> 
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label>Show calendars on left:</label>
									<div class="input-group">
										<input type="text" class="form-control daterange-left" value="03/18/2013 - 03/23/2013"> 
										<span class="input-group-append">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
									</div>
								</div>

								<div class="form-group">
									<label>Display date dropdowns:</label>
									<div class="input-group">
										<input type="text" class="form-control daterange-datemenu" value="03/18/2013 - 03/23/2013"> 
										<span class="input-group-append">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
									</div>
								</div>

								<div class="form-group">
									<label>10 minute increments:</label>
									<div class="input-group">
										<input type="text" class="form-control daterange-increments" value="08/01/2013 1:00 PM - 08/01/2013 1:30 PM">
										<span class="input-group-append">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
									</div>
								</div>

								<div class="form-group">
									<label>Localization (ru):</label>
									<div class="input-group">
										<input type="text" class="form-control daterange-locale" value="08/01/2013 1:00 PM - 08/01/2013 1:30 PM">
										<span class="input-group-append">
											<span class="input-group-text"><i class="icon-calendar22"></i></span>
										</span>
									</div>
								</div>

								<div class="form-group">
									<label class="d-block">Pre-defined ranges &amp; callback:</label>
									<button type="button" class="btn btn-light daterange-predefined">
										<i class="icon-calendar22 mr-2"></i>
										<span></span>
									</button>
								</div>

								<div class="form-group">
									<label class="d-block">Date picker inside button:</label>
									<button type="button" class="btn btn-danger daterange-ranges">
										<i class="icon-calendar22 mr-2"></i>
										<span></span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /daterange picker -->


				<!-- Pickadate picker -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Pick-a-Date picker</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Pickadate.js is a very powerful, mobile-friendly, responsive, and lightweight jQuery date &amp; time input picker. The basic setup requires targetting an input element and invoking the picker. Basically this plugin includes 2 main parts: date picker and time picker. Time picker examples demonstrated below.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Basic options</h6>
									<p>The basic setup requires targetting an input element and invoking the picker.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar5"></i></span>
										</span>
										<input type="text" class="form-control pickadate" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Strings</h6>
									<p>Change the month and weekday labels as you find suitable.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar5"></i></span>
										</span>
										<input type="text" class="form-control pickadate-strings" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Buttons</h6>
									<p>Change the text or hide a button completely by passing a false-y value.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar5"></i></span>
										</span>
										<input type="text" class="form-control pickadate-buttons" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Formats</h6>
									<p>Display a human-friendly format and use an alternate one to submit to the server.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar5"></i></span>
										</span>
										<input type="text" class="form-control pickadate-format" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Year selector</h6>
									<p>You can also specify the number of years to show in the dropdown using an even integer.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar5"></i></span>
										</span>
										<input type="text" class="form-control pickadate-year" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">First weekday</h6>
									<p>The first day of the week can be set to either Sunday or Monday.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar5"></i></span>
										</span>
										<input type="text" class="form-control pickadate-weekday" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Date limits</h6>
									<p>Set the minimum and maximum selectable dates on the picker.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar5"></i></span>
										</span>
										<input type="text" class="form-control pickadate-limits" placeholder="Try me&hellip;">
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Accessibility labels</h6>
									<p>Change the <code>title</code> attributes to several elements within the picker</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar5"></i></span>
										</span>
										<input type="text" class="form-control pickadate-accessibility" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Editable input</h6>
									<p>By default, typing into the input is disabled by giving it a <code>readOnly</code> attribute.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar5"></i></span>
										</span>
										<input type="text" class="form-control pickadate-editable" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Dropdown selectors</h6>
									<p>Display <code>select</code> menus to pick the month and year.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar5"></i></span>
										</span>
										<input type="text" class="form-control pickadate-selectors" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Translations</h6>
									<p>The picker supports translations for 39 languages, available out of the box.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar5"></i></span>
										</span>
										<input type="text" class="form-control pickadate-translated" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Disable ranges</h6>
									<p>Enable dates that fall within a range of disabled dates by adding the <code>inverted</code> parameter.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar5"></i></span>
										</span>
										<input type="text" class="form-control pickadate-disable-range" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Events</h6>
									<p>Fire off events as the user interacts with the picker.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar5"></i></span>
										</span>
										<input type="text" class="form-control pickadate-events" placeholder="Open your console and try me&hellip;">
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Disable dates</h6>
									<p>Disable a specific or arbitrary set of dates selectable on the picker.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar5"></i></span>
										</span>
										<input type="text" class="form-control pickadate-disable" placeholder="Try me&hellip;">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /pickadate picker -->


				<!-- Pickatime picker -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Pick-a-Time time picker</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Basic options</h6>
									<p>The basic setup requires targetting an <code>input</code> element and invoking the picke.r</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-alarm"></i></span>
										</span>
										<input type="text" class="form-control pickatime" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Clear button</h6>
									<p>Change the text or hide the button completely by passing a <code>false-y</code> value.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-alarm"></i></span>
										</span>
										<input type="text" class="form-control pickatime-clear" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Timepicker formats</h6>
									<p>Display a human-friendly label and <code>input</code> format and use an alternate one to submit.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-alarm"></i></span>
										</span>
										<input type="text" class="form-control pickatime-format" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Send the hidden value only</h6>
									<p>Sometimes the value that needs to be sent to the server is just the hidden value – and not the visible one.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-alarm"></i></span>
										</span>
										<input type="text" class="form-control pickatime-hidden" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Time limits</h6>
									<p>Set the minimum and maximum selectable times on the picker.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-alarm"></i></span>
										</span>
										<input type="text" class="form-control pickatime-limits" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Using integers as hours</h6>
									<p>Set the minimum and maximum selectable times on the picker using integers as hours.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-alarm"></i></span>
										</span>
										<input type="text" class="form-control pickatime-limits-integers" placeholder="Try me&hellip;">
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Disable times</h6>
									<p>Disable a specific or arbitrary set of times selectable on the picker</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-alarm"></i></span>
										</span>
										<input type="text" class="form-control pickatime-disabled" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Disabling ranges</h6>
									<p>Enable times that fall within a range of disabled times by adding the <code>inverted</code> parameter.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-alarm"></i></span>
										</span>
										<input type="text" class="form-control pickatime-range" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Editable input</h6>
									<p>By default, text input has a <code>readOnly</code> attribute to hide virtual keyboards on touch devices.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-alarm"></i></span>
										</span>
										<input type="text" class="form-control pickatime-editable" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Timepicker events</h6>
									<p>Fire off events as the user interacts with the picker</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-alarm"></i></span>
										</span>
										<input type="text" class="form-control pickatime-events" placeholder="Open your console and try me&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Disabling all with exeptions</h6>
									<p>Enable only a specific or arbitrary set of times by setting true as the first item in the collection.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-alarm"></i></span>
										</span>
										<input type="text" class="form-control pickatime-disableall" placeholder="Try me&hellip;">
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Timepicker intervals</h6>
									<p>Choose the minutes interval between each time in the list.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-alarm"></i></span>
										</span>
										<input type="text" class="form-control pickatime-intervals" placeholder="Try me&hellip;">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /pickadate picker -->


				<!-- Anytime picker -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Anytime pickers</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The <code>Any+Time™</code> JavaScript Library includes a highly-customizable, jQuery-compatible datepicker/ timepicker (calendar/ clock widget) and a powerful Date/String parse/format utility. Anytime allows you to create a date/time picker with advanced features and options not found in other calendar/clock widgets, also to format dates and times in different ways.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Basic usage</h6>
									<p>Basic text field specifies that the week begins with Monday.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar3"></i></span>
										</span>
										<input type="text" class="form-control" id="anytime-date" value="Sunday, July 30th in the Year 1967 CE">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Month and day</h6>
									<p>Month and day only picker format</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar3"></i></span>
										</span>
										<input type="text" class="form-control" id="anytime-month-day" value="4th of June">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Time picker</h6>
									<p>Current example displays hours and minutes only. Seconds can be added via plugin <code>options</code>.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-watch2"></i></span>
										</span>
										<input type="text" class="form-control" id="anytime-time" value="12:34">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Display hours only</h6>
									<p>Current example demonstrates simple time picker with hours only in <code>AM/PM</code> format.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-watch2"></i></span>
										</span>
										<input type="text" class="form-control" id="anytime-time-hours" value="9 PM">
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Date and time pickers</h6>
									<p>The first field specifies that the week begins with Monday. The second field demonstrates a time picker.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar3"></i></span>
										</span>
										<input type="text" class="form-control" id="anytime-both" value="June 4th 08:47">
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Custom display format</h6>
									<p>Custom display format can be specified via plugin <code>options</code></p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar3"></i></span>
										</span>
										<input type="text" class="form-control" id="anytime-weekday" value="Wednesday, 4th of June, 2014">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Numeric date</h6>
									<p>Current example demonstrates custom <code>DD/MM/YYYY</code> date format</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-calendar3"></i></span>
										</span>
										<input type="text" class="form-control" id="anytime-month-numeric" value="04/06/2014">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Date range</h6>
									<p>In the following example, <code>AnyTime.Converter</code> and jQuery work together to provide date-range selection. The value for the second ("Finish") field must be at least one day after the date in the first ("Start") field, but no more than 90 days later.</p>
									<div class="row">
										<div class="col-md-6">
											<p><input type="text" class="form-control" id="rangeDemoStart" placeholder="Start date"></p>
										</div>

										<div class="col-md-6">
											<p><input type="text" class="form-control" id="rangeDemoFinish" placeholder="Finish date" disabled></p>
										</div>
									</div>

									<input type="button" id="rangeDemoToday" class="btn btn-primary" value="today">
									<input type="button" id="rangeDemoClear" class="btn btn-light" value="clear">
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">On-Demand Picker</h6>
									<p>The following example shows how to create a field that initially does not have a picker, followed by a button that creates a picker for the field. This would be useful if you want to allow manual entry into the field, but it does not prevent the user from entering a value in the wrong format.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<button type="button" class="btn btn-light btn-icon" id="ButtonCreationDemoButton"><i class="icon-calendar3"></i></button>
										</span>
										<input type="text" class="form-control" id="ButtonCreationDemoInput" placeholder="Select a date">
									</div>
									<span class="form-text text-muted">Format must be YYYY-MM-DD HH:MM:SS</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /anytime picker -->

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
