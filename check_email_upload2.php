<?php
include "connect.php";

if (isset($_POST['email'])){

$email = $_POST["email"];
$phone = $_POST["phone"];
$x = array("Volvo", "BMW", "Toyota");
// echo $email."<br>".$phone ;
            $stmt = $conn->prepare("SELECT id,regis_name,regis_lastname,regis_publication FROM `register` WHERE `regis_mail` = '".$email."' AND `regis_phone` = '".$phone."' ");
            $stmt->execute();
            $row = $stmt->fetch();
            $result = $row;
            echo json_encode($result);
            

 
            // echo json_encode($x);
            // echo json_encode($x);
            // echo json_encode("1,2,3");
            //   echo "Upload ในนามของคุณ".$row["regis_name"]." ".$row["regis_lastname"] ;

            //   $register_id = $row["id"];
            //   echo  $register_id;
}
?>