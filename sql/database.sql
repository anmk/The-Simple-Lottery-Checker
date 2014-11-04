 # $Id: lottery.sql, v 1.0
 # The Simple Lottery Checker
 # Copyright (c) 2014 Andrzej Kałowski
 # http://lotek.kalowski.com
 # Database: lottery.sql

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

