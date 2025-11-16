# Bumil-Siaga: Aplikasi Web Kesehatan Ibu Hamil

![Version](https://img.shields.io/badge/version-2.0-blue)
![License](https://img.shields.io/badge/license-MIT-green)
![PHP](https://img.shields.io/badge/PHP-7.4%2B-purple)

> Aplikasi web modern untuk edukasi, monitoring, dan sokongan kesehatan ibu hamil dengan teknologi PDO dan keamanan data terjamin.

## 📋 Daftar Isi
- [Fitur Utama](#fitur-utama)
- [Persyaratan Sistem](#persyaratan-sistem)
- [Instalasi](#instalasi)
- [Konfigurasi Database](#konfigurasi-database)
- [Struktur Proyek](#struktur-proyek)
- [Penggunaan](#penggunaan)
- [Keamanan](#keamanan)
- [API Referensi](#api-referensi)
- [Troubleshooting](#troubleshooting)
- [Kontribusi](#kontribusi)
- [Lisensi](#lisensi)

## 🎯 Fitur Utama

### Untuk Pengguna
- ✅ **Registrasi & Login Aman** - Autentikasi dengan prepared statements PDO
- ✅ **Manajemen Profil** - Edit data pribadi dengan upload foto profil
- ✅ **Edukasi Kesehatan** - Konten edukatif tentang kehamilan & perawatan
- ✅ **Monitoring Aktivitas** - Track aktivitas harian dan perawatan kesehatan
- ✅ **Sistem Pesan** - Komunikasi antar pengguna
- ✅ **Laporan Masalah** - Fitur report untuk konten yang tidak sesuai
- ✅ **Pengaturan Akun** - Ganti password & manajemen preferensi

### Untuk Admin
- ✅ **Dashboard Admin** - Monitoring sistem keseluruhan
- ✅ **Manajemen Pengguna** - Blokir/unblokir akun user
- ✅ **Manajemen Konten** - Edit halaman & konten edukatif
- ✅ **Kelola Laporan** - Review laporan dari pengguna
- ✅ **Database Management** - Akses penuh ke database dengan PDO

## 💻 Persyaratan Sistem

### Server Requirements
- **PHP**: 7.4 atau lebih tinggi
- **MySQL/MariaDB**: 5.7 atau lebih tinggi
- **Web Server**: Apache dengan mod_rewrite enabled atau Nginx
- **Ekstensi PHP**: PDO, PDO MySQL, GD (untuk image processing)

### Persyaratan Browser
- Chrome, Firefox, Safari, Edge (versi terbaru)
- JavaScript enabled
- Cookie & Session support

### Ruang Disk
- Minimal 100MB untuk instalasi
- 200MB+ untuk media files (foto profil & rumah)

## 🚀 Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/yourusername/bumil-siaga.git
cd bumil-siaga
```

### 2. Setup Database
```bash
# Buka phpmyadmin atau MySQL client
mysql -u root -p
```

### 3. Create Database & Import Schema
```sql
CREATE DATABASE bumilsiaga_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE bumilsiaga_db;

-- Import struktur database Anda
-- CREATE TABLE statements...
```

### 4. Konfigurasi Koneksi Database

Edit file `config/Database.php`:

```php
class Database {
    private $host = "localhost";           // Host database
    private $db_name = "bumilsiaga_db";    // Nama database
    private $username = "root";            // Username MySQL
    private $password = "";                // Password MySQL
```

### 5. Setup Folder Permissions
```bash
# Linux/Mac
chmod 755 foto/
chmod 755 foto/profil/
chmod 755 foto/rumah/
chmod 755 config/
```

### 6. Test Instalasi
Akses aplikasi via: `http://localhost/bumil-siaga/`

## 🔧 Konfigurasi Database

### Struktur Database Utama

#### Tabel: users
```sql
CREATE TABLE users (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    nama_lengkap VARCHAR(150),
    email VARCHAR(100),
    no_hp VARCHAR(15),
    jenis_kelamin ENUM('L', 'P'),
    alamat TEXT,
    kota VARCHAR(50),
    tgl_lahir DATE,
    foto_profil VARCHAR(255),
    level ENUM('user', 'admin') DEFAULT 'user',
    status_akun ENUM('aktif', 'blokir') DEFAULT 'aktif',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

#### Tabel: message
```sql
CREATE TABLE message (
    id_message INT PRIMARY KEY AUTO_INCREMENT,
    id_adopsi INT,
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    pesan TEXT NOT NULL,
    id_adopter INT,
    id_owner INT,
    id_pengirim INT,
    status ENUM('send', 'read') DEFAULT 'send',
    FOREIGN KEY (id_pengirim) REFERENCES users(id_user)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

#### Tabel: report
```sql
CREATE TABLE report (
    id_report INT PRIMARY KEY AUTO_INCREMENT,
    keterangan TEXT NOT NULL,
    id_pelapor INT,
    id_terlapor INT,
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pending', 'reviewed', 'resolved') DEFAULT 'pending',
    FOREIGN KEY (id_pelapor) REFERENCES users(id_user),
    FOREIGN KEY (id_terlapor) REFERENCES users(id_user)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

#### Tabel: adopt_request
```sql
CREATE TABLE adopt_request (
    id_request INT PRIMARY KEY AUTO_INCREMENT,
    id_kucing INT,
    id_user INT,
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status_request ENUM('request', 'accepted', 'rejected') DEFAULT 'request',
    peliharaan_dirumah VARCHAR(255),
    makanan VARCHAR(255),
    tempat_tinggal TEXT,
    alasan TEXT,
    foto_rumah VARCHAR(255),
    FOREIGN KEY (id_user) REFERENCES users(id_user)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

#### Tabel: halaman
```sql
CREATE TABLE halaman (
    no INT PRIMARY KEY AUTO_INCREMENT,
    nama_halaman VARCHAR(100),
    isi LONGTEXT,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

## 📁 Struktur Proyek

```
bumil-siaga/
├── config/
│   ├── Database.php          # Class PDO untuk koneksi database
│   ├── koneksi.php           # Inisialisasi koneksi database
│   ├── library.php           # Function library
│   ├── fungsi_indotgl.php    # Fungsi format tanggal Indonesia
│   ├── fungsi_combobox.php   # Fungsi combo box helper
│   ├── fungsi_rupiah.php     # Fungsi format rupiah
│   ├── class_paging.php      # Class pagination
│   └── db/
│       └── bumilsiaga_db.sql # Database schema
├── controller/
│   ├── aksi_daftar.php       # Register user baru
│   ├── aksi_password.php     # Ganti password
│   ├── aksi_profil.php       # Update profil user
│   ├── aksi_kirim_pesan.php  # Send message
│   ├── aksi_report.php       # Submit report
│   ├── aksi_request.php      # Adoption request
│   ├── test.php
│   └── admin/
│       ├── aksi_blokir.php
│       ├── aksi_blokir_user.php
│       ├── aksi_buka_blokir_user.php
│       └── aksi_halaman.php
├── view/
│   ├── home.php              # Halaman utama
│   ├── daftar.php            # Form registrasi
│   ├── akun.php              # Halaman profil
│   ├── pengaturan.php        # Pengaturan akun
│   ├── aktivitas.php         # Tracking aktivitas
│   ├── perawatan.php         # Info perawatan
│   ├── bahaya.php            # Info tanda bahaya
│   ├── kontak.php            # Halaman kontak
│   ├── edu/
│   │   ├── definisi.php
│   │   ├── macam.php
│   │   ├── masalah.php
│   │   └── ... (konten edukatif lainnya)
│   └── admin/
│       ├── dashboard.php
│       ├── halaman.php
│       └── m_akun.php
├── layout/
│   ├── head.php              # Header layout
│   ├── header.php            # Navigation
│   └── footer.php            # Footer
├── assets/
│   ├── css/                  # Custom stylesheets
│   ├── js/                   # Custom JavaScript
│   └── images/               # Asset images
├── plugins/                  # Plugin eksternal (Bootstrap, DataTables, etc)
├── bower_components/         # Bower dependencies
├── foto/
│   ├── profil/               # User profile photos
│   └── rumah/                # House photos
├── img/                      # Application images
├── index.php                 # Entry point utama
├── cek_login.php             # Login processor
├── logout.php                # Logout processor
├── model.php                 # Router/Model utama
├── modal.php                 # Modal templates
├── modern.css                # Modern stylesheet
├── custome.css               # Custom stylesheet
└── README.md                 # File ini
```

## 🔐 Penggunaan

### Login Pengguna
1. Buka `http://localhost/bumil-siaga/`
2. Klik "Login"
3. Masukkan username dan password
4. Klik "Masuk"

### Register Pengguna Baru
1. Klik "Daftar" di halaman login
2. Isi form dengan data lengkap
3. Pastikan password dan konfirmasi password sama
4. Klik "Daftar"

### Login Admin
```
Username: admin
Password: [lihat di database atau reset]
```

### Mengakses Modul
Navigasi menggunakan URL dengan parameter `module`:
```
http://localhost/bumil-siaga/?module=home
http://localhost/bumil-siaga/?module=akun
http://localhost/bumil-siaga/?module=aktivitas
http://localhost/bumil-siaga/?module=perawatan
```

## 🛡️ Keamanan

### Implementasi Keamanan PDO
Aplikasi menggunakan **Prepared Statements** untuk mencegah SQL Injection:

```php
// ❌ SEBELUM (Vulnerable)
mysql_query("SELECT * FROM users WHERE username='$username'");

// ✅ SESUDAH (Secure)
$query = "SELECT * FROM users WHERE username = ?";
$result = $db->fetch($query, [$username]);
```

### Fitur Keamanan Lainnya
- ✅ **Password Hashing** - MD5 (recommended upgrade to bcrypt/argon2)
- ✅ **Session Management** - Aman dengan session handling
- ✅ **Input Validation** - Trim & validation pada semua input
- ✅ **CSRF Protection** - Session-based (recommended add token)
- ✅ **XSS Prevention** - Output escaping pada views

### Rekomendasi Upgrade Keamanan

#### 1. Upgrade Password Hashing ke bcrypt
```php
// Sekarang
$password = md5($pass1);

// Rekomendasi
$password = password_hash($pass1, PASSWORD_BCRYPT);
$verified = password_verify($pass1, $hashed_password);
```

#### 2. Implementasi CSRF Token
```php
// Di form
<input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

// Di processor
if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("CSRF Token Invalid!");
}
```

#### 3. Implementasi Rate Limiting
Tambahkan pada `cek_login.php` untuk prevent brute force attacks.

#### 4. Content Security Policy Headers
```php
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: DENY");
header("X-XSS-Protection: 1; mode=block");
```

## 🔌 API Referensi

### Class Database

#### Koneksi
```php
require_once 'config/Database.php';
require_once 'config/koneksi.php';

// $db sudah tersedia di koneksi.php
```

#### Fetch All Records
```php
$query = "SELECT * FROM users WHERE status_akun = ?";
$users = $db->fetchAll($query, ['aktif']);

// Returns: [['id_user' => 1, 'username' => 'john', ...], ...]
```

#### Fetch Single Record
```php
$query = "SELECT * FROM users WHERE id_user = ?";
$user = $db->fetch($query, [$id_user]);

// Returns: ['id_user' => 1, 'username' => 'john', ...] atau []
```

#### Execute Query (INSERT, UPDATE, DELETE)
```php
$query = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
$success = $db->execute($query, [$username, $password, $email]);

// Returns: true/false
```

#### Get Last Insert ID
```php
$last_id = $db->lastInsertId();
```

#### Count Rows
```php
$query = "SELECT * FROM users WHERE status_akun = ?";
$count = $db->rowCount($query, ['aktif']);
```

#### Transactions
```php
$db->beginTransaction();
try {
    $db->execute("INSERT INTO ...", [...]);
    $db->execute("UPDATE ...", [...]);
    $db->commit();
} catch (Exception $e) {
    $db->rollback();
    echo "Error: " . $e->getMessage();
}
```

## 🐛 Troubleshooting

### Error: "Could not connect: Connection refused"
**Solusi:**
1. Pastikan MySQL service running: `sudo service mysql start` (Linux)
2. Check database credentials di `config/Database.php`
3. Pastikan database sudah dibuat

### Error: "SQLSTATE[HY000]: General error"
**Solusi:**
1. Check MySQL error logs
2. Verify table structure matches expected schema
3. Check character set compatibility (utf8mb4)

### Error: "Access Denied for user 'root'@'localhost'"
**Solusi:**
1. Update username & password di `config/Database.php`
2. Reset MySQL root password jika lupa
3. Create new database user dengan proper privileges

### Foto tidak upload
**Solusi:**
1. Check folder permissions: `chmod 755 foto/profil/` dan `chmod 755 foto/rumah/`
2. Check PHP GD extension: `php -m | grep gd`
3. Check upload_max_filesize di php.ini
4. Verify file write permissions

### Session tidak berjalan
**Solusi:**
1. Check `session.save_path` di php.ini writable
2. Pastikan `session_start()` dipanggil di awal setiap file
3. Check browser cookie settings

### Login gagal
**Solusi:**
1. Verify username & password di database
2. Check `status_akun` = 'aktif'
3. Check query di `cek_login.php`
4. Verify database connection

## 🤝 Kontribusi

Kami menerima kontribusi! Silakan:

1. Fork repository
2. Buat feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Open Pull Request

## 📝 Changelog

### Version 2.0 (Current)
- ✅ Convert dari mysql_* functions ke PDO
- ✅ Implement prepared statements untuk keamanan
- ✅ Add comprehensive error handling
- ✅ Improve code organization
- ✅ Add input validation
- ✅ Create complete documentation

### Version 1.0
- Initial release dengan mysql_* functions

## 📄 Lisensi

Project ini berlisensi MIT - lihat file [LICENSE](LICENSE) untuk detail.

## 👥 Tim & Kontributor

- **Tim Bumil-Siaga** - Development team
- **Contributors** - Semua yang telah berkontribusi

## 📞 Kontak & Support

- **Issues**: [GitHub Issues](https://github.com/yourusername/bumil-siaga/issues)
- **Email**: support@bumil-siaga.com
- **Website**: https://bumil-siaga.com

## 🙏 Terima Kasih

Terima kasih kepada:
- Bootstrap team untuk framework CSS
- jQuery team untuk library JavaScript
- Semua kontributor open source yang digunakan

---

**⚠️ Catatan Penting:**
- Jangan pernah commit credential sensitif ke repository
- Selalu gunakan environment variables untuk config sensitif
- Regular backup database dan file user
- Update plugin & dependencies secara berkala
- Review security logs secara periodik

Made with ❤️ by Bumil-Siaga Team
