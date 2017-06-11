-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Jun-2017 às 02:33
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
  `exer_id` int(3) NOT NULL,
  `exer_desc` varchar(200) NOT NULL,
  `exer_dica` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `exercicio`
--

INSERT INTO `exercicio` (`exer_id`, `exer_desc`, `exer_dica`) VALUES
(1, 'Quantas possibilidades de 1 carta tipo Ás?', 'Baralho completo, com 52 cartas, 4 de cada.\n'),
(2, 'Com um baralho de 32 cartas, quantas mãos de 2 cartas é possível formar com exatamente uma Dama e um Ás?', 'Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que Sete. Portanto, um baralho de 32 cartas possui 8 cartas de cada naipe (7,8,9,10,Valete, Dama, Rei e Ás).'),
(3, 'Com um baralho de 32 cartas, quantas mãos de 5 cartas é possível formar com exatamente 2 cartas de Copas e exatamente duas cartas de Espadas?\n', 'Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que Sete. Portanto, um baralho de 32 cartas possui 8 cartas de cada naipe (7,8,9,10,Valete, Dama, Rei e Ás).'),
(4, 'Com um baralho de 32 cartas, quantas mãos de 20 cartas é possível formar com 3 ases, 4 espadas e 16 cartas vermelhas?\n', 'O conjunto de subconjuntos com 20 elementos tomados em um baralho com 32 cartas. Um baralho de 32 cartas corresponde a um baralho comum sem as cartas cujos valores são menores do que 7 (7,8,9,10, Valete, Dama, Rei e Ás).\n '),
(5, 'Quantos times de 13 jogadores podemos formar com exatamente 5 jogadores do time azul e exatamente 5 jogadores do time verde?', 'O Universo Futebol corresponde a quatro equipe com 11 jogadores. Equipe Azul, Amarelo, Verde e Vermelho. O jogador número 1 sempre será goleiro, de 2 a 4 são todos zagueiros. Meio-campo são de 5 a 9 enquanto 10 e 11 são atacantes.\r\n'),
(6, 'Quantos jogadores existem que tenham camisa número 11?\r\n', 'Lembre-se que são 4 times.\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formula`
--

CREATE TABLE `formula` (
  `form_id` int(3) NOT NULL,
  `form_img` varchar(200) NOT NULL,
  `form_expl` varchar(300) NOT NULL,
  `form_nome` varchar(50) NOT NULL,
  `form_expr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `formula`
--

INSERT INTO `formula` (`form_id`, `form_img`, `form_expl`, `form_nome`, `form_expr`) VALUES
(1, 'user_guide/img/formulas/Arranjo.png', 'Dado um conjunto qualquer com n elementos e um valor para natural p. Será formado um arranjo simples de p elementos distintos de um conjunto qualquer seqüência formada por p elementos do conjunto.', 'Arranjo simples', 'A(n,p)'),
(2, 'user_guide/img/formulas/Combinacao.png', 'As combinações simples podem ser consideradas um tipo particular de arranjo simples, pois os agrupamentos formados nos arranjos são diferenciados pela ordem e pela natureza dos seus elementos. A combinação simples são esses arranjos diferenciados apenas pela natureza de seus elementos.\r\n', 'Combinação simples', 'C(n,p)'),
(3, 'user_guide/img/formulas/Permutacao.jpg', 'Podemos considerar a permutação simples como um caso particular de arranjo, onde os elementos formarão agrupamentos que se diferenciarão somente pela ordem. ', 'Permutação simples', 'Pn = p!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercicio`
--
ALTER TABLE `exercicio`
  ADD PRIMARY KEY (`exer_id`);

--
-- Indexes for table `formula`
--
ALTER TABLE `formula`
  ADD PRIMARY KEY (`form_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercicio`
--
ALTER TABLE `exercicio`
  MODIFY `exer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `formula`
--
ALTER TABLE `formula`
  MODIFY `form_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
