-- Crear base de datos si no existe
CREATE DATABASE IF NOT EXISTS `login-php` CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `login-php`;

-- ========================================
-- Tabla de usuarios
-- ========================================
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL,
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT AUTO_INCREMENT=1 CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Insertar usuarios
-- ========================================
-- Pasos:
-- 1. Ejecutar php generar_hash.php en la línea de comandos en  la carpeta del proyecto
-- 2. Copiar los valores generados en esta sección
-- ========================================

-- ========================================
-- Tabla de álbumes
-- ========================================
DROP TABLE IF EXISTS `albums`;
CREATE TABLE `albums` (
    `idAlbum` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `titulo` VARCHAR(255) NOT NULL,
    `artista` VARCHAR(255) NOT NULL,
    `genero` VARCHAR(100) NOT NULL,
    `fecha_lanzamiento` DATE NOT NULL,
    `num_canciones` INT NOT NULL,
    `es_explicit` TINYINT(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT AUTO_INCREMENT=1 CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- Insertar 15 álbumes
INSERT INTO `albums` (`titulo`, `artista`, `genero`, `fecha_lanzamiento`, `num_canciones`, `es_explicit`) VALUES
('Senderos de traición', 'Héroes del Silencio', 'Rock', '1990-12-04', 12, 0),
('Estopa', 'Estopa', 'Rumba Rock', '1999-10-18', 12, 0),
('Agila', 'Extremoduro', 'Rock', '1996-02-23', 13, 0),
('La flaca', 'Jarabe de Palo', 'Pop Rock', '1996-03-03', 11, 0),
('El viaje de Copperpot', 'La Oreja de Van Gogh', 'Pop', '2000-09-11', 12, 0),
('Más', 'Alejandro Sanz', 'Pop', '1997-09-09', 10, 0),
('19 días y 500 noches', 'Joaquín Sabina', 'Rock', '1999-09-06', 13, 0),
('Lágrimas desordenadas', 'Melendi', 'Pop Rock', '2012-11-13', 11, 0),
('Estrella de mar', 'Amaral', 'Pop Rock', '2002-02-04', 12, 0),
('Ultrasónica', 'Los Piratas', 'Rock Alternativo', '2001-09-10', 13, 0),
('1999', 'Love of Lesbian', 'Indie Rock', '2009-03-24', 14, 0),
('Sin documentos', 'Los Rodríguez', 'Rock', '1993-05-21', 14, 0),
('Nuclear', 'Leiva', 'Rock', '2019-03-22', 12, 0),
('Cowboys de la A3', 'Arde Bogotá', 'Rock Alternativo', '2023-05-12', 12, 0),
('Arena en los bolsillos', 'Manolo García', 'Pop Rock', '1998-04-29', 14, 0);