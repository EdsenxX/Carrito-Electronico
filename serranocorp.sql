-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2018 a las 22:34:21
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `serranocorp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `url` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `categoria` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `preorden` int(1) NOT NULL,
  `oferta` varchar(4) COLLATE utf8_spanish2_ci NOT NULL,
  `video` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `genero` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `desarrolladores` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `plataforma` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `so` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `procesador` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `ram` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `graficos` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `direct` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `red` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `almacenamiento` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `visitas` int(11) NOT NULL,
  `megusta` int(11) NOT NULL,
  `nomegusta` int(11) NOT NULL,
  `director` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `actores` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `idioma` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `ejecutivos` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `cinematografia` varchar(500) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id`, `nombre`, `precio`, `imagen`, `url`, `categoria`, `preorden`, `oferta`, `video`, `fecha`, `genero`, `desarrolladores`, `plataforma`, `so`, `procesador`, `ram`, `graficos`, `direct`, `red`, `almacenamiento`, `visitas`, `megusta`, `nomegusta`, `director`, `actores`, `idioma`, `ejecutivos`, `cinematografia`) VALUES
(1, 'Playerunknownâ€™s Battlegrounds', 0, 'archivos/Videojuego/playerunknows.jpg', 'PlayerUnknown\'s Battlegrounds es un videojuego de batalla en línea multijugador masivo real desarrollado y publicado por Bluehole para Microsoft Windows y Xbox One.', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/jWbCf1XAdnU\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', ' PUBG Corporation', 'Xbox One, Microsoft Windows', '64-bit Windows 7, Windows 8.1, Windows 10', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(2, 'Grand Theft Auto V', 0, 'archivos/Videojuego/gta5.jpg', 'Grand Theft Auto V es un videojuego de acciÃ³n-aventura de mundo abierto desarrollado por la compaÃ±Ã­a britÃ¡nica Rockstar North y distribuido por Rockstar Games. Fue lanzado el 17 de septiembre de 2013 para las consolas PlayStation 3 y Xbox 360.â€‹', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/QUKRFwFT5nA\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', ' Rockstar North ', 'Todas', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(3, 'Coco', 0, 'archivos/Pelicula/coco.jpg', 'Coco es una pelÃ­cula estadounidense en 3D producida por Pixar y distribuida por Walt Disney Pictures. El 15 de agosto de 2015 en la D23 Expo Pixar confirmÃ³ el tÃ­tulo de su Ãºltima pelÃ­cula, que estÃ¡ inspirada en la fiesta mexicana del DÃ­a de Mu', 'Pelicula', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/8E5BV59-A_o\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(4, 'Destiny 2', 0, 'archivos/Videojuego/Destiny2.jpg', 'Destiny 2 es un videojuego de disparos multijugador en primera persona en lÃ­nea, desarrollado por Bungie y es publicado por Activision. Se lanzÃ³ el 6 de septiembre de 2017 para Microsoft Windows, PlayStation 4 y Xbox One.â€‹â€‹', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/9BhKYIlyskM\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(6, 'Call of Duty: WWII', 0, 'archivos/Videojuego/Call Of Duty ww12.jpg', 'Call of Duty: World War 2 es un videojuego de disparos en primera persona desarrollado por Sledgehammer Games, distribuido por Activision, perteneciente a la franquicia Call of Duty.', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/DB3_VWc3F6Y\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(7, 'The Legend of Zelda: Breath of the Wildâ€‹', 0, 'archivos/Videojuego/zeldabreathofthewild.jpg', 'The Legend of Zelda: Breath of the Wildâ€‹ es el tÃ­tulo oficial del videojuego de acciÃ³n-aventura de la serie The Legend of Zelda, desarrollado por Nintendo EPD, en colaboraciÃ³n con Monolith Soft para Wii U y Nintendo Switch.', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/CUkrPddov20\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(8, 'Need for Speed Payback', 0, 'archivos/Videojuego/payback.png', 'Need for Speed Payback es un videojuego de carreras de mundo abierto desarrollado por Ghost Games y distribuido por Electronic Arts para Microsoft Windows, PlayStation 4 y Xbox One. Es la vigÃ©sima tercera entrega de la serie Need for Speed.', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/bpFrtLJNpGE\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(9, 'Titanfall 2', 0, 'archivos/Videojuego/titanfall 2.jpg', 'Titanfall 2 es un videojuego de acciÃ³n en primera persona estilo mecha, que ha sido desarrollado por Respawn Entertainment y estÃ¡ distribuido por EA Games para Microsoft Windows, PlayStation 4 y Xbox One.', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/u5NxRHzqHbo\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(10, 'Assassin\'s Creed: Origins', 0, 'archivos/Videojuego/acorigins.jpg', 'Assassin\'s Creed: Origins es un videojuego de acción-aventura y RPG de la saga Assassin\'s Creed cuya fecha de lanzamiento fue el 27 de octubre de 2017.​​​ Está disponible para las plataformas PlayStation 4, Xbox One y PC', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/NZW-uXXRU94\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(11, 'Battlefield 1', 0, 'archivos/Videojuego/battlefield1.jpg', 'Battlefield 1 es un videojuego shooter de acciÃ³n bÃ©lica en primera persona. El tÃ­tulo fue desarrollado por DICE y distribuido mundialmente por Electronic Arts para Xbox One, PlayStation 4 y PC.', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/obXQCPivr4Y\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(12, 'Gears Of War 4', 0, 'archivos/Videojuego/gearsofwar4.jpg', 'Gears of War 4 o Gears 4 es un videojuego de acciÃ³n y shooter en tercera persona desarrollado por The Coalition y distribuido por Microsoft lanzado el 11 de octubre del 2016 para Xbox One y Windows 10.', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/rZFGx3bFpRU\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(13, 'Watch Dogs 2', 0, 'archivos/Videojuego/watchdogs2.png', 'Watch Dogs 2 es un videojuego de mundo abierto y acciÃ³n-aventura desarrollado por Ubisoft Montreal y distribuido por Ubisoft para las plataformas Microsoft Windows, PlayStation 4 y Xbox One.', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/uehxe1ilXLQ\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(15, 'Liga de la justicia', 0, 'archivos/Videojuego/liga de la justicia.jpg', 'Liga de la Justicia es una pelÃ­cula estadounidense de superhÃ©roes de 2017, basada en las historietas de DC Comics acerca de la Liga de la Justicia volviÃ©ndose la primera pelÃ­cula de este equipo.', 'Pelicula', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/a9bfdQv-90M?start=24\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '2017-11-15', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 'Zack Snyder', '', '', '', ''),
(21, 'Rise of the Tomb Raider', 0, 'archivos/Videojuego/image.jpg', 'Rise of The Tomb Raider es un videojuego de acciÃ³n-aventura desarrollado por Crystal Dynamics. Es el undÃ©cimo videojuego de la serie Tomb Raider.', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/rGbKZErRHFg\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(22, 'Star Wars Battlefront II', 0, 'archivos/Videojuego/PP34262.jpeg', 'Star Wars Battlefront II es un videojuego de disparos en primera persona, el cual tiene lugar en el universo de La Guerra de las Galaxias. Es la secuela del videojuego Star Wars: Battlefront del aÃ±o 2015.', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/8ldLRjgvgVM\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(23, 'House of Cards', 0, 'archivos/Serie/house_of_cards_tv_series-644965875-large.jpg', 'House of Cards es una serie estadounidense de televisiÃ³n web de drama polÃ­tico creada por Beau Willimon. Es una adaptaciÃ³n de la miniserie del mismo nombre realizada por la BBC y se basa en la novela de Michael Dobbs.', 'Serie', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/Oah2cxmwGIA\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 'David Fincher', 'Kevin Spacey, Robin Wright, Michael Kelly, Kate Mara, Corey Stoll, Rachel Brosnahan, Michel Gill, Mahershala Ali, Jayne Atkinson, Gerald McRaney, Molly Parker, Elizabeth Marvel, Paul Sparks, Neve Campbell, Sakina Jaffrey, Nathan Darrow', 'Ingles', 'Kevin Spacey, Eric Roth, Joshua Donen, Dana Brunetti, Andrew Davies, Michael Dobbs, John Melfi, Beau Willimon, Robin Wright', 'Eigil Bryld, Tim Ives, Igor Martinovic'),
(25, 'Fallout 4', 0, 'archivos/Videojuego/fallout_4.jpg', 'Fallout 4 es un videojuego de rol de acciÃ³n desarrollado por Bethesda Game Studios y distribuido por Bethesda Softworks. Es la quinta entrega de la serie Fallout.', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/t5JGCekd_Ok\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(26, 'Metal Gear Solid V: The Phantom Pain', 0, 'archivos/Videojuego/asdsd.jpg', 'Metal Gear Solid V: The Phantom Pain es un videojuego de sigilo y acciÃ³n-aventura de la saga Metal Gear, desarrollado por Kojima Productions y producido por Hideo Kojima, para las videoconsolas PlayStation 3, PlayStation 4, Xbox 360, Xbox One y PC. ', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/Krb1a-9Z63o\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '2015-09-01', 'Acción', ' Konami Digital Entertainment ', 'PlayStation 3, PlayStation 4, Xbox 360, Xbox One y PC.', ' Windows 7x64, Windows 8x64, Windows 10x64 (64-bit OS Required)', ' Intel Core i5-4460 (3.40 GHz) or better; Quad-core or better', ' 4 GB de RAM', 'NVIDIA GeForce GTX 650 (2GB) or better (DirectX 11 card Required)', '11', '', '28 GB de espacio disponible', 0, 0, 0, '', '', '', '', ''),
(28, 'Just Cause 3', 0, 'archivos/Videojuego/just-cause-3.jpg', 'Con mÃ¡s de 1000 kmÂ² de total libertad desde el fondo del mar hasta el cielo, prepÃ¡rate para desatar el caos de la manera mÃ¡s explosiva y original que puedas imaginar.', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/oRNu8xMYo0g\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '2015-11-30', '', ' Avalanche Studios', 'PlayStation 4, Xbox One, Microsoft Windows', 'Vista SP2 / Windows 7.1 SP1 / Windows 8.1 (64-bit Operating System Required)', 'Intel Core i5-2500k, 3.3GHz / AMD Phenom II X6 1075T 3GHz', ' 8 GB de RAM', 'NVIDIA GeForce GTX 670 (2GB) / AMD Radeon HD 7870 (2GB)', '', '', '54 GB de espacio disponible', 0, 0, 0, '', '', '', '', ''),
(31, 'Super Mario Odyssey', 0, 'archivos/Videojuego/supermarioodyssey_coveret_2158443.jpg', 'Super Mario Odyssey es un videojuego de plataformas de mundo abierto para Nintendo Switch que se lanzÃ³ el 27 de octubre de 2017. Es el decimonoveno tÃ­tulo de la serie Super Mario y el sÃ©ptimo juego de plataformas en 3D de Mario.â€‹', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/IomPE3J5M4c\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '2017-10-27', '', '', 'Nintendo Switch', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(32, 'EscuadrÃ³n Suicida', 0, 'archivos/Pelicula/movieposter.jpg', 'EscuadrÃ³n suicida es una pelÃ­cula de supervillanosâ€‹ estadounidense de 2016, basada en el equipo de antihÃ©roes homÃ³nimo de DC Comics. Es la tercera entrega del Universo Extendido de DC Comics. ', 'Pelicula', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/ZVIVF6q1cj8\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(33, 'Dark 1Â° Temporada', 0, 'archivos/Serie/dark_tv_series-111203947-large.jpg', 'Dark es una serie alemana original de Netflix, perteneciente a los gÃ©neros sobrenatural y drama, co-creada por Baran bo Odar y Jantje Friese.â€‹â€‹ ', 'Serie', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/VPVLhgtDhE0\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(35, 'The Punisher', 99, 'archivos/Serie/Punisher.jpg', 'The Punisher es una serie de televisiÃ³n estadounidense creada para Netflix por Steve Lightfoot y que se basa en el personaje de Marvel Comics del mismo nombre.', 'Serie', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/X33WtGWk_YU\" frameborder=\"0\" gesture=\"media\" allow=\"encrypted-media\" allowfullscreen></iframe>', '2017-11-17', '', '', '', '', '', '', '', '', '', '', 3, 0, 0, '', '', '', '', ''),
(36, 'Breaking Bad', 200, 'archivos/Serie/breaking-bad.jpg', 'Breaking Bad es una serie de televisiï¿½n dramï¿½tica estadounidense creada y producida por Vince Gilligan.', 'Serie', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/Y-_db2XcxtM\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '	20 de Enero de 2008', 'Suspenso psicológico, Serie de televisión policíaca, Drama televisivo', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', 'Bryan Cranston, Aaron Paul, Anna Gunn, Dean Norris, Betsy Brandt, RJ Mitte, Bob Odenkirk, Giancarlo Esposito, Jonathan Banks', 'Ingles', 'Mark Johnson, Michelle MacLaren', '	 John Toll (episodio piloto), Michael Slovis'),
(39, 'Far Cry 5', 1215, 'archivos/Videojuego/farcry5.jpg', 'Far Cry 5 es un videojuego de acciÃ³n-aventura en primera persona desarrollado por Ubisoft Montreal y publicado por Ubisoft para PlayStation 4, Xbox One y Microsoft Windows. Es la undÃ©cima entrega de la serie Far Cry. ', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/y1fXmF2FxCI\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '2018-03-25', 'AcciÃ³n. Rol.', ' Ubisoft Reflections, Ubisoft Ukraine, Ubisoft Montreal, Ubisoft Shanghai, Ubisoft Toronto', 'PlayStation 4, Xbox One, Microsoft Windows', 'Windows 7 SP1, Windows 8.1, Windows 10 (64-bit)', 'Intel Core i5-2400 @ 3.1 GHz o AMD FX-6300 @ 3.5 GHz o equivalente', '8GB', 'NVIDIA GeForce GTX 670 o AMD R9 270 (2GB VRAM with Shader Model 5.0) o superior', '', '', '', 0, 0, 0, '', '', '', '', ''),
(40, 'CupHead', 399, 'archivos/Videojuego/cuphead-3841932.jpg', 'Cuphead es un videojuego independiente del aÃ±o 2017 perteneciente al gÃ©nero de plataformas, desarrollado y producido por la compaÃ±Ã­a StudioMDHR.', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/FkioqVzYHWk\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '2017-09-29', 'Plataformas. Disparos.', '', 'Xbox One, Microsoft Windows', 'Windows 7', 'Intel Core2 Duo E8400, 3.0GHz o AMD Athlon 64 X2 6000+, 3.0GHz o superior', '2 GB', 'Geforce 9600 GT o AMD HD 3870 512MB o superior', 'VersiÃ³n 9.0', '', ' 20 GB de espacio disponible', 0, 0, 0, '', '', '', '', ''),
(41, 'Resident Evil 7: Biohazard', 420, 'archivos/Videojuego/220px-Resident_Evil_7_cover_art.jpg', 'Resident Evil 7, conocido originalmente en JapÃ³n como Biohazard 7: Resident Evil es un videojuego perteneciente al gÃ©nero del survival horror, desarrollado por la empresa japonesa Capcom,', 'Videojuego', 0, '', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/aOpZEeY8Y7Y\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '2017-01-24', '', 'Capcom', ' Microsoft Windows, PlayStation 4 y Xbox One', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(42, 'Overwatch', 629, 'archivos/Videojuego/Overwatch_Portada.jpg', 'Overwatch es un videojuego de disparos en primera persona multijugador, desarrollado por Blizzard Entertainment. Fue lanzado al pÃºblico el 24 de mayo del 2016, para las plataformas Playstation 4, Xbox One y Microsoft Windows.â€‹', 'Videojuego', 0, '75%', '<iframe width=\"800\" height=\"400\" src=\"https://www.youtube.com/embed/xGewI51020c\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', '2016-05-24', '', 'Blizzard Entertainment', 'Playstation 4, Xbox One y Microsoft Windows.â€‹', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(43, 'Prueba Imagen', 9999, 'archivos/Pelicula/', '', 'Pelicula', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(44, 'Prueba 2', 455, 'archivos/Serie/', '', 'Serie', 0, '30%', '', '', 'AcciÃ³n.', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `usuario_a` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_a` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `comentario` varchar(500) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(40) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contrasena` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `conectado` tinyint(1) NOT NULL,
  `img` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `bloqueado` tinyint(1) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellidos`, `correo`, `contrasena`, `conectado`, `img`, `bloqueado`, `admin`) VALUES
(1, 'serrano', 'Eduardo', 'Serrano', 'eduardoserranojaime@gmail.com', '1234', 0, 'archivos/usuarios/thedivision.jpg', 0, 1),
(6, 'hola', 'hola', 'hola', 'hola@gmail.com', 'hola', 0, 'archivos/usuarios/', 0, 0),
(7, 'percy', 'holis', 'percy', 'skjd@gjkd.com', '1234', 0, 'archivos/usuarios/', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
