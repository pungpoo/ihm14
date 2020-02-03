<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SOTL6</title>
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
    @media (max-width: 991px) {
      section {
        padding-top: 150px !important;
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
  <?php include "navbar.html"; include "connect.php";  include "workshop_count.php";  ?>
  <section class="bg-light" id="regis">
    <div class="container ">
      <div class="row">
        <div class=" col-md-12" id="single_regis">
          <div class="card">
            <h5 class="card-header text-center text-uppercase bg-info">SOTL6 - Group Registration</h5>
            <div class="card-body font-weight-bold">
              <div><a href="registration_regular.php" class="btn btn-success mb-2">ลงทะเบียน(สำหรับ 1 ท่าน)</a></div>
              <form class="form" id="regisForm" name="regisForm" action="check_regis_group.php" method="post">

                <!-- <****************** 1 *********************> -->
                <div class="card mb-2">
                  <h6 class="card-header text-center text-uppercase bg-info">ผู้ลงทะเบียน 1</h6>
                  <div class="m-2">
                    <div class="form-row ">
                      <div class="form-group col-md-4">
                        <label for="title_1">คำนำหน้าชื่อ (Title)<red>*</red></label>
                        <input class="form-control" list="title_1" name="title_1" placeholder="โปรดระบุ">
                        <datalist id="title_1">
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
                        <label for="fname_1">ชื่อ (Name)<red>*</red></label>
                        <input type="text" class="form-control" id="fname_1" name="fname_1" placeholder="ชื่อ(Name)"
                          required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_1">นามสกุล (Surname)<red>*</red></label>
                        <input type="text" class="form-control" id="lname_1" name="lname_1" placeholder="นามสกุล(Surname)"
                          required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender_1">เพศ (Gender)<red>*</red></label>
                        <select class="form-control" id="gender_1" name="gender_1">
                          <option value="M">ชาย (Male)</option>
                          <option value="F">หญิง (Female)</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age_1">อายุ (Age)<red>*</red></label>
                        <input type="number" class="form-control" max="99" id="age_1" name="age_1" placeholder="อายุ (Age)"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality_1">สัญชาติ (Nationality)<red>*</red></label>
                        <input type="text" class="form-control" id="nationality_1" name="nationality_1"
                          placeholder="สัญชาติ (Nationality)">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_1">E-mail<red>*</red></label>
                        <span id="check_email"></span>
                        <input type="email" class="form-control" id="email_1" name="email_1"
                          placeholder="Please provide the current e-mail address." required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="phone_1">เบอร์โทรศัพท์ (Phone Number)<red>*</red></label>
                        <input type="number" class="form-control" id="phone_1" name="phone_1"
                          placeholder="Please provide the contact phone number." required
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="emergency_phone_1">เบอร์โทรศัพท์ในกรณีฉุกเฉิน (Emergency Contact Phone Number)</label>
                        <input type="number" class="form-control" id="emergency_phone_1" name="emergency_phone_1"
                          placeholder="Please provide the emergency contact phone number."
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="affiliation_1">หน่วยงานต้นสังกัด (Affiliation)<red>*</red></label>
                        <input type="text" class="form-control" id="affiliation_1" name="affiliation_1"
                          placeholder="หน่วยงานต้นสังกัด  (Affiliation)" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label>ที่อยู่ของหน่วยงาน (Affiliation Address)<red>*</red></label>
                        <textarea class="form-control" id="affiliation_address_1" name="affiliation_address_1" rows="3"
                          placeholder="ที่อยู่ของหน่วยงาน (Affiliation Address)" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-12">
                        <label>รายละเอียดในการออกใบเสร็จ (Billing Information)</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="Billing1_1" name="billing_info_1" class="custom-control-input" value="1"
                              checked>
                            <label class="custom-control-label"
                              for="Billing1_1">ใช้ชื่อและที่อยู่ของต้นสังกัด(Affiliation's name and address)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="Billing2_1" name="billing_info_1" class="custom-control-input"
                              value="2">
                            <label class="custom-control-label" for="Billing2_1">อื่นๆ โปรดระบุ (Others, Pkeade
                              specify)</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row pl-4" id="Billing_detail_1">
                      <div class="form-group col-md-12">
                        <textarea class="form-control" id="billing_address_1" name="billing_address_1" rows="3"
                          placeholder="ระบุรายละเอียดในการออกใบเสร็จ (Billing Information)" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row ">
                      <div class="form-group col-6 mt-2">
                        <label>อาหาร (Food)</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food1_1" name="food_1" class="custom-control-input" value="1" checked>
                            <label class="custom-control-label" for="food1_1">ทั่วไป (Not Specific)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food2_1" name="food_1" class="custom-control-input" value="2">
                            <label class="custom-control-label" for="food2_1">มังสวิรัติ (Vegetarian)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food3_1" name="food_1" class="custom-control-input" value="3">
                            <label class="custom-control-label" for="food3_1">ฮาลาล (Halal)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food4_1" name="food_1" class="custom-control-input" value="4">
                            <label class="custom-control-label" for="food4_1">อื่นๆ โปรดระบุ (Others)</label>
                            <input type="text" class="form-control" name="food_other_1" id="food_other_1">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-6  mt-2">
                        <label for="food_allergy_1">แพ้อาหาร(ถ้ามี) / Food Allergy(If applicable)</label>
                        <input type="text" class="form-control" id="food_allergy_1" name="food_allergy_1"
                          placeholder="ระบุอาหารที่แพ้ (Please specify all food allergies)">
                      </div>
                    </div>
                    <!-- Workshop -->
                    <div class="form-row  mt-2">
                      <div class="form-group col-12 gray mt-2">
                        <div class="form-row pl-3" style="margin-bottom: -10px;">
                          <label class="mt-1">Workshop ที่ต้องการเข้าร่วม</label>
                          <label class="mt-1 "><a href="workshop.php" class="url-blue"
                              target="_blank">(ดูรายละเอียดเพิ่มเติม)</a></label><br>
                        </div>
                        <div class="form-row pl-3">
                          <label class="text-muted mt-1">I will attend workshop</label>
                          <label class="mt-1"><a href="workshop.php" class="url-blue" target="_blank">(More
                              Details)</a></label>
                        </div>
                        <!-- Day 1 -->
                        <div class="form-group ml-3">
                          <label style="margin-bottom: -5px;">วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (13.00 - 14.30
                            น.)</label><br>
                          <label class=" text-muted">Thursday 30 April, 2020 (13.00 - 14.30 hr.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_1_user1" name="workshop_day1_1"
                              value="w1">
                            <label class="custom-control-label" for="workshop_day1_1_user1">Workshop 1 : Design Thinking <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[0])){ echo "50"; }
                              else { echo $workshop_balance[0]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_2_user1" name="workshop_day1_1"
                              value="w2">
                            <label class="custom-control-label" for="workshop_day1_2_user1">Workshop 2 : Research to
                              Innovation <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[1])){ echo "50"; }
                              else { echo $workshop_balance[1]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_3_user1" name="workshop_day1_1"
                              value="w3">
                            <label class="custom-control-label" for="workshop_day1_3_user1">Workshop 3 : Contemplative
                              education: Learn Unlearn and Relearn <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[2])){ echo "50"; }
                              else { echo $workshop_balance[2]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_4_user1" name="workshop_day1_1"
                              value="w4">
                            <label class="custom-control-label" for="workshop_day1_4_user1">Workshop 4 : Development and
                              Implementation-Game design-Board game <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[3])){ echo "50"; }
                              else { echo $workshop_balance[3]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_5_user1" name="workshop_day1_1"
                              value="wn">
                            <label class="custom-control-label" for="workshop_day1_5_user1">ไม่เข้าร่วม Workshop</label>
                          </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="form-group ml-3">
                          <label style="margin-bottom: -5px;">วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (14.45 - 16.00
                            น.)</label><br>
                          <label class=" text-muted">Thursday 30 April, 2020 (14.45 - 16.00 hr.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_1_user1" name="workshop_day2_1"
                              value="w5">
                            <label class="custom-control-label" for="workshop_day2_1_user1">Workshop 5 : เนรมิตห้องเรียน 4.0
                              ด้วยเครื่องมือดิจิทัล <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[0])){ echo "50"; }
                              else { echo $workshop_balance_2[0]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_2_user1" name="workshop_day2_1"
                              value="w6">
                            <label class="custom-control-label" for="workshop_day2_2_user1">Workshop 6 : Micro mastery:
                              ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง “ความเก่งทีละเล็กทีละน้อย <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[1])){ echo "50"; }
                              else { echo $workshop_balance_2[1]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_3_user1" name="workshop_day2_1"
                              value="w7">
                            <label class="custom-control-label" for="workshop_day2_3_user1">Workshop 7 :
                              วิจัยจัดการเรียนการสอน <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[2])){ echo "50"; }
                              else { echo $workshop_balance_2[2]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_4_user1" name="workshop_day2_1"
                              value="w8">
                            <label class="custom-control-label" for="workshop_day2_4_user1">Workshop 8 :
                              สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[3])){ echo "40"; }
                              else { 
                                $workshop_balance_2[3] = $workshop_balance_2[3]-10;
                                echo $workshop_balance_2[3]; 
                              }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_5_user1" name="workshop_day2_1"
                              value="wn">
                            <label class="custom-control-label" for="workshop_day2_5_user1">ไม่เข้าร่วม Workshop</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <****************** 2 *********************> -->
                <div class="card mb-2">
                  <h6 class="card-header text-center text-uppercase bg-info">ผู้ลงทะเบียน 2</h6>
                  <div class="m-2">
                    <div class="form-row ">
                      <div class="form-group col-md-4">
                        <label for="title_2">คำนำหน้าชื่อ (Title)<red>*</red></label>
                        <input class="form-control" list="title_2" name="title_2" placeholder="โปรดระบุ">
                        <datalist id="title_2">
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
                        <label for="fname_2">ชื่อ (Name)<red>*</red></label>
                        <input type="text" class="form-control" id="fname_2" name="fname_2" placeholder="ชื่อ(Name)"
                          required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_2">นามสกุล (Surname)<red>*</red></label>
                        <input type="text" class="form-control" id="lname_2" name="lname_2" placeholder="นามสกุล(Surname)"
                          required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender_2">เพศ (Gender)<red>*</red></label>
                        <select class="form-control" id="gender_2" name="gender_2">
                          <option value="M">ชาย (Male)</option>
                          <option value="F">หญิง (Female)</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age_2">อายุ (Age)<red>*</red></label>
                        <input type="number" class="form-control" max="99" id="age_2" name="age_2" placeholder="อายุ (Age)"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality_2">สัญชาติ (Nationality)<red>*</red></label>
                        <input type="text" class="form-control" id="nationality_2" name="nationality_2"
                          placeholder="สัญชาติ (Nationality)">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_2">E-mail<red>*</red></label>
                        <span id="check_email"></span>
                        <input type="email" class="form-control" id="email_2" name="email_2"
                          placeholder="Please provide the current e-mail address." required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="phone_2">เบอร์โทรศัพท์ (Phone Number)<red>*</red></label>
                        <input type="number" class="form-control" id="phone_2" name="phone_2"
                          placeholder="Please provide the contact phone number." required
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="emergency_phone_2">เบอร์โทรศัพท์ในกรณีฉุกเฉิน (Emergency Contact Phone Number)</label>
                        <input type="number" class="form-control" id="emergency_phone_2" name="emergency_phone_2"
                          placeholder="Please provide the emergency contact phone number."
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="affiliation_2">หน่วยงานต้นสังกัด (Affiliation)<red>*</red></label>
                        <input type="text" class="form-control" id="affiliation_2" name="affiliation_2"
                          placeholder="หน่วยงานต้นสังกัด  (Affiliation)" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label>ที่อยู่ของหน่วยงาน (Affiliation Address)<red>*</red></label>
                        <textarea class="form-control" id="affiliation_address_2" name="affiliation_address_2" rows="3"
                          placeholder="ที่อยู่ของหน่วยงาน (Affiliation Address)" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-12">
                        <label>รายละเอียดในการออกใบเสร็จ (Billing Information)</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="Billing1_2" name="billing_info_2" class="custom-control-input" value="1"
                              checked>
                            <label class="custom-control-label"
                              for="Billing1_2">ใช้ชื่อและที่อยู่ของต้นสังกัด(Affiliation's name and address)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="Billing2_2" name="billing_info_2" class="custom-control-input"
                              value="2">
                            <label class="custom-control-label" for="Billing2_2">อื่นๆ โปรดระบุ (Others, Pkeade
                              specify)</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row pl-4" id="Billing_detail_2">
                      <div class="form-group col-md-12">
                        <textarea class="form-control" id="billing_address_2" name="billing_address_2" rows="3"
                          placeholder="ระบุรายละเอียดในการออกใบเสร็จ (Billing Information)" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row ">
                      <div class="form-group col-6 mt-2">
                        <label>อาหาร (Food)</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food1_2" name="food_2" class="custom-control-input" value="1" checked>
                            <label class="custom-control-label" for="food1_2">ทั่วไป (Not Specific)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food2_2" name="food_2" class="custom-control-input" value="2">
                            <label class="custom-control-label" for="food2_2">มังสวิรัติ (Vegetarian)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food3_2" name="food_2" class="custom-control-input" value="3">
                            <label class="custom-control-label" for="food3_2">ฮาลาล (Halal)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food4_2" name="food_2" class="custom-control-input" value="4">
                            <label class="custom-control-label" for="food4_2">อื่นๆ โปรดระบุ (Others)</label>
                            <input type="text" class="form-control" name="food_other_2" id="food_other_2">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-6  mt-2">
                        <label for="food_allergy_2">แพ้อาหาร(ถ้ามี) / Food Allergy(If applicable)</label>
                        <input type="text" class="form-control" id="food_allergy_2" name="food_allergy_2"
                          placeholder="ระบุอาหารที่แพ้ (Please specify all food allergies)">
                      </div>
                    </div>
                    <!-- Workshop -->
                    <div class="form-row  mt-2">
                      <div class="form-group col-12 gray mt-2">
                        <div class="form-row pl-3" style="margin-bottom: -10px;">
                          <label class="mt-1">Workshop ที่ต้องการเข้าร่วม</label>
                          <label class="mt-1 "><a href="workshop.php" class="url-blue"
                              target="_blank">(ดูรายละเอียดเพิ่มเติม)</a></label><br>
                        </div>
                        <div class="form-row pl-3">
                          <label class="text-muted mt-1">I will attend workshop</label>
                          <label class="mt-1"><a href="workshop.php" class="url-blue" target="_blank">(More
                              Details)</a></label>
                        </div>
                        <!-- Day 1 -->
                        <div class="form-group ml-3">
                          <label style="margin-bottom: -5px;">วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (13.00 - 14.30
                            น.)</label><br>
                          <label class=" text-muted">Thursday 30 April, 2020 (13.00 - 14.30 hr.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_1_user2" name="workshop_day1_2"
                              value="w1">
                            <label class="custom-control-label" for="workshop_day1_1_user2">Workshop 1 : Design Thinking <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[0])){ echo "50"; }
                              else { echo $workshop_balance[0]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_2_user2" name="workshop_day1_2"
                              value="w2">
                            <label class="custom-control-label" for="workshop_day1_2_user2">Workshop 2 : Research to
                              Innovation <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[1])){ echo "50"; }
                              else { echo $workshop_balance[1]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_3_user2" name="workshop_day1_2"
                              value="w3">
                            <label class="custom-control-label" for="workshop_day1_3_user2">Workshop 3 : Contemplative
                              education: Learn Unlearn and Relearn <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[2])){ echo "50"; }
                              else { echo $workshop_balance[2]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_4_user2" name="workshop_day1_2"
                              value="w4">
                            <label class="custom-control-label" for="workshop_day1_4_user2">Workshop 4 : Development and
                              Implementation-Game design-Board game <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[3])){ echo "50"; }
                              else { echo $workshop_balance[3]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_5_user2" name="workshop_day1_2"
                              value="wn">
                            <label class="custom-control-label" for="workshop_day1_5_user2">ไม่เข้าร่วม Workshop</label>
                          </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="form-group ml-3">
                          <label style="margin-bottom: -5px;">วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (14.45 - 16.00
                            น.)</label><br>
                          <label class=" text-muted">Thursday 30 April, 2020 (14.45 - 16.00 hr.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_1_user2" name="workshop_day2_2"
                              value="w5">
                            <label class="custom-control-label" for="workshop_day2_1_user2">Workshop 5 : เนรมิตห้องเรียน 4.0
                              ด้วยเครื่องมือดิจิทัล <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[0])){ echo "50"; }
                              else { echo $workshop_balance_2[0]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_2_user2" name="workshop_day2_2"
                              value="w6">
                            <label class="custom-control-label" for="workshop_day2_2_user2">Workshop 6 : Micro mastery:
                              ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง “ความเก่งทีละเล็กทีละน้อย <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[1])){ echo "50"; }
                              else { echo $workshop_balance_2[1]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_3_user2" name="workshop_day2_2"
                              value="w7">
                            <label class="custom-control-label" for="workshop_day2_3_user2">Workshop 7 :
                              วิจัยจัดการเรียนการสอน <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[2])){ echo "50"; }
                              else { echo $workshop_balance_2[2]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_4_user2" name="workshop_day2_2"
                              value="w8">
                            <label class="custom-control-label" for="workshop_day2_4_user2">Workshop 8 :
                              สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[3])){ echo "40"; }
                              else { 
                                $workshop_balance_2[3] = $workshop_balance_2[3]-10;
                                echo $workshop_balance_2[3]; 
                              }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_5_user2" name="workshop_day2_2"
                              value="wn">
                            <label class="custom-control-label" for="workshop_day2_5_user2">ไม่เข้าร่วม Workshop</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <****************** 3 *********************> -->
                <div class="card mb-2">
                  <h6 class="card-header text-center text-uppercase bg-info">ผู้ลงทะเบียน 3</h6>
                  <div class="m-2">
                    <div class="form-row ">
                      <div class="form-group col-md-4">
                        <label for="title_3">คำนำหน้าชื่อ (Title)<red>*</red></label>
                        <input class="form-control" list="title_3" name="title_3" placeholder="โปรดระบุ">
                        <datalist id="title_3">
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
                        <label for="fname_3">ชื่อ (Name)<red>*</red></label>
                        <input type="text" class="form-control" id="fname_3" name="fname_3" placeholder="ชื่อ(Name)"
                          required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_3">นามสกุล (Surname)<red>*</red></label>
                        <input type="text" class="form-control" id="lname_3" name="lname_3" placeholder="นามสกุล(Surname)"
                          required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender_3">เพศ (Gender)<red>*</red></label>
                        <select class="form-control" id="gender_3" name="gender_3">
                          <option value="M">ชาย (Male)</option>
                          <option value="F">หญิง (Female)</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age_3">อายุ (Age)<red>*</red></label>
                        <input type="number" class="form-control" max="99" id="age_3" name="age_3" placeholder="อายุ (Age)"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality_3">สัญชาติ (Nationality)<red>*</red></label>
                        <input type="text" class="form-control" id="nationality_3" name="nationality_3"
                          placeholder="สัญชาติ (Nationality)">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_3">E-mail<red>*</red></label>
                        <span id="check_email"></span>
                        <input type="email" class="form-control" id="email_3" name="email_3"
                          placeholder="Please provide the current e-mail address." required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="phone_3">เบอร์โทรศัพท์ (Phone Number)<red>*</red></label>
                        <input type="number" class="form-control" id="phone_3" name="phone_3"
                          placeholder="Please provide the contact phone number." required
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="emergency_phone_3">เบอร์โทรศัพท์ในกรณีฉุกเฉิน (Emergency Contact Phone Number)</label>
                        <input type="number" class="form-control" id="emergency_phone_3" name="emergency_phone_3"
                          placeholder="Please provide the emergency contact phone number."
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="affiliation_3">หน่วยงานต้นสังกัด (Affiliation)<red>*</red></label>
                        <input type="text" class="form-control" id="affiliation_3" name="affiliation_3"
                          placeholder="หน่วยงานต้นสังกัด  (Affiliation)" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label>ที่อยู่ของหน่วยงาน (Affiliation Address)<red>*</red></label>
                        <textarea class="form-control" id="affiliation_address_3" name="affiliation_address_3" rows="3"
                          placeholder="ที่อยู่ของหน่วยงาน (Affiliation Address)" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-12">
                        <label>รายละเอียดในการออกใบเสร็จ (Billing Information)</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="Billing1_3" name="billing_info_3" class="custom-control-input" value="1"
                              checked>
                            <label class="custom-control-label"
                              for="Billing1_3">ใช้ชื่อและที่อยู่ของต้นสังกัด(Affiliation's name and address)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="Billing2_3" name="billing_info_3" class="custom-control-input"
                              value="2">
                            <label class="custom-control-label" for="Billing2_3">อื่นๆ โปรดระบุ (Others, Pkeade
                              specify)</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row pl-4" id="Billing_detail_3">
                      <div class="form-group col-md-12">
                        <textarea class="form-control" id="billing_address_3" name="billing_address_3" rows="3"
                          placeholder="ระบุรายละเอียดในการออกใบเสร็จ (Billing Information)" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row ">
                      <div class="form-group col-6 mt-2">
                        <label>อาหาร (Food)</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food1_3" name="food_3" class="custom-control-input" value="1" checked>
                            <label class="custom-control-label" for="food1_3">ทั่วไป (Not Specific)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food2_3" name="food_3" class="custom-control-input" value="2">
                            <label class="custom-control-label" for="food2_3">มังสวิรัติ (Vegetarian)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food3_3" name="food_3" class="custom-control-input" value="3">
                            <label class="custom-control-label" for="food3_3">ฮาลาล (Halal)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food4_3" name="food_3" class="custom-control-input" value="4">
                            <label class="custom-control-label" for="food4_3">อื่นๆ โปรดระบุ (Others)</label>
                            <input type="text" class="form-control" name="food_other_3" id="food_other_3">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-6  mt-2">
                        <label for="food_allergy_3">แพ้อาหาร(ถ้ามี) / Food Allergy(If applicable)</label>
                        <input type="text" class="form-control" id="food_allergy_3" name="food_allergy_3"
                          placeholder="ระบุอาหารที่แพ้ (Please specify all food allergies)">
                      </div>
                    </div>
                    <!-- Workshop -->
                    <div class="form-row  mt-2">
                      <div class="form-group col-12 gray mt-2">
                        <div class="form-row pl-3" style="margin-bottom: -10px;">
                          <label class="mt-1">Workshop ที่ต้องการเข้าร่วม</label>
                          <label class="mt-1 "><a href="workshop.php" class="url-blue"
                              target="_blank">(ดูรายละเอียดเพิ่มเติม)</a></label><br>
                        </div>
                        <div class="form-row pl-3">
                          <label class="text-muted mt-1">I will attend workshop</label>
                          <label class="mt-1"><a href="workshop.php" class="url-blue" target="_blank">(More
                              Details)</a></label>
                        </div>
                        <!-- Day 1 -->
                        <div class="form-group ml-3">
                          <label style="margin-bottom: -5px;">วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (13.00 - 14.30
                            น.)</label><br>
                          <label class=" text-muted">Thursday 30 April, 2020 (13.00 - 14.30 hr.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_1_user3" name="workshop_day1_3"
                              value="w1">
                            <label class="custom-control-label" for="workshop_day1_1_user3">Workshop 1 : Design Thinking <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[0])){ echo "50"; }
                              else { echo $workshop_balance[0]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_2_user3" name="workshop_day1_3"
                              value="w2">
                            <label class="custom-control-label" for="workshop_day1_2_user3">Workshop 2 : Research to
                              Innovation <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[1])){ echo "50"; }
                              else { echo $workshop_balance[1]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_3_user3" name="workshop_day1_3"
                              value="w3">
                            <label class="custom-control-label" for="workshop_day1_3_user3">Workshop 3 : Contemplative
                              education: Learn Unlearn and Relearn <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[2])){ echo "50"; }
                              else { echo $workshop_balance[2]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_4_user3" name="workshop_day1_3"
                              value="w4">
                            <label class="custom-control-label" for="workshop_day1_4_user3">Workshop 4 : Development and
                              Implementation-Game design-Board game <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[3])){ echo "50"; }
                              else { echo $workshop_balance[3]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_5_user3" name="workshop_day1_3"
                              value="wn">
                            <label class="custom-control-label" for="workshop_day1_5_user3">ไม่เข้าร่วม Workshop</label>
                          </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="form-group ml-3">
                          <label style="margin-bottom: -5px;">วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (14.45 - 16.00
                            น.)</label><br>
                          <label class=" text-muted">Thursday 30 April, 2020 (14.45 - 16.00 hr.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_1_user3" name="workshop_day2_3"
                              value="w5">
                            <label class="custom-control-label" for="workshop_day2_1_user3">Workshop 5 : เนรมิตห้องเรียน 4.0
                              ด้วยเครื่องมือดิจิทัล <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[0])){ echo "50"; }
                              else { echo $workshop_balance_2[0]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_2_user3" name="workshop_day2_3"
                              value="w6">
                            <label class="custom-control-label" for="workshop_day2_2_user3">Workshop 6 : Micro mastery:
                              ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง “ความเก่งทีละเล็กทีละน้อย <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[1])){ echo "50"; }
                              else { echo $workshop_balance_2[1]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_3_user3" name="workshop_day2_3"
                              value="w7">
                            <label class="custom-control-label" for="workshop_day2_3_user3">Workshop 7 :
                              วิจัยจัดการเรียนการสอน <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[2])){ echo "50"; }
                              else { echo $workshop_balance_2[2]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_4_user3" name="workshop_day2_3"
                              value="w8">
                            <label class="custom-control-label" for="workshop_day2_4_user3">Workshop 8 :
                              สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[3])){ echo "40"; }
                              else { 
                                $workshop_balance_2[3] = $workshop_balance_2[3]-10;
                                echo $workshop_balance_2[3]; 
                              }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_5_user3" name="workshop_day2_3"
                              value="wn">
                            <label class="custom-control-label" for="workshop_day2_5_user3">ไม่เข้าร่วม Workshop</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <****************** 4 *********************> -->
                <div class="card mb-2">
                  <h6 class="card-header text-center text-uppercase bg-info">ผู้ลงทะเบียน 4</h6>
                  <div class="m-2">
                    <div class="form-row ">
                      <div class="form-group col-md-4">
                        <label for="title_4">คำนำหน้าชื่อ (Title)<red>*</red></label>
                        <input class="form-control" list="title_4" name="title_4" placeholder="โปรดระบุ">
                        <datalist id="title_4">
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
                        <label for="fname_4">ชื่อ (Name)<red>*</red></label>
                        <input type="text" class="form-control" id="fname_4" name="fname_4" placeholder="ชื่อ(Name)"
                          required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_4">นามสกุล (Surname)<red>*</red></label>
                        <input type="text" class="form-control" id="lname_4" name="lname_4" placeholder="นามสกุล(Surname)"
                          required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender_4">เพศ (Gender)<red>*</red></label>
                        <select class="form-control" id="gender_4" name="gender_4">
                          <option value="M">ชาย (Male)</option>
                          <option value="F">หญิง (Female)</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age_4">อายุ (Age)<red>*</red></label>
                        <input type="number" class="form-control" max="99" id="age_4" name="age_4" placeholder="อายุ (Age)"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality_4">สัญชาติ (Nationality)<red>*</red></label>
                        <input type="text" class="form-control" id="nationality_4" name="nationality_4"
                          placeholder="สัญชาติ (Nationality)">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_4">E-mail<red>*</red></label>
                        <span id="check_email"></span>
                        <input type="email" class="form-control" id="email_4" name="email_4"
                          placeholder="Please provide the current e-mail address." required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="phone_4">เบอร์โทรศัพท์ (Phone Number)<red>*</red></label>
                        <input type="number" class="form-control" id="phone_4" name="phone_4"
                          placeholder="Please provide the contact phone number." required
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="emergency_phone_4">เบอร์โทรศัพท์ในกรณีฉุกเฉิน (Emergency Contact Phone Number)</label>
                        <input type="number" class="form-control" id="emergency_phone_4" name="emergency_phone_4"
                          placeholder="Please provide the emergency contact phone number."
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="affiliation_4">หน่วยงานต้นสังกัด (Affiliation)<red>*</red></label>
                        <input type="text" class="form-control" id="affiliation_4" name="affiliation_4"
                          placeholder="หน่วยงานต้นสังกัด  (Affiliation)" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label>ที่อยู่ของหน่วยงาน (Affiliation Address)<red>*</red></label>
                        <textarea class="form-control" id="affiliation_address_4" name="affiliation_address_4" rows="3"
                          placeholder="ที่อยู่ของหน่วยงาน (Affiliation Address)" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-12">
                        <label>รายละเอียดในการออกใบเสร็จ (Billing Information)</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="Billing1_4" name="billing_info_4" class="custom-control-input" value="1"
                              checked>
                            <label class="custom-control-label"
                              for="Billing1_4">ใช้ชื่อและที่อยู่ของต้นสังกัด(Affiliation's name and address)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="Billing2_4" name="billing_info_4" class="custom-control-input"
                              value="2">
                            <label class="custom-control-label" for="Billing2_4">อื่นๆ โปรดระบุ (Others, Pkeade
                              specify)</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row pl-4" id="Billing_detail_4">
                      <div class="form-group col-md-12">
                        <textarea class="form-control" id="billing_address_4" name="billing_address_4" rows="3"
                          placeholder="ระบุรายละเอียดในการออกใบเสร็จ (Billing Information)" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row ">
                      <div class="form-group col-6 mt-2">
                        <label>อาหาร (Food)</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food1_4" name="food_4" class="custom-control-input" value="1" checked>
                            <label class="custom-control-label" for="food1_4">ทั่วไป (Not Specific)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food2_4" name="food_4" class="custom-control-input" value="2">
                            <label class="custom-control-label" for="food2_4">มังสวิรัติ (Vegetarian)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food3_4" name="food_4" class="custom-control-input" value="3">
                            <label class="custom-control-label" for="food3_4">ฮาลาล (Halal)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food4_4" name="food_4" class="custom-control-input" value="4">
                            <label class="custom-control-label" for="food4_4">อื่นๆ โปรดระบุ (Others)</label>
                            <input type="text" class="form-control" name="food_other_4" id="food_other_4">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-6  mt-2">
                        <label for="food_allergy_4">แพ้อาหาร(ถ้ามี) / Food Allergy(If applicable)</label>
                        <input type="text" class="form-control" id="food_allergy_4" name="food_allergy_4"
                          placeholder="ระบุอาหารที่แพ้ (Please specify all food allergies)">
                      </div>
                    </div>
                    <!-- Workshop -->
                    <div class="form-row  mt-2">
                      <div class="form-group col-12 gray mt-2">
                        <div class="form-row pl-3" style="margin-bottom: -10px;">
                          <label class="mt-1">Workshop ที่ต้องการเข้าร่วม</label>
                          <label class="mt-1 "><a href="workshop.php" class="url-blue"
                              target="_blank">(ดูรายละเอียดเพิ่มเติม)</a></label><br>
                        </div>
                        <div class="form-row pl-3">
                          <label class="text-muted mt-1">I will attend workshop</label>
                          <label class="mt-1"><a href="workshop.php" class="url-blue" target="_blank">(More
                              Details)</a></label>
                        </div>
                        <!-- Day 1 -->
                        <div class="form-group ml-3">
                          <label style="margin-bottom: -5px;">วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (13.00 - 14.30
                            น.)</label><br>
                          <label class=" text-muted">Thursday 30 April, 2020 (13.00 - 14.30 hr.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_1_user4" name="workshop_day1_4"
                              value="w1">
                            <label class="custom-control-label" for="workshop_day1_1_user4">Workshop 1 : Design Thinking <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[0])){ echo "50"; }
                              else { echo $workshop_balance[0]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_2_user4" name="workshop_day1_4"
                              value="w2">
                            <label class="custom-control-label" for="workshop_day1_2_user4">Workshop 2 : Research to
                              Innovation <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[1])){ echo "50"; }
                              else { echo $workshop_balance[1]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_3_user4" name="workshop_day1_4"
                              value="w3">
                            <label class="custom-control-label" for="workshop_day1_3_user4">Workshop 3 : Contemplative
                              education: Learn Unlearn and Relearn <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[2])){ echo "50"; }
                              else { echo $workshop_balance[2]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_4_user4" name="workshop_day1_4"
                              value="w4">
                            <label class="custom-control-label" for="workshop_day1_4_user4">Workshop 4 : Development and
                              Implementation-Game design-Board game <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[3])){ echo "50"; }
                              else { echo $workshop_balance[3]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_5_user4" name="workshop_day1_4"
                              value="wn">
                            <label class="custom-control-label" for="workshop_day1_5_user4">ไม่เข้าร่วม Workshop</label>
                          </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="form-group ml-3">
                          <label style="margin-bottom: -5px;">วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (14.45 - 16.00
                            น.)</label><br>
                          <label class=" text-muted">Thursday 30 April, 2020 (14.45 - 16.00 hr.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_1_user4" name="workshop_day2_4"
                              value="w5">
                            <label class="custom-control-label" for="workshop_day2_1_user4">Workshop 5 : เนรมิตห้องเรียน 4.0
                              ด้วยเครื่องมือดิจิทัล <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[0])){ echo "50"; }
                              else { echo $workshop_balance_2[0]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_2_user4" name="workshop_day2_4"
                              value="w6">
                            <label class="custom-control-label" for="workshop_day2_2_user4">Workshop 6 : Micro mastery:
                              ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง “ความเก่งทีละเล็กทีละน้อย <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[1])){ echo "50"; }
                              else { echo $workshop_balance_2[1]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_3_user4" name="workshop_day2_4"
                              value="w7">
                            <label class="custom-control-label" for="workshop_day2_3_user4">Workshop 7 :
                              วิจัยจัดการเรียนการสอน <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[2])){ echo "50"; }
                              else { echo $workshop_balance_2[2]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_4_user4" name="workshop_day2_4"
                              value="w8">
                            <label class="custom-control-label" for="workshop_day2_4_user4">Workshop 8 :
                              สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[3])){ echo "40"; }
                              else { 
                                $workshop_balance_2[3] = $workshop_balance_2[3]-10;
                                echo $workshop_balance_2[3]; 
                              }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_5_user4" name="workshop_day2_4"
                              value="wn">
                            <label class="custom-control-label" for="workshop_day2_5_user4">ไม่เข้าร่วม Workshop</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <****************** 5 *********************> -->
                <div class="card mb-2">
                  <h6 class="card-header text-center text-uppercase bg-info">ผู้ลงทะเบียน 5</h6>
                  <div class="m-2">
                    <div class="form-row ">
                      <div class="form-group col-md-4">
                        <label for="title_5">คำนำหน้าชื่อ (Title)<red>*</red></label>
                        <input class="form-control" list="title_5" name="title_5" placeholder="โปรดระบุ">
                        <datalist id="title_5">
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
                        <label for="fname_5">ชื่อ (Name)<red>*</red></label>
                        <input type="text" class="form-control" id="fname_5" name="fname_5" placeholder="ชื่อ(Name)"
                          required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_5">นามสกุล (Surname)<red>*</red></label>
                        <input type="text" class="form-control" id="lname_5" name="lname_5" placeholder="นามสกุล(Surname)"
                          required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender_5">เพศ (Gender)<red>*</red></label>
                        <select class="form-control" id="gender_5" name="gender_5">
                          <option value="M">ชาย (Male)</option>
                          <option value="F">หญิง (Female)</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age_5">อายุ (Age)<red>*</red></label>
                        <input type="number" class="form-control" max="99" id="age_5" name="age_5" placeholder="อายุ (Age)"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality_5">สัญชาติ (Nationality)<red>*</red></label>
                        <input type="text" class="form-control" id="nationality_5" name="nationality_5"
                          placeholder="สัญชาติ (Nationality)">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_5">E-mail<red>*</red></label>
                        <span id="check_email"></span>
                        <input type="email" class="form-control" id="email_5" name="email_5"
                          placeholder="Please provide the current e-mail address." required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="phone_5">เบอร์โทรศัพท์ (Phone Number)<red>*</red></label>
                        <input type="number" class="form-control" id="phone_5" name="phone_5"
                          placeholder="Please provide the contact phone number." required
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="emergency_phone_5">เบอร์โทรศัพท์ในกรณีฉุกเฉิน (Emergency Contact Phone Number)</label>
                        <input type="number" class="form-control" id="emergency_phone_5" name="emergency_phone_5"
                          placeholder="Please provide the emergency contact phone number."
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="affiliation_5">หน่วยงานต้นสังกัด (Affiliation)<red>*</red></label>
                        <input type="text" class="form-control" id="affiliation_5" name="affiliation_5"
                          placeholder="หน่วยงานต้นสังกัด  (Affiliation)" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label>ที่อยู่ของหน่วยงาน (Affiliation Address)<red>*</red></label>
                        <textarea class="form-control" id="affiliation_address_5" name="affiliation_address_5" rows="3"
                          placeholder="ที่อยู่ของหน่วยงาน (Affiliation Address)" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-12">
                        <label>รายละเอียดในการออกใบเสร็จ (Billing Information)</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="Billing1_5" name="billing_info_5" class="custom-control-input" value="1"
                              checked>
                            <label class="custom-control-label"
                              for="Billing1_5">ใช้ชื่อและที่อยู่ของต้นสังกัด(Affiliation's name and address)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="Billing2_5" name="billing_info_5" class="custom-control-input"
                              value="2">
                            <label class="custom-control-label" for="Billing2_5">อื่นๆ โปรดระบุ (Others, Pkeade
                              specify)</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row pl-4" id="Billing_detail_5">
                      <div class="form-group col-md-12">
                        <textarea class="form-control" id="billing_address_5" name="billing_address_5" rows="3"
                          placeholder="ระบุรายละเอียดในการออกใบเสร็จ (Billing Information)" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row ">
                      <div class="form-group col-6 mt-2">
                        <label>อาหาร (Food)</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food1_5" name="food_5" class="custom-control-input" value="1" checked>
                            <label class="custom-control-label" for="food1_5">ทั่วไป (Not Specific)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food2_5" name="food_5" class="custom-control-input" value="2">
                            <label class="custom-control-label" for="food2_5">มังสวิรัติ (Vegetarian)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food3_5" name="food_5" class="custom-control-input" value="3">
                            <label class="custom-control-label" for="food3_5">ฮาลาล (Halal)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food4_5" name="food_5" class="custom-control-input" value="4">
                            <label class="custom-control-label" for="food4_5">อื่นๆ โปรดระบุ (Others)</label>
                            <input type="text" class="form-control" name="food_other_5" id="food_other_5">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-6  mt-2">
                        <label for="food_allergy_5">แพ้อาหาร(ถ้ามี) / Food Allergy(If applicable)</label>
                        <input type="text" class="form-control" id="food_allergy_5" name="food_allergy_5"
                          placeholder="ระบุอาหารที่แพ้ (Please specify all food allergies)">
                      </div>
                    </div>
                    <!-- Workshop -->
                    <div class="form-row  mt-2">
                      <div class="form-group col-12 gray mt-2">
                        <div class="form-row pl-3" style="margin-bottom: -10px;">
                          <label class="mt-1">Workshop ที่ต้องการเข้าร่วม</label>
                          <label class="mt-1 "><a href="workshop.php" class="url-blue"
                              target="_blank">(ดูรายละเอียดเพิ่มเติม)</a></label><br>
                        </div>
                        <div class="form-row pl-3">
                          <label class="text-muted mt-1">I will attend workshop</label>
                          <label class="mt-1"><a href="workshop.php" class="url-blue" target="_blank">(More
                              Details)</a></label>
                        </div>
                        <!-- Day 1 -->
                        <div class="form-group ml-3">
                          <label style="margin-bottom: -5px;">วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (13.00 - 14.30
                            น.)</label><br>
                          <label class=" text-muted">Thursday 30 April, 2020 (13.00 - 14.30 hr.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_1_user5" name="workshop_day1_5"
                              value="w1">
                            <label class="custom-control-label" for="workshop_day1_1_user5">Workshop 1 : Design Thinking <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[0])){ echo "50"; }
                              else { echo $workshop_balance[0]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_2_user5" name="workshop_day1_5"
                              value="w2">
                            <label class="custom-control-label" for="workshop_day1_2_user5">Workshop 2 : Research to
                              Innovation <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[1])){ echo "50"; }
                              else { echo $workshop_balance[1]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_3_user5" name="workshop_day1_5"
                              value="w3">
                            <label class="custom-control-label" for="workshop_day1_3_user5">Workshop 3 : Contemplative
                              education: Learn Unlearn and Relearn <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[2])){ echo "50"; }
                              else { echo $workshop_balance[2]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_4_user5" name="workshop_day1_5"
                              value="w4">
                            <label class="custom-control-label" for="workshop_day1_4_user5">Workshop 4 : Development and
                              Implementation-Game design-Board game <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[3])){ echo "50"; }
                              else { echo $workshop_balance[3]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_5_user5" name="workshop_day1_5"
                              value="wn">
                            <label class="custom-control-label" for="workshop_day1_5_user5">ไม่เข้าร่วม Workshop</label>
                          </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="form-group ml-3">
                          <label style="margin-bottom: -5px;">วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (14.45 - 16.00
                            น.)</label><br>
                          <label class=" text-muted">Thursday 30 April, 2020 (14.45 - 16.00 hr.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_1_user5" name="workshop_day2_5"
                              value="w5">
                            <label class="custom-control-label" for="workshop_day2_1_user5">Workshop 5 : เนรมิตห้องเรียน 4.0
                              ด้วยเครื่องมือดิจิทัล <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[0])){ echo "50"; }
                              else { echo $workshop_balance_2[0]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_2_user5" name="workshop_day2_5"
                              value="w6">
                            <label class="custom-control-label" for="workshop_day2_2_user5">Workshop 6 : Micro mastery:
                              ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง “ความเก่งทีละเล็กทีละน้อย <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[1])){ echo "50"; }
                              else { echo $workshop_balance_2[1]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_3_user5" name="workshop_day2_5"
                              value="w7">
                            <label class="custom-control-label" for="workshop_day2_3_user5">Workshop 7 :
                              วิจัยจัดการเรียนการสอน <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[2])){ echo "50"; }
                              else { echo $workshop_balance_2[2]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_4_user5" name="workshop_day2_5"
                              value="w8">
                            <label class="custom-control-label" for="workshop_day2_4_user5">Workshop 8 :
                              สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[3])){ echo "40"; }
                              else { 
                                $workshop_balance_2[3] = $workshop_balance_2[3]-10;
                                echo $workshop_balance_2[3]; 
                              }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_5_user5" name="workshop_day2_5"
                              value="wn">
                            <label class="custom-control-label" for="workshop_day2_5_user5">ไม่เข้าร่วม Workshop</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>>
                <!-- <****************** 6 *********************> -->
                <div class="card mb-2">
                  <h6 class="card-header text-center text-uppercase bg-info">ผู้ลงทะเบียน 6</h6>
                  <div class="m-2">
                    <div class="form-row ">
                      <div class="form-group col-md-4">
                        <label for="title_6">คำนำหน้าชื่อ (Title)<red>*</red></label>
                        <input class="form-control" list="title_6" name="title_6" placeholder="โปรดระบุ">
                        <datalist id="title_6">
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
                        <label for="fname_6">ชื่อ (Name)<red>*</red></label>
                        <input type="text" class="form-control" id="fname_6" name="fname_6" placeholder="ชื่อ(Name)"
                          required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')" oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_6">นามสกุล (Surname)<red>*</red></label>
                        <input type="text" class="form-control" id="lname_6" name="lname_6" placeholder="นามสกุล(Surname)"
                          required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender_6">เพศ (Gender)<red>*</red></label>
                        <select class="form-control" id="gender_6" name="gender_6">
                          <option value="M">ชาย (Male)</option>
                          <option value="F">หญิง (Female)</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age_6">อายุ (Age)<red>*</red></label>
                        <input type="number" class="form-control" max="99" id="age_6" name="age_6" placeholder="อายุ (Age)"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality_6">สัญชาติ (Nationality)<red>*</red></label>
                        <input type="text" class="form-control" id="nationality_6" name="nationality_6"
                          placeholder="สัญชาติ (Nationality)">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_6">E-mail<red>*</red></label>
                        <span id="check_email"></span>
                        <input type="email" class="form-control" id="email_6" name="email_6"
                          placeholder="Please provide the current e-mail address." required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="phone_6">เบอร์โทรศัพท์ (Phone Number)<red>*</red></label>
                        <input type="number" class="form-control" id="phone_6" name="phone_6"
                          placeholder="Please provide the contact phone number." required
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="emergency_phone_6">เบอร์โทรศัพท์ในกรณีฉุกเฉิน (Emergency Contact Phone Number)</label>
                        <input type="number" class="form-control" id="emergency_phone_6" name="emergency_phone_6"
                          placeholder="Please provide the emergency contact phone number."
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="affiliation_6">หน่วยงานต้นสังกัด (Affiliation)<red>*</red></label>
                        <input type="text" class="form-control" id="affiliation_6" name="affiliation_6"
                          placeholder="หน่วยงานต้นสังกัด  (Affiliation)" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label>ที่อยู่ของหน่วยงาน (Affiliation Address)<red>*</red></label>
                        <textarea class="form-control" id="affiliation_address_6" name="affiliation_address_6" rows="3"
                          placeholder="ที่อยู่ของหน่วยงาน (Affiliation Address)" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-12">
                        <label>รายละเอียดในการออกใบเสร็จ (Billing Information)</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="Billing1_6" name="billing_info_6" class="custom-control-input" value="1"
                              checked>
                            <label class="custom-control-label"
                              for="Billing1_6">ใช้ชื่อและที่อยู่ของต้นสังกัด(Affiliation's name and address)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="Billing2_6" name="billing_info_6" class="custom-control-input"
                              value="2">
                            <label class="custom-control-label" for="Billing2_6">อื่นๆ โปรดระบุ (Others, Pkeade
                              specify)</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row pl-4" id="Billing_detail_6">
                      <div class="form-group col-md-12">
                        <textarea class="form-control" id="billing_address_6" name="billing_address_6" rows="3"
                          placeholder="ระบุรายละเอียดในการออกใบเสร็จ (Billing Information)" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row ">
                      <div class="form-group col-6 mt-2">
                        <label>อาหาร (Food)</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food1_6" name="food_6" class="custom-control-input" value="1" checked>
                            <label class="custom-control-label" for="food1_6">ทั่วไป (Not Specific)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food2_6" name="food_6" class="custom-control-input" value="2">
                            <label class="custom-control-label" for="food2_6">มังสวิรัติ (Vegetarian)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food3_6" name="food_6" class="custom-control-input" value="3">
                            <label class="custom-control-label" for="food3_6">ฮาลาล (Halal)</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food4_6" name="food_6" class="custom-control-input" value="4">
                            <label class="custom-control-label" for="food4_6">อื่นๆ โปรดระบุ (Others)</label>
                            <input type="text" class="form-control" name="food_other_6" id="food_other_6">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-6  mt-2">
                        <label for="food_allergy_6">แพ้อาหาร(ถ้ามี) / Food Allergy(If applicable)</label>
                        <input type="text" class="form-control" id="food_allergy_6" name="food_allergy_6"
                          placeholder="ระบุอาหารที่แพ้ (Please specify all food allergies)">
                      </div>
                    </div>
                    <!-- Workshop -->
                    <div class="form-row  mt-2">
                      <div class="form-group col-12 gray mt-2">
                        <div class="form-row pl-3" style="margin-bottom: -10px;">
                          <label class="mt-1">Workshop ที่ต้องการเข้าร่วม</label>
                          <label class="mt-1 "><a href="workshop.php" class="url-blue"
                              target="_blank">(ดูรายละเอียดเพิ่มเติม)</a></label><br>
                        </div>
                        <div class="form-row pl-3">
                          <label class="text-muted mt-1">I will attend workshop</label>
                          <label class="mt-1"><a href="workshop.php" class="url-blue" target="_blank">(More
                              Details)</a></label>
                        </div>
                        <!-- Day 1 -->
                        <div class="form-group ml-3">
                          <label style="margin-bottom: -5px;">วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (13.00 - 14.30
                            น.)</label><br>
                          <label class=" text-muted">Thursday 30 April, 2020 (13.00 - 14.30 hr.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_1_user6" name="workshop_day1_6"
                              value="w1">
                            <label class="custom-control-label" for="workshop_day1_1_user6">Workshop 1 : Design Thinking <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[0])){ echo "50"; }
                              else { echo $workshop_balance[0]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_2_user6" name="workshop_day1_6"
                              value="w2">
                            <label class="custom-control-label" for="workshop_day1_2_user6">Workshop 2 : Research to
                              Innovation <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[1])){ echo "50"; }
                              else { echo $workshop_balance[1]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_3_user6" name="workshop_day1_6"
                              value="w3">
                            <label class="custom-control-label" for="workshop_day1_3_user6">Workshop 3 : Contemplative
                              education: Learn Unlearn and Relearn <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[2])){ echo "50"; }
                              else { echo $workshop_balance[2]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_4_user6" name="workshop_day1_6"
                              value="w4">
                            <label class="custom-control-label" for="workshop_day1_4_user6">Workshop 4 : Development and
                              Implementation-Game design-Board game <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance[3])){ echo "50"; }
                              else { echo $workshop_balance[3]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_5_user6" name="workshop_day1_6"
                              value="wn">
                            <label class="custom-control-label" for="workshop_day1_5_user6">ไม่เข้าร่วม Workshop</label>
                          </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="form-group ml-3">
                          <label style="margin-bottom: -5px;">วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (14.45 - 16.00
                            น.)</label><br>
                          <label class=" text-muted">Thursday 30 April, 2020 (14.45 - 16.00 hr.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_1_user6" name="workshop_day2_6"
                              value="w5">
                            <label class="custom-control-label" for="workshop_day2_1_user6">Workshop 5 : เนรมิตห้องเรียน 4.0
                              ด้วยเครื่องมือดิจิทัล <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[0])){ echo "50"; }
                              else { echo $workshop_balance_2[0]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_2_user6" name="workshop_day2_6"
                              value="w6">
                            <label class="custom-control-label" for="workshop_day2_2_user6">Workshop 6 : Micro mastery:
                              ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง “ความเก่งทีละเล็กทีละน้อย <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[1])){ echo "50"; }
                              else { echo $workshop_balance_2[1]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_3_user6" name="workshop_day2_6"
                              value="w7">
                            <label class="custom-control-label" for="workshop_day2_3_user6">Workshop 7 :
                              วิจัยจัดการเรียนการสอน <span class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[2])){ echo "50"; }
                              else { echo $workshop_balance_2[2]; }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_4_user6" name="workshop_day2_6"
                              value="w8">
                            <label class="custom-control-label" for="workshop_day2_4_user6">Workshop 8 :
                              สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning <span
                                class="badge badge-warning">เหลือที่นั่งอีก
                                <?php 
                              if (empty($workshop_balance_2[3])){ echo "40"; }
                              else { 
                                $workshop_balance_2[3] = $workshop_balance_2[3]-10;
                                echo $workshop_balance_2[3]; 
                              }
                            ?>
                                ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_5_user6" name="workshop_day2_6"
                              value="wn">
                            <label class="custom-control-label" for="workshop_day2_5_user6">ไม่เข้าร่วม Workshop</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Regis fee -->
                <div class="form-row pay-rate mt-4">
                  <div class="form-group col-md-8">
                    <label>อัตราค่าลงทะเบียน</label>
                    <!-- Group of material radios - option 1 -->
                    <div class="pl-3">
                      <div class="custom-control">
                        <label>- Early Bird 2,500 บาท </label>
                      </div>
                      <div class="custom-control">
                        <label>- Regular 3,000 บาท</label>
                      </div>
                      <div class="custom-control">
                        <label>- Group (สำหรับผู้ลงทะเบียน 6 ท่าน) 16,000 บาท <span class="badge badge-danger">**Active
                            Now**</span></label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Regis fee -->
            </div>
            <input type="submit" name="submit" id="btnsubmit" class="btn btn-success mb-5 col-4 offset-4"
              value="ยืนยันการลงทะเบียน" onclick="clicksubmit()">
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

</body>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for this template -->
<script src="js/agency.min.js"></script>
<script src="js/top_page.js"></script>
<script src="js/check_regis_group.js"></script>

<script>
function clicksubmit() {
  confirm("ยืนยันการบันทึกข้อมูล \n\r ระบบอาจใช้เวลาในการบันึกข้อมูลซักครู่");
}
</script>

</html>