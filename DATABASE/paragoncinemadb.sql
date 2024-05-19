-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 09:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paragoncinemadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookid` int(11) NOT NULL,
  `session_id` bigint(20) NOT NULL,
  `custid` int(11) NOT NULL,
  `hallNo` varchar(255) NOT NULL,
  `seatNo` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clerk`
--

CREATE TABLE `clerk` (
  `id` int(10) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(50) NOT NULL,
  `icNum` varchar(14) NOT NULL,
  `phoneNum` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clerk`
--

INSERT INTO `clerk` (`id`, `username`, `password`, `name`, `icNum`, `phoneNum`, `gender`, `role`) VALUES
(1, 'amin', '1234', 'Khairul Amin', '010713-10-0861', '01122238954', 'Male', 'Clerk'),
(2, 'hafiz', '123', 'Ezmir', '991122-09-3131', '0101299234', 'Male', 'Clerk');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneNo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custid`, `name`, `phoneNo`, `email`, `username`, `password`) VALUES
(3, 'hafiz', '019267345', 'hafiz@gmail.com', 'hafizezmir', 'Hafiz0123'),
(5, 'Azmin', '0126840745', 'azmin@gmail.com', 'azmin', 'Azmin012'),
(6, 'Hafiz Ezmir', '0182418505', 'hafizezmir012@gmail.com', 'ezmirhafiz', 'Hafiz0123');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hallNo` varchar(16) NOT NULL,
  `hallName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hallNo`, `hallName`) VALUES
('HALL-1', 'Kids Hall'),
('HALL-10', 'Regular Hall'),
('HALL-2', 'Regular Hall'),
('HALL-3', 'Regular Hall'),
('HALL-4', 'Regular Hall'),
('HALL-5', 'Regular Hall'),
('HALL-6', 'Regular Hall'),
('HALL-7', 'Regular Hall'),
('HALL-8', 'Regular Hall'),
('HALL-9', 'Regular Hall');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoiceno` int(11) NOT NULL,
  `price` double NOT NULL,
  `custid` int(11) NOT NULL,
  `theaterName` varchar(255) NOT NULL,
  `hallNo` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `showtime` varchar(255) NOT NULL,
  `chosenSeat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(10) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(50) NOT NULL,
  `icNum` varchar(14) NOT NULL,
  `phoneNum` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `username`, `password`, `name`, `icNum`, `phoneNum`, `gender`, `role`) VALUES
(1, 'amin', '123', 'Khairul', '121212-10-0909', '0310310031', 'Male', 'Manager'),
(2, 'syahir', '123', 'Aiman', '212121-22-9871', '013131313', 'Male', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movieid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `releaseDate` date DEFAULT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movieid`, `title`, `poster`, `genre`, `description`, `duration`, `releaseDate`, `trailer`) VALUES
(10, 'Barbie', 'barbie_CV.jpg', 'Romance, Children\'s Film, Comedy', 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.', '2 Hours', '2023-07-25', 'https://www.youtube.com/watch?v=pBk4NYhWNMM&t=20s'),
(11, 'Spiderman : Across The Spider-Verse', 'spidermanATS_CV.jpg', 'Action, Comedy, Fantasy', 'After reuniting with Gwen Stacy, Brooklyn\'s full-time, friendly neighborhood Spider-Man is catapulted across the Multiverse, where he encounters a team of Spider-People charged with protecting its very existence.', '2 hours', '2023-06-07', 'https://www.youtube.com/watch?v=shW9i6k8cB0&t=12s'),
(12, 'The Batman', 'batman_CV.jpg', 'Action, Superhero, Crime Film', 'Batman is called to intervene when the mayor of Gotham City is murdered. Soon, his investigation leads him to uncover a web of corruption, linked to his own dark past.', '3 Hours', '2023-05-10', 'https://www.youtube.com/watch?v=mqqft2x_Aa4'),
(13, 'Blade Runner 2049', 'bladerunner_CV.jpg', 'Sci-Fi, Action, Fantasy', 'K, an officer with the Los Angeles Police Department, unearths a secret that could create chaos. He goes in search of a former blade runner who has been missing for over three decades.', '3 Hours', '2023-06-14', 'https://www.youtube.com/watch?v=gCcx85zbxz4&t=79s'),
(14, 'The Wolf of Wall Street', 'wows_CV.jpg', 'Comedy, Dark Comedy, Drama', 'Introduced to life in the fast lane through stockbroking, Jordan Belfort takes a hit after a Wall Street crash. He teams up with Donnie Azoff, cheating his way to the top as his relationships slide.', '4 Hours', '2023-06-04', 'https://www.youtube.com/watch?v=iszwuX1AK6A'),
(15, 'The Godfather', 'thegodfather_CV.jpg', 'Mafia, Drama, Crime Fiction', 'Don Vito Corleone, head of a mafia family, decides to hand over his empire to his youngest son Michael. However, his decision unintentionally puts the lives of his loved ones in grave danger.', '3 Hours', '2023-05-31', 'https://www.youtube.com/watch?v=UaVTIH8mujA'),
(16, 'Inception', 'inception_CV.jpg', 'Action, Sci-Fi, Drama', 'Cobb steals information from his targets by entering their dreams. Saito offers to wipe clean Cobb\'s criminal history as payment for performing an inception on his sick competitor\'s son.', '2 Hours 30 Minutes', '2023-06-14', 'https://www.youtube.com/watch?v=8hP9D6kZseM'),
(17, 'Dune: Part Two', 'dune_CV.jpg', 'Sci-Fi, Novel, Fantasy Fiction', 'Paul Atreides unites with Chani and the Fremen while seeking revenge against the conspirators who destroyed his family. Facing a choice between the love of his life and the fate of the universe, he must prevent a terrible future only he can foresee.', 'N/A', '2023-11-03', 'https://www.youtube.com/watch?v=ABfQGtUEEzA'),
(18, 'The Sopranos', 'thesopranos_CV.jpg', 'Serial, Crime film, Psychological drama', 'Tony Soprano, an Italian-American mafia head based in New Jersey, struggles to manage his family and criminal life and confides his affairs to his psychiatrist Jennifer Melfi.', '2 Hours 50 Minutes', '2023-06-11', 'https://www.youtube.com/watch?v=KMx4iFcozK0'),
(19, 'Oppenheimer', 'oppenheimer_CV.jpg', 'War, Mystery, History', 'Physicist J Robert Oppenheimer works with a team of scientists during the Manhattan Project, leading to the development of the atomic bomb.', '4 Hours 30 Minutes', '2023-07-25', 'https://www.youtube.com/watch?v=bK6ldnjE3Y0'),
(20, 'Spider-Man No Way Home', 'spidermanNWH_CV.jpg', 'Action, Comedy, Superhero', 'Spider-Man seeks the help of Doctor Strange to forget his exposed secret identity as Peter Parker. However, Strange\'s spell goes horribly wrong, leading to unwanted guests entering their universe.', '3 Hours', '2023-06-19', 'https://www.youtube.com/watch?v=rt-2cxAiPJk'),
(21, 'The Flash', 'theflash_CV.jpg', 'Action, Superhero, Adventure', 'Worlds collide when the Flash uses his superpowers to travel back in time to change the events of the past. However, when his attempt to save his family inadvertently alters the future, he becomes trapped in a reality in which General Zod has returned.', '2 Hours 30 Minutes', '2023-06-16', 'https://www.youtube.com/watch?v=r51cYVZWKdY');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seatid` int(11) NOT NULL,
  `seatNo` varchar(16) NOT NULL,
  `hallNo` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seatid`, `seatNo`, `hallNo`) VALUES
(1, 'A1', 'HALL-1'),
(2, 'A2', 'HALL-1'),
(3, 'A3', 'HALL-1'),
(4, 'A4', 'HALL-1'),
(5, 'A5', 'HALL-1'),
(6, 'A6', 'HALL-1'),
(7, 'B1', 'HALL-1'),
(8, 'B2', 'HALL-1'),
(9, 'B3', 'HALL-1'),
(10, 'B4', 'HALL-1'),
(11, 'B5', 'HALL-1'),
(12, 'B6', 'HALL-1'),
(13, 'C1', 'HALL-1'),
(14, 'C2', 'HALL-1'),
(15, 'C3', 'HALL-1'),
(16, 'C4', 'HALL-1'),
(17, 'C5', 'HALL-1'),
(18, 'C6', 'HALL-1'),
(19, 'D1', 'HALL-1'),
(20, 'D2', 'HALL-1'),
(21, 'D3', 'HALL-1'),
(22, 'D4', 'HALL-1'),
(23, 'D5', 'HALL-1'),
(24, 'D6', 'HALL-1'),
(25, 'E1', 'HALL-1'),
(26, 'E2', 'HALL-1'),
(27, 'E3', 'HALL-1'),
(28, 'E4', 'HALL-1'),
(29, 'E5', 'HALL-1'),
(30, 'E6', 'HALL-1'),
(31, 'F1', 'HALL-1'),
(32, 'F2', 'HALL-1'),
(33, 'F3', 'HALL-1'),
(34, 'F4', 'HALL-1'),
(35, 'F5', 'HALL-1'),
(36, 'F6', 'HALL-1'),
(37, 'A1', 'HALL-2'),
(38, 'A2', 'HALL-2'),
(39, 'A3', 'HALL-2'),
(40, 'A4', 'HALL-2'),
(41, 'A5', 'HALL-2'),
(42, 'A6', 'HALL-2'),
(49, 'B1', 'HALL-2'),
(50, 'B2', 'HALL-2'),
(51, 'B3', 'HALL-2'),
(52, 'B4', 'HALL-2'),
(53, 'B5', 'HALL-2'),
(54, 'B6', 'HALL-2'),
(55, 'C1', 'HALL-2'),
(56, 'C2', 'HALL-2'),
(57, 'C3', 'HALL-2'),
(58, 'C4', 'HALL-2'),
(59, 'C5', 'HALL-2'),
(60, 'C6', 'HALL-2'),
(61, 'D1', 'HALL-2'),
(62, 'D2', 'HALL-2'),
(63, 'D3', 'HALL-2'),
(64, 'D4', 'HALL-2'),
(65, 'D5', 'HALL-2'),
(66, 'D6', 'HALL-2'),
(67, 'E1', 'HALL-2'),
(68, 'E2', 'HALL-2'),
(69, 'E3', 'HALL-2'),
(70, 'E4', 'HALL-2'),
(71, 'E5', 'HALL-2'),
(72, 'E6', 'HALL-2'),
(73, 'F1', 'HALL-2'),
(74, 'F2', 'HALL-2'),
(75, 'F3', 'HALL-2'),
(76, 'F4', 'HALL-2'),
(77, 'F5', 'HALL-2'),
(78, 'F6', 'HALL-2'),
(79, 'G1', 'HALL-2'),
(80, 'G2', 'HALL-2'),
(81, 'G3', 'HALL-2'),
(82, 'G4', 'HALL-2'),
(83, 'G5', 'HALL-2'),
(84, 'G6', 'HALL-2'),
(85, 'H1', 'HALL-2'),
(87, 'H2', 'HALL-2'),
(88, 'H3', 'HALL-2'),
(89, 'H4', 'HALL-2'),
(90, 'H5', 'HALL-2'),
(91, 'H6', 'HALL-2'),
(92, 'A1', 'HALL-3'),
(93, 'A2', 'HALL-3'),
(94, 'A3', 'HALL-3'),
(95, 'A4', 'HALL-3'),
(96, 'A5', 'HALL-3'),
(97, 'A6', 'HALL-3'),
(98, 'B1', 'HALL-3'),
(99, 'B2', 'HALL-3'),
(100, 'B3', 'HALL-3'),
(101, 'B4', 'HALL-3'),
(102, 'B5', 'HALL-3'),
(103, 'B6', 'HALL-3'),
(104, 'C1', 'HALL-3'),
(105, 'C2', 'HALL-3'),
(106, 'C3', 'HALL-3'),
(107, 'C4', 'HALL-3'),
(108, 'C5', 'HALL-3'),
(109, 'C6', 'HALL-3'),
(110, 'D1', 'HALL-3'),
(111, 'D2', 'HALL-3'),
(112, 'D3', 'HALL-3'),
(113, 'D4', 'HALL-3'),
(114, 'D5', 'HALL-3'),
(115, 'D6', 'HALL-3'),
(116, 'E1', 'HALL-3'),
(117, 'E2', 'HALL-3'),
(118, 'E3', 'HALL-3'),
(119, 'E4', 'HALL-3'),
(120, 'E5', 'HALL-3'),
(121, 'E6', 'HALL-3'),
(122, 'F1', 'HALL-3'),
(123, 'F2', 'HALL-3'),
(124, 'F3', 'HALL-3'),
(125, 'F4', 'HALL-3'),
(126, 'F5', 'HALL-3'),
(127, 'F6', 'HALL-3'),
(128, 'G1', 'HALL-3'),
(129, 'G2', 'HALL-3'),
(130, 'G3', 'HALL-3'),
(131, 'G4', 'HALL-3'),
(132, 'G5', 'HALL-3'),
(133, 'G6', 'HALL-3'),
(134, 'A1', 'HALL-4'),
(135, 'A2', 'HALL-4'),
(136, 'A3', 'HALL-4'),
(137, 'A4', 'HALL-4'),
(138, 'A5', 'HALL-4'),
(139, 'A6', 'HALL-4'),
(140, 'B1', 'HALL-4'),
(141, 'B2', 'HALL-4'),
(142, 'B3', 'HALL-4'),
(143, 'B4', 'HALL-4'),
(144, 'B5', 'HALL-4'),
(145, 'B6', 'HALL-4'),
(146, 'C1', 'HALL-4'),
(147, 'C2', 'HALL-4'),
(148, 'C3', 'HALL-4'),
(149, 'C4', 'HALL-4'),
(150, 'C5', 'HALL-4'),
(151, 'C6', 'HALL-4'),
(152, 'D1', 'HALL-4'),
(153, 'D2', 'HALL-4'),
(154, 'D3', 'HALL-4'),
(155, 'D4', 'HALL-4'),
(156, 'D5', 'HALL-4'),
(157, 'D6', 'HALL-4'),
(158, 'E1', 'HALL-4'),
(159, 'E2', 'HALL-4'),
(160, 'E3', 'HALL-4'),
(161, 'E4', 'HALL-4'),
(162, 'E5', 'HALL-4'),
(163, 'E6', 'HALL-4'),
(164, 'F1', 'HALL-4'),
(165, 'F2', 'HALL-4'),
(166, 'F3', 'HALL-4'),
(167, 'F4', 'HALL-4'),
(168, 'F5', 'HALL-4'),
(169, 'F6', 'HALL-4'),
(170, 'G1', 'HALL-4'),
(171, 'G2', 'HALL-4'),
(172, 'G3', 'HALL-4'),
(173, 'G4', 'HALL-4'),
(174, 'G5', 'HALL-4'),
(175, 'G6', 'HALL-4'),
(176, 'A1', 'HALL-5'),
(177, 'A2', 'HALL-5'),
(178, 'A3', 'HALL-5'),
(179, 'A4', 'HALL-5'),
(180, 'A5', 'HALL-5'),
(181, 'A6', 'HALL-5'),
(182, 'B1', 'HALL-5'),
(183, 'B2', 'HALL-5'),
(184, 'B3', 'HALL-5'),
(185, 'B4', 'HALL-5'),
(186, 'B5', 'HALL-5'),
(187, 'B6', 'HALL-5'),
(188, 'C1', 'HALL-5'),
(189, 'C2', 'HALL-5'),
(190, 'C3', 'HALL-5'),
(191, 'C4', 'HALL-5'),
(192, 'C5', 'HALL-5'),
(193, 'C6', 'HALL-5'),
(194, 'D1', 'HALL-5'),
(195, 'D2', 'HALL-5'),
(196, 'D3', 'HALL-5'),
(197, 'D4', 'HALL-5'),
(198, 'D5', 'HALL-5'),
(199, 'D6', 'HALL-5'),
(200, 'E1', 'HALL-5'),
(201, 'E2', 'HALL-5'),
(202, 'E3', 'HALL-5'),
(203, 'E4', 'HALL-5'),
(204, 'E5', 'HALL-5'),
(205, 'E6', 'HALL-5'),
(206, 'F1', 'HALL-5'),
(207, 'F2', 'HALL-5'),
(208, 'F3', 'HALL-5'),
(209, 'F4', 'HALL-5'),
(210, 'F5', 'HALL-5'),
(211, 'F6', 'HALL-5'),
(212, 'G1', 'HALL-5'),
(213, 'G2', 'HALL-5'),
(214, 'G3', 'HALL-5'),
(215, 'G4', 'HALL-5'),
(216, 'G5', 'HALL-5'),
(217, 'G6', 'HALL-5'),
(218, 'H1', 'HALL-5'),
(219, 'H2', 'HALL-5'),
(220, 'H3', 'HALL-5'),
(221, 'H4', 'HALL-5'),
(222, 'H5', 'HALL-5'),
(223, 'H6', 'HALL-5'),
(224, 'H1', 'HALL-3'),
(225, 'H2', 'HALL-3'),
(226, 'H3', 'HALL-3'),
(227, 'H4', 'HALL-3'),
(228, 'H5', 'HALL-3'),
(229, 'H6', 'HALL-3'),
(230, 'H1', 'HALL-4'),
(231, 'H2', 'HALL-4'),
(232, 'H3', 'HALL-4'),
(233, 'H4', 'HALL-4'),
(234, 'H5', 'HALL-4'),
(235, 'H6', 'HALL-4'),
(236, 'A1', 'HALL-6'),
(237, 'A2', 'HALL-6'),
(238, 'A3', 'HALL-6'),
(239, 'A4', 'HALL-6'),
(240, 'A5', 'HALL-6'),
(241, 'A6', 'HALL-6'),
(242, 'B1', 'HALL-6'),
(243, 'B2', 'HALL-6'),
(244, 'B3', 'HALL-6'),
(245, 'B4', 'HALL-6'),
(246, 'B5', 'HALL-6'),
(247, 'B6', 'HALL-6'),
(248, 'C1', 'HALL-6'),
(249, 'C2', 'HALL-6'),
(250, 'C3', 'HALL-6'),
(251, 'C4', 'HALL-6'),
(252, 'C5', 'HALL-6'),
(253, 'C6', 'HALL-6'),
(254, 'D1', 'HALL-6'),
(255, 'D2', 'HALL-6'),
(256, 'D3', 'HALL-6'),
(257, 'D4', 'HALL-6'),
(258, 'D5', 'HALL-6'),
(259, 'D6', 'HALL-6'),
(260, 'E1', 'HALL-6'),
(261, 'E2', 'HALL-6'),
(262, 'E3', 'HALL-6'),
(263, 'E4', 'HALL-6'),
(264, 'E5', 'HALL-6'),
(265, 'E6', 'HALL-6'),
(266, 'F1', 'HALL-6'),
(267, 'F2', 'HALL-6'),
(268, 'F3', 'HALL-6'),
(269, 'F4', 'HALL-6'),
(270, 'F5', 'HALL-6'),
(271, 'F6', 'HALL-6'),
(272, 'G1', 'HALL-6'),
(273, 'G2', 'HALL-6'),
(274, 'G3', 'HALL-6'),
(275, 'G4', 'HALL-6'),
(276, 'G5', 'HALL-6'),
(277, 'G6', 'HALL-6'),
(278, 'H1', 'HALL-6'),
(279, 'H2', 'HALL-6'),
(280, 'H3', 'HALL-6'),
(281, 'H4', 'HALL-6'),
(282, 'H5', 'HALL-6'),
(283, 'H6', 'HALL-6'),
(284, 'A1', 'HALL-7'),
(285, 'A2', 'HALL-7'),
(286, 'A3', 'HALL-7'),
(287, 'A4', 'HALL-7'),
(288, 'A5', 'HALL-7'),
(289, 'A6', 'HALL-7'),
(290, 'B1', 'HALL-7'),
(291, 'B2', 'HALL-7'),
(292, 'B3', 'HALL-7'),
(293, 'B4', 'HALL-7'),
(294, 'B5', 'HALL-7'),
(295, 'B6', 'HALL-7'),
(296, 'C1', 'HALL-7'),
(297, 'C2', 'HALL-7'),
(298, 'C3', 'HALL-7'),
(299, 'C4', 'HALL-7'),
(300, 'C5', 'HALL-7'),
(301, 'C6', 'HALL-7'),
(302, 'D1', 'HALL-7'),
(303, 'D2', 'HALL-7'),
(304, 'D3', 'HALL-7'),
(305, 'D4', 'HALL-7'),
(306, 'D5', 'HALL-7'),
(307, 'D6', 'HALL-7'),
(308, 'E1', 'HALL-7'),
(309, 'E2', 'HALL-7'),
(310, 'E3', 'HALL-7'),
(311, 'E4', 'HALL-7'),
(312, 'E5', 'HALL-7'),
(313, 'E6', 'HALL-7'),
(314, 'F1', 'HALL-7'),
(315, 'F2', 'HALL-7'),
(316, 'F3', 'HALL-7'),
(317, 'F4', 'HALL-7'),
(318, 'F5', 'HALL-7'),
(319, 'F6', 'HALL-7'),
(320, 'G1', 'HALL-7'),
(321, 'G2', 'HALL-7'),
(322, 'G3', 'HALL-7'),
(323, 'G4', 'HALL-7'),
(324, 'G5', 'HALL-7'),
(325, 'G6', 'HALL-7'),
(326, 'H1', 'HALL-7'),
(327, 'H2', 'HALL-7'),
(328, 'H3', 'HALL-7'),
(329, 'H4', 'HALL-7'),
(330, 'H5', 'HALL-7'),
(331, 'H6', 'HALL-7'),
(332, 'A1', 'HALL-8'),
(333, 'A2', 'HALL-8'),
(334, 'A3', 'HALL-8'),
(335, 'A4', 'HALL-8'),
(336, 'A5', 'HALL-8'),
(337, 'A6', 'HALL-8'),
(338, 'B1', 'HALL-8'),
(339, 'B2', 'HALL-8'),
(340, 'B3', 'HALL-8'),
(341, 'B4', 'HALL-8'),
(342, 'B5', 'HALL-8'),
(343, 'B6', 'HALL-8'),
(344, 'C1', 'HALL-8'),
(345, 'C2', 'HALL-8'),
(346, 'C3', 'HALL-8'),
(347, 'C4', 'HALL-8'),
(348, 'C5', 'HALL-8'),
(349, 'C6', 'HALL-8'),
(350, 'D1', 'HALL-8'),
(351, 'D2', 'HALL-8'),
(352, 'D3', 'HALL-8'),
(353, 'D4', 'HALL-8'),
(354, 'D5', 'HALL-8'),
(355, 'D6', 'HALL-8'),
(356, 'E1', 'HALL-8'),
(357, 'E2', 'HALL-8'),
(358, 'E3', 'HALL-8'),
(359, 'E4', 'HALL-8'),
(360, 'E5', 'HALL-8'),
(361, 'E6', 'HALL-8'),
(362, 'F1', 'HALL-8'),
(363, 'F2', 'HALL-8'),
(364, 'F3', 'HALL-8'),
(365, 'F4', 'HALL-8'),
(366, 'F5', 'HALL-8'),
(367, 'F6', 'HALL-8'),
(368, 'G1', 'HALL-8'),
(369, 'G2', 'HALL-8'),
(370, 'G3', 'HALL-8'),
(371, 'G4', 'HALL-8'),
(372, 'G5', 'HALL-8'),
(373, 'G6', 'HALL-8'),
(374, 'H1', 'HALL-8'),
(375, 'H2', 'HALL-8'),
(376, 'H3', 'HALL-8'),
(377, 'H4', 'HALL-8'),
(378, 'H5', 'HALL-8'),
(379, 'H6', 'HALL-8');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` bigint(20) NOT NULL,
  `hallNo` varchar(16) NOT NULL,
  `movieid` int(11) NOT NULL,
  `showtime_start` datetime DEFAULT NULL,
  `showtime_end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `hallNo`, `movieid`, `showtime_start`, `showtime_end`) VALUES
(4, 'HALL-1', 11, '2023-06-07 09:30:00', '2023-06-07 11:30:00'),
(5, 'HALL-1', 11, '2023-06-07 13:00:00', '2023-06-07 15:00:00'),
(6, 'HALL-1', 11, '2023-06-07 17:00:00', '2023-06-07 19:00:00'),
(7, 'HALL-1', 11, '2023-06-07 21:00:00', '2023-06-07 23:00:00'),
(8, 'HALL-2', 12, '2023-05-10 12:00:00', '2023-05-10 15:00:00'),
(9, 'HALL-2', 12, '2023-05-10 17:00:00', '2023-05-10 20:00:00'),
(10, 'HALL-3', 13, '2023-06-14 09:30:00', '2023-06-14 12:30:00'),
(11, 'HALL-3', 13, '2023-06-14 13:00:00', '2023-06-14 16:00:00'),
(12, 'HALL-3', 13, '2023-06-14 17:00:00', '2023-06-14 20:00:00'),
(13, 'HALL-3', 13, '2023-07-18 22:00:00', '2023-07-18 02:00:00'),
(20, 'HALL-4', 14, '2023-07-18 09:00:00', '2023-07-18 11:00:00'),
(21, 'HALL-4', 14, '2023-07-18 13:00:00', '2023-07-18 17:00:00'),
(22, 'HALL-4', 14, '2023-07-18 18:00:00', '2023-07-18 22:00:00'),
(23, 'HALL-4', 14, '2023-07-18 23:00:00', '2023-07-19 03:00:00'),
(25, 'HALL-5', 15, '2023-07-20 12:00:00', '2023-07-20 15:00:00'),
(27, 'HALL-6', 16, '2023-07-20 12:00:00', '2023-07-20 14:30:00'),
(29, 'HALL-7', 18, '2023-07-20 12:00:00', '2023-07-20 14:50:00'),
(34, 'HALL-8', 20, '2023-06-20 09:00:00', '2023-06-20 12:00:00'),
(35, 'HALL-8', 20, '2023-06-20 13:00:00', '2023-06-20 16:00:00'),
(36, 'HALL-8', 20, '2023-06-20 17:00:00', '2023-06-20 20:00:00'),
(37, 'HALL-8', 20, '2023-06-20 21:00:00', '2023-06-21 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `session_id` (`session_id`),
  ADD KEY `custid` (`custid`),
  ADD KEY `bookings_ibfk_3` (`hallNo`);

--
-- Indexes for table `clerk`
--
ALTER TABLE `clerk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hallNo`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoiceno`),
  ADD KEY `FK_custid` (`custid`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movieid`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seatid`),
  ADD KEY `FK_hallNo` (`hallNo`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `movieid` (`movieid`),
  ADD KEY `sessions_ibfk_1` (`hallNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=516;

--
-- AUTO_INCREMENT for table `clerk`
--
ALTER TABLE `clerk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoiceno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movieid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `seatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=380;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`session_id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`custid`) REFERENCES `customer` (`custid`),
  ADD CONSTRAINT `bookings_ibfk_3` FOREIGN KEY (`hallNo`) REFERENCES `hall` (`hallNo`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `FK_custid` FOREIGN KEY (`custid`) REFERENCES `customer` (`custid`);

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `FK_hallNo` FOREIGN KEY (`hallNo`) REFERENCES `hall` (`hallNo`);

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`hallNo`) REFERENCES `hall` (`hallNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sessions_ibfk_2` FOREIGN KEY (`movieid`) REFERENCES `movie` (`movieid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
