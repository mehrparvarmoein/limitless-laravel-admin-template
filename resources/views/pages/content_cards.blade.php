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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Content</span> - Cards</h4>
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
							<a href="content_cards" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Cards</span>
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

				<!-- Card titles and subtitles -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Card titles and subtitles
					</h6>
					<span class="text-muted d-block">Titles, subtitles and header elements</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Card title</h6>
							</div>
							
							<div class="card-body">
								Basic card example without header elements
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Card title <span class="font-size-base ml-2">With inline subtitle</span></h6>
							</div>
							
							<div class="card-body">
								Basic card with inline header subtitle
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title">
									Card title
									<span class="d-block font-size-base">With block subtitle</span>
								</h6>
							</div>
							
							<div class="card-body">
								Basic card with block header subtitle
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Card controls</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Basic card with card controls
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Card controls <span class="font-size-base ml-2">and inline subtitle</span></h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
		                	</div>

							<div class="card-body">
								Card with inline header subtitle and card controls
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">
									Card controls
									<span class="d-block font-size-base">and block subtitle</span>
								</h6>

								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								Card with block header subtitle and card controls
							</div>
						</div>
					</div>
				</div>
				<!-- /card titles and subtitles -->


				<!-- Card titles -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card title options
					</h6>
					<span class="text-muted d-block">Card heading font options for titles</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Regular <span class="font-weight-semibold">Semibold</span></h6>
							</div>
							
							<div class="card-body">
								Mixing regular text with semibold
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title"><span class="font-weight-semibold">Semibold</span> Regular</h6>
							</div>
							
							<div class="card-body">
								Mixing semibold text with regular
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Regular <span class="text-thin">Thin</span></h6>
							</div>
							
							<div class="card-body">
								Mixing regular text with thin
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title"><span class="text-thin">Thin</span> Regular</h6>
							</div>
							
							<div class="card-body">
								Mixing thin text with regular
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Regular <span class="font-weight-bold">Bold</span></h6>
							</div>
							
							<div class="card-body">
								Mixing regular text with bold
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title"><span class="font-weight-bold">Bold</span> Regular</h6>
							</div>
							
							<div class="card-body">
								Mixing bold text with regular
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title"><span class="font-weight-semibold text-uppercase">Uppercase</span> Regular</h6>
							</div>
							
							<div class="card-body">
								Mixing semibold uppercase text with regular
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Regular <span class="font-weight-semibold font-italic">Italic</span></h6>
							</div>
							
							<div class="card-body">
								Mixing regular text with italic
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title"><span class="text-thin">Thin</span> <span class="font-weight-semibold text-uppercase">Uppercase</span></h6>
							</div>
							
							<div class="card-body">
								Mixing thin text with semibold uppercase
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Regular <small>Small tag</small></h6>
							</div>
							
							<div class="card-body">
								Regular text with subtitle
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title"><span class="font-weight-semibold text-uppercase">Uppercase</span> <small>Small tag</small></h6>
							</div>
							
							<div class="card-body">
								Semibold uppercase text with subtitle
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Default <span class="text-muted">Muted</span></h6>
							</div>
							
							<div class="card-body">
								Mixing default color with muted color
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Default <span class="text-primary">Primary</span></h6>
							</div>
							
							<div class="card-body">
								Mixing default color with primary color
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Default <span class="text-danger">Danger</span></h6>
							</div>
							
							<div class="card-body">
								Mixing default color with danger color
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Default <span class="text-success">Success</span></h6>
							</div>
							
							<div class="card-body">
								Mixing default color with success color
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Default <span class="text-warning">Warning</span></h6>
							</div>
							
							<div class="card-body">
								Mixing default color with warning color
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Default <span class="text-info">Info</span></h6>
							</div>
							
							<div class="card-body">
								Mixing default color with info color
							</div>
						</div>

						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Default <span class="text-teal">Teal</span></h6>
							</div>
							
							<div class="card-body">
								Mixing default color with custom color
							</div>
						</div>
					</div>
				</div>
				<!-- /card titles -->


				<!-- Card title sizes -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card title sizing
					</h6>
					<span class="text-muted d-block">Card title font colors using standard html headings</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h1 class="card-title">H1 title</h1>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								H1 title heading using <code>&lt;h1 class="card-title"></code> markup
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h3 class="card-title">H3 title</h3>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								H3 title heading using <code>&lt;h3 class="card-title"></code> markup
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">H5 title</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								H5 title heading using <code>&lt;h5 class="card-title"></code> markup
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h2 class="card-title">H2 title</h2>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								H2 title heading using <code>&lt;h2 class="card-title"></code> markup
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h4 class="card-title">H4 title</h4>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								H4 title heading using <code>&lt;h4 class="card-title"></code> markup
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">H6 title</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
							
							<div class="card-body">
								H6 title heading using <code>&lt;h6 class="card-title"></code> markup
							</div>
						</div>
					</div>
				</div>
				<!-- /card title sizes -->


				<!-- Header options -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card header options
					</h6>
					<span class="text-muted d-block">Background, text and border colors</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Condensed header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Default flat card style using <code>.card</code> class
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">White header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with white header color - add <code>.bg-white</code> class to card header container
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-light header-elements-inline">
								<h6 class="card-title">Light header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with light header color - add <code>.bg-light</code> class to card header container
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-dark text-white header-elements-inline">
								<h6 class="card-title">Dark header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with dark header color - add <code>.bg-dark</code> class to card header container
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-primary text-white header-elements-inline">
								<h6 class="card-title">Primary header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with primary header color - add <code>.bg-primary</code> class to card header container
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-secondary text-white header-elements-inline">
								<h6 class="card-title">Secondary header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with secondary header color - add <code>.bg-secondary</code> class to card header container
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-success text-white header-elements-inline">
								<h6 class="card-title">Green (success) header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with green (success context) header - add <code>.bg-success</code> class to card header container
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-warning text-white header-elements-inline">
								<h6 class="card-title">Orange (warning) header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with orange (warning context) header - add <code>.bg-warning</code> class to card header container
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-danger text-white header-elements-inline">
								<h6 class="card-title">Red (danger) header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with red (danger context) header - add <code>.bg-danger</code> class to card header container
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-info text-white header-elements-inline">
								<h6 class="card-title">Blue (info) header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with blue (info context) header - add <code>.bg-info</code> class to card header container
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header alpha-success text-success-800 header-elements-inline">
								<h6 class="card-title">Custom light color</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card header with custom light colors - add <code>.alpha-*</code> class to card header container
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header bg-teal-400 text-white header-elements-inline">
								<h6 class="card-title">Custom dark color</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card header with custom dark colors - add <code>.bg-*</code> class to card header container
							</div>
						</div>
					</div>
				</div>
				<!-- /header options -->


				<!-- Bordered cards title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Bordered cards
					</h6>
					<span class="text-muted d-block">Available card styles and colors</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card border-1 border-primary">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Condensed header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Default flat card style using <code>.card</code> class
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card border-1 border-grey-300">
							<div class="card-header bg-white header-elements-inline">
								<h6 class="card-title">White header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with white header color - add <code>.bg-white</code> class to card header container
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card border-1 border-grey-300">
							<div class="card-header bg-light border-grey-300 header-elements-inline">
								<h6 class="card-title">Light header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with light header color - add <code>.bg-light</code> class to card header container
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card border-1 border-dark">
							<div class="card-header bg-dark text-white header-elements-inline">
								<h6 class="card-title">Dark header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with dark header color - add <code>.bg-dark</code> class to card header container
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card border-1 border-primary">
							<div class="card-header bg-primary text-white header-elements-inline">
								<h6 class="card-title">Primary header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with primary header color - add <code>.bg-primary</code> class to card header container
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card border-1 border-secondary">
							<div class="card-header bg-secondary text-white header-elements-inline">
								<h6 class="card-title">Secondary header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with secondary header color - add <code>.bg-secondary</code> class to card header container
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card border-1 border-success">
							<div class="card-header bg-success text-white header-elements-inline">
								<h6 class="card-title">Green (success) header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with green (success context) header - add <code>.bg-success</code> class to card header container
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card border-1 border-warning">
							<div class="card-header bg-warning text-white header-elements-inline">
								<h6 class="card-title">Orange (warning) header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with orange (warning context) header - add <code>.bg-warning</code> class to card header container
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card border-1 border-danger">
							<div class="card-header bg-danger text-white header-elements-inline">
								<h6 class="card-title">Red (danger) header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with red (danger context) header - add <code>.bg-danger</code> class to card header container
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card border-1 border-info">
							<div class="card-header bg-info text-white header-elements-inline">
								<h6 class="card-title">Blue (info) header</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with blue (info context) header - add <code>.bg-info</code> class to card header container
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card border-1 border-success">
							<div class="card-header alpha-success text-success-800 border-bottom-success header-elements-inline">
								<h6 class="card-title">Custom light color</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card header with custom light colors - add <code>.alpha-*</code> class to card header container
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card border-1 border-teal-400">
							<div class="card-header bg-teal-400 text-white header-elements-inline">
								<h6 class="card-title">Custom dark color</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card header with custom dark colors - add <code>.bg-*</code> class to card header container
							</div>
						</div>
					</div>
				</div>
				<!-- /bordered cards -->


				<!-- Card borders -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card borders
					</h6>
					<span class="text-muted d-block">Custom 4 side borders for content cards</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card border-top-1 border-top-success rounded-top-0">
							<div class="card-header">
								<h6 class="card-title">Top custom border</h6>
							</div>
							
							<div class="card-body">
								Custom color of the <strong>top</strong> border. Use optional <code>.rounded-top-0</code> class to remove rounded top corners
							</div>
						</div>

						<div class="card border-left-1 border-left-danger rounded-left-0">
							<div class="card-header">
								<h6 class="card-title">Left custom border</h6>
							</div>
							
							<div class="card-body">
								Custom color of the <strong>left</strong> border. Use optional <code>.rounded-left-0</code> class to remove rounded left corners
							</div>
						</div>

						<div class="card border-y-1 border-top-info border-bottom-info rounded-0">
							<div class="card-header">
								<h6 class="card-title">Top and bottom borders</h6>
							</div>
							
							<div class="card-body">
								Custom color of the <strong>top</strong> and <strong>bottom</strong> borders. Use optional <code>.rounded-0</code> class to remove rounded corners
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card border-bottom-1 border-bottom-success rounded-bottom-0">
							<div class="card-header">
								<h6 class="card-title">Bottom custom border</h6>
							</div>
							
							<div class="card-body">
								Custom color of the <strong>bottom</strong> border. Use optional <code>.rounded-bottom-0</code> class to remove rounded bottom corners
							</div>
						</div>

						<div class="card border-right-1 border-right-danger rounded-right-0">
							<div class="card-header">
								<h6 class="card-title">Right custom border</h6>
							</div>
							
							<div class="card-body">
								Custom color of the <strong>right</strong> border. Use optional <code>.rounded-right-0</code> class to remove rounded right corners
							</div>
						</div>

						<div class="card border-x-1 border-left-info border-right-info rounded-0">
							<div class="card-header">
								<h6 class="card-title">Left and right borders</h6>
							</div>
							
							<div class="card-body">
								Custom color of the <strong>left</strong> and <strong>right</strong> borders. Use optional <code>.rounded-0</code> class to remove rounded corners
							</div>
						</div>
					</div>
				</div>
				<!-- /card borders -->


				<!-- Bordered cards border width -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Border sizing
					</h6>
					<span class="text-muted d-block">Available in 1 default and 2 optional sizes</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card border-y-1 border-top-warning border-bottom-warning rounded-0">
							<div class="card-header">
								<h6 class="card-title"><span class="font-weight-semibold">Basic</span> size</h6>
							</div>
							
							<div class="card-body">
								Basic border size of the element, defined in core variables. Any card border can be highlighted with proper class name
							</div>
						</div>

						<div class="card border-y-2 border-top-slate border-bottom-slate rounded-0">
							<div class="card-header">
								<h6 class="card-title"><span class="font-weight-semibold">Double</span> size</h6>
							</div>
							
							<div class="card-body">
								Double border size using <code>.border-*-2</code> class, where "*" is border direction. Use <code>.border-2</code> class to make all borders thicker
							</div>
						</div>

						<div class="card border-y-3 border-top-success border-bottom-success rounded-0">
							<div class="card-header">
								<h6 class="card-title"><span class="font-weight-semibold">Tripple</span> size</h6>
							</div>
							
							<div class="card-body">
								Tripple border size using <code>.border-*-3</code> class, where "*" is border direction. Use <code>.border-3</code> class to make all borders thicker
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card border-x-1 border-left-blue border-right-blue rounded-0">
							<div class="card-header">
								<h6 class="card-title"><span class="font-weight-semibold">Basic</span> size</h6>
							</div>
							
							<div class="card-body">
								Basic border size of the element, defined in core variables. Any card border can be highlighted with proper class name
							</div>
						</div>

						<div class="card border-x-2 border-left-indigo-400 border-right-indigo-400 rounded-0">
							<div class="card-header">
								<h6 class="card-title"><span class="font-weight-semibold">Double</span> size</h6>
							</div>
							
							<div class="card-body">
								Double border size using <code>.border-*-2</code> class, where "*" is border direction. Use <code>.border-2</code> class to make all borders thicker
							</div>
						</div>

						<div class="card border-x-3 border-left-pink-400 border-right-pink-400 rounded-0">
							<div class="card-header">
								<h6 class="card-title"><span class="font-weight-semibold">Tripple</span> size</h6>
							</div>
							
							<div class="card-body">
								Tripple border size using <code>.border-*-3</code> class, where "*" is border direction. Use <code>.border-3</code> class to make all borders thicker
							</div>
						</div>
					</div>
				</div>
				<!-- /bordered cards border width -->


				<!-- Card backgrounds -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Card backgrounds
					</h6>
					<span class="text-muted d-block">Optional default and custom background colors</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card bg-light">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Light background</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with light background color using <code>.bg-light</code> class
							</div>
						</div>

						<div class="card bg-primary text-white">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Primary background</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with primary background color using <code>.bg-primary</code> class
							</div>
						</div>

						<div class="card bg-danger text-white">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Red (danger) background</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with red (danger) background color using <code>.bg-danger</code> class
							</div>
						</div>

						<div class="card bg-success text-white">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Green (success) background</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with green (success) background color using <code>.bg-success</code> class
							</div>
						</div>

						<div class="card alpha-success border-success">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Alpha backgrounds</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with custom light background color using <code>.alpha-*</code> class
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card bg-dark text-white">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Dark background</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with dark background color using <code>.bg-dark</code> class
							</div>
						</div>

						<div class="card bg-secondary text-white">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Secondary background</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with secondary background color using <code>.bg-secondary</code> class
							</div>
						</div>

						<div class="card bg-warning text-white">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Orange (warning) background</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with orange (warning) background color using <code>.bg-warning</code> class
							</div>
						</div>

						<div class="card bg-info text-white">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Blue (info) background</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with blue (info) background color using <code>.bg-info</code> class
							</div>
						</div>

						<div class="card bg-purple-300 text-white">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Custom background</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								Card with custom background color using <code>.bg-*</code> classes
							</div>
						</div>
					</div>
				</div>
				<!-- /card backgrounds -->

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
