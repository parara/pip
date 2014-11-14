<?php
include("connect.php");
if($_GET['id'] and $_GET['data'])
{
	$id = $_GET['id'];
	$data = $_GET['data'];
	if(mysql_query("update information set name='$data' where id='$id'"))
	echo 'success';
}
?>