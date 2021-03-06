<?php
include "ahmet.php";
?>

<!DOCTYPE html>


<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Pike Admin - Free Bootstrap 4 Admin Template</title>
		<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
		<meta name="author" content="Pike Web Development - https://www.pikephp.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" />		
		
		<!-- BEGIN CSS for this page -->

		<!-- END CSS for this page -->
				
</head>

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="dashboard.php" class="logo"><img alt="Logo" src="assets/images/logo.png" /> <span>Admin</span></a>
        </div>

        <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
						
						<li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-question-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small>Help and Support</small></h5>
                                </div>

                                <!-- item-->
                                <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Do you want custom development to integrate this theme?</b>
                                        <span>Contact Us</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Do you want PHP version of the theme that save dozens of hours of work?</b>
                                        <span>Try Pike Admin PRO</span>
                                    </p>
                                </a>                               

                                <!-- All-->
                                <a title="Clcik to visit Pike Admin Website" target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item notify-all">
                                    <i class="fa fa-link"></i> Visit Pike Admin Website
                                </a>

                            </div>
                        </li>
						
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">12</span>Contact Messages</small></h5>
                                </div>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Jokn Doe</b>
                                        <span>New message received</span>
                                        <small class="text-muted">2 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Michael Jackson</b>
                                        <span>New message received</span>
                                        <small class="text-muted">15 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Foxy Johnes</b>
                                        <span>New message received</span>
                                        <small class="text-muted">Yesterday, 13:30</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>
                        
						<li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
								<!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">5</span>Allerts</small></h5>
                                </div>
								
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>John Doe</b>
                                        <span>User registration</span>
                                        <small class="text-muted">3 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michael Cox</b>
                                        <span>Task 2 completed</span>
                                        <small class="text-muted">12 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michelle Dolores</b>
                                        <span>New job completed</span>
                                        <small class="text-muted">35 minutes ago</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                    View All Allerts
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="pro-profile.html" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>Logout</span>
                                </a>

								<!-- item-->
                                <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">
                                    <i class="fa fa-external-link"></i> <span>Pike Admin</span>
                                </a>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
								<i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

	</div>
	<!-- End Navigation -->
	
 
	<!-- Left Sidebar -->
	<div class="left main-sidebar">
	
		<div class="sidebar-inner leftscroll">

			<div id="sidebar-menu">
        
			<ul>
			
			<li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span> Form </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="deneme.php">Yangın Formu</a></li>
								<li><a href="forms-select2.html">Select2</a></li>
                                
                            </ul>
                    </li>

					<li class="submenu">
						<a href="dashboard.php"><i class="fa fa-fw fa-bars"></i><span> İtfaiye Yönetim Paneli </span> </a>
                    </li>

					<li class="submenu">
                        <a href="charts.php"><i class="fa fa-fw fa-area-chart"></i><span> Analizler </span> </a>
                    </li>
					
					<li class="submenu">
                        <a href="#" class="active"><i class="fa fa-fw fa-table"></i> <span> Tablolar </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								<li class="active"><a href="tables-basic.php">Ekip Amirleri Tablosu</a></li>
								<li><a href="tables-datatable.php">Data Tables</a></li>
							</ul>
                    </li>
										
                    

					
					
                    

					
					
                    

					

					
            </ul>

            <div class="clearfix"></div>

			</div>
        
			<div class="clearfix"></div>

		</div>

	</div>
	<!-- End Sidebar -->


    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">

															
										
						<div class="row">
								<div class="col-xl-12">
										<div class="breadcrumb-holder">
												<h1 class="main-title float-left">Tables</h1>
												<ol class="breadcrumb float-right">
													<li class="breadcrumb-item">Home</li>
													<li class="breadcrumb-item active">Tables</li>
												</ol>
												<div class="clearfix"></div>
										</div>
								</div>
						</div>
						<!-- end row -->

						
						
						<div class="row">
						
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">						
									<div class="card mb-3">
										<div class="card-header">
											<h3><i class="fa fa-table"></i>     Ana Ekip Listesi</h3>
											<a target="_blank" href="https://getbootstrap.com/docs/4.0/content/tables/"></a>
										</div>
											
										<div class="card-body">
											
											<table class="table table-responsive-xl">
											  <thead>
												<tr>
												  <th scope="col">ID</th>
												  <th scope="col">AD </th>
												  <th scope="col">SOYAD</th>
												  
												</tr>
											  </thead>
											  <tbody>
												<tr>
												  <th scope="row">1</th>
												  <td>Mehmet Ali</td>
												  <td>Karatepe</td>
												  
												</tr>
												<tr>
												  <th scope="row">2</th>
												  <td>Mustafa</td>
												  <td>Topal</td>
												  
												</tr>
												<tr>
												  <th scope="row">3</th>
												  <td>Abdullah</td>
												  <td>Cevher</td>
												  
												</tr>
												<tr>
												  <th scope="row">4</th>
												  <td>Hamit</td>
												  <td>Altıntop</td>
												  
												</tr>
												<tr>
												  <th scope="row">5</th>
												  <td>Eren</td>
												  <td>Yerebakan</td>
												  
												</tr>
												<tr>
												  <th scope="row">6</th>
												  <td>Yasemin</td>
												  <td>Karakuş</td>
												  
												</tr>
												<tr>
												  <th scope="row">7</th>
												  <td>Mehmet</td>
												  <td>Çatık</td>
												  
												</tr>
												
											  </tbody>
											</table>
											
										</div>														
									</div><!-- end card-->					
								</div>
								
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">						
									<div class="card mb-3">
										<div class="card-header">
											<h3><i class="fa fa-table"></i>          Yardımcı Ekip Listesi</h3>
											<a target="_blank" href="https://getbootstrap.com/docs/4.0/content/tables/#striped-rows"></a>
										</div>
											
										<div class="card-body">
											
											<table class="table table-responsive-xl table-striped">
											  <thead>
												<tr>
												  <th scope="col">ID</th>
												  <th scope="col">AD</th>
												  <th scope="col">SOYAD</th>
												  
												</tr>
											  </thead>
											  <tbody>
												<tr>
												  <th scope="row">1</th>
												  <td>Cemil</td>
												  <td>Erdoğan</td>
												 
												</tr>
												<tr>
												  <th scope="row">2</th>
												  <td>Ayşenur</td>
												  <td>Barut</td>
												 
												</tr>
												<tr>
												  <th scope="row">3</th>
												  <td>Erdoğan</td>
												  <td>Atik</td>
												  
												</tr>
												<tr>
												  <th scope="row">4</th>
												  <td>Hakan</td>
												  <td>Karahanlı</td>
												  
												</tr>
												<tr>
												  <th scope="row">5</th>
												  <td>Halil</td>
												  <td>Altıntop</td>
												  
												</tr>
											  </tbody>
											</table>
											
										</div>							
									</div><!-- end card-->					
								</div>

						</div>




						<div class="row">
						
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">						
									<div class="card mb-3">
										<div class="card-header">
											<h3><i class="fa fa-table"></i> Bordered table</h3>
											Add <i>.table-bordered</i> for borders on all sides of the table and cells. <a target="_blank" href="https://getbootstrap.com/docs/4.0/content/tables/#bordered-table">(more info)</a>
										</div>
											
										<div class="card-body">								
											
											<table class="table table-responsive-xl table-bordered">
											  <thead>
												<tr>
												  <th scope="col">#</th>
												  <th scope="col">First Name</th>
												  <th scope="col">Last Name</th>
												  <th scope="col">Username</th>
												</tr>
											  </thead>
											  <tbody>
												<tr>
												  <th scope="row">1</th>
												  <td>Mark</td>
												  <td>Otto</td>
												  <td>@mdo</td>
												</tr>
												<tr>
												  <th scope="row">2</th>
												  <td>Mark</td>
												  <td>Otto</td>
												  <td>@TwBootstrap</td>
												</tr>
												<tr>
												  <th scope="row">3</th>
												  <td>Jacob</td>
												  <td>Thornton</td>
												  <td>@fat</td>
												</tr>
												<tr>
												  <th scope="row">4</th>
												  <td colspan="2">Larry the Bird</td>
												  <td>@twitter</td>
												</tr>
											  </tbody>
											</table>
											
										</div>														
									</div><!-- end card-->					
								</div>
								
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">						
									<div class="card mb-3">
										<div class="card-header">
											<h3><i class="fa fa-table"></i> Hoverable rows table</h3>
											Add <i>.table-hover</i> to enable a hover state on table rows within a 'tbody'. <a target="_blank" href="https://getbootstrap.com/docs/4.0/content/tables/#bordered-table">(more info)</a>
										</div>
											
										<div class="card-body">
											
											<table class="table table-responsive-xl table-hover">
											  <thead>
												<tr>
												  <th scope="col">#</th>
												  <th scope="col">First Name</th>
												  <th scope="col">Last Name</th>
												  <th scope="col">Username</th>
												</tr>
											  </thead>
											  <tbody>
												<tr>
												  <th scope="row">1</th>
												  <td>Mark</td>
												  <td>Otto</td>
												  <td>@mdo</td>
												</tr>
												<tr>
												  <th scope="row">2</th>
												  <td>Jacob</td>
												  <td>Thornton</td>
												  <td>@fat</td>
												</tr>
												<tr>
												  <th scope="row">1</th>
												  <td>John</td>
												  <td>Doe</td>
												  <td>@johnd</td>
												</tr>
												<tr>
												  <th scope="row">3</th>
												  <td colspan="2">Larry the Bird</td>
												  <td>@twitter</td>
												</tr>
											  </tbody>
											</table>

										</div>							
									</div><!-- end card-->					
								</div>

						</div>			
			



            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<footer class="footer">
		<span class="text-right">
		Copyright <a target="_blank" href="#">Your Website</a>
		</span>
		<span class="float-right">
		Powered by <a target="_blank" href="https://www.pikeadmin.com"><b>Pike Admin</b></a>
		</span>
	</footer>

</div>
<!-- END main -->

<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->

<!-- END Java Script for this page -->

</body>
</html>