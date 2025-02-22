<?php
// Declarando a função greet e passando o nome como parâmetro
function greet($nome){    
    echo "Hello, $nome! Welcome to our site!<br>";
}

// Declarando a função exibir_data e passando a data como parâmetro
function exibir_data($data){
    echo "Hoje é: $data";
}

// Chamando as funções, passando os valores desejados
greet('Jeruso Alves Nascimento');
greet('Alunos');
exibir_data(date("d - m - Y"));  // Exibe a data no formato dia - mês - ano
?>
