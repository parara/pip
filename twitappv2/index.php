<?php
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Home | Aplikasi Pelayanan Perizinan Terpadu</title>

<link href="css/bootstrap-theme.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/carousel.css" rel="stylesheet">
<link href="css/docs.min.css" rel="stylesheet">
<link href="css/xeditable.css" rel="stylesheet">
<link href="css/table.css" rel="stylesheet">
<link href="css/justified-nav.css" rel="stylesheet">
</head>

<div class="container">
  <div class="masthead">
    <h4 class="text-muted">Badan Pelayanan Perizinan Terpadu dan Penanaman Modal Kota Bogor</h4>
    <ul class="nav nav-justified nav-tabs" role="tablist">
      <li><a href="index.php">Home</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </div>
<body>
  <h2>Ini disi apa</h2>
  <p class="text-danger">As of v7.0.1, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.</p>
  <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p> 
</div>

<?php
include('inc/footer.php');
?>