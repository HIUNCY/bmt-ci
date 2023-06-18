-- phpMyAdmin SQL Dump

-- version 5.2.0

-- https://www.phpmyadmin.net/

--

-- Host: localhost

-- Generation Time: Jun 18, 2023 at 12:43 PM

-- Server version: 5.7.33

-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Database: `bmt`

--

-- --------------------------------------------------------

--

-- Table structure for table `tb_kelas`

--

CREATE TABLE
    `tb_kelas` (
        `id_kelas` int(11) NOT NULL,
        `kelas` varchar(20) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data for table `tb_kelas`

--

INSERT INTO
    `tb_kelas` (`id_kelas`, `kelas`)
VALUES (4, '10 RPL'), (5, '10 AKL'), (6, '10 BDP'), (7, '10 OTKP'), (8, '11 RPL'), (9, '11 AKL'), (10, '11 BDP'), (11, '11 OTKP'), (12, '12 RPL'), (13, '12 AKL'), (14, '12 BDP'), (15, '12 OTKP');

-- --------------------------------------------------------

--

-- Table structure for table `tb_pengguna`

--

CREATE TABLE
    `tb_pengguna` (
        `id_pengguna` int(11) NOT NULL,
        `nama_pengguna` varchar(20) NOT NULL,
        `username` varchar(20) NOT NULL,
        `password` varchar(15) NOT NULL,
        `level` enum('Administrator', 'Petugas') NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data for table `tb_pengguna`

--

INSERT INTO
    `tb_pengguna` (
        `id_pengguna`,
        `nama_pengguna`,
        `username`,
        `password`,
        `level`
    )
VALUES (
        1,
        'Muhamad Zainul Kamal',
        'zainul',
        'zainul123',
        'Administrator'
    ), (
        6,
        'Banteng Merah',
        'pdip',
        'pdip123',
        'Petugas'
    );

-- --------------------------------------------------------

--

-- Table structure for table `tb_profil`

--

CREATE TABLE
    `tb_profil` (
        `id_profil` int(11) NOT NULL,
        `nama_sekolah` varchar(200) NOT NULL,
        `alamat` varchar(400) NOT NULL,
        `akreditasi` char(2) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data for table `tb_profil`

--

INSERT INTO
    `tb_profil` (
        `id_profil`,
        `nama_sekolah`,
        `alamat`,
        `akreditasi`
    )
VALUES (
        1,
        'SMK NEGERI 12 JAKARTA',
        'Jl. Kb. Bawang XV B No.15 19 1 19, RT.19/RW.2, Kb. Bawang, Kec. Tj. Priok, Kota Jkt Utara.',
        'A'
    );

-- --------------------------------------------------------

--

-- Table structure for table `tb_siswa`

--

CREATE TABLE
    `tb_siswa` (
        `nis` char(12) NOT NULL,
        `nama_siswa` varchar(40) NOT NULL,
        `jekel` enum('LK', 'PR') NOT NULL,
        `id_kelas` int(11) NOT NULL,
        `status` enum('Aktif', 'Lulus', 'Pindah') NOT NULL,
        `th_masuk` year(4) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data for table `tb_siswa`

--

INSERT INTO
    `tb_siswa` (
        `nis`,
        `nama_siswa`,
        `jekel`,
        `id_kelas`,
        `status`,
        `th_masuk`
    )
VALUES (
        '0005012977',
        'Indah Farita',
        'PR',
        12,
        'Aktif',
        2017
    ), (
        '0005033631',
        'Agus Suwoto',
        'LK',
        6,
        'Aktif',
        2019
    ), (
        '0009583531',
        'Devi Anggraeni',
        'PR',
        14,
        'Aktif',
        2017
    ), (
        '0011475340',
        'Hermawan',
        'LK',
        10,
        'Aktif',
        2018
    ), (
        '0016221604',
        'Aldi Firanda',
        'LK',
        9,
        'Aktif',
        2018
    ), (
        '0016863262',
        'Ade Franski Agusti',
        'LK',
        4,
        'Aktif',
        2019
    ), (
        '0018295373',
        'Irian Wijayanti',
        'PR',
        14,
        'Aktif',
        2017
    ), (
        '0018334631',
        'Handono Warih',
        'LK',
        9,
        'Aktif',
        2018
    ), (
        '0018334639',
        'Fatma Rizqi',
        'PR',
        8,
        'Aktif',
        2018
    ), (
        '0019831575',
        'Erli Paramita',
        'PR',
        7,
        'Aktif',
        2019
    ), (
        '0021962089',
        'Dini Andini',
        'PR',
        15,
        'Aktif',
        2017
    ), (
        '0022589007',
        'Elisa Wulandari',
        'PR',
        6,
        'Aktif',
        2019
    ), (
        '0023756408',
        'Alan Pradinata Yusuf',
        'LK',
        8,
        'Aktif',
        2018
    ), (
        '0023768787',
        'Andi Putra Setyawan',
        'LK',
        10,
        'Aktif',
        2018
    ), (
        '0024469430',
        'Kania',
        'PR',
        14,
        'Aktif',
        2018
    ), (
        '0025175561',
        'Elfiana Alfari',
        'PR',
        13,
        'Aktif',
        2017
    ), (
        '0025175567',
        'Choiruz Zadit Taqwa',
        'LK',
        13,
        'Aktif',
        2017
    ), (
        '0026965788',
        'Eep Suryadi',
        'LK',
        4,
        'Aktif',
        2019
    ), (
        '0029355050',
        'Ika Indri Rahma Yanti',
        'PR',
        11,
        'Aktif',
        2018
    ), (
        '0029733537',
        'Bagas Ardiansyah',
        'LK',
        11,
        'Aktif',
        2018
    ), (
        '0087964971',
        'Farah Quinn',
        '',
        10,
        'Aktif',
        2015
    ), (
        '9999804545',
        'Josep Fernando Siwan',
        'LK',
        15,
        'Aktif',
        2017
    );

-- --------------------------------------------------------

--

-- Table structure for table `tb_tabungan`

--

CREATE TABLE
    `tb_tabungan` (
        `id_tabungan` int(11) NOT NULL,
        `nis` char(12) NOT NULL,
        `setor` int(11) NOT NULL,
        `tarik` int(11) NOT NULL,
        `tgl` date NOT NULL,
        `jenis` enum('ST', 'TR') NOT NULL,
        `petugas` varchar(20) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data for table `tb_tabungan`

--

INSERT INTO
    `tb_tabungan` (
        `id_tabungan`,
        `nis`,
        `setor`,
        `tarik`,
        `tgl`,
        `jenis`,
        `petugas`
    )
VALUES (
        3,
        '0011475340',
        300000,
        0,
        '2023-04-20',
        'ST',
        'Muhamad Zainul Kamal'
    ), (
        4,
        '0011475340',
        0,
        55000,
        '2023-04-20',
        'TR',
        'Muhamad Zainul Kamal'
    ), (
        5,
        '0023756408',
        30000,
        0,
        '2023-04-20',
        'ST',
        'Muhamad Zainul Kamal'
    ), (
        9,
        '0016221604',
        0,
        30000,
        '2023-04-20',
        'TR',
        'Muhamad Zainul Kamal'
    ), (
        10,
        '0016221604',
        50000,
        0,
        '2023-04-23',
        'ST',
        'Banteng Merah'
    ), (
        13,
        '0009583531',
        0,
        65000,
        '2023-05-03',
        'TR',
        'Muhamad Zainul Kamal'
    ), (
        14,
        '0016221604',
        0,
        15000,
        '2023-06-16',
        'TR',
        'Muhamad Zainul Kamal'
    ), (
        15,
        '0016221604',
        0,
        10000,
        '2023-06-16',
        'TR',
        'Muhamad Zainul Kamal'
    ), (
        16,
        '0016221604',
        15000,
        0,
        '2023-06-16',
        'ST',
        'Muhamad Zainul Kamal'
    );

--

-- Indexes for dumped tables

--

--

-- Indexes for table `tb_kelas`

--

ALTER TABLE `tb_kelas` ADD PRIMARY KEY (`id_kelas`);

--

-- Indexes for table `tb_pengguna`

--

ALTER TABLE `tb_pengguna` ADD PRIMARY KEY (`id_pengguna`);

--

-- Indexes for table `tb_profil`

--

ALTER TABLE `tb_profil` ADD PRIMARY KEY (`id_profil`);

--

-- Indexes for table `tb_siswa`

--

ALTER TABLE `tb_siswa`
ADD PRIMARY KEY (`nis`),
ADD
    KEY `id_kelas` (`id_kelas`);

--

-- Indexes for table `tb_tabungan`

--

ALTER TABLE `tb_tabungan`
ADD
    PRIMARY KEY (`id_tabungan`),
ADD KEY `nis` (`nis`);

--

-- AUTO_INCREMENT for dumped tables

--

--

-- AUTO_INCREMENT for table `tb_kelas`

--

ALTER TABLE
    `tb_kelas` MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 16;

--

-- AUTO_INCREMENT for table `tb_pengguna`

--

ALTER TABLE
    `tb_pengguna` MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 7;

--

-- AUTO_INCREMENT for table `tb_profil`

--

ALTER TABLE
    `tb_profil` MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--

-- AUTO_INCREMENT for table `tb_tabungan`

--

ALTER TABLE
    `tb_tabungan` MODIFY `id_tabungan` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 17;

--

-- Constraints for dumped tables

--

--

-- Constraints for table `tb_siswa`

--

ALTER TABLE `tb_siswa`
ADD
    CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--

-- Constraints for table `tb_tabungan`

--

ALTER TABLE `tb_tabungan`
ADD
    CONSTRAINT `tb_tabungan_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;