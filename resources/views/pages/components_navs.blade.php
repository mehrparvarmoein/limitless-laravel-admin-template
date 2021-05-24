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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Components</span> - Navs</h4>
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
							<a href="components_navs" class="breadcrumb-item">Components</a>
							<span class="breadcrumb-item active">Navs</span>
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

				<!-- List group component -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">List group component</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">List group is a flexible and powerful component for displaying not only simple lists of elements, but complex ones with custom content. The most basic list group is simply an unordered list with list items, and the proper classes. To use linked list group items, add anchor tags instead of list items (that also means a parent <code>&lt;div></code> instead of an <code>&lt;ul></code>). If list group is used in sidebar, card or any other container with borders, add <code>.list-group-flush</code> class to list group container to remove vertical borders.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Basic list group</div>
										<span class="text-muted">With unordered list markup</span>
									</div>

									<ul class="list-group">
										<li class="list-group-item">Sheared coasted so concurrent</li>
										<li class="list-group-item">Goodness instead gull vulture</li>
										<li class="list-group-item">Relentless ouch essentially</li>
										<li class="list-group-item">Devilish yellow unsafe jerkily</li>
									</ul>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Item states</div>
										<span class="text-muted">Active and disabled item states</span>
									</div>

									<ul class="list-group">
										<li class="list-group-item active">Sheared coasted so concurrent</li>
										<li class="list-group-item">Goodness instead gull vulture</li>
										<li class="list-group-item disabled">Relentless ouch essentially</li>
										<li class="list-group-item">Devilish yellow unsafe jerkily</li>
									</ul>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Item divider</div>
										<span class="text-muted">Separate groups of related items</span>
									</div>

									<ul class="list-group">
										<li class="list-group-item">Sheared coasted so concurrent</li>
										<li class="list-group-item">Goodness instead gull vulture</li>
										<li class="list-group-item">Relentless ouch essentially</li>
										<li class="list-group-item list-group-divider"></li>
										<li class="list-group-item">Devilish yellow unsafe jerkily</li>
									</ul>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Group headers</div>
										<span class="text-muted">Use available text styles for group headers</span>
									</div>

									<ul class="list-group">
										<li class="list-group-item font-weight-semibold">List header</li>
										<li class="list-group-item">Sheared coasted so concurrent</li>
										<li class="list-group-item">Goodness instead gull vulture</li>
										<li class="list-group-item">Relentless ouch essentially</li>
										<li class="list-group-item font-weight-semibold">Another list header</li>
										<li class="list-group-item">Devilish yellow unsafe jerkily</li>
									</ul>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Custom background color</div>
										<span class="text-muted">Custom colors from color system are also supported</span>
									</div>

									<ul class="list-group bg-slate-600">
										<li class="list-group-item font-weight-semibold">List header</li>
										<li class="list-group-item active">Sheared coasted so concurrent</li>
										<li class="list-group-item">Goodness instead gull vulture</li>
										<li class="list-group-item list-group-divider"></li>
										<li class="list-group-item disabled">Relentless ouch essentially</li>
										<li class="list-group-item">Devilish yellow unsafe jerkily</li>
									</ul>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Bordered items</div>
										<span class="text-muted">Display horizontal borders in items</span>
									</div>

									<ul class="list-group list-group-bordered">
										<li class="list-group-item">Sheared coasted so concurrent</li>
										<li class="list-group-item">Goodness instead gull vulture</li>
										<li class="list-group-item">Relentless ouch essentially</li>
										<li class="list-group-item">Devilish yellow unsafe jerkily</li>
									</ul>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Options of bordered items</div>
										<span class="text-muted">Same options can be applied to any group style</span>
									</div>

									<ul class="list-group list-group-bordered">
										<li class="list-group-item font-weight-semibold">List header</li>
										<li class="list-group-item active">Sheared coasted so concurrent</li>
										<li class="list-group-item">Goodness instead gull vulture</li>
										<li class="list-group-item disabled">Relentless ouch essentially</li>
										<li class="list-group-item">Devilish yellow unsafe jerkily</li>
									</ul>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Custom background color</div>
										<span class="text-muted">Custom colors from color system are also supported</span>
									</div>

									<ul class="list-group list-group-bordered bg-slate-600">
										<li class="list-group-item font-weight-semibold">List header</li>
										<li class="list-group-item active">Sheared coasted so concurrent</li>
										<li class="list-group-item">Goodness instead gull vulture</li>
										<li class="list-group-item disabled">Relentless ouch essentially</li>
										<li class="list-group-item">Devilish yellow unsafe jerkily</li>
									</ul>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Linked actions</div>
										<span class="text-muted">With group of links inside <code>div</code> element</span>
									</div>

									<div class="list-group">
										<a href="#" class="list-group-item list-group-item-action">And hello exotic staunch</a>
										<a href="#" class="list-group-item list-group-item-action">That and well ecstatically</a>
										<a href="#" class="list-group-item list-group-item-action">Amid ruefully hello sped</a>
										<a href="#" class="list-group-item list-group-item-action">Burst circa less contritely</a>
									</div>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Action item states</div>
										<span class="text-muted">Active and disabled link states</span>
									</div>

									<div class="list-group">
										<a href="#" class="list-group-item list-group-item-action active">And hello exotic staunch</a>
										<a href="#" class="list-group-item list-group-item-action">That and well ecstatically</a>
										<a href="#" class="list-group-item list-group-item-action disabled">Amid ruefully hello sped</a>
										<a href="#" class="list-group-item list-group-item-action">Burst circa less contritely</a>
									</div>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Action item divider</div>
										<span class="text-muted">Separate groups of related links</span>
									</div>

									<div class="list-group">
										<a href="#" class="list-group-item list-group-item-action">And hello exotic staunch</a>
										<a href="#" class="list-group-item list-group-item-action">That and well ecstatically</a>
										<a href="#" class="list-group-item list-group-item-action">Amid ruefully hello sped</a>
										<div class="list-group-item list-group-divider"></div>
										<a href="#" class="list-group-item list-group-item-action">Burst circa less contritely</a>
									</div>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Action group headers</div>
										<span class="text-muted">Use available text styles for group headers</span>
									</div>

									<div class="list-group">
										<div class="list-group-item font-weight-semibold">List header</div>
										<a href="#" class="list-group-item list-group-item-action">And hello exotic staunch</a>
										<a href="#" class="list-group-item list-group-item-action">That and well ecstatically</a>
										<a href="#" class="list-group-item list-group-item-action">Amid ruefully hello sped</a>
										<div class="list-group-item font-weight-semibold">Another list header</div>
										<a href="#" class="list-group-item list-group-item-action">Burst circa less contritely</a>
									</div>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Custom background color</div>
										<span class="text-muted">Custom colors from color system are also supported</span>
									</div>

									<div class="list-group bg-slate-600">
										<div class="list-group-item font-weight-semibold">List header</div>
										<a href="#" class="list-group-item list-group-item-action active">And hello exotic staunch</a>
										<a href="#" class="list-group-item list-group-item-action">That and well ecstatically</a>
										<div class="list-group-item list-group-divider"></div>
										<a href="#" class="list-group-item list-group-item-action disabled">Amid ruefully hello sped</a>
										<a href="#" class="list-group-item list-group-item-action">Burst circa less contritely</a>
									</div>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Bordered action items</div>
										<span class="text-muted">Display horizontal borders in links</span>
									</div>

									<div class="list-group list-group-bordered">
										<a href="#" class="list-group-item list-group-item-action">And hello exotic staunch</a>
										<a href="#" class="list-group-item list-group-item-action">That and well ecstatically</a>
										<a href="#" class="list-group-item list-group-item-action">Amid ruefully hello sped</a>
										<a href="#" class="list-group-item list-group-item-action">Burst circa less contritely</a>
									</div>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Options of bordered action items</div>
										<span class="text-muted">Same options can be applied to any group style</span>
									</div>

									<div class="list-group list-group-bordered">
										<div class="list-group-item font-weight-semibold">List header</div>
										<a href="#" class="list-group-item list-group-item-action active">And hello exotic staunch</a>
										<a href="#" class="list-group-item list-group-item-action">That and well ecstatically</a>
										<a href="#" class="list-group-item list-group-item-action disabled">Amid ruefully hello sped</a>
										<a href="#" class="list-group-item list-group-item-action">Burst circa less contritely</a>
									</div>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Custom background color</div>
										<span class="text-muted">Custom colors from color system are also supported</span>
									</div>

									<div class="list-group list-group-bordered bg-slate-600">
										<div class="list-group-item font-weight-semibold">List header</div>
										<a href="#" class="list-group-item list-group-item-action active">And hello exotic staunch</a>
										<a href="#" class="list-group-item list-group-item-action">That and well ecstatically</a>
										<a href="#" class="list-group-item list-group-item-action disabled">Amid ruefully hello sped</a>
										<a href="#" class="list-group-item list-group-item-action">Burst circa less contritely</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /list group component -->


				<!-- Horizontal list group -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Horizontal direction</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">List group component supports 2 directions - vertical and horizontal. Simply add <code>.list-group-horizontal</code> class to change the layout of list group items from vertical to horizontal across all breakpoints. Alternatively, choose a responsive variant <code>.list-group-horizontal-{sm|md|lg|xl}</code> to make a list group horizontal starting at that breakpoint’s <code>min-width</code>.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Basic list group</div>
										<span class="text-muted">With unordered list markup</span>
									</div>

									<ul class="list-group list-group-horizontal-sm py-sm-0">
										<li class="list-group-item">Sheared coasted</li>
										<li class="list-group-item">Goodness instead</li>
										<li class="list-group-item">Relentless ouch</li>
										<li class="list-group-item">Devilish yellow</li>
									</ul>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Item states</div>
										<span class="text-muted">Active and disabled item states</span>
									</div>

									<ul class="list-group list-group-horizontal-sm py-sm-0">
										<li class="list-group-item active">Sheared coasted</li>
										<li class="list-group-item">Goodness instead</li>
										<li class="list-group-item disabled">Relentless ouch</li>
										<li class="list-group-item">Devilish yellow</li>
									</ul>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Justified list</div>
										<span class="text-muted">Fills up all available width</span>
									</div>

									<ul class="list-group list-group-horizontal-sm py-sm-0">
										<li class="list-group-item w-sm-100 justify-content-sm-center active">Sheared coasted</li>
										<li class="list-group-item w-sm-100 justify-content-sm-center">Goodness instead</li>
										<li class="list-group-item w-sm-100 justify-content-sm-center disabled">Relentless ouch</li>
										<li class="list-group-item w-sm-100 justify-content-sm-center">Devilish yellow</li>
									</ul>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Linked actions</div>
										<span class="text-muted">With group of links inside <code>div</code> element</span>
									</div>

									<ul class="list-group list-group-horizontal-sm py-sm-0">
										<a href="#" class="list-group-item list-group-item-action">Sheared coasted</a>
										<a href="#" class="list-group-item list-group-item-action">Goodness instead</a>
										<a href="#" class="list-group-item list-group-item-action">Relentless ouch</a>
										<a href="#" class="list-group-item list-group-item-action">Devilish yellow</a>
									</ul>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Action item states</div>
										<span class="text-muted">ctive and disabled link states</span>
									</div>

									<ul class="list-group list-group-horizontal-sm py-sm-0">
										<a href="#" class="list-group-item list-group-item-action active">Sheared coasted</a>
										<a href="#" class="list-group-item list-group-item-action">Goodness instead</a>
										<a href="#" class="list-group-item list-group-item-action disabled">Relentless ouch</a>
										<a href="#" class="list-group-item list-group-item-action">Devilish yellow</a>
									</ul>
								</div>

								<div class="mb-4">
									<div class="mb-3">
										<div class="font-weight-semibold">Justified linked list</div>
										<span class="text-muted">Fills up all available width</span>
									</div>

									<ul class="list-group list-group-horizontal-sm py-sm-0">
										<a href="#" class="list-group-item list-group-item-action w-sm-100 justify-content-sm-center active">Sheared coasted</a>
										<a href="#" class="list-group-item list-group-item-action w-sm-100 justify-content-sm-center">Goodness instead</a>
										<a href="#" class="list-group-item list-group-item-action w-sm-100 justify-content-sm-center disabled">Relentless ouch</a>
										<a href="#" class="list-group-item list-group-item-action w-sm-100 justify-content-sm-center">Devilish yellow</a>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /horizontal list group -->


				<!-- Contextual classes -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Contextual classes</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Example of list items <code>contextual</code> classes. Depending on the context, you can highlight a specific list group item using available contextual classes: <code>primary</code>, <code>secondary</code>, <code>danger</code>, <code>success</code>, <code>warning</code> and <code>info</code>. To use, add <code>.list-group-item-*</code> class to the base <code>.list-group-item</code> class. Also you can add <code>.active</code> class to highlight active list item. Custom colors are also supported.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<div class="mb-3">
										<div class="font-weight-semibold">List item colors</div>
										<span class="text-muted">6 default or custom contextual colors</span>
									</div>

									<ul class="list-group">
										<li class="list-group-item">Primary context</li>
										<li class="list-group-item list-group-item-primary">But I must explain to you how all this mistaken</li>

										<li class="list-group-item">Secondary context</li>
										<li class="list-group-item list-group-item-secondary">I will give you a complete account of the system</li>

										<li class="list-group-item">Success context</li>
										<li class="list-group-item list-group-item-success">Nor again is there anyone who loves or pursues</li>

										<li class="list-group-item">Danger context</li>
										<li class="list-group-item list-group-item-danger">But who has any right to find fault with a man</li>

										<li class="list-group-item">Warning context</li>
										<li class="list-group-item list-group-item-warning">On the other hand, we denounce with righteous</li>

										<li class="list-group-item">Info context</li>
										<li class="list-group-item list-group-item-info">These cases are perfectly simple to distinguish</li>
									</ul>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-3">
									<div class="mb-3">
										<div class="font-weight-semibold">Linked list item colors</div>
										<span class="text-muted">6 default or custom contextual colors</span>
									</div>

									<div class="list-group">
										<div class="list-group-item">Primary context</div>
										<a href="#" class="list-group-item list-group-item-action list-group-item-primary">But I must explain to you how all this mistaken</a>

										<div class="list-group-item">Secondary context</div>
										<a href="#" class="list-group-item list-group-item-action list-group-item-secondary">I will give you a complete account of the system</a>

										<div class="list-group-item">Success context</div>
										<a href="#" class="list-group-item list-group-item-action list-group-item-success">Nor again is there anyone who loves or pursues</a>

										<div class="list-group-item">Danger context</div>
										<a href="#" class="list-group-item list-group-item-action list-group-item-danger">But who has any right to find fault with a man</a>

										<div class="list-group-item">Warning context</div>
										<a href="#" class="list-group-item list-group-item-action list-group-item-warning">On the other hand, we denounce with righteous</a>

										<div class="list-group-item">Info context</div>
										<a href="#" class="list-group-item list-group-item-action list-group-item-info">These cases are perfectly simple to distinguish</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /contextual classes -->


				<!-- List group elements -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">List group elements</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Examples of group list <code>elements</code>. You can add badges, badge pills and icons to any list group item. Depending on a placement of the component, it will appear <code>before</code>, <code>after</code> or will be positioned on the <code>right</code> of the list item. To use right positioned element, simply add <code>.ml-auto</code> helper class to group item. Dropdown menus are also supported.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<p class="font-weight-semibold">Icons in list group</p>

									<ul class="list-group">
										<li class="list-group-item font-weight-semibold"><i class="icon-menu7 mr-2"></i> Group header</li>

										<li class="list-group-item">
											<i class="icon-comment-discussion mr-2"></i> And hello exotic staunch
										</li>

										<li class="list-group-item active">
											<i class="icon-mention mr-2"></i> That and well ecstatically
										</li>

										<li class="list-group-item">
											Sheared coasted so concurrent <i class="icon-gear ml-auto"></i>
										</li>

										<li class="list-group-item disabled">
											Into darn intrepid belated <i class="icon-graph ml-auto"></i>
										</li>
									</ul>
								</div>

								<div class="mb-3">
									<p class="font-weight-semibold">Badges in list group</p>

									<ul class="list-group">
										<li class="list-group-item font-weight-semibold">
											Group header <span class="badge badge-pill bg-grey-700 ml-auto">37</span>
										</li>

										<li class="list-group-item">
											<span class="badge badge-pill badge-danger mr-2">93</span> And hello exotic staunch
										</li>

										<li class="list-group-item active">
											<span class="badge badge-pill badge-primary mr-2">73</span> That and well ecstatically
										</li>

										<li class="list-group-item disabled">
											Sheared coasted so concurrent <span class="badge bg-pink-400 ml-auto">New</span>
										</li>

										<li class="list-group-item">
											Into darn intrepid belated <span class="badge bg-teal-400 ml-auto">Resolved</span>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-3">
									<p class="font-weight-semibold">Icons in linked list group</p>

									<div class="list-group">
										<div class="list-group-item font-weight-semibold"><i class="icon-menu7 mr-2"></i> Group header</div>

										<a href="#" class="list-group-item list-group-item-action">
											<i class="icon-comment-discussion mr-2"></i> And hello exotic staunch
										</a>

										<a href="#" class="list-group-item list-group-item-action active">
											<i class="icon-mention mr-2"></i> That and well ecstatically
										</a>

										<a href="#" class="list-group-item list-group-item-action">
											Sheared coasted so concurrent <i class="icon-gear ml-auto"></i>
										</a>

										<a href="#" class="list-group-item list-group-item-action disabled">
											Into darn intrepid belated <i class="icon-graph ml-auto"></i>
										</a>
									</div>
								</div>

								<div class="mb-3">
									<p class="font-weight-semibold">Badges in linked list group</p>

									<div class="list-group">
										<div class="list-group-item font-weight-semibold">
											Group header <span class="badge bg-grey-700 ml-auto">Fixes</span>
										</div>

										<a href="#" class="list-group-item list-group-item-action">
											<span class="badge badge-pill badge-danger mr-2">93</span> And hello exotic staunch
										</a>

										<a href="#" class="list-group-item list-group-item-action active">
											<span class="badge badge-pill badge-primary mr-2">73</span> That and well ecstatically
										</a>

										<a href="#" class="list-group-item list-group-item-action disabled">
											Sheared coasted so concurrent <span class="badge bg-pink-400 ml-auto">New</span>
										</a>

										<a href="#" class="list-group-item list-group-item-action">
											Into darn intrepid belated <span class="badge bg-teal-400 ml-auto">Resolved</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /list group elements -->


				<!-- List group with custom content -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Custom content</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Simple example of a <code>custom</code> content in the list group component. You can add nearly any HTML markup, add images, custom elements and colors to the list group item. Example below demonstrates a simple content with icons, titles, right annotations and text body. Also some empty list items for extra spacing. For proper content styling, flexbox utilities must be used.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<p class="font-weight-semibold">Custom content</p>

									<ul class="list-group">
										<li class="list-group-item">
											<div class="flex-fill">
												<div class="d-flex justify-content-between">
													<h6 class="mb-1"><i class="icon-car mr-2"></i> Leapt so heedlessly</h6>
													<span class="text-muted">2 days ago</span>
												</div>

												Haltered disconsolate cocky grizzly rode said oh outgrew patiently wild empirically near this and a alas some more
											</div>
										</li>

										<li class="list-group-item">
											<div class="flex-fill">
												<div class="d-flex justify-content-between">
													<h6 class="mb-1"><i class="icon-bus mr-2"></i> Black where yikes</h6>
													<span class="text-muted">3 days ago</span>
												</div>
												
												This and shivered wow boa yikes additional much one lavish gasped outside amongst jeez scurrilously and octopus
											</div>
										</li>

										<li class="list-group-item">
											<div class="flex-fill">
												<div class="d-flex justify-content-between">
													<h6 class="mb-1"><i class="icon-train2 mr-2"></i> Gecko preparatory</h6>
													<span class="text-muted">4 days ago</span>
												</div>
												
												Insincere dipped flauntingly yikes therefore or more clenched but beneath krill before dear however
											</div>
										</li>

										<li class="list-group-item list-group-divider"></li>

										<li class="list-group-item">
											<div class="flex-fill">
												<div class="d-flex justify-content-between">
													<h6 class="mb-1"><i class="icon-people mr-2"></i> Parrot slid wow</h6>
													<span class="text-muted">5 days ago</span>
												</div>

												Gosh plankton thus egotistically alas satisfactorily flatly towards and far therefore oh drove convenient less
											</div>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-3">
									<p class="font-weight-semibold">Custom linked content</p>

									<div class="list-group">
										<a href="#" class="list-group-item list-group-item-action">
											<div class="flex-fill">
												<div class="d-flex justify-content-between">
													<h6 class="mb-1"><i class="icon-car mr-2"></i> Leapt so heedlessly</h6>
													<span class="text-muted">2 days ago</span>
												</div>

												Haltered disconsolate cocky grizzly rode said oh outgrew patiently wild empirically near this and a alas some more
											</div>
										</a>

										<a href="#" class="list-group-item list-group-item-action">
											<div class="flex-fill">
												<div class="d-flex justify-content-between">
													<h6 class="mb-1"><i class="icon-bus mr-2"></i> Black where yikes</h6>
													<span class="text-muted">3 days ago</span>
												</div>

												This and shivered wow boa yikes additional much one lavish gasped outside amongst jeez scurrilously and octopus
											</div>
										</a>

										<a href="#" class="list-group-item list-group-item-action">
											<div class="flex-fill">
												<div class="d-flex justify-content-between">
													<h6 class="mb-1"><i class="icon-train2 mr-2"></i> Gecko preparatory</h6>
													<span class="text-muted">4 days ago</span>
												</div>

												Insincere dipped flauntingly yikes therefore or more clenched but beneath krill before dear however
											</div>
										</a>

										<div class="list-group-item list-group-divider"></div>

										<a href="#" class="list-group-item list-group-item-action">
											<div class="flex-fill">
												<div class="d-flex justify-content-between">
													<h6 class="mb-1"><i class="icon-people mr-2"></i> Parrot slid wow</h6>
													<span class="text-muted">5 days ago</span>
												</div>

												Gosh plankton thus egotistically alas satisfactorily flatly towards and far therefore oh drove convenient less
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /list group with custom content -->

					</div>
				</div>
				<!-- /list group component -->

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
