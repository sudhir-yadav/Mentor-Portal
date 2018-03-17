<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

                 
      <main class="mdl-layout__content mdl-color--grey-100">
        
          <div class="mdl-grid demo-content">
          <!-- <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            
          </div> -->
         
         <?php for($i=0;$i<count($meetings);$i++){ ?>

          <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--4-col">
             

               <div class="row">
               <h3 class="mdl-card__title-text"><?php echo $meetings[$i]->ms_title; ?></h3>
               <small style="display:block;"><?php echo date("d-m-Y", strtotime($meetings[$i]->ms_meeting_date)); ; ?> &nbsp; <?php echo date('h:i a ', strtotime($meetings[$i]->ms_meeting_time)); ?> </small>
               <hr/>
               <p style="margin-top:10px;font-size:13px;"><?php echo $meetings[$i]->ms_description; ?></p>
               <hr/>
             <form action="<?php echo base_url('student/student-problems'); ?>" method="post"> 
                            <div class="col s12 ">
                                
                                <label>Problem faced : </label>
                                <select class="browser-default " name="problem">
                                  <option value="" disabled="true" selected="">Choose your option</option>
                                  <?php 
                                         for($j=0;$j<count($problems);$j++){
                                  ?>
                                  <option value="<?php echo $problems[$j]->pt_id; ?>"><?php echo $problems[$j]->pt_problem_name; ?></option>
                                  <?php } ?>
                                </select>
                             </div>
                            <div class="input-field col s12">
                                <label for="textarea1">Description :</label>
                                  <textarea style="margin-top:10px;" name="desc"  id="textarea1" class="materialize-textarea browser-default " length="120"></textarea>
                                  <input type="hidden" name="meeting_id" value="<?php echo $meetings[$i]->ms_id; ?>"/>
                                </div>
                           </div>

                          <button style="margin:auto;display:block;" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" data-upgraded=",MaterialButton,MaterialRipple">
                           <i class="material-icons">send</i>
                          <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                    
              </form>

          </div>

          <?php } ?>

           
             <pre>
              <?php
                  //  print_r($problems);
                   // print_r($meetings[0]);
               ?>
            </pre>
          
        </div>

        <script type="text/javascript">
          
 
      
        </script>

      </main>

     