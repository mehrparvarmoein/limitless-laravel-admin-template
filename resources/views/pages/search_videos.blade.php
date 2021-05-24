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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Search</span> - Videos</h4>
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
							<a href="search_videos" class="breadcrumb-item">Search</a>
							<span class="breadcrumb-item active">Videos</span>
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
		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">Up unpacked friendly</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
			                    			<li class="list-inline-item">14 minutes ago</li>
			                    		</ul>
										The him father parish looked has sooner. Attachment frequently gay terminated son. You greater nay use prudent placing passage to so distant behaved natural between do talking...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">That know ask case ham</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ section</li>
			                    			<li class="list-inline-item">1 hour ago</li>
			                    		</ul>
										Friends off her windows painful. Still gay event you being think nay for. In three if aware he point it. Effects warrant me by no on feeling settled resolve. Her old collecting...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">Perhaps prudent several</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ section</li>
			                    			<li class="list-inline-item">2 hours ago</li>
			                    		</ul>
										Did had way law dinner square tastes. Recommend concealed yet her procuring see consulted depending. Adieus hunted end plenty are his she afraid. Resources agreement contained...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">Contented get distrusts</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ section</li>
			                    			<li class="list-inline-item">4 hours ago</li>
			                    		</ul>
										On unaffected resolution on considered of. No thought me husband or colonel forming effects. End sitting shewing who saw besides son musical adapted. Contrasted interested warm...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">He families believed</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
			                    			<li class="list-inline-item">6 hours ago</li>
			                    		</ul>
										Ask especially collecting terminated may son expression. Extremely eagerness principle estimable own was man. Men received far his dashwood subjects new. My sufficient surrounded...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">Connection too unaffected</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ section</li>
			                    			<li class="list-inline-item">8 hours ago</li>
			                    		</ul>
										He my polite be object oh change. Consider no mr am overcame yourself throwing sociable children. Hastily her totally conduct may. My solid by stuff first smile fanny. Humoured...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">New smiling friends</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
			                    			<li class="list-inline-item">10 hours ago</li>
			                    		</ul>
										Sportsman delighted improving dashwoods gay instantly happiness six. Ham now amounted absolute not mistaken way pleasant whatever. At an these still no dried folly stood thing it...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">Leaf she does none</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ section</li>
			                    			<li class="list-inline-item">12 hours ago</li>
			                    		</ul>
										Mrs ham intention promotion engrossed assurance defective. Confined so graceful building opinions whatever trifling in. Insisted out differed ham man endeavor expenses. At on he...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">Snug love will up</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ section</li>
			                    			<li class="list-inline-item">14 hours ago</li>
			                    		</ul>
										Offices parties lasting outward nothing age few resolve. Impression to discretion understood to we interested he excellence. Him remarkably use projection collecting. Going about...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">Pursuit man son musical</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
			                    			<li class="list-inline-item">16 hours ago</li>
			                    		</ul>
										Attention affection at my preferred offending shameless me if agreeable. Life lain held calm and true neat she. Much feet each so went no from. Truth began maids linen an mr to...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">It surprise informed</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
			                    			<li class="list-inline-item">18 hours ago</li>
			                    		</ul>
										So by colonel hearted ferrars. Draw from upon here gone add one. He in sportsman household otherwise it perceived instantly. Is inquiry no he several excited am. Called though excuse...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">Case read they must</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
			                    			<li class="list-inline-item">20 hours ago</li>
			                    		</ul>
										On it differed repeated wandered required in. Then girl neat why yet knew rose spot. Moreover property we he kindness greatest be oh striking laughter. In me he collecting affronting...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">An particular contrasted</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ section</li>
			                    			<li class="list-inline-item">22 hours ago</li>
			                    		</ul>
										Contented attending smallness it oh ye unwilling. Turned favour man two but lovers. Suffer should if waited common person little oh. Improved civility graceful sex few smallest has...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">Nay preference dispatched</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
			                    			<li class="list-inline-item">1 day ago</li>
			                    		</ul>
										Style too own civil out along. Perfectly offending attempted add arranging age gentleman concluded. Get who uncommonly our expression ten increasing considered occasional travelling...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">Too carriage attended</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ section</li>
			                    			<li class="list-inline-item">2 days ago</li>
			                    		</ul>
										Marianne or husbands if at stronger ye. Considered is as middletons uncommonly. Promotion perfectly ye consisted so. His chatty dining for effect ladies active journey wishing not...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">Twenty sister hearts</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ section</li>
			                    			<li class="list-inline-item">3 days ago</li>
			                    		</ul>
										Arrived totally in as between private. Favour of so as on pretty though elinor direct. Reasonable estimating be alteration we themselves entreaties me of reasonably. Direct wished...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">We hill lady will</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ section</li>
			                    			<li class="list-inline-item">4 days ago</li>
			                    		</ul>
										Whose asked stand it sense no spoil to. Prudent you too his conduct feeling limited and. Side he lose paid as hope so face upon be. Goodness did suitable learning put. Excited him...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">Consider now provided</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
			                    			<li class="list-inline-item">5 days ago</li>
			                    		</ul>
										At by asked being court hopes. Farther so friends am to detract. Forbade concern do private be. Offending residence but men engrossed shy. Pretend am earnest offered arrived company...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">Invitation is unpleasant</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
			                    			<li class="list-inline-item">7 days ago</li>
			                    		</ul>
										Pleased him another was settled for. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire. Stanhill on we if vicinity material in saw him...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">Did sentiments increasing</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> FAQ section</li>
			                    			<li class="list-inline-item">10 days ago</li>
			                    		</ul>
										Barton did feebly change man she afford square add. Want eyes by neat so just must. Past draw tall up face show rent oh mr. Required is debating extended wondered as do. Described has...
									</div>
								</li>

		        				<li class="media flex-column flex-sm-row">
		        					<div class="mr-sm-3 mb-2 mb-sm-0">
										<div class="card-img-actions">
											<a href="#">
												<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid img-preview rounded" alt="">
												<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
											</a>
										</div>
									</div>

		        					<div class="media-body">
										<h6 class="media-title"><a href="#">It allowance prevailed</a></h6>
			                    		<ul class="list-inline list-inline-dotted text-muted mb-2">
			                    			<li class="list-inline-item"><i class="icon-book-play mr-2"></i> Video tutorials</li>
			                    			<li class="list-inline-item">12 days ago</li>
			                    		</ul>
										Alteration literature to or an sympathize mr imprudence. Of is ferrars subject as enjoyed or tedious cottage. Procuring as in resembled by in agreeable. Next long mr eyes. Admiration...
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

		                	<div class="pt-3 border-top">
		                    	<h6 class="mb-0">Featured videos</h6>
		                    	<div class="row">
			                    	<div class="col-sm-4">
			                    		<div class="mt-3">
			                    			<div class="card-img-actions">
			                    				<a href="#">
			                    					<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt="">
			                    					<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
		                    					</a>
	                    					</div>
                    					</div>
			                    		<div class="mt-3">
			                    			<div class="card-img-actions">
			                    				<a href="#">
			                    					<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt="">
			                    					<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
		                    					</a>
	                    					</div>
                    					</div>
			                    	</div>

			                    	<div class="col-sm-4">
			                    		<div class="mt-3">
			                    			<div class="card-img-actions">
			                    				<a href="#">
			                    					<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt="">
			                    					<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
		                    					</a>
	                    					</div>
                    					</div>
			                    		<div class="mt-3">
			                    			<div class="card-img-actions">
			                    				<a href="#">
			                    					<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt="">
			                    					<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
		                    					</a>
	                    					</div>
                    					</div>
			                    	</div>

			                    	<div class="col-sm-4">
			                    		<div class="mt-3">
			                    			<div class="card-img-actions">
			                    				<a href="#">
			                    					<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt="">
			                    					<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
		                    					</a>
	                    					</div>
                    					</div>
			                    		<div class="mt-3">
			                    			<div class="card-img-actions">
			                    				<a href="#">
			                    					<img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded" alt="">
			                    					<span class="card-img-actions-overlay card-img"><i class="icon-play3"></i></span>
		                    					</a>
	                    					</div>
                    					</div>
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
