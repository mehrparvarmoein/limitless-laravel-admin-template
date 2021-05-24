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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Forms</span> - Inputs Grid</h4>
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
							<a href="form_inputs_grid" class="breadcrumb-item">Forms</a>
							<span class="breadcrumb-item active">Inputs drid</span>
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

				<!-- Default grid -->
				<div class="row">
					<div class="col-lg-6">
			            <div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Default form</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

			                <div class="card-body">
			                	<form action="#">
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-2">
			                                </div>
										</div>

										<div class="col-md-10">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-10">
			                                </div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-3">
			                                </div>
										</div>

										<div class="col-md-9">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-9">
			                                </div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-4">
			                                </div>
										</div>

										<div class="col-md-8">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-8">
			                                </div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-5">
			                                </div>
										</div>

										<div class="col-md-7">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-7">
			                                </div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-6">
			                                </div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-6">
			                                </div>
										</div>
									</div>

			                        <div class="text-right">
			                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
			                        </div>
		                        </form>
			                </div>
			            </div>
					</div>

					<div class="col-lg-6">
			            <div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Horizontal form</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

			                <div class="card-body">
								<form action="#">
									<div class="form-group row">
										<div class="col-md-2">
			                                <input type="text" class="form-control" placeholder="col-md-2">
										</div>

										<div class="col-md-10">
			                                <input type="text" class="form-control" placeholder="col-md-10">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-3">
			                                <input type="text" class="form-control" placeholder="col-md-3">
										</div>

										<div class="col-md-9">
			                                <input type="text" class="form-control" placeholder="col-md-9">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4">
			                                <input type="text" class="form-control" placeholder="col-md-4">
										</div>

										<div class="col-md-8">
			                                <input type="text" class="form-control" placeholder="col-md-8">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-5">
			                                <input type="text" class="form-control" placeholder="col-md-5">
										</div>

										<div class="col-md-7">
			                                <input type="text" class="form-control" placeholder="col-md-7">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-6">
			                                <input type="text" class="form-control" placeholder="col-md-6">
										</div>

										<div class="col-md-6">
			                                <input type="text" class="form-control" placeholder="col-md-6">
										</div>
									</div>

			                        <div class="text-right">
			                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
			                        </div>
					            </form>
			                </div>
			            </div>
					</div>
				</div>
				<!-- /default grid -->


	            <!-- Alignment -->
                <div class="row">
                    <div class="col-lg-6">
			            <div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Right inputs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

			                <div class="card-body">
			                	<form action="#">
									<div class="form-group row">
										<div class="col-md-12">
			                                <input type="text" class="form-control" placeholder=".col-md-12".>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-11 ml-md-auto">
			                                <input type="text" class="form-control" placeholder=".col-md-11 .ml-md-auto">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-10 ml-md-auto">
			                                <input type="text" class="form-control" placeholder=".col-md-10 .ml-md-auto">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-9 ml-md-auto">
			                                <input type="text" class="form-control" placeholder=".col-md-9 .ml-md-auto">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-8 ml-md-auto">
			                                <input type="text" class="form-control" placeholder=".col-md-8 .ml-md-auto">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-7 ml-md-auto">
			                                <input type="text" class="form-control" placeholder=".col-md-7 .ml-md-auto">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-6 ml-md-auto">
			                                <input type="text" class="form-control" placeholder=".col-md-6 .ml-md-auto">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-5 ml-md-auto">
			                                <input type="text" class="form-control" placeholder=".col-md-5 .ml-md-auto">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4 ml-md-auto">
			                                <input type="text" class="form-control" placeholder=".col-md-4 .ml-md-auto">
										</div>
									</div>

			                        <div class="text-right">
			                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
			                        </div>
		                        </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
			            <div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Left inputs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

			                <div class="card-body">
			                	<form action="#">
									<div class="form-group row">
										<div class="col-md-12">
			                                <input type="text" class="form-control" placeholder="col-md-12">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-11">
			                                <input type="text" class="form-control" placeholder="col-md-11">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-10">
			                                <input type="text" class="form-control" placeholder="col-md-10">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-9">
			                                <input type="text" class="form-control" placeholder="col-md-9">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-8">
			                                <input type="text" class="form-control" placeholder="col-md-8">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-7">
			                                <input type="text" class="form-control" placeholder="col-md-7">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-6">
			                                <input type="text" class="form-control" placeholder="col-md-6">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-5">
			                                <input type="text" class="form-control" placeholder="col-md-5">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-4">
			                                <input type="text" class="form-control" placeholder="col-md-4">
										</div>
									</div>

		                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
	                        	</form>
                            </div>
                        </div>
                    </div>
                </div>
	            <!-- /alignment -->


	            <!-- Centered inputs -->
	            <div class="row">
	                <div class="col-lg-6">
			            <div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Centered horizontal inputs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

			                <div class="card-body">
			                	<form action="#">
									<div class="form-group row">
										<label class="col-form-label col-lg-3 text-lg-right">Label</label>
										<div class="col-lg-9">
			                                <input type="text" class="form-control" placeholder="Full width">
		                                </div>
									</div>

									<div class="form-group row">
										<div class="col-lg-10 mx-lg-auto">
											<div class="row">
												<label class="col-form-label col-lg-3 text-lg-right">Label</label>
												<div class="col-lg-9">
					                                <input type="text" class="form-control" placeholder="col-lg-10 mx-lg-auto">
				                                </div>
			                                </div>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-lg-8 mx-lg-auto">
											<div class="row">
												<label class="col-form-label col-lg-3 text-lg-right">Label</label>
												<div class="col-lg-9">
					                                <input type="text" class="form-control" placeholder="col-lg-8 mx-lg-auto">
				                                </div>
			                                </div>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-lg-6 mx-lg-auto">
											<div class="row">
												<label class="col-form-label col-lg-3 text-lg-right">Label</label>
												<div class="col-lg-9">
					                                <input type="text" class="form-control" placeholder="col-lg-6 mx-lg-auto">
				                                </div>
			                                </div>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-lg-4 mx-lg-auto">
											<div class="row">
												<label class="col-form-label col-lg-4 text-lg-right">Label</label>
												<div class="col-lg-8">
					                                <input type="text" class="form-control" placeholder="col-lg-4 mx-lg-auto">
				                                </div>
			                                </div>
										</div>
									</div>

			                        <div class="text-center">
			                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
			                        </div>
		                        </form>
                            </div>
                        </div>
	                </div>

	                <div class="col-lg-6">
			            <div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Centered vertical inputs</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

			                <div class="card-body">
			                	<form action="#">
									<div class="row">
										<div class="col-lg-10 mx-lg-auto">
											<div class="form-group">
												<label>Row label</label>
				                                <input type="text" class="form-control" placeholder="col-lg-10 mx-lg-auto">
			                                </div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-8 mx-lg-auto">
											<div class="form-group">
												<label>Row label</label>
				                                <input type="text" class="form-control" placeholder="col-lg-8 mx-lg-auto">
			                                </div>
										</div>
									</div>

									<div class="row">
										<div class="col-lg-6 mx-lg-auto">
											<div class="form-group">
												<label>Row label</label>
				                                <input type="text" class="form-control" placeholder="col-lg-6 mx-lg-auto">
			                                </div>
										</div>
									</div>

									<div class="row">
										<div class="col-lg-4 mx-lg-auto">
											<div class="form-group">
												<label>Row label</label>
				                                <input type="text" class="form-control" placeholder="col-lg-4 mx-lg-auto">
			                                </div>
										</div>
									</div>

			                        <div class="text-center">
			                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
			                        </div>
		                        </form>
                            </div>
                        </div>
	                </div>
	            </div>
	            <!-- /centered inputs -->


				<!-- Row and input labels (default form) -->
				<div class="row">
					<div class="col-lg-6">
			            <div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Vertical row label</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

			                <div class="card-body">
			                	<form action="#">
									<label>Label</label>
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-2">
			                                </div>
										</div>

										<div class="col-md-10">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-10">
			                                </div>
										</div>
									</div>

									<label>Label</label>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-3">
			                                </div>
										</div>

										<div class="col-md-9">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-9">
			                                </div>
										</div>
									</div>

									<label>Label</label>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-4">
			                                </div>
										</div>

										<div class="col-md-8">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-8">
			                                </div>
										</div>
									</div>

									<label>Label</label>
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-5">
			                                </div>
										</div>

										<div class="col-md-7">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-7">
			                                </div>
										</div>
									</div>

									<label>Label</label>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-6">
			                                </div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="col-md-6">
			                                </div>
										</div>
									</div>

			                        <div class="text-right">
			                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
			                        </div>
		                        </form>
						    </div>
						</div>
					</div>

					<div class="col-lg-6">
			            <div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Vertical input label</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

			                <div class="card-body">
			                	<form action="#">
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label>Label</label>
				                                <input type="text" class="form-control" placeholder="col-md-2">
			                                </div>
										</div>

										<div class="col-md-10">
											<div class="form-group">
												<label>Label</label>
				                                <input type="text" class="form-control" placeholder="col-md-10">
			                                </div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label>Label</label>
				                                <input type="text" class="form-control" placeholder="col-md-3">
			                                </div>
										</div>

										<div class="col-md-9">
											<div class="form-group">
												<label>Label</label>
				                                <input type="text" class="form-control" placeholder="col-md-9">
			                                </div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Label</label>
				                                <input type="text" class="form-control" placeholder="col-md-4">
			                                </div>
										</div>

										<div class="col-md-8">
											<div class="form-group">
												<label>Label</label>
				                                <input type="text" class="form-control" placeholder="col-md-8">
			                                </div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label>Label</label>
				                                <input type="text" class="form-control" placeholder="col-md-5">
			                                </div>
										</div>

										<div class="col-md-7">
											<div class="form-group">
												<label>Label</label>
				                                <input type="text" class="form-control" placeholder="col-md-7">
			                                </div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Label</label>
				                                <input type="text" class="form-control" placeholder="col-md-6">
			                                </div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>Label</label>
				                                <input type="text" class="form-control" placeholder="col-md-6">
			                                </div>
										</div>
									</div>

			                        <div class="text-right">
			                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
			                        </div>
		                        </form>
						    </div>
						</div>
					</div>
				</div>
				<!-- /row and input labels (default form) -->


				<!-- Row label (horizontal form) -->
	            <div class="card">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Horizontal row labels</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

	                <div class="card-body">
	                	<form action="#">
							<div class="form-group row">
								<label class="col-lg-2 col-form-label">Label</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-1">
			                                <input type="text" class="form-control" placeholder="col-md-1">
										</div>

										<div class="col-md-11">
			                                <input type="text" class="form-control" placeholder="col-md-11">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label">Label</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-2">
			                                <input type="text" class="form-control" placeholder="col-md-2">
										</div>

										<div class="col-md-10">
			                                <input type="text" class="form-control" placeholder="col-md-10">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label">Label</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-3">
			                                <input type="text" class="form-control" placeholder="col-md-3">
										</div>

										<div class="col-md-9">
			                                <input type="text" class="form-control" placeholder="col-md-9">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label">Label</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-4">
			                                <input type="text" class="form-control" placeholder="col-md-4">
										</div>

										<div class="col-md-8">
			                                <input type="text" class="form-control" placeholder="col-md-8">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label">Label</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-5">
			                                <input type="text" class="form-control" placeholder="col-md-5">
										</div>

										<div class="col-md-7">
			                                <input type="text" class="form-control" placeholder="col-md-7">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label">Label</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-6">
			                                <input type="text" class="form-control" placeholder="col-md-6">
										</div>

										<div class="col-md-6">
			                                <input type="text" class="form-control" placeholder="col-md-6">
										</div>
									</div>
								</div>
							</div>

	                        <div class="text-right">
	                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
	                        </div>
                        </form>
				    </div>
				</div>
				<!-- /row label (horizontal form) -->


				<!-- Input label (horizontal form) -->
	            <div class="card">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Horizontal input labels</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

	                <div class="card-body">
	                	<form action="#">
							<div class="form-group row">
								<div class="col-lg-2">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-2">
										</div>
									</div>
								</div>

								<div class="col-lg-10">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-10">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-lg-3">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-3">
										</div>
									</div>
								</div>

								<div class="col-lg-9">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-9">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-lg-4">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-4">
										</div>
									</div>
								</div>

								<div class="col-lg-8">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-8">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-lg-5">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-5">
										</div>
									</div>
								</div>

								<div class="col-lg-7">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-7">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-lg-6">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-6">
										</div>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="row">
										<label class="col-md-4 col-form-label text-lg-right">Label: </label>
										<div class="col-md-8">
											<input type="text" class="form-control" placeholder="col-md-6">
										</div>
									</div>
								</div>
							</div>

	                        <div class="text-right">
	                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
	                        </div>
                        </form>
				    </div>
				</div>
				<!-- /input label (horizontal form) -->


				<!-- Multiple row inputs (vertical) -->
	            <div class="card">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Multiple vertical inputs</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

	                <div class="card-body">
	                	<form action="#">
							<label>First form group</label>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
		                                <input type="text" class="form-control" placeholder="First row, first input">
	                                </div>

	                                <div class="form-group">
		                                <input type="text" class="form-control" placeholder="Second row, first input">
	                                </div>
								</div>

								<div class="col-md-8">
									<div class="form-group">
		                                <input type="text" class="form-control" placeholder="First row, second input">
	                                </div>

	                                <div class="form-group">
		                                <input type="text" class="form-control" placeholder="Second row, second input">
	                                </div>
								</div>
							</div>

							<label>Second form group</label>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
		                                <input type="text" class="form-control" placeholder="First row, first input">
	                                </div>

	                                <div class="form-group">
		                                <input type="text" class="form-control" placeholder="Second row, first input">
	                                </div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
		                                <input type="text" class="form-control" placeholder="First row, second input">
	                                </div>

	                                <div class="form-group">
		                                <input type="text" class="form-control" placeholder="Second row, second input">
	                                </div>
								</div>
							</div>

	                        <div class="text-right">
	                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
	                        </div>
                        </form>
				    </div>
				</div>
				<!-- /multiple row inputs (vertical) -->


				<!-- Multiple row inputs (horizontal) -->
	            <div class="card">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Multiple horizontal inputs</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

	                <div class="card-body">
	                	<form action="#">
							<div class="form-group row">
								<label class="col-lg-2 col-form-label">First form group</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="First row, first input">
			                                </div>

			                                <div class="form-group">
				                                <input type="text" class="form-control" placeholder="Second row, first input">
			                                </div>
										</div>

										<div class="col-md-8">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="First row, second input">
			                                </div>

			                                <div class="form-group">
				                                <input type="text" class="form-control" placeholder="Second row, second input">
			                                </div>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-2 col-form-label">First form group</label>
								<div class="col-lg-10">
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="First row, first input">
			                                </div>

			                                <div class="form-group">
				                                <input type="text" class="form-control" placeholder="Second row, first input">
			                                </div>
										</div>

										<div class="col-md-4">
											<div class="form-group">
				                                <input type="text" class="form-control" placeholder="First row, second input">
			                                </div>

			                                <div class="form-group">
				                                <input type="text" class="form-control" placeholder="Second row, second input">
			                                </div>
										</div>
									</div>
								</div>
							</div>

	                        <div class="text-right">
	                        	<button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
	                        </div>
                        </form>
				    </div>
				</div>
				<!-- /multiple row inputs (horizontal) -->

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
		<!-- /content wrapper -->

	</div>
	<!-- /page content -->

</body>
</html>
