<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<style type="text/css">
  .has_problem{
    background: rgba(255, 0, 0, 0.09);
  }
.demo-list-two {
  width: 300px;
}

.usr_img{width: 40px; height: 40px;border-radius: 50px;margin-right: 10px;display: inline-block;float:left;}

.paginate_button{

      padding: 5px 10px;
    margin: 2px;
    border: 1px solid #dadada;
    border-radius: 2px;
    text-align: center;
    display: inline-block;
    cursor:pointer;
}
.paginate_button:hover{
  background:#039be5;
  color:#fff;
}
.dataTables_info{padding:10px;}
.dataTables_length{float:left;}
select[name=example_length]{display:inline-block;float:left;}
#example_filter{width: 50%;float: right !important;}
td,th{text-align: center !important;}
       </style>  
                 
      <main class="mdl-layout__content mdl-color--grey-100">
        
          <div class="mdl-grid demo-content">

          

          <pre>
            
            <?php print_r($sessData); ?>

          </pre>




          <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col">
            
                <h5 style="font-weight:300;">Problem Raised (<?php echo count($sessData); ?>)</h5>
               <hr/>

              <table id="example" class="mdl-data-table " cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <!-- <th style="width:5%"></th> -->
                          <th>SR NO.</th>
                          <th>MEETING</th>
                          <th>STUDENT ID</th>
                          <th>NAME</th>
                          <!-- <th>LAST NAME</th> -->
                          <!-- <th>PROBLEM</th> -->
                          <th><!-- <i class=" material-icons" role="presentation">contact_mail</i> --> STATUS</th>
                      </tr>
                  </thead>
                  <tbody>

                       <?php $i=1; foreach ($sessData as $row){ ?>
                           <tr <?php if($row->sp_status == 0){echo "class='has_problem'"; } ?> >
                                  <!-- <td ><span class='usr_img' style="background:url('<?php echo $row->sm_user_img; ?>')center no-repeat;background-size:100%;"> </span></td> -->
                                  <td><?php echo $i; ?></td>
                                  <td><?php echo $row->ms_title; ?></td>
                                  <td><?php echo $row->sm_id; ?></td>
                                  <td style="text-transform: uppercase;"><?php echo $row->sm_name.' '.$row->sm_last_name; ?></td>
                                  <!-- <td style="text-transform: uppercase;"><?php echo $row->sm_last_name; ?></td> -->
                                   <!--<td><?php echo $row->pt_problem_name; ?></td> -->
                                  <td>
                                  <?php if($row->sp_status == 0){ ?>
                                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-button--accent">
                                     Resolve problem
                                   </button>
                                   <?php }else{ ?>
                                    <button class="mdl-button ">
                                     PROBLEM SOLVED
                                   </button>
                                   <?php } ?>

                                   </td>
                          </tr>
                       <?php $i++; } ?>
               
                  </tbody>
              </table>
        

          </div>
          
      

      <?php
/*
                echo "<pre>";
          print_r( $sessData);
*/
       ?>


         
          
        </div>

      </main>
<script src="<?php echo base_url('template/js/jquery.dataTables.js');?>"></script>
      <script>



          $(document).ready(function(){
    $('#example').DataTable();
    
});


      </script>