CREATE TABLE db_produtos_php (
id INT NOT NULL, 
produto VARCHAR(45) NOT NULL, 
codigo VARCHAR(250) NOT NULL, 
categoria_id VARCHAR(45) NOT NULL , 
descricao TEXT NOT NULL, 
valor_compra DECIMAL(10,2) NOT NULL, 
valor_venda DECIMAL(10,2) NOT NULL 
);