<?php

function classificarIMC($imc) {
    if ($imc <= 18.5) {
        $classificacao = "Magreza";
    } elseif ($imc <= 24.9) {
        $classificacao = "Saudável";
    } elseif ($imc <= 29.9) {
        $classificacao = "Sobrepeso";
    } elseif ($imc <= 34.9) {
        $classificacao = "Obesidade Grau I";
    } elseif ($imc <= 39.9) {
        $classificacao = "Obesidade Grau II";
    } else {
        $classificacao = "Obesidade Grau III";
    }
    
    echo "Atenção, seu IMC é " . $imc . ", e você está classificado como " . $classificacao . "<br>";
}

// Testando a função com um valor de exemplo
$valorIMC = 25.30;
classificarIMC($valorIMC);
?>