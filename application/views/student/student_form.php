<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sudhir">
    <meta name="keyword" content="Dashboard, Admin panel">
    <link rel="shortcut icon" href="<?php echo base_url();?>template/img/nirma_logo.png">

    <title>NU | Mentor portal</title>

    <link href="<?php echo base_url();?>template/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/css/device.css">
    <link rel="stylesheet" href="<?php echo base_url('template/css/material.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('template/css/materialize.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('template/css/student_form.css');?>">


     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
     <script src="https://code.getmdl.io/1.1.1/material.min.js"></script>
     <script src="<?php echo base_url('template/js/jquery.js');?>"></script>
     <script type="text/javascript">
         
      function isNumberKey(evt) 
      {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode != 46 && charCode > 31
        && (charCode < 48 || charCode > 57))
        return false;

        return true;
       };

      function alphaOnly(evt) 
      {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if ((charCode >= 65 && charCode <= 90)||(charCode >= 97 && charCode <= 122) || charCode == 8)
        return true;

        return false;
      };

     </script>


    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.1/material.indigo-pink.min.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    .demo-content {
    border-radius: 2px;
    padding: 30px 56px;
    margin-bottom: 80px;
}
    .demo-ribbon{
      background:#32B4D1;
    }
    </style>
    
<style type="text/css">
         .ele_border
         {
            border:1px solid #dadada;
         }
         .cstm_form_label
         {
            COLOR: rgb(165, 165, 165);FONT-SIZE: 10PX;FONT-WEIGHT: 100;
         }
         .cstm_input
         {
            display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 16px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: none;
 /* border-bottom: 1px solid #ccc;*/
  outline: none;
         }
         .cstm_select
         {
              height: 40px;
  width: 100%;
  border: 1px solid #dadada;
  outline: none;
  padding: 10px;
         }
         .cstm_select option
         {
            padding:10px;
            height:30px;
         }

         .nav>li>a {
  position: relative;
  display: block;
  padding: 15px;
}
/*         .simplebox {
  outline: none;

  -webkit-box-shadow: none !important;
  -moz-box-shadow: none !important;
  box-shadow: none !important;
}*/
    </style>

    <style type="text/css">
         .ele_border
         {
            border:1px solid #dadada;
         }
         .cstm_form_label
         {
            COLOR: rgb(165, 165, 165);FONT-SIZE: 12PX;FONT-WEIGHT: 100;
         }
         .cstm_input
         {
            display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 16px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: none;
 /* border-bottom: 1px solid #ccc;*/
  outline: none;
         }
         .cstm_select
         {
              height: 40px;
  width: 100%;
  border: 1px solid #dadada;
  outline: none;
  padding: 10px;
         }
         .cstm_select option
         {
            padding:10px;
            height:30px;
         }

         .nav>li>a {
  position: relative;
  display: block;
  padding: 15px;
}

.err-block{
  color:red;
  font-size:12px;
  margin:0px;
  display:none;
}
.hide-el{display:none;}
.show-el{display:block;}


/*         .simplebox {
  outline: none;

  -webkit-box-shadow: none !important;
  -moz-box-shadow: none !important;
  box-shadow: none !important;
}*/

td{
    border-right: 1px solid #dadada;
    border-radius: 0px;
    border-bottom: 1px solid #dadada;
    padding:15px;
}
/*td:last-child{
  border:none;
}*/
tr{
  border:1px solid #dadada;
}
.mdl-textfield{
  width:100%;
}
.mdl-textfield__label{
  font-size:14px;
}
h4 {
    margin: 10px 0 16px;
}

    </style>

    
    
</head>

    <body>
    <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
      <div class="demo-ribbon"></div>
      <main class="demo-main mdl-layout__content">
        <div class="demo-container mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
          
            <h4>STEP 1: Student Registration</h4>
               

              <table style="border:1px solid #dadada;border-collapse: inherit;border-radius:4px;">
                <tbody><tr>
                                              <td rowspan="3" style="width:200px;text-align:centerwidth: 200px;
    text-align: center;
    /*background: url(http://localhost/nu_mentor_portal/template/img/user-img.jpg)center no-repeat;*/
    background-size: 165%;">
  
  
                                                    <!-- <label class="cstm_form_label">USER PHOTO :</label> <br> -->
                                                    <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9IjcwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTQweDE0MDwvdGV4dD48L2c+PC9zdmc+" alt="..." class="img-rounded">
  
                                                </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                   <label class="cstm_form_label">NAME :</label>
                                                     <input type="text" onkeypress="return isNumberKey(event)"  class="cstm_input" placeholder="">  
                                                    <p class="help-block err-block">Invalid text</p>
                                                    
                                            </td>
                                            <td>

                                                     <label class="cstm_form_label" >MIDDLE NAME :</label>
                                                     <input type="text" onkeypress="return alphaOnly(event)"  class="cstm_input" placeholder="">  
                                                     <p class="help-block err-block">Invalid text</p>
                                            </td>
                                             <td>

                                                  <label class="cstm_form_label">SURNAME :</label>
                                                  <input type="text"  class="cstm_input" placeholder="">  
                                                  <p class="help-block err-block">Invalid text</p>
                                            </td>
                                        </tr>

                                         <tr>
                                            <td>
                                                     <label class="cstm_form_label">GENDER :</label><br/><br/>
                                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1">
                                                        <span class="mdl-radio__label">MALE</span>
                                                      </label>
                                                      &nbsp;&nbsp;
                                                      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                                        <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                                                        <span class="mdl-radio__label">FEMALE</span>
                                                      </label>
                                                    <p class="help-block err-block">Invalid text</p>
                                            </td>
                                            <td>
                                                    <label class="cstm_form_label">BIRTHDAY :</label>
                                                     <input type="date" format="dd/mm/yyyy" class="cstm_input" placeholder="">   
                                                     <p class="help-block err-block">Invalid text</p>
                                            </td>
                                             <td>
                                                  <label class="cstm_form_label">FIRST LANGUAGE :</label>
                                                     <input type="text"  value="English"  class="cstm_input" placeholder=""> 
                                                     <p class="help-block err-block">Invalid text</p> 

        
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="4">
                                                 <label class="cstm_form_label">CURRENT ADDRESS :</label>
                                                 <textarea style="  border: none;width: 100%;"> D-20 Amrutpark society near New Era High School , Makarpura , Vadodara 390010 </textarea>
                                                 <p class="help-block err-block">Invalid text</p>
                                            </td>
                                        </tr>
                                           
                                           <tr>
                                            <td colspan="4">
                                                 <label class="cstm_form_label">PERMANENT ADDRESS :</label>
                                                 <textarea style="  border: none;width: 100%;"> D-20 Amrutpark society near New Era High School , Makarpura , Vadodara 390010 </textarea>
                                                 <p class="help-block err-block">Invalid text</p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                   <label class="cstm_form_label">PHONE NUMBER :</label>
                                                     <input type="text"  value="9574******"  class="cstm_input" placeholder="">  
                                                    <p class="help-block err-block">Invalid text</p>
                                            </td>
                                            <td>
                                                    <label class="cstm_form_label">PHONE NUMBER (PERSONAL) :</label>
                                                     <input type="text"  value="9574******" class="cstm_input" placeholder="">  
                                                    <p class="help-block err-block">Invalid text</p>
                                            </td>
                                             <td colspan="2">
                                                   <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                                                      <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                                                      <span style="font-size:12px;" class="mdl-checkbox__label">I Agree the all given information is correct to best of my knowledge .</span>
                                                    </label>
                                                   <p class="help-block err-block">Please Agree to terms and conditions</p>
                                            </td>
                                            
                                        </tr>
                                        


                                </tbody></table>
                                <br/>

                                <button style="margin:auto;display:block;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  Submit
</button>

          </div>
        </div>
        <footer class="demo-footer mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            NIRMA UNIVERSITY &COPY; 2016
          </div>
        </footer>
      </main>
    </div><!-- 
    <script src="https://code.getmdl.io/1.1.1/material.min.js"></script>
   -->


   
  
   <script type="text/javascript">


    

     function checkAphaNum(alphaNum)
     {
       var regEx = /^[a-z0-9]+$/i ;
       regEx.test(alphaNum) ? true : false ;
     }
     function checkNum(numVal){
        var regEx = /^\d+$/
        regEx.test(numVal) ? true : false ;
     }
     function checkAlpha(alphaVal)
     {
        var regEx = /^[a-zA-Z]+$/;
        regEx.test(alphaVal) ? true : false ; 
     }
     function checkEmail(emailVal)
     {
       var regEx = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
       regEx.test(emailVal) ? true :  false ;
     }
     function checkPhone(phoneVal){
       var regEx =/^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
       regEx.test(phoneVal) ? true : false ;
     }

     function checkTxtLength(txt,eLen,sLen)
     {
        var txtlngth =  txt.length;
        (txtlngth <= elen &&  txtlngth >= sLen ) ? true : false;
     }

       
   </script>





   </body>
   
    
</html>
