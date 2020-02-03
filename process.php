<?php
require_once 'DBController.php';
if(isset($_POST["email"])) {
    $value = trim($_POST["email"]);
    $Records = new Records();
    echo $Records->searchDate($value);
}