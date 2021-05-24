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
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/widgets.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/job_apply.js"></script>
	<!-- /Page JS files -->

</head>

<body class="sidebar-xs">

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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Job Search</span> - Apply</h4>
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
							<a href="job_apply" class="breadcrumb-item">Job search</a>
							<span class="breadcrumb-item active">Apply</span>
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

				<!-- Inner container -->
				<div class="d-md-flex align-items-md-start">

					<!-- Left sidebar component -->
					<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left border-0 shadow-0 sidebar-expand-md">

						<!-- Sidebar content -->
						<div class="sidebar-content">

							<!-- Filter -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Filter</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="search" class="form-control" placeholder="Job title or keywords">
											<div class="form-control-feedback">
												<i class="icon-reading text-muted"></i>
											</div>
										</div>

										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="search" class="form-control" placeholder="Location">
											<div class="form-control-feedback">
												<i class="icon-pin-alt text-muted"></i>
											</div>
										</div>

										<div class="form-group">
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Full time
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Part time
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Remote
												</label>
											</div>
										</div>

										<button type="submit" class="btn bg-blue btn-block">
											<i class="icon-search4 font-size-base mr-2"></i>
											Find jobs
										</button>
									</form>
								</div>
							</div>
							<!-- /filter -->


							<!-- Location -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Location</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<form action="#">
									<div class="card-body">
										<div class="form-group">
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Amsterdam
													<span class="d-block text-muted">North Holland, Netherlands</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Koog aan de Zaan
													<span class="d-block text-muted">North Holland, Netherlands</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Amsterdam Binnenstad en Oostelijk Havengebied
													<span class="d-block text-muted">North Holland, Netherlands</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Hoofddorp
													<span class="d-block text-muted">North Holland, Netherlands</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Alkmaar
													<span class="d-block text-muted">North Holland, Netherlands</span>
												</label>
											</div>
										</div>
									</div>

									<div class="card-footer text-center p-0">
										<a href="#" class="d-block p-2">All locations</a>
									</div>
								</form>
							</div>
							<!-- /location -->


							<!-- Job title -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Job title</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<form action="#">
									<div class="card-body">
										<div class="form-group">
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Developer
													<span class="text-muted font-size-sm ml-1">(38)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Front end designer
													<span class="text-muted font-size-sm ml-1">(43)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													UX designer
													<span class="text-muted font-size-sm ml-1">(74)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Software engineer
													<span class="text-muted font-size-sm ml-1">(25)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Full stack designer
													<span class="text-muted font-size-sm ml-1">(12)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Motion designer
													<span class="text-muted font-size-sm ml-1">(53)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													PHP developer
													<span class="text-muted font-size-sm ml-1">(19)</span>
												</label>
											</div>
										</div>
									</div>

									<div class="card-footer text-center p-0">
										<a href="#" class="d-block p-2">All job titles</a>
									</div>
								</form>
							</div>
							<!-- /job title -->


							<!-- Industry -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Industry</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<form action="#">
									<div class="card-body">
										<div class="form-group">
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Arts and design
													<span class="text-muted font-size-sm ml-1">(32)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Engineering
													<span class="text-muted font-size-sm ml-1">(65)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Computer Software
													<span class="text-muted font-size-sm ml-1">(235)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Financial Services
													<span class="text-muted font-size-sm ml-1">(26)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Service Industry
													<span class="text-muted font-size-sm ml-1">(94)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Healthcare
													<span class="text-muted font-size-sm ml-1">(35)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Law Enforcement
													<span class="text-muted font-size-sm ml-1">(40)</span>
												</label>
											</div>
										</div>
									</div>

									<div class="card-footer text-center p-0">
										<a href="#" class="d-block p-2">All industries</a>
									</div>
								</form>
							</div>
							<!-- /industry -->


							<!-- Company -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Company</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<form action="#">
									<div class="card-body">
										<div class="form-group">
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled">
													Amazon
													<span class="text-muted font-size-sm ml-1">(43)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled">
													The North Face
													<span class="text-muted font-size-sm ml-1">(124)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled">
													Transfer Wise
													<span class="text-muted font-size-sm ml-1">(67)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled">
													ING Bank
													<span class="text-muted font-size-sm ml-1">(37)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled">
													Facebook
													<span class="text-muted font-size-sm ml-1">(28)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled">
													Dell
													<span class="text-muted font-size-sm ml-1">(67)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled">
													Microsoft
													<span class="text-muted font-size-sm ml-1">(57)</span>
												</label>
											</div>
										</div>
									</div>

									<div class="card-footer text-center p-0">
										<a href="#" class="d-block p-2">All companies</a>
									</div>
								</form>
							</div>
							<!-- /company -->


							<!-- Specific skills -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Specific skills</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<form action="#">
									<div class="card-body">
										<div class="form-group">
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													JavaScript
													<span class="text-muted font-size-sm ml-1">(53)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													HTML5, SCSS/SASS
													<span class="text-muted font-size-sm ml-1">(36)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Wireframing
													<span class="text-muted font-size-sm ml-1">(21)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Scrum
													<span class="text-muted font-size-sm ml-1">(8)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Grunt/gulp/bower
													<span class="text-muted font-size-sm ml-1">(68)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Node.js
													<span class="text-muted font-size-sm ml-1">(32)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													AngularJS
													<span class="text-muted font-size-sm ml-1">(94)</span>
												</label>
											</div>
										</div>
									</div>

									<div class="card-footer text-center p-0">
										<a href="#" class="d-block p-2">All skills</a>
									</div>
								</form>
							</div>
							<!-- /specific skills -->


							<!-- Date posted -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Date posted</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" name="when_posted" class="form-input-styled" data-fouc>
													Today
													<span class="text-muted font-size-sm ml-1">(632)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" name="when_posted" class="form-input-styled" data-fouc>
													Yesterday
													<span class="text-muted font-size-sm ml-1">(431)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" name="when_posted" class="form-input-styled" data-fouc>
													Last week
													<span class="text-muted font-size-sm ml-1">(31)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" name="when_posted" class="form-input-styled" data-fouc>
													Last month
													<span class="text-muted font-size-sm ml-1">(124)</span>
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="radio" name="when_posted" class="form-input-styled" data-fouc>
													Any time
												</label>
											</div>
										</div>								
									</form>
								</div>
							</div>
							<!-- /date posted -->


							<!-- Latest searches -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Latest searches</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body p-0">
									<div class="list-group list-group-flush">
										<a href="#" class="list-group-item list-group-item-action">
											<div>
												Senior UI/UX designer
												<div class="font-size-sm text-muted">Amsterdam</div>
											</div>
										</a>
										<a href="#" class="list-group-item list-group-item-action">
											<div>
												Full stack web developer
												<div class="font-size-sm text-muted">Zurich</div>
											</div>
										</a>
										<a href="#" class="list-group-item list-group-item-action">
											<div>
												Business controller
												<div class="font-size-sm text-muted">Budapest</div>
											</div>
										</a>
										<a href="#" class="list-group-item list-group-item-action">
											<div>
												Python/Django developer
												<div class="font-size-sm text-muted">Hamburg</div>
											</div>
										</a>
										<a href="#" class="list-group-item list-group-item-action">
											<div>
												Senior PHP software engineer
												<div class="font-size-sm text-muted">London</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<!-- /latest searches -->

						</div>
						<!-- /sidebar content -->

					</div>
					<!-- /left sidebar component -->


					<!-- Right content -->
					<div class="flex-fill overflow-auto">

						<!-- Apply form -->
						<div class="card">
							<div class="card-body pb-0">
								<div class="media flex-column flex-md-row mb-2">
									<a href="#" class="align-self-md-center mr-md-3 mb-2 mb-md-0">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
									</a>

									<div class="media-body">
										<h5 class="media-title font-weight-semibold">Interaction UX/UI Industrial Designer</h5>
										<ul class="list-inline list-inline-dotted text-muted mb-0">
											<li class="list-inline-item">Utrecht, Netherlands</li>
											<li class="list-inline-item">3 days ago</li>
										</ul>
									</div>

									<div class="align-self-md-center ml-md-3 mt-2 mt-md-0">
										<a href="#" class="btn bg-teal-400"><i class="icon-checkmark3 mr-2"></i> Save this job</a>
									</div>
								</div>
							</div>

							<form action="#">
								<fieldset class="card-body">
									<h6 class="font-weight-semibold mb-3">Personal details</h6>

									<div class="form-group">
										<label>First name: <span class="text-danger">*</span></label>
										<input type="text" class="form-control" placeholder="Enter first name">
									</div>

									<div class="form-group">
										<label>Last name: <span class="text-danger">*</span></label>
										<input type="text" class="form-control" placeholder="Enter last name">
									</div>

									<div class="form-group">
										<label>Email: <span class="text-danger">*</span></label>
										<input type="text" class="form-control" placeholder="Enter email">
									</div>

									<div class="form-group">
										<label>Password: <span class="text-danger">*</span></label>
										<input type="text" class="form-control" placeholder="Enter password">
									</div>

									<div class="form-group">
										<label>Repeat password: <span class="text-danger">*</span></label>
										<input type="text" class="form-control" placeholder="Repeat password">
									</div>

									<div class="form-group">
										<label>Phone number:</label>
										<input type="text" class="form-control" placeholder="Enter phone #">
									</div>

									<div class="form-group">
										<label>Birth date:</label>

										<div class="row">
											<div class="col-4">
												<div class="form-group">
													<select name="birth-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
														<option></option>
														<option value="1">January</option>
														<option value="2">February</option>
														<option value="3">March</option>
														<option value="4">April</option>
														<option value="5">May</option>
														<option value="6">June</option>
														<option value="7">July</option>
														<option value="8">August</option>
														<option value="9">September</option>
														<option value="10">October</option>
														<option value="11">November</option>
														<option value="12">December</option>
													</select>
												</div>
											</div>

											<div class="col-4">
												<div class="form-group">
													<select name="birth-day" data-placeholder="Day" class="form-control form-control-select2" data-fouc>
														<option></option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="...">...</option>
														<option value="31">31</option>
													</select>
												</div>
											</div>

											<div class="col-4">
												<div class="form-group">
													<select name="birth-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
														<option></option>
														<option value="1">1980</option>
														<option value="2">1981</option>
														<option value="3">1982</option>
														<option value="4">1983</option>
														<option value="5">1984</option>
														<option value="6">1985</option>
														<option value="7">1986</option>
														<option value="8">1987</option>
														<option value="9">1988</option>
														<option value="10">1989</option>
														<option value="11">1990</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</fieldset>

								<fieldset class="card-body">
									<h6 class="font-weight-semibold mt-1 mb-3">Your education</h6>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>School name: <span class="text-danger">*</span></label>
												<input type="text" class="form-control" placeholder="Enter school name">
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>Specialization: <span class="text-danger">*</span></label>
												<input type="text" class="form-control" placeholder="Enter specialization">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Degree level: <span class="text-danger">*</span></label>
			                                    <select name="level1" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
			                                        <option></option> 
			                                        <option value="student">Student</option> 
			                                        <option value="bsc">Bachelor</option> 
			                                        <option value="msc">Master</option> 
			                                        <option value="as">Associate</option> 
			                                        <option value="phd">Doctorate</option>
			                                    </select>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>Period: <span class="text-danger">*</span></label>
												<div class="row">
													<div class="col-6">
														<input type="text" class="form-control datepicker" placeholder="Start date">
													</div>

													<div class="col-6">
														<input type="text" class="form-control datepicker" placeholder="End date">
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="mb-3">
										<div class="content-divider text-muted">
											<span class="px-2"><i class="icon-circle-down2"></i></span>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>School name: <span class="text-danger">*</span></label>
												<input type="text" class="form-control" placeholder="Enter school name">
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>Specialization: <span class="text-danger">*</span></label>
												<input type="text" class="form-control" placeholder="Enter specialization">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Degree level: <span class="text-danger">*</span></label>
			                                    <select name="level2" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
			                                        <option></option> 
			                                        <option value="student">Student</option> 
			                                        <option value="bsc">Bachelor</option> 
			                                        <option value="msc">Master</option> 
			                                        <option value="as">Associate</option> 
			                                        <option value="phd">Doctorate</option>
			                                    </select>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>Period: <span class="text-danger">*</span></label>
												<div class="row">
													<div class="col-6">
														<input type="text" class="form-control datepicker" placeholder="Start date">
													</div>

													<div class="col-6">
														<input type="text" class="form-control datepicker" placeholder="End date">
													</div>
												</div>
											</div>
										</div>
									</div>
								</fieldset>

								<fieldset class="card-body">
									<h6 class="font-weight-semibold mt-1 mb-3">Your experience</h6>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Location:</label>
			                                    <select name="location1" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
			                                        <option></option> 
			                                        <option value="netherlands">Netherlands</option> 
			                                        <option value="hungary">Hungary</option> 
			                                        <option value="uk">United Kingdom</option> 
			                                        <option value="germany">Germany</option> 
			                                        <option value="other">...</option>
			                                        <option value="spain">Spain</option>
			                                    </select>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>Company: <span class="text-danger">*</span></label>
												<input type="text" class="form-control" placeholder="Enter company name">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Position: <span class="text-danger">*</span></label>
												<input type="text" class="form-control" placeholder="Enter position">
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>Period: <span class="text-danger">*</span></label>
												<div class="row">
													<div class="col-6">
														<input type="text" class="form-control datepicker" placeholder="Start date">
													</div>

													<div class="col-6">
														<input type="text" class="form-control datepicker" placeholder="End date">
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="mb-3">
										<div class="content-divider text-muted">
											<span class="px-2"><i class="icon-circle-down2"></i></span>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Location:</label>
			                                    <select name="location2" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
			                                        <option></option> 
			                                        <option value="netherlands">Netherlands</option> 
			                                        <option value="hungary">Hungary</option> 
			                                        <option value="uk">United Kingdom</option> 
			                                        <option value="germany">Germany</option> 
			                                        <option value="other">...</option>
			                                        <option value="spain">Spain</option>
			                                    </select>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>Company: <span class="text-danger">*</span></label>
												<input type="text" class="form-control" placeholder="Enter company name">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Position: <span class="text-danger">*</span></label>
												<input type="text" class="form-control" placeholder="Enter position">
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>Period: <span class="text-danger">*</span></label>
												<div class="row">
													<div class="col-6">
														<input type="text" class="form-control datepicker" placeholder="Start date">
													</div>

													<div class="col-6">
														<input type="text" class="form-control datepicker" placeholder="End date">
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="mb-3">
										<div class="content-divider text-muted">
											<span class="px-2"><i class="icon-circle-down2"></i></span>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Location:</label>
			                                    <select name="location3" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
			                                        <option></option> 
			                                        <option value="netherlands">Netherlands</option> 
			                                        <option value="hungary">Hungary</option> 
			                                        <option value="uk">United Kingdom</option> 
			                                        <option value="germany">Germany</option> 
			                                        <option value="other">...</option>
			                                        <option value="spain">Spain</option>
			                                    </select>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>Company: <span class="text-danger">*</span></label>
												<input type="text" class="form-control" placeholder="Enter company name">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Position: <span class="text-danger">*</span></label>
												<input type="text" class="form-control" placeholder="Enter position">
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>Period: <span class="text-danger">*</span></label>
												<div class="row">
													<div class="col-6">
														<input type="text" class="form-control datepicker" placeholder="Start date">
													</div>

													<div class="col-6">
														<input type="text" class="form-control datepicker" placeholder="End date">
													</div>
												</div>
											</div>
										</div>
									</div>
								</fieldset>

								<fieldset class="card-body">
									<h6 class="font-weight-semibold mb-3">Upload files</h6>

									<div class="form-group">
										<label>Upload your CV: <span class="text-danger">*</span></label>
										<input type="file" class="form-input-styled" data-fouc>
										<span class="form-text text-muted">Accepted formats: doc, docx, pdf. Max file size 2Mb</span>
									</div>

									<div class="form-group">
										<label>Upload cover letter: <span class="text-danger">*</span></label>
										<input type="file" class="form-input-styled" data-fouc>
										<span class="form-text text-muted">Accepted formats: doc, docx, pdf. Max file size 2Mb</span>
									</div>

									<div class="form-group">
										<label>Upload recommendations:</label>
										<input type="file" class="form-input-styled" data-fouc>
										<span class="form-text text-muted">Accepted formats: doc, docx, pdf. Max file size 2Mb</span>
									</div>
								</fieldset>

								<fieldset class="card-body">
									<h6 class="font-weight-semibold mt-1 mb-3">Other information</h6>

									<div class="form-group">
										<label>Where did you find us?</label>
	                                    <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
	                                        <option></option> 
	                                        <option value="monster">Monster.com</option> 
	                                        <option value="linkedin">LinkedIn</option> 
	                                        <option value="google">Google</option> 
	                                        <option value="adwords">Google AdWords</option> 
	                                        <option value="other">Other source</option>
	                                    </select>
                                    </div>

									<div class="form-group">
										<label>Availability:</label>

										<div class="form-check mt-2">
											<label class="form-check-label">
												<input type="radio" name="availability" class="form-input-styled" data-fouc>
												Immediately
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" name="availability" class="form-input-styled" data-fouc>
												1 - 2 weeks
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" name="availability" class="form-input-styled" data-fouc>
												3 - 4 weeks
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" name="availability" class="form-input-styled" data-fouc>
												More than 1 month
											</label>
										</div>
									</div>

									<div class="form-group mb-0">
										<label>Additional information:</label>
	                                    <textarea name="additional-info" rows="4" cols="4" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                                    </div>
								</fieldset>

								<fieldset class="card-body">
									<button type="submit" class="btn bg-blue">Submit form <i class="icon-paperplane ml-2"></i></button>
									<button type="submit" class="btn btn-light ml-3">Cancel</button>
								</fieldset>
							</form>
						</div>
						<!-- /apply form -->

					</div>
					<!-- /right content -->

				</div>
				<!-- /inner container -->

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
