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
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyAPQXi7ZBZ73SPXi7JfHycSCi30thvQGCg&amp;libraries=places"></script>

	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/widgets.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/pickers/location/typeahead_addresspicker.js"></script>
	<script src="../../../../global_assets/js/plugins/pickers/location/autocomplete_addresspicker.js"></script>
	<script src="../../../../global_assets/js/plugins/pickers/location/location.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/picker_location.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Pickers</span> - Location</h4>
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
							<a href="picker_location" class="breadcrumb-item">Pickers</a>
							<span class="breadcrumb-item active">Location</span>
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

				<!-- Basic location picker -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Location picker</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This plug-in allows to easily find and select a location on the Google map. Along with a single point selection, it allows to choose an area by providing its center and the radius. All the data can be saved to any HTML input element automatically as well as be processed by Javascript (callback support).</p>
						<div class="map-container locationpicker-default"></div>
					</div>
				</div>
				<!-- /basic location picker -->


				<!-- Manipulating from callback -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Manipulating from callback</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">If you need direct access to the actual Google Maps widget you can use map method as follows. This example illustrates how to set zoom pragmatically each time when location has been changed.</p>
						<div class="map-container locationpicker-manipulate"></div>
					</div>
				</div>
				<!-- /manipulating from callback -->


				<!-- Location picker -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Binding UI with the widget</h5>
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
									<label>Location:</label>
									<input type="text" class="form-control" id="us2-address">
								</div>

								<div class="form-group">
									<label>Radius:</label>
									<input type="text" class="form-control" id="us2-radius">
								</div>

								<div class="form-group">
									<div id="us2" class="map-container"></div>
								</div>

								<div class="form-group">
									<label>Latitude:</label>
									<input type="text" class="form-control" id="us2-lat">
								</div>

								<div class="form-group">
									<label>Longitude:</label>
									<input type="text" class="form-control" id="us2-lon">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Subscribing for events</h5>
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
									<label>Location:</label>
									<input type="text" class="form-control" id="us3-address">
								</div>

								<div class="form-group">
									<label>Radius:</label>
									<input type="text" class="form-control" id="us3-radius">
								</div>

								<div class="form-group">
									<div id="us3" class="map-container"></div>
								</div>

								<div class="form-group">		
									<label>Latitude:</label>
									<input type="text" class="form-control" id="us3-lat">
								</div>

								<div class="form-group">
									<label>Longitude:</label>
									<input type="text" class="form-control" id="us3-lon">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /location picker -->


				<!-- Address pickers -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Typeahead address picker</h5>
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
									<label>Address input</label>
									<input id="address" class="form-control typeahead" type="text" dir="rtl" placeholder="Enter an address">
								</div>

								<div class="form-group">
									<div id="map" class="map-container mb-2"></div>
									<span class="form-text text-muted">You can drag and drop the marker to the correct location</span>
								</div>

								<div class="form-group">
									<label>Response</label>
									<pre class="language-javascript" id="response"><code>Address Output</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Autocomplete address picker</h5>
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
										<div class="form-group">
											<label>Address:</label>
											<input id="addresspicker_map" class="form-control" placeholder="Enter an address">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label id="geo_label" for="reverseGeocode">Reverse Geocode after Marker Drag?</label>
											<select id="reverseGeocode" class="form-control">
												<option value="false" selected>No</option>
												<option value="true">Yes</option>
											</select>
										</div>
									</div>
								</div>

								<div class="form-group">
									<div id="map2" class="map-container mb-2"></div>
									<span class="form-text text-muted">You can drag and drop the marker to the correct location</span>
								</div>

								<div class="form-group">
									<label>Response:</label>
									<pre class="language-javascript" id="response2"><code>Address Output</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /address pickers -->

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
