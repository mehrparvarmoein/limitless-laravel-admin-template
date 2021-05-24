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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Content</span> - Text Styling</h4>
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
							<a href="content_text_styling" class="breadcrumb-item">Content</a>
							<span class="breadcrumb-item active">Text styling</span>
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

				<!-- Text color options -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Contextual text colors</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						Convey meaning through color with a handful of emphasis utility classes. These may also be applied to links and will darken on hover just like our default link styles. Contextual text classes also work well on anchors with the provided hover and focus states. <strong>Note that the <code>.text-white</code> and <code>.text-muted</code> class has no link styling</strong>. You can also easily set the background of an element to any contextual class.
					</div>

					<div class="table-responsive">
						<table class="table table-lg">
							<thead>
								<tr>
									<th style="width: 20%;">Text</th>
									<th style="width: 20%;">Link</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><span class="text-muted">Muted text color</span></td>
									<td><a href="#" class="text-muted">Muted link color</a></td>
									<td>For muted inline text and text link color use <code>.text-muted</code> class added to the link or text container</td>
								</tr>
								<tr>
									<td><span class="text-secondary">Secondary text color</span></td>
									<td><a href="#" class="text-secondary">Secondary link color</a></td>
									<td>For secondary inline text and text link color use <code>.text-secondary</code> class added to the link or text container</td>
								</tr>
								<tr>
									<td><span class="text-dark">Dark text color</span></td>
									<td><a href="#" class="text-dark">Dark link color</a></td>
									<td>For dark inline text and text link color use <code>.text-dark</code> class added to the link or text container</td>
								</tr>
								<tr>
									<td><span class="text-default">Default text color</span></td>
									<td><a href="#" class="text-default">Default link color</a></td>
									<td>For default inline text and text link color use <code>.text-default</code> class added to the link or text container</td>
								</tr>
								<tr>
									<td><span class="text-primary">Primary text color</span></td>
									<td><a href="#" class="text-primary">Primary link color</a></td>
									<td>For primary inline text and text link color use <code>.text-primary</code> class added to the link or text container</td>
								</tr>
								<tr>
									<td><span class="text-danger">Danger text color</span></td>
									<td><a href="#" class="text-danger">Danger link color</a></td>
									<td>For danger inline text and text link color use <code>.text-danger</code> class added to the link or text container</td>
								</tr>
								<tr>
									<td><span class="text-success">Success text color</span></td>
									<td><a href="#" class="text-success">Success link color</a></td>
									<td>For success inline text and text link color use <code>.text-success</code> class added to the link or text container</td>
								</tr>
								<tr>
									<td><span class="text-warning">Warning text color</span></td>
									<td><a href="#" class="text-warning">Warning link color</a></td>
									<td>For warning inline text and text link color use <code>.text-warning</code> class added to the link or text container</td>
								</tr>
								<tr>
									<td><span class="text-info">Info text color</span></td>
									<td><a href="#" class="text-info">Info link color</a></td>
									<td>For info inline text and text link color use <code>.text-info</code> class added to the link or text container</td>
								</tr>
								<tr>
									<td><span class="text-teal">Custom text color</span></td>
									<td><a href="#" class="text-teal">Custom link color</a></td>
									<td>For custom inline text and text link color use <code>.text-*</code> color class added to the link or text container</td>
								</tr>
								<tr>
									<td><span class="bg-dark py-1 px-2 rounded"><span class="text-white">White text color</span></span></td>
									<td><span class="bg-dark py-1 px-2 rounded"><a href="#" class="text-white">White link color</a></span></td>
									<td>For white inline text and text link color use <code>.text-white</code> class added to the link or text container</td>
								</tr>
							</tbody>
						</table>
					</div>
	            </div>
	            <!-- /text color options -->


				<!-- Text options -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Text options</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">Limitless template supports the majority of all possible text styling options - weights, sizes, styles and additional elements such as marks, abbreviations, keyboard inputs, sample and variable inputs etc. All these stylings can be applied any section heading, form components, content and UI elements just by adding proper class to the element. Basic text styles are included to BS framework by default, Limitless includes more extended typography.</div>

					<div class="table-responsive">
						<table class="table table-lg">
							<thead>
								<tr>
									<th style="width: 30%;">Example</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-active">
									<th colspan="3">Links</th>
								</tr>
								<tr>
									<td><a href="#">This is a default link</a></td>
									<td>Default style for <code>&lt;a></code> element</td>
								</tr>
								<tr>
									<td><a href="#" class="text-default">This is a text color link</a></td>
									<td>To use a link with default text color link, add <code>.text-default</code> class</td>
								</tr>
								<tr>
									<td><a href="#" class="text-danger">This is a contextual color link</a></td>
									<td>To use a link with contextual color link, add <code>.text-danger</code> or any other contextual class</td>
								</tr>
								<tr>
									<td><a href="#" class="text-purple">This is a custom color link</a></td>
									<td>To use a link with custom color link, add <code>.text-purple</code> or any other text color class</td>
								</tr>

								<tr class="table-active">
									<th colspan="3">Font weight</th>
								</tr>
								<tr>
									<td>This is a <span class="font-weight-thin">thin text</span></td>
									<td>For thin font weight use <code>.font-weight-thin</code> class</td>
								</tr>
								<tr>
									<td>This is a <span class="font-weight-light">light text</span></td>
									<td>For light font weight use <code>.font-weight-light</code> class</td>
								</tr>
								<tr>
									<td>This is a <span class="font-weight-normal">regular text</span></td>
									<td>For forced regular font weight use <code>.font-weight-normal</code> class</td>
								</tr>
								<tr>
									<td>This is a <span class="font-weight-semibold">semibold text</span></td>
									<td>For semibold font weight use <code>.font-weight-semibold</code> class</td>
								</tr>
								<tr>
									<td>This is a <span class="font-weight-bold">bold text</span></td>
									<td>For bold font weight use <code>.font-weight-bold</code> class</td>
								</tr>
								<tr>
									<td>This is a <span class="font-weight-black">black text</span></td>
									<td>For black font weight use <code>.font-weight-black</code> class</td>
								</tr>

								<tr class="table-active">
									<th colspan="3">Font style</th>
								</tr>
								<tr>
									<td>This is an <span class="font-italic">italic text</span></td>
									<td>For italic font style use <code>.font-italic</code> class</td>
								</tr>
								<tr>
									<td>This is an <span class="text-uppercase">uppercase text</span></td>
									<td>For uppercase text transformation use <code>.text-uppercase</code> class</td>
								</tr>
								<tr>
									<td>This is a <span class="text-lowercase">lowercase</span> text</td>
									<td>For lowercase text transformation use <code>.text-lowercase</code> class</td>
								</tr>
								<tr>
									<td>This is a <span class="text-capitalize">capitalized text</span></td>
									<td>For capitalize text transformation use <code>.text-capitalize</code> class</td>
								</tr>
								<tr>
									<td>This is a <del>deleted text</del></td>
									<td>For indicating blocks of text that have been deleted use the <code>&lt;del></code> tag</td>
								</tr>
								<tr>
									<td>This is a <s>strikethrough text</s></td>
									<td>For indicating blocks of text that are no longer relevant use the <code>&lt;s></code> tag</td>
								</tr>
								<tr>
									<td>This is an <u>underlined text</u></td>
									<td>To underline text use the <code>&lt;u></code> tag</td>
								</tr>
								<tr>
									<td>This is a <span class="d-inline-block text-truncate" style="max-width: 100px;">truncated text with an ellipsis</span></td>
									<td>For longer content, you can add a <code>.text-truncate</code> class to truncate the text with an ellipsis</td>
								</tr>

								<tr class="table-active">
									<th colspan="3">Font size</th>
								</tr>
								<tr>
									<td><span class="font-size-lg">This is a larger text size</span></td>
									<td>For larger text size use <code>.font-size-lg</code> class</td>
								</tr>
								<tr>
									<td>This is a default text size</td>
									<td>Default font size is <code>13px</code>, doesn't require any special classes</td>
								</tr>
								<tr>
									<td><span class="font-size-sm">This is a smaller text size</span></td>
									<td>For smaller text size use <code>.font-size-sm</code> class</td>
								</tr>
								<tr>
									<td><span class="font-size-xs">This is a mini text size</span></td>
									<td>For mini text size use <code>.font-size-xs</code> class</td>
								</tr>

								<tr class="table-active">
									<th colspan="3">Text elements</th>
								</tr>
								<tr>
									<td>This is a <mark>highlighted</mark> text</td>
									<td>For text highlighting in another context, use the <code>&lt;mark></code> tag</td>
								</tr>
								<tr>
									<td>This is a <ins>inserted text</ins></td>
									<td>For indicating additions to the document use the <code>&lt;ins></code> tag</td>
								</tr>
								<tr>
									<td>Basic <abbr title="Abbr title" data-popup="tooltip">abbreviation</abbr></td>
									<td>For expanded text on abbr hover, use the <code>&lt;abbr></code> element</td>
								</tr>
								<tr>
									<td><abbr title="Abbr title" data-popup="tooltip" class="initialism">Abbreviation</abbr> with initialism</td>
									<td>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size</td>
								</tr>
								<tr>
									<td>Press <kbd>ctrl + ,</kbd> to edit</td>
									<td>Use the <code>&lt;kbd></code> to indicate input that is typically entered via keyboard</td>
								</tr>
								<tr>
									<td><var>y</var> = <var>m</var><var>x</var> + <var>b</var></td>
									<td>Use the <code>&lt;var></code> to indicate variables</td>
								</tr>
								<tr>
									<td><samp>This is a sample text</samp></td>
									<td>Use the <code>&lt;samp></code> to indicate blocks sample output from a program</td>
								</tr>
								<tr>
									<td><code>Inline code snippet</code></td>
									<td>Wrap inline snippets of code with <code>&lt;code></code></td>
								</tr>
								<tr>
									<td>This is a <sub>sub text</sub></td>
									<td>Use <code>&lt;sub></code> tag to display subscripted text</td>
								</tr>
								<tr>
									<td>This is a <sup>sup text</sup></td>
									<td>Use <code>&lt;sup></code> tag to display superscripted text</td>
								</tr>
								<tr>
									<td><small>Small text</small></td>
									<td>Use <code>&lt;small></code> tag to display smaller text</td>
								</tr>

								<tr class="table-active">
									<th colspan="3">Text alignment</th>
								</tr>
								<tr>
									<td class="text-left">Left aligned text</td>
									<td>For left text alignment, use <code>.text-left</code> alignment class. You can also use viewport classes <code>.text-[sn, md, lg, xl]-left</code> for better alignment control</td>
								</tr>
								<tr>
									<td class="text-center">Centered text</td>
									<td>For centered text, use <code>.text-center</code> alignment class. You can also use viewport classes <code>.text-[sn, md, lg, xl]-center</code> for better alignment control</td>
								</tr>
								<tr>
									<td class="text-right">Right aligned text</td>
									<td>For right text alignment, use <code>.text-right</code> alignment class. You can also use viewport classes <code>.text-[sn, md, lg, xl]-right</code> for better alignment control</td>
								</tr>
								<tr>
									<td class="text-justify">Justified text</td>
									<td>For justified text, use <code>.text-justify</code> alignment class</td>
								</tr>
								<tr>
									<td class="text-nowrap">No wrap text</td>
									<td>For no wrap text, use <code>.text-nowrap</code> alignment class</td>
								</tr>
							</tbody>
						</table>
					</div>
	            </div>
				<!-- /text options -->

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
