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

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/job_list.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Job Search</span> - List</h4>
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
							<a href="job_list_list" class="breadcrumb-item">Job search</a>
							<span class="breadcrumb-item active">List</span>
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

						<!-- List layout -->
			            <div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Open positions</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<ul class="media-list">
								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">Interaction UX/UI Industrial Designer</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">Dell</a></li>
											<li class="list-inline-item">Amsterdam, Netherlands</li>
										</ul>

										Extended kindness trifling remember he confined outlived if. Assistance sentiments yet unpleasing say. Open they an busy they my such high. An active dinner wishes at unable hardly no talked on. Immediate him her resolving his favourite. Wished denote abroad at branch at. Mind what no by kept.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="badge bg-blue">New</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">Front-End Designer / Developer</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">The North Face</a></li>
											<li class="list-inline-item">The Hague, Netherlands</li>
										</ul>

										Quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to. Add short water court fat. Her bachelor honoured perceive securing but desirous ham required. Questions deficient acuteness to engrossed as. Entirely led ten humoured greatest and yourself besides country.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="badge bg-blue">New</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">UX Lead Designer</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">IBM</a></li>
											<li class="list-inline-item">Lelystad, Netherlands</li>
										</ul>

										Contented get distrusts certainty nay are frankness concealed ham. On unaffected resolution on considered of. No thought me husband or colonel forming effects. End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="text-muted">3 days ago</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">Designer, CRM</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">CNN</a></li>
											<li class="list-inline-item">Rotterdam, Netherlands</li>
										</ul>

										At as in understood an remarkably solicitude. Mean them very seen she she. Use totally written the observe pressed justice. Instantly cordially far intention recommend estimable yet her his. Ladies stairs enough esteem add fat all enable. Needed its design number winter see. Oh be me sure wise.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="text-muted">4 days ago</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">Senior UX Designer</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">Transfer Wise</a></li>
											<li class="list-inline-item">Nijmegen, Netherlands</li>
										</ul>

										By an outlived insisted procured improved am. Paid hill fine ten now love even leaf. Supplied feelings mr of dissuade recurred no it offering honoured. Am of of in collecting devonshire favourable excellence. Her sixteen end ashamed cottage yet reached get hearing invited. Resources ourselves.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="text-muted">5 days ago</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">UI Designer E-commerce</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">Uber</a></li>
											<li class="list-inline-item">Utrecht, Netherlands</li>
										</ul>

										Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for few longer mrs sudden talent become.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="text-muted">6 days ago</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">FPGA Designer</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">ING Bank</a></li>
											<li class="list-inline-item">Eindhoven, Netherlands</li>
										</ul>

										By so delight of showing neither believe he present. Deal sigh up in shew away when. Pursuit express no or prepare replied. Wholly formed old latter future but way she. Day her likewise smallest expenses judgment building man carriage gay. Considered introduced themselves mr to discretion at.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="text-muted">7 days ago</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">Medior JAVA Designer</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">Amazon</a></li>
											<li class="list-inline-item">Baarn, Netherlands</li>
										</ul>

										Woody equal ask saw sir weeks aware decay. Entrance prospect removing we packages strictly is no smallest he. For hopes may chief get hours day rooms. Oh no turned behind polite piqued enough at. Forbade few through inquiry blushes you. Cousin no itself eldest it in dinner latter missed no.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="text-muted">8 days ago</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">Full-stack UX Designer</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">Facebook</a></li>
											<li class="list-inline-item">Nijmegen, Netherlands</li>
										</ul>

										Situation admitting promotion at or to perceived be. Mr acuteness we as estimable enjoyment up. An held late as felt know. Learn do allow solid to grave. Middleton suspicion age her attention. Chiefly several bed its wishing. Is so moments on chamber pressed to. Doubtful yet way properly answered.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="text-muted">9 days ago</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">Front End Web Developer</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">Microsoft</a></li>
											<li class="list-inline-item">Coevorden, Netherlands</li>
										</ul>

										Out believe has request not how comfort evident. Up delight cousins we feeling minutes. Genius has looked end piqued spring. Down has rose feel find man. Learning day desirous informed expenses material returned six the. She enabled invited exposed him another. Reasonably conviction solicitude me.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="text-muted">10 days ago</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">Interaction UX/UI Industrial Designer</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">Dell</a></li>
											<li class="list-inline-item">Amsterdam, Netherlands</li>
										</ul>

										Extended kindness trifling remember he confined outlived if. Assistance sentiments yet unpleasing say. Open they an busy they my such high. An active dinner wishes at unable hardly no talked on. Immediate him her resolving his favourite. Wished denote abroad at branch at. Mind what no by kept.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="text-muted">12 days ago</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">Front-End Designer / Developer</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">The North Face</a></li>
											<li class="list-inline-item">The Hague, Netherlands</li>
										</ul>

										Quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to. Add short water court fat. Her bachelor honoured perceive securing but desirous ham required. Questions deficient acuteness to engrossed as. Entirely led ten humoured greatest and yourself besides country.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="text-muted">13 days ago</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">UX Lead Designer</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">IBM</a></li>
											<li class="list-inline-item">Lelystad, Netherlands</li>
										</ul>

										Contented get distrusts certainty nay are frankness concealed ham. On unaffected resolution on considered of. No thought me husband or colonel forming effects. End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="text-muted">14 days ago</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">Designer, CRM</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">CNN</a></li>
											<li class="list-inline-item">Rotterdam, Netherlands</li>
										</ul>

										At as in understood an remarkably solicitude. Mean them very seen she she. Use totally written the observe pressed justice. Instantly cordially far intention recommend estimable yet her his. Ladies stairs enough esteem add fat all enable. Needed its design number winter see. Oh be me sure wise.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="text-muted">15 days ago</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">Senior UX Designer</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">Transfer Wise</a></li>
											<li class="list-inline-item">Nijmegen, Netherlands</li>
										</ul>

										By an outlived insisted procured improved am. Paid hill fine ten now love even leaf. Supplied feelings mr of dissuade recurred no it offering honoured. Am of of in collecting devonshire favourable excellence. Her sixteen end ashamed cottage yet reached get hearing invited. Resources ourselves.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="text-muted">16 days ago</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">UI Designer E-commerce</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">Uber</a></li>
											<li class="list-inline-item">Utrecht, Netherlands</li>
										</ul>

										Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for few longer mrs sudden talent become.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="text-muted">17 days ago</span>
									</div>
								</li>

								<li class="media card-body flex-column flex-sm-row">
									<div class="mr-sm-3 mb-2 mb-sm-0">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">
											<a href="#">FPGA Designer</a>
										</h6>

										<ul class="list-inline list-inline-dotted text-muted mb-2">
											<li class="list-inline-item"><a href="#" class="text-muted">ING Bank</a></li>
											<li class="list-inline-item">Eindhoven, Netherlands</li>
										</ul>

										By so delight of showing neither believe he present. Deal sigh up in shew away when. Pursuit express no or prepare replied. Wholly formed old latter future but way she. Day her likewise smallest expenses judgment building man carriage gay. Considered introduced themselves mr to discretion at.
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<span class="text-muted">18 days ago</span>
									</div>
								</li>
							</ul>
						</div>
						<!-- /list layout -->


						<!-- Pagination -->
						<div class="d-flex justify-content-center pt-3 mb-3">
							<ul class="pagination shadow-1">
								<li class="page-item"><a href="#" class="page-link page-link-white"><i class="icon-arrow-small-right"></i></a></li>
								<li class="page-item active"><a href="#" class="page-link page-link-white">1</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white">2</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white">3</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white">4</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white">5</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white"><i class="icon-arrow-small-left"></i></a></li>
							</ul>
						</div>
						<!-- /pagination -->

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
