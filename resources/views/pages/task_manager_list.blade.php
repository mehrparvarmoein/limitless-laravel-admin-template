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
	<script src="../../../../global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/extensions/natural_sort.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/task_manager_list.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Task Manager</span> - List</h4>
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
							<a href="task_manager_list" class="breadcrumb-item">Task manager</a>
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

				<!-- Task manager table -->
				<div class="card">
					<div class="card-header bg-transparent header-elements-inline">
						<h6 class="card-title">Task manager</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<table class="table tasks-list table-lg">
						<thead>
							<tr>
								<th>#</th>
								<th>Period</th>
				                <th>Task Description</th>
				                <th>Priority</th>
				                <th>Latest update</th>
				                <th>Status</th>
				                <th>Assigned users</th>
								<th class="text-center text-muted" style="width: 30px;"><i class="icon-checkmark3"></i></th>
				            </tr>
						</thead>
						<tbody>
							<tr>
								<td>#25</td>
								<td>Today</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">New blog layout</a></div>
				                	<div class="text-muted">Grumbled ripely eternal sniffed the when hello less much..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-danger dropdown-toggle" data-toggle="dropdown">Blocker</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="22 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved" selected="selected">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#24</td>
								<td>Today</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Create UI design model</a></div>
				                	<div class="text-muted">One morning, when Gregor Samsa woke from troubled..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-danger dropdown-toggle" data-toggle="dropdown">Blocker</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="22 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#23</td>
								<td>Today</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">New icons set for an iOS app</a></div>
				                	<div class="text-muted">A collection of textile samples lay spread out on the table..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-primary dropdown-toggle" data-toggle="dropdown">Normal</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="22 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold" selected="selected">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#22</td>
								<td>Today</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Create ad campaign banners set</a></div>
				                	<div class="text-muted">That he had recently cut out of an illustrated magazine..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-primary dropdown-toggle" data-toggle="dropdown">Normal</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="22 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved" selected="selected">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
			                		<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
			                		<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
			                		<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
			                		<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#21</td>
								<td>Yesterday</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Edit the draft for the icons</a></div>
				                	<div class="text-muted">You've got to get enough sleep. Other travelling salesmen..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-orange dropdown-toggle" data-toggle="dropdown">High</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="21 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid" selected="selected">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#20</td>
								<td>Yesterday</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Fix validation issues and commit</a></div>
				                	<div class="text-muted">But who knows, maybe that would be the best thing for me..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-danger dropdown-toggle" data-toggle="dropdown">Blocker</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="22 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved" selected="selected">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#19</td>
								<td>Yesterday</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Support tickets list doesn't support commas</a></div>
				                	<div class="text-muted">I'd have gone up to the boss and told him just what i think..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-primary dropdown-toggle" data-toggle="dropdown">Normal</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="21 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed" selected="selected">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#18</td>
								<td>Yesterday</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Help Web devs with HTML integration</a></div>
				                	<div class="text-muted">Samsa was a travelling salesman - and above it there hung..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-success dropdown-toggle" data-toggle="dropdown">Low</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="21 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved" selected="selected">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#17</td>
								<td>2 days ago</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Another icon set</a></div>
				                	<div class="text-muted">A wonderful serenity has taken possession of my entire soul..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-success dropdown-toggle" data-toggle="dropdown">Low</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="20 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid" selected="selected">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#16</td>
								<td>2 days ago</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">iOS application design mockups</a></div>
				                	<div class="text-muted">Sweet mornings of spring which I enjoy with my whole heart..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-danger dropdown-toggle" data-toggle="dropdown">Blocker</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="21 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#15</td>
								<td>2 days ago</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">UI/UX design review</a></div>
				                	<div class="text-muted">I am alone, and feel the charm of existence in this spot..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-primary dropdown-toggle" data-toggle="dropdown">Normal</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="20 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold" selected="selected">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#14</td>
								<td>2 days ago</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Marketing campaign review</a></div>
				                	<div class="text-muted">Which was created for the bliss of souls like mine..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-success dropdown-toggle" data-toggle="dropdown">Low</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="20 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#13</td>
								<td>2 days ago</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Fix website issues on mobile</a></div>
				                	<div class="text-muted">I am so happy, my dear friend, so absorbed in the exquisite..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-orange dropdown-toggle" data-toggle="dropdown">High</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="21 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid" selected="selected">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#12</td>
								<td>Last week</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Add updated responsive styles</a></div>
				                	<div class="text-muted">I should be incapable of drawing a single stroke at the present..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-primary dropdown-toggle" data-toggle="dropdown">Normal</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="17 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#11</td>
								<td>Last week</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Merge latest changes</a></div>
				                	<div class="text-muted">When, while the lovely valley teems with vapour around me..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-danger dropdown-toggle" data-toggle="dropdown">Blocker</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="16 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix" selected="selected">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#10</td>
								<td>Last week</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Create landing page for a new app</a></div>
				                	<div class="text-muted">A few stray gleams steal into the inner sanctuary, I throw..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-orange dropdown-toggle" data-toggle="dropdown">High</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="17 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#9</td>
								<td>Last week</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Update JS code in app.js file</a></div>
				                	<div class="text-muted">When I hear the buzz of the little world among the stalks..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-orange dropdown-toggle" data-toggle="dropdown">High</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="15 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold" selected="selected">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#8</td>
								<td>Last week</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Combine .js files in /app/js/</a></div>
				                	<div class="text-muted">Insects and flies, then I feel the presence of the Almighty..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-primary dropdown-toggle" data-toggle="dropdown">Normal</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="14 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved" selected="selected">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#7</td>
								<td>Last week</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Create application Photoshop draft</a></div>
				                	<div class="text-muted">Who formed us in his own image, and the breath of that universal..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-danger dropdown-toggle" data-toggle="dropdown">Blocker</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="20 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid" selected="selected">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#6</td>
								<td>Last week</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Cartoon characters for app ads</a></div>
				                	<div class="text-muted">My friend, when darkness overspreads my eyes, and heaven..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-primary dropdown-toggle" data-toggle="dropdown">Normal</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="17 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold" selected="selected">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#5</td>
								<td>Last week</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Google AdWords campain graphics</a></div>
				                	<div class="text-muted">Seem to dwell in my soul and absorb its power, like the form..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-success dropdown-toggle" data-toggle="dropdown">Low</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="18 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid" selected="selected">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#4</td>
								<td>Last week</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Monthly statistics report</a></div>
				                	<div class="text-muted">I sink under the weight of the splendour of these visions..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-danger dropdown-toggle" data-toggle="dropdown">Blocker</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="19 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#3</td>
								<td>Last week</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Create invoice template</a></div>
				                	<div class="text-muted">Far far away, behind the word mountains, far from the..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-orange dropdown-toggle" data-toggle="dropdown">High</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="20 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved" selected="selected">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#2</td>
								<td>Last week</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Add images to the product gallery</a></div>
				                	<div class="text-muted">Countries Vokalia and Consonantia, there live the blind..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-primary dropdown-toggle" data-toggle="dropdown">Normal</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="21 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed" selected="selected">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>

							<tr>
								<td>#1</td>
								<td>Last week</td>
				                <td>
				                	<div class="font-weight-semibold"><a href="task_manager_detailed">Update User profile page</a></div>
				                	<div class="text-muted">A small river named Duden flows by their place and supplies it..</div>
				                </td>
				                <td>
				                	<div class="btn-group">
										<a href="#" class="badge bg-success dropdown-toggle" data-toggle="dropdown">Low</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-danger border-danger"></span> Blocker</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-orange border-orange"></span> High priority</a>
											<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 bg-primary border-primary"></span> Normal priority</a>
											<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 bg-success border-success"></span> Low priority</a>
										</div>
									</div>
			                	</td>
				                <td>
				                	<div class="d-inline-flex align-items-center">
				                		<i class="icon-calendar2 mr-2"></i>
				                		<input type="text" class="form-control datepicker p-0 border-0 bg-transparent" value="19 January, 15">
				                	</div>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status" data-fouc>
				                		<option value="open">Open</option>
				                		<option value="hold">On hold</option>
				                		<option value="resolved">Resolved</option>
				                		<option value="dublicate">Dublicate</option>
				                		<option value="invalid">Invalid</option>
				                		<option value="wontfix">Wontfix</option>
				                		<option value="closed">Closed</option>
				                	</select>
				                </td>
				                <td>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt=""></a>
				                	<a href="#" class="btn btn-icon bg-transparent btn-sm border-slate-300 text-slate rounded-round border-dashed"><i class="icon-plus22"></i></a>
				                </td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu9"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
												<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
												<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
											</div>
										</li>
									</div>
								</td>
				            </tr>
						</tbody>
					</table>
				</div>
				<!-- /task manager table -->

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
