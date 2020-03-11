<?php
    // **** Check Email **** //
    // if(isset($_POST["email"])) {
    //     $value = trim($_POST["email"]);
    //     $Records = new Records();
    //     echo $Records->searchDate($value);
    // }

    if(isset($_POST["email"])) {
        $email = trim($_POST["email"]);
        // $phone = trim($_POST["phone"]);
        $Records = new Records();
        echo $Records->searchDate($email);
    }
    // **** End Check Email **** //
 class Records{
    public function dbCon(){
        // include "connect.php";
        $servername = "localhost";
        $username = "root";
        $password = "BbilkB414148";
        $dbname = "thrf14";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
            echo "เชื่อมต่อสำเร็จ - DB : ".$dbname; 
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
    }
    public function searchDate($email) {
        try {
            $conn = $this->dbCon();
            $stmt = $conn->prepare("SELECT `regis_mail` FROM `register` WHERE `regis_mail` = :mail AND  `regis_mail` = :phone");
            $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
            $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $result = 0;
            if ($count > 0) {
                $result = "Found";
            } else {
                $result = "Not Found";
            }
            return $result;
        } catch (PDOException $e) {
            echo 'Connection Failed ' . $e->getMessage();
        }
    }
}

?>