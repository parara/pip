<?php
  include("inc/config.php");
  include('utama/header_.php');
?>
 <div id="content">
  <div id="wrap">

<h2>Laporan sedang dalam Pembahasan</h2>
  <pre>
  Nilai Proses:
  0: Belum Verifikasi
  1: Verifikasi
  2: Pengecekan Lapangan/Berkas
  3: Pembahasan
  4: Telah Dijawab</pre>
  <table class="testgrid">
  <thead>
    <tr>
      <th colspan="1" rowspan="1" style="text-align: center;width: 90px;" tabindex="0">Name</th>
      <th colspan="1" rowspan="1" style="text-align: center;width: 90px;" tabindex="0">Tanggal</th>
      <th colspan="1" rowspan="1" style="text-align: center;width: 288px;" tabindex="0">Status</th>
      <th colspan="1" rowspan="1" style="text-align: center;width: 288px;" tabindex="0">Jawaban</th>
      <th colspan="1" rowspan="1" style="text-align: center;width: 20px;" tabindex="0">Progress</th>
      <th colspan="1" rowspan="1" style="text-align: center;width: 90px;" tabindex="0">Petugas</th>
    </tr>
  </thead>

  <tbody>
    <?php
      $query = mysql_query("select * from lapor WHERE id_progres='3'");
      $i=0;
      while($fetch = mysql_fetch_array($query)){
        if($i%2==0)
          $class = 'even';
        else
          $class = 'odd';
        echo'<tr class="'.$class.'">
        <td>'.$fetch['name'].'</td>
        <td>'.$fetch['tanggal'].'</td>
        <td>'.$fetch['isi'].'</td>
        <td><span class= "xedit" id="'.$fetch['id'].'">'.$fetch['komentar'].'</span></td>
        <td><span class= "xedit" id="'.$fetch['id'].'">'.$fetch['id_progres'].'</span></td>
        <td>'.$fetch['editor'].'</td>
        </tr>';             
      }
    ?>
    </tbody>
</table>

  </div>
</div>

  <script src="js/jquery-1.11.1.min.js"></script> 
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-editable.js" type="text/javascript"></script> 
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
    </div>
</body>
<div id="footer">
      <span style="font-family: 'Arial'; color: #FFF">Copyright ©2014  v 1.0.0</span>
  </div>
</html>