<?php
require 'inverter.php';

echo inverter(10) . '<br>';
echo inverter(1) . '<br>';
echo inverter(0) . '<br>'; //Erro na divisão por zero

//Ao encontrar um erro o programa encerra sem resposta, não imprime "Olá Mundo!"
//Tratamento do erro no codigo try_catch.php
echo "Olá Mundo";