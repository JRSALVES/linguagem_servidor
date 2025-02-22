<?php
/**
 * Exibe a idade de uma pessoa desde o ano de nascimento até 2020.
 */
$ano = 1985;

while ($ano <= 2020) {
    // Calcula a idade com base no ano de nascimento
    $idade = $ano - 1985;

    // Exibe a idade no ano correspondente
    echo "<p>Sua idade era de: $idade em $ano</p>";

    $ano++; // Incrementa o ano
}
?>
