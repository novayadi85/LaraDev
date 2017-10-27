<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$title}</title>
		<link href="{{asset('css/system.css')}}" rel="stylesheet">
		<link href="{{asset('css/dewatasoft.css')}}" rel="stylesheet"  type="text/css" />
		<link href="{{asset('css/style.css')}}" rel="stylesheet"  type="text/css" />
		<link href="{{asset('css/animate.css')}}" rel="stylesheet"  type="text/css" />
	</head>
    <body class=" skin-blue">
		<!-- header logo: style can be found in header.less -->
		<header class="header">
			<a href="http://localhost.com/bookingsystem/administrator" class="logo">
				<!-- Add the class icon to your logo image or logo icon to add the margining -->
				Dewatasoft
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="navbar-right">
								<ul class="nav navbar-nav">
						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="glyphicon glyphicon-user"></i>
								<span>  <i class="caret"></i></span>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header bg-red-apache">
									<img src="http://localhost.com/bookingsystem/assets/themes/backend/img/logo.png" class="img-circle" alt="User Image" />
									<p>
										<span> </span>
										<!-- <small>Member since January , 1970</small> -->
									</p>
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										<a href="http://localhost.com/bookingsystem/administrator/users/myaccount/TWNDNFoxQit0M3FicG9ad3ROQzZEZz09" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="http://localhost.com/bookingsystem/administrator/logout" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>		
		<div class="wrapper row-offcanvas row-offcanvas-left">
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="left-side sidebar-offcanvas">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
									<li class=""><a href="http://localhost.com/bookingsystem/administrator/"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li><li class=""><a href="http://localhost.com/bookingsystem/administrator/users/"><i class="fa fa-user"></i><span>Pengguna</span></a></li><li class=""><a href="http://localhost.com/bookingsystem/administrator/generator"><i class="fa fa-cogs"></i><span>Generator</span></a></li><li class="treeview"><a href="#"><i class="fa fa-hotel"></i><span>Properties</span><i class="fa fa-angle-left pull-right"></i></a><ul class="treeview-menu "><li class=""><a href="http://localhost.com/bookingsystem/administrator/properties/">Villa</a></li><li class=""><a href="http://localhost.com/bookingsystem/administrator/rooms/">Rooms</a></li><li class=""><a href="http://localhost.com/bookingsystem/administrator/bookings/">Bookings</a></li></ul></li>		</ul>
				</section>
				<!-- /.sidebar -->
			</aside>			
				<!-- Right side column. Contains the navbar and content of the page -->
			<aside class="right-side">
				<section class="content-header">
					<h1>
						Dashboard		</h1>
					<ol class="breadcrumb">
						<span class="first_crumb current">Dashboard</span><li><a href="http://localhost.com/bookingsystem/administrator/"></a><span class="divider"></span></li><li class="active"><span class="current">Dashboard</span></li>		</ol>
				</section>
				<section class="content">
					 @yield('content')
				</section>
			</aside>		
		</div>
				
		<script src="{{asset('js/system.js')}}"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/backend.v.0.3/js/modernizr-custom.js"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/backend.v.0.3/js/alertify.js"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/backend.v.0.3/js/jquery.form.js"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/backend.v.0.3/js/jquery.highlight.js"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/backend.v.0.3/js/plugins/dataTables/jquery.dataTables.js"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/backend.v.0.3/js/plugins/dataTables/zjs.utils.js"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/backend.v.0.3/js/plugins/dataTables/dataTables.bootstrap.js"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/backend.v.0.3/js/plugins/dataTables/dataTables.responsive.js"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/backend.v.0.3/js/plugins/dataTables/dataTables.tableTools.min.js"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/backend.v.0.3/js/plugins/dataTables/dataTables.search.js"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/backend.v.0.3/js/plugins/dataTables/jquery.dataTables.delay.min.js"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/backend.v.0.3/js/plugins/dataTables/dataTables.searchHighlight.min.js"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/booking/plugin/daterangepicker/js/moment-with-locales.js"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/booking/plugin/daterangepicker/js/bootstrap-datepicker.min.js"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/backend/js/app.js"></script>
		<script src="http://localhost.com/bookingsystem/assets/themes/backend/js/dewatasoft.js"></script>

	</body>
</html>
