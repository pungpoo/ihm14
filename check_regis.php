<?php 
    include "connect.php";
    if (isset($_POST["submit"])) {
        $title_name = $_POST["title"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        // $fname_eng = $_POST["fname_eng"];
        // $lname_eng = $_POST["lname_eng"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $nationality = $_POST["nationality"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $emergency_phone = $_POST["emergency_phone"];
        $affiliation = $_POST["affiliation"];
        $affiliation_address = $_POST["affiliation_address"];
        $billing_info = $_POST["billing_info"];
        $billing_address = $_POST["billing_address"];
        $food = $_POST["food"];
        $food_other = $_POST["food_other"];
        $food_allergy = $_POST["food_allergy"];
        $workshop_day1 = $_POST["workshop_day1"];
        $workshop_day2 = $_POST["workshop_day2"];
        $regis_group = "0";
        $regis_payment_rate = "eb";

        $stmt_email_check = $conn->query("SELECT regis_mail FROM register where regis_mail = '".$_POST["email"]."' ");
        $email_check = $stmt_email_check->fetch();

        if(!empty($email_check)){
            echo "
            <script>
            alert('Email นี้มีผู้ใช้งานแล้ว');
            window.history.back();
            </script>";
        }else{

        // Register Running Number 
        // $register_number = 51;
        // $register_number = sprintf('%04d',$register_number);
        //print $register_number;
        // outputs 0051
        $stmt = $conn->prepare("INSERT INTO register (
            regis_title_name, 
            regis_name,
            regis_lastname,
            regis_gender,
            regis_age,
            regis_nationality,
            regis_mail,
            regis_phone,
            regis_emergency_phone,
            regis_affiliation,
            regis_affiliation_address,
            regis_billing_info,
            regis_billing_address,
            regis_food,
            regis_food_other,
            regis_food_allergy,
            regis_workshop_day1,
            regis_workshop_day2,
            regis_group,
            regis_payment_rate
            ) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bindParam(1, $title_name);
        $stmt->bindParam(2, $fname);
        $stmt->bindParam(3, $lname);
        $stmt->bindParam(4, $gender);
        $stmt->bindParam(5, $age);
        $stmt->bindParam(6, $nationality);
        $stmt->bindParam(7, $email);
        $stmt->bindParam(8, $phone);
        $stmt->bindParam(9, $emergency_phone);
        $stmt->bindParam(10, $affiliation);
        $stmt->bindParam(11, $affiliation_address); 
        $stmt->bindParam(12, $billing_info); 
        $stmt->bindParam(13, $billing_address);
        $stmt->bindParam(14, $food);
        $stmt->bindParam(15, $food_other);
        $stmt->bindParam(16, $food_allergy);
        $stmt->bindParam(17, $workshop_day1);
        $stmt->bindParam(18, $workshop_day2);
        $stmt->bindParam(19, $regis_group);
        $stmt->bindParam(20, $regis_payment_rate);
            try {
                //echo $stmt;
                $stmt->execute();
                 $register_number =  $conn->lastInsertId();
                 $register_number = sprintf('%04d',$register_number);

                include "sendmail_regis.php";
                //echo $register_number;
                // echo "<script>
				// 	window.location='index.php';
				// 	alert('คุณได้ลงทะเบียนเรียบร้อยแล้ว กรุณาเข้าสู่ระบบ');
				// 	</script>";
            } 
            catch(PDOException $e) {
                // handle error 
                echo $e->getmessage();
                exit();
             }
            // catch (Exception $exc) {
            //         echo $exc->getTraceAsString();
            //     }
        }
    }

?>
