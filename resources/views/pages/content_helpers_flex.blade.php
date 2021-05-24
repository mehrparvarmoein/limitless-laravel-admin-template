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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Content</span> - Flex Utilities</h4>
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
							<a href="content_helpers_flex" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Flex utilities</span>
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

				<!-- Enable flex behaviors -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Enable flex behaviors</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Apply <code>display</code> utilities to create a flexbox container and transform <strong>direct children elements</strong> into flex items. Flex containers and items are able to be modified further with additional flex properties. The <code>.d-flex</code> class makes the flex container a block-level element. The <code>.d-inline-flex</code> class makes the flex container an atomic inline-level element. <strong>Please note:</strong> an anonymous flex item that contains only white space is not rendered, as if it were designated <code>display: none</code>. Also <code>clear</code> and <code>vertical-align</code> properties have no effect on flex items, and <code>float</code> causes the <code>display</code> property of the element to compute to <code>block</code>.

						<div class="row">
							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Flexbox container</p>

									<div class="bg-light border rounded p-2">
										<div class="d-flex bg-slate py-2 px-3 rounded">
											I'm a flexbox container!
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Inline flexbox container</p>

									<div class="d-flex bg-light border rounded p-2">
										<div class="d-inline-flex bg-slate py-2 px-3 rounded">
											I'm an inline flexbox container!
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr class="table-border-double table-active">
									<td colspan="2"><span class="font-weight-semibold">Display classes</span></td>
								</tr>
								<tr>
									<td><code>.d-flex</code></td>
									<td>Displays an element as a <strong>block-level</strong> flex container</td>
								</tr>
								<tr>
									<td><code>.d-[breakpoint]-flex</code></td>
									<td>Responsive variations of <code>.d-flex</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>lg</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.d-inline-flex</code></td>
									<td>Displays an element as an <strong>inline-level</strong> flex container</td>
								</tr>
								<tr>
									<td><code>.d-[breakpoint]-inline-flex</code></td>
									<td>Responsive variations of <code>.d-inline-flex</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>lg</code> screen sizes</td>
								</tr>
							</tbody>
						</table>
					</div>
	            </div>
	            <!-- /enable flex behaviors -->


	            <!-- Flex direction -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Flex direction</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Set the direction of flex items in a flex container with direction utilities. In most cases you can omit the horizontal class here as the browser default is <code>row</code>. However, you may encounter situations where you needed to explicitly set this value (like responsive layouts). Use <code>.flex-row</code> to set a horizontal direction (the browser default), or <code>.flex-row-reverse</code> to start the horizontal direction from the opposite side. Use <code>.flex-column</code> to set a vertical direction, or <code>.flex-column-reverse</code> to start the vertical direction from the opposite side.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<p class="font-weight-semibold">Row direction</p>

									<div class="d-flex flex-row bg-light border rounded p-2">
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item 1
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3">
											Flex item 2
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3">
											Flex item 3
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item 4
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-3">
									<p class="font-weight-semibold">Reverse row direction</p>

									<div class="d-flex flex-row-reverse bg-light border rounded p-2">
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item 1
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3">
											Flex item 2
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3">
											Flex item 3
										</div>
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item 4
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<p class="font-weight-semibold">Column direction</p>

									<div class="d-flex flex-column bg-light border rounded p-2">
										<div class="bg-slate py-2 px-3 rounded-top">
											Flex item 1
										</div>
										<div class="bg-slate border-top-1 border-white py-2 px-3">
											Flex item 2
										</div>
										<div class="bg-slate border-top-1 border-white py-2 px-3">
											Flex item 3
										</div>
										<div class="bg-slate border-top-1 border-white py-2 px-3 rounded-bottom">
											Flex item 4
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-3">
									<p class="font-weight-semibold">Reverse column direction</p>

									<div class="d-flex flex-column-reverse bg-light border rounded p-2">
										<div class="bg-slate border-top-1 py-2 px-3 rounded-bottom">
											Flex item 1
										</div>
										<div class="bg-slate border-top-1 border-white py-2 px-3">
											Flex item 2
										</div>
										<div class="bg-slate border-top-1 border-white py-2 px-3">
											Flex item 3
										</div>
										<div class="bg-slate border-white py-2 px-3 rounded-top">
											Flex item 4
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr class="table-border-double table-active">
									<td colspan="2"><span class="font-weight-semibold">Flex row classes</span></td>
								</tr>
								<tr>
									<td><code>.flex-row</code></td>
									<td>Default value. The flexible items are displayed horizontally, as a row</td>
								</tr>
								<tr>
									<td><code>.flex-[breakpoint]-row</code></td>
									<td>Responsive variations of <code>.flex-row</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>lg</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.flex-row-reverse</code></td>
									<td>Same as row, but in reverse order</td>
								</tr>
								<tr>
									<td><code>.flex-[breakpoint]-row-reverse</code></td>
									<td>Responsive variations of <code>.flex-row-reverse</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>lg</code> screen sizes</td>
								</tr>

								<tr class="table-border-double table-active">
									<td colspan="3"><span class="font-weight-semibold">Flex column classes</span></td>
								</tr>
								<tr>
									<td><code>.flex-column</code></td>
									<td>The flexible items are displayed vertically, as a column</td>
								</tr>
								<tr>
									<td><code>.flex-[breakpoint]-column</code></td>
									<td>Responsive variations of <code>.flex-column</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>lg</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.flex-column-reverse</code></td>
									<td>Same as column, but in reverse order</td>
								</tr>
								<tr>
									<td><code>.flex-[breakpoint]-column-reverse</code></td>
									<td>Responsive variations of <code>.flex-column-reverse</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>lg</code> screen sizes</td>
								</tr>
							</tbody>
						</table>
					</div>
	            </div>
	            <!-- /flex direction -->


	            <!-- Justify content -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Justify content</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Use <code>justify-content</code> utilities on flexbox containers to change the alignment of flex items on the main axis (the x-axis to start, y-axis if <code>flex-direction: column</code>). Choose from <code>start</code> (browser default), <code>end</code>, <code>center</code>, <code>between</code>, or <code>around</code> values. The alignment is done after the lengths and auto margins are applied, meaning that, if in a Flexbox layout there is at least one flexible element, with <code>flex-grow</code> different from <code>0</code>, it will have no effect as there won't be any available space.

						<div class="row">
							<div class="col-xl-4">
								<div class="mt-3">
									<p class="font-weight-semibold">Beginning (start) of the container</p>

									<div class="d-flex justify-content-start bg-light border rounded p-2">
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4">
								<div class="mt-3">
									<p class="font-weight-semibold">Center of the container</p>

									<div class="d-flex justify-content-center bg-light border rounded p-2">
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4">
								<div class="mt-3">
									<p class="font-weight-semibold">End of the container</p>

									<div class="d-flex justify-content-end bg-light border rounded p-2">
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">With space between the lines</p>

									<div class="d-flex justify-content-between bg-light border rounded p-2">
										<div class="bg-slate py-2 px-3 rounded">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 rounded">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 rounded">
											Flex item
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">With space before, between, and after the lines</p>

									<div class="d-flex justify-content-around bg-light border rounded p-2">
										<div class="bg-slate py-2 px-3 rounded">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 rounded">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 rounded">
											Flex item
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr class="table-border-double table-active">
									<td colspan="2"><span class="font-weight-semibold">Justify content classes</span></td>
								</tr>
								<tr>
									<td><code>.justify-content-[value]</code></td>
									<td>Aligns the flex container's items when the items don't use all available space on the main-axis (horizontally). Available options for <strong>[value]</strong>: <code>start</code> (browser default), <code>end</code>, <code>center</code>, <code>between</code>, or <code>around</code>.</td>
								</tr>
								<tr>
									<td><code>.justify-content-[breakpoint]-[value]</code></td>
									<td>Responsive variations of <code>.justify-content-[value]</code> classes. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> screen sizes</td>
								</tr>
							</tbody>
						</table>
					</div>
	            </div>
	            <!-- /justify content -->


	            <!-- Align items -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Align items</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Use <code>align-items</code> utilities on flexbox containers to change the alignment of flex items on the cross axis (the y-axis to start, x-axis if <code>flex-direction: column</code>). Choose from <code>start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default). Basically it works like <code>justify-content</code>, but in the perpendicular direction. <strong>Tip:</strong> use the <code>align-self</code> property of each item to override the <code>align-items</code> property.

						<div class="row">
							<div class="col-xl-4">
								<div class="mt-3">
									<p class="font-weight-semibold">Beginning (start) of the container</p>

									<div class="d-flex align-items-start justify-content-center bg-light border rounded p-2" style="height: 120px;">
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4">
								<div class="mt-3">
									<p class="font-weight-semibold">Center of the container</p>

									<div class="d-flex align-items-center justify-content-center bg-light border rounded p-2" style="height: 120px;">
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4">
								<div class="mt-3">
									<p class="font-weight-semibold">End of the container</p>

									<div class="d-flex align-items-end justify-content-center bg-light border rounded p-2" style="height: 120px;">
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">WBaseline of the container</p>

									<div class="d-flex align-items-baseline justify-content-center bg-light border rounded p-2" style="height: 120px;">
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Fit the container</p>

									<div class="d-flex align-items-stretch justify-content-center bg-light border rounded p-2" style="height: 120px;">
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3">
											Flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr class="table-border-double table-active">
									<td colspan="2"><span class="font-weight-semibold">Align items classes</span></td>
								</tr>
								<tr>
									<td><code>.align-items-[value]</code></td>
									<td>Alignment of items inside flex container. Options for <strong>[value]</strong>: <code>start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default).</td>
								</tr>
								<tr>
									<td><code>.align-items-[breakpoint]-[value]</code></td>
									<td>Responsive variations of <code>.align-items-[value]</code> classes. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> screen sizes</td>
								</tr>
							</tbody>
						</table>
					</div>
	            </div>
	            <!-- /align items -->


	            <!-- Align self -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Align self</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Use <code>align-self</code> utilities on flexbox items to individually change their alignment on the cross axis (the y-axis to start, x-axis if <code>flex-direction: column</code>). Choose from the same options as align-items: <code>start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default). The property doesn't apply to block-level boxes, or to table cells.

						<div class="row">
							<div class="col-xl-4">
								<div class="mt-3">
									<p class="font-weight-semibold">Beginning (start) of the container</p>

									<div class="d-flex justify-content-center bg-light border rounded p-2" style="height: 120px;">
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item
										</div>
										<div class="bg-slate align-self-start border-left-1 border-white py-2 px-3">
											Aligned flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4">
								<div class="mt-3">
									<p class="font-weight-semibold">Center of the container</p>

									<div class="d-flex justify-content-center bg-light border rounded p-2" style="height: 120px;">
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item
										</div>
										<div class="bg-slate align-self-center border-left-1 border-white py-2 px-3">
											Aligned flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4">
								<div class="mt-3">
									<p class="font-weight-semibold">End of the container</p>

									<div class="d-flex justify-content-center bg-light border rounded p-2" style="height: 120px;">
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item
										</div>
										<div class="bg-slate align-self-end border-left-1 border-white py-2 px-3">
											Aligned flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Baseline of the container</p>

									<div class="d-flex justify-content-center bg-light border rounded p-2" style="height: 120px;">
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item
										</div>
										<div class="bg-slate align-self-baseline border-left-1 border-white py-2 px-3">
											Aligned flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Fit the container</p>

									<div class="d-flex justify-content-center bg-light border rounded p-2" style="height: 120px;">
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item
										</div>
										<div class="bg-slate align-self-stretch border-left-1 border-white py-2 px-3">
											Aligned flex item
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr class="table-border-double table-active">
									<td colspan="2"><span class="font-weight-semibold">Align self classes</span></td>
								</tr>
								<tr>
									<td><code>.align-self-[value]</code></td>
									<td>Alignment of the selected item inside flex container. Options for <strong>[value]</strong>: <code>start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default).</td>
								</tr>
								<tr>
									<td><code>.align-self-[breakpoint]-[value]</code></td>
									<td>Responsive variations of <code>.align-self-[value]</code> classes. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> screen sizes.</td>
								</tr>
							</tbody>
						</table>
					</div>
	            </div>
	            <!-- /align self -->


	            <!-- Auto margins -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Auto margins</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Flexbox can do some pretty awesome things when you mix flex alignments with auto margins. Shown below are three examples of controlling flex items via auto margins: default (no auto margin), pushing two items to the right (<code>.mr-auto</code>), and pushing two items to the left (<code>.ml-auto</code>). Unfortunately, IE10 and IE11 do not properly support auto margins on flex items whose parent has a non-default <code>justify-content</code> value.

						<div class="row">
							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Right auto margin</p>

									<div class="d-flex bg-light border rounded p-2">
										<div class="bg-slate py-2 px-3 rounded mr-auto">
											Flex item 1
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-left">
											Flex item 2
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item 3
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Left auto margin</p>

									<div class="d-flex bg-light border rounded p-2">
										<div class="bg-slate py-2 px-3 rounded-left">
											Flex item 1
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 rounded-right">
											Flex item 2
										</div>
										<div class="bg-slate border-left-1 border-white py-2 px-3 ml-auto rounded">
											Flex item 3
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Bottom auto margin</p>

									<div class="d-flex flex-column bg-light border rounded p-2" style="height: 180px;">
										<div class="bg-slate py-2 px-3 rounded mb-auto">
											Flex item 1
										</div>
										<div class="bg-slate py-2 px-3 rounded-top">
											Flex item 2
										</div>
										<div class="bg-slate border-top-1 border-white py-2 px-3 rounded-bottom">
											Flex item 3
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Top auto margin</p>

									<div class="d-flex flex-column bg-light border rounded p-2" style="height: 180px;">
										<div class="bg-slate py-2 px-3 rounded-top">
											Flex item 1
										</div>
										<div class="bg-slate border-top-1 border-white py-2 px-3 rounded-bottom">
											Flex item 2
										</div>
										<div class="bg-slate py-2 px-3 rounded mt-auto">
											Flex item 3
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr class="table-border-double table-active">
									<td colspan="2"><span class="font-weight-semibold">Auto margin classes</span></td>
								</tr>
								<tr>
									<td><code>.m[t,b,l,r]-auto</code></td>
									<td>Pushes flex items to specified side, where "l" is left, "r" is right, "t" is top and "b" is bottom.</td>
								</tr>
								<tr>
									<td><code>.m[t,b,l,r]-[breakpoint]-auto</code></td>
									<td>Responsive variations of <code>.m[t,b,l,r]-auto</code> classes. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> screen sizes</td>
								</tr>
							</tbody>
						</table>
					</div>
	            </div>
	            <!-- /auto margins -->


	            <!-- Flex wrap -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Flex wrap</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						The <code>flex-wrap</code> classes specify whether flex items are forced into a single line or can be wrapped onto multiple lines. If wrapping is allowed, this property also enables you to control the direction in which lines are stacked. <strong>Note:</strong> if the elements are not flexible items, the <code>flex-wrap</code> property has no effect. Supports 2 directions: default and reversed.

						<div class="mt-3">
							<p class="font-weight-semibold">No wrap</p>

							<div class="d-flex justify-content-center flex-nowrap bg-light border rounded p-2">
								<div class="bg-slate py-2 px-3 d-flex rounded-left" style="flex-grow: 1;">
									Flex item
								</div>
								<div class="bg-slate py-2 px-3 d-flex border-left-1 border-white" style="flex-grow: 1;">
									Flex item
								</div>
								<div class="bg-slate py-2 px-3 d-flex border-left-1 border-white" style="flex-grow: 1;">
									Flex item
								</div>
								<div class="bg-slate py-2 px-3 d-flex border-left-1 border-white rounded-right" style="flex-grow: 1;">
									Flex item
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Wrap - default direction</p>

									<div class="d-flex flex-wrap bg-light border rounded p-2">
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-left">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Wrap - reversed direction</p>

									<div class="d-flex flex-wrap-reverse bg-light border rounded p-2">
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-left">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr class="table-border-double table-active">
									<td colspan="2"><span class="font-weight-semibold">Flex wrap classes</span></td>
								</tr>
								<tr>
									<td><code>.flex-nowrap</code></td>
									<td>The flex items are laid out in a single line - may cause the flex container to overflow</td>
								</tr>
								<tr>
									<td><code>.flex-[breakpoint]-nowrap</code></td>
									<td>Responsive variations of <code>.flex-nowrap</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.flex-wrap</code></td>
									<td>The flex items break into multiple lines</td>
								</tr>
								<tr>
									<td><code>.flex-[breakpoint]-wrap</code></td>
									<td>Responsive variations of <code>.flex-wrap</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.flex-wrap-reverse</code></td>
									<td>Behaves the same as <code>.flex-wrap</code>, but in reverse order</td>
								</tr>
								<tr>
									<td><code>.flex-[breakpoint]-wrap-reverse</code></td>
									<td>Responsive variations of <code>.flex-wrap-reverse</code> class. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> screen sizes</td>
								</tr>
							</tbody>
						</table>
					</div>
	            </div>
	            <!-- /flex wrap -->


	            <!-- Flex order -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Flex order</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Change the <span class="font-italic">visual</span> order of specific flex items with a handful of <code>order</code> utilities. We only provide options for making an item first or last, as well as a reset to use the DOM order. As order takes any integer value (e.g., 5), add custom CSS for any additional values needed. Elements with the same order value are laid out in the order in which they appear in the source code. <strong>Note:</strong> If the element is not a flexible item, the order property has no effect.

						<div class="row">
							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Default order</p>

									<div class="d-flex justify-content-center bg-light border rounded p-2">
										<div class="bg-slate py-2 px-3 rounded">
											Flex item 1
										</div>
										<div class="bg-slate py-2 px-3 mx-2 rounded">
											Flex item 2
										</div>
										<div class="bg-slate py-2 px-3 rounded">
											Flex item 3
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Custom order</p>

									<div class="d-flex justify-content-center bg-light border rounded p-2">
										<div class="bg-slate py-2 px-3 mx-2 rounded order-2">
											Flex item 1
										</div>
										<div class="bg-slate py-2 px-3 rounded order-3">
											Flex item 2
										</div>
										<div class="bg-slate py-2 px-3 rounded order-1">
											Flex item 3
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Default order</p>

									<div class="d-flex justify-content-center flex-column bg-light border rounded p-2">
										<div class="bg-slate py-2 px-3 rounded">
											Flex item 1
										</div>
										<div class="bg-slate py-2 px-3 my-2 rounded">
											Flex item 2
										</div>
										<div class="bg-slate py-2 px-3 rounded">
											Flex item 3
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Custom order</p>

									<div class="d-flex justify-content-center flex-column bg-light border rounded p-2">
										<div class="bg-slate py-2 px-3 my-2 rounded order-2">
											Flex item 1
										</div>
										<div class="bg-slate py-2 px-3 rounded order-3">
											Flex item 2
										</div>
										<div class="bg-slate py-2 px-3 rounded order-1">
											Flex item 3
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr class="table-border-double table-active">
									<td colspan="2"><span class="font-weight-semibold">Flex order classes</span></td>
								</tr>
								<tr>
									<td><code>.order-[value]</code></td>
									<td>Specify the order used to lay out flex items in their flex container. Values for <strong>[value]</strong>: <code>1</code>, <code>2</code>, ... <code>12</code>.</td>
								</tr>
								<tr>
									<td><code>.order-[breakpoint]-[value]</code></td>
									<td>Responsive variations of <code>.order-[value]</code> classes. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> screen sizes</td>
								</tr>
							</tbody>
						</table>
					</div>
	            </div>
	            <!-- /flex order -->


	            <!-- Align content -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Align content</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Use <code>align-content</code> utilities on flexbox containers to align flex items together on the cross axis. Choose from <code>start</code> (browser default), <code>end</code>, <code>center</code>, <code>between</code>, <code>around</code>, or <code>stretch</code>. To demonstrate these utilities, we’ve enforced <code>flex-wrap: wrap</code> and increased the number of flex items. <strong>Note:</strong> this property has no effect on single rows of flex items.

						<div class="row">
							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Start of the flex container</p>

									<div class="d-flex flex-wrap align-content-start bg-light border rounded p-2" style="min-height: 160px;">
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-left">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">End of the flex container</p>

									<div class="d-flex flex-wrap align-content-end bg-light border rounded p-2" style="min-height: 160px;">
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-left">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Center of the flex container</p>

									<div class="d-flex flex-wrap align-content-center bg-light border rounded p-2" style="min-height: 160px;">
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-left">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Evenly in the flex container</p>

									<div class="d-flex flex-wrap align-content-between bg-light border rounded p-2" style="min-height: 160px;">
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-left">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Evenly with half-size spaces on either end</p>

									<div class="d-flex flex-wrap align-content-around bg-light border rounded p-2" style="min-height: 160px;">
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-left">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6">
								<div class="mt-3">
									<p class="font-weight-semibold">Stretch to take up the remaining space</p>

									<div class="d-flex flex-wrap align-content-stretch bg-light border rounded p-2" style="min-height: 160px;">
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-left">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0">
											Flex item
										</div>
										<div class="bg-slate py-2 px-3 border-1 border-white border-right-0 border-top-0 rounded-right">
											Flex item
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr class="table-border-double table-active">
									<td colspan="2"><span class="font-weight-semibold">Align content classes</span></td>
								</tr>
								<tr>
									<td><code>.align-content-[value]</code></td>
									<td>Similar to align-items, but instead of aligning flex items, it aligns flex lines. Options for <strong>[value]</strong> are similar to <code>.justify-content-[value]</code> classes</td>
								</tr>
								<tr>
									<td><code>.align-content-[breakpoint]-[value]</code></td>
									<td>Responsive variations of <code>.align-content-[value]</code> classes. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code> screen sizes</td>
								</tr>
							</tbody>
						</table>
					</div>
	            </div>
	            <!-- /align content -->

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
