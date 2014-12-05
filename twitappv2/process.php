<?php
include("inc/config.php");

$user_check="admin";
if($_GET['id'] and $_GET['data'])
{
  $id = $_GET['id'];
  $data = $_GET['data'];

  if (($_GET['data'])==0) {
    $isian = 'id_progres';
  } else if (($_GET['data'])==1) {
    $isian = 'id_progres';
  } else if (($_GET['data'])==2) {
    $isian = 'id_progres';
  } else if (($_GET['data'])==3) {
    $isian = 'id_progres';
  } else if (($_GET['data'])==4) {
    $isian = 'id_progres';
  } else {
    $isian = 'komentar';
  }
  
  //how id
  if(mysql_query("update lapor set '$isian'='$data', editor='$user_check' where id='$id'"))
  echo 'success';
}

?>