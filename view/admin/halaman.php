<br>
<section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body"><h1 class="txt txt_h1 u-vr6x"><i class="fas fa-tools" style="font-size: 40px;"></i> Atur Isi Halaman</h1>
        <?php

    echo "

		 
        <table id='data_message' class='table table-bordered table-striped'>
           <thead align=center><tr><th width=30px>NO</th><th>Halaman</th><th>Perintah</th></tr></thead>"; 
    $tampil=mysql_query("SELECT * FROM halaman");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
		
       echo "<tr align=center><td align=center>$no</td>
             <td>$r[judul] </td>
			
			 <td align=center>
			 <a href='detail_halaman-$r[no].php' ><i class='far fa-edit'></i><span style='color: green;'> Rubah<span></a>
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
