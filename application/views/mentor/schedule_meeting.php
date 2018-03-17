<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!-- <script>
      position: absolute;
    width: 74%;
    /* margin: auto; */
    z-index: 10000;
    background: rgba(255, 0, 0, 0.9);
    padding: 13px;
    margin: 8px 13%;
    color: #fff;
    text-align: center;
    border-radius: 3px;
    box-shadow: 0 0 8px rgba(0,0,0,0.3);
</script> -->
                 
      <main class="mdl-layout__content mdl-color--grey-100">
        
          <div class="mdl-grid demo-content">
          <!-- <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            
          </div> -->

        <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
          <div class=" mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
              <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                <h2 class="mdl-card__title-text">Schedule Meeting</h2>
              </div>
              <div class="mdl-card mdl-color-text--grey-600">
                <form style="padding:10px;" action="<?php echo base_url(); ?>mentor/setMeetingDetails" method="post" class="col s12">
                  <div class="row">
                    <div class=" col s12">
                       <label for="title"  data-success="Valid data">Title of Meeting :</label>
                      <input id="title" type="text" name="title" class="validate">
                      <!-- <label>sudhir</label> -->
                    </div>
                    <div class=" col s7">
                      <label for="date"  data-success="Valid data">Date of Meeting :</label> 
                      <input id="date" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date("Y-m-d", strtotime("+5 months")); ?>" type="date"  class="datepicker" name="date" placeholder="yyyy-mm-dd" class="datepicker">
                      
                      
                    </div>
                   <div class=" col s5">
                      <label for="date"  data-success="Valid data">Time of Meeting :</label> 
                      <input id="date"   type="time" name="time" class="datepicker">
                    </div>

                  </div>
                  <div class="row">
                    <div class=" col s12">
                       <label for="summary" data-success="right">Summary :</label>
                      <textarea id="summary" length="120" name="summary" class="materialize-textarea validate"></textarea>  
                      
                    </div>
                  </div>
                   <div class="row">
                    <button style="margin:auto;display:block;text-align: center;" class="btn waves-effect waves-light" type="submit" >Submit
                      <i class="material-icons right">send</i>
                    </button>
                  </div>

                  
                </form>
              </div>
              
            </div>
            </div>

          <div class=" mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-grid">
             <div class="mdl-card__title mdl-card--expand ">
                <h2 class="mdl-card__title-text">Schedule Meeting</h2>
              </div>
            <ul>
              <li class="mdl-card__supporting-text">
                    <!-- <div class="mdl-card__supporting-text"> -->
                      <h5>MEETING TITLE <small style="display: block;">24/10/1994 Thursday</small></h5>
                      Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
                      <button style="margin-top:10px;display:block;text-align: center;" class="btn waves-effect waves-light" type="submit" name="action">Submit
                      <i class="material-icons right">send</i>
                    </button>
                    <!-- </div> -->
              </li>
              <li class="mdl-card__supporting-text">
                    <!-- <div class="mdl-card__supporting-text"> -->
                      <h5>MEETING TITLE <small style="display: block;">24/10/1994 Thursday</small></h5>
                      Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.

                      <button style="margin-top:10px;display:block;text-align: center;" class="btn waves-effect waves-light" type="submit" name="action">Submit
                      <i class="material-icons right">send</i>
                    </button>
                    <!-- </div> -->
              </li>

              <li class="mdl-card__supporting-text">
                    <!-- <div class="mdl-card__supporting-text"> -->
                      <h5>MEETING TITLE <small style="display: block;">24/10/1994 Thursday</small></h5>
                      Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.

                      <button style="margin-top:10px;display:block;text-align: center;" class="btn waves-effect waves-light" type="submit" name="action">Submit
                      <i class="material-icons right">send</i>
                    </button>
                    <!-- </div> -->
              </li>


              <li class="mdl-card__supporting-text">
                    <!-- <div class="mdl-card__supporting-text"> -->
                      <h5>MEETING TITLE <small style="display: block;">24/10/1994 Thursday</small></h5>
                      Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.

                      <button style="margin-top:10px;display:block;text-align: center;" class="btn waves-effect waves-light" type="submit" name="action">Submit
                      <i class="material-icons right">send</i>
                    </button>
                    <!-- </div> -->
              </li>


              <li class="mdl-card__supporting-text">
                    <!-- <div class="mdl-card__supporting-text"> -->
                      <h5>MEETING TITLE <small style="display: block;">24/10/1994 Thursday</small></h5>
                      Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.

                      <button style="margin-top:10px;display:block;text-align: center;" class="btn waves-effect waves-light" type="submit" name="action">Submit
                      <i class="material-icons right">send</i>
                    </button>
                    <!-- </div> -->
              </li>


              <li class="mdl-card__supporting-text">
                    <!-- <div class="mdl-card__supporting-text"> -->
                      <h5>MEETING TITLE <small style="display: block;">24/10/1994 Thursday</small></h5>
                      Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.

                      <button style="margin-top:10px;display:block;text-align: center;" class="btn waves-effect waves-light" type="submit" name="action">Submit
                      <i class="material-icons right">send</i>
                    </button>
                    <!-- </div> -->
              </li>


              <li class="mdl-card__supporting-text">
                    <!-- <div class="mdl-card__supporting-text"> -->
                      <h5>MEETING TITLE <small style="display: block;">24/10/1994 Thursday</small></h5>
                      Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.

                      <button style="margin-top:10px;display:block;text-align: center;" class="btn waves-effect waves-light" type="submit" name="action">Submit
                      <i class="material-icons right">send</i>
                    </button>
                    <!-- </div> -->
              </li>


              <li class="mdl-card__supporting-text">
                    <!-- <div class="mdl-card__supporting-text"> -->
                      <h5>MEETING TITLE <small style="display: block;">24/10/1994 Thursday</small></h5>
                      Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.

                      <button style="margin-top:10px;display:block;text-align: center;" class="btn waves-effect waves-light" type="submit" name="action">Submit
                      <i class="material-icons right">send</i>
                    </button>
                    <!-- </div> -->
              </li>
            </ul>
            
            


          </div>
            
            
          </div>
        </div>

      </main>



<script>

</script>