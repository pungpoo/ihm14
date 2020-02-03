<?php 
    include "connect.php";
    if (isset($_POST["submit"])) {
        $title_name_th = $_POST["title_th"];
        $fname_th = $_POST["fname_th"];
        $lname_th = $_POST["lname_th"];
        $fname_eng = $_POST["fname_eng"];
        $lname_eng = $_POST["lname_eng"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $nationality = $_POST["nationality"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $emergency_phone = $_POST["emergency_phone"];
        $affiliation = $_POST["affiliation"];
        $workplace = $_POST["workplace"];
        $province = $_POST["province"];
        $food = $_POST["food"];
        $food_allergy = $_POST["food_allergy"];
          $regis_group = "0";
        $regis_payment_rate = "1";

        // Register Running Number 
        $register_number = 51;
        $register_number = sprintf('%04d',$register_number);
        print $register_number;
        // outputs 0051
        $stmt = $conn->prepare("INSERT INTO register (
            regis_title_name, 
            regis_th_name,
            regis_th_lastname,
            regis_eng_name,
            regis_eng_lastname,
            regis_gender,
            regis_age,
            regis_nationality,
            regis_mail,
            regis_phone,
            regis_emergency_phone,
            regis_affiliation,
            regis_workpace,
            regis_province,
            regis_food,
            regis_food_allergy,
            regis_group,
            regis_payment_rate
            ) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bindParam(1, $title_name_th);
        $stmt->bindParam(2, $fname_th);
        $stmt->bindParam(3, $lname_th);
        $stmt->bindParam(4, $fname_eng);
        $stmt->bindParam(5, $lname_eng);
        $stmt->bindParam(6, $gender);
        $stmt->bindParam(7, $age);
        $stmt->bindParam(8, $nationality);
        $stmt->bindParam(9, $email);
        $stmt->bindParam(10, $phone);
        $stmt->bindParam(11, $emergency_phone);
        $stmt->bindParam(12, $affiliation);
        $stmt->bindParam(13, $workplace);
        $stmt->bindParam(14, $province);
        $stmt->bindParam(15, $food);
        $stmt->bindParam(16, $food_allergy);
        $stmt->bindParam(17, $regis_group);
        $stmt->bindParam(18, $regis_payment_rate);

            try {
        
                //echo $stmt;
                $stmt->execute();
                // echo "New records created successfully";
                echo "<script>
					window.location='index.php';
					alert('คุณได้ลงทะเบียนเรียบร้อยแล้ว กรุณาเข้าสู่ระบบ');
					</script>";
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
?>
