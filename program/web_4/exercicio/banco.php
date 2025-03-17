<?php
// Tenta conectar ao banco de dados
$mysql = mysqli_connect("localhost", "root", "", "db_php");

// Verifica se houve erro na conexão
if (!$mysql) {
    // Se falhou, exibe a mensagem de erro
    echo "Erro de conexão: " . mysqli_connect_error() . '<br>';
} else {
    // Se a conexão foi bem-sucedida
    echo "Conexão bem-sucedida ao banco de dados!<br><br>";
}