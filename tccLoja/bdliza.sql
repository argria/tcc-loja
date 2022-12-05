-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Out-2022 às 10:21
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdliza`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `vestidos`
--

CREATE TABLE `vestidos` (
  `nome` varchar(50) NOT NULL,
  `codigo` int(50) NOT NULL,
  `preco` varchar(50) NOT NULL,
  `quantidade` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vestidos`
--

INSERT INTO `vestidos` (`nome`, `codigo`, `preco`, `quantidade`) VALUES
('Cueca Topper', 1, 'R$10,00', 43),
('Cueca Topper', 1, 'R$10,00', 43),
('calcinha', 123, 'R$10,00', 43),
('sapato', 321, 'R$10,00', 43);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
