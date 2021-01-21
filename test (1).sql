/*
MySQL Data Transfer
Source Host: localhost
Source Database: test
Target Host: localhost
Target Database: test
Date: 02/02/2015 19:02:46
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for admin
-- ----------------------------
CREATE TABLE `admin` (
  `nik` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
CREATE TABLE `barang` (
  `id_barang` varchar(15) NOT NULL DEFAULT '',
  `nama_barang` varchar(35) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for barang_pesanan
-- ----------------------------
CREATE TABLE `barang_pesanan` (
  `id_barang` varchar(30) DEFAULT NULL,
  `no_customer` varchar(30) DEFAULT NULL,
  `jumlah_barang` int(11) DEFAULT NULL,
  `no_order` varchar(30) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for biodata
-- ----------------------------
CREATE TABLE `biodata` (
  `id` varchar(20) NOT NULL DEFAULT '',
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `jekel` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for booking
-- ----------------------------
CREATE TABLE `booking` (
  `nik` varchar(30) DEFAULT NULL,
  `id_matkul` varchar(30) DEFAULT NULL,
  `id_ruang` varchar(20) DEFAULT NULL,
  `sesi` int(2) DEFAULT NULL,
  `tanggal_pembookingan` date DEFAULT NULL,
  `tanggal_booking` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for checklist
-- ----------------------------
CREATE TABLE `checklist` (
  `tanggal_mulai` date DEFAULT NULL,
  `id_diklat` varchar(40) DEFAULT NULL,
  `nama_diklat` varchar(40) DEFAULT NULL,
  `unit_pelaksana` varchar(40) DEFAULT NULL,
  `jadwal` varchar(40) DEFAULT NULL,
  `modul` varchar(40) DEFAULT NULL,
  `keperluan_peserta` varchar(40) DEFAULT NULL,
  `ruang` varchar(40) DEFAULT NULL,
  `instruktur` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for daftarbarang
-- ----------------------------
CREATE TABLE `daftarbarang` (
  `id_barang` varchar(30) NOT NULL,
  `merk` varchar(40) DEFAULT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  `warna` varchar(30) DEFAULT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `harga` int(30) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `gambar` varchar(30) DEFAULT NULL,
  `jumlah_barang` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for daftarcustomer
-- ----------------------------
CREATE TABLE `daftarcustomer` (
  `no_customer` varchar(30) DEFAULT NULL,
  `nama_customer` varchar(30) DEFAULT NULL,
  `email` int(30) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `no_hp` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for diklat
-- ----------------------------
CREATE TABLE `diklat` (
  `id_diklat` varchar(40) DEFAULT NULL,
  `nama_diklat` varchar(40) DEFAULT NULL,
  `jumlah_peserta` int(11) DEFAULT NULL,
  `materi` varchar(40) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `ruang` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for dosen
-- ----------------------------
CREATE TABLE `dosen` (
  `nik` varchar(20) DEFAULT NULL,
  `nama_dosen` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for instruktur
-- ----------------------------
CREATE TABLE `instruktur` (
  `nik` varchar(20) NOT NULL DEFAULT '',
  `nama` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for jadwal
-- ----------------------------
CREATE TABLE `jadwal` (
  `id_diklat` varchar(40) DEFAULT NULL,
  `nama_diklat` varchar(40) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` varchar(10) DEFAULT NULL,
  `topik_dan_kegiatan` varchar(40) DEFAULT NULL,
  `jumlah_jam` varchar(10) DEFAULT NULL,
  `ruang` varchar(20) DEFAULT NULL,
  `instruktur` varchar(30) DEFAULT NULL,
  `instruktur2` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for kerangka
-- ----------------------------
CREATE TABLE `kerangka` (
  `materi` varchar(50) DEFAULT NULL,
  `jumlah_jam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for login
-- ----------------------------
CREATE TABLE `login` (
  `username` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(40) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for login_member
-- ----------------------------
CREATE TABLE `login_member` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(40) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for materi
-- ----------------------------
CREATE TABLE `materi` (
  `id_materi` varchar(20) NOT NULL DEFAULT '',
  `materi` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for matkul
-- ----------------------------
CREATE TABLE `matkul` (
  `id_matkul` varchar(20) DEFAULT NULL,
  `nama_matkul` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for member
-- ----------------------------
CREATE TABLE `member` (
  `id_member` varchar(10) NOT NULL DEFAULT '',
  `nama` varchar(35) DEFAULT NULL,
  `alamaat` varchar(40) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for newbieorder
-- ----------------------------
CREATE TABLE `newbieorder` (
  `nama_customer` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_order` varchar(30) DEFAULT NULL,
  `rek_tujuan` varchar(30) DEFAULT NULL,
  `tipe_pembayaran` varchar(30) DEFAULT NULL,
  `pemilik_rekening` varchar(30) DEFAULT NULL,
  `total_pembayaran` varchar(30) DEFAULT NULL,
  `tanggal_pembayaran` date DEFAULT NULL,
  `pesanan` varchar(30) DEFAULT NULL,
  `gambar` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for payment
-- ----------------------------
CREATE TABLE `payment` (
  `nama_customer` varbinary(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_order` varchar(30) DEFAULT NULL,
  `rek_tujuan` varchar(30) DEFAULT NULL,
  `tipe_pembayaran` varchar(30) DEFAULT NULL,
  `pemilik_rek` varchar(30) DEFAULT NULL,
  `total_pembayaran` int(30) DEFAULT NULL,
  `tgl_pembayaran` date DEFAULT NULL,
  `pesanan` varchar(30) DEFAULT NULL,
  `gambar` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
CREATE TABLE `pegawai` (
  `nip` varchar(50) NOT NULL DEFAULT '',
  `nama` varchar(50) DEFAULT NULL,
  `golongan` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `wi_ins` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for peserta
-- ----------------------------
CREATE TABLE `peserta` (
  `nik` varchar(20) NOT NULL DEFAULT '',
  `nama` varchar(30) DEFAULT NULL,
  `asal` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ruang
-- ----------------------------
CREATE TABLE `ruang` (
  `id_ruang` varchar(20) DEFAULT NULL,
  `nama_ruang` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ruang1
-- ----------------------------
CREATE TABLE `ruang1` (
  `id_ruang` varchar(20) NOT NULL DEFAULT '',
  `ruang` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_ruang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for t1
-- ----------------------------
CREATE TABLE `t1` (
  `f1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_buku
-- ----------------------------
CREATE TABLE `tbl_buku` (
  `id_buku` varchar(40) DEFAULT NULL,
  `judulbuku` varchar(40) DEFAULT NULL,
  `pengarang` varchar(40) DEFAULT NULL,
  `penerbit` varchar(30) DEFAULT NULL,
  `thnterbit` int(11) DEFAULT NULL,
  `sinopsis` varchar(500) DEFAULT NULL,
  `filebuku` varchar(200) DEFAULT NULL,
  `cover` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_member
-- ----------------------------
CREATE TABLE `tbl_member` (
  `id_member` varchar(20) DEFAULT NULL,
  `namauser` varchar(40) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `alamat` varchar(40) DEFAULT NULL,
  `tmplahir` varchar(30) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
CREATE TABLE `tbl_user` (
  `namauser` varchar(40) NOT NULL DEFAULT '',
  `password` varchar(40) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`namauser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tblbarang
-- ----------------------------
CREATE TABLE `tblbarang` (
  `kode` varchar(5) DEFAULT NULL,
  `namabrg` varchar(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbluser
-- ----------------------------
CREATE TABLE `tbluser` (
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(40) DEFAULT NULL,
  `level` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `admin` VALUES ('a7', '123', '1');
INSERT INTO `admin` VALUES ('a1', '123', '1');
INSERT INTO `admin` VALUES ('a2', '123', '2');
INSERT INTO `admin` VALUES ('a3', '123', '1');
INSERT INTO `admin` VALUES ('a4', '123', '1');
INSERT INTO `admin` VALUES ('a5', '123', '1');
INSERT INTO `admin` VALUES ('a6', '123', '2');
INSERT INTO `biodata` VALUES ('999', 'Wandi', 'Malang', 'L', '1990-08-09', 'wandi@yahoo.com', 'hasil_upload/batman12.jpg');
INSERT INTO `biodata` VALUES ('exo.k.001', 'Byun Baekhyun', 'Seoul', 'L', '1992-05-06', 'baekhyun@gmail.com', 'hasil_upload/IMG_4033.JPG');
INSERT INTO `biodata` VALUES ('exo.k.002', 'Do Kyung Soo', 'Incheon', 'L', '1993-01-01', 'kyungssi@gmail.com', 'hasil_upload/IMG_4134.JPG');
INSERT INTO `biodata` VALUES ('exo.k.004', 'Park Chanyeol', 'Mokpo', 'L', '1992-06-08', 'chanyeoli@gmail.com', 'hasil_upload/IMG_4131.JPG');
INSERT INTO `biodata` VALUES ('exo.k.005', 'Suho', 'Busan', 'L', '1990-05-09', 'prince@gmail.com', 'hasil_upload/kasuari.jpg');
INSERT INTO `biodata` VALUES ('snsd.001', 'Kim Taeyeon', 'Busan', 'P', '1989-03-09', 'taenggu@gmail.com', 'hasil_upload/IMG_4332.PNG');
INSERT INTO `booking` VALUES ('a1', 'j1', 'A1', '1', '2014-11-20', '2014-11-21');
INSERT INTO `booking` VALUES ('a6', 'w1', 'A3', '2', '2014-11-21', '2014-11-22');
INSERT INTO `booking` VALUES ('a7', 'b1', 'A2', '1', '2014-11-21', '2014-11-21');
INSERT INTO `booking` VALUES ('a4', 'j1', 'A1', '1', '2014-11-21', '2014-11-22');
INSERT INTO `booking` VALUES ('a5', 'j1', 'A1', '1', '2014-11-21', '2014-11-22');
INSERT INTO `booking` VALUES ('a7', 'b1', 'A2', '2', '2014-11-21', '2014-11-22');
INSERT INTO `booking` VALUES ('a3', 'b1', 'A2', '1', '2014-11-21', '2014-11-20');
INSERT INTO `booking` VALUES ('a5', 'w1', 'A3', '1', '2014-11-21', '2014-11-23');
INSERT INTO `booking` VALUES ('a7', 'w1', 'A3', '1', '2014-11-21', '2014-11-23');
INSERT INTO `booking` VALUES ('a2', 'b1', 'A2', '1', '2014-11-21', '2014-11-22');
INSERT INTO `booking` VALUES ('a3', 'j1', 'A3', '1', '2014-11-21', '2015-01-06');
INSERT INTO `booking` VALUES ('a4', 'j1', 'A1', '1', '2014-11-27', '2014-11-24');
INSERT INTO `booking` VALUES ('a3', '', 'A1', '1', '2014-11-27', '2014-11-27');
INSERT INTO `booking` VALUES ('a3', '', 'A2', '0', '2014-11-27', '2014-11-27');
INSERT INTO `booking` VALUES ('a3', 'j1', 'A3', '1', '2014-11-27', '2014-11-27');
INSERT INTO `booking` VALUES ('a3', 'j1', 'A2', '1', '2014-11-27', '0000-00-00');
INSERT INTO `checklist` VALUES ('2015-01-15', 'D2-TI-U', 'pelatihan guru papua', 'ss', '2', '2', '1', '1', '2');
INSERT INTO `checklist` VALUES ('2015-01-07', 'A2-TI-K', 'Pelatihan Guru Sulsel', 'ss', '1', '1', '2', '1', '2');
INSERT INTO `daftarbarang` VALUES ('SP01', 'Cristian Looboutin', 'Pink Jimmy Choo', 'Stilleto', 'Pink', 'P', '350000', '2015-01-06', 'images1/sepatu_female/SP01.jpg', '20');
INSERT INTO `daftarbarang` VALUES ('SP02', 'Jimmy Cho', 'Shes Ads', 'Stillet', 'Silver', 'P', '450000', '2015-01-06', 'images1/sepatu_female/SP02.jpg', '30');
INSERT INTO `daftarbarang` VALUES ('SP03', 'Hiteck', 'Shes Abr', 'Stillet', 'Brown', 'P', '400000', '2015-01-07', 'images1/sepatu_female/SP03.jpg', '40');
INSERT INTO `daftarbarang` VALUES ('SP04', 'Shoppie', 'Shoppie RD', 'Stilleto', 'Peach', 'P', '300000', '2015-01-07', 'images1/sepatu_female/SP04.jpg', '25');
INSERT INTO `daftarbarang` VALUES ('SP05', 'New Balance', 'New Balance', 'Shoes', 'Brown', 'L', '600000', '2015-01-12', 'images1/sepatu_male/SP05.jpg', '40');
INSERT INTO `daftarbarang` VALUES ('SP06', 'Nike', 'Nike Sport', 'Shoes', 'Blue', 'L', '899000', '2015-01-12', 'images1/sepatu_male/SP06.jpg', '35');
INSERT INTO `daftarbarang` VALUES ('SP07', 'Shoppie', 'Shoppie RD', 'Stilleto', 'Peach', 'P', '300000', '2015-01-07', 'images1/sepatu_female/SP04.jpg', '25');
INSERT INTO `daftarbarang` VALUES ('TS01', 'Shoppie', 'HJK k', 'Bag', 'Coklatt', 'P', '300000', '2015-01-07', 'images1/tas_female/TS01.jpg', '40');
INSERT INTO `daftarbarang` VALUES ('TS02', 'Gucci', 'CF Bags', 'Bag', 'Blue', 'P', '250000', '2015-01-07', 'images1/tas_female/TS02.jpg', '35');
INSERT INTO `diklat` VALUES ('A2-TI-K', 'Pelatihan Guru Sulsel', '14', 'a2', '2015-01-08', '2015-01-13', 'B2');
INSERT INTO `diklat` VALUES ('D2-TI-U', 'pelatihan guru papua', '20', 'a3', '2015-01-09', '2015-01-19', 'A3');
INSERT INTO `dosen` VALUES ('a1', 'nanik');
INSERT INTO `dosen` VALUES ('a2', 'surya');
INSERT INTO `dosen` VALUES ('a3', 'kadek');
INSERT INTO `dosen` VALUES ('a4', 'salis');
INSERT INTO `dosen` VALUES ('a5', 'salis');
INSERT INTO `dosen` VALUES ('a6', 'wawan');
INSERT INTO `dosen` VALUES ('a7', 'Judin');
INSERT INTO `instruktur` VALUES ('122', 'salis');
INSERT INTO `instruktur` VALUES ('aa1', 'F. Wawan');
INSERT INTO `instruktur` VALUES ('aa2', 'kadek');
INSERT INTO `instruktur` VALUES ('bb3', 'nanik');
INSERT INTO `jadwal` VALUES ('A2-TI-K', 'Pelatihan guru sulsel', '2015-01-07', '07.00', 'c1', '10', 'A2', 'aa1', 'aa1');
INSERT INTO `jadwal` VALUES ('D2-TI-U', 'Pelatihan guru Papua', '2015-01-08', '10.00', 'a3', '5', 'A1', 'aa1', 'aa2');
INSERT INTO `kerangka` VALUES ('PBO', '12');
INSERT INTO `login` VALUES ('1', 'c4ca4238a0b923820dcc509a6f75849b', '1');
INSERT INTO `login` VALUES ('4', 'a87ff679a2f3e71d9181a67b7542122c', '2');
INSERT INTO `login` VALUES ('admin', '123', '1');
INSERT INTO `login` VALUES ('baekhyun', '637f9c698af8110d01a765c320dec874', '1');
INSERT INTO `login` VALUES ('operator', '4b583376b2767b923c3e1da60d10de59', '1');
INSERT INTO `login` VALUES ('salis', 'd41d8cd98f00b204e9800998ecf8427e', '1');
INSERT INTO `login` VALUES ('user', 'ee11cbb19052e40b07aac0ca060c23ee', '2');
INSERT INTO `login_member` VALUES ('', 'c4ca4238a0b923820dcc509a6f75849b', '1');
INSERT INTO `login_member` VALUES ('opearator', 'c81e728d9d4c2f636f067f89cc14862c', '2');
INSERT INTO `login_member` VALUES ('satu', 'c4ca4238a0b923820dcc509a6f75849b', '1');
INSERT INTO `materi` VALUES ('a2', 'P. Aplikasi mobile1');
INSERT INTO `materi` VALUES ('a3', 'Animasi');
INSERT INTO `materi` VALUES ('c1', 'e-commerce');
INSERT INTO `materi` VALUES ('c2', 'e-commerce');
INSERT INTO `materi` VALUES ('j1', 'Jaringan');
INSERT INTO `matkul` VALUES ('b1', 'basis data');
INSERT INTO `matkul` VALUES ('j1', 'jarkom');
INSERT INTO `matkul` VALUES ('w1', 'web');
INSERT INTO `member` VALUES ('123', 'salis', 'semarang', '1994-09-08');
INSERT INTO `member` VALUES ('A22.02321', 'Lia Anggraeni', 'Pati', '1995-01-14');
INSERT INTO `member` VALUES ('A22.02354', 'Amalul Ari', 'Kudus', '1996-03-24');
INSERT INTO `member` VALUES ('A22.02368', 'Anisa Anggraini', 'Rembang', '0199-07-17');
INSERT INTO `member` VALUES ('A22.02379', 'salis farkhanani', 'jepara', '1994-09-08');
INSERT INTO `pegawai` VALUES ('1', 'salis', 'iii', 'p', 'a', 'a');
INSERT INTO `pegawai` VALUES ('2', 'lia', 'iii', 'p', 'a', 'a');
INSERT INTO `pegawai` VALUES ('3', 'yasim', 'iii', 'p', 'a', 'a');
INSERT INTO `pegawai` VALUES ('4', 'anis', 'iii', 'p', 'a', 'a');
INSERT INTO `ruang` VALUES ('A1', 'R. Lab jarkom');
INSERT INTO `ruang` VALUES ('A2', 'R. Basis Data');
INSERT INTO `ruang` VALUES ('A3', 'R. Animasi');
INSERT INTO `ruang` VALUES ('B1', 'R. Basis Data');
INSERT INTO `ruang` VALUES ('B2', 'R. Lab Teknik');
INSERT INTO `ruang` VALUES ('B3', 'R. Pelatihan');
INSERT INTO `ruang1` VALUES ('1', 'aa');
INSERT INTO `ruang1` VALUES ('2', 'bb');
INSERT INTO `tbl_buku` VALUES ('123', 'sfa', 'brg', 'rgw', '1990', 'f srhrjtsbgbe', 'hasil_upload_buku/', 'hasil_upload_cover/');
INSERT INTO `tbl_buku` VALUES ('', '', '', '', '0', '', 'hasil_upload_buku/', 'hasil_upload_cover/');
INSERT INTO `tbl_buku` VALUES ('1333', 'gsnr', 'rnsy', 'rny', '1009', 'ngsrhym', 'hasil_upload_buku/kasuari.jpg', 'hasil_upload_cover/kasuari.jpg');
INSERT INTO `tbl_member` VALUES ('132', 'sr', 'fg', 'gt', 'te', '1990-01-03', '1', 'hasil_upload/');
INSERT INTO `tbl_member` VALUES ('1322', 'wag', 'egt', 'etb', 'ebt', '1234-01-01', '1', 'hasil_upload/IMG_4046.JPG');
INSERT INTO `tbl_user` VALUES ('1', 'c4ca4238a0b923820dcc509a6f75849b', '1');
