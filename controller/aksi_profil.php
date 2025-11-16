<?php
session_start();
include "../config/koneksi.php";

// Validate user session
if (empty($_SESSION['id_user'])) {
    $_SESSION['kesalahan'] = "User tidak teridentifikasi.";
    header('location:../akun');
    exit;
}

$id_user = $_SESSION['id_user'];
$nama_lengkap = trim($_POST['namatxt'] ?? '');
$no_hp = trim($_POST['notelptxt'] ?? '');
$jenis_kelamin = trim($_POST['kelamintxt'] ?? '');
$alamat = trim($_POST['alamattxt'] ?? '');
$kota = trim($_POST['kotatxt'] ?? '');
$tgl_lahir = trim($_POST['lahirtxt'] ?? '');

try {
    // Check if file is uploaded
    if (empty($_FILES['gambartxt']['tmp_name']) || !is_uploaded_file($_FILES['gambartxt']['tmp_name'])) {
        // Update without photo
        $query = "UPDATE users SET 
                  nama_lengkap = ?, 
                  no_hp = ?, 
                  jenis_kelamin = ?, 
                  alamat = ?, 
                  kota = ?, 
                  tgl_lahir = ? 
                  WHERE id_user = ?";
        
        $success = $db->execute($query, [
            $nama_lengkap, $no_hp, $jenis_kelamin, $alamat, $kota, $tgl_lahir, $id_user
        ]);
        
        if ($success) {
            $_SESSION['berhasil'] = "Profil berhasil dirubah.";
            header('location:../akun');
        } else {
            $_SESSION['kesalahan'] = "Gagal mengubah profil.";
            header('location:../akun');
        }
    } else {
        // Process photo upload
        $namalengkap = str_replace(' ', '_', $_SESSION['namauser'] . date("Y-m-d H-i-s"));
        $extension = str_replace(' ', '_', $namalengkap . '.' . pathinfo($_FILES["gambartxt"]["name"], PATHINFO_EXTENSION));
        $destinationPath = "../foto/profil/" . $extension . "_" . $_FILES["gambartxt"]["name"];
        
        // Move uploaded file
        if (!move_uploaded_file($_FILES["gambartxt"]["tmp_name"], $destinationPath)) {
            throw new Exception("Gagal mengupload file");
        }
        
        // Process image resizing
        if (is_uploaded_file($destinationPath)) {
            list($width, $height) = getimagesize($destinationPath);
            
            $newwidth = $width * 0.4;
            $newheight = $height * 0.4;
            
            $thumb = imagecreatetruecolor($newwidth, $newheight);
            $source = imagecreatefromjpeg($destinationPath);
            
            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagejpeg($thumb, $destinationPath, 95);
            imagedestroy($source);
            imagedestroy($thumb);
        }
        
        $lokasi_img = trim("foto/profil/" . $extension . "_" . $_FILES["gambartxt"]["name"]);
        
        // Update with photo
        $query = "UPDATE users SET 
                  nama_lengkap = ?, 
                  no_hp = ?, 
                  jenis_kelamin = ?, 
                  alamat = ?, 
                  kota = ?, 
                  tgl_lahir = ?, 
                  foto_profil = ? 
                  WHERE id_user = ?";
        
        $success = $db->execute($query, [
            $nama_lengkap, $no_hp, $jenis_kelamin, $alamat, $kota, $tgl_lahir, $lokasi_img, $id_user
        ]);
        
        if ($success) {
            $_SESSION['berhasil'] = "Profil berhasil dirubah.";
            header('location:../akun');
        } else {
            $_SESSION['kesalahan'] = "Gagal mengubah profil.";
            header('location:../akun');
        }
    }
} catch(Exception $e) {
    $_SESSION['kesalahan'] = "Error: " . $e->getMessage();
    header('location:../akun');
}

exit;
?>
