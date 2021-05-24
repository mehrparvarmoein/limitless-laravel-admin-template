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
	<script src="../../../../global_assets/js/plugins/velocity/velocity.min.js"></script>
	<script src="../../../../global_assets/js/plugins/velocity/velocity.ui.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/animations_velocity_ui.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Velocity</span> - UI Effects</h4>
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
							<a href="animations_velocity_ui" class="breadcrumb-item">Velocity</a>
							<span class="breadcrumb-item active">UI effects</span>
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

				<!-- Basic callouts -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Velocity callouts
					</h6>
					<span class="text-muted d-block">Basic animations using <code>velocity</code> UI pack</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Bounce</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-animation" data-animation="bounce"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Bounce animation using <code>bounce</code> callout
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Swing</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-animation" data-animation="swing"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Swing animation using <code>swing</code> callout
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Shake</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-animation" data-animation="shake"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Shake animation using <code>shake</code> callout
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Tada</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-animation" data-animation="tada"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Tada animation using <code>tada</code> callout
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Flash</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-animation" data-animation="flash"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Flash animation using <code>flash</code> callout
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Pulse</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-animation" data-animation="pulse"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Pulse animation using <code>pulse</code> callout
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /basic callouts -->


				<!-- Basic transitions -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Basic transitions
					</h6>
					<span class="text-muted d-block">Basic transitions of <code>velocity</code> UI pack</span>
				</div>

				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="fadeIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Fade In animation using <code>fadeIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="fadeOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Fade Out animation using <code>fadeOut</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SwoopIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="swoopIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Swoop In animation using <code>swoopIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SwoopOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="swoopOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Swoop Out animation using <code>swoopOut</code> transition
		                    </div>
			            </div>
		            </div>
	            </div>

				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">WhirlIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="whirlIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Whirl In animation using <code>whirlIn</code> transition
		                    </div>
			            </div>
					</div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">WhirlOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="whirlOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Whirl Out animation using <code>whirlOut</code> transition
		                    </div>
			            </div>
					</div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">ShrinkIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="shrinkIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Shrink In animation using <code>shrinkIn</code> transition
		                    </div>
			            </div>
					</div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">ShrinkOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="shrinkOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Shrink Out animation using <code>shrinkOut</code> transition
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /basic transitions -->


				<!-- Bounce transitions -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Bounce transitions
					</h6>
					<span class="text-muted d-block">Set of In and Out <code>bounce</code> transitions</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="bounceIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Bounce In animation using <code>bounceIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="bounceOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Bounce Out animation using <code>bounceOut</code> transition
		                    </div>
			            </div>
		            </div>
	            </div>

				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceUpIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="bounceUpIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Bounce Up In animation using <code>bounceUpIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceUpOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="bounceUpOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Bounce Up Out animation using <code>bounceUpOut</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceDownIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="bounceDownIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Bounce Down In animation using <code>bounceDownIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceDownOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="bounceDownOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Bounce Down Out animation using <code>bounceDownOut</code> transition
		                    </div>
			            </div>
		            </div>
	            </div>

				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceLeftIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="bounceLeftIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Bounce Left In animation using <code>bounceLeftIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceLeftOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="bounceLeftOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Bounce Left Out animation using <code>bounceLeftOut</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceRightIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="bounceRightIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Bounce Right In animation using <code>bounceRightIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceRightOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="bounceRightOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Bounce Right Out animation using <code>bounceRightOut</code> transition
		                    </div>
			            </div>
		            </div>
	            </div>
	            <!-- /bounce transitions -->


	            <!-- Slide transitions -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Slide transitions
					</h6>
					<span class="text-muted d-block">Set of In and Out <code>slide</code> transitions</span>
				</div>

				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideUpIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideUpIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Up In animation using <code>slideUpIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideUpOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideUpOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Up Out animation using <code>slideUpOut</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideUpBigIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideUpBigIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Up Big In animation using <code>slideUpBigIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideUpBigOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideUpBigOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Up Big Out animation using <code>slideUpBigOut</code> transition
		                    </div>
			            </div>
		            </div>
	            </div>

				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideDownIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideDownIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Down In animation using <code>slideDownIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideDownOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideDownOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Down Out animation using <code>slideDownOut</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideDownBigIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideDownBigIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Down Big In animation using <code>slideDownBigIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideDownBigOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideDownBigOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Down Big Out animation using <code>slideDownBigOut</code> transition
		                    </div>
			            </div>
		            </div>
	            </div>

				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideLeftIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideLeftIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Left In animation using <code>slideLeftIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideLeftOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideLeftOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Left Out animation using <code>slideLeftOut</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideLeftBigIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideLeftBigIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Left Big In animation using <code>slideLeftBigIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideLeftBigOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideLeftBigOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Left Big Out animation using <code>slideLeftBigOut</code> transition
		                    </div>
			            </div>
		            </div>
	            </div>

				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideRightIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideRightIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Right In animation using <code>slideRightIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideRightOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideRightOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Right Out animation using <code>slideRightOut</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideRightBigIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideRightBigIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Right Big In animation using <code>slideRightBigIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">SlideRightBigOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="slideRightBigOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Slide Right Big Out animation using <code>slideRightBigOut</code> transition
		                    </div>
			            </div>
		            </div>
	            </div>
	            <!-- /slide transitions -->


	            <!-- Perspective transitions -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Perspective transitions
					</h6>
					<span class="text-muted d-block">Set of In and Out <code>perspective</code> transitions</span>
				</div>

				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">PerspectiveUpIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="perspectiveUpIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Perspective Up In animation using <code>perspectiveUpIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">PerspectiveUpOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="perspectiveUpOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Perspective Up Out animation using <code>perspectiveUpOut</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">PerspectiveDownIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="perspectiveDownIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Perspective Down In animation using <code>perspectiveDownIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">PerspectiveDownOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="perspectiveDownOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Perspective Down Out animation using <code>perspectiveDownOut</code> transition
		                    </div>
			            </div>
		            </div>
	            </div>

				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">PerspectiveLeftIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="perspectiveLeftIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Perspective Left In animation using <code>perspectiveLeftIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">PerspectiveLeftOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="perspectiveLeftOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Perspective Left Out animation using <code>perspectiveLeftOut</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">PerspectiveRightIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="perspectiveRightIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Perspective Right In animation using <code>perspectiveRightIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">PerspectiveRightOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="perspectiveRightOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Perspective Right Out animation using <code>perspectiveRightOut</code> transition
		                    </div>
			            </div>
		            </div>
	            </div>
	            <!-- /perspective transitions -->


	            <!-- Flip transitions -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Flip transitions
					</h6>
					<span class="text-muted d-block">Set of In and Out <code>flip</code> transitions</span>
				</div>

				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FlipXIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="flipXIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Flip X In animation using <code>flipXIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FlipXOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="flipXOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Flip X Out animation using <code>flipXOut</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FlipYIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="flipYIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Flip Y In animation using <code>flipYIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FlipYOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="flipYOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Flip Y Out animation using <code>flipYOut</code> transition
		                    </div>
			            </div>
		            </div>
	            </div>

				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FlipBounceXIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="flipBounceXIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Flip Bounce X In animation using <code>flipBounceXIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FlipBounceXOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="flipBounceXOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Flip Bounce X Out animation using <code>flipBounceXOut</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FlipBounceYIn</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="flipBounceYIn"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Flip Bounce Y In animation using <code>flipBounceYIn</code> transition
		                    </div>
			            </div>
		            </div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FlipBounceYOut</h6>
								<div class="header-elements">
									<a href="#" class="text-default velocity-transition" data-transition="flipBounceYOut"><i class="icon-play3"></i></a>
			                	</div>
							</div>

							<div class="card-body">
								Flip Bounce Y Out animation using <code>flipBounceYOut</code> transition
		                    </div>
			            </div>
		            </div>
	            </div>
	            <!-- /flip transitions -->

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
