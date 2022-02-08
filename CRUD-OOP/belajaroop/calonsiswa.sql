-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2022 pada 06.21
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calonsiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelcalon`
--

CREATE TABLE `tabelcalon` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `tgllahir` varchar(100) NOT NULL,
  `wn` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` int(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `ayah` varchar(100) NOT NULL,
  `ibu` varchar(100) NOT NULL,
  `penghasilan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabelcalon`
--

INSERT INTO `tabelcalon` (`id`, `nama`, `tempat`, `tgllahir`, `wn`, `alamat`, `email`, `nohp`, `asal`, `ayah`, `ibu`, `penghasilan`) VALUES
(9, 'samsudin', 'sukabumi', '2022-02-02', 'Indonesia', 'cilebut', 'ndhfazhr@gmail.com', 2147483647, 'Smpn 1 Bojong Gede', 'tatang', 'tuti', '14.000.000'),
(11, 'faried', 'bogor', '2008-01-09', 'Indonesia', 'Dramaga', 'faried@gmail.com', 2147483647, 'Smpn 11 bogor', 'tarmijo', 'nunung', '7.000.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabelcalon`
--
ALTER TABLE `tabelcalon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabelcalon`
--
ALTER TABLE `tabelcalon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
