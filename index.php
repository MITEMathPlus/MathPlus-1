<?php


?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Математика+</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-5" />
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="icon" href="assets/img/logo_64.ico">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
  <link rel='stylesheet' href='assets/css/vendor.css'>
  <link rel='stylesheet' href='assets/css/style.css'>
  <!--[if lte IE 9]><!-->
  <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
  <link rel='stylesheet' href='assets/css/vendor.css'>
  <link rel='stylesheet' href='assets/css/style.css'>
  <link rel='stylesheet' href='assets/css/custom.css'>
  <link rel='stylesheet' href='assets/css/search.css'>
  <!--[if lte IE 9]><!-->
  <script src='assets/js/vendor/html5shiv.min.js'></script>
  <!--<![endif]-->

  <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/themify-icons.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
    <!-- Slicknav js -->
    <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="assets/css/colors/sky.css" media="screen" />
  <script src='assets/js/vendor/html5shiv.min.js'></script>
  <!--<![endif]-->
</head>
<body>

  <div class="site">
    <div class="site-loader">
      <div class="site-loader-spinner"></div>
    </div> <!-- .site-loader -->


    <div class="site-canvas">
      <header class="site-header">
        <nav class="navbar navbar-theme">
          <div class="container">
            <div class="navbar-header">
              <div class="navbar-brand-wrap">
                <a class="navbar-brand" href="#">
                  <img src="assets/img/header-logo.png" alt="">
                </a>
              </div>
            </div> <!-- .navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href=".?p=index">Начало</a></li>
               
                <li><a href="./?p=search">Рубрики</a></li>
                
              </ul>
            </div> <!-- .navbar-collapse -->
          </div>
        </nav>
      </header> <!-- .site-header -->
      <main class="site-main">
        <div id="home" class="section block-primary position-r align-c-xs-max">
          <div id="particles-js" class="site-bg">
            <div class="site-bg-img"></div>
            <div class="site-bg-video"></div>
            <div class="site-bg-overlay"></div>
            <div class="site-bg-effect layer" data-depth=".30"></div>
            <canvas class="site-bg-canvas layer particles-js-canvas-el" data-depth=".30"></canvas>
          </div> <!-- .site-bg -->

          <?php
          $name = $_GET['p'];
          if($name){
          $file = "switch/".$name."/index.php";
          if(file_exists($file))
            include $file;
          else
            include "switch/index/index.php";
                  }
                  else
                    header("Location: .?p=index");
          ?>
        </div> <!-- #download -->
      </main> <!-- .site-main -->
      <footer class="site-footer block-invert">
        <div class="container">
          <img class="site-footer-logo img-responsive" src="assets/img/logo_64.png" data-sr="bottom">
          <p class="site-footer-copyright">2017 &copy<a href="#" target="_blank">Математика +</a> | Всички права запазени!</p>
        </div>
      </footer> <!-- .site-footer -->
    </div>
  </div>

  <script src="assets/js/vendor/jquery-1.11.3.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.js"></script>
  <script src='assets/js/vendor/bootstrap.min.js'></script>
  <script src='assets/js/vendor/plugin.js'></script>
  <script src='assets/js/variable.js'></script>
  <script src='assets/js/main.js'></script>



</body>
</html>
