-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2023 pada 14.16
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_user` int(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `level`) VALUES
(192100, 'adminterganteng', 'admin123456789', 1),
(192101, 'DOSEN', 'DOSEN01', 2),
(192102, 'ormawa', 'ormawa123', 2),
(192103, 'mahasiswa', 'mahasiswa123', 3),
(192113, 'nuraini12', '12345678', 2),
(192117, 'Ica', 'ica123', 3),
(192120, 'MTK', 'MTK123', 2),
(192121, 'nimas123', 'nimas567', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `id_dosen` int(20) NOT NULL,
  `id_user` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`id_dosen`, `id_user`, `nama`, `email`, `no_hp`) VALUES
(50100, 192101, 'IKLIL MUSTOFA', 'iklilmustofa12@gmail.com', '087890765432'),
(50110, 192113, 'Siti Nuraini', 'siti@gmail.com', '098789678543');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id_mhs` int(10) NOT NULL,
  `id_user` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id_mhs`, `id_user`, `nama`, `email`, `no_hp`) VALUES
(29000, 192103, 'ndiman lifiia ', 'lifindiman29@gmail.com', '087888654321'),
(29002, 192117, 'Kheisara Jasmin', 'ica12345@gmail.com', '098786542356'),
(29003, 192121, 'Nimas Lian', 'nimas@gmail.com', '087678765432');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ormawa`
--

CREATE TABLE `tbl_ormawa` (
  `id_ormawa` int(20) NOT NULL,
  `id_user` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_ormawa`
--

INSERT INTO `tbl_ormawa` (`id_ormawa`, `id_user`, `nama`, `email`, `no_hp`) VALUES
(850700, 192102, 'HMJ Teknologi Informasi', 'hmj01777@gmail.com', '086234567890'),
(850703, 192120, 'HMJ MTK', 'mtk1234@gmail.com', '098765678765');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(15) NOT NULL,
  `id_ruangan` varchar(20) NOT NULL,
  `waktu` time NOT NULL,
  `keperluan` text NOT NULL,
  `tanggal` date NOT NULL,
  `isapprove` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`id_peminjaman`, `id_user`, `id_ruangan`, `waktu`, `keperluan`, `tanggal`, `isapprove`) VALUES
(559080, 192101, 'ISDB 2.8', '08:00:00', 'Ujian Akhir Semester', '2023-06-12', '1'),
(559081, 192102, 'Theater 1', '12:59:17', 'MABAR', '2023-06-14', '0'),
(559082, 192101, 'ISDB 1.1', '07:59:17', 'Mahasiswa Sidang', '2023-06-15', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ruangan`
--

CREATE TABLE `tbl_ruangan` (
  `id_ruangan` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `kapasitas` varchar(10) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_ruangan`
--

INSERT INTO `tbl_ruangan` (`id_ruangan`, `status`, `kapasitas`, `kategori`) VALUES
('ISDB 1.1', 'KOSONG', '40 Orang', '1'),
('ISDB 2.8', 'TERISI', '40 Orang', '1'),
('Theater 1', 'KOSONG', '200 Orang', '3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `tbl_dosen_ibfk_1` (`id_user`);

--
-- Indeks untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD KEY `tbl_mahasiswa_ibfk_1` (`id_user`);

--
-- Indeks untuk tabel `tbl_ormawa`
--
ALTER TABLE `tbl_ormawa`
  ADD PRIMARY KEY (`id_ormawa`),
  ADD KEY `tbl_ormawa_ibfk_1` (`id_user`);

--
-- Indeks untuk tabel `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_ruangan` (`id_ruangan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192122;

--
-- AUTO_INCREMENT untuk tabel `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  MODIFY `id_dosen` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50113;

--
-- AUTO_INCREMENT untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id_mhs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29004;

--
-- AUTO_INCREMENT untuk tabel `tbl_ormawa`
--
ALTER TABLE `tbl_ormawa`
  MODIFY `id_ormawa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=850704;

--
-- AUTO_INCREMENT untuk tabel `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=559083;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD CONSTRAINT `tbl_dosen_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD CONSTRAINT `tbl_mahasiswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_ormawa`
--
ALTER TABLE `tbl_ormawa`
  ADD CONSTRAINT `tbl_ormawa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD CONSTRAINT `tbl_peminjaman_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `tbl_ruangan` (`id_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_peminjaman_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
