-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jul-2023 às 19:52
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cordeiro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `id` int(11) NOT NULL,
  `nome` varchar(85) DEFAULT NULL,
  `email` varchar(85) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `endereco` varchar(85) DEFAULT NULL,
  `mensagem` varchar(85) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`id`, `nome`, `email`, `data`, `endereco`, `mensagem`) VALUES
(1, 'Gabriel', 'gabrielpikachuoficial@gmail.com', '2023-06-01', 'Rua Guilherme Rocha 1299', 'aaaaaaaaaaaa\r\n'),
(2, 'dsfsd', 'stefannyac205@gmail.com', '2023-06-23', 'dfsdfsdfs', 'sdfdsfsdf'),
(3, 'FDGDFDF', 'gabrielpikachuoficial@gmail.com', '2023-08-24', 'dfsdfsdfs', 'fssdfsdfsd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`) VALUES
(248, 'Gabriel', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(95) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(95) NOT NULL,
  `setor` varchar(95) NOT NULL,
  `departamento` varchar(95) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `cpf`, `email`, `setor`, `departamento`) VALUES
(3, 'Gabriel', '699', 'gabrielpikachuoficial@gmail.com', 'doidos', '22222');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencia`
--

CREATE TABLE `ocorrencia` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `observacao_cliente` varchar(50) DEFAULT NULL,
  `dep` varchar(30) DEFAULT NULL,
  `estado` int(1) NOT NULL COMMENT 'aberto|em atendimento|solucionado',
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `ocorrencia`
--

INSERT INTO `ocorrencia` (`id`, `nome`, `observacao_cliente`, `dep`, `estado`, `data`) VALUES
(16, 'Gabriel', 'bra', 'financeiro', 0, '2023-06-06'),
(18, 'Tadeu', 'bra', 'marketing', 1, '2023-06-06'),
(19, 'FDGDFDF', 'bra', 'vendas', 1, '2023-06-28'),
(20, 'S', 'O', '', 1, '2023-06-08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(95) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `email` varchar(95) DEFAULT NULL,
  `login` varchar(95) DEFAULT NULL,
  `senha` varchar(95) DEFAULT NULL,
  `funcao` varchar(95) DEFAULT NULL,
  `consultorio` varchar(95) NOT NULL,
  `cargo` varchar(95) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `cpf`, `email`, `login`, `senha`, `funcao`, `consultorio`, `cargo`) VALUES
(1, 'Gabriel', '345.346.345-45', 'dsfdsdsfsdf@gmail.com', 'gabriel123', '1234', 'adm', '', ''),
(4, 'Gabriel', '565.465.465-46', 'gabrielpikachuoficial@gmail.com', '123', '123', 'funcionario', '23', 'Ortopedista'),
(5, 'FDGDFDF', '343.243.243-24', 'stefannyac205@gmail.com', '123', '123321312', 'funcionario', '69', 'Careca'),
(6, 'Tadeu', '435.435.345-43', 'stefannyac205@gmail.com', '12', '12', 'cliente', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
