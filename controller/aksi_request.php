<?php
session_start();
include "../config/koneksi.php";

try {
    // Validate user session
    if (empty($_SESSION['id_user'])) {
        throw new Exception("User tidak teridentifikasi");
    }
    
    // Validate file upload
    if (empty($_FILES['gambartxt']['tmp_name']) || !is_uploaded_file($_FILES['gambartxt']['tmp_name'])) {
        throw new Exception("File rumah tidak dapat diupload");
    }
    
    // Prepare file data
    $namalengkap = str_replace(' ', '_', $_SESSION['namauser'] . date("Y-m-d H-i-s"));
    $extension = str_replace(' ', '_', $namalengkap . '.' . pathinfo($_FILES["gambartxt"]["name"], PATHINFO_EXTENSION));
    $destinationPath = "../foto/rumah/" . $extension . "_" . $_FILES["gambartxt"]["name"];
    
    // Move uploaded file
    if (!move_uploaded_file($_FILES["gambartxt"]["tmp_name"], $destinationPath)) {
        throw new Exception("Gagal mengupload file");
    }
    
    // Get image dimensions
    list($width, $height) = getimagesize($destinationPath);
    
    // Calculate resize dimensions
    if ($width < 600) {
        $newwidth = $width;
        $newheight = $height;
    } else {
        $newwidth = $width * 0.4;
        $newheight = $height * 0.4;
    }
    
    // Resize image
    $thumb = imagecreatetruecolor($newwidth, $newheight);
    $source = imagecreatefromjpeg($destinationPath);
    imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    imagejpeg($thumb, $destinationPath, 95);
    imagedestroy($source);
    imagedestroy($thumb);
    
    // Set file path
    $lokasi_img = trim("foto/rumah/" . $extension . "_" . $_FILES["gambartxt"]["name"]);
    
    // Prepare data
    $id_kucing = trim($_POST['idtxt'] ?? '');
    $id_user = $_SESSION['id_user'];
    $peliharaan_dirumah = trim($_POST['q1txt'] ?? '');
    $makanan = trim($_POST['q2txt'] ?? '');
    $tempat_tinggal = trim($_POST['q3txt'] ?? '');
    $alasan = trim($_POST['q4txt'] ?? '');
    
    // Validate input
    if (empty($id_kucing) || empty($peliharaan_dirumah) || empty($makanan) || empty($tempat_tinggal) || empty($alasan)) {
        throw new Exception("Data tidak lengkap");
    }
    
    // Insert adoption request using prepared statement
    $query = "INSERT INTO adopt_request 
              (id_kucing, id_user, tanggal, status_request, peliharaan_dirumah, makanan, tempat_tinggal, alasan, foto_rumah)
              VALUES (?, ?, NOW(), 'request', ?, ?, ?, ?, ?)";
    
    $success = $db->execute($query, [
        $id_kucing, $id_user, $peliharaan_dirumah, $makanan, $tempat_tinggal, $alasan, $lokasi_img
    ]);
    
    if ($success) {
        $_SESSION['berhasil'] = "Permintaan Adopsi berhasil dibuat.";
        header('location:../adopt');
    } else {
        $_SESSION['kesalahan'] = "Gagal membuat permintaan adopsi.";
        header('location:../adopt');
    }
} catch(Exception $e) {
    $_SESSION['kesalahan'] = "Error: " . $e->getMessage();
    header('location:../adopt');
}

exit;
?>
