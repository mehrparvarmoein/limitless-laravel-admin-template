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
	<script src="https://www.gstatic.com/charts/loader.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/pies/pie.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/pies/pie_exploded.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/pies/pie_rotate.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/pies/donut.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/pies/donut_rotate.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/pies/donut_exploded.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/pies/pie_3d.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/pies/3d_exploded.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/pies/pie_diff_radius.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/pies/pie_diff_border.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/pies/pie_diff_opacity.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/google/pies/pie_diff_invert.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Google</span> - Pie Charts</h4>
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
							<a href="google_pies" class="breadcrumb-item">Google</a>
							<span class="breadcrumb-item active">Pie charts</span>
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

				<!-- Basic pie charts -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Basic pie chart</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">A <code>pie chart</code> is a divided into sectors, illustrating numerical proportion. In a pie chart, the arc length of each sector (and consequently its central angle and area), is proportional to the quantity it represents. While it is named for its resemblance to a pie which has been sliced, there are variations on the way it can be presented.</p>

								<div class="chart-container has-scroll text-center">
									<div class="d-inline-block" id="google-pie"></div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Rotated pie chart</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">By default, <code>pie</code> charts begin with the left edge of the first slice pointing straight up. You can change that with the <code>pieStartAngle</code> option. Here, we rotate the chart clockwise 180 degrees with an option of <code>pieStartAngle: 180</code>. So chosen because that particular angle happens to make the slices reflected.</p>

								<div class="chart-container has-scroll text-center">
									<div class="d-inline-block" id="google-pie-rotate"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Basic donut chart</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">A <code>donut chart</code> is functionally identical to a pie chart, with the exception of a blank center and the ability to support multiple statistics at once. donut charts provide a better data intensity ratio to standard pie charts since the blank center can be used to display additional related data.</p>

								<div class="chart-container has-scroll text-center">
									<div class="d-inline-block" id="google-donut"></div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Rotated donut chart</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">By default, <code>donut</code> charts begin with the left edge of the first slice pointing straight up. You can change that with the <code>pieStartAngle</code> option. Here, we rotate the chart clockwise 180 degrees with an option of <code>pieStartAngle: 180</code>. So chosen because that particular angle happens to make the slices reflected.</p>

								<div class="chart-container has-scroll text-center">
									<div class="d-inline-block" id="google-donut-rotate"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /basic pie charts -->


				<!-- 3D pie charts -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">3D pie charts</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">A <code>3D pie</code> chart is used to give the chart a 3D look. Often used for aesthetic reasons, the third dimension does not improve the reading of the data; on the contrary, these plots are difficult to interpret because of the distorted effect of perspective associated with the third dimension. The use of superfluous dimensions not used to display the data of interest is discouraged for charts in general, not only for pie charts.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="chart-container has-scroll text-center mb-3">
									<div class="d-inline-block" id="google-pie-3d"></div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="chart-container has-scroll text-center mb-3">
									<div class="d-inline-block" id="google-3d-exploded"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /3D pie charts -->


				<!-- Exploded pie charts -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Exploded pie charts</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of pie charts with<code>exploded</code> slices. Pie slices can be separated from the rest of the chart with the offset property of the slices option. To separate a slice, create a slices object and assign the appropriate slice number an offset between 0 and 1. Below, we assign progressively larger offsets to slices 4 (Gujarati), 12 (Marathi), 14 (Oriya), and 15 (Punjabi). Examples below display both pie and donut chart versions.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="chart-container has-scroll text-center mb-3">
									<div class="d-inline-block" id="google-pie-exploded"></div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="chart-container has-scroll text-center mb-3">
									<div class="d-inline-block" id="google-donut-exploded"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /exploded pie charts -->


				<!-- Diff pie charts -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Diff pie charts</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<h6 class="font-weight-semibold">Inner circle radius</h6>
									<p class="mb-3">Example of <code>diff</code> pie chart with <code>radius</code> factor - the relative size of the circles can be controlled with <code>diff.innerCircle.radiusFactor</code> option.</p>

									<div class="chart-container has-scroll text-center">
										<div class="d-inline-block" id="google-pie-diff-radius"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Inner circle transparency</h6>
									<p class="mb-3">Example of <code>diff</code> pie chart with <code>transparency</code> - the transparency of each data can be controlled with <code>diff.oldData.opacity</code> and <code>diff.newData.opacity</code>.</p>

									<div class="chart-container has-scroll text-center">
										<div class="d-inline-block" id="google-pie-diff-opacity"></div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-3">
									<h6 class="font-weight-semibold">Inner circle border</h6>
									<p class="mb-3">Example of <code>diff</code> pie chart with <code>border</code> factor - the border between the two datas can be controlled with <code>diff.innerCircle.borderFactor</code> option.</p>

									<div class="chart-container has-scroll text-center">
										<div class="d-inline-block" id="google-pie-diff-border"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Inverted difference</h6>
									<p class="mb-3">Example of <code>diff</code> pie chart with <code>inverted</code> behaviour - the behavior can be inverted so that the oldest data surrounds the newest data with <code>diff.oldData.inCenter</code> option.</p>

									<div class="chart-container has-scroll text-center">
										<div class="d-inline-block" id="google-pie-diff-invert"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /diff pie charts -->

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
