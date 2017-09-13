
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-10" />
	<link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Program Kerja Departemen Pengabdian Masyarakat</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>

</head>

<body class="landing-page">
    <nav class="navbar navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		
		   </div>
    	</div>
    </nav>

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('assets/img/pengmas.jpg'); background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
					<div class="col-md-8">
						<h1 class="title" style="color: white; text-align: left;">Departemen Pengabdian Masyarakat</h1>
	                    <h4 style="text-align: left;">Departemen Pengabdian Masyarakat merupakan suatu Departemen di BEM FIKTI UG yang berada di bawah Bidang Kesejahteraan dan Sosial. Departemen ini mempunyai tujuan untuk meningkatkan kepekaan terhadap isu dan keadaan lingkungan sekitar. Melalui Departemen ini, BEM FIKTI UG mengajak mahasiswa FIKTI UG untuk ikut berpartisipasi dan berkontribusi dalam program sosial yang diadakan oleh BEM FIKTI UG.</h4>
	                    <br />
	            	</div>
                </div>
            </div>
        </div>

		<div class="main main-raised">
			<div class="container">
		    	<div class="section text-center section-landing">
	                <div class="row">
	                    <div class="col-md-8 col-md-offset-2" style="margin-left: 150px;margin-bottom: -50px;">
	                        <h2 class="title">Program Kerja Departemen Pengabdian Masyarakat</h2>
	                    </div>
	                </div>

					<table border="0" align="center" width="92%" style="margin-left: 0px;">
	                	<tr align="center">
	                		<td align="center">

	                		<?php
	                			  $query = $conn->prepare('SELECT * FROM list_proker WHERE divisi="pengmas"');
						          $query->execute();
						          $result=$query->get_result();
						          $jumrow=$result->num_rows;
						          
						            
						              while($row=$result->fetch_array()){
						              
						              $namaproker = $row['nama_proker'];
						              $deskripsi = $row['deskripsi'];
						              $id = $row['id_proker'];
						              
	                		?>
								<center>
								<a href="?menu=detail&act=pengmas&id=<?php echo $id; ?>">
								<div class="info" style="float: left; margin-right: 10px;margin-left: 10px; width: 320px;">
									<div class="icon icon-primary">
									<i class="material-icons">question_answer</i>
									</div>
									<h4 class="info-title"><?php echo $namaproker;?></h4>
									<?php 
										$des=substr($deskripsi, 0,200);
									?>
									<p> <?php echo $des." ...";?></p>
								</div>
								</a>
								</center>
							<?php } ?>

	                		</td>
	                	</tr>
	                </table>

					
	          </div>
	      </div>
	             
	           
	    

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="../assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="../assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="../assets/js/material-kit.js" type="text/javascript"></script>

</html>
