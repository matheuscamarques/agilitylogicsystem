-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 11/11/2019 às 18:35
-- Versão do servidor: 5.6.28-0ubuntu0.15.04.1
-- Versão do PHP: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aglog`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_cliente`
--

CREATE TABLE `cadastro_cliente` (
  `cpf` bigint(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `cadastro_cliente`
--

INSERT INTO `cadastro_cliente` (`cpf`, `email`, `telefone`, `nome`) VALUES
(3573138950, 'a@a.com', 2147483647, 'and'),
(10716274906, 'matheuscamarques@gmail.com', 2147483647, 'Matheus Camargo'),
(10716274908, 'andersonfagundes@gmail.com', 2147483647, 'Anderson Fagundes'),
(12345678900, 'a@a.com', 2147483647, 'ana'),
(80942555954, 'parctb@gmail.com', 2147483647, 'Sergio Kasuma'),
(82989761853, 'ande@fdff.com', 1122222222, 'mio');

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco_cliente`
--

CREATE TABLE `endereco_cliente` (
  `logradouro` varchar(80) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `cod_endereco` int(11) NOT NULL,
  `cpf` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `endereco_cliente`
--

INSERT INTO `endereco_cliente` (`logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`, `cod_endereco`, `cpf`) VALUES
('Rua do Camacuan', '252', 'Casa', 'Uberaba', 'Curitiba', 'PR', 81550360, 1, 10716274906),
('Rua do Camacuan', '252', 'Casa', 'Uberaba', 'Curitiba', 'PR', 82800065, 14, 10716274908),
('rua no', '58', 'casa', 'taruma', 'curitiba', 'pr', 82800000, 15, 12345678900);

-- --------------------------------------------------------

--
-- Estrutura para tabela `lote`
--

CREATE TABLE `lote` (
  `cod_lote` int(11) NOT NULL,
  `cod_usuario` int(11) NOT NULL,
  `data_entrega` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `lote`
--

INSERT INTO `lote` (`cod_lote`, `cod_usuario`, `data_entrega`, `status`) VALUES
(4, 5, '2019-10-23', 1),
(5, 3, '2019-11-05', 1),
(6, 3, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `nivel`
--

CREATE TABLE `nivel` (
  `cod_nivel` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `nivel`
--

INSERT INTO `nivel` (`cod_nivel`, `nome`) VALUES
(1, 'administrador'),
(2, 'motorista'),
(3, 'operador'),
(4, 'logistico');

-- --------------------------------------------------------

--
-- Estrutura para tabela `objeto`
--

CREATE TABLE `objeto` (
  `cod_objeto` int(11) NOT NULL,
  `tamanho` float DEFAULT NULL,
  `distancia` float DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `cod_taxa` int(11) NOT NULL,
  `cpf_origem` bigint(11) NOT NULL,
  `cpf_destino` bigint(11) NOT NULL,
  `peso` float NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `objeto`
--

INSERT INTO `objeto` (`cod_objeto`, `tamanho`, `distancia`, `preco`, `cod_taxa`, `cpf_origem`, `cpf_destino`, `peso`, `status`) VALUES
(1, 10, 100, 53.3333, 1, 10716274906, 10716274908, 50, 2),
(2, 10, 100, 53.3333, 1, 10716274906, 10716274908, 50, 1),
(3, 1, 200, 70.3333, 1, 10716274906, 10716274908, 10, 1),
(4, 10, 800, 276.667, 1, 10716274906, 10716274908, 20, 2),
(6, 10, 100, 38.3333, 1, 10716274906, 10716274908, 5, 1),
(8, 1, 120, 43.6667, 1, 10716274908, 10716274906, 10, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `objeto_lote`
--

CREATE TABLE `objeto_lote` (
  `cod_lote_objeto` int(11) NOT NULL,
  `cod_objeto` int(11) NOT NULL,
  `cod_lote` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `objeto_lote`
--

INSERT INTO `objeto_lote` (`cod_lote_objeto`, `cod_objeto`, `cod_lote`, `status`) VALUES
(9, 1, 4, 0),
(10, 2, 4, 0),
(11, 3, 4, 0),
(12, 4, 4, 0),
(13, 6, 4, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `passos`
--

CREATE TABLE `passos` (
  `cod_passos` int(11) NOT NULL,
  `cod_objeto` int(11) NOT NULL,
  `cep` bigint(20) NOT NULL,
  `hora` time NOT NULL,
  `data` date NOT NULL,
  `status` char(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `passos`
--

INSERT INTO `passos` (`cod_passos`, `cod_objeto`, `cep`, `hora`, `data`, `status`) VALUES
(1, 1, 81550360, '19:55:00', '2019-10-22', 'Saida do Estoque'),
(2, 1, 80010010, '20:22:00', '2019-10-22', 'Chegou no CD'),
(3, 1, 80010060, '20:39:00', '2019-10-22', 'Saida do CD'),
(5, 1, 81550360, '18:36:35', '2019-10-23', 'Unidade de Distribuicao'),
(7, 1, 81550360, '23:05:47', '2019-10-23', 'Entregue destinatario'),
(9, 1, 81550360, '18:22:09', '2019-11-11', 'Receita Federal');

-- --------------------------------------------------------

--
-- Estrutura para tabela `taxas`
--

CREATE TABLE `taxas` (
  `cod_taxa` int(11) NOT NULL,
  `taxa` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `taxas`
--

INSERT INTO `taxas` (`cod_taxa`, `taxa`) VALUES
(1, 0.3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `cod_nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nome`, `email`, `senha`, `cod_nivel`) VALUES
(3, 'manolo', 'manolo@manolo.com', '123', 2),
(4, 'rute', 'rute@rute.com', '123', 2),
(5, 'lolo', 'lolo@lolo.com.br', '123', 3),
(8, 'lol', 'lol@huio', '123', 2),
(9, 'oio', 'aass@gggg', '123', 2),
(10, 'a', 'a@a.com', '123', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cadastro_cliente`
--
ALTER TABLE `cadastro_cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices de tabela `endereco_cliente`
--
ALTER TABLE `endereco_cliente`
  ADD PRIMARY KEY (`cod_endereco`),
  ADD KEY `fk_endereco_cliente_cadastro cliente1_idx` (`cpf`),
  ADD KEY `cod_endereco` (`cod_endereco`);

--
-- Índices de tabela `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`cod_lote`),
  ADD KEY `fk_Lote_Usuario1_idx` (`cod_usuario`);

--
-- Índices de tabela `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`cod_nivel`);

--
-- Índices de tabela `objeto`
--
ALTER TABLE `objeto`
  ADD PRIMARY KEY (`cod_objeto`),
  ADD KEY `fk_Objeto_taxas1_idx` (`cod_taxa`),
  ADD KEY `fk_Objeto_cadastro cliente1_idx` (`cpf_origem`),
  ADD KEY `fk_Objeto_cadastro cliente2_idx` (`cpf_destino`);

--
-- Índices de tabela `objeto_lote`
--
ALTER TABLE `objeto_lote`
  ADD PRIMARY KEY (`cod_lote_objeto`),
  ADD KEY `cod_objeto` (`cod_objeto`),
  ADD KEY `cod_lote` (`cod_lote`);

--
-- Índices de tabela `passos`
--
ALTER TABLE `passos`
  ADD PRIMARY KEY (`cod_passos`),
  ADD KEY `cod_objeto` (`cod_objeto`);

--
-- Índices de tabela `taxas`
--
ALTER TABLE `taxas`
  ADD PRIMARY KEY (`cod_taxa`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`),
  ADD KEY `fk_Usuario_Nivel_idx` (`cod_nivel`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `endereco_cliente`
--
ALTER TABLE `endereco_cliente`
  MODIFY `cod_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `lote`
--
ALTER TABLE `lote`
  MODIFY `cod_lote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `nivel`
--
ALTER TABLE `nivel`
  MODIFY `cod_nivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `objeto`
--
ALTER TABLE `objeto`
  MODIFY `cod_objeto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `objeto_lote`
--
ALTER TABLE `objeto_lote`
  MODIFY `cod_lote_objeto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `passos`
--
ALTER TABLE `passos`
  MODIFY `cod_passos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `taxas`
--
ALTER TABLE `taxas`
  MODIFY `cod_taxa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `endereco_cliente`
--
ALTER TABLE `endereco_cliente`
  ADD CONSTRAINT `fk_endereco_cliente_cadastro cliente1` FOREIGN KEY (`cpf`) REFERENCES `cadastro_cliente` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `lote`
--
ALTER TABLE `lote`
  ADD CONSTRAINT `lote_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`);

--
-- Restrições para tabelas `objeto`
--
ALTER TABLE `objeto`
  ADD CONSTRAINT `fk_Objeto_cadastro cliente1` FOREIGN KEY (`cpf_origem`) REFERENCES `cadastro_cliente` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Objeto_cadastro cliente2` FOREIGN KEY (`cpf_destino`) REFERENCES `cadastro_cliente` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Objeto_taxas1` FOREIGN KEY (`cod_taxa`) REFERENCES `taxas` (`cod_taxa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `objeto_lote`
--
ALTER TABLE `objeto_lote`
  ADD CONSTRAINT `objeto_lote_ibfk_1` FOREIGN KEY (`cod_lote`) REFERENCES `lote` (`cod_lote`),
  ADD CONSTRAINT `objeto_lote_ibfk_2` FOREIGN KEY (`cod_objeto`) REFERENCES `objeto` (`cod_objeto`);

--
-- Restrições para tabelas `passos`
--
ALTER TABLE `passos`
  ADD CONSTRAINT `passos_ibfk_1` FOREIGN KEY (`cod_objeto`) REFERENCES `objeto` (`cod_objeto`);

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `cod_nivel` FOREIGN KEY (`cod_nivel`) REFERENCES `nivel` (`cod_nivel`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
