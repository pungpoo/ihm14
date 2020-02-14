<?php 
    include "connect.php";
    
            if(!empty($_FILES['paper_upload']['tmp_name'])){
                $pic_tmp=$_FILES['paper_upload']['tmp_name'];

                echo $_FILES['paper_upload']['name'];
                $pic_name=$_FILES['paper_upload']['name'];
                // $ext=strtolower(end(explode(".",$pic_name)));
                echo $_FILES['paper_upload']['name'];
                // $type = explode(".",$_FILES['paper_upload']['name']);
                // $ext=strtolower(end(explode(".",$pic_name)));
                $ext = pathinfo($_FILES['paper_upload']['name'])['extension'];
                //echo  "ext"."=".$ext;
                if($ext=="docx" or $ext=="doc") { 
               // $type = strrchr($_FILES['paper_upload']['name'],".");
                $pic_name = "paper_".date("Y-m-d-his").".".$ext;

                copy($pic_tmp,"publications/".$pic_name);

                $stmt = $conn->prepare("INSERT INTO publications (paper_name)
                VALUES (?)");
                $stmt->bindParam(1,$pic_name);
                $stmt->execute();
                echo  "<br>ext"."=".$ext;
                }else{ 
                    echo "<script>
                        alert('การ Upload ผิดพลาด กรุณาตรวจสอบประเภทไฟล์ของท่าน');
                        window.history.back();
                        </script>";
                }
            unlink($pic_tmp);
            }


?>