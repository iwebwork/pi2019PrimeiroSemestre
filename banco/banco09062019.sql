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

-- Copiando estrutura para tabela pi2019.doacao
CREATE TABLE IF NOT EXISTS `doacao` (
  `id_pro_recebe` int(50) unsigned NOT NULL,
  `id_instituicao` int(50) unsigned NOT NULL,
  KEY `id_pro_recebe` (`id_pro_recebe`),
  KEY `id_inst` (`id_instituicao`),
  CONSTRAINT `id_inst` FOREIGN KEY (`id_instituicao`) REFERENCES `instituicao` (`id_inst`),
  CONSTRAINT `id_pro_recebe` FOREIGN KEY (`id_pro_recebe`) REFERENCES `produto` (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela pi2019.doacao: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `doacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `doacao` ENABLE KEYS */;

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
  `horario_abertura` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `horario_fechamento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vistoria` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_inst`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela pi2019.instituicao: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `instituicao` DISABLE KEYS */;
INSERT INTO `instituicao` (`id_inst`, `nome_inst`, `nome_respons`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `email`, `telefone`, `celular`, `descricao`, `horario_abertura`, `horario_fechamento`, `cep`, `vistoria`) VALUES
	(6, 'Quero mais', 'Fulano', 'Rua Ãgata', 12, 'Sapucaia II', 'sete lagoas', 'MG', 'funaluno@gmail.com', '536278197379', '2452661726', 'Nos aceitamos qualquer coisa', '08:00', '18:00', '32071-157', 1),
	(7, 'Igor Siqueira da Silva', 'Igor', 'Rua Esmeraldas', 32, 'sao luiz', 'Contagem', 'MG', 'igorsiqueira.adm@gmail.com', '31994032335', '31994032335', 'sbfisbfidsbfuisdfb', '10:00', '11:00', '32071-156', 1),
	(8, 'fulanoDoa', 'fulano', 'Rua Ãgata', 123123, 'Sapucaia II', 'Contagem', 'MG', 'funaluno@gmail.com', '31994032335', '32344678', 'vfbpvjbvldwvlfldfj', '08:10', '22:00', '32071157', 1),
	(9, 'doe', 'joaquin', 'Rua Esmeraldas', 34, 'Sapucaia II', 'Contagem', 'SP', 'joaquin@gmail.com', '3123343234', '1223234455', 'hipsvhsidvhsip', '09:00', '22:00', '32071-156', 1);
/*!40000 ALTER TABLE `instituicao` ENABLE KEYS */;

-- Copiando estrutura para tabela pi2019.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `produto` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela pi2019.produto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

-- Copiando estrutura para tabela pi2019.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela pi2019.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
	(1, 'teste', 'teste@teste.com', '698dc19d489c4e4db73e28a713eab07b');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
