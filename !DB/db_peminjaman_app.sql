#
# TABLE STRUCTURE FOR: tbl_bahan
#

DROP TABLE IF EXISTS `tbl_bahan`;

CREATE TABLE `tbl_bahan` (
  `id_bahan` int(50) NOT NULL AUTO_INCREMENT,
  `nama_bahan` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `stock` int(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `status` enum('tampilkan','sembunyikan',',') NOT NULL,
  PRIMARY KEY (`id_bahan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_bahan` (`id_bahan`, `nama_bahan`, `merk`, `stock`, `lokasi`, `status`) VALUES (1, 'Kabel FO', 'SyncopRo', 1, 'Rak depan', 'tampilkan');
INSERT INTO `tbl_bahan` (`id_bahan`, `nama_bahan`, `merk`, `stock`, `lokasi`, `status`) VALUES (2, 'Kabel UTP', 'Synco', 4, 'Rak Bawah', 'tampilkan');
INSERT INTO `tbl_bahan` (`id_bahan`, `nama_bahan`, `merk`, `stock`, `lokasi`, `status`) VALUES (3, 'Port-RJ45', 'Synco', 9, 'Lemari2 Atas', 'tampilkan');
INSERT INTO `tbl_bahan` (`id_bahan`, `nama_bahan`, `merk`, `stock`, `lokasi`, `status`) VALUES (6, 'kabel jaringan', 'synco', 8, 'Lemari', 'tampilkan');


#
# TABLE STRUCTURE FOR: tbl_barang
#

DROP TABLE IF EXISTS `tbl_barang`;

CREATE TABLE `tbl_barang` (
  `id_barang` int(10) NOT NULL AUTO_INCREMENT,
  `kode_alat` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `stock` int(10) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `kondisi` enum('baik','buruk','','') NOT NULL,
  `tahun` year(4) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `status` enum('tampilkan','sembunyikan','','') NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_barang` (`id_barang`, `kode_alat`, `name`, `merk`, `desc`, `stock`, `satuan`, `kondisi`, `tahun`, `lokasi`, `status`) VALUES (19, 'AP01', 'access point', 'LINKSYS', 'AP-2015-01	', 1, 'Unit', 'baik', '2015', 'Lemari 1', 'tampilkan');
INSERT INTO `tbl_barang` (`id_barang`, `kode_alat`, `name`, `merk`, `desc`, `stock`, `satuan`, `kondisi`, `tahun`, `lokasi`, `status`) VALUES (22, 'APOT 03', 'Access Point Outdoor', 'TP-LINK', 'APOT-2014-03', 6, 'Unit', 'baik', '2014', 'Lemari 1', 'tampilkan');
INSERT INTO `tbl_barang` (`id_barang`, `kode_alat`, `name`, `merk`, `desc`, `stock`, `satuan`, `kondisi`, `tahun`, `lokasi`, `status`) VALUES (23, 'CDR14', 'CD-ROM', 'LG', 'CDR-2015-14', 1, 'Unit', 'baik', '2015', 'Lemari 2', 'tampilkan');
INSERT INTO `tbl_barang` (`id_barang`, `kode_alat`, `name`, `merk`, `desc`, `stock`, `satuan`, `kondisi`, `tahun`, `lokasi`, `status`) VALUES (25, 'F04', 'FIBER OPTIC', 'NETLINK', 'NL-2019-04', 9, 'Unit', 'baik', '2019', 'Lemari 1', 'tampilkan');
INSERT INTO `tbl_barang` (`id_barang`, `kode_alat`, `name`, `merk`, `desc`, `stock`, `satuan`, `kondisi`, `tahun`, `lokasi`, `status`) VALUES (26, 'HD15', 'Harddisk', 'Seagate', 'HD-2019-15	', 11, 'Unit', 'baik', '2019', 'Lemari 2', 'tampilkan');
INSERT INTO `tbl_barang` (`id_barang`, `kode_alat`, `name`, `merk`, `desc`, `stock`, `satuan`, `kondisi`, `tahun`, `lokasi`, `status`) VALUES (27, 'IIPC05', 'IP CONE', 'FANVIL', 'IPN-2020-05', 5, 'Unit', 'baik', '2020', 'Lemari 1', 'tampilkan');
INSERT INTO `tbl_barang` (`id_barang`, `kode_alat`, `name`, `merk`, `desc`, `stock`, `satuan`, `kondisi`, `tahun`, `lokasi`, `status`) VALUES (28, 'R13', 'Router', 'Router board', '-', 39, 'Unit', 'baik', '0000', 'Lemari 2', 'tampilkan');
INSERT INTO `tbl_barang` (`id_barang`, `kode_alat`, `name`, `merk`, `desc`, `stock`, `satuan`, `kondisi`, `tahun`, `lokasi`, `status`) VALUES (30, 'AP01', 'access point', 'LINKSYS', 'AP-2015-01', 5, 'Unit', 'baik', '2015', 'Lemari 1', 'tampilkan');
INSERT INTO `tbl_barang` (`id_barang`, `kode_alat`, `name`, `merk`, `desc`, `stock`, `satuan`, `kondisi`, `tahun`, `lokasi`, `status`) VALUES (31, 'APRO02', 'access point', 'TP-LINK', 'TP-2015-01', 5, 'unit', 'baik', '2015', 'Lemari 2', 'tampilkan');


#
# TABLE STRUCTURE FOR: tbl_pakai
#

DROP TABLE IF EXISTS `tbl_pakai`;

CREATE TABLE `tbl_pakai` (
  `id_pakai` int(10) NOT NULL AUTO_INCREMENT,
  `id_peminjam` int(10) NOT NULL,
  `id_bahan` int(10) NOT NULL,
  `jml` int(20) NOT NULL,
  `tgl_pakai` datetime NOT NULL,
  `status` enum('0','1','2','') NOT NULL,
  PRIMARY KEY (`id_pakai`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_pakai` (`id_pakai`, `id_peminjam`, `id_bahan`, `jml`, `tgl_pakai`, `status`) VALUES (6, 40, 2, 2, '2021-03-21 12:57:17', '1');
INSERT INTO `tbl_pakai` (`id_pakai`, `id_peminjam`, `id_bahan`, `jml`, `tgl_pakai`, `status`) VALUES (7, 40, 2, 1, '2021-03-21 15:06:07', '1');
INSERT INTO `tbl_pakai` (`id_pakai`, `id_peminjam`, `id_bahan`, `jml`, `tgl_pakai`, `status`) VALUES (9, 45, 6, 2, '2021-04-15 20:59:32', '0');


#
# TABLE STRUCTURE FOR: tbl_peminjam
#

DROP TABLE IF EXISTS `tbl_peminjam`;

CREATE TABLE `tbl_peminjam` (
  `id_peminjam` int(10) NOT NULL AUTO_INCREMENT,
  `password` varchar(225) NOT NULL,
  `name` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id_peminjam`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_peminjam` (`id_peminjam`, `password`, `name`, `kelas`, `email`) VALUES (86, 'szuURr5NoXnsk3iZ+KlwJW4ytRnkDMK0GCBG3g6+oQq5MVeqlERWwE75gk4nbrhBZUxebMM8dk2O4ha3EsNeow==', 'ihsan maulana', 'XII TKJ 1', 'imaul7853@gmail.com');
INSERT INTO `tbl_peminjam` (`id_peminjam`, `password`, `name`, `kelas`, `email`) VALUES (89, 'GdjCkAqIkpHUCJdr/sgQv9AyTjGAATQNRhnHe156rkt5o/D5WDRlKFoCFT9uyGRnVDi8CQWnqHTqNOMGe5BCmA==', 'Richo', 'XII TKJ 1', 'richo@gmail.com');


#
# TABLE STRUCTURE FOR: tbl_petugas
#

DROP TABLE IF EXISTS `tbl_petugas`;

CREATE TABLE `tbl_petugas` (
  `id_petugas` int(10) NOT NULL AUTO_INCREMENT,
  `password` varchar(225) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_petugas` (`id_petugas`, `password`, `name`, `email`) VALUES (8, 'GyIP4e31PpeKz6BP+ntHKsiZ7lW8KOaBqM3iafIBdD5b81jxKQT1FUy0B4hsL/xoheZJOLYLf3bNq2J9PhZWpw==', 'admin', 'admin@gmail.com');


#
# TABLE STRUCTURE FOR: tbl_pinjam
#

DROP TABLE IF EXISTS `tbl_pinjam`;

CREATE TABLE `tbl_pinjam` (
  `id_pinjam` int(10) NOT NULL AUTO_INCREMENT,
  `id_peminjam` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `jml` int(20) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `status` enum('0','1','2','') NOT NULL,
  PRIMARY KEY (`id_pinjam`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (43, 38, 1, 5, '', '2018-11-02 21:32:43', '0000-00-00 00:00:00', '1');
INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (45, 38, 2, 3, '', '2018-11-02 21:33:02', '0000-00-00 00:00:00', '1');
INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (46, 38, 3, 5, '', '2018-11-02 23:32:16', '0000-00-00 00:00:00', '0');
INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (47, 30, 1, 5, '', '2018-11-02 23:42:06', '0000-00-00 00:00:00', '1');
INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (52, 40, 1, 2, '', '2021-03-19 13:55:05', '0000-00-00 00:00:00', '1');
INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (53, 40, 1, 1, '', '2021-03-19 13:58:07', '0000-00-00 00:00:00', '1');
INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (63, 41, 17, 5, 'Untuk Praktek', '2021-03-24 15:19:06', '0000-00-00 00:00:00', '1');
INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (65, 45, 15, 1, 'Praktek', '2021-03-28 10:08:11', '2021-03-29 11:01:02', '2');
INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (67, 44, 19, 1, 'praktek', '2021-04-15 19:07:18', '2021-04-15 19:07:39', '2');
INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (69, 45, 28, 2, 'praktek', '2021-04-15 20:59:07', '0000-00-00 00:00:00', '0');
INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (70, 45, 20, 2, 'praktek', '2021-04-16 13:35:59', '0000-00-00 00:00:00', '1');
INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (71, 45, 21, 1, 'Praktek', '2021-04-17 15:56:44', '0000-00-00 00:00:00', '1');
INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (72, 74, 20, 1, 'praktek', '2021-04-21 09:42:55', '0000-00-00 00:00:00', '0');
INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (73, 79, 20, 2, 'praktek', '2021-04-21 20:54:55', '0000-00-00 00:00:00', '1');
INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (74, 83, 20, 1, 'Praktek', '2021-04-22 09:45:56', '0000-00-00 00:00:00', '1');
INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (75, 86, 22, 1, 'Praktek', '2021-04-22 13:34:39', '0000-00-00 00:00:00', '1');


#
# TABLE STRUCTURE FOR: tbl_riwayat
#

DROP TABLE IF EXISTS `tbl_riwayat`;

CREATE TABLE `tbl_riwayat` (
  `id_pinjam` int(10) NOT NULL,
  `id_peminjam` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `jml` int(20) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `status` enum('0','1','2','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_riwayat` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (64, 45, 15, 2, 'Praktek', '2021-03-27 08:42:13', '2021-03-27 09:17:39', '1');
INSERT INTO `tbl_riwayat` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (66, 45, 18, 2, 'Praktek', '2021-03-29 10:55:13', '0000-00-00 00:00:00', '0');
INSERT INTO `tbl_riwayat` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (66, 45, 29, 2, 'Praktek', '2021-04-08 16:13:59', '2021-04-08 16:19:51', '1');
INSERT INTO `tbl_riwayat` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (66, 45, 29, 4, 'Praktek', '2021-04-14 09:52:44', '2021-04-14 09:53:08', '1');
INSERT INTO `tbl_riwayat` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (67, 45, 29, 1, 'Praktek', '2021-04-14 09:53:37', '2021-04-14 09:55:32', '1');
INSERT INTO `tbl_riwayat` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (66, 44, 26, 2, 'praktek', '2021-04-15 18:58:23', '0000-00-00 00:00:00', '0');
INSERT INTO `tbl_riwayat` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (68, 45, 28, 1, 'praktek', '2021-04-15 20:25:54', '2021-04-15 20:31:04', '1');
INSERT INTO `tbl_riwayat` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `ket`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES (70, 45, 19, 1, 'praktek', '2021-04-15 21:19:09', '2021-04-15 21:20:26', '1');


#
# TABLE STRUCTURE FOR: tbl_riwayat_pakai
#

DROP TABLE IF EXISTS `tbl_riwayat_pakai`;

CREATE TABLE `tbl_riwayat_pakai` (
  `id_pakai` int(10) NOT NULL,
  `id_peminjam` int(10) NOT NULL,
  `id_bahan` int(10) NOT NULL,
  `jml` int(20) NOT NULL,
  `tgl_pakai` datetime NOT NULL,
  `status` enum('0','1','2','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_riwayat_pakai` (`id_pakai`, `id_peminjam`, `id_bahan`, `jml`, `tgl_pakai`, `status`) VALUES (9, 41, 1, 2, '2021-03-24 14:59:23', '1');
INSERT INTO `tbl_riwayat_pakai` (`id_pakai`, `id_peminjam`, `id_bahan`, `jml`, `tgl_pakai`, `status`) VALUES (8, 45, 5, 2, '2021-03-27 07:23:25', '1');
INSERT INTO `tbl_riwayat_pakai` (`id_pakai`, `id_peminjam`, `id_bahan`, `jml`, `tgl_pakai`, `status`) VALUES (8, 45, 3, 1, '2021-04-15 20:45:19', '1');
INSERT INTO `tbl_riwayat_pakai` (`id_pakai`, `id_peminjam`, `id_bahan`, `jml`, `tgl_pakai`, `status`) VALUES (10, 45, 1, 1, '2021-04-15 21:21:29', '1');


