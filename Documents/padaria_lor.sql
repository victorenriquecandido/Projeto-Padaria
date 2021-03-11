CREATE TABLE `users` (
  `id` int(32) NOT NULL,
  `pwd` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_user` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `email` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_secundario` varchar(80) NOT NULL,
  `nome` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone_cel` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone_res` varchar(32) NOT NULL,
  `rg` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nasc` varchar(20) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `cep` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rua` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complemento` varchar(60) NOT NULL,
  `uf` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biografia` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sem-foto.jpg',
  `data_cad` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `users` (`id`, `pwd`, `tipo_user`, `email`, `email_secundario`, `nome`, `cpf`, `cnpj`, `telefone_cel`, `telefone_res`, `rg`, `data_nasc`, `sexo`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `complemento`, `uf`, `biografia`, `foto`, `data_cad`) VALUES
(1, '$argon2i$v=19$m=2048,t=4,p=3$MTIzNDU2Nzg5$5c+iezRPeon8TMGSNlMTtYu1v5db4GdOwbTpqIq2V5o', 'admin', 'atendente@lor.com', 'atendente2@lor.com', 'Atendente da Padaria Lor', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', 'sem-foto.jpg', NULL);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;


/////////////////////////////////////////////////////////////////////////////////////////////


CREATE TABLE `comanda` (
  `id_comanda` int(32) NOT NULL,
  `produto1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade1` varchar(3),
  `valor1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade2` varchar(3),
  `valor2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade3` varchar(3),
  `valor3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto4` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade4` varchar(3),
  `valor4` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto5` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade5` varchar(3),
  `valor5` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto6` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade6` varchar(3),
  `valor6` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto7` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade7` varchar(3),
  `valor7` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto8` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade8` varchar(3),
  `valor8` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `produto9` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nenhum Produto',
  `quantidade9` varchar(3),
  `valor9` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(30),
  `cad_feito_por` int(5),
  `data_cad` timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `comanda`
  ADD PRIMARY KEY (`id_comanda`);

ALTER TABLE `comanda`
  MODIFY `id_comanda` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;