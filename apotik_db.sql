-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2020 pada 07.01
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
-- Database: `apotik_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(100) NOT NULL,
  `nama_kasir` varchar(100) NOT NULL,
  `jk_kasir` varchar(100) NOT NULL,
  `umur_kasir` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama_kasir`, `jk_kasir`, `umur_kasir`, `password`) VALUES
(12, 'Sultan', 'laki-laki', '19', 'sultan123'),
(14, 'Hadi', 'laki-laki', '19', 'hadi123'),
(15, 'Widya', 'perempuan', '19', 'widya123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(100) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `harga_obat` varchar(100) NOT NULL,
  `stok_obat` varchar(100) NOT NULL,
  `id_supplier` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `harga_obat`, `stok_obat`, `id_supplier`) VALUES
(5, 'Alpara', '7250', '44', 5),
(6, 'Paracetamol', '6000', '67', 7),
(7, 'Promag', '4000', '15', 8),
(8, 'Amoxcillin', '7500', '18', 5),
(10, 'Lexacrol', '6000', '9', 7),
(12, 'Paramex', '5000', '10', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `nama_supplier` varchar(100) NOT NULL,
  `jk_supplier` varchar(100) NOT NULL,
  `id_supplier` int(100) NOT NULL,
  `alamat_supplier` varchar(100) NOT NULL,
  `telp_supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`nama_supplier`, `jk_supplier`, `id_supplier`, `alamat_supplier`, `telp_supplier`) VALUES
('Melati', 'perempuan', 5, 'Bandung', '01234567890'),
('Rama', 'laki-laki', 7, 'Lamongan', '085231731037'),
('Raisa', 'perempuan', 8, 'Denpasar', '085231731033');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(100) NOT NULL,
  `tanggal_beli` varchar(100) NOT NULL,
  `total_harga` varchar(100) NOT NULL,
  `id_kasir` int(100) NOT NULL,
  `id_obat` int(100) NOT NULL,
  `banyak_obat` varchar(100) NOT NULL,
  `harga_obat` varchar(100) NOT NULL,
  `kode_transaksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_beli`, `total_harga`, `id_kasir`, `id_obat`, `banyak_obat`, `harga_obat`, `kode_transaksi`) VALUES
(5, '2019-12-24', '6000', 12, 6, '1', '6000', '269307524c3ae5eb580a5809fe651ed1'),
(6, '2019-12-24', '14500', 12, 5, '2', '7250', '269307524c3ae5eb580a5809fe651ed1'),
(7, '2019-12-24', '22500', 12, 8, '3', '7500', '269307524c3ae5eb580a5809fe651ed1'),
(8, '2019-12-24', '12000', 12, 10, '2', '6000', '13006433015e0180b4471822.32584993'),
(9, '2019-12-24', '7250', 12, 5, '1', '7250', '13006433015e0180b4471822.32584993'),
(10, '2019-12-24', '15000', 12, 12, '3', '5000', '16975242405e01956036f874.16940625'),
(11, '2019-12-24', '7250', 12, 5, '1', '7250', '16975242405e01956036f874.16940625'),
(12, '2019-12-26', '30000', 12, 10, '5', '6000', '865756705e0437f68b0362.71820442'),
(13, '2019-12-26', '22500', 12, 8, '3', '7500', '865756705e0437f68b0362.71820442'),
(14, '2019-12-26', '45000', 12, 12, '9', '5000', '865756705e0437f68b0362.71820442'),
(15, '2019-12-26', '40000', 12, 7, '10', '4000', '865756705e0437f68b0362.71820442'),
(16, '2019-12-26', '43500', 14, 5, '6', '7250', '3819092465e04381f186cf3.62511219'),
(17, '2019-12-26', '42000', 14, 6, '7', '6000', '3819092465e04381f186cf3.62511219'),
(18, '2019-12-26', '12000', 14, 6, '2', '6000', '6680963015e043acb5f40c1.97927753'),
(19, '2019-12-26', '22500', 14, 8, '3', '7500', '6680963015e043acb5f40c1.97927753'),
(20, '2019-12-29', '10000', 15, 12, '2', '5000', '20896977845e082a1c0ec004.63440804'),
(21, '2019-12-29', '4000', 15, 7, '1', '4000', '20896977845e082a1c0ec004.63440804'),
(22, '2020-01-11', '21750', 12, 5, '3', '7250', '4827295925e1964345a9da4.16418374'),
(23, '2020-01-11', '8000', 12, 7, '2', '4000', '4827295925e1964345a9da4.16418374'),
(24, '2020-01-11', '12000', 12, 10, '2', '6000', '4827295925e1964345a9da4.16418374');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_kasir` (`id_kasir`),
  ADD KEY `id_obat` (`id_obat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `obat_ibfk_1` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_kasir`) REFERENCES `kasir` (`id_kasir`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
