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