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

      <link rel="stylesheet" type="text/css" href="<?php echo base_url('/template/css/device.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('/template/css/material.min.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('/template/css/materialize.min.css');?>"> 
      <link rel="stylesheet" href="<?php echo base_url('/template/css/style.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('/template/fonts/material-icon-fonts/material-icons.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('/template/fonts/roboto-fonts/roboto-fonts.css');?>">
      <script src="<?php echo base_url('/template/js/platform.js');?>" ></script>
      <script src="<?php echo base_url('/template/js/jquery.js');?>" ></script>
      
      <script src="<?php echo base_url('/template/js/materialize.min.js');?>"></script>

   

        <link rel="stylesheet" href="<?php echo base_url('/template/fonts/material-icon-fonts/material-icons.css');?>">

    
    <style>
              .login-body 
              {
              background:url(<?php echo base_url();?>template/img/nirma_campus.jpg)center top no-repeat;
              background:#F8F8F8;
              overflow: hidden;
              }     
              .form-signin 
              {
              max-width: 350px;
              margin: 130px auto 0;
              background:#fff;
              border-radius: 5px;
              -webkit-border-radius: 5px;
              padding:20px;
               box-shadow: 0 0 40px rgba(0,0,0,0.14);
              } 
              //.login-wrap{overflow:hidden;    box-shadow: 0 0 40px rgba(0,0,0,0.14);}
              .err_sec
              {
                    display:none;
                    font-size: 11px;
                    text-align: center;
                    background: #F43828;
                    color: #fff;
                    padding: 7px;
                    margin: 15px 10px;
                    border-radius: 3px;
              }
              .simple_input{margin:3px;}
    </style>
    
    
    
    
</head>

  <body class="login-body">

    <div class="container">

       

      <form id="sud1" action="<?php echo base_url(); ?>admin/login" method="post"  class="form-signin" >   
        <div class="login-wrap">         
            <div style="height:90px;width:90px;background:url(http://localhost/nu_mentor_portal/template/img/nirma_logo.png)center no-repeat;margin:15Px auto;background-size:100%;"></div>
            
           <h2 style="text-align:center;font-size:25px;font-weight: 300;margin: 25px auto;">MENTOR PORTAL <br/><small>ADMIN LOGIN</small></h2>
 
  
             <input class="simple_input"  placeholDer="user name" autocomplete="off"  type="text" name="admin_uname"/>
             <input class="simple_input"  placeholder="password" autocomplete="off"  type="password" name="admin_password"/>

             <button style="margin:auto;display:block;text-align: center;" class="btn waves-effect waves-light" type="submit">LOGIN
                      <i class="material-icons right">send</i>
              </button>

           

        </div>

        <div id="login-err" class='err_sec'></div> 

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
