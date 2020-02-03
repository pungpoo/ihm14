$(document).ready(function(){
    $('#email').blur(function(){
       var value = $(this).val(); 
       liveCheckEmail(value);
    });
 });
 
 function liveCheckEmail(val) {
     $.post('check_email.php',{'email':val}, function(data){
         if(data == "Found") {
            alert("Email นี้มีผู้ใช้ในระบบแล้ว");
             $('#check_email').html("<span style='color:red; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้มีผู้ใช้ในระบบแล้ว</span>");
             $("#btnsubmit").attr("disabled", true);
         } else {
             $('#check_email').html("<span style='color:green; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้สามารถใช้ได้ </span>");
             $('#btnsubmit').attr("disabled", false);	
         }
     }).fail(function(xhr, ajaxOptions, throwError) {
     alert(throwError);
     });
 }

