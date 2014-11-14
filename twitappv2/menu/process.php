<?php
include("../config.php");
if($_GET['id'] and $_GET['data'])
{
  $id = $_GET['id'];
  $data = $_GET['data'];
  if(mysql_query("update Lapor set Verifikasi='$data' where Id='$id'"))
  echo 'success';
}
?>