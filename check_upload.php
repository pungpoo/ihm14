<?php 
    include "connect.php";
    if (isset($_POST["submit"])) {
        //$paper = $_POST["paper_upload"];

        // for($i=0;$i<count($_FILES['paper_upload']['name']);$i++){
        //     $pic_tmp=$_FILES['paper_upload']['tmp_name'][$i];
        //     $pic_name=$_FILES['paper_upload']['name'][$i];
        //     $ext=strtolower(end(explode(".",$pic_name)));

        //     if($ext=="docx" or $ext=="doc") { 
        //        $type = strrchr($_FILES['paper_upload']['name'][0],".");
        //        $pic_name = date("Y-m-d-his").$type;
        //        copy($pic_tmp,"publications/".$pic_name);
        //     //    echo "<img src='img/$pic_name' class='img-thumbnail' >";
        //     //    echo "<br />นำ URL ด้านล่างไปใช้งาน";
        //     //    echo "<p class='txtred'> https://il.mahidol.ac.th/upload/img/"."$pic_name"."</p>";
        //     $stmt = $conn->prepare("INSERT INTO publications (paper_name)
        //     VALUES (?)");
        //     $stmt->bindParam(1,$pic_name);
        //     $stmt->execute();
        //     }
        //   unlink($pic_tmp);
        //   }
       
            $pic_tmp=$_FILES['paper_upload']['tmp_name'];
            $pic_name=$_FILES['paper_upload']['name'];
            // $ext=strtolower(end(explode(".",$pic_name)));
           echo $_FILES['paper_upload']['name'];
           // $type = explode(".",$_FILES['paper_upload']['name']);
            $ext=strtolower(end(explode(".",$pic_name)));
            echo  "ext"."=".$ext;

            if($ext=="docx" or $ext=="doc") { 
               $type = strrchr($_FILES['paper_upload']['name'],".");
               $pic_name = date("Y-m-d-his").$type;
               copy($pic_tmp,"publications/".$pic_name);
            //    echo "<img src='img/$pic_name' class='img-thumbnail' >";
            //    echo "<br />นำ URL ด้านล่างไปใช้งาน";
            //    echo "<p class='txtred'> https://il.mahidol.ac.th/upload/img/"."$pic_name"."</p>";
            $stmt = $conn->prepare("INSERT INTO publications (paper_name)
            VALUES (?)");
            $stmt->bindParam(1,$pic_name);
            $stmt->execute();
            }
          //unlink($pic_tmp);


       
       
        // $stmt_email_check = $conn->query("SELECT regis_mail FROM register where regis_mail = '".$_POST["email"]."' ");
        // $email_check = $stmt_email_check->fetch();

        // if(!empty($email_check)){
        //     echo "
        //     <script>
        //     alert('Email นี้มีผู้ใช้งานแล้ว');
        //     window.history.back();
        //     </script>";
        // }else{

        // Register Running Number 
        // $register_number = 51;
        // $register_number = sprintf('%04d',$register_number);
        //print $register_number;
        // outputs 0051
        // $stmt = $conn->prepare("INSERT INTO register (
        //     regis_title_name, 
        //     regis_name,
        //     regis_lastname,
        //     regis_gender,
        //     regis_age,
        //     regis_nationality,
        //     regis_mail,
        //     regis_phone,
        //     regis_emergency_phone,
        //     regis_affiliation,
        //     regis_affiliation_address,
        //     regis_billing_info,
        //     regis_billing_address,
        //     regis_food,
        //     regis_food_other,
        //     regis_food_allergy,
        //     regis_workshop_day1,
        //     regis_workshop_day2,
        //     regis_group,
        //     regis_payment_rate
        //     ) 
        // VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        // $stmt->bindParam(1, $title_name);
        // $stmt->bindParam(2, $fname);
        // $stmt->bindParam(3, $lname);
        // $stmt->bindParam(4, $gender);
        // $stmt->bindParam(5, $age);
        // $stmt->bindParam(6, $nationality);
        // $stmt->bindParam(7, $email);
        // $stmt->bindParam(8, $phone);
        // $stmt->bindParam(9, $emergency_phone);
        // $stmt->bindParam(10, $affiliation);
        // $stmt->bindParam(11, $affiliation_address); 
        // $stmt->bindParam(12, $billing_info); 
        // $stmt->bindParam(13, $billing_address);
        // $stmt->bindParam(14, $food);
        // $stmt->bindParam(15, $food_other);
        // $stmt->bindParam(16, $food_allergy);
        // $stmt->bindParam(17, $workshop_day1);
        // $stmt->bindParam(18, $workshop_day2);
        // $stmt->bindParam(19, $regis_group);
        // $stmt->bindParam(20, $regis_payment_rate);
            try {
                //echo $stmt;
               // $stmt->execute();
                 $register_number =  $conn->lastInsertId();
                 $register_number = sprintf('%04d',$register_number);

               // include "sendmail_regis.php";
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
        // }
    }

?>
