-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Agu 2019 pada 10.20
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ajar`
--

CREATE TABLE `ajar` (
  `nip` char(10) NOT NULL,
  `kd_matkul` char(5) NOT NULL,
  `sks` char(1) NOT NULL,
  `jam` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(10) NOT NULL,
  `nama_dosen` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama_dosen`, `alamat`, `telepon`) VALUES
('19098', 'Juan Kalis', 'Jl.merdeka', '021910787312'),
('19099', 'fahmi azis', 'jl.jalan dimapun berada', '02191075624');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `kd_jadwal` varchar(6) NOT NULL,
  `kelompok` varchar(2) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tahun_ajar` varchar(10) NOT NULL,
  `sesi` varchar(12) NOT NULL,
  `keterangan` varchar(10) NOT NULL,
  `status` varchar(11) NOT NULL,
  `kd_matkul` varchar(5) NOT NULL,
  `kd_lab` varchar(6) NOT NULL,
  `nim` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_kp`
--

CREATE TABLE `jadwal_kp` (
  `tanggal` date NOT NULL,
  `status_kp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lab`
--

CREATE TABLE `lab` (
  `kd_lab` varchar(6) NOT NULL,
  `nama_lab` varchar(8) NOT NULL,
  `desc_lab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lab`
--

INSERT INTO `lab` (`kd_lab`, `nama_lab`, `desc_lab`) VALUES
('LAB001', 'Lab01', 'Android,php'),
('LAB002', 'Lab02', 'Android,office');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `kd_matkul` varchar(5) NOT NULL,
  `nama_matkul` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`kd_matkul`, `nama_matkul`) VALUES
('IF029', 'Office Kantor'),
('IPK12', 'Ijk2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nim` varchar(10) NOT NULL,
  `password` varchar(18) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nim`, `password`, `nama`, `email`, `akses`) VALUES
('1711500312', 'bang', 'bambang', 'aw2bam.com', 'asisten'),
('1811502796', 'irenaja', 'iren ada', 'add@gmail.com', 'supervisor'),
('1812500360', '123456', 'ayana aaa', 'ayana@gmail.com', 'supervisor'),
('1812500361', 'qwerty', 'cumi aww', 'add@gmail.com', 'asisten');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`kd_jadwal`),
  ADD KEY `kd_matkul` (`kd_matkul`),
  ADD KEY `kd_lab` (`kd_lab`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`kd_lab`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kd_matkul`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
