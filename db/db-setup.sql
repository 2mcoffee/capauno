-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2022 a las 17:43:14
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `capauno`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_colegio_nombre` ()  BEGIN

UPDATE cu_intra_colegio
SET Nombre = REPLACE(Nombre,'"','')
WHERE Nombre like '%"%';

UPDATE cu_intra_colegio
SET Nombre = REPLACE(Nombre,'''',' ')
WHERE Nombre like '%''%';

UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Š','S');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'š','s');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ð','Dj');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ž','Z');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ž','z');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'À','A');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Á','A');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Â','A');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ã','A');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ä','A');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Å','A');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Æ','A');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ç','C');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'È','E');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'É','E');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ê','E');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ë','E');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ì','I');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Í','I');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Î','I');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ï','I');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ò','O');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ó','O');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ô','O');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Õ','O');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ö','O');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ø','O');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ù','U');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ú','U');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Û','U');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ü','U');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ý','Y');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Þ','B');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ß','Ss');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'à','a');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'á','a');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'â','a');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ã','a');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ä','a');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'å','a');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'æ','a');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ç','c');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'è','e');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'é','e');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ê','e');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ë','e');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ì','i');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'í','i');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'î','i');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ï','i');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ð','o');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ò','o');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ó','o');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ô','o');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'õ','o');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ö','o');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ø','o');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ù','u');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ú','u');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'û','u');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ý','y');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ý','y');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'þ','b');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ÿ','y');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ƒ','f');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ě','e');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ž','z');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'š','s');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'č','c');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ř','r');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ď','d');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ť','t');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'ů','u');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ě','E');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ž','Z');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Š','S');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Č','C');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ř','R');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ď','D');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ť','T');
UPDATE cu_intra_colegio SET Nombre = REPLACE(Nombre,'Ů','U');

UPDATE cu_intra_colegio
SET Nombre = UPPER(Nombre), Turno =  UPPER(Turno), Grado = UPPER(Grado), Motivo =  UPPER(Motivo);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_cursos_nombre` ()  BEGIN

UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Š','S');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'š','s');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ð','Dj');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ž','Z');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ž','z');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'À','A');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Á','A');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Â','A');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ã','A');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ä','A');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Å','A');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Æ','A');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ç','C');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'È','E');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'É','E');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ê','E');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ë','E');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ì','I');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Í','I');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Î','I');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ï','I');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ò','O');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ó','O');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ô','O');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Õ','O');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ö','O');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ø','O');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ù','U');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ú','U');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Û','U');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ü','U');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ý','Y');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Þ','B');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ß','Ss');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'à','a');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'á','a');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'â','a');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ã','a');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ä','a');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'å','a');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'æ','a');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ç','c');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'è','e');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'é','e');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ê','e');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ë','e');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ì','i');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'í','i');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'î','i');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ï','i');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ð','o');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ò','o');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ó','o');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ô','o');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'õ','o');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ö','o');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ø','o');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ù','u');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ú','u');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'û','u');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ý','y');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ý','y');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'þ','b');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ÿ','y');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ƒ','f');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ě','e');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ž','z');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'š','s');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'č','c');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ř','r');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ď','d');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ť','t');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'ů','u');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ě','E');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ž','Z');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Š','S');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Č','C');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ř','R');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ď','D');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ť','T');
UPDATE cu_intra_cursos SET Nombre = REPLACE(Nombre,'Ů','U');

UPDATE cu_intra_cursos SET Nombre = UPPER(Nombre);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_empleos_nombre` ()  BEGIN

UPDATE cu_intra_empleos
SET Nombre = REPLACE(Nombre,'"','')
WHERE Nombre like '%"%';

UPDATE cu_intra_empleos
SET Nombre = REPLACE(Nombre,'''',' ')
WHERE Nombre like '%''%';

UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Š','S');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'š','s');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ð','Dj');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ž','Z');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ž','z');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'À','A');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Á','A');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Â','A');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ã','A');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ä','A');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Å','A');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Æ','A');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ç','C');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'È','E');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'É','E');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ê','E');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ë','E');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ì','I');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Í','I');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Î','I');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ï','I');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ò','O');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ó','O');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ô','O');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Õ','O');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ö','O');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ø','O');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ù','U');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ú','U');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Û','U');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ü','U');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ý','Y');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Þ','B');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ß','Ss');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'à','a');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'á','a');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'â','a');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ã','a');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ä','a');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'å','a');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'æ','a');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ç','c');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'è','e');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'é','e');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ê','e');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ë','e');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ì','i');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'í','i');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'î','i');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ï','i');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ð','o');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ò','o');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ó','o');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ô','o');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'õ','o');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ö','o');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ø','o');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ù','u');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ú','u');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'û','u');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ý','y');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ý','y');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'þ','b');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ÿ','y');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ƒ','f');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ě','e');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ž','z');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'š','s');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'č','c');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ř','r');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ď','d');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ť','t');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'ů','u');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ě','E');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ž','Z');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Š','S');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Č','C');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ř','R');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ď','D');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ť','T');
UPDATE cu_intra_empleos SET Nombre = REPLACE(Nombre,'Ů','U');

UPDATE cu_intra_empleos SET Nombre = UPPER(Nombre);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_internos_nombre` ()  BEGIN

UPDATE cu_intra_internos
SET Nombre = REPLACE(Nombre,'"','')
WHERE Nombre like '%"%';

UPDATE cu_intra_internos
SET Nombre = REPLACE(Nombre,'''',' ')
WHERE Nombre like '%''%';

UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Š','S');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'š','s');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ð','Dj');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ž','Z');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ž','z');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'À','A');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Á','A');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Â','A');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ã','A');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ä','A');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Å','A');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Æ','A');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ç','C');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'È','E');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'É','E');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ê','E');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ë','E');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ì','I');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Í','I');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Î','I');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ï','I');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ò','O');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ó','O');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ô','O');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Õ','O');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ö','O');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ø','O');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ù','U');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ú','U');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Û','U');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ü','U');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ý','Y');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Þ','B');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ß','Ss');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'à','a');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'á','a');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'â','a');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ã','a');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ä','a');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'å','a');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'æ','a');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ç','c');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'è','e');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'é','e');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ê','e');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ë','e');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ì','i');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'í','i');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'î','i');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ï','i');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ð','o');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ò','o');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ó','o');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ô','o');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'õ','o');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ö','o');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ø','o');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ù','u');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ú','u');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'û','u');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ý','y');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ý','y');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'þ','b');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ÿ','y');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ƒ','f');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ě','e');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ž','z');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'š','s');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'č','c');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ř','r');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ď','d');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ť','t');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'ů','u');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ě','E');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ž','Z');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Š','S');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Č','C');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ř','R');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ď','D');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ť','T');
UPDATE cu_intra_internos SET Nombre = REPLACE(Nombre,'Ů','U');

UPDATE cu_intra_internos SET Nombre = UPPER(Nombre);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_talleres_nombre` ()  BEGIN

UPDATE cu_intra_talleres
SET Nombre = REPLACE(Nombre,'"','')
WHERE Nombre like '%"%';

UPDATE cu_intra_talleres
SET Nombre = REPLACE(Nombre,'''',' ')
WHERE Nombre like '%''%';

UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Š','S');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'š','s');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ð','Dj');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ž','Z');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ž','z');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'À','A');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Á','A');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Â','A');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ã','A');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ä','A');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Å','A');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Æ','A');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ç','C');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'È','E');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'É','E');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ê','E');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ë','E');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ì','I');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Í','I');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Î','I');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ï','I');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ò','O');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ó','O');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ô','O');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Õ','O');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ö','O');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ø','O');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ù','U');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ú','U');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Û','U');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ü','U');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ý','Y');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Þ','B');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ß','Ss');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'à','a');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'á','a');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'â','a');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ã','a');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ä','a');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'å','a');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'æ','a');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ç','c');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'è','e');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'é','e');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ê','e');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ë','e');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ì','i');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'í','i');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'î','i');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ï','i');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ð','o');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ò','o');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ó','o');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ô','o');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'õ','o');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ö','o');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ø','o');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ù','u');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ú','u');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'û','u');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ý','y');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ý','y');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'þ','b');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ÿ','y');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ƒ','f');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ě','e');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ž','z');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'š','s');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'č','c');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ř','r');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ď','d');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ť','t');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'ů','u');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ě','E');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ž','Z');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Š','S');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Č','C');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ř','R');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ď','D');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ť','T');
UPDATE cu_intra_talleres SET Nombre = REPLACE(Nombre,'Ů','U');

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_universidad_nombre` ()  BEGIN

UPDATE cu_intra_universidad
SET Nombre = REPLACE(Nombre,'"','')
WHERE Nombre like '%"%';

UPDATE cu_intra_universidad
SET Nombre = REPLACE(Nombre,'''',' ')
WHERE Nombre like '%''%';

UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Š','S');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'š','s');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ð','Dj');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ž','Z');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ž','z');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'À','A');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Á','A');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Â','A');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ã','A');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ä','A');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Å','A');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Æ','A');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ç','C');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'È','E');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'É','E');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ê','E');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ë','E');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ì','I');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Í','I');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Î','I');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ï','I');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ò','O');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ó','O');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ô','O');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Õ','O');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ö','O');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ø','O');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ù','U');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ú','U');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Û','U');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ü','U');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ý','Y');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Þ','B');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ß','Ss');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'à','a');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'á','a');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'â','a');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ã','a');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ä','a');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'å','a');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'æ','a');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ç','c');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'è','e');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'é','e');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ê','e');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ë','e');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ì','i');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'í','i');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'î','i');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ï','i');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ð','o');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ò','o');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ó','o');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ô','o');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'õ','o');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ö','o');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ø','o');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ù','u');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ú','u');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'û','u');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ý','y');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ý','y');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'þ','b');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ÿ','y');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ƒ','f');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ě','e');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ž','z');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'š','s');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'č','c');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ř','r');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ď','d');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ť','t');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'ů','u');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ě','E');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ž','Z');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Š','S');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Č','C');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ř','R');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ď','D');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ť','T');
UPDATE cu_intra_universidad SET Nombre = REPLACE(Nombre,'Ů','U');

UPDATE cu_intra_universidad
SET Nombre = UPPER(Nombre), Carrera = UPPER(Carrera), Motivo =  UPPER(Motivo);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_actualizaciones`
--

CREATE TABLE `cu_actualizaciones` (
  `Id` int(11) NOT NULL,
  `Modulo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Version` int(11) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_cursos`
--

CREATE TABLE `cu_cursos` (
  `Id` int(11) NOT NULL,
  `Curso` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Categoria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Presencial` bit(1) NOT NULL DEFAULT b'0',
  `Formal` bit(1) NOT NULL DEFAULT b'0',
  `Inicio` date NOT NULL,
  `Fin` date DEFAULT NULL,
  `Docente` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cupos` int(11) NOT NULL DEFAULT '0',
  `Vacantes` int(11) NOT NULL DEFAULT '0',
  `Interno` bit(1) NOT NULL DEFAULT b'0',
  `Habilitado` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_inscripciones`
--

CREATE TABLE `cu_inscripciones` (
  `Id` int(11) NOT NULL,
  `Legajo` int(11) DEFAULT NULL,
  `Nombre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DNI` bigint(20) DEFAULT NULL,
  `Nacimiento` date NOT NULL,
  `Email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdPabellon` int(11) NOT NULL,
  `Trabajo` int(11) NOT NULL,
  `Estudio` int(11) NOT NULL,
  `IdCurso` int(11) NOT NULL,
  `Ciclo` int(11) NOT NULL,
  `Codigo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Elegido` bit(1) NOT NULL DEFAULT b'0',
  `Registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_intra_busquedacursos`
--

CREATE TABLE `cu_intra_busquedacursos` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_intra_busquedaempleos`
--

CREATE TABLE `cu_intra_busquedaempleos` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_intra_busquedaestudios`
--

CREATE TABLE `cu_intra_busquedaestudios` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_intra_busquedatalleres`
--

CREATE TABLE `cu_intra_busquedatalleres` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_intra_colegio`
--

CREATE TABLE `cu_intra_colegio` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdNivelEducativo` int(11) NOT NULL,
  `Turno` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Grado` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Inicio` date DEFAULT NULL,
  `Fin` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Motivo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Activo` bit(1) NOT NULL,
  `Creado` datetime NOT NULL,
  `Modificado` datetime DEFAULT NULL,
  `Desactivado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_intra_cursos`
--

CREATE TABLE `cu_intra_cursos` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Unidad` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Curso` varchar(110) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Categoria` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tipo` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Entidad` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Motivo` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Inicio` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fin` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estado` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ciclo` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_intra_empleos`
--

CREATE TABLE `cu_intra_empleos` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Empleo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dispuso` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Solicito` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Motivo` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Alta` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_intra_internos`
--

CREATE TABLE `cu_intra_internos` (
  `Id` int(11) NOT NULL,
  `Legajo` int(11) DEFAULT NULL,
  `Ficha` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nombre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alias` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pabellon` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Peligrosidad` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Conducta` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Visita` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Trabajo` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Area` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ingreso` date DEFAULT NULL,
  `Origen` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nacimiento` date DEFAULT NULL,
  `LugarNacimiento` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estudios` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Oficio` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Domicilio` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ciudad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nacionalidad` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Relacion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EstadoCivil` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Esposa` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Padre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Madre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Departamental` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Juzgado` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Causa` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Caratula` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Lugar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Participes` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Situacion` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Condena` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Reincidencia` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_intra_niveleseducativos`
--

CREATE TABLE `cu_intra_niveleseducativos` (
  `Id` int(11) NOT NULL,
  `Nivel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Activo` bit(1) NOT NULL DEFAULT b'1',
  `Creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cu_intra_niveleseducativos`
--

INSERT INTO `cu_intra_niveleseducativos` (`Id`, `Nivel`, `Activo`, `Creado`) VALUES
(1, 'PRIMARIO', b'1', '2022-06-14 15:19:32'),
(2, 'SECUNDARIO', b'1', '2022-06-14 15:19:32'),
(3, 'INDUSTRIAL', b'1', '2022-06-14 15:19:56'),
(4, 'UNIVERSITARIO', b'1', '2022-06-14 15:20:09'),
(5, 'TERCIARIO', b'1', '2022-07-21 14:59:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_intra_talleres`
--

CREATE TABLE `cu_intra_talleres` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Taller` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Inicio` date DEFAULT NULL,
  `Fin` date DEFAULT NULL,
  `Motivo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Entidad` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estado` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_intra_terciario`
--

CREATE TABLE `cu_intra_terciario` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdNivelEducativo` int(11) NOT NULL,
  `Carrera` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ciclo` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Inicio` date DEFAULT NULL,
  `Fin` date DEFAULT NULL,
  `Motivo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Activo` bit(1) NOT NULL,
  `Creado` datetime NOT NULL,
  `Modificado` datetime DEFAULT NULL,
  `Desactivado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_intra_universidad`
--

CREATE TABLE `cu_intra_universidad` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdNivelEducativo` int(11) NOT NULL,
  `Carrera` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Inicio` date DEFAULT NULL,
  `Fin` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Motivo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Activo` bit(1) NOT NULL,
  `Creado` datetime NOT NULL,
  `Modificado` datetime DEFAULT NULL,
  `Desactivado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_logins`
--

CREATE TABLE `cu_logins` (
  `Id` int(11) NOT NULL,
  `Usuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Clave` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdRol` int(11) NOT NULL DEFAULT '2',
  `Activo` bit(1) NOT NULL DEFAULT b'0',
  `Tema` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_pabellones`
--

CREATE TABLE `cu_pabellones` (
  `Id` int(11) NOT NULL,
  `IdUnidad` int(11) NOT NULL,
  `Pabellon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cu_pabellones`
--

INSERT INTO `cu_pabellones` (`Id`, `IdUnidad`, `Pabellon`, `Activo`) VALUES
(1, 1, 'PB-1', b'1'),
(2, 1, 'PB-2', b'0'),
(3, 1, 'PB-3', b'1'),
(4, 1, 'PB-4', b'1'),
(5, 1, 'PB-5', b'1'),
(6, 1, 'PB-6', b'1'),
(7, 1, 'PB-7', b'1'),
(8, 1, 'PB-8', b'1'),
(9, 1, 'PB-9', b'0'),
(10, 1, 'PB-10', b'1'),
(11, 1, 'PB-11', b'1'),
(12, 1, 'PB-12', b'1'),
(13, 1, '1-1', b'1'),
(14, 1, '1-2', b'1'),
(15, 1, '1-3', b'1'),
(16, 1, '1-4', b'1'),
(17, 1, '1-5', b'1'),
(18, 1, '1-6', b'1'),
(19, 1, '1-7', b'1'),
(20, 1, '1-8', b'1'),
(21, 1, '1-9', b'1'),
(22, 1, '1-10', b'1'),
(23, 1, '1-11', b'1'),
(24, 1, '1-12', b'1'),
(25, 1, '2-1', b'1'),
(26, 1, '2-2', b'1'),
(27, 1, '2-3', b'1'),
(28, 1, '2-4', b'1'),
(29, 1, '2-5', b'1'),
(30, 1, '2-6', b'1'),
(31, 1, '2-7', b'1'),
(32, 1, '2-8', b'1'),
(33, 1, '2-9', b'1'),
(34, 1, '2-10', b'1'),
(35, 1, '2-11', b'1'),
(36, 1, '2-12', b'1'),
(37, 1, '3-1', b'1'),
(38, 1, '3-2', b'1'),
(39, 1, '3-3', b'1'),
(40, 1, '3-4', b'1'),
(41, 1, '3-5', b'1'),
(42, 1, '3-6', b'1'),
(43, 1, '3-7', b'1'),
(44, 1, '3-8', b'1'),
(45, 1, '3-9', b'1'),
(46, 1, '3-10', b'1'),
(47, 1, '3-11', b'1'),
(48, 1, '3-12', b'1'),
(49, 1, '4-1', b'1'),
(50, 1, '4-2', b'1'),
(51, 1, '4-3', b'1'),
(52, 1, '4-4', b'1'),
(53, 1, '4-5', b'1'),
(54, 1, '4-6', b'1'),
(55, 1, '4-7', b'1'),
(56, 1, '4-8', b'1'),
(57, 1, '4-9', b'1'),
(58, 1, '4-10', b'1'),
(59, 1, '4-11', b'1'),
(60, 1, '4-12', b'1'),
(61, 1, '5-1', b'0'),
(62, 1, '5-2', b'1'),
(63, 1, '5-3', b'1'),
(64, 1, '5-4', b'1'),
(65, 1, '5-5', b'1'),
(66, 1, '5-6', b'1'),
(67, 1, '5-7', b'1'),
(68, 1, '5-8', b'1'),
(69, 1, '5-9', b'1'),
(70, 1, '5-10', b'1'),
(71, 1, '5-11', b'1'),
(72, 1, '5-12', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_resultados`
--

CREATE TABLE `cu_resultados` (
  `Id` int(11) NOT NULL,
  `DNI` bigint(20) NOT NULL,
  `Curso` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_roles`
--

CREATE TABLE `cu_roles` (
  `Id` int(11) NOT NULL,
  `Rol` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cu_roles`
--

INSERT INTO `cu_roles` (`Id`, `Rol`, `Activo`) VALUES
(1, 'Administrador', b'1'),
(2, 'Interno', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_unidades`
--

CREATE TABLE `cu_unidades` (
  `Id` int(11) NOT NULL,
  `Unidad` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Activo` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cu_unidades`
--

INSERT INTO `cu_unidades` (`Id`, `Unidad`, `Activo`) VALUES
(1, 'U-01 LISANDRO OLMOS', b'1'),
(2, 'U-02 SIERRA CHICA', b'0'),
(3, 'U-03 SAN NICOLAS', b'0'),
(4, 'U-04 BAHIA BLANCA', b'0'),
(5, 'U-05 MERCEDES', b'0'),
(6, 'U-06 DOLORES', b'0'),
(7, 'U-07 AZUL', b'0'),
(8, 'U-08 LOS HORNOS', b'0'),
(9, 'U-09 LA PLATA', b'0'),
(10, 'U-10 MELCHOR ROMERO', b'0'),
(11, 'U-11 BARADERO', b'0'),
(12, 'U-12 GORINA', b'0'),
(13, 'U-13 JUNIN', b'0'),
(14, 'U-14 GENERAL ALVEAR', b'0'),
(15, 'U-15 MAR DEL PLATA', b'0'),
(16, 'U-16 JUNIN', b'0'),
(17, 'U-17 URDAMPILLETA', b'0'),
(18, 'U-18 GORINA', b'0'),
(19, 'U-19 SAAVEDRA', b'0'),
(20, 'U-20 TRENQUE LAUQUEN', b'0'),
(21, 'U-21 CAMPANA', b'0'),
(22, 'U-23 FLORENCIO VARELA', b'0'),
(23, 'U-24 F.VARELA', b'0'),
(24, 'U-24 FLORENCIO VARELA', b'0'),
(25, 'U-25 LISANDRO OLMOS', b'0'),
(26, 'U-26 LISANDRO OLMOS', b'0'),
(27, 'U-27 SIERRA CHICA', b'0'),
(28, 'U-28 MAGDALENA', b'0'),
(29, 'U-30 GENERAL ALVEAR', b'0'),
(30, 'U-31 FLORENCIO VARELA', b'0'),
(31, 'U-32 FLORENCIO VARELA', b'0'),
(32, 'U-33 LOS HORNOS', b'0'),
(33, 'U-34 MELCHOR ROMERO', b'0'),
(34, 'U-35 MAGDALENA', b'0'),
(35, 'U-36 MAGDALENA', b'0'),
(36, 'U-37 BARKER', b'0'),
(37, 'U-38 SIERRA CHICA', b'0'),
(38, 'U-39 ITUZAINGO', b'0'),
(39, 'U-40 LOMAS DE ZAMORA', b'0'),
(40, 'U-41 CAMPANA', b'0'),
(41, 'U-42 FLORENCIO VARELA', b'0'),
(42, 'U-43 LA MATANZA', b'0'),
(43, 'U-44 BATAN', b'0'),
(44, 'U-45 MELCHOR ROMERO', b'0'),
(45, 'U-46 SAN MARTIN', b'0'),
(46, 'U-47 SAN ISIDRO', b'0'),
(47, 'U-48 SAN MARTIN', b'0'),
(48, 'U-49 JUNIN', b'0'),
(49, 'U-50 BATAN', b'0'),
(50, 'U-51 MAGDALENA', b'0'),
(51, 'U-52 AZUL', b'0'),
(52, 'U-53 GONZALEZ CATAN', b'0'),
(53, 'U-54 FLORENCIO VARELA', b'0'),
(54, 'U-56 VIRREY DEL PINO', b'0'),
(55, 'U-57 SAN MARTIN', b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cu_usuarios`
--

CREATE TABLE `cu_usuarios` (
  `Id` int(11) NOT NULL,
  `Legajo` int(11) DEFAULT NULL,
  `Ficha` int(11) DEFAULT NULL,
  `Nombre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdLogin` int(11) NOT NULL,
  `Nacimiento` date NOT NULL,
  `DNI` bigint(20) DEFAULT NULL,
  `CUIL` bigint(20) DEFAULT NULL,
  `Email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdPabellon` int(11) DEFAULT NULL,
  `Registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Habilitado` timestamp NULL DEFAULT NULL,
  `Baja` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cu_actualizaciones`
--
ALTER TABLE `cu_actualizaciones`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `cu_cursos`
--
ALTER TABLE `cu_cursos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_Cursos` (`Curso`(191)) USING BTREE;

--
-- Indices de la tabla `cu_inscripciones`
--
ALTER TABLE `cu_inscripciones`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `IDX_DNI` (`DNI`) USING BTREE,
  ADD KEY `IdPabellon` (`IdPabellon`),
  ADD KEY `IdCurso` (`IdCurso`),
  ADD KEY `IDX_DNI_RESULTADO` (`DNI`);

--
-- Indices de la tabla `cu_intra_busquedacursos`
--
ALTER TABLE `cu_intra_busquedacursos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_Search_Courses` (`Nombre`(191),`Id`);

--
-- Indices de la tabla `cu_intra_busquedaempleos`
--
ALTER TABLE `cu_intra_busquedaempleos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_Search_Jobs` (`Nombre`(191),`Id`);

--
-- Indices de la tabla `cu_intra_busquedaestudios`
--
ALTER TABLE `cu_intra_busquedaestudios`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IX_Search_Learning` (`Nombre`(191),`Id`);

--
-- Indices de la tabla `cu_intra_busquedatalleres`
--
ALTER TABLE `cu_intra_busquedatalleres`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IX_Search_Workshop` (`Nombre`(191),`Id`);

--
-- Indices de la tabla `cu_intra_colegio`
--
ALTER TABLE `cu_intra_colegio`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdNivelEducativo` (`IdNivelEducativo`),
  ADD KEY `IX_Search_School` (`Nombre`(191));

--
-- Indices de la tabla `cu_intra_cursos`
--
ALTER TABLE `cu_intra_cursos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_Search_Courses` (`Nombre`);

--
-- Indices de la tabla `cu_intra_empleos`
--
ALTER TABLE `cu_intra_empleos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `cu_intra_internos`
--
ALTER TABLE `cu_intra_internos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_Search_Courses` (`Nombre`(191),`Ficha`);

--
-- Indices de la tabla `cu_intra_niveleseducativos`
--
ALTER TABLE `cu_intra_niveleseducativos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `cu_intra_talleres`
--
ALTER TABLE `cu_intra_talleres`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IX_Search_Workshop` (`Nombre`(191));

--
-- Indices de la tabla `cu_intra_terciario`
--
ALTER TABLE `cu_intra_terciario`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdNivelEducativo` (`IdNivelEducativo`),
  ADD KEY `IX_Search_Technical` (`Nombre`(191));

--
-- Indices de la tabla `cu_intra_universidad`
--
ALTER TABLE `cu_intra_universidad`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdNivelEducativo` (`IdNivelEducativo`),
  ADD KEY `IX_Search_University` (`Nombre`(191));

--
-- Indices de la tabla `cu_logins`
--
ALTER TABLE `cu_logins`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdRol` (`IdRol`);

--
-- Indices de la tabla `cu_pabellones`
--
ALTER TABLE `cu_pabellones`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdUnidad` (`IdUnidad`);

--
-- Indices de la tabla `cu_resultados`
--
ALTER TABLE `cu_resultados`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_DNI` (`DNI`);

--
-- Indices de la tabla `cu_roles`
--
ALTER TABLE `cu_roles`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `cu_unidades`
--
ALTER TABLE `cu_unidades`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `cu_usuarios`
--
ALTER TABLE `cu_usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdPabellon` (`IdPabellon`),
  ADD KEY `cu_usuarios_ibfk_2` (`IdLogin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cu_actualizaciones`
--
ALTER TABLE `cu_actualizaciones`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_cursos`
--
ALTER TABLE `cu_cursos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_inscripciones`
--
ALTER TABLE `cu_inscripciones`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_intra_busquedacursos`
--
ALTER TABLE `cu_intra_busquedacursos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_intra_busquedaempleos`
--
ALTER TABLE `cu_intra_busquedaempleos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_intra_busquedaestudios`
--
ALTER TABLE `cu_intra_busquedaestudios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_intra_busquedatalleres`
--
ALTER TABLE `cu_intra_busquedatalleres`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_intra_colegio`
--
ALTER TABLE `cu_intra_colegio`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_intra_cursos`
--
ALTER TABLE `cu_intra_cursos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_intra_empleos`
--
ALTER TABLE `cu_intra_empleos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_intra_internos`
--
ALTER TABLE `cu_intra_internos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_intra_niveleseducativos`
--
ALTER TABLE `cu_intra_niveleseducativos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cu_intra_talleres`
--
ALTER TABLE `cu_intra_talleres`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_intra_terciario`
--
ALTER TABLE `cu_intra_terciario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_intra_universidad`
--
ALTER TABLE `cu_intra_universidad`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_logins`
--
ALTER TABLE `cu_logins`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_pabellones`
--
ALTER TABLE `cu_pabellones`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `cu_resultados`
--
ALTER TABLE `cu_resultados`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cu_unidades`
--
ALTER TABLE `cu_unidades`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `cu_usuarios`
--
ALTER TABLE `cu_usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cu_inscripciones`
--
ALTER TABLE `cu_inscripciones`
  ADD CONSTRAINT `cu_inscripciones_ibfk_1` FOREIGN KEY (`IdPabellon`) REFERENCES `cu_pabellones` (`Id`),
  ADD CONSTRAINT `cu_inscripciones_ibfk_2` FOREIGN KEY (`IdCurso`) REFERENCES `cu_cursos` (`Id`);

--
-- Filtros para la tabla `cu_intra_colegio`
--
ALTER TABLE `cu_intra_colegio`
  ADD CONSTRAINT `cu_intra_colegio_ibfk_1` FOREIGN KEY (`IdNivelEducativo`) REFERENCES `cu_intra_niveleseducativos` (`Id`);

--
-- Filtros para la tabla `cu_intra_terciario`
--
ALTER TABLE `cu_intra_terciario`
  ADD CONSTRAINT `cu_intra_terciario_ibfk_1` FOREIGN KEY (`IdNivelEducativo`) REFERENCES `cu_intra_niveleseducativos` (`Id`);

--
-- Filtros para la tabla `cu_intra_universidad`
--
ALTER TABLE `cu_intra_universidad`
  ADD CONSTRAINT `cu_intra_universidad_ibfk_1` FOREIGN KEY (`IdNivelEducativo`) REFERENCES `cu_intra_niveleseducativos` (`Id`);

--
-- Filtros para la tabla `cu_logins`
--
ALTER TABLE `cu_logins`
  ADD CONSTRAINT `cu_logins_ibfk_1` FOREIGN KEY (`IdRol`) REFERENCES `cu_roles` (`Id`);

--
-- Filtros para la tabla `cu_pabellones`
--
ALTER TABLE `cu_pabellones`
  ADD CONSTRAINT `cu_pabellones_ibfk_1` FOREIGN KEY (`IdUnidad`) REFERENCES `cu_unidades` (`Id`);

--
-- Filtros para la tabla `cu_usuarios`
--
ALTER TABLE `cu_usuarios`
  ADD CONSTRAINT `cu_usuarios_ibfk_1` FOREIGN KEY (`IdPabellon`) REFERENCES `cu_pabellones` (`Id`),
  ADD CONSTRAINT `cu_usuarios_ibfk_2` FOREIGN KEY (`IdLogin`) REFERENCES `cu_logins` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
