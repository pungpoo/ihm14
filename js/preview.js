$('#submitBtn').click(function () {
    $('#preview_name').text($('#title_name').val()+$('#fname').val()+$('#lname').val());
    $('#preview_mail').text($('#email').val());
    $('#preview_phone').text($('#phone').val());
    $('#preview_affiliation').text($('#affiliation').val());

    var bill_info = $('input[name=billing_info]:checked').val();
    if (bill_info==2){
        $('#preview_bill_info').text($('#billing_address').val());
    }
    $('#preview_food_allergy').text($('#food_allergy').val());
    
    // food
    var food = $('input[name=food]:checked').val();
    if (food==1){
        $('#preview_food').text("อาหารทั่วไป (Not Specific)"); 
    }else if (food==2) {
        $('#preview_food').text("มังสวิรัติ (Vegetarian)");
    }else if (food==3) {
        $('#preview_food').text("ฮาลาล (Halal)");
    }else if (food==4) {
        $('#preview_food').text($('#food_other').val());
    }
    // $('#preview_food').val(food_value); 
    //  $('#preview_food').text($('input[name=food]:checked').val()); 
    
    // workshop 1
    var workshop_1 = $('input[name=workshop_day1]:checked').val();
    if (workshop_1=="w1"){
        $('#preview_workshop_day1').text("Design Thinking"); 
    }else if (workshop_1=="w2") {
        $('#preview_workshop_day1').text("Research to Innovation");
    }else if (workshop_1=="w3") {
        $('#preview_workshop_day1').text("Contemplative education: Learn Unlearn and Relearn");
    }else if (workshop_1=="w4") {
        $('#preview_workshop_day1').text("Development and Implementation-Game design-Board game");
    }else if (workshop_1=="wn") {
        $('#preview_workshop_day1').text("ไม่เข้าร่วม Workshop สำหรับช่วงเวลานี้");
    }
    // workshop 2
    var workshop_2 = $('input[name=workshop_day2]:checked').val();
    if (workshop_2=="w5"){
        $('#preview_workshop_day2').text("เนรมิตห้องเรียน 4.0 ด้วยเครื่องมือดิจิทัล"); 
    }else if (workshop_2=="w6") {
        $('#preview_workshop_day2').text("Micro mastery: ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง “ความเก่งทีละเล็กทีละน้อย");
    }else if (workshop_2=="w7") {
        $('#preview_workshop_day2').text("วิจัยจัดการเรียนการสอน");
    }else if (workshop_2=="w8") {
        $('#preview_workshop_day2').text("สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning");
    }else if (workshop_2=="wn") {
        $('#preview_workshop_day2').text("ไม่เข้าร่วม Workshop สำหรับช่วงเวลานี้");
    }


    $('#preview_workshop_day1').text($('#workshop_day1').val());
    $('#preview_workshop_day2').text($('#workshop_day2').val());

});

