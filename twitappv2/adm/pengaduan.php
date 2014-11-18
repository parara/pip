<?php
include("inc/config.php");
include("utama/header_private.php")
?> 
<h2>Laporan yang Telah Diverifikasi</h2>
  <table class= "table table-hover sortable">
    <thead>
      <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Username</th>
        <th >Isi Laporan</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $query = mysql_query("SELECT * FROM Lapor WHERE Verifikasi='Belum Verifikasi'");
        $i=0;
        while($fetch = mysql_fetch_array($query))
        {
        if($i%2==0) $class = 'even'; else $class = 'odd';
        echo'<tr class="'.$class.'">
              <td>'.$fetch['Id'].'</td>
              <td>'.$fetch['Tanggal'].'</td>
              <td>'.$fetch['Name'].'</td>
              <td>'.$fetch['Isi'].'</td>
              <td><span class= "xedit" id="'.$fetch['Id'].'">'.$fetch['Verifikasi'].'</span></td>
          </tr>';             
        }
        ?>
    </tbody>
  </table>
</div>
  <script src="lib/jquery-1.11.0.js"></script> 
  <script src="lib/bootstrap.js"></script>
  <script src="lib/bootstrap-editable.js" type="text/javascript"></script> 
  <script type="text/javascript">
  jQuery(document).ready(function() {  
          $.fn.editable.defaults.mode = 'popup';
          $('.xedit').editable();   
      $(document).on('click','.editable-submit',function(){
        var x = $(this).closest('td').children('span').attr('id');
        var y = $('.input-sm').val();
        var z = $(this).closest('td').children('span');
        $.ajax({
          url: "menu/process.php?id="+x+"&data="+y,
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