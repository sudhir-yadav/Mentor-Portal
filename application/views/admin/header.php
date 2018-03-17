<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="Sudhir">
      <meta name="keyword" content="Dashboard, Admin panel">
      <link rel="shortcut icon" href="<?php echo base_url('/template/img/nirma_logo.png');?>">

      <title>NU | Mentor portal</title>

        <link href="<?php echo base_url('template/assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
      <!-- Custom styles for this template -->

      <link rel="stylesheet" type="text/css" href="<?php echo base_url('/template/css/device.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('/template/css/material.min.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('/template/css/materialize.min.css');?>"> 
      <link rel="stylesheet" href="<?php echo base_url('/template/css/style.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('/template/fonts/material-icon-fonts/material-icons.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('/template/fonts/roboto-fonts/roboto-fonts.css');?>">
      <script src="<?php echo base_url('/template/js/platform.js');?>" ></script>
      <script src="<?php echo base_url('/template/js/jquery.js');?>" ></script>
      <!-- 
      <script src="<?php echo base_url('/template/js/materialize.min.js');?>"></script>
 -->
   

        <link rel="stylesheet" href="<?php echo base_url('/template/fonts/material-icon-fonts/material-icons.css');?>">

      <style type="text/css">
        /*.demo-header
         {
              background: #3B97E7 !important;
              color: #fff !important;
          }*/
       .demo-layout .demo-navigation .mdl-navigation__link:hover 
       {
        background-color: #00BCD4;
        color: #fff;
        }
        .demo-drawer-header{
          background: #566268 !important;
        }
      </style>   
  </head>
  <body class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header mdl-layout--fixed-tabs">

       <!-- <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header"> -->
      <header class="demo-header mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
        <h5>ADMIN PANEL</h5>
          <div class="mdl-layout-spacer"></div>
        
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <a href="<?php echo base_url('admin/logout'); ?>"><li class="mdl-menu__item">LogOut</li></a>
          </ul>
        </div>

      </header>

