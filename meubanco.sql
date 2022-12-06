-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2022 às 01:34
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
(21, 'luizfilipemr17@gmail.com', 'teste', 'teste'),
(22, 'mvitoriabert@gmail.com', 'Quero tomar um cafe', 'Ola boa noite. Gostaria de tomar um cafe');

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
(19, 'https://i.pinimg.com/originals/18/66/c1/1866c184a7d1b635ad8c1c6268d86822.jpg', 'Paisagens', '2022-12-04', 'Vitoria'),
(21, 'https://universoreverso.com.br/wp-content/uploads/2018/03/BP.jpg', 'Paisagens', '2022-12-06', 'Vitoria'),
(22, 'https://wallpaperaccess.com/full/267479.jpg', 'Filmes', '2022-12-02', 'Vitoria'),
(23, 'https://i.pinimg.com/originals/33/31/d8/3331d8887191a99b909629a6b93ee412.jpg', 'Filmes', '2022-12-04', 'Vitoria'),
(24, 'https://rollingstone.uol.com.br/media/uploads/andrew_garfield_tom_holland_e_tobey_maguire_em_homem-aranha_sem_volta_para_casa_foto_reproducao__twitter__marvel__sony.jpg', 'Filmes', '2022-11-01', 'Vitoria'),
(25, 'https://images5.alphacoders.com/613/thumb-1920-613927.jpg', 'Pokemon', '2022-12-15', 'Vitoria'),
(26, 'https://c4.wallpaperflare.com/wallpaper/1008/585/292/pokemon-flygon-pokemon-wallpaper-preview.jpg', 'Pokemon', '2022-12-06', 'Vitoria'),
(27, 'https://images.hdqwalls.com/download/pokemon-4k-2020-2c-1920x1080.jpg', 'Pokemon', '2022-12-31', 'Vitoria'),
(28, 'https://images2.alphacoders.com/175/175470.jpg', 'Animais', '2022-12-06', 'Vitoria'),
(29, 'https://t2.uc.ltmcdn.com/pt/posts/7/8/9/como_mudar_o_nome_do_meu_cachorro_14987_orig.jpg', 'Animais', '2022-12-05', 'Vitoria'),
(30, 'https://images7.alphacoders.com/418/418656.jpg', 'Animais', '2022-12-07', 'Vitoria'),
(31, 'https://pbs.twimg.com/media/E1CezC1XsAoGlYI?format=jpg&name=large', 'Filmes', '2022-12-05', 'Vitoria'),
(33, 'https://images4.alphacoders.com/164/164946.jpg', 'One Piece', '2022-12-05', 'Luiz'),
(34, 'https://wallpapercave.com/wp/wp2624464.jpg', 'One Piece', '2022-12-04', 'Luiz'),
(36, 'https://wallpaper.dog/large/17267361.jpg', 'One Piece', '2022-12-02', 'Luiz'),
(39, 'https://i.pinimg.com/originals/89/8e/48/898e4878dec1487a0467550c5a0a6587.jpg', 'Hunter x Hunter', '2022-12-04', 'Luiz'),
(41, 'https://images7.alphacoders.com/791/791099.jpg', 'Hunter x Hunter', '2022-12-02', 'Luiz');

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
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `faleconosco`
--
ALTER TABLE `faleconosco`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usersimage`
--
ALTER TABLE `usersimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
