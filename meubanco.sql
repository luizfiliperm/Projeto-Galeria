-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2022 às 23:36
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meubanco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `faleconosco`
--

CREATE TABLE `faleconosco` (
  `Id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Assunto` varchar(150) NOT NULL,
  `Mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `faleconosco`
--

INSERT INTO `faleconosco` (`Id`, `Email`, `Assunto`, `Mensagem`) VALUES
(20, 'luizfilipemr17@gmail.com', 'teste', 'teste'),
(21, 'luizfilipemr17@gmail.com', 'teste', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`Id`, `username`, `usersPwd`) VALUES
(7, 'Luiz', '$2y$10$3/.H52ilHmRZ9jggoAoOIuVeIGcIw7OoX/A50QPuhvAk4xFvWPDE.'),
(8, 'Vitoria', '$2y$10$ZArGdfzQN3xySfHS8yx2MuFBSwCiXn0hgUQoHLUZse4NAEYEWEPVm'),
(9, 'admin', '$2y$10$e6fI8ZYRwjfBWDJXWEb2auEYqyMBV.H6/zE1RB3tYQi3fYrmf6u2C');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usersimage`
--

CREATE TABLE `usersimage` (
  `id` int(11) NOT NULL,
  `urlImg` varchar(500) NOT NULL,
  `albumName` varchar(128) NOT NULL,
  `dateImg` date NOT NULL,
  `userImg` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usersimage`
--

INSERT INTO `usersimage` (`id`, `urlImg`, `albumName`, `dateImg`, `userImg`) VALUES
(7, 'https://images.wallpaperscraft.com/image/single/astronaut_ring_neon_156673_1920x1080.jpg', 'Buraco Negro', '2022-10-04', 'Luiz'),
(13, 'https://wallpapercave.com/wp/wp8771838.jpg', 'anime', '2022-12-08', 'Vitoria'),
(14, 'https://i.pinimg.com/originals/7b/fc/79/7bfc792837b7edef3dc28b02721c78e9.jpg', 'Gatos', '2022-12-02', 'Vitoria');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usersprofile`
--

CREATE TABLE `usersprofile` (
  `id` int(11) NOT NULL,
  `profilePhoto` varchar(500) NOT NULL,
  `bio` text NOT NULL,
  `username` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usersprofile`
--

INSERT INTO `usersprofile` (`id`, `profilePhoto`, `bio`, `username`) VALUES
(13, 'https://i.imgur.com/9LEgHYw.jpg', 'louca surtada que não consegue fazer nada direito PS: Palavras dela mesma!', 'Mavi');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `faleconosco`
--
ALTER TABLE `faleconosco`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `usersimage`
--
ALTER TABLE `usersimage`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usersprofile`
--
ALTER TABLE `usersprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `faleconosco`
--
ALTER TABLE `faleconosco`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usersimage`
--
ALTER TABLE `usersimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usersprofile`
--
ALTER TABLE `usersprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
