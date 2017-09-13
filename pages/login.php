<?php
ob_start();
?>
<!DOCTYPE html>
<!-- PTI banget -->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Monitoring Online | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon.png">
  <link rel="icon" type="image/png" href="/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Login - Monitoring Online</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <!-- CSS Files -->
    <link href="../user/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../user/assets/css/material-kit.css" rel="stylesheet"/>

    <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../user/assets/css/demo.css" rel="stylesheet" />
</head>
<body class="signup-page">
  <nav class="navbar navbar-transparent navbar-absolute">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="/monitoring">
            <div class="logo-container">
                  <div class="logo">
                      <img src="../user/assets/img/logo.png" alt="Creative Tim Logo" rel="tooltip" title="<b>BEM FIKTI</b>" data-placement="bottom" data-html="true">
                  </div>
                  <div class="brand">
                      BEM FIKTI
                  </div>


        </div>
          </a>
      </div>

          <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-right">
          
            </ul>
          </div>
      </div>
    </nav>

    <div class="wrapper">
    <div class="header header-filter" style="background-image: url('../user/assets/img/bg4.jpeg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <div class="card card-signup">
              
                <div class="header header-primary text-center">
                  <h4>Login Anggota BEM FIKTI</h4>
                </div>                
                <div class="content">

                  <!-- taro sini-->

                    <?php include ('include/masuk.php'); ?>

                  <!-- If you want to add a checkbox to this form, uncomment this code
  -->
                  <div class="checkbox">
                    <label>
                      <a href="register.php">
                        Register a new membership
                      </a>  
                    </label>
                  </div> 
                </div>
               
             
            </div>
          </div>
        </div>
      </div>

      <footer class="footer">
            <div class="container">
                <div class="copyright pull-right">
                    Copyright &copy; 2016 -2018 Biro Media BEM FIKTI UG | Maintained by Biro PTI BEM FIKTI
                </div>
            </div>
        </footer>

    </div>

    </div>




<!-- jQuery 2.2.3 -->
 <script src="../user/assets/js/jquery.min.js"></script>
  <script src="../user/assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../user/assets/js/material.min.js"></script>

  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../user/assets/js/nouislider.min.js" type="text/javascript"></script>

  <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
  <script src="../user/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

  <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
  <script src="../user/assets/js/material-kit.js" type="text/javascript"></script>
  <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src=" ../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
