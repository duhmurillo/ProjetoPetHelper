-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2020 às 23:08
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pethelper`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clinicas`
--

CREATE TABLE `clinicas` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(255) NOT NULL,
  `cli_email` varchar(255) NOT NULL,
  `cli_telefone` varchar(17) NOT NULL,
  `cli_CNPJ` varchar(15) NOT NULL,
  `cli_descricao` text NOT NULL,
  `cli_animais_domesticos` tinyint(1) NOT NULL,
  `cli_animais_silvestres` tinyint(1) NOT NULL,
  `cli_senha` varchar(255) NOT NULL,
  `cli_estado` char(2) NOT NULL,
  `cli_cidade` varchar(255) NOT NULL,
  `cli_bairro` varchar(255) NOT NULL,
  `cli_rua` varchar(255) NOT NULL,
  `cli_numero` int(11) NOT NULL,
  `cli_lat` decimal(10,6) NOT NULL,
  `cli_long` decimal(11,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clinicas`
--

INSERT INTO `clinicas` (`cli_id`, `cli_nome`, `cli_email`, `cli_telefone`, `cli_CNPJ`, `cli_descricao`, `cli_animais_domesticos`, `cli_animais_silvestres`, `cli_senha`, `cli_estado`, `cli_cidade`, `cli_bairro`, `cli_rua`, `cli_numero`, `cli_lat`, `cli_long`) VALUES
(157558, 'Admin', 'admin@email.com', '+55(11)97070-7070', 'XXX.XXX/0002-XX', 'Uma descrição mt boa aqui', 1, 1, '$2y$10$nUIoZgCJ.i/DDdU.ILRJ4uLR3BadpjTJAZ/aEmlHaktCJwdu.OLWS', 'SP', 'Sorocaba', 'Bairro', 'Rua', 0, '0.000000', '0.000000'),
(157578, 'Clínica Veterinária', 'clinica@email.com', '1112345678', '111.111/1111-11', 'Descrição simples de uma clínica veterinária', 1, 1, '$2y$10$ljUuY4apetYDMfevy/6Yget8A9ieZJ2CI2QmgSkmnNYQp24bFLPCm', '', '', '', '', 0, '0.000000', '0.000000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pendentes`
--

CREATE TABLE `pendentes` (
  `pen_id` int(11) NOT NULL,
  `pen_nome` varchar(255) NOT NULL,
  `pen_email` varchar(255) NOT NULL,
  `pen_telefone` varchar(17) NOT NULL,
  `pen_CNPJ` varchar(15) NOT NULL,
  `pen_descricao` text DEFAULT NULL,
  `pen_animais_domesticos` tinyint(1) NOT NULL,
  `pen_animais_silvestres` tinyint(1) NOT NULL,
  `pen_senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pendentes`
--

INSERT INTO `pendentes` (`pen_id`, `pen_nome`, `pen_email`, `pen_telefone`, `pen_CNPJ`, `pen_descricao`, `pen_animais_domesticos`, `pen_animais_silvestres`, `pen_senha`) VALUES
(12, 'MedVet', 'medvet@email.com', '1170707070', 'XXX. XXX/0001-X', 'Clínica veterinária para cachorros', 1, 1, '$2y$10$KS6d4u./I/a0cCiMwBT6p.yuflGOC5zZQX9PXIDS2.mC6qTUwhQs.'),
(13, 'VetMed', 'vetmed@email.com', '1170707070', '012.345/6781-10', 'Uma empresa que oferece planos de saúde para cães e gatos.', 1, 1, '$2y$10$nUIoZgCJ.i/DDdU.ILRJ4uLR3BadpjTJAZ/aEmlHaktCJwdu.OLWS');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clinicas`
--
ALTER TABLE `clinicas`
  ADD PRIMARY KEY (`cli_id`),
  ADD UNIQUE KEY `cli_CNPJ` (`cli_CNPJ`);

--
-- Índices para tabela `pendentes`
--
ALTER TABLE `pendentes`
  ADD PRIMARY KEY (`pen_id`),
  ADD UNIQUE KEY `pen_CNPJ` (`pen_CNPJ`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clinicas`
--
ALTER TABLE `clinicas`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157578;

--
-- AUTO_INCREMENT de tabela `pendentes`
--
ALTER TABLE `pendentes`
  MODIFY `pen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
