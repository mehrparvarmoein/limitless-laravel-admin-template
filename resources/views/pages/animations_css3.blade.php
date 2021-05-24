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

	<link href="../../../../global_assets/css/extras/animate.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="../../../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /core JS files -->

	<!-- Page JS files -->
	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/animations_css3.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Animations</span> - CSS3 Animations</h4>
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
							<a href="animations_css3" class="breadcrumb-item">Animations</a>
							<span class="breadcrumb-item active">CSS3 animations</span>
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

				<!-- Attention seekers -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Attention seekers
					</h6>
					<span class="text-muted d-block">Basic animations using <code>animate.css</code></span>
				</div>

				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Bounce</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="bounce"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Bounce animation using <code>bounce</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Shake</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="shake"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Shake animation using <code>shake</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Flash</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="flash"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Flash animation using <code>flash</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Swing</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="swing"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Swing animation using <code>swing</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Pulse</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="pulse"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Pulse animation using <code>pulse</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Tada</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="tada"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Tada animation using <code>tada</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-3">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Rubberband</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="rubberBand"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Rubberband animation using <code>rubberBand</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Wobble</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="wobble"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Wobble animation using <code>wobble</code> class
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /attention seekers -->


				<!-- Bouncing entrances -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Bouncing entrances
					</h6>
					<span class="text-muted d-block">Entrance options for <code>bounce</code> animations</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceInLeft</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="bounceInLeft"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Bounce In Left animation using <code>bounceInLeft</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceIn</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="bounceIn"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Bounce In animation using <code>bounceIn</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceInRight</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="bounceInRight"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Bounce In Right animation using <code>bounceInRight</code> class
		                    </div>
			            </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceInUp</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="bounceInUp"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Bounce In Up animation using <code>bounceInUp</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceInDown</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="bounceInDown"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Bounce In Down animation using <code>bounceInDown</code> class
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /bouncing entrances -->


				<!-- Bouncing exits -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Bouncing exits
					</h6>
					<span class="text-muted d-block">Exit options for <code>bounce</code> animations</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceOutLeft</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="bounceOutLeft"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Bounce Out Left animation using <code>bounceOutLeft</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceOut</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="bounceOut"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Bounce Out animation using <code>bounceOut</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceOutRight</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="bounceOutRight"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Bounce Out Right animation using <code>bounceOutRight</code> class
		                    </div>
			            </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceOutUp</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="bounceOutUp"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Bounce Out Up animation using <code>bounceOutUp</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">BounceOutDown</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="bounceOutDown"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Bounce Out Down animation using <code>bounceOutDown</code> class
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /bouncing exits -->


				<!-- Fading entrances -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Fading entrances
					</h6>
					<span class="text-muted d-block">Entrance options for <code>fade</code> animations</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeIn</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeIn"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade In animation using <code>fadeIn</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeInLeft</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeInLeft"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade In Left animation using <code>fadeInLeft</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeInRight</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeInRight"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade In Right animation using <code>fadeInRight</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeInDown</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeInDown"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade In Down animation using <code>fadeInDown</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeInLeftBig</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeInLeftBig"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade In Left Big animation using <code>fadeInLeftBig</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeInRightBig</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeInRightBig"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade In Right Big animation using <code>fadeInRightBig</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeInDownBig</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeInDownBig"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade In Down Big animation using <code>fadeInDownBig</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeInUp</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeInUp"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade In Up animation using <code>fadeInUp</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeInUpBig</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeInUpBig"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade In Up Big animation using <code>fadeInUpBig</code> class
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /fading entrances -->


				<!-- Fading exits -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Fading exits
					</h6>
					<span class="text-muted d-block">Exit options for <code>fade</code> animations</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeOut</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeOut"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade Out animation using <code>fadeOut</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeOutLeft</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeOutLeft"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade Out Left animation using <code>fadeOutLeft</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeOutRight</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeOutRight"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade Out Right animation using <code>fadeOutRight</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeOutDown</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeOutDown"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade Out Down animation using <code>fadeOutDown</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeOutLeftBig</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeOutLeftBig"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade Out Left Big animation using <code>fadeOutLeftBig</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeOutRightBig</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeOutRightBig"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade Out Right Big animation using <code>fadeOutRightBig</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeOutDownBig</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeOutDownBig"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade Out Down Big animation using <code>fadeOutDownBig</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeOutUp</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeOutUp"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade Out Up animation using <code>fadeOutUp</code> class
		                    </div>
			            </div>

						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FadeOutUpBig</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="fadeOutUpBig"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Fade Out Up Big animation using <code>fadeOutUpBig</code> class
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /fading exits -->


				<!-- Flippers -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Flip animations
					</h6>
					<span class="text-muted d-block">Options for <code>flip</code> animations</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FlipInX</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="flipInX"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Flip In X animation using <code>flipInX</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Flip</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="flip"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Flip animation using <code>flip</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FlipInY</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="flipInY"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Flip In Y animation using <code>flipInY</code> class
		                    </div>
			            </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FlipOutX</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="flipOutX"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Flip Out X animation using <code>flipOutX</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">FlipOutY</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="flipOutY"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Flip Out Y animation using <code>flipOutY</code> class
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /flippers -->


				<!-- Lightspeed -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Lightspeed animations
					</h6>
					<span class="text-muted d-block">Options for <code>light speed</code> animations</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">LightSpeedIn</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="lightSpeedIn"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Light Speed In animation using <code>lightSpeedIn</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">LightSpeedOut</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="lightSpeedOut"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Light Speed Out animation using <code>lightSpeedOut</code> class
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /lightspeed -->


				<!-- Rotating entrances -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Rotating entrances
					</h6>
					<span class="text-muted d-block">Entrance options for <code>rotate</code> animations</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">RotateInDownLeft</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="rotateInDownLeft"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Rotate In Down Left animation using <code>rotateInDownLeft</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">RotateIn</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="rotateIn"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Rotate In animation using <code>rotateIn</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">RotateInDownRight</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="rotateInDownRight"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Rotate In Down Right animation using <code>rotateInDownRight</code> class
		                    </div>
			            </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">RotateInUpLeft</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="rotateInUpLeft"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Rotate In Up Left animation using <code>rotateInUpLeft</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">RotateInUpRight</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="rotateInUpRight"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Rotate In Up Right animation using <code>rotateInUpRight</code> class
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /rotating entrances -->


				<!-- Rotating exits -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Rotating exits
					</h6>
					<span class="text-muted d-block">Exit options for <code>rotate</code> animations</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">RotateOutDownLeft</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="rotateOutDownLeft"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Rotate Out Down Left animation using <code>rotateOutDownLeft</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">RotateOut</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="rotateOut"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Rotate Out animation using <code>rotateOut</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">RotateOutDownRight</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="rotateOutDownRight"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Rotate Out Down Right animation using <code>rotateOutDownRight</code> class
		                    </div>
			            </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">RotateOutUpLeft</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="rotateOutUpLeft"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Rotate Out Up Left animation using <code>rotateOutUpLeft</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">RotateOutUpRight</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="rotateOutUpRight"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Rotate Out Up Right animation using <code>rotateOutUpRight</code> class
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /rotating exits -->


				<!-- Special animations -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Special animations
					</h6>
					<span class="text-muted d-block">Options for <code>special</code> animations</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">RollIn</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="rollIn"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Roll In animation using <code>rollIn</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Hinge</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="hinge"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Hinge animation using <code>hinge</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">RollOut</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="rollOut"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Roll Out animation using <code>rollOut</code> class
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /special animations -->


				<!-- Zoom entrances -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Zoom entrances
					</h6>
					<span class="text-muted d-block">Entrance options for <code>zoom</code> animations</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">ZoomInLeft</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="zoomInLeft"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Zoom In Left animation using <code>zoomInLeft</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">ZoomIn</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="zoomIn"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Zoom In animation using <code>zoomIn</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">ZoomInRight</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="zoomInRight"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Zoom In Right animation using <code>zoomInRight</code> class
		                    </div>
			            </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">ZoomInUp</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="zoomInUp"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Zoom In Up animation using <code>zoomInUp</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">ZoomInDown</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="zoomInDown"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Zoom In Down animation using <code>zoomInDown</code> class
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /zoom entrances -->


				<!-- Zoom exits -->					
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Zoom exits
					</h6>
					<span class="text-muted d-block">Exit options for <code>zoom</code> animations</span>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">ZoomOutLeft</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="zoomOutLeft"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Zoom Out Left animation using <code>zoomOutLeft</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">ZoomOut</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="zoomOut"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Zoom Out animation using <code>zoomOut</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">ZoomOutRight</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="zoomOutRight"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Zoom Out Right animation using <code>zoomOutRight</code> class
		                    </div>
			            </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">ZoomOutUp</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="zoomOutUp"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Zoom Out Up animation using <code>zoomOutUp</code> class
		                    </div>
			            </div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">ZoomOutDown</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item animation" data-animation="zoomOutDown"><i class="icon-play3"></i></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Zoom Out Down animation using <code>zoomOutDown</code> class
		                    </div>
			            </div>
					</div>
				</div>
				<!-- /zoom exits -->

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
