<?php
require 'database.php';

$sql = "CREATE TABLE IF NOT EXISTS PROFESSORES(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NOME VARCHAR(100) NOT NULL,
    UNIDADE_CURRICULAR VARCHAR(100) NOT NULL
)";

if (mysqli_query($conexao, $sql)) {
    echo "Tabela 'PROFESSORES' criada!";
} else {
    echo "Erro ao criar tabela: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
