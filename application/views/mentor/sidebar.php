<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">

        <header class="demo-drawer-header" style="height: 130px !important;background:url(<?php echo base_url('template/img/m1.jpg');?>)center no-repeat;">
         <img src="<?php echo base_url('template/img/user.jpg');?>" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>hello@nirmauni.ac.in</span>
            <!--<div class="mdl-layout-spacer"></div>
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
          <a class="mdl-navigation__link" href="<?php echo base_url('mentor'); ?>">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">dashboard</i>DASHBOARD
          </a>

          <a class="mdl-navigation__link" href="<?php echo base_url('mentor/students'); ?>">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>STUDENTS
          </a>

          <a class="mdl-navigation__link" href="<?php echo base_url('mentor/schedule-meeting'); ?>">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">today</i> MEETING
          </a>

           <a class="mdl-navigation__link" href="<?php echo base_url('mentor/problems'); ?>">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help</i>PROBLEMS
          </a>

          <a class="mdl-navigation__link" href="<?php echo base_url('mentor/feedback'); ?>">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">feedback</i>FEEDBACK
          </a>

      <!--<a class="mdl-navigation__link" href="<?php echo base_url('mentor/acedemics'); ?>">
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i> ACADEMICS
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
            <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">today</i>CALENDER
          </a>

           -->
          
        </nav>
      </div>
                 
  