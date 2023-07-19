-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Fev-2022 às 19:44
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
-- Banco de dados: `empresa`
--
CREATE DATABASE IF NOT EXISTS `empresa` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `empresa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresarial`
--

CREATE TABLE `empresarial` (
  `id` int(4) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nome_empresa` varchar(30) NOT NULL,
  `cnpj` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresarial`
--

INSERT INTO `empresarial` (`id`, `nome`, `nome_empresa`, `cnpj`) VALUES
(1, 'Gabriel Valentim XA', 'ASSOMBRADORES BRASIL', '03.148.633/0001-30'),
(2, 'Marcos Alexandre', 'Desenvolvimento Web Ltda', '11.643.926/0001-11'),
(4, 'Eduarda Gripa', 'Muscular academy', '11.244.942/0001-86'),
(5, 'Daniel litchnow', 'Assistência: Software & Hardwa', '09.820.455/0001-28'),
(6, 'Leandro Freitas', 'Machine Learning Developer', '84.243.535/0001-83'),
(7, ' RAFAEL GRESSLER MILBRADT', 'Games 16-bit Brasil', '80.753.323/0001-95'),
(9, 'Gabriel Valentim Xavier de Arruda', 'Kenny Steam Games', '84.151.423/0001-65'),
(10, 'Susana Elisa', 'Elisa Cabelereira', '88.643.289/0001-08');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresarial`
--
ALTER TABLE `empresarial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresarial`
--
ALTER TABLE `empresarial`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
