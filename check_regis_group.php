

<?php 
    include "connect.php";
            // Register Running Number 
            // $register_number = 51;
            // $register_number = sprintf('%04d',$register_number);
            //print $register_number;
            // outputs 0051

            //Number of Group Check
            $stmt_group = $conn->prepare("SELECT regis_group FROM register WHERE regis_group != 0 ORDER by id desc limit 1"); 
            $stmt_group->execute(); 
            $group = $stmt_group->fetch();
            $group_check = $group[0]+1;
            //echo $group_check;


    if (isset($_POST["submit"])) {
        //Number of Group Check
        $stmt = $conn->query("SELECT regis_group FROM register WHERE regis_group != 0 ORDER by id desc limit 1");
        $user = $stmt->fetch();

        $x = 1;
        $a = 0;
        $b = "gr";
        while($x <= 6) 
        {
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
                $stmt->bindParam(1, $_POST["title_".$x]);
                $stmt->bindParam(2, $_POST["fname_".$x]);
                $stmt->bindParam(3, $_POST["lname_".$x]);
                $stmt->bindParam(4, $_POST["gender_".$x]);
                $stmt->bindParam(5, $_POST["age_".$x]);
                $stmt->bindParam(6, $_POST["nationality_".$x]);
                $stmt->bindParam(7, $_POST["email_".$x]);
                $stmt->bindParam(8, $_POST["phone_".$x]);
                $stmt->bindParam(9, $_POST["emergency_phone_".$x]);
                $stmt->bindParam(10, $_POST["affiliation_".$x]);
                $stmt->bindParam(11, $_POST["affiliation_address_".$x]);
                $stmt->bindParam(12, $_POST["billing_info_".$x]);
                $stmt->bindParam(13, $_POST["billing_address_".$x]);
                $stmt->bindParam(14, $_POST["food_".$x]);
                $stmt->bindParam(15, $_POST["food_other_".$x]);
                $stmt->bindParam(16, $_POST["food_allergy_".$x]);
                $stmt->bindParam(17, $_POST["workshop_day1_".$x]);
                $stmt->bindParam(18, $_POST["workshop_day2_".$x]);
                $stmt->bindParam(19, $group_check);
                $stmt->bindParam(20, $b);

                try {
                    $stmt->execute();
                    // echo "New records created successfully";
                    $register_number =  $conn->lastInsertId();
                    $register_number = sprintf('%04d',$register_number);
                    include "sendmail_regis_group.php";

                    // if ($x==6) { 
                    //     echo "New record created successfully";
                    //     echo "<script>
                    //     window.location='index.php';
                    //     alert('คุณได้ลงทะเบียนเรียบร้อยแล้ว');
                    //     </script>";
                    // }
                } 
                catch(PDOException $e) {
                    // handle error 
                    echo $e->getmessage();
                    exit();
                }
                $x++;
        }
    }
?>

