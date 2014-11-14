<?php
  include('inc/header.php');
?>
<div class="container">
  <h2>Laporan Hasil Crawling</h2>
    <table class="table table-hover sortable">
    <?php
    /*$cari = mysql_query("SELECT HASTAG FROM Twitter");
    while ($kata = mysql_fetch_array($cari)) {
      $hastag = $kata['HASTAG'];
    }
    echo $hastag;*/
    $tampil = mysql_query("SELECT * FROM Lapor WHERE Verifikasi='Belum Verifikasi'");
    $i=0;
    echo
    "<tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Username</th>
          <th>Isi Laporan</th>
          <th>Status</th>
      </tr>";
    while ($row = mysql_fetch_array($tampil)) {
      if($i%2==0) $class = 'even'; else $class = 'odd';
      echo'<tr class="'.$class.'">
            <td>'.$row['Id'].'</td>
            <td>'.$row['Tanggal'].'</td>
            <td>'.$row['Name'].'</td>
            <td>'.$row['Isi'].'</td>
            <td><span class= "xedit" id="'.$row['Id'].'">'.$row['Verifikasi'].'</span></td>
        </tr>';             
     }
    ?>
    </table>
</div>
  <script type="text/javascript">
  jQuery(document).ready(function() {  
          $.fn.editable.defaults.mode = 'popup';
          $('.xedit').editable();   
      $(document).on('click','.editable-submit',function(){
        var x = $(this).closest('td').children('span').attr('id');
        var y = $('.input-sm').val();
        var z = $(this).closest('td').children('span');
        $.ajax({
          url: "process.php?id="+x+"&data="+y,
          type: 'GET',
          success: function(s){
            if(s == 'status'){
            $(z).html(y);}
            if(s == 'error') {
            alert('Error Processing your Request!');}
          },
          error: function(e){
            alert('Error Processing your Request!!');
          }
        });
      });
  });
  </script>

<?php
include('inc/footer.php');
?>