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
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="../../../../global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
	<script src="../../../../global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
	<script src="../../../../global_assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/contextmenu.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/table_elements.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Tables</span> - Elements</h4>
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
							<a href="table_elements" class="breadcrumb-item">Tables</a>
							<span class="breadcrumb-item active">Elements</span>
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

				<!-- Table components -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Table components</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Table below contains different examples of components that can be used in the table: form components, interface components, buttons, list of actions etc. All of them are adapted for different cases, such as multiple elements in the same table cell. These components support all available sizes and styles. Charts are also supported, but in certain sizes.
					</div>

					<div class="table-responsive">
						<table class="table table-bordered table-lg">
							<tbody>
								<tr class="table-active">
									<th colspan="3">Control buttons and icons</th>
								</tr>
								<tr>
									<td class="wmin-md-300">Control links</td>
									<td class="wmin-md-350">
										<div class="list-icons">
					                		<a href="#" class="list-icons-item"><i class="icon-pencil7"></i></a>
					                		<a href="#" class="list-icons-item"><i class="icon-trash"></i></a>
					                		<a href="#" class="list-icons-item"><i class="icon-cog6"></i></a>
					                	</div>
									</td>
									<td>Basic table row control buttons. These links appear as a list of links with icons</td>
								</tr>
								<tr>
									<td>Colored links</td>
									<td>
										<div class="list-icons">
					                		<a href="#" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
					                		<a href="#" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
					                		<a href="#" class="list-icons-item text-teal-600"><i class="icon-cog6"></i></a>
					                	</div>
									</td>
									<td>Control links support different colors: default Bootstrap contextual colors and custom text colors from the custom color system. To use these colors add <code>.text-*</code> class to the parent <code>&lt;li></code> element</td>
								</tr>
								<tr>
									<td>Links with tooltip</td>
									<td>
										<div class="list-icons">
					                		<a href="#" class="list-icons-item" data-popup="tooltip" title="Edit" data-container="body">
					                			<i class="icon-pencil7"></i>
				                			</a>
					                		<a href="#" class="list-icons-item" data-popup="tooltip" title="Remove" data-container="body">
					                			<i class="icon-trash"></i>
				                			</a>
					                		<a href="#" class="list-icons-item" data-popup="tooltip" title="Options" data-container="body">
					                			<i class="icon-cog6"></i>
				                			</a>
					                	</div>
									</td>
									<td>Table row control links with default Bootstrap tooltip triggered on <code>hover</code></td>
								</tr>
								<tr>
									<td>Links with modals</td>
									<td>
										<div class="list-icons">
					                		<a href="#" class="list-icons-item" data-toggle="modal" data-target="#edit_modal">
					                			<i class="icon-pencil7"></i>
				                			</a>
					                		<a href="#" class="list-icons-item" data-toggle="modal" data-target="#remove_modal">
					                			<i class="icon-trash"></i>
				                			</a>
					                		<a href="#" class="list-icons-item" data-toggle="modal" data-target="#options_modal">
					                			<i class="icon-cog6"></i>
				                			</a>
					                	</div>
									</td>
									<td>These control links launch <code>modals</code> with table row options. Click each icon to see it in action</td>
								</tr>
								<tr>
									<td>Links with dropdown</td>
									<td>
										<div class="list-icons">
					                		<a href="#" class="list-icons-item"><i class="icon-pencil7"></i></a>
					                		<a href="#" class="list-icons-item"><i class="icon-trash"></i></a>
					                		<div class="dropdown">
						                		<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog6"></i></a>

												<div class="dropdown-menu">
													<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to PDF</a>
													<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to CSV</a>
													<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to DOC</a>
												</div>
				                			</div>
					                	</div>
									</td>
									<td>Control links with optional <code>dropdown</code> menu appended to one of the links</td>
								</tr>
								<tr>
									<td>Options dropdown</td>
									<td>
										<div class="list-icons">
											<div class="dropdown">
						                		<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog6"></i></a>

												<div class="dropdown-menu">
													<div class="dropdown-header">Options</div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i>Edit entry</a>
													<a href="#" class="dropdown-item"><i class="icon-bin"></i>Remove entry</a>
													<div class="dropdown-header">Export</div>
													<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
													<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
													<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
												</div>
					                		</div>
					                	</div>
									</td>
									<td>Here all table row controls are moved to one <code>general dropdown</code> menu, that is appended to 1 link</td>
								</tr>
								<tr>
									<td>Links with text</td>
									<td>
										<ul class="list-inline mb-0">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle text-default" data-toggle="dropdown">Options</a>

												<ul class="dropdown-menu">
													<div class="dropdown-header">Options</div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i>Edit entry</a>
													<a href="#" class="dropdown-item"><i class="icon-bin"></i>Remove entry</a>
													<div class="dropdown-header">Export</div>
													<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
													<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
													<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
												</ul>
											</li>
					                	</ul>
									</td>
									<td>Control link with text and icon. Text can be placed <code>before</code> icon or <code>after</code> it. Optional <code>.mr-2</code> class adds extra right margin to the icon</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">Badges</th>
								</tr>
								<tr>
									<td>Badge</td>
									<td>
										<span class="badge badge-danger">In progress</span>
										<span class="badge badge-flat border-success text-success-600 ml-2">Done</span>
									</td>
									<td>Basic Bootstrap <code>badge</code>. Supports default contextual colors and custom colors from the color system</td>
								</tr>
								<tr>
									<td>Badge pill</td>
									<td>
										<span class="badge badge-primary badge-pill">92</span>
										<span class="badge badge-flat border-danger text-danger-600 badge-pill ml-2">190</span>
									</td>
									<td>Basic Bootstrap <code>badge pill</code> - badges with rounded corners</td>
								</tr>
								<tr>
									<td>Linked badge</td>
									<td>
										<a href="#" class="badge badge-warning">Click me</a>
									</td>
									<td>Liked badge. To use label as a link, add <code>.badge</code> class to the link element</td>
								</tr>
								<tr>
									<td>Linked badge pill</td>
									<td>
										<a href="#" class="badge bg-dark badge-pill">59</a>
									</td>
									<td>Liked badge pill. To use badge as a link, add <code>.badge-pill</code> class to the link element</td>
								</tr>
								<tr>
									<td>Badge with dropdown</td>
									<td>
										<div class="dropdown">
											<a href="#" class="badge bg-teal dropdown-toggle" data-toggle="dropdown">Priority</a>

											<ul class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">
													<span class="badge badge-mark bg-danger border-danger align-self-center mr-2"></span>
													High priority
												</a>
												<a href="#" class="dropdown-item">
													<span class="badge badge-mark bg-info border-info align-self-center mr-2"></span>
													Normal priority
												</a>
												<a href="#" class="dropdown-item">
													<span class="badge badge-mark bg-primary border-primary align-self-center mr-2"></span>
													Low priority
												</a>
											</ul>
										</div>
									</td>
									<td>Badge with dropdown menu</td>
								</tr>
								<tr>
									<td>Badge pill with dropdown</td>
									<td>
										<div class="dropdown">
											<a href="#" class="badge bg-indigo-400 badge-pill dropdown-toggle" data-toggle="dropdown">50%</a>

											<div class="dropdown-menu">
												<a href="#" class="dropdown-item"><i class="icon-arrow-up12 text-success"></i> Increase to 100%</a>
												<a href="#" class="dropdown-item"><i class="icon-arrow-up12 text-success"></i> Increase to 90%</a>
												<a href="#" class="dropdown-item"><i class="icon-arrow-up12 text-success"></i> Increase to 70%</a>
												<a href="#" class="dropdown-item"><i class="icon-arrow-down12 text-danger"></i> Decrease to 30%</a>
												<a href="#" class="dropdown-item"><i class="icon-arrow-down12 text-danger"></i> Decrease to 10%</a>
												<a href="#" class="dropdown-item"><i class="icon-arrow-down12 text-danger"></i> Decrease to 0%</a>
											</div>
										</div>
									</td>
									<td>Badge pill with dropdown menu</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">Styled checkboxes</th>
								</tr>
								<tr>
									<td>Styled checkbox</td>
									<td>
										<input type="checkbox" class="form-input-styled" checked data-fouc>
									</td>
									<td>Single styled checkbox without label. Does not require <code>.form-check</code> wrapper</td>
								</tr>
								<tr>
									<td>Left position</td>
									<td>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" checked data-fouc>
												Left styled checkbox
											</label>
										</div>
									</td>
									<td>Styled checkbox with label, <code>left</code> position</td>
								</tr>
								<tr>
									<td>Right position</td>
									<td>
										<div class="form-check form-check-inline form-check-right">
											<label class="form-check-label">
												Right styled checkbox
												<input type="checkbox" class="form-input-styled" checked data-fouc>
											</label>
										</div>
									</td>
									<td>Styled checkbox with label, <code>right</code> position</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">Styled radios</th>
								</tr>
								<tr>
									<td>Styled radio</td>
									<td>
										<input type="radio" class="form-input-styled" checked data-fouc>
									</td>
									<td>Single styled radio without label. Does not require <code>.form-check</code> wrapper</td>
								</tr>
								<tr>
									<td>Left position</td>
									<td>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="radio-styled" class="form-input-styled" checked data-fouc>
												Left styled radio
											</label>
										</div>
									</td>
									<td>Styled radio with label, <code>left</code> position</td>
								</tr>
								<tr>
									<td>Right position</td>
									<td>
										<div class="form-check form-check-inline form-check-right">
											<label class="form-check-label">
												Right styled radio
												<input type="radio" name="radio-styled" class="form-input-styled" data-fouc>
											</label>
										</div>
									</td>
									<td>Styled radio with label, <code>right</code> position</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">Default checkboxes</th>
								</tr>
								<tr>
									<td>Default checkbox</td>
									<td>
										<div class="form-check">
											<input type="checkbox" class="form-check-input position-static" checked>
										</div>
									</td>
									<td>Single default checkbox without label. Requires <code>.position-static</code> class</td>
								</tr>
								<tr>
									<td>Left position</td>
									<td>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" checked>
												Left default checkbox
											</label>
										</div>
									</td>
									<td>Default checkbox with label, <code>left</code> position</td>
								</tr>
								<tr>
									<td>Right position</td>
									<td>
										<div class="form-check form-check-inline form-check-right">
											<label class="form-check-label">
												Right default checkbox
												<input type="checkbox" class="form-check-input" checked>
											</label>
										</div>
									</td>
									<td>Default checkbox with label, <code>right</code> position</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">Default radios</th>
								</tr>
								<tr>
									<td>Default radio</td>
									<td>
										<div class="form-check">
											<input type="radio" class="form-check-input position-static" checked>
										</div>
									</td>
									<td>Single default radio without label. Requires <code>.position-static</code> element</td>
								</tr>
								<tr>
									<td>Left position</td>
									<td>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="radio" class="form-check-input" name="radio-default" checked>
												Left default radio
											</label>
										</div>
									</td>
									<td>Default radio with label, <code>left</code> position</td>
								</tr>
								<tr>
									<td>Right position</td>
									<td>
										<div class="form-check form-check-inline form-check-right">
											<label class="form-check-label">
												Right default radio
												<input type="radio" class="form-check-input" name="radio-default">
											</label>
										</div>
									</td>
									<td>Default radio with label, <code>right</code> position</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">Switchery toggles</th>
								</tr>
								<tr>
									<td>Switchery toggle</td>
									<td>
										<input type="checkbox" class="form-input-switchery" checked data-fouc>
									</td>
									<td>Single switchery checkbox</td>
								</tr>
								<tr>
									<td>Left position</td>
									<td>
										<div class="form-check form-check-inline form-check-switchery">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-switchery" checked data-fouc>
												Left switch
											</label>
										</div>
									</td>
									<td>Switchery checkbox with label, <code>left</code> position</td>
								</tr>
								<tr>
									<td>Right position</td>
									<td>
										<div class="form-check form-check-inline form-check-right form-check-switchery">
										<label class="form-check-label">
											Right switch
											<input type="checkbox" class="form-input-switchery" checked data-fouc>
										</label>
										</div>
									</td>
									<td>Switchery checkbox with label, <code>right</code> position</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">File uploaders</th>
								</tr>
								<tr>
									<td>Default upload</td>
									<td>
										<input type="file" class="form-control h-auto">
									</td>
									<td>Default single file uploader</td>
								</tr>
								<tr>
									<td>Styled uploader</td>
									<td>
										<input type="file" class="form-input-styled" data-fouc>
									</td>
									<td>Single file uploader, styled with <code>uniform.js</code> plugin</td>
								</tr>
								<tr>
									<td>Multiple uploader</td>
									<td>
										<input type="file" class="bootstrap-uploader" data-fouc>
									</td>
									<td>Multiple file uploader, using <code>file_input.js</code> plugin</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">Inputs and selects</th>
								</tr>
								<tr>
									<td>Input field</td>
									<td>
										<input type="text" class="form-control" placeholder="Text input">
									</td>
									<td>Basic input field with <code>.form-control</code> class. Supports all available sizes</td>
								</tr>
								<tr>
									<td>Input group</td>
									<td>
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">
													<i class="icon-menu6"></i>
												</span>
											</span>
											<input type="text" class="form-control" placeholder="Input group">
											<div class="input-group-append">
												<button type="button" class="btn btn-light dropdown-toggle btn-icon" data-toggle="dropdown"><i class="icon-menu7"></i></button>
				                                <div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
										</div>
									</td>
									<td>Extended form controls with appended and prepended text of buttons</td>
								</tr>
								<tr>
									<td>Spinner</td>
									<td>
										<input type="text" value="20" class="form-control form-control-touchspin">
									</td>
									<td>Basic implementation of spinners based on <code>bootspin.js</code> library</td>
								</tr>
								<tr>
									<td>Default select</td>
									<td>
										<select name="select" class="form-control">
		                                    <option value="opt1">Basic select box</option>
		                                    <option value="opt2">Option 2</option>
		                                    <option value="opt3">Option 3</option>
		                                    <option value="opt4">Option 4</option>
		                                    <option value="opt5">Option 5</option>
		                                    <option value="opt6">Option 6</option>
		                                    <option value="opt7">Option 7</option>
		                                    <option value="opt8">Option 8</option>
		                                </select>
									</td>
									<td>Default simple selects with <code>.form-control</code> class. Supports all available sizes</td>
								</tr>
								<tr>
									<td>Styled select</td>
									<td>
										<select name="select" class="form-control form-input-styled" data-fouc>
		                                    <option value="opt1">Styled select box</option>
		                                    <option value="opt2">Option 2</option>
		                                    <option value="opt3">Option 3</option>
		                                    <option value="opt4">Option 4</option>
		                                    <option value="opt5">Option 5</option>
		                                    <option value="opt6">Option 6</option>
		                                    <option value="opt7">Option 7</option>
		                                    <option value="opt8">Option 8</option>
		                                </select>
									</td>
									<td>Single styled select based on <code>uniform.js</code> library</td>
								</tr>
								<tr>
									<td>Select2 single</td>
									<td>
										<select name="select" class="form-control form-control-select2" data-fouc>
		                                    <option value="opt1">Select2 select</option>
		                                    <option value="opt2">Option 2</option>
		                                    <option value="opt3">Option 3</option>
		                                    <option value="opt4">Option 4</option>
		                                    <option value="opt5">Option 5</option>
		                                    <option value="opt6">Option 6</option>
		                                    <option value="opt7">Option 7</option>
		                                    <option value="opt8">Option 8</option>
		                                </select>
									</td>
									<td>Single select based on <code>select2.js</code> library</td>
								</tr>
								<tr>
									<td>Select2 multiple</td>
									<td>
										<select name="select" multiple="multiple" class="form-control form-control-select2" data-fouc>
		                                    <option value="opt1" selected>Option 1</option>
		                                    <option value="opt2" selected>Option 2</option>
		                                    <option value="opt3">Option 3</option>
		                                    <option value="opt4">Option 4</option>
		                                    <option value="opt5">Option 5</option>
		                                    <option value="opt6">Option 6</option>
		                                    <option value="opt7">Option 7</option>
		                                    <option value="opt8">Option 8</option>
		                                </select>
									</td>
									<td>Multiple select based on <code>select2.js</code> library</td>
								</tr>
								<tr>
									<td>Multiselect</td>
									<td>
										<select class="form-control form-control-multiselect" multiple="multiple" data-fouc>
		                                    <option value="opt1">Option 1</option>
		                                    <option value="opt2">Option 2</option>
		                                    <option value="opt3">Option 3</option>
		                                    <option value="opt4">Option 4</option>
		                                    <option value="opt5">Option 5</option>
		                                    <option value="opt6">Option 6</option>
		                                    <option value="opt7">Option 7</option>
		                                    <option value="opt8">Option 8</option>
		                                </select>
									</td>
									<td>Multiple select with checkboxes based on <code>multiselect.js</code> library</td>
								</tr>

								<tr class="table-border-double table-active">
									<th colspan="3">UI components</th>
								</tr>
								<tr>
									<td>Context menu</td>
									<td data-toggle="context" data-target=".context-data-menu">
										Right click on this cell

										<div class="context-data-menu">
											<div class="dropdown-menu">
												<div class="dropdown-header">Options</div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i>Edit entry</a>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i>Remove entry</a>
												<div class="dropdown-header">Export</div>
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</td>
									<td>Basic implementation of a <code>context menu</code> attached to the table cell</td>
								</tr>
								<tr>
									<td>Button</td>
									<td>
										<button type="button" class="btn btn-success">Basic button</button>
									</td>
									<td>Simple button, supports all sizes and colors</td>
								</tr>
								<tr>
									<td>Buttons with icon</td>
									<td>
										<button type="button" class="btn btn-danger btn-icon"><i class="icon-menu7"></i></button>

										<div class="btn-group ml-2">
											<button type="button" class="btn btn-info btn-icon dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></button>

											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</div>
									</td>
									<td>Simple button and button dropdowns with icon only, require <code>.btn-icon</code> class for padding correction</td>
								</tr>
								<tr>
									<td>Button dropdown</td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Button dropdown</button>

											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</div>
									</td>
									<td>Button dropdown. Also supports segmented buttons and button toggles</td>
								</tr>
								<tr>
									<td>Progress bar</td>
									<td>
										<div class="progress">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-pink-400" style="width: 54%">
												<span class="sr-only">54% Complete</span>
											</div>
										</div>
									</td>
									<td>Progress bar, supports all available color and sizing options</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /table components -->


	            <!-- Edit modal -->
				<div id="edit_modal" class="modal fade" role="dialog">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header bg-transparent">
								<h5 class="modal-title">Edit table</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
											<th class="col-xs-1">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><input type="text" class="form-control" value="Mark"></td>
											<td><input type="text" class="form-control" value="Otto"></td>
											<td><input type="text" class="form-control" value="@mdo"></td>
											<td class="text-center">
												<div class="list-icons">
							                		<a href="#" class="list-icons-item"><i class="icon-plus3 font-size-base"></i></a>
							                		<a href="#" class="list-icons-item"><i class="icon-cross2 font-size-base"></i></a>
							                	</div>
											</td>
										</tr>
										<tr>
											<td><input type="text" class="form-control" value="Jacob"></td>
											<td><input type="text" class="form-control" value="Thornton"></td>
											<td><input type="text" class="form-control" value="@fat"></td>
											<td class="text-center">
												<div class="list-icons">
							                		<a href="#" class="list-icons-item"><i class="icon-plus3 font-size-base"></i></a>
							                		<a href="#" class="list-icons-item"><i class="icon-cross2 font-size-base"></i></a>
							                	</div>
											</td>
										</tr>
										<tr>
											<td><input type="text" class="form-control" value="Larry"></td>
											<td><input type="text" class="form-control" value="the Bird"></td>
											<td><input type="text" class="form-control" value="@twitter"></td>
											<td class="text-center">
												<div class="list-icons">
							                		<a href="#" class="list-icons-item"><i class="icon-plus3 font-size-base"></i></a>
							                		<a href="#" class="list-icons-item"><i class="icon-cross2 font-size-base"></i></a>
							                	</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="modal-footer bg-transparent">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /edit modal -->


	            <!-- Remove modal -->
				<div id="remove_modal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Confirm action</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								You are about to remove this row. Are you sure?
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Yes, remove</button>
								<button type="button" class="btn btn-light" data-dismiss="modal">No, thanks</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /remove modal -->


	            <!-- Options modal -->
				<div id="options_modal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Row options</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<form action="">
									<div class="form-group row">
										<label class="font-weight-semibold col-form-label col-sm-3">Allow select:</label>
										<div class="col-sm-9">
											<select class="form-control form-control-select2" data-fouc>
												<option value="single" selected>Single</option>
												<option value="multiple">Multiple</option>
												<option value="disabled">Disabled</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="font-weight-semibold col-form-label col-sm-3">Allow edit:</label>
										<div class="col-sm-9">
											<select class="form-control form-control-select2" data-fouc>
												<option value="inline">Edit inline</option>
												<option value="modal" selected>Edit in modal</option>
												<option value="popover">Edit in popover</option>
												<option value="disabled">Disabled</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="font-weight-semibold col-form-label col-sm-3">Add status:</label>
										<div class="col-sm-9">
											<select class="form-control form-control-select2" data-fouc>
												<option value="completed" selected>Completed</option>
												<option value="progress">In progress</option>
												<option value="assigned">Assigned</option>
												<option value="created">Created</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="font-weight-semibold col-form-label col-sm-3">Set priority:</label>
										<div class="col-sm-9">
											<select class="form-control form-control-select2-actions" data-fouc>
												<option value="urgent" data-icon="radio-checked text-danger" selected>Urgent</option>
												<option value="high" data-icon="radio-checked text-primary">High</option>
												<option value="normal" data-icon="radio-checked text-success">Normal</option>
												<option value="low" data-icon="radio-checked text-info">Low</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="font-weight-semibold col-form-label col-sm-3" for="enable-controls">Enable controls:</label>
										<div class="col-sm-9">
											<div class="form-check form-check-switchery">
												<input type="checkbox" class="form-input-switchery-controls" id="enable_controls" checked data-fouc>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="font-weight-semibold col-form-label col-sm-3">Controls:</label>
										<div class="col-sm-9">
											<select class="form-control form-control-select2-actions" id="available_controls" multiple="multiple">
												<option value="edit" data-icon="pencil7" selected>Edit</option>
												<option value="remove" data-icon="trash" selected>Remove</option>
												<option value="options" data-icon="cog4" selected>Options</option>
												<option value="add" data-icon="plus22">Add</option>
												<option value="add" data-icon="versions">Copy</option>
												<option value="select" data-icon="check">Select</option>
												<option value="mark" data-icon="file-download">Export</option>
												<option value="mark" data-icon="file-upload">Import</option>
												<option value="mark" data-icon="printer">Print</option>
											</select>
										</div>
									</div>
								</form>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
								<button type="button" class="btn btn-primary" data-dismiss="modal">Save settings</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /options modal -->

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
