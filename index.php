<?php 
  session_start();
  $_SESSION['lg'] = "th";
?>

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
</head>

<body id="page-top">
  <a id="button"></a>
  <?php 
  if($_SESSION['lg'] == "th"){
    include "navbar.html";
  }else if($_SESSION['lg'] == "us"){
    include "navbar_eng.html";
  }
  ?>
  <section>
    <div>
      <img src="img/poster.jpg" class="center imgcover">
      <a class="btn btn-xl text-uppercase js-scroll-trigger center btn-regis" href="publications.php#publication_publish_list">
        <h2>ประกาศรายชื่อผู้นำเสนอบทความ</h2>
      </a>
    </div>
  </section>
  <section>
    <div class="text-center">
      <!-- <a class="btn btn-xl text-uppercase js-scroll-trigger center btn-regis" href="registration.php"> -->
      <h2 class="mb-4">เวทีวิจัยมนุษยศาสตร์ไทยครั้งที่ 14:The 14th Thai Humanities Research Forum</h2>
      <div class="jumbotron jumbotron-fluid ">
        <div class="container">
          <!-- <h1 class="display-4"></h1> -->
          <h4 class="mb-4">
            การจัดเวทีวิจัยครั้งนี้มีความมุ่งหมายที่จะส่งเสริมการเรียนรู้และไตร่ตรองเกี่ยวกับผลกระทบดังกล่าวโดยอาศัยมุมมองจากสาขาวิชามนุษยศาสตร์และสังคมศาสตร์
            กิจกรรมหลักประกอบด้วยการปาฐกถา การเสวนากลุ่ม และการนำเสนอผลงาน เป็นต้น
            โครงการดังกล่าวน่าจะสร้างความตระหนักถึงความซับซ้อนและกว้างขวางของผลกระทบจากปัญญาประดิษฐ์และเทคโนโลยีสมัยใหม่
            รวมถึงจุดประกายความร่วมมือแบบสหสาขาวิชาระหว่างมนุษยศาสตร์และสังคมศาสตร์กับวิทยาศาสตร์
            เทคโนโลยีและแพทย์ศาสตร์ต่อไป
          </h4>
          <h4 class="mb-4 mx-auto">วัตถุประสงค์</h4>
          <h5 style="text-align: left;">1.
            เพื่อเป็นเวทีสำหรับการแลกเปลี่ยนมุมมองทางวิชาการเกี่ยวกับมนุษยศาสตร์และสังคมศาสตร์ในบริบทของการปฏิสัมพันธ์ในหลากหลายรูปแบบกับวิทยาศาสตร์
            เทคโนโลยี และการแพทย์ รวมถึงบริบทของสังคมที่ได้รับอิทธิพลและผลกระทบจากวิทยาศาสตร์ เทคโนโลยี และการแพทย์</h5>
          <h5 style="text-align: left;">2.
            เพื่อเผยแพร่องค์ความรู้และนวัตกรรมด้านมนุษยศาสตร์และสังคมศาสตร์ในประเด็นที่สัมพันธ์กับการศึกษาวิจัยด้านวิทยาศาสตร์
            เทคโนโลยี และการแพทย์ รวมถึงประเด็นที่สัมพันธ์กับอิทธิพลและผลกระทบทางสังคมจากวิทยาศาสตร์ เทคโนโลยี
            และการแพทย์</h5>
          <h5 style="text-align: left;">3.
            เพื่อเป็นพื้นที่สำหรับการพบปะและสร้างเครือข่ายระหว่างนักวิชาการสาขามนุษยศาสตร์และสังคมศาสตร์ด้วยกันเอง
            รวมถึงการสื่อสารและสร้างเครือข่ายกับนักวิชาการสาขาวิทยาศาสตร์ เทคโนโลยี และการแพทย์</h5>
            <a href="img/THRF14_introduction.pdf" class="btn center btn-regis mb-3" target="_blank">
            <i class="fas fa-user"></i> Download หลักการและเหตุผล </a>
        </div>
      </div>
      <!-- </a> -->
    </div>
  </section>
  
  <!-- VENUE -->
  <section class="page-section bg-gray" id="contact">
    <div class="container mt-4">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">สถานที่จัดงาน</h2>
          <h2 class="section-heading">คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล</h2>
          <h4 class="section-heading text-muted">Faculty of Social Sciences and Humanities,Mahidol University</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-md-12">
              <img src="img/venue.jpg" alt="" class="center responsive mb-2">
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <button class="btn btn-regis" onclick="window.location.href='venue.php'">ดูแผนที่</button>

              <!-- <a class="btn btn-lg btn-regis mt-1"
                href="https://www.google.co.th/maps/place/Windsor+Suites+Hotel+Bangkok/@13.7332436,100.561325,17z/data=!3m1!4b1!4m2!3m1!1s0x30e29eef17783845:0x660e5ddf664b2323"
                target="_blank">
                <h5>แผนที่</h5>
              </a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade modalcenter" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="vertical-alignment-helper">
      <div class="modal-dialog vertical-align-center modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <h1 class="text-center modal-text">ประกาศรายชื่อผู้นําเสนอบทความ</h1>
            <h4 class="text-center">การประชุมเวทีวิจัยมนุษยศาสตร์ไทย ครั้งที่ 14
              <br>
            </h4>
            <h2 class="text-center  modal-text">วันที่ 8-9 กันยายน 2563 </h2>
            <h4 class="text-center ">ณ คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล</h4>
          </div>
          <div class="row mb-2">
          <a class="btn btn-xl text-uppercase js-scroll-trigger center btn-regis" href="publications.php#publication_publish_list">ดูรายชื่อ</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times-circle"></i>
              Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include "footer.html";?>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

  <script>

    $(document).ready(function () {
      $('#popupModal').modal('show');
    });

    var btn = $('#button');
    $(window).scroll(function () {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });
    btn.on('click', function (e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: 0
      }, '300');
    });
  </script>

</body>

</html>