-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 08 Bulan Mei 2020 pada 16.54
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcphp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `email`, `alamat`) VALUES
('2010589632', 'Desi Rea', 'Teknik Informatika', 'desi@argapura.com', 'Panongan,  Tangerang'),
('2014965879', 'Rizki Lestari', 'Teknik Kimia', 'kikielbe@gmail.com', 'Curug, Tangerang'),
('201514063', 'Ahmad Susanto', 'Teknik Informatika', 'ahmadsusanto912@gmail.com', 'Kp. Pabuaran, Curug Kulon, Curug'),
('2015148987', 'Arina Sabila', 'Teknik Informatika', 'arin@gmail.com', 'TIgaraksa, Tangerang'),
('2015478963', 'Karin Kurenai', 'Teknik Informatika', 'karin@gmail.com', 'Sukabumi'),
('2016145896', 'Ammar Maulana', 'Teknik Informatika', 'ammar@gmail.com', 'Kutabumi, Tangerang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
