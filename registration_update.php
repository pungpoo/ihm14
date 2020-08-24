<!DOCTYPE html>
<?php

session_start();
if (empty($_SESSION['token'])) {
    if (function_exists('mcrypt_create_iv')) {
        $_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}
$token_csrf = $_SESSION['token'];

?>
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
  <?php  
    include "navbar.html";
    require_once("connect.php");
    require_once("session_count.php");
  ?>
  <section class="bg-light mb-4" id="regis">
    <div class="container ">
      <div class="row">
        <div class=" col-md-12" id="single_regis">
          <a href="register_list.php" target="_blank" class="btn btn-xl js-scroll-trigger center btn-info mb-2">
            รายชื่อผู้ลงทะเบียน รอบที่ 1 (รอบส่งบทความ)</a>
            <a href="register_list_update.php" target="_blank" class="btn btn-xl js-scroll-trigger center btn-warning mb-2">
            รายชื่อผู้ลงทะเบียน รอบที่ 2 </a>
          <div class="card">
            <h5 class="card-header text-center  bg-info">The 14th Thai Humanities Research Forum - Registration
            </h5>
            <div class="card-body font-weight-bold">
              <form class="form" id="regisForm" name="regisForm" action="check_registration_update.php"method="post">
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
                  <!-- <div class="form-group col-md-4">
                    <label for="nationality">สัญชาติ (Nationality)<red>*</red></label>
                    <input type="text" class="form-control" id="nationality" name="nationality"
                      placeholder="สัญชาติ (Nationality)">
                  </div> -->
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="email">E-mail<red>*</red></label>
                    <span id="check_email"></span>
                    <input type="email" class="form-control" id="email" name="email"
                      placeholder="Please provide the current e-mail address." required
                      oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="phone">เบอร์โทรศัพท์ (Phone Number)<red>*</red></label>
                    <input type="number" class="form-control" id="phone" name="phone"
                      placeholder="Please provide the contact phone number." required
                      oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                      oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="grad-from">หน่วยงานต้นสังกัด (Affiliation)<red>*</red></label>
                    <input type="text" class="form-control" id="affiliation" name="affiliation"
                      placeholder="หน่วยงานต้นสังกัด  (Affiliation)" required
                      oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')" oninput="setCustomValidity('')">
                  </div>
                </div>

                <!-- ******************เลือกห้อง********************* -->
                <div class="form-row">
                  <div class="form-group col-12 mt-2">
                    <label>เลือกการเข้าร่วมงาน</label><br>
                    <label>วันที่ 8 กันยายน 2563</label><button class="btn btn-sm btn-info ml-2" data-toggle="modal"
                      data-target="#modal-day8">ดูกำหนดการ</button><br>
                    <label>8.00 - 12.00 น.</label>
                    <ul>
                      <li>พิธีเปิด</li>
                      <li>ปาฐกถานำ หัวข้อ Humanities, Science and Technology : An Inevitable Crossroad</li>
                      <li>เสวนากลุ่ม หัวข้อ “มนุษย์ การแพทย์และสุขภาพ: ประเด็นท้าทาย”</li>
                    </ul>
                    <div class="pl-3 mb-2">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="day8-m-1" name="day8-m" class="custom-control-input" value="zoom" checked>
                        <label class="custom-control-label" for="day8-m-1">รับชมออนไลน์ผ่านโปรแกรม ZOOM</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="day8-m-2" name="day8-m" class="custom-control-input" value="walkin">
                        <label class="custom-control-label" for="day8-m-2">ลงทะเบียนมาที่คณะสังคมศาสตร์ฯ
                          <red>(เพื่อชมการถ่ายทอดสด)</red><span class="badge badge-warning ml-2">เหลือที่นั่งอีก 
                          <?php echo  $Day8_Session_1_balance;?>ที่</span></label>
                      </div>
                    </div>
                    <hr>
                    <label>13.00 - 17.00 น.(เลือกได้เพียง 1 ห้อง)</label>
                    <div class="pl-3">
                      <div class="border border-dark p-2 mb-2 rounded">
                        <label>ห้องที่ 1 เกมออนไลน์ สื่อสังคมและแอปพลิเคชั่น (ห้อง 412)</label>
                        <br>
                        <div class="pl-3 mb-2">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day8-noon-1" name="day8-noon" class="custom-control-input" value="312_zoom" checked>
                            <label class="custom-control-label" for="day8-noon-1">รับชมออนไลน์ผ่านโปรแกรม ZOOM</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day8-noon-2" name="day8-noon" class="custom-control-input" value="312_walkin">
                            <label class="custom-control-label" for="day8-noon-2">ลงทะเบียนมาที่คณะสังคมศาสตร์ฯ (จํากัด
                              10 คน)
                              <br>ห้อง 412 อาคาร 4 ชั้น 4 คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล
                              <span class="badge badge-warning">เหลือที่นั่งอีก<?php echo $Day8_Session_2_312_balance;?>ที่</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="border border-dark p-2 mb-2 rounded">
                        <label>ห้องที่ 2 อัตลักษณ์ สังคมและวัฒนธรรม (ห้อง 413)</label><br>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day8-noon-3" name="day8-noon" class="custom-control-input" value="313_zoom">
                            <label class="custom-control-label" for="day8-noon-3">รับชมออนไลน์ผ่านโปรแกรม ZOOM</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day8-noon-4" name="day8-noon" class="custom-control-input" value="313_walkin">
                            <label class="custom-control-label" for="day8-noon-4">ลงทะเบียนมาที่คณะสังคมศาสตร์ฯ (จํากัด
                              10 คน)
                              <br>ห้อง 413 อาคาร 4 ชั้น 4 คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล
                              <span class="badge badge-warning">เหลือที่นั่งอีก<?php echo $Day8_Session_2_313_balance;?>ที่</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="border border-dark p-2 mb-2 rounded">
                        <label>ห้องที่ 3 บทบาทรัฐและพลเมือง (ห้อง 414)</label><br>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day8-noon-5" name="day8-noon" class="custom-control-input" value="314_zoom">
                            <label class="custom-control-label" for="day8-noon-5">รับชมออนไลน์ผ่านโปรแกรม ZOOM</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day8-noon-6" name="day8-noon" class="custom-control-input" value="314_walkin">
                            <label class="custom-control-label" for="day8-noon-6">ลงทะเบียนมาที่คณะสังคมศาสตร์ฯ (จํากัด
                              10 คน)
                              <br>ห้อง 414 อาคาร 4 ชั้น 4 คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล
                              <span class="badge badge-warning">เหลือที่นั่งอีก<?php echo $Day8_Session_2_314_balance;?>ที่</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="border border-dark p-2 mb-2 rounded">
                        <label>ห้องที่ 4 Learning Challenges from Experiences in Southeast Asia and Japan (ห้อง 415)</label>
                        <br>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day8-noon-7" name="day8-noon" class="custom-control-input" value="315_zoom">
                            <label class="custom-control-label" for="day8-noon-7">รับชมออนไลน์ผ่านโปรแกรม ZOOM</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day8-noon-8" name="day8-noon" class="custom-control-input" value="315_walkin">
                            <label class="custom-control-label" for="day8-noon-8">ลงทะเบียนมาที่คณะสังคมศาสตร์ฯ (จํากัด
                              10 คน)
                              <br>ห้อง 415 อาคาร 4 ชั้น 4 คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล
                              <span class="badge badge-warning">เหลือที่นั่งอีก<?php echo $Day8_Session_2_315_balance;?>ที่</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-12 mt-2">
                    <hr>
                    <label>วันที่ 9 กันยายน 2563</label><button class="btn btn-sm btn-info ml-2" data-toggle="modal"
                      data-target="#modal-day9">ดูกำหนดการ</button><br>
                    <label>9.00 - 12.00 น.</label>
                    <ul>
                      <li>ปาฐกถานำ หัวข้อ “การศึกษายุคดิจิทัล”</li>
                      <li>เสวนาหัวข้อ “เทคโนโลยี ศิลปะและวัฒนธรรม ก้าวหน้าหรือถอยหลัง”</li>
                    </ul>
                    <div class="pl-3">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="day9-m-1" name="day9-m" class="custom-control-input" value="zoom" checked>
                        <label class="custom-control-label" for="day9-m-1">รับชมออนไลน์ผ่านโปรแกรม ZOOM</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="day9-m-2" name="day9-m" class="custom-control-input" value="walkin">
                        <label class="custom-control-label" for="day9-m-2">ลงทะเบียนมาที่คณะสังคมศาสตร์ฯ
                          <red>(เพื่อชมการถ่ายทอดสด)</red><span class="badge badge-warning">เหลือที่นั่งอีก
                          <?php echo $Day9_Session_1_balance;?>ที่</span></label>
                      </div>
                    </div>
                    <hr>
                    <label>13.00 - 15.00 น. (เลือกได้เพียง 1 ห้อง)</label>
                    <div class="pl-3">
                      <div class="border border-dark p-2 mb-2 rounded">
                        <label>ห้องที่ 1 จริยธรรม ปัญญาประดิษฐ์ การดูแลชีวิต (ห้อง 412)</label><br>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day9-noon-1" name="day9-noon" class="custom-control-input" value="312_zoom" checked>
                            <label class="custom-control-label" for="day9-noon-1"
                              id="food_normal">รับชมออนไลน์ผ่านโปรแกรม ZOOM</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day9-noon-2" name="day9-noon" class="custom-control-input" value="312_walkin">
                            <label class="custom-control-label" for="day9-noon-2">ลงทะเบียนมาที่คณะสังคมศาสตร์ฯ (จํากัด 10 คน)
                              <br>ห้อง 412 อาคาร 4 ชั้น 4 คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล
                              <span class="badge badge-warning">เหลือที่นั่งอีก<?php echo $Day9_Session_2_312_balance;?>ที่</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="border border-dark p-2 mb-2 rounded">
                        <label>ห้องที่ 2 โควิด สื่อสังคม อุปลักษณ์การเยียวยา (ห้อง 413)</label><br>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day9-noon-3" name="day9-noon" class="custom-control-input" value="313_zoom">
                            <label class="custom-control-label" for="day9-noon-3">รับชมออนไลน์ผ่านโปรแกรม ZOOM</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day9-noon-4" name="day9-noon" class="custom-control-input" value="313_walkin">
                            <label class="custom-control-label" for="day9-noon-4">ลงทะเบียนมาที่คณะสังคมศาสตร์ฯ (จํากัด 10 คน)
                              <br>ห้อง 413 อาคาร 4 ชั้น 4 คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล
                              <span class="badge badge-warning">เหลือที่นั่งอีก<?php echo $Day9_Session_2_313_balance;?>ที่</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="border border-dark p-2 mb-2 rounded">
                        <label>ห้องที่ 3 เพศสภาพ แพทยสภาพ ประวัติศาสตร์ไทย (ห้อง 414)</label><br>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day9-noon-5" name="day9-noon" class="custom-control-input" value="314_zoom">
                            <label class="custom-control-label" for="day9-noon-5">รับชมออนไลน์ผ่านโปรแกรม ZOOM</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day9-noon-6" name="day9-noon" class="custom-control-input" value="314_walkin">
                            <label class="custom-control-label" for="day9-noon-6">ลงทะเบียนมาที่คณะสังคมศาสตร์ฯ (จํากัด 10 คน)
                              <br>ห้อง 414 อาคาร 4 ชั้น 4 คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล
                              <span class="badge badge-warning">เหลือที่นั่งอีก<?php echo $Day9_Session_2_314_balance;?>ที่</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="border border-dark p-2 mb-2 rounded">
                        <label>ห้องที่ 4 พลเมือง การเรียนรู้ การบริหารการศึกษา (ห้อง 415)</label>
                        <br>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day9-noon-7" name="day9-noon" class="custom-control-input" value="315_zoom">
                            <label class="custom-control-label" for="day9-noon-7">รับชมออนไลน์ผ่านโปรแกรม ZOOM</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="day9-noon-8" name="day9-noon" class="custom-control-input" value="315_walkin">
                            <label class="custom-control-label" for="day9-noon-8">ลงทะเบียนมาที่คณะสังคมศาสตร์ฯ (จํากัด 10 คน)
                              <br>ห้อง 415 อาคาร 4 ชั้น 4 คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล
                              <span class="badge badge-warning">เหลือที่นั่งอีก<?php echo $Day9_Session_2_315_balance;?>ที่</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <hr>
                      <label>15.00 - 17.00 น.</label>
                      <ul>
                          <li>เทคโนโลยีกับการส่งเสริมโอกาสและศัลยภาพคนพิการ</li>
                          <li>โรค-ศิลป์: ชีวิต เทคโนโลยี วัฒนธรรม และสุขภาพ</li>
                          <li>ปิดการประชุม</li>
                        </ul>
                      <div class="pl-3">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="day9-last-1" name="day9-last" class="custom-control-input" value="zoom"
                            checked>
                          <label class="custom-control-label" for="day9-last-1" id="food_normal">รับชมออนไลน์ผ่านโปรแกรม
                            ZOOM</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="day9-last-2" name="day9-last" class="custom-control-input" value="walkin">
                          <label class="custom-control-label" for="day9-last-2">ลงทะเบียนมาที่คณะสังคมศาสตร์ฯ
                            <red>(เพื่อชมการถ่ายทอดสด)</red><span class="badge badge-warning">เหลือที่นั่งอีก<?php echo $Day9_Session_3_balance;?>ที่</span></label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row bg-blue mb-2" id="div-food">
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
                        <input type="radio" id="food5" name="food" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="food5">ไม่รับอาหาร</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6  mt-2">
                    <label for="food_allergy">แพ้อาหาร(ถ้ามี) / Food Allergy(If applicable)</label>
                    <input type="text" class="form-control" id="food_allergy" name="food_allergy"
                      placeholder="ระบุอาหารที่แพ้ (Please specify all food allergies)">
                  </div>
                </div>
            </div>
          </div>
          <input type="hidden" name="csrf" value="<?php echo $token_csrf; ?>">
          <input type="submit" name="submit" id="btnsubmit" class="btn btn-success mb-2 mt-2 col-12"
            value="ยืนยันการลงทะเบียน"  onclick="return confirm('ยืนยันการลงทะเบียน ตามข้อมูลที่ได้ระบุไว้?')">
         
          </form>
          <!-- Modal 1 -->
          <div class="modal" id="modal-day8" role="dialog" aria-labelledby="modal-day8-1">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">วันอังคารที่ 8 กันยายน 2563 </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row col-md-12 mark mb-2">
                    <h5 class="section-heading pt-2 mx-auto">วันอังคารที่ 8 กันยายน 2563</h5>
                  </div>
                  <div class="row col-md-12">
                    <div class="col-md-3  text-center">
                      <h6>08.00 - 08.30 น.</h6>
                    </div>
                    <div class="col-md-9">
                      <h6>ลงทะเบียน</h6>
                    </div>
                  </div>
                  <div class="row col-md-12  pt-2" style="background-color: #d6c8bc">
                    <div class="col-md-3 text-center">
                      <h6>08.30 - 09.00 น.</h6>
                    </div>
                    <div class="col-md-9">
                      <h6>กล่าวรายงาน โดย คณบดี คณะสังคมศาสตร์และมนุษยศาสตร์</br>
                        กล่าวต้อนรับ โดย อธิการบดีมหาวิทยาลัยมหิดล</br>
                        กล่าวเปิดงาน โดย ผู้อำนวยการ วช. และผู้แทนจาก สกสว. </br>
                      </h6>
                    </div>
                  </div>
                  <div class="row col-md-12 pt-2 ">
                    <div class="col-md-3  text-center">
                      <h6>09.00 – 10.30 น.</h6>
                    </div>
                    <div class="col-md-9">
                      <h6>ปาฐกถานำ Humanities, Science and Technology: An Inevitable Crossroads<br>
                        By Prof. Dr. Ainin Binti Sulaiman, University of Malaya <br>
                        ผู้ดำเนินรายการ
                        ผู้ช่วยศาสตราจารย์ <br>
                        ดร.มรกต ไมยเออร์ สถาบันวิจัยภาษาและวัฒนธรรมเอเชีย มหาวิทยาลัยมหิดล
                      </h6>
                    </div>
                  </div>
                  <div class="row col-md-12  pt-2" style="background-color: #d6c8bc">
                    <div class="col-md-3 text-center">
                      <h6>10.30 – 12.00 น.</h6>
                    </div>
                    <div class="col-md-9">
                      <h6>เสวนากลุ่ม หัวข้อ “มนุษยศาสตร์ การแพทย์และสุขภาพ: ประเด็นท้าทาย” <br>
                        โดย <br>
                        <ul>
                          <li>ศ.นพ. อร่าม โรจนสกุล คณะแพทยศาสตร์ โรงพยาบาลรามาธิบดี</li>
                          <li>ศ.ดร. ชื่นฤทัย กาญจนะจิตรา สถาบันวิจัยประชากรและสังคม มหาวิทยาลัยมหิดล</li>
                          <li>ผศ.ดร. ภาวิกา ศรีรัตนบัลล์ คณะรัฐศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย</li>
                        </ul>
                        ผู้ดำเนินรายการ <br>
                        อาจารย์ ดร.ปิยณัฐ ประถมวงษ์ คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล
                      </h6>
                    </div>
                  </div>
                  <div class="row col-md-12">
                    <div class="col-md-3  text-center">
                      <h6>12.00 – 13.00 น.</h6>
                    </div>
                    <div class="col-md-9">
                      <h6>รับประทานอาหารกลางวัน</h6>
                    </div>
                  </div>
                  <div class="row col-md-12  pt-2 mb-4" style="background-color: #d6c8bc">
                    <div class="col-md-3 text-center">
                      <h6>13.00 – 17.00 น.</h6>
                    </div>
                    <div class="col-md-9">
                      <div class="panel panel-default">
                        <div class="row border border-dark p-2 mb-2 rounded">
                          <h6>ห้องที่ 1 เกมออนไลน์ สื่อสังคมและแอปพลิเคชั่น (ห้อง 412)<br>
                            ผู้นำถก ...</h6>
                          <ul>
                            <li>
                              <h6>
                                อิทธิพลของอุตสาหกรรมธุรกิจเกมต่อชุดประสบการณ์การเล่นเกมส์และความทุกข์ทางสังคมของนักกีฬาอีสปอร์ต
                              </h6>
                              โดย พงศ์ธร ผลพัฒนาสกุลชัย
                            </li>
                            <li>
                              <h6>วัฒนธรรมกลิตช์: จากความผิดพลาดทางเทคโนโลยีสู่วัฒนธรรมของการรบกวน</h6>
                              โดย อรรถพล ปะมะโข
                            </li>
                            <li>
                              <h6>
                                ผลของทิศทางอารมณ์ของสารต่อความดึงดูดใจระหว่างบุคคลในการสร้างความสัมพันธ์แบบคนรู้จักผ่านแอปพลิเคชันไลน์
                              </h6>
                              โดย กาญจนา สุภาพงษ์, ธันยพร ศิริอริยพร และ ภัคนันท์ จิตต์ธรรม
                            </li>
                            <li>
                              <h6>สื่อสังคม ทุนนิยมสอดส่องและเครื่องมือทางการเมือง: มุมมองในทางรัฐศาสตร์</h6>
                              โดย สัพพัญญู วงศ์ชัย
                            </li>
                            <li>
                              <h6>การเมืองเรื่องร่างกายและการสร้างภาพตัวแทนวัยรุ่นสก๊อยออนไลน์</h6>
                              โดย ณัฐมน สะเภาคำ
                            </li>
                          </ul>
                        </div>
                        <div class="row border border-dark p-2 mb-2 rounded">
                          <h6>ห้องที่ 2 อัตลักษณ์ สังคมและวัฒนธรรม (ห้อง 413)<br>
                            ผู้นำถก ...</h6>
                          <ul>
                            <li>
                              <h6>ภาพสะท้อนอัตลักษณ์ถิ่นใต้ในสังคมพหุวัฒนธรรมจากสตรีทอาร์ตสู่คิวอาร์โค้ด:
                                กรณีศึกษาย่านเมืองเก่าสงขลา</h6>
                              โดย ปนัดดา ศิริพานิช
                            </li>
                            <li>
                              <h6>“‘ชา’ ของป้า ไม่เหมือน ‘ชา’ ของหมอ”
                                ข้อค้นพบในกระบวนการดึงศัพท์เพื่อจัดทำประมวลศัพท์กลุ่มอาการ Office Syndrome
                                ตามหลักศัพทวิทยา</h6>
                              โดย สิริลักษณ์ หุ่นศรีงาม ผลพานิช และ สกลกานต์ อินทร์ไทร
                            </li>
                            <li>
                              <h6>การศึกษาอัตลักษณ์ประเกือมเงินกับประเพณีส่งเสริมการท่องเที่ยวของจังหวัดสุรินทร์
                              </h6>
                              โดย ยโสธารา ศิริภาประภากร, สุริยา คลังฤทธิ์, สุพัตรา วะยะลุน และ ฐิติมา มีช้าง
                            </li>
                            <li>
                              <h6>การศึกษาต้นทุนทางวัฒนธรรมของชุมชนเพื่อพัฒนาการท่องเที่ยวแบบยั่งยืนโดยชุมชน
                                กรณีศึกษาบริเวณริมแม่น้ำเจ้าพระยาด้านทิศตะวันออกของกรุงเทพมหานครแถบพื้นที่เจริญกรุง
                              </h6>
                              โดย ชาดา เตรียมวิทยา
                            </li>
                            <li>
                              <h6>ตำนานทิ้งคนแก่ในเรื่องเล่าญี่ปุ่น: บทบาทของตำนานที่มีต่อสังคม</h6>
                              โดย อรรถยา สุวรรณระดา
                            </li>
                            <li>
                              <h6>นันทวันภาพยนตร์กับพื้นที่ทางสังคมของแรงงานอพยพอีสานในยุคดิจิทัล</h6>
                              โดย จิตติ เอื้อนรการกิจ
                            </li>
                          </ul>
                        </div>
                        <div class="row border border-dark p-2 mb-2 rounded">
                          <h6>ห้องที่ 3 บทบาทรัฐและพลเมือง (ห้อง 414)<br>
                            ผู้นำถก ...</h6>
                          <ul>
                            <li>
                              <h6>
                                ศึกษาเปรียบเทียบกลไกการใช้อำนาจของฝ่ายบริหารในกลุ่มประเทศที่ประสบผลสำเร็จในการควบคุมราคายา
                              </h6>
                              <h7>โดย ช้องนาง วิพุธานุพงษ์, สินีนาฏ กริชชาญชัย, พิทยา ไชยมหาพฤกษ์, สุรีย์ฉาย
                                พลวัน,และ สุภัสสร ภู่เจริญศิลป์</h7>
                            </li>
                            <li>
                              <h6>เมลิออยโดสิส: โรคเขตร้อนที่ถูกละเลยกับภาพสะท้อนความเหลื่อมล้ำทางสังคม</h6>
                              โดย อัจฉรา ยะราไสย
                            </li>
                            <li>
                              <h6>รัฐกับบทบาททางเทคโนโลยี และความท้าทายทางสิทธิมนุษยชน</h6>
                              โดย อำนาจ มงคลสืบสกุล
                            </li>
                            <li>
                              <h6>กลยุทธ์การสื่อสารขององค์กรผ่านกิจกรรมเพื่อแสดงความรับผิดชอบต่อสังคมในประเทศไทย
                              </h6>
                              โดย เนตรชนก พฤกษชาติ
                            </li>
                            <li>
                              <h6>พื้นที่พักพิงชั่วคราวกับความมั่นคงของชาติ</h6>
                              โดย บันดาล บัวแดง
                            </li>
                            <li>
                              <h6>ชาวบ้านผู้ตื่นตัว ชาวนาการเมือง และผู้ประกอบการทางการเมือง</h6>
                              โดย ชัยพงษ์ สำเนียง
                            </li>
                          </ul>
                        </div>
                        <div class="row border border-dark p-2 mb-2 rounded">
                          <h6>ห้องที่ 4 Learning Challenges from Experiences in Southeast Asia and Japan (ห้อง 415)<br>
                              ผู้นำถก</h6>
                          <ul>
                            <li>
                              <h6>A Design Prototype of International Student Application System in Japaneses
                                Universities</h6>
                              By Reiko Sato and Panchit Longpradit
                            </li>
                            <li>
                              <h6>The Effect of Motivation on Professional Development of Teachers in Mindat Township,
                                Chin State, Myanmar</h6>
                              By YU Mon Kyaw
                            </li>
                            <li>
                              <h6>Effects of Workplace Learning on Young Teachers’ Professional Identity in Henan
                                Province, China</h6>
                              By Zhijuan He and Poschanan Niramitchainont
                            </li>
                            <li>
                              <h6>Online Waisak: Celebration on the Conflicts of Indonesian Buddhists</h6>
                              By Jesada Buaban
                            </li>
                            <li>
                              <h6>The Face Men Thailand: Representations of Modern Thai Identity on Reality Television
                              </h6>
                              By Kwanchanok Jaisuekun
                            </li>
                            <li>
                              <h6>Migration and Affective Labour in Zadie Smith’s “The Embassy of Cambodia” and Haresh
                                Sharma’s Model Citizens</h6>
                              By Nanthanoot Udomlamun
                            </li>
                          </ul>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal 2 -->
          <div class="modal" id="modal-day9" tabindex="-1" role="dialog" aria-labelledby="modal-day8-2">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">วันพุธที่ 9 กันยายน 2563</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <div class="row col-md-12 mark mb-2">
                <h5 class="section-heading pt-2 mx-auto">วันพุธที่ 9 กันยายน 2563</h5>
            </div>
            <div class="row col-md-12">
                <div class="col-md-3  text-center">
                    <h6>09.00 – 10.00 น.</h6>
                </div>
                <div class="col-md-9">
                    <h6>ปาฐกถานำ หัวข้อ “การศึกษายุคดิจิทัล”</h6>
                    <br>รองศาสตราจารย์ ยืน ภู่วรวรรณ ที่ปรึกษาและผู้ทรงคุณวุฒิพิเศษ มหาวิทยาลัยเกษตรศาสตร์
                    ผู้ดำเนินรายการ อาจารย์ดร.ปกป้อง ส่องเมือง ภาควิชาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยธรรมศาสตร์
                </div>
            </div>
            <div class="row col-md-12  pt-2" style="background-color: #d6c8bc">
                <div class="col-md-3 text-center">
                    <h6>10.00 – 12.00 น.</h6>
                </div>
                <div class="col-md-9">
                    <h6>เสวนาหัวข้อ “เทคโนโลยี ศิลปะและวัฒนธรรม ก้าวหน้าหรือถอยหลัง”</h6>
                    <ul>
                        <li>รองศาสตราจารย์ ดร.วรพันธ์ คู่สกุลนิรันดร์ คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยมหิดล
                        </li>
                        <li>อาทิตย์ สุริยะวงศ์กุล มูลนิธิเพื่ออินเทอร์เน็ตและวัฒนธรรมพลเมือง และ
                            สถาบันการมองอนาคตนวัตกรรม สำนักงานวัตกรรมแห่งชาติ (องค์การมหาชน)</li>
                        <li>ธวัชชัย แสงธรรมชัย คณะทำงานโพธิเธียเตอร์</li>
                    </ul>
                    ผู้ดำเนินรายการ <br>ผู้ช่วยศาสตราจารย์ ดร.วิกานดา พรหมขุนทอง สถาบันวิจัยภาษาและวัฒนธรรมเอเชีย
                    มหาวิทยาลัยมหิดล

                </div>
            </div>
            <div class="row col-md-12  pt-2">
                <div class="col-md-3  text-center">
                    <h6>12.00 – 13.00 น.</h6>
                </div>
                <div class="col-md-9">
                    <h6>พักรับประทานอาหารกลางวัน</h6>
                </div>
            </div>
            <div class="row col-md-12  pt-2" style="background-color: #d6c8bc">
                <div class="col-md-3 text-center">
                    <h6>13.00 - 15.00 น.</h6>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-default">
                        
                        <div class="row border border-dark p-2 mb-2 rounded">
                            <h6>ห้องที่ 1 จริยธรรม ปัญญาประดิษฐ์ การดูแลชีวิต (ห้อง 412)<br>
                                ผู้นำถก</h6>
                            <ul>
                                <li>
                                    <h6>หมากล้อม, รถไฟ, รถไร้คนขับ, และปัญหาทางจริยธรรมของมนุษย์ที่ AI คิดแทนไม่ได้</h6>
                                    โดย เหมือนมาด มุกข์ประดิษฐ์
                                </li>
                                <li>
                                    <h6>ความสัมพันธ์ระหว่างสุญญนิยมกับเทคโนโลยี: สังคมออนไลน์ การเมือง และอนาคต</h6>
                                    โดย ชุติเดช เมธีชุติกุล
                                </li>
                                <li>
                                    <h6>พุทธวิธีการสื่อสารเพื่อสันติ: วิธีการสื่อสารเพื่อลดการใช้ประทุษวาจาในสังคม</h6>
                                    โดย พระปลัดระพิน พุทธิสาโร ด้วงลอย
                                </li>
                                <li>
                                    <h6>ปัญญาประดิษฐ์กับการดูแลผู้สูงอายุ</h6>
                                    โดย ปิยชัย นาคอ่อน
                                </li>
                                <li>
                                    <h6>เทคโนโลยี การดูแลสุขภาพ กับสังคมผู้สูงอายุ</h6>
                                    โดย ธีรวัจน์ อุดมสินเจริญกิจ
                                </li>
                            </ul>
                        </div>
                        <div class="row border border-dark p-2 mb-2 rounded">
                            <h6>ห้องที่ 2 โควิด สื่อสังคม อุปลักษณ์การเยียวยา (ห้อง 413)<br>
                                ผู้นำถก</h6>
                            <ul>
                                <li>
                                    <h6>บทบาทของอินเทอร์เน็ต เทคโนโลยีดิจิทัล และสื่อสังคมในช่วงการแพร่ระบาด
                                        ของไวรัสโคโรน่าสายพันธุ์ใหม่ (โควิด-19)</h6>
                                    โดย ศรัณย์ธร บุญพิทักษ์, บุญญสิตา บุษปะเกศ, ชลิต เฉียบพิมาย และ เฉลิมเกียรติ
                                    เฟื่องแก้ว
                                </li>
                                <li>
                                    <h6>ผลกระทบของไวรัสโคโรน่าสายพันธุ์ใหม่ 2019: แนวทางและการปฏิบัติ</h6>
                                    โดย รวี เรืองศรี
                                </li>
                                <li>
                                    <h6>การศึกษาการ์ตูนล้อเลียนในหนังสือพิมพ์เวียดนาม: สถานการณ์ไวรัสโคโรนา โควิด 19
                                    </h6>
                                    โดย รุจิวรรณ เหล่าไพโรจน์
                                </li>
                                <li>
                                    <h6>มโนอุปลักษณ์กับการปรับเปลี่ยนมุมมองต่อโรคโควิด-19:
                                        การวิเคราะห์ภาพในสื่อสังคมออนไลน์</h6>
                                    โดย นฤมล จิรพนากร
                                </li>
                                <li>
                                    <h6>สุนทรียะแห่งการบำบัดรักษา: อุปลักษณ์เชิงพิธีกรรมในผลงานศิลปะของโจเซฟ บอยส์
                                        กับมณเฑียร บุญมา</h6>
                                    โดย วรเทพ อรรคบุตร
                                </li>
                            </ul>
                        </div>
                        <div class="row border border-dark p-2 mb-2 rounded">
                            <h6>ห้องที่ 3 เพศสภาพ แพทยสภาพ ประวัติศาสตร์ไทย (ห้อง 414)<br>
                                ผู้นำถก</h6>
                            <ul>
                                <li>
                                    <h6>ระบบเขตแดนรัฐจารีตของสยาม</h6>
                                    โดย ฐนพงศ์ ลือขจรชัย
                                </li>
                                <li>
                                    <h6>“ฉันอยากเป็นทันตแพทย์”:จอมพล ป. พิบูลสงครามกับการเรียนการสอนด้านทันตกรรม ทศวรรษ
                                        2480-2490</h6>
                                    โดย ปรีดาภรณ์ เอี่ยมแจ๋
                                </li>
                                <li>
                                    <h6>ประวัติศาสตร์เพศสภาพกับการเผยแผ่คริสตศาสนาของมิชชันนารีสตรีอเมริกันเพรสไบทีเรียนในสยาม
                                    </h6>
                                    โดย วรธิภา สัตยานุศักดิ์กุล
                                </li>
                                <li>
                                    <h6>“ชีวิตครอบครัว”: ประวัติศาสตร์อารมณ์ความรู้สึกของชนชั้นกลางไทย ช่วงทศวรรษ
                                        2520-2530</h6>
                                    โดย ณัฏฐพงษ์ สกุลเลี่ยว และสายชล สัตยานุรักษ์
                                </li>
                                <li>
                                    <h6>เทคโนโลยี การดูแลสุขภาพ กับสังคมผู้สูงอายุ</h6>
                                    โดย ธีรวัจน์ อุดมสินเจริญกิจ
                                </li>
                            </ul>
                        </div>
                        <div class="row border border-dark p-2 mb-2 rounded">
                            <h6>ห้องที่ 4 พลเมือง การเรียนรู้ การบริหารการศึกษา (ห้อง 415)<br>
                                ผู้นำถก</h6>
                            <ul>
                                <li>
                                    <h6>นิเวศจิตตปัญญา: ประสบการณ์การเรียนรู้มิติภายในจากธรรมชาติ</h6>
                                    โดย ฐนพงศ์ ลือขจรชัย
                                </li>
                                <li>
                                    <h6>กระบวนการชาตินิยมพลเมือง:
                                        มโนทัศน์การศึกษาเพื่อความหลากหลายทางวัฒนธรรมที่ปรากฏในหลักสูตรพลเมืองศึกษาไทยและสิงคโปร์
                                    </h6>
                                    โดย ชรินทร์ มั่งคั่ง และอรสิริพิมพ์ บริหารธนโชติ
                                </li>
                                <li>
                                    <h6>โมดูลการบริหารงานระบบดูแลช่วยเหลือนักเรียนของโรงเรียนในพระราชูปถัมภ์ของสมเด็จพระบรมโอรสาธิราชฯ
                                        สยามมกุฎราชกุมาร</h6>
                                    โดย ณัฐริน เจริญเกียรติบวร และประเสริฐ อินทร์รักษ์
                                </li>
                                <li>
                                    <h6>Assessing English for Communication Program at Rajamangala University of
                                        Technology Srivijaya</h6>
                                    By Vikrom Chantarangkul
                                </li>
                                <li>
                                    <h6>Common Practices in Leadership Education: A Systematic Review</h6>
                                    By Supakit Boonanegpat
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-md-12 pt-2">
                <div class="col-md-3  text-center">
                    <h6>15.00 - 16.00 น.</h6>
                </div>
                <div class="col-md-9">
                    <h6>เทคโนโลยีกับการส่งเสริมโอกาสและศักยภาพคนพิการ</h6>
                    โดย คุณกฤษณะ ละไล ผู้สื่อข่าวและพิธีกรเนชั่นและไทยทีวีสีช่อง 3<br>
                    ผู้ดำเนินรายการ ผู้ช่วยศาสตราจารย์ ดร.กนกวรรณ ธราวรรณ สถาบันวิจัยประชากรและสังคม มหาวิทยาลัยมหิดล
                </div>
            </div>
            <div class="row col-md-12  pt-2 " style="background-color: #d6c8bc">
                <div class="col-md-3 text-center">
                    <h6>16.00 - 16.30 น.</h6>
                </div>
                <div class="col-md-9">
                    <h6>โรค-ศิลป์: ชีวิต เทคโนโลยี วัฒนธรรม และสุขภาพ</h6>
                    โดย นพ.โกมาตร จึงเสถียรทรัพย์ ผู้อำนวยการศูนย์มานุษยวิทยาสิรินธร <br>
                    ผู้ดำเนินรายการ ผู้ช่วยศาสตราจารย์ ดร.กนกวรรณ ธราวรรณ สถาบันวิจัยประชากรและสังคม มหาวิทยาลัยมหิดล
                </div>
            </div>
            <div class="row col-md-12  pt-2 mb-4">
                <div class="col-md-3  text-center">
                    <h6>16.30 - 17.00 น.</h6>
                </div>
                <div class="col-md-9">
                    <h6>กล่าวปิดการประชุม </h6>
                    โดย คณบดี คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล
                </div>
            </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="regis_guide" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ขั้นตอนการลงทะเบียนและส่งบทความวิชาการ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p><i class="fas fa-angle-double-right"></i> ลงทะเบียนในระบบ <a href="registration.php" class="mark4"> >>Click
              <<</a> </p> <p><i class="fas fa-angle-double-right"></i>
                ในส่วนของการส่งบทความวิชาการ หากท่านต้องการส่งบทความวิชาการ ให้เลือกหัวข้องานที่ต้องการเข้าร่วม
                <br><strong>"งานเวทีมนุษศาสตร์ วันที่ 8-9 กันยายน 2563 (2 วัน)"</strong> หรือ <strong>"เข้ารวมทั้ง 2 งาน
                  วันที่ 7-11 กันยายน 2563 (5 วัน)"</strong>
                <br>และช่องทำการเลือก <strong> "ส่งบทความวิชาการ"</strong> จะปรากฎส่วนของการ Upload บทความวิชาการขึ้นมา
                ให้ทำการเลือกหัวข้อย่อยของบทความวิชาการและทำการเลือกไฟล์ที่ต้องการ Upload
                <strong> โดยไฟล์ที่ Upload ต้องเป็นไฟล์นามสกุล doc หรือ docx เท่านั้น และต้องมีขนาดไม่เกิน 5
                  MB.</strong>
                <img src="img/regis_guide.png" class="responsive">
          </p>
          <p><i class="fas fa-angle-double-right"></i>
            หากท่านลงทะเบียนโดยที่ไม่ได้ทำการส่งบทความวิชาการในครั้งแรกแล้วต้องการ ส่งบทความวิชาการในภายหลัง <a
              href="publications_upload.php" class="mark4"> >>Click<<</a> </p> <p><i
                  class="fas fa-angle-double-right"></i> ตรวจสอบสถานะบทความ <a href="publications_check_status.php"
                  class="mark4"> >>Click<<</a> </p> </div> <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <?php 
  include "footer.html";
  ?>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/agency.min.js"></script>
  <script src="js/top_page.js"></script>
  <script src="js/check_regis_update.js"></script>
  <script src="js/preview.js"></script>
  <script type="text/javascript">
    var session_day8_1 = <?php echo $Day8_Session_1_balance ?>;
    var session_day8_2_312 = <?php echo $Day8_Session_2_312_balance ?>;
    var session_day8_2_313 = <?php echo $Day8_Session_2_313_balance ?>;
    var session_day8_2_314 = <?php echo $Day8_Session_2_314_balance ?>;
    var session_day8_2_315 = <?php echo $Day8_Session_2_315_balance ?>;
    var session_day9_1 = <?php echo $Day9_Session_1_balance ?>;
    var session_day9_2_312 = <?php echo $Day9_Session_2_312_balance ?>;
    var session_day9_2_313 = <?php echo  $Day9_Session_2_313_balance ?>;
    var session_day9_2_314 = <?php echo  $Day9_Session_2_314_balance ?>;
    var session_day9_2_315 = <?php echo  $Day9_Session_2_315_balance ?>;
    var session_day9_3 = <?php echo $Day9_Session_3_balance ?>;
    console.log(session_day8_2_312);

    if(session_day8_1 <= 0){
      $("#day8-m-2").prop("disabled", true);
    }
    if(session_day8_2_312 <= 0){
      $("#day8-noon-2").prop("disabled", true);
    }
    if(session_day8_2_313 <= 0){
      $("#day8-noon-4").prop("disabled", true);
    }
    if(session_day8_2_314 <= 0){
      $("#day8-noon-6").prop("disabled", true);
    }
    if(session_day8_2_315 <= 0){
      $("#day8-noon-8").prop("disabled", true);
    }
    if(session_day9_1 <= 0){
      $("#day9-m-2").prop("disabled", true);
    }
    if(session_day8_2_312 <= 0){
      $("#day9-noon-2").prop("disabled", true);
    }
    if(session_day8_2_313 <= 0){
      $("#day9-noon-4").prop("disabled", true);
    }
    if(session_day8_2_314 <= 0){
      $("#day9-noon-6").prop("disabled", true);
    }
    if(session_day8_2_315 <= 0){
      $("#day9-noon-8").prop("disabled", true);
    }
    if(session_day9_3 <= 0){
      $("#day9-last-2").prop("disabled", true);
    }


    function cfFunction() {
      confirm("ยืนยันการลงทะเบียน ตามข้อมูลที่ได้ระบุไว้");
    }
  </script>

</body>

</html>