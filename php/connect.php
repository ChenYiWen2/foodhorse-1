<?php
$serverhost = "127.0.0.1";
$user = "master";
$password = "HsaOPpRkj3c6Hqqp";
$database = "foodhorse";

$connectNow = new mysqli($serverhost, $user, $password, $database);
mysqli_query($connectNow,"SET NAMES 'UTF8'");
