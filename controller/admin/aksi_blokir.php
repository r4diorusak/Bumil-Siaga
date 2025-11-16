<?php
session_start();
include "../../config/koneksi.php";

try {
    $no_halaman = trim($_POST['no_halamantxt'] ?? '');
    $isi = trim($_POST['isitxt'] ?? '');
    
    if (empty($no_halaman) || empty($isi)) {
        throw new Exception("Data tidak lengkap");
    }
    
    $query = "UPDATE halaman SET isi = ? WHERE no = ?";
    $success = $db->execute($query, [$isi, $no_halaman]);
    
    if ($success) {
        $_SESSION['berhasil'] = "Halaman berhasil dirubah.";
    } else {
        $_SESSION['kesalahan'] = "Gagal mengubah halaman.";
    }
} catch(Exception $e) {
    $_SESSION['kesalahan'] = "Error: " . $e->getMessage();
}

header('location:../../halaman');
exit;
?>
