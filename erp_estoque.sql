-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Abr-2021 às 02:36
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `erp_estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adicionar`
--

CREATE TABLE `adicionar` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `data` date NOT NULL,
  `qntd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adicionar`
--

INSERT INTO `adicionar` (`id`, `id_prod`, `data`, `qntd`) VALUES
(7, 5, '2021-04-25', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `forneceedor`
--

CREATE TABLE `forneceedor` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `ativo` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `forneceedor`
--

INSERT INTO `forneceedor` (`id`, `nome`, `email`, `telefone`, `cnpj`, `categoria`, `ativo`, `img`) VALUES
(4, 'betania', 'betania@gmail.com', '71996362255', '30.548.881/0001-40', 'alimento', 'sim', 'IMG-60860351e746d.jpg'),
(5, 'Papel & cia', 'papelcia@gmail.com', '71996362222', '30.729.826/0001-57', 'papelaria', 'sim', 'IMG-60860466d936c.jpg'),
(6, 'veja', 'veja@gmail.com', '71996363333', '40.977.496/0001-72', 'limpeza', 'sim', 'IMG-6086052a59672.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `id_forne` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `codigo` int(11) NOT NULL,
  `sobre` text NOT NULL,
  `data` date NOT NULL,
  `qnt` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `material`
--

INSERT INTO `material` (`id`, `id_forne`, `nome`, `codigo`, `sobre`, `data`, `qnt`, `img`) VALUES
(4, 6, 'álcool em gel 70% ', 122333, 'Lorem ipsum quisque feugiat consequat faucibus primis lacus turpis nec, mauris nam nulla nisi dapibus taciti amet non consectetur, tempus malesuada mauris curabitur donec pharetra molestie litora. euismod facilisis aliquam eleifend auctor integer, morbi netus duis himenaeos netus ultricies, fusce mattis vestibulum nulla.', '2021-04-25', 30, 'IMG-6086060227423.png'),
(5, 5, 'caderno de anotação quick grafica', 12334, 'Lorem ipsum quisque feugiat consequat faucibus primis lacus turpis nec, mauris nam nulla nisi dapibus taciti amet non consectetur, tempus malesuada mauris curabitur donec pharetra molestie litora. euismod facilisis aliquam eleifend auctor integer, morbi netus duis himenaeos netus ultricies, fusce mattis vestibulum nulla.', '2021-04-25', 30, 'IMG-608606c95857c.jpg'),
(6, 4, 'caixa de leite betania 1L', 88456, 'Lorem ipsum quisque feugiat consequat faucibus primis lacus turpis nec, mauris nam nulla nisi dapibus taciti amet non consectetur, tempus malesuada mauris curabitur donec pharetra molestie litora. euismod facilisis aliquam eleifend auctor integer, morbi netus duis himenaeos netus ultricies, fusce mattis vestibulum nulla.', '2021-04-25', 20, 'IMG-60860749261bf.jpg'),
(7, 5, 'post-it', 55613, 'Lorem ipsum quisque feugiat consequat faucibus primis lacus turpis nec, mauris nam nulla nisi dapibus taciti amet non consectetur, tempus malesuada mauris curabitur donec pharetra molestie litora. euismod facilisis aliquam eleifend auctor integer, morbi netus duis himenaeos netus ultricies, fusce mattis vestibulum nulla.', '2021-04-25', 19, 'IMG-608608444247c.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `retirada`
--

CREATE TABLE `retirada` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `data` date NOT NULL,
  `qntd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `retirada`
--

INSERT INTO `retirada` (`id`, `id_prod`, `data`, `qntd`) VALUES
(10, 7, '2021-04-25', 31);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adicionar`
--
ALTER TABLE `adicionar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Índices para tabela `forneceedor`
--
ALTER TABLE `forneceedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_forne` (`id_forne`);

--
-- Índices para tabela `retirada`
--
ALTER TABLE `retirada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prod` (`id_prod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adicionar`
--
ALTER TABLE `adicionar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `forneceedor`
--
ALTER TABLE `forneceedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `retirada`
--
ALTER TABLE `retirada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `adicionar`
--
ALTER TABLE `adicionar`
  ADD CONSTRAINT `adicionar_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `material` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_ibfk_1` FOREIGN KEY (`id_forne`) REFERENCES `forneceedor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `retirada`
--
ALTER TABLE `retirada`
  ADD CONSTRAINT `retirada_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `material` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
