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

    /* footer{
      position: absolute;
      right: 0;
      bottom: 0;
      left: 0;
      padding: 1rem;
      text-align: center;
        } */
  </style>
</head>

<body id="page-top">
  <a id="button"></a>
  <?php  
        include "navbar.html";
        include "connect.php";

        // if(isset($_POST["checkmail"])){
        //   $stmt_email_check = $conn->query("SELECT regis_mail FROM register where regis_mail = '".$_POST["email"]."' ");
        //   $email_check = $stmt_email_check->fetch();
        //   echo $email_check[0];
        // }
  ?>
  <section class="bg-light mb-4" id="regis">
    <div class="container">
      <div class="row">
        <div class=" col-md-12" id="single_regis">
          <div class="card" style="margin-bottom:350px;">
            <h5 class="card-header text-center  bg-info">The 14th Thai Humanities Research Forum - Upload บทความวิชาการ
            </h5>
            <div class="card-body font-weight-bold">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="fname_th">Email<red>*</red></label>
                  <input type="text" class="form-control" id="email" name="email"
                    placeholder="ระบุ Email ที่ใช้ลงทะเบียน" required
                    oninvalid="this.setCustomValidity('ระบุ Email ที่ใช้ลงทะเบียน')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group col-md-6">
                  <label for="lname_th">เบอร์โทรศัพท์<red>*</red></label>
                  <input type="text" class="form-control" id="phone" name="phone"
                    placeholder="ระบุเบอร์โทรศัพท์ที่ใช้ลงทะเบียน" required
                    oninvalid="this.setCustomValidity('ระบุเบอร์โทรศัพท์ที่ใช้ลงทะเบียน')"
                    oninput="setCustomValidity('')">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <!-- <button class="form-control btn btn-warning" id="checkmail" name="checkmail" > ตรวจสอบข้อมูล</button> -->
                  <input class="form-control btn btn-warning" type="button" id="checkmail" name="checkmail"
                    value="ตรวจสอบข้อมูล" />
                </div>
              </div>
            </div>
            <!-- upload -->
            <div id="upload-part">
              <form class="upload-form" id="uploadForm" name="uploadForm" enctype="multipart/form-data" method="post"
                action="check_publications_upload.php">
                <div class="form-row">
                  <div class="form-row ml-4 col-12">
                    <h5 class="mb-2 bg-blue" id="check_email"></h5>
                  </div>
                  <div class="form-row ml-4  col-12">
                    <h6 id="upload-history"> ประวัติการ Upload</h6>
                  </div>
                  <div class="form-row mx-auto col-12" id="submitfalse">
                    <h6 class="center bg-red" id="submitfalse_msg"></h6>
                  </div>
                  <div class="form-row ml-4">
                    <h6>โปรดเลือกหัวข้อย่อยสำหรับการส่งบทความวิจัย/บทความวิชาการ (Please select sub-theme for article
                      submission)</h6>
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
                  <div class="custom-control custom-radio ml-4 mb-2">
                    <input type="radio" id="subtheme11" name="subtheme" class="custom-control-input" value="11">
                    <label class="custom-control-label" for="subtheme11">11.
                      เทคโนโลยีและการแพทย์ที่มีหัวใจความเป็นมนุษย์ (Technology and Humanized Medicine)</label>
                  </div>
                  <div class="custom-control ml-4 mb-2">
                    <label style="color: red;"><b>**หมายเหตุ สำหรับท่านที่ได้ทำการ Upload บทความวิชาการไปแล้ว หากท่าน
                        Upload ในหน้านี้ไฟล์ใหม่จะแทนที่ไฟล์เก่าของท่านที่มีอยู่ในระบบ</b></label>
                  </div>
                </div>
                <div class="form-group mr-4 ml-4" id="upload">
                  <div class="card">
                    <div class="card-header">
                      Upload Files
                    </div>
                    <div class="card-body">
                      <input type="file" name="paper_upload" id="paper_upload" />
                      <p class="card-text">**File size up to 5MB. Type .doc .docx </p>
                      <span id="file_error"></span>
                    </div>
                  </div>
                </div>
                <input type="hidden" id="inputId" name="inputId">
                <input type="hidden" id="regis_publication" name="regis_publication">
                <input type="submit" name="submit" id="btnsubmit" class="btn btn-success mb-2 mt-2 col-6 offset-3"
                  value="Upload บทความ">
            </div>
            <!-- <input type="hidden" id="inputId" name="inputId">
            <input type="submit" name="submit" id="btnsubmit" class="btn btn-success mb-2 mt-2 col-6 offset-3"
              value="Upload บทความ"> -->
          </div>
        </div>
      </div>
      <!-- <input class="form-control btn btn-warning" type="button" id="submit" name="submit"  value="save" /> -->
      <!-- <label id="Callback_id2"></label>  
    <input type="text" id="inputId" name="inputId" />  -->
      </form>
  </section>
  <!-- Footer -->
  <?php include "footer.html"; ?>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/agency.min.js"></script>
  <script src="js/top_page.js"></script>
  <script type="text/javascript">
    // $("#upload").hide();
    // id =  data[0];
    // $( "#checkmail" ).prop( "disabled", true );
    $("#upload-history").hide();
    $("#upload-part").hide();

    $(document).ready(function () {

      $('#email,#phone').focusout(function () {
        if ($('#email').val() && $('#phone').val()) {
          console.log("Not Empty");
          $("#checkmail").prop("disabled", false);
        }
      });
      $('#checkmail').click(function () {

        if (!$('#email').val() || !$('#phone').val()) {
          alert('กรุณากรอกข้อมูล');
          return false;
        }
        var email = $('#email').val();
        var phone = $('#phone').val();
        $.ajax({
          url: "ajax_check_publications_upload.php",
          type: "POST",
          data: {
            email: email,
            phone: phone
          },
          dataType: 'json',
          success: function (data) {
            if (data == false) {
              // console.log('error');
              alert('ไม่พบข้อมูลการลงทะเบียน');
              $("#upload-part").hide();
              $('#check_email').html("");
              $('#inputId').val("");
              $('#Callback_id2').html("");
              $("#submitfalse").hide();
              $("#submitfalse_msg").html("");

            } else {
              $('#check_email').html(data);
              $('#check_email').html("เข้าสู่ระบบโดยคุณ" + data[1] + " " + data[2]);
              $('#Callback_id2').html(data[0]);
              $('#inputId').val(data[0]);
              $('#regis_publication').val(data.regis_publication);
              $("#upload-part").show();

              if (!data[5]) {
                $("#btnsubmit").prop("disabled", false);
                $("#submitfalse").hide();
                $("#submitfalse_msg").html("");
              } else if (data[5] != "uploaded") {
                $("#submitfalse").show();
                $("#submitfalse_msg").html("บทความของท่านอยู่ในขั้นตอนการ Review ไม่สามารถทำการ Upload ได้");
                $("#btnsubmit").prop("disabled", true);
              } 
              else if (data[5] == "uploaded"){
                $("#submitfalse").hide();
                $("#submitfalse_msg").html("");
                $("#btnsubmit").prop("disabled", false);
              }

              id = data[0];
              console.log(data);
              return uid = data[0];
            }
          }
        });
      });

    });
    // check file size
    function validate() {
      $("#file_error").html("");
      $(".demoInputBox").css("border-color", "#F0F0F0");
      var file_size = $('#pic')[0].files[0].size;
      if (file_size > 5242880) {
        $("#file_error").html("<font color='#F31616'>รูปภาพของท่านมีขนาดใหญ่เกิน 5 MB</font>");
        $(".demoInputBox").css("border-color", "#FF0000");
        return false;
      }
      return true;
    }
  </script>
</body>

</html>