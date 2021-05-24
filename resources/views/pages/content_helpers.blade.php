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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Content</span> - Helper Classes</h4>
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
							<a href="content_helpers" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Helper classes</span>
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

				<!-- Helper classes -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Helper classes</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Besides basic typography classes, helper classes are an extra set of additional predefined classes, that can be applied to different content or layout elements and components. Helper classes are custom additions mostly, written especially for current layout, except common BS helpers. Below is a summarized table with all available classes, descriptions and content type. Flex utilities are moved to a separate page and include various examples.
					</div>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr class="table-border-double table-active">
									<td colspan="3"><span class="font-weight-semibold">Borders</span></td>
								</tr>
								<tr>
									<td><code>.border-0</code></td>
									<td class="text-muted">Any element</td>
									<td>Use this class to remove <strong>all</strong> borders from an element</td>
								</tr>
								<tr>
									<td><code>.border-[side]-0</code></td>
									<td class="text-muted">Any element</td>
									<td>Use this class to remove specific borders. Available <strong>[side]</strong> options: <code>left</code>, <code>right</code>, <code>top</code>, <code>bottom</code>.</td>
								</tr>
								<tr>
									<td><code>.border-width-0</code></td>
									<td class="text-muted">Any element</td>
									<td>Sets border width to 0. Useful for inheriting other border properties</td>
								</tr>
								<tr class="table-border-solid">
									<td><code>.border</code></td>
									<td class="text-muted">Any element</td>
									<td>Adds a border to an element with pre-defined BS's default width and color properties</td>
								</tr>
								<tr>
									<td><code>.border-[size]</code></td>
									<td class="text-muted">Any element</td>
									<td>Adds the border to an element. Available <strong>[size]</strong> options: <code>1</code> - default border width (1px); <code>2</code> - double width (2px); <code>3</code> - tripple width (3px)</td>
								</tr>
								<tr>
									<td><code>.border-[side]-[size]</code></td>
									<td class="text-muted">Any element</td>
									<td>Same as <code>.border-[size]</code>, but for specific <strong>[side]</strong>: <code>left</code>, <code>right</code>, <code>top</code>, <code>bottom</code></td>
								</tr>
								<tr class="table-border-solid">
									<td><code>.border-[color]</code></td>
									<td class="text-muted">Any element</td>
									<td>Changes color of all element's borders. Supports all available color classes, including <code>transparent</code> option</td>
								</tr>
								<tr>
									<td><code>.border-[side]-[color]</code></td>
									<td class="text-muted">Any element</td>
									<td>If you need to change color of some specific border, use this class combination. Options for <strong>[side]</strong>: <code>left</code>, <code>right</code>, <code>top</code>, <code>bottom</code></td>
								</tr>
								<tr class="table-border-solid">
									<td><code>.rounded</code></td>
									<td class="text-muted">Any element</td>
									<td>Rounds all borders. Default value is defined in <code>$border-radius</code> variable</td>
								</tr>
								<tr>
									<td><code>.rounded-[side]</code></td>
									<td class="text-muted">Any element</td>
									<td>Rounds borders of specific <strong>[side]</strong>: <code>top</code>, <code>bottom</code>, <code>left</code>, <code>right</code></td>
								</tr>
								<tr>
									<td><code>.rounded-0</code></td>
									<td class="text-muted">Any element</td>
									<td>Removes rounded corners from all borders</td>
								</tr>
								<tr>
									<td><code>.rounded-[side]-0</code></td>
									<td class="text-muted">Any element</td>
									<td>Removes rounded corners from specific <strong>[side]</strong>: <code>top</code>, <code>bottom</code>, <code>left</code>, <code>right</code></td>
								</tr>
								<tr>
									<td><code>.rounded-round</code></td>
									<td class="text-muted">Any element</td>
									<td>Adds <code>100px</code> border radius to all borders</td>
								</tr>
								<tr>
									<td><code>.rounded-[side]-round</code></td>
									<td class="text-muted">Any element</td>
									<td>Adds <code>100px</code> border radius to specific <strong>[side]</strong>: <code>top</code>, <code>bottom</code>, <code>left</code>, <code>right</code></td>
								</tr>
								<tr>
									<td><code>.rounded-circle</code></td>
									<td class="text-muted">Any element</td>
									<td>Adds <code>50%</code> border radius to all borders</td>
								</tr>

								<tr class="table-border-double table-active">
									<td colspan="3"><span class="font-weight-semibold">Transformations</span></td>
								</tr>
								<tr>
									<td><code>.rotate-[value]</code></td>
									<td class="text-muted">Any element</td>
									<td>Rotates element <strong>clockwise</strong>. Options for <strong>[value]</strong>: <code>45</code>, <code>90</code>, <code>180</code> degrees</td>
								</tr>
								<tr>
									<td><code>.rotate-[value]-inverse</code></td>
									<td class="text-muted">Any element</td>
									<td>Same as <code>.rotate-[value]</code>, but rotation is counterclockwise. Options for <strong>[value]</strong> are the same as well</td>
								</tr>
								<tr>
									<td><code>.spinner</code></td>
									<td class="text-muted">Any element</td>
									<td>Adds infinite clockwise rotation</td>
								</tr>
								<tr>
									<td><code>.spinner-reverse</code></td>
									<td class="text-muted">Any element</td>
									<td>Adds infinite counterclockwise rotation</td>
								</tr>

								<tr class="table-border-double table-active">
									<td colspan="3"><span class="font-weight-semibold">Positioning</span></td>
								</tr>
								<tr>
									<td><code>.position-[value]</code></td>
									<td class="text-muted">Any element</td>
									<td>Changes element's positiion. Available options for <strong>[value]</strong>: <code>relative</code>, <code>static</code>, <code>absolute</code>, <code>fixed</code>, <code>sticky</code></td>
								</tr>
								<tr>
									<td><code>.fixed-[top, bottom]</code></td>
									<td class="text-muted">Any element</td>
									<td>Position an element at the top (bottom) of the viewport, from edge to edge</td>
								</tr>
								<tr class="table-border-solid">
									<td><code>.top-[0, auto]</code></td>
									<td class="text-muted">All except static</td>
									<td>Resets <code>top</code> property for fixed, absolute and relative opsitions</td>
								</tr>
								<tr>
									<td><code>.bottom-[0, auto]</code></td>
									<td class="text-muted">All except static</td>
									<td>Resets <code>bottom</code> property for fixed, absolute and relative opsitions</td>
								</tr>
								<tr>
									<td><code>.left-[0, auto]</code></td>
									<td class="text-muted">All except static</td>
									<td>Resets <code>left</code> property for fixed, absolute and relative opsitions</td>
								</tr>
								<tr>
									<td><code>.right-[0, auto]</code></td>
									<td class="text-muted">All except static</td>
									<td>Resets <code>right</code> property for fixed, absolute and relative opsitions</td>
								</tr>

								<tr class="table-border-double table-active">
									<td colspan="3"><span class="font-weight-semibold">Alignment</span></td>
								</tr>
								<tr>
									<td><code>.float-[side]</code></td>
									<td class="text-muted">Any element</td>
									<td>Element floating. Options for <strong>[side]</strong>: <code>left</code>, <code>right</code> sides</td>
								</tr>
								<tr>
									<td><code>.float-[breakpoint]-[side]</code></td>
									<td class="text-muted">Any element</td>
									<td>Responsive variations of element floating. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xlg</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.float-none</code></td>
									<td class="text-muted">Any element</td>
									<td>Removes floating</td>
								</tr>
								<tr>
									<td><code>.clearfix</code></td>
									<td class="text-muted">Any element</td>
									<td>Easily clear floats by adding <code>.clearfix</code> to the element</td>
								</tr>
								<tr class="table-border-solid">
									<td><code>.text-[side]</code></td>
									<td class="text-muted">Inline element, text</td>
									<td>Element alignment. Options for <strong>[side]</strong>: <code>left</code>, <code>center</code>, <code>right</code> sides</td>
								</tr>
								<tr>
									<td><code>.text-[breakpoint]-[side]</code></td>
									<td class="text-muted">Inline element, text</td>
									<td>Responsive variations of element alignment. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xlg</code> screen sizes</td>
								</tr>
								<tr class="table-border-solid">
									<td><code>.align-[value]</code></td>
									<td class="text-muted">Inline element, table</td>
									<td>Vertical alignment. Options for <strong>[value]</strong>: <code>baseline</code>, <code>top</code>, <code>middle</code>, <code>bottom</code>, <code>text-top</code> and <code>text-bottom</code></td>
								</tr>

								<tr class="table-border-double table-active">
									<td colspan="3"><span class="font-weight-semibold">Images</span></td>
								</tr>
								<tr>
									<td><code>.img-fluid</code></td>
									<td class="text-muted">Images only</td>
									<td>Applies max-width: 100%; and height: auto; to the image so that it scales nicely to the parent element</td>
								</tr>
								<tr>
									<td><code>.img-thumbnail</code></td>
									<td class="text-muted">Images only</td>
									<td>Adds grey frame with white background color</td>
								</tr>

								<tr class="table-border-double table-active">
									<td colspan="3"><span class="font-weight-semibold">Sizing</span></td>
								</tr>
								<tr>
									<td><code>.wmin-[size]</code></td>
									<td class="text-muted">Any element</td>
									<td>Sets a minimum width of the element in pixels. Available options for <strong>[size]</strong>: <code>200</code>, <code>250</code>, <code>300</code>, <code>350</code>, <code>400</code>, <code>450</code>, <code>500</code>, <code>550</code>, <code>600</code> pixels</td>
								</tr>
								<tr>
									<td><code>.wmin-[breakpoint]-[size]</code></td>
									<td class="text-muted">Any element</td>
									<td>Responsive variations of width utilities. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xlg</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.w-[25, 50, 75, 100]</code></td>
									<td class="text-muted">Any element</td>
									<td>Sets a <strong>width</strong> of the element in percents</td>
								</tr>
								<tr>
									<td><code>.w-auto</code></td>
									<td class="text-muted">Any element</td>
									<td>Sets the <strong>width</strong> of an element to <code>auto</code> (width reset)</td>
								</tr>
								<tr>
									<td><code>.w-[breakpoint]-auto</code></td>
									<td class="text-muted">Any element</td>
									<td>Responsive variations of width reset utility. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xlg</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.h-[25, 50, 75, 100]</code></td>
									<td class="text-muted">Any element</td>
									<td>Sets a <strong>height</strong> of the element in percents</td>
								</tr>
								<tr>
									<td><code>.h-auto</code></td>
									<td class="text-muted">Any element</td>
									<td>Sets the <strong>height</strong> of an element to <code>auto</code> (height reset)</td>
								</tr>

								<tr class="table-border-double table-active">
									<td colspan="3"><span class="font-weight-semibold">Visibility</span></td>
								</tr>
								<tr>
									<td><code>.overflow-[value]</code></td>
									<td class="text-muted">Containers</td>
									<td>Content overflow utility. Available options for <strong>[value]</strong>: <code>hidden</code> - hides content, <code>visible</code> - shows content, <strong>auto</strong> - makes content scrollable</td>
								</tr>
								<tr>
									<td><code>.visible</code></td>
									<td class="text-muted">Containers</td>
									<td>Makes the element invisible for the user, but visible for screen readers</td>
								</tr>
								<tr>
									<td><code>.invisible</code></td>
									<td class="text-muted">Containers</td>
									<td>Can be used to toggle only the visibility of an element, meaning its display is not modified and the element can still affect the flow of the document</td>
								</tr>
								<tr>
									<td><code>.text-hide</code></td>
									<td class="text-muted">Text only</td>
									<td>Helps replace an element's text content with a background image</td>
								</tr>
								<tr>
									<td><code>.sr-only</code></td>
									<td class="text-muted">Any element</td>
									<td>Hides an element to all devices except screen readers</td>
								</tr>


								<tr class="table-border-double table-active">
									<td colspan="3"><span class="font-weight-semibold">Display</span></td>
								</tr>
								<tr>
									<td><code>.d-block</code></td>
									<td class="text-muted">Any element</td>
									<td>Displays an element as a block element</td>
								</tr>
								<tr>
									<td><code>.d-[breakpoint]-block</code></td>
									<td class="text-muted">Any element</td>
									<td>Responsive variations of <code>d-block</code> utility. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xlg</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.d-inline-block</code></td>
									<td class="text-muted">Any element</td>
									<td>Displays an element as an inline-level block container</td>
								</tr>
								<tr>
									<td><code>.d-[breakpoint]-inline-block</code></td>
									<td class="text-muted">Any element</td>
									<td>Responsive variations of <code>d-inline-block</code> utility. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xlg</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.d-inline</code></td>
									<td class="text-muted">Any element</td>
									<td>Displays an element as an inline container</td>
								</tr>
								<tr>
									<td><code>.d-[breakpoint]-inline</code></td>
									<td class="text-muted">Any element</td>
									<td>Responsive variations of <code>d-inline</code> utility. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xlg</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.d-table</code></td>
									<td class="text-muted">Any element</td>
									<td>Displays an element as a table element</td>
								</tr>
								<tr>
									<td><code>.d-[breakpoint]-table</code></td>
									<td class="text-muted">Any element</td>
									<td>Responsive variations of <code>d-table</code> utility. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xlg</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.d-table-cell</code></td>
									<td class="text-muted">Any element</td>
									<td>Displays an element as a table cell element</td>
								</tr>
								<tr>
									<td><code>.d-[breakpoint]-table-cell</code></td>
									<td class="text-muted">Any element</td>
									<td>Responsive variations of <code>d-table-cell</code> utility. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xlg</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.d-flex</code></td>
									<td class="text-muted">Any element</td>
									<td>Displays an element as a block-level flex container</td>
								</tr>
								<tr>
									<td><code>.d-[breakpoint]-flex</code></td>
									<td class="text-muted">Any element</td>
									<td>Responsive variations of <code>d-flex</code> utility. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xlg</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.d-inline-flex</code></td>
									<td class="text-muted">Any element</td>
									<td>Displays an element as an inline-level flex container</td>
								</tr>
								<tr>
									<td><code>.d-[breakpoint]-inline-flex</code></td>
									<td class="text-muted">Any element</td>
									<td>Responsive variations of <code>d-inline-flex</code> utility. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xlg</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.d-none</code></td>
									<td class="text-muted">Any element</td>
									<td>Hides the element (has no effect on layout)</td>
								</tr>
								<tr>
									<td><code>.d-[breakpoint]-none</code></td>
									<td class="text-muted">Any element</td>
									<td>Responsive variations of <code>d-none</code> utility. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xlg</code> screen sizes</td>
								</tr>

								<tr class="table-border-double table-active">
									<td colspan="3"><span class="font-weight-semibold">Spacing</span></td>
								</tr>
								<tr>
									<td><code>.m-[size]</code></td>
									<td class="text-muted">Any element</td>
									<td>Adds <code>margin</code> property to <strong>all</strong> sides. Available <strong>[size]</strong> are: <code>0</code>, <code>1</code> ~ 5px, <code>2</code> ~ 10px, <code>3</code> ~ 20px, <code>4</code> ~ 30px, <code>5</code> ~ 40px, <code>auto</code></td>
								</tr>
								<tr>
									<td><code>.m-[breakpoint]-[size]</code></td>
									<td class="text-muted">Any element</td>
									<td>Responsive variations of <code>.m-[size]</code> utility. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xlg</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.m[l,r,t,b,x,y]-[size]</code></td>
									<td class="text-muted">Any element</td>
									<td>Adds <code>margin</code> property to the specific side: <code>l</code> - left, <code>r</code> - right, <code>t</code> - top, <code>b</code> - bottom, <code>x</code> - horizontal, <code>y</code> - vertical. Options for the size are the same</td>
								</tr>
								<tr>
									<td><code>.m[l,r,t,b]-[breakpoint]-[size]</code></td>
									<td class="text-muted">Any element</td>
									<td>Same as for <code>.m-[breakpoint]-[size]</code>, except <code>x</code> and <code>y</code> options</td>
								</tr>
								<tr class="table-border-solid">
									<td><code>.p-[size]</code></td>
									<td class="text-muted">Any element</td>
									<td>Adds <code>padding</code> property to <strong>all</strong> sides. Available <strong>[size]</strong> are: <code>0</code>, <code>1</code> ~ 5px, <code>2</code> ~ 10px, <code>3</code> ~ 20px, <code>4</code> ~ 30px, <code>5</code> ~ 40px, <code>auto</code></td>
								</tr>
								<tr>
									<td><code>.p-[breakpoint]-[size]</code></td>
									<td class="text-muted">Any element</td>
									<td>Responsive variations of <code>.p-[size]</code> utility. Options for <strong>[breakpoint]</strong>: <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xlg</code> screen sizes</td>
								</tr>
								<tr>
									<td><code>.p[l,r,t,b,x,y]-[size]</code></td>
									<td class="text-muted">Any element</td>
									<td>Adds <code>padding</code> property to the specific side: <code>l</code> - left, <code>r</code> - right, <code>t</code> - top, <code>b</code> - bottom, <code>x</code> - horizontal, <code>y</code> - vertical. Options for the size are the same</td>
								</tr>
								<tr>
									<td><code>.p[l,r,t,b]-[breakpoint]-[size]</code></td>
									<td class="text-muted">Any element</td>
									<td>Same as for <code>.p-[breakpoint]-[size]</code>, except <code>x</code> and <code>y</code> options</td>
								</tr>
								<tr class="table-border-solid">
									<td><code>.ml-2</code></td>
									<td class="text-muted">Inline elements</td>
									<td>Adds extra <code>left</code> margin to the element (mostly for icons and badges)</td>
								</tr>
								<tr>
									<td><code>.mr-2</code></td>
									<td class="text-muted">Inline elements</td>
									<td>Adds extra <code>right</code> margin to the element (mostly for icons and badges)</td>
								</tr>

								<tr class="table-border-double table-active">
									<td colspan="3"><span class="font-weight-semibold">Text</span></td>
								</tr>
								<tr>
									<td><code>.font-size-[value]</code></td>
									<td class="text-muted">Text</td>
									<td>Sets/overrides font size. Available <strong>[value]</strong> options: <code>base</code> ~ 13px, <code>xs</code> ~ 11px; <code>sm</code> - 12px, <code>lg</code> ~ 14px</td>
								</tr>
								<tr>
									<td><code>.line-height-[value]</code></td>
									<td class="text-muted">Text</td>
									<td>Makes it 20px despite the font size. Available <strong>[value]</strong> options: <code>base</code>, <code>xs</code>; <code>sm</code>, <code>lg</code></td>
								</tr>

								<tr class="table-border-double table-active">
									<td colspan="3"><span class="font-weight-semibold">Misc</span></td>
								</tr>
								<tr>
									<td><code>.cursor-[value]</code></td>
									<td class="text-muted">Any element</td>
									<td>Changes cursor style. Available <strong>[value]</strong> options: <code>move</code>, <code>pointer</code> and <code>default</code> styles</td>
								</tr>
								<tr>
									<td><code>.shadow-0</code></td>
									<td class="text-muted">Any element</td>
									<td>Removes shadow from element</td>
								</tr>
								<tr>
									<td><code>[data-fouc]</code></td>
									<td class="text-muted">jQuery plugins</td>
									<td>This is an attribute that partially helps to fix <a href="https://en.wikipedia.org/wiki/Flash_of_unstyled_content" target="_blank">FOUC</a> issue. It sets <code>opacity</code> to <code>0</code> and other properties to match styled component size. So that you won't see unstyled content flashing when plugin gets initialized.</td>
								</tr>
							</tbody>
						</table>
					</div>
	            </div>
	            <!-- /helper classes -->

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
