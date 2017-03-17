-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mar 17, 2017 alle 22:17
-- Versione del server: 5.7.14
-- Versione PHP: 5.6.25

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
-- Struttura della tabella `city`
--

CREATE TABLE `city` (
  `id` int(4) NOT NULL,
  `name` varchar(12) NOT NULL,
  `id_country` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `city`
--

INSERT INTO `city` (`id`, `name`, `id_country`) VALUES
(1, 'Lima', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `country`
--

CREATE TABLE `country` (
  `id` int(3) NOT NULL,
  `name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Peru');

-- --------------------------------------------------------

--
-- Struttura della tabella `courses`
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

-- --------------------------------------------------------

--
-- Struttura della tabella `course_categories`
--

CREATE TABLE `course_categories` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `course_categories`
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
-- Struttura della tabella `has_category`
--

CREATE TABLE `has_category` (
  `id` int(5) NOT NULL,
  `id_course` int(11) NOT NULL,
  `id_category` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `subscription`
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
-- Struttura della tabella `subscription_type`
--

CREATE TABLE `subscription_type` (
  `id` int(1) NOT NULL,
  `name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
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
  `phone_num` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `username`, `type`, `age`, `email`, `address`, `password`, `id_city`, `description`, `phone_num`) VALUES
(2, 'Milica', 'Jovanovic', 'milica', 0, 25, 'kikice010@gmail.com', 'Via San Vittore 34', '$2y$10$mb0.fA8.fqeO6tfQ7pm3Je1ZdDGu55Um1R8cMd.p8l4WQyhSfaCSC', 1, 'rege', '55555555');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `id_country` (`id_country`);

--
-- Indici per le tabelle `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indici per le tabelle `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_city` (`id_city`,`id_trainer`),
  ADD KEY `id_trainer` (`id_trainer`);

--
-- Indici per le tabelle `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indici per le tabelle `has_category`
--
ALTER TABLE `has_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_course` (`id_course`,`id_category`),
  ADD KEY `id_category` (`id_category`);

--
-- Indici per le tabelle `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`,`id_course`),
  ADD KEY `id_course` (`id_course`),
  ADD KEY `type_subscription` (`type_subscription`);

--
-- Indici per le tabelle `subscription_type`
--
ALTER TABLE `subscription_type`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`),
  ADD KEY `id_city` (`id_city`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `city`
--
ALTER TABLE `city`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la tabella `country`
--
ALTER TABLE `country`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT per la tabella `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT per la tabella `has_category`
--
ALTER TABLE `has_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `subscription_type`
--
ALTER TABLE `subscription_type`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`id_country`) REFERENCES `country` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id_trainer`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`id_city`) REFERENCES `city` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limiti per la tabella `has_category`
--
ALTER TABLE `has_category`
  ADD CONSTRAINT `has_category_ibfk_1` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `has_category_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `course_categories` (`id`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `subscription_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `subscription_type`
--
ALTER TABLE `subscription_type`
  ADD CONSTRAINT `subscription_type_ibfk_1` FOREIGN KEY (`id`) REFERENCES `subscription` (`type_subscription`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_city`) REFERENCES `city` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
