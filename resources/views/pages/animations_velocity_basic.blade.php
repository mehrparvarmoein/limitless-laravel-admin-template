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
	<script src="../../../../global_assets/js/plugins/velocity/velocity.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/animations_velocity_basic.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Velocity</span> - Basic Animations</h4>
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
							<a href="animations_velocity_basic" class="breadcrumb-item">Velocity</a>
							<span class="breadcrumb-item active">Basic animations</span>
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

				<!-- Plugin overview -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Velocity animations</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<div class="mb-4">
							<h6 class="font-weight-semibold">Velocity overview</h6>
							Velocity is an animation engine that re-implements jQuery's <code>$.animate()</code> for significantly greater performance (making Velocity also faster than CSS animation libraries) while including several new features. In just 9Kb zipped, Velocity includes all of <code>$.animate()</code>'s features while packing in color animation, transforms, loops, easings, SVG support, and scrolling. Velocity is the best of jQuery, jQuery UI, and CSS transitions combined.
						</div>

						<div class="mb-4">
							<h6 class="font-weight-semibold">Compatibility and browser support</h6>
							<p>Velocity works everywhere — back to IE8 and Android 2.3. Under the hood, Velocity uses jQuery's <code>$.queue()</code>, and thus interoperates seamlessly with jQuery's <code>$.animate()</code>, <code>$.fade()</code> and <code>$.delay()</code>. Since Velocity's syntax is identical to <code>$.animate()</code>, your code doesn't need to change. <br>
							<strong>Browser support</strong>: Back to IE8 and Android 2.3. Below IE8, Velocity avoids loading, and aliases itself to jQuery's <code>$.animate()</code>. Also remember that 3D transforms are not supported below IE 10 and below Android 3.0, and that even 2D transforms aren't supported below IE 9. Also, remember that a perspective must be set on a parent element for 3D transforms to take effect.</p>
						</div>

						<h6 class="font-weight-semibold">Velocity options</h6>
						<p class="mb-3">JavaScript and jQuery are falsely conflated. JavaScript animation, which Velocity uses, is fast; it's jQuery that's slow. Although Velocity works alongside jQuery, it uses its own animation stack that delivers its performance through two underlying principles: 1) synchronize the DOM → tween stack to minimize layout thrashing, and 2) cache values to minimize DOM querying. Below is a set of basic Velocity options:</p>

						<pre class="language-javascript"><code>// Animation basics
$element.velocity({ 
	width: "500px",
	property2: value2
	}, {
	// Velocity's default options
	duration: 400,
	easing: "swing",
	queue: "",
	begin: undefined,
	progress: undefined,
	complete: undefined,
	display: undefined,
	visibility: undefined,
	loop: false,
	delay: false,
	mobileHA: true
});</code></pre>

					</div>
				</div>
				<!-- /plugin overview -->


				<!-- Border animation -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Border animation</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Velocity allows you to animate border CSS properties such as border width, border color and border radius: the border-width CSS property sets the width of the border of a box; the border-color CSS property is a shorthand for setting the color of the four sides of an element's border; the border-radius CSS property allows Web authors to define how rounded border corners are. All these properties can be animated together or separately for all 4 sides (corners).</p>
						
						<div class="mb-2">
							<p class="font-weight-semibold">General border animation</p>
							<div class="row">
								<div class="col-md-6">
									<div class="demo-velocity-box">
										<span>Border width</span>
					                	<a href="#" class="text-default velocity-property" data-property="borderWidth" data-value="3"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-6">
									<div class="demo-velocity-box">
										<span>Border radius</span>
					                	<a href="#" class="text-default velocity-property" data-property="borderRadius" data-value="100"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div>
							<p class="font-weight-semibold">Detailed border animation</p>
							<div class="row">
								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Left border width</span>
					                	<a href="#" class="text-default velocity-property" data-property="borderLeftWidth" data-value="10"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Top border width</span>
					                	<a href="#" class="text-default velocity-property" data-property="borderTopWidth" data-value="10"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Right border width</span>
					                	<a href="#" class="text-default velocity-property" data-property="borderRightWidth" data-value="10"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Bottom border width</span>
					                	<a href="#" class="text-default velocity-property" data-property="borderBottomWidth" data-value="10"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /border animation -->


				<!-- Padding animation -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Padding animation</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The padding CSS property sets the required padding space on all sides of an element. The padding area is the space between the content of the element and its border. The padding property is a shorthand to avoid setting each side separately. Velocity animates one numeric value per property. Hence, you can pass in: { padding: 1 } or { paddingLeft: 1, paddingRight: 1 }. But you cannot pass in { padding: "1 1 1 1" } because you're providing multiple numeric values.</p>

						<div class="mb-2">
							<p class="font-weight-semibold">General padding animation</p>
							<div class="row">
								<div class="col-md-6">
									<div class="demo-velocity-box">
										<span>Box padding</span>
					                	<a href="#" class="text-default velocity-property" data-property="padding" data-value="20"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-6">
									<div class="demo-velocity-box">
										<span>2 paddings</span>
					                	<a href="#" class="text-default velocity-property" data-property="paddingLeft" data-value="30"data-property2="paddingRight" data-value2="30"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div>
							<p class="font-weight-semibold">Detailed padding animation</p>
							<div class="row">
								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Left padding</span>
					                	<a href="#" class="text-default velocity-property" data-property="paddingLeft" data-value="20"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Top padding</span>
					                	<a href="#" class="text-default velocity-property" data-property="paddingTop" data-value="20"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Right padding</span>
					                	<a href="#" class="text-default velocity-property" data-property="paddingRight" data-value="20"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Bottom padding</span>
					                	<a href="#" class="text-default velocity-property" data-property="paddingBottom" data-value="20"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /padding animation -->


				<!-- Margin animation -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Margin animation</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The margin CSS property sets the margin for all four sides. It is a shorthand to avoid setting each side separately with the other margin properties: margin-top, margin-right, margin-bottom and margin-left. Negative values are also allowed. Velocity animates one numeric value per property. Hence, you can pass in: { margin: 1 } or { marginLeft: 1, marginRight: 1 }. But you cannot pass in { margin: "1 1 1 1" } because you're providing multiple numeric values.</p>

						<div class="mb-2">
							<p class="font-weight-semibold">General margin animation</p>
							<div class="row">
								<div class="col-md-6">
									<div class="demo-velocity-box">
										<span>Box margin</span>
					                	<a href="#" class="text-default velocity-property" data-property="margin" data-value="20"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-6">
									<div class="demo-velocity-box">
										<span>2 margins</span>
					                	<a href="#" class="text-default velocity-property" data-property="marginLeft" data-value="30" data-property2="marginRight" data-value2="30"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div>
							<p class="font-weight-semibold">Detailed margin animation</p>
							<div class="row">
								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Left margin</span>
					                	<a href="#" class="text-default velocity-property" data-property="marginLeft" data-value="20"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Top margin</span>
					                	<a href="#" class="text-default velocity-property" data-property="marginTop" data-value="20"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Right margin</span>
					                	<a href="#" class="text-default velocity-property" data-property="marginRight" data-value="20"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Bottom margin</span>
					                	<a href="#" class="text-default velocity-property" data-property="marginBottom" data-value="30"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /margin animation -->


				<!-- Edge animation -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Edge animation</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Velocity allows you to animate side edges: left, right, top and bottom. You can specify only 1 or 2 properties (1 vertical and 1 horizontal). When both the right CSS property and the left CSS property are defined, the position of the element is overspecified, the left value has precedence. When both top and bottom are specified, and height is unspecified or either auto or 100%, both the top and bottom distances are respected.</p>

						<div class="mb-2">
							<p class="font-weight-semibold">General edge animation</p>
							<div class="row">
								<div class="col-md-6">
									<div class="demo-velocity-box">
										<span>Left and top</span>
					                	<a href="#" class="text-default velocity-property" data-property="left" data-value="10" data-property2="top" data-value2="10"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-6">
									<div class="demo-velocity-box">
										<span>Right and bottom</span>
					                	<a href="#" class="text-default velocity-property" data-property="right" data-value="10" data-property2="bottom" data-value2="10"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div>
							<p class="font-weight-semibold">Detailed edge animation</p>
							<div class="row">
								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Left edge</span>
					                	<a href="#" class="text-default velocity-property" data-property="left" data-value="20"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Top edge</span>
					                	<a href="#" class="text-default velocity-property" data-property="top" data-value="20"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Right edge</span>
					                	<a href="#" class="text-default velocity-property" data-property="right" data-value="20"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Bottom edge</span>
					                	<a href="#" class="text-default velocity-property" data-property="bottom" data-value="20"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /edge animation -->


				<!-- Text animation -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Text animation</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Font size, line height, letter spacing and word spacing are also animatable: the font-size property specifies the size of the font – specifically the desired height of glyphs from the font; on block level elements, the line-height property specifies the minimal height of line boxes within the element; the letter-spacing property specifies spacing behavior between text characters; the word-spacing property specifies spacing behavior between tags and words.</p>

						<p class="font-weight-semibold">General text animation</p>
						<div class="row">
							<div class="col-md-3">
								<div class="demo-velocity-box">
									<span>Font size</span>
				                	<a href="#" class="text-default velocity-property" data-property="fontSize" data-value="15"><i class="icon-play3"></i></a>
								</div>
							</div>

							<div class="col-md-3">
								<div class="demo-velocity-box">
									<span>Line height</span>
				                	<a href="#" class="text-default velocity-property" data-property="lineHeight" data-value="30"><i class="icon-play3"></i></a>
								</div>
							</div>

							<div class="col-md-3">
								<div class="demo-velocity-box">
									<span>Letter spacing</span>
				                	<a href="#" class="text-default velocity-property" data-property="letterSpacing" data-value="1"><i class="icon-play3"></i></a>
								</div>
							</div>

							<div class="col-md-3">
								<div class="demo-velocity-box">
									<span>Word spacing</span>
				                	<a href="#" class="text-default velocity-property" data-property="wordSpacing" data-value="10"><i class="icon-play3"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /text animation -->


				<!-- Color animation -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Color animation</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Velocity supports color animation for the following properties: color, backgroundColor, borderColor, and outlineColor. You can pass a color property a hex string (rgb, hsla strings, and color keywords are not supported), or you can animate the individual RGB component values of a color property: The color components are Red, Green, Blue, and Alpha, and they range from from 0 to 255. The fourth component, Alpha, ranges from 0 to 1.</p>

						<div class="mb-2">
							<p class="font-weight-semibold">Color animation</p>
							<div class="row">
								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Text color</span>
					                	<a href="#" class="text-default velocity-property" data-property="color" data-value="#E91E63"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Background color</span>
					                	<a href="#" class="text-default velocity-property" data-property="backgroundColor" data-value="#E8F5E9" data-property2="borderColor" data-value2="#2E7D32"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Border color</span>
					                	<a href="#" class="text-default velocity-property" data-property="borderColor" data-value="#E91E63"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box" style="outline: 2px solid #fff;">
										<span>Outline color</span>
					                	<a href="#" class="text-default velocity-property" data-property="outlineColor" data-value="#E91E63"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div>
							<p class="font-weight-semibold">Color alpha animation</p>
							<div class="row">
								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Text color alpha</span>
					                	<a href="#" class="text-default velocity-property" data-property="colorAlpha" data-value="0.5"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box bg-blue border-blue">
										<span>Background color alpha</span>
					                	<a href="#" class="text-white velocity-property" data-property="backgroundColorAlpha" data-value="0.5"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Border color alpha</span>
					                	<a href="#" class="text-default velocity-property" data-property="borderColor" data-value="#E91E63" data-property2="borderColorAlpha" data-value2="0.6"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box" style="outline: 2px solid #fff;">
										<span>Outline color alpha</span>
					                	<a href="#" class="text-default velocity-property" data-property="outlineColor" data-value="#E91E63" data-property2="outlineColorAlpha" data-value2="0.6"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /color animation -->


				<!-- Shadow animation -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Shadow animation</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Velocity supports shadow animation for the following properties: textShadow and boxShadow. The text-shadow property adds shadows to text, it accepts a comma-separated list of shadows to be applied to the text and text-decorations of the element. The box-shadow CSS property describes one or more shadow effects as a comma-separated list, it allows casting a drop shadow from the frame of almost any element.</p>

						<div class="mb-2">
							<p class="font-weight-semibold">Text shadow animation</p>
							<div class="row">
								<div class="col-md-4">
									<div class="demo-velocity-box">
										<span>Text shadow X</span>
					                	<a href="#" class="text-default velocity-property" data-property="textShadowX" data-value="35"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-4">
									<div class="demo-velocity-box">
										<span>Text shadow Y</span>
					                	<a href="#" class="text-default velocity-property" data-property="textShadowY" data-value="35"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-4">
									<div class="demo-velocity-box">
										<span>Text shadow blur</span>
					                	<a href="#" class="text-default velocity-property" data-property="textShadowBlur" data-value="15"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div>
							<p class="font-weight-semibold">Box shadow animation</p>
							<div class="row">
								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Box shadow X</span>
					                	<a href="#" class="text-default velocity-property" data-property="boxShadowX" data-value="2"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Box shadow Y</span>
					                	<a href="#" class="text-default velocity-property" data-property="boxShadowY" data-value="2"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Box shadow blur</span>
					                	<a href="#" class="text-default velocity-property" data-property="boxShadowBlur" data-value="5"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-3">
									<div class="demo-velocity-box">
										<span>Box shadow spread</span>
					                	<a href="#" class="text-default velocity-property" data-property="boxShadowSpread" data-value="3"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /shadow animation -->


				<!-- Transform animation -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Transform animation</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">The CSS transform property allows you to perform translation, scaling, and rotation in 2D or 3D space. To achieve parity with CSS, Velocity uses the translateX and translateY property names for transform translations, not X and Y. Since Velocity only animates one numeric value per CSS property, an axis must be declared with a transform property. For example, scale cannot be animated to "1.5, 2", but scaleX() and scaleY() can be simultaneously animated to those values to achieve the same effect.</p>

						<div class="mb-2">
							<p class="font-weight-semibold">Translate animation</p>
							<div class="row">
								<div class="col-md-4">
									<div class="demo-velocity-box">
										<span>Translate X</span>
					                	<a href="#" class="text-default velocity-property" data-property="translateX" data-value="20"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-4">
									<div class="demo-velocity-box">
										<span>Translate Y</span>
					                	<a href="#" class="text-default velocity-property" data-property="translateY" data-value="20"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-4" style="-webkit-perspective: 1000;">
									<div class="demo-velocity-box">
										<span>Translate Z</span>
					                	<a href="#" class="text-default velocity-property" data-property="translateZ" data-value="50"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-2">
							<p class="font-weight-semibold">Scale animation</p>
							<div class="row">
								<div class="col-md-6">
									<div class="demo-velocity-box">
										<span>Scale X</span>
					                	<a href="#" class="text-default velocity-property" data-property="scaleX" data-value="1.1"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-6">
									<div class="demo-velocity-box">
										<span>Scale Y</span>
					                	<a href="#" class="text-default velocity-property" data-property="scaleY" data-value="1.5"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="mb-2">
							<p class="font-weight-semibold">Rotate animation</p>
							<div class="row">
								<div class="col-md-4">
									<div class="demo-velocity-box">
										<span>Rotate X</span>
					                	<a href="#" class="text-default velocity-property" data-property="rotateX" data-value="180deg"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-4">
									<div class="demo-velocity-box">
										<span>Rotate Y</span>
					                	<a href="#" class="text-default velocity-property" data-property="rotateY" data-value="180deg"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-4" style="-webkit-perspective: 1000;">
									<div class="demo-velocity-box">
										<span>Rotate Z</span>
					                	<a href="#" class="text-default velocity-property" data-property="rotateZ" data-value="180deg"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div>
							<p class="font-weight-semibold">Skew animation</p>
							<div class="row">
								<div class="col-md-6">
									<div class="demo-velocity-box">
										<span>Skew X</span>
					                	<a href="#" class="text-default velocity-property" data-property="skewX" data-value="50"><i class="icon-play3"></i></a>
									</div>
								</div>

								<div class="col-md-6">
									<div class="demo-velocity-box">
										<span>Skew Y</span>
					                	<a href="#" class="text-default velocity-property" data-property="skewY" data-value="10"><i class="icon-play3"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /transform animation -->

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
