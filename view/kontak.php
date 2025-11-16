<?php 
session_start();
$res = mysql_query("SELECT * from halaman where judul='Kontak'");
$row=mysql_fetch_array($res);

?>


<div class="tier tier_flush@maxLg m-tier_padTop">
        <div class="card u-vr6x">
            <div class="card-section">
                <div class="profileHdr">
    <h1 class="txt txt_h1 u-vr6x">Kontak</h1>
    
</div>

                                    
    
                        <div class="js-relatedInputs-countryState">
                            <fieldset id="About_Me_Basic" class="u-vr6x js-aboutMeForm-section js-autosaveIndicator">
                               <hr>
									<p><?php echo $row['isi'];?></p>

                            </fieldset>

                            

                            
                        </div>

                   

                
            </div>
        </div>
    </div>