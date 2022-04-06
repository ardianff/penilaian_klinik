-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 03:51 PM
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
(26, 'DKK00003', 'Suryati, S.KM', '198111022009032003'),
(29, 'DKK00004', 'Ardian Ferdy Firmansyah', '123456789012345678');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deskripsi_penilaian_pratama`
--

CREATE TABLE `tbl_deskripsi_penilaian_pratama` (
  `id_deskripsi` int(20) NOT NULL,
  `id_group` int(20) NOT NULL,
  `kriteria_penilaian_pratama` varchar(200) NOT NULL,
  `jumlah_minimal_penilaian_pratama` varchar(100) NOT NULL,
  `satuan_penilaian_pratama` enum('Unit','Buah','Set','Sesuai Kebutuhan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_deskripsi_penilaian_pratama`
--

INSERT INTO `tbl_deskripsi_penilaian_pratama` (`id_deskripsi`, `id_group`, `kriteria_penilaian_pratama`, `jumlah_minimal_penilaian_pratama`, `satuan_penilaian_pratama`) VALUES
(1, 1, 'Baki logam tempat alat steril', 'RJ : 2, RI : 3', 'Buah'),
(2, 1, 'Bingkai dan lensa uji-coba untuk pemeriksaan refraksi', 'RJ : 1, RI : 1', 'Set'),
(3, 1, 'Buku ishihara tes', 'RJ : 1, RI : 1', 'Buah'),
(4, 1, 'Corong telinga/spekulum telinga ukuran kecil,besar,sedang', '', ''),
(5, 1, 'Nierbeken Besar', 'RJ : 1, RI : 1', 'Buah'),
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
(19, 1, 'Spekulum Hidung Besar', 'RJ : 1, RI : 1', 'Buah'),
(20, 1, 'Spekulum Hidung Anak', 'RJ : 1, RI : 1', 'Buah'),
(21, 1, 'Sphygmomanometer Dewasa', 'RJ : 1, RI : 1', 'Buah'),
(22, 1, 'Sphygmomanometer anak', 'RJ : 1, RI : 1', 'Buah'),
(23, 1, 'Stetoskop', 'RJ : 1, RI : 1', 'Buah'),
(24, 1, 'Spatula Lidah', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(25, 1, 'Meja Periksa', 'RJ : 1, RI : 1', 'Buah'),
(26, 1, 'Termometer', 'RJ : 1, RI : 1', 'Buah'),
(27, 1, 'Timbangan dewasa', 'RJ : 1, RI : 1', 'Buah'),
(28, 1, 'Timbangan bayi', 'RJ : 1, RI : 1', 'Buah'),
(29, 2, 'Alkohol', 'Sesuai kebutuhan', 'Sesuai Kebutuhan'),
(30, 2, 'Povidone Iodine', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(31, 2, 'Kapas', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(32, 2, 'Kasa non steril', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(33, 2, 'Masker', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(34, 2, 'Sabun Tangan', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(35, 2, 'Sarung tangan steril', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(36, 2, 'Sarung tangan non steril', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(37, 3, 'Bantal', 'RJ : 1, RI : 1', 'Buah'),
(38, 3, 'Baskom Cuci Tangan', 'RJ : 1, RI : 1', 'Buah'),
(39, 3, 'Tempat tidur perawatan', 'RJ : 1, RI : 1', 'Set'),
(40, 3, 'Lampu spiritus', 'RJ : 1, RI : 1', 'Buah'),
(41, 3, 'Lemari alat', 'RJ : 1, RI : 1', 'Buah'),
(42, 3, 'Meja instrumen', 'RJ : 1, RI : 1', 'Buah'),
(43, 3, 'Meteran tinggi badan', 'RJ : 1, RI : 1', 'Buah'),
(44, 3, 'Perlak', 'RJ : 2, RI : 2', 'Buah'),
(45, 3, 'Pispot', 'RJ : 1, RI : 1', 'Buah'),
(46, 3, 'Kebutuhan Linen', 'RJ : 1, RI : 1', 'Buah'),
(47, 3, 'Sikat', 'RJ : 1, RI : 1', 'Buah'),
(48, 3, 'Penghitung waktu', 'RJ : 1, RI : 1', 'Buah'),
(49, 3, 'Tempat sampah tertutup (medis dan non medis)', 'RJ : 3, RI : 3', 'Buah'),
(50, 3, 'Tempat penyimpanan', 'RJ : 1, RI : 1', 'Buah'),
(51, 4, 'Meja tulis', 'RJ : 1, RI : 1', 'Unit'),
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
  `satuan_penilaian_utama` enum('Unit','Buah','Set','Sesuai Kebutuhan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_deskripsi_penilaian_utama`
--

INSERT INTO `tbl_deskripsi_penilaian_utama` (`id_deskripsi`, `id_group`, `kriteria_penilaian_utama`, `jumlah_minimal_penilaian_utama`, `satuan_penilaian_utama`) VALUES
(1, 1, 'Bein Lurus Besar', 'Klinik Pratama drg : 1,\r\nKlinik Pratama : 1', 'Buah'),
(2, 1, 'Bein Lurus Kecil', 'Klinik Pratama drg : 1, Klinik Pratama : 1', 'Buah'),
(3, 1, 'Bor Intan Diamond', 'Klinik Pratama drg : 1,\r\nKlinik Pratama : 1', 'Set'),
(4, 1, 'Bor Intan Kontra Angle Hand Piece Conventional', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(5, 1, 'Ekskavator (besar)', 'Klinik pratama drg: 4,\r\nKlinik pratama : 10', 'Buah'),
(6, 1, 'Eksakavator (kecil)', 'Klinik pratama drg: 4,\r\nKlinik pratama : 10', 'Buah'),
(7, 1, 'Gunting Operasi Gusi (wagner) 12 cm', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(8, 1, 'Handpiece Contra Angle', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(9, 1, 'Handpiece Straight', 'Klinik pratama drg: 4,\r\nKlinik pratama : 10', 'Buah'),
(10, 1, 'Kaca mulut datar no. 4 datar tanpa tangkai', 'Klinik pratama drg: 4,\r\nKlinik pratama : 10', 'Buah'),
(11, 1, 'Arteri klem/pemegang jarum jahit', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(12, 1, 'Set kursi gigi elektrik yang terdiri dari', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(13, 1, 'Jarum Exterpasi', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(14, 1, 'Jarum K-File &#40;15-40&#41;', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(15, 1, 'Light Curing', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Buah'),
(16, 1, 'Pelindung Jari', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(17, 1, 'Pemegang Matrix', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Buah'),
(18, 1, 'Penahan Lidah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Buah'),
(19, 1, 'Pengungkit akar gigi kanan', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Buah'),
(20, 1, 'Pengungkit akar gigi kanan mesial', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Buah'),
(21, 1, 'Periodontal Probe', 'Klinik pratama drg: 2,\r\nKlinik pratama : 5', 'Buah'),
(22, 1, 'Penumpat semen', 'Klinik pratama drg: 2,\r\nKlinik pratama : 4', 'Buah'),
(23, 1, 'Pinset Gigi', 'Klinik pratama drg: 2,\r\nKlinik pratama : 4', 'Buah'),
(24, 1, 'Polishing bur', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Buah'),
(25, 1, 'Skeler standar, bentuk cangkul kiri', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(26, 1, 'Skeler standar, bentuk cangkul kanan', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(27, 1, 'Skeler standar, bentuk tombak', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(28, 1, 'Skeler standar, black kiri dan kanan', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(29, 1, 'Skeler Ultrasonik', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Buah'),
(30, 1, 'Sonde lengkung', 'Klinik pratama drg: 4,\r\nKlinik pratama : 10', 'Buah'),
(31, 1, 'Sonde lurus', 'Klinik pratama drg: 4,\r\nKlinik pratama : 10', 'Buah'),
(32, 1, 'Spatula pengaduk semen ionomer', 'Klinik pratama drg: 2,\r\nKlinik pratama : 2', 'Buah'),
(33, 1, 'Set tang pencabutan gigi dewasa (set).\r\n1) Tang gigi incisivus rahang atas dan bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(34, 1, '2) tang gigi caninus, rahang atas dan bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(35, 1, '3) Tang gigi premolar rahang atas', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(36, 1, '4) Tang gigi premolar rahang atas, kiri dan kanan', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(37, 1, '5) Tang gigi molar 3  rahang atas, kiri, dan kanan', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(38, 1, '6) Tang gigi premolar rahang bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(39, 1, '7) Tang gigi molar rahang bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(40, 1, '8) tang gigi molar 3 rahang bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(41, 1, '9) Tang sisa akar gigi anterior rahang atas', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(42, 1, '10) Tang sisa akar gigi posterior rahang atas', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(43, 1, '11) Tang sisa akar gigi rahang bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(44, 1, 'Set tang pencabutan gigi anak (set)\r\n1) Tang gigi anterior rahang atas', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(45, 1, '2) Tang gigi molar rahang', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(46, 1, '3) Tang gigi molar rahang bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(47, 1, '4) Tang gigi sisa akar gigi rahang atas', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(48, 1, '5) Tang gigi anterior rahang bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(49, 1, '6) Tang gigi sisa akar gigi rahang bawah', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(50, 1, 'Skalpel Besar', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(51, 1, 'Skalpel besar', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(52, 1, 'Skalpel, tangkai pisau operasi', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Set'),
(53, 1, 'Kaca mulut', 'Klinik pratama drg: 1,\r\nKlinik pratama : 1', 'Buah'),
(54, 1, 'Baki logam tempat alat steril bertutup', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(55, 1, 'Korentang penjepit sponge', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(56, 1, 'Lampu spiritus isi 120cc', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(57, 1, 'Lemari peralatan', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(58, 1, 'Lempeng kaca pengaduk semen', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(59, 1, 'Tempat penyimpanan jarum bekas', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(60, 1, 'Silinder korentang steril', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(61, 1, 'Sterilisator Kering', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(62, 1, 'Tempat alkohol', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(63, 1, 'Toples kapas logam dengan pegas dan tutup', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(64, 1, 'Toples Pembuangan Kapas', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(65, 1, 'Nierbeken', 'Klinik pratama drg: 1,\r\nKlinik pratama : 2', 'Buah'),
(66, 2, 'Betadin solution/disinfectan', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(67, 2, 'Sabun tangan/antiseptic', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(68, 2, 'Kasa', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(69, 2, 'Benang silk', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(70, 2, 'Chromic catgut', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(71, 2, 'Alkohol', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(72, 2, 'Kapas', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(73, 2, 'Masker', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(74, 2, 'Sarung Tangan', 'Sesuai Kebutuhan', 'Sesuai Kebutuhan'),
(75, 3, 'Kursi Kerja', 'Klinik Pratama drg : 1,\r\nKlinik Pratama : 1', 'Unit'),
(76, 3, 'Lemari arsip', 'Klinik Pratama drg : 1,\r\nKlinik Pratama : 1', 'Unit'),
(77, 3, 'Meja tulis', 'Klinik Pratama drg : 1,\r\nKlinik Pratama : 1', 'Unit'),
(78, 4, 'Buku register pelayanan', 'Sesuai kebutuhan', 'Sesuai Kebutuhan'),
(79, 4, 'Kartu rekam medis', 'Sesuai kebutuhan', 'Sesuai Kebutuhan'),
(80, 4, 'Formulir informed consent', 'Sesuai kebutuhan', 'Sesuai Kebutuhan'),
(81, 4, 'Formulir rujukan', 'Sesuai kebutuhan', 'Sesuai Kebutuhan'),
(82, 4, 'Kertas resep', 'Sesuai kebutuhan', 'Sesuai Kebutuhan'),
(83, 4, 'Surat keterangan sakit', 'Sesuai kebutuhan', 'Sesuai Kebutuhan'),
(84, 4, 'Surat keterangan sehat', 'Sesuai kebutuhan', 'Sesuai Kebutuhan'),
(85, 5, 'Breast Pump', '1', 'Buah'),
(86, 5, 'Cairan desinfectan tangan', 'Sesuai kebutuhan', 'Sesuai Kebutuhan'),
(87, 5, 'Cairan desinfectan ruangan', 'Sesuai kebutuhan', 'Sesuai Kebutuhan'),
(88, 5, 'Tempat sampah tertutup', '1', 'Buah'),
(89, 5, 'waskom', '1', 'Buah'),
(90, 5, 'Waslap', '2', 'Buah'),
(91, 5, 'Kursi', '1', 'Buah'),
(92, 5, 'Meja untuk ganti popok bayi', '1', 'Buah'),
(93, 5, 'Meja perlengkapan', '1', 'Buah');

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
  `nama_kecamatan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kecamatan`
--

INSERT INTO `tbl_kecamatan` (`id_kecamatan`, `nama_kecamatan`, `created_at`, `update_at`) VALUES
(1, 'Banyumanik', '2022-04-05 03:18:21', '2022-04-05 03:18:21'),
(2, 'Candisari', '2022-04-05 03:18:21', '2022-04-05 03:18:21'),
(3, 'Gajah Mungkur', '2022-04-05 03:18:21', '2022-04-05 03:18:21'),
(4, 'Gayamsari', '2022-04-05 03:18:21', '2022-04-05 03:18:21'),
(5, 'Genuk', '2022-04-05 03:18:21', '2022-04-05 03:18:21'),
(6, 'Gunungpati', '2022-04-05 03:18:21', '2022-04-05 03:18:21'),
(7, 'Mijen', '2022-04-05 03:18:21', '2022-04-05 03:18:21'),
(8, 'Ngaliyan', '2022-04-05 03:18:21', '2022-04-05 03:18:21'),
(9, 'Pedurungan', '2022-04-05 03:18:21', '2022-04-05 03:18:21'),
(10, 'Semarang Barat', '2022-04-05 03:18:21', '2022-04-05 03:18:21'),
(11, 'Semarang Selatan', '2022-04-05 03:18:21', '2022-04-05 03:18:21'),
(12, 'Semarang Tengah', '2022-04-05 03:18:21', '2022-04-05 03:18:21'),
(13, 'Semarang Timur', '2022-04-05 03:18:21', '2022-04-05 03:18:21'),
(14, 'Semarang Utara', '2022-04-05 03:18:21', '2022-04-05 03:18:21'),
(15, 'Tembalang', '2022-04-05 03:18:21', '2022-04-05 03:18:21'),
(16, 'Tugu', '2022-04-05 03:18:21', '2022-04-05 03:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelurahan`
--

CREATE TABLE `tbl_kelurahan` (
  `id_kelurahan` int(10) NOT NULL,
  `id_kecamatan` int(10) NOT NULL,
  `nama_kelurahan` varchar(100) NOT NULL,
  `kode_pos_kelurahan` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelurahan`
--

INSERT INTO `tbl_kelurahan` (`id_kelurahan`, `id_kecamatan`, `nama_kelurahan`, `kode_pos_kelurahan`, `created_at`, `update_at`) VALUES
(1, 1, 'Ngesrep', 50261, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(2, 1, 'Tinjomoyo', 50262, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(3, 1, 'Srondol Kulon', 50263, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(4, 1, 'Srondol Wetan', 50263, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(5, 1, 'Banyumanik', 50264, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(6, 1, 'Pudakpayung', 50265, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(7, 1, 'Gedawang', 50266, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(8, 1, 'Jabungan', 50266, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(9, 1, 'Padangsari', 50267, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(10, 1, 'Pedalangan', 50268, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(11, 1, 'Sumurboto', 50269, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(12, 2, 'Tegalsari', 50251, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(13, 2, 'Wonotingal', 50252, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(14, 2, 'Kaliwiru', 50253, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(15, 2, 'Jatingaleh', 50254, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(16, 2, 'Karanganyar Gunung', 50255, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(17, 2, 'Jomblang', 50256, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(18, 2, 'Candi', 50257, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(19, 3, 'Bendungan', 50231, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(20, 3, 'Lempongsari', 50231, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(21, 3, 'Gajah Mungkur', 50232, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(22, 3, 'Bendan Ngisor', 50233, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(23, 3, 'Karang Rejo', 50234, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(24, 3, 'Bendan Duwur', 50235, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(25, 3, 'Sampangan', 50236, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(26, 3, 'Petompon', 50237, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(27, 4, 'Gayamsari', 50161, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(28, 4, 'Siwalan', 50162, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(29, 4, 'Sawahbesar', 50163, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(30, 4, 'Kaligawe', 50164, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(31, 4, 'Tambakrejo', 50165, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(32, 4, 'Sambirejo', 50166, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(33, 4, 'Pandean Lamper', 50167, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(34, 5, 'Muktiharjo Lor', 50111, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(35, 5, 'Terboyo Kulon', 50112, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(36, 5, 'Terboyo Wetan', 50112, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(37, 5, 'Penggaron Lor', 50113, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(38, 5, 'Gebangsari', 50114, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(39, 5, 'Bangetayu Kulon', 50115, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(40, 5, 'Bangetayu Wetan', 50115, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(41, 5, 'Kudu', 50116, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(42, 5, 'Sembungharjo', 50116, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(43, 5, 'Banjardowo', 50117, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(44, 5, 'Karangroto', 50117, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(45, 5, 'Trimulyo', 50118, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(46, 6, 'Sukorejo', 50221, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(47, 6, 'Kandri', 50222, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(48, 6, 'Sadeng', 50222, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(49, 6, 'Cepoko', 50223, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(50, 6, 'Jatirejo', 50223, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(51, 6, 'Nongkosawit', 50224, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(52, 6, 'Plalangan', 50225, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(53, 6, 'Sumurejo', 50226, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(54, 6, 'Mangunsari', 50227, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(55, 6, 'Pakintelan', 50227, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(56, 6, 'Ngijo', 50228, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(57, 6, 'Patemon', 50228, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(58, 6, 'Gunung Pati', 50225, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(59, 6, 'Kalisegoro', 50229, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(60, 6, 'Pongangan', 50224, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(61, 6, 'Sekaran', 50229, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(62, 7, 'Kedungpane', 50211, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(63, 7, 'Pesantren', 50212, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(64, 7, 'Ngadirgo', 50213, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(65, 7, 'Wonoplumbon', 50214, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(66, 7, 'Tambangan', 50215, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(67, 7, 'Wonolopo', 50215, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(68, 7, 'Bubakan', 50216, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(69, 7, 'Cangkiran', 50216, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(70, 7, 'Karangmalang', 50216, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(71, 7, 'Polaman', 50217, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(72, 7, 'Purwosari', 50217, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(73, 7, 'Jatibarang', 50219, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(74, 7, 'Jatisari', 50218, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(75, 7, 'Mijen', 50218, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(76, 8, 'Ngaliyan', 50181, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(77, 8, 'Kalipancur', 50183, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(78, 8, 'Purwoyoso', 50184, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(79, 8, 'Tambakaji', 50185, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(80, 8, 'Gondoriyo', 50187, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(81, 8, 'Podorejo', 50187, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(82, 8, 'Wates', 50188, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(83, 8, 'Bringin', 50189, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(84, 8, 'Bambankerep', 50182, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(85, 8, 'Wonosari', 50186, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(86, 9, 'Gemah', 50191, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(87, 9, 'Pedurungan Kidul', 50192, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(88, 9, 'Pedurungan Lor', 50192, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(89, 9, 'Pedurungan Tengah', 50192, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(90, 9, 'Penggaron Kidul', 50194, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(91, 9, 'Tlogosari Kulon', 50196, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(92, 9, 'Tlogosari Wetan', 50196, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(93, 9, 'Muktiharjo Kidul', 50197, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(94, 9, 'Kalicari', 50198, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(95, 9, 'Plamongan Sari', 50193, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(96, 9, 'Palebon', 50199, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(97, 10, 'Bojongsalaman', 50141, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(98, 10, 'Cabean', 50141, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(99, 10, 'Krobokan', 50141, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(100, 10, 'Tawangmas', 50144, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(101, 10, 'Tawangsari', 50144, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(102, 10, 'Kalibanteng Kulon', 50145, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(103, 10, 'Krapyak', 50146, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(104, 10, 'Manyaran', 50147, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(105, 10, 'Bongsari', 50148, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(106, 10, 'Ngemplak Simongan', 50148, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(107, 10, 'Gisikdrono', 50149, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(108, 10, 'Kalibanteng Kidul', 50149, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(109, 10, 'Karang Ayu', 50142, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(110, 10, 'Tambakharjo', 50145, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(111, 10, 'Kembangarum', 50148, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(112, 11, 'Pleburan', 50241, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(113, 11, 'Peterongan', 50242, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(114, 11, 'Wonodri', 50242, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(115, 11, 'Randusari', 50244, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(116, 11, 'Barusari', 50245, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(117, 11, 'Bulustalan', 50246, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(118, 11, 'Lamper Tengah', 50248, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(119, 11, 'Lamper Kidul', 50249, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(120, 11, 'Lamper Lor', 50249, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(121, 11, 'Mugassari', 50244, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(122, 12, 'Pendrikan Kidul', 50131, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(123, 12, 'Pendrikan Lor', 50131, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(124, 12, 'Sekayu', 50132, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(125, 12, 'Kembangsari', 50133, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(126, 12, 'Miroto', 50134, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(127, 12, 'Brumbungan', 50135, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(128, 12, 'Gabahan', 50135, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(129, 12, 'Purwodinatan', 50137, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(130, 12, 'Bangunharjo', 50138, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(131, 12, 'Kranggan', 50137, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(132, 12, 'Pandansari', 50139, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(133, 12, 'Kauman', 50139, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(134, 12, 'Karangkidul', 50136, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(135, 12, 'Pekunden', 50134, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(136, 12, 'Jagalan', 50613, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(137, 13, 'Mlatibaru', 50122, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(138, 13, 'Kebonagung', 50123, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(139, 13, 'Karangturi', 50124, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(140, 13, 'Sarirejo', 50124, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(141, 13, 'Rejosari', 50125, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(142, 13, 'Bugangan', 50126, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(143, 13, 'Mlatiharjo', 50126, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(144, 13, 'Rejomulyo', 50127, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(145, 13, 'Kemijen', 50128, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(146, 13, 'Karangtempel', 50125, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(147, 14, 'Plombokan', 50171, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(148, 14, 'Purwosari', 50172, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(149, 14, 'Dadapsari', 50173, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(150, 14, 'Tanjungmas', 50174, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(151, 14, 'Bandarharjo', 50175, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(152, 14, 'Kuningan', 50176, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(153, 14, 'Panggung Lor', 50177, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(154, 14, 'Panggung Kidul', 50178, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(155, 14, 'Bulu Lor', 50179, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(156, 15, 'Meteseh', 50271, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(157, 15, 'Mangunharjo', 50272, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(158, 15, 'Sendangmulyo', 50272, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(159, 15, 'Kedungmundu', 50273, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(160, 15, 'Sendangguwo', 50273, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(161, 15, 'Jangli', 50274, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(162, 15, 'Tandang', 50274, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(163, 15, 'Tembalang', 50275, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(164, 15, 'Sambiroto', 50276, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(165, 15, 'Bulusan', 50277, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(166, 15, 'Kramas', 50278, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(167, 15, 'Rowosari', 50279, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(168, 16, 'Jerakah', 50151, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(169, 16, 'Karanganyar', 50152, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(170, 16, 'Mangunharjo', 50154, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(171, 16, 'Mangkang Kulon', 50155, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(172, 16, 'Mangkang Wetan', 50156, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(173, 16, 'Randu Garut', 50153, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(174, 16, 'Tugurejo', 50151, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(175, 5, 'Genuksari', 50117, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(176, 9, 'Tlogomulyo', 50195, '2022-04-05 03:17:27', '2022-04-05 03:17:27'),
(177, 10, 'Salaman Mloyo', 50143, '2022-04-05 03:17:27', '2022-04-05 03:17:27');

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
  `kemampuan_pelayanan` enum('Pratama Umum','Utama Umum','Pratama Gigi','Utama Gigi') NOT NULL,
  `jenis_pelayanan_klinik` enum('Rawat Jalan','Rawat Inap') NOT NULL,
  `alamat_klinik` varchar(200) NOT NULL,
  `id_kecamatan_klinik` int(100) NOT NULL,
  `id_kelurahan_klinik` int(100) NOT NULL,
  `tgl_visitasi` date NOT NULL,
  `no_surat` varchar(200) NOT NULL,
  `status_penilaian` enum('Sudah','Belum') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_klinik`
--

INSERT INTO `tbl_klinik` (`id_klinik`, `nama_user`, `nama_anggota1`, `nama_anggota2`, `nama_anggota3`, `nama_anggota4`, `nama_klinik`, `kemampuan_pelayanan`, `jenis_pelayanan_klinik`, `alamat_klinik`, `id_kecamatan_klinik`, `id_kelurahan_klinik`, `tgl_visitasi`, `no_surat`, `status_penilaian`, `created_at`, `update_at`) VALUES
('PR002', 'Ardian', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Subur Sehat', 'Pratama Umum', 'Rawat Jalan', 'Jl. Klipang Raya', 15, 158, '2022-04-03', 'AXI//-02-0201929//2021', 'Sudah', '2022-04-02 20:37:49', '2022-04-06 01:13:56'),
('PR004', 'Ardian', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Amalia Sehat', 'Pratama Umum', 'Rawat Jalan', 'Jl. Simpang 5', 3, 24, '2022-04-04', 'AXI//-02-0201929//2021', 'Sudah', '2022-04-04 01:43:31', '2022-04-06 04:03:52'),
('PR007', 'Ardian', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Sehat Sejahtera', 'Utama Umum', 'Rawat Jalan', 'Jl. Semarang indah', 9, 95, '2022-04-05', 'MXVII/04/06/22/01/PCP/001', 'Belum', '2022-04-05 06:49:31', '2022-04-06 01:16:06'),
('PR008', 'Ardian', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Raharja Makmur', '', 'Rawat Jalan', 'Jl. Puri Dinar Elok', 15, 156, '2022-04-05', 'AXI//-02-0201929//2021', 'Belum', '2022-04-05 12:23:46', '2022-04-05 13:20:20'),
('UT003', 'Ardian', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Amanda', 'Pratama Gigi', 'Rawat Jalan', 'Jl. Kedungmundu Raya', 15, 159, '2022-04-03', 'AXI//-02-0201929//2021', 'Sudah', '2022-04-03 14:51:46', '2022-04-06 01:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian`
--

CREATE TABLE `tbl_penilaian` (
  `id_penilaian` int(10) NOT NULL,
  `no_penilaian` varchar(50) NOT NULL,
  `id_klinik` varchar(20) NOT NULL,
  `status_penilaian` enum('Sudah','Belum') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penilaian`
--

INSERT INTO `tbl_penilaian` (`id_penilaian`, `no_penilaian`, `id_klinik`, `status_penilaian`, `created_at`, `update_at`) VALUES
(58, 'TASK-UTM04042022', 'UT003', 'Sudah', '2022-04-04 01:01:57', '2022-04-04 01:01:57'),
(59, 'TASK-PRTM04042022', 'PR002', 'Sudah', '2022-04-04 01:02:10', '2022-04-04 01:02:10'),
(61, 'TASK-PRTM04042022', 'PR004', 'Sudah', '2022-04-04 01:43:41', '2022-04-04 01:43:41'),
(64, 'TASK-PRTM05042022', 'PR007', 'Sudah', '2022-04-05 06:50:33', '2022-04-05 06:50:33'),
(65, 'TASK-PRTM06042022', 'PR007', 'Sudah', '2022-04-06 01:17:23', '2022-04-06 01:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_pratama_form_kedua`
--

CREATE TABLE `tbl_penilaian_pratama_form_kedua` (
  `id_penilaian` int(20) NOT NULL,
  `no_penilaian` varchar(100) NOT NULL,
  `id_klinik` varchar(20) NOT NULL,
  `id_deskripsi` int(20) NOT NULL,
  `hasil_penilaian` enum('Ya','Tidak') NOT NULL,
  `jumlah_ketersediaan` varchar(200) NOT NULL,
  `satuan_penilaian` varchar(50) NOT NULL,
  `catatan_penilaian` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penilaian_pratama_form_kedua`
--

INSERT INTO `tbl_penilaian_pratama_form_kedua` (`id_penilaian`, `no_penilaian`, `id_klinik`, `id_deskripsi`, `hasil_penilaian`, `jumlah_ketersediaan`, `satuan_penilaian`, `catatan_penilaian`, `created_at`, `update_at`) VALUES
(463, 'TASK-PRTM04042022', 'PR004', 1, 'Ya', '12', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(464, 'TASK-PRTM04042022', 'PR004', 2, 'Ya', '121', 'Set', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(465, 'TASK-PRTM04042022', 'PR004', 3, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(466, 'TASK-PRTM04042022', 'PR004', 4, 'Ya', '', '', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(467, 'TASK-PRTM04042022', 'PR004', 5, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(468, 'TASK-PRTM04042022', 'PR004', 6, 'Ya', '', 'Set', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(469, 'TASK-PRTM04042022', 'PR004', 7, 'Tidak', '', 'Set', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(470, 'TASK-PRTM04042022', 'PR004', 8, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(471, 'TASK-PRTM04042022', 'PR004', 9, 'Tidak', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(472, 'TASK-PRTM04042022', 'PR004', 10, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(473, 'TASK-PRTM04042022', 'PR004', 11, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(474, 'TASK-PRTM04042022', 'PR004', 12, 'Tidak', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(475, 'TASK-PRTM04042022', 'PR004', 13, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(476, 'TASK-PRTM04042022', 'PR004', 14, 'Tidak', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(477, 'TASK-PRTM04042022', 'PR004', 15, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(478, 'TASK-PRTM04042022', 'PR004', 16, 'Tidak', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(479, 'TASK-PRTM04042022', 'PR004', 17, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(480, 'TASK-PRTM04042022', 'PR004', 18, 'Tidak', '', 'Set', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(481, 'TASK-PRTM04042022', 'PR004', 19, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(482, 'TASK-PRTM04042022', 'PR004', 20, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(483, 'TASK-PRTM04042022', 'PR004', 21, 'Tidak', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(484, 'TASK-PRTM04042022', 'PR004', 22, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(485, 'TASK-PRTM04042022', 'PR004', 23, 'Tidak', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(486, 'TASK-PRTM04042022', 'PR004', 24, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(487, 'TASK-PRTM04042022', 'PR004', 25, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(488, 'TASK-PRTM04042022', 'PR004', 26, 'Tidak', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(489, 'TASK-PRTM04042022', 'PR004', 27, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(490, 'TASK-PRTM04042022', 'PR004', 28, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(491, 'TASK-PRTM04042022', 'PR004', 29, 'Tidak', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(492, 'TASK-PRTM04042022', 'PR004', 30, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(493, 'TASK-PRTM04042022', 'PR004', 31, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(494, 'TASK-PRTM04042022', 'PR004', 32, 'Tidak', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(495, 'TASK-PRTM04042022', 'PR004', 33, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(496, 'TASK-PRTM04042022', 'PR004', 34, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(497, 'TASK-PRTM04042022', 'PR004', 35, 'Tidak', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(498, 'TASK-PRTM04042022', 'PR004', 36, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(499, 'TASK-PRTM04042022', 'PR004', 37, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(500, 'TASK-PRTM04042022', 'PR004', 38, 'Tidak', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(501, 'TASK-PRTM04042022', 'PR004', 39, 'Ya', '', 'Set', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(502, 'TASK-PRTM04042022', 'PR004', 40, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(503, 'TASK-PRTM04042022', 'PR004', 41, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(504, 'TASK-PRTM04042022', 'PR004', 42, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(505, 'TASK-PRTM04042022', 'PR004', 43, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(506, 'TASK-PRTM04042022', 'PR004', 44, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(507, 'TASK-PRTM04042022', 'PR004', 45, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(508, 'TASK-PRTM04042022', 'PR004', 46, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(509, 'TASK-PRTM04042022', 'PR004', 47, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(510, 'TASK-PRTM04042022', 'PR004', 48, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(511, 'TASK-PRTM04042022', 'PR004', 49, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(512, 'TASK-PRTM04042022', 'PR004', 50, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(513, 'TASK-PRTM04042022', 'PR004', 51, 'Ya', '', 'Unit', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(514, 'TASK-PRTM04042022', 'PR004', 52, 'Ya', '', 'Unit', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(515, 'TASK-PRTM04042022', 'PR004', 53, 'Ya', '', 'Unit', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(516, 'TASK-PRTM04042022', 'PR004', 54, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(517, 'TASK-PRTM04042022', 'PR004', 55, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(518, 'TASK-PRTM04042022', 'PR004', 56, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(519, 'TASK-PRTM04042022', 'PR004', 57, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(520, 'TASK-PRTM04042022', 'PR004', 58, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(521, 'TASK-PRTM04042022', 'PR004', 59, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(522, 'TASK-PRTM04042022', 'PR004', 60, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(523, 'TASK-PRTM04042022', 'PR004', 61, 'Ya', '', 'Buah', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(524, 'TASK-PRTM04042022', 'PR004', 62, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(525, 'TASK-PRTM04042022', 'PR004', 63, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(526, 'TASK-PRTM04042022', 'PR004', 64, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(527, 'TASK-PRTM04042022', 'PR004', 65, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55'),
(528, 'TASK-PRTM04042022', 'PR004', 66, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-06 04:02:55', '2022-04-06 04:02:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_pratama_form_ketiga`
--

CREATE TABLE `tbl_penilaian_pratama_form_ketiga` (
  `id_penilaian` int(20) NOT NULL,
  `no_penilaian` varchar(100) NOT NULL,
  `id_klinik` varchar(20) NOT NULL,
  `usulan_rekomendasi` varchar(100) NOT NULL,
  `uraian_penilaian` varchar(1000) NOT NULL,
  `tindak_lanjut_klinik` varchar(100) NOT NULL,
  `nama_perwakilan_pihak_klinik` varchar(100) NOT NULL,
  `jabatan_perwakilan_pihak_klinik` varchar(100) NOT NULL,
  `ttd_perwakilan_klinik` varchar(100) NOT NULL,
  `foto_klinik` varchar(200) NOT NULL,
  `ttd_penilai1` varchar(200) NOT NULL,
  `ttd_penilai2` varchar(200) NOT NULL,
  `ttd_penilai3` varchar(200) NOT NULL,
  `ttd_penilai4` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penilaian_pratama_form_ketiga`
--

INSERT INTO `tbl_penilaian_pratama_form_ketiga` (`id_penilaian`, `no_penilaian`, `id_klinik`, `usulan_rekomendasi`, `uraian_penilaian`, `tindak_lanjut_klinik`, `nama_perwakilan_pihak_klinik`, `jabatan_perwakilan_pihak_klinik`, `ttd_perwakilan_klinik`, `foto_klinik`, `ttd_penilai1`, `ttd_penilai2`, `ttd_penilai3`, `ttd_penilai4`, `created_at`, `update_at`) VALUES
(10, 'TASK-PRTM04042022', 'PR004', 'Telah Memenuhi', 'Oke', 'Disetujui', 'dr. Ahmad', 'Penata Muda', '624d8bdcd31ff.png', '', '624d8bdcd3381.png', '', '', '', '2022-04-06 04:03:52', '2022-04-06 12:47:24');

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

--
-- Dumping data for table `tbl_penilaian_pratama_form_satu`
--

INSERT INTO `tbl_penilaian_pratama_form_satu` (`id_penilaian`, `no_penilaian`, `id_klinik`, `id_rincian_penilaian`, `jawab_hasil`, `jawab_hasil_verif`, `catatan_hasil_penilaian`, `created_at`, `update_at`) VALUES
(738, 'TASK-PRTM04042022', 'PR004', 1, 'Ya', 'Tidak', 'oke', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(739, 'TASK-PRTM04042022', 'PR004', 2, 'Ya', 'Ya', 'oke sudah', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(740, 'TASK-PRTM04042022', 'PR004', 3, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(741, 'TASK-PRTM04042022', 'PR004', 4, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(742, 'TASK-PRTM04042022', 'PR004', 5, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(743, 'TASK-PRTM04042022', 'PR004', 6, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(744, 'TASK-PRTM04042022', 'PR004', 7, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(745, 'TASK-PRTM04042022', 'PR004', 8, 'Ya', 'Tidak', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(746, 'TASK-PRTM04042022', 'PR004', 9, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(747, 'TASK-PRTM04042022', 'PR004', 10, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(748, 'TASK-PRTM04042022', 'PR004', 11, 'Ya', 'Tidak', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(749, 'TASK-PRTM04042022', 'PR004', 12, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(750, 'TASK-PRTM04042022', 'PR004', 21, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(751, 'TASK-PRTM04042022', 'PR004', 22, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(752, 'TASK-PRTM04042022', 'PR004', 23, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(753, 'TASK-PRTM04042022', 'PR004', 24, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(754, 'TASK-PRTM04042022', 'PR004', 25, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(755, 'TASK-PRTM04042022', 'PR004', 26, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(756, 'TASK-PRTM04042022', 'PR004', 27, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(757, 'TASK-PRTM04042022', 'PR004', 28, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(758, 'TASK-PRTM04042022', 'PR004', 29, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(759, 'TASK-PRTM04042022', 'PR004', 30, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(760, 'TASK-PRTM04042022', 'PR004', 31, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(761, 'TASK-PRTM04042022', 'PR004', 32, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06'),
(762, 'TASK-PRTM04042022', 'PR004', 33, 'Ya', 'Ya', '', '2022-04-06 04:00:06', '2022-04-06 04:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_utama_form_kedua`
--

CREATE TABLE `tbl_penilaian_utama_form_kedua` (
  `id_penilaian` int(20) NOT NULL,
  `no_penilaian` varchar(100) NOT NULL,
  `id_klinik` varchar(20) NOT NULL,
  `id_deskripsi` int(20) NOT NULL,
  `hasil_penilaian` enum('Ya','Tidak') NOT NULL,
  `jumlah_ketersediaan` varchar(200) NOT NULL,
  `satuan_penilaian` varchar(50) NOT NULL,
  `catatan_penilaian` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penilaian_utama_form_kedua`
--

INSERT INTO `tbl_penilaian_utama_form_kedua` (`id_penilaian`, `no_penilaian`, `id_klinik`, `id_deskripsi`, `hasil_penilaian`, `jumlah_ketersediaan`, `satuan_penilaian`, `catatan_penilaian`, `created_at`, `update_at`) VALUES
(373, 'TASK-UTM04042022', 'UT003', 1, 'Ya', '212', 'buah', 'bagus', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(374, 'TASK-UTM04042022', 'UT003', 2, 'Ya', '2121', 'buah', 'oke', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(375, 'TASK-UTM04042022', 'UT003', 3, 'Ya', '213', 'set', 'bagus', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(376, 'TASK-UTM04042022', 'UT003', 4, 'Ya', '312', 'set', 'oke', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(377, 'TASK-UTM04042022', 'UT003', 5, 'Ya', '323', 'buah', 'bagus', '2022-04-04 02:39:13', '2022-04-04 02:44:07'),
(378, 'TASK-UTM04042022', 'UT003', 6, 'Ya', '322', 'buah', 'oke', '2022-04-04 02:39:13', '2022-04-04 02:44:07'),
(379, 'TASK-UTM04042022', 'UT003', 7, 'Ya', '323', 'buah', 'oke', '2022-04-04 02:39:13', '2022-04-04 02:44:07'),
(380, 'TASK-UTM04042022', 'UT003', 8, 'Ya', '232', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:44:07'),
(381, 'TASK-UTM04042022', 'UT003', 9, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(382, 'TASK-UTM04042022', 'UT003', 10, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(383, 'TASK-UTM04042022', 'UT003', 11, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(384, 'TASK-UTM04042022', 'UT003', 12, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(385, 'TASK-UTM04042022', 'UT003', 13, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(386, 'TASK-UTM04042022', 'UT003', 14, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(387, 'TASK-UTM04042022', 'UT003', 15, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(388, 'TASK-UTM04042022', 'UT003', 16, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(389, 'TASK-UTM04042022', 'UT003', 17, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(390, 'TASK-UTM04042022', 'UT003', 18, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(391, 'TASK-UTM04042022', 'UT003', 19, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(392, 'TASK-UTM04042022', 'UT003', 20, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(393, 'TASK-UTM04042022', 'UT003', 21, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(394, 'TASK-UTM04042022', 'UT003', 22, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(395, 'TASK-UTM04042022', 'UT003', 23, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(396, 'TASK-UTM04042022', 'UT003', 24, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(397, 'TASK-UTM04042022', 'UT003', 25, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(398, 'TASK-UTM04042022', 'UT003', 26, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(399, 'TASK-UTM04042022', 'UT003', 27, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(400, 'TASK-UTM04042022', 'UT003', 28, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(401, 'TASK-UTM04042022', 'UT003', 29, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(402, 'TASK-UTM04042022', 'UT003', 30, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(403, 'TASK-UTM04042022', 'UT003', 31, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(404, 'TASK-UTM04042022', 'UT003', 32, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(405, 'TASK-UTM04042022', 'UT003', 33, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(406, 'TASK-UTM04042022', 'UT003', 34, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(407, 'TASK-UTM04042022', 'UT003', 35, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(408, 'TASK-UTM04042022', 'UT003', 36, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(409, 'TASK-UTM04042022', 'UT003', 37, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(410, 'TASK-UTM04042022', 'UT003', 38, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(411, 'TASK-UTM04042022', 'UT003', 39, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(412, 'TASK-UTM04042022', 'UT003', 40, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(413, 'TASK-UTM04042022', 'UT003', 41, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(414, 'TASK-UTM04042022', 'UT003', 42, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(415, 'TASK-UTM04042022', 'UT003', 43, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(416, 'TASK-UTM04042022', 'UT003', 44, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(417, 'TASK-UTM04042022', 'UT003', 45, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(418, 'TASK-UTM04042022', 'UT003', 46, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(419, 'TASK-UTM04042022', 'UT003', 47, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(420, 'TASK-UTM04042022', 'UT003', 48, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(421, 'TASK-UTM04042022', 'UT003', 49, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(422, 'TASK-UTM04042022', 'UT003', 50, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(423, 'TASK-UTM04042022', 'UT003', 51, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(424, 'TASK-UTM04042022', 'UT003', 52, 'Ya', '', 'set', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(425, 'TASK-UTM04042022', 'UT003', 53, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(426, 'TASK-UTM04042022', 'UT003', 54, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(427, 'TASK-UTM04042022', 'UT003', 55, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(428, 'TASK-UTM04042022', 'UT003', 56, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(429, 'TASK-UTM04042022', 'UT003', 57, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(430, 'TASK-UTM04042022', 'UT003', 58, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(431, 'TASK-UTM04042022', 'UT003', 59, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(432, 'TASK-UTM04042022', 'UT003', 60, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(433, 'TASK-UTM04042022', 'UT003', 61, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(434, 'TASK-UTM04042022', 'UT003', 62, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(435, 'TASK-UTM04042022', 'UT003', 63, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(436, 'TASK-UTM04042022', 'UT003', 64, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(437, 'TASK-UTM04042022', 'UT003', 65, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(438, 'TASK-UTM04042022', 'UT003', 66, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(439, 'TASK-UTM04042022', 'UT003', 67, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(440, 'TASK-UTM04042022', 'UT003', 68, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(441, 'TASK-UTM04042022', 'UT003', 69, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(442, 'TASK-UTM04042022', 'UT003', 70, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(443, 'TASK-UTM04042022', 'UT003', 71, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(444, 'TASK-UTM04042022', 'UT003', 72, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(445, 'TASK-UTM04042022', 'UT003', 73, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(446, 'TASK-UTM04042022', 'UT003', 74, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(447, 'TASK-UTM04042022', 'UT003', 75, 'Ya', '', 'unit', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(448, 'TASK-UTM04042022', 'UT003', 76, 'Ya', '', 'unit', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(449, 'TASK-UTM04042022', 'UT003', 77, 'Ya', '', 'unit', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(450, 'TASK-UTM04042022', 'UT003', 78, 'Ya', '', 'Sesuai kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(451, 'TASK-UTM04042022', 'UT003', 79, 'Ya', '', 'Sesuai kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(452, 'TASK-UTM04042022', 'UT003', 80, 'Ya', '', 'Sesuai kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(453, 'TASK-UTM04042022', 'UT003', 81, 'Ya', '', 'Sesuai kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(454, 'TASK-UTM04042022', 'UT003', 82, 'Ya', '', 'Sesuai kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(455, 'TASK-UTM04042022', 'UT003', 83, 'Ya', '', 'Sesuai kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(456, 'TASK-UTM04042022', 'UT003', 84, 'Ya', '', 'Sesuai kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(457, 'TASK-UTM04042022', 'UT003', 85, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(458, 'TASK-UTM04042022', 'UT003', 86, 'Ya', '', 'Sesuai kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(459, 'TASK-UTM04042022', 'UT003', 87, 'Ya', '', 'Sesuai kebutuhan', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(460, 'TASK-UTM04042022', 'UT003', 88, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(461, 'TASK-UTM04042022', 'UT003', 89, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(462, 'TASK-UTM04042022', 'UT003', 90, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(463, 'TASK-UTM04042022', 'UT003', 91, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(464, 'TASK-UTM04042022', 'UT003', 92, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13'),
(465, 'TASK-UTM04042022', 'UT003', 93, 'Ya', '', 'buah', '', '2022-04-04 02:39:13', '2022-04-04 02:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_utama_form_ketiga`
--

CREATE TABLE `tbl_penilaian_utama_form_ketiga` (
  `id_penilaian` int(20) NOT NULL,
  `no_penilaian` varchar(100) NOT NULL,
  `id_klinik` varchar(20) NOT NULL,
  `usulan_rekomendasi` varchar(100) NOT NULL,
  `uraian_penilaian` varchar(1000) NOT NULL,
  `tindak_lanjut_klinik` varchar(100) NOT NULL,
  `nama_perwakilan_pihak_klinik` varchar(100) NOT NULL,
  `jabatan_perwakilan_pihak_klinik` varchar(100) NOT NULL,
  `ttd_penilai` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penilaian_utama_form_ketiga`
--

INSERT INTO `tbl_penilaian_utama_form_ketiga` (`id_penilaian`, `no_penilaian`, `id_klinik`, `usulan_rekomendasi`, `uraian_penilaian`, `tindak_lanjut_klinik`, `nama_perwakilan_pihak_klinik`, `jabatan_perwakilan_pihak_klinik`, `ttd_penilai`, `created_at`, `update_at`) VALUES
(4, 'TASK-UTM04042022', 'UT003', 'Telah Memenuhi', 'Oke', 'Disetujui', 'dr. Agung Santoso ', 'Dokter Umum', 'assets/img/ttd/624bd457ae17d.png', '2022-04-04 02:47:12', '2022-04-05 05:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_utama_form_satu`
--

CREATE TABLE `tbl_penilaian_utama_form_satu` (
  `id_penilaian` int(10) NOT NULL,
  `no_penilaian` varchar(50) NOT NULL,
  `id_klinik` varchar(20) NOT NULL,
  `id_rincian_penilaian` int(20) NOT NULL,
  `jawab_hasil` varchar(10) NOT NULL,
  `jawab_hasil_verif` varchar(20) NOT NULL,
  `catatan_hasil_penilaian` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penilaian_utama_form_satu`
--

INSERT INTO `tbl_penilaian_utama_form_satu` (`id_penilaian`, `no_penilaian`, `id_klinik`, `id_rincian_penilaian`, `jawab_hasil`, `jawab_hasil_verif`, `catatan_hasil_penilaian`, `created_at`, `update_at`) VALUES
(111, 'TASK-UTM04042022', 'UT003', 1, 'Ya', 'Ya', 'oke', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(112, 'TASK-UTM04042022', 'UT003', 5, 'Ya', 'Tidak', 'oke deh', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(113, 'TASK-UTM04042022', 'UT003', 8, 'Ya', 'Ya', 'oke bagus', '2022-04-04 02:32:49', '2022-04-04 02:34:01'),
(114, 'TASK-UTM04042022', 'UT003', 9, 'Ya', 'Tidak', 'oke', '2022-04-04 02:32:49', '2022-04-04 02:34:01'),
(115, 'TASK-UTM04042022', 'UT003', 10, 'Ya', 'Ya', 'oke', '2022-04-04 02:32:49', '2022-04-04 02:34:01'),
(116, 'TASK-UTM04042022', 'UT003', 11, 'Ya', 'Tidak', 'oke', '2022-04-04 02:32:49', '2022-04-04 02:34:01'),
(117, 'TASK-UTM04042022', 'UT003', 12, 'Ya', 'Ya', 'oke', '2022-04-04 02:32:49', '2022-04-04 02:34:01'),
(118, 'TASK-UTM04042022', 'UT003', 13, 'Ya', 'Tidak', '', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(119, 'TASK-UTM04042022', 'UT003', 14, 'Ya', 'Ya', '', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(120, 'TASK-UTM04042022', 'UT003', 15, 'Ya', 'Tidak', '', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(121, 'TASK-UTM04042022', 'UT003', 16, 'Ya', 'Ya', '', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(122, 'TASK-UTM04042022', 'UT003', 17, 'Ya', 'Tidak', '', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(123, 'TASK-UTM04042022', 'UT003', 18, 'Ya', 'Ya', '', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(124, 'TASK-UTM04042022', 'UT003', 19, 'Ya', 'Tidak', '', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(125, 'TASK-UTM04042022', 'UT003', 20, 'Ya', 'Ya', '', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(126, 'TASK-UTM04042022', 'UT003', 21, 'Ya', 'Tidak', '', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(127, 'TASK-UTM04042022', 'UT003', 22, 'Ya', 'Ya', '', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(128, 'TASK-UTM04042022', 'UT003', 23, 'Ya', 'Tidak', '', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(129, 'TASK-UTM04042022', 'UT003', 24, 'Ya', 'Ya', '', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(130, 'TASK-UTM04042022', 'UT003', 25, 'Ya', 'Tidak', '', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(131, 'TASK-UTM04042022', 'UT003', 26, 'Ya', 'Ya', '', '2022-04-04 02:32:49', '2022-04-04 02:32:49'),
(132, 'TASK-UTM04042022', 'UT003', 27, 'Ya', 'Tidak', '', '2022-04-04 02:32:49', '2022-04-04 02:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rincian_penilaian_pratama`
--

CREATE TABLE `tbl_rincian_penilaian_pratama` (
  `id_rincian_penilaian` int(10) NOT NULL,
  `rincian_penilaian` varchar(500) NOT NULL,
  `keterangan_penilaian` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rincian_penilaian_pratama`
--

INSERT INTO `tbl_rincian_penilaian_pratama` (`id_rincian_penilaian`, `rincian_penilaian`, `keterangan_penilaian`, `created_at`, `update_at`) VALUES
(1, 'Profil klinik', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(2, 'Kemampuan pelayanan klinik\n- Pelayanan medik dasar\n', 'Wajib untuk klinik pratama', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(3, 'Kemampuan Pelayanan penunjang medik', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(4, 'Sarana : Bangunan dan ruang Klinik\r\na. Bangunan klinik bersifat permanen dan tidak bergabung fisik bangunannya dengan tempat tinggal per\r\norangan', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(5, 'b. bangunan klinik memperhatikan fungsi keamanan, kenyamanan, dan kemudahan pelyanan termasuk penyandang disabilitas, anak-anak, dan lanjut usia.\r\n', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(6, 'c. Kawasan di dalam bangunan klinik harus bebas asap rokok', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(7, 'd. Terpasang papan nama dengan ukuran minimal 1 m2 dengan dasar putih huruf hitam yang memuat informasi :\n1) Jenis klinik utama', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(8, '2) Nama Klinik', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(9, '3) Jam buka klinik', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(10, 'e.	Ruang penerimaan :\r\n1)	Ruang administrasi						\r\n', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(11, '2) Ruang tunggu( nama dokter/drg wajib dicantumkan di ruang tunggu klinik )', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(12, 'f.	Ruang pelayanan medik\r\n1)	Ruang pemeriksaan umum						\r\n', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(21, '2) Ruang tindakan ', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(22, '3) Ruang farmasi', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(23, '4) Ruang steril', 'Harus tersedia sendiri', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(24, '5) Ruang rawat inap', '5-10 TT, pintu bukaan keluar, kamar mandi, jarak antar tepi TT 1 m', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(25, 'g. Ruang Penunjang Non Medik :\r\n1) Ruang Asi', 'Wajib ada', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(26, '2) Laboratorium', 'Lantai, dinding berwarna terang, tidak bercelah, tidak bersudut', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(27, '3) Kamar mandi', 'Minimal 1, bukaan pintu mengarah keluar', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(28, 'Prasarana Klinik :\r\na. Sistem penghawaan', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(29, 'b. Sistem pencahayaan', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(30, 'c. Sistem air dan sanitasi', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(31, 'd. Pengolahan limbah cair', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(32, 'e. Sistem proteksi kebakaran', '', '2022-04-03 15:29:38', '2022-04-03 15:29:38'),
(33, 'f. Tabung oksigen', 'R Tindakan, R RI', '2022-04-03 15:29:38', '2022-04-03 15:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rincian_penilaian_utama`
--

CREATE TABLE `tbl_rincian_penilaian_utama` (
  `id_rincian_penilaian` int(10) NOT NULL,
  `rincian_penilaian` varchar(500) NOT NULL,
  `keterangan_penilaian` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rincian_penilaian_utama`
--

INSERT INTO `tbl_rincian_penilaian_utama` (`id_rincian_penilaian`, `rincian_penilaian`, `keterangan_penilaian`, `created_at`, `update_at`) VALUES
(1, 'Profil klinik', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(5, 'Kemampuan pelayanan klinik\r\n- Pelayanan medik dasar', 'Wajib untuk klinik pratama', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(8, 'Kemampuan pelayanan penunjang medik', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(9, 'Sarana : Bangunan dan ruang Klinik : a. Bangunan klinik bersifat permanen dan tidak bergabung fisik bangunannya dengan tempat tinggal perorangan', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(10, 'b. Bangunan klinik memperhatikan fungsi keamanan, kenyamananan,dan kemudahan pelayanan termasuk penyandang disabilitas,anak-anak,dan lanjut usia.', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(11, 'c. Kawasan di dalam bangunan klinik harus bebas asap rokok', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(12, 'd. Terpasang papan nama dengan ukuran minimal 1 m2 dengan dasar putih huruf hitam yang memuat informasi :\r\n1) Jenis klinik utama', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(13, '2) Nama klinik', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(14, '3) Jam buka klinik', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(15, 'e. Ruang penerimaan :\r\n1) Ruang administrasi', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(16, '2) Ruang tunggu( nama dokter/drg wajib dicantumkan di ruang tunggu klinik )', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(17, 'f. Ruang pelayanan medik\r\n1) Ruang pemeriksaan umum', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(18, '2) Ruang Tindakan', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(19, '3) Ruang Farmasi', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(20, '4) Ruang Steril', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(21, 'g. Ruang Penunjang Non Medik : 1) Ruang Asi', 'Wajib ada', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(22, '2) Kamar Mandi', 'Minimal 1', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(23, '5. Prasarana Klinik : a. Sistem penghawaan ( ventilasi )', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(24, 'b. Sistem Pencahayaan', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(25, 'c. Sistem air dan sanitasi', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(26, 'd. Pengolahan limbah cair', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26'),
(27, 'e. Sistem Proteksi Kebakaran', '', '2022-04-03 15:30:26', '2022-04-03 15:30:26');

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
  `level_user` enum('Admin','Penilai') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `kode_user`, `username`, `password`, `nama_user`, `nip_user`, `level_user`, `created_at`, `update_at`) VALUES
(8, 'USR13032200001', 'admin', '$2y$10$VMAd5ckqFqgqrT4wDJb0cubNKnfbimIBwexly4DkpBYvzE6Goi2WG', 'Admin', '197110202002121006', 'Admin', '2022-04-05 01:48:50', '2022-04-05 01:48:50'),
(20, 'USR18032200004', 'dinkes1', '$2y$10$57ATtYb3B/vh/U8xkKlIfeRygOI6PgSbOuoJWWgNFzbG3vmRMqAmm', 'Dinkes', '123456789012345698', 'Admin', '2022-04-05 01:48:50', '2022-04-05 01:48:50'),
(21, 'USR23032200005', 'ardian1', '$2y$10$8C3LwlyxRaaG/UrxcgLfzutX/12KwjxmjMnLA6tlrnic7Grak7YVK', 'Ardian', '123456789012345676', 'Admin', '2022-04-05 01:48:50', '2022-04-05 01:48:50');

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
  ADD KEY `id_klinik` (`id_klinik`),
  ADD KEY `no_penilaian` (`no_penilaian`);

--
-- Indexes for table `tbl_penilaian_pratama_form_kedua`
--
ALTER TABLE `tbl_penilaian_pratama_form_kedua`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `no_penilaian` (`no_penilaian`,`id_deskripsi`),
  ADD KEY `id_deskripsi` (`id_deskripsi`),
  ADD KEY `id_klinik` (`id_klinik`);

--
-- Indexes for table `tbl_penilaian_pratama_form_ketiga`
--
ALTER TABLE `tbl_penilaian_pratama_form_ketiga`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `no_penilaian` (`no_penilaian`),
  ADD KEY `id_klinik` (`id_klinik`);

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
  ADD KEY `id_deskripsi` (`id_deskripsi`),
  ADD KEY `id_klinik` (`id_klinik`);

--
-- Indexes for table `tbl_penilaian_utama_form_ketiga`
--
ALTER TABLE `tbl_penilaian_utama_form_ketiga`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `no_penilaian` (`no_penilaian`),
  ADD KEY `id_klinik` (`id_klinik`);

--
-- Indexes for table `tbl_penilaian_utama_form_satu`
--
ALTER TABLE `tbl_penilaian_utama_form_satu`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `no_penilaian` (`no_penilaian`),
  ADD KEY `id_rincian_penilaian` (`id_rincian_penilaian`),
  ADD KEY `id_klinik` (`id_klinik`);

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
  MODIFY `id_anggota` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbl_penilaian_pratama_form_kedua`
--
ALTER TABLE `tbl_penilaian_pratama_form_kedua`
  MODIFY `id_penilaian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=529;

--
-- AUTO_INCREMENT for table `tbl_penilaian_pratama_form_ketiga`
--
ALTER TABLE `tbl_penilaian_pratama_form_ketiga`
  MODIFY `id_penilaian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_penilaian_pratama_form_satu`
--
ALTER TABLE `tbl_penilaian_pratama_form_satu`
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=763;

--
-- AUTO_INCREMENT for table `tbl_penilaian_utama_form_kedua`
--
ALTER TABLE `tbl_penilaian_utama_form_kedua`
  MODIFY `id_penilaian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=466;

--
-- AUTO_INCREMENT for table `tbl_penilaian_utama_form_ketiga`
--
ALTER TABLE `tbl_penilaian_utama_form_ketiga`
  MODIFY `id_penilaian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_penilaian_utama_form_satu`
--
ALTER TABLE `tbl_penilaian_utama_form_satu`
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

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
-- Constraints for table `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD CONSTRAINT `tbl_penilaian_ibfk_1` FOREIGN KEY (`id_klinik`) REFERENCES `tbl_klinik` (`id_klinik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_penilaian_pratama_form_kedua`
--
ALTER TABLE `tbl_penilaian_pratama_form_kedua`
  ADD CONSTRAINT `tbl_penilaian_pratama_form_kedua_ibfk_2` FOREIGN KEY (`id_deskripsi`) REFERENCES `tbl_deskripsi_penilaian_pratama` (`id_deskripsi`),
  ADD CONSTRAINT `tbl_penilaian_pratama_form_kedua_ibfk_3` FOREIGN KEY (`no_penilaian`) REFERENCES `tbl_penilaian` (`no_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_penilaian_pratama_form_kedua_ibfk_4` FOREIGN KEY (`id_klinik`) REFERENCES `tbl_penilaian` (`id_klinik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_penilaian_pratama_form_ketiga`
--
ALTER TABLE `tbl_penilaian_pratama_form_ketiga`
  ADD CONSTRAINT `tbl_penilaian_pratama_form_ketiga_ibfk_1` FOREIGN KEY (`no_penilaian`) REFERENCES `tbl_penilaian` (`no_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_penilaian_pratama_form_ketiga_ibfk_2` FOREIGN KEY (`id_klinik`) REFERENCES `tbl_penilaian` (`id_klinik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_penilaian_pratama_form_satu`
--
ALTER TABLE `tbl_penilaian_pratama_form_satu`
  ADD CONSTRAINT `tbl_penilaian_pratama_form_satu_ibfk_2` FOREIGN KEY (`id_rincian_penilaian`) REFERENCES `tbl_rincian_penilaian_pratama` (`id_rincian_penilaian`),
  ADD CONSTRAINT `tbl_penilaian_pratama_form_satu_ibfk_3` FOREIGN KEY (`no_penilaian`) REFERENCES `tbl_penilaian` (`no_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_penilaian_pratama_form_satu_ibfk_4` FOREIGN KEY (`id_klinik`) REFERENCES `tbl_penilaian` (`id_klinik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_penilaian_utama_form_kedua`
--
ALTER TABLE `tbl_penilaian_utama_form_kedua`
  ADD CONSTRAINT `tbl_penilaian_utama_form_kedua_ibfk_2` FOREIGN KEY (`id_deskripsi`) REFERENCES `tbl_deskripsi_penilaian_utama` (`id_deskripsi`),
  ADD CONSTRAINT `tbl_penilaian_utama_form_kedua_ibfk_3` FOREIGN KEY (`no_penilaian`) REFERENCES `tbl_penilaian` (`no_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_penilaian_utama_form_kedua_ibfk_4` FOREIGN KEY (`id_klinik`) REFERENCES `tbl_penilaian` (`id_klinik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_penilaian_utama_form_ketiga`
--
ALTER TABLE `tbl_penilaian_utama_form_ketiga`
  ADD CONSTRAINT `tbl_penilaian_utama_form_ketiga_ibfk_1` FOREIGN KEY (`no_penilaian`) REFERENCES `tbl_penilaian` (`no_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_penilaian_utama_form_ketiga_ibfk_2` FOREIGN KEY (`id_klinik`) REFERENCES `tbl_penilaian` (`id_klinik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_penilaian_utama_form_satu`
--
ALTER TABLE `tbl_penilaian_utama_form_satu`
  ADD CONSTRAINT `tbl_penilaian_utama_form_satu_ibfk_2` FOREIGN KEY (`id_rincian_penilaian`) REFERENCES `tbl_rincian_penilaian_utama` (`id_rincian_penilaian`),
  ADD CONSTRAINT `tbl_penilaian_utama_form_satu_ibfk_3` FOREIGN KEY (`no_penilaian`) REFERENCES `tbl_penilaian` (`no_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_penilaian_utama_form_satu_ibfk_4` FOREIGN KEY (`id_klinik`) REFERENCES `tbl_penilaian` (`id_klinik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
