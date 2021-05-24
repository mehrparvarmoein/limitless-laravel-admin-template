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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">General Pages</span> - Knowledgebase</h4>
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
							<a href="general_knowledgebase" class="breadcrumb-item">General pages</a>
							<span class="breadcrumb-item active">Knowledgebase</span>
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

				<!-- Search field -->
				<div class="card">
					<div class="card-body">
						<div class="text-center mb-3 py-2">
							<h4 class="font-weight-semibold mb-1">Welcome to our knowledge base</h4>
							<span class="text-muted d-block">Panther egret cut a more this bound one much yikes more less because hello alas while unbridled seal</span>
						</div>

						<form action="#">
							<div class="input-group mb-3">
								<div class="form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control form-control-lg" placeholder="Search our knowledgebase">
									<div class="form-control-feedback form-control-feedback-lg">
										<i class="icon-search4 text-muted"></i>
									</div>
								</div>

								<div class="input-group-append">
									<button type="submit" class="btn btn-primary btn-lg">Search</button>
								</div>
							</div>

							<div class="d-md-flex align-items-md-center flex-md-wrap text-center text-md-left">
								<ul class="list-inline list-inline-condensed mb-0">
									<li class="list-inline-item dropdown">
										<a href="#" class="btn btn-link text-default dropdown-toggle" data-toggle="dropdown">
											<i class="icon-stack2 mr-2"></i>
											All categories
										</a>

										<div class="dropdown-menu">
											<a href="#" class="dropdown-item"><i class="icon-question7"></i> Getting started</a>
											<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Registration</a>
											<a href="#" class="dropdown-item"><i class="icon-reading"></i> General info</a>
											<a href="#" class="dropdown-item"><i class="icon-gear"></i> Your settings</a>
											<a href="#" class="dropdown-item"><i class="icon-graduation"></i> Copyrights</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item"><i class="icon-mail-read"></i> Contacting authors</a>
										</div>
									</li>
									<li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-reload-alt mr-2"></i> Refine your search</a></li>
								</ul>

								<ul class="list-inline mb-0 ml-md-auto">
									<li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-make-group mr-2"></i> Browse articles</a></li>
									<li class="list-inline-item"><a href="#" class="btn btn-link text-default"><i class="icon-menu7 mr-2"></i> Advanced search</a></li>
								</ul>
							</div>
						</form>
					</div>
				</div>
				<!-- /search field -->


				<!-- Info blocks -->
				<div class="row">
					<div class="col-lg-4">
						<div class="card">
							<div class="card-body text-center">
							<i class="icon-book icon-2x text-success-400 border-success-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="card-title">Knowledge Base</h5>
								<p class="mb-3">Ouch found swore much dear conductively hid submissively hatchet vexed far inanimately alongside candidly much and jeez</p>
								<a href="#" class="btn bg-success-400">Browse articles</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card">
							<div class="card-body text-center">
								<i class="icon-lifebuoy icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="card-title">Support center</h5>
								<p class="mb-3">Dear spryly growled much far jeepers vigilantly less and far hideous and some mannishly less jeepers less and and crud</p>
								<a href="#" class="btn bg-warning-400">Open a ticket</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card">
							<div class="card-body text-center">
								<i class="icon-reading icon-2x text-blue border-blue border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="card-title">Articles and news</h5>
								<p class="mb-3">Diabolically somberly astride crass one endearingly blatant depending peculiar antelope piquantly popularly adept much</p>
								<a href="#" class="btn bg-blue">Browse articles</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /info blocks -->


				<!-- Directory -->
				<div class="text-center mb-3 py-2">
					<h4 class="font-weight-semibold mb-1">Browse articles by category</h4>
					<span class="text-muted d-block">Yikes snuffed goat macaw overlay much and goodness and alas kookaburra a goldfish</span>
				</div>

				<div class="card">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Browse articles</h6>
						<div class="list-icons">
	                		<a class="list-icons-item" data-action="collapse"></a>
	                		<a class="list-icons-item" data-action="reload"></a>
	                		<a class="list-icons-item" data-action="remove"></a>
	                	</div>
					</div>

					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<div class="mb-3">
									<h6 class="font-weight-semibold mt-2"><i class="icon-folder6 mr-2"></i> Getting started <span class="ml-1">(93)</span></h6>
									<div class="dropdown-divider mb-2"></div>
									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> And hello exotic staunch <span class="badge badge-primary ml-auto">Popular</span>
									</a>
									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> That and well ecstatically
									</a>
									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Sheared coasted so concurrent
									</a>
									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Into darn intrepid belated
									</a>
									<a href="#" class="dropdown-item">
										<i class="icon-arrow-right22"></i> Show all articles (93)
									</a>
								</div>
							</div>

							<div class="col-md-4">
								<div class="mb-3">
									<h6 class="font-weight-semibold mt-2"><i class="icon-folder6 mr-2"></i> Becoming an author <span class="ml-1">(56)</span></h6>
									<div class="dropdown-divider mb-2"></div>
									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Jeepers therefore one
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Near and ladybug forewent <span class="badge badge-success ml-auto">Review</span>
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Well much strove when stuck
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Lorikeet much fantastic less
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-arrow-right22"></i> Show all articles (56)
									</a>
								</div>
							</div>

							<div class="col-md-4">
								<div class="mb-3">
									<h6 class="font-weight-semibold mt-2"><i class="icon-folder6 mr-2"></i> General info for all authors <span class="ml-1">(29)</span></h6>
									<div class="dropdown-divider mb-2"></div>
									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Lackadaisical dear crude <span class="badge badge-danger ml-auto">Closed</span>
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Effortless one powerlessly
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Some less hey and less <span class="badge bg-indigo-300 ml-auto">Article</span>
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Jeepers pill nonsensically
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-arrow-right22"></i> Show all articles (29)
									</a>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="mb-3">
									<h6 class="font-weight-semibold mt-2"><i class="icon-folder6 mr-2"></i> Your statement &amp; documents <span class="ml-1">(58)</span></h6>
									<div class="dropdown-divider mb-2"></div>
									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Incongruously gorilla <span class="badge bg-teal-300 ml-auto">New</span>
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Playful amongst hence
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Sobbingly altruistic nasty
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Hung insecure far ferret
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-arrow-right22"></i> Show all articles (58)
									</a>
								</div>
							</div>

							<div class="col-md-4">
								<div class="mb-3">
									<h6 class="font-weight-semibold mt-2"><i class="icon-folder6 mr-2"></i> Account settings <span class="ml-1">(92)</span></h6>
									<div class="dropdown-divider mb-2"></div>
									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Reined and this vigorous <span class="badge badge-primary ml-auto">Popular</span>
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Oh positively well crab
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Recast then impalpable cried
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Eclectic mechanically as on <span class="badge badge-danger ml-auto">Closed</span>
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-arrow-right22"></i> Show all articles (92)
									</a>
								</div>
							</div>

							<div class="col-md-4">
								<div class="mb-3">
									<h6 class="font-weight-semibold mt-2"><i class="icon-folder6 mr-2"></i> Protecting your copyright <span class="ml-1">(15)</span></h6>
									<div class="dropdown-divider mb-2"></div>
									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> And dear dealt bat far redid
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Trout some after effective <span class="badge badge-secondary ml-auto">On hold</span>
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> The one rhythmically whale
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Admirably spun a the belched <span class="badge bg-indigo-300 ml-auto">Article</span>
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-arrow-right22"></i> Show all articles (15)
									</a>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="mb-3">
									<h6 class="font-weight-semibold mt-2"><i class="icon-folder6 mr-2"></i> Intellectual Property <span class="ml-1">(12)</span></h6>
									<div class="dropdown-divider mb-2"></div>
									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Gagged more much around <span class="badge badge-danger ml-auto">Closed</span>
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Much oh much along gnu
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Aardvark far the until alas <span class="badge badge-success ml-auto">Review</span>
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Hence expeditiously goldfish
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-arrow-right22"></i> Show all articles (12)
									</a>
								</div>
							</div>

							<div class="col-md-4">
								<div class="mb-3">
									<h6 class="font-weight-semibold mt-2"><i class="icon-folder6 mr-2"></i> Item support <span class="ml-1">(34)</span></h6>
									<div class="dropdown-divider mb-2"></div>
									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Shark hello less well
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Far pious gosh cuttingly <span class="badge badge-success ml-auto">Review</span>
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Tonally guardedly jeepers
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Since growled overheard
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-arrow-right22"></i> Show all articles (34)
									</a>
								</div>
							</div>

							<div class="col-md-4">
								<div class="mb-3">
									<h6 class="font-weight-semibold mt-2"><i class="icon-folder6 mr-2"></i> Contacting authors <span class="ml-1">(85)</span></h6>
									<div class="dropdown-divider mb-2"></div>
									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Jeepers circa sneered well
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Oh one ouch ouch armadillo <span class="badge badge-primary ml-auto">Popular</span>
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Thus went far and pending <span class="badge badge-secondary ml-auto">On hold</span>
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-file-text2"></i> Or cat together chose eagle
									</a>

									<a href="#" class="dropdown-item">
										<i class="icon-arrow-right22"></i> Show all articles (85)
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /directory -->


				<!-- Latest added -->
				<div class="text-center mb-3 py-2">
					<h4 class="font-weight-semibold mb-1">Latest articles &amp; videos</h4>
					<span class="text-muted d-block">Dear bawled since some the contrary much hyena jeez clear fox despite the concomitant</span>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#"><i class="icon-file-text2 text-success-400 icon-2x mt-1"></i></a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold"><a href="#" class="text-default">Walking away fallaciously</a></h6>
									Ouch licentiously lackadaisical crud together began gregarious below near darn goodness
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#"><i class="icon-file-play text-warning-400 icon-2x mt-1"></i></a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold"><a href="#" class="text-default">Nutria and rewound</a></h6>
									Strove the darn hey as far oh alas and yikes and gosh knitted this slept via gerbil baneful
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#"><i class="icon-file-xml text-info icon-2x mt-1"></i></a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold"><a href="#" class="text-default">Bound befell well</a></h6>
									And since left before understandably much groomed along burped through dear and gosh
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#"><i class="icon-file-text2 text-success-400 icon-2x mt-1"></i></a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold"><a href="#" class="text-default">Porcupine strict nodded</a></h6>
									Left extravagant leered crab repaid outgrew said knelt hello astride within oh disbanded 
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#"><i class="icon-file-play text-warning-400 icon-2x mt-1"></i></a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold"><a href="#" class="text-default">Ducked ravenously dear</a></h6>
									Reran sincere said monkey one slapped jeepers rubbed fleetly incongruously due yet llama
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#"><i class="icon-file-xml text-info icon-2x mt-1"></i></a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold"><a href="#" class="text-default">Contemptibly bleakly</a></h6>
									Speechless far goodness bent as boa crud because vague far koala the that lantern alas sold
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#"><i class="icon-file-text2 text-success-400 icon-2x mt-1"></i></a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold"><a href="#" class="text-default">Blamelessly wow hence</a></h6>
									A without walking some objective hiccupped some this overlay immorally crud and gosh
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#"><i class="icon-file-play text-warning-400 icon-2x mt-1"></i></a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold"><a href="#" class="text-default">Manatee broadcast</a></h6>
									And some where indecently manta floated raptly youthful unlike swept dragonfly pulled moth
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="card card-body">
							<div class="media">
								<div class="mr-3">
									<a href="#"><i class="icon-file-xml text-info icon-2x mt-1"></i></a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold"><a href="#" class="text-default">Stretched flamboyant</a></h6>
									Some when foolhardy dangerous so less less aimlessly along hazardously oversaw much stopped
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /latest added -->


				<!-- Featured articles -->
				<div class="text-center mb-3 py-2">
					<h4 class="font-weight-semibold mb-1">Featured articles and tutorials</h4>
					<span class="text-muted d-block">And porcupine the wallaby far the due thus rash did near dear far pangolin parrot less</span>
				</div>

				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="card">
							<div class="card-img-actions">
								<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img-top">
									<a href="#" class="btn btn-outline btn-icon bg-white text-white border-white border-2 rounded-round">
										<i class="icon-download4"></i>
									</a>
									<a href="#" class="btn btn-outline btn-icon bg-white text-white border-white border-2 ml-2 rounded-round">
										<i class="icon-link2"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<h5 class="card-title">For ostrich much</h5>
								<p class="card-text">Some various less crept gecko the jeepers dear forewent far the ouch far a incompetent saucy wherever towards</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between">
								<span class="text-muted">April 12, 2018</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-half font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(12)</span>
								</span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="card">
							<div class="card-img-actions">
								<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img-top">
									<a href="#" class="btn btn-outline btn-icon bg-white text-white border-white border-2 rounded-round">
										<i class="icon-download4"></i>
									</a>
									<a href="#" class="btn btn-outline btn-icon bg-white text-white border-white border-2 ml-2 rounded-round">
										<i class="icon-link2"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<h5 class="card-title">Helpfully stolidly</h5>
								<p class="card-text">Hippopotamus aside while a shrewdly this after kookaburra wow in haphazardly much salmon buoyantly sullen gosh</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between">
								<span class="text-muted">April 11, 2018</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(35)</span>
								</span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="card">
							<div class="card-img-actions">
								<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img-top">
									<a href="#" class="btn btn-outline btn-icon bg-white text-white border-white border-2 rounded-round">
										<i class="icon-download4"></i>
									</a>
									<a href="#" class="btn btn-outline btn-icon bg-white text-white border-white border-2 ml-2 rounded-round">
										<i class="icon-link2"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<h5 class="card-title">Considering far</h5>
								<p class="card-text">Kookaburra so hey a less tritely far congratulated this winked some under had unblushing beyond sympathetic</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between">
								<span class="text-muted">April 10, 2018</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-empty3 font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(42)</span>
								</span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="card">
							<div class="card-img-actions">
								<img class="card-img-top img-fluid" src="../../../../global_assets/images/placeholders/placeholder.jpg" alt="">
								<div class="card-img-actions-overlay card-img-top">
									<a href="#" class="btn btn-outline btn-icon bg-white text-white border-white border-2 rounded-round">
										<i class="icon-download4"></i>
									</a>
									<a href="#" class="btn btn-outline btn-icon bg-white text-white border-white border-2 ml-2 rounded-round">
										<i class="icon-link2"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<h5 class="card-title">Despite perversely</h5>
								<p class="card-text">Coming merits and was talent enough far. Sir joy northward sportsmen education. Put still any about manor heard</p>
							</div>

							<div class="card-footer bg-transparent d-flex justify-content-between">
								<span class="text-muted">April 09, 2018</span>
								<span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(59)</span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<!-- /featured articles -->


				<!-- Submit a ticket -->
				<div class="card card-body">
					<div class="media align-items-center align-items-md-start flex-column flex-md-row">
						<a href="#" class="text-teal mr-md-3 align-self-md-center mb-3 mb-md-0">
							<i class="icon-question7 text-success-400 border-success-400 border-3 rounded-round p-2"></i>
						</a>

						<div class="media-body text-center text-md-left">
							<h6 class="media-title font-weight-semibold">Can't find what you're looking for?</h6>
							Maladroit forgetfully under until the fraternally on one much whispered waked much cumulatively some rabidly after thanks hey
						</div>

						<a href="#" class="btn bg-warning-400 align-self-md-center ml-md-3 mt-3 mt-md-0"><i class="icon-mail5 mr-2"></i> Submit a ticket</a>
					</div>
				</div>
				<!-- /submit a ticket -->

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
