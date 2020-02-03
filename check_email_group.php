<?php
    // **** Check Email 1**** //
    if(isset($_POST["email_1"])) {
        $value1 = trim($_POST["email_1"]);
        $Records = new Records();
        echo $Records->checkmail($value1);

    }  
    if(isset($_POST["email_2"])) {
        $value2 = trim($_POST["email_2"]);
        $Records2 = new Records();
        echo $Records2->checkmail2($value2);

    }
    if(isset($_POST["email_3"])) {
        $value3 = trim($_POST["email_3"]);
        $Records3 = new Records();
        echo $Records3->checkmail3($value3);

    }
    if(isset($_POST["email_4"])) {
        $value4 = trim($_POST["email_4"]);
        $Records4 = new Records();
        echo $Records4->checkmail4($value4);

    }
    if(isset($_POST["email_5"])) {
        $value5 = trim($_POST["email_5"]);
        $Records5 = new Records();
        echo $Records5->checkmail5($value5);

    }
    if(isset($_POST["email_6"])) {
        $value6 = trim($_POST["email_6"]);
        $Records6 = new Records();
        echo $Records6->checkmail6($value6);

    }

 class Records{
    public function dbCon(){
        // include "connect.php";
        $servername = "localhost";
        $username = "root";
        $password = "BbilkB414148";
        $dbname = "sotl";
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
    public function checkmail($value1) { //searchDate
        try {
            $conn = $this->dbCon();
            $stmt = $conn->prepare("SELECT `regis_mail` FROM `register` WHERE `regis_mail` = :value");
            $stmt->bindParam(':value', $value1, PDO::PARAM_STR);
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
    public function checkmail2($value2) { //searchDate
        try {
            $conn = $this->dbCon();
            $stmt = $conn->prepare("SELECT `regis_mail` FROM `register` WHERE `regis_mail` = :value");
            $stmt->bindParam(':value', $value2, PDO::PARAM_STR);
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
    public function checkmail3($value3) { //searchDate
        try {
            $conn = $this->dbCon();
            $stmt = $conn->prepare("SELECT `regis_mail` FROM `register` WHERE `regis_mail` = :value");
            $stmt->bindParam(':value', $value3, PDO::PARAM_STR);
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
    public function checkmail4($value4) { //searchDate
        try {
            $conn = $this->dbCon();
            $stmt = $conn->prepare("SELECT `regis_mail` FROM `register` WHERE `regis_mail` = :value");
            $stmt->bindParam(':value', $value4, PDO::PARAM_STR);
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
    public function checkmail5($value5) { //searchDate
        try {
            $conn = $this->dbCon();
            $stmt = $conn->prepare("SELECT `regis_mail` FROM `register` WHERE `regis_mail` = :value");
            $stmt->bindParam(':value', $value5, PDO::PARAM_STR);
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
    public function checkmail6($value6) { //searchDate
        try {
            $conn = $this->dbCon();
            $stmt = $conn->prepare("SELECT `regis_mail` FROM `register` WHERE `regis_mail` = :value");
            $stmt->bindParam(':value', $value6, PDO::PARAM_STR);
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