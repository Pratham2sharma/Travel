-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2025 at 05:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelwish`
--

-- --------------------------------------------------------

--
-- Table structure for table `beach`
--

CREATE TABLE `beach` (
  `beach_id` int(5) NOT NULL,
  `dest_name` varchar(150) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tip1` varchar(150) NOT NULL,
  `tip2` varchar(150) NOT NULL,
  `tip3` varchar(150) NOT NULL,
  `tip4` varchar(150) NOT NULL,
  `best_time` varchar(150) NOT NULL,
  `fileImg` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `states` varchar(50) NOT NULL,
  `budget` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(5) NOT NULL,
  `blog_title` varchar(150) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `fileImg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `place_id` int(5) NOT NULL,
  `dest_name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tip1` varchar(150) NOT NULL,
  `tip2` varchar(150) NOT NULL,
  `tip3` varchar(150) NOT NULL,
  `tip4` varchar(150) NOT NULL,
  `best_time` varchar(150) NOT NULL,
  `fileImg` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `states` varchar(50) NOT NULL,
  `budget` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`place_id`, `dest_name`, `description`, `tip1`, `tip2`, `tip3`, `tip4`, `best_time`, `fileImg`, `city`, `states`, `budget`) VALUES
(1, 'Mount Abu', 'sasdassad', 'asd', 'be secure', 'very cold', 'night cold', 'december to february', ' [\"6787d9836e853.jpg\",\"6787d9836eb93.jpeg\"]', 'mount abu', 'Rajasthan', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `hillstation`
--

CREATE TABLE `hillstation` (
  `hill_station_id` int(5) NOT NULL,
  `dest_name` varchar(150) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tip1` varchar(150) NOT NULL,
  `tip2` varchar(150) NOT NULL,
  `tip3` varchar(150) NOT NULL,
  `tip4` varchar(150) NOT NULL,
  `best_time` varchar(150) NOT NULL,
  `fileImg` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `states` varchar(50) NOT NULL,
  `budget` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mountain`
--

CREATE TABLE `mountain` (
  `mountain_id` int(5) NOT NULL,
  `dest_name` varchar(150) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tip1` varchar(150) NOT NULL,
  `tip2` varchar(150) NOT NULL,
  `tip3` varchar(150) NOT NULL,
  `tip4` varchar(150) NOT NULL,
  `best_time` varchar(150) NOT NULL,
  `fileImg` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `states` varchar(50) NOT NULL,
  `budget` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(5) NOT NULL,
  `movie_title` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `dest_1` varchar(150) NOT NULL,
  `description1` varchar(500) NOT NULL,
  `city1` varchar(50) NOT NULL,
  `states1` varchar(50) NOT NULL,
  `dest_2` varchar(150) NOT NULL,
  `description2` varchar(500) NOT NULL,
  `city2` varchar(50) NOT NULL,
  `states2` varchar(50) NOT NULL,
  `dest_3` varchar(150) NOT NULL,
  `description3` varchar(500) NOT NULL,
  `city3` varchar(50) NOT NULL,
  `states3` varchar(50) NOT NULL,
  `dest_4` varchar(150) NOT NULL,
  `description4` varchar(500) NOT NULL,
  `city4` varchar(50) NOT NULL,
  `states4` varchar(50) NOT NULL,
  `budget` varchar(10) NOT NULL,
  `fileImg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_title`, `description`, `dest_1`, `description1`, `city1`, `states1`, `dest_2`, `description2`, `city2`, `states2`, `dest_3`, `description3`, `city3`, `states3`, `dest_4`, `description4`, `city4`, `states4`, `budget`, `fileImg`) VALUES
(1, 'Go  Goa Gone', 'asdsdsads', 'goa 1', 'sasad', 'panji', 'goa', 'goa2', 'sasda', 'panji', 'goa', 'goa3', 'assad', 'panji', 'goa', 'goa 4', 'asdasad', 'panji', 'goa', '1500', '[\"6787de30be948.jpeg\",\"6787de30beb99.jpg\",\"6787de30becf5.jpeg\"]');

-- --------------------------------------------------------

--
-- Table structure for table `palace`
--

CREATE TABLE `palace` (
  `palace_id` int(5) NOT NULL,
  `dest_name` varchar(150) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tip1` varchar(150) NOT NULL,
  `tip2` varchar(150) NOT NULL,
  `tip3` varchar(150) NOT NULL,
  `tip4` varchar(150) NOT NULL,
  `best_time` varchar(150) NOT NULL,
  `fileImg` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `states` varchar(50) NOT NULL,
  `budget` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `user_id` int(5) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beach`
--
ALTER TABLE `beach`
  ADD PRIMARY KEY (`beach_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `hillstation`
--
ALTER TABLE `hillstation`
  ADD PRIMARY KEY (`hill_station_id`);

--
-- Indexes for table `mountain`
--
ALTER TABLE `mountain`
  ADD PRIMARY KEY (`mountain_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `palace`
--
ALTER TABLE `palace`
  ADD PRIMARY KEY (`palace_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beach`
--
ALTER TABLE `beach`
  MODIFY `beach_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `place_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hillstation`
--
ALTER TABLE `hillstation`
  MODIFY `hill_station_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mountain`
--
ALTER TABLE `mountain`
  MODIFY `mountain_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `palace`
--
ALTER TABLE `palace`
  MODIFY `palace_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
