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
	<script src="../../../../global_assets/js/plugins/media/fancybox.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/datatables.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/gallery_library.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Gallery</span> - Media Library</h4>
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
							<a href="gallery_library" class="breadcrumb-item">Gallery</a>
							<span class="breadcrumb-item active">Media library</span>
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

				<!-- Media library -->
				<div class="card">
					<div class="card-header bg-white header-elements-inline">
						<h6 class="card-title">Media library emulation</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<table class="table table-striped media-library">
                        <thead>
                            <tr>
                            	<th><input type="checkbox" class="form-input-styled"></th>
                                <th>Preview</th>
                                <th>Name</th>
                                <th>Author</th>
                                <th>Date</th>
                                <th>File info</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Ignorant saw her drawings</a></td>
		                        <td><a href="#">Eugene Kopyov</a></td>
		                        <td>Jun 10, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 215 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Case oh an that or away sigh</a></td>
		                        <td><a href="#">James Alexander</a></td>
		                        <td>Jun 9, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 636 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .png</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Acuteness you exquisite ourselves</a></td>
		                        <td><a href="#">Jeremy Victorino</a></td>
		                        <td>Jun 9, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 295 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .png</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Enquire ye without it garrets</a></td>
		                        <td><a href="#">Margo Baker</a></td>
		                        <td>Jun 8, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 593 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .png</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Interest received followed</a></td>
		                        <td><a href="#">Monica Smith</a></td>
		                        <td>Jun 8, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 993 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">His exquisite sincerity</a></td>
		                        <td><a href="#">Bastian Miller</a></td>
		                        <td>Jun 9, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 472 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">So we me unknown</a></td>
		                        <td><a href="#">Jordana Mills</a></td>
		                        <td>Jun 6, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 364 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Sufficient impossible him may</a></td>
		                        <td><a href="#">Buzz Brenson</a></td>
		                        <td>May 29, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 643 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .png</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Oppose exeter income simple</a></td>
		                        <td><a href="#">Zachary Willson</a></td>
		                        <td>Jun 2, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 643 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .png</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Scale began quiet up short</a></td>
		                        <td><a href="#">William Miles</a></td>
		                        <td>Jun 5, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 633 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .png</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Sportsmen shy forfeited</a></td>
		                        <td><a href="#">Freddy Walden</a></td>
		                        <td>Jun 7, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 543 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">View fine me gone this</a></td>
		                        <td><a href="#">Dori Laperriere</a></td>
		                        <td>Jun 1, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 655 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Compact greater and demands</a></td>
		                        <td><a href="#">Vanessa Aurelius</a></td>
		                        <td>May 28, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 237 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Park be fine easy am size</a></td>
		                        <td><a href="#">Monica Smith</a></td>
		                        <td>May 20, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 902 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">As society explain country</a></td>
		                        <td><a href="#">Jordana Mills</a></td>
		                        <td>May 20, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 983 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Sentiments nor everything off</a></td>
		                        <td><a href="#">Buzz Brenson</a></td>
		                        <td>May 21, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 760 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Concerns greatest margaret</a></td>
		                        <td><a href="#">Jeremy Victorino</a></td>
		                        <td>May 3, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 278 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Door neat week do find</a></td>
		                        <td><a href="#">Eugene Kopyov</a></td>
		                        <td>May 10, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 578 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Unpacked endeavor steepest</a></td>
		                        <td><a href="#">Margo Baker</a></td>
		                        <td>May 18, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 893 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Painted no or affixed</a></td>
		                        <td><a href="#">James Alexander</a></td>
		                        <td>May 9, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 534 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Exposed neither pressed</a></td>
		                        <td><a href="#">Bastian Miller</a></td>
		                        <td>May 8, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 689 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Warrant present garrets</a></td>
		                        <td><a href="#">Freddy Walden</a></td>
		                        <td>May 20, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 410 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Now seven world think</a></td>
		                        <td><a href="#">Zachary Willson</a></td>
		                        <td>May 4, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 357 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .jpg</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Up unwilling eagerness</a></td>
		                        <td><a href="#">William Miles</a></td>
		                        <td>May 12, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 346 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .png</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>

                            <tr>
                            	<td><input type="checkbox" class="form-input-styled"></td>
		                        <td>
			                        <a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
				                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="img-preview rounded">
			                        </a>
		                        </td>
		                        <td><a href="#">Collecting if sympathize</a></td>
		                        <td><a href="#">Jordana Mills</a></td>
		                        <td>May 16, 2015</td>
		                        <td>
		                        	<ul class="list-unstyled mb-0">					                        		
			                        	<li><span class="font-weight-semibold">Size:</span> 378 Kb</li>
			                        	<li><span class="font-weight-semibold">Format:</span> .png</li>
		                        	</ul>
		                        </td>
		                        <td class="text-center">
		                            <div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit file</a>
												<a href="#" class="dropdown-item"><i class="icon-copy4"></i> Copy file</a>
												<a href="#" class="dropdown-item"><i class="icon-eye-blocked"></i> Unpublish</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-bin"></i> Move to trash</a>
											</div>
										</div>
									</div>
		                        </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /media library -->

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
