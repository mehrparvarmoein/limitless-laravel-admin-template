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
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>

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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Content</span> - Syntax Highlighter</h4>
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
							<a href="components_collapsible" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Syntax highlighter</span>
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

				<!-- Basic syntax highlighter -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Basic syntax highlighter</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Prism is a lightweight, extensible syntax highlighter, built with modern web standards in mind. To highlight code syntax, add <code>.language-*</code> class to the <code>&lt;code></code> element. By default, highlighter displays a small text block with current language on the top right corner. This functionality is an extra option, provided by "Show language" prism.js addon.</p>

						<p class="font-weight-semibold">Example</p>

<pre class="language-markup mb-0"><code>&lt;!-- Navbar markup -->
&lt;div class="navbar navbar-expand-md navbar-dark">
	&lt;div class="navbar-brand">
		&lt;a href="index" class="d-inline-block">
			&lt;img src="assets/images/logo.png" alt="Limitless">
		&lt;/a>
	&lt;/div>

	&lt;div class="navbar-collapse collapse" id="navbar-mobile">
		&lt;ul class="navbar-nav mr-md-auto">
			&lt;li class="navbar-nav-link">...&lt;/li>
			&lt;li class="navbar-nav-link dropdown">...&lt;/li>
		&lt;/ul>

		&lt;ul class="navbar-nav">
			&lt;li class="navbar-nav-link">...&lt;/li>
			&lt;li class="navbar-nav-link dropdown">...&lt;/li>
		&lt;/ul>
	&lt;/div>
&lt;/div>
&lt;!-- /navbar markup --></code></pre>

					</div>
				</div>
				<!-- /basic syntax highlighter -->


				<!-- Line highlight -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Line highlight</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Highlights specific lines and/or line ranges with light green color and displays start and end line numbers. To highlight specific line, add <code>data-line="*"</code> attribute, to highlight line ranges add <code>data-line="*-*"</code> attribute. Multiple lines or ranges are also supported, to use just separate values with comma: <code>data-line="*, *-*"</code>. This prism addon is included to the current plugin build by default.</p>

						<p class="font-weight-semibold">Example</p>

<pre class="language-markup mb-0" data-line="3-7, 11-12, 15-18"><code>&lt;!-- Navbar markup -->
&lt;div class="navbar navbar-expand-md navbar-dark">
	&lt;div class="navbar-brand">
		&lt;a href="index" class="d-inline-block">
			&lt;img src="assets/images/logo.png" alt="Limitless">
		&lt;/a>
	&lt;/div>

	&lt;div class="navbar-collapse collapse" id="navbar-mobile">
		&lt;ul class="navbar-nav mr-md-auto">
			&lt;li class="navbar-nav-link">...&lt;/li>
			&lt;li class="navbar-nav-link dropdown">...&lt;/li>
		&lt;/ul>

		&lt;ul class="navbar-nav">
			&lt;li class="navbar-nav-link">...&lt;/li>
			&lt;li class="navbar-nav-link dropdown">...&lt;/li>
		&lt;/ul>
	&lt;/div>
&lt;/div>
&lt;!-- /navbar markup --></code></pre>

					</div>
				</div>
				<!-- /line highlight -->


				<!-- Line numbers -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Line numbers</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Line number at the beginning of code lines. Obviously, this is supposed to work only for code blocks - <code>&lt;pre>&lt;code></code> - and not for inline code. To use this feature, add <code>.line-numbers</code> class to your desired <code>&lt;pre></code> element and line-numbers plugin will take care. This prism addon is included to the current plugin build by default.</p>

						<p class="font-weight-semibold">Example</p>

<pre class="language-markup line-numbers mb-0"><code>&lt;!-- Navbar markup -->
&lt;div class="navbar navbar-expand-md navbar-dark">
	&lt;div class="navbar-brand">
		&lt;a href="index" class="d-inline-block">
			&lt;img src="assets/images/logo.png" alt="Limitless">
		&lt;/a>
	&lt;/div>

	&lt;div class="navbar-collapse collapse" id="navbar-mobile">
		&lt;ul class="navbar-nav mr-md-auto">
			&lt;li class="navbar-nav-link">...&lt;/li>
			&lt;li class="navbar-nav-link dropdown">...&lt;/li>
		&lt;/ul>

		&lt;ul class="navbar-nav">
			&lt;li class="navbar-nav-link">...&lt;/li>
			&lt;li class="navbar-nav-link dropdown">...&lt;/li>
		&lt;/ul>
	&lt;/div>
&lt;/div>
&lt;!-- /navbar markup --></code></pre>

					</div>
				</div>
				<!-- /line numbers -->


				<!-- Define starting line -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Define starting line</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Defines starting line number at the beginning of code lines. This feature works as an optional addition to the <code>line number</code> plugin. To set a custom starting line number, add <code>data-start="*"</code> attribute to the code block markup and it will shift the line counter. Negative values are also supported. This prism feature is also included by default.</p>

						<p class="font-weight-semibold">Example</p>

<pre class="language-markup line-numbers mb-0" data-start="-5"><code>&lt;!-- Navbar markup -->
&lt;div class="navbar navbar-expand-md navbar-dark">
	&lt;div class="navbar-brand">
		&lt;a href="index" class="d-inline-block">
			&lt;img src="assets/images/logo.png" alt="Limitless">
		&lt;/a>
	&lt;/div>

	&lt;div class="navbar-collapse collapse" id="navbar-mobile">
		&lt;ul class="navbar-nav mr-md-auto">
			&lt;li class="navbar-nav-link">...&lt;/li>
			&lt;li class="navbar-nav-link dropdown">...&lt;/li>
		&lt;/ul>

		&lt;ul class="navbar-nav">
			&lt;li class="navbar-nav-link">...&lt;/li>
			&lt;li class="navbar-nav-link dropdown">...&lt;/li>
		&lt;/ul>
	&lt;/div>
&lt;/div>
&lt;!-- /navbar markup --></code></pre>

					</div>
				</div>
				<!-- /define starting line -->


				<!-- Available languages -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Available languages</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">By default, a complete prism.js build allows you to add up to 126 languages. Current build includes 27: markup, css, css-extras, c-like, javascript, java, C, C#, C++, coffescript, diff, git, haml, handlebars, json, less, markdown, perl, php, php extras, python, ruby, sass, sql, stylus, swift, twig. Available addons: line-highlight, line-numbers, autolinker, file-highlight and show-language. For a custom build, please go to <a href="http://prismjs.com/download" target="_blank">this page</a>.</p>

						<div class="row">
							<div class="col-md-6">
								<p class="font-weight-semibold">CSS example</p>

<pre class="language-css mb-3"><code>/* CSS highlight */
.line-highlight {
	position: absolute;
	left: 0;
	right: 0;
	margin-top: 12px;
	background: rgba(133, 238, 149, 0.12);  
	pointer-events: none;
	white-space: pre;
}

.line-highlight:before,
.line-highlight[data-end]:after {
	content: attr(data-start);
	position: absolute;
	top: 0px;
	left: 10px;
	padding: 2px;
	text-align: center;
	font-size: 10px;
	color: #999;
}
</code></pre>

								<p class="font-weight-semibold">SASS example</p>

<pre class="language-scss mb-3"><code>/* SASS highlight */
.input-group-addon {
	padding: $input-btn-padding-y $input-btn-padding-x;
	margin-bottom: 0;
	font-size: $font-size-base;
	font-weight: $font-weight-normal;
	line-height: $input-btn-line-height;
	color: $input-color;
	text-align: center;
	background-color: $input-group-addon-bg;
	border: $input-btn-border-width solid $input-group-addon-border-color;
	@include border-radius($input-border-radius);

    // Sizing
    &.form-control-sm {
        padding: $input-btn-padding-y-sm $input-btn-padding-x-sm;
        font-size: $font-size-sm;
        @include border-radius($input-border-radius-sm);
    }

    &.form-control-lg {
        padding: $input-btn-padding-y-lg $input-btn-padding-x-lg;
        font-size: $font-size-lg;
        @include border-radius($input-border-radius-lg);
    }
}
</code></pre>

							</div>

							<div class="col-md-6">
								<p class="font-weight-semibold">JS example</p>

<pre class="language-javascript mb-3"><code>/* JS highlight */
$('[data-action=reload]').on('click', function (e) {
    e.preventDefault();
    var block = $(this).parent();
    $(block).block({ 
        message: '&lt;i class="icon-spinner3 spinner">&lt;/i>',
        overlayCSS: {
            backgroundColor: '#fff',
            opacity: 0.8,
            cursor: 'wait',
            'box-shadow': '0 0 0 1px #ddd'
        },
        css: {
            border: 0,
            backgroundColor: 'none'
        }
    });

    window.setTimeout(function () {
       $(block).unblock();
    }, 2000); 
});</code></pre>

								<p class="font-weight-semibold">LESS example</p>

<pre class="language-less mb-3"><code>/* LESS highlight */
.input-group-addon {
	padding: @input-btn-padding-y @input-btn-padding-x;
	margin-bottom: 0;
	font-size: @font-size-base;
	font-weight: @font-weight-normal;
	line-height: @input-btn-line-height;
	color: @input-color;
	text-align: center;
	background-color: @input-group-addon-bg;
	border: @input-btn-border-width solid @input-group-addon-border-color;
	.border-radius(@input-border-radius);

    // Sizing
    &.form-control-sm {
        padding: @input-btn-padding-y-sm @input-btn-padding-x-sm;
        font-size: @font-size-sm;
        .border-radius(@input-border-radius-sm);
    }

    &.form-control-lg {
        padding: @input-btn-padding-y-lg @input-btn-padding-x-lg;
        font-size: @font-size-lg;
        .border-radius(@input-border-radius-lg);
    }
}
</code></pre>
							</div>
						</div>
					</div>
				</div>
				<!-- /available languages -->

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
