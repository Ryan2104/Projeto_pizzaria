-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/10/2024 às 03:40
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_pizzaria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `mesa`
--

CREATE TABLE `mesa` (
  `cd_mesa` int(11) NOT NULL,
  `nm_mesa` char(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `mesa`
--

INSERT INTO `mesa` (`cd_mesa`, `nm_mesa`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `cd_categoria` int(11) NOT NULL,
  `nm_categoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`cd_categoria`, `nm_categoria`) VALUES
(1, 'Pizza Salgada'),
(2, 'Pizza Doce'),
(3, 'Bebidas'),
(4, 'Doces'),
(5, 'Esfirra'),
(10, 'Bebida Alcoolica'),
(244, 'BEBIDA');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `cd_cliente` int(11) NOT NULL,
  `nm_cliente` varchar(45) NOT NULL,
  `cd_telefone` varchar(11) DEFAULT NULL,
  `ds_endereco` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`cd_cliente`, `nm_cliente`, `cd_telefone`, `ds_endereco`) VALUES
(2, 'Rihan', '13981024649', 'Praia Grande'),
(3, 'RIHAN', '13981024649', 'PRAIA GRANDE'),
(4, 'THIAGO', '13996122729', 'SANTOS'),
(5, 'LEONARDO IRIBARNE', '13988595516', 'SÃO VICENTE'),
(6, 'THIAGO LUCERO', '13974117435', 'PRAIA GRANDE'),
(7, 'CAUÃ SANTOS', '13998062486', 'SÃO VICENTE'),
(8, 'YASMIN MONDIM', '13991372813', 'SÃO VICENTE'),
(20, 'RYAN', '12991803072', 'SANTOS'),
(21, 'RAFAEL DAS CRUZ NEVES', '11997984211', 'BELFORD ROXO'),
(22, 'VICTOR EMMERICH', '13991334252', 'SÃO VICENTE'),
(73, 'MATHEUS', '13997116147', 'São Vicente'),
(77, 'Gabriel \'Dorimaa\' Ribeiro', '2345678', 'SAO VICENTE'),
(80, 'RENATA', '34864542', 'PRAIA GRANDE'),
(81, 'HELENA', '34556543', 'SÃO VICENTE'),
(101, 'Allan Figueiredo', '333-4444', 'são vicente'),
(666, 'HERBERT', '13997116215', 'SÃO VICENTE'),
(999, 'Emilly, a garotinha que sabe contar', '99966999', 'Rua dos que sabem contar, 123'),
(7777, '7hiz4h! Henriques Dutras', '40028922', 'SÃO VICENTE'),
(8123, 'LAILA', '13912345678', 'SÃO VICENTE'),
(2756568, 'VINICIUS', '1399999999', 'SANTOS'),
(2756578, 'VINICIUS', '1399999999', 'SÃO PAULO'),
(3987007, 'EMILLY', '139998888', 'PERUÍBE'),
(3987097, 'EMILLY', '139998888', 'PERUÍBE'),
(3987701, 'AUGUSTO', '99809783759', 'SÃO VICENTE'),
(3987702, 'ALBERTO', '99106482018', 'SÃO VICENTE'),
(3987703, 'LEONARDO IRIBARNE', '13988595516', 'SÃO VICENTE'),
(3987704, 'ERICK', '13997914031', 'SÃO VICENTE'),
(3987705, 'CÉSAR', '13991422552', 'SÃO VICENTE'),
(3987706, 'EDMILSON', '30277768', 'SÃO VICENTE'),
(3987707, 'FRANCISCO COELHO', '13988517724', 'SÃO VICENTE'),
(3987708, 'LUCAS JORDÃO', '13991085373', 'BRASIL');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_forma_pgto`
--

CREATE TABLE `tb_forma_pgto` (
  `cd_forma_pgto` int(11) NOT NULL,
  `nm_forma_pgto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tb_forma_pgto`
--

INSERT INTO `tb_forma_pgto` (`cd_forma_pgto`, `nm_forma_pgto`) VALUES
(1, 'Dinheiro'),
(2, 'Débito'),
(3, 'Crédito'),
(4, 'Pix');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_item_pedido`
--

CREATE TABLE `tb_item_pedido` (
  `cd_pedido` int(11) NOT NULL,
  `cd_produto` int(11) NOT NULL,
  `vl_item_pedido` decimal(10,2) NOT NULL,
  `qt_item_pedido` varchar(45) NOT NULL,
  `ds_comentario` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_pedido`
--

CREATE TABLE `tb_pedido` (
  `cd_pedido` int(11) NOT NULL,
  `cd_tipo_pedido` int(11) NOT NULL,
  `dt_pedido` date NOT NULL,
  `vl_total_pedido` decimal(10,2) DEFAULT NULL,
  `cd_forma_pgto` int(11) DEFAULT NULL,
  `ds_comentario` varchar(100) DEFAULT NULL,
  `cd_cliente` int(11) DEFAULT NULL,
  `ds_status_pedido` varchar(45) DEFAULT NULL,
  `cd_mesa` int(11) DEFAULT NULL,
  `cd_usuario` int(11) NOT NULL,
  `cd_tipo_pgto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `cd_produto` int(11) NOT NULL,
  `nm_produto` varchar(45) DEFAULT NULL,
  `vl_produto` decimal(10,2) DEFAULT NULL,
  `ds_produto` varchar(160) DEFAULT NULL,
  `im_produto` varchar(200) DEFAULT NULL,
  `cd_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tb_produto`
--

INSERT INTO `tb_produto` (`cd_produto`, `nm_produto`, `vl_produto`, `ds_produto`, `im_produto`, `cd_categoria`) VALUES
(1, 'BALA', 0.50, 'BALA DE YOGOURT', 'YOGOURT.JPG', 4),
(2, 'Catuába', 29.90, 'sabor natural', 'catuaba.PNG', 10),
(3, 'Catuába', 29.90, 'sabor natural', 'catuaba.PNG', 10),
(4, 'Cerveja', 30.90, 'Itaipava', 'ITAIPAVA.PNG', 10),
(5, 'BOLO DE CHOCOLATE', 55.00, 'BOLO COM SABOR DE CHOCOLATE', 'BOLODECHOCOLATE.JPG', 4),
(10, 'BOLO DE CENOURA', 30.00, 'BOLO CASEIRO FEITO PELA VOVÓ', 'BOLODECENOURA.JPG', 4),
(11, 'Corote', 3.99, 'tutti fruti', 'Corote.PNG', 10),
(12, 'PIZZA DE BRIGADEIRO', 60.00, 'PIZZA TAMANHO GRANDE DE BRIGADEIRO COM GRANULADO', 'PIZZA_BRIGADEIRO.png', 2),
(13, 'PIZZA DE NUTELLA', 70.00, 'PIZZA TAMANHO GRANDE DE SABOR NUTELLA', 'PIZZA_NUTELA.JPG', 2),
(14, 'PIZZA ROMEU E JULIETA', 65.00, 'PIZZA TAMANHO GRANDE DE SABOR ROMEU E JULIETA', 'PIZZA_ROMEU_E_JULIETA.JPG', 2),
(15, 'ballaika', 15.10, 'Pura alcool', 'BALLAIKA.PNG', 10),
(20, 'Esfiha de frango', 2.20, 'Frango, Catupiry e Orégano', 'Esfiha linda de Frango', 5),
(21, 'Esfiha de carne', 3.50, 'Carne, Tomate e Cebola', 'Esfiha Brilhando de Carne', 5),
(22, 'Esfiha Prestigio', 4.99, 'Chocolate e Coco Ralado', 'Esfiha de Coco Lindssíma', 5),
(3333, 'Pepsi', 9.50, 'Refrigerante', '?????', 244),
(3334, 'Pizza Salgada', 25.00, 'Pizza de frango', 'PIZZAFRANGO.JPG', 1),
(3335, 'Pizza Salgada', 28.00, 'Pizza Mussarela', 'Pizzamussarela.JPG', 1),
(3336, 'Pizza Salgada', 35.00, 'Pizza de Calabresa', 'Pizzacalabresa.JPG', 1),
(3337, 'Pizza Salgada', 33.00, 'Pizza Quatro Queijos', 'Pizzaquatroqueijos.JPG', 1),
(3338, 'BRIGADEIRÃO', 15.00, 'BRIGADEIRÃO COM GRANULADO', 'BRIGADEIRAO.PNG', 4),
(3339, '0', 0.00, '40.00', 'pizza doce', 2),
(3340, '0', 0.00, '40', 'pizza doce', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_tipo_pedido`
--

CREATE TABLE `tb_tipo_pedido` (
  `cd_tipo_pedido` int(11) NOT NULL,
  `nm_tipo_pedido` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_tipo_pgto`
--

CREATE TABLE `tb_tipo_pgto` (
  `cd_tipo_pgto` int(11) NOT NULL,
  `nm_tipo_pgto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tb_tipo_pgto`
--

INSERT INTO `tb_tipo_pgto` (`cd_tipo_pgto`, `nm_tipo_pgto`) VALUES
(1, 'RETIRADA'),
(2, 'ENTREGA');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_tipo_usuario`
--

CREATE TABLE `tb_tipo_usuario` (
  `cd_tipo_usuario` int(11) NOT NULL,
  `nm_tipo_usuario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tb_tipo_usuario`
--

INSERT INTO `tb_tipo_usuario` (`cd_tipo_usuario`, `nm_tipo_usuario`) VALUES
(1, 'ATENDENTE'),
(2, 'GERENTE'),
(3, 'COZINHA');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `cd_usuario` int(11) NOT NULL,
  `nm_usuario` varchar(60) NOT NULL,
  `nm_login` varchar(45) NOT NULL,
  `cd_senha` varchar(20) NOT NULL,
  `cd_tipo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cd_usuario`, `nm_usuario`, `nm_login`, `cd_senha`, `cd_tipo`) VALUES
(2, 'ryan', 'ryan', 'ryan', 2),
(7, 'jacinto', 'jacinto', 'jacinto', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`cd_mesa`);

--
-- Índices de tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`cd_categoria`);

--
-- Índices de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`cd_cliente`);

--
-- Índices de tabela `tb_forma_pgto`
--
ALTER TABLE `tb_forma_pgto`
  ADD PRIMARY KEY (`cd_forma_pgto`);

--
-- Índices de tabela `tb_item_pedido`
--
ALTER TABLE `tb_item_pedido`
  ADD PRIMARY KEY (`cd_pedido`,`cd_produto`),
  ADD KEY `fk_item_produto_idx` (`cd_produto`);

--
-- Índices de tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD PRIMARY KEY (`cd_pedido`),
  ADD KEY `fk_tipo_pedido_idx` (`cd_tipo_pedido`),
  ADD KEY `fk_pedido_cliente_idx` (`cd_cliente`),
  ADD KEY `fk_pedido_mesa_idx` (`cd_mesa`),
  ADD KEY `fk_usuario_pedido_idx` (`cd_usuario`),
  ADD KEY `fk_forma_pgto_pedido_idx` (`cd_forma_pgto`),
  ADD KEY `fk_tipo_pgto_pedido_idx` (`cd_tipo_pgto`);

--
-- Índices de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`cd_produto`),
  ADD KEY `fk_categoria_produto_idx` (`cd_categoria`);

--
-- Índices de tabela `tb_tipo_pedido`
--
ALTER TABLE `tb_tipo_pedido`
  ADD PRIMARY KEY (`cd_tipo_pedido`);

--
-- Índices de tabela `tb_tipo_pgto`
--
ALTER TABLE `tb_tipo_pgto`
  ADD PRIMARY KEY (`cd_tipo_pgto`);

--
-- Índices de tabela `tb_tipo_usuario`
--
ALTER TABLE `tb_tipo_usuario`
  ADD PRIMARY KEY (`cd_tipo_usuario`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`cd_usuario`),
  ADD KEY `fk_tipo_usuario_idx` (`cd_tipo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `mesa`
--
ALTER TABLE `mesa`
  MODIFY `cd_mesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `cd_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `cd_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3987709;

--
-- AUTO_INCREMENT de tabela `tb_forma_pgto`
--
ALTER TABLE `tb_forma_pgto`
  MODIFY `cd_forma_pgto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  MODIFY `cd_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `cd_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3341;

--
-- AUTO_INCREMENT de tabela `tb_tipo_pgto`
--
ALTER TABLE `tb_tipo_pgto`
  MODIFY `cd_tipo_pgto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_tipo_usuario`
--
ALTER TABLE `tb_tipo_usuario`
  MODIFY `cd_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `cd_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_item_pedido`
--
ALTER TABLE `tb_item_pedido`
  ADD CONSTRAINT `fk_item_pedido` FOREIGN KEY (`cd_pedido`) REFERENCES `tb_pedido` (`cd_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_item_produto` FOREIGN KEY (`cd_produto`) REFERENCES `tb_produto` (`cd_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD CONSTRAINT `fk_forma_pgto_pedido` FOREIGN KEY (`cd_forma_pgto`) REFERENCES `tb_forma_pgto` (`cd_forma_pgto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_cliente` FOREIGN KEY (`cd_cliente`) REFERENCES `tb_cliente` (`cd_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_mesa` FOREIGN KEY (`cd_mesa`) REFERENCES `mesa` (`cd_mesa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tipo_pedido` FOREIGN KEY (`cd_tipo_pedido`) REFERENCES `tb_tipo_pedido` (`cd_tipo_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tipo_pgto_pedido` FOREIGN KEY (`cd_tipo_pgto`) REFERENCES `tb_tipo_pgto` (`cd_tipo_pgto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_pedido` FOREIGN KEY (`cd_usuario`) REFERENCES `tb_usuario` (`cd_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD CONSTRAINT `fk_categoria_produto` FOREIGN KEY (`cd_categoria`) REFERENCES `tb_categoria` (`cd_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `fk_tipo_usuario` FOREIGN KEY (`cd_tipo`) REFERENCES `tb_tipo_usuario` (`cd_tipo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
