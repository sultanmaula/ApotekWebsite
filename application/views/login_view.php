<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>APOTIK SEHAT - LOGIN</title>

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body >
  
  <div id="login-page">
    <div class="container">

       <?php
        if(!empty($notif)){
          echo '<div class="alert alert-danger">';
          echo $notif;
          echo '</div>';}
        ?>

      <form class="form-login" method="post" action="<?php echo base_url();?>index.php/user/masuk">
        <h2 class="form-login-heading">halaman login</h2>
        <div class="login-wrap">
          <input type="text" name="nama_kasir" id="nama_kasir" class="form-control" value="" placeholder="Username" autofocus>
          <br>
          <input type="password" name="password" id="password" class="form-control" value="" placeholder="Password"> <br>
      
          <input type="submit" name="simpan" id="simpan" value="SIGN IN" class="btn btn-theme btn-block">
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url();?>assets/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="<?php echo base_url();?>assets/lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/background.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
