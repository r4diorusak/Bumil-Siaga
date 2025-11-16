<?php
session_start();
error_reporting(0);
date_default_timezone_set("Asia/Bangkok");
include "config/koneksi.php";
session_start();

if ($_SESSION['status_akun']=="blokir"){
	 $_SESSION['namauser']="";
	 session_destroy();
	  $_SESSION['kesalahan']       = "Akun anda sedang di Blokir! Hubungi admin untuk info lebih lanjut.";
}

require_once "layout/head.php"; 
require_once "layout/header.php"; 
 ?>

 <div class="wrapper">
       
		
          <div class="content-wrapper">
	
			<?php require_once "model.php"; ?>								
		
		   </div>
 </div>	
<?php require "modal.php"; ?>			


<?php require_once "layout/footer.php"; ?>