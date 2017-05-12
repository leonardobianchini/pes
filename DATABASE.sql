-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 12-Maio-2017 às 01:28
-- Versão do servidor: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
`id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'administrador', 'adm@adm.com', 'adm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `desportista`
--

CREATE TABLE IF NOT EXISTS `desportista` (
`id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `datanasc` date NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `desportista`
--

INSERT INTO `desportista` (`id`, `nome`, `datanasc`, `telefone`, `email`, `senha`) VALUES
(1, 'Gabriel Jesus', '1996-08-19', 2147483647, 'gabrielj@gmail.com', '123'),
(2, 'Jonathan dos Santos', '1993-10-23', 2147483647, 'jonsantos@gmail.com', 'abcd'),
(3, 'Artur Morais', '1983-09-01', 2147483647, 'arturm@gmail.com', 'cchap'),
(4, 'Edivandro Rossi', '1991-01-30', 2147483647, 'rossi@hotmail.com', 'qat12'),
(5, 'Andres Dalessandro', '1981-04-02', 2147483647, 'dalessandro@gmail.com', 'int10'),
(6, 'Marcelo Debiassi', '1988-08-13', 2147483647, 'mdb@bol.com', 'gf55fd'),
(7, 'Bruno Miranda', '1974-03-12', 2147483647, 'bmiranda@gmail.com', 'sas565'),
(8, 'Pedro Augusto', '1957-06-25', 2147483647, 'paugusto@gmail.com', '4dfd'),
(9, 'Paulo Nobre', '1976-11-24', 2147483647, 'pnobre@hotmail.com', 'ad5f4g'),
(10, 'Fernando Souza', '1980-12-25', 2147483647, 'fersouza@gmail.com', 'wqwq84'),
(11, 'Fabricio Bruno', '1978-01-01', 2147483647, 'fabriciobruno@gmail.com', 'ty5hg1'),
(12, 'Osvaldo Firmino', '1986-03-10', 2147483647, 'firmino@gmail.com', 'olases'),
(13, 'Neymar da Silva', '1993-10-11', 2147483647, 'ousadiaealegria@gmail.com', 'ehtois');

-- --------------------------------------------------------

--
-- Estrutura da tabela `esporte`
--

CREATE TABLE IF NOT EXISTS `esporte` (
`id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `esporte`
--

INSERT INTO `esporte` (`id`, `nome`) VALUES
(1, 'Futebol'),
(2, 'Futsal'),
(4, 'Tenis'),
(5, 'Basquete'),
(6, 'Volei');

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
`id` int(11) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `organizador` varchar(30) NOT NULL,
  `horario` varchar(20) NOT NULL,
  `esporte` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`id`, `endereco`, `organizador`, `horario`, `esporte`) VALUES
(1, 'Rua Clevelandia', 'Felix Pinheiro', '19:00 - 20:00', 'Futsal'),
(2, 'Rua Clevelandia', 'Osmar Vadao', '21:00 - 22:00', 'Volei'),
(3, 'Rua Barao do Rio Branco', 'Valdir Ramos', '14:00 - 15:00', 'Tenis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

CREATE TABLE IF NOT EXISTS `local` (
`id` int(11) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `horario` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `local`
--

INSERT INTO `local` (`id`, `endereco`, `numero`, `bairro`, `cidade`, `tipo`, `horario`) VALUES
(1, 'Rua dos coqueiros', 135, 'Bairro Palmeiras', 'Chapeco', 'Campo', '16:00 - 23:30'),
(2, 'Rua Clevelandia', 100, 'Centro', 'Chapeco', 'Quadra', '18:00 - 23:30'),
(3, 'Rua Antonio Ramos', 135, 'Centro', 'Chapeco', 'Piscina', '08:00 - 20:00'),
(4, 'Rua Barao do Rio Branco', 135, 'Centro', 'Chapeco', 'Quadra', '13:00 - 21:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `organizador`
--

CREATE TABLE IF NOT EXISTS `organizador` (
`id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `datanasc` date NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `organizador`
--

INSERT INTO `organizador` (`id`, `nome`, `datanasc`, `telefone`, `email`, `senha`) VALUES
(1, 'Januario Silva', '1961-06-19', 2147483647, 'januariosilva@gmail.com', '998sw'),
(2, 'Felix Pinheiro', '1970-12-21', 2147483647, 'fpinheiro@hotmail.com', '12124'),
(3, 'Dorival Prieto', '1956-08-19', 2147483647, 'dorival@gmail.com', 'cfv4d'),
(4, 'Osmar Vadao', '1961-11-02', 2147483647, 'osmarvadao@gmail.com', 'ed43tfd'),
(5, 'Valdir Ramos', '1973-02-21', 2147483647, 'vdramos@gmail.com', '43tgg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desportista`
--
ALTER TABLE `desportista`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `esporte`
--
ALTER TABLE `esporte`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizador`
--
ALTER TABLE `organizador`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `desportista`
--
ALTER TABLE `desportista`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `esporte`
--
ALTER TABLE `esporte`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `local`
--
ALTER TABLE `local`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `organizador`
--
ALTER TABLE `organizador`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
