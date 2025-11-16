<?php 
session_start();

$res = mysql_query("SELECT * from users where id_user=$_SESSION[id_user]");
$row=mysql_fetch_array($res);

?>

<style>
.fieldset {
    display: block;
}
</style>

<div class="tier tier_flush@maxLg m-tier_padTop">
    <div class="card u-vr6x">
        <div class="card-section">
            <div class="profileHdr">
    <h1 class="txt txt_h1 u-vr6x">Profil</h1>
    <div class="u-vr7x">
       
              <div class="u-isHidden@maxMd" aria-label="My Petfinder Menu">
                <ul data-menu-item="secondary-menu-profile-root" class="nav">
                    <li data-menu-item="secondary-menu-profile-profile" class=""><a href="akun" class="tabs-itemLink">                    
                        Profil</a></li>
                    <li data-menu-item="secondary-menu-profile-account-settings" class="u-isHidden@maxMd tabs-item_isActive first"><a href="pengaturan" class="tabs-itemLink">                    
                        Pengaturan</a></li>                      
				</ul>

            </div>
    </div>
</div>
            
            

            <span class="txt m-txt_heavy m-txt_uppercase m-txt_block u-vr6x">Email</span>
            <div class="grid grid_gutter">
                <div class="grid-col grid-col_1/2@minMd">
                                        <div class="js-changeEmail u-vr6x " data-toggler-class="u-isVisuallyHidden">
                        <span class="txt u-hr12x"><?php echo $row['email'];?></span>
                        
                    </div>
                </div>
            </div>

        

                            
		<form method="POST" enctype="multipart/form-data" action="controller/aksi_password.php">
                <fieldset>
                    <legend class="txt m-txt_heavy m-txt_uppercase m-txt_block u-vr6x">Rubah Password</legend>
                    <div class="grid">
                        <div class="grid-col grid-col_1/2@minMd">
                            <div class="vrArray m-vrArray_4x">
                                  <div class="grid-col grid-col_2 @minMd">
                                            <pfdc-input class="field">
                                              <label class="field-label label" for="user_extended_profile_profile_address_address2">Password Baru</label>
                                                        <input type="password" name="pass1" class="field-input js-aboutMeForm-inputProfile" required>
                                            </pfdc-input>
                                            
                                        </div>
									<div class="grid-col grid-col_2 @minMd">
                                            <pfdc-input class="field">
                                              <label class="field-label label" for="user_extended_profile_profile_address_address2">Ulangi Password</label>
                                                        <input type="password" name="pass2" class="field-input form-control" required>
                                            </pfdc-input>
                                            
                                        </div>
                                <div>
                                    <button type="submit" id="password_change_submit" class="btnx m-btn_full" onclick="purinaTrackEvent({eventCategory:'account settings',eventAction:'change password'})">
                                        Rubah Password
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>      
        </div>
    </div>
</form>