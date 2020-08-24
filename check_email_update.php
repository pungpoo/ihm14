<?php
    // **** Check Email **** //
    if(isset($_POST["email"])) {
        $value = trim($_POST["email"]);
        $Records = new Records();
        echo $Records->searchDate($value);
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
    public function searchDate($value) {
        try {
            $conn = $this->dbCon();
            $stmt = $conn->prepare("SELECT regis_mail FROM register_update WHERE regis_mail = :value");
            $stmt->bindParam(':value', $value, PDO::PARAM_STR);
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