<?php
include("../config.php");
if($_GET['id'] and $_GET['data'])
{
  $id = $_GET['id'];
  $data = $_GET['data'];
  if(mysql_query("UPDATE Lapor SET Verifikasi='$data' WHERE Id='$id'"))
  echo 'success';
}
?>