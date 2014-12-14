<?php
include("inc/config.php");

$user_check="admin";
// add jam edit;
if(empty($_GET['id'])) //or empty($_GET['data']))
{
  return false;
}

  $id = $_GET['id'];
  $data = $_GET['data'];
    //how id
  if (strlen($data) == 1) {
    $kolom = "id_progres"; 
  } else {
    $kolom = "komentar";
  }
  $sql = "UPDATE lapor SET $kolom='$data', editor='$user_check' WHERE id = $id";
  //print_r($sql);exit;
  if(mysql_query($sql))
    echo 'success';


?>