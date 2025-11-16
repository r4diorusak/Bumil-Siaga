<?php
 $xx=mysql_query("SELECT count(id_laporan) as jml FROM report");
 $r1=mysql_fetch_array($xx);

  $xuser=mysql_query("SELECT count(id_user) as jml FROM users where level='user'");
  $r2=mysql_fetch_array($xuser);
?>

<br>
<section class="content">
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Pengaturan</h3>

              <p>Halaman</p>
            </div>
            <div class="icon">
              <i class="fa fa-file"></i>
            </div>
            <a href="halaman" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?php echo $r2['jml']; ?></h3>

              <p>User Terdaftar</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="m_akun" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       
        <!-- ./col -->
      </div>











      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body"><h1 class="txt txt_h1 u-vr6x"><i class="fa fa-users" style="font-size: 40px;"></i> User Terdaftar</h1>
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
