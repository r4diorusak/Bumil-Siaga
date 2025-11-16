-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2021 pada 05.02
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bumil_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `no` int(11) NOT NULL,
  `judul` varchar(55) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`no`, `judul`, `isi`) VALUES
(3, 'covid-19', '<h2><strong>Defenisi COVID-19</strong></h2>\r\n\r\n<p><em>Coronavirus Disease 2019 </em>(COVID-19) merupakan penyakit yang menyerang sistem pernafasan manusiayang disebabkan oleh jenis coronavirus yang baru ditemukan. Coronavirus adalah salah satu dari kelompok virus&nbsp; yang dapat menyebabkan penyakit mulai dari flu biasa hingga yang serius seperti <em>Severe Acute Respiratory Syndrome</em> (SARS) dan<em>Middle East Respiratory Syndrome</em>(MERS)</p>\r\n\r\n<p><img alt=\"sumber : (bipoin.com, n.d.)\" src=\"https://rainbowcodec.com/webdisk/Image/bumil/covid19.jpg\" style=\"height:441px; width:824px\" /><br />\r\nsumber : (bipoin.com, n.d.)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Penyebab COVID-19</strong></h2>\r\n\r\n<p>COVID-19 disebabkan oleh SARS-CoV-2, yaitu virus jenis baru dari&nbsp;<em>Coronavirus</em>&nbsp;</p>\r\n\r\n<p><img alt=\"sumber : (ayosemarang.com, n.d.)\" src=\"https://rainbowcodec.com/webdisk/Image/bumil/covid192.jpg\" style=\"height:398px; width:732px\" /><br />\r\nsumber : (ayosemarang.com, n.d.)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Gejala COVID-19 </strong></h2>\r\n\r\n<p>Tanda gejala umum dari infeksi COVID-19 anatara lain adanya gangguan pernafasan akut seperti demam&gt; 38oC/ riwayat demam dan batuk, serta gejala yang berat seperti sesak nafas dan nafas cepat. Dapat disertai juga gejala tidak spesifik lainnya yaitu, sakit tenggorokan, sakit kepala, diare, mual dan muntah, kehilangan pembau atau perasa, merasa lelah, tidak nafsu makan dan nyeri otot secara tiba-tiba tanpa ada penyebab yang jelas.</p>\r\n\r\n<p><img alt=\"\" src=\"https://rainbowcodec.com/webdisk/Image/bumil/covid193.jpg\" style=\"height:671px; width:671px\" /><br />\r\nsumber : (elshinta.com, n.d.)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Prevalensi COVID-19 </strong></h2>\r\n\r\n<p>Berdasarkan data WHO pada tanggal 05 November 2020, tercatat dari 216 negara di dunia ada 47,930,397orang&nbsp; yang terinfeksi COVID-19 dan 1,221,781 orang meninggal dunia. Sedangkan provinsi Sumatera Utara pada 17 febuari 2021 ada 23.108 kasus COVID-19 dan 789 orang meninggal dunia.</p>\r\n\r\n<p><img alt=\"\" src=\"https://rainbowcodec.com/webdisk/Image/bumil/covid194.jpg\" style=\"height:365px; width:588px\" /><br />\r\nsumber : (www.jambione.com, n.d.)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Cara penularan COVID-19 </strong></h2>\r\n\r\n<p>COVID-19 dapat menular dari manusia ke manusia, khususnya invidu yang memiliki kontak erat dengan orang yang terinfeksi baik itu anggota keluarga, kerabat dan teman-teman. Penularan dapat melalui berbagai cara seperti, melalui udara atau <em>aerosol</em>yang ada di ruangan tertutup, <em>droplet </em>pernafasan saat batuk dan bersin dengan jarak yang kurang dari 1 meter serta kontaminasi virus yang menempel pada permukaan benda.</p>\r\n\r\n<p><img alt=\"\" src=\"https://rainbowcodec.com/webdisk/Image/bumil/covid195.jpg\" style=\"height:591px; width:430px\" /><br />\r\nsumber : (kesbangpolinmas.demakkab.go.id, n.d.)</p>\r\n'),
(4, 'pencegahan', ''),
(5, 'layanan', '<p>Bagaimana layanan kesehatan ibu hamil yaitu pemeriksaan kehamilan di masa pandemi COVID-19?</p>\r\n\r\n<ol>\r\n	<li>Pelayanan pemeriksaan kehamilan/<em>antenal care </em>(ANC) pada kehamilan normal dimasa pandemi dilakukan sebanyak 6x secara fisik atau langsung dengan kunjungan ANC 2x di trimester I, 1x di trimester II dan 3x di trimester III.</li>\r\n	<li>Jika ibu memiliki penyakit penyerta saat kehamilan seperti tekanan darah tinggi dan diabetes melitus (kencing manis) konsultasi pemeriksaan kehamilan perlu disesuaikan dengan tenaga kesehatan.</li>\r\n	<li>Sebelum ibu hamil melakukan kunjungan pemeriksaan kehamilan/<em>antenatal care</em> (ANC)secara tatap muka, terlebih dahulu harus membuat janji bertemu (<em>teleregistrasi). </em></li>\r\n	<li><em>Teleregistrasi</em> atau janji bertemu yang dilakukan ibu hamil berupa pendaftaran ke fasilitas pelayanan kesehatan sebelum melakukan pemeriksaan kehamilan/ <em>antenatal care</em> (ANC) secara tatap muka.</li>\r\n	<li>Pendaftaran ini dilakukan melalui media komunikasi atau media <em>online</em> seperti <em>telfon</em>, SMS dan <em>Whattsap. </em></li>\r\n	<li>Saat melakukan<em> teleregistrasi</em> melalui media komunikasi atau <em>online, </em>petugas pelayanan kesehatan akan melakukan skrining <em>anamnesa</em> terlebih dahulu sebelum mengunjungi fasilitas pelayanan kesehatan.</li>\r\n	<li>Saat skrining <em>anamnes, </em>ibu hamil akan ditanyakan tanda, gejala dan faktor resiko COVID-19 yang dirasakan ibu.</li>\r\n	<li>Jika ada, maka ibu akan dirujuk untuk ke rumah sakit untuk dilakukan swab, namun jika tidak ada gejala COVID-19 ibu dapat langsung ke pelayanan kesehatan seperti puskesmas untuk permeriksaan kehamilan/ <em>antenatal care</em></li>\r\n	<li>Sebelum ke pelayanan kesehatan ibu hamil harus menggunakan masker medis begitu juga yang menemani ibu juga harus tetap menggunakan masker dan menerapkan protokol kesehatan.</li>\r\n	<li>Saat di pelayanan kesehatan ibu harus melakukan tindakan pencegahan COVID-19 dengan mencuci tangan di tempat yang disediakan, menjaga jarak serta suhu tubuh akan diperiksa.</li>\r\n	<li>Selanjutnya, saat pemeriksaan kehamilan yang ke -1 pada trimester I seperti biasa ibu hamil akan dilakukan pemeriksaan kehamilan/ a<em>ntenatalcare</em> selanjutnya ibu akan di rujuk ke dokter yang ada di puskesmas untuk dilakukan skrining faktor resiko dengan tetap menerapkan protokol kesehatan.</li>\r\n	<li>Dokter akan melakukan skrining faktor resiko penyakit contohnya penyakit menular, penyakit tidak menular, pskologis kejiwaan, dan pemeriksaan USG</li>\r\n	<li>Jika tidak ditemukan faktor resiko, ibu hamil akan tetap melakukan pemeriksaan kehamilan yang ke 2,3,4 dan 6 di puskesmas.</li>\r\n	<li>Pada pemeriksaan kehamilan/ <em>antenatal care</em> yang ke-2 di trimester I, ANC ke-3 di trimester II ANC ke-4 di trimester 3 dan ANC ke-6 di trimester 3 terlebih dahulu ibu hamil membuat janji betemu/<em>teleregistrasi </em>sebelum pemeriksaan kehamilann/ANCmelalui <em>telfon/online</em> untuk menayakan faktor resiko COVID-19. Jika tidak ada, ibu hamil dapat langsung melakukan pemeriksaan kehamilan/<em>antenal care </em>secara tatap muka dengan tetap menerapkan protokol kesehatan.Dilakukan juga tindak lanjut jika ada faktor resiko dari skrining pada pemeriksaan kehamilan /ANC 1&nbsp;</li>\r\n	<li>Pada pemeriksaan kehamilan/ ANC ke -5 di trimester III ibu hamil tetap melakukan teleregistrasi sebelum ke pelayanan kesehatan, selanjutnya ibu akan dilakukan pemeriksaan kehamilan/ANC dan skrining faktor resiko persalinan yang dilakukan oleh dokter dengan tetap menerapkan protokol kesehatan. Skrining dilakukan untuk mengetahui faktor resiko dan menentukan tempat persalinan ibu.</li>\r\n	<li>Saat pertemuan langsung untuk kunjungan untuk pemeriksaan kehamilan/ ANC selama pandemi COVID-19 tetap dilakukan pemeriksaan dasar seperti pengukuran tekanan darah dan pemeriksaan laboratorium seperti darah dan urin, serta penilaian pertumbuhan janin yang dilakukan bersaaman dengan pemeriksaan maternal lain untuk membatasi kunjungan berulang ke klinik atau rumah sakit .</li>\r\n</ol>\r\n\r\n<p>Untuk lebih memahami dapat menonton vidio ini : <a href=\"https://www.youtube.com/watch?v=ByXxwsLRxew&amp;t=258s\" target=\"_blank\">https://www.youtube.com/watch?v=ByXxwsLRxew&amp;t=258s</a></p>\r\n'),
(6, 'mencuci tangan ', '<p><strong>Cara mencuci tangan yang benar dengan sabun dan dibawah air mengalir dengan 6 langkah yaitu:</strong></p>\r\n\r\n<ol>\r\n	<li>Basahi tangan dengan air, gosok sabun pada telapak tangan kemudian usap dan gosok kedua telapak tangan secara lembut dengan arah memutar.</li>\r\n	<li>Usap dan gosok juga kedua punggung tangan secara bergantian</li>\r\n	<li>Gosok sela-sela jari tangan hingga bersih</li>\r\n	<li>Bersihkan ujung-ujung jari secara bergantian dengan posisi saling mengunci</li>\r\n	<li>Gosok kedua ibu jari secara bergantian</li>\r\n	<li>Letakkan ujung-ujung jari ke telapak tangan kemudian gosok perlahan. Bilasa tangan dibawah air mengalir dan bersih lalu keringkan.</li>\r\n</ol>\r\n\r\n<p><img alt=\"\" src=\"https://rainbowcodec.com/webdisk/Image/bumil/ctangan.jpg\" /><br />\r\nsumber : (promkes.kemkes.go.id, n.d.)</p>\r\n\r\n<p>Untuk lebih memahami dapat klik vidio ini : <a href=\"https://www.youtube.com/watch?v=MzfJ6TnRX6s\" target=\"_blank\">https://www.youtube.com/watch?v=MzfJ6TnRX6s</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hal-Hal penting yang harus diingat dalam mencuci tangan yaitu :</strong></p>\r\n\r\n<ol>\r\n	<li>ibu hamil dapat mencuci tangan dengan menggunakan sabun dan memakai cara antiseptik (<em>hand sanitizer</em>).&nbsp;</li>\r\n	<li>Mencuci tangan dengan sabun, dilakukan selama 40-60 detik dan dibawah air yang mengalir.</li>\r\n	<li>Jika tidak ada air mengalir dan sabun, maka ibu bisa mencuci tangan dengan menggunakan cairan <em>antiseptik</em> berbahan dasar <em>alkhol </em>70% selama 20-30 detik.</li>\r\n	<li>Ibu hamil harus selalu mencuci tangan dengan bersih dan benar terutama saat :<br />\r\n	- Setelah buang air kecil dan buang air besar<br />\r\n	- Setelah berpergian dari luar rumah<br />\r\n	- Setelah menyentuh permukaan benda<br />\r\n	- Sebelum dan sesudah makan</li>\r\n	<li>Tidak menyentuh area wajah : mata, hidung dan mulut saat tangan tidak bersih, karena virus dapat berpindah dan menempel pada area tersebut</li>\r\n</ol>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; Untuk lebih memahami dapat klik link vidio ini :&nbsp;&nbsp;<a href=\"https://www.youtube.com/watch?v=m5xZSdz-qKw\" target=\"_blank\">https://www.youtube.com/watch?v=m5xZSdz-qKw</a></p>\r\n'),
(7, 'menggunakan masker ', '<p><strong>Cara menggunakan masker dengan benar yaitu :</strong></p>\r\n\r\n<ol>\r\n	<li>Sebelum memakai masker, cuci tangan dengan benar terlebih dahulu menggunakan air mengalir dan sabun atau jika tidak ada dapat menggunakan cairan antiseptik berbahan dasar alkohol.</li>\r\n	<li>Pakai masker dengan menutupi mulut, hidung dan dagu</li>\r\n	<li>Pastikan posisi masker yang berwarna berada di bagian depan</li>\r\n	<li>Pasang tali masker ke bagian belakang telinga lalu tekan bagian atas masker supaya mengikuti bentuk hidung</li>\r\n	<li>Pastikan terpasang dengan baik&nbsp; sehingga tidak ada celah antar masker dan wajah</li>\r\n</ol>\r\n\r\n<p><strong>Cara melepaskan masker yang benar, yaitu :</strong></p>\r\n\r\n<ol>\r\n	<li>Lepaskan kaitan tali masker yang berada di bagian belakang telinga secara perlahan</li>\r\n	<li>Saat melepaskan masker, jangan menyentuh bagian depan pasker. Jika tidak sengaja tersentuh maka ibu harus segera mencuci tangan dengan benar</li>\r\n	<li>Melepaskan masker harus menjauhi wajah dan pakai</li>\r\n	<li>Pada masker medis hanya dapat dipergunakan untuk 1x pemakaian, setelah itu masker langsung dibuang ke tempat sampah tertutup.</li>\r\n	<li>Pada masker kain, setelah dipakai, masker harus langsung di cuci menggunakan detergen dan air hingga bersih dan kering, sebelum dipakai kembali.</li>\r\n	<li>Setelah melepaskan masker kain dan medis, ibu harus mencuci tangan memakai sabun dengan benar jika tidak ada dapat menggunakan cairan antiseptik berbahan dasar alkohol 70%</li>\r\n</ol>\r\n\r\n<p><img alt=\"\" src=\"https://rainbowcodec.com/webdisk/Image/bumil/masker.jpg\" /><br />\r\nsumber : (promkes.kemkes.go.id, n.d.)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hal-hal yang harus di perhatikan dalam penggunaan masker yaitu:</strong></p>\r\n\r\n<ol>\r\n	<li>Makser kain dapat dipakai saat ibu hamil tidak sakit dan&nbsp; harus keluar rumah.</li>\r\n	<li>Masker kain yang disarankan adalah masker kain yang memiliki 3 lapisan, karena masker ini dapat menagkal virus &plusmn; 70 %.</li>\r\n	<li>Masker kain tidak boleh digunakan lebih dari 4 jam.</li>\r\n	<li>Penggunaan masker medis diharuskan saat ibu sedang sakit, melakukan kunjungan ke pelayanan kesehatan serta saat proses persalinan.</li>\r\n</ol>\r\n\r\n<p>Untuk lebih paham ibu dapat menonton vidio ini :&nbsp;<a href=\"https://www.youtube.com/watch?v=FXvX1pxeW2o\" target=\"_blank\">https://www.youtube.com/watch?v=FXvX1pxeW2o</a></p>\r\n'),
(8, 'etika batuk dan bersin ', '<p><strong>Cara melakukan etika batuk dan bersin yang benar yaitu :</strong></p>\r\n\r\n<ol>\r\n	<li>Saat sedang batuk ataupun bersin, tutupi mulut dan hidung dengan<em> tissue </em></li>\r\n	<li>Kemudian buang <em>tissue</em> tersebut pada tempat sampah tertutup</li>\r\n	<li>Setelah itu ibu mencuci tangan dengan sabun dibawah air mengalir atau menggunakan cairan <em>antiseptik</em> berbahan dasar <em>alkohol</em> 70%</li>\r\n	<li>Bila tidak ada <em>tissue</em> maka ibu dapat menutup hidung dan mulut menggunakan lengan dalam bagian atas</li>\r\n	<li>Saat batuk dan bersin, jangan menutup hidung dan mulut dengan telapak tangan, tanpa penutup atau kepalan tangan</li>\r\n</ol>\r\n\r\n<p><img alt=\"\" src=\"https://rainbowcodec.com/webdisk/Image/bumil/batuk.jpg\" /><br />\r\nsumber : (rskasihibu.com, n.d.)</p>\r\n\r\n<p>Untuk lebih memahami dapat menonton vidio ini : <a href=\"https://www.youtube.com/watch?v=WZJENqoDx3s\" target=\"_blank\">https://www.youtube.com/watch?v=WZJENqoDx3s</a></p>\r\n'),
(9, 'menjaga jarak', '<p><strong>Hal-hal yang perlu dilakukan ibu hamil&nbsp; saat jaga jarak yaitu:</strong></p>\r\n\r\n<ol>\r\n	<li>Menjaga jarak fisik 1-2 meter</li>\r\n	<li>Hindari tempat keramaian</li>\r\n	<li>Mengurangi penggunaan transportasi umum</li>\r\n	<li>Tidak berpergian ke negara atau daerah yang terjangkit COVID-19</li>\r\n	<li>Menghindari kontak dengan orang yang sedang sakit</li>\r\n</ol>\r\n\r\n<p><img alt=\"\" src=\"https://rainbowcodec.com/webdisk/Image/bumil/jarak.jpg\" /><br />\r\nsumber : (www.diskes.baliprov.go.id, n.d.)</p>\r\n'),
(10, 'Tetap dirumah', '<p><strong>Ada beberapa aktivitas yang dapat ibu hamil lakukan saat tetap berada dirumah, yaitu :</strong></p>\r\n\r\n<ol>\r\n	<li>Ibu hamil harus rajin memeriksa kondisi kesehatannya sendiri selama dirumah.</li>\r\n	<li>Selama memeriksa kondisi kesehatannya sendiri, ibu dapat dibantu melalui konsultasi kesehatan secara online (telemedicine) untuk mengurangi frekuensi kunjugan ke rumah sakit selama pandemi<br />\r\n	<img alt=\"\" src=\"https://rainbowcodec.com/webdisk/Image/bumil/rumah1.jpg\" /><br />\r\n	sumber : (id.depositphotos.com, n.d.)<br />\r\n	&nbsp;</li>\r\n	<li>Ibu yang usia kehamilannya 5 bulan, sudah dapat menghitung gerakan janin secara mandiri dengan menggunakan metode cardiff/WHO.</li>\r\n	<li>Saat merasakan gerakan janin pastikan minimal ada 10 gerakan per 2 jam.<br />\r\n	<img alt=\"\" src=\"https://rainbowcodec.com/webdisk/Image/bumil/rumah2.jpg\" /><br />\r\n	sumber : (id.wikihow.com, n.d.)<br />\r\n	&nbsp;</li>\r\n	<li>Jika ibu mengalami tanda gejala COVID-19 ibu hamil harus segera menghubungi layanan darurat COVID-19</li>\r\n	<li>Rutin membersihkan permukaan benda yang sering disentu&nbsp; seperti meja, gagang pintu, kursi, sakelar listrik, <em>handhphone</em> dan lainnya. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>\r\n	<li>Membersihkan permukaan benda tersebut dengan menyemprotkan desinfektan seperti <em>alkohol 70%</em> karena cairan tersebut dapat membunuh SARS-COV-2 yang menempel di permukaan dalam 1 menit.<br />\r\n	<img alt=\"\" src=\"https://rainbowcodec.com/webdisk/Image/bumil/rumah3.jpg\" /><br />\r\n	sumber : (www.kompas.com, n.d.)<br />\r\n	&nbsp;</li>\r\n	<li>Ibu hamil juga harus rutin membuka jendela setiap pagi membiarkan cahaya matahari masuk ke rumah dapat menghentikan perkembangan virus yang menempel di udara</li>\r\n	<li>Ibu hamil dapat melakukan senam ibu hamil dari rumah masing-masing secara mandiri dengan menggunakan <em>handphone </em>selama pandemi COVID-19</li>\r\n	<li>Selama dirumah ibu hamil diharapkan aktif mencari informasi yang tepat dan benar tentang perkembangan COVID-19 dari sumber-sumber terpercaya</li>\r\n</ol>\r\n\r\n<p>Untuk lebih memahami dapat menonton vidio ini : <a href=\"https://www.youtube.com/watch?v=KW9TrPQR6pk\" target=\"_blank\">https://www.youtube.com/watch?v=KW9TrPQR6pk</a></p>\r\n'),
(11, 'Meningkatkan imunitas tubuh', '<p><strong>Ada beberapa cara yang dapat dilakukan ibu hamil untuk meningkatkan imunitas tubuh, yaitu :</strong></p>\r\n\r\n<ol>\r\n	<li>Menjaga kesehatan dengan mengkonsumsi makanan yang bergizi seimbang, seperti :<br />\r\n	-&nbsp;Nasi putih sebanyak 5 porsi (trimester 1), 6 porsi (trimester 2 dan 3)<br />\r\n	-&nbsp;Protein hewani (ikan, telur dan ayam) dan protein nabati (tahu dan tempe)<br />\r\n	-&nbsp;Sayur matang dan buah-buahan lokal (pepaya dan pisang).<br />\r\n	&nbsp;</li>\r\n	<li>Perlu diperhatikan, untuk setiap porsi makanan yang&nbsp;dikonsumsi ibu hamil, harus dilakukan konsultasi terlebih&nbsp;dahulu ke tenaga kesehatan dan tetap memperhatikan indeks massa ibu</li>\r\n	<li>Minum air putih yang banyak sekitar 8-12 gelas per hari terutama saat adanya perubahan cuaca</li>\r\n	<li>Mengkonsumsi Vitamin C untuk meningkatkan kekebalan tubuh ibu hamil. Kebutuhan harian ibu hamil akan vitamin C yaitu 85 mg per hari</li>\r\n</ol>\r\n\r\n<p>Untuk lebih memahami dapat menonton vidio ini :&nbsp;<a href=\"https://www.youtube.com/watch?v=cTvMHLvnYn0\" target=\"_blank\">https://www.youtube.com/watch?v=cTvMHLvnYn0</a></p>\r\n'),
(12, 'Kontak', '<p>Kontak : +62 878-5188-9090</p>\r\n\r\n<p>Hubungi kami apabila anda membutuhkan bantuan kami siap melayani dengan senang hati.</p>\r\n'),
(13, 'Tentang', '<p><strong>BUMIL CERDAS</strong></p>\r\n\r\n<p>Adalah Aplikasi Berbasis Website yang memberikan Informasi terkait Bagaimana Cara Pencegahan COVID-19 Pada Ibu Hamil dan Edukasi Kepada Ibu Hamil Agara terhindar dari Virus COVID-19</p>\r\n\r\n<p>Semoga Aplikasi BUMIL CERDAS ini dapat membantu para Ibu Hamil untuk dapat lebih mengerti bagaimana menjaga diri dimasa kehamilanya dan terhindar dari Virus COVID-19.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(55) NOT NULL,
  `nama_lengkap` varchar(55) NOT NULL,
  `status_akun` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `no_hp` text NOT NULL,
  `jenis_kelamin` varchar(55) NOT NULL,
  `alamat` varchar(55) NOT NULL,
  `kota` varchar(55) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto_profil` text NOT NULL,
  `level` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama_lengkap`, `status_akun`, `email`, `no_hp`, `jenis_kelamin`, `alamat`, `kota`, `tgl_lahir`, `foto_profil`, `level`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'aktif', '', '085674899335', 'laki-laki', 'jl beringin sd', 'medan', '1988-10-15', 'foto/profil/2020-10-12_07-39-44_Koala.jpg', 'admin'),
(6, 'user@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'heru', 'aktif', 'heru@gmail.com', '085763077113', 'laki-laki', 'jl belawan medan', 'Medan', '1987-10-15', 'foto/profil/2020-10-11_08-13-02_user8-128x128.jpg', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
