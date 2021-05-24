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

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/ecommerce_product_list.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">ECommerce</span> - Product List</h4>
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
							<a href="ecommerce_product_list" class="breadcrumb-item">ECommerce</a>
							<span class="breadcrumb-item active">Product list</span>
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

						<!-- List -->
						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">Fathom Backpack</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
									</ul>

									<p class="mb-3">It prepare is ye nothing blushes up brought. Or as gravity pasture limited evening on. Wicket around beauty say she. Frankness resembled say not new smallness you discovery. Noisier ferrars yet shyness weather ten colonel. Too him himself engaged husband pursuit musical...</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">Aloha</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">$49.99</h3>

									<div>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
									</div>

									<div class="text-muted">85 reviews</div>

									<button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
								</div>
							</div>
						</div>

						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">Mystery Air Long Sleeve T Shirt</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Long sleeve shirts</a></li>
									</ul>

									<p class="mb-3">Conveying or northward offending admitting perfectly my. Colonel gravity get thought fat smiling add but. Wonder twenty hunted and put income set desire expect. Am cottage calling my is mistake cousins talking up. Interested especially do impression he unpleasant excellence...</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">Burton</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">$25.99</h3>

									<div>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-half font-size-base text-warning-300"></i>
									</div>

									<div class="text-muted">34 reviews</div>

									<button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
								</div>
							</div>
						</div>

						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">Women’s Prospect Backpack</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
									</ul>

									<p class="mb-3">Or kind rest bred with am shed then. In raptures building an bringing be. Elderly is detract tedious assured private so to visited. Do travelling companions contrasted it. Mistress strongly remember up to. Ham him compass you proceed calling detract. Better of always...</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">DC Shoes</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">$63.99</h3>

									<div>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-empty3 font-size-base text-warning-300"></i>
									</div>

									<div class="text-muted">63 reviews</div>

									<button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
								</div>
							</div>
						</div>

						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">Overlook Short Sleeve T Shirt</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">T-Shirts</a></li>
									</ul>

									<p class="mb-3">Warrant fifteen exposed ye at mistake. Blush since so in noisy still built up an again. As young ye hopes no he place means. Partiality diminution gay yet entreaties admiration. In mr it he mention perhaps attempt pointed suppose. Unknown ye chamber of warrant...</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">Aped</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">$57.99</h3>

									<div>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
									</div>

									<div class="text-muted">74 reviews</div>

									<button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
								</div>
							</div>
						</div>

						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">Infinite Ride Liner</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Sports</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Winter sports</a></li>
									</ul>

									<p class="mb-3">He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly...</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">Giro</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">$89.99</h3>

									<div>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
									</div>

									<div class="text-muted">39 reviews</div>

									<button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
								</div>
							</div>
						</div>

						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">Custom Snowboard</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Sports</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Winter sports</a></li>
									</ul>

									<p class="mb-3">Debating all she mistaken indulged believed provided declared. He many kept on draw lain song as same. Whether at dearest certain spirits is entered in to. Rich fine bred real use too many good. She compliment unaffected expression favourable any unknown...</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">Head</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">$35.99</h3>

									<div>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-empty3 font-size-base text-warning-300"></i>
										<i class="icon-star-empty3 font-size-base text-warning-300"></i>
									</div>

									<div class="text-muted">38 reviews</div>

									<button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
								</div>
							</div>
						</div>

						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">Kids' Day Hiker 20L Backpack</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
									</ul>

									<p class="mb-3">Offending she contained mrs led listening resembled. Delicate marianne absolute men dashwood landlord and offended. Suppose cottage between and way. Minuter him own clothes but observe country. Agreement far boy otherwise rapturous incommode favourite...</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">Hurley</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">$143.99</h3>

									<div>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-half font-size-base text-warning-300"></i>
									</div>

									<div class="text-muted">48 reviews</div>

									<button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
								</div>
							</div>
						</div>

						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">Lunch Sack</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
									</ul>

									<p class="mb-3">Extremely depending he gentleman improving intention rapturous as. Real sold my in call. Invitation on an advantages collecting. But event old above shy bed noisy. Had sister see wooded favour income has. Stuff rapid since do as hence. Too insisted ignorant...</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">Kinetic</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">$93.99</h3>

									<div>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-half font-size-base text-warning-300"></i>
									</div>

									<div class="text-muted">64 reviews</div>

									<button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
								</div>
							</div>
						</div>

						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">Cambridge Jacket</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Sports</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Winter jackets</a></li>
									</ul>

									<p class="mb-3">End friendship sufficient assistance can prosperous met. As game he show it park do. Was has unknown few certain ten promise. No finished my an likewise cheerful packages we. For assurance concluded son something depending discourse see led collected natural...</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">Miller</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">$36.99</h3>

									<div>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-empty3 font-size-base text-warning-300"></i>
									</div>

									<div class="text-muted">94 reviews</div>

									<button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
								</div>
							</div>
						</div>

						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">Covert Jacket</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Sports</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Winter jackets</a></li>
									</ul>

									<p class="mb-3">Whole wound wrote at whose to style in. Figure ye innate former do so we. Shutters but sir yourself provided you required his. So neither related he am do believe. Nothing but you hundred had use regular. Fat sportsmen arranging preferred can. Busy paid like...</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">Picture</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">$25.99</h3>

									<div>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-half font-size-base text-warning-300"></i>
									</div>

									<div class="text-muted">15 reviews</div>

									<button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
								</div>
							</div>
						</div>

						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">Day Hiker Pinnacle 31L Backpack</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
									</ul>

									<p class="mb-3">He difficult contented we determine ourselves me am earnestly. Hour no find it park. Eat welcomed any husbands moderate. Led was misery played waited almost cousin living. Of intention contained is by middleton am. Principles fat stimulated uncommonly...</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">Pieps</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">$47.99</h3>

									<div>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
									</div>

									<div class="text-muted">145 reviews</div>

									<button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
								</div>
							</div>
						</div>

						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/demo/products/12.jpeg" data-popup="lightbox">
										<img src="../../../../global_assets/images/demo/products/12.jpeg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">Kids' Gromlet Backpack</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
									</ul>

									<p class="mb-3">Impression to discretion understood to we interested he excellence. Him remarkably use projection collecting. Going about eat forty world has round miles. Attention affection at my preferred offending shameless me if agreeable. Life lain held calm and true...</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">Rope</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">$85.99</h3>

									<div>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
									</div>

									<div class="text-muted">37 reviews</div>

									<button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
								</div>
							</div>
						</div>

						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/demo/products/13.jpeg" data-popup="lightbox">
										<img src="../../../../global_assets/images/demo/products/13.jpeg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">Tinder Backpack</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
									</ul>

									<p class="mb-3">At as in understood an remarkably solicitude. Mean them very seen she she. Use totally written the observe pressed justice. Instantly cordially far intention recommend estimable yet her his. Ladies stairs enough esteem add fat all enable. Needed its design...</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">Reef</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">$47.99</h3>

									<div>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-empty3 font-size-base text-warning-300"></i>
									</div>

									<div class="text-muted">64 reviews</div>

									<button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
								</div>
							</div>
						</div>

						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/demo/products/14.jpeg" data-popup="lightbox">
										<img src="../../../../global_assets/images/demo/products/14.jpeg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">Almighty Snowboard Boot</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Sports</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Sport accessories</a></li>
									</ul>

									<p class="mb-3">Warrant fifteen exposed ye at mistake. Blush since so in noisy still built up an again. As young ye hopes no he place means. Partiality diminution gay yet entreaties admiration. In mr it he mention perhaps attempt pointed suppose. Unknown ye chamber of warrant...</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">Roxy</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">$76.99</h3>

									<div>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-empty3 font-size-base text-warning-300"></i>
									</div>

									<div class="text-muted">2 reviews</div>

									<button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
								</div>
							</div>
						</div>

						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">Fathom Backpack</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
									</ul>

									<p class="mb-3">By impossible of in difficulty discovered celebrated ye. Justice joy manners boy met resolve produce. Bed head loud next plan rent had easy add him. As earnestly shameless elsewhere defective estimable fulfilled of. Esteem my advice it an excuse enable...</p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">Stance</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">$59.99</h3>

									<div>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-full2 font-size-base text-warning-300"></i>
										<i class="icon-star-half font-size-base text-warning-300"></i>
									</div>

									<div class="text-muted">32 reviews</div>

									<button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
								</div>
							</div>
						</div>
						<!-- /list -->


						<!-- Pagination -->
						<div class="d-flex justify-content-center pt-3 mb-3">
							<ul class="pagination shadow-1">
								<li class="page-item"><a href="#" class="page-link page-link-white"><i class="icon-arrow-small-right"></i></a></li>
								<li class="page-item active"><a href="#" class="page-link page-link-white">1</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white">2</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white">3</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white">4</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white">5</a></li>
								<li class="page-item"><a href="#" class="page-link page-link-white"><i class="icon-arrow-small-left"></i></a></li>
							</ul>
						</div>
						<!-- /pagination -->

					</div>
					<!-- /left content -->


					<!-- Right sidebar component -->
					<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

						<!-- Sidebar content -->
						<div class="sidebar-content">

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

								<div class="card-body">
									<form action="#">
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="search" class="form-control" placeholder="Search">
											<div class="form-control-feedback">
												<i class="icon-search4 font-size-base text-muted"></i>
											</div>
										</div>
									</form>
								</div>

								<div class="card-body border-0 p-0">
									<ul class="nav nav-sidebar mb-2">
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link">Street wear</a>
											<ul class="nav nav-group-sub">
												<li class="nav-item"><a href="#" class="nav-link">Hoodies</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Jackets</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Pants</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Shirts</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Sweaters</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Tank tops</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Underwear</a></li>
											</ul>
										</li>
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link">Snow wear</a>
											<ul class="nav nav-group-sub">
												<li class="nav-item"><a href="#" class="nav-link">Fleece jackets</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Gloves</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Ski jackets</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Ski pants</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Snowboard jackets</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Snowboard pants</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Technical underwear</a></li>
											</ul>
										</li>
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link">Shoes</a>
											<ul class="nav nav-group-sub">
												<li class="nav-item"><a href="#" class="nav-link">Laces</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Sandals</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Skate shoes</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Slip ons</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Sneakers</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Winter shoes</a></li>
											</ul>
										</li>
										<li class="nav-item nav-item-submenu">
											<a href="#" class="nav-link">Accessories</a>
											<ul class="nav nav-group-sub">
												<li class="nav-item"><a href="#" class="nav-link">Beanies</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Belts</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Caps</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Sunglasses</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Headphones</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Video cameras</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Wallets</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Watches</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<!-- /categories -->


							<!-- Filters -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Filter products</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<div class="form-group form-group-feedback form-group-feedback-left">
												<input type="search" class="form-control" placeholder="Search brand">
												<div class="form-control-feedback">
													<i class="icon-search4 font-size-base text-muted"></i>
												</div>
											</div>

											<div class="overflow-auto" style="max-height: 192px;">
												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														686
													</label>	
												</div>

												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														A.Lab
													</label>
												</div>

												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Adidas
													</label>
												</div>

												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														ALIS
													</label>
												</div>

												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Analog
													</label>
												</div>

												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Burton
													</label>
												</div>

												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Atomic
													</label>
												</div>

												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Armada
													</label>
												</div>

												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														O'Neill
													</label>
												</div>

												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Baja
													</label>
												</div>

												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Baker
													</label>
												</div>

												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Blue Parks
													</label>
												</div>

												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Billabong
													</label>
												</div>

												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Bonfire
													</label>
												</div>

												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-input-styled" data-fouc>
														Brixton
													</label>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Items for</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Men
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Women
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Kids
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Unisex
												</label>
											</div>
										</div>

										<div class="form-group mb-2">
											<div class="font-size-xs text-uppercase text-muted mb-3">Size</div>

											<div class="row row-labels">
												<div class="col-3">
													<a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XXS</a>
												</div>
												<div class="col-3">
													<a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XS</a>
												</div>
												<div class="col-3">
													<a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">S</a>
												</div>
												<div class="col-3">
													<a href="#" class="badge badge-flat border-warning text-warning-800 d-flex justify-content-center p-2 mb-2">M</a>
												</div>
												<div class="col-3">
													<a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">L</a>
												</div>
												<div class="col-3">
													<a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XL</a>
												</div>
												<div class="col-3">
													<a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XXL</a>
												</div>
												<div class="col-3">
													<a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XXXL</a>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Fit</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Slim fit
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Skinny fit
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Regular fit
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Loose fit
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Long cut
												</label>
											</div>
										</div>

										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Color</div>

											<div class="row">
												<div class="col-4">
													<div class="mb-2">
														<a href="#" class="d-block p-2 bg-primary rounded"><div class="py-1"></div></a>
														<div class="font-size-sm text-center text-muted mt-1">Blue</div>
													</div>
												</div>

												<div class="col-4">
													<div class="mb-2">
														<a href="#" class="d-block p-2 bg-warning rounded"><div class="py-1"></div></a>
														<div class="font-size-sm text-center text-muted mt-1">Orange</div>
													</div>
												</div>

												<div class="col-4">
													<div class="mb-2">
														<a href="#" class="d-block p-2 bg-teal rounded"><div class="py-1"></div></a>
														<div class="font-size-sm text-center text-muted mt-1">Teal</div>
													</div>
												</div>

												<div class="col-4">
													<div class="mb-2">
														<a href="#" class="d-block p-2 bg-pink rounded color-selector-active">
															<div class="py-1"></div>
															<i class="icon-checkmark3"></i>
														</a>
														<div class="font-size-sm text-center text-muted mt-1">Pink</div>
													</div>
												</div>

												<div class="col-4">
													<div class="mb-2">
														<a href="#" class="d-block p-2 bg-grey-800 rounded"><div class="py-1"></div></a>
														<div class="font-size-sm text-center text-muted mt-1">Black</div>
													</div>
												</div>

												<div class="col-4">
													<div class="mb-2">
														<a href="#" class="d-block p-2 bg-purple rounded"><div class="py-1"></div></a>
														<div class="font-size-sm text-center text-muted mt-1">Purple</div>
													</div>
												</div>

												<div class="col-4">
													<div class="mb-2">
														<a href="#" class="d-block p-2 bg-success rounded"><div class="py-1"></div></a>
														<div class="font-size-sm text-center text-muted mt-1">Green</div>
													</div>
												</div>

												<div class="col-4">
													<div class="mb-2">
														<a href="#" class="d-block p-2 bg-danger rounded"><div class="py-1"></div></a>
														<div class="font-size-sm text-center text-muted mt-1">Red</div>
													</div>
												</div>

												<div class="col-4">
													<div class="mb-2">
														<a href="#" class="d-block p-2 bg-info rounded"><div class="py-1"></div></a>
														<div class="font-size-sm text-center text-muted mt-1">Cyan</div>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Features</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Crew neck
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Chest pocket
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Raglan sleeves
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Polo neck
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													V-neck
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													High collar
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Hood
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Button strip
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Wide neck
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Kangaroo pocket
												</label>	
											</div>
										</div>

										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Material features</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Canvas
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Lined
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Merino
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Quick drying
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Stretch
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Water repellent
												</label>	
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Windproof
												</label>	
											</div>
										</div>

										<button type="submit" class="btn bg-blue btn-block">Filter</button>
									</form>
								</div>
							</div>
							<!-- /filters -->

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
