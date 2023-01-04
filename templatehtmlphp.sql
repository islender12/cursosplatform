-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para templatehtmlphp
CREATE DATABASE IF NOT EXISTS `templatehtmlphp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `templatehtmlphp`;

-- Volcando estructura para tabla templatehtmlphp.tm_lenguajes
CREATE TABLE IF NOT EXISTS `tm_lenguajes` (
  `lang_id` int NOT NULL AUTO_INCREMENT,
  `lang_nom` varchar(50) NOT NULL,
  `estado` int DEFAULT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla templatehtmlphp.tm_lenguajes: ~6 rows (aproximadamente)
INSERT INTO `tm_lenguajes` (`lang_id`, `lang_nom`, `estado`) VALUES
	(1, 'nodejs', 1),
	(2, 'php', 1),
	(3, 'angular', 1),
	(4, 'laravel', 1),
	(5, 'sql server', 1),
	(6, 'mysql', 1),
	(7, 'react', 1);

-- Volcando estructura para tabla templatehtmlphp.tm_socialmedia
CREATE TABLE IF NOT EXISTS `tm_socialmedia` (
  `sm_id` int NOT NULL AUTO_INCREMENT,
  `sm_nom` varchar(150) DEFAULT NULL,
  `sm_icon1` varchar(50) DEFAULT NULL,
  `sm_icon2` varchar(50) DEFAULT NULL,
  `sm_rutaweb` varchar(300) DEFAULT NULL,
  `estado` int DEFAULT NULL,
  PRIMARY KEY (`sm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla templatehtmlphp.tm_socialmedia: ~3 rows (aproximadamente)
INSERT INTO `tm_socialmedia` (`sm_id`, `sm_nom`, `sm_icon1`, `sm_icon2`, `sm_rutaweb`, `estado`) VALUES
	(1, 'facebook', 'fb', 'social_facebook', 'https://www.facebook.com', 1),
	(2, 'twitter', 'tw', 'social_twitter', '#', 1),
	(3, 'youtube', 'yt bg-danger', 'social_youtube', 'https://www.youtube.com', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
