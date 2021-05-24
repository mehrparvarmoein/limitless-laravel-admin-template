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
	<script src="../../../../global_assets/js/plugins/loaders/progressbar.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/components_progress.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Components</span> - Progress</h4>
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
							<a href="components_progress" class="breadcrumb-item">Components</a>
							<span class="breadcrumb-item active">Progress</span>
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

				<!-- Content loaders spinners -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Content loaders
					</h6>
					<span class="text-muted d-block">Animated <code>content</code> icon loaders</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-info text-center">
							<h6 class="mb-0 font-weight-semibold">Content loading spinner 1</h6>
							<p class="mb-3 text-muted">Using <code>icon-spinner spinner</code> classes</p>

							<div>
								<button type="button" class="btn btn-light" id="spinner-light">
									<i class="icon-spinner spinner mr-2"></i>
									Light overlay
								</button>

								<button type="button" class="btn bg-teal-400 ml-2" id="spinner-dark">
									<i class="icon-spinner spinner mr-2"></i>
									Dark overlay
								</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-info text-center">
							<h6 class="mb-0 font-weight-semibold">Content loading spinner 2</h6>
							<p class="mb-3 text-muted">Using <code>icon-spinner2 spinner</code> classes</p>

							<div>
								<button type="button" class="btn btn-light" id="spinner-light-2">
									<i class="icon-spinner2 spinner mr-2"></i>
									Light overlay
								</button>

								<button type="button" class="btn bg-teal-400 ml-2" id="spinner-dark-2">
									<i class="icon-spinner2 spinner mr-2"></i>
									Dark overlay
								</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-info text-center">
							<h6 class="mb-0 font-weight-semibold">Content loading spinner 3</h6>
							<p class="mb-3 text-muted">Using <code>icon-spinner3 spinner</code> classes</p>

							<div>
								<button type="button" class="btn btn-light" id="spinner-light-3">
									<i class="icon-spinner3 spinner mr-2"></i>
									Light overlay
								</button>

								<button type="button" class="btn bg-teal-400 ml-2" id="spinner-dark-3">
									<i class="icon-spinner3 spinner mr-2"></i>
									Dark overlay
								</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-info text-center">
							<h6 class="mb-0 font-weight-semibold">Content loading spinner 4</h6>
							<p class="mb-3 text-muted">Using <code>icon-spinner4 spinner</code> classes</p>

							<div>
								<button type="button" class="btn btn-light" id="spinner-light-4">
									<i class="icon-spinner4 spinner mr-2"></i>
									Light overlay
								</button>

								<button type="button" class="btn bg-teal-400 ml-2" id="spinner-dark-4">
									<i class="icon-spinner4 spinner mr-2"></i>
									Dark overlay
								</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-info text-center">
							<h6 class="mb-0 font-weight-semibold">Content loading spinner 5</h6>
							<p class="mb-3 text-muted">Using <code>icon-spinner6 spinner</code> classes</p>

							<div>
								<button type="button" class="btn btn-light" id="spinner-light-5">
									<i class="icon-spinner6 spinner mr-2"></i>
									Light overlay
								</button>

								<button type="button" class="btn bg-teal-400 ml-2" id="spinner-dark-5">
									<i class="icon-spinner6 spinner mr-2"></i>
									Dark overlay
								</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-info text-center">
							<h6 class="mb-0 font-weight-semibold">Content loading spinner 6</h6>
							<p class="mb-3 text-muted">Using <code>icon-spinner9 spinner</code> classes</p>

							<div>
								<button type="button" class="btn btn-light" id="spinner-light-6">
									<i class="icon-spinner9 spinner mr-2"></i>
									Light overlay
								</button>

								<button type="button" class="btn bg-teal-400 ml-2" id="spinner-dark-6">
									<i class="icon-spinner9 spinner mr-2"></i>
									Dark overlay
								</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-info text-center">
							<h6 class="mb-0 font-weight-semibold">Content loading spinner 7</h6>
							<p class="mb-3 text-muted">Using <code>icon-spinner10 spinner</code> classes</p>

							<div>
								<button type="button" class="btn btn-light" id="spinner-light-7">
									<i class="icon-spinner10 spinner mr-2"></i>
									Light overlay
								</button>

								<button type="button" class="btn bg-teal-400 ml-2" id="spinner-dark-7">
									<i class="icon-spinner10 spinner mr-2"></i>
									Dark overlay
								</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-info text-center">
							<h6 class="mb-0 font-weight-semibold">Content loading spinner 8</h6>
							<p class="mb-3 text-muted">Using <code>icon-spinner11 spinner</code> classes</p>

							<div>
								<button type="button" class="btn btn-light" id="spinner-light-8">
									<i class="icon-spinner11 spinner mr-2"></i>
									Light overlay
								</button>

								<button type="button" class="btn bg-teal-400 ml-2" id="spinner-dark-8">
									<i class="icon-spinner11 spinner mr-2"></i>
									Dark overlay
								</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-info text-center">
							<h6 class="mb-0 font-weight-semibold">Content loading spinner 9</h6>
							<p class="mb-3 text-muted">Using <code>icon-sync spinner</code> classes</p>

							<div>
								<button type="button" class="btn btn-light" id="spinner-light-9">
									<i class="icon-sync spinner mr-2"></i>
									Light overlay
								</button>

								<button type="button" class="btn bg-teal-400 ml-2" id="spinner-dark-9">
									<i class="icon-sync spinner mr-2"></i>
									Dark overlay
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /content loading spinners -->



				<!-- Page loaders title -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Page loaders
					</h6>
					<span class="text-muted d-block">Themes for pace.js extension</span>
				</div>
				<!-- /page loaders title -->


				<!-- Bar themes -->
				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="mb-0 font-weight-semibold">Small bar theme</h6>
							<p class="mb-3 text-muted">By including <code>theme_bar_sm.scss</code> file</p>

							<div>
								<div class="pace-demo p-3 w-auto h-auto">
									<div class="theme_bar_sm">
										<div class="pace_progress" data-progress-text="60%" data-progress="60" style="width: 60%;"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="mb-0 font-weight-semibold">Small bar with text</h6>
							<p class="mb-3 text-muted">Uncomment piece of CSS code to show text</p>

							<div>
								<div class="pace-demo w-auto h-auto p-3 pb-4" style="padding-bottom: 30px;">
									<div class="theme_bar_sm">
										<div class="pace_progress" data-progress-text="60%" data-progress="60" style="width: 60%;">60%</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="mb-0 font-weight-semibold">Default bar theme</h6>
							<p class="mb-3 text-muted">By including <code>theme_bar.scss</code> file</p>

							<div>
								<div class="pace-demo w-auto h-auto p-3">
									<div class="theme_bar"><div class="pace_progress" data-progress-text="60%" data-progress="60" style="width: 60%;"></div></div>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="mb-0 font-weight-semibold">Default bar with text</h6>
							<p class="mb-3 text-muted">Uncomment piece of CSS code to show text</p>

							<div>
								<div class="pace-demo w-auto h-auto p-3 pb-4" style="padding-bottom: 30px;">
									<div class="theme_bar"><div class="pace_progress" data-progress-text="60%" data-progress="60" style="width: 60%;">60%</div></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="mb-0 font-weight-semibold">Large bar theme</h6>
							<p class="mb-3 text-muted">By including <code>theme_bar_lg.scss</code> file</p>

							<div>
								<div class="pace-demo w-auto h-auto p-3">
									<div class="theme_bar_lg"><div class="pace_progress" data-progress-text="60%" data-progress="60" style="width: 60%;"></div></div>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="mb-0 font-weight-semibold">Large bar with text</h6>
							<p class="mb-3 text-muted">Uncomment piece of CSS code to show text</p>

							<div>
								<div class="pace-demo w-auto h-auto p-3 pb-4" style="padding-bottom: 30px;">
									<div class="theme_bar_lg"><div class="pace_progress" data-progress-text="60%" data-progress="60" style="width: 60%;">60%</div></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /bar themes -->


				<!-- Spinner themes -->
				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="mb-0 font-weight-semibold">Small Xbox theme</h6>
							<p class="mb-3 text-muted">By including <code>theme_xbox_sm.scss</code> file</p>

							<div>
								<div class="pace-demo">
									<div class="theme_xbox_sm">
										<div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
									</div>
								</div>

								<div class="pace-demo ml-2">
									<div class="theme_xbox_sm theme_xbox_with_text">
										<div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
										<span>60%</span>
									</div>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="mb-0 font-weight-semibold">Perspective theme</h6>
							<p class="mb-3 text-muted">By including <code>theme_perspective.scss</code> file</p>

							<div>
								<div class="pace-demo">
									<div class="theme_perspective">
										<div class="pace-progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
									</div>
								</div>

								<div class="pace-demo ml-2">
									<div class="theme_perspective theme_perspective_with_text">
										<div class="pace-progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
										<span>60%</span>
									</div>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="mb-0 font-weight-semibold">Corners theme</h6>
							<p class="mb-3 text-muted">By including <code>theme_corners.scss</code> file</p>

							<div>
								<div class="pace-demo">
									<div class="theme_corners">
										<div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
									</div>
								</div>

								<div class="pace-demo ml-2">
									<div class="theme_corners theme_corners_with_text">
										<div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
										<span>60%</span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="mb-0 font-weight-semibold">Default Xbox theme</h6>
							<p class="mb-3 text-muted">By including <code>theme_xbox.scss</code> file</p>

							<div>
								<div class="pace-demo">
									<div class="theme_xbox">
										<div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
									</div>
								</div>

								<div class="pace-demo ml-2">
									<div class="theme_xbox theme_xbox_with_text">
										<div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
										<span>60%</span>
									</div>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="mb-0 font-weight-semibold">Squares theme</h6>
							<p class="mb-3 text-muted">By including <code>theme_squares.scss</code> file</p>

							<div>
								<div class="pace-demo">
									<div class="theme_squares">
										<div class="pace-progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
									</div>
								</div>

								<div class="pace-demo ml-2">
									<div class="theme_squares theme_squares_with_text">
										<div class="pace-progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
										<span>60%</span>
									</div>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="mb-0 font-weight-semibold">Radar theme</h6>
							<p class="mb-3 text-muted">By including <code>theme_radar.scss</code> file</p>

							<div>
								<div class="pace-demo">
									<div class="theme_radar">
										<div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
									</div>
								</div>

								<div class="pace-demo ml-2">
									<div class="theme_radar theme_radar_with_text">
										<div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
										<span>60%</span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="mb-0 font-weight-semibold">Large Xbox theme</h6>
							<p class="mb-3 text-muted">By including <code>theme_xbox_lg.scss</code> file</p>

							<div>
								<div class="pace-demo">
									<div class="theme_xbox_lg">
										<div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
									</div>
								</div>

								<div class="pace-demo ml-2">
									<div class="theme_xbox_lg theme_xbox_with_text">
										<div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
										<span>60%</span>
									</div>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="mb-0 font-weight-semibold">Tail theme</h6>
							<p class="mb-3 text-muted">By including <code>theme_tail.scss</code> file</p>

							<div>
								<div class="pace-demo">
									<div class="theme_tail">
										<div class="pace_progress" data-progress-text="60%" data-progress="60" style="width: 60%;"></div>
										<div class="pace_activity"></div>
									</div>
								</div>

								<div class="pace-demo ml-2">
									<div class="theme_tail theme_tail_with_text">
										<div class="pace_progress" data-progress-text="60%" data-progress="60" style="width: 60%;"></div>
										<div class="pace_activity"></div>
										<span>60%</span>
									</div>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-danger text-center">
							<h6 class="mb-0 font-weight-semibold">Circle tail theme</h6>
							<p class="mb-3 text-muted">By including <code>theme_tail_circle.scss</code> file</p>

							<div>
								<div class="pace-demo">
									<div class="theme_tail theme_tail_circle">
										<div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
									</div>
								</div>

								<div class="pace-demo ml-2">
									<div class="theme_tail theme_tail_circle theme_tail_with_text">
										<div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
										<div class="pace_activity"></div>
										<span>60%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /spinner themes -->



				<!-- Progress bars title -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Progress bars
					</h6>
					<span class="text-muted d-block">Basic progress bar options</span>
				</div>
				<!-- /progress bars title -->


				<!-- Progress bar options -->
				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Default progress bar</h6>
								<p class="mb-3 text-muted">Example of a basic progress bar</p>
							</div>

							<div class="progress">
								<div class="progress-bar" style="width: 50%">
									<span class="sr-only">50% Complete</span>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Progress bar with label</h6>
								<p class="mb-3 text-muted">Remove <code>.sr-only</code> class to show label</p>
							</div>

							<div class="progress">
								<div class="progress-bar bg-teal" style="width: 85%">
									<span>85% Complete</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Striped progress bar</h6>
								<p class="mb-3 text-muted">Using <code>.progress-bar-striped</code> class</p>
							</div>

							<div class="progress">
								<div class="progress-bar progress-bar-striped" style="width: 50%">
									<span class="sr-only">50% Complete</span>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Rounded progress bar</h6>
								<p class="mb-3 text-muted">Using <code>.rounded-round</code> class</p>
							</div>

							<div class="progress rounded-round">
								<div class="progress-bar bg-warning" style="width: 85%">
									<span>85% Complete</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Animated progress bar</h6>
								<p class="mb-3 text-muted">Using <code>.progress-bar-animated</code> classes</p>
							</div>

							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%">
									<span class="sr-only">50% Complete</span>
								</div>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Stacked progress bars</h6>
								<p class="mb-3 text-muted">Multiple bars in the <code>.progress</code> block</p>
							</div>

							<div class="progress">
								<div class="progress-bar bg-success-400" style="width: 20%">
									<span class="sr-only">20% Complete</span>
								</div>

								<div class="progress-bar bg-danger" style="width: 30%">
									<span class="sr-only">30% Complete (danger)</span>
								</div>

								<div class="progress-bar bg-info progress-bar-striped progress-bar-animated" style="width: 40%">
									<span>40%</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /progress bar options -->


				<!-- Progress bar contextual alternatives -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Contextual alternatives
					</h6>
					<span class="text-muted d-block">Predefined progress bar colors</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Basic progress bars</h6>
								<p class="mb-3 text-muted">Progress bars contextual alternatives</p>
							</div>

							<div class="progress mb-3">
								<div class="progress-bar bg-dark" style="width: 15%">
									<span class="sr-only">15% Complete</span>
								</div>
							</div>

							<div class="progress mb-3">
								<div class="progress-bar" style="width: 30%">
									<span class="sr-only">30% Complete</span>
								</div>
							</div>

							<div class="progress mb-3">
								<div class="progress-bar bg-danger" style="width: 45%">
									<span class="sr-only">45% Complete</span>
								</div>
							</div>

							<div class="progress mb-3">
								<div class="progress-bar bg-success" style="width: 60%">
									<span class="sr-only">60% Complete</span>
								</div>
							</div>

							<div class="progress mb-3">
								<div class="progress-bar bg-warning" style="width: 75%">
									<span class="sr-only">75% Complete</span>
								</div>
							</div>

							<div class="progress">
								<div class="progress-bar bg-info" style="width: 90%">
									<span class="sr-only">90% Complete</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Striped progress bars</h6>
								<p class="mb-3 text-muted">Progress bars contextual alternatives</p>
							</div>

							<div class="progress mb-3">
								<div class="progress-bar progress-bar-striped bg-dark" style="width: 15%">
									<span class="sr-only">15% Complete</span>
								</div>
							</div>

							<div class="progress mb-3">
								<div class="progress-bar progress-bar-striped" style="width: 30%">
									<span class="sr-only">30% Complete</span>
								</div>
							</div>

							<div class="progress mb-3">
								<div class="progress-bar progress-bar-striped bg-danger" style="width: 45%">
									<span class="sr-only">45% Complete</span>
								</div>
							</div>

							<div class="progress mb-3">
								<div class="progress-bar progress-bar-striped bg-success" style="width: 60%">
									<span class="sr-only">60% Complete</span>
								</div>
							</div>

							<div class="progress mb-3">
								<div class="progress-bar progress-bar-striped bg-warning" style="width: 75%">
									<span class="sr-only">75% Complete</span>
								</div>
							</div>

							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-info" style="width: 90%">
									<span class="sr-only">90% Complete</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Animated progress bars</h6>
								<p class="mb-3 text-muted">Progress bars contextual alternatives</p>
							</div>

							<div class="progress mb-3">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width: 15%">
									<span class="sr-only">15% Complete</span>
								</div>
							</div>

							<div class="progress mb-3">
								<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 30%">
									<span class="sr-only">30% Complete</span>
								</div>
							</div>

							<div class="progress mb-3">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 45%">
									<span class="sr-only">45% Complete</span>
								</div>
							</div>

							<div class="progress mb-3">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 60%">
									<span class="sr-only">60% Complete</span>
								</div>
							</div>

							<div class="progress mb-3">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 75%">
									<span class="sr-only">75% Complete</span>
								</div>
							</div>

							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 90%">
									<span class="sr-only">90% Complete</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /progress bar contextual alternatives -->



				<!-- Progress bar heights -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Bar height variations
					</h6>
					<span class="text-muted d-block">How progress bars height is handled</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Basic progress bars</h6>
								<p class="mb-3 text-muted">Basic bars with height variations</p>
							</div>

							<div class="progress mb-3" style="height: 1.375rem;">
								<div class="progress-bar bg-dark" style="width: 18%">
									<span class="sr-only">18% Complete</span>
								</div>
							</div>

							<div class="progress mb-3" style="height: 0.875rem;">
								<div class="progress-bar" style="width: 36%">
									<span class="sr-only">36% Complete</span>
								</div>
							</div>

							<div class="progress mb-3" style="height: 0.625rem;">
								<div class="progress-bar bg-danger" style="width: 54%">
									<span class="sr-only">54% Complete</span>
								</div>
							</div>

							<div class="progress mb-3" style="height: 0.375rem;">
								<div class="progress-bar bg-success" style="width: 72%">
									<span class="sr-only">72% Complete</span>
								</div>
							</div>

							<div class="progress" style="height: 0.125rem;">
								<div class="progress-bar bg-indigo-400" style="width: 90%">
									<span class="sr-only">90% Complete</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Striped progress bars</h6>
								<p class="mb-3 text-muted">Striped bars with height variations</p>
							</div>

							<div class="progress mb-3" style="height: 1.375rem;">
								<div class="progress-bar progress-bar-striped bg-dark" style="width: 18%">
									<span class="sr-only">18% Complete</span>
								</div>
							</div>

							<div class="progress mb-3" style="height: 0.875rem;">
								<div class="progress-bar progress-bar-striped" style="width: 36%">
									<span class="sr-only">36% Complete</span>
								</div>
							</div>

							<div class="progress mb-3" style="height: 0.625rem;">
								<div class="progress-bar progress-bar-striped bg-danger" style="width: 54%">
									<span class="sr-only">54% Complete</span>
								</div>
							</div>

							<div class="progress mb-3" style="height: 0.375rem;">
								<div class="progress-bar progress-bar-striped bg-success" style="width: 72%">
									<span class="sr-only">72% Complete</span>
								</div>
							</div>

							<div class="progress" style="height: 0.125rem;">
								<div class="progress-bar progress-bar-striped bg-indigo-400" style="width: 90%">
									<span class="sr-only">90% Complete</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary">
							<div class="text-center">
								<h6 class="mb-0 font-weight-semibold">Animated progress bars</h6>
								<p class="mb-3 text-muted">Animated bars with height variations</p>
							</div>

							<div class="progress mb-3" style="height: 1.375rem;">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width: 18%">
									<span class="sr-only">18% Complete</span>
								</div>
							</div>

							<div class="progress mb-3" style="height: 0.875rem;">
								<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 36%">
									<span class="sr-only">36% Complete</span>
								</div>
							</div>

							<div class="progress mb-3" style="height: 0.625rem;">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 54%">
									<span class="sr-only">54% Complete</span>
								</div>
							</div>

							<div class="progress mb-3" style="height: 0.375rem;">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 72%">
									<span class="sr-only">72% Complete</span>
								</div>
							</div>

							<div class="progress" style="height: 0.125rem;">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-indigo-400" style="width: 90%">
									<span class="sr-only">90% Complete</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /progress bar heights -->



				<!-- Horizontal progress bars -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Horizontal bars
					</h6>
					<span class="text-muted d-block">Advanced <code>horizontal</code> bars</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Left progress bar</h6>
							<p class="mb-3 text-muted">Left animated progress bar</p>

							<div class="progress mb-3" id="h-default-basic">
								<div class="progress-bar" data-transitiongoal-backup="75" data-transitiongoal="75">
									<span class="sr-only">0%</span>
								</div>
							</div>

							<div>
								<button type="button" class="btn btn-primary" id="h-default-basic-start">Start</button>
								<button type="button" class="btn btn-danger ml-2" id="h-default-basic-reset">Reset</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Right progress bar</h6>
							<p class="mb-3 text-muted">Right animated progress bar</p>

							<div class="progress right mb-3" id="h-right-basic">
								<div class="progress-bar" data-transitiongoal-backup="75" data-transitiongoal="75">
									<span class="sr-only">0%</span>
								</div>
							</div>

							<div>
								<button type="button" class="btn btn-primary" id="h-right-basic-start">Start</button>
								<button type="button" class="btn btn-danger ml-2" id="h-right-basic-reset">Reset</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Left percentages</h6>
							<p class="mb-3 text-muted">Percentages display in the bar</p>

							<div class="progress mb-3" id="h-fill-basic">
								<div class="progress-bar" data-transitiongoal-backup="75" data-transitiongoal="75" style="width: 0%">
									<span class="sr-only">0%</span>
								</div>
							</div>

							<div>
								<button type="button" class="btn btn-primary" id="h-fill-basic-start">Start</button>
								<button type="button" class="btn btn-danger ml-2" id="h-fill-basic-reset">Reset</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Right percentages</h6>
							<p class="mb-3 text-muted">Percentages display in the bar</p>

							<div class="progress right mb-3" id="h-fill-basic-right">
								<div class="progress-bar" data-transitiongoal-backup="75" data-transitiongoal="75" style="width: 0%">
									<span class="sr-only">0%</span>
								</div>
							</div>

							<div>
								<button type="button" class="btn btn-primary" id="h-fill-basic-right-start">Start</button>
								<button type="button" class="btn btn-danger ml-2" id="h-fill-basic-right-reset">Reset</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Left custom text</h6>
							<p class="mb-3 text-muted">Text displays in progress bar</p>

							<div class="progress mb-3" id="h-fill-nonpercentage-basic">
								<div class="progress-bar" data-transitiongoal-backup="75" data-transitiongoal="75" style="width: 0%">
									<span class="sr-only">0%</span>
								</div>
							</div>

							<div>
								<button type="button" class="btn btn-primary" id="h-fill-nonpercentage-basic-start">Start</button>
								<button type="button" class="btn btn-danger ml-2" id="h-fill-nonpercentage-basic-reset">Reset</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Right custom text</h6>
							<p class="mb-3 text-muted">Text displays in progress bar</p>

							<div class="progress right mb-3" id="h-fill-nonpercentage-right-basic">
								<div class="progress-bar" data-transitiongoal-backup="75" data-transitiongoal="75" style="width: 0%">
									<span class="sr-only">0%</span>
								</div>
							</div>

							<div>
								<button type="button" class="btn btn-primary" id="h-fill-nonpercentage-right-basic-start">Start</button>
								<button type="button" class="btn btn-danger ml-2" id="h-fill-nonpercentage-right-basic-reset">Reset</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /horizontal progress bars -->



				<!-- Vertical progress bars -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Vertical bars
					</h6>
					<span class="text-muted d-block">Advanced <code>vertical</code> bars</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Top progress bars</h6>
							<p class="mb-3 text-muted">Top animated progress bars</p>

							<div class="mb-3" id="v-default-basic" style="height: 200px">
								<div class="progress vertical">
									<div class="progress-bar bg-primary" data-transitiongoal-backup="30" data-transitiongoal="30">
										<span class="sr-only">0%</span>
									</div>
								</div>

								<div class="progress vertical">
									<div class="progress-bar bg-danger" data-transitiongoal-backup="60" data-transitiongoal="60">
										<span class="sr-only">0%</span>
									</div>
								</div>

								<div class="progress vertical">
									<div class="progress-bar bg-info" data-transitiongoal-backup="90" data-transitiongoal="90">
										<span class="sr-only">0%</span>
									</div>
								</div>
							</div>

							<div>
								<button type="button" class="btn btn-primary" id="v-default-basic-start">Start</button>
								<button type="button" class="btn btn-danger ml-2" id="v-default-basic-reset">Reset</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Bottom progress bars</h6>
							<p class="mb-3 text-muted">Bottom animated progress bars</p>

							<div class="mb-3" id="v-bottom-basic" style="height: 200px">
								<div class="progress vertical bottom">
									<div class="progress-bar bg-primary" data-transitiongoal-backup="30" data-transitiongoal="30">
										<span class="sr-only">0%</span>
									</div>
								</div>

								<div class="progress vertical bottom">
									<div class="progress-bar bg-danger" data-transitiongoal-backup="60" data-transitiongoal="60">
										<span class="sr-only">0%</span>
									</div>
								</div>

								<div class="progress vertical bottom">
									<div class="progress-bar bg-info" data-transitiongoal-backup="90" data-transitiongoal="90">
										<span class="sr-only">0%</span>
									</div>
								</div>
							</div>

							<div>
								<button type="button" class="btn btn-primary" id="v-bottom-basic-start">Start</button>
								<button type="button" class="btn btn-danger ml-2" id="v-bottom-basic-reset">Reset</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Top percentages</h6>
							<p class="mb-3 text-muted">Top bars with percentage text</p>

							<div class="mb-3" id="v-fill-basic" style="height: 200px">
								<div class="progress vertical">
									<div class="progress-bar bg-primary" data-transitiongoal-backup="30" data-transitiongoal="30">
										<span class="sr-only">0%</span>
									</div>
								</div>

								<div class="progress vertical">
									<div class="progress-bar bg-danger" data-transitiongoal-backup="60" data-transitiongoal="60">
										<span class="sr-only">0%</span>
									</div>
								</div>

								<div class="progress vertical">
									<div class="progress-bar bg-info" data-transitiongoal-backup="90" data-transitiongoal="90">
										<span class="sr-only">0%</span>
									</div>
								</div>
							</div>

							<div>
								<button type="button" class="btn btn-primary" id="v-fill-basic-start">Start</button>
								<button type="button" class="btn btn-danger ml-2" id="v-fill-basic-reset">Reset</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Bottom percentages</h6>
							<p class="mb-3 text-muted">Bottom bars with percentage text</p>

							<div class="mb-3" id="v-fill-bottom" style="height: 200px">
								<div class="progress vertical bottom">
									<div class="progress-bar bg-primary" data-transitiongoal-backup="30" data-transitiongoal="30">
										<span class="sr-only">0%</span>
									</div>
								</div>

								<div class="progress vertical bottom">
									<div class="progress-bar bg-danger" data-transitiongoal-backup="60" data-transitiongoal="60">
										<span class="sr-only">0%</span>
									</div>
								</div>

								<div class="progress vertical bottom">
									<div class="progress-bar bg-info" data-transitiongoal-backup="90" data-transitiongoal="90">
										<span class="sr-only">0%</span>
									</div>
								</div>
							</div>

							<div>
								<button type="button" class="btn btn-primary" id="v-fill-bottom-start">Start</button>
								<button type="button" class="btn btn-danger ml-2" id="v-fill-bottom-reset">Reset</button>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Top custom text</h6>
							<p class="mb-3 text-muted">Top bars with custom text</p>

							<div class="mb-3" id="v-fill-nonpercentage-basic" style="height: 200px">
								<div class="progress vertical">
									<div class="progress-bar bg-primary" data-transitiongoal-backup="30" data-transitiongoal="30">
										<span class="sr-only">0%</span>
									</div>
								</div>

								<div class="progress vertical">
									<div class="progress-bar bg-danger" data-transitiongoal-backup="60" data-transitiongoal="60">
										<span class="sr-only">0%</span>
									</div>
								</div>

								<div class="progress vertical">
									<div class="progress-bar bg-info" data-transitiongoal-backup="90" data-transitiongoal="90">
										<span class="sr-only">0%</span>
									</div>
								</div>
							</div>

							<div>
								<button type="button" class="btn btn-primary" id="v-fill-nonpercentage-basic-start">Start</button>
								<button type="button" class="btn btn-danger ml-2" id="v-fill-nonpercentage-basic-reset">Reset</button>
							</div>
						</div>

						<div class="card card-body border-top-1 border-top-primary text-center">
							<h6 class="mb-0 font-weight-semibold">Bottom custom text</h6>
							<p class="mb-3 text-muted">Bottom bars with custom text</p>

							<div class="mb-3" id="v-fill-nonpercentage-bottom" style="height: 200px">
								<div class="progress vertical bottom">
									<div class="progress-bar bg-primary" data-transitiongoal-backup="30" data-transitiongoal="30">
										<span class="sr-only">0%</span>
									</div>
								</div>

								<div class="progress vertical bottom">
									<div class="progress-bar bg-danger" data-transitiongoal-backup="60" data-transitiongoal="60">
										<span class="sr-only">0%</span>
									</div>
								</div>

								<div class="progress vertical bottom">
									<div class="progress-bar bg-info" data-transitiongoal-backup="90" data-transitiongoal="90">
										<span class="sr-only">0%</span>
									</div>
								</div>
							</div>

							<div>
								<button type="button" class="btn btn-primary" id="v-fill-nonpercentage-bottom-start">Start</button>
								<button type="button" class="btn btn-danger ml-2" id="v-fill-nonpercentage-bottom-reset">Reset</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /vertical progress bars -->

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
