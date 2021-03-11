-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Mar-2021 às 11:44
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `padaria_lor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comanda`
--

CREATE TABLE `comanda` (
  `id_comanda` int(32) NOT NULL,
  `produto1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade1` varchar(3) DEFAULT NULL,
  `valor1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade2` varchar(3) DEFAULT NULL,
  `valor2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade3` varchar(3) DEFAULT NULL,
  `valor3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto4` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade4` varchar(3) DEFAULT NULL,
  `valor4` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto5` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade5` varchar(3) DEFAULT NULL,
  `valor5` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto6` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade6` varchar(3) DEFAULT NULL,
  `valor6` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto7` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade7` varchar(3) DEFAULT NULL,
  `valor7` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto8` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade8` varchar(3) DEFAULT NULL,
  `valor8` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto9` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade9` varchar(3) DEFAULT NULL,
  `valor9` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(30) DEFAULT NULL,
  `cad_feito_por` int(5) DEFAULT NULL,
  `data_cad` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comanda`
--

INSERT INTO `comanda` (`id_comanda`, `produto1`, `quantidade1`, `valor1`, `produto2`, `quantidade2`, `valor2`, `produto3`, `quantidade3`, `valor3`, `produto4`, `quantidade4`, `valor4`, `produto5`, `quantidade5`, `valor5`, `produto6`, `quantidade6`, `valor6`, `produto7`, `quantidade7`, `valor7`, `produto8`, `quantidade8`, `valor8`, `produto9`, `quantidade9`, `valor9`, `total`, `cad_feito_por`, `data_cad`) VALUES
(5, 'Pão', '3', '5', 'Sonho', '6', '2', 'Esfirra', '3', '10', 'Mini-pizza', '9', '9', 'Pão com Queijo', '2', '5', 'Pão de Queijo', '3', '1', 'Folheado', '7', '14', 'Tapioca', '4', '20', 'Refrigerante', '1', '8', '74', 1, '2021-03-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ganho_diario`
--

CREATE TABLE `ganho_diario` (
  `id_diario` int(32) NOT NULL,
  `dia` date NOT NULL,
  `ganho_total` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ganho_diario`
--

INSERT INTO `ganho_diario` (`id_diario`, `dia`, `ganho_total`) VALUES
(1, '2021-03-11', 72);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(32) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `total_vendidos` int(32) NOT NULL,
  `total_valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `produto`, `total_vendidos`, `total_valor`) VALUES
(1, 'Pão', 3, 5),
(2, 'Sonho', 6, 2),
(3, 'Esirra', 3, 10),
(4, 'Pão com Queijo', 2, 5),
(5, 'Pão de Queijo', 3, 1),
(6, 'Folheado', 7, 14),
(7, 'Tapioca', 4, 20),
(8, 'Refrigerante', 1, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(32) NOT NULL,
  `pwd` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_user` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `email` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_secundario` varchar(80) NOT NULL,
  `nome` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone_cel` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone_res` varchar(32) NOT NULL,
  `rg` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nasc` varchar(20) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `cep` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rua` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complemento` varchar(60) NOT NULL,
  `uf` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biografia` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sem-foto.jpg',
  `data_cad` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `pwd`, `tipo_user`, `email`, `email_secundario`, `nome`, `cpf`, `cnpj`, `telefone_cel`, `telefone_res`, `rg`, `data_nasc`, `sexo`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `complemento`, `uf`, `biografia`, `foto`, `data_cad`) VALUES
(1, '$argon2i$v=19$m=2048,t=4,p=3$MTIzNDU2Nzg5$5c+iezRPeon8TMGSNlMTtYu1v5db4GdOwbTpqIq2V5o', 'admin', 'atendente@lor.com', 'atendente2@lor.com', 'Atendente Padaria Lor', '', '', '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', 'sem-foto.jpg', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comanda`
--
ALTER TABLE `comanda`
  ADD PRIMARY KEY (`id_comanda`);

--
-- Índices para tabela `ganho_diario`
--
ALTER TABLE `ganho_diario`
  ADD PRIMARY KEY (`id_diario`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comanda`
--
ALTER TABLE `comanda`
  MODIFY `id_comanda` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `ganho_diario`
--
ALTER TABLE `ganho_diario`
  MODIFY `id_diario` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
