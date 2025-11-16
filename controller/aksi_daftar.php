<?php
session_start();
include "../config/koneksi.php";

// Validate input
$pass1 = trim($_POST['pass1txt'] ?? '');
$pass2 = trim($_POST['pass2txt'] ?? '');

if ($pass1 == $pass2 && !empty($pass1)) {
    try {
        // Prepare data
        $email = trim($_POST['emailtxt'] ?? '');
        $password = md5($pass1);
        $nama_lengkap = trim($_POST['namatxt'] ?? '');
        $no_hp = trim($_POST['nohptxt'] ?? '');
        $jenis_kelamin = trim($_POST['kelamintxt'] ?? '');
        $alamat = trim($_POST['alamattxt'] ?? '');
        $kota = trim($_POST['kotatxt'] ?? '');
        $tgl_lahir = trim($_POST['tanggaltxt'] ?? '');
        
        // Insert using prepared statement
        $query = "INSERT INTO users 
                  (username, password, nama_lengkap, status_akun, email, no_hp, jenis_kelamin, alamat, kota, tgl_lahir, level) 
                  VALUES (?, ?, ?, 'aktif', ?, ?, ?, ?, ?, ?, 'user')";
        
        $success = $db->execute($query, [
            $email, $password, $nama_lengkap, $email, $no_hp, $jenis_kelamin, $alamat, $kota, $tgl_lahir
        ]);
        
        if ($success) {
            $_SESSION['berhasil'] = "Akun berhasil dibuat silahkan login.";
            header('location:../home');
        } else {
            $_SESSION['kesalahan'] = "Gagal membuat akun. Coba lagi.";
            header('location:../daftar');
        }
    } catch(Exception $e) {
        $_SESSION['kesalahan'] = "Error: " . $e->getMessage();
        header('location:../daftar');
    }
} else {
    $_SESSION['kesalahan'] = "Password dan Ulangi Password tidak sama ulangi lagi!";
    header('location:../daftar');
}

exit;
?>
