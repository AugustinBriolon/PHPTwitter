-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 27 Avril 2014 à 02:06
-- Version du serveur: 5.5.25
-- Version de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données: `IIM_twitter`
--

-- --------------------------------------------------------

--
-- Structure de la table `tweets`
--

CREATE TABLE `tweets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT 'refers to id in users table',
  `message` varchar(140) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `tweets`
--

INSERT INTO `tweets` (`id`, `user_id`, `message`, `created_at`) VALUES
(1, 2, 'I was having troubles with session variables working in some environments', '2014-04-20 21:14:52'),
(2, 2, ' It works properly when I used $_SESSION as pointers to arrays', '2014-04-21 21:14:52'),
(3, 2, 'The solution is to do this after each time you do a', '2014-04-22 21:14:52'),
(4, 2, 'I wrote a little page for controlling/manipulating the session', '2014-04-23 21:14:52'),
(5, 2, 'Obviously, never use this on a production server, but I use it on my localhost to assist me', '2014-04-24 21:14:52'),
(6, 2, 'Vive les poneys !', '2014-04-26 23:51:29'),
(7, 2, 'Retweetez please !', '2014-04-26 23:51:29'),
(8, 2, 'Une bicyclette est un véhicule terrestre, entrant dans la catégorie des cycles, composé de deux roues alignées (d''où le nom « bicyclette »)', '2014-04-26 23:51:29'),
(9, 2, 'Tweeter c''est coooooool', '2014-04-26 22:24:09'),
(10, 2, 'J''adore tweeter', '2014-04-26 22:24:10');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL COMMENT 'encrypted passwords are better',
  `picture` varchar(255) NOT NULL COMMENT 'name of profile picture',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `picture`, `created_at`) VALUES
(2, 'alexandre', 'alexandre.tobia@gmail.com', '1234', 'profile-pic-2.jpg', '2014-04-26 19:58:46');
