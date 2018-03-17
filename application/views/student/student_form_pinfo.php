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
    <link rel="stylesheet" href="<?php echo base_url('/template/fonts/material-icon-fonts/material-icons.css');?>">


     <link rel="stylesheet" href="<?php echo base_url('/template/fonts/roboto-fonts/roboto-fonts.css');?>">
      <script src="<?php echo base_url('template/js/jquery.js');?>"></script>
     <script src="<?php echo base_url('/template/js/materialize.min.js');?>"></script>

     <script src="https://code.getmdl.io/1.1.1/material.min.js"></script>
    
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
            color: rgb(165, 165, 165);
            font-size: 10px;
            font-weight: 100;
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
            border: none !important;
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

.mp_header{
  font-weight: 300;
    font-size: 25px;
    color: #6b6b6b;
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
      margin: 0 0 7px 0 !important;
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
    padding:10px;
}
/*td:last-child{
  border:none;
}*/
tr{
  border:1px solid #dadada;
}
.mdl-textfield{
  width:100%;
  outline: none !important;
}
.mdl-textfield__label{
  font-size:14px;
}
h4 {
    margin: 10px 0 16px;
}
.show{
  display: block !important;
}



.m-fadeOut {
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s linear 300ms, opacity 300ms;
}
.m-fadeIn {
  visibility: visible;
  opacity: 1;
  transition: visibility 0s linear 0s, opacity 300ms;
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
          
            <h4 class="mp_header">STEP 1:  PERSONAL DETAILS</h4>
               
              <!--  <pre> <?php /* print_r($user_data);*/ ?> </pre> -->

              <form action="<? echo base_url('student/get-personal-details');?>" onsubmit="return checkform()" method="post">

              <table style="border:1px solid #dadada;border-collapse: inherit;border-radius:4px;    border-right: none;
    border-bottom: none;">
                <tbody><tr>
                          <td id="disp_user_img" rowspan="3" style="width:200px;text-align:centerwidth: 200px;text-align: center; background: url(<?php echo $user_data['user_img']; ?>)center no-repeat; background-size: 100%;    border: 5px solid #dadada;position:relative;" onmouseover="$('#user_img_lbl').show();" onmouseout="$('#user_img_lbl').hide();">
                                                    <label id="user_img_lbl" for="student_img" style="
    color: #fff;
    background: rgba(0, 0, 0, 0.14);
    height: 100%;
    display: block;
    width: 100%;
    line-height: 12;
    position: absolute;
    font-size: 15px;
    top: 0;
    font-family: Roboto;
    left: 0;
    display:none;
    cursor:pointer;
">Change image</label>
                                                    <input value="<?php echo $user_data['user_img']; ?>" style="display:none;" id="student_img" type="file" name="student_img" >
                                                    <!-- <label class="cstm_form_label">USER PHOTO :</label> <br> -->
                                                    <!-- <img style="height:170px;border-radius:4px;" src="<?php echo $user_data['user_img']; ?>" alt="..." class="img-rounded"> -->
  
                                                </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                   <label class="cstm_form_label">NAME :</label>
                                                     <input type="text" value="<?php echo $user_data['name']; ?>" onkeypress="return alphaOnly(event)"  class="cstm_input" placeholder="" id="student_fname" name="student_fname">  
                                                    <p class="help-block err-block">23</p>
                                                    
                                            </td>
                                            <td>

                                                     <label class="cstm_form_label" >MIDDLE NAME :</label>
                                                     <input type="text"  onkeypress="return alphaOnly(event)"  class="cstm_input" placeholder="" id="student_mname" name="student_mname">  
                                                     <p class="help-block err-block"></p>
                                            </td>
                                             <td>

                                                  <label class="cstm_form_label">SURNAME :</label>
                                                  <input type="text" value="<?php echo $user_data['last_name']; ?>" onkeypress="return alphaOnly(event)" class="cstm_input" id="student_lname" name="student_lname" placeholder="">  
                                                  <p class="help-block err-block"></p>
                                            </td>
                                        </tr>

                                         <tr>
                                            <td>
                                                     <label class="cstm_form_label">GENDER :</label><br/><br/>
                                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                                        <input type="radio" id="option-1" class="mdl-radio__button" name="student_gender" value="male" >
                                                        <span class="mdl-radio__label">MALE</span>
                                                      </label>
                                                      &nbsp;&nbsp;
                                                      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                                        <input type="radio" id="option-2" class="mdl-radio__button" name="student_gender" value="female">
                                                        <span class="mdl-radio__label">FEMALE</span>
                                                      </label>
                                                    <p  class="help-block err-block for-gender"></p>
                                            </td>
                                            <td>
                                                    <label class="cstm_form_label">BIRTHDAY :</label>
                                                     <input type="date" id="student_bday" name="student_bday" format="dd/mm/yyyy" class="cstm_input" min="1850-01-01" max="2004-12-31" placeholder="">   
                                                     <p class="help-block err-block"></p>
                                            </td>
                                             <td>
                                                  <label class="cstm_form_label">FIRST LANGUAGE :</label>
                                                     <input type="text" id="student_flanguage" name="student_flanguage" class="cstm_input" placeholder=""> 
                                                     <p class="help-block err-block"></p> 

        
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="4">
                                                 <label class="cstm_form_label">CURRENT ADDRESS :</label>
                                                 <textarea id="student_caddress" name="student_caddress" style="  border: none;width: 100%;"></textarea>
                                                 <p class="help-block err-block"></p>
                                            </td>
                                        </tr>
                                           
                                           <tr>
                                            <td colspan="4">
                                                 <label class="cstm_form_label">PERMANENT ADDRESS :</label>
                                                 <label onclick='copyFieldVal("student_caddress","student_paddress");' for="saabv" style="border:1px solid #dadada;border-radius:2px;padding:4px;cursor:pointer;" class="cstm_form_label">same as above</label>
                                                 <input id="saabv" type="checkbox"  class="mdl-checkbox__input">
                                                 <textarea id="student_paddress" name="student_paddress" style="  border: none;width: 100%;"></textarea>
                                                 <p class="help-block err-block"></p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                   <label class="cstm_form_label">PHONE NUMBER :</label>
                                                     <input type="text" onkeypress="return isNumberKey(event)"  class="cstm_input" placeholder="" id="student_phone" name="student_phone">  
                                                    <p class="help-block err-block"></p>
                                            </td>
                                            <td>
                                                    <label class="cstm_form_label">PHONE NUMBER (PERSONAL) :</label>
                                                     <input type="text"  onkeypress="return isNumberKey(event)" class="cstm_input" placeholder="" id="student_prphone" name="student_prphone">  
                                                    <p class="help-block err-block"></p>
                                            </td>
                                             <td colspan="2">
                                                   <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                                                      <input type="checkbox" id="checkbox-2" id="student_agreement" name="student_agreement" class="mdl-checkbox__input">
                                                      <span style="font-size:12px;" class="mdl-checkbox__label">I Agree the all given information is correct to best of my knowledge .</span>
                                                    </label>
                                                   <p class="help-block err-block for-agreement"></p>
                                            </td>
                                            
                                        </tr>
                                        


                                </tbody>
                                </table>
                                <br/>

                                <button style="margin:auto;display:block;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  Submit
</button>

</form>

          </div>
        </div>



<footer class="demo-footer mdl-mini-footer" style="
    font-family: roboto;
    font-size: 17px;
    padding: 13px;
    text-align: center;
  /*  position: absolute;
    bottom: 0;
    width:100%;*/
">
          <div class="mdl-mini-footer--left-section" style="margin:auto;">

          <img src="http://localhost/nu_mentor_portal/template/img/30x30logo_.png" style="
    height: 37px;
    width: 37px;
    margin-right: 6px;
">
            NIRMA UNIVERSITY © 2016
          </div>
        </footer>




      <!--   <footer class="demo-footer mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">

          <img src="<?php echo base_url('template/img/30x30logo_.png');?>">
            NIRMA UNIVERSITY &COPY; 2016
          </div>
        </footer> -->
      </main>
    </div><!-- 
    <script src="https://code.getmdl.io/1.1.1/material.min.js"></script>
   -->


   
  
   <script type="text/javascript">

     function checkAphaNum(alphaNum)
     {
       var regEx = /^[a-z0-9]+$/i ;
       if(regEx.test(alphaNum)) 
         return true ;
       else
         return false ;
     }
     function checkNum(numVal){
        var regEx = /^\d+$/
        if(regEx.test(numVal))
         return true ;
       else
         return false ;
     }
     function checkAlpha(alphaVal)
     {
        var regEx = /^[a-zA-Z]+$/;
        if(regEx.test(alphaVal))
          return true;
        else
          return false ; 
     }
     function checkEmail(emailVal)
     {
       var regEx = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
       if(regEx.test(emailVal)) 
         return true ;
       else  
         return false ;
     }
     function checkPhone(phoneVal)
     {
       var regEx =/^[+]*[(]{0,1}[0-9]{1,3}[)]{0,1}[-\s\./0-9]*$/g;
       if(regEx.test(phoneVal)) 
          return true ;
        else
          return false ;
     }

     function checkTxtLength(txt,eLen,sLen)
     {
        var txtlngth =  txt.length;
        if(txtlngth <= eLen &&  txtlngth >= sLen ) 
         return true ;
        else
          return false;
     }


    function readURL(input) {
  
      //   console.log();
        element_id = input.id
        
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#disp_user_img').css('background', 'url("'+e.target.result+'")center no-repeat').css('background-size','100%');
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#student_img").change(function(){
    readURL(this);
});


   function copyFieldVal(copyEle,copyToEle)
   {
     
      var copyEle = $("#"+copyEle);
      var copyToEle = $("#"+copyToEle);
      if(copyEle.val() != null || copyEle.val() != "")
      {
           if(copyToEle.val() == null || copyToEle.val() == "") 
            {
                copyToEle.val(copyEle.val());
            }
            else {
                copyToEle.val("");
            }
      }      
   }

       
   </script>


   <script>
     function checkform()
     {
        var prefix = "#student_";
        var fname = $(prefix+"fname");
        var mname = $(prefix+"mname");
        var lname = $(prefix+"lname");
        var gender = $(prefix+"gender");
        var birthday = $(prefix+"bday");
        var first_language = $(prefix+"flanguage");
        var current_address = $(prefix+"caddress");
        var permanent_address = $(prefix+"paddress");
        var phone = $(prefix+"phone");
        var personal_phone = $(prefix+"prphone");
        var gender = $("input[name='student_gender']:checked" );
        var agreement =  $("input[name='student_agreement']:checked"); 

  // console.log(birthday.val() == "");
        
        if(fname.val() == "" || fname.val() == null)
        {
           fname.next($('.err-block')).html("Please enter first name").fadeIn(800).delay(1600).fadeOut(800);

        }else if(!checkAlpha(fname.val()))
        {
           fname.next($('.err-block')).html("Invalid name").fadeIn(800).delay(1600).fadeOut(800);
        }
       
       if(birthday.val() == "" || birthday.val() == null)
       {
          birthday.next($('.err-block')).html("Please select  your birthday").fadeIn(800).delay(1600).fadeOut(800);
       }


        if(mname.val() == "" || mname.val() == null)
        {
           mname.next($('.err-block')).html("Please enter middle name").fadeIn(800).delay(1600).fadeOut(800);

        }else if(!checkAlpha(mname.val()))
        {
           mname.next($('.err-block')).html("Invalid name").fadeIn(800).delay(1600).fadeOut(800);
        }



        if(lname.val() == "" || lname.val() == null)
        {
           lname.next($('.err-block')).html("Please enter last name").fadeIn(800).delay(1600).fadeOut(800);

        }else if(!checkAlpha(lname.val()))
        {
           lname.next($('.err-block')).html("Invalid name").fadeIn(800).delay(1600).fadeOut(800);
        }



         if(first_language.val() == "" || first_language.val() == null)
        {
           first_language.next($('.err-block')).html("Please enter first language").fadeIn(800).delay(1600).fadeOut(800);

        }else if(!checkAlpha(first_language.val()))
        {
           first_language.next($('.err-block')).html("Invalid language").fadeIn(800).delay(1600).fadeOut(800);
        }


         if(current_address.val() == "" || current_address.val() == null)
        {
           current_address.next($('.err-block')).html("Please enter your current address").fadeIn(800).delay(1600).fadeOut(800);
        }
        else if(checkTxtLength(current_address.val(),20,1))
        {
           current_address.next($('.err-block')).html("Address is too short ").fadeIn(800).delay(1600).fadeOut(800);
        }
        else if(!checkTxtLength(current_address.val(),150,1))
        {
           current_address.next($('.err-block')).html("Address is too long ").fadeIn(800).delay(1600).fadeOut(800);
        }


        if(permanent_address.val() == "" || permanent_address.val() == null)
        {
           permanent_address.next($('.err-block')).html("Please enter your permanent address").fadeIn(800).delay(1600).fadeOut(800);
        }
        else if(checkTxtLength(permanent_address.val(),20,1))
        {
           permanent_address.next($('.err-block')).html("Address is too short ").fadeIn(800).delay(1600).fadeOut(800);
        }
        else if(!checkTxtLength(permanent_address.val(),150,1))
        {
           permanent_address.next($('.err-block')).html("Address is too long ").fadeIn(800).delay(1600).fadeOut(800);
        }

       // console.log(phone.val() != null);
        if(phone.val() != "")
        {
           if(!checkNum(phone.val()) || !checkTxtLength(phone.val(),10,10))
            {
               phone.next($('.err-block')).html("Invalid phone number").fadeIn(800).delay(1600).fadeOut(800);
            }
        }

        if(personal_phone.val() != "")
        {
           if(!checkNum(personal_phone.val()) || !checkTxtLength(personal_phone.val(),10,10))
            {
               personal_phone.next($('.err-block')).html("Invalid phone number").fadeIn(800).delay(1600).fadeOut(800);
            }
        }


        if(gender.val() == undefined){
          
          $('.for-gender').after(gender).html("Please select your gender").fadeIn(800).delay(1600).fadeOut(800);
        }

        if(agreement.val() == undefined){    
           $('.for-agreement').after(gender).html("Cannot proceed without agreement").fadeIn(800).delay(1600).fadeOut(800);
        }
        


        return false;
     }
   </script>





   </body>
   
    
</html>
