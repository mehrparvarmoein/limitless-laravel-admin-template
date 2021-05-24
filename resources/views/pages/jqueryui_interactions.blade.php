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
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/touch.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/jqueryui_interactions.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">jQuery UI</span> - Interactions</h4>
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
							<a href="jqueryui_interactions" class="breadcrumb-item">jQuery UI</a>
							<span class="breadcrumb-item active">Interactions</span>
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

				<!-- jQuery UI picker -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Draggable
					</h6>
					<span class="text-muted d-block">Allow elements to be moved using the mouse</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Basic -->
						<div class="card" id="draggable-default-container">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Default functionality</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Enable draggable functionality on any DOM element. Move the draggable object by clicking on it with the mouse and dragging it anywhere within the viewport. Draggable area is limited to this panel using <code>containment</code> option.</p>

								<div class="d-flex justify-content-center flex-column flex-sm-row">
									<div class="jqueryui-demo-element draggable-element text-center mx-auto mx-sm-0 rounded-round">
										<span>Drag</span>
									</div>

									<div class="jqueryui-demo-element draggable-element text-center mx-auto mx-sm-3 my-3 my-sm-0 rounded-round">
										<span>Drag</span>
									</div>

									<div class="jqueryui-demo-element draggable-element text-center mx-auto mx-sm-0 rounded-round">
										<span>Drag</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /basic -->

					</div>

					<div class="col-md-6">

						<!-- Cursor style -->
						<div class="card" id="draggable-cursor-container">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Cursor style</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Position the cursor while dragging the object. By default the cursor appears in the center of the dragged object; use the <code>cursorAt</code> option to specify another location (specify a pixel value from the top, right, bottom, and/or left).</p>

								<div class="d-flex justify-content-center flex-column flex-sm-row">
									<div class="jqueryui-demo-element text-center mx-auto mx-sm-0 rounded-round" id="draggable-cursor-move">
										<span>Move</span>
									</div>

									<div class="jqueryui-demo-element text-center mx-auto mx-sm-3 my-3 my-sm-0 rounded-round" id="draggable-cursor-crosshair">
										<span>Crosshair</span>
									</div>

									<div class="jqueryui-demo-element text-center mx-auto mx-sm-0 rounded-round" id="draggable-cursor-bottom">
										<span>Bottom</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /cursor style -->

					</div>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Constrain movement -->
						<div class="card" id="draggable-containment-container">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Constrain movement</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Constrain the movement of each draggable by defining the boundaries of the draggable area. Set the <code>axis</code> option to limit the draggable's path to the x- or y-axis, or use the <code>containment</code> option to specify another parent.</p>

								<div class="d-flex justify-content-center flex-column flex-sm-row">
									<div class="jqueryui-demo-element text-center mx-auto mx-sm-0 rounded-round" id="draggable-move-both">
										<span>Both</span>
									</div>

									<div class="jqueryui-demo-element text-center mx-auto mx-sm-3 my-3 my-sm-0 rounded-round" id="draggable-move-vertical">
										<span>Vertical</span>
									</div>

									<div class="jqueryui-demo-element text-center mx-auto mx-sm-0 rounded-round" id="draggable-move-horizontal">
										<span>Horizontal</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /constrain movement -->

					</div>

					<div class="col-md-6">

						<!-- Handles -->
						<div class="card" id="draggable-handle-container">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Handles</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">You can use the <code>handle</code> option to specify the jQuery selector of an element used to drag the object or prevent dragging. Use the <code>cancel</code> option to specify a jQuery selector over which to "cancel" draggable functionality.</p>

								<div class="d-flex justify-content-center flex-column flex-sm-row">
									<div class="jqueryui-demo-element text-center mx-auto mx-sm-0 rounded-round" id="draggable-handle-text">
										<span class="cursor-pointer">Text</span>
									</div>

									<div class="jqueryui-demo-element text-center mx-auto mx-sm-3 my-3 my-sm-0 rounded-round" id="draggable-handle-icon">
										<span><i class="icon-pointer handle-icon cursor-pointer"></i></span>
									</div>

									<div class="jqueryui-demo-element cursor-pointer text-center mx-auto mx-sm-0 rounded-round" id="draggable-handle-exception">
										<span class="cursor-default">Exception</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /handles -->

					</div>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Revert position -->
						<div class="card" id="draggable-revert-container">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Revert position</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Return the draggable (or it's helper) to its original location when dragging stops with the boolean <code>revert</code> option. If set to true the element will always revert. Also can be a string (<code>valid</code> or <code>invalid</code>) or a function.</p>

								<div class="d-flex justify-content-center flex-column flex-sm-row">
									<div class="jqueryui-demo-element text-center mx-auto mx-sm-0 rounded-round" id="draggable-revert-element">
										<span>Element</span>
									</div>

									<div class="jqueryui-demo-element text-center mx-auto mx-sm-3 my-3 my-sm-0 rounded-round" id="draggable-revert-clone">
										<span>Clone</span>
									</div>

									<div class="jqueryui-demo-element text-center mx-auto mx-sm-0 rounded-round" id="draggable-revert-speed">
										<span>Speed</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /revert position -->

					</div>

					<div class="col-md-6">

						<!-- Events -->
						<div class="card" id="draggable-events-container">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Events</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Layer functionality onto the draggable using the <code>start</code>, <code>drag</code>, and <code>stop</code> events. <code>Start</code> is fired at the start of the drag; <code>drag</code> during the drag; and <code>stop</code> when dragging stops. Drag the circles to see events in action.</p>

								<div class="d-flex justify-content-center flex-column flex-sm-row">
									<div class="jqueryui-demo-element text-center mx-auto mx-sm-0 rounded-round" id="draggable-event-start">
										<span>Start <span class="event-count">0</span>x</span>
									</div>

									<div class="jqueryui-demo-element text-center mx-auto mx-sm-3 my-3 my-sm-0 rounded-round" id="draggable-event-drag">
										<span>Drag <span class="event-count">0</span>x</span>
									</div>

									<div class="jqueryui-demo-element text-center mx-auto mx-sm-0 rounded-round" id="draggable-event-stop">
										<span>Stop <span class="event-count">0</span>x</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /events -->

					</div>
				</div>
				<!-- /jQuery UI picker -->


				<!-- Droppable -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Droppable
					</h6>
					<span class="text-muted d-block">Create targets for draggable elements</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Default functionality -->
						<div class="card" id="droppable-basic-container">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Default functionality</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Enable any DOM element to be droppable, a target for draggable elements. This is a very basic example with default options, to see it in action simply drag grey circle and drop to the blue one. Callback is included.</p>

								<div class="d-flex justify-content-center align-items-center flex-column flex-sm-row">
									<div class="jqueryui-demo-element text-center mx-auto mx-sm-0 rounded-round" id="droppable-basic-element">
										<span>Drag me</span>
									</div>

									<div class="jqueryui-demo-element text-center mx-auto mx-sm-3 mt-3 mt-sm-0 rounded-round droppable-demo-target" id="droppable-basic-target">
										<span>Drop here</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /default functionality -->

					</div>

					<div class="col-md-6">

						<!-- Accept drop -->
						<div class="card" id="droppable-accept-container">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Accept drop</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Specify using the <code>accept</code> option which element (or group of elements) is accepted by the target droppable. Can be either a selector indicating which draggable elements are accepted or a function.</p>

								<div class="d-flex justify-content-center align-items-center flex-column flex-sm-row">
									<div class="jqueryui-demo-element draggable-element text-center mx-auto mx-sm-0 rounded-round" id="droppable-accept-yes">
										<span>Accept</span>
									</div>

									<div class="jqueryui-demo-element draggable-element text-center mx-auto mx-sm-3 my-3 my-sm-0 rounded-round" id="droppable-accept-no">
										<span>Not accept</span>
									</div>

									<div class="jqueryui-demo-element draggable-element text-center mx-auto mx-sm-0 rounded-round droppable-demo-target" id="droppable-accept-target">
										<span>Drop here</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /accept drop -->

					</div>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Revert draggable position -->
						<div class="card" id="droppable-revert-container">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Revert draggable position</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Return the draggable (or it's helper) to its original location when dragging stops with the boolean <code>revert</code> option. If set to <code>true</code> the element will always revert. Also can be a string (<code>valid</code> or <code>invalid</code>) or a function.</p>

								<div class="d-flex justify-content-center align-items-center flex-column flex-sm-row">
									<div class="jqueryui-demo-element text-center mx-auto mx-sm-0 rounded-round" id="droppable-revert-drop">
										<span>On drop</span>
									</div>

									<div class="jqueryui-demo-element text-center mx-auto mx-sm-3 my-3 my-sm-0 rounded-round" id="droppable-revert-except">
										<span>Except drop</span>
									</div>

									<div class="jqueryui-demo-element text-center mx-auto mx-sm-0 rounded-round droppable-demo-target" id="droppable-revert-target">
										<span>Drop here</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /revert draggable position -->

					</div>

					<div class="col-md-6">

						<!-- Visual feedback -->
						<div class="card" id="droppable-visual-container">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Visual feedback</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Change the droppable's appearance on hover, or when the droppable is active (an acceptable draggable is dropped on it). Use the <code>hoverClass</code> or <code>activeClass</code> options to specify respective classes.</p>

								<div class="d-flex justify-content-center align-items-center flex-column flex-sm-row">
									<div class="jqueryui-demo-element text-center mx-auto mx-sm-0 rounded-round" id="droppable-visual-element">
										<span>Drag me</span>
									</div>

									<div class="jqueryui-demo-element text-center mx-auto mx-sm-3 my-3 my-sm-0 rounded-round droppable-demo-target" id="droppable-visual-target-active">
										<span>When active</span>
									</div>

									<div class="jqueryui-demo-element text-center mx-auto mx-sm-0 rounded-round droppable-demo-target" id="droppable-visual-target-hover">
										<span>On hover</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /visual feedback -->

					</div>
				</div>
				<!-- /droppable -->


				<!-- Resizable -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Resizable
					</h6>
					<span class="text-muted d-block">Change the size of an element using the mouse</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Default functionality -->
						<div class="card" id="resizable-basic-container">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Default functionality</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Enable any DOM element to be resizable. With the cursor grab the right or bottom border and drag to the desired width or height. To see resizable in action simply drag resizable handle on bottom right corner.</p>

								<div class="d-flex justify-content-center text-center">
									<div class="jqueryui-demo-element rounded-0" id="resizable-basic-element"><span>Resize me</span></div>
								</div>
							</div>
						</div>
						<!-- /default functionality -->

					</div>

					<div class="col-md-6">

						<!-- Animated resize -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Animated resize</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Animate the resize action using the <code>animate</code> option. When this option is set to <code>true</code>, drag the outline to the desired location; the element animates to that size on drag stop. Supports easing and duration options.</p>

								<div class="d-flex justify-content-center text-center">
									<div class="jqueryui-demo-element" id="resizable-animate-element"><span>Resize me</span></div>
								</div>
							</div>
						</div>
						<!-- /Animated resize -->

					</div>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Synchronous resize -->
						<div class="card" id="resizable-basic-container">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Synchronous resize</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Resize multiple elements simultaneously by clicking and dragging the sides of one. Pass a shared selector into the <code>alsoResize</code> option or get/set the <code>alsoResize</code> option after initialization. Try to resize any block.</p>

								<div class="d-flex justify-content-center flex-column flex-sm-row">
									<div class="jqueryui-demo-element draggable-element text-center mx-auto mx-sm-0" id="resizable-sync-element1">
										<span>Resize me</span>
									</div>

									<div class="jqueryui-demo-element draggable-element text-center mx-auto mx-sm-3 mt-3 mt-sm-0" id="resizable-sync-element2">
										<span>Resize me</span>
									</div>
								</div>
							</div>
						</div>
						<!-- /synchronous resize -->

					</div>

					<div class="col-md-6">

						<!-- Preserve aspect ratio -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Preserve aspect ratio</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Maintain the existing aspect ratio or set a new one to constrain the proportions on resize. Set the <code>aspectRatio</code> option to <code>true</code>, and optionally pass in a new ratio (i.e., 4/3). Here aspect ratio is set to <strong>16/9</strong>.</p>

								<div class="d-flex justify-content-center text-center">
									<div class="jqueryui-demo-element" id="resizable-ratio-element"><span>Resize me</span></div>
								</div>
							</div>
						</div>
						<!-- /preserve aspect ratio -->

					</div>
				</div>
				<!-- /resizable -->


				<!-- Sortable -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Sortable
					</h6>
					<span class="text-muted d-block">Reorder elements using the mouse</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Default functionality -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Default functionality</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Enable a group of DOM elements to be sortable. Click on and drag an element to a new spot within the list, and the other items will adjust to fit. By default, sortable items share draggable properties.</p>

								<div class="text-center">
									<ul class="selectable-demo-list" id="sortable-list-basic">
										<li class="p-2 bg-light border rounded cursor-move">Item 1</li>
										<li class="p-2 bg-light border rounded cursor-move mt-1">Item 2</li>
										<li class="p-2 bg-light border rounded cursor-move mt-1">Item 3</li>
										<li class="p-2 bg-light border rounded cursor-move mt-1">Item 4</li>
										<li class="p-2 bg-light border rounded cursor-move mt-1">Item 5</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /default functionality -->

					</div>

					<div class="col-md-6">

						<!-- Drop placeholder -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Drop placeholder</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">To fill the empty room for a sortable item, pass a class into the placeholder option to style that space to be visible. Use the boolean <code>forcePlaceholderSize</code> option to set dimensions on the placeholder.</p>

								<div class="text-center">
									<ul class="selectable-demo-list" id="sortable-list-placeholder">
										<li class="p-2 bg-light border rounded cursor-move">Item 1</li>
										<li class="p-2 bg-light border rounded cursor-move mt-1">Item 2</li>
										<li class="p-2 bg-light border rounded cursor-move mt-1">Item 3</li>
										<li class="p-2 bg-light border rounded cursor-move mt-1">Item 4</li>
										<li class="p-2 bg-light border rounded cursor-move mt-1">Item 5</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /drop placeholder -->

					</div>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Connect list -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Connect list</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Sort items from one list into another by passing a selector into the <code>connectWith</code> option. The simplest way to do this is to group all related lists with a CSS class, and then pass that class into the sortable function.</p>

								<div class="row text-center">
									<div class="col-sm-6">
										<ul class="selectable-demo-list selectable-demo-connected" id="sortable-list-first">
											<li class="p-2 bg-light border rounded cursor-move">List 1 item 1</li>
											<li class="p-2 bg-light border rounded cursor-move mt-1">List 1 item 2</li>
											<li class="p-2 bg-light border rounded cursor-move mt-1">List 1 item 3</li>
											<li class="p-2 bg-light border rounded cursor-move mt-1">List 1 item 4</li>
											<li class="p-2 bg-light border rounded cursor-move mt-1">List 1 item 5</li>
										</ul>
									</div>

									<div class="col-sm-6">
										<ul class="selectable-demo-list selectable-demo-connected mt-4 mt-sm-0" id="sortable-list-second">
											<li class="p-2 bg-light border rounded cursor-move">List 2 item 1</li>
											<li class="p-2 bg-light border rounded cursor-move mt-1">List 2 item 2</li>
											<li class="p-2 bg-light border rounded cursor-move mt-1">List 2 item 3</li>
											<li class="p-2 bg-light border rounded cursor-move mt-1">List 2 item 4</li>
											<li class="p-2 bg-light border rounded cursor-move mt-1">List 2 item 5</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /connect list -->

					</div>

					<div class="col-md-6">

						<!-- Include/exclude items -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Include/exclude items</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Specify which items are eligible to sort using <code>items</code> option. Items excluded from this option are not sortable, nor are they valid targets. To only prevent sorting on certain items, pass a jQuery selector into the <code>cancel</code> option.</p>

								<div class="row text-center">
									<div class="col-sm-6">
										<ul class="selectable-demo-list selectable-demo-connected" id="sortable-list-specify">
											<li class="p-2 bg-light border rounded cursor-move">List 1 item 1</li>
											<li class="p-2 bg-light border rounded cursor-disabled mt-1 ui-handle-excluded opacity-50"><span class="ui-sortable-handle">Not sortable or a drop target</span></li>
											<li class="p-2 bg-light border rounded cursor-disabled mt-1 ui-handle-excluded opacity-50">Not sortable or a drop target</li>
											<li class="p-2 bg-light border rounded cursor-move mt-1">List 1 item 4</li>
											<li class="p-2 bg-light border rounded cursor-move mt-1">List 1 item 5</li>
										</ul>
									</div>

									<div class="col-sm-6">
										<ul class="selectable-demo-list selectable-demo-connected mt-4 mt-sm-0" id="sortable-list-cancel">
											<li class="p-2 bg-light border rounded cursor-move">List 2 item 1</li>
											<li class="p-2 bg-light border rounded cursor-disabled mt-1 ui-handle-excluded opacity-50">Not sortable</li>
											<li class="p-2 bg-light border rounded cursor-disabled mt-1 ui-handle-excluded opacity-50">Not sortable</li>
											<li class="p-2 bg-light border rounded cursor-move mt-1">List 2 item 4</li>
											<li class="p-2 bg-light border rounded cursor-move mt-1">List 2 item 5</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /include/exclude items -->

					</div>
				</div>
				<!-- /sortable -->


				<!-- Selectable -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Selectable
					</h6>
					<span class="text-muted d-block">Use the mouse to select elements</span>
				</div>

				<div class="row">
					<div class="col-md-6">

						<!-- Default functionality -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Default functionality</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Enable a DOM element (or group of elements) to be selectable. Draw a box with your cursor to select items. Hold down the <kbd>Ctrl</kbd> key to make multiple non-adjacent selections. Styles are for demo purposes only.</p>

								<div class="text-center">
									<ul class="selectable-demo-list" id="selectable-basic">
										<li class="p-2 bg-light border rounded">Item 1</li>
										<li class="p-2 bg-light border rounded mt-1">Item 2</li>
										<li class="p-2 bg-light border rounded mt-1">Item 3</li>
										<li class="p-2 bg-light border rounded mt-1">Item 4</li>
										<li class="p-2 bg-light border rounded mt-1">Item 5</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /default functionality -->

					</div>

					<div class="col-md-6">

						<!-- Serialize -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Serialize</h5>
								<div class="header-elements">
									<span>Selected: <strong id="select-result">none</strong></span>

									<div class="list-icons ml-3">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Write a function that fires on the stop event to collect the index values of selected items. Present values as feedback, or pass as a data string. Select one or more items to see the callback values on top right corner.</p>

								<div class="text-center">
									<ul class="selectable-demo-list" id="selectable-serialize">
										<li class="p-2 bg-light border rounded">Item 1</li>
										<li class="p-2 bg-light border rounded mt-1">Item 2</li>
										<li class="p-2 bg-light border rounded mt-1">Item 3</li>
										<li class="p-2 bg-light border rounded mt-1">Item 4</li>
										<li class="p-2 bg-light border rounded mt-1">Item 5</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /serialize -->

					</div>
				</div>
				<!-- /selectable -->

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
