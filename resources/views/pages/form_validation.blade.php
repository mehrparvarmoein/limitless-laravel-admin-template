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
	<script src="../../../../global_assets/js/plugins/forms/validation/validate.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switch.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_validation.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Forms</span> - Validation</h4>
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
							<a href="form_validation" class="breadcrumb-item">Forms</a>
							<span class="breadcrumb-item active">Validation</span>
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

				<!-- Form validation -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Form validation</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-4">Validate.js makes simple clientside form validation easy, whilst still offering plenty of customization options. The plugin comes bundled with a useful set of validation methods, including URL and email validation, while providing an API to write your own methods. All bundled methods come with default error messages in english and translations into 37 other languages. <strong>Note:</strong> <code>success</code> callback is configured for demo purposes only and can be removed in validation setup.</p>

						<form class="form-validate-jquery" action="#">
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Basic inputs</legend>

								<!-- Basic text input -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Basic text input <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="basic" class="form-control" required placeholder="Text input validation">
									</div>
								</div>
								<!-- /basic text input -->


								<!-- Input with icons -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Input with icon <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-group-feedback form-group-feedback-right">
											<input type="text" name="with_icon" class="form-control" required placeholder="Text input with icon validation">
											<div class="form-control-feedback">
												<i class="icon-droplets"></i>
											</div>
										</div>
									</div>
								</div>
								<!-- /input with icons -->


								<!-- Input group -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Input group <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="icon-mention"></i></span>
											</div>
											<input type="text" name="input_group" class="form-control" required placeholder="Input group validation">
										</div>
									</div>
								</div>
								<!-- /input group -->


								<!-- Password field -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Password field <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="password" name="password" id="password" class="form-control" required placeholder="Minimum 5 characters allowed">
									</div>
								</div>
								<!-- /password field -->


								<!-- Repeat password -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Repeat password <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="password" name="repeat_password" class="form-control" required placeholder="Try different password">
									</div>
								</div>
								<!-- /repeat password -->


								<!-- Email field -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Email field <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="email" name="email" class="form-control" id="email" required placeholder="Enter a valid email address">
									</div>
								</div>
								<!-- /email field -->


								<!-- Repeat email -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Repeat email <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="email" name="repeat_email" class="form-control" required placeholder="Enter a valid email address">
									</div>
								</div>
								<!-- /repeat email -->


								<!-- Minimum characters -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Minimum characters <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="minimum_characters" class="form-control" required placeholder="Enter at least 10 characters">
									</div>
								</div>
								<!-- /minimum characters -->


								<!-- Maximum characters -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Maximum characters <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="maximum_characters" class="form-control" required placeholder="Enter 10 characters maximum">
									</div>
								</div>
								<!-- /maximum characters -->


								<!-- Minimum number -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Minimum number <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="minimum_number" class="form-control" required placeholder="Enter a value greater than or equal to 10">
									</div>
								</div>
								<!-- /minimum number -->


								<!-- Maximum number -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Maximum number <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="maximum_number" class="form-control" required placeholder="Please enter a value less than or equal to 10">
									</div>
								</div>
								<!-- /maximum number -->


								<!-- Basic textarea -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Basic textarea <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<textarea rows="5" cols="5" name="textarea" class="form-control" required placeholder="Default textarea"></textarea>
									</div>
								</div>
								<!-- /basic textarea -->

							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Advanced inputs</legend>

								<!-- Number range -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Number range <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="number_range" class="form-control" required placeholder="Enter a value between 10 and 20">
									</div>
								</div>
								<!-- /number range -->


								<!-- Touchspin spinners -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Touchspin spinner <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="touchspin" value="" required class="form-control touchspin-postfix" placeholder="Not valid if empty">
									</div>
								</div>
								<!-- /touchspin spinners -->


								<!-- Custom message -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Custom message <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="custom" class="form-control" required placeholder="Custom error message">
									</div>
								</div>
								<!-- /custom message -->


								<!-- URL validation -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">URL validation <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="url" class="form-control" required placeholder="Enter a valid URL address">
									</div>
								</div>
								<!-- /url validation -->


								<!-- Date validation -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Date validation <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="date" class="form-control" required placeholder="April, 2014 or any other date format">
									</div>
								</div>
								<!-- /date validation -->


								<!-- ISO date validation -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">ISO date validation <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="date_iso" class="form-control" required placeholder="YYYY/MM/DD or any other ISO date format">
									</div>
								</div>
								<!-- /iso date validation -->


								<!-- Numbers only -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Numbers only <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="numbers" class="form-control" required placeholder="Enter decimal number only">
									</div>
								</div>
								<!-- /numbers only -->


								<!-- Digits only -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Digits only <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="digits" class="form-control" required placeholder="Enter digits only">
									</div>
								</div>
								<!-- /digits only -->


								<!-- Credit card validation -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Credit card validation <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="text" name="card" class="form-control" required placeholder="Enter credit card number. Try 446-667-651">
									</div>
								</div>
								<!-- /credit card validation -->


								<!-- Basic file uploader -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Basic file uploader <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="file" name="unstyled_file" class="form-control" required>
									</div>
								</div>
								<!-- /basic file uploader -->


								<!-- Styled file uploader -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Styled file uploader <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<input type="file" name="styled_file" class="form-input-styled" required data-fouc>
									</div>
								</div>
								<!-- /styled file uploader -->


								<!-- Basic select -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Basic select <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<select name="default_select" class="form-control" required>
											<option value="">Choose an option</option> 
											<optgroup label="Alaskan/Hawaiian Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI">Hawaii</option>
												<option value="CA">California</option>
											</optgroup>
											<optgroup label="Mountain Time Zone">
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="WY">Wyoming</option>
											</optgroup>
											<optgroup label="Central Time Zone">
												<option value="AL">Alabama</option>
												<option value="AR">Arkansas</option>
												<option value="KY">Kentucky</option>
											</optgroup>
										</select>
									</div>
								</div>
								<!-- /basic select -->


								<!-- Styled select -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Styled select <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<select name="styled_select" class="form-control form-input-styled" required data-fouc>
											<option value="">Choose an option</option> 
											<optgroup label="Alaskan/Hawaiian Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI">Hawaii</option>
												<option value="CA">California</option>
											</optgroup>
											<optgroup label="Mountain Time Zone">
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="WY">Wyoming</option>
											</optgroup>
											<optgroup label="Central Time Zone">
												<option value="AL">Alabama</option>
												<option value="AR">Arkansas</option>
												<option value="KY">Kentucky</option>
											</optgroup>
										</select>
									</div>
								</div>
								<!-- /styled asic select -->


								<!-- Select2 select -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Select2 select <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<select name="select2" data-placeholder="Select a State..." class="form-control form-control-select2" required data-fouc>
											<option></option>
											<optgroup label="Alaskan/Hawaiian Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI">Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone">
												<option value="CA">California</option>
												<option value="NV">Nevada</option>
												<option value="OR">Oregon</option>
												<option value="WA">Washington</option>
											</optgroup>
											<optgroup label="Mountain Time Zone">
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="WY">Wyoming</option>
											</optgroup>
										</select>
									</div>
								</div>
								<!-- /select2 select -->


								<!-- Multiple select -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Multiple select <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<select name="default_multiple_select" class="form-control" multiple required>
											<optgroup label="Alaskan/Hawaiian Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI">Hawaii</option>
												<option value="CA">California</option>
												<option value="NV">Nevada</option>
												<option value="WA">Washington</option>
											</optgroup>
											<optgroup label="Mountain Time Zone">
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="ID">Idaho</option>
												<option value="WY">Wyoming</option>
											</optgroup>
											<optgroup label="Central Time Zone">
												<option value="AL">Alabama</option>
												<option value="AR">Arkansas</option>
												<option value="IL">Illinois</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
											</optgroup>
										</select>
									</div>
								</div>
								<!-- /multiple select -->

							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Checkboxes and radios</legend>

								<!-- Basic single checkbox -->
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Basic single checkbox <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="single_basic_checkbox" required>
												Accept our terms
											</label>
										</div>
									</div>
								</div>
								<!-- /basic singlecheckbox -->


								<!-- Basic checkbox group -->
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Basic checkbox group <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="basic_checkbox" required>
												Duis eget nibh purus
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="basic_checkbox">
												Maecenas non nulla ac nunc
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="basic_checkbox">
												Maecenas egestas tristique
											</label>
										</div>
									</div>
								</div>
								<!-- /basic checkbox group -->


								<!-- Inline checkbox group -->
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Basic inline checkbox group <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="basic_inline_checkbox" required>
												Duis eget nibh purus
											</label>
										</div>

										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="basic_inline_checkbox">
												Maecenas non nulla ac nunc
											</label>
										</div>
									</div>
								</div>
								<!-- /inline checkbox group -->


								<!-- Basic radio group -->
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Basic radio group <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" class="form-check-input" name="basic_radio" required>
												Cras leo turpis malesuada eget
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" class="form-check-input" name="basic_radio">
												Maecenas congue justo vel ipsum
											</label>
										</div>
									</div>
								</div>
								<!-- /basic radio group -->


								<!-- Basic inline radio group -->
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Basic inline radio group <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="radio" class="form-check-input" name="basic_radio_group" required>
												Cras leo turpis malesuada eget
											</label>
										</div>

										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="radio" class="form-check-input" name="basic_radio_group">
												Maecenas congue justo vel ipsum
											</label>
										</div>
									</div>
								</div>
								<!-- /basic inline radio group -->


								<hr class="mb-4">


								<!-- Single styled checkbox -->
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Single styled checkbox <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" name="single_styled_checkbox" class="form-input-styled" required data-fouc>
												Accept our terms
											</label>
										</div>
									</div>
								</div>
								<!-- /single styled checkbox -->


								<!-- Styled checkbox group -->
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Styled checkbox group <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" name="styled_checkbox" class="form-input-styled" required data-fouc>
												Duis eget nibh purus
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" name="styled_checkbox" class="form-input-styled" data-fouc>
												Maecenas non nulla ac nunc
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" name="styled_checkbox" class="form-input-styled" data-fouc>
												Maecenas egestas tristique
											</label>
										</div>
									</div>
								</div>
								<!-- /styled checkbox group -->


								<!-- Inline checkbox group -->
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Inline checkbox group <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="checkbox" name="styled_inline_checkbox" class="form-input-styled" required data-fouc>
												Duis eget nibh purus
											</label>
										</div>
						
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="checkbox" name="styled_inline_checkbox" class="form-input-styled" data-fouc>
												Maecenas non nulla ac nunc
											</label>
										</div>
									</div>
								</div>
								<!-- /inline checkbox group -->


								<!-- Styled radio group -->
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Styled radio group <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" name="styled_radio" class="form-input-styled" required data-fouc>
												Cras leo turpis malesuada eget
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" name="styled_radio" class="form-input-styled" data-fouc>
												Maecenas congue justo vel ipsum
											</label>
										</div>
									</div>
								</div>
								<!-- /styled radio group -->


								<!-- Styled inline radio group -->
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Styled inline radio group <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="styled_inline_radio" class="form-input-styled" required data-fouc>
												Cras leo turpis malesuada eget
											</label>
										</div>

										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="styled_inline_radio" class="form-input-styled" data-fouc>
												Maecenas congue justo vel ipsum
											</label>
										</div>
									</div>
								</div>
								<!-- /styled inline radio group -->

							</fieldset>

							<fieldset>
								<legend class="text-uppercase font-size-sm font-weight-bold">Switcher components</legend>

								<!-- Switchery single -->
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Swichery single <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check form-check-switchery switchery-sm">
											<label class="form-check-label">
												<input type="checkbox" name="switchery_single" class="form-input-switchery" required data-fouc>
												Accept our terms
											</label>
										</div>
									</div>
								</div>
								<!-- /switchery single -->


								<!-- Switchery group -->
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Swichery group <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check form-check-switchery switchery-sm">
											<label class="form-check-label">
												<input type="checkbox" name="switchery_group" class="form-input-switchery" required data-fouc>
												Duis eget nibh purus
											</label>
										</div>

										<div class="form-check form-check-switchery switchery-sm">
											<label class="form-check-label">
												<input type="checkbox" name="switchery_group" class="form-input-switchery" data-fouc>
												Maecenas non nulla ac nunc
											</label>
										</div>

										<div class="form-check form-check-switchery switchery-sm">
											<label class="form-check-label">
												<input type="checkbox" name="switchery_group" class="form-input-switchery" data-fouc>
												Maecenas egestas tristique
											</label>
										</div>
									</div>
								</div>
								<!-- /switchery group -->


								<!-- Inline switchery group -->
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Inline swichery group <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check form-check-inline form-check-switchery switchery-sm">
											<label class="form-check-label">
												<input type="checkbox" name="inline_switchery_group" class="form-input-switchery" required data-fouc>
												Duis eget nibh purus
											</label>
										</div>

										<div class="form-check form-check-inline form-check-switchery switchery-sm">
											<label class="form-check-label">
												<input type="checkbox" name="inline_switchery_group" class="form-input-switchery" data-fouc>
												Maecenas egestas tristique
											</label>
										</div>
									</div>
								</div>
								<!-- /inline switchery group -->


								<hr>


								<!-- Switch single -->
								<div class="form-group row">
									<label class="col-lg-3 col-form-label">Switch single <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check form-check-switch form-check-switch-left">
											<label class="form-check-label d-flex align-items-center">
												<input type="checkbox" name="switch_single" data-on-text="Yes" data-off-text="No" class="form-input-switch" required>
												Accept our terms
											</label>
										</div>
									</div>
								</div>
								<!-- /switch single -->


								<!-- Switch group -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Switch group <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check form-check-switch form-check-switch-left">
											<label class="form-check-label d-flex align-items-center">
												<input type="checkbox" name="switch_group" class="form-input-switch" required>
												Duis eget nibh purus
											</label>
										</div>

										<div class="form-check form-check-switch form-check-switch-left">
											<label class="form-check-label d-flex align-items-center">
												<input type="checkbox" name="switch_group" class="form-input-switch">
												Maecenas non nulla ac nunc
											</label>
										</div>

										<div class="form-check form-check-switch form-check-switch-left">
											<label class="form-check-label d-flex align-items-center">
												<input type="checkbox" name="switch_group" class="form-input-switch">
												Maecenas egestas tristique
											</label>
										</div>
									</div>
								</div>
								<!-- /switch group -->


								<!-- Inline switch group -->
								<div class="form-group row">
									<label class="col-form-label col-lg-3">Inline switch group <span class="text-danger">*</span></label>
									<div class="col-lg-9">
										<div class="form-check form-check-inline form-check-switch form-check-switch-left">
											<label class="form-check-label align-items-center">
												<input type="checkbox" name="inline_switch_group" class="form-input-switch" required>
												Duis eget nibh purus
											</label>
										</div>

										<div class="form-check form-check-inline form-check-switch form-check-switch-left">
											<label class="form-check-label align-items-center">
												<input type="checkbox" name="inline_switch_group" class="form-input-switch">
												Maecenas non nulla ac nunc
											</label>
										</div>
									</div>
								</div>
								<!-- /inline switch group -->

							</fieldset>

							<div class="d-flex justify-content-end align-items-center">
								<button type="reset" class="btn btn-light" id="reset">Reset <i class="icon-reload-alt ml-2"></i></button>
								<button type="submit" class="btn btn-primary ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
							</div>
						</form>
					</div>
				</div>
				<!-- /form validation -->

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
