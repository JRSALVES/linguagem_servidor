<?php
$resultado = array_map(function ($x) {
    return $x * 3;
}, [0, 1, 2, 3]);

print_r($resultado);  // Isso vai exibir o array resultante