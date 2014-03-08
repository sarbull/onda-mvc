-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Gazda: localhost
-- Timp de generare: 08 Mar 2014 la 08:41
-- Versiune server: 5.5.35
-- Versiune PHP: 5.4.25-1+sury.org~precise+2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza de date: `onda_mvc`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `time_updated` int(11) NOT NULL,
  `time_created` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `time_updated`, `time_created`) VALUES
(6, 'admin', 'admin', 1394259316, 1394232815),
(9, 'test', 'test', 1394256065, 1394235199),
(17, 'asdada', 'dasdaasdasdsd', 1394256066, 1394240493),
(20, 'asdasd', 'asdasdasd', 1394256074, 1394242623),
(21, 'sda', 'sdasdasd', 1394259087, 1394256212),
(22, 'asdasd', 'asdasd', 0, 1394256217);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
