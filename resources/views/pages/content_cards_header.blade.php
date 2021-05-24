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
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/widgets.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switch.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="../../../../global_assets/js/plugins/sliders/nouislider.min.js"></script>


	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/content_cards_header.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Content</span> - Card Header</h4>
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
							<a href="content_cards_header" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Card header</span>
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

				<!-- Basic header options -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Basic elements
					</h6>
					<span class="text-muted d-block">Just a mix of basic elements</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Title with left icon -->
						<div class="card">
							<div class="card-header bg-white">
								<h6 class="card-title">
									<i class="icon-cog3 mr-2"></i>
									Left title icon
								</h6>
							</div>
							
							<div class="card-body">
								Card title with left icon
							</div>
						</div>
						<!-- /title with left icon -->


						<!-- Single icon -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Single icon</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-cog3"></i></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Card header with a single icon
							</div>
						</div>
						<!-- /single icon -->


						<!-- Multiple icons -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Icon group</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-mention"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-screen-full"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-mail5"></i></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Card header with multiple icons group
							</div>
						</div>
						<!-- /multiple icons -->


						<!-- Title with subtitle -->
						<div class="card">
							<div class="card-header bg-white">
								<h6 class="card-title">
									Subtitle
									<span class="font-size-base text-muted ml-2">Some alt description</span>
								</h6>
							</div>
							
							<div class="card-body">
								Card title with subtitle using inline elements with <code>.font-size-base</code> class
							</div>
						</div>
						<!-- /title with subtitle -->


						<!-- Inline list -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Inline list</h6>
								<div class="header-elements">
									<ul class="list-inline mb-0">
										<li class="list-inline-item">Version 2.0</li>
										<li class="list-inline-item">December 12th</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with simple inline list
							</div>
						</div>
						<!-- /inline list -->


						<!-- Linked inline list -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Linked inline list</h6>
								<div class="header-elements">
									<ul class="list-inline mb-0">
										<li class="list-inline-item"><a href="#">Download</a></li>
										<li class="list-inline-item"><a href="#">Upload</a></li>
										<li class="list-inline-item"><a href="#">Generate</a></li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with linked inline list
							</div>
						</div>
						<!-- /linked inline list -->


						<!-- Title badge -->
						<div class="card">
							<div class="card-header bg-white">
								<h6 class="card-title">
									Title badge
									<span class="badge bg-success ml-2">New</span>
								</h6>
							</div>
							
							<div class="card-body">
								Card title with badge element
							</div>
						</div>
						<!-- /title badge -->


						<!-- Title pill badge -->
						<div class="card">
							<div class="card-header bg-white">
								<h6 class="card-title">
									Title pill badge
									<span class="badge badge-pill bg-grey-700 ml-2">387</span>
								</h6>
							</div>
							
							<div class="card-body">
								Card title with pill badge element
							</div>
						</div>
						<!-- /title pill badge -->


						<!-- Pagination -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Pagination</h6>
								<div class="header-elements">
									<ul class="pagination pagination-flat pagination-sm justify-content-around">
										<li class="page-item"><a href="#" class="page-link">&rarr;</a></li>
										<li class="page-item"><a href="#" class="page-link">1</a></li>
										<li class="page-item active"><a href="#" class="page-link">2</a></li>
										<li class="page-item"><a href="#" class="page-link">3</a></li>
										<li class="page-item"><a href="#" class="page-link">&larr;</a></li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header pagination. Available in 3 sizes
							</div>
						</div>
						<!-- /pagination -->

					</div>

					<div class="col-lg-6">

						<!-- Title with right icon -->
						<div class="card">
							<div class="card-header bg-white">
								<h6 class="card-title">
									Right title icon
									<i class="icon-cog3 ml-2"></i>
								</h6>
							</div>
							
							<div class="card-body">
								Card title with right icon
							</div>
						</div>
						<!-- /title with right icon -->


						<!-- Single icon dropdown -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Icon dropdown</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<div class="dropdown">
				                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">One more separated line</a>
											</div>
				                		</div>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Card header with single icon and dropdown
							</div>
						</div>
						<!-- /single icon dropdown -->


						<!-- Multiple icon dropdown -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Icons group with dropdown</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-dribbble3"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-wordpress"></i></a>
				                		<div class="list-icons-item dropdown">
					                		<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-github4"></i></a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">One more separated line</a>
											</div>
				                		</div>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Card header with multiple icons and dropdown menu
							</div>
						</div>
						<!-- /multiple icon dropdowns -->


						<!-- Custom text -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Heading text</h6>
								<div class="header-elements">
									<span><i class="icon-github4 mr-2"></i> Some text or <a href="#">link</a> and icon</span>
								</div>
							</div>
							
							<div class="card-body">
								Card header text. Make sure the text is wrapped in inline element
							</div>
						</div>
						<!-- /custom text -->


						<!-- Bullet list -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Bullet list</h6>
								<div class="header-elements">
									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">Version 2.0</li>
										<li class="list-inline-item">December 12th</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with bullet inline list
							</div>
						</div>
						<!-- /bullet list -->


						<!-- Linked bullet list -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Linked bullet list</h6>
								<div class="header-elements">
									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item"><a href="#">Download</a></li>
										<li class="list-inline-item"><a href="#">Upload</a></li>
										<li class="list-inline-item"><a href="#">Generate</a></li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with linked bullet inline list
							</div>
						</div>
						<!-- /linked bullet list -->


						<!-- Header badge -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Header badge</h6>
								<div class="header-elements">
									<span class="badge badge-danger">Badge</span>
								</div>
							</div>
							
							<div class="card-body">
								Card header with <code>.badge</code> element
							</div>
						</div>
						<!-- /header badge -->


						<!-- Header pill badge -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Header pill badge</h6>
								<div class="header-elements">
									<span class="badge badge-pill bg-indigo-400">578</span>
								</div>
							</div>
							
							<div class="card-body">
								Card header with <code>.badge-pill</code> element
							</div>
						</div>
						<!-- /header pill badge -->


						<!-- Pager -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Heading pager</h6>
								<div class="header-elements">
									<ul class="pagination pagination-sm pagination-pager justify-content-between">
										<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
										<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header pager. Available in 3 sizes
							</div>
						</div>
						<!-- /pager -->

					</div>
				</div>
				<!-- /basic header options -->


				<!-- Header thumbnails -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card header thumbnails
					</h6>
					<span class="text-muted d-block">Single and thumbnail groups</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Single thumbnail -->
						<div class="card">
							<div class="card-header bg-white py-2 header-elements-inline">
								<h6 class="card-title">Single thumbnail</h6>
								<div class="header-elements">
									<ul class="list-inline mb-0">
										<li class="list-inline-item">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with single thumbnail
							</div>
						</div>
						<!-- /single thumbnail -->


						<!-- Thumbnail group -->
						<div class="card">
							<div class="card-header bg-white py-2 header-elements-sm-inline">
								<h6 class="card-title">Thumbnail group</h6>
								<div class="header-elements">
									<ul class="list-inline list-inline-condensed mb-0">
										<li class="list-inline-item">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										</li>
										<li class="list-inline-item">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										</li>
										<li class="list-inline-item">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with thumbnail group
							</div>
						</div>
						<!-- /thumbnail group -->


						<!-- Thumbnail with badge -->
						<div class="card">
							<div class="card-header bg-white py-2 header-elements-inline">
								<h6 class="card-title">Thumb with badge</h6>
								<div class="header-elements">
									<ul class="list-inline mb-0">
										<li class="list-inline-item">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											<span class="badge badge-pill badge-float bg-danger border-1 border-white">9</span>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header thumbnail with badge
							</div>
						</div>
						<!-- /thumbnail with badge -->

					</div>

					<div class="col-lg-6">

						<!-- Single linked thumbnail -->
						<div class="card">
							<div class="card-header bg-white py-2 header-elements-inline">
								<h6 class="card-title">Linked thumbnail</h6>
								<div class="header-elements">
									<ul class="list-inline mb-0">
										<li class="list-inline-item">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</a>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with single linked thumbnail
							</div>
						</div>
						<!-- /single linked thumbnail -->


						<!-- Linked thumbnail group -->
						<div class="card">
							<div class="card-header bg-white py-2 header-elements-sm-inline">
								<h6 class="card-title">Linked thumbnail group</h6>
								<div class="header-elements">
									<ul class="list-inline list-inline-condensed mb-0">
										<li class="list-inline-item">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</a>
										</li>
										<li class="list-inline-item">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</a>
										</li>
										<li class="list-inline-item">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											</a>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header with linked thumbnail group
							</div>
						</div>
						<!-- /linked thumbnail group -->


						<!-- Thumbnail with badge mark -->
						<div class="card">
							<div class="card-header bg-white py-2 header-elements-inline">
								<h6 class="card-title">Thumb with badge mark</h6>
								<div class="header-elements">
									<ul class="list-inline mb-0">
										<li class="list-inline-item">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
											<span class="badge badge-mark badge-float border-success mt-1 mr-1"></span>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="card-body">
								Card header thumbnail with badge mark
							</div>
						</div>
						<!-- /thumbnail with badge mark -->

					</div>
				</div>
				<!-- /header thumbnails -->


				<!-- Card controls -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card controls
					</h6>
					<span class="text-muted d-block">Collapse/expand, move, remove, reload, fullscreen and modal</span>
				</div>

				<div class="row row-sortable">
					<div class="col-lg-6">

						<!-- Collapse/expand card -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Collapse/expand card content</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Use <code>data-action="collapse"</code> attribute to add collapsible functionality to the card body
							</div>
						</div>
						<!-- /collapse/expand card -->


						<!-- Reload action -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Reload card content</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="reload"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Use <code>data-action="reload"</code> attribute to add show spinner with overlay and block user interactions
							</div>
						</div>
						<!-- /reload action -->


						<!-- Remove action -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Remove card</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Use <code>data-action="remove"</code> attribute to add an option to collapse-and-remove functionality
							</div>
						</div>
						<!-- /Remove action -->

					</div>

					<div class="col-lg-6">

						<!-- Move action -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Move (sort) card</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="move"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Use <code>data-action="move"</code> attribute to make card sortable (draggable) within specified container
							</div>
						</div>
						<!-- /move action -->


						<!-- Fullscreen mode -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Fullscreen mode</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="fullscreen"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Use <code>data-action="fullscreen"</code> attribute to add an option to display card in full screen mode
							</div>
						</div>
						<!-- /fullscreen mode -->


						<!-- Toggle modal -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Toggle modal</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a href="#settings" class="list-icons-item" data-action="modal" data-toggle="modal"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Use <code>data-action="modal"</code> attribute to toggle modal with content. Make sure the markup exists
							</div>
						</div>
						<!-- /toggle modal -->

					</div>
				</div>
				<!-- /card controls -->


				<!-- Header form components -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Form components
					</h6>
					<span class="text-muted d-block">A set of different form elements</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Single checkbox -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Single checkbox</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" checked data-fouc>
												Checked
											</label>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Single checkbox. Available in both directions
							</div>
						</div>
						<!-- /single checkbox -->


						<!-- Checkbox group -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Checkbox group</h6>
								<div class="header-elements">
									<form class="d-inline-flex" action="#">
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												Unchecked
											</label>
										</div>

										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" checked data-fouc>
												Checked
											</label>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Header with group of inline checkboxes
							</div>
						</div>
						<!-- /checkbox group -->


						<!-- Switchery toggle -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Switchery toggle</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-check form-check-right form-check-switchery">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-switchery" checked data-fouc>
												Enable
											</label>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Switchery toggle. Available in all styles and sizes
							</div>
						</div>
						<!-- /switchery toggle -->


						<!-- Input field -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Text input</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-group mb-0">
											<input type="text" class="form-control wmin-200" placeholder="Search...">
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Header with basic text input field
							</div>
						</div>
						<!-- /input field -->


						<!-- File input -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">File input</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-group wmin-200">
											<input type="file" class="form-input-styled" data-fouc>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Card header with custom file input field
							</div>
						</div>
						<!-- /file input -->

					</div>

					<div class="col-lg-6">

						<!-- Single radio -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Single radio</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" name="single-radio" class="form-input-styled" checked data-fouc>
												Selected
											</label>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Single radio. Available in both directions
							</div>
						</div>
						<!-- /single radio -->


						<!-- Radio group -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Radio group</h6>
								<div class="header-elements">
									<form class="d-inline-flex" action="#">
										<div class="form-check form-check-inline mb-0">
											<label class="form-check-label">
												<input type="radio" name="group-radio" class="form-input-styled" data-fouc>
												Unselected
											</label>
										</div>

										<div class="form-check form-check-inline mr-0">
											<label class="form-check-label">
												<input type="radio" name="group-radio" class="form-input-styled" checked data-fouc>
												Selected
											</label>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Header with group of inline radio buttons
							</div>
						</div>
						<!-- /radio group -->


						<!-- Toggle switch -->
						<div class="card">
							<div class="card-header bg-white py-2 header-elements-inline">
								<h6 class="card-title">Toggle switch</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-check form-check-switch">
											<label class="form-check-label">
												<input type="checkbox" data-on-text="On" data-off-text="Off" class="form-input-switch" data-size="small" checked data-fouc>
											</label>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Card header with Bootstrap toggle switch
							</div>
						</div>
						<!-- /toggle switch -->


						<!-- Field with icon feedback -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Input with icon</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-group-feedback form-group-feedback-right">
											<input type="search" class="form-control wmin-200" placeholder="Search...">
											<div class="form-control-feedback">
												<i class="icon-search4 font-size-base text-muted"></i>
											</div>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Input field and icon feedback
							</div>
						</div>
						<!-- /field with icon feedback -->


						<!-- Touchspin spinner -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Touchspin spinners</h6>
								<div class="header-elements">
									<form action="#">
										<input type="text" value="55" class="form-control form-control-touchspin">
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Heading with <code>Touchspin</code> input group spinner
							</div>
						</div>
						<!-- /touchspin spinner -->

					</div>
				</div>
				<!-- /header form components -->


				<!-- Header selects -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Select menus
					</h6>
					<span class="text-muted d-block">Various select options</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Basic select -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Basic select</h6>
								<div class="header-elements">
									<form action="#">
										<select class="form-control wmin-200">
											<optgroup label="Alaskan/Hawaiian Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI">Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone">
												<option value="CA">California</option>
												<option value="OR">Oregon</option>
												<option value="WA">Washington</option>
											</optgroup>
											<optgroup label="Mountain Time Zone">
												<option value="AZ">Arizona</option>
												<option value="ID">Idaho</option>
												<option value="WY">Wyoming</option>
											</optgroup>
										</select>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Card header with basic select
							</div>
						</div>
						<!-- /basic select -->


						<!-- Single Select2 select -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Single Select2 select</h6>
								<div class="header-elements">
									<form action="#">
										<div class="wmin-sm-200">
											<select class="form-control form-control-select2" data-fouc>
												<optgroup label="Alaskan Time Zone">
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="NV">Nevada</option>
													<option value="WA">Washington</option>
												</optgroup>
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
												</optgroup>
											</select>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Card header with a single <code>Select2</code> select
							</div>
						</div>
						<!-- /single Select2 select -->


						<!-- Single multiselect -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Multiselect - single selection</h6>
								<div class="header-elements">
									<form action="#">
										<div class="wmin-sm-200">
											<select class="form-control form-control-multiselect" data-fouc>
												<option value="cheese">Cheese</option>
												<option value="tomatoes">Tomatoes</option>
												<option value="mozarella">Mozzarella</option>
												<option value="mushrooms">Mushrooms</option>
												<option value="pepperoni">Pepperoni</option>
												<option value="onions">Onions</option>
											</select>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Heading with single multiselect
							</div>
						</div>
						<!-- /single multiselect -->

					</div>


					<div class="col-lg-6">

						<!-- Custom select -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Custom select</h6>
								<div class="header-elements">
									<form action="#">
										<div class="wmin-sm-200">
											<select class="form-control form-input-styled" data-fouc>
												<optgroup label="Alaskan/Hawaiian Time Zone">
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="OR">Oregon</option>
													<option value="WA">Washington</option>
												</optgroup>
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="ID">Idaho</option>
													<option value="WY">Wyoming</option>
												</optgroup>
											</select>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Card header with custom select
							</div>
						</div>
						<!-- /custom select -->


						<!-- Multiple Select2 select -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Multiple Select2 select</h6>
								<div class="header-elements">
									<form action="#">
										<div class="wmin-sm-200">
											<select class="form-control form-control-select2" multiple="multiple" data-fouc>
												<optgroup label="Alaskan Time Zone">
													<option value="AK" selected>Alaska</option>
													<option value="HI">Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="NV">Nevada</option>
													<option value="WA">Washington</option>
												</optgroup>
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID" selected>Idaho</option>
												</optgroup>
											</select>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Card header with multiple <code>Select2</code> select
							</div>
						</div>
						<!-- /multiple Select2 select -->


						<!-- Multiselect -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Multiselect - multiple selection</h6>
								<div class="header-elements">
									<form action="#">
										<div class="wmin-sm-200">
											<select class="form-control form-control-multiselect" multiple="multiple" data-fouc>
												<option value="cheese">Cheese</option>
												<option value="tomatoes">Tomatoes</option>
												<option value="mozarella">Mozzarella</option>
												<option value="mushrooms">Mushrooms</option>
												<option value="pepperoni">Pepperoni</option>
												<option value="onions">Onions</option>
											</select>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Heading with multiple select
							</div>
						</div>
						<!-- /multiselect -->

					</div>
				</div>
				<!-- /header selects -->


				<!-- Header buttons -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Header buttons
					</h6>
					<span class="text-muted d-block">Basic buttons with options</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Single button -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Single button</h6>
								<div class="header-elements">
									<button type="button" class="btn bg-blue">Button</button>
								</div>
							</div>
							
							<div class="card-body">
								Header with basic button. Available in all sizes, colors and options
							</div>
						</div>
						<!-- /single button -->


						<!-- Outline button -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Outline button</h6>
								<div class="header-elements">
									<button type="button" class="btn btn-outline bg-indigo-400 text-indigo-400 border-indigo-400">Button</button>
								</div>
							</div>
							
							<div class="card-body">
								Header with outline button. Available in all sizes, colors and options
							</div>
						</div>
						<!-- /outline button -->


						<!-- Single button dropdown -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Button dropdown</h6>
								<div class="header-elements">
									<div class="btn-group">
										<button type="button" class="btn bg-danger-400 dropdown-toggle" data-toggle="dropdown">Menu</button>
										<div class="dropdown-menu">
											<a href="#" class="dropdown-item">Action</a>
											<a href="#" class="dropdown-item">Another action</a>
											<a href="#" class="dropdown-item">Something else here</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">One more separated line</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								Header with single button dropdown menu
							</div>
						</div>
						<!-- /single button dropdown -->


						<!-- Segmented button -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Segmented button</h6>
								<div class="header-elements">
									<div class="btn-group">
			                            <button class="btn bg-success">Menu</button>
			                            <button class="btn bg-success dropdown-toggle" data-toggle="dropdown"></button>
										<div class="dropdown-menu">
											<a href="#" class="dropdown-item">Action</a>
											<a href="#" class="dropdown-item">Another action</a>
											<a href="#" class="dropdown-item">Something else here</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">One more separated line</a>
										</div>
			                        </div>
		                        </div>
							</div>
							
							<div class="card-body">
								Card header with segmented button
							</div>
						</div>
						<!-- /segmented button -->


						<!-- Multiple buttons -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Multiple buttons</h6>
								<div class="header-elements">
									<button type="button" class="btn bg-blue"><i class="icon-checkmark3 mr-2"></i> Save</button>
									<button type="button" class="btn btn-light ml-3"><i class="icon-cross2 mr-2"></i> Cancel</button>
								</div>
							</div>
							
							<div class="card-body">
								Card header with multiple buttons
							</div>
						</div>
						<!-- /multiple button -->

					</div>


					<div class="col-lg-6">

						<!-- Icon button -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Icon button</h6>
								<div class="header-elements">
									<button type="button" class="btn bg-success-400 btn-icon"><i class="icon-task"></i></button>
								</div>
							</div>
							
							<div class="card-body">
								Card header with single icon button
							</div>
						</div>
						<!-- /icon button -->


						<!-- Outline icon button -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Outline button</h6>
								<div class="header-elements">
									<button type="button" class="btn btn-outline bg-pink-400 text-pink-400 border-pink-400 btn-icon border-2">
										<i class="icon-checkmark3"></i>
									</button>
								</div>
							</div>
							
							<div class="card-body">
								Header with outline icon button
							</div>
						</div>
						<!-- /outline icon button -->


						<!-- Icon button dropdown -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Icon button dropdown</h6>
								<div class="header-elements">
									<div class="btn-group">
										<button type="button" class="btn bg-blue btn-icon dropdown-toggle" data-toggle="dropdown"><i class="icon-menu6"></i></button>
										<div class="dropdown-menu">
											<a href="#" class="dropdown-item">Action</a>
											<a href="#" class="dropdown-item">Another action</a>
											<a href="#" class="dropdown-item">Something else here</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">One more separated line</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								Card header with icon button dropdown
							</div>
						</div>
						<!-- /icon button dropdown -->


						<!-- Segmented icon button -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Segmented icon button</h6>
								<div class="header-elements">
									<div class="btn-group">
			                            <button class="btn bg-danger-400 btn-icon"><i class="icon-accessibility"></i></button>
			                            <button class="btn bg-danger-400 dropdown-toggle" data-toggle="dropdown"></button>
										<div class="dropdown-menu">
											<a href="#" class="dropdown-item">Action</a>
											<a href="#" class="dropdown-item">Another action</a>
											<a href="#" class="dropdown-item">Something else here</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">One more separated line</a>
										</div>
			                        </div>
		                        </div>
							</div>
							
							<div class="card-body">
								Card header with segmented icon button
							</div>
						</div>
						<!-- /segmented icon button -->


						<!-- Multiple icon buttons -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Multiple icon buttons</h6>
								<div class="header-elements">
									<button type="button" class="btn bg-blue btn-icon"><i class="icon-download"></i></button>
									<button type="button" class="btn bg-pink-400 btn-icon ml-3"><i class="icon-upload"></i></button>
								</div>
							</div>
							
							<div class="card-body">
								Card headers with multiple icon buttons
							</div>
						</div>
						<!-- /multiple icon buttons -->

					</div>
				</div>
				<!-- /header buttons -->


				<!-- Additional header elements -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Other elements
					</h6>
					<span class="text-muted d-block">Other card header elements</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Default tabs -->
						<div class="card">
							<div class="card-header bg-light pb-0 pt-sm-0 header-elements-sm-inline">
								<h6 class="card-title">Default tabs</h6>
								<div class="header-elements">
									<ul class="nav nav-tabs nav-tabs-highlight card-header-tabs">
										<li class="nav-item">
											<a href="#card-tab1" class="nav-link" data-toggle="tab">
												<i class="icon-screen-full mr-2"></i>
												Home
											</a>
										</li>
										<li class="nav-item">
											<a href="#card-tab2" class="nav-link" data-toggle="tab">
												<i class="icon-stats-bars mr-2"></i>
												Stats
											</a>
										</li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
												<i class="icon-cog5 mr-2"></i>
												Dropdown
											</a>
											
											<div class="dropdown-menu">
												<a href="#card-tab3" tabindex="-1" class="dropdown-item" data-toggle="tab">
													<i class="icon-people"></i>
													Profile settings
												</a>
												<a href="#card-tab4" tabindex="-1" class="dropdown-item" data-toggle="tab">
													<i class="icon-stack"></i>
													Layout settings
												</a>
											</div>
										</li>
									</ul>
			                	</div>
							</div>
							
							<div class="card-body tab-content">
								<div class="tab-pane fade show active" id="card-tab1">
									This is the first card tab content
								</div>

								<div class="tab-pane fade" id="card-tab2">
									This is the second card tab content
								</div>

								<div class="tab-pane fade" id="card-tab3">
									This is the third card tab content
								</div>

								<div class="tab-pane fade" id="card-tab4">
									This is the fourth card tab content
								</div>
							</div>
						</div>
						<!-- /default tabs -->


						<!-- Pills -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Default pills</h6>
								<div class="header-elements">
									<ul class="nav nav-pills mb-0">
										<li class="nav-item"><a href="#card-pill1" class="nav-link" data-toggle="tab"><i class="icon-screen-full mr-2"></i> Home</a></li>
										<li class="nav-item"><a href="#card-pill2" class="nav-link" data-toggle="tab"><i class="icon-stats-bars mr-2"></i> Stats</a></li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-gear"></i></a>
											
											<div class="dropdown-menu">
												<a href="#card-pill3" class="dropdown-item" tabindex="-1" data-toggle="tab">
													<i class="icon-people"></i>
													Profile settings
												</a>
												<a href="#card-pill4" class="dropdown-item" tabindex="-1" data-toggle="tab">
													<i class="icon-stack"></i>
													Layout settings
												</a>
											</div>
										</li>
									</ul>
			                	</div>
							</div>
							
							<div class="card-body tab-content">
								<div class="tab-pane fade show active" id="card-pill1">
									This is the first card pill content
								</div>

								<div class="tab-pane fade" id="card-pill2">
									This is the second card pill content
								</div>

								<div class="tab-pane fade" id="card-pill3">
									This is the third card pill content
								</div>

								<div class="tab-pane fade" id="card-pill4">
									This is the fourth card pill content
								</div>
							</div>
						</div>
						<!-- /pills -->


						<!-- Progress bar -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Progress bar</h6>
								<div class="header-elements">
									<div class="progress w-100 wmin-sm-200">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 60%;">
											<span class="sr-only">60% Complete</span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								Card header with progress bar. Available in all colors and options
							</div>
						</div>
						<!-- /progress bar -->


						<!-- jQuery UI slider -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">jQuery UI slider</h6>
								<div class="header-elements">
									<div class="w-100 wmin-sm-200">
										<div class="jui-slider ui-slider-info" data-fouc></div>
									</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Header with jQuery UI slider. Available in all sizes
							</div>
						</div>
						<!-- /jQuery UI slider -->

					</div>


					<div class="col-lg-6">

						<!-- Bottom tabs -->
						<div class="card">
							<div class="card-header bg-white pb-0 pt-sm-0 pr-sm-0 header-elements-sm-inline">
								<h6 class="card-title">Bottom tabs</h6>
								<div class="header-elements">
									<ul class="nav nav-tabs nav-tabs-bottom card-header-tabs mx-0">
										<li class="nav-item">
											<a href="#card-bottom-tab1" class="nav-link" data-toggle="tab">
												<i class="icon-screen-full mr-2"></i>
												Home
											</a>
										</li>
										<li class="nav-item">
											<a href="#card-bottom-tab2" class="nav-link" data-toggle="tab">
												<i class="icon-stats-bars mr-2"></i>
												Stats
											</a>
										</li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
												<i class="icon-cog5 mr-2"></i>
												Dropdown
											</a>
											
											<div class="dropdown-menu">
												<a href="#card-bottom-tab3" tabindex="-1" class="dropdown-item" data-toggle="tab">
													<i class="icon-people"></i>
													Profile settings
												</a>
												<a href="#card-bottom-tab4" tabindex="-1" class="dropdown-item" data-toggle="tab">
													<i class="icon-stack"></i>
													Layout settings
												</a>
											</div>
										</li>
									</ul>
			                	</div>
							</div>
							
							<div class="card-body tab-content">
								<div class="tab-pane fade show active" id="card-bottom-tab1">
									This is the first card tab content
								</div>

								<div class="tab-pane fade" id="card-bottom-tab2">
									This is the second card tab content
								</div>

								<div class="tab-pane fade" id="card-bottom-tab3">
									This is the third card tab content
								</div>

								<div class="tab-pane fade" id="card-bottom-tab4">
									This is the fourth card tab content
								</div>
							</div>
						</div>
						<!-- /bottom tabs -->


						<!-- Toolbar tabs -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Toolbar tabs</h6>
							</div>

							<div class="bg-light">
								<ul class="nav nav-tabs nav-tabs-bottom mb-0">
									<li class="nav-item">
										<a href="#card-toolbar-tab1" class="nav-link" data-toggle="tab">
											<i class="icon-screen-full mr-2"></i>
											Home
										</a>
									</li>
									<li class="nav-item">
										<a href="#card-toolbar-tab2" class="nav-link" data-toggle="tab">
											<i class="icon-stats-bars mr-2"></i>
											Stats
										</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-cog5 mr-2"></i>
											Dropdown
										</a>
										
										<div class="dropdown-menu">
											<a href="#card-toolbar-tab3" tabindex="-1" class="dropdown-item" data-toggle="tab">
												<i class="icon-people"></i>
												Profile settings
											</a>
											<a href="#card-toolbar-tab4" tabindex="-1" class="dropdown-item" data-toggle="tab">
												<i class="icon-stack"></i>
												Layout settings
											</a>
										</div>
									</li>
								</ul>
		                	</div>

							<div class="card-body tab-content">
								<div class="tab-pane fade show active" id="card-toolbar-tab1">
									This is the first card tab content
								</div>

								<div class="tab-pane fade" id="card-toolbar-tab2">
									This is the second card tab content
								</div>

								<div class="tab-pane fade" id="card-toolbar-tab3">
									This is the third card tab content
								</div>

								<div class="tab-pane fade" id="card-toolbar-tab4">
									This is the fourth card tab content
								</div>
							</div>
						</div>
						<!-- /toolbar tabs -->


						<!-- Dropdown title -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<div class="card-title h6 btn-group">
									<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Title dropdown</a>
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">One more separated line</a>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								Card header with title as a dropdown menu
							</div>
						</div>
						<!-- /dropdown title -->


						<!-- Noui slider -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">NoUI slider</h6>
								<div class="header-elements">
									<div class="w-100 wmin-sm-200">
										<div class="noui-slider noui-slider-danger noui-height-helper" id="noui-slider-demo" data-fouc></div>
									</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Card header with NoUI slider. Available in all sizes
							</div>
						</div>
						<!-- /noui slider -->

					</div>
				</div>
				<!-- /additional header elements -->


				<!-- Mixing header elements -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Mixing elements
					</h6>
					<span class="text-muted d-block">Different element variations</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Input field with button -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Input and button</h6>
								<div class="header-elements">
									<form action="#">
										<div class="input-group wmin-sm-200">
											<input type="text" class="form-control" placeholder="Search...">
											<div class="input-group-append">
												<button type="button" class="btn btn-light btn-icon"><i class="icon-three-bars"></i></button>
											</div>
										</div>
									</form>
			                	</div>
							</div>
							
							<div class="card-body">
								Mixing input field with button
							</div>
						</div>
						<!-- /input field with button -->


						<!-- Checkbox and icon dropdown -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Checkbox and dropdown</h6>
								<div class="header-elements">
									<div class="d-flex justify-content-between">
										<form action="#">
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" checked data-fouc>
													Enable
												</label>
											</div>
										</form>

										<div class="list-icons ml-3">
					                		<div class="dropdown">
					                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
												<div class="dropdown-menu">
													<a href="#" class="dropdown-item">Action</a>
													<a href="#" class="dropdown-item">Another action</a>
													<a href="#" class="dropdown-item">Something else here</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item">One more separated line</a>
												</div>
					                		</div>
					                	</div>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Mixing checkbox with label and icon dropdown
							</div>
						</div>
						<!-- /checkbox and icon dropdown -->


						<!-- Switchery and card controls -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Switch and controls</h6>
								<div class="header-elements">
									<div class="d-flex justify-content-between">
										<form action="#">
											<div class="form-check form-check-right form-check-switchery">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-switchery" checked data-fouc>
													Show it?
												</label>
											</div>
										</form>

										<div class="list-icons ml-3">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>
							</div>
							
							<div class="card-body">
								Mixing switchery toggle and card control buttons
							</div>
						</div>
						<!-- /switchery and card controls -->

					</div>


					<div class="col-lg-6">

						<!-- Text and button dropdown -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Text and button</h6>
								<div class="header-elements">
									<div class="d-flex align-items-center justify-content-between">
				                		<span class="text-danger mr-3"><i class="icon-blocked mr-2"></i> Error occurred</span>

					                	<div class="btn-group">
				                            <button class="btn btn-light dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></button>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<div class="dropdowndivider"></div>
												<a href="#" class="dropdown-item">One more separated line</a>
											</div>
				                        </div>
			                        </div>
			                	</div>
							</div>
							
							<div class="card-body">
								Mixing text and button dropdown
							</div>
						</div>
						<!-- /text and button dropdown -->


						<!-- Spinner and progress bar -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">
									Spinner and progress
								</h6>

								<div class="header-elements">
									<div class="d-flex align-items-center">
										<span class="mr-3"><i class="icon-spinner2 spinner"></i></span>
										<div class="progress w-100 wmin-sm-200" style="height: 0.625rem;">
											<div class="progress-bar bg-indigo-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
												<span class="sr-only">60% Complete</span>
											</div>
										</div>
									</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Mixing spinner and progress bar
							</div>
						</div>
						<!-- /spinner and progress bar -->


						<!-- Multiple elements -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">
									Multiple elements
								</h6>

								<div class="header-elements">
			                		<i class="icon-spinner4 spinner"></i>

				                	<span class="badge badge-danger ml-3">Badge</span>

									<div class="list-icons ml-3">
				                		<a href="#" class="list-icons-item"><i class="icon-googleplus5"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-pin-alt"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-portfolio"></i></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Mixing spinner icon, badge and icon list group
							</div>
						</div>
						<!-- /multiple elements -->

					</div>
				</div>
				<!-- /mixing header elements -->


				<!-- Responsive options -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Responsive options
					</h6>
					<span class="text-muted d-block">Resize the browser or open on mobile</span>
				</div>

				<div class="row">
					<div class="col-lg-6">
						
						<!-- Always visible -->
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">Always visible</h6>
								<div class="header-elements">
									<form action="#">
										<div class="wmin-200">
											<select class="form-control form-control-select2" data-fouc>
												<optgroup label="Alaskan Time Zone">
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="NV">Nevada</option>
													<option value="WA">Washington</option>
												</optgroup>
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
												</optgroup>
											</select>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								Add <code>.header-elements-inline</code> class to direct parent of <code>.header-elements</code> to make header elements visible on mobile and desktop.
							</div>
						</div>
						<!-- /always visible -->


						<!-- Wrap and show -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Wrap and show</h6>
								<div class="header-elements">
									<form action="#">
										<div class="form-group-feedback form-group-feedback-right">
											<input type="search" class="form-control wmin-sm-200" placeholder="Search...">
											<div class="form-control-feedback">
												<i class="icon-search4 font-size-base text-muted"></i>
											</div>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								To wrap header elements to the second row, add <code>.header-elements-[breakpoint]-inline</code> class to parent container. Breakpoint in class name is required, CSS needs to know screen size.
							</div>
						</div>
						<!-- /wrap and show -->


						<!-- Stack elements -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Stack elements</h6>
								<div class="header-elements flex-sm-nowrap">
									<div class="text-muted mr-sm-3 mb-1 mb-sm-0">Loading:</div>

									<div class="progress w-100 wmin-sm-200" style="height: 0.625rem;">
										<div class="progress-bar bg-indigo-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
											<span class="sr-only">60% Complete</span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								Header (block) elements are stackable by default. Use responsive margin classes to control vertical and horizontal spacing. Make sure margin and container breakpoints are matching.
							</div>
						</div>
						<!-- /stack elements -->


						<!-- Centered elements -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Centered elements</h6>
								<div class="header-elements">
									<div class="d-flex justify-content-center">
										<div class="text-muted mr-2">Rating:</div>

										<span>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<span class="text-muted ml-2">(49)</span>
										</span>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								Use combination of <code>.d-flex</code> and <code>.justify-content-center</code> classes to center items in the line. All flex helper classes can be used as well for additional position options.
							</div>
						</div>
						<!-- /centered elements -->

					</div>

					<div class="col-lg-6">
						
						<!-- Hide on mobile -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Hide on mobile</h6>
								<div class="header-elements d-none">
									<form action="#">
										<div class="wmin-sm-200">
											<select class="form-control form-control-select2" data-fouc>
												<optgroup label="Alaskan Time Zone">
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="NV">Nevada</option>
													<option value="WA">Washington</option>
												</optgroup>
												<optgroup label="Mountain Time Zone">
													<option value="AZ">Arizona</option>
													<option value="CO">Colorado</option>
													<option value="ID">Idaho</option>
												</optgroup>
											</select>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								To hide header elements on certain breakpoints, use <code>.header-elements-[breakpoint]-inline</code> class in parent container and <code>.d-none</code> in header elements container.
							</div>
						</div>
						<!-- /hide on mobile -->


						<!-- Wrap and toggle -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title d-flex">
									Wrap and toggle
									<a href="#" class="header-elements-toggle text-default d-sm-none"><i class="icon-more"></i></a>
								</h6>

								<div class="header-elements d-none">
									<form action="#">
										<div class="form-group-feedback form-group-feedback-right">
											<input type="search" class="form-control wmin-sm-200" placeholder="Search...">
											<div class="form-control-feedback">
												<i class="icon-search4 font-size-base text-muted"></i>
											</div>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card-body">
								You can also use optional toggler - add <code>.d-flex</code> to page title and custom markup for the toggle button. And <code>.d-none</code> to header elements container to make them hidden by default.
							</div>
						</div>
						<!-- /wrap and toggle -->


						<!-- Single line -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Single line</h6>
								<div class="header-elements">
									<div class="d-flex align-items-center">
										<div class="text-muted mr-3">Loading:</div>

										<div class="progress w-100 wmin-sm-200" style="height: 0.625rem;">
											<div class="progress-bar bg-indigo-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
												<span class="sr-only">60% Complete</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								You can easily show header elements in a single line, just wrap inner elements in container with <code>.d-flex</code> and <code>.align-items-center</code> classes. Use other flex utilities for adjustments.
							</div>
						</div>
						<!-- /single line -->


						<!-- Justified elements -->
						<div class="card">
							<div class="card-header bg-white header-elements-sm-inline">
								<h6 class="card-title">Justified elements</h6>
								<div class="header-elements">
									<div class="d-flex justify-content-between">
										<div class="text-muted mr-2">Rating:</div>

										<span>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<span class="text-muted ml-2">(49)</span>
										</span>
									</div>
								</div>
							</div>
							
							<div class="card-body">
								Use combination of <code>.d-flex</code> and <code>.justify-content-between</code> (or <code>.m(l,r)-auto</code>) classes to distribute items evenly in the line: first item is on the start line, last item on the end line.
							</div>
						</div>
						<!-- /justified elements -->

					</div>
				</div>
				<!-- /responsive options -->

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


    <!-- Settings modal -->
	<div id="settings" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"><i class="icon-gear mr-2"></i> Settings modal</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Form inside modal -->
				<form action="#">
					<div class="modal-body">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label>First name</label>
									<input type="text" placeholder="Eugene" class="form-control">
								</div>

								<div class="col-sm-6">
									<label class="control-label">Last name</label>
									<input type="text" placeholder="Kopyov" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label>Address line 1</label>
									<input type="text" placeholder="Ring street 12" class="form-control">
								</div>

								<div class="col-sm-6">
									<label>Address line 2</label>
									<input type="text" placeholder="building D, flat #67" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-sm-4">
									<label>City</label>
									<input type="text" placeholder="Munich" class="form-control">
								</div>

								<div class="col-sm-4">
									<label>State/Province</label>
									<input type="text" placeholder="Bayern" class="form-control">
								</div>

								<div class="col-sm-4">
									<label>ZIP code</label>
									<input type="text" placeholder="1031" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label>Email</label>
									<input type="text" placeholder="eugene@kopyov.com" class="form-control">
									<span class="form-text text-muted">name@domain.com</span>
								</div>

								<div class="col-sm-6">
									<label>Phone #</label>
									<input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control">
									<span class="form-text text-muted">+99-99-9999-9999</span>
								</div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-info">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /settings modal -->

</body>
</html>
