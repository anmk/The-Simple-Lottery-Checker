 # $Id: lottery.sql, v 1.0
 # The Simple Lottery Checker
 # Copyright (c) 2014 Andrzej Kałowski
 # http://lotek.kalowski.com
 # Database: lottery

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

CREATE TABLE IF NOT EXISTS `numbers` (
  `number_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `number_name` varchar(50) NOT NULL,
  `n1` int(11) NOT NULL,
  `n2` int(11) NOT NULL,
  `n3` int(11) NOT NULL,
  `n4` int(11) NOT NULL,
  `n5` int(11) NOT NULL,
  `n6` int(11) NOT NULL,
  PRIMARY KEY (`number_id`)
) ENGINE=InnoDB ;

CREATE TABLE IF NOT EXISTS `numbers_to_users` (
  `number_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`number_id`, `user_id`)
) ENGINE=InnoDB ;

