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
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_layouts.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Form Layouts</span> - Horizontal</h4>
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
							<a href="form_layout_horizontal" class="breadcrumb-item">Form layouts</a>
							<span class="breadcrumb-item active">Horizontal</span>
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

				<!-- Horizontal form options -->
				<div class="row">
					<div class="col-md-6">

						<!-- Basic layout-->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Basic layout</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<form action="#">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Name:</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" placeholder="Eugene Kopyov">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Password:</label>
										<div class="col-lg-9">
											<input type="password" class="form-control" placeholder="Your strong password">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Your state:</label>
										<div class="col-lg-9">
											<select class="form-control form-control-select2" data-fouc>
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
												<optgroup label="Central Time Zone">
													<option value="AL">Alabama</option>
													<option value="AR">Arkansas</option>
													<option value="KY">Kentucky</option>
												</optgroup>
												<optgroup label="Eastern Time Zone">
													<option value="CT">Connecticut</option>
													<option value="DE">Delaware</option>
													<option value="FL">Florida</option>
												</optgroup>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Gender:</label>
										<div class="col-lg-9">
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" name="gender" checked data-fouc>
													Male
												</label>
											</div>

											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" name="gender" data-fouc>
													Female
												</label>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Your avatar:</label>
										<div class="col-lg-9">
											<input type="file" class="form-input-styled" data-fouc>
											<span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Tags:</label>
										<div class="col-lg-9">
											<select multiple="multiple" data-placeholder="Enter tags" class="form-control form-control-select2-icons" data-fouc>
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
													<option value="safari" data-icon="safari">Safari</option>
													<option value="opera" data-icon="opera">Opera</option>
													<option value="IE" data-icon="IE">IE</option>
												</optgroup>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Your message:</label>
										<div class="col-lg-9">
											<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
										</div>
									</div>

									<div class="text-right">
										<button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
						</div>
						<!-- /basic layout -->

					</div>

					<div class="col-md-6">

						<!-- Static mode -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Static mode</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<form action="#">
									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Name:</label>
										<div class="col-lg-9">
											<div class="form-control-plaintext">Eugene Kopyov</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Password:</label>
										<div class="col-lg-9">
											<input type="password" class="form-control" readonly value="********">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Your state:</label>
										<div class="col-lg-9">
											<select class="form-control form-control-select2" disabled data-fouc>
												<optgroup label="Alaskan/Hawaiian Time Zone">
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="NV" selected>Nevada</option>
													<option value="WA">Washington</option>
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
												<optgroup label="Eastern Time Zone">
													<option value="CT">Connecticut</option>
													<option value="DE">Delaware</option>
													<option value="FL">Florida</option>
												</optgroup>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Gender:</label>
										<div class="col-lg-9">
											<div class="form-check form-check-inline disabled">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" name="gender" disabled checked data-fouc>
													Male
												</label>
											</div>

											<div class="form-check form-check-inline disabled">
												<label class="form-check-label">
													<input type="radio" class="form-input-styled" name="gender" disabled data-fouc>
													Female
												</label>
											</div>	
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Your avatar:</label>
										<div class="col-lg-9">
											<div class="media mt-0">
												<div class="mr-3">
													<a href="#">
														<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="60" height="60" class="rounded-round" alt="">
													</a>
												</div>

												<div class="media-body">
													<input type="file" class="form-input-styled" disabled data-fouc>
													<span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Tags:</label>
										<div class="col-lg-9">
											<select multiple="multiple" disabled data-placeholder="Enter tags" class="form-control form-control-select2-icons" data-fouc>
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
													<option value="safari" data-icon="safari">Safari</option>
													<option value="opera" data-icon="opera">Opera</option>
													<option value="IE" data-icon="IE">IE</option>
												</optgroup>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-lg-3 col-form-label">Your message:</label>
										<div class="col-lg-9">
											<div class="form-control-plaintext">
												<p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
											</div>
										</div>
									</div>

									<div class="text-right">
										<button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
						</div>
						<!-- /static mode -->

					</div>
				</div>
				<!-- /vertical form options -->


				<!-- Centered forms -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<div class="row">
									<div class="col-md-10 offset-md-1">
										<div class="header-elements-inline">
											<h5 class="card-title">Centered form</h5>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
					                	</div>
									</div>
								</div>
							</div>

							<div class="card-body">
								<div class="row">
									<div class="col-md-10 offset-md-1">
										<form action="#">
											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Enter your name:</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" placeholder="Eugene Kopyov">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Enter your password:</label>
												<div class="col-lg-9">
													<input type="password" class="form-control" placeholder="Your strong password">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Select your state:</label>
												<div class="col-lg-9">
													<select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
														<option></option>
														<optgroup label="Alaskan/Hawaiian Time Zone">
															<option value="AK">Alaska</option>
															<option value="HI">Hawaii</option>
														</optgroup>
														<optgroup label="Pacific Time Zone">
															<option value="CA">California</option>
															<option value="OR">Oregon</option>
															<option value="WA">Washington</option>
														</optgroup>
														<optgroup label="Mountain Time Zone">
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="WY">Wyoming</option>
														</optgroup>
														<optgroup label="Central Time Zone">
															<option value="AL">Alabama</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
														</optgroup>
														<optgroup label="Eastern Time Zone">
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="WV">West Virginia</option>
														</optgroup>
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Attach screenshot:</label>
												<div class="col-lg-9">
													<input type="file" class="form-input-styled" data-fouc>
													<span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Your message:</label>
												<div class="col-lg-9">
													<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
												</div>
											</div>

											<div class="text-right">
												<button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="row">
							<div class="col-md-10 offset-md-1">
								<div class="card">
									<div class="card-header header-elements-inline">
										<h5 class="card-title">Centered card</h5>
										<div class="header-elements">
											<div class="list-icons">
						                		<a class="list-icons-item" data-action="collapse"></a>
						                		<a class="list-icons-item" data-action="reload"></a>
						                		<a class="list-icons-item" data-action="remove"></a>
						                	</div>
					                	</div>
									</div>

									<div class="card-body">
										<form action="#">
											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Enter your name:</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" placeholder="Eugene Kopyov">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Enter your password:</label>
												<div class="col-lg-9">
													<input type="password" class="form-control" placeholder="Your strong password">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Select your state:</label>
												<div class="col-lg-9">
													<select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
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
															<option value="ID">Idaho</option>
														</optgroup>
														<optgroup label="Central Time Zone">
															<option value="AL">Alabama</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
														</optgroup>
														<optgroup label="Eastern Time Zone">
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="WV">West Virginia</option>
														</optgroup>
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Attach screenshot:</label>
												<div class="col-lg-9">
													<input type="file" class="form-input-styled" data-fouc>
													<span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Your message:</label>
												<div class="col-lg-9">
													<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
												</div>
											</div>

											<div class="text-right">
												<button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /form centered -->


				<!-- Fieldset legend -->
				<div class="row">
					<div class="col-md-6">

						<!-- Basic legend -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Basic legend</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<form action="#">
									<fieldset>
										<legend class="font-weight-semibold text-uppercase font-size-sm">Enter your information</legend>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Enter your name:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Eugene Kopyov">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Enter your password:</label>
											<div class="col-lg-9">
												<input type="password" class="form-control" placeholder="Your strong password">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Repeat password:</label>
											<div class="col-lg-9">
												<input type="password" class="form-control" placeholder="Repeat password">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Your message:</label>
											<div class="col-lg-9">
												<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
											</div>
										</div>
									</fieldset>

									<fieldset>
										<legend class="font-weight-semibold text-uppercase font-size-sm">Add personal details</legend>

			                			<div class="form-group row">
											<label class="col-lg-3 col-form-label">Your country:</label>
											<div class="col-lg-9">
			                                    <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc>
			                                        <option value="USA">USA</option> 
			                                        <option value="United Kingdom">United Kingdom</option> 
			                                        <option value="...">...</option> 
			                                        <option value="Australia">Australia</option> 
			                                    </select>
		                                    </div>
			                			</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Select your state:</label>
											<div class="col-lg-9">
												<select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
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
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="KY">Kentucky</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
													</optgroup>
												</select>
											</div>
										</div>

			                			<div class="form-group row">
											<label class="col-lg-3 col-form-label">Gender:</label>
											<div class="col-lg-9">
												<div class="form-check form-check-inline">
													<label class="form-check-label">
														<input type="radio" name="gender2" class="form-input-styled" checked data-fouc>
														Male
													</label>
												</div>

												<div class="form-check form-check-inline">
													<label class="form-check-label">
														<input type="radio" name="gender2" class="form-input-styled" data-fouc>
														Female
													</label>
												</div>
											</div>
			                			</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Your CV:</label>
											<div class="col-lg-9">
												<input type="file" class="form-input-styled" data-fouc>
												<span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
											</div>
										</div>

			                			<div class="form-group row">
											<label class="col-lg-3 col-form-label">About yourself:</label>
											<div class="col-lg-9">
			                                    <textarea rows="5" cols="5" placeholder="Few words about yourself..." class="form-control"></textarea>
		                                    </div>
			                			</div>
									</fieldset>

									<div class="text-right">
										<button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
						</div>
						<!-- /basic legend -->

					</div>

					<div class="col-md-6">

						<!-- Advanced legend -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Advanced legend</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<form action="#">
									<fieldset>
										<legend class="font-weight-semibold text-uppercase font-size-sm">
											<i class="icon-file-text2 mr-2"></i>
											Enter your information
											<a class="float-right text-default" data-toggle="collapse" data-target="#demo1">
												<i class="icon-circle-down2"></i>
											</a>
										</legend>

										<div class="collapse show" id="demo1">
											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Enter your name:</label>
												<div class="col-lg-9">
													<input type="text" class="form-control" placeholder="Eugene Kopyov">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Enter your password:</label>
												<div class="col-lg-9">
													<input type="password" class="form-control" placeholder="Your strong password">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Repeat password:</label>
												<div class="col-lg-9">
													<input type="password" class="form-control" placeholder="Repeat password">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Your message:</label>
												<div class="col-lg-9">
													<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
												</div>
											</div>
										</div>
									</fieldset>

									<fieldset>
										<legend class="font-weight-semibold text-uppercase font-size-sm">
											<i class="icon-reading mr-2"></i>
											Add personal details
											<a class="float-right text-default" data-toggle="collapse" data-target="#demo2">
												<i class="icon-circle-down2"></i>
											</a>
										</legend>

										<div class="collapse show" id="demo2">
				                			<div class="form-group row">
												<label class="col-lg-3 col-form-label">Your country:</label>
												<div class="col-lg-9">
				                                    <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc>
				                                        <option value="USA">USA</option> 
				                                        <option value="United Kingdom">United Kingdom</option> 
				                                        <option value="...">...</option> 
				                                        <option value="Australia">Australia</option> 
				                                    </select>
			                                    </div>
				                			</div>

											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Select your state:</label>
												<div class="col-lg-9">
													<select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
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
														<optgroup label="Central Time Zone">
															<option value="AL">Alabama</option>
															<option value="AR">Arkansas</option>
															<option value="KY">Kentucky</option>
														</optgroup>
														<optgroup label="Eastern Time Zone">
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
														</optgroup>
													</select>
												</div>
											</div>

				                			<div class="form-group row">
												<label class="col-lg-3 col-form-label">Gender:</label>
												<div class="col-lg-9">
													<div class="form-check form-check-inline">
														<label class="form-check-label">
															<input type="radio" name="gender2" class="form-input-styled" checked data-fouc>
															Male
														</label>
													</div>

													<div class="form-check form-check-inline">
														<label class="form-check-label">
															<input type="radio" name="gender2" class="form-input-styled" data-fouc>
															Female
														</label>
													</div>
												</div>
				                			</div>

											<div class="form-group row">
												<label class="col-lg-3 col-form-label">Your CV:</label>
												<div class="col-lg-9">
													<input type="file" class="form-input-styled" data-fouc>
													<span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
												</div>
											</div>

				                			<div class="form-group row">
												<label class="col-lg-3 col-form-label">About yourself:</label>
												<div class="col-lg-9">
				                                    <textarea rows="5" cols="5" placeholder="Few words about yourself..." class="form-control"></textarea>
			                                    </div>
				                			</div>
			                			</div>
									</fieldset>

									<div class="text-right">
										<button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
						</div>
						<!-- /a legend -->

					</div>
				</div>
				<!-- /fieldset legend -->


				<!-- 2 columns form -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Multiple columns</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<form action="#">
							<div class="row">
								<div class="col-md-6">
									<fieldset>
										<legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Personal details</legend>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Enter your name:</label>
											<div class="col-lg-9">
												<input type="text" class="form-control" placeholder="Eugene Kopyov">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Enter your password:</label>
											<div class="col-lg-9">
												<input type="password" class="form-control" placeholder="Your strong password">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Select your state:</label>
											<div class="col-lg-9">
												<select data-placeholder="Select your state" class="form-control form-control-select2" data-fouc>
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
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="KY">Kentucky</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Attach screenshot:</label>
											<div class="col-lg-9">
												<input type="file" class="form-input-styled" data-fouc>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Your message:</label>
											<div class="col-lg-9">
												<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
											</div>
										</div>
									</fieldset>
								</div>

								<div class="col-md-6">
									<fieldset>
					                	<legend class="font-weight-semibold"><i class="icon-truck mr-2"></i> Shipping details</legend>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Your name:</label>
											<div class="col-lg-9">
												<div class="row">
													<div class="col-md-6">
														<input type="text" placeholder="First name" class="form-control">
													</div>

													<div class="col-md-6">
														<input type="text" placeholder="Last name" class="form-control">
													</div>
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Email:</label>
											<div class="col-lg-9">
												<input type="text" placeholder="eugene@kopyov.com" class="form-control">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Phone #:</label>
											<div class="col-lg-9">
												<input type="text" placeholder="+99-99-9999-9999" class="form-control">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Location:</label>
											<div class="col-lg-9">
												<div class="row">
													<div class="col-md-6">
														<div class="mb-3">
								                            <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc>
								                            	<option></option>
								                                <option value="1">Canada</option> 
								                                <option value="2">USA</option> 
								                                <option value="3">Australia</option> 
								                                <option value="4">Germany</option> 
								                            </select>
							                            </div>

							                            <input type="text" placeholder="ZIP code" class="form-control">
													</div>

													<div class="col-md-6">
														<input type="text" placeholder="State/Province" class="form-control mb-3">
														<input type="text" placeholder="City" class="form-control">
													</div>
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Address:</label>
											<div class="col-lg-9">
												<input type="text" placeholder="Your address of living" class="form-control">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Additional message:</label>
											<div class="col-lg-9">
												<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
											</div>
										</div>
									</fieldset>
								</div>
							</div>

							<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
							</div>
						</form>
					</div>
				</div>
				<!-- /2 columns form -->

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