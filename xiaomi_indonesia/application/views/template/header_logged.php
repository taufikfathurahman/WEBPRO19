<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      <li class="nav-item" >
        <a class="nav-link"style="border-right:1px solid grey"href="https://www.mi.co.id/id/">mi indonesia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="border-right:1px solid grey" href="http://en.miui.com/forum/id">miui</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="border-right:1px solid grey" href="https://www.facebook.com/xiaomiindonesia/">ikuti kita di facebook</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="border-right:1px solid grey" href="https://c.mi.com/id/?utm_source=micomid">mi community</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
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
        <a class="nav-link" style="border-right:1px solid grey" href="#">PESAN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="border-right:1px solid grey" href="#">PESANAN SAYA</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="border-right:1px solid grey" href="<?php echo site_url('C_Keranjang'); ?>">KERANJANG</a>
      </li>
    </ul>
  </div>

</nav>

<nav class="navbar transparent navbar-expand-lg navbar-light">
  <div class="collapse navbar-collapse container-fluid" id="navbarSupportedContent">
    <div class="ui instant move reveal ">
      <div class="visible content ">
        <img src="<?php echo base_url(); ?>assets/image/icon2.png" class="ui small image d-block" style="width:60px;">
      </div>
      <div class="hidden content">
        <img src="<?php echo base_url(); ?>assets/image/icon1.png" class="ui small image d-block" style="width:60px;">
      </div>
    </div>
    <ul class="navbar-nav ml-auto nav2">
      <li class="nav-item">
        <a class="nav-link" href="#">mi phones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">redmi phones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">pocophone</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">mi TV</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Smart Device</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mi Power Bank</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('C_ListBarang'); ?>">Lainnya</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Audio</a>
      </li>
    </ul>
  </div>
</nav>