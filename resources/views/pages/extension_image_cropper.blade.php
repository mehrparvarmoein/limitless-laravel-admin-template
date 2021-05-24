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
	<script src="../../../../global_assets/js/plugins/media/cropper.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/extension_image_cropper.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Extensions</span> - Image Cropper</h4>
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
							<a href="extension_image_cropper" class="breadcrumb-item">Extensions</a>
							<span class="breadcrumb-item active">Image cropper</span>
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

				<!-- Cropper demonstration -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Cropper demonstration</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">This example demonstrates some basic functionality with previews in different sizes. <code>X</code> and <code>Y</code> values display current cropping zone position, <code>width</code> and <code>height</code> values display current cropping zone size, <code>scaleX</code> and <code>scaleY</code> values display current image scale. You can get image, crop box and container data by clicking on the proper button on the right side. Also you can change cropping zone aspect ratio and download cropped image on the fly.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="image-cropper-container mb-3">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="cropper" id="demo-cropper-image">
								</div>

								<div class="form-group demo-cropper-toolbar">
									<label class="font-weight-semibold">Toolbar:</label>
									<div class="btn-group btn-group-justified">
										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="setDragMode" data-option="move" title="Move">
												<span class="icon-move"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="setDragMode" data-option="crop" title="Crop">
												<span class="icon-crop2"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
												<span class="icon-arrow-left13"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="move" data-option="10" data-second-option="0" title="Move Right">
												<span class="icon-arrow-right14"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
												<span class="icon-arrow-up13"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="move" data-option="0" data-second-option="10" title="Move Down">
												<span class="icon-arrow-down132"></span>
											</button>
										</div>
									</div>
								</div>

								<div class="form-group demo-cropper-toolbar">
									<div class="btn-group btn-group-justified">
										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="zoom" data-option="0.1" title="Zoom In">
												<span class="icon-zoomin3"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="zoom" data-option="-0.1" title="Zoom Out">
												<span class="icon-zoomout3"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="rotate" data-option="-45" title="Rotate Left">
												<span class="icon-rotate-ccw3"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="rotate" data-option="45" title="Rotate Right">
												<span class="icon-rotate-cw3"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="scaleX" data-option="-1" title="Flip Horizontal">
												<span class="icon-flip-vertical4"></span>
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn bg-blue btn-icon" data-method="scaleY" data-option="-1" title="Flip Vertical">
												<span class="icon-flip-vertical3"></span>
											</button>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="font-weight-semibold">Crop:</label>
									<div class="btn-group btn-group-justified demo-cropper-toolbar">
										<div class="btn-group">
											<button type="button" class="btn btn-light" data-method="getCroppedCanvas">
												Get Cropped Canvas
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn btn-light" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 150, &quot;height&quot;: 150 }">
												150&times;150
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn btn-light" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 120, &quot;height&quot;: 120 }">
												120&times;120
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn btn-light" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 90, &quot;height&quot;: 90 }">
												90&times;90
											</button>
										</div>

										<div class="btn-group">
											<button type="button" class="btn btn-light" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 60, &quot;height&quot;: 60 }">
												60&times;60
											</button>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="font-weight-semibold">Aspect ratio:</label>
									<div class="btn-group btn-group-justified demo-cropper-ratio" data-toggle="buttons">
										<label class="btn btn-light">
											<input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
											16:9
										</label>
										<label class="btn btn-light">
											<input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
											4:3
										</label>
										<label class="btn btn-light">
											<input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
											1:1
										</label>
										<label class="btn btn-light">
											<input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
											2:3
										</label>
										<label class="btn btn-light">
											<input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
											Free
										</label>
									</div>
								</div>

								<div class="form-group mb-0">
									<div class="row">
										<div class="col-md-4">
											<div class="form-check form-check-switchery form-check-switchery-double switchery-sm text-center">
												<label class="form-check-label">
													Clear
													<input type="checkbox" class="clear-crop-switch" checked data-fouc>
													Crop
												</label>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-check form-check-switchery form-check-switchery-double switchery-sm text-center">
												<label class="form-check-label">
													Disable
													<input type="checkbox" class="enable-disable-switch" checked data-fouc>
													Enable
												</label>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-check form-check-switchery form-check-switchery-double switchery-sm text-center">
												<label class="form-check-label">
													Destroy
													<input type="checkbox" class="destroy-create-switch" checked data-fouc>
													Create
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-3 text-center">
									<div class="eg-preview d-md-flex justify-content-md-center align-items-md-center text-center">
										<div class="preview preview-lg d-md-inline-block mt-3 mx-auto mr-md-0 mt-md-0 ml-md-3 overflow-hidden rounded"></div>
										<div class="preview preview-md d-md-inline-block mt-3 mx-auto mr-md-0 mt-md-0 ml-md-3 overflow-hidden rounded"></div>
										<div class="preview preview-md d-md-inline-block mt-3 mx-auto mr-md-0 mt-md-0 ml-md-3 overflow-hidden rounded"></div>
										<div class="preview preview-xs d-md-inline-block mt-3 mx-auto mr-md-0 mt-md-0 ml-md-3 overflow-hidden rounded"></div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label class="font-weight-semibold">X value:</label>
											<input type="text" class="form-control" id="dataX" placeholder="x">
										</div>

										<div class="form-group">
											<label class="font-weight-semibold">Width:</label>
											<input type="text" class="form-control" id="dataWidth" placeholder="width">
										</div>

										<div class="form-group">
											<label class="font-weight-semibold">ScaleX:</label>
											<input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<label class="font-weight-semibold">Y value:</label>
											<input type="text" class="form-control" id="dataY" placeholder="y">
										</div>

										<div class="form-group">
											<label class="font-weight-semibold">Height:</label>
											<input type="text" class="form-control" id="dataHeight" placeholder="height">
										</div>

										<div class="form-group">
											<label class="font-weight-semibold">ScaleY:</label>
											<input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="font-weight-semibold">General data:</label>
									<div class="input-group">
										<input class="form-control" id="showData1" type="text" placeholder="General data">
										<span class="input-group-append">
											<button class="btn btn-light" id="getData" type="button">Get Data</button>
											<button class="btn btn-light" id="setData" type="button">Set Data</button>
										</span>
									</div>
								</div>

								<div class="form-group">
									<label class="font-weight-semibold">Container &amp; image data:</label>
									<div class="input-group">
										<input class="form-control" id="showData2" type="text" placeholder="Container and image data">
										<span class="input-group-append">
											<button class="btn btn-light" id="getContainerData" type="button">Get Container Data</button>
											<button class="btn btn-light" id="getImageData" type="button">Get Image Data</button>
										</span>
									</div>
								</div>

								<div class="form-group">
									<label class="font-weight-semibold">Canvas data:</label>
									<div class="input-group">
										<input class="form-control" id="showData3" type="text" placeholder="Canvas data">
										<span class="input-group-append">
											<button class="btn btn-light" id="getCanvasData" type="button">Get Canvas Data</button>
											<button class="btn btn-light" id="setCanvasData" type="button">Set Canvas Data</button>
										</span>
									</div>
								</div>

								<div class="form-group">
									<label class="font-weight-semibold">Crop box data:</label>
									<div class="input-group">
										<input class="form-control" id="showData4" type="text" placeholder="Crop box data">
										<span class="input-group-append">
											<button class="btn btn-light" id="getCropBoxData" type="button">Get Crop Box Data</button>
											<button class="btn btn-light" id="setCropBoxData" type="button">Set Crop Box Data</button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /cropper demonstration -->


				<!-- Basic usage -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Basic usage</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">This is the most basic example of <code>cropper</code> implementation. By default cropping area is centered and takes 80% of image space. The image is resizable, but should be wrapped in block element with fixed height.</p>

								<div class="image-cropper-container">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-basic">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Hidden overlay</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">This example demonstrates default options, but with hidden black modal layer above the cropper. To hide the modal set <code>modal</code> option to <code>false</code>. If visible, modal color can be easily changed in css.</p>

								<div class="image-cropper-container">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-modal">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /basic usage -->


				<!-- Zone options -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Fixed position</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">This example demonstrates cropped area that has <code>fixed position</code> and can't be moved. Although it isn't movable, other options remain available: resize, dragging, callbacks, aspect ratios, modal etc.</p>

								<div class="image-cropper-container">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-not-movable">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Fixed size</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">This example demonstrates cropped area that has <code>fixed size</code> and can't be resized. Although it isn't resizable, other options remain available: moving, dragging, callbacks, aspect ratios, modal etc.</p>

								<div class="image-cropper-container">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-not-resizable">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /zone options -->


				<!-- Disable functionality -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Disabled autocrop</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">In this example cropping zone is not rendered automatically when initialize and available only on a new drag. By default, cropping zone is always <code>visible</code> and can be hidden by setting <code>autoCrop</code> option to <code>false</code>.</p>

								<div class="image-cropper-container">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-auto">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Disabled image drag</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">In this example the user can't drag the image within container, but can drag cropping area.. By default, this feature is disabled and can be enabled by setting <code>movable</code> option to <code>false</code>.</p>

								<div class="image-cropper-container">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-drag">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /disable functionality -->


				<!-- Ratios -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Fixed 16:9 ratio</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Thix example demonstrates fixed <code>16:9</code> dragging (selection) ratio. By default, aspect ratio isn't specified and is free. Optional aspect ratios are also available and can be specified using <code>aspectRatio</code> option.</p>

								<div class="image-cropper-container">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-16-9">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Fixed 4:3 ratio</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">Thix example demonstrates fixed <code>4:3</code> dragging (selection) ratio. By default, aspect ratio isn't specified and is free. Optional aspect ratios are also available and can be specified using <code>aspectRatio</code> option.</p>

								<div class="image-cropper-container">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-4-3">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /ratios -->


				<!-- Zone sizing -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Minimum zone size</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">This example demonstrates the <code>minimum</code> width and height (px of original image) of the cropping zone. Better use this option only when you are sure that the image has this <code>minimum</code> width and height. By default, both values aren't specified.</p>

								<div class="image-cropper-container">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-min">
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Disabled zoom</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<p class="mb-3">This example demonstrates the ability to disable <code>zoom</code> feature, it works in both options: disables zoom on scroll and zoom on touch. By default, image cropper is zoomable, to disable zooming set <code>zoomable</code> option to <code>false</code>.</p>

								<div class="image-cropper-container">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="crop-zoomable">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /zone sizing -->

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


	<!-- Modal with cropped image -->
	<div id="getCroppedCanvasModal" class="modal fade docs-cropped" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title" id="getCroppedCanvasTitle">Cropped</h6>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body text-center"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
					<a href="#" class="btn btn-primary" id="download" download="cropped.jpg">Download</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /modal with cropped image -->

</body>
</html>
