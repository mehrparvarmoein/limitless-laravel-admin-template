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
	<script src="../../../../global_assets/js/plugins/visualization/d3/venn.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/venn/venn_basic.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/venn/venn_colors.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/venn/venn_rings.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/venn/venn_weighted.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/venn/venn_interactive.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/venn/venn_tooltip.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/chords/chord_basic.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/chords/chord_chart.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/chords/chord_tweens.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/chords/chord_arcs.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/sunburst/sunburst_basic.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/sunburst/sunburst_distortion.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/sunburst/sunburst_zoom.js"></script>
	<script src="../../../../global_assets/js/demo_pages/charts/d3/sunburst/sunburst_combined.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">D3</span> - Circle Diagrams</h4>
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
							<a href="d3_circle_diagrams" class="breadcrumb-item">D3</a>
							<span class="breadcrumb-item active">Circle diagrams</span>
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

				<!-- Venn diagrams -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Basic Venn diagrams</h5>
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
									<h6 class="font-weight-semibold">Basic Venn diagram</h6>
									<p class="mb-3">A <code>Venn diagram</code> is a diagram that shows all possible logical relations between a finite collection of sets. It's constructed with a collection of simple closed curves drawn in a plane, usually circles.</p>

									<div class="chart-container has-scroll text-center">
										<div class="chart svg-center" id="d3-venn-basic"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Custom colors</h6>
									<p class="mb-3">Since basic example of Venn diagram has a set of default colors (example above), custom colors can be also applied. This example demonstrates a basic set of <code>D3.js</code> categorical colors that applied to the circles.</p>

									<div class="chart-container has-scroll text-center">
										<div class="chart svg-center" id="d3-venn-colors"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Custom layout</h6>
									<p class="mb-3">Venn diagram layout uses <code>SVG</code> for drawing circles, that means it supports all available shape styling. This example demonstrates flexibility of SVG's <code>stroke</code> and <code>fill</code> properties and shows rings instead of circles.</p>

									<div class="chart-container has-scroll text-center">
										<div class="chart svg-center" id="d3-venn-rings"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Advanced Venn diagrams</h5>
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
									<h6 class="font-weight-semibold">Weighted diagram</h6>
									<p class="mb-3">An example providing weights on the importance of each intersection area. This defines the non-overlapping intersection areas as being unimportant - so that the sets cluster around set '2' here.</p>

									<div class="chart-container has-scroll text-center">
										<div class="chart svg-center" id="d3-venn-weighted"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Simple interaction</h6>
									<p class="mb-3">Example of Venn diagram with simple <code>interaction</code>. On circle hover, text changes the size and circles change fill opacity. Basically all nodes support custom styling. Also added optional callback on circle click.</p>

									<div class="chart-container has-scroll text-center">
										<div class="chart svg-center" id="d3-venn-interactive"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Tooltip</h6>
									<p class="mb-3">Example of Venn diagram with optional <code>tooltip</code>. Tooltip appears on <code>mouseover</code>, follows the cursor position on <code>moucemove</code> while it's on the circle and disappears on <code>mouseout</code>. Fully customizable via CSS.</p>

									<div class="chart-container has-scroll text-center">
										<div class="chart svg-center" id="d3-venn-tooltip"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /venn diagrams -->


				<!-- Chord diagrams -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Basic chords</h5>
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
									<h6 class="font-weight-semibold">Basic chord diagram</h6>
									<p class="mb-3">Basic example of <code>chord</code> diagram. Chord diagrams show directed relationships among a group of entities. This example also demonstrates simple interactivity by using mouseover filtering.</p>

									<div class="chart-container has-scroll text-center">
										<div class="mb-3">
											<button type="button" class="btn btn-danger btn-sm" id="clear-basic">Clear</button>
											<button type="button" class="btn btn-info btn-sm" id="render-basic">Render</button>
										</div>

										<div class="chart svg-center" id="d3-chord-basic"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Simple update and render</h6>
									<p class="mb-3">A cleaner interface for updating and rendering the chart: chord returns an object; chord takes a container as its argument; <code>chord.update</code>, <code>chord.render</code> and <code>chord.clear</code> chart functions.</p>

									<div class="chart-container has-scroll text-center">
										<div class="mb-3">
											<button type="button" class="btn btn-primary btn-sm" id="update-chart">Update</button>
											<button type="button" class="btn btn-danger btn-sm" id="clear-chart">Clear</button>
											<button type="button" class="btn btn-info btn-sm" id="render-chart">Render</button>
										</div>

										<div class="chart svg-center" id="d3-chord-charts"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Chord tweens</h5>
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
									<h6 class="font-weight-semibold">Chord and tick tweens</h6>
									<p class="mb-3">Example of <code>chord</code> and <code>tick</code> tweens for updates. Demonstrates an <code>animation</code> of ticks, labels and quadratic Bézier curves between arcs. During animation, all ticks and labels are hidden and appear after update.</p>

									<div class="chart-container has-scroll text-center">
										<div class="mb-3">
											<button type="button" class="btn btn-primary btn-sm" id="update-tween">Update</button>
											<button type="button" class="btn btn-danger btn-sm" id="clear-tween">Clear</button>
											<button type="button" class="btn btn-info btn-sm" id="render-tween">Render</button>
										</div>

										<div class="chart svg-center" id="d3-chord-tweens"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Arc tweens</h6>
									<p class="mb-3">Example of <code>arc</code> tweens for updates. The chord layout is designed to work in conjunction with the chord shape and the arc shape. Animation of these arc shapes are demonstrated in this example.</p>

									<div class="chart-container has-scroll text-center">
										<div class="mb-3">
											<button type="button" class="btn btn-primary btn-sm" id="update-arc">Update</button>
											<button type="button" class="btn btn-danger btn-sm" id="clear-arc">Clear</button>
											<button type="button" class="btn btn-info btn-sm" id="render-arc">Render</button>
										</div>

										<div class="chart svg-center" id="d3-chord-arc"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /chord diagrams -->


				<!-- Sunburst diagrams -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Basic sunburst</h5>
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
									<h6 class="font-weight-semibold">Sunburst diagram</h6>
									<p class="mb-3">A <code>sunburst</code> is similar to the treemap, except it uses a <code>radial</code> layout. The root node of the tree is at the center, with leaves on the circumference. The area of each arc corresponds to its value.</p>

									<div class="chart-container has-scroll text-center">
										<div class="basic-options mb-3">
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" name="mode-basic" value="size" data-fouc>
													Size
												</label>
											</div>

											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" name="mode-basic" value="count" checked data-fouc>
													Count
												</label>
											</div>
										</div>

										<div class="chart svg-center" id="d3-sunburst-basic"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Sunburst with distortion</h6>
									<p class="mb-3">A sunburst (radial partition layout) built with <code>D3</code>, featuring interactive distortion based on InterRing: when you click on a node, it expands to fill 80% of the parent arc. Clicking on the root node resets all distortions.</p>

									<div class="chart-container has-scroll text-center">
										<div class="chart svg-center" id="d3-sunburst-distortion"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Zoomable sunburst</h5>
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
									<h6 class="font-weight-semibold">Zoom and update</h6>
									<p class="mb-3">Example of <code>zooming</code> and <code>updating</code> data combination. Click on any arc to zoom in, and click on the center circle to zoom out. Use the Size/Count radio buttons to update the data.</p>

									<div class="chart-container has-scroll text-center">
										<div class="combined-options mb-3">
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" name="mode-combined" value="size" data-fouc>
													Size
												</label>
											</div>

											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input type="radio" name="mode-combined" value="count" checked data-fouc>
													Count
												</label>
											</div>
										</div>

										<div class="chart svg-center" id="d3-sunburst-combined"></div>
									</div>
								</div>

								<div class="mb-3">
									<h6 class="font-weight-semibold">Zoomable sunburst</h6>
									<p class="mb-3">Example of <code>zoomable</code> sunburst diagram. Presents child levels as a parent level on arc click. Demo data has 3 levels, click on any arc to zoom in and click on the center circle to zoom out.</p>

									<div class="chart-container has-scroll text-center">
										<div class="chart svg-center" id="d3-sunburst-zoom"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /sunburst diagrams -->

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
