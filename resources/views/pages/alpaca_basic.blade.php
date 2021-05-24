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
	<script src="../../../../global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/inputs/alpaca/alpaca.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/alpaca_basic.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Alpaca</span> - Basic Inputs</h4>
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
							<a href="alpaca_basic" class="breadcrumb-item">Alpaca</a>
							<span class="breadcrumb-item active">Basic inputs</span>
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

				<!-- Text inputs title -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Text inputs
					</h6>
					<span class="text-muted d-block">Input fields with options</span>
				</div>
				<!-- /text inputs title -->


				<!-- Basic examples -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic text field</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">A simple example of using Alpaca with nothing more than a string of text. Alpaca looks at your data and determines that it is a string. It then looks for a suitable candidate for representing a string and it decides to use the <code>text</code> field.</p>
								<div id="alpaca-basic"></div>
								<a href="#alpaca-basic-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-basic-source">
									<pre class="language-javascript"><code>// Basic text input
$("#alpaca-basic").alpaca({
    data: "I Love Alpaca Ice Cream!",
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
								<h6 class="card-title">Display only view</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">Displays a text field using a display-only view. The text field simply prints out and is not editable, a simple block appears instead. This is a default form control type provided by Bootstrap framework.</p>
								<div id="alpaca-static"></div>
								<a href="#alpaca-static-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-static-source">
									<pre class="language-javascript"><code>// Display only view
$("#alpaca-static").alpaca({
    data: "I Love Alpaca Ice Cream!",
    schema: {
        type: "string"
    },
    view: "bootstrap-display"
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /basic examples -->


				<!-- Input labels -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Label for text input</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">In this example <strong>text</strong> input field has label. By default appears on top left and uses default Bootstrap styles, including contetual alternatives. To add text label to any input field, use <code>label</code> option inside set of configuration <code>options</code>.</p>
								<div id="alpaca-input-label"></div>
								<a href="#alpaca-input-label-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-input-label-source">
									<pre class="language-javascript"><code>// Text input label
$("#alpaca-input-label").alpaca({
    data: "I Love Alpaca Ice Cream!",
    options: {
        label: "Input label",
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
								<h6 class="card-title">Label for static input</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">In this example <strong>static</strong> input field has label. By default appears on top left and uses default Bootstrap styles, including contetual alternatives. To add text label to any input field, use <code>label</code> option inside set of configuration <code>options</code>.</p>
								<div id="alpaca-static-label"></div>
								<a href="#alpaca-static-label-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-static-label-source">
									<pre class="language-javascript"><code>// Static input label
$("#alpaca-static-label").alpaca({
    data: "I Love Alpaca Ice Cream!",
    schema: {
        type: "string"
    },
    options: {
        label: "Input label"
    },
    view: "bootstrap-display"
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /input labels -->


				<!-- Validation -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Validation</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">A more developed example that specifies not only the data but also the schema, options and some basic input validation. In this example text field is limited to minimum 3 characters and maximum 5 characters. Try to change default input value.</p>
								<div id="alpaca-validation"></div>
								<a href="#alpaca-validation-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-validation-source">
									<pre class="language-javascript"><code>// Validation
$("#alpaca-validation").alpaca({
    data: "Mint",
    schema: {
        minLength: 3,
        maxLength: 5
    },
    options: {
        label: "Ice Cream",
        helper: "Your favorite ice cream?",
        size: 30,
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
								<h6 class="card-title">Predefined value</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">In this example, we intentionally set the data to something that is invalid. The schema specifies that the maximum length of the allowed value is 8 characters. Our value exceeds that and so we receive a message straight away indicating this problem.</p>
								<div id="alpaca-validation-predefined"></div>
								<a href="#alpaca-validation-predefined-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-validation-predefined-source">
									<pre class="language-javascript"><code>// Predefined value
$("#alpaca-validation-predefined").alpaca({
    data: "Mint Chocolate",
    schema: {
        minLength: 3,
        maxLength: 5
    },
    options: {
        label: "Ice Cream",
        helper: "Please tell us the kind of ice cream you love most!",
        size: 30,
        focus: false,
        placeholder: "Enter an ice cream flavor"
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /validation -->


				<!-- Disallowance -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Disallow empty spaces</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">A text with field with <code>disallowEmptySpaces</code> set to <code>true</code>. This prevents the entry of spaces - it doesn't react on pressing space key. This is useful for things like username entry fields, as configured below.</p>
								<div id="alpaca-disallow-empty"></div>
								<a href="#alpaca-disallow-empty-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-disallow-empty-source">
									<pre class="language-javascript"><code>// Disallow empty spaces
$("#alpaca-disallow-empty").alpaca({
    schema: {
        type: "string"
    },
    options: {
        type: "lowercase",
        label: "User Name",
        disallowEmptySpaces: true,
        helper: "Type something with empty space",
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
								<h6 class="card-title">Disallow values</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">In this example we've added a few predefined values, that are not allowed by default. Just place values you want to disallow into <code>disallow</code> option, this will enable input field validation. Try to change input field value to see it in action.</p>
								<div id="alpaca-disallow-values"></div>
								<a href="#alpaca-disallow-values-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-disallow-values-source">
									<pre class="language-javascript"><code>// Disallow values
$("#alpaca-disallow-values").alpaca({
    data: "Mickey Mantle",
    schema: {
        type: "string",
        disallow: ["Mickey Mantle", "Mickey"]
    },
    options: {
        label: "Name",
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /disallowance -->


				<!-- Third party integrations -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Typeahead integration</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">This example uses <code>$.typeahead</code> auto-completion with a function to provide lookup values. The <code>config</code> block defines the first argument into the typeahead plugin. The <code>datasets</code> block defines the second argument into the typeahead plugin.</p>
								<div id="alpaca-typeahead-rtl"></div>
								<a href="#alpaca-typeahead-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-typeahead-source">
									<pre class="language-javascript"><code>// Typeahead
$("#alpaca-typeahead").alpaca({
    schema: {
        type: "string"
    },
    options: {
        type: "text",
        label: "Company Name",
        helper: "Select the name of a computing company",
        placeholder: "Enter 'a'",
        focus: false,
        fieldClass: 'typeahead-rtl',
        typeahead: {
            config: {
                highlight: true,
                hint: true,
                minLength: 1
            },
            datasets: {
                type: "local",
                displayKey: 'value',
                source: ["Google", "Amazon", "Microsoft", "Apple", "Spotify", "Alpaca", "Another company", "Facebook"]
            }
        }
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Maxlength integration</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">This example constrains the entered text value, forcing it to be at minimum 3 and at most 25. This not only runs validation checks but also enforces some UI behavior. This also shows how many characters are left for <code>maxLength</code> as you type.</p>
								<div id="alpaca-maxlength"></div>
								<a href="#alpaca-maxlength-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-maxlength-source">
									<pre class="language-javascript"><code>// Maxlength
$("#alpaca-maxlength").alpaca({
    schema: {
        type: "string",
        minLength: 3,
        maxLength: 25
    },
    options: {
        type: "text",
        label: "What is your name?",
        constrainMaxLength: true,
        constrainMinLength: true,
        showMaxLengthIndicator: true,
        focus: false
    },
    data: "Jackie Robinson"
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /third party integrations -->



				<!-- Textarea title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Textarea type
					</h6>
					<span class="text-muted d-block">Basic examples of textarea</span>
				</div>
				<!-- /textarea title -->


				<!-- Basic textarea -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic textarea</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates a simple textarea field with a string of text. Textarea type supports almost all available options for text inputs and also includes basic textarea attributes, such as columns and rows.</p>
								<div id="alpaca-textarea"></div>
								<a href="#alpaca-textarea-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-textarea-source">
									<pre class="language-javascript"><code>// Basic textarea
$("#alpaca-textarea").alpaca({
    data: "Ice cream or ice-cream...",
    options: {
        type: "textarea",
        label: "Receipt",
        helper: "Receipt for Best Homemade Ice Cream",
        rows: 4,
        cols: 80,
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
								<h6 class="card-title">With placeholder</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example uses the <code>placeholder</code> option to set up the placeholder text for a text area field. This basic option is available in all input types: text, number, search, url, email, textarea etc.</p>
								<div id="alpaca-textarea-placeholder"></div>
								<a href="#alpaca-textarea-placeholder-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-textarea-placeholder-source">
									<pre class="language-javascript"><code>// With placeholder
$("#alpaca-textarea-placeholder").alpaca({
    options: {
        type: "textarea",
        label: "Receipt",
        helper: "Receipt for Best Homemade Ice Cream",
        placeholder: "Enter your favorite ice cream here...",
        rows: 4,
        cols: 80,
        focus: false
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /basic textarea -->


				<!-- View mode -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">View mode</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">In the following example textarea field is rendered in display-only mode, which means textarea is replaced with div block and can't be editable. To set a view only mode, use <code>bootstrap-display</code>option added to <code>view</code> option.</p>
								<div id="alpaca-textarea-static"></div>
								<a href="#alpaca-textarea-static-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-textarea-static-source">
									<pre class="language-javascript"><code>// View mode
$("#alpaca-textarea-static").alpaca({
    data: "Ice cream or ice-cream...",
    options: {
        type: "textarea",
        label: "Receipt",
        rows: 6,
        cols: 80,
        focus: false
    },
    view: "bootstrap-display"
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Single field render</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example overrides the <code>view</code> property on the field to have just the single field render in an alternate, display-only view. To make it short - <code>view</code> property here is placed inside <code>options</code> property.</p>
								<div id="alpaca-textarea-override"></div>
								<a href="#alpaca-textarea-override-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-textarea-override-source">
									<pre class="language-javascript"><code>// Single field render
$("#alpaca-textarea-override").alpaca({
    data: "My name is Dr. Jacobian and I am a neuroscientist...",
    schema: {
        type: "string"
    },
    options: {
        type: "textarea",
        label: "Tell us about yourself",
        view: "bootstrap-display"
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /view mode -->



				<!-- Selects title -->
				<div class="mb-3 mt-2">
					<h6 class="mb-0 font-weight-semibold">
						Select menus
					</h6>
					<span class="text-muted d-block">Basic selects, Multiselect and Select2</span>
				</div>
				<!-- /selects title -->


				<!-- Basic selects -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic select</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">Select field with data, options and schema parameters. As default, a select field will be rendered if schema enum property has more than 3 options. The sort order for enumerated values and their text are assumed to be alphanumeric.</p>
								<div id="alpaca-select"></div>
								<a href="#alpaca-select-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-select-source">
									<pre class="language-javascript"><code>// Basic select
$("#alpaca-select").alpaca({
    data: "coffee",
    schema: {
        enum: ["vanilla", "chocolate", "coffee", "strawberry", "mint"]
    },
    options: {
        label: "Ice cream",
        helper: "What flavor of ice cream do you prefer?",
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
								<h6 class="card-title">External data source</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">Select field with external data source using <code>dataSource</code> option. If a string, it is considered to be a URI to a service that produces a object containing key/value pairs or an array of elements. Function needs to produce the same list.</p>
								<div id="alpaca-select-external"></div>
								<a href="#alpaca-select-external-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-select-external-source">
									<pre class="language-javascript"><code>// External data source
$("#alpaca-select-external").alpaca({
    options: {
        label: "Ice cream",
        helper: "Guess my favorite ice cream?",
        type: "select",
        focus: false,
        dataSource: "../../../../global_assets/demo_data/alpaca/selects.json"
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /basic selects -->


				<!-- Multiselect -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic multiselect</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates select menu with multiple select option, based on <code>Bootstrap Multiselect</code> plugin. Default multiselect doesn't provide styled checkboxes, so we are using <code>Uniform</code> plugin for custom look.</p>
								<div id="alpaca-multiselect"></div>
								<a href="#alpaca-multiselect-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-multiselect-source">
									<pre class="language-javascript"><code>// Multiselect
$("#alpaca-multiselect").alpaca({
    data: ["Vanilla", "Chocolate"],
    schema: {
        type: "array",
        items: {
            title: "Ice Cream",
            type: "string",
            enum: ["Vanilla", "Chocolate", "Strawberry", "Mint"],
            minItems: 2,
            maxItems: 3
        }
    },
    options: {
        label: "Ice cream",
        helper: "Guess my favorite ice cream?",
        type: "select",
        size: 5,
        id: "multiselect",
        focus: false
    },
    postRender: function(control) {
        $("#multiselect").parent().find("input[type=checkbox]").uniform();
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Multiselect data source</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">Select field with external data source using <code>dataSource</code> option. If a string, it is considered to be a URI to a service that produces a object containing key/value pairs or an array of elements. Function needs to produce the same list.</p>
								<div id="alpaca-multiselect-remote"></div>
								<a href="#alpaca-multiselect-remote-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-multiselect-remote-source">
									<pre class="language-javascript"><code>// Multiselect with remote data
$("#alpaca-multiselect-remote").alpaca({
    options: {
        label: "Select your favorite flavor of ice cream",
        type: "select",
        multiple: true,
        helper: "Guess my favorite ice cream?",
        size: 3,
        focus: false,
        id: "multiselect-remote",
        dataSource: "../../../../global_assets/demo_data/alpaca/selects.json"
    },
    postRender: function(control) {
        $("#multiselect-remote").parent().find("input[type=checkbox]").uniform();
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /multiselects -->


				<!-- Select2 selects -->
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Select2 basic</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates default implementation of Select2 library - here we need to specify select ID first, then initialize Select2 plugin using that ID selector. This is a custom integration, which is not supported in Alpaca by default.</p>
								<div id="alpaca-select2"></div>
								<a href="#alpaca-select2-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-select2-source">
									<pre class="language-javascript"><code>// Select2 select
$("#alpaca-select2").alpaca({
    data: "coffee",
    schema: {
        enum: ["vanilla", "chocolate", "coffee", "strawberry", "mint"]
    },
    options: {
        label: "Ice cream",
        helper: "What flavor of ice cream do you prefer?",
        id: "select2-basic",
        focus: false
    },
    postRender: function(control) {
        $('#select2-basic').select2({
            minimumResultsForSearch: Infinity
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
								<h6 class="card-title">Select2 with search</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates Select2 select with search field - here we need to specify select ID first, then initialize Select2 plugin using that ID selector. This is a custom integration, which is not supported in Alpaca by default.</p>
								<div id="alpaca-select2-search"></div>
								<a href="#alpaca-select2-search-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-select2-search-source">
									<pre class="language-javascript"><code>// Select2 select with search
$("#alpaca-select2-search").alpaca({
    data: "coffee",
    schema: {
        enum: ["vanilla", "chocolate", "coffee", "strawberry", "mint"]
    },
    options: {
        label: "Ice cream",
        helper: "What flavor of ice cream do you prefer?",
        id: "select2-search",
        focus: false
    },
    postRender: function(control) {
        $('#select2-search').select2();
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /select2 selects -->

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
