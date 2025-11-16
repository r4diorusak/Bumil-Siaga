
<?php
include "config/koneksi.php";
include "config/library.php";
include "config/fungsi_indotgl.php";
include "config/fungsi_combobox.php";
include "config/class_paging.php";
include "config/fungsi_rupiah.php";



$aksi="";
if(isset($_GET['aksi']))
	$aksi=$_GET['aksi'];

// Bagian Home
elseif ($_GET[module]==''){
    include "view/home.php"; 
}

elseif ($_GET[module]=='daftar'){
    include "view/daftar.php"; 
}

elseif ($_GET[module]=='akun'){
    include "view/akun.php"; 
}

elseif ($_GET[module]=='pengaturan'){
    include "view/pengaturan.php"; 
}

elseif ($_GET[module]=='kontak'){
    include "view/kontak.php"; 
}

elseif ($_GET[module]=='tentang'){
    include "view/tentang.php"; 
}

elseif ($_GET[module]=='aktivitas'){
    include "view/aktivitas.php"; 
}

elseif ($_GET[module]=='perawatan'){
    include "view/perawatan.php"; 
}

elseif ($_GET[module]=='bahaya'){
    include "view/bahaya.php"; 
}

elseif ($_GET[module]=='definisi'){
    include "view/edu/definisi.php"; 
}

elseif ($_GET[module]=='macam'){
    include "view/edu/macam.php"; 
}

elseif ($_GET[module]=='masalah'){
    include "view/edu/masalah.php"; 
}

elseif ($_GET[module]=='kriteria'){
    include "view/edu/kriteria.php"; 
}

elseif ($_GET[module]=='p_sehari_hari'){
    include "view/edu/p_sehari_hari.php"; 
}

elseif ($_GET[module]=='hindari_latihan'){
    include "view/edu/hindari_latihan.php"; 
}

elseif ($_GET[module]=='aktivitas_fisik'){
    include "view/edu/aktivitas_fisik.php"; 
}

elseif ($_GET[module]=='hindari_aktivitas'){
    include "view/edu/hindari_aktivitas.php"; 
}


elseif ($_GET[module]=='rumah'){
    include "view/Tetap-dirumah.php"; 
}

elseif ($_GET[module]=='tubuh'){
    include "view/Meningkatkan-imunitas-tubuh.php"; 
}


// Admin
elseif ($_GET[module]=='halaman'){
  if ($_SESSION['leveluser']=='admin'){
    include "view/admin/halaman.php";
  }
}

elseif ($_GET[module]=='dashboard'){
  if ($_SESSION['leveluser']=='admin'){
    include "view/admin/dashboard.php";
  }
}

elseif ($_GET[module]=='detail_halaman'){
  if ($_SESSION['leveluser']=='admin'){
    include "view/admin/detail_halaman.php";
  }
}

elseif ($_GET[module]=='m_akun'){
  if ($_SESSION['leveluser']=='admin'){
    include "view/admin/m_akun.php";
  }
}

elseif ($_GET[module]=='blokir_user'){
  if ($_SESSION['leveluser']=='admin'){
    include "controller/admin/aksi_blokir_user.php";
  }
}

elseif ($_GET[module]=='buka_blokir_user'){
  if ($_SESSION['leveluser']=='admin'){
    include "controller/admin/aksi_buka_blokir_user.php";
  }
}


// Apabila modul tidak ditemukan
else{
   include "view/404.php"; 
}
?>


