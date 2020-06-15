<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
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
?>
