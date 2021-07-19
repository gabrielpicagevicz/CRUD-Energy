-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jul-2021 às 04:01
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `energia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `endereco` varchar(35) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nascimento` date NOT NULL,
  `data_vencimento` date NOT NULL,
  `unidade_consumidora` int(11) NOT NULL,
  `kwh` double NOT NULL,
  `valor_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `sexo`, `endereco`, `cep`, `bairro`, `cpf`, `nascimento`, `data_vencimento`, `unidade_consumidora`, `kwh`, `valor_total`) VALUES
(74, 'aaa', 'm', 'gdrsfg', '12313123', '31231', 'fasdf', '2021-06-27', '2021-07-27', 1, 0.2, 0.02),
(75, 'GABRIEL', 'm', 'GABRIEL', '123', 'GABRIEL', '1234', '2021-07-19', '2021-07-08', 2, 0.3, 0.03),
(79, 'funcionario1', 'f', 'rua banana', '123', 'Palmeiras', '090', '2222-10-31', '2222-02-22', 1, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
