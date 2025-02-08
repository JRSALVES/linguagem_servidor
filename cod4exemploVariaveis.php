<?php
    $idade = 20;
    $idade_daqui_cinco = $idade + 5;
    $ano_nascimento = 2020 - $idade;
    $total_de_pedacos_de_bolo = $idade * 8;
    $decadas = floor($idade / 10); // arredonda para baixo
    $ano_desde_multiplos_de_9 = $idade % 9; // não faz sentido dividir por zero, então alterei para o módulo de 9
?>

<html>
<head>

<title>Cálculo de Idade</title>
</head>

<body>
    <H1>
    Você tem: <?php echo $idade ?><br>
    Daqui a cinco anos você terá: <?php echo $idade_daqui_cinco ?><br>
    Você nasceu em: <?php echo $ano_nascimento ?><br>
    Ganhará <?php echo $total_de_pedacos_de_bolo ?> pedaços de bolo<br>
    Tem <?php echo $decadas ?> décadas<br>
    O número de anos desde múltiplos de 9: <?php echo $ano_desde_multiplos_de_9 ?><br>
</h1>
</body>
</html>
