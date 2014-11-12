<?php
switch(isset($_GET['id'])) {
  default;
  include('menu/home.php');
  break;

  case "pengaduan":
  include('menu/pengaduan.php');
  break;
}  
?>