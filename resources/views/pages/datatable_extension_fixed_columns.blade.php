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
	<script src="../../../../global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="../../../../global_assets/js/plugins/tables/datatables/extensions/fixed_columns.min.js"></script>
	<script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="../../../../global_assets/js/demo_pages/datatables_extension_fixed_columns.js"></script>
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
						<h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Datatables</span> - Fixed Columns</h4>
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
							<a href="datatable_extension_fixed_columns" class="breadcrumb-item">Datatables</a>
							<span class="breadcrumb-item active">Fixed columns</span>
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

				<!-- Left fixed column -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Left fixed column</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						When displaying a table which scrolls along the <code>x-axis</code>, it can sometimes be useful to the end user for the left most column to be <code>fixed</code> in place, if it shows grouping, index or similar information. This is basically the same idea as <code>'freeze columns'</code> in Excel. This can be achieved with the <code>FixedColumns</code> plug-in for DataTables, as shown below.
					</div>

					<table class="table datatable-fixed-left" width="100%">
						<thead>
					        <tr>
					            <th>First name</th>
					            <th>Last name</th>
					            <th>Position</th>
					            <th>Office</th>
					            <th>Age</th>
					            <th>Start date</th>
					            <th>Salary</th>
					            <th>Extn.</th>
					            <th>E-mail</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>Tiger</td>
					            <td>Nixon</td>
					            <td>System Architect</td>
					            <td>Edinburgh</td>
					            <td>61</td>
					            <td>2011/04/25</td>
				                <td><span class="badge badge-info">$320,800</span></td>
					            <td>5421</td>
					            <td><a href="#">t.nixon@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Garrett</td>
					            <td>Winters</td>
					            <td>Accountant</td>
					            <td>Tokyo</td>
					            <td>63</td>
					            <td>2011/07/25</td>
				                <td><span class="badge badge-danger">$170,750</span></td>
					            <td>8422</td>
					            <td><a href="#">g.winters@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Ashton</td>
					            <td>Cox</td>
					            <td>Junior Technical Author</td>
					            <td>San Francisco</td>
					            <td>66</td>
					            <td>2009/01/12</td>
				                <td><span class="badge badge-secondary">$86,000</span></td>
					            <td>1562</td>
					            <td><a href="#">a.cox@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Cedric</td>
					            <td>Kelly</td>
					            <td>Senior Javascript Developer</td>
					            <td>Edinburgh</td>
					            <td>22</td>
					            <td>2012/03/29</td>
				                <td><span class="badge badge-success">$433,060</span></td>
					            <td>6224</td>
					            <td><a href="#">c.kelly@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Airi</td>
					            <td>Satou</td>
					            <td>Accountant</td>
					            <td>Tokyo</td>
					            <td>33</td>
					            <td>2008/11/28</td>
				                <td><span class="badge badge-danger">$162,700</span></td>
					            <td>5407</td>
					            <td><a href="#">a.satou@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Brielle</td>
					            <td>Williamson</td>
					            <td>Integration Specialist</td>
					            <td>New York</td>
					            <td>61</td>
					            <td>2012/12/02</td>
				                <td><span class="badge badge-info">$372,000</span></td>
					            <td>4804</td>
					            <td><a href="#">b.williamson@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Herrod</td>
					            <td>Chandler</td>
					            <td>Sales Assistant</td>
					            <td>San Francisco</td>
					            <td>59</td>
					            <td>2012/08/06</td>
				                <td><span class="badge badge-danger">$137,500</span></td>
					            <td>9608</td>
					            <td><a href="#">h.chandler@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Rhona</td>
					            <td>Davidson</td>
					            <td>Integration Specialist</td>
					            <td>Tokyo</td>
					            <td>55</td>
					            <td>2010/10/14</td>
				                <td><span class="badge badge-secondary">$97,900</span></td>
					            <td>6200</td>
					            <td><a href="#">r.davidson@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Colleen</td>
					            <td>Hurst</td>
					            <td>Javascript Developer</td>
					            <td>San Francisco</td>
					            <td>39</td>
					            <td>2009/09/15</td>
				                <td><span class="badge badge-success">$405,500</span></td>
					            <td>2360</td>
					            <td><a href="#">c.hurst@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Sonya</td>
					            <td>Frost</td>
					            <td>Software Engineer</td>
					            <td>Edinburgh</td>
					            <td>23</td>
					            <td>2008/12/13</td>
				                <td><span class="badge badge-danger">$103,600</span></td>
					            <td>1667</td>
					            <td><a href="#">s.frost@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Jena</td>
					            <td>Gaines</td>
					            <td>Office Manager</td>
					            <td>London</td>
					            <td>30</td>
					            <td>2008/12/19</td>
				                <td><span class="badge badge-secondary">$90,560</span></td>
					            <td>3814</td>
					            <td><a href="#">j.gaines@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Quinn</td>
					            <td>Flynn</td>
					            <td>Support Lead</td>
					            <td>Edinburgh</td>
					            <td>22</td>
					            <td>2013/03/03</td>
				                <td><span class="badge badge-info">$342,000</span></td>
					            <td>9497</td>
					            <td><a href="#">q.flynn@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Charde</td>
					            <td>Marshall</td>
					            <td>Regional Director</td>
					            <td>San Francisco</td>
					            <td>36</td>
					            <td>2008/10/16</td>
				                <td><span class="badge badge-success">$470,600</span></td>
					            <td>6741</td>
					            <td><a href="#">c.marshall@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Haley</td>
					            <td>Kennedy</td>
					            <td>Senior Marketing Designer</td>
					            <td>London</td>
					            <td>43</td>
					            <td>2012/12/18</td>
				                <td><span class="badge badge-danger">$113,500</span></td>
					            <td>3597</td>
					            <td><a href="#">h.kennedy@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Tatyana</td>
					            <td>Fitzpatrick</td>
					            <td>Regional Director</td>
					            <td>London</td>
					            <td>19</td>
					            <td>2010/03/17</td>
				                <td><span class="badge badge-info">$385,750</span></td>
					            <td>1965</td>
					            <td><a href="#">t.fitzpatrick@datatables.net</a></td>
					        </tr>
					    </tbody>
					</table>
				</div>
				<!-- /left fixed column -->


				<!-- Right fixed column -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Right fixed column</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						FixedColumns has the ability to freeze columns on both the left and right hand sides of the table. By default it will fix the first column on the left, but using the initialisation parameters <code>leftColumns</code> and <code>rightColumns</code> you can alter this to fix the columns on the right as well. This example shows a single column fixed in place, in this case the right most column.
					</div>

					<table class="table datatable-fixed-right" width="100%">
						<thead>
					        <tr>
					            <th>First name</th>
					            <th>Last name</th>
					            <th>Position</th>
					            <th>Office</th>
					            <th>Age</th>
					            <th>Start date</th>
					            <th>Salary</th>
					            <th>Extn.</th>
					            <th>E-mail</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>Tiger</td>
					            <td>Nixon</td>
					            <td>System Architect</td>
					            <td>Edinburgh</td>
					            <td>61</td>
					            <td>2011/04/25</td>
				                <td><span class="badge badge-info">$320,800</span></td>
					            <td>5421</td>
					            <td><a href="#">t.nixon@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Garrett</td>
					            <td>Winters</td>
					            <td>Accountant</td>
					            <td>Tokyo</td>
					            <td>63</td>
					            <td>2011/07/25</td>
				                <td><span class="badge badge-danger">$170,750</span></td>
					            <td>8422</td>
					            <td><a href="#">g.winters@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Ashton</td>
					            <td>Cox</td>
					            <td>Junior Technical Author</td>
					            <td>San Francisco</td>
					            <td>66</td>
					            <td>2009/01/12</td>
				                <td><span class="badge badge-secondary">$86,000</span></td>
					            <td>1562</td>
					            <td><a href="#">a.cox@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Cedric</td>
					            <td>Kelly</td>
					            <td>Senior Javascript Developer</td>
					            <td>Edinburgh</td>
					            <td>22</td>
					            <td>2012/03/29</td>
				                <td><span class="badge badge-success">$433,060</span></td>
					            <td>6224</td>
					            <td><a href="#">c.kelly@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Airi</td>
					            <td>Satou</td>
					            <td>Accountant</td>
					            <td>Tokyo</td>
					            <td>33</td>
					            <td>2008/11/28</td>
				                <td><span class="badge badge-danger">$162,700</span></td>
					            <td>5407</td>
					            <td><a href="#">a.satou@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Brielle</td>
					            <td>Williamson</td>
					            <td>Integration Specialist</td>
					            <td>New York</td>
					            <td>61</td>
					            <td>2012/12/02</td>
				                <td><span class="badge badge-info">$372,000</span></td>
					            <td>4804</td>
					            <td><a href="#">b.williamson@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Herrod</td>
					            <td>Chandler</td>
					            <td>Sales Assistant</td>
					            <td>San Francisco</td>
					            <td>59</td>
					            <td>2012/08/06</td>
				                <td><span class="badge badge-danger">$137,500</span></td>
					            <td>9608</td>
					            <td><a href="#">h.chandler@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Rhona</td>
					            <td>Davidson</td>
					            <td>Integration Specialist</td>
					            <td>Tokyo</td>
					            <td>55</td>
					            <td>2010/10/14</td>
				                <td><span class="badge badge-secondary">$97,900</span></td>
					            <td>6200</td>
					            <td><a href="#">r.davidson@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Colleen</td>
					            <td>Hurst</td>
					            <td>Javascript Developer</td>
					            <td>San Francisco</td>
					            <td>39</td>
					            <td>2009/09/15</td>
				                <td><span class="badge badge-success">$405,500</span></td>
					            <td>2360</td>
					            <td><a href="#">c.hurst@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Sonya</td>
					            <td>Frost</td>
					            <td>Software Engineer</td>
					            <td>Edinburgh</td>
					            <td>23</td>
					            <td>2008/12/13</td>
				                <td><span class="badge badge-danger">$103,600</span></td>
					            <td>1667</td>
					            <td><a href="#">s.frost@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Jena</td>
					            <td>Gaines</td>
					            <td>Office Manager</td>
					            <td>London</td>
					            <td>30</td>
					            <td>2008/12/19</td>
				                <td><span class="badge badge-secondary">$90,560</span></td>
					            <td>3814</td>
					            <td><a href="#">j.gaines@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Quinn</td>
					            <td>Flynn</td>
					            <td>Support Lead</td>
					            <td>Edinburgh</td>
					            <td>22</td>
					            <td>2013/03/03</td>
				                <td><span class="badge badge-info">$342,000</span></td>
					            <td>9497</td>
					            <td><a href="#">q.flynn@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Charde</td>
					            <td>Marshall</td>
					            <td>Regional Director</td>
					            <td>San Francisco</td>
					            <td>36</td>
					            <td>2008/10/16</td>
				                <td><span class="badge badge-success">$470,600</span></td>
					            <td>6741</td>
					            <td><a href="#">c.marshall@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Haley</td>
					            <td>Kennedy</td>
					            <td>Senior Marketing Designer</td>
					            <td>London</td>
					            <td>43</td>
					            <td>2012/12/18</td>
				                <td><span class="badge badge-danger">$113,500</span></td>
					            <td>3597</td>
					            <td><a href="#">h.kennedy@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Tatyana</td>
					            <td>Fitzpatrick</td>
					            <td>Regional Director</td>
					            <td>London</td>
					            <td>19</td>
					            <td>2010/03/17</td>
				                <td><span class="badge badge-info">$385,750</span></td>
					            <td>1965</td>
					            <td><a href="#">t.fitzpatrick@datatables.net</a></td>
					        </tr>
					    </tbody>
					</table>
				</div>
				<!-- /right fixed column -->


				<!-- Multiple fixed columns -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Multiple fixed columns</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						FixedColumns allows columns to be fixed from both the left and right hand sides of the table. Fixing right hand-side columns is done by using the <code>rightColumns</code> initialisation parameter, which works just the same as <code>leftColumns</code> does for the left side of the table. This example shows both the left and right columns being fixed in place.
					</div>

					<table class="table datatable-fixed-both" width="100%">
						<thead>
					        <tr>
					            <th>First name</th>
					            <th>Last name</th>
					            <th>Position</th>
					            <th>Office</th>
					            <th>Age</th>
					            <th>Start date</th>
					            <th>Salary</th>
					            <th>Extn.</th>
					            <th>E-mail</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>Tiger</td>
					            <td>Nixon</td>
					            <td>System Architect</td>
					            <td>Edinburgh</td>
					            <td>61</td>
					            <td>2011/04/25</td>
				                <td><span class="badge badge-info">$320,800</span></td>
					            <td>5421</td>
					            <td><a href="#">t.nixon@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Garrett</td>
					            <td>Winters</td>
					            <td>Accountant</td>
					            <td>Tokyo</td>
					            <td>63</td>
					            <td>2011/07/25</td>
				                <td><span class="badge badge-danger">$170,750</span></td>
					            <td>8422</td>
					            <td><a href="#">g.winters@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Ashton</td>
					            <td>Cox</td>
					            <td>Junior Technical Author</td>
					            <td>San Francisco</td>
					            <td>66</td>
					            <td>2009/01/12</td>
				                <td><span class="badge badge-secondary">$86,000</span></td>
					            <td>1562</td>
					            <td><a href="#">a.cox@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Cedric</td>
					            <td>Kelly</td>
					            <td>Senior Javascript Developer</td>
					            <td>Edinburgh</td>
					            <td>22</td>
					            <td>2012/03/29</td>
				                <td><span class="badge badge-success">$433,060</span></td>
					            <td>6224</td>
					            <td><a href="#">c.kelly@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Airi</td>
					            <td>Satou</td>
					            <td>Accountant</td>
					            <td>Tokyo</td>
					            <td>33</td>
					            <td>2008/11/28</td>
				                <td><span class="badge badge-danger">$162,700</span></td>
					            <td>5407</td>
					            <td><a href="#">a.satou@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Brielle</td>
					            <td>Williamson</td>
					            <td>Integration Specialist</td>
					            <td>New York</td>
					            <td>61</td>
					            <td>2012/12/02</td>
				                <td><span class="badge badge-info">$372,000</span></td>
					            <td>4804</td>
					            <td><a href="#">b.williamson@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Herrod</td>
					            <td>Chandler</td>
					            <td>Sales Assistant</td>
					            <td>San Francisco</td>
					            <td>59</td>
					            <td>2012/08/06</td>
				                <td><span class="badge badge-danger">$137,500</span></td>
					            <td>9608</td>
					            <td><a href="#">h.chandler@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Rhona</td>
					            <td>Davidson</td>
					            <td>Integration Specialist</td>
					            <td>Tokyo</td>
					            <td>55</td>
					            <td>2010/10/14</td>
				                <td><span class="badge badge-secondary">$97,900</span></td>
					            <td>6200</td>
					            <td><a href="#">r.davidson@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Colleen</td>
					            <td>Hurst</td>
					            <td>Javascript Developer</td>
					            <td>San Francisco</td>
					            <td>39</td>
					            <td>2009/09/15</td>
				                <td><span class="badge badge-success">$405,500</span></td>
					            <td>2360</td>
					            <td><a href="#">c.hurst@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Sonya</td>
					            <td>Frost</td>
					            <td>Software Engineer</td>
					            <td>Edinburgh</td>
					            <td>23</td>
					            <td>2008/12/13</td>
				                <td><span class="badge badge-danger">$103,600</span></td>
					            <td>1667</td>
					            <td><a href="#">s.frost@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Jena</td>
					            <td>Gaines</td>
					            <td>Office Manager</td>
					            <td>London</td>
					            <td>30</td>
					            <td>2008/12/19</td>
				                <td><span class="badge badge-secondary">$90,560</span></td>
					            <td>3814</td>
					            <td><a href="#">j.gaines@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Quinn</td>
					            <td>Flynn</td>
					            <td>Support Lead</td>
					            <td>Edinburgh</td>
					            <td>22</td>
					            <td>2013/03/03</td>
				                <td><span class="badge badge-info">$342,000</span></td>
					            <td>9497</td>
					            <td><a href="#">q.flynn@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Charde</td>
					            <td>Marshall</td>
					            <td>Regional Director</td>
					            <td>San Francisco</td>
					            <td>36</td>
					            <td>2008/10/16</td>
				                <td><span class="badge badge-success">$470,600</span></td>
					            <td>6741</td>
					            <td><a href="#">c.marshall@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Haley</td>
					            <td>Kennedy</td>
					            <td>Senior Marketing Designer</td>
					            <td>London</td>
					            <td>43</td>
					            <td>2012/12/18</td>
				                <td><span class="badge badge-danger">$113,500</span></td>
					            <td>3597</td>
					            <td><a href="#">h.kennedy@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Tatyana</td>
					            <td>Fitzpatrick</td>
					            <td>Regional Director</td>
					            <td>London</td>
					            <td>19</td>
					            <td>2010/03/17</td>
				                <td><span class="badge badge-info">$385,750</span></td>
					            <td>1965</td>
					            <td><a href="#">t.fitzpatrick@datatables.net</a></td>
					        </tr>
					    </tbody>
					</table>
				</div>
				<!-- /multiple fixed columns -->


				<!-- Complex headers example -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Complex headers</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						If you are using multiple rows in the table header, it can be useful to have a <code>rowspanning</code> cell on the column(s) you have fixed in place - equally at other times it can be useful to not and make use of the two or more cells per column. FixedColumns builds on the complex header support in DataTables to make this trivial to use in FixedColumns. Just initialise your <code>FixedColumns</code> instance as you normally would!
					</div>

					<table class="table datatable-fixed-complex">
						<thead>
							<tr>
		                        <th rowspan="2">Name</th>
		                        <th colspan="4">HR Information</th>
		                        <th colspan="4">Details</th>
		                    </tr>
					        <tr>
					        	<th>Username</th>
					            <th>Position</th>
					            <th>Office</th>
					            <th>Age</th>
					            <th>Start date</th>
					            <th>Salary</th>
					            <th>Extn.</th>
					            <th>E-mail</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>Tiger</td>
					            <td>Nixon</td>
					            <td>System Architect</td>
					            <td>Edinburgh</td>
					            <td>61</td>
					            <td>2011/04/25</td>
				                <td><span class="badge badge-info">$320,800</span></td>
					            <td>5421</td>
					            <td><a href="#">t.nixon@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Garrett</td>
					            <td>Winters</td>
					            <td>Accountant</td>
					            <td>Tokyo</td>
					            <td>63</td>
					            <td>2011/07/25</td>
				                <td><span class="badge badge-danger">$170,750</span></td>
					            <td>8422</td>
					            <td><a href="#">g.winters@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Ashton</td>
					            <td>Cox</td>
					            <td>Junior Technical Author</td>
					            <td>San Francisco</td>
					            <td>66</td>
					            <td>2009/01/12</td>
				                <td><span class="badge badge-secondary">$86,000</span></td>
					            <td>1562</td>
					            <td><a href="#">a.cox@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Cedric</td>
					            <td>Kelly</td>
					            <td>Senior Javascript Developer</td>
					            <td>Edinburgh</td>
					            <td>22</td>
					            <td>2012/03/29</td>
				                <td><span class="badge badge-success">$433,060</span></td>
					            <td>6224</td>
					            <td><a href="#">c.kelly@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Airi</td>
					            <td>Satou</td>
					            <td>Accountant</td>
					            <td>Tokyo</td>
					            <td>33</td>
					            <td>2008/11/28</td>
				                <td><span class="badge badge-danger">$162,700</span></td>
					            <td>5407</td>
					            <td><a href="#">a.satou@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Brielle</td>
					            <td>Williamson</td>
					            <td>Integration Specialist</td>
					            <td>New York</td>
					            <td>61</td>
					            <td>2012/12/02</td>
				                <td><span class="badge badge-info">$372,000</span></td>
					            <td>4804</td>
					            <td><a href="#">b.williamson@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Herrod</td>
					            <td>Chandler</td>
					            <td>Sales Assistant</td>
					            <td>San Francisco</td>
					            <td>59</td>
					            <td>2012/08/06</td>
				                <td><span class="badge badge-danger">$137,500</span></td>
					            <td>9608</td>
					            <td><a href="#">h.chandler@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Rhona</td>
					            <td>Davidson</td>
					            <td>Integration Specialist</td>
					            <td>Tokyo</td>
					            <td>55</td>
					            <td>2010/10/14</td>
				                <td><span class="badge badge-secondary">$97,900</span></td>
					            <td>6200</td>
					            <td><a href="#">r.davidson@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Colleen</td>
					            <td>Hurst</td>
					            <td>Javascript Developer</td>
					            <td>San Francisco</td>
					            <td>39</td>
					            <td>2009/09/15</td>
				                <td><span class="badge badge-success">$405,500</span></td>
					            <td>2360</td>
					            <td><a href="#">c.hurst@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Sonya</td>
					            <td>Frost</td>
					            <td>Software Engineer</td>
					            <td>Edinburgh</td>
					            <td>23</td>
					            <td>2008/12/13</td>
				                <td><span class="badge badge-danger">$103,600</span></td>
					            <td>1667</td>
					            <td><a href="#">s.frost@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Jena</td>
					            <td>Gaines</td>
					            <td>Office Manager</td>
					            <td>London</td>
					            <td>30</td>
					            <td>2008/12/19</td>
				                <td><span class="badge badge-secondary">$90,560</span></td>
					            <td>3814</td>
					            <td><a href="#">j.gaines@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Quinn</td>
					            <td>Flynn</td>
					            <td>Support Lead</td>
					            <td>Edinburgh</td>
					            <td>22</td>
					            <td>2013/03/03</td>
				                <td><span class="badge badge-info">$342,000</span></td>
					            <td>9497</td>
					            <td><a href="#">q.flynn@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Charde</td>
					            <td>Marshall</td>
					            <td>Regional Director</td>
					            <td>San Francisco</td>
					            <td>36</td>
					            <td>2008/10/16</td>
				                <td><span class="badge badge-success">$470,600</span></td>
					            <td>6741</td>
					            <td><a href="#">c.marshall@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Haley</td>
					            <td>Kennedy</td>
					            <td>Senior Marketing Designer</td>
					            <td>London</td>
					            <td>43</td>
					            <td>2012/12/18</td>
				                <td><span class="badge badge-danger">$113,500</span></td>
					            <td>3597</td>
					            <td><a href="#">h.kennedy@datatables.net</a></td>
					        </tr>
					        <tr>
					            <td>Tatyana</td>
					            <td>Fitzpatrick</td>
					            <td>Regional Director</td>
					            <td>London</td>
					            <td>19</td>
					            <td>2010/03/17</td>
				                <td><span class="badge badge-info">$385,750</span></td>
					            <td>1965</td>
					            <td><a href="#">t.fitzpatrick@datatables.net</a></td>
					        </tr>
					    </tbody>
					</table>
				</div>
				<!-- /complex headers example -->

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
