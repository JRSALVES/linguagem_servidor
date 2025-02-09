<?php
    // Definindo as variáveis    
    $nome = "Jeruso Alves Nascimento";  // Nome da pessoa
    $ano_nascimento = 2000;  // Ano Nascimento
    $data_atual = date('Y');  // Ano atual
    $idade = $data_atual - $ano_nascimento;  // Calculando o ano de nascimento

    // Definindo o valor do depósito diário
    $valor_deposito_por_dia = 0.50;

    // Calculando o valor acumulado com base na idade e no depósito diário
    // Multiplicando o valor do depósito diário pelo número de dias vividos
    $dias_vividos = $idade * 365;  // Estimativa de dias vividos (sem considerar anos bissextos)
    $valor_acumulado = $valor_deposito_por_dia * $dias_vividos;

    // Exibindo os resultados
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . " anos<br>";
    echo "Ano de nascimento: " . $ano_nascimento . "<br>";
    // Formatando o resulrtado para reais com duas casas decimais
    echo "Valor acumulado com depósitos de R$ 0.50 por dia: R$ " . number_format($valor_acumulado, 2, ',', '.') . "<br>"; 
?>
