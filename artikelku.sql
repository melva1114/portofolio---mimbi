-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 08:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artikelku`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(111) NOT NULL,
  `nama` varchar(111) NOT NULL,
  `judul` text NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `nama`, `judul`, `gambar`, `isi`) VALUES
(3, 'Asep Salto', 'Kamu jahat', '5RjFYjOz_400x400.jpg', 'I\'m sorry if I say, \"I need you\"\r\nBut I don\'t care, I\'m not scared of love\r\n\'Cause when I\'m not with you, I\'m weaker\r\nIs that so wrong? Is it so wrong\r\nThat you make me strong?'),
(5, 'Semen Gresik', 'Misteri Di Balik nama Sally', 'maxresdefault.jpg', 'Di Kampung Durian Runtuh terkenal akan misteri Sally berwajah dua. Apakah beliau memiliki kepribaduian ganda entahlah hanya Tok Dalang Yang tahu sekian terimakasih'),
(6, 'Radit Anak Baik', 'إِنَّ اللَّهَ مَعَ الصَّابِرِينَ', 'foto-cover-fd16aeef7e9f908683d814c32bfa20fa_600x400.jpg', 'Wise men say\r\nOnly fools rush in\r\nBut I can\'t help falling in love with you\r\nShall I stay?\r\nWould it be a sin\r\nIf I can\'t help falling in love with you?\r\nLike a river flows\r\nSurely to the sea\r\nDarling, so it goes\r\nSome things are meant to be'),
(7, 'Budi Tjakep', 'Ganteng Banget', 'axis.jpg', 'Iritoloji nomor slimann epat?\r\nNunggu guru selfie dulu ?\r\nGanteng dikit cekrek?\r\nGanteng banyak cekrek, ganteng banget?\r\nCekrek cekrek upload ?\r\nManda mandi kembang like this..\r\nPulang sekolah ngumpul sama temen senyum bebek cekrek,\r\nSalam hormat cekrek upload upload\r\nBudi belagu like this, Budi baper like this,\r\nMenatap masa ?'),
(8, 'q', 'q', 'Screenshot (2).png', 'q'),
(15, 'dw', 'dw', 'Screenshot (4).png', 'dew'),
(16, 'dw', 'dw', 'Screenshot (4).png', 'dew'),
(17, 'dw', 