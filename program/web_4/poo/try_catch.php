<?php

require 'inverter.php';

//Tratamento da exceção com try / catch, ao encontrar o erro o programa lança a exceção e prossegue.
try {
    echo inverter(10) . '<br>';
    echo inverter(20) . '<br>';
    echo inverter(0) . '<br>';
} catch (Exception $e) {
    echo "Um erro acnteceu :( <br> ";
}

echo "Olá Mundo!";
