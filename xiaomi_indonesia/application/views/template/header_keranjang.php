<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/semantic/semantic.min.css">
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/semantic/semantic.min.js"></script>
    <link rel="icon" href="<?php echo base_url(); ?>assets/image/icon2.PNG" type="image/png" sizes="16x16">
    <title>Xiaomi Indonesia | Website KW | MI.com - MI Indonesia</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse container-fluid" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
    </ul>
  </div>
</nav>

<nav class="navbar transparent navbar-expand-lg navbar-light bg-white ">
  <div class="collapse navbar-collapse container-fluid" id="navbarSupportedContent">
    <div class="ui instant move reveal ">
      <div class="visible content ">
        <img src="<?php echo base_url(); ?>assets/image/icon2.png" class="ui small image d-block" style="width:60px;">
      </div>
      <div class="hidden content">
        <img src="<?php echo base_url(); ?>assets/image/icon1.png" class="ui small image d-block" style="width:60px;">
      </div>
    </div>
    <ul class="navbar-nav mr-auto nav2">
      <li class="nav-item">
       <a class="nav-link">
       <h1> Keranjang Saya </h1>
        </a> 
      </li>
    </ul>
   

      <ul class="navbar-nav ml-auto nav2">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toogle" data-toggle="dropdown" id="navbardrop" style="border-right:1px solid grey" href="#">Mi Akun</a>
        <div class="dropdown-menu dropdown-menu-right" >
        <a style="margin-top: 10px" class="dropdown-item" href="<?php echo site_url('C_Akun'); ?>">
          <?php
          $cookie = $this->input->cookie('logged');
          if(isset($cookie)){
            echo $cookie;
          } else if(isset($_SESSION['successLogin'])) {
            echo $_SESSION['successLogin'];
          }
          ?>
        </a>
        <a style="margin-top: 10px"class="dropdown-item" href="<?php echo site_url('C_User/Logout'); ?>">Logout</a>
        </div>
        </li>
       <li class="nav-item">
             <a class="nav-link"href="#" > PESAN </a>
          </li>   
          <li class="nav-item">
             <a class="nav-link"href="#" >PESANAN SAYA </a> 
          </li>
      </ul>
    </div>
    
    </ul>
  </div>
</nav>
<nav class="site-navigation"> 
    <div class="Jcurtain" class="curtain index">
        <div class="container">
            <div class="milogo">
                <a href="//www.mi.co.id/id/index.html"
                    <img src="<?php echo base_url(); ?>assets/image/mihome1.jpg"
            </div>
        </div>
    </div>
</nav>
<div class="jarak4">
    <div class="rows">
    <div class="col"><hr></div>
</div>

