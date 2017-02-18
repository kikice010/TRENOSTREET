-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Feb 18, 2017 alle 09:57
-- Versione del server: 5.5.49-0ubuntu0.14.04.1
-- Versione PHP: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trenostreet`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(12) NOT NULL,
  `id_country` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `id_country` (`id_country`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_city` int(4) DEFAULT NULL,
  `id_trainer` int(11) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `price_monthly` float NOT NULL DEFAULT '0',
  `price_weekly` float NOT NULL DEFAULT '0',
  `price_yearly` float NOT NULL DEFAULT '0',
  `price_hour` float NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_city` (`id_city`,`id_trainer`),
  KEY `id_trainer` (`id_trainer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `course_categories`
--

CREATE TABLE IF NOT EXISTS `course_categories` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `has_category`
--

CREATE TABLE IF NOT EXISTS `has_category` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_course` int(11) NOT NULL,
  `id_category` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_course` (`id_course`,`id_category`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `subscription`
--

CREATE TABLE IF NOT EXISTS `subscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `type_subscription` int(1) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`,`id_course`),
  KEY `id_course` (`id_course`),
  KEY `type_subscription` (`type_subscription`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `subscription_type`
--

CREATE TABLE IF NOT EXISTS `subscription_type` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `type` int(1) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_city` int(4) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `phone_num` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`),
  KEY `id_city` (`id_city`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`id_city`) REFERENCES `city` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id_trainer`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limiti per la tabella `has_category`
--
ALTER TABLE `has_category`
  ADD CONSTRAINT `has_category_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `course_categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `has_category_ibfk_1` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id`) ON UPDATE CASCADE;

--
-- Limiti per la tabella `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `courses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

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
