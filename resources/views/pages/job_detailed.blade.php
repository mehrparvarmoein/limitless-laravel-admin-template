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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Job Search</span> - Detailed</h4>
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
							<a href="job_detailed" class="breadcrumb-item">Job search</a>
							<span class="breadcrumb-item active">Detailed</span>
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

						<!-- Details -->
						<div class="card">
							<div class="card-body">
								<div class="media flex-column flex-md-row mb-4">
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
										<a href="#" class="btn bg-blue"><i class="icon-envelop2 mr-2"></i> Apply for this job</a>
									</div>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Job Description</h6>

									<p>Named among Fortune’s 2016 World’s Most Admired Companies, Flex offers a world of innovation, learning opportunities, and a strong reputation as environmentally responsible citizens. We are a leading sketch-to-scale™ company that designs and builds intelligent products for a connected world. With more than 200,000 professionals across 30 countries, and a promise to help the world Live smarter™, Flex provides innovative design, engineering, manufacturing, real-time supply chain insight and logistics services to companies of all sizes in various industries and end-markets.</p>

									<p>With more than 100,000 team members globally, we promote an environment that is rooted in the entrepreneurial spirit in which the company was founded. Dell ’ s team members are committed to serving our communities, regularly volunteering for over 1,500 non-profit organizations. The company has also received many accolades from employer of choice to energy conservation. Our team members follow an open approach to technology innovation and believe that technology is essential for human success.</p>

									<p>We are looking for a <strong>Interaction UX/UI Industrial Designer</strong> for our <strong>Product Development</strong> team!</p>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Responsibilities:</h6>

									<p class="mb-3">You will work closely with our product owners and the analytics team to help drive and ensure a best-in-class user experience on web, tablet and mobile platforms. With your knowledge and passion for keeping up-to-date with the latest advances in user interface design and web related technologies. You will be creating high quality designs with the goal of ensuring continual improvement of our sites. To realise this you will guide and set the standards and design principles for all of our brands to follow and work towards to enhance their online success.</p>

									<ul class="list">
										<li>Gather, analyze, record and report on current market information with regard to the latest transportation methods.</li>
										<li>Work with the team to determine company and customer needs and make recommendations on cost effective transportation methods and assist in price negotiations if appropriate.</li>
										<li>Ensures lowest cost transportation by analyzing company and customer needs, researching transportation methods and auditing carrier costs and performances.</li>
										<li>Ensure laws, rules and regulations regarding shipping/transportation methods are adhered to and prepares applications for appropriate certifications and licenses.</li>
										<li>Prepare application for import / export control certifications and licenses (control documents).</li>
										<li>Maintain logs and compile information on routes, rates and services on various vendors.</li>
										<li>Arranges shipping details such as packing, shipping, and routing of product.</li>
										<li>Analyzes and recommends transportation and freight costs as well as appropriate routing and carriers to be used.</li>
										<li>Plans, schedules, and routes inbound and outbound domestic and international shipments of freight, using knowledge of applicable laws, tariffs, and Flextronics policies.</li>
										<li>Be familiar with compliance required for corporate, and facility policies and procedures and assist the team in ensuring the highest standards are adhered to in the process.</li>
										<li>Ensure Traffic Metrics are maintained and updated on a daily/weekly/monthly basis.</li>
										<li>Establish and maintain good relationships with agents / suppliers in order to achieve quality of service and consistent cost reduction.</li>
										<li>May schedule company vehicles for service and normal maintenance checks and is responsible for ensuring that all are registered and have the proper insurance.</li>
										<li>Support the team in terms of knowledge and experience in dealing with daily operational and transportation issues.</li>
									</ul>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Requirements:</h6>
									<ul class="list">
										<li>Undergraduate Industrial Design/Graphic Design degree and 6-8 years relevant experience or Graduate degree in a related field, plus 4-6 years relevant experience</li>
										<li>Strong skillset in digital design with an emphasis on Windows, mobile (iOS/Android), and web User Interfaces</li>
										<li>Ability to distill complex problems into intuitive, clean, user friendly designs</li>
										<li>Expert in User Experience concepts, Information Architecture, and software brand strategy</li>
										<li>Experience with creating detailed workflow specifications and behaviors for development teams</li>
										<li>Can process and integrate research studies, reports, trends, data, and information into plans, deliverables, and recommendations</li>
									</ul>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Desired Skills and Experience:</h6>
									<ul class="list">
										<li>
											<strong class="d-block">Strategic Thinking.</strong>
											You will not only solve design issues but will proactively offer ideas and insights to improve the customer's experience and visual challenges.
										</li>
										<li>
											<strong class="d-block">Creative Suite.</strong>
											Primarily Photoshop and Illustrator with some InDesign. Experience with Adobe Muse is also helpful.
										</li>
										<li>
											<strong class="d-block">Typography.</strong>
											We need a designer who knows typography visual hierarchy and styles and how to use them properly. Your work will be for the whole EMEA region and be translated into dozens of languages. Any experience with Asian and Middle Eastern languages and fonts will be useful.
										</li>
										<li>
											<strong class="d-block">Experimentation.</strong>
											Experience optimizing designs based on A/B testing is a plus.
										</li>
										<li>
											<strong class="d-block">Communication.</strong>
											We need someone who can own their time but also knows how to ask the right questions to ensure the right message is communicated in the right way.
										</li>
										<li>
											<strong class="d-block">Marketing.</strong>
											You are familiar with and have previously worked on a marketing team.
										</li>
										<li>
											<strong class="d-block">Asset Management.</strong>
											Assist with development and maintenance of a digital asset management system.
										</li>
									</ul>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">What we offer:</h6>
									<ul class="list">
										<li>A learning prone environment where employee development and satisfaction lies at the heart of the organisation</li>
										<li>You choose and change your workplace besides our open office in our café area, or your home</li>
										<li>Life at Dell means collaborating with dedicated professionals with a passion for technology</li>
										<li>When we see something that could be improved, we get to work inventing the solution</li>
										<li>Our people demonstrate our winning culture through positive and meaningful relationship</li>
										<li>We invest in our people and offer a series of programs that enables them to pursue a career that fulfills their potential</li>
										<li>Our team members ’ health and wellness is our priority as well as rewarding them for their hard work</li>
									</ul>
								</div>

								<div class="mb-4">
									<h6 class="font-weight-semibold">Interested?</h6>
									<p>We look forward to hearing from you! Please apply directly using the apply button below or via our website. In case you have any further questions about the role, you are welcome to contact Elin Akerstrom, Recruitment Specialist on phone +3630 2984732.</p>
								</div>

								<div class="d-sm-flex">
									<a href="#" class="btn bg-blue">
										<i class="icon-envelop2 mr-2"></i>
										Apply for this job
									</a>

									<div class="ml-sm-auto mt-2 mt-sm-0">
										<a href="#" class="btn btn-light">
											<i class="icon-checkmark3 mr-2"></i>
											Save this job
										</a>
									</div>

									<div class="ml-sm-3 mt-2 mt-sm-0">
										<a href="#" class="btn btn-light">
											<i class="icon-share4 mr-2"></i>
											Share
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /details -->


						<!-- Company profile -->
						<h6 class="font-weight-semibold pt-2 mb-2">Company profile</h6>
						<div class="card">
							<div class="card-body">
								<div class="media mb-3">
									<a href="#" class="mr-3 align-self-center">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded" width="44" height="44" alt="">
									</a>

									<div class="media-body">
										<h5 class="media-title font-weight-semibold">Microsoft</h5>
										<ul class="list-inline list-inline-dotter text-muted mb-0">
											<li class="list-inline-item">IT Services</li>
										</ul>
									</div>

									<div class="ml-3 align-self-center">
										<ul class="list-inline mb-0">
											<li class="list-inline-item"><a href="#" class="btn bg-blue"><i class="icon-menu7 mr-2"></i> All positions</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-light"><i class="icon-plus2 mr-2"></i> Follow</a></li>
										</ul>											
									</div>
								</div>

								<p>Across a Global footprint, we believe we’re at our best when you’re at yours. From our diverse workforce, our flexible working policies to our creative work spaces, we embrace a culture of learning and sharing to develop our next stage growth. It’s in our hearts to push forward, to create a better future, to never rest and find new ways that help people communicate.</p>

								We are committed to developing the very best people by offering a flexible, motivating and inclusive workplace in which talent is truly recognised and rewarded. We respect, value and celebrate our people’s individual differences - we are not only multinational but multicultural too. That’s what we mean when we say Power to you.
							</div>
						</div>
						<!-- /company profile -->


						<!-- Similar jobs -->
						<h6 class="font-weight-semibold pt-2 mb-2">Similar jobs</h6>
						<div class="row">
							<div class="col-md-6">
								<div class="card card-body">
									<div class="media">
										<div class="mr-3">
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

										<div class="ml-3">
											<span class="badge bg-blue">New</span>
										</div>
									</div>
								</div>

								<div class="card card-body">
									<div class="media">
										<div class="mr-3">
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

										<div class="ml-3">
											<span class="badge bg-blue">New</span>
										</div>
									</div>
								</div>

								<div class="card card-body">
									<div class="media">
										<div class="mr-3">
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

										<div class="ml-3">
											<span class="text-muted">3 days ago</span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="card card-body">
									<div class="media">
										<div class="mr-3">
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

										<div class="ml-3">
											<span class="text-muted">4 days ago</span>
										</div>
									</div>
								</div>

								<div class="card card-body">
									<div class="media">
										<div class="mr-3">
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

										<div class="ml-3">
											<span class="text-muted">5 days ago</span>
										</div>
									</div>
								</div>

								<div class="card card-body">
									<div class="media">
										<div class="mr-3">
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

										<div class="ml-3">
											<span class="text-muted">6 days ago</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /similar jobs -->

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
