-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 26-Mar-2024 às 20:26
-- Versão do servidor: 5.7.44-48-log
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbig12dxhatkzp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `kmxo_artic`
--

CREATE TABLE `kmxo_artic` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `subtitle` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `kmxo_artic`
--

INSERT INTO `kmxo_artic` (`id`, `title`, `subtitle`, `link`, `data`) VALUES
(1, 'What is the ServiceNow Platform?', 'ServiceNow YouTube channel', 'o-que-e.php', ''),
(2, 'How to hide a Related List', 'And I didn\'t even know you could do that...', 'related_lists.php', ''),
(3, 'Is it normal to fail a certification every now and then?', 'Nobody is perfect', 'csa_delta.php', ''),
(4, 'Don\'t use a cannon to kill a mosquito', 'Filtering records before displaying to the user', 'br_before_query1.php', ''),
(5, 'GlideRecord', 'GlideRecord Cheat Sheet', 'gliderecord.php', ''),
(6, 'App Engine Studio and Team notifications', 'What if I tell you that you can send a notification to your manager when an event occurs in your custom app?', 'aes_notifications.php', ''),
(7, 'How to get a parameter from the URL', 'Catalog Client Script', 'geturlparam.php', ''),
(8, 'Best Practices in Scripting', 'If you want to Update, please do not Insert!', 'best_practices_01.php', ''),
(9, 'Validating a data field in a Service Portal', 'by using a Catalog Client Script', 'catalog_client_script.php', ''),
(10, 'Record Producer', 'Transforming Choices (Select 1) into a Multiple List (Select N)', 'rp_choice_to_list.php', ''),
(11, 'Dependent fields', 'Thinking about dependent fields', 'dependent_fields.php', ''),
(12, 'Golden Ticket matching tool', 'featured by JaceNow Youtube channel', 'golden_ticket_matching_tool.php', ''),
(13, 'There is a table called sys_choice', 'and it is important to know everything you can about it', 'sys_choice.php', ''),
(14, 'The community ranking system', 'The day I became a Mega Guru', 'ranking.php', ''),
(15, 'g_user', 'g_user Cheat Sheet', 'g_user.php', ''),
(16, 'Do we love ServiceNow swags? Yes, we do', 'ServiceNow Developer Mentorship Program 2023', '3years.php', ''),
(17, 'Scripting in ServiceNow', 'A step in our learning journey', 'javascript-sn.php', ''),
(18, 'Advent of Code', 'Try to solve programming puzzles using your programming skills', 'aoc2023.php', ''),
(19, 'Robert \"The Duke\" Fedoruk', 'The day when The Duke purchased his first ServiceNow subscription', 'theduke.php', ''),
(20, 'Another good conversation', 'Best practices for application deployment', 'slack1.php', ''),
(21, 'Welcome to the Demo Lab', 'The Laboratory door is open and entry is permitted', 'labintro.php', '- January 30, 2024'),
(22, 'Live Code Happy Hour', 'Special Edition featuring the 2024 ServiceNow MVPs', 'lchh.php', '- February 23, 2024'),
(23, 'The nowGurukul Challenge 2024', 'A brilliant initiative from NowGurukul & Learn N Grow Together & friends to help the developer journey', 'nowgurukul.php', '- March 01, 2024'),
(24, 'Refactoring an Application to avoid a direct reference to the Choice [sys_choice] table', 'Otherwise your end user can see a lot of sys_ids', 'sys_choice_fix.php', '- March 06, 2024'),
(25, 'ITOM special talk', 'Atul \"AG\" Grover interviews Ajay Kumar', 'itom.php', '- March 16, 2024'),
(26, 'ITOM special talk - Session 2', 'Atul \"AG\" Grover interviews Ajay Kumar', 'itom2.php', '- March 23, 2024');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `kmxo_artic`
--
ALTER TABLE `kmxo_artic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `kmxo_artic`
--
ALTER TABLE `kmxo_artic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
