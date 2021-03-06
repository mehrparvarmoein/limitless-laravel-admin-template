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
	<script src="../../../../global_assets/js/plugins/forms/inputs/duallistbox/duallistbox_rtl.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_dual_listboxes.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Forms</span> - Dual Listboxes</h4>
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
							<a href="form_dual_listboxes" class="breadcrumb-item">Forms</a>
							<span class="breadcrumb-item active">Dual listboxes</span>
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

				<!-- Basic example -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Basic example</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The dual listbox is created from a select multiple by calling <code>.bootstrapDualListbox(settings);</code> on a selector. The selector can be any element, not just selects. When the method is called on a selector other than a select, then all select childrens are converted into dual list boxes. This example demonstrates <code>single</code> option selection.</p>
						
						<select multiple="multiple" class="form-control listbox" data-fouc>
							<option value="option1" selected>Classical mechanics</option>
							<option value="option2">Electromagnetism</option>
							<option value="option4">Relativity</option>
							<option value="option5" selected>Quantum mechanics</option>
							<option value="option7">Astrophysics</option>
							<option value="option8" selected>Biophysics</option>
							<option value="option9">Chemical physics</option>
							<option value="option10">Econophysics</option>
							<option value="option11">Geophysics</option>
							<option value="option12">Medical physics</option>
							<option value="option13">Physical chemistry</option>
							<option value="option14" selected>Continuum mechanics</option>
							<option value="option15">Electrodynamics</option>
							<option value="option16" selected>Quantum field theory</option>
							<option value="option17">Scattering theory</option>
							<option value="option18" selected>Chaos theory</option>
							<option value="option19" selected>Newton's laws of motion</option>
							<option value="option20">Thermodynamics</option>
						</select>
					</div>
				</div>
				<!-- /basic example -->


				<!-- Multiple selection -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Multiple selection</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Multiple selection example. By default, only single selection is allowed: once you click on the option, it automatically moves to another box. To disable single selection and turn on multiple, set <code>moveOnSelect</code> option to <code>false</code> in plugin configuration. Defaults to <code>true</code> and this option is forced to <code>true</code> on the Android browser.</p>
						
						<select multiple="multiple" class="form-control listbox-no-selection" data-fouc>
							<option value="option1" selected>Classical mechanics</option>
							<option value="option2">Electromagnetism</option>
							<option value="option4">Relativity</option>
							<option value="option5" selected>Quantum mechanics</option>
							<option value="option7">Astrophysics</option>
							<option value="option8" selected>Biophysics</option>
							<option value="option9">Chemical physics</option>
							<option value="option10">Econophysics</option>
							<option value="option11">Geophysics</option>
							<option value="option12">Medical physics</option>
							<option value="option13">Physical chemistry</option>
							<option value="option14" selected>Continuum mechanics</option>
							<option value="option15">Electrodynamics</option>
							<option value="option16" selected>Quantum field theory</option>
							<option value="option17">Scattering theory</option>
							<option value="option18" selected>Chaos theory</option>
							<option value="option19" selected>Newton's laws of motion</option>
							<option value="option20">Thermodynamics</option>
						</select>
					</div>
				</div>
				<!-- /multiple selection -->


				<!-- Filtered results -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Filtered results</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The following example demonstrates initialization of the dual listbox with a filter for the non selected elements, currently from 7 to 12. This can be applied only if <code>showFilterInputs</code> is set to <code>true</code>. Using <code>selectedFilter</code> option, listbox will filter selected elements only. You can use "Display all" button as a filter reset.</p>
						
						<select multiple="multiple" class="form-control listbox-filtered-results" data-fouc>
							<option value="option1">Classical mechanics</option>
							<option value="option2" selected>Electromagnetism</option>
							<option value="option3">Relativity</option>
							<option value="option4">Quantum mechanics</option>
							<option value="option5">Astrophysics</option>
							<option value="option6">Biophysics</option>
							<option value="option7">Chemical physics</option>
							<option value="option8">Econophysics</option>
							<option value="option9">Geophysics</option>
							<option value="option10">Medical physics</option>
							<option value="option11">Physical chemistry</option>
							<option value="option12" selected>Continuum mechanics</option>
							<option value="option13">Electrodynamics</option>
							<option value="option14">Quantum field theory</option>
							<option value="option15">Scattering theory</option>
							<option value="option16">Chaos theory</option>
							<option value="option17">Newton's laws of motion</option>
							<option value="option18">Thermodynamics</option>
						</select>
					</div>
				</div>
				<!-- /filtered results -->


				<!-- Disable filter -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Disable filter</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The following example demonstrates listbox with disabled filter input. By default, filter input field is always visible, unless <code>showFilterInputs</code> option is set to <code>false</code>. Please note: if false, all additional filter options such as filtered results will be disabled, but all plugin options related to selects will remain available.</p>
						
						<select multiple="multiple" class="form-control listbox-filter-disabled" data-fouc>
							<option value="option1" selected>Classical mechanics</option>
							<option value="option2">Electromagnetism</option>
							<option value="option4">Relativity</option>
							<option value="option5" selected>Quantum mechanics</option>
							<option value="option7">Astrophysics</option>
							<option value="option8" selected>Biophysics</option>
							<option value="option9">Chemical physics</option>
							<option value="option10">Econophysics</option>
							<option value="option11">Geophysics</option>
							<option value="option12">Medical physics</option>
							<option value="option13">Physical chemistry</option>
							<option value="option14" selected>Continuum mechanics</option>
							<option value="option15">Electrodynamics</option>
							<option value="option16" selected>Quantum field theory</option>
							<option value="option17">Scattering theory</option>
							<option value="option18" selected>Chaos theory</option>
							<option value="option19" selected>Newton's laws of motion</option>
							<option value="option20">Thermodynamics</option>
						</select>
					</div>
				</div>
				<!-- /disable filter -->


				<!-- Control boxes height -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Control boxes height</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This example demonstrates ability to change the minimal height of the generated dual listbox. Default listbox height is <code>200px</code>, in this example the height is increased up to <code>300px</code> using <code>selectorMinimalHeight</code> option. This value is applied to the list itself, but not to the whole container with other elements.</p>
						
						<select multiple="multiple" class="form-control listbox-tall" data-fouc>
							<option value="option1" selected>Classical mechanics</option>
							<option value="option2">Electromagnetism</option>
							<option value="option4">Relativity</option>
							<option value="option5" selected>Quantum mechanics</option>
							<option value="option7">Astrophysics</option>
							<option value="option8" selected>Biophysics</option>
							<option value="option9">Chemical physics</option>
							<option value="option10">Econophysics</option>
							<option value="option11">Geophysics</option>
							<option value="option12">Medical physics</option>
							<option value="option13">Physical chemistry</option>
							<option value="option14" selected>Continuum mechanics</option>
							<option value="option15">Electrodynamics</option>
							<option value="option16" selected>Quantum field theory</option>
							<option value="option17">Scattering theory</option>
							<option value="option18" selected>Chaos theory</option>
							<option value="option19" selected>Newton's laws of motion</option>
							<option value="option20">Thermodynamics</option>
						</select>
					</div>
				</div>
				<!-- /control boxes height -->


				<!-- Custom text support -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Custom text support</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This example demonstrates how custom text or language can be used in dual listbox controls. All these text labels and placeholders are fully editable through specified options, such as: <code>infoText</code>, <code>infoTextFiltered</code>, <code>infoTextEmpty</code>, <code>filterPlaceHolder</code> etc.</p>
						
						<select multiple="multiple" class="form-control listbox-custom-text" data-fouc>
							<option value="option1" selected>Classical mechanics</option>
							<option value="option2">Electromagnetism</option>
							<option value="option4">Relativity</option>
							<option value="option5" selected>Quantum mechanics</option>
							<option value="option7">Astrophysics</option>
							<option value="option8" selected>Biophysics</option>
							<option value="option9">Chemical physics</option>
							<option value="option10">Econophysics</option>
							<option value="option11">Geophysics</option>
							<option value="option12">Medical physics</option>
							<option value="option13">Physical chemistry</option>
							<option value="option14" selected>Continuum mechanics</option>
							<option value="option15">Electrodynamics</option>
							<option value="option16" selected>Quantum field theory</option>
							<option value="option17">Scattering theory</option>
							<option value="option18" selected>Chaos theory</option>
							<option value="option19" selected>Newton's laws of motion</option>
							<option value="option20">Thermodynamics</option>
						</select>
					</div>
				</div>
				<!-- /custom text support -->


				<!-- Add options dynamically -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Adding options dynamically</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The options must be added to/removed from the original select. Note that the <code>bootstrapDualListbox.refresh</code> event must be triggered on it after manipulating the options. If there are some highlighted options in the lists, then triggering the <code>bootstrapDualListbox.refresh</code> event with the optional <code>true</code> parameter results the highlights to be removed.</p>
						
						<div class="mb-3">
							<select multiple="multiple" class="form-control listbox-dynamic-options" data-fouc>
								<option value="option1" selected>Classical mechanics</option>
								<option value="option2">Electromagnetism</option>
								<option value="option4">Relativity</option>
								<option value="option5" selected>Quantum mechanics</option>
								<option value="option7">Astrophysics</option>
								<option value="option8" selected>Biophysics</option>
								<option value="option9">Chemical physics</option>
								<option value="option10">Econophysics</option>
								<option value="option11">Geophysics</option>
								<option value="option12">Medical physics</option>
								<option value="option13">Physical chemistry</option>
								<option value="option14" selected>Continuum mechanics</option>
								<option value="option15">Electrodynamics</option>
								<option value="option16" selected>Quantum field theory</option>
								<option value="option17">Scattering theory</option>
								<option value="option18" selected>Chaos theory</option>
								<option value="option19" selected>Newton's laws of motion</option>
								<option value="option20">Thermodynamics</option>
							</select>
						</div>

						<button type="button" class="btn btn-primary listbox-add">Add options</button>
						<button type="button" class="btn btn-primary listbox-add-clear">Add with clearing highlights</button>
					</div>
				</div>
				<!-- /add options dynamically -->

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
