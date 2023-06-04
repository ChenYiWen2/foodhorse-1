<?php
	// $db_link=@mysqli_connect("127.0.0.1","root","");
	// $db_link=@mysqli_connect("20.187.122.219","master","HsaOPpRkj3c6Hqqp");
	$db_link = new mysqli("20.187.122.219","master","HsaOPpRkj3c6Hqqp", "foodhorse");
	if(!$db_link){
		die("資料庫連線失敗<br>");
	}else{
		echo"資料庫連線成功<br>";
	}
	mysqli_query($db_link,"SET NAMES 'utf8'");  //設定字元集與編碼為utf-8
	// $seldb=@mysqli_select_db($db_link,"foodhorse");
	if(!$seldb){
		die("資料庫選擇失敗<br>");
	}else{
		echo"資料庫選擇成功<br>";
	}
?>