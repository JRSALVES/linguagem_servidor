<h1>Calssificação de IMC</h1>

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
    
    echo "Atenção, seu IMC é " . $imc . ", sua classificação de IMC é " . $classificacao . "<br>";
}

// Para testar função digite um valor de exemplo para a variável $valorIMC abaixo.
$valorIMC = 23;
classificarIMC($valorIMC);
?>