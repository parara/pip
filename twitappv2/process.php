<?php
include("inc/config.php");

$user_check="admin";
// add jam edit;
if($_GET['id'] and $_GET['data'])
{
  $id = $_GET['id'];
  $data = $_GET['data'];

  // if (strlen($data)==1)
  //   $isian = "id_progres";
  // else {
  //   $isian = "komentar";
  // }
  
  //how id
  if(mysql_query("UPDATE lapor SET '$isian'='$data', editor='$user_check' WHERE id='$id'"))
  echo 'success';
}

?>