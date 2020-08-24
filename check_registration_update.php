<?php 
session_start();
    include "connect.php";
    if (isset($_POST["submit"])) {
        if (hash_equals($_SESSION['token'], $_POST['csrf'])) {
            // echo $_POST["csrf"]."<br>";
            $title_name = $_POST["title"];
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $gender = $_POST["gender"];
            $age = $_POST["age"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $affiliation = $_POST["affiliation"];
            $food = $_POST["food"];
            $food_allergy = $_POST["food_allergy"];
            $session_day8_1 = $_POST["day8-m"];
            $session_day8_2 = $_POST["day8-noon"];
            $session_day9_1 = $_POST["day9-m"];
            $session_day9_2 = $_POST["day9-noon"];
            $session_day9_3 = $_POST["day9-last"];
            $regis_date = date("Y-m-d H:i:s");

            // food 
            switch ($food) {
                case '1':
                    $food_type = "อาหารทั่วไป";
                    break;
                case '2':
                    $food_type = "มังสวิรัติ";
                    break;
                case '3':
                    $food_type = "ฮาลาล";
                    break;
                case '4':
                    $food_type = "ไม่รับอาหาร";
                    break;
                    
            }

            // map value to send mail 
            switch ($session_day8_1) {
                case 'zoom':
                    $session_day8_1_type ="ZOOM";
                    break;
                case 'walkin':
                    $session_day8_1_type ="ลงทะเบียนรับชมการถ่ายทอดสดที่คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล";
                    break;
            }
            switch ($session_day8_2) {
                case '312_zoom':
                    $session_day8_type = "ZOOM";
                    $session_day8_room = "ห้องที่ 1 เกมออนไลน์ สื่อสังคมและแอปพลิเคชั่น (ห้อง 412)";
                    break;
                case '312_walkin':
                    $session_day8_type = "ลงทะเบียนรับชมการถ่ายทอดสดที่คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล";
                    $session_day8_room = "ห้องที่ 1 เกมออนไลน์ สื่อสังคมและแอปพลิเคชั่น (ห้อง 412)";
                    break;
                    
                case '313_zoom':
                    $session_day8_type = "ZOOM";
                    $session_day8_room = "ห้องที่ 2 อัตลักษณ์ สังคมและวัฒนธรรม (ห้อง 413)";
                    break;
                case '313_walkin':
                    $session_day8_type = "ลงทะเบียนรับชมการถ่ายทอดสดที่คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล";
                    $session_day8_room = "ห้องที่ 2 อัตลักษณ์ สังคมและวัฒนธรรม (ห้อง 413)";
                    break;
                    
                case '314_zoom':
                    $session_day8_type = "ZOOM";
                    $session_day8_room = "ห้องที่ 3 บทบาทรัฐและพลเมือง (ห้อง 414)";
                    break;
                case '314_walkin':
                    $session_day8_type = "ลงทะเบียนรับชมการถ่ายทอดสดที่คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล";
                    $session_day8_room = "ห้องที่ 3 บทบาทรัฐและพลเมือง (ห้อง 414)";
                    break;
                    
                case '315_zoom':
                    $session_day8_type = "ZOOM";
                    $session_day8_room = "ห้องที่ 4 Learning Challenges from Experiences in Southeast Asia and Japan (ห้อง315)";
                    break;
                case '315_walkin':
                    $session_day8_type = "ลงทะเบียนรับชมการถ่ายทอดสดที่คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล";
                    $session_day8_room = "ห้องที่ 4 Learning Challenges from Experiences in Southeast Asia and Japan (ห้อง315)";
                    break;
            }
            switch ($session_day9_1) {
                case 'zoom':
                    $session_day9_1_type ="ZOOM";
                    break;
                case 'walkin':
                    $session_day9_1_type ="ลงทะเบียนรับชมการถ่ายทอดสดที่คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล";
                    break;
            }
            switch ($session_day9_2) {
                case '312_zoom':
                    $session_day9_type = "ZOOM";
                    $session_day9_room = "ห้องที่ 1 จริยธรรม ปัญญาประดิษฐ์ การดูแลชีวิต (ห้อง 412)";
                    break;
                case '312_walkin':
                    $session_day9_type = "ลงทะเบียนรับชมการถ่ายทอดสดที่คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล";
                    $session_day9_room = "ห้องที่ 1 จริยธรรม ปัญญาประดิษฐ์ การดูแลชีวิต (ห้อง 412)";
                    break;
                    
                case '313_zoom':
                    $session_day9_type = "ZOOM";
                    $session_day9_room = "ห้องที่ 2 โควิด สื่อสังคม อุปลักษณ์การเยียวยา (ห้อง 413)";
                    break;
                case '313_walkin':
                    $session_day9_type = "ลงทะเบียนรับชมการถ่ายทอดสดที่คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล";
                    $session_day9_room = "ห้องที่ 2 โควิด สื่อสังคม อุปลักษณ์การเยียวยา (ห้อง 413)";
                    break;
                    
                case '314_zoom':
                    $session_day9_type = "ZOOM";
                    $session_day9_room = "ห้องที่ 3 เพศสภาพ แพทยสภาพ ประวัติศาสตร์ไทย (ห้อง 414)";
                    break;
                case '314_walkin':
                    $session_day9_type = "ลงทะเบียนรับชมการถ่ายทอดสดที่คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล";
                    $session_day9_room = "ห้องที่ 3 เพศสภาพ แพทยสภาพ ประวัติศาสตร์ไทย (ห้อง 414)";
                    break;
                    
                case '315_zoom':
                    $session_day9_type = "ZOOM";
                    $session_day9_room = "ห้องที่ 4 พลเมือง การเรียนรู้ การบริหารการศึกษา (ห้อง 415)";
                    break;
                case '315_walkin':
                    $session_day9_type = "ลงทะเบียนรับชมการถ่ายทอดสดที่คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล";
                    $session_day9_room = "ห้องที่ 4 พลเมือง การเรียนรู้ การบริหารการศึกษา (ห้อง 415)";
                    break;
            }
            switch ($session_day9_3) {
                case 'zoom':
                    $session_day9_3_type ="ZOOM";
                    break;
                case 'walkin':
                    $session_day9_3_type ="ลงทะเบียนรับชมการถ่ายทอดสดที่คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล";
                    break;
            }

            $stmt_email_check = $conn->query("SELECT regis_mail FROM register_update where regis_mail = '".$_POST["email"]."' ");
            $email_check = $stmt_email_check->fetch();

            $stmt_name_check = $conn->query("SELECT regis_name,regis_lastname FROM register_update where regis_name = '".$_POST["fname"]."' and regis_lastname = '".$_POST["lname"]."' ");
            $name_check = $stmt_name_check->fetch();

            if(!empty($name_check)){
                echo "
                <script>
                alert('ชื่อ-นามสกุลนี้มีผู้ใช้งานแล้ว');
                window.history.back();
                </script>";
            }else if(!empty($email_check)){
                echo "
                <script>
                alert('Email นี้มีผู้ใช้งานแล้ว');
                window.history.back();
                </script>";
            }else{
            $stmt = $conn->prepare("INSERT INTO register_update (
                regis_title_name, 
                regis_name,
                regis_lastname,
                regis_gender,
                regis_age,
                regis_mail,
                regis_phone,
                regis_affiliation,
                regis_food,
                regis_food_allergy,
                regis_session_day8_1,
                regis_session_day8_2,
                regis_session_day9_1,
                regis_session_day9_2,
                regis_session_day9_3,
                regis_date
                ) 
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                $stmt->bindParam(1, $title_name);
                $stmt->bindParam(2, $fname);
                $stmt->bindParam(3, $lname);
                $stmt->bindParam(4, $gender);
                $stmt->bindParam(5, $age);
                $stmt->bindParam(6, $email);
                $stmt->bindParam(7, $phone);
                $stmt->bindParam(8, $affiliation);
                $stmt->bindParam(9, $food);
                $stmt->bindParam(10, $food_allergy);
                $stmt->bindParam(11, $session_day8_1);
                $stmt->bindParam(12, $session_day8_2);
                $stmt->bindParam(13, $session_day9_1);
                $stmt->bindParam(14, $session_day9_2);
                $stmt->bindParam(15, $session_day9_3);
                $stmt->bindParam(16, $regis_date);
                try {
                //$stmt->execute();
                
                    //  $register_number = sprintf('%04d',$register_number);
                        // if(!isset($_POST["publication"])){
                            $stmt->execute();
                            //echo "ok";
                            include "sendmail_regis_update.php";
                            // echo  $session_day8_1_type."<br>";
                            // echo  $session_day8_room."-".$session_day8_type."<br>";
                            // echo  $session_day9_1_type."<br>";
                            // echo  $session_day9_room."-".$session_day9_type."<br>";
                            // echo  $session_day9_3_type."<br>";
                            // echo "<script>
                            //     window.location='register_list.php';
                            //     alert('ลงทะเบียนเรียบร้อย');
                            //     </script>";
                        // }
                        
                    // Upload process
                // include "sendmail_regis.php";
                    //echo $register_number;
                    // echo "<script>
                    // 	window.location='index.php';
                    // 	alert('คุณได้ลงทะเบียนเรียบร้อยแล้ว กรุณาเข้าสู่ระบบ Prosess1');
                    // 	</script>";
                } 
                catch(PDOException $e) {
                    // handle error 
                    echo $e->getmessage();
                    exit();
                }
            }
        }

        
    }

?>