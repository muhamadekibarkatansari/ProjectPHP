-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2024 pada 17.10
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_guru`
--

CREATE TABLE `data_guru` (
  `nip` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_guru`
--

INSERT INTO `data_guru` (`nip`, `nama`, `status`, `keterangan`) VALUES
('1211212121223434', 'yahya', 'Guru Tetap', 'Wali kelas 10 TKJ 4'),
('12191837333581818', 'lucman', 'Guru Honorer', 'Wali kelas 10 TKJ 6'),
('2147483647', 'Panji Gunawan', 'Guru Tetap', 'Wali kelas 10 TKJ 2'),
('222986977', 'eki', 'Guru Honorer', 'Wali kelas 10 TKJ 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `nisn` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` int(5) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`nisn`, `nama`, `kelas`, `jurusan`) VALUES
('0000000000012', 'luc', 10, 'Teknik elektro'),
('0044713096', 'Panji Gunawan', 10, 'Teknik Mesin'),
('2210631256676', 'Alfia Meilani Putri', 10, 'Teknik Komputer Dan Jaringan'),
('422222222221', 'lili', 10, 'Teknik Komputer Dan Jaringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(16, 'admin', '$2y$10$8D8wRl4NFW5Igj2XY37.OetiZkpM2eN88d2ukM9G4j0RIFdBuKdxO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(3) NOT NULL,
  `nisn_siswa` varchar(25) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `smester` int(4) NOT NULL,
  `absensi` int(4) NOT NULL,
  `sikap` int(4) NOT NULL,
  `harian` int(4) NOT NULL,
  `uts` int(4) NOT NULL,
  `uas` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `nisn_siswa`, `nama_siswa`, `smester`, `absensi`, `sikap`, `harian`, `uts`, `uas`) VALUES
(2, '2210981948', 'Panji Gunawan', 4, 89, 76, 89, 97, 89),
(6, '2210631256676', 'Alfia Meilani Putri', 4, 89, 90, 90, 90, 90),
(9, '0000000000012', 'luc', 14, 89, 90, 100, 100, 100),
(10, '422222222221', 'luc', 2, 89, 90, 89, 87, 100);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
