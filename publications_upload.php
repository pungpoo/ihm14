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
        // include "navbar.html";
        include "connect.php";

        // if(isset($_POST["checkmail"])){
        //   $stmt_email_check = $conn->query("SELECT regis_mail FROM register where regis_mail = '".$_POST["email"]."' ");
        //   $email_check = $stmt_email_check->fetch();
        //   echo $email_check[0];
        // }
  ?>

  <section class="bg-light mb-4" id="regis">
    <div class="container ">
      <div class="row">
        <div class=" col-md-12" id="single_regis">
          <div class="card">
            <h5 class="card-header text-center  bg-info">The 14th Thai Humanities Research Forum - Upload บทความวิชาการ
            </h5>
            <div class="card-body font-weight-bold">
              <form class="form" id="uploadForm" name="uploadForm" action=""
                enctype="multipart/form-data" method="post">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="fname_th">Email<red>*</red></label>
                    <input type="text" class="form-control" id="email" name="email" value=""
                      placeholder="ระบุ Email ที่ใช้ลงทะเบียน" required
                      oninvalid="this.setCustomValidity('ระบุ Email ที่ใช้ลงทะเบียน')" oninput="setCustomValidity('')">
                      <span id="check_email"></span>
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
                    <button class="form-control btn btn-warning" id="checkmail" name="checkmail"  onclick="Email_check()"> ตรวจสอบข้อมูล</button>
                  </div>
                </div>
            </div>
            <!-- upload -->
            <div class="form-group mr-4 ml-4" id="upload">
              <div class="card col-md-12 col-sm-12">
                <div class="card-header ">
                  Upload Files
                </div>
                <div class="card-body">
                  <input type="file" name="paper_upload" id="paper_upload" />
                  <p class="card-text">**File size up to 5MB. Type .doc .docx </p>
                  <span id="file_error"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <input type="submit" name="submit" id="btnsubmit" class="btn btn-success mb-2 mt-2 col-12"
      value="ยืนยันการลงทะเบียน" onclick="cfFunction()">
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

    $(document).ready(function () {
      $('#checkmail').click(function () {
        var value = $(this).val();
        Email_check(value);
      });
    });
    function Email_check(val) {
      $.post('check_email_upload.php', {
        'email': val,'phone': val
      }, function (data) {
        if (data == "Found") {
          alert("Email นี้มีผู้ใช้ในระบบแล้ว");
          $('#check_email').html(
            "<span style='color:red; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้มีผู้ใช้ในระบบแล้ว</span>");
          // $("#btnsubmit").attr("disabled", true);
        } else {
          $('#check_email').html(
            "<span style='color:green; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้สามารถใช้ได้ </span>");
          // $('#btnsubmit').attr("disabled", false);
        }
      }).fail(function (xhr, ajaxOptions, throwError) {
        alert(throwError);
      });
    }
  </script>

</body>

</html>