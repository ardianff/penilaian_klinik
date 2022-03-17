-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 07:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
(26, '', 'Suryati, S.KM', '198111022009032003');

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
(4, 2, 'Alkohol', 'Sesuai kebutuhan', 'Sesuai kebutuhan');

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
(3, 'Meubelair'),
(4, 'Pencatatan dan Pelaporan'),
(5, 'Peralatan Klinik yang Memiliki Ruang Asi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_klinik`
--

CREATE TABLE `tbl_klinik` (
  `no_penilaian` varchar(30) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `nama_anggota1` varchar(100) NOT NULL,
  `nama_anggota2` varchar(100) NOT NULL,
  `nama_anggota3` varchar(50) NOT NULL,
  `nama_anggota4` varchar(50) NOT NULL,
  `nama_klinik` varchar(200) NOT NULL,
  `kemampuan_pelayanan` enum('Pratama','Utama') NOT NULL,
  `jenis_pelayanan_klinik` enum('Rawat Jalan','Rawat Inap') NOT NULL,
  `alamat_klinik` varchar(200) NOT NULL,
  `tgl_penilaian` date NOT NULL,
  `status_penilaian` enum('Sudah','Belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_klinik`
--

INSERT INTO `tbl_klinik` (`no_penilaian`, `nama_admin`, `nama_anggota1`, `nama_anggota2`, `nama_anggota3`, `nama_anggota4`, `nama_klinik`, `kemampuan_pelayanan`, `jenis_pelayanan_klinik`, `alamat_klinik`, `tgl_penilaian`, `status_penilaian`) VALUES
('TASK-PRTM1403220001', 'Ardian Ferdy Firmansyah', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Sehat Semua', 'Pratama', 'Rawat Jalan', 'Semarang', '2022-03-14', 'Sudah'),
('TASK-PRTM1503220004', 'Ardian Ferdy Firmansyah', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Sehat Raharja', 'Pratama', 'Rawat Jalan', 'Semarang', '2022-03-15', 'Belum'),
('TASK-UTM14032220002', 'Ardian Ferdy Firmansyah', 'dr. Noegroho Edy Rijanto, M.Kes', 'Hanif Pandu Suhito, S.KM,. M. Kom., M.Si', 'Suryati, S.KM', '', 'Klinik Subur', 'Utama', 'Rawat Inap', 'Semarang', '2022-03-14', 'Sudah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_pratama`
--

CREATE TABLE `tbl_penilaian_pratama` (
  `id_penilaian` int(10) NOT NULL,
  `no_penilaian` varchar(50) NOT NULL,
  `id_rincian_penilaian` int(20) NOT NULL,
  `jawab_hasil` varchar(10) NOT NULL,
  `jawab_hasil_verif` varchar(20) NOT NULL,
  `catatan_hasil_penilaian` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penilaian_pratama`
--

INSERT INTO `tbl_penilaian_pratama` (`id_penilaian`, `no_penilaian`, `id_rincian_penilaian`, `jawab_hasil`, `jawab_hasil_verif`, `catatan_hasil_penilaian`) VALUES
(9, 'TASK-PRTM1403220001', 1, 'Ya', 'Ya', 'Sudah'),
(10, 'TASK-PRTM1403220001', 2, 'Ya', 'Ya', 'oke'),
(11, 'TASK-PRTM1403220001', 3, 'Ya', 'Ya', 'Oke'),
(12, 'TASK-PRTM1403220001', 4, 'Ya', 'Ya', 'oke'),
(13, 'TASK-PRTM1403220001', 5, 'Ya', 'Ya', 'oke'),
(14, 'TASK-PRTM1403220001', 6, 'Ya', 'Ya', 'oke'),
(15, 'TASK-PRTM1403220001', 7, 'Ya', 'Ya', 'oke'),
(16, 'TASK-PRTM1403220001', 8, 'Ya', 'Ya', 'mantap'),
(17, 'TASK-PRTM1403220001', 9, 'Ya', 'Ya', 'mantap'),
(18, 'TASK-PRTM1403220001', 10, 'Ya', 'Ya', 'joss'),
(19, 'TASK-PRTM1403220001', 11, 'Ya', 'Ya', 'sudah'),
(20, 'TASK-PRTM1403220001', 12, 'Ya', 'Ya', 'oke'),
(21, 'TASK-PRTM1403220001', 21, 'Ya', 'Ya', 'siap'),
(22, 'TASK-PRTM1403220001', 22, 'Ya', 'Ya', 'siap'),
(23, 'TASK-PRTM1403220001', 23, 'Ya', 'Ya', 'oke'),
(24, 'TASK-PRTM1403220001', 24, 'Ya', 'Ya', 'oke'),
(25, 'TASK-PRTM1403220001', 25, 'Ya', 'Ya', 'oke'),
(26, 'TASK-PRTM1403220001', 26, 'Ya', 'Ya', 'oke'),
(27, 'TASK-PRTM1403220001', 27, 'Ya', 'Ya', 'oke'),
(28, 'TASK-PRTM1403220001', 28, 'Ya', 'Ya', 'siap'),
(29, 'TASK-PRTM1403220001', 29, 'Ya', 'Ya', 'siap'),
(30, 'TASK-PRTM1403220001', 30, 'Ya', 'Ya', 'siapp'),
(31, 'TASK-PRTM1403220001', 31, 'Ya', 'Ya', 'oke deh'),
(32, 'TASK-PRTM1403220001', 32, 'Ya', 'Ya', 'sudah'),
(33, 'TASK-PRTM1403220001', 33, 'Ya', 'Ya', 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian_utama`
--

CREATE TABLE `tbl_penilaian_utama` (
  `id_penilaian` int(10) NOT NULL,
  `no_penilaian` varchar(50) NOT NULL,
  `id_rincian_penilaian` int(20) NOT NULL,
  `jawab_hasil` varchar(10) NOT NULL,
  `jawab_hasil1` varchar(20) NOT NULL,
  `jawab_hasil2` varchar(20) NOT NULL,
  `jawab_hasil_verif` varchar(20) NOT NULL,
  `jawab_hasil_verif1` varchar(20) NOT NULL,
  `jawab_hasil_verif2` varchar(20) NOT NULL,
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
(5, 'Kemampuan pelayanan klinik\r\n- Pelayanan medik dasar', 'Wajib untuk klinik pratama');

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
  `nip_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `kode_user`, `username`, `password`, `nama_user`, `nip_user`) VALUES
(8, 'USR13032200001', 'admin', '$2y$10$zEbz2PzlN4etM91XXP6CFe296kpdOUPwlOWAw1/UUND0FOfsd4HAi', 'dr. Noegroho Edy Rijanto, M.Kes', '197110202002121006'),
(9, 'USR13032200002', 'ardian1', '$2y$10$xDO8fgqsOuJAn7.CGVRa1.gNN3TEERShNor56WUBxvyoFpBSIMm9u', 'Ardian Ferdy Firmansyah', '190090201920190002');

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
-- Indexes for table `tbl_group_pratama`
--
ALTER TABLE `tbl_group_pratama`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `tbl_klinik`
--
ALTER TABLE `tbl_klinik`
  ADD PRIMARY KEY (`no_penilaian`);

--
-- Indexes for table `tbl_penilaian_pratama`
--
ALTER TABLE `tbl_penilaian_pratama`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `no_penilaian` (`no_penilaian`),
  ADD KEY `id_rincian_penilaian` (`id_rincian_penilaian`);

--
-- Indexes for table `tbl_penilaian_utama`
--
ALTER TABLE `tbl_penilaian_utama`
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
  MODIFY `id_anggota` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_deskripsi_penilaian_pratama`
--
ALTER TABLE `tbl_deskripsi_penilaian_pratama`
  MODIFY `id_deskripsi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_group_pratama`
--
ALTER TABLE `tbl_group_pratama`
  MODIFY `id_group` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_penilaian_pratama`
--
ALTER TABLE `tbl_penilaian_pratama`
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_penilaian_utama`
--
ALTER TABLE `tbl_penilaian_utama`
  MODIFY `id_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_rincian_penilaian_pratama`
--
ALTER TABLE `tbl_rincian_penilaian_pratama`
  MODIFY `id_rincian_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_rincian_penilaian_utama`
--
ALTER TABLE `tbl_rincian_penilaian_utama`
  MODIFY `id_rincian_penilaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_deskripsi_penilaian_pratama`
--
ALTER TABLE `tbl_deskripsi_penilaian_pratama`
  ADD CONSTRAINT `tbl_deskripsi_penilaian_pratama_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `tbl_group_pratama` (`id_group`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_penilaian_pratama`
--
ALTER TABLE `tbl_penilaian_pratama`
  ADD CONSTRAINT `tbl_penilaian_pratama_ibfk_1` FOREIGN KEY (`no_penilaian`) REFERENCES `tbl_klinik` (`no_penilaian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_penilaian_pratama_ibfk_2` FOREIGN KEY (`id_rincian_penilaian`) REFERENCES `tbl_rincian_penilaian_pratama` (`id_rincian_penilaian`);

--
-- Constraints for table `tbl_penilaian_utama`
--
ALTER TABLE `tbl_penilaian_utama`
  ADD CONSTRAINT `tbl_penilaian_utama_ibfk_1` FOREIGN KEY (`id_rincian_penilaian`) REFERENCES `tbl_rincian_penilaian_utama` (`id_rincian_penilaian`),
  ADD CONSTRAINT `tbl_penilaian_utama_ibfk_2` FOREIGN KEY (`no_penilaian`) REFERENCES `tbl_klinik` (`no_penilaian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
