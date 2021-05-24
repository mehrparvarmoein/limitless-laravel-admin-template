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
	<script src="../../../../global_assets/js/plugins/ui/fullcalendar/core/main.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/fullcalendar/daygrid/main.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/fullcalendar/timegrid/main.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/fullcalendar/interaction/main.min.js"></script>
	<script src="../../../../global_assets/js/plugins/editors/ckeditor/ckeditor.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/learning_detailed.js"></script>
	<!-- /Page JS files -->

</head>

<body class="sidebar-xs">

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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Learning</span> - Detailed</h4>
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
							<a href="learning_detailed" class="breadcrumb-item">Learning</a>
							<span class="breadcrumb-item active">Detailed</span>
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

				<!-- Inner container -->
				<div class="d-flex align-items-start flex-column flex-md-row">

					<!-- Left content -->
					<div class="w-100 overflow-auto order-2 order-md-1">

						<!-- Course overview -->
						<div class="card">
							<div class="card-header header-elements-md-inline">
								<h5 class="card-title">Data Governance course</h5>

								<div class="header-elements">
									<ul class="list-inline list-inline-dotted mb-0 mt-2 mt-md-0">
										<li class="list-inline-item">Rating: <span class="font-weight-semibold">4.85</span></li>
										<li class="list-inline-item">
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<i class="icon-star-full2 font-size-base text-warning-300"></i>
											<span class="text-muted ml-1">(439)</span>
										</li>
									</ul>
			                	</div>
							</div>

							<div class="nav-tabs-responsive bg-light border-top">
								<ul class="nav nav-tabs nav-tabs-bottom flex-nowrap mb-0">
									<li class="nav-item"><a href="#course-overview" class="nav-link" data-toggle="tab"><i class="icon-menu7 mr-2"></i> Overview</a></li>
									<li class="nav-item"><a href="#course-attendees" class="nav-link" data-toggle="tab"><i class="icon-people mr-2"></i> Attendees</a></li>
									<li class="nav-item"><a href="#course-schedule" class="nav-link" data-toggle="tab"><i class="icon-calendar3 mr-2"></i> Schedule</a></li>
								</ul>
							</div>

							<div class="tab-content">
								<div class="tab-pane fade show active" id="course-overview">
									<div class="card-body">
										<div class="mt-1 mb-4">
											<h6 class="font-weight-semibold">Course overview</h6>
											<p>Then sluggishly this camel learned woodchuck far stretched unspeakable notwithstanding the walked owing stung mellifluously glumly rooster more examined one that combed until a less less witless pouted up voluble timorously glared elaborate giraffe steady while grinned and got one beaver to walked. Connected picked rashly ocelot flirted while wherever unwound much more one inside emotionally well much woolly amidst upon far burned ouch sadistically became.</p>
											<p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.</p>
										</div>

										<h6 class="font-weight-semibold">What you will learn</h6>
										<p class="mb-3">Some cow goose out and sweeping wow the skillfully goodness one crazily far some jeez darn well so peevish pending nudged categorically in between about much alas handsome intolerable devotedly helpfully smiled momentously next much this this next sweepingly far. Together prim and limpet much extravagantly quail longing a ouch that walking a jeepers flamingo more.</p>

										<div class="row">
											<div class="col-sm-6">
												<div class="mb-4">
													<dl>
						                                <dt class="font-size-sm font-weight-bold text-uppercase">
						                                	<i class="icon-checkmark3 text-blue mr-2"></i>
						                                	Salamander much that on much
					                                	</dt>
						                                <dd>Like partook magic this enthusiastic tasteful far crud otter this the ferret honey iguana. Together prim and limpet much extravagantly quail longing.</dd>

						                                <dt class="font-size-sm font-weight-bold text-uppercase">
						                                	<i class="icon-checkmark3 text-blue mr-2"></i>
						                                	Well far some raccoon
					                                	</dt>
						                                <dd>Python laudably euphemistically since this copious much human this briefly hello ouch less one diligent however impotently made gave a slick up much.</dd>

						                                <dt class="font-size-sm font-weight-bold text-uppercase">
						                                	<i class="icon-checkmark3 text-blue mr-2"></i>
						                                	Goldfish rapidly that far
					                                	</dt>
						                                <dd>Well far some raccoon knew goose and crud behind salmon amenable oh the poignant sufficiently yikes a naked showed far reindeer imminently.</dd>

						                                <dt class="font-size-sm font-weight-bold text-uppercase">
						                                	<i class="icon-checkmark3 text-blue mr-2"></i>
						                                	Gregor then turned to look out
					                                	</dt>
						                                <dd>Then sluggishly this camel learned woodchuck far stretched unspeakable notwithstanding the walked owing stung mellifluously glumly rooster.</dd>
						                            </dl>
					                            </div>
											</div>

											<div class="col-sm-6">
												<div class="mb-4">
													<dl>
						                                <dt class="font-size-sm font-weight-bold text-uppercase">
						                                	<i class="icon-checkmark3 text-blue mr-2"></i>
						                                	Misunderstood cuffed more depending
					                                	</dt>
						                                <dd>And earthworm dear arose bald agilely sad so below cowered within ceremonially therefore via much this symbolically and newt capably.</dd>

						                                <dt class="font-size-sm font-weight-bold text-uppercase">
						                                	<i class="icon-checkmark3 text-blue mr-2"></i>
						                                	Voluble much saddled mechanic
					                                	</dt>
						                                <dd>Much took between less goodness jay mallard kneeled gnashed this up strong cooperative. A collection of textile samples lay spread.</dd>

						                                <dt class="font-size-sm font-weight-bold text-uppercase">
						                                	<i class="icon-checkmark3 text-blue mr-2"></i>
						                                	Before some one more
					                                	</dt>
						                                <dd>Pending some contrary rabbit up that the more conditionally ouch confidently far so was darn logic thus dove the juicily because that placed otter.</dd>

						                                <dt class="font-size-sm font-weight-bold text-uppercase">
						                                	<i class="icon-checkmark3 text-blue mr-2"></i>
						                                	So slit more darn hey well wore
					                                	</dt>
						                                <dd>Well far some raccoon knew goose and crud behind salmon amenable oh the poignant sufficiently yikes a naked showed far reindeer imminently.</dd>
						                            </dl>
					                            </div>
											</div>
					                    </div>

					                    <h6 class="font-weight-semibold">Course program</h6>
										So slit more darn hey well wore submissive savage this shark aardvark fumed thoughtfully much drank when angelfish so outgrew some alas vigorously therefore warthog superb less oh groundhog less alas gibbered barked some hey despicably with aesthetic hamster jay by luckily. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame
									</div>

									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Lessons</th>
													<th>Name</th>
													<th>Description</th>
													<th>Duration</th>
													<th>Status</th>
													<th>Date</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td><a href="#">Introduction</a></td>
													<td>One morning, when Gregor Samsa woke from troubled dreams, he found himself</td>
													<td>10 hours</td>
													<td><span class="badge bg-secondary">Closed</span></td>
													<td>Oct 21st, 2016</td>
												</tr>
												<tr>
													<td>2</td>
													<td><a href="#">Design tools</a></td>
													<td>He lay on his armour-like back, and if he lifted his head a little he could</td>
													<td>20 hours</td>
													<td><span class="badge bg-primary">Registration</span></td>
													<td>Oct 22nd, 2016</td>
												</tr>
												<tr>
													<td>3</td>
													<td><a href="#">Workspace</a></td>
													<td>The bedding was hardly able to cover it and seemed ready to slide off moment</td>
													<td>35 hours</td>
													<td><span class="badge bg-danger">On time</span></td>
													<td>Oct 23rd, 2016</td>
												</tr>
												<tr>
													<td>4</td>
													<td><a href="#">Creating effects</a></td>
													<td>A collection of textile samples lay spread out on the table - Samsa salesman</td>
													<td>25 hours</td>
													<td><span class="badge bg-danger">On time</span></td>
													<td>Oct 24th, 2016</td>
												</tr>
												<tr>
													<td>5</td>
													<td><a href="#">Digital design</a></td>
													<td>Drops of rain could be heard hitting the pane, which made him feel quite sad</td>
													<td>50 hours</td>
													<td><span class="badge bg-danger">On time</span></td>
													<td>Oct 25th, 2016</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<div class="tab-pane fade" id="course-attendees">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Hanna Dorman</h6>
															<span class="text-muted">UX/UI designer</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Benjamin Loretti</h6>
															<span class="text-muted">Network engineer</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Vanessa Aurelius</h6>
															<span class="text-muted">Front end guru</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">William Brenson</h6>
															<span class="text-muted">Chief officer</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">James Alexander</h6>
															<span class="text-muted">Lead developer</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Nathan Jacobson</h6>
															<span class="text-muted">Lead UX designer</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Margo Baker</h6>
															<span class="text-muted">Sales manager</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Barbara Walden</h6>
															<span class="text-muted">SEO specialist</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Lucy North</h6>
															<span class="text-muted">UX/UI designer</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Vicky Barna</h6>
															<span class="text-muted">Network engineer</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Hugo Bills</h6>
															<span class="text-muted">Front end guru</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Tony Gurrano</h6>
															<span class="text-muted">CEO and Founder</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Jeremy Victorino</h6>
															<span class="text-muted">Marketing specialist</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Monica Smith</h6>
															<span class="text-muted">Financial officer</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Bastian Miller</h6>
															<span class="text-muted">Web developer</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Jordana Mills</h6>
															<span class="text-muted">Designer</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Buzz Brenson</h6>
															<span class="text-muted">Business developer</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Zachary Willson</h6>
															<span class="text-muted">Network engineer</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">William Miles</h6>
															<span class="text-muted">Front end dev</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-3 col-md-6">
												<div class="card card-body">
													<div class="media">
														<div class="mr-3">
															<a href="#">
																<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
															</a>
														</div>

														<div class="media-body">
															<h6 class="mb-0">Freddy Walden</h6>
															<span class="text-muted">Marketing specialist</span>
														</div>

														<div class="ml-3 align-self-center">
															<div class="list-icons">
										                    	<div class="list-icons-item dropdown">
											                    	<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											                    	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
																		<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
																		<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
																		<div class="dropdown-divider"></div>
																		<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
																	</div>
										                    	</div>
									                    	</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="d-flex justify-content-center mt-3 mb-3">
											<ul class="pagination">
												<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-right"></i></a></li>
												<li class="page-item active"><a href="#" class="page-link">1</a></li>
												<li class="page-item"><a href="#" class="page-link">2</a></li>
												<li class="page-item"><a href="#" class="page-link">3</a></li>
												<li class="page-item"><a href="#" class="page-link">4</a></li>
												<li class="page-item"><a href="#" class="page-link">5</a></li>
												<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-left"></i></a></li>
											</ul>
										</div>
									</div>
								</div>

								<div class="tab-pane fade" id="course-schedule">
									<div class="card-body">
										<div class="schedule"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- /course overview -->


						<!-- About author -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">About the author</h5>

								<div class="header-elements">
									<div class="list-icons list-icons-extended">
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Google Drive"><i class="icon-google-drive"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Twitter"><i class="icon-twitter"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Github"><i class="icon-github"></i></a>
				                    	<a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Linked In"><i class="icon-linkedin"></i></a>
			                    	</div>
								</div>
							</div>

							<div class="media card-body flex-column flex-md-row m-0">
								<div class="mr-md-3 mb-2 mb-md-0">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="64" height="64" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">James Alexander</h6>
									<p>So slit more darn hey well wore submissive savage this shark aardvark fumed thoughtfully much drank when angelfish so outgrew some alas vigorously therefore warthog superb less oh groundhog less alas gibbered barked some hey despicably with aesthetic hamster jay by luckily</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item"><a href="#">Author profile</a></li>
										<li class="list-inline-item"><a href="#">All courses by James</a></li>
										<li class="list-inline-item"><a href="#">http://website.com</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /about author -->


						<!-- Discussion -->
						<div class="card">
							<div class="card-header header-elements-sm-inline">
								<h6 class="card-title font-weight-semibold">Discussion</h6>
								<div class="header-elements">
									<ul class="list-inline list-inline-dotted text-muted mb-0">
										<li class="list-inline-item">42 comments</li>
										<li class="list-inline-item">75 pending review</li>
									</ul>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media flex-column flex-md-row">
										<div class="mr-md-3 mb-2 mb-md-0">
											<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="38" height="38" alt=""></a>
										</div>

										<div class="media-body">
											<div class="media-title">
												<a href="#" class="font-weight-semibold">William Jennings</a>
												<span class="text-muted ml-3">Just now</span>
											</div>

											<p>He moonlight difficult engrossed an it sportsmen. Interested has all devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to.</p>

											<ul class="list-inline list-inline-dotted font-size-sm">
												<li class="list-inline-item">114 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
												<li class="list-inline-item"><a href="#">Reply</a></li>
												<li class="list-inline-item"><a href="#">Edit</a></li>
											</ul>
										</div>
									</li>

									<li class="media flex-column flex-md-row">
										<div class="mr-md-3 mb-2 mb-md-0">
											<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="38" height="38" alt=""></a>
										</div>

										<div class="media-body">
											<div class="media-title">
												<a href="#" class="font-weight-semibold">Margo Baker</a>
												<span class="text-muted ml-3">5 minutes ago</span>
											</div>

											<p>Place voice no arise along to. Parlors waiting so against me no. Wishing calling are warrant settled was luckily. Express besides it present if at an opinion visitor.</p>

											<ul class="list-inline list-inline-dotted font-size-sm">
												<li class="list-inline-item">90 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
												<li class="list-inline-item"><a href="#">Reply</a></li>
												<li class="list-inline-item"><a href="#">Edit</a></li>
											</ul>
										</div>
									</li>

									<li class="media flex-column flex-md-row">
										<div class="mr-md-3 mb-2 mb-md-0">
											<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="38" height="38" alt=""></a>
										</div>

										<div class="media-body">
											<div class="media-title">
												<a href="#" class="font-weight-semibold">James Alexander</a>
												<span class="text-muted ml-3">7 minutes ago</span>
											</div>

											<p>Savings her pleased are several started females met. Short her not among being any. Thing of judge fruit charm views do. Miles mr an forty along as he.</p>

											<ul class="list-inline list-inline-dotted font-size-sm">
												<li class="list-inline-item">70 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
												<li class="list-inline-item"><a href="#">Reply</a></li>
												<li class="list-inline-item"><a href="#">Edit</a></li>
											</ul>

											<div class="media flex-column flex-md-row">
												<div class="mr-md-3 mb-2 mb-md-0">
													<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="38" height="38" alt=""></a>
												</div>

												<div class="media-body">
													<div class="media-title">
														<a href="#" class="font-weight-semibold">Jack Cooper</a>
														<span class="text-muted ml-3">10 minutes ago</span>
													</div>

													<p>She education get middleton day agreement performed preserved unwilling. Do however as pleased offence outward beloved by present. By outward neither he so covered.</p>

													<ul class="list-inline list-inline-dotted font-size-sm">
														<li class="list-inline-item">67 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
														<li class="list-inline-item"><a href="#">Reply</a></li>
														<li class="list-inline-item"><a href="#">Edit</a></li>
													</ul>

													<div class="media flex-column flex-md-row">
														<div class="mr-md-3 mb-2 mb-md-0">
															<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="38" height="38" alt=""></a>
														</div>

														<div class="media-body">
															<div class="media-title">
																<a href="#" class="font-weight-semibold">Natalie Wallace</a>
																<span class="text-muted ml-3">1 hour ago</span>
															</div>

															<p>Juvenile proposal betrayed he an informed weddings followed. Precaution day see imprudence sympathize principles. At full leaf give quit to in they up.</p>

															<ul class="list-inline list-inline-dotted font-size-sm">
																<li class="list-inline-item">54 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
																<li class="list-inline-item"><a href="#">Reply</a></li>
																<li class="list-inline-item"><a href="#">Edit</a></li>
															</ul>
														</div>
													</div>

													<div class="media flex-column flex-md-row">
														<div class="mr-md-3 mb-2 mb-md-0">
															<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="38" height="38" alt=""></a>
														</div>

														<div class="media-body">
															<div class="media-title">
																<a href="#" class="font-weight-semibold">Nicolette Grey</a>
																<span class="text-muted ml-3">2 hours ago</span>
															</div>

															<p>Although moreover mistaken kindness me feelings do be marianne. Son over own nay with tell they cold upon are. Cordial village and settled she ability law herself.</p>

															<ul class="list-inline list-inline-dotted font-size-sm">
																<li class="list-inline-item">41 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
																<li class="list-inline-item"><a href="#">Reply</a></li>
																<li class="list-inline-item"><a href="#">Edit</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>

									<li class="media flex-column flex-md-row">
										<div class="mr-md-3 mb-2 mb-md-0">
											<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="38" height="38" alt=""></a>
										</div>

										<div class="media-body">
											<div class="media-title">
												<a href="#" class="font-weight-semibold">Victoria Johnson</a>
												<span class="text-muted ml-3">3 hours ago</span>
											</div>

											<p>Finished why bringing but sir bachelor unpacked any thoughts. Unpleasing unsatiable particular inquietude did nor sir.</p>

											<ul class="list-inline list-inline-dotted font-size-sm">
												<li class="list-inline-item">32 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
												<li class="list-inline-item"><a href="#">Reply</a></li>
												<li class="list-inline-item"><a href="#">Edit</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</div>

							<hr class="m-0">

							<div class="card-body">
								<h6 class="mb-3">Add comment</h6>
								<div class="mb-3">
									<div id="add-comment">Get his declared appetite distance his together now families. Friends am himself at on norland it viewing. Suspected elsewhere you belonging continued commanded she...</div>
								</div>
								
								<div class="text-right">
									<button type="button" class="btn bg-blue"><i class="icon-plus22 mr-1"></i> Add comment</button>
								</div>
							</div>
						</div>
						<!-- /discussion -->

					</div>
					<!-- /left content -->


					<!-- Right sidebar component -->
					<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

						<!-- Sidebar content -->
						<div class="sidebar-content">

							<!-- Course details -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Course details</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body pb-0">
									<a href="#" class="btn bg-teal-400 btn-block mb-2">Take course</a>
								</div>

								<table class="table table-borderless table-xs border-top-0 my-2">
									<tbody>
										<tr>
											<td class="font-weight-semibold">Duration:</td>
											<td class="text-right">10 hours</td>
										</tr>
										<tr>
											<td class="font-weight-semibold">Status:</td>
											<td class="text-right">
												<span class="badge bg-primary">Registration</span>
											</td>
										</tr>
										<tr>
											<td class="font-weight-semibold">Start date:</td>
											<td class="text-right">Nov 1st, 2016</td>
										</tr>
										<tr>
											<td class="font-weight-semibold">End date:</td>
											<td class="text-right">Nov 20th, 2016</td>
										</tr>
										<tr>
											<td class="font-weight-semibold">Lessons:</td>
											<td class="text-right">12 lessons</td>
										</tr>
										<tr>
											<td class="font-weight-semibold">Trainer:</td>
											<td class="text-right"><a href="#">Eugene Kopyov</a></td>
										</tr>
										<tr>
											<td class="font-weight-semibold">Attendees:</td>
											<td class="text-right">382 people</td>
										</tr>
										<tr>
											<td class="font-weight-semibold">Rating:</td>
											<td class="text-right text-muted">
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
												<i class="icon-star-full2 font-size-base text-warning-300"></i>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- /course details -->


							<!-- Categories -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Categories</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body p-0">
									<div class="nav nav-sidebar mb-2">
										<li class="nav-item-header font-size-xs text-uppercase">Development</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												Frontend development
												<span class="badge badge-secondary badge-pill ml-auto">37</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												Backend development
												<span class="badge badge-secondary badge-pill ml-auto">58</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												Engineering
												<span class="badge badge-secondary badge-pill ml-auto">39</span>
											</a>
										</li>

										<li class="nav-item-header font-size-xs text-uppercase">Design</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												Interface design
												<span class="badge badge-secondary badge-pill ml-auto">21</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												User experience
												<span class="badge badge-secondary badge-pill ml-auto">10</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												Web design
												<span class="badge badge-secondary badge-pill ml-auto">26</span>
											</a>
										</li>
									</div>
								</div>
							</div>
							<!-- /categories -->


							<!-- Latest attendees -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Latest attendees</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="media-list">
										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold text-default">James Alexander</a>
												<div class="font-size-sm text-muted">Santa Ana, CA.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-success"></span>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold text-default">Jeremy Victorino</a>
												<div class="font-size-sm text-muted">Dowagiac, MI.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-danger"></span>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold text-default">Margo Baker</a>
												<div class="font-size-sm text-muted">Kasaan, AK.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-success"></span>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold text-default">Beatrix Diaz</a>
												<div class="font-size-sm text-muted">Neenah, WI.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-warning"></span>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>
											<div class="media-body">
												<a href="#" class="media-title font-weight-semibold text-default">Richard Vango</a>
												<div class="font-size-sm text-muted">Grapevine, TX.</div>
											</div>
											<div class="ml-3 align-self-center">
												<span class="badge badge-mark border-grey-400"></span>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /latest attendees -->


							<!-- Our trainers -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Our trainers</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="media-list">
										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Rebecca Jameson</div>
												<span class="font-size-sm text-muted">Web developer</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Walter Sommers</div>
												<span class="font-size-sm text-muted">Lead developer</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Otto Gerwald</div>
												<span class="font-size-sm text-muted">Front end developer</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Vince Satmann</div>
												<span class="font-size-sm text-muted">UX expert</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
													</div>
												</div>
											</div>
										</li>

										<li class="media">
											<a href="#" class="mr-3">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
											</a>

											<div class="media-body">
												<div class="font-weight-semibold">Jason Leroy</div>
												<span class="font-size-sm text-muted">SEO specialist</span>
											</div>

											<div class="ml-3 align-self-center">
												<div class="dropdown">
													<a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
														<a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
														<a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /our trainers -->


							<!-- Upcoming courses -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Upcoming courses</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<ul class="media-list">
										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">02</h5>
												<div class="font-size-sm text-muted line-height-1">Nov</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">Web development strategy</span> course by <a href="#">James Franko</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">120 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-half font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">15</h5>
												<div class="font-size-sm text-muted line-height-1">Nov</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">Business development</span> course by <a href="#">Jeremy Victorino</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">40 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-half font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">01</h5>
												<div class="font-size-sm text-muted line-height-1">Dec</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">Digital marketing</span> course by <a href="#">Monica Smith</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">100 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">15</h5>
												<div class="font-size-sm text-muted line-height-1">Dec</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">User experience design</span> course by <a href="#">Buzz Brenson</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">90 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-empty3 font-size-base text-warning-300"></i>
														<i class="icon-star-half font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">20</h5>
												<div class="font-size-sm text-muted line-height-1">Dec</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">Digital painting</span> course by <a href="#">Zachary Willson</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">120 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<h5 class="text-center text-success mb-0">04</h5>
												<div class="font-size-sm text-muted line-height-1">Jan</div>												
											</div>

											<div class="media-body">
												<span class="font-weight-semibold">Financial analysis</span> course by <a href="#">Dori Laperriere</a>
												<ul class="list-inline list-inline-dotted mt-1 mb-0">
													<li class="list-inline-item"><span class="text-muted">60 hours</span></li>
													<li class="list-inline-item">
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
														<i class="icon-star-full2 font-size-base text-warning-300"></i>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /upcoming courses -->

						</div>
						<!-- /sidebar content -->

					</div>
					<!-- /right sidebar component -->

				</div>
				<!-- /inner container -->

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
