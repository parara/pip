<?php
include "inc/config.php";

$mod = $_GET['mod'];  
  switch($mod){
    case "home" :
    $view = "utama/home.php";
    break;
    case "daftar" :
    $view = "utama/daftar.php";
    break;
    
    case "user" :
    $view = "adm/home.php";
    break;
    case "pengaturan" :
    $view = "adm/pengaturan.php";
    break;
    case "langganan" :
    $view = "adm/langganan.php";
    break;
    case "pengaduan" :
    $view = "adm/pengaduan.php";
    break;
    
    case "tentang" :
    $view = "utama/tentang.php";
    break;
}
    include $view;

if(empty($_GET['mod'])){
  header("location:?mod=home");
}
include ("utama/footer.php");
?>