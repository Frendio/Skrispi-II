-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2020 at 06:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukitmoria`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_jemaat`
--

CREATE TABLE `anggota_jemaat` (
  `id_anggota_jemaat` int(11) NOT NULL,
  `nama_anggota` varchar(250) NOT NULL,
  `tempat_lahir` varchar(250) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `hub_keluarga` varchar(25) DEFAULT NULL,
  `status_nikah` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(250) DEFAULT NULL,
  `keahlian` varchar(250) DEFAULT NULL,
  `etnis` varchar(250) DEFAULT NULL,
  `penyakit` varchar(250) DEFAULT NULL,
  `cacat` varchar(250) DEFAULT NULL,
  `go_darah` varchar(2) DEFAULT NULL,
  `pend_terakhir` varchar(50) DEFAULT NULL,
  `no_telfon` varchar(13) DEFAULT NULL,
  `baptis` varchar(15) DEFAULT NULL,
  `no_surat_baptis` varchar(25) DEFAULT NULL,
  `tanggal_baptis` date DEFAULT NULL,
  `nama_pendeta_baptis` varchar(250) DEFAULT NULL,
  `jemaat_baptis` varchar(250) DEFAULT NULL,
  `sidi` varchar(15) DEFAULT NULL,
  `no_surat_sidi` varchar(25) DEFAULT NULL,
  `tanggal_sidi` date DEFAULT NULL,
  `nama_pendeta_sidi` varchar(250) DEFAULT NULL,
  `jemaat_sidi` varchar(250) DEFAULT NULL,
  `keterangan` text,
  `nama_keluarga` varchar(250) DEFAULT NULL,
  `nama_kolom` varchar(50) DEFAULT NULL,
  `tanggal_sensus` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota_jemaat`
--

INSERT INTO `anggota_jemaat` (`id_anggota_jemaat`, `nama_anggota`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `hub_keluarga`, `status_nikah`, `pekerjaan`, `keahlian`, `etnis`, `penyakit`, `cacat`, `go_darah`, `pend_terakhir`, `no_telfon`, `baptis`, `no_surat_baptis`, `tanggal_baptis`, `nama_pendeta_baptis`, `jemaat_baptis`, `sidi`, `no_surat_sidi`, `tanggal_sidi`, `nama_pendeta_sidi`, `jemaat_sidi`, `keterangan`, `nama_keluarga`, `nama_kolom`, `tanggal_sensus`) VALUES
(2, 'Firma', 'Tempat Lahir', '2020-11-04', 'Laki laki', 'Hub Keluarga', 'Menikah', 'Kerja', 'Ahli', 'Etnis', 'Penyakit', 'Cacat', 'Go', 'S1', 'No Telfon', 'Sudah', 'No Surat Baptis', '2020-11-04', 'Nama Pendeta Baptis', 'Jemaat Baptis', 'Sudah', 'No Surat Baptis', '2020-11-04', 'Nomor Pendeta Sidi', 'Jemaat Sidi', 'Keterangan', 'Nama Keluarga', 'Kolom', '2020-11-04 16:14:12'),
(7, 'Frendio', NULL, '2020-11-02', 'Laki laki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-05 12:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_ibadah`
--

CREATE TABLE `jadwal_ibadah` (
  `id_jadwal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `khotbah` varchar(250) NOT NULL,
  `tipe_ibadah` varchar(50) DEFAULT NULL,
  `tempat_ibadah` varchar(250) DEFAULT NULL,
  `catatan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_ibadah`
--

INSERT INTO `jadwal_ibadah` (`id_jadwal`, `tanggal`, `waktu_mulai`, `waktu_selesai`, `khotbah`, `tipe_ibadah`, `tempat_ibadah`, `catatan`) VALUES
(1, '2020-11-04', '22:28:00', '03:00:00', 'Nama Lengkap', 'Ibadah Lansia', 'sadf', 'asdf'),
(2, '2020-11-05', '22:29:00', '06:00:00', 'Firma', 'Ibadah Gereja', 'dfas', NULL),
(3, '2020-11-08', '22:53:00', '06:00:00', 'Firma', 'Ibadah Kaum Bapa', 'khghj', 'bawa masker'),
(4, '2020-11-16', '12:17:00', '01:19:00', 'Frendio', 'Ibadah Kaum Ibu', 'sadf', 'bawa masker');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `jenis_kegiatan` varchar(250) NOT NULL,
  `tempat_kegiatan` varchar(250) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `waktu_kegiatan` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `majelis_jemaat`
--

CREATE TABLE `majelis_jemaat` (
  `id_majelis_jemaat` int(11) NOT NULL,
  `id_anggota_jemaat` int(11) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sakit_meninggal`
--

CREATE TABLE `sakit_meninggal` (
  `id_saj` int(11) NOT NULL,
  `jenis_status` varchar(25) NOT NULL,
  `nama_anggota` varchar(250) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nama_user` varchar(250) NOT NULL,
  `tipe_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama_user`, `tipe_user`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Firman', 'Admin'),
(5, 'sinode', '03a7af2dd6458b9b1800ef69a3c6edbae0aa01c1', 'Sinode', 'Sinode');

-- --------------------------------------------------------

--
-- Table structure for table `warta_jemaat`
--

CREATE TABLE `warta_jemaat` (
  `id_wj` int(11) NOT NULL,
  `file` text NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warta_jemaat`
--

INSERT INTO `warta_jemaat` (`id_wj`, `file`, `tanggal`, `keterangan`) VALUES
(4, 'warta jemaat 25 oktober 2020 pdf.pdf', '2020-11-05', 'asdf'),
(5, 'warta jemaat 25 oktober 2020 pdf1.pdf', '2020-11-05', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_jemaat`
--
ALTER TABLE `anggota_jemaat`
  ADD PRIMARY KEY (`id_anggota_jemaat`);

--
-- Indexes for table `jadwal_ibadah`
--
ALTER TABLE `jadwal_ibadah`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `majelis_jemaat`
--
ALTER TABLE `majelis_jemaat`
  ADD PRIMARY KEY (`id_majelis_jemaat`),
  ADD KEY `id_anggota_jemaat` (`id_anggota_jemaat`);

--
-- Indexes for table `sakit_meninggal`
--
ALTER TABLE `sakit_meninggal`
  ADD PRIMARY KEY (`id_saj`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `warta_jemaat`
--
ALTER TABLE `warta_jemaat`
  ADD PRIMARY KEY (`id_wj`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota_jemaat`
--
ALTER TABLE `anggota_jemaat`
  MODIFY `id_anggota_jemaat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jadwal_ibadah`
--
ALTER TABLE `jadwal_ibadah`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `majelis_jemaat`
--
ALTER TABLE `majelis_jemaat`
  MODIFY `id_majelis_jemaat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sakit_meninggal`
--
ALTER TABLE `sakit_meninggal`
  MODIFY `id_saj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `warta_jemaat`
--
ALTER TABLE `warta_jemaat`
  MODIFY `id_wj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `majelis_jemaat`
--
ALTER TABLE `majelis_jemaat`
  ADD CONSTRAINT `majelis_jemaat_ibfk_1` FOREIGN KEY (`id_anggota_jemaat`) REFERENCES `anggota_jemaat` (`id_anggota_jemaat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
