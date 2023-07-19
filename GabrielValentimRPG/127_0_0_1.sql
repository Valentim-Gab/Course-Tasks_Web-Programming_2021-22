-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Dez-2021 às 14:08
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gabriel_valentim_rpg`
--
CREATE DATABASE IF NOT EXISTS `gabriel_valentim_rpg` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gabriel_valentim_rpg`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avatar`
--

CREATE TABLE `avatar` (
  `id` int(4) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `classe` varchar(20) NOT NULL,
  `guilda` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `avatar`
--

INSERT INTO `avatar` (`id`, `nick`, `classe`, `guilda`) VALUES
(1, 'Riagew', 'Guerreiro', 'Resist'),
(2, 'Marcos', 'Assassino', 'Lords of chaos'),
(3, 'Monkend', 'Arqueiro', 'LEAM'),
(4, 'Kenny Steam', 'Mago', 'Blue-Eyes'),
(5, 'Commander TM', 'Guerreiro', 'Lords of chaos'),
(7, 'Lewrot', 'Lanceiro', 'Well+Played');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avatar`
--
ALTER TABLE `avatar`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
