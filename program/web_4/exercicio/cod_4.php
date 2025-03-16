<?php

$idade = 20;

echo '<h1>Passagem por valor não altera a variável original externamente</h1>'; // Adicionando o ponto e vírgula

function modifica_idade_valor($a)
{
    echo 'Internamente (antes): ' . $a . '<br>';

    $a = 100; // Apenas altera a cópia da variável dentro da função

    echo 'Internamente (depois): ' . $a . '<br>';
}

echo 'Externamente (antes): ' . $idade . '<br>';

modifica_idade_valor($idade); // Chamando a função

echo 'Externamente (depois): ' . $idade . '<br>'; // Continua 20

echo '<h1>Passagem por referência "adicionando & no parametro" altera variável original externamente</h1>'; // Adicionando o ponto e vírgula

function modifica_idade_parametro(&$a) // Nome corrigido
{
    echo 'Internamente (antes): ' . $a . '<br>';

    $a = 100; // Agora altera a variável original

    echo 'Internamente (depois): ' . $a . '<br>';
}

echo 'Externamente (antes): ' . $idade . '<br>';

modifica_idade_parametro($idade); // Agora a variável será alterada

echo 'Externamente (depois): ' . $idade . '<br>'; // Agora será 100