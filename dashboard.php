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
			<a href="index.html" class="logo"><img alt="Logo" src="assets/images/logo.png" /> <span>Admin</span></a>
        </div>

        

	</div>
	<!-- End Navigation -->
	
 
	<!-- Left Sidebar -->
	<div class="left main-sidebar">
	
		<div class="sidebar-inner leftscroll">

			<div id="sidebar-menu">
        
			<ul>

					<li class="submenu">
						<a class="active" href="ahmet.php"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                    </li>

					<li class="submenu">
                        <a href="charts.html"><i class="fa fa-fw fa-area-chart"></i><span> Charts </span> </a>
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
													<h1 class="main-title float-left">Dashboard</h1>
													<ol class="breadcrumb float-right">
														<li class="breadcrumb-item">Home</li>
														<li class="breadcrumb-item active">Dashboard</li>
													</ol>
													<div class="clearfix"></div>
											</div>
									</div>
						</div>
						<!-- end row -->

						
						
							<div class="row">
									<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card-box noradius noborder bg-default">
													<i class="fa fa-file-text-o float-right text-white"></i>
													<h6 class="text-white text-uppercase m-b-20">Toplam Yangın Sayısı</h6>
													<h1 class="m-b-20 text-white counter">
	<?php
		$bilgi=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin");
		if($bilgi)
	{
        $tek=mysqli_fetch_array($bilgi);    
        echo $tek["0"];
	}

	?>
													</h1>
													<span class="text-white"></span>
											</div>
									</div>

									<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card-box noradius noborder bg-warning">
													<i class="fa fa-user-o float-right text-white"></i>
													<h6 class="text-white text-uppercase m-b-20">Toplam Ana Ekip Sayısı</h6>
													<h1 class="m-b-20 text-white counter">
													<?php
		$bilgi1=mysqli_query($baglan,"SELECT COUNT(ana_ekip_id) FROM ana_ekip_id");
		if($bilgi1)
	{
        $tek1=mysqli_fetch_array($bilgi1);    
        echo $tek1["0"];
	}

	?>
													
													</h1>
													<span class="text-white"></span>
											</div>
									</div>

									<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card-box noradius noborder bg-info">
													<i class="fa fa-user-o float-right text-white"></i>
													<h6 class="text-white text-uppercase m-b-20">Toplam Yard. Ekip Sayısı</h6>
													<h1 class="m-b-20 text-white counter">
													
													<?php
		$bilgi2=mysqli_query($baglan,"SELECT COUNT(yardimci_ekip_id) FROM yardimci_ekip_id");
		if($bilgi2)
	{
        $tek2=mysqli_fetch_array($bilgi2);    
        echo $tek2["0"];
	}

	?>
													
													</h1>
													<span class="text-white"></span>
											</div>
									</div>

									<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
											<div class="card-box noradius noborder bg-danger">
													<i class="fa fa-bell-o float-right text-white"></i>
													<h6 class="text-white text-uppercase m-b-20">Bildirimler</h6>
													<h1 class="m-b-20 text-white counter">
											<?php
		$bilgi3=mysqli_query($baglan,"SELECT COUNT(sira_no) FROM yangin");
		if($bilgi3)
	{
        $tek3=mysqli_fetch_array($bilgi3);    
        echo $tek3["0"];
	}

	?>		
													
													
													</h1>
													<span class="text-white"></span>
											</div>
									</div>
									
									
							</div>
							<!-- end row -->


							
							<div class="row">
							
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-9">						
										<div class="card mb-3">
											<div class="card-header">
												<h3><i class="fa fa-line-chart"></i>   Aylara Göre Yangın Sayıları</h3>
												
											</div>
												
											<div class="card-body">
												<canvas id="lineChart"></canvas>
											</div>							
											
										</div><!-- end card-->					
									</div>

									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">						
										<div class="card mb-3">
											<div class="card-header">
												<h3><i class="fa fa-bar-chart-o"></i>  İlçelere Göre Yangın Sayıları</h3>
												
											</div>
												
											<div class="card-body">
												<canvas id="pieChart"></canvas>
											</div>
											
										</div><!-- end card-->					
									</div>
									
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">						
										<div class="card mb-3">
											<div class="card-header">
												<h3><i class="fa fa-bar-chart-o"></i> Toplam Yangınların Türleri</h3>
												
											</div>
												
											<div class="card-body">
												<canvas id="doughnutChart"></canvas>
											</div>
											
										</div><!-- end card-->					
									</div>
									
									
									
							</div>
							<!-- end row -->
							
							
							


            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	

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
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

	<!-- Counter-Up-->
	<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>			

	<script>
		$(document).ready(function() {
			// data-tables
			$('#example1').DataTable();
					
			// counter-up
			$('.counter').counterUp({
				delay: 10,
				time: 600
			});
		} );		
	</script>
	
	<script>
	var ctx1 = document.getElementById("lineChart").getContext('2d');
	var lineChart = new Chart(ctx1, {
		type: 'bar',
		data: {
			labels: ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"],
			datasets: [{
					label: 'Aylara Göre Yangın Sayıları',
					backgroundColor: '#3EB9DC',
					data: [
					<?php
					$ay=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin WHERE kayit_tarihi LIKE '_____01 %'");
		if($ay)
	{
        $sayi=mysqli_fetch_array($ay);    
        echo $sayi["0"];
	}
	?>
					,
					<?php
					$ay1=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin WHERE kayit_tarihi LIKE '_____02%'");
		if($ay1)
	{
        $sayi1=mysqli_fetch_array($ay1);    
        echo $sayi1["0"];
	}
	?>
					, 
					<?php
					$ay2=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin WHERE kayit_tarihi LIKE '_____03%'");
		if($ay2)
	{
        $sayi2=mysqli_fetch_array($ay2);    
        echo $sayi2["0"];
	}
	?>
					, 
					<?php
					$ay3=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin WHERE kayit_tarihi LIKE '_____04%'");
		if($ay3)
	{
        $sayi3=mysqli_fetch_array($ay3);    
        echo $sayi3["0"];
	}
	?>
					, 
					<?php
					$ay4=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin WHERE kayit_tarihi LIKE '_____05%'");
		if($ay4)
	{
        $sayi4=mysqli_fetch_array($ay4);    
        echo $sayi4["0"];
	}
	?>
					, 
					<?php
					$ay5=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin WHERE kayit_tarihi LIKE '_____06%'");
		if($ay5)
	{
        $sayi5=mysqli_fetch_array($ay5);    
        echo $sayi5["0"];
	}
	?>
					, 
					<?php
					$ay6=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin WHERE kayit_tarihi LIKE '_____07%'");
		if($ay6)
	{
        $sayi6=mysqli_fetch_array($ay6);    
        echo $sayi6["0"];
	}
	?>
					, 
					<?php
					$ay7=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin WHERE kayit_tarihi LIKE '_____08%'");
		if($ay7)
	{
        $sayi7=mysqli_fetch_array($ay7);    
        echo $sayi7["0"];
	}
	?>
					, 
					<?php
					$ay8=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin WHERE kayit_tarihi LIKE '_____09%'");
		if($ay8)
	{
        $sayi8=mysqli_fetch_array($ay8);    
        echo $sayi8["0"];
	}
	?>
					, 
					<?php
					$ay9=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin WHERE kayit_tarihi LIKE '_____10%'");
		if($ay9)
	{
        $sayi9=mysqli_fetch_array($ay9);    
        echo $sayi9["0"];
	}
	?>
					, 
					<?php
					$ay10=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin WHERE kayit_tarihi LIKE '_____11%'");
		if($ay10)
	{
        $sayi10=mysqli_fetch_array($ay10);    
        echo $sayi10["0"];
	}
	?>
					, 
					<?php
					$ay11=mysqli_query($baglan,"SELECT COUNT(kayit_no) FROM yangin WHERE kayit_tarihi LIKE '_____12%'");
		if($ay11)
	{
        $sayi11=mysqli_fetch_array($ay11);    
        echo $sayi11["0"];
	}
	?>
					] 
				}, ]
				
		},
		options: {
						tooltips: {
							mode: 'index',
							intersect: false
						},
						responsive: true,
						scales: {
							xAxes: [{
								stacked: true,
							}],
							yAxes: [{
								stacked: true
							}]
						}
					}
	});


	var ctx2 = document.getElementById("pieChart").getContext('2d');
	var pieChart = new Chart(ctx2, {
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
						'rgba(23,90,14,1)',
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


	var ctx3 = document.getElementById("doughnutChart").getContext('2d');
	var doughnutChart = new Chart(ctx3, {
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
	</script>
<!-- END Java Script for this page -->

</body>
</html>
