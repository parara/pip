<?php
$mysql_hostname = "localhost";
$mysql_user = "twitapp";
$mysql_password = "tw1t4pp";
$mysql_database = "testdb";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
?>