<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/components_media.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Components</span> - Media Objects</h4>
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
							<a href="components_media" class="breadcrumb-item">Components</a>
							<span class="breadcrumb-item active">Media objects</span>
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

				<!-- List layouts title -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						List layouts
					</h6>
					<span class="text-muted d-block">Media list and media object layouts</span>
				</div>
				<!-- /list layouts title -->


				<!-- Default lists -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Left media list</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<h6 class="media-title">Walking away fallaciously</h6>
											Wise that some and before yellow thus yikes mandrill one luxuriantly other fashionably much
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<h6 class="media-title">Recklessly won</h6>
											Awkwardly thus when much according forwardly far grizzly adversely guilty hey below and did
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<h6 class="media-title">Fired or unlocked</h6>
											Much contemptible squid crud the dear less hazy naturally hey a much twitched yet hey slovenly
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Right media list</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media">
										<div class="media-body">
											<h6 class="media-title">Wickedly and groundhog</h6>
											Willing monkey horse until after some one less mature wantonly agonizing yikes and cumulative
										</div>

										<div class="ml-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>
									</li>

									<li class="media">
										<div class="media-body">
											<h6 class="media-title">And rampantly thoroughly</h6>
											Irresolutely left manta invaluably until some ape much komodo hello marvelously endlessly
										</div>

										<div class="ml-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>
									</li>

									<li class="media">
										<div class="media-body">
											<h6 class="media-title">Less the gibbered</h6>
											Ouch sexual fitted gosh more during alas less overpaid hello a one a far hello beat due that ouch
										</div>

										<div class="ml-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /default lists -->


				<!-- Bordered lists -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Left bordered list</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<ul class="media-list media-list-bordered">
								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title">Suddenly resignedly</h6>
										Ponderously across reproachfully austerely nonchalant one and dear under off enthusiastically
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title">Yet lied cursed</h6>
										Outdid then away amidst and around waved considering on this less less by guinea apart more
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title">Far a lubberly fraternal</h6>
										Gosh wherever up clapped tapir winced wombat nice this hen hectic effective well patted darn onto
									</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Right bordered list</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<ul class="media-list media-list-bordered">
								<li class="media">
									<div class="media-body">
										<h6 class="media-title">Tortoise goodness</h6>
										Reproachfully austerely nonchalant one and dear under off enthusiastically ludicrous crud
									</div>

									<div class="ml-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>
								</li>

								<li class="media">
									<div class="media-body">
										<h6 class="media-title">Overlay that far</h6>
										On yikes awful much this irrespective vicariously a yet well vengefully dear manatee and until
									</div>

									<div class="ml-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>
								</li>

								<li class="media">
									<div class="media-body">
										<h6 class="media-title">Ponderously across</h6>
										Wow strived rang powerlessly piranha this crud mandrill and far and armadillo spoke dishonest
									</div>

									<div class="ml-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /bordered lists -->


				<!-- Basic list headers -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic list headers</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media font-weight-semibold">First header</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<h6 class="media-title">Ouch trout that</h6>
											Crane jeepers avoidable around after a shined soundly the well ouch less subtly much trout then
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<h6 class="media-title">And thus when</h6>
											Less cuffed a that yikes precisely so taped past pangolin mammoth balked cute monogamously
										</div>
									</li>

									<li class="media font-weight-semibold">Second header</li>
									
									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<h6 class="media-title">Far pushed much</h6>
											Penguin sniffed as a jeepers wow cow some far less alert hence python much the barked during
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<h6 class="media-title">But much lingeringly</h6>
											Morally gosh shrank outside fraudulently hedgehog less and jeepers much overlay crab octopus
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bordered list headers</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<ul class="media-list media-list-bordered">
								<li class="media font-weight-semibold bg-light py-2">First header</li>

								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title">And hello spluttered</h6>
										And egregiously much obsessive mammoth redid rankly because as along much then yikes behind
									</div>
								</li>

								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title">One bland far</h6>
										Foolishly yikes more far saw hey astride differently therefore clever leopard ouch underneath
									</div>
								</li>

								<li class="media font-weight-semibold bg-light py-2">Second header</li>
								
								<li class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title">Foretold remade</h6>
										Admirably some gurgled much this jeepers made moaned stoic concentric following let brilliant
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /basic list headers -->



				<!-- Linked lists title -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Linked lists
					</h6>
					<span class="text-muted d-block">Display list items as links</span>
				</div>
				<!-- /linked lists title -->


				<!-- Linked lists -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Linked media list</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<ul class="media-list media-list-linked">
								<li>
									<a href="#" class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</div>

										<div class="media-body">
											<h6 class="media-title">Rolled out online</h6>
											Returned toucan yikes slavishly plankton emu immaculately some a jeez labrador the boyish contrary
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</div>

										<div class="media-body">
											<h6 class="media-title">Elephant gosh</h6>
											Slung far vulture this this considerable much crud indecisive hey hello as somberly special sternly
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</div>

										<div class="media-body">
											<h6 class="media-title">Before regardless</h6>
											Conservatively disconsolate goodness more lazy less exclusively more unlike far sensational jeez some
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bordered linked list</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<ul class="media-list media-list-linked media-list-bordered">
								<li>
									<a href="#" class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</div>

										<div class="media-body">
											<h6 class="media-title">Apart far much</h6>
											Hey goodness much rethought oh lubber goodness beseeching so goodness floated and yet dear inside me
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</div>

										<div class="media-body">
											<h6 class="media-title">Alas goodness nutria</h6>
											Less according rude impassive the yikes onto sheared congenially steadfast lizard and deceiving some
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</div>

										<div class="media-body">
											<h6 class="media-title">As across mallard</h6>
											Outside gosh tactful thus incongruous anteater less accidentally tiger this hey much rhinoceros minute
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /linked lists -->


				<!-- Linked list headers -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Linked list headers</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<ul class="media-list media-list-linked">
								<li class="media bg-light font-weight-semibold py-2">First header</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</div>

										<div class="media-body">
											<h6 class="media-title">And jeepers otter</h6>
											One trite goodness after goodness preparatory where save despite luscious did weird far frisky
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</div>

										<div class="media-body">
											<h6 class="media-title">Rabbit less out</h6>
											Shyly and boa much jeez alas as cumulatively far and less confessedly well because before then hey
										</div>
									</a>
								</li>

								<li class="media bg-light font-weight-semibold py-2">Second header</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</div>

										<div class="media-body">
											<h6 class="media-title">Less caribou</h6>
											Spoke superb relentless this jeepers because and far horse that shaky goldfish much knew this gosh
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bordered list headers</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<ul class="media-list media-list-linked media-list-bordered">
								<li class="media bg-light font-weight-semibold py-2">First header</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</div>

										<div class="media-body">
											<h6 class="media-title">Hummingbird</h6>
											Massively a far far affable gull and that this on ahead some on the cursed weirdly a much far
										</div>
									</a>
								</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</div>

										<div class="media-body">
											<h6 class="media-title">Unsociable intimate</h6>
											Frowned winced knitted despite that rueful forgot through loudly far alas guarded where hummed
										</div>
									</a>
								</li>

								<li class="media bg-light font-weight-semibold py-2">Second header</li>

								<li>
									<a href="#" class="media">
										<div class="mr-3">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</div>

										<div class="media-body">
											<h6 class="media-title">And wow amidst</h6>
											Before re-laid as much turned fluid disbanded some exited less so due capable one grasshopper
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /linked list headers -->



				<!-- Text and title options -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Text and title
					</h6>
					<span class="text-muted d-block">Media title and text options</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Simple title</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-title font-weight-semibold">Dutifully because</div>
										Badger hey apart and burst flung unimaginative and this goodness and however meek about near
									</div>
								</div>

								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-title font-weight-semibold">Casual felt more</div>
										Steadfastly therefore flimsy this far impudently where one sheep that let some threw that pouted
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Using headings</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">Flailed felicitous</h6>
										Far one inside beside jeez dear immeasurable less where spoiled regarding lost belated and close
									</div>
								</div>

								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">Overthrew nefariously</h6>
										Beyond forward nutria that the outside belched wove one let next less the heroic closed spluttered
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Title color</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold text-warning">Unequivocal thanks</h6>
										Impotently much wedded within truly amidst therefore toward as as insect pre-set where foolhardily
									</div>
								</div>

								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold"><a href="#" class="text-teal-400">Snuffed the reproachful</a></h6>
										Near one brightly some remade aside a concretely some or this and onto arch dear far gerbil so great
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Linked titles</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-title"><a href="#">Hound and echidna</a></div>
										That a that hence dutifully beheld hey bashful contemplated wherever as the yikes far undertook
									</div>
								</div>

								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-title"><a href="#">Dealt the far therefore</a></div>
										That put kneeled more surprisingly arose since inimical augustly far thus on after however ahead
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Linked headings</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title"><a href="#">Set heroically amid</a></h6>
										Away one gosh gracefully tenably hid amid far overlay ouch oh until oyster crud much in far far
									</div>
								</div>

								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title"><a href="#">Kneeled indirect</a></h6>
										Strangely mounted the and as however repaid wow goodness oh falcon unproductive and some bred
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Mute preview text</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">Before evidently</h6>
										<span class="text-muted">Far jauntily manta laughed pugnacious hey hey ouch globefish far yikes crud overheard far off</span>
									</div>
								</div>

								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title font-weight-semibold">Luridly seagull</h6>
										<span class="text-muted">Bled wept across mindful constructively suggestive hello fuzzily this jocosely capybara well to</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /text and title options -->



				<!-- Annotation text title -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Annotation text
					</h6>
					<span class="text-muted d-block">Display custom text in media items</span>
				</div>
				<!-- /annotation text title -->


				<!-- Inline annotation -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Left inline</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-title d-flex justify-content-start align-items-center">
											<h6 class="m-0">Eccentrically greedily</h6>
											<div class="text-muted ml-3">added by Eugene</div>
										</div>

										Far coarsely or tuneful kangaroo much lantern this however oyster yikes cute unbound obscurely
									</div>
								</div>

								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-title d-flex justify-content-start align-items-center">
											<h6 class="m-0">Exquisitely jeepers</h6>
											<div class="text-muted ml-3">News and articles</div>
										</div>

										Yikes bent lopsidedly some courageous as far sobbed guffawed piously squinted iguana crane
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Right inline</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-title d-flex justify-content-between">
											<h6 class="m-0">However accordingly</h6>
											<span class="text-muted">1 hour ago</span>
										</div>

										Hello some plentiful a beneath much glanced that savage pending dashingly and hare insane dull
									</div>
								</div>

								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<div class="media-title d-flex justify-content-between">
											<h6 class="m-0">More some met despite</h6>
											<span class="text-muted">Yesterday, 12:16</span>
										</div>

										Dragonfly oversold forgot ouch less darn firefly one while honey until cockatoo more as the rat 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /inline annotation -->


				<!-- Block annotaiton -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Text block</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title">So alas some intriguing</h6>
										But darn discarded stubbornly far a after aboard well unimaginative ruthless and flamingo cow

										<div class="text-muted mt-1"><i class="icon-check"></i> Just now</div>
									</div>
								</div>

								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title">A blissful caterpillar</h6>
										Man-of-war so where far up as less yikes thus at more yet so hardheadedly some hey darn dry now

										<div class="text-muted mt-1"><i class="icon-pin-alt"></i> &nbsp;4 hours ago from Thailand</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Text list</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title">This crud hypocritically</h6>
										Ferret on bowed engagingly kangaroo and split contagious far one dear seagull fidgeted some

										<ul class="list-inline mt-1">
											<li class="list-inline-item">89 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
											<li class="list-inline-item"><a href="#">Reply</a></li>
											<li class="list-inline-item"><a href="#">Edit</a></li>
										</ul>
									</div>
								</div>

								<div class="media">
									<div class="mr-3">
										<a href="#">
											<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="44" height="44" alt="">
										</a>
									</div>

									<div class="media-body">
										<h6 class="media-title">Dismounted pungent</h6>
										Sexily far excited less jeepers and due hit at greyhound tryingly one adjusted cuckoo hamster

										<ul class="list-inline mt-1">
											<li class="list-inline-item">153 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
											<li class="list-inline-item"><a href="#">Reply</a></li>
											<li class="list-inline-item"><a href="#">Edit</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /block annotation -->



				<!-- Stackable lists -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Stackable objects
					</h6>
					<span class="text-muted d-block">Stack items on mobile</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Left stackable list</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media align-items-center align-items-md-start text-center text-md-left flex-column flex-md-row">
										<div class="mr-md-3 mb-2 mb-md-0">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<h6 class="media-title">Walking away fallaciously</h6>
											Wise that some and before yellow thus yikes mandrill one luxuriantly other fashionably much
										</div>
									</li>

									<li class="media align-items-center align-items-md-start text-center text-md-left flex-column flex-md-row">
										<div class="mr-md-3 mb-2 mb-md-0">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<h6 class="media-title">Recklessly won</h6>
											Awkwardly thus when much according forwardly far grizzly adversely guilty hey below and did
										</div>
									</li>

									<li class="media align-items-center align-items-md-start text-center text-md-left flex-column flex-md-row">
										<div class="mr-md-3 mb-2 mb-md-0">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<h6 class="media-title">Fired or unlocked</h6>
											Much contemptible squid crud the dear less hazy naturally hey a much twitched yet hey slovenly
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Right stackable list</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media align-items-center align-items-md-start text-center text-md-left flex-column flex-md-row">
										<div class="media-body order-2 order-md-1">
											<h6 class="media-title">Wickedly and groundhog</h6>
											Willing monkey horse until after some one less mature wantonly agonizing yikes and cumulative
										</div>

										<div class="ml-md-3 mb-2 mb-md-0 order-1 order-md-2">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>
									</li>

									<li class="media align-items-center align-items-md-start text-center text-md-left flex-column flex-md-row">
										<div class="media-body order-2 order-md-1">
											<h6 class="media-title">And rampantly thoroughly</h6>
											Irresolutely left manta invaluably until some ape much komodo hello marvelously endlessly
										</div>

										<div class="ml-md-3 mb-2 mb-md-0 order-1 order-md-2">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>
									</li>

									<li class="media align-items-center align-items-md-start text-center text-md-left flex-column flex-md-row">
										<div class="media-body order-2 order-md-1">
											<h6 class="media-title">Less the gibbered</h6>
											Ouch sexual fitted gosh more during alas less overpaid hello a one a far hello beat due that ouch
										</div>

										<div class="ml-md-3 mb-2 mb-md-0 order-1 order-md-2">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /stackable lists -->



				<!-- Other examples -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Other examples
					</h6>
					<span class="text-muted d-block">Examples of media list usage</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Icon, icon list or dropdown</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-title font-weight-semibold">Rhinoceros rebellious</div>
											One preparatory festive outran blatantly indecisively interminable bid popular much and less
										</div>

										<div class="ml-3">
											<div class="list-icons">
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
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-title font-weight-semibold">Onto much less</div>
											As ouch lizard hurried less ingenuously malicious yikes belched agilely shrank more diabolically
										</div>

										<div class="ml-3">
											<div class="list-icons">
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

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-title font-weight-semibold">Busted that rethought</div>
											Some adversely infallibly parrot far yet amazing jay much much black in oh idiotically globefish
										</div>

										<div class="ml-3">
											<span class="badge badge-primary">Colleague</span>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-title font-weight-semibold">Goodness understood</div>
											On thus oh insolently before obsessive therefore this including made alas more dauntless snooty
										</div>

										<div class="ml-3">
											<span class="badge badge-danger">Partner</span>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Bordered icon</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-checkmark3"></i></a>
										</div>

										<div class="media-body">
											Less thus overhung during rabbit goose while amid ludicrously after terribly that opposite the amicable

											<div class="text-muted">19 minutes ago</div>
										</div>

										<div class="ml-3">
											<div class="list-icons">
												<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-history"></i> Toggle auto update</a>
													<a href="#" class="dropdown-item"><i class="icon-graph"></i> View statistics</a>
													<a href="#" class="dropdown-item"><i class="icon-calendar3"></i> Set schedule</a>
													<div class="divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
												</div>
						                	</div>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-danger text-danger rounded-round border-2 btn-icon"><i class="icon-cross2"></i></a>
										</div>

										<div class="media-body">
											Gosh however salmon far astride gerbil convincing kissed zealous assisted outgrew rolled until quail

											<div class="text-muted">7 hours ago</div>
										</div>

										<div class="ml-3">
											<div class="list-icons">
												<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-history"></i> Toggle auto update</a>
													<a href="#" class="dropdown-item"><i class="icon-graph"></i> View statistics</a>
													<a href="#" class="dropdown-item"><i class="icon-calendar3"></i> Set schedule</a>
													<div class="divider"></div>
													<a href="#" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
												</div>
						                	</div>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Checkboxes</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3">
											<input type="checkbox" class="form-input-styled" checked data-fouc>
										</div>

										<div class="media-body">
											<h6 class="media-title font-weight-semibold">Resplendent much during</h6>
											Urchin that understood yikes special ladybug that hilariously inflexible following simply walking
										</div>

										<div class="ml-3">
											<div class="list-icons">
												<a href="#" class="list-icons-item"><i class="icon-comment-discussion"></i></a>
						                	</div>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<input type="checkbox" class="form-input-styled" data-fouc>
										</div>

										<div class="media-body">
											<h6 class="media-title font-weight-semibold">Insect far hound</h6>
											Hey where more that much meanly shivered salamander oh spent regarding gosh among much 
										</div>

										<div class="ml-3">
											<div class="list-icons">
												<a href="#" class="list-icons-item"><i class="icon-comment-discussion"></i></a>
						                	</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Status badge</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-title font-weight-semibold">Marcus Maison</div>
											Kiwi that dear because wow barring dear temperate narrowly securely indecently this persistently
										</div>

										<div class="ml-3">
											<span class="badge badge-mark bg-danger border-danger"></span>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-title font-weight-semibold">Benjamin Wallace</div>
											Yikes jeez bid and on after man-of-war insect owing far far dalmatian vicariously crud goodness 
										</div>

										<div class="ml-3">
											<span class="badge badge-mark border-success"></span>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Pill badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-title font-weight-semibold">This exclusive past</div>
											Forward the some goodness suddenly squirrel therefore sadly notwithstanding onto alas the save
										</div>

										<div class="ml-3">
											<span class="badge badge-warning badge-pill">83</span>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
										</div>

										<div class="media-body">
											<div class="media-title font-weight-semibold">Oh shoddy about</div>
											Much untiringly darn learned a and goodness off until much excepting where jeez one in softly
										</div>

										<div class="ml-3">
											<span class="badge bg-teal badge-pill">39</span>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Object badges</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3 position-relative">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
											<span class="badge badge-pill bg-teal badge-float">9</span>
										</div>

										<div class="media-body">
											<div class="media-title font-weight-semibold">This conjointly some</div>
											Thus boa much thus innocent thus some in amidst irrespective oriole cost absently rat against
										</div>

										<div class="ml-3">
											<input type="checkbox" class="form-control-switchery" checked data-fouc>
										</div>
									</li>

									<li class="media">
										<div class="mr-3 position-relative">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
											</a>
											<span class="badge badge-warning badge-pill badge-float">6</span>
										</div>

										<div class="media-body">
											<div class="media-title font-weight-semibold">Crud relentlessly bid</div>
											Creative a far crud jeepers snickered well winced goodness the decently jeepers smelled outran 
										</div>

										<div class="ml-3">
											<input type="checkbox" class="form-control-switchery" checked data-fouc>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Radios</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">
								<ul class="media-list">
									<li class="media">
										<div class="mr-3">
											<input type="radio" name="media-radio" class="form-input-styled" checked data-fouc>
										</div>

										<div class="media-body">
											<h6 class="media-title font-weight-semibold">Hello underneath</h6>
											Jeepers magically enthusiastically hummingbird that jeez and more a grumbled a shark sorely about
										</div>

										<div class="ml-3">
											<div class="list-icons">
						                		<a class="list-icons-item"><i class="icon-comment-discussion"></i></a>
						                	</div>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<input type="radio" name="media-radio" class="form-input-styled" data-fouc>
										</div>

										<div class="media-body">
											<h6 class="media-title font-weight-semibold">Unnecessary invoked less</h6>
											Amid less manifest soggily diversely but far tentative away however this rhinoceros far droll far
										</div>

										<div class="ml-3">
											<div class="list-icons">
						                		<a class="list-icons-item"><i class="icon-comment-discussion"></i></a>
						                	</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /other examples -->

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
