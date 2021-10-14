-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 06:03 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `name` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`name`, `id`, `country`, `price`) VALUES
('Vincent Gogh', 121212, 'Dutch', 4005),
('Claude Monet', 989898, 'France', 2374),
('August Renoir', 343434, 'France', 4546),
('Lionardo Vinci', 343332, 'Italy', 5775),
('zainul abedin', 575785, 'Bangladesh', 3242),
('Rembrandt', 454643, 'Dutch', 3244),
('Raphael', 565433, 'Italy', 2424),
('Michelangelo', 256678, 'Italy', 3423),
('Pablo Picasso', 363663, 'Spain', 7857),
('Andy Warhol', 676677, 'America', 5356),
('Johannes Vermeer', 344667, 'Dutch', 4997),
('Jackson Pollock', 565570, 'American', 2330),
('Salvador Dali', 656788, 'Spain', 3467),
('Frida Kahlo', 233456, 'Mexico', 1323),
('Edvard Munch', 143455, 'Norway', 1431),
('Gustav Klimt', 221345, 'Austria', 8562),
('Henri Matisse', 563222, 'France', 4690),
('Paul Cezanne', 456465, 'France', 3660),
('Caravaggio', 554477, 'Italy', 5645),
('Edgar Degas', 675776, 'France', 4546);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Money` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `Username`, `Password`, `Money`) VALUES
(1, 'khalid', 'khalid1', 0),
(2, 'khde', 'dfv', 0),
(3, 'kkkk', 'llll', 0),
(4, 'khalid1', '2222', 567),
(5, 'khali44', '11', 5674),
(6, 'jjj', '1', 456457),
(7, 'rafael', 'avb123', 400),
(8, 'khalidty', '888888', 6798),
(9, 'iftikhar', '909090', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
