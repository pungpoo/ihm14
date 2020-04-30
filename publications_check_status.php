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
  ?>
  <section class="bg-light mb-4" id="regis">
    <div class="container ">
      <div class="row">
        <div class=" col-md-12" id="single_regis">
          <div class="card" style="margin-bottom:300px;">
            <h5 class="card-header text-center  bg-info">The 14th Thai Humanities Research Forum - ตรวจสอบสถานะบทความ
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
                  <input class="form-control btn btn-warning" type="button" id="checkmail" name="checkmail"
                    value="ตรวจสอบข้อมูล" />
                </div>
              </div>
              <!-- Check Result -->
              <div id="check-part">
                <div class="form-row col-12">
                  <h5 class="mb-2 bg-blue mx-auto" id="check_status"></h5>
                </div>
                <div class="form-row p-4">
                  <div class="col-6">
                    <h6 class="mb-2mx-auto" id="paper_name"></h6>
                    <span id="download_paper"></span>
                  </div>
                  <div class="col-6">
                    <h6 class="mb-2 mx-auto" id="paper_status"></h6>
                  </div>
                </div>
              </div>
              <!-- Revision -->
              <div id="check-revision" class="bg-gray">
                <div class="form-row p-4">
                  <div class="col-12">
                    <h6 class="mb-2mx-auto" id="revision_file_name"></h6>
                    <span id="download_paper_revision"></span>
                  </div>
                </div>
                <div class="form-row p-4">
                  <div class="col-12">
                    <div class="card">
                      <h5 class="card-header">Upload บทความที่แก้ไขตามการ Review แล้ว</h5>
                      <div class="card-body">
                        <form>
                          <div class="form-group">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                        </form>
                      </div>
                    </div>


                    <h6 class="mb-2mx-auto" id="revision_file_name"></h6>

                  </div>
                </div>
              </div>
              <!-- Revision -->
            </div>
          </div>
        </div>
      </div>
      <input type="hidden" id="inputId" name="inputId">
      <!-- <input type="submit" name="submit" id="btnsubmit" class="btn btn-success mb-2 mt-2 col-6 offset-3"
        value="Upload บทความ"> -->
      <!-- <a href="publications_upload.php" class="btn btn-success mb-2 mt-2 col-6 offset-3">ไปที่หน้า Upload บทความ</a> -->
  </section>
  <!-- Footer -->
  <?php include "footer.html"; ?>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/agency.min.js"></script>
  <script src="js/top_page.js"></script>
  <script type="text/javascript">
    // console.log("Hello");
    $("#upload-history").hide();
    $("#upload-part").hide();
    $("#check-revision").hide();

    $(document).ready(function () {

      $('#email,#phone').focusout(function () {
        if ($('#email').val() && $('#phone').val()) {
          console.log("Not Empty");
          // $("#checkmail").prop("disabled", false);
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
          url: "check_publications_status.php",
          type: "POST",
          data: {
            email: email,
            phone: phone
          },
          dataType: 'json',
          success: function (data) {

            if (!data[0][3]) {
              console.log(data);
              alert('ไม่พบข้อมูลบทความวิชาการของท่าน');
              $("#upload-part").hide();
              $('#check_status').html("");
              $('#paper_name').html("");
              $('#paper_status').html("");
              // $('#download_paper').html(" &nbsp; &nbsp;<a href='publications/"+data[0][4]+"' class='badge badge-info'>Download</a> ");
              $("#check-revision").hide();
              $('#paper_status').html("");

            } else {
              // $('#check_status').html(data);
              $('#check_status').html("ผู้ส่งบทความวิชาการ คุณ" + data[0][1] + " " + data[0][2]);
              $('#paper_name').html("บทความ : " + data[0][4] + " &nbsp; &nbsp;<a href='publications/" +
                data[0][4] + "' class='badge badge-info'>Download</a> ");
              $('#paper_status').html("สถานะบทความ : <font color='red'>" + data[0][5] + "</font>");
              // $('#download_paper').html(" &nbsp; &nbsp;<a href='publications/"+data[0][4]+"' class='badge badge-info'>Download</a> ");
              $("#upload-part").show();

              if (data[1] != false) {
                $("#check-revision").show();
              }else{
                $("#check-revision").hide();
              }

              $('#revision_file_name').html("บทความ(revision version) : " + data[1][2] +
                " &nbsp; &nbsp;<a href='publications/" + data[1][2] +
                "'class='badge badge-info'>Download</a> ");
              // $('#download_paper_revision').html("<a href='publications/"+data[1][2]+"' class='badge badge-info'>Download</a> ");

              id = data[0][0]
              console.log(data);
              // console.log(id);
              return uid = data[0][0];
            }
          },
          error: function() {
            alert('ข้อมูลการลงทะเบียนผิดพลาด โปรดตรวจสอบ Email และ เบอร์โทรศัพท์');
            console.log("error");
            $("#upload-part").hide();
            $('#check_status').html("");
            $('#paper_name').html("");
            $('#paper_status').html("");
            $("#check-revision").hide();
            $('#paper_status').html("");
            $('#revision_file_name').html("");
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