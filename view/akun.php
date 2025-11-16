<?php 
session_start();

$res = mysql_query("SELECT * from users where id_user=$_SESSION[id_user]");
$row=mysql_fetch_array($res);

?>

<div class="tier tier_flush@maxLg m-tier_padTop">
        <div class="card u-vr6x">
            <div class="card-section">
                <div class="profileHdr">
    <h1 class="txt txt_h1 u-vr6x">Profil</h1>
    <div class="u-vr7x">
       
             <div class="u-isHidden@maxMd" aria-label="My Petfinder Menu">
                <ul data-menu-item="secondary-menu-profile-root" class="nav">
                    <li data-menu-item="secondary-menu-profile-profile" class="tabs-item_isActive first"><a href="akun" class="tabs-itemLink">                    
                        Profil</a></li>
                    <li data-menu-item="secondary-menu-profile-account-settings" class="u-isHidden@maxMd "><a href="pengaturan" class="tabs-itemLink">                    
                        Pengaturan</a></li>                      
				</ul>

            </div>
        
    </div>
</div>
                <pfdc-form sub-components="" no-ajax="">
                                    
   <form method="POST" enctype="multipart/form-data" action="controller/aksi_profil.php">
                        <div class="js-relatedInputs-countryState">
                           
								<div class="image">
									<img src="<?php echo $row['foto_profil'];?>" class="img" alt="User Image">
								</div><br><span>Jenis Akun :</span><span style="text-transform: uppercase;"> <?php echo $row['level'];?></span>
                                <div class="">

                                        <label>Foto Profil</label>
                                         <input type="file" accept="image/jpeg" class="form-control" name="gambartxt">
								</div><br>
							
							<fieldset id="About_Me_Basic" class="u-vr6x js-aboutMeForm-section js-autosaveIndicator">	
                                <div class="grid grid_gutter">
									
                                    <div class="grid-col grid-col_1/2@minMd">
                                        <pfdc-input class="field">
                                            <label id="user_extended_profile[profile][firstName]_label" class="field-label label" for="user_extended_profile_profile_firstName">Nama Lengkap</label>                                                        
                                                    <input type="text" name="namatxt" class="field-input js-aboutMeForm-inputProfile" pf-input-input="" value="<?php echo $row['nama_lengkap']; ?>" required>
                                        </pfdc-input>
                                       
                                    </div>
                                    <div class="grid-col grid-col_1/2@minMd">
                                        <pfdc-input class="field">
                                        <label id="user_extended_profile[profile][primaryPhone]_label" class="field-label label" for="user_extended_profile_profile_primaryPhone">Tanggal Lahir</label>
                                         <input type="date" name="lahirtxt" class="field-input js-aboutMeForm-inputProfile js-aboutMeEnsightenAnalytics-inputPhone" pf-input-input="" value="<?php echo $row['tgl_lahir']; ?>" required>
                                        </pfdc-input>
                                       
										</div>
                                </div>
                            </fieldset>

                            <fieldset id="About_Me_Contact" class="u-vr6x js-aboutMeForm-section js-autosaveIndicator">
                                

                                <div class="grid grid_gutter">
                                    <div class="grid-col grid-col_1/2@minMd">
                                        <pfdc-input class="field">
                                        <label id="user_extended_profile[profile][primaryPhone]_label" class="field-label label" for="user_extended_profile_profile_primaryPhone">Jenis Kelamin</label>
                                         <input type="text" name="kelamintxt" class="field-input js-aboutMeForm-inputProfile js-aboutMeEnsightenAnalytics-inputPhone" value="<?php echo $row['jenis_kelamin']; ?>" required>
                                        </pfdc-input>
                                       
                                    </div>
									<div class="grid-col grid-col_1/2@minMd">
                                        <pfdc-input class="field">
                                        <label id="user_extended_profile[profile][primaryPhone]_label" class="field-label label" for="user_extended_profile_profile_primaryPhone">Nomor Telepon</label>
                                         <input type="text" name="notelptxt" class="field-input js-aboutMeForm-inputProfile js-aboutMeEnsightenAnalytics-inputPhone" pf-input-input="" value="<?php echo $row['no_hp']; ?>" required>
                                        </pfdc-input>
                                       
                                    </div>
                                </div>
                            </fieldset>
<br>
                            <pfdc-address event-id="about-you">
                                <fieldset id="About_Me_Location" class="u-vr6x js-aboutMeForm-section js-autosaveIndicator">
                                   

                                    <div class="grid grid_gutter js-countryStateZipLabelSwitcher">

                                        <div class="grid-col grid-col_1/2@minMd">
                                            
                                              <label class="label">Alamat Lengkap</label>
                                                
												<textarea class="form-control" rows="3" name="alamattxt" required><?php echo $row['alamat']; ?></textarea>
                                            
                                           
                                        </div>
										<div class="grid-col grid-col_1/2@minMd">
                                           
                                             <label class="label">Kota (Nama Kota)</label>
                                               <input type="text" name="kotatxt" class="form-control" value="<?php echo $row['kota']; ?>" required>
                                           
                                           
                                        </div>
                                                                                 
                                        </div>
										
                                    </div><div class="box-footer">
											<button type="submit" class="btn btn-primary pull-right">Rubah</button>
										</div></form>
                                </fieldset>
                            </pfdc-address>
              
            </div>
        </div>
    </div>