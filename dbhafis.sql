-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 06:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbprogramkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_tabel`
--

CREATE TABLE `info_tabel` (
  `id_info` int(25) NOT NULL,
  `desc` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_tabel`
--

INSERT INTO `info_tabel` (`id_info`, `desc`, `nama`, `divisi`, `status`) VALUES
(1, '', 'qwerty', 'def', 'akan dikerjakan'),
(2, '', '45345', 'ert', 'selsai dikerjakan');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(25) NOT NULL,
  `desc` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `agenda_project` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `desc`, `nama`, `divisi`, `agenda_project`, `link`, `status`) VALUES
(101, '', 'project 1', 'poto', '123', '', 'akan dikerjakan'),
(102, '', '123', '1', '321', '', 'akan dikerjakan'),
(103, '', 'vidio g', 'media g', 'c hjhjhjv g', 'https://www.google.com/search?q=localhost%2Fphpmyadmin&oq=loca&aqs=chrome.4.69i60j69i57j69i59j46i131i433j0i131i433j69i60l3.3488j0j4&sourceid=chrome&ie=UTF-8', 'selsai dikerjakan'),
(104, '', 'vidio', 'media', 'asd', 'https://www.google.com/search?q=localhost%2Fphpmyadmin&oq=loca&aqs=chrome.4.69i60j69i57j69i59j46i131i433j0i131i433j69i60l3.3488j0j4&sourceid=chrome&ie=UTF-8', 'selsai dikerjakan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(25) NOT NULL,
  `desc` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `akses_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `desc`, `nama`, `email`, `username`, `password`, `akses_level`) VALUES
(3, '', 'admin', 'azy@gmail.com', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin'),
(4, '', 'riyadimulyana', 'riyadi45@gmail.com', 'user', '12dea96fec20593566ab75692c9949596833adc9', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_tabel`
--
ALTER TABLE `info_tabel`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_tabel`
--
ALTER TABLE `info_tabel`
  MODIFY `id_info` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
