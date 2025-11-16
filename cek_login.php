<?php
error_reporting(0);
include "config/koneksi.php";

// Input validation and sanitization
$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

// Check if credentials are empty
if (empty($username) || empty($password)) {
    session_start();
    $_SESSION['kesalahan'] = "Oops! Username / Password tidak boleh kosong.";
    header('location:home');
    exit;
}

// Hash password for comparison
$pass_hash = md5($password);

// Use prepared statement to prevent SQL injection
$query = "SELECT * FROM users WHERE username = ? AND password = ? AND status_akun = 'aktif'";
$result = $db->fetch($query, [$username, $pass_hash]);

// Check if user found
if ($result) {
    session_start();
    
    $_SESSION['namauser']    = $result['username'];
    $_SESSION['id_user']     = $result['id_user'];
    $_SESSION['passuser']    = $result['password'];
    $_SESSION['leveluser']   = $result['level'];
    $_SESSION['status_akun'] = $result['status_akun'];
    
    if ($_SESSION['leveluser'] == "admin") {
        header('location:dashboard');
    } elseif ($_SESSION['leveluser'] == "user") {
        header('location:home');
    }
    exit;
} else {
    session_start();
    $_SESSION['kesalahan'] = "Oops! Username / Password Salah.";
    header('location:home');
    exit;
}
?>
