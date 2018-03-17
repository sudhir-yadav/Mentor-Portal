<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="Sudhir">
      <meta name="keyword" content="Dashboard, Mentor Panel">
      <link rel="shortcut icon" href="<?php echo base_url('/template/img/nirma_logo.png');?>">

      <title>NU | Mentor portal</title>

      <!-- Custom styles for this template -->

      <link rel="stylesheet" type="text/css" href="<?php echo base_url('/template/css/device.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('/template/css/material.min.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('/template/css/materialize.min.css');?>" media="screen,projection"> 
      <link rel="stylesheet" href="<?php echo base_url('/template/css/style.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('/template/css/popup.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('/template/fonts/material-icon-fonts/material-icons.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('/template/fonts/roboto-fonts/roboto-fonts.css');?>">

      <!-- <script src="<?php echo base_url('/template/js/platform.js');?>" ></script> -->
      <script src="<?php echo base_url('/template/js/jquery.js');?>" ></script> 
      <script src="<?php echo base_url('/template/js/materialize.min.js');?>"></script>  
      <script src="<?php echo base_url('/template/js/charts/Chart.bundle.js');?>"></script>

      <style type="text/css">
    .pop_alert{   
        position: absolute;
    width: 68%;
    z-index: 99999;
    background: rgba(29, 154, 199, 0.55);
    margin: 10px 16%;
    padding: 15px;
    color: #fff;
    box-shadow: 0 0 6px rgba(8, 8, 8, 0.2);
    border-radius: 3px;
    text-align: center;
  }
      </style>


  </head>


  <body class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

  <!-- <div class="pop_alert">sudhir</div> -->
      
      <header class="demo-header mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <h5><?php echo $title; ?></h5>
          <div class="mdl-layout-spacer"></div>
        
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">LogOut</li>
          </ul>
        </div>
      </header>


