<br>
<section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body"><h1 class="txt txt_h1 u-vr6x"><i class="fas fa-tools" style="font-size: 40px;"></i> Manage Akun</h1>
        <?php

    echo "

		 
        <table id='data_message' class='table table-bordered table-striped'>
           <thead align=center><tr><th width=30px>NO</th><th>User</th><th>Status Akun</th><th>Perintah</th></tr></thead>"; 
    $tampil=mysql_query("SELECT * FROM users where level NOT IN('admin')");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
		
       echo "<tr align=center><td align=center>$no</td>
             <td>$r[username] </td>
			<td>$r[status_akun] </td>
			 <td align=center>
			 <a href='blokir_user-$r[id_user].php' ><i class='fas fa-ban'></i><span style='color: green;'> Blokir<span></a> |
			 <a href='buka_blokir_user-$r[id_user].php' ><i class='fas fa-check'></i><span style='color: green;'> Buka Blokir<span></a>
			 </td>						 
             </tr>";
      $no++;
    }
    echo "</table>";
  

?>

	
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
