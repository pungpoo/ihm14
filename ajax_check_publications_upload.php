<?php
include "connect.php";

if (isset($_POST['email'])){

$email = $_POST["email"];
$phone = $_POST["phone"];

            // $stmt = $conn->prepare("SELECT id,regis_name,regis_lastname,regis_publication FROM `register` WHERE `regis_mail` = '".$email."' AND `regis_phone` = '".$phone."' ");
            // $stmt->execute();
            // $row = $stmt->fetch();
            // $result = $row;
            // echo json_encode($result);
        $stmt = $conn->prepare("SELECT register.id,register.regis_name,register.regis_lastname,publications.paper_id,publications.paper_name,publications.paper_status,register.regis_publication
        FROM register
        LEFT JOIN  publications
        ON publications.register_id = register.id
        WHERE register.regis_mail = '".$email."' AND register.regis_phone = '".$phone."' 
        ");
        $stmt->execute();
        $result = $stmt->fetch();
        // $paper_id = $result['paper_id'];
        // $stmt_revision = $conn->prepare("SELECT publications.paper_id,revision.revision_id,revision.revision_file_name 
        //     FROM revision
        //     LEFT JOIN  publications
        //     ON publications.paper_id = revision.paper_id
        //     WHERE publications.paper_id = '".$paper_id."' 
        //     ");
        // $stmt_revision->execute();
        // $result_revision = $stmt_revision->fetch();
        // $result = array($result, $result_revision);
        echo json_encode($result);
    }
?>