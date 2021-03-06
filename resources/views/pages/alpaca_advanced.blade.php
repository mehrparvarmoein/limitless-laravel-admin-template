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
	<script src="../../../../global_assets/js/plugins/forms/inputs/typeahead/handlebars.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/alpaca/alpaca.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/alpaca/price_format.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>
	<script src="../../../../global_assets/js/plugins/editors/ckeditor/ckeditor.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/alpaca_advanced.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Alpaca</span> - Advanced Inputs</h4>
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
							<a href="alpaca_advanced" class="breadcrumb-item">Alpaca</a>
							<span class="breadcrumb-item active">Advanced inputs</span>
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

				<!-- Option trees -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Option trees
					</h6>
					<span class="text-muted d-block">Dependent option trees</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Option tree field</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">This example asks a user what number they would like on the sports jersey. They're always able to just type in a value. Here, we provide a sequence of dropdowns to let them select a sport, team and athlete. The jersey number is then automatically filled in.</p>
								<div id="alpaca-option-tree"></div>
								<a href="#alpaca-option-tree-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-option-tree-source">
									<pre class="language-javascript"><code>// Option tree field
$('#alpaca-option-tree').alpaca({
    schema: {
        type: 'number',
        title: 'What number would like for your sports jersey?'
    },
    options: {
        type: 'optiontree',
        tree: {
            selectors: {
                sport: {
                    schema: {
                        type: 'string'
                    },
                    options: {
                        type: 'select',
                        noneLabel: 'Pick a Sport...'
                    }
                },
                team: {
                    schema: {
                        type: 'string'
                    },
                    options: {
                        type: 'select',
                        noneLabel: 'Pick a Team...'
                    }
                },
                player: {
                    schema: {
                        type: 'string'
                    },
                    options: {
                        type: 'select',
                        noneLabel: 'Pick a Player...'
                    }
                }
            },
            order: ['sport', 'team', 'player'],
            data: [{
                value: 23,
                attributes: {
                    sport: 'Basketball',
                    team: 'Chicago Bulls',
                    player: 'Michael Jordan'
                }
            }, {
                value: 33,
                attributes: {
                    sport: 'Basketball',
                    team: 'Chicago Bulls',
                    player: 'Scotty Pippen'
                }
            }, {
                value: 4,
                attributes: {
                    sport: 'Football',
                    team: 'Green Bay Packers',
                    player: 'Brett Favre'
                }
            }, {
                value: 19,
                attributes: {
                    sport: 'Baseball',
                    team: 'Milwaukee Brewers',
                    player: 'Robin Yount'
                }
            }, {
                value: 99,
                attributes: {
                    sport: 'Hockey',
                    player: 'Wayne Gretzky'
                }
            }],
            horizontal: true
        },
        focus: false
    }
});
</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Using connector</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example produces the same form, but uses a connector to load the schema and options. The options JSON is loaded and merged with some inline options that provide to override a submit click handler.</p>
								<div id="alpaca-option-tree-connector"></div>
								<a href="#alpaca-option-tree-connector-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-option-tree-connector-source">
									<pre class="language-javascript"><code>// Using connector
$('#alpaca-option-tree-connector').alpaca({
    schemaSource: '../../../../global_assets/demo_data/alpaca/optiontree-custom-schema.json',
    optionsSource: '../../../../global_assets/demo_data/alpaca/optiontree-custom-options.json',
    options: {
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /opton trees -->


				<!-- Full CKEditor -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						CKEditor field
					</h6>
					<span class="text-muted d-block">Render CKEditor editor</span>
				</div>

				<div class="card mb-4">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Full featured editor</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>
				
					<div class="card-body">
						<p class="mb-3">The <code>ckeditor</code> field. The CK Editor field renders the CK editor control that allows users to visually work with HTML and save the results back into a text property. This is a full example of the CK Editor at work. The point here is to show how it looks in full. In the examples that follow, we'll trim this down. Note - CKeditor must be included in your page ahead of the control loading in order for this to work properly.</p>

						<div id="alpaca-ckeditor-full-rtl"></div>
					</div>
				</div>
				<!-- /full CKEditor -->


				<!-- Input types -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Input types
					</h6>
					<span class="text-muted d-block">Supported input types</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Lowercase</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates how Alpaca library can format text inside input field. To apply <code>lowercase</code> text style, set <code>format</code> option to <code>lowercase</code> inside <code>schema</code> parameter.</p>
								<div id="alpaca-lowercase"></div>
								<a href="#alpaca-lowercase-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-lowercase-source">
									<pre class="language-javascript"><code>// Lowercase
$('#alpaca-lowercase').alpaca({
    data: 'Ice cream is wonderful.',
    schema: {
        format: 'lowercase'
    },
    options: {
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Uppercase</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates how Alpaca library can format text inside input field. To apply <code>uppercase</code> text style, set <code>format</code> option to <code>uppercase</code> inside <code>schema</code> parameter.</p>
								<div id="alpaca-uppercase"></div>
								<a href="#alpaca-uppercase-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-uppercase-source">
									<pre class="language-javascript"><code>// Uppercase
$('#alpaca-uppercase').alpaca({
    data: 'Ice cream is wonderful.',
    schema: {
        format: 'uppercase'
    },
    options: {
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Search type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The <code>search</code> field implements a search box that provides a search-optimized control. It allows for the specification of search terms with an optimized user interface. It uses the HTML5 'search' input type, but not the actual search.</p>
								<div id="alpaca-search"></div>
								<a href="#alpaca-search-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-search-source">
									<pre class="language-javascript"><code>// Search type
$('#alpaca-search').alpaca({
    data: 'Where for art thou Romeo?',
    schema: {
        type: 'string'
    },
    options: {
        type: 'search',
        focus: false,
        label: 'Search'
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Integer type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>integer</code> field with data, options and schema parameters. Minimum value is set to 18, maximum to 25. Validation is also enabled, try to change input value to see it in action.</p>
								<div id="alpaca-integer"></div>
								<a href="#alpaca-integer-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-integer-source">
									<pre class="language-javascript"><code>// Integer type
$('#alpaca-integer').alpaca({
    data: 20,
    options: {
        type: 'integer',
        label: 'Age:',
        focus: false
    },
    schema: {
        minimum: 18,
        maximum: 25,
        exclusiveMinimum: true,
        exclusiveMaximum: true,
        divisibleBy: 2
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Password type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>password</code> field type. Here input doesn't have any optional parameters, but a very basic setup. This input field type supports all available options and parameters.</p>
								<div id="alpaca-password"></div>
								<a href="#alpaca-password-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-password-source">
									<pre class="language-javascript"><code>// Password type
$('#alpaca-password').alpaca({
    data: 'password',
    schema: {
        format: 'password'
    },
    options: {
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Email type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>email</code> field type. Here input doesn't have any optional parameters, but a very basic setup. This input field type supports all available options and parameters. Validation enabled by default.</p>
								<div id="alpaca-email"></div>
								<a href="#alpaca-email-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-email-source">
									<pre class="language-javascript"><code>// Email type
$('#alpaca-email').alpaca({
    data: 'support',
    schema: {
        format: 'email'
    },
    options: {
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">IPv4 type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>ipv4</code> field type. Here input doesn't have any optional parameters, but a very basic setup. This input field type supports all available options and parameters. Validation enabled by default.</p>
								<div id="alpaca-ipv4"></div>
								<a href="#alpaca-ipv4-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-ipv4-source">
									<pre class="language-javascript"><code>// IP address type
$('#alpaca-ipv4').alpaca({
    data: '100.60',
    schema: {
        format: 'ip-address'
    },
    options: {
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">URL type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>url</code> field type. Here input doesn't have any optional parameters, but a very basic setup. This input field type supports all available options and parameters. Validation enabled by default.</p>
								<div id="alpaca-url"></div>
								<a href="#alpaca-url-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-url-source">
									<pre class="language-javascript"><code>// URL type
$('#alpaca-url').alpaca({
    data: 'http://www.alpacajs.org',
    options: {
        type: 'url',
        focus: false
    },
    schema: {
        format: 'uri'
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Currency type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>currency</code> field type. Here input doesn't have any optional parameters, but a very basic setup. The currency field uses the JQuery Price Format plugin to render format the input as it's entered.</p>
								<div id="alpaca-currency"></div>
								<a href="#alpaca-currency-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-currency-source">
									<pre class="language-javascript"><code>// Currency type
$('#alpaca-currency').alpaca({
    options: {
        type: 'currency',
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Personal name type</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates custom <code>personal name</code> field type. Every time you press space key, new word starts with capital letter. This input field type supports all available options and parameters. Validation enabled by default.</p>
								<div id="alpaca-name"></div>
								<a href="#alpaca-name-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-name-source">
									<pre class="language-javascript"><code>// Personal name type
$('#alpaca-name').alpaca({
    data: 'Oscar Zoroaster Phadrig Isaac Norman Henkel Emmannuel Ambroise Diggs',
    options: {
        type: 'personalname',
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /input types -->



				<!-- File inputs -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						File inputs
					</h6>
					<span class="text-muted d-block">Default and optional styling</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic file input</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates a basic single file input. This input field type supports all available options and parameters. Additionally you can specify schema format. Validation is disabled by default.</p>
								<div id="alpaca-file"></div>
								<a href="#alpaca-file-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-file-source">
									<pre class="language-javascript"><code>// Basic file input
$('#alpaca-file').alpaca({
    data: '',
    options: {
        type: 'file',
        label: 'Ice Cream Photo:',
        helper: 'Pick your favorite ice cream picture.',
        focus: false
    },
    schema: {
        type: 'string',
        format: 'uri'
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Static mode</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates a basic single file input in <code>read only</code> mode. This input field type supports all available options and parameters. Additionally you can specify schema format. Validation is disabled by default.</p>
								<div id="alpaca-file-static"></div>
								<a href="#alpaca-file-static-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-file-static-source">
									<pre class="language-javascript"><code>// Static mode
$('#alpaca-file-static').alpaca({
    data: '/abc',
    options: {
        type: 'file',
        label: 'Ice Cream Photo:',
        helper: 'Pick your favorite ice cream picture.',
        focus: false
    },
    schema: {
        type: 'string',
        format: 'uri'
    },
    view: 'bootstrap-display'
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Styled file input</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates a single file input styled with <code>uniform</code> plugin. This is optional configuration, Alpaca doesn't support it by default and doesn't have custom field type. Also supports all available options.</p>
								<div id="alpaca-file-styled"></div>
								<a href="#alpaca-file-styled-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-file-styled-source">
									<pre class="language-javascript"><code>// Styled file input
$('#alpaca-file-styled').alpaca({
    data: '',
    options: {
        type: 'file',
        label: 'Ice Cream Photo:',
        helper: 'Pick your favorite ice cream picture.',
        id: 'file-styled',
        focus: false
    },
    schema: {
        type: 'string',
        format: 'uri'
    },
    postRender: function() {
        $('#file-styled').uniform({
            fileButtonClass: 'action btn bg-blue'
        });
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Disabled file input</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates a single file input styled with <code>uniform</code> plugin in <code>disabled</code> mode. This is optional configuration, Alpaca doesn't support it by default and doesn't have custom field type. Also supports all available options.</p>
								<div id="alpaca-file-disabled"></div>
								<a href="#alpaca-file-disabled-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-file-disabled-source">
									<pre class="language-javascript"><code>// Disabled file input
$('#alpaca-file-disabled').alpaca({
    data: '',
    options: {
        type: 'file',
        label: 'Ice Cream Photo:',
        helper: 'Pick your favorite ice cream picture.',
        disabled: true,
        id: 'file-styled-disabled',
        focus: false
    },
    schema: {
        type: 'string',
        format: 'uri'
    },
    postRender: function() {
        $('#file-styled-disabled').uniform({
            fileButtonClass: 'action btn bg-blue'
        });
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /file inputs -->



				<!-- Select helpers -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Select helpers
					</h6>
					<span class="text-muted d-block">Country and state selects</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Country selector</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>country</code> field with default settings. To use this kind of select helper, just set <code>type</code> option to <code>country</code> in your configuration. Supports all available options.</p>
								<div id="alpaca-country"></div>
								<a href="#alpaca-country-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-country-source">
									<pre class="language-javascript"><code>// Country selector
$('#alpaca-country').alpaca({
    options: {
        type: 'country',
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">State selector</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>state</code> field with default settings. To use this kind of select helper, just set <code>type</code> option to <code>state</code> in your configuration. Supports all available options.</p>
								<div id="alpaca-state"></div>
								<a href="#alpaca-state-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-state-source">
									<pre class="language-javascript"><code>// State selector
$('#alpaca-state').alpaca({
    options: {
        type: 'state',
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Searchable select</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>country</code> field with integrated Select2 plugin. To initialize Select2 on select, you need to add init code in <code>postRender</code> callback. Supports all available options.</p>
								<div id="alpaca-country-search"></div>
								<a href="#alpaca-country-search-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-country-search-source">
									<pre class="language-javascript"><code>// Searchable country selector
$('#alpaca-country-search').alpaca({
    options: {
        type: 'country',
        id: 'country-search',
        focus: false
    },
    postRender: function() {
        $('#country-search').select2();
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Searchable select</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>state</code> field with integrated Select2 plugin. To initialize Select2 on select, you need to add init code in <code>postRender</code> callback. Supports all available options.</p>
								<div id="alpaca-state-search"></div>
								<a href="#alpaca-state-search-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-state-search-source">
									<pre class="language-javascript"><code>// Searchable state selector
$('#alpaca-state-search').alpaca({
    options: {
        type: 'state',
        id: 'state-search',
        focus: false
    },
    postRender: function() {
        $('#state-search').select2();
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /select helpers -->

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
