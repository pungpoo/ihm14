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
</head>

<body id="page-top">
<a id="button"></a>
  <?php include "navbar.html"; ?>
  <section class="bg-light" id="regis">
    <div class="container ">
      <div class="row">
        <div class=" col-md-10 offset-1" >
          <div class="card">
            <h5 class="card-header text-center text-uppercase bg-info">SOTL6 - Group Registration</h5>
            <div class="card-body font-weight-bold">
              <div><a href="registration_regular.php" class="btn btn-success mb-3">ลงทะเบียน(สำหรับ 1 ท่าน)</a></div>
              <!-- Form 1 -->
              <form class="form" id="regis_g" name="regis_g" action="check_regis.php" method="post">
                <div class="card mb-2">
                  <h6 class="card-header text-center text-uppercase bg-info">ผู้ลงทะเบียน 1</h6>
                  <div class="m-2">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">คำนำหน้าชื่อ (Title)*</label>
                        <select class="form-control" id="title_name_eng" name="title_name_eng_1">
                          <option value="0">เลือก</option>
                          <option value="1">นาย/Mr.</option>
                          <option value="2">นาง/Miss</option>
                          <option value="3">นางสาว/Mrs.</option>
                          <option value="4">ดร./Dr.</option>
                        </select>
                      </div>
                      <!-- ตำแหน่งวิชาการ -->
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">ตำแหน่งทางวิชาการ</label>
                        <select class="form-control" id="title_name_eng" name="title_name_eng_1">
                          <option value="0">ไม่ระบุ</option>
                          <option value="1">อาจารย์</option>
                          <option value="2">ผศ.</option>
                          <option value="3">รศ.</option>
                          <option value="4">ศ.</option>
                        </select>
                      </div>
                      <!-- ตำแหน่งบริหาร -->
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">ตำแหน่งบริหาร</label>
                        <input type="text" class="form-control" id="fname_eng" name="fname_eng_1"
                          placeholder="ตำแหน่งบริหาร">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_eng">ชื่อ (Eng)*</label>
                        <input type="text" class="form-control" id="fname_eng" name="fname_eng_1"
                          placeholder="ชื่อ(ภาษาอังกฤษ)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_eng">นามสกุล (Eng)*</label>
                        <input type="text" class="form-control" id="lname_eng" name="lname_eng_1"
                          placeholder="นามสกุล(ภาษาอังกฤษ)" required
                          oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')" oninput="setCustomValidity('')"
                          autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_th">ชื่อ (ไทย)*</label>
                        <input type="text" class="form-control" id="fname_th" name="fname_th_1"
                          placeholder="ชื่อ(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_th">นามสกุล (ไทย)*</label>
                        <input type="text" class="form-control" id="lname_th" name="lname_th_1"
                          placeholder="นามสกุล(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender">เพศ*</label>
                        <select class="form-control" id="gender" name="gender_1">
                          <option value="M">ชาย</option>
                          <option value="F">หญิง</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age">อายุ*</label>
                        <input type="number" class="form-control" max="99" id="age" name="age_1" placeholder="อายุ"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality">สัญชาติ*</label>
                        <input type="text" class="form-control" id="nationality" name="nationality_1"
                          placeholder="สัญชาติ">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_1">E-mail*</label>
                        <span id="check_email_1"></span>
                        <input type="email" class="form-control" id="email_1" name="email_1" placeholder="E-mail" required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')"
                          >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="phone">โทรศัพท์*</label>
                        <input type="number" class="form-control" id="phone" name="phone_1" placeholder="โทรศัพท์"
                          required oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="grad-from">หน่วยงานต้นสังกัด*</label>
                        <input type="text" class="form-control" id="affiliation" name="affiliation_1"
                          placeholder="หน่วยงานต้นสังกัด" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="workplace">สถานที่ทำงานปัจจุบัน</label>
                        <input type="text" class="form-control" id="workplace" name="workplace_1"
                          placeholder="สถานที่ทำงานปัจจุบัน(ถ้ามี)" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row gray m-3">
                      <div class="form-group col-md-6">
                        <label>อาหาร</label>
                        <!-- Group of material radios - option 1 -->
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food1" name="food_1" class="custom-control-input" checked>
                            <label class="custom-control-label" for="food1">ทั่วไป</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food2" name="food_1" class="custom-control-input">
                            <label class="custom-control-label" for="food2">มังสวิรัติ</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food3" name="food_1" class="custom-control-input">
                            <label class="custom-control-label" for="food3">ฮาลาล</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Regis fee -->
                  <!-- Form 1 -->
                </div>

                <div class="card mb-2">
                  <h6 class="card-header text-center text-uppercase bg-info">ผู้ลงทะเบียน 2</h6>
  
                  <div class="m-2">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">คำนำหน้าชื่อ (Title)*</label>
                        <select class="form-control" id="title_name_eng" name="title_name_eng_2">
                          <option value="0">เลือก</option>
                          <option value="1">นาย/Mr.</option>
                          <option value="2">นาง/Miss</option>
                          <option value="3">นางสาว/Mrs.</option>
                          <option value="4">ดร./Dr.</option>
                        </select>
                      </div>
                      <!-- ตำแหน่งวิชาการ -->
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">ตำแหน่งทางวิชาการ</label>
                        <select class="form-control" id="title_name_eng" name="title_name_eng_2">
                          <option value="0">ไม่ระบุ</option>
                          <option value="1">อาจารย์</option>
                          <option value="2">ผศ.</option>
                          <option value="3">รศ.</option>
                          <option value="4">ศ.</option>
                        </select>
                      </div>
                      <!-- ตำแหน่งบริหาร -->
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">ตำแหน่งบริหาร</label>
                        <input type="text" class="form-control" id="fname_eng" name="fname_eng_2"
                          placeholder="ตำแหน่งบริหาร">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_eng">ชื่อ (Eng)*</label>
                        <input type="text" class="form-control" id="fname_eng" name="fname_eng_2"
                          placeholder="ชื่อ(ภาษาอังกฤษ)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_eng">นามสกุล (Eng)*</label>
                        <input type="text" class="form-control" id="lname_eng" name="lname_eng_2"
                          placeholder="นามสกุล(ภาษาอังกฤษ)" required
                          oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')" oninput="setCustomValidity('')"
                          autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_th">ชื่อ (ไทย)*</label>
                        <input type="text" class="form-control" id="fname_th" name="fname_th_2"
                          placeholder="ชื่อ(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_th">นามสกุล (ไทย)*</label>
                        <input type="text" class="form-control" id="lname_th" name="lname_th_2"
                          placeholder="นามสกุล(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender">เพศ*</label>
                        <select class="form-control" id="gender" name="gender_2">
                          <option value="M">ชาย</option>
                          <option value="F">หญิง</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age">อายุ*</label>
                        <input type="number" class="form-control" max="99" id="age" name="age_2" placeholder="อายุ"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality">สัญชาติ*</label>
                        <input type="text" class="form-control" id="nationality" name="nationality_2"
                          placeholder="สัญชาติ">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_2">E-mail*</label>
                        <span id="check_email_2"></span>
                        <input type="email" class="form-control" id="email_2" name="email_2" placeholder="E-mail" required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')"
                          >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="phone">โทรศัพท์*</label>
                        <input type="number" class="form-control" id="phone" name="phone_2" placeholder="โทรศัพท์"
                          required oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="grad-from">หน่วยงานต้นสังกัด*</label>
                        <input type="text" class="form-control" id="affiliation" name="affiliation_2"
                          placeholder="หน่วยงานต้นสังกัด" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="workplace">สถานที่ทำงานปัจจุบัน</label>
                        <input type="text" class="form-control" id="workplace" name="workplace_2"
                          placeholder="สถานที่ทำงานปัจจุบัน(ถ้ามี)" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row gray m-3">
                      <div class="form-group col-md-6">
                        <label>อาหาร</label>
                        <!-- Group of material radios - option 1 -->
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food_2_1" name="food_2" class="custom-control-input" checked>
                            <label class="custom-control-label" for="food_2_1">ทั่วไป</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food_2_2" name="food_2" class="custom-control-input">
                            <label class="custom-control-label" for="food_2_2">มังสวิรัติ</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food_2_3" name="food_2" class="custom-control-input">
                            <label class="custom-control-label" for="food_2_3">ฮาลาล</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Regis fee -->
                  <!-- Form 1 -->
                </div>

                <div class="card mb-2">
                  <h6 class="card-header text-center text-uppercase bg-info">ผู้ลงทะเบียน 3</h6>
  
                  <div class="m-2">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">คำนำหน้าชื่อ (Title)*</label>
                        <select class="form-control" id="title_name_eng" name="title_name_eng_3">
                          <option value="0">เลือก</option>
                          <option value="1">นาย/Mr.</option>
                          <option value="2">นาง/Miss</option>
                          <option value="3">นางสาว/Mrs.</option>
                          <option value="4">ดร./Dr.</option>
                        </select>
                      </div>
                      <!-- ตำแหน่งวิชาการ -->
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">ตำแหน่งทางวิชาการ</label>
                        <select class="form-control" id="title_name_eng" name="title_name_eng_3">
                          <option value="0">ไม่ระบุ</option>
                          <option value="1">อาจารย์</option>
                          <option value="2">ผศ.</option>
                          <option value="3">รศ.</option>
                          <option value="4">ศ.</option>
                        </select>
                      </div>
                      <!-- ตำแหน่งบริหาร -->
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">ตำแหน่งบริหาร</label>
                        <input type="text" class="form-control" id="fname_eng" name="fname_eng_3"
                          placeholder="ตำแหน่งบริหาร">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_eng">ชื่อ (Eng)*</label>
                        <input type="text" class="form-control" id="fname_eng" name="fname_eng_3"
                          placeholder="ชื่อ(ภาษาอังกฤษ)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_eng">นามสกุล (Eng)*</label>
                        <input type="text" class="form-control" id="lname_eng" name="lname_eng_3"
                          placeholder="นามสกุล(ภาษาอังกฤษ)" required
                          oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')" oninput="setCustomValidity('')"
                          autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_th">ชื่อ (ไทย)*</label>
                        <input type="text" class="form-control" id="fname_th" name="fname_th_3"
                          placeholder="ชื่อ(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_th">นามสกุล (ไทย)*</label>
                        <input type="text" class="form-control" id="lname_th" name="lname_th_3"
                          placeholder="นามสกุล(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender">เพศ*</label>
                        <select class="form-control" id="gender" name="gender_3">
                          <option value="M">ชาย</option>
                          <option value="F">หญิง</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age">อายุ*</label>
                        <input type="number" class="form-control" max="99" id="age" name="age_3" placeholder="อายุ"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality">สัญชาติ*</label>
                        <input type="text" class="form-control" id="nationality" name="nationality_3"
                          placeholder="สัญชาติ">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_3">E-mail*</label>
                        <span id="check_email_3"></span>
                        <input type="email" class="form-control" id="email_3" name="email_3" placeholder="E-mail" required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')"
                          autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="phone">โทรศัพท์*</label>
                        <input type="number" class="form-control" id="phone" name="phone_3" placeholder="โทรศัพท์"
                          required oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="grad-from">หน่วยงานต้นสังกัด*</label>
                        <input type="text" class="form-control" id="affiliation" name="affiliation_3"
                          placeholder="หน่วยงานต้นสังกัด" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="workplace">สถานที่ทำงานปัจจุบัน</label>
                        <input type="text" class="form-control" id="workplace" name="workplace_3"
                          placeholder="สถานที่ทำงานปัจจุบัน(ถ้ามี)" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row gray m-3">
                      <div class="form-group col-md-6">
                        <label>อาหาร</label>
                        <!-- Group of material radios - option 1 -->
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food_3_1" name="food_3" class="custom-control-input" checked>
                            <label class="custom-control-label" for="food_3_1">ทั่วไป</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food_3_2" name="food_3" class="custom-control-input">
                            <label class="custom-control-label" for="food_3_2">มังสวิรัติ</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food_3_3" name="food_3" class="custom-control-input">
                            <label class="custom-control-label" for="food_3_3">ฮาลาล</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Regis fee -->
                  <!-- Form 1 -->
                </div>

                <div class="card mb-2">
                  <h6 class="card-header text-center text-uppercase bg-info">ผู้ลงทะเบียน 4</h6>
  
                  <div class="m-2">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">คำนำหน้าชื่อ (Title)*</label>
                        <select class="form-control" id="title_name_eng" name="title_name_eng_4">
                          <option value="0">เลือก</option>
                          <option value="1">นาย/Mr.</option>
                          <option value="2">นาง/Miss</option>
                          <option value="3">นางสาว/Mrs.</option>
                          <option value="4">ดร./Dr.</option>
                        </select>
                      </div>
                      <!-- ตำแหน่งวิชาการ -->
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">ตำแหน่งทางวิชาการ</label>
                        <select class="form-control" id="title_name_eng" name="title_name_eng_4">
                          <option value="0">ไม่ระบุ</option>
                          <option value="1">อาจารย์</option>
                          <option value="2">ผศ.</option>
                          <option value="3">รศ.</option>
                          <option value="4">ศ.</option>
                        </select>
                      </div>
                      <!-- ตำแหน่งบริหาร -->
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">ตำแหน่งบริหาร</label>
                        <input type="text" class="form-control" id="fname_eng" name="fname_eng_4"
                          placeholder="ตำแหน่งบริหาร">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_eng">ชื่อ (Eng)*</label>
                        <input type="text" class="form-control" id="fname_eng" name="fname_eng_4"
                          placeholder="ชื่อ(ภาษาอังกฤษ)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_eng">นามสกุล (Eng)*</label>
                        <input type="text" class="form-control" id="lname_eng" name="lname_eng_4"
                          placeholder="นามสกุล(ภาษาอังกฤษ)" required
                          oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')" oninput="setCustomValidity('')"
                          autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_th">ชื่อ (ไทย)*</label>
                        <input type="text" class="form-control" id="fname_th" name="fname_th_4"
                          placeholder="ชื่อ(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_th">นามสกุล (ไทย)*</label>
                        <input type="text" class="form-control" id="lname_th" name="lname_th_4"
                          placeholder="นามสกุล(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender">เพศ*</label>
                        <select class="form-control" id="gender" name="gender_4">
                          <option value="M">ชาย</option>
                          <option value="F">หญิง</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age">อายุ*</label>
                        <input type="number" class="form-control" max="99" id="age" name="age_4" placeholder="อายุ"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality">สัญชาติ*</label>
                        <input type="text" class="form-control" id="nationality" name="nationality_4"
                          placeholder="สัญชาติ">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_4">E-mail*</label>
                        <span id="check_email_4"></span>
                        <input type="email" class="form-control" id="email_4" name="email_4" placeholder="E-mail" required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')"
                          autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="phone">โทรศัพท์*</label>
                        <input type="number" class="form-control" id="phone" name="phone_4" placeholder="โทรศัพท์"
                          required oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="grad-from">หน่วยงานต้นสังกัด*</label>
                        <input type="text" class="form-control" id="affiliation" name="affiliation_4"
                          placeholder="หน่วยงานต้นสังกัด" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="workplace">สถานที่ทำงานปัจจุบัน</label>
                        <input type="text" class="form-control" id="workplace" name="workplace_4"
                          placeholder="สถานที่ทำงานปัจจุบัน(ถ้ามี)" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row gray m-3">
                      <div class="form-group col-md-6">
                        <label>อาหาร</label>
                        <!-- Group of material radios - option 1 -->
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food_4_1" name="food_4" class="custom-control-input" checked>
                            <label class="custom-control-label" for="food_4_1">ทั่วไป</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food_4_2" name="food_4" class="custom-control-input">
                            <label class="custom-control-label" for="food_4_2">มังสวิรัติ</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food_4_3" name="food_4" class="custom-control-input">
                            <label class="custom-control-label" for="food_4_3">ฮาลาล</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Regis fee -->
                  <!-- Form 1 -->
                </div>

                <div class="card mb-2">
                  <h6 class="card-header text-center text-uppercase bg-info">ผู้ลงทะเบียน 5</h6>
  
                  <div class="m-2">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">คำนำหน้าชื่อ (Title)*</label>
                        <select class="form-control" id="title_name_eng" name="title_name_eng_5">
                          <option value="0">เลือก</option>
                          <option value="1">นาย/Mr.</option>
                          <option value="2">นาง/Miss</option>
                          <option value="3">นางสาว/Mrs.</option>
                          <option value="4">ดร./Dr.</option>
                        </select>
                      </div>
                      <!-- ตำแหน่งวิชาการ -->
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">ตำแหน่งทางวิชาการ</label>
                        <select class="form-control" id="title_name_eng" name="title_name_eng_5">
                          <option value="0">ไม่ระบุ</option>
                          <option value="1">อาจารย์</option>
                          <option value="2">ผศ.</option>
                          <option value="3">รศ.</option>
                          <option value="4">ศ.</option>
                        </select>
                      </div>
                      <!-- ตำแหน่งบริหาร -->
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">ตำแหน่งบริหาร</label>
                        <input type="text" class="form-control" id="fname_eng" name="fname_eng_5"
                          placeholder="ตำแหน่งบริหาร">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_eng">ชื่อ (Eng)*</label>
                        <input type="text" class="form-control" id="fname_eng" name="fname_eng_5"
                          placeholder="ชื่อ(ภาษาอังกฤษ)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_eng">นามสกุล (Eng)*</label>
                        <input type="text" class="form-control" id="lname_eng" name="lname_eng_5"
                          placeholder="นามสกุล(ภาษาอังกฤษ)" required
                          oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')" oninput="setCustomValidity('')"
                          autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_th">ชื่อ (ไทย)*</label>
                        <input type="text" class="form-control" id="fname_th" name="fname_th_5"
                          placeholder="ชื่อ(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_th">นามสกุล (ไทย)*</label>
                        <input type="text" class="form-control" id="lname_th" name="lname_th_5"
                          placeholder="นามสกุล(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender">เพศ*</label>
                        <select class="form-control" id="gender" name="gender_5">
                          <option value="M">ชาย</option>
                          <option value="F">หญิง</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age">อายุ*</label>
                        <input type="number" class="form-control" max="99" id="age" name="age_5" placeholder="อายุ"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality">สัญชาติ*</label>
                        <input type="text" class="form-control" id="nationality" name="nationality_5"
                          placeholder="สัญชาติ">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email_5">E-mail*</label>
                        <span id="check_email_5"></span>
                        <input type="email" class="form-control" id="email_5" name="email_5" placeholder="E-mail" required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')"
                          autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="phone">โทรศัพท์*</label>
                        <input type="number" class="form-control" id="phone" name="phone_5" placeholder="โทรศัพท์"
                          required oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="grad-from">หน่วยงานต้นสังกัด*</label>
                        <input type="text" class="form-control" id="affiliation" name="affiliation_5"
                          placeholder="หน่วยงานต้นสังกัด" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="workplace">สถานที่ทำงานปัจจุบัน</label>
                        <input type="text" class="form-control" id="workplace" name="workplace_5"
                          placeholder="สถานที่ทำงานปัจจุบัน(ถ้ามี)" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row gray m-3">
                      <div class="form-group col-md-6">
                        <label>อาหาร</label>
                        <!-- Group of material radios - option 1 -->
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food_5_1" name="food_5" class="custom-control-input" checked>
                            <label class="custom-control-label" for="food_5_1">ทั่วไป</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food_5_2" name="food_5" class="custom-control-input">
                            <label class="custom-control-label" for="food_5_2">มังสวิรัติ</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food_5_3" name="food_5" class="custom-control-input">
                            <label class="custom-control-label" for="food_5_3">ฮาลาล</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Regis fee -->
                  <!-- Form 1 -->
                </div>

                <div class="card mb-2">
                  <h6 class="card-header text-center text-uppercase bg-info">ผู้ลงทะเบียน 6</h6>
  
                  <div class="m-2">
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">คำนำหน้าชื่อ (Title)*</label>
                        <select class="form-control" id="title_name_eng" name="title_name_eng_6">
                          <option value="0">เลือก</option>
                          <option value="1">นาย/Mr.</option>
                          <option value="2">นาง/Miss</option>
                          <option value="3">นางสาว/Mrs.</option>
                          <option value="4">ดร./Dr.</option>
                        </select>
                      </div>
                      <!-- ตำแหน่งวิชาการ -->
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">ตำแหน่งทางวิชาการ</label>
                        <select class="form-control" id="title_name_eng" name="title_name_eng_6">
                          <option value="0">ไม่ระบุ</option>
                          <option value="1">อาจารย์</option>
                          <option value="2">ผศ.</option>
                          <option value="3">รศ.</option>
                          <option value="4">ศ.</option>
                        </select>
                      </div>
                      <!-- ตำแหน่งบริหาร -->
                      <div class="form-group col-md-4">
                        <label for="title_name_eng">ตำแหน่งบริหาร</label>
                        <input type="text" class="form-control" id="fname_eng" name="fname_eng_6"
                          placeholder="ตำแหน่งบริหาร">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_eng">ชื่อ (Eng)*</label>
                        <input type="text" class="form-control" id="fname_eng" name="fname_eng_6"
                          placeholder="ชื่อ(ภาษาอังกฤษ)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_eng">นามสกุล (Eng)*</label>
                        <input type="text" class="form-control" id="lname_eng" name="lname_eng_6"
                          placeholder="นามสกุล(ภาษาอังกฤษ)" required
                          oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')" oninput="setCustomValidity('')"
                          autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="fname_th">ชื่อ (ไทย)*</label>
                        <input type="text" class="form-control" id="fname_th" name="fname_th_6"
                          placeholder="ชื่อ(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="lname_th">นามสกุล (ไทย)*</label>
                        <input type="text" class="form-control" id="lname_th" name="lname_th_6"
                          placeholder="นามสกุล(ภาษาไทย)" required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-2">
                        <label for="gender">เพศ*</label>
                        <select class="form-control" id="gender" name="gender_6">
                          <option value="M">ชาย</option>
                          <option value="F">หญิง</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="age">อายุ*</label>
                        <input type="number" class="form-control" max="99" id="age" name="age_6" placeholder="อายุ"
                          required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')"
                          oninput="setCustomValidity('')">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="nationality">สัญชาติ*</label>
                        <input type="text" class="form-control" id="nationality" name="nationality_6"
                          placeholder="สัญชาติ">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="email">E-mail*</label>
                        <span id="check_email_6"></span>
                        <input type="email" class="form-control" id="email_6" name="email_6" placeholder="E-mail" required
                          oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')"
                          >
                      </div>
                      <div class="form-group col-md-6">
                        <label for="phone">โทรศัพท์*</label>
                        <input type="number" class="form-control" id="phone" name="phone_6" placeholder="โทรศัพท์"
                          required oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="grad-from">หน่วยงานต้นสังกัด*</label>
                        <input type="text" class="form-control" id="affiliation" name="affiliation_6"
                          placeholder="หน่วยงานต้นสังกัด" required
                          oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')"
                          oninput="setCustomValidity('')" autocomplete="off">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="workplace">สถานที่ทำงานปัจจุบัน</label>
                        <input type="text" class="form-control" id="workplace" name="workplace_6"
                          placeholder="สถานที่ทำงานปัจจุบัน(ถ้ามี)" autocomplete="off">
                      </div>
                    </div>
                    <div class="form-row gray m-3">
                      <div class="form-group col-md-6">
                        <label>อาหาร</label>
                        <!-- Group of material radios - option 1 -->
                        <div class="pl-3">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food_6_1" name="food_6" class="custom-control-input" checked>
                            <label class="custom-control-label" for="food_6_1">ทั่วไป</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food_6_2" name="food_6" class="custom-control-input">
                            <label class="custom-control-label" for="food_6_2">มังสวิรัติ</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="food_6_3" name="food_6" class="custom-control-input">
                            <label class="custom-control-label" for="food_6_3">ฮาลาล</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Regis fee -->
                  <!-- Form 1 -->
                </div>
            
            <div class="form-row bg-info mt-3">
              <div class="form-group col-md-6">
                <label>อัตราค่าลงทะเบียน</label>
                <!-- Group of material radios - option 1 -->
                <div class="pl-3">
                  <div class="custom-control">
                    <label>- Early Bird</label>
                  </div>
                  <div class="custom-control">
                    <label>- Regular</label>
                  </div>
                  <div class="custom-control">
                    <label>- group</label>
                  </div>
                </div>
              </div>
            </div>
            <!-- Regis fee -->
          </div>
          <input type="submit" name="submit" id="btnsubmit"  class="btn btn-success mb-5 col-4 offset-4" value="ยืนยันการลงทะเบียน">
          </form>
 
        </div>
        <!-- <div class="form-group">
              <label for="adds">ที่อยู่</label>
              <textarea class="form-control" id="adds" name="adds" rows="5"
                placeholder="ที่อยู่ที่ปัจจุบันที่สามารถติดต่อได้" value=" "></textarea>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="grad-from">สถานศึกษาที่จบ</label>
                <input type="text" class="form-control" id="grad-from" name="grad-from" placeholder="สถานศึกษาที่จบ"
                  value=" ">
              </div>
              <div class="form-group col-md-6">
                <label for="workplace">สถานที่ทำงานปัจจุบัน</label>
                <input type="text" class="form-control" id="workplace" name="workplace" placeholder="สถานที่ทำงานปัจจุบัน(ถ้ามี)">
              </div>
            </div> -->
        <!-- <input type="hidden" name="aa" value="1"> -->

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
  <script src="js/check_same_mail.js"></script>
</html>