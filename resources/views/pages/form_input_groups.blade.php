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
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_input_groups.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Forms</span> - Input Groups</h4>
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
							<a href="form_input_groups" class="breadcrumb-item">Forms</a>
							<span class="breadcrumb-item active">Input groups</span>
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

				<!-- Input group addons -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Input group addons</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-4">Extend form controls by adding text or buttons before, after, or on both sides of any text-based <code>&lt;input></code>. Use <code>.input-group</code> with an <code>.input-group-prepend</code> to prepend or <code>.input-group-append</code> to append elements to a single <code>.form-control</code>. Place one add-on or button on either side of an input. You may also place one on both sides of an input. While multiple <code>&lt;input></code>s are supported visually, validation styles are only available for input groups with a single <code>&lt;input></code>.</p>

						<form action="#">
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Text addon</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left text addon</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">@</span>
											</span>
											<input type="text" class="form-control" placeholder="Left addon">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Multiple left addons</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">$</span>
												<span class="input-group-text">0.00</span>
											</span>
											<input type="text" class="form-control" placeholder="Multiple left addons">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Right text addon</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Right addon">
											<span class="input-group-append">
												<span class="input-group-text">%</span>
											</span>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Multiple right addons</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Multiple right addons">
											<span class="input-group-append">
												<span class="input-group-text">$</span>
												<span class="input-group-text">0.00</span>
											</span>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left and right text addons</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">$</span>
											</span>
											<input type="text" class="form-control" placeholder="Left and right addons">
											<span class="input-group-append">
												<span class="input-group-text">.00</span>
											</span>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Icon addon</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left icon addon</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-user"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="Left icon">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Right icon addon</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Right icon">
											<span class="input-group-append">
												<span class="input-group-text"><i class="icon-user"></i></span>
											</span>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left and right icon addons</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-menu6"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="Left and right icons">
											<span class="input-group-append">
												<span class="input-group-text"><i class="icon-inbox"></i></span>
											</span>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Spinner addon</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left spinner addon</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-spinner2 spinner"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="Left spinner">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Right spinner addon</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Right spinner">
											<span class="input-group-append">
												<span class="input-group-text"><i class="icon-spinner2 spinner"></i></span>
											</span>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left and right spinner addons</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-spinner2 spinner"></i></span>
											</span>
											<input type="text" class="form-control" placeholder="Left and right spinners">
											<span class="input-group-append">
												<span class="input-group-text"><i class="icon-spinner9 spinner"></i></span>
											</span>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset>
								<legend class="text-uppercase font-size-sm font-weight-bold">Color options</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Contextual class</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text text-primary">
													<i class="icon-pin-alt"></i>
												</span>
											</span>
											<input type="text" class="form-control border-left-0" placeholder="Primary addon">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Custom color class</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control border-right-0" placeholder="Pink addon">
											<span class="input-group-append">
												<span class="input-group-text text-pink">
													<i class="icon-help"></i>
												</span>
											</span>
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				<!-- /input group addons -->


				<!-- Input group buttons -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Input group buttons</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-4">Optional buttons as addons. Buttons in input groups are a bit different and require one extra level of nesting. Instead of <code>.input-group-addon</code>, you'll need to use <code>.input-group-prepend (append)</code> to wrap the buttons. Input group buttons support all available button options except sizing - all buttons height will be adjusted automatically according to the input group size.</p>

						<form action="#">
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Button addons</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<button class="btn btn-light" type="button">Button</button>
											</span>
											<input type="text" class="form-control" placeholder="Left button">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Right button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Right button">
											<span class="input-group-append">
												<button class="btn btn-light" type="button">Button</button>
											</span>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left and right buttons</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">	
												<button class="btn btn-light btn-icon" type="button"><i class="icon-user"></i></button>
											</span>
											<input type="text" class="form-control" placeholder="Left and right buttons">
											<span class="input-group-append">
												<button class="btn btn-light" type="button">Button</button>
											</span>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Button dropdown addons</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left button dropdown</label>
									<div class="col-lg-10">
										<div class="input-group">
											<div class="input-group-prepend">
												<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Action</button>
				                                <div class="dropdown-menu">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
											<input type="text" class="form-control" placeholder="Left dropdown">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Right button dropdown</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Right dropdown">
											<div class="input-group-append">
												<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Action</button>
				                                <div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left and right button dropdowns</label>
									<div class="col-lg-10">
										<div class="input-group">
											<div class="input-group-prepend">
												<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Action</button>
				                                <div class="dropdown-menu">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
											<input type="text" class="form-control" placeholder="Left and right dropdowns">
											<div class="input-group-append">
												<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">Action</button>
				                                <div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Segmented button addons</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<div class="input-group-prepend">
												<button type="button" class="btn btn-light">Action</button>
												<button type="button" class="btn btn-light dropdown-toggle btn-icon" data-toggle="dropdown"></button>
				                                <div class="dropdown-menu">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
											<input type="text" class="form-control" placeholder="Left buttons">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Right button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Right buttons">
											<div class="input-group-append">
												<button type="button" class="btn btn-light">Action</button>
												<button type="button" class="btn btn-light dropdown-toggle btn-icon" data-toggle="dropdown"></button>

				                                <div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Left and right buttons</label>
									<div class="col-lg-10">
										<div class="input-group">
											<div class="input-group-prepend">
												<button type="button" class="btn btn-light">Button</button>
												<button type="button" class="btn btn-light dropdown-toggle btn-icon" data-toggle="dropdown"></button>

				                                <div class="dropdown-menu">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>

											<input type="text" class="form-control" placeholder="Left and right buttons">

											<div class="input-group-append">
												<button type="button" class="btn btn-light btn-icon"><i class="icon-user"></i></button>
												<button type="button" class="btn btn-light dropdown-toggle btn-icon" data-toggle="dropdown"></button>

				                                <div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<a href="#" class="dropdown-item">One more line</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset>
								<legend class="text-uppercase font-size-sm font-weight-bold">Color options</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Contextual button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<button class="btn bg-danger" type="button">Button</button>
											</span>
											<input type="text" class="form-control border-left-0" placeholder="Danger button">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Custom color button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<input type="text" class="form-control border-right-0" placeholder="Teal button">
											<span class="input-group-append">
												<button class="btn bg-teal" type="button">Button</button>
											</span>
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				<!-- /input group buttons -->


				<!-- Input group options -->
				<div class="card mb-4">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Input group options</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-4">Besides default addon options, input groups support different variations of checkboxes, radio buttons, switches, contextual validation state options, icons in different positions. All colors can be easily changed in LESS variables, options and positions also can be mixed. However avoid using <code>&lt;select></code> elements here as they cannot be fully styled in WebKit browsers and <code>&lt;textarea></code> elements here as their rows attribute will not be respected in some cases.</p>

						<form action="#">
							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Sizing options</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Large input group</label>
									<div class="col-lg-10">
										<div class="input-group input-group-lg">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-mention"></i></span>
											</span>
											<input type="text" class="form-control" placeholder=".input-group-lg">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Default input group</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-git-pull-request"></i></span>
											</span>
											<input type="text" class="form-control" placeholder=".input-group">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Small input group</label>
									<div class="col-lg-10">
										<div class="input-group input-group-sm">
											<span class="input-group-prepend">
												<span class="input-group-text"><i class="icon-statistics"></i></span>
											</span>
											<input type="text" class="form-control" placeholder=".input-group-sm">
										</div>
									</div>
								</div>
							</fieldset>

							<fieldset class="mb-3">
								<legend class="text-uppercase font-size-sm font-weight-bold">Validation states</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-success">Valid state</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text text-success"><i class="icon-comment"></i></span>
											</span>
											<input type="text" class="form-control border-success" placeholder="Success color classes">
										</div>
										<span class="form-text text-success">Success state helper</span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-danger">Invalid state</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text text-danger"><i class="icon-graph"></i></span>
											</span>
											<input type="text" class="form-control border-danger" placeholder="Danger color classes">
										</div>
										<span class="form-text text-danger">Invalid state helper</span>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-right row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-success">Valid with icon</label>
									<div class="col-lg-10">
										<div class="position-relative">
											<div class="input-group">
												<span class="input-group-prepend">
													<span class="input-group-text text-success"><i class="icon-graduation"></i></span>
												</span>
												<input type="text" class="form-control border-success" placeholder="Success color classes">
											</div>
											<div class="form-control-feedback text-success">
												<i class="icon-checkmark-circle"></i>
											</div>
										</div>
										<span class="form-text text-success">Valid state helper</span>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-right row">
									<label class="col-form-label col-lg-2 font-weight-semibold text-danger">Invalid with icon</label>
									<div class="col-lg-10">
										<div class="position-relative">
											<div class="input-group">
												<span class="input-group-prepend">
													<span class="input-group-text text-danger"><i class="icon-droplets"></i></span>
												</span>
												<input type="text" class="form-control border-danger" placeholder="Danger color classes">
											</div>
											<div class="form-control-feedback text-danger">
												<i class="icon-cancel-circle2"></i>
											</div>
										</div>
										<span class="form-text text-danger">Error input group helper</span>
									</div>
								</div>
							</fieldset>

							<fieldset>
								<legend class="text-uppercase font-size-sm font-weight-bold">Addon options</legend>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Default checkbox</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">
													<input type="checkbox" checked>
												</span>
											</span>
											<input type="text" class="form-control" placeholder="Default checkbox addon">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Styled checkbox</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<div class="input-group-text">
													<input type="checkbox" class="form-control-styled" name="input-addon-checkbox" checked data-fouc>
												</div>
											</span>
											<input type="text" class="form-control" placeholder="Styled checkbox addon">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Default radio button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">
													<input type="radio" name="addon-radio">
												</span>
											</span>
											<input type="text" class="form-control" placeholder="Unstyled radio addon">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Styled radio button</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<div class="input-group-text">
													<input type="radio" name="addon-radio" class="form-control-styled" checked data-fouc>
												</div>
											</span>
											<input type="text" class="form-control" placeholder="Styled radio addon">
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-form-label col-lg-2">Switchery toggle</label>
									<div class="col-lg-10">
										<div class="input-group">
											<span class="input-group-prepend">
												<span class="input-group-text">
													<input type="checkbox" class="form-control-switchery" checked data-fouc>
												</span>
											</span>
											<input type="text" class="form-control" placeholder="Switchery toggle addon">
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				<!-- /input group options -->


				<!-- Touchspin spinners -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Touchspin spinners
					</h6>
					<span class="text-muted d-block">Touch friendly input spinner component</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Bootstrap touchspin</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Basically Touchspin uses default Bootstrap <code>input-group</code> component styling with ability to add extra classes to the buttons and addons to match your design perfectly.</p>

								<div class="form-group">
									<label>Example with postfix: </label>
									<input type="text" value="55" class="form-control touchspin-postfix">
								</div>

								<div class="form-group">
									<label>Example with prefix: </label>
									<input type="text" value="0" class="form-control touchspin-prefix">
								</div>

								<div class="form-group">
									<label>Init with empty value: </label>
									<input type="text" value="" class="form-control touchspin-empty">
								</div>

								<div class="form-group">
									<label>Incremental/decremental step on up/down change: </label>
									<input type="text" value="10" class="form-control touchspin-step">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Advanced spinners</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Depending on your needs, you can easily swith off mousewheel support, change steps and increments, use more complex examples with button groups and dropdowns.</p>

								<div class="form-group">
									<label>Button group example</label>
									<div class="input-group">
							            <input type="text" class="form-control touchspin-button-group" value="50">
							            <div class="input-group-append">
							                <button type="button" class="btn bg-primary">Action</button>
							                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown"></button>
							                <div class="dropdown-menu dropdown-menu-right">
							                    <a href="#" class="dropdown-item">Action</a>
							                    <a href="#" class="dropdown-item">Another action</a>
							                    <a href="#" class="dropdown-item">Something else here</a>
							                    <div class="dropdown-divider"></div>
							                    <a href="#" class="dropdown-item">Separated link</a>
							                </div>
							            </div>
							        </div>
								</div>

								<div class="form-group">
									<label>Value attribute is not set: <span class="text-muted">applying settings.initval</span></label>
									<input type="text" value="" class="form-control touchspin-set-value">
								</div>

								<div class="form-group">
									<label>Value is set explicitly to 33: <span class="text-muted">skipping settings.initval</span></label>
									<input type="text" value="33" class="form-control touchspin-set-value">
								</div>

								<div class="form-group">
									<label>No mousewheel support: </label>
									<input type="text" value="10" class="form-control touchspin-no-mousewheel">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /touchspin spinners -->


				<!-- Touchspin layouts -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Horizontal spinners</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Touchspin supports default Bootstrap <code>input-group</code> component sizing classes, applied to the input or wrapped in <code>div</code> with these classes.</p>

								<div class="form-group">
									<label>Large spinner</label>
									<input type="text" value="55" class="form-control form-control-lg touchspin-basic">
								</div>

								<div class="form-group">
									<label>Default spinner</label>
									<input type="text" value="55" class="form-control touchspin-basic">
								</div>

								<div class="form-group">
									<label>Small spinner</label>
									<input type="text" value="55" class="form-control form-control-sm touchspin-basic">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Vertical spinners</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Also Touchspin library supports <code>vertical</code> spinner controls orientation, that appear on the right side. Buttons and icons are fully customizable.</p>

								<div class="form-group">
									<label>Large spinner</label>
									<input type="text" value="55" class="form-control form-control-lg touchspin-vertical">
								</div>

								<div class="form-group">
									<label>Default spinner</label>
									<input type="text" value="55" class="form-control touchspin-vertical">
								</div>

								<div class="form-group">
									<label>Small spinner</label>
									<input type="text" value="55" class="form-control form-control-sm touchspin-vertical">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /touchspin layouts -->

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
		<!-- /content wrapper -->

	</div>
	<!-- /page content -->

</body>
</html>
