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
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/notifications/pnotify.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_multiselect.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Forms</span> - Multiselect</h4>
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
							<a href="form_multiselect" class="breadcrumb-item">Forms</a>
							<span class="breadcrumb-item active">Multiselect</span>
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
			
				<!-- Multiselect examples -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Basic examples
					</h6>
					<span class="text-muted d-block">Different multiselect options</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Basic examples</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Default multiselect -->
								<div class="form-group">
									<label>Default select</label>
									<select class="form-control multiselect" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /default multiselect -->


								<!-- Default multiselect with selected options -->
								<div class="form-group">
									<label>Default selected options</label>
									<select class="form-control multiselect" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes" selected>Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms" selected>Mushrooms</option>
									</select>
								</div>
								<!-- /default multiselect with selected options -->


								<!-- Options with divider -->
								<div class="form-group">
									<label>Options with divider</label>
									<select class="form-control multiselect" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option data-role="divider"></option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /options with divider -->


								<!-- Option groups support -->
								<div class="form-group">
									<label>Option groups support</label>
									<select class="form-control multiselect" multiple="multiple" data-fouc>
										<optgroup label="Mathematics">
											<option value="analysis">Analysis</option>
											<option value="algebra">Linear Algebra</option>
											<option value="discrete">Discrete Mathematics</option>
										</optgroup>
										<optgroup label="Computer Science">
											<option value="programming">Introduction to Programming</option>
											<option value="complexity">Complexity Theory</option>
											<option value="software">Software Engineering</option>
										</optgroup>
									</select>
								</div>
								<!-- /option groups support -->


								<!-- Options with and without groups -->
								<div class="form-group">
									<label>Options with and without groups</label>
									<select class="form-control multiselect" multiple="multiple" data-fouc>
										<option value="lab">Lab Course</option>
										<option value="proseminar">Proseminar</option>
										<optgroup label="Mathematics">
											<option value="analysis">Analysis</option>
											<option value="algebra">Linear Algebra</option>
											<option value="probability">Probability Theory</option>
										</optgroup>
										<optgroup label="Computer Science">
											<option value="programming">Introduction to Programming</option>
											<option value="automata">Automata Theory</option>
											<option value="software">Software Engineering</option>
										</optgroup>
									</select>
								</div>
								<!-- /options with and without groups -->


								<!-- Dropdown with max height -->
								<div class="form-group">
									<label>Dropdown with max height</label>
									<select class="form-control multiselect-max-height" multiple="multiple" data-fouc>
										<optgroup label="Mathematics">
											<option value="analysis">Analysis</option>
											<option value="algebra">Linear Algebra</option>
											<option value="discrete">Discrete Mathematics</option>
										</optgroup>
										<optgroup label="Computer Science">
											<option value="programming">Introduction to Programming</option>
											<option value="complexity">Complexity Theory</option>
											<option value="software">Software Engineering</option>
										</optgroup>
									</select>
								</div>
								<!-- /dropdown with max height -->


								<!-- Select All option -->
								<div class="form-group">
									<label>With <span class="font-weight-semibold">Select all</span> option</label>
									<select class="form-control multiselect-select-all" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /select All option -->


								<!-- Select All option selected -->
								<div class="form-group">
									<label>Select all option response</label>
									<select class="form-control multiselect-select-all" multiple="multiple" data-fouc>
										<option value="cheese" selected>Cheese</option>
										<option value="tomatoes" selected>Tomatoes</option>
										<option value="mozarella" selected>Mozzarella</option>
										<option value="mushrooms" selected>Mushrooms</option>
									</select>
								</div>
								<!-- /select All option selected -->


								<!-- Filtering options -->
								<div class="form-group">
									<label><span class="font-weight-semibold">Filtering</span> option</label>
									<select class="form-control multiselect-filtering" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /filtering options -->


								<!-- Select All and filtering options -->
								<div class="form-group">
									<label><span class="font-weight-semibold">Select All</span> and <span class="font-weight-semibold">Filtering</span> options</label>
									<select class="form-control multiselect-select-all-filtering" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /select All and filtering options -->


								<!-- Optgroups, filtering and select all -->
								<div class="form-group">
									<label>Full featured example</label>
									<select class="form-control multiselect-full-featured" multiple="multiple" data-fouc>
										<option value="lab">Lab Course</option>
										<option value="proseminar">Proseminar</option>
										<optgroup label="Mathematics">
											<option value="analysis">Analysis</option>
											<option value="algebra">Linear Algebra</option>
											<option value="probability">Probability Theory</option>
										</optgroup>
										<optgroup label="Computer Science">
											<option value="programming">Introduction to Programming</option>
											<option value="complexity">Complexity Theory</option>
											<option value="software">Software Engineering</option>
										</optgroup>
									</select>
								</div>
								<!-- /optgroups, filtering and select all -->


								<!-- Disabled select -->
								<div class="form-group">
									<label>Disabled select</label>
									<select class="form-control multiselect" multiple="multiple" disabled data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /disabled select -->


								<!-- Disabled options -->
								<div class="form-group">
									<label>Disabled options</label>
									<select class="form-control multiselect" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes" disabled selected>Tomatoes</option>
										<option value="mozarella" disabled>Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /disabled options -->


								<!-- Disabled optgroups -->
								<div class="form-group">
									<label>Disabled optgroups</label>
									<select class="form-control multiselect" multiple="multiple" data-fouc>
										<optgroup label="Mathematics" disabled>
											<option value="analysis">Analysis</option>
											<option value="algebra">Linear Algebra</option>
											<option value="probability">Probability Theory</option>
										</optgroup>
										<optgroup label="Computer Science">
											<option value="programming">Introduction to Programming</option>
											<option value="complexity">Complexity Theory</option>
											<option value="software">Software Engineering</option>
										</optgroup>
									</select>
								</div>
								<!-- /disabled optgroups -->


								<!-- Prevent deselect -->
								<div class="form-group">
									<label>Prevent deselect</label>
									<select class="form-control multiselect-prevent-deselect" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /prevent deselect -->

							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Advanced usage</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Within a group with addon -->
								<div class="form-group">
									<label>Within a group with addon</label>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text">
												<i class="icon-android"></i>
											</span>
										</span>

										<select class="form-control multiselect" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
										</select>
									</div>									
								</div>
								<!-- /within a group with addon -->


								<!-- Within a group with button -->
								<div class="form-group">
									<label>Within a group with button</label>
									<div class="input-group">
										<span class="input-group-prepend">
											<button class="btn btn-light" type="button">Action</button>
										</span>
										<select class="form-control multiselect" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
										</select>
									</div>									
								</div>
								<!-- /within a group with button -->


								<!-- Within a group with button dropdown -->
								<div class="form-group">
									<label>Within a group with button dropdown</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Action</button>
	                                        <div class="dropdown-menu">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">One more separated line</a>
											</div>
										</div>

										<select class="form-control multiselect" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
										</select>
									</div>									
								</div>
								<!-- /within a group with button dropdown -->


								<!-- Within a group with segmented button dropdown -->
								<div class="form-group">
									<label>Within a group with segmented button dropdown</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<button type="button" class="btn btn-light">Action</button>
											<button type="button" class="btn btn-light btn-icon dropdown-toggle" data-toggle="dropdown"></button>
	                                        <div class="dropdown-menu">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">One more separated line</a>
											</div>
										</div>

										<select class="form-control multiselect" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
										</select>
									</div>									
								</div>
								<!-- /within a group with segmented button dropdown -->


								<!-- Within a group with checkbox -->
								<div class="form-group">
									<label>Within a group with checkbox</label>
									<div class="input-group">
										<span class="input-group-prepend">
											<div class="input-group-text">
												<input type="checkbox" class="form-control-styled" checked data-fouc>
											</div>
										</span>

										<select class="form-control multiselect" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
										</select>
									</div>									
								</div>
								<!-- /within a group with checkbox -->


								<!-- Within a group with radio -->
								<div class="form-group">
									<label>Within a group with radio</label>
									<div class="input-group">
										<span class="input-group-prepend">
											<div class="input-group-text">
												<input type="radio" class="form-control-styled" name="input-addon-radio" checked data-fouc>
											</div>
										</span>

										<select class="form-control multiselect" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
										</select>
									</div>									
								</div>
								<!-- /within a group with radio -->


								<!-- Remove active option class -->
								<div class="form-group">
									<label>Remove active option class</label>
									<select class="form-control multiselect-no-active-class" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes" selected>Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /remove active option class -->


								<!-- Alternative labels for options -->
								<div class="form-group">
									<label>Alternative labels for options</label>
									<select class="form-control multiselect" multiple="multiple" data-fouc>
										<option value="analysis" label="An (Analysis)">Analysis</option>
										<option value="algebra" label="LA (Linear Algebra)">Linear Algebra</option>
										<option value="discrete" label="Discrete (Mathematics)">Discrete Mathematics</option>
									</select>
								</div>
								<!-- /alternative labels for options -->


								<!-- Limit options number -->
								<div class="form-group">
									<label>Limit options number</label>
									<select class="form-control multiselect-number" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /limit options number -->


								<!-- Custom empty text -->
								<div class="form-group">
									<label>Custom empty text</label>
									<select class="form-control multiselect-nonselected-text" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /custom empty -->


								<!-- As a link -->
								<div class="form-group">
									<label>As a link</label>
									<select class="form-control multiselect-link" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /as a link -->


								<!-- onChange notice -->
								<div class="form-group">
									<label>onChange notice</label>
									<select class="form-control multiselect-onchange-notice" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /onChange notice -->


								<!-- onChange desktop notification -->
								<div class="form-group">
									<label>onChange desktop notification</label>
									<select class="form-control multiselect-onchange-desktop" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /onChange desktop notification -->


								<!-- onDropdownShow event -->
								<div class="form-group">
									<label>onDropdownShow event</label>
									<select class="form-control multiselect-show-event" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /onDropdownShow event -->


								<!-- onDropdownHide event -->
								<div class="form-group">
									<label>onDropdownHide event</label>
									<select class="form-control multiselect-hide-event" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /onDropdownHide event -->									

							</div>
						</div>
					</div>
				</div>
				<!-- /multiselect examples -->


				<!-- Sizing options -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Sizing options
					</h6>
					<span class="text-muted d-block">Width and height sizing</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Width sizing</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Full width -->
								<div class="form-group">
									<label>Full width button (default)</label>
									<select class="form-control multiselect" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
									</select>
								</div>
								<!-- /full width -->


								<!-- Fixed width -->
								<div class="form-group">
									<label>Fixed width</label>
									<select class="form-control multiselect" multiple="multiple" data-button-width="250" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
									</select>
								</div>
								<!-- /fixed width -->


								<!-- Auto width -->
								<div class="form-group">
									<label>Auto width button (default)</label>
									<select class="form-control multiselect" multiple="multiple" data-button-width="auto" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
									</select>
								</div>
								<!-- /auto width -->

							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Height sizing</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Large button -->
								<div class="form-group">
									<label>Large select</label>
									<select class="form-control form-control-lg multiselect" multiple="multiple" data-button-class="btn btn-light btn-lg" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
									</select>
								</div>
								<!-- /large button -->


								<!-- Default button -->
								<div class="form-group">
									<label>Default select</label>
									<select class="form-control multiselect" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
									</select>
								</div>
								<!-- /default button -->


								<!-- Small button -->
								<div class="form-group">
									<label>Small select</label>
									<select class="form-control form-control-sm multiselect" multiple="multiple" data-button-class="btn btn-light btn-sm" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
									</select>
								</div>
								<!-- /small button -->

							</div>
						</div>
					</div>
				</div>
				<!-- /sizing options -->


				<!-- More complex examples -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Advanced examples
					</h6>
					<span class="text-muted d-block">More complex multiselect examples</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Further examples</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Single select -->
								<div class="mb-4">
									<h6 class="font-weight-semibold">Single select</h6>
									<p class="mb-3">When using the plugin for single selections (without the <code>multiple</code> attribute), the first option will automatically be selected if no other option is selected in advance.</p>

									<select class="form-control multiselect" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
									</select>
								</div>
								<!-- /single select -->


								<!-- Clickable optgroups -->
								<div class="mb-4">
									<h6 class="font-weight-semibold">Clickable optgroups</h6>
									<p class="mb-3">If <code>enableClickableOptGroups</code> option is set to <code>true</code>, optgroup's will be clickable, allowing to easily select multiple options belonging to the same group.</p>

									<select class="form-control multiselect-clickable-groups" multiple="multiple" data-fouc>
										<optgroup label="Mathematics">
											<option value="analysis">Analysis</option>
											<option value="algebra">Linear Algebra</option>
											<option value="discrete">Discrete Mathematics</option>
										</optgroup>
										<optgroup label="Computer Science">
											<option value="programming">Introduction to Programming</option>
											<option value="complexity">Complexity Theory</option>
											<option value="software">Software Engineering</option>
										</optgroup>
										<optgroup label="Physics">
											<option value="mechanics">Classical Mechanics</option>
											<option value="magnetism">Electromagnetism</option>
											<option value="quantum">Quantum Mechanics</option>
										</optgroup>
									</select>
								</div>
								<!-- /clickable optgroups -->


								<!-- Disable if empty -->
								<div class="mb-4">
									<h6 class="font-weight-semibold">Disable if no options are given</h6>
									<p class="mb-3">Set <code>disableIfEmpty</code> option to <code>true</code> to disable select if it has no options. Useful in chained selects or select with dynamic data.</p>

									<select class="form-control multiselect-disable-empty" multiple="multiple" data-fouc></select>
								</div>
								<!-- /disable if empty -->


								<!-- Showing values -->
								<div class="mb-4">
									<h6 class="font-weight-semibold">Showing values</h6>
									<p class="mb-3">Use "Select" and "Deselect" buttons to select or deselect cheese and tomatoes. Display selected or deselected options by using <code>$('.multiselect').val()</code> method.</p>

									<div class="input-group">
										<select class="form-control multiselect-display-values" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
											<option value="pepperoni">Pepperoni</option>
											<option value="onions">Onions</option>
										</select>

										<div class="input-group-append">
											<button type="button" class="btn btn-light multiselect-display-values-select">Select</button>
											<button type="button" class="btn btn-light multiselect-display-values-deselect">Deselect</button>
										</div>
									</div>

									<div class="values-area mt-2"></div>
								</div>
								<!-- /showing values -->


								<!-- Order options -->
								<div class="mb-4">
									<h6 class="font-weight-semibold">Order options</h6>
									<p class="mb-3">Record the order the options are selected. When selecting an item an ordering number will be incremented and saved within the option.</p>

									<div class="input-group">
										<select class="form-control multiselect-order-options" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
											<option value="pepperoni">Pepperoni</option>
											<option value="onions">Onions</option>
										</select>

										<div class="input-group-append">
											<button type="button" class="btn bg-blue multiselect-order-options-button">Order</button>
										</div>
									</div>
								</div>
								<!-- /order options -->


								<!-- Simulate selections -->
								<div class="mb-4">
									<h6 class="font-weight-semibold">Simulate selections</h6>
									<p class="mb-3">Simulate single selections using checkboxes. The behavior will be similar to a multiselect with radio buttons.</p>

									<select class="form-control multiselect-simulate-selections" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
								</div>
								<!-- /simulate selections -->


								<!-- Close dropdown automatically -->
								<div class="mb-4">
									<h6 class="font-weight-semibold">Close dropdown automatically</h6>
									<p class="mb-3">Close dropdown after 3 selections automatically.</p>

									<select class="form-control multiselect-close-dropdown" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
								</div>
								<!-- /close dropdown automatically -->


								<!-- Reset button -->
								<div class="mb-4">
									<h6 class="font-weight-semibold">Reset button</h6>
									<p class="mb-3">Using a reset button together with a multiselect. Select options then click Reset button to reset selections.</p>

									<form class="input-group" id="multiselect-reset-form">
										<select class="form-control multiselect-reset" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
											<option value="pepperoni">Pepperoni</option>
											<option value="onions">Onions</option>
										</select>

										<div class="input-group-append">
											<button type="reset" class="btn bg-blue">Reset</button>
										</div>
									</form>
								</div>
								<!-- /reset button -->


								<!-- Templates -->
								<div class="mb-3">
									<h6 class="font-weight-semibold">Multiselect templates</h6>
									<p class="mb-3">The templates can be overriden using the <code>templates</code> configuration option. The example below uses a <code>red</code> border color for dividers.</p>

									<select class="form-control multiselect-templates" multiple="multiple" data-fouc>
										<option value="cheese">Cheese</option>
										<option value="tomatoes">Tomatoes</option>
										<option data-role="divider"></option>
										<option value="mozarella">Mozzarella</option>
										<option value="mushrooms">Mushrooms</option>
										<option data-role="divider"></option>
										<option value="pepperoni">Pepperoni</option>
										<option value="onions">Onions</option>
									</select>
								</div>
								<!-- /templates -->

							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Multiselect methods</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Toggle selection -->
								<div class="mb-4">
									<h6 class="font-weight-semibold">Toggle selection</h6>
									<p class="mb-3">Use the button to toggle the selection. Don't forget to include <code>$.uniform.update();</code> to update checkboxes or radios state dynamically.</p>
									<div class="input-group">
										<select class="form-control multiselect-toggle-selection" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
											<option value="pepperoni">Pepperoni</option>
											<option value="onions">Onions</option>
										</select>

										<div class="input-group-append">
											<button type="button" class="btn btn-light multiselect-toggle-selection-button">Select All</button>
										</div>
									</div>
								</div>
								<!-- /toggle selection -->


								<!-- Destroy method -->
								<div class="mb-4">
									<h6 class="font-weight-semibold">Destroy method</h6>
									<p class="mb-3">This method is used to destroy the plugin on the given element - meaning unbinding the plugin.</p>

									<div class="input-group">
										<select class="form-control multiselect-method-destroy" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
											<option value="pepperoni">Pepperoni</option>
											<option value="onions">Onions</option>
										</select>

										<div class="input-group-append">
											<button type="button" class="btn btn-light multiselect-create-button">Create</button>
											<button type="button" class="btn bg-danger multiselect-destroy-button">Destroy</button>
										</div>
									</div>
								</div>
								<!-- /destroy method -->


								<!-- Refresh method -->
								<div class="mb-4">
									<h6 class="font-weight-semibold">Refresh method</h6>
									<p class="mb-3">This method is used to refresh the checked checkboxes based on the currently selected options within the select. Click <strong>'Select'</strong>, then click <strong>refresh</strong>. The plugin will update the checkboxes.</p>

									<div class="input-group">
										<select class="form-control multiselect-method-refresh" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
											<option value="pepperoni">Pepperoni</option>
											<option value="onions">Onions</option>
										</select>

										<div class="input-group-append">
											<button type="button" class="btn btn-light multiselect-select-button">Select</button>
											<button type="button" class="btn btn-light multiselect-deselect-button">Deselect</button>
											<button type="button" class="btn bg-blue btn-icon multiselect-refresh-button"><i class="icon-reload-alt"></i></button>
										</div>
									</div>
								</div>
								<!-- /refresh method -->


								<!-- Rebuild method -->
								<div class="mb-4">
									<h6 class="font-weight-semibold">Rebuild method</h6>
									<p class="mb-3">Rebuilds the whole dropdown menu. All selected options will remain selected (if still existent!). Click <strong>Add</strong> button and then click <strong>Rebuild</strong> button, open dropdown and you'll notice new options added to the bottom of the list.</p>

									<div class="input-group">
										<select class="form-control multiselect-method-rebuild" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
											<option value="pepperoni">Pepperoni</option>
											<option value="onions">Onions</option>
										</select>

										<div class="input-group-append">
											<button type="button" class="btn btn-light multiselect-add-button">Add</button>
											<button type="button" class="btn btn-light multiselect-delete-button">Delete</button>
											<button type="button" class="btn bg-blue btn-icon multiselect-rebuild-button"><i class="icon-reload-alt"></i></button>
										</div>
									</div>
								</div>
								<!-- /rebuild method -->


								<!-- Select method -->
								<div class="mb-4">
									<h6 class="font-weight-semibold">Select method</h6>
									<p class="mb-3">Selects an option by its value (which has to be given as string). Works also using an array of values.</p>

									<div class="input-group">
										<select class="form-control multiselect-method-select" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
											<option value="pepperoni">Pepperoni</option>
											<option value="onions">Onions</option>
										</select>

										<div class="input-group-append">
											<button type="button" class="btn btn-light multiselect-select-cheese-button">Cheese</button>
											<button type="button" class="btn btn-light multiselect-select-onions-button">Onions</button>
										</div>
									</div>
								</div>
								<!-- /select method -->


								<!-- Deselect method -->
								<div class="mb-4">
									<h6 class="font-weight-semibold">Deselect method</h6>
									<p class="mb-3">Deselect an option by its value (which has to be given as string). Works also using an array of values.</p>

									<div class="input-group">
										<select class="form-control multiselect-method-deselect" multiple="multiple" data-fouc>
											<option value="cheese" selected>Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
											<option value="pepperoni">Pepperoni</option>
											<option value="onions" selected>Onions</option>
										</select>

										<div class="input-group-append">
											<button type="button" class="btn btn-light multiselect-deselect-cheese-button">Deselect Cheese</button>
											<button type="button" class="btn btn-light multiselect-deselect-onions-button">Deselect Onions</button>
										</div>
									</div>
								</div>
								<!-- /deselect method -->


								<!-- Disable method -->
								<div class="mb-4">
									<h6 class="font-weight-semibold">Disable method</h6>
									<p class="mb-3">Disable both the underlying select and the dropdown button.</p>

									<div class="input-group">
										<select class="form-control multiselect-method-disable" multiple="multiple" data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
											<option value="pepperoni">Pepperoni</option>
											<option value="onions">Onions</option>
										</select>

										<div class="input-group-append">
											<button type="button" class="btn bg-danger multiselect-disable1-button">Disable</button>
											<button type="button" class="btn btn-light multiselect-enable1-button">Enable</button>
										</div>
									</div>
								</div>
								<!-- /disable method -->


								<!-- Enable method -->
								<div class="mb-3">
									<h6 class="font-weight-semibold">Enable method</h6>
									<p class="mb-3">Enable both the underlying select and the dropdown button.</p>

									<div class="input-group">
										<select class="form-control multiselect-method-enable" multiple="multiple" disabled data-fouc>
											<option value="cheese">Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
											<option value="pepperoni">Pepperoni</option>
											<option value="onions">Onions</option>
										</select>

										<div class="input-group-append">
											<button type="button" class="btn bg-blue multiselect-enable2-button">Enable</button>
											<button type="button" class="btn btn-light multiselect-disable2-button">Disable</button>
										</div>
									</div>
								</div>
								<!-- /enable method -->

							</div>
						</div>
					</div>
				</div>
				<!-- /more complex examples -->

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
