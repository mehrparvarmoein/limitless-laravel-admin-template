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
	<script src="assets/js/app.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Content</span> - Grid System</h4>
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
							<a href="content_grid" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Grid system</span>
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

				<!-- Grid options -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Grid options</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Bootstrap’s grid system uses a series of containers, rows, and columns to layout and align content. It’s built with flexbox and is fully responsive. While Bootstrap uses <code>ems</code> or <code>rems</code> for defining most sizes, <code>pxs</code> are used for grid breakpoints and container widths. This is because the viewport width is in pixels and does not change with the font size. See how aspects of the Bootstrap grid system work across multiple devices with a handy table. For a complete set of examples please refer to <a href="http://getbootstrap.com/docs/4.0/layout/grid/" target="_blank">this page</a>.
					</div>

					<div class="table-responsive">
						<table class="table table-bordered table-striped table-lg">
							<thead>
								<tr>
									<th></th>
									<th class="text-center">
										Extra small<br>
										<span class="font-weight-normal text-muted">&lt;576px</span>
									</th>
										<th class="text-center">
										Small<br>
									<span class="font-weight-normal text-muted">≥576px</span>
									</th>
										<th class="text-center">
										Medium<br>
									<span class="font-weight-normal text-muted">≥768px</span>
									</th>
										<th class="text-center">
										Large<br>
									<span class="font-weight-normal text-muted">≥992px</span>
									</th>
									<th class="text-center">
										Extra large<br>
										<span class="font-weight-normal text-muted">≥1200px</span>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th class="text-nowrap" scope="row">Max container width</th>
									<td>None (auto)</td>
									<td>540px</td>
									<td>720px</td>
									<td>960px</td>
									<td>1140px</td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row">Class prefix</th>
									<td><code>.col-</code></td>
									<td><code>.col-sm-</code></td>
									<td><code>.col-md-</code></td>
									<td><code>.col-lg-</code></td>
									<td><code>.col-xl-</code></td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row"># of columns</th>
									<td colspan="5">12</td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row">Gutter width</th>
									<td colspan="5">40px (20px on each side of a column)</td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row">Nestable</th>
									<td colspan="5">Yes</td>
								</tr>
								<tr>
									<th class="text-nowrap" scope="row">Column ordering</th>
									<td colspan="5">Yes</td>
								</tr>
							</tbody>
						</table>
					</div>
	            </div>
	            <!-- /grid options -->


	            <!-- Auto layout columns -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Auto-layout columns</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<h6 class="font-weight-semibold">Equal-width</h6>
						<p class="mb-3">Utilize breakpoint-specific column classes for easy column sizing without an explicit numbered class like .col-sm-6. For example, here are two grid layouts that apply to every device and viewport, from xs to xl. Add any number of unit-less classes for each breakpoint you need and every column will be the same width.</p>

						<div class="row">
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									1 of 2
								</div>
							</div>
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									2 of 2
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									1 of 3
								</div>
							</div>
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									2 of 3
								</div>
							</div>
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									3 of 3
								</div>
							</div>
						</div>


						<h6 class="font-weight-semibold pt-2">Setting one column width</h6>
						<p class="mb-3">Auto-layout for flexbox grid columns also means you can set the width of one column and have the sibling columns automatically resize around it. You may use predefined grid classes (as shown below), grid mixins, or inline widths. Note that the other columns will resize no matter the width of the center column.</p>

						<div class="row">
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									1 of 2
								</div>
							</div>
							<div class="col-6">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									2 of 3 (wider)
								</div>
							</div>
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									2 of 2
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									1 of 3
								</div>
							</div>
							<div class="col-5">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									2 of 3 (wider)
								</div>
							</div>
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									3 of 3
								</div>
							</div>
						</div>


						<h6 class="font-weight-semibold pt-2">Variable width content</h6>
						<p class="mb-3">Use <code>.col-{breakpoint}-auto</code> classes to size columns based on the natural width of their content. In this case the browser will calculate and select a width for the grid column. Also you can use optional flex helper classes to add custom grid appearance and mix other grid column classes with auto width.</p>

						<div class="row justify-content-md-center">
							<div class="col col-lg-2">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									1 of 2
								</div>
							</div>
							<div class="col-md-auto">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									Variable width content
								</div>
							</div>
							<div class="col col-lg-2">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									2 of 2
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									1 of 3
								</div>
							</div>
							<div class="col-md-auto">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									Variable width content
								</div>
							</div>
							<div class="col col-lg-2">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									3 of 3
								</div>
							</div>
						</div>


						<h6 class="font-weight-semibold pt-2">Equal-width multi-row</h6>
						<p class="mb-3">Create equal-width columns that span multiple rows by inserting a .w-100 where you want the columns to break to a new line. Make the breaks responsive by mixing the .w-100 with some <a href="content_helpers">responsive display utilities</a>. Equal-width columns can be broken into multiple lines, but there was a <a href="https://github.com/philipwalton/flexbugs#11-min-and-max-size-declarations-are-ignored-when-wrapping-flex-items">Safari flexbox bug</a> that prevented this from working without an explicit <code>flex-basis</code> or <code>border</code>.</p>

						<div class="row">
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col
								</div>
							</div>
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col
								</div>
							</div>
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col
								</div>
							</div>
						</div>
					</div>
	            </div>
	            <!-- /auto layout columns -->


	            <!-- Responsive classes -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Responsive classes</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<h6 class="font-weight-semibold">All breakpoints</h6>
						<p class="mb-3">For grids that are the same from the smallest of devices to the largest, use the <code>.col</code> and <code>.col-*</code> classes. Specify a numbered class when you need a particularly sized column; otherwise, feel free to stick to <code>.col</code>.</p>

						<div class="row">
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col
								</div>
							</div>
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col
								</div>
							</div>
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col
								</div>
							</div>
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-8">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-8
								</div>
							</div>
							<div class="col-4">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-4
								</div>
							</div>
						</div>


						<h6 class="font-weight-semibold pt-2">Stacked to horizontal</h6>
						<p class="mb-3">Using a single set of <code>.col-sm-*</code> classes, you can create a basic grid system that starts out stacked on extra small devices before becoming horizontal on desktop (medium) devices.</p>

						<div class="row">
							<div class="col-sm-8">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-sm-8
								</div>
							</div>
							<div class="col-sm-4">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-sm-4
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-sm
								</div>
							</div>
							<div class="col-sm">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-sm
								</div>
							</div>
							<div class="col-sm">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-sm
								</div>
							</div>
						</div>


						<h6 class="font-weight-semibold pt-2">Mix and match</h6>
						<p class="mb-3">Don’t want your columns to simply stack in some grid tiers? Use a combination of different classes for each tier as needed. For a better idea of how it all works - <strong>First row</strong>: Stack the columns on mobile by making one full-width and the other half-width. <strong>Second row</strong>: Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop. <strong>Third row</strong>: Columns are always 50% wide, on mobile and desktop</p>

						<div class="row">
							<div class="col-12 col-md-8">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-12 .col-md-8
								</div>
							</div>
							<div class="col-6 col-md-4">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-6 .col-md-4
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-6 col-md-4">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-6 .col-md-4
								</div>
							</div>
							<div class="col-6 col-md-4">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-6 .col-md-4
								</div>
							</div>
							<div class="col-6 col-md-4">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-6 .col-md-4
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-6">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-6
								</div>
							</div>
							<div class="col-6">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-6
								</div>
							</div>
						</div>
					</div>
	            </div>
	            <!-- /responsive classes -->


	            <!-- Alignment -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Alignment</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<h6 class="font-weight-semibold">No gutters</h6>
						<p class="mb-3">The gutters between columns in our predefined grid classes can be removed with .no-gutters. This removes the negative margins from .row and the horizontal padding from all immediate children columns. Note that column overrides are scoped to only the first children columns and are targeted via attribute selector. While this generates a more specific selector, column padding can still be further customized with <a href="content_helpers">spacing utilities</a>.</p>

						<div class="row no-gutters">
							<div class="col-12 col-sm-6 col-md-8">
								<div class="bg-slate rounded-left py-2 px-3 mb-3">
									.col-12 .col-sm-6 .col-md-8
								</div>
							</div>
							<div class="col-6 col-md-4">
								<div class="bg-slate rounded-right border-left-1 border-white py-2 px-3 mb-3">
									.col-6 .col-md-4
								</div>
							</div>
						</div>


						<h6 class="font-weight-semibold pt-2">Column wrapping</h6>
						<p class="mb-3">If more than 12 columns are placed within a single row, each group of extra columns will, as one unit, wrap onto a new line.</p>

						<div class="row">
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-9
								</div>
							</div>
							<div class="col-4">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-4 <br> Since 9 + 4 = 13 > 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.
								</div>
							</div>
							<div class="col-6">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-6<br>Subsequent columns continue along the new line.
								</div>
							</div>
						</div>


						<h6 class="font-weight-semibold pt-2">Column breaks</h6>
						<p class="mb-3">Use <code>.col-{breakpoint}-auto</code> classes to size columns based on the natural width of their content. In this case the browser will calculate and select a width for the grid column. Also you can use optional flex helper classes to add custom grid appearance and mix other grid column classes with auto width.</p>
						
						<div class="row">
							<div class="col-6 col-sm-4">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-6 .col-sm-4
								</div>
							</div>
							<div class="col-col-6 col-sm-4">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-6 .col-sm-4
								</div>
							</div>
							
							<div class="w-100"></div>

							<div class="col-6 col-sm-4">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-6 .col-sm-4
								</div>
							</div>
							<div class="col-6 col-sm-4">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-6 .col-sm-4
								</div>
							</div>
						</div>
					</div>
	            </div>
	            <!-- /alignment -->


	            <!-- Reordering -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Reordering</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<h6 class="font-weight-semibold">Order classes</h6>
						<p class="mb-3">Use <code>.order-</code> classes for controlling the <strong>visual</strong> order of your content. These classes are responsive, so you can set the <code>order</code> by breakpoint (e.g., <code>.order-1.order-md-2</code>). Includes support for <code>1</code> through <code>12</code> across all five grid tiers.</p>

						<div class="row">
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									First, but unordered
								</div>
							</div>
							<div class="col order-12">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									Second, but last
								</div>
							</div>
							<div class="col order-1">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									Third, but first
								</div>
							</div>
						</div>

						<p class="mb-3">There’s also a responsive <code>.order-first</code> class that quickly changes the order of one element by applying <code>order: -1</code>. This class can also be intermixed with the numbered <code>.order-*</code> classes as needed.</p>

						<div class="row">
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									First, but unordered
								</div>
							</div>
							<div class="col">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									Second, but unordered
								</div>
							</div>
							<div class="col order-first">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									Third, but first
								</div>
							</div>
						</div>
					</div>
	            </div>
	            <!-- /reordering -->


	            <!-- Offsetting columns -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Offsetting columns</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">You can offset grid columns in two ways: our responsive .offset- grid classes and our margin utilities. Grid classes are sized to match columns while margins are more useful for quick layouts where the width of the offset is variable.</p>

						<h6 class="font-weight-semibold pt-2">Offset classes</h6>
						<p class="mb-3">Move columns to the right using <code>.offset-md-*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.offset-md-4</code> moves <code>.col-md-4</code> over four columns.</p>

						<div class="row">
							<div class="col-md-4">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-md-4
								</div>
							</div>
							<div class="col-md-4 offset-md-4">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-md-4 .offset-md-4
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3 offset-md-3">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-md-3 .offset-md-3
								</div>
							</div>
							<div class="col-md-3 offset-md-3">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-md-3 .offset-md-3
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 offset-md-3">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-md-6 .offset-md-3
								</div>
							</div>
						</div>

						<p class="mb-3">In addition to column clearing at responsive breakpoints, you may need to reset offsets:</p>

						<div class="row">
							<div class="col-sm-5 col-md-6">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-sm-5 .col-md-6
								</div>
							</div>
							<div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6 col-md-5 col-lg-6">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col.col-sm-6.col-md-5.col-lg-6
								</div>
							</div>
							<div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0
								</div>
							</div>
						</div>


						<h6 class="font-weight-semibold pt-2">Margin utilities</h6>
						<p class="mb-3">With the move to flexbox in v4, you can use margin utilities like <code>.mr-auto</code> to force sibling columns away from one another.</p>

						<div class="row">
							<div class="col-md-4">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-md-4
								</div>
							</div>
							<div class="col-md-4 ml-auto">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-md-4 .ml-auto
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3 ml-md-auto">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-md-3 .ml-md-auto
								</div>
							</div>
							<div class="col-md-3 ml-md-auto">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-md-3 .ml-md-auto
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-auto mr-auto">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-auto .mr-auto
								</div>
							</div>
							<div class="col-auto">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									.col-auto
								</div>
							</div>
						</div>
					</div>
	            </div>
	            <!-- /offsetting columns -->


	            <!-- Nesting -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Nesting</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-sm-*</code> columns within an existing <code>.col-sm-*</code> column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).</p>

						<div class="row">
							<div class="col-sm-12">
								<div class="bg-slate rounded py-2 px-3 mb-3">
									Level 1: .col-sm-12

									<div class="row mt-3">
										<div class="col-8 col-sm-6">
											<div class="bg-slate-700 rounded py-2 px-3 mb-3">
												Level 2: .col-8 .col-sm-6
											</div>
										</div>
										<div class="col-4 col-sm-6">
											<div class="bg-slate-700 rounded py-2 px-3 mb-3">
												Level 2: .col-4 .col-sm-6
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
	            </div>
	            <!-- /nesting -->

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
