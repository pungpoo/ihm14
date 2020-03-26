<?php
include "connect.php";
if (isset($_POST['email'])){
$email = $_POST["email"];
$phone = $_POST["phone"];
            $stmt = $conn->prepare("SELECT register.id,register.regis_name,register.regis_lastname,publications.paper_name,publications.paper_status 
                FROM register
                LEFT JOIN  publications
                ON publications.register_id = register.id
                WHERE register.regis_mail = '".$email."' AND register.regis_phone = '".$phone."' 
                ");
            $stmt->execute();
            $result = $stmt->fetch();
            echo json_encode($result);
}
?>