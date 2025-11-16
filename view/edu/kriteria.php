<?php 
session_start();
$res = mysql_query("SELECT * from halaman where judul='Kriteria Klinis COVID-19'");
$row=mysql_fetch_array($res);

?>
<div class="tier m-tier_padTop">
        <div class="card">
            <div class="card-section">
                <div class="profileHdr">
    <h3 class="txt txt_h1 u-vr6x"><a class="btn" href="javascript:history.back()"><img src="https://icons.iconarchive.com/icons/icons8/windows-8/128/Arrows-Undo-icon.png" width="30px" alt="back"></a>
	<?php print $row['judul'];?></h3>
    <hr>
</div>
								<div class="box-body">

									<?php print $row['isi'];?>
                                </div>           
            </div>
        </div>
    </div>