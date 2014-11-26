<?php
  include('utama/header_private.php');
?>
  <h2>Laporan Verifikasi</h2>
    <table class="table table-hover sortable">
    <?php
    $tampil = mysql_query("SELECT * FROM lapor WHERE id_progres='1'");
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
      if($row['id_progres']=='1') {
        $status = "Verifikasi";
      }else if ($row['id_progres']=='2') {
        $status = "Pengecekan Lapangan";
      }else if ($row['id_progres']=='3') {
        $status = "Pembahasan";
      }else if ($row['id_progres']=='4') {
        $status = "Jawaban";
      }else {
        $status = "Belum Verifikasi";}
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['tanggal'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['isi'] . "</td>";
      echo "<td>" . $status . "</td>";
     }
    ?>
    </table>
</div>
<?php
  include ("utama/footer.php");
?>