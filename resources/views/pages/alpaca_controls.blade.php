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
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
	<script src="../../../../global_assets/js/plugins/extensions/jquery_ui/widgets.min.js"></script>
	<script src="../../../../global_assets/js/plugins/ui/prism.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/tags/tokenfield.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/alpaca_controls.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Alpaca</span> - Controls</h4>
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
							<a href="alpaca_controls" class="breadcrumb-item">Alpaca</a>
							<span class="breadcrumb-item active">Controls</span>
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

				<!-- Checkboxes -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Checkbox inputs
					</h6>
					<span class="text-muted d-block">Checkbox inputs variations</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic checkbox</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates checkbox input type with both field label and right label. Validation is enabled by default and requires proper options added to checkbox configuration. Supports all available input-specific options.</p>
								<div id="alpaca-checkbox-label"></div>
								<a href="#alpaca-checkbox-label-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-checkbox-label-source">
									<pre class="language-javascript"><code>// Checkbox with label
$('#alpaca-checkbox-label').alpaca({
    data: true,
    options: {
        label: 'Question:',
        rightLabel: 'Do you like Alpaca?'
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Display only mode</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates checkbox input type in display-only mode. Validation is enabled by default and requires proper options added to checkbox configuration. Supports all available input-specific options.</p>
								<div id="alpaca-checkbox-static"></div>
								<a href="#alpaca-checkbox-static-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-checkbox-static-source">
									<pre class="language-javascript"><code>// Display only mode
$('#alpaca-checkbox-static').alpaca({
    data: false,
    view: 'bootstrap-display',
    options: {
        label: 'Registered?'
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
								<h6 class="card-title">Styled checkbox</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates checkbox input type with custom style added by Uniform plugin. Validation is enabled by default and requires proper options added to checkbox configuration. Supports all available input-specific options.</p>
								<div id="alpaca-checkbox-styled"></div>
								<a href="#alpaca-checkbox-styled-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-checkbox-styled-source">
									<pre class="language-javascript"><code>// Styled checkbox
$('#alpaca-checkbox-styled').alpaca({
    data: true,
    options: {
        label: 'Question:',
        rightLabel: 'Do you like Alpaca?',
        fieldClass: 'checkbox-styled'
    },
    postRender: function(control) {
        $('.checkbox-styled').find('input[type=checkbox]').uniform();
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Disabled mode</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates styled checkbox input in disabled mode. Validation is enabled by default and requires proper options added to checkbox configuration. Supports all available input-specific options.</p>
								<div id="alpaca-checkbox-styled-disabled"></div>
								<a href="#alpaca-checkbox-styled-disabled-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-checkbox-styled-disabled-source">
									<pre class="language-javascript"><code>// Disabled checkbox
$('#alpaca-checkbox-styled-disabled').alpaca({
    data: true,
    options: {
        label: 'Question:',
        rightLabel: 'Do you like Alpaca?',
        fieldClass: 'checkbox-styled-disabled',
        disabled: true
    },
    postRender: function(control) {
        $('.checkbox-styled-disabled').find('input[type=checkbox]').uniform();
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
								<h6 class="card-title">Switchery toggles</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates checkbox input type displayed as a toggle. Both Uniform and Switchery are custom additions, Alpaca doesn't support these components by default and requires custom configuraiton.</p>
								<div id="alpaca-switchery"></div>
								<a href="#alpaca-switchery-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-switchery-source">
									<pre class="language-javascript"><code>// Switchery toggle
$('#alpaca-switchery').alpaca({
    data: true,
    options: {
        label: 'Question:',
        rightLabel: 'Do you like Alpaca?',
        fieldClass: 'switchery-demo'
    },
    postRender: function() {

        // Init Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery-demo input[type=checkbox]'));
        elems.forEach(function(html) {
          var switchery = new Switchery(html);
        });

        // Add proper spacing
        $('.switchery-demo').find('.form-check').addClass('form-check-switchery');
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Disabled mode</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates checkbox input type displayed as a toggle, in disabled mode. Both Uniform and Switchery are custom additions, Alpaca doesn't support these components by default and requires custom configuraiton.</p>
								<div id="alpaca-switchery-disabled"></div>
								<a href="#alpaca-switchery-disabled-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-switchery-disabled-source">
									<pre class="language-javascript"><code>// Switchery toggle
$('#alpaca-switchery-disabled').alpaca({
    data: true,
    options: {
        label: 'Question:',
        rightLabel: 'Do you like Alpaca?',
        fieldClass: 'switchery-disabled-demo',
        disabled: true
    },
    postRender: function(control) {

        // Init Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery-disabled-demo input[type=checkbox]'));
        elems.forEach(function(html) {
          var switchery = new Switchery(html);
        });

        // Add proper spacing
        $('.switchery-disabled-demo').find('.form-check').addClass('form-check-switchery');
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
								<h6 class="card-title">Basic checkbox list</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates checkbox list used for multiple values provided as an array. Validation is enabled by default and requires proper options added to checkbox configuration. Supports all available input-specific options.</p>
								<div id="alpaca-checkbox-list"></div>
								<a href="#alpaca-checkbox-list-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-checkbox-list-source">
									<pre class="language-javascript"><code>// Basic checkbox list
$('#alpaca-checkbox-list').alpaca({
    data: ['sandwich', 'cookie', 'drink'],
    schema: {
        type: 'array',
        enum: ['sandwich', 'chips', 'cookie', 'drink']
    },
    options: {
        type: 'checkbox',
        label: 'What would you like with your order?',
        optionLabels: ['A Sandwich', 'Potato Chips', 'A Cookie', 'Soft Drink']
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Styled checkbox list</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates multiple checkbox list with custom style added by Uniform plugin. Validation is enabled by default and requires proper options added to checkbox configuration. Supports all available input-specific options.</p>
								<div id="alpaca-checkbox-list-styled"></div>
								<a href="#alpaca-checkbox-list-styled-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-checkbox-list-styled-source">
									<pre class="language-javascript"><code>// Styled checkbox list
$('#alpaca-checkbox-list-styled').alpaca({
    data: ['sandwich', 'cookie', 'drink'],
    schema: {
        type: 'array',
        enum: ['sandwich', 'chips', 'cookie', 'drink']
    },
    options: {
        type: 'checkbox',
        label: 'What would you like with your order?',
        optionLabels: ['A Sandwich', 'Potato Chips', 'A Cookie', 'Soft Drink'],
        fieldClass: 'checkbox-styled-list'
    },
    postRender: function(control) {
        $('.checkbox-styled-list').find('input[type=checkbox]').uniform();
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /checkboxes -->


				<!-- Radio -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Radio buttons
					</h6>
					<span class="text-muted d-block">Radio button variations</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Basic radios</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>radio</code> button field with more than 3 options and custom option labels. Validation is enabled by default and requires proper options added to checkbox configuration. Supports all available input-specific options.</p>
								<div id="alpaca-radio-basic"></div>
								<a href="#alpaca-radio-basic-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-radio-basic-source">
									<pre class="language-javascript"><code>// Basic radios
$('#alpaca-radio-basic').alpaca({
    data: 'green',
    options: {
        type: 'radio',
        label: 'Favorite Color',
        helper: 'Pick your favorite color',
        optionLabels: {
            red: 'Red',
            green: 'Green',
            blue: 'Blue',
            white: 'White',
            black: 'Black'
        }
    },
    schema: {
        required: true,
        enum: ['red', 'green', 'blue', 'white', 'black']
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Disabled mode</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates <code>radio</code> button field with set of options in disabled mode. Validation is enabled by default and requires proper options added to checkbox configuration. Supports all available input-specific options.</p>
								<div id="alpaca-radio-basic-disabled"></div>
								<a href="#alpaca-radio-basic-disabled-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-radio-basic-disabled-source">
									<pre class="language-javascript"><code>// Disabled mode
$('#alpaca-radio-basic-disabled').alpaca({
    data: 'Jimi Hendrix',
    schema: {
        enum: ['Jimi Hendrix', 'Mark Knopfler', 'Joe Satriani', 'Eddie Van Halen', 'Orianthi']
    },
    options: {
        type: 'radio',
        label: 'Who is your favorite guitarist?',
        vertical: true,
        disabled: true
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
								<h6 class="card-title">Styled radios</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates radio button field with custom style added by Uniform plugin. Validation is enabled by default and requires proper options added to checkbox configuration. Supports all available input-specific options.</p>
								<div id="alpaca-radio-styled"></div>
								<a href="#alpaca-radio-styled-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-radio-styled-source">
									<pre class="language-javascript"><code>// Styled radios
$('#alpaca-radio-styled').alpaca({
    data: 'Jimi Hendrix',
    schema: {
        enum: ['Jimi Hendrix', 'Mark Knopfler', 'Joe Satriani', 'Eddie Van Halen', 'Orianthi']
    },
    options: {
        type: 'radio',
        label: 'Who is your favorite guitarist?',
        fieldClass: 'radio-styled-demo',
        vertical: true
    },
    postRender: function(control) {
        $('.radio-styled-demo').find('input[type=radio]').uniform({
            radioClass: 'choice'
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
								<h6 class="card-title">Disabled mode</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates styled radio button in disabled mode. Validation is enabled by default and requires proper options added to checkbox configuration. Supports all available input-specific options.</p>
								<div id="alpaca-radio-styled-disabled"></div>
								<a href="#alpaca-radio-styled-disabled-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-radio-styled-disabled-source">
									<pre class="language-javascript"><code>// Disabled mode
$('#alpaca-radio-styled-disabled').alpaca({
    data: 'Jimi Hendrix',
    schema: {
        enum: ['Jimi Hendrix', 'Mark Knopfler', 'Joe Satriani', 'Eddie Van Halen', 'Orianthi']
    },
    options: {
        type: 'radio',
        label: 'Who is your favorite guitarist?',
        vertical: true,
        fieldClass: 'radio-styled-disabled-demo',
        disabled: true
    },
    postRender: function(control) {
        $('.radio-styled-disabled-demo').find('input[type=radio]').uniform({
            radioClass: 'choice'
        });
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
								<h6 class="card-title">Required radios</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The following example demonstrates radio button with validation options and requirements. Validation engine automatically displays multiple notifications. To use, simply set <code>required</code> option to <code>true</code> in configuration.</p>
								<div id="alpaca-radio-required"></div>
								<a href="#alpaca-radio-required-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-radio-required-source">
									<pre class="language-javascript"><code>// Required radios
$('#alpaca-radio-required').alpaca({
    data: 'Coffee2',
    options: {
        label: 'Ice cream',
        helper: 'Guess my favorite ice cream?',
        optionLabels: ['Vanilla Flavor', 'Chocolate Flavor', 'Coffee Flavor']
    },
    schema: {
        required: true,
        enum: ['Vanilla', 'Chocolate', 'Coffee']
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Options</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">A radio field that uses the <code>removeDefaultNone</code> option to remove the option for the end user to select <code>None</code> from the list of available options. In addition, the <code>vertical</code> option is specified to inform the field to render vertically.</p>
								<div id="alpaca-radio-options"></div>
								<a href="#alpaca-radio-options-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-radio-options-source">
									<pre class="language-javascript"><code>// Options
$('#alpaca-radio-options').alpaca({
    data: 'Jimi Hendrix',
    schema: {
        enum: ['Jimi Hendrix', 'Mark Knopfler', 'Joe Satriani', 'Eddie Van Halen', 'Orianthi']
    },
    options: {
        type: 'radio',
        label: 'Who is your favorite guitarist?',
        removeDefaultNone: true,
        vertical: true
    }
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /radios -->


				<!-- Tokenfield -->
				<div class="mb-3 pt-2">
					<h6 class="mb-0 font-weight-semibold">
						Bootstrap Tokenfield
					</h6>
					<span class="text-muted d-block">Display tagged elements</span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Tokenfield</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">The <code>token</code> field. This provides an implementation of the Bootstrap TokenField plugin on top of a text field to allow for autocomplete and typeahead tokens in a comma (or alternative separator) delimited string.</p>
								<div id="alpaca-tokenfield"></div>
								<a href="#alpaca-tokenfield-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-tokenfield-source">
									<pre class="language-javascript"><code>// Basic setup
$('#alpaca-tokenfield').alpaca({
    schema: {
        title: 'Character Names',
        type: 'string'
    },
    options: {
        type: 'token',
        focus: false,
        tokenfield: {
            autocomplete: {
                source: ['marty', 'doc', 'george', 'biff', 'lorraine', 'mr. strickland'],
                delay: 100
            },
            showAutocompleteOnFocus: true
        }
    },
    data: 'marty,doc,george,biff'
});</code></pre>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Display only mode</h6>
								<div class="header-elements">
									<div class="list-icons">
				                		<a class="list-icons-item" data-action="collapse"></a>
				                		<a class="list-icons-item" data-action="reload"></a>
				                		<a class="list-icons-item" data-action="remove"></a>
				                	</div>
			                	</div>
							</div>
						
							<div class="card-body">
								<p class="mb-3">Here is a token field that lets you pick character first names from the movie Back to the Future, displayed in display-only mode. Tokenfield also supports jQuery UI's <code>autocomplete</code> extension as seen in previous demo.</p>
								<div id="alpaca-tokenfield-static"></div>
								<a href="#alpaca-tokenfield-static-source" data-toggle="collapse"><i class="icon-embed2 mr-2"></i> Show source code</a>
								<div class="collapse mt-2" id="alpaca-tokenfield-static-source">
									<pre class="language-javascript"><code>// Display only mode
$('#alpaca-tokenfield-static').alpaca({
    schema: {
        title: 'Character Names',
        type: 'string'
    },
    options: {
        type: 'token',
        focus: false,
        tokenfield: {
            autocomplete: {
                source: ['marty', 'doc', 'george', 'biff', 'lorraine', 'mr. strickland'],
                delay: 100
            },
            showAutocompleteOnFocus: true
        }
    },
    data: 'marty,doc,george,biff',
    view: 'bootstrap-display'
});</code></pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /tokenfield -->

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
