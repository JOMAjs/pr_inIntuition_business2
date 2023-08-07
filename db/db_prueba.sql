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


-- Volcando estructura de base de datos para db_prueba
CREATE DATABASE IF NOT EXISTS `db_prueba` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_prueba`;

-- Volcando estructura para tabla db_prueba.mis_favoritos
CREATE TABLE IF NOT EXISTS `mis_favoritos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` varchar(50) DEFAULT NULL,
  `comida_favorita` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lugar_favorito` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `artista_favorito` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `color_favorito` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `imagen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla db_prueba.mis_favoritos: ~2 rows (aproximadamente)
DELETE FROM `mis_favoritos`;
INSERT INTO `mis_favoritos` (`id`, `usuario_id`, `comida_favorita`, `lugar_favorito`, `artista_favorito`, `color_favorito`, `imagen`) VALUES
	(1, 'd4e5312d093a71f2061da423d8efd5d9', 'bandeja paisabandeja paisa', 'malecon', 'mana', 'azul', 'avatar5.png'),
	(2, 'd3c994ccd5df48a08c4117d5256a53e9', 'espagetisespagetis', 'na', 'na', 'na', 'avatar2.png');

-- Volcando estructura para tabla db_prueba.registro
CREATE TABLE IF NOT EXISTS `registro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `token` varchar(100) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `sele_telefono` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `telefono` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pais` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `contrasena` varchar(90) DEFAULT NULL,
  `intentos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT NULL,
  `estado` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla db_prueba.registro: ~2 rows (aproximadamente)
DELETE FROM `registro`;
INSERT INTO `registro` (`id`, `token`, `nombre`, `apellido`, `sele_telefono`, `telefono`, `pais`, `email`, `contrasena`, `intentos`, `fecha`, `estado`) VALUES
	(1, 'd4e5312d093a71f2061da423d8efd5d9', 'dev', 'php', '+57', '436687', 'CO', 'php@gmail.com', '$2a$07$cursophpadsliveandrese7WY1WyNNBxAFyeMJnNiUAtvjJJuqLm6', '0', NULL, 1),
	(2, 'd3c994ccd5df48a08c4117d5256a53e9', 'bella', 'camalidades', '+57', '574', 'CO', 'bella@gmail.com', '$2a$07$cursophpadsliveandrese7WY1WyNNBxAFyeMJnNiUAtvjJJuqLm6', '0', NULL, 2);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
