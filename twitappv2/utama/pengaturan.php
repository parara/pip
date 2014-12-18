<?php
include ("utama/header_.php");
?>
<div id="content">
  <div id="wrap">
  <h3>Pengaturan Twitter</h3>
    <?php 
      // save
      // how if it no clue
      //include('inc/config.php');
      if($_SERVER["REQUEST_METHOD"] == "POST") {
        $HASTAG=addslashes($_POST['hastag']);

        $apdate = mysql_query("UPDATE twitter SET HASTAG='$HASTAG' WHERE app='twitter'");
      }
    ?>
    <form role="form" action="" method="POST">
    <?php
      $atur = mysql_query("SELECT * FROM twitter");
      while ($row = mysql_fetch_array($atur)) { 
        $hastag = $row['HASTAG'];
      }
    ?>
      <div class="form-group">
        <label>Hastag Pencarian</label>
        <input type="text" class="form-control" name="hastag" placeholder="<?php echo $hastag; ?>">
      </div>
      <button type="submit" class="btn btn-default">Simpan</button>
    </form>
  </div>
</div>
<?php
include ("utama/footer.php");
?>