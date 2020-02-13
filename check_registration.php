<?php 
    include "connect.php";
    if (isset($_POST["submit"])) {
        $title_name = $_POST["title"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $nationality = $_POST["nationality"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $emergency_phone = $_POST["emergency_phone"];
        $affiliation = $_POST["affiliation"];
        $affiliation_address = $_POST["affiliation_address"];
        $food = $_POST["food"];
        $food_other = $_POST["food_other"];
        $food_allergy = $_POST["food_allergy"];
        $participate = $_POST["participate"]; 
        $regis_date = date("Y-m-d H:i:s");

        echo $_POST["publication"];

        if(empty($_POST["publication"])){
            $regis_publication = 0;
        }else if(!empty($_POST["publication"])){
            $regis_publication = $_POST["publication"];
            $subtheme = $_POST["subtheme"];
        }

        $stmt_email_check = $conn->query("SELECT regis_mail FROM register where regis_mail = '".$_POST["email"]."' ");
        $email_check = $stmt_email_check->fetch();

        $stmt_name_check = $conn->query("SELECT regis_name,regis_lastname FROM register where regis_name = '".$_POST["fname"]."' and regis_lastname = '".$_POST["lname"]."' ");
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
        }else if(!empty($_POST["publication"]) && empty($_POST["subtheme"])){
            echo "
            <script>
            alert('กรุณาเลือกหัวข้อย่อยสำหรับการส่งบทความวิจัย/บทความวิชาการ');
            window.history.back();
            </script>";
        }else{
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
            regis_food,
            regis_food_other,
            regis_food_allergy,
            regis_participate,
            regis_publication,
            regis_date
            ) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
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
            $stmt->bindParam(12, $food);
            $stmt->bindParam(13, $food_other);
            $stmt->bindParam(14, $food_allergy);
            $stmt->bindParam(15, $_POST["participate"]);
            $stmt->bindParam(16, $regis_publication);
            $stmt->bindParam(17, $regis_date);

            try {
               $stmt->execute();
                 $register_number =  $conn->lastInsertId();
                 $register_number = sprintf('%04d',$register_number);

               // include "sendmail_regis.php";
                //echo $register_number;
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

// Upload process
        if($_POST["publication"] == 1){
            if(!empty($_FILES['paper_upload']['tmp_name'])){
                $pic_tmp=$_FILES['paper_upload']['tmp_name'];
                $pic_name=$_FILES['paper_upload']['name'];
               
                // $type = explode(".",$_FILES['paper_upload']['name']);
                // $ext=strtolower(end(explode(".",$pic_name)));
                $ext = pathinfo($_FILES['paper_upload']['name'])['extension'];

                //echo  "ext"."=".$ext;
                //echo $_FILES['paper_upload']['name'];

                if($ext=="docx" or $ext=="doc") { 
                $type = strrchr($_FILES['paper_upload']['name'],".");
                $pic_name = date("Y-m-d-his").$type;

                copy($pic_tmp,"publications/".$pic_name);

                $stmt_publications = $conn->prepare("INSERT INTO publications (register_id,paper_name,paper_subtheme,paper_upload_date)
                VALUES (?,?,?,?)");
                $stmt_publications->bindParam(1,"1");
                $stmt_publications->bindParam(2,$pic_name);
                $stmt_publications->bindParam(3,$subtheme);
                $stmt_publications->bindParam(4,$$regis_date);
                $stmt_publications->execute();
                    try {
                        $stmt_publications->execute();
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
                }else{ 
                    echo "<script>
                        alert('การ Upload ผิดพลาด กรุณาตรวจสอบประเภทไฟล์ของท่าน');
                        window.history.back();
                        </script>";
                }
                unlink($pic_tmp);
            }
        }
// Upload process
    }

?>