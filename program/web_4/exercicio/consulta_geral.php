<?php
// Inclui o arquivo de conexão com o banco de dados
require 'banco.php';
?>

<?php
// Define o conjunto de caracteres para a conexão com o MySQL como 'utf8'
mysqli_set_charset($mysql, 'utf8');

// Executa uma consulta SQL para selecionar todos os registros da tabela 'usuarios'
$resultado = mysqli_query($mysql, "select * from usuarios");

// Verifica se a consulta retornou algum resultado
if ($resultado) {
    // Percorre todas as linhas do resultado da consulta
    while ($linha = mysqli_fetch_assoc($resultado)) {
        // Exibe os dados de cada usuário
        echo 'Nome: ' . $linha['nome'] . '<br>';
        echo 'Email: ' . $linha['email'] . '<br>';
        echo 'Senha: ' . $linha['senha'] . '<br><br>';
    }
} else {
    // Caso não haja resultado, exibe um erro
    echo 'Erro na consulta: ' . mysqli_error($mysql);
}

// Fecha a conexão com o banco de dados
mysqli_close($mysql);
?>