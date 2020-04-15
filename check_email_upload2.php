<?php
include "connect.php";

if (isset($_POST['email'])){

$email = $_POST["email"];
$phone = $_POST["phone"];

            $stmt = $conn->prepare("SELECT id,regis_name,regis_lastname,regis_publication FROM `register` WHERE `regis_mail` = '".$email."' AND `regis_phone` = '".$phone."' ");
            $stmt->execute();
            $row = $stmt->fetch();
            $result = $row;
            echo json_encode($result);
}
?>