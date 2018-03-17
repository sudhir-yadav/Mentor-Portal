<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sudhir">
    <meta name="keyword" content="Dashboard, Admin panel">
    <link rel="shortcut icon" href="<?php echo base_url();?>/template/img/nirma_logo.png">

    <title>NU | Mentor portal</title>

    <link href="<?php echo base_url();?>template/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/template/css/device.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/template/css/material.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/template/css/materialize.min.css">
   
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    
    <style>
        .login-body {
        background:url(<?php echo base_url();?>template/img/nirma_campus.jpg)center top no-repeat;
        background:#F8F8F8;
        overflow: hidden;
      }     
        .form-signin {
    max-width: 350px;
    margin: 150px auto 0;
    background: rgba(243, 240, 240, 0.5);
    background:#fff;
    border-radius: 5px;
    -webkit-border-radius: 5px;
} 
        .login-wrap{overflow:hidden;    box-shadow: 0 0 40px rgba(0,0,0,0.14);}
        .err_sec{
          display:none;
          font-size: 11px;
    text-align: center;
    background: #F43828;
    color: #fff;
    padding: 7px;
    margin: 15px 10px;
    border-radius: 3px;
        }
    </style>
    
    
    
    
</head>

  <body class="login-body">

    <div class="container">

      <form id="sud1" style="/*display:none;*/" class="form-signin" action="index.html">   
        <div class="login-wrap">         
            <div style="height:100px;width:100px;background:url(<?php echo base_url();?>template/img/nirma_logo.png)center no-repeat;margin:20px auto;background-size:100%;"></div>
            
           <h2 style="text-align:center;font-size:25px;font-weight:700;margin:30px auto; ">NIRMA UNIVERSITY<small style="display:block;margin-top:5px;">MENTOR PORTAL</small></h2> 
             <div id="login-err" class='err_sec'></div>
            <div style="padding:10px;background: #32B4D1;">
            <a style="box-shadow: 0 0 14px rgba(0,0,0,0.3);margin:auto;text-align:center;display:block;width: 40%;border-radius: 10pc;color:#32B4D1;background:#fff;padding:10px;" href="<?php echo $authUrl; ?>"> <i class="icon-google-plus"></i>  LOGIN </a>
            </div>

        </div>

      </form>

    </div>
    
    
    

    <script src="<?php echo base_url();?>template/js/jquery.js"></script>
     <script>

      var err_ses = 0;
      <?php if(isset($_SESSION['error'])){echo "err_ses = 1";} ?>

     if(err_ses == 1)
     {
        $('#login-err').html('<?php if(isset($_SESSION['error'])){ echo $_SESSION['error']; $this->session->unset_userdata('error'); } ?>');
        $('#login-err').fadeIn(2000).delay(2500).fadeOut(1200);
     }
      

      </script>

  </body>
    
    
    
    
    
    
    
</html>
