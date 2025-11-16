<?php
session_start();
include "config/koneksi.php";

try {
    $id_user = trim($_GET['id'] ?? '');
    
    if (empty($id_user)) {
        throw new Exception("ID User tidak ditemukan");
    }
    
    $query = "UPDATE users SET status_akun = 'blokir' WHERE id_user = ?";
    $success = $db->execute($query, [$id_user]);
    
    if ($success) {
        $_SESSION['berhasil'] = "User telah diblokir.";
    } else {
        $_SESSION['kesalahan'] = "Gagal memblokir user.";
    }
} catch(Exception $e) {
    $_SESSION['kesalahan'] = "Error: " . $e->getMessage();
}

header('location:m_akun');
exit;
?>
