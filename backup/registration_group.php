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
        padding-top: 200px  !important;
        /* margin-top: 120px; */

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
                        <label for="title_th_1">คำนำหน้าชื่อ<red>*</red></label>
                        <input class="form-control" list="title_th_1" name="title_th_1" placeholder="โปรดระบุ">
                        <datalist id="title_th_1">
                          <option value="นาย">
                          <option value="นาง">
                          <option value="นางสาว">
                          <option value="ดร.">
                          <option value="ผศ.">
                          <option value="ผศ.ดร.">
                          <option value="รศ.">
                          <option value="รศ.ดร.">
                          <option value="ศ.">
                          <option value="ศ.ดร.">
                          <option value="อื่นๆ โปรดระบุ....">
                        </datalist>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_th_1">ชื่อ (ไทย)<red>*</red></label>
                        <input type="text" class="form-control" id="fname_th_1" name="fname_th_1"
                          placeholder="ชื่อ(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_th_1">นามสกุล (ไทย)<red>*</red></label>
                        <input type="text" class="form-control" id="lname_th_1" name="lname_th_1"
                          placeholder="นามสกุล(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_eng_1">ชื่อ (Eng)</label>
                        <input type="text" class="form-control" id="fname_eng_1" name="fname_eng_1"
                          placeholder="Name (Not required.)" oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_eng_1">นามสกุล (Eng)</label>
                        <input type="text" class="form-control" id="lname_eng_1" name="lname_eng_1"
                          placeholder="Lastname (Not required.)" oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender_1">เพศ<red>*</red></label>
                        <select class="form-control" id="gender_1" name="gender_1">
                          <option value="M">ชาย</option>
                          <option value="F">หญิง</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age_1">อายุ<red>*</red></label>
                        <input type="number" class="form-control" max="99" id="age_1" name="age_1" placeholder="อายุ"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality_1">สัญชาติ<red>*</red></label>
                        <input type="text" class="form-control" id="nationality_1" name="nationality_1"
                          placeholder="สัญชาติ">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_1">E-mail<red>*</red></label>
                        <span id="check_email_1"></span>
                        <input type="email" class="form-control" id="email_1" name="email_1"
                          placeholder="กรุณาใช้ E-mail ที่ติดต่อได้จริง" required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="phone_1">เบอร์โทรศัพท์<red>*</red></label>
                        <input type="number" class="form-control" id="phone_1" name="phone_1"
                          placeholder="กรุณาใช้เบอร์โทรศัพท์ที่สามารถติดต่อได้" required
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="emergency_phone_1">เบอร์โทรศัพท์ในกรณีฉุกเฉิน</label>
                        <input type="number" class="form-control" id="emergency_phone_1" name="emergency_phone_1"
                          placeholder="เบอร์โทรศัพท์ฉุกเฉินที่ต้องการให้ติดต่อ"
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="affiliation_1">หน่วยงานต้นสังกัด<red>*</red></label>
                        <input type="text" class="form-control" id="affiliation_1" name="affiliation_1"
                          placeholder="หน่วยงานต้นสังกัด" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <!-- จังหวัด -->
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="province_1">จังหวัด<red>*</red></label>
                        <select class="form-control" id="province_1" name="province_1">
                          <option value="">เลือกจังหวัด</option>
                          <?php
                          $stmt = $conn->query("SELECT province_name_th FROM tbl_province");
                          $i = 1;
                          //$province = $stmt->fetch();
                            // $thSQL= "SELECT id,country_id,country_name_en FROM tbl_province order by id asc";
                            // $thQuery= $conn->query($thSQL) or die($conn->error);
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                            //echo("<option value='$thARR[country_id]'>$thARR[country_name_en]</option>");
                            echo("<option value='$row[province_name_th]'>$row[province_name_th]</option>");
                            $i++;
                            }
                      ?>
                        </select>
                      </div>
                    </div>
                    <!-- จังหวัด -->
                    <div class="form-row">
                      <div class="form-group col-12">
                        <label for="adds_1">ที่อยู่ในการออกใบเสร็จ</label>
                        <textarea class="form-control" id="adds_1" name="adds_1" rows="3"
                          placeholder="หากไม่ระบุจะทำการออกใบเสร็จในนามหน่วยงานต้นสังกัด" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-4 mt-2">
                        <label>อาหาร</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food1" name="food_1" class="custom-control-input" value="1" checked>
                            <label class="custom-control-label" for="food1">ทั่วไป</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food2" name="food_1" class="custom-control-input" value="2">
                            <label class="custom-control-label" for="food2">มังสวิรัติ</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food3" name="food_1" class="custom-control-input" value="3">
                            <label class="custom-control-label" for="food3">ฮาลาล</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-8  mt-2">
                        <label for="food_allergy_1">แพ้อาหาร(ถ้ามี)</label>
                        <input type="text" class="form-control" id="food_allergy_1" name="food_allergy_1"
                          placeholder="ระบุอาหารที่แพ้">
                      </div>
                    </div>

                    <!-- Workshop -->
                    <div class="form-row  mt-2">
                      <div class="form-group col-12 gray mt-2">
                        <label class="mt-1">Workshop ที่ต้องการเข้าร่วม</label>
                        <label class="mt-1"><a href="workshop.php" class="url-blue"
                            target="_blank">(ดูรายละเอียดเพิ่มเติม)</a></label>
                        <!-- Day 1 -->
                        <div class="form-group ml-3">
                          <label>วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (13.00 - 14.30 น.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_1_1" name="workshop_day1_1" value="w1">
                            <label class="custom-control-label" for="workshop_day1_1_1">Workshop 1 : Design
                              Thinking <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[0]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_1_2" name="workshop_day1_1" value="w2">
                            <label class="custom-control-label" for="workshop_day1_1_2">Workshop 2 : Research to
                              Innovation <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[1]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_1_3" name="workshop_day1_1" value="w3">
                            <label class="custom-control-label" for="workshop_day1_1_3">Workshop 3 : Contemplative
                              education: Learn Unlearn and Relearn <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[2]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_1_4" name="workshop_day1_1" value="w4">
                            <label class="custom-control-label" for="workshop_day1_1_4">Workshop 4 : Development and
                              Implementation-Game design-Board game <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[3]; ?> ที่</span></label>
                          </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="form-group ml-3">
                          <label>วันพฤหัสบดีที่ 1 พฤษภาคม พ.ศ. 2563 (14.45 - 16.00 น.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_1_1" name="workshop_day2_1" value="w5">
                            <label class="custom-control-label" for="workshop_day2_1_1">Workshop 5 : เนรมิตห้องเรียน 4.0
                              ด้วยเครื่องมือดิจิทัล <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[0]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_1_2" name="workshop_day2_1" value="w6">
                            <label class="custom-control-label" for="workshop_day2_1_2">Workshop 6 : Micro mastery:
                              ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง “ความเก่งทีละเล็กทีละน้อย <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[1]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_1_3" name="workshop_day2_1" value="w7">
                            <label class="custom-control-label" for="workshop_day2_1_3">Workshop 7 :
                              วิจัยจัดการเรียนการสอน <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[2]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_1_4" name="workshop_day2_1" value="w8">
                            <label class="custom-control-label" for="workshop_day2_1_4">Workshop 8 :
                              สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[3]; ?> ที่</span></label>
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
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="title_th_2">คำนำหน้าชื่อ<red>*</red></label>
                        <input class="form-control" list="title_th_2" name="title_th_2" placeholder="โปรดระบุ">
                        <datalist id="title_th_2">
                          <option value="นาย">
                          <option value="นาง">
                          <option value="นางสาว">
                          <option value="ดร.">
                          <option value="ผศ.">
                          <option value="ผศ.ดร.">
                          <option value="รศ.">
                          <option value="รศ.ดร.">
                          <option value="ศ.">
                          <option value="ศ.ดร.">
                          <option value="อื่นๆ โปรดระบุ....">
                        </datalist>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_th_2">ชื่อ (ไทย)<red>*</red></label>
                        <input type="text" class="form-control" id="fname_th_2" name="fname_th_2"
                          placeholder="ชื่อ(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_th_2">นามสกุล (ไทย)<red>*</red></label>
                        <input type="text" class="form-control" id="lname_th_2" name="lname_th_2"
                          placeholder="นามสกุล(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_eng_2">ชื่อ (Eng)</label>
                        <input type="text" class="form-control" id="fname_eng_2" name="fname_eng_2"
                          placeholder="Name (Not required.)" oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_eng_2">นามสกุล (Eng)</label>
                        <input type="text" class="form-control" id="lname_eng_2" name="lname_eng_2"
                          placeholder="Lastname (Not required.)" oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender_2">เพศ<red>*</red></label>
                        <select class="form-control" id="gender_2" name="gender_2">
                          <option value="M">ชาย</option>
                          <option value="F">หญิง</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age_2">อายุ<red>*</red></label>
                        <input type="number" class="form-control" max="99" id="age_2" name="age_2" placeholder="อายุ"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality_2">สัญชาติ<red>*</red></label>
                        <input type="text" class="form-control" id="nationality_2" name="nationality_2"
                          placeholder="สัญชาติ">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_2">E-mail<red>*</red></label>
                        <span id="check_email_2"></span>
                        <input type="email" class="form-control" id="email_2" name="email_2"
                          placeholder="กรุณาใช้ E-mail ที่ติดต่อได้จริง" required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="phone_2">เบอร์โทรศัพท์<red>*</red></label>
                        <input type="number" class="form-control" id="phone_2" name="phone_2"
                          placeholder="กรุณาใช้เบอร์โทรศัพท์ที่สามารถติดต่อได้" required
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="emergency_phone_2">เบอร์โทรศัพท์ในกรณีฉุกเฉิน</label>
                        <input type="number" class="form-control" id="emergency_phone_2" name="emergency_phone_2"
                          placeholder="เบอร์โทรศัพท์ฉุกเฉินที่ต้องการให้ติดต่อ"
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="affiliation_2">หน่วยงานต้นสังกัด<red>*</red></label>
                        <input type="text" class="form-control" id="affiliation_2" name="affiliation_2"
                          placeholder="หน่วยงานต้นสังกัด" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <!-- จังหวัด -->
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="province_2">จังหวัด<red>*</red></label>
                        <select class="form-control" id="province_2" name="province_2">
                          <option value="">เลือกจังหวัด</option>
                          <?php
                          $stmt = $conn->query("SELECT province_name_th FROM tbl_province");
                          $i = 1;
                          //$province = $stmt->fetch();
                            // $thSQL= "SELECT id,country_id,country_name_en FROM tbl_province order by id asc";
                            // $thQuery= $conn->query($thSQL) or die($conn->error);
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                            //echo("<option value='$thARR[country_id]'>$thARR[country_name_en]</option>");
                            echo("<option value='$row[province_name_th]'>$row[province_name_th]</option>");
                            $i++;
                            }
                      ?>
                        </select>
                      </div>
                    </div>
                    <!-- จังหวัด -->
                    <div class="form-row">
                      <div class="form-group col-12">
                        <label for="adds_2">ที่อยู่ในการออกใบเสร็จ</label>
                        <textarea class="form-control" id="adds_2" name="adds_2" rows="3"
                          placeholder="หากไม่ระบุจะทำการออกใบเสร็จในนามหน่วยงานต้นสังกัด" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-4 mt-2">
                        <label>อาหาร</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food1_2" name="food_2" class="custom-control-input" value="1"
                              checked>
                            <label class="custom-control-label" for="food1_2">ทั่วไป</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food2_2" name="food_2" class="custom-control-input" value="2">
                            <label class="custom-control-label" for="food2_2">มังสวิรัติ</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food3_2" name="food_2" class="custom-control-input" value="3">
                            <label class="custom-control-label" for="food3_2">ฮาลาล</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-8  mt-2">
                        <label for="food_allergy_2">แพ้อาหาร(ถ้ามี)</label>
                        <input type="text" class="form-control" id="food_allergy_2" name="food_allergy_2"
                          placeholder="ระบุอาหารที่แพ้">
                      </div>
                    </div>
                    <!-- Workshop -->
                    <div class="form-row  mt-2">
                      <div class="form-group col-12 gray mt-2">
                        <label class="mt-1">Workshop ที่ต้องการเข้าร่วม</label>
                        <label class="mt-1"><a href="workshop.php" class="url-blue"
                            target="_blank">(ดูรายละเอียดเพิ่มเติม)</a></label>
                        <!-- Day 1 -->
                        <div class="form-group ml-3">
                          <label>วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (13.00 - 14.30 น.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_2_1 " name="workshop_day1_2"value="w1">
                            <label class="custom-control-label" for="workshop_day1_2_1">Workshop 1 : Design
                              Thinking <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[0]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_2_2" name="workshop_day1_2"value="w2">
                            <label class="custom-control-label" for="workshop_day1_2_2">Workshop 2 : Research to
                              Innovation <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[1]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_2_3" name="workshop_day1_2"value="w3">
                            <label class="custom-control-label" for="workshop_day1_2_3">Workshop 3 : Contemplative
                              education: Learn Unlearn and Relearn <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[2]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_2_4" name="workshop_day1_2"value="w4">
                            <label class="custom-control-label" for="workshop_day1_2_4">Workshop 4 : Development and
                              Implementation-Game design-Board game <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[3]; ?> ที่</span></label>
                          </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="form-group ml-3">
                          <label>วันพฤหัสบดีที่ 1 พฤษภาคม พ.ศ. 2563 (14.45 - 16.00 น.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_2_1 " name="workshop_day2_2" value="w5">
                            <label class="custom-control-label" for="workshop_day2_2_1">Workshop 5 : เนรมิตห้องเรียน 4.0
                              ด้วยเครื่องมือดิจิทัล <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[0]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_2_2" name="workshop_day2_2" value="w6">
                            <label class="custom-control-label" for="workshop_day2_2_2">Workshop 6 : Micro mastery:
                              ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง “ความเก่งทีละเล็กทีละน้อย <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[1]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_2_3" name="workshop_day2_2" value="w7">
                            <label class="custom-control-label" for="workshop_day2_2_3">Workshop 7 :
                              วิจัยจัดการเรียนการสอน <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[2]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_2_4" name="workshop_day2_2" value="w8">
                            <label class="custom-control-label" for="workshop_day2_2_4">Workshop 8 :
                              สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[3]; ?> ที่</span></label>
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
                        <label for="title_th_3">คำนำหน้าชื่อ<red>*</red></label>
                        <input class="form-control" list="title_th_3" name="title_th_3" placeholder="โปรดระบุ">
                        <datalist id="title_th_3">
                          <option value="นาย">
                          <option value="นาง">
                          <option value="นางสาว">
                          <option value="ดร.">
                          <option value="ผศ.">
                          <option value="ผศ.ดร.">
                          <option value="รศ.">
                          <option value="รศ.ดร.">
                          <option value="ศ.">
                          <option value="ศ.ดร.">
                          <option value="อื่นๆ โปรดระบุ....">
                        </datalist>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_th_3">ชื่อ (ไทย)<red>*</red></label>
                        <input type="text" class="form-control" id="fname_th_3" name="fname_th_3"
                          placeholder="ชื่อ(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_th_3">นามสกุล (ไทย)<red>*</red></label>
                        <input type="text" class="form-control" id="lname_th_3" name="lname_th_3"
                          placeholder="นามสกุล(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_eng_3">ชื่อ (Eng)</label>
                        <input type="text" class="form-control" id="fname_eng_3" name="fname_eng_3"
                          placeholder="Name (Not required.)" oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_eng_3">นามสกุล (Eng)</label>
                        <input type="text" class="form-control" id="lname_eng_3" name="lname_eng_3"
                          placeholder="Lastname (Not required.)" oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender_3">เพศ<red>*</red></label>
                        <select class="form-control" id="gender_3" name="gender_3">
                          <option value="M">ชาย</option>
                          <option value="F">หญิง</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age_3">อายุ<red>*</red></label>
                        <input type="number" class="form-control" max="99" id="age_3" name="age_3" placeholder="อายุ"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality_3">สัญชาติ<red>*</red></label>
                        <input type="text" class="form-control" id="nationality_3" name="nationality_3"
                          placeholder="สัญชาติ">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_3">E-mail<red>*</red></label>
                        <span id="check_email_3"></span>
                        <input type="email" class="form-control" id="email_3" name="email_3"
                          placeholder="กรุณาใช้ E-mail ที่ติดต่อได้จริง" required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="phone_3">เบอร์โทรศัพท์<red>*</red></label>
                        <input type="number" class="form-control" id="phone_3" name="phone_3"
                          placeholder="กรุณาใช้เบอร์โทรศัพท์ที่สามารถติดต่อได้" required
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="emergency_phone_3">เบอร์โทรศัพท์ในกรณีฉุกเฉิน</label>
                        <input type="number" class="form-control" id="emergency_phone_3" name="emergency_phone_3"
                          placeholder="เบอร์โทรศัพท์ฉุกเฉินที่ต้องการให้ติดต่อ"
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="affiliation_3">หน่วยงานต้นสังกัด<red>*</red></label>
                        <input type="text" class="form-control" id="affiliation_3" name="affiliation_3"
                          placeholder="หน่วยงานต้นสังกัด" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <!-- จังหวัด -->
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="province_3">จังหวัด<red>*</red></label>
                        <select class="form-control" id="province_3" name="province_3">
                          <option value="">เลือกจังหวัด</option>
                          <?php
                          $stmt = $conn->query("SELECT province_name_th FROM tbl_province");
                          $i = 1;
                          //$province = $stmt->fetch();
                            // $thSQL= "SELECT id,country_id,country_name_en FROM tbl_province order by id asc";
                            // $thQuery= $conn->query($thSQL) or die($conn->error);
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                            //echo("<option value='$thARR[country_id]'>$thARR[country_name_en]</option>");
                            echo("<option value='$row[province_name_th]'>$row[province_name_th]</option>");
                            $i++;
                            }
                      ?>
                        </select>
                      </div>
                    </div>
                    <!-- จังหวัด -->
                    <div class="form-row">
                      <div class="form-group col-12">
                        <label for="adds_3">ที่อยู่ในการออกใบเสร็จ</label>
                        <textarea class="form-control" id="adds_3" name="adds_3" rows="3"
                          placeholder="หากไม่ระบุจะทำการออกใบเสร็จในนามหน่วยงานต้นสังกัด" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-4 mt-2">
                        <label>อาหาร</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food1_3" name="food_3" class="custom-control-input" value="1"
                              checked>
                            <label class="custom-control-label" for="food1_3">ทั่วไป</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food2_3" name="food_3" class="custom-control-input" value="2">
                            <label class="custom-control-label" for="food2_3">มังสวิรัติ</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food3_3" name="food_3" class="custom-control-input" value="3">
                            <label class="custom-control-label" for="food3_3">ฮาลาล</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-8  mt-2">
                        <label for="food_allergy_3">แพ้อาหาร(ถ้ามี)</label>
                        <input type="text" class="form-control" id="food_allergy_3" name="food_allergy_3"
                          placeholder="ระบุอาหารที่แพ้">
                      </div>
                    </div>
                    <!-- Workshop -->
                    <div class="form-row  mt-2">
                      <div class="form-group col-12 gray mt-2">
                        <label class="mt-1">Workshop ที่ต้องการเข้าร่วม</label>
                        <label class="mt-1"><a href="workshop.php" class="url-blue"
                            target="_blank">(ดูรายละเอียดเพิ่มเติม)</a></label>
                        <!-- Day 1 -->
                        <div class="form-group ml-3">
                          <label>วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (13.00 - 14.30 น.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_3_1 " name="workshop_day1_3" value="w1">
                            <label class="custom-control-label" for="workshop_day1_3_1">Workshop 1 : Design
                              Thinking <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[0]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_3_2" name="workshop_day1_3" value="w2">
                            <label class="custom-control-label" for="workshop_day1_3_2">Workshop 2 : Research to
                              Innovation <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[1]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_3_3" name="workshop_day1_3" value="w3">
                            <label class="custom-control-label" for="workshop_day1_3_3">Workshop 3 : Contemplative
                              education: Learn Unlearn and Relearn <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[2]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_3_4" name="workshop_day1_3" value="w4">
                            <label class="custom-control-label" for="workshop_day1_3_4">Workshop 4 : Development and
                              Implementation-Game design-Board game <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[3]; ?> ที่</span></label>
                          </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="form-group ml-3">
                          <label>วันพฤหัสบดีที่ 1 พฤษภาคม พ.ศ. 2563 (14.45 - 16.00 น.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_3_1 " name="workshop_day2_3" value="w5">
                            <label class="custom-control-label" for="workshop_day2_3_1 ">Workshop 5 : เนรมิตห้องเรียน 4.0
                              ด้วยเครื่องมือดิจิทัล <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[0]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_3_2 " name="workshop_day2_3" value="w6">
                            <label class="custom-control-label" for="workshop_day2_3_2 ">Workshop 6 : Micro mastery:
                              ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง “ความเก่งทีละเล็กทีละน้อย
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[1]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_3_3 " name="workshop_day2_3" value="w7">
                            <label class="custom-control-label" for="workshop_day2_3_3 ">Workshop 7 :
                              วิจัยจัดการเรียนการสอน
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[2]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_3_4 " name="workshop_day2_3" value="w8">
                            <label class="custom-control-label" for="workshop_day2_3_4 ">Workshop 8 :
                              สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[3]; ?> ที่</span></label>
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
                        <label for="title_th_4">คำนำหน้าชื่อ<red>*</red></label>
                        <input class="form-control" list="title_th_4" name="title_th_4" placeholder="โปรดระบุ">
                        <datalist id="title_th_4">
                          <option value="นาย">
                          <option value="นาง">
                          <option value="นางสาว">
                          <option value="ดร.">
                          <option value="ผศ.">
                          <option value="ผศ.ดร.">
                          <option value="รศ.">
                          <option value="รศ.ดร.">
                          <option value="ศ.">
                          <option value="ศ.ดร.">
                          <option value="อื่นๆ โปรดระบุ....">
                        </datalist>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_th_4">ชื่อ (ไทย)<red>*</red></label>
                        <input type="text" class="form-control" id="fname_th_4" name="fname_th_4"
                          placeholder="ชื่อ(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_th_4">นามสกุล (ไทย)<red>*</red></label>
                        <input type="text" class="form-control" id="lname_th_4" name="lname_th_4"
                          placeholder="นามสกุล(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_eng_4">ชื่อ (Eng)</label>
                        <input type="text" class="form-control" id="fname_eng_4" name="fname_eng_4"
                          placeholder="Name (Not required.)" oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_eng_4">นามสกุล (Eng)</label>
                        <input type="text" class="form-control" id="lname_eng_4" name="lname_eng_4"
                          placeholder="Lastname (Not required.)" oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender_4">เพศ<red>*</red></label>
                        <select class="form-control" id="gender_4" name="gender_4">
                          <option value="M">ชาย</option>
                          <option value="F">หญิง</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age_4">อายุ<red>*</red></label>
                        <input type="number" class="form-control" max="99" id="age_4" name="age_4" placeholder="อายุ"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality_4">สัญชาติ<red>*</red></label>
                        <input type="text" class="form-control" id="nationality_4" name="nationality_4"
                          placeholder="สัญชาติ">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_4">E-mail<red>*</red></label>
                        <span id="check_email_4"></span>
                        <input type="email" class="form-control" id="email_4" name="email_4"
                          placeholder="กรุณาใช้ E-mail ที่ติดต่อได้จริง" required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="phone_4">เบอร์โทรศัพท์<red>*</red></label>
                        <input type="number" class="form-control" id="phone_4" name="phone_4"
                          placeholder="กรุณาใช้เบอร์โทรศัพท์ที่สามารถติดต่อได้" required
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="emergency_phone_4">เบอร์โทรศัพท์ในกรณีฉุกเฉิน</label>
                        <input type="number" class="form-control" id="emergency_phone_4" name="emergency_phone_4"
                          placeholder="เบอร์โทรศัพท์ฉุกเฉินที่ต้องการให้ติดต่อ"
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="affiliation_4">หน่วยงานต้นสังกัด<red>*</red></label>
                        <input type="text" class="form-control" id="affiliation_4" name="affiliation_4"
                          placeholder="หน่วยงานต้นสังกัด" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <!-- จังหวัด -->
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="province_4">จังหวัด<red>*</red></label>
                        <select class="form-control" id="province_4" name="province_4">
                          <option value="">เลือกจังหวัด</option>
                          <?php
                          $stmt = $conn->query("SELECT province_name_th FROM tbl_province");
                          $i = 1;
                          //$province = $stmt->fetch();
                            // $thSQL= "SELECT id,country_id,country_name_en FROM tbl_province order by id asc";
                            // $thQuery= $conn->query($thSQL) or die($conn->error);
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                            //echo("<option value='$thARR[country_id]'>$thARR[country_name_en]</option>");
                            echo("<option value='$row[province_name_th]'>$row[province_name_th]</option>");
                            $i++;
                            }
                      ?>
                        </select>
                      </div>
                    </div>
                    <!-- จังหวัด -->
                    <div class="form-row">
                      <div class="form-group col-12">
                        <label for="adds_4">ที่อยู่ในการออกใบเสร็จ</label>
                        <textarea class="form-control" id="adds_4" name="adds_4" rows="3"
                          placeholder="หากไม่ระบุจะทำการออกใบเสร็จในนามหน่วยงานต้นสังกัด" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-4 mt-2">
                        <label>อาหาร</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food1_4" name="food_4" class="custom-control-input" value="1"
                              checked>
                            <label class="custom-control-label" for="food1_4">ทั่วไป</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food2_4" name="food_4" class="custom-control-input" value="2">
                            <label class="custom-control-label" for="food2_4">มังสวิรัติ</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food3_4" name="food_4" class="custom-control-input" value="3">
                            <label class="custom-control-label" for="food3_4">ฮาลาล</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-8  mt-2">
                        <label for="food_allergy_4">แพ้อาหาร(ถ้ามี)</label>
                        <input type="text" class="form-control" id="food_allergy_4" name="food_allergy_4"
                          placeholder="ระบุอาหารที่แพ้">
                      </div>
                    </div>
                    <!-- Workshop -->
                    <div class="form-row  mt-2">
                      <div class="form-group col-12 gray mt-2">
                        <label class="mt-1">Workshop ที่ต้องการเข้าร่วม</label>
                        <label class="mt-1"><a href="workshop.php" class="url-blue"
                            target="_blank">(ดูรายละเอียดเพิ่มเติม)</a></label>
                        <!-- Day 1 -->
                        <div class="form-group ml-3">
                          <label>วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (13.00 - 14.30 น.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_4_1 " name="workshop_day1_4" value="w1">
                            <label class="custom-control-label" for="workshop_day1_4_1">Workshop 1 : Design
                              Thinking <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[0]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_4_2 " name="workshop_day1_4" value="w2">
                            <label class="custom-control-label" for="workshop_day1_4_2">Workshop 2 : Research to
                              Innovation <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[1]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_4_3" name="workshop_day1_4" value="w3">
                            <label class="custom-control-label" for="workshop_day1_4_3">Workshop 3 : Contemplative
                              education: Learn Unlearn and Relearn <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[2]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_4_4" name="workshop_day1_4" value="w4">
                            <label class="custom-control-label" for="workshop_day1_4_4">Workshop 4 : Development and
                              Implementation-Game design-Board game <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[3]; ?> ที่</span></label>
                          </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="form-group ml-3">
                          <label>วันพฤหัสบดีที่ 1 พฤษภาคม พ.ศ. 2563 (14.45 - 16.00 น.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_4_1" name="workshop_day2_4" value="w5">
                            <label class="custom-control-label" for="workshop_day2_4_1">Workshop 5 : เนรมิตห้องเรียน 4.0
                              ด้วยเครื่องมือดิจิทัล <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[0]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_4_2" name="workshop_day2_4" value="w6">
                            <label class="custom-control-label" for="workshop_day2_4_2">Workshop 6 : Micro mastery:
                              ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง “ความเก่งทีละเล็กทีละน้อย 
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[1]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_4_3" name="workshop_day2_4" value="w7">
                            <label class="custom-control-label" for="workshop_day2_4_3">Workshop 7 :
                              วิจัยจัดการเรียนการสอน
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[2]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_4_4" name="workshop_day2_4" value="w8">
                            <label class="custom-control-label" for="workshop_day2_4_4">Workshop 8 :
                              สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[3]; ?> ที่</span></label>
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
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="title_th_5">คำนำหน้าชื่อ<red>*</red></label>
                        <input class="form-control" list="title_th_5" name="title_th_5" placeholder="โปรดระบุ">
                        <datalist id="title_th_5">
                          <option value="นาย">
                          <option value="นาง">
                          <option value="นางสาว">
                          <option value="ดร.">
                          <option value="ผศ.">
                          <option value="ผศ.ดร.">
                          <option value="รศ.">
                          <option value="รศ.ดร.">
                          <option value="ศ.">
                          <option value="ศ.ดร.">
                          <option value="อื่นๆ โปรดระบุ....">
                        </datalist>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_th_5">ชื่อ (ไทย)<red>*</red></label>
                        <input type="text" class="form-control" id="fname_th_5" name="fname_th_5"
                          placeholder="ชื่อ(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_th">นามสกุล (ไทย)<red>*</red></label>
                        <input type="text" class="form-control" id="lname_th_5" name="lname_th_5"
                          placeholder="นามสกุล(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_eng_5">ชื่อ (Eng)</label>
                        <input type="text" class="form-control" id="fname_eng_5" name="fname_eng_5"
                          placeholder="Name (Not required.)" oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_eng_5">นามสกุล (Eng)</label>
                        <input type="text" class="form-control" id="lname_eng_5" name="lname_eng_5"
                          placeholder="Lastname (Not required.)" oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender_5">เพศ<red>*</red></label>
                        <select class="form-control" id="gender_5" name="gender_5">
                          <option value="M">ชาย</option>
                          <option value="F">หญิง</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age_5">อายุ<red>*</red></label>
                        <input type="number" class="form-control" max="99" id="age_5" name="age_5" placeholder="อายุ"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality_5">สัญชาติ<red>*</red></label>
                        <input type="text" class="form-control" id="nationality_5" name="nationality_5"
                          placeholder="สัญชาติ">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_5">E-mail<red>*</red></label>
                        <span id="check_email_5"></span>
                        <input type="email" class="form-control" id="email_5" name="email_5"
                          placeholder="กรุณาใช้ E-mail ที่ติดต่อได้จริง" required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="phone_5">เบอร์โทรศัพท์<red>*</red></label>
                        <input type="number" class="form-control" id="phone_5" name="phone_5"
                          placeholder="กรุณาใช้เบอร์โทรศัพท์ที่สามารถติดต่อได้" required
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="emergency_phone_5">เบอร์โทรศัพท์ในกรณีฉุกเฉิน</label>
                        <input type="number" class="form-control" id="emergency_phone_5" name="emergency_phone_5"
                          placeholder="เบอร์โทรศัพท์ฉุกเฉินที่ต้องการให้ติดต่อ"
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="affiliation_5">หน่วยงานต้นสังกัด<red>*</red></label>
                        <input type="text" class="form-control" id="affiliation_5" name="affiliation_5"
                          placeholder="หน่วยงานต้นสังกัด" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <!-- จังหวัด -->
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="province_5">จังหวัด<red>*</red></label>
                        <select class="form-control" id="province_5" name="province_5">
                          <option value="">เลือกจังหวัด</option>
                          <?php
                          $stmt = $conn->query("SELECT province_name_th FROM tbl_province");
                          $i = 1;
                          //$province = $stmt->fetch();
                            // $thSQL= "SELECT id,country_id,country_name_en FROM tbl_province order by id asc";
                            // $thQuery= $conn->query($thSQL) or die($conn->error);
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                            //echo("<option value='$thARR[country_id]'>$thARR[country_name_en]</option>");
                            echo("<option value='$row[province_name_th]'>$row[province_name_th]</option>");
                            $i++;
                            }
                      ?>
                        </select>
                      </div>
                    </div>
                    <!-- จังหวัด -->
                    <div class="form-row">
                      <div class="form-group col-12">
                        <label for="adds_5">ที่อยู่ในการออกใบเสร็จ</label>
                        <textarea class="form-control" id="adds_5" name="adds_5" rows="3"
                          placeholder="หากไม่ระบุจะทำการออกใบเสร็จในนามหน่วยงานต้นสังกัด" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-4 mt-2">
                        <label>อาหาร</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food1_5" name="food_5" class="custom-control-input" value="1"
                              checked>
                            <label class="custom-control-label" for="food1_5">ทั่วไป</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food2_5" name="food_5" class="custom-control-input" value="2">
                            <label class="custom-control-label" for="food2_5">มังสวิรัติ</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food3_5" name="food_5" class="custom-control-input" value="3">
                            <label class="custom-control-label" for="food3_5">ฮาลาล</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-8  mt-2">
                        <label for="food_allergy_5">แพ้อาหาร(ถ้ามี)</label>
                        <input type="text" class="form-control" id="food_allergy_5" name="food_allergy_5"
                          placeholder="ระบุอาหารที่แพ้">
                      </div>
                    </div>
                    <!-- Workshop -->
                    <div class="form-row  mt-2">
                      <div class="form-group col-12 gray mt-2">
                        <label class="mt-1">Workshop ที่ต้องการเข้าร่วม</label>
                        <label class="mt-1"><a href="workshop.php" class="url-blue"
                            target="_blank">(ดูรายละเอียดเพิ่มเติม)</a></label>
                        <!-- Day 1 -->
                        <div class="form-group ml-3">
                          <label>วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (13.00 - 14.30 น.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_5_1 " name="workshop_day1_5" value="w1">
                            <label class="custom-control-label" for="workshop_day1_5_1 ">Workshop 1 : Design
                              Thinking
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[0]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_5_2" name="workshop_day1_5" value="w2">
                            <label class="custom-control-label" for="workshop_day1_5_2">Workshop 2 : Research to
                              Innovation
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[1]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_5_3" name="workshop_day1_5" value="w3">
                            <label class="custom-control-label" for="workshop_day1_5_3">Workshop 3 : Contemplative
                              education: Learn Unlearn and Relearn
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[2]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_5_4" name="workshop_day1_5" value="w4">
                            <label class="custom-control-label" for="workshop_day1_5_4">Workshop 4 : Development and
                              Implementation-Game design-Board game
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[3]; ?> ที่</span></label>
                          </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="form-group ml-3">
                          <label>วันพฤหัสบดีที่ 1 พฤษภาคม พ.ศ. 2563 (14.45 - 16.00 น.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_5_1" name="workshop_day2_5" value="w5">
                            <label class="custom-control-label" for="workshop_day2_5_1">Workshop 5 : เนรมิตห้องเรียน 4.0
                              ด้วยเครื่องมือดิจิทัล
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[0]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_5_2" name="workshop_day2_5" value="w6">
                            <label class="custom-control-label" for="workshop_day2_5_2">Workshop 6 : Micro mastery:
                              ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง “ความเก่งทีละเล็กทีละน้อย
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[1]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_5_3" name="workshop_day2_5" value="w7">
                            <label class="custom-control-label" for="workshop_day2_5_3">Workshop 7 :
                              วิจัยจัดการเรียนการสอน
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[2]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_5_4" name="workshop_day2_5" value="w8">
                            <label class="custom-control-label" for="workshop_day2_5_4">Workshop 8 :
                              สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[3]; ?> ที่</span></label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <****************** 6 *********************> -->
                <div class="card mb-2">
                  <h6 class="card-header text-center text-uppercase bg-info">ผู้ลงทะเบียน 6</h6>
                  <div class="m-2">
                    <div class="form-row ">
                      <div class="form-group col-md-4">
                        <label for="title_th_6">คำนำหน้าชื่อ<red>*</red></label>
                        <input class="form-control" list="title_th_6" name="title_th_6" placeholder="โปรดระบุ">
                        <datalist id="title_th_6">
                          <option value="นาย">
                          <option value="นาง">
                          <option value="นางสาว">
                          <option value="ดร.">
                          <option value="ผศ.">
                          <option value="ผศ.ดร.">
                          <option value="รศ.">
                          <option value="รศ.ดร.">
                          <option value="ศ.">
                          <option value="ศ.ดร.">
                          <option value="อื่นๆ โปรดระบุ....">
                        </datalist>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_th_6">ชื่อ (ไทย)<red>*</red></label>
                        <input type="text" class="form-control" id="fname_th_6" name="fname_th_6"
                          placeholder="ชื่อ(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_th_6">นามสกุล (ไทย)<red>*</red></label>
                        <input type="text" class="form-control" id="lname_th_6" name="lname_th_6"
                          placeholder="นามสกุล(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_eng_6">ชื่อ (Eng)</label>
                        <input type="text" class="form-control" id="fname_eng_6" name="fname_eng_6"
                          placeholder="Name (Not required.)" oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_eng_6">นามสกุล (Eng)</label>
                        <input type="text" class="form-control" id="lname_eng_6" name="lname_eng_6"
                          placeholder="Lastname (Not required.)" oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender_6">เพศ<red>*</red></label>
                        <select class="form-control" id="gender_6" name="gender_6">
                          <option value="M">ชาย</option>
                          <option value="F">หญิง</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age_6">อายุ<red>*</red></label>
                        <input type="number" class="form-control" max="99" id="age_6" name="age_6" placeholder="อายุ"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality_6">สัญชาติ<red>*</red></label>
                        <input type="text" class="form-control" id="nationality_6" name="nationality_6"
                          placeholder="สัญชาติ">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_6">E-mail<red>*</red></label>
                        <span id="check_email_6"></span>
                        <input type="email" class="form-control" id="email_6" name="email_6"
                          placeholder="กรุณาใช้ E-mail ที่ติดต่อได้จริง" required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="phone_6">เบอร์โทรศัพท์<red>*</red></label>
                        <input type="number" class="form-control" id="phone_6" name="phone_6"
                          placeholder="กรุณาใช้เบอร์โทรศัพท์ที่สามารถติดต่อได้" required
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="emergency_phone_6">เบอร์โทรศัพท์ในกรณีฉุกเฉิน</label>
                        <input type="number" class="form-control" id="emergency_phone_6" name="emergency_phone_6"
                          placeholder="เบอร์โทรศัพท์ฉุกเฉินที่ต้องการให้ติดต่อ"
                          oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="affiliation_6">หน่วยงานต้นสังกัด<red>*</red></label>
                        <input type="text" class="form-control" id="affiliation_6" name="affiliation_6"
                          placeholder="หน่วยงานต้นสังกัด" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')">
                      </div>
                    </div>
                    <!-- จังหวัด -->
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="province_6">จังหวัด<red>*</red></label>
                        <select class="form-control" id="province_6" name="province_6">
                          <option value="">เลือกจังหวัด</option>
                          <?php
                          $stmt = $conn->query("SELECT province_name_th FROM tbl_province");
                          $i = 1;
                          //$province = $stmt->fetch();
                            // $thSQL= "SELECT id,country_id,country_name_en FROM tbl_province order by id asc";
                            // $thQuery= $conn->query($thSQL) or die($conn->error);
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                            //echo("<option value='$thARR[country_id]'>$thARR[country_name_en]</option>");
                            echo("<option value='$row[province_name_th]'>$row[province_name_th]</option>");
                            $i++;
                            }
                      ?>
                        </select>
                      </div>
                    </div>
                    <!-- จังหวัด -->
                    <div class="form-row">
                      <div class="form-group col-12">
                        <label for="adds_6">ที่อยู่ในการออกใบเสร็จ</label>
                        <textarea class="form-control" id="adds_6" name="adds_6" rows="3"
                          placeholder="หากไม่ระบุจะทำการออกใบเสร็จในนามหน่วยงานต้นสังกัด" value=" "></textarea>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-4 mt-2">
                        <label>อาหาร</label>
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food1_6" name="food_6" class="custom-control-input" value="1"
                              checked>
                            <label class="custom-control-label" for="food1_6">ทั่วไป</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food2_6" name="food_6" class="custom-control-input" value="2">
                            <label class="custom-control-label" for="food2_6">มังสวิรัติ</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food3_6" name="food_6" class="custom-control-input" value="3">
                            <label class="custom-control-label" for="food3_6">ฮาลาล</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-8  mt-2">
                        <label for="food_allergy_6">แพ้อาหาร(ถ้ามี)</label>
                        <input type="text" class="form-control" id="food_allergy_6" name="food_allergy_6"
                          placeholder="ระบุอาหารที่แพ้">
                      </div>
                    </div>
                    <!-- Workshop -->
                    <div class="form-row  mt-2">
                      <div class="form-group col-12 gray mt-2">
                        <label class="mt-1">Workshop ที่ต้องการเข้าร่วม</label>
                        <label class="mt-1"><a href="workshop.php" class="url-blue"
                            target="_blank">(ดูรายละเอียดเพิ่มเติม)</a></label>
                        <!-- Day 1 -->
                        <div class="form-group ml-3">
                          <label>วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (13.00 - 14.30 น.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_1" name="workshop_day1_6" value="w1">
                            <label class="custom-control-label" for="workshop_day1_1">Workshop 1 : Design
                              Thinking
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[0]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_2" name="workshop_day1_6" value="w2">
                            <label class="custom-control-label" for="workshop_day1_2">Workshop 2 : Research to
                              Innovation
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[1]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_3" name="workshop_day1_6" value="w3">
                            <label class="custom-control-label" for="workshop_day1_3">Workshop 3 : Contemplative
                              education: Learn Unlearn and Relearn
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[2]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day1_4" name="workshop_day1_6" value="w4">
                            <label class="custom-control-label" for="workshop_day1_4">Workshop 4 : Development and
                              Implementation-Game design-Board game
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[3]; ?> ที่</span></label>
                          </div>
                        </div>
                        <!-- Day 2 -->
                        <div class="form-group ml-3">
                          <label>วันพฤหัสบดีที่ 1 พฤษภาคม พ.ศ. 2563 (14.45 - 16.00 น.)</label>
                          <div class="custom-control  custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_1" name="workshop_day2_6" value="w5">
                            <label class="custom-control-label" for="workshop_day2_1">Workshop 5 : เนรมิตห้องเรียน 4.0
                              ด้วยเครื่องมือดิจิทัล
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[0]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_2" name="workshop_day2_6" value="w6">
                            <label class="custom-control-label" for="workshop_day2_2">Workshop 6 : Micro mastery:
                              ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง “ความเก่งทีละเล็กทีละน้อย
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[1]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_3" name="workshop_day2_6" value="w7">
                            <label class="custom-control-label" for="workshop_day2_3">Workshop 7 :
                              วิจัยจัดการเรียนการสอน
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[2]; ?> ที่</span></label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="workshop_day2_4" name="workshop_day2_6" value="w8">
                            <label class="custom-control-label" for="workshop_day2_4">Workshop 8 :
                              สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning
                              <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[3]; ?> ที่</span></label>
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
                        <label>- Group (สำหรับผู้ลงทะเบียน 6 ท่าน) 16,000 บาท <sup class=" bg-danger">**Active
                            Now**</sup></label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Regis fee -->
            </div>
            <input type="submit" name="submit" id="btnsubmit" class="btn btn-success mb-5 col-4 offset-4"
              value="ยืนยันการลงทะเบียน">
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
<!-- check same mail -->
<!-- <script src="js/check_same_mail.js"></script> -->

</html>