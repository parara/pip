<?php
  include('inc/header.php');
?>

<div class="container">
<h2>Pengaturan Twitter</h2>
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

<?php
include('inc/footer.php');
?>