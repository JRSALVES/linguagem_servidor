<?php
session_start();

// Inicializa a lista de nomes, caso não exista
$_SESSION['nomes'] = $_SESSION['nomes'] ?? [];

$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcao = $_POST['opcao'];

    // Adicionar nome
    if ($opcao == "adicionar" && !empty(trim($_POST['nome']))) {
        $_SESSION['nomes'][] = trim($_POST['nome']);
        $mensagem = "Nome adicionado!";
    }

    // Sortear nome e remover da lista
    elseif ($opcao == "sortear" && !empty($_SESSION['nomes'])) {
        $sorteadoIndex = array_rand($_SESSION['nomes']); // Pega o índice do nome sorteado
        $sorteado = $_SESSION['nomes'][$sorteadoIndex];
        unset($_SESSION['nomes'][$sorteadoIndex]); // Remove o nome sorteado da lista
        $_SESSION['nomes'] = array_values($_SESSION['nomes']); // Reindexa a lista para evitar buracos no índice
        $mensagem = "Nome sorteado: <strong>$sorteado</strong>";
    }

    // Limpar lista de nomes
    elseif ($opcao == "limpar") {
        $_SESSION['nomes'] = [];
        $mensagem = "Lista limpa!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Nomes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: #f0f0f0;
            margin: 5px;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>

<body>

    <h2>Gerenciador de Nomes</h2>

    <?php if (!empty($mensagem)) echo "<p><strong>$mensagem</strong></p>"; ?>

    <form method="POST">
        <input type="text" name="nome" placeholder="Digite um nome" required>
        <button type="submit" name="opcao" value="adicionar">Adicionar</button>
    </form>

    <!-- Só exibe a lista de nomes após uma ação -->
    <?php if (!empty($_SESSION['nomes']) && ($_POST['opcao'] == 'adicionar' || $_POST['opcao'] == 'sortear')): ?>
        <h3>Lista de Nomes</h3>
        <ul>
            <?php foreach ($_SESSION['nomes'] as $nome) echo "<li>" . htmlspecialchars($nome) . "</li>"; ?>
        </ul>
    <?php else: ?>
        <p>Nenhum nome adicionado ainda.</p>
    <?php endif; ?>

    <form method="POST">
        <button type="submit" name="opcao" value="sortear">Sortear Nome</button>
        <button type="submit" name="opcao" value="limpar">Limpar Lista</button>
    </form>

</body>

</html>