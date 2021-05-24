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
	<script src="../../../../global_assets/js/plugins/extensions/contextmenu.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/extra_context_menu.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Extra</span> - Context Menu</h4>
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
							<a href="extra_context_menu" class="breadcrumb-item">Extra</a>
							<span class="breadcrumb-item active">Context menu</span>
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

				<!-- Basic usage -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Plugin initialization
					</h6>
					<span class="text-muted d-block">Context menu initialization options</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Initialize with data attributes -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Using data attributes</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body" data-toggle="context" data-target=".context-data-menu">
								<p class="mb-3">Add <code>data-toggle="context"</code> to any element that needs a custom context menu. And point <code>data-target</code> attribute to your custom context menu.</p>
								<pre class="language-markup"><code>&lt;div data-toggle="context" data-target=".context-menu">&lt;/div>

&lt;div class="context-menu">
	&lt;div class="dropdown-menu">
		&lt;a href="#" class="dropdown-item">Action&lt;/a>
		&lt;a href="#" class="dropdown-item">Another action&lt;/a>
		&lt;div class="dropdown-divider">&lt;/div>
		&lt;a href="#" class="dropdown-item">Something else here&lt;/a>
	&lt;/div>
&lt;/div></code></pre>
								<div class="context-data-menu context-toggle">
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
										<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
										<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /initialize with data attributes -->

					</div>

					<div class="col-md-6">

						<!-- Initialize with js -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Using Javascript</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body context-js">
								<p class="mb-3">Also content menu can be initialized via JavaScript call. In this case data attributes are not required, target can be set in plugin configuration.</p>
								<pre class="language-javascript"><code>$('.context').contextmenu({
	target:'#context-menu', 
	before: function(e,context) {
		// execute code before context menu if shown
	},
	onItem: function(context,e) {
		// execute on menu item selection
	},
	scopes: 'tbody > tr'
})</code></pre>
								<div class="context-js-menu context-toggle">
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
										<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
										<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /initialize with js -->

					</div>
				</div>
				<!-- /basic usage -->


				<!-- Content attachment -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Content attachment
					</h6>
					<span class="text-muted d-block">Card and content elements attachment</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Card attachment -->
						<div class="card" data-toggle="context" data-target=".context-card-menu">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Card attachment</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								Current example demonstrates context menu attached to the whole card. Add <code>data-toggle="context"</code> to the card and point <code>data-target</code> attribute to the menu.

								<div class="context-card-menu context-toggle">
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
										<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
										<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /card attachment -->

					</div>

					<div class="col-md-6">

						<!-- Element attachment -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title" data-toggle="context" data-target=".context-element-menu">Element attachment</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Current example demonstrates context menu attached to some element <span class="font-weight-semibold">only</span> instead of full card. Right click on current <code>card title</code> to see it in action

								<div class="context-element-menu context-toggle">
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
										<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
										<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /element attachment -->

					</div>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Inline attachment -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Inline attachment</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Also context menu can be attached to the <a href="#" data-toggle="context" data-target=".context-inline-menu">link</a> or any other <span class="font-weight-semibold" data-toggle="context" data-target=".context-inline-menu">content elements</span> like headings, paragraphs, span's, lists, labels, form components, buttons, button groups etc.

								<div class="context-inline-menu context-toggle">
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
										<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
										<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /inline attachment -->

					</div>

					<div class="col-md-6">

						<!-- Exclude elements -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Exclude elements</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body context-deactivate">
								Current example demonstrates context menu attached to the card content, excluding <code>&lt;code>...&lt;/code></code> phrase tag. Try to right click on the <code>code block</code>.

								<div class="context-deactivate-menu context-toggle">
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
										<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
										<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /exclude elements -->

					</div>
				</div>
				<!-- /content attachment -->


				<!-- Table attachment -->
				<div class="row">
					<div class="col-md-6">

						<!-- Table attachment -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Table attachment</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Example with context menu attached to the whole table.
							</div>

							<div class="table-responsive">
								<table class="table" data-toggle="context" data-target=".context-table">
									<thead>
										<tr>
											<th style="width: 40px;">#</th>
											<th>Description</th>
											<th>Date</th>
											<th class="text-center" style="width: 100px;">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="#">Cozy sphinx waves quart jug of bad milk.</a></td>
											<td>July 13, 2014</td>
											<td class="text-center">
												<div class="list-icons">
							                		<a href="#" class="list-icons-item">
							                			<i class="icon-plus22"></i>
							                		</a>

							                		<a href="#" class="list-icons-item">
							                			<i class="icon-three-bars"></i>
							                		</a>
							                	</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td><a href="#">Few quips galvanized the mock jury box.</a></td>
											<td>July 14, 2014</td>
											<td class="text-center">
												<div class="list-icons">
							                		<a href="#" class="list-icons-item">
							                			<i class="icon-plus22"></i>
							                		</a>

							                		<a href="#" class="list-icons-item">
							                			<i class="icon-three-bars"></i>
							                		</a>
							                	</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td><a href="#">Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph.</a></td>
											<td>July 15, 2014</td>
											<td class="text-center">
												<div class="list-icons">
							                		<a href="#" class="list-icons-item">
							                			<i class="icon-plus22"></i>
							                		</a>

							                		<a href="#" class="list-icons-item">
							                			<i class="icon-three-bars"></i>
							                		</a>
							                	</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="context-table context-toggle">
								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
									<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
									<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
								</div>
							</div>
						</div>
						<!-- /table attachment -->

					</div>

					<div class="col-md-6">

						<!-- Row attachment -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Row attachment</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Example with context menu attached to the table row. Attached to the first row.
							</div>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th style="width: 40px;">#</th>
											<th>Description</th>
											<th>Date</th>
											<th class="text-center" style="width: 100px;">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr data-toggle="context" data-target=".context-table-row">
											<td>1</td>
											<td><a href="#">Cozy sphinx waves quart jug of bad milk.</a></td>
											<td>July 13, 2014</td>
											<td class="text-center">
												<div class="list-icons">
							                		<a href="#" class="list-icons-item">
							                			<i class="icon-plus22"></i>
							                		</a>

							                		<a href="#" class="list-icons-item">
							                			<i class="icon-three-bars"></i>
							                		</a>
							                	</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td><a href="#">Few quips galvanized the mock jury box.</a></td>
											<td>July 14, 2014</td>
											<td class="text-center">
												<div class="list-icons">
							                		<a href="#" class="list-icons-item">
							                			<i class="icon-plus22"></i>
							                		</a>

							                		<a href="#" class="list-icons-item">
							                			<i class="icon-three-bars"></i>
							                		</a>
							                	</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td><a href="#">Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph.</a></td>
											<td>July 15, 2014</td>
											<td class="text-center">
												<div class="list-icons">
							                		<a href="#" class="list-icons-item">
							                			<i class="icon-plus22"></i>
							                		</a>

							                		<a href="#" class="list-icons-item">
							                			<i class="icon-three-bars"></i>
							                		</a>
							                	</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="context-table-row context-toggle">
								<div class="dropdown-menu">
									<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
									<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
									<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
								</div>
							</div>
						</div>
						<!-- /row attachment -->

					</div>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Cell attachment -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Cell attachment</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Example with context menu attached to the table cell only. Attached to cells with links.
							</div>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th style="width: 40px;">#</th>
											<th>Description</th>
											<th>Date</th>
											<th class="text-center" style="width: 100px;">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td data-toggle="context" data-target=".context-table-cell"><a href="#">Cozy sphinx waves quart jug of bad milk.</a></td>
											<td>July 13, 2014</td>
											<td class="text-center">
												<div class="list-icons">
							                		<a href="#" class="list-icons-item">
							                			<i class="icon-plus22"></i>
							                		</a>

							                		<a href="#" class="list-icons-item">
							                			<i class="icon-three-bars"></i>
							                		</a>
							                	</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td data-toggle="context" data-target=".context-table-cell"><a href="#">Few quips galvanized the mock jury box.</a></td>
											<td>July 14, 2014</td>
											<td class="text-center">
												<div class="list-icons">
							                		<a href="#" class="list-icons-item">
							                			<i class="icon-plus22"></i>
							                		</a>

							                		<a href="#" class="list-icons-item">
							                			<i class="icon-three-bars"></i>
							                		</a>
							                	</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td data-toggle="context" data-target=".context-table-cell"><a href="#">Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph.</a></td>
											<td>July 15, 2014</td>
											<td class="text-center">
												<div class="list-icons">
							                		<a href="#" class="list-icons-item">
							                			<i class="icon-plus22"></i>
							                		</a>

							                		<a href="#" class="list-icons-item">
							                			<i class="icon-three-bars"></i>
							                		</a>
							                	</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="context-table-cell context-toggle">
								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
									<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
									<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
								</div>
							</div>
						</div>
						<!-- /cell attachment -->

					</div>

					<div class="col-md-6">

						<!-- Table content attachment -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Table content attachment</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Example with context menu attached to the table content. Attached to action icons.
							</div>

							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th style="width: 40px;">#</th>
											<th>Description</th>
											<th>Date</th>
											<th class="text-center" style="width: 100px;">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="#">Cozy sphinx waves quart jug of bad milk.</a></td>
											<td>July 13, 2014</td>
											<td class="text-center">
												<div class="list-icons">
							                		<a href="#" class="list-icons-item" data-toggle="context" data-target=".context-table-content">
							                			<i class="icon-plus22"></i>
							                		</a>

							                		<a href="#" class="list-icons-item" data-toggle="context" data-target=".context-table-content">
							                			<i class="icon-three-bars"></i>
							                		</a>
							                	</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td><a href="#">Few quips galvanized the mock jury box.</a></td>
											<td>July 14, 2014</td>
											<td class="text-center">
												<div class="list-icons">
							                		<a href="#" class="list-icons-item" data-toggle="context" data-target=".context-table-content">
							                			<i class="icon-plus22"></i>
							                		</a>

							                		<a href="#" class="list-icons-item" data-toggle="context" data-target=".context-table-content">
							                			<i class="icon-three-bars"></i>
							                		</a>
							                	</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td><a href="#">Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph.</a></td>
											<td>July 15, 2014</td>
											<td class="text-center">
												<div class="list-icons">
							                		<a href="#" class="list-icons-item" data-toggle="context" data-target=".context-table-content">
							                			<i class="icon-plus22"></i>
							                		</a>

							                		<a href="#" class="list-icons-item" data-toggle="context" data-target=".context-table-content">
							                			<i class="icon-three-bars"></i>
							                		</a>
							                	</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="context-table-content context-toggle">
								<div class="dropdown-menu">
									<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
									<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
									<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
								</div>
							</div>
						</div>
						<!-- /table content attachment -->

					</div>
				</div>
				<!-- /table attachment -->


				<!-- Dropdown options -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Context menu options
					</h6>
					<span class="text-muted d-block">Dropdown menu options and colors</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Dropdown submenu -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Dropdown submenu</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body context-submenu">
								Context dropdown menu supports multi level menus as it uses default Bootstrap <code>dropdown-menu</code> markup. As well as left sub menu direction using <code>.dropdown-submenu-left</code> helper class.

								<div class="context-sub-menu context-toggle">
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<div class="dropdown-submenu">
											<a href="#" class="dropdown-item dropdown-toggle">More options</a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Second level link</a>
												<a href="#" class="dropdown-item">Second level link</a>
												<a href="#" class="dropdown-item">Second level link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /dropdown submenu -->

					</div>

					<div class="col-md-6">

						<!-- Dropdown options -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Dropdown options</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body" data-toggle="context" data-target=".context-options-menu">
								Since context dropdown menu supports default Bootstrap <code>dropdown-menu</code> markup, any existing menu options can be used: disabled items, icons, borders, dividers etc.

								<div class="context-options-menu context-toggle">
									<div class="dropdown-menu border-left-danger">
										<div class="dropdown-header">Dropdown heading</div>
										<a href="#" class="dropdown-item">Another <span class="font-weight-semibold">semibold action</span></a>
										<a href="#" class="dropdown-item"><span class="font-weight-light">Something</span> <span class="font-weight-semibold">else</span> <span class="font-italic">here</span></a>
										<a href="#" class="dropdown-item disabled"><strong>One more</strong> <span class="font-weight-light">disabled line</span></a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><strong>Separated item</strong></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /dropdown options -->

					</div>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Dynamic replacement -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Dynamic replacement</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body context-dynamic">
								Current example demonstrates context menu, which contains an item, modified dynamically using <code>before: function () {...}</code> plugin function.

								<div class="context-dynamic-menu context-toggle">
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
										<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
										<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /dynamic replacement -->

					</div>

					<div class="col-md-6">

						<!-- Name on selection -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Name on selection</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body context-selection">
								Current example demonstrates context menu with function that shows menu name on item selection using <code>onItem: function () {...}</code> plugin function.

								<div class="context-selection-menu context-toggle">
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
										<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
										<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /name on selection -->

					</div>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Menu sizing -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Menu sizing</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body" data-toggle="context" data-target=".context-color-menu">
								Context menus support all optional styles available for dropdowns - colors, sizes, headers, dividers, icons, badges, checkboxes etc. To use, add single or multiple optional classes to dropdown elements.

								<div class="context-color-menu context-toggle">
									<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
										<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
										<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /menu sizing -->

					</div>

					<div class="col-md-6">

						<!-- Solid dropdowns -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Solid color</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body" data-toggle="context" data-target=".context-solid-menu">
								Besides custom state colors, context dropdown menu supports predefined and custom solid background colors. Just add <code>.bg-*</code> class to the existing context menu.

								<div class="context-solid-menu context-toggle">
									<div class="dropdown-menu bg-pink-400">
										<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
										<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
										<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /solid dropdowns -->

					</div>
				</div>
				<!-- /dropdown options -->


				<!-- Events -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Plugin events
					</h6>
					<span class="text-muted d-block">Context dropdown menu events</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- onShow event -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">onShow event</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body" data-toggle="context" data-target=".context-show-menu">
								<p class="mb-3">Current example demonstrates context menu with <code>show.bs.context</code>event. This event fires immediately when the context dropdown menu is opened.</p>
								<pre class="language-javascript"><code>$('#myMenu').on('show.bs.context',function () {
	// do something...
});</code></pre>
								<div class="context-show-menu context-toggle">
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
										<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
										<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /onShow event -->


						<!-- onShown event -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">onShown event</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body" data-toggle="context" data-target=".context-shown-menu">
								<p class="mb-3">Current example demonstrates context menu with <code>shown.bs.context</code>event. This event is fired when the dropdown has been made visible to the user.</p>
								<pre class="language-javascript"><code>$('#myMenu').on('shown.bs.context',function () {
	// do something...
});</code></pre>
								<div class="context-shown-menu">
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
										<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
										<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /onShown event -->

					</div>

					<div class="col-md-6">

						<!-- onHide event -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">onHide event</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body" data-toggle="context" data-target=".context-hide-menu">
								<p class="mb-3">Current example demonstrates context menu with <code>hide.bs.context</code>event. This event is fired immediately when the hide instance method has been called.</p>
								<pre class="language-javascript"><code>$('#myMenu').on('hide.bs.context',function () {
	// do something...
});</code></pre>
								<div class="context-hide-menu context-toggle">
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
										<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
										<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /onHide event -->


						<!-- onHidden event -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">onHidden event</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body" data-toggle="context" data-target=".context-hidden-menu">
								<p class="mb-3">Current example demonstrates context menu with <code>hidden.bs.context</code>event. This event is fired when the dropdown has finished being hidden from the user.</p>
								<pre class="language-javascript"><code>$('#myMenu').on('hidden.bs.context',function () {
	// do something...
});</code></pre>
								<div class="context-hidden-menu context-toggle">
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy</a>
										<a href="#" class="dropdown-item"><i class="icon-paste3"></i> Paste</a>
										<a href="#" class="dropdown-item"><i class="icon-file-minus"></i> Remove</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Options</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /onHidden event -->

					</div>
				</div>
				<!-- /events -->

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
