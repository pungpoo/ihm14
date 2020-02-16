<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>THRF14</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style>
    @media (min-width: 992px) {
      section {
        padding-top: 150px !important;
        /* margin-top: 120px; */
      }
    }
    @media (max-width: 480px) and (max-width: 991px) {
      section {
        padding-top: 50px !important;
        /* margin-top: 120px; */
      }
    }

    @media (min-width: 320px) and (max-width: 480px) {
      section {
        padding-top: 80px;
      }

    }
  </style>
</head>
<body id="page-top">
  <a id="button"></a>
  <?php  include "navbar.html";?>
  <?php  include "connect.php"; ?>
  <section class="bg-light mb-4" id="regis">
    <div class="container ">
      <div class="row">
        <div class=" col-md-12" id="single_regis">
        <a href="register_list.php" target="_blank" class="btn btn-xl text-uppercase js-scroll-trigger center btn-warning mb-2"> รายชื่อผู้ลงทะเบียน</a>
          <div class="card">
            <h5 class="card-header text-center text-uppercase bg-info">ลงทะเบียนเข้าร่วม
              "โครงการจัดประชุมวิชาการระดับชาติ เวทีวิจัยมนุษยศาสตร์ไทย ครั้งที่ 14"
              <br> หัวข้อ iHumanities: เทคโนโลยี สุขภาพ และชีวิต</h5>
            <div class="card-body font-weight-bold">
              <form class="form" id="regisForm" name="regisForm" action="check_registration.php" enctype="multipart/form-data" method="post">
                <div class="form-row ">
                  <div class="form-group col-md-4">
                    <label for="title">คำนำหน้าชื่อ (Title)<red>*</red></label>
                    <input class="form-control" list="title" id="title_name" name="title" placeholder="โปรดระบุ">
                    <datalist id="title">
                      <option value="นาย (Mr.)">
                      <option value="นาง (Mrs.)">
                      <option value="นางสาว (Ms.)">
                      <option value="ดร. (Dr.)">
                      <option value="อ.ดร. (Lect.Dr.)">
                      <option value="ผศ.ดร. (Asst. Prof. Dr.)">
                      <option value="ผศ. (Asst. Prof.)">
                      <option value="รศ.ดร. (Assoc. Prof .Dr.)">
                      <option value="รศ. (Assoc. Prof.)">
                      <option value="ศ.ดร. (Prof. Dr.)">
                      <option value="ศ. (Prof.)">
                      <option value="อื่นๆ โปรดระบุ (Other, Please specify)">
                    </datalist>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="fname_th">ชื่อ (Name)<red>*</red></label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="ชื่อ(Name)" required
                      oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')" oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname_th">นามสกุล (Surname)<red>*</red></label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="นามสกุล(Surname)"
                      required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="gender">เพศ (Gender)<red>*</red></label>
                    <select class="form-control" id="gender" name="gender">
                      <option value="M">ชาย (Male)</option>
                      <option value="F">หญิง (Female)</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="age">อายุ (Age)<red>*</red></label>
                    <input type="number" class="form-control" max="99" id="age" name="age" placeholder="อายุ (Age)"
                      required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')" oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="nationality">สัญชาติ (Nationality)<red>*</red></label>
                    <input type="text" class="form-control" id="nationality" name="nationality"
                      placeholder="สัญชาติ (Nationality)">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="email">E-mail<red>*</red></label>
                    <span id="check_email"></span>
                    <input type="email" class="form-control" id="email" name="email"
                      placeholder="Please provide the current e-mail address." required
                      oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="phone">เบอร์โทรศัพท์ (Phone Number)<red>*</red></label>
                    <input type="number" class="form-control" id="phone" name="phone"
                      placeholder="Please provide the contact phone number." required
                      oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                      oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="emergency_phone">เบอร์โทรศัพท์ในกรณีฉุกเฉิน (Emergency Contact Phone Number)</label>
                    <input type="number" class="form-control" id="emergency_phone" name="emergency_phone"
                      placeholder="Please provide the emergency contact phone number."
                      oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                      oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="grad-from">หน่วยงานต้นสังกัด (Affiliation)<red>*</red></label>
                    <input type="text" class="form-control" id="affiliation" name="affiliation"
                      placeholder="หน่วยงานต้นสังกัด  (Affiliation)" required
                      oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="grad-from">ที่อยู่ของหน่วยงาน (Affiliation Address)<red>*</red></label>
                    <textarea class="form-control" id="adds" name="affiliation_address" rows="3"
                      placeholder="ที่อยู่ของหน่วยงาน (Affiliation Address)" required oninvalid="this.setCustomValidity('กรุณาระบุที่อยู่ของหน่วยงานต้นสังกัด')" oninput="setCustomValidity('')"></textarea>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-6 mt-2">
                    <label>อาหาร (Food)</label>
                    <div class="pl-3">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="food1" name="food" class="custom-control-input" value="1" checked>
                        <label class="custom-control-label" for="food1" id="food_normal">ทั่วไป (Not Specific)</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="food2" name="food" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="food2">มังสวิรัติ (Vegetarian)</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="food3" name="food" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="food3">ฮาลาล (Halal)</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="food4" name="food" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="food4">อื่นๆ โปรดระบุ (Others)</label>
                        <input type="text" class="form-control" name="food_other" id="food_other">
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6  mt-2">
                    <label for="food_allergy">แพ้อาหาร(ถ้ามี) / Food Allergy(If applicable)</label>
                    <input type="text" class="form-control" id="food_allergy" name="food_allergy"
                      placeholder="ระบุอาหารที่แพ้ (Please specify all food allergies)">
                  </div>
                </div>
                <div class="form-row bg-gray">
                  <div class="form-group col-md-12 mt-2">
                    <label for="">เลือกหัวข้อที่ต้องการเข้าร่วม</label>
                    <div class="custom-control custom-radio ml-3">
                      <input type="radio" id="3day" name="participate" class="custom-control-input" value="1" required>
                      <label class="custom-control-label" for="3day">งานมหกรรมวิชาการ วันที่ 7,10,11 กันยายน 2563 (3 วัน)</label>
                    </div>
                    <div class="custom-control custom-radio ml-3">
                      <input type="radio" id="2day" name="participate" class="custom-control-input" value="2">
                      <label class="custom-control-label" for="2day">งานเวทีมนุษศาสตร์ วันที่ 8-9 กันยายน 2563 (2 วัน)</label>
                    </div>
                    <div class="custom-control custom-radio ml-3">
                      <input type="radio" id="5day" name="participate" class="custom-control-input" value="3">
                      <label class="custom-control-label" for="5day">เข้ารวมทั้ง 2 งาน วันที่ 7-11 กันยายน 2563 (5 วัน)</label>
                    </div>
                    <div class="custom-control custom-checkbox ml-3" id="paper_check">
                      <input type="checkbox" id="paper" name="publication" class="custom-control-input" value="1">
                      <label class="custom-control-label" for="paper">ส่งบทความตีพิมพ์
                        (โปรดเลือกหากต้องการส่งบทความตีพิมพ์)</label>
                    </div>
                  </div>
                </div>
                <div class="form-row bg-blue mt-2" id="divPaper">
                  <div class="form-group col-md-12 mt-2">
                    <label for="">ส่งบทความตีพิมพ์</label>
                    <div class="form-row ml-4">
                      <label>โปรดเลือกหัวข้อย่อยสำหรับการส่งบทความวิจัย/บทความวิชาการ</label>
                    </div>
                    <div class="custom-control custom-radio ml-4">
                      <input type="radio" id="subtheme1" name="subtheme" class="custom-control-input" value="1">
                      <label class="custom-control-label" for="subtheme1">1. สังคมพหุวัฒนธรรม อัตลักษณ์
                        และภาวะข้ามชาติในยุคดิจิทัล (Multicultural Society, Identity and Transnationalism in the Era of
                        Digital Technology)</label>
                    </div>
                    <div class="custom-control custom-radio ml-4">
                      <input type="radio" id="subtheme2" name="subtheme" class="custom-control-input" value="2">
                      <label class="custom-control-label" for="subtheme2">2. ภาษาและภาษาศาสตร์ในยุคเทคโนโลยีเปลี่ยนโลก
                        (Language and Linguistics in the Age of World-disrupting Technology)</label>
                    </div>
                    <div class="custom-control custom-radio ml-4">
                      <input type="radio" id="subtheme3" name="subtheme" class="custom-control-input" value="3">
                      <label class="custom-control-label" for="subtheme3">3. สุนทรียศาสตร์ อารมณ์ และสุขภาวะของสังคม
                        (Aesthetics, Emotion and Implications on Social Well-Being)</label>
                    </div>
                    <div class="custom-control custom-radio ml-4">
                      <input type="radio" id="subtheme4" name="subtheme" class="custom-control-input" value="4">
                      <label class="custom-control-label" for="subtheme4">4. iMindfulness:
                        ความตระหนักรู้ในตนสู่หนทางการเปลี่ยนแปลง (iMindfulness: Self-awareness toward
                        Transformation)</label>
                    </div>
                    <div class="custom-control custom-radio ml-4">
                      <input type="radio" id="subtheme5" name="subtheme" class="custom-control-input" value="5">
                      <label class="custom-control-label" for="subtheme5">5. มนุษย์กับการอยู่ร่วมกับเทคโนโลยี (Humans
                        and their Co-existence with Technology)</label>
                    </div>
                    <div class="custom-control custom-radio ml-4">
                      <input type="radio" id="subtheme6" name="subtheme" class="custom-control-input" value="6">
                      <label class="custom-control-label" for="subtheme6">6.
                        โลกออนไลน์กับเสถียรภาพของสังคมและความมั่นคงของประเทศ (Online World, Social Stability and
                        National Security)</label>
                    </div>
                    <div class="custom-control custom-radio ml-4">
                      <input type="radio" id="subtheme7" name="subtheme" class="custom-control-input" value="7">
                      <label class="custom-control-label" for="subtheme7">7. เทคโนโลยีและการดูแลสุขภาพในสังคมประชาธิปไตย
                        (Technology and Healthcare in Democratic Society)</label>
                    </div>
                    <div class="custom-control custom-radio ml-4">
                      <input type="radio" id="subtheme8" name="subtheme" class="custom-control-input" value="8">
                      <label class="custom-control-label" for="subtheme8">8. เทคโนโลยีกับสิทธิมนุษยชนและสันติภาพ
                        (Technologies, Human Rights and Peace)</label>
                    </div>
                    <div class="custom-control custom-radio ml-4">
                      <input type="radio" id="subtheme9" name="subtheme" class="custom-control-input" value="9">
                      <label class="custom-control-label" for="subtheme9">9. เทคโนโลยีกับความสามารถที่แตกต่างของมนุษย์:
                        แบ่งแยกหรืออยู่ร่วม (Technology and Human (this)Ability: Dividing or Including)</label>
                    </div>
                    <div class="custom-control custom-radio ml-4">
                      <input type="radio" id="subtheme10" name="subtheme" class="custom-control-input" value="10">
                      <label class="custom-control-label" for="subtheme10">10. เทคโนโลยี การดูแลสุขภาพ
                        กับสังคมผู้สูงอายุ (Technology, Healthcare and Aging Society)</label>
                    </div>
                    <div class="custom-control custom-radio ml-4">
                      <input type="radio" id="subtheme11" name="subtheme" class="custom-control-input" value="11">
                      <label class="custom-control-label" for="subtheme11">11.
                        เทคโนโลยีและการแพทย์ที่มีหัวใจความเป็นมนุษย์ (Technology and Humanized Medicine)</label>
                    </div>
                    <!-- upload -->
                    <div class="form-row col-12 mt-2">
                      <div class="card col-md-8 col-sm-12 ml-4">
                        <div class="card-header ">
                          Upload บทความตีพิมพ์
                        </div>
                        <div class="card-body">
                          <!-- <h5 class="card-title">Upload บทความตีพิมพ์</h5> -->
                          <!-- <p class="card-text">** maximum 2MB. Type .doc .docx </p> -->
                          <input type="file" name="paper_upload" id="paper_upload"/>
                          <p class="card-text">**ไฟล์ขนาดไม่เกิน 5MB. Type .doc .docx </p>
                          <span id="file_error"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- <input type="submit" name="submit" id="btnsubmit" class="btn btn-success mb-5 col-4 offset-4"
              value="ยืนยันการลงทะเบียน"> -->
          <!-- preview -->
          <input type="button" name="btn" value="ตรวจสอบข้อมูล" id="submitBtn" data-toggle="modal"
            data-target="#confirm-submit" class="btn btn-success mb-3 col-6 offset-3 mt-4" />
          <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog  modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  ข้อมูลการลงทะเบียนของท่าน
                </div>
                <div class="modal-body">
                  <label><b>ชื่อ-นามสกุล (Name-Surname) </b>: <span class="badge badge-info"
                      id="preview_name"></span></label><br>
                  <label><b>E-mail </b>: <span class="badge badge-info" id="preview_mail"></span></label><br>
                  <label><b>เบอร์โทรศัพท์ (Phone Number) </b>: <span class="badge badge-info"
                      id="preview_phone"></span></label><br>
                  <label><b>หน่วยงานต้นสังกัด (Affiliation) </b>: <span class="badge badge-info"
                      id="preview_affiliation"></span></label><br>
                  <label><b>อาหาร (Food) </b>: <script> </script> <span class="badge badge-info"
                      id="preview_food"></span></label><br>
                  <label><b>แพ้อาหาร(Food Allergy) </b>: <span class="badge badge-info"
                      id="preview_food_allergy"></span></label><br>
                  <label><b>งานที่เข้าร่วม</b>: <span class="badge badge-info"
                      id="preview_workshop_day1"></span></label><br>
                  <label><b>บทความตีพิมพ์</b>: <span class="badge badge-info"
                      id="preview_workshop_day2"></span></label><br>
                  <label><b>ค่าลงทะเบียน </b>: <span class="badge badge-info" id="">Early Bird 2,500
                      บาท</span></label><br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  <!-- <a href="#" id="submit" class="btn btn-success success">Submit</a> -->
                  <input type="submit" name="submit" id="btnsubmit" class="btn btn-success" value="ยืนยันการลงทะเบียน">
                </div>
              </div>
            </div>
          </div>
          <!-- preview -->
          </form>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </section>
  <!-- Footer -->
  <?php 
  include "footer.html";
  ?>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/agency.min.js"></script>
  <script src="js/top_page.js"></script>
  <script src="js/check_regis.js"></script>
  <script src="js/preview.js"></script>
  <script type="text/javascript">
    function checkeng() {
      var obj = document.getElementById("fname_eng");
      var str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
      var val = obj.value
      var valOK = true;
      for (i = 0; i < val.length & valOK; i++) {
        valOK = (str.indexOf(val.charAt(i)) != -1)
      }
      if (!valOK) {
        alert("กรุณากรอกภาษาอังกฤษเท่านั้น !!! ")
        document.getElementById('fname_eng').value = "";
        obj.focus()

        return false
      }
      return true
    }

    function checkeng2() {
      var obj = document.getElementById("lname_eng");
      var str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
      var val = obj.value
      var valOK = true;

      for (i = 0; i < val.length & valOK; i++) {
        valOK = (str.indexOf(val.charAt(i)) != -1)
      }

      if (!valOK) {
        alert("กรุณากรอกภาษาอังกฤษเท่านั้น !!! ")
        document.getElementById('lname_eng').value = "";
        obj.focus()
        return false
      }
      return true
    }

    $("#food_other").hide();
    $(document).ready(function () {
      $("#food1").click(function () {
        $("#food_other").hide();
        $("#food_other").val("");
      });
      $("#food2").click(function () {
        $("#food_other").hide();
        $("#food_other").val("");
      });
      $("#food3").click(function () {
        $("#food_other").hide();
        $("#food_other").val("");
      });
      $("#food4").click(function () {
        $("#food_other").show();
      });
    })
     // fadeIn
      //$("#paper_check").hide();
      
      $(document).ready(function(){
      $('#3day').change(function(){
          if(this.checked)
              // $('#paper_check').fadeOut('fast');
              $("#paper_check").hide(),
              $('[name ="publication"]').prop( "checked", false ),
              $('[name ="subtheme"]').prop( "checked", false )
          else
              $('#paper_check').fadeIn('fast')
              $('[name ="paper"]').prop( "checked", false )
              $('#divPaper').fadeOut('fast')
      });
    });
    $(document).ready(function(){
      $('#2day').change(function(){
          if(this.checked)
              $("#paper_check").show();
              // $('#paper_check').fadeIn('fast');
          else
              $('#paper_check').fadeOut('fast');
              // $('[name ="paper"]').prop( "checked", false );
              // $('#divPaper').fadeOut('fast');
              // $('[name ="subtheme"]').prop( "checked", false );
      });
    });
    $(document).ready(function(){
      $('#5day').change(function(){
          if(this.checked)
              $("#paper_check").show();
          else
              $('#paper_check').fadeOut('fast');
      });
    });

    // paper fadeIn
    
    $("#divPaper").hide();

    $(document).ready(function(){
      $('#paper').change(function(){
          if(this.checked)
              // $('#divPaper').fadeIn('fast'),
              $("#divPaper").show()
          else
              // $('#divPaper').fadeOut('fast');
              $("#divPaper").hide()
              $('[name ="subtheme"]').prop( "checked", false );
      });
    });

  function validate() {
    $("#file_error").html("");
    $(".demoInputBox").css("border-color","#F0F0F0");
    var file_size = $('#pic')[0].files[0].size;
    if(file_size>5242880) {
      $("#file_error").html("<font color='#F31616'>รูปภาพของท่านมีขนาดใหญ่เกิน 5 MB</font>");
      $(".demoInputBox").css("border-color","#FF0000");
      return false;
    } 
    return true;
  }
  </script>

</body>
</html>