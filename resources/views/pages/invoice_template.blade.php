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
	<script src="../../../../global_assets/js/plugins/editors/ckeditor/ckeditor.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/invoice_template.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Invoices</span> - Templates</h4>
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
							<a href="invoice_template" class="breadcrumb-item">Invoices</a>
							<span class="breadcrumb-item active">Templates</span>
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

				<!-- Invoice template -->
				<div class="card">
					<div class="card-header bg-transparent header-elements-inline">
						<h6 class="card-title">Static invoice</h6>
						<div class="header-elements">
							<button type="button" class="btn btn-light btn-sm"><i class="icon-file-check mr-2"></i> Save</button>
							<button type="button" class="btn btn-light btn-sm ml-3"><i class="icon-printer mr-2"></i> Print</button>
	                	</div>
					</div>

					<div class="card-body">
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-4">
									<img src="../../../../global_assets/images/logo_demo.png" class="mb-3 mt-2" alt="" style="width: 120px;">
		 							<ul class="list list-unstyled mb-0">
										<li>2269 Elba Lane</li>
										<li>Paris, France</li>
										<li>888-555-2311</li>
									</ul>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="mb-4">
									<div class="text-sm-right">
										<h4 class="text-primary mb-2 mt-md-2">Invoice #49029</h4>
										<ul class="list list-unstyled mb-0">
											<li>Date: <span class="font-weight-semibold">January 12, 2015</span></li>
											<li>Due date: <span class="font-weight-semibold">May 12, 2015</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="d-md-flex flex-md-wrap">
							<div class="mb-4 mb-md-2">
								<span class="text-muted">Invoice To:</span>
	 							<ul class="list list-unstyled mb-0">
									<li><h5 class="my-2">Rebecca Manes</h5></li>
									<li><span class="font-weight-semibold">Normand axis LTD</span></li>
									<li>3 Goodman Street</li>
									<li>London E1 8BF</li>
									<li>United Kingdom</li>
									<li>888-555-2311</li>
									<li><a href="#">rebecca@normandaxis.ltd</a></li>
								</ul>
							</div>

							<div class="mb-2 ml-auto">
								<span class="text-muted">Payment Details:</span>
								<div class="d-flex flex-wrap wmin-md-400">
									<ul class="list list-unstyled mb-0">
										<li><h5 class="my-2">Total Due:</h5></li>
										<li>Bank name:</li>
										<li>Country:</li>
										<li>City:</li>
										<li>Address:</li>
										<li>IBAN:</li>
										<li>SWIFT code:</li>
									</ul>

									<ul class="list list-unstyled text-right mb-0 ml-auto">
										<li><h5 class="font-weight-semibold my-2">$8,750</h5></li>
										<li><span class="font-weight-semibold">Profit Bank Europe</span></li>
										<li>United Kingdom</li>
										<li>London E1 8BF</li>
										<li>3 Goodman Street</li>
										<li><span class="font-weight-semibold">KFH37784028476740</span></li>
										<li><span class="font-weight-semibold">BPT4E</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="table-responsive">
					    <table class="table table-lg">
					        <thead>
					            <tr>
					                <th>Description</th>
					                <th>Rate</th>
					                <th>Hours</th>
					                <th>Total</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr>
					                <td>
					                	<h6 class="mb-0">Create UI design model</h6>
					                	<span class="text-muted">One morning, when Gregor Samsa woke from troubled.</span>
				                	</td>
					                <td>$70</td>
					                <td>57</td>
					                <td><span class="font-weight-semibold">$3,990</span></td>
					            </tr>
					            <tr>
					                <td>
					                	<h6 class="mb-0">Support tickets list doesn't support commas</h6>
					                	<span class="text-muted">I'd have gone up to the boss and told him just what i think.</span>
				                	</td>
					                <td>$70</td>
					                <td>12</td>
					                <td><span class="font-weight-semibold">$840</span></td>
					            </tr>
					            <tr>
					                <td>
					                	<h6 class="mb-0">Fix website issues on mobile</h6>
					                	<span class="text-muted">I am so happy, my dear friend, so absorbed in the exquisite.</span>
				                	</td>
					                <td>$70</td>
					                <td>31</td>
					                <td><span class="font-weight-semibold">$2,170</span></td>
					            </tr>
					        </tbody>
					    </table>
					</div>

					<div class="card-body">
						<div class="d-md-flex flex-md-wrap">
							<div class="pt-2 mb-3">
								<h6 class="mb-3">Authorized person</h6>
								<div class="mb-3">
									<img src="../../../../global_assets/images/signature.png" width="150" alt="">
								</div>

								<ul class="list-unstyled text-muted">
									<li>Eugene Kopyov</li>
									<li>2269 Elba Lane</li>
									<li>Paris, France</li>
									<li>888-555-2311</li>
								</ul>
							</div>

							<div class="pt-2 mb-3 wmin-md-400 ml-auto">
								<h6 class="mb-3">Total due</h6>
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<th>Subtotal:</th>
												<td class="text-right">$7,000</td>
											</tr>
											<tr>
												<th>Tax: <span class="font-weight-normal">(25%)</span></th>
												<td class="text-right">$1,750</td>
											</tr>
											<tr>
												<th>Total:</th>
												<td class="text-right text-primary"><h5 class="font-weight-semibold">$8,750</h5></td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="text-right mt-3">
									<button type="button" class="btn btn-primary btn-labeled btn-labeled-left"><b><i class="icon-paperplane"></i></b> Send invoice</button>
								</div>
							</div>
						</div>
					</div>

					<div class="card-footer">
						<span class="text-muted">Thank you for using Limitless. This invoice can be paid via PayPal, Bank transfer, Skrill or Payoneer. Payment is due within 30 days from the date of delivery. Late payment is possible, but with with a fee of 10% per month. Company registered in England and Wales #6893003, registered office: 3 Goodman Street, London E1 8BF, United Kingdom. Phone number: 888-555-2311</span>
					</div>
				</div>
				<!-- /invoice template -->


				<!-- Editable invoice -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Editable invoice</h6>
						<div class="header-elements">
							<button type="button" class="btn btn-light btn-sm"><i class="icon-file-check mr-2"></i> Save</button>
							<button type="button" class="btn btn-light btn-sm ml-3"><i class="icon-printer mr-2"></i> Print</button>
	                	</div>
					</div>

					<div>
						<div contenteditable="true">
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-4">
											<img src="../../../../global_assets/images/logo_demo.png" class="mb-3 mt-2" alt="" style="width: 120px;">
				 							<ul class="list list-unstyled mb-0">
												<li>2269 Elba Lane</li>
												<li>Paris, France</li>
												<li>888-555-2311</li>
											</ul>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="mb-4">
											<div class="text-sm-right">
												<h4 class="text-primary mb-2 mt-md-2">Invoice #49029</h4>
												<ul class="list list-unstyled mb-0">
													<li>Date: <span class="font-weight-semibold">January 12, 2015</span></li>
													<li>Due date: <span class="font-weight-semibold">May 12, 2015</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="d-md-flex flex-md-wrap">
									<div class="mb-4 mb-md-2">
										<span class="text-muted">Invoice To:</span>
			 							<ul class="list list-unstyled mb-0">
											<li><h5 class="my-2">Rebecca Manes</h5></li>
											<li><span class="font-weight-semibold">Normand axis LTD</span></li>
											<li>3 Goodman Street</li>
											<li>London E1 8BF</li>
											<li>United Kingdom</li>
											<li>888-555-2311</li>
											<li><a href="#">rebecca@normandaxis.ltd</a></li>
										</ul>
									</div>

									<div class="mb-2 ml-auto">
										<span class="text-muted">Payment Details:</span>
										<div class="d-flex flex-wrap wmin-md-400">
											<ul class="list list-unstyled mb-0">
												<li><h5 class="my-2">Total Due:</h5></li>
												<li>Bank name:</li>
												<li>Country:</li>
												<li>City:</li>
												<li>Address:</li>
												<li>IBAN:</li>
												<li>SWIFT code:</li>
											</ul>

											<ul class="list list-unstyled text-right mb-0 ml-auto">
												<li><h5 class="font-weight-semibold my-2">$8,750</h5></li>
												<li><span class="font-weight-semibold">Profit Bank Europe</span></li>
												<li>United Kingdom</li>
												<li>London E1 8BF</li>
												<li>3 Goodman Street</li>
												<li><span class="font-weight-semibold">KFH37784028476740</span></li>
												<li><span class="font-weight-semibold">BPT4E</span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="table-responsive">
							    <table class="table table-lg">
							        <thead>
							            <tr>
							                <th>Description</th>
							                <th>Rate</th>
							                <th>Hours</th>
							                <th>Total</th>
							            </tr>
							        </thead>
							        <tbody>
							            <tr>
							                <td>
							                	<h6 class="mb-0">Create UI design model</h6>
							                	<span class="text-muted">One morning, when Gregor Samsa woke from troubled.</span>
						                	</td>
							                <td>$70</td>
							                <td>57</td>
							                <td><span class="font-weight-semibold">$3,990</span></td>
							            </tr>
							            <tr>
							                <td>
							                	<h6 class="mb-0">Support tickets list doesn't support commas</h6>
							                	<span class="text-muted">I'd have gone up to the boss and told him just what i think.</span>
						                	</td>
							                <td>$70</td>
							                <td>12</td>
							                <td><span class="font-weight-semibold">$840</span></td>
							            </tr>
							            <tr>
							                <td>
							                	<h6 class="mb-0">Fix website issues on mobile</h6>
							                	<span class="text-muted">I am so happy, my dear friend, so absorbed in the exquisite.</span>
						                	</td>
							                <td>$70</td>
							                <td>31</td>
							                <td><span class="font-weight-semibold">$2,170</span></td>
							            </tr>
							        </tbody>
							    </table>
							</div>

							<div class="card-body">
								<div class="d-md-flex flex-md-wrap">
									<div class="pt-2 mb-3">
										<h6 class="mb-3">Authorized person</h6>
										<div class="mb-3">
											<img src="../../../../global_assets/images/signature.png" width="150" alt="">
										</div>

										<ul class="list-unstyled text-muted">
											<li>Eugene Kopyov</li>
											<li>2269 Elba Lane</li>
											<li>Paris, France</li>
											<li>888-555-2311</li>
										</ul>
									</div>

									<div class="pt-2 mb-3 wmin-md-400 ml-auto">
										<h6 class="mb-3">Total due</h6>
										<div class="table-responsive">
											<table class="table">
												<tbody>
													<tr>
														<th>Subtotal:</th>
														<td class="text-right">$7,000</td>
													</tr>
													<tr>
														<th>Tax: <span class="font-weight-normal">(25%)</span></th>
														<td class="text-right">$1,750</td>
													</tr>
													<tr>
														<th>Total:</th>
														<td class="text-right text-primary"><h5 class="font-weight-semibold">$8,750</h5></td>
													</tr>
												</tbody>
											</table>
										</div>

										<div class="text-right mt-3">
											<button type="button" class="btn btn-primary btn-labeled btn-labeled-left"><b><i class="icon-paperplane"></i></b> Send invoice</button>
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer">
								<span class="text-muted">Thank you for using Limitless. This invoice can be paid via PayPal, Bank transfer, Skrill or Payoneer. Payment is due within 30 days from the date of delivery. Late payment is possible, but with with a fee of 10% per month. Company registered in England and Wales #6893003, registered office: 3 Goodman Street, London E1 8BF, United Kingdom. Phone number: 888-555-2311</span>
							</div>
						</div>
					</div>
				</div>
				<!-- /editable invoice -->

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
