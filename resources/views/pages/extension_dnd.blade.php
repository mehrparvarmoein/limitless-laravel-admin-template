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
	<script src="../../../../global_assets/js/plugins/ui/dragula.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/extension_dnd.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Extensions</span> - Drag and Drop</h4>
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
							<a href="extension_dnd" class="breadcrumb-item">Extensions</a>
							<span class="breadcrumb-item active">Drag and drop</span>
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

				<!-- Info alert -->
				<div class="alert alert-info alert-styled-left alert-arrow-left alert-dismissible bg-white mb-4">
					<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
					<h6 class="alert-heading font-weight-semibold mb-1">Dragula extension</h6>
					Dragula - drag and drop library, that adds sortable functionality to any elements without any specific requirements and settings.
			    </div>
			    <!-- /info alert -->


				<!-- Dropdown menus -->
				<div class="mb-2">
					<div class="mb-3">
						<h6 class="font-weight-semibold">Sorting menu items</h6>
						<p>The following examples demonstrate how dropdown menu items can be sorting. This is the default use case, all you need is to specify dropdown menu <code>id</code> if single menu or <code>class</code> if multiple menus, also set the element that gets mirror elements appended using <code>mirrorContainer</code> option. All menu functionality works until drag starts - all links are clickable, all submenus are toggling. Examples below include basic use cases and components.</p>
					</div>

					<div class="row">
						<div class="col-md-4">

							<!-- Default items sorting -->
							<div class="card card-body border-top-1 border-top-info">
								<div class="text-center">
									<h6 class="font-weight-semibold mb-0">Default items sorting</h6>
									<p class="mb-3 text-muted">Basic example of menu items sorting</p>
								</div>

								<div class="dropdown-menu dropdown-menu-sortable" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
									<div class="dropdown-header text-uppercase">Menu header</div>
									<a href="#" class="dropdown-item">Action</a>
									<a href="#" class="dropdown-item">Another action</a>
									<a href="#" class="dropdown-item">Something else here</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item">One more separated line</a>
								</div>
							</div>
							<!-- /default items sorting -->

						</div>

						<div class="col-md-4">

							<!-- Submenu -->
							<div class="card card-body border-top-1 border-top-info">
								<div class="text-center">
									<h6 class="mb-0 font-weight-semibold">Menu with submenus</h6>
									<p class="mb-3 text-muted">Parent level of submenu is also sortable</p>
								</div>

								<div class="dropdown-menu dropdown-menu-sortable" style="display: block; position: relative; width: 100%; margin-top: 0; float: none;">
									<div class="dropdown-header text-uppercase">Menu header</div>
									<a href="#" class="dropdown-item">Action</a>
									<a href="#" class="dropdown-item">Another action</a>
									<a href="#" class="dropdown-item">Something else here</a>
									<div class="dropdown-divider"></div>
									<div class="dropdown-submenu dropdown-submenu-left">
										<a href="#" class="dropdown-item dropdown-toggle">More options</a>
										<div class="dropdown-menu">
											<a href="#" class="dropdown-item">Second level link</a>
											<div class="dropdown-submenu dropdown-submenu-left">
												<a href="#" class="dropdown-item dropdown-toggle">Second level link</a>
												<div class="dropdown-menu">
													<a href="#" class="dropdown-item">Third level link</a>
													<a href="#" class="dropdown-item">Third level link</a>
													<a href="#" class="dropdown-item">Third level link</a>
												</div>
											</div>
											<a href="#" class="dropdown-item">Second level link</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /submenu -->

						</div>

						<div class="col-md-4">

							<!-- Menu components -->
							<div class="card card-body border-top-1 border-top-info">
								<div class="text-center">
									<h6 class="mb-0 font-weight-semibold">Menu components</h6>
									<p class="mb-3 text-muted">All menu components are supported</p>
								</div>

								<div class="dropdown-menu dropdown-menu-sortable" style="display: block; position: relative; width: 100%; margin-top: 0; float: none;">
									<div class="dropdown-header text-uppercase">Menu header</div>
									<a href="#" class="dropdown-item">Action <span class="badge badge-primary ml-auto">Added</span></a>
									<a href="#" class="dropdown-item">Another action <span class="badge badge-danger badge-pill ml-auto">98</span></a>
									<a href="#" class="dropdown-item">Something else here <span class="ml-auto"><i class="icon-command"></i>F</span></a>
									<div class="dropdown-divider"></div>
									<div class="dropdown-submenu dropdown-submenu-left">
										<a href="#" class="dropdown-item dropdown-toggle">More options</a>
										<div class="dropdown-menu">
											<a href="#" class="dropdown-item">Second level link</a>
											<div class="dropdown-submenu dropdown-submenu-left">
												<a href="#" class="dropdown-item dropdown-toggle">Second level link</a>
												<div class="dropdown-menu">
													<a href="#" class="dropdown-item">Third level link</a>
													<a href="#" class="dropdown-item">Third level link</a>
													<a href="#" class="dropdown-item">Third level link</a>
												</div>
											</div>
											<a href="#" class="dropdown-item">Second level link</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /menu components -->

						</div>
					</div>
				</div>
				<!-- /dropdown menus -->


				<!-- Form components -->
				<div class="mb-2">
					<div class="mb-3">
						<h6 class="font-weight-semibold">Draggable form components</h6>
						<p>The following example demonstrates how form components can be draggable/sortable. Form components are placed inside 2 columns, that are connected in plugin configuration. Draggable functionality is attached to <code>&lt;div class="form-group" /></code> container - you can easily sort rows inside each column or drag/drop rows from one column to another. All elements inside form groups are working until drag starts. Works with all form layouts.</p>
					</div>

					<div class="row">
						<div class="col-md-6">

							<!-- Left form container -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">Left form container</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body" id="forms-target-left">
									<div class="form-group">
										<label class="cursor-move">Enter your name:</label>
										<input type="text" class="form-control" placeholder="Eugene Kopyov">
									</div>

									<div class="form-group">
										<label class="cursor-move">Enter your password:</label>
										<input type="password" class="form-control" placeholder="Your strong password">
									</div>

									<div class="form-group">
										<label class="cursor-move">Attach screenshot:</label>
										<input type="file" class="form-input-styled" data-fouc>
									</div>

									<div class="form-group">
										<label class="cursor-move">Your message:</label>
										<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<div class="text-right">
										<button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
									</div>
								</div>
							</div>
							<!-- /left form container -->

						</div>

						<div class="col-md-6">

							<!-- Right form container -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">Right form container</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body" id="forms-target-right">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="cursor-move">Full name:</label>
												<input type="text" placeholder="Eugene Kopyov" class="form-control">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="cursor-move">Your email:</label>
												<input type="text" placeholder="email@domain.com" class="form-control">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
					                            <label class="cursor-move">Country:</label>
					                            <select data-placeholder="Select your country" class="form-control form-control-select2" data-fouc>
					                            	<option></option>
					                                <option value="Cambodia">Cambodia</option> 
					                                <option value="Cameroon">Cameroon</option> 
					                                <option value="Canada">Canada</option> 
					                                <option value="Cape Verde">Cape Verde</option> 
					                            </select>
				                            </div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="cursor-move">State/Province:</label>
												<input type="text" placeholder="Bayern" class="form-control">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label class="cursor-move">ZIP code:</label>
												<input type="text" placeholder="1031" class="form-control">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label class="cursor-move">City:</label>
												<input type="text" placeholder="Munich" class="form-control">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="cursor-move">Address line:</label>
												<input type="text" placeholder="Ring street 12" class="form-control">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="cursor-move">Additional message:</label>
										<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
									</div>

									<div class="text-right">
										<button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
									</div>
								</div>
							</div>
							<!-- /right form container -->

						</div>
					</div>
				</div>
				<!-- /form components -->


				<!-- Sortable media list -->
				<div class="mb-2">
					<div class="mb-3">
						<h6 class="font-weight-semibold">Sortable media list</h6>
						<p>The following examples demonstrate sorting feature added to simple media lists. The functionality is the same as in other examples, but here we've added custom <code>handle</code> to each media list and set container, that gets elements appended using <code>mirrorContainer</code> option to keep it inside list - by default, all draggable elements are appended to <code>body</code>. You can also move items between 2 or more columns, copy them on dragging or remove original item when drag is completed.</p>
					</div>

					<div class="row">
						<div class="col-md-6">

							<!-- Left list container -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">Left list container</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<ul class="media-list media-list-container" id="media-list-target-left">
										<li class="media">
				                    		<div class="mr-3 mt-2">
				                    			<i class="icon-dots dragula-handle"></i>
			                    			</div>

											<div class="mr-3">
												<a href="#">
													<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-title font-weight-semibold">Monica Smith</div>
												One preparatory festive outran blatantly indecisively interminable bid popular much and less
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
				                    		<div class="mr-3 mt-2">
				                    			<i class="icon-dots dragula-handle"></i>
			                    			</div>

											<div class="mr-3">
												<a href="#">
													<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-title font-weight-semibold">Bastian Miller</div>
												As ouch lizard hurried less ingenuously malicious yikes belched agilely shrank more diabolically
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
				                    		<div class="mr-3 mt-2">
				                    			<i class="icon-dots dragula-handle"></i>
			                    			</div>

											<div class="mr-3">
												<a href="#">
													<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-title font-weight-semibold">Jordana Mills</div>
												Kiwi that dear because wow barring dear temperate narrowly securely indecently this persistently
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
				                    		<div class="mr-3 mt-2">
				                    			<i class="icon-dots dragula-handle"></i>
			                    			</div>

											<div class="mr-3">
												<a href="#">
													<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-title font-weight-semibold">Freddy Walden</div>
												Impotently much wedded within truly amidst therefore toward as as insect pre-set where foolhardily
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
				                    		<div class="mr-3 mt-2">
				                    			<i class="icon-dots dragula-handle"></i>
			                    			</div>

											<div class="mr-3">
												<a href="#">
													<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-title font-weight-semibold">William Miles</div>
												Strangely mounted the and as however repaid wow goodness oh falcon unproductive and some bred
											</div>


											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /left list container -->

						</div>

						<div class="col-md-6">

							<!-- Right list container -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">Right list container</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<ul class="media-list media-list-container" id="media-list-target-right">
										<li class="media">
				                    		<div class="mr-3 mt-2">
				                    			<i class="icon-dots dragula-handle"></i>
			                    			</div>

											<div class="mr-3">
												<a href="#">
													<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-title font-weight-semibold">James Alexander</div>
												Far jauntily manta laughed pugnacious hey hey ouch globefish far yikes crud overheard far off
											</div>

											<div class="ml-3 align-self-center">
												<span class="badge bg-blue">Colleague</span>
											</div>
										</li>

										<li class="media">
				                    		<div class="mr-3 mt-2">
				                    			<i class="icon-dots dragula-handle"></i>
			                    			</div>

											<div class="mr-3">
												<a href="#">
													<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-title font-weight-semibold">Margo Baker</div>
												Away one gosh gracefully tenably hid amid far overlay ouch oh until oyster crud much in far far
											</div>

											<div class="ml-3 align-self-center">
												<span class="badge bg-danger-400">Partner</span>
											</div>
										</li>

										<li class="media">
				                    		<div class="mr-3 mt-2">
				                    			<i class="icon-dots dragula-handle"></i>
			                    			</div>

											<div class="mr-3">
												<a href="#">
													<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-title font-weight-semibold">Vanessa Aurelius</div>
												Bled wept across mindful constructively suggestive hello fuzzily this jocosely capybara well to
											</div>

											<div class="ml-3 align-self-center">
												<span class="badge bg-teal-400">Client</span>
											</div>
										</li>

										<li class="media">
				                    		<div class="mr-3 mt-2">
				                    			<i class="icon-dots dragula-handle"></i>
			                    			</div>

											<div class="mr-3">
												<a href="#">
													<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-title font-weight-semibold">Zachary Willson</div>
												Dragonfly oversold forgot ouch less darn firefly one while honey until cockatoo more as the rat
											</div>

											<div class="ml-3 align-self-center">
												<span class="badge bg-slate">Investor</span>
											</div>
										</li>

										<li class="media">
				                    		<div class="mr-3 mt-2">
				                    			<i class="icon-dots dragula-handle"></i>
			                    			</div>

											<div class="mr-3">
												<a href="#">
													<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-title font-weight-semibold">Benjamin Loretti</div>
												Hello some plentiful a beneath much glanced that savage pending dashingly and hare insane dull
											</div>

											<div class="ml-3 align-self-center">
												<span class="badge bg-indigo-400">Office</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /right list container -->

						</div>
					</div>
				</div>
				<!-- /sortable media list -->


				<!-- Draggable cards -->
				<div class="mb-2">
					<div class="mb-3">
						<h6 class="font-weight-semibold">Draggable cards</h6>
						<p>The following examples demonstrate how content cards can be dragged around. Just like jQuery UI Sortable examples, this sorting library does the same, but it doesn't require that much styling. In these examples the whole card is a handle, but you can also specify a custom dragging handle such as control icon on the top right corner. All links in tables are clickable and card control functionality (collapsing/expanding, reloading and closing) still works until drag starts.</p>
					</div>

					<div class="row">
						<div class="col-md-6" id="cards-target-left">
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title font-weight-semibold">Draggable card #1</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>
								
								<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2">1</td>
												<td>James</td>
												<td>Lorry</td>
												<td><a href="#">@jimmylorry</a></td>
											</tr>
											<tr>
												<td>Chris</td>
												<td>Ludacris</td>
												<td><a href="#">@cluda</a></td>
											</tr>
											<tr>
												<td>2</td>
												<td>Jacob</td>
												<td>Williams</td>
												<td><a ref="#">@jacwill</a></td>
											</tr>
											<tr>
												<td>3</td>
												<td colspan="2">Martin Cooper</td>
												<td><a href="#">@marcoop</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title font-weight-semibold">Draggable card #3</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>
								
								<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2">1</td>
												<td>James</td>
												<td>Lorry</td>
												<td><a href="#">@jimmylorry</a></td>
											</tr>
											<tr>
												<td>Chris</td>
												<td>Ludacris</td>
												<td><a href="#">@cluda</a></td>
											</tr>
											<tr>
												<td>2</td>
												<td>Jacob</td>
												<td>Williams</td>
												<td><a ref="#">@jacwill</a></td>
											</tr>
											<tr>
												<td>3</td>
												<td colspan="2">Martin Cooper</td>
												<td><a href="#">@marcoop</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="col-md-6" id="cards-target-right">
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title font-weight-semibold">Draggable card #2</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>
								
								<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2">1</td>
												<td>James</td>
												<td>Lorry</td>
												<td><a href="#">@jimmylorry</a></td>
											</tr>
											<tr>
												<td>Chris</td>
												<td>Ludacris</td>
												<td><a href="#">@cluda</a></td>
											</tr>
											<tr>
												<td>2</td>
												<td>Jacob</td>
												<td>Williams</td>
												<td><a ref="#">@jacwill</a></td>
											</tr>
											<tr>
												<td>3</td>
												<td colspan="2">Martin Cooper</td>
												<td><a href="#">@marcoop</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title font-weight-semibold">Draggable card #4</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>
								
								<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2">1</td>
												<td>James</td>
												<td>Lorry</td>
												<td><a href="#">@jimmylorry</a></td>
											</tr>
											<tr>
												<td>Chris</td>
												<td>Ludacris</td>
												<td><a href="#">@cluda</a></td>
											</tr>
											<tr>
												<td>2</td>
												<td>Jacob</td>
												<td>Williams</td>
												<td><a ref="#">@jacwill</a></td>
											</tr>
											<tr>
												<td>3</td>
												<td colspan="2">Martin Cooper</td>
												<td><a href="#">@marcoop</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /draggable cards -->


				<!-- Collapsible cards -->
				<div class="mb-2">
					<div class="mb-3">
						<h6 class="font-weight-semibold">Sorting collapsible cards</h6>
						<p>The following examples demonstrate sorting feature added to the set of cards with accordion and collapsible functionality. Here handles are not specified and the whole card is a draggable handle. Both sets are separated - you can sort cards in a single column only without dragging to another column. The functionality is pretty much the same, the only difference is we need to use the same <code>id</code> to define <code>data-parent</code> and sortable container for accordion.</p>
					</div>

					<div class="row">
						<div class="col-md-6">

							<!-- Accordion -->
							<div class="card-group-control card-group-control-left" id="accordion-target">
								<div class="card">
									<div class="card-header header-elements-inline">
										<h6 class="card-title">
											<a class="text-default" data-toggle="collapse" data-parent="#accordion-target" href="#accordion-control-group1">Accordion Item #1</a>
										</h6>
									</div>

									<div id="accordion-control-group1" class="card-collapse collapse show">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header header-elements-inline">
										<h6 class="card-title">
											<a class="text-default collapsed" data-toggle="collapse" data-parent="#accordion-target" href="#accordion-control-group2">Accordion Item #2</a>
										</h6>
									</div>

									<div id="accordion-control-group2" class="card-collapse collapse">
										<div class="card-body">
											Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header header-elements-inline">
										<h6 class="card-title">
											<a class="text-default collapsed" data-toggle="collapse" data-parent="#accordion-target" href="#accordion-control-group3">Accordion Item #3</a>
										</h6>
									</div>

									<div id="accordion-control-group3" class="card-collapse collapse">
										<div class="card-body">
											3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
										</div>
									</div>
								</div>
							</div>
							<!-- /accordion -->

						</div>

						<div class="col-md-6">

							<!-- Collapsible -->
							<div class="card-group-control card-group-control-left" id="collapsible-target">
								<div class="card">
									<div class="card-header header-elements-inline">
										<h6 class="card-title">
											<a class="text-default" data-toggle="collapse" href="#collapsible-control-group1">Collapsible Item #1</a>
										</h6>
									</div>

									<div id="collapsible-control-group1" class="card-collapse collapse show">
										<div class="card-body">
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header header-elements-inline">
										<h6 class="card-title">
											<a class="text-default collapsed" data-toggle="collapse" href="#collapsible-control-group2">Collapsible Item #2</a>
										</h6>
									</div>

									<div id="collapsible-control-group2" class="card-collapse collapse">
										<div class="card-body">
											Тon cupidatat skateboard dolor brunch. Тesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header header-elements-inline">
										<h6 class="card-title">
											<a class="text-default collapsed" data-toggle="collapse" href="#collapsible-control-group3">Collapsible Item #3</a>
										</h6>
									</div>

									<div id="collapsible-control-group3" class="card-collapse collapse">
										<div class="card-body">
											3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it.
										</div>
									</div>
								</div>
							</div>
							<!-- /collapsible -->

						</div>
					</div>
				</div>
				<!-- /collapsible cards -->


				<!-- Tabs and pills -->
				<div>
					<div class="mb-3">
						<h6 class="font-weight-semibold">Sortable tabs and pills</h6>
						<p>The following examples demonstrate sorting feature added to the tab and pill navigation types. Dragula functionality can be added to all available tabs and pills layouts and supports all available options. In these examples each nav type has a single container where dragging is allowed, because this is related to nav item position, tab content stays in its original container. In most cases we need to set the element that gets elements appended using <code>mirrorContainer</code> option. In our case it's an <code>id</code> added to the tabs/pills nav.</p>
					</div>

					<!-- Tabs -->
					<div class="row">
						<div class="col-md-6">

							<!-- Basic tabs -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">Basic tabs</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight" id="tabs-target-left">
											<li class="nav-item">
												<a href="#highlight-tab1" class="nav-link" data-toggle="tab">
													<i class="icon-menu7 mr-2"></i>
													Active tab
												</a>
											</li>
											<li class="nav-item">
												<a href="#highlighted-tab2" class="nav-link" data-toggle="tab">
													<i class="icon-mention mr-2"></i>
													Inactive tab
												</a>
											</li>
											<li class="nav-item dropdown">
												<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
													<i class="icon-gear mr-2"></i>
													Dropdown
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#highlighted-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
													<a href="#highlighted-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
												</div>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="highlighted-tab1">
												Highlight top border of the active tab by adding <code>.nav-tabs-highlight</code> class.
											</div>

											<div class="tab-pane" id="highlighted-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="highlighted-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="highlighted-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /basic tabs -->


							<!-- Colored tabs -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">Colored tabs</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-solid bg-slate-700 border-0 rounded" id="tabs-solid-target-left">
											<li class="nav-item">
												<a href="#solid-rounded-tab1" class="nav-link" data-toggle="tab">
													<i class="icon-menu7 mr-2"></i>
													Active tab
												</a>
											</li>
											<li class="nav-item">
												<a href="#solid-rounded-tab2" class="nav-link" data-toggle="tab">
													<i class="icon-mention mr-2"></i>
													Inactive tab
												</a>
											</li>
											<li class="nav-item dropdown">
												<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
													<i class="icon-gear mr-2"></i>
													Dropdown
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#solid-rounded-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
													<a href="#solid-rounded-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
												</div>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="solid-rounded-tab1">
												In colored tabs <code>.nav-tabs-component</code> class rounds tabs container and first tab corners.
											</div>

											<div class="tab-pane" id="solid-rounded-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="solid-rounded-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="solid-rounded-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /colored tabs -->

						</div>

						<div class="col-md-6">

							<!-- Justified tabs -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">Justified tabs</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-highlight nav-justified" id="tabs-target-right">
											<li class="nav-item">
												<a href="#highlighted-justified-tab1" class="nav-link" data-toggle="tab">
													<i class="icon-menu7 mr-2"></i>
													Active tab
												</a>
											</li>
											<li class="nav-item">
												<a href="#highlighted-justified-tab2" class="nav-link" data-toggle="tab">
													<i class="icon-mention mr-2"></i>
													Inactive tab
												</a>
											</li>
											<li class="nav-item dropdown">
												<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
													<i class="icon-gear mr-2"></i>
													Dropdown
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#highlighted-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
													<a href="#highlighted-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
												</div>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="highlighted-justified-tab1">
												To use in tabs with equal widths add <code>.nav-justified .nav-tabs-highlight</code> classes.
											</div>

											<div class="tab-pane" id="highlighted-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="highlighted-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="highlighted-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /justified tabs -->


							<!-- Colored justified -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">Colored justified</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-solid bg-slate-700 border-0 rounded nav-justified" id="tabs-solid-target-right">
											<li class="nav-item">
												<a href="#solid-rounded-justified-tab1" class="nav-link" data-toggle="tab">
													<i class="icon-menu7 mr-2"></i>
													Active tab
												</a>
											</li>
											<li class="nav-item">
												<a href="#solid-rounded-justified-tab2" class="nav-link" data-toggle="tab">
													<i class="icon-mention mr-2"></i>
													Inactive tab
												</a>
											</li>
											<li class="nav-item dropdown">
												<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
													<i class="icon-gear mr-2"></i>
													Dropdown
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#solid-rounded-justified-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
													<a href="#solid-rounded-justified-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
												</div>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="solid-rounded-justified-tab1">
												For justified tabs use <code>.nav-justified .bg-* .nav-tabs-component</code> classes.
											</div>

											<div class="tab-pane" id="solid-rounded-justified-tab2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane" id="solid-rounded-justified-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="solid-rounded-justified-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /colored justified -->

						</div>
					</div>
					<!-- /tabs -->


					<!-- Pills -->
					<div class="row">
						<div class="col-md-6">

							<!-- Basic pills -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">Basic pills</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<div class="tabbable">
										<ul class="nav nav-pills" id="pills-target-left">
											<li class="nav-item">
												<a href="#basic-pill1" class="nav-link" data-toggle="tab">
													<i class="icon-menu7 mr-2"></i>
													Active pill
												</a>
											</li>
											<li class="nav-item">
												<a href="#basic-pill2" class="nav-link" data-toggle="tab">
													<i class="icon-mention mr-2"></i>
													Inactive pill
												</a>
											</li>
											<li class="nav-item dropdown">
												<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
													<i class="icon-gear mr-2"></i>
													Dropdown
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#basic-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
													<a href="#basic-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
												</div>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane fade show active" id="basic-pill1">
												Basic pills example using <code>.nav-pills</code> class. Also requires base <code>.nav</code> class.
											</div>

											<div class="tab-pane fade" id="basic-pill2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane fade" id="basic-pill3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane fade" id="basic-pill4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /basic pills -->


							<!-- Pills toolbar -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">Pills toolbar</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<div class="tabbable">
										<ul class="nav nav-pills nav-pills-toolbar nav-pills-bordered" id="pills-toolbar-target-left">
											<li class="nav-item">
												<a href="#toolbar-pill1" class="nav-link" data-toggle="tab">
													<i class="icon-menu7 mr-2"></i>
													Active pill
												</a>
											</li>
											<li class="nav-item">
												<a href="#toolbar-pill2" class="nav-link" data-toggle="tab">
													<i class="icon-mention mr-2"></i>
													Inactive pill
												</a>
											</li>
											<li class="nav-item dropdown">
												<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
													<i class="icon-gear mr-2"></i>
													Dropdown
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#toolbar-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
													<a href="#toolbar-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
												</div>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane fade show active" id="toolbar-pill1">
												Display pills as a toolbar with <code>.nav-pills-toolbar .nav-pills-bordered</code> classes.
											</div>

											<div class="tab-pane fade" id="toolbar-pill2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane fade" id="toolbar-pill3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane fade" id="toolbar-pill4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /pills toolbar -->

						</div>

						<div class="col-md-6">

							<!-- Justified pills -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">Justified pills</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<div class="tabbable">
										<ul class="nav nav-pills nav-justified" id="pills-target-right">
											<li class="nav-item">
												<a href="#justified-pill1" class="nav-link" data-toggle="tab">
													<i class="icon-menu7 mr-2"></i>
													Active pill
												</a>
											</li>
											<li class="nav-item">
												<a href="#justified-pill2" class="nav-link" data-toggle="tab">
													<i class="icon-mention mr-2"></i>
													Inactive pill
												</a>
											</li>
											<li class="nav-item dropdown">
												<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
													<i class="icon-gear mr-2"></i>
													Dropdown
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#justified-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
													<a href="#justified-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
												</div>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane fade show active" id="justified-pill1">
												Easily make pills equal widths of their parent with <code>.nav-justified</code> class.
											</div>

											<div class="tab-pane fade" id="justified-pill2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane fade" id="justified-pill3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane fade" id="justified-pill4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /justified pills -->


							<!-- Toolbar justified -->
							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">Toolbar justified</h6>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="remove"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<div class="tabbable">
										<ul class="nav nav-pills nav-pills-toolbar nav-pills-bordered nav-justified" id="pills-toolbar-target-right">
											<li class="nav-item">
												<a href="#toolbar-justified-pill1" class="nav-link" data-toggle="tab">
													<i class="icon-menu7 mr-2"></i>
													Active pill
												</a>
											</li>
											<li class="nav-item">
												<a href="#toolbar-justified-pill2" class="nav-link" data-toggle="tab">
													<i class="icon-mention mr-2"></i>
													Inactive pill
												</a>
											</li>
											<li class="nav-item dropdown">
												<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
													<i class="icon-gear mr-2"></i>
													Dropdown
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#toolbar-justified-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
													<a href="#toolbar-justified-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
												</div>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane fade show active" id="toolbar-justified-pill1">
												To use in pills with equal widths add <code>.nav-justified .nav-pills-toolbar .nav-pills-bordered</code> classes.
											</div>

											<div class="tab-pane fade" id="toolbar-justified-pill2">
												Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid laeggin.
											</div>

											<div class="tab-pane fade" id="toolbar-justified-pill3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane fade" id="toolbar-justified-pill4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /toolbar justified -->

						</div>
					</div>
					<!-- /pills -->

				</div>
				<!-- /tabs and pills -->

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
