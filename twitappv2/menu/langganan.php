<?php
  include('inc/header.php');
?>

<div class="container">
  <h2>Laporan yang Telah Diverifikasi</h2>
    <table class="table table-hover sortable">
    <?php
    $hastag = mysql_query("SELECT HASTAG FROM Twitter")
    $tampil = mysql_query("SELECT * FROM Lapor WHERE Verifikasi='Verifikasi' AND HASTAG=$hastag");
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
      echo "<td>" . $row['Tanggal'] . "</td>";
      echo "<td>" . $row['Name'] . "</td>";
      echo "<td>" . $row['Isi'] . "</td>";
      echo "<td>" . $row['Verifikasi'] . "</td>";
     }
    ?>
    </table>
</div>

<?php
include('inc/footer.php');
?>