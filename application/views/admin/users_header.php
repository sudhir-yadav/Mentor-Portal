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


<div id="popup" class="popup" style="
   position: fixed;
    top: 0;
    left: 0;
    z-index: 999;
    display: block;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0, 0.38);
    display:none;
">
             
             <div id="popupContent" style="margin:20px 40px;max-width:75%;margin:auto;margin-top:15px;" class="mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col">


                   
<!-- 
                   <form action="http://localhost/nu_mentor_portal/admin/users" method="post">
                    
                                 <div class="csv_form_header" style="padding: 15px;background: #E9ECEC;display:block;overflow:hidden;">
                                 <div style="float:left;width: auto;min-width:30%;">
                                     <label for="file_nm">File Name:</label>
                                     <input id="file_nm" style="display:block;" name="file_nm" type="text" value="Hello world "/>
                                 </div>
                                 <div style="border-left:1px solid #dadada;padding:0 15px;float:right">
                                     <h3 style="text-align:center;margin:0;">80<small style="display:block;font-size:15px;">Entries</small></h3>
                                 </div>
                                 </div>

                   <div style="padding: 20px;max-height: 510px;overflow: auto;display: block;position: relative;/* margin: 10px; */"><table id="exmple" style="width:100%;"><tbody><tr style="border:1px solid #dadada;"><th style="border:1px solid #dadada; padding:10px !important;">Id</th><th style="border:1px solid #dadada; padding:10px !important;">Name</th><th style="border:1px solid #dadada; padding:10px !important;">Lastname</th><th style="border:1px solid #dadada; padding:10px !important;">Email
</th></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="0[id]" type="text" value="15mca119"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="0[first_name]" type="text" value="Lakhan"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="0[last_name]" type="text" value="samani"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="0[email]" type="text" value="15mca119@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[id]" type="text" value="15mca120"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[first_name]" type="text" value="harnish"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[last_name]" type="text" value="Soni"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="1[email]" type="text" value="15mca120@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="2[id]" type="text" value="15mca131"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="2[first_name]" type="text" value="Siddharth"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="2[last_name]" type="text" value="Hapale"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="2[email]" type="text" value="15mca131@nirmauni.ac.in
"></td></tr><tr style="border:1px solid #dadada;"><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="3[id]" type="text" value="15mca132"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="3[first_name]" type="text" value="Akshay"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="3[last_name]" type="text" value="kunte"></td><td style="border:1px solid #dadada; padding: 0 10px !important;"><input required="" class="input_invisible" name="3[email]" type="text" value="15mca132@nirmauni.ac.in
"></td></tr></tbody></table></div>
<div class="footer" style="padding: 15px;background: teal;"><button type="submit">Submit</button></div>

</form> -->


             </div>

          </div>





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


        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--grey-100">
            <a href="#scroll-tab-1" class="mdl-layout__tab is-active mdl-color-text--grey-600">ADD STUDENTS</a>
            <a href="#scroll-tab-2" class="mdl-layout__tab mdl-color-text--grey-600">ADD MENTORS</a>   
         </div>

      </header>
