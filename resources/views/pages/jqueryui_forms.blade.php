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
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/widgets.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/effects.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/mousewheel.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/globalize/globalize.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/globalize/cultures/globalize.culture.de-DE.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/globalize/cultures/globalize.culture.ja-JP.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/jqueryui_forms.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">jQuery UI</span> - Forms</h4>
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
							<a href="jqueryui_forms" class="breadcrumb-item">jQuery UI</a>
							<span class="breadcrumb-item active">Forms</span>
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

				<!-- Date picker -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="panel-title">Date picker</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The following set of examples demonstrate jQuery UI Datepicker component with different options. The datepicker is tied to a standard form input field. Focus on the input (click, or use the tab key) to open an interactive calendar in a small overlay. Choose a date, click elsewhere on the page (blur the input), or hit the <kbd>Esc</kbd> key to close. If a date is chosen, feedback is shown as the input's value.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Default functionality</h6>
									<p>The datepicker is tied to a standard form input field</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text">
												<i class="icon-calendar"></i>
											</span>
										</span>
										<input type="text" class="form-control datepicker" placeholder="Pick a date&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Dates in other months</h6>
									<p>The datepicker can show dates that come from other than the main month being displayed.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text">
												<i class="icon-calendar"></i>
											</span>
										</span>
										<input type="text" class="form-control datepicker-dates" placeholder="Pick a date&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Show week number</h6>
									<p>The datepicker can show the week of the year. The default calculation follows the ISO 8601 definition.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text">
												<i class="icon-calendar"></i>
											</span>
										</span>
										<input type="text" class="form-control datepicker-weeks" placeholder="Pick a date&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Multiple months</h6>
									<p>Set the <code>numberOfMonths</code> option to an integer of 2 or more to show multiple months in a single datepicker.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text">
												<i class="icon-calendar"></i>
											</span>
										</span>
										<input type="text" class="form-control datepicker-multiple" placeholder="Pick a date&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Date range</h6>
									<p>Select the date range to search for.</p>
									<div class="row">
										<div class="col-md-6">
											<input type="text" class="form-control mb-3 mb-md-0" id="range-from" placeholder="Date from:">
										</div>

										<div class="col-md-6">
											<input type="text" class="form-control" id="range-to" placeholder="Date to:">
										</div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Format date</h6>
									<p>Display date feedback in a variety of ways.</p>
									<div class="row">
										<div class="col-md-8">
											<div class="input-group mb-3 mb-md-0">
												<span class="input-group-prepend">
													<span class="input-group-text">
														<i class="icon-calendar"></i>
													</span>
												</span>
												<input type="text" class="form-control datepicker-format" placeholder="Pick a date&hellip;">
											</div>
										</div>

										<div class="col-md-4">
											<select class="form-control" id="format">
												<option value="mm/dd/yy">Default - mm/dd/yy</option>
												<option value="yy-mm-dd">ISO 8601 - yy-mm-dd</option>
												<option value="d M, y">Short - d M, y</option>
												<option value="d MM, y">Medium - d MM, y</option>
												<option value="DD, d MM, yy">Full - DD, d MM, yy</option>
												<option value="&apos;day&apos; d &apos;of&apos; MM &apos;in the year&apos; yy">With text - 'day' d 'of' MM 'in the year' yy</option>
											</select>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Icon trigger</h6>
									<p>Click the icon next to the input field to show the datepicker.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text">
												<i class="icon-calendar"></i>
											</span>
										</span>
										<input type="text" class="form-control datepicker-icon rounded-right" placeholder="Pick a date&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Button bar</h6>
									<p>Display a button for selecting <code>Today's</code> date and a <code>Done</code> button for closing the calendar.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text">
												<i class="icon-calendar"></i>
											</span>
										</span>
										<input type="text" class="form-control datepicker-button-bar" placeholder="Pick a date&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Month &amp; year menu</h6>
									<p>Show month and year dropdowns in place of the static month/year header.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text">
												<i class="icon-calendar"></i>
											</span>
										</span>
										<input type="text" class="form-control datepicker-menus" placeholder="Pick a date&hellip;">
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Populate alternate field</h6>
									<p>Populate an alternate field with its own date format using the <code>altField</code> and <code>altFormat</code> options.</p>
									<div class="row">
										<div class="col-md-6">
											<input type="text" class="form-control datepicker-alternate mb-3 mb-md-0" placeholder="Pick a date&hellip;">
										</div>

										<div class="col-md-6">
											<input type="text" class="form-control" id="alternate" placeholder="Alternate field">
										</div>
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Restrict date range</h6>
									<p>Restrict the range of selectable dates with the <code>minDate</code> and <code>maxDate</code> options.</p>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text">
												<i class="icon-calendar"></i>
											</span>
										</span>
										<input type="text" class="form-control datepicker-restrict" placeholder="Pick a date&hellip;">
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Datepicker animations</h6>
									<p>Use different animations when opening or closing the datepicker.</p>
									<div class="row">
										<div class="col-md-8">
											<div class="input-group mb-3 mb-md-0">
												<span class="input-group-prepend">
													<span class="input-group-text">
														<i class="icon-calendar"></i>
													</span>
												</span>
												<input type="text" class="form-control datepicker-animation" placeholder="Pick a date&hellip;">
											</div>
										</div>

										<div class="col-md-4">
											<select class="form-control" id="anim">
												<option value="show">Show (default)</option>
												<option value="slideDown">Slide down</option>
												<option value="fadeIn">Fade in</option>
												<option value="blind">Blind (UI Effect)</option>
												<option value="bounce">Bounce (UI Effect)</option>
												<option value="clip">Clip (UI Effect)</option>
												<option value="drop">Drop (UI Effect)</option>
												<option value="fold">Fold (UI Effect)</option>
												<option value="slide">Slide (UI Effect)</option>
												<option value="">None</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /date picker -->


				<!-- Autocomplete -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="panel-title">Autocomplete</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The following set of examples demonstrate jQuery UI Autocomplete component with different options The Autocomplete widgets provides suggestions while you type into the field. Here the suggestions are tags for programming languages, give "ja" (for Java or JavaScript) a try. The datasource is a simple JavaScript array, provided to the widget using the source-option.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Default functionality</h6>
									<p class="mb-3">Enables users to quickly find and select from a pre-populated list of values as they type, leveraging searching and filtering. This example demonstrates basic setup with default functionality.</p>

									<div class="form-group form-group-feedback form-group-feedback-left">
										<input type="text" class="form-control" placeholder="Type 'A'" id="ac-basic">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-base"></i>
										</div>
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Categories</h6>
									<p class="mb-3">A categorized search result with opgroup-like display option. All items under certain category have doubled horizontal padding. Built with <code>_renderMenu</code> and <code>_create</code> widget's methods.</p>

									<div class="form-group form-group-feedback form-group-feedback-left">
										<input type="text" class="form-control" placeholder="Type 'A'" id="ac-categories">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-base"></i>
										</div>
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Multiple results</h6>
									<p class="mb-3">Select a value, then continue typing to add more. This is an example showing how to use the source-option along with some events to enable <code>autocompleting</code> multiple values into a single field.</p>

									<div class="form-group form-group-feedback form-group-feedback-left">
										<input type="text" class="form-control" placeholder="Type 'A'" id="ac-multiple">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-base"></i>
										</div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Remote data</h6>
									<p class="mb-3">Here the suggestions are car names, displayed when at least two characters are entered. The datasource is a server-side script which returns JSON data, specified via a simple URL for the <code>source</code> option.</p>

									<div class="form-group form-group-feedback form-group-feedback-left">
										<input type="text" class="form-control" placeholder="Type 'ac'" id="ac-remote">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-base"></i>
										</div>
									</div>
								</div>

							</div>

							<div class="col-md-6">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Accent folding</h6>
									<p class="mb-3">If the text includes accented characters in the text field, Autocomplete is smart enough not to show results that aren't accented. Try typing "Jo" to see "John" and "Jörn", then type "Jö" to see only "Jörn".</p>
									
									<div class="form-group form-group-feedback form-group-feedback-left">
										<input type="text" class="form-control" placeholder="Type 'Jo'" id="ac-folding">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-base"></i>
										</div>
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Custom data and display</h6>
									<p class="mb-3">You can use your own custom data formats and displays by simply overriding the default <code>focus</code> and <code>select</code> actions. Try typing "i" letter to display a list of projects or just press the down arrow.</p>

									<div class="form-group form-group-feedback form-group-feedback-left">
										<input type="text" class="form-control" placeholder="Type 'i'" id="ac-custom">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-base"></i>
										</div>
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Combobox</h6>
									<p class="mb-3">A custom widget built by composition of Autocomplete and Button. You can either type something into the field to get filtered suggestions based on your input or use the button to get the full list of items.</p>

									<div class="form-group form-group-feedback form-group-feedback-left">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-base"></i>
										</div>
										<select id="ac-combo" class="form-control" data-fouc>
											<option value="">Select one...</option>
											<option value="ActionScript">ActionScript</option>
											<option value="AppleScript">AppleScript</option>
											<option value="Asp">Asp</option>
											<option value="BASIC">BASIC</option>
											<option value="C">C</option>
											<option value="C++">C++</option>
											<option value="Clojure">Clojure</option>
											<option value="COBOL">COBOL</option>
											<option value="ColdFusion">ColdFusion</option>
											<option value="Erlang">Erlang</option>
											<option value="Fortran">Fortran</option>
											<option value="Groovy">Groovy</option>
											<option value="Haskell">Haskell</option>
											<option value="Java">Java</option>
											<option value="JavaScript">JavaScript</option>
											<option value="Lisp">Lisp</option>
											<option value="Perl">Perl</option>
											<option value="PHP">PHP</option>
											<option value="Python">Python</option>
											<option value="Ruby">Ruby</option>
											<option value="Scala">Scala</option>
											<option value="Scheme">Scheme</option>
										</select>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Remote with caching</h6>
									<p class="mb-3">Similar to the remote datasource demo, though this adds some local caching to improve performance. The cache here saves just one query, and could be extended to cache multiple values, one for each term.</p>

									<div class="form-group form-group-feedback form-group-feedback-left">
										<input type="text" class="form-control" placeholder="Type 'ac'" id="ac-caching">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-base"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /autocomplete -->


				<!-- Select menu -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="panel-title">Select menu</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The following set of examples demonstrates jQuery UI <strong>Select menu</strong> component. The Selectmenu widgets provides a styleable select element replacement. It will act as a proxy back to the original select element, controlling its state for form submission or serialization. The datasource of select menu widget is a native select element. Option groups are supported by default.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Default functionality</h6>
									<p class="mb-3">Selectmenu component with default functionality. The styling is similar to other custom select components. Also supports 4 different sizes using <code>.ui-select-lg, *-sm, *-xs</code> classes added to the parent container.</p>

									<select name="speed" class="form-control select-basic" data-fouc>
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option disabled value="ID">Idaho</option>
										<option disabled value="WY">Wyoming</option>
										<option value="AL">Alabama</option>
										<option disabled value="AR">Arkansas</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
									</select>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">With icons</h6>
									<p class="mb-3">Selectmenu with icons and option groups. Uses <code>_renderItem</code> method that controls the creation of each option in the widget's menu. The method must create a new <code>&lt;li></code> element, append it to the menu, and return it.</p>

									<select name="speed" id="select-icons" class="form-control" data-fouc>
										<optgroup label="Services">
											<option value="wordpress2" data-icon="icon-wordpress2">Wordpress</option>
											<option value="tumblr2" data-icon="icon-tumblr2">Tumblr</option>
											<option value="stumbleupon" data-icon="icon-stumbleupon">Stumble upon</option>
											<option value="pinterest2" data-icon="icon-pinterest2">Pinterest</option>
											<option value="lastfm2" data-icon="icon-lastfm2">Lastfm</option>
										</optgroup>
										<optgroup label="File types">
											<option value="pdf" data-icon="icon-file-pdf">PDF</option>
											<option value="word" data-icon="icon-file-word">Word</option>
											<option value="excel" data-icon="icon-file-excel">Excel</option>
											<option value="openoffice" data-icon="icon-file-openoffice">Open office</option>
										</optgroup>
										<optgroup label="Browsers">
											<option value="chrome" data-icon="icon-chrome" selected>Chrome</option>
											<option value="firefox" data-icon="icon-firefox">Firefox</option>
											<option value="safari" data-icon="icon-safari">Safari</option>
											<option value="opera" data-icon="icon-opera">Opera</option>
											<option value="IE" data-icon="icon-IE">IE</option>
										</optgroup>
									</select>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Custom width</h6>
									<p class="mb-3">Example os Selectmenu component with auto width. This is the default width of the select that depends on the value size. For custom width use <code>width</code> option. When the value is null, the width of the native select is used.</p>

									<select name="speed" id="select-width" class="form-control" data-fouc>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="AR">Arkansas</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
										<optgroup label="Eastern Time Zone">
											<option value="CT">Connecticut</option>
											<option value="FL">Florida</option>
											<option value="MA">Massachusetts</option>
											<option value="WV">West Virginia</option>
										</optgroup>
									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Option groups</h6>
									<p class="mb-3">Example of Selectmenu with option groups. Select's opgroups are supported by default and use optgroup's <code>label</code> attribute as a text label. The styling is similar to optgroups in other custom select components.</p>

									<select name="speed" id="select-optgroups" class="form-control" data-fouc>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="AR">Arkansas</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
										<optgroup label="Eastern Time Zone">
											<option value="CT">Connecticut</option>
											<option value="FL">Florida</option>
											<option value="MA">Massachusetts</option>
											<option value="WV">West Virginia</option>
										</optgroup>
									</select>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">With images</h6>
									<p class="mb-3">Selectmenu with images. Uses <code>_renderItem</code> method that controls the creation of each option in the widget's menu. The method must create a new <code>&lt;li></code> element, append it to the menu, and return it. Image size is equal to icons size.</p>

									<select name="speed" id="select-images" class="form-control" data-fouc>
										<option value="mypodcast" data-class="demo-img-amazon">Amazon</option>
										<option value="myvideo" data-class="demo-img-youtube">Youtube</option>
										<option value="myrss" data-class="demo-img-twitter">Twitter</option>
										<option value="myrss" data-class="demo-img-bing">Bing</option>
										<option value="myrss" data-class="demo-img-spotify">Spotify</option>
									</select>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Disabled state</h6>
									<p class="mb-3">The following example demonstrates <code>disabled</code> state of select menu. Select can be disabled either on init if <code>disabled</code> option is set to <code>true</code> or after init using <code>("option", "disabled", true)</code> setter.</p>

									<select name="speed" id="select-disabled" class="form-control" data-fouc>
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID">Idaho</option>
										<option value="WY">Wyoming</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /select menu -->


				<!-- Spinner component -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="panel-title">Spinner component</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The following examples demonstrate jQuery UI <strong>Spinner</strong> component. Spinner is an enhanced text input for entering numeric values, with plus/minus buttons and arrow key handling. By default spinner doesn't support mouse wheel control of input value and requires a third party "jQuery Mousewheel" extension. Also added <code>globalize.js</code> library with all available cultures for easy internationalization. All stylings are inherited from basic input field styling.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Default functionality</h6>
									<p class="mb-3">This example demonstrates the very basic functionality with default options. Starting value is specified in input's <code>value</code>, mouse wheel support is added by default. Buttons styling and icons can be changed in CSS.</p>

									<input id="spinner-basic" class="form-control" value="10">
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Decimal spinner</h6>
									<p class="mb-3">Decimal spinner with <code>0.01</code> step. The code handling the culture change reads the current spinner value, then changes the culture, then sets the value again, resulting in an updated formatting, based on the new culture.</p>

									<div class="row">
										<div class="col-md-8">
											<input id="spinner-decimal" class="form-control" value="10">
										</div>

										<div class="col-md-4">
											<select class="form-control select-basic" id="spinner-decimal-culture" data-fouc>
												<option value="en-EN" selected>English</option>
												<option value="de-DE">German</option>
												<option value="ja-JP">Japanese</option>
											</select>
										</div>
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Time spinner</h6>
									<p class="mb-3">A custom widget extending spinner. Use the <code>globalization.js</code> plugin to parse and output a timestamp, with custom <code>step</code> and <code>page</code> options. Cursor up/down spins minutes, page up/down spins hours.</p>

									<div class="row">
										<div class="col-md-8">
											<input id="spinner-time" class="form-control" value="10">
										</div>

										<div class="col-md-4">
											<select class="form-control select-basic" id="spinner-time-culture" data-fouc>
												<option value="en-EN" selected>English</option>
												<option value="de-DE">German</option>
											</select>
										</div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Spinner min/max limits</h6>
									<p class="mb-3">Example with <code>minimum</code> and <code>maximum</code> allowed values. If <code>globalize.js</code> is included, the <code>min</code> and <code>max</code> options can be passed as a string which will be parsed based on the <code>numberFormat</code> and culture options.</p>

									<input id="spinner-limits" class="form-control" value="90">
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-4">
									<h6 class="font-weight-semibold">Currency</h6>
									<p class="mb-3">Example of a currency selection and amount spinner. Uses <code>numberFormat</code> option to specify a format of numbers passed to Globalize, if available. Most common are "n" for a decimal number and "C" for a currency value.</p>

									<div class="row">
										<div class="col-md-8">
											<input id="spinner-currency" class="form-control" value="10">
										</div>

										<div class="col-md-4">
											<select class="form-control select-basic" id="spinner-currency-culture" data-fouc>
												<option value="en-US">US $</option>
												<option value="de-DE">EUR €</option>
												<option value="ja-JP">YEN ¥</option>
											</select>
										</div>
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Spinner overflow</h6>
									<p class="mb-3">The following example demonstrates <strong>overflow</strong> feature used together with <code>spin</code> event. Overflowing spinner restricted to a range of -10 to 10. For anything above 10, it'll overflow to -10, and the other way round.</p>

									<input id="spinner-overflow" class="form-control" value="10">
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Disabled state</h6>
									<p class="mb-3">The following example demonstrates <code>disabled</code> state of a spinner. Spinner can be disabled either on init if <code>disabled</code> option is set to <code>true</code> or after init using <code>("option", "disabled", true)</code> setter.</p>

									<input id="spinner-disabled" class="form-control" value="10">
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Spinner step</h6>
									<p class="mb-3">The spinner's <code>step</code> option controls the size of the step to take when spinning via buttons or via the <code>stepUp()</code>/<code>stepDown()</code> methods. The element's step attribute is used if it exists and the option is not explicitly set.</p>

									<input id="spinner-step" class="form-control" value="20">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /spinner component -->

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
