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
	<script src="../../../../global_assets/js/plugins/visualization/d3/d3.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/pies/pie_basic.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/pies/pie_entry_animation.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/pies/pie_multiple.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/pies/pie_multiple_nesting.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/pies/pie_update.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/pies/pie_arc_tween.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/pies/donut_basic.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/pies/donut_entry_animation.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/pies/donut_multiple.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/pies/donut_multiple_nesting.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/pies/donut_update.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/pies/donut_arc_tween.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">D3</span> - Pie Charts</h4>
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
							<a href="d3_pies" class="breadcrumb-item">D3</a>
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
								<h5 class="card-title">Pie charts</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="mb-3">
									<h6 class="font-weight-semibold">Basic pie chart</h6>
									<p class="mb-3">Example of a simple <code>pie chart</code> constructed from a CSV file. The chart employs a number of D3 features: <code>d3.csv</code> - load and parse data; <code>d3.scale.ordinal</code> - color encoding; <code>d3.svg.arc</code> - display arcs; <code>d3.layout.pie</code> - compute arc angles from data.</p>

									<div class="chart-container text-center">
										<div class="chart svg-center" id="d3-pie-basic"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Pie entry transition</h6>
									<p class="mb-3">Example of simple entry transition of a <code>pie chart</code>. A transition is a special type of selection where the operators apply smoothly over time rather than instantaneously. You derive a transition from a selection using the transition operator.</p>
									
									<div class="chart-container text-center">
										<button type="button" class="btn btn-primary btn-sm pie-animation mb-3">Animate</button>
										<div class="chart svg-center" id="d3-pie-entry-animation"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Pie chart update</h6>
									<p class="mb-3">This variation of a <code>pie chart</code> demonstrates how to update values with an animated transition. Clicking on the radio buttons changes the displayed metric.</p>

									<div class="chart-container text-center">
										<div class="pie-radios mb-3">
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" name="pie-dataset" value="apples" class="form-check-input-styled" checked data-fouc>
													Apples
												</label>
											</div>

											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" name="pie-dataset" value="oranges" class="form-check-input-styled" data-fouc>
													Oranges
												</label>
											</div>
										</div>

										<div class="chart svg-center" id="d3-pie-update"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Pie arc tween</h6>
									<p class="mb-3">An example of <code>pie chart</code> tweening arcs, <code>attrTween</code> transitions the value of the attribute with the specified name according to the specified <code>tween</code> function. The starting and ending value of the transition are determined by <code>tween</code>.</p>

									<div class="chart-container text-center">
										<div class="chart svg-center" id="d3-pie-arc-tween"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Donut charts</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="mb-3">
									<h6 class="font-weight-semibold">Basic donut chart</h6>
									<p class="mb-3">Example of a simple <code>donut chart</code> constructed from a CSV file. The chart employs a number of D3 features: <code>d3.csv</code> - load and parse data; <code>d3.scale.ordinal</code> - color encoding; <code>d3.svg.arc</code> - display arcs; <code>d3.layout.pie</code> - compute arc angles from data.</p>

									<div class="chart-container text-center">
										<div class="chart svg-center" id="d3-donut-basic"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Donut entry transition</h6>
									<p class="mb-3">Example of simple entry transition of a <code>donut chart</code>. A transition is a special type of selection where the operators apply smoothly over time rather than instantaneously. You derive a transition from a selection using the transition operator.</p>

									<div class="chart-container text-center">
										<button type="button" class="btn btn-primary btn-sm donut-animation mb-3">Animate</button>
										<div class="chart svg-center" id="d3-donut-entry-animation"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Donut chart update</h6>
									<p class="mb-3">This variation of a <code>donut chart</code> demonstrates how to update values with an animated transition. Clicking on the radio buttons changes the displayed metric.</p>

									<div class="chart-container text-center">
										<div class="donut-radios mb-3">
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" name="donut-dataset" value="lemons" class="form-check-input-styled" checked data-fouc>
													Lemons
												</label>
											</div>

											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" name="donut-dataset" value="melons" class="form-check-input-styled" data-fouc>
													Melons
												</label>
											</div>
										</div>

										<div class="chart svg-center" id="d3-donut-update"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Donut arc tween</h6>
									<p class="mb-3">An example of <code>donut chart</code> tweening arcs, <code>attrTween</code> transitions the value of the attribute with the specified name according to the specified <code>tween</code> function. The starting and ending value of the transition are determined by <code>tween</code>.</p>

									<div class="chart-container text-center">
										<div class="chart svg-center" id="d3-donut-arc-tween"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /basic pie charts -->


				<!-- Multiple pies -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Pie multiples</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="mb-3">
							<h6 class="font-weight-semibold">Pie multiples</h6>
							<p class="mb-3">An example of multiple <code>pie charts</code> created with <code>D3.js</code>. The data is represented as a two-dimensional array of numbers; each row in the array is mapped to a pie chart. Thus, each pie represents the relative value of a number (such as 1,013) within its rows. Note that in this dataset, the totals for each row are not equal.</p>

							<div class="chart-container text-center">
								<div class="chart svg-inline" id="d3-pie-multiple"></div>
							</div>
						</div>

						<div class="mb-3">
							<h6 class="font-weight-semibold">Donut multiples</h6>
							<p class="mb-3">An example of multiple <code>donut charts</code> created with <code>D3.js</code>. The data is represented as a two-dimensional array of numbers; each row in the array is mapped to a pie chart. Thus, each pie represents the relative value of a number (such as 1,013) within its rows. Note that in this dataset, the totals for each row are not equal.</p>

							<div class="chart-container text-center">
								<div class="chart svg-inline" id="d3-donut-multiple"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /multiple pies -->


				<!-- Multiples with nesting -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Nesting pie charts</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="mb-3">
							<h6 class="font-weight-semibold">Pie multiples with nesting</h6>
							<p class="mb-3">An example of multiple <code>pie charts</code> with nesting. The data is represented as a tabular array of objects; each row in the table is mapped to an arc, and rows are grouped into pie charts using <code>d3.nest</code>. Nesting allows elements in an array to be grouped into a hierarchical tree structure; think of it like the GROUP BY operator in SQL, except you can have multiple levels of grouping, and the resulting output is a tree rather than a flat table.</p>

							<div class="chart-container text-center">
								<div class="chart svg-inline" id="d3-pie-nesting"></div>
							</div>
						</div>

						<div class="mb-3">
							<h6 class="font-weight-semibold">Donut multiples with nesting</h6>
							<p class="mb-3">An example of multiple <code>donut charts</code> with nesting. The data is represented as a tabular array of objects; each row in the table is mapped to an arc, and rows are grouped into pie charts using <code>d3.nest</code>. Nesting allows elements in an array to be grouped into a hierarchical tree structure; think of it like the GROUP BY operator in SQL, except you can have multiple levels of grouping, and the resulting output is a tree rather than a flat table.</p>

							<div class="chart-container text-center">
								<div class="chart svg-inline" id="d3-donut-nesting"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /multiples with nesting -->

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
