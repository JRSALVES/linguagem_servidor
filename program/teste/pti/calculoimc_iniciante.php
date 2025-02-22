<?php

function classificarIMC($imc) {
    $faixas = [
        array(18.5, "Magreza"),
        array(24.9, "Saudável"),
        array(29.9, "Sobrepeso"),
        array(34.9, "Obesidade Grau I"),
        array(39.9, "Obesidade Grau II"),
        array(100, "Obesidade Grau III") // Definindo um limite alto
    ];
    
    foreach ($faixas as $faixa) {
        if ($imc <= $faixa[0]) {
            echo "Atenção, seu IMC é " . $imc . ", e você está classificado como " . $faixa[1] . "<br>";
            break;
        }
    }
}

// Testando a função com um valor de exemplo
$valorIMC = 25.30;
classificarIMC($valorIMC);

?>
