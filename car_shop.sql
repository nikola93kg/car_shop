-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 06:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `marka` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cena` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `koriscen` int(1) NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `korisnik_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `marka`, `model`, `cena`, `koriscen`, `info`, `slika`, `korisnik_id`) VALUES
(1, 'audi', 'a4', '8000', 1, 'Mnogo dobar auto, sve mnogo dobro, radjen redovno mali servis. Za vise info pozovi der na telefon +4369911628747', 'fec08d1415ce-1920x1080.jpg', 1),
(2, 'ford', 'focus', '13000', 0, 'Mnogo dobro sve, nema da brines.', 'e020c7e6fcec-1920x1080.jpg', 1),
(3, 'bmw', '520', '17000', 0, 'Najnoviji model vreocanke TOP stanje. Sve novo u njemu, nema greske.', 'c346b4379fcd-1920x1080.jpg', 1),
(4, 'peugeot', '308', '9000', 1, 'Pezo stranac na prodaju. Dobro stanje. Na ime kupca.', 'af01d6f60e13-1920x1080.jpg', 1),
(5, 'opel', 'corsa e', '5000', 1, 'Korsica ide ko luda. Bez ulaganja.', 'fec7fad71d10-1920x1080.jpg', 1),
(6, 'skoda', 'oktavia', '10500', 1, 'Metalik boja\r\nBranici u boji auta\r\n', '9180374d9917-1920x1080.jpg', 4),
(7, 'Alfa Romeo', 'Stelvio', '35000', 1, 'Prvi vlasnik.\r\nKupljeno novo u Srbiji.\r\nUradjen servis, bez ostecenja i bez ulaganja.\r\n\r\nUz vozilo ide dva seta orginalnig tockova sa gumama i senzorima za pritisak.', 'c20583f577f9-1920x1080.jpg', 4),
(8, 'audi', 'a5', '17499', 1, 'Audi A5 Sportback, Ambiente, 2.0Tdi, 177ks, Quattro, Automatic,Sport EURO 5\r\nUvoz iz Švajcarske.\r\nAlcantara kožna sedišta sa grejačima, navigacija, parking senzori, led dnevna svetla, Bixenon farovi, digitalna klima sa dve zone,sport sedišta,sport vešanje', '7ba39c25c96f-370x278.jpg', 2),
(9, 'blenty', '45 coral', '250000', 0, 'NOV NOV NOV, vozila ga baba do pijace', 'maxresdefault.jpg', 3),
(10, 'zastava', 'yugo 65', '350', 1, 'Automobil je u odličnom stanju, bez oštećenja i mehaničkih kvarova. Proizveden za Američko tržište\r\nDozvoljen svaki vid provere automobila kod Vašeg majstora ili u ovlašćenom servisu', '7b1c4af92934-1920x1080.jpg', 5),
(11, 'zastava', '101 skala 55', '150', 1, 'Auto u voznom stanju , za vise informacija poziv, moze zamena za gajbu piva sa mojom doplatom', '221e41fbc0a9-1920x1080.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ime_prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `ime_prezime`, `slika`) VALUES
(1, 'nikola', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'nikola@asd', 'Nikola Markovic', '1.jpg'),
(2, 'boza', 'e54ee7e285fbb0275279143abc4c554e5314e7b417ecac83a5984a964facbaad68866a2841c3e83ddf125a2985566261c4014f9f960ec60253aebcda9513a9b4', 'bozidar@asd', 'Bozidar Djoric', '20191110_153845.jpg'),
(3, 'baja', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'baja@asd', 'Baja Koreli', 'baja kon.jpg'),
(4, 'zikson', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'zivorad@asd', 'Zivorad Jankovic', '0-02-05-a4e5a8f33f9bdefbf6bda94cffff5873931ee3004f50cad004497e446ac98de4_c5c096f7.jpg'),
(5, 'ilija_bokser', 'e54ee7e285fbb0275279143abc4c554e5314e7b417ecac83a5984a964facbaad68866a2841c3e83ddf125a2985566261c4014f9f960ec60253aebcda9513a9b4', 'bokser@gmail.com', 'Ilija Bokser', '0-02-05-d9bebaac489534c35fa089619465ef9969cd6379ee39d0e485ef5b859b93f22c_743d82.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `korisnik_id` (`korisnik_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`korisnik_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
