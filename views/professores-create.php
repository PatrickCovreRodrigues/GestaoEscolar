<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Professores</title>
    <link rel="stylesheet" type="text/css" href="../css/stylePOST.css">
    <script type="text/javascript" src="../js/formularioCadastro.js"></script>
</head>

<body>
	<?php
		include 'layout/menu.php';
	?>

    <div class="container">

        <!-- Títulos das Abas -->
        <div class="tabs">
            <button id="tab-cadastrar" onclick="toggleView('cadastrar')">Cadastrar</button>
            <button id="tab-listar" onclick="toggleView('listar')">Listar</button>
        </div>

        <!-- Formulário de Cadastro -->
        <div id="formulario" class="formulario">
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Digite o nome">
            <label>Unidade Curricular</label>
            <input type="text" name="unidade" placeholder="Digite a unidade curricular">
            <button>Salvar</button>
        </div>

        <!-- Listagem de Professores -->
        <div id="listagem" class="listagem">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Unidade Curricular</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dados simulados -->
                    <tr>
                        <td>João Silva</td>
                        <td>Matemática</td>
                    </tr>
                    <tr>
                        <td>Maria Oliveira</td>
                        <td>Física</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>
