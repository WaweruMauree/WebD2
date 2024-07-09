DROP DATABASE IF EXISTS `website1`;
CREATE DATABASE IF NOT EXISTS `website1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `website1`;



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users`(
`Name` varchar(50) NOT NULL,
`Phone_No.` tinyint(10) NOT NULL,
`Email` varchar(50) NOT NULL,
`Message` varchar(1000) NOT NULL,
PRIMARY KEY (`Name`),
UNIQUE KEY (`Phone_No.`)
);

SELECT * FROM `users`;