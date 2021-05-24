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
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_select2.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Forms</span> - Select2 Selects</h4>
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
							<a href="form_select2" class="breadcrumb-item">Forms</a>
							<span class="breadcrumb-item active">Select2 selects</span>
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

				<!-- Select2 selects -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Basic setup
					</h6>
					<span class="text-muted d-block">Examples with basic options</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Single select</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="form-group">
									<label>Basic select</label>
									<select class="form-control select" data-fouc>
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
									</select>
								</div>

								<div class="form-group">
									<label class="d-block">Fixed select width</label>
									<select class="form-control select-fixed-single" data-fouc>
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
									</select>
								</div>

								<div class="form-group">
									<label>Select with search</label>
									<select class="form-control select-search" data-fouc>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group">
									<label>Select with placeholder</label>
									<select data-placeholder="Select a State..." class="form-control select" data-fouc>
										<option></option>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group">
									<label>Select with icons</label>
									<select data-placeholder="Select a state..." class="form-control select-icons" data-fouc>
										<optgroup label="Services">
											<option value="wordpress2" data-icon="wordpress2">Wordpress</option>
											<option value="tumblr2" data-icon="tumblr2">Tumblr</option>
											<option value="stumbleupon" data-icon="stumbleupon">Stumble upon</option>
											<option value="pinterest2" data-icon="pinterest2">Pinterest</option>
											<option value="lastfm2" data-icon="lastfm2">Lastfm</option>
										</optgroup>
										<optgroup label="File types">
											<option value="pdf" data-icon="file-pdf">PDF</option>
											<option value="word" data-icon="file-word">Word</option>
											<option value="excel" data-icon="file-excel">Excel</option>
											<option value="openoffice" data-icon="file-openoffice">Open office</option>
										</optgroup>
										<optgroup label="Browsers">
											<option value="chrome" data-icon="chrome" selected>Chrome</option>
											<option value="firefox" data-icon="firefox">Firefox</option>
											<option value="safari" data-icon="safari">Safari</option>
											<option value="opera" data-icon="opera">Opera</option>
											<option value="IE" data-icon="IE">IE</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group">
									<label>Disable items</label>
									<select class="form-control select" data-fouc>
										<optgroup label="Mountain Time Zone">
											<option value="AZ" disabled>Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID" disabled>Idaho</option>
											<option value="WY" disabled>Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="AR" disabled>Arkansas</option>
											<option value="KS">Kansas</option>
											<option value="KY" disabled>Kentucky</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group">
									<label>Disabled select</label>
									<select class="form-control select" disabled data-fouc>
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID">Idaho</option>
										<option value="WY">Wyoming</option>
									</select>
								</div>

								<div class="form-group">
									<label>Menu background color</label>
									<select class="form-control select" data-dropdown-css-class="bg-teal-400" data-fouc>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Multiple select</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="form-group">
									<label>Multiple select</label>
									<select multiple="multiple" class="form-control select" data-fouc>
										<optgroup label="Mountain Time Zone">
											<option value="AZ" selected>Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="IA" selected>Iowa</option>
											<option value="KS" selected>Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group">
									<label class="d-block">Fixed width select</label>
									<select multiple="multiple" class="form-control select-fixed-multiple" data-fouc>
										<optgroup label="Mountain Time Zone">
											<option value="AZ" selected>Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="IA">Iowa</option>
											<option value="KS" selected>Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group">
									<label>With placeholder</label>
									<select data-placeholder="Select a State..." multiple="multiple" class="form-control select" data-fouc>
										<option></option>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group">
									<label>With icons</label>
									<select multiple="multiple" data-placeholder="Select a state..." class="form-control select-icons" data-fouc>
										<optgroup label="Services">
											<option value="wordpress2" data-icon="wordpress2">Wordpress</option>
											<option value="tumblr2" data-icon="tumblr2">Tumblr</option>
											<option value="stumbleupon" data-icon="stumbleupon">Stumble upon</option>
											<option value="pinterest2" data-icon="pinterest2">Pinterest</option>
											<option value="lastfm2" data-icon="lastfm2">Lastfm</option>
										</optgroup>
										<optgroup label="File types">
											<option value="pdf" data-icon="file-pdf">PDF</option>
											<option value="word" data-icon="file-word">Word</option>
											<option value="excel" data-icon="file-excel">Excel</option>
											<option value="openoffice" data-icon="file-openoffice">Open office</option>
										</optgroup>
										<optgroup label="Browsers">
											<option value="chrome" data-icon="chrome" selected>Chrome</option>
											<option value="firefox" data-icon="firefox" selected>Firefox</option>
											<option value="safari" data-icon="safari" selected>Safari</option>
											<option value="opera" data-icon="opera">Opera</option>
											<option value="IE" data-icon="IE">IE</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group">
									<label>Drag and drop sorting</label>
									<select class="form-control select-multiple-drag" multiple="multiple" data-fouc>
										<option value="AZ" selected>Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID">Idaho</option>
										<option value="WY">Wyoming</option>
										<option value="IL" selected>Illinois</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
									</select>
								</div>

								<div class="form-group">
									<label>Disable menu items</label>
									<select multiple="multiple" class="form-control select" data-fouc>
										<optgroup label="Mountain Time Zone">
											<option value="AZ" disabled>Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID" disabled>Idaho</option>
											<option value="WY" selected>Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="AR" selected>Arkansas</option>
											<option value="KS">Kansas</option>
											<option value="KY" disabled>Kentucky</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group">
									<label>Disabled select</label>
									<select multiple="multiple" class="form-control select" disabled data-fouc>
										<option value="AZ" selected>Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID" selected>Idaho</option>
										<option value="WY" selected>Wyoming</option>
									</select>
								</div>

								<div class="form-group">
									<label>Menu background color</label>
									<select multiple="multiple" class="form-control select" data-dropdown-css-class="bg-teal-400" data-fouc>
										<optgroup label="Mountain Time Zone">
											<option value="AZ" selected>Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="IL" selected>Illinois</option>
											<option value="IA">Iowa</option>
											<option value="KS" selected>Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /select2 selects -->


				<!-- Select2 sizing -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Select sizing
					</h6>
					<span class="text-muted d-block">Single and multiple selects sizing</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Single select sizing</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="form-group">
									<label>Large select</label>
									<select data-placeholder="Select a State..." class="form-control form-control-lg select" data-container-css-class="select-lg" data-fouc>
										<option></option>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group">
									<label>Default select</label>
									<select data-placeholder="Select a State..." class="form-control select" data-fouc>
										<option></option>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group">
									<label>Small select</label>
									<select data-placeholder="Select a State..." class="form-control form-control-sm select" data-container-css-class="select-sm" data-fouc>
										<option></option>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Multiple select sizing</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="form-group">
									<label>Large select</label>
									<select multiple="multiple" data-placeholder="Select a State..." class="form-control form-control-lg select" data-container-css-class="select-lg" data-fouc>
										<option></option>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID" selected>Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="IA" selected>Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group">
									<label>Default select</label>
									<select multiple="multiple" data-placeholder="Select a State..." class="form-control select" data-fouc>
										<option></option>
										<optgroup label="Mountain Time Zone">
											<option value="AZ" selected>Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL" selected>Alabama</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group">
									<label>Small select</label>
									<select multiple="multiple" data-placeholder="Select a State..." class="form-control form-control-sm select" data-container-css-class="select-sm" data-fouc>
										<option></option>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY" selected>Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY" selected>Kentucky</option>
										</optgroup>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /select2 sizing -->


				<!-- Select2 advanced -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Advanced usage
					</h6>
					<span class="text-muted d-block">More complex configurations</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Advanced single selects</h5>
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
									<h6 class="font-weight-semibold">Minimum input</h6>
									<p class="mb-2">Select2 supports a minimum input setting which is useful for large remote datasets where short search terms are not very useful. Simply specify a number of input characters using <code>minimumInputLength</code> option:</p>

									<select data-placeholder="Enter 'as'" class="form-control select-minimum" data-fouc>
										<option></option>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Customizing how results are matched</h6>
									<p class="mb-2">Example of how matched results can be customized. Unlike other dropdowns on this page, this one matches options only if the term appears in the beginning of the string as opposed to anywhere.</p>

									<select class="form-control select-matched-customize" data-fouc>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Loading array data</h6>
									<p class="mb-2">Select2 provides a way to load the data from a local array. You can provide initial selections with array data by providing the option tag for the selected values, similar to how it would be done for a standard select.</p>

									<div class="mb-3">
										<p>1. Example below loads array:</p>
										<select class="form-control select-data-array" data-fouc></select>
									</div>

									<div class="mb-3">
										<p>2. Example below loads array with selected option:</p>
										<select class="form-control select-data-array" data-fouc>
											<option value="2" selected>duplicate</option>
										</select>
									</div>	
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Loading remote data</h6>
									<p class="mb-2">Select2 comes with AJAX support built in, using jQuery's AJAX methods. In this example, we can search for repositories using GitHub's API. Example also includes infinite scrolling feature:</p>

									<select class="form-control select-remote-data" data-fouc>
										<option value="3620194" selected>select2/select2</option>
									</select>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Diacritics support in single select</h6>
									<p class="mb-2">Select2's default matcher will ignore diacritics, making it easier for users to filter results in international selects. Type <strong>"aero"</strong> into the select below:</p>

									<select data-placeholder="Type 'aero'" class="form-control select-search" data-fouc>
										<option>Aeróbics</option>
										<option>Aeróbics en Agua</option>
										<option>Aerografía</option>
										<option>Aeromodelaje</option>
										<option>Águilas</option>
										<option>Ajedrez</option>
										<option>Ala Delta</option>
										<option>Álbumes de Música</option>
										<option>Alusivos</option>
										<option>Análisis de Escritura a Mano</option>
									</select>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Clearing results</h6>
									<p class="mb-2">Whether or not a clear button is displayed when the select box has a selection. The button, when clicked, resets the value of the select box back to the placeholder.</p>

									<select data-placeholder="Select a state" class="form-control select-clear" data-fouc>
										<option></option>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL" selected>Alabama</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
									</select>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Programmatic access</h6>
									<p class="mb-2">Select2 supports methods that allow programmatic control of the component: you can set and get single or multiple values, control menu visibility by opening and closing it, make the menu enabled or disabled.</p>

									<div class="mb-3">
										<p>1. Set and get value:</p>
										<p class="mb-2">
											<select data-placeholder="Select something" class="form-control select-access-value" data-fouc>
												<option></option>
												<option value="CA">California</option>
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="WY">Wyoming</option>
												<option value="CT">Connecticut</option>
											</select>
										</p>

										<button type="button" class="btn bg-blue access-set">Set to California</button>
										<button type="button" class="btn bg-blue access-get">Alert selected value</button>
									</div>

									<div class="mb-3">
										<p>2. Enable and disable menu:</p>
										<p class="mb-2">
											<select data-placeholder="Select something" class="form-control select-access-enable" data-fouc>
												<option></option>
												<option value="CA">California</option>
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="WY">Wyoming</option>
												<option value="CT">Connecticut</option>
											</select>
										</p>

										<button type="button" class="btn bg-danger-400 access-disable">Disable</button>
										<button type="button" class="btn bg-danger-400 access-enable">Enable</button>
									</div>

									<div class="mb-3">
										<p>3. Destroy and create menu:</p>
										<p class="mb-2">
											<select data-placeholder="Select something" class="form-control select-access-create" data-fouc>
												<option></option>
												<option value="CA">California</option>
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="WY">Wyoming</option>
												<option value="CT">Connecticut</option>
											</select>
										</p>

										<button type="button" class="btn bg-indigo-300 access-destroy">Destroy</button>
										<button type="button" class="btn bg-indigo-300 access-create">Create</button>
									</div>

									<div>
										<p>4. Open and close menu:</p>
										<p class="mb-2">
											<select data-placeholder="Select something" class="form-control select-access-open" data-fouc>
												<option></option>
												<option value="CA">California</option>
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="WY">Wyoming</option>
												<option value="CT">Connecticut</option>
											</select>
										</p>

										<button type="button" class="btn bg-teal-400 access-open">Open</button>
										<button type="button" class="btn bg-teal-400 access-close">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Advanced multiple selects</h5>
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
									<h6 class="font-weight-semibold">Tagging support</h6>
									<p class="mb-2">Select2 can be used to quickly set up fields used for tagging. When tagging is enabled the user can select from pre-existing tags or create a new tag by picking the first choice.</p>

									<select class="form-control select-multiple-tags" multiple="multiple" data-fouc>
										<option value="AZ">Arizona</option>
										<option value="CO" selected>Colorado</option>
										<option value="ID">Idaho</option>
										<option value="WY">Wyoming</option>
										<option value="AL" selected>Alabama</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
									</select>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Maximum input length</h6>
									<p class="mb-2">Select2 can be set a limit on the number of characters that can be entered per tag. You would not be able to enter any input of more than 5 characters long.</p>

									<select class="form-control select-multiple-maximum-length" multiple="multiple" data-fouc>
										<option value="AZ">Arizona</option>
										<option value="CO" selected>Colorado</option>
										<option value="ID">Idaho</option>
										<option value="WY">Wyoming</option>
										<option value="AL" selected>Alabama</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
									</select>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Auto tokenization</h6>
									<p class="mb-2">Select2 supports ability to add choices automatically as the user is typing into the search field. Try typing in the search field below and entering a space or a comma.</p>

									<select class="form-control select-multiple-tokenization" multiple="multiple" data-fouc>
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID">Idaho</option>
										<option value="WY">Wyoming</option>
										<option value="AL" selected>Alabama</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
									</select>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Limiting the number of selections</h6>
									<p class="mb-2">Select2 multi-value select boxes can set restrictions regarding the maximum number of options selected. The select below is declared with <code>maximumSelectionLength</code> option.</p>

									<select class="form-control select-multiple-limited" multiple="multiple" data-fouc>
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID">Idaho</option>
										<option value="WY">Wyoming</option>
										<option value="AL">Alabama</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY" selected>Kentucky</option>
									</select>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Diacritics support in multiple select</h6>
									<p class="mb-2">Select2's default matcher will ignore diacritics, making it easier for users to filter results in international selects. Type <strong>"aero"</strong> into the select below:</p>

									<select data-placeholder="Type 'aero'" multiple="multiple" class="form-control select" data-fouc>
										<option>Aeróbics</option>
										<option>Aeróbics en Agua</option>
										<option>Aerografía</option>
										<option>Aeromodelaje</option>
										<option>Águilas</option>
										<option>Ajedrez</option>
										<option>Ala Delta</option>
										<option>Álbumes de Música</option>
										<option>Alusivos</option>
										<option>Análisis de Escritura a Mano</option>
									</select>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Programmatic access</h6>
									<p class="mb-2">Select2 supports methods that allow programmatic control of the component: you can set and get single or multiple values, control menu visibility by opening and closing it, make the menu enabled or disabled.</p>

									<div class="mb-3">
										<p>1. Reacting to external value changes:</p>
										<p class="mb-2">
											<select data-placeholder="Select something" multiple="multiple" class="form-control select-access-multiple-value" data-fouc>
												<option value="AK">Alaska</option>
												<option value="CA">California</option>
												<option value="AZ" selected>Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="WY" selected>Wyoming</option>
												<option value="CT">Connecticut</option>
											</select>
										</p>

										<button type="button" class="btn bg-blue change-to-ca">Select California</button>
										<button type="button" class="btn bg-blue change-to-ak-co">Select Alaska and Colorado</button>
									</div>

									<div class="mb-3">
										<p>2. Enable and disable menu:</p>
										<p class="mb-2">
											<select data-placeholder="Select something" multiple="multiple" class="form-control select-access-multiple-enable" data-fouc>
												<option value="AK">Alaska</option>
												<option value="CA">California</option>
												<option value="AZ" selected>Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="WY" selected>Wyoming</option>
												<option value="CT">Connecticut</option>
											</select>
										</p>

										<button type="button" class="btn bg-danger-400 access-multiple-disable">Disable</button>
										<button type="button" class="btn bg-danger-400 access-multiple-enable">Enable</button>
									</div>

									<div class="mb-3">
										<p>3. Destroy and create menu:</p>
										<p class="mb-2">
											<select data-placeholder="Select something" multiple="multiple" class="form-control select-access-multiple-create" data-fouc>
												<option value="AK">Alaska</option>
												<option value="CA">California</option>
												<option value="AZ" selected>Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="WY" selected>Wyoming</option>
												<option value="CT">Connecticut</option>
											</select>
										</p>

										<button type="button" class="btn bg-indigo-300 access-multiple-destroy">Destroy</button>
										<button type="button" class="btn bg-indigo-300 access-multiple-create">Create</button>
									</div>

									<div class="mb-3">
										<p>4. Clear selection:</p>
										<p class="mb-2">
											<select data-placeholder="Select states" multiple="multiple" class="form-control select-access-multiple-clear" data-fouc>
												<option value="AK">Alaska</option>
												<option value="CA">California</option>
												<option value="AZ" selected>Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="WY" selected>Wyoming</option>
												<option value="CT">Connecticut</option>
											</select>
										</p>

										<button type="button" class="btn bg-brown-400 access-multiple-clear">Clear selection</button>
									</div>

									<div>
										<p>5. Open and close menu:</p>
										<p class="mb-2">
											<select data-placeholder="Select something" multiple="multiple" class="form-control select-access-multiple-open" data-fouc>
												<option value="AK">Alaska</option>
												<option value="CA">California</option>
												<option value="AZ" selected>Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="WY" selected>Wyoming</option>
												<option value="CT">Connecticut</option>
											</select>
										</p>

										<button type="button" class="btn bg-teal-400 access-multiple-open">Open</button>
										<button type="button" class="btn bg-teal-400 access-multiple-close">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /select2 advanced -->          

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
