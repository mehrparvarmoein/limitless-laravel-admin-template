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
	<script src="../../../../global_assets/js/plugins/forms/inputs/inputmask.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/core.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/tags/tagsinput.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/tags/tokenfield.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/maxlength.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/formatter.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_floating_labels.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Forms</span> - Floating Labels</h4>
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
							<a href="form_floating_labels" class="breadcrumb-item">Forms</a>
							<span class="breadcrumb-item active">Floating labels</span>
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

				<!-- Floating labels -->
				<div class="row">
					<div class="col-md-6">

						<!-- Title -->
						<div class="mb-3">
							<h6 class="mb-0 font-weight-semibold">
								Hidden labels
							</h6>
							<span class="text-muted d-block">Inputs with empty values</span>
						</div>
						<!-- /title -->


						<!-- Text inputs -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Text inputs</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="form-group form-group-float">
									<label class="form-group-float-label">Text input</label>
									<input type="text" class="form-control" placeholder="Text input">
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Password input</label>
									<input type="password" class="form-control" placeholder="Password input">
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Input with helper</label>
									<input type="text" class="form-control" placeholder="Input with helper">
									<span class="form-text text-muted">Input helper text block</span>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label text-success font-weight-semibold">Contextual input</label>
									<div class="form-group-feedback form-group-feedback-right">
										<input type="text" class="form-control border-success" placeholder="Success with icon">
										<div class="form-control-feedback text-success">
											<i class="icon-checkmark3"></i>
										</div>
									</div>
									<span class="form-text text-success">Contextual input helper</span>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Readonly input field</label>
									<input type="text" class="form-control" readonly placeholder="Readonly input field">
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Disabled input field</label>
									<input type="text" class="form-control" disabled placeholder="Disabled input field">
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Textarea</label>
									<textarea rows="5" cols="5" class="form-control" placeholder="Textarea"></textarea>
								</div>
							</div>
						</div>
						<!-- /text inputs -->


						<!-- Input groups -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Input groups</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="form-group form-group-float">
									<label class="form-group-float-label">Left group addon</label>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-paperplane"></i></span>
										</span>
										<input type="text" class="form-control" placeholder="Left group addon">
									</div>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Right group addon</label>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Right group addon">
										<span class="input-group-append">
											<span class="input-group-text"><i class="icon-truck"></i></span>
										</span>
									</div>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Left group button</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<button type="button" class="btn bg-blue dropdown-toggle" data-toggle="dropdown">Action</button>
			                                <div class="dropdown-menu">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</div>
										<input type="text" class="form-control" placeholder="Left group button">
									</div>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Right group button</label>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Right group button">
										<div class="input-group-append">
											<button type="button" class="btn bg-blue dropdown-toggle" data-toggle="dropdown">Action</button>
			                                <div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group form-group-float form-group-feedback form-group-feedback-right">
									<label class="form-group-float-label text-danger font-weight-semibold">Contextual input group</label>
									<div class="position-relative">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text text-danger">
													<i class="icon-blocked"></i>
												</span>
											</span>
											<input type="text" class="form-control border-danger" placeholder="Contextual input group">
										</div>
										<div class="form-control-feedback text-danger">
											<i class="icon-spam"></i>
										</div>
									</div>
									<span class="form-text text-danger">Contextual input group helper</span>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Touchspin spinners</label>
									<input type="text" value="" class="form-control touchspin-basic" placeholder="Touchspin spinners">
								</div>
							</div>
						</div>
						<!-- /input groups -->


						<!-- Selects -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Selects</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="form-group form-group-float">
									<label class="form-group-float-label">Basic select</label>
									<select class="form-control">
										<option value="" selected>Basic select</option>
										<optgroup label="Alaskan/Hawaiian Time Zone">
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
										</optgroup>
										<optgroup label="Pacific Time Zone">
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="WA">Washington</option>
										</optgroup>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="WY">Wyoming</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Styled select</label>
									<select class="form-control form-control-uniform" data-fouc>
										<option value="" selected>Basic select</option>
										<optgroup label="Alaskan/Hawaiian Time Zone">
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
										</optgroup>
										<optgroup label="Pacific Time Zone">
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="WA">Washington</option>
										</optgroup>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="WY">Wyoming</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Single Select2 select</label>
									<select data-placeholder="Single Select2 select" class="form-control form-control-select2" data-fouc>
										<option></option>
										<optgroup label="Alaskan/Hawaiian Time Zone">
											<option value="AK">Alaska</option>
											<option value="HI">Hawaii</option>
										</optgroup>
										<optgroup label="Pacific Time Zone">
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="WA">Washington</option>
										</optgroup>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="WY">Wyoming</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Multiple Select2 select</label>
									<select data-placeholder="Multiple Select2 select" multiple="multiple" class="form-control form-control-select2" data-fouc>
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
										<optgroup label="Eastern Time Zone">
											<option value="CT">Connecticut</option>
											<option value="FL">Florida</option>
											<option value="MA">Massachusetts</option>
											<option value="WV">West Virginia</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Bootstrap multiselect</label>
									<select class="form-control form-control-multiselect" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
							</div>
						</div>
						<!-- /selects -->


						<!-- Other inputs -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Other inputs</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="form-group form-group-float">
									<label class="form-group-float-label">Typeahead</label>
									<input type="text" class="form-control typeahead-basic" dir="rtl" placeholder="Typeahead">
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Masked input</label>
		                        	<input type="text" class="form-control" data-mask="99/99/9999" placeholder="Masked input">
		                        	<span class="form-text text-muted">99/99/9999</span>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Input formatter</label>
		                        	<input type="text" class="form-control" name="format-date" placeholder="Input formatter">
		                        	<span class="form-text text-muted">99/99/9999</span>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Bootstrap Maxlength</label>
		                        	<input type="text" class="form-control form-control-maxlength" maxlength="10" placeholder="Bootstrap Maxlength">
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Bootstrap Tokenfield</label>
									<input type="text" class="form-control token-field" placeholder="- Bootstrap Tokenfield" data-fouc>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Bootstrap tags input</label>
									<input type="text" class="form-control tags-input" placeholder="- Bootstrap tags input" data-fouc>
								</div>

								<div class="form-group form-group-float">
									<label class="d-block form-group-float-label">Default file input</label>
									<input type="file" class="form-control h-auto">
								</div>

								<div class="form-group form-group-float">
									<label class="d-block form-group-float-label">Styled file input</label>
									<input type="file" class="form-control-uniform" data-fouc>
								</div>
							</div>
						</div>
						<!-- /other inputs -->

					</div>

					<div class="col-md-6">

						<!-- Title -->
						<div class="mb-3">
							<h6 class="mb-0 font-weight-semibold">
								Visible labels
							</h6>
							<span class="text-muted d-block">Inputs with predefined values</span>
						</div>
						<!-- /title -->


						<!-- Text inputs -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Text inputs</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="form-group form-group-float">
									<label class="form-group-float-label">Text input</label>
									<input type="text" class="form-control" value="Value" placeholder="Text input">
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Password input</label>
									<input type="password" class="form-control" value="Value" placeholder="Password input">
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Input with helper</label>
									<input type="text" class="form-control" value="Value" placeholder="Input with helper">
									<span class="form-text text-muted">Input helper text block</span>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label text-success font-weight-semibold">Contextual input</label>
									<div class="form-group-feedback form-group-feedback-right">
										<input type="text" class="form-control border-success" value="Value" placeholder="Success with icon">
										<div class="form-control-feedback text-success">
											<i class="icon-checkmark3"></i>
										</div>
									</div>
									<span class="form-text text-success">Contextual input helper</span>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Readonly input field</label>
									<input type="text" class="form-control" readonly value="Value" placeholder="Readonly input field">
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Disabled input field</label>
									<input type="text" class="form-control" disabled value="Value" placeholder="Disabled input field">
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Textarea</label>
									<textarea rows="5" cols="5" class="form-control" placeholder="Textarea">Text</textarea>
								</div>
							</div>
						</div>
						<!-- /text inputs -->


						<!-- Input groups -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Input groups</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="form-group form-group-float">
									<label class="form-group-float-label">Left group addon</label>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-paperplane"></i></span>
										</span>
										<input type="text" class="form-control" value="Value" placeholder="Left group addon">
									</div>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Right group addon</label>
									<div class="input-group">
										<input type="text" class="form-control" value="Value" placeholder="Right group addon">
										<span class="input-group-append">
											<span class="input-group-text"><i class="icon-truck"></i></span>
										</span>
									</div>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Left group button</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<button type="button" class="btn bg-blue dropdown-toggle" data-toggle="dropdown">Action</button>
			                                <div class="dropdown-menu">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</div>
										<input type="text" class="form-control" value="Value" placeholder="Left group button">
									</div>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Right group button</label>
									<div class="input-group">
										<input type="text" class="form-control" value="Value" placeholder="Right group button">
										<div class="input-group-append">
											<button type="button" class="btn bg-blue dropdown-toggle" data-toggle="dropdown">Action</button>
			                                <div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group form-group-float form-group-feedback form-group-feedback-right">
									<label class="form-group-float-label text-danger font-weight-semibold">Contextual input group</label>
									<div class="position-relative">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text text-danger"><i class="icon-blocked"></i></span>
											</span>
											<input type="text" class="form-control border-danger" value="Value" placeholder="Contextual input group">
										</div>
										<div class="form-control-feedback text-danger">
											<i class="icon-spam"></i>
										</div>
									</div>
									<span class="form-text text-danger">Contextual input group helper</span>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Touchspin spinners</label>
									<input type="text" value="10" class="form-control touchspin-basic" placeholder="Touchspin spinners">
								</div>
							</div>
						</div>
						<!-- /input groups -->


						<!-- Selects -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Selects</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="form-group form-group-float">
									<label class="form-group-float-label">Basic select</label>
									<select class="form-control">
										<option value="">Select state...</option>
										<optgroup label="Alaskan/Hawaiian Time Zone">
											<option value="AK" selected>Alaska</option>
											<option value="HI">Hawaii</option>
										</optgroup>
										<optgroup label="Pacific Time Zone">
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="WA">Washington</option>
										</optgroup>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="WY">Wyoming</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Styled select</label>
									<select class="form-control form-control-uniform" data-fouc>
										<option value="" selected>Styled select</option>
										<optgroup label="Alaskan/Hawaiian Time Zone">
											<option value="AK" selected>Alaska</option>
											<option value="HI">Hawaii</option>
										</optgroup>
										<optgroup label="Pacific Time Zone">
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="WA">Washington</option>
										</optgroup>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="WY">Wyoming</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Single Select2 select</label>
									<select data-placeholder="Single Select2 select" class="form-control form-control-select2" data-fouc>
										<option></option>
										<optgroup label="Alaskan/Hawaiian Time Zone">
											<option value="AK" selected>Alaska</option>
											<option value="HI">Hawaii</option>
										</optgroup>
										<optgroup label="Pacific Time Zone">
											<option value="CA">California</option>
											<option value="NV">Nevada</option>
											<option value="WA">Washington</option>
										</optgroup>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO">Colorado</option>
											<option value="WY">Wyoming</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Multiple Select2 select</label>
									<select data-placeholder="Multiple Select2 select" multiple="multiple" class="form-control form-control-select2" data-fouc>
										<optgroup label="Mountain Time Zone">
											<option value="AZ">Arizona</option>
											<option value="CO" selected>Colorado</option>
											<option value="ID">Idaho</option>
											<option value="WY">Wyoming</option>
										</optgroup>
										<optgroup label="Central Time Zone">
											<option value="AL">Alabama</option>
											<option value="IA">Iowa</option>
											<option value="KS">Kansas</option>
											<option value="KY">Kentucky</option>
										</optgroup>
										<optgroup label="Eastern Time Zone">
											<option value="CT">Connecticut</option>
											<option value="FL">Florida</option>
											<option value="MA" selected>Massachusetts</option>
											<option value="WV">West Virginia</option>
										</optgroup>
									</select>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Bootstrap multiselect</label>
									<div class="multi-select-full">
										<select class="form-control form-control-multiselect" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes" selected>Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<!-- /selects -->


						<!-- Other inputs -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Other inputs</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="form-group form-group-float">
									<label class="form-group-float-label">Typeahead</label>
									<input type="text" class="form-control typeahead-basic" value="Arkansas" dir="rtl" placeholder="Typeahead">
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Masked input</label>
		                        	<input type="text" class="form-control" data-mask="99/99/9999" value="22/22/2222" placeholder="Masked input">
		                        	<span class="form-text text-muted">99/99/9999</span>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Input formatter</label>
		                        	<input type="text" class="form-control" name="format-date" value="33/33/3333" placeholder="Input formatter">
		                        	<span class="form-text text-muted">99/99/9999</span>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Bootstrap Maxlength</label>
		                        	<input type="text" class="form-control form-control-maxlength" maxlength="10" value="Value" placeholder="Bootstrap Maxlength">
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Bootstrap Tokenfield</label>
									<input type="text" class="form-control token-field" value="California,Washington" placeholder="- Bootstrap Tokenfield" data-fouc>
								</div>

								<div class="form-group form-group-float">
									<label class="form-group-float-label">Bootstrap tags input</label>
									<input type="text" class="form-control tags-input" value="Miami,Texas" placeholder="- Bootstrap tags input" data-fouc>
								</div>

								<div class="form-group form-group-float">
									<label class="d-block">Default file input (forced)</label>
									<input type="file" class="form-control" src="/file.txt" value="10" name="uploadform" size="30" id="fileupload2">
								</div>

								<div class="form-group form-group-float">
									<label class="d-block">Styled file input (forced)</label>
									<input type="file" class="form-control-uniform" data-fouc>
								</div>
							</div>
						</div>
						<!-- /other inputs -->

					</div>
				</div>
				<!-- /floating labels -->

			</div>
			<!-- content area -->


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
