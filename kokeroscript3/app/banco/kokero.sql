
DROP DATABASE IF EXISTS `kokero`;
CREATE DATABASE IF NOT EXISTS `kokero` CHARSET utf8;

USE `kokero`;

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `idCategoria` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`)
);

DROP TABLE IF EXISTS `institucional`;
CREATE TABLE `institucional` (
  `idInstituicao` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `cpf_cnpj` varchar(14) DEFAULT NULL,
  `tipoPessoa` char(1) DEFAULT 'F' COMMENT '{ ''F'' , ''J'' }',
  `endereco` varchar(50) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idInstituicao`),
  UNIQUE KEY `cpf_cnpj` (`cpf_cnpj`),
  UNIQUE KEY `email` (`email`)
);

DROP TABLE IF EXISTS `nivelUsuarios`;
CREATE TABLE `nivelUsuarios` (
  `idNivelUsuario` int NOT NULL AUTO_INCREMENT,
  `nivel` varchar(20) DEFAULT NULL COMMENT '{''Cliente'', ''Voluntário'', ''Caixa'', ''Administrador''}',
  PRIMARY KEY (`idNivelUsuario`)
);

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(64) NOT NULL,
  `idNivelUsuario` int DEFAULT '1',
  `nome` varchar(50) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `ativo` varchar(1) DEFAULT 'N',
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cpf` (`cpf`),
  KEY `idNivelUsuario` (`idNivelUsuario`),
  FOREIGN KEY (`idNivelUsuario`) REFERENCES `nivelUsuarios` (`idNivelUsuario`)
);

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos` (
  `idPedido` int NOT NULL AUTO_INCREMENT,
  `idUsuario` int DEFAULT NULL,
  `dtPedido` datetime DEFAULT NULL,
  `dtPagamento` datetime DEFAULT NULL,
  `dtEnvio` datetime DEFAULT NULL,
  `dtRecebimento` datetime DEFAULT NULL,
  `formaEntrega` int DEFAULT '0' COMMENT '{ { 0, Retirada na loja }, { 1, Correios }, { 2, Entrega local } }',
  `rastreio` varchar(255) DEFAULT NULL,
  `enderecoEntrega` varchar(100) DEFAULT NULL,
  `telefoneEntrega` varchar(15) DEFAULT NULL,
  `valorTotal` decimal(12,2) DEFAULT NULL,
  `valorFrete` decimal(10,2) DEFAULT 0,
  `qtdItens` int DEFAULT NULL,
  PRIMARY KEY (`idPedido`),
  KEY `idUsuario` (`idUsuario`),
  FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`)
);

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `idProduto` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL COMMENT 'ex: novo, usado, seminovo',
  `tamanho` varchar(10) DEFAULT NULL,
  `idCategoria` int DEFAULT NULL,
  `descricao` text,
  `cor` varchar(30) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL COMMENT 'ex: masculino, feminino, unissex',
  PRIMARY KEY (`idProduto`),
  KEY `idCategoria` (`idCategoria`),
  FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`)
);

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE `estoque` (
  `idEstoque` int NOT NULL AUTO_INCREMENT,
  `idProduto` int DEFAULT NULL,
  `dtEntrada` date DEFAULT NULL,
  `quantidade` int DEFAULT '1',
  `precoVenda` decimal(10,2) DEFAULT NULL,
  `origem` varchar(50) DEFAULT NULL COMMENT 'ex: doação, compra, consignado',
  PRIMARY KEY (`idEstoque`),
  KEY `idProduto` (`idProduto`),
  FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`idProduto`)
);

DROP TABLE IF EXISTS `itensPedido`;
CREATE TABLE `itensPedido` (
  `idItemPedido` int NOT NULL AUTO_INCREMENT,
  `idPedido` int DEFAULT NULL,
  `idEstoque` int DEFAULT NULL,
  `quantidade` int DEFAULT NULL,
  PRIMARY KEY (`idItemPedido`),
  KEY `idPedido` (`idPedido`),
  KEY `idEstoque` (`idEstoque`),
  FOREIGN KEY (`idPedido`) REFERENCES `pedidos` (`idPedido`),
  FOREIGN KEY (`idEstoque`) REFERENCES `estoque` (`idEstoque`)
);

-- Inserção inicial de níveis de usuários
INSERT INTO `nivelUsuarios` (`idNivelUsuario`, `nivel`) VALUES
(1, 'Cliente'),
(2, 'Voluntário'),
(3, 'Caixa'),
(4, 'Administrador');
