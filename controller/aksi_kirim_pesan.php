<?php
session_start();
include "../config/koneksi.php";

try {
    $id_adopsi = trim($_POST['idtxt'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $id_adopter = trim($_POST['adoptertxt'] ?? '');
    $id_owner = trim($_POST['ownertxt'] ?? '');
    $id_pengirim = $_SESSION['id_user'] ?? '';
    
    // Validate input
    if (empty($id_adopsi) || empty($message) || empty($id_pengirim)) {
        throw new Exception("Data tidak lengkap");
    }
    
    // Insert message using prepared statement
    $query = "INSERT INTO message 
              (id_adopsi, tanggal, pesan, id_adopter, id_owner, id_pengirim, status) 
              VALUES (?, NOW(), ?, ?, ?, ?, 'send')";
    
    $success = $db->execute($query, [
        $id_adopsi, $message, $id_adopter, $id_owner, $id_pengirim
    ]);
    
    if ($success) {
        $_SESSION['berhasil'] = "Pesan berhasil dikirim.";
    } else {
        $_SESSION['kesalahan'] = "Gagal mengirim pesan.";
    }
} catch(Exception $e) {
    $_SESSION['kesalahan'] = "Error: " . $e->getMessage();
}

header('location:../baca_message-' . (isset($_POST['idtxt']) ? $_POST['idtxt'] : ''));
exit;
?>
