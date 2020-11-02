 
CREATE TABLE php_unipe.cadastro (
	codigo BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(100) NULL,
	telefone varchar(100) NULL,
	email varchar(100) NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=latin1
COLLATE=latin1_swedish_ci;
