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
	<script src="../../../../global_assets/js/plugins/velocity/velocity.ui.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/animations_velocity_examples.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Velocity</span> - Advanced Examples</h4>
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
							<a href="animations_velocity_examples" class="breadcrumb-item">Velocity</a>
							<span class="breadcrumb-item active">Advanced examples</span>
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

				<!-- Properties -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Properties map</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Velocity auto-prefixes properties (e.g. transform becomes webkit-transform on WebKit browsers); do not prefix properties yourself. Velocity animates one numeric value per property. Hence, you can pass in: <code>{ padding: 1 }</code> or <code>{ paddingLeft: 1, paddingRight: 1 }</code>. But you cannot pass in <code>{ padding: "1 1 1 1" }</code> because you're providing multiple numeric values.<br>
						Velocity supports the <code>px</code>, <code>em</code>, <code>rem</code>, <code>%</code>, <code>deg</code>, and <code>vw/vh</code> units. If you do not provide a unit, an appropriate one is automatically assigned — usually <code>px</code>, but <code>deg</code> in the case of rotateZ for example. Velocity supports four value operators: <code>+</code>, <code>-</code>, <code>*</code>, and <code>/</code>. You may suffix an equals sign onto any one of them to perform relative math operations.</p>

						<p><a href="#" class="velocity-properties font-weight-semibold"><i class="icon-play3 mr-2"></i> Run animation &rarr;</a></p>
						<div class="row">
							<div class="col-md-4">
								<div class="card border-blue">
									<div class="card-header bg-blue header-elements-inline">
										<h6 class="card-title">Card 1</h6>
										<div class="header-elements">
											<div class="list-icons">
						                		<a class="list-icons-item" data-action="collapse"></a>
						                		<a class="list-icons-item" data-action="reload"></a>
						                		<a class="list-icons-item" data-action="remove"></a>
						                	</div>
					                	</div>
									</div>

									<div class="card-body">
										Card 1 content
				                    </div>
					            </div>
				            </div>

							<div class="col-md-4">
								<div class="card border-blue">
									<div class="card-header bg-blue header-elements-inline">
										<h6 class="card-title">Card 2</h6>
										<div class="header-elements">
											<div class="list-icons">
						                		<a class="list-icons-item" data-action="collapse"></a>
						                		<a class="list-icons-item" data-action="reload"></a>
						                		<a class="list-icons-item" data-action="remove"></a>
						                	</div>
					                	</div>
									</div>

									<div class="card-body">
										Card 2 content
				                    </div>
					            </div>
				            </div>

							<div class="col-md-4">
								<div class="card border-blue">
									<div class="card-header bg-blue header-elements-inline">
										<h6 class="card-title">Card 2</h6>
										<div class="header-elements">
											<div class="list-icons">
						                		<a class="list-icons-item" data-action="collapse"></a>
						                		<a class="list-icons-item" data-action="reload"></a>
						                		<a class="list-icons-item" data-action="remove"></a>
						                	</div>
					                	</div>
									</div>

									<div class="card-body">
										Card 2 content
				                    </div>
					            </div>
				            </div>
			            </div>

						<p class="font-weight-semibold">Example code:</p>			            
<pre class="language-javascript"><code>// Properties animation
$element.velocity({
	marginLeft: 20,
	marginRight: 20,
	opacity: 0.5
}).velocity('reverse', {
	delay: 1000,
	complete: function() {
		$(this).removeAttr('style');
	}
});</code></pre>
					</div>
				</div>
				<!-- /properties -->


				<!-- Chained animation -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Chained animation</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">When multiple Velocity calls are stacked onto an element (or a series of elements), they automatically queue onto one another — with each one firing once its prior animation has completed. Current example demonstrates animation of left margin; then, when finished, animate the right margin property, then animate opacity property. To animate an element back to the values prior to its last Velocity call, pass in <code>reverse</code> as Velocity's first argument.</p>

						<p><a href="#" class="velocity-chained font-weight-semibold"><i class="icon-play3 mr-2"></i> Run animation &rarr;</a></p>
						<div class="row">
							<div class="col-md-4">
								<div class="card border-blue">
									<div class="card-header bg-blue header-elements-inline">
										<h6 class="card-title">Card 1</h6>
										<div class="header-elements">
											<div class="list-icons">
						                		<a class="list-icons-item" data-action="collapse"></a>
						                		<a class="list-icons-item" data-action="reload"></a>
						                		<a class="list-icons-item" data-action="remove"></a>
						                	</div>
					                	</div>
									</div>

									<div class="card-body">
										Card 1 content
				                    </div>
					            </div>
				            </div>

							<div class="col-md-4">
								<div class="card border-blue">
									<div class="card-header bg-blue header-elements-inline">
										<h6 class="card-title">Card 2</h6>
										<div class="header-elements">
											<div class="list-icons">
						                		<a class="list-icons-item" data-action="collapse"></a>
						                		<a class="list-icons-item" data-action="reload"></a>
						                		<a class="list-icons-item" data-action="remove"></a>
						                	</div>
					                	</div>
									</div>

									<div class="card-body">
										Card 2 content
				                    </div>
					            </div>
				            </div>

							<div class="col-md-4">
								<div class="card border-blue">
									<div class="card-header bg-blue header-elements-inline">
										<h6 class="card-title">Card 2</h6>
										<div class="header-elements">
											<div class="list-icons">
						                		<a class="list-icons-item" data-action="collapse"></a>
						                		<a class="list-icons-item" data-action="reload"></a>
						                		<a class="list-icons-item" data-action="remove"></a>
						                	</div>
					                	</div>
									</div>

									<div class="card-body">
										Card 2 content
				                    </div>
					            </div>
				            </div>
			            </div>

						<p class="font-weight-semibold">Example code:</p>
<pre class="language-javascript"><code>// Chained animation
$element.velocity({
	marginLeft: 20
}).velocity({
	marginRight: 20 
}).velocity({
	opacity: 0.5
}).velocity('reverse', {
	delay: 1000,
	complete: function() {
		$(this).removeAttr('style');
	}
});</code></pre>
					</div>
				</div>
				<!-- /chained animation -->


				<!-- Effects options -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Effect options</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">

						<!-- Stagger -->
						<div class="mb-4">
							<h6 class="font-weight-semibold">Stagger effect</h6>
							<p class="mb-3">There are three options that work only with UI pack effects, but not with traditional Velocity calls: <code>stagger</code>, <code>drag</code> and <code>backwards</code>. They are passed into a UI pack call as standard Velocity call options.
							Specify the <code>stagger</code> option in <code>ms</code> to successively delay the animation of each element in a set by the targeted amount. You can also pass in a value function to define your own stagger falloffs.</p>

							<p><a href="#" class="velocity-stagger font-weight-semibold"><i class="icon-play3 mr-2"></i> Run stagger example &rarr;</a></p>
							<div class="row">
								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 1</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 1 content
					                    </div>
						            </div>
					            </div>

								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 2</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 2 content
					                    </div>
						            </div>
					            </div>

								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 2</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 3 content
					                    </div>
						            </div>
					            </div>
				            </div>

				            <p class="font-weight-semibold">Example code:</p>
<pre class="language-javascript"><code>// Stagger option
$element.velocity('transition.slideUpIn', {
	stagger: 500
});</code></pre>
						</div>
						<!-- /stagger -->


						<!-- Drag -->
						<div class="mb-4">
							<h6 class="font-weight-semibold">Drag effect</h6>
							<p class="mb-3">Set the <code>drag</code> option to <code>true</code> to successively increase the animation duration of each element in a set. The last element will animate with a duration equal to the sequence's original value, whereas the elements before the last will have their duration values gradually approach the original value. The end result is a cross-element easing effect.</p>

							<p><a href="#" class="velocity-drag font-weight-semibold"><i class="icon-play3 mr-2"></i> Run drag example &rarr;</a></p>
							<div class="row">
								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 1</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 1 content
					                    </div>
						            </div>
					            </div>

								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 2</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 2 content
					                    </div>
						            </div>
					            </div>

								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 2</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 2 content
					                    </div>
						            </div>
					            </div>
				            </div>

				            <p class="font-weight-semibold">Example code:</p>
<pre class="language-javascript"><code>// Drag option
$element.velocity('transition.slideUpBigIn', {
	drag: true
});</code></pre>
						</div>
						<!-- /drag -->


						<!-- Backwards -->
						<div>
							<h6 class="font-weight-semibold">Backwards effect</h6>
							<p class="mb-3">Set the <code>backwards</code> option to <code>true</code> to animate starting with the last element in a set. This option is ideal for use with an effect that transitions elements out of view since the backwards option mirrors the behavior of elements transitioning into view (which, by default, animate in the forwards direction — from the first element to the last).</p>

							<p><a href="#" class="velocity-backwards font-weight-semibold"><i class="icon-play3 mr-2"></i> Run backwards example &rarr;</a></p>
							<div class="row">
								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 1</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 1 content
					                    </div>
						            </div>
					            </div>

								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 2</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 2 content
					                    </div>
						            </div>
					            </div>

								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 2</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 2 content
					                    </div>
						            </div>
					            </div>
				            </div>

				            <p class="font-weight-semibold">Example code:</p>
<pre class="language-javascript"><code>// Drag option
$element.velocity('transition.slideDownOut', {
	stagger: 400,
	backwards: true
});</code></pre>
						</div>
						<!-- /backwards -->

					</div>
				</div>
				<!-- /effects options -->


				<!-- Callbacks -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Animation callbacks</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">

						<!-- Begin callback -->
						<div class="mb-4">
							<h6 class="font-weight-semibold">Begin callback</h6>
							<p class="mb-3">Pass <code>begin</code> a function to be triggered <span class="font-weight-semibold">prior to the start</span> of the animation. As with <code>complete</code>, the begin callback is executed <code>once</code> per call, even if multiple elements are being animated. Further, if a call is looped, the begin callback only fires once — at the beginning of the first loop alternation.<br>
							The callback is passed the entire raw DOM (not jQuery) element array as both its context and its first argument. To access these elements individually, you must iterate over the array using jQuery's $<code>.each()</code> or JavaScript's native <code>.forEach()</code>.</p>

							<p><a href="#" class="velocity-begin font-weight-semibold"><i class="icon-play3 mr-2"></i> Begin callback example &rarr;</a></p>
							<div class="row">
								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 1</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 1 content
					                    </div>
						            </div>
					            </div>

								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 2</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 2 content
					                    </div>
						            </div>
					            </div>

								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 2</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 2 content
					                    </div>
						            </div>
					            </div>
				            </div>

				            <p class="font-weight-semibold">Example code:</p>
<pre class="language-javascript" data-line="7-9"><code>// Begin callback
$element.velocity({
	marginLeft: 20,
	marginRight: 20,
	opacity: 0.5
}, {
	begin: function() {
		alert('Begin callback example');
	}
});</code></pre>
						</div>
						<!-- /begin callback -->

						<!-- Complete callback -->
						<div class="mb-4">
							<h6 class="font-weight-semibold">Complete callback</h6>
							<p class="mb-3"><code>Complete</code> is the converse of the <code>begin</code> option. Pass the complete option a function to be triggered once the animation has finished. The function is executed <code>once</code> per call, even if multiple elements are being animated at once. Further, if a call is looped, the complete callback only fires once — at the end of the last loop alternation.<br>
							The callback is passed the entire raw DOM (not jQuery) element array as both its context and its first argument. To access these elements individually, you must iterate over the array using jQuery's <code>$.each()</code> or JavaScript's native <code>.forEach()</code>.</p>

							<p><a href="#" class="velocity-complete font-weight-semibold"><i class="icon-play3 mr-2"></i> Complete callback example &rarr;</a></p>
							<div class="row">
								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 1</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 1 content
					                    </div>
						            </div>
					            </div>

								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 2</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 2 content
					                    </div>
						            </div>
					            </div>

								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 2</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 2 content
					                    </div>
						            </div>
					            </div>
				            </div>

				            <p class="font-weight-semibold">Example code:</p>
<pre class="language-javascript" data-line="7-9"><code>// Complete callback
$element.velocity({
	marginLeft: 20,
	marginRight: 20,
	opacity: 0.5
}, {
	complete: function() {
		alert('Complete callback example');
	}
});</code></pre>
						</div>
						<!-- /complete callback -->

						<!-- Progress callback -->
						<div>
							<h6 class="font-weight-semibold">Progress callback</h6>
							<p class="mb-3">Pass the <code>progress</code> option a callback function to be repeatedly triggered througout the duration of the animation. The callback is passed the entire raw DOM (not jQuery) element array as both its context and its first argument. To access these elements individually, you must iterate over the array using jQuery's <code>$.each()</code> or JavaScript's native <code>.forEach()</code>. Further, it's passed <code>percentComplete</code> (decimal value), <code>timeRemaining</code> (in ms), and <code>timeStart</code> (Unix time).</p>

							<p><a href="#" class="velocity-progress font-weight-semibold"><i class="icon-play3 mr-2"></i> Complete callback example &rarr;</a> &nbsp; <span class="text-muted" id="percentComplete"></span> <span class="text-muted" id="timeRemaining"></span></p>
							<div class="row">
								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 1</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 1 content
					                    </div>
						            </div>
					            </div>

								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 2</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 2 content
					                    </div>
						            </div>
					            </div>

								<div class="col-md-4">
									<div class="card border-blue">
										<div class="card-header bg-blue header-elements-inline">
											<h6 class="card-title">Card 2</h6>
											<div class="header-elements">
												<div class="list-icons">
							                		<a class="list-icons-item" data-action="collapse"></a>
							                		<a class="list-icons-item" data-action="reload"></a>
							                		<a class="list-icons-item" data-action="remove"></a>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											Card 2 content
					                    </div>
						            </div>
					            </div>
				            </div>

				            <p class="font-weight-semibold">Example code:</p>
<pre class="language-javascript" data-line="11-14"><code>// Cache our jQuery objects
var $percentComplete = $("#percentComplete"),
$timeRemaining = $("#timeRemaining");

// Use the progress callback
$element.velocity({
	marginLeft: 20,
	marginRight: 20,
	opacity: 0.5
}, {
	progress: function(elements, percentComplete, timeRemaining, timeStart) {
		$percentComplete(Math.round(percentComplete * 100) + "% complete.");
		$timeRemaining(timeRemaining + "ms remaining.");
	}
});</code></pre>
						</div>
						<!-- /progress callback -->

					</div>
				</div>
				<!-- /callbacks -->

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
