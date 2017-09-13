
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon.png">
	<link rel="icon" type="image/png" href="/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="assets/template2/css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/template2/css/style.css">

	<title>Monitoring Online</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

</head>

<body class="index-page">
	
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="index.php">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="assets/img/logo.png" alt="Creative Tim Logo" rel="tooltip" title="<b>BEM FIKTI</b>" data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand">
	                </div>
	            </div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
	    		<br>
	    		<li>
					<a href="../pages/login.php" class="btn btn-warning">
						<i class="fa fa-sign-in"></i> Login Anggota BEM FIKTI
					</a>
				</li>

	    	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('assets/img/bg.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<h1>Monitoring Online.</h1>
						<h3>BEM FIKTI Universitas Gunadarma</h3>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="main main-raised">

		<div class="section section-tabs">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">						
						<!-- Tabs with icons on Card -->
						<div class="card card-nav-tabs">
							<div class="header header-success"  style="float: center;">
								<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
								<div class="nav-tabs-navigation">
									<div class="nav-tabs-wrapper">
										<ul class="nav nav-tabs" data-tabs="tabs"  >
											<li class="">
												<a href="depan.php" >
													<i class="material-icons">face</i>
													Bagian, Biro & Departemen
												</a>
											</li>
											<li>
												<a href="#proker" data-toggle="tab">
													<i class="material-icons">work</i>
													Program Kerja
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="content">
								<div class="tab-content text-center">
									<div class="tab-pane" id="proker">
										<p><?php include "coba.php";?></p>
									</div>
									<div class="tab-pane active" id="profile">
										<div class="row">
											<?php 
										switch(@$_REQUEST['menu']){
												default;
												include "home.php";
												break;
												case "home";
												include "home.php";
												break;
												
												case "akademik";
												include "akademik.php";
												break;

												case "kewirausahaan";
												include "kewirausahaan.php";
												break;

												case "psdm";
												include "psdm.php";
												break;

												case "kesma";
												include "kesma.php";
												break;

												case "humas";
												include "humas.php";
												break;

												case "media";
												include "media.php";
												break;

												case "pti";
												include "pti.php";
												break;

												case "pengmas";
												include "pengmas.php";
												break;

												case "olahraga";
												include "olahraga.php";
												break;

												case "senbud";
												include "senbud.php";
												break;

												case "detail";
												include "detail.php";
												break;

												case "proker";
												include "coba.php";
												break;

											}
										?>
						                </div>
						             </div>   
						               
								</div>
							</div>
						</div>
						<!-- End Tabs with icons on Card -->

					</div>
				</div>
			</div>
		</div>
		<!-- End Section Tabs -->
	</div>
    <footer class="footer">
	    <div class="container">
	        <div class="copyright pull-right">
	            Copyright &copy; 2016 - 2018 Biro Media BEM FIKTI UG | Maintained by Biro PTI BEM FIKTI
	        </div>
	    </div>
	</footer>
</div>





	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
	<?php require_once( $_SERVER['DOCUMENT_ROOT']  . "/analisis.php");?>
	
	</body>
</html>
