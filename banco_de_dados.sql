-- O CÓDIGO ABAIXO É REFERENTE AO NOSSO BANCO DE DADOS

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Banco de dados: `login`

-- Estrutura para tabela `users`

CREATE TABLE `users` (
  `idusuario` int(255) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `cpf_cnpj` varchar(80) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `situacao` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Despejando dados para a tabela `users`

INSERT INTO `users` (`idusuario`, `nome`, `cpf_cnpj`, `senha`, `situacao`) VALUES
(5, 'Luiz', '71133531180', '202cb962ac59075b964b07152d234b70', 1); -- A senha está criptografada com o padrão MD5

-- Índices para tabelas despejadas

-- Índices de tabela `users`

ALTER TABLE `users`
  ADD PRIMARY KEY (`idusuario`);

-- AUTO_INCREMENT para tabelas despejadas

-- AUTO_INCREMENT de tabela `users`

ALTER TABLE `users`
  MODIFY `idusuario` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
