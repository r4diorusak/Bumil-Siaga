<?php 
//session_start();
//$res = mysql_query("SELECT * from halaman where judul='layanan'");
//$row=mysql_fetch_array($res);

?>
<div class="tier m-tier_padTop">
        <div class="card">
            <div class="card-section">
                <div class="profileHdr">
    <h3 class="txt txt_h1 u-vr6x">Aktivitas fisik dan Latihan Fisik Ibu Hamil
</h3>
    <hr>
</div>
								<div class="box-body">
								<div class="row">
        <div class="col-md-6"><a href="aktivitas_fisik">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><img src="https://icons.iconarchive.com/icons/icons-land/sport/128/Gymnastics-icon.png"></span>

            <div class="info-box-content">
              <span class="info-box-text">Aktivitas fisik dan latihan fisik</span>
            
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6"><a href="hindari_aktivitas">
          <div class="info-box">
            <span class="info-box-icon bg-red"><img src="https://icons.iconarchive.com/icons/google/noto-emoji-people-bodyparts/128/11997-raised-hand-light-skin-tone-icon.png"></span>

            <div class="info-box-content">
              <span class="info-box-text">Aktivitas dan Latihan Fisik <br>Yang Harus Ibu Hamil Hindari</span>
             
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        
        <!-- /.col -->
      </div>
									<?php print $row['isi'];?>
                                </div>           
            </div>
        </div>
    </div>