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

<link href="css/justified-nav.css" rel="stylesheet">

</head>

<body>
	<!-- <h1>Welcome <?php echo $login_session; ?></h1> 
	<h2><a href="logout.php">Sign Out</a></h2> -->

<div class="container">
  <div class="masthead">
    <h4 class="text-muted">Badan Pelayanan Perizinan Terpadu dan Penanaman Modal Kota Bogor</h4>
    <ul class="nav nav-justified nav-tabs" role="tablist">
      <li class="active">
      	<a href="#home" role="tab" data-toggle="tab">Home</a>
      </li>
      <li><a href="#pengaduan" role="tab" data-toggle="tab">Pengaduan</a></li>
      <li><a href="#">Langganan</a></li>
      <li><a href="#">Pengaturan</a></li>
      <li><a href="#">Akun</a></li>
      <li><a href="logout.php">Sign Out</a></li>
    </ul>
  </div>
  
<!-- tab conten -->

<div class="tab-content">
  <div class="tab-pane active" id="home">
  	<h2>Ini disi apa</h2>
      <p class="text-danger">As of v7.0.1, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.</p>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>   
  </div>

  <div class="tab-pane" id="pengaduan">
  	<h2>Laporan yang telah masuk</h2>
  	list table
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <?php
      $tampil = mysql_query("SELECT * FROM Lapor limit 0,10");
      echo
      "<table>
				<tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Username</th>
            <th>Isi Laporan</th>
            <th>Status</th>
        </tr>";
       while ($row = mysql_fetch_array($tampil)) {
       	echo "<tr>";
       	echo "<td>" . $row['Id'] . "</td>";
       	echo "<td>" . $row['Date'] . "</td>";
       	echo "<td>" . $row['Name'] . "</td>";
       	echo "<td>" . $row['Isi'] . "</td>";
       	echo "<td>" . $row['Status'] . "</td>";
       }
			echo "</table>";
			?>
  </div>
  <div class="tab-pane" id="messages">...</div>
  <div class="tab-pane" id="settings">...</div>
</div>

<!-- Site footer -->
<footer class="bs-docs-footer" role="contentinfo">
  <div class="container">
    <p>Dev by <a href="http://twitter.com/tuanpembual" target="_blank">@tuanpembual</a>.</p>
    <p>Lisensi kode sumber dibawah <a href="https://github.com/tuanpembual/pip/blob/master/LICENSE" target="_blank">MIT</a>
    <p>&copy; 2014, Boer Technology</p>
  </div>
</footer>

 </div>





<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
  <script src="lib/jquery-1.11.0.js"></script>
  <script src="lib/bootstrap.js"></script>
  <script src="lib/docs.min.js"></script>    

</body>
</html>