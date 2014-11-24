<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Home | Aplikasi Pelayanan Perizinan Terpadu</title>
    
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
    <link href="css/docs.min.css" rel="stylesheet">
    
    <link href="css/stylev2.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" href="css/font-awesome-4.1.0/css/font-awesome.min.css" type="text/css" media="screen">

</head>

<div class="container">
  <div class="masthead">
    <h4>Badan Pelayanan Perizinan Terpadu dan Penanaman Modal Kota Bogor</h4>
    <div class="navbar navbar-default">
      <ul class="nav navbar-nav">
        <li><a href="index.php?mod=user">Home</a></li>
        <li><a href="index.php?mod=pengaduan">Laporan Masuk</a></li>
        <li><a href="index.php?mod=langganan">Laporan Verifikasi</a></li>
        <li><a href="index.php?mod=pengaturan">Pengaturan</a></li>
        <!-- <li><a href="index.php?id=akun">Akun</a></li> -->
        <li><a href="logout.php">Sign Out</a></li>
      </ul>
    </div>
  </div>
  
  <body>
    <h2>Laporan Masuk</h2>
    <div id="wrap">
      <!-- Grid contents -->
      <div id="tablecontent"></div>
    
      <!-- Paginator control -->
      <div id="paginator"></div>
    </div>  
    
    <script src="js/editablegrid-2.1.0-b13.js"></script>   
    <script src="js/jquery-1.11.1.min.js" ></script>
        <!-- EditableGrid test if jQuery UI is present. If present, a datepicker is automatically used for date type -->
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="js/demo.js" ></script>
    <script type="text/javascript">
      var datagrid = new DatabaseGrid();
      window.onload = function() { 
        // key typed in the filter field
        $("#filter").keyup(function() {
            datagrid.editableGrid.filter( $(this).val());

            // To filter on some columns, you can set an array of column index 
            //datagrid.editableGrid.filter( $(this).val(), [0,3,5]);
          });

        $("#showaddformbutton").click( function()  {
          showAddForm();
        });
        $("#cancelbutton").click( function() {
          showAddForm();
        });

        $("#addbutton").click(function() {
          datagrid.addRow();
        });
      }; 
    </script>
  </body>
<?php
  include ("utama/footer.php");
?>
