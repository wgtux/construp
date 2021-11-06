-- phpMyAdmin SQL Dump
-- version 5.1.1-1.fc34
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06-Nov-2021 às 22:50
-- Versão do servidor: 10.5.12-MariaDB
-- versão do PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `construction`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(400) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `material`
--

INSERT INTO `material` (`id`, `name`, `description`, `brand`, `quantity`, `date`) VALUES
(1, 'PARAFUSSO', 'PARAFUSSO PARA MADEIRA', 'BELFIT', 100, '2021-11-06'),
(2, 'Parafuso 01', 'parafuso prata', 'teste', 20, '2021-11-06'),
(3, 'Canaleta', 'uso para passagem de cabo de rede externo', 'marca 01', 50, '2021-11-06'),
(4, 'Ferramenta 01', 'ferramenta para corte', 'teste', 100, '2021-11-06'),
(5, 'teste 03', 'teste teste', 'marca 02', 500, '2021-11-06'),
(6, 'teste 05', 'teste 05', 'marca 05', 1000, '2021-11-06'),
(7, 'material 07', 'parafusso azul', 'belfit', 1500, '2021-11-06');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
