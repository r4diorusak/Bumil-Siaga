<?php
session_start();
include "../config/koneksi.php";

// Validate user session
if (empty($_SESSION['id_user'])) {
    $_SESSION['kesalahan'] = "User tidak teridentifikasi.";
    header('location:../pengaturan');
    exit;
}

// Get user ID from session
$id_user = $_SESSION['id_user'];

// Validate input
$pass1 = trim($_POST['pass1'] ?? '');
$pass2 = trim($_POST['pass2'] ?? '');

if (empty($pass1) || empty($pass2)) {
    $_SESSION['kesalahan'] = "Anda harus mengisikan semua data pada form Ganti Password.";
    header('location:../pengaturan');
    exit;
}

if ($pass1 == $pass2) {
    try {
        // Hash new password
        $pass_baru = md5($pass1);
        
        // Update password using prepared statement
        $query = "UPDATE users SET password = ? WHERE id_user = ?";
        $success = $db->execute($query, [$pass_baru, $id_user]);
        
        if ($success) {
            $_SESSION['berhasil'] = "Password berhasil dirubah.";
            header('location:../pengaturan');
        } else {
            $_SESSION['kesalahan'] = "Gagal mengubah password.";
            header('location:../pengaturan');
        }
    } catch(Exception $e) {
        $_SESSION['kesalahan'] = "Error: " . $e->getMessage();
        header('location:../pengaturan');
    }
} else {
    $_SESSION['kesalahan'] = "Password baru yang Anda masukkan sebanyak dua kali belum cocok.";
    header('location:../pengaturan');
}

exit;
?>
