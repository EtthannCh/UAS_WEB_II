-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 11:30 AM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `gambar_profile` varchar(100) NOT NULL,
  `waktu_buka` varchar(20) NOT NULL,
  `intro` varchar(10000) NOT NULL,
  `gambar_1` varchar(100) NOT NULL,
  `gambar_2` varchar(100) NOT NULL,
  `gambar_3` varchar(100) NOT NULL,
  `isi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `gambar_profile`, `waktu_buka`, `intro`, `gambar_1`, `gambar_2`, `gambar_3`, `isi`) VALUES
(1, 'building.jpg', '07:30 - 17:30 WIB', 'PT. AES adalah salah satu badan usaha terbesar di kota Medan yang bergerak di bidang distribusi peralatan (barang-barang) elektronik. PT. AES memiliki 12 cabang toko yang tersebar di berbagai daerah yang terletak di provinsi Sumatera Utara. Barang-barang elektronik yang diperjualbelikan adalah sebagai berikut: televisi, mesin cuci, dryer, kulkas, freezer, air conditioner, active speaker, air purifier, air cooler, microwave, oven dan electric fan. ', 'pic2.jpg', 'pic3.webp', 'pic1.webp', '<p>Kantor pusat PT. AES berlokasi di Medan, Sumatera Utara dan toko cabangnya tersebar di berbagai daerah di kota Binjai, Padang Sidempuan, Pematangsiantar, Medan, Tanjungbalai, Tebing Tinggi dan Sibolga.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_abal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(300) NOT NULL,
  `qty_produk` int(11) NOT NULL,
  `harga_produk` int(50) NOT NULL,
  `gambar_produk` varchar(200) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `pengiriman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catalog`
--

CREATE TABLE `tbl_catalog` (
  `id_catalog` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_merk` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_catalog`
--

INSERT INTO `tbl_catalog` (`id_catalog`, `id_kategori`, `kode_merk`) VALUES
(1, 1, 'CHG'),
(2, 1, 'GR'),
(3, 1, 'LG'),
(4, 1, 'PNC'),
(5, 1, 'PLY'),
(6, 1, 'SMG'),
(7, 1, 'SHP'),
(8, 1, 'TCL'),
(9, 2, 'GR'),
(10, 2, 'SHP'),
(11, 3, 'GR'),
(12, 3, 'LG'),
(13, 3, 'PNC'),
(14, 3, 'PLY'),
(15, 3, 'SMG'),
(16, 3, 'SHP'),
(17, 4, 'LG'),
(18, 4, 'PNC'),
(19, 4, 'PLY'),
(20, 4, 'SMG'),
(21, 4, 'SHP'),
(22, 5, 'LG'),
(23, 5, 'SMG'),
(24, 5, 'SHP'),
(25, 6, 'PNC'),
(55, 7, 'CHG'),
(56, 7, 'LG'),
(57, 7, 'PLY'),
(58, 7, 'SHP'),
(59, 7, 'TCL'),
(60, 8, 'CHG'),
(61, 8, 'LG'),
(62, 8, 'PNC'),
(63, 8, 'PLY'),
(64, 8, 'SMG'),
(65, 8, 'SHP'),
(66, 9, 'LG'),
(67, 9, 'PNC'),
(68, 9, 'PLY'),
(69, 9, 'SMG'),
(70, 9, 'SHP'),
(71, 9, 'TCL'),
(72, 10, 'LG'),
(73, 10, 'PNC'),
(74, 10, 'SMG'),
(75, 10, 'SHP'),
(76, 11, 'SHP'),
(77, 12, 'CHG'),
(78, 12, 'PNC'),
(79, 12, 'PLY'),
(80, 12, 'SMG'),
(81, 12, 'SHP'),
(82, 12, 'TCL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE `tbl_contact_us` (
  `id` int(11) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `Lokasi` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `gmail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact_us`
--

INSERT INTO `tbl_contact_us` (`id`, `no_telp`, `Lokasi`, `facebook`, `twitter`, `instagram`, `gmail`) VALUES
(1, '06XXXXXXXXXX', 'Jl. ................................, Medan, Sumatera Utara, Indonesia (Kantor Pusat)', 'PT.AES', 'AES', 'AES_Electronics', 'Electronics@AES.co.id');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_user`
--

CREATE TABLE `tbl_data_user` (
  `id_customer` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_depan` text NOT NULL,
  `nama_belakang` text NOT NULL,
  `nomor_telepon` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` text NOT NULL,
  `kota` text NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_data_user`
--

INSERT INTO `tbl_data_user` (`id_customer`, `id_user`, `nama_depan`, `nama_belakang`, `nomor_telepon`, `alamat`, `provinsi`, `kota`, `kode_pos`, `gambar`) VALUES
(1, 1, 'Cecilia', 'Xu', 81121213, 'jalan', 'Sumatera Utara', 'Medan', 121212, 'user1.webp'),
(2, 2, 'Edrick', 'Hans Hanitio', 82342134, 'jalani saja', 'sumatera utara', 'medan', 11111, ''),
(3, 3, 'etthanne', 'chandra', 82342324, 'jalan jalan', 'sumatera utara', 'medan', 22222, ''),
(4, 4, 'bambang', 'si user', 82341243, 'jalan kan', 'sumatera utara', 'Medan', 55555, 'user1.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` text NOT NULL,
  `gambar_kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`, `gambar_kategori`) VALUES
(1, 'Air Conditioner', 'kat-ac.jpg'),
(2, 'Air Cooler', 'kat-aircooler.png'),
(3, 'Air Purifier', 'kat-ap.jpg'),
(4, 'Active Speaker', 'kat-as.jpg'),
(5, 'Dryer', 'kat-dryer.jpg'),
(6, 'Electric Fan', 'kat-ef.jpg'),
(7, 'Freezer', 'kat-fr.jpg'),
(8, 'Kulkas', 'kat-kulkas.avif'),
(9, 'Mesin Cuci', 'kat-mc.avif'),
(10, 'Microwave', 'kat-microwave.png'),
(11, 'Oven', 'kat-oven.jpg'),
(12, 'Televisi', 'kat-tv.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_merk`
--

CREATE TABLE `tbl_merk` (
  `kode_merk` varchar(11) NOT NULL,
  `nama_merk` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_merk`
--

INSERT INTO `tbl_merk` (`kode_merk`, `nama_merk`, `gambar`) VALUES
('CHG', 'CHANGHONG', 'Changhong-Logo.wine.png\r\n'),
('GR', 'Gree', 'gree-logo.png\r\n'),
('LG', 'LG', 'lg-logo-logo-png-transparent-svg-vector-bie-supply-0.png'),
('PLY', 'Polytron', 'Polytron_Logo.png\r\n'),
('PNC', 'Panasonic', 'panasonic-logo-1.png'),
('SHP', 'SHARP', 'sharp-logo-png-transparent.png'),
('SMG', 'SAMSUNG', 'samsung-logo-text-png-1.png'),
('TCL', 'TCL', 'tcl.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengiriman`
--

CREATE TABLE `tbl_pengiriman` (
  `id_pengiriman` varchar(5) NOT NULL,
  `jenis_pengiriman` varchar(15) NOT NULL,
  `harga_pengiriman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengiriman`
--

INSERT INTO `tbl_pengiriman` (`id_pengiriman`, `jenis_pengiriman`, `harga_pengiriman`) VALUES
('CGR', 'cargo', 50000),
('HMT', 'hemat', 35000),
('INST', 'instan', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `kode_produk` varchar(50) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `kode_merk` varchar(20) DEFAULT NULL,
  `fitur` varchar(1000) DEFAULT NULL,
  `info_tambahan` varchar(1000) DEFAULT NULL,
  `deskripsi_topik` varchar(1000) DEFAULT NULL,
  `deskripsi` varchar(10000) DEFAULT NULL,
  `harga_awal` int(100) DEFAULT NULL,
  `diskon` int(100) DEFAULT NULL,
  `jumlah_produk` int(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`kode_produk`, `nama_produk`, `id_kategori`, `kode_merk`, `fitur`, `info_tambahan`, `deskripsi_topik`, `deskripsi`, `harga_awal`, `diskon`, `jumlah_produk`, `gambar`) VALUES
('317MG', 'SJ-317MG-GB/GR', 8, 'SHP', 'Fan Cooling System|Ag+ Nano Deodorizer|LED Lamp|Ice Twist Plus Ice Box', 'Capacity(L):237', 'Door Color - Door Material:|Cooling System:|Capacity (Gross / Netto):|Consumption(Watt):|Depth(mm):|Width(mm):Weight(Kg):', ':Geometric Blue & Geometric Red - MagneGlass Steel|Fan Cooling Technology|257L / 237L|72|588|1630|42', 3800000, 510000, 10, '317MG.png'),
('4T-C70DL1X', '70 Inch 4K Ultra-HDR Android TV with Google Assistant 4T-C70DL1X', 12, 'SHP', '4K Ultra-HD Resolution with HDR|Deep Chroma Display Techology|HDMI 2.1 with Game Mode|Android TV 11 with Google Assistant|Chromecast Built-In', 'Size:70', 'Weight:|Output Power:|Resolution:|Power Consumption:|Dimension Without Stand ( mm ):|Dimension With Stand ( mm ):', '24 kg|220 W|10W x 2|220 Watt|1564 x 904 x 77|1564 x 983 x 335', 20430000, 4680000, 10, '4T-C70DL1X.png'),
('4T-C75EK2X', '4K Frameless Android TV 4T-C75EK2X', 12, 'SHP', 'Sharp\'s Android TV with Google Assistant|X4 Revelation Engine|AIOT Device Control|Chromecast', 'Size:75', 'Weight:|Dimensions:|Resolution:|Power Consumption:|DIMENSION (MM) WITH BASE/STAND (WXDXH):|DIMENSION (MM) WITHOUT BASE/STAND (WXDXH):', '23 kg|82 ? 14 ? 51 cm|3840 x 2160|260 Watt|1673 x 969 x 89|1673 x 1032 x 317', 18499000, 1900000, 10, 'C75EK2X.png'),
('50A28', 'TCL 50A28 4K UHD Dolby Audio Google TV', 12, 'TCL', 'Google TV dengan voice assistant|Resolusi 4K yang memanjakan mata|Kedalaman warna lebih dari 1 Milyar|Kualitas suara dolby seperti menonton bioskop|TV dengan bezel hampir tidak terlihat', 'Size:50', '4K HDR|HDR 10|Micro Dimming|Dynamic Color Enhancement + 10 Bit Color|AiPQ Engine 2.0|Google TV|OK Google|Dolby Audio|HDMI 2.1 & USB 3.0', 'Kualitas gambar kelas dunia dengan kualitas 4x lebih detail dari Full-HD yang membuat gambar lebih halus dan jernih|Jangkauan warna yang lebih luas dan kontras terang gelap sangat dalam. HDR 10 juga memaksimalkan cahaya yang dihasilkan hingga 1000 nit.|Menyesuaikan tingkat kecerahan dan kegelapan secara terpisah yang membuat kecerahan layar sangat pas di setiap bagian layar dan gambar.|Optimalisasi kecerahan warna pada layar TV secara otomatis. Palet warna menjadi semakin kaya hingga 1 Milyar warna.|Prosesor Quad-Core Al Picture Quality Engine Generasi 2 mampu mengoptimalkan kinerja perangkat keras dan lunak secara keseluruhan. Gambar dan warna akan terlihat lebih optimal dan realistis|Nikmati lebih dari 700,000 film dan episode TV hanya dalam 1 tempat. Google TV menyediakan konten favorite anda melalui aplikasi, langganan & menyesuaikannya hanya untuk anda.|Gunakan suara Anda untuk mengontrol TV. Perintahkan Google untuk mencari judul tontonan, musik, berita, bahkan cuaca hari ini han', 8799000, 4200000, 10, '50A28.png'),
('96-20S', 'TCL 9KG TWT 96-20S Twin Tub Smart Washing Machine', 9, 'TCL', 'Pencucian dan pengeringan lebih cepat|Pilihan 3 mode: Normal, lembut, dan menguras|Filter penyaring kotoran terkini|Bentuk dan warna mewah|Pengoperasian otomatis yang dapat diatur', 'Color:White', 'Smart Washing|Lint Filter|Simple and Clean', 'drum dirancang sedemikian rupa sehingga tabungnya yang halus dan berbentuk sarang lebah menawarkan pencucian yang lembut namun menyeluruh untuk pakaian halus Anda.|Filter penyaring kotoran, fungsi penting untuk pakaian yang lebih bersih|Desain simple dengan perpaduan warna putih dan biru transparan, melengkapi rumah Anda', 1699000, 0, 10, '96-20S.png'),
('CBD680', 'CHEST FREEZER 600 LITER CHANGHONG CBD-680', 7, 'CHG', 'Kapasitas besar|Bahan aluminium foil|Desain list biru mewah dan menawan', 'Capacity(L):600', 'Compressor:|Refigerant:|Metode defrost:|Metode Control:|Berat kotor(kg):|Beart bersih(kg):|Installation type:|Dimensi Paket(mm):', 'Frekuensi tetap|R600a|Manual|Mechanical|78|70|1650x730x835|1685x780x885', 5995000, 904000, 10, 'CBD680.png'),
('CRF580', 'Side By Side Changhong CRF-580 Kulkas 4 Pintu CRF 580 Inverter', 8, 'CHG', 'Pintu Kaca 4 Pintu|Lampu LED Besar dan Mewah|6 Kompartemen Freezer yang Terpisah', 'Capacity(L):520', 'Compressor:|Metode defrost:|Metode kontrol:|Refigerant:|Gross weight/Net weight(kg):|Installation type:|Dimensi paket(mm):', 'Inverter|No defrost|Electric|R600a|128/120|785x685x1815|856x775x1895', 9499000, 404000, 10, 'CRF580.png'),
('CRF680', 'KULKAS SIDE BY SIDE CHANGHONG CRF-680WPS CRF 680 CRF680 INVERTER 630 L - FSS680', 8, 'CHG', 'Kapasitas Terbesar di kelasnya|Desain Stainless Steel Brand Korea|Fast Freezing -32 Celcius', 'Capacity(L):620', 'Compressor:|Metode defrost:|Metode kontrol:|Refigerant:|Gross weight/Net weight(kg):|Installation type:|Dimensi paket(mm):', 'Inverter|No defrost|Electric|R600a|105/95|912x704x1770|987x780x1841', 8025000, 26000, 10, 'CRF680.png'),
('CSC-05NVB3', 'AC CHANGHONG CSC-05NVB3', 1, 'CHG', 'Turbo Model|Gold Fin|Auto Clean|Double Corrosion Protection|Silent Sleep Mode|24 Hour Time Setting', 'Size: 0.5 PK', 'Kapasitas Pendinginan|Daya Listrik|INDOOR|OUTDOOR|Tipe Refrigrant', '5.200 Btu/h|390 W|Dimensi 790 x 206 x 269 (mm)|Dimensi 660 x 530 x 240 (mm)|R-32\r\n', 2875000, 380000, 20, 'CSC-05NVB3.jpg\r\n'),
('CSC-09NVB3', 'AC CHANGHONG CSC-09NVB3', 1, 'CHG', 'Turbo Model|Gold Fin|Auto Clean|Double Corrosion Protection|Silent Sleep Mode|24 Hour Time Setting', 'Size: 1 PK', 'Kapasitas Pendinginan|Daya Listrik|INDOOR|OUTDOOR|Tipe Refrigrant', '9000 Btu/h|760 W|Dimensi 790 x 206 x 274 (mm)|Dimensi 660 x 530 x 240 (mm)|R-32', 3040000, 141000, 20, 'CSC-09NVB3.jpg'),
('DPRO22CB', 'CBOX-DPRO22CB', 1, 'SHP', 'Digital Audio Control (Volume, Mode, Mute, 5-Band Equalizer)|BLUETOOTH 5.|FM RADIO|LINE (RCA type L/R)', 'Color:Black', 'MODEL:|Speaker Type:|Woofer:|Midrange:|Tweeter:|Mic Control:|Power Supply:|Frequency Response:|Input Impedance:|Input Sensitivity:', 'Active Speaker Pro Series|3-way speaker system|2 x 30.5cm (12\"), 4 Ohm, 60W|7.5cm (3\"), 4 Ohm, 30W|2.5cm (1\"), 25W|Mic Volume, ECHO|AC 220V ~ 50Hz|250 W|25 Hz - 20 KHz|50K Ohms|600 mV', 2889000, 190000, 10, 'CBOX-DPRO22CB.png'),
('DZ600', 'NR-DZ600MB1D', 4, 'CHG', 'Econavi|Ag Clean|Alarm door|Touch LED Control|Prime Fresh+', 'Capacity(L):601', 'Sensor otomais blue LED pada pegangan pintu|-3?C membekukan denan lunak. Tanpa perlu mencairkan|Keranjang sayuran dua tingkat|Udara bersih dimana-mana|24/7 henat energi yang cerdas', 'Lampu LED pada pegangan pintu secara otomatis menyala bila sensor medeteksi sesorang. Ini memudahkan untuk melihat pintu dan membukanya bahkan di ruangan gelap. Cahaya biru yang menarik juga menambah sentuhan modis untuk dapur anda.|Pembekuan dengan Prime Fresh menjaga dagingdan ikan tetap segar selama 7 hari. berbeda dengan pembekuan biasa, -3?C membekukan dengan lunak tanpa merusak sel-sel, sehingga nutrisi dan rasa tetap terjaga. Selain itu , pada suhu -3?C, bahan makanan dapat dimasak tanpa perlu mencairkan, sehingga mudah dipotong, dikupas, serta dibumbui untuk kemudahan ekstra dalam memasak.|Dengan keranjang sayuran atas dan bawah, anda dapat menyimpan banyak sayuran dan buah. Anda dapat menggunakan keranjang atas untuk sayuran lunak dan lembut seperti tomat dan keeranjang bawah untuk sayuran besar atau sayuran berdaun. Memisahkan sayuran dengan cara ini. Penyimpanan jadi rapi dan teratur|Ag Clean pada model seri DZ tidak hanya meliputi bagian pendigin, tetapi juga pada agian pem', 26615000, 1616000, 10, 'DZ600.png'),
('DZ601', 'NR-DZ601VGKD', 4, 'CHG', 'Ag Clean|AI Econavi|Prime fresh+ freezing|Blue Ag+', 'Capacity(L):601', 'Pembekuan Lunak Cepat untuk Menjaga Bahan Makanan Tetap Segar dengan PrimFresh+|Memasak Makanan Bergizi Setiap Hari dengan PrimeFresh+|Bersih Maksimal dengan Blue Ag|Penyimpanan Rapi & Fungsional untuk Buah dan Sayur|Ag Hygiene untuk Udara dan Makanan tetap Higienis', 'PrimeFresh membekukan daging dan ikan secara lembut di -3?C. Pembekuan dalam cara ini dapat menjaga kesegaran hingga 7 hari* tanpa perlu dicairkan. Pilih mode PrimeFresh+ untuk membekukan makanan 4x lebih cepat*|PrimeFresh+ menggunakan aliran udara di suhu sekitar -3?C untuk membekukan secara lembut dan menjaga makanantetap segar|Blue Ag menghilangkan 99,99%* bakteri melalui fungsi kombinasi filter Blue Ag dan sinar Biru LED|Penyimpanan dua tingkat yang memisahkan antara buah dan sayur dalam jumlah banyak, rapi dan terjangkau. Kotak yang atas baik untuk buah dan sayur yang segar. Kotak yang bawah untuk penyimpanan yang besar seperti sayuran hijau.|Filter Ag menghilangkan 99.9%*? bakteri dan mengurangi bauk tak sedap. Udara di dalam lemari es melewati Filter Ag ganda untuk menjaga kompartemen tetap bersih.', 18500000, 10475000, 10, 'DZ601.png'),
('EO-28LP', 'OVEN SHARP EO-28LP(K) ELECTRIC ', 11, 'SHP', 'Convection|Stainless Steel Heating Element|Selector knobs for Lower, Upper and Both Heater|Functions: Toast, Grill, Bake, Rotisserie, Roast & Convectio|Accessories : Food Tray and handle tray, Grill Rack and Handle Rack, & Crumb Tray4', 'Color:Black', 'Capacity:|Timer:|Temperature control:|Power consumption:|Power source:', '28 L|60 minutes|250 degree|1500 Watt|220 - 240 Watt', 750000, 0, 10, 'EO-28LP.png'),
('EO-32BK', 'ELECTRIC OVEN SHARP 32 LITER EO-32BK', 11, 'SHP', 'Convection|Stainless Steel Heating Element|Selector knobs for Lower, Upper and Both Heater|Functions: Toast, Grill, Bake, Rotisserie, Roast & Convectio|Accessories : Food Tray and handle tray, Grill Rack and Handle Rack, & Crumb Tray4', 'Color:Black', 'Capacity:|Timer:|Temperature control:|Power consumption:|Power source:', '32 L|120 minutes|230 degree|1300 Watt|220 - 240 Watt', 850000, 0, 10, 'EO-32BK'),
('FCF396DW', 'CHEST FREEZER CHANGHONG FCF -396DW FCF396DW FREEZER BOX 330L 160 Watt', 7, 'CHG', 'Desain dual fungsi|Pendinginan 4D dan sedikit bunga es|Perlindunngan tanpa listrik', 'Capacity(L):330', 'UPG rentang suhu yang luas|UPG pendingin - pendinginan 4D|Pintu melayang', 'Desain rentang suhu luas(-24?c - 5?c) membuatnya dapat memenuhi berbagai kebutuhan penyimpanan makanan keluarga.|Dengan evaporator yang di pasang rapat di sekitar liner, udara pendingin memancar ke dalam lebih cepat dari empat sisi, dengan suhu internal yang lebih merata.|Dengan desain pintu melayang, anda tidak perlu memegangi pintu karena pintu tetap terbuka dari berbagai sudut, dari 45? hingga 75?.', 3889000, 550000, 10, 'FCF396DW.png'),
('FD16V', 'NA-FD16V1BSG', 9, 'PNC', 'TD Inventer|Stain master|Active foam system', 'Color:Black', 'Water bazooka|Pencucian kuat dengan konsumsi energi yang rendah|Menghilangkan berbagai mancam noda|Mengangkat noda dengan busa padat|Mencuci setiap hari jadi mudah', 'Mencuci noda membandel di baju anak tidak lagi sulit dengan performa mencuci yang ditingkatkan hinga 16%. Noda yang melekat cukup dibilas dengan water bazooka, yang di perkuat oleh TD inventer, menjadikannya bersih kembali untuk kegiatan anak anda di luar rumah berikutnya|Perlu sedikit energi untuk pencucian kuat cucian anda dengan efisien guna hasil yang super bersih. Dengan memberikan kekuatan yang diperlukan untuk setiap siklus dengan optimal, Panasonic TD inventer dapat menghasilkan 6x kekuatan lebih banyak untuk hasil mencuci dan membilas lebih bersih dengan menggunakan sedikit energi.|Dengan mudah menghemat waktu saat sebelum mencuci dan mencuci dengan tangan, apa pun jenis nodanya dan dari mana pun asalnya. Stainmaster memecah berbagai macam noda pada kain dengan efek scrub wash.|Keluarga yang anda cintai kini dapat menikmati pakaian bersih, segar dan nyaman setiap hari untuk acara apapun. Sistem Active Foam menghasilkan busa halus degan kecepatan tinggi yang mengangkat, memisah', 9199000, 600000, 10, 'FD10X.png'),
('IF90PM', 'SJ-IF90PM-DS', 8, 'SHP', 'J-Tech INVENTER|Plasmacluster Ion Technology|LED Touch Control Pane|Interior LED Lamp (bulb)', 'Capacity(L):572', 'HYGIENIC COOLING|MOIST FRESH|MOISTURE SHIELD|SUPERIOR FREEZER|ENERGY SAVING', 'Teknologi Plasmacluster mampu menghasilan ion positif dan ion negatif yang secara aktif menyebar ke seluruh kompartmen lemari es untuk menghilangkan virus, bakteri, jamur, dan bau tidak sedap, menciptakan ruang penyimpanan makanan yang higienis.|Teknologi HYBRID Cooling System mampu mengendalikan dan menghantarkan udara lembab yang dingin ke seluruh kompartemen lemari es guna mencegah fluktuasi suhu, menjaga makanan tetap segar dan tahan lama.|Ruang penyimpanan sayur dan buah - buahan yang baru kini memiliki konstruksi baru yang hampir kedap udara dapat menyimpan sayur atau buah - buahan dengan kelembaban tinggi dalam keadaan segar dalam waktu yang sangat lama.|MEGA FREEZER dengan kapasitas sangat besar dapat menampung berbagai macam jenis makanan berukuran besar. Teknologi Deep Freezer yang baru mampu membekukan sampai -24 ?C bertujuan untuk menjaga nutrisi tetap terjaga untuk masa penyimpanan yang lama.|Pengaturan suhu yang sangat akurat berkat teknologi J-TECH Inverter dengan 36 lan', 23550000, 3551000, 10, 'IF90PM.png'),
('KMDLG595L', 'Kulkas Multi Door 595L gross / 458L nett Ramping dengan Inverter Linear Compressor, ThinQ? dengan Wi', 8, 'LG', 'Nature Fresh dengan LINEARCooling? & Door Cooling+?||Sistem penyimpanan pintar & Rak Tarik Untuk Barang Lebih Tinggi|Inverter Linear Compresso', 'Capacity(L):458', 'Manjakan indera Anda dengan NatureFRESH?|LINEAR Cooling?|Door Cooling+?|Hygiene FRESH+?|Sistem Penyimpanan Pintar|Inverter Linear Compressor', 'Nikmati kesegaran makanan dan hasil bumi. Manjakan indera Anda untuk pengalaman makan yang menyenangkan.|Kompresor Inverter Linear LG membantu menjaga penampilan dan rasa produk segar lebih lama dengan mengurangi fluktuasi suhu.|Ventilasi udara yang berada di bagian depan kulkas membantu menjaga suhu untuk mempertahankan kesegaran makanan.|Filter udara cerdas bukan hanya membasmi bakteri hingga 99,999% tetapi juga meminimalkan bau tidak sedap di dalam kulkas. Di samping itu, Anda dapat membuat makanan tetap segar dalam kondisi yang lebih bersih.|Hal yang menyenangkan dari kulkas Multi Door ini ada pada luasnya pilihan penyimpan seperti kompartemen Extra Space untuk berbagai makanan berdimensi atau berwadah kecil, rak untuk makanan berbentuk panjang dan SpacePlus? Ice System yang melekat pada pintu sehingga membebaskan Anda untuk menggunakan seluruh ruang penyimpanan atas.|Dengan getaran, jumlah komponen bergerak dan kebisingan lebih rendah dibanding kompresor konvensional LG, Kompresor', 24999000, 4000000, 10, 'kulkasmd.png'),
('kode_produk', 'nama_produk', 0, 'kode_merk', 'fitur', 'info_tambahan', 'deskripsi_topik', 'deskripsi', 0, 0, 0, 'gambar'),
('KSS668L', 'Kulkas Side by Side 668L gross / 601L nett Inverter Linear Compressor dan Rak Wine, ThinQ? dengan Wi', 8, 'LG', 'Wadah untuk memasukkan dan mengeluarkan air|Hygiene FRESH+?|Wine Rack|Inverter Linear Compresso', 'Capacity(L):601', 'Wadah untuk memasukkan dan mengeluarkan air|Hygiene FRESH+?|Rak Wine|HEMAT LISTRIK dengan Inverter Linear Compressor|SmartThinQ? - Smart Diagnosis?|Moist Balance Crisper?', 'Tutup wadah air memiliki desain yang modern sehingga Anda dapat mengisi air dengan mudah. Kotak kontainernya juga memiliki kapasitas 4 liter yang cukup besar, jadi Anda tidak perlu sering-sering mengisi wadah air|Filter udara cerdas bukan hanya membasmi bakteri hingga 99,999% tetapi juga meminimalkan bau tidak sedap di dalam kulkas. Di samping itu, Anda dapat membuat makanan tetap segar dalam kondisi yang lebih bersih.|Rak Wine ramah pengguna ini dapat menyimpan 4 botol Wine dalam suhu optimal|Inverter Linear Compressor unik milik LG menggunakan penggerak piston linear dibandingkan penggerak maju-mundur tradisional. Ini akan menghasilkan gaya gesek yang lebih sedikit, sehingga menghemat listrik sampai 32%. Inverter Linear Compressor dari LG bergaransi 10 tahun.|Dengan LG Smart ThinQ?, Anda dapat mengatur dan mendiagnosis lemari es dari smartphone bahkan ketika Anda sedang tak berada di rumah. Atur temperatur lemari es dengan mudah, kontrol HygieneFRESH? dan diagnosis lemari es Anda den', 24999000, 0, 10, 'kulkassbs.png'),
('KSS681L', '681L KulkasSide By Side Family Hub?', 6, 'CHG', 'Family Hub?|View inside|Family board|Recipes & Meal Planner', 'Color:Black', 'Family Board|Morning Brief (Info Cuaca, Pengingat Makanan, Kalender, Berita)*|Calendar|Momo, To-do, Gallery|Trivia|SmartView|TuneIn/Spotify (Musik & Radio)|Internet|View Inside|Recipes & Meal Planner|Shopping List|New Bixby|Panggilan via Bluetooth|SmartThings and Ring|SpaceMax Technology?|Built-in Look', 'Lengkapi suasana keluarga Anda dengan berbagai cerita, pesan, momen spesial bahkan video di Family Board. Nikmati berbagai kemudahan untuk menampilkan foto, klip video, memasang stiker, menggambar, mengetik/menulis catatan dengan tangan, berbagi jadwal dan tautan situs web, atau memainkan musik di Kulkas FamilyHub.|Lengkapi suasana keluarga Anda dengan berbagai cerita, pesan, momen spesial bahkan video di Family Board. Nikmati berbagai kemudahan untuk menampilkan foto, klip video, memasang stiker, menggambar, mengetik/menulis catatan dengan tangan, berbagi jadwal dan tautan situs web, atau memainkan musik di Kulkas FamilyHub.|Kalender memungkinkan Anda untuk berbagi dan up to date dengan jadwal anggota keluarga anda. Anda dapat menambahkan jadwal di kulkas atau menyinkronkan jadwal dengan kalender Google dan Microsoft 365 melalui smartphone Anda. Jadi Anda tidak akan melupakan tanggal-tanggal penting|Nikmati cara yang sangat menyenangkan dan efektif untuk berkomunikasi dengan keluarga.', 30480000, 0, 10, 'kulkas.png'),
('L32G7P', 'CHiQ Smart tv 32 Inch Newest Android11 Frameless Digital LED TV L32G7P', 12, 'CHG', 'Android TV & Android? 11 Pie|Dolby Audio|HDR10, HLG|NETFLIX', 'Size:32', 'Android 11|built-in WiFi dan LAN|dilengkapi dengan Bluetooth|Chromecast built-in|Remote control dengan voice assistant|Resolusi FHD Penuh', 'memungkinkan akses ke Google Play Store, memungkinkan pengguna untuk menginstal aplikasi favorit mereka dan menonton konten streaming langsung dari TV.|memungkinkan pengguna untuk terhubung ke internet tanpa perlu kabel tambahan.|pengguna dapat menghubungkan perangkat audio nirkabel ke TV untuk pengalaman suara yang lebih baik.|pengguna dapat menampilkan konten dari perangkat seluler mereka di layar TV dengan mudah.|memungkinkan pengguna untuk mengontrol TV dengan suara, membuatnya lebih mudah dan nyaman digunakan.|Resolui 1920 x 1080 dengan tepi dan detail yang dioptimalkan secara tepat menghaislkan warna yang nyata. Kejelasan visual yang hebat ada dalam jangkauan anda.', 4898000, 380000, 10, 'L32G7P.png'),
('L32H7', 'Changhong Framless Google certified Android Smart 32 Inch LED TV L32H7', 12, 'CHG', 'Android TV & Android? 11 Pie|Dolby Audio|HDR10, HLG|NETFLIX', 'Size:32', 'Tampilan layar 95%|Led Direct-Lit|HDR 10 dengan kontras tinggi dan detail tajam|Berbagai pengaturan kualitas gambar|Ahli TV Audio siap menyediakan anda kualitas suara superior', 'Tampilan ultra-lebar yang inovatif membenamkan diri anda dalam film dan video|Dibandingkan dengan Led Edge-Lit, Led Direct-Lit memiliki jarak yang sama sehingga cahaya latar tersebut merata di seluruh layar, sehingga memberikan gambar yang tajam dan realistis|TV dilengkapi dengan teknik peguraian kode gambar video HD untuk kualitas gambar yang lebih baik lagi. Gambar yang tajam dan cerah memberikan anda visual yang nyata.|Berbagai fungsi pemrosesan gambar dipadukan dengan debug perangkat lunak profesional meningkatkan pengalaman menonton anda dengan gambar yang lebih realistis|dengan pemahaman yang mendalam tentang audio, teknisi audio dbx-tv Changhong yang berpengalaman secara inovatif menggunakan prosesor sinyal digital(DSP) untuk menyetel dan mengoptimalkan speaker setiap TV, dan menghadirkan kualitas suara yang optimal.', 4599000, 2301000, 10, 'L32H7.png'),
('L40G7P', 'CHiQ Smart tv 40 Inch Newest Android11 Frameless Digital LED TV L40G7P', 12, 'CHG', 'Android TV & Android? 11 Pie|Dolby Audio|HDR10, HLG|NETFLIX', 'Size:40', 'Android 11|built-in WiFi dan LAN|dilengkapi dengan Bluetooth|Chromecast built-in|Remote control dengan voice assistant|Resolusi FHD Penuh', 'memungkinkan akses ke Google Play Store, memungkinkan pengguna untuk menginstal aplikasi favorit mereka dan menonton konten streaming langsung dari TV.|memungkinkan pengguna untuk terhubung ke internet tanpa perlu kabel tambahan.|pengguna dapat menghubungkan perangkat audio nirkabel ke TV untuk pengalaman suara yang lebih baik.|pengguna dapat menampilkan konten dari perangkat seluler mereka di layar TV dengan mudah.|memungkinkan pengguna untuk mengontrol TV dengan suara, membuatnya lebih mudah dan nyaman digunakan.|Resolui 1920 x 1080 dengan tepi dan detail yang dioptimalkan secara tepat menghaislkan warna yang nyata. Kejelasan visual yang hebat ada dalam jangkauan anda.', 9999000, 4090000, 10, 'L40G7P.png'),
('L40H7', 'Changhong Framless Google certified Android Smart 40 Inch LED TV L40H7', 12, 'CHG', 'Android TV & Android? 11 Pie|Dolby Audio|HDR10, HLG|NETFLIX', 'Size:40', 'Tampilan layar 95%|Led Direct-Lit|HDR 10 dengan kontras tinggi dan detail tajam|Berbagai pengaturan kualitas gambar|Ahli TV Audio siap menyediakan anda kualitas suara superior', 'Tampilan ultra-lebar yang inovatif membenamkan diri anda dalam film dan video|Dibandingkan dengan Led Edge-Lit, Led Direct-Lit memiliki jarak yang sama sehingga cahaya latar tersebut merata di seluruh layar, sehingga memberikan gambar yang tajam dan realistis|TV dilengkapi dengan teknik peguraian kode gambar video HD untuk kualitas gambar yang lebih baik lagi. Gambar yang tajam dan cerah memberikan anda visual yang nyata.|Berbagai fungsi pemrosesan gambar dipadukan dengan debug perangkat lunak profesional meningkatkan pengalaman menonton anda dengan gambar yang lebih realistis|dengan pemahaman yang mendalam tentang audio, teknisi audio dbx-tv Changhong yang berpengalaman secara inovatif menggunakan prosesor sinyal digital(DSP) untuk menyetel dan mengoptimalkan speaker setiap TV, dan menghadirkan kualitas suara yang optimal.', 4899000, 1430000, 10, 'L40H7.png'),
('L43G7P', 'CHiQ Smart tv 43 Inch Newest Android11 Frameless Digital LED TV L43G7P', 12, 'CHG', 'Android TV & Android? 11 Pie|Dolby Audio|HDR10, HLG|NETFLIX', 'Size:43', 'Android 11|built-in WiFi dan LAN|dilengkapi dengan Bluetooth|Chromecast built-in|Remote control dengan voice assistant|Resolusi FHD Penuh', 'memungkinkan akses ke Google Play Store, memungkinkan pengguna untuk menginstal aplikasi favorit mereka dan menonton konten streaming langsung dari TV.|memungkinkan pengguna untuk terhubung ke internet tanpa perlu kabel tambahan.|pengguna dapat menghubungkan perangkat audio nirkabel ke TV untuk pengalaman suara yang lebih baik.|pengguna dapat menampilkan konten dari perangkat seluler mereka di layar TV dengan mudah.|memungkinkan pengguna untuk mengontrol TV dengan suara, membuatnya lebih mudah dan nyaman digunakan.|Resolui 1920 x 1080 dengan tepi dan detail yang dioptimalkan secara tepat menghaislkan warna yang nyata. Kejelasan visual yang hebat ada dalam jangkauan anda.', 15999000, 8000000, 10, 'L43G7P.png'),
('L43H7', 'Changhong Framless Google certified Android Smart 43 Inch LED TV L43H7', 12, 'CHG', 'Android TV & Android? 11 Pie|Dolby Audio|HDR10, HLG|NETFLIX', 'Size:43', 'Tampilan layar 95%|Led Direct-Lit|HDR 10 dengan kontras tinggi dan detail tajam|Berbagai pengaturan kualitas gambar|Ahli TV Audio siap menyediakan anda kualitas suara superior', 'Tampilan ultra-lebar yang inovatif membenamkan diri anda dalam film dan video|Dibandingkan dengan Led Edge-Lit, Led Direct-Lit memiliki jarak yang sama sehingga cahaya latar tersebut merata di seluruh layar, sehingga memberikan gambar yang tajam dan realistis|TV dilengkapi dengan teknik peguraian kode gambar video HD untuk kualitas gambar yang lebih baik lagi. Gambar yang tajam dan cerah memberikan anda visual yang nyata.|Berbagai fungsi pemrosesan gambar dipadukan dengan debug perangkat lunak profesional meningkatkan pengalaman menonton anda dengan gambar yang lebih realistis|dengan pemahaman yang mendalam tentang audio, teknisi audio dbx-tv Changhong yang berpengalaman secara inovatif menggunakan prosesor sinyal digital(DSP) untuk menyetel dan mengoptimalkan speaker setiap TV, dan menghadirkan kualitas suara yang optimal.', 5899000, 3669000, 10, 'L43H7.png'),
('LGDC0.5PK', 'LG DUALCOOL with Watt Control-Eco 0.5PK', 2, 'LG', 'Watt Control; dengan pengaturan 4 opsi konsumsi listrik|Dual Inverter|Compressor yang hemat listrik|Pendinginan Cepat|Auto Cleaning untuk pembersihan bagian dalam dengan otomatis', 'Color:White', 'Watt Control|Hemat Listrik & Peduli Lingkungan|Lebih Cepat Dingin, Lebih Nyaman|Memerangkap Debu Besar Sejak Dari Awal|Auto Cleaning|DUAL Inverter Compressor?', 'Fitur Watt Control membuat Anda dapat melakukan pengaturan konsumsi daya listrik (watt) dalam tiga pilihan tingkatan yang dapat disesuaikan dengan situasi berbeda. Tak perlu lagi mematikan perangkat elektronik lain untuk dapat mengaktifkan AC.|Kurangi konsumsi energi dan tagihan listrik Anda dengan penyejukan yang lebih efisien.|Dapatkan kenyamanan dari udara sejuk yang cepat hadir dengan LG DUAL Inverter Compressor?.|Pre-Filter memerangkap partikel debu besar sebagai garis pertahanan pertama|Secara otomatis mengeringkan embun yang bagian dalam air conditioner untuk memastikannya selalu tetap bersih.|Ditenagai teknologi DUAL Inverter Compressor?.', 4550000, 1100200, 10, 'LGDUALCOOL.png'),
('LHD677', '1000W 4.2Ch. DVD-HTS', 1, 'LG', 'Powerful Sound|Space Saving & Simple Installation|Bluetooth Standby|Wireless Sound Streaming From LG TV', 'Color:Black', 'Powerful Sound|Hemat ruang & instalasi mudah|Bluetooth standby|Nikmati sajian audio lebih baik dari TV anda', 'Dual woofer yang terintegrasi di dalamnya siap memberikan tenaga lebih pada suara yang dihasilkan. Berpadu dengan material kayu pada badan speaker, membuat keluaran suara lebih stabil.|Desainnya yang kompak membuat mudah dalam proses instalasi. tanpa paduan yang rumit dan penataan kabel|Cukup operasikan via smarthphone untuk menikmati musik kesukaan anda. Setiap kali anda mengaktifkan fungsi music app, bluetooth ready speaker otomatis memainkan lagu yang anda pilih.|cukup koneksikan home theater dengan TV LG anda melalui keterhubungan bluetooth dan nikmati tayangan dari TV LG anda dengan suara lebih menggelegar.', 4299000, 800000, 10, 'LHD677.png'),
('M8500XT', '8.5 Kg New Megamouth Series 2.0 ES-M8500XT-SA', 9, 'SHP', 'J-Tech Inverter|Quick Wash Technology|Hijab Pouch & Hijab Program|Anti Bacterial Coating', 'Color:Silver', 'Penghematan Waktu yang Lebih Besar dengan Fitur Quick Wash|Memiliki Penghematan Energi yang Lebih Besar & Proses yang Lebih Tenang dengan Teknologi Jepang|Performa Pencucian Unggul dengan Inovasi Teknologi Biometrik|Dirancang untuk Higinies dan Bersih', 'Dengan fitur baru Quick Wash, Anda dapat mencuci pakaian hanya dalam waktu 20 menit* tanpa mengurangi performa mencuci. Ini dapat meminimalkan durasi mencuci dengan melakukan proses pencucian bersamaan. Hal ini memberikan lebih banyak waktu untuk memanjakan diri Anda.|Dengan J-Tech Inverter, Tabung tanpa Lubang dari Sharp memungkinkan mampu mengontrol kecepatan putaran dengan halus dan efesien. Fitur ini juga secara drastis meningkatkan konsumsi energi dan hemat energi hingga 42%*. J-Tech Inverter mampu meminimalisasi tingkat kebisingan 42dB dalam proses pengeringan dan 31dB dalam proses pencucian. Pekerjaan rumah tangga dapat dilakukan kapan saja sambil orang yang Anda cintai sedang tidur.|Desain inovatifnya berpadu dengan teknologi \'dolphin and whale (lumba-lumba dan paus)\' Permukaan dan penutup mesin cucinya terinspirasi dari tekstur kulit lumba-lumba dan paus yang mampu memperkecil gesekan guna menghasilkan kinerja pencucian yang lebih bersih.|Mesin cuci Sharp memberikan definisi y', 3350000, 0, 10, 'M8500XT.png'),
('M9500XT', '9.5 Kg New Megamouth Series 2.0 ES-M9500XT-SA', 9, 'SHP', 'J-Tech Inverter|Quick Wash Technology|Hijab Pouch & Hijab Program|Anti Bacterial Coating', 'Color:Silver', 'Penghematan Waktu yang Lebih Besar dengan Fitur Quick Wash|Memiliki Penghematan Energi yang Lebih Besar & Proses yang Lebih Tenang dengan Teknologi Jepang|Performa Pencucian Unggul dengan Inovasi Teknologi Biometrik|Dirancang untuk Higinies dan Bersih', 'Dengan fitur baru Quick Wash, Anda dapat mencuci pakaian hanya dalam waktu 20 menit* tanpa mengurangi performa mencuci. Ini dapat meminimalkan durasi mencuci dengan melakukan proses pencucian bersamaan. Hal ini memberikan lebih banyak waktu untuk memanjakan diri Anda.|Dengan J-Tech Inverter, Tabung tanpa Lubang dari Sharp memungkinkan mampu mengontrol kecepatan putaran dengan halus dan efesien. Fitur ini juga secara drastis meningkatkan konsumsi energi dan hemat energi hingga 42%*. J-Tech Inverter mampu meminimalisasi tingkat kebisingan 42dB dalam proses pengeringan dan 31dB dalam proses pencucian. Pekerjaan rumah tangga dapat dilakukan kapan saja sambil orang yang Anda cintai sedang tidur.|Desain inovatifnya berpadu dengan teknologi \'dolphin and whale (lumba-lumba dan paus)\' Permukaan dan penutup mesin cucinya terinspirasi dari tekstur kulit lumba-lumba dan paus yang mampu memperkecil gesekan guna menghasilkan kinerja pencucian yang lebih bersih.|Mesin cuci Sharp memberikan definisi y', 3650000, 0, 10, 'M9500XT.png'),
('MH6565DIS', 'NeoChef? Microwave Grill inverter dengan pemanasan dan defrosting merata kapasitas 25 Liter', 10, 'LG', 'Pemanasan & Defrosting Merata|Pemasakan Cepat|Memasak Berbagai Jenis Makanan & Hasil|Panggangan Lebih Lezat|EasyClean? - Lapisan Interior Anti Bakteri|Kapasitas Besar Dengan Ukuran Kompa', 'Color:Black', 'LG Smart Inverter|Pemanasan & Pencairan Merata|Memasak Cepat|LG Infrared Heating?|Renyah di Luar & Berair di Dalam', 'Setiap hidangan yang Anda siapkan akan terasa lebih enak karena dimasak lebih merata dan menyeluruh, yang akan mengunci rasanya.|Smart Inverter mengontrol suhu dengan tepat untuk memanaskan makanan dan mencairkan es secara merata.|Daya memasak yang mendetail mendistribusikan panas ke berbagai jenis makanan 1,5 kali lebih cepat.|Buat kegiatan memasak Anda menjadi sederhana dan menyenangkan dengan suhu yang sesuai untuk berbagai masakan agar masakan Anda menjadi sehat.|Infrared Heating? membuat hidangan Anda renyah dan berair secara bersamaan di samping mempertahankan aroma dan rasa aslinya.', 2185000, 0, 10, 'MH6565DIS.png'),
('MLG11G', 'Mesin Cuci LG 11kg, Top Loading - Smart Motion dengan Smart Inverter', 9, 'LG', 'Smart Motion|TurboDrum?|Side Waterfall|Smart Inverter', 'Color:Silver', 'TurboDrum?|Smart Diagnosis?|Hemat Listrik dengan Smart Inverter Moto|Auto Restart', 'TurboDrum? memberi performa mencuci terkuat dan membersihkan kotoran paling bandel berkat semprotan deras air pada drum yang berputar dan pulsator dengan arah berlawanan.|Smart Diagnosis? membantu mendiagnosis dan memecahkan masalah mekanis, mengurangi keharusan untuk layanan kunjungan dan perbaikan.|Teknologi Smart Inverter menghilangkan operasi yang tak perlu dengan mengontrol penggunaan energi secara efektif.|Saat mesin cuci mati tiba-tiba ditengah pencucian karena listrik padam, pencucian akan dimulai secara otomatis dari saat mesin cuci berhenti', 4160000, 0, 10, 'MESIN11KG.png'),
('MLG9KG', 'Mesin Cuci LG 9kg, Front Loading AI DD? dengan Steam?, Smart Diagnosis?', 9, 'LG', 'AI DD?|Steam?|Tabung Full Stainless Steel|Kompatibel Dengan TWINWash? Min', 'Color:White', 'AI DD?|Steam?|Tabung Stainless Steel|Kompatibilitas Tersedia dengan TWINWash? Mini|Kapasitas Lebih Besar|Smart Diagnosis', 'Menggunakan big data dari kumpulan pengalaman penggunaan mesin cuci, AI DD? menawarkan performa mencuci paling optimal untuk perawatan pakaian.|Teknologi LG Steam? dapat mengeliminasi 99.9% alergen, seperti debu halus, yang dapat menyebabkan alergi atau masalah pernapasan.|Kelengkapan tabung dengan material stainless steel untuk pencucian higienis dan ketahanan lebih kokoh.|Padukan dengan TWINWash? Mini yang sesuai selera dan kebutuhan desain interior rumah Anda. Hemat waktu dan biaya untuk memudahkan gaya hidup Anda yang sibuk.|Dapatkan kapasitas drum cuci lebih besar dengan dimensi mesin cuci yang sama.|Smart Diagnosis dapat digunakan untuk mengatasi masalah perangkat Anda tanpa harus menghubungi pusat servis.', 9899000, 1650000, 10, 'mesin9kg.png'),
('MS2042DB', 'Microwave Solo dengan i-wave technology pemanasan dan defrosting merata kapasitas 20 Liter', 10, 'LG', 'Memasak lebih cepat dan lebih sehat i-wave technology|Pemanasan dan defrosting merata|Anti Bacteria Cavity|Next Step Guide|Hemat Energi dengan automatic display off', 'Color:Black', 'i-wave|Anti Bacteria Cavity|Next Step Guide|Energy saving', 'Teknologi yang dipatenkan ini memastikan memasak lebih cepat dan lebih sehat dengan mengedarkan gelombang mikro secara merata di dalam microwave.|Mencegah pertumbuhan bakteri penyebab bau tidak sedap di dalam microwave. Pembersihan interior microwave menjadi mudah dan nyaman.|Fitur ini akan membantu Anda menemukan tombol mana yang harus ditekan selanjutnya saat mengoperasikan microwave dengan bantuan teks yang ditampilkan. Tidak perlu repot mengingat tombol mana yang harus ditekan selanjutnya.|Fitur ini membantu Anda menghemat penggunaan listrik dengan automatic display off selama standby mode atau setelah 5 menit dengan pintu terbuka atau tertutup.', 908000, 0, 10, 'MS2042DB.png'),
('NN-SF564W', '27L White Flatbed Inverter Microwave NN-SF564W', 10, 'PNC', 'Kendali daya akurat|Lampu oven LED|Rongga rata dan luas', 'Color:White', 'Penambahan ruang masak|Kendali daya akurat', 'Menggunakan piring dalam segala bentuk dan ukuran berkat desain rata & lebar yang inovatif, memberikan anda area masak 31% lebih luas jika dibandingkan dengan model piring pemutar lainnya.|Teknologi new inverter memungkinkan pemanasan dengan output rendah. Teknologi ini melembutkan makanan keras, es krim beku dan mencairkan makanan dengan lembut seperti coklat dan keju.', 2949000, 0, 10, 'NN-SF564W.png'),
('NN-ST34HMTTE', 'Microwave NN-ST34HMTTE', 10, 'PNC', '800W daya masak|Fungsi cepat 30 detik|Tambahan waktu|9 menu otomatis', 'Color:Black', 'Quick 30 function|Tambahan waktu', 'Dengan fungsi ini, anda dapat mengatur waktu memasak cepat selama 30 detik dan tanpa memilih setelan tambahan lainnya. Setiap tombol ditekan diatur selama 30 detik hingga 5 menit.|Fungsi ini memungkinkan anda untuk menambahkan pemanasan ekstra saat ingin menghangatkan makanan. Dan, anda bisa mengatur waktu pemanasan untuk memberikan hasil yang anda inginkan.', 1729000, 0, 10, 'NN-ST34HMTTE.png'),
('PAS10D28', 'POLYTRON Bluetooth Speaker Aktif Karaoke 10 Inch PAS 10D28', 1, 'PLY', 'Doube Woofer 10 inch|Super Bass|3-Band Digital Tone Control + Preset EQ|Bluetooth Connection + Polytron Audio Connect|USB,SD Card/MMC, Aux, Line Input, 2 Mic Input, Video Out|Power Output: 200 WRMS', 'Color:Black', 'WEIGHT:|DIMENSIONS:|POWER SOURCE:|POWER CONSUMPTION:|AUDIO SYSTEM:|POWER OUTPUT:|SPEAKER SPEC. FRONT - MIDRANGE:|SPEAKER SPEC. FRONT - SYSTEM:|SPEAKER SPEC. FRONT - TWEETER:|SPEAKER SPEC. FRONT - WOOFER:|DIMENSION MAIN UNIT:|DIMENSION (MM) CARTON BOX (WXDXH):', '37.2 kg1|109.5 ? 40.5 ? 84 cm|220V~ 50/60Hz|70 W|2.0 Channel|2 x 100 Watt RMS|1\" 6 Ohm 50 Watt RMS|3-Way, Double Woofer|1\" 6 Ohm 50 Watt RMS|2 X 10\" 8 Ohm 40 Watt RMS|660 x 1015 x 357 mm|1095 x 405 x 840 mm', 3039000, 125000, 10, 'PAS10D28.png'),
('PAS12AF15', 'POLYTRON Bluetooth Speaker Aktif Karaoke 12 Inch PAS 12AF15', 1, 'PLY', 'Single Woofer 12 inch|Super Bass|3-Band Digital Tone Control + Preset EQ|Bluetooth Connection + Polytron Audio Connect|USB, SD Card/MMC, Aux, Line Input, 2 Mic Input|Power Output: 200 WRMS', 'Color:Black', 'WEIGHT:|DIMENSIONS:|POWER SOURCE:|POWER CONSUMPTION:|AUDIO SYSTEM:|POWER OUTPUT:|SPEAKER SPEC. FRONT - MIDRANGE:|SPEAKER SPEC. FRONT - SYSTEM:|SPEAKER SPEC. FRONT - TWEETER:|SPEAKER SPEC. FRONT - WOOFER:|DIMENSION MAIN UNIT:|DIMENSION (MM) CARTON BOX (WXDXH):', '39 kg|81 ? 49 ? 97 cm|220V~ 50/60Hz|80 W|2.0 Channel|2 x 100 Watt RMS|5\" 4? 50 Watt RMS|3-Way, Single Woofer|3\" 4? 50 Watt RMS|12\" 4? 80 Watt RMS|766 x 857 x 351 mm|809 x 485 x 966 mm', 2499000, 150000, 10, 'PAS12AF15.png'),
('PAW9527R', 'POLYTRON Mesin Cuci 1 Tabung Zeromatic series Hijab 9.5 KG ? PAW 9527R', 9, 'PLY', 'Hemat listrik, air dan detergen hingga 30%|Hijab di jamin lembut, awet dan bersih|Cukup satu tombol cucian beres seketika', 'Color:Red', 'Weight:|Power comsumption:|Size:|Voltage input:|Spin speed:|Dimensions:', '39.5 kg|330 Watt|9 Kg|220V / 50Hz|150 RPM (wash); 750 RPM (spin)|64.6 ? 65.4 ? 104 cm', 2982000, 263000, 10, 'PAW9527R.png'),
('PCF218', 'POLYTRON FREEZER 200 LTR PCF-218', 7, 'PLY', 'Super Freeze|CFC - Free|Quick Cooling|Energy Saving|Low Voltage', 'Capacity(L):200', 'Temp control:|Defrosting:|Refigerant:|Dimensions width(Net/Packing):|Depth(Net/Packing):|Height(Net/Packing):|Weight(Net / Gross):', 'Manual|R600|980mm/1010mm|560mm/582mm|845mm/885mm|38kg/41kg', 2900000, 50000, 10, 'PCF218.png'),
('PCF318', 'POLYTRON FREEZER 300 LTR PCF-318', 7, 'PLY', 'Super Freeze|CFC - Free|Quick Cooling|Energy Saving|Low Voltage', 'Capacity(L):300', 'Temp control:|Defrosting:|Refigerant:|Daya:|Dimensions unit (WxDxH):|Weight:', 'Mechanical|Manual|R600a|130 Watt|1055 x 735 x 835 mm|52Kg', 3939000, 560000, 10, 'PCF318.png'),
('PFL8105H', 'Mesin Cuci Front Loading inverter 100% kering Polytron Wonderwash Washer Dryer 8 KG ? PFL 8105H', 9, 'PLY', '2 in 1|Steam wash|Add wash|Inverter', 'Color:White', 'Power comsumption:|Size:|Voltage input:|Temperature:|Spin speed:', '500 Watts Spin, 110 Watts Dry|8 Kg|220-240Vac / 50 Hz|COLD /30/40/60/90|600/800/1000/1200/No Spin', 5899000, 650000, 10, 'PFL8105H.png'),
('PLD32CV1869', 'POLYTRON SMART LITE DIGITAL TV 32? PLD 32CV1869', 12, 'PLY', 'Digital TV (DVB-T2)|Tampilkan di layar TV dengan fungsi screen mirorring|Free akses Mola 12 bulan dan Free akses Vidio Platinum 12 bulan|Mengakes aplikasi Mola, Youtube, Prime Video, Vidio', 'Size:32', 'Weight:|Dimensions:|Resolution:|Real contrast ration:|DIMENSION (MM) WITH BASE/STAND (WXDXH):|DIMENSION (MM) WITHOUT BASE/STAND (WXDXH):|DIMENSION (MM) CARTON BOX (WXDXH):', '42 kg|82 ? 14 ? 51 cm|1366 x 768 (HD Ready)|3000:1|763(W)x207(D)x497(H)|741(W)x95(D)x443(H)|811(W)x135(D)x510(H)', 2699000, 200000, 10, 'PLD32CV1869.png'),
('PLD65UV5920', 'Polytron Smart TV 4K UHD HDR ? PLD 65UV5920', 12, 'PLY', 'High Dyamic Range 10|4K Upscalling dan 4K Upstreaming|Soundwave (transmit audio)|Digital TV (DVB -T2)|Netflix, Youtube, Prime Video', 'Size:65', 'Weight:|Dimensions:|Resolution:|Real contrast ration:|DIMENSION (MM) WITH BASE/STAND (WXDXH):|DIMENSION (MM) PRODUCT (WXDXH):|DIMENSION (MM) CARTON BOX (WXDXH):', '13.9 kg|123.8 ? 7 ? 71.5 cm|3840 x 2160 (UHD)|3000:01:00|963(W)x213(D)x615(H)|342 x 330 x 333|385 (W)x 385 (D)x 399 (H)', 11990000, 500000, 10, 'PLD65UV5920.png'),
('PRS460B', 'Kulkas Side By Side Polytron 2 Pintu New Belleza Inverter ? PRS 460B', 6, 'PLY', 'Inverter Technology|Deodorizer|Dual Controller System|Tropical Cooling System', 'Capacity(L):480', 'Compressor:|Handle type:|Power input:|Voltage input:|Refigerant:|Gross weight/Net weight(kg):|Dimensi paket(mm):', 'Inverter|Recess Handle|120 Watt|220 V / 50 Hz|R600a|91/82|836x636x1780', 8099000, 500000, 10, 'PRS460B.png'),
('PRS510X', 'Kulkas POLYTRON New Belleza Inverter 4 pintu Side by side PRS 510X', 6, 'PLY', 'Inverter Technology|Deodorizer|Dual Controller System|Tropical Cooling System', 'Capacity(L):460', 'Compressor:|Handle type:|Power input:|Voltage input:|Refigerant:|Gross weight/Net weight(kg):|Dimensi paket(mm):', 'Inverter|Recess Handle|120 Watt|220 V / 50 Hz|R600a|104/94|911x706x1830', 9559000, 600000, 10, 'PRS510X.png'),
('Q725', 'TCL 43\" Q725 4K QLED Google Smart Dolby Vision & Atmos TV', 12, 'TCL', 'Google TV - Personalisasi Entertainment Favoritmu|Dolby Vision & Dolby Atmos|4K UHD dengan Dolby Vision & Atmos|Tampilan lebih dinamis|Dilengkapi dengan HDMI 2.1', 'Size:73', '4K QLED|Dolby Vision|HDR 10+|MEMC membuat proses gambar menjadi lebih halus|AiPQ Engine|Dolby Atmos|ONKYO|Google TV|Handsfree Voice Control', 'Konten Ultra-High Definition disaring melalui sebuah lapisan dari 1 miliyar Quantum Dot nanocrystals. Layar 4K yang memukau ditingkatkan dengan penambahan High Dynamic Range terbaru. Nikmati gambar yang hidup dan sempurna-dengan 100% + volume warna terdepan.|Menghadirkan sinematik visual di rumah dengan teknologi Dolby Vision. Dolby Vision menyempurnakan tampilan konten ekslusif Dolby, menampilkan lebih banyak warna, meningkatkan kontras, dan menambah tingkat kecerahan.|HDR10+ mengoptimalkan gambar bingkai demi bingkai, meningkatkan batas saturasi warna, dan menaikkan kontras sehingga film dan game akan terlihat lebih maksimal.|Kecerdasan algoritma yang menghadirkan refresh rate 60 fps menampilkan hiburan resolusi tinggi dalam kecepatan asli, atau meningkatkan kualitas frame konten yang masih rendah. Jangan pernah melewatkan detail dalam video gerak cepat.|TCL algoritma yang dapat memproses konten secara real time dan meningkatkan kualitas gambar. AiPQ mengoptimalkan gambar sesuai kont', 9999000, 4500000, 10, 'Q725.png'),
('R-728', '25 Liter Stylish Designed Microwave Oven R-728(S)-IN', 10, 'SHP', 'Compact Grill Microwave Oven|5 Power Levels|Kitchen Timer|8 Auto Programmes', 'Color:Grey', 'Capacity:|Output:|Power source:|Unit:', '25 L|Micro : 900 W , Grill : 1000 W|228 - 240 Volt|514 (w) x 308 (h) x 429 (d) mm', 1500000, 201000, 10, 'R-728.png'),
('R-735MT', '25 Liter Microwave Oven R-735MT-K', 10, 'SHP', 'Top Handle|Grill Microwave Oven|Big Capacity|Mirroring Glass Door|Eco Mode', 'Color:Black', 'Capacity:|Output:|Power source:|Unit:', '25 L|Micro : 900 W , Grill : 1000 W|231 - 240 Volt|330 x 369 x 208 mm', 1700000, 250000, 10, 'R-735MT.png'),
('RB1280UBL', 'CBOX-RB1280UBL', 1, 'SHP', 'PMPO 22.000 W|Kevlar Design with Carbon Finishing|Bluetooth Function|FM Radio|USB & SD Card Slot', 'Color:Black', 'MODEL:|Speaker Type:|Woofer:|Midrange:|Tweeter:|Mic Control:|Power Supply:', 'Active Speaker Carbon Texture Design|3-way speaker system1|12\"|5\"|1\"|Mic Volume, ECHO|AC 220 Volt, 50 / 60 Hz', 2239000, 289000, 10, 'CBOX-RB1280UBL.png'),
('RS62T5F01B4/SE', '681L KulkasSide By Side Family HubTM', 8, 'SMG', 'Family Hub™|View inside|Family board|Recipes & Meal Planner', 'Color:Black', 'Family Board|Morning Brief (Info Cuaca, Pengingat Makanan, Kalender, Berita)*|Calendar|Momo, To-do, Gallery|Trivia|SmartView|TuneIn/Spotify (Musik & Radio)|Internet|View Inside|Recipes & Meal Planner|Shopping List|New Bixby|Panggilan Via Bluetooth|SmartThings and Ring|SpaceMax Technology™|Built-in Look', 'Lengkapi suasana keluarga Anda dengan berbagai cerita, pesan, momen spesial bahkan video di Family Board. Nikmati berbagai kemudahan untuk menampilkan foto, klip video, memasang stiker, menggambar, mengetik/menulis catatan dengan tangan, berbagi jadwal dan tautan situs web, atau memainkan musik di Kulkas FamilyHub.|Tetap up-to-date dengan informasi penting! Fitur Morning Brief akan menampilkan ramalan cuaca, pengingat makanan, dan kalender di layar kulkas Anda. Dengan menggunakan pengenalan suara New Bixby yang akan mengidentifikasi siapa yang berbicara dan menampilkan informasi yang relevan.|Kalender memungkinkan Anda untuk berbagi dan up to date dengan jadwal anggota keluarga anda. Anda dapat menambahkan jadwal di kulkas atau menyinkronkan jadwal dengan kalender Google dan Microsoft 365 melalui smartphone Anda. Jadi Anda tidak akan melupakan tanggal-tanggal penting|Nikmati cara yang sangat menyenangkan dan efektif untuk berkomunikasi dengan keluarga. Anda dapat menggunakan Aplikasi M', 30480000, 0, 10, 'new-product1.jpg'),
('S056FX', 'Washer Dryer Front Load 10.5kg / 6kg NA-S056FX1LN', 9, 'PNC', 'Ag blue|Stain master+|Active foam system|Ai smart wash', 'Color:Silver', '99.99% Perawatan Higienis Perlindungan Ekstra untuk Bayi Anda|Penghilangan Alergen & Noda untuk Bayi Anda|Busa Padat untuk Mengangkat Noda dengan Mudah|Menjaga kebersihan tabung Anda|AI Smart Wash ? Perawatan Cerdas untuk Pakaian Anda|Pencucian Cepat, hanya dengan 38 Menit|Waser Dryer untuk seluruh kebutuhan', 'Teknologi Blue Ag+ menghilangkan 99.99%*1 bakteri dan memberikan efek antibakteri yang kuat melalui sinar UV dan ion Ag pada siklus pencucian biasa.|StainMaster+ melindungi bayi dari alergi. Mudah menghilangkan noda, bakteri, tungau debu dan penyebab alergi dengan pencucian air panas (sampai suhu 90?C)|Sistem ActiveFoam menghasilkan busa padat yang menembus ke serat kain terdalam untuk mengangkat noda dan memastikan hasil yang lebih bersih|Fungsi Auto Tub Care secara otomatis membersihkan tub setiap pencucian, mencegah penumpukan sisa deterjen yang menyebabkan jamur dan bau busuk|Sensor Pintar secara cerdas mendeteksi kondisi cucian dan menyesuaikan pola pencucian dengan kebutuhan pencucian, menghasilkan kinerja pencucian yang optimal|Active Speed Wash memberikan kinerja pencucian optimal hanya dengan 38 menit dengan busa padat. Menghemat waktu, dengan begitu Anda bisa fokus untuk melakukan pekerjaan lainnya.|Dapat memilih program dan biarkan mesin cuci bekerja, dari pencucian hingga p', 12999000, 0, 10, 'S056FX.png'),
('SC-TMAX20GSK', 'Wireless Speaker System SC-TMAX20GSK', 1, 'PNC', 'Amazing Sound Pressure|Amazing Function for Party|Easy Carry & Compact Design', 'Color:Black', 'Amazing bass sound pressure|Booming bass that will shake the ground', 'Output bertenaga 1200W (RMS 30%) dengan total lima speaker termasuk super woofer 20cm dan dual drive yang dilengkapi dengan airquake bass untuk meningkatkan bass lebih mendalam. TMAX40 juga dilengkapi dengan fitur-fitur untuk memenuhi semua kebutuhan pesta anda, seperti DJ play, full karaoke, dan MAX dance illumination. TMAX40 menghidupkan rumah anda, berpesta hingga maksimal.|ingin merasakan musik dibawah kaki anda?? semua tentang airquake bass! Bass dan resonansi yang kuat untuk memenuhi kebutuhan pesta dengan bass reflex system yang unik. Teknologi porta yang unik meningkatkan suara tanpa kehilangan resonansi suara yang dihasilkan dari bagian belakang unit woofer. ini semakin memperkuat bass untuk menghasilkan suara yang luar biasa bertenaga.', 5999000, 0, 10, 'SC-TMAX20GSK.png'),
('SC-TMAX40GSK', 'SC-TMAX40GSK', 1, 'PNC', 'Amazing Sound Pressure|Amazing Function for Party|Jukebox Request using MAX Juke App', 'Color:Black', 'Amazing bass sound pressure|Booming bass that will shake the ground|Be the life of the asty with MAX juka app', 'Output bertenaga 1200W (RMS 30%) dengan total lima speaker termasuk super woofer 20cm dan dual drive yang dilengkapi dengan airquake bass untuk meningkatkan bass lebih mendalam. TMAX40 juga dilengkapi dengan fitur-fitur untuk memenuhi semua kebutuhan pesta anda, seperti DJ play, full karaoke, dan MAX dance illumination. TMAX40 menghidupkan rumah anda, berpesta hingga maksimal.|Output bertenaga 1200W (RMS 30%) dengan total lima speaker termasuk super woofer 20cm dan dual drive yang dilengkapi dengan airquake bass untuk meningkatkan bass lebih mendalam. TMAX40 juga dilengkapi dengan fitur-fitur untuk memenuhi semua kebutuhan pesta anda, seperti DJ play, full karaoke, dan MAX dance illumination. TMAX40 menghidupkan rumah anda, berpesta hingga maksimal.|ingin menjadi DJ keren di pesta sendiri? MAX juke app dari panasonic akan membawa pesta anda ke level berikutnya. Aplikasi yang mudah digunakan ini terhubung via teknologi wireless bluetooth. Dilengkapi dengan berbagai fungsi untuk memperlu', 4598000, 0, 10, 'SC-TMAX40GSK.png'),
('SN5Y', 'LG Sound Bar SN5Y', 1, 'LG', 'DTS Virtual : X|2.1 ch|Audio Resolusi Tinggi|AI Sound Pro', 'Color:Black', 'DTS Virtual : X|2.1 ch|Audio Resolusi Tinggi|AI Sound Pro|Konektivitas', 'LG Sound Bar SN5Y berkolaborasi dengan DTS Virtual:X untuk mengubah rumah Anda menjadi bioskop. Memberikan pengalaman menonton yang menghanyutkan untuk semua film favorit Anda.|LG Sound Bar SN5Y mendukung koneksi nirkabel untuk output 4.1 ch sehingga Anda dapat menonton TV dengan kualitas suara paling imersif.|Audio Resolusi Tinggi memberikan sampling rate 96kHz dan kualitas depth 24bit demi menghasilkan suara lebih akurat dan menambah kenikmatan mendengarkan audio.|AI Sound Pro otomatis menganalisis konten untuk langsung mengoptimalkan pengaturan audio agar sesuai dengan apa yang sedang diputar. Dapatkan setiap detailnya dengan dialog super jernih dan adegan aksi lebih seru, bergantung genre-nya.|Tambahkan koneksi Bluetooth? ke dalam pengaturan audio Anda atau sambungkan dan putar lebih mudah menggunakan kabel optik atau HDMI.', 6844000, 262000, 10, 'SN5Y.png'),
('TCL210L', 'TCL Fast Freezing Chest Freezer 210L', 7, 'TCL', 'Super freezing|Storage basket|LED light|Suitable for freezing stock|Front water disposal', 'Capacity(L):210', 'Super freezing|Storage basket|LED light|Suitable for freezing stock|Front water disposal', 'Sistem pendinginan yang cepat untuk makanan yang tersimpan. Sehingga makanan tetap terjaga(awet) dan segar sejak awal dimasukkan ke freezer|Membuat ruang penyimpanan pada freezer menjadi lebih rapi dan efisien. Sehingga jumlah bahan makanan yang disimpan lebih banyak.|Memberikan pencahayaan yang optimal yang memudahkan pengguna pada saat mencari bahan makanan yang telah disimpan.|Cocok untuk bebagai jenih bahan makanan tanpa mengurangi kualitas, sehingga bahan makanan yang disimpan bisa tetap segar.|Fitur ini mencegah terjadinya kontak langsung air dengan perangkat kelistrikan di sekitarnya, pada saat pengguna membersihkan unit.', 3399000, 1100000, 10, 'TCL100L.png');
INSERT INTO `tbl_produk` (`kode_produk`, `nama_produk`, `id_kategori`, `kode_merk`, `fitur`, `info_tambahan`, `deskripsi_topik`, `deskripsi`, `harga_awal`, `diskon`, `jumlah_produk`, `gambar`) VALUES
('TCL43Q72', 'TCL 43\" Q725 4K QLED Google Smart\r\nDolby Vision & Atmos TV', 12, 'TCL', 'Google TV - Personalisasi Entertainment Favoritmu|Dolby Vision & Dolby Atmos|4K UHD dengan Dolby Vision & Atmos|Tampilan lebih dinamis', 'Size:43', 'Desain minimalis|Resolusi 4K|HDR 10+|MEMC\n', 'TCL 43Q725 mengusung desain minimalis, serta bingkai tipis berbahan logam. Ideal untuk diletakkan di kamar, hingga ruang tamu|Layar 4K (3.840 x 2.160 piksel) dan HDR 10+ TV tersebut sudah mendukung Quantum dot display, diklaim bisa menghasilkan cahaya merah, hijau, dan biru monokromatik murni sehingga menghasilkan volume warna lebih baik. Sebagai gambaran, rentang normal LED UHD adalah 70%-80 % warna dalam layar. Sedangkan QLED di layar TCL 43Q725 menampilkan hampir 100% saturasi warna DCI P3.|Teknologi HDR 10+ di layar TV 4K 43Q725 diklaim bisa mengoptimalkan kualitas gambar di layar UHD 4K. Terutama dalam kecerahan, saturasi warna, dan kontras. ”HDR10+ akan menyesuaikan tingkat kecerahan lebih akurat. Mencapai 4.000 nits berdasarkan adegan-demi-adegan atau frame-demi-frame dan mendukung kedalaman warna hingga 10-bit,”|Seri QLED Google TV ini memakai teknologi pemrosesan gambar bergerak MEMC (Motion Estimation Motion Compensation). Teknologi itu diklaim memastikan gambar dan suara leb', 5499000, 0, 15, 'new-product2.webp'),
('TH-55JZ1000G', 'TH-55JZ1000G 55 inch, OLED, 4K HDR Smart TV', 12, 'PNC', 'Dolby Atmos & Dolby Vision|Master Hdr|HCX Processor|360?|Big Screen 4K OLED', 'Size:55', 'See it all. Feel it all.|Spectacular cinematic picture performance|Feel the drama unfold with cinematic sound|The intelligent way to a great picture experience|Optimal brightness and colour - in all conditions|Picture perfection for every lighting condition|Home cinema as the director intended, in any light|Intuitive Smart TV|Your life in harmony with your television|Talk to Speaker|Gaming with stunning speed, resolution and motion|Smooth action gaming on the big OLED screen', 'Disini. Sekarang. Yang biasa menjadi sinematik. Ini lebih dari sekadar menonton pertunjukan. Ini tentang terpesona. Dibuat oleh pembuat film profesional, hanya TV Android 4K OLED kami yang menghadirkan gambar menakjubkan yang benar-benar membuat Anda takjub. Dengan suara surround 3D untuk membangkitkan semua indera, seolah-olah Anda berada di sana dalam adegan film. Semua teknologi kami dibuat untuk bergerak dan menginspirasi?mengubah keseharian menjadi sinematik.|Master HDR OLED Panel - TV 4K kami dengan Master HDR OLED Panel mampu menghasilkan warna hitam halus yang lebih dalam untuk nuansa yang lebih sinematik, daripada sebelumnya. Semua berkat puluhan tahun yang dihabiskan untuk membuat televisi berkualitas tinggi, masukan dari ahli warna Hollywood terkemuka dan HCX Pro AI Processor baru kami.|Dolby Atmos? - Sistem audio yang mendukung gambar yang bagus untuk membawa Anda dari sofa ke jantung film. Speaker terintegrasi dan pemrosesan audio bekerja sama dengan teknologi Dolby Atmos?', 29633000, 6802000, 10, 'TH-55JZ1000G'),
('TH-55JZ950G', 'TH-55JZ950G 55 inch, OLED, 4K HDR Smart TV', 12, 'PNC', 'Dolby Atmos & Dolby Vision|Chromecast built-in?|4K Colour Engine|Android Tv|Multi HDR Format', 'Size:55', 'See it all. Feel it all.|Get more from your TV|Feel the drama unfold with cinematic sound|Put your small screen on your big screen|Optimal brightness and colour - in all conditions|True-to-life picture quality|Beautiful & accurate colours|Stylishly sleek, maximized viewing pleasure', 'Disini. Sekarang. Yang biasa menjadi sinematik. Ini lebih dari sekadar menonton pertunjukan. Ini tentang terpesona. Dibuat oleh pembuat film profesional, hanya TV Android 4K OLED kami yang menghadirkan gambar menakjubkan yang benar-benar membuat Anda takjub. Dengan suara surround 3D untuk membangkitkan semua indera, seolah-olah Anda berada di sana dalam adegan film. Semua teknologi kami dibuat untuk bergerak dan menginspirasi?mengubah keseharian menjadi sinematik.|Android TV - Sederhanakan pengalaman hiburan Anda dengan Android TV. Temukan 400.000+ film dan acara di satu tempat. Minta Asisten Google untuk mengontrol TV Anda dengan suara Anda.|Dolby Atmos? - Sistem audio yang mendukung gambar yang bagus untuk membawa Anda dari sofa ke jantung film. Speaker terintegrasi dan pemrosesan audio bekerja sama dengan teknologi Dolby Atmos? untuk menghadirkan suara yang luar biasa - meningkatkan hiburan ke level baru.|Beralih dari ponsel, tablet, atau laptop ke TV Anda dalam sekejap. Dengan Chro', 26561000, 8805000, 10, 'TH-55JZ950G.png'),
('TWA85', 'TCL 8KG TWA85-20GM Top Loading Mesin Cuci', 9, 'TCL', 'Honeycomb crystal drum|Auto drum clean|Eight wash program|Bentuk dan warna mewah', 'Color:White', 'Honeycomb crystal drum|Auto Drum Clean|Eight Wash Program|Dual Detergent Case', 'Drum dirancang sedemikian rupa sehingga tabungnya yang halus dan berbentuk sarang lebah menawarkan pencucian yang lembut namun menyeluruh untuk pakaian halus Anda.|Fungsi Auto Drum Clean memastikan bahwa mesin cuci tetap segar dan bersih tanpa menggunakan bahan kimia eksternal. lni juga memastikan bahwa kain Anda juga keluar segar dan bersih setelah dicuci.|Program pencucian meliputi fungsi Blanket (Selimut) Quick (Cepat),Curtain(Gorden), Drum Dry (Pengeringan Drum), Baby (Baju Bayi),Drum Clean(Pembersih Drum), Standard dan Delicate(Berbahan Halus) yang memastikan pengalaman mencuci yang bebas repot.|Kotak deterjen ganda menawarkan kebebasan untuk menggunakan deterjen pilihan Anda baik itu deterjen cair atau deterien bubuk.', 2300000, 0, 10, 'TWA85.png'),
('U50G7PF', 'LED TV CHIQ U50G7PF 50\" 4K UHD SMART ANDROID 11 HDR HANDS FREE', 12, 'CHG', 'Android TV & Android? 9 Pie|Dolby Vision & Dolby Audio|4K, HDR10, HLG|NETFLIX', 'Size:50', 'Ukuran layar:|Resolusi:|Teknologi HDR:|Tingkat Penyegaran:|UNIT(dengan dudukan):|UNIT(tanpa penyangga):|Dimensi karton:', '50\"|3840 X 2160|HDR10, Dolby Vision|60 Hz|1117*274*703mm|1116.8*92.8*716.9mm|1250*150*720mm', 11999000, 5599001, 10, 'U50G7PF.png'),
('U50H7', 'Changhong Framless Android 9.0 4K UHD Smart TV 50Inch LED TV-U50H7', 12, 'CHG', 'Android TV & Android? 9 Pie|Dolby Vision & Dolby Audio|4K, HDR10, HLG|NETFLIX', 'Size:50', 'Tampilan layar Penuh|4K UHD TV|Saluran ganda Dolby Vision dan HDR10|Kecepatan lebih cepat|GPU mali 470 yang dilengkapi dengan CPU triple core|AndroidTV|Berbagi layar, hiburan layar lebar|Google Asistant di TV', 'Tv mengadopsi desain tapa bingkai, sehingga meminimalkan bingkai yang mengganggu pandangan saat menonton pertandingan|TV 4K tanpa bingkai tidak hanya memperluas bidang pandang hingga ke tepi panel, tetapi juga menghidupkan gambar dengan detail yang luar biasa dan warna yang hidup|TV dilengkapi dengan chip grafis baru yang mendukung Dolby Vision dan dekode ganda Video HDR untuk kualitas gambar yang lebih tinggi. Gambar yang tajam dan cerah memberikan anda visual yang nyata|Didukung oleh teknologi skala nano mutakhir, CPU A53 memberikan kinerja luar biasa dan dapat dengan mudah mendekode aliran video yang dikodekan dalam berbagai format. Memori yang besar hingga 8GB memungkinkan anda untuk menginstall berbagai macam aplikasi.|Performa tinggi memungkinkan pengkodean dengan mudah dari game google play yang banyak dimainkan. Warna diproses menjadi lebih tajam dan lebih realistis, memberi anda pengalaman bermain game yang memukau di layar lebar. Rasio efisiensi energi meningkat secara signif', 4898000, 380000, 10, 'U50H7.png'),
('U55G7PF', 'LED TV CHIQ U55G7PF 55\" 4K UHD SMART ANDROID 11 HDR HANDS FREE', 12, 'CHG', 'Android TV & Android? 9 Pie|Dolby Vision & Dolby Audio|4K, HDR10, HLG|NETFLIX', 'Size:55', 'Ukuran layar:|Resolusi:|Teknologi HDR:|Tingkat Penyegaran:|UNIT(dengan dudukan):|UNIT(tanpa penyangga):|Dimensi karton:', '50\"|3840 X 2160|HDR10, Dolby Vision|60 Hz|1231*274*768mm|1230.9*92.6*716.9mm|1380*190*835mm', 13999000, 4520000, 10, 'U55G7PF.png'),
('U55H7', 'Changhong Framless Android 9.0 4K UHD Smart TV 55Inch LED TV-U55H7', 12, 'CHG', 'Android TV & Android? 9 Pie|Dolby Vision & Dolby Audio|4K, HDR10, HLG|NETFLIX', 'Size:55', 'Tampilan layar Penuh|4K UHD TV|Saluran ganda Dolby Vision dan HDR10|Kecepatan lebih cepat|GPU mali 470 yang dilengkapi dengan CPU triple core|AndroidTV|Berbagi layar, hiburan layar lebar|Google Asistant di TV', 'Tv mengadopsi desain tapa bingkai, sehingga meminimalkan bingkai yang mengganggu pandangan saat menonton pertandingan|TV 4K tanpa bingkai tidak hanya memperluas bidang pandang hingga ke tepi panel, tetapi juga menghidupkan gambar dengan detail yang luar biasa dan warna yang hidup|TV dilengkapi dengan chip grafis baru yang mendukung Dolby Vision dan dekode ganda Video HDR untuk kualitas gambar yang lebih tinggi. Gambar yang tajam dan cerah memberikan anda visual yang nyata|Didukung oleh teknologi skala nano mutakhir, CPU A53 memberikan kinerja luar biasa dan dapat dengan mudah mendekode aliran video yang dikodekan dalam berbagai format. Memori yang besar hingga 8GB memungkinkan anda untuk menginstall berbagai macam aplikasi.|Performa tinggi memungkinkan pengkodean dengan mudah dari game google play yang banyak dimainkan. Warna diproses menjadi lebih tajam dan lebih realistis, memberi anda pengalaman bermain game yang memukau di layar lebar. Rasio efisiensi energi meningkat secara signif', 9999000, 4090000, 10, 'U55H7.png'),
('U65H7', 'Changhong Framless Android 9.0 4K UHD Smart TV 65Inch LED TV-U65H7', 12, 'CHG', 'Android TV & Android? 9 Pie|Dolby Vision & Dolby Audio|4K, HDR10, HLG|NETFLIX', 'Size:65', 'Tampilan layar Penuh|4K UHD TV|Saluran ganda Dolby Vision dan HDR10|Kecepatan lebih cepat|GPU mali 470 yang dilengkapi dengan CPU triple core|AndroidTV|Berbagi layar, hiburan layar lebar|Google Asistant di TV', 'Tv mengadopsi desain tapa bingkai, sehingga meminimalkan bingkai yang mengganggu pandangan saat menonton pertandingan|TV 4K tanpa bingkai tidak hanya memperluas bidang pandang hingga ke tepi panel, tetapi juga menghidupkan gambar dengan detail yang luar biasa dan warna yang hidup|TV dilengkapi dengan chip grafis baru yang mendukung Dolby Vision dan dekode ganda Video HDR untuk kualitas gambar yang lebih tinggi. Gambar yang tajam dan cerah memberikan anda visual yang nyata|Didukung oleh teknologi skala nano mutakhir, CPU A53 memberikan kinerja luar biasa dan dapat dengan mudah mendekode aliran video yang dikodekan dalam berbagai format. Memori yang besar hingga 8GB memungkinkan anda untuk menginstall berbagai macam aplikasi.|Performa tinggi memungkinkan pengkodean dengan mudah dari game google play yang banyak dimainkan. Warna diproses menjadi lebih tajam dan lebih realistis, memberi anda pengalaman bermain game yang memukau di layar lebar. Rasio efisiensi energi meningkat secara signif', 15999000, 8000000, 10, 'U65H7.png'),
('U75F8T', 'CHANGHONG U75F8T LED 4K UHD ANDROID TV 75 INCH', 12, 'CHG', 'Android TV & Android? 11 Pie|Dolby Vision & Dolby Audio|4K, HDR10, HLG|NETFLIX', 'Size:75', 'Android 11|Google Assistant di TV|Processor 4+2 untuk performa kuat kecepatan lebih dan gambar mulus|Port HDMI 2.1 baru', 'Tv Android bersertifikat, Dapatkan akses ke google play store agar dapat mengunduh ribuan aplikasi, game, film tayangan acara dan musik populer sesuai keinginan anda|Dengan cepat mengakses hiburan, mendapatkan jawaban di layar, mengontrol perangkat cerdas, dan banyak lagi menggunakan suara anda. tekan tombol Google Asistant di remote anda untuk memulai|Di dukung oleh teknologi skala nano tercanggih, CPU quad-core dan GPU Dual-core memberikan peforma luar biasa dan memungkinkan penguraian kode video dan game yang dikodekan dalam berbagai format dengan mudah.|TV kompatibel dengan konsol generasi berikutnya. Layarnya tidak akan berhenti meskipun input sinyal tingkat tinggi, dan game anda tidak pernah selancar ini.', 20999000, 6550000, 10, 'U75F8T.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_pengenal` int(11) NOT NULL,
  `kode_transaksi` varchar(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_produk` text NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `harga` bigint(11) NOT NULL,
  `pengiriman` text NOT NULL,
  `status_transaksi` text NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_pengenal`, `kode_transaksi`, `id_user`, `nama_produk`, `jumlah_produk`, `harga`, `pengiriman`, `status_transaksi`, `tanggal`) VALUES
(0, '', 1, 'Air Purifier AX60R 60?;Air Purifier AX40R 40m2        ', 4, 17154000, 'a', 'dikirim', NULL),
(1, 'baca', 1, '11Kg Mesin Cuci dengan QuickDrive™, Add Wash™ dan Super Speed;21 kg Front Load Washer + Dryer dengan Ecobubble™, AI Wash, &amp', 1, 32814000, 'cargo', 'dikirim', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` text NOT NULL,
  `status_acc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `email`, `password`, `level`, `status_acc`) VALUES
(1, 'cecilia@gmail.com', 'admin1', 'admin', 'aktif'),
(2, 'edrick@gmail.com', 'admin2', 'admin', 'aktif'),
(3, 'etthanne@gmail.com', 'admin3', 'admin', 'aktif'),
(4, 'user1@gmail.com', 'sayauser1', 'user', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_abal`);

--
-- Indexes for table `tbl_catalog`
--
ALTER TABLE `tbl_catalog`
  ADD PRIMARY KEY (`id_catalog`);

--
-- Indexes for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_data_user`
--
ALTER TABLE `tbl_data_user`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_merk`
--
ALTER TABLE `tbl_merk`
  ADD PRIMARY KEY (`kode_merk`);

--
-- Indexes for table `tbl_pengiriman`
--
ALTER TABLE `tbl_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_pengenal`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_abal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_catalog`
--
ALTER TABLE `tbl_catalog`
  MODIFY `id_catalog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_contact_us`
--
ALTER TABLE `tbl_contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_data_user`
--
ALTER TABLE `tbl_data_user`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
