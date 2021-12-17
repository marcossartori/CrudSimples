-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.6.4-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para teste
CREATE DATABASE IF NOT EXISTS `teste` /*!40100 DEFAULT CHARACTER SET utf8mb3 */;
USE `teste`;

-- Copiando estrutura para tabela teste.preco
CREATE TABLE IF NOT EXISTS `preco` (
  `idpreco` int(11) NOT NULL AUTO_INCREMENT,
  `preco` float DEFAULT NULL,
  PRIMARY KEY (`idpreco`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

-- Copiando dados para a tabela teste.preco: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `preco` DISABLE KEYS */;
INSERT INTO `preco` (`idpreco`, `preco`) VALUES
	(7, 140),
	(8, 140),
	(9, 4.4),
	(10, 2.2);
/*!40000 ALTER TABLE `preco` ENABLE KEYS */;

-- Copiando estrutura para tabela teste.produto
CREATE TABLE IF NOT EXISTS `produto` (
  `idprod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `cor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idprod`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb3;

-- Copiando dados para a tabela teste.produto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` (`idprod`, `nome`, `cor`) VALUES
	(38, 'cachaça', 'amarelo');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
