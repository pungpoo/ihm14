<?php 
include "connect.php" ;
$sql_workshop_balance_w1="SELECT regis_workshop_day1,COUNT(*) as num ,(50-COUNT(*)) as num_1 FROM `register` where regis_workshop_day1 = 'w1' and regis_payment_status != 9 ";
$result_sql_workshop_balance_w1 = $conn->prepare($sql_workshop_balance_w1); 
$result_sql_workshop_balance_w1->execute(); 
while($row_workshop_balance_w1 = $result_sql_workshop_balance_w1->fetch(PDO::FETCH_ASSOC)){
    $workshop_balance_w1 = $row_workshop_balance_w1['num_1'];
    //echo "WS1 : ".$workshop_balance_w1."<br>";
    }
    
$sql_workshop_balance_w2="SELECT regis_workshop_day1,COUNT(*) as num ,(50-COUNT(*)) as num_1 FROM `register` where regis_workshop_day1 = 'w2' and regis_payment_status != 9";
$result_sql_workshop_balance_w2 = $conn->prepare($sql_workshop_balance_w2); 
$result_sql_workshop_balance_w2->execute(); 
while($row_workshop_balance_w2 = $result_sql_workshop_balance_w2->fetch(PDO::FETCH_ASSOC)){
    $workshop_balance_w2 = $row_workshop_balance_w2['num_1'];
    //echo "WS2 : ".$workshop_balance_w2."<br>";
    }
    
$sql_workshop_balance_w3="SELECT regis_workshop_day1,COUNT(*) as num ,(50-COUNT(*)) as num_1 FROM `register` where regis_workshop_day1 = 'w3' and regis_payment_status != 9";
$result_sql_workshop_balance_w3 = $conn->prepare($sql_workshop_balance_w3); 
$result_sql_workshop_balance_w3->execute(); 
while($row_workshop_balance_w3 = $result_sql_workshop_balance_w3->fetch(PDO::FETCH_ASSOC)){
    $workshop_balance_w3 = $row_workshop_balance_w3['num_1'];
    //echo "WS3 : ".$workshop_balance_w3."<br>";
    }
    
$sql_workshop_balance_w4="SELECT regis_workshop_day1,COUNT(*) as num ,(50-COUNT(*)) as num_1 FROM `register` where regis_workshop_day1 = 'w4' and regis_payment_status != 9";
$result_sql_workshop_balance_w4 = $conn->prepare($sql_workshop_balance_w4); 
$result_sql_workshop_balance_w4->execute(); 
while($row_workshop_balance_w4 = $result_sql_workshop_balance_w4->fetch(PDO::FETCH_ASSOC)){
    $workshop_balance_w4 = $row_workshop_balance_w4['num_1'];
    //echo "WS4 : ".$workshop_balance_w4."<br>";
    }
    
    //echo "________________________________________________________________<br>";

$sql_workshop_balance_w5="SELECT regis_workshop_day2,COUNT(*) as num ,(50-COUNT(*)) as num_1 FROM `register` where regis_workshop_day2 = 'w5' and regis_payment_status != 9";
$result_sql_workshop_balance_w5 = $conn->prepare($sql_workshop_balance_w5); 
$result_sql_workshop_balance_w5->execute(); 
while($row_workshop_balance_w5 = $result_sql_workshop_balance_w5->fetch(PDO::FETCH_ASSOC)){
    $workshop_balance_w5 = $row_workshop_balance_w5['num_1'];
    //echo "WS5 : ".$workshop_balance_w5."<br>";
    }


$sql_workshop_balance_w6="SELECT regis_workshop_day2,COUNT(*) as num ,(50-COUNT(*)) as num_1 FROM `register` where regis_workshop_day2 = 'w6' and regis_payment_status != 9";
$result_sql_workshop_balance_w6 = $conn->prepare($sql_workshop_balance_w6); 
$result_sql_workshop_balance_w6->execute(); 
while($row_workshop_balance_w6 = $result_sql_workshop_balance_w6->fetch(PDO::FETCH_ASSOC)){
    $workshop_balance_w6 = $row_workshop_balance_w6['num_1'];
    //echo "WS6 : ".$workshop_balance_w6."<br>";
    }

$sql_workshop_balance_w7="SELECT regis_workshop_day2,COUNT(*) as num ,(50-COUNT(*)) as num_1 FROM `register` where regis_workshop_day2 = 'w7' and regis_payment_status != 9";
$result_sql_workshop_balance_w7 = $conn->prepare($sql_workshop_balance_w7); 
$result_sql_workshop_balance_w7->execute(); 
while($row_workshop_balance_w7 = $result_sql_workshop_balance_w7->fetch(PDO::FETCH_ASSOC)){
    $workshop_balance_w7 = $row_workshop_balance_w7['num_1'];
    //echo "WS7 : ".$workshop_balance_w7."<br>";
    }

$sql_workshop_balance_w8="SELECT regis_workshop_day2,COUNT(*) as num ,(40-COUNT(*)) as num_1 FROM `register` where regis_workshop_day2 = 'w8' and regis_payment_status != 9";
$result_sql_workshop_balance_w8 = $conn->prepare($sql_workshop_balance_w8); 
$result_sql_workshop_balance_w8->execute(); 
while($row_workshop_balance_w8 = $result_sql_workshop_balance_w8->fetch(PDO::FETCH_ASSOC)){
    $workshop_balance_w8 = $row_workshop_balance_w8['num_1'];
    //echo "WS8 : ".$workshop_balance_w8."<br>";
    }

// $sql_workshop_balance_2="SELECT regis_workshop_day2,COUNT(*) as num2 ,(50-COUNT(*)) as num_2 FROM `register` GROUP by regis_workshop_day2";
// $result_sql_workshop_balance_2 = $conn->prepare($sql_workshop_balance_2); 
// $result_sql_workshop_balance_2->execute(); 
// while($row_workshop_balance_2 = $result_sql_workshop_balance_2->fetch(PDO::FETCH_ASSOC)){
//     // echo "ประเภท:".$row_workshop_balance_2['regis_workshop_day2'].",จำนวนคนสมัคร :".$row_workshop_balance_2['num_2'].",เหลือ : ".$row_workshop_balance_2['num_2'];
//     // echo "<br>";
//     $workshop_balance_2[] = $row_workshop_balance_2['num_2'];
//     }
//     echo "WS5 : ".$workshop_balance_2[0]."<br>";
//     echo "WS6 : ".$workshop_balance_2[1]."<br>";
//     echo "WS7 : ".$workshop_balance_2[2]."<br>";
//     echo "WS8 : ".$workshop_balance_2[3]."<br>";
//     echo "No : ".$workshop_balance_2[4]."<br>";
?>