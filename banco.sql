-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.26 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para web-final
CREATE DATABASE `web-final` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `web-final`;

-- Copiando estrutura para tabela web-final.alunos
CREATE TABLE `alunos` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(50) NOT NULL DEFAULT '',
  `idade` int(20) NOT NULL,
  `curso` varchar(60) NOT NULL,
  `sexo` varchar(60) NOT NULL,
  `matricula` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela web-final.alunos: 4 rows
DELETE FROM `alunos`;
/*!40000 ALTER TABLE `alunos` DISABLE KEYS */;
INSERT INTO `alunos` (`id`, `nome`, `cpf`, `idade`, `curso`, `sexo`, `matricula`) VALUES
	(1, 'Arthur', '12345678910', 19, 'Design', 'Masculino', 123),
	(2, 'Barbara', '12344321090', 20, 'Arquitetura', 'Feminino', 124),
	(3, 'Fernando', '87655678127', 22, 'Ciencia da Computacao', 'Masculino', 125),
	(4, 'Giuliana', '12345612455', 18, 'Enfermagem', 'Feminino', 126);
/*!40000 ALTER TABLE `alunos` ENABLE KEYS */;

-- Copiando estrutura para tabela web-final.empresas
CREATE TABLE `empresas` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `cnpj` varchar(120) NOT NULL,
  `area` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela web-final.empresas: 4 rows
DELETE FROM `empresas`;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` (`id`, `nome`, `cnpj`, `area`) VALUES
	(1, 'MRV', '1234556789101', 'Construção'),
	(2, 'Autojapa', '1234432102145', 'Venda de Veiculos'),
	(3, 'Banco Inter', '8765567890789', 'Tecnologia da Informação'),
	(4, 'Hospital João VVIII', '1234561287504', 'Medicina');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;

-- Copiando estrutura para tabela web-final.users
CREATE TABLE `users` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela web-final.users: 1 rows
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `nome`, `senha`) VALUES
	(1, 'admin', '123');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
