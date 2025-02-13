<?php

function classificarIMC(float $imc): string {
    $faixas = [
        [18.5, "Magreza"],
        [24.9, "Saudável"],
        [29.9, "Sobrepeso"],
        [34.9, "Obesidade Grau I"],
        [39.9, "Obesidade Grau II"],
        [INF, "Obesidade Grau III"]
    ];
    
    foreach ($faixas as $faixa) {
        if ($imc <= $faixa[0]) {
            return "Atenção, seu IMC é {$imc}, e você está classificado como {$faixa[1]}";
        }
    }
}

// Chamada da função com um valor de exemplo
$valorIMC = 24;
echo classificarIMC($valorIMC);
?>
