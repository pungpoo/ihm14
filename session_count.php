<?php 
require_once("connect.php");

    $sql_count = "SELECT 
    (SELECT COUNT(regis_session_day8_1) FROM register_update WHERE regis_session_day8_1 = 'walkin') AS Day8_Session_1,
    (SELECT COUNT(regis_session_day8_2) FROM register_update WHERE regis_session_day8_2 = '312_walkin') AS Day8_Session_312,
    (SELECT COUNT(regis_session_day8_2) FROM register_update WHERE regis_session_day8_2 = '313_walkin') AS Day8_Session_313,
    (SELECT COUNT(regis_session_day8_2) FROM register_update WHERE regis_session_day8_2 = '314_walkin') AS Day8_Session_314,
    (SELECT COUNT(regis_session_day8_2) FROM register_update WHERE regis_session_day8_2 = '315_walkin') AS Day8_Session_315,
    (SELECT COUNT(regis_session_day9_1) FROM register_update WHERE regis_session_day9_1 = 'walkin') AS Day9_Session_1,
    (SELECT COUNT(regis_session_day9_2) FROM register_update WHERE regis_session_day9_2 = '312_walkin') AS Day9_Session_312,
    (SELECT COUNT(regis_session_day9_2) FROM register_update WHERE regis_session_day9_2 = '313_walkin') AS Day9_Session_313,
    (SELECT COUNT(regis_session_day9_2) FROM register_update WHERE regis_session_day9_2 = '314_walkin') AS Day9_Session_314,
    (SELECT COUNT(regis_session_day9_2) FROM register_update WHERE regis_session_day9_2 = '315_walkin') AS Day9_Session_315,    
    (SELECT COUNT(regis_session_day9_3) FROM register_update WHERE regis_session_day9_3 = 'walkin') AS Day9_Session_3
    FROM register_update";
    $stmt_count_check = $conn->query($sql_count);
    $number_of_rows = $stmt_count_check->fetch();

    $Day8_Session_1_balance = 40 - $number_of_rows["Day8_Session_1"] ;
    $Day8_Session_2_312_balance = 10 - $number_of_rows["Day8_Session_312"] ;
    $Day8_Session_2_313_balance = 10 - $number_of_rows["Day8_Session_313"] ;
    $Day8_Session_2_314_balance = 10 - $number_of_rows["Day8_Session_314"] ;
    $Day8_Session_2_315_balance = 10 - $number_of_rows["Day8_Session_315"] ;
    $Day9_Session_1_balance = 40 - $number_of_rows["Day9_Session_1"] ;
    $Day9_Session_2_312_balance = 10 - $number_of_rows["Day9_Session_312"] ;
    $Day9_Session_2_313_balance = 10 - $number_of_rows["Day9_Session_313"] ;
    $Day9_Session_2_314_balance = 10 - $number_of_rows["Day9_Session_314"] ;
    $Day9_Session_2_315_balance = 10 - $number_of_rows["Day9_Session_315"] ;
    $Day9_Session_3_balance = 40 - $number_of_rows["Day9_Session_3"] ;

    // echo $Day8_Session_1_balance."<br>" ;
    // echo $Day8_Session_2_312_balance."<br>" ;
    // echo $Day8_Session_2_313_balance."<br>" ;
    // echo $Day8_Session_2_314_balance."<br>" ;
    // echo $Day8_Session_2_315_balance."<br>" ;
    // echo $Day9_Session_1_balance."<br>" ;
    // echo $Day9_Session_2_312_balance."<br>" ;
    // echo $Day9_Session_2_313_balance."<br>" ;
    // echo $Day9_Session_2_314_balance."<br>" ;
    // echo $Day9_Session_2_315_balance."<br>" ;
    // echo $Day9_Session_3_balance."<br>" ;


    // echo "Day8_Session_1 - ".$number_of_rows["Day8_Session_1"]."<br>" ;
    // echo "Day8_Session_2_312 - ".$number_of_rows["Day8_Session_312"]."<br>" ;
    // echo "Day8_Session_2_313 - ".$number_of_rows["Day8_Session_313"]."<br>" ;
    // echo "Day8_Session_2_314 - ".$number_of_rows["Day8_Session_314"]."<br>" ;
    // echo "Day8_Session_2_315 - ".$number_of_rows["Day8_Session_315"]."<br>" ;
    // echo "Day9_Session_1 - ".$number_of_rows["Day9_Session_1"]."<br>" ;
    // echo "Day9_Session_2_312 - ".$number_of_rows["Day9_Session_312"]."<br>" ;
    // echo "Day9_Session_2_313 - ".$number_of_rows["Day9_Session_313"]."<br>" ;
    // echo "Day9_Session_2_314 - ".$number_of_rows["Day9_Session_314"]."<br>" ;
    // echo "Day9_Session_2_315 - ".$number_of_rows["Day9_Session_315"]."<br>" ;
    // echo "Day9_Session_3 - ".$number_of_rows["Day9_Session_3"] ;

?>