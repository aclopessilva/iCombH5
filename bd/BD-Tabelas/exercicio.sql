-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06-Ago-2017 às 19:27
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
(1, 1, 1, 'Quantas possibilidades de 1 carta tipo Ás?', 'Baralho completo, com 52 cartas, 4 de cada.', NULL, NULL),
(2, 2, 1, 'Com um baralho de 32 cartas, quantas mãos de 2 cartas é possível formar com exatamente uma Dama e um Ás?', 'Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que Sete. Portanto, um baralho de 32 cartas possui 8 cartas de cada naipe (7,8,9,10,Valete, Dama, Rei e Ás).', NULL, NULL),
(3, 2, 1, 'Com um baralho de 32 cartas, quantas mãos de 5 cartas é possível formar com exatamente 2 cartas de Copas e exatamente duas cartas de Espadas?', 'Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que Sete. Portanto, um baralho de 32 cartas possui 8 cartas de cada naipe (7,8,9,10,Valete, Dama, Rei e Ás).', NULL, NULL),
(4, 2, 1, 'Com um baralho de 32 cartas, quantas mãos de 20 cartas é possível formar com 3 ases, 4 espadas e 16 cartas vermelhas?', 'O conjunto de subconjuntos com 20 elementos tomados em um baralho com 32 cartas. Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que 7 (7,8,9,10, Valete, Dama, Rei e Ás).  ', NULL, NULL),
(5, 4, 1, 'Quantos times de 13 jogadores podemos formar com exatamente 5 jogadores do time azul e exatamente 5 jogadores do time verde?', 'O Universo Futebol corresponde a quatro equipe com 11 jogadores. Equipe Azul, Amarelo, Verde e Vermelho. O jogador número 1 sempre será goleiro, de 2 a 4 são todos zagueiros. Meio-campo são de 5 a 9 enquanto 10 e 11 são atacantes.', NULL, NULL),
(6, 4, 1, 'Quantos jogadores existem que tenham camisa número 11?', 'Lembre-se que são 4 times.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercicio`
--
ALTER TABLE `exercicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_exercicio_universo1_idx` (`universo_id`),
  ADD KEY `fk_exercicio_solucao1_idx` (`solucao_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercicio`
--
ALTER TABLE `exercicio`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `exercicio`
--
ALTER TABLE `exercicio`
  ADD CONSTRAINT `fk_exercicio_solucao1` FOREIGN KEY (`solucao_id`) REFERENCES `solucao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_exercicio_universo1` FOREIGN KEY (`universo_id`) REFERENCES `universo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
