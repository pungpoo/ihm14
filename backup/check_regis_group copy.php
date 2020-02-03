<?php 
    include "connect.php";
    // if (isset($_POST['submit'])) {
    //     $x=1;
    //     while($x <= 5) {
    //         echo "<br> Name:".$_POST['txt'.$x]."<br>";

    //         $sql = $conn->prepare("INSERT INTO tbl_test (`name`)  VALUES (?)");
    //         $sql->bindParam(1,$_POST['txt'.$x]);
    //         $sql->execute();
    //             if (!empty($sql) && $x = 5) {
    //                 echo "New record created successfully";
                   
    //             } else {
    //                 echo "Error: " . $sql . "<br>" . $conn->error;
    //             }
    //             $x++;
    //     }
        
    // } 

            // Register Running Number 
            $register_number = 51;
            $register_number = sprintf('%04d',$register_number);
            print $register_number;
            // outputs 0051
    if (isset($_POST["submit"])) {
        $title_name = $_POST["title_th_".$x];
        $fname_th = $_POST["fname_th_".$x];
        $lname_th = $_POST["lname_th_".$x];
        $fname_eng = $_POST["fname_eng_".$x];
        $lname_eng = $_POST["lname_eng_".$x];
        $gender = $_POST["gender_".$x];
        $age = $_POST["age_".$x];
        $nationality = $_POST["nationality_".$x];
        $email = $_POST["email_".$x];
        $phone = $_POST["phone_".$x];
        $emergency_phone = $_POST["emergency_phone_".$x];
        $affiliation = $_POST["affiliation_".$x];
        //$workplace = $_POST["workplace_".$x];
        $province = $_POST["province_".$x];
        $food = $_POST["food_".$x];
        $food_allergy = $_POST["food_allergy_".$x];
        $regis_group = "0";
        $regis_payment_rate = "1";
        $x=1;
        while($x <= 6) 
        {
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
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");  //$_POST['txt'.$x]
                $stmt->bindParam(1, $title_name);
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
                $stmt->execute();

                if (!empty($stmt) && $x = 6) {
                    echo "New record created successfully";
                   
                } else {
                    echo "Error: " . $stmt . "<br>" . $conn->error;
                }
                $x++;

                // try {
                //     //echo $stmt;
                //     //$stmt->execute();
                    
                //     // echo "New records created successfully";
                //     if ($x=6) {
                //         echo "<script>
                //         window.location='index.php';
                //         alert('คุณได้ลงทะเบียนเรียบร้อยแล้ว กรุณาเข้าสู่ระบบ');
                //         </script>";
                //     }
                    
                // } 
                // catch(PDOException $e) {
                //     // handle error 
                //     echo $e->getmessage();
                //     exit();
                // }
                // $x++;
        }
    }
?>
