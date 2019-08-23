SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `ambassador` (
  `id` varchar(40) NOT NULL,
  `name` varchar(255) NOT NULL,
  `college` varchar(10) NOT NULL,
  `webmail` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hash` varchar(50) NOT NULL,
  `active` INT( 1 ) NOT NULL DEFAULT '0',
  `refcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `users` (
  `id` varchar(40) NULL,
  `name` varchar(255) NOT NULL,
  `college` varchar(10) NOT NULL,
  `webmail` varchar(100) NOT NULL,
  `code` varchar(20) NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;