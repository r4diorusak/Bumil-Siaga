 <script language="javascript">
function validasi(form){
  if (form.username.value == ""){
    alert("Anda belum mengisikan Username.");
    form.username.focus();
    return (false);
  }
     
  if (form.password.value == ""){
    alert("Anda belum mengisikan Password.");
    form.password.focus();
    return (false);
  }
  return (true);
}
</script>

 <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h2 class="loginModal-section-hdg u-vr4x u-textCenter" tabindex="-1">Log in</h2>
              <button type="button" class="close lg" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
				
				<form name="login" action="cek_login.php" method="POST" onSubmit="return validasi(this)">
                  <div class="form-group">
                    <label>Email address</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                 
               Belum Punya Akun ?<a href="daftar"> <u>Sign Up</u></a>
			   
            </div>
            <div class="modal-footer justify-content-between">
              
              <input type="submit" class="btn btn-success" value="Login">
            </div></form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
	  
	  
      <!-- /.modal -->
	  <div class="modal fade" id="modal-request">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h2 class="loginModal-section-hdg u-vr4x u-textCenter" tabindex="-1"><img src="img/kucing100.png"> Detail Adopt Request</h2>
              <button type="button" class="close lg" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
			
				<p>1. Apakah kamu pernah punya Kucing di rumah ?<br>
				&nbsp;&nbsp;&nbsp;<?php echo $req['peliharaan_dirumah'];?></p>
				<p>2. Makanan apa yang kamu berikan ?<br>
				&nbsp;&nbsp;&nbsp;<?php echo $req['makanan'];?></p>
				<p>3. Dimana letak kandang Kucing di rumahmu ?<br>
				&nbsp;&nbsp;&nbsp;<?php echo $req['tempat_tinggal'];?></p>
				<p>4. Apa alasan kamu untuk mengadopsi kucing ?<br>
				&nbsp;&nbsp;&nbsp;<?php echo $req['alasan'];?></p>
				<p>5. Foto Rumah</p>
				&nbsp;&nbsp;&nbsp;<img src="<?php echo $req['foto_rumah'];?>">
			   
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal >