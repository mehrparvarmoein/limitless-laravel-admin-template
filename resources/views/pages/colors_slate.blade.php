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
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/core.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="../../../../global_assets/js/plugins/notifications/pnotify.min.js"></script>
	<script src="../../../../global_assets/js/plugins/notifications/noty.min.js"></script>
	<script src="../../../../global_assets/js/plugins/notifications/jgrowl.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/colors_slate.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Colors</span> - Slate Palette</h4>
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
							<a href="colors_slate" class="breadcrumb-item">Colors</a>
							<span class="breadcrumb-item active">Slate palette</span>
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

				<!-- Palette colors -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Slate palette colors
					</h6>
					<span class="text-muted d-block">Includes 1 main and 5 accent colors</span>
				</div>

				<div class="row">
					<div class="col-sm-4 col-xl-2">
						<div class="card">
							<div class="bg-slate-800 demo-color"><span>slate-800</span></div>

							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start">
									<div>
										<strong>Slate 800</strong>
										<div class="text-muted mt-1">#37474F</div>
									</div>

									<div class="list-icons">
				                		<a href="#slate_800" class="list-icons-item" data-toggle="modal">
				                			<i class="icon-menu7"></i>
				                		</a>
				                	</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-xl-2">
						<div class="card">
							<div class="bg-slate-700 demo-color"><span>slate-700</span></div>
							
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start">
									<div>
										<strong>Slate 700</strong>
										<div class="text-muted mt-1">#455A64</div>
									</div>

									<div class="list-icons">
				                		<a href="#slate_700" class="list-icons-item" data-toggle="modal">
				                			<i class="icon-menu7"></i>
				                		</a>
				                	</div>
			                	</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-xl-2">
						<div class="card">
							<div class="bg-slate-600 demo-color"><span>slate-600</span></div>
							
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start">
									<div>
										<strong>Slate 600</strong>
										<div class="text-muted mt-1">#546E7A</div>
									</div>

									<div class="list-icons">
				                		<a href="#slate_600" class="list-icons-item" data-toggle="modal">
				                			<i class="icon-menu7"></i>
				                		</a>
				                	</div>
			                	</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-xl-2">
						<div class="card">
							<div class="bg-slate demo-color"><span>slate</span></div>
							
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start">
									<div>
										<strong>Slate 500</strong>
										<div class="text-muted mt-1">#607D8B</div>
									</div>

									<div class="list-icons">
				                		<a href="#slate_500" class="list-icons-item" data-toggle="modal">
				                			<i class="icon-menu7"></i>
				                		</a>
				                	</div>
			                	</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-xl-2">
						<div class="card">
							<div class="bg-slate-400 demo-color"><span>slate-400</span></div>
							
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start">
									<div>
										<strong>Slate 400</strong>
										<div class="text-muted mt-1">#78909C</div>
									</div>

									<div class="list-icons">
				                		<a href="#slate_400" class="list-icons-item" data-toggle="modal">
				                			<i class="icon-menu7"></i>
				                		</a>
				                	</div>
			                	</div>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-xl-2">
						<div class="card">
							<div class="bg-slate-300 demo-color"><span>slate-300</span></div>
							
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start">
									<div>
										<strong>Slate 300</strong>
										<div class="text-muted mt-1">#90A4AE</div>
									</div>

									<div class="list-icons">
				                		<a href="#slate_300" class="list-icons-item" data-toggle="modal">
				                			<i class="icon-menu7"></i>
				                		</a>
				                	</div>
			                	</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /palette colors -->


				<!-- Palette classes -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Palette classes</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p>Slate color palette includes 6 colors: 1 main color without suffix and 5 accent colors with 300, 400, 600, 700 and 800 suffixes. Majority of components and layout parts are coded with maximum flexibility and support of different color options that can be changed on-the-fly just by adding or replacing proper color class. Also works perfectly in combination with other helpers, that makes Limitless very flexible and configurable.</p>
						<strong>Please note:</strong> default Bootstrap contextual classes - primary, danger, success, warning, info - still available and correspond to main colors, so you can use both <code>.bg-danger</code> and <code>.btn-danger</code> as main colors, but if you want to use accent colors, use only <code>.bg-*-*</code>, BS accent classes have been dropped to avoid unnecessary dublicating.
					</div>

					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th style="width: 300px;">Class</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.bg-slate</code><br><code>.bg-slate-*</code></td>
									<td>Classes for background color. You can choose between 1 slate color using <code>.bg-slate</code> class and 5 accent colors using <code>.bg-slate-*</code> class in 300, 400, 600, 700, 800 range</td>
								</tr>
								<tr>
									<td><code>.border-slate</code><br><code>.border-slate-*</code></td>
									<td>Classes for border color. Useful when only border needs to have different colors - validation, highlights, custom buttons etc. Can be used with form controls, selects, cards, buttons and any other block element</td>
								</tr>
								<tr>
									<td><code>.border-top-slate</code><br><code>.border-top-slate-*</code></td>
									<td>Classes for <code>top</code> border color. Use this class if you need to highlight top border only</td>
								</tr>
								<tr>
									<td><code>.border-bottom-slate</code><br><code>.border-bottom-slate-*</code></td>
									<td>Classes for <code>bottom</code> border color. Use this class if you need to highlight bottom border only</td>
								</tr>
								<tr>
									<td><code>.border-left-slate</code><br><code>.border-left-slate-*</code></td>
									<td>Classes for <code>left</code> border color. Use this class if you need to highlight left border only</td>
								</tr>
								<tr>
									<td><code>.border-right-slate</code><br><code>.border-right-slate-*</code></td>
									<td>Classes for <code>right</code> border color. Use this class if you need to highlight right border only</td>
								</tr>
								<tr>
									<td><code>.text-slate</code><br><code>.text-slate-*</code></td>
									<td>Classes for text color. These colors can be used with: text, links, icons, lists etc. Base text color doesn't require suffix</td>
								</tr>
								<tr>
									<td><code>.alpha-slate</code></td>
									<td>Classes for light accent color. Mainly used in alerts with darker text color from the same palette. Available only in 1 class</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /palette classes -->


				<!-- Alert options -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Alert options
					</h6>
					<span class="text-muted d-block">Bordered, styled, solid in both directions</span>
				</div>

				<div class="mb-3">

					<!-- Basic alert -->
					<div class="alert alpha-slate border-slate text-slate-800 alert-styled-left alert-dismissible">
						<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
						Here you can see how slate palette can be used with different components. By the way, this alert uses it as well
				    </div>
				    <!-- /basic alert -->


				    <!-- White alert -->
					<div class="alert bg-white border-slate text-slate-800 alert-styled-left alert-dismissible">
						<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
						And this alert uses slate color palette, but white background color. With utility classes, everything is possible
				    </div>
				    <!-- /white alert -->


				    <!-- Solid alert -->
				    <div class="alert bg-slate alert-styled-left alert-dismissible">
						<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
						<span class="font-weight-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
				    </div>
				    <!-- /solid alert -->

			    </div>
			    <!-- /alert options -->


			    <!-- Form components -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Form components
					</h6>
					<span class="text-muted d-block">Inputs, selects, checkboxes, radios, groups etc.</span>
				</div>

			    <div class="row">
			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Input field text</h6>
								<p class="mb-3 text-muted">Using <code>.text-slate</code> classes</p>
							</div>

							<input type="text" class="form-control text-slate text-uppercase font-weight-semibold font-size-sm line-height-sm" value="Input field text">
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Input with feedback</h6>
								<p class="mb-3 text-muted">Using <code>.text-slate</code> classes</p>
							</div>

							<div class="form-group-feedback form-group-feedback-right">
								<input type="text" class="form-control" placeholder="Input with icon feedback">
								<div class="form-control-feedback text-slate">
									<i class="icon-help"></i>
								</div>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">File input color</h6>
								<p class="mb-3 text-muted">Styled file input button color</p>
							</div>

							<input type="file" class="form-input-styled" data-fouc>
						</div>
			    	</div>
			    </div>

			    <div class="row">
			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Input group addon</h6>
								<p class="mb-3 text-muted">Using <code>.text-slate</code> classes</p>
							</div>

							<div class="input-group">
								<span class="input-group-prepend">
									<span class="input-group-text text-slate"><i class="icon-menu7"></i></span>
								</span>
								<input type="text" class="form-control" placeholder="Input field">
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Addon and button</h6>
								<p class="mb-3 text-muted">Combine text addon and button</p>
							</div>

							<div class="input-group">
								<span class="input-group-prepend">
									<span class="input-group-text text-slate"><i class="icon-lock2"></i></span>	
								</span>
								<input type="text" class="form-control" placeholder="Solid background color">
								<span class="input-group-append">
									<button class="btn bg-slate btn-icon" type="button"><i class="icon-help"></i></button>
								</span>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Input group button</h6>
								<p class="mb-3 text-muted">Using <code>.bg-slate</code> classes</p>
							</div>

							<div class="input-group">
								<input type="text" class="form-control" placeholder="Input field">

								<span class="input-group-append">
									<button class="btn bg-slate" type="button">Button</button>
								</span>									
							</div>
						</div>
			    	</div>
			    </div>

			    <div class="row">
			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Checkbox colors</h6>
							<p class="mb-3 text-muted">Using border and text color classes</p>

							<div>
								<div class="form-check form-check-inline">
									<label class="form-check-label">
										<input type="checkbox" class="form-input-styled" checked data-fouc>
										Checked
									</label>
								</div>

								<div class="form-check form-check-inline">
									<label class="form-check-label">
										<input type="checkbox" class="form-input-styled" data-fouc>
										Unchecked
									</label>
								</div>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Radio classes</h6>
							<p class="mb-3 text-muted">Using border color classes</p>

							<div>
								<div class="form-check form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-input-styled" name="slate-radio" checked data-fouc>
										Selected
									</label>
								</div>

								<div class="form-check form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-input-styled" name="slate-radio" data-fouc>
										Unselected
									</label>
								</div>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Switchery colors</h6>
							<p class="mb-3 text-muted">Using native plugin options</p>

							<div>
								<div class="form-check form-check-inline form-check-switchery form-check-switchery-double">
									<label class="form-check-label">
										Unchecked
										<input type="checkbox" class="form-input-switchery" checked data-fouc>
										Checked
									</label>
								</div>
							</div>
						</div>
			    	</div>
			    </div>

			    <div class="row">
			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Select2 single</h6>
								<p class="mb-3 text-muted">Custom single select text color</p>
							</div>

							<select class="form-control form-control-select2" data-container-css-class="text-slate" data-fouc>
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
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Multiselect color</h6>
								<p class="mb-3 text-muted">Using plugin's <code>buttonClass</code> option</p>

								<select class="form-control form-control-multiselect-material" multiple="multiple" data-fouc>
									<option value="AZ">Arizona</option>
									<option value="CO">Colorado</option>
									<option value="ID">Idaho</option>
									<option value="WY">Wyoming</option>
									<option value="AL">Alabama</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
								</select>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Uniform select</h6>
								<p class="mb-3 text-muted">Using plugin's <code>selectClass</code> option</p>

								<select class="form-control form-input-styled-material" data-fouc>
									<option value="AZ">Arizona</option>
									<option value="CO">Colorado</option>
									<option value="ID">Idaho</option>
									<option value="WY">Wyoming</option>
									<option value="AL">Alabama</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
								</select>
							</div>
						</div>
			    	</div>
			    </div>
			    <!-- /form components -->


			    <!-- Tabs -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Tabs component color
					</h6>
					<span class="text-muted d-block">Solid tabs nav and content color</span>
				</div>

			    <div class="row">
			    	<div class="col-md-6">
			    		<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Tabs navigation color</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid bg-slate rounded-top border-0 mb-0">
									<li class="nav-item"><a href="#colored-nav-tab1" class="nav-link rounded-left rounded-bottom-0 active" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#colored-nav-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#colored-nav-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#colored-nav-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content card card-body rounded-top-0 mb-0">
									<div class="tab-pane fade active show" id="colored-nav-tab1">
										Add <code>custom</code> background color to the tab navigation with <code>.bg-slate</code> palette classes
									</div>

									<div class="tab-pane fade" id="colored-nav-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin
									</div>

									<div class="tab-pane fade" id="colored-nav-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever
									</div>

									<div class="tab-pane fade" id="colored-nav-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet
									</div>
								</div>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-6">
			    		<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Solid color tabs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid bg-slate rounded-top border-0 mb-0">
									<li class="nav-item"><a href="#colored-tab1" class="nav-link" data-toggle="tab">Active</a></li>
									<li class="nav-item"><a href="#colored-tab2" class="nav-link" data-toggle="tab">Inactive</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#colored-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
											<a href="#colored-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
										</div>
									</li>
								</ul>

								<div class="tab-content card card-body bg-slate rounded-top-0 border-top-1 mb-0">
									<div class="tab-pane fade active show" id="colored-tab1">
										Add <code>custom</code> background color to the tabs navigation and content with <code>.bg-slate</code> palette classes
									</div>

									<div class="tab-pane fade show" id="colored-tab2">
										Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin
									</div>

									<div class="tab-pane fade show" id="colored-tab3">
										DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever
									</div>

									<div class="tab-pane fade show" id="colored-tab4">
										Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet
									</div>
								</div>
							</div>
						</div>
			    	</div>
			    </div>
			    <!-- /tabs -->


			    <!-- Text options -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Text options
					</h6>
					<span class="text-muted d-block">Text, link, badges, badge pills, icons</span>
				</div>

			    <div class="row">
			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Text and link color</h6>
							<p class="mb-3 text-muted">Using <code>.text-slate</code> classes</p>

							<div>
								<span class="text-slate">Slate text</span> and <a href="#" class="text-slate">slate link</a>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Badge color</h6>
							<p class="mb-3 text-muted">Using <code>.bg-slate</code> classes</p>

							<div>
								<span class="badge bg-slate">Slate badge</span>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Badge pill color</h6>
							<p class="mb-3 text-muted">Using <code>.bg-slate</code> classes</p>

							<div>
								<span class="badge bg-slate badge-pill">390</span>
							</div>
						</div>
			    	</div>
			    </div>
			    <!-- /text options -->


			    <!-- Progress bar -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Progress bars
					</h6>
					<span class="text-muted d-block">All colors, all sizes, all options</span>
				</div>

			    <div class="row">
			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Basic bar color</h6>
							<p class="mb-3 text-muted">Using <code>.bg-slate</code> classes</p>

							<div class="progress">
								<div class="progress-bar bg-slate" style="width: 55%">
									<span>55% Complete</span>
								</div>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Striped bar color</h6>
							<p class="mb-3 text-muted">Using <code>.bg-slate</code> classes</p>

							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-slate" style="width: 65%">
									<span>65% Complete</span>
								</div>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Animated bar color</h6>
							<p class="mb-3 text-muted">Using <code>.bg-slate</code> classes</p>

							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-slate" style="width: 75%">
									<span>75% Complete</span>
								</div>
							</div>
						</div>
			    	</div>
			    </div>
			    <!-- /progress bar -->


			    <!-- Tables -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Table color options
					</h6>
					<span class="text-muted d-block">Header, footer, rows, columns, cells etc.</span>
				</div>

			    <div class="row">
			    	<div class="col-md-6">
			    		<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Header and footer</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Easily change background color of table header and table footer by adding color class to the table header or footer row
							</div>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr class="bg-slate">
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Eugene</td>
											<td>Kopyov</td>
											<td>@Kopyov</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Victoria</td>
											<td>Baker</td>
											<td>@Vicky</td>
										</tr>
										<tr>
											<td>3</td>
											<td>James</td>
											<td>Alexander</td>
											<td>@Alex</td>
										</tr>
									</tbody>
									<tfoot>
										<tr class="bg-slate">
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>

			    	<div class="col-md-6">
			    		<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Table rows</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								All table layouts support different row color options - highlight and solid fill
							</div>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
									</thead>
									<tbody>
										<tr class="bg-slate">
											<td>1</td>
											<td>Eugene</td>
											<td>Kopyov</td>
											<td>@Kopyov</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Victoria</td>
											<td>Baker</td>
											<td>@Vicky</td>
										</tr>
										<tr class="alpha-slate">
											<td>3</td>
											<td>James</td>
											<td>Alexander</td>
											<td>@Alex</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>

			    <div class="row">
			    	<div class="col-md-6">
			    		<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Table columns</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Besides table rows, you can also highlight table columns in the same way as rows
							</div>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th class="alpha-slate">First Name</th>
											<th>Last Name</th>
											<th class="bg-slate">Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td class="alpha-slate">Eugene</td>
											<td>Kopyov</td>
											<td class="bg-slate">@Kopyov</td>
										</tr>
										<tr>
											<td>2</td>
											<td class="alpha-slate">Victoria</td>
											<td>Baker</td>
											<td class="bg-slate">@Vicky</td>
										</tr>
										<tr>
											<td>3</td>
											<td class="alpha-slate">James</td>
											<td>Alexander</td>
											<td class="bg-slate">@Alex</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th>#</th>
											<th class="alpha-slate">First Name</th>
											<th>Last Name</th>
											<th class="bg-slate">Username</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>

			    	<div class="col-md-6">
			    		<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Solid table</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Sometimes it may be very handy to highlight the whole table, you just need to add <code>.bg-*</code> classes to the table
							</div>

							<div class="table-responsive">
								<table class="table bg-slate">
									<thead>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Eugene</td>
											<td>Kopyov</td>
											<td>@Kopyov</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Victoria</td>
											<td>Baker</td>
											<td>@Vicky</td>
										</tr>
										<tr>
											<td>3</td>
											<td>James</td>
											<td>Alexander</td>
											<td>@Alex</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<th>#</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Username</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /tables -->


			    <!-- Buttons -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Button colors
					</h6>
					<span class="text-muted d-block">Button text, border and background colors</span>
				</div>

			    <div class="row">
			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Basic button</h6>
							<p class="mb-3 text-muted">Using <code>.bg-slate</code> classes</p>

							<div>
								<button type="button" class="btn bg-slate"><i class="icon-menu7 mr-2"></i> Button</button>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Labeled button</h6>
							<p class="mb-3 text-muted">Using <code>.bg-slate</code> classes</p>

							<div>
								<button type="button" class="btn bg-slate btn-labeled btn-labeled-left">
									<b><i class="icon-menu7"></i></b>
									Labeled button
								</button>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Outline button colors</h6>
							<p class="mb-3 text-muted">Using border and text color classes</p>

							<div>
								<button type="button" class="btn btn-outline bg-slate text-slate border-slate">
									<i class="icon-menu7 mr-2"></i>
									Button
								</button>
							</div>
						</div>
			    	</div>
			    </div>
			    <!-- /buttons -->


			    <!-- Cards -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card colors
					</h6>
					<span class="text-muted d-block">Card, card border and heading colors</span>
				</div>

			    <div class="row">
			    	<div class="col-md-4">
			    		<div class="card">
							<div class="card-header bg-slate header-elements-inline">
								<h6 class="card-title">Slate card</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Slate card using <code>.bg-slate</code> class added to the card header
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card border-1 border-slate">
							<div class="card-header header-elements-inline bg-slate">
								<h6 class="card-title">Slate bordered card</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Bordered slate card using <code>.bg-slate</code> and <code>.border-slate</code> classes
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card bg-slate">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Slate solid card</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Solid slate card using <code>.bg-slate</code> class added to the card container
							</div>
						</div>
			    	</div>
			    </div>
			    <!-- /cards -->


			    <!-- Notifications and dialogs -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Notifications &amp; dialogs
					</h6>
					<span class="text-muted d-block">Notifications, modals, popovers, tooltips</span>
				</div>

			    <div class="row">
			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Tooltip color</h6>
							<p class="mb-3 text-muted">Change default tooltip color</p>

							<div>
								<button type="button" class="btn bg-slate" data-popup="tooltip-custom" title="Slate tooltip" data-placement="bottom" data-container="body">
									<i class="icon-comment mr-2"></i>
									Tooltip
								</button>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Popover header</h6>
							<p class="mb-3 text-muted">Using <code>.bg-slate</code> classes</p>

							<div>
								<button type="button" class="btn bg-slate" data-popup="popover-custom" title="Slate popover" data-content="And here's some amazing content. It's very engaging. Right?" data-placement="bottom" data-container="body">
									<i class="icon-comment mr-2"></i>
									Popover title
								</button>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Popover background</h6>
							<p class="mb-3 text-muted">Apply custom color to the entire popover</p>

							<div>
								<button type="button" class="btn bg-slate" data-popup="popover-solid" title="Slate popover" data-content="And here's some amazing content. It's very engaging. Right?" data-placement="bottom" data-container="body">
									<i class="icon-comment mr-2"></i>
									Popover background
								</button>
							</div>
						</div>
			    	</div>
			    </div>

			    <div class="row">
			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Modal dialog header</h6>
							<p class="mb-3 text-muted">Using <code>.bg-slate</code> classes</p>

							<div>
								<button type="button" class="btn bg-slate" data-toggle="modal" data-target="#modal_slate_header">
									<i class="icon-bubbles8 mr-2"></i>
									Modal dialog header
								</button>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Modal background</h6>
							<p class="mb-3 text-muted">Using <code>.bg-slate</code> classes</p>

							<div>
								<button type="button" class="btn bg-slate" data-toggle="modal" data-target="#modal_slate">
									<i class="icon-bubbles8 mr-2"></i>
									Modal background
								</button>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Modal dialog footer</h6>
							<p class="mb-3 text-muted">Using <code>.bg-slate</code> classes</p>

							<div>
								<button type="button" class="btn bg-slate" data-toggle="modal" data-target="#modal_slate_footer">
									<i class="icon-bubbles8 mr-2"></i>
									Modal dialog footer
								</button>
							</div>
						</div>
			    	</div>
			    </div>

			    <div class="row">
			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">Noty notification</h6>
							<p class="mb-3 text-muted">Using <code>.bg-slate</code> color classes</p>

							<div>
								<button class="btn bg-slate noty-launch">
									<i class="icon-bubbles6 mr-2"></i>
									Noty notification
								</button>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">jGrowl notification</h6>
							<p class="mb-3 text-muted">Using plugin's <code>theme</code> option</p>

							<div>
								<button class="btn bg-slate growl-launch">
									<i class="icon-bubbles6 mr-2"></i>
									jGrowl notification
								</button>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate text-center">
							<h6 class="m-0 font-weight-semibold">PNotify notification</h6>
							<p class="mb-3 text-muted">Using plugin's <code>addclass</code> option</p>

							<div>
								<button class="btn bg-slate pnotify-launch">
									<i class="icon-bubbles6 mr-2"></i>
									Pnotify notification
								</button>
							</div>
						</div>
			    	</div>
			    </div>
			    <!-- /notifications and dialogs -->


			    <!-- Dropdown menus -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Dropdown menu colors
					</h6>
					<span class="text-muted d-block">Dropdown and menu elements color</span>
				</div>

			    <div class="row">
			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Dropdown border color</h6>
								<p class="mb-3 text-muted">Using <code>.border-slate</code> color classes</p>
							</div>

							<div class="dropdown-menu border-slate border-2" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
								<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
								<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
								<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Something else here</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item"><i class="icon-gear"></i> One more separated line</a>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Dropdown background color</h6>
								<p class="mb-3 text-muted">Using <code>.bg-slate</code> color classes</p>
							</div>

							<div class="dropdown-menu bg-slate border-slate" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
								<a href="#" class="dropdown-item"><i class="icon-menu7"></i> Action</a>
								<a href="#" class="dropdown-item"><i class="icon-screen-full"></i> Another action</a>
								<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Something else here</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item"><i class="icon-gear"></i> One more separated line</a>
							</div>
						</div>
			    	</div>

			    	<div class="col-md-4">
			    		<div class="card card-body border-top-slate">
							<div class="text-center">
								<h6 class="m-0 font-weight-semibold">Adapted menu components</h6>
								<p class="mb-3 text-muted">Badges, badge pills, checkboxes, radios</p>
							</div>

							<div class="dropdown-menu bg-slate border-slate" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
								<a href="#" class="dropdown-item">
									<i class="icon-menu7"></i>
									Action
									<span class="badge bg-slate-800 ml-auto">Badge</span>
								</a>
								<a href="#" class="dropdown-item">
									<i class="icon-screen-full"></i>
									Another action
									<span class="badge badge-pill bg-slate-800 ml-auto">98</span>
								</a>
								<div class="dropdown-divider"></div>
								<div class="dropdown-item form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-input-styled" checked data-fouc>
										Checkbox
									</label>
								</div>
								<div class="dropdown-item form-check">
									<label class="form-check-label">
										<input type="radio" name="dropdown-radio" class="form-input-styled" checked data-fouc>
										Radio
									</label>
								</div>
							</div>
						</div>
			    	</div>
			    </div>
			    <!-- /dropdown menus -->



				<!-- Modal header -->
				<div id="modal_slate_header" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-slate">
								<h6 class="modal-title">Slate header</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Friendship contrasted solicitude insipidity in introduced literature it. He seemed denote except as oppose do spring my. Between any may mention evening age shortly can ability regular. He shortly sixteen of colonel colonel evening cordial to.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper up he it enjoyment agreeable depending. Timed voice share led his widen noisy young.</p>
								<p>Up attempt offered ye civilly so sitting to. She new course get living within elinor joy. She her rapturous suffering concealed.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<button type="button" class="btn bg-slate">Save changes</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /modal header -->


				<!-- Solid modal -->
				<div id="modal_slate" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content bg-slate">
							<div class="modal-header">
								<h6 class="modal-title">Slate background</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Friendship contrasted solicitude insipidity in introduced literature it. He seemed denote except as oppose do spring my. Between any may mention evening age shortly can ability regular. He shortly sixteen of colonel colonel evening cordial to.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper up he it enjoyment agreeable depending. Timed voice share led his widen noisy young.</p>
								<p>Up attempt offered ye civilly so sitting to. She new course get living within elinor joy. She her rapturous suffering concealed.</p>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link text-white" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-outline bg-white border-white text-white">Save changes</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /solid modal -->


				<!-- Modal footer -->
				<div id="modal_slate_footer" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h6 class="modal-title">Slate footer</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<h6 class="font-weight-semibold">Text in a modal</h6>
								<p>Friendship contrasted solicitude insipidity in introduced literature it. He seemed denote except as oppose do spring my. Between any may mention evening age shortly can ability regular. He shortly sixteen of colonel colonel evening cordial to.</p>

								<hr>

								<h6 class="font-weight-semibold">Another paragraph</h6>
								<p>Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper up he it enjoyment agreeable depending. Timed voice share led his widen noisy young.</p>
								<p>Up attempt offered ye civilly so sitting to. She new course get living within elinor joy. She her rapturous suffering concealed.</p>
							</div>

							<div class="modal-footer bg-slate">
								<button type="button" class="btn btn-link text-white" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-outline bg-white border-white text-white">Save changes</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /modal footer -->


	            <!-- Slate 800 -->
				<div id="slate_800" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Available options</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								For a quick usage of different color, you can use one of these optional classes. They work with almost all components and layout parts: sidebar, cards, tables, text, buttons, controls, forms etc. That means you can easily change any background, text and border color of almost any element on-the-fly just by adding one of the classes listed below.
							</div>

							<div class="table-responsive">
								<table class="table">
									<tr>
										<td>Background color:</td>
										<td><code>.bg-slate-800</code></td>
									</tr>
									<tr>
										<td>Border color:</td>
										<td><code>.border-slate-800</code></td>
									</tr>
									<tr>
										<td>Border top color:</td>
										<td><code>.border-top-slate-800</code></td>
									</tr>
									<tr>
										<td>Border bottom color:</td>
										<td><code>.border-bottom-slate-800</code></td>
									</tr>
									<tr>
										<td>Border left color:</td>
										<td><code>.border-left-slate-800</code></td>
									</tr>
									<tr>
										<td>Text color:</td>
										<td><code>.text-slate-800</code></td>
									</tr>
								</table>
							</div>

							<div class="modal-footer bg-transparent">
								<button type="button" class="btn btn-link btn-sm text-uppercase font-weight-semibold" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /slate 800 -->


	            <!-- Slate 700 -->
				<div id="slate_700" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Available options</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								For a quick usage of different color, you can use one of these optional classes. They work with almost all components and layout parts: sidebar, cards, tables, text, buttons, controls, forms etc. That means you can easily change any background, text and border color of almost any element on-the-fly just by adding one of the classes listed below.
							</div>

							<div class="table-responsive">
								<table class="table">
									<tr>
										<td>Background color:</td>
										<td><code>.bg-slate-700</code></td>
									</tr>
									<tr>
										<td>Border color:</td>
										<td><code>.border-slate-700</code></td>
									</tr>
									<tr>
										<td>Border top color:</td>
										<td><code>.border-top-slate-700</code></td>
									</tr>
									<tr>
										<td>Border bottom color:</td>
										<td><code>.border-bottom-slate-700</code></td>
									</tr>
									<tr>
										<td>Border left color:</td>
										<td><code>.border-left-slate-700</code></td>
									</tr>
									<tr>
										<td>Text color:</td>
										<td><code>.text-slate-700</code></td>
									</tr>
								</table>
							</div>

							<div class="modal-footer bg-transparent">
								<button type="button" class="btn btn-link btn-sm text-uppercase font-weight-semibold" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /slate 700 -->


	            <!-- Slate 600 -->
				<div id="slate_600" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Available options</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								For a quick usage of different color, you can use one of these optional classes. They work with almost all components and layout parts: sidebar, cards, tables, text, buttons, controls, forms etc. That means you can easily change any background, text and border color of almost any element on-the-fly just by adding one of the classes listed below.
							</div>

							<div class="table-responsive">
								<table class="table">
									<tr>
										<td>Background color:</td>
										<td><code>.bg-slate-600</code></td>
									</tr>
									<tr>
										<td>Border color:</td>
										<td><code>.border-slate-600</code></td>
									</tr>
									<tr>
										<td>Border top color:</td>
										<td><code>.border-top-slate-600</code></td>
									</tr>
									<tr>
										<td>Border bottom color:</td>
										<td><code>.border-bottom-slate-600</code></td>
									</tr>
									<tr>
										<td>Border left color:</td>
										<td><code>.border-left-slate-600</code></td>
									</tr>
									<tr>
										<td>Text color:</td>
										<td><code>.text-slate-600</code></td>
									</tr>
								</table>
							</div>

							<div class="modal-footer bg-transparent">
								<button type="button" class="btn btn-link btn-sm text-uppercase font-weight-semibold" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /slate 600 -->


	            <!-- Slate 500 -->
				<div id="slate_500" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Available options</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								For a quick usage of different color, you can use one of these optional classes. They work with almost all components and layout parts: sidebar, cards, tables, text, buttons, controls, forms etc. That means you can easily change any background, text and border color of almost any element on-the-fly just by adding one of the classes listed below.
							</div>

							<div class="table-responsive">
								<table class="table">
									<tr>
										<td>Background color:</td>
										<td><code>.bg-slate</code></td>
									</tr>
									<tr>
										<td>Border color:</td>
										<td><code>.border-slate</code></td>
									</tr>
									<tr>
										<td>Border top color:</td>
										<td><code>.border-top-slate</code></td>
									</tr>
									<tr>
										<td>Border bottom color:</td>
										<td><code>.border-bottom-slate</code></td>
									</tr>
									<tr>
										<td>Border left color:</td>
										<td><code>.border-left-slate</code></td>
									</tr>
									<tr>
										<td>Text color:</td>
										<td><code>.text-slate</code></td>
									</tr>
									<tr>
										<td>Alpha color:</td>
										<td><code>.alpha-slate</code></td>
									</tr>
								</table>
							</div>

							<div class="modal-footer bg-transparent">
								<button type="button" class="btn btn-link btn-sm text-uppercase font-weight-semibold" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /slate 500 -->


	            <!-- Slate 400 -->
				<div id="slate_400" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Available options</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								For a quick usage of different color, you can use one of these optional classes. They work with almost all components and layout parts: sidebar, cards, tables, text, buttons, controls, forms etc. That means you can easily change any background, text and border color of almost any element on-the-fly just by adding one of the classes listed below.
							</div>

							<div class="table-responsive">
								<table class="table">
									<tr>
										<td>Background color:</td>
										<td><code>.bg-slate-400</code></td>
									</tr>
									<tr>
										<td>Border color:</td>
										<td><code>.border-slate-400</code></td>
									</tr>
									<tr>
										<td>Border top color:</td>
										<td><code>.border-top-slate-400</code></td>
									</tr>
									<tr>
										<td>Border bottom color:</td>
										<td><code>.border-bottom-slate-400</code></td>
									</tr>
									<tr>
										<td>Border left color:</td>
										<td><code>.border-left-slate-400</code></td>
									</tr>
									<tr>
										<td>Text color:</td>
										<td><code>.text-slate-400</code></td>
									</tr>
								</table>
							</div>

							<div class="modal-footer bg-transparent">
								<button type="button" class="btn btn-link btn-sm text-uppercase font-weight-semibold" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /slate 400 -->


	            <!-- Slate 300 -->
				<div id="slate_300" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Available options</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								For a quick usage of different color, you can use one of these optional classes. They work with almost all components and layout parts: sidebar, cards, tables, text, buttons, controls, forms etc. That means you can easily change any background, text and border color of almost any element on-the-fly just by adding one of the classes listed below.
							</div>

							<div class="table-responsive">
								<table class="table">
									<tr>
										<td>Background color:</td>
										<td><code>.bg-slate-300</code></td>
									</tr>
									<tr>
										<td>Border color:</td>
										<td><code>.border-slate-300</code></td>
									</tr>
									<tr>
										<td>Border top color:</td>
										<td><code>.border-top-slate-300</code></td>
									</tr>
									<tr>
										<td>Border bottom color:</td>
										<td><code>.border-bottom-slate-300</code></td>
									</tr>
									<tr>
										<td>Border left color:</td>
										<td><code>.border-left-slate-300</code></td>
									</tr>
									<tr>
										<td>Text color:</td>
										<td><code>.text-slate-300</code></td>
									</tr>
								</table>
							</div>

							<div class="modal-footer bg-transparent">
								<button type="button" class="btn btn-link btn-sm text-uppercase font-weight-semibold" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /slate 300 -->

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
