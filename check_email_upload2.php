<?php
include "connect.php";

if (isset($_POST['email'])){

$email = $_POST["email"];
$phone = $_POST["phone"];

// echo $email."<br>".$phone ;
            $stmt = $conn->prepare("SELECT id,regis_name,regis_lastname FROM `register` WHERE `regis_mail` = '".$email."' AND `regis_phone` = '".$phone."' ");
            // $stmt = $conn->prepare("SELECT * FROM `register` WHERE `id` = 45 ");
            $stmt->execute();
            // $count = $stmt->rowCount();
            $row = $stmt->fetch();
            
            // $result = 0;
            // if ($count > 0) {
            //     $result = "Found";
            // } else {
            //     $result = "Not Found";
            // }
            // return $result;
            echo json_encode($row);
            //   echo "Upload ในนามของคุณ".$row["regis_name"]." ".$row["regis_lastname"] ;

            //   $register_id = $row["id"];
            //   echo  $register_id;
}
?>