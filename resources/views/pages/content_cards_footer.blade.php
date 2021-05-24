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
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switch.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="../../../../global_assets/js/plugins/sliders/nouislider.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/content_cards_footer.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Content</span> - Card Footer</h4>
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
							<a href="content_cards_footer" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Card footer</span>
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

				<!-- Card footer layouts -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Card footer layouts
					</h6>
					<span class="text-muted d-block">Default, custom, white and condensed</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Default style -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Default style</h6>
							</div>
							
							<div class="card-body">
								Default example of card footer. By default, footer container has light grey background color. Default style doesn't require any additional classes. Supports all elements listed below, including custom colors.
							</div>

							<div class="card-footer d-flex justify-content-between align-items-center">
								<div class="text-muted">Added 3 hours ago</div>

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
						<!-- /default style -->


						<!-- Custom color -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Custom color</h6>
							</div>
							
							<div class="card-body">
								Example of a card footer with custom background color. You can use any available color helper class, also use text color classes where needed. Some elements require minor color adjustments.
							</div>

							<div class="card-footer bg-dark text-white d-flex justify-content-between align-items-center">
								<div>Added 3 hours ago</div>

								<span>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<i class="icon-star-full2 font-size-base text-orange-300"></i>
									<span class="opacity-75 ml-2">(49)</span>
								</span>
							</div>
						</div>
						<!-- /custom color -->

					</div>

					<div class="col-lg-6">

						<!-- White background -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">White background</h6>
							</div>
							
							<div class="card-body">
								You can use <code>.bg-white</code> or <code>.bg-transparent</code> classes in card footer container to make it white or remove background color. Use border and spacing utility classes for custom styling.
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="text-muted">Added 3 hours ago</div>

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
						<!-- /white background -->


						<!-- No border -->
						<div class="card">
							<div class="card-header bg-white">
								<h6 class="card-title">No border</h6>
							</div>
							
							<div class="card-body">
								Use <code>.border-top-0</code> utility class to remove top border and <code>.pt-0</code> class to remove top padding from the card footer. Also don't forget to make background color white or transparent.
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between align-items-center border-top-0 pt-0">
								<div class="text-muted">Added 3 hours ago</div>

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
						<!-- /no border -->

					</div>
				</div>
				<!-- /card footer layouts -->


				<!-- Basic footer options -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Basic elements
					</h6>
					<span class="text-muted d-block">Just a mix of basic elements</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Title with left icon -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Text with left icon</h6>
							</div>
							
							<div class="card-body">
								Card footer plain text with left icon
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div>
									<i class="icon-calendar3 mr-2"></i>
									Schedule
								</div>

								<div>
									<i class="icon-cog3 mr-2"></i>
									Settings
								</div>
							</div>
						</div>
						<!-- /title with left icon -->


						<!-- Single icon -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Single icon</h6>
							</div>
							
							<div class="card-body">
								Card footer with a single icon, inline or linked
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="list-icons-item"><i class="icon-spinner2 spinner"></i></div>
								<a href="#" class="list-icons-item"><i class="icon-cog3"></i></a>
							</div>
						</div>
						<!-- /single icon -->


						<!-- Multiple icons -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Multiple icons</h6>
							</div>
							
							<div class="card-body">
								Card footer with multiple icons group
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div>
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-play3"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-pause"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-stop"></i></a>
				                	</div>
			                	</div>

								<div>
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-dribbble3"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-wordpress"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-github4"></i></a>
				                	</div>
			                	</div>
							</div>
						</div>
						<!-- /multiple icons -->


						<!-- Plain text -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Plain text</h6>
							</div>
							
							<div class="card-body">
								Card footer with simple inline text. Use utility classes for proper spacing and alignment
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								Good morning, Eugene!
								<div class="mt-1 mt-sm-0">You have 3 unread messages</div>
							</div>
						</div>
						<!-- /plain text -->


						<!-- Inline list -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Inline list</h6>
							</div>
							
							<div class="card-body">
								Card footer with simple inline list
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="list-inline mb-0">
									<li class="list-inline-item">10 bugs</li>
									<li class="list-inline-item">8 commits</li>
								</ul>

								<ul class="list-inline mb-0 mt-1 mt-sm-0">
									<li class="list-inline-item">December 12th</li>
									<li class="list-inline-item">Version 2.0</li>
								</ul>
							</div>
						</div>
						<!-- /inline list -->


						<!-- Linked inline list -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Linked inline list</h6>
							</div>
							
							<div class="card-body">
								Card footer with linked inline list
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="list-inline mb-0">
									<li class="list-inline-item"><a href="#">3 reports</a></li>
									<li class="list-inline-item"><a href="#">7 files</a></li>
								</ul>

								<ul class="list-inline mb-0 mt-1 mt-sm-0">
									<li class="list-inline-item"><a href="#">Download</a></li>
									<li class="list-inline-item"><a href="#">Upload</a></li>
									<li class="list-inline-item"><a href="#">Generate</a></li>
								</ul>
							</div>
						</div>
						<!-- /linked inline list -->


						<!-- Inline badge -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Inline badges</h6>
							</div>
							
							<div class="card-body">
								Card footer with <code>.badge</code> element displayed before/after the text
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div>
									<span class="badge bg-danger mr-2">Bug</span>
									Ticket <a href="#">#54325</a>
								</div>

								<div>
									Resolution:
									<span class="badge bg-success ml-2">Fixed</span>
								</div>
							</div>
						</div>
						<!-- /inline badge -->


						<!-- Pagination -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Pagination</h6>
							</div>
							
							<div class="card-body">
								Card footer pagination with optional <code>.justify-content-around</code> class that stretches items on small screens if used with breakpoints
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="pagination pagination-flat pagination-sm justify-content-around">
									<li class="page-item disabled"><a href="#" class="page-link">Prev</a></li>
									<li class="page-item active"><a href="#" class="page-link">1</a></li>
									<li class="page-item"><a href="#" class="page-link">2</a></li>
									<li class="page-item"><a href="#" class="page-link">3</a></li>
									<li class="page-item"><span class="page-link bg-transparent">...</span></li>
									<li class="page-item"><a href="#" class="page-link">9</a></li>
									<li class="page-item"><a href="#" class="page-link">Next</a></li>
								</ul>

								<ul class="pagination pagination-flat pagination-sm justify-content-around mt-2 mt-sm-0">
									<li class="page-item"><a href="#" class="page-link">&rarr;</a></li>
									<li class="page-item"><a href="#" class="page-link">1</a></li>
									<li class="page-item active"><a href="#" class="page-link">2</a></li>
									<li class="page-item"><a href="#" class="page-link">3</a></li>
									<li class="page-item"><a href="#" class="page-link">&larr;</a></li>
								</ul>
							</div>
						</div>
						<!-- /pagination -->

					</div>

					<div class="col-lg-6">

						<!-- Title with right icon -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Title with right icon</h6>
							</div>
							
							<div class="card-body">
								Card footer with plain text and icon next to it
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div>
									Schedule
									<i class="icon-calendar3 ml-2"></i>
								</div>

								<div>
									Settings
									<i class="icon-cog3 ml-2"></i>
								</div>
							</div>
						</div>
						<!-- /title with right icon -->


						<!-- Single icon dropdown -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Icon dropdown</h6>
							</div>
							
							<div class="card-body">
								Card footer with single icon dropdown, both sides
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
		                		<div class="list-icons-item dropdown">
		                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">One more separated line</a>
									</div>
		                		</div>

		                		<div class="list-icons-item dropdown">
		                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-unlink"></i></a>
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
						<!-- /single icon dropdown -->


						<!-- Multiple icon dropdown -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Multiple icons with dropdown</h6>
							</div>
							
							<div class="card-body">
								Card footer with multiple icons and dropdown menu
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div>
									<div class="list-icons">
				                		<a href="#" class="list-icons-item"><i class="icon-play3"></i></a>
				                		<a href="#" class="list-icons-item"><i class="icon-pause"></i></a>
				                		<div class="list-icons-item dropdown">
					                		<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-stop"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item">One more separated line</a>
											</div>
				                		</div>
				                	</div>
			                	</div>

								<div>
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
						</div>
						<!-- /multiple icon dropdowns -->


						<!-- Custom text -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Custom text styling</h6>
							</div>
							
							<div class="card-body">
								Card footer text displayed on both sides. Make sure the text is wrapped in block element
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<div>
									<i class="icon-reading mr-2"></i> Good morning, <strong>Eugene</strong>
								</div>
								<div class="mt-1 mt-sm-0">You have <a href="#">3 unread messages</a></div>
							</div>
						</div>
						<!-- /custom text -->


						<!-- Bullet list -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Bullet list</h6>
							</div>
							
							<div class="card-body">
								Card footer with bullet inline list
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="list-inline list-inline-dotted mb-0">
									<li class="list-inline-item">10 bugs</li>
									<li class="list-inline-item">8 commits</li>
								</ul>

								<ul class="list-inline list-inline-dotted mb-0 mt-1 mt-sm-0">
									<li class="list-inline-item">December 12th</li>
									<li class="list-inline-item">Version 2.0</li>
								</ul>
							</div>
						</div>
						<!-- /bullet list -->


						<!-- Linked bullet list -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Linked bullet list</h6>
							</div>
							
							<div class="card-body">
								Card footer with linked bullet inline list
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="list-inline list-inline-dotted mb-0">
									<li class="list-inline-item"><a href="#">3 reports</a></li>
									<li class="list-inline-item"><a href="#">7 files</a></li>
								</ul>

								<ul class="list-inline list-inline-dotted mb-0 mt-1 mt-sm-0">
									<li class="list-inline-item"><a href="#">Download</a></li>
									<li class="list-inline-item"><a href="#">Upload</a></li>
									<li class="list-inline-item"><a href="#">Generate</a></li>
								</ul>
							</div>
						</div>
						<!-- /linked bullet list -->


						<!-- Inline pill badge -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Inline pill badges</h6>
							</div>
							
							<div class="card-body">
								Card footer with <code>.badge-pill</code> element displayed before/after the text
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div>
									<span class="badge bg-blue badge-pill mr-2">36</span>
									New orders
								</div>

								<div>
									Shipped:
									<span class="badge bg-slate badge-pill ml-2">74</span>
								</div>
							</div>
						</div>
						<!-- /inline pill badge -->


						<!-- Pager -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Pager</h6>
							</div>
							
							<div class="card-body">
								Card footer pager with optional <code>.justify-content-between</code> class that pushes items to start/end on small screens if used with breakpoints
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<ul class="pagination pagination-sm pagination-pager pagination-pager-linked justify-content-between">
									<li class="page-item disabled"><a href="#" class="page-link">&rarr; &nbsp; Older</a></li>
									<li class="page-item"><a href="#" class="page-link">Newer &nbsp; &larr;</a></li>
								</ul>

								<ul class="pagination pagination-sm pagination-pager justify-content-between mt-2 mt-sm-0">
									<li class="page-item"><a href="#" class="page-link">&rarr; &nbsp; Previous</a></li>
									<li class="page-item"><a href="#" class="page-link">Next &nbsp; &larr;</a></li>
								</ul>
							</div>
						</div>
						<!-- /pager -->

					</div>
				</div>
				<!-- /basic footer options -->


				<!-- Footer thumbnails -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card footer thumbnails
					</h6>
					<span class="text-muted d-block">Single and thumbnail groups</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Single thumbnail -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Single thumbnail</h6>
							</div>
							
							<div class="card-body">
								Card footer with single thumbnail (left or right)
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center py-2">
								<ul class="list-inline mb-0">
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
									</li>
								</ul>

								<ul class="list-inline mb-0">
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
									</li>
								</ul>
							</div>
						</div>
						<!-- /single thumbnail -->


						<!-- Thumbnail group -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Thumbnail group</h6>
							</div>
							
							<div class="card-body">
								Card footer with thumbnail group
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
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

								<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
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
						<!-- /thumbnail group -->


						<!-- Thumbnail with badge -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Thumb with badge</h6>
							</div>
							
							<div class="card-body">
								Card footer thumbnail with badge
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center py-2">
								<ul class="list-inline mb-0">
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										<span class="badge badge-pill badge-float bg-danger border-1 border-white">9</span>
									</li>
								</ul>

								<ul class="list-inline list-inline-condensed mb-0">
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										<span class="badge badge-pill badge-float bg-indigo-400 border-1 border-white">8</span>
									</li>
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										<span class="badge badge-pill badge-float bg-indigo-400 border-1 border-white">6</span>
									</li>
								</ul>
							</div>
						</div>
						<!-- /thumbnail with badge -->

					</div>

					<div class="col-lg-6">

						<!-- Single linked thumbnail -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Linked thumbnail</h6>
							</div>
							
							<div class="card-body">
								Card footer with single linked thumbnail
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center py-2">
								<ul class="list-inline mb-0">
									<li class="list-inline-item">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										</a>
									</li>
								</ul>

								<ul class="list-inline mb-0">
									<li class="list-inline-item">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /single linked thumbnail -->


						<!-- Linked thumbnail group -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Linked thumbnail group</h6>
							</div>
							
							<div class="card-body">
								Card footer with linked thumbnail group
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center py-sm-2">
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

								<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
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
						<!-- /linked thumbnail group -->


						<!-- Thumbnail with badge mark -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Thumb with status badge</h6>
							</div>
							
							<div class="card-body">
								Card footer thumbnail with badge mark
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center py-2">
								<ul class="list-inline mb-0">
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										<span class="badge badge-mark badge-float border-danger mt-1 mr-1"></span>
									</li>
								</ul>

								<ul class="list-inline list-inline-condensed mb-0">
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										<span class="badge badge-mark badge-float border-indigo-400 mt-1 mr-1"></span>
									</li>
									<li class="list-inline-item">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="32" height="32" alt="">
										<span class="badge badge-mark badge-float border-indigo-400 mt-1 mr-1"></span>
									</li>
								</ul>
							</div>
						</div>
						<!-- /thumbnail with badge mark -->

					</div>
				</div>
				<!-- /footer thumbnails -->


				<!-- Footer form components -->
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
							<div class="card-header">
								<h6 class="card-title">Single checkbox</h6>
							</div>
							
							<div class="card-body">
								Single checkbox. Available in both directions
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<form class="d-inline-flex" action="#">
									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input type="checkbox" class="form-input-styled" data-fouc>
											Unchecked
										</label>
									</div>
								</form>

								<form class="d-inline-flex" action="#">
									<div class="form-check form-check-right form-check-inline">
										<label class="form-check-label">
											Checked
											<input type="checkbox" class="form-input-styled" checked data-fouc>
										</label>
									</div>
								</form>
							</div>
						</div>
						<!-- /single checkbox -->


						<!-- Checkbox group -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Checkbox group</h6>
							</div>
							
							<div class="card-body">
								Card footer with group of inline checkboxes
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
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

								<form class="d-flex mt-3 mt-sm-0" action="#">
									<div class="form-check form-check-right form-check-inline">
										<label class="form-check-label">
											Unchecked
											<input type="checkbox" class="form-input-styled" data-fouc>
										</label>
									</div>

									<div class="form-check form-check-right form-check-inline">
										<label class="form-check-label">
											Checked
											<input type="checkbox" class="form-input-styled" checked data-fouc>
										</label>
									</div>
								</form>
							</div>
						</div>
						<!-- /checkbox group -->


						<!-- Switchery toggle -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Switchery toggle</h6>
							</div>
							
							<div class="card-body">
								Switchery toggle. Available in all styles and sizes
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<form action="#">
									<div class="form-check form-check-inline form-check-switchery">
										<label class="form-check-label">
											<input type="checkbox" class="form-input-switchery" checked data-fouc>
											Refresh
										</label>
									</div>
								</form>

								<form action="#">
									<div class="form-check form-check-inline form-check-right form-check-switchery">
										<label class="form-check-label">
											Enable
											<input type="checkbox" class="form-input-switchery" checked data-fouc>
										</label>
									</div>
								</form>
							</div>
						</div>
						<!-- /switchery toggle -->


						<!-- Input field -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Text input</h6>
							</div>
							
							<div class="card-body">
								Card footer with basic text input and input group
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="input-group wmin-sm-200">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-search4 font-size-base"></i></span>
										</span>
										<input type="text" class="form-control" placeholder="Find...">
									</div>
								</form>

								<form class="mt-2 mt-sm-0" action="#">
									<input type="text" class="form-control wmin-sm-200" placeholder="Search...">
								</form>
							</div>
						</div>
						<!-- /input field -->


						<!-- File inputs -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">File inputs</h6>
							</div>
							
							<div class="card-body">
								Card footer with default and/or custom file inputs
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="wmin-sm-200">
										<input type="file">
									</div>
								</form>

								<form action="#">
									<div class="wmin-sm-200 mt-3 mt-sm-0">
										<input type="file" class="form-input-styled" data-fouc>
									</div>
								</form>
							</div>
						</div>
						<!-- /file inputs -->

					</div>

					<div class="col-lg-6">

						<!-- Single radio -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Single radio</h6>
							</div>
							
							<div class="card-body">
								Single radio. Available in both directions
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<form class="d-inline-flex" action="#">
									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input type="radio" name="single-radio" class="form-input-styled" data-fouc>
											Unselected
										</label>
									</div>
								</form>

								<form class="d-inline-flex" action="#">
									<div class="form-check form-check-right form-check-inline">
										<label class="form-check-label">
											Selected
											<input type="radio" name="single-radio" class="form-input-styled" checked data-fouc>
										</label>
									</div>
								</form>
							</div>
						</div>
						<!-- /single radio -->


						<!-- Radio group -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Radio group</h6>
							</div>
							
							<div class="card-body">
								Card footer with group of inline radio buttons
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form class="d-flex" action="#">
									<div class="form-check form-check-inline mb-0">
										<label class="form-check-label">
											<input type="radio" name="group-radio" class="form-input-styled" data-fouc>
											Radio 1
										</label>
									</div>

									<div class="form-check form-check-inline">
										<label class="form-check-label">
											<input type="radio" name="group-radio" class="form-input-styled" checked data-fouc>
											Radio 2
										</label>
									</div>
								</form>

								<form class="d-flex mt-3 mt-sm-0" action="#">
									<div class="form-check form-check-right form-check-inline mb-0">
										<label class="form-check-label">
											Radio 1
											<input type="radio" name="group-radio" class="form-input-styled" data-fouc>
										</label>
									</div>

									<div class="form-check form-check-right form-check-inline">
										<label class="form-check-label">
											Radio 2
											<input type="radio" name="group-radio" class="form-input-styled" checked data-fouc>
										</label>
									</div>
								</form>
							</div>
						</div>
						<!-- /radio group -->


						<!-- Toggle switch -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Toggle switch</h6>
							</div>
							
							<div class="card-body">
								Card footer with Bootstrap toggle switch. Labels are optional
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center py-sm-2">
								<form action="#">
									<div class="form-check form-check-switch">
										<label class="form-check-label">
											<input type="checkbox" data-on-text="On" data-off-text="Off" class="form-input-switch" data-size="small">
										</label>
									</div>
								</form>

								<form action="#">
									<div class="form-check form-check-switch">
										<label class="form-check-label">
											<input type="checkbox" data-on-text="<i class='icon-checkmark3'></i>" data-off-text="<i class='icon-cross2'></i>" class="form-input-switch" data-on-color="success" data-off-color="danger" data-size="small" checked>
										</label>
									</div>
								</form>
							</div>
						</div>
						<!-- /toggle switch -->


						<!-- Field with icon feedback -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Input with icon</h6>
							</div>
							
							<div class="card-body">
								Input field and icon feedback, in both directions
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control wmin-sm-200" placeholder="Searching...">
										<div class="form-control-feedback">
											<i class="icon-spinner2 spinner text-muted"></i>
										</div>
									</div>
								</form>

								<form class="mt-3 mt-sm-0" action="#">
									<div class="form-group-feedback form-group-feedback-left">
										<input type="search" class="form-control wmin-sm-200" placeholder="Search...">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-base text-muted"></i>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- /field with icon feedback -->


						<!-- Touchspin spinner -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Touchspin spinners</h6>
							</div>
							
							<div class="card-body">
								Card footer with <code>Touchspin</code> input group spinner
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="wmin-sm-200">
										<input type="text" value="10" class="form-control form-control-touchspin-vertical">
									</div>
								</form>

								<form class="mt-2 mt-sm-0" action="#">
									<div class="wmin-sm-200">
										<input type="text" value="55" class="form-control form-control-touchspin">
									</div>
								</form>
							</div>
						</div>
						<!-- /touchspin spinner -->

					</div>
				</div>
				<!-- /footer form components -->


				<!-- Footer selects -->
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
							<div class="card-header">
								<h6 class="card-title">Basic selects</h6>
							</div>
							
							<div class="card-body">
								Card footer with basic (browser default) and custom selects
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<select class="form-control wmin-sm-200">
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

								<form class="mt-2 mt-sm-0" action="#">
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
						<!-- /basic select -->


						<!-- Single select2 selects -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Single select2 selects</h6>
							</div>
							
							<div class="card-body">
								Card footer with a single <code>Select2</code> select
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
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

								<form class="mt-2 mt-sm-0" action="#">
									<div class="wmin-sm-200">
										<select class="form-control form-control-select2" data-fouc>
											<optgroup label="Alaskan Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI">Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone">
												<option value="CA">California</option>
												<option value="NV" selected>Nevada</option>
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
						<!-- /single select2 selects -->

					</div>


					<div class="col-lg-6">

						<!-- Multiple select2 selects -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Multiple select2 selects</h6>
							</div>
							
							<div class="card-body">
								Card footer with multiple <code>Select2</code> select
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
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

								<form class="mt-2 mt-sm-0" action="#">
									<div class="wmin-sm-200">
										<select class="form-control form-control-select2" multiple="multiple" data-fouc>
											<optgroup label="Alaskan Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI" selected>Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone">
												<option value="CA">California</option>
												<option value="NV" selected>Nevada</option>
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
						<!-- /multiple select2 selects -->


						<!-- Multiselect -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Multiselect</h6>
							</div>
							
							<div class="card-body">
								Card footer with single and multiple selects
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
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

								<form class="mt-2 mt-sm-0" action="#">
									<div class="wmin-sm-200">
										<select class="form-control form-control-multiselect" multiple="multiple" data-fouc>
											<option value="cheese" selected>Cheese</option>
											<option value="tomatoes">Tomatoes</option>
											<option value="mozarella">Mozzarella</option>
											<option value="mushrooms">Mushrooms</option>
											<option value="pepperoni">Pepperoni</option>
											<option value="onions" selected>Onions</option>
										</select>
									</div>
								</form>
							</div>
						</div>
						<!-- /multiselect -->

					</div>
				</div>
				<!-- /footer selects -->


				<!-- Footer buttons -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card footer buttons
					</h6>
					<span class="text-muted d-block">Basic buttons with options</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Single button -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Single button</h6>
							</div>
							
							<div class="card-body">
								Footer with basic button. Available in all sizes, colors and styling options
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<button type="button" class="btn btn-outline bg-indigo-400 text-indigo-400 border-indigo-400">Left button</button>
								<button type="button" class="btn bg-blue">Right button</button>
							</div>
						</div>
						<!-- /single button -->


						<!-- Single button dropdown -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Button dropdown</h6>
							</div>
							
							<div class="card-body">
								Footer with single button dropdown menu
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn bg-danger-400 dropdown-toggle" data-toggle="dropdown">Left menu</button>
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">One more separated line</a>
									</div>
								</div>

								<div class="btn-group">
									<button type="button" class="btn btn-outline bg-slate text-slate-700 border-slate border-2 dropdown-toggle" data-toggle="dropdown">Right menu</button>
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
						<!-- /single button dropdown -->


						<!-- Segmented button -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Segmented button</h6>
							</div>
							
							<div class="card-body">
								Card footer with segmented buttons
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="btn-group">
		                            <button class="btn btn-outline bg-dark text-dark border-dark">Left menu</button>
		                            <button class="btn btn-outline bg-dark text-dark border-dark dropdown-toggle" data-toggle="dropdown"></button>
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">One more separated line</a>
									</div>
		                        </div>

								<div class="btn-group">
		                            <button class="btn bg-teal-400">Right menu</button>
		                            <button class="btn bg-teal-400 dropdown-toggle" data-toggle="dropdown"></button>
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
						<!-- /segmented button -->


						<!-- Multiple buttons -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Multiple buttons</h6>
							</div>
							
							<div class="card-body">
								Card footer with multiple buttons
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<div class="btn-group">
									<button type="button" class="btn bg-indigo-400"><i class="icon-checkmark3 mr-2"></i> Save</button>
									<button type="button" class="btn btn-light ml-0 border-left-0"><i class="icon-cross2 mr-2"></i> Close</button>
								</div>

								<div class="mt-2 mt-sm-0">
									<button type="button" class="btn bg-indigo-400"><i class="icon-checkmark3 mr-2"></i> Save</button>
									<button type="button" class="btn btn-light ml-3"><i class="icon-cross2 mr-2"></i> Close</button>
								</div>
							</div>
						</div>
						<!-- /multiple button -->

					</div>


					<div class="col-lg-6">

						<!-- Icon button -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Card header</h6>
							</div>
							
							<div class="card-body">
								Card footer with single icon button. Available in all sizes, colors and styling options
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<button type="button" class="btn btn-outline bg-pink-400 text-pink-400 border-pink-400 btn-icon border-2">
									<i class="icon-checkmark3"></i>
								</button>
								<button type="button" class="btn bg-success-400 btn-icon"><i class="icon-task"></i></button>
							</div>
						</div>
						<!-- /icon button -->


						<!-- Icon button dropdown -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Icon button dropdown</h6>
							</div>
							
							<div class="card-body">
								Card footer with icon button dropdown
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn bg-blue btn-icon dropdown-toggle" data-toggle="dropdown">
										<i class="icon-menu6"></i>
									</button>
									
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">One more separated line</a>
									</div>
								</div>

								<div class="btn-group">
									<button type="button" class="btn btn-outline bg-teal text-teal border-teal btn-icon dropdown-toggle" data-toggle="dropdown">
										<i class="icon-calendar22"></i>
									</button>

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
						<!-- /icon button dropdown -->


						<!-- Segmented icon button -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Segmented icon button</h6>
							</div>
							
							<div class="card-body">
								Card footer with segmented icon button
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="btn-group">
		                            <button class="btn btn-outline bg-indigo-400 text-indigo-400 border-indigo-400 border-2 btn-icon">
		                            	<i class="icon-apple2"></i>
	                            	</button>
		                            <button class="btn btn-outline bg-indigo-400 text-indigo-400 border-indigo-400 border-2 btn-icon dropdown-toggle" data-toggle="dropdown"></button>
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">One more separated line</a>
									</div>
		                        </div>

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
						<!-- /segmented icon button -->


						<!-- Multiple icon buttons -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Multiple icon buttons</h6>
							</div>
							
							<div class="card-body">
								Card footer with multiple icon buttons
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="btn-group">
									<button type="button" class="btn bg-teal-400 btn-icon"><i class="icon-checkmark3"></i></button>
									<button type="button" class="btn btn-light btn-icon ml-0 border-left-0"><i class="icon-cross2"></i></button>
								</div>

								<div>
									<button type="button" class="btn bg-teal-400 btn-icon"><i class="icon-checkmark3"></i></button>
									<button type="button" class="btn btn-light btn-icon ml-2"><i class="icon-cross2"></i></button>
								</div>
							</div>
						</div>
						<!-- /multiple icon buttons -->

					</div>
				</div>
				<!-- /footer buttons -->


				<!-- Additional footer elements -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Other elements
					</h6>
					<span class="text-muted d-block">Other card footer elements</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Pills -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Footer pills</h6>
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

							<div class="card-footer bg-white d-flex justify-content-center align-items-center py-2">
								<ul class="nav nav-pills mb-0">
									<li class="nav-item">
										<a href="#card-pill1" class="nav-link" data-toggle="tab">
											<i class="icon-screen-full mr-2"></i>
											Home
										</a>
									</li>
									<li class="nav-item">
										<a href="#card-pill2" class="nav-link" data-toggle="tab">
											<i class="icon-stats-bars mr-2"></i>
											Stats
										</a>
									</li>
									<li class="nav-item dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-cog3"></i>
										</a>
										
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
						<!-- /pills -->


						<!-- Progress bar -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Progress bar</h6>
							</div>
							
							<div class="card-body">
								Card footer with progress bar. Available in all colors and options
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<div class="w-100 w-sm-auto wmin-sm-200">
									<div class="progress" style="height: 0.375rem;">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 40%;">
											<span class="sr-only">40% Complete</span>
										</div>
									</div>
								</div>

								<div class="w-100 w-sm-auto wmin-sm-200 mt-2 mt-sm-0">
									<div class="progress">
										<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%;">
											<span class="sr-only">80% Complete</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /progress bar -->


						<!-- jQuery UI slider -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">jQuery UI slider</h6>
							</div>
							
							<div class="card-body">
								Card footer with jQuery UI slider. Available in all sizes and colors
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center py-3">
								<div class="w-100 w-sm-auto wmin-sm-200">
									<div class="jui-slider-basic ui-slider-primary" data-fouc></div>
								</div>

								<div class="w-100 w-sm-auto wmin-sm-200 mt-4 mt-sm-0">
									<div class="jui-slider-range ui-slider-warning" data-fouc></div>
								</div>
							</div>
						</div>
						<!-- /jQuery UI slider -->

					</div>


					<div class="col-lg-6">

						<!-- Bottom tabs -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Footer tabs</h6>
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

							<div class="card-footer bg-white d-flex justify-content-center align-items-center p-0">
								<ul class="nav nav-tabs nav-tabs-bottom mb-0 border-0">
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
						<!-- /bottom tabs -->


						<!-- Inline text dropdown -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Inline text dropdown</h6>
							</div>
							
							<div class="card-body">
								Card footer with inline text and attached dropdown menu
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="dropdown">
									<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Left dropdown</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item">Action</a>
										<a href="#" class="dropdown-item">Another action</a>
										<a href="#" class="dropdown-item">Something else here</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item">One more separated line</a>
									</div>
								</div>

								<div class="dropdown ">
									<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Right dropdown</a>
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
						<!-- /inline etxt dropdown -->


						<!-- Noui slider -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">NoUI slider</h6>
							</div>
							
							<div class="card-body">
								Card footer with NoUI slider. Available in all sizes
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center py-3">
								<div class="w-100 w-sm-auto wmin-sm-200">
									<div class="noui-slider noui-slider-danger noui-height-helper" id="noui-slider-demo" data-fouc></div>
								</div>

								<div class="w-100 w-sm-auto wmin-sm-200 mt-4 mt-sm-0">
									<div class="noui-slider noui-slider-success noui-height-helper" id="noui-slider-demo2" data-fouc></div>
								</div>
							</div>
						</div>
						<!-- /noui slider -->

					</div>
				</div>
				<!-- /additional header elements -->


				<!-- Mixing footer elements -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Mixing elements
					</h6>
					<span class="text-muted d-block">Different element variations</span>
				</div>

				<div class="row">
					<div class="col-lg-6">

						<!-- Select2 and text with icons -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Select and text</h6>
							</div>
							
							<div class="card-body">
								Mixing Select2 selects and inline text with icons
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="wmin-sm-200">
										<select class="form-control form-control-select2" data-placeholder="Add to collection" data-fouc>
											<option></option>
											<option value="1">Favourites</option>
											<option value="2">Best sellers</option>
											<option value="3">To purchase</option>
											<option value="4">Commercial</option>
										</select>
									</div>
								</form>

								<div class="mt-3 mt-sm-0">
									<span class="text-muted mr-2">Rating:</span>
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
						<!-- /select2 and text with icons -->


						<!-- Checkbox and text dropdown -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Checkbox and text dropdown</h6>
							</div>
							
							<div class="card-body">
								Mixing checkbox with label and inline text with dropdown
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<form action="#">
									<div class="form-check">
										<label class="form-check-label">
											<input type="checkbox" class="form-input-styled" checked data-fouc>
											Remember
										</label>
									</div>
								</form>

		                		<div class="dropdown">
		                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown">
		                				<i class="icon-cog3 mr-2"></i>
		                				Settings
	                				</a>

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
						<!-- /checkbox and text dropdown -->


						<!-- Switchery and input field -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Switchery and input field</h6>
							</div>
							
							<div class="card-body">
								Mixing switchery toggle and input field
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control wmin-200" placeholder="Enter resolution...">
										<div class="form-control-feedback">
											<i class="icon-pencil3 text-muted"></i>
										</div>
									</div>
								</form>

								<form class="mt-3 mt-sm-0" action="#">
									<div class="form-check form-check-right form-check-inline form-check-switchery">
										<label class="form-check-label">
											<input type="checkbox" class="form-input-switchery" checked data-fouc>
											Auto save
										</label>
									</div>
								</form>
							</div>
						</div>
						<!-- /switchery and input field -->

					</div>


					<div class="col-lg-6">

						<!-- Text and button dropdown -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Text and button dropdown</h6>
							</div>
							
							<div class="card-body">
								Mixing inline text and button dropdown
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
		                		<div class="text-danger"><i class="icon-blocked mr-2"></i> Error occurred</div>

			                	<div class="btn-group">
		                            <button class="btn btn-dark dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></button>
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
						<!-- /text and button dropdown -->


						<!-- Spinner and progress bar -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Text, spinner and progress bar</h6>
							</div>
							
							<div class="card-body">
								Mixing inline text, rotating spinner icon and progress bar
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div class="text-muted"><i class="icon-spinner2 spinner mr-2"></i> Processing...</div>

								<div class="progress w-100 w-sm-auto wmin-sm-200 mt-2 mt-sm-0" style="height: 0.375rem;">
									<div class="progress-bar bg-indigo-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
										<span class="sr-only">60% Complete</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /spinner and progress bar -->


						<!-- Multiple elements -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Multiple elements</h6>
							</div>
							
							<div class="card-body">
								Mixing icon group, inline text and link
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
								<div>
									<div class="list-inline list-inline-condensed d-inline-block mb-0">
				                		<a href="#" class="list-inline-item text-pink-400"><i class="icon-heart5"></i></a>
				                		<a href="#" class="list-inline-item text-default"><i class="icon-bubble2"></i></a>
				                	</div>

				                	<span class="text-muted ml-3">Posted 3 hours ago</span>
			                	</div>

								<a href="#">Read more <i class="icon-menu7 ml-2"></i></a>
							</div>
						</div>
						<!-- /multiple elements -->

					</div>
				</div>
				<!-- /mixing footer elements -->


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
							<div class="card-header">
								<h6 class="card-title">Always visible</h6>
							</div>
							
							<div class="card-body">
								Add <code>.header-elements-inline</code> class to direct parent of <code>.header-elements</code> to make header elements visible on mobile and desktop.
							</div>

							<div class="card-footer bg-white d-flex justify-content-between align-items-center">
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

		                		<div class="dropdown">
		                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown">
		                				<i class="icon-cog3"></i>
	                				</a>

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
						<!-- /always visible -->


						<!-- Wrap and show -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Wrap and show</h6>
							</div>
							
							<div class="card-body">
								To wrap footer elements to the second row, add <code>.header-elements-[breakpoint]-inline</code> class to parent container. Breakpoint in class name is required, CSS needs to know screen size.
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<div class="text-danger"><i class="icon-blocked mr-2"></i> Error occurred</div>

								<form class="mt-2 mt-sm-0" action="#">
									<div class="form-group-feedback form-group-feedback-right">
										<input type="search" class="form-control wmin-sm-200" placeholder="Search...">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-base text-muted"></i>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- /wrap and show -->


						<!-- Stack elements -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Stack elements</h6>
							</div>
							
							<div class="card-body">
								Footer (block) elements are stackable by default. Use responsive margin classes to control vertical and horizontal spacing. Make sure margin and container breakpoints are matching.
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="wmin-sm-200">
										<input type="file" class="form-input-styled" data-fouc>
									</div>
								</form>

								<div class="d-sm-flex align-items-sm-center mt-3 mt-sm-0">
									<span class="text-muted mr-sm-3">Loading:</span>

									<div class="progress mt-1 mt-sm-0 w-100 w-sm-auto wmin-sm-200" style="height: 0.625rem;">
										<div class="progress-bar bg-indigo-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
											<span class="sr-only">60% Complete</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /stack elements -->


						<!-- Centered elements -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Centered elements</h6>
							</div>
							
							<div class="card-body">
								Use combination of <code>.d-flex</code> and <code>.justify-content-center</code> classes to center items in the line. All flex helper classes can be used as well for additional position options.
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center text-center">
								<div>
									<span class="text-muted mr-2">Rating:</span>
									<span>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<span class="text-muted ml-2">(49)</span>
									</span>
								</div>

								<div class="mt-2 mt-sm-0">
									<a href="#">Read more <i class="icon-arrow-left13 ml-2"></i></a>
								</div>
							</div>
						</div>
						<!-- /centered elements -->

					</div>

					<div class="col-lg-6">
						
						<!-- Hide on mobile -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Hide on mobile</h6>
							</div>
							
							<div class="card-body">
								To hide footer elements on certain breakpoints, use <code>.header-elements-[breakpoint]-inline</code> class in parent container and <code>.d-none</code> in footer elements container.
							</div>

							<div class="card-footer bg-white d-none d-sm-flex justify-content-sm-between align-items-sm-center">
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

		                		<div class="dropdown">
		                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown">
		                				<i class="icon-cog3"></i>
	                				</a>

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
						<!-- /hide on mobile -->


						<!-- Wrap and toggle -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Wrap and toggle</h6>
							</div>
							
							<div class="card-body">
								You can also use optional toggler - add <code>.d-flex</code> to page title and custom markup for the toggle button. And <code>.d-none</code> to footer elements container to make them hidden by default.
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<div class="d-flex">
									<div class="text-danger"><i class="icon-blocked mr-2"></i> Error occurred</div>
									<a href="#" class="footer-elements-toggle text-default d-sm-none"><i class="icon-more"></i></a>
								</div>

								<div class="footer-elements d-none d-sm-block mt-3 mt-sm-0">
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
						</div>
						<!-- /wrap and toggle -->


						<!-- Single line -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Single line</h6>
							</div>
							
							<div class="card-body">
								You can easily show footer elements in a single line, just wrap inner elements in container with <code>.d-flex</code> and <code>.align-items-center</code> classes. Use other flex utilities for adjustments.
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<form action="#">
									<div class="wmin-sm-200">
										<input type="file" class="form-input-styled" data-fouc>
									</div>
								</form>

								<div class="d-flex align-items-center mt-3 mt-sm-0">
									<span class="text-muted mr-3">Loading:</span>

									<div class="progress w-100 w-sm-auto wmin-sm-200" style="height: 0.625rem;">
										<div class="progress-bar bg-indigo-400 progress-bar-striped progress-bar-animated" style="width: 60%;">
											<span class="sr-only">60% Complete</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /single line -->


						<!-- Justified elements -->
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Justified elements</h6>
							</div>
							
							<div class="card-body">
								Use combination of <code>.d-flex</code> and <code>.justify-content-between</code> (or <code>.m(l,r)-auto</code>) classes to distribute items evenly in the line: first item is on the start line, last item on the end line.
							</div>

							<div class="card-footer bg-white d-sm-flex justify-content-sm-between align-items-sm-center">
								<div class="d-flex justify-content-between">
									<span class="text-muted mr-2">Rating:</span>
									<span>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<span class="text-muted ml-2">(49)</span>
									</span>
								</div>

								<div class="mt-2 mt-sm-0">
									<a href="#">Read more <i class="icon-arrow-left13 ml-2"></i></a>
								</div>
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

</body>
</html>
