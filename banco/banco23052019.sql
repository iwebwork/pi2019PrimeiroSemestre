-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para pi2019
CREATE DATABASE IF NOT EXISTS `pi2019` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `pi2019`;

-- Copiando estrutura para tabela pi2019.instituicao
CREATE TABLE IF NOT EXISTS `instituicao` (
  `id_inst` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_inst` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nome_respons` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horario_abertura` time NOT NULL,
  `horario_fechamento` time NOT NULL,
  PRIMARY KEY (`id_inst`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela pi2019.instituicao: 4 rows
/*!40000 ALTER TABLE `instituicao` DISABLE KEYS */;
INSERT INTO `instituicao` (`id_inst`, `nome_inst`, `nome_respons`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `email`, `telefone`, `celular`, `descricao`, `img`, `horario_abertura`, `horario_fechamento`) VALUES
	(1, 'teste1', 'fulano', 'seila', 236, 'nao existe', 'contagem', 'minas gerais', 'exemplo@teste.com', '31 23289098', '12 23345653', 'hugiiufiduiuwfiwuwiuuewi', NULL, '00:00:00', '00:00:00'),
	(2, 'teste2', 'cicrano', 'outra', 345, 'seila', 'belo', 'gerais', 'teste@teste.com', '31 28890989', '23 23347263', 'gdscusdhcvusdcvusycsvuyu', NULL, '00:00:00', '00:00:00'),
	(3, 'jnwvwo', 'cbiwbvwi', 'jwoneco', 12, 'vdhbvkie', 'vwbi', 'viovwo', 'viodnj@gmail.com', '3192920390', '21290302090', 'jlbpsaabfvaspvbvfasvsabvsabsvb', NULL, '09:00:00', '19:00:00'),
	(4, 'dsbdjd', 'oiiewhfoifhwi', 'ejcçwv', 5633628, 'fbbfjjeb', 'çwhwiooç', 'krgçewio', 'oerhgiow', 'oegheoi', 'vfhofi', 'ioehoeoe', NULL, '12:00:00', '23:00:00');
/*!40000 ALTER TABLE `instituicao` ENABLE KEYS */;

-- Copiando estrutura para tabela pi2019.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela pi2019.usuarios: 1 rows
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
	(1, 'teste', 'teste@teste.com', '698dc19d489c4e4db73e28a713eab07b');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
