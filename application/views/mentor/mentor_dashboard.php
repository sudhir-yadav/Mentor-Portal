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
      </style>    
  </head>

  <body class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

       <!-- <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header"> -->
      <header class="demo-header mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
        <h5>MENTORS DASHBOARD</h5>
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

        <header class="demo-drawer-header" style="height: 130px !important;background:url(<?php echo base_url('template/img/m1.jpg');?>)center no-repeat;">
         <img src="<?php echo base_url('template/img/user.jpg');?>" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>hello@nirmauni.ac.in</span>
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
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>STUDENTS
          </a>

          <a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i><!-- STUDENT'S --> ACADEMICS
          </a>

          <a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">book  </i>SUBJECTS
          </a>

          <a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">assignment</i>SYLLABUS
          </a>

          <a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">contacts</i>ALLOCATIONS
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
        
          <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#piechart" mask="url(#piemask)"></use>
              <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82<tspan font-size="0.2" dy="-0.07">%</tspan></text>
            </svg>
            <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#piechart" mask="url(#piemask)"></use>
              <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82<tspan dy="-0.07" font-size="0.2">%</tspan></text>
            </svg>
            <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#piechart" mask="url(#piemask)"></use>
              <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82<tspan dy="-0.07" font-size="0.2">%</tspan></text>
            </svg>
            <svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#piechart" mask="url(#piemask)"></use>
              <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82<tspan dy="-0.07" font-size="0.2">%</tspan></text>
            </svg>
          </div>
          <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
            <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#chart"></use>
            </svg>
            <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#chart"></use>
            </svg>
          </div>
          <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">Updates</h2>
              </div>
              <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                Non dolore elit adipisicing ea reprehenderit consectetur culpa.
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">Read More<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
              </div>
            </div>
            <div class="demo-separator mdl-cell--1-col"></div>
            <div class="demo-options mdl-card mdl-color--deep-purple-500 mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__supporting-text mdl-color-text--blue-grey-50">
                <h3>View options</h3>
                <ul>
                  <li>
                    <label for="chkbox1" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-upgraded is-checked" data-upgraded=",MaterialCheckbox,MaterialRipple">
                      <input type="checkbox" id="chkbox1" class="mdl-checkbox__input">
                      <span class="mdl-checkbox__label">Click per object</span>
                    <span class="mdl-checkbox__focus-helper"></span><span class="mdl-checkbox__box-outline"><span class="mdl-checkbox__tick-outline"></span></span><span class="mdl-checkbox__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple is-animating" style="width: 103.823px; height: 103.823px; transform: translate(-50%, -50%) translate(18px, 18px);"></span></span></label>
                  </li>
                  <li>
                    <label for="chkbox2" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-upgraded is-checked" data-upgraded=",MaterialCheckbox,MaterialRipple">
                      <input type="checkbox" id="chkbox2" class="mdl-checkbox__input">
                      <span class="mdl-checkbox__label">Views per object</span>
                    <span class="mdl-checkbox__focus-helper"></span><span class="mdl-checkbox__box-outline"><span class="mdl-checkbox__tick-outline"></span></span><span class="mdl-checkbox__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple is-animating" style="width: 103.823px; height: 103.823px; transform: translate(-50%, -50%) translate(18px, 18px);"></span></span></label>
                  </li>
                  <li>
                    <label for="chkbox3" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-upgraded" data-upgraded=",MaterialCheckbox,MaterialRipple">
                      <input type="checkbox" id="chkbox3" class="mdl-checkbox__input">
                      <span class="mdl-checkbox__label">Objects selected</span>
                    <span class="mdl-checkbox__focus-helper"></span><span class="mdl-checkbox__box-outline"><span class="mdl-checkbox__tick-outline"></span></span><span class="mdl-checkbox__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
                  </li>
                  <li>
                    <label for="chkbox4" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-upgraded" data-upgraded=",MaterialCheckbox,MaterialRipple">
                      <input type="checkbox" id="chkbox4" class="mdl-checkbox__input">
                      <span class="mdl-checkbox__label">Objects viewed</span>
                    <span class="mdl-checkbox__focus-helper"></span><span class="mdl-checkbox__box-outline"><span class="mdl-checkbox__tick-outline"></span></span><span class="mdl-checkbox__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple"></span></span></label>
                  </li>
                </ul>
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--blue-grey-50" data-upgraded=",MaterialButton,MaterialRipple">Change location<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
                <div class="mdl-layout-spacer"></div>
                <i class="material-icons">location_on</i>
              </div>
            </div>
          </div>
        </div>

      </main>

    <!-- </div> -->
  
    <script src="<?php echo base_url('/template/js/material.min.js');?>"></script>

</body>
   
   
</html>
