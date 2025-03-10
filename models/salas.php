<?php 
require 'database.php';

$sql = "CREATE TABLE IF NOT EXISTS SALAS(
	ID INT AUTO_INCREMENT PRIMARY KEY,
    SALA VARCHAR(50) NOT NULL,
    MATERIA VARCHAR(100) NOT NULL,
    TURMA VARCHAR(50) NOT NULL,
    DATA DATE NOT NULL,
    HORARIO VARCHAR(50) NOT NULL,
    PROFESSOR_ID INT,
    FOREIGN KEY (PROFESSOR_ID) REFERENCES PROFESSORES(id)
)";

if (mysqli_query($conexao, $sql)){
	echo "Tabela 'SALAS' criada!";
	
} else {
	echo "Erro ao criar tabela: " .mysqli_error($conexao);
	}

 ?>
