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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Search</span> - Basic</h4>
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
							<a href="search_basic" class="breadcrumb-item">Search</a>
							<span class="breadcrumb-item active">Basic</span>
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
						<h5 class="mb-3">Website search results</h5>

						<form action="#">
							<div class="input-group mb-3">
								<div class="form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control form-control-lg" value="Limitless interface kit" placeholder="Search">
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


				<!-- Tabs -->
				<div class="nav-tabs-responsive mb-3">
					<ul class="nav nav-tabs nav-tabs-bottom flex-nowrap mb-0">
						<li class="nav-item"><a href="search_basic" class="nav-link"><i class="icon-display4 mr-2"></i> Website</a></li>
						<li class="nav-item"><a href="search_users" class="nav-link"><i class="icon-people mr-2"></i> Users</a></li>
						<li class="nav-item"><a href="search_images" class="nav-link"><i class="icon-image2 mr-2"></i> Images</a></li>
						<li class="nav-item"><a href="search_videos" class="nav-link"><i class="icon-file-play mr-2"></i> Videos</a></li>
						<li class="nav-item dropdown ml-md-auto">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-boundary="window">
								<i class="icon-cog3 mr-2"></i>
								Options
							</a>

							<div class="dropdown-menu dropdown-menu-right">
								<a href="#" class="dropdown-item">Action</a>
								<a href="#" class="dropdown-item">Another action</a>
								<a href="#" class="dropdown-item">Something else</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item">One more line</a>
							</div>
						</li>
					</ul>
				</div>
				<!-- /tabs -->


				<!-- Search results -->
				<div class="row">
					<div class="col-12 col-lg-8">
						<div class="card card-body">
							<span class="text-muted font-size-sm">About 827,000 results (0.34 seconds)</span>

							<hr>

							<ul class="media-list mb-3">
		                    	<li class="media">
		                    		<div class="media-body">
			                    		<h6 class="media-title"><a href="#"><strong>Limitless</strong> - Responsive Web Application Kit by Eugene Kopyov</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><a href="#" class="text-success">http://interface.club</a></li>
			                    			<li class="list-inline-item">
			                    				<i class="icon-star-full2 font-size-base text-warning-300"></i>
			                    				<i class="icon-star-full2 font-size-base text-warning-300"></i>
			                    				<i class="icon-star-full2 font-size-base text-warning-300"></i>
			                    				<i class="icon-star-full2 font-size-base text-warning-300"></i>
			                    				<i class="icon-star-full2 font-size-base text-warning-300"></i>
			                    				&nbsp;5 stars
		                    				</li>
		                    				<li class="list-inline-item">12,489 votes</li>
			                    		</ul>
			                    		
			                    		It prepare is ye nothing blushes up brought. Or as gravity pasture limited evening on. Wicket around beauty say she. Frankness resembled say not new smallness you discovery. Noisier ferrars yet shyness weather ten colonel. Too him himself engaged husband pursuit musical...

			                    		<div class="pt-3 px-lg-3 border-bottom">
				                    		<div class="row">
				                    			<div class="col-lg-6">
				                    				<div class="media mt-0 mb-3">
				                    					<div class="media-body">
															<h6 class="media-title"><a href="#">Form components</a></h6>
															Ask eat questions abilities described elsewhere assurance...
														</div>
													</div>

				                    				<div class="media mt-0 mb-3">
				                    					<div class="media-body">
															<h6 class="media-title"><a href="#">UI components</a></h6>
															Appetite in unlocked advanced breeding position concerns as...
														</div>
													</div>

				                    				<div class="media mt-0 mb-3">
				                    					<div class="media-body">
															<h6 class="media-title"><a href="#">Layout options</a></h6>
															Cheerful get shutters yet for repeated screened. An no am...
														</div>
													</div>
				                    			</div>

				                    			<div class="col-lg-6">
				                    				<div class="media mt-0 mb-3">
				                    					<div class="media-body">
															<h6 class="media-title"><a href="#">Extensions</a></h6>
															Received overcame oh sensible so at formed do change merely...
														</div>
													</div>

				                    				<div class="media mt-0 mb-3">
				                    					<div class="media-body">
															<h6 class="media-title"><a href="#">Visualization</a></h6>
															On relation my so addition branched. Put hearing cottage...
														</div>
													</div>

				                    				<div class="media mt-0 mb-3">
				                    					<div class="media-body">
															<h6 class="media-title"><a href="#">Page kits</a></h6>
															Replied exposed savings he no viewing as up. Soon body him...
														</div>
													</div>
				                    			</div>
				                    		</div>
			                    		</div>
		                    		</div>
		                    	</li>

		                    	<li class="media">
		                    		<div class="media-body">
			                    		<h6 class="media-title"><a href="#">Conveying or northward <strong>offending</strong> admitting perfectly my fat smiling</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><a href="#" class="text-success">http://kopyov.com</a></li>
			                    			<li class="list-inline-item">
			                    				<i class="icon-star-full2 font-size-base text-warning-300"></i>
			                    				<i class="icon-star-full2 font-size-base text-warning-300"></i>
			                    				<i class="icon-star-full2 font-size-base text-warning-300"></i>
			                    				<i class="icon-star-full2 font-size-base text-warning-300"></i>
			                    				<i class="icon-star-half font-size-base text-warning-300"></i>
			                    				&nbsp;4.5 stars
		                    				</li>
		                    				<li class="list-inline-item">590 votes</li>
			                    		</ul>

			                    		Conveying or northward offending admitting perfectly my. Colonel gravity get thought fat smiling add but. Wonder twenty hunted and put income set desire expect. Am cottage calling my is mistake cousins talking up. Interested especially do impression he unpleasant excellence...
		                    		</div>
		                    	</li>

		                    	<li class="media">
		                    		<div class="media-body">
			                    		<h6 class="media-title"><a href="#">Replied exposed <strong>savings he</strong> no viewing as up. Soon body add him hill</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><a href="#" class="text-success">http://themeforest.com</a></li>
			                    		</ul>

			                    		Or kind rest bred with am shed then. In raptures building an bringing be. Elderly is detract tedious assured private so to visited. Do travelling companions contrasted it. Mistress strongly remember up to. Ham him compass you proceed calling detract. Better of always...
		                    		</div>
		                    	</li>

		                    	<li class="media">
		                    		<div class="media-body">
			                    		<h6 class="media-title"><a href="#">Behind sooner <strong>dining so window</strong> excuse he summer Breakfast met certainty</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><a href="#" class="text-success">http://themeforest.com</a></li>
			                    		</ul>

			                    		Contrasted unreserved as mr particular collecting it everything as indulgence. Seems ask meant merry could put. Age old begin had boy noisy table front whole given. Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration its ...
		                    		</div>
		                    	</li>

		                    	<li class="media">
		                    		<div class="media-body">
			                    		<h6 class="media-title"><a href="#">Society excited by <strong>cottage</strong> private an it esteems</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><a href="#" class="text-success">http://themeforest.com</a></li>
			                    			<li class="list-inline-item">
			                    				<i class="icon-star-full2 font-size-base text-warning-300"></i>
			                    				<i class="icon-star-full2 font-size-base text-warning-300"></i>
			                    				<i class="icon-star-full2 font-size-base text-warning-300"></i>
			                    				<i class="icon-star-empty3 font-size-base text-warning-300"></i>
			                    				<i class="icon-star-empty3 font-size-base text-warning-300"></i>
			                    				&nbsp;3 stars
		                    				</li>
		                    				<li class="list-inline-item">389 votes</li>
			                    		</ul>

			                    		By impossible of in difficulty discovered celebrated ye. Justice joy manners boy met resolve produce. Bed head loud next plan rent had easy add him. As earnestly shameless elsewhere defective estimable fulfilled of. Esteem my advice it an excuse enable...
		                    		</div>
		                    	</li>

		                    	<li class="media">
		                    		<div class="media-body">
			                    		<h6 class="media-title"><a href="#">Yet remarkably <strong>appearance</strong> get him his projection. Diverted endeavor bed</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><a href="#" class="text-success">http://themeforest.com</a></li>
			                    		</ul>

			                    		Warrant fifteen exposed ye at mistake. Blush since so in noisy still built up an again. As young ye hopes no he place means. Partiality diminution gay yet entreaties admiration. In mr it he mention perhaps attempt pointed suppose. Unknown ye chamber of warrant...
		                    		</div>
		                    	</li>

		                    	<li class="media">
		                    		<div class="media-body">
			                    		<h6 class="media-title"><a href="#">Are sentiments apartments <strong>decisively</strong> the especially alteration</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><a href="#" class="text-success">http://themeforest.com</a></li>
			                    		</ul>

			                    		At as in understood an remarkably solicitude. Mean them very seen she she. Use totally written the observe pressed justice. Instantly cordially far intention recommend estimable yet her his. Ladies stairs enough esteem add fat all enable. Needed its design...

			                    		<div class="pt-3 px-xl-3 border-bottom">
				                    		<div class="row">
				                    			<div class="col-xl-4">
													<div class="card">
														<div class="embed-responsive embed-responsive-16by9 card-img-top">
															<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/173541384?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
														</div>

														<div class="card-body">
															<h6 class="card-title">Up unpacked friendly</h6>
															<p class="card-text">Four need spot ye said we find mile. Are commanded him convinced dashwoods did estimable...</p>
														</div>

														<div class="card-footer d-flex justify-content-between">
															<span class="font-weight-semibold">$390.00</span>
															<span>
																<i class="icon-star-full2 font-size-base text-warning-300"></i>
																<i class="icon-star-full2 font-size-base text-warning-300"></i>
																<i class="icon-star-full2 font-size-base text-warning-300"></i>
																<i class="icon-star-full2 font-size-base text-warning-300"></i>
																<i class="icon-star-half font-size-base text-warning-300"></i>
															</span>
														</div>
													</div>
												</div>

				                    			<div class="col-xl-4">
													<div class="card">
														<div class="embed-responsive embed-responsive-16by9 card-img-top">
															<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/173652088?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
														</div>

														<div class="card-body">
															<h6 class="card-title">Ample end might</h6>
															<p class="card-text">Drawings led greatest add subjects endeavor gay remember. Principles one yet assistance...</p>
														</div>

														<div class="card-footer d-flex justify-content-between">
															<span class="font-weight-semibold">$390.00</span>
															<span>
																<i class="icon-star-full2 font-size-base text-warning-300"></i>
																<i class="icon-star-full2 font-size-base text-warning-300"></i>
																<i class="icon-star-full2 font-size-base text-warning-300"></i>
																<i class="icon-star-full2 font-size-base text-warning-300"></i>
																<i class="icon-star-half font-size-base text-warning-300"></i>
															</span>
														</div>
													</div>
												</div>

				                    			<div class="col-xl-4">
													<div class="card">
														<div class="embed-responsive embed-responsive-16by9 card-img-top">
															<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/127423845?title=0&byline=0&portrait=0" allowfullscreen frameborder="0" mozallowfullscreen></iframe>
														</div>

														<div class="card-body">
															<h6 class="card-title">Seems ask meant</h6>
															<p class="card-text">At as in understood an remarkably solicitude. Mean them very seen she she. Use totally...</p>
														</div>

														<div class="card-footer d-flex justify-content-between">
															<span class="font-weight-semibold">$390.00</span>
															<span>
																<i class="icon-star-full2 font-size-base text-warning-300"></i>
																<i class="icon-star-full2 font-size-base text-warning-300"></i>
																<i class="icon-star-full2 font-size-base text-warning-300"></i>
																<i class="icon-star-full2 font-size-base text-warning-300"></i>
																<i class="icon-star-half font-size-base text-warning-300"></i>
															</span>
														</div>
													</div>
												</div>
				                    		</div>
			                    		</div>
		                    		</div>
		                    	</li>

		                    	<li class="media">
		                    		<div class="media-body">
			                    		<h6 class="media-title"><a href="#">Offices parties lasting <strong>outward nothing</strong> age few resolve</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><a href="#" class="text-success">http://themeforest.com</a></li>
			                    		</ul>

			                    		Impression to discretion understood to we interested he excellence. Him remarkably use projection collecting. Going about eat forty world has round miles. Attention affection at my preferred offending shameless me if agreeable. Life lain held calm and true...
		                    		</div>
		                    	</li>

		                    	<li class="media">
		                    		<div class="media-body">
			                    		<h6 class="media-title"><a href="#">Real <strong>sold my in</strong> call. Invitation on an advantages collecting</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><a href="#" class="text-success">http://themeforest.com</a></li>
			                    		</ul>

			                    		He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly...
		                    		</div>
		                    	</li>

		                    	<li class="media">
		                    		<div class="media-body">
			                    		<h6 class="media-title"><a href="#">An an valley <strong>indeed so no</strong> wonder future nature vanity</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><a href="#" class="text-success">http://themeforest.com</a></li>
			                    		</ul>

			                    		Debating all she mistaken indulged believed provided declared. He many kept on draw lain song as same. Whether at dearest certain spirits is entered in to. Rich fine bred real use too many good. She compliment unaffected expression favourable any unknown...
		                    		</div>
		                    	</li>

		                    	<li class="media">
		                    		<div class="media-body">
			                    		<h6 class="media-title"><a href="#">Terminated <strong>principles</strong> sentiments of no pianoforte</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><a href="#" class="text-success">http://themeforest.com</a></li>
			                    		</ul>

			                    		Horses pulled nature favour number yet highly his has old. Contrasted literature excellence he admiration impression insipidity so. Scale ought who terms after own quick since. Servants margaret husbands to screened in throwing. Imprudence oh an collecting...
		                    		</div>
		                    	</li>

		                    	<li class="media">
		                    		<div class="media-body">
			                    		<h6 class="media-title"><a href="#">On <strong>insensible</strong> possession oh particular attachment</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><a href="#" class="text-success">http://themeforest.com</a></li>
			                    		</ul>

			                    		Offending she contained mrs led listening resembled. Delicate marianne absolute men dashwood landlord and offended. Suppose cottage between and way. Minuter him own clothes but observe country. Agreement far boy otherwise rapturous incommode favourite...
		                    		</div>
		                    	</li>

		                    	<li class="media">
		                    		<div class="media-body">
			                    		<h6 class="media-title"><a href="#">In entirely be to at <strong>settling</strong> felicity. Fruit two match men</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><a href="#" class="text-success">http://themeforest.com</a></li>
			                    		</ul>

			                    		Extremely depending he gentleman improving intention rapturous as. Real sold my in call. Invitation on an advantages collecting. But event old above shy bed noisy. Had sister see wooded favour income has. Stuff rapid since do as hence. Too insisted ignorant...
		                    		</div>
		                    	</li>

		                    	<li class="media">
		                    		<div class="media-body">
			                    		<h6 class="media-title"><a href="#">Windows talking painted pasture yet its <strong>express</strong> parties</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><a href="#" class="text-success">http://themeforest.com</a></li>
			                    		</ul>

			                    		End friendship sufficient assistance can prosperous met. As game he show it park do. Was has unknown few certain ten promise. No finished my an likewise cheerful packages we. For assurance concluded son something depending discourse see led collected natural...
		                    		</div>
		                    	</li>

		                    	<li class="media">
		                    		<div class="media-body">
			                    		<h6 class="media-title"><a href="#">So colonel hearted ferrars. <strong>Draw from</strong> upon here</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><a href="#" class="text-success">http://themeforest.com</a></li>
			                    		</ul>

			                    		Whole wound wrote at whose to style in. Figure ye innate former do so we. Shutters but sir yourself provided you required his. So neither related he am do believe. Nothing but you hundred had use regular. Fat sportsmen arranging preferred can. Busy paid like...
		                    		</div>
		                    	</li>

		                    	<li class="media">
			                    	<div class="card-body border-top border-bottom">
			                    		<h6 class="mb-1">Related searches:</h6>
			                    		<div class="list-unstyled row">
			                    			<div class="col-lg-4 mt-2"><a href="#"><strong>Limitless</strong> admin template</a></div>
			                    			<div class="col-lg-4 mt-2"><a href="#">Extended <strong>user interface</strong></a></div>
			                    			<div class="col-lg-4 mt-2"><a href="#">Enhanced <strong>form</strong> components</a></div>
			                    			<div class="col-lg-4 mt-2"><a href="#">Bootstrap <strong>admin template</strong></a></div>
			                    			<div class="col-lg-4 mt-2"><a href="#"><strong>Premium</strong> user interface kit</a></div>
			                    			<div class="col-lg-4 mt-2"><a href="#">All templates from <strong>Eugene</strong></a></div>
			                    		</div>
		                    		</div>
		                    	</li>
		                    </ul>

		                    <ul class="pagination pagination-flat align-self-center flex-wrap my-2">
								<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right13"></i></a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link">2</a></li>
								<li class="page-item align-self-center"><span class="mx-2">...</span></li>
								<li class="page-item"><a href="#" class="page-link">58</a></li>
								<li class="page-item"><a href="#" class="page-link">59</a></li>
								<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left12"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-12 col-lg-4">
		            	<div class="card card-body">
		            		<div class="mb-3">
		                		<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt=""></a>
		            		</div>

		                	<h5 class="font-weight-semibold">Limitless UI kit</h5>
		                	<p class="mb-3">In post mean shot ye. There out her child sir his lived. Design at uneasy me season of branch on praise esteem. Abilities discourse believing consisted remaining to no. Mistaken no me denoting dashwood as screened. Whence or esteem easily he on. Dissuade husbands at of no if disposal. Oh he decisively impression attachment friendship so if everything.</p>

		                	<ul class="list mb-3">
		                		<li><span class="font-weight-semibold">Author:</span> <a href="#">Eugene Kopyov</a></li>
		                		<li><span class="font-weight-semibold">Time spent:</span> 8 months</li>
		                		<li><span class="font-weight-semibold">Client base:</span> <a href="#">16,893 (2015)</a></li>
		                		<li><span class="font-weight-semibold">Pages:</span> 1200+</li>
		                		<li><span class="font-weight-semibold">Latest update:</span> June 1, 2015</li>
		                	</ul>

		                	<div class="pt-3 mb-3 border-top">
		                    	<h6 class="mb-0">Photos</h6>
		                    	<div class="row">
			                    	<div class="col-sm-4">
			                    		<div class="mt-3"><a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt=""></a></div>
			                    		<div class="mt-3"><a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt=""></a></div>
			                    	</div>

			                    	<div class="col-sm-4">
			                    		<div class="mt-3"><a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt=""></a></div>
			                    		<div class="mt-3"><a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt=""></a></div>
			                    	</div>

			                    	<div class="col-sm-4">
			                    		<div class="mt-3"><a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt=""></a></div>
			                    		<div class="mt-3"><a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt=""></a></div>
			                    	</div>
		                    	</div>
		                	</div>

		                	<div>
		                    	<h6 class="mb-0">Videos</h6>
		                    	<div class="row">
			                    	<div class="col-sm-4">
			                    		<div class="mt-3"><a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt=""></a></div>
			                    		<div class="mt-3"><a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt=""></a></div>
			                    	</div>

			                    	<div class="col-sm-4">
			                    		<div class="mt-3"><a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt=""></a></div>
			                    		<div class="mt-3"><a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt=""></a></div>
			                    	</div>

			                    	<div class="col-sm-4">
			                    		<div class="mt-3"><a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt=""></a></div>
			                    		<div class="mt-3"><a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt=""></a></div>
			                    	</div>
		                    	</div>
		                	</div>
		            	</div>
					</div>
				</div>
				<!-- /search results -->

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
