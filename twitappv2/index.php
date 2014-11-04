<?php
include('lock.php');
include('config.php');

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

<body>
<div class="container">
<?php
  include('inc/header.php');
  include('inc/home.php');
  if (! isset($_GET['page'])){
    }
  }
?>



</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
  <script src="lib/jquery-1.11.0.js"></script>
  <script src="lib/bootstrap.js"></script>
  <script src="lib/docs.min.js"></script>
  <script src="lib/sorttable.js"></script>  
<?php include('inc/footer.php');  ?>
</body>
</html>