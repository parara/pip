<?php
include ("utama/header_.php");
?>
<div id="content">
  <div id="wrap">
  <h3>Pengaturan Surel</h3>
    <?php 
      // save
      // how if it no clue
      //include('inc/config.php');
      if($_SERVER["REQUEST_METHOD"] == "POST") {
        $mailusername=addslashes($_POST['mailusername']);
        $mailpassword=addslashes($_POST['mailpassword']);
        $servermail=addslashes($_POST['servermail']);
        $port=addslashes($_POST['port']);

        $apdate_mail = mysql_query("UPDATE mailserver SET username='$mailusername', password='$mailpassword', server='$servermail', port='$port' WHERE app='twitter'");
      }
    ?>
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
        placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
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
<?php
include ("utama/footer.php");
?>