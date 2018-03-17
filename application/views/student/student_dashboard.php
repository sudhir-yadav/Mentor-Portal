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
      <!-- <link rel="stylesheet" href="<?php echo base_url('/template/css/materialize.min.css');?>"> -->
      <link rel="stylesheet" href="<?php echo base_url('/template/css/style.css');?>">

      <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="https://apis.google.com/js/platform.js" async defer></script>

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
        .demo-avatar-dropdown{
          background: rgba(0,0,0,0.5);
    padding: 5px;
    box-shadow: 0 0 10px rgba(255,255,255,0.5);
    //border-radius:3px;
        }
      </style>    
  </head>

  <body class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

       <!-- <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header"> -->
      <header class="demo-header mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
        <h5>STUDENTS DASHBOARD</h5>
          <div class="mdl-layout-spacer"></div>
          <!-- <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search" />
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div> -->
          <div class="material-icons mdl-badge mdl-badge--overlap" data-badge="1" >account_box</div>
          <span class="mdl-badge" data-badge="4">Inbox</span>


          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>
        </div>
      </header>


      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">

        <header class="demo-drawer-header" style="height: 200px !important;background:url(<?php echo base_url('template/img/user-img.jpg');?>)center no-repeat;background-size:110%;padding:0px;">
        <!--  <img src="<?php echo base_url('template/img/user.jpg');?>" class="demo-avatar"> -->
          <div class="demo-avatar-dropdown">
            <span>15mca057@nirmauni.ac.in</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons">arrow_drop_down</i>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">hello@nirmauni.ac.in</li>
              <li class="mdl-menu__item">info@example.com</li>
              <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
            </ul>
          </div>
        </header>
          
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">dashboard</i>DASHBOARD
          </a>

          <a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">description</i>COURCES
          </a>

          <a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">book  </i>SUBJECTS
          </a>

          <a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help</i>PROBLEMS
          </a>

          <a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">today</i>CALENDER
          </a>

          <a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">feedback</i>FEEDBACK
          </a>
          
        </nav>
      </div>
                 
      <main class="mdl-layout__content mdl-color--grey-100">

      </main>

    <!-- </div> -->
  
    <script src="<?php echo base_url('/template/js/material.min.js');?>"></script>

</body>
   
   
</html>
