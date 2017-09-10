-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Set-2017 às 22:46
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

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
-- Estrutura da tabela `atributos`
--

CREATE TABLE `atributos` (
  `id` int(11) NOT NULL,
  `elemento_id` int(11) NOT NULL,
  `universo_id` int(11) NOT NULL,
  `chave` varchar(45) DEFAULT NULL,
  `chave_desc` varchar(100) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `predicado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atributos`
--

INSERT INTO `atributos` (`id`, `elemento_id`, `universo_id`, `chave`, `chave_desc`, `valor`, `predicado`) VALUES
(1, 1, 1, 'suit', 'Naipe', 'copas', 'vermelho'),
(2, 2, 1, 'suit', 'Naipe', 'espadas', 'preto'),
(3, 3, 1, 'suit', 'Naipe', 'ouros', 'vermelho'),
(4, 4, 1, 'suit', 'Naipe', 'paus', 'preto'),
(5, 5, 1, 'suit', 'Naipe', 'copas', 'vermelho'),
(6, 6, 1, 'suit', 'Naipe', 'espadas', 'preto'),
(7, 7, 1, 'suit', 'Naipe', 'ouros', 'vermelho'),
(8, 8, 1, 'suit', 'Naipe', 'paus', 'preto'),
(9, 9, 1, 'suit', 'Naipe', 'copas', 'vermelho'),
(10, 10, 1, 'suit', 'Naipe', 'espadas', 'preto'),
(11, 11, 1, 'suit', 'Naipe', 'ouros', 'vermelho'),
(12, 12, 1, 'suit', 'Naipe', 'paus', 'preto'),
(13, 13, 1, 'suit', 'Naipe', 'copas', 'vermelho'),
(14, 14, 1, 'suit', 'Naipe', 'espadas', 'preto'),
(15, 15, 1, 'suit', 'Naipe', 'ouros', 'vermelho'),
(16, 16, 1, 'suit', 'Naipe', 'paus', 'preto'),
(17, 17, 1, 'suit', 'Naipe', 'copas', 'vermelho'),
(18, 18, 1, 'suit', 'Naipe', 'espadas', 'preto'),
(19, 19, 1, 'suit', 'Naipe', 'ouros', 'vermelho'),
(20, 20, 1, 'suit', 'Naipe', 'paus', 'preto'),
(21, 21, 1, 'suit', 'Naipe', 'copas', 'vermelho'),
(22, 22, 1, 'suit', 'Naipe', 'espadas', 'preto'),
(23, 23, 1, 'suit', 'Naipe', 'ouros', 'vermelho'),
(24, 24, 1, 'suit', 'Naipe', 'paus', 'preto'),
(25, 25, 1, 'suit', 'Naipe', 'copas', 'vermelho'),
(26, 26, 1, 'suit', 'Naipe', 'espadas', 'preto'),
(27, 27, 1, 'suit', 'Naipe', 'ouros', 'vermelho'),
(28, 28, 1, 'suit', 'Naipe', 'paus', 'preto'),
(29, 29, 1, 'suit', 'Naipe', 'copas', 'vermelho'),
(30, 30, 1, 'suit', 'Naipe', 'espadas', 'preto'),
(31, 31, 1, 'suit', 'Naipe', 'ouros', 'vermelho'),
(32, 32, 1, 'suit', 'Naipe', 'paus', 'preto'),
(33, 33, 1, 'suit', 'Naipe', 'copas', 'vermelho'),
(34, 34, 1, 'suit', 'Naipe', 'espadas', 'preto'),
(35, 35, 1, 'suit', 'Naipe', 'ouros', 'vermelho'),
(36, 36, 1, 'suit', 'Naipe', 'paus', 'preto'),
(37, 37, 1, 'suit', 'Naipe', 'copas', 'vermelho'),
(38, 38, 1, 'suit', 'Naipe', 'espadas', 'preto'),
(39, 39, 1, 'suit', 'Naipe', 'ouros', 'vermelho'),
(40, 40, 1, 'suit', 'Naipe', 'paus', 'preto'),
(41, 41, 1, 'suit', 'Naipe', 'copas', 'vermelho'),
(42, 42, 1, 'suit', 'Naipe', 'espadas', 'preto'),
(43, 43, 1, 'suit', 'Naipe', 'ouros', 'vermelho'),
(44, 44, 1, 'suit', 'Naipe', 'paus', 'preto'),
(45, 45, 1, 'suit', 'Naipe', 'copas', 'vermelho'),
(46, 46, 1, 'suit', 'Naipe', 'espadas', 'preto'),
(47, 47, 1, 'suit', 'Naipe', 'ouros', 'vermelho'),
(48, 48, 1, 'suit', 'Naipe', 'paus', 'preto'),
(49, 49, 1, 'suit', 'Naipe', 'copas', 'vermelho'),
(50, 50, 1, 'suit', 'Naipe', 'espadas', 'preto'),
(51, 51, 1, 'suit', 'Naipe', 'ouros', 'vermelho'),
(52, 52, 1, 'suit', 'Naipe', 'paus', 'preto'),
(64, 1, 1, 'value', 'Valor', 'as', NULL),
(65, 2, 1, 'value', 'Valor', 'as', NULL),
(66, 3, 1, 'value', 'Valor', 'as', NULL),
(67, 4, 1, 'value', 'Valor', 'as', NULL),
(68, 5, 1, 'value', 'Valor', '2', NULL),
(69, 6, 1, 'value', 'Valor', '2', NULL),
(70, 7, 1, 'value', 'Valor', '2', NULL),
(71, 8, 1, 'value', 'Valor', '2', NULL),
(72, 9, 1, 'value', 'Valor', '3', NULL),
(73, 10, 1, 'value', 'Valor', '3', NULL),
(74, 11, 1, 'value', 'Valor', '3', NULL),
(75, 12, 1, 'value', 'Valor', '3', NULL),
(76, 13, 1, 'value', 'Valor', '4', NULL),
(77, 14, 1, 'value', 'Valor', '4', NULL),
(78, 15, 1, 'value', 'Valor', '4', NULL),
(79, 16, 1, 'value', 'Valor', '4', NULL),
(80, 17, 1, 'value', 'Valor', '5', NULL),
(81, 18, 1, 'value', 'Valor', '5', NULL),
(82, 19, 1, 'value', 'Valor', '5', NULL),
(83, 20, 1, 'value', 'Valor', '5', NULL),
(84, 21, 1, 'value', 'Valor', '6', NULL),
(85, 22, 1, 'value', 'Valor', '6', NULL),
(86, 23, 1, 'value', 'Valor', '6', NULL),
(87, 24, 1, 'value', 'Valor', '6', NULL),
(88, 25, 1, 'value', 'Valor', '7', NULL),
(89, 26, 1, 'value', 'Valor', '7', NULL),
(90, 27, 1, 'value', 'Valor', '7', NULL),
(91, 28, 1, 'value', 'Valor', '7', NULL),
(92, 29, 1, 'value', 'Valor', '8', NULL),
(93, 30, 1, 'value', 'Valor', '8', NULL),
(94, 31, 1, 'value', 'Valor', '8', NULL),
(95, 32, 1, 'value', 'Valor', '8', NULL),
(96, 33, 1, 'value', 'Valor', '9', NULL),
(97, 34, 1, 'value', 'Valor', '9', NULL),
(98, 35, 1, 'value', 'Valor', '9', NULL),
(99, 36, 1, 'value', 'Valor', '9', NULL),
(100, 37, 1, 'value', 'Valor', '10', NULL),
(101, 38, 1, 'value', 'Valor', '10', NULL),
(102, 39, 1, 'value', 'Valor', '10', NULL),
(103, 40, 1, 'value', 'Valor', '10', NULL),
(104, 41, 1, 'value', 'Valor', 'valete', NULL),
(105, 42, 1, 'value', 'Valor', 'valete', NULL),
(106, 43, 1, 'value', 'Valor', 'valete', NULL),
(107, 44, 1, 'value', 'Valor', 'valete', NULL),
(108, 45, 1, 'value', 'Valor', 'dama', NULL),
(109, 46, 1, 'value', 'Valor', 'dama', NULL),
(110, 47, 1, 'value', 'Valor', 'dama', NULL),
(111, 48, 1, 'value', 'Valor', 'dama', NULL),
(112, 49, 1, 'value', 'Valor', 'rei', NULL),
(113, 50, 1, 'value', 'Valor', 'rei', NULL),
(114, 51, 1, 'value', 'Valor', 'rei', NULL),
(115, 52, 1, 'value', 'Valor', 'rei', NULL),
(116, 81, 3, 'value', 'Valor', '1', 'vermelho'),
(117, 82, 3, 'value', 'Valor', '2', 'vermelho'),
(118, 83, 3, 'value', 'Valor', '3', 'vermelho'),
(119, 84, 3, 'value', 'Valor', '4', 'vermelho'),
(120, 85, 3, 'value', 'Valor', '5', 'vermelho'),
(121, 86, 3, 'value', 'Valor', '6', 'vermelho'),
(122, 87, 3, 'value', 'Valor', '7', 'vermelho'),
(123, 88, 3, 'value', 'Valor', '8', 'vermelho'),
(124, 89, 3, 'value', 'Valor', '9', 'vermelho'),
(125, 90, 3, 'value', 'Valor', '10', 'vermelho'),
(126, 91, 3, 'value', 'Valor', '1', 'azul'),
(127, 92, 3, 'value', 'Valor', '2', 'azul'),
(128, 93, 3, 'value', 'Valor', '3', 'azul'),
(129, 94, 3, 'value', 'Valor', '4', 'azul'),
(130, 95, 3, 'value', 'Valor', '5', 'azul'),
(131, 96, 3, 'value', 'Valor', '6', 'azul'),
(132, 97, 3, 'value', 'Valor', '7', 'azul'),
(133, 98, 3, 'value', 'Valor', '8', 'azul'),
(134, 99, 3, 'value', 'Valor', '9', 'azul'),
(135, 100, 3, 'value', 'Valor', '10', 'azul'),
(136, 101, 3, 'value', 'Valor', '1', 'amarelo'),
(137, 102, 3, 'value', 'Valor', '2', 'amarelo'),
(138, 103, 3, 'value', 'Valor', '3', 'amarelo'),
(139, 104, 3, 'value', 'Valor', '4', 'amarelo'),
(140, 105, 3, 'value', 'Valor', '5', 'amarelo'),
(141, 106, 3, 'value', 'Valor', '6', 'amarelo'),
(142, 107, 3, 'value', 'Valor', '7', 'amarelo'),
(143, 108, 3, 'value', 'Valor', '8', 'amarelo'),
(144, 109, 3, 'value', 'Valor', '9', 'amarelo'),
(145, 110, 3, 'value', 'Valor', '10', 'amarelo'),
(146, 111, 4, 'jogador', NULL, '1', 'goleiro'),
(147, 112, 4, 'jogador', NULL, '2', 'zagueiro'),
(148, 113, 4, 'jogador', NULL, '3', 'zagueiro'),
(149, 114, 4, 'jogador', NULL, '4', 'zagueiro'),
(150, 115, 4, 'jogador', NULL, '5', 'meio-campo'),
(151, 116, 4, 'jogador', NULL, '6', 'meio-campo'),
(152, 117, 4, 'jogador', NULL, '7', 'meio-campo'),
(153, 118, 4, 'jogador', NULL, '8', 'meio-campo'),
(154, 119, 4, 'jogador', NULL, '9', 'meio-campo'),
(155, 120, 4, 'jogador', NULL, '10', 'atacante'),
(156, 121, 4, 'jogador', NULL, '11', 'atacante'),
(157, 122, 4, 'jogador', NULL, '1', 'goleio'),
(158, 123, 4, 'jogador', NULL, '2', 'zagueiro'),
(159, 124, 4, 'jogador', NULL, '3', 'zagueiro'),
(160, 125, 4, 'jogador', NULL, '4', 'zagueiro'),
(161, 126, 4, 'jogador', NULL, '5', 'meio-campo'),
(162, 127, 4, 'jogador', NULL, '6', 'meio-campo'),
(163, 128, 4, 'jogador', NULL, '7', 'meio-campo'),
(164, 129, 4, 'jogador', NULL, '8', 'meio-campo'),
(165, 130, 4, 'jogador', NULL, '9', 'meio-campo'),
(166, 131, 4, 'jogador', NULL, '10', 'atacante'),
(167, 132, 4, 'jogador', NULL, '11', 'atacante'),
(168, 133, 4, 'jogador', NULL, '1', 'goleiro'),
(169, 134, 4, 'jogador', NULL, '2', 'zagueiro'),
(170, 135, 4, 'jogador', NULL, '3', 'zagueiro'),
(171, 136, 4, 'jogador', NULL, '4', 'zagueiro'),
(172, 137, 4, 'jogador', NULL, '5', 'meio-campo'),
(173, 138, 4, 'jogador', NULL, '6', 'meio-campo'),
(174, 139, 4, 'jogador', NULL, '7', 'meio-campo'),
(175, 140, 4, 'jogador', NULL, '8', 'meio-campo'),
(176, 141, 4, 'jogador', NULL, '9', 'meio-campo'),
(177, 142, 4, 'jogador', NULL, '10', 'atacante'),
(178, 143, 4, 'jogador', NULL, '11', 'atacante'),
(179, 144, 4, 'jogador', NULL, '1', 'goleio'),
(180, 145, 4, 'jogador', NULL, '2', 'zagueiro'),
(181, 146, 4, 'jogador', NULL, '3', 'zagueiro'),
(182, 147, 4, 'jogador', NULL, '4', 'zagueiro'),
(183, 148, 4, 'jogador', NULL, '5', 'meio-campo'),
(184, 149, 4, 'jogador', NULL, '6', 'meio-campo'),
(185, 150, 4, 'jogador', NULL, '7', 'meio-campo'),
(186, 151, 4, 'jogador', NULL, '8', 'meio-campo'),
(187, 152, 4, 'jogador', NULL, '9', 'meio-campo'),
(188, 153, 4, 'jogador', NULL, '10', 'atacante'),
(189, 154, 4, 'jogador', NULL, '11', 'atacante'),
(190, 111, 4, 'time', NULL, 'azul', NULL),
(191, 112, 4, 'time', NULL, 'azul', NULL),
(192, 113, 4, 'time', NULL, 'azul', NULL),
(193, 114, 4, 'time', NULL, 'azul', NULL),
(194, 115, 4, 'time', NULL, 'azul', NULL),
(195, 116, 4, 'time', NULL, 'azul', NULL),
(196, 117, 4, 'time', NULL, 'azul', NULL),
(197, 118, 4, 'time', NULL, 'azul', NULL),
(198, 119, 4, 'time', NULL, 'azul', NULL),
(199, 120, 4, 'time', NULL, 'azul', NULL),
(200, 121, 4, 'time', NULL, 'azul', NULL),
(201, 122, 4, 'time', NULL, 'amarelo', NULL),
(202, 123, 4, 'time', NULL, 'amarelo', NULL),
(203, 124, 4, 'time', NULL, 'amarelo', NULL),
(204, 125, 4, 'time', NULL, 'amarelo', NULL),
(205, 126, 4, 'time', NULL, 'amarelo', NULL),
(206, 127, 4, 'time', NULL, 'amarelo', NULL),
(207, 128, 4, 'time', NULL, 'amarelo', NULL),
(208, 129, 4, 'time', NULL, 'amarelo', NULL),
(209, 130, 4, 'time', NULL, 'amarelo', NULL),
(210, 131, 4, 'time', NULL, 'amarelo', NULL),
(211, 132, 4, 'time', NULL, 'amarelo', NULL),
(212, 133, 4, 'time', NULL, 'verde', NULL),
(214, 134, 4, 'time', NULL, 'verde', NULL),
(215, 135, 4, 'time', NULL, 'verde', NULL),
(216, 136, 4, 'time', NULL, 'verde', NULL),
(217, 137, 4, 'time', NULL, 'verde', NULL),
(218, 138, 4, 'time', NULL, 'verde', NULL),
(219, 139, 4, 'time', NULL, 'verde', NULL),
(220, 140, 4, 'time', NULL, 'verde', NULL),
(221, 141, 4, 'time', NULL, 'verde', NULL),
(222, 142, 4, 'time', NULL, 'verde', NULL),
(223, 143, 4, 'time', NULL, 'verde', NULL),
(224, 144, 4, 'time', NULL, 'vermelho', NULL),
(225, 145, 4, 'time', NULL, 'vermelho', NULL),
(226, 146, 4, 'time', NULL, 'vermelho', NULL),
(227, 147, 4, 'time', NULL, 'vermelho', NULL),
(228, 148, 4, 'time', NULL, 'vermelho', NULL),
(229, 149, 4, 'time', NULL, 'vermelho', NULL),
(230, 150, 4, 'time', NULL, 'vermelho', NULL),
(231, 151, 4, 'time', NULL, 'vermelho', NULL),
(232, 152, 4, 'time', NULL, 'vermelho', NULL),
(233, 153, 4, 'time', NULL, 'vermelho', NULL),
(234, 154, 4, 'time', NULL, 'vermelho', NULL),
(235, 155, 2, 'suit', 'Naipe', 'copas', 'vermelho'),
(236, 156, 2, 'suit', 'Naipe', 'espadas', 'preto'),
(237, 157, 2, 'suit', 'Naipe', 'ouros', 'vermelho'),
(238, 158, 2, 'suit', 'Naipe', 'paus', 'preto'),
(239, 53, 2, 'suit', 'Naipe', 'copas', 'vermelho'),
(240, 54, 2, 'suit', 'Naipe', 'espadas', 'preto'),
(241, 55, 2, 'suit', 'Naipe', 'ouros', 'vermelho'),
(242, 56, 2, 'suit', 'Naipe', 'paus', 'preto'),
(243, 57, 2, 'suit', 'Naipe', 'copas', 'vermelho'),
(244, 58, 2, 'suit', 'Naipe', 'espadas', 'preto'),
(245, 59, 2, 'suit', 'Naipe', 'ouros', 'vermelho'),
(246, 60, 2, 'suit', 'Naipe', 'paus', 'preto'),
(247, 61, 2, 'suit', 'Naipe', 'copas', 'vermelho'),
(248, 62, 2, 'suit', 'Naipe', 'espadas', 'preto'),
(249, 63, 2, 'suit', 'Naipe', 'ouros', 'vermelho'),
(250, 64, 2, 'suit', 'Naipe', 'paus', 'preto'),
(251, 65, 2, 'suit', 'Naipe', 'copas', 'vermelho'),
(252, 66, 2, 'suit', 'Naipe', 'espadas', 'preto'),
(253, 67, 2, 'suit', 'Naipe', 'ouros', 'vermelho'),
(254, 68, 2, 'suit', 'Naipe', 'paus', 'preto'),
(255, 69, 2, 'suit', 'Naipe', 'copas', 'vermelho'),
(256, 70, 2, 'suit', 'Naipe', 'espadas', 'preto'),
(257, 71, 2, 'suit', 'Naipe', 'ouros', 'vermelho'),
(258, 72, 2, 'suit', 'Naipe', 'paus', 'preto'),
(259, 73, 2, 'suit', 'Naipe', 'copas', 'vermelho'),
(260, 74, 2, 'suit', 'Naipe', 'espadas', 'preto'),
(261, 75, 2, 'suit', 'Naipe', 'ouros', 'vermelho'),
(262, 76, 2, 'suit', 'Naipe', 'paus', 'preto'),
(263, 77, 2, 'suit', 'Naipe', 'copas', 'vermelho'),
(264, 78, 2, 'suit', 'Naipe', 'espadas', 'preto'),
(265, 79, 2, 'suit', 'Naipe', 'ouros', 'vermelho'),
(266, 80, 2, 'suit', 'Naipe', 'paus', 'preto'),
(267, 155, 2, 'value', 'Valor', 'as', NULL),
(268, 156, 2, 'value', 'Valor', 'as', NULL),
(269, 157, 2, 'value', 'Valor', 'as', NULL),
(270, 158, 2, 'value', 'Valor', 'as', NULL),
(271, 53, 2, 'value', 'Valor', '7', NULL),
(272, 54, 2, 'value', 'Valor', '7', NULL),
(273, 55, 2, 'value', 'Valor', '7', NULL),
(274, 56, 2, 'value', 'Valor', '7', NULL),
(275, 57, 2, 'value', 'Valor', '8', NULL),
(276, 58, 2, 'value', 'Valor', '8', NULL),
(277, 59, 2, 'value', 'Valor', '8', NULL),
(278, 60, 2, 'value', 'Valor', '8', NULL),
(279, 61, 2, 'value', 'Valor', '9', NULL),
(280, 62, 2, 'value', 'Valor', '9', NULL),
(281, 63, 2, 'value', 'Valor', '9', NULL),
(282, 64, 2, 'value', 'Valor', '9', NULL),
(283, 65, 2, 'value', 'Valor', '10', NULL),
(284, 66, 2, 'value', 'Valor', '10', NULL),
(285, 67, 2, 'value', 'Valor', '10', NULL),
(286, 68, 2, 'value', 'Valor', '10', NULL),
(287, 69, 2, 'value', 'Valor', 'valete', NULL),
(288, 70, 2, 'value', 'Valor', 'valete', NULL),
(289, 71, 2, 'value', 'Valor', 'valete', NULL),
(290, 72, 2, 'value', 'Valor', 'valete', NULL),
(291, 73, 2, 'value', 'Valor', 'dama', NULL),
(292, 74, 2, 'value', 'Valor', 'dama', NULL),
(293, 75, 2, 'value', 'Valor', 'dama', NULL),
(294, 76, 2, 'value', 'Valor', 'dama', NULL),
(295, 77, 2, 'value', 'Valor', 'rei', NULL),
(296, 78, 2, 'value', 'Valor', 'rei', NULL),
(297, 79, 2, 'value', 'Valor', 'rei', NULL),
(298, 80, 2, 'value', 'Valor', 'rei', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristica`
--

CREATE TABLE `caracteristica` (
  `id` int(11) NOT NULL,
  `expressao_id` int(11) NOT NULL,
  `valor` varchar(255) DEFAULT NULL COMMENT 'representa o atributo do elemento que cumpra com a valor ou predicado indicado aqui'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `caracteristica`
--

INSERT INTO `caracteristica` (`id`, `expressao_id`, `valor`) VALUES
(1, 1, 'as'),
(2, 2, 'as'),
(3, 3, 'dama');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `elemento`
--

CREATE TABLE `elemento` (
  `id` int(11) NOT NULL,
  `universo_id` int(11) NOT NULL,
  `imagem` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `elemento`
--

INSERT INTO `elemento` (`id`, `universo_id`, `imagem`) VALUES
(1, 1, 'user_guide/img/imagens_Baralho/AsCopas.png'),
(2, 1, 'user_guide/img/imagens_Baralho/AsEspadas.png'),
(3, 1, 'user_guide/img/imagens_Baralho/AsOuros.png'),
(4, 1, 'user_guide/img/imagens_Baralho/AsPaus.png'),
(5, 1, 'user_guide/img/imagens_Baralho/DoisCopas.png'),
(6, 1, 'user_guide/img/imagens_Baralho/DoisEspadas.png'),
(7, 1, 'user_guide/img/imagens_Baralho/DoisOuros.png'),
(8, 1, 'user_guide/img/imagens_Baralho/DoisPaus.png'),
(9, 1, 'user_guide/img/imagens_Baralho/TresCopas.png'),
(10, 1, 'user_guide/img/imagens_Baralho/TresEspadas.png'),
(11, 1, 'user_guide/img/imagens_Baralho/TresOuros.png'),
(12, 1, 'user_guide/img/imagens_Baralho/TresPaus.png'),
(13, 1, 'user_guide/img/imagens_Baralho/QuatroCopas.png'),
(14, 1, 'user_guide/img/imagens_Baralho/QuatroEspadas.png'),
(15, 1, 'user_guide/img/imagens_Baralho/QuatroOuros.png'),
(16, 1, 'user_guide/img/imagens_Baralho/QuatroPaus.png'),
(17, 1, 'user_guide/img/imagens_Baralho/CincoCopas.png'),
(18, 1, 'user_guide/img/imagens_Baralho/CincoEspadas.png'),
(19, 1, 'user_guide/img/imagens_Baralho/CincoOuros.png'),
(20, 1, 'user_guide/img/imagens_Baralho/CincoPaus.png'),
(21, 1, 'user_guide/img/imagens_Baralho/SeisCopas.png'),
(22, 1, 'user_guide/img/imagens_Baralho/SeisEspadas.png'),
(23, 1, 'user_guide/img/imagens_Baralho/SeisOuros.png'),
(24, 1, 'user_guide/img/imagens_Baralho/SeisPaus.png'),
(25, 1, 'user_guide/img/imagens_Baralho/SeteCopas.png'),
(26, 1, 'user_guide/img/imagens_Baralho/SeteEspadas.png'),
(27, 1, 'user_guide/img/imagens_Baralho/SeteOuros.png'),
(28, 1, 'user_guide/img/imagens_Baralho/SetePaus.png'),
(29, 1, 'user_guide/img/imagens_Baralho/OitoCopas.png'),
(30, 1, 'user_guide/img/imagens_Baralho/OitoEspadas.png'),
(31, 1, 'user_guide/img/imagens_Baralho/OitoOuros.png'),
(32, 1, 'user_guide/img/imagens_Baralho/OitoPaus.png'),
(33, 1, 'user_guide/img/imagens_Baralho/NoveCopas.png'),
(34, 1, 'user_guide/img/imagens_Baralho/NoveEspadas.png'),
(35, 1, 'user_guide/img/imagens_Baralho/NoveOuros.png'),
(36, 1, 'user_guide/img/imagens_Baralho/NovePaus.png'),
(37, 1, 'user_guide/img/imagens_Baralho/DezCopas.png'),
(38, 1, 'user_guide/img/imagens_Baralho/DezEspadas.png'),
(39, 1, 'user_guide/img/imagens_Baralho/DezOuros.png'),
(40, 1, 'user_guide/img/imagens_Baralho/DezPaus.png'),
(41, 1, 'user_guide/img/imagens_Baralho/ValeteCopas.png'),
(42, 1, 'user_guide/img/imagens_Baralho/ValeteEspadas.png'),
(43, 1, 'user_guide/img/imagens_Baralho/ValeteOuros.png'),
(44, 1, 'user_guide/img/imagens_Baralho/ValetePaus.png'),
(45, 1, 'user_guide/img/imagens_Baralho/DamaCopas.png'),
(46, 1, 'user_guide/img/imagens_Baralho/DamaEspadas.png'),
(47, 1, 'user_guide/img/imagens_Baralho/DamaOuros.png'),
(48, 1, 'user_guide/img/imagens_Baralho/DamaPaus.png'),
(49, 1, 'user_guide/img/imagens_Baralho/ReiCopas.png'),
(50, 1, 'user_guide/img/imagens_Baralho/ReiEspadas.png'),
(51, 1, 'user_guide/img/imagens_Baralho/ReiOuros.png'),
(52, 1, 'user_guide/img/imagens_Baralho/ReiPaus.png'),
(53, 2, 'user_guide/img/imagens_Baralho/SeteCopas.png'),
(54, 2, 'user_guide/img/imagens_Baralho/SeteEspadas.png'),
(55, 2, 'user_guide/img/imagens_Baralho/SeteOuros.png'),
(56, 2, 'user_guide/img/imagens_Baralho/SetePaus.png'),
(57, 2, 'user_guide/img/imagens_Baralho/OitoCopas.png'),
(58, 2, 'user_guide/img/imagens_Baralho/OitoEspadas.png'),
(59, 2, 'user_guide/img/imagens_Baralho/OitoOuros.png'),
(60, 2, 'user_guide/img/imagens_Baralho/OitoPaus.png'),
(61, 2, 'user_guide/img/imagens_Baralho/NoveCopas.png'),
(62, 2, 'user_guide/img/imagens_Baralho/NoveEspadas.png'),
(63, 2, 'user_guide/img/imagens_Baralho/NoveOuros.png'),
(64, 2, 'user_guide/img/imagens_Baralho/NovePaus.png'),
(65, 2, 'user_guide/img/imagens_Baralho/DezCopas.png'),
(66, 2, 'user_guide/img/imagens_Baralho/DezEspadas.png'),
(67, 2, 'user_guide/img/imagens_Baralho/DezOuros.png'),
(68, 2, 'user_guide/img/imagens_Baralho/DezPaus.png'),
(69, 2, 'user_guide/img/imagens_Baralho/ValeteCopas.png'),
(70, 2, 'user_guide/img/imagens_Baralho/ValeteEspadas.png'),
(71, 2, 'user_guide/img/imagens_Baralho/ValeteOuros.png'),
(72, 2, 'user_guide/img/imagens_Baralho/ValetePaus.png'),
(73, 2, 'user_guide/img/imagens_Baralho/DamaCopas.png'),
(74, 2, 'user_guide/img/imagens_Baralho/DamaEspadas.png'),
(75, 2, 'user_guide/img/imagens_Baralho/DamaOuros.png'),
(76, 2, 'user_guide/img/imagens_Baralho/DamaPaus.png'),
(77, 2, 'user_guide/img/imagens_Baralho/ReiCopas.png'),
(78, 2, 'user_guide/img/imagens_Baralho/ReiEspadas.png'),
(79, 2, 'user_guide/img/imagens_Baralho/ReiOuros.png'),
(80, 2, 'user_guide/img/imagens_Baralho/ReiPaus.png'),
(81, 3, 'user_guide/img/imagens_Bola/1Vermelho.png'),
(82, 3, 'user_guide/img/imagens_Bola/2Vermelho.png'),
(83, 3, 'user_guide/img/imagens_Bola/3Vermelho.png'),
(84, 3, 'user_guide/img/imagens_Bola/4Vermelho.png'),
(85, 3, 'user_guide/img/imagens_Bola/5Vermelho.png'),
(86, 3, 'user_guide/img/imagens_Bola/6Vermelho.png'),
(87, 3, 'user_guide/img/imagens_Bola/7Vermelho.png'),
(88, 3, 'user_guide/img/imagens_Bola/8Vermelho.png'),
(89, 3, 'user_guide/img/imagens_Bola/9Vermelho.png'),
(90, 3, 'user_guide/img/imagens_Bola/10Vermelho.png'),
(91, 3, 'user_guide/img/imagens_Bola/1Azul.png'),
(92, 3, 'user_guide/img/imagens_Bola/2Azul.png'),
(93, 3, 'user_guide/img/imagens_Bola/3Azul.png'),
(94, 3, 'user_guide/img/imagens_Bola/4Azul.png'),
(95, 3, 'user_guide/img/imagens_Bola/5Azul.png'),
(96, 3, 'user_guide/img/imagens_Bola/6Azul.png'),
(97, 3, 'user_guide/img/imagens_Bola/7Azul.png'),
(98, 3, 'user_guide/img/imagens_Bola/8Azul.png'),
(99, 3, 'user_guide/img/imagens_Bola/9Azul.png'),
(100, 3, 'user_guide/img/imagens_Bola/10Azul.png'),
(101, 3, 'user_guide/img/imagens_Bola/1Amarelo.png'),
(102, 3, 'user_guide/img/imagens_Bola/2Amarelo.png'),
(103, 3, 'user_guide/img/imagens_Bola/3Amarelo.png'),
(104, 3, 'user_guide/img/imagens_Bola/4Amarelo.png'),
(105, 3, 'user_guide/img/imagens_Bola/5Amarelo.png'),
(106, 3, 'user_guide/img/imagens_Bola/6Amarelo.png'),
(107, 3, 'user_guide/img/imagens_Bola/7Amarelo.png'),
(108, 3, 'user_guide/img/imagens_Bola/8Amarelo.png'),
(109, 3, 'user_guide/img/imagens_Bola/9Amarelo.png'),
(110, 3, 'user_guide/img/imagens_Bola/10Amarelo.png'),
(111, 4, 'user_guide/img/imagens_Camisa/1GoleiroAzul.png'),
(112, 4, 'user_guide/img/imagens_Camisa/2ZagueiroAzul.png'),
(113, 4, 'user_guide/img/imagens_Camisa/3ZagueiroAzul.png'),
(114, 4, 'user_guide/img/imagens_Camisa/4ZagueiroAzul.png'),
(115, 4, 'user_guide/img/imagens_Camisa/5MeioCampoAzul.png'),
(116, 4, 'user_guide/img/imagens_Camisa/6MeioCampoAzul.png'),
(117, 4, 'user_guide/img/imagens_Camisa/7MeioCampoAzul.png'),
(118, 4, 'user_guide/img/imagens_Camisa/8MeioCampoAzul.png'),
(119, 4, 'user_guide/img/imagens_Camisa/9MeioCampoAzul.png'),
(120, 4, 'user_guide/img/imagens_Camisa/10AtacanteAzul.png'),
(121, 4, 'user_guide/img/imagens_Camisa/11AtacanteAzul.png'),
(122, 4, 'user_guide/img/imagens_Camisa/1GoleiroAmarelo.png'),
(123, 4, 'user_guide/img/imagens_Camisa/2ZagueiroAmarelo.png'),
(124, 4, 'user_guide/img/imagens_Camisa/3ZagueiroAmarelo.png'),
(125, 4, 'user_guide/img/imagens_Camisa/4ZagueiroAmarelo.png'),
(126, 4, 'user_guide/img/imagens_Camisa/5MeioCampoAmarelo.png'),
(127, 4, 'user_guide/img/imagens_Camisa/6MeioCampoAmarelo.png'),
(128, 4, 'user_guide/img/imagens_Camisa/7MeioCampoAmarelo.png'),
(129, 4, 'user_guide/img/imagens_Camisa/8MeioCampoAmarelo.png'),
(130, 4, 'user_guide/img/imagens_Camisa/9MeioCampoAmarelo.png'),
(131, 4, 'user_guide/img/imagens_Camisa/10AtacanteAmarelo.png'),
(132, 4, 'user_guide/img/imagens_Camisa/11AtacanteAmarelo.png'),
(133, 4, 'user_guide/img/imagens_Camisa/1GoleiroVerde.png'),
(134, 4, 'user_guide/img/imagens_Camisa/2ZagueiroVerde.png'),
(135, 4, 'user_guide/img/imagens_Camisa/3ZagueiroVerde.png'),
(136, 4, 'user_guide/img/imagens_Camisa/4ZagueiroVerde.png'),
(137, 4, 'user_guide/img/imagens_Camisa/5MeioCampoVerde.png'),
(138, 4, 'user_guide/img/imagens_Camisa/6MeioCampoVerde.png'),
(139, 4, 'user_guide/img/imagens_Camisa/7MeioCampoVerde.png'),
(140, 4, 'user_guide/img/imagens_Camisa/8MeioCampoVerde.png'),
(141, 4, 'user_guide/img/imagens_Camisa/9MeioCampoVerde.png'),
(142, 4, 'user_guide/img/imagens_Camisa/10AtacanteVerde.png'),
(143, 4, 'user_guide/img/imagens_Camisa/11AtacanteVerde.png'),
(144, 4, 'user_guide/img/imagens_Camisa/1GoleiroVermelho.png'),
(145, 4, 'user_guide/img/imagens_Camisa/2ZagueiroVermelho.png'),
(146, 4, 'user_guide/img/imagens_Camisa/3ZagueiroVermelho.png'),
(147, 4, 'user_guide/img/imagens_Camisa/4ZagueiroVermelho.png'),
(148, 4, 'user_guide/img/imagens_Camisa/5MeioCampoVermelho.png'),
(149, 4, 'user_guide/img/imagens_Camisa/6MeioCampoVermelho.png'),
(150, 4, 'user_guide/img/imagens_Camisa/7MeioCampoVermelho.png'),
(151, 4, 'user_guide/img/imagens_Camisa/8MeioCampoVermelho.png'),
(152, 4, 'user_guide/img/imagens_Camisa/9MeioCampoVermelho.png'),
(153, 4, 'user_guide/img/imagens_Camisa/10AtacanteVermelho.png'),
(154, 4, 'user_guide/img/imagens_Camisa/11AtacanteVermelho.png'),
(155, 2, 'user_guide/img/imagens_Baralho/AsCopas.png'),
(156, 2, 'user_guide/img/imagens_Baralho/AsEspadas.png'),
(157, 2, 'user_guide/img/imagens_Baralho/AsOuros.png'),
(158, 2, 'user_guide/img/imagens_Baralho/AsPaus.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estagio`
--

CREATE TABLE `estagio` (
  `id` int(11) NOT NULL,
  `solucao_id` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `num_expressoes` int(11) DEFAULT NULL COMMENT '0,1,2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='estagios da solucao de um exercicio\n';

--
-- Extraindo dados da tabela `estagio`
--

INSERT INTO `estagio` (`id`, `solucao_id`, `quantidade`, `num_expressoes`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1),
(3, 2, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `exercicio`
--

CREATE TABLE `exercicio` (
  `id` int(3) NOT NULL,
  `universo_id` int(11) NOT NULL,
  `solucao_id` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `dica` varchar(250) NOT NULL,
  `tempo_esperado` int(11) DEFAULT NULL,
  `operacao` varchar(45) DEFAULT NULL COMMENT 'nao sei pq'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `exercicio`
--

INSERT INTO `exercicio` (`id`, `universo_id`, `solucao_id`, `descricao`, `dica`, `tempo_esperado`, `operacao`) VALUES
(1, 2, 1, 'Quantas possibilidades de 1 carta tipo Ás?', 'Baralho completo, com 52 cartas, 4 de cada.', NULL, NULL),
(2, 2, 2, 'Com um baralho de 32 cartas, quantas mãos de 2 cartas é possível formar com exatamente uma Dama e um Ás?', 'Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que Sete. Portanto, um baralho de 32 cartas possui 8 cartas de cada naipe (7,8,9,10,Valete, Dama, Rei e Ás).', NULL, NULL),
(3, 2, 1, 'Com um baralho de 32 cartas, quantas mãos de 5 cartas é possível formar com exatamente 2 cartas de Copas e exatamente duas cartas de Espadas?', 'Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que Sete. Portanto, um baralho de 32 cartas possui 8 cartas de cada naipe (7,8,9,10,Valete, Dama, Rei e Ás).', NULL, NULL),
(4, 2, 1, 'Com um baralho de 32 cartas, quantas mãos de 20 cartas é possível formar com 3 ases, 4 espadas e 16 cartas vermelhas?', 'O conjunto de subconjuntos com 20 elementos tomados em um baralho com 32 cartas. Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que 7 (7,8,9,10, Valete, Dama, Rei e Ás).  ', NULL, NULL),
(5, 4, 1, 'Quantos times de 13 jogadores podemos formar com exatamente 5 jogadores do time azul e exatamente 5 jogadores do time verde?', 'O Universo Futebol corresponde a quatro equipe com 11 jogadores. Equipe Azul, Amarelo, Verde e Vermelho. O jogador número 1 sempre será goleiro, de 2 a 4 são todos zagueiros. Meio-campo são de 5 a 9 enquanto 10 e 11 são atacantes.', NULL, NULL),
(6, 4, 1, 'Quantos jogadores existem que tenham camisa número 11?', 'Lembre-se que são 4 times.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `expressao`
--

CREATE TABLE `expressao` (
  `id` int(11) NOT NULL,
  `estagio_id` int(11) NOT NULL,
  `atributo` varchar(200) DEFAULT NULL,
  `pertence` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `expressao`
--

INSERT INTO `expressao` (`id`, `estagio_id`, `atributo`, `pertence`) VALUES
(1, 1, 'value', 't'),
(2, 2, 'value', 't'),
(3, 3, 'value', 't');

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
-- Estrutura da tabela `solucao`
--

CREATE TABLE `solucao` (
  `id` int(11) NOT NULL,
  `resultado` int(11) DEFAULT NULL,
  `formato_legado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `solucao`
--

INSERT INTO `solucao` (`id`, `resultado`, `formato_legado`) VALUES
(1, 4, '1:value={ace}'),
(2, 16, '1:value={queen};1:value={ace}');

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
-- Indexes for table `atributos`
--
ALTER TABLE `atributos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_atributos_elemento1_idx` (`elemento_id`);

--
-- Indexes for table `caracteristica`
--
ALTER TABLE `caracteristica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_caracteristica_expressao1_idx` (`expressao_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

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
  ADD KEY `fk_estagio_solucao1_idx` (`solucao_id`);

--
-- Indexes for table `exercicio`
--
ALTER TABLE `exercicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_exercicio_universo1_idx` (`universo_id`),
  ADD KEY `fk_exercicio_solucao1_idx` (`solucao_id`);

--
-- Indexes for table `expressao`
--
ALTER TABLE `expressao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_condicao_estagio1_idx` (`estagio_id`);

--
-- Indexes for table `formula`
--
ALTER TABLE `formula`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solucao`
--
ALTER TABLE `solucao`
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
-- AUTO_INCREMENT for table `atributos`
--
ALTER TABLE `atributos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;
--
-- AUTO_INCREMENT for table `caracteristica`
--
ALTER TABLE `caracteristica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `elemento`
--
ALTER TABLE `elemento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
--
-- AUTO_INCREMENT for table `estagio`
--
ALTER TABLE `estagio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `exercicio`
--
ALTER TABLE `exercicio`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `expressao`
--
ALTER TABLE `expressao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `formula`
--
ALTER TABLE `formula`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `solucao`
--
ALTER TABLE `solucao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `universo`
--
ALTER TABLE `universo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `atributos`
--
ALTER TABLE `atributos`
  ADD CONSTRAINT `fk_atributos_elemento1` FOREIGN KEY (`elemento_id`) REFERENCES `elemento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `caracteristica`
--
ALTER TABLE `caracteristica`
  ADD CONSTRAINT `fk_caracteristica_expressao1` FOREIGN KEY (`expressao_id`) REFERENCES `expressao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `elemento`
--
ALTER TABLE `elemento`
  ADD CONSTRAINT `fk_elemento_universo1` FOREIGN KEY (`universo_id`) REFERENCES `universo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estagio`
--
ALTER TABLE `estagio`
  ADD CONSTRAINT `fk_estagio_solucao1` FOREIGN KEY (`solucao_id`) REFERENCES `solucao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `exercicio`
--
ALTER TABLE `exercicio`
  ADD CONSTRAINT `fk_exercicio_solucao1` FOREIGN KEY (`solucao_id`) REFERENCES `solucao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_exercicio_universo1` FOREIGN KEY (`universo_id`) REFERENCES `universo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `expressao`
--
ALTER TABLE `expressao`
  ADD CONSTRAINT `fk_condicao_estagio1` FOREIGN KEY (`estagio_id`) REFERENCES `estagio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
