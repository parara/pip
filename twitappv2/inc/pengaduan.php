<div class="tab-pane" id="pengaduan">
	<h2>Laporan yang telah masuk</h2>
	list table
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <table class="table table-hover sortable">
    <?php
    $tampil = mysql_query("SELECT * FROM Lapor");
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