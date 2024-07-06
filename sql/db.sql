DROP DATABASE IF EXISTS `website1`;
CREATE DATABASE IF NOT EXISTS `website1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `website1`;



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



DROP TABLE IF EXISTS `regions`;
CREATE TABLE IF NOT EXISTS `regions`(
`County` varchar(50) NOT NULL,
`Reach` bigint(20) NOT NULL,
`Supervisor` varchar(50) NOT NULL,
`Email` varchar(50) NOT NULL,
`Phone` int(10) NOT NULL,
PRIMARY KEY (`County`),
UNIQUE KEY (`Supervisor`)
);

INSERT INTO `regions`(`County`,`Reach`,`Supervisor`,`Email`,`Phone`)
VALUES('Turkana','10000','Mr.Nick Macharia','nickmacharia@gmail.com','0723467895'),
('Kisumu','5000','Dr.Angel Kibet','angelkibet@gmail.com','0734567234'),
('Narok','13050','Rev.William Kimani','wkimani@gmail.com','0712546798'),
('Kakamega','14000','Mrs.Julia Kathingu','juliakat@gmail.com','0789567356'),
('Kiambu','1200','Mr.Henry Kiarie','hkiarie@gmail.com','0798563423');

SELECT * FROM `regions`;