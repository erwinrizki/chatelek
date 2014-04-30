-- phpMyAdmin SQL Dump
-- version 4.0.7
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 30 Apr 2014 pada 13.38
-- Versi Server: 5.5.33
-- Versi PHP: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `chatelek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '5435cfddc7e1cd3c1d703f230e2113ba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_chat`
--

CREATE TABLE IF NOT EXISTS `data_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data untuk tabel `data_chat`
--

INSERT INTO `data_chat` (`id`, `username`, `pesan`, `tanggal`) VALUES
(1, 'bejo', 'haha', '2014-04-09'),
(2, 'bejo', 'koplak', '2014-04-09'),
(3, 'bejo', 'jajal terus', '2014-04-09'),
(4, 'bejo', 'hoho', '2014-04-09'),
(5, 'bejo', 'hahaha', '2014-04-09'),
(6, 'bejo', 'haha', '2014-04-09'),
(7, 'bejo', 'hihi', '2014-04-09'),
(8, 'bejo', 'huhu', '2014-04-09'),
(9, 'bejo', 'hehe', '2014-04-09'),
(10, 'bejo', 'hoho', '2014-04-09'),
(11, 'bejo', 'aku kok ngomong dewe', '2014-04-09'),
(12, 'bejo', 'hoi', '2014-04-09'),
(13, 'fadhel', 'hoi', '2014-04-10'),
(14, 'bejo', 'ini kan cuma contoh', '2014-04-10'),
(15, 'bejo', 'lha ya, ini kan cuma contoh', '2014-04-10'),
(16, 'fadhel', 'bos, aku pesen bangunan ya', '2014-04-10'),
(17, 'bejo', 'oke, nanti tak bukain fb grup teknik sipil', '2014-04-10'),
(18, 'bejo', 'hai pak', '2014-04-10'),
(19, 'fadhel', 'opo bro', '2014-04-10'),
(20, 'bejo', 'pye lek kabare', '2014-04-17'),
(21, 'buka', 'hoi jo bejo, ngopo kowe?', '2014-04-30'),
(22, 'bejo', 'gak ngopo2', '2014-04-30'),
(23, 'buka', 'h', '2014-04-30'),
(24, 'buka', 's', '2014-04-30'),
(25, 'tya', 'braaay', '2014-04-30'),
(26, 'buka', 'ok dhit', '2014-04-30'),
(27, 'buka', 'gfsd', '2014-04-30'),
(28, 'buka', 'sg', '2014-04-30'),
(29, 'buka', 'sgsg', '2014-04-30'),
(30, 'buka', 'sgsg', '2014-04-30'),
(31, 'buka', 'sg', '2014-04-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE IF NOT EXISTS `data_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(3) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id_user`, `nama`, `username`, `password`, `status`) VALUES
(1, 'mbah bejo', 'bejo', 'jajal', 'off'),
(5, 'jini', 'aku_cupu', 'haha', 'off'),
(6, 'arex', 'buka', 'sitik', 'on');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
