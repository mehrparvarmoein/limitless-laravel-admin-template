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

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/task_manager_grid.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Task Manager</span> - Grid</h4>
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
							<a href="task_manager_grid" class="breadcrumb-item">Task manager</a>
							<span class="breadcrumb-item active">Grid</span>
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
				<div class="d-flex align-items-start flex-column flex-md-row">

					<!-- Left content -->
					<div class="w-100 overflow-auto order-2 order-md-1">

						<!-- Filter toolbar -->
						<div class="navbar navbar-expand-lg navbar-light navbar-component rounded">
							<div class="text-center d-lg-none w-100">
								<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-filter">
									<i class="icon-unfold mr-2"></i>
									Filters
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-filter">
								<span class="navbar-text font-weight-semibold mr-3">
									Filter:
								</span>

								<ul class="navbar-nav flex-wrap">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-sort-time-asc mr-2"></i>
											By date
										</a>

										<div class="dropdown-menu">
											<a href="#" class="dropdown-item">Show all</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">Today</a>
											<a href="#" class="dropdown-item">Yesterday</a>
											<a href="#" class="dropdown-item">This week</a>
											<a href="#" class="dropdown-item">This month</a>
											<a href="#" class="dropdown-item">This year</a>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-sort-amount-desc mr-2"></i>
											By status
										</a>

										<div class="dropdown-menu">
											<a href="#" class="dropdown-item">Show all</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">Open</a>
											<a href="#" class="dropdown-item">On hold</a>
											<a href="#" class="dropdown-item">Resolved</a>
											<a href="#" class="dropdown-item">Closed</a>
											<a href="#" class="dropdown-item">Duplicate</a>
											<a href="#" class="dropdown-item">Invalid</a>
											<a href="#" class="dropdown-item">Wontfix</a>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-sort-numeric-asc mr-2"></i>
											By priority
										</a>

										<div class="dropdown-menu">
											<a href="#" class="dropdown-item">Show all</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">Highest</a>
											<a href="#" class="dropdown-item">High</a>
											<a href="#" class="dropdown-item">Normal</a>
											<a href="#" class="dropdown-item">Low</a>
										</div>
									</li>
								</ul>

								<span class="navbar-text font-weight-semibold mr-3 ml-md-auto">
									View mode:
								</span>

								<div class="form-check form-check-switchery form-check-switchery-double mb-3 mb-lg-0">
									<label class="form-check-label">
										List
										<input type="checkbox" class="form-input-switchery" checked data-fouc>
										Grid
									</label>
								</div>
							</div>
						</div>
						<!-- /filter toolbar -->


						<!-- Task grid -->
						<div class="row">
							<div class="col-xl-6">
								<div class="card border-left-3 border-left-success-400 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#24. Create UI design model</a></h6>
												<p class="mb-3">One morning, when Gregor Samsa woke from troubled..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">28 January, 2015</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Normal</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Eternity app</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">23 hours</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Open</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item active">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card border-left-3 border-left-danger rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#23. New icons set for an iOS app</a></h6>
												<p class="mb-3">A collection of textile samples lay spread out on the table..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">20 January, 2015</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge badge-danger align-top dropdown-toggle" data-toggle="dropdown">Blocker</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Eternity app</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">18 hours</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">On hold</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item active">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card border-left-3 border-left-grey-300 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#22. Create ad campaign banners set</a></h6>
												<p class="mb-3">That he had recently cut out of an illustrated magazine..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">10 January, 2015</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-grey-300 align-top dropdown-toggle" data-toggle="dropdown">Low</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Singular website</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">22 hours</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Resolved</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item active">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card border-left-3 border-left-success-400 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#21. Edit the draft for the icons</a></h6>
												<p class="mb-3">You've got to get enough sleep. Other travelling salesmen..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">4 January, 2015</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Normal</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Corelius app</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">27 hours</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Invalid</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item active">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card border-left-3 border-left-warning-400 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#20. Fix validation issues and commit</a></h6>
												<p class="mb-3">But who knows, maybe that would be the best thing for me..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">28 December, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-warning-400 align-top dropdown-toggle" data-toggle="dropdown">High</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Singular app</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">18 hours</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Resolved</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item active">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card border-left-3 border-left-grey-300 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#19. Support tickets list doesn't support commas</a></h6>
												<p class="mb-3">I'd have gone up to the boss and told him just what i think..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">20 November, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-grey-300 align-top dropdown-toggle" data-toggle="dropdown">Low</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Singular app</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">30 hours</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Closed</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item active">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="text-center text-muted content-divider mb-3">
							<span class="p-2">Yesterday</span>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card border-left-3 border-left-grey-300 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#18. Help Web devs with HTML integration</a></h6>
												<p class="mb-3">Samsa was a travelling salesman - and above it there hung..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">18 November, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-grey-300 align-top dropdown-toggle" data-toggle="dropdown">Low</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Corelius app</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">31 hours</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Resolved</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item active">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card border-left-3 border-left-warning-400 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#17. Another icon set</a></h6>
												<p class="mb-3">A wonderful serenity has taken possession of my entire soul..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">12 November, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-warning-400 align-top dropdown-toggle" data-toggle="dropdown">High</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Aquincum app</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">32 hours</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Invalid</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item active">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card border-left-3 border-left-danger rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#16. iOS application design mockups</a></h6>
												<p class="mb-3">Sweet mornings of spring which I enjoy with my whole heart..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">10 November, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-danger align-top dropdown-toggle" data-toggle="dropdown">Blocker</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Backend stuff</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">44 hours</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Open</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item active">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card border-left-3 border-left-warning-400 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#15. UI/UX design review</a></h6>
												<p class="mb-3">I am alone, and feel the charm of existence in this spot..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">20 October, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-warning-400 align-top dropdown-toggle" data-toggle="dropdown">High</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Singular app</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">48 hours</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">On hold</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item active">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card border-left-3 border-left-success-400 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#14. Marketing campaign review</a></h6>
												<p class="mb-3">Which was created for the bliss of souls like mine..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">11 October, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Normal</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Backend stuff</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">2 days</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Open</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item active">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card border-left-3 border-left-danger rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#13. Fix website issues on mobile</a></h6>
												<p class="mb-3">I am so happy, my dear friend, so absorbed in the exquisite..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">16 September, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-danger align-top dropdown-toggle" data-toggle="dropdown">Blocker</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Frontend changes</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">2 days</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Invalid</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item active">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card border-left-3 border-left-grey-300 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#12. Add updated responsive styles</a></h6>
												<p class="mb-3">I should be incapable of drawing a single stroke at the present..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">10 September, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-grey-300 align-top dropdown-toggle" data-toggle="dropdown">Low</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Blog posts</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">2 days</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Open</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item active">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card border-left-3 border-left-success-400 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#11. Merge latest changes</a></h6>
												<p class="mb-3">When, while the lovely valley teems with vapour around me..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">4 September, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Normal</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Blog posts</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">2 days</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Wontfix</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item active">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card border-left-3 border-left-success-400 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#10. Create landing page for a new app</a></h6>
												<p class="mb-3">A few stray gleams steal into the inner sanctuary, I throw..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">27 August, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Normal</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Backend stuff</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">3 days</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Open</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item active">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card border-left-3 border-left-danger rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#9. Update JS code in app.js file</a></h6>
												<p class="mb-3">When I hear the buzz of the little world among the stalks..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">20 August, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-danger align-top dropdown-toggle" data-toggle="dropdown">Blocker</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Dashboard</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">3 days</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">On hold</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item active">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="text-center text-muted content-divider mb-3">
							<span class="p-2">Apr 21, 10:38 am</span>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card border-left-3 border-left-warning-400 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#8. Combine .js files in /app/js/</a></h6>
												<p class="mb-3">Insects and flies, then I feel the presence of the Almighty..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">9 August, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-warning-400 align-top dropdown-toggle" data-toggle="dropdown">High</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Aquincum project</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">3 days</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Resolved</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item active">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card border-left-3 border-left-success-400 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#7. Create application Photoshop draft</a></h6>
												<p class="mb-3">Who formed us in his own image, and the breath of that universal..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">2 August, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Normal</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Dashboard</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">3 days</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Invalid</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item active">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card border-left-3 border-left-grey-300 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#6. Cartoon characters for app ads</a></h6>
												<p class="mb-3">My friend, when darkness overspreads my eyes, and heaven..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">29 July, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-grey-300 align-top dropdown-toggle" data-toggle="dropdown">Low</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Blog posts</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">4 days</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">On hold</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item active">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card border-left-3 border-left-danger rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#5. Google AdWords campain graphics</a></h6>
												<p class="mb-3">Seem to dwell in my soul and absorb its power, like the form..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">25 July, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-danger align-top dropdown-toggle" data-toggle="dropdown">Blocker</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Personal</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">4 days</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Invalid</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item active">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card border-left-3 border-left-warning-400 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#4. Monthly statistics report</a></h6>
												<p class="mb-3">I sink under the weight of the splendour of these visions..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">14 July, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-warning-400 align-top dropdown-toggle" data-toggle="dropdown">High</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Dashboard</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">4 days</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Open</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item active">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card border-left-3 border-left-success-400 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#3. Create invoice template</a></h6>
												<p class="mb-3">Far far away, behind the word mountains, far from the..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">9 July, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Normal</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Corporate website</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">5 days</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Resolved</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item active">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="card border-left-3 border-left-grey-300 rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#2. Add images to the product gallery</a></h6>
												<p class="mb-3">Countries Vokalia and Consonantia, there live the blind..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">24 June, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-grey-300 align-top dropdown-toggle" data-toggle="dropdown">Low</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">Noname app</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">5 days</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Closed</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item active">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="card border-left-3 border-left-danger rounded-left-0">
									<div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6><a href="task_manager_detailed">#1. Update User profile page</a></h6>
												<p class="mb-3">A small river named Duden flows by their place and supplies it..</p>

							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#">
							                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
						                		</a>
							                	<a href="#" class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
											</div>

											<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
												<li><span class="text-muted">1 June, 2014</span></li>
												<li class="dropdown">
							                		Priority: &nbsp; 
													<a href="#" class="badge bg-danger align-top dropdown-toggle" data-toggle="dropdown">Blocker</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-warning-400"></span> High priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success"></span> Normal priority</a>
														<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey-300"></span> Low priority</a>
													</div>
												</li>
												<li><a href="#">NoName app</a></li>
											</ul>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>Due: <span class="font-weight-semibold">6 days</span></span>

										<ul class="list-inline mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Open</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item active">Open</a>
													<a href="#" class="dropdown-item">On hold</a>
													<a href="#" class="dropdown-item">Resolved</a>
													<a href="#" class="dropdown-item">Closed</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">Dublicate</a>
													<a href="#" class="dropdown-item">Invalid</a>
													<a href="#" class="dropdown-item">Wontfix</a>
												</div>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
													<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
													<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /task grid -->


						<!-- Pagination -->
						<div class="d-flex justify-content-center mt-3 mb-3">
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
					<!-- /left content -->


					<!-- Right sidebar component -->
					<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

						<!-- Sidebar content -->
						<div class="sidebar-content">

							<!-- Search -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="card-title font-weight-semibold">Search task</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group-feedback form-group-feedback-right">
											<input type="search" class="form-control" placeholder="type and hit Enter">
											<div class="form-control-feedback">
												<i class="icon-search4 font-size-base text-muted"></i>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /search -->


							<!-- Actions  -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="card-title font-weight-semibold">Actions</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<div class="row row-tile no-gutters shadow-0 border">
										<div class="col-6">
											<button type="button" class="btn btn-light btn-block btn-float m-0">
												<i class="icon-github4 icon-2x"></i>
												<span>Github</span>
											</button>

											<button type="button" class="btn btn-light btn-block btn-float m-0">
												<i class="icon-dropbox text-blue-400 icon-2x"></i>
												<span>Dropbox</span>
											</button>
										</div>
										
										<div class="col-6">
											<button type="button" class="btn btn-light btn-block btn-float m-0">
												<i class="icon-dribbble3 text-pink-400 icon-2x"></i>
												<span>Dribbble</span>
											</button>

											<button type="button" class="btn btn-light btn-block btn-float m-0">
												<i class="icon-google-drive text-success-400 icon-2x"></i>
												<span>Google Drive</span>
											</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /actions -->


							<!-- Navigation -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="card-title font-weight-semibold">Navigation</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body p-0">
									<div class="nav nav-sidebar mb-2">
										<li class="nav-item-header">Actions</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-googleplus5"></i>
												Create task
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-portfolio"></i>
												Create project
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-compose"></i>
												Edit task list
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-user-plus"></i>
												Assign users
												<span class="badge bg-success ml-auto">94 online</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-collaboration"></i>
												Create team
											</a>
										</li>
										<li class="nav-item-header">Tasks</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-files-empty"></i>
												All tasks
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-file-plus"></i>
												Active tasks
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-file-check"></i>
												Closed tasks
											</a>
										</li>
										<li class="nav-item-divider"></li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-reading"></i>
												Assigned to me
												<span class="badge bg-info badge-pill ml-auto">86</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-make-group"></i>
												Assigned to my team
												<span class="badge bg-info badge-pill ml-auto">47</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-cog3"></i>
												Settings
											</a>
										</li>
									</div>
								</div>
							</div>
							<!-- /navigation -->


							<!-- Assigned users -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="card-title font-weight-semibold">Assigned users</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
				                	</div>
								</div>

								<div class="card-body">
									<ul class="media-list">
										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">James Alexander</a>
												<div class="font-size-sm text-muted">Santa Ana, CA.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-success"></span>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">Jeremy Victorino</a>
												<div class="font-size-sm text-muted">Dowagiac, MI.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-danger"></span>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">Margo Baker</a>
												<div class="font-size-sm text-muted">Kasaan, AK.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-success"></span>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">Beatrix Diaz</a>
												<div class="font-size-sm text-muted">Neenah, WI.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-warning"></span>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold">Richard Vango</a>
												<div class="font-size-sm text-muted">Grapevine, TX.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-grey-400"></span>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /assigned users -->


							<!-- Revisions -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Revisions</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="media-list">
										<li class="media">
											<div class="mr-3">
												<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon">
													<i class="icon-git-pull-request"></i>
												</a>
											</div>

											<div class="media-body">
												Drop the IE <a href="#">specific hacks</a> for temporal inputs
												<div class="text-muted font-size-sm">4 minutes ago</div>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon">
													<i class="icon-git-commit"></i>
												</a>
											</div>
											
											<div class="media-body">
												Add full font overrides for popovers and tooltips
												<div class="text-muted font-size-sm">36 minutes ago</div>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon">
													<i class="icon-git-branch"></i>
												</a>
											</div>
											
											<div class="media-body">
												<a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
												<div class="text-muted font-size-sm">2 hours ago</div>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon">
													<i class="icon-git-merge"></i>
												</a>
											</div>
											
											<div class="media-body">
												<a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
												<div class="text-muted font-size-sm">Dec 18, 18:36</div>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon">
													<i class="icon-git-pull-request"></i>
												</a>
											</div>
											
											<div class="media-body">
												Have Carousel ignore keyboard events
												<div class="text-muted font-size-sm">Dec 12, 05:46</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /revisions -->


							<!-- Completeness stats -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Completeness stats</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="list-unstyled mb-0">
							            <li class="mb-3">
							                <div class="d-flex align-items-center mb-1">Blockers <span class="text-muted ml-auto">50%</span></div>
											<div class="progress" style="height: 0.125rem;">
												<div class="progress-bar bg-danger" style="width: 50%">
													<span class="sr-only">50% Complete</span>
												</div>
											</div>
							            </li>

							            <li class="mb-3">
							                <div class="d-flex align-items-center mb-1">High priority <span class="text-muted ml-auto">70%</span></div>
											<div class="progress" style="height: 0.125rem;">
												<div class="progress-bar bg-warning-400" style="width: 70%">
													<span class="sr-only">70% Complete</span>
												</div>
											</div>
							            </li>

							            <li class="mb-3">
							                <div class="d-flex align-items-center mb-1">Normal priority <span class="text-muted ml-auto">80%</span></div>
											<div class="progress" style="height: 0.125rem;">
												<div class="progress-bar bg-success-400" style="width: 80%">
													<span class="sr-only">80% Complete</span>
												</div>
											</div>
							            </li>

							            <li>
							                <div class="d-flex align-items-center mb-1">Low priority <span class="text-muted ml-auto">60%</span></div>
											<div class="progress" style="height: 0.125rem;">
												<div class="progress-bar bg-grey-400" style="width: 60%">
													<span class="sr-only">60% Complete</span>
												</div>
											</div>
							            </li>
							        </ul>
								</div>
							</div>
							<!-- /completeness stats -->

						</div>
						<!-- /sidebar content -->

					</div>
					<!-- /right sidebar component -->

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
