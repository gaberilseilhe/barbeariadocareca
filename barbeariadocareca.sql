-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2024 às 19:20
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `barbeariadocareca`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `abc`
--

CREATE TABLE `abc` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `data_de_nascimento` date NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `abc`
--

INSERT INTO `abc` (`id_usuario`, `nome`, `email`, `data_de_nascimento`, `id_grupo`, `data_criacao`) VALUES
(531, 'piaa', 'piaaa@1231', '3525-02-05', 2, '2024-11-07 19:34:31'),
(532, 'lula', '312312@23', '0000-00-00', 2, '2024-11-07 19:34:44'),
(533, 'joeo', 'joeo21313@21312', '0000-00-00', 3, '2024-11-07 19:35:10'),
(534, 'Gabriel seilhe', 'gabrielseilhedasilva@gmail.com', '1203-05-12', 3, '2024-11-07 19:35:20');

-- --------------------------------------------------------

--
-- Estrutura para tabela `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `dia_da_semana` int(11) NOT NULL,
  `horario_inicio` time NOT NULL,
  `id_usuario` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `dia_da_semana`, `horario_inicio`, `id_usuario`) VALUES
(269, 0, '08:00:00', '532'),
(270, 0, '08:30:00', '532'),
(271, 0, '09:00:00', '532'),
(272, 0, '09:30:00', '532'),
(273, 0, '10:00:00', '532'),
(274, 0, '10:30:00', '532'),
(275, 0, '11:00:00', '532'),
(276, 0, '11:30:00', '532'),
(277, 0, '14:00:00', '532'),
(278, 0, '14:30:00', '532'),
(279, 0, '15:00:00', '532'),
(280, 0, '15:30:00', '532'),
(281, 0, '16:00:00', '532'),
(282, 0, '16:30:00', '532'),
(283, 0, '17:00:00', '532'),
(284, 0, '17:30:00', '532'),
(285, 0, '18:00:00', '532'),
(286, 0, '18:30:00', '532'),
(287, 0, '19:00:00', '532'),
(288, 0, '19:30:00', '532'),
(289, 2, '08:00:00', '532'),
(290, 2, '08:30:00', '532'),
(291, 2, '09:00:00', '532'),
(292, 2, '09:30:00', '532'),
(293, 2, '10:00:00', '532'),
(294, 2, '10:30:00', '532'),
(295, 2, '11:00:00', '532'),
(296, 2, '11:30:00', '532'),
(297, 2, '14:00:00', '532'),
(298, 2, '14:30:00', '532'),
(299, 2, '15:00:00', '532'),
(300, 2, '15:30:00', '532'),
(301, 2, '16:00:00', '532'),
(302, 2, '16:30:00', '532'),
(303, 2, '17:00:00', '532'),
(304, 2, '17:30:00', '532'),
(305, 2, '18:00:00', '532'),
(306, 2, '18:30:00', '532'),
(307, 2, '19:00:00', '532'),
(308, 2, '19:30:00', '532');

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id_agendamento` int(11) NOT NULL,
  `id_servico` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_agenda` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id_agendamento`, `id_servico`, `id_usuario`, `id_agenda`, `data`) VALUES
(32, 0, 532, 269, '2024-11-03'),
(33, 2, 532, 281, '2024-11-10'),
(34, 2, 532, 281, '2024-11-10'),
(35, 2, 532, 281, '2024-11-10'),
(36, 2, 532, 280, '2024-11-10');

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados_bancarios`
--

CREATE TABLE `dados_bancarios` (
  `id_dados` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome_banco` varchar(128) NOT NULL,
  `numero_conta` varchar(20) NOT NULL,
  `numero_agencia` varchar(20) NOT NULL,
  `chave_pix` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dados_bancarios`
--

INSERT INTO `dados_bancarios` (`id_dados`, `id_usuario`, `nome_banco`, `numero_conta`, `numero_agencia`, `chave_pix`) VALUES
(318, 0, 'Banco do Brasil S.A.', '', '', '242424'),
(319, 0, 'Banco do Brasil S.A.', '', '', '2352352'),
(320, 0, 'Banco do Brasil S.A.', '312', '23131', '1231321'),
(321, 0, 'Banco do Brasil S.A.', '123123123', '312', '12313'),
(322, 0, 'Banco do Brasil S.A.', '55555555555555', '5555555555', '55555555'),
(323, 0, 'Banco do Brasil S.A.', '55555555555555', '5555555555', '55555555'),
(324, 0, 'Banco do Brasil S.A.', '525', '235523', '525235'),
(325, 0, 'Banco do Brasil S.A.', '', '', '2352352'),
(326, 0, 'Banco do Brasil S.A.', '', '', '123131');

-- --------------------------------------------------------

--
-- Estrutura para tabela `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `nome_grupo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `serviços`
--

CREATE TABLE `serviços` (
  `id_serviço` int(11) NOT NULL,
  `nome_serviço` varchar(128) NOT NULL,
  `valor_serviço` decimal(10,0) NOT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_de_serviço`
--

CREATE TABLE `tipo_de_serviço` (
  `id_tipo` int(11) NOT NULL,
  `tipo_serviço` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `abc`
--
ALTER TABLE `abc`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices de tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Índices de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id_agendamento`);

--
-- Índices de tabela `dados_bancarios`
--
ALTER TABLE `dados_bancarios`
  ADD PRIMARY KEY (`id_dados`);

--
-- Índices de tabela `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Índices de tabela `serviços`
--
ALTER TABLE `serviços`
  ADD PRIMARY KEY (`id_serviço`);

--
-- Índices de tabela `tipo_de_serviço`
--
ALTER TABLE `tipo_de_serviço`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `abc`
--
ALTER TABLE `abc`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=535;

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id_agendamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `dados_bancarios`
--
ALTER TABLE `dados_bancarios`
  MODIFY `id_dados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;

--
-- AUTO_INCREMENT de tabela `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `serviços`
--
ALTER TABLE `serviços`
  MODIFY `id_serviço` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_de_serviço`
--
ALTER TABLE `tipo_de_serviço`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
