<?php 
	
	header('Content-Type: text/html; charset=utf-8');
	$username=$_POST['username'];
	$password=$_POST['password'];
	
///////////////////
	
	require("conn_mysql.php");
	$sql_query_login="SELECT * FROM employee where username='$username' AND password='$password'";
	$result1=mysqli_query($db_link,$sql_query_login) or die("查詢失敗");
    
	
	require("to_mysql_use.php");
?>

<button onclick="document.location.href='./'">登出</button>;