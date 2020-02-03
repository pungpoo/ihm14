// Register 1
$(document).ready(function(){
    $('#email_1').blur(function(){
       var value1 = $(this).val(); 
       liveCheckEmail(value1);
    });
 });
 
 function liveCheckEmail(val) {
     $.post('check_email_group.php',{'email_1':val}, function(data){
         if(data == "Found") {
            alert("Email นี้มีผู้ใช้ในระบบแล้ว");
             $('#check_email_1').html("<span style='color:red; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้มีผู้ใช้ในระบบแล้ว</span>");
             $("#btnsubmit").attr("disabled", true);
         } else {
            //  $('#check_email_1').html("<span style='color:green; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้สามารถใช้ได้ </span>");
             $('#check_email_1').html("<span style='color:green; font-weight:bold;'></span>");

             $('#btnsubmit').attr("disabled", false);	
         }
     }).fail(function(xhr, ajaxOptions, throwError) {
     alert(throwError);
     });
 }

 $(document).ready(function(){
    $('#email_2').blur(function(){
       var value2 = $(this).val(); 
       liveCheckEmail2(value2);
    });
 });
 
 function liveCheckEmail2(val) {
     $.post('check_email_group.php',{'email_2':val}, function(data){
         if(data == "Found") {
            alert("Email นี้มีผู้ใช้ในระบบแล้ว");
             $('#check_email_2').html("<span style='color:red; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้มีผู้ใช้ในระบบแล้ว</span>");
             $("#btnsubmit").attr("disabled", true);
         } else {
             $('#check_email_2').html("<span style='color:green; font-weight:bold;'></span>");
             $('#btnsubmit').attr("disabled", false);	
         }
     }).fail(function(xhr, ajaxOptions, throwError) {
     alert(throwError);
     });
 }

 $(document).ready(function(){
    $('#email_3').blur(function(){
       var value3 = $(this).val(); 
       liveCheckEmail3(value3);
    });
 });
 
 function liveCheckEmail3(val) {
     $.post('check_email_group.php',{'email_3':val}, function(data){
         if(data == "Found") {
            alert("Email นี้มีผู้ใช้ในระบบแล้ว");
             $('#check_email_3').html("<span style='color:red; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้มีผู้ใช้ในระบบแล้ว</span>");
             $("#btnsubmit").attr("disabled", true);
         } else {
             $('#check_email_3').html("<span style='color:green; font-weight:bold;'></span>");
             $('#btnsubmit').attr("disabled", false);	
         }
     }).fail(function(xhr, ajaxOptions, throwError) {
     alert(throwError);
     });
 }
 $(document).ready(function(){
    $('#email_4').blur(function(){
       var value4 = $(this).val(); 
       liveCheckEmail4(value4);
    });
 });
 
 function liveCheckEmail4(val) {
     $.post('check_email_group.php',{'email_4':val}, function(data){
         if(data == "Found") {
            alert("Email นี้มีผู้ใช้ในระบบแล้ว");
             $('#check_email_4').html("<span style='color:red; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้มีผู้ใช้ในระบบแล้ว</span>");
             $("#btnsubmit").attr("disabled", true);
         } else {
             $('#check_email_4').html("<span style='color:green; font-weight:bold;'></span>");
             $('#btnsubmit').attr("disabled", false);	
         }
     }).fail(function(xhr, ajaxOptions, throwError) {
     alert(throwError);
     });
 }
 $(document).ready(function(){
    $('#email_5').blur(function(){
       var value5 = $(this).val(); 
       liveCheckEmail5(value5);
    });
 });
 
 function liveCheckEmail5(val) {
     $.post('check_email_group.php',{'email_5':val}, function(data){
         if(data == "Found") {
            alert("Email นี้มีผู้ใช้ในระบบแล้ว");
             $('#check_email_5').html("<span style='color:red; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้มีผู้ใช้ในระบบแล้ว</span>");
             $("#btnsubmit").attr("disabled", true);
         } else {
             $('#check_email_5').html("<span style='color:green; font-weight:bold;'></span>");
             $('#btnsubmit').attr("disabled", false);	
         }
     }).fail(function(xhr, ajaxOptions, throwError) {
     alert(throwError);
     });
 }
 $(document).ready(function(){
    $('#email_6').blur(function(){
       var value6 = $(this).val(); 
       liveCheckEmail6(value6);
    });
 });
 
 function liveCheckEmail6(val) {
     $.post('check_email_group.php',{'email_6':val}, function(data){
         if(data == "Found") {
            alert("Email นี้มีผู้ใช้ในระบบแล้ว");
             $('#check_email_6').html("<span style='color:red; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้มีผู้ใช้ในระบบแล้ว</span>");
             $("#btnsubmit").attr("disabled", true);
         } else {
             $('#check_email_6').html("<span style='color:green; font-weight:bold;'></span>");
             $('#btnsubmit').attr("disabled", false);	
         }
     }).fail(function(xhr, ajaxOptions, throwError) {
     alert(throwError);
     });
 }


//  Food Check
$("#food_other_1").hide();
    $(document).ready(function () {
      $("#food1_1").click(function () {
        $("#food_other_1").hide();
        $("#food_other_1").val("");
      });
      $("#food2_1").click(function () {
        $("#food_other_1").hide();
        $("#food_other_1").val("");
      });
      $("#food3_1").click(function () {
        $("#food_other_1").hide();
        $("#food_other_1").val("");
      });
      $("#food4_1").click(function () {
        $("#food_other_1").show();
      });
});
$("#food_other_2").hide();
    $(document).ready(function () {
      $("#food1_2").click(function () {
        $("#food_other_2").hide();
        $("#food_other_2").val("");
      });
      $("#food2_2").click(function () {
        $("#food_other_2").hide();
        $("#food_other_2").val("");
      });
      $("#food3_2").click(function () {
        $("#food_other_2").hide();
        $("#food_other_2").val("");
      });
      $("#food4_2").click(function () {
        $("#food_other_2").show();
      });
});
$("#food_other_3").hide();
    $(document).ready(function () {
      $("#food1_3").click(function () {
        $("#food_other_3").hide();
        $("#food_other_3").val("");
      });
      $("#food2_3").click(function () {
        $("#food_other_3").hide();
        $("#food_other_3").val("");
      });
      $("#food3_3").click(function () {
        $("#food_other_3").hide();
        $("#food_other_3").val("");
      });
      $("#food4_3").click(function () {
        $("#food_other_3").show();
      });
});
$("#food_other_4").hide();
    $(document).ready(function () {
      $("#food1_4").click(function () {
        $("#food_other_4").hide();
        $("#food_other_4").val("");
      });
      $("#food2_4").click(function () {
        $("#food_other_4").hide();
        $("#food_other_4").val("");
      });
      $("#food3_4").click(function () {
        $("#food_other_4").hide();
        $("#food_other_4").val("");
      });
      $("#food4_4").click(function () {
        $("#food_other_4").show();
      });
});
$("#food_other_5").hide();
    $(document).ready(function () {
      $("#food1_5").click(function () {
        $("#food_other_5").hide();
        $("#food_other_5").val("");
      });
      $("#food2_5").click(function () {
        $("#food_other_5").hide();
        $("#food_other_5").val("");
      });
      $("#food3_5").click(function () {
        $("#food_other_5").hide();
        $("#food_other_5").val("");
      });
      $("#food4_5").click(function () {
        $("#food_other_5").show();
      });
});
$("#food_other_6").hide();
    $(document).ready(function () {
      $("#food1_6").click(function () {
        $("#food_other_6").hide();
        $("#food_other_6").val("");
      });
      $("#food2_6").click(function () {
        $("#food_other_6").hide();
        $("#food_other_6").val("");
      });
      $("#food3_6").click(function () {
        $("#food_other_6").hide();
        $("#food_other_6").val("");
      });
      $("#food4_6").click(function () {
        $("#food_other_6").show();
      });
});


// Bill
    $("#Billing_detail_1").hide();
    $(document).ready(function () {
      $("#Billing1_1").click(function () {
        $("#Billing_detail_1").hide();
        $("#billing_address_1").val("");
      });
      $("#Billing2_1").click(function () {
        $("#Billing_detail_1").show();
      });
    });

    $("#Billing_detail_2").hide();
    $(document).ready(function () {
      $("#Billing1_2").click(function () {
        $("#Billing_detail_2").hide();
        $("#billing_address_2").val("");
      });
      $("#Billing2_2").click(function () {
        $("#Billing_detail_2").show();
      });
    });

    $("#Billing_detail_3").hide();
    $(document).ready(function () {
      $("#Billing1_3").click(function () {
        $("#Billing_detail_3").hide();
        $("#billing_address_3").val("");
      });
      $("#Billing2_3").click(function () {
        $("#Billing_detail_3").show();
      });
    });

    $("#Billing_detail_4").hide();
    $(document).ready(function () {
      $("#Billing1_4").click(function () {
        $("#Billing_detail_4").hide();
        $("#billing_address_4").val("");
      });
      $("#Billing2_4").click(function () {
        $("#Billing_detail_4").show();
      });
    });

    $("#Billing_detail_5").hide();
    $(document).ready(function () {
      $("#Billing1_5").click(function () {
        $("#Billing_detail_5").hide();
        $("#billing_address_5").val("");
      });
      $("#Billing2_5").click(function () {
        $("#Billing_detail_5").show();
      });
    });

    $("#Billing_detail_6").hide();
    $(document).ready(function () {
      $("#Billing1_6").click(function () {
        $("#Billing_detail_6").hide();
        $("#billing_address_6").val("");
      });
      $("#Billing2_6").click(function () {
        $("#Billing_detail_6").show();
      });
    });