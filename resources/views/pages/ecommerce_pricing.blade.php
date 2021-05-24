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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">ECommerce</span> - Pricing Tables</h4>
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
							<a href="ecommerce_pricing" class="breadcrumb-item">ECommerce</a>
							<span class="breadcrumb-item active">Pricing tables</span>
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

				<!-- Pricing table -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Table view
					</h6>
					<span class="text-muted d-block">Simple table with content</span>
				</div>

				<div class="card">
					<div class="table-responsive">
						<table class="table table-hover table-striped table-bordered table-lg text-center">
			    			<thead>
			    				<tr>
			    					<th class="text-left">Choose a plan</th>
			    					<th>
			    						<h6 class="font-weight-semibold my-1">Basic</h6>
			    						<h4 class="font-weight-semibold mb-0">
			    							€25
			    							<span class="font-size-base text-muted font-weight-normal">/ month</span>
		    							</h4>
		    						</th>
			    					<th>
			    						<h6 class="font-weight-semibold my-1">Professional</h6>
			    						<h4 class="font-weight-semibold mb-0">
			    							€35
			    							<span class="font-size-base text-muted font-weight-normal">/ month</span>
		    							</h4>
		    						</th>
			    					<th>
			    						<h6 class="font-weight-semibold my-1">Business</h6>
			    						<h4 class="font-weight-semibold mb-0">
			    							€49
			    							<span class="font-size-base text-muted font-weight-normal">/ month</span>
		    							</h4>
		    						</th>
			    					<th>
			    						<h6 class="font-weight-semibold my-1">Enterprise</h6>
			    						<h4 class="font-weight-semibold mb-0">
			    							€60
			    							<span class="font-size-base text-muted font-weight-normal">/ month</span>
		    							</h4>
		    						</th>
			    				</tr>
			    			</thead>
			    			<tbody>
			    				<tr>
			    					<td class="text-left">Disk storage</td>
			    					<td>25Gb</td>
			    					<td>75Gb</td>
			    					<td>150Gb</td>
			    					<td>256Gb</td>
			    				</tr>
			    				<tr>
			    					<td class="text-left">Monthly bandwidth</td>
			    					<td>25GB</td>
			    					<td>50GB</td>
			    					<td>100GB</td>
			    					<td>Unlimited</td>
			    				</tr>
			    				<tr>
			    					<td class="text-left">Domain names</td>
			    					<td>1</td>
			    					<td>10</td>
			    					<td>20</td>
			    					<td>Unlimited</td>
			    				</tr>
			    				<tr>
			    					<td class="text-left">Subdomains</td>
			    					<td>5</td>
			    					<td>15</td>
			    					<td>50</td>
			    					<td>Unlimited</td>
			    				</tr>
			    				<tr>
			    					<td class="text-left">Email accounts</td>
			    					<td>10</td>
			    					<td>30</td>
			    					<td>50</td>
			    					<td>Unlimited</td>
			    				</tr>
			    				<tr>
			    					<td class="text-left">Site builder</td>
			    					<td><i class="icon-cancel-square2 text-danger"></i></td>
			    					<td><i class="icon-cancel-square2 text-danger"></i></td>
			    					<td><i class="icon-checkbox-checked2 text-success"></i></td>
			    					<td><i class="icon-checkbox-checked2 text-success"></i></td>
			    				</tr>
			    				<tr>
			    					<td class="text-left">Backups</td>
			    					<td><i class="icon-cancel-square2 text-danger"></i></td>
			    					<td><i class="icon-checkbox-checked2 text-success"></i></td>
			    					<td><i class="icon-checkbox-checked2 text-success"></i></td>
			    					<td><i class="icon-checkbox-checked2 text-success"></i></td>
			    				</tr>
			    				<tr>
			    					<td class="text-left">CPanel</td>
			    					<td><i class="icon-cancel-square2 text-danger"></i></td>
			    					<td><i class="icon-checkbox-checked2 text-success"></i></td>
			    					<td><i class="icon-checkbox-checked2 text-success"></i></td>
			    					<td><i class="icon-checkbox-checked2 text-success"></i></td>
			    				</tr>
			    				<tr>
			    					<td class="text-left">24/7 support</td>
			    					<td><i class="icon-cancel-square2 text-danger"></i></td>
			    					<td><i class="icon-cancel-square2 text-danger"></i></td>
			    					<td><i class="icon-checkbox-checked2 text-success"></i></td>
			    					<td><i class="icon-checkbox-checked2 text-success"></i></td>
			    				</tr>
			    				<tr>
			    					<td class="text-left">30 days money back</td>
			    					<td><i class="icon-checkbox-checked2 text-success"></i></td>
			    					<td><i class="icon-checkbox-checked2 text-success"></i></td>
			    					<td><i class="icon-checkbox-checked2 text-success"></i></td>
			    					<td><i class="icon-checkbox-checked2 text-success"></i></td>
			    				</tr>

			    				<tr class="table-border-solid">
			    					<td> </td>
			    					<td><a class="btn bg-blue" href="#"><i class="icon-cart mr-2"></i> Order</a></td>
			    					<td><a class="btn bg-blue" href="#"><i class="icon-cart mr-2"></i> Order</a></td>
			    					<td><a class="btn bg-blue" href="#"><i class="icon-cart mr-2"></i> Order</a></td>
			    					<td><a class="btn bg-blue" href="#"><i class="icon-cart mr-2"></i> Order</a></td>
			    				</tr>
			    			</tbody>
			    		</table>
		    		</div>
	    		</div>
	    		<!-- /pricing table -->


                <!-- Pricing table two -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Seamless cards
					</h6>
					<span class="text-muted d-block">Display as a card group</span>
				</div>

				<div class="card-group mb-3">
					<div class="card">
	                    <div class="card-body text-center">
	                        <h4 class="mt-2 mb-3">Personal</h4>
	                        <h1 class="pricing-table-price"><span class="mr-1">$</span>29</h1>
	                        <ul class="pricing-table-list list-unstyled mb-3">
	                            <li><strong>25GB</strong> space</li>
	                            <li><strong>2GB</strong> RAM</li>
	                            <li><strong>1</strong> domain</li>
	                            <li><strong>5</strong> emails</li>
	                            <li><strong>Daily</strong> backups</li>
	                            <li><strong>24/7</strong> support</li>
	                        </ul>
	                        <a href="#" class="btn bg-danger-400 btn-lg text-uppercase font-size-sm font-weight-semibold">Purchase</a>
	                    </div>
					</div>

					<div class="card">
	                    <div class="card-body text-center">
                            <h4 class="mt-2 mb-3">Business</h4>
                            <h1 class="pricing-table-price"><span class="mr-1">$</span>39</h1>
                            <ul class="pricing-table-list list-unstyled mb-3">
                                <li><strong>75GB</strong> space</li>
                                <li><strong>4GB</strong> RAM</li>
                                <li><strong>10</strong> domains</li>
                                <li><strong>15</strong> emails</li>
                                <li><strong>Daily</strong> backups</li>
                                <li><strong>24/7</strong> support</li>
                            </ul>
                            <a href="#" class="btn bg-indigo-400 btn-lg text-uppercase font-size-sm font-weight-semibold">Purchase</a>
	                    </div>

                        <div class="ribbon-container">
							<div class="ribbon bg-indigo-400">Top value</div>
						</div>
					</div>
					
					<div class="card">
	                    <div class="card-body text-center">
                            <h4 class="mt-2 mb-3">Corporate</h4>
                            <h1 class="pricing-table-price"><span class="mr-1">$</span>49</h1>
                            <ul class="pricing-table-list list-unstyled mb-3">
                                <li><strong>150GB</strong> space</li>
                                <li><strong>8GB</strong> RAM</li>
                                <li><strong>20</strong> domains</li>
                                <li><strong>50</strong> emails</li>
                                <li><strong>Daily</strong> backups</li>
                                <li><strong>24/7</strong> support</li>
                            </ul>
                            <a href="#" class="btn bg-danger-400 btn-lg text-uppercase font-size-sm font-weight-semibold">Purchase</a>
	                    </div>
					</div>
					
					<div class="card">
	                    <div class="card-body text-center">
                            <h4 class="mt-2 mb-3">Enterprise</h4>
                            <h1 class="pricing-table-price"><span class="mr-1">$</span>59</h1>
                            <ul class="pricing-table-list list-unstyled mb-3">
                                <li><strong>256GB</strong> space</li>
                                <li><strong>16GB</strong> RAM</li>
                                <li><strong>Unlimited</strong> domains</li>
                                <li><strong>Unlimited</strong> emails</li>
                                <li><strong>Daily</strong> backups</li>
                                <li><strong>24/7</strong> support</li>
                            </ul>
                            <a href="#" class="btn bg-danger-400 btn-lg text-uppercase font-size-sm font-weight-semibold">Purchase</a>  
	                    </div>
					</div>
				</div>
                <!-- /pricing table two -->


	    		<!-- Pricing table one -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Separate boxes
					</h6>
					<span class="text-muted d-block">Pricing tables grid</span>
				</div>

				<div class="row">
					<div class="col-sm-6 col-lg-3">
						<div class="card">
		                    <div class="card-body text-center">
		                        <h4 class="mt-2 mb-3">Personal</h4>
		                        <h1 class="pricing-table-price"><span class="mr-1">$</span>29</h1>
		                        <ul class="pricing-table-list list-unstyled mb-3">
		                            <li><strong>25GB</strong> space</li>
		                            <li><strong>2GB</strong> RAM</li>
		                            <li><strong>1</strong> domain</li>
		                            <li><strong>5</strong> emails</li>
		                            <li><strong>Daily</strong> backups</li>
		                            <li><strong>24/7</strong> support</li>
		                        </ul>
		                        <a href="#" class="btn bg-success-400 btn-lg text-uppercase font-size-sm font-weight-semibold">Purchase</a>
		                    </div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-3">
						<div class="card">
		                    <div class="card-body text-center">
	                            <h4 class="mt-2 mb-3">Business</h4>
	                            <h1 class="pricing-table-price"><span class="mr-1">$</span>39</h1>
	                            <ul class="pricing-table-list list-unstyled mb-3">
	                                <li><strong>75GB</strong> space</li>
	                                <li><strong>4GB</strong> RAM</li>
	                                <li><strong>10</strong> domains</li>
	                                <li><strong>15</strong> emails</li>
	                                <li><strong>Daily</strong> backups</li>
	                                <li><strong>24/7</strong> support</li>
	                            </ul>
	                            <a href="#" class="btn bg-success-400 btn-lg text-uppercase font-size-sm font-weight-semibold">Purchase</a>
		                    </div>
						</div>
					</div>
						
					<div class="col-sm-6 col-lg-3">
						<div class="card">
		                    <div class="card-body text-center">
	                            <h4 class="mt-2 mb-3">Corporate</h4>
	                            <h1 class="pricing-table-price"><span class="mr-1">$</span>49</h1>
	                            <ul class="pricing-table-list list-unstyled mb-3">
	                                <li><strong>150GB</strong> space</li>
	                                <li><strong>8GB</strong> RAM</li>
	                                <li><strong>20</strong> domains</li>
	                                <li><strong>50</strong> emails</li>
	                                <li><strong>Daily</strong> backups</li>
	                                <li><strong>24/7</strong> support</li>
	                            </ul>
	                            <a href="#" class="btn bg-danger-400 btn-lg text-uppercase font-size-sm font-weight-semibold">Purchase</a>
		                    </div>

	                        <div class="ribbon-container">
								<div class="ribbon bg-danger-400">Popular</div>
							</div>
						</div>
					</div>
						
					<div class="col-sm-6 col-lg-3">
						<div class="card">
		                    <div class="card-body text-center">
	                            <h4 class="mt-2 mb-3">Enterprise</h4>
	                            <h1 class="pricing-table-price"><span class="mr-1">$</span>59</h1>
	                            <ul class="pricing-table-list list-unstyled mb-3">
	                                <li><strong>256GB</strong> space</li>
	                                <li><strong>16GB</strong> RAM</li>
	                                <li><strong>Unlimited</strong> domains</li>
	                                <li><strong>Unlimited</strong> emails</li>
	                                <li><strong>Daily</strong> backups</li>
	                                <li><strong>24/7</strong> support</li>
	                            </ul>
	                            <a href="#" class="btn bg-success-400 btn-lg text-uppercase font-size-sm font-weight-semibold">Purchase</a>  
		                    </div>
						</div>
					</div>
				</div>
                <!-- /pricing table one -->


                <!-- Color variations -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Color highlight
					</h6>
					<span class="text-muted d-block">Custom color background</span>
				</div>

				<div class="row">
					<div class="col-sm-6 col-lg-3">
						<div class="card">
		                    <div class="card-body text-center">
		                        <h4 class="mt-2 mb-3">Personal</h4>
		                        <h1 class="pricing-table-price"><span class="mr-1">$</span>29</h1>
		                        <ul class="pricing-table-list list-unstyled mb-3">
		                            <li><strong>25GB</strong> space</li>
		                            <li><strong>2GB</strong> RAM</li>
		                            <li><strong>1</strong> domain</li>
		                            <li><strong>5</strong> emails</li>
		                            <li><strong>Daily</strong> backups</li>
		                            <li><strong>24/7</strong> support</li>
		                        </ul>
		                        <a href="#" class="btn bg-pink-400 btn-lg text-uppercase font-size-sm font-weight-semibold">Purchase</a>
		                    </div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-3">
						<div class="card">
		                    <div class="card-body text-center">
	                            <h4 class="mt-2 mb-3">Business</h4>
	                            <h1 class="pricing-table-price"><span class="mr-1">$</span>39</h1>
	                            <ul class="pricing-table-list list-unstyled mb-3">
	                                <li><strong>75GB</strong> space</li>
	                                <li><strong>4GB</strong> RAM</li>
	                                <li><strong>10</strong> domains</li>
	                                <li><strong>15</strong> emails</li>
	                                <li><strong>Daily</strong> backups</li>
	                                <li><strong>24/7</strong> support</li>
	                            </ul>
	                            <a href="#" class="btn bg-pink-400 btn-lg text-uppercase font-size-sm font-weight-semibold">Purchase</a>
		                    </div>
						</div>
					</div>
						
					<div class="col-sm-6 col-lg-3">
						<div class="card bg-pink-400">
		                    <div class="card-body text-center">
	                            <h4 class="mt-2 mb-3">Corporate</h4>
	                            <h1 class="pricing-table-price"><span class="mr-1">$</span>49</h1>
	                            <ul class="pricing-table-list list-unstyled mb-3">
	                                <li><strong>150GB</strong> space</li>
	                                <li><strong>8GB</strong> RAM</li>
	                                <li><strong>20</strong> domains</li>
	                                <li><strong>50</strong> emails</li>
	                                <li><strong>Daily</strong> backups</li>
	                                <li><strong>24/7</strong> support</li>
	                            </ul>
	                            <a href="#" class="btn bg-pink-800 btn-lg text-uppercase font-size-sm font-weight-semibold">Purchase</a>
		                    </div>

	                        <div class="ribbon-container">
								<div class="ribbon bg-white text-default">Popular</div>
							</div>
						</div>
					</div>
						
					<div class="col-sm-6 col-lg-3">
						<div class="card">
		                    <div class="card-body text-center">
	                            <h4 class="mt-2 mb-3">Enterprise</h4>
	                            <h1 class="pricing-table-price"><span class="mr-1">$</span>59</h1>
	                            <ul class="pricing-table-list list-unstyled mb-3">
	                                <li><strong>256GB</strong> space</li>
	                                <li><strong>16GB</strong> RAM</li>
	                                <li><strong>Unlimited</strong> domains</li>
	                                <li><strong>Unlimited</strong> emails</li>
	                                <li><strong>Daily</strong> backups</li>
	                                <li><strong>24/7</strong> support</li>
	                            </ul>
	                            <a href="#" class="btn bg-pink-400 btn-lg text-uppercase font-size-sm font-weight-semibold">Purchase</a>  
		                    </div>
						</div>
					</div>
				</div>
                <!-- /color variations -->

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
