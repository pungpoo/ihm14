<?php 
include "connect.php" ;
$sql_workshop_balance="SELECT regis_workshop_day1,COUNT(*) as num ,(50-COUNT(*)) as num_1 FROM `register` GROUP by regis_workshop_day1";
$result_sql_workshop_balance = $conn->prepare($sql_workshop_balance); 
$result_sql_workshop_balance->execute(); 
while($row_workshop_balance = $result_sql_workshop_balance->fetch(PDO::FETCH_ASSOC)){
    // echo "ประเภท:".$row_workshop_balance['regis_workshop_day1'].",จำนวนคนสมัคร :".$row_workshop_balance['num'].",เหลือ : ".$row_workshop_balance['num_1'];
    // echo "<br>";
    $workshop_balance[] = $row_workshop_balance['num_1'];

    }
    // echo "WS1 : ".$workshop_balance[0]."<br>";
    // echo "WS2 : ".$workshop_balance[1]."<br>";
    // echo "WS3 : ".$workshop_balance[2]."<br>";
    // echo "WS4 : ".$workshop_balance[3]."<br>";
    // echo "No : ".$workshop_balance[4]."<br>";


$sql_workshop_balance_2="SELECT regis_workshop_day2,COUNT(*) as num2 ,(50-COUNT(*)) as num_2 FROM `register` GROUP by regis_workshop_day2";
$result_sql_workshop_balance_2 = $conn->prepare($sql_workshop_balance_2); 
$result_sql_workshop_balance_2->execute(); 
while($row_workshop_balance_2 = $result_sql_workshop_balance_2->fetch(PDO::FETCH_ASSOC)){
    // echo "ประเภท:".$row_workshop_balance_2['regis_workshop_day2'].",จำนวนคนสมัคร :".$row_workshop_balance_2['num_2'].",เหลือ : ".$row_workshop_balance_2['num_2'];
    // echo "<br>";
    $workshop_balance_2[] = $row_workshop_balance_2['num_2'];
    }
    // echo "WS5 : ".$workshop_balance_2[0]."<br>";
    // echo "WS6 : ".$workshop_balance_2[1]."<br>";
    // echo "WS7 : ".$workshop_balance_2[2]."<br>";
    // echo "WS8 : ".$workshop_balance_2[3]."<br>";
    // echo "No : ".$workshop_balance_2[4]."<br>";
?>