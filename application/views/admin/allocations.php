<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

       <style type="text/css">

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
#example_filter{width: 40%;float: right !important;}
td,th{text-align: center !important;}
.input_simple{
  border: 1px solid #DADADA !important;
    height: auto !important;
    padding: 10px !important;
    margin:auto !important;
    font-size:13px !important;
    border-radius: 2px !important;
}
.input_err{border:1px solid red !important;}
       </style>  

 





      <main class="mdl-layout__content mdl-color--grey-100">
        
        
          <div class="mdl-grid demo-content">
          <!-- <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            
          </div> -->


           <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col " >
             
               <h5 style="font-weight:300;">ALLOCATIONS</h5>
               <hr/>

               <div style="border: 1px solid #dadada;padding: 10px;margin-bottom: 5px;">
                       <button STYLE="width:150px;" class="mdl-button mdl-js-button mdl-button--raised  mdl-js-ripple-effect mdl-button--accent">
                                     <i class="mdl-color-text material-icons" role="presentation">description</i> ADD CSV
                      </button>
                       <button STYLE="width:150px;float:right;" id="addRow" class="mdl-button mdl-js-button mdl-button--raised  mdl-js-ripple-effect mdl-button--accent">
                                     <i class="mdl-color-text material-icons" role="presentation">add</i> ADD DATA
                      </button>
                      
                    <!--  <small style="display:block;"> DOWNLOAD THE CSV FORMAT FROM HERE </small> -->
               </div>
                
<!--  -->
              <table id="example" class="mdl-data-table" cellspacing="0" width="100%">
                 
                  <thead>
                      <tr>
                      <!-- <td></td> -->
                          <th>ID</th>
                          <th>FIRST NAME</th>
                          <th>LAST NAME</th>
                          <th>EMAIL</th>
                          <th></th>
                      </tr>
                  </thead>
            
                  <tbody>
                    
                       <?php $i=0; foreach ($sessData as $row){ ?>
                           <tr>

                                  <!-- <td><input type="checkbox" name="select_item[]" value="<?php echo $row->sm_id; ?>" id="ch<?php echo $i; ?>" /><label for="ch<?php echo $i; ?>"></label></td> -->
                                  
                                        <td><?php echo $row->sm_id; ?></td>
                                        <td style="text-transform: uppercase;">
                                           <?php echo $row->sm_name; ?>
                                        </td>
                                        <td style="text-transform: uppercase;"><?php echo $row->sm_last_name; ?></td>
                                        <td><?php echo $row->sm_email; ?></td>
                                        <td>
                                          <button class="btn waves-effect waves-light">
                                           <i class="mdl-color-text material-icons" role="presentation">mode_edit</i>
                                         </button>
                                         <button class="btn waves-effect waves-light">
                                           <i class="mdl-color-text material-icons" role="presentation">delete</i>
                                         </button>
                                        </td>
                                 
                          </tr>
                       <?php $i++; } ?>
                       
                  </tbody>
                  <tfoot>
                 <!--  <button STYLE="width:150px;" id="addRow" class="mdl-button mdl-js-button mdl-button--raised  mdl-js-ripple-effect mdl-button--accent">
                                     <i class="mdl-color-text material-icons" role="presentation">description</i>DELETE SELECTED</button> -->
                                     </tfoot>
              </table>

              

     


          </div>

            <?php

              //   print_r($sessData);

            ?>


          
        </div>

      </main>
     
<script src="<?php echo base_url('template/js/jquery.dataTables.js');?>"></script><!-- 
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" class="init">
  

$(document).ready(function() {
  var t = $('#example').DataTable();
  var counter = 1;

  $('#addRow').on( 'click', function () {
    t.row.add( [
      '<input id="id_'+counter+'" class="input_simple" placeholder="id" type="text"/>',
      '<input id="name_'+counter+'" class="input_simple" placeholder="name" type="text"/>',
      '<input id="lname_'+counter+'" class="input_simple" placeholder="lastname" type="text"/>',
      '<input id="email_'+counter+'" class="input_simple" placeholder="email" type="email"/>',
      '<button id="button'+counter+'" value="'+counter+'" onclick="sendata(this.value);" class="mdl-button mdl-js-button mdl-button--raised  mdl-js-ripple-effect mdl-button--accent">\
       <i class="mdl-color-text material-icons" role="presentation">save</i> SAVE \
       </button> '
    ] ).draw(false);

     //t.row.add("sudhir").draw( false );

    counter++;
  } );

  // Automatically add a first row of data
  // $('#addRow').click();
} );


function sendata(data)
{
   var uid = $('#id_'+data).val();
   if(uid == ''){
    console.log('x')
      $('#id_'+data).css('border-color','red !important');
       $('#id_'+data).addClass('input_err');
       setTimeout(function() { $('#id_'+data).removeClass('input_err') }, 500);
   }


}


  </script>