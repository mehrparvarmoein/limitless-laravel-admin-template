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
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_actions.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Forms</span> - Actions</h4>
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
							<a href="form_actions" class="breadcrumb-item">Forms</a>
							<span class="breadcrumb-item active">Actions</span>
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

				<!-- Form action components -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Form action components
					</h6>
					<span class="text-muted d-block">Form actions with mixed elements</span>
				</div>

				<div class="row">
					<div class="col-md-4">
			        	
	                	<!-- Left aligned buttons -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Left aligned buttons</h6>
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
									<div class="form-group">
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<div class="d-flex justify-content-start align-items-center">
										<button type="submit" class="btn btn-light">Cancel</button>
										<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /left aligned buttons -->


		        		<!-- Text + button -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Text + button</h6>
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
									<div class="form-group">
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<div class="d-flex justify-content-between align-items-center">
										<span class="text-muted"><i class="icon-code"></i> &nbsp; Some HTML is supported</span>
										<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /text + button -->


		        		<!-- Inline list + button -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Inline list + button</h6>
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
								<div class="form-group">
									<label>Your name:</label>
									<input type="text" class="form-control" placeholder="Eugene Kopyov">
								</div>

								<div class="form-group">
									<label>Your password:</label>
									<input type="password" class="form-control" placeholder="Your strong password">
								</div>

								<div class="form-group">
									<label>Your message:</label>
									<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
								</div>

								<div class="d-flex justify-content-between align-items-center">
									<div class="list-inline mb-0">
				                		<a href="#" class="list-inline-item text-default">Support</a>
				                		<a href="#" class="list-inline-item text-default">Terms</a>
				                		<a href="#" class="list-inline-item text-default">Policy</a>
				                	</div>

									<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
								</div>
								</form>
							</div>
		                </div>
		                <!-- /inline list + button -->


		        		<!-- Checkbox + button -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Checkbox + button</h6>
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
									<div class="form-group">
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<div class="d-flex justify-content-between align-items-center">
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="checkbox" class="form-control-styled" checked data-fouc>
												Save as template
											</label>
										</div>

										<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /checkbox + button -->

					</div>

					<div class="col-md-4">

		                <!-- Right aligned buttons -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Right aligned buttons</h6>
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
									<div class="form-group">
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<div class="d-flex justify-content-end align-items-center">
										<button type="submit" class="btn btn-light">Preview</button>
										<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /right aligned buttons -->


			        	<!-- Text link + button -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Text link + button</h6>
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
									<div class="form-group">
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<div class="d-flex justify-content-between align-items-center">
										<a href="#">Can't send message?</a>
										<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /text link + button -->


		        		<!-- Icon list + button -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Icon list + button</h6>
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
									<div class="form-group">
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<div class="d-flex justify-content-between align-items-center">
										<div class="list-icons">
					                		<a href="#" class="list-icons-item mr-2"><i class="icon-github"></i></a>
					                		<a href="#" class="list-icons-item mr-2"><i class="icon-stackoverflow"></i></a>
					                		<a href="#" class="list-icons-item mr-2"><i class="icon-google-drive"></i></a>
					                	</div>

										<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /icon list + button -->


		        		<!-- Switch + button -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Switch + button</h6>
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
									<div class="form-group">
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<div class="d-flex justify-content-between align-items-center">
										<div class="form-check form-check-switchery mb-0">
											<label class="form-check-label">
												<input type="checkbox" class="form-control-switchery" checked data-fouc>
												Start discussion
											</label>
										</div>

										<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
	                	<!-- /switch + button -->

					</div>

					<div class="col-md-4">

			        	<!-- Left and right buttons -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Left/right buttons</h6>
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
									<div class="form-group">
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<div class="d-flex justify-content-between align-items-center">
										<button type="submit" class="btn btn-light">Cancel</button>
										<button type="submit" class="btn bg-blue">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /left and right buttons -->


		        		<!-- Status text + button -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Status text + button</h6>
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
									<div class="form-group">
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<div class="d-flex justify-content-between align-items-center">
										<span><i class="icon-spinner2 spinner mr-2"></i> Processing...</span>
										<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /status text + button -->


		        		<!-- Left alternate button -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Left alternate button</h6>
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
									<div class="form-group">
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<div class="d-flex justify-content-between align-items-center">
										<a href="#" class="btn btn-light btn-icon"><i class="icon-help"></i></a>
										<div class="d-inline-flex">
											<button type="reset" class="btn btn-light">Cancel</button>
											<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
										</div>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /left alternate button -->


		        		<!-- Select + button -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Select + button</h6>
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
									<div class="form-group">
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<div class="d-lg-flex justify-content-between align-items-center flex-wrap">
										<div class="wmin-lg-200 mb-3 mb-lg-0">
											<select class="form-control form-control-select2" data-placeholder="Actions" data-fouc>
												<option></option>
												<option value="1">Send to all contacts</option>
												<option value="2">Send to my contacts</option>
												<option value="3">Save as draft</option>
												<option value="4">Don't have in Sent</option>
											</select>
										</div>

										<button type="submit" class="btn bg-blue ml-lg-3">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /select + button -->

					</div>
				</div>
				<!-- /form action components -->


				<!-- Form actions positioning -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Form actions alignment
					</h6>
					<span class="text-muted d-block">Using text or flexbox utility classes</span>
				</div>

				<div class="row">
					<div class="col-md-4">
			        	
			        	<!-- Left alignment -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Left aligned</h6>
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
									<div class="form-group">
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
								</form>
							</div>
		                </div>
		                <!-- /left alignment -->

					</div>

					<div class="col-md-4">
			        	
		        		<!-- Centered buttons -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Centered actions</h6>
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
									<div class="form-group">
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<div class="text-center">
										<button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /centered buttons -->

					</div>

					<div class="col-md-4">
			        	
		        		<!-- Right alignment -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Right aligned</h6>
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
									<div class="form-group">
										<label>Your name: </label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password: </label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label>Your message: </label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<div class="text-right">
										<button type="submit" class="btn bg-teal-400">Submit form <i class="icon-paperplane ml-2"></i></button>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /right alignment -->

					</div>
				</div>
				<!-- /form actions positioning -->


				<!-- Optional styles -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Optional styles
					</h6>
					<span class="text-muted d-block">White, grey and custom backgrounds</span>
				</div>

				<div class="row">
					<div class="col-md-4">

						<!-- Grey background -->
		                <form action="#">
				            <div class="card">
								<div class="card-header header-elements-inline">
					                <h6 class="card-title">Grey background</h6>
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
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group mb-0">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>
								</div>

								<div class="card-footer d-flex justify-content-between align-items-center">
									<button type="submit" class="btn btn-light">Cancel</button>
									<button type="submit" class="btn bg-blue">Submit form <i class="icon-paperplane ml-2"></i></button>
								</div>
			                </div>
			            </form>
			            <!-- /grey background -->

					</div>

					<div class="col-md-4">

						<!-- White background -->
		                <form action="#">
				            <div class="card">
								<div class="card-header header-elements-inline">
					                <h6 class="card-title">White background</h6>
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
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group mb-0">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>
								</div>

								<div class="card-footer d-flex justify-content-between align-items-center bg-white">
									<button type="submit" class="btn btn-light">Cancel</button>
									<button type="submit" class="btn bg-blue">Submit form <i class="icon-paperplane ml-2"></i></button>
								</div>
			                </div>
			            </form>
			            <!-- /white background -->

					</div>

					<div class="col-md-4">

						<!-- Custom background -->
		                <form action="#">
				            <div class="card">
								<div class="card-header header-elements-inline">
					                <h6 class="card-title">Custom background</h6>
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
										<label>Your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label>Your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group mb-0">
										<label>Your message:</label>
										<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
									</div>
								</div>

								<div class="card-footer d-flex justify-content-between align-items-center bg-teal-400 border-top-0">
									<button type="submit" class="btn bg-transparent text-white border-white border-2">Cancel</button>
									<button type="submit" class="btn btn-outline bg-white text-white border-white border-2">Submit form <i class="icon-paperplane ml-2"></i></button>
								</div>
			                </div>
			            </form>
			            <!-- /custom background -->

					</div>
				</div>
				<!-- /optional styles -->


				<!-- In horizontal forms -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						In horizontal forms
					</h6>
					<span class="text-muted d-block">Styling and alignment options</span>
				</div>

				<div class="row">
					<div class="col-md-6">
		                
	                	<!-- Left buttons -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Left buttons</h6>
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
										<label class="col-form-label col-lg-2">Your name:</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder="Eugene Kopyov">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your password:</label>
										<div class="col-lg-10">
											<input type="password" class="form-control" placeholder="Your strong password">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your message:</label>
										<div class="col-lg-10">
											<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
										</div>
									</div>

									<div class="form-group row mb-0">
										<div class="col-lg-10 ml-lg-auto">
											<button type="submit" class="btn btn-light">Cancel</button>
											<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
										</div>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /left buttons -->


		                <!-- Left and right buttons -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Left and right buttons</h6>
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
										<label class="col-form-label col-lg-2">Your name:</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder="Eugene Kopyov">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your password:</label>
										<div class="col-lg-10">
											<input type="password" class="form-control" placeholder="Your strong password">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your message:</label>
										<div class="col-lg-10">
											<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
										</div>
									</div>

									<div class="form-group row mb-0">
										<div class="col-lg-10 ml-lg-auto">
											<div class="d-flex justify-content-between align-items-center">
												<button type="submit" class="btn btn-light">Cancel</button>
												<button type="submit" class="btn bg-blue">Submit <i class="icon-paperplane ml-2"></i></button>
											</div>
										</div>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /left and right buttons -->

					</div>

					<div class="col-md-6">
		                
		                <!-- Right buttons -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Right buttons</h6>
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
										<label class="col-form-label col-lg-2">Your name:</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder="Eugene Kopyov">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your password:</label>
										<div class="col-lg-10">
											<input type="password" class="form-control" placeholder="Your strong password">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your message:</label>
										<div class="col-lg-10">
											<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
										</div>
									</div>

									<div class="form-group row mb-0">
										<div class="col-lg-10 ml-lg-auto text-right">
											<button type="submit" class="btn btn-light">Cancel</button>
											<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
										</div>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /right buttons -->


	                	<!-- Left and right buttons (reversed) -->
			            <div class="card">
							<div class="card-header header-elements-inline">
				                <h6 class="card-title">Left and right buttons (reversed)</h6>
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
										<label class="col-form-label col-lg-2">Your name:</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder="Eugene Kopyov">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your password:</label>
										<div class="col-lg-10">
											<input type="password" class="form-control" placeholder="Your strong password">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your message:</label>
										<div class="col-lg-10">
											<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
										</div>
									</div>

									<div class="form-group row mb-0">
										<div class="col-lg-10 ml-lg-auto">
											<div class="d-flex justify-content-between align-items-center">
												<button type="submit" class="btn bg-blue">Submit <i class="icon-paperplane ml-2"></i></button>
												<button type="submit" class="btn btn-light">Cancel</button>
											</div>
										</div>
									</div>
								</form>
							</div>
		                </div>
		                <!-- /left and right buttons (reversed) -->

					</div>
				</div>
				<!-- /in horizontal forms -->


				<!-- Optional button styles -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Optional button styles
					</h6>
					<span class="text-muted d-block">Action buttons placement and spacing</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Grey background, left button spacing -->
		                <form action="#">
				            <div class="card">
								<div class="card-header bg-white header-elements-inline">
					                <h6 class="card-title">Grey bg and left spacing</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-footer">
									<div class="row">
										<div class="col-lg-10 ml-lg-auto">
											<div class="d-flex justify-content-between align-items-center">
												<button type="submit" class="btn btn-light">Cancel</button>
												<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
											</div>
										</div>
									</div>
								</div>

				                <div class="card-body">
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your name:</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder="Eugene Kopyov">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your password:</label>
										<div class="col-lg-10">
											<input type="password" class="form-control" placeholder="Your strong password">
										</div>
									</div>

									<div class="form-group row mb-0">
										<label class="col-form-label col-lg-2">Your message:</label>
										<div class="col-lg-10">
											<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
										</div>
									</div>
								</div>

								<div class="card-footer">
									<div class="row">
										<div class="col-lg-10 ml-lg-auto">
											<div class="d-flex justify-content-between align-items-center">
												<button type="submit" class="btn btn-light">Cancel</button>
												<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
											</div>
										</div>
									</div>
								</div>
			                </div>
			            </form>
			            <!-- /grey background, left button spacing -->


			            <!-- Grey background, no left button spacing -->
		                <form action="#">
				            <div class="card">
								<div class="card-header bg-white header-elements-inline">
					                <h6 class="card-title">Grey background</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-footer">
									<div class="d-flex justify-content-between align-items-center">
										<button type="submit" class="btn btn-light">Cancel</button>
										<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</div>

				                <div class="card-body">
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your name:</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder="Eugene Kopyov">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your password:</label>
										<div class="col-lg-10">
											<input type="password" class="form-control" placeholder="Your strong password">
										</div>
									</div>

									<div class="form-group row mb-0">
										<label class="col-form-label col-lg-2">Your message:</label>
										<div class="col-lg-10">
											<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
										</div>
									</div>
								</div>

								<div class="card-footer">
									<div class="d-flex justify-content-between align-items-center">
										<button type="submit" class="btn btn-light">Cancel</button>
										<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</div>
			                </div>
			            </form>
			            <!-- /grey background, no left button spacing -->

					</div>

					<div class="col-md-6">

						<!-- White background, left button spacing -->
		                <form action="#">
				            <div class="card">
								<div class="card-header bg-white header-elements-inline">
					                <h6 class="card-title">White bg and left spacing</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-footer bg-white">
									<div class="row">
										<div class="col-lg-10 ml-lg-auto">
											<div class="d-flex justify-content-between align-items-center">
												<button type="submit" class="btn btn-light">Cancel</button>
												<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
											</div>
										</div>
									</div>
								</div>

				                <div class="card-body">
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your name:</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder="Eugene Kopyov">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your password:</label>
										<div class="col-lg-10">
											<input type="password" class="form-control" placeholder="Your strong password">
										</div>
									</div>

									<div class="form-group row mb-0">
										<label class="col-form-label col-lg-2">Your message:</label>
										<div class="col-lg-10">
											<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
										</div>
									</div>
								</div>

								<div class="card-footer bg-white">
									<div class="row">
										<div class="col-lg-10 ml-lg-auto">
											<div class="d-flex justify-content-between align-items-center">
												<button type="submit" class="btn btn-light">Cancel</button>
												<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
											</div>
										</div>
									</div>
								</div>
			                </div>
			            </form>
			            <!-- /white background, left button spacing -->


			            <!-- White background, no left button spacing -->
		                <form action="#">
				            <div class="card">
								<div class="card-header bg-white header-elements-inline">
					                <h6 class="card-title">White background</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-footer bg-white">
									<div class="d-flex justify-content-between align-items-center">
										<button type="submit" class="btn btn-light">Cancel</button>
										<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</div>

				                <div class="card-body">
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your name:</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder="Eugene Kopyov">
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-lg-2">Your password:</label>
										<div class="col-lg-10">
											<input type="password" class="form-control" placeholder="Your strong password">
										</div>
									</div>

									<div class="form-group row mb-0">
										<label class="col-form-label col-lg-2">Your message:</label>
										<div class="col-lg-10">
											<textarea rows="3" cols="3" class="form-control" placeholder="Enter your message here"></textarea>
										</div>
									</div>
								</div>

								<div class="card-footer bg-white">
									<div class="d-flex justify-content-between align-items-center">
										<button type="submit" class="btn btn-light">Cancel</button>
										<button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
									</div>
								</div>
			                </div>
			            </form>
			            <!-- /white background, no left button spacing -->

					</div>
				</div>
				<!-- /optional button styles -->

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
