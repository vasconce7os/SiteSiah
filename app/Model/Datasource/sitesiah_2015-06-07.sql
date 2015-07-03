-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jul-2015 às 11:30
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sitesiah`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`id` int(11) NOT NULL,
  `login` varchar(150) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `online` tinyint(1) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`id`, `login`, `password`, `status`, `online`, `modified`, `user_id`) VALUES
(1, 'Sistema', '123', 0, NULL, '2015-05-11 11:12:23', 1),
(2, 'Vasconcelos', '123', 1, NULL, '2015-05-13 03:04:12', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
`id` int(11) NOT NULL,
  `url` varchar(225) DEFAULT NULL,
  `alt` varchar(225) DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `link` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `url`, `alt`, `admin_id`, `modified`, `created`, `status`, `link`) VALUES
(1, 'img/banners/imgBannerAl_2_Vale_do_sol.jpeg', 'Vale do sol', 2, '2015-06-01 14:00:39', '2015-06-01 13:58:32', 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamadomsgs`
--

CREATE TABLE IF NOT EXISTS `chamadomsgs` (
`id` bigint(20) NOT NULL,
  `msg` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `chamado_id` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `chamadomsgs`
--

INSERT INTO `chamadomsgs` (`id`, `msg`, `created`, `modified`, `user_id`, `chamado_id`) VALUES
(11, 'lol', '2015-06-18 16:24:09', '2015-06-18 16:24:09', 3, 3),
(12, '<p>Mais uma msg do <u>adm </u>aqui no <strong>chamado </strong>de ai 3</p>\r\n', '2015-06-22 14:43:56', '2015-06-22 14:43:56', 3, 3),
(13, 'primeira resposta do cliente do cliente no chamado de id:3\r\nBy CabeÃ§Ã£o', '2015-06-22 16:26:01', '2015-06-22 16:26:01', 2, 3),
(14, 'segunda resposta do cliente no chamado de id:3By CabeÃ§Ã£o', '2015-06-22 16:28:38', '2015-06-22 16:28:38', 2, 3),
(15, '<p>Eu <em>aqui </em><u>fazendo </u>um <strong>chamado</strong></p>\r\n', '2015-06-23 14:13:54', '2015-06-23 14:13:54', 3, 3),
(16, 'Iniciando Chamado de id 1', '2015-06-23 16:19:25', '2015-06-23 16:19:25', 2, 1),
(17, 'Aqui sou eu cliente respondendo a mensagem', '2015-06-23 16:20:42', '2015-06-23 16:20:42', 2, 3),
(18, 'Eu vou finalizar', '2015-06-24 13:52:48', '2015-06-24 13:52:48', 2, 3),
(19, 'Mais uma mensagem avisando que eu vou fechar o chamado de id 3', '2015-06-24 13:55:14', '2015-06-24 13:55:14', 2, 3),
(20, 'primeira mensagem no Chamado de id 2', '2015-06-24 16:57:09', '2015-06-24 16:57:09', 2, 2),
(21, '<p><code>E aqui &eacute;</code> a <strong>primeira <big>msg </big></strong>do <u>adm</u></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2015-06-24 17:13:30', '2015-06-24 17:13:30', 3, 2),
(22, '<p>Aqui &eacute; o adm</p>\r\n', '2015-06-24 17:28:05', '2015-06-24 17:28:05', 3, 1),
(23, 'Oi! eu sou o cliente Rodrigues e estou aqui em um atendimento no suporte da SIAH', '2015-06-25 14:39:06', '2015-06-25 14:39:06', 2, 1),
(24, '<p>Depois de <em>muito trabalho</em> pra permitir o acesso a todas as URLs <u>dentro </u>do plugin <strong>Administracao</strong>, aqui estou eu</p>\r\n', '2015-06-25 15:32:51', '2015-06-25 15:32:51', 3, 1),
(25, 'mas uma msg minha pra ver se ajeita o timezone', '2015-06-25 09:52:55', '2015-06-25 09:52:55', 2, 1),
(26, '<p>Ok, agora esta <em>nomal </em>a <strong>hora</strong></p>\r\n', '2015-06-25 09:56:01', '2015-06-25 09:56:01', 3, 1),
(27, 'Pronto eu sou cliente aqui no Chamado de nÃºmero 2', '2015-06-25 10:49:09', '2015-06-25 10:49:09', 2, 2),
(28, 'Testando o novo input', '2015-06-25 11:09:17', '2015-06-25 11:09:17', 2, 2),
(29, 'Uma nova mensagem na segunda feira', '2015-06-29 07:58:02', '2015-06-29 07:58:02', 2, 2),
(30, 'Agora vou encerrar', '2015-06-29 08:01:41', '2015-06-29 08:01:41', 2, 2),
(33, '<p>Mais uma msg do adm, o chat foi reaberto</p>\r\n', '2015-06-30 07:43:15', '2015-06-30 07:43:15', 3, 1),
(34, 'Eu cliente estou respondendo o chat', '2015-06-30 07:45:42', '2015-06-30 07:45:42', 2, 1),
(35, 'mais uma msg cliente', '2015-06-30 07:46:40', '2015-06-30 07:46:40', 2, 1),
(36, 'msg de adm', '2015-06-30 07:47:12', '2015-06-30 07:47:12', 3, 1),
(37, '<p>Test&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande. E txt&atil', '2015-06-30 07:59:34', '2015-06-30 07:59:34', 3, 1),
(38, '<p>Segundo text&atilde;o</p>\r\n\r\n<p>Test&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande. E txt&atilde;o grandalh&atilde;o continua:&nbsp; text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande, text&atilde;o grande e ta-ca-lhe text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o, text&atilde;o vai acabar agora.</p>\r\n\r\n<p>Isso foi um texto do adm</p>\r\n', '2015-06-30 08:03:18', '2015-06-30 08:03:18', 3, 1),
(39, 'Mais um textinho de cliente', '2015-06-30 08:12:58', '2015-06-30 08:12:58', 2, 1),
(40, 'Este Chamado Ã© do user Vasconcelos, com o Id de user 1', '2015-07-01 08:21:03', '2015-07-01 08:21:03', 1, 11),
(41, 'Mais um chamado do Rodrigues', '2015-07-03 10:52:01', '2015-07-03 10:52:01', 2, 12),
(42, 'Primeira mensagem depois da abertura do chamdo id:12', '2015-07-03 10:52:43', '2015-07-03 10:52:43', 2, 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

CREATE TABLE IF NOT EXISTS `chamados` (
`id` bigint(20) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `lastviewclient` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastviewsupport` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('aguardando cliente','aguardando suporte','em desenvolvimento','fechado','aguardando análise inicial') DEFAULT 'aguardando análise inicial',
  `satisfacao` enum('indefinido','ruim','regular','bom','ótimo') NOT NULL DEFAULT 'indefinido',
  `nota` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `chamados`
--

INSERT INTO `chamados` (`id`, `admin_id`, `created`, `modified`, `titulo`, `lastviewclient`, `lastviewsupport`, `status`, `satisfacao`, `nota`, `user_id`) VALUES
(1, 1, '2015-06-16 17:08:29', '2015-06-30 08:12:58', 'Este Ã© o tÃ­tulo 06/16 5', '0000-00-00 00:00:00', '2015-06-30 12:12:58', 'fechado', 'bom', 7, 2),
(2, 1, '2015-06-17 14:34:58', '2015-06-29 08:01:41', 'Este Ã© o tÃ­tulo 06/17 1', '0000-00-00 00:00:00', '2015-06-29 12:01:41', 'fechado', 'bom', 5, 2),
(3, 2, '2015-06-18 14:39:55', '2015-06-24 13:55:14', 'Este Ã© o tÃ­tulo 06/18', '0000-00-00 00:00:00', '2015-06-24 11:55:14', 'fechado', 'regular', 4, 2),
(11, 1, '2015-07-01 08:21:03', '2015-07-01 08:21:03', 'Primeiro chamado do Vasconcelos', '2015-07-01 12:21:03', '2015-07-01 12:21:03', 'aguardando análise inicial', 'indefinido', NULL, 1),
(12, 1, '2015-07-03 10:52:01', '2015-07-03 10:52:43', 'Mais um chamado doRodrigues', '2015-07-03 14:52:43', '2015-07-03 14:52:43', 'aguardando suporte', 'indefinido', NULL, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`id` int(11) NOT NULL,
  `cnpj` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fantasia` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `url_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `naoativo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'link para o site do cliente',
  `created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `cnpj`, `password`, `fantasia`, `url_logo`, `email`, `naoativo`, `link`, `created`) VALUES
(1, '000', '', 'Default', 'img/banners/imgCliente_2.jpeg', 'nenhum@siahonline.com.br', '1', '', '2015-06-01 00:00:00'),
(2, '', '', 'TauÃ¡', 'img/banners/imgCliente_2_TauA.jpeg', '', '', '', '2015-05-13 00:00:00'),
(3, '', '', 'TauÃ¡', 'img/banners/imgCliente_2_TauA.jpeg', '', '', '', '2015-06-02 00:00:00'),
(4, '63', '', 'Nitron com R. Mangueiras', 'img\\clientes\\alt_nitron_com_r_mangueiras_4_2.jpeg', 'email@nitron.com', '', '', '2015-06-08 00:00:00'),
(5, '', '', 'C Borracha', 'img/clientes/imgCliente_2_C_Borracha.jpeg', '', '', '', '2015-05-29 15:10:10'),
(6, '', '', 'PedrÃ£o', 'img/clientes/imgCliente_2_PedrA_o.jpeg', '', '', '', '2015-05-29 15:26:02'),
(7, '', '', 'SV', 'img\\clientes\\tests\\alt_sv_7_2.jpeg', '', '', '', '2015-05-29 15:27:09'),
(8, '342308', '', 'Queiroz', 'img/clientes/imgLogoCli_2_Queiroz.jpeg', '', '', '', '2015-05-29 15:49:21'),
(9, '9723749999999', '', 'Baiano', 'img/clientes/imgLogoCli_2_Baiano.jpeg', 'baiano@lojasbaiano.com', '', 'http://lojasbaiano.com.br', '2015-05-29 15:51:39'),
(10, '001', '', 'Rei das Mangueiras', 'img/clientes/tests/imgLogoCli_2_Rei_das_Mangueiras.jpeg', 'contato@mangueiras.com.br', '', '', '2015-06-02 13:55:12'),
(11, '37248323', '', 'TauÃ¡ lol', 'img/clientes/tests/imgLogoCli_2_TauA_lol.jpeg', '', '', '', '2015-06-02 17:02:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
`id` bigint(20) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `msg` text,
  `modified` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `cliente_id` bigint(20) NOT NULL DEFAULT '1' COMMENT 'deve ser uma ligação com cliente',
  `admin_id` int(11) NOT NULL DEFAULT '1',
  `assunto` varchar(225) DEFAULT NULL,
  `status` enum('lido','respondido','a_ler') DEFAULT 'a_ler',
  `tipo` enum('critica','elogio','sugestao','outros','vendas') DEFAULT NULL COMMENT 'tipo de contato escolhido pelo cliente',
  `resposta` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `email`, `telefone`, `msg`, `modified`, `created`, `cliente_id`, `admin_id`, `assunto`, `status`, `tipo`, `resposta`) VALUES
(8, 'Nome', '', '', 'sdfsdf\r\nMansagem', '2015-05-05 15:51:25', '2015-05-05 15:51:25', 1, 1, 'assunto', 'a_ler', 'elogio', ''),
(9, 'Nome', '', '', 'sdfsdf\r\nMansagem', '2015-05-05 16:01:58', '2015-05-05 16:01:58', 1, 1, 'assunto', 'a_ler', 'elogio', ''),
(10, 'Nome', '', '', 'sdfsdf\r\nMansagem', '2015-05-05 16:05:05', '2015-05-05 16:05:05', 1, 1, 'assunto', 'a_ler', 'elogio', ''),
(11, 'Nome', '', '', 'sdfsdf\r\nMansagem', '2015-05-05 16:05:53', '2015-05-05 16:05:53', 1, 1, 'assunto', 'a_ler', 'elogio', ''),
(12, 'Vasconcelos', 'vasconcelos@siahonline.com.br', '5389.283', 'Mansagem do Vasconcelos', '2015-05-05 16:06:58', '2015-05-05 16:06:58', 1, 1, 'assunto do Vasconcelos', 'a_ler', 'sugestao', ''),
(13, 'Vasconcelos', 'vasconcelos@siahonline.com.br', '5389.283', 'Mansagem do Vasconcelos', '2015-05-05 16:23:15', '2015-05-05 16:23:15', 1, 1, 'assunto do Vasconcelos', 'a_ler', 'sugestao', ''),
(14, 'Vasconcelos', 'vasconcelos@siahonline.com.br', '5389.283', 'Mansagem do Vasconcelos', '2015-05-05 16:28:08', '2015-05-05 16:28:08', 1, 2, 'assunto do Vasconcelos', 'lido', 'sugestao', ''),
(15, 'Vasconcelos', 'vasconcelos@siahonline.com.br', '5389.283', 'Mansagem do Vasconcelos', '2015-05-05 16:33:12', '2015-05-05 16:33:12', 1, 1, 'assunto do Vasconcelos', 'a_ler', 'sugestao', ''),
(16, 'Vasconcelos', 'vasconcelos@siahonline.com.br', '5389.283', 'Mansagem do Vasconcelos', '2015-05-05 16:35:22', '2015-05-05 16:35:22', 1, 1, 'assunto do Vasconcelos', 'lido', 'sugestao', ''),
(17, 'Vasconcelos', 'vasconcelos@siahonline.com.br', '5389.283', 'Mansagem do Vasconcelos', '2015-05-05 16:35:32', '2015-05-05 16:35:32', 1, 1, 'assunto do Vasconcelos', 'a_ler', 'sugestao', ''),
(18, 'Vasconcelos', 'vasconcelos@siahonline.com.br', '5389.283', 'Mansagem do Vasconcelos', '2015-05-05 16:36:12', '2015-05-05 16:36:12', 1, 1, 'assunto do Vasconcelos', 'a_ler', 'sugestao', ''),
(19, 'Vasconcelos', 'vasconcelos@siahonline.com.br', '5389.283', 'Mansagem do Vasconcelos', '2015-05-05 16:37:26', '2015-05-05 16:37:26', 1, 1, 'assunto do Vasconcelos', 'a_ler', 'sugestao', ''),
(20, 'Vasconcelos', 'vasconcelos@siahonline.com.br', '5389.283', 'Mansagem do Vasconcelos', '2015-05-05 16:38:29', '2015-05-05 16:38:29', 1, 1, 'assunto do Vasconcelos', 'a_ler', 'sugestao', ''),
(21, 'Vasconcelos', 'vasconcelos@siahonline.com.br', '5389.283', 'Mansagem do Vasconcelos', '2015-05-05 16:38:42', '2015-05-05 16:38:42', 1, 1, 'assunto do Vasconcelos', 'a_ler', 'sugestao', ''),
(22, 'Vasconcelos', 'vasconcelos@siahonline.com.br', '5389.283', 'Mansagem do Vasconcelos', '2015-05-05 16:38:56', '2015-05-05 16:38:56', 1, 2, 'assunto do Vasconcelos', 'respondido', 'sugestao', '\n\n<h1>\n	assunto do Vasconcelos</h1>\n\n<p><strong>Dois</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>o</h2>\r\n\r\n<h2>2</h2>\r\n'),
(23, 'Vasconcelos', 'vasconcelos@siahonline.com.br', '5389.283', 'Mansagem do Vasconcelos', '2015-05-05 16:52:37', '2015-05-05 16:52:37', 1, 1, 'assunto do Vasconcelos', 'lido', 'sugestao', ''),
(24, 'Vasconcelos', 'vasconcelos@siahonline.com.br', '5389.283', 'Mansagem do Vasconcelos', '2015-05-05 16:53:05', '2015-05-05 16:53:05', 1, 1, 'assunto do Vasconcelos', 'lido', 'sugestao', ''),
(25, 'Vasconcelos', 'vasconcelos@siahonline.com.br', '5389.283', 'Mansagem do Vasconcelos', '2015-05-05 16:53:59', '2015-05-05 16:53:59', 1, 1, 'assunto do Vasconcelos', 'lido', 'sugestao', ''),
(26, 'Vasconcelos', 'vasconcelos@siahonline.com.br', '5389.283', 'Mansagem do Vasconcelos', '2015-05-05 16:58:20', '2015-05-05 16:58:20', 1, 1, 'assunto do Vasconcelos', 'lido', 'sugestao', ''),
(27, 'Vasconcelos3', 'cerebro.vasconcelos@yahoo.com.br', '123598541212150', 'Mensagem3 agora com email yahoo', '2015-05-05 17:07:13', '2015-05-05 17:07:13', 1, 2, 'assunto do Vasconcelos3', 'respondido', 'outros', '\n\n		<table style="background-color:rgb(204, 230, 228); margin: auto;" align="center" cellpadding="0" cellspacing="0" width="600">\n			<tbody>\n				<tr>\n					<td>\n						<table border="0" cellpadding="0" cellspacing="0" height="80px" width="220px">\n							<tbody>\n								<tr>\n									<td style="color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;">\n										<a target="_blank" href="http://www.siahonline.com.br" title="SIAH">\n											<img src="http://www.siahonline.com.br/img/logo_siah_220x80.png" alt="SIAH" style="margin:10px;min-height:auto; !important;max-width:100% !important;">\n										</a>\n									</td>\n								</tr>\n							</tbody>\n						</table>\n						<table style="border-top-color:rgb(199, 199, 199);border-top-style:solid;border-top-width:1px;" border="0" cellpadding="0" cellspacing="0" width="100%">\n							<tbody>\n								<tr>\n									<td style="color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;padding-left:0px;padding-right:0px;">\n										<h1 style="text-align:center; color: #2F58A4;">\n													assunto do Vasconcelos3										</h1>\n									</td>\n								</tr>\n							</tbody>\n						</table>\n						<table border="0" cellpadding="0" cellspacing="0" width="100%">\n							<tbody >\n								<tr>\n									<td style="padding: 10px;">\n										\n										<p>Internet de tapioca</p>\r\n\n									</td>\n								</tr>\n							</tbody>\n						</table>\n						<style type="text/css">\n							#imgRight\n							{\n								  -webkit-filter: grayscale(100%);\n											   -moz-filter: grayscale(100%);\n											    -ms-filter: grayscale(100%);\n											     -o-filter: grayscale(100%);\n											filter: grayscale(100%);\n							}\n							#imgRight:hover\n							{\n								  -webkit-filter: grayscale(0%);\n											   -moz-filter: grayscale(0%);\n											    -ms-filter: grayscale(0%);\n											     -o-filter: grayscale(0%);\n											filter: grayscale(0%);\n							}\n						</style>\n						<table style="border-top-color:rgb(199, 199, 199);border-top-style:solid;border-top-width:1px;" border="0" cellpadding="0" cellspacing="0" width="100%">\n							<tbody>\n								<tr>\n									<td style="padding:20px 25px;color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;" width="80%">\n										Copyright \n										2015										<br>\n										Todos os direitos reservados.\n									</td>\n									<td style="padding:20px 25px;color:rgb(74, 66, 60); red; font-family:arial, helvetica, sans-serif;font-size:16px;" align="right" >\n										<a target="_blank" href="http://www.siahonline.com.br" title="SIAH">\n										<img id="imgRight" src="http://www.siahonline.com.br/img/logo_siah_simples_transp.png" alt="SIAH" \n											style="border:0px none;min-height:auto !important;max-width:100% !important;\n											" \n											height="30" width="80"\n										/>\n									</td>\n								</tr>\n							</tbody>\n						</table>\n					</td>\n				</tr>\n			</tbody>\n		</table>'),
(28, 'Vasconcelos4', 'cerebro.vasconcelos@yahoo.com.br', '123598541212150', 'Mensagem4 ainda com email yahoo', '2015-05-05 17:15:46', '2015-05-05 17:15:46', 1, 1, 'assunto do Vasconcelos4', 'lido', 'outros', ''),
(29, 'Vasconcelos8', 'cerebro.vasconcelos@yahoo.com.br', '34423182258519', 'msg 8', '2015-05-06 14:03:05', '2015-05-06 14:03:05', 1, 1, 'assunto do Vasconcelos8', 'a_ler', 'critica', ''),
(30, 'AdÃ£o Vasconcelos22', 'siah-pc-01@outlook.com', '908782154', 'ewfemj\r\nAdÃ£o', '2015-05-06 15:11:27', '2015-05-06 15:11:27', 1, 2, 'assunto do AdÃ£o Vasconcelos22', 'lido', 'sugestao', ''),
(31, 'juliam reis ', 'julyanreiss@hotmail.com', '982148101', 'Xnnxhwgdgdhannxhdnenchdh', '2015-05-14 11:06:39', '2015-05-14 11:06:39', 1, 2, 'teste ', 'respondido', 'vendas', '\n\n<h1>\n	teste </h1>\n\n<h1>OK Juliam</h1>\r\n\r\n<p>Recebemos sua mensagem</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2 style="font-style:italic;">obrigado pelo <strong>contato</strong>!</h2>\r\n'),
(32, 'AdÃ£o Vasconcelos', 'cerebro.vasconcelos@yahoo.com.br', '584268', 'Aqui vai a msg 23', '2015-05-14 11:55:05', '2015-05-14 11:55:05', 1, 2, 'assunto do AdÃ£o Vasconcelo25', 'respondido', 'outros', '\n\n<h1>\n	assunto do AdÃ£o Vasconcelo25</h1>\n\n<p>respondendo</p>\r\n'),
(33, 'AdÃ£o Vasconcelos', 'contato@siahonline.com.br', '545284268', 'ConteÃºdo do email de teste', '2015-05-14 11:58:14', '2015-05-14 11:58:14', 1, 2, 'assunto de teste', 'respondido', 'outros', '\n\n<h1>\n	assunto de teste</h1>\n\n<p>Resposta</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Esta &eacute; a resposta do email contato de testes Sr Ad&atilde;o</p>\r\n'),
(34, 'AdÃ£o Vasconcelos', 'cerebro.vasconcelos@yahoo.com.br', '(92) 9-91-25-5700', 'Lorem ipsum dolor sit amet, ei iisque facilisi sed, ei eam ridens eruditi. Congue soleat cu eum, mel esse facete no, bonorum reprehendunt et sit. Stet nostrud pro ea, mucius nostrum quo te. Esse convenire vel eu. Omnes reformidans usu ex, quo idque debet sensibus ex.\r\n\r\nEu vix ornatus mnesarchum, vim at brute discere deserunt, eu est melius petentium. Sit ut accusam appareat, choro regione facilisi nam ut, tractatos dissentias per ne. Sit minim aeque ex. Veniam civibus pro ne, ei usu viderer signiferumque. Doctus omittam te sed, cu his mazim perfecto.\r\n\r\nMinim quidam sensibus usu ut, an tritani consectetuer mea, docendi eleifend at his. Ex nostrud torquatos usu, suavitate evertitur consetetur ea ius. Ad etiam appareat theophrastus duo. Eu equidem pertinax vis. Pri ancillae ocurreret an, eos scaevola philosophia ea. Sit utinam accumsan disputando ad, ferri lucilius eum cu. Vel iriure deseruisse at.\r\n\r\nWisi consetetur vel at. Duis velit docendi quo et, veniam vivendum ex ius. Nam ei mollis conceptam. Cu vero signiferumque vim, te recteque suscipiantur eum, duo ei propriae accusata.\r\n\r\nCetero malorum aliquando vix no. Eu legere epicuri eos, et eum alia iuvaret phaedrum. His dico fabellas ex. At ius forensibus quaerendum deterruisset, eum noster delicata an, eum in legendos recusabo. Has ex augue admodum dissentiunt, postea verear scribentur no sed. Ne his odio nostrum pertinax. Sed no imperdiet splendide consequuntur.', '2015-05-18 11:32:33', '2015-05-18 11:32:33', 1, 2, 'Teste de segunda feira', 'respondido', 'outros', '\n\n		<table style="background-color:rgb(204, 230, 228); margin: auto;" align="center" cellpadding="0" cellspacing="0" width="600">\n			<tbody>\n				<tr>\n					<td>\n						<table border="0" cellpadding="0" cellspacing="0" height="80px" width="220px">\n							<tbody>\n								<tr>\n									<td style="color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;">\n										<a target="_blank" href="http://www.siahonline.com.br" title="SIAH">\n											<img src="http://www.siahonline.com.br/img/logo_siah_220x80.png" alt="SIAH" style="margin:10px;min-height:auto; !important;max-width:100% !important;">\n										</a>\n									</td>\n								</tr>\n							</tbody>\n						</table>\n						<table style="border-top-color:rgb(199, 199, 199);border-top-style:solid;border-top-width:1px;" border="0" cellpadding="0" cellspacing="0" width="100%">\n							<tbody>\n								<tr>\n									<td style="color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;padding-left:0px;padding-right:0px;">\n										<h1 style="text-align:center; color: #2F58A4;">\n													Teste de segunda feira										</h1>\n									</td>\n								</tr>\n							</tbody>\n						</table>\n						<table border="0" cellpadding="0" cellspacing="0" width="100%">\n							<tbody >\n								<tr>\n									<td style="padding: 10px;">\n										\n										<p>O <u>Ad&atilde;o Vasconcelos</u> <strong>recebemos </strong>sua <em>mensagem</em></p>\r\n\n									</td>\n								</tr>\n							</tbody>\n						</table>\n						<style type="text/css">\n							#imgRight\n							{\n								  -webkit-filter: grayscale(100%);\n											   -moz-filter: grayscale(100%);\n											    -ms-filter: grayscale(100%);\n											     -o-filter: grayscale(100%);\n											filter: grayscale(100%);\n							}\n							#imgRight:hover\n							{\n								  -webkit-filter: grayscale(0%);\n											   -moz-filter: grayscale(0%);\n											    -ms-filter: grayscale(0%);\n											     -o-filter: grayscale(0%);\n											filter: grayscale(0%);\n							}\n						</style>\n						<table style="border-top-color:rgb(199, 199, 199);border-top-style:solid;border-top-width:1px;" border="0" cellpadding="0" cellspacing="0" width="100%">\n							<tbody>\n								<tr>\n									<td style="padding:20px 25px;color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;" width="80%">\n										Copyright \n										2015										<br>\n										Todos os direitos reservados.\n									</td>\n									<td style="padding:20px 25px;color:rgb(74, 66, 60); red; font-family:arial, helvetica, sans-serif;font-size:16px;" align="right" >\n										<a target="_blank" href="http://www.siahonline.com.br" title="SIAH">\n										<img id="imgRight" src="http://www.siahonline.com.br/img/logo_siah_simples_transp.png" alt="SIAH" \n											style="border:0px none;min-height:auto !important;max-width:100% !important;\n											" \n											height="30" width="80"\n										/>\n									</td>\n								</tr>\n							</tbody>\n						</table>\n					</td>\n				</tr>\n			</tbody>\n		</table>'),
(35, 'AdÃ£o Vasconcelos', 'cerebro.vasconcelos@yahoo.com.br', '(92) 9-91-25-5700', 'Aqui Ã© a mensage, e o assunto Ã©:assunto do AdÃ£o Vasconcelos okpsdfkeosk.\r\nA mensagem se trata de vendas.', '2015-05-19 09:49:12', '2015-05-19 09:49:12', 1, 2, 'assunto do AdÃ£o Vasconcelos okpsdfkeosk', 'respondido', 'vendas', '\n\n		<table style="background-color:rgb(204, 230, 228); margin: auto;" align="center" cellpadding="0" cellspacing="0" width="600">\n			<tbody>\n				<tr>\n					<td>\n						<table border="0" cellpadding="0" cellspacing="0" height="80px" width="220px">\n							<tbody>\n								<tr>\n									<td style="color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;">\n										<a target="_blank" href="http://www.siahonline.com.br" title="SIAH">\n											<img src="http://www.siahonline.com.br/img/logo_siah_220x80.png" alt="SIAH" style="margin:10px;min-height:auto; !important;max-width:100% !important;">\n										</a>\n									</td>\n								</tr>\n							</tbody>\n						</table>\n						<table style="border-top-color:rgb(199, 199, 199);border-top-style:solid;border-top-width:1px;" border="0" cellpadding="0" cellspacing="0" width="100%">\n							<tbody>\n								<tr>\n									<td style="color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;padding-left:0px;padding-right:0px;">\n										<h1 style="text-align:center; color: #2F58A4;">\n													assunto do AdÃ£o Vasconcelos okpsdfkeosk										</h1>\n									</td>\n								</tr>\n							</tbody>\n						</table>\n						<table border="0" cellpadding="0" cellspacing="0" width="100%">\n							<tbody >\n								<tr>\n									<td style="padding: 10px;">\n										\n										<p>Respondendo a mensagem</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ornare in velit non gravida. Aenean at scelerisque orci. Vestibulum mi nunc, feugiat dignissim turpis eget, volutpat volutpat enim. Vivamus mattis lacinia magna, non faucibus lectus imperdiet a. Aliquam blandit auctor orci, a suscipit eros pretium non. Aenean sollicitudin urna non ligula vulputate, at lacinia nunc faucibus. Duis varius, neque non interdum gravida, mi ex tincidunt lorem, fermentum accumsan nisi felis id ante.</p>\r\n\r\n<p>Quisque blandit ullamcorper velit, vel volutpat ex pretium malesuada. Fusce et dolor ullamcorper, eleifend erat ac, tempus risus. Curabitur convallis nec justo id volutpat. Ut scelerisque urna ligula, quis ultrices neque mollis at. In mi magna, faucibus et sapien nec, faucibus pellentesque risus. Nulla fringilla egestas lacus, vitae ultrices tellus consequat et. Sed in nunc porta, sagittis nisl in, posuere velit. Nunc posuere metus et tellus commodo, eget condimentum justo venenatis. Duis dolor ante, rutrum quis posuere et, feugiat nec elit. Etiam porttitor elit ut eros lobortis consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>\r\n\r\n<p>Vestibulum arcu tortor, gravida ac auctor non, porta vel turpis. Vivamus a nibh sit amet sapien dictum aliquam nec vitae tortor. Suspendisse convallis venenatis mauris, ac euismod libero efficitur id. Proin malesuada placerat dui, ut gravida justo facilisis in. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris eget lectus vitae enim pellentesque pellentesque. Suspendisse ut leo non felis pellentesque consectetur. Duis luctus urna ut nisl consequat eleifend. Vestibulum auctor in arcu eget lobortis. Nunc tortor nibh, iaculis id blandit sed, maximus sit amet dolor.</p>\r\n\r\n<p>Nulla interdum enim quis aliquam mattis. <span class="marker">Donec </span>rutrum arcu aliquet magna pulvinar, a dictum ipsum bibendum. Nulla in mattis massa. Nulla et efficitur nisl, non pretium purus. Nulla vitae malesuada mi. Nunc iaculis lacus risus, placerat rhoncus magna molestie eu. Cras ipsum nulla, aliquam sit amet felis ut, interdum feugiat diam. Suspendisse malesuada erat dolor, id laoreet magna elementum ut. Suspendisse finibus ligula non nunc feugiat, et egestas mauris <strong>maximus</strong>. Pellentesque eget accumsan risus. Nunc eleifend nisl id pharetra tristique. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>\r\n\r\n<p>Sed sollicitudin nisi a neque suscipit, <u>imperdiet </u>molestie ligula commodo. Aliquam justo sapien, ornare vitae <span style="font-size:12px">iaculis </span>at, aliquet ac libero. Sed finibus felis at felis facilisis, ac scelerisque quam fermentum. Aliquam leo turpis, volutpat et ipsum et, aliquam bibendum enim. Curabitur suscipit ullamcorper arcu molestie molestie. Sed suscipit sem sit amet felis varius interdum. Maecenas pretium, diam rhoncus egestas mollis, mauris ex tristique quam, ac pharetra elit arcu id lorem. Aenean eu ultricies massa, at volutpat purus.</p>\r\n</div>\r\n\n									</td>\n								</tr>\n							</tbody>\n						</table>\n						<style type="text/css">\n							#imgRight\n							{\n								  -webkit-filter: grayscale(100%);\n											   -moz-filter: grayscale(100%);\n											    -ms-filter: grayscale(100%);\n											     -o-filter: grayscale(100%);\n											filter: grayscale(100%);\n							}\n							#imgRight:hover\n							{\n								  -webkit-filter: grayscale(0%);\n											   -moz-filter: grayscale(0%);\n											    -ms-filter: grayscale(0%);\n											     -o-filter: grayscale(0%);\n											filter: grayscale(0%);\n							}\n						</style>\n						<table style="border-top-color:rgb(199, 199, 199);border-top-style:solid;border-top-width:1px;" border="0" cellpadding="0" cellspacing="0" width="100%">\n							<tbody>\n								<tr>\n									<td style="padding:20px 25px;color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;" width="80%">\n										Copyright \n										2015										<br>\n										Todos os direitos reservados.\n									</td>\n									<td style="padding:20px 25px;color:rgb(74, 66, 60); red; font-family:arial, helvetica, sans-serif;font-size:16px;" align="right" >\n										<a target="_blank" href="http://www.siahonline.com.br" title="SIAH">\n										<img id="imgRight" src="http://www.siahonline.com.br/img/logo_siah_simples_transp.png" alt="SIAH" \n											style="border:0px none;min-height:auto !important;max-width:100% !important;\n											" \n											height="30" width="80"\n										/>\n									</td>\n								</tr>\n							</tbody>\n						</table>\n					</td>\n				</tr>\n			</tbody>\n		</table>'),
(36, 'AdÃ£o Vasconcelos 23', 'cerebro.vasconcelos@yahoo.com.br', '(92) 9-91-25-5700', 'Lorem ipsum dolor sit amet, te erroribus definitiones qui, per elit facilis menandri cu. Explicari forensibus mnesarchum at ius, exerci fierent pri id, ad duo mundi probatus. At sed novum option menandri, hinc augue te est. Eos ne lorem delectus. Duo nostro epicuri in, mea nulla nostro consulatu ex.\r\n\r\nEi deleniti indoctum his, virtute definiebas efficiantur at sit. Cu purto prompta vel, ius ei minimum volutpat. Ei sit disputationi concludaturque, summo munere disputando id sed. Graeci impetus iudicabit ea mel, cu eos dicam intellegebat. Simul definiebas necessitatibus nam no, nec porro novum quaerendum no, has clita soluta persequeris ex.\r\n\r\nConsetetur instructior vix ut, ex epicuri adolescens nec, pri vero cibo accusam ut. Qui graece docendi salutatus eu. Has an inimicus tractatos. Ne nec alii alia phaedrum, ea mel ignota docendi gloriatur. Nusquam scribentur qui an. Sonet omnesque ponderum sit ex, ne est simul putant oportere.\r\n\r\nSolet dolorem sententiae eu mei. Utroque partiendo no cum, ei solum albucius maiestatis duo. Ea eum ignota melius scripserit, bonorum temporibus et duo. Pro at hinc fastidii delicatissimi. Modus homero nusquam sea ei. In his ignota efficiantur comprehensam.\r\n\r\nQuo no iudico gubergren disputando, solum forensibus no mea, qui ne nisl vitae animal. In alterum facilisi ius, iisque conceptam intellegebat duo an, te perpetua ocurreret signiferumque pro. Causae sententiae delicatissimi mel ex, ius in sale conclusionemque, te modo option saperet eos. Eu his utamur singulis, usu no splendide elaboraret. Id sed eius maluisset. Meliore accumsan theophrastus at quo, ignota primis eum te, falli euripidis dissentiet at duo.', '2015-05-19 10:55:11', '2015-05-19 10:55:11', 1, 2, 'assunto 23', 'respondido', 'sugestao', '\n\n		<table style="background-color:rgb(204, 230, 228); margin: auto;" align="center" cellpadding="0" cellspacing="0" width="600">\n			<tbody>\n				<tr>\n					<td>\n						<table border="0" cellpadding="0" cellspacing="0" height="80px" width="220px">\n							<tbody>\n								<tr>\n									<td style="color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;">\n										<a target="_blank" href="http://www.siahonline.com.br" title="SIAH">\n											<img src="http://www.siahonline.com.br/img/logo_siah_220x80.png" alt="SIAH" style="margin:10px;min-height:auto; !important;max-width:100% !important;">\n										</a>\n									</td>\n								</tr>\n							</tbody>\n						</table>\n						<table style="border-top-color:rgb(199, 199, 199);border-top-style:solid;border-top-width:1px;" border="0" cellpadding="0" cellspacing="0" width="100%">\n							<tbody>\n								<tr>\n									<td style="color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;padding-left:0px;padding-right:0px;">\n										<h1 style="text-align:center; color: #2F58A4;">\n													assunto 23										</h1>\n									</td>\n								</tr>\n							</tbody>\n						</table>\n						<table border="0" cellpadding="0" cellspacing="0" width="100%">\n							<tbody >\n								<tr>\n									<td style="padding: 10px;">\n										\n										<p>Lorem ipsum dolor sit amet, ex causae alienum eligendi nam, lorem senserit cu vim. Eum eu reque pertinax, error ponderum molestiae mel ea, denique oportere eu sit. Vix at facilis praesent, vis iuvaret disputando ad, et vim mnesarchum moderatius sadipscing. Modus possit duo at, nam ex quaeque adipisci adversarium, eu clita tation eripuit eos. In ridens deserunt expetenda sit. Ea mea exerci cetero.</p>\r\n\r\n<p>An nam quaestio senserit. Semper mandamus duo cu, suas facer expetendis cu vim. Qui ut solum adolescens adversarium, te posse everti animal vis, vel doctus reprimique ut. Choro pertinax in eos, te qui adhuc fabulas expetenda.</p>\r\n\r\n<p>Nonumy integre principes pri cu, te nominati neglegentur accommodare per. Facer affert diceret eu eum, per ne modo adolescens signiferumque, oratio blandit eam eu. His ea omnium definitiones. An qui diam omnesque, habemus commune probatus eu mel, vim ad erant simul laboramus. Cu persequeris neglegentur vix, no aliquip hendrerit sit. Ei consul cetero latine pro, autem ponderum vivendum ei nec. Nec aliquid denique accusam at, ea pro elit veritus persecuti, sea cu accumsan aliquando.</p>\r\n\r\n<p>Apeirian consequat ea pri. Est ceteros instructior suscipiantur cu. Vis ei movet clita regione, nullam sanctus his an. Quo delectus expetenda ullamcorper in.</p>\r\n\r\n<p>Qui te diam legere reformidans, sea vide consetetur te. Dicam ridens in est, ne possim eleifend concludaturque vel, cu enim duis melius eum. Errem putant cu cum, vel eu latine voluptua. Per saepe expetendis ei. Ne discere suavitate erroribus mel, ex vidisse constituam pri, odio impedit omnesque in his.</p>\r\n\r\n<p>Ei graece signiferumque mediocritatem vim, pri sonet expetendis theophrastus et. Vis an assum zril platonem, at utinam delenit perfecto qui, suscipit reprehendunt per ei. An vim solet tation aperiri, et mollis regione per. Dolor oratio laboramus eum cu, ferri prompta consequat eam ne. Clita corpora ne sed, duo malis possit temporibus et. Id pro dicta scaevola conceptam, cum ea ubique soluta.</p>\r\n\r\n<p>Alii liber intellegat sea at. Cu vis sententiae disputando, sed ut munere molestiae. Soleat detraxit vim ei, his ad veri aliquid patrioque. Ea movet noluisse duo, errem offendit ea mea, eos ad placerat lobortis. Amet deterruisset ne nam, everti scaevola forensibus sit et. Usu an magna munere ocurreret, pertinax definiebas pro et.</p>\r\n\r\n<p>Ex mea tritani pertinax, mel at verear feugiat inermis. Sea doming reprimique ad, pri nibh aperiri consetetur cu. Vitae putent virtute ei quo, cu eius dicit phaedrum cum. Duo possim delectus an. Et phaedrum ocurreret ius, ut partem eruditi eos. His ei erroribus voluptaria, ut est numquam detraxit mnesarchum.</p>\r\n\r\n<p>In quem probo accusata nam. Qui nonumy intellegat te, ei sed mazim maluisset. Te utinam maluisset quo, feugiat propriae scribentur usu at, nibh homero mnesarchum ne sea. Te inimicus mnesarchum eos, has eu justo senserit maluisset.</p>\r\n\r\n<p>Usu eu clita mollis antiopam. Vix ei aperiri legendos maluisset, maiorum propriae probatus ei sit. Qui ut scripta postulant rationibus. Quo te natum sanctus antiopam, utroque quaerendum comprehensam cum eu.</p>\r\n\n									</td>\n								</tr>\n							</tbody>\n						</table>\n						<style type="text/css">\n							#imgRight\n							{\n								  -webkit-filter: grayscale(100%);\n											   -moz-filter: grayscale(100%);\n											    -ms-filter: grayscale(100%);\n											     -o-filter: grayscale(100%);\n											filter: grayscale(100%);\n							}\n							#imgRight:hover\n							{\n								  -webkit-filter: grayscale(0%);\n											   -moz-filter: grayscale(0%);\n											    -ms-filter: grayscale(0%);\n											     -o-filter: grayscale(0%);\n											filter: grayscale(0%);\n							}\n						</style>\n						<table style="border-top-color:rgb(199, 199, 199);border-top-style:solid;border-top-width:1px;" border="0" cellpadding="0" cellspacing="0" width="100%">\n							<tbody>\n								<tr>\n									<td style="padding:20px 25px;color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;" width="80%">\n										Copyright \n										2015										<br>\n										Todos os direitos reservados.\n									</td>\n									<td style="padding:20px 25px;color:rgb(74, 66, 60); red; font-family:arial, helvetica, sans-serif;font-size:16px;" align="right" >\n										<a target="_blank" href="http://www.siahonline.com.br" title="SIAH">\n										<img id="imgRight" src="http://www.siahonline.com.br/img/logo_siah_simples_transp.png" alt="SIAH" \n											style="border:0px none;min-height:auto !important;max-width:100% !important;\n											" \n											height="30" width="80"\n										/>\n									</td>\n								</tr>\n							</tbody>\n						</table>\n					</td>\n				</tr>\n			</tbody>\n		</table>'),
(37, 'AdÃ£o Vasconcelos 24', 'cerebro.vasconcelos@yahoo.com.br', '(92) 9-91-25-5700', 'Nec viderer scripserit ei. Sed ei error dictas, vix conceptam scribentur ut, id ius vero verear scriptorem. Quaeque minimum atomorum et per, ei scaevola ullamcorper vis. Eos laudem perpetua necessitatibus no, eos in sensibus iracundia inciderint. Cum ea latine docendi, id nam etiam placerat. Mea labores verterem ex.\r\n\r\nEu elitr aeterno sea. Sit et discere appellantur, harum congue scripserit eos ut. Ea sea autem senserit. Est discere deterruisset mediocritatem at, et sit vitae instructior. Vim quot erroribus te, graeco salutandi sententiae ut mel.\r\n\r\nSuas aeterno maiorum vix ut. Ius in ubique omnium recusabo, ea lobortis oportere dissentiunt nec. Doctus constituam cu qui, an enim appetere gubergren sea, eu has errem iisque accumsan. Pro modus euripidis ut. Reprimique dissentiunt ea vix, mea graece appareat singulis at, per an vide illum meliore. Te scripta dissentiet quo.\r\n\r\nVim in iisque atomorum, mei ad alia utroque expetendis. Quodsi meliore usu ad. Ne insolens incorrupte has, vix nostrud utroque meliore ne. Te has brute maiorum.\r\n\r\nPer eu eius aliquid, no nisl postulant tincidunt pri, eam elit epicurei ex. Quaeque splendide cu nam, mea an laudem inermis, vix eu doctus voluptaria. Eu persius salutandi molestiae eam. Porro democritum qui an. Ei vel sint platonem. Sea id nisl vivendum. In docendi antiopam aliquando sed, ea intellegebat necessitatibus mel, ius id ornatus molestie persequeris.\r\n\r\nEu sed feugiat nominati. Mel omnis concludaturque cu. Ex mea aeterno dignissim. At stet mundi nominavi eam.\r\n\r\nNo adipisci delicatissimi pri, mel ex sale ubique ancillae. Eos ne nisl sale persequeris, minimum appareat vis at. Ne legere corpora liberavisse vim. Pro erroribus vulputate te, cum nibh ponderum repudiare no, an ubique contentiones mei. Utroque imperdiet adipiscing ad nam, nonumes expetendis inciderint et mel. Oporteat iracundia ex eam, ei pri noster ancillae hendrerit.\r\n\r\nAd falli aliquip eam, modus regione adipisci mel id. Offendit urbanitas conclusionemque has te, stet iusto', '2015-05-19 11:12:49', '2015-05-19 11:12:49', 1, 1, 'assunto 24', 'a_ler', 'critica', ''),
(38, 'AdÃ£o Vasconcelos 25', 'cerebro.vasconcelos@yahoo.com.br', '(92) 9-91-25-5700', 'Ex antiopam definitionem per, vim ad electram voluptaria. Scripserit theophrastus et sed, quodsi molestie ei usu, qui elit admodum ea. Ex feugait antiopam sapientem nec, per natum facilisi ea. Omnes evertitur voluptatum eam ea. Qui ad sumo assum voluptatum, eum utinam accusata honestatis ea.\r\n\r\nNe vidisse nonumes mediocritatem vix. Hinc nominati accommodare qui ne, per in nonumy utamur sanctus, nobis facete omittam ex mei. Vim sensibus constituam conclusionemque te. Vix no nisl iuvaret, vocent nostrud eu sea. Vero zril consul no mea.\r\n\r\nSolet signiferumque nam id. Dicunt noluisse democritum pro ex. Nec an admodum deserunt, dissentias mediocritatem sea ei. Vis tacimates invenire inciderint ea, adhuc vivendo electram qui in, at vel alii invenire. At his vidit albucius salutatus, mea ut quem salutandi splendide. Option voluptatibus eam ea, te tota aliquando usu. Ex eos alii maiorum, te nam offendit delicata maluisset.\r\n\r\nSoluta discere fabellas has no, mel cu solum perfecto facilisis. Dicta pertinax ex sit, pro an tale graece dolorum, cum ceteros oportere assueverit at. Odio ocurreret in pri, ad vide propriae quo. Quis solet alterum vis at, vis eu persius prodesset forensibus, causae epicurei et sit.\r\n\r\nMovet facete consequat sea et. Ad pri dicant reprehendunt, ea eos mazim vidisse delicatissimi. Impetus constituto in his, ut sanctus percipit eam, illud aliquam efficiendi eum an. Eu vis graece docendi, causae percipitur suscipiantur eu cum.\r\n\r\nEt pro summo civibus definitionem, vel euismod deserunt argumentum in. Accusata principes qui ut. Has dictas quaerendum ne. Sed ex petentium mediocritatem. Mei eros dicta et, zril theophrastus intellegebat sea id. Unum epicurei pericula duo in, verterem iudicabit abhorreant est te.\r\n\r\nSuavitate consulatu assueverit in mel, has eu delenit admodum alienum. Quo tation habemus perfecto in, ex saepe cotidieque sit. Has tamquam utroque voluptaria in, everti omittam suavitate vis eu, mei te dicta voluptua. At inermis admodum vix. Eros fierent mei ', '2015-05-19 11:17:44', '2015-05-19 11:17:44', 1, 1, 'Assunto 25', 'a_ler', 'elogio', ''),
(39, 'AdÃ£o Vasconcelos 26', 'cerebro.vasconcelos@yahoo.com.br', '(92) 9-9125-5700', 'An usu case lorem mediocritatem, ne reque porro congue qui. Ne his postea vidisse, possim delectus eu est, ut ius dictas oblique dissentias. Ius quidam cetero ad, eirmod aliquid te eos. Has ocurreret imperdiet at, perfecto mnesarchum accommodare ne pri. His id stet autem accusamus, pro ei libris vocent principes, mea ei quot habemus. Ne mea agam accusamus necessitatibus, quo ne alii iudico alienum.\r\n\r\nEx posse urbanitas prodesset ius. Et numquam fabellas has, cu graece eirmod labitur eum, mutat laudem qui id. Id nonumy aliquid platonem sed. Vide appetere concludaturque usu id, ex his essent aperiam nominati. Graece reprehendunt ad pro, eos illud prodesset ex. Pri et utamur iracundia interpretaris, qui ad solet eleifend vulputate.\r\n\r\nMelius impedit eu per. Alia volutpat accusamus id est. Sit posse everti quaerendum an, no quo feugiat consequat elaboraret. In aeque inciderint sed. Euismod appareat invenire cum eu. Ad sea animal apeirian, est et nulla iracundia, et essent quodsi aliquid vim.\r\n\r\nAd mei graece nostrud omnesque. Et duo agam laudem necessitatibus. Pro et harum deleniti. Nam solum harum temporibus ea. Regione scaevola no has.\r\n\r\nEligendi ocurreret mea in, virtute eripuit nominavi no eum. Vero epicuri adipisci his ea, pro platonem expetendis in. Semper audire ius ut, ius te choro laboramus maiestatis. Amet affert deleniti ut cum, has te discere fierent detraxit.\r\n\r\nHis dicam quando noster at. In aliquam blandit nam, ut qui lorem democritum. Ad nam esse facilisi neglegentur, exerci accusata an cum. In facer causae duo, nec ut dolore ignota.\r\n\r\nLegere everti moderatius ea cum. Te eos unum oblique, tollit conceptam sadipscing at his. In mel option consequat consetetur. Mel te dolore ancillae phaedrum, pro copiosae forensibus abhorreant at, audire perpetua forensibus mei cu. Duo odio debet ex.\r\n\r\nPri no porro nostrud disputando. Viris probatus quo no. Est suas virtute partiendo an. Eos impedit civibus evertitur ut, ei sit causae voluptatibus. Tibique hendrerit ea nec, in mei', '2015-05-19 12:22:43', '2015-05-19 12:22:43', 1, 2, 'assunto 26', 'lido', 'vendas', ''),
(40, 'AdÃ£o Vasconcelos 26', 'cerebro.vasconcelos@yahoo.com.br', '(92) 9-9125-5700', 'An usu case lorem mediocritatem, ne reque porro congue qui. Ne his postea vidisse, possim delectus eu est, ut ius dictas oblique dissentias. Ius quidam cetero ad, eirmod aliquid te eos. Has ocurreret imperdiet at, perfecto mnesarchum accommodare ne pri. His id stet autem accusamus, pro ei libris vocent principes, mea ei quot habemus. Ne mea agam accusamus necessitatibus, quo ne alii iudico alienum.\r\n\r\nEx posse urbanitas prodesset ius. Et numquam fabellas has, cu graece eirmod labitur eum, mutat laudem qui id. Id nonumy aliquid platonem sed. Vide appetere concludaturque usu id, ex his essent aperiam nominati. Graece reprehendunt ad pro, eos illud prodesset ex. Pri et utamur iracundia interpretaris, qui ad solet eleifend vulputate.\r\n\r\nMelius impedit eu per. Alia volutpat accusamus id est. Sit posse everti quaerendum an, no quo feugiat consequat elaboraret. In aeque inciderint sed. Euismod appareat invenire cum eu. Ad sea animal apeirian, est et nulla iracundia, et essent quodsi aliquid vim.\r\n\r\nAd mei graece nostrud omnesque. Et duo agam laudem necessitatibus. Pro et harum deleniti. Nam solum harum temporibus ea. Regione scaevola no has.\r\n\r\nEligendi ocurreret mea in, virtute eripuit nominavi no eum. Vero epicuri adipisci his ea, pro platonem expetendis in. Semper audire ius ut, ius te choro laboramus maiestatis. Amet affert deleniti ut cum, has te discere fierent detraxit.\r\n\r\nHis dicam quando noster at. In aliquam blandit nam, ut qui lorem democritum. Ad nam esse facilisi neglegentur, exerci accusata an cum. In facer causae duo, nec ut dolore ignota.\r\n\r\nLegere everti moderatius ea cum. Te eos unum oblique, tollit conceptam sadipscing at his. In mel option consequat consetetur. Mel te dolore ancillae phaedrum, pro copiosae forensibus abhorreant at, audire perpetua forensibus mei cu. Duo odio debet ex.\r\n\r\nPri no porro nostrud disputando. Viris probatus quo no. Est suas virtute partiendo an. Eos impedit civibus evertitur ut, ei sit causae voluptatibus. Tibique hendrerit ea nec, in mei', '2015-05-19 12:23:28', '2015-05-19 12:23:28', 1, 1, 'assunto 26', 'a_ler', 'vendas', ''),
(41, 'AdÃ£o Vasconcelos 26', 'cerebro.vasconcelos@yahoo.com.br', '(92) 9-9125-5700', 'An usu case lorem mediocritatem, ne reque porro congue qui. Ne his postea vidisse, possim delectus eu est, ut ius dictas oblique dissentias. Ius quidam cetero ad, eirmod aliquid te eos. Has ocurreret imperdiet at, perfecto mnesarchum accommodare ne pri. His id stet autem accusamus, pro ei libris vocent principes, mea ei quot habemus. Ne mea agam accusamus necessitatibus, quo ne alii iudico alienum.\r\n\r\nEx posse urbanitas prodesset ius. Et numquam fabellas has, cu graece eirmod labitur eum, mutat laudem qui id. Id nonumy aliquid platonem sed. Vide appetere concludaturque usu id, ex his essent aperiam nominati. Graece reprehendunt ad pro, eos illud prodesset ex. Pri et utamur iracundia interpretaris, qui ad solet eleifend vulputate.\r\n\r\nMelius impedit eu per. Alia volutpat accusamus id est. Sit posse everti quaerendum an, no quo feugiat consequat elaboraret. In aeque inciderint sed. Euismod appareat invenire cum eu. Ad sea animal apeirian, est et nulla iracundia, et essent quodsi aliquid vim.\r\n\r\nAd mei graece nostrud omnesque. Et duo agam laudem necessitatibus. Pro et harum deleniti. Nam solum harum temporibus ea. Regione scaevola no has.\r\n\r\nEligendi ocurreret mea in, virtute eripuit nominavi no eum. Vero epicuri adipisci his ea, pro platonem expetendis in. Semper audire ius ut, ius te choro laboramus maiestatis. Amet affert deleniti ut cum, has te discere fierent detraxit.\r\n\r\nHis dicam quando noster at. In aliquam blandit nam, ut qui lorem democritum. Ad nam esse facilisi neglegentur, exerci accusata an cum. In facer causae duo, nec ut dolore ignota.\r\n\r\nLegere everti moderatius ea cum. Te eos unum oblique, tollit conceptam sadipscing at his. In mel option consequat consetetur. Mel te dolore ancillae phaedrum, pro copiosae forensibus abhorreant at, audire perpetua forensibus mei cu. Duo odio debet ex.\r\n\r\nPri no porro nostrud disputando. Viris probatus quo no. Est suas virtute partiendo an. Eos impedit civibus evertitur ut, ei sit causae voluptatibus. Tibique hendrerit ea nec, in mei', '2015-05-19 12:25:17', '2015-05-19 12:25:17', 1, 1, 'assunto 26', 'a_ler', 'vendas', ''),
(42, 'AdÃ£o Vasconcelos 27', 'cerebro.vasconcelos@yahoo.com.br', '(92) 9-9125-5700', 'Mensagem 27\r\n\r\nAn usu case lorem mediocritatem, ne reque porro congue qui. Ne his postea vidisse, possim delectus eu est, ut ius dictas oblique dissentias. Ius quidam cetero ad, eirmod aliquid te eos. Has ocurreret imperdiet at, perfecto mnesarchum accommodare ne pri. His id stet autem accusamus, pro ei libris vocent principes, mea ei quot habemus. Ne mea agam accusamus necessitatibus, quo ne alii iudico alienum.\r\n\r\nEx posse urbanitas prodesset ius. Et numquam fabellas has, cu graece eirmod labitur eum, mutat laudem qui id. Id nonumy aliquid platonem sed. Vide appetere concludaturque usu id, ex his essent aperiam nominati. Graece reprehendunt ad pro, eos illud prodesset ex. Pri et utamur iracundia interpretaris, qui ad solet eleifend vulputate.\r\n', '2015-05-19 12:27:32', '2015-05-19 12:27:32', 1, 2, 'assunto 27', 'lido', 'critica', ''),
(43, 'AdÃ£o Vasconcelos 28', 'cerebro.vasconcelos@yahoo.com.br', '(92) 9-9125-5700', 'Mensagem 28\r\n\r\nAn usu case lorem mediocritatem, ne reque porro congue qui. Ne his postea vidisse, possim delectus eu est, ut ius dictas oblique dissentias. Ius quidam cetero ad, eirmod aliquid te eos. Has ocurreret imperdiet at, perfecto mnesarchum accommodare ne pri. His id stet autem accusamus, pro ei libris vocent principes, mea ei quot habemus. Ne mea agam accusamus necessitatibus, quo ne alii iudico alienum.\r\n\r\nEx posse urbanitas prodesset ius. Et numquam fabellas has, cu graece eirmod labitur eum, mutat laudem qui id. Id nonumy aliquid platonem sed. Vide appetere concludaturque usu id, ex his essent aperiam nominati. Graece reprehendunt ad pro, eos illud prodesset ex. Pri et utamur iracundia interpretaris, qui ad solet eleifend vulputate.\r\n', '2015-05-19 12:30:15', '2015-05-19 12:30:15', 1, 2, 'assunto 28', 'lido', 'elogio', ''),
(44, '', '', '(92) 9-9125-5700', 'Noite', '2015-06-03 00:54:47', '2015-06-03 00:54:47', 1, 2, '', 'lido', 'outros', ''),
(45, 'Sarah', 'sarah@siahonline.com.br', '92981191414', 'Me encaminha esse teste Will.', '2015-06-15 12:10:15', '2015-06-15 12:10:15', 1, 2, 'Teste', 'lido', 'outros', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabchamados`
--

CREATE TABLE IF NOT EXISTS `tabchamados` (
  `id` int(9) NOT NULL,
  `ano` int(9) NOT NULL,
  `cnpj_cliente` varchar(20) COLLATE utf8_bin NOT NULL,
  `id_status` int(2) NOT NULL,
  `id_tipo` int(2) NOT NULL,
  `id_tecnico` int(2) NOT NULL,
  `relato` text COLLATE utf8_bin NOT NULL,
  `url` text COLLATE utf8_bin NOT NULL,
  `data_hora_abertura` varchar(50) COLLATE utf8_bin NOT NULL,
  `data_hora_fechamento` varchar(50) COLLATE utf8_bin NOT NULL,
  `parecer` text COLLATE utf8_bin,
  `obs_validacao` text COLLATE utf8_bin,
  `id_satisfacao` int(2) NOT NULL,
  `usercreate` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tabchamados`
--

INSERT INTO `tabchamados` (`id`, `ano`, `cnpj_cliente`, `id_status`, `id_tipo`, `id_tecnico`, `relato`, `url`, `data_hora_abertura`, `data_hora_fechamento`, `parecer`, `obs_validacao`, `id_satisfacao`, `usercreate`) VALUES
(1, 2015, '07.644.003/0001-07', 1, 2, 1, 'Este Ã© o chamado', '', '02/06/2015 14:37:10', '', NULL, NULL, 1, 'Claudionor'),
(2, 2015, '07.644.003/0001-07', 1, 1, 1, 'texto de recla...', '', '23/06/2015 14:08:34', '', NULL, NULL, 1, 'Claudionor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabclientes`
--

CREATE TABLE IF NOT EXISTS `tabclientes` (
  `cnpj` varchar(20) COLLATE utf8_bin NOT NULL,
  `razao` varchar(240) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `senha` varchar(20) COLLATE utf8_bin NOT NULL,
  `responsavel` varchar(50) COLLATE utf8_bin NOT NULL,
  `tipo` char(1) COLLATE utf8_bin NOT NULL DEFAULT 'C'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tabclientes`
--

INSERT INTO `tabclientes` (`cnpj`, `razao`, `email`, `senha`, `responsavel`, `tipo`) VALUES
('07.644.003/0001-07', 'SEC Administradora de Imóveis Ltda. - ME', 'secimoveis@vivax.com.br', '123', 'Claudionor', 'C');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabsatisfacao`
--

CREATE TABLE IF NOT EXISTS `tabsatisfacao` (
  `id` int(2) NOT NULL,
  `descricao` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tabsatisfacao`
--

INSERT INTO `tabsatisfacao` (`id`, `descricao`) VALUES
(1, 'REGULAR'),
(2, 'BOM'),
(3, 'ÓTIMO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabstatus`
--

CREATE TABLE IF NOT EXISTS `tabstatus` (
  `id` int(2) NOT NULL,
  `descricao` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tabstatus`
--

INSERT INTO `tabstatus` (`id`, `descricao`) VALUES
(1, 'Aguardando Análise'),
(2, 'Em Análise Técnica'),
(3, 'Em Desenvolvimento'),
(4, 'Fechado - Aguardando Aprovação'),
(5, 'Fechado - Aprovado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabtecnicos`
--

CREATE TABLE IF NOT EXISTS `tabtecnicos` (
  `id` int(2) NOT NULL,
  `nome` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tabtecnicos`
--

INSERT INTO `tabtecnicos` (`id`, `nome`) VALUES
(1, 'Marcelo Mendes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabtextos`
--

CREATE TABLE IF NOT EXISTS `tabtextos` (
  `id` int(11) NOT NULL,
  `posicao` varchar(100) COLLATE utf8_bin NOT NULL,
  `texto` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabtiposchamados`
--

CREATE TABLE IF NOT EXISTS `tabtiposchamados` (
  `id` int(2) NOT NULL,
  `descricao` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tabtiposchamados`
--

INSERT INTO `tabtiposchamados` (`id`, `descricao`) VALUES
(1, 'Registro de Falha'),
(2, 'Atualização de Segurança'),
(3, 'Solicitação de Mudanças'),
(4, 'Mudança de Regra de Negócio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `role` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `cliente_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`, `cliente_id`) VALUES
(1, 'Vasconcelos', '34c21a7f1100d0bd734cf39e68e975d0816054a4', 'admin', '2015-06-08 16:22:04', '2015-06-08 16:22:04', 1),
(2, 'Rodrigues', 'a8636d217b4c627f211e6931c8f10648e17020d2', 'admin', '2015-06-08 16:39:32', '2015-06-08 16:39:32', 1),
(3, 'VasconcelosAdm', '34c21a7f1100d0bd734cf39e68e975d0816054a4', 'admin', '2015-06-18 16:05:03', '2015-06-18 16:05:03', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `login_UNIQUE` (`login`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_crbr_banners_1` (`admin_id`);

--
-- Indexes for table `chamadomsgs`
--
ALTER TABLE `chamadomsgs`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `chamado_id` (`chamado_id`);

--
-- Indexes for table `chamados`
--
ALTER TABLE `chamados`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contatos`
--
ALTER TABLE `contatos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabchamados`
--
ALTER TABLE `tabchamados`
 ADD PRIMARY KEY (`id`), ADD KEY `cnpj_cliente` (`cnpj_cliente`), ADD KEY `id_status` (`id_status`), ADD KEY `id_tipo` (`id_tipo`), ADD KEY `id_tecnico` (`id_tecnico`), ADD KEY `id_satisfacao` (`id_satisfacao`), ADD KEY `id_satisfacao_2` (`id_satisfacao`);

--
-- Indexes for table `tabclientes`
--
ALTER TABLE `tabclientes`
 ADD PRIMARY KEY (`cnpj`);

--
-- Indexes for table `tabsatisfacao`
--
ALTER TABLE `tabsatisfacao`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabstatus`
--
ALTER TABLE `tabstatus`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabtecnicos`
--
ALTER TABLE `tabtecnicos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabtextos`
--
ALTER TABLE `tabtextos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabtiposchamados`
--
ALTER TABLE `tabtiposchamados`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD KEY `cliente_id` (`cliente_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `chamadomsgs`
--
ALTER TABLE `chamadomsgs`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `chamados`
--
ALTER TABLE `chamados`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `contatos`
--
ALTER TABLE `contatos`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `admins`
--
ALTER TABLE `admins`
ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `banners`
--
ALTER TABLE `banners`
ADD CONSTRAINT `fk_crbr_banners_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `chamadomsgs`
--
ALTER TABLE `chamadomsgs`
ADD CONSTRAINT `fk_chamados_chamodosmsgs` FOREIGN KEY (`chamado_id`) REFERENCES `chamados` (`id`),
ADD CONSTRAINT `fk_users_chamadomsgs` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `tabchamados`
--
ALTER TABLE `tabchamados`
ADD CONSTRAINT `tabchamados_ibfk_1` FOREIGN KEY (`cnpj_cliente`) REFERENCES `tabclientes` (`cnpj`) ON UPDATE CASCADE,
ADD CONSTRAINT `tabchamados_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `tabstatus` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `tabchamados_ibfk_3` FOREIGN KEY (`id_tipo`) REFERENCES `tabtiposchamados` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `tabchamados_ibfk_4` FOREIGN KEY (`id_tecnico`) REFERENCES `tabtecnicos` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `tabchamados_ibfk_5` FOREIGN KEY (`id_satisfacao`) REFERENCES `tabsatisfacao` (`id`) ON UPDATE CASCADE,
ADD CONSTRAINT `tabchamados_ibfk_6` FOREIGN KEY (`id_satisfacao`) REFERENCES `tabsatisfacao` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `fk_users_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
