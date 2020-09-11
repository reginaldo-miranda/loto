-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 11-Set-2020 às 02:53
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `lotofacil`
--

CREATE TABLE `lotofacil` (
  `idjogo` int(11) NOT NULL,
  `nomejogo` varchar(20) NOT NULL,
  `concurso` varchar(20) NOT NULL,
  `dezena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `lotofacil`
--

INSERT INTO `lotofacil` (`idjogo`, `nomejogo`, `concurso`, `dezena`) VALUES
(246, 'lotofacil', '2029', 3),
(247, 'lotofacil', '2029', 4),
(248, 'lotofacil', '2029', 7),
(249, 'lotofacil', '2029', 8),
(250, 'lotofacil', '2029', 10),
(251, 'lotofacil', '2029', 11),
(252, 'lotofacil', '2029', 12),
(253, 'lotofacil', '2029', 13),
(254, 'lotofacil', '2029', 16),
(255, 'lotofacil', '2029', 17),
(256, 'lotofacil', '2029', 19),
(257, 'lotofacil', '2029', 22),
(258, 'lotofacil', '2029', 23),
(259, 'lotofacil', '2029', 24),
(260, 'lotofacil', '2029', 25),
(261, 'lotofacil', '2028', 1),
(262, 'lotofacil', '2028', 2),
(263, 'lotofacil', '2028', 3),
(264, 'lotofacil', '2028', 4),
(265, 'lotofacil', '2028', 5),
(266, 'lotofacil', '2028', 6),
(267, 'lotofacil', '2028', 8),
(268, 'lotofacil', '2028', 9),
(269, 'lotofacil', '2028', 15),
(270, 'lotofacil', '2028', 16),
(271, 'lotofacil', '2028', 18),
(272, 'lotofacil', '2028', 19),
(273, 'lotofacil', '2028', 20),
(274, 'lotofacil', '2028', 23),
(275, 'lotofacil', '2028', 25),
(276, 'lotofacil', '2027', 1),
(277, 'lotofacil', '2027', 2),
(278, 'lotofacil', '2027', 3),
(279, 'lotofacil', '2027', 6),
(280, 'lotofacil', '2027', 7),
(281, 'lotofacil', '2027', 9),
(282, 'lotofacil', '2027', 12),
(283, 'lotofacil', '2027', 13),
(284, 'lotofacil', '2027', 16),
(285, 'lotofacil', '2027', 17),
(286, 'lotofacil', '2027', 20),
(287, 'lotofacil', '2027', 21),
(288, 'lotofacil', '2027', 23),
(289, 'lotofacil', '2027', 24),
(290, 'lotofacil', '2027', 25),
(291, 'lotofacil', '2026', 3),
(292, 'lotofacil', '2026', 1),
(293, 'lotofacil', '2026', 4),
(294, 'lotofacil', '2026', 5),
(295, 'lotofacil', '2026', 6),
(296, 'lotofacil', '2026', 11),
(297, 'lotofacil', '2026', 13),
(298, 'lotofacil', '2026', 14),
(299, 'lotofacil', '2026', 16),
(300, 'lotofacil', '2026', 19),
(301, 'lotofacil', '2026', 20),
(302, 'lotofacil', '2026', 21),
(303, 'lotofacil', '2026', 22),
(304, 'lotofacil', '2026', 23),
(305, 'lotofacil', '2026', 24),
(306, 'lotofacil', '2025', 3),
(307, 'lotofacil', '2025', 2),
(308, 'lotofacil', '2025', 4),
(309, 'lotofacil', '2025', 6),
(310, 'lotofacil', '2025', 8),
(311, 'lotofacil', '2025', 9),
(312, 'lotofacil', '2025', 10),
(313, 'lotofacil', '2025', 12),
(314, 'lotofacil', '2025', 14),
(315, 'lotofacil', '2025', 15),
(316, 'lotofacil', '2025', 16),
(317, 'lotofacil', '2025', 18),
(318, 'lotofacil', '2025', 19),
(319, 'lotofacil', '2025', 20),
(320, 'lotofacil', '2025', 22);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `lotofacil`
--
ALTER TABLE `lotofacil`
  ADD PRIMARY KEY (`idjogo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `lotofacil`
--
ALTER TABLE `lotofacil`
  MODIFY `idjogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
