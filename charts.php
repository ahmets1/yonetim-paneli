
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
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
		<!-- END CSS for this page -->
		
</head>

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="dashboard.php" class="logo"><img alt="logo" src="assets/images/logo.png" /> <span>Admin</span></a>
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
                        <a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span>Form</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="deneme.php">Yangın Formu</a></li>
								<li><a href="deneme.php">Select2</a></li>
                                
                            </ul>
                    </li>
					<li class="submenu">
						<a href="dashboard.php"><i class="fa fa-fw fa-bars"></i><span>İtfaiye Yönetim Paneli</span> </a>
                    </li>

					<li class="submenu">
                        <a class="active" href="charts.php"><i class="fa fa-fw fa-area-chart"></i><span> Analizler </span> </a>
						
                    </li>
					
					<li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-table"></i> <span> Tablo </span> <span class="menu-arrow"></span></a>
							<ul class="list-unstyled">
								<li><a href="tables-basic.php">Ekip Amirleri Tablosu</a></li>
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
											<h1 class="main-title float-left">Analizler</h1>
											<ol class="breadcrumb float-right">
												<li class="breadcrumb-item">Home</li>
												<li class="breadcrumb-item active">Charts</li>
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
										<i class="fa fa-table"></i> Ana Ekip Yangın Söndürme Süreleri Ortalaması(dk)
									</div>
										
									<div class="card-body">
										<canvas id="barChart"></canvas>
									</div>							
									
								</div><!-- end card-->					
							</div>
							
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">						
								<div class="card mb-3">
									<div class="card-header">
										<i class="fa fa-table"></i> Ana Ekip: Gidilen Yangın Sayısı ve Ortalama Gidiş Süreleri(dk)
									</div>
										
									<div class="card-body">
										<canvas id="comboBarLineChart"></canvas>
									</div>							
									
								</div><!-- end card-->					
							</div>
							
							
					</div>
					
					
					<div class="row">
					
							
							
							
							
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">						
								<div class="card mb-3">
									<div class="card-header">
										<i class="fa fa-table"></i> Yapı Şekillerine Göre Yangın Sayıları
									</div>
										
									<div class="card-body">
										<canvas id="radarChart"></canvas>
									</div>
									
								</div><!-- end card-->					
							</div>
							
							
							
					
					<!-- end row -->
				
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">						
							<div class="card mb-3">
								<div class="card-header">
										<h3><i class="fa fa-bar-chart-o"></i> Türlere Göre Yangın Sayıları</h3>
												
								</div>
												
									<div class="card-body">
											<canvas id="doughnutChart"></canvas>
									</div>
											
							</div><!-- end card-->					
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">						
						<div class="card mb-3">
								<div class="card-header">
												<h3><i class="fa fa-bar-chart-o"></i>  İlçelere Göre Yangın Sayıları</h3>
												
								</div>
												
									<div class="card-body">
												<canvas id="pieChart1"></canvas>
									</div>
											
						</div><!-- end card-->					
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">						
								<div class="card mb-3">
									<div class="card-header">
										<h3><i class="fa fa-bar-chart-o"></i> Sebeplere Göre Yangın Sayıları</h3>
									</div>
										
									<div class="card-body">
										<canvas id="pieChart"></canvas>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	
	<script>
	// barChart
	var ctx1 = document.getElementById("barChart").getContext('2d');
	var barChart = new Chart(ctx1, {
		type: 'bar',
		data: {
			labels: ["Mehmet Ali Karatepe", "Mustafa Topal", "Abdullah Cevher", "Hamit Altıntop", "Eren Yerebakan", "Yasemin Karakuş", "Mehmet Çatık"],
			datasets: [{
				label: 'Yangın Söndürme Süreleri Ortalaması(dk)',
				data: [
				<?php
					$asd=mysqli_query($baglan,"SELECT AVG(time(yangin.yangin_kontrol_saati-ana_ekip.varis_saati)/1000) FROM ana_ekip, ana_ekip_id,yangin WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id and ana_ekip_id.ana_ekip_id='1' AND yangin.kayit_no=ana_ekip.kayit_no");
		if($asd)
	{
        $asdf=mysqli_fetch_array($asd);    
        echo $asdf["0"];
	}
	?>
				
				, 
				<?php
					$asd1=mysqli_query($baglan,"SELECT AVG(time(yangin.yangin_kontrol_saati-ana_ekip.varis_saati)/1000) FROM ana_ekip, ana_ekip_id,yangin WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id and ana_ekip_id.ana_ekip_id='2' AND yangin.kayit_no=ana_ekip.kayit_no");
		if($asd1)
	{
        $asdf1=mysqli_fetch_array($asd1);    
        echo $asdf1["0"];
	}
	?>
				, 
				<?php
					$asd2=mysqli_query($baglan,"SELECT AVG(time(yangin.yangin_kontrol_saati-ana_ekip.varis_saati)/1000) FROM ana_ekip, ana_ekip_id,yangin WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id and ana_ekip_id.ana_ekip_id='3' AND yangin.kayit_no=ana_ekip.kayit_no");
		if($asd2)
	{
        $asdf2=mysqli_fetch_array($asd2);    
        echo $asdf2["0"];
	}
	?>
				, 
				
				<?php
					$asd3=mysqli_query($baglan,"SELECT AVG(time(yangin.yangin_kontrol_saati-ana_ekip.varis_saati)/1000) FROM ana_ekip, ana_ekip_id,yangin WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id and ana_ekip_id.ana_ekip_id='4' AND yangin.kayit_no=ana_ekip.kayit_no");
		if($asd3)
	{
        $asdf3=mysqli_fetch_array($asd3);    
        echo $asdf3["0"];
	}
	?>
				, 
				
				<?php
					$asd4=mysqli_query($baglan,"SELECT AVG(time(yangin.yangin_kontrol_saati-ana_ekip.varis_saati)/1000) FROM ana_ekip, ana_ekip_id,yangin WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id and ana_ekip_id.ana_ekip_id='5' AND yangin.kayit_no=ana_ekip.kayit_no");
		if($asd4)
	{
        $asdf4=mysqli_fetch_array($asd4);    
        echo $asdf4["0"];
	}
	?>
				, 
				
				<?php
					$asd5=mysqli_query($baglan,"SELECT AVG(time(yangin.yangin_kontrol_saati-ana_ekip.varis_saati)/1000) FROM ana_ekip, ana_ekip_id,yangin WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id and ana_ekip_id.ana_ekip_id='6' AND yangin.kayit_no=ana_ekip.kayit_no");
		if($asd5)
	{
        $asdf5=mysqli_fetch_array($asd5);    
        echo $asdf5["0"];
	}
	?>
				, 
				
				<?php
					$asd6=mysqli_query($baglan,"SELECT AVG(time(yangin.yangin_kontrol_saati-ana_ekip.varis_saati)/1000) FROM ana_ekip, ana_ekip_id,yangin WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id and ana_ekip_id.ana_ekip_id='7' AND yangin.kayit_no=ana_ekip.kayit_no");
		if($asd6)
	{
        $asdf6=mysqli_fetch_array($asd6);    
        echo $asdf6["0"];
	}
	?>
				],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 99, 132, 0.2)'
									
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255,99,132,1)'
					
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});

	// comboBarLineChart
	var ctx2 = document.getElementById("comboBarLineChart").getContext('2d');
	var comboBarLineChart = new Chart(ctx2, {
		type: 'bar',
		data: {
			labels: ["Mehmet Ali Karatepe", "Mustafa Topal", "Abdullah Cevher", "Hamit Altıntop", "Eren Yerebakan", "Yasemin Karakuş", "Mehmet Çatık"],
			datasets: [{
					type: 'line',
					label: 'Yangın Varış Ortalaması(dk)',
					borderColor: '#484c4f',
					borderWidth: 3,
					fill: false,
					data: [
	<?php
					$ekip=mysqli_query($baglan,"SELECT AVG(time(ana_ekip.varis_saati-ana_ekip.cikis_saati)/100) FROM ana_ekip, ana_ekip_id WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id and ana_ekip_id.ana_ekip_id='1' ");		
		if($ekip)
	{
        $ana=mysqli_fetch_array($ekip);    
        echo $ana["0"];
	}
	?>
					
					, 
					
					<?php
					$ekip1=mysqli_query($baglan,"SELECT AVG(time(ana_ekip.varis_saati-ana_ekip.cikis_saati)/100) FROM ana_ekip, ana_ekip_id WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id and ana_ekip_id.ana_ekip_id='2'");
		if($ekip1)
	{
        $ana1=mysqli_fetch_array($ekip1);    
        echo $ana1["0"];
	}
	?>
					, 
					<?php
					$ekip2=mysqli_query($baglan,"SELECT AVG(time(ana_ekip.varis_saati-ana_ekip.cikis_saati)/100) FROM ana_ekip, ana_ekip_id WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id and ana_ekip_id.ana_ekip_id='3' ");
		if($ekip2)
	{
        $ana2=mysqli_fetch_array($ekip2);    
        echo $ana2["0"];
	}
	?>
					
					, 
					<?php
					$ekip3=mysqli_query($baglan,"SELECT AVG(time(ana_ekip.varis_saati-ana_ekip.cikis_saati)/100) FROM ana_ekip, ana_ekip_id WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id and ana_ekip_id.ana_ekip_id='4' ");
		if($ekip3)
	{
        $ana3=mysqli_fetch_array($ekip3);    
        echo $ana3["0"];
	}
	?>
					
					, 
					
					<?php
					$ekip4=mysqli_query($baglan,"SELECT AVG(time(ana_ekip.varis_saati-ana_ekip.cikis_saati)/100) FROM ana_ekip, ana_ekip_id WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id and ana_ekip_id.ana_ekip_id='5' ");
		if($ekip4)
	{
        $ana4=mysqli_fetch_array($ekip4);    
        echo $ana4["0"];
	}
	?>
	, 
	<?php
					$ekip5=mysqli_query($baglan,"SELECT AVG(time(ana_ekip.varis_saati-ana_ekip.cikis_saati)/100) FROM ana_ekip, ana_ekip_id WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id and ana_ekip_id.ana_ekip_id='6' ");
		if($ekip5)
	{
        $ana5=mysqli_fetch_array($ekip5);    
        echo $ana5["0"];
	}
	?>
	, 
	<?php
					$ekip6=mysqli_query($baglan,"SELECT AVG(time(ana_ekip.varis_saati-ana_ekip.cikis_saati)/100) FROM ana_ekip, ana_ekip_id WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id and ana_ekip_id.ana_ekip_id='7' ");
		if($ekip6)
	{
        $ana6=mysqli_fetch_array($ekip6);    
        echo $ana6["0"];
	}
	?>
	
	],
				}, {
					type: 'bar',
					label: 'Gidilen Yangın',
					backgroundColor: '#FF6B8A',
					data: [ 
	<?php
					$ekip7=mysqli_query($baglan,"SELECT COUNT(yangin.kayit_no) FROM ana_ekip_id, yangin, ana_ekip WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id AND yangin.kayit_no=ana_ekip.kayit_no AND ana_ekip.ana_ekip_id='1'");
		if($ekip7)
	{
        $ana7=mysqli_fetch_array($ekip7);    
        echo $ana7["0"];
	}
	?>
					
					
					, 
					<?php
					$ekip8=mysqli_query($baglan,"SELECT COUNT(yangin.kayit_no) FROM ana_ekip_id, yangin, ana_ekip WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id AND yangin.kayit_no=ana_ekip.kayit_no AND ana_ekip.ana_ekip_id='2'");
		if($ekip8)
	{
        $ana8=mysqli_fetch_array($ekip8);    
        echo $ana8["0"];
	}
	?>
					, 
					<?php
					$ekip9=mysqli_query($baglan,"SELECT COUNT(yangin.kayit_no) FROM ana_ekip_id, yangin, ana_ekip WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id AND yangin.kayit_no=ana_ekip.kayit_no AND ana_ekip.ana_ekip_id='3'");
		if($ekip9)
	{
        $ana9=mysqli_fetch_array($ekip9);    
        echo $ana9["0"];
	}
	?>
					
					, 
					<?php
					$ekip10=mysqli_query($baglan,"SELECT COUNT(yangin.kayit_no) FROM ana_ekip_id, yangin, ana_ekip WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id AND yangin.kayit_no=ana_ekip.kayit_no AND ana_ekip.ana_ekip_id='4'");
		if($ekip10)
	{
        $ana10=mysqli_fetch_array($ekip10);    
        echo $ana10["0"];
	}
	?>
					
					, 
					<?php
					$ekip11=mysqli_query($baglan,"SELECT COUNT(yangin.kayit_no) FROM ana_ekip_id, yangin, ana_ekip WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id AND yangin.kayit_no=ana_ekip.kayit_no AND ana_ekip.ana_ekip_id='5'");
		if($ekip11)
	{
        $ana11=mysqli_fetch_array($ekip11);    
        echo $ana11["0"];
	}
	?>
					, 
					<?php
					$ekip12=mysqli_query($baglan,"SELECT COUNT(yangin.kayit_no) FROM ana_ekip_id, yangin, ana_ekip WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id AND yangin.kayit_no=ana_ekip.kayit_no AND ana_ekip.ana_ekip_id='6'");
		if($ekip12)
	{
        $ana12=mysqli_fetch_array($ekip12);    
        echo $ana12["0"];
	}
	?>
					, 
					<?php
					$ekip13=mysqli_query($baglan,"SELECT COUNT(yangin.kayit_no) FROM ana_ekip_id, yangin, ana_ekip WHERE ana_ekip_id.ana_ekip_id=ana_ekip.ana_ekip_id AND yangin.kayit_no=ana_ekip.kayit_no AND ana_ekip.ana_ekip_id='7'");
		if($ekip13)
	{
        $ana13=mysqli_fetch_array($ekip13);    
        echo $ana13["0"];
	}
	?>
					
			],
					borderColor: 'white',
					borderWidth: 0
				}, ], 
				borderWidth: 1
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});	
			
	// pieChart
	var ctx3 = document.getElementById("pieChart").getContext('2d');
	var pieChart = new Chart(ctx3, {
		type: 'pie',
		data: {
				datasets: [{
					data: [
					<?php
					$sebep=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_sebep WHERE yangin.yangin_sebep_id=yangin_sebep.yangin_sebep_id AND yangin_sebep.yangin_sebep_id='1'");
		if($sebep)
	{
        $ys=mysqli_fetch_array($sebep);    
        echo $ys["0"];
	}
	?>
					
					, 
					<?php
					$sebep1=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_sebep WHERE yangin.yangin_sebep_id=yangin_sebep.yangin_sebep_id AND yangin_sebep.yangin_sebep_id='2'");
		if($sebep1)
	{
        $ys1=mysqli_fetch_array($sebep1);    
        echo $ys1["0"];
	}
	?>
					, 
					<?php
					$sebep2=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_sebep WHERE yangin.yangin_sebep_id=yangin_sebep.yangin_sebep_id AND yangin_sebep.yangin_sebep_id='3'");
		if($sebep2)
	{
        $ys2=mysqli_fetch_array($sebep2);    
        echo $ys2["0"];
	}
	?>
					, 
					
					<?php
					$sebep3=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_sebep WHERE yangin.yangin_sebep_id=yangin_sebep.yangin_sebep_id AND yangin_sebep.yangin_sebep_id='4'");
		if($sebep3)
	{
        $ys3=mysqli_fetch_array($sebep3);    
        echo $ys3["0"];
	}
	?>
					, 
					
				<?php
					$sebep4=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_sebep WHERE yangin.yangin_sebep_id=yangin_sebep.yangin_sebep_id AND yangin_sebep.yangin_sebep_id='5'");
		if($sebep4)
	{
        $ys4=mysqli_fetch_array($sebep4);    
        echo $ys4["0"];
	}
	?>	
				, 
				<?php
					$sebep5=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_sebep WHERE yangin.yangin_sebep_id=yangin_sebep.yangin_sebep_id AND yangin_sebep.yangin_sebep_id='6'");
		if($sebep5)
	{
        $ys5=mysqli_fetch_array($sebep5);    
        echo $ys5["0"];
	}
	?>
				
				,
				
				<?php
					$sebep6=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_sebep WHERE yangin.yangin_sebep_id=yangin_sebep.yangin_sebep_id AND yangin_sebep.yangin_sebep_id='7'");
		if($sebep6)
	{
        $ys6=mysqli_fetch_array($sebep6);    
        echo $ys6["0"];
	}
	?>
				,
				<?php
					$sebep7=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_sebep WHERE yangin.yangin_sebep_id=yangin_sebep.yangin_sebep_id AND yangin_sebep.yangin_sebep_id='8'");
		if($sebep7)
	{
        $ys7=mysqli_fetch_array($sebep7);    
        echo $ys7["0"];
	}
	?>
			],
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)',
						'rgba(150, 15, 6, 1)',
						'rgba(223, 19, 4, 1)'
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Yangından Korunma Önlemi Alınmaması",
					"Bilgisizlik",
					"İhmal ve Dikkatsizlik",
					"Kazalar",
					"Sıçrama",
					"Sabotaj",
					"Tabiat Olayları",
					"Kıvılcım"
				]
			},
			options: {
				responsive: true
			}
	 
	});

	// doughnutChart
	

	// radarChart
	var ctx5 = document.getElementById("radarChart").getContext('2d');
	var doughnutChart = new Chart(ctx5, {
		type: 'radar',
		data: {
				labels: ["Betonarme", "Kagir", "Ahşap","Çelik","Kerpiç"],
				datasets: [{
					label: "BUCA",
					backgroundColor: 'rgba(5, 39, 19, 0.2)',                      
					borderColor: 'rgba(25,150,22,1)',
					pointBackgroundColor: 'red',
					data: [
					
				
					
					
					
					<?php
		$yapi=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Buca' and yangin_yapi_sekil.yapi_sekil_id='1'");
		if($yapi)
	{
        $sekil=mysqli_fetch_array($yapi);    
        echo $sekil["0"];
	}

	?>
					, 
					<?php
		$yapi1=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Buca' and yangin_yapi_sekil.yapi_sekil_id='2'");
		if($yapi1)
	{
        $sekil1=mysqli_fetch_array($yapi1);    
        echo $sekil1["0"];
	}

	?>
					
					, 
					<?php
		$yapi2=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Buca' and yangin_yapi_sekil.yapi_sekil_id='3'");
		if($yapi2)
	{
        $sekil2=mysqli_fetch_array($yapi2);    
        echo $sekil2["0"];
	}

	?>
					, 
					
					<?php
		$yapi3=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Buca' and yangin_yapi_sekil.yapi_sekil_id='4'");
		if($yapi3)
	{
        $sekil3=mysqli_fetch_array($yapi3);    
        echo $sekil3["0"];
	}

	?>
					, 
					
					<?php
		$yapi4=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Buca' and yangin_yapi_sekil.yapi_sekil_id='5'");
		if($yapi4)
	{
        $sekil4=mysqli_fetch_array($yapi4);    
        echo $sekil4["0"];
	}

	?>
					]
				},
				{
					label: "BORNOVA",
					backgroundColor: 'rgba(25, 9, 12, 0.4)',
					borderColor: 'rgba(2,129,32,1)',
					pointBackgroundColor: 'red',
					data: [
					<?php
		$yapi5=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Bornova' and yangin_yapi_sekil.yapi_sekil_id='1'");
		if($yapi5)
	{
        $sekil5=mysqli_fetch_array($yapi5);    
        echo $sekil5["0"];
	}

	?>
					
					, 
					<?php
		$yapi6=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Bornova' and yangin_yapi_sekil.yapi_sekil_id='2'");
		if($yapi6)
	{
        $sekil6=mysqli_fetch_array($yapi6);    
        echo $sekil6["0"];
	}

	?>
					, 
					<?php
		$yapi7=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Bornova' and yangin_yapi_sekil.yapi_sekil_id='3'");
		if($yapi7)
	{
        $sekil7=mysqli_fetch_array($yapi7);    
        echo $sekil7["0"];
	}

	?>
					, 
					
					<?php
		$yapi8=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Bornova' and yangin_yapi_sekil.yapi_sekil_id='4'");
		if($yapi8)
	{
        $sekil8=mysqli_fetch_array($yapi8);    
        echo $sekil8["0"];
	}

	?>
					,
					<?php
		$yapi9=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Bornova' and yangin_yapi_sekil.yapi_sekil_id='5'");
		if($yapi9)
	{
        $sekil9=mysqli_fetch_array($yapi9);    
        echo $sekil9["0"];
	}

	?>
					]
				},
{
					label: "KONAK",
					backgroundColor: 'rgba(243, 34, 234, 0.4)',
					borderColor: 'rgba(26,19,2,1)',
					pointBackgroundColor: 'red',
					data: [
					<?php
		$yapi15=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Konak' and yangin_yapi_sekil.yapi_sekil_id='1'");
		if($yapi15)
	{
        $sekil15=mysqli_fetch_array($yapi15);    
        echo $sekil15["0"];
	}

	?>
					
					, 
					<?php
		$yapi16=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Konak' and yangin_yapi_sekil.yapi_sekil_id='2'");
		if($yapi16)
	{
        $sekil16=mysqli_fetch_array($yapi16);    
        echo $sekil16["0"];
	}

	?>
					, 
					<?php
		$yapi17=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Konak' and yangin_yapi_sekil.yapi_sekil_id='3'");
		if($yapi17)
	{
        $sekil17=mysqli_fetch_array($yapi17);    
        echo $sekil17["0"];
	}

	?>
					, 
					
					<?php
		$yapi18=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Konak' and yangin_yapi_sekil.yapi_sekil_id='4'");
		if($yapi18)
	{
        $sekil18=mysqli_fetch_array($yapi18);    
        echo $sekil18["0"];
	}

	?>
					,
					<?php
		$yapi19=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Konak' and yangin_yapi_sekil.yapi_sekil_id='5'");
		if($yapi19)
	{
        $sekil19=mysqli_fetch_array($yapi19);    
        echo $sekil19["0"];
	}

	?>
					]
				},
				
				{
					label: "KARŞIYAKA",
					backgroundColor: 'rgba(250, 80, 112, 0.3)',
					borderColor: 'rgba(54, 162, 235, 1)',
					pointBackgroundColor: 'blue',
					data: [
					<?php
		$yapi10=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Karşıyaka' and yangin_yapi_sekil.yapi_sekil_id='1'");
		if($yapi10)
	{
        $sekil10=mysqli_fetch_array($yapi10);    
        echo $sekil10["0"];
	}

	?>
					, 
					<?php
		$yapi11=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Karşıyaka' and yangin_yapi_sekil.yapi_sekil_id='2'");
		if($yapi11)
	{
        $sekil11=mysqli_fetch_array($yapi11);    
        echo $sekil11["0"];
	}

	?>
					, 
					<?php
		$yapi12=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Karşıyaka' and yangin_yapi_sekil.yapi_sekil_id='3'");
		if($yapi12)
	{
        $sekil12=mysqli_fetch_array($yapi12);    
        echo $sekil12["0"];
	}

	?>
					, 
					<?php
		$yapi13=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Karşıyaka' and yangin_yapi_sekil.yapi_sekil_id='4'");
		if($yapi13)
	{
        $sekil13=mysqli_fetch_array($yapi13);    
        echo $sekil13["0"];
	}

	?>
					, 
					<?php
		$yapi14=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce, yangin_yapi_sekil WHERE yangin.ilce_id=ilce.ilce_id AND yangin.yapi_sekil_id=yangin_yapi_sekil.yapi_sekil_id and ilce.ilce_ad='Karşıyaka' and yangin_yapi_sekil.yapi_sekil_id='5'");
		if($yapi14)
	{
        $sekil14=mysqli_fetch_array($yapi14);    
        echo $sekil14["0"];
	}

	?>
					]
				},]
			},
			options: {
				responsive: true
			}
	 
	});

	// polarAreaChart
	
	
	
	//Toplam yangın türü
	var ctx6 = document.getElementById("doughnutChart").getContext('2d');
	var doughnutChart = new Chart(ctx6, {
		type: 'doughnut',
		data: {
				datasets: [{
					data: [
					<?php
					$tur=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_tur WHERE yangin.yangin_tur_id=yangin_tur.yangin_tur_id AND yangin_tur.yangin_tur_id='1'");
		if($tur)
	{
        $yangin=mysqli_fetch_array($tur);    
        echo $yangin["0"];
	}
	?>
					, 
					<?php
					$tur1=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_tur WHERE yangin.yangin_tur_id=yangin_tur.yangin_tur_id AND yangin_tur.yangin_tur_id='2'");
		if($tur1)
	{
        $yangin1=mysqli_fetch_array($tur1);    
        echo $yangin1["0"];
	}
	?>
					, 
					<?php
					$tur2=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_tur WHERE yangin.yangin_tur_id=yangin_tur.yangin_tur_id AND yangin_tur.yangin_tur_id='3'");
		if($tur2)
	{
        $yangin2=mysqli_fetch_array($tur2);    
        echo $yangin2["0"];
	}
	?>
					, 
					<?php
					$tur3=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_tur WHERE yangin.yangin_tur_id=yangin_tur.yangin_tur_id AND yangin_tur.yangin_tur_id='4'");
		if($tur3)
	{
        $yangin3=mysqli_fetch_array($tur3);    
        echo $yangin3["0"];
	}
	?>
					, 
					<?php
					$tur4=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_tur WHERE yangin.yangin_tur_id=yangin_tur.yangin_tur_id AND yangin_tur.yangin_tur_id='5'");
		if($tur4)
	{
        $yangin4=mysqli_fetch_array($tur4);    
        echo $yangin4["0"];
	}
	?>
					, 
					<?php
					$tur5=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_tur WHERE yangin.yangin_tur_id=yangin_tur.yangin_tur_id AND yangin_tur.yangin_tur_id='6'");
		if($tur5)
	{
        $yangin5=mysqli_fetch_array($tur5);    
        echo $yangin5["0"];
	}
	?>
					,
					<?php
					$tur6=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_tur WHERE yangin.yangin_tur_id=yangin_tur.yangin_tur_id AND yangin_tur.yangin_tur_id='7'");
		if($tur6)
	{
        $yangin6=mysqli_fetch_array($tur6);    
        echo $yangin6["0"];
	}
	?>
					,
					<?php
					$tur7=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_tur WHERE yangin.yangin_tur_id=yangin_tur.yangin_tur_id AND yangin_tur.yangin_tur_id='8'");
		if($tur7)
	{
        $yangin7=mysqli_fetch_array($tur7);    
        echo $yangin7["0"];
	}
	?>
					,
					<?php
					$tur8=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, yangin_tur WHERE yangin.yangin_tur_id=yangin_tur.yangin_tur_id AND yangin_tur.yangin_tur_id='9'");
		if($tur8)
	{
        $yangin8=mysqli_fetch_array($tur8);    
        echo $yangin8["0"];
	}
	?>
					],
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(123, 54, 25, 1)',
						'rgba(23, 543, 5, 1)',
						'rgba(15, 12, 2, 1)',
						'rgba(123, 1, 85, 1)'
						
						
					],
					label: 'Dataset 1'
				}],
				labels: [
					"LPG Yangınları",
					"D.gaz Yangınları",
					"Akaryakıt Yangınları ",
					"Baca Yangınları",
					"Elektrik Yangınları",
					"Orman Yangınları",
					"Araç Yangınları",
					"Bina Yangınları",
					"Fabrika Yangınları",
				]
			},
			options: {
				responsive: true
			}
	 
	});
	
	//ilcelere göre yangın 
	
	var ctx2 = document.getElementById("pieChart1").getContext('2d');
	var pieChart1 = new Chart(ctx2, {
		type: 'pie',
		data: {
				datasets: [{
					data: [<?php
					$bilgi4=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce WHERE yangin.ilce_id=ilce.ilce_id and ilce.ilce_ad='Buca'");
		if($bilgi4)
	{
        $tek4=mysqli_fetch_array($bilgi4);    
        echo $tek4["0"];
	}
	
	
					
					?>, 
					<?php
					$bilgi5=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce WHERE yangin.ilce_id=ilce.ilce_id and ilce.ilce_ad='Bornova'");
		if($bilgi5)
	{
        $tek5=mysqli_fetch_array($bilgi5);    
        echo $tek5["0"];
	}
	?>
	, 
	<?php
					$bilgi6=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce WHERE yangin.ilce_id=ilce.ilce_id and ilce.ilce_ad='Aliağa'");
		if($bilgi6)
	{
        $tek6=mysqli_fetch_array($bilgi6);    
        echo $tek6["0"];
	}
	?>
	, 
	<?php
					$bilgi7=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce WHERE yangin.ilce_id=ilce.ilce_id and ilce.ilce_ad='Bayraklı'");
		if($bilgi7)
	{
        $tek7=mysqli_fetch_array($bilgi7);    
        echo $tek7["0"];
	}
	?>
	, 
	<?php
					$bilgi8=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce WHERE yangin.ilce_id=ilce.ilce_id and ilce.ilce_ad='Çeşme'");
		if($bilgi8)
	{
        $tek8=mysqli_fetch_array($bilgi8);    
        echo $tek8["0"];
	}
	?>
	, 
	<?php
					$bilgi9=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce WHERE yangin.ilce_id=ilce.ilce_id and ilce.ilce_ad='Çiğli'");
		if($bilgi9)
	{
        $tek9=mysqli_fetch_array($bilgi9);    
        echo $tek9["0"];
	}
	?>
	,
	<?php
					$bilgi10=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce WHERE yangin.ilce_id=ilce.ilce_id and ilce.ilce_ad='Foça'");
		if($bilgi10)
	{
        $tek10=mysqli_fetch_array($bilgi10);    
        echo $tek10["0"];
	}
	?>
	,
	<?php
					$bilgi11=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce WHERE yangin.ilce_id=ilce.ilce_id and ilce.ilce_ad='Gaziemir'");
		if($bilgi11)
	{
        $tek11=mysqli_fetch_array($bilgi11);    
        echo $tek11["0"];
	}
	?>
	,
	
	<?php
					$bilgi12=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce WHERE yangin.ilce_id=ilce.ilce_id and ilce.ilce_ad='Güzelbahçe'");
		if($bilgi12)
	{
        $tek12=mysqli_fetch_array($bilgi12);    
        echo $tek12["0"];
	}
	?>
	,
	
	<?php
					$bilgi13=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce WHERE yangin.ilce_id=ilce.ilce_id and ilce.ilce_ad='Karşıyaka'");
		if($bilgi13)
	{
        $tek13=mysqli_fetch_array($bilgi13);    
        echo $tek13["0"];
	}
	?>
	,
	<?php
					$bilgi14=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce WHERE yangin.ilce_id=ilce.ilce_id and ilce.ilce_ad='Konak'");
		if($bilgi14)
	{
        $tek14=mysqli_fetch_array($bilgi14);    
        echo $tek14["0"];
	}
	?>
	,
	
	<?php
					$bilgi15=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce WHERE yangin.ilce_id=ilce.ilce_id and ilce.ilce_ad='Seferihisar'");
		if($bilgi15)
	{
        $tek15=mysqli_fetch_array($bilgi15);    
        echo $tek15["0"];
	}
	?>
	,
	
	<?php
					$bilgi16=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce WHERE yangin.ilce_id=ilce.ilce_id and ilce.ilce_ad='Tire'");
		if($bilgi16)
	{
        $tek16=mysqli_fetch_array($bilgi16);    
        echo $tek16["0"];
	}
	?>
	,
	<?php
					$bilgi17=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce WHERE yangin.ilce_id=ilce.ilce_id and ilce.ilce_ad='Torbalı'");
		if($bilgi17)
	{
        $tek17=mysqli_fetch_array($bilgi17);    
        echo $tek17["0"];
	}
	?>
	,
	
	<?php
					$bilgi18=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin, ilce WHERE yangin.ilce_id=ilce.ilce_id and ilce.ilce_ad='Balçova'");
		if($bilgi18)
	{
        $tek18=mysqli_fetch_array($bilgi18);    
        echo $tek18["0"];
	}
	?>
	],
					
					
					
					backgroundColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(250,90,139,1)',
						'rgba(24,100,45,1)',
						'rgba(39,68,230,1)',
						'rgba(178,56,76,1)',
						'rgba(200,31,156,1)',
						'rgba(158,23,1,1)',
						'rgba(31,96,140,1)',
						'rgba(25,67,177,1)',
						'rgba(55,66,78,1)',
						'rgba(265, 145, 64, 1)'
						
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Buca",
					"Bornova",
					"Aliağa",
					"Bayraklı",
					"Çeşme",
					"Çiğli",
					"Foça",
					"Gaziemir",
					"Güzelbahçe",
					"Karşıyaka",
					"Konak",
					"Seferihisar",
					"Tire",
					"Torbalı",
					"Balçova"
				]
			},
			options: {
				responsive: true
			}
	 
	});
	
	
	</script>
<!-- END Java Script for this page -->

</body>
</html>