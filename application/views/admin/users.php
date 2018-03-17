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
select[name$='_length']{display:inline-block;float:left;}
div[id$='_filter'],#example_filter{width: 40%;float: right !important;}
td,th{text-align: center !important;}
.input_simple{
  border: 1px solid #DADADA !important;
    height: auto !important;
    padding: 10px !important;
    margin:auto !important;
    font-size:13px !important;
    border-radius: 2px !important;
    width:auto;
}
.input_err{border:1px solid red !important;}
.input_invisible{border:none;    border: none !important;
    padding: 0px !important;
    margin: 0px !important;}
       </style>  

 





      <main class="mdl-layout__content mdl-color--grey-100">
        
        <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
                 <div class="mdl-grid demo-content">


           <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col " >
             
               <h5 style="font-weight:300;">STUDENTS</h5>
               <!-- <hr/> -->

               <div style="border: 1px solid #dadada;padding: 10px;margin-bottom: 5px;">

                      <form id="myid1" style="width:auto;float:left;" enctype="multipart/form-data" method="post">
                       <input style="display:none;" id="mycsvfile" onchange="fileHandler()" accept=".csv" class="inputfile " name="file" type="file">
                       <label for="mycsvfile" class="mdl-button mdl-js-button mdl-button--raised  mdl-js-ripple-effect mdl-button--accent"><i class="mdl-color-text material-icons" role="presentation">description</i> ADD CSV</label>
                     </form>


                       <!-- <button  class="mdl-button mdl-js-button mdl-button--raised  mdl-js-ripple-effect mdl-button--accent">
                                     <i class="mdl-color-text material-icons" role="presentation">description</i> ADD CSV
                      </button> -->
                       <button STYLE="float:right;" id="addRow" class="mdl-button mdl-js-button mdl-button--raised  mdl-js-ripple-effect mdl-button--accent">
                                     <i class="mdl-color-text material-icons" role="presentation">add</i> ADD DATA
                      </button>
    
               </div>
               

              <table id="student_table" class="mdl-data-table" cellspacing="0" width="100%">
                 
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
                    
                       <?php $i=0; foreach ($students as $row){ ?>
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

          
        </div>
         </section>




         <section class="mdl-layout__tab-panel" id="scroll-tab-2">
           <div class="mdl-grid demo-content">


           <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col " >
             
               <h5 style="font-weight:300;">MENTORS</h5>
               <hr/>

               <div style="border: 1px solid #dadada;padding: 10px;margin-bottom: 5px;">
                       <button STYLE="" class="mdl-button mdl-js-button mdl-button--raised  mdl-js-ripple-effect mdl-button--accent">
                                     <i class="mdl-color-text material-icons" role="presentation">description</i> ADD CSV
                      </button>
                       <button STYLE="float:right;" id="addRow2" class="mdl-button mdl-js-button mdl-button--raised  mdl-js-ripple-effect mdl-button--accent">
                                     <i class="mdl-color-text material-icons" role="presentation">add</i> ADD DATA
                      </button>
    
               </div>

              <table id="teacher_table" class="mdl-data-table" cellspacing="0" width="100%">
                 
                  <thead>
                      <tr>
                      <!-- <td></td> -->
                          <th>ID</th>
                          <th>FIRST NAME</th>
                          <th>LAST NAME</th>
                          <th>EMAIL</th>
                         <!--  <th>DEPARTMENT</th> -->
                          <th></th>
                      </tr>
                  </thead>
            
                  <tbody>
                    
                       <?php $i=0; foreach ($teachers as $row){ ?>
                           <tr>

                                  <!-- <td><input type="checkbox" name="select_item[]" value="<?php echo $row->sm_id; ?>" id="ch<?php echo $i; ?>" /><label for="ch<?php echo $i; ?>"></label></td> -->
                                  
                                        <td><?php echo $row->mm_mentor_id; ?></td>
                                        <td style="text-transform: uppercase;">
                                           <?php echo $row->mm_mentor_name; ?>
                                        </td>
                                        <td style="text-transform: uppercase;"><?php echo $row->mm_last_name; ?></td>
                                        <td><?php echo $row->mm_email; ?></td>
                                        <!-- <td><?php echo $row->dm_dept_name; ?></td> -->
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

          
        </div>
         </section>

        
       

      </main>
     
<script src="<?php echo base_url('template/js/jquery.dataTables.js');?>"></script><!-- 
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" class="init">
  

$(document).ready(function() {
  var student_table = $('#student_table').DataTable();
  var teacher_table = $('#teacher_table').DataTable();
  var counter = 1;
   

   

  $('#addRow').on( 'click', function () {
    student_table.row.add( [
      '<input id="sid_'+counter+'" class="input_simple" placeholder="id" type="text"/>',
      '<input id="sname_'+counter+'" class="input_simple" placeholder="name" type="text"/>',
      '<input id="slname_'+counter+'" class="input_simple" placeholder="lastname" type="text"/>',
      '<input id="semail_'+counter+'" class="input_simple" placeholder="email" type="email"/>',
      '<button id="sbutton'+counter+'" value="'+counter+'" onclick="sendata(this.value);" class="mdl-button mdl-js-button mdl-button--raised  mdl-js-ripple-effect mdl-button--accent">\
       <i class="mdl-color-text material-icons" role="presentation">save</i> SAVE \
       </button> '
    ] ).draw(false);
    counter++;
  } );




   $('#addRow2').on( 'click', function () {
    teacher_table.row.add( [
      '<input id="tid_'+counter+'" class="input_simple" placeholder="id" type="text"/>',
      '<input id="tname_'+counter+'" class="input_simple" placeholder="name" type="text"/>',
      '<input id="tlname_'+counter+'" class="input_simple" placeholder="lastname" type="text"/>',
      '<input id="temail_'+counter+'" class="input_simple" placeholder="email" type="email"/>',
      '<button id="tbutton'+counter+'" value="'+counter+'" onclick="sendata(this.value);" class="mdl-button mdl-js-button mdl-button--raised  mdl-js-ripple-effect mdl-button--accent">\
       <i class="mdl-color-text material-icons" role="presentation">save</i> SAVE \
       </button> '
    ] ).draw(false);
       counter++;
  } );

  // Automatically add a first row of data
  // $('#addRow').click();
} );


/*function sendata(data)
{
   var uid = $('#id_'+data).val();
   if(uid == ''){
    console.log('x')
      $('#id_'+data).css('border-color','red !important');
       $('#id_'+data).addClass('input_err');
       setTimeout(function() { $('#id_'+data).removeClass('input_err') }, 500);
   }


}*/


  </script>


   <script>



        Array.prototype.cleanArr = function(deleteValue) 
        {
          for (var i = 0; i < this.length; i++) {
            if (this[i] == deleteValue) {         
              this.splice(i, 1);
              i--;
            }
          }
          return this;
        };


        File.prototype.parseCsvFile = function()
        {
              var reader = new FileReader();
                  reader.readAsText(this);
                  reader.onload = function()
                  {
                      var contents = event.target.result;
                      var fileTxt = contents.split(/\n/);
                      var entries= [];
                      var outputArr = new Array();
                      for(var i=0;i<fileTxt.length;i++)
                      { 
                          entries[i] = fileTxt[i].split(',');
                          outputArr.push(entries[i]);          
                      }
                  }  
                  return this.result;    
        };


          function parseCsvFile1(file)
          {
            if(typeof file == 'object')
            {
                var reader = new FileReader();
                  reader.readAsText(file);
                  reader.onload = function()
                  {
                      var contents = event.target.result;
                      var fileTxt = contents.split(/\n/);
                      var entries= [];
                      var outputArr = new Array();  
                      for(var i=0;i<fileTxt.length;i++)
                      { 
                          entries[i] = fileTxt[i].split(',');
                          outputArr.push(entries[i]);          
                      }
                      return outputArr;
                  } 
                  console.log(file);
   
             }else{return false;}
          }

         var attr = ["id","first_name","last_name","email"];
         var loc =  '<?php echo base_url('admin/users'); ?>';
          function fileHandler(){
            
              var file = event.target.files;

             if(file)
             {
                  var file_nm = file[0].name;
               // var file_uri = event.srcElement.baseURI;
                  var file = event.target.files[0];
               //  console.log(file);
                   var t= file.parseCsvFile();
                   //console.log("r"+t.result());
                   var m = parseCsvFile1(file);
                   console.log(m);  
                 //parseCsvFile(file);

                  var reader = new FileReader();
                  reader.readAsText(file);
                  reader.onload = function()
                  {
                      var contents = event.target.result;
                      var fileTxt = contents.split(/\n/);
                      fileTxt.cleanArr("");

                      var conText = "";

                      var entries= [];
                      var outputArr = []
                      for(var i=0;i<fileTxt.length;i++)
                      { 
                          entries[i] = fileTxt[i].split(',');
                          outputArr.push(entries[i]);          
                      }

                      var outputTxt = "<form action='"+loc+"' method='post'>";

  outputTxt += '<div class="csv_form_header" style="padding: 15px;background: #E9ECEC;display:block;overflow:hidden;">\
                                 <div style="float:left;width: auto;min-width:30%;">\
                                     <label for="file_nm">File Name:</label>\
                                     <input id="file_nm" style="display:block;" name="file_nm" type="text" value="Hello world "/>\
                                 </div>\
                                 <div style="border-left:1px solid #dadada;padding:0 15px;float:right">\
                                     <h3 style="text-align:center;margin:0;">'+(outputArr.length-1)+'<small style="display:block;font-size:15px;">\Entries</small></h3>\
                                 </div>\
                                 </div>';

                      outputTxt +="<div style='padding:10px;'><table id='exmple' style='width:100%;'>";

                    
                      
                      for(var i=0;i<outputArr.length;i++){
                       // console.log(outputArr[i]);
                        outputTxt +="<tr id='tr"+i+"' style='border:1px solid #dadada;'>";
                       if(i!=0)
                          { 
                             outputTxt +="<td style='border:1px solid #dadada; padding: 0 10px !important;'>"+i+"</td>";
                          }
                          else{
                            outputTxt +="<td style='border:1px solid #dadada; padding: 0 10px !important;'>Sr no</td>";
                          }
                        for(var j=0;j<outputArr[i].length;j++)
                        {
                           if(i==0)
                           {            
                               outputTxt +="<th style='border:1px solid #dadada; padding:10px !important;'>";
                               outputTxt +=outputArr[i][j];
                               outputTxt +="</th>";
                           }
                            else
                            {
                              outputTxt +="<td style='border:1px solid #dadada; padding: 0 10px !important;'>";
                              outputTxt +="<input required class='input_invisible' name='csv_data["+(i-1)+"]["+attr[j]+"]' type='text' value='"+outputArr[i][j]+"' />";
                              outputTxt +="</td>";
                            }
                          
                        }
                        if(i!=0)
                          { 
                             outputTxt +="<td ><a onclick='rmtblCol(\"tr"+i+"\");'><i class='mdl-color-text material-icons' role='presentation'>delete</i></a></td>";
                          }
                          else{
                            outputTxt +="<td ></td>";
                          }
                      }

                       outputTxt +='</table></div><div class="footer" style="padding: 15px;background: teal;color:#fff;"><input type="checkbox" name="acceptance" checked="false" id="acceptance_csv_dt"/><label class="mdl-color-text--white" for="acceptance_csv_dt"> I Accept that above given data is correct to best of my knowledge. </label><button style="float:right;" class="btn waves-effect waves-light" type="submit">Submit</button></div></form>';

                      $('#popupContent').html(outputTxt);

                      $('#popup').show();
                  }


             }

          }


          function rmtblCol(rid)
          {
            console.log(rid);
            $("#"+rid).remove();
          }


      </script>
