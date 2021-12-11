-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para db_taller
CREATE DATABASE IF NOT EXISTS `db_taller` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_taller`;

-- Volcando estructura para tabla db_taller.areas_taller
CREATE TABLE IF NOT EXISTS `areas_taller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taller` int(11) NOT NULL,
  `nomber` varchar(50) NOT NULL DEFAULT '',
  `descripcion` varchar(100) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `tayer` (`taller`) USING BTREE,
  CONSTRAINT `FK_areas_operacion_tayer` FOREIGN KEY (`taller`) REFERENCES `taller` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Lugar dentro del tayer donde se ejecuta una sierta operacion. Ejemlpo Pintado, en la capilla...';

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.estados_operacion
CREATE TABLE IF NOT EXISTS `estados_operacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tayer` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `inactivo` int(11) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `tayer` (`tayer`),
  CONSTRAINT `FK_estados_operacion_tayer` FOREIGN KEY (`tayer`) REFERENCES `taller` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='describe el estad en que se encienta sierto trabajo o tarea q se realiza en el vehiculo';

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.estados_vehiculo
CREATE TABLE IF NOT EXISTS `estados_vehiculo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(50) NOT NULL,
  `descipcion` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.img_operacion
CREATE TABLE IF NOT EXISTS `img_operacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img1` int(11) NOT NULL,
  `img2` int(11) DEFAULT NULL,
  `img3` int(11) DEFAULT NULL,
  `img4` int(11) DEFAULT NULL,
  `img5` int(11) DEFAULT NULL,
  `img6` int(11) DEFAULT NULL,
  `img7` int(11) DEFAULT NULL,
  `img8` int(11) DEFAULT NULL,
  `img9` int(11) DEFAULT NULL,
  `img10` int(11) DEFAULT NULL,
  `img11` int(11) DEFAULT NULL,
  `img12` int(11) DEFAULT NULL,
  `img13` int(11) DEFAULT NULL,
  `img14` int(11) DEFAULT NULL,
  `img15` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.mecanicos
CREATE TABLE IF NOT EXISTS `mecanicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profecion` int(11) DEFAULT NULL,
  `nombre` int(11) NOT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `profecion` (`profecion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.operacion_vehiculo
CREATE TABLE IF NOT EXISTS `operacion_vehiculo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_operacion` int(11) DEFAULT NULL,
  `id_area` int(11) NOT NULL,
  `vehiculo` int(11) NOT NULL,
  `estado_operacion` int(11) NOT NULL,
  `mecanico` int(11) NOT NULL,
  `operacion` varchar(50) DEFAULT NULL,
  `descripcion` varchar(10000) DEFAULT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_terminado` date DEFAULT NULL,
  KEY `id` (`id`),
  KEY `vehiculo` (`vehiculo`),
  KEY `estado_operacion` (`estado_operacion`),
  KEY `imd_operacion` (`img_operacion`) USING BTREE,
  KEY `mecanico` (`mecanico`),
  KEY `id_area` (`id_area`),
  CONSTRAINT `FK_operacion_vehiculo_areas_operacion` FOREIGN KEY (`id_area`) REFERENCES `areas_taller` (`id`),
  CONSTRAINT `FK_operacion_vehiculo_estado_operacion` FOREIGN KEY (`estado_operacion`) REFERENCES `estados_operacion` (`id`),
  CONSTRAINT `FK_operacion_vehiculo_img_operacion` FOREIGN KEY (`img_operacion`) REFERENCES `img_operacion` (`id`),
  CONSTRAINT `FK_operacion_vehiculo_mecanico` FOREIGN KEY (`mecanico`) REFERENCES `mecanicos` (`id`),
  CONSTRAINT `FK_operacion_vehiculo_vehiculo` FOREIGN KEY (`vehiculo`) REFERENCES `vehiculos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.taller
CREATE TABLE IF NOT EXISTS `taller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `descripcion` varchar(100) DEFAULT '0',
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla db_taller.vehiculos
CREATE TABLE IF NOT EXISTS `vehiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado_vehiculo` int(11) NOT NULL,
  `color` int(11) DEFAULT NULL,
  `anno` varchar(50) DEFAULT NULL,
  `matricula` varchar(50) NOT NULL DEFAULT '',
  `combustion` varchar(50) NOT NULL DEFAULT '',
  `empresa` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `fecha_entrada` date DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `img_entrada` blob,
  `img_salida` blob,
  UNIQUE KEY `matricula` (`matricula`),
  KEY `id` (`id`),
  KEY `estado_vehiculo` (`estado_vehiculo`),
  CONSTRAINT `FK_vehiculo_estado_vehiculo` FOREIGN KEY (`estado_vehiculo`) REFERENCES `estados_vehiculo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
