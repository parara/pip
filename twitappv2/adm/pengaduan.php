<?php
include("inc/config.php");
include("utama/header_private.php")
?> 
<h2>Laporan Masuk</h2>
  <table class= "table table-hover sortable">
    <?php
    $tampil = mysql_query("SELECT * FROM lapor");
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
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['tanggal'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['isi'] . "</td>";
      echo "<td>" . $row['id_progres'] . "</td>";
     }
    ?>
  </table>
</div>