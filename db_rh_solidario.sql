-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 03-Jun-2022 às 22:07
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `db_rh_solidario`
--
CREATE DATABASE IF NOT EXISTS `db_rh_solidario` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_rh_solidario`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `friends_users_and_rhusers`
--

CREATE TABLE IF NOT EXISTS `friends_users_and_rhusers` (
  `id_friends` int(11) NOT NULL AUTO_INCREMENT,
  `email_user_rh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_user_candidato` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `accepted` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_friends`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `friends_users_and_rhusers`
--

INSERT INTO `friends_users_and_rhusers` (`id_friends`, `email_user_rh`, `email_user_candidato`, `accepted`) VALUES
(2, 'julianarecrutadora@gmail.com', 'joaosilveiro@yahoo.com', 'no'),
(3, 'julianarecrutadora@gmail.com', 'julioclmafra@gmail.com', 'yes'),
(6, 'recrutadorambev@gmail.com', 'julioclmafra@gmail.com', 'yes'),
(8, 'smokerh@gmail.com', 'joaosilveiro@yahoo.com', 'no'),
(10, 'recrutadorambev@gmail.com', 'joaosilveiro@yahoo.com', 'no'),
(11, 'recrutadorambev@gmail.com', 'anafrag@gmail.com', 'yes'),
(12, 'recrutadotcom@gmail.com', 'julioclmafra@gmail.com', 'no'),
(13, 'julianarecrutadora@gmail.com', 'anafrag@gmail.com', 'yes'),
(14, 'julianarecrutadora@gmail.com', 'kaue_costa@gmail.com', 'yes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE IF NOT EXISTS `mensagem` (
  `id_mensagem` int(11) NOT NULL AUTO_INCREMENT,
  `fk_recrutador` int(11) NOT NULL,
  `fk_candidato` int(11) NOT NULL,
  `de` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `para` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mensagem` text COLLATE utf8_unicode_ci NOT NULL,
  `horario` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_mensagem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id_profile` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao_perfil` text COLLATE utf8_unicode_ci,
  `descricao_interesse` text COLLATE utf8_unicode_ci,
  `descricao_faculdade` text COLLATE utf8_unicode_ci,
  `type_job` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_job` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_profile`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `profile`
--

INSERT INTO `profile` (`id_profile`, `photo`, `descricao_perfil`, `descricao_interesse`, `descricao_faculdade`, `type_job`, `time_job`, `estate`, `city`, `tel_number`) VALUES
(1, '1651901104-rhsolidario.jpg', 'Sou um estudante de Desenvolvimento de Sistemas em formação, faço Gestão de TI na fatec, e atualmente desenvolvo sistemas em PHP, como também tenho conhecimentos no framework de desenvolvimento Laravel. Em conjunto, possuo uma base muito sólida em HTML, CSS e Bootstrap. Tenho projetos em laravel e em php, a maioria para gerenciamento de alguns casos, utilizando CRUD.', 'Pretendo trabalhar com o Laravel e o PHP.', 'Ensino médio Completo', 'Estágio', 'Manhã', 'AM', 'Cotia', '11946586758'),
(2, '1651717919-rhsolidario.jpg', 'Me chamo João, sou estudante de Engenharia de Software.', 'Estagiar com projetos de sistemas.', 'Ensino Superior Incompleto em TI', 'Estágio', 'Manhã', 'RJ', 'Copacabana', '11941086758'),
(3, '1651717746-rhsolidario.jpg', 'Ola, me chamo Kaue. Atualmente estou no ensino médio, e estou terminando o curso técnico de Desenvolvimento de Sistemas.', 'Tenho interesse em estagiar na área de Desenvolvimento de Soft e Páginas Web.', 'Ensino Técnico Completo em TI', 'Estágio', 'Manhã', 'SP', 'São Paulo', '11966086758'),
(4, '1652126306-rhsolidario.jpg', 'Ola, sou a Ana, tenho 22 anos, atualmente trabalho com Desenvolvimento front end.', 'Desenvolvimento back-end.', 'Ensino Superior Completo em TI', 'Trainee', 'Manhã', 'MG', 'Ouro Preto', '11946086858'),
(5, '1652127234-rhsolidario.jpg', 'Sou o Matheus, atualmente cursando engenharia de software pela USP e procurando por estágio.', 'Desenvolvimento de Sistemas Desk, web ou gerenciamento de projetos.', 'Ensino Superior Incompleto em TI', 'Estágio', 'Manhã', 'SP', 'São Paulo', '11946556758'),
(6, NULL, 'Ola, eu sou o ...', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, 'Ola, eu sou o ...', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, 'Ola, eu sou o ...', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_user` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `profile_fk` int(11) NOT NULL,
  PRIMARY KEY (`id_users`),
  KEY `informations_fk` (`profile_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_users`, `email`, `name`, `password`, `type_user`, `profile_fk`) VALUES
(1, 'julioclmafra@gmail.com', 'Julio Mafra', 'admin', 'Candidato', 1),
(2, 'joaosilveiro@yahoo.com', 'João Silverio', 'admin', 'Candidato', 2),
(3, 'kaue_costa@gmail.com', 'Kaue Costa', 'admin', 'Candidato', 3),
(4, 'anafrag@gmail.com', 'Ana Fragner', 'admin', 'Candidato', 4),
(5, 'matheusengsoft@gmail.com', 'matheusdeor@gmail.com', 'admin', 'Candidato', 5),
(6, 'joao@nome.com', 'joao carlos', 'lalala', 'Candidato', 6),
(7, 'joaozinho@gmail.com', 'joaozin', 'admin', 'Candidato', 7),
(8, 'vinc@gmail.com', 'as', 'admin', 'Candidato', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_rh`
--

CREATE TABLE IF NOT EXISTS `users_rh` (
  `id_users_rh` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_user` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_users_rh`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `users_rh`
--

INSERT INTO `users_rh` (`id_users_rh`, `email`, `name`, `password`, `type_user`) VALUES
(1, 'recrutadorambev@gmail.com', 'Célia Alves', 'admin', 'Recrutador'),
(2, 'julianarecrutadora@gmail.com', 'Juliana Alves', 'admin', 'Recrutador'),
(3, 'recrutadotcom@gmail.com', 'Dot Dev', 'admin', 'Recrutador'),
(4, 'smokerh@gmail.com', 'Smoke Mom', 'admin', 'Recrutador');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
