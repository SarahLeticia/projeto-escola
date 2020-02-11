--
-- Estrutura da tabela `ingredientes`
--

CREATE TABLE INGREDIENTES (
  id_ing int(11) NOT NULL,
  nome varchar(100) CHARACTER SET utf8 NOT NULL,
  qtd int(11) NOT NULL
  primary key (id_ing)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio`
--
CREATE TABLE CARDAPIO (
  id_card int(11) NOT NULL,
  turno varchar(50) CHARACTER SET utf8 NOT NULL,
  item varchar(50) CHARACTER SET utf8 NOT NULL,
  qtd int(11) NOT NULL,
  cod_item int(11) NOT NULL
  primary key (id_card)
);

