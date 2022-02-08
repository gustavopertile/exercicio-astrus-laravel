-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 08/02/2022 às 17:53
-- Versão do servidor: 8.0.28
-- Versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `exercicio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int NOT NULL,
  `dsCategoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `dsCategoria`) VALUES
(1, 'Apple'),
(2, 'Samsung\r\n'),
(3, 'Motorola'),
(4, 'Nokia'),
(12, 'LG'),
(13, 'Catterpillar');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagems`
--

CREATE TABLE `imagems` (
  `idImagem` int NOT NULL,
  `dsImagem` varchar(255) DEFAULT NULL,
  `nomeDoArquivo` varchar(120) NOT NULL,
  `idProduto` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `imagems`
--

INSERT INTO `imagems` (`idImagem`, `dsImagem`, `nomeDoArquivo`, `idProduto`) VALUES
(10, 'Foto do Iphone 13 Pro Max', 'd099b1de0f6f2425b4837c94688340bc.jpg', 19),
(11, 'Foto do Iphone 11', 'd92023365c20eb4a6943a1870fe26f04.jpg', 20),
(23, 'Foto do Galaxy S 21 Ultra', '920ba7f6df6c493277c4b7bc44dd65af.png', 39),
(24, 'Foto do Iphone SE', '13fe97b1d0fb2a93c735f8a93ea57abe.jpg', 21),
(25, 'Foto do Iphone 8 Plus', '9be374e17fd680020bbe99fd2e01fc9a.jpg', 24),
(27, 'Foto do Iphone 12', 'bcb9d05d411989d15edca97d7a0ad460.jpg', 40),
(29, 'Foto do Iphone XS', '3278e6ca37a5aef9aab93a5550668786.jpg', 22),
(33, 'Foto do Galaxy S 21', '503914d60f8e5db755e77d05c9263d65.png', 41);

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_02_03_120912_create_products_table', 1),
(5, '2022_02_08_125724_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProduto` int NOT NULL,
  `nmProduto` varchar(120) NOT NULL,
  `dsProduto` varchar(255) NOT NULL,
  `idCategoria` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `nmProduto`, `dsProduto`, `idCategoria`) VALUES
(19, 'Iphone 13 Pro Max', '512gb, novo top de linha da Apple!', 1),
(20, 'Iphone 11', '128gb, em perfeito estado! Celular de vitrine', 1),
(21, 'Iphone SE', '64gb, recém importado, na caixa!', 1),
(22, 'Iphone XS', '512gb, em perfeito estado, bateria 100%, 3 meses de uso!', 1),
(24, 'Iphone 8 Plus', '256gb, na cor ouro e ainda na caixa, nunca aberto!', 1),
(39, 'Galaxy S 21 Ultra', '512gb, novo top de linha da Samsung na cor rosa', 2),
(40, 'Iphone 12', '256gb, novidade Apple com nova cor roxa!', 1),
(41, 'Galaxy S 21', '128gb, modelo top de linha da Samsung na cor preta!', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('hb1r34lNzwD4UpKwlUkLbpGQxyH184tbRXwwsCqN', 2, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSkN0OFFONE1oa1VJYTRLQ3hGRFdoZFpEazlabHpIS3BRUjloZDQyMSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvcHJvZHV0b3MvY2FkYXN0cmFyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDJMeloxeHIwTTFSck1MdHdNOWlmeS5aLkxPOGJrSXpLR2Z6MlBVMk4xSnhGdmYxQ2tYV2RHIjt9', 1644337731),
('ZcKFMIqv6OyIZslWDal4RHzgd6pQPlvylJRq2hhC', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.80 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieHh2ZVhweGl1M2F5dWdES0cwbnF4NXNleVVsanRQWGZ2SXJqU2ZZRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jYXRlZ29yaWFzL2VkaXQvMSI7fX0=', 1644340255);

-- --------------------------------------------------------

--
-- Estrutura para tabela `testes`
--

CREATE TABLE `testes` (
  `id` bigint UNSIGNED NOT NULL,
  `nomeTeste` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricaoTeste` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Gustavo', 'gustavo@teste.com', NULL, '$2y$10$p5R4y9do7oxTxDd6aab7uOTtJsrzo02rQzqt579QxbAYNqx/ReqMa', NULL, NULL, 'uSy69tWDdzaVHCEWAYiAVpmoscrPKXVj6mVyt7Q73PabKvH4Z9LV2RdDBrXA', NULL, NULL, '2022-02-08 16:13:25', '2022-02-08 16:13:25'),
(2, 'Gustavo', 'gustavo@teste2.com', NULL, '$2y$10$2LzZ1xr0M1RrMLtwM9ify.Z.LO8bkIzKGfz2PU2N1JxFvf1CkXWdG', NULL, NULL, NULL, NULL, NULL, '2022-02-08 16:42:03', '2022-02-08 16:42:03');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices de tabela `imagems`
--
ALTER TABLE `imagems`
  ADD PRIMARY KEY (`idImagem`),
  ADD UNIQUE KEY `nomeDoArquivo_UNIQUE` (`nomeDoArquivo`),
  ADD KEY `fk_Imagem_Produto_idx` (`idProduto`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProduto`),
  ADD UNIQUE KEY `nmProduto_UNIQUE` (`nmProduto`),
  ADD KEY `fk_Produto_Categoria1_idx` (`idCategoria`);

--
-- Índices de tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Índices de tabela `testes`
--
ALTER TABLE `testes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `imagems`
--
ALTER TABLE `imagems`
  MODIFY `idImagem` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProduto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `testes`
--
ALTER TABLE `testes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
