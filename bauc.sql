-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Ago-2016 às 12:32
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bauc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `area_atuacao`
--

CREATE TABLE `area_atuacao` (
  `Cod_Area` int(9) NOT NULL,
  `Nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `area_atuacao`
--

INSERT INTO `area_atuacao` (`Cod_Area`, `Nome`) VALUES
(1, 'Pedreiro'),
(2, ' Pintor'),
(3, ' Eletricista'),
(4, 'Gesseiro'),
(5, 'Encanador'),
(6, 'Marido de Aluguel'),
(7, 'Jardineiro'),
(8, 'Bombeiro Hidráulico'),
(10, 'Soldador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `Cod_Categoria` int(9) NOT NULL,
  `Nome` text NOT NULL,
  `Descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`Cod_Categoria`, `Nome`, `Descricao`) VALUES
(1, 'Tinta', 'Tintas para pintura de muros e texturas, além de sprays. '),
(2, 'Encanamento', 'Todos os tipos de canos, como joelhos, sanfonados, térmicos.'),
(3, 'Pisos', 'Inclui cerâmicas, porcelanato, taco, e laminado.'),
(4, 'Cozinha', 'Pias, cozinhas modulares, coifas.'),
(5, 'Jardinagem', 'Adubo, vasos e materiais de jardim'),
(6, 'Material de Construcao', 'Areia, cimento, tijolos e argamassa.'),
(7, 'Telhas', 'Telhas de amianto, colonial e de PVC.'),
(8, 'Madeira', 'Freixo, Carvalho, Mogno e Pinheiro'),
(9, 'Ferragens', 'Ferros para alicerce e grades.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `Cod_Cliente` int(9) NOT NULL,
  `Nome` text NOT NULL,
  `Idade` int(3) NOT NULL,
  `Email` text NOT NULL,
  `Senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`Cod_Cliente`, `Nome`, `Idade`, `Email`, `Senha`) VALUES
(1, 'ALCIMARA VITORINO PEREIRA MARTINS', 21, 'alcimart@gmail.com', '12345678'),
(2, 'ROBERTO CUNHA CARVALHO', 36, 'robertinhocunha@hotmail.com', '12345679'),
(3, 'SÉRGIO LUÍS DE OLIVEIRA SILVA', 45, 'sergioluis@gmail.com', '12345670'),
(4, 'VICTOR PAGNOSI PACHECO ', 18, 'victorpag@gmail.com', '12345671'),
(5, 'TATIANA CARSTENS', 42, 'tatita@gmail.com', '12345672'),
(6, 'ROGÉRIO GUIMARÃES ROSA', 58, 'guimaraesrosa@gmail.com', '12345673'),
(7, 'THIAGO MENDES OLIVIO', 27, 'olivio@yahoo.com', '12345674'),
(8, 'LUIZ FERNANDO DA SILVA TORRES', 25, 'luisdasilva@gmail.com', '12345675'),
(9, 'Jose Mendes Lima', 37, 'zezin@gmail.com', '14091998'),
(125, 'casa', 13, 'dasas@GMAIL', '123'),
(128, 'Thiago', 18, 'thiasdgoassis2.99@gmail.com', '12345678'),
(129, 'Assis', 45, 'asnsjdhnjsdn', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `Cod_Endereco` int(9) NOT NULL,
  `CEP` varchar(10) NOT NULL,
  `Numero` int(5) NOT NULL,
  `Bairro` text NOT NULL,
  `Cidade` text NOT NULL,
  `Estado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`Cod_Endereco`, `CEP`, `Numero`, `Bairro`, `Cidade`, `Estado`) VALUES
(1, '31210-790', 42, 'Bandeirantes', 'Contagem', 'MG'),
(2, '31210-791', 456, 'Eldorado', 'Contagem', 'MG'),
(3, '31210-123', 1023, 'Eldorado', 'Contagem', 'MG'),
(4, '31210-145', 212, 'Amazonas', 'Contagem', 'MG'),
(5, '31210-795', 126, 'Eldorado', 'Contagem', 'MG'),
(6, '31210-796', 698, 'Eldorado', 'Contagem', 'MG'),
(7, '31210-797', 725, 'Amazonas', 'Contagem', 'MG'),
(8, '31210-786', 18, 'Amazonas', 'Contagem', 'MG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

CREATE TABLE `loja` (
  `Cod_Loja` int(9) NOT NULL,
  `Nome` text NOT NULL,
  `CNPJ` varchar(18) NOT NULL,
  `Cod_Endereco` int(9) NOT NULL,
  `Telefone` varchar(13) NOT NULL,
  `Email` text NOT NULL,
  `Descricao` text NOT NULL,
  `Senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loja`
--

INSERT INTO `loja` (`Cod_Loja`, `Nome`, `CNPJ`, `Cod_Endereco`, `Telefone`, `Email`, `Descricao`, `Senha`) VALUES
(1, 'Leroy Merlin', '76.189.818/0001-66', 8, '(31)989126440', 'leorymerlin@merlin.com', 'Variedades e preços baixos!', '12345672'),
(2, 'Duran', '76.189.818/0001-67', 5, '(31)989126441', 'duran@gmail.com', 'Trabalhamos com produtos de construção em geral.', '12345673'),
(3, 'Telha Norte', '76.189.818/0001-44', 1, '(31)989126442', 'tlhanorte@gmail.com', 'Telha norte, feliz é o nosso porte!', '12345674'),
(4, 'Construa Barato', '76.189.818/0001-89', 4, '(31)989126443', 'construabarato@hotmail.com', 'Materiais para sua casa!', '12345675'),
(5, 'Rocha Firme', '76.189.818/0001-92', 7, '(31)989126456', 'rochafirme@gmail.com', 'Pedras para pisos, mesas e geral. Especialidades em ardosia e granito', '12345676'),
(6, 'Casa Fort', '76.189.818/0001-62', 3, '(31)989126429', 'casafort@yahoo.com', 'Materiais para construção de casas modernas', '12345677'),
(7, 'Casa Popular Construções', '76.189.818/0001-24', 2, '(31)989126125', 'casapopular@gmail.com', 'Encontre o básico e o necessário com baixos preços.', '12345678'),
(8, 'Construbem', '76.189.818/0001-11', 6, '(31)989126123', 'construbem@hotmail.com', 'Construa seu quintal ou qualquer outro cômodo de sua casa.', '12345679');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja_produto`
--

CREATE TABLE `loja_produto` (
  `Cod_Loja` int(9) NOT NULL,
  `Cod_Produto` int(9) NOT NULL,
  `Quantidade` int(6) NOT NULL,
  `Cod_Relacao` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loja_produto`
--

INSERT INTO `loja_produto` (`Cod_Loja`, `Cod_Produto`, `Quantidade`, `Cod_Relacao`) VALUES
(1, 1, 3, 1),
(2, 3, 4, 2),
(3, 4, 2, 3),
(4, 5, 3, 4),
(5, 6, 20, 5),
(6, 7, 34, 6),
(7, 8, 12, 7),
(8, 9, 13, 8),
(1, 3, 123, 9),
(1, 4, 32, 10),
(1, 5, 12, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `Cod_Produto` int(9) NOT NULL,
  `Nome` text NOT NULL,
  `Preco` float NOT NULL,
  `Imagem` text NOT NULL,
  `Descricao` text NOT NULL,
  `Cod_Categoria` int(9) NOT NULL,
  `Marca` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`Cod_Produto`, `Nome`, `Preco`, `Imagem`, `Descricao`, `Cod_Categoria`, `Marca`) VALUES
(1, 'Branco Neve', 180, 'http://i.imgur.com/giRBu6f.png', 'Tinta Rende Muito, 18 litros Branco Neve - Coral', 1, 'Coral'),
(3, 'Tubo 3/4 para esgoto', 10, 'http://i.imgur.com/DqsFtNd.jpg', 'Com facilidade para conexão, sendo um lado de rosca e outro de cola.', 2, 'Tigre'),
(4, 'Piso Laminado', 100, 'http://i.imgur.com/g21Zqnz.jpg', 'Laminado na cor Marfim', 3, 'Eucaflor'),
(5, 'Pia de cozinha', 147, 'http://i.imgur.com/29Mws9z.jpg', 'Inox Alto Brilho Cinza 150cm', 4, 'Delinia'),
(6, 'Grade de Madeira', 165, 'http://i.imgur.com/H5aKkzU.jpg', 'Ripada para Cerca Natural 120x250cm', 5, 'Rondo'),
(7, 'Areia Grossa', 87, 'http://i.imgur.com/2bqgZ5T.png', 'Grossa e a granel.', 6, 'Lopes'),
(8, 'Telha Cumeeira', 57, 'http://i.imgur.com/OTu0Amt.jpg', 'Lateral Articulada Colonial Cerâmica', 7, 'Permatti'),
(9, 'Madeira', 10.55, 'http://i.imgur.com/Usz68m3.jpg', 'Madeira para telhado, 5x5.', 8, 'Paraju');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

CREATE TABLE `profissional` (
  `Cod_Profissional` int(9) NOT NULL,
  `Nome` text NOT NULL,
  `Telefone` varchar(14) NOT NULL,
  `Email` text NOT NULL,
  `Cod_Area` int(9) NOT NULL,
  `Senha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `profissional`
--

INSERT INTO `profissional` (`Cod_Profissional`, `Nome`, `Telefone`, `Email`, `Cod_Area`, `Senha`) VALUES
(1, 'José Barretos da Silva', '(31)3382-3950', 'josebarretos@gmail.com', 2, '12345678'),
(2, 'Thiago de Assis Lima', '(31)98912-6448', 'thiagoassis@gmail.com', 1, '12345679'),
(3, 'Caio Fábio Mendes ', '(31)97564-1234', 'caiofabio@hotmail.com', 3, '12345681'),
(4, 'Lucas de Aguiar', '(31)99850-3205', 'lucasaguiar@gmail.com', 7, '12345682'),
(5, 'Lorena da Silva Pereira', '(31)96512-1234', 'lorenasilva@gmail.com', 5, '12345683'),
(6, 'Zé de Carvalho', '(31)2565-1178', 'zecarvalho@yahoo.com', 4, '12345684'),
(7, 'Gilson Santana Aguiar', '(31)2565-1234', 'gilsinhosantanas@gmail.com', 6, '12345685'),
(8, 'Marcone de Assis Junior', '(31)98612-1234', 'marconeassis@oi.com.br', 8, '12345688'),
(9, 'Raimundo', '(31)3382-3951', 'raimundao@gmail.com', 2, 'thj'),
(10, 'Thiago', '(31)3382-3951', 'raimunda2o@gmail.com', 1, '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_atuacao`
--
ALTER TABLE `area_atuacao`
  ADD PRIMARY KEY (`Cod_Area`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Cod_Categoria`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Cod_Cliente`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`Cod_Endereco`);

--
-- Indexes for table `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`Cod_Loja`),
  ADD UNIQUE KEY `Cod_Endereco_2` (`Cod_Endereco`),
  ADD KEY `Cod_Endereco` (`Cod_Endereco`),
  ADD KEY `Cod_Endereco_3` (`Cod_Endereco`);

--
-- Indexes for table `loja_produto`
--
ALTER TABLE `loja_produto`
  ADD PRIMARY KEY (`Cod_Relacao`),
  ADD KEY `Cod_Produto` (`Cod_Produto`),
  ADD KEY `Cod_Loja` (`Cod_Loja`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`Cod_Produto`),
  ADD KEY `Cod_Categoria` (`Cod_Categoria`);

--
-- Indexes for table `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`Cod_Profissional`),
  ADD KEY `Cod_Area` (`Cod_Area`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_atuacao`
--
ALTER TABLE `area_atuacao`
  MODIFY `Cod_Area` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `Cod_Categoria` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Cod_Cliente` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `Cod_Endereco` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `loja`
--
ALTER TABLE `loja`
  MODIFY `Cod_Loja` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `loja_produto`
--
ALTER TABLE `loja_produto`
  MODIFY `Cod_Relacao` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `Cod_Produto` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `profissional`
--
ALTER TABLE `profissional`
  MODIFY `Cod_Profissional` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `loja`
--
ALTER TABLE `loja`
  ADD CONSTRAINT `loja_ibfk_1` FOREIGN KEY (`Cod_Endereco`) REFERENCES `endereco` (`Cod_Endereco`);

--
-- Limitadores para a tabela `loja_produto`
--
ALTER TABLE `loja_produto`
  ADD CONSTRAINT `loja_produto_ibfk_1` FOREIGN KEY (`Cod_Loja`) REFERENCES `loja` (`Cod_Loja`),
  ADD CONSTRAINT `loja_produto_ibfk_2` FOREIGN KEY (`Cod_Produto`) REFERENCES `produto` (`Cod_Produto`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`Cod_Categoria`) REFERENCES `categoria` (`Cod_Categoria`);

--
-- Limitadores para a tabela `profissional`
--
ALTER TABLE `profissional`
  ADD CONSTRAINT `profissional_ibfk_1` FOREIGN KEY (`Cod_Area`) REFERENCES `area_atuacao` (`Cod_Area`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
