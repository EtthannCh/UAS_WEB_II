-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 10:16 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_webii`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `kode_produk` varchar(40) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `id_kategori` varchar(11) NOT NULL,
  `kode_merk` varchar(11) NOT NULL,
  `fitur` varchar(10000) NOT NULL,
  `info_tambahan` varchar(50) NOT NULL,
  `deskripsi_topik` varchar(1000) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_awal` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`kode_produk`, `nama_produk`, `id_kategori`, `kode_merk`, `fitur`, `info_tambahan`, `deskripsi_topik`, `deskripsi`, `harga_awal`, `diskon`, `jumlah_produk`, `gambar`) VALUES
('CSC-05NVB3', 'AC CHANGHONG CSC-05NVB3', '1', 'CHG', 'Turbo Model|Gold Fin|Auto Clean|Double Corrosion Protection|Silent Sleep Mode|24 Hour Time Setting', 'Size: 0.5 PK', 'Spesifikasi|Kapasitas Pendinginan|Daya Listrik|INDOOR|OUTDOOR|Tipe Refrigrant', '5.200 Btu/h|390 W|Dimensi 790 x 206 x 269 (mm)|Dimensi 660 x 530 x 240 (mm)|R-32\r\n', 2875000, 380000, 20, 'CSC-05NVB3.jpg\r\n'),
('CSC-09NVB3', 'AC CHANGHONG CSC-09NVB3', '1', 'CHG', 'Turbo Model|Gold Fin|Auto Clean|Double Corrosion Protection|Silent Sleep Mode|24 Hour Time Setting', 'Size: 1 PK', 'Spesifikasi|Kapasitas Pendinginan|Daya Listrik|INDOOR|OUTDOOR|Tipe Refrigrant', '9000 Btu/h|760 W|Dimensi 790 x 206 x 274 (mm)|Dimensi 660 x 530 x 240 (mm)|R-32', 3040000, 141000, 20, 'CSC-09NVB3.jpg'),
('RS62T5F01B4/SE', '681L KulkasSide By Side Family HubTM', '8', 'SMG', 'Family Hub™|View inside|Family board|Recipes & Meal Planner', 'Color:Black', 'Deskripsi|Family Board|Morning Brief (Info Cuaca, Pengingat Makanan, Kalender, Berita)*|Calendar|Momo, To-do, Gallery|Trivia|SmartView|TuneIn/Spotify (Musik & Radio)|Internet|View Inside|Recipes & Meal Planner|Shopping List|New Bixby|Panggilan Via Bluetooth|SmartThings and Ring|SpaceMax Technology™|Built-in Look', 'Lengkapi suasana keluarga Anda dengan berbagai cerita, pesan, momen spesial bahkan video di Family Board. Nikmati berbagai kemudahan untuk menampilkan foto, klip video, memasang stiker, menggambar, mengetik/menulis catatan dengan tangan, berbagi jadwal dan tautan situs web, atau memainkan musik di Kulkas FamilyHub.|Tetap up-to-date dengan informasi penting! Fitur Morning Brief akan menampilkan ramalan cuaca, pengingat makanan, dan kalender di layar kulkas Anda. Dengan menggunakan pengenalan suara New Bixby yang akan mengidentifikasi siapa yang berbicara dan menampilkan informasi yang relevan.|Kalender memungkinkan Anda untuk berbagi dan up to date dengan jadwal anggota keluarga anda. Anda dapat menambahkan jadwal di kulkas atau menyinkronkan jadwal dengan kalender Google dan Microsoft 365 melalui smartphone Anda. Jadi Anda tidak akan melupakan tanggal-tanggal penting|Nikmati cara yang sangat menyenangkan dan efektif untuk berkomunikasi dengan keluarga. Anda dapat menggunakan Aplikasi Memo, Agenda, dan Galeri untuk berbagi catatan, daftar tugas, instruksi, jadwal aktivitas, foto, dan bahkan mengunggah dan memutar video. Layar akan menyala saat ada yang mendekat, untuk menampilkan informasi|Dapatkan informasi yang menghibur melalui Fitur Trivia. Anda dapat mengetahui peristiwa dan kata-kata yang menginspirasi, fakta sejarah yang menarik, dan arti kata-kata yang tidak biasa. Tak hanya itu, akan ada pertanyaan tak terduga setiap harinya yang akan menarik perhatian Anda|Kini Anda dapat menonton program TV atau mengakses konten online favorit Anda melalui FamilyHub. Cukup Tampilkan layar Handphone atau TV anda dengan fitur Mirroring, kini anda tidak lagi ketinggalan Program Favorit! Aplikasi Smart View juga dapat menampilkan apa yang ditampilkan di Samsung Smart TV* dan memungkinkan Anda melihat dan mengontrol jutaan Aplikasi yang tersedia di smartphone Anda|Ciptakan suasana menyenangkan saat memasak atau mengadakan pesta di rumah dengan FamilyHub Anda. Nikmati musik favorit tanpa hambatan dalam playlist Anda menggunakan Spotify atau streaming hiburan tanpa henti dari stasiun radio global, berita, podcast, dan acara komedi di TuneIn.|Akses web favorit Anda tanpa PC atau perangkat seluler. Menggunakan Browser pada fitur di FamilyHub, Anda dapat melihat konten online, seperti berita, media sosial, dan masih banyak lagi. Anda juga dapat membuat shortcut di Layar Utama, sehingga Anda dapat mengaksesnya dengan cepat.|Dengan kamera yang terpasang di dalam, nikmati kemudahan melihat apa yang ada di kulkas Anda kapan saja dan di mana. Fitur Ini juga dapat menandai tanggal kadaluarsa makanan dan memungkinkan Anda membuat daftar belanja, memo makanan, atau pengingat.|Nikmati kemudahan memasak makanan favorit keluarga Anda dengan Fitur Cerdas di FamilyHub. Smart Recipes menyediakan resep yang dengan instruksi yang mudah, dan Fitur Meal Planner dapat merekomendasikan menu berdasarkan favorit berdasarkan bahan makanan yang tersedia|Rencanakan daftar belanja Anda melalui Shopping List App. Cukup tambahkan item yang Anda inginkan ke daftar belanja dengan sentuhan atau perintah suara. Anda juga dapat mengakses daftar belanja ke telepon Anda dan memeriksanya di toko.|Jadikan hidup lebih praktis dan efisien dengan New Bixby* pada smartphone Samsung Galaxy. Cukup beri tahu apa yang ingin Anda lakukan dan dia akan melakukannya, mulai dari menyetel alarm hingga menyarankan resep. Bahkan menyesuaikan dengan kebutuhan Anda dengan mempelajari rutinitas dan preferensi Anda, sehingga akan lebih memberikan kemudahan dalam keseharian Anda.|Nikmati kemudahan menelpon atau menerima panggilan saat Anda memasak tanpa perlu memegang telepon. Fitur Bluetooth hadir untuk memberikan kenyamanan yang dirancang pada kulkas agar dapat terhubung dengan mulus ke smartphone Anda*. Kini, Anda dapat dengan mudah menjawab atau menelepon hanya menggunakan suara Anda. Sehingga dapat mengurangi risiko smartphone terjatuh atau merusaknya karena jari yang lengket saat memasak.|Ubah rumah Anda menjadi rumah yang lebih cerdas dengan mudah menggunakan fitur SmartThings*. Hanya dengan menggunakan suara atau sentuhan di layar FamilyHub, Anda dapat langsung mengontrol smart appliances dan IoT devices. Anda dapat mengaktifkan/menonaktifkannya, menyesuaikan pengaturan, mengkoordinasikan aktivitas, dan membatasi penggunaan daya|Simpan semua makanan Anda dengan rapi dan tetap segar lebih lama dengan kapasitas yang besar. Fitur SpaceMax Technology™ membuat dinding Kulkas menjadi lebih ramping sehingga dapat menciptakan lebih banyak ruang di dalam tanpa meningkatkan dimensi eksternal atau mengurangi efisiensi energi.|Wujudkan tampilan rumah yang terintegrasi dengan style yang memukau dengan tampilan built-in premium dan modern. Desain pintu yang dengan pegangan tersembunyi yang tidak menonjol melengkapi keindahan desain hunian Anda.', 30480000, 0, 10, 'new-product1.jpg'),
('TCL 43\" Q72', 'TCL 43\" Q725 4K QLED Google Smart\r\nDolby Vision & Atmos TV', '12', 'TCL', 'Google TV - Personalisasi Entertainment Favoritmu|Dolby Vision & Dolby Atmos|4K UHD dengan Dolby Vision & Atmos|Tampilan lebih dinamis', 'Size:43', 'Deskripsi|Desain minimalis|Resolusi 4K|HDR 10+|MEMC\r\n', 'TCL 43Q725 mengusung desain minimalis, serta bingkai tipis berbahan logam. Ideal untuk diletakkan di kamar, hingga ruang tamu|Layar 4K (3.840 x 2.160 piksel) dan HDR 10+ TV tersebut sudah mendukung Quantum dot display, diklaim bisa menghasilkan cahaya merah, hijau, dan biru monokromatik murni sehingga menghasilkan volume warna lebih baik. Sebagai gambaran, rentang normal LED UHD adalah 70%-80 % warna dalam layar. Sedangkan QLED di layar TCL 43Q725 menampilkan hampir 100% saturasi warna DCI P3.|Teknologi HDR 10+ di layar TV 4K 43Q725 diklaim bisa mengoptimalkan kualitas gambar di layar UHD 4K. Terutama dalam kecerahan, saturasi warna, dan kontras. ”HDR10+ akan menyesuaikan tingkat kecerahan lebih akurat. Mencapai 4.000 nits berdasarkan adegan-demi-adegan atau frame-demi-frame dan mendukung kedalaman warna hingga 10-bit,”|Seri QLED Google TV ini memakai teknologi pemrosesan gambar bergerak MEMC (Motion Estimation Motion Compensation). Teknologi itu diklaim memastikan gambar dan suara lebih tajam, tidak buram, dan stabil selama olahraga dan adegan yang bergerak cepat.', 5499000, 0, 15, 'new-product2.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`kode_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
