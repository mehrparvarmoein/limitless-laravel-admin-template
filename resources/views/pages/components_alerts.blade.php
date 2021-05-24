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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Components</span> - Alerts</h4>
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
							<a href="components_alerts" class="breadcrumb-item">Components</a>
							<span class="breadcrumb-item active">Alerts</span>
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

				<!-- Default alerts -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Default alerts</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Provide contextual feedback messages for typical user actions with the handful of available and flexible <code>alert</code> messages. Alerts don't have default classes, only base and modifier classes: choose from <code>primary</code>, <code>success</code>, <code>info</code>, <code>warning</code> or <code>danger</code>. Wrap any text and an optional dismiss button in <code>.alert</code> and one of the five contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</p>

						<div class="row">
							<div class="col-lg-6">
								<p class="font-weight-semibold">Primary alert</p>
								<div class="alert alert-primary border-0 alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
							    </div>

								<p class="font-weight-semibold">Danger alert</p>
								<div class="alert alert-danger border-0 alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
							    </div>

								<p class="font-weight-semibold">Success alert</p>
								<div class="alert alert-success border-0 alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">this important</a> alert message.
							    </div>
							</div>

							<div class="col-lg-6">
								<p class="font-weight-semibold">Warning alert</p>
								<div class="alert alert-warning border-0 alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Warning!</span> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
							    </div>

								<p class="font-weight-semibold">Info alert</p>
								<div class="alert alert-info border-0 alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link">super important</a>.
							    </div>

								<p class="font-weight-semibold">Custom color</p>
								<div class="alert text-violet-800 alpha-violet border-0 alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link">alert</a> with custom color.
							    </div>
							</div>
						</div>
					</div>
				</div>
				<!-- /default alerts -->


				<!-- Bordered alerts -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Bordered alerts</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Examples of <code>bordered</code> alerts. Basically, any alert could have a colored border, except solid alerts. This stronger border adds more visual separation, it doesn't attract too much attention, but in the same time highlights a message importance using contextual border, background and text colors. To use stronger border, just add <code>.alert-bordered</code> to the base <code>.alert</code> class.</p>

						<div class="row">
							<div class="col-lg-6">
								<p class="font-weight-semibold">Primary alert</p>
								<div class="alert alert-primary alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
							    </div>

								<p class="font-weight-semibold">Danger alert</p>
								<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
							    </div>

								<p class="font-weight-semibold">Success alert</p>
								<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">this important</a> alert message.
							    </div>
							</div>

							<div class="col-lg-6">
								<p class="font-weight-semibold">Warning alert</p>
								<div class="alert alert-warning alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Warning!</span> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
							    </div>

								<p class="font-weight-semibold">Info alert</p>
								<div class="alert alert-info alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link">super important</a>.
							    </div>

								<p class="font-weight-semibold">Custom color</p>
								<div class="alert text-violet-800 alpha-violet border-violet alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link">alert</a> with custom color.
							    </div>
							</div>
						</div>
					</div>
				</div>
				<!-- /bordered alerts -->


				<!-- Styled left alerts -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Styled left alerts</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Styled alerts with <code>left</code> positioned icons. These alerts have a wide <code>left</code> border and contextual icon, support all contextual alert classes. Also they support custom border color classes according to the <a href="colors_red">custom color system</a>. To use left positioned styled alerts, add <code>.alert-styled-left</code> class to the contextual alert class. To use custom border color and custom icon, use <code>.border-*</code> and <code>.alert-styled-custom</code> classes. To add left arrow, use <code>.alert-arrow-left</code> class.</p>

						<div class="row">
							<div class="col-lg-6">
								<p class="font-weight-semibold">Primary alert</p>
								<div class="alert alert-primary alert-styled-left alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
							    </div>

								<p class="font-weight-semibold">Danger alert</p>
								<div class="alert alert-danger alert-styled-left alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
							    </div>

								<p class="font-weight-semibold">Success alert</p>
								<div class="alert alert-success alert-styled-left alert-arrow-left alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">this important</a> alert message.
							    </div>
							</div>

							<div class="col-lg-6">
								<p class="font-weight-semibold">Warning alert</p>
								<div class="alert alert-warning alert-styled-left alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Warning!</span> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
							    </div>

								<p class="font-weight-semibold">Info alert</p>
								<div class="alert alert-info alert-styled-left alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link">super important</a>.
							    </div>

								<p class="font-weight-semibold">Custom color</p>
								<div class="alert alert-styled-left alert-styled-custom alert-arrow-left alpha-teal border-teal alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link">alert</a> with custom color.
							    </div>
							</div>
						</div>
					</div>
				</div>
				<!-- /styled left alerts -->


				<!-- Styled right alerts -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Styled right alerts</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Styled alerts with <code>right</code> positioned icons. These alerts have a wide <code>right</code> border and contextual icon, support all contextual alert classes. Also they support custom border color classes according to the <a href="colors_red">custom color system</a>. To use right positioned styled alerts, add <code>.alert-styled-right</code> class. To use custom border color and custom icon, use <code>.border-*</code> and <code>.alert-styled-custom</code> classes. To add right arrow, use <code>.alert-arrow-right</code> class.</p>

						<div class="row">
							<div class="col-lg-6">
								<p class="font-weight-semibold">Primary alert</p>
								<div class="alert alert-primary alert-styled-right alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
							    </div>

								<p class="font-weight-semibold">Danger alert</p>
								<div class="alert alert-danger alert-styled-right alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
							    </div>

								<p class="font-weight-semibold">Success alert</p>
								<div class="alert alert-success alert-styled-right alert-arrow-right alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">this important</a> alert message.
							    </div>
							</div>

							<div class="col-lg-6">
								<p class="font-weight-semibold">Warning alert</p>
								<div class="alert alert-warning alert-styled-right alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Warning!</span> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
							    </div>

								<p class="font-weight-semibold">Info alert</p>
								<div class="alert alert-info alert-styled-right alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link">super important</a>.
							    </div>

								<p class="font-weight-semibold">Custom color</p>
								<div class="alert alert-styled-right alert-styled-custom alert-arrow-right alpha-teal border-teal alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link">alert</a> with custom color.
							    </div>
							</div>
						</div>
					</div>
				</div>
				<!-- /styled right alerts -->


				<!-- Solid alerts -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Solid alerts</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Examples of alerts with <code>solid</code> background color. This type of alerts are useful when you need to highlight some important information and attract more attention to it. To use solid alert styling, add contextual background color class to the base <code>.alert</code> container. Also alerts support custom color classes from a custom <a href="colors_red">color system</a>. To use a custom color, add <code>.bg-*</code> to the base <code>.alert</code> class.</p>

						<div class="row">
							<div class="col-lg-6">
								<p class="font-weight-semibold">Primary alert</p>
								<div class="alert bg-primary text-white alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
							    </div>

								<p class="font-weight-semibold">Danger alert</p>
								<div class="alert bg-danger text-white alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
							    </div>

								<p class="font-weight-semibold">Success alert</p>
								<div class="alert bg-success text-white alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">this important</a> alert message.
							    </div>
							</div>

							<div class="col-lg-6">
								<p class="font-weight-semibold">Warning alert</p>
								<div class="alert bg-warning text-white alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Warning!</span> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
							    </div>

								<p class="font-weight-semibold">Info alert</p>
								<div class="alert bg-info text-white alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link">super important</a>.
							    </div>

								<p class="font-weight-semibold">Custom color</p>
								<div class="alert bg-teal text-white alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link">alert</a> with custom color.
							    </div>
							</div>
						</div>
					</div>
				</div>
				<!-- /solid alerts -->


				<!-- Solid left styled alerts -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Solid left styled</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Examples of solid alerts with <code>left</code> positioned icon. Default solid alerts can be mixed with styled alerts in order to display contextual icon and darker <code>left</code> border. They perfectly suit for different kinds of notifications. To use, add <code>alert-styled-left</code> and contextual <code>.bg-*</code> classes to the base <code>.alert</code> class. To use custom alert color, just add <code>.bg-*</code> class from the custom <a href="colors_red">color system</a>.</p>

						<div class="row">
							<div class="col-lg-6">
								<p class="font-weight-semibold">Primary alert</p>
								<div class="alert bg-primary text-white alert-styled-left alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
							    </div>

								<p class="font-weight-semibold">Danger alert</p>
								<div class="alert bg-danger text-white alert-styled-left alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
							    </div>

								<p class="font-weight-semibold">Success alert</p>
								<div class="alert bg-success text-white alert-styled-left alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">this important</a> alert message.
							    </div>
							</div>

							<div class="col-lg-6">
								<p class="font-weight-semibold">Warning alert</p>
								<div class="alert bg-warning text-white alert-styled-left alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Warning!</span> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
							    </div>

								<p class="font-weight-semibold">Info alert</p>
								<div class="alert bg-info text-white alert-styled-left alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link">super important</a>.
							    </div>

								<p class="font-weight-semibold">Custom color</p>
								<div class="alert bg-teal text-white alert-styled-left alert-styled-custom alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link">alert</a> with custom color.
							    </div>
							</div>
						</div>
					</div>
				</div>
				<!-- /solid left styled alerts -->


				<!-- Solid right styled alerts -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Solid right styled</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Examples of solid alerts with <code>right</code> positioned icon. Default solid alerts can be mixed with styled alerts in order to display contextual icon and darker <code>right</code> border. They perfectly suit for different kinds of notifications. To use, add <code>alert-styled-right</code> and contextual <code>.bg-</code> classes to the base <code>.alert</code> class. To use custom alert color, just add <code>.bg-*</code> class from the custom <a href="colors_red">color system</a>.</p>

						<div class="row">
							<div class="col-lg-6">
								<p class="font-weight-semibold">Primary alert</p>
								<div class="alert bg-primary text-white alert-styled-right alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Morning!</span> We're glad to <a href="#" class="alert-link">see you again</a> and wish you a nice day.
							    </div>

								<p class="font-weight-semibold">Danger alert</p>
								<div class="alert bg-danger text-white alert-styled-right alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Oh snap!</span> Change a few things up and <a href="#" class="alert-link">try submitting again</a>.
							    </div>

								<p class="font-weight-semibold">Success alert</p>
								<div class="alert bg-success text-white alert-styled-right alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Well done!</span> You successfully read <a href="#" class="alert-link">this important</a> alert message.
							    </div>
							</div>

							<div class="col-lg-6">
								<p class="font-weight-semibold">Warning alert</p>
								<div class="alert bg-warning text-white alert-styled-right alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Warning!</span> Better <a href="#" class="alert-link">check yourself</a>, you're not looking too good.
							    </div>

								<p class="font-weight-semibold">Info alert</p>
								<div class="alert bg-info text-white alert-styled-right alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Heads up!</span> This alert needs your attention, but it's not <a href="#" class="alert-link">super important</a>.
							    </div>

								<p class="font-weight-semibold">Custom color</p>
								<div class="alert bg-teal text-white alert-styled-right alert-styled-custom alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Surprise!</span> This is a super-duper nice looking <a href="#" class="alert-link">alert</a> with custom color.
							    </div>
							</div>
						</div>
					</div>
				</div>
				<!-- /solid right styled alerts -->


				<!-- Rounded alerts -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Rounded alerts</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Examples of <code>rounded</code> alerts. By default, all alerts have <code>3px</code> border radius. You can increase it by adding <code>.alert-rounded</code> class to any type of alert: basic, bordered, styled with arrows and solid. This class also increases side padding and border widths in alerts for better appearance. The main benefit of rounded alerts - they don't look like any element on the page.</p>

						<div class="row">
							<div class="col-lg-6">
								<p class="font-weight-semibold">Primary alert</p>
								<div class="alert alert-primary alert-rounded alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Morning!</span> We're glad to see you again and wish you a nice day.
							    </div>

								<p class="font-weight-semibold">Danger alert</p>
								<div class="alert alert-danger alert-rounded alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Oh snap!</span> Change a few things up and try submitting again.
							    </div>

								<p class="font-weight-semibold">Success alert</p>
								<div class="alert bg-success text-white alert-rounded alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Well done!</span> You successfully read this important alert message.
							    </div>
							</div>

							<div class="col-lg-6">
								<p class="font-weight-semibold">Warning alert</p>
								<div class="alert alert-warning alert-rounded alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Warning!</span> Better check yourself, you're not looking too good.
							    </div>

								<p class="font-weight-semibold">Info alert</p>
								<div class="alert alert-info alert-rounded alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Heads up!</span> This alert needs your attention, but it's not super important.
							    </div>

								<p class="font-weight-semibold">Custom color</p>
								<div class="alert bg-teal text-white alert-rounded alert-dismissible">
									<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
									<span class="font-weight-semibold">Surprise!</span> This is a super-duper nice looking alert with custom color.
							    </div>
							</div>
						</div>
					</div>
				</div>
				<!-- /rounded alerts -->


				<!-- Toasts -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Toast component</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Toasts are lightweight notifications designed to mimic the push notifications that have been popularized by mobile and desktop operating systems. They’re built with flexbox, so they’re easy to align and position. Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.</p>

						<div class="row">
							<div class="col-lg-4">
								<div class="mb-4">
									<p class="font-weight-semibold">Basic toast</p>
									<div class="toast" style="opacity: 1; max-width: none;">
										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="mb-4">
									<p class="font-weight-semibold">Toast title</p>
									<div class="toast" style="opacity: 1; max-width: none;">
										<div class="toast-header">
											<span class="font-weight-semibold mr-auto">Toast title</span>
										</div>

										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="mb-4">
									<p class="font-weight-semibold">Dismissable toast</p>
									<div class="toast" style="opacity: 1; max-width: none;">
										<div class="toast-header">
											<span class="font-weight-semibold mr-auto">Dismissable toast</span>
											<button type="button" class="ml-3 close" data-dismiss="toast">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-4">
								<div class="mb-4">
									<p class="font-weight-semibold">Text helper</p>
									<div class="toast" style="opacity: 1; max-width: none;">
										<div class="toast-header">
											<span class="font-weight-semibold mr-auto">Light toast</span>
											<span class="font-size-sm text-muted">40 mins ago</span>
										</div>

										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="mb-4">
									<p class="font-weight-semibold">Badge helper</p>
									<div class="toast" style="opacity: 1; max-width: none;">
										<div class="toast-header">
											<span class="font-weight-semibold mr-auto">Light toast</span>
											<span class="badge badge-pill bg-danger">59</span>
										</div>

										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="mb-4">
									<p class="font-weight-semibold">Loading helper</p>
									<div class="toast" style="opacity: 1; max-width: none;">
										<div class="toast-header">
											<span class="font-weight-semibold mr-auto">Light toast</span>
											<i class="icon-spinner2 spinner text-muted top-0"></i>
										</div>

										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-4">
								<div class="mb-4">
									<p class="font-weight-semibold">Light toast</p>
									<div class="toast" style="opacity: 1; max-width: none;">
										<div class="toast-header">
											<span class="font-weight-semibold mr-auto">Light toast</span>
											<span class="font-size-sm text-muted">11 mins ago</span>
											<button type="button" class="ml-3 close" data-dismiss="toast">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="mb-4">
									<p class="font-weight-semibold">Dark toast</p>
									<div class="toast bg-slate border-transparent" style="opacity: 1; max-width: none;">
										<div class="toast-header bg-slate-600 border-bottom-slate-400">
											<span class="font-weight-semibold mr-auto">Dark toast</span>
											<span class="font-size-sm opacity-50">11 mins ago</span>
											<button type="button" class="ml-3 close text-white" data-dismiss="toast">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4">
								<div class="mb-4">
									<p class="font-weight-semibold">Info alert</p>
									<div class="toast border-success" style="opacity: 1; max-width: none;">
										<div class="toast-header bg-success border-success">
											<span class="font-weight-semibold mr-auto">Contextual toast</span>
											<span class="font-size-sm opacity-50">11 mins ago</span>
											<button type="button" class="ml-3 close text-white" data-dismiss="toast">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="toast-body">
											Hello, world! This is a toast message.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /toasts -->

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
