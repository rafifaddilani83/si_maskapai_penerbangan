-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2023 pada 06.10
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_maskapai_penerbangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode`
--

CREATE TABLE `metode` (
  `id_metode` int(11) NOT NULL,
  `origin` text NOT NULL,
  `data_json` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `metode`
--

INSERT INTO `metode` (`id_metode`, `origin`, `data_json`) VALUES
(1, '[{\"id_fasilitas\":1698568864,\"id_maskapai\":517031150,\"nilai_KriteriaFasilitas\":4,\"id_harga\":507276155,\"nilai_KriteriaHarga\":4,\"id_pelayanan\":1672615850,\"nilai_KriteriaPelayanan\":3,\"id_kualitas\":1171054637,\"nilai_KriteriaKualitas\":3,\"nama\":\"Garuda Airlines\",\"kode_maskapai\":\"GA-001\",\"id_penilaian\":1,\"convert_kriteria_kualitas\":8,\"convert_kriteria_harga\":8,\"convert_kriteria_pelayanan\":8,\"convert_kriteria_fasilitas\":8,\"s_kualitas\":512,\"s_harga\":16777216,\"s_pelayanan\":64,\"s_fasilitas\":32768,\"vektor_s\":18014398509481984,\"vektor_v\":0.5},{\"id_fasilitas\":1919548453,\"id_maskapai\":1093307071,\"nilai_KriteriaFasilitas\":3,\"id_harga\":1581783039,\"nilai_KriteriaHarga\":2,\"id_pelayanan\":2030642127,\"nilai_KriteriaPelayanan\":1,\"id_kualitas\":1452654965,\"nilai_KriteriaKualitas\":4,\"nama\":\"Lion Air\",\"kode_maskapai\":\"LA-001\",\"id_penilaian\":2,\"convert_kriteria_kualitas\":8,\"convert_kriteria_harga\":8,\"convert_kriteria_pelayanan\":8,\"convert_kriteria_fasilitas\":8,\"s_kualitas\":512,\"s_harga\":16777216,\"s_pelayanan\":64,\"s_fasilitas\":32768,\"vektor_s\":18014398509481984,\"vektor_v\":0.5}]', '[{\"id_fasilitas\":1698568864,\"id_maskapai\":517031150,\"nilai_KriteriaFasilitas\":4,\"id_harga\":507276155,\"nilai_KriteriaHarga\":4,\"id_pelayanan\":1672615850,\"nilai_KriteriaPelayanan\":3,\"id_kualitas\":1171054637,\"nilai_KriteriaKualitas\":3,\"nama\":\"Garuda Airlines\",\"kode_maskapai\":\"GA-001\",\"id_penilaian\":1,\"convert_kriteria_kualitas\":8,\"convert_kriteria_harga\":8,\"convert_kriteria_pelayanan\":8,\"convert_kriteria_fasilitas\":8,\"s_kualitas\":512,\"s_harga\":16777216,\"s_pelayanan\":64,\"s_fasilitas\":32768,\"vektor_s\":18014398509481984,\"vektor_v\":0.5},{\"id_fasilitas\":1919548453,\"id_maskapai\":1093307071,\"nilai_KriteriaFasilitas\":3,\"id_harga\":1581783039,\"nilai_KriteriaHarga\":2,\"id_pelayanan\":2030642127,\"nilai_KriteriaPelayanan\":1,\"id_kualitas\":1452654965,\"nilai_KriteriaKualitas\":4,\"nama\":\"Lion Air\",\"kode_maskapai\":\"LA-001\",\"id_penilaian\":2,\"convert_kriteria_kualitas\":8,\"convert_kriteria_harga\":8,\"convert_kriteria_pelayanan\":8,\"convert_kriteria_fasilitas\":8,\"s_kualitas\":512,\"s_harga\":16777216,\"s_pelayanan\":64,\"s_fasilitas\":32768,\"vektor_s\":18014398509481984,\"vektor_v\":0.5}]');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(2101030310, 'rafi', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bobotnilai`
--

CREATE TABLE `tb_bobotnilai` (
  `id_bobotNilai` int(11) NOT NULL,
  `id_maskapai` int(11) NOT NULL,
  `bobot_NilaiFasilitas` int(11) NOT NULL,
  `bobot_NilaiHarga` int(11) NOT NULL,
  `bobot_NilaiPelayanan` int(11) NOT NULL,
  `bobot_NilaiKualitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_bobotnilai`
--

INSERT INTO `tb_bobotnilai` (`id_bobotNilai`, `id_maskapai`, `bobot_NilaiFasilitas`, `bobot_NilaiHarga`, `bobot_NilaiPelayanan`, `bobot_NilaiKualitas`) VALUES
(1249521020, 1093307071, 4, 2, 1, 1),
(1905683044, 517031150, 2, 4, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ket_nilai`
--

CREATE TABLE `tb_ket_nilai` (
  `id_keterangan` int(11) NOT NULL,
  `keterangan_nilai` varchar(255) NOT NULL,
  `range_nilai` varchar(255) NOT NULL,
  `bobot_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_ket_nilai`
--

INSERT INTO `tb_ket_nilai` (`id_keterangan`, `keterangan_nilai`, `range_nilai`, `bobot_nilai`) VALUES
(1, 'Nilai', '0-10', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_maskapai`
--

CREATE TABLE `tb_maskapai` (
  `id_maskapai` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `kode_maskapai` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_maskapai`
--

INSERT INTO `tb_maskapai` (`id_maskapai`, `nama`, `kode_maskapai`) VALUES
(517031150, 'Garuda Airlines', 'GA-001'),
(1093307071, 'Lion Air', 'LA-001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilaifasilitas`
--

CREATE TABLE `tb_nilaifasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `id_maskapai` int(11) NOT NULL,
  `nilai_KriteriaFasilitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_nilaifasilitas`
--

INSERT INTO `tb_nilaifasilitas` (`id_fasilitas`, `id_maskapai`, `nilai_KriteriaFasilitas`) VALUES
(1698568864, 517031150, 4),
(1919548453, 1093307071, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilaiharga`
--

CREATE TABLE `tb_nilaiharga` (
  `id_harga` int(11) NOT NULL,
  `id_maskapai` int(11) NOT NULL,
  `nilai_KriteriaHarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_nilaiharga`
--

INSERT INTO `tb_nilaiharga` (`id_harga`, `id_maskapai`, `nilai_KriteriaHarga`) VALUES
(507276155, 517031150, 4),
(1581783039, 1093307071, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilaikualitas`
--

CREATE TABLE `tb_nilaikualitas` (
  `id_kualitas` int(11) NOT NULL,
  `id_maskapai` int(11) NOT NULL,
  `nilai_KriteriaKualitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_nilaikualitas`
--

INSERT INTO `tb_nilaikualitas` (`id_kualitas`, `id_maskapai`, `nilai_KriteriaKualitas`) VALUES
(1171054637, 517031150, 3),
(1452654965, 1093307071, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilaipelayanan`
--

CREATE TABLE `tb_nilaipelayanan` (
  `id_pelayanan` int(11) NOT NULL,
  `id_maskapai` int(11) NOT NULL,
  `nilai_KriteriaPelayanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_nilaipelayanan`
--

INSERT INTO `tb_nilaipelayanan` (`id_pelayanan`, `id_maskapai`, `nilai_KriteriaPelayanan`) VALUES
(1672615850, 517031150, 3),
(2030642127, 1093307071, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_maskapai` int(11) NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `id_harga` int(11) NOT NULL,
  `id_pelayanan` int(11) NOT NULL,
  `id_kualitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_penilaian`
--

INSERT INTO `tb_penilaian` (`id_penilaian`, `id_maskapai`, `id_fasilitas`, `id_harga`, `id_pelayanan`, `id_kualitas`) VALUES
(1, 517031150, 1698568864, 507276155, 1672615850, 1171054637),
(2, 1093307071, 1919548453, 1581783039, 2030642127, 1452654965);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perangkingan`
--

CREATE TABLE `tb_perangkingan` (
  `id_perangkingan` int(11) NOT NULL,
  `id_maskapai` int(11) NOT NULL,
  `nilai_vektor_S` int(11) NOT NULL,
  `nilai_vektor_V` int(11) NOT NULL,
  `rangking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesawat`
--

CREATE TABLE `tb_pesawat` (
  `id_pesawat` int(11) NOT NULL,
  `id_maskapai` int(11) NOT NULL,
  `nama_pesawat` varchar(40) NOT NULL,
  `tanggal_pembuatan` date NOT NULL,
  `tanggal_operasional` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pesawat`
--

INSERT INTO `tb_pesawat` (`id_pesawat`, `id_maskapai`, `nama_pesawat`, `tanggal_pembuatan`, `tanggal_operasional`, `status`) VALUES
(704252691, 517031150, 'Citilink', '2023-06-14', '2024-10-15', 'baru'),
(1607424900, 1093307071, 'Wings Air', '2023-06-15', '2023-06-24', 'baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skala`
--

CREATE TABLE `tb_skala` (
  `id_skala` int(11) NOT NULL,
  `jenis_kriteria` varchar(255) NOT NULL,
  `bobot_penilaian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_skala`
--

INSERT INTO `tb_skala` (`id_skala`, `jenis_kriteria`, `bobot_penilaian`) VALUES
(1, 'Kriteria Kualitas', 3),
(2, 'Kriteria Harga', 8),
(3, 'Kriteria Pelayanan', 2),
(4, 'Kriteria Fasilitas', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tiket`
--

CREATE TABLE `tb_tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_pesawat` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `rute` varchar(40) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_tiket`
--

INSERT INTO `tb_tiket` (`id_tiket`, `id_pesawat`, `tanggal_pesan`, `rute`, `harga`) VALUES
(1263484285, 1607424900, '2023-07-01', 'batam', 1500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `email`, `password`) VALUES
(1620336045, 'kepin', 'kepin', '1234');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `metode`
--
ALTER TABLE `metode`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_bobotnilai`
--
ALTER TABLE `tb_bobotnilai`
  ADD PRIMARY KEY (`id_bobotNilai`),
  ADD KEY `tb_bobotnilai_ibfk_1` (`id_maskapai`);

--
-- Indeks untuk tabel `tb_ket_nilai`
--
ALTER TABLE `tb_ket_nilai`
  ADD PRIMARY KEY (`id_keterangan`);

--
-- Indeks untuk tabel `tb_maskapai`
--
ALTER TABLE `tb_maskapai`
  ADD PRIMARY KEY (`id_maskapai`);

--
-- Indeks untuk tabel `tb_nilaifasilitas`
--
ALTER TABLE `tb_nilaifasilitas`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `tb_nilaifasilitas_ibfk_1` (`id_maskapai`);

--
-- Indeks untuk tabel `tb_nilaiharga`
--
ALTER TABLE `tb_nilaiharga`
  ADD PRIMARY KEY (`id_harga`),
  ADD KEY `tb_nilaiharga_ibfk_1` (`id_maskapai`);

--
-- Indeks untuk tabel `tb_nilaikualitas`
--
ALTER TABLE `tb_nilaikualitas`
  ADD PRIMARY KEY (`id_kualitas`),
  ADD KEY `tb_nilaikualitas_ibfk_1` (`id_maskapai`);

--
-- Indeks untuk tabel `tb_nilaipelayanan`
--
ALTER TABLE `tb_nilaipelayanan`
  ADD PRIMARY KEY (`id_pelayanan`),
  ADD KEY `tb_nilaipelayanan_ibfk_1` (`id_maskapai`);

--
-- Indeks untuk tabel `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_fasilitas` (`id_fasilitas`),
  ADD KEY `id_harga` (`id_harga`),
  ADD KEY `id_kualitas` (`id_kualitas`),
  ADD KEY `id_pelayanan` (`id_pelayanan`),
  ADD KEY `tb_penilaian_ibfk_1` (`id_maskapai`);

--
-- Indeks untuk tabel `tb_perangkingan`
--
ALTER TABLE `tb_perangkingan`
  ADD PRIMARY KEY (`id_perangkingan`),
  ADD KEY `tb_perangkingan_ibfk_1` (`id_maskapai`);

--
-- Indeks untuk tabel `tb_pesawat`
--
ALTER TABLE `tb_pesawat`
  ADD PRIMARY KEY (`id_pesawat`),
  ADD KEY `id_maskapai` (`id_maskapai`);

--
-- Indeks untuk tabel `tb_skala`
--
ALTER TABLE `tb_skala`
  ADD PRIMARY KEY (`id_skala`);

--
-- Indeks untuk tabel `tb_tiket`
--
ALTER TABLE `tb_tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `id_pesawat` (`id_pesawat`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `metode`
--
ALTER TABLE `metode`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_bobotnilai`
--
ALTER TABLE `tb_bobotnilai`
  ADD CONSTRAINT `tb_bobotnilai_ibfk_1` FOREIGN KEY (`id_maskapai`) REFERENCES `tb_maskapai` (`id_maskapai`);

--
-- Ketidakleluasaan untuk tabel `tb_nilaifasilitas`
--
ALTER TABLE `tb_nilaifasilitas`
  ADD CONSTRAINT `tb_nilaifasilitas_ibfk_1` FOREIGN KEY (`id_maskapai`) REFERENCES `tb_maskapai` (`id_maskapai`);

--
-- Ketidakleluasaan untuk tabel `tb_nilaiharga`
--
ALTER TABLE `tb_nilaiharga`
  ADD CONSTRAINT `tb_nilaiharga_ibfk_1` FOREIGN KEY (`id_maskapai`) REFERENCES `tb_maskapai` (`id_maskapai`);

--
-- Ketidakleluasaan untuk tabel `tb_nilaikualitas`
--
ALTER TABLE `tb_nilaikualitas`
  ADD CONSTRAINT `tb_nilaikualitas_ibfk_1` FOREIGN KEY (`id_maskapai`) REFERENCES `tb_maskapai` (`id_maskapai`);

--
-- Ketidakleluasaan untuk tabel `tb_nilaipelayanan`
--
ALTER TABLE `tb_nilaipelayanan`
  ADD CONSTRAINT `tb_nilaipelayanan_ibfk_1` FOREIGN KEY (`id_maskapai`) REFERENCES `tb_maskapai` (`id_maskapai`);

--
-- Ketidakleluasaan untuk tabel `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD CONSTRAINT `tb_penilaian_ibfk_1` FOREIGN KEY (`id_maskapai`) REFERENCES `tb_maskapai` (`id_maskapai`),
  ADD CONSTRAINT `tb_penilaian_ibfk_2` FOREIGN KEY (`id_fasilitas`) REFERENCES `tb_nilaifasilitas` (`id_fasilitas`),
  ADD CONSTRAINT `tb_penilaian_ibfk_3` FOREIGN KEY (`id_harga`) REFERENCES `tb_nilaiharga` (`id_harga`),
  ADD CONSTRAINT `tb_penilaian_ibfk_4` FOREIGN KEY (`id_kualitas`) REFERENCES `tb_nilaikualitas` (`id_kualitas`),
  ADD CONSTRAINT `tb_penilaian_ibfk_5` FOREIGN KEY (`id_pelayanan`) REFERENCES `tb_nilaipelayanan` (`id_pelayanan`);

--
-- Ketidakleluasaan untuk tabel `tb_perangkingan`
--
ALTER TABLE `tb_perangkingan`
  ADD CONSTRAINT `tb_perangkingan_ibfk_1` FOREIGN KEY (`id_maskapai`) REFERENCES `tb_maskapai` (`id_maskapai`);

--
-- Ketidakleluasaan untuk tabel `tb_pesawat`
--
ALTER TABLE `tb_pesawat`
  ADD CONSTRAINT `tb_pesawat_ibfk_1` FOREIGN KEY (`id_maskapai`) REFERENCES `tb_maskapai` (`id_maskapai`);

--
-- Ketidakleluasaan untuk tabel `tb_tiket`
--
ALTER TABLE `tb_tiket`
  ADD CONSTRAINT `tb_tiket_ibfk_1` FOREIGN KEY (`id_pesawat`) REFERENCES `tb_pesawat` (`id_pesawat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
