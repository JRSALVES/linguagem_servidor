<?php
// Inclui o arquivo de conexão com o banco de dados
require 'banco.php';

// Define o conjunto de caracteres para a conexão com o MySQL como 'utf8'
mysqli_set_charset($mysql, 'utf8');

// Função para exibir os dados dos usuários
function exibir_dados_usuario($resultado)
{
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
        echo 'Nenhum usuário encontrado.<br>';
    }
}

// Função para consultar usuários por nome
function consultar_por_nome($nome)
{
    global $mysql; // Usa a variável $mysql da conexão
    $resultado_nome = mysqli_query($mysql, "SELECT * FROM usuarios WHERE nome LIKE '%$nome%'");
    return $resultado_nome;
}

// Função para consultar usuários por email
function consultar_por_email($email)
{
    global $mysql; // Usa a variável $mysql da conexão
    $resultado_email = mysqli_query($mysql, "SELECT * FROM usuarios WHERE email LIKE '%$email%'");
    return $resultado_email;
}

// Consulta por nome
$nome = 'João'; // Alterar o nome conforme necessário
echo "<h3>Resultado da busca por nome:</h3>";
$resultado_nome = consultar_por_nome($nome);
exibir_dados_usuario($resultado_nome);

// Consulta por email
$email = 'usuario8@email.com'; // Alterar o email conforme necessário
echo "<h3>Resultado da busca por email:</h3>";
$resultado_email = consultar_por_email($email);
exibir_dados_usuario($resultado_email);

// Fecha a conexão com o banco de dados
mysqli_close($mysql);
