-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Ago-2017 às 09:24
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
-- Estrutura da tabela `elemento`
--

CREATE TABLE `elemento` (
  `id` int(11) NOT NULL,
  `universo_id` int(11) NOT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  `predicado` varchar(200) DEFAULT NULL COMMENT 'baralho = cor\n',
  `atributo` varchar(200) DEFAULT NULL COMMENT 'baralho = naipe',
  `valor` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `elemento`
--

INSERT INTO `elemento` (`id`, `universo_id`, `imagem`, `predicado`, `atributo`, `valor`) VALUES
(1, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/AsCopas.png', 'vermelho', 'copas', 'as'),
(2, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/AsEspadas.png', 'preto', 'espadas', 'as'),
(3, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/AsOuros.png', 'vermelho', 'ouros', 'as'),
(4, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/AsPaus.png', 'preto', 'paus', 'as'),
(5, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/DoisCopas.png', 'vermelho', 'copas', '2'),
(6, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/DoisEspadas.png', 'preto', 'espadas', '2'),
(7, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/DoisOuros.png', 'vermelho', 'ouros', '2'),
(8, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/DoisPaus.png', 'preto', 'paus', '2'),
(9, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/TresCopas.png', 'vermelho', 'copas', '3'),
(10, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/TresEspadas.png', 'preto', 'espadas', '3'),
(11, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/TresOuros.png', 'vermelho', 'ouros', '3'),
(12, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/TresPaus.png', 'preto', 'paus', '3'),
(13, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/QuatroCopas.png', 'vermelho', 'copas', '4'),
(14, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/QuatroEspadas.png', 'preto', 'espadas', '4'),
(15, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/QuatroOuros.png', 'vermelho', 'ouros', '4'),
(16, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/QuatroPaus.png', 'preto', 'paus', '4'),
(17, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/CincoCopas.png', 'vermelho', 'copas', '5'),
(18, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/CincoEspadas.png', 'preto', 'espadas', '5'),
(19, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/CincoOuros.png', 'vermelho', 'ouros', '5'),
(20, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/CincoPaus.png', 'preto', 'paus', '5'),
(21, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/SeisCopas.png', 'vermelho', 'copas', '6'),
(22, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/SeisEspadas.png', 'preto', 'espadas', '6'),
(23, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/SeisOuros.png', 'vermelho', 'ouros', '6'),
(24, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/SeisPaus.png', 'preto', 'paus', '6'),
(25, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/SeteCopas.png', 'vermelho', 'copas', '7'),
(26, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/SeteEspadas.png', 'preto', 'espadas', '7'),
(27, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/SeteOuros.png', 'vermelho', 'ouros', '7'),
(28, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/SetePaus.png', 'preto', 'paus', '7'),
(29, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/OitoCopas.png', 'vermelho', 'copas', '8'),
(30, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/OitoEspadas.png', 'preto', 'espadas', '8'),
(31, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/OitoOuros.png', 'vermelho', 'ouros', '8'),
(32, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/OitoPaus.png', 'preto', 'paus', '8'),
(33, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/NoveCopas.png', 'vermelho', 'copas', '9'),
(34, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/NoveEspadas.png', 'preto', 'espadas', '9'),
(35, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/NoveOuros.png', 'vermelho', 'ouros', '9'),
(36, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/NovePaus.png', 'preto', 'paus', '9'),
(37, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/DezCopas.png', 'vermelho', 'copas', '10'),
(38, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/DezEspadas.png', 'preto', 'espadas', '10'),
(39, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/DezOuros.png', 'vermelho', 'ouros', '10'),
(40, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/DezPaus.png', 'preto', 'paus', '10'),
(41, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/ValeteCopas.png', 'vermelho', 'copas', 'valete'),
(42, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/ValeteEspadas.png', 'preto', 'espadas', 'valete'),
(43, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/ValeteOuros.png', 'vermelho', 'ouros', 'valete'),
(44, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/ValetePaus.png', 'preto', 'paus', 'valete'),
(45, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/DamaCopas.png', 'vermelho', 'copas', 'dama'),
(46, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/DamaEspadas.png', 'preto', 'espadas', 'dama'),
(47, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/DamaOuros.png', 'vermelho', 'ouros', 'dama'),
(48, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/DamaPaus.png', 'preto', 'paus', 'dama'),
(49, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/ReiCopas.png', 'vermelho', 'copas', 'rei'),
(50, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/ReiEspadas.png', 'preto', 'espadas', 'rei'),
(51, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/ReiOuros.png', 'vermelho', 'ouros', 'rei'),
(52, 1, '<?= base_url()?>/user_guide/img/imagens_Baralho/ReiPaus.png', 'preto', 'paus', 'rei');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elemento`
--
ALTER TABLE `elemento`
  ADD PRIMARY KEY (`id`,`universo_id`),
  ADD KEY `fk_elemento_universo1_idx` (`universo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elemento`
--
ALTER TABLE `elemento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `elemento`
--
ALTER TABLE `elemento`
  ADD CONSTRAINT `fk_elemento_universo1` FOREIGN KEY (`universo_id`) REFERENCES `universo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
