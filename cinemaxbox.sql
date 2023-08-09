-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2023 at 05:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemaxbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `film_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `img_url` varchar(300) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `length` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`film_id`, `title`, `img_url`, `description`, `length`) VALUES
(1, 'spider-Man: a traves del Spider-Verso ', 'img/spiderman1.jpg', 'Narra la segunda parte de la historia de Miles Morales. El adolescente emprende una nueva aventura a', 140),
(2, 'la sirenita', 'img/la-sirenita.jpg', 'Ariel es una princesa sirena y la hija menor del Rey Triton, gobernante de la gente sirena de Atlant', 120),
(3, 'guardianes de la Glaxia: Volumen 3 ', 'img/guardianes.jpeg', 'Peter Quill, todavia conmocionado por la perdida de Gamora, debe reunir al equipo en torno a el para', 149),
(4, 'super mario bros', 'img/The_Super_Mario_Bros.webp', 'Mientras trabajan en una averia subterranea, los fontaneros de Brooklyn, Mario y su hermano Luigi.', 92),
(5, 'evil dead el despertar', 'img/EVIL1.jpg', 'Historia de dos hermanas separadas cuyo reencuentro se ve interrumpido por el surgimiento de demonio', 96),
(6, 'ant-man and the wasp: quantumania', 'https://m.media-amazon.com/images/M/MV5BODZhNzlmOGItMWUyYS00Y2Q5LWFlNzMtM2I2NDFkM2ZkYmE1XkEyXkFqcGdeQXVyMTU5OTA4NTIz._V1_FMjpg_UX1000_.jpg', 'Juntos, con los padres de Hope, Hank Pym (Michael Douglas) y Janet Van Dyne (Michelle Pfeiffer), la ', 149),
(7, 'transformers: el despertar de las bestias', 'https://m.media-amazon.com/images/M/MV5BZTNiNDA4NmMtNTExNi00YmViLWJkMDAtMDAxNmRjY2I2NDVjXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg', 'El mundo natal de los Maximals, una raza avanzada de bestias-robots que han evolucionado en un plane', 131),
(8, 'scream VI', 'https://image.tmdb.org/t/p/original/phJO3vFHTsIlxAEO6tD0OpSot0q.jpg', 'Los cuatro sobrevivientes de la mas reciente matanza de Ghostface en Woodsboro, se mudaron a la ciud', 123);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_date` date DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `order_id` varchar(20) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `reservation_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `reservation_date` date DEFAULT NULL,
  `amount_ticket` int(11) DEFAULT NULL,
  `total_amount` float DEFAULT NULL,
  `seat_reserved_list` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `show_id` int(11) DEFAULT NULL,
  `reservation_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `rol_id` int(11) NOT NULL,
  `rol` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`rol_id`, `rol`) VALUES
(1, 'admin'),
(2, 'client');

-- --------------------------------------------------------

--
-- Table structure for table `salon`
--

CREATE TABLE `salon` (
  `salon_id` int(11) NOT NULL,
  `salon_name` varchar(15) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `available` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salon`
--

INSERT INTO `salon` (`salon_id`, `salon_name`, `capacity`, `available`) VALUES
(110, 'A1', 25, 1),
(111, 'A2', 25, 1),
(112, 'A3', 25, 1),
(113, 'A4', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seat_reserved`
--

CREATE TABLE `seat_reserved` (
  `seat_reserved_id` int(11) NOT NULL,
  `seat_code` varchar(11) DEFAULT NULL,
  `reserved` tinyint(1) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `show_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `show`
--

CREATE TABLE `show` (
  `show_id` int(11) NOT NULL,
  `show_cost` float DEFAULT NULL,
  `show_date` date DEFAULT NULL,
  `start_at` varchar(11) DEFAULT NULL,
  `end_at` varchar(11) DEFAULT NULL,
  `film_id` int(11) DEFAULT NULL,
  `salon_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `show`
--

INSERT INTO `show` (`show_id`, `show_cost`, `show_date`, `start_at`, `end_at`, `film_id`, `salon_id`) VALUES
(1, 3.75, '2023-08-14', '8:00am', '10:00am', 2, 113),
(2, 3.75, '2023-08-14', '10:30am', '12:00pm', 7, 113),
(3, 2.5, '2023-08-14', '9:00pm', '10:00pm', 8, 110),
(4, 3.75, '2023-08-16', '8:00am', '10:00am', 3, 111),
(5, 3.75, '2023-08-16', '10:30am', '12:00pm', 1, 111),
(6, 2.5, '2023-08-16', '9:00pm', '10:30pm', 5, 112),
(7, 2.5, '2023-08-18', '9:00pm', '10:30pm', 5, 112),
(8, 2.5, '2023-08-18', '9:00pm', '11:00pm', 8, 110),
(9, 2.5, '2023-08-17', '8:00am', '10:00am', 4, 111),
(10, 2.5, '2023-08-17', '10:30am', '12:30pm', 6, 111),
(11, 2.5, '2023-08-17', '1:30pm', '2:30pm', 7, 111),
(12, 2.5, '2023-08-18', '8:00am', '10:00am', 2, 112),
(13, 2.5, '2023-08-18', '10:30am', '12:00pm', 3, 112),
(14, 1.5, '2023-08-19', '8:00am', '10:00am', 1, 113),
(15, 1.5, '2023-08-19', '8:00am', '9:30am', 4, 112),
(16, 1.5, '2023-08-19', '8:00am', '10:00am', 6, 111);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(15) DEFAULT NULL,
  `last_name` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `user_status` tinyint(1) DEFAULT 1,
  `rol_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`film_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `reservation_id` (`reservation_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `show_id` (`show_id`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indexes for table `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`salon_id`);

--
-- Indexes for table `seat_reserved`
--
ALTER TABLE `seat_reserved`
  ADD PRIMARY KEY (`seat_reserved_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `show_id` (`show_id`);

--
-- Indexes for table `show`
--
ALTER TABLE `show`
  ADD PRIMARY KEY (`show_id`),
  ADD KEY `film_id` (`film_id`),
  ADD KEY `salon_id` (`salon_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `film_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salon`
--
ALTER TABLE `salon`
  MODIFY `salon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `seat_reserved`
--
ALTER TABLE `seat_reserved`
  MODIFY `seat_reserved_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `show`
--
ALTER TABLE `show`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`show_id`) REFERENCES `show` (`show_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `seat_reserved`
--
ALTER TABLE `seat_reserved`
  ADD CONSTRAINT `seat_reserved_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `seat_reserved_ibfk_2` FOREIGN KEY (`show_id`) REFERENCES `show` (`show_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `show`
--
ALTER TABLE `show`
  ADD CONSTRAINT `show_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `film` (`film_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `show_ibfk_2` FOREIGN KEY (`salon_id`) REFERENCES `salon` (`salon_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
