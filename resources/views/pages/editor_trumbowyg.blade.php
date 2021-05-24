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
	<script src="../../../../global_assets/js/plugins/editors/trumbowyg/trumbowyg.min.js"></script>
	<script src="../../../../global_assets/js/plugins/editors/trumbowyg/plugins/base64/trumbowyg.base64.min.js"></script>
	<script src="../../../../global_assets/js/plugins/editors/trumbowyg/plugins/cleanpaste/trumbowyg.cleanpaste.min.js"></script>
	<script src="../../../../global_assets/js/plugins/editors/trumbowyg/plugins/colors/trumbowyg.colors.min.js"></script>
	<script src="../../../../global_assets/js/plugins/editors/trumbowyg/plugins/insertaudio/trumbowyg.insertaudio.min.js"></script>
	<script src="../../../../global_assets/js/plugins/editors/trumbowyg/plugins/noembed/trumbowyg.noembed.min.js"></script>
	<script src="../../../../global_assets/js/plugins/editors/trumbowyg/plugins/preformatted/trumbowyg.preformatted.min.js"></script>
	<script src="../../../../global_assets/js/plugins/editors/trumbowyg/plugins/template/trumbowyg.template.min.js"></script>
	<script src="../../../../global_assets/js/plugins/editors/trumbowyg/plugins/upload/trumbowyg.upload.min.js"></script>
	<script src="../../../../global_assets/js/plugins/editors/trumbowyg/plugins/pasteimage/trumbowyg.pasteimage.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/editor_trumbowyg.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Editors</span> - Trumbowyg</h4>
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
							<a href="editor_trumbowyg" class="breadcrumb-item">Editors</a>
							<span class="breadcrumb-item active">Trumbowyg</span>
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

				<!-- Basic initialization -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Default initialization</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Trumbowyg is a light, translatable and customisable jQuery plugin. Options and design are entirely configurable to suit your needs. However, the default design is compatible with Retina display and optimized for a great and simple user experience. No useless features, just the necessary ones to generate clean, semantic code.</p>
						<form action="#">
							<div class="mb-3">
								<div id="trumbowyg_default">
									<h2>Apollo 11</h2>
									<div class="float-right" style="margin-left: 20px;"><img alt="Saturn V carrying Apollo 11" class="right" src="http://c.cksource.com/a/1/img/sample.jpg"></div>

									<p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="#">Neil Armstrong</a> and <a href="#">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>

									<p class="mb-3">Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="#">Michael Collins</a>, piloted the <a href="#">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>

									<h5 class="font-weight-semibold">Technical details</h5>
									<p>Launched by a <strong>Saturn V</strong> rocket from <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
									<ol>
										<li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
										<li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
										<li><strong>Lunar Module</strong> for landing on the Moon.</li>
									</ol>
									<p class="mb-3">After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="#">Pacific Ocean</a> on July 24.</p>

									<h5 class="font-weight-semibold">Mission crew</h5>

									<div class="card card-table table-responsive shadow-0">
										<table class="table table-bordered" style="width: 100%">
											<thead>
												<tr>
													<th>Position</th>
													<th>Astronaut</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Commander</td>
													<td>Neil A. Armstrong</td>
												</tr>
												<tr>
													<td>Command Module Pilot</td>
													<td>Michael Collins</td>
												</tr>
												<tr>
													<td>Lunar Module Pilot</td>
													<td>Edwin "Buzz" E. Aldrin, Jr.</td>
												</tr>
											</tbody>
										</table>
									</div>

									Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a>
					            </div>
				            </div>

				            <div class="text-right">
					            <button type="submit" class="btn bg-teal-400">Save changes <i class="icon-paperplane ml-2"></i></button>
				            </div>
			            </form>
					</div>
				</div>
				<!-- /basic initialization -->


				<!-- Custom toolbar -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Custom toolbar</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Trumbowyg allows you to choose the buttons that appears in the button pane. The <code>btns</code> option is an array containing string values representing the buttons or vertical separators (using the pipe character). To create your own custom button pane, define an array and pass it to the <code>btns</code> option.</p>
						<form action="#">
							<div class="mb-3">
								<div id="trumbowyg_custom">
									<h2>Apollo 11</h2>
									<div class="float-right" style="margin-left: 20px;"><img alt="Saturn V carrying Apollo 11" class="right" src="http://c.cksource.com/a/1/img/sample.jpg"></div>

									<p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="#">Neil Armstrong</a> and <a href="#">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>

									<p class="mb-3">Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="#">Michael Collins</a>, piloted the <a href="#">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>

									<h5 class="font-weight-semibold">Technical details</h5>
									<p>Launched by a <strong>Saturn V</strong> rocket from <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
									<ol>
										<li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
										<li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
										<li><strong>Lunar Module</strong> for landing on the Moon.</li>
									</ol>
									<p class="mb-3">After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="#">Pacific Ocean</a> on July 24.</p>

									<h5 class="font-weight-semibold">Mission crew</h5>

									<div class="card card-table table-responsive shadow-0">
										<table class="table table-bordered" style="width: 100%">
											<thead>
												<tr>
													<th>Position</th>
													<th>Astronaut</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Commander</td>
													<td>Neil A. Armstrong</td>
												</tr>
												<tr>
													<td>Command Module Pilot</td>
													<td>Michael Collins</td>
												</tr>
												<tr>
													<td>Lunar Module Pilot</td>
													<td>Edwin "Buzz" E. Aldrin, Jr.</td>
												</tr>
											</tbody>
										</table>
									</div>

									Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a>
					            </div>
				            </div>

				            <div class="text-right">
					            <button type="submit" class="btn bg-teal-400">Save changes <i class="icon-paperplane ml-2"></i></button>
				            </div>
			            </form>
					</div>
				</div>
				<!-- /custom toolbar -->


				<!-- Additional plugins -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Additional plugins</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<p class="mb-3">Trumbowyg editor comes with 10 optional plugins: <strong>base64</strong> - allows you to insert images inline as base64; <strong>clean paste</strong> - cleans up the HTML code before insert content into the editor; <strong>colors</strong> - adds foreground and background color selectors; <strong>emoji</strong> - allows you to insert some emojis in your editor; <strong>insert audio</strong> - inserts audio files; <strong>noembed</strong> - embed any content from a link; <strong>paste image</strong> - handles paste events; <strong>preformatted</strong> - wraps selected content in pre tag; <strong>template</strong> - manages custom HTML templates; <strong>upload</strong> - adds an upload front-end allowing users to upload an image with progress bar.</p>
						<form action="#">
							<div class="mb-3">
								<div id="trumbowyg_plugins">
									<h2>Apollo 11</h2>
									<div class="float-right" style="margin-left: 20px;"><img alt="Saturn V carrying Apollo 11" class="right" src="http://c.cksource.com/a/1/img/sample.jpg"></div>

									<p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="#">Neil Armstrong</a> and <a href="#">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>

									<p class="mb-3">Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="#">Michael Collins</a>, piloted the <a href="#">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>

									<h5 class="font-weight-semibold">Technical details</h5>
									<p>Launched by a <strong>Saturn V</strong> rocket from <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
									<ol>
										<li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
										<li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
										<li><strong>Lunar Module</strong> for landing on the Moon.</li>
									</ol>
									<p class="mb-3">After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="#">Pacific Ocean</a> on July 24.</p>

									<h5 class="font-weight-semibold">Mission crew</h5>

									<div class="card card-table table-responsive shadow-0">
										<table class="table table-bordered" style="width: 100%">
											<thead>
												<tr>
													<th>Position</th>
													<th>Astronaut</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Commander</td>
													<td>Neil A. Armstrong</td>
												</tr>
												<tr>
													<td>Command Module Pilot</td>
													<td>Michael Collins</td>
												</tr>
												<tr>
													<td>Lunar Module Pilot</td>
													<td>Edwin "Buzz" E. Aldrin, Jr.</td>
												</tr>
											</tbody>
										</table>
									</div>

									Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a>
					            </div>
				            </div>

				            <div class="text-right">
					            <button type="submit" class="btn bg-teal-400">Save changes <i class="icon-paperplane ml-2"></i></button>
				            </div>
			            </form>
					</div>
				</div>
				<!-- /additional plugins -->

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
