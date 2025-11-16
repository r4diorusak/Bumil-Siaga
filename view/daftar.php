<style>
.daftar {
	margin-left: 60px;
	
	;
}

.field-input{
	
	padding: 0px;
}
.judul{
	font-weight: bold;
	font-size: 32px;
}
</style>
<div class="section-title">
        <div class="card u-vr6x">
            <div class="card-section">
                <div class="profileHdr">
    <h1 class="daftar judul">Mendaftar</h1>
    <hr>
</div>

                                    
   <form method="POST" enctype="multipart/form-data" action="controller/aksi_daftar.php">
   
						
                        <div class="contact-form">
							<div class="daftar">

									<div class="form-group">										
										<input type="text" class="field-input" name="namatxt" placeholder="Nama Lengkap" required>
									</div>
									
									<div class="form-group">										
										<input type="email" class="field-input" name="emailtxt" placeholder="Email" required>
									</div>
									<div class="form-group">
									<input type="password" class="field-input" name="pass1txt"  placeholder="Password" required>
									</div>
									<div class="form-group">
									<input type="password" class="field-input"  name="pass2txt" placeholder="Ulangi Password" required>
									</div>									
									<div class="form-group">
									<input type="text" class="field-input" name="nohptxt" placeholder="No Handphone" required>
									</div>
									<div class="form-group">
										<label>Jenis Kelamin</label>
										<select class="form-control" name="kelamintxt" required>
										  <option value="">Pilih </option>
										  <option value="laki-laki">Laki-Laki</option>
										  <option value="perempuan">Perempuan</option>
										</select>
									  </div>
									<div class="form-group">										
										<input type="date" class="field-input" name="tanggaltxt" placeholder="Tanggal Lahir" required>
									</div>
									<div class="form-group">
									<input type="text" class="field-input"  name="kotatxt" placeholder="Nama Kota misal Medan, Bandung, Jakarta etc" required>
									</div>
									
									<div class="form-group">
										<label>Alamat</label>
										<textarea class="form-control" rows="3" placeholder="Alamat" name="alamattxt" required></textarea>
									  </div>
									
									

                            </fieldset>

                            

                            <button type="submit" id="about_you_submit" class="main-button" >Mendaftar</button>
                        

                        </form>
             
					</div>
                
            </div>
        </div>
    </div>