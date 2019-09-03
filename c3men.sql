-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Jun 2019 pada 07.36
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c3men`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `position_x` varchar(255) NOT NULL,
  `position_y` varchar(255) NOT NULL,
  `position_z` varchar(255) NOT NULL,
  `position_r` varchar(255) NOT NULL,
  `pump_state` varchar(255) NOT NULL,
  `speed_val` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `position`
--

INSERT INTO `position` (`id`, `position_x`, `position_y`, `position_z`, `position_r`, `pump_state`, `speed_val`) VALUES
(1, '55', '66', '66', '77', '88', '99');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teaching`
--

CREATE TABLE `teaching` (
  `id` int(11) NOT NULL,
  `data_x` varchar(7) NOT NULL,
  `data_y` varchar(7) NOT NULL,
  `data_z` varchar(7) NOT NULL,
  `data_r` varchar(7) NOT NULL,
  `data_pump` varchar(7) NOT NULL,
  `data_speed` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `teaching`
--

INSERT INTO `teaching` (`id`, `data_x`, `data_y`, `data_z`, `data_r`, `data_pump`, `data_speed`) VALUES
(1, '22', '200', '65', '77', '88', '88');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'mochaulia', 'af9f41bfe5e771b219ab49285c76e93e'),
(2, 'admin', 'd0cdb90ace28f1996db226bd2994805c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching`
--
ALTER TABLE `teaching`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `teaching`
--
ALTER TABLE `teaching`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
