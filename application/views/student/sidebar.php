<?php defined('BASEPATH') OR exit('No direct script access allowed'); /*$m = $this->session->userdata();*/  $m['userdata']['user_img'] = "hello.png" ?>

     <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">

        <header class="demo-drawer-header" style="height: 200px !important;background:url('<?php echo $userdata['user_img'];?>')center no-repeat;background-size:100%;padding:0px;">
        <!--  <img src="<?php echo base_url('template/img/user.jpg');?>" class="demo-avatar"> -->
          <div class="demo-avatar-dropdown">
            <span> <?php  echo $userdata['name']." &nbsp;".$userdata['last_name']; ?></span>
           <!--  <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons">arrow_drop_down</i>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">hello@nirmauni.ac.in</li>
              <li class="mdl-menu__item">info@example.com</li>
              <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
            </ul> -->
          </div>
        </header>
          
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="<?php echo base_url('student'); ?>">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">dashboard</i>DASHBOARD
          </a>

          
          <a class="mdl-navigation__link " href="<?php echo base_url('student/meetings'); ?>">
            <i class="mdl-color-text--blue-grey-400 material-icons  mdl-badge mdl-badge--overlap" data-badge="4<?php //echo count($meetings); ?>" role="presentation">today</i> 
             MEETING  <!-- <span class="mdl-badge" data-badge="4"></span> -->
          </a>

          <a class="mdl-navigation__link" href="<?php echo base_url('student/problems'); ?>">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help</i>PROBLEMS
          </a>


          <a class="mdl-navigation__link" href="<?php echo base_url('student/feedback'); ?>">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">feedback</i>FEEDBACK
          </a>
          
          

          <!-- <a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">today</i>CALENDER
          </a>


          <a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">description</i>COURSES
          </a>

          <a class="mdl-navigation__link" href="">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">book  </i>SUBJECTS
          </a> -->



        </nav>
      </div>
                 
  