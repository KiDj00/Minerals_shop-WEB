-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 10:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minerals`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `mineral_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `username`, `content`, `mineral_id`) VALUES
(1, 'Aleksa Djordjevic', 'Odlican odnos cene i kvaliteta', 2),
(2, 'Pera Peric', 'Sve pohvale', 3),
(3, 'Aleksa Aleksic', 'Odlican Malachite', 1),
(4, 'Pera Peric', 'Kliko je tezak?', 13),
(6, 'Pera Peric', 'Odlicna stvar za kolekciju', 2),
(7, 'Aleksa Djordjevic', 'Bas lep kamen', 19),
(8, 'Pera Peric', 'Da li je cena fiksna?', 17),
(9, 'Aleksa Djordjevic', 'Nadam se da cu nekada imati ovaj divni kamen u svojoj kolekciji', 17);

-- --------------------------------------------------------

--
-- Table structure for table `mineral`
--

CREATE TABLE `mineral` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `locality` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mineral`
--

INSERT INTO `mineral` (`id`, `username`, `title`, `locality`, `price`, `img`) VALUES
(2, 'aleksa', 'Baryte', 'Turt mine, Romania', 120, 'https://www.turkishminerals.org/wp-content/uploads/2020/04/NATURAL-STEATITE-TALC.png'),
(3, 'aleksa', 'Boron', 'Itauz mine, Kazahstan', 90, 'https://scdn.onnit.com/images/product-page/key-minerals/boron.png'),
(15, 'aleksa', 'Quartz Crystal Cluster', 'Madagascar', 670, 'https://www.kristalgrad.co.rs/slike/o-nama.png'),
(17, 'aleksa', 'Sodalite', 'Langesundsfjord, Norway', 3500, 'https://png2.cleanpng.com/sh/d09c950bbf12ebf833f26bc5086ccfe4/L0KzQYm3VcI2N6R4iZH0aYP2gLBuTft6aZ9ujNc2Y4L8g8XojL1pbZJxgdDwLXfofcT7jB5mNZ5uhtd7YXywRbO3WMg0apRmTNdqZEmxSIq5VcQ3QGk2TaQCMki3RoeBVsc2PV91htk=/kisspng-kyanite-crystal-healing-gemstone-mineral-5b0883bca4ead9.8925468815272846686755.png'),
(20, 'aleksa', 'Sapphire ', 'Port Orford, Canada', 4000, 'https://www.gia.edu/images/70094.png'),
(23, 'aleksa', 'Fluorite  ', 'Larkin`s Quarry, Ireland', 780, 'https://www.spiriferminerals.com/produkty/23412/bem34a.jpg'),
(24, 'aleksa', 'Dark Purple Amethyst Cluster', 'Minas Gerais, Brazil', 2300, 'https://assets3.fossilera.com/sp/565035/amethyst/708x500%3E/quartz-var-amethyst-goethite.jpg'),
(25, 'aleksa', 'Green-Black Calcite Crystal Cluster', 'Sweetwater Mine, Missouri', 1990, 'https://assets1.fossilera.com/sp/482676/calcite/708x500%3E/calcite-chalcopyrite.jpg'),
(26, 'aleksa', 'Veszelyite', 'Palabanda, Republic of the Congo', 2800, 'https://www.spiriferminerals.com/produkty/23057/beh17a.jpg'),
(27, 'aleksa', 'Bicolor Elbaite Tourmaline Crystal', 'Cruzeiro Mine, Brazil', 1295, 'https://assets1.fossilera.com/sp/578162/rubellite/708x500%3E/tourmaline-var-elbaite.jpg'),
(28, 'aleksa', 'Vibrant Azurite and Malachite Crystal Association ', 'Liufengshan Mine, China', 595, 'https://assets3.fossilera.com/sp/587724/azurite/708x500%3E/azurite-malachite.jpg'),
(29, 'aleksa', 'Beam Calcite Crystal Cluster with Phantoms', 'Atlas Mountains, Morocco', 402, 'https://assets1.fossilera.com/sp/545008/calcite/708x500%3E/calcite.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mineral`
--
ALTER TABLE `mineral`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mineral`
--
ALTER TABLE `mineral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
