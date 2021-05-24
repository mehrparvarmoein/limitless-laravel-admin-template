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
	<script src="../../../../global_assets/js/plugins/editors/ace/ace.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/editor_code.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Editors</span> - Code</h4>
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
							<a href="editor_code" class="breadcrumb-item">Editors</a>
							<span class="breadcrumb-item active">Code</span>
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

				<!-- Ace code editor -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Ace code editor</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Ace is an embeddable code editor written in JavaScript. It matches the features and performance of native editors such as Sublime, Vim and TextMate. It can be easily embedded in any web page and JavaScript application. Ace is maintained as the primary editor for Cloud9 IDE and is the successor of the Mozilla Skywriter (Bespin) project.</p>

						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<p><span class="font-weight-semibold">Javascript</span> mode</p>
									<pre id="javascript_editor" data-fouc>
/**
 * In fact, you're looking at ACE right now. Go ahead and play with it!
 *
 * We are currently showing off the JavaScript mode. ACE has support for 45
 * language modes and 24 color themes!
 */

function add(x, y) {
    var resultString = "Hello, ACE! The result of your math is: ";
    var result = x + y;
    return resultString + result;
}

var addResult = add(3, 2);
console.log(addResult);
									</pre>
								</div>

								<div class="mb-3">
									<p><span class="font-weight-semibold">CSS</span> mode</p>
									<pre id="css_editor" data-fouc>
.text-layer {
    font-family: Monaco, "Courier New", monospace;
    font-size: 12pX;
    cursor: text;
}

.blinker {
    animation-duration: 1s;
    animation-name: blink;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-timing-function: linear;
}

@keyframes blink {
    0% {
        opacity: 0;
    }
    40% {
        opacity: 0;
    }
    40.5% {
        opacity: 1
    }
    100% {
        opacity: 1
    }
}
									</pre>
								</div>

								<div class="mb-3">
									<p><span class="font-weight-semibold">LESS</span> mode</p>
									<pre id="less_editor" data-fouc>
/* styles.less */

@base: #f938ab;

.box-shadow(@style, @c) when (iscolor(@c)) {
    box-shadow:         @style @c;
    -webkit-box-shadow: @style @c;
    -moz-box-shadow:    @style @c;
}
.box-shadow(@style, @alpha: 50%) when (isnumber(@alpha)) {
    .box-shadow(@style, rgba(0, 0, 0, @alpha));
}

// Box styles
.box { 
    color: saturate(@base, 5%);
    border-color: lighten(@base, 30%);
    
    div { .box-shadow(0 0 5px, 30%) }
  
    a {
        color: @base;
        
        &amp;:hover {
            color: lighten(@base, 50%);
        }
    }
}
									</pre>
								</div>

								<div class="mb-3">
									<p><span class="font-weight-semibold">Ruby</span> mode</p>
									<pre id="ruby_editor" data-fouc>
#!/usr/bin/ruby

# Program to find the factorial of a number
def fact(n)
    if n == 0
        1
    else
        n * fact(n-1)
    end
end

puts fact(ARGV[0].to_i)

class Range
  def to_json(*a)
    {
      'json_class'   => self.class.name, # = 'Range'
      'data'         => [ first, last, exclude_end? ]
    }.to_json(*a)
  end
end

{:id => 34, :key => "value"}


    herDocs = [&lt;&lt;'FOO', &lt;&lt;BAR, &lt;&lt;-BAZ, &lt;&lt;-`EXEC`] #comment
  FOO #{literal}
FOO
  BAR #{fact(10)}
BAR
  BAZ indented
    BAZ
        echo hi
    EXEC
puts herDocs
									</pre>
								</div>


								<div class="mb-3">
									<p><span class="font-weight-semibold">Coffee</span> mode</p>
									<pre id="coffee_editor" data-fouc>
#!/usr/bin/env coffee

try
    throw URIError decodeURI(0xC0ffee * 123456.7e-8 / .9)
catch e
    console.log 'qstring' + "qqstring" + '''
        qdoc
    ''' + """
        qqdoc
    """

do ->
    ###
    herecommend
    ###
    re = /regex/imgy.test ///
        heregex  # comment
    ///imgy
    this isnt: `just JavaScript`
    undefined
    
sentence = "#{ 22 / 7 } is a decent approximation of π"
									</pre>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-3">
									<p><span class="font-weight-semibold">HTML</span> mode</p>
									<pre id="html_editor" data-fouc>
&lt;!-- Default panel -->
&lt;div class="panel panel-default">
	&lt;div class="panel-heading">
		&lt;h5 class="panel-title">
			Trumbowyg
			&lt;span class="font-weight-semibold">Default&lt;/span>
			&lt;small>Full featured toolbar&lt;/small>
		&lt;/h5>
		
    	&lt;ul class="panel-heading-icons">
    		&lt;li>&lt;a href="#" data-panel="collapse">&lt;i class="icon-arrow-down2">&lt;/i>&lt;/a>&lt;/li>
    		&lt;li>&lt;a href="#" data-panel="reload">&lt;i class="icon-reload">&lt;/i>&lt;/a>&lt;/li>
    		&lt;li>&lt;a href="#" data-panel="move">&lt;i class="icon-move">&lt;/i>&lt;/a>&lt;/li>
    		&lt;li>&lt;a href="#" data-panel="close">&lt;i class="icon-close">&lt;/i>&lt;/a>&lt;/li>
    	&lt;/ul>
	&lt;/div>

	&lt;div class="panel-body">
		Panel body
	&lt;/div>
&lt;/div>
&lt;!-- /default panel -->
									</pre>
								</div>

								<div class="mb-3">
									<p><span class="font-weight-semibold">JSON</span> mode</p>
									<pre id="json_editor" data-fouc>
{
 "query": {
  "count": 10,
  "created": "2011-06-21T08:10:46Z",
  "lang": "en-US",
  "results": {
   "photo": [
    {
     "farm": "6",
     "id": "5855620975",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "32021554@N04",
     "secret": "f1f5e8515d",
     "server": "5110",
     "title": "7087 bandit cat"
    },
    {
     "farm": "4",
     "id": "5856170534",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "32021554@N04",
     "secret": "ff1efb2a6f",
     "server": "3217",
     "title": "6975 rusty cat"
    },
    {
     "farm": "6",
     "id": "5856172972",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "51249875@N03",
     "secret": "6c6887347c",
     "server": "5192",
     "title": "watermarked-cats"
    }
   ]
  }
 }
}
									</pre>
								</div>

								<div class="mb-3">
									<p><span class="font-weight-semibold">PHP</span> mode</p>
									<pre id="php_editor" data-fouc>
&lt;?php

function nfact($n) {
    if ($n == 0) {
        return 1;
    }
    else {
        return $n * nfact($n - 1);
    }
}

echo "\n\nPlease enter a whole number ... ";
$num = trim(fgets(STDIN));

// ===== PROCESS - Determing the factorial of the input number =====
$output = "\n\nFactorial " . $num . " = " . nfact($num) . "\n\n";
echo $output;

?>
									</pre>
								</div>

								<div class="mb-3">
									<p><span class="font-weight-semibold">SASS</span> mode</p>
									<pre id="sass_editor" data-fouc>
// sass ace mode;

@import url(http://fonts.googleapis.com/css?family=Ace:700)

html, body
  :background-color #ace
  text-align: center
  height: 100%
  /*;*********;
    ;comment  ;
    ;*********;

.toggle
  $size: 14px

  :background url(http://subtlepatterns.com/patterns/dark_stripes.png)
  border-radius: 8px
  height: $size

  &amp;:before
    $radius: $size * 0.845
    $glow: $size * 0.125

    box-shadow: 0 0 $glow $glow / 2 #fff
    border-radius: $radius
    
    &amp;:active
      ~ .button
        box-shadow: 0 15px 25px -4px rgba(0,0,0,0.4)      
      ~ .label
        font-size: 40px
        color: rgba(0,0,0,0.45)

    &amp;:checked      
      ~ .button
        box-shadow: 0 15px 25px -4px #ace
      ~ .label
        font-size: 40px
        color: #c9c9c9
									</pre>
								</div>


								<div class="mb-3">
									<p><span class="font-weight-semibold">Handlebars</span> mode</p>
									<pre id="handlebars_editor" data-fouc>
{{!-- Ace + :-}} --}}

&lt;div id="comments">
  {{#each comments}}
  &lt;h2>&lt;a href="/posts/{{../permalink}}#{{id}}">{{title}}&lt;/a>&lt;/h2>
  &lt;div>{{body}}&lt;/div>
  {{/each}}
&lt;/div>
									</pre>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ace code editor -->

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
