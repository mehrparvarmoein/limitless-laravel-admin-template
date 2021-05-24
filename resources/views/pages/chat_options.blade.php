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
	<script src="../../../../global_assets/js/demo_pages/chat_layouts.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Conversation</span> - Options</h4>
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
							<a href="chat_options" class="breadcrumb-item">Conversation</a>
							<span class="breadcrumb-item active">Options</span>
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

				<!-- Inside tabs -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Chat inside tabs
					</h6>
					<span class="text-muted d-block">Place conversation inside tabs or pills</span>
				</div>

				<div class="card">
					<div class="nav-tabs-responsive">
						<ul class="nav nav-tabs nav-tabs-bottom flex-nowrap mb-0">
							<li class="nav-item">
								<a href="#james" class="nav-link" data-toggle="tab">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="rounded-circle mr-2" width="20" height="20">
									James
									<span class="badge badge-mark ml-2 border-danger"></span>
								</a>
							</li>

							<li class="nav-item">
								<a href="#william" class="nav-link" data-toggle="tab">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="rounded-circle mr-2" width="20" height="20">
									William
									<span class="badge badge-mark ml-2 border-success"></span>
								</a>
							</li>

							<li class="nav-item">
								<a href="#jared" class="nav-link" data-toggle="tab">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="rounded-circle mr-2" width="20" height="20">
									Jared
									<span class="badge badge-mark ml-2 border-warning"></span>
								</a>
							</li>

							<li class="nav-item">
								<a href="#victoria" class="nav-link" data-toggle="tab">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="" class="rounded-circle mr-2" width="20" height="20">
									Victoria
									<span class="badge badge-mark ml-2 border-grey-300"></span>
								</a>
							</li>

							<li class="nav-item dropdown ml-md-auto">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-boundary="window"><i class="icon-cog7 mr-2"></i> Options</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="#chat-tab3" class="dropdown-item" data-toggle="tab">Dropdown tab</a>
									<a href="#chat-tab4" class="dropdown-item" data-toggle="tab">Another tab</a>
								</div>
							</li>
						</ul>
					</div>

					<div class="tab-content card-body border-top-0 rounded-0 rounded-bottom mb-0">
						<div class="tab-pane fade show active" id="james">
							<ul class="media-list media-chat mb-3">
								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-chat-item">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
										<div class="font-size-sm text-muted mt-2">Tue, 10:28 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>
								</li>

								<li class="media media-chat-item-reverse">
									<div class="media-body">
										<div class="media-chat-item">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much</div>
										<div class="font-size-sm text-muted mt-2">Mon, 10:24 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>

									<div class="ml-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-chat-item">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
										<div class="font-size-sm text-muted mt-2">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>
								</li>

								<li class="media content-divider justify-content-center text-muted mx-0">
									<span class="px-2">New messages</span>
								</li>

								<li class="media media-chat-item-reverse">
									<div class="media-body">
										<div class="media-chat-item">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
										<div class="font-size-sm text-muted mt-2">2 hours ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>

									<div class="ml-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#">
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
										<a href="#">
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

						<div class="tab-pane fade" id="william">
							<ul class="media-list media-chat media-chat-inverse mb-3">
								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-chat-item">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
										<div class="font-size-sm text-muted mt-2">Tue, 10:28 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>
								</li>

								<li class="media media-chat-item-reverse">
									<div class="media-body">
										<div class="media-chat-item">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much</div>
										<div class="font-size-sm text-muted mt-2">Mon, 10:24 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>

									<div class="ml-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-chat-item">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
										<div class="font-size-sm text-muted mt-2">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>
								</li>

								<li class="media content-divider justify-content-center text-muted mx-0">
									<span class="px-2">New messages</span>
								</li>

								<li class="media media-chat-item-reverse">
									<div class="media-body">
										<div class="media-chat-item">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
										<div class="font-size-sm text-muted mt-2">2 hours ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>

									<div class="ml-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#">
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
										<a href="#">
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

						<div class="tab-pane fade" id="jared">
							<ul class="media-list media-chat mb-3">
								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-chat-item">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
										<div class="font-size-sm text-muted mt-2">Tue, 10:28 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>
								</li>

								<li class="media media-chat-item-reverse">
									<div class="media-body">
										<div class="media-chat-item">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much</div>
										<div class="font-size-sm text-muted mt-2">Mon, 10:24 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>

									<div class="ml-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-chat-item">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
										<div class="font-size-sm text-muted mt-2">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>
								</li>

								<li class="media content-divider justify-content-center text-muted mx-0">
									<span class="px-2">New messages</span>
								</li>

								<li class="media media-chat-item-reverse">
									<div class="media-body">
										<div class="media-chat-item">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
										<div class="font-size-sm text-muted mt-2">2 hours ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>

									<div class="ml-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#">
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
										<a href="#">
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

						<div class="tab-pane fade" id="victoria">
							<ul class="media-list media-chat media-chat-inverse mb-3">
								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-chat-item">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
										<div class="font-size-sm text-muted mt-2">Tue, 10:28 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>
								</li>

								<li class="media media-chat-item-reverse">
									<div class="media-body">
										<div class="media-chat-item">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much</div>
										<div class="font-size-sm text-muted mt-2">Mon, 10:24 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>

									<div class="ml-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-chat-item">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
										<div class="font-size-sm text-muted mt-2">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>
								</li>

								<li class="media content-divider justify-content-center text-muted mx-0">
									<span class="px-2">New messages</span>
								</li>

								<li class="media media-chat-item-reverse">
									<div class="media-body">
										<div class="media-chat-item">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
										<div class="font-size-sm text-muted mt-2">2 hours ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
									</div>

									<div class="ml-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
										</a>
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#">
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
										<a href="#">
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
				<!-- /inside tabs -->


				<!-- Inside accordion -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Chat inside accordion
					</h6>
					<span class="text-muted d-block">Conversation inside collapsible or accordion</span>
				</div>

				<div class="card-group-control card-group-control-right" id="accordion-group">
					<div class="card mb-0 rounded-bottom-0 border-bottom-0">
						<div class="card-header">
							<h6 class="card-title">
								<a data-toggle="collapse" class="text-default" href="#accordion-item-group1">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" width="22" height="22" alt="">
									James Dewalt
									<span class="badge badge-mark border-success ml-2"></span>
								</a>
							</h6>
						</div>

						<div id="accordion-item-group1" class="collapse show" data-parent="#accordion-group">
							<div class="card-body">
								<ul class="media-list media-chat mb-3">
									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-chat-item">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
											<div class="font-size-sm text-muted mt-2">Tue, 10:28 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>
									</li>

									<li class="media media-chat-item-reverse">
										<div class="media-body">
											<div class="media-chat-item">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much</div>
											<div class="font-size-sm text-muted mt-2">Mon, 10:24 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>

										<div class="ml-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-chat-item">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
											<div class="font-size-sm text-muted mt-2">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>
									</li>

									<li class="media content-divider justify-content-center text-muted mx-0">
										<span class="px-2">New messages</span>
									</li>

									<li class="media media-chat-item-reverse">
										<div class="media-body">
											<div class="media-chat-item">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
											<div class="font-size-sm text-muted mt-2">2 hours ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>

										<div class="ml-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
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
											<a href="#">
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

					<div class="card mb-0 rounded-0 border-bottom-0">
						<div class="card-header">
							<h6 class="card-title">
								<a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-group2">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" width="22" height="22" alt="">
									Monica Winslow
									<span class="badge badge-mark border-danger ml-2"></span>
								</a>
							</h6>
						</div>

						<div id="accordion-item-group2" class="collapse" data-parent="#accordion-group">
							<div class="card-body">
								<ul class="media-list media-chat mb-3">
									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-chat-item">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
											<div class="font-size-sm text-muted mt-2">Tue, 10:28 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>
									</li>

									<li class="media media-chat-item-reverse">
										<div class="media-body">
											<div class="media-chat-item">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much</div>
											<div class="font-size-sm text-muted mt-2">Mon, 10:24 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>

										<div class="ml-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-chat-item">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
											<div class="font-size-sm text-muted mt-2">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>
									</li>

									<li class="media content-divider justify-content-center text-muted mx-0">
										<span class="px-2">New messages</span>
									</li>

									<li class="media media-chat-item-reverse">
										<div class="media-body">
											<div class="media-chat-item">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
											<div class="font-size-sm text-muted mt-2">2 hours ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>

										<div class="ml-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
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
											<a href="#">
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

					<div class="card mb-0 rounded-0 border-bottom-0">
						<div class="card-header">
							<h6 class="card-title">
								<a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-group3">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" width="22" height="22" alt="">
									David Spark
									<span class="badge badge-mark border-primary ml-2"></span>
								</a>
							</h6>
						</div>

						<div id="accordion-item-group3" class="collapse" data-parent="#accordion-group">
							<div class="card-body">
								<ul class="media-list media-chat mb-3">
									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-chat-item">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
											<div class="font-size-sm text-muted mt-2">Tue, 10:28 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>
									</li>

									<li class="media media-chat-item-reverse">
										<div class="media-body">
											<div class="media-chat-item">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much</div>
											<div class="font-size-sm text-muted mt-2">Mon, 10:24 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>

										<div class="ml-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-chat-item">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
											<div class="font-size-sm text-muted mt-2">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>
									</li>

									<li class="media content-divider justify-content-center text-muted mx-0">
										<span class="px-2">New messages</span>
									</li>

									<li class="media media-chat-item-reverse">
										<div class="media-body">
											<div class="media-chat-item">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
											<div class="font-size-sm text-muted mt-2">2 hours ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>

										<div class="ml-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
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
											<a href="#">
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

					<div class="card rounded-top-0">
						<div class="card-header">
							<h6 class="card-title">
								<a class="collapsed text-default" data-toggle="collapse" href="#accordion-item-group4">
									<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" width="22" height="22" alt="">
									Mark Baker
									<span class="badge badge-mark border-grey-300 ml-2"></span>
								</a>
							</h6>
						</div>

						<div id="accordion-item-group4" class="collapse" data-parent="#accordion-group">
							<div class="card-body">
								<ul class="media-list media-chat mb-3">
									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-chat-item">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
											<div class="font-size-sm text-muted mt-2">Tue, 10:28 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>
									</li>

									<li class="media media-chat-item-reverse">
										<div class="media-body">
											<div class="media-chat-item">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much</div>
											<div class="font-size-sm text-muted mt-2">Mon, 10:24 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>

										<div class="ml-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-chat-item">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
											<div class="font-size-sm text-muted mt-2">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>
									</li>

									<li class="media content-divider justify-content-center text-muted mx-0">
										<span class="px-2">New messages</span>
									</li>

									<li class="media media-chat-item-reverse">
										<div class="media-body">
											<div class="media-chat-item">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
											<div class="font-size-sm text-muted mt-2">2 hours ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
										</div>

										<div class="ml-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
											</a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
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
											<a href="#">
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
				</div>
				<!-- /inside accordion -->


				<!-- Color options -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Color options</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<ul class="media-list media-chat mb-3">
							<li class="media content-divider justify-content-center text-muted mx-0">Yesterday</li>

							<li class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-chat-item bg-slate border-slate">Crud reran and while much withdrew ardent much crab hugely met dizzily that more jeez gent equivalent unsafely far one hesitant so therefore.</div>
									<div class="font-size-sm text-muted mt-2">Tue, 10:28 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
								</div>
							</li>

							<li class="media media-chat-item-reverse">
								<div class="media-body">
									<div class="media-chat-item bg-info border-info">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much</div>
									<div class="font-size-sm text-muted mt-2">Mon, 10:24 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
								</div>

								<div class="ml-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>
							</li>

							<li class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-chat-item bg-danger-400 border-danger-400">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
									<div class="font-size-sm text-muted mt-2">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
								</div>
							</li>

							<li class="media media-chat-item-reverse">
								<div class="media-body">
									<div class="media-chat-item bg-teal-400 border-teal-400">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
									<div class="font-size-sm text-muted mt-2">2 hours ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
								</div>

								<div class="ml-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>
							</li>

							<li class="media">
								<div class="mr-3">
									<a href="#">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-chat-item bg-success-400 border-success-400">Grunted smirked and grew less but rewound much despite and impressive via alongside out and gosh easy manatee dear ineffective yikes.</div>
									<div class="font-size-sm text-muted mt-2">13 minutes ago <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
								</div>
							</li>

							<li class="media media-chat-item-reverse">
								<div class="media-body">
									<div class="media-chat-item bg-indigo-400 border-indigo-400"><i class="icon-menu"></i></div>
								</div>

								<div class="ml-3">
									<a href="#">
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
				<!-- /color options -->

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
