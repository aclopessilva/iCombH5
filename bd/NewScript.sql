-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Ago-2017 às 18:33
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
-- Estrutura da tabela `condicao`
--

CREATE TABLE `condicao` (
  `id` int(11) NOT NULL,
  `estagio_id` int(11) NOT NULL,
  `atributo` varchar(200) DEFAULT NULL,
  `pertence` char(1) DEFAULT NULL,
  `caracteristica` varchar(200) DEFAULT NULL COMMENT 'indicador de uma caracteristica de um ou varios elemtentos que filtrara o universo. Exemplo se atributo=valor entao caracteristica=elemento.valor, se atributo=cor entao caracteristica=elemento.cor\n'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 1, 'user_guide/img/imagens_Baralho/AsCopas.png', 'vermelho', 'copas', 'as'),
(2, 1, 'user_guide/img/imagens_Baralho/AsEspadas.png', 'preto', 'espadas', 'as'),
(3, 1, 'user_guide/img/imagens_Baralho/AsOuros.png', 'vermelho', 'ouros', 'as'),
(4, 1, 'user_guide/img/imagens_Baralho/AsPaus.png', 'preto', 'paus', 'as'),
(5, 1, 'user_guide/img/imagens_Baralho/DoisCopas.png', 'vermelho', 'copas', '2'),
(6, 1, 'user_guide/img/imagens_Baralho/DoisEspadas.png', 'preto', 'espadas', '2'),
(7, 1, 'user_guide/img/imagens_Baralho/DoisOuros.png', 'vermelho', 'ouros', '2'),
(8, 1, 'user_guide/img/imagens_Baralho/DoisPaus.png', 'preto', 'paus', '2'),
(9, 1, 'user_guide/img/imagens_Baralho/TresCopas.png', 'vermelho', 'copas', '3'),
(10, 1, 'user_guide/img/imagens_Baralho/TresEspadas.png', 'preto', 'espadas', '3'),
(11, 1, 'user_guide/img/imagens_Baralho/TresOuros.png', 'vermelho', 'ouros', '3'),
(12, 1, 'user_guide/img/imagens_Baralho/TresPaus.png', 'preto', 'paus', '3'),
(13, 1, 'user_guide/img/imagens_Baralho/QuatroCopas.png', 'vermelho', 'copas', '4'),
(14, 1, 'user_guide/img/imagens_Baralho/QuatroEspadas.png', 'preto', 'espadas', '4'),
(15, 1, 'user_guide/img/imagens_Baralho/QuatroOuros.png', 'vermelho', 'ouros', '4'),
(16, 1, 'user_guide/img/imagens_Baralho/QuatroPaus.png', 'preto', 'paus', '4'),
(17, 1, 'user_guide/img/imagens_Baralho/CincoCopas.png', 'vermelho', 'copas', '5'),
(18, 1, 'user_guide/img/imagens_Baralho/CincoEspadas.png', 'preto', 'espadas', '5'),
(19, 1, 'user_guide/img/imagens_Baralho/CincoOuros.png', 'vermelho', 'ouros', '5'),
(20, 1, 'user_guide/img/imagens_Baralho/CincoPaus.png', 'preto', 'paus', '5'),
(21, 1, 'user_guide/img/imagens_Baralho/SeisCopas.png', 'vermelho', 'copas', '6'),
(22, 1, 'user_guide/img/imagens_Baralho/SeisEspadas.png', 'preto', 'espadas', '6'),
(23, 1, 'user_guide/img/imagens_Baralho/SeisOuros.png', 'vermelho', 'ouros', '6'),
(24, 1, 'user_guide/img/imagens_Baralho/SeisPaus.png', 'preto', 'paus', '6'),
(25, 1, 'user_guide/img/imagens_Baralho/SeteCopas.png', 'vermelho', 'copas', '7'),
(26, 1, 'user_guide/img/imagens_Baralho/SeteEspadas.png', 'preto', 'espadas', '7'),
(27, 1, 'user_guide/img/imagens_Baralho/SeteOuros.png', 'vermelho', 'ouros', '7'),
(28, 1, 'user_guide/img/imagens_Baralho/SetePaus.png', 'preto', 'paus', '7'),
(29, 1, 'user_guide/img/imagens_Baralho/OitoCopas.png', 'vermelho', 'copas', '8'),
(30, 1, 'user_guide/img/imagens_Baralho/OitoEspadas.png', 'preto', 'espadas', '8'),
(31, 1, 'user_guide/img/imagens_Baralho/OitoOuros.png', 'vermelho', 'ouros', '8'),
(32, 1, 'user_guide/img/imagens_Baralho/OitoPaus.png', 'preto', 'paus', '8'),
(33, 1, 'user_guide/img/imagens_Baralho/NoveCopas.png', 'vermelho', 'copas', '9'),
(34, 1, 'user_guide/img/imagens_Baralho/NoveEspadas.png', 'preto', 'espadas', '9'),
(35, 1, 'user_guide/img/imagens_Baralho/NoveOuros.png', 'vermelho', 'ouros', '9'),
(36, 1, 'user_guide/img/imagens_Baralho/NovePaus.png', 'preto', 'paus', '9'),
(37, 1, 'user_guide/img/imagens_Baralho/DezCopas.png', 'vermelho', 'copas', '10'),
(38, 1, 'user_guide/img/imagens_Baralho/DezEspadas.png', 'preto', 'espadas', '10'),
(39, 1, 'user_guide/img/imagens_Baralho/DezOuros.png', 'vermelho', 'ouros', '10'),
(40, 1, 'user_guide/img/imagens_Baralho/DezPaus.png', 'preto', 'paus', '10'),
(41, 1, 'user_guide/img/imagens_Baralho/ValeteCopas.png', 'vermelho', 'copas', 'valete'),
(42, 1, 'user_guide/img/imagens_Baralho/ValeteEspadas.png', 'preto', 'espadas', 'valete'),
(43, 1, 'user_guide/img/imagens_Baralho/ValeteOuros.png', 'vermelho', 'ouros', 'valete'),
(44, 1, 'user_guide/img/imagens_Baralho/ValetePaus.png', 'preto', 'paus', 'valete'),
(45, 1, 'user_guide/img/imagens_Baralho/DamaCopas.png', 'vermelho', 'copas', 'dama'),
(46, 1, 'user_guide/img/imagens_Baralho/DamaEspadas.png', 'preto', 'espadas', 'dama'),
(47, 1, 'user_guide/img/imagens_Baralho/DamaOuros.png', 'vermelho', 'ouros', 'dama'),
(48, 1, 'user_guide/img/imagens_Baralho/DamaPaus.png', 'preto', 'paus', 'dama'),
(49, 1, 'user_guide/img/imagens_Baralho/ReiCopas.png', 'vermelho', 'copas', 'rei'),
(50, 1, 'user_guide/img/imagens_Baralho/ReiEspadas.png', 'preto', 'espadas', 'rei'),
(51, 1, 'user_guide/img/imagens_Baralho/ReiOuros.png', 'vermelho', 'ouros', 'rei'),
(52, 1, 'user_guide/img/imagens_Baralho/ReiPaus.png', 'preto', 'paus', 'rei'),
(53, 2, 'user_guide/img/imagens_Baralho/SeteCopas.png', 'vermelho', 'copas', '7'),
(54, 2, 'user_guide/img/imagens_Baralho/SeteEspadas.png', 'preto', 'espadas', '7'),
(55, 2, 'user_guide/img/imagens_Baralho/SeteOuros.png', 'vermelho', 'ouros', '7'),
(56, 2, 'user_guide/img/imagens_Baralho/SetePaus.png', 'preto', 'paus', '7'),
(57, 2, 'user_guide/img/imagens_Baralho/OitoCopas.png', 'vermelho', 'copas', '8'),
(58, 2, 'user_guide/img/imagens_Baralho/OitoEspadas.png', 'preto', 'espadas', '8'),
(59, 2, 'user_guide/img/imagens_Baralho/OitoOuros.png', 'vermelho', 'ouros', '8'),
(60, 2, 'user_guide/img/imagens_Baralho/OitoPaus.png', 'preto', 'paus', '8'),
(61, 2, 'user_guide/img/imagens_Baralho/NoveCopas.png', 'vermelho', 'copas', '9'),
(62, 2, 'user_guide/img/imagens_Baralho/NoveEspadas.png', 'preto', 'espadas', '9'),
(63, 2, 'user_guide/img/imagens_Baralho/NoveOuros.png', 'vermelho', 'ouros', '9'),
(64, 2, 'user_guide/img/imagens_Baralho/NovePaus.png', 'preto', 'paus', '9'),
(65, 2, 'user_guide/img/imagens_Baralho/DezCopas.png', 'vermelho', 'copas', '10'),
(66, 2, 'user_guide/img/imagens_Baralho/DezEspadas.png', 'preto', 'espadas', '10'),
(67, 2, 'user_guide/img/imagens_Baralho/DezOuros.png', 'vermelho', 'ouros', '10'),
(68, 2, 'user_guide/img/imagens_Baralho/DezPaus.png', 'preto', 'paus', '10'),
(69, 2, 'user_guide/img/imagens_Baralho/ValeteCopas.png', 'vermelho', 'copas', 'valete'),
(70, 2, 'user_guide/img/imagens_Baralho/ValeteEspadas.png', 'preto', 'espadas', 'valete'),
(71, 2, 'user_guide/img/imagens_Baralho/ValeteOuros.png', 'vermelho', 'ouros', 'valete'),
(72, 2, 'user_guide/img/imagens_Baralho/ValetePaus.png', 'preto', 'paus', 'valete'),
(73, 2, 'user_guide/img/imagens_Baralho/DamaCopas.png', 'vermelho', 'copas', 'dama'),
(74, 2, 'user_guide/img/imagens_Baralho/DamaEspadas.png', 'preto', 'espadas', 'dama'),
(75, 2, 'user_guide/img/imagens_Baralho/DamaOuros.png', 'vermelho', 'ouros', 'dama'),
(76, 2, 'user_guide/img/imagens_Baralho/DamaPaus.png', 'preto', 'paus', 'dama'),
(77, 2, 'user_guide/img/imagens_Baralho/ReiCopas.png', 'vermelho', 'copas', 'rei'),
(78, 2, 'user_guide/img/imagens_Baralho/ReiEspadas.png', 'preto', 'espadas', 'rei'),
(79, 2, 'user_guide/img/imagens_Baralho/ReiOuros.png', 'vermelho', 'ouros', 'rei'),
(80, 2, 'user_guide/img/imagens_Baralho/ReiPaus.png', 'preto', 'paus', 'rei'),
(81, 3, 'user_guide/img/imagens_Bola/1Vermelho.png', 'vermelho', '', '1'),
(82, 3, 'user_guide/img/imagens_Bola/2Vermelho.png', 'vermelho', '', '2'),
(83, 3, 'user_guide/img/imagens_Bola/3Vermelho.png', 'vermelho', '', '3'),
(84, 3, 'user_guide/img/imagens_Bola/4Vermelho.png', 'vermelho', '', '4'),
(85, 3, 'user_guide/img/imagens_Bola/5Vermelho.png', 'vermelho', '', '5'),
(86, 3, 'user_guide/img/imagens_Bola/6Vermelho.png', 'vermelho', '', '6'),
(87, 3, 'user_guide/img/imagens_Bola/7Vermelho.png', 'vermelho', '', '7'),
(88, 3, 'user_guide/img/imagens_Bola/8Vermelho.png', 'vermelho', '', '8'),
(89, 3, 'user_guide/img/imagens_Bola/9Vermelho.png', 'vermelho', '', '9'),
(90, 3, 'user_guide/img/imagens_Bola/10Vermelho.png', 'vermelho', '', '10'),
(91, 3, 'user_guide/img/imagens_Bola/1Azul.png', 'azul', '', '1'),
(92, 3, 'user_guide/img/imagens_Bola/2Azul.png', 'azul', '', '2'),
(93, 3, 'user_guide/img/imagens_Bola/3Azul.png', 'azul', '', '3'),
(94, 3, 'user_guide/img/imagens_Bola/4Azul.png', 'azul', '', '4'),
(95, 3, 'user_guide/img/imagens_Bola/5Azul.png', 'azul', '', '5'),
(96, 3, 'user_guide/img/imagens_Bola/6Azul.png', 'azul', '', '6'),
(97, 3, 'user_guide/img/imagens_Bola/7Azul.png', 'azul', '', '7'),
(98, 3, 'user_guide/img/imagens_Bola/8Azul.png', 'azul', '', '8'),
(99, 3, 'user_guide/img/imagens_Bola/9Azul.png', 'azul', '', '9'),
(100, 3, 'user_guide/img/imagens_Bola/10Azul.png', 'azul', '', '10'),
(101, 3, 'user_guide/img/imagens_Bola/1Amarelo.png', 'amarelo', '', '1'),
(102, 3, 'user_guide/img/imagens_Bola/2Amarelo.png', 'amarelo', '', '2'),
(103, 3, 'user_guide/img/imagens_Bola/3Amarelo.png', 'amarelo', '', '3'),
(104, 3, 'user_guide/img/imagens_Bola/4Amarelo.png', 'amarelo', '', '4'),
(105, 3, 'user_guide/img/imagens_Bola/5Amarelo.png', 'amarelo', '', '5'),
(106, 3, 'user_guide/img/imagens_Bola/6Amarelo.png', 'amarelo', '', '6'),
(107, 3, 'user_guide/img/imagens_Bola/7Amarelo.png', 'amarelo', '', '7'),
(108, 3, 'user_guide/img/imagens_Bola/8Amarelo.png', 'amarelo', '', '8'),
(109, 3, 'user_guide/img/imagens_Bola/9Amarelo.png', 'amarelo', '', '9'),
(110, 3, 'user_guide/img/imagens_Bola/10Amarelo.png', 'amarelo', '', '10'),
(111, 4, 'user_guide/img/imagens_Camisa/1GoleiroAzul.png', 'azul', 'goleiro', '1'),
(112, 4, 'user_guide/img/imagens_Camisa/2ZagueiroAzul.png', 'azul', 'zagueiro', '2'),
(113, 4, 'user_guide/img/imagens_Camisa/3ZagueiroAzul.png', 'azul', 'zagueiro', '3'),
(114, 4, 'user_guide/img/imagens_Camisa/4ZagueiroAzul.png', 'azul', 'zagueiro', '4'),
(115, 4, 'user_guide/img/imagens_Camisa/5MeioCampoAzul.png', 'azul', 'meio-campo', '5'),
(116, 4, 'user_guide/img/imagens_Camisa/6MeioCampoAzul.png', 'azul', 'meio-campo', '6'),
(117, 4, 'user_guide/img/imagens_Camisa/7MeioCampoAzul.png', 'azul', 'meio-campo', '7'),
(118, 4, 'user_guide/img/imagens_Camisa/8MeioCampoAzul.png', 'azul', 'meio-campo', '8'),
(119, 4, 'user_guide/img/imagens_Camisa/9MeioCampoAzul.png', 'azul', 'meio-campo', '9'),
(120, 4, 'user_guide/img/imagens_Camisa/10AtacanteAzul.png', 'azul', 'atacante', '10'),
(121, 4, 'user_guide/img/imagens_Camisa/11AtacanteAzul.png', 'azul', 'atacante', '11'),
(122, 4, 'user_guide/img/imagens_Camisa/1GoleiroAmarelo.png', 'amarelo', 'goleiro', '1'),
(123, 4, 'user_guide/img/imagens_Camisa/2ZagueiroAmarelo.png', 'amarelo', 'zagueiro', '2'),
(124, 4, 'user_guide/img/imagens_Camisa/3ZagueiroAmarelo.png', 'amarelo', 'zagueiro', '3'),
(125, 4, 'user_guide/img/imagens_Camisa/4ZagueiroAmarelo.png', 'amarelo', 'zagueiro', '4'),
(126, 4, 'user_guide/img/imagens_Camisa/5MeioCampoAmarelo.png', 'amarelo', 'meio-campo', '5'),
(127, 4, 'user_guide/img/imagens_Camisa/6MeioCampoAmarelo.png', 'amarelo', 'meio-campo', '6'),
(128, 4, 'user_guide/img/imagens_Camisa/7MeioCampoAmarelo.png', 'amarelo', 'meio-campo', '7'),
(129, 4, 'user_guide/img/imagens_Camisa/8MeioCampoAmarelo.png', 'amarelo', 'meio-campo', '8'),
(130, 4, 'user_guide/img/imagens_Camisa/9MeioCampoAmarelo.png', 'amarelo', 'meio-campo', '9'),
(131, 4, 'user_guide/img/imagens_Camisa/10AtacanteAmarelo.png', 'amarelo', 'atacante', '10'),
(132, 4, 'user_guide/img/imagens_Camisa/11AtacanteAmarelo.png', 'amarelo', 'atacante', '11'),
(133, 4, 'user_guide/img/imagens_Camisa/1GoleiroVerde.png', 'verde', 'goleiro', '1'),
(134, 4, 'user_guide/img/imagens_Camisa/2ZagueiroVerde.png', 'verde', 'zagueiro', '2'),
(135, 4, 'user_guide/img/imagens_Camisa/3ZagueiroVerde.png', 'verde', 'zagueiro', '3'),
(136, 4, 'user_guide/img/imagens_Camisa/4ZagueiroVerde.png', 'verde', 'zagueiro', '4'),
(137, 4, 'user_guide/img/imagens_Camisa/5MeioCampoVerde.png', 'verde', 'meio-campo', '5'),
(138, 4, 'user_guide/img/imagens_Camisa/6MeioCampoVerde.png', 'verde', 'meio-campo', '6'),
(139, 4, 'user_guide/img/imagens_Camisa/7MeioCampoVerde.png', 'verde', 'meio-campo', '7'),
(140, 4, 'user_guide/img/imagens_Camisa/8MeioCampoVerde.png', 'verde', 'meio-campo', '8'),
(141, 4, 'user_guide/img/imagens_Camisa/9MeioCampoVerde.png', 'verde', 'meio-campo', '9'),
(142, 4, 'user_guide/img/imagens_Camisa/10AtacanteVerde.png', 'verde', 'atacante', '10'),
(143, 4, 'user_guide/img/imagens_Camisa/11AtacanteVerde.png', 'verde', 'atacante', '11'),
(144, 4, 'user_guide/img/imagens_Camisa/1GoleiroVermelho.png', 'vermelho', 'goleiro', '1'),
(145, 4, 'user_guide/img/imagens_Camisa/2ZagueiroVermelho.png', 'vermelho', 'zagueiro', '2'),
(146, 4, 'user_guide/img/imagens_Camisa/3ZagueiroVermelho.png', 'vermelho', 'zagueiro', '3'),
(147, 4, 'user_guide/img/imagens_Camisa/4ZagueiroVermelho.png', 'vermelho', 'zagueiro', '4'),
(148, 4, 'user_guide/img/imagens_Camisa/5MeioCampoVermelho.png', 'vermelho', 'meio-campo', '5'),
(149, 4, 'user_guide/img/imagens_Camisa/6MeioCampoVermelho.png', 'vermelho', 'meio-campo', '6'),
(150, 4, 'user_guide/img/imagens_Camisa/7MeioCampoVermelho.png', 'vermelho', 'meio-campo', '7'),
(151, 4, 'user_guide/img/imagens_Camisa/8MeioCampoVermelho.png', 'vermelho', 'meio-campo', '8'),
(152, 4, 'user_guide/img/imagens_Camisa/9MeioCampoVermelho.png', 'vermelho', 'meio-campo', '9'),
(153, 4, 'user_guide/img/imagens_Camisa/10AtacanteVermelho.png', 'vermelho', 'atacante', '10'),
(154, 4, 'user_guide/img/imagens_Camisa/11AtacanteVermelho.png', 'vermelho', 'atacante', '11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estagio`
--

CREATE TABLE `estagio` (
  `id` int(11) NOT NULL,
  `exercicio_id` int(3) NOT NULL,
  `num_propriedades` int(11) DEFAULT NULL,
  `num_elementos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='estagios da solucao de um exercicio\n';

-- --------------------------------------------------------

--
-- Estrutura da tabela `estagio_formula`
--

CREATE TABLE `estagio_formula` (
  `estagio_id` int(11) NOT NULL,
  `formula_id` int(3) NOT NULL,
  `n` int(11) DEFAULT NULL,
  `p` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicio`
--

CREATE TABLE `exercicio` (
  `id` int(3) NOT NULL,
  `universo_id` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `dica` varchar(250) NOT NULL,
  `solucao_relestagio` varchar(45) DEFAULT NULL COMMENT 'relacionamento que une os estagios da soluca ( multiplicacao ou soma)\n',
  `solucao_resfinal` varchar(45) DEFAULT NULL COMMENT 'resultado final esperado',
  `tempo_esperado` int(11) DEFAULT NULL,
  `operacao` varchar(45) DEFAULT NULL COMMENT 'nao sei pq'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `exercicio`
--

INSERT INTO `exercicio` (`id`, `universo_id`, `descricao`, `dica`, `solucao_relestagio`, `solucao_resfinal`, `tempo_esperado`, `operacao`) VALUES
(1, 1, 'Quantas possibilidades de 1 carta tipo Ás?', 'Baralho completo, com 52 cartas, 4 de cada.', NULL, NULL, NULL, NULL),
(2, 2, 'Com um baralho de 32 cartas, quantas mãos de 2 cartas é possível formar com exatamente uma Dama e um Ás?', 'Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que Sete. Portanto, um baralho de 32 cartas possui 8 cartas de cada naipe (7,8,9,10,Valete, Dama, Rei e Ás).', NULL, NULL, NULL, NULL),
(3, 2, 'Com um baralho de 32 cartas, quantas mãos de 5 cartas é possível formar com exatamente 2 cartas de Copas e exatamente duas cartas de Espadas?', 'Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que Sete. Portanto, um baralho de 32 cartas possui 8 cartas de cada naipe (7,8,9,10,Valete, Dama, Rei e Ás).', NULL, NULL, NULL, NULL),
(4, 1, 'Com um baralho de 32 cartas, quantas mãos de 20 cartas é possível formar com 3 ases, 4 espadas e 16 cartas vermelhas?', 'O conjunto de subconjuntos com 20 elementos tomados em um baralho com 32 cartas. Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que 7 (7,8,9,10, Valete, Dama, Rei e Ás).  ', NULL, NULL, NULL, NULL),
(5, 4, 'Quantos times de 13 jogadores podemos formar com exatamente 5 jogadores do time azul e exatamente 5 jogadores do time verde?', 'O Universo Futebol corresponde a quatro equipe com 11 jogadores. Equipe Azul, Amarelo, Verde e Vermelho. O jogador número 1 sempre será goleiro, de 2 a 4 são todos zagueiros. Meio-campo são de 5 a 9 enquanto 10 e 11 são atacantes.', NULL, NULL, NULL, NULL),
(6, 4, 'Quantos jogadores existem que tenham camisa número 11?', 'Lembre-se que são 4 times.', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `formula`
--

CREATE TABLE `formula` (
  `id` int(3) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `explicacao` varchar(300) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `expressao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `formula`
--

INSERT INTO `formula` (`id`, `imagem`, `explicacao`, `nome`, `expressao`) VALUES
(1, 'user_guide/img/formulas/Arranjo.png', 'Dado um conjunto qualquer com n elementos e um valor para natural p. Será formado um arranjo simples de p elementos distintos de um conjunto qualquer seqüência formada por p elementos do conjunto.', 'Arranjo simples', 'A(n,p)'),
(2, 'user_guide/img/formulas/Combinacao.png', 'As combinações simples podem ser consideradas um tipo particular de arranjo simples, pois os agrupamentos formados nos arranjos são diferenciados pela ordem e pela natureza dos seus elementos. A combinação simples são esses arranjos diferenciados a...', 'Combinação simples', 'C(n,p)'),
(3, 'user_guide/img/formulas/Permutacao.jpg', 'Podemos considerar a permutação simples como um caso particular de arranjo, onde os elementos formarão agrupamentos que se diferenciarão somente pela ordem.', 'Permutação simples', 'Pn = p!');

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
-- Indexes for table `condicao`
--
ALTER TABLE `condicao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_condicao_estagio1_idx` (`estagio_id`);

--
-- Indexes for table `elemento`
--
ALTER TABLE `elemento`
  ADD PRIMARY KEY (`id`,`universo_id`),
  ADD KEY `fk_elemento_universo1_idx` (`universo_id`);

--
-- Indexes for table `estagio`
--
ALTER TABLE `estagio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_estagio_exercicio_idx` (`exercicio_id`);

--
-- Indexes for table `estagio_formula`
--
ALTER TABLE `estagio_formula`
  ADD PRIMARY KEY (`estagio_id`,`formula_id`),
  ADD KEY `fk_estagio_has_formula_formula1_idx` (`formula_id`),
  ADD KEY `fk_estagio_has_formula_estagio1_idx` (`estagio_id`);

--
-- Indexes for table `exercicio`
--
ALTER TABLE `exercicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_exercicio_universo1_idx` (`universo_id`);

--
-- Indexes for table `formula`
--
ALTER TABLE `formula`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universo`
--
ALTER TABLE `universo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `condicao`
--
ALTER TABLE `condicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `elemento`
--
ALTER TABLE `elemento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
--
-- AUTO_INCREMENT for table `estagio`
--
ALTER TABLE `estagio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exercicio`
--
ALTER TABLE `exercicio`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `formula`
--
ALTER TABLE `formula`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `universo`
--
ALTER TABLE `universo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `condicao`
--
ALTER TABLE `condicao`
  ADD CONSTRAINT `fk_condicao_estagio1` FOREIGN KEY (`estagio_id`) REFERENCES `estagio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `elemento`
--
ALTER TABLE `elemento`
  ADD CONSTRAINT `fk_elemento_universo1` FOREIGN KEY (`universo_id`) REFERENCES `universo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estagio`
--
ALTER TABLE `estagio`
  ADD CONSTRAINT `fk_estagio_exercicio` FOREIGN KEY (`exercicio_id`) REFERENCES `exercicio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estagio_formula`
--
ALTER TABLE `estagio_formula`
  ADD CONSTRAINT `fk_estagio_has_formula_estagio1` FOREIGN KEY (`estagio_id`) REFERENCES `estagio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estagio_has_formula_formula1` FOREIGN KEY (`formula_id`) REFERENCES `formula` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `exercicio`
--
ALTER TABLE `exercicio`
  ADD CONSTRAINT `fk_exercicio_universo1` FOREIGN KEY (`universo_id`) REFERENCES `universo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
