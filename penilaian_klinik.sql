-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 06:47 PM
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
  `masa_berlaku_ijin` date NOT NULL,
  `nomor_siop` varchar(100) NOT NULL,
  `no_surat` varchar(200) NOT NULL,
  `nama_perwakilan` varchar(200) NOT NULL,
  `jabatan_perwakilan` varchar(200) NOT NULL,
  `status_penilaian` enum('Sudah','Belum','Sedang') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_klinik`
--

INSERT INTO `tbl_klinik` (`id_klinik`, `nama_user`, `nama_anggota1`, `nama_anggota2`, `nama_anggota3`, `nama_anggota4`, `nama_klinik`, `kemampuan_pelayanan`, `jenis_pelayanan_klinik`, `alamat_klinik`, `id_kecamatan_klinik`, `id_kelurahan_klinik`, `tgl_visitasi`, `masa_berlaku_ijin`, `nomor_siop`, `no_surat`, `nama_perwakilan`, `jabatan_perwakilan`, `status_penilaian`, `created_at`, `update_at`) VALUES
('PR004', 'Ardian', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Amalia Sehat', 'Pratama Umum', 'Rawat Jalan', 'Jl. Simpang 5', 3, 24, '2022-04-04', '2022-04-11', '', 'AXI//-02-0201929//2021', 'dr. Ahmad Jaelani', 'Pelaksana', 'Sudah', '2022-04-04 01:43:31', '2022-04-17 13:59:37'),
('PR005', 'Ardian', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Rahmatan Lil Alamin', 'Pratama Umum', 'Rawat Jalan', 'Jl. Semarang Raya', 15, 156, '2022-06-04', '2022-04-01', 'XXII/209102/2109012', 'AX909012092109', 'dr. Agung Santoso ', 'Pelaksana', 'Sudah', '2022-04-10 08:09:34', '2022-04-18 01:50:10'),
('PR006', 'Ardian', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Sehat Sentosa', 'Utama Umum', 'Rawat Jalan', 'Jl. Sendang Guwo', 15, 160, '2022-04-10', '2022-04-17', 'XII0030290/0-102-1', 'AX909012092109', 'Ahmad Sanjaya', 'Dokter Umum', 'Sudah', '2022-04-10 08:28:49', '2022-04-18 01:44:34'),
('PR008', 'Ardian', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Gigi Sehat Sentosa', 'Utama Gigi', 'Rawat Jalan', 'Jl. Bridgjen Sudiarto No. 21', 15, 163, '2022-04-10', '0000-00-00', '', 'KOKOi-e-w923-20-2', '', '', 'Sedang', '2022-04-10 15:08:54', '2022-04-13 00:52:55'),
('PR009', 'Ardian', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Cito Raya', 'Utama Umum', 'Rawat Jalan', 'Jl. Dr. Cipto', 13, 142, '2022-04-11', '0000-00-00', '', 'XUISJIJA8989/0-90', '', '', 'Belum', '2022-04-11 07:24:01', '2022-04-20 03:53:40'),
('UT007', 'Ardian', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Gigi Nadira Pedurungan', 'Pratama Gigi', 'Rawat Jalan', 'Jl. Pedurungan Raya', 9, 87, '2022-04-10', '2022-04-17', 'AUSK))#()(#308038203', 'AxX(09w0201', 'dr. Rahmad Syukron', 'Pelaksana', 'Sudah', '2022-04-10 12:39:15', '2022-04-17 14:07:56'),
('UT011', 'Ardian', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Gigi Amanah', 'Pratama Gigi', 'Rawat Jalan', 'Jl. Semarang Raya', 1, 10, '2022-04-20', '0000-00-00', '', 'asasa', '', '', 'Belum', '2022-04-20 01:24:09', '2022-04-20 01:24:09');

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
(61, 'TASK-PRTM04042022', 'PR004', 'Sudah', '2022-04-04 01:43:41', '2022-04-04 01:43:41'),
(68, 'TASK-PRTM10042022', 'PR005', 'Sudah', '2022-04-10 08:14:49', '2022-04-10 08:14:49'),
(69, 'TASK-PRTM10042022', 'PR006', 'Sudah', '2022-04-10 08:30:27', '2022-04-10 08:30:27'),
(70, 'TASK-UTM10042022', 'UT007', 'Sudah', '2022-04-10 13:44:32', '2022-04-10 13:44:32'),
(71, 'TASK-UTM10042022', 'PR008', 'Sudah', '2022-04-10 15:09:33', '2022-04-10 15:09:33'),
(72, 'TASK-PRTM11042022', 'PR009', 'Sudah', '2022-04-11 07:24:06', '2022-04-11 07:24:06');

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
(529, 'TASK-PRTM04042022', 'PR004', 1, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(530, 'TASK-PRTM04042022', 'PR004', 2, 'Ya', '', 'Set', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(531, 'TASK-PRTM04042022', 'PR004', 3, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(532, 'TASK-PRTM04042022', 'PR004', 4, 'Ya', '', '', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(533, 'TASK-PRTM04042022', 'PR004', 5, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(534, 'TASK-PRTM04042022', 'PR004', 6, 'Ya', '', 'Set', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(535, 'TASK-PRTM04042022', 'PR004', 7, 'Ya', '', 'Set', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(536, 'TASK-PRTM04042022', 'PR004', 8, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(537, 'TASK-PRTM04042022', 'PR004', 9, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(538, 'TASK-PRTM04042022', 'PR004', 10, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(539, 'TASK-PRTM04042022', 'PR004', 11, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(540, 'TASK-PRTM04042022', 'PR004', 12, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(541, 'TASK-PRTM04042022', 'PR004', 13, 'Tidak', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(542, 'TASK-PRTM04042022', 'PR004', 14, 'Tidak', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(543, 'TASK-PRTM04042022', 'PR004', 15, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(544, 'TASK-PRTM04042022', 'PR004', 16, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(545, 'TASK-PRTM04042022', 'PR004', 17, 'Tidak', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(546, 'TASK-PRTM04042022', 'PR004', 18, 'Ya', '', 'Set', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(547, 'TASK-PRTM04042022', 'PR004', 19, 'Tidak', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(548, 'TASK-PRTM04042022', 'PR004', 20, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(549, 'TASK-PRTM04042022', 'PR004', 21, 'Tidak', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(550, 'TASK-PRTM04042022', 'PR004', 22, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(551, 'TASK-PRTM04042022', 'PR004', 23, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(552, 'TASK-PRTM04042022', 'PR004', 24, 'Tidak', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(553, 'TASK-PRTM04042022', 'PR004', 25, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(554, 'TASK-PRTM04042022', 'PR004', 26, 'Tidak', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(555, 'TASK-PRTM04042022', 'PR004', 27, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(556, 'TASK-PRTM04042022', 'PR004', 28, 'Tidak', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(557, 'TASK-PRTM04042022', 'PR004', 29, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(558, 'TASK-PRTM04042022', 'PR004', 30, 'Tidak', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(559, 'TASK-PRTM04042022', 'PR004', 31, 'Tidak', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(560, 'TASK-PRTM04042022', 'PR004', 32, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(561, 'TASK-PRTM04042022', 'PR004', 33, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(562, 'TASK-PRTM04042022', 'PR004', 34, 'Tidak', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(563, 'TASK-PRTM04042022', 'PR004', 35, 'Tidak', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(564, 'TASK-PRTM04042022', 'PR004', 36, 'Tidak', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(565, 'TASK-PRTM04042022', 'PR004', 37, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(566, 'TASK-PRTM04042022', 'PR004', 38, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(567, 'TASK-PRTM04042022', 'PR004', 39, 'Ya', '', 'Set', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(568, 'TASK-PRTM04042022', 'PR004', 40, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(569, 'TASK-PRTM04042022', 'PR004', 41, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(570, 'TASK-PRTM04042022', 'PR004', 42, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(571, 'TASK-PRTM04042022', 'PR004', 43, 'Tidak', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(572, 'TASK-PRTM04042022', 'PR004', 44, 'Tidak', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(573, 'TASK-PRTM04042022', 'PR004', 45, 'Tidak', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(574, 'TASK-PRTM04042022', 'PR004', 46, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(575, 'TASK-PRTM04042022', 'PR004', 47, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(576, 'TASK-PRTM04042022', 'PR004', 48, 'Tidak', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(577, 'TASK-PRTM04042022', 'PR004', 49, 'Tidak', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(578, 'TASK-PRTM04042022', 'PR004', 50, 'Ya', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(579, 'TASK-PRTM04042022', 'PR004', 51, 'Tidak', '', 'Unit', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(580, 'TASK-PRTM04042022', 'PR004', 52, 'Ya', '', 'Unit', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(581, 'TASK-PRTM04042022', 'PR004', 53, 'Tidak', '', 'Unit', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(582, 'TASK-PRTM04042022', 'PR004', 54, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(583, 'TASK-PRTM04042022', 'PR004', 55, 'Tidak', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(584, 'TASK-PRTM04042022', 'PR004', 56, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(585, 'TASK-PRTM04042022', 'PR004', 57, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(586, 'TASK-PRTM04042022', 'PR004', 58, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(587, 'TASK-PRTM04042022', 'PR004', 59, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(588, 'TASK-PRTM04042022', 'PR004', 60, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(589, 'TASK-PRTM04042022', 'PR004', 61, 'Tidak', '', 'Buah', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(590, 'TASK-PRTM04042022', 'PR004', 62, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(591, 'TASK-PRTM04042022', 'PR004', 63, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(592, 'TASK-PRTM04042022', 'PR004', 64, 'Tidak', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(593, 'TASK-PRTM04042022', 'PR004', 65, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(594, 'TASK-PRTM04042022', 'PR004', 66, 'Tidak', '', 'Sesuai Kebutuhan', '', '2022-04-07 05:28:24', '2022-04-07 05:28:24'),
(595, 'TASK-PRTM10042022', 'PR005', 1, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(596, 'TASK-PRTM10042022', 'PR005', 2, 'Ya', '', 'Set', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(597, 'TASK-PRTM10042022', 'PR005', 3, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(598, 'TASK-PRTM10042022', 'PR005', 4, 'Ya', '', '', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(599, 'TASK-PRTM10042022', 'PR005', 5, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(600, 'TASK-PRTM10042022', 'PR005', 6, 'Ya', '', 'Set', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(601, 'TASK-PRTM10042022', 'PR005', 7, 'Ya', '', 'Set', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(602, 'TASK-PRTM10042022', 'PR005', 8, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(603, 'TASK-PRTM10042022', 'PR005', 9, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(604, 'TASK-PRTM10042022', 'PR005', 10, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(605, 'TASK-PRTM10042022', 'PR005', 11, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(606, 'TASK-PRTM10042022', 'PR005', 12, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(607, 'TASK-PRTM10042022', 'PR005', 13, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(608, 'TASK-PRTM10042022', 'PR005', 14, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(609, 'TASK-PRTM10042022', 'PR005', 15, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(610, 'TASK-PRTM10042022', 'PR005', 16, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(611, 'TASK-PRTM10042022', 'PR005', 17, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(612, 'TASK-PRTM10042022', 'PR005', 18, 'Ya', '', 'Set', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(613, 'TASK-PRTM10042022', 'PR005', 19, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(614, 'TASK-PRTM10042022', 'PR005', 20, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(615, 'TASK-PRTM10042022', 'PR005', 21, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(616, 'TASK-PRTM10042022', 'PR005', 22, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(617, 'TASK-PRTM10042022', 'PR005', 23, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(618, 'TASK-PRTM10042022', 'PR005', 24, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(619, 'TASK-PRTM10042022', 'PR005', 25, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(620, 'TASK-PRTM10042022', 'PR005', 26, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(621, 'TASK-PRTM10042022', 'PR005', 27, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(622, 'TASK-PRTM10042022', 'PR005', 28, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(623, 'TASK-PRTM10042022', 'PR005', 29, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(624, 'TASK-PRTM10042022', 'PR005', 30, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(625, 'TASK-PRTM10042022', 'PR005', 31, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(626, 'TASK-PRTM10042022', 'PR005', 32, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(627, 'TASK-PRTM10042022', 'PR005', 33, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(628, 'TASK-PRTM10042022', 'PR005', 34, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(629, 'TASK-PRTM10042022', 'PR005', 35, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(630, 'TASK-PRTM10042022', 'PR005', 36, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(631, 'TASK-PRTM10042022', 'PR005', 37, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(632, 'TASK-PRTM10042022', 'PR005', 38, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(633, 'TASK-PRTM10042022', 'PR005', 39, 'Ya', '', 'Set', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(634, 'TASK-PRTM10042022', 'PR005', 40, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(635, 'TASK-PRTM10042022', 'PR005', 41, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(636, 'TASK-PRTM10042022', 'PR005', 42, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(637, 'TASK-PRTM10042022', 'PR005', 43, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(638, 'TASK-PRTM10042022', 'PR005', 44, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(639, 'TASK-PRTM10042022', 'PR005', 45, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(640, 'TASK-PRTM10042022', 'PR005', 46, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(641, 'TASK-PRTM10042022', 'PR005', 47, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(642, 'TASK-PRTM10042022', 'PR005', 48, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(643, 'TASK-PRTM10042022', 'PR005', 49, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(644, 'TASK-PRTM10042022', 'PR005', 50, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(645, 'TASK-PRTM10042022', 'PR005', 51, 'Ya', '', 'Unit', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(646, 'TASK-PRTM10042022', 'PR005', 52, 'Ya', '', 'Unit', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(647, 'TASK-PRTM10042022', 'PR005', 53, 'Ya', '', 'Unit', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(648, 'TASK-PRTM10042022', 'PR005', 54, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(649, 'TASK-PRTM10042022', 'PR005', 55, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(650, 'TASK-PRTM10042022', 'PR005', 56, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(651, 'TASK-PRTM10042022', 'PR005', 57, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(652, 'TASK-PRTM10042022', 'PR005', 58, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(653, 'TASK-PRTM10042022', 'PR005', 59, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(654, 'TASK-PRTM10042022', 'PR005', 60, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(655, 'TASK-PRTM10042022', 'PR005', 61, 'Ya', '', 'Buah', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(656, 'TASK-PRTM10042022', 'PR005', 62, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(657, 'TASK-PRTM10042022', 'PR005', 63, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(658, 'TASK-PRTM10042022', 'PR005', 64, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(659, 'TASK-PRTM10042022', 'PR005', 65, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(660, 'TASK-PRTM10042022', 'PR005', 66, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 12:04:28', '2022-04-10 12:04:28'),
(661, 'TASK-PRTM10042022', 'PR006', 1, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(662, 'TASK-PRTM10042022', 'PR006', 2, 'Ya', '', 'Set', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(663, 'TASK-PRTM10042022', 'PR006', 3, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(664, 'TASK-PRTM10042022', 'PR006', 4, 'Ya', '', '', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(665, 'TASK-PRTM10042022', 'PR006', 5, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(666, 'TASK-PRTM10042022', 'PR006', 6, 'Ya', '', 'Set', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(667, 'TASK-PRTM10042022', 'PR006', 7, 'Ya', '', 'Set', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(668, 'TASK-PRTM10042022', 'PR006', 8, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(669, 'TASK-PRTM10042022', 'PR006', 9, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(670, 'TASK-PRTM10042022', 'PR006', 10, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(671, 'TASK-PRTM10042022', 'PR006', 11, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(672, 'TASK-PRTM10042022', 'PR006', 12, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(673, 'TASK-PRTM10042022', 'PR006', 13, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(674, 'TASK-PRTM10042022', 'PR006', 14, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(675, 'TASK-PRTM10042022', 'PR006', 15, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(676, 'TASK-PRTM10042022', 'PR006', 16, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(677, 'TASK-PRTM10042022', 'PR006', 17, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(678, 'TASK-PRTM10042022', 'PR006', 18, 'Ya', '', 'Set', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(679, 'TASK-PRTM10042022', 'PR006', 19, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(680, 'TASK-PRTM10042022', 'PR006', 20, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(681, 'TASK-PRTM10042022', 'PR006', 21, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(682, 'TASK-PRTM10042022', 'PR006', 22, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(683, 'TASK-PRTM10042022', 'PR006', 23, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(684, 'TASK-PRTM10042022', 'PR006', 24, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(685, 'TASK-PRTM10042022', 'PR006', 25, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(686, 'TASK-PRTM10042022', 'PR006', 26, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(687, 'TASK-PRTM10042022', 'PR006', 27, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(688, 'TASK-PRTM10042022', 'PR006', 28, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(689, 'TASK-PRTM10042022', 'PR006', 29, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(690, 'TASK-PRTM10042022', 'PR006', 30, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(691, 'TASK-PRTM10042022', 'PR006', 31, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(692, 'TASK-PRTM10042022', 'PR006', 32, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(693, 'TASK-PRTM10042022', 'PR006', 33, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(694, 'TASK-PRTM10042022', 'PR006', 34, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(695, 'TASK-PRTM10042022', 'PR006', 35, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(696, 'TASK-PRTM10042022', 'PR006', 36, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(697, 'TASK-PRTM10042022', 'PR006', 37, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(698, 'TASK-PRTM10042022', 'PR006', 38, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(699, 'TASK-PRTM10042022', 'PR006', 39, 'Ya', '', 'Set', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(700, 'TASK-PRTM10042022', 'PR006', 40, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(701, 'TASK-PRTM10042022', 'PR006', 41, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(702, 'TASK-PRTM10042022', 'PR006', 42, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(703, 'TASK-PRTM10042022', 'PR006', 43, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(704, 'TASK-PRTM10042022', 'PR006', 44, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(705, 'TASK-PRTM10042022', 'PR006', 45, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(706, 'TASK-PRTM10042022', 'PR006', 46, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(707, 'TASK-PRTM10042022', 'PR006', 47, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(708, 'TASK-PRTM10042022', 'PR006', 48, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(709, 'TASK-PRTM10042022', 'PR006', 49, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(710, 'TASK-PRTM10042022', 'PR006', 50, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(711, 'TASK-PRTM10042022', 'PR006', 51, 'Ya', '', 'Unit', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(712, 'TASK-PRTM10042022', 'PR006', 52, 'Ya', '', 'Unit', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(713, 'TASK-PRTM10042022', 'PR006', 53, 'Ya', '', 'Unit', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(714, 'TASK-PRTM10042022', 'PR006', 54, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(715, 'TASK-PRTM10042022', 'PR006', 55, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(716, 'TASK-PRTM10042022', 'PR006', 56, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(717, 'TASK-PRTM10042022', 'PR006', 57, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(718, 'TASK-PRTM10042022', 'PR006', 58, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(719, 'TASK-PRTM10042022', 'PR006', 59, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(720, 'TASK-PRTM10042022', 'PR006', 60, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(721, 'TASK-PRTM10042022', 'PR006', 61, 'Ya', '', 'Buah', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(722, 'TASK-PRTM10042022', 'PR006', 62, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(723, 'TASK-PRTM10042022', 'PR006', 63, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(724, 'TASK-PRTM10042022', 'PR006', 64, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(725, 'TASK-PRTM10042022', 'PR006', 65, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32'),
(726, 'TASK-PRTM10042022', 'PR006', 66, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-12 05:46:32', '2022-04-12 05:46:32');

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
  `foto_klinik` mediumtext NOT NULL,
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
(12, 'TASK-PRTM04042022', 'PR004', 'Belum Memenuhi', 'oke', 'Ditolak', 'dr. Ahmad Jaelani', 'Pelaksana', '625c1d49a6351.png', 'Klinik_Amalia_Sehat_foto_klinik_1.png,Klinik_Amalia_Sehat_foto_klinik_2.png,Klinik_Amalia_Sehat_foto_klinik_3.png', '625c1d49a6981.png', '625c1d49a6ee0.png', '625c1d49a71f6.png', '625c1d49a7527.png', '2022-04-07 05:31:23', '2022-04-17 13:59:37'),
(13, 'TASK-PRTM10042022', 'PR005', 'Telah Memenuhi', 'Oke Jos', 'Diperbaiki', 'dr. Agung Santoso ', 'Pelaksana', '62565f1bd369d.png', 'Klinik_Rahmatan_Lil_Alamin_foto_klinik_1.jpg,Klinik_Rahmatan_Lil_Alamin_foto_klinik_2.jpg,Klinik_Rahmatan_Lil_Alamin_foto_klinik_3.jpg,Klinik_Rahmatan_Lil_Alamin_foto_klinik_4.jpg,Klinik_Rahmatan_Lil_Alamin_foto_klinik_5.jpg', '62565f1bd38b4.png', '62565f1bd3ac9.png', '62565f1bd3cac.png', '62565f1bd3ec3.png', '2022-04-10 12:27:27', '2022-04-13 05:26:51'),
(14, 'TASK-PRTM10042022', 'PR006', 'Telah Memenuhi', 'Oke Sudah Memenuhi', 'Disetujui', 'Ahmad Sanjaya', 'Dokter Umum', '625c2190a26f9.png', 'Klinik_Sehat_Sentosa_foto_klinik_1.png,Klinik_Sehat_Sentosa_foto_klinik_2.png', '625c2190a2d38.png', '625c2190a302c.png', '625c2190a3355.png', '625c2190a385e.png', '2022-04-17 14:17:52', '2022-04-18 01:44:22');

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
(763, 'TASK-PRTM04042022', 'PR004', 1, 'Ya', 'Ya', 'oke', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(764, 'TASK-PRTM04042022', 'PR004', 2, 'Ya', 'Tidak', 'oke', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(765, 'TASK-PRTM04042022', 'PR004', 3, 'Ya', 'Ya', 'oke', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(766, 'TASK-PRTM04042022', 'PR004', 4, 'Ya', 'Tidak', 'oke', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(767, 'TASK-PRTM04042022', 'PR004', 5, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(768, 'TASK-PRTM04042022', 'PR004', 6, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(769, 'TASK-PRTM04042022', 'PR004', 7, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(770, 'TASK-PRTM04042022', 'PR004', 8, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(771, 'TASK-PRTM04042022', 'PR004', 9, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(772, 'TASK-PRTM04042022', 'PR004', 10, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(773, 'TASK-PRTM04042022', 'PR004', 11, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(774, 'TASK-PRTM04042022', 'PR004', 12, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(775, 'TASK-PRTM04042022', 'PR004', 21, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(776, 'TASK-PRTM04042022', 'PR004', 22, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(777, 'TASK-PRTM04042022', 'PR004', 23, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(778, 'TASK-PRTM04042022', 'PR004', 24, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(779, 'TASK-PRTM04042022', 'PR004', 25, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(780, 'TASK-PRTM04042022', 'PR004', 26, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(781, 'TASK-PRTM04042022', 'PR004', 27, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(782, 'TASK-PRTM04042022', 'PR004', 28, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(783, 'TASK-PRTM04042022', 'PR004', 29, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(784, 'TASK-PRTM04042022', 'PR004', 30, 'Ya', 'Tidak', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(785, 'TASK-PRTM04042022', 'PR004', 31, 'Ya', 'Tidak', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(786, 'TASK-PRTM04042022', 'PR004', 32, 'Ya', 'Tidak', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(787, 'TASK-PRTM04042022', 'PR004', 33, 'Ya', 'Ya', '', '2022-04-07 05:26:34', '2022-04-07 05:26:34'),
(788, 'TASK-PRTM10042022', 'PR005', 1, 'Ya', 'Ya', 'Oke', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(789, 'TASK-PRTM10042022', 'PR005', 2, 'Ya', 'Ya', 'Oke', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(790, 'TASK-PRTM10042022', 'PR005', 3, 'Ya', 'Ya', 'Bagus', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(791, 'TASK-PRTM10042022', 'PR005', 4, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(792, 'TASK-PRTM10042022', 'PR005', 5, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(793, 'TASK-PRTM10042022', 'PR005', 6, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(794, 'TASK-PRTM10042022', 'PR005', 7, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(795, 'TASK-PRTM10042022', 'PR005', 8, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(796, 'TASK-PRTM10042022', 'PR005', 9, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(797, 'TASK-PRTM10042022', 'PR005', 10, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(798, 'TASK-PRTM10042022', 'PR005', 11, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(799, 'TASK-PRTM10042022', 'PR005', 12, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(800, 'TASK-PRTM10042022', 'PR005', 21, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(801, 'TASK-PRTM10042022', 'PR005', 22, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(802, 'TASK-PRTM10042022', 'PR005', 23, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(803, 'TASK-PRTM10042022', 'PR005', 24, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(804, 'TASK-PRTM10042022', 'PR005', 25, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(805, 'TASK-PRTM10042022', 'PR005', 26, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(806, 'TASK-PRTM10042022', 'PR005', 27, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(807, 'TASK-PRTM10042022', 'PR005', 28, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(808, 'TASK-PRTM10042022', 'PR005', 29, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(809, 'TASK-PRTM10042022', 'PR005', 30, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(810, 'TASK-PRTM10042022', 'PR005', 31, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(811, 'TASK-PRTM10042022', 'PR005', 32, 'Ya', 'Ya', '', '2022-04-10 08:15:55', '2022-04-10 08:15:55'),
(812, 'TASK-PRTM10042022', 'PR005', 33, 'Ya', 'Ya', 'bagus', '2022-04-10 08:15:55', '2022-04-10 08:19:50'),
(813, 'TASK-PRTM10042022', 'PR006', 1, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(814, 'TASK-PRTM10042022', 'PR006', 2, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(815, 'TASK-PRTM10042022', 'PR006', 3, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(816, 'TASK-PRTM10042022', 'PR006', 4, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(817, 'TASK-PRTM10042022', 'PR006', 5, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(818, 'TASK-PRTM10042022', 'PR006', 6, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(819, 'TASK-PRTM10042022', 'PR006', 7, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(820, 'TASK-PRTM10042022', 'PR006', 8, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(821, 'TASK-PRTM10042022', 'PR006', 9, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(822, 'TASK-PRTM10042022', 'PR006', 10, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(823, 'TASK-PRTM10042022', 'PR006', 11, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(824, 'TASK-PRTM10042022', 'PR006', 12, 'Ya', 'Tidak', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(825, 'TASK-PRTM10042022', 'PR006', 21, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(826, 'TASK-PRTM10042022', 'PR006', 22, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(827, 'TASK-PRTM10042022', 'PR006', 23, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(828, 'TASK-PRTM10042022', 'PR006', 24, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(829, 'TASK-PRTM10042022', 'PR006', 25, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(830, 'TASK-PRTM10042022', 'PR006', 26, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(831, 'TASK-PRTM10042022', 'PR006', 27, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(832, 'TASK-PRTM10042022', 'PR006', 28, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(833, 'TASK-PRTM10042022', 'PR006', 29, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(834, 'TASK-PRTM10042022', 'PR006', 30, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(835, 'TASK-PRTM10042022', 'PR006', 31, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(836, 'TASK-PRTM10042022', 'PR006', 32, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39'),
(837, 'TASK-PRTM10042022', 'PR006', 33, 'Ya', 'Ya', '', '2022-04-10 08:31:39', '2022-04-10 08:31:39');

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
(559, 'TASK-UTM10042022', 'UT007', 1, 'Ya', '123', 'Buah', 'ok3', '2022-04-10 13:52:55', '2022-04-10 13:53:24'),
(560, 'TASK-UTM10042022', 'UT007', 2, 'Ya', '124', 'Buah', 'oke3', '2022-04-10 13:52:55', '2022-04-10 13:53:24'),
(561, 'TASK-UTM10042022', 'UT007', 3, 'Ya', '115', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:53:24'),
(562, 'TASK-UTM10042022', 'UT007', 4, 'Ya', '13', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(563, 'TASK-UTM10042022', 'UT007', 5, 'Ya', '14', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(564, 'TASK-UTM10042022', 'UT007', 6, 'Ya', '15', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(565, 'TASK-UTM10042022', 'UT007', 7, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(566, 'TASK-UTM10042022', 'UT007', 8, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(567, 'TASK-UTM10042022', 'UT007', 9, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(568, 'TASK-UTM10042022', 'UT007', 10, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(569, 'TASK-UTM10042022', 'UT007', 11, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(570, 'TASK-UTM10042022', 'UT007', 12, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(571, 'TASK-UTM10042022', 'UT007', 13, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(572, 'TASK-UTM10042022', 'UT007', 14, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(573, 'TASK-UTM10042022', 'UT007', 15, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(574, 'TASK-UTM10042022', 'UT007', 16, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(575, 'TASK-UTM10042022', 'UT007', 17, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(576, 'TASK-UTM10042022', 'UT007', 18, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(577, 'TASK-UTM10042022', 'UT007', 19, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(578, 'TASK-UTM10042022', 'UT007', 20, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(579, 'TASK-UTM10042022', 'UT007', 21, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(580, 'TASK-UTM10042022', 'UT007', 22, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(581, 'TASK-UTM10042022', 'UT007', 23, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(582, 'TASK-UTM10042022', 'UT007', 24, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(583, 'TASK-UTM10042022', 'UT007', 25, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(584, 'TASK-UTM10042022', 'UT007', 26, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(585, 'TASK-UTM10042022', 'UT007', 27, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(586, 'TASK-UTM10042022', 'UT007', 28, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(587, 'TASK-UTM10042022', 'UT007', 29, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(588, 'TASK-UTM10042022', 'UT007', 30, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(589, 'TASK-UTM10042022', 'UT007', 31, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(590, 'TASK-UTM10042022', 'UT007', 32, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(591, 'TASK-UTM10042022', 'UT007', 33, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(592, 'TASK-UTM10042022', 'UT007', 34, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(593, 'TASK-UTM10042022', 'UT007', 35, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(594, 'TASK-UTM10042022', 'UT007', 36, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(595, 'TASK-UTM10042022', 'UT007', 37, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(596, 'TASK-UTM10042022', 'UT007', 38, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(597, 'TASK-UTM10042022', 'UT007', 39, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(598, 'TASK-UTM10042022', 'UT007', 40, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(599, 'TASK-UTM10042022', 'UT007', 41, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(600, 'TASK-UTM10042022', 'UT007', 42, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(601, 'TASK-UTM10042022', 'UT007', 43, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(602, 'TASK-UTM10042022', 'UT007', 44, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(603, 'TASK-UTM10042022', 'UT007', 45, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(604, 'TASK-UTM10042022', 'UT007', 46, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(605, 'TASK-UTM10042022', 'UT007', 47, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(606, 'TASK-UTM10042022', 'UT007', 48, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(607, 'TASK-UTM10042022', 'UT007', 49, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(608, 'TASK-UTM10042022', 'UT007', 50, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(609, 'TASK-UTM10042022', 'UT007', 51, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(610, 'TASK-UTM10042022', 'UT007', 52, 'Ya', '', 'Set', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(611, 'TASK-UTM10042022', 'UT007', 53, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(612, 'TASK-UTM10042022', 'UT007', 54, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(613, 'TASK-UTM10042022', 'UT007', 55, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(614, 'TASK-UTM10042022', 'UT007', 56, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(615, 'TASK-UTM10042022', 'UT007', 57, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(616, 'TASK-UTM10042022', 'UT007', 58, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(617, 'TASK-UTM10042022', 'UT007', 59, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(618, 'TASK-UTM10042022', 'UT007', 60, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(619, 'TASK-UTM10042022', 'UT007', 61, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(620, 'TASK-UTM10042022', 'UT007', 62, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(621, 'TASK-UTM10042022', 'UT007', 63, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(622, 'TASK-UTM10042022', 'UT007', 64, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(623, 'TASK-UTM10042022', 'UT007', 65, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(624, 'TASK-UTM10042022', 'UT007', 66, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(625, 'TASK-UTM10042022', 'UT007', 67, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(626, 'TASK-UTM10042022', 'UT007', 68, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(627, 'TASK-UTM10042022', 'UT007', 69, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(628, 'TASK-UTM10042022', 'UT007', 70, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(629, 'TASK-UTM10042022', 'UT007', 71, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(630, 'TASK-UTM10042022', 'UT007', 72, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(631, 'TASK-UTM10042022', 'UT007', 73, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(632, 'TASK-UTM10042022', 'UT007', 74, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(633, 'TASK-UTM10042022', 'UT007', 75, 'Ya', '', 'Unit', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(634, 'TASK-UTM10042022', 'UT007', 76, 'Ya', '', 'Unit', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(635, 'TASK-UTM10042022', 'UT007', 77, 'Ya', '', 'Unit', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(636, 'TASK-UTM10042022', 'UT007', 78, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(637, 'TASK-UTM10042022', 'UT007', 79, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(638, 'TASK-UTM10042022', 'UT007', 80, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(639, 'TASK-UTM10042022', 'UT007', 81, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(640, 'TASK-UTM10042022', 'UT007', 82, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(641, 'TASK-UTM10042022', 'UT007', 83, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(642, 'TASK-UTM10042022', 'UT007', 84, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(643, 'TASK-UTM10042022', 'UT007', 85, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(644, 'TASK-UTM10042022', 'UT007', 86, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(645, 'TASK-UTM10042022', 'UT007', 87, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(646, 'TASK-UTM10042022', 'UT007', 88, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(647, 'TASK-UTM10042022', 'UT007', 89, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(648, 'TASK-UTM10042022', 'UT007', 90, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(649, 'TASK-UTM10042022', 'UT007', 91, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(650, 'TASK-UTM10042022', 'UT007', 92, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(651, 'TASK-UTM10042022', 'UT007', 93, 'Ya', '', 'Buah', '', '2022-04-10 13:52:55', '2022-04-10 13:52:55'),
(652, 'TASK-UTM10042022', 'PR008', 1, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(653, 'TASK-UTM10042022', 'PR008', 2, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(654, 'TASK-UTM10042022', 'PR008', 3, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(655, 'TASK-UTM10042022', 'PR008', 4, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(656, 'TASK-UTM10042022', 'PR008', 5, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(657, 'TASK-UTM10042022', 'PR008', 6, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(658, 'TASK-UTM10042022', 'PR008', 7, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(659, 'TASK-UTM10042022', 'PR008', 8, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(660, 'TASK-UTM10042022', 'PR008', 9, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(661, 'TASK-UTM10042022', 'PR008', 10, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(662, 'TASK-UTM10042022', 'PR008', 11, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(663, 'TASK-UTM10042022', 'PR008', 12, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(664, 'TASK-UTM10042022', 'PR008', 13, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(665, 'TASK-UTM10042022', 'PR008', 14, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(666, 'TASK-UTM10042022', 'PR008', 15, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(667, 'TASK-UTM10042022', 'PR008', 16, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(668, 'TASK-UTM10042022', 'PR008', 17, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(669, 'TASK-UTM10042022', 'PR008', 18, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(670, 'TASK-UTM10042022', 'PR008', 19, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(671, 'TASK-UTM10042022', 'PR008', 20, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(672, 'TASK-UTM10042022', 'PR008', 21, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(673, 'TASK-UTM10042022', 'PR008', 22, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(674, 'TASK-UTM10042022', 'PR008', 23, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(675, 'TASK-UTM10042022', 'PR008', 24, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(676, 'TASK-UTM10042022', 'PR008', 25, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(677, 'TASK-UTM10042022', 'PR008', 26, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(678, 'TASK-UTM10042022', 'PR008', 27, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(679, 'TASK-UTM10042022', 'PR008', 28, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(680, 'TASK-UTM10042022', 'PR008', 29, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(681, 'TASK-UTM10042022', 'PR008', 30, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(682, 'TASK-UTM10042022', 'PR008', 31, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(683, 'TASK-UTM10042022', 'PR008', 32, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(684, 'TASK-UTM10042022', 'PR008', 33, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(685, 'TASK-UTM10042022', 'PR008', 34, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(686, 'TASK-UTM10042022', 'PR008', 35, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(687, 'TASK-UTM10042022', 'PR008', 36, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(688, 'TASK-UTM10042022', 'PR008', 37, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(689, 'TASK-UTM10042022', 'PR008', 38, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(690, 'TASK-UTM10042022', 'PR008', 39, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(691, 'TASK-UTM10042022', 'PR008', 40, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(692, 'TASK-UTM10042022', 'PR008', 41, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(693, 'TASK-UTM10042022', 'PR008', 42, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(694, 'TASK-UTM10042022', 'PR008', 43, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(695, 'TASK-UTM10042022', 'PR008', 44, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(696, 'TASK-UTM10042022', 'PR008', 45, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(697, 'TASK-UTM10042022', 'PR008', 46, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(698, 'TASK-UTM10042022', 'PR008', 47, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(699, 'TASK-UTM10042022', 'PR008', 48, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(700, 'TASK-UTM10042022', 'PR008', 49, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(701, 'TASK-UTM10042022', 'PR008', 50, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(702, 'TASK-UTM10042022', 'PR008', 51, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(703, 'TASK-UTM10042022', 'PR008', 52, 'Ya', '', 'Set', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(704, 'TASK-UTM10042022', 'PR008', 53, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(705, 'TASK-UTM10042022', 'PR008', 54, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(706, 'TASK-UTM10042022', 'PR008', 55, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(707, 'TASK-UTM10042022', 'PR008', 56, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(708, 'TASK-UTM10042022', 'PR008', 57, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(709, 'TASK-UTM10042022', 'PR008', 58, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(710, 'TASK-UTM10042022', 'PR008', 59, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(711, 'TASK-UTM10042022', 'PR008', 60, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(712, 'TASK-UTM10042022', 'PR008', 61, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(713, 'TASK-UTM10042022', 'PR008', 62, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(714, 'TASK-UTM10042022', 'PR008', 63, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(715, 'TASK-UTM10042022', 'PR008', 64, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(716, 'TASK-UTM10042022', 'PR008', 65, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(717, 'TASK-UTM10042022', 'PR008', 66, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(718, 'TASK-UTM10042022', 'PR008', 67, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(719, 'TASK-UTM10042022', 'PR008', 68, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(720, 'TASK-UTM10042022', 'PR008', 69, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(721, 'TASK-UTM10042022', 'PR008', 70, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(722, 'TASK-UTM10042022', 'PR008', 71, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(723, 'TASK-UTM10042022', 'PR008', 72, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(724, 'TASK-UTM10042022', 'PR008', 73, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(725, 'TASK-UTM10042022', 'PR008', 74, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(726, 'TASK-UTM10042022', 'PR008', 75, 'Ya', '', 'Unit', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(727, 'TASK-UTM10042022', 'PR008', 76, 'Ya', '', 'Unit', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(728, 'TASK-UTM10042022', 'PR008', 77, 'Ya', '', 'Unit', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(729, 'TASK-UTM10042022', 'PR008', 78, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(730, 'TASK-UTM10042022', 'PR008', 79, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(731, 'TASK-UTM10042022', 'PR008', 80, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(732, 'TASK-UTM10042022', 'PR008', 81, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(733, 'TASK-UTM10042022', 'PR008', 82, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(734, 'TASK-UTM10042022', 'PR008', 83, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(735, 'TASK-UTM10042022', 'PR008', 84, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(736, 'TASK-UTM10042022', 'PR008', 85, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(737, 'TASK-UTM10042022', 'PR008', 86, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(738, 'TASK-UTM10042022', 'PR008', 87, 'Ya', '', 'Sesuai Kebutuhan', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(739, 'TASK-UTM10042022', 'PR008', 88, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(740, 'TASK-UTM10042022', 'PR008', 89, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(741, 'TASK-UTM10042022', 'PR008', 90, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(742, 'TASK-UTM10042022', 'PR008', 91, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(743, 'TASK-UTM10042022', 'PR008', 92, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35'),
(744, 'TASK-UTM10042022', 'PR008', 93, 'Ya', '', 'Buah', '', '2022-04-14 07:02:35', '2022-04-14 07:02:35');

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
  `ttd_perwakilan_klinik` varchar(100) NOT NULL,
  `ttd_penilai1` varchar(50) NOT NULL,
  `ttd_penilai2` varchar(50) NOT NULL,
  `ttd_penilai3` varchar(50) NOT NULL,
  `ttd_penilai4` varchar(50) NOT NULL,
  `foto_klinik` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penilaian_utama_form_ketiga`
--

INSERT INTO `tbl_penilaian_utama_form_ketiga` (`id_penilaian`, `no_penilaian`, `id_klinik`, `usulan_rekomendasi`, `uraian_penilaian`, `tindak_lanjut_klinik`, `nama_perwakilan_pihak_klinik`, `jabatan_perwakilan_pihak_klinik`, `ttd_perwakilan_klinik`, `ttd_penilai1`, `ttd_penilai2`, `ttd_penilai3`, `ttd_penilai4`, `foto_klinik`, `created_at`, `update_at`) VALUES
(5, 'TASK-UTM10042022', 'UT007', 'Telah Memenuhi', 'Oke', 'Diperbaiki', 'dr. Rahmad Syukron', 'Pelaksana', '6257b384a7a5f.png', '6257b384a7c9e.png', '6257b384a7da6.png', '6257b384b13e6.png', '6257b384b175e.png', 'Klinik_Gigi_Nadira_Pedurungan_foto_klinik_1.jpg,Klinik_Gigi_Nadira_Pedurungan_foto_klinik_2.jpg,Klinik_Gigi_Nadira_Pedurungan_foto_klinik_3.jpg,Klinik_Gigi_Nadira_Pedurungan_foto_klinik_4.jpg,Klinik_Gigi_Nadira_Pedurungan_foto_klinik_5.jpg', '2022-04-10 14:16:42', '2022-04-17 14:00:33');

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
(155, 'TASK-UTM10042022', 'UT007', 1, 'Ya', 'Ya', 'oke', '2022-04-10 13:45:39', '2022-04-10 13:53:44'),
(156, 'TASK-UTM10042022', 'UT007', 5, 'Ya', 'Ya', 'oke', '2022-04-10 13:45:39', '2022-04-10 13:53:44'),
(157, 'TASK-UTM10042022', 'UT007', 8, 'Ya', 'Ya', 'oke', '2022-04-10 13:45:39', '2022-04-10 13:53:44'),
(158, 'TASK-UTM10042022', 'UT007', 9, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(159, 'TASK-UTM10042022', 'UT007', 10, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(160, 'TASK-UTM10042022', 'UT007', 11, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(161, 'TASK-UTM10042022', 'UT007', 12, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(162, 'TASK-UTM10042022', 'UT007', 13, 'Tidak', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(163, 'TASK-UTM10042022', 'UT007', 14, 'Tidak', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(164, 'TASK-UTM10042022', 'UT007', 15, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(165, 'TASK-UTM10042022', 'UT007', 16, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(166, 'TASK-UTM10042022', 'UT007', 17, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(167, 'TASK-UTM10042022', 'UT007', 18, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(168, 'TASK-UTM10042022', 'UT007', 19, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(169, 'TASK-UTM10042022', 'UT007', 20, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(170, 'TASK-UTM10042022', 'UT007', 21, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(171, 'TASK-UTM10042022', 'UT007', 22, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(172, 'TASK-UTM10042022', 'UT007', 23, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(173, 'TASK-UTM10042022', 'UT007', 24, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(174, 'TASK-UTM10042022', 'UT007', 25, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(175, 'TASK-UTM10042022', 'UT007', 26, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(176, 'TASK-UTM10042022', 'UT007', 27, 'Ya', 'Ya', '', '2022-04-10 13:45:39', '2022-04-10 13:45:39'),
(177, 'TASK-UTM10042022', 'PR008', 1, 'Ya', 'Ya', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(178, 'TASK-UTM10042022', 'PR008', 5, 'Ya', 'Tidak', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(179, 'TASK-UTM10042022', 'PR008', 8, 'Ya', 'Tidak', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(180, 'TASK-UTM10042022', 'PR008', 9, 'Ya', 'Tidak', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(181, 'TASK-UTM10042022', 'PR008', 10, 'Ya', 'Ya', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(182, 'TASK-UTM10042022', 'PR008', 11, 'Ya', 'Ya', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(183, 'TASK-UTM10042022', 'PR008', 12, 'Ya', 'Tidak', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(184, 'TASK-UTM10042022', 'PR008', 13, 'Ya', 'Ya', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(185, 'TASK-UTM10042022', 'PR008', 14, 'Ya', 'Ya', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(186, 'TASK-UTM10042022', 'PR008', 15, 'Ya', 'Ya', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(187, 'TASK-UTM10042022', 'PR008', 16, 'Ya', 'Ya', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(188, 'TASK-UTM10042022', 'PR008', 17, 'Ya', 'Tidak', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(189, 'TASK-UTM10042022', 'PR008', 18, 'Ya', 'Tidak', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(190, 'TASK-UTM10042022', 'PR008', 19, 'Ya', 'Ya', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(191, 'TASK-UTM10042022', 'PR008', 20, 'Ya', 'Tidak', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(192, 'TASK-UTM10042022', 'PR008', 21, 'Ya', 'Tidak', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(193, 'TASK-UTM10042022', 'PR008', 22, 'Ya', 'Ya', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(194, 'TASK-UTM10042022', 'PR008', 23, 'Ya', 'Ya', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(195, 'TASK-UTM10042022', 'PR008', 24, 'Ya', 'Ya', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(196, 'TASK-UTM10042022', 'PR008', 25, 'Ya', 'Ya', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(197, 'TASK-UTM10042022', 'PR008', 26, 'Ya', 'Ya', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09'),
(198, 'TASK-UTM10042022', 'PR008', 27, 'Ya', 'Ya', '', '2022-04-10 15:11:09', '2022-04-10 15:11:09');

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
(20, 'USR18032200004', 'dinkes1', '$2y$10$57ATtYb3B/vh/U8xkKlIfeRygOI6PgSbOuoJWWgNFzbG3vmRMqAmm', 'Dinkes', '123456789012345698', 'Penilai', '2022-04-05 01:48:50', '2022-04-14 05:44:42'),
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
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tbl_penilaian_pratama_form_kedua`
--
ALTER TABLE `tbl_penilaian_pratama_form_kedua`
  MODIFY `id_penilaian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=727;

--
-- AUTO_INCREMENT for table `tbl_penilaian_pratama_form_ketiga`
--
ALTER TABLE `tbl_penilaian_pratama_form_ketiga`
  MODIFY `id_penilaian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_penilaian_pratama_form_satu`
--
ALTER TABLE `tbl_penilaian_pratama_form_satu`
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=838;

--
-- AUTO_INCREMENT for table `tbl_penilaian_utama_form_kedua`
--
ALTER TABLE `tbl_penilaian_utama_form_kedua`
  MODIFY `id_penilaian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=745;

--
-- AUTO_INCREMENT for table `tbl_penilaian_utama_form_ketiga`
--
ALTER TABLE `tbl_penilaian_utama_form_ketiga`
  MODIFY `id_penilaian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_penilaian_utama_form_satu`
--
ALTER TABLE `tbl_penilaian_utama_form_satu`
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
