<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

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
	    	<a href="#">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="assets/img/logo.png" alt="Creative Tim Logo" rel="tooltip" title="<b>BEM FIKTI</b>" data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand">
	                    BEM FIKTI
	                </div>


				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
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
											<li class="active">
												<a href="#profile" data-toggle="tab">
													<i class="material-icons">face</i>
													Biro & Departemen
												</a>
											</li>
											<li>
												<a href="#messages" data-toggle="tab">
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
									<div class="tab-pane active" id="profile">
										<div class="row">
											
											<div class="col-sm-3 ">
												
						                    		<a href="?menu=akademik" class="btn btn-white btn-lg">
						                    			<h4>Akademik</h4>
						                    	    	<img src="assets/img/ico/AK.png" alt="Rounded Image" class="img-rounded img-responsive">
						                    	    </a>
						                    </div>
											<div class="col-sm-3 ">
						                    		<a href="?menu=bismit" class="btn btn-white btn-lg">
														<h4>BISMIT</h4>
						                    	    	<img src="assets/img/ico/KW.png" alt="Rounded Image" class="img-rounded img-responsive">
						                    	    </a>
						                    </div>
											<div class="col-sm-3 ">
						                    		<a href="?menu=sdm" class="btn btn-white btn-lg">
														<h4>SDM</h4>
						                    	    	<img src="assets/img/ico/PSDM.png" alt="Rounded Image" class="img-rounded img-responsive">
						                    	    </a>
						                    </div>
											<div class="col-sm-3 ">
						                    		<a href="?menu=kesma" class="btn btn-white btn-lg">
														<h4>KESMA</h4>
						                    	    	<img src="assets/img/ico/KESMA.png" alt="Rounded Image" class="img-rounded img-responsive">
						                    	    </a>
						                    </div>
						                    <div class="clearfix"></div>
						                    <div class="col-sm-3 ">
						                    		<a href="?menu=humas" class="btn btn-white btn-lg">
														<h4>HUMAS</h4>
						                    	    	<img src="assets/img/ico/HUMAS.png" alt="Rounded Image" class="img-rounded img-responsive">
						                    	    </a>
						                    </div>
						                    <div class="col-sm-3">
						                    		<a href="?menu=media" class="btn btn-white btn-lg">
														<h4>Media</h4>
						                    	    	<img src="assets/img/ico/M.png" alt="Rounded Image" class="img-rounded img-responsive">
						                    	    </a>
						                    </div>
											<div class="col-sm-3">
						                    		<a href="?menu=pti" class="btn btn-white btn-lg">
														<h4>PTI</h4>
						                    	    	<img src="assets/img/ico/PTI.png" alt="Rounded Image" class="img-rounded img-responsive">
						                    	    </a>
						                    </div>											
											<div class="col-sm-3 ">
						                    		<a href="?menu=pengmas" class="btn btn-white btn-lg">
														<h4>Pengmas</h4>
						                    	    	<img src="assets/img/ico/PENGMAS.png" alt="Rounded Image" class="img-rounded img-responsive">
						                    	    </a>
						                    </div>						                    
						                    <div class="clearfix"></div>
											<div class="col-sm-3  col-sm-offset-3">
						                    		<a href="?menu=olahraga" class="btn btn-white btn-lg">	
														<h4>Olahraga</h4>
						                    	    	<img src="assets/img/ico/OLGA.png" alt="Rounded Image" class="img-rounded img-responsive">
						                    	    </a>
						                    </div>
											<div class="col-sm-3 ">
						                    		<a href="?menu=senbud" class="btn btn-white btn-lg">
														<h4>Seni Budaya</h4>
						                    	    	<img src="assets/img/ico/SB.png" alt="Rounded Image" class="img-rounded img-responsive">
						                    	    </a>
						                    </div>										
											
											   
						                </div>
						             </div>   
						                <div class="row">
									</div>
									<div class="tab-pane" id="messages">
										<p> Meong.</p>
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
	            Copyright &copy; 2016 - Biro Media BEM FIKTI UG | Maintained by Biro PTI BEM FIKTI
	        </div>
	    </div>
	</footer>
</div>

<!-- Sart Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-simple">Nice Button</button>
				<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--  End Modal -->


</body>
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
</html>
