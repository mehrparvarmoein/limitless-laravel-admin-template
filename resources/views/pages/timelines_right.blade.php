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
	<script src="../../../../global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>


	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/timelines.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Timelines</span> - Right Alignment</h4>
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
							<a href="timelines_right" class="breadcrumb-item">Timelines</a>
							<span class="breadcrumb-item active">Right alignment</span>
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

				<!-- Timeline -->
				<div class="timeline timeline-right">
					<div class="timeline-container">

						<!-- Sales stats -->
						<div class="timeline-row">
							<div class="timeline-icon">
								<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt=""></a>
							</div>

							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">Daily statistics</h6>
									<div class="header-elements">
										<span><i class="icon-history mr-2 text-success"></i> Updated 3 hours ago</span>

										<div class="list-icons ml-3">
					                		<a class="list-icons-item" data-action="reload"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<div class="chart-container">
										<div class="chart has-fixed-height" id="daily_statistics"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- /sales stats -->


						<!-- Blog post -->
						<div class="timeline-row">
							<div class="timeline-icon">
								<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="card">
										<div class="card-header header-elements-sm-inline">
											<h6 class="card-title">Himalayan sunset</h6>
											<div class="header-elements">
												<span><i class="icon-checkmark-circle mr-2 text-success"></i> 49 minutes ago</span>
												<div class="list-icons ml-3">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
															<i class="icon-arrow-down12"></i>
														</a>

														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Hide user posts</a>
															<a href="#" class="dropdown-item"><i class="icon-user-block"></i> Block user</a>
															<a href="#" class="dropdown-item"><i class="icon-user-minus"></i> Unfollow user</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-embed"></i> Embed post</a>
															<a href="#" class="dropdown-item"><i class="icon-blocked"></i> Report this post</a>
														</div>
													</div>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											<div class="card-img-actions mb-3">
												<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/cover.jpg" alt="">
												<div class="card-img-actions-overlay card-img">
													<a href="blog_single" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
														<i class="icon-link"></i>
													</a>
												</div>
											</div>

											<h6 class="mb-3">
												<i class="icon-comment-discussion mr-2"></i>
												<a href="#">Jason Ansley</a> commented:
											</h6>

											<blockquote class="blockquote blockquote-bordered py-2 pl-3 mb-0">
												<p class="mb-2 font-size-base">When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.</p>
												<footer class="blockquote-footer">Jason, <cite title="Source Title">10:39 am</cite></footer>
											</blockquote>
										</div>

										<div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
											<ul class="list-inline mb-0">
												<li class="list-inline-item"><a href="#" class="text-default"><i class="icon-eye4 mr-2"></i> 438</a></li>
												<li class="list-inline-item"><a href="#" class="text-default"><i class="icon-comment-discussion mr-2"></i> 71</a></li>
											</ul>

											<a href="#" class="d-inline-block text-default mt-2 mt-sm-0">Read post <i class="icon-arrow-right14 ml-2"></i></a>
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="card">
										<div class="card-header header-elements-sm-inline">
											<h6 class="card-title">Diving lesson in Dubai</h6>
											<div class="header-elements">
												<span><i class="icon-checkmark-circle mr-2 text-success"></i> 3 hours ago</span>
												<div class="list-icons ml-3">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
															<i class="icon-arrow-down12"></i>
														</a>

														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Hide user posts</a>
															<a href="#" class="dropdown-item"><i class="icon-user-block"></i> Block user</a>
															<a href="#" class="dropdown-item"><i class="icon-user-minus"></i> Unfollow user</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-embed"></i> Embed post</a>
															<a href="#" class="dropdown-item"><i class="icon-blocked"></i> Report this post</a>
														</div>
													</div>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											<div class="card-img-actions mb-3">
												<img class="card-img img-fluid" src="../../../../global_assets/images/placeholders/cover.jpg" alt="">
												<div class="card-img-actions-overlay card-img">
													<a href="blog_single" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
														<i class="icon-link"></i>
													</a>
												</div>
											</div>

											<h6 class="mb-3">
												<i class="icon-comment-discussion mr-2"></i>
												<a href="#">Melanie Watson</a> commented:
											</h6>

											<blockquote class="blockquote blockquote-bordered py-2 pl-3 mb-0">
												<p class="mb-2 font-size-base">Pernicious drooled tryingly over crud peaceful gosh yet much following brightly mallard hey gregariously far gosh until earthworm python some impala belched darn a sighed unicorn much changed and astride cat and burned grizzly when jeez wonderful the outside tedious.</p>
												<footer class="blockquote-footer">Melanie, <cite title="Source Title">12:56 am</cite></footer>
											</blockquote>
										</div>

										<div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
											<ul class="list-inline mb-0">
												<li class="list-inline-item"><a href="#" class="text-default"><i class="icon-eye4 mr-2"></i> 438</a></li>
												<li class="list-inline-item"><a href="#" class="text-default"><i class="icon-comment-discussion mr-2"></i> 71</a></li>
											</ul>

											<a href="#" class="d-inline-block text-default mt-2 mt-sm-0">Read post <i class="icon-arrow-right14 ml-2"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /blog post -->


						<!-- Date stamp -->
						<div class="timeline-date text-muted">
							<i class="icon-history mr-2"></i> <span class="font-weight-semibold">Monday</span>, April 18
						</div>
						<!-- /date stamp -->


						<!-- Messages -->
						<div class="timeline-row">
							<div class="timeline-icon">
								<div class="bg-info-400">
									<i class="icon-comment-discussion"></i>
								</div>
							</div>

							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title">Conversation with James</h6>
									<div class="header-elements">
										<div class="list-icons ml-3">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
													<i class="icon-arrow-down12"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Hide user posts</a>
													<a href="#" class="dropdown-item"><i class="icon-user-block"></i> Block user</a>
													<a href="#" class="dropdown-item"><i class="icon-user-minus"></i> Unfollow user</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-embed"></i> Embed post</a>
													<a href="#" class="dropdown-item"><i class="icon-blocked"></i> Report this post</a>
												</div>
											</div>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<ul class="media-list media-chat media-chat-scrollable mb-3">
										<li class="media content-divider justify-content-center text-muted mx-0">Today</li>

										<li class="media media-chat-item-reverse">
											<div class="media-body">
												<div class="media-chat-item">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
												<div class="font-size-sm text-muted mt-2">Tue, 8:12 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
											</div>

											<div class="ml-3">
												<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
													<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
													<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-chat-item">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
												<div class="font-size-sm text-muted mt-2">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
											</div>
										</li>

										<li class="media media-chat-item-reverse">
											<div class="media-body">
												<div class="media-chat-item">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
												<div class="font-size-sm text-muted mt-2">2 hours ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
											</div>

											<div class="ml-3">
												<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
													<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
													<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>

											<div class="media-body">
												<div class="media-chat-item">Grunted smirked and grew less but rewound much despite and impressive via alongside out and gosh easy manatee dear ineffective yikes.</div>
												<div class="font-size-sm text-muted mt-2">13 minutes ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
											</div>
										</li>

										<li class="media media-chat-item-reverse">
											<div class="media-body">
												<div class="media-chat-item"><i class="icon-menu"></i></div>
											</div>

											<div class="ml-3">
												<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
													<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
												</a>
											</div>
										</li>
									</ul>

			                    	<textarea name="enter-message" class="form-control mb-3" rows="3" cols="1" placeholder="Enter your message..."></textarea>

			                    	<div class="d-flex align-items-center">
			                    		<div class="list-icons list-icons-extended">
			                                <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send photo"><i class="icon-file-picture"></i></a>
			                            	<a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send video"><i class="icon-file-video"></i></a>
			                                <a href="#" class="list-icons-item" data-popup="tooltip" data-container="body" title="Send file"><i class="icon-file-plus"></i></a>
			                    		</div>

			                    		<button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-auto"><b><i class="icon-paperplane"></i></b> Send</button>
			                    	</div>
								</div>
							</div>
						</div>
						<!-- /messages -->


						<!-- Video post -->
						<div class="timeline-row">
							<div class="timeline-icon">
								<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="card">
										<div class="card-header header-elements-sm-inline">
											<h6 class="card-title">Peru mountains</h6>
											<div class="header-elements">
												<span><i class="icon-checkmark-circle mr-2 text-success"></i> Today, 8:39 am</span>
												<div class="list-icons ml-3">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
															<i class="icon-arrow-down12"></i>
														</a>

														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Hide user posts</a>
															<a href="#" class="dropdown-item"><i class="icon-user-block"></i> Block user</a>
															<a href="#" class="dropdown-item"><i class="icon-user-minus"></i> Unfollow user</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-embed"></i> Embed post</a>
															<a href="#" class="dropdown-item"><i class="icon-blocked"></i> Report this post</a>
														</div>
													</div>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											<p class="mb-3">Cutting much goodness more from sympathetic unwittingly under wow affluent luckily or distinctly demonstrable strewed lewd outside coaxingly and after and rational alas this fitted. Hippopotamus noticeably oh bridled more until dutiful.</p>

											<div class="card-img embed-responsive embed-responsive-16by9">
												<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126945693?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="card">
										<div class="card-header header-elements-sm-inline">
											<h6 class="card-title">Woodturner master</h6>
											<div class="header-elements">
												<span><i class="icon-checkmark-circle mr-2 text-success"></i> Yesterday, 7:52 am</span>
												<div class="list-icons ml-3">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
															<i class="icon-arrow-down12"></i>
														</a>

														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Hide user posts</a>
															<a href="#" class="dropdown-item"><i class="icon-user-block"></i> Block user</a>
															<a href="#" class="dropdown-item"><i class="icon-user-minus"></i> Unfollow user</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item"><i class="icon-embed"></i> Embed post</a>
															<a href="#" class="dropdown-item"><i class="icon-blocked"></i> Report this post</a>
														</div>
													</div>
							                	</div>
						                	</div>
										</div>

										<div class="card-body">
											<p class="mb-3">Bewitchingly amid heard by llama glanced fussily quetzal more that overcame eerie goodness badger woolly where since gosh accurate irrespective that pounded much winked urgent and furtive house gosh one while this more.</p>

											<div class="card-img embed-responsive embed-responsive-16by9">
												<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126545288?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /video post -->


						<!-- Tasks -->
						<div class="timeline-row">
							<div class="timeline-icon">
								<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="card border-left-3 border-left-primary rounded-left-0">
										<div class="card-body">
											<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
												<div>
													<h6><a href="task_manager_detailed">#24. Create UI design model</a></h6>
													<p class="mb-3">One morning, when Gregor Samsa woke from troubled..</p>

								                	<a href="#">
								                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
							                		</a>
								                	<a href="#">
								                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
							                		</a>
								                	<a href="#">
								                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
							                		</a>
								                	<a href="#" class="text-default">&nbsp;<i class="icon-plus22"></i></a>
												</div>

												<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
													<li><span class="text-muted">28 January, 2015</span></li>
													<li class="dropdown">
								                		Priority: &nbsp; 
														<a href="#" class="badge badge-primary align-top dropdown-toggle" data-toggle="dropdown">Normal</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
															<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-orange"></span> High priority</a>
															<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-success-400"></span> Normal priority</a>
															<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey"></span> Low priority</a>
														</div>
													</li>
													<li><a href="#">Eternity app</a></li>
												</ul>
											</div>
										</div>

										<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
											<span>Due: <span class="font-weight-semibold">23 hours</span></span>

											<ul class="list-inline mb-0 mt-2 mt-sm-0">
												<li class="list-inline-item dropdown">
													<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">Open</a>

													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item active">Open</a>
														<a href="#" class="dropdown-item">On hold</a>
														<a href="#" class="dropdown-item">Resolved</a>
														<a href="#" class="dropdown-item">Closed</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item">Dublicate</a>
														<a href="#" class="dropdown-item">Invalid</a>
														<a href="#" class="dropdown-item">Wontfix</a>
													</div>
												</li>
												<li class="list-inline-item dropdown">
													<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
														<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
														<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
														<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="card border-left-3 border-left-danger rounded-left-0">
										<div class="card-body">
											<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
												<div>
													<h6 class=""><a href="task_manager_detailed">#23. New icons set for an iOS app</a></h6>
													<p class="mb-3">A collection of textile samples lay spread out on the table..</p>

								                	<a href="#">
								                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
							                		</a>
								                	<a href="#">
								                		<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="36" height="36" alt="">
							                		</a>
								                	<a href="#" class="text-default">&nbsp;<i class="icon-plus22"></i></a>
												</div>

												<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
													<li><span class="text-muted">20 January, 2015</span></li>
													<li class="dropdown">
								                		Priority: &nbsp; 
														<a href="#" class="badge badge-danger align-top dropdown-toggle" data-toggle="dropdown">Highest</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item active"><span class="badge badge-mark mr-2 border-danger"></span> Blocker</a>
															<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-orange"></span> High priority</a>
															<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-success-400"></span> Normal priority</a>
															<a href="#" class="dropdown-item"><span class="badge badge-mark mr-2 border-grey"></span> Low priority</a>
														</div>
													</li>
													<li><a href="#">Eternity app</a></li>
												</ul>
											</div>
										</div>

										<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
											<span>Due: <span class="font-weight-semibold">18 hours</span></span>

											<ul class="list-inline mb-0 mt-2 mt-sm-0">
												<li class="list-inline-item dropdown">
													<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown">On hold</a>

													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item">Open</a>
														<a href="#" class="dropdown-item active">On hold</a>
														<a href="#" class="dropdown-item">Resolved</a>
														<a href="#" class="dropdown-item">Closed</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item">Dublicate</a>
														<a href="#" class="dropdown-item">Invalid</a>
														<a href="#" class="dropdown-item">Wontfix</a>
													</div>
												</li>
												<li class="list-inline-item dropdown">
													<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-alarm-add"></i> Check in</a>
														<a href="#" class="dropdown-item"><i class="icon-attachment"></i> Attach screenshot</a>
														<a href="#" class="dropdown-item"><i class="icon-rotate-ccw2"></i> Reassign</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-pencil7"></i> Edit task</a>
														<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /tasks -->


						<!-- Date stamp -->
						<div class="timeline-date text-muted">
							<i class="icon-history mr-2"></i> <span class="font-weight-semibold">Tuesday</span>, April 19
						</div>
						<!-- /date stamp -->


						<!-- Invoices -->
						<div class="timeline-row">
							<div class="timeline-icon">
								<div class="bg-warning-400">
									<i class="icon-cash3"></i>
								</div>
							</div>

							<div class="card">
								<div class="card-header header-elements-sm-inline">
									<h6 class="card-title font-weight-semibold">Weekly sales statistics</h6>
									<div class="header-elements">
										<span>
											<i class="icon-arrow-up22 text-success"></i>
											<span class="font-weight-semibold">23.7%</span>
										</span>

										<div class="list-icons ml-3">
					                		<a class="list-icons-item" data-action="collapse"></a>
					                		<a class="list-icons-item" data-action="reload"></a>
					                		<a class="list-icons-item" data-action="close"></a>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<div class="chart-container">
										<div class="chart has-fixed-height" id="weekly_statistics"></div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="card border-left-3 border-left-danger rounded-left-0">
										<div class="card-body">
											<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
												<div>
													<h6 class="font-weight-semibold">Leonardo Fellini</h6>
													<ul class="list list-unstyled mb-0">
														<li>Invoice #: &nbsp;0028</li>
														<li>Issued on: <span class="font-weight-semibold">2015/01/25</span></li>
													</ul>
												</div>

												<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
													<h6 class="font-weight-semibold">$8,750</h6>
													<ul class="list list-unstyled mb-0">
														<li>Method: <span class="font-weight-semibold">SWIFT</span></li>
														<li class="dropdown">
															Status: &nbsp;
															<a href="#" class="badge bg-danger-400 align-top dropdown-toggle" data-toggle="dropdown">Overdue</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="#" class="dropdown-item active"><i class="icon-alert"></i> Overdue</a>
																<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
																<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> Paid</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
																<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
											<span>
												<span class="badge badge-mark border-danger mr-2"></span>
												Due:
												<span class="font-weight-semibold">2015/02/25</span>
											</span>

											<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
												<li class="list-inline-item">
													<a href="#" class="text-default"><i class="icon-eye8"></i></a>
												</li>
												<li class="list-inline-item dropdown">
													<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
														<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
														<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="card border-left-3 border-left-success rounded-left-0">
										<div class="card-body">
											<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
												<div>
													<h6 class="font-weight-semibold">Rebecca Manes</h6>
													<ul class="list list-unstyled mb-0">
														<li>Invoice #: &nbsp;0027</li>
														<li>Issued on: <span class="font-weight-semibold">2015/02/24</span></li>
													</ul>
												</div>

												<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
													<h6 class="font-weight-semibold">$5,100</h6>
													<ul class="list list-unstyled mb-0">
														<li>Method: <span class="font-weight-semibold">Paypal</span></li>
														<li class="dropdown">
															Status: &nbsp;
															<a href="#" class="badge bg-success-400 align-top dropdown-toggle" data-toggle="dropdown">Paid</a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="#" class="dropdown-item"><i class="icon-alert"></i> Overdue</a>
																<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Pending</a>
																<a href="#" class="dropdown-item active"><i class="icon-checkmark3"></i> Paid</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item"><i class="icon-spinner2 spinner"></i> On hold</a>
																<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Canceled</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
											<span>
												<span class="badge badge-mark border-success mr-2"></span>
												Due:
												<span class="font-weight-semibold">2015/03/24</span>
											</span>

											<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
												<li class="list-inline-item">
													<a href="#" class="text-default"><i class="icon-eye8"></i></a>
												</li>
												<li class="list-inline-item dropdown">
													<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="icon-printer"></i> Print invoice</a>
														<a href="#" class="dropdown-item"><i class="icon-file-download"></i> Download invoice</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit invoice</a>
														<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remove invoice</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /invoices -->


						<!-- Schedule -->
						<div class="timeline-row">
							<div class="timeline-icon">
								<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
							</div>

							<div class="card">
								<div class="card-header header-elements-inline">
									<h6 class="card-title font-weight-semibold">Anna's schedule</h6>
									<div class="header-elements">
										<div class="list-icons">
											<div class="list-icons-item dropdown">
												<a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
													<i class="icon-arrow-down12"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Hide user posts</a>
													<a href="#" class="dropdown-item"><i class="icon-user-block"></i> Block user</a>
													<a href="#" class="dropdown-item"><i class="icon-user-minus"></i> Unfollow user</a>
													<div class="dropdown-divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-embed"></i> Embed post</a>
													<a href="#" class="dropdown-item"><i class="icon-blocked"></i> Report this post</a>
												</div>
											</div>
					                	</div>
				                	</div>
								</div>

								<div class="card-body">
									<div class="my-schedule"></div>
								</div>
							</div>
						</div>
						<!-- /schedule -->

					</div>
			    </div>
			    <!-- /timeline -->

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
