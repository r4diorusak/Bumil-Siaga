<?php
$notif_adopter = mysql_query("SELECT COUNT(status) as notifikasi FROM `message` where status='send' and id_adopter='$_SESSION[id_user]'");
$r=mysql_fetch_array($notif_adopter);

$notif_owner = mysql_query("SELECT COUNT(status) as notifikasi FROM `message` where status='send' and id_owner='$_SESSION[id_user]'");
$rw=mysql_fetch_array($notif_owner);

?>
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->   
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="home" class="navbar-brand">
        <img src="img/bumil.png" alt="AdminLTE Logo" class="brand-image"/>
        <span class="brand-text font-weight-light"></span>
      </a>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
         <li class="nav-item">
            <a href="home" class="nav-link">Home</a>
          </li>
		  <li class="nav-item">
            <a href="kontak" class="nav-link">Kontak</a>
          </li>
          <li class="nav-item">
            <a href="tentang" class="nav-link">Tentang</a>
          </li>
		 
		  <?php
		  
		  if ($_SESSION['leveluser']=="user" and $_SESSION['status_akun']=="aktif"){
		  if($r['notifikasi']==0){$pesan_notif="";
		  }else{
			  $pesan_notif='<span class="badge badge-danger navbar-badge">'.$r['notifikasi'].'</span>';
		  }
		
		  echo'
		 
		  <li class="nav-item">
            <a href="akun" class="nav-link">
              
				Profil
            </a>
          </li>
		  ';
			  
			  }
			  
		
		
	if ($_SESSION['leveluser']=="admin"){
		  
		  echo'
		 
		  <li class="nav-item">
            <a href="dashboard" class="nav-link">
              
				Dashboard 
            </a>
          </li>
		  <li class="nav-item">
            <a href="halaman" class="nav-link">
              
				Pengaturan Halaman 
            </a>
          </li>
		  
		  <li class="nav-item">
            <a href="m_akun" class="nav-link">
             
				Pengaturan Akun
            </a>
          </li>
		  <li class="nav-item">
            <a href="akun" class="nav-link">
              
				Profil
            </a>
          </li>
		  ';
			  
			  }		
		  
if ($_SESSION['namauser']==true ){
		  
		  echo'<li class="nav-item">
				
            <a href="logout.php" class="nav-link" >
			<i class="fas fa-sign-out-alt" style="font-size: 14px;"></i> Log Out</a>
				</li>';
			  
			  }else{
		echo'<li class="nav-item">
            <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-default">
			Login</a>
			</li>
		  ';
			  }
		  ?>
		  <li>
		  </li>
      </ul>
	  
    </div>
  </nav>
  </header>
  <?php
if($_SESSION['kesalahan']==true){
		
echo "<div class='alert alert-warning'>$_SESSION[kesalahan]</div>";
$_SESSION['kesalahan']="";
	}
	
if($_SESSION['berhasil']==true){
		
echo "<div class='alert alert-success'>$_SESSION[berhasil]</div>";

$_SESSION['berhasil']="";
	}
?>	
 
</div>  
 
