<?php
session_start();
include "../config/koneksi.php";

try {
    $keterangan = trim($_POST['reporttxt'] ?? '');
    $id_pelapor = trim($_POST['pelaportxt'] ?? '');
    $id_terlapor = trim($_POST['terlaportxt'] ?? '');
    
    // Validate input
    if (empty($keterangan) || empty($id_pelapor) || empty($id_terlapor)) {
        throw new Exception("Data tidak lengkap");
    }
    
    // Insert report using prepared statement
    $query = "INSERT INTO report (keterangan, id_pelapor, id_terlapor) 
              VALUES (?, ?, ?)";
    
    $success = $db->execute($query, [
        $keterangan, $id_pelapor, $id_terlapor
    ]);
    
    if ($success) {
        $_SESSION['berhasil'] = "Laporan berhasil dibuat.";
    } else {
        $_SESSION['kesalahan'] = "Gagal membuat laporan.";
    }
} catch(Exception $e) {
    $_SESSION['kesalahan'] = "Error: " . $e->getMessage();
}

header('location:../cari');
exit;
?>
