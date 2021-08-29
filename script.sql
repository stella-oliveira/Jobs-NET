CREATE TABLE IF NOT EXISTS cargo (
	id INT(1)  NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
) DEFAULT CHARSET = utf8;

INSERT INTO cargo (nome) VALUES
    ("Administrador de banco de dados"),
	("Analista de redes"),
	("Analista de sistemas"),
	("Cientista de dados"),
	("Desenvolvedor back-end"),
	("Desenvolvedor front-end"),
	("Desenvolvedor full-stack"),
	("Desenvolvedor mobile"),
	("Designer de jogos"),
	("Designer de UI"),
	("Designer de UX"),
	("Engenheiro de dados"),
	("Engenheiro de software"),
	("Engenheiro de machine learning"),
	("Gerente de software");

CREATE TABLE IF NOT EXISTS estadoCivil (
	id INT(1)  NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
) DEFAULT CHARSET = utf8;

INSERT INTO estadoCivil (nome) VALUES
    ("Solteiro(a)"), ("Casado(a)"), ("Viúvo(a)"), ("União Estável");

CREATE TABLE IF NOT EXISTS sexo (
	id INT(1)  NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
) DEFAULT CHARSET = utf8;

INSERT INTO sexo (nome) VALUES
    ("Feminino"), ("Masculino"), ("Outro / Não quero declarar");

CREATE TABLE IF NOT EXISTS veiculo (
	id INT(1)  NOT NULL AUTO_INCREMENT,
	nome CHAR(3) NOT NULL,
    PRIMARY KEY (id)
) DEFAULT CHARSET = utf8;

INSERT INTO veiculo (nome) VALUES
    ("Sim"), ("Não");
    
CREATE TABLE IF NOT EXISTS habilitacao (
	id INT(1)  NOT NULL AUTO_INCREMENT,
	nome VARCHAR(22) NOT NULL,
    PRIMARY KEY (id)
) DEFAULT CHARSET = utf8;

INSERT INTO habilitacao (nome) VALUES
    ("Categoria A"), ("Categoria B"),  ("Categoria C"), ("Categoria D"), ("Categoria E"), ("Não possuo habilitação");

CREATE TABLE IF NOT EXISTS pessoa (
	id INT(10) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cargo_id INT(5) NOT NULL,
    prof VARCHAR(100) NOT NULL,
    dataNascimento DATE NOT NULL,
    estadoCivil_id INT(1),
    sexo_id INT(1),
    cep CHAR(9) NOT NULL,
    rua VARCHAR(100) NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    uf CHAR(2) NOT NULL,
    numero VARCHAR(50) NOT NULL,
    telefone1 INT(8),
    telefone2 INT(8),
    celular INT(11) NOT NULL,
    contato VARCHAR(100),
    email VARCHAR(100) NOT NULL,
    identidade VARCHAR(15),
    cpf VARCHAR(15) UNIQUE,
    veiculo_id INT(1),
    habilitacao_id INT(1),
	PRIMARY KEY (id)
) DEFAULT CHARSET = utf8;

CREATE VIEW pessoa_cadastrada AS
SELECT pessoa.nome, cargo.nome AS cargo, pessoa.prof, DATE_FORMAT(pessoa.dataNascimento, '%d/%m/%Y') AS 'data de nascimento', estadocivil.nome AS 'estado civil', sexo.nome AS sexo, pessoa.rua, pessoa.numero, pessoa.bairro, pessoa.cidade, pessoa.uf, pessoa.cep, pessoa.telefone1, pessoa.telefone2, pessoa.celular, pessoa.contato, pessoa.email, pessoa.identidade, pessoa.cpf, veiculo.nome AS 'possui veículo', habilitacao.nome AS 'possui habilitacao'
FROM pessoa
INNER JOIN cargo ON pessoa.cargo_id = cargo.id
INNER JOIN estadocivil ON pessoa.estadoCivil_id = estadocivil.id
INNER JOIN sexo ON pessoa.sexo_id = sexo.id
INNER JOIN veiculo ON pessoa.veiculo_id = veiculo.id
INNER JOIN habilitacao ON pessoa.habilitacao_id = habilitacao.id;