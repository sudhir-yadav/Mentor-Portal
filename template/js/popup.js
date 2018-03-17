/* 
Developed by :Sudhir yadav 
Dependency   : jquery version 1.8 or greater
Version      : 1.0.0
*/
function closePopup(){$('.popup').removeClass('fade_in').addClass('fade');$('.popup_block').removeClass('dialog_in')};
function openPopup(popupelement){
	                              event.preventDefault();
                                  $(popupelement).removeClass('fade').addClass('fade_in');
                                  $(popupelement+' .popup_block').addClass('dialog_in');
                                  return false;
                                }  

$("[role='close_popup']").click(function(){closePopup();});
$("[data-toggle='popup']").click(function(){openPopup(this.getAttribute("href"));});

function testing(e){ 
	                   
                      if(!e){var e=window.event;}  
                      if(e.keyCode == 27){e.preventDefault();closePopup();}
                    }

document.onkeydown = testing;
