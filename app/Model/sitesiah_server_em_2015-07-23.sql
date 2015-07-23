-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Máquina: mysql08.redehost.com.br
-- Data de Criação: 23-Jul-2015 às 11:51
-- Versão do servidor: 5.6.20-enterprise-commercial-advanced-log
-- versão do PHP: 5.4.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sitesiah`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(150) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `online` tinyint(1) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`id`, `login`, `password`, `status`, `online`, `modified`, `user_id`) VALUES
(1, 'Sistema', '1237478392567981', 0, NULL, '2015-05-11 11:12:23', 1),
(2, 'Vasconcelos', '123varzea', 1, NULL, '2015-05-13 03:04:12', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(225) DEFAULT NULL,
  `alt` varchar(225) DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `link` text,
  PRIMARY KEY (`id`),
  KEY `fk_crbr_banners_1` (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

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
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `msg` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `chamado_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `chamado_id` (`chamado_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

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
(40, 'Este Chamado Ã© do user Vasconcelos, com o Id de user 1', '2015-07-01 08:21:03', '2015-07-01 08:21:03', 6, 11),
(41, 'Mais um chamado do Rodrigues', '2015-07-03 10:52:01', '2015-07-03 10:52:01', 2, 12),
(42, 'Primeira mensagem depois da abertura do chamdo id:12', '2015-07-03 10:52:43', '2015-07-03 10:52:43', 2, 12),
(43, 'Ei suporte porque vocÃª estÃ¡ demorando a responder?', '2015-07-07 11:29:19', '2015-07-07 11:29:19', 2, 12),
(44, 'Este Ã© um chamado do Rodrigues para falar sobre coisa alguma.\r\nBy Rodrigues', '2015-07-08 07:41:15', '2015-07-08 07:41:15', 2, 13),
(45, 'Eu to postando mensagens aqui sÃ³ pra gerar volume', '2015-07-08 09:41:33', '2015-07-08 09:41:33', 2, 12),
(46, '<p>Opa!</p>\r\n\r\n<p>To chegando agora</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Eu sou administrador</p>\r\n', '2015-07-08 09:44:07', '2015-07-08 09:44:07', 3, 12),
(47, 'e aqui sou eu cliente de novo', '2015-07-08 09:52:02', '2015-07-08 09:52:02', 2, 12),
(48, '<p>E aqui sou eu adm</p>\r\n', '2015-07-08 09:52:16', '2015-07-08 09:52:16', 3, 12),
(49, 'To mandando um textÃ£o de Lorem Ipsum\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus scelerisque massa, in placerat nunc dignissim euismod. Sed placerat consequat quam, vel dictum dolor malesuada consequat. Proin facilisis suscipit ligula eget tincidunt. Mauris risus odio, congue a turpis quis, sagittis consequat risus. Quisque erat lectus, iaculis vel maximus laoreet, posuere ut tortor. Morbi ultricies non metus eget volutpat. In hac habitasse platea dictumst. Nam eu risus lectus. Duis vehicula tincidunt augue non viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\r\n\r\nProin vitae odio tempus urna iaculis pretium a id metus. Integer dapibus efficitur ligula vel fermentum. Mauris vehicula ipsum et diam elementum consectetur. Proin mollis arcu ut orci gravida, iaculis posuere diam rhoncus. Curabitur accumsan orci mauris, vel euismod odio interdum sed. In mi urna, faucibus eu tincidunt in, finibus ac ex. Curabitur vulputate accumsan mauris, at condimentum erat congue nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. In sit amet lobortis purus.\r\n\r\nNam condimentum aliquet massa, vitae aliquet tortor. Vivamus sit amet magna id risus tempor iaculis. Curabitur quis varius sem. In aliquet in diam ut molestie. Donec facilisis ex sed dolor vehicula, id dictum augue venenatis. Fusce finibus mauris a ultricies ultrices. Aenean luctus commodo posuere. Maecenas gravida diam non mi cursus porttitor. Suspendisse potenti. Vestibulum auctor, dolor nec ultricies mattis, ex dui aliquet ipsum, eu laoreet metus sapien ac massa. Aenean consectetur, dui id maximus porta, mauris ex vehicula lorem, et bibendum urna tellus quis arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla scelerisque cursus odio sagittis ullamcorper. Donec hendrerit urna ac tempor auctor.\r\n\r\nQuisque ac libero tortor. Sed dignissim at diam a aliquet. Praesent blandit cursus quam sed auctor. Integer vel tincidunt nisi. Proin viverra, urna sed elementum tempus, felis sem rhoncus purus, vitae congue nisl risus dignissim nisi. Aliquam tempus vulputate erat et rutrum. Nulla et sapien fermentum mauris volutpat blandit. Donec urna erat, laoreet scelerisque augue ut, pharetra hendrerit ex. Aliquam felis dui, volutpat non lobortis et, varius vitae eros.\r\n\r\nPraesent et mauris vestibulum, facilisis ex aliquam, ultricies risus. Maecenas pretium risus nec erat tempus vulputate. Nullam a nisl ex. Sed blandit consequat justo, et vehicula nisl ornare et. Donec convallis, ante non congue mattis, nisi lorem dignissim neque, non malesuada magna purus a quam. Etiam diam nisl, mollis consectetur accumsan non, hendrerit ut ipsum. Curabitur ac varius massa, et bibendum velit. Donec eu erat ornare neque sollicitudin fringilla ac id lectus. Phasellus vehicula dui justo, nec sagittis ligula pretium at. Praesent fringilla quam vitae dignissim ultricies. ', '2015-07-08 09:58:32', '2015-07-08 09:58:32', 2, 14),
(50, '<p>N&atilde;o precisava disto tudo</p>\r\n', '2015-07-08 09:59:25', '2015-07-08 09:59:25', 3, 14),
(51, 'precisava sim', '2015-07-08 09:59:43', '2015-07-08 09:59:43', 2, 14),
(52, '<p>Agora eu de Lorem ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;Lorem ipsum dolor sit amet, at rhoncus, suscipit pretium. Dictum sed, magna est et. Nam duis. Eros facilisis ut, donec nisl, gravida id. Consequat velit, nullam nam, aliquam vestibulum.</p>\r\n\r\n<p>Aenean arcu. Blandit et, mollis torquent, taciti magnis. Nec tempus, metus aenean, dolor at condimentum. Nibh aliquet porro. Sem elit magnis, cras eros penatibus, fusce nisl justo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt="+" src="http://lorem-ipsum.perbang.dk/cms_perbang/images/space.gif" style="height:0px; width:1px" /><br />\r\n&nbsp;</p>\r\n', '2015-07-08 10:00:42', '2015-07-08 10:00:42', 3, 14),
(53, 'O problema Ã© que estÃ¡ muito legal.\r\nBy Cliente que eu j esqueci oÂ´nome', '2015-07-09 09:06:31', '2015-07-09 09:06:31', 2, 15),
(54, 'Aqui Ã© mais uma msg do cliente.', '2015-07-09 10:19:10', '2015-07-09 10:19:10', 2, 15),
(55, 'E aqui mais outra', '2015-07-09 10:19:25', '2015-07-09 10:19:25', 2, 15),
(56, 'Estava aguardando cliente?\r\nAgora nÃ£o estÃ¡ mas, pelo menos nÃ£o por enquanto.', '2015-07-16 07:50:28', '2015-07-16 07:50:28', 2, 14),
(57, 'Estou mandando mais uma mensagem sÃ³ pra nÃ£o dizer que eu abandonei o atendimento', '2015-07-16 08:13:26', '2015-07-16 08:13:26', 2, 12),
(58, '<p>Aqui &eacute;&nbsp;o <strong>suporte <span style="font-size:14px">Vasconcelos </span></strong>cumprindo seu papel.</p>\r\n', '2015-07-16 08:33:35', '2015-07-16 08:33:35', 3, 14),
(59, '<p>E de novo o <span style="font-size:22px"><strong>suporte </strong></span>cumprindo <strong>seu papel</strong></p>\r\n', '2015-07-16 08:34:30', '2015-07-16 08:34:30', 3, 14),
(60, 'ConteÃºdo do primeiro chamado da Queiroz', '2015-07-16 10:15:32', '2015-07-16 10:15:32', 5, 16),
(61, 'Mais uma mensagem do Vasconcelos', '2015-07-17 07:54:12', '2015-07-17 07:54:12', 6, 11),
(62, '<p>Aqui &eacute; o adm respondendo o usu&aacute;rio Vasconcelos</p>\r\n', '2015-07-17 07:56:22', '2015-07-17 07:56:22', 3, 11),
(63, 'Que fique claro eu sou cliente', '2015-07-17 08:09:27', '2015-07-17 08:09:27', 6, 11),
(64, '<p>Aqui &eacute; o adm Vasconcelos respondendo o 13</p>\r\n', '2015-07-17 08:19:39', '2015-07-17 08:19:39', 3, 13),
(65, 'Eu sou abm', '2015-07-17 11:01:33', '2015-07-17 11:01:33', 3, 11),
(66, 'Agora eu alterei o id deste user', '2015-07-17 11:15:59', '2015-07-17 11:15:59', 6, 11),
(67, 'olh a msg', '2015-07-17 11:18:36', '2015-07-17 11:18:36', 2, 13),
(68, 'e olha a descriÃ§Ã£o do problema do queiroz13@queiroz12.com', '2015-07-17 11:24:46', '2015-07-17 11:24:46', 5, 17),
(69, 'lol', '2015-07-17 11:25:35', '2015-07-17 11:25:35', 5, 17),
(70, '<p>Pronto adm chegou queiroz</p>\r\n', '2015-07-17 11:26:41', '2015-07-17 11:26:41', 3, 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

CREATE TABLE IF NOT EXISTS `chamados` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `lastviewclient` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastviewsupport` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('aguardando cliente','aguardando suporte','em desenvolvimento','fechado','aguardando análise inicial') DEFAULT 'aguardando análise inicial',
  `satisfacao` enum('indefinido','ruim','regular','bom','ótimo') NOT NULL DEFAULT 'indefinido',
  `nota` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `chamados`
--

INSERT INTO `chamados` (`id`, `admin_id`, `created`, `modified`, `titulo`, `lastviewclient`, `lastviewsupport`, `status`, `satisfacao`, `nota`, `user_id`) VALUES
(1, 1, '2015-06-16 17:08:29', '2015-06-30 08:12:58', 'Este Ã© o tÃ­tulo 06/16 5', '0000-00-00 00:00:00', '2015-06-30 12:12:58', 'fechado', 'bom', 7, 2),
(2, 1, '2015-06-17 14:34:58', '2015-06-29 08:01:41', 'Este Ã© o tÃ­tulo 06/17 1', '0000-00-00 00:00:00', '2015-06-29 12:01:41', 'fechado', 'bom', 5, 2),
(3, 2, '2015-06-18 14:39:55', '2015-06-24 13:55:14', 'Este Ã© o tÃ­tulo 06/18', '0000-00-00 00:00:00', '2015-06-24 11:55:14', 'fechado', 'regular', 4, 2),
(11, 1, '2015-07-01 08:21:03', '2015-07-17 11:15:59', 'Primeiro chamado do Vasconcelos', '2015-07-17 15:15:59', '2015-07-17 15:15:59', 'aguardando suporte', 'indefinido', NULL, 6),
(12, 1, '2015-07-03 10:52:01', '2015-07-16 08:13:26', 'Mais um chamado doRodrigues', '2015-07-16 12:13:26', '2015-07-16 12:13:26', 'aguardando suporte', 'indefinido', NULL, 2),
(13, 1, '2015-07-08 07:41:15', '2015-07-17 11:18:36', 'Mais um chamado poe aqui', '2015-07-17 15:18:36', '2015-07-17 15:18:36', 'aguardando suporte', 'indefinido', NULL, 2),
(14, 1, '2015-07-08 09:58:32', '2015-07-16 08:34:30', 'Mais um chamado em 08/07', '2015-07-16 12:34:30', '2015-07-16 12:34:30', 'aguardando cliente', 'indefinido', NULL, 2),
(15, 1, '2015-07-09 09:06:31', '2015-07-09 10:19:25', 'Eu tenho problma no tooltip!', '2015-07-09 14:19:25', '2015-07-09 14:19:25', 'aguardando suporte', 'indefinido', NULL, 2),
(16, 1, '2015-07-16 10:15:32', '2015-07-16 10:15:32', 'Primeiro chamada Queiroz', '2015-07-16 14:15:32', '2015-07-16 14:15:32', 'aguardando análise inicial', 'indefinido', NULL, 5),
(17, 1, '2015-07-17 11:24:46', '2015-07-17 11:26:41', 'Primeiro chamado do ''queiroz13@queiroz12.com''', '2015-07-17 15:26:41', '2015-07-17 15:26:41', 'aguardando cliente', 'indefinido', NULL, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cnpj` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fantasia` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `url_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `naoativo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT 'link para o site do cliente',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cnpj` (`cnpj`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `cnpj`, `password`, `fantasia`, `url_logo`, `email`, `naoativo`, `link`, `created`) VALUES
(1, '000', '', 'Default', 'img/banners/imgCliente_2.jpeg', 'nenhum@siahonline.com.br', '1', '', '2015-06-01 00:00:00'),
(4, '63', '', 'Nitron com R. Mangueiras', 'img\\clientes\\alt_nitron_com_r_mangueiras_4_2.jpeg', 'email@nitron.com', '', '', '2015-06-08 00:00:00'),
(8, '342308', '', 'Queiroz', 'img/clientes/imgLogoCli_2_Queiroz.jpeg', '', '', '', '2015-05-29 15:49:21'),
(9, '97237497999', '', 'Baiano', 'img/clientes/imgLogoCli_2_Baiano.jpeg', 'baiano@lojasbaiano.com', '', 'http://lojasbaiano.com.br', '2015-05-29 15:51:39'),
(10, '001', '', 'Rei das Mangueiras', 'img/clientes/tests/imgLogoCli_2_Rei_das_Mangueiras.jpeg', 'contato@mangueiras.com.br', '', '', '2015-06-02 13:55:12'),
(12, '213167234982', '', 'Queiroz12', 'img/clientes/tests/imgLogoCli_2_Queiroz12.jpeg', 'queiroz@queiroz.com', '', 'https://www.facebook.com/queirozembalagens', '2015-07-10 10:07:48'),
(13, '21316723498332', '', 'Queiroz13', 'img/clientes/tests/imgLogoCli_2_Queiroz13.jpeg', 'queiroz13@queiroz13.com', '', 'https://www.facebook.com/queirozembalagens', '2015-07-10 10:11:21'),
(21, '873212874', '', 'Lojinha 7 do Vasconcelos', NULL, 'cerebro.vasconcelos@yahoo.com.br', '', '', '2015-07-23 11:31:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
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
  `resposta` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

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
(45, 'Sarah', 'sarah@siahonline.com.br', '92981191414', 'Me encaminha esse teste Will.', '2015-06-15 12:10:15', '2015-06-15 12:10:15', 1, 2, 'Teste', 'lido', 'outros', ''),
(46, 'AdÃ£o Vasconcelos 29', 'cerebro.vasconcelos@yahoo.com.br', '(92) 9-9125-5700', 'Este Ã© o teste29', '2015-07-22 13:40:37', '2015-07-22 13:40:37', 1, 2, 'Teste 29', 'respondido', 'critica', '\n\n		<table style="background-color:rgb(204, 230, 228); margin: auto;" align="center" cellpadding="0" cellspacing="0" width="600">\n			<tbody>\n				<tr>\n					<td>\n						<table border="0" cellpadding="0" cellspacing="0" height="80px" width="220px">\n							<tbody>\n								<tr>\n									<td style="color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;">\n										<a target="_blank" href="http://www.siahonline.com.br" title="SIAH">\n											<img src="http://www.siahonline.com.br/img/logo_siah_220x80.png" alt="SIAH" style="margin:10px;min-height:auto; !important;max-width:100% !important;">\n										</a>\n									</td>\n								</tr>\n							</tbody>\n						</table>\n						<table style="border-top-color:rgb(199, 199, 199);border-top-style:solid;border-top-width:1px;" border="0" cellpadding="0" cellspacing="0" width="100%">\n							<tbody>\n								<tr>\n									<td style="color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;padding-left:0px;padding-right:0px;">\n										<h1 style="text-align:center; color: #2F58A4;">\n													Teste 29										</h1>\n									</td>\n								</tr>\n							</tbody>\n						</table>\n						<table border="0" cellpadding="0" cellspacing="0" width="100%">\n							<tbody >\n								<tr>\n									<td style="padding: 10px;">\n										\n										<div>\r\n<h1 style="text-align:center">Resposta ao 29</h1>\r\n\r\n<p style="text-align:left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <em>Aenean </em>commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla <strong>consequat </strong>massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>\r\n\r\n<p style="text-align:left">Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>\r\n\r\n<p style="text-align:left">Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.</p>\r\n\r\n<p style="text-align:left">Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit <u>cursus </u>nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, <q>nonummy</q> id, metus. Nullam accumsan lorem in dui. Cras <cite>ultricies</cite> mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, <code>posuere</code> ut, mauris. <tt>Praesent</tt> adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut.</p>\r\n\r\n<p style="text-align:left">By <span style="font-size:14px"><strong><em>Vasconcelos</em></strong></span></p>\r\n</div>\r\n\n									</td>\n								</tr>\n							</tbody>\n						</table>\n						<style type="text/css">\n							#imgRight\n							{\n								  -webkit-filter: grayscale(100%);\n											   -moz-filter: grayscale(100%);\n											    -ms-filter: grayscale(100%);\n											     -o-filter: grayscale(100%);\n											filter: grayscale(100%);\n							}\n							#imgRight:hover\n							{\n								  -webkit-filter: grayscale(0%);\n											   -moz-filter: grayscale(0%);\n											    -ms-filter: grayscale(0%);\n											     -o-filter: grayscale(0%);\n											filter: grayscale(0%);\n							}\n						</style>\n						<table style="border-top-color:rgb(199, 199, 199);border-top-style:solid;border-top-width:1px;" border="0" cellpadding="0" cellspacing="0" width="100%">\n							<tbody>\n								<tr>\n									<td style="padding:20px 25px;color:rgb(74, 66, 60);font-family:arial, helvetica, sans-serif;font-size:16px;" width="80%">\n										Copyright \n										2015										<br>\n										Todos os direitos reservados.\n									</td>\n									<td style="padding:20px 25px;color:rgb(74, 66, 60); red; font-family:arial, helvetica, sans-serif;font-size:16px;" align="right" >\n										<a target="_blank" href="http://www.siahonline.com.br" title="SIAH">\n										<img id="imgRight" src="http://www.siahonline.com.br/img/logo_siah_simples_transp.png" alt="SIAH" \n											style="border:0px none;min-height:auto !important;max-width:100% !important;\n											" \n											height="30" width="80"\n										/>\n									</td>\n								</tr>\n							</tbody>\n						</table>\n					</td>\n				</tr>\n			</tbody>\n		</table>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `role` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `cliente_id` int(11) NOT NULL,
  `codigo_ativacao` varchar(500) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `cliente_id` (`cliente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`, `cliente_id`, `codigo_ativacao`) VALUES
(1, 'Default', '34c21a7f1100d0bd734cf39e68e975d0816054a4', 'author', '2015-06-08 16:22:04', '2015-06-08 16:22:04', 1, ''),
(2, 'Rodrigues', 'a8636d217b4c627f211e6931c8f10648e17020d2', 'admin', '2015-06-08 16:39:32', '2015-06-08 16:39:32', 1, ''),
(3, 'VasconcelosAdm', '34c21a7f1100d0bd734cf39e68e975d0816054a4', 'admin', '2015-06-18 16:05:03', '2015-06-18 16:05:03', 1, ''),
(5, 'queiroz13@queiroz12.com', '34fc1606cd28e4340cc113df815f971f71492689', 'author', '2015-07-10 10:11:21', '2015-07-16 10:10:34', 13, '559fd28960160queiroz13@23z12.com14365374810abde642e1da8f4ae2aa2f4e728dcb2e'),
(6, 'Vasconcelos', '34c21a7f1100d0bd734cf39e68e975d0816054a4', 'author', '2015-07-17 08:39:01', '2015-07-17 08:39:01', 1, ''),
(17, 'cerebro.vasconcelos@yahoo.com.br', '34fc1606cd28e4340cc113df815f971f71492689', 'author', '2015-07-23 11:31:20', '2015-07-23 11:32:04', 21, '55b0fab814251cerebro.va32.com.br143766188064052ca943ca27c53bdf246954aeb495');

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
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
