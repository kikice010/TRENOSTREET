-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 09:05 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trenostreet`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(4) NOT NULL,
  `name` varchar(12) NOT NULL,
  `id_country` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `id_country`) VALUES
(1, 'Lima', 1),
(2, 'Cusco', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(3) NOT NULL,
  `name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Peru');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `id_city` int(4) DEFAULT NULL,
  `id_trainer` int(11) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `price_monthly` float NOT NULL DEFAULT '0',
  `price_weekly` float NOT NULL DEFAULT '0',
  `price_yearly` float NOT NULL DEFAULT '0',
  `price_hour` float NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `id_city`, `id_trainer`, `description`, `price_monthly`, `price_weekly`, `price_yearly`, `price_hour`, `name`, `address`) VALUES
(46, 1, 5, 'Relaxing yoga in park', 300, 50, 1000, 10, 'Bikrams Yoga', 'Via Lima 5'),
(47, 1, 5, 'Relaxing yoga in park', 300, 50, 1000, 10, 'Bikrams Yoga', 'Via Lima 5'),
(48, 1, 5, 'Relaxing yoga in park', 300, 50, 1000, 10, 'Bikrams Yoga', 'Via Lima 5'),
(49, 1, 5, 'sy', 44, 4, 3344, 4, 'Bikrams Yoga', 'syz'),
(50, 1, 6, 'gdsads', 23, 6, 122, 2, 'Bikrams Yoga', 'hgsfd');

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `name`) VALUES
(1, 'Cardio'),
(6, 'Circuit Traning'),
(3, 'Dance'),
(8, 'Flexibility'),
(4, 'Martial Arts'),
(5, 'Pilates'),
(7, 'Strenght'),
(9, 'Strike combat'),
(10, 'Swimming'),
(2, 'Yoga');

-- --------------------------------------------------------

--
-- Table structure for table `has_category`
--

CREATE TABLE `has_category` (
  `id` int(5) NOT NULL,
  `id_course` int(11) NOT NULL,
  `id_category` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `has_category`
--

INSERT INTO `has_category` (`id`, `id_course`, `id_category`) VALUES
(7, 48, 1),
(8, 49, 1),
(9, 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `type_subscription` int(1) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_type`
--

CREATE TABLE `subscription_type` (
  `id` int(1) NOT NULL,
  `name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `type` int(1) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_city` int(4) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `phone_num` varchar(20) NOT NULL,
  `sex` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `username`, `type`, `age`, `email`, `address`, `password`, `id_city`, `description`, `phone_num`, `sex`) VALUES
(2, 'Milica', 'Jovanovic', 'milica', 0, 25, 'kikice010@gmail.com', 'Via San Vittore 34', '$2y$10$mb0.fA8.fqeO6tfQ7pm3Je1ZdDGu55Um1R8cMd.p8l4WQyhSfaCSC', 1, 'rege', '55555555', NULL),
(3, 'Danilo', 'Mladenovic', 'niloda88', 1, 29, 'niloda88@gmail.com', 'Via San Vittore 34', '$2y$10$k/fP1zJRstZ/3tDjNMLZM.0ABrraY3dVREGq3NwuUpkIDYghIAjye', 2, 'Baja do jaja', '55555555', NULL),
(4, 'Renzo', 'Cabrejos', 'renzo', 1, 25, 'renzo@gmail.com', 'Via San Vittore 34', '$2y$10$EfcgcMAnJDP.CfRbqOanV.zam3n5vf7tSDhFFAsvUxDVxvnO6OUke', 1, 'Weight lifting instructor', '55555555', NULL),
(5, 'Milica', 'Jovanovic', 'm', 1, 25, 'm@m.m', 'Via San Vittore 34', '$2y$10$CXemxI33Ka0GTh6/7TM1TumdyV13fVyWCl8FuilKhBhX7LmtRKKnS', 1, 'dsa', '55555555', NULL),
(6, 'Milica', 'Jovanovic', 'milica25', 1, 25, 'milica@milica.milica', 'Via Via 5', '$2y$10$e.ldaPgrkBKd34Yv70GJpeA69JD4Pt9BPdjXWiMTCH.e8QtbrwzZe', 1, 'Special girl :P', '333333', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`) VALUES
(1, 'Trainer'),
(2, 'Trainee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `id_country` (`id_country`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_trainer` (`id_trainer`),
  ADD KEY `id_city` (`id_city`,`id_trainer`) USING BTREE;

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `has_category`
--
ALTER TABLE `has_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_course` (`id_course`,`id_category`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`,`id_course`),
  ADD KEY `id_course` (`id_course`),
  ADD KEY `type_subscription` (`type_subscription`);

--
-- Indexes for table `subscription_type`
--
ALTER TABLE `subscription_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`),
  ADD KEY `id_city` (`id_city`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `has_category`
--
ALTER TABLE `has_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subscription_type`
--
ALTER TABLE `subscription_type`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`id_country`) REFERENCES `country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id_trainer`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`id_city`) REFERENCES `city` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `has_category`
--
ALTER TABLE `has_category`
  ADD CONSTRAINT `has_category_ibfk_1` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `has_category_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `course_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `subscription_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `subscription_type`
--
ALTER TABLE `subscription_type`
  ADD CONSTRAINT `subscription_type_ibfk_1` FOREIGN KEY (`id`) REFERENCES `subscription` (`type_subscription`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_city`) REFERENCES `city` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
