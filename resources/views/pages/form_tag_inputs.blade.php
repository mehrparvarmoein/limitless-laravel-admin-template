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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Forms</span> - Tag Inputs</h4>
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
							<a href="form_tag_inputs" class="breadcrumb-item">Forms</a>
							<span class="breadcrumb-item active">Tag inputs</span>
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

				<!-- Tokenfield title -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Tokenfield for Bootstrap
					</h6>
					<span class="text-muted d-block">Advanced tagging/tokenizing plugin</span>
				</div>
				<!-- /tokenfield title -->


				<!-- Tokenfield basic -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Basic usage</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Basic example -->
								<div class="form-group">
									<label>Basic example</label>
									<input type="text" class="form-control tokenfield" value="These,are,tokens" data-fouc>
								</div>
								<!-- /basic example -->


								<!-- Limit tokens number -->
								<div class="form-group">
									<label>Limit tokens number</label>
									<input type="text" class="form-control tokenfield" data-limit="5" value="Maximum,five,tokens" data-fouc>
								</div>
								<!-- /limit tokens number -->


								<!-- Disabled field -->
								<div class="form-group">
									<label>Disabled field</label>
									<input type="text" class="form-control tokenfield" disabled value="This,is,disabled,field" data-fouc>
								</div>
								<!-- disabled field -->


								<!-- Readonly field -->
								<div class="form-group">
									<label>Readonly field</label>
									<input type="text" class="form-control tokenfield" readonly value="This,is,readonly,field" data-fouc>
								</div>
								<!-- readonly field -->


								<!-- Using typeahead -->
								<div class="form-group">
									<label>Using Twitter Typeahead</label>
									<input type="text" class="form-control tokenfield-typeahead" value="Enter,color,names" data-fouc>
								</div>
								<!-- /using typeahead -->


								<!-- Keyboard support -->
								<div class="form-group">
									<label>Keyboard support</label>
									<input type="text" class="form-control tokenfield" value="Try,pressing,backspace" data-fouc>
								</div>
								<!-- /keyboard support -->


								<!-- Copy paste support -->
								<div class="form-group">
									<label>Copy and paste support</label>
									<input type="text" class="form-control tokenfield" value="Copy,and,paste" data-fouc>
								</div>
								<!-- /copy paste support -->


								<!-- Create token on blur -->
								<div class="form-group">
									<label>Create token on blur</label>
									<input type="text" class="form-control tokenfield-blur" value="Type,and,focus,out" data-fouc>
								</div>
								<!-- /create token on blur -->


								<!-- Custom delimiter -->
								<div class="form-group">
									<label>Custom delimiter</label>
									<input type="text" class="form-control tokenfield-delimiter" value="Semicolon;as;delimiter" data-fouc>
								</div>
								<!-- /custom delimiter -->

							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Advanced examples</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Show placeholder -->
								<div class="form-group">
									<label>Show placeholder</label>
									<input type="text" class="form-control tokenfield" placeholder="Add tag" value="Copy,and,paste" data-fouc>
								</div>
								<!-- /show placeholder -->


								<!-- Inside form group with addon -->
								<div class="form-group">
									<label>Input group with addon</label>
									<div class="input-group">
										<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-price-tags"></i></span>
										</span>
										<input type="text" class="form-control tokenfield" value="cool,nice,great" data-fouc>
									</div>
								</div>
								<!-- /inside form group with addon -->


								<!-- Inside form group with button -->
								<div class="form-group">
									<label>Input group with button</label>
									<div class="input-group">
										<input type="text" class="form-control tokenfield" value="Cool,nice,great" data-fouc>

										<div class="input-group-append align-self-start">
											<button type="button" class="btn btn-light btn-icon dropdown-toggle" data-toggle="dropdown"><i class="icon-cog5"></i></button>
			                                <div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item">Action</a>
												<a href="#" class="dropdown-item">Another action</a>
												<a href="#" class="dropdown-item">Something else here</a>
												<a href="#" class="dropdown-item">One more line</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /inside form group with button -->


								<!-- Set tokens method -->
								<div class="form-group">
									<label>Set tokens method</label>
									<div class="input-group">
										<input type="text" class="form-control tokenfield" id="set-tokens-field" value="Click,Set,button" data-fouc>
										<div class="input-group-append align-self-start">
											<button type="button" class="btn btn-light" id="set-tokens">Set tokens</button>
										</div>
									</div>
								</div>
								<!-- /set tokens method -->


								<!-- Get tokens method -->
								<div class="form-group">
									<label>Get tokens method</label>
									<div class="input-group">
										<input type="text" class="form-control tokenfield" id="get-tokens-field" value="Click,Get,button" data-fouc>
										<div class="input-group-append align-self-start">
											<button type="button" class="btn btn-light" id="get-tokens">Get tokens</button>
										</div>
									</div>
								</div>
								<!-- /get tokens method -->


								<!-- Create token method -->
								<div class="form-group">
									<label>Create token method</label>
									<div class="input-group">
										<input type="text" class="form-control tokenfield" id="create-token-field" value="Create,token" data-fouc>
										<div class="input-group-append align-self-start">
											<button type="button" class="btn btn-light" id="create-token">Create token</button>
										</div>
									</div>
								</div>
								<!-- /create token method -->


								<!-- Disable/enable methods -->
								<div class="form-group">
									<label>Disable / enable methods</label>
									<div class="input-group">
										<input type="text" class="form-control tokenfield-disable" value="Disable,and,enable" data-fouc>
										<div class="input-group-append align-self-start">
											<button type="button" class="btn btn-light" id="disable">Disable</button>
											<button type="button" class="btn bg-info" id="enable">Enable</button>
										</div>
									</div>
								</div>
								<!-- /disable/enable methods -->


								<!-- Readonly/writeable methods -->
								<div class="form-group">
									<label>Readonly / writable methods</label>
									<div class="input-group">
										<input type="text" class="form-control tokenfield-readonly" value="Readonly,and,writeable" data-fouc>
										<div class="input-group-append align-self-start">
											<button type="button" class="btn btn-light" id="readonly">Readonly</button>
											<button type="button" class="btn bg-info" id="writeable">Writeable</button>
										</div>
									</div>
								</div>
								<!-- /readonly/writeable methods -->


								<!-- Destroy method -->
								<div class="form-group">
									<label>Destroy</label>
									<div class="input-group">
										<input type="text" class="form-control tokenfield-destroy" value="Destroy,and,create" data-fouc>
										<div class="input-group-append align-self-start">
											<button type="button" class="btn btn-light" id="destroy">Destroy</button>
											<button type="button" class="btn bg-info" id="create">Create</button>
										</div>
									</div>
								</div>
								<!-- /destroy method -->

							</div>
						</div>

					</div>
				</div>
				<!-- /tokenfield basic -->


				<!-- Tokenfield inputs sizing -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Input sizing</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Large input size -->
								<div class="form-group">
									<label>Large input size</label>
									<input type="text" class="form-control tokenfield form-control-lg" value="Red,blue,green" data-fouc>
								</div>
								<!-- /large input size -->


								<!-- Default input size -->
								<div class="form-group">
									<label>Default input size</label>
									<input type="text" class="form-control tokenfield" value="Red,blue,green" data-fouc>
								</div>
								<!-- /default input size -->


								<!-- Small input size -->
								<div class="form-group">
									<label>Small input size</label>
									<input type="text" class="form-control tokenfield form-control-sm" value="Red,blue,green" data-fouc>
								</div>
								<!-- /small input size -->

							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Input group sizing</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Large input group size -->
								<div class="form-group">
									<label>Large input group size</label>
									<div class="input-group input-group-lg">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="icon-menu7"></i></span>
										</div>
										<input type="text" class="form-control tokenfield" value="Red,blue,green" data-fouc>
									</div>
								</div>
								<!-- /large input group size -->


								<!-- Default input group size -->
								<div class="form-group">
									<label>Default input group size</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="icon-cash3"></i></span>
										</div>
										<input type="text" class="form-control tokenfield" value="Red,blue,green" data-fouc>
									</div>
								</div>
								<!-- /default input group size -->


								<!-- Small input group size -->
								<div class="form-group">
									<label>Small input group size</label>
									<div class="input-group input-group-sm">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="icon-lifebuoy"></i></span>
										</div>
										<input type="text" class="form-control tokenfield" value="Red,blue,green" data-fouc>
									</div>
								</div>
								<!-- /small input group size -->

							</div>
						</div>
					</div>
				</div>
				<!-- /tokenfield inputs sizing -->


				<!-- Tokenfield styling -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Validation states</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Error validation state -->
								<div class="form-group">
									<label class="font-weight-semibold text-danger">Invalid state</label>
									<div class="form-group-feedback form-group-feedback-right">
										<input type="text" class="form-control tokenfield-danger" value="Red,blue,green" data-fouc>
										<div class="form-control-feedback text-danger">
											<i class="icon-cancel-circle2"></i>
										</div>
									</div>
								</div>
								<!-- /error validation state -->


								<!-- Success validation state -->
								<div class="form-group">
									<label class="font-weight-semibold text-success">Valid state</label>
									<div class="form-group-feedback form-group-feedback-right">
										<input type="text" class="form-control tokenfield-success" value="Red,blue,green" data-fouc>
										<div class="form-control-feedback text-success">
											<i class="icon-checkmark-circle"></i>
										</div>
									</div>
								</div>
								<!-- /success validation state -->

							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Custom colors</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Custom blue color -->
								<div class="form-group">
									<label>Custom blue color</label>
									<input type="text" class="form-control tokenfield-primary" value="Red,blue,green" data-fouc>
								</div>
								<!-- /custom blue color -->


								<!-- Custom green color -->
								<div class="form-group">
									<label>Custom green color</label>
									<input type="text" class="form-control tokenfield-teal" value="Red,blue,green" data-fouc>
								</div>
								<!-- /custom green color -->

							</div>
						</div>
					</div>
				</div>
				<!-- /tokenfield basic -->



				<!-- Bootstrap tags input -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Bootstrap Tags Input
					</h6>
					<span class="text-muted d-block">User interface for managing tags</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Initialization</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Default usage -->
								<div class="mb-3">
									<h6 class="font-weight-semibold">Default usage</h6>
									<p class="mb-3">Tags input is a simple and flexible extension with plenty of useful features and support of Twitter Typeahead library. To initialize tags input, you can use both javascript and data attributes.</p>

									<div class="mb-3">
										<input type="text" value="Amsterdam,Washington,Sydney,Beijing" class="form-control tags-input" data-fouc>
									</div>

									<div class="mb-3">
										<div class="mb-1">Returned values</div>
										<pre class="val"><code class="language-javascript">"Amsterdam,Washington,Sydney,Beijing"</code></pre>
									</div>

									<div class="mb-4">
										<div class="mb-1">Returned items</div>
										<pre class="items"><code class="language-javascript">["Amsterdam","Washington","Sydney","Beijing"]</code></pre>
									</div>
								</div>
								<!-- /default usage -->


								<!-- Using data attributes -->
								<div class="mb-3">
									<h6 class="font-weight-semibold">Using data attributes</h6>
									<p class="mb-3">Just add <code>data-role="tagsinput"</code> to your input field to automatically change it to a tags input field. <span class="font-weight-semibold">Note:</span> currently tags input supports only default options if intinalized via data attributes.</p>

									<div class="mb-3">
										<input type="text" value="Amsterdam,Washington,Sydney" class="form-control" data-role="tagsinput" data-fouc>
									</div>

									<div class="mb-3">
										<div class="mb-1">Returned values</div>
										<pre class="val"><code class="language-javascript">&nbsp;</code></pre>
									</div>

									<div class="mb-3">
										<div class="mb-1">Returned items</div>
										<pre class="items"><code class="language-javascript">&nbsp;</code></pre>
									</div>
								</div>
								<!-- /using data attributes -->

							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Basic options</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Maximum tags -->
								<div class="mb-3">
									<h6 class="font-weight-semibold">Maximum tags allowed</h6>
									<p class="mb-3">When set, no more than the given number of tags are allowed to add (default: undefined). When maxTags is reached, a class 'bootstrap-tagsinput-max' is placed on the tagsinput element.</p>

									<div class="mb-3">
										<input type="text" value="Amsterdam,Washington,Sydney" class="form-control tagsinput-max-tags" data-fouc>
									</div>

									<div class="mb-3">
										<div class="mb-1">Returned values</div>
										<pre class="val"><code class="language-javascript">"Amsterdam,Washington,Sydney"</code></pre>
									</div>

									<div class="mb-4">
										<div class="mb-1">Returned items</div>
										<pre class="items"><code class="language-javascript">["Amsterdam","Washington","Sydney"]</code></pre>
									</div>
								</div>
								<!-- /maximum tags -->


								<!-- Custom tag class -->
								<div class="mb-3">
									<h6 class="font-weight-semibold">Custom tags class</h6>
									<p class="mb-3">Tag element uses basic <code>.badge</code> element markup and supports all color options available for it. Default color alternative is <code>info</code>, to use another color add proper class to <code>tagClass</code> option.</p>

									<div class="mb-3">
										<input type="text" value="Amsterdam,Washington,Sydney" class="form-control tagsinput-custom-tag-class" data-fouc>
									</div>

									<div class="mb-3">
										<div class="mb-1">Returned values</div>
										<pre class="val"><code class="language-javascript">"Amsterdam,Washington,Sydney"</code></pre>
									</div>

									<div class="mb-3">
										<div class="mb-1">Returned items</div>
										<pre class="items"><code class="language-javascript">["Amsterdam","Washington","Sydney"]</code></pre>
									</div>
								</div>
								<!-- /maximum tags -->

							</div>
						</div>
					</div>
				</div>
				<!-- /bootstrap tags input -->


				<!-- Tags input options -->
				<div class="row">
					<div class="col-md-6">

						<!-- Advanced examples -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Advanced examples</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Typeahead support -->
								<div class="form-group">
									<label>Typeahead support</label>
									<input type="text" value="Washington,Alaska" data-role="tagsinput" class="form-control tagsinput-typeahead" data-fouc>
								</div>
								<!-- /typeahead support -->


								<!-- Categorizing tags -->
								<div class="form-group">
									<label>Categorizing tags</label>
									<input type="text" class="form-control tagsinput-tag-categorizing" data-fouc>
								</div>
								<!-- /categorizing tags -->


								<!-- Objects as tags -->
								<div class="form-group">
									<label>Objects as tags</label>
									<input type="text" class="form-control tagsinput-tag-objects" data-fouc>
								</div>
								<!-- /objects as tags -->


								<!-- Allow dublicates -->
								<div class="form-group">
									<label>Allow dublicates</label>
									<select multiple="multiple" class="form-control tags-input-dublicates" data-fouc>
										<option value="Amsterdam" selected>Amsterdam</option>
										<option value="Washington" selected>Washington</option>
										<option value="Washington" selected>Washington</option>
									</select>
								</div>
								<!-- /allow dublicates -->

							</div>
						</div>
						<!-- /advanced examples -->

					</div>

					<div class="col-md-6">

						<!-- Tags input methods -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Tags input methods</h5>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>

							<div class="card-body">

								<!-- Add tag -->
								<div class="form-group">
									<label>Add one tag</label>
									<div class="input-group">
										<input type="text" value="Washington,Alaska" class="form-control tagsinput-add-tag" data-fouc>
										<div class="input-group-append align-self-start">
											<button type="button" class="btn btn-light add-tag-button">Add Beijing</button>
										</div>
									</div>
								</div>
								<!-- /add tag -->


								<!-- Remove tag -->
								<div class="form-group">
									<label>Remove one tag</label>
									<div class="input-group">
										<input type="text" value="Washington,Alaska" class="form-control tagsinput-remove-tag" data-fouc>
										<div class="input-group-append align-self-start">
											<button type="button" class="btn btn-light remove-tag-button">Remove Sydney</button>
										</div>
									</div>
								</div>
								<!-- /remove tag -->


								<!-- Remove all tags -->
								<div class="form-group">
									<label>Remove all tags</label>
									<div class="input-group">
										<input type="text" value="Washington,Alaska" class="form-control tagsinput-remove-tags" data-fouc>
										<div class="input-group-append align-self-start">
											<button type="button" class="btn btn-light remove-all-tags-button">Remove all</button>
										</div>
									</div>
								</div>
								<!-- /remove all tags -->


								<!-- Destroy tags input -->
								<div class="form-group">
									<label>Destroy Tagsinput</label>
									<div class="input-group">
										<input type="text" value="Washington,Alaska" class="form-control tagsinput-destroy" data-fouc>
										<div class="input-group-append align-self-start">
											<button type="button" class="btn btn-light destroy-tagsinput-button">Destroy</button>
										</div>
									</div>
								</div>
								<!-- /destroy tags input -->

							</div>
						</div>
						<!-- /tags input methods -->

					</div>
				</div>
				<!-- /tags input options -->

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

	<!-- Core JS files -->
	<script src="../../../../global_assets/js/main/jquery.min.js"></script>
	<script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /core JS files -->

	<!-- Page JS files -->
	<script src="../../../../global_assets/js/plugins/forms/tags/tagsinput.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/tags/tokenfield.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_tags_input.js"></script>
	<!-- /Page JS files -->

</body>
</html>
