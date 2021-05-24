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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Conversation</span> - Layouts</h4>
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
							<a href="chat_layouts" class="breadcrumb-item">Conversation</a>
							<span class="breadcrumb-item active">Layouts</span>
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

				<!-- Basic layout -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Default layout</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<ul class="media-list media-chat media-chat-scrollable mb-3">
							<li class="media content-divider justify-content-center text-muted mx-0">Monday, Feb 10</li>

							<li class="media">
								<div class="mr-3">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-chat-item">Below mounted advantageous spread yikes bat stubbornly crud a and a excepting</div>
									<div class="font-size-sm text-muted mt-2">Mon, 9:54 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
								</div>
							</li>

							<li class="media media-chat-item-reverse">
								<div class="media-body">
									<div class="media-chat-item">Far squid and that hello fidgeted and when. As this oh darn but slapped casually husky sheared that cardinal hugely one and some unnecessary factiously hedgehog a feeling one rudely much but one owing sympathetic regardless more astonishing evasive tasteful much.</div>
									<div class="font-size-sm text-muted mt-2">Mon, 10:24 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
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
									<div class="media-chat-item">Darn over sour then cynically less roadrunner up some cast buoyant. Macaw krill when and upon less contrary warthog jeez some koala less since therefore minimal.</div>
									<div class="font-size-sm text-muted mt-2">Mon, 10:56 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
								</div>
							</li>

							<li class="media media-chat-item-reverse">
								<div class="media-body">
									<div class="media-chat-item">Some upset impious a and submissive when far crane the belched coquettishly. More the puerile dove wherever</div>
									<div class="font-size-sm text-muted mt-2">Mon, 11:29 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
								</div>

								<div class="ml-3">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>
							</li>

							<li class="media content-divider justify-content-center text-muted mx-0">Yesterday</li>

							<li class="media">
								<div class="mr-3">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>

								<div class="media-body">
									<div class="media-chat-item">Regardless equitably hello heron glum cassowary jocosely before reliably a jeepers wholehearted shuddered more that some where far by koala.</div>
									<div class="font-size-sm text-muted mt-2">Tue, 6:40 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
								</div>
							</li>

							<li class="media">
								<div class="mr-3">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
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
									<div class="media-chat-item">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
									<div class="font-size-sm text-muted mt-2">Tue, 8:12 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
								</div>

								<div class="ml-3">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>
							</li>

							<li class="media content-divider justify-content-center text-muted mx-0">Today</li>

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
				<!-- /basic layout -->


				<!-- Inverse colors -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Inverse colors</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<ul class="media-list media-chat media-chat-inverse media-chat-scrollable mb-3">
							<li class="media content-divider justify-content-center text-muted mx-0">Monday, Feb 10</li>

							<li class="media">
								<div class="mr-3">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
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
									<div class="media-chat-item">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
									<div class="font-size-sm text-muted mt-2">Tue, 8:12 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
								</div>

								<div class="ml-3">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>
							</li>

							<li class="media content-divider justify-content-center text-muted mx-0">Today</li>

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
				<!-- /inverse colors -->


				<!-- Line content divider -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Line content divider</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<ul class="media-list media-chat media-chat-scrollable mb-3">
							<li class="media content-divider justify-content-center text-muted mx-0">
								<span class="px-2">Monday, Feb 10</span>
							</li>

							<li class="media">
								<div class="mr-3">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
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
									<div class="media-chat-item">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
									<div class="font-size-sm text-muted mt-2">Tue, 8:12 am <a href="#"><i class="icon-pin-alt ml-2 text-muted"></i></a></div>
								</div>

								<div class="ml-3">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt="">
									</a>
								</div>
							</li>

							<li class="media content-divider justify-content-center text-muted mx-0">
								<span class="text-muted px-2">Today</span>
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
				<!-- /line content divider -->


				<!-- Default stacked layout -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Default stacked layout</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<ul class="media-list media-chat-scrollable mb-3">
							<li class="media text-muted">Saturday, Feb 12</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Margo Baker</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">12:16 pm <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>
									Goldfish indisputable vexed hello on held some gosh :-)
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Will Grace</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">4:13 pm <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>
									Wickedly darn before or after impeccably jeepers ouch misunderstood yikes much hello talkatively ineffectively hiccupped beyond usefully the alas prior shrugged instantaneously heroically
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Margo Baker</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">02:53 am <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>
									Less insincerely hello far ungraceful near poured warthog hurt apart ouch wow that banal far made grew collective coasted inside
								</div>
							</li>

							<li class="media text-muted">Yesterday</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Will Grace</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">7:50 am <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>
									Less a hello hey less saw vexedly pleasantly this much flamingo alas returned frighteningly some beneath jeez oh that overpaid oh within forlorn suddenly
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Margo Baker</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">2:03 pm <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>
									Heard where and affecting dear hyena excluding hey confused the one
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Margo Baker</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">5:14 pm <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>
									Messily changed much yet much this forbidding that so hey
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Will Grace</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">1:30 pm <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>
									And hello exotic staunch bee goodness expectant much combed fox placed far this at oh less opposite much factually
								</div>
							</li>

							<li class="media text-muted">Today</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Will Grace</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">2:29 am <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>	
									Besides lax yikes and a much deservedly much that constructively flexibly darn a one and and whooped without the and darn contemplated jokingly some ordered oh domestic possessive far
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Margo Baker</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">8:20 am <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>	
									So because one badger a over more impotent pending frustratingly gosh when
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Will Grace</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">9:00 am <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>	
									Fantastic close echidna crud fatuously much extensively alas beat up far consoled manfully that far one owing one perversely jeepers some
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body align-self-center">
									<i class="icon-menu"></i>
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
				<!-- /default stacked layout -->


				<!-- Left annotation position -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Left annotation position</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<ul class="media-list media-chat-scrollable mb-3">
							<li class="media text-muted">Saturday, Feb 12</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<ul class="media-title list-inline list-inline-dotted">
										<li class="list-inline-item"><a href="#" class="font-weight-semibold">Margo Baker</a></li>
										<li class="list-inline-item"><span class="font-size-sm text-muted">2:03 pm</span></li>
									</ul>
									Heard where and affecting dear hyena excluding hey confused the one
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<ul class="media-title list-inline list-inline-dotted">
										<li class="list-inline-item"><a href="#" class="font-weight-semibold">Margo Baker</a></li>
										<li class="list-inline-item"><span class="font-size-sm text-muted dotted">5:14 pm</span></li>
									</ul>
									Messily changed much yet much this forbidding that so hey
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<ul class="media-title list-inline list-inline-dotted">
										<li class="list-inline-item"><a href="#" class="font-weight-semibold">Will Grace</a></li>
										<li class="list-inline-item"><span class="font-size-sm text-muted dotted">1:30 pm</span></li>
									</ul>
									And hello exotic staunch bee goodness expectant much combed fox placed far this at oh less opposite much factually
								</div>
							</li>

							<li class="media text-muted">Today</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<ul class="media-title list-inline list-inline-dotted">
										<li class="list-inline-item"><a href="#" class="font-weight-semibold">Will Grace</a></li>
										<li class="list-inline-item"><span class="font-size-sm text-muted dotted">2:29 am</span></li>
									</ul>
									Besides lax yikes and a much deservedly much that constructively flexibly darn a one and and whooped without the and darn contemplated jokingly some ordered oh domestic possessive far
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<ul class="media-title list-inline list-inline-dotted">
										<li class="list-inline-item"><a href="#" class="font-weight-semibold">Margo Baker</a></li>
										<li class="list-inline-item"><span class="font-size-sm text-muted dotted">8:20 am</span></li>
									</ul>
									So because one badger a over more impotent pending frustratingly gosh when
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<ul class="media-title list-inline list-inline-dotted">
										<li class="list-inline-item"><a href="#" class="font-weight-semibold">Will Grace</a></li>
										<li class="list-inline-item"><span class="font-size-sm text-muted dotted">9:00 am</span></li>
									</ul>
									Fantastic close echidna crud fatuously much extensively alas beat up far consoled manfully that far one owing one perversely jeepers some
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body align-self-center">
									<i class="icon-menu"></i>
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
				<!-- /left annotation position-->


				<!-- Line content divider -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Line content divider</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<ul class="media-list media-chat-scrollable mb-3">
							<li class="media content-divider justify-content-center text-muted mx-0">
								<span class="px-2">Saturday, Feb 12</span>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Margo Baker</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">12:16 pm <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>
									Goldfish indisputable vexed hello on held some gosh :-)
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Will Grace</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">4:13 pm <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>
									Wickedly darn before or after impeccably jeepers ouch misunderstood yikes much hello talkatively ineffectively hiccupped beyond usefully the alas prior shrugged instantaneously heroically
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Margo Baker</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">02:53 am <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>
									Less insincerely hello far ungraceful near poured warthog hurt apart ouch wow that banal far made grew collective coasted inside
								</div>
							</li>

							<li class="media content-divider justify-content-center text-muted mx-0">
								<span class="text-muted px-2">Yesterday</span>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Will Grace</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">7:50 am <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>
									Less a hello hey less saw vexedly pleasantly this much flamingo alas returned frighteningly some beneath jeez oh that overpaid oh within forlorn suddenly
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Margo Baker</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">2:03 pm <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>
									Heard where and affecting dear hyena excluding hey confused the one
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Margo Baker</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">5:14 pm <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>
									Messily changed much yet much this forbidding that so hey
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Will Grace</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">1:30 pm <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>
									And hello exotic staunch bee goodness expectant much combed fox placed far this at oh less opposite much factually
								</div>
							</li>

							<li class="media content-divider justify-content-center text-muted mx-0">
								<span class="text-muted px-2">Today</span>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Will Grace</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">2:29 am <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>	
									Besides lax yikes and a much deservedly much that constructively flexibly darn a one and and whooped without the and darn contemplated jokingly some ordered oh domestic possessive far
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Margo Baker</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">8:20 am <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>	
									So because one badger a over more impotent pending frustratingly gosh when
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body">
									<div class="media-title d-flex flex-nowrap">
										<a href="#" class="font-weight-semibold mr-3">Will Grace</a>
										<span class="font-size-sm text-muted text-nowrap ml-auto">9:00 am <a href="#"><i class="icon-pin-alt font-size-base text-muted ml-2"></i></a></span>
									</div>	
									Fantastic close echidna crud fatuously much extensively alas beat up far consoled manfully that far one owing one perversely jeepers some
								</div>
							</li>

							<li class="media">
								<div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
								<div class="media-body align-self-center">
									<i class="icon-menu"></i>
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
				<!-- /line content divider -->

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
