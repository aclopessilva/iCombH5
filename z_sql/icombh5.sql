-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jun-2017 às 00:10
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
-- Estrutura da tabela `exercicio`
--

CREATE TABLE `exercicio` (
  `exer_id` int(3) NOT NULL,
  `exer_desc` varchar(200) NOT NULL,
  `exer_dica` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `exercicio`
--

INSERT INTO `exercicio` (`exer_id`, `exer_desc`, `exer_dica`) VALUES
(1, 'Com um baralho de 32 cartas, quantas mão de 2 cartas é possível formar com exatamente uma Dama e um Ás?', 'Lorem ipsum dolor sit amet.'),
(2, 'Com um baralho de 32 cartas, quantas mãos de 5 cartas é possível formar com exatamente 2 Copas e duas Espadas?', 'Lorem ipsum dolor sit amet.\r\n\r\n'),
(3, 'Com um baralho de 52 cartas, quantas mãos de 8 cartas é possível formar com exatamente 1 Ás, 2 Reis e 2 Valetes?', 'Lorem ipsum dolor sit amet.'),
(4, 'Com um baralho de 32 cartas, quantas mãos de 8 cartas é possível formar com exatamente 4 Ases e 4 Reis?', 'Lorem ipsum dolor sit amet.');

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
(1, 'faltadefinir', 'Dado um conjunto qualquer com n elementos e um valor para natural p. Será formado um arranjo simples de p elementos distintos de um conjunto qualquer seqüência formada por p elementos do conjunto.', 'Arranjo simples', 'A(n,p)'),
(2, 'faltadefinir', 'As combinações simples podem ser consideradas um tipo particular de arranjo simples, pois os agrupamentos formados nos arranjos são diferenciados pela ordem e pela natureza dos seus elementos. A combinação simples são esses arranjos diferenciados apenas pela natureza de seus elementos.\r\n', 'Combinação simples', 'C(n,p)'),
(3, 'faltadefinir', 'Podemos considerar a permutação simples como um caso particular de arranjo, onde os elementos formarão agrupamentos que se diferenciarão somente pela ordem. ', 'Permutação simples', 'Pn = p!');

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
  MODIFY `exer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `formula`
--
ALTER TABLE `formula`
  MODIFY `form_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
