-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2023 at 04:01 PM
-- Server version: 5.7.39
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbj_3dcurvedside`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `nama` varchar(25) NOT NULL,
  `waktu` datetime NOT NULL,
  `komentar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`nama`, `waktu`, `komentar`) VALUES
('Coba', '2023-12-19 22:41:02', 'keren banget');

-- --------------------------------------------------------

--
-- Table structure for table `kunci_jawaban`
--

CREATE TABLE `kunci_jawaban` (
  `no` int(11) NOT NULL,
  `jawaban` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunci_jawaban`
--

INSERT INTO `kunci_jawaban` (`no`, `jawaban`) VALUES
(1, 'a'),
(2, 'c'),
(3, 'c'),
(4, 'b'),
(5, 'a'),
(6, 'b'),
(7, 'b'),
(8, 'd'),
(9, 'd'),
(10, 'd');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `score` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `user_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`score`, `time`, `user_name`) VALUES
(8, '2023-12-19 15:27:31', 'coba@gmail.com'),
(9, '2023-12-19 22:45:42', 'admin@gmail.com'),
(9, '2023-12-19 22:46:19', 'admin@gmail.com'),
(6, '2023-12-19 22:47:10', 'admin@gmail.com'),
(3, '2023-12-19 22:47:56', 'admin@gmail.com'),
(6, '2023-12-19 22:49:04', 'admin@gmail.com'),
(4, '2023-12-19 22:50:09', 'admin@gmail.com'),
(5, '2023-12-19 22:51:23', 'admin@gmail.com'),
(5, '2023-12-19 22:52:12', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `email`, `password`) VALUES
('coba', 'coba@gmail.com', 'coba1'),
('admin', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`waktu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
