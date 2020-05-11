

#1)   
$sql = 'SELECT nome_estado FROM estado WHERE id LIKE :3';




#2)
$sql = 'SELECT nome_estado FROM estado AND nome_pais FROM pais';



#3)
$sql = 'ALTER TABLE pais ADD sigla VARCHAR(2)';



#4)
CREATE TABLE cidade (
id AUTO_INCREMENT PRIMARY KEY,
nome_cidade VARCHAR(50),
FOREIGN KEY (id_estado) REFERENCES estado(id)
);
