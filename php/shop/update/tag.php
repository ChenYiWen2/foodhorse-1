<?php
require '/var/www/html/connect.php';
mysqli_query($connectNow,"SET NAMES 'UTF8'");

$shopname = $_POST['shopname'];
$tag = $_POST['tag'];

if($tag != null) {
    $sql = "UPDATE shop SET tag = '$tag', updated_at = NOW() WHERE shopname = '$shopname' ";
    $result = $connectNow->query($sql);
    $row = mysqli_fetch_row($result);
    echo "Update Success";
} else echo "No Data\n";

?>
