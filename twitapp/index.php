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
      <li><a href="#langganan" role="tab" data-toggle="tab">Langganan</a></li>
      <li><a href="#pengaturan" role="tab" data-toggle="tab">Pengaturan</a></li>
      <li><a href="#akun" role="tab" data-toggle="tab">Akun</a></li>
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
      <table class="table table-hover sortable">
      <?php
      $tampil = mysql_query("SELECT * FROM Lapor limit 0,10");
      echo
      "<tr>
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
			?>
			</table>
  </div>
  <div class="tab-pane" id="langganan">...

  </div>
  <div class="tab-pane" id="pengaturan">
  	<h2>Pengaturan Twitter</h2>
  	kode id, hastag
		bikin form,
		isi form query, klo udh pake metode insert,
		butuh validasi isi

		<ul class="nav nav-tabs" role="tablist">
		  <li role="presentation"><a href="#twitter" role="tab" data-toggle="tab">Twitter</a></li>
		  <li role="presentation"><a href="#email" role="tab" data-toggle="tab">Surel</a></li>
		  <li role="presentation" class="active"><a href="#disable" role="tab" data-toggle="tab">Back</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="disable"></div>
		  <div role="tabpanel" class="tab-pane" id="twitter">
        <h3>Pengaturan Crawling Twitter</h3>
		  	<?php 
					// save
          // how if it no clue
					include('config.php');
					if($_SERVER["REQUEST_METHOD"] == "POST") {
						$CONSUMER_KEY=addslashes($_POST['KunciPelanggan']);
				    $CONSUMER_SECRET= addslashes($_POST['KodeRahasiaPelanggan']);
				    $OAUTH_TOKEN=addslashes($_POST['TokenAkses']);
				    $OAUTH_TOKEN_SECRET=addslashes($_POST['KodeRahasiaToken']);
				    $HASTAG=addslashes($_POST['hastag']);

						$apdate = mysql_query("UPDATE Twitter SET CONSUMER_KEY='$CONSUMER_KEY', CONSUMER_SECRET='$CONSUMER_SECRET', OAUTH_TOKEN='$OAUTH_TOKEN', OAUTH_TOKEN_SECRET='$OAUTH_TOKEN_SECRET', HASTAG='$HASTAG' WHERE app='twitter'");
					}
				?>
				<form role="form" action="" method="POST">
				<?php
				  $atur = mysql_query("SELECT * FROM Twitter");
				  while ($row = mysql_fetch_array($atur)) { 
				?>
				  
				  <div class="form-group">
				    <label>Kunci Pelanggan</label> 
				    <input type="text" class="form-control" name="KunciPelanggan"
				    placeholder=<?php echo $row['CONSUMER_KEY'];?>>
				  </div>
				  <div class="form-group">
				    <label>Kode Rahasia Pelanggan</label>
				    <input type="text" class="form-control" name="KodeRahasiaPelanggan"
				    placeholder=<?php echo $row['CONSUMER_SECRET'];?>>
				  </div>
				  <div class="form-group">
				    <label>Token untuk Akses</label>
				    <input type="text" class="form-control" name="TokenAkses"
				    placeholder=<?php echo $row['OAUTH_TOKEN'];?>>
				  </div>
				  <div class="form-group">
				    <label>Kode Rahasia Token</label>
				    <input type="text" class="form-control" name="KodeRahasiaToken"
				    placeholder=<?php echo $row['OAUTH_TOKEN_SECRET'];?>>
				  </div>
				  <div class="form-group">
				    <label>Kode Pencarian</label>
				    <input type="text" class="form-control" name="hastag"
				    placeholder=<?php echo $row['HASTAG']; } ?>>
				  </div>
				  <button type="submit" class="btn btn-default">Simpan</button>
				</form>
		  </div>
		  <div role="tabpanel" class="tab-pane" id="email">
        Pengaturan Mail Server
        <form role="form" action="" method="POST">
        <?php
          $mail = mysql_query("SELECT * FROM mailserver");
          while ($row = mysql_fetch_array($mail)) { 
        ?>
          
          <div class="form-group">
            <label>Username Email</label> 
            <input type="text" class="form-control" name="mailusername"
            placeholder=<?php echo $row['username'];?>>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="mailpassword"
            placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">
          </div>
          <div class="form-group">
            <label>Alamat Server Email</label>
            <input type="text" class="form-control" name="servermail"
            placeholder=<?php echo $row['server'];?>>
          </div>
          <div class="form-group">
            <label>Port SMTP</label>
            <input type="text" class="form-control" name="port"
            placeholder=<?php echo $row['port']; } ?>>
          </div>
          <button type="submit" class="btn btn-default">Simpan</button>
        </form>
      </div>
		</div>
		
  </div>


  <div class="tab-pane" id="akun">
  	ganti password
  </div>
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
  <script src="lib/sorttable.js"></script>  

</body>
</html>