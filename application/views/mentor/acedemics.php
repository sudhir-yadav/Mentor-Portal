<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

                 
      <main class="mdl-layout__content mdl-color--grey-100">
        
          <div class="mdl-grid demo-content">
          <!-- <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            
          </div> -->
         <!--  <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col">
          <div style="padding:10px;border:.146em dashed #dadada;text-align:center;color:#dadada;font-size:16px;line-height:28px;">
             
             <i class="material-icons" style="color:#efefef;display:block;font-size:40px;margin:auto;" role="presentation">insert_drive_file</i>Upload your file here
             <button style="display: block;margin: auto;border:none;border-radius:20px;padding:2px 10px;margin-top:14px;outline: none;background:#549FBE;color:#fff;">Upload file here</button>

          </div>
          </div> -->
          




          <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col">
            

               <style>
                     .inputfile {
                                  width: 0.1px;
                                  height: 0.1px;
                                  opacity: 0;
                                  overflow: hidden;
                                  position: absolute;
                                  z-index: -1;
                                 }
                     .inputfile + label * {
                                            //pointer-events: none;
                                                background: #58A3C2;
                                              color: #fff;
                                              padding: 10px;
                                              display: inline-block;
                                              cursor: pointer;
                                          }
                      .draghover{
                        background:#F0F8FF;
                      }
               </style>



                     <form id="myid1" ondragover="myfunc()" style="padding: 10px;border:.146em dashed #dadada;" enctype='multipart/form-data' method="post" >
                       <input id="mycsvfile" onchange="fileHandler()" accept=".csv" class="inputfile " name="file" type="file"/>
                       <label for="mycsvfile"><strong>Choose a file</strong></label>
                       <button>Verify</button>
                     </form>

                     <hr/>

                     Instruction for use:<br/>
                     <ul>
                       <li>Do not keep blank space between entries </li>
                       <li>Do not keep blank space between entries </li>
                       <li>Do not keep blank space between entries </li>
                       <li>Do not keep blank space between entries </li>
                       <li>Do not keep blank space between entries </li>
                     </ul>

        

          </div>


          <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--12-col">
                
                     <?php 

              $mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
              // print_r($_FILES['file']['type']);
              if (isset($_FILES['file']['name']) && in_array($_FILES['file']['type'],$mimes)) 
              {  
                    $uploaddir = 'uploads/';
                    $ab = $_FILES['file']['name'];
                    $tmp = $_FILES['file']['tmp_name'];

                     $uploadfile = $uploaddir . $ab[0];
                  
                      $handle = fopen("$tmp","r");
                      echo "<pre>";
                       while (($data = fgetcsv($handle)) !== FALSE) 
                      {

                       /*echo $data[0]."<br/>";*/
                       print_r($data);    
                      }
                    echo "</pre>";
               }

              ?>

          </div>
          
        </div>

      </main>

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
                      this.result = outputArr;
                     // console.log(outputArr)
                       
                  }  
                 // return this.result;    
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

         

          function fileHandler(){
            
              var file = event.target.files;

             if(file)
             {
                  var file_nm = file[0].name;
               // var file_uri = event.srcElement.baseURI;
                  var file = event.target.files[0];
               //  console.log(file);
                   file.parseCsvFile();
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

                      var outputTxt = "<table id='exmple' style='width:100%;'>";

                      for(var i=0;i<outputArr.length;i++){
                       // console.log(outputArr[i]);
                       outputTxt +="<tr style='border:1px solid #dadada;'>";
                        for(var j=0;j<outputArr[i].length;j++){
                          console.log(outputArr[i][j]);
                          outputTxt +="<td style='border:1px solid #dadada;'>";
                          outputTxt +=outputArr[i][j];
                          outputTxt +="</td>";
                        }
                        outputTxt +="</tr>";
                      }

                       outputTxt +="</table>";

                      $('#popupContent').html(outputTxt);

                      $('#popup').show();
                  }


             }

          }


          $(document).ready(function(){
    $('#example').DataTable();
    
});


      </script>