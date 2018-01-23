-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 03:31 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugas_sim`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `idfasilitas` int(11) NOT NULL AUTO_INCREMENT,
  `namafasilitas` varchar(50) NOT NULL,
  `spesifikasi` varchar(350) NOT NULL,
  `foto` varchar(350) NOT NULL,
  PRIMARY KEY (`idfasilitas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`idfasilitas`, `namafasilitas`, `spesifikasi`, `foto`) VALUES
(3, 'Lab Komputer', 'Labkomputer dilengkapi dengan internet, dan banyak unit komputer sekitar 60 Unit Komputer siap digunakan, ', '94komputer-2.jpg'),
(4, 'Parikir Area', 'Disediakan lahan parkir sekitar 1 hektar kurang lebih', '5.jpg'),
(5, 'Gedung Bertingkat', 'Gedung bangunanb ertingkat, dan ada beberapa gedung dilengkapi dengan pendingin ruangan, dengan kursi perorang membuat kegaitan belajar mengajar terasa nyaman.', '7.jpg'),
(6, 'Memiliki Lab Farmasi', 'Labolatorium farmasi dilengkapi dengan teknologi-teknologi terbarukan dan di tambah dengan tenaga pengajar yang ahli serta kompeten dibidangnya.', 'Lab Farmasetika.jpg'),
(7, 'Memiliki Koperasi Sekolah', 'Guna memajukan roda perekonomian Siswa, maka dibentuklah suatu koperasi yang berlandaskan dari siswa untuk siswa serta demi bersama.', 'koperasi-sekolah-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE IF NOT EXISTS `hubungi` (
  `id_hubungi` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(1, 'Danu', 'danu@yahoo.com', 'Profile SMK ', '2017-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `profile_guru`
--

CREATE TABLE IF NOT EXISTS `profile_guru` (
  `nip` varchar(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tpt_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `lulusan` varchar(20) NOT NULL,
  `foto` varchar(150) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_guru`
--

INSERT INTO `profile_guru` (`nip`, `nama`, `alamat`, `tpt_lahir`, `tgl_lahir`, `lulusan`, `foto`) VALUES
('13356454', 'Dadang', 'Kp Ujung', 'Ciujung', '2017-10-09', 'SMA', '15036641_1335567299811168_2583396850180192364_n.jpg'),
('54546564', 'Lukman', 'Cisarua', 'Pandeglang', '2013-01-01', 'SMA', '15036641_1335567299811168_2583396850180192364_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabelberita`
--

CREATE TABLE IF NOT EXISTS `tabelberita` (
  `idb` int(5) NOT NULL AUTO_INCREMENT,
  `judulberita` varchar(255) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `isiberita` text NOT NULL,
  `tglpost` date NOT NULL,
  `jampost` varchar(20) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  PRIMARY KEY (`idb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tabelberita`
--

INSERT INTO `tabelberita` (`idb`, `judulberita`, `foto`, `isiberita`, `tglpost`, `jampost`, `penulis`) VALUES
(7, 'Ujian Bahasa SMK Babunanajah Sukses', 'index.jpg', '<p>Kegiatan Uji Komptensi Bahasa Inggris di SMK Babunnajah berjalan dengan sukses, kegaitan ini guna menguji kemampuan siswa dalam berbicara, mendengarkan percakapan Bahasa Inggirs, kegiatan ini didampingi oleh beberapa guru serta dukungan dari para orang tuapun berdatangan,</p>\r\n<p>Noviana megnatakan "kegaitan ini menegangkan membuat jantung deg-degan, karena kali pertama saya melakukan ujian ini" ujarnya pada sabtu 14 Oktober 2017.</p>', '2017-10-14', '03:29', 'Budi Raharjo'),
(8, 'Kegiatan Penyuluhan Kenakalan Remaja dan Narkoba ', 'IMG_20161201_100858-e1485769902350.jpg', '<p>Penyuluhan dari kapolsek menes mengundang canda dan tawa, banyak ilmu yang bermanfaat disampaikan oleh kapolsek menes, tujuan diselenggarakannya kegiatan ini yaitu untuk menumbuh kembangkan kecintaan generasi penerus akan ilmu yang bermanfaat tidak disalah gunakan.</p>', '2017-10-14', '03:30', 'Budi Raharjo');

-- --------------------------------------------------------

--
-- Table structure for table `tabelprofile`
--

CREATE TABLE IF NOT EXISTS `tabelprofile` (
  `idprofil` int(5) NOT NULL AUTO_INCREMENT,
  `j_profil` varchar(255) NOT NULL,
  `i_profil` text NOT NULL,
  `tglpost` varchar(255) NOT NULL,
  `jampost` varchar(255) NOT NULL,
  `postoleh` int(5) NOT NULL,
  PRIMARY KEY (`idprofil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tabelprofile`
--

INSERT INTO `tabelprofile` (`idprofil`, `j_profil`, `i_profil`, `tglpost`, `jampost`, `postoleh`) VALUES
(1, 'Profile', '<p>SMK Babunnajah adalah salah satu Sekolah Menengah Kejuruan yang ada di Kabaupaten Pandeglang yang memiliki programm Studi Kejuruan Informatika.</p>', 'Sabtu,30 September 2017', '05:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `foto` varchar(350) NOT NULL,
  `level` varchar(35) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `name`, `uname`, `pass`, `foto`, `level`) VALUES
(119, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'Super Admin'),
(123, 'daerah', 'daerah', 'db54d563d175cc43b6ecfb28fc872440', '', 'Admin'),
(124, 'Udin', 'udinajah', '1d029c8e24fe81048516bccd0f1c87ee', '2-4.jpg', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
