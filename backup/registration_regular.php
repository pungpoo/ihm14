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
  <?php  include "navbar.html";?>
  <?php  include "connect.php"; ?>
  <?php  include "workshop_count.php"; ?>
  <section class="bg-light" id="regis">
    <div class="container ">
      <div class="row">
        <div class=" col-md-12" id="single_regis">
          <div class="card">
            <h5 class="card-header text-center text-uppercase bg-info">SOTL6 - Regular Registration</h5>
            <div class="card-body font-weight-bold">
              <div><a href="registration_group.php" class="btn btn-success mb-3">ลงทะเบียนแบบกลุ่ม(สำหรับ 6 ท่าน)</a>
              </div>
              <form class="form" id="regisForm" name="regisForm" action="check_regis.php" method="post">
                <div class="form-row ">
                  <div class="form-group col-md-4">
                    <label for="title_th">คำนำหน้าชื่อ<red>*</red></label>
                    <input class="form-control" list="title_th" name="title_th" placeholder="โปรดระบุ">
                    <datalist id="title_th">
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
                    <label for="fname_th">ชื่อ (ไทย)<red>*</red></label>
                    <input type="text" class="form-control" id="fname_th" name="fname_th" placeholder="ชื่อ(ภาษาไทย)"
                      required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')" oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname_th">นามสกุล (ไทย)<red>*</red></label>
                    <input type="text" class="form-control" id="lname_th" name="lname_th" placeholder="นามสกุล(ภาษาไทย)"
                      required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="fname_eng">ชื่อ (Eng)</label>
                    <input type="text" class="form-control" id="fname_eng" name="fname_eng"
                      placeholder="Name (Not required.)" onkeypress="checkeng()"
                      oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname_eng">นามสกุล (Eng)</label>
                    <input type="text" class="form-control" id="lname_eng" name="lname_eng"
                      placeholder="Lastname (Not required.)" onkeypress="checkeng2()"
                      oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="gender">เพศ<red>*</red></label>
                    <select class="form-control" id="gender" name="gender">
                      <option value="M">ชาย</option>
                      <option value="F">หญิง</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="age">อายุ<red>*</red></label>
                    <input type="number" class="form-control" max="99" id="age" name="age" placeholder="อายุ" required
                      oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')" oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="nationality">สัญชาติ<red>*</red></label>
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="สัญชาติ">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="email">E-mail<red>*</red></label>
                    <span id="check_email"></span>
                    <input type="email" class="form-control" id="email" name="email"
                      placeholder="กรุณาใช้ E-mail ที่ติดต่อได้จริง" required
                      oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="phone">เบอร์โทรศัพท์<red>*</red></label>
                    <input type="number" class="form-control" id="phone" name="phone"
                      placeholder="กรุณาใช้เบอร์โทรศัพท์ที่สามารถติดต่อได้" required
                      oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                      oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="emergency_phone">เบอร์โทรศัพท์ในกรณีฉุกเฉิน</label>
                    <input type="number" class="form-control" id="emergency_phone" name="emergency_phone"
                      placeholder="เบอร์โทรศัพท์ฉุกเฉินที่ต้องการให้ติดต่อ" 
                      oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                      oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="grad-from">หน่วยงานต้นสังกัด<red>*</red></label>
                    <input type="text" class="form-control" id="affiliation" name="affiliation"
                      placeholder="หน่วยงานต้นสังกัด" required
                      oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <!-- จังหวัด -->
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="province">จังหวัด<red>*</red></label>
                    <select class="form-control" id="province" name="province">
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
                    <label for="adds">ที่อยู่ในการออกใบเสร็จ</label>
                    <textarea class="form-control" id="adds" name="adds" rows="3"
                      placeholder="หากไม่ระบุจะทำการออกใบเสร็จในนามหน่วยงานต้นสังกัด" value=" "></textarea>
                  </div>
                </div>
                <div class="form-row ">
                  <div class="form-group col-4 mt-2">
                    <label>อาหาร</label>
                    <div class="pl-3">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="food1" name="food" class="custom-control-input" value="1" checked>
                        <label class="custom-control-label" for="food1">ทั่วไป</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="food2" name="food" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="food2">มังสวิรัติ</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="food3" name="food" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="food3">ฮาลาล</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-8  mt-2">
                    <label for="food_allergy">แพ้อาหาร(ถ้ามี)</label>
                    <input type="text" class="form-control" id="food_allergy" name="food_allergy"
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
                          <input type="radio" class="custom-control-input" id="workshop_day1_1" name="workshop_day1"  value="w1" checked >
                          <label class="custom-control-label" for="workshop_day1_1">Workshop 1 : Design Thinking <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[0]; ?>  ที่</span></label>
                        </div>
                        <div class="custom-control  custom-radio">
                          <input type="radio" class="custom-control-input" id="workshop_day1_2" name="workshop_day1"  value="w2">
                          <label class="custom-control-label" for="workshop_day1_2">Workshop 2 : Research to
                            Innovation <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[1]; ?> ที่</span></label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="workshop_day1_3" name="workshop_day1" value="w3">
                          <label class="custom-control-label" for="workshop_day1_3">Workshop 3 : Contemplative
                            education: Learn Unlearn and Relearn <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[2]; ?> ที่</span></label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="workshop_day1_4" name="workshop_day1" value="w4">
                          <label class="custom-control-label" for="workshop_day1_4">Workshop 4 : Development and
                            Implementation-Game design-Board game <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance[3]; ?> ที่</span></label>
                        </div>
                    </div>
                    <!-- Day 2 -->
                    <div class="form-group ml-3">
                      <label>วันพฤหัสบดีที่ 1 พฤษภาคม พ.ศ. 2563 (14.45 - 16.00 น.)</label>
                      <div class="custom-control  custom-radio">
                        <input type="radio" class="custom-control-input" id="workshop_day2_1" name="workshop_day2" value="w5" checked>
                        <label class="custom-control-label" for="workshop_day2_1">Workshop 5 : เนรมิตห้องเรียน 4.0
                          ด้วยเครื่องมือดิจิทัล <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[0]; ?> ที่</span></label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="workshop_day2_2" name="workshop_day2"  value="w6">
                        <label class="custom-control-label" for="workshop_day2_2">Workshop 6 : Micro mastery:
                          ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง “ความเก่งทีละเล็กทีละน้อย <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[1]; ?> ที่</span></label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="workshop_day2_3" name="workshop_day2" value="w7">
                        <label class="custom-control-label" for="workshop_day2_3">Workshop 7 :
                          วิจัยจัดการเรียนการสอน <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[2]; ?> ที่</span></label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="workshop_day2_4" name="workshop_day2" value="w8">
                        <label class="custom-control-label" for="workshop_day2_4">Workshop 8 :
                          สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning <span class="badge badge-warning">เหลือที่นั่งอีก <?php echo $workshop_balance_2[3]; ?> ที่</span></label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Regis fee -->
                <div class="form-row pay-rate">
                  <div class="form-group col-md-8">
                    <label>อัตราค่าลงทะเบียน</label>
                    <!-- Group of material radios - option 1 -->
                    <div class="pl-3">
                      <div class="custom-control">
                        <label>- Early Bird 2,500 บาท <sup class="bg-danger border-radius">**Active Now**</sup> </label>
                      </div>
                      <div class="custom-control">
                        <label>- Regular 3,000 บาท</label>
                      </div>
                      <div class="custom-control">
                        <label>- Group (สำหรับผู้ลงทะเบียน 6 ท่าน) 16,000 บาท </label>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/agency.min.js"></script>
  <script src="js/top_page.js"></script>
  <script src="js/check_regis.js"></script>

  <script type="text/javascript">
    function checkeng() {
        var obj=document.getElementById("fname_eng");
        var str="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" 
        var val=obj.value
        var valOK = true;
        for (i=0; i<val.length & valOK; i++){
              valOK = (str.indexOf(val.charAt(i))!= -1) 
        }
        if (!valOK) {
              alert("กรุณากรอกภาษาอังกฤษเท่านั้น !!! ")
              document.getElementById('fname_eng').value = "";
              obj.focus()

              return false
        } return true
    } 
    function checkeng2() {
        var obj=document.getElementById("lname_eng");
        var str="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" 
        var val=obj.value
        var valOK = true;
        
        for (i=0; i<val.length & valOK; i++){
              valOK = (str.indexOf(val.charAt(i))!= -1) 
        }
        
        if (!valOK) {
              alert("กรุณากรอกภาษาอังกฤษเท่านั้น !!! ")
              document.getElementById('lname_eng').value = "";
              obj.focus()
              return false
        } return true
    } 
    
    </script>
</body>

</html>