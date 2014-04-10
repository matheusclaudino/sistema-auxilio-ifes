-- -----------------------------------------------------
-- CURSO
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS curso (
  curso_id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  periodo INT NOT NULL,
  PRIMARY KEY (curso_id))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- TURMA
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS turma (
  turma_id INT NOT NULL AUTO_INCREMENT,
  curso_id INT NOT NULL,
  nome VARCHAR(10) NOT NULL,
  ano INT NOT NULL,
  PRIMARY KEY (turma_id),
  INDEX fk_turma_curso_idx (curso_id ASC),
  CONSTRAINT fk_turma_curso
    FOREIGN KEY (curso_id)
    REFERENCES curso (curso_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table aluno
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS aluno (
  aluno_id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(70) NOT NULL,
  email VARCHAR(40) NOT NULL,
  senha VARCHAR(20) NOT NULL,
  rg INT NOT NULL,
  cpf INT NOT NULL,
  turma_id INT NOT NULL,
  data_nascimento DATE NOT NULL,
  sexo VARCHAR(2) NOT NULL,
  naturalidade VARCHAR(30) NOT NULL,
  etnia VARCHAR(20) NOT NULL,
  estado_civil VARCHAR(20) NOT NULL,
  endereco VARCHAR(50) NOT NULL,
  cidade VARCHAR(30) NOT NULL,
  bairro VARCHAR(30) NOT NULL,
  uf VARCHAR(5) NOT NULL,
  cep INT NOT NULL,
  ponto_referencia VARCHAR(30) NULL,
  telefone INT NOT NULL,
  telefone_trabalho INT NULL,
  celular INT NULL,
  procedencia VARCHAR(20) NOT NULL,
  proveniencia VARCHAR(20) NOT NULL,
  bolsa_estudos TINYINT(1) NULL,
  bolsa_estudos_porcentagem FLOAT NULL,
  renda FLOAT NULL,
  renda_percapita FLOAT NULL,
  acompanhamento TEXT NULL,
  conta_bancaria_id INT NOT NULL,
  hb_habitacao VARCHAR(50) NOT NULL,
  hb_valor FLOAT NULL,
  hb_pessoa_responsavel VARCHAR(60) NULL,
  hb_telefone_contato INT NULL,
  hb_tipo_habitacao VARCHAR(50) NULL,
  hb_natureza_vinculo VARCHAR(50) NULL,
  hb_natureza_vinculo_valor FLOAT NULL,
  hb_qtd_comodos INT NULL,
  hb_computador TINYINT(1) NULL,
  hb_internet TINYINT(1) NULL,
  hb_gasto_agua FLOAT NULL,
  hb_gasto_luz FLOAT NULL,
  hb_gasto_telefone FLOAT NULL,
  hb_gasto_emprestimo FLOAT NULL,
  hb_gasto_prestacoes FLOAT NULL,
  hb_gasto_celular FLOAT NULL,
  hb_gasto_alimentacao FLOAT NULL,
  hb_gasto_mensalidades FLOAT NULL,
  hb_gasto_condominio FLOAT NULL,
  hb_gasto_outros FLOAT NULL,
  ep_atividade_complementar VARCHAR(50) NOT NULL,
  ep_trabalha TINYINT(1) NOT NULL,
  ep_trabalhou TINYINT(1) NULL,
  ep_vinculo_trabalhista VARCHAR(20) NOT NULL,
  ep_funcao VARCHAR(20) NULL,
  ep_outras_rendas TINYINT(1) NOT NULL,
  ep_procedencia VARCHAR(20) NOT NULL,
  banco_conta INT NOT NULL,
  banco_agencia INT NOT NULL,
  banco_operacao INT NOT NULL,
  banco_numero INT NOT NULL,
  saude_convenio VARCHAR(50) NULL,
  saude_convenio_valor FLOAT NULL,
  saude_dificuldade_enxergar TINYINT(1) NULL,
  saude_oculos TINYINT(1) NULL,
  saude_recebe_medicamento TINYINT(1) NULL,
  saude_medicamento_gastos FLOAT NULL,
  PRIMARY KEY (aluno_id),
  INDEX fk_aluno_turma1_idx (turma_id ASC),
  CONSTRAINT fk_aluno_turma1
    FOREIGN KEY (turma_id)
    REFERENCES turma (turma_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table processo
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS processo (
  processo_id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  data_inicial DATE NOT NULL,
  data_final DATE NOT NULL,
  edital VARCHAR(30) NULL,
  PRIMARY KEY (processo_id))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table inscricao
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS inscricao (
  aluno_id INT NOT NULL,
  processo_id INT NOT NULL,
  turma_id INT NOT NULL,
  entrevista_obs TEXT NULL,
  entrevista_data DATE NULL,
  entrevista_hora TIME NULL,
  INDEX fk_cadastro_aluno1_idx (aluno_id ASC),
  INDEX fk_cadastro_processo1_idx (processo_id ASC),
  INDEX fk_inscricao_turma1_idx (turma_id ASC),
  PRIMARY KEY (aluno_id, processo_id),
  CONSTRAINT fk_cadastro_aluno1
    FOREIGN KEY (aluno_id)
    REFERENCES aluno (aluno_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_cadastro_processo1
    FOREIGN KEY (processo_id)
    REFERENCES processo (processo_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_inscricao_turma1
    FOREIGN KEY (turma_id)
    REFERENCES turma (turma_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table acesso
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS acesso (
  acesso_id INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (acesso_id))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table usuario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS usuario (
  usuario_id INT NOT NULL,
  acesso_id INT NOT NULL,
  nome VARCHAR(60) NOT NULL,
  email VARCHAR(40) NOT NULL,
  senha VARCHAR(20) NOT NULL,
  rg INT NOT NULL,
  cpf INT NOT NULL,
  naturalidade VARCHAR(20) NOT NULL,
  etnia VARCHAR(20) NOT NULL,
  estado_civil VARCHAR(20) NOT NULL,
  data_nascimento DATE NOT NULL,
  endereco VARCHAR(100) NOT NULL,
  cidade VARCHAR(30) NOT NULL,
  bairro VARCHAR(40) NOT NULL,
  uf VARCHAR(5) NOT NULL,
  cep INT NOT NULL,
  ponto_referencia VARCHAR(50) NULL,
  telefone INT NOT NULL,
  celular INT NOT NULL,
  cargo VARCHAR(30) NULL,
  PRIMARY KEY (usuario_id),
  INDEX fk_usuario_acesso1_idx (acesso_id ASC),
  CONSTRAINT fk_usuario_acesso1
    FOREIGN KEY (acesso_id)
    REFERENCES acesso (acesso_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table mensagem
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS mensagem (
  mensagem_id INT NOT NULL AUTO_INCREMENT,
  usuario_id INT NOT NULL,
  nome VARCHAR(60) NOT NULL,
  email VARCHAR(40) NOT NULL,
  turma VARCHAR(10) NULL,
  telefone INT NOT NULL,
  assunto VARCHAR(100) NOT NULL,
  mensagem TEXT NOT NULL,
  PRIMARY KEY (mensagem_id),
  INDEX fk_mensagem_usuario1_idx (usuario_id ASC),
  CONSTRAINT fk_mensagem_usuario1
    FOREIGN KEY (usuario_id)
    REFERENCES usuario (usuario_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table parametro
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS parametro (
  parametro_id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NULL,
  valor VARCHAR(200) NULL,
  PRIMARY KEY (parametro_id))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table criterio
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS criterio (
  criterio_id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  PRIMARY KEY (criterio_id))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table auxilio
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS auxilio (
  auxilio_id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  PRIMARY KEY (auxilio_id))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table processo_auxilio
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS processo_auxilio (
  processo_id INT NOT NULL,
  auxilio_id INT NOT NULL,
  valor FLOAT NULL,
  data_fim DATE NOT NULL,
  data_inicio DATE NOT NULL,
  INDEX fk_processo-auxilio_processo1_idx (processo_id ASC),
  INDEX fk_processo_auxilio_auxilio1_idx (auxilio_id ASC),
  PRIMARY KEY (processo_id, auxilio_id),
  CONSTRAINT fk_processo-auxilio_processo1
    FOREIGN KEY (processo_id)
    REFERENCES processo (processo_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_processo_auxilio_auxilio1
    FOREIGN KEY (auxilio_id)
    REFERENCES auxilio (auxilio_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table recurso
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS recurso (
  aluno_id INT NOT NULL,
  processo_id INT NOT NULL,
  auxilio_id INT NOT NULL,
  usuario_id INT NOT NULL,
  turma VARCHAR(5) NOT NULL,
  data DATE NOT NULL,
  justificativa TEXT NOT NULL,
  PRIMARY KEY (aluno_id, processo_id, auxilio_id),
  INDEX fk_recurso_usuario1_idx (usuario_id ASC),
  INDEX fk_recurso_processo_auxilio1_idx (processo_id ASC, auxilio_id ASC),
  INDEX fk_recurso_aluno1_idx (aluno_id ASC),
  CONSTRAINT fk_recurso_usuario1
    FOREIGN KEY (usuario_id)
    REFERENCES usuario (usuario_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_recurso_processo_auxilio1
    FOREIGN KEY (processo_id , auxilio_id)
    REFERENCES processo_auxilio (processo_id , auxilio_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_recurso_aluno1
    FOREIGN KEY (aluno_id)
    REFERENCES aluno (aluno_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table auxilio_peso
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS auxilio_peso (
  criterio_id INT NOT NULL,
  auxilio_id INT NOT NULL,
  peso FLOAT NOT NULL,
  INDEX fk_auxilio-criterio_criterio1_idx (criterio_id ASC),
  INDEX fk_auxilio-criterio_auxilio1_idx (auxilio_id ASC),
  PRIMARY KEY (criterio_id, auxilio_id),
  CONSTRAINT fk_auxilio-criterio_criterio1
    FOREIGN KEY (criterio_id)
    REFERENCES criterio (criterio_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_auxilio-criterio_auxilio1
    FOREIGN KEY (auxilio_id)
    REFERENCES auxilio (auxilio_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table banner
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS banner (
  banner_id INT NOT NULL AUTO_INCREMENT,
  titulo VARCHAR(50) NOT NULL,
  imagem VARCHAR(30) NOT NULL,
  status TINYINT(1) NULL,
  PRIMARY KEY (banner_id))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table faq
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS faq (
  faq_id INT NOT NULL AUTO_INCREMENT,
  pergunta VARCHAR(300) NOT NULL,
  resposta VARCHAR(500) NOT NULL,
  PRIMARY KEY (faq_id))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table aluno_auxilio
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS aluno_auxilio (
  aluno_auxilio_id INT NOT NULL AUTO_INCREMENT,
  aluno_id INT NOT NULL,
  processo_id INT NOT NULL,
  auxilio_id INT NOT NULL,
  PRIMARY KEY (aluno_auxilio_id),
  INDEX fk_aluno_auxilio_aluno1_idx (aluno_id ASC),
  INDEX fk_aluno_auxilio_processo_auxilio1_idx (processo_id ASC, auxilio_id ASC),
  CONSTRAINT fk_aluno_auxilio_aluno1
    FOREIGN KEY (aluno_id)
    REFERENCES aluno (aluno_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_aluno_auxilio_processo_auxilio1
    FOREIGN KEY (processo_id , auxilio_id)
    REFERENCES processo_auxilio (processo_id , auxilio_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table pagamento
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS pagamento (
  id INT NOT NULL AUTO_INCREMENT,
  aluno_auxilio_id INT NOT NULL,
  data DATE NOT NULL,
  valor FLOAT NOT NULL,
  INDEX fk_pagamento_aluno_auxilio1_idx (aluno_auxilio_id ASC),
  PRIMARY KEY (id),
  CONSTRAINT fk_pagamento_aluno_auxilio1
    FOREIGN KEY (aluno_auxilio_id)
    REFERENCES aluno_auxilio (aluno_auxilio_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table funcionalidade
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS funcionalidade (
  funcionalidade_id INT NOT NULL,
  nome VARCHAR(25) NOT NULL,
  PRIMARY KEY (funcionalidade_id))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table funcionalidade_acesso
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS funcionalidade_acesso (
  funcionalidade_id INT NOT NULL,
  acesso_id INT NOT NULL,
  PRIMARY KEY (funcionalidade_id, acesso_id),
  INDEX fk_funcionalidade_has_acesso_acesso1_idx (acesso_id ASC),
  INDEX fk_funcionalidade_has_acesso_funcionalidade1_idx (funcionalidade_id ASC),
  CONSTRAINT fk_funcionalidade_has_acesso_funcionalidade1
    FOREIGN KEY (funcionalidade_id)
    REFERENCES funcionalidade (funcionalidade_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_funcionalidade_has_acesso_acesso1
    FOREIGN KEY (acesso_id)
    REFERENCES acesso (acesso_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table familiar
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS familiar (
  familiar_id INT NOT NULL AUTO_INCREMENT,
  aluno_id INT NOT NULL,
  nome VARCHAR(60) NOT NULL,
  idade INT NOT NULL,
  estado_civil VARCHAR(20) NULL,
  parentesco VARCHAR(50) NULL,
  situacao VARCHAR(45) NULL,
  situacao_empregaticia VARCHAR(45) NULL,
  profissao VARCHAR(30) NULL,
  salario FLOAT NULL,
  pensao FLOAT NULL,
  tipo_escola VARCHAR(10) NULL COMMENT 'Particular ou Pública.',
  mensalidade FLOAT NULL,
  gastos VARCHAR(45) NULL,
  tipo_doenca VARCHAR(60) NULL,
  faz_tratamento TINYINT(1) NULL,
  usa_medicamento TINYINT(1) NULL,
  deficiente TINYINT(1) NULL,
  viciado TINYINT(1) NULL,
  PRIMARY KEY (familiar_id),
  INDEX fk_familia_aluno1_idx (aluno_id ASC),
  CONSTRAINT fk_familia_aluno1
    FOREIGN KEY (aluno_id)
    REFERENCES aluno (aluno_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table documento
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS documento (
  documento_id INT NOT NULL,
  aluno_id INT NOT NULL,
  nome VARCHAR(30) NOT NULL,
  url VARCHAR(200) NULL,
  PRIMARY KEY (documento_id),
  INDEX fk_documento_aluno1_idx (aluno_id ASC),
  CONSTRAINT fk_documento_aluno1
    FOREIGN KEY (aluno_id)
    REFERENCES aluno (aluno_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table aluno_peso
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS aluno_peso (
  criterio_id INT NOT NULL,
  aluno_id INT NOT NULL,
  peso FLOAT NOT NULL,
  PRIMARY KEY (criterio_id, aluno_id),
  INDEX fk_criterio_has_aluno_aluno1_idx (aluno_id ASC),
  INDEX fk_criterio_has_aluno_criterio1_idx (criterio_id ASC),
  CONSTRAINT fk_criterio_has_aluno_criterio1
    FOREIGN KEY (criterio_id)
    REFERENCES criterio (criterio_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_criterio_has_aluno_aluno1
    FOREIGN KEY (aluno_id)
    REFERENCES aluno (aluno_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table inscricao_auxilio
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS inscricao_auxilio (
  aluno_id INT NOT NULL,
  processo_id INT NOT NULL,
  auxilio_id INT NOT NULL,
  resultado TINYINT(1) NULL,
  PRIMARY KEY (aluno_id, processo_id, auxilio_id),
  INDEX fk_inscricao_has_processo_auxilio_processo_auxilio1_idx (auxilio_id ASC),
  INDEX fk_inscricao_has_processo_auxilio_inscricao1_idx (aluno_id ASC, processo_id ASC),
  CONSTRAINT fk_inscricao_has_processo_auxilio_inscricao1
    FOREIGN KEY (aluno_id , processo_id)
    REFERENCES inscricao (aluno_id , processo_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_inscricao_has_processo_auxilio_processo_auxilio1
    FOREIGN KEY (auxilio_id)
    REFERENCES processo_auxilio (auxilio_id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;