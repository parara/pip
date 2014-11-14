<?php
echo "sni";
include('lock.php');
include('config.php');

switch($_GET['id']) {
  
  case "home";
  include('menu/home.php');
  break;

  case "langganan":
  include('menu/langganan.php');
  break;

  case "pengaduan":
  include('menu/pengaduan.php');
  break;

  case "pengaturan":
  include('menu/pengaturan.php');
  break;

  case "akun":
  include('menu/akun.php');
  break;

}  
?>