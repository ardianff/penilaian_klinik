-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 12:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penilaian_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` int(20) NOT NULL,
  `kode_anggota` varchar(100) NOT NULL,
  `nama_anggota` varchar(200) NOT NULL,
  `nip_anggota` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `kode_anggota`, `nama_anggota`, `nip_anggota`) VALUES
(22, 'DKK00001', 'dr. Noegroho Edy Rijanto, M.Kes', '197110202002121006'),
(23, 'DKK00002', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', '198402192005011003'),
(26, 'DKK00003', 'Suryati, S.KM', '198111022009032003');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deskripsi_penilaian_pratama`
--

CREATE TABLE `tbl_deskripsi_penilaian_pratama` (
  `id_deskripsi` int(20) NOT NULL,
  `id_group` int(20) NOT NULL,
  `kriteria_penilaian_pratama` varchar(200) NOT NULL,
  `jumlah_minimal_penilaian_pratama` varchar(100) NOT NULL,
  `satuan_penilaian_pratama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_deskripsi_penilaian_pratama`
--

INSERT INTO `tbl_deskripsi_penilaian_pratama` (`id_deskripsi`, `id_group`, `kriteria_penilaian_pratama`, `jumlah_minimal_penilaian_pratama`, `satuan_penilaian_pratama`) VALUES
(1, 1, 'Baki logam tempat alat steril', 'RJ : 2, RI : 3', 'Buah'),
(2, 1, 'Bingkai dan lensa uji-coba untuk pemeriksaan refraksi', 'RJ : 1, RI : 1', 'Set'),
(3, 1, 'Buku ishihara tes', 'RJ : 1, RI : 1', 'buah'),
(4, 1, 'Corong telinga/spekulum telinga ukuran kecil,besar,sedang', '', ''),
(5, 1, 'Nierbeken Besar', 'RJ : 1, RI : 1', 'buah'),
(6, 1, 'Garputala 512 Hz,1024 Hz, 2084 Hz', 'RJ : 1, RI : 1', 'Set'),
(7, 1, 'Handle dan kaca nasopharing', 'RJ : 1, RI : 1', 'Set'),
(8, 1, 'Kaca Pembesar', 'RJ : 1, RI :1', 'Buah'),
(9, 1, 'Lampu Kepala', 'RJ : 1, RI : 1', 'Buah'),
(10, 1, 'Lampu Senter', 'RJ : 1, RI : 1', 'Buah'),
(11, 1, 'Metline', 'RJ : 1, RI : 1', 'Buah'),
(12, 1, 'Opthalmoscop', 'RJ : 1, RI : 1', 'Buah'),
(13, 1, 'Otoscope', 'RJ : 1, RI : 1', 'Buah'),
(14, 1, 'Palu Refleks', 'RJ : 1, RI : 1', 'Buah'),
(15, 1, 'Pelilit Kapas', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(16, 1, 'Skinfold Calipper', 'RJ : 1, RI : 1', 'Buah'),
(17, 1, 'Snellen chart (E Chart dan Alphabet Chart)', 'RJ : 1, RI : 1', 'Buah'),
(18, 1, 'Spekulum Vagina', 'RJ : 1, RI : 1', 'Set'),
(19, 1, 'Spekulum Hidung Besar', 'RJ : 1, RI : 1', 'buah'),
(20, 1, 'Spekulum Hidung Anak', 'RJ : 1, RI : 1', 'buah'),
(21, 1, 'Sphygmomanometer Dewasa', 'RJ : 1, RI : 1', 'buah'),
(22, 1, 'Sphygmomanometer anak', 'RJ : 1, RI : 1', 'buah'),
(23, 1, 'Stetoskop', 'RJ : 1, RI : 1', 'buah'),
(24, 1, 'Spatula Lidah', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(25, 1, 'Meja Periksa', 'RJ : 1, RI : 1', 'buah'),
(26, 1, 'Termometer', 'RJ : 1, RI : 1', 'buah'),
(27, 1, 'Timbangan dewasa', 'RJ : 1, RI : 1', 'buah'),
(28, 1, 'Timbangan bayi', 'RJ : 1, RI : 1', 'buah'),
(29, 2, 'Alkohol', 'Sesuai kebutuhan', 'Sesuai kebutuhan'),
(30, 2, 'Povidone Iodine', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(31, 2, 'Kapas', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(32, 2, 'Kasa non steril', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(33, 2, 'Masker', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(34, 2, 'Sabun Tangan', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(35, 2, 'Sarung tangan steril', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(36, 2, 'Sarung tangan non steril', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(37, 3, 'Bantal', 'RJ : 1, RI : 1', 'buah'),
(38, 3, 'Baskom Cuci Tangan', 'RJ : 1, RI : 1', 'Buah'),
(39, 3, 'Tempat tidur perawatan', 'RJ : 1, RI : 1', '5 - 10  Set'),
(40, 3, 'Lampu spiritus', 'RJ : 1, RI : 1', 'buah'),
(41, 3, 'Lemari alat', 'RJ : 1, RI : 1', 'buah'),
(42, 3, 'Meja instrumen', 'RJ : 1, RI : 1', 'buah'),
(43, 3, 'Meteran tinggi badan', 'RJ : 1, RI : 1', 'buah'),
(44, 3, 'Perlak', 'RJ : 2, RI : 2', 'buah'),
(45, 3, 'Pispot', 'RJ : 1, RI : 1', 'buah'),
(46, 3, 'Kebutuhan Linen', 'RJ : 1, RI : 1', 'buah'),
(47, 3, 'Sikat', 'RJ : 1, RI : 1', 'buah'),
(48, 3, 'Penghitung waktu', 'RJ : 1, RI : 1', 'buah'),
(49, 3, 'Tempat sampah tertutup (medis dan non medis)', 'RJ : 3, RI : 3', 'buah'),
(50, 3, 'Tempat penyimpanan', 'RJ : 1, RI : 1', 'buah'),
(51, 4, 'Meja tulis', 'RJ : 1, RI : 1', 'unit'),
(52, 4, 'Kursi Kerja', 'RJ : 3,  RI : 3', 'Unit'),
(53, 4, 'Lemari Arsip', 'RJ : 1, RI : 1', 'Unit'),
(54, 5, 'Buku Register Pelayanan', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(55, 5, 'Formulir dan surat keterangan lain', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(56, 5, 'Formulir Informed Consent', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(57, 5, 'Formulir Rujukan', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(58, 5, 'Kertas resep', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(59, 5, 'Surat Keterangan Sakit', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(60, 5, 'Surat Keterangan Sehat', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(61, 6, 'Breast Pump', '1', 'Buah'),
(62, 6, 'Meja', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(63, 6, 'Kursi', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(64, 6, 'Lemari Es', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(65, 6, 'Wastafel', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(66, 6, 'Tempat Sampah', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deskripsi_penilaian_utama`
--

CREATE TABLE `tbl_deskripsi_penilaian_utama` (
  `id_deskripsi` int(20) NOT NULL,
  `id_group` int(20) NOT NULL,
  `kriteria_penilaian_utama` varchar(200) NOT NULL,
  `jumlah_minimal_penilaian_utama` varchar(100) NOT NULL,
  `satuan_penilaian_utama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_deskripsi_penilaian_utama`
--

INSERT INTO `tbl_deskripsi_penilaian_utama` (`id_deskripsi`, `id_group`, `kriteria_penilaian_utama`, `jumlah_minimal_penilaian_utama`, `satuan_penilaian_utama`) VALUES
(1, 1, 'Bein Lurus Besar', 'Klinik Pratama drg : 1,\r\nKlinik Pratama : 1', 'buah'),
(2, 1, 'Bein Lurus Kecil', 'Klinik Pratama drg : 1, Klinik Pratama : 1', 'buah'),
(3, 1, 'Bor Intan Diamond', 'Klinik Pratama drg : 1,\r\nKlinik Pratama : 1', 'set'),
(4, 1, 'Bor Intan Kontra Angle Hand Piece Conventional', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(5, 1, 'Ekskavator (besar)', 'Klinik pratama drg: 4,\r\nKlinik pratama : 10', 'buah'),
(6, 1, 'Eksakavator (kecil)', 'Klinik pratama drg: 4,\r\nKlinik pratama : 10', 'buah'),
(7, 1, 'Gunting Operasi Gusi (wagner) 12 cm', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(8, 1, 'Handpiece Contra Angle', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(9, 1, 'Handpiece Straight', 'Klinik pratama drg: 4,\r\nKlinik pratama : 10', 'buah'),
(10, 1, 'Kaca mulut datar no. 4 datar tanpa tangkai', 'Klinik pratama drg: 4,\r\nKlinik pratama : 10', 'buah'),
(11, 1, 'Arteri klem/pemegang jarum jahit', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(12, 1, 'Set kursi gigi elektrik yang terdiri dari', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(13, 1, 'Jarum Exterpasi', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(14, 1, 'Jarum K-File &#40;15-40&#41;', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(15, 1, 'Light Curing', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'buah'),
(16, 1, 'Pelindung Jari', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(17, 1, 'Pemegang Matrix', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'buah'),
(18, 1, 'Penahan Lidah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'buah'),
(19, 1, 'Pengungkit akar gigi kanan', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'buah'),
(20, 1, 'Pengungkit akar gigi kanan mesial', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'buah'),
(21, 1, 'Periodontal Probe', 'Klinik pratama drg: 2,\r\nKlinik pratama : 5', 'buah'),
(22, 1, 'Penumpat semen', 'Klinik pratama drg: 2,\r\nKlinik pratama : 4', 'buah'),
(23, 1, 'Pinset Gigi', 'Klinik pratama drg: 2,\r\nKlinik pratama : 4', 'buah'),
(24, 1, 'Polishing bur', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'buah'),
(25, 1, 'Skeler standar, bentuk cangkul kiri', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(26, 1, 'Skeler standar, bentuk cangkul kanan', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(27, 1, 'Skeler standar, bentuk tombak', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(28, 1, 'Skeler standar, black kiri dan kanan', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(29, 1, 'Skeler Ultrasonik', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'buah'),
(30, 1, 'Sonde lengkung', 'Klinik pratama drg: 4,\r\nKlinik pratama : 10', 'buah'),
(31, 1, 'Sonde lurus', 'Klinik pratama drg: 4,\r\nKlinik pratama : 10', 'buah'),
(32, 1, 'Spatula pengaduk semen ionomer', 'Klinik pratama drg: 2,\r\nKlinik pratama : 2', 'buah'),
(33, 1, 'Set tang pencabutan gigi dewasa (set).\r\n1) Tang gigi incisivus rahang atas dan bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(34, 1, '2) tang gigi caninus, rahang atas dan bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(35, 1, '3) Tang gigi premolar rahang atas', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(36, 1, '4) Tang gigi premolar rahang atas, kiri dan kanan', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(37, 1, '5) Tang gigi molar 3  rahang atas, kiri, dan kanan', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(38, 1, '6) Tang gigi premolar rahang bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(39, 1, '7) Tang gigi molar rahang bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(40, 1, '8) tang gigi molar 3 rahang bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(41, 1, '9) Tang sisa akar gigi anterior rahang atas', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(42, 1, '10) Tang sisa akar gigi posterior rahang atas', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(43, 1, '11) Tang sisa akar gigi rahang bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(44, 1, 'Set tang pencabutan gigi anak (set)\r\n1) Tang gigi anterior rahang atas', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(45, 1, '2) Tang gigi molar rahang', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(46, 1, '3) Tang gigi molar rahang bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(47, 1, '4) Tang gigi sisa akar gigi rahang atas', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(48, 1, '5) Tang gigi anterior rahang bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(49, 1, '6) Tang gigi sisa akar gigi rahang bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(50, 1, 'Skalpel Besar', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(51, 1, 'Skalpel besar', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(52, 1, 'Skalpel, tangkai pisau operasi', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'set'),
(53, 1, 'Kaca mulut', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'buah'),
(54, 1, 'Baki logam tempat alat steril bertutup', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(55, 1, 'Korentang penjepit sponge', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(56, 1, 'Lampu spiritus isi 120cc', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(57, 1, 'Lemari peralatan', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(58, 1, 'Lempeng kaca pengaduk semen', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(59, 1, 'Tempat penyimpanan jarum bekas', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(60, 1, 'Silinder korentang steril', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(61, 1, 'Sterilisator Kering', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(62, 1, 'Tempat alkohol', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(63, 1, 'Toples kapas logam dengan pegas dan tutup', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(64, 1, 'Toples Pembuangan Kapas', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(65, 1, 'Nierbeken', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'buah'),
(66, 2, 'Betadin solution/disinfectan', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(67, 2, 'Sabun tangan/antiseptic', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(68, 2, 'Kasa', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(69, 2, 'Benang silk', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(70, 2, 'Chromic catgut', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(71, 2, 'Alkohol', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(72, 2, 'Kapas', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(73, 2, 'Masker', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(74, 2, 'Sarung Tangan', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(75, 3, 'Kursi Kerja', 'Klinik Pratama drg : 1,\r\nKlinik Pratama : 1', 'unit'),
(76, 3, 'Lemari arsip', 'Klinik Pratama drg : 1,\r\nKlinik Pratama : 1', 'unit'),
(77, 3, 'Meja tulis', 'Klinik Pratama drg : 1,\r\nKlinik Pratama : 1', 'unit'),
(78, 4, 'Buku register pelayanan', 'Sesuai kebutuhan', 'Sesuai kebutuhan'),
(79, 4, 'Kartu rekam medis', 'Sesuai kebutuhan', 'Sesuai kebutuhan'),
(80, 4, 'Formulir informed consent', 'Sesuai kebutuhan', 'Sesuai kebutuhan'),
(81, 4, 'Formulir rujukan', 'Sesuai kebutuhan', 'Sesuai kebutuhan'),
(82, 4, 'Kertas resep', 'Sesuai kebutuhan', 'Sesuai kebutuhan'),
(83, 4, 'Surat keterangan sakit', 'Sesuai kebutuhan', 'Sesuai kebutuhan'),
(84, 4, 'Surat keterangan sehat', 'Sesuai kebutuhan', 'Sesuai kebutuhan'),
(85, 5, 'Breast Pump', '1', 'buah'),
(86, 5, 'Cairan desinfectan tangan', 'Sesuai kebutuhan', 'Sesuai kebutuhan'),
(87, 5, 'Cairan desinfectan ruangan', 'Sesuai kebutuhan', 'Sesuai kebutuhan'),
(88, 5, 'Tempat sampah tertutup', '1', 'buah'),
(89, 5, 'waskom', '1', 'buah'),
(90, 5, 'Waslap', '2', 'buah'),
(91, 5, 'Kursi', '1', 'buah'),
(92, 5, 'Meja untuk ganti popok bayi', '1', 'buah'),
(93, 5, 'Meja perlengkapan', '1', 'buah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group_pratama`
--

CREATE TABLE `tbl_group_pratama` (
  `id_group` int(20) NOT NULL,
  `group_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_group_pratama`
--

INSERT INTO `tbl_group_pratama` (`id_group`, `group_name`) VALUES
(1, 'Peralatan Klinik'),
(2, 'Bahan Habis Pakai'),
(3, 'Perlengkapan'),
(4, 'Meubel Air'),
(5, 'Pencatatan dan Pelaporan'),
(6, 'Peralatan Klinik Yang Memiliki Ruang Asi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group_utama`
--

CREATE TABLE `tbl_group_utama` (
  `id_group` int(20) NOT NULL,
  `group_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_group_utama`
--

INSERT INTO `tbl_group_utama` (`id_group`, `group_name`) VALUES
(1, 'Peralatan Klinik'),
(2, 'Bahan Habis Pakai'),
(3, 'Meubelair'),
(4, 'Pencatatan dan Pelaporan'),
(5, 'Peralatan Klinik Yang Memiliki Ruang Asi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kecamatan`
--

CREATE TABLE `tbl_kecamatan` (
  `id_kecamatan` int(10) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kecamatan`
--

INSERT INTO `tbl_kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Banyumanik'),
(2, 'Candisari'),
(3, 'Gajah Mungkur'),
(4, 'Gayamsari'),
(5, 'Genuk'),
(6, 'Gunungpati'),
(7, 'Mijen'),
(8, 'Ngaliyan'),
(9, 'Pedurungan'),
(10, 'Semarang Barat'),
(11, 'Semarang Selatan'),
(12, 'Semarang Tengah'),
(13, 'Semarang Timur'),
(14, 'Semarang Utara'),
(15, 'Tembalang'),
(16, 'Tugu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelurahan`
--

CREATE TABLE `tbl_kelurahan` (
  `id_kelurahan` int(10) NOT NULL,
  `id_kecamatan` int(10) NOT NULL,
  `nama_kelurahan` varchar(100) NOT NULL,
  `kode_pos_kelurahan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelurahan`
--

INSERT INTO `tbl_kelurahan` (`id_kelurahan`, `id_kecamatan`, `nama_kelurahan`, `kode_pos_kelurahan`) VALUES
(1, 1, 'Ngesrep', 50261),
(2, 1, 'Tinjomoyo', 50262),
(3, 1, 'Srondol Kulon', 50263),
(4, 1, 'Srondol Wetan', 50263),
(5, 1, 'Banyumanik', 50264),
(6, 1, 'Pudakpayung', 50265),
(7, 1, 'Gedawang', 50266),
(8, 1, 'Jabungan', 50266),
(9, 1, 'Padangsari', 50267),
(10, 1, 'Pedalangan', 50268),
(11, 1, 'Sumurboto', 50269),
(12, 2, 'Tegalsari', 50251),
(13, 2, 'Wonotingal', 50252),
(14, 2, 'Kaliwiru', 50253),
(15, 2, 'Jatingaleh', 50254),
(16, 2, 'Karanganyar Gunung', 50255),
(17, 2, 'Jomblang', 50256),
(18, 2, 'Candi', 50257),
(19, 3, 'Bendungan', 50231),
(20, 3, 'Lempongsari', 50231),
(21, 3, 'Gajah Mungkur', 50232),
(22, 3, 'Bendan Ngisor', 50233),
(23, 3, 'Karang Rejo', 50234),
(24, 3, 'Bendan Duwur', 50235),
(25, 3, 'Sampangan', 50236),
(26, 3, 'Petompon', 50237),
(27, 4, 'Gayamsari', 50161),
(28, 4, 'Siwalan', 50162),
(29, 4, 'Sawahbesar', 50163),
(30, 4, 'Kaligawe', 50164),
(31, 4, 'Tambakrejo', 50165),
(32, 4, 'Sambirejo', 50166),
(33, 4, 'Pandean Lamper', 50167),
(34, 5, 'Muktiharjo Lor', 50111),
(35, 5, 'Terboyo Kulon', 50112),
(36, 5, 'Terboyo Wetan', 50112),
(37, 5, 'Penggaron Lor', 50113),
(38, 5, 'Gebangsari', 50114),
(39, 5, 'Bangetayu Kulon', 50115),
(40, 5, 'Bangetayu Wetan', 50115),
(41, 5, 'Kudu', 50116),
(42, 5, 'Sembungharjo', 50116),
(43, 5, 'Banjardowo', 50117),
(44, 5, 'Karangroto', 50117),
(45, 5, 'Trimulyo', 50118),
(46, 6, 'Sukorejo', 50221),
(47, 6, 'Kandri', 50222),
(48, 6, 'Sadeng', 50222),
(49, 6, 'Cepoko', 50223),
(50, 6, 'Jatirejo', 50223),
(51, 6, 'Nongkosawit', 50224),
(52, 6, 'Plalangan', 50225),
(53, 6, 'Sumurejo', 50226),
(54, 6, 'Mangunsari', 50227),
(55, 6, 'Pakintelan', 50227),
(56, 6, 'Ngijo', 50228),
(57, 6, 'Patemon', 50228),
(58, 6, 'Gunung Pati', 50225),
(59, 6, 'Kalisegoro', 50229),
(60, 6, 'Pongangan', 50224),
(61, 6, 'Sekaran', 50229),
(62, 7, 'Kedungpane', 50211),
(63, 7, 'Pesantren', 50212),
(64, 7, 'Ngadirgo', 50213),
(65, 7, 'Wonoplumbon', 50214),
(66, 7, 'Tambangan', 50215),
(67, 7, 'Wonolopo', 50215),
(68, 7, 'Bubakan', 50216),
(69, 7, 'Cangkiran', 50216),
(70, 7, 'Karangmalang', 50216),
(71, 7, 'Polaman', 50217),
(72, 7, 'Purwosari', 50217),
(73, 7, 'Jatibarang', 50219),
(74, 7, 'Jatisari', 50218),
(75, 7, 'Mijen', 50218),
(76, 8, 'Ngaliyan', 50181),
(77, 8, 'Kalipancur', 50183),
(78, 8, 'Purwoyoso', 50184),
(79, 8, 'Tambakaji', 50185),
(80, 8, 'Gondoriyo', 50187),
(81, 8, 'Podorejo', 50187),
(82, 8, 'Wates', 50188),
(83, 8, 'Bringin', 50189),
(84, 8, 'Bambankerep', 50182),
(85, 8, 'Wonosari', 50186),
(86, 9, 'Gemah', 50191),
(87, 9, 'Pedurungan Kidul', 50192),
(88, 9, 'Pedurungan Lor', 50192),
(89, 9, 'Pedurungan Tengah', 50192),
(90, 9, 'Penggaron Kidul', 50194),
(91, 9, 'Tlogosari Kulon', 50196),
(92, 9, 'Tlogosari Wetan', 50196),
(93, 9, 'Muktiharjo Kidul', 50197),
(94, 9, 'Kalicari', 50198),
(95, 9, 'Plamongan Sari', 50193),
(96, 9, 'Palebon', 50199),
(97, 10, 'Bojongsalaman', 50141),
(98, 10, 'Cabean', 50141),
(99, 10, 'Krobokan', 50141),
(100, 10, 'Tawangmas', 50144),
(101, 10, 'Tawangsari', 50144),
(102, 10, 'Kalibanteng Kulon', 50145),
(103, 10, 'Krapyak', 50146),
(104, 10, 'Manyaran', 50147),
(105, 10, 'Bongsari', 50148),
(106, 10, 'Ngemplak Simongan', 50148),
(107, 10, 'Gisikdrono', 50149),
(108, 10, 'Kalibanteng Kidul', 50149),
(109, 10, 'Karang Ayu', 50142),
(110, 10, 'Tambakharjo', 50145),
(111, 10, 'Kembangarum', 50148),
(112, 11, 'Pleburan', 50241),
(113, 11, 'Peterongan', 50242),
(114, 11, 'Wonodri', 50242),
(115, 11, 'Randusari', 50244),
(116, 11, 'Barusari', 50245),
(117, 11, 'Bulustalan', 50246),
(118, 11, 'Lamper Tengah', 50248),
(119, 11, 'Lamper Kidul', 50249),
(120, 11, 'Lamper Lor', 50249),
(121, 11, 'Mugassari', 50244),
(122, 12, 'Pendrikan Kidul', 50131),
(123, 12, 'Pendrikan Lor', 50131),
(124, 12, 'Sekayu', 50132),
(125, 12, 'Kembangsari', 50133),
(126, 12, 'Miroto', 50134),
(127, 12, 'Brumbungan', 50135),
(128, 12, 'Gabahan', 50135),
(129, 12, 'Purwodinatan', 50137),
(130, 12, 'Bangunharjo', 50138),
(131, 12, 'Kranggan', 50137),
(132, 12, 'Pandansari', 50139),
(133, 12, 'Kauman', 50139),
(134, 12, 'Karangkidul', 50136),
(135, 12, 'Pekunden', 50134),
(136, 12, 'Jagalan', 50613),
(137, 13, 'Mlatibaru', 50122),
(138, 13, 'Kebonagung', 50123),
(139, 13, 'Karangturi', 50124),
(140, 13, 'Sarirejo', 50124),
(141, 13, 'Rejosari', 50125),
(142, 13, 'Bugangan', 50126),
(143, 13, 'Mlatiharjo', 50126),
(144, 13, 'Rejomulyo', 50127),
(145, 13, 'Kemijen', 50128),
(146, 13, 'Karangtempel', 50125),
(147, 14, 'Plombokan', 50171),
(148, 14, 'Purwosari', 50172),
(149, 14, 'Dadapsari', 50173),
(150, 14, 'Tanjungmas', 50174),
(151, 14, 'Bandarharjo', 50175),
(152, 14, 'Kuningan', 50176),
(153, 14, 'Panggung Lor', 50177),
(154, 14, 'Panggung Kidul', 50178),
(155, 14, 'Bulu Lor', 50179),
(156, 15, 'Meteseh', 50271),
(157, 15, 'Mangunharjo', 50272),
(158, 15, 'Sendangmulyo', 50272),
(159, 15, 'Kedungmundu', 50273),
(160, 15, 'Sendangguwo', 50273),
(161, 15, 'Jangli', 50274),
(162, 15, 'Tandang', 50274),
(163, 15, 'Tembalang', 50275),
(164, 15, 'Sambiroto', 50276),
(165, 15, 'Bulusan', 50277),
(166, 15, 'Kramas', 50278),
(167, 15, 'Rowosari', 50279),
(168, 16, 'Jerakah', 50151),
(169, 16, 'Karanganyar', 50152),
(170, 16, 'Mangunharjo', 50154),
(171, 16, 'Mangkang Kulon', 50155),
(172, 16, 'Mangkang Wetan', 50156),
(173, 16, 'Randu Garut', 50153),
(174, 16, 'Tugurejo', 50151),
(175, 5, 'Genuksari', 50117),
(176, 9, 'Tlogomulyo', 50195),
(177, 10, 'Salaman Mloyo', 50143);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_klinik`
--

CREATE TABLE `tbl_klinik` (
  `id_klinik` varchar(20) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `nama_anggota1` varchar(100) NOT NULL,
  `nama_anggota2` varchar(100) NOT NULL,
  `nama_anggota3` varchar(100) NOT NULL,
  `nama_anggota4` varchar(100) NOT NULL,
  `nama_klinik` varchar(200) NOT NULL,
  `kemampuan_pelayanan` enum('Pratama','Utama') NOT NULL,
  `jenis_pelayanan_klinik` enum('Rawat Jalan','Rawat Inap') NOT NULL,
  `alamat_klinik` varchar(200) NOT NULL,
  `id_kecamatan_klinik` int(100) NOT NULL,
  `id_kelurahan_klinik` int(100) NOT NULL,
  `tgl_penilaian` date NOT NULL,
  `status_penilaian` enum('Sudah','Belum') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_klinik`
--

INSERT INTO `tbl_klinik` (`id_klinik`, `nama_user`, `nama_anggota1`, `nama_anggota2`, `nama_anggota3`, `nama_anggota4`, `nama_klinik`, `kemampuan_pelayanan`, `jenis_pelayanan_klinik`, `alamat_klinik`, `id_kecamatan_klinik`, `id_kelurahan_klinik`, `tgl_penilaian`, `status_penilaian`, `created_at`, `update_at`) VALUES
('PR001', 'Dinkes', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Amelia Medika', 'Pratama', 'Rawat Jalan', 'Jl. Puri Dinar', 15, 167, '2022-04-01', 'Belum', '2022-04-01 05:56:39', '2022-04-02 20:38:05'),
('PR002', 'Dinkes', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Subur Sehat', 'Pratama', 'Rawat Jalan', 'JL. Klipang Raya', 15, 158, '2022-04-03', 'Belum', '2022-04-02 20:37:49', '2022-04-02 20:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian`
--

CREATE TABLE `tbl_penilaian` (
  `id_penilaian` int(10) NOT NULL,
  `no_penilaian` varchar(50) NOT NULL,
  `id_klinik` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_pratama_form_kedua`
--

CREATE TABLE `tbl_penilaian_pratama_form_kedua` (
  `id_penilaian` int(20) NOT NULL,
  `no_penilaian` varchar(100) NOT NULL,
  `id_deskripsi` int(20) NOT NULL,
  `hasil_penilaian` enum('Ya','Tidak') NOT NULL,
  `jumlah_ketersediaan` varchar(200) NOT NULL,
  `satuan_penilaian` varchar(50) NOT NULL,
  `catatan_penilaian` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_pratama_form_ketiga`
--

CREATE TABLE `tbl_penilaian_pratama_form_ketiga` (
  `id_penilaian` int(20) NOT NULL,
  `no_penilaian` varchar(100) NOT NULL,
  `usulan_rekomendasi` varchar(100) NOT NULL,
  `uraian_penilaian` varchar(1000) NOT NULL,
  `tindak_lanjut_klinik` varchar(100) NOT NULL,
  `nama_perwakilan_pihak_klinik` varchar(100) NOT NULL,
  `jabatan_perwakilan_pihak_klinik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_pratama_form_satu`
--

CREATE TABLE `tbl_penilaian_pratama_form_satu` (
  `id_penilaian` int(10) NOT NULL,
  `no_penilaian` varchar(50) NOT NULL,
  `id_klinik` varchar(30) NOT NULL,
  `id_rincian_penilaian` int(20) NOT NULL,
  `jawab_hasil` varchar(10) NOT NULL,
  `jawab_hasil_verif` varchar(20) NOT NULL,
  `catatan_hasil_penilaian` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_utama_form_kedua`
--

CREATE TABLE `tbl_penilaian_utama_form_kedua` (
  `id_penilaian` int(20) NOT NULL,
  `no_penilaian` varchar(100) NOT NULL,
  `id_deskripsi` int(20) NOT NULL,
  `hasil_penilaian` enum('Ya','Tidak') NOT NULL,
  `jumlah_ketersediaan` varchar(200) NOT NULL,
  `satuan_penilaian` varchar(50) NOT NULL,
  `catatan_penilaian` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_utama_form_ketiga`
--

CREATE TABLE `tbl_penilaian_utama_form_ketiga` (
  `id_penilaian` int(20) NOT NULL,
  `no_penilaian` varchar(100) NOT NULL,
  `usulan_rekomendasi` varchar(100) NOT NULL,
  `uraian_penilaian` varchar(1000) NOT NULL,
  `tindak_lanjut_klinik` varchar(100) NOT NULL,
  `nama_perwakilan_pihak_klinik` varchar(100) NOT NULL,
  `jabatan_perwakilan_pihak_klinik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_utama_form_satu`
--

CREATE TABLE `tbl_penilaian_utama_form_satu` (
  `id_penilaian` int(10) NOT NULL,
  `no_penilaian` varchar(50) NOT NULL,
  `id_rincian_penilaian` int(20) NOT NULL,
  `jawab_hasil` varchar(10) NOT NULL,
  `jawab_hasil_verif` varchar(20) NOT NULL,
  `catatan_hasil_penilaian` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rincian_penilaian_pratama`
--

CREATE TABLE `tbl_rincian_penilaian_pratama` (
  `id_rincian_penilaian` int(10) NOT NULL,
  `rincian_penilaian` varchar(500) NOT NULL,
  `keterangan_penilaian` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rincian_penilaian_pratama`
--

INSERT INTO `tbl_rincian_penilaian_pratama` (`id_rincian_penilaian`, `rincian_penilaian`, `keterangan_penilaian`) VALUES
(1, 'Profil klinik', ''),
(2, 'Kemampuan pelayanan klinik\n- Pelayanan medik dasar\n', 'Wajib untuk klinik pratama'),
(3, 'Kemampuan Pelayanan penunjang medik', ''),
(4, 'Sarana : Bangunan dan ruang Klinik\r\na. Bangunan klinik bersifat permanen dan tidak bergabung fisik bangunannya dengan tempat tinggal per\r\norangan', ''),
(5, 'b. bangunan klinik memperhatikan fungsi keamanan, kenyamanan, dan kemudahan pelyanan termasuk penyandang disabilitas, anak-anak, dan lanjut usia.\r\n', ''),
(6, 'c. Kawasan di dalam bangunan klinik harus bebas asap rokok', ''),
(7, 'd. Terpasang papan nama dengan ukuran minimal 1 m2 dengan dasar putih huruf hitam yang memuat informasi :\n1) Jenis klinik utama', ''),
(8, '2) Nama Klinik', ''),
(9, '3) Jam buka klinik', ''),
(10, 'e.	Ruang penerimaan :\r\n1)	Ruang administrasi						\r\n', ''),
(11, '2) Ruang tunggu( nama dokter/drg wajib dicantumkan di ruang tunggu klinik )', ''),
(12, 'f.	Ruang pelayanan medik\r\n1)	Ruang pemeriksaan umum						\r\n', ''),
(21, '2) Ruang tindakan ', ''),
(22, '3) Ruang farmasi', ''),
(23, '4) Ruang steril', 'Harus tersedia sendiri'),
(24, '5) Ruang rawat inap', '5-10 TT, pintu bukaan keluar, kamar mandi, jarak antar tepi TT 1 m'),
(25, 'g. Ruang Penunjang Non Medik :\r\n1) Ruang Asi', 'Wajib ada'),
(26, '2) Laboratorium', 'Lantai, dinding berwarna terang, tidak bercelah, tidak bersudut'),
(27, '3) Kamar mandi', 'Minimal 1, bukaan pintu mengarah keluar'),
(28, 'Prasarana Klinik :\r\na. Sistem penghawaan', ''),
(29, 'b. Sistem pencahayaan', ''),
(30, 'c. Sistem air dan sanitasi', ''),
(31, 'd. Pengolahan limbah cair', ''),
(32, 'e. Sistem proteksi kebakaran', ''),
(33, 'f. Tabung oksigen', 'R Tindakan, R RI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rincian_penilaian_utama`
--

CREATE TABLE `tbl_rincian_penilaian_utama` (
  `id_rincian_penilaian` int(10) NOT NULL,
  `rincian_penilaian` varchar(500) NOT NULL,
  `keterangan_penilaian` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rincian_penilaian_utama`
--

INSERT INTO `tbl_rincian_penilaian_utama` (`id_rincian_penilaian`, `rincian_penilaian`, `keterangan_penilaian`) VALUES
(1, 'Profil klinik', ''),
(5, 'Kemampuan pelayanan klinik\r\n- Pelayanan medik dasar', 'Wajib untuk klinik pratama'),
(8, 'Kemampuan pelayanan penunjang medik', ''),
(9, 'Sarana : Bangunan dan ruang Klinik : a. Bangunan klinik bersifat permanen dan tidak bergabung fisik bangunannya dengan tempat tinggal perorangan', ''),
(10, 'b. Bangunan klinik memperhatikan fungsi keamanan, kenyamananan,dan kemudahan pelayanan termasuk penyandang disabilitas,anak-anak,dan lanjut usia.', ''),
(11, 'c. Kawasan di dalam bangunan klinik harus bebas asap rokok', ''),
(12, 'd. Terpasang papan nama dengan ukuran minimal 1 m2 dengan dasar putih huruf hitam yang memuat informasi :\r\n1) Jenis klinik utama', ''),
(13, '2) Nama klinik', ''),
(14, '3) Jam buka klinik', ''),
(15, 'e. Ruang penerimaan :\r\n1) Ruang administrasi', ''),
(16, '2) Ruang tunggu( nama dokter/drg wajib dicantumkan di ruang tunggu klinik )', ''),
(17, 'f. Ruang pelayanan medik\r\n1) Ruang pemeriksaan umum', ''),
(18, '2) Ruang Tindakan', ''),
(19, '3) Ruang Farmasi', ''),
(20, '4) Ruang Steril', ''),
(21, 'g. Ruang Penunjang Non Medik : 1) Ruang Asi', 'Wajib ada'),
(22, '2) Kamar Mandi', 'Minimal 1'),
(23, '5. Prasarana Klinik : a. Sistem penghawaan ( ventilasi )', ''),
(24, 'b. Sistem Pencahayaan', ''),
(25, 'c. Sistem air dan sanitasi', ''),
(26, 'd. Pengolahan limbah cair', ''),
(27, 'e. Sistem Proteksi Kebakaran', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `kode_user` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `nip_user` varchar(50) NOT NULL,
  `level_user` enum('Admin','Penilai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `kode_user`, `username`, `password`, `nama_user`, `nip_user`, `level_user`) VALUES
(8, 'USR13032200001', 'admin', '$2y$10$VMAd5ckqFqgqrT4wDJb0cubNKnfbimIBwexly4DkpBYvzE6Goi2WG', 'Admin', '197110202002121006', 'Admin'),
(20, 'USR18032200004', 'dinkes1', '$2y$10$57ATtYb3B/vh/U8xkKlIfeRygOI6PgSbOuoJWWgNFzbG3vmRMqAmm', 'Dinkes', '123456789012345698', 'Admin'),
(21, 'USR23032200005', 'ardian1', '$2y$10$8C3LwlyxRaaG/UrxcgLfzutX/12KwjxmjMnLA6tlrnic7Grak7YVK', 'Ardian', '123456789012345676', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tbl_deskripsi_penilaian_pratama`
--
ALTER TABLE `tbl_deskripsi_penilaian_pratama`
  ADD PRIMARY KEY (`id_deskripsi`),
  ADD KEY `id_group` (`id_group`);

--
-- Indexes for table `tbl_deskripsi_penilaian_utama`
--
ALTER TABLE `tbl_deskripsi_penilaian_utama`
  ADD PRIMARY KEY (`id_deskripsi`),
  ADD KEY `id_group` (`id_group`);

--
-- Indexes for table `tbl_group_pratama`
--
ALTER TABLE `tbl_group_pratama`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `tbl_group_utama`
--
ALTER TABLE `tbl_group_utama`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tbl_kelurahan`
--
ALTER TABLE `tbl_kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `tbl_klinik`
--
ALTER TABLE `tbl_klinik`
  ADD PRIMARY KEY (`id_klinik`),
  ADD KEY `id_kecamatan_klinik` (`id_kecamatan_klinik`,`id_kelurahan_klinik`),
  ADD KEY `id_kelurahan_klinik` (`id_kelurahan_klinik`),
  ADD KEY `id_anggota1` (`nama_anggota1`,`nama_anggota2`,`nama_anggota3`,`nama_anggota4`),
  ADD KEY `id_anggota1_2` (`nama_anggota1`),
  ADD KEY `tbl_klinik_ibfk_4` (`nama_anggota2`),
  ADD KEY `tbl_klinik_ibfk_5` (`nama_anggota3`),
  ADD KEY `tbl_klinik_ibfk_6` (`nama_anggota4`),
  ADD KEY `id_anggota1_3` (`nama_anggota1`,`nama_anggota2`,`nama_anggota3`);

--
-- Indexes for table `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD UNIQUE KEY `no_penilaian` (`no_penilaian`),
  ADD KEY `id_klinik` (`id_klinik`);

--
-- Indexes for table `tbl_penilaian_pratama_form_kedua`
--
ALTER TABLE `tbl_penilaian_pratama_form_kedua`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `no_penilaian` (`no_penilaian`,`id_deskripsi`),
  ADD KEY `id_deskripsi` (`id_deskripsi`);

--
-- Indexes for table `tbl_penilaian_pratama_form_ketiga`
--
ALTER TABLE `tbl_penilaian_pratama_form_ketiga`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `no_penilaian` (`no_penilaian`);

--
-- Indexes for table `tbl_penilaian_pratama_form_satu`
--
ALTER TABLE `tbl_penilaian_pratama_form_satu`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_rincian_penilaian` (`id_rincian_penilaian`),
  ADD KEY `id_klinik` (`id_klinik`),
  ADD KEY `no_penilaian` (`no_penilaian`);

--
-- Indexes for table `tbl_penilaian_utama_form_kedua`
--
ALTER TABLE `tbl_penilaian_utama_form_kedua`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `no_penilaian` (`no_penilaian`,`id_deskripsi`),
  ADD KEY `id_deskripsi` (`id_deskripsi`);

--
-- Indexes for table `tbl_penilaian_utama_form_ketiga`
--
ALTER TABLE `tbl_penilaian_utama_form_ketiga`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `no_penilaian` (`no_penilaian`);

--
-- Indexes for table `tbl_penilaian_utama_form_satu`
--
ALTER TABLE `tbl_penilaian_utama_form_satu`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `no_penilaian` (`no_penilaian`),
  ADD KEY `id_rincian_penilaian` (`id_rincian_penilaian`);

--
-- Indexes for table `tbl_rincian_penilaian_pratama`
--
ALTER TABLE `tbl_rincian_penilaian_pratama`
  ADD PRIMARY KEY (`id_rincian_penilaian`);

--
-- Indexes for table `tbl_rincian_penilaian_utama`
--
ALTER TABLE `tbl_rincian_penilaian_utama`
  ADD PRIMARY KEY (`id_rincian_penilaian`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id_anggota` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_deskripsi_penilaian_pratama`
--
ALTER TABLE `tbl_deskripsi_penilaian_pratama`
  MODIFY `id_deskripsi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_deskripsi_penilaian_utama`
--
ALTER TABLE `tbl_deskripsi_penilaian_utama`
  MODIFY `id_deskripsi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tbl_group_pratama`
--
ALTER TABLE `tbl_group_pratama`
  MODIFY `id_group` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_group_utama`
--
ALTER TABLE `tbl_group_utama`
  MODIFY `id_group` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  MODIFY `id_kecamatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_kelurahan`
--
ALTER TABLE `tbl_kelurahan`
  MODIFY `id_kelurahan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_penilaian_pratama_form_kedua`
--
ALTER TABLE `tbl_penilaian_pratama_form_kedua`
  MODIFY `id_penilaian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `tbl_penilaian_pratama_form_ketiga`
--
ALTER TABLE `tbl_penilaian_pratama_form_ketiga`
  MODIFY `id_penilaian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_penilaian_pratama_form_satu`
--
ALTER TABLE `tbl_penilaian_pratama_form_satu`
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- AUTO_INCREMENT for table `tbl_penilaian_utama_form_kedua`
--
ALTER TABLE `tbl_penilaian_utama_form_kedua`
  MODIFY `id_penilaian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `tbl_penilaian_utama_form_ketiga`
--
ALTER TABLE `tbl_penilaian_utama_form_ketiga`
  MODIFY `id_penilaian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_penilaian_utama_form_satu`
--
ALTER TABLE `tbl_penilaian_utama_form_satu`
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_rincian_penilaian_pratama`
--
ALTER TABLE `tbl_rincian_penilaian_pratama`
  MODIFY `id_rincian_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_rincian_penilaian_utama`
--
ALTER TABLE `tbl_rincian_penilaian_utama`
  MODIFY `id_rincian_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_deskripsi_penilaian_pratama`
--
ALTER TABLE `tbl_deskripsi_penilaian_pratama`
  ADD CONSTRAINT `tbl_deskripsi_penilaian_pratama_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `tbl_group_pratama` (`id_group`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_deskripsi_penilaian_utama`
--
ALTER TABLE `tbl_deskripsi_penilaian_utama`
  ADD CONSTRAINT `tbl_deskripsi_penilaian_utama_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `tbl_group_utama` (`id_group`);

--
-- Constraints for table `tbl_kelurahan`
--
ALTER TABLE `tbl_kelurahan`
  ADD CONSTRAINT `tbl_kelurahan_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `tbl_kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_klinik`
--
ALTER TABLE `tbl_klinik`
  ADD CONSTRAINT `tbl_klinik_ibfk_1` FOREIGN KEY (`id_kelurahan_klinik`) REFERENCES `tbl_kelurahan` (`id_kelurahan`),
  ADD CONSTRAINT `tbl_klinik_ibfk_2` FOREIGN KEY (`id_kecamatan_klinik`) REFERENCES `tbl_kecamatan` (`id_kecamatan`);

--
-- Constraints for table `tbl_penilaian_pratama_form_kedua`
--
ALTER TABLE `tbl_penilaian_pratama_form_kedua`
  ADD CONSTRAINT `tbl_penilaian_pratama_form_kedua_ibfk_2` FOREIGN KEY (`id_deskripsi`) REFERENCES `tbl_deskripsi_penilaian_pratama` (`id_deskripsi`);

--
-- Constraints for table `tbl_penilaian_pratama_form_satu`
--
ALTER TABLE `tbl_penilaian_pratama_form_satu`
  ADD CONSTRAINT `tbl_penilaian_pratama_form_satu_ibfk_2` FOREIGN KEY (`id_rincian_penilaian`) REFERENCES `tbl_rincian_penilaian_pratama` (`id_rincian_penilaian`),
  ADD CONSTRAINT `tbl_penilaian_pratama_form_satu_ibfk_3` FOREIGN KEY (`no_penilaian`) REFERENCES `tbl_penilaian` (`no_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_penilaian_utama_form_kedua`
--
ALTER TABLE `tbl_penilaian_utama_form_kedua`
  ADD CONSTRAINT `tbl_penilaian_utama_form_kedua_ibfk_2` FOREIGN KEY (`id_deskripsi`) REFERENCES `tbl_deskripsi_penilaian_utama` (`id_deskripsi`);

--
-- Constraints for table `tbl_penilaian_utama_form_satu`
--
ALTER TABLE `tbl_penilaian_utama_form_satu`
  ADD CONSTRAINT `tbl_penilaian_utama_form_satu_ibfk_2` FOREIGN KEY (`id_rincian_penilaian`) REFERENCES `tbl_rincian_penilaian_utama` (`id_rincian_penilaian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
