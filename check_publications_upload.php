<?php 
include "connect.php";
// echo $_POST['callback_id'];
if(isset($_POST['submit'])) {
    if ((empty($_POST["subtheme"])) && !empty($_FILES["paper_upload"]["name"])) {
        echo "
        <script>
        alert('กรุณาเลือกข้อย่อยสำหรับการส่งบทความวิจัย/บทความวิชาการ ');
        window.history.back();
        </script>";
    }else if ((!empty($_POST["subtheme"])) && empty($_FILES["paper_upload"]["name"])) {
        echo "
        <script>
        alert('กรุณาเลือกไฟล์ที่ต้องการ Upload');
        window.history.back();
        </script>";
    }else if ((!empty($_POST["subtheme"])) && !empty($_FILES["paper_upload"]["name"])) {
        $tmp_name=$_FILES['paper_upload']['tmp_name'];
        $ext = pathinfo($_FILES['paper_upload']['name'])['extension'];
        if($ext=="docx" or $ext=="doc") { 
            $file_name = "paper_".$_POST["subtheme"]."_".date("Y-m-d-his").".".$ext;
            $moved = move_uploaded_file($tmp_name,"publications/".$file_name);

            if($moved) {
                $regis_date = date("Y-m-d H:i:s");
                $stmt_publications = $conn->prepare("INSERT INTO publications (register_id,paper_name,paper_subtheme,paper_upload_date)
                VALUES (?,?,?,?)");
                $stmt_publications->bindParam(1,$_POST["inputId"]);
                $stmt_publications->bindParam(2,$file_name);
                $stmt_publications->bindParam(3,$_POST["subtheme"]);
                $stmt_publications->bindParam(4,$regis_date); 
                $upload_status = $stmt_publications->execute();
                // include "sendmail_regis.php";
                if ($upload_status) {
                    echo 'It worked!';
                 } else {
                    echo 'It failed!';
                 }

                echo "<script>
                alert('การ Upload เสร็จสมบูรณ์');
                </script>";         
                header('Refresh:0; url=publications_upload.php');
              } else {
                echo "<script>
                alert('การ Upload ผิดพลาด กรุณา Upload อีกครั้งหรือติดต่อเจ้าหน้าที่');
                window.history.back();
                </script>";
              }

        }else{
            echo "<script>
            alert('การ Upload ผิดพลาด กรุณาตรวจสอบประเภทไฟล์ของท่าน');
            window.history.back();
            </script>";
        }

    }

    // echo "<br>".$_POST['inputId'];
    // echo "<br>".$_FILES['paper_upload']['tmp_name'];
    // echo $ext;

}


?>