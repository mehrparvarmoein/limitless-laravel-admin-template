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
	<script src="../../../../global_assets/js/plugins/internationalization/i18next.min.js"></script>
	<script src="../../../../global_assets/js/plugins/internationalization/jquery-i18next.min.js"></script>
	<script src="../../../../global_assets/js/plugins/internationalization/i18nextXHRBackend.min.js"></script>
	<script src="../../../../global_assets/js/plugins/internationalization/i18nextBrowserLanguageDetector.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/internationalization_switch_query.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Translation</span> - Query String</h4>
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
							<a href="internationalization_switch_query" class="breadcrumb-item">Translation</a>
							<span class="breadcrumb-item active">Query string</span>
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

				<!-- Query string parameter -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Query string parameter</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This example demonstrates language switching on <code>query string</code> parameter change. Every time the link is clicked, i18next loads <code>json</code> file with selected language and initialize translation on a new page load. Other languages are accessible directly via <code>?lang=en</code> querystring parameter. To change the language on click, use <code>&lt;a href="?lng=en"&gt;EN&lt;/a&gt;</code> markup. This language selection method also supports user navigator language detection and cookies support.</p>

						<p class="font-weight-semibold">Change language directly:</p>
						<div class="navbar navbar-dark navbar-expand-md rounded mb-4">
							<div class="navbar-brand">
								<a href="index" class="d-inline-block">
									<img src="../../../../global_assets/images/logo_light.png" alt="">
								</a>
							</div>

							<div class="d-md-none">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-i18-demo">
									<i class="icon-tree5"></i>
								</button>
							</div>

							<div class="collapse navbar-collapse" id="navbar-i18-demo">
								<ul class="navbar-nav">
									<li class="nav-item dropdown language-switch">
										<a class="navbar-nav-link dropdown-toggle" data-toggle="dropdown"></a>
										<div class="dropdown-menu">
											<a href="?lng=en" class="dropdown-item english">
												<img src="../../../../global_assets/images/lang/gb.png" class="img-flag" alt="">
												English
											</a>
											<a href="?lng=ru" class="dropdown-item russian">
												<img src="../../../../global_assets/images/lang/ru.png" class="img-flag" alt="">
												Русский
											</a>
											<a href="?lng=ua" class="dropdown-item ukrainian">
												<img src="../../../../global_assets/images/lang/ua.png" class="img-flag" alt="">
												Українська
											</a>
										</div>
									</li>
								</ul>

								<ul class="navbar-nav ml-md-auto language-switch">
									<li class="nav-item">
										<a href="?lng=en" class="navbar-nav-link english">
											<img src="../../../../global_assets/images/lang/gb.png" class="img-flag mr-2" alt="">
											English
										</a>
									</li>
									<li class="nav-item">
										<a href="?lng=ru" class="navbar-nav-link russian">
											<img src="../../../../global_assets/images/lang/ru.png" class="img-flag mr-2" alt="">
											Russian
										</a>
									</li>
									<li class="nav-item">
										<a href="?lng=ua" class="navbar-nav-link ukrainian">
											<img src="../../../../global_assets/images/lang/ua.png" class="img-flag mr-2" alt="">
											Ukrainian
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<p class="font-weight-semibold">Simple inline text:</p>
								<div class="sidebar sidebar-light sidebar-component position-static w-100 d-block mb-4">
									<div class="sidebar-content position-static">

										<!-- User menu -->
										<div class="card sidebar-user">
											<div class="card-body">
												<div class="media">
													<a href="#" class="mr-3">
														<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt="">
													</a>

													<div class="media-body">
														<div class="media-title font-weight-semibold" data-i18n="nav_inline.user.name" data-fouc>Victoria Baker</div>
														<div class="font-size-xs opacity-50">
															<i class="icon-pin font-size-sm"></i> &nbsp;<span data-i18n="nav_inline.user.location" data-fouc>Santa Ana, CA</span>
														</div>
													</div>

													<div class="ml-3 align-self-center">
														<a href="#" class="text-default"><i class="icon-cog3"></i></a>
													</div>
												</div>
											</div>
										</div>
										<!-- /user menu -->


										<!-- Navigation -->
										<div class="card">
											<ul class="nav nav-sidebar" data-nav-type="accordion">
												<li class="nav-item-header">
													<div class="text-uppercase font-size-sm line-height-sm" data-i18n="nav_inline.nav.header" data-fouc>
														Sidebar header
													</div>
												</li>

												<li class="nav-item">
													<a href="#" class="nav-link">
														<i class="icon-strategy"></i>
														<span data-i18n="nav_inline.nav.top_level" data-fouc>Top level link</span>
													</a>
												</li>

												<li class="nav-item nav-item-submenu">
													<a href="#" class="nav-link">
														<i class="icon-stack2"></i>
														<span data-i18n="nav_inline.nav.with_children.main" data-fouc>With children</span>
													</a>

													<ul class="nav nav-group-sub">
														<li class="nav-item">
															<a href="#" class="nav-link" data-i18n="nav_inline.nav.with_children.second_one" data-fouc>Second level link 1</a>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link" data-i18n="nav_inline.nav.with_children.second_two" data-fouc>Second level link 2</a>
														</li>
													</ul>
												</li>

												<li class="nav-item nav-item-submenu">
													<a href="#" class="nav-link">
														<i class="icon-cube3"></i>
														<span data-i18n="nav_inline.nav.multiple_levels.main" data-fouc>Multiple levels</span>
													</a>

													<ul class="nav nav-group-sub">
														<li class="nav-item">
															<a href="#" class="nav-link" data-i18n="nav_inline.nav.multiple_levels.second_one" data-fouc>Second level link 1</a>
														</li>

														<li class="nav-item nav-item-submenu">
															<a href="#" class="nav-link" data-i18n="nav_inline.nav.multiple_levels.second_child.main" data-fouc>Second level with child</a>

															<ul class="nav nav-group-sub">
																<li class="nav-item">
																	<a href="#" class="nav-link" data-i18n="nav_inline.nav.multiple_levels.second_child.third_one" data-fouc>Third level link 1</a>
																</li>
																<li class="nav-item">
																	<a href="#" class="nav-link" data-i18n="nav_inline.nav.multiple_levels.second_child.third_two" data-fouc>Third level link 2</a>
																</li>
															</ul>
														</li>
														<li class="nav-item">
															<a href="#" class="nav-link" data-i18n="nav_inline.nav.multiple_levels.second_three" data-fouc>Second level link 3</a>
														</li>
													</ul>
												</li>

												<li class="nav-item">
													<a href="#" class="nav-link disabled">
														<i class="icon-make-group"></i>
														<span data-i18n="nav_inline.nav.multiple_levels.disabled" data-fouc>Disabled link</span>
													</a>
												</li>
											</ul>
										</div>
										<!-- /navigation -->

									</div>
								</div>
							</div>

							<div class="col-md-6">
								<p class="font-weight-semibold">Including attributes, tooltips, badges etc:</p>
								<div class="sidebar sidebar-light sidebar-component position-static w-100 d-block mb-4">
									<div class="sidebar-content position-static">

										<!-- User menu -->
										<div class="card sidebar-user">
											<div class="card-body">
												<div class="media">
													<a href="#" class="mr-3">
														<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt="">
													</a>

													<div class="media-body">
														<div class="media-title font-weight-semibold" data-i18n="nav_inline.user.name" data-fouc>Victoria Baker</div>
														<div class="font-size-xs opacity-50">
															<i class="icon-pin font-size-sm"></i> &nbsp;<span data-i18n="nav_inline.user.location" data-fouc>Santa Ana, CA</span>
														</div>
													</div>

													<div class="ml-3 align-self-center">
														<a href="#" class="text-default">
															<i class="icon-cog3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<!-- /user menu -->


										<!-- Navigation -->
										<div class="card">
											<ul class="nav nav-sidebar" data-nav-type="accordion">
												<li class="nav-item-header d-flex">
													<div class="text-uppercase font-size-sm line-height-sm" data-i18n="nav_advanced.nav.header" data-fouc>
														
													</div>
													<a href="#" class="align-self-start ml-auto" data-popup="tooltip" title="Tooltip" data-i18n="[title]nav_advanced.nav.tooltip_text;[data-original-title]nav_advanced.nav.tooltip_text;nav_advanced.nav.tooltip" data-placement="left" data-container="body" data-fouc>Tooltip text</a>
												</li>

												<li class="nav-item">
													<a href="#" class="nav-link">
														<i class="icon-strategy"></i>
														<span data-i18n="nav_advanced.nav.inline_element" data-fouc>Inline element</span>
														<span class="badge bg-pink-400 ml-auto" data-i18n="nav_advanced.nav.badges.new" data-fouc>New</span>
													</a>
												</li>

												<li class="nav-item">
													<a href="#" class="nav-link">
														<i class="icon-stack2"></i>
														<span data-i18n="nav_advanced.nav.insert" data-fouc>Insert HTML from JSON</span>
														<span class="ml-auto" data-i18n="[html]nav_advanced.nav.badges.done" data-fouc></span>
													</a>
												</li>

												<li class="nav-item">
													<a href="#" class="nav-link">
														<i class="icon-cube3"></i>
														<span data-i18n="nav_advanced.nav.inline_text" data-fouc>Plain text</span>
														<span class="text-muted font-weight-normal ml-auto" data-i18n="nav_advanced.nav.badges.text" data-fouc>Inline text</span>
													</a>
												</li>

												<li class="nav-item">
													<a href="#" class="nav-link disabled">
														<i class="icon-make-group"></i>
														<span data-i18n="nav_advanced.nav.multiple_levels.disabled" data-fouc>Disabled link</span>
														<span class="badge bg-primary ml-auto" data-i18n="nav_advanced.nav.badges.fixed" data-fouc>Fixed</span>
													</a>
												</li>
											</ul>
										</div>
										<!-- /navigation -->

									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<p class="font-weight-semibold">Example markup:</p>
								<pre class="mb-3" data-line="3,8,13"><code class="language-markup">&lt;!-- Dropdown menu -->
&lt;div class="dropdown-menu">
	&lt;a href="?lng=en" class="dropdown-item english">
		&lt;img src="assets/images/flags/gb.png" class="img-flag" alt="">
		English
	&lt;/a>

	&lt;a href="?lng=ru" class="dropdown-item russian">
		&lt;img src="assets/images/flags/ru.png" class="img-flag" alt="">
		Russian
	&lt;/a>

	&lt;a href="?lng=ua" class="dropdown-item ukrainian">
		&lt;img src="assets/images/flags/ua.png" class="img-flag" alt="">
		Ukrainian
	&lt;/a>
&lt;/div>
&lt;!-- /dropdown menu -->
</code></pre>
							</div>

							<div class="col-md-6">
								<p class="font-weight-semibold">JS code example:</p>
								<pre class="mb-3"><code class="language-javascript">// Set init options
i18next
.use(i18nextXHRBackend)
.use(i18nextBrowserLanguageDetector)
.init({
    backend: {
        loadPath: '../../../../global_assets/locales/{{lng}}.json'
    },
    fallbackLng: false
},
function (err, t) {
    
    // Initialize library
    jqueryI18next.init(i18next, $);

    // Initialize translation
    $localizationElement.localize();
});
</code></pre>
							</div>
						</div>
					</div>
				</div>
				<!-- /query string parameter -->


				<!-- i18next overview -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">i18next library</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<h6 class="font-weight-semibold">Overview</h6>
						<p class="mb-3"><code>Internationalization</code> and <code>localization</code> are means of adapting web applications to different languages, regional differences and technical requirements of a target market. <code>Internationalization</code> is the process of designing an application so that it can potentially be adapted to various languages and regions. <code>Localization</code> is the process of adapting internationalized application for a specific region or language by adding locale-specific components and translating text. Framework template uses <code>i18next</code> library for internationalization and localization.</p>

						<p>Main i18next benefits:</p>
						<div class="row mb-3">
							<div class="col-md-4">
								<ul class="list">
									<li>Support of variables</li>
									<li>Support of nesting</li>
									<li>Support of context</li>
									<li>Support of multiple plural forms</li>
								</ul>
							</div>

							<div class="col-md-4">
								<ul class="list">
									<li>Gettext support</li>
									<li>Sprintf support</li>
									<li>Detect language</li>
									<li>Graceful translation lookup</li>
								</ul>
							</div>

							<div class="col-md-4">
								<ul class="list">
									<li>Custom post processing</li>
									<li>Post missing resources to server</li>
									<li>Resource caching in browser</li>
									<li>Fetch resources from server</li>
								</ul>
							</div>
						</div>


						<h6 class="font-weight-semibold">Basic usage</h6>
						<p class="mb-3"><strong>i18next</strong> is a full-featured i18n javascript library for translating your web application. By default, Limitless template supports language switching in 2 different ways: language detection according to the user navigator language and fallback languages. All plugin settings also support and use cookies/localStorage by default. For demonstration purposes, sidebar nav examples are translated to <span class="font-weight-semibold">russian</span>, <span class="font-weight-semibold">ukrainian</span> and default <span class="font-weight-semibold">english</span> languages. You can change current language by choosing it in the dropdown menu located in top navbar.</p>

						<p class="font-weight-semibold">Page markup:</p>
						<pre class="mb-3 mb-md-4"><code class="language-markup">&lt;!DOCTYPE html>
&lt;html>
	&lt;head>
		&lt;script src="[PATH]/jquery.min.js">&lt;/script>
		&lt;script src="[PATH]/i18next.min.js">&lt;/script>
		&lt;script src="[PATH]/jquery-i18next.min.js">&lt;/script>
		&lt;script src="[PATH]/i18nextXHRBackend.min.js">&lt;/script>
		&lt;script src="[PATH]/i18nextBrowserLanguageDetector.min.js">&lt;/script>
	&lt;/head>
	&lt;body>
		&lt;ul class="navigation">
			&lt;li>&lt;a href="#" data-i18n="nav.dash.main">&lt;/a>&lt;/li>
			&lt;li>&lt;a href="#" data-i18n="nav.email.main">&lt;/a>&lt;/li>
			&lt;li>&lt;a href="#" data-i18n="nav.snippets.main">&lt;/a>&lt;/li>
		&lt;/ul>
	&lt;/body>
&lt;/html></code></pre>

						
						<div class="row">
							<div class="col-md-6">
								<p class="font-weight-semibold">Loaded resource file (assets/locales/*.json):</p>
								<pre class="mb-3"><code class="language-javascript">{
	"app": {
		"name": "Limitless template"
	},
	"nav": {
		"home": "Home page",
	    "dash": {
	        "main": "Dashboards",
	        "templates": "Layout templates"
	    },
	    "email": {
	        "main": "Email templates",
	        "versions": "Versions"
	    },
	    "snippets": {
	        "main": "Snippets"
	    }
	}
}</code></pre>
							</div>

							<div class="col-md-6">
								<p class="font-weight-semibold">Javascript code:</p>
								<pre class="mb-3 mb-md-4"><code class="language-javascript">// Initialize i18next
i18next.init({
    // Options
},
function (err, t) {
    // Initialize
});

// Change language on button click
$(englishLangClass).on('click', function () {

    // Change language
    i18next.changeLanguage('en');

    // When changed, run translation again
    i18next.on('languageChanged', function() {
        $localizationElement.localize();
    });
});
</code></pre>
							</div>
						</div>


						<h6 class="font-weight-semibold">Set language on init and after init</h6>
						<p class="mb-3">The plugin allows you to set specified language <code>on init</code> and <code>after init</code>. If language is set on init, resources will be resolved in this order: 1) try <span class="font-weight-semibold">languageCode</span> plus <span class="font-weight-semibold">countryCode</span>, eg. <code>'en-US'</code>; 2) alternative look it up in <span class="font-weight-semibold">languageCode</span> only, eg. <code>'en'</code>; 3) finally look it up in definded fallback language, default: <code>'dev'</code>. If language is not set explicitly, i18next tries to detect the user language by: 1) querystring parameter <code>?lng=en</code>; 2) localStorage; 3) cookie; 4) language set in navigator.</p>

						<div class="row">
							<div class="col-md-6">
								<p class="font-weight-semibold">On init example:</p>
<pre class="mb-3"><code class="language-javascript">// Initialize
i18next
.use(i18nextXHRBackend)
.use(i18nextBrowserLanguageDetector)
.init({
	lng: 'en',
    backend: {
        loadPath: '../../../../global_assets/locales/{{lng}}.json'
    },
    debug: true,
    fallbackLng: false
},
function (err, t) {
    
    // Initialize library
    jqueryI18next.init(i18next, $);

    // Initialize translation
    $localizationElement.localize();
});
</code></pre>
							</div>

							<div class="col-md-6">
								<p class="font-weight-semibold">After init example:</p>
<pre class="mb-3"><code class="language-javascript">// Initialize
i18next
.use(i18nextXHRBackend)
.use(i18nextBrowserLanguageDetector)
.init({
    debug: true
},
function (err, t) {
    
    // Initialize library
    jqueryI18next.init(i18next, $);

    // Initialize translation
    $localizationElement.localize();
});

// Extend existing translations
i18next.addResourceBundle('en', 'translations', {
	key: 'value',
}, true, true);
</code></pre>
							</div>
						</div>
					</div>
				</div>
				<!-- /i18next overview -->


				<!-- i18next options -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Library options</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						The default export of the i18next module is an i18next instance ready to be initialized by calling <code>init</code>. You can create additional instances using the <code>createInstance</code> function. The library supports 30+ default options applicable for the default usage only, as well as various options for all integrations and plugins/extensions. Table below demonstrates the list of default i18Next options with default values and descriptions.
					</div>

					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Option</th>
									<th>Default</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th colspan="3" class="table-active">Logging</th>
								</tr>
								<tr>
									<td>debug</td>
									<td><code>false</code></td>
									<td>logs info level to console output. Helps finding issues with loading not working.</td>
								</tr>
								<tr>
									<th colspan="3" class="table-active">Languages, namespaces, resources</th>
								</tr>
								<tr>
									<td>resources</td>
									<td><code>undefined</code></td>
									<td>resources to initialize with (if not using loading or not appending using addResourceBundle)</td>
								</tr>
								<tr>
									<td>lng</td>
									<td><code>undefined</code></td>
									<td>language to use (overrides language detection)</td>
								</tr>
								<tr>
									<td>fallbackLng</td>
									<td><code>'dev'</code></td>
									<td>language to use if translations in user language are not available</td>
								</tr>
								<tr>
									<td>whitelist</td>
									<td><code>false</code></td>
									<td>array of allowed languages</td>
								</tr>
								<tr>
									<td>nonExplicitWhitelist</td>
									<td><code>false</code></td>
									<td>if true will pass eg. <code>en-US</code> if finding <code>en</code> in whitelist</td>
								</tr>
								<tr>
									<td>load</td>
									<td><code>'all'</code></td>
									<td>language codes to lookup, given set language is 'en-US': <code>'all' --&gt; ['en-US', 'en', 'dev']</code>, <code>'currentOnly' --&gt; 'en-US'</code>, <code>'languageOnly' --&gt; 'en'</code></td>
								</tr>
								<tr>
									<td>preload</td>
									<td><code>false</code></td>
									<td>array of languages to preload. Important on serverside to assert translations are loaded before rendering views.</td>
								</tr>
								<tr>
									<td>lowerCaseLng</td>
									<td><code>false</code></td>
									<td>language will be lowercased eg. <code>en-US</code> --&gt; <code>en-us</code></td>
								</tr>
								<tr>
									<td>ns</td>
									<td><code>'translation'</code></td>
									<td>string or array of namespaces to load</td>
								</tr>
								<tr>
									<td>defaultNS</td>
									<td><code>'translation'</code></td>
									<td>default namespace used if not passed to translation function</td>
								</tr>
								<tr>
									<td>fallbackNS</td>
									<td><code>false</code></td>
									<td>string or array of namespaces to lookup key if not found in given namespace</td>
								</tr>

								<tr>
									<th colspan="3" class="table-active">Missing keys</th>
								</tr>
								<tr>
									<td>saveMissing</td>
									<td><code>false</code></td>
									<td>calls save missing key function on backend if key not found</td>
								</tr>
								<tr>
									<td>updateMissing</td>
									<td><code>false</code></td>
									<td>experimental: enable to update default values using the saveMissing (Works only if defaultValue different from translated value. Only useful on initial development or when keeping code as source of truth not changing values outside of code. Only supported if backend supports it already)</td>
								</tr>
								<tr>
									<td>saveMissingTo</td>
									<td><code>'fallback'</code></td>
									<td>'current' or 'all'</td>
								</tr>
								<tr>
									<td>saveMissingPlurals</td>
									<td><code>true</code></td>
									<td>will save all plural forms instead of only singular if t was called for plurals</td>
								</tr>
								<tr>
									<td>missingKeyHandler</td>
									<td><code>false</code></td>
									<td><code>function(lng, ns, key, fallbackValue) { }</code> used for custom  missing key handling (needs saveMissing set to true!)</td>
								</tr>
								<tr>
									<td>parseMissingKeyHandler</td>
									<td><code>noop</code></td>
									<td>function(key) { // return value to display }</td>
								</tr>
								<tr>
									<td>appendNamespaceToMissingKey</td>
									<td><code>false</code></td>
									<td>appends namespace to missing key</td>
								</tr>
								<tr>
									<th colspan="3" class="table-active">Translation defaults</th>
								</tr>
								<tr>
									<td>simplifyPluralSuffix</td>
									<td><code>true</code></td>
									<td>will use 'plural' as suffix for languages only having 1 plural form, setting it to false will suffix all with numbers</td>
								</tr>
								<tr>
									<td>postProcess</td>
									<td><code>false</code></td>
									<td>string or array of postProcessors to apply per default</td>
								</tr>
								<tr>
									<td>returnNull</td>
									<td><code>true</code></td>
									<td>allows null values as valid translation</td>
								</tr>
								<tr>
									<td>returnEmptyString</td>
									<td><code>true</code></td>
									<td>allows empty string as valid translation</td>
								</tr>
								<tr>
									<td>returnObjects</td>
									<td><code>false</code></td>
									<td>allows objects as valid translation result</td>
								</tr>
								<tr>
									<td>returnedObjectHandler</td>
									<td><code>noop</code></td>
									<td><code>function(key, value, options) {}</code> gets called if object was passed in as key but returnObjects was set to false</td>
								</tr>
								<tr>
									<td>joinArrays</td>
									<td><code>false</code></td>
									<td>char, eg. '\n' that arrays will be joined by</td>
								</tr>
								<tr>
									<td>overloadTranslationOptionHandler</td>
									<td><code>function(args) { return { defaultValue: args[1] }; };</code></td>
									<td>default: sets defaultValue</td>
								</tr>
								<tr>
									<td>interpolation</td>
									<td><code>{...}</code></td>
									<td>see interpolation </td>
								</tr>
								<tr>
									<th colspan="3" class="table-active">Plugin options</th>
								</tr>
								<tr>
									<td>detection</td>
									<td><code>undefined</code></td>
									<td>options for language detection - check documentation of plugin</td>
								</tr>
								<tr>
									<td>backend</td>
									<td><code>undefined</code></td>
									<td>options for backend - check documentation of plugin</td>
								</tr>
								<tr>
									<td>cache</td>
									<td><code>undefined</code></td>
									<td>options for cache layer - check documentation of plugin</td>
								</tr>
								<tr>
									<th colspan="3" class="table-active">Misc</th>
								</tr>
								<tr>
									<td>initImmediate</td>
									<td><code>true</code></td>
									<td>triggers resource loading in init function inside a setTimeout (default async behaviour). Set it to false if your backend loads resources sync - that way calling i18next.t after init is possible without relaying on the init callback.</td>
								</tr>
								<tr>
									<td>keySeparator</td>
									<td><code>'.'</code></td>
									<td>char to separate keys</td>
								</tr>
								<tr>
									<td>nsSeparator</td>
									<td><code>':'</code></td>
									<td>char to split namespace from key</td>
								</tr>
								<tr>
									<td>pluralSeparator</td>
									<td><code>'_'</code></td>
									<td>char to split plural from key</td>
								</tr>
								<tr>
									<td>contextSeparator</td>
									<td><code>'_'</code></td>
									<td>char to split context from key</td>
								</tr>
								<tr>
									<td>appendNamespaceToCIMode</td>
									<td><code>false</code></td>
									<td>prefixes the namespace to the returned key when using <code>cimode</code></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- /i18next options -->

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
