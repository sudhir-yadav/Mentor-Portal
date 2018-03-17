<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<style type="text/css">
	.feed_head {
    width: 12px !important;
    overflow: hidden;
    /* display: table-column; */
    font-size: 11px;
    text-align: center !important;
}
.txt_cntr{
text-align:center;
}

.mdl-data-table {
    position: relative;
    border: 1px solid rgba(0,0,0,.12);
    border-collapse: collapse;
     white-space: inherit; 
    font-size: 13px;
    background-color: #fff;
}
</style>
                 
     <main class="mdl-layout__content mdl-color--grey-100">
        
      <div class="mdl-grid demo-content">
         <?php $j = 0; foreach ($meeting_details as $row1){ ?>
             <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col">
               <h5><?php echo $row1->ms_title; ?> <small style="display:block;""><?php echo date("d-M-Y",strtotime($row1->ms_meeting_date)); ?> , <?php echo $row1->ms_meeting_time; ?></small></h5> 
               
                <form action="<?php echo base_url('student/submit-feedback');?>" method="post">

                <table style="text-align:left;" id="example" class="mdl-data-table" cellspacing="0" width="100%">
                 
                  <tbody>
                  <tr >
                          <td rowspan="2" style="border-right:1px solid #dadada;"></td>
                          
                          <td colspan="5" style="text-align:center;"> PLEASE CHECK APPROPRIATE OPTIONS </td>
                      </tr>
                       <tr>
                          <!-- <td rowspan="2" >ID</td> -->
                           <td class="feed_head"> Strongly agree</td>
                           <td class="feed_head">Agree</td>
                           <td class="feed_head">Neutral</td>
                           <td class="feed_head">Disagree</td>
                           <td class="feed_head">Strongly Disagree</td>
                          
                      </tr>
                      <!-- <tr>
                          <td class="feed_head"> 1</td><td class="feed_head">2</td><td class="feed_head">3</td><td class="feed_head">4</td class="feed_head"><td class="feed_head">5</td>
                       
                      </tr> -->

                       <?php $i = 0; foreach ($feedback_questions as $row){ ?>
                           <tr>
                                  <td style="text-transform: uppercase;text-align: left;border-right:1px solid #dadada;"><?php echo $row->fq_text; ?></td>

                                   <td class="txt_cntr">
                                   <input class="with-gap" type="radio"  id="test<?php echo $row->fq_id.$j.$i; ?>" name="questions[<?php echo $row->fq_id; ?>]" value="5"  />
                                   <label for="test<?php echo $row->fq_id.$j.$i; ?>"></label></td>

                                   <td class="txt_cntr">
                                   <input class="with-gap" required type="radio" id="test<?php echo $row->fq_id.$j.$i+1; ?>" name="questions[<?php echo $row->fq_id; ?>]" value="4" />
                                   <label for="test<?php echo $row->fq_id.$j.$i+1; ?>"></label></td>

                                   <td class="txt_cntr">
                                   <input class="with-gap" required type="radio" id="test<?php echo $row->fq_id.$j.$i+2; ?>" name="questions[<?php echo $row->fq_id; ?>]" value="3" />
                                   <label for="test<?php echo $row->fq_id.$j.$i+2; ?>"></label></td>

                                   <td class="txt_cntr">
                                   <input class="with-gap" required type="radio" id="test<?php echo $row->fq_id.$j.$i+3; ?>" name="questions[<?php echo $row->fq_id; ?>]" value="2" />
                                   <label for="test<?php echo $row->fq_id.$j.$i+3; ?>"></label></td>

                                   <td class="txt_cntr">
                                   <input class="with-gap" required type="radio" id="test<?php echo $row->fq_id.$j.$i+4; ?>" name="questions[<?php echo $row->fq_id; ?>]" value="1" />
                                   <label for="test<?php echo $row->fq_id.$j.$i+4; ?>"></label></td>
                          </tr> 
                          
                       <?php $i++; } ?>

               
                  </tbody>
              </table>
              <br/>
                 <input type="hidden" name="meeting_id" value="<?php echo $row1->ms_id; ?>" >
                  <button type="submit" class="waves-effect waves-light btn">SUBMIT</button>
              </form>
               

             </div>

              <?php  $j++; } ?>

             <!-- <pre>

                

                <?php  print_r($meeting_details); ?> -->
      </div>


     </main>