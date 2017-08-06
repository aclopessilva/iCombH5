-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Ago-2017 às 19:28
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icombh5`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `universo`
--

CREATE TABLE `universo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL COMMENT 'baralho, bolinhas, camisetas, etc',
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `universo`
--

INSERT INTO `universo` (`id`, `tipo`, `quantidade`) VALUES
(1, 'baralho_completo', 52),
(2, 'baralho_32', 32),
(3, 'bolas', 30),
(4, 'camisas_futebol', 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `universo`
--
ALTER TABLE `universo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `universo`
--
ALTER TABLE `universo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
